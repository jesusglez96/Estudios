-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2021 a las 11:33:47
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ajax_ciclos`
--
CREATE DATABASE IF NOT EXISTS `ajax_ciclos` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ajax_ciclos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaturas`
--

CREATE TABLE `asignaturas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `horas_semanales` float NOT NULL,
  `id_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asignaturas`
--

INSERT INTO `asignaturas` (`id`, `nombre`, `horas_semanales`, `id_curso`) VALUES
(1, 'Sistemas informáticos', 6, 1),
(2, 'Bases de Datos', 6, 1),
(3, 'Lenguajes de marcas', 4, 1),
(4, 'Entorno de desarrollo', 3, 1),
(5, 'Formación y orientación laboral', 3, 1),
(6, 'Desarrollo web en entorno cliente', 6, 2),
(7, 'Desarrollo web en entorno servidor', 8, 2),
(8, 'Despliegue de aplicaciones Web', 3, 2),
(9, 'Diseño de interfaces web', 6, 2),
(10, 'Empresa e iniciativa emprendedora', 4, 2),
(11, 'Horas de libre configuración', 3, 2),
(12, 'Montaje y mantenimiento de equipos', 7, 3),
(13, 'Sistemas operativos monopuesto', 5, 3),
(14, 'Aplicaciones ofimáticas', 8, 3),
(15, 'Redes locales', 7, 3),
(16, 'Formación y orientación laboral', 3, 3),
(17, 'Sistemas operativos en red', 7, 4),
(18, 'Seguridad informática', 5, 4),
(19, 'Servicios en red', 7, 4),
(20, 'Empresa e iniciativa emprendedora', 4, 4),
(21, 'Horas de libre configuración', 3, 4),
(22, 'Sistemas informáticos', 6, 5),
(23, 'Bases de Datos', 6, 5),
(24, 'Lenguajes de marcas', 4, 5),
(25, 'Entorno de desarrollo', 3, 5),
(26, 'Formación y orientación laboral', 3, 5),
(27, 'Acceso a datos', 5, 6),
(28, 'Desarrollo de interfaces', 7, 6),
(29, 'Programación multimedia y dispositivos móviles', 4, 6),
(30, 'Programación de servicios y procesos', 3, 6),
(31, 'Sistemas de gestión empresarial', 4, 6),
(32, 'Empresa e iniciativa emprendedora', 4, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `nombre`) VALUES
(1, '1º DAW'),
(2, '2º DAW'),
(3, '1º SMR'),
(4, '2º SMR'),
(5, '1º DAM'),
(6, '2º DAM');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_curso` (`id_curso`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  ADD CONSTRAINT `fk_id_curso` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
