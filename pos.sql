-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-10-2018 a las 22:22:16
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `fecha`) VALUES
(1, 'CANALETAS', '2018-07-29 05:19:51'),
(2, 'CONDULETS', '2018-07-29 05:20:00'),
(3, 'TUBERÍAS', '2018-07-29 05:20:07'),
(4, 'COPLES', '2018-07-29 23:38:45'),
(5, 'HERRAMIENTA ELECTRÓNICA', '2018-07-30 21:57:53'),
(6, 'TORNILLERIA', '2018-08-03 17:49:30'),
(7, 'CABLE ELECTRICO', '2018-08-06 18:46:33'),
(8, 'FIBRA OPTICA', '2018-08-06 21:20:03'),
(9, 'FIREWALL', '2018-08-16 15:48:11'),
(10, 'PEGAMENTO', '2018-09-08 22:51:45'),
(11, ' Llantas', '2018-09-29 05:44:40'),
(12, 'Lamparas', '2018-09-29 05:44:50'),
(13, 'Servicios', '2018-09-29 05:44:57'),
(14, 'Rines', '2018-10-03 00:23:54'),
(15, 'Mazas', '2018-10-03 00:24:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `empresa` text COLLATE utf8_spanish_ci NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `compras` int(11) NOT NULL,
  `ultima_compra` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `empresa`, `email`, `telefono`, `direccion`, `compras`, `ultima_compra`, `fecha`) VALUES
(1, 'Joan Manuel García Castro', 'Grupo LALAs', 'joan.manuel@gmail.com', '(31) 1203-8199', 'Monterrey #26', 5, '0000-00-00 00:00:00', '2018-10-03 00:18:12'),
(4, 'Diana Laura', 'Ingenio de Puga', 'Diana.garcia@ccred.com', '(32) 1113-2341', 'Monterrey #27', 10, '2018-10-06 22:53:05', '2018-10-07 04:56:05'),
(5, 'David Gallardo', 'CCred', 'david.gallardo@gmail.com', '(55) 1231-2312', 'Col. del Valle', 10, '2018-10-07 16:50:53', '2018-10-07 21:50:53'),
(6, 'Beto el duro', 'los sandiwthces perrones', 'beto@gmail.com', '(55) 1203-1231', 'claveria 12312312', 11, '2018-10-06 23:56:51', '2018-10-07 04:56:51'),
(7, 'El tranki', 'fontaneros claveria', 'eltranki@gmail.com', '(55) 5555-5555', 'claveria 32123124', 21, '2018-10-07 01:00:54', '2018-10-07 06:00:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `codigo` text COLLATE utf8_spanish_ci NOT NULL,
  `codigoCCR` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `unidad` text COLLATE utf8_spanish_ci NOT NULL,
  `precio_compra` float NOT NULL,
  `precio_venta` float NOT NULL,
  `ventas` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `id_categoria`, `codigo`, `codigoCCR`, `descripcion`, `imagen`, `stock`, `unidad`, `precio_compra`, `precio_venta`, `ventas`, `fecha`) VALUES
(6, 4, '401', 'CCR401', 'COPLE PARED DELGADA DE 19 MM', 'views/img/productos/401/853.jpg', 100, 'PIEZA', 9.99, 13.986, 0, '2018-10-07 04:56:05'),
(7, 4, '402', 'CCR402', 'COPLE PARED DELGADA DE 25 MM', 'views/img/productos/402/504.jpg', 100, 'PIEZA', 6.79, 9.506, 0, '2018-10-07 04:56:05'),
(8, 2, '201', 'CCR201', 'CONDULET TIPO LB DE 19 MM', 'views/img/productos/201/479.jpg', 100, 'PIEZA', 39.6, 55.44, 0, '2018-10-07 04:56:05'),
(9, 2, '202', 'CCR202', 'CONDULET TIPO LB DE 25 MM', 'views/img/productos/202/600.jpg', 100, 'PIEZA', 39.6, 55.44, 0, '2018-10-03 00:18:12'),
(10, 5, '501', 'CC501', 'TALADRO INALAMBRICO DE LA MARCA MILWAUKEE', 'views/img/productos/501/402.jpg', 90, 'PIEZA', 2000, 2000, 10, '2018-10-07 21:50:53'),
(11, 3, '601', 'CCR601', 'TUBO', 'views/img/productos/601/673.jpg', 85, 'ML', 80, 100, 15, '2018-10-07 04:53:05'),
(12, 7, '701', 'CCR701', 'CABLE CONDUMEX CALIBRE 10', 'views/img/productos/701/467.jpg', 100, 'ML', 13, 18.2, 0, '2018-10-01 04:26:25'),
(13, 8, '801', 'CCR801', 'FIBRA OPTICA MONOMODO 50 SOBRE 125', 'views/img/productos/801/666.jpg', 100, 'ML', 128.56, 192.84, 0, '2018-10-04 17:30:59'),
(14, 8, '802', 'CCR802', 'FIBRA OPTICA MONOMODO 100 SOBRE 125', 'views/img/productos/802/756.jpg', 100, 'PZ', 200, 280, 0, '2018-08-07 20:33:36'),
(15, 9, '901', 'CCRFW901', 'FRIREWALL PA', 'views/img/productos/default/anonymous.png', 100, 'PZA', 1500, 1725, 0, '2018-10-01 04:26:30'),
(16, 1, '101', 'CCR101', 'CANALETA PB3 HUBBEL DE 3 PULGADAS', 'views/img/productos/101/390.jpg', 100, 'ML', 100, 140, 0, '2018-10-01 04:26:33'),
(17, 10, '1001', 'PEGAMEX1001', 'PEGAMENTO 5001', 'views/img/productos/1001/164.jpg', 90, 'PIEZA', 100, 180, 10, '2018-10-07 06:00:54'),
(18, 11, '1101', 'PB1001', 'Llanta para bicicleta 700', 'views/img/productos/1101/454.jpg', 93, 'PIEZA', 100, 300, 7, '2018-10-07 04:56:51'),
(19, 14, '1401', 'PB1401', 'Rines 20 pulgadas marca lalala', 'views/img/productos/1401/231.jpg', 2, 'PIEZA', 500, 900, 6, '2018-10-07 06:00:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `perfil`, `foto`, `estado`, `ultimo_login`, `fecha`) VALUES
(9, 'Administrador Fregón', 'admin', '$2a$07$asxx54ahjppf45sd87a5aunxs9bkpyGmGE/.vekdjFg83yRec789S', 'Administrador', 'views/img/usuarios/admin/982.jpg', 1, '2018-10-08 15:14:08', '2018-10-08 20:14:08'),
(26, 'David Gallardo', 'davidgg', '$2a$07$asxx54ahjppf45sd87a5auUuTAMiE01E7nvlQEND7vFjDONyI44Ye', 'Administrador', '', 0, '2018-08-16 10:46:41', '2018-09-06 16:54:20'),
(27, 'Diana Garcia', 'diana', '$2a$07$asxx54ahjppf45sd87a5auOjF.3ptvV3Jy7pw06odljulp6q9XE8y', 'Especial', 'views/img/usuarios/diana/251.png', 1, '2018-10-08 15:14:57', '2018-10-08 20:14:57'),
(28, 'Coyo lin may', 'coyo', '$2a$07$asxx54ahjppf45sd87a5au1TVR.6q.yUj6TlGbP3DkXRBBVxu6iGm', 'Administrador', 'views/img/usuarios/coyo/254.jpg', 1, '2018-09-29 00:44:11', '2018-09-29 05:44:11'),
(29, 'Erick Trejo', 'erick', '$2a$07$asxx54ahjppf45sd87a5auJRR6foEJ7ynpjisKtbiKJbvJsoQ8VPS', 'Vendedor', 'views/img/usuarios/erick/128.jpg', 1, '2018-10-02 19:23:24', '2018-10-08 16:20:46'),
(30, 'Joan Garcia', 'joan', '$2a$07$asxx54ahjppf45sd87a5auNzWfPFNs7TF03nwSZz9yqjaKlrePi42', 'Vendedor', 'views/img/usuarios/joan/547.jpg', 1, '2018-10-08 11:33:25', '2018-10-08 16:33:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `productos` text COLLATE utf8_spanish_ci NOT NULL,
  `impuesto` float NOT NULL,
  `neto` float NOT NULL,
  `total` float NOT NULL,
  `metodo_pago` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `codigo`, `id_cliente`, `id_vendedor`, `productos`, `impuesto`, `neto`, `total`, `metodo_pago`, `fecha`) VALUES
(10, 10003, 6, 9, '[{\"id\":\"11\",\"descripcion\":\"TUBO\",\"cantidad\":\"5\",\"stock\":\"95\",\"precio\":\"100\",\"total\":\"500\"}]', 80, 500, 580, 'Efectivo', '2018-10-04 17:30:59'),
(11, 10004, 7, 29, '[{\"id\":\"19\",\"descripcion\":\"Rines 20 pulgadas marca lalala\",\"cantidad\":\"6\",\"stock\":\"2\",\"precio\":\"900\",\"total\":\"5400\"},{\"id\":\"17\",\"descripcion\":\"PEGAMENTO 5001\",\"cantidad\":\"10\",\"stock\":\"90\",\"precio\":\"180\",\"total\":\"1800\"}]', 1152, 7200, 8352, 'Efectivo', '2018-10-07 06:00:54'),
(12, 10005, 7, 29, '[{\"id\":\"18\",\"descripcion\":\"Llanta para bicicleta 700\",\"cantidad\":\"5\",\"stock\":\"95\",\"precio\":\"300\",\"total\":\"1500\"}]', 240, 1500, 1740, 'TC-5464646545212', '2018-09-03 00:29:20'),
(14, 10007, 4, 9, '[{\"id\":\"11\",\"descripcion\":\"TUBO\",\"cantidad\":\"10\",\"stock\":\"85\",\"precio\":\"100\",\"total\":\"1000\"}]', 160, 1000, 1160, 'Efectivo', '2018-10-07 04:53:05'),
(15, 10008, 5, 9, '[{\"id\":\"10\",\"descripcion\":\"TALADRO INALAMBRICO DE LA MARCA MILWAUKEE\",\"cantidad\":\"10\",\"stock\":\"90\",\"precio\":\"2000\",\"total\":\"20000\"}]', 3200, 20000, 23200, 'Efectivo', '2018-10-07 21:50:53'),
(16, 10009, 6, 9, '[{\"id\":\"18\",\"descripcion\":\"Llanta para bicicleta 700\",\"cantidad\":\"2\",\"stock\":\"93\",\"precio\":\"300\",\"total\":\"600\"}]', 96, 600, 696, 'Efectivo', '2018-10-07 04:56:51');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
