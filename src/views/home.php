<?php include __DIR__ . '/layout/header.php'; ?>

<main class="home-contenedor">

  <!-- Hero principal -->
  <section class="home-hero">
    <div class="hero-texto">
      <h1><span class="verde">Eco</span>viviendas</h1>
      <p>Conecta con el hogar ecológico que siempre imaginaste. Tecnología, confort y respeto por el planeta.</p>
    </div>
  </section>

  <!-- Quiénes somos -->
  <section class="home-nosotros">
    <div class="nosotros-contenido">
      <div class="nosotros-texto">
        <h2>¿Quiénes Somos?</h2>
        <p>Somos una empresa enfocada en el desarrollo de viviendas ecológicas, combinando diseño moderno, eficiencia energética y materiales sostenibles.</p>
        <p>Buscamos transformar la forma de vivir creando hogares más saludables y responsables con el entorno. Nuestro equipo está comprometido con ofrecer soluciones reales para un futuro mejor.</p>
        <a href="/ecoviviendas/public/nosotros" class="btn-home-secundario">Conócenos</a>
      </div>
      <div class="nosotros-img">
        <img src="/ecoviviendas/public/img/miembro1.jpg" alt="Equipo Ecoviviendas">
      </div>
    </div>
  </section>

  <!-- Propiedades destacadas -->
  <section class="home-seccion">
    <h2>Propiedades destacadas</h2>
    <div class="grid-propiedades-home">
      <?php foreach(array_slice($propiedades, 0, 3) as $propiedad): ?>
        <article class="tarjeta-home">
          <img src="/ecoviviendas/public/img/<?= htmlspecialchars($propiedad->imagen) ?>" alt="<?= htmlspecialchars($propiedad->titulo) ?>" class="tarjeta-imagen">
          <div class="tarjeta-info">
            <h3><?= htmlspecialchars($propiedad->titulo) ?></h3>
            <p><?= htmlspecialchars($propiedad->descripcion) ?></p>
            <p class="tarjeta-precio"><?= number_format($propiedad->precio, 0, ',', '.') ?> €</p>
            <a href="/ecoviviendas/public/?url=propiedades/ver&id=<?= $propiedad->id ?>" class="btn-home-secundario">Ver más</a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
    <div class="centrado">
      <a href="/ecoviviendas/public/propiedades" class="btn-home">Ver todas las propiedades</a>
    </div>
  </section>

  <!-- Blog -->
  <section class="home-seccion">
    <h2>Desde el Blog</h2>
    <div class="grid-blogs-home">
      <?php foreach(array_slice($blogs, 0, 2) as $blog): ?>
        <article class="tarjeta-blog-home">
          <img src="/ecoviviendas/public/img/<?= htmlspecialchars($blog->imagen) ?>" alt="<?= htmlspecialchars($blog->titulo) ?>" class="tarjeta-imagen">
          <div class="tarjeta-info">
            <h3><?= htmlspecialchars($blog->titulo) ?></h3>
            <p><?= htmlspecialchars($blog->resumen) ?></p>
            <a href="/ecoviviendas/public/?url=blog/ver&id=<?= $blog->id ?>" class="btn-home-secundario">Leer más</a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
    <div class="centrado">
      <a href="/ecoviviendas/public/blog" class="btn-home">Ver todos los blogs</a>
    </div>
  </section>

  <!-- Contacto -->
  <section class="home-contacto">
    <h2>¿Hablamos?</h2>
    <p class="contacto-subtexto">¿Tienes preguntas o te interesa alguna propiedad? Nuestro equipo estará encantado de ayudarte.</p>

    <div class="contacto-datos">
      <p><span>📧</span> <a href="mailto:info@ecoviviendas.com">info@ecoviviendas.com</a></p>
      <p><span>📞</span> <a href="tel:+34600123456">+34 600 123 456</a></p>
    </div>
  </section>
</main>

<?php include __DIR__ . '/layout/footer.php'; ?>