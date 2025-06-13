<?php
namespace Core;

class Router {
    private $rutas = [];

    public function agregar($ruta, $controladorMetodo) {
        $this->rutas[$ruta] = $controladorMetodo;
    }

    public function ejecutar() {
        // Obtener la ruta de la URL (sin parámetros)
        $ruta = $_GET['url'] ?? '';
        $ruta = rtrim($ruta, '/');

        if (isset($this->rutas[$ruta])) {
            $controladorMetodo = $this->rutas[$ruta];
            list($controlador, $metodo) = explode('@', $controladorMetodo);

            $controlador = "App\\Controllers\\$controlador";

            if (class_exists($controlador)) {
                $objControlador = new $controlador();

                if (method_exists($objControlador, $metodo)) {
                    // Pasar parámetro id si existe
                    if (isset($_GET['id'])) {
                        $objControlador->$metodo($_GET['id']);
                    } else {
                        $objControlador->$metodo();
                    }
                } else {
                    http_response_code(404);
                    echo "Método no encontrado: $metodo";
                }
            } else {
                http_response_code(404);
                echo "Controlador no encontrado: $controlador";
            }
        } else {
            http_response_code(404);
            echo "Página no encontrada";
        }
    }
}