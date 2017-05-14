-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2017 a las 07:17:54
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `viapublica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expedientes`
--

CREATE TABLE `expedientes` (
  `id` int(11) NOT NULL,
  `numeroexp` int(11) NOT NULL,
  `anioexp` int(11) NOT NULL,
  `empresa` varchar(20) NOT NULL,
  `callenombre` varchar(50) NOT NULL,
  `callenumero` int(11) NOT NULL,
  `fechaingreso` date NOT NULL,
  `t1l` int(11) NOT NULL,
  `t1a` int(11) NOT NULL,
  `t2l` int(11) NOT NULL,
  `t2a` int(11) NOT NULL,
  `t3l` int(11) NOT NULL,
  `t3a` int(11) NOT NULL,
  `t4l` int(11) NOT NULL,
  `t4a` int(11) NOT NULL,
  `operador` varchar(50) NOT NULL,
  `observaciones` text NOT NULL,
  `liquidado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `expedientes`
--

INSERT INTO `expedientes` (`id`, `numeroexp`, `anioexp`, `empresa`, `callenombre`, `callenumero`, `fechaingreso`, `t1l`, `t1a`, `t2l`, `t2a`, `t3l`, `t3a`, `t4l`, `t4a`, `operador`, `observaciones`, `liquidado`) VALUES
(1, 100, 2017, 'AySA', 'mitre', 4000, '2017-05-14', 0, 0, 0, 0, 0, 0, 0, 0, '', 'observaciones del expediente de av mitre 4000', 0),
(2, 100, 2017, 'AySA', 'mitre', 4000, '2017-05-14', 0, 0, 0, 0, 0, 0, 0, 0, '', 'observaciones del expediente de av mitre 4000', 0),
(3, 123123, 2017, 'AySA', '123123', 123123, '2017-05-09', 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0),
(4, 123, 2017, 'AySA', '3123', 132123, '2017-05-23', 0, 0, 0, 0, 0, 0, 0, 0, '', '1233333333333333', 0),
(5, 123221, 2017, 'EdesurMediaBaja', '312132', 123123, '2017-05-15', 0, 0, 0, 0, 0, 0, 0, 0, '', '1322222222222222222222222222222222222222222222222222222222222', 0),
(6, 4444, 2015, 'OtrosEdesur', '444444', 7, '2017-05-16', 0, 0, 0, 0, 0, 0, 0, 0, '', '444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `expedientes`
--
ALTER TABLE `expedientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `expedientes`
--
ALTER TABLE `expedientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
