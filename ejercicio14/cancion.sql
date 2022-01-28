-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 28-01-2022 a las 14:29:24
-- Versión del servidor: 8.0.27-0ubuntu0.20.04.1
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `musica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cancion`
--

CREATE TABLE `cancion` (
  `id` int UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `autor` varchar(50) DEFAULT NULL,
  `duracion` varchar(50) NOT NULL,
  `copyright` varchar(4) NOT NULL,
  `lanzamiento` date NOT NULL,
  `imagencd` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `cancion`
--

INSERT INTO `cancion` (`id`, `nombre`, `genero`, `autor`, `duracion`, `copyright`, `lanzamiento`, `imagencd`) VALUES
(6, 'High to hell', 'Rock', 'AC/DC', '3:28', '4571', '1979-07-27', 'acdc.jpg'),
(5, 'Tsunami', 'Big room', 'Borgeous', '3:56', '3487', '2013-10-02', 'tsunami.jpg'),
(4, 'Bohemian Rhapsody', 'Rock', 'Queen', '5:54', '3487', '1975-10-31', 'queen.jpg'),
(3, 'Without Me', 'Rap', 'Eminem', '4:50', '3475', '2002-05-26', 'eminem.webp'),
(2, 'Fanatica sensual', 'Reggaeton', 'Plan B', '4:00', '2256', '2014-09-25', 'fanatica sensual.jpg'),
(1, 'Solar System', 'DNB', 'Sub Focus', '4:48', '1304', '2009-08-26', 'Solar System.jpg'),
(7, 'Duality', 'Heavy Metal', 'Slipknot', '4:12', '6660', '2004-05-04', 'slipknot.jpg'),
(8, 'Rockstar', 'Trap', 'Post Malone', '3:38', '5579', '2028-04-27', 'postmalone.webp'),
(9, 'Thiller', 'Pop', 'Michael Jackson', '5:57', '6773', '1982-11-30', 'michael.jpg'),
(10, 'El vals del obrero', 'Ska', 'Ska-p', '4:37', '9673', '1996-03-01', 'obrero.jpg'),
(21, 'Solar System', 'DNB', 'Sub Focus', '1', '2', '2021-11-30', 'Solar System.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cancion`
--
ALTER TABLE `cancion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cancion`
--
ALTER TABLE `cancion`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
