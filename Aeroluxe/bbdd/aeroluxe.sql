-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-04-2024 a las 20:46:22
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
  `clave` varchar(255) NOT NULL,
  `fecha_alta` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellido1`, `apellido2`, `dni`, `email`, `telefono`, `clave`, `fecha_alta`) VALUES
(13, 'Alonso', 'wer', 'wert', '9999', 'a@c.x', '123456789', '$2y$10$iehLNlCAhxV0ImddXqQ35uk75yXYUiqQ0tUq65yJMxV5u543uMAgC', '2024-04-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes_en_piscina`
--

CREATE TABLE `clientes_en_piscina` (
  `id` int(99) NOT NULL,
  `id_cliente` int(99) NOT NULL,
  `id_piscina` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigo_telefonos`
--

CREATE TABLE `codigo_telefonos` (
  `id` int(99) NOT NULL,
  `codigo` varchar(2) NOT NULL COMMENT 'Codigo telefonico (ES, FR,...)',
  `id_usuario` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `piscina`
--

CREATE TABLE `piscina` (
  `id` int(99) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_cliente`
--

CREATE TABLE `tipo_cliente` (
  `id` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dni` (`dni`);

--
-- Indices de la tabla `clientes_en_piscina`
--
ALTER TABLE `clientes_en_piscina`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_en_piscina_a_clientes` (`id_cliente`),
  ADD KEY `client_en_piscina_a_piscina` (`id_piscina`);

--
-- Indices de la tabla `codigo_telefonos`
--
ALTER TABLE `codigo_telefonos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codigo_telefonos_a_clientes` (`id_usuario`);

--
-- Indices de la tabla `piscina`
--
ALTER TABLE `piscina`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_cliente`
--
ALTER TABLE `tipo_cliente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `clientes_en_piscina`
--
ALTER TABLE `clientes_en_piscina`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `codigo_telefonos`
--
ALTER TABLE `codigo_telefonos`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `piscina`
--
ALTER TABLE `piscina`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_cliente`
--
ALTER TABLE `tipo_cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes_en_piscina`
--
ALTER TABLE `clientes_en_piscina`
  ADD CONSTRAINT `client_en_piscina_a_clientes` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `client_en_piscina_a_piscina` FOREIGN KEY (`id_piscina`) REFERENCES `piscina` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `codigo_telefonos`
--
ALTER TABLE `codigo_telefonos`
  ADD CONSTRAINT `codigo_telefonos_a_clientes` FOREIGN KEY (`id_usuario`) REFERENCES `clientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
