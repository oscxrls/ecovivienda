<?php include __DIR__ . '/../layout/header.php'; ?>

<?php
$id = $_GET['id'] ?? 1;

$blogs = [
  1 => ['titulo' => '<h1 class="titulo-blog">Guía habitación</h1>', 'contenido' => '<p class="contenido-blog">En esta completa guía aprenderás a transformar tu habitación en un espacio que combine estilo y sostenibilidad. Empezamos por la elección de materiales responsables, como maderas certificadas FSC, pinturas libres de compuestos orgánicos volátiles (COV) y textiles naturales como el algodón orgánico o el lino. Además, te mostramos cómo aprovechar la luz natural para reducir el consumo energético, mediante cortinas translúcidas y espejos estratégicamente colocados. También incluimos consejos para mejorar la calidad del aire interior con plantas purificadoras y sistemas de ventilación natural, creando un ambiente saludable para tu bienestar y el del planeta. Finalmente, analizamos opciones de mobiliario reciclado y DIY que aportan personalidad y reducen el impacto ambiental.</p>
  <p class="contenido-blog">
      <strong>1. Elige materiales responsables:</strong> opta por muebles con madera certificada FSC y textiles como lino o algodón orgánico. Estos materiales son más sostenibles, saludables y duraderos.</p>

    <p class="contenido-blog">
      <strong>2. Usa pinturas ecológicas:</strong> evita pinturas con COV. Hay muchas opciones ecológicas que respetan tu salud y el planeta, con gran variedad de colores.
    </p>

    <p class="contenido-blog">
      <strong>3. Aprovecha la luz natural:</strong> utiliza cortinas ligeras, despeja las ventanas y coloca espejos para reflejar la luz. Esto crea un ambiente más amplio y reduce el gasto eléctrico.
    </p>

    <p class="contenido-blog">
      <strong>4. Mejora el aire interior:</strong> ventila a diario y añade plantas como el potus, la sansevieria o la palma de bambú, que limpian el aire de forma natural.
    </p>

    <p class="contenido-blog">
      <strong>5. Muebles funcionales y reciclados:</strong> elige camas con almacenaje, escritorios plegables o muebles restaurados. Son únicos y sostenibles.
    </p>

    <p class="contenido-blog">
      <strong>6. Tecnología consciente:</strong> usa bombillas LED, enchufes con temporizador y apaga los dispositivos al dormir. Puedes incorporar domótica para regular luces o temperatura.
    </p>

    <p class="contenido-blog">
      Con pequeñas decisiones puedes conseguir una habitación moderna, ecológica y acogedora. No se trata solo de estilo, sino de crear un espacio saludable, eficiente y en armonía con el planeta.
    </p>'],

  2 => ['titulo' => '<h1 class="titulo-blog">Guía ecovivienda</h1>', 'contenido' => '<p class="contenido-blog">Decorar una vivienda ecológica no significa renunciar al diseño o la comodidad. En este artículo te mostramos cómo combinar materiales reciclados y de bajo impacto ambiental con tendencias actuales para lograr espacios modernos y funcionales. Descubre cómo elegir muebles elaborados con madera recuperada o plástico reciclado, y cómo integrar elementos naturales como fibras vegetales en alfombras y cortinas. También hablamos de la importancia de la iluminación LED de bajo consumo y de la incorporación de plantas de interior que aportan frescura y mejoran el ambiente. Te ofrecemos una selección de marcas y proveedores especializados en productos ecoamigables, además de consejos prácticos para que tu hogar refleje tus valores sin sacrificar estética.
  <p class="contenido-blog">
    <strong>1. Diseño biofílico:</strong> una ecovivienda no solo se construye con materiales sostenibles, también se vive en conexión con la naturaleza. Abre espacios al exterior, prioriza la ventilación cruzada, incorpora jardines verticales o pequeños huertos en terrazas. Incluso en pisos urbanos, introducir luz natural y vegetación ayuda a reducir el estrés y mejora la calidad del aire.
  </p>

  <p class="contenido-blog">
    <strong>2. Redistribución de espacios:</strong> antes de comprar o reformar, es importante pensar en cómo usamos realmente cada estancia. Reducir metros innecesarios o crear espacios multifuncionales evita el derroche energético y optimiza el confort. Por ejemplo, un salón conectado con la cocina puede aprovechar mejor la iluminación y calefacción.
  </p>

  <p class="contenido-blog">
    <strong>3. Materiales ecológicos certificados:</strong> apuesta por suelos de bambú, tableros libres de formaldehídos, pinturas minerales o aislamientos naturales como el cáñamo o la celulosa. Este tipo de materiales no solo cuidan el planeta, sino también tu salud y la de quienes habitan el hogar.
  </p>

  <p class="contenido-blog">
    <strong>4. Soluciones de iluminación y climatización:</strong> más allá de cambiar bombillas a LED, una ecovivienda aprovecha al máximo la orientación solar, incorpora sensores de presencia, regletas inteligentes, e incluso domótica básica para reducir el consumo energético sin renunciar a la comodidad.
  </p>

  <p class="contenido-blog">
    <strong>5. Economía circular en casa:</strong> revaloriza elementos que otros desechan: puertas convertidas en mesas, textiles transformados en cojines, estanterías hechas con cajas de fruta… Decorar con materiales reutilizados no solo es económico, también aporta carácter e historia a cada rincón.
  </p>

  <p class="contenido-blog">
    <strong>6. Tecnología al servicio de la sostenibilidad:</strong> sistemas como la aerotermia, paneles solares híbridos o recuperadores de calor permiten ahorrar a largo plazo. Existen también electrodomésticos conectados que analizan el uso de energía y ayudan a tomar decisiones más eficientes.
  </p>

  <p class="contenido-blog">
    <strong>7. Menos es más:</strong> en una ecovivienda, la sobriedad no es una carencia, sino una elección. Optar por una decoración más minimalista permite reducir el consumo de objetos innecesarios, mejorar el orden y crear entornos más relajantes y fáciles de mantener.
  </p>

  <p class="contenido-blog">
    <strong>8. Comunidad y sostenibilidad:</strong> si vives en un bloque de pisos, también puedes proponer acciones conjuntas: sistemas de recogida de agua de lluvia, compostaje comunitario, paneles solares compartidos o zonas verdes comunes. Una ecovivienda es también una forma de pensar en colectivo.
  </p>

  <p class="contenido-blog">
    En resumen, decorar una ecovivienda no es solo una cuestión estética: es una manera de vivir más consciente, saludable y responsable. Con creatividad, planificación y pequeñas inversiones, es posible construir un hogar alineado con los desafíos de nuestro tiempo, sin perder calidad ni estilo. Empieza por una habitación, por cambiar un hábito o por informarte más. Tu casa y el planeta lo agradecerán.
  </p>'],

  3 => ['titulo' => '<h1 class="titulo-blog">Ejemplo de decoración de vivienda</h1>', 'contenido' => '<p class="contenido-blog">Esta vivienda moderna es un claro ejemplo de cómo integrar principios de sostenibilidad sin renunciar al diseño y la comodidad. La casa utiliza materiales reciclados en los muebles y revestimientos, con suelos de madera certificada y pinturas ecológicas que garantizan un ambiente saludable. La iluminación natural se maximiza gracias a grandes ventanales orientados estratégicamente, complementados con iluminación LED de bajo consumo para las horas nocturnas. Los espacios abiertos y multifuncionales permiten un uso eficiente de la energía y el espacio, mientras que las plantas de interior aportan frescura y mejoran la calidad del aire. Este proyecto demuestra que la sostenibilidad puede ser elegante y funcional.</p>
  <p class="contenido-blog">
    <strong>1. Distribución inteligente:</strong> la vivienda cuenta con una distribución que prioriza la funcionalidad y la conexión entre estancias. El salón, comedor y cocina se encuentran unidos por un espacio sin barreras físicas, lo que permite una mejor ventilación y un ambiente más social. Esta configuración favorece la entrada de luz desde diferentes ángulos y mejora el rendimiento energético.
  </p>

  <p class="contenido-blog">
    <strong>2. Elección de materiales:</strong> los acabados interiores han sido cuidadosamente seleccionados para reducir el impacto ambiental. Se han utilizado paneles de corcho como aislante térmico, suelos de bambú sostenible, y encimeras fabricadas con mármol reciclado. Todos los muebles han sido restaurados o provienen de comercio justo, lo que añade carácter único y responsabilidad social al diseño.
  </p>

  <p class="contenido-blog">
    <strong>3. Decoración con propósito:</strong> en parte de la casa se ha optado por reutilizar objetos familiares: marcos antiguos, cajas de madera convertidas en estanterías, y textiles recuperados y restaurandolos dandole un toque moderno. Esto no solo reduce residuos, sino que aporta personalidad y una historia única a cada estancia.
  </p>

  <p class="contenido-blog">
    <strong>4. Climatización pasiva:</strong> la vivienda está orientada de forma estratégica para recibir calor en invierno y sombra en verano. Además, se han instalado toldos retráctiles y persianas de madera para regular la temperatura sin necesidad de aparatos eléctricos, ahorrando energía y mejorando el confort.
  </p>

  <p class="contenido-blog">
    <strong>5. Ejemplo de comedor sostenible:</strong> el comedor utiliza mobiliario reciclado, sillas y textiles libres de químicos. Las paredes están decoradas con pintura ecológica en tonos neutros. Incluso la iluminación se basa en lámparas de interior recargables.
  </p>

  <p class="contenido-blog">
    Este tipo de decoración no es solo una tendencia, es una forma de vida consciente. Cada elección dentro del hogar refleja el compromiso con el medioambiente y el bienestar. La combinación de estética, funcionalidad y sostenibilidad demuestra que se puede vivir bonito, cómodo y responsablemente. Este ejemplo es una gran inspiración para quienes desean transformar su vivienda sin renunciar a sus valores.
  </p>'],

  4 => ['titulo' => '<h1 class="titulo-blog">Guía jardín</h1>', 'contenido' => '<p class="contenido-blog">El diseño de un jardín ecológico es fundamental para fomentar la biodiversidad y conservar los recursos naturales. En esta guía detallada te enseñamos a seleccionar plantas autóctonas resistentes y adaptadas al clima local, que requieren menos agua y mantenimiento. Aprenderás técnicas de riego eficientes como el uso de sistemas de goteo y recogida de agua de lluvia, además de la importancia de evitar pesticidas y fertilizantes químicos en favor de soluciones orgánicas y compostaje. También exploramos la creación de hábitats para fauna beneficiosa, como abejas y aves, y consejos para el cuidado estacional del jardín que promueven la salud del suelo y la flora.</p>
  <p class="contenido-blog">
    <strong>1. Piensa como un ecosistema:</strong> un jardín sostenible imita a la naturaleza. No se trata solo de plantar flores bonitas, sino de favorecer relaciones entre especies, generar sombra, conservar el agua y atraer vida. Todo empieza con una planificación respetuosa del espacio, observando el clima, la orientación solar y el tipo de suelo.
  </p>

  <p class="contenido-blog">
    <strong>2. Elige plantas aliadas:</strong> las especies autóctonas son clave. Al estar adaptadas al clima local, necesitan menos riego, fertilizantes y cuidados. Plantas como lavanda, tomillo, romero o margaritas silvestres no solo embellecen, también atraen polinizadores y resisten mejor las plagas.
  </p>

  <p class="contenido-blog">
    <strong>3. Agua: cada gota cuenta:</strong> el uso de sistemas de riego por goteo, mulching (cobertura vegetal) o la recogida de agua de lluvia permite mantener un jardín verde sin desperdiciar recursos. Los barriles pluviales o tanques subterráneos son una gran inversión ecológica y económica.
  </p>

  <p class="contenido-blog">
    <strong>4. Di adiós a los químicos:</strong> los pesticidas y fertilizantes sintéticos dañan la biodiversidad del suelo y contaminan el agua. Opta por compostaje casero, purines vegetales (como ortiga o cola de caballo) o asociaciones de cultivos que se protegen entre sí.
  </p>

  <p class="contenido-blog">
    <strong>5. Crea hábitats naturales:</strong> incorpora hoteles para insectos, casas para pájaros o zonas con piedras y madera donde puedan refugiarse pequeños animales. Una fauna equilibrada es la mejor defensa contra plagas y enfermedades. Además, disfrutarás del canto de aves o la visita de mariposas.
  </p>

  <p class="contenido-blog">
    <strong>6. Jardines comestibles:</strong> plantar hierbas aromáticas, frutales o pequeños huertos es una forma de acercarse a la autosuficiencia. No necesitas mucho espacio: una pared soleada o unas macetas profundas bastan para cultivar albahaca, fresas, tomates cherry o acelgas.
  </p>

  <p class="contenido-blog">
    <strong>7. Cuida el suelo como un tesoro:</strong> el suelo es un organismo vivo. Evita dejarlo desnudo, rotura innecesaria o pisoteo constante. Añadir materia orgánica, acolchados naturales y dejar que la microvida trabaje en paz aumentará su fertilidad y capacidad de retención de agua.
  </p>

  <p class="contenido-blog">
    <strong>8. Estética consciente:</strong> un jardín ecológico también puede ser bello. Usa caminos de piedra permeables, bancos de madera reciclada, iluminación solar o cercas de bambú. Todo puede sumar belleza sin dañar el entorno ni generar residuos.
  </p>

  <p class="contenido-blog">
    En definitiva, un jardín sostenible no solo mejora el aspecto exterior de una vivienda, también contribuye a luchar contra el cambio climático, reduce la temperatura urbana, favorece la biodiversidad y mejora nuestra salud mental. Cada semilla que plantas hoy es una inversión en un futuro más verde.
  </p>'],
  
  5 => ['titulo' => '<h1 class="titulo-blog">Luz natural en casa</h1>', 'contenido' => '<p class="contenido-blog">La iluminación natural es una de las mejores estrategias para reducir la dependencia de la electricidad y mejorar la calidad de vida en el hogar. Este artículo profundiza en métodos para maximizar la entrada de luz solar mediante el diseño y la orientación de ventanas, la utilización de tragaluces y claraboyas, y el uso de materiales reflectantes en paredes y techos. También se incluyen recomendaciones sobre la distribución del mobiliario para evitar sombras y fomentar ambientes luminosos, así como la elección de colores claros que potencian la sensación de amplitud y calidez. Finalmente, hablamos de la integración con sistemas de iluminación artificial eficientes que complementan la luz natural de forma inteligente.</p>
  <p class="contenido-blog">
    <strong>1. La orientación lo es todo:</strong> al diseñar o reformar una vivienda, es crucial tener en cuenta la orientación solar. Las estancias principales deberían estar orientadas al sur o sureste para aprovechar al máximo las horas de luz, mientras que los espacios de menor uso pueden quedar al norte. Este enfoque pasivo mejora la eficiencia energética sin necesidad de tecnología.
  </p>

  <p class="contenido-blog">
    <strong>2. Ventanas inteligentes:</strong> no se trata solo de poner más ventanas, sino de elegir bien su ubicación, tamaño y tipo de cristal. Las ventanas altas o panorámicas captan mejor la luz horizontal del día. Los marcos estrechos y los vidrios bajo emisivos (low-e) permiten mayor entrada de luz sin comprometer el aislamiento térmico.
  </p>

  <p class="contenido-blog">
    <strong>3. Claraboyas y tubos solares:</strong> en pasillos oscuros, baños interiores o buhardillas, las claraboyas y tubos solares son aliados perfectos. Llevan la luz desde el tejado a cualquier rincón, sin necesidad de abrir nuevas ventanas. Además, su instalación suele ser sencilla y de bajo mantenimiento.
  </p>

  <p class="contenido-blog">
    <strong>4. Paredes que reflejan:</strong> los colores claros y neutros en techos y paredes, como el blanco, marfil o gris perla, reflejan hasta un 80% más de luz que los tonos oscuros. Utilizar pinturas ecológicas con acabado satinado o mate ayuda a amplificar la luminosidad sin deslumbramientos.
  </p>

  <p class="contenido-blog">
    <strong>5. Superficies estratégicas:</strong> espejos grandes, puertas acristaladas y suelos con acabados pulidos o claros pueden multiplicar la luz disponible. Incluso muebles con vidrio o metal contribuyen a crear sensación de amplitud y continuidad visual.
  </p>

  <p class="contenido-blog">
    <strong>6. Distribución que fluye:</strong> evitar obstáculos cerca de ventanas o balcones es clave. Colocar muebles bajos, dejar pasillos visuales abiertos y no saturar las estancias mejora la circulación de la luz natural. Menos es más cuando se trata de crear espacios luminosos.
  </p>

  <p class="contenido-blog">
    <strong>7. Cortinas funcionales:</strong> opta por tejidos translúcidos, estores de lino o paneles japoneses que dejen pasar la luz mientras mantienen la privacidad. Durante el día, mantener las ventanas despejadas o recogidas maximiza la entrada solar.
  </p>

  <p class="contenido-blog">
    <strong>8. Iluminación artificial complementaria:</strong> una buena planificación combina la luz natural con puntos LED cálidos y regulables. Así, al caer la tarde, puedes mantener una iluminación armónica sin notar un cambio brusco entre el día y la noche.
  </p>

  <p class="contenido-blog">
    Iluminar con el sol es más que una decisión estética o de ahorro: es una forma de habitar el espacio de forma consciente y natural. Un hogar bañado en luz mejora el ánimo, reduce la fatiga visual y te conecta con el ritmo natural del día. Empieza por abrir tus cortinas y deja que entre la energía del sol.
  </p>'],

  6 => ['titulo' => '<h1 class="titulo-blog">Tendencias sostenibles 2025</h1>', 'contenido' => '<p class="contenido-blog">Descubre las innovaciones más relevantes que están revolucionando el diseño y construcción de viviendas sostenibles. Desde el uso de materiales inteligentes que regulan la temperatura y calidad del aire, hasta sistemas avanzados de energía renovable como paneles solares integrados y aerotermia. Exploramos también la domótica aplicada a la gestión energética y el confort, con dispositivos conectados que optimizan el consumo en función de la presencia y hábitos de los usuarios. Además, analizamos las certificaciones verdes emergentes y políticas de construcción sostenible que están marcando tendencia en el sector. Este artículo es imprescindible para quienes buscan estar a la vanguardia de la vivienda ecológica y responsable.</p>
  <p class="contenido-blog">
    <strong>1. Materiales del futuro:</strong> el uso de bioconstrucción está creciendo. Aparecen materiales como el micelio (derivado de los hongos), hormigón que absorbe CO₂, o ladrillos fabricados con residuos orgánicos. Estos nuevos compuestos no solo reducen la huella ambiental de la construcción, sino que ofrecen mejor aislamiento, durabilidad y propiedades naturales antibacterianas.
  </p>

  <p class="contenido-blog">
    <strong>2. Arquitectura adaptable:</strong> las viviendas están evolucionando hacia modelos modulares y reconfigurables. Espacios que se transforman según la hora del día o el uso, gracias a paneles móviles, muebles retráctiles y divisores inteligentes. Esta flexibilidad permite aprovechar mejor los metros cuadrados y reducir el impacto de futuras reformas.
  </p>

  <p class="contenido-blog">
    <strong>3. Energía personalizada:</strong> en 2025 no se trata solo de tener placas solares, sino de saber cómo y cuándo usarlas. Los hogares sostenibles incorporan inteligencia energética: baterías que almacenan excedentes, paneles que giran según la posición del sol, y apps que muestran en tiempo real el consumo por habitación.
  </p>

  <p class="contenido-blog">
    <strong>4. Tecnología con propósito:</strong> la domótica da un paso más allá. Ya no es lujo, es necesidad. Termostatos que aprenden tus rutinas, persianas que se ajustan con la luz exterior, y asistentes que apagan dispositivos en modo reposo. Todo con el objetivo de evitar el desperdicio energético y aumentar la comodidad.
  </p>

  <p class="contenido-blog">
    <strong>5. Agua como recurso sagrado:</strong> aparecen sistemas más avanzados de reciclaje de aguas grises, inodoros con doble filtrado y grifos que regulan el caudal automáticamente. También se están popularizando los jardines verticales interiores que, además de purificar el aire, pueden reutilizar el agua del ambiente.
  </p>

  <p class="contenido-blog">
    <strong>6. Certificaciones más exigentes:</strong> más allá del clásico sello energético, surgen nuevos estándares como WELL, que mide el impacto del hogar sobre la salud mental y física de sus habitantes. Las promotoras que apuestan por estas certificaciones están a la cabeza del mercado y marcan tendencia.
  </p>

  <p class="contenido-blog">
    <strong>7. Comunidades regenerativas:</strong> las viviendas sostenibles ya no son casos aislados. Se integran en barrios que comparten energía, huertos urbanos, puntos de reciclaje, y espacios comunes pensados para fomentar la colaboración y el bienestar colectivo. Es el inicio de una nueva forma de habitar.
  </p>

  <p class="contenido-blog">
    En definitiva, las tendencias sostenibles de 2025 ya no son opcionales: son el camino lógico hacia un modelo de vivienda más consciente, tecnológico y adaptado al mundo actual. Estar a la vanguardia ya no es una cuestión de lujo, sino de compromiso. Y este compromiso empieza en casa.
  </p>'],
];

$blog = $blogs[$id] ?? ['titulo' => 'No encontrado', 'contenido' => 'Este blog no existe'];
?>

<main id="blog-detalle" class="container">
  <article class="entrada-blog">
    <?php echo $blog['titulo']; ?>
    <p class="meta-blog">Publicado por Ecoviviendas</p>

    <?php
      $imgPathJpeg = "/ecoviviendas/public/img/blog{$id}.jpeg";
      $imgPathJpg = "/ecoviviendas/public/img/blog{$id}.jpg";
      $imgPath = file_exists($_SERVER['DOCUMENT_ROOT'] . $imgPathJpeg) ? $imgPathJpeg : $imgPathJpg;
    ?>
    <img src="<?php echo $imgPath; ?>" alt="Imagen del blog" class="imagen-blog">

    <div class="contenido-blog">
      <?php echo $blog['contenido']; ?>
    </div>
  </article>
</main>

<?php include __DIR__ . '/../layout/footer.php'; ?>