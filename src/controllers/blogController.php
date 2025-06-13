<?php
namespace App\Controllers;

use App\Models\Blog;

class BlogController {
    public function listar() {
        $blogs = [
            new Blog(['id' => 1, 'titulo' => 'Guía de decoración de tu habitación', 'fecha' => '2024-05-01', 'imagen' => 'blog1.jpg', 'resumen' => 'Aprende cómo transformar tu habitación en un espacio ecológico y acogedor.']),
            new Blog(['id' => 2, 'titulo' => 'Guía de decoración de tu ecovivienda', 'fecha' => '2024-05-05', 'imagen' => 'blog2.jpg', 'resumen' => 'Ideas y materiales sostenibles para decorar toda tu casa.']),
            new Blog(['id' => 3, 'titulo' => 'Ejemplo de decoración de vivienda', 'fecha' => '2024-05-10', 'imagen' => 'blog3.jpg', 'resumen' => 'Inspírate con ejemplos reales de decoración responsable.']),
            new Blog(['id' => 4, 'titulo' => 'Guía de decoración de tu jardín', 'fecha' => '2025-05-15', 'imagen' => 'blog4.jpg', 'resumen' => 'Consejos para crear un jardín verde, funcional y bonito.']),
            new Blog(['id' => 5, 'titulo' => 'Cómo aprovechar la luz natural en casa', 'fecha' => '2025-05-20', 'imagen' => 'blog5.jpg', 'resumen' => 'Consejos prácticos para ahorrar energía y mejorar el ambiente con luz natural.']),
            new Blog(['id' => 6, 'titulo' => 'Tendencias en hogares sostenibles 2025', 'fecha' => '2025-05-25', 'imagen' => 'blog6.jpeg', 'resumen' => 'Descubre las nuevas ideas y tecnologías verdes que marcarán el futuro.']),
        ];

        require_once __DIR__ . '/../views/blog/index.php';
    }

    public function ver($id) {
        $blogs = [
            1 => ['titulo' => 'Guía habitación', 'contenido' => 'En esta completa guía aprenderás a transformar tu habitación en un espacio que combine estilo y sostenibilidad. Empezamos por la elección de materiales responsables, como maderas certificadas FSC, pinturas libres de compuestos orgánicos volátiles (COV) y textiles naturales como el algodón orgánico o el lino. Además, te mostramos cómo aprovechar la luz natural para reducir el consumo energético, mediante cortinas translúcidas y espejos estratégicamente colocados. También incluimos consejos para mejorar la calidad del aire interior con plantas purificadoras y sistemas de ventilación natural, creando un ambiente saludable para tu bienestar y el del planeta. Finalmente, analizamos opciones de mobiliario reciclado y DIY que aportan personalidad y reducen el impacto ambiental.'],

            2 => ['titulo' => 'Guía ecovivienda', 'contenido' => 'Decorar una vivienda ecológica no significa renunciar al diseño o la comodidad. En este artículo te mostramos cómo combinar materiales reciclados y de bajo impacto ambiental con tendencias actuales para lograr espacios modernos y funcionales. Descubre cómo elegir muebles elaborados con madera recuperada o plástico reciclado, y cómo integrar elementos naturales como fibras vegetales en alfombras y cortinas. También hablamos de la importancia de la iluminación LED de bajo consumo y de la incorporación de plantas de interior que aportan frescura y mejoran el ambiente. Te ofrecemos una selección de marcas y proveedores especializados en productos ecoamigables, además de consejos prácticos para que tu hogar refleje tus valores sin sacrificar estética.'],

            3 => ['titulo' => 'Ejemplo de decoración de vivienda', 'contenido' => 'Esta vivienda moderna es un claro ejemplo de cómo integrar principios de sostenibilidad sin renunciar al diseño y la comodidad. La casa utiliza materiales reciclados en los muebles y revestimientos, con suelos de madera certificada y pinturas ecológicas que garantizan un ambiente saludable. La iluminación natural se maximiza gracias a grandes ventanales orientados estratégicamente, complementados con iluminación LED de bajo consumo para las horas nocturnas. Los espacios abiertos y multifuncionales permiten un uso eficiente de la energía y el espacio, mientras que las plantas de interior aportan frescura y mejoran la calidad del aire. Este proyecto demuestra que la sostenibilidad puede ser elegante y funcional.'],

            4 => ['titulo' => 'Guía jardín', 'contenido' => 'El diseño de un jardín ecológico es fundamental para fomentar la biodiversidad y conservar los recursos naturales. En esta guía detallada te enseñamos a seleccionar plantas autóctonas resistentes y adaptadas al clima local, que requieren menos agua y mantenimiento. Aprenderás técnicas de riego eficientes como el uso de sistemas de goteo y recogida de agua de lluvia, además de la importancia de evitar pesticidas y fertilizantes químicos en favor de soluciones orgánicas y compostaje. También exploramos la creación de hábitats para fauna beneficiosa, como abejas y aves, y consejos para el cuidado estacional del jardín que promueven la salud del suelo y la flora.'],

            5 => ['titulo' => 'Luz natural en casa', 'contenido' => 'La iluminación natural es una de las mejores estrategias para reducir la dependencia de la electricidad y mejorar la calidad de vida en el hogar. Este artículo profundiza en métodos para maximizar la entrada de luz solar mediante el diseño y la orientación de ventanas, la utilización de tragaluces y claraboyas, y el uso de materiales reflectantes en paredes y techos. También se incluyen recomendaciones sobre la distribución del mobiliario para evitar sombras y fomentar ambientes luminosos, así como la elección de colores claros que potencian la sensación de amplitud y calidez. Finalmente, hablamos de la integración con sistemas de iluminación artificial eficientes que complementan la luz natural de forma inteligente.'],

            6 => ['titulo' => 'Tendencias sostenibles 2025', 'contenido' => 'Descubre las innovaciones más relevantes que están revolucionando el diseño y construcción de viviendas sostenibles. Desde el uso de materiales inteligentes que regulan la temperatura y calidad del aire, hasta sistemas avanzados de energía renovable como paneles solares integrados y aerotermia. Exploramos también la domótica aplicada a la gestión energética y el confort, con dispositivos conectados que optimizan el consumo en función de la presencia y hábitos de los usuarios. Además, analizamos las certificaciones verdes emergentes y políticas de construcción sostenible que están marcando tendencia en el sector. Este artículo es imprescindible para quienes buscan estar a la vanguardia de la vivienda ecológica y responsable.'],
        ];

        $blog = $blogs[$id] ?? ['titulo' => 'No encontrado', 'contenido' => 'Este blog no existe'];

        require_once __DIR__ . '/../views/blog/ver.php';
    }
}