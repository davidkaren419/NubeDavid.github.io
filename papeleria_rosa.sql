-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2025 a las 20:09:57
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
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `img`) VALUES
(1, 'Cuaderno profesional', '100 hojas raya', 60.00, 'Cuaderno.jpg'),
(2, 'Pluma negra', 'Punta fina', 12.00, 'pluma.jpg'),
(3, 'Lápiz del Nº2', 'Madera premium', 6.00, 'lapiz.jpg'),
(4, 'Borrador blanco', 'Suave y sin manchas', 10.00, 'goma.jpg'),
(5, 'Tijeras escolares', 'Punta roma', 25.00, 'tijeras.jpg'),
(6, 'Regla 30 cm', 'Plástica', 17.00, 'regla.jpg'),
(7, 'Pegamento en barra', '20 g', 15.00, 'prit.jpg'),
(8, 'Marcador negro', 'Permanente', 18.00, 'marcador.jpg'),
(9, 'Colores 12 pzas', 'Caja escolar', 35.00, 'colores.jpg'),
(10, 'Folder tamaño carta', 'Color azul', 5.00, 'folder.jpg'),
(11, 'Engrapadora mini', 'Incluye grapas', 32.00, 'engrapadora.jpg'),
(12, 'Paquete de grapas', 'Caja 500 pzas', 30.00, 'grapas.jpg'),
(13, 'Corrector líquido', 'Alta cobertura', 20.00, 'corrector.jpg'),
(14, 'Cartulina blanca', 'Tamaño carta', 8.00, 'cartulina.jpg'),
(15, 'Plumas de colores', 'Paquete 10 pzas', 30.00, 'plumas.jpg'),
(16, 'Block de notas', 'Color amarillo', 18.00, 'block.jpg'),
(17, 'Bolsa de clips', '50 piezas', 12.00, 'clips.jpg'),
(18, 'Calculadora básica', '8 dígitos', 50.00, 'calculadora.jpg'),
(19, 'Marcatextos amarillo', 'Punta biselada', 16.00, 'marcatextos.jpg'),
(20, 'Hoja tamaño carta', 'Paquete 100 hojas', 40.00, 'hojas.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `productos` longtext NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `productos`, `total`, `fecha`) VALUES
(1, '[{\"id\":1,\"nombre\":\"Cuaderno profesional\",\"precio\":45,\"cantidad\":1},{\"id\":2,\"nombre\":\"Pluma negra\",\"precio\":12,\"cantidad\":1},{\"id\":3,\"nombre\":\"Lápiz del Nº2\",\"precio\":6,\"cantidad\":1}]', 63.00, '2025-12-10 15:45:49'),
(2, '[{\"id\":3,\"nombre\":\"Lápiz del Nº2\",\"precio\":6,\"cantidad\":1},{\"id\":4,\"nombre\":\"Borrador blanco\",\"precio\":10,\"cantidad\":1}]', 16.00, '2025-12-10 16:54:07'),
(3, '[{\"id\":\"2\",\"nombre\":\"Pluma negra\",\"precio\":12,\"cantidad\":2}]', 24.00, '2025-12-11 18:41:54');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
