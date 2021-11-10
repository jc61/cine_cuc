-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 10-11-2021 a las 22:18:07
-- Versión del servidor: 5.7.33
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cine-cuc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idCliente` int(11) NOT NULL,
  `nombreCliente` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idCliente`, `nombreCliente`, `usuario`, `password`) VALUES
(7, 'julio', 'iglesiasj273@gmail.com', 'effergregdsfs');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcion`
--

CREATE TABLE `funcion` (
  `idFuncion` int(11) NOT NULL,
  `nombrePelicula` varchar(255) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL,
  `lugar` varchar(50) NOT NULL,
  `direccionLugar` varchar(50) NOT NULL,
  `numCupos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `funcion`
--

INSERT INTO `funcion` (`idFuncion`, `nombrePelicula`, `fechaInicio`, `fechaFin`, `lugar`, `direccionLugar`, `numCupos`) VALUES
(11, 'En el barrio ', '2021-11-09', '2021-11-12', 'barranquilla', 'Calle 3 #60-26 ', 3),
(12, 'Spider-Man: No Way Home ', '2021-11-09', '2021-11-12', 'barranquilla', 'Calle 3 #60-26 ', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `idGenero` int(11) NOT NULL,
  `nombreGenero` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`idGenero`, `nombreGenero`) VALUES
(1, 'Acción'),
(2, 'Comedia'),
(3, 'Terror'),
(4, 'Aventuras'),
(5, 'Ciencia ficción'),
(6, 'Documental'),
(7, 'Drama'),
(8, 'Fantasia'),
(9, 'Musical'),
(10, 'Suspenso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `idPelicula` int(11) NOT NULL,
  `nombrePelicula` varchar(50) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `director` varchar(50) NOT NULL,
  `genero` int(11) NOT NULL,
  `imagen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`idPelicula`, `nombrePelicula`, `descripcion`, `director`, `genero`, `imagen`) VALUES
(1, 'Spider-Man: No Way Home', 'Secuela de \"Spider-Man: Lejos de casa\" basada en los cómics de Stan Lee y Steve Ditko', 'Jon Watts', 1, 'https://www.themoviedb.org/t/p/original/5pVJ9SuuO72IgN6i9kMwQwnhGHG.jpg'),
(2, 'Eternals', 'Los Eternos son una raza de seres inmortales con poderes sobrehumanos que han vivido en secreto en la Tierra durante miles de años. ', 'Chloé Zhao', 1, 'https://www.themoviedb.org/t/p/original/6AdXwFTRTAzggD2QUTt5B7JFGKL.jpg'),
(3, 'Maligno', 'Madison está paralizada por visiones de asesinatos espeluznantes, y su tormento empeora cuando descubre que estos sueños de vigilia son, de hecho, realidades aterradoras.', 'James Wan', 3, 'https://www.themoviedb.org/t/p/original/dGv2BWjzwAz6LB8a8JeRIZL8hSz.jpg'),
(4, 'Luca', 'Luca es un monstruo marino que vive debajo de un pueblo de la costa italiana. Cuando sale a la superficie, adquiere una apariencia humana, y conoce a un nuevo amigo, igual que él. Juntos emprenden una aventura entre humanos que odian a los monstruos.', 'Enrico Casarosa', 2, 'https://www.themoviedb.org/t/p/original/8tABCBpzu3mZbzMB3sRzMEHEvJi.jpg'),
(5, 'Safer At Home', 'Safer at Home es una película de suspenso estadounidense de 2021 escrita por Will Wernick y Lia Bozonelis, y dirigida por Wernick.', 'Will Wernick', 10, 'https://www.themoviedb.org/t/p/original/2mfnSVdDartB6TJ3k7Qyn0zMzKu.jpg'),
(6, 'Pequeños secretos', 'Un sheriff y un detective de homicidios colaboran para dar caza a un astuto asesino en Los Ángeles. Mientras rastrean al culpable, el pasado de uno de ellos comienza a salir a la luz y puede poner en peligro la investigación.', 'John Lee Hancock', 7, 'https://www.themoviedb.org/t/p/original/tLO1aD1ghdtVMT32z2sRmzgYKYd.jpg'),
(7, 'En el barrio', 'Una versión del musical de Broadway, en la que el dueño de una tienda tiene sentimientos encontrados acerca de cerrar su tienda y retirarse a la República Dominicana después de heredar la fortuna de su abuela.', 'Jon M. Chu', 9, 'https://www.themoviedb.org/t/p/original/uyX4XtWpp7cywg1DE7cdvNHsEAt.jpg'),
(8, 'Cruella', 'Decidida a convertirse en una exitosa diseñadora de moda, una joven y creativa estafadora llamada Estella se asocia con un par de ladrones para sobrevivir en las calles de Londres.', 'Craig Gillespie', 2, 'https://www.themoviedb.org/t/p/original/rTh4K5uw9HypmpGslcKd4QfHl93.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `funcion`
--
ALTER TABLE `funcion`
  ADD PRIMARY KEY (`idFuncion`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`idGenero`);

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`idPelicula`),
  ADD KEY `genero` (`genero`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `funcion`
--
ALTER TABLE `funcion`
  MODIFY `idFuncion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `idGenero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `idPelicula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD CONSTRAINT `genero` FOREIGN KEY (`genero`) REFERENCES `generos` (`idGenero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
