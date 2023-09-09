-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 20-01-2023 a las 17:44:02
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
-- Base de datos: `tiendaenlinea`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `usuario` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`usuario`, `contraseña`) VALUES
('usuario', 'contraseña'),
('usuario', 'contraseña');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `imagen` varchar(50) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `precio` decimal(4,2) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`imagen`, `codigo`, `precio`, `stock`) VALUES
('Camiseta Punto y pantaloneta', '001', '75.00', 10),
('Camiseta Cuello Rib', '002', '30.00', 10),
('Camisa Elástica', '003', '25.00', 10),
('Camiseta Básica Medium weight', '004', '35.00', 10),
('Camisa Cuadros Franela', '005', '55.00', 10),
('Brazel Traje Slim', '006', '75.00', 10),
('Jeans Rotos Parches', '007', '25.00', 10),
('Camiseta Heavy Weight', '008', '50.00', 10),
('Camiseta Oversize Heavy Weight', '009', '40.00', 10),
('Camiseta Estructura', '010', '45.00', 10),
('Sudadera Oversize', '011', '60.00', 10),
('Camiseta Básica Slim', '012', '35.00', 10),
('', '', '0.00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbldatalleventa`
--

CREATE TABLE `tbldatalleventa` (
  `ID` int(11) NOT NULL,
  `IDVENTA` int(11) NOT NULL,
  `IDPRODUCTO` int(11) NOT NULL,
  `PRECIOUNITARIO` decimal(20,2) NOT NULL,
  `CANTIDAD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbldatalleventa`
--

INSERT INTO `tbldatalleventa` (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIOUNITARIO`, `CANTIDAD`) VALUES
(1, 1, 3, '100.00', 1),
(2, 5, 10, '45.00', 1),
(3, 5, 4, '25.00', 1),
(4, 5, 6, '75.00', 1),
(5, 6, 10, '45.00', 1),
(6, 6, 4, '25.00', 1),
(7, 6, 6, '75.00', 1),
(8, 7, 10, '45.00', 1),
(9, 7, 4, '25.00', 1),
(10, 7, 6, '75.00', 1),
(11, 7, 2, '30.00', 1),
(12, 8, 10, '45.00', 1),
(13, 8, 4, '25.00', 1),
(14, 8, 6, '75.00', 1),
(15, 8, 2, '30.00', 1),
(16, 9, 10, '45.00', 1),
(17, 9, 4, '25.00', 1),
(18, 9, 6, '75.00', 1),
(19, 9, 2, '30.00', 1),
(20, 10, 10, '45.00', 1),
(21, 10, 4, '25.00', 1),
(22, 10, 6, '75.00', 1),
(23, 10, 2, '30.00', 1),
(24, 11, 10, '45.00', 1),
(25, 11, 4, '25.00', 1),
(26, 11, 6, '75.00', 1),
(27, 11, 2, '30.00', 1),
(28, 12, 10, '45.00', 1),
(29, 12, 4, '25.00', 1),
(30, 12, 6, '75.00', 1),
(31, 12, 2, '30.00', 1),
(32, 13, 1, '75.00', 1),
(33, 13, 2, '30.00', 1),
(34, 13, 4, '25.00', 1),
(35, 14, 1, '75.00', 1),
(36, 14, 2, '30.00', 1),
(37, 14, 4, '25.00', 1),
(38, 15, 1, '75.00', 1),
(39, 15, 2, '30.00', 1),
(40, 15, 4, '25.00', 1),
(41, 16, 1, '75.00', 1),
(42, 16, 2, '30.00', 1),
(43, 16, 4, '25.00', 1),
(44, 17, 1, '75.00', 1),
(45, 17, 2, '30.00', 1),
(46, 17, 4, '25.00', 1),
(47, 18, 1, '75.00', 1),
(48, 18, 2, '30.00', 1),
(49, 18, 4, '25.00', 1),
(50, 19, 1, '75.00', 1),
(51, 19, 2, '30.00', 1),
(52, 19, 4, '25.00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblproductos`
--

CREATE TABLE `tblproductos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Precio` decimal(20,2) NOT NULL,
  `Descripcion` text NOT NULL,
  `Imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblproductos`
--

INSERT INTO `tblproductos` (`ID`, `Nombre`, `Precio`, `Descripcion`, `Imagen`) VALUES
(1, 'CAMISETA PUNTO Y PANTALONETA', '75.00', 'Es un estilo innovador y llamativo como lo son las tendencias orientales a un público adulto y  joven.', 'img/img2.jpg'),
(2, 'CAMISETA CUELLO RIB ', '30.00', 'Es un estilo innovador y llamativo como lo son las tendencias orientales a un público adulto y  joven.', 'img/img1.jpg'),
(3, 'CAMISA ELÁSTICA', '35.00', 'Es un estilo innovador y llamativo como lo son las tendencias orientales a un público adulto y  joven.', 'img/img11.jpg'),
(4, 'CAMISETA BÁSICA MEDIUM WEIGHT', '25.00', 'Es un estilo innovador y llamativo como lo son las tendencias orientales a un público adulto y  joven.', 'img/img4.jpg'),
(5, 'CAMISA CUADROS FRANELA ', '55.00', 'Es un estilo innovador y llamativo como lo son las tendencias orientales a un público adulto y  joven.', 'img/img5.jpg'),
(6, 'BLAZER TRAJE SLIM ', '75.00', 'Es un estilo innovador y llamativo como lo son las tendencias orientales a un público adulto y  joven.', 'img/img6.jpg'),
(7, 'JEANS ROTOS PARCHES', '25.00', 'Es un estilo innovador y llamativo como lo son las tendencias orientales a un público adulto y  joven.', 'img/img7.jpg'),
(8, 'CAMISETA HEAVY WEIGHT ', '50.00', 'Es un estilo innovador y llamativo como lo son las tendencias orientales a un público adulto y  joven.', 'img/img3.jpg'),
(9, 'CAMISETA OVERSIZE HEAVY WEIGHT', '40.00', 'Es un estilo innovador y llamativo como lo son las tendencias orientales a un público adulto y  joven.', 'img/img9.jpg'),
(10, 'CAMISETA ESTRUCTURA', '45.00', 'Es un estilo innovador y llamativo como lo son las tendencias orientales a un público adulto y  joven.', 'img/img10.jpg'),
(11, 'SUDADERA OVERSIZE', '60.00', 'Es un estilo innovador y llamativo como lo son las tendencias orientales a un público adulto y  joven.', 'img/img8.jpg'),
(12, 'CAMISETA BÁSICA SLIM FIT ', '35.00', 'Es un estilo innovador y llamativo como lo son las tendencias orientales a un público adulto y  joven.', 'img/img12.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblventas`
--

CREATE TABLE `tblventas` (
  `ID` int(11) NOT NULL,
  `ClaveTransaccion` varchar(2500) NOT NULL,
  `PaypalDatos` text NOT NULL,
  `Fecha` datetime NOT NULL,
  `Correo` varchar(5000) NOT NULL,
  `Total` decimal(60,2) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblventas`
--

INSERT INTO `tblventas` (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `status`) VALUES
(1, '12345689', '', '2022-12-21 20:12:03', 'php@gmail.com', '700.00', 'pendiente'),
(2, '12345689', '', '2022-12-21 20:12:03', 'php@gmail.com', '700.00', 'pendiente'),
(3, '12345689', '', '2022-12-21 20:12:03', 'php@gmail.com', '700.00', 'pendiente'),
(4, 'tueqkt1i4it8i86uo1s6ht60dl', '', '2022-12-21 14:36:52', 'tiendaderopa@hotmail.com', '45.00', 'pendiente'),
(5, 'tueqkt1i4it8i86uo1s6ht60dl', '', '2022-12-21 15:08:52', 'jkhkhjk@gmail.com', '145.00', 'pendiente'),
(6, 'tueqkt1i4it8i86uo1s6ht60dl', '', '2022-12-21 15:26:20', 'jkhkhjk@gmail.com', '145.00', 'pendiente'),
(7, 'tueqkt1i4it8i86uo1s6ht60dl', '', '2022-12-21 15:27:30', 'jkhkhjk@gmail.com', '175.00', 'pendiente'),
(8, 'tueqkt1i4it8i86uo1s6ht60dl', '', '2022-12-21 15:27:51', 'jkhkhjk@gmail.com', '175.00', 'pendiente'),
(9, 'tueqkt1i4it8i86uo1s6ht60dl', '', '2022-12-21 15:28:26', 'jkhkhjk@gmail.com', '175.00', 'pendiente'),
(10, 'tueqkt1i4it8i86uo1s6ht60dl', '', '2022-12-21 15:29:39', 'jkhkhjk@gmail.com', '175.00', 'pendiente'),
(11, 'tueqkt1i4it8i86uo1s6ht60dl', '', '2022-12-21 15:43:49', 'liomessi10@gmail.com', '175.00', 'pendiente'),
(12, 'tueqkt1i4it8i86uo1s6ht60dl', '', '2022-12-21 15:44:37', 'liomessi10@gmail.com', '175.00', 'pendiente'),
(13, 'oeq15ednejjge3mhdfagqso0qi', '', '2023-01-12 20:36:14', 'liomessi10@gmail.com', '130.00', 'pendiente'),
(14, 'oeq15ednejjge3mhdfagqso0qi', '', '2023-01-12 20:36:32', 'liomessi10@gmail.com', '130.00', 'pendiente'),
(15, 'oeq15ednejjge3mhdfagqso0qi', '', '2023-01-12 20:37:59', 'jkhkhjk@gmail.com', '130.00', 'pendiente'),
(16, 'oeq15ednejjge3mhdfagqso0qi', '', '2023-01-12 20:38:19', 'rapolo535@gmail.com', '130.00', 'pendiente'),
(17, 'oeq15ednejjge3mhdfagqso0qi', '', '2023-01-12 20:44:15', 'liomessi10@gmail.com', '130.00', 'pendiente'),
(18, 'oeq15ednejjge3mhdfagqso0qi', '', '2023-01-12 21:52:57', 'liomessi10@gmail.com', '130.00', 'pendiente'),
(19, 'oeq15ednejjge3mhdfagqso0qi', '', '2023-01-12 21:53:12', 'liomessi10@gmail.com', '130.00', 'pendiente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbldatalleventa`
--
ALTER TABLE `tbldatalleventa`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDVENTA` (`IDVENTA`),
  ADD KEY `IDPRODUCTO` (`IDPRODUCTO`);

--
-- Indices de la tabla `tblproductos`
--
ALTER TABLE `tblproductos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tblventas`
--
ALTER TABLE `tblventas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbldatalleventa`
--
ALTER TABLE `tbldatalleventa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `tblproductos`
--
ALTER TABLE `tblproductos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tblventas`
--
ALTER TABLE `tblventas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbldatalleventa`
--
ALTER TABLE `tbldatalleventa`
  ADD CONSTRAINT `tbldatalleventa_ibfk_1` FOREIGN KEY (`IDVENTA`) REFERENCES `tblventas` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbldatalleventa_ibfk_2` FOREIGN KEY (`IDPRODUCTO`) REFERENCES `tblproductos` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
