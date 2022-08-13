-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-08-2022 a las 01:34:05
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `site-miov1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id` int(11) NOT NULL,
  `encargado` varchar(40) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `extension` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `encargado`, `nombre`, `extension`) VALUES
(2, 'miguelANGEL', 'soporte||', '2020'),
(3, 'octavio jefe de soupte', ' site', '8989'),
(12, 'faridy', 'comunicacion', '9999'),
(14, 'ponce', 'automatas', '1212'),
(16, '9', '8', '7');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `id` int(11) NOT NULL,
  `folio` varchar(40) NOT NULL,
  `estado` varchar(40) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  `departamento` varchar(40) NOT NULL,
  `trabajador` varchar(40) NOT NULL,
  `fecha_i` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `orden`
--

INSERT INTO `orden` (`id`, `folio`, `estado`, `descripcion`, `departamento`, `trabajador`, `fecha_i`) VALUES
(10, 'xxx', 'en mantenimiento cambiado', 'lalalalalalala', 'q', 'ese', '2022-02-05'),
(11, 'bienabenturado1', '1', '22', '333', '6666', '2022-02-05'),
(14, '9', '8', '7', '6', '5', '2022-07-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `id` int(11) NOT NULL,
  `folio` varchar(40) NOT NULL,
  `estado` varchar(40) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  `departamento` varchar(40) NOT NULL,
  `trabajador` varchar(40) NOT NULL,
  `fecha_i` date NOT NULL,
  `fecha_fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`id`, `folio`, `estado`, `descripcion`, `departamento`, `trabajador`, `fecha_i`, `fecha_fin`) VALUES
(1, '25', 'bien', 'bibliollalala', 'biblioteca', 'kuman', '2022-01-03', '2022-01-28'),
(2, '11111111111111', 'cambiado1', 'cambiado2', 'cambiado3', 'cambiado4', '2022-01-02', '2022-01-27'),
(6, '23', 'ENTREGADO BIEN', 'lorem ipsum', 'administrativo', 'kuman', '2022-05-22', '2022-05-22'),
(8, '9', '8', '7', '6', '5', '2022-07-12', '2022-08-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajadores`
--

CREATE TABLE `trabajadores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `numero_control` varchar(40) NOT NULL,
  `fecha_i` date NOT NULL,
  `fecha_fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `trabajadores`
--

INSERT INTO `trabajadores` (`id`, `nombre`, `numero_control`, `fecha_i`, `fecha_fin`) VALUES
(2, 'cali', '1111', '2021-01-03', '2022-12-27'),
(3, 'actulaizado1', '987654', '2022-05-22', '2024-05-22'),
(6, '9', '8', '2022-07-11', '2022-07-21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `departamento` varchar(40) NOT NULL,
  `correo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `departamento`, `correo`) VALUES
(6, 'amashop10', 'cultura', 'zqhgpgqkmeuyzxjejx@sdvgeft.com'),
(7, 'Luis Kuman ', 'informatica', 'lkuman6@gmail.com'),
(9, 'gretty', 'administrativo', 'ash@hotmail.com'),
(18, '9', '8', 'seotcklwjyibucyshv@nvhrw.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
