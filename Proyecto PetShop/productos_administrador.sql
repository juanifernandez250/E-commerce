-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-07-2024 a las 04:28:46
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
-- Base de datos: `productos administrador`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `product_id` int(11) NOT NULL COMMENT 'identificador autoincremental',
  `product_nombre` varchar(500) NOT NULL COMMENT 'nombre del producto',
  `product_stock` int(11) NOT NULL COMMENT 'cantidad de producto disponible',
  `product_marca` varchar(500) NOT NULL COMMENT 'marca del producto',
  `product_categoria` varchar(250) NOT NULL COMMENT 'seleccionar categoria',
  `product_precio` decimal(10,2) NOT NULL COMMENT 'precio del producto',
  `product_descripcion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`product_id`, `product_nombre`, `product_stock`, `product_marca`, `product_categoria`, `product_precio`, `product_descripcion`) VALUES
(32, 'Juguete Tipo Kong Grande', 25, 'Kong', 'juguetes', 1500.00, 'Juguete Canino Rellenable Para Cachorros Y Perros. Es un artículo de alta calidad.'),
(33, 'Colchon Perros de Lona Grande con Cierre 105cm x 65cm', 30, 'Dulces Sueños', 'accesorios', 20000.00, 'Colchon Antidesgarro Impermeable con Funda. Ideal para cualquier ocasión.'),
(36, 'Conjunto Collar Y Correa Liso Talle 3', 60, 'Patitas', 'accesorios', 1000.00, 'Conjunto Collar Y Correa Liso Talle 3. Calidad garantizada.'),
(37, 'Comedero/Bebedero Acero de Plata 14cm', 55, 'Patitas', 'higiene', 1000.00, 'Consiente a tus mascotas con el bebedero y comedero Vonne Acero Inoxidable en color plateado y con una capacidad de 350 mL. Este práctico y elegante accesorio es perfecto para mantener a tus perros y gatos hidratados y alimentados de manera cómoda y segura.'),
(38, 'Comedero/Bebedero Acero de Plata 16cm', 20, 'Patitas', 'higiene', 1500.00, 'Consiente a tus mascotas con el bebedero y comedero Vonne Acero Inoxidable en color plateado y con una capacidad de 400 mL. Este práctico y elegante accesorio es perfecto para mantener a tus perros y gatos hidratados y alimentados de manera cómoda y segura.'),
(39, 'Comedero/Bebedero Acero de Plata 18cm', 20, 'Patitas', 'higiene', 2000.00, 'onsiente a tus mascotas con el bebedero y comedero Vonne Acero Inoxidable en color plateado y con una capacidad de 500 mL. Este práctico y elegante accesorio es perfecto para mantener a tus perros y gatos hidratados y alimentados de manera cómoda y segura.'),
(40, 'Peine Cepillo', 21, 'Perrux', 'higiene', 500.00, 'Peine Cepillo Deslanador Perro Mediano Peluqueria Canina Color Naranja Oscuro'),
(41, 'Bolso Transportador Mascotas', 30, 'Mascotas', 'accesorios', 6000.00, 'Bolso Transportador Mascotas Color Gris');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador autoincremental', AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
