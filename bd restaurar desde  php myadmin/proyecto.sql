-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2018 a las 03:11:36
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reg`
--

CREATE TABLE `reg` (
  `id_reg` int(11) NOT NULL,
  `rfc` varchar(70) COLLATE utf8mb4_spanish_ci NOT NULL,
  `curp` varchar(70) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nomreg` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apat` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `amat` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_u` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `reg`
--

INSERT INTO `reg` (`id_reg`, `rfc`, `curp`, `nomreg`, `apat`, `amat`, `id_u`) VALUES
(1, 'dsfsdfsdfd', 'dsfdsfsdfsdf', 'Esleiter Ramiro', 'Bustamante', 'Ataxca', 1),
(2, 'gdfgdfgdf', 'fdgdfgdfg', 'Jose Arturo', 'Galicia', 'Bernal', 2),
(5, 'fdfgdfg', 'dfgdfg', 'luis ', 'enrique', 'mat', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_u` int(11) NOT NULL,
  `nom` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tel` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_u`, `nom`, `pass`, `email`, `tel`) VALUES
(1, 'esleiter', '847d15c06c5336bf745416807f6654557aff3d62', 'esletutuns0307@gmail.com', 522941301061),
(2, 'galicia', '50addb7e207229db6f61fc27f95cf5abb717ecd9', 'galicia2812@gmail.com', 522941215281),
(3, 'junini', 'cea3103d765291dff77b7eb07f5a98602d501788', 'jinini@gmail.com', 2147483647),
(4, 'luis', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'luisenrrique_1997@hotmail.com', 522941393992),
(5, 'dfdsfsd', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', 'prueba@gmail.com', 522941234568),
(6, 'Luis Luis Luis', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', 'luis@luis.com', 522941393992);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id_reg`),
  ADD KEY `id_u` (`id_u`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_u`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reg`
--
ALTER TABLE `reg`
  MODIFY `id_reg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reg`
--
ALTER TABLE `reg`
  ADD CONSTRAINT `reg_ibfk_1` FOREIGN KEY (`id_u`) REFERENCES `user` (`id_u`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
