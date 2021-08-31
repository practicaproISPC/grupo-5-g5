-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 31-08-2021 a las 13:55:20
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `testfinanzasdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_log`
--

CREATE TABLE IF NOT EXISTS `usuario_log` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `USUARIO` varchar(50) NOT NULL,
  `CONTRA` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `usuario_log`
--

INSERT INTO `usuario_log` (`id_user`, `USUARIO`, `CONTRA`) VALUES
(5, 'usuario', 'cambiar1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitantes`
--

CREATE TABLE IF NOT EXISTS `visitantes` (
  `id_visitante` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `domicilio` varchar(100) NOT NULL,
  `consulta` varchar(255) NOT NULL,
  PRIMARY KEY (`id_visitante`),
  KEY `id_visitante` (`id_visitante`),
  KEY `nombre` (`nombre`,`apellido`,`email`,`telefono`,`domicilio`,`consulta`),
  KEY `id_visitante_2` (`id_visitante`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `visitantes`
--

INSERT INTO `visitantes` (`id_visitante`, `nombre`, `apellido`, `email`, `telefono`, `domicilio`, `consulta`) VALUES
(12, 'guada', 'dsgadg', 'guadamongebarale@gmail.com', 3644559255, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitas`
--

CREATE TABLE IF NOT EXISTS `visitas` (
  `id_visita` int(10) NOT NULL AUTO_INCREMENT,
  `id_visitante` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `resultado` varchar(45) NOT NULL,
  PRIMARY KEY (`id_visita`),
  UNIQUE KEY `id_visitante_4` (`id_visitante`),
  KEY `id_visitante` (`id_visitante`,`fecha`,`resultado`),
  KEY `id_visitante_2` (`id_visitante`),
  KEY `id_visitante_3` (`id_visitante`),
  KEY `id_visita` (`id_visita`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `visitantes`
--
ALTER TABLE `visitantes`
  ADD CONSTRAINT `visitantes_ibfk_1` FOREIGN KEY (`id_visitante`) REFERENCES `visitantes` (`id_visitante`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
