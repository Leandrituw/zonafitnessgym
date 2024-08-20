-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2024 a las 14:00:47
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
-- Base de datos: `zonafitnessgym`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `Usuario` varchar(20) NOT NULL,
  `Clave` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`Usuario`, `Clave`) VALUES
('Lean', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `Nombre` varchar(20) NOT NULL,
  `Apellido` varchar(20) NOT NULL,
  `DNI` int(20) NOT NULL,
  `FechaDeNacimiento` date NOT NULL,
  `Genero` text NOT NULL,
  `Direccion` varchar(20) NOT NULL,
  `Telefono` varchar(30) NOT NULL,
  `CorreoElectronico` varchar(30) NOT NULL,
  `Profesion` varchar(20) NOT NULL,
  `Enfermedad` varchar(20) NOT NULL,
  `Habito` varchar(20) NOT NULL,
  `ActividadPrevia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Nombre`, `Apellido`, `DNI`, `FechaDeNacimiento`, `Genero`, `Direccion`, `Telefono`, `CorreoElectronico`, `Profesion`, `Enfermedad`, `Habito`, `ActividadPrevia`) VALUES
('Juan', 'Perez', 47000000, '2006-08-25', 'Masculino', 'Liniers 504', '15524023', 'juanperez@gmail.com', 'Estudiante', 'Ninguna', 'Ninguno', 'Handball');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`DNI`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
