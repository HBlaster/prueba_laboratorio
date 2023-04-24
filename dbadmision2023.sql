-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-04-2023 a las 23:15:46
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbadmision2023`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `clave_cli` varchar(20) NOT NULL,
  `nombre` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(40) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `clave_cli`, `nombre`, `email`) VALUES
(1, 'PAC1', 'PACIENTE 1', 'paciente 1@email.com'),
(2, 'PAC2', 'PACIENTE 2', 'paciente 2@email.com'),
(3, 'PAC3', 'PACIENTE 3', 'paciente 3@email.com'),
(4, 'PAC4', 'PACIENTE 4', 'paciente 4@email.com'),
(5, 'PAC5', 'PACIENTE 5', 'paciente 5@email.com'),
(6, 'PAC6', 'PACIENTE 6', 'paciente 6@email.com'),
(7, 'PAC7', 'PACIENTE 7', 'paciente 7@email.com'),
(8, 'PAC8', 'PACIENTE 8', 'paciente 8@email.com'),
(9, 'PAC9', 'PACIENTE 9', 'paciente 9@email.com'),
(10, 'PAC10', 'PACIENTE 10', 'paciente 10@email.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudios`
--

CREATE TABLE `estudios` (
  `id` int(11) NOT NULL,
  `clave_art` varchar(35) NOT NULL DEFAULT '',
  `descrip` tinytext NOT NULL,
  `precio` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudios`
--

INSERT INTO `estudios` (`id`, `clave_art`, `descrip`, `precio`) VALUES
(1, 'ART1', 'GLUCOSA', 120),
(2, 'ART2', 'UREA', 185),
(3, 'ART3', 'CREATININA', 211);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes`
--

CREATE TABLE `ordenes` (
  `id` int(11) NOT NULL,
  `folio` varchar(10) NOT NULL DEFAULT '',
  `cliente` varchar(35) NOT NULL DEFAULT '',
  `precio` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ordenes`
--

INSERT INTO `ordenes` (`id`, `folio`, `cliente`, `precio`) VALUES
(1, '2301010001', 'PAC4', 331),
(2, '2301010002', 'PAC7', 120),
(3, '2301010003', 'PAC10', 516);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes_partidas`
--

CREATE TABLE `ordenes_partidas` (
  `id` int(11) NOT NULL,
  `venta` varchar(35) NOT NULL DEFAULT '',
  `articulo` varchar(35) NOT NULL DEFAULT '',
  `precioUnitario` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ordenes_partidas`
--

INSERT INTO `ordenes_partidas` (`id`, `venta`, `articulo`, `precioUnitario`) VALUES
(1, '2301010001', 'ART1', 120),
(2, '2301010001', 'ART3', 211),
(3, '2301010002', 'ART1', 120),
(4, '2301010003', 'ART1', 120),
(5, '2301010003', 'ART2', 185),
(6, '2301010003', 'ART3', 211);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD UNIQUE KEY `id` (`id`) USING BTREE,
  ADD UNIQUE KEY `clave_cli` (`clave_cli`),
  ADD KEY `nombre` (`nombre`) USING BTREE;

--
-- Indices de la tabla `estudios`
--
ALTER TABLE `estudios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ordenes_partidas`
--
ALTER TABLE `ordenes_partidas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `estudios`
--
ALTER TABLE `estudios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ordenes_partidas`
--
ALTER TABLE `ordenes_partidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
