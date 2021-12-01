-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2021 a las 00:36:26
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `teruel2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personass`
--

CREATE TABLE `personass` (
  `user` varchar(50) DEFAULT NULL,
  `pas` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sexo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personass`
--

INSERT INTO `personass` (`user`, `pas`, `email`, `sexo`) VALUES
('Juliana', 1234, 'Juliana_cocina@gmail.com', 'Femenino'),
('Juliana', 1234, 'Juliana_cocina@gmail.com', 'Femenino'),
('Magali@gmail.com', 12557, 'femenino', 'magui'),
('magui', 15875, 'Gaby@gmail.com', 'femenino'),
('cami', 444, 'Albe@gmail.com', 'femenino');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
