-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 13-06-2025 a las 09:24:07
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecoviviendas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id` int(11) NOT NULL,
  `propiedad_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `mensaje` text NOT NULL,
  `fecha` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedades`
--

CREATE TABLE `propiedades` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `precio` decimal(12,2) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `habitaciones` int(11) NOT NULL,
  `banos` int(11) NOT NULL,
  `estacionamientos` int(11) NOT NULL,
  `metros` int(11) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `calle` varchar(150) NOT NULL,
  `vendedor_id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `propiedades`
--

INSERT INTO `propiedades` (`id`, `titulo`, `precio`, `imagen`, `descripcion`, `habitaciones`, `banos`, `estacionamientos`, `metros`, `ciudad`, `calle`, `vendedor_id`, `usuario_id`) VALUES
(1, 'Apartamento moderno', 1090000.00, 'moderno.jpg', 'Apartamento con acabados de lujo y excelente iluminación natural que realza los espacios. Cuenta con materiales sostenibles, suelos de parquet y una distribución funcional ideal para la vida urbana moderna. Perfecto para quienes buscan confort, diseño y eficiencia energética en un entorno privilegiado.', 2, 2, 1, 130, 'Lleida', 'Calle Velázquez 12', 1, NULL),
(2, 'Casa rústica en la sierra', 260000.00, 'rustica.jpg', 'Casa de campo con encanto rústico, equipada con chimenea tradicional y amplios espacios interiores. Rodeada de naturaleza, ofrece un terreno amplio ideal para actividades al aire libre. Construcción con materiales locales que respetan el entorno, perfecta para quienes buscan tranquilidad y vida sostenible en plena montaña.', 3, 2, 2, 150, 'La Coruña', 'Camino del Monte 8', 2, 2),
(3, 'Loft industrial', 720000.00, 'loft.jpg', 'Loft con diseño industrial y techos altos que aportan amplitud y luminosidad. Espacio abierto para múltiples usos, con acabados en hormigón y metal, manteniendo un estilo moderno y funcional. Ideal para amantes de la estética urbana y de la vida contemporánea, combinando estilo y confort en un solo lugar.', 1, 1, 0, 120, 'Oviedo', 'Avenida del Puerto 21', 3, 2),
(4, 'Dúplex con vistas', 1120000.00, 'duplex.jpg', 'Dúplex moderno con balcón privado que ofrece vistas panorámicas espectaculares. Diseño interior cuidado hasta el último detalle, con espacios amplios y luminosos. Equipado con sistemas eficientes de climatización y materiales ecológicos que garantizan confort y ahorro energético.', 3, 2, 1, 145, 'Bilbao', 'Calle Ercilla 7', 2, 1),
(5, 'Estudio minimalista', 130000.00, 'estudio.jpg', 'Estudio compacto y funcional, diseñado para maximizar el espacio y la luz natural. Ideal para profesionales o estudiantes que buscan un ambiente ordenado y moderno. Ubicado en zona céntrica con excelente conexión y servicios cercanos, ofrece una vida práctica y cómoda.', 1, 1, 0, 40, 'Zaragoza', 'Paseo Independencia 33', 1, 2),
(6, 'Chalet de lujo', 1460000.00, 'lujo.jpg', 'Exclusivo chalet con acabados de alta gama y piscina privada en un entorno tranquilo y seguro. Espacios amplios, jardín diseñado con criterios ecológicos y sistemas inteligentes para el control energético. Un hogar que combina lujo, confort y respeto por el medio ambiente.', 5, 4, 3, 320, 'Murcia', 'Calle Balmes 102', 3, 1),
(7, 'Casa familiar suburbana', 800000.00, 'suburbio.jpg', 'Amplia casa ideal para familias, situada cerca de colegios, parques y zonas de ocio. Cuenta con espacios verdes y zonas comunes pensadas para la convivencia y el bienestar. Construcción sólida con materiales respetuosos y eficiente aislamiento térmico y acústico.', 4, 2, 2, 190, 'Galicia', 'Calle San Jacinto 15', 2, 2),
(8, 'Piso funcional', 175000.00, 'funcional.jpg', 'Piso económico y funcional, perfecto para quienes buscan su primera vivienda sin renunciar a la calidad. Espacios bien distribuidos, con buena iluminación y accesos cercanos a transporte público. Una opción práctica y accesible para vivir en ciudad.', 2, 1, 0, 72, 'Málaga', 'Avenida Andalucía 50', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `fecha_registro` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedores`
--

CREATE TABLE `vendedores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vendedores`
--

INSERT INTO `vendedores` (`id`, `nombre`, `telefono`) VALUES
(1, 'Mario Fernández', '600123456'),
(2, 'Adrian Blasco', '600654321'),
(3, 'Lucía González', '600987654');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_mensajes_propiedad` (`propiedad_id`),
  ADD KEY `fk_mensajes_usuario` (`usuario_id`);

--
-- Indices de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_vendedor` (`vendedor_id`),
  ADD KEY `idx_usuario` (`usuario_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD CONSTRAINT `fk_mensajes_propiedad` FOREIGN KEY (`propiedad_id`) REFERENCES `propiedades` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_mensajes_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `mensajes_ibfk_1` FOREIGN KEY (`propiedad_id`) REFERENCES `propiedades` (`id`),
  ADD CONSTRAINT `mensajes_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD CONSTRAINT `propiedades_ibfk_1` FOREIGN KEY (`vendedor_id`) REFERENCES `vendedores` (`id`),
  ADD CONSTRAINT `propiedades_ibfk_3` FOREIGN KEY (`vendedor_id`) REFERENCES `vendedores` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
