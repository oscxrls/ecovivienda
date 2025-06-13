<?php
require_once __DIR__ . '/../src/Database.php';
use App\Database;

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Acceso no válido']);
    exit;
}

$nombre = trim($_POST['nombre'] ?? '');
$email = trim($_POST['email'] ?? '');
$telefono = trim($_POST['telefono'] ?? '');
$mensaje = trim($_POST['mensaje'] ?? '');
$propiedad_id = intval($_POST['propiedad_id'] ?? 0);

if (!$nombre || !$email || !$telefono || !$mensaje || !$propiedad_id) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Todos los campos son obligatorios']);
    exit;
}

try {
    $db = new Database();
    $conn = $db->getConexion();

    // Para busar si el usuario ya existe por email
    $stmt = $conn->prepare("SELECT id FROM usuarios WHERE email = ?");
    $stmt->execute([$email]);
    $usuario = $stmt->fetch();

    if ($usuario) {
        $usuario_id = $usuario['id'];
    } else {
        // Insertar nuevo usuario
        $stmt = $conn->prepare("INSERT INTO usuarios (nombre, email, telefono) VALUES (?, ?, ?)");
        $stmt->execute([$nombre, $email, $telefono]);
        $usuario_id = $conn->lastInsertId();
    }

    // Insertar mensaje con el id del usuario
    $stmt = $conn->prepare("INSERT INTO mensajes (propiedad_id, usuario_id, mensaje) VALUES (?, ?, ?)");
    $stmt->execute([$propiedad_id, $usuario_id, $mensaje]);

    echo json_encode(['success' => true, 'message' => 'Mensaje enviado correctamente']);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Error al guardar el mensaje']);
}