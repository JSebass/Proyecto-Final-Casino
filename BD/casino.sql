-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-07-2020 a las 15:04:37
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `casino`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` varchar(20) COLLATE utf8_bin NOT NULL,
  `nombre_cli` varchar(50) COLLATE utf8_bin NOT NULL,
  `apellido_cli` int(20) DEFAULT NULL,
  `correo_cli` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `contraseña_cli` varchar(20) COLLATE utf8_bin NOT NULL,
  `fecha_nac` date DEFAULT NULL,
  `saldo` double DEFAULT NULL,
  `juego` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `estado_cli` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre_cli`, `apellido_cli`, `correo_cli`, `contraseña_cli`, `fecha_nac`, `saldo`, `juego`, `estado_cli`) VALUES
('1085935832', 'Johan Sebastian', 0, '123@gmail.com', '1q2w3e4r', '1994-05-16', 0, '1', 1),
('admin', 'admin', NULL, NULL, 'admin', NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id_empleado` varchar(20) COLLATE utf8_bin NOT NULL,
  `nombre_empleado` varchar(30) COLLATE utf8_bin NOT NULL,
  `correo_emp` varchar(20) COLLATE utf8_bin NOT NULL,
  `contraseña_emp` varchar(20) COLLATE utf8_bin NOT NULL,
  `estado_emp` tinyint(1) NOT NULL,
  `mesa` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_empleado`, `nombre_empleado`, `correo_emp`, `contraseña_emp`, `estado_emp`, `mesa`) VALUES
('1', 'Carlos Rosero', 'CR@hotmail.com', 'carlos123', 1, 1),
('2', 'Fabiola ', 'Salazar', 'Fabi0001', 1, 2),
('3', 'Juan Ochoa', 'j_o@gmomail.com', 'ochoa123', 1, 3),
('4', 'David', 'Mueses ', 'Mueses2222', 1, 4),
('5', 'Paola ', 'Ceballos', 'Pao1234', 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juego`
--

CREATE TABLE `juego` (
  `id_juego` varchar(10) COLLATE utf8_bin NOT NULL,
  `nombre_juego` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `juego`
--

INSERT INTO `juego` (`id_juego`, `nombre_juego`) VALUES
('1', 'RULETA AMERICANA'),
('2', 'POKER TEXAS HOLD\'EM'),
('3', 'POKER TEXAS HOLD\'EM BONUS'),
('4', 'POKER SIN DESCARTE'),
('5', 'BLACK JACK'),
('6', 'PUNTO Y BANCA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesa`
--

CREATE TABLE `mesa` (
  `id_mesa` int(100) NOT NULL,
  `juego_m` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `mesa`
--

INSERT INTO `mesa` (`id_mesa`, `juego_m`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `premio`
--

CREATE TABLE `premio` (
  `id_premio` varchar(10) COLLATE utf8_bin NOT NULL,
  `valor_premio` double NOT NULL,
  `fecha_premio` date NOT NULL,
  `juego` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `premio`
--

INSERT INTO `premio` (`id_premio`, `valor_premio`, `fecha_premio`, `juego`) VALUES
('1', 1000000, '2020-07-02', '1'),
('2', 5000000, '2020-06-19', '2'),
('3', 3000000, '2020-07-06', '3'),
('4', 12000000, '2020-07-09', '4'),
('5', 15000000, '2020-06-01', '5'),
('6', 5000000, '2020-07-07', '6');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `fk_juego` (`juego`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_empleado`),
  ADD KEY `fk_mesa` (`mesa`);

--
-- Indices de la tabla `juego`
--
ALTER TABLE `juego`
  ADD PRIMARY KEY (`id_juego`);

--
-- Indices de la tabla `mesa`
--
ALTER TABLE `mesa`
  ADD PRIMARY KEY (`id_mesa`),
  ADD KEY `fkjuego` (`juego_m`);

--
-- Indices de la tabla `premio`
--
ALTER TABLE `premio`
  ADD PRIMARY KEY (`id_premio`),
  ADD KEY `fk_jue` (`juego`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mesa`
--
ALTER TABLE `mesa`
  MODIFY `id_mesa` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `fk_juego` FOREIGN KEY (`juego`) REFERENCES `juego` (`id_juego`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `fk_mesa` FOREIGN KEY (`mesa`) REFERENCES `mesa` (`id_mesa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mesa`
--
ALTER TABLE `mesa`
  ADD CONSTRAINT `fkjuego` FOREIGN KEY (`juego_m`) REFERENCES `juego` (`id_juego`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `premio`
--
ALTER TABLE `premio`
  ADD CONSTRAINT `fk_jue` FOREIGN KEY (`juego`) REFERENCES `juego` (`id_juego`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
