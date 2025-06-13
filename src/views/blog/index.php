<?php include __DIR__ . '/../layout/header.php'; ?>

<main id="blog" class="container">
  <section class="encabezado-blog">
    <h1>Últimos Blogs de Ecoviviendas</h1>
    <p>Consejos, ideas y novedades para decorar y vivir de forma sostenible.</p>
  </section>

  <section class="lista-blog">
    <?php
    
    $vlogs = [
        ['id' => 1, 'titulo' => 'Guía de decoración de tu habitación', 'fecha' => '2024-05-01', 'imagen' => 'blog1.jpg', 'resumen' => 'Aprende cómo transformar tu habitación en un espacio ecológico y acogedor.'],
        ['id' => 2, 'titulo' => 'Guía de decoración de tu ecovivienda', 'fecha' => '2024-05-05', 'imagen' => 'blog2.jpg', 'resumen' => 'Ideas y materiales sostenibles para decorar toda tu casa.'],
        ['id' => 3, 'titulo' => 'Ejemplo de decoración de vivienda', 'fecha' => '2024-05-10', 'imagen' => 'blog3.jpg', 'resumen' => 'Inspírate con ejemplos reales de decoración responsable.'],
        ['id' => 4, 'titulo' => 'Guía de decoración de tu jardín', 'fecha' => '2025-05-15', 'imagen' => 'blog4.jpg', 'resumen' => 'Consejos para crear un jardín verde, funcional y bonito.'],
        ['id' => 5, 'titulo' => 'Cómo aprovechar la luz natural en casa', 'fecha' => '2025-05-20', 'imagen' => 'blog5.jpg', 'resumen' => 'Consejos prácticos para ahorrar energía y mejorar el ambiente con luz natural.'],
        ['id' => 6, 'titulo' => 'Tendencias en hogares sostenibles 2025', 'fecha' => '2025-05-25', 'imagen' => 'blog6.jpeg', 'resumen' => 'Descubre las nuevas ideas y tecnologías verdes que marcarán el futuro.'],
    ];

    foreach ($vlogs as $vlog): ?>
      <article class="entrada">
        <img src="/ecoviviendas/public/img/<?php echo $vlog['imagen']; ?>" alt="Imagen de <?php echo $vlog['titulo']; ?>">
        <div class="contenido-entrada">
          <h2><?php echo $vlog['titulo']; ?></h2>
          <p class="fecha">Publicado el <?php echo date('d/m/Y', strtotime($vlog['fecha'])); ?></p>
          <p><?php echo $vlog['resumen']; ?></p>
          <a href="/ecoviviendas/public/?url=blog/ver&id=<?php echo $vlog['id']; ?>" class="btn">Leer más</a>        
        </div>
      </article>
    <?php endforeach; ?>
  </section>
</main>

<?php include __DIR__ . '/../layout/footer.php'; ?>