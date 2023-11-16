-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 16-11-2023 a las 17:41:41
-- Versión del servidor: 8.0.35-0ubuntu0.22.04.1
-- Versión de PHP: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_epp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_epp`
--

CREATE TABLE `tbl_epp` (
  `id` int NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `stock` int DEFAULT '0',
  `usuario` int DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `marca_baja` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tbl_epp`
--

INSERT INTO `tbl_epp` (`id`, `descripcion`, `stock`, `usuario`, `fecha_creacion`, `marca_baja`) VALUES
(1, 'Epp Uno', 47, 1, '2023-11-15 14:18:40', 0),
(2, 'Epps Eliminar', 12, 1, '2023-11-15 15:41:17', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_equipos`
--

CREATE TABLE `tbl_equipos` (
  `id` int NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `stock` int DEFAULT '0',
  `usuario` int DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `marca_baja` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tbl_equipos`
--

INSERT INTO `tbl_equipos` (`id`, `descripcion`, `stock`, `usuario`, `fecha_creacion`, `marca_baja`) VALUES
(1, 'equipo 1', 1, 1, '2023-11-15 15:51:03', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_herramientas`
--

CREATE TABLE `tbl_herramientas` (
  `id` int NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `stock` int DEFAULT '0',
  `usuario` int DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `marca_baja` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tbl_herramientas`
--

INSERT INTO `tbl_herramientas` (`id`, `descripcion`, `stock`, `usuario`, `fecha_creacion`, `marca_baja`) VALUES
(1, 'Herramienta nueva', 11, 1, '2023-11-15 16:06:24', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_materiales`
--

CREATE TABLE `tbl_materiales` (
  `id` int NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `stock` int DEFAULT '0',
  `usuario` int DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `marca_baja` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tbl_materiales`
--

INSERT INTO `tbl_materiales` (`id`, `descripcion`, `stock`, `usuario`, `fecha_creacion`, `marca_baja`) VALUES
(1, 'Material 1', 13, 1, '2023-11-15 16:00:53', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_movimientos_epps`
--

CREATE TABLE `tbl_movimientos_epps` (
  `id` int NOT NULL,
  `id_epp` int NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int NOT NULL,
  `stock_inicial` int NOT NULL,
  `stock_final` int NOT NULL,
  `id_tipo_movimiento` int NOT NULL,
  `id_personal` int NOT NULL,
  `usuario` int NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `marca_baja` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tbl_movimientos_epps`
--

INSERT INTO `tbl_movimientos_epps` (`id`, `id_epp`, `fecha`, `cantidad`, `stock_inicial`, `stock_final`, `id_tipo_movimiento`, `id_personal`, `usuario`, `fecha_creacion`, `marca_baja`) VALUES
(4, 1, '2023-11-13', 7, 38, 45, 1, 1, 1, '2023-11-15 22:07:01', 0),
(5, 1, '2023-11-13', 2, 45, 47, 1, 1, 1, '2023-11-15 22:46:14', 0),
(6, 1, '2023-11-15', 23, 47, 24, 2, 1, 1, '2023-11-15 22:46:36', 0),
(7, 1, '2023-11-15', 23, 70, 47, 2, 1, 1, '2023-11-15 22:47:46', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_movimientos_equipos`
--

CREATE TABLE `tbl_movimientos_equipos` (
  `id` int NOT NULL,
  `id_equipo` int NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int NOT NULL,
  `stock_inicial` int NOT NULL,
  `stock_final` int NOT NULL,
  `id_tipo_movimiento` int NOT NULL,
  `id_personal` int NOT NULL,
  `usuario` int NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `marca_baja` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tbl_movimientos_equipos`
--

INSERT INTO `tbl_movimientos_equipos` (`id`, `id_equipo`, `fecha`, `cantidad`, `stock_inicial`, `stock_final`, `id_tipo_movimiento`, `id_personal`, `usuario`, `fecha_creacion`, `marca_baja`) VALUES
(1, 1, '2023-11-13', 1, 0, 1, 1, 1, 1, '2023-11-15 23:24:43', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_movimientos_herramientas`
--

CREATE TABLE `tbl_movimientos_herramientas` (
  `id` int NOT NULL,
  `id_herramienta` int NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int NOT NULL,
  `stock_inicial` int NOT NULL,
  `stock_final` int NOT NULL,
  `id_tipo_movimiento` int NOT NULL,
  `id_personal` int NOT NULL,
  `usuario` int NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `marca_baja` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tbl_movimientos_herramientas`
--

INSERT INTO `tbl_movimientos_herramientas` (`id`, `id_herramienta`, `fecha`, `cantidad`, `stock_inicial`, `stock_final`, `id_tipo_movimiento`, `id_personal`, `usuario`, `fecha_creacion`, `marca_baja`) VALUES
(1, 1, '2023-11-13', 7, 4, 11, 1, 1, 1, '2023-11-16 14:46:46', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_movimientos_materiales`
--

CREATE TABLE `tbl_movimientos_materiales` (
  `id` int NOT NULL,
  `id_material` int NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int NOT NULL,
  `stock_inicial` int NOT NULL,
  `stock_final` int NOT NULL,
  `id_tipo_movimiento` int NOT NULL,
  `id_personal` int NOT NULL,
  `usuario` int NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `marca_baja` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tbl_movimientos_materiales`
--

INSERT INTO `tbl_movimientos_materiales` (`id`, `id_material`, `fecha`, `cantidad`, `stock_inicial`, `stock_final`, `id_tipo_movimiento`, `id_personal`, `usuario`, `fecha_creacion`, `marca_baja`) VALUES
(1, 1, '2023-11-15', 12, 1, 13, 1, 1, 1, '2023-11-16 14:39:56', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_personal`
--

CREATE TABLE `tbl_personal` (
  `id` int NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `id_puesto` int NOT NULL,
  `celular` int DEFAULT NULL,
  `correo` varchar(75) DEFAULT NULL,
  `usuario` int NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `marca_baja` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tbl_personal`
--

INSERT INTO `tbl_personal` (`id`, `nombres`, `id_puesto`, `celular`, `correo`, `usuario`, `fecha_creacion`, `marca_baja`) VALUES
(1, 'Diego E. Aranibar Ramos', 1, 918982677, 'aranibar.08diego@gmail.com', 1, '2023-11-15 17:40:02', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_puestos`
--

CREATE TABLE `tbl_puestos` (
  `id` int NOT NULL,
  `descripcion` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `usuario` int NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `marca_baja` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tbl_puestos`
--

INSERT INTO `tbl_puestos` (`id`, `descripcion`, `usuario`, `fecha_creacion`, `marca_baja`) VALUES
(1, 'Operador', 1, '2023-11-15 17:10:32', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipos_movimientos`
--

CREATE TABLE `tbl_tipos_movimientos` (
  `id` int NOT NULL,
  `descripcion` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `factor` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tbl_tipos_movimientos`
--

INSERT INTO `tbl_tipos_movimientos` (`id`, `descripcion`, `factor`) VALUES
(1, 'Ingreso', 1),
(2, 'Salida', -1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_epp`
--
ALTER TABLE `tbl_epp`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_equipos`
--
ALTER TABLE `tbl_equipos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_herramientas`
--
ALTER TABLE `tbl_herramientas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_materiales`
--
ALTER TABLE `tbl_materiales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_movimientos_epps`
--
ALTER TABLE `tbl_movimientos_epps`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_movimientos_equipos`
--
ALTER TABLE `tbl_movimientos_equipos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_movimientos_herramientas`
--
ALTER TABLE `tbl_movimientos_herramientas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_movimientos_materiales`
--
ALTER TABLE `tbl_movimientos_materiales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_personal`
--
ALTER TABLE `tbl_personal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_puestos`
--
ALTER TABLE `tbl_puestos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_tipos_movimientos`
--
ALTER TABLE `tbl_tipos_movimientos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_epp`
--
ALTER TABLE `tbl_epp`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_equipos`
--
ALTER TABLE `tbl_equipos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_herramientas`
--
ALTER TABLE `tbl_herramientas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_materiales`
--
ALTER TABLE `tbl_materiales`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_movimientos_epps`
--
ALTER TABLE `tbl_movimientos_epps`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tbl_movimientos_equipos`
--
ALTER TABLE `tbl_movimientos_equipos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_movimientos_herramientas`
--
ALTER TABLE `tbl_movimientos_herramientas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_movimientos_materiales`
--
ALTER TABLE `tbl_movimientos_materiales`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_personal`
--
ALTER TABLE `tbl_personal`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_puestos`
--
ALTER TABLE `tbl_puestos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_tipos_movimientos`
--
ALTER TABLE `tbl_tipos_movimientos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
