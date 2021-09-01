-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 01-09-2021 a las 01:55:13
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `testfinanzasdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_log`
--

DROP TABLE IF EXISTS `usuario_log`;
CREATE TABLE IF NOT EXISTS `usuario_log` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `USUARIO` varchar(50) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `CONTRA` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario_log`
--

INSERT INTO `usuario_log` (`id_user`, `USUARIO`, `EMAIL`, `CONTRA`) VALUES
(5, 'usuario', 'contacto@dreamteam.com', 'cambiar1234'),
(8, 'emi', 'emiludu@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitantes`
--

DROP TABLE IF EXISTS `visitantes`;
CREATE TABLE IF NOT EXISTS `visitantes` (
  `id_visitante` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `domicilio` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `consulta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id_visitante`),
  KEY `id_visitante` (`id_visitante`),
  KEY `nombre` (`nombre`,`apellido`,`email`,`telefono`,`domicilio`,`consulta`),
  KEY `id_visitante_2` (`id_visitante`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `visitantes`
--

INSERT INTO `visitantes` (`id_visitante`, `nombre`, `apellido`, `email`, `telefono`, `domicilio`, `consulta`) VALUES
(13, 'Juan', 'Rodriguez', 'jr@gmail.com', 3519998877, 'lugar 875', 'Muchas más consultas'),
(14, 'Laura', 'Diaz', 'laudiaz@gmail.com', 3517774455, 'Chacabuco 974', 'Tengo una consulta que tiene muchos ascentos como estos á é í ó ú y otras tantas ñ eñes ñá ñé ñí ñó ñú'),
(15, 'Matilda', 'Fernandez', 'matif@hotmail.com', 34799784412, 'Los Tulipanes 765', 'Quiero saber más sobre mis finanzas personales. Quiero mejorar la inversión de lo que gano con mi desempeño laboral.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitas`
--

DROP TABLE IF EXISTS `visitas`;
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `visitantes`
--
ALTER TABLE `visitantes`
  ADD CONSTRAINT `visitantes_ibfk_1` FOREIGN KEY (`id_visitante`) REFERENCES `visitantes` (`id_visitante`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
