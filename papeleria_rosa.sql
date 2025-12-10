-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2025 a las 16:35:11
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `papeleria_rosa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `productos` text NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `productos`, `total`, `fecha`) VALUES
(1, 'null', 0.00, '2025-12-03 14:52:23'),
(2, 'null', 0.00, '2025-12-03 14:53:12'),
(3, 'null', 0.00, '2025-12-03 14:55:12'),
(4, 'null', 0.00, '2025-12-03 14:57:43'),
(5, '[{\"id\":2,\"nombre\":\"Pluma negra\",\"precio\":12,\"cantidad\":1}]', 12.00, '2025-12-03 15:08:29'),
(6, '[{\"id\":3,\"nombre\":\"L\\u00e1piz del N\\u00ba2\",\"precio\":6,\"cantidad\":1},{\"id\":4,\"nombre\":\"Borrador blanco\",\"precio\":10,\"cantidad\":1}]', 16.00, '2025-12-03 15:09:01'),
(7, '[{\"id\":2,\"nombre\":\"Pluma negra\",\"precio\":12,\"cantidad\":1},{\"id\":3,\"nombre\":\"L\\u00e1piz del N\\u00ba2\",\"precio\":6,\"cantidad\":1}]', 18.00, '2025-12-03 15:12:25'),
(8, '[{\"id\":3,\"nombre\":\"L\\u00e1piz del N\\u00ba2\",\"precio\":6,\"cantidad\":1},{\"id\":4,\"nombre\":\"Borrador blanco\",\"precio\":10,\"cantidad\":1}]', 16.00, '2025-12-03 17:02:26'),
(9, '[{\"id\":2,\"nombre\":\"Pluma negra\",\"precio\":12,\"cantidad\":1},{\"id\":3,\"nombre\":\"L\\u00e1piz del N\\u00ba2\",\"precio\":6,\"cantidad\":1},{\"id\":4,\"nombre\":\"Borrador blanco\",\"precio\":10,\"cantidad\":1}]', 28.00, '2025-12-04 17:42:45'),
(10, '[{\"id\":1,\"nombre\":\"Cuaderno profesional\",\"precio\":45,\"cantidad\":3},{\"id\":2,\"nombre\":\"Pluma negra\",\"precio\":12,\"cantidad\":1},{\"id\":3,\"nombre\":\"L\\u00e1piz del N\\u00ba2\",\"precio\":6,\"cantidad\":1},{\"id\":4,\"nombre\":\"Borrador blanco\",\"precio\":10,\"cantidad\":1},{\"id\":5,\"nombre\":\"Tijeras escolares\",\"precio\":25,\"cantidad\":1},{\"id\":6,\"nombre\":\"Regla 30 cm\",\"precio\":17,\"cantidad\":1},{\"id\":7,\"nombre\":\"Pegamento en barra\",\"precio\":15,\"cantidad\":1},{\"id\":8,\"nombre\":\"Marcador negro\",\"precio\":18,\"cantidad\":1},{\"id\":12,\"nombre\":\"Paquete de grapas\",\"precio\":30,\"cantidad\":1},{\"id\":16,\"nombre\":\"Block de notas\",\"precio\":18,\"cantidad\":1},{\"id\":15,\"nombre\":\"Plumas de colores\",\"precio\":30,\"cantidad\":1},{\"id\":14,\"nombre\":\"Cartulina blanca\",\"precio\":8,\"cantidad\":1},{\"id\":13,\"nombre\":\"Corrector l\\u00edquido\",\"precio\":20,\"cantidad\":1},{\"id\":9,\"nombre\":\"Colores 12 pzas\",\"precio\":35,\"cantidad\":1},{\"id\":10,\"nombre\":\"Folder tama\\u00f1o carta\",\"precio\":5,\"cantidad\":1},{\"id\":17,\"nombre\":\"Bolsa de clips\",\"precio\":12,\"cantidad\":2},{\"id\":18,\"nombre\":\"Calculadora b\\u00e1sica\",\"precio\":50,\"cantidad\":1},{\"id\":20,\"nombre\":\"Hoja tama\\u00f1o carta\",\"precio\":40,\"cantidad\":1}]', 498.00, '2025-12-04 17:56:04'),
(11, '[{\"id\":4,\"nombre\":\"Borrador blanco\",\"precio\":10,\"cantidad\":1},{\"id\":3,\"nombre\":\"L\\u00e1piz del N\\u00ba2\",\"precio\":6,\"cantidad\":1}]', 16.00, '2025-12-04 19:17:59'),
(12, '[{\"id\":2,\"nombre\":\"Pluma negra\",\"precio\":12,\"cantidad\":1},{\"id\":3,\"nombre\":\"L\\u00e1piz del N\\u00ba2\",\"precio\":6,\"cantidad\":1}]', 18.00, '2025-12-10 14:37:04'),
(13, '[{\"id\":7,\"nombre\":\"Pegamento en barra\",\"precio\":15,\"cantidad\":1},{\"id\":8,\"nombre\":\"Marcador negro\",\"precio\":18,\"cantidad\":1}]', 33.00, '2025-12-10 14:37:26'),
(14, '[{\"id\":3,\"nombre\":\"L\\u00e1piz del N\\u00ba2\",\"precio\":6,\"cantidad\":1},{\"id\":4,\"nombre\":\"Borrador blanco\",\"precio\":10,\"cantidad\":1},{\"id\":8,\"nombre\":\"Marcador negro\",\"precio\":18,\"cantidad\":1},{\"id\":7,\"nombre\":\"Pegamento en barra\",\"precio\":15,\"cantidad\":2},{\"id\":6,\"nombre\":\"Regla 30 cm\",\"precio\":17,\"cantidad\":1},{\"id\":11,\"nombre\":\"Engrapadora mini\",\"precio\":32,\"cantidad\":1},{\"id\":14,\"nombre\":\"Cartulina blanca\",\"precio\":8,\"cantidad\":1}]', 121.00, '2025-12-10 14:38:41');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
