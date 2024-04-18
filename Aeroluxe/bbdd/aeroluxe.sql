-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-04-2024 a las 20:45:41
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aeroluxe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(99) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido1` varchar(30) NOT NULL,
  `apellido2` varchar(30) NOT NULL,
  `dni` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `fecha_alta` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellido1`, `apellido2`, `dni`, `email`, `telefono`, `clave`, `fecha_alta`) VALUES
(2, 'alo', 'qwert', '2345', '123456', 'aaa@g.com', '123456789', '1234', '2024-04-16'),
(3, 'qwertyuikjhytr', 'werghj', 'rtyjhk', '12345678', 'aa@g.m', '123456789', '$2y$10$yoPAxH3WkvYY8B9rNePP9uuKxE6Bqi/sAi4M6me45Tb', '2024-04-16'),
(4, 'prueba', 'qwertyu', 'sdgh', '123456', 'a@h.l', '123456788', '$2y$10$URvp9lWILKnolIwh8qEZRejPtDbmHve8/6J4HydIq3A', '2024-04-16'),
(5, '3wertyudtfguhiuydhfg', 'srtygjhrtetyukdhsegdrftgyhjgdf', 'resdftyguftyhdrfyghuiyftjhdrgt', '234567890\'', 'a@j.m', '123456789', '$2y$10$P/qGDZo4s1VkH2vexE0ZJ.lxu.Zn1qeELZi/iWWyzmh', '2024-04-16'),
(6, 'paqui', 'salas', 'bjvkd', '12341234', 'a@d.e', '123456789', '$2y$10$l5V6VUc4GeRDI8N2w2/2/uBZ3Oy.LT0R1SWIwj1T3oU', '2024-04-18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
