-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-07-2020 a las 07:53:34
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `candiacinemas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caricaturas`
--

CREATE TABLE `caricaturas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `duracion` varchar(50) DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL,
  `calificacion` varchar(50) DEFAULT NULL,
  `sinopsis` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `caricaturas`
--

INSERT INTO `caricaturas` (`id`, `nombre`, `duracion`, `autor`, `calificacion`, `sinopsis`) VALUES
(1, 'the simpson', '30 min', 'FOX', '10', 'esta perron'),
(3, 'end games', '920 min', 'marvel', '10', 'avengers '),
(5, 'bob esponja', '20', 'nickelodeon', '7', 'una esponja debajo del mar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `duracion` varchar(50) DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL,
  `calificacion` varchar(50) DEFAULT NULL,
  `sinopsis` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `nombre`, `duracion`, `autor`, `calificacion`, `sinopsis`) VALUES
(1, 'my name is khan', '132 min', 'extraño', '10', 'me hizo llorar ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `series`
--

CREATE TABLE `series` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `duracion` varchar(50) DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL,
  `calificacion` varchar(50) DEFAULT NULL,
  `sinopsis` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `series`
--

INSERT INTO `series` (`id`, `nombre`, `duracion`, `autor`, `calificacion`, `sinopsis`) VALUES
(1, 'kenan&kel', '20 min', 'nose', '8', 'me gusta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `contrasena` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `contrasena`) VALUES
(3, 'daniel', 'daniel'),
(4, 'luis', 'luis'),
(10, 'nuevo', 'nuevo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `caricaturas`
--
ALTER TABLE `caricaturas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `caricaturas`
--
ALTER TABLE `caricaturas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `series`
--
ALTER TABLE `series`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
