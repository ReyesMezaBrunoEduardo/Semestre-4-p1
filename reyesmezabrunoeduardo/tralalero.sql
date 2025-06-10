-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-04-2025 a las 21:04:35
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
-- Base de datos: `tralalero`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brainrotsumi`
--

CREATE TABLE `brainrotsumi` (
  `id` int(11) NOT NULL,
  `nombre` int(11) NOT NULL,
  `idioma` int(11) NOT NULL,
  `rareza` int(11) NOT NULL,
  `Sigma` int(11) NOT NULL,
  `Sumi` int(11) NOT NULL,
  `fecha_ingreso` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idioma`
--

CREATE TABLE `idioma` (
  `id` int(11) NOT NULL,
  `idioma` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `idioma`
--

INSERT INTO `idioma` (`id`, `idioma`) VALUES
(1, 'Ruso'),
(2, 'Japones'),
(3, 'Español'),
(4, 'Arabe'),
(5, 'Aleman'),
(6, 'Frances'),
(7, 'Italiano'),
(8, 'Portugues'),
(9, 'Coreano'),
(10, 'Hindi'),
(11, 'Ingles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nombre`
--

CREATE TABLE `nombre` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `nombre`
--

INSERT INTO `nombre` (`id`, `nombre`) VALUES
(1, 'Tung tung tung sahur'),
(2, 'Capuchino Assassino'),
(3, 'La vaca saturno saturnita'),
(4, 'Glorbo Fruttodrillo'),
(5, 'Brr brr Patapim'),
(6, 'Bri Bri Bicus Dicus'),
(7, 'Schimpanzini Bananini'),
(8, 'Tralalero Tralala'),
(9, 'Frigo Camelo'),
(10, 'Lirilì Larilà'),
(11, 'Bombombini Gusini'),
(12, 'Frulli Frulla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rareza`
--

CREATE TABLE `rareza` (
  `id` int(11) NOT NULL,
  `rareza` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rareza`
--

INSERT INTO `rareza` (`id`, `rareza`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sigma`
--

CREATE TABLE `sigma` (
  `id` int(11) NOT NULL,
  `Sigma` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sigma`
--

INSERT INTO `sigma` (`id`, `Sigma`) VALUES
(1, 'Sigma boy'),
(2, 'Skibidi sigma pomni'),
(3, 'Gigachad'),
(4, 'Dopdopyesyes'),
(5, 'Droki von'),
(6, 'Droki king of the gooning');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sumi`
--

CREATE TABLE `sumi` (
  `id` int(11) NOT NULL,
  `Sumi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sumi`
--

INSERT INTO `sumi` (`id`, `Sumi`) VALUES
(1, 'Negra'),
(2, 'Yume'),
(3, 'De los sumis'),
(4, 'Sumi despertada'),
(5, 'Sumi ricardo'),
(6, 'Sumi brainrot queen contra droki');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `brainrotsumi`
--
ALTER TABLE `brainrotsumi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nombre` (`nombre`),
  ADD KEY `idioma` (`idioma`),
  ADD KEY `rareza` (`rareza`),
  ADD KEY `Sigma` (`Sigma`),
  ADD KEY `Sumi` (`Sumi`);

--
-- Indices de la tabla `idioma`
--
ALTER TABLE `idioma`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nombre`
--
ALTER TABLE `nombre`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rareza`
--
ALTER TABLE `rareza`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sigma`
--
ALTER TABLE `sigma`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sumi`
--
ALTER TABLE `sumi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `brainrotsumi`
--
ALTER TABLE `brainrotsumi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `idioma`
--
ALTER TABLE `idioma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `nombre`
--
ALTER TABLE `nombre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `rareza`
--
ALTER TABLE `rareza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `sigma`
--
ALTER TABLE `sigma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `sumi`
--
ALTER TABLE `sumi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `brainrotsumi`
--
ALTER TABLE `brainrotsumi`
  ADD CONSTRAINT `brainrotsumi_ibfk_1` FOREIGN KEY (`nombre`) REFERENCES `nombre` (`id`),
  ADD CONSTRAINT `brainrotsumi_ibfk_2` FOREIGN KEY (`idioma`) REFERENCES `idioma` (`id`),
  ADD CONSTRAINT `brainrotsumi_ibfk_3` FOREIGN KEY (`rareza`) REFERENCES `rareza` (`id`),
  ADD CONSTRAINT `brainrotsumi_ibfk_4` FOREIGN KEY (`Sigma`) REFERENCES `sigma` (`id`),
  ADD CONSTRAINT `brainrotsumi_ibfk_5` FOREIGN KEY (`Sumi`) REFERENCES `sumi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
