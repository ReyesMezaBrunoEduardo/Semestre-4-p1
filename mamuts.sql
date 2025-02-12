-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-02-2025 a las 20:04:42
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mamuts`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monster`
--

CREATE TABLE `monster` (
  `id` int(10) NOT NULL,
  `sabor` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `costo` int(50) NOT NULL,
  `rareza` int(50) NOT NULL,
  `estilo` int(50) NOT NULL,
  `total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `monster`
--

INSERT INTO `monster` (`id`, `sabor`, `color`, `costo`, `rareza`, `estilo`, `total`) VALUES
(1, 'Piña', 'Amarillo', 57, 10, 8, 9),
(2, 'Durazno', 'Rosa', 55, 8, 6, 7),
(4, 'Original', 'Verde y negro', 45, 1, 6, 5),
(5, 'Sandia', 'Rojo', 54, 7, 8, 9),
(6, 'Paradaise', 'Verde suave', 55, 8, 8, 8),
(7, 'Zero', 'Azul negro', 44, 3, 5, 4),
(8, 'Chocolate', 'Cafe', 56, 10, 6, 8),
(9, 'Ultra Zero', 'Blanco', 55, 4, 9, 8),
(10, 'Sunrise', 'Rojo y naranja', 57, 9, 7, 8),
(11, 'Low cardio', 'Celeste y negro', 50, 3, 5, 4),
(12, 'Mango', 'Amarillo y azul', 49, 6, 10, 8);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `monster`
--
ALTER TABLE `monster`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `monster`
--
ALTER TABLE `monster`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
