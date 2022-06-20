-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2022 a las 04:46:04
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `basededatos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `Id` varchar(4) NOT NULL,
  `Nombre` varchar(12) NOT NULL,
  `Paterno` varchar(12) NOT NULL,
  `Materno` varchar(12) NOT NULL,
  `Carrera` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`Id`, `Nombre`, `Paterno`, `Materno`, `Carrera`) VALUES
('01', 'Uriel', 'Campos', 'Avila', 'Sistemas'),
('02', 'Melissa', 'Ramirez', 'Gama', 'Sistemas'),
('03', 'Kassandra', 'Pedrote', 'Avila', 'Industrial'),
('04', 'Paulo Cesar', 'Bustos', 'Quinto', 'Informatica'),
('05', 'Pedro', 'Joaquin', 'Ramirez', 'Sistemas'),
('06', 'Pepe', 'Yih', 'Lopez', 'Contaduria'),
('07', 'Ernesto', 'Landa', 'Mata', 'Sistemas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aux`
--

CREATE TABLE `aux` (
  `Id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `Id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`Id`, `id_user`, `id_prod`) VALUES
(16, 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `details`
--

CREATE TABLE `details` (
  `Id` int(11) NOT NULL,
  `Modelo` varchar(256) NOT NULL,
  `Precio` varchar(256) NOT NULL,
  `Stock` varchar(256) NOT NULL,
  `Descripcion` varchar(256) NOT NULL,
  `Imagen` varchar(256) NOT NULL,
  `id_prod` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sneakers`
--

CREATE TABLE `sneakers` (
  `Id` int(11) NOT NULL,
  `Modelo` varchar(256) NOT NULL,
  `Descripcion` varchar(256) NOT NULL,
  `Color` varchar(15) NOT NULL,
  `Precio` int(10) NOT NULL,
  `Stock` int(4) NOT NULL,
  `Imagen` varchar(256) NOT NULL,
  `Descuento` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sneakers`
--

INSERT INTO `sneakers` (`Id`, `Modelo`, `Descripcion`, `Color`, `Precio`, `Stock`, `Imagen`, `Descuento`) VALUES
(1, 'Sneaker AIR ONE supreme', 'El Sneaker AIR ONE supreme es el unico en el mercado de la marca supreme', 'Rojo', 5000, 6, 'jordan2.jpg', '0'),
(2, 'AIR ONE YESSI', 'El modelo AIR ONE YESSI es un sneaker unico en el mundo, dado en un evento de FIFA 2020', 'Negro', 24000, 2, 'jordan3.jpg', '0'),
(3, 'MODELO AIR ONE GOKU', 'El modelo AIR ONE GOKU, es un modelo que celebra los 30 años de de Dragon Ball', 'Naranja', 5000, 7, 'jordan.jpg', '0'),
(4, 'Sneaker Air Jordan 1 High de Jordan x Dior', 'Air Jordan 1 High de Jordan x Dior unico en el mercado, el primer sneaker lanzado por Dior', 'Cafe', 400000, 3, 'jordantravis4.jpg', '0'),
(5, 'Sneaker Air Jordan 1 Travis Scott x Nike', 'El mejor lanzamiento en el mercado, el rapero Travis Scott se une con Nike para sacar el mejor Sneaker', 'Cafe', 500000, 3, 'jordanair4.jpg', '0'),
(6, 'MODELO AIR JORDAN IV', 'En 2018 Travis y Nike sacaron uno de los modelos más emblemáticos como son las Air Jordan IV en ese azul increíble que daban ganas de guardarlas y no tocarlas.', 'Azul', 400000, 3, 'jordantravis.jpg', '0'),
(7, 'Sneaker Boss', 'Tenis BOSS de caña baja en piel de becerro pulida Hombre', 'Blanco', 5000, 7, 'hugoboos.jpg', '4000'),
(8, 'Sneaker Boss', 'Tenis Boss en algodón con nombre de la marca Hombre', 'Blanco crema', 2000, 4, 'boss2.jpg', '1700'),
(9, 'Converse Blanco clasico', 'Tenis casuales Hombre', 'Blanco', 1300, 14, 'converseblanco.jpg', '1000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `email` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `lastname` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`Id`, `email`, `name`, `lastname`, `password`) VALUES
(3, 'angel.uriel.campos.avila@gmail.com', 'Uriel', 'Campos', '$2y$10$YQOF3U6DzpyUx9KrwSkw/eF0Hroj9qqknSsLkqiLLf1JBE19rptBe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `Id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `Total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`Id`, `id_user`, `Total`) VALUES
(3, 3, 0),
(4, 3, 0),
(5, 3, 0),
(6, 3, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `whislist`
--

CREATE TABLE `whislist` (
  `Id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `whislist`
--

INSERT INTO `whislist` (`Id`, `id_user`, `id_prod`) VALUES
(4, 3, 3),
(5, 3, 8);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aux`
--
ALTER TABLE `aux`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `id_prod` (`id_prod`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `sneakers`
--
ALTER TABLE `sneakers`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `whislist`
--
ALTER TABLE `whislist`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_prod` (`id_prod`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aux`
--
ALTER TABLE `aux`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `details`
--
ALTER TABLE `details`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `sneakers`
--
ALTER TABLE `sneakers`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `whislist`
--
ALTER TABLE `whislist`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`Id`),
  ADD CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`id_prod`) REFERENCES `sneakers` (`Id`);

--
-- Filtros para la tabla `whislist`
--
ALTER TABLE `whislist`
  ADD CONSTRAINT `whislist_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`Id`),
  ADD CONSTRAINT `whislist_ibfk_2` FOREIGN KEY (`id_prod`) REFERENCES `sneakers` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
