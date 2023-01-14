-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 14-01-2023 a las 22:00:36
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `galeria_php`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) COLLATE utf8_bin NOT NULL,
  `imagen` varchar(200) COLLATE utf8_bin NOT NULL,
  `texto` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`id`, `titulo`, `imagen`, `texto`) VALUES
(17, 'Hojas de árboles', '1.webp', 'Una foto que tome de unos arboles en la UCV'),
(18, 'Plaza del rectorado de la UCV', '2.webp', 'Última foto que tomé en la Universidad Central de Venezuela'),
(19, 'Gelatina', '3.webp', 'Gelatina casera que hice'),
(20, 'Escarabajo dorado', '4.webp', 'Un escarabajo dorado que encontré en el porche de la casa'),
(21, 'Mantenimiento a la Laptop', '5.webp', 'Una foto del día que le hice mantenimiento a la laptop'),
(22, 'Día en el parque', '6.webp', 'Una foto del día que fui al parque a escuchar un audiolibro'),
(23, 'Luna', '7.webp', 'El mejor intento de mi teléfono para tomar una foto de la luna'),
(24, 'Dino de origami', '8.webp', 'Un dino de origami que hizo luiye y que me regaló'),
(25, 'Flor amarilla', '9.webp', 'Una flor amarilla que nos encontramos en la UCV'),
(26, 'Flor extraña', '10.webp', 'Una flor extraña que nos encontramos en la UCV'),
(27, 'Cubo de rubik', '11.webp', 'Forma de colores azul, blanco y naranja en un cubo de rubik hecho por José'),
(28, 'Barquito de papel', '12.webp', 'Un origami de un barquito hecho por Luiye'),
(29, 'Nana', '13.webp', 'Una foto de la carita de Nana'),
(30, 'Estrella', '14.webp', 'Una foto de estrella'),
(31, 'Gato de una verdulería', '15.webp', 'Una foto de un gato que encontré en una verdulería');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
