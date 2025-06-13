<?php include __DIR__ . '/../layout/header.php'; 

use App\Models\Propiedad;

$id = $_GET['id'] ?? null;

if (!$id) {
    echo "<main class='container'><h1>ID de propiedad no válido</h1></main>";
    include __DIR__ . '/../layout/footer.php';
    exit;
}

$propiedad = Propiedad::obtenerPorId($id);

if (!$propiedad) {
    echo "<main class='container'><h1>Propiedad no encontrada</h1></main>";
    include __DIR__ . '/../layout/footer.php';
    exit;
}
?>

<main id="detalle-propiedad" class="container">
  <div class="detalle-contenido">
    <h1 class="titulo-detalle"><?= htmlspecialchars($propiedad->titulo) ?></h1>

    <img src="/ecoviviendas/public/img/<?= htmlspecialchars($propiedad->imagen) ?>" alt="Imagen de <?= htmlspecialchars($propiedad->titulo) ?>" class="imagen-detalle">

    <div class="datos-detalle">

      <ul class="iconos-detalle">
        <li><img src="/ecoviviendas/public/img/icons/habitacion.png" alt="Habitaciones" style="width:20px; vertical-align:middle; margin-right:6px;"><strong><?= $propiedad->habitaciones ?></strong> Habitaciones</li>
        <li><img src="/ecoviviendas/public/img/icons/bano.png" alt="Baños" style="width:20px; vertical-align:middle; margin-right:6px;"><strong><?= $propiedad->banos ?></strong> Baños</li>
        <li><img src="/ecoviviendas/public/img/icons/garaje.png" alt="Parking" style="width:20px; vertical-align:middle; margin-right:6px;"><strong><?= $propiedad->estacionamientos ?></strong> Parking</li>
        <li><img src="/ecoviviendas/public/img/icons/metros.png" alt="Metros cuadrados" style="width:20px; vertical-align:middle; margin-right:6px;"><?= $propiedad->metros ?> m²</li>
      </ul>

      <p class="precio-detalle"><?= number_format($propiedad->precio, 0, ',', '.') ?> €</p>
      
      <!-- Ciudad y Calle -->
      <div class="ubicacion-detalle" style="margin: 1rem 0; line-height: 1.6;">
        <p><strong>Ciudad:</strong> <?= htmlspecialchars($propiedad->ciudad) ?></p>
        <p><strong>Dirección:</strong> <?= htmlspecialchars($propiedad->calle) ?></p>
      </div>

      <!-- Descripción desde BD con clase -->
      <p class="texto-extra"><?= htmlspecialchars($propiedad->descripcion) ?></p>

      <!-- Google Maps -->
      <div class="mapa-detalle" style="margin: 2rem 0;">
        <iframe 
          src="https://www.google.com/maps?q=<?= urlencode($propiedad->calle . ', ' . $propiedad->ciudad) ?>&output=embed"
          width="100%" 
          height="300" 
          style="border:0; border-radius: 12px;" 
          allowfullscreen 
          loading="lazy">
        </iframe>
      </div>

      <!-- Formulario contacto -->
      <div class="formulario-contacto">
        <h2>¿Interesado? Contáctanos</h2>
        <form id="form-contacto" action="/ecoviviendas/public/guardar_mensaje.php" method="post">
          <input type="hidden" name="propiedad_id" value="<?= $propiedad->id ?>">
          <input type="text" name="nombre" placeholder="Tu nombre" required pattern="^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$" title="Solo letras y espacios, sin números ni símbolos"/>
          <input type="email" name="email" placeholder="Tu e-mail (obligatorio)" required title="Introduce un correo electrónico válido"/>
          <input type="tel" name="telefono" placeholder="Tu teléfono" required pattern="^[0-9]{9}$" maxlength="9" title="Introduce un número de teléfono válido de 9 dígitos"/>
          <input type="hidden" name="propiedad_id" value="<?= $propiedad->id ?>">
          <textarea name="mensaje" rows="5" placeholder="Escribe tu mensaje..." required></textarea>
          <button type="submit">Enviar consulta</button>
        </form>
        <p id="mensaje-enviado" style="display:none; color: green; margin-top: 1rem;">
          ✅ Tu mensaje se ha enviado correctamente.
        </p>
      </div>

      <a href="/ecoviviendas/public/propiedades" class="btn-volver">← Volver a propiedades</a>
    </div>
  </div>
</main>

<?php include __DIR__ . '/../layout/footer.php'; ?>