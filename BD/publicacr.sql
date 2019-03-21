-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2019 a las 00:43:53
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `publicacr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carousel`
--

CREATE TABLE `carousel` (
  `id_page` int(11) NOT NULL,
  `photo` varchar(100) CHARACTER SET utf8 NOT NULL,
  `idphoto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `carousel`
--

INSERT INTO `carousel` (`id_page`, `photo`, `idphoto`) VALUES
(2, 'upload/miaandfio.png', 2),
(1, 'upload/pcinnovation.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL,
  `category_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`categoryid`, `category_name`) VALUES
(1, 'Tecnología'),
(2, 'Belleza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `page`
--

CREATE TABLE `page` (
  `id_page` int(11) NOT NULL,
  `name_page` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `categoryid` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `description_page` varchar(2000) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `location_page` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `video_page` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `photo_page` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `page`
--

INSERT INTO `page` (`id_page`, `name_page`, `categoryid`, `phone`, `email`, `description_page`, `location_page`, `video_page`, `photo_page`) VALUES
(1, 'Pcinnovation', 1, 61372755, ' pcinnovations2020@yahoo.com', 'PCINNOVATION LATINOAMTÉRICA es una empresa 100% a la importación de partes de computadores, nos dedicamos a la venta desde pequeños detalles hasta por mayoreo.\r\n\r\nDisponemos de una gran variedad de artículos a la venta 100% nuevos y respaldados con nuestra garantía.\r\n\r\nPCINNOVUS es una empresa que busca la conexión personal con el cliente\r\n\r\nNosotros entenemos las necesidades y gustos únicos de cada cliente, por eso mismo buscamos abarcar todo el mercado posible para satisfacer la necesidad de cada cliente.\r\n\r\nNuestros personal está 100% capacitado y especializado en la atención al cliente. \r\n ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62883.856739098!2d-84.06410630127736!3d9.913871584955364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e3bf9923854d%3A0x24b13fc6b916a2d5!2sSan+Jos%C3%A9%2C+Curridabat!5e0!3m2!1ses!2scr!4v1516845338249\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'Un video va aquí', 'upload/pcinnovation.jpg'),
(2, 'Mía&Fio', 2, 85114986, 'ventas@miaandfio.com', '\r\nNosotros amamos nuestro trabajo\r\n\r\nSomos un centro de belleza que brinda asesoramiento técnico y comercializa diferentes marcas de estilismo profesional.\r\n\r\nNo dude en consultarnos, contamos con personal profesional que puede brindarle ayuda en la selección de el mejor producto y consejos sobre cuidados\r\n\r\n“Nuestro propósito es enriquecer, generar valor y confianza en cada uso de productos de belleza y salud. Guiados en nuestra experiencia técnica de estilismo profesional y en las marcas que nos respaldan, queremos crear un momento especial para todas aquellas personas que gustan siempre estar bellas, llevando hasta sus manos la profesionalidad y la magia del mundo del estilismo”\r\n\r\n¡Somos los mejores a nivel nacional en cuanto la calidad y precio!\r\n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d981.8703527108087!2d-85.45534117083214!3d10.141466999547145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTDCsDA4JzI5LjMiTiA4NcKwMjcnMTcuMyJX!5e0!3m2!1ses!2scr!4v1551128792236\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'Un video va aquí', 'upload/miaandfio.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `access` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `access`) VALUES
(1, 'admin', '1c7d589c83b20711ae4f4bd23f78c407', 1),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 2),
(8, 'Sebas', '81dc9bdb52d04dc20036dbd8313ed055', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`idphoto`),
  ADD UNIQUE KEY `photo` (`photo`,`idphoto`,`id_page`),
  ADD UNIQUE KEY `photo_2` (`photo`),
  ADD KEY `productid` (`id_page`);

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indices de la tabla `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id_page`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carousel`
--
ALTER TABLE `carousel`
  MODIFY `idphoto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
