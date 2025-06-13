# PROYECTO FINAL - ECOVIVIENDAS

**Autor:** Óscar Luy Serneguet  
**Grado Superior:** Desarrollo de Aplicaciones Web (DAW)

---

## REQUISITOS PARA EJECUTAR EL PROYECTO

1. Tener instalado:
   - XAMPP, MAMP o WAMP
   - Navegador web moderno (Chrome, Firefox, etc.)

2. Activar los servicios **Apache** y **MySQL** desde el panel de XAMPP.

3. Crear la base de datos:
   - Ir a: [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
   - Crear una base de datos llamada: **ecoviviendas**
   - Importar el archivo **`ecoviviendas.sql`** que se encuentra en la carpeta `ecoviviendasDataBase`

4. Asegúrate de que tu servidor MySQL está corriendo en el **puerto 3307**.
   - Si usas XAMPP y cambiaste el puerto, modifícalo en:

     ```php
     // Archivo: src/Database.php
     private $port = 3307;
     ```

   - Si tu MySQL usa el puerto por defecto (3306), cambia la línea anterior por:

     ```php
     private $port = 3306;
     ```

5. Ubicar la carpeta del proyecto `ecoviviendas` dentro de:

   - `C:\xampp\htdocs\` (en Windows)
   - `/Applications/XAMPP/htdocs/` (en Mac)

6. Acceder al proyecto desde el navegador:

   [http://localhost/ecoviviendas/public/](http://localhost/ecoviviendas/public/)

---

## ESTRUCTURA PRINCIPAL DEL PROYECTO

- `/public/` → Punto de entrada (`index.php`)
- `/views/` → Vistas del sitio web (home, blog, propiedades, etc.)
- `/controllers/` → Controladores (MVC)
- `/models/` → Modelos de datos (Propiedad, Blog, Usuario, etc.)
- `/css/` → Estilos personalizados
- `/js/` → Scripts (por ejemplo, validaciones)
- `/img/` → Imágenes de propiedades, blogs y diseño
- `ecoviviendas.sql` → Script con la base de datos

---

## NOTAS

- Este proyecto **no requiere login** ni panel de administración.
- Todos los **formularios son funcionales** y almacenan la información en la base de datos.