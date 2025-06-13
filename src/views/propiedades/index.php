<?php include __DIR__ . '/../layout/header.php'; ?>

<?php
// Recoge parámetro orden
$orden = $_GET['orden'] ?? '';

// Ordena array $propiedades según el parámetro 
if ($orden === 'asc') {
    usort($propiedades, fn($a, $b) => $a->precio <=> $b->precio);
} elseif ($orden === 'desc') {
    usort($propiedades, fn($a, $b) => $b->precio <=> $a->precio);
}
?>

<main id="propiedades" class="container">
  <section class="encabezado-propiedades">
    <h1>Propiedades en Venta</h1>
    <p>Encuentra tu hogar ideal: ecológico, moderno y bien ubicado.</p>
  </section>

  <!-- Formulario de orden -->
  <form method="GET" action="" class="filtro-propiedades">
    <select name="orden">
      <option value="" <?= $orden === '' ? 'selected' : '' ?>>Relevancia</option>
      <option value="asc" <?= $orden === 'asc' ? 'selected' : '' ?>>Precio: Menor a Mayor</option>
      <option value="desc" <?= $orden === 'desc' ? 'selected' : '' ?>>Precio: Mayor a Menor</option>
    </select>
    <button type="submit">Ordenar</button>
  </form>

  <section class="grid-propiedades">
    <?php foreach ($propiedades as $propiedad): ?>
      <article class="tarjeta-propiedad">
        <img src="/ecoviviendas/public/img/<?php echo $propiedad->imagen; ?>" alt="Imagen de <?php echo htmlspecialchars($propiedad->titulo); ?>" class="imagen-propiedad">

        <div class="contenido-propiedad">
          <h2 class="titulo-propiedad"><?php echo htmlspecialchars($propiedad->titulo); ?></h2>
          <p class="descripcion-propiedad"><?php echo htmlspecialchars($propiedad->descripcion); ?></p>

          <ul class="detalles-propiedad">
            <li>
              <img src="/ecoviviendas/public/img/icons/habitacion.png" alt="Habitaciones" style="width:20px; vertical-align:middle; margin-right:6px;">
              <strong></strong> <?php echo $propiedad->habitaciones; ?>
            </li>
            <li>
              <img src="/ecoviviendas/public/img/icons/bano.png" alt="Baños" style="width:20px; vertical-align:middle; margin-right:6px;">
              <strong></strong> <?php echo $propiedad->banos; ?>
            </li>
            <li>
              <img src="/ecoviviendas/public/img/icons/garaje.png" alt="Parking" style="width:20px; vertical-align:middle; margin-right:6px;">
              <strong></strong> <?php echo $propiedad->estacionamientos; ?>
            </li>
            <li>
              <img src="/ecoviviendas/public/img/icons/metros.png" alt="Metros cuadrados" style="width:20px; vertical-align:middle; margin-right:6px;">
              <?php echo $propiedad->metros; ?> m²
            </li>
          </ul>

          <p class="precio-propiedad"><?php echo number_format($propiedad->precio, 0, ',', '.') ?> €</p>

          <a href="/ecoviviendas/public/?url=propiedades/ver&id=<?php echo $propiedad->id; ?>" class="btn-ver-propiedad">Ver más</a>
        </div>
      </article>
    <?php endforeach; ?>
  </section>
</main>

<?php include __DIR__ . '/../layout/footer.php'; ?>