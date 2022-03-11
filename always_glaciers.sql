-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-03-2022 a las 18:17:37
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `always_glaciers`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `nombre` text NOT NULL,
  `rol` text NOT NULL,
  `imagen` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `usuario`, `email`, `password`, `nombre`, `rol`, `imagen`, `fecha`) VALUES
(2, 'admin', 'Harrymaceira@yahoo.com.ar', '$2y$05$2ihDv8vVf7QZ9BsaRrKyqeH5gKAC2X6K7MRsna2tL1qDBxZmvEhAO', 'Martin', 'administrador', 'vistas/img/administradores/admin/955.jpg', '2021-03-08 18:26:41'),
(8, 'Paula', 'paulasosa@alwaysglaciers.com', '$2y$05$2ihDv8vVf7QZ9BsaRrKyqekxnrcBAcfl6eKaM0zUcpSGuflKl3bqy', 'Paula Sosa', 'administrador', 'vistas/img/administradores/Paula/734.jpg', '2021-03-26 21:08:07'),
(9, 'Paula', 'alwaysgonline@gmail.com', '$2y$05$2ihDv8vVf7QZ9BsaRrKyqebZa1c.thOaltvTUfi6QWteUczLT1sRO', 'Paula Rueda', 'administrador', 'vistas/img/administradores/Paula/219.jpg', '2021-03-27 15:58:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `excursion` text NOT NULL,
  `precio` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`id`, `img`, `excursion`, `precio`, `fecha`) VALUES
(1, 'vistas/img/banner/$ 11.600/297.jpg', 'Glaciar Gourmet y Glaciar Moreno', '$ 11.600', '2021-02-25 20:23:36'),
(2, 'vistas/img/banner/9.500/849.jpg', 'TODOS GLACIARES: UPSALA y SPEGAZZINI', '9.500', '2021-02-25 20:27:06'),
(3, 'vistas/img/banner/6.900/810.jpg', 'ESPÍRITU DE LOS GLACIARES', '287.000', '2021-02-25 20:27:06'),
(19, 'vistas/img/banner/$16.000/948.jpg', 'Minitrekking Glaciar Moreno', '16.000', '2021-04-01 23:06:28'),
(20, 'vistas/img/banner/14.500/294.jpg', 'Full Day Paine', '14.500', '2021-04-01 23:12:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `email` text NOT NULL,
  `telefono` text NOT NULL,
  `mensaje` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `nombre`, `email`, `telefono`, `mensaje`, `fecha`) VALUES
(2, 'Gonzalo Vidal', 'gonzaa.vidal.18@gmail.com', '02966504821', 'Te puedo hacer una consulta?', '2021-03-09 05:05:14'),
(3, 'Martin', 'harrymaceira@yahoo.com.ar', '01142932125', 'a que hora sale el moreno', '2021-05-19 20:01:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dias_reservados`
--

CREATE TABLE `dias_reservados` (
  `id_i` int(11) NOT NULL,
  `id_excursion` int(11) NOT NULL,
  `dia` text NOT NULL,
  `fecha_i` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dias_reservados`
--

INSERT INTO `dias_reservados` (`id_i`, `id_excursion`, `dia`, `fecha_i`) VALUES
(7, 1, '2022-02-25', '2022-02-24 17:24:40'),
(8, 1, '2022-02-27', '2022-02-24 17:25:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `divisas`
--

CREATE TABLE `divisas` (
  `id` int(11) NOT NULL,
  `usd` text NOT NULL,
  `eur` text NOT NULL,
  `brl` text NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `divisas`
--

INSERT INTO `divisas` (`id`, `usd`, `eur`, `brl`, `fecha`) VALUES
(1, '105', '120', '21', '2022-02-26 17:15:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `excursiones`
--

CREATE TABLE `excursiones` (
  `id` int(11) NOT NULL,
  `category` text NOT NULL,
  `titulo` text NOT NULL,
  `banner` text NOT NULL,
  `intro` text NOT NULL,
  `descripcion` text NOT NULL,
  `precio_bajo` text NOT NULL,
  `precio_alto` text NOT NULL,
  `reservada` text NOT NULL,
  `precio_ninos` text NOT NULL,
  `opcional` text NOT NULL,
  `turnos` text NOT NULL,
  `duracion` text NOT NULL,
  `requisitos` text NOT NULL,
  `incluye` text NOT NULL,
  `no_incluye` text NOT NULL,
  `rango_adultos` text NOT NULL,
  `rango_ninos` text NOT NULL,
  `trip_link` text NOT NULL,
  `trip_detalle` text NOT NULL,
  `recomendado` int(11) NOT NULL,
  `recorrido` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `excursiones`
--

INSERT INTO `excursiones` (`id`, `category`, `titulo`, `banner`, `intro`, `descripcion`, `precio_bajo`, `precio_alto`, `reservada`, `precio_ninos`, `opcional`, `turnos`, `duracion`, `requisitos`, `incluye`, `no_incluye`, `rango_adultos`, `rango_ninos`, `trip_link`, `trip_detalle`, `recomendado`, `recorrido`, `fecha`) VALUES
(1, 'Excursion', 'Glaciar Perito Moreno Classic                                               ', 'vistas/img/excursiones/1/433.png', '<div><div><p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt;\"><font face=\"Calibri\" size=\"3\"><span style=\"caret-color: rgb(0, 0, 0);\"><font color=\"#000000\">La excursión Glaciar Perito Moreno es</font><font color=\"#3984c6\"><b> la número uno en El Calafate,</b></font><font color=\"#000000\"> visita guiada con amplio tiempo para</font><font color=\"#3984c6\"><b> recorrer las pasarelas y sus balcones</b></font><font color=\"#000000\">, se puede incluir una </font><font color=\"#3984c6\"><b>navegación </b></font><font color=\"#000000\">en la cara norte o en la cara sur de El Glaciar por un coste adicional</font></span></font><br></p><p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt; font-size: medium; font-family: Calibri; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><span lang=\"ES\" style=\"font-family: \" helvetica=\"\" neue\";\"=\"\"><o:p> </o:p></span></p></div><div style=\"font-size: 18px;\"><br></div></div><div><span lang=\"ES\" style=\"font-size:12.0pt;font-family:\r\n\" times=\"\" new=\"\" roman\",serif;mso-fareast-font-family:calibri;mso-fareast-theme-font:=\"\" minor-latin;mso-ansi-language:es;mso-fareast-language:es-trad;mso-bidi-language:=\"\" ar-sa\"=\"\"></span><br><div><span lang=\"ES\" style=\"font-family:\" calibri\",sans-serif;=\"\" mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-ansi-language:=\"\" es\"=\"\"> </span></div></div>', '<div>Excursión sin<font color=\"#4f81bd\"><b> exigencias físicas</b></font>, con varias horas de permanencia en el mismo, recorriendo los balcones frente al Glaciar Moreno.<br></div><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\";=\"\" font-size:=\"\" 18px;\"=\"\"></span><span style=\"font-size:16px;\">La excursión inicia a las 7.00 a.m.  desde su hotel, o desde el punto de partida o encuentro según lo hayas solicitado, diversas paradas en puntos panorámicos dentro del parque Nacional y la visita a las pasarelas son el principal atractivo. Al llegar frente al Glaciar puedes iniciar la caminata por las pasarelas de 3 km las mismas tienen distintos niveles y permiten contemplar el Perito Moreno desde diferentes ángulos. Tendrán aproximadamente cinco horas para <font color=\"#4f81bd\"><b>visitar las pasarelas y maravillarse con el glaciar desde su frente</b></font>. Hay un ascensor para facilitar el acceso a personas con movilidad reducida al primer balcón desde el cual se tiene una vista imponente.<br>\r\nComo servicios opcionales, podrás incluir una navegación de una hora de duración frente a la pared norte o sur del glaciar. Te recomendamos llevar una vianda para almorzar, o en su defecto podrás almorzar en el restaurante ubicado al inicio de la pasarela.<br>\r\nUna vez finalizada la visita se regresa a el calafate por el mismo camino arribando al punto de partida donde tomaste la excursión.<br>\r\nImportante el horario de inicio finalización de excursión puede cambiar hasta el día anterior según la organización de los grupos del día de la actividad.<font color=\"#4f81bd\"><b><br></b></font><br></span><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\";=\"\" font-size:=\"\" 18px;\"=\"\"></span>', '3.400', '3.500', '96', '2.600', '<p><font color=\"#6badde\">$ <b>1.700</b> </font>Navegación opcional frente al Glaciar</p><p><font color=\"#6badde\" style=\"font-size: 1rem;\">$ <b>990</b></font><span style=\"font-size: 1rem;\"> Vianda</span></p>', '<b>6:50 am.  a   6:15 pm.</b>', '11 horas aproximadas', 'Llevar: lentes para sol, protector solar, abrigo, guantes, calzado apropiado.  \r\n\r\n\r\n', 'Traslado desde y hacia su hotel. \r\nGuía Bilingüe durante todo el recorrido y la excursión. \r\nVisita a las pasarelas.\r\n', 'Entrada al Parque Nacional.\r\nNavegaciones  ( solo si se solicita)\r\n', '', 'De 2 a 12 años', 'https://www.tripadvisor.com.ar/Attraction_Review-g312851-d11663802-Reviews-Pasarelas_Perito_Moreno-El_Calafate_Province_of_Santa_Cruz_Patagonia.h', '', 1, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1MnWnf4ZktzHQGw_miPqm2q6pPZI0YmZw&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-02-26 01:32:49'),
(2, 'Excursion', 'Minitrekking Glaciar Moreno', 'vistas/img/excursiones/2/329.jpg', '<div><span style=\"font-size: 18px;\"><span style=\"font-size: 16px;\"><font color=\"#000000\">El </font><font color=\"#4f81bd\"><b>Minitrekking </b></font><font color=\"#000000\">es la Excursión más completa parta visitar el</font><font color=\"#4f81bd\"><b> Glaciar Moreno</b></font><font color=\"#000000\">. Una caminata sobre el hielo de una hora treinta aproximado. Se podrán apreciar grietas, serac, sumideros y pequeñas lagunas. </font></span></span><br></div><b><font color=\"#4f81bd\"></font></b><span style=\"font-size:18px;\"><font color=\"#4f81bd\" style=\"font-weight: bold;\"><div><br></div></font></span>', '<div><span lang=\"ES-TRAD\" style=\"font-size:10.5pt;font-family:\" helvetica\",sans-serif;mso-bidi-font-family:=\"\" \"times=\"\" new=\"\" roman\";color:#212121\"=\"\"></span></div><div><span lang=\"ES-TRAD\" style=\"\" helvetica\",sans-serif;mso-bidi-font-family:=\"\" \"times=\"\" new=\"\" roman\";color:#212121\"=\"\"><span style=\"font-size: 14px;\"></span></span></div><span style=\"font-size: 14px;\">El </span><font color=\"#4f81bd\" style=\"font-size: 14px;\"><b>Minitrekking </b></font><span style=\"font-size: 14px;\">excursión que comienza con el pick-up por el punto de encuentro acordado en El Calafate.</span><br><span style=\"font-size: 14px;\">\r\nUna vez en el puerto “Bajo de las Sombras” (Ruta 11, km. 70.9) se embarca para cruzar el Lago Rico, llegando a la costa opuesta luego de aproximadamente 20 minutos de navegación frente a la cara sur del Glaciar Perito Moreno.</span><br><span style=\"font-size: 14px;\">Serán recibidos por los guías de montaña que los conducirán a un refugio. A partir de allí, se iniciará una breve caminata a lo largo de la costa del lago, que incluye una charla sobre glaciología en general y el Glaciar Perito Moreno en particular. Al llegar al borde del glaciar, se colocarán los crampones y cascos. Sobre el hielo, recibirán una breve charla de seguridad para disfrutar de este paraíso natural de hielo. La caminata es de dificultad media y cuenta con muchas subidas y bajadas, el recorrido sobre el tiene una duración de una hora y media y se podrán apreciar una variedad de formaciones típicas de un glaciar como grietas, sumideros, seracs, lagunas, etc.</span><br><span style=\"font-size: 14px;\">Se regresará al refugio por un bosque andino patagónico. Poco tiempo después embarcarán para regresar al puerto.</span><br><span style=\"font-size: 14px;\">\r\nLa excursión incluye la visita de una hora a las pasarelas del Glaciar Perito Moreno, a 7 km del puerto. Allí podrán disfrutar de la espectacular vista panorámica del glaciar y recorrer alguno de los senderos.</span><br><br><div><span lang=\"ES-TRAD\" style=\"font-size:10.5pt;\r\nfont-family:\" helvetica\",sans-serif;mso-bidi-font-family:\"times=\"\" new=\"\" roman\";=\"\" color:#212121\"=\"\"><o:p></o:p></span></div><div><span lang=\"ES-TRAD\" style=\"font-size:10.5pt;\r\nfont-family:\" helvetica\",sans-serif;mso-bidi-font-family:\"times=\"\" new=\"\" roman\";=\"\" color:#212121\"=\"\"><o:p></o:p></span></div><br>', '15.850', '16.000', '83', '15.850', '<p>Traslado desde El Calafate y visitas a las Pasarelas$ 3000 AR$. </p><p><span style=\"font-size: 1rem;\">Viandas $990 AR$</span></p>', '6:50 am.  a   6.15 pm.', '11 horas aproximadas', 'Llevar: lentes para sol, protector solar, abrigo, guantes, calzado apropiado o zapatillas de trekking con cordones.\r\n Llevar una vianda. \r\nEdad de 8 a 65 años. \r\nNo se aceptan mujeres embarazadas, personas con problemas en articulaciones, personas recién operadas, anticoaguladas o con distintas discapacidades. \r\n\r\n', 'Guia y caminata sobre el hielo de 1 hora y media, y navegación cara sur del glaciar.', 'Entrada al Parque Nacional.\r\nTraslado al Puerto desde El Calafate. ( Ver Opcional)', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g1949199-d313740-Reviews-Perito_Moreno_National_Park-Perito_Moreno_Province_of_Santa_Cruz_Patagonia.html', '', 1, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1yzJJu5k6Egvmr9eyZpFqdRr0PeTtrbWB&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-02-26 03:36:15'),
(3, 'Excursion', 'Navegación Glaciar Gourmet', 'vistas/img/excursiones/3/913.jpg', '<div><div><font face=\"Arial\" style=\"\"><b style=\"\"><font color=\"#3984c6\">La excursión más exclusiva </font></b><font color=\"#000000\">que puedes realizar en tu visita a El calafate, se </font><font color=\"#3984c6\"><b>visita el Glaciar Spegazzini Upsala y el Glaciar Perito Moreno</b></font><font color=\"#000000\"><b>.</b>  En el canal Spegazzini se realiza una caminata por el bosque de 1 hora de duración. </font></font><br></div></div><div><div><br></div></div><div><b><u></u></b></div>', '<div><span style=\"\" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\";\"=\"\"><h3 style=\"color: rgb(79, 129, 189); font-weight: bold;\"><span style=\"color: rgb(0, 0, 0); font-size: 1rem; font-weight: 400;\">Glaciares Gourmet es la navegación más destacada del Parque Los Glaciares, a bordo del Crucero María Turquesa visitando los glaciares Upsala, Spegazzini y Perito Moreno. El crucero consta de 2 salones. La excursión viene acompañada de una caminata de 1 hora en el bosque del Canal Spegazzini.</span><br></h3></span></div><span style=\"font-weight: bolder; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\";\"=\"\"><font color=\"#4f81bd\">La excursión ofrece el servicio más personalizado </font></span><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\";\"=\"\">del Parque Nacional Los Glaciares navegando las aguas del Lago Argentino a bordo del Crucero María Turquesa y visitando los glaciares Upsala, Spegazzini y Perito Moreno. Esta excursión es la única navegación que permite visitar los glaciares antes mencionados mesclando con una caminata por el bosque en el Canal Spegazzini.</span><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\";\"=\"\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\";\"=\"\">C</span><span style=\"font-weight: bolder; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\";\"=\"\"><font color=\"#4f81bd\">omo adicional se ofrece almuerzo abordo con un menú de 4 pasos en el salón Premium</font></span><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\";\"=\"\">. La embarcación tiene capacidad para 196 pasajeros la cubierta Principal con capacidad para 180 pasajeros y la cubierta Premium con capacidad para 16 pasajeros esta está dirigida para viajeros que busquen atención personalizada y un servicio de excelencia abordo. El salón ofrecer un menú de cuatro pasos presentado por el chef. El crucero consta de cuatro cubiertas de sol exteriores. La excursion comienza en el Puerto Banderas a 42 km. si no la has contratado desde El Calafate con el traslado incluido, con el costo correspondiente.</span><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\";\"=\"\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\";\"=\"\">Desde aquí comienza la navegación hacia la barrera de témpanos del</span><span style=\"font-weight: bolder; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\";\"=\"\"><font color=\"#4f81bd\"> Canal Upsala,</font></span><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\";\"=\"\"> para dirigirse a continuación al</span><font color=\"#4f81bd\" style=\"font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\";\"=\"\"> <span style=\"font-weight: bolder;\">Glaciar Spegazzini</span>,</font><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\";\"=\"\"> el más alto del parque nacional, donde se descenderá y se realizará una caminata de una hora.</span><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\";\"=\"\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\";\"=\"\">Una vez de nuevamente en la embarcación, nos dirigiremos hacia el </span><span style=\"font-weight: bolder; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\";\"=\"\"><font color=\"#4f81bd\">Glaciar Perito Moreno</font></span><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\";\"=\"\"> mientras se ofrece el almuerzo gourmet abordo para los pasajeros que navegan en la Cubierta Premium. Después de visitar estos glaciares, se emprende el regreso al Puerto, para luego volver a su hotel en El Calafate si has contratado el servicio de traslado, esta excursión te permite adicionalmente si lo deseas descender en el Glaciar Moreno visitar las pasarelas y regresar desde este con el bus alternativo que debes reservar y así tendrás la excursión más completa del parque y podrás hacer 2 excursiones en una y pagando solo una entrada al parque habiendo realizado también la excusión del glaciar Moreno en el mismo día no pagando la misma.(Ver excursion Glaciar Gourmet y Glaciar Moreno)</span><br style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\";\"=\"\"><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\";\"=\"\">Si tiene programada la excursión Minitrekking habrás adquirido las mejores excursiones del Parque Nacional Los Glaciares.</span>', '10.400', '10.500', '51', '10.400', '<p>Traslado al puerto $ 1800</p><p>Vianda $ 990 ARS</p>', '6:50 am.  a  6:00 pm. ', '11 horas aproximadas', 'Llevar: lentes para sol, protector solar, abrigo, guantes, calzado apropiado.  \r\n\r\n', 'Navegación frente a los Glaciares, Upsala, Spegazzini y Perito Moreno.\r\n', 'Entrada al Parque Nacional.\r\nTraslado desde su hotel. ( ver opcional)', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g312851-d2062897-Reviews-Cruceros_MarPatag-El_Calafate_Province_of_Santa_Cruz_Patagonia.html ', '', 1, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1zKLpz_GaRwIfRxKbem-m-VD2U1HErySJ&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-02-26 21:00:24'),
(4, 'Excursion', 'Todos Glaciares: Upsala y Spegazzini', 'vistas/img/excursiones/4/554.jpg', '<div class=\"form-group\" style=\"\" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\";\"=\"\"><span style=\"font-size: 16px;\"><font face=\"Helvetica\"><font color=\"#212529\" style=\"\">Todo Glaciares:</font><font color=\"#4f81bd\" style=\"\"><b> Upsala y Spegazzini</b></font><font color=\"#212529\" style=\"\">. Es </font><font color=\"#4f81bd\" style=\"\"><b>una de las navegaciones más importantes de la zona del El Calafate</b></font><font color=\"#212529\" style=\"\">, podrá visitar los Glaciares Upsala y Spegazinni, combinado </font><font color=\"#4f81bd\" style=\"\"><b>con una caminata por el Bosque</b></font><font color=\"#212529\" style=\"\">.</font></font></span><br></div>', '<div><div style=\"\">Desde el Puerto de Punta Bandera, a 47 km de El Calafate,<b><font color=\"#4f81bd\"> iniciamos la navegación por el Brazo Norte del Lago Argentino.</font></b> Atravesamos la Boca del Diablo <font color=\"#4f81bd\"><b>con destino al Canal Upsala</b></font> <font color=\"#4f81bd\"><b>para navegar entre los grandes témpanos que se desprenden del frente del Glaciar Upsala. Luego ingresamos al Canal Spegazzini </b></font>y momentos después tendremos la primera vista del Glaciar Seco. Continuaremos navegando hasta el frente del Glaciar Spegazzini donde también contemplaremos los glaciares Heim Sur y Peineta. Nos preparamos para desembarcar en La Base Spegazzini y comenzamos la visita al área caminando a través del sendero del bosque hasta el Refugio Spegazzini. Este sendero de 300 metros cuenta con vistas inigualables de La Bahía de Los Glaciares, en su recorrido podremos disfrutar de estaciones temáticas y miradores.</div></div><span style=\"font-size:16px;\">\r\nA esta excursión deberías agregarle en caso de no estar en coche el transfer al puerto, ya que el mismo no está incluido.</span>', '9.500', '9.600', '49', '9.500', 'Traslado al Puerto Banderas', '6:50 am.  a  5:00 pm. ', '6 horas', 'Llevar: lentes para sol, protector solar, abrigo, guantes, calzado apropiado.  \r\n\r\n', 'Guia durante todo el recorrido y la excursión.\r\nnavegación, glaciares Uspsala y Spegazzini', 'Entrada al Parque Nacional.\r\nTraslado desde su hotel. Ver opcional', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g312851-d1988819-Reviews-Todo_Glaciares_Tour-El_Calafate_Province_of_Santa_Cruz_Patagonia.html ', '', 1, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1W9NvZHNq_x_U0_oPm8mQKH1RBD0CSHoZ&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-02-26 21:08:46'),
(5, 'Excursion', 'Glaciar Gourmet y Glaciar Moreno', 'vistas/img/excursiones/5/293.jpg', '<b><font color=\"#31859b\">La excursión Experiencia Glaciares Gourmet y Glaciar Moreno ofrece el servicio más completa del Parque Nacional Los Glaciares permitiendo la visita de</font> los glaciares Upsala, Spegazzini y Perito Moreno junto a las pasarelas de este.</b>', '<div><div><font color=\"#4f81bd\"><b>La excursión Experiencia Glaciares Gourmet ofrece el servicio más personalizado del Parque Nacional Los Glaciares</b></font> comenzando desde El Calafate, y navegando las aguas del Lago Argentino a bordo del Crucero María Turquesa y visitando los glaciares Upsala, Spegazzini y Perito Moreno navegando en medio de bloques de hielo . Esta excursión es la única navegación que permite visitar los glaciares antes mencionados mesclando con una caminata por el bosque en el Canal Spegazzini y la visita de las pasarelas del Glaciar Moreno. </div><div>El crucero consta de cuatro cubiertas de sol exteriores. La excursión Comienza con el Pick Up en el hotel a las 7:00 a.m.  </div><div>Desde aquí comienza la navegación hacia la barrera de témpanos del Canal Upsala, para dirigirse a continuación al Glaciar Spegazzini, el más alto del parque nacional, donde se descenderá y se realizará una caminata de una hora. </div><div>Una vez nuevamente en la embarcación, nos dirigiremos hacia el Glaciar Perito Moreno mientras se ofrece el almuerzo gourmet abordo para los pasajeros que navegan en la Cubierta Premium.</div><div><b><font color=\"#4f81bd\">ESTA EXCURSION PERMITE HACER 2 EXCURSIONES EN 1 Y PAGAR SOLO UNA, TAMBIÉN PERMITE AHORRAR UNA SEGUNDA ENTRADA AL PARQUE NACIONAL.</font></b></div><div>09:00 hs Zarpe hacia Brazo Norte. Visita a Bahía Escuadra y Muralla de Condoreras. Glaciar Seco. Glaciar Heim. Glaciar Spegazzini. Desembarque en Puesto de Las Vacas – Caminata.</div><div>Visita Canal Upsala, vista panorámica del Glaciar Upsala y Bertacchi, almuerzo a bordo. Navegación por el Canal de Los Témpanos hacia la pared norte del Glaciar Perito Moreno. Desde allí visitas a las pasarelas, y regreso en bus hasta El Calafate.</div></div><div><br></div>', '14.500', '15.800', '85', '14.500', '<p>$6.600 ARS.<span style=\"font-size: 1rem;\">Acceso al capitans club </span></p><p><span style=\"font-size: 1rem;\"> $ 990 ARS vianda.</span></p>', '6:50 am.  a  8:00 pm.  ', '13 horas', 'Llevar: lentes para sol, protector solar, abrigo, guantes, calzado apropiado.  \r\n\r\n', 'Traslado desde su hotel. Guia durante todo el recorrido y la excursión. Navegación al glaciar Upsala, Spegazzini y Glaciar Moreno . Visita a las pasarelas.\r\n', 'Entrada al Parque Nacional.', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g312851-d2062897-Reviews-Cruceros_MarPatag-El_Calafate_Province_of_Santa_Cruz_Patagonia.html ', '', 1, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1z5gpt_86dOC4zjioA8nSF4HKN_WsnZt-&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-02-26 21:22:34'),
(6, 'Renta', 'Coche Mediano', 'vistas/img/excursiones/6/887.jpg', '<div><font color=\"#000000\">Renta Car Coches medianos Toyota Yaris o Renault Logan garantizando siempre el mejor precio de la ciudad.</font></div><div><br><font color=\"#ffffff\"><span style=\"font-family: \"Helvetica Neue\";\">﻿</span></font></div>', '<div><p><font color=\"#000000\">Reservá tu auto al mejor precio garantizado.</font></p><div><font color=\"#000000\">Coches Medianos </font></div><div><font color=\"#000000\">Toyota Yaris o Renault logan según disponibilidad al momento del retiro.</font></div><div><font color=\"#000000\">¿Quién mejor para alquilar tu auto en la Patagonia con alguien que es de la Patagonia? </font></div><div><font color=\"#000000\">Contamos con una flota de autos pensado para que puedas moverte cómodamente.</font></div><div><font color=\"#000000\"><br></font></div><div><font color=\"#000000\"><br></font></div><div><font color=\"#000000\">Información del vehículo</font></div><div><font color=\"#000000\">Franquicia de ARS 50.000 (bloqueo en la tarjeta de crédito hasta la finalización del contrato y verificación del vehículo.</font></div><div><font color=\"#000000\">Política de combustible: se entrega con tanque lleno y se devuelve con tanque lleno, en caso de que falte combustible se le cobra 100 pesos argentinos por litro.</font></div><div><font color=\"#000000\">•<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Plazas disponibles: 5</font></div><div><font color=\"#000000\">•<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Vehículos disponibles: 11</font></div><div><font color=\"#000000\">•<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Aire acondicionado: si</font></div><div><font color=\"#000000\">•<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Transmisión: manual</font></div><div><font color=\"#000000\">•<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Puertas: 4</font></div><div><font color=\"#000000\">•<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Capacidad de baúl: 510 litros</font></div><div><font color=\"#000000\">•<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>KM x litro: 17.88 km x litro</font></div><div><font color=\"#000000\">El precio incluye</font></div><div><font color=\"#000000\">•<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Tanque lleno</font></div><div><font color=\"#000000\">•<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Lavado del auto</font></div><div><font color=\"#000000\">•<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>IVA</font></div><div><font color=\"#000000\">•<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Impuestos Aeropuerto</font></div><div><font color=\"#000000\">Adicionales</font></div><div><font color=\"#000000\">•<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Sillita de bebé</font></div><div><font color=\"#000000\"><br></font></div></div><div style=\"box-sizing: border-box; text-align: left; text-indent: 0px;\"><div><br></div></div>', '6.800', '', '42', '', 'Retira en la Ciudad \r\nRetira en el aeropuerto\r\nSilla para bebe.', '', '', 'Licencia de conductor actualizada, ser mayor de edad, tarjeta de crédito', 'Seguro contra terceros', 'Seguro total', '', '', '', '', 1, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1u2jsLjUXH79yd3OvPsmWTCig0_SWnsH4&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-02-27 04:29:29'),
(7, 'Excursion', 'Full Day Chaltén temporada Inviernal', 'vistas/img/excursiones/7/293.jpg', 'Excursión solamente de invierno, partiendo desde El Calafate temprano por la mañana incluye paradas en La Leona y en distintos puntos panorámicos siempre acompañado por un guía visitando el mirador del Glaciar Viedma (tan Importante como El glaciar Moreno) y el Centro de interpretación de Parques Nacionales incluye una caminata hasta el Chorrillo del Salto, el almuerzo está incluido en el restaurant Rancho Grande.', 'Excursión invernal de día completo en la que se visita la ciudad de El Chaltén partiendo desde El Calafate. Incluye paradas y caminatas tranquilas, vistas a miradores, comidas en restaurant y tiempo libre para recorrer el típico pueblo de montaña, siempre acompañados por un guía.<div>El recorrido por los hoteles en El Calafate comienza a las 8:00 am para luego dirigirse hacia la mítica Ruta 40. Esta ruta bordea el Lago Argentino, atraviesa el Río La Leona, y permite llegar, luego de 1 hora 15 minutos, al antiguo hotel de ruta Parador La Leona (casi un museo de la Ruta 40), donde podrán tomar unas ricas tortas caseras. Posteriormente, se continúa bordeando el Lago Viedma, teniendo la Cordillera de los Andes de fondo y, antes de llegar al Chaltén, se hará una parada en el mirador del Glaciar Viedma. Desde aquí se podrá apreciar una bellísima panorámica del Glaciar Viedma, la Cordillera de los Andes y los emblemáticos Cerro Fitz Roy y cerro Torre.</div><div>Tras 3 horas de viaje y 220 km se arriba a la villa de montaña de El Chaltén.</div><div>La primera actividad es visitar el Centro de Interpretación de Parques Nacionales. Posteriormente, se realizará una caminata guiada hacia el Mirador para luego dirigirse a </div><div>almorzar en un restaurant del centro de la ciudad. Finalizado el almuerzo, se visitará el Chorrillo del Salto famosa cascada ubicada a pocos minutos del pueblo, donde se realizará una caminata relajada por el bosque.</div><div>Para terminar, se regresa a El Chaltén, donde tendrá tiempo libre para recorrer por su cuenta durante 30 minutos el casco céntrico y luego emprender el regreso a su hotel del </div><div>Calafate, arribando a las 19:00.</div><div><br></div>', '5.900', '6.000', '', '5.000', '', '8:00 am.  a  8:00 pm. ', '11 horas aproximadas', 'Llevar: lentes para sol, protector solar, abrigo, guantes, calzado apropiado.  \r\n\r\n', 'Traslado desde el hotel. Almuerzo en Rancho Grande. Visita a la ciudad y al Chorrillo del Salto.', 'Bebidas', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g316035-d552856-Reviews-Patagonia_Hikes-El_Chalten_Province_of_Santa_Cruz_Patagonia.html ', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1TMPOjSWnwnJwBneuFDbonffEw9_pO3j-&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-01 01:05:24'),
(8, 'Excursion', 'Full Day Chaltén Trekking y almuerzo', 'vistas/img/excursiones/8/895.jpg', '<div>La excursión <font color=\"#4f81bd\"><b>Full Day El Chalten Trekking </b></font>es sin duda una de las excursiones que <font color=\"#4f81bd\"><b>no te debes perder</b></font>, La vista de <b><font color=\"#4f81bd\">El Monte Fitz-Roy</font> </b>es especial para los amantes de la naturaleza, <font color=\"#4f81bd\"><b>puedes visitar lagunas</b> </font>en el medio de las montañas, <b><font color=\"#4f81bd\">ver glaciares colgantes y otras maravillas de la naturaleza.</font></b><br></div>', '<div><span lang=\"ES-TRAD\" style=\"font-size: 20pt; font-family: T3Font_58, sans-serif;\"><font color=\"#4f81bd\"><span style=\"font-size:16px;\"><b>FULL DAY CHALTEN TREKKING Y ALMUERZO</b></span></font></span><span lang=\"ES-TRAD\" style=\"font-size:20.0pt;font-family:\" t3font_59\",sans-serif;=\"\" mso-bidi-font-family:t3font_59;color:red\"=\"\"><o:p></o:p></span></div>\r\n\r\n<div><span lang=\"ES-TRAD\" style=\"font-family:\" t3font_59\",sans-serif;mso-bidi-font-family:=\"\" t3font_59;color:black\"=\"\"> </span></div>\r\n\r\n<div><span lang=\"ES-TRAD\" style=\"font-family:\" t3font_59\",sans-serif;mso-bidi-font-family:=\"\" t3font_59;color:black\"=\"\"> </span><span style=\"color: rgb(140, 140, 140); font-family: Helvetica; font-size: 10.5pt;\">Nuestra excursión comienza con pick up por\r\nlos Hoteles en Calafate a partir de las 07:00 am, acompañados por\r\nnuestra guía bilingüe comenzará el camino hacia la localidad de El\r\nChaltén. </span></div>\r\n\r\n<div><span lang=\"ES-TRAD\" style=\"font-size:10.5pt;\r\nfont-family:Helvetica;color:#8C8C8C\">Durante el recorrido se realizarán una serie de paradas para observar el </span><span style=\"font-family: Helvetica; font-size: 10.5pt;\"> espectáculo paisajístico. </span><font color=\"#8c8c8c\" style=\"font-family: Helvetica; font-size: 10.5pt;\">A\r\nmitad camino, visitaremos el </font><strong style=\"font-family: Helvetica; font-size: 10.5pt;\"><span style=\"border: 1pt none windowtext; padding: 0cm;\"><font color=\"#4f81bd\">Parador La Leona</font></span></strong><font color=\"#8c8c8c\" style=\"font-family: Helvetica; font-size: 10.5pt;\">, patrimonio Histórico y Cultural,\r\nubicado a orillas de río. </font><font color=\"#8c8c8c\" style=\"font-family: Helvetica; font-size: 10.5pt;\">La\r\núltima parada será en el </font><strong style=\"font-family: Helvetica; font-size: 10.5pt;\"><span style=\"border: 1pt none windowtext; padding: 0cm;\"><font color=\"#4f81bd\">Mirador del Lago Viedma</font><font color=\"#8c8c8c\">,</font></span></strong><span class=\"apple-converted-space\" style=\"font-family: Helvetica; font-size: 10.5pt; color: rgb(140, 140, 140);\"><b><span style=\"border:none windowtext 1.0pt;\r\nmso-border-alt:none windowtext 0cm;padding:0cm\"> </span></b></span><font color=\"#8c8c8c\"><font face=\"Helvetica\"><span style=\"font-size: 10.5pt;\">punto\r\npanorámico donde </span><span style=\"font-size: 14px;\">podrás tomar fotografías</span><span style=\"font-size: 10.5pt;\">.</span></font></font></div>\r\n\r\n<div><span lang=\"ES-TRAD\" style=\"font-size:10.5pt;\r\nfont-family:Helvetica;color:#8C8C8C\">Los guarda parques del Parque Nacional nos instruirán  sobre los\r\ncuidados que debemos tener y respetar área protegida, luego r</span><font color=\"#8c8c8c\" style=\"font-family: Helvetica; font-size: 10.5pt;\">ecorreremos a pie\r\nhasta el </font><strong style=\"font-family: Helvetica; font-size: 10.5pt;\"><span style=\"border: 1pt none windowtext; padding: 0cm;\"><font color=\"#8c8c8c\">M</font><font color=\"#4f81bd\">irador\r\nde Los Cóndores</font></span></strong><font color=\"#8c8c8c\" style=\"font-family: Helvetica; font-size: 10.5pt;\">, con vistas panorámica del\r\ncerro Fitz Roy.</font></div>\r\n\r\n<div><span lang=\"ES-TRAD\" style=\"font-size: 10.5pt; font-family: Helvetica;\"><font color=\"#8c8c8c\">El almuerzo se realizará en el reconocido\r\nRestaurante </font><font color=\"#4f81bd\"><strong style=\"\"><span style=\"border: 1pt none windowtext; padding: 0cm;\">Rancho Grande de El Chaltén</span></strong>.</font><font color=\"#8c8c8c\"><o:p></o:p></font></span></div>\r\n\r\n<div><span lang=\"ES-TRAD\" style=\"font-size: 10.5pt; font-family: Helvetica;\"><font color=\"#8c8c8c\">Por último,\r\nnuestra guía nos acompañará (en una caminata 30 min) hacia el </font><strong style=\"\"><span style=\"border: 1pt none windowtext; padding: 0cm;\"><font color=\"#4f81bd\">Chorrillo del Salto,</font></span></strong><font color=\"#8c8c8c\"> una cascada natural de 20 m\r\nde alto, recorriendo una zona de bosque nativo de ladera, que invita a hacer\r\nuna pausa.<o:p></o:p></font></span></div>\r\n\r\n<div><span lang=\"ES-TRAD\" style=\"font-size:10.5pt;\r\nfont-family:Helvetica;color:#8C8C8C\">Alrededor de las 17:00 comenzamos el\r\nregreso a El Calafate arribando aproximadamente a las 20 hs.<o:p></o:p></span></div>', '7.000', '7.900', '53', '4.000', '', '6:50 am  8:00 pm. ', '13 horas', 'Llevar: lentes para sol, protector solar, abrigo, guantes, calzado apropiado.  \r\n\r\n', 'traslado desde tu hotel. Almuerzo en Rancho Grande. Guía en todo el recorrido. Visita a la ciudad. Chorrillo del Salto.', 'Bebidas.', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g316035-d552856-Reviews-Patagonia_Hikes-El_Chalten_Province_of_Santa_Cruz_Patagonia.html ', '', 1, '<iframe src=\"https://www.google.com/maps/d/embed?mid=19G-nNl2sJDihADfh2wWnKzObBRrO-gkb&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-01 03:26:35'),
(9, 'Buses', 'Bus El Calafate a El Chaltén ida y vuelta', 'vistas/img/excursiones/9/702.jpg', '<font color=\"#3984c6\"><b>Servicio de Bus semi cama desde El Calafate a El Chalten</b></font> con cuatro horarios disponibles en la temporada alta y una frecuencia en la temporada invernal.', '<div>Servicio de bus línea regular entre las localidades de El Calafate y El Chaltén.</div><div>El servicio de bus semi-cama desde El Calafate a El Chaltén es un servicio anual diario, saliendo y llegando desde las terminales de ómnibus. La duración del viaje de cada tramo es de 3 hs aproximadamente cada tramo.</div><div>Horarios de salida:</div><div>Tramo Calafate – Chaltén:</div><div>8.00 hs: todo el año, todos los días.</div><div>Salida desde la terminal de ómnibus El Calafate.</div><div>Tramo Chaltén – El Calafate: incluido, salida desde la terminal de el Chalten</div><div>18:00 hs: todos los días.</div><div>Salida desde la terminal de ómnibus El Chaltén. </div><div>Nota: Los servicios salen desde las terminales de El Calafate o desde El Chaltén no incluyen la tasa de uso de la terminal. El costo es por persona, no puede ser pre pagado, se abona al momento de tomar el servicio y en efectivo pesos. Presentación en la terminal 20 minutos previos al horario de partida.</div><div>IMPORTANTE:</div><div>EL REGRESO DE EL CHALTÉN A EL CALAFATE DEBE SER COMPLETADO EN EL FORMULARIO AL MOMENTO DE LA COMPRA, CON FECHA Y HORARIO DE SALIDA ELEGIDO. ES UN PASO OBLIGATORIO EN EL SERVICIO DE TICKET DE BUS DE IDA Y VUELTA A EL CHALTÉN.</div><div><br></div>', '3.800', '4.000', '234', '2.000', '', '<p>Desde El Calafate</p><p>8:00 am.</p><p>1:00 pm.</p><p>6:00 pm.</p><p>9:00 pm.</p><p>Desde El Chalten </p><p>8:00  am.</p><p>1:00  pm.</p><p>6:00  pm.</p>', '3hs', '', 'Traslado Ida y vuelta', '', '', '', '', '', 1, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1lcRzDsNpblahpF8QLB3wcozjdSLWLmCJ&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-01 03:45:46'),
(10, 'Excursion', 'Full Day Paine', 'vistas/img/excursiones/10/722.jpg', '<font color=\"#000000\"></font><span style=\"font-size:16px;\">La excursión <font color=\"#4f81bd\"><b>Torres del Paine </b></font>comienza muy temprano en El Calafate visitando el Parque Nacional Chileno. Se realizarán paradas en <font color=\"#4f81bd\"><b>distintos miradores, lagunas, lagos</b></font>. Incluye<font color=\"#4f81bd\"><b> caminata guiada</b></font> y un sna</span><font color=\"#000000\">ck.</font><br>', '<div><div><span lang=\"ES-TRAD\" style=\"font-size: 18pt; font-family: T3Font_5, sans-serif;\"><font color=\"#4f81bd\"><b>Torres del Paine Full Day</b></font></span><span lang=\"ES\" style=\"color:red;mso-ansi-language:ES\"><o:p></o:p></span></div>\r\n\r\n<div><span lang=\"ES-TRAD\" style=\"font-family:\" t3font_1\",sans-serif;mso-bidi-font-family:t3font_1\"=\"\"> </span></div>\r\n\r\n<div><span lang=\"ES-TRAD\">El Full Day al reconocido Parque Nacional Torres del Paine, recorre gran parte del Parque, a través de los diferentes caminos en forma directa (sin necesidad de paso previo por Puerto Natales). Este servicio\r\nes brindado con buses de última generación, y\r\nguía bilingüe habilitado por la Administración de Parques Nacionales de Chile. </span><span lang=\"ES-TRAD\"><o:p></o:p></span></div>\r\n\r\n<div><span lang=\"ES-TRAD\">Se parte desde la localidad\r\nargentina de El Calafate a partir de las 5.50 hs., desde el hotel donde esté\r\nalojado el pasajero, siempre y cuando se encuentre en un radio de 2 km del\r\ncentro. </span></div>\r\n\r\n<div><b><span lang=\"ES-TRAD\"><font color=\"#4f81bd\">Alrededor de las 10 de la mañana, se\r\nllegará a Frontera (Cerro Castillo)</font></span></b><span lang=\"ES-TRAD\"><font color=\"#4f81bd\">;</font> y una vez realizado los trámites\r\naduaneros, se realizará una pausa en la localidad chilena de Cerro Castillo;\r\nallí podrán cambiar dinero para pagar la entrada al Parque, tomar un desayuno\r\ntradicional, conversar con lugareños, etc. Luego, nuestros pasajeros harán\r\ntrasbordo a buses más pequeños, con el objeto de lograr cohesión grupal, mayor\r\ninteracción con el guía, el especialista que los acompañará en el trayecto y\r\nasí, maximizar su experiencia en esta visita tan especial. </span><span lang=\"ES-TRAD\"><o:p></o:p></span></div>\r\n\r\n<div><span lang=\"ES-TRAD\">A las 11, aproximadamente, nuestro\r\nbus retomará camino hacia el Parque; llegando al<font color=\"#4f81bd\"> </font></span><b><span lang=\"ES-TRAD\"><font color=\"#4f81bd\">primer atractivo de nuestro recorrido a\r\nlas 11.40 hs: el Lago Sarmiento.</font> </span></b><span lang=\"ES-TRAD\">Allí se hará una breve parada para\r\ntomar las primeras fotografías y disfrutar del imponente paisaje. </span><span lang=\"ES-TRAD\"><o:p></o:p></span></div>\r\n\r\n<div><span lang=\"ES-TRAD\">La próxima parada de esta excursión\r\nserá en la </span><b><span lang=\"ES-TRAD\"><font color=\"#4f81bd\">Portería\r\nLaguna Amarga, a las 12.30 hs</font> </span></b><span lang=\"ES-TRAD\">aproximadamente; allí se abonará el ingreso al Parque Nacional\r\nTorres del Paine. Desde este punto, nuestro bus tomará rumbo hacia el </span><b><span lang=\"ES-TRAD\"><font color=\"#4f81bd\">Lago Nordenskjold, al cual\r\narribará 13.00 hs</font></span></b><span lang=\"ES-TRAD\"><font color=\"#4f81bd\">.</font> Se podrá disfrutar de este bello espejo de agua; reflejando\r\nunos de los principales atractivos del Parque: los imponentes “Cuernos del\r\nPaine”. Alrededor de las </span><b><span lang=\"ES-TRAD\"><font color=\"#4f81bd\">13.30 hs, se arribará a Pudeto</font></span></b><span lang=\"ES-TRAD\">, donde se realizará un trekking\r\nhacia el </span><b><span lang=\"ES-TRAD\"><font color=\"#4f81bd\">Salto\r\nGrande</font></span></b><span lang=\"ES-TRAD\"><font color=\"#4f81bd\">,</font>\r\npara continuar luego al </span><b><span lang=\"ES-TRAD\"><font color=\"#4f81bd\">Mirador de los Cuernos del Paine.</font> </span></b><span lang=\"ES-TRAD\">Este recorrido en conjunto tiene\r\nuna duración aproximada de 1 hora y media. El guía decidirá en el trayecto, a\r\nque mirador asistirá primero el grupo. Se trata de una caminata de dificultad\r\nbaja. Desde allí, se emprenderá regreso hacia la zona de </span><b><span lang=\"ES-TRAD\"><font color=\"#4f81bd\">Laguna Amarga (16.50/17.00\r\nhs). </font></span></b><span lang=\"ES-TRAD\"><o:p></o:p></span></div>\r\n\r\n<div><font color=\"#4f81bd\"><b><span lang=\"ES-TRAD\">A las 18 hs, se arribará a Cerro\r\nCastillo; regresando a El Calafate entre las 22.30/23.00 hs aproximadamente.</span></b><b><span lang=\"ES-TRAD\" style=\"font-family:\" ms=\"\" mincho\";mso-bidi-font-family:\"ms=\"\" mincho\"\"=\"\"> </span></b><b><span lang=\"ES-TRAD\">Incluye:</span></b><b><span lang=\"ES-TRAD\" style=\"font-family:\" ms=\"\" mincho\";mso-bidi-font-family:\"ms=\"\" mincho\"\"=\"\"> </span></b></font><b><span lang=\"ES-TRAD\"><font color=\"#4f81bd\">colación </font>(</span></b><span lang=\"ES-TRAD\">1 Gaseosa o Agua 1\r\nbarra de Cereal |1 Paquete de galletas) </span><span lang=\"ES-TRAD\"><o:p></o:p></span></div></div>', '16.000', '16.800', '', '16.800', '', '6:00 am.  a   9:30 pm.', '15.30 Horas', 'Mayor de 18 años', 'Vianda y guía en el tramo Chileno', 'Entrada al Parque Nacional', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g670171-d314634-Reviews-Torres_del_Paine_National_Park-Torres_del_Paine_National_Park_Magallanes_Region.html', '', 1, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1yHb9bk-R87Xqg1CG3ztgspW_fwkVnVvO&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-01 04:27:14');
INSERT INTO `excursiones` (`id`, `category`, `titulo`, `banner`, `intro`, `descripcion`, `precio_bajo`, `precio_alto`, `reservada`, `precio_ninos`, `opcional`, `turnos`, `duracion`, `requisitos`, `incluye`, `no_incluye`, `rango_adultos`, `rango_ninos`, `trip_link`, `trip_detalle`, `recomendado`, `recorrido`, `fecha`) VALUES
(18, 'Excursion', 'Full Day Paine 4x4', 'vistas/img/excursiones/18/824.jpg', '<div><span style=\"font-size: 16px;\"><font color=\"#000000\">La excursión </font><font color=\"#4f81bd\"><b>Torres del Paine 4x4</b></font><font color=\"#000000\"> comienza desde muy temprano en El Calafate </font><font color=\"#4f81bd\"><b>visitando el Parque Nacional Chileno.</b></font><font color=\"#000000\"> Luego de pasar la frontera Argentino Chilena se realizarán paradas en distintos miradores, lagunas, Lagos. Incluye caminata guiada y un mini lunch.</font></span><br></div>', '<span style=\"\" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\";\"=\"\"><div style=\"\"><br></div>\r\n\r\n<div style=\"color: rgb(33, 37, 41);\"><span lang=\"ES-TRAD\" style=\"font-size:10.0pt;font-family:\" helvetica\",sans-serif;mso-fareast-font-family:=\"\" \"times=\"\" new=\"\" roman\";mso-bidi-font-family:\"times=\"\" roman\";color:#666666\"=\"\">Una excursión de día completo a 300 kms al sur de El Calafate, es considerado como\r\nuno de los parques más bellos del mundo por sus montañas, glaciares, lagos, cascadas, flora y fauna.</span><span style=\"color: rgb(102, 102, 102); font-family: Helvetica, sans-serif; font-size: 10pt;\"> </span></div>\r\n\r\n<div style=\"\"><span lang=\"ES-TRAD\"><font color=\"#666666\"><font face=\"Helvetica, sans-serif\" size=\"2\">Al llegar al paso fronterizo de Cerro Castillo frontera Chilena y luego de 80 Km comenzaremos a recorrer</font></font><span class=\"apple-converted-space\" style=\"font-family: Helvetica, sans-serif; font-size: 10pt; color: rgb(102, 102, 102);\"> </span><span class=\"apple-converted-space\" style=\"font-family: Helvetica, sans-serif; font-size: 10pt; caret-color: rgb(79, 129, 189);\"><font color=\"#4f81bd\"><b>el</b></font></span><font color=\"#666666\" style=\"font-family: Helvetica, sans-serif; font-size: 10pt;\">l</font><span class=\"apple-converted-space\" style=\"font-family: Helvetica, sans-serif; font-size: 10pt; color: rgb(102, 102, 102);\"> </span><b style=\"font-family: Helvetica, sans-serif; font-size: 10pt;\"><font color=\"#4f81bd\">Parque Nacional Torres\r\ndel Paine<span class=\"apple-converted-space\" style=\"\"> </span></font></b><font color=\"#666666\" style=\"font-family: Helvetica, sans-serif; font-size: 10pt;\">hacia las\r\n11.30 hs se realizará la primera parada panorámica en el Lago Sarmiento. <o:p></o:p></font></span></div>\r\n\r\n<div style=\"color: rgb(33, 37, 41);\"><span lang=\"ES-TRAD\" style=\"font-size:\r\n10.0pt;font-family:\" helvetica\",sans-serif;mso-bidi-font-family:\"times=\"\" new=\"\" roman\";=\"\" color:#666666\"=\"\">Continuaremos nuestro viaje realizando paradas con y sin\r\ndescenso del vehículo para contemplar lagos, cascadas, e incluso podremos\r\nhacer avistaje de zorros y guanacos, y quizás pumas, entre otros animales\r\nautóctonos.<o:p></o:p></span></div>\r\n\r\n<div style=\"\"><span lang=\"ES-TRAD\" style=\"font-size: 10pt; font-family: Helvetica, sans-serif;\"><font color=\"#666666\">A bordo de</font><span class=\"apple-converted-space\" style=\"color: rgb(102, 102, 102);\"> </span><b style=\"\"><font color=\"#4f81bd\">CAMIONES\r\nOVERLAND 4X4</font></b><span class=\"apple-converted-space\" style=\"color: rgb(102, 102, 102);\"> se </span><font color=\"#666666\">visitarán  puntos estratégicos, desde donde emprenderemos caminatas que nos permitan\r\nacceder a los miradores panorámicos de los más importantes</font><span class=\"apple-converted-space\" style=\"color: rgb(102, 102, 102);\"> </span><b style=\"\"><font color=\"#4f81bd\">atractivos naturales</font></b><span class=\"apple-converted-space\" style=\"color: rgb(102, 102, 102);\"> </span><font color=\"#666666\">del Parque.</font></span></div>\r\n\r\n<div style=\"color: rgb(33, 37, 41);\"><span lang=\"ES-TRAD\" style=\"font-size:\r\n10.0pt;font-family:\" helvetica\",sans-serif;mso-bidi-font-family:\"times=\"\" new=\"\" roman\";=\"\" color:#666666\"=\"\">En la Laguna Amarga bordearemos la laguna por sus costas de arena, para acceder a la mejor vista\r\npanorámica de las Torres del Paine. <o:p></o:p></span></div>\r\n\r\n<div style=\"\"><span lang=\"ES-TRAD\" style=\"font-size: 10pt; font-family: Helvetica, sans-serif;\"><font color=\"#666666\">Luego continuaremos hacia la Cascada Paine donde bajaremos para\r\nhacer el picnic a la horilla de</font><font color=\"#4f81bd\"><span class=\"apple-converted-space\" style=\"\"> </span><b style=\"\">Río\r\nPaine con vistas a Las Torres</b>. </font></span><span lang=\"ES-TRAD\" style=\"color: rgb(102, 102, 102); font-size: 10pt; font-family: Helvetica, sans-serif;\">El almuerzo es a la intemperie y en la\r\nnaturaleza, protegidos por la vegetación o incluso dentro de nuestros camiones\r\nOverland si el clima no acompaña. <o:p></o:p></span></div>\r\n\r\n<div style=\"\"><span lang=\"ES-TRAD\" style=\"color: rgb(102, 102, 102); font-size: 10pt; font-family: Helvetica, sans-serif;\">Una vez en marcha nuevamente, y luego de realizar paradas en\r\ndiversos miradores como</span><span lang=\"ES-TRAD\" style=\"font-size: 10pt; font-family: Helvetica, sans-serif;\"><font color=\"#4f81bd\"> <b style=\"\">Laguna de los Cisnes y Mirador Superior del\r\nNordenskjold</b>,</font></span><span lang=\"ES-TRAD\" style=\"font-size: 10pt; font-family: Helvetica, sans-serif;\"><font color=\"#666666\"> llegaremos al</font><span class=\"apple-converted-space\" style=\"color: rgb(102, 102, 102);\"> </span><b style=\"\"><font color=\"#4f81bd\">Salto\r\nGrande</font></b><font color=\"#666666\">, desde donde se realiza una caminata guiada de aproximadamente\r\n1:30 hs hacia el</font><span class=\"apple-converted-space\" style=\"color: rgb(102, 102, 102);\"> </span><font color=\"#4f81bd\"><strong style=\"\">Mirador\r\nde los</strong><span class=\"apple-converted-space\" style=\"\"><b> </b></span><b style=\"\">Cuernos\r\ndel Paine</b></font><span class=\"apple-converted-space\" style=\"color: rgb(102, 102, 102);\"> </span><font color=\"#666666\">a orillas del Lago\r\nNordenskjold. <o:p></o:p></font></span></div>\r\n\r\n<div style=\"\"><span lang=\"ES-TRAD\" style=\"font-size: 10pt; font-family: Helvetica, sans-serif;\"><font color=\"#666666\">Luego de esta caminata, se continua en el vehículo hasta un\r\nnuevo mirador, esta vez en cercanías del</font><span class=\"apple-converted-space\" style=\"color: rgb(102, 102, 102);\"> </span><b style=\"\"><font color=\"#4f81bd\">Lago\r\nPehoe</font></b><font color=\"#666666\">, desde donde tendrán una de las vistas más famosas del Parque\r\nNacional, con los Cuernos y el</font><span class=\"apple-converted-space\" style=\"color: rgb(102, 102, 102);\"><b> </b></span><b style=\"\"><font color=\"#4f81bd\">Valle\r\ndel Francés</font></b><span class=\"apple-converted-space\" style=\"color: rgb(102, 102, 102);\"> </span><font color=\"#666666\">de fondo,\r\nenmarcados por los lagos</font><span class=\"apple-converted-space\" style=\"color: rgb(102, 102, 102);\"> </span><font color=\"#4f81bd\"><b style=\"\">Pehoe\r\ny Nordenskjold</b>,</font><font color=\"#666666\"> desde allí divisarán también los </font><b style=\"\"><font color=\"#4bacc6\">Montes Paine\r\nGrande y<span class=\"apple-converted-space\" style=\"\"> </span>Almirante Nieto</font></b><b style=\"color: rgb(102, 102, 102);\">.<span class=\"apple-converted-space\"> </span></b><font color=\"#666666\">Luego emprendemos el regreso a El\r\nCalafate, llegando a los hoteles alrededor de las 21:30hrs.<o:p></o:p></font></span></div></span>', '24.800', '25.000', '', '24.800', '', '6:45 am.  a   9:30 pm.', '15 Horas aproximadas', 'Ropa Cómoda. Zapatillas, anteojos, ropa abrigada, crema humectante.', 'Vianda y guía ', 'Entrada al parque Nacional', '', '', ' https://www.tripadvisor.com.ar/Attraction_Review-g670171-d314634-Reviews-Torres_del_Paine_National_Park-Torres_del_Paine_National_Park_Magallanes_Region.html', '', 1, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1105PFKIv1Z43DdF5GydY34uQ1yF56BiN&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-09 12:18:15'),
(19, 'Excursion', 'Estancia Nibepo Aike', 'vistas/img/excursiones/19/499.jpg', '<div><div><font color=\"#000000\"><span style=\"caret-color: rgb(0, 0, 0);\"><br></span></font></div><div><font color=\"#000000\"><span style=\"caret-color: rgb(0, 0, 0);\">Estancia Nibepo Aike. Excursión que transcurre dentro del Parque Nacional los Glaciares a pocos kilómetros del Glaciar Moreno. Incluye un show de arreo de ovejas, esquila, y una caminata por la estancia. Se sirve al final del recorrido un rico cordero al asador con postres ensaladas.</span></font></div><div><br></div></div><div><br></div><div></div>', '<div class=\"form-group\" style=\"\" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\";\"=\"\"><p><font color=\"#000000\">Estancia Nibepo Aike</font></p><p><font color=\"#000000\">Día de campo para participar de diferentes actividades como asistir a prueba de riendas, demostración de esquila, caminatas y cabalgata.</font></p><p><font color=\"#000000\">Durante el trayecto a la Estancia es común ver cóndores, zorros y liebres, con el Cerro Frías como protagonista. al cruzar el Río Rico, la estepa cambia, convirtiéndose en un paisaje cordillerano.</font></p><p><font color=\"#000000\">Arribo a la estancia,el guía anfitrión les dará la bienvenida y los acompañará al Quincho, se les invitará con una bebida con  pastelería casera. Se emprende luego una caminata por las instalaciones de una típica estancia patagónica  En las caballerizas, quien haya optado por la cabalgata (costo adicional), montará y saldrá a explorar los alrededores acompañados de un guía. El resto del grupo hará una caminata durante la cual tendrá excelentes vistas del Brazo Sur del Lago Argentino a través de afloramientos rocosos erosionados por la acción glaciaria; allí se podrán apreciar con claridad los pliegues de la corteza terrestre diferenciados entre sí por la variedad de sedimentos que le dieron origen. Estas formaciones se suceden hasta llegar a un punto en que las rocas conforman un anfiteatro natural. A través de senderos descubriremos un bosque de lengas y ñires, donde habitan caranchos, cachañas, liebres, pájaros carpinteros, águilas y una abundante variedad de flora y fauna autóctona. El recorrido puede variar según las condiciones climáticas. Caminata o cabalgata 45 m / 1 h. Nivel: fácil.</font></p><p><font color=\"#000000\">Luego nos reunimos en la puerta del galpón de esquila y actual museo histórico de la estancia. Oportunidad para conocer un galpón y comprender el trabajo de las comparsas de esquila. Se explicará el proceso desde la esquila del animal hasta el armado del fardo de lana, forma en la cual la lana es estivada y transportada. Como sistema se utilizará la tijera manual como se hacía antiguamente. </font></p><p><font color=\"#000000\">En seguida se procederá a una “prueba de riendas‟ de jinetes o según las actividades rurales del día se hará trabajo de hacienda en los corrales cercanos al casco. Entre las actividades diarias los visitantes también podrán participar por la mañana del ordeñe y del arreo de ovejas, concluyendo de este modo con un día típico de trabajo en la Estancia. Alguna de estas actividades puede estar sujeta a modificación por condiciones climáticas.</font></p><p><font color=\"#000000\">Regresando llegaremos al Quincho donde el Asador ya tendrá el asado a punto para que los comensales se deleiten con un rico cordero patogénico, para luego emprender el regreso al hotel. </font></p><div class=\"form-group\" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\";\"=\"\"><br></div><div><br></div></div>', '', '', '12', '', '1000 pesos en traslado desde tu hotel a la estancia.', '8:30 am.  a    3:30 pm.', '6 horas', '', '45 minutos de cabalgata, visita a las instalaciones. Demostración de esquila y destreza criolla.\r\nAlmuerzo cordero al asador ', 'Bebidas.', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g312851-d4327683-Reviews-Estancia_Nibepo_Aike-El_Calafate_Province_of_Santa_Cruz_Patagonia.html ', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1mNaGXlCah_GxPjeusoX6qFWXTVSj7q6e&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-11 17:33:43'),
(23, 'Excursion', 'Big Ice', 'vistas/img/excursiones/15000/609.jpg', '<div><font color=\"#212529\"></font><span style=\"font-size:16px;\">Excursión de <font color=\"#4f81bd\"><b>día completo sobre el Glaciar Moreno</b></font> tiene una duración 4 horas sobre el hielo y 3 horas en el bosque, podrás observar sumideros, cuevas en el hielo, lagunas azules y grietas, incluye una <font color=\"#4f81bd\"><b>navegación </b></font>en el cruce por la cara sur del Glaciar Moreno. </span><span style=\"color: rgb(33, 37, 41); font-size: 1rem;\"></span></div>', '<div><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\";=\"\" font-size:=\"\" 18px;\"=\"\"><span style=\"font-weight: bolder;\"><font color=\"#4f81bd\">Big Ice Perito Moreno</font></span></span><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\";=\"\" font-size:=\"\" 18px;\"=\"\"></span><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\";\"=\"\"><span style=\"font-weight: bolder;\"><font color=\"#4f81bd\"></font></span><br></span><br></div>', '', '', '', '', '<p>Traslado desde su hotel al puerto.</p><p>Vianda.</p>', '7:00 am.  a   7:00 pm. ', '12', 'Edad de 18 a 50 años . Buen estado físico bota de trekking ( imprescindible) anteojo de sol, crema solar, vianda. No se aceptan: mujeres embarazadas , y personas con problemas articulares o cardiacos o otras discapacidades.', 'Caminata en el bosque, en el hielo, navegación frente al glaciar y guía.', 'Entrada al Parque Nacional', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g1949199-d313740-Reviews-Perito_Moreno_National_Park-Perito_Moreno_Province_of_Santa_Cruz_Patagonia.html ', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1WdZH648qY5_-NLfB2ToUQgnWsIvhqhJ9&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-17 18:42:08'),
(24, 'Excursion', 'Full Day Chaltén Glaciar Trek', 'vistas/img/excursiones/8000/429.jpg', '<p>Excursión partiendo desde El Calafate especial para los que quieren realizar un <b><font color=\"#3984c6\">trekking sobre el Glaciar</font></b> Viedma se navega frente al Glaciar Viedma y si camina por tres horas en el mismo. <b style=\"\"><font color=\"#3984c6\">Incluye una vianda.</font></b><br></p><div><br></div>', '<p><b style=\"\"><font color=\"#3984c6\" style=\"\">Chalten Full Day Ice Treck</font></b><br><font color=\"#000000\">Frecuencia: Los días martes, jueves, sábados y Domingos.</font><br><font color=\"#3984c6\"><b>El producto está dirigido a personas con buena condición física, habituados a realizar caminatas moderadas en terrenos irregulares.</b></font><br><font color=\"#000000\">Alrededor de las 7 de la mañana se comienza con el recorrido por los hoteles para salir en dirección a la zona norte del Parque Nacional Los Glaciares (aún sin explorar). En nuestro recorrido haremos varias paradas: en la cabecera del Lago Argentino donde podremos observar el lago más grande de nuestro país y la Cordillera de los Andes, cruzaremos el río más importante de nuestra provincia (Río Santa Cruz) y llegaremos al parador histórico la Leona donde podremos observar un pequeño museo y consumir algún refrigerio con las famosas tortas caseras del lugar. Continuando haremos una parada en la cabecera del Lago Viedma para poder observarlo, así también como algunas estancias típicas de la zona y el imponente Cerro Fitz Roy y Cerro Torre distantes a unos 90 Km. Ingresaremos hacia el Chaltén por la ruta Nº 23 y nuestra próxima parada será en Bahía Túnel en donde se embarca en las modernas lanchas para poder llegar al frente del glaciar Viedma. </font><br><font color=\"#000000\">Durante la navegación rumbo al Glaciar Viedma se podrán observar los macizos del Cerro Fitz Roy y Cerro Huemul. Al llegar al Cabo de Hornos (extremo sureste del Campo Ventisqueros), la embarcación vira al oeste y se encuentra con la vista imponente del Glaciar. Se realiza el desembarque en el promontorio rocoso frente al Glaciar Viedma, donde los guías de Trekking se encargan de la seguridad y de Trekking, también compartirán sus conocimientos acerca del área, con una breve charla de Glaciología. Desde allí se realiza una breve caminata por el terreno, que pocos años atrás fue ocupado por el glaciar. Al cabo de algunos minutos se llega al borde del Glaciar, donde todos los visitantes se calzan los crampones necesarios para subir al Glaciar. Finalmente, comienza un Trekking de dos horas y media sobre el Glaciar Viedma. Durante el transcurso del Trekking se pueden encontrar sumideros, grietas y cuevas. Durante la excursión se hará un break para almorzar. Se emprende el recorrido de regreso a la ciudad de El Calafate para llegar a las 19:30 aproximadamente.</font></p><div><br></div><div><br></div><div><br></div>', '', '', '', '', '', '6:50 am   a  8:00 pm.', '12 horas', 'Edad 12 a 65 años.  Llevar: lentes para sol, protector solar, abrigo, guantes, calzado apropiado.  \r\n\r\n', 'Traslado desde su hotel, viandas, caminata sobre el hielo, navegación frente al glaciar y guía.', '', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g316035-d3710333-Reviews-Viedma_Glacier-El_Chalten_Province_of_Santa_Cruz_Patagonia.html ', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1xRyscsOhvTLfN-EllkcHrboWwNV-dfLW&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-17 23:30:56'),
(26, 'Excursion', 'Moreno Spirit Navegación corta', 'vistas/img/excursiones/15000/379.jpg', '<div><b><font color=\"#3984c6\">Moreno Spirit es una navegación <span style=\"font-family: \" source=\"\" sans=\"\" pro\",=\"\" -apple-system,=\"\" blinkmacsystemfont,=\"\" \"segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" ui=\"\" symbol\";=\"\" font-size:=\"\" 16px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" left;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-thickness:=\"\" initial;=\"\" text-decoration-style:=\"\" text-decoration-color:=\"\" float:=\"\" display:=\"\" inline=\"\" !important;\"=\"\">corta</span> de una hora </font></b>de duración frente a la cara norte del Glaciar Moreno, si deseas contratar el traslado hasta el puerto deberás sumar la excursión Glaciar Moreno Clásicc y adicionar a esta la navegación. <br></div><div><br></div>', '<div><br></div><div><font color=\"#3984c6\"><br></font></div><div><font color=\"#000000\">Este tour es una</font><font color=\"#3984c6\"><b> navegación de 1 hora frente a la cara norte del Glaciar Perito Moreno. </b></font><font color=\"#000000\">Es una excursión ideal si visita el glaciar por su cuenta en auto o reservando la excursión Perito Moreno Pasarelas porque complementa el recorrido de las pasarelas con un acercamiento a la cara del glaciar para observar desde muy cerca témpanos y desprendimientos ocasionales </font><span style=\"color: rgb(0, 0, 0); font-size: 1rem;\">frente a todo el ancho de la pared norte esperando disfrutar de algún desprendimiento de hielo.</span></div><div><font color=\"#000000\">Aquellos que deseen tomar la excursión desde El Calafate, deben reservar la <span style=\"caret-color: rgb(0, 0, 0);\">excursión Glaciar Moreno Classic y adosar la navegación.</span></font></div><div><br></div>', '2.000', '2.000', '23', '2.000', '<p>$2800 ARS traslado desde su hotel.</p><p> visita a las pasarelas.\r\n</p><p>$990 ARS vianda.</p>', '<p>11:30 am.</p><p>0:45 p.m.</p><p>2:15 pm.</p>', '1 hora', 'Llevar: lentes para sol, protector solar, abrigo, guantes, calzado apropiado.  \r\n\r\n', 'Servicio de guia en la navegación', 'Entrada al parque', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g312851-d11958510-Reviews-Southern_Spirit-El_Calafate_Province_of_Santa_Cruz_Patagonia.html ', '', 1, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1JSEdfn_WVFPt-7BB7v2Vq__RrsurRgcZ&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-18 03:14:04'),
(27, 'Excursion', 'Safari Náutico Glaciar Moreno', 'vistas/img/excursiones/27/721.jpg', '<p>Una Excursión para <font color=\"#3984c6\"><b>todas las edades </b></font>que se realiza todo el año. Imperdible! Podrás conocer las paredes del glaciar muy de cerca!</p>', '<p><font color=\"#000000\">La excursión comienza en el puerto </font><b style=\"\"><font color=\"#3984c6\">“Bajo de las Sombras”</font><font color=\"#000000\">,</font></b><font color=\"#000000\"> ubicado en la Ruta 11, Km 70.9, a una hora y media de El Calafate y a solo 7km del Glaciar. El pasajero </font><font color=\"#3984c6\"><b style=\"\">deberá llegar por sus medios hasta el puerto</b> </font><font color=\"#000000\">y una vez allí, se embarcará para navegar por el Lago Rico, donde se </font><b style=\"\"><font color=\"#3984c6\">podrá apreciar la impresionante pared de hielo del Glaciar Perito Moreno</font></b><b style=\"color: rgb(0, 0, 0);\"> </b><font color=\"#000000\">y los témpanos que provienen de él. (En caso de no contar con transporte, puede contratar la excursión al Glaciar Moreno Pasarelas que cuenta con la parada en el puerto para aquellas personas que deseen hacer esta excursión.</font></p><p><font color=\"#000000\">Esta </font><font color=\"#3984c6\"><b style=\"\">navegación</b> </font><font color=\"#000000\">tiene una</font><b style=\"\"> <font color=\"#3984c6\">duración de una hora</font></b><font color=\"#000000\"> y brinda la posibilidad de </font><b style=\"\"><font color=\"#3984c6\">observar</font></b><font color=\"#000000\"> desde </font><b style=\"\"><font color=\"#3984c6\">confortables embarcaciones</font></b><font color=\"#000000\">, y con una perspectiva totalmente diferente, las impresionantes</font><b style=\"color: rgb(0, 0, 0);\"> </b><b style=\"\"><font color=\"#3984c6\">paredes del Glaciar Perito Moreno</font></b><font color=\"#000000\"> y sus continuos y estruendosos derrumbes sobre las aguas del Lago Rico.</font></p><p><font color=\"#000000\">A 400 metros de la pared sur del Glaciar Perito Moreno, el barco se detiene por unos minutos para poder observar más detalladamente el paisaje. ¡Más cerca de la pared de la ruptura, imposible!</font></p><p><font color=\"#000000\">El </font><b style=\"\"><font color=\"#3984c6\">Safari Náutico </font></b><font color=\"#000000\">es una navegación</font><font color=\"#3984c6\"> <b style=\"\">apta para todas las edades</b> </font><font color=\"#000000\">y se puede realizar </font><font color=\"#3984c6\"><b>los 365 días del año</b></font><font color=\"#000000\">.</font></p><p><font color=\"#000000\">Esta excursión está orientada a personas que quieren contemplar la magia del hielo e inmortalizarla en la memoria, observando cada detalle de la pared de hielo y su entorno.</font></p><p><font color=\"#000000\">Salidas desde puerto “Bajo</font></p><div><br></div>', '1.800', '1.800', '29', '1.800', '<p>$3500 ARS , traslado desde us hotel y visita al glaciar.\r\n</p><p>Vianda $990 ARS</p>', '<p>9:30 am.</p><p>11:30 am.</p><p>2:30 pm.</p>', '', 'Llevar: lentes para sol, protector solar, abrigo, guantes, calzado apropiado.  \r\n\r\n', 'Servicio de guía.', 'La entrada al parque nacional', '', '', 'https://www.tripadvisor.com.ar/AttractionProductReview-g312851-d16642635-Glaciar_Perito_Moreno_con_Safari_Nautico-El_Calafate_Province_of_Santa_Cruz_Patago.html', '', 1, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1ss0Jz1cFRH55Vjcd5E26sABsZE1AqZ9F&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-19 10:53:40'),
(28, 'Excursion', 'Espíritu de los Glaciares', 'vistas/img/excursiones/28/513.jpg', '<p class=\"MsoNormal\"><span lang=\"ES\"><font color=\"#000000\">Excursión de</font><font color=\"#3984c6\"><b> 3\r\ndías, 2 noches en el crucero Santa Cruz </b></font><font color=\"#000000\">en el Lago Argentino navegando y\r\nvisitando los </font><font color=\"#3984c6\"><b>glaciares Upsala, Spegazzini, Mayo y Perito Moreno</b></font><font color=\"#000000\">, navegación de\r\nexclusividad y lujo donde despertaras frente a los imponentes glaciares del\r\nParque Nacional.</font><o:p></o:p></span></p>', '<p style=\"margin:0cm;vertical-align:baseline\"><font color=\"#000000\" face=\"Calibri, sans-serif\">El Campo de Hielo Patagónico es, después de la Antártida, el manto de hielo más grande del planeta. Sus glaciares tienen origen a solo 1500 msnm de altitud y descienden hasta los 200 msnm, lo que permite un acceso y visualización única en el mundo.</font></p><p style=\"margin:0cm;vertical-align:baseline\"><font face=\"Calibri, sans-serif\" style=\"color: rgb(0, 0, 0);\">El</font><font face=\"Calibri, sans-serif\" style=\"\"><b style=\"\"> <font color=\"#3984c6\">Parque Nacional Los Glaciares </font></b></font><font face=\"Calibri, sans-serif\" style=\"color: rgb(0, 0, 0);\">es un magnífico escenario de</font><font face=\"Calibri, sans-serif\" style=\"\"><b style=\"\"><font color=\"#3984c6\"> bosques, lagos, montañas, hielo y estepa</font><font color=\"#000000\">,</font></b></font><font face=\"Calibri, sans-serif\" style=\"color: rgb(0, 0, 0);\"> con más de 200 glaciares. Destacan el Glaciar Spegazzini con la gran altura de su frente que alcanza los 135 msnm, el Glaciar Upsala que cubre todo un valle con una extensión aproximada de 765 Km2 y una longitud de 53 km, y el Glaciar Perito Moreno, en constante avance, y cuyas rupturas son un espectáculo natural incomparable.</font></p><p style=\"margin:0cm;vertical-align:baseline\"><font color=\"#000000\" face=\"Calibri, sans-serif\">El espíritu de los Glaciares es una expedición que se adentra en la naturaleza y en la esencia de este paraje patagónico, navegándolo a bordo del exclusivo Crucero Santa Cruz, especialmente diseñado para esta expedición. El más alto confort y gastronomía gourmet para una experiencia memorable.</font></p><p style=\"margin:0cm;vertical-align:baseline\"><font color=\"#000000\"><font face=\"Calibri, sans-serif\">Espíritu glaciares (3 días y 2 noches) El Crucero Santa Cruz ofrece un nivel de exclusividad y lujo en cuanto a excursiones sin precedentes en el Parque Nacional los Glaciares. 3 días y 2 noches frente a los glaciares Upsala, Spegazzini, Mayo, y Perito Moreno, mientras disfruta de un excelente servicio todo incluído tipo gourmet. </font></font></p><p style=\"margin:0cm;vertical-align:baseline\"><font color=\"#3984c6\"><font face=\"Calibri, sans-serif\" style=\"\">“</font><font face=\"Calibri, sans-serif\" style=\"\"><b style=\"\">The Spirit of the Glaciers</b></font></font><font face=\"Calibri, sans-serif\" style=\"color: rgb(0, 0, 0);\">” es una experiencia única a nivel mundial disponible sólo para algunos pocos viajeros que gusten del lujo, del confort y de alterna</font></p><p style=\"margin:0cm;vertical-align:baseline\"><font color=\"#000000\" face=\"Calibri, sans-serif\">tours tradicionales.</font></p><p style=\"margin:0cm;vertical-align:baseline\"><font color=\"#000000\" face=\"Calibri, sans-serif\">Durante la</font><font face=\"Calibri, sans-serif\" color=\"#3984c6\"><b> excursión de 3 días y 2 noches a bordo del Crucero Santa Cruz</b></font><font color=\"#000000\" face=\"Calibri, sans-serif\"> se irá en busca del “Espíritu de los Glaciares” navegando frente a murallas de hielos.</font></p><p style=\"margin:0cm;vertical-align:baseline\"><font face=\"Calibri, sans-serif\" color=\"#3984c6\"><b>Día 1.</b></font><font color=\"#000000\" face=\"Calibri, sans-serif\"> A las 4:00 p.m. serán buscados por su hotel en El Calafate y trasladados al Puerto de Punta Bandera donde embarcarán en el Crucero Santa Cruz.</font></p><p style=\"margin:0cm;vertical-align:baseline\"><font color=\"#000000\" face=\"Calibri, sans-serif\">Ya a bordo con una copa de bienvenida se presentará a la tripulación, quien asigna las cabinas para la travesía. Alrededor de las 6:30 p.m. se zarpa.</font></p><p style=\"margin:0cm;vertical-align:baseline\"><font color=\"#000000\" face=\"Calibri, sans-serif\"><br></font></p><p style=\"margin:0cm;vertical-align:baseline\"><font face=\"Calibri, sans-serif\"><b style=\"\"><font color=\"#3984c6\">Día 2.</font></b><font color=\"#000000\"> Luego de un delicioso desayuno, desembarcarán en Puesto de las Vacas para hacer una interesante caminata. Más tarde, y nuevamente embarcados nos dirigiremos al Glaciar Spegazzini donde se puede disfrutar del almuerzo, para luego navegar hacia el Glaciar Upsala y poder divisar fabulosos témpanos flotando. Durante el día se navegará hacia Bahía Toro, en el Seno Mayo, donde se pernoctará.</font></font></p><p style=\"margin:0cm;vertical-align:baseline\"><font color=\"#000000\" face=\"Calibri, sans-serif\"><br></font></p><p style=\"margin:0cm;vertical-align:baseline\"><font face=\"Calibri, sans-serif\"><b style=\"\"><font color=\"#3984c6\">Día 3. </font></b><font color=\"#000000\">Por la mañana se parte con rumbo sur en el Seno Mayo. Allí tendrá lugar un aventurero desembarque en el bosque andino-patagónico que permite disfrutar paisaje natural del Glaciar Mayo y del Glaciar Negro. Más tarde, el crucero pone proa hacia el Canal de los Témpanos, teniendo como destino el Glaciar Perito Moreno donde terminaremos el recorrido en el Puerto de Punta Bandera. A las 4:00 p.m. se desembarca para ser trasladados hacia El Calafate.</font></font></p><p style=\"margin:0cm;vertical-align:baseline\"><font color=\"#000000\" face=\"Calibri, sans-serif\"><br></font></p><p style=\"margin:0cm;vertical-align:baseline\"><font color=\"#000000\" face=\"Calibri, sans-serif\">El Crucero Santa Cruz es el barco más moderno y grande que actualmente navega las aguas del Lago Argentino. Posee 21 cabinas dobles con baño privado</font></p><p style=\"margin:0cm;vertical-align:baseline\"><font color=\"#000000\" face=\"Calibri, sans-serif\">permitiendo albergar 42 pasajeros cómodamente. El crucero también posee biblioteca, living, bar, restaurante, ambientes climatizados, cocina de alta tecnología.</font></p><div><br></div>', '', '', '', '', '', '', '3 días dos noches', '', '', '', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g312851-d2062897-Reviews-Cruceros_MarPatag-El_Calafate_Province_of_Santa_Cruz_Patagonia.html ', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1NsAB45up59KR88nsJdrEelXY7aH4UBVb&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-19 11:07:39'),
(29, 'Excursion', 'Mayo Spirit Trek', 'vistas/img/excursiones/6000/983.jpg', '<p><font color=\"#000000\">Excursión mixta que comienza en </font><font color=\"#3984c6\"><b>El Calafate y combina navegación y trekking y una visita al Glaciar Perito Moreno</b></font><font color=\"#000000\">. Se visitan los Glaciares del Cerro Mayo Y Cerro Negro, con un trekking en la Bahía Toro a través del bosque mientras se disfruta de maravillosos paisajes hasta llegar al Seno Mayo donde se podrán apreciar los imponentes glaciares.</font></p><p><br></p>', '<p><font color=\"#000000\">Por la mañana los pasaremos a buscar por su hotel y tras 1 hora rodeado de la característica estepa patagónica, su fauna e históricas estancias, llegaremos a Punta Bandera donde embarcaremos el catamarán.</font></p><p><font color=\"#000000\">La guía y la tripulación nos dan la bienvenida y nos explican cómo será nuestro recorrido y las medidas de seguridad en la embarcación.</font></p><p><font color=\"#000000\">La navegación comienza por el </font><font color=\"#3984c6\"><b>Canal de los Témpanos</b></font><font color=\"#000000\"> para luego ingresar en el </font><font color=\"#3984c6\"><b>Seno Mayo del Lago Argentino.</b></font><font color=\"#000000\"> El primer desembarco será en Bahía Toro, allí hacemos un </font><b style=\"\"><font color=\"#3984c6\">trekking corto </font></b><font color=\"#000000\">y sin dificultad en el </font><font color=\"#3984c6\"><b>Bosque Andino Patagónic</b><b style=\"\">o</b></font><font color=\"#000000\">, visitando un ejemplar de guindo centenario y un arroyo alimentado por una cascada de 180 metros de alto y 100 de ancho.</font></p><p><font color=\"#000000\">Nuevamente en la embarcación retomamos la </font><font color=\"#3984c6\"><b>navegación por el Seno Mayo</b></font><font color=\"#000000\">, mientras disfrutamos de los paisajes y la explicación de la guía, quién nos narra las expediciones que el Perito Moreno y su equipo realizaron en ese lugar, haciéndonos transportar a aquellas aventuras.</font></p><p><font color=\"#000000\">En el segundo desembarco caminamos un poco más, aproximadamente 1000 metros pero sin nivel de dificultad. Durante el trekking estaremos dentro de un hermoso bosque con vistas privilegiadas de los glaciares colgantes en el Cerro Mayo y Cerro Negro. Allí tenemos tiempo para disfrutar el maravilloso paisaje combinado con arroyos, glaciares, montañas y bosques.</font></p><p><font color=\"#000000\">Continuamos navegando y nos acercamos al majestuoso </font><font color=\"#3984c6\"><b>Glaciar Perito Moreno. </b></font><font color=\"#000000\">Su imponente pared norte nos deslumbra con su tamaño y belleza. Sacamos fotos y filmamos con suerte de retratar un desprendimiento.</font></p><p><font color=\"#000000\">Luego tenemos tiempo libre para disfrutar de las pasarelas frente al Glaciar y visitar las confiterías.</font></p><p><font color=\"#000000\">Una vez reunidos en el puerto, el transfer nos lleva de regreso a nuestro hotel.</font></p><div><br></div>', '', '', '22', '', '<p>$1800 ARS traslado desde tu hotel al puerto.\r\n</p><p>$990 ARS vianda.</p>', '8:00 am.  a  6:00 pm. ', '10 horas', 'No poseer discapacidad motriz.\r\nLlevar: lentes para sol, protector solar, abrigo, guantes, calzado apropiado.  \r\n\r\n', 'Colación y guia.', 'Entrada al Parque.', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g312851-d11958510-Reviews-Southern_Spirit-El_Calafate_Province_of_Santa_Cruz_Patagonia.html ', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1H8p9k--SKz0M-N2Z6HA6YQGNs1jyo-2J&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-19 19:42:28'),
(30, 'Excursion', 'Glaciar Sur Aventura', 'vistas/img/excursiones/5000/835.jpg', '<p><font color=\"#3984c6\"><span style=\"caret-color: rgb(57, 132, 198);\"><b>Excursión que</b></span></font><font color=\"#000000\"><span style=\"caret-color: rgb(0, 0, 0);\"> </span></font><font color=\"#3984c6\"><b>combina trekking y navegación</b></font><font color=\"#000000\"> se visita el extremo sur del Parque Nacional los Glaciares, desde el punto de embarque los Pioneros comienza esta travesía.</font><br></p>', '<p><font color=\"#000000\">Te pasamos a buscar a partir de las 8 hs por tu hotel y luego de conducir 60 kms llegamos al embarque de Los Pioneros, en la zona sur del </font><font color=\"#3984c6\"><b>Parque Nacional Los Glaciares</b></font><font color=\"#000000\">. Navegamos durante una hora y desembarcamos en el fin del Brazo Sur donde comienza nuestro primer trekking de 2 kms hasta el Lago Frías, el cual navegamos en embarcaciones tipo Zodiac. Al desembarcar en la margen opuesta comienza el segundo trekking de 4,5 kms, transitando un bosque con lengas centenarias, y luego por un antiguo valle glaciaria. Caminamos hasta llegar al Lago Frías Superior, que se encuentra cubierto de témpanos ¡Desde aquí, divisaremos los glaciares Dickson, Cubo y Grande! Almorzamos con una vista asombrosa para después emprender el regreso a la ciudad de El Calafate.</font><br></p>', '', '', '15', '', '$ 2.450 ARS , traslado desde tu hotel hasta la estancia.', '8:00 am.  a   7:00 pm.', '11 horas aproximadas', 'Edad 12 a 65 años. No tener problemas cardiacos y de articulaciones.\r\nLlevar: lentes para sol, protector solar, abrigo, guantes, calzado apropiado.  \r\n\r\n', 'Vianda, entrada al parque y servicio de guía.', 'El traslado desde el hotel a la estancia.', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g312851-d7592289-Reviews-Glaciar_Sur-El_Calafate_Province_of_Santa_Cruz_Patagonia.html', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1-_qNASwbdGcek65HRXVY-wWB5qLiSlwP&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-19 20:38:26'),
(31, 'Excursion', 'Glaciar Sur Pioneros', 'vistas/img/excursiones/5000/753.jpg', '<p><font color=\"#000000\">Es una excursión que combina </font><font color=\"#3984c6\"><b>navegación trekking y visita al Glaciar Perito Moreno</b></font><font color=\"#000000\"> comienza en la estancia Nibepo Aike en el Lago Roca donde podemos realizar un trekking por la Estancia disfrutando de un almuerzo, para luego dirigirnos al Glaciar Perito Moreno.</font><br></p>', '<p><font color=\"#000000\">La Patagonia tiene secretos que contar a través de sus primeros pobladores. En un tour accesible para todos, te invitamos a conocer la cultura argentina de campo rodeado de paisajes alucinantes. Te pasamos a buscar por el hotel por la mañana y emprendemos el viaje a la </font><font color=\"#3984c6\"><b>Estancia Nibepo Aike,</b></font><font color=\"#000000\"> pionera en El Calafate.</font></p><p><font color=\"#000000\">Allí, disfrutamos de una demostración de esquila y tareas gauchescas. Luego, degustamos un delicioso almuerzo tradicional con ensaladas, cordero patagónico, excelentes vinos y crêpe de dulce de leche.</font></p><p><font color=\"#000000\">¡Al finalizar navegamos hacia el Brazo Rico para desembarcar en </font><font color=\"#3984c6\"><b>Playa de las Monedas</b></font><font color=\"#000000\">, donde realizamos una </font><font color=\"#3984c6\"><b>caminata suave dentro de un bosque de lengas</b></font><font color=\"#000000\">, hasta arribar a un mirador del Glaciar al que sólo llegan los pasajeros de esta excursión! Volvemos a embarcar para navegar frente a la cara sur del Glaciar Perito Moreno mientras disfrutamos de un whisky con hielo del glaciar y chocolates.</font></p><p><font color=\"#000000\">Desembarcamos y nos dirigimos a las pasarelas del glaciar para disfrutar de todos sus frentes y desprendimientos de hielo, fuera del horario masivo. Al finalizar, regresamos juntos a la ciudad de El Calafate.</font></p><div><br></div>', '', '', '12', '', '', '9:00 am.  a  6:30 pm.', '9.30 horas', 'Llevar: lentes para sol, protector solar, abrigo, guantes, calzado apropiado.  \r\n\r\n', 'Traslado desde su hotel, almuerzo y servicio de guía.', '', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g312851-d7592289-Reviews-Glaciar_Sur-El_Calafate_Province_of_Santa_Cruz_Patagonia.html ', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1aCW8TDlhifXyWEZP9PBWSEGS9fW6BjjU&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-20 00:42:27'),
(32, 'Excursion', 'Perito Moreno Kayak', 'vistas/img/excursiones/32/592.jpg', '<p><font color=\"#000000\">Esta excursión comienza en El </font><b style=\"\"><font color=\"#3984c6\">glaciar Perito Moreno </font></b><font color=\"#000000\">pudiendo adicionar el traslado al mismo aquellas personas que no cuenten con el medio de movilidad. </font><span style=\"color: rgb(0, 0, 0); font-size: 1rem;\">Una experiencia inolvidable entre témpanos frente al Glaciar Moreno quepodrás apreciar en su inmensidad.</span></p>', '<p><font color=\"#000000\">La excursión incluye travesía en kayaks dobles por el Canal de los Témpanos y visita a las</font><font color=\"#3984c6\"><b> pasarelas del Perito Moreno</b></font><font color=\"#000000\">,  los grupos son reducidos con un límite de hasta 20 pasajeros por día.</font></p><p><font color=\"#000000\">Si se contrata la excursión con traslado desde su hotel en El Calafate, los pasaremos a buscar a partir de las 7:00 AM y los llevaremos a las pasarelas del Perito Moreno desde donde podrán contemplar el glaciar durante 2 horas. Luego, se dirigirán al punto de encuentro y los guías los llevarán al domo ubicado frente a la playa en donde se les proveerá todo el equipamiento. se explicará las técnicas de remado y seguridad. </font></p><p><font color=\"#000000\">Comenzará  la </font><font color=\"#3984c6\"><b>travesía en kayak</b></font><font color=\"#000000\"> pudiendo observar témpanos majestuosos.</font></p><p><font color=\"#000000\">Luego de 90 minutos de remada, se regresa al domo para tomar un snack, y allí le indicaremos cómo disponer de las fotos del día que están incluidas. </font></p><p><font color=\"#000000\">Para finalizar, se regresa a la ciudad de El Calafate a las 18:15 después de haber vivido una experiencia única en su tipo frente a este famoso glaciar.</font></p><p><br></p>', '13.200', '13.300', '11', '13.300', '<p>$2800 , traslado desde el hotel y visitas a pasarelas.\r\n</p><p>$ 990 ARS viandas.</p>', '7:00 am.  a   6:15 pm.', '11 horas aproximadas', 'Edad minima de 14 años.\r\nLlevar: abrigo, pantalon impermeable, botas de trekking, anteojos de sol y protector solar.\r\n\r\n', 'Equipo refrigerio de bebidas calientes y fotografías.', 'Entrada al Parque Nacional', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g312851-d2177331-Reviews-MilOutdoor-El_Calafate_Province_of_Santa_Cruz_Patagonia.html', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1OMYHbeYTYGWGCZRKRaFljmrmS0zTFzMd&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-20 01:12:02'),
(33, 'Excursion', 'Calafate Kayak', 'vistas/img/excursiones/33/162.jpg', '<p><b style=\"\"><font color=\"#3984c6\">Calafate Kayak </font></b><font color=\"#000000\">es una excursión de mediodía, se lleva a cabo en el Lago Argentino </font><font color=\"#3984c6\"><b>frente al Calafate en la Bahía Redonda</b></font><font color=\"#000000\">, es una aventura a pocos metros de la ciudad de El Calafate. Acompañado siempre de Guías especializados en Kayak dobles. Impresionantes vistas de los cerros que rodean la ciudad.</font><br></p>', '<p><font color=\"#000000\">La excursión consta de una navegación costera en </font><font color=\"#3984c6\"><b>kayak por el LAGO ARGENTINO</b></font><font color=\"#000000\"> (frente a EL CALAFATE) o en la </font><font color=\"#3984c6\"><b>BAHIA REDONDA acompañados de guías de kayak</b></font><font color=\"#000000\">, comenzando y terminando en el mismo punto. Por factores climáticos, siempre se evaluará si las condiciones permiten realizar la actividad, de lo contrario se cancela la salida.</font></p><p><font color=\"#000000\">La Actividad cuenta con diferentes circuitos, los cuales se realizarán de acuerdo a la conveniencia climática, cota e agua, avistaje de aves o requerimiento del grupo en particular.</font></p><p><font color=\"#3984c6\"><b>Desarrollo de la excursión:</b></font></p><p><font color=\"#000000\">Se recibirá a los pasajeros. se les dará una charla instructiva y se les harpa entrega de los equipos y la ropa técnica.</font><br></p><ul><li><font color=\"#000000\">Continuaremos con la regulación de los asientos y apoya pies en cada kayak para cada pasajero, explicándoles la forma correcta de ingreso y egreso del mismo.</font><br></li><li><font color=\"#000000\">Antes de subir a los kayaks, se les enseñará las distintas técnicas de remada, como doblar, estabilidad y mantenimiento del rumbo y normas de evacuación y seguridad.</font></li><li><font color=\"#000000\">Una vez que estamos con los kayaks en el agua, la navegación se desarrollará con asistencia permanente de los guías. Esta navegación permite observar bahías atractivas y reparadas. También se les va ir contando sobre la geografía de la zona, características del paisaje, flora y fauna, pobladores, historia breve del kayak.</font></li><li><font color=\"#000000\">Al finalizar de le dará una bebida caliente.</font></li></ul><p></p><p><font color=\"#000000\" style=\"\">Tiempo total 2 1/2 a 3 hs aproximadamente.</font></p><p><b style=\"\"><font color=\"#3984c6\">¿QUÉ INCLUYE LA EXCURSIÓN?</font></b></p><ul><li><font color=\"#000000\">Equipo técnico: neoprene, chaqueta seca, chaqueta salvavidas, cubre cokpit, manoplas y botas de neoprene, bolso estanco. kayays y remos.</font></li><li><font color=\"#000000\">Traslado: Desde sus hoteles hasta el punto de salida.</font></li></ul><p><b style=\"\"><font color=\"#3984c6\">¿QUÉ DEBO LLEVAR YO?</font></b></p><ul><li><font color=\"#000000\">Lentes de sol</font></li><li><font color=\"#000000\">Crema para el sol</font></li><li><font color=\"#000000\">Agua</font></li><li><font color=\"#000000\">Par de medias extra</font></li><li><font color=\"#000000\">Remera técnica ( si posee)</font></li><li><font color=\"#000000\">Remera extra</font></li><li><font color=\"#000000\">Gorra</font></li></ul><p><br></p>', '', '', '9', '', '', '<p>8:00 am.  a  11:30 pm.</p><p>5:.00 am.  a   8:00 pm.</p>', '3 horas', 'Ser mayor de 14 años, llevar lentes, protector solar, agua, medias y remeras extras.', 'Traslado desde su hotel y equipo.', '', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g312851-d20256748-Reviews-Calafate_Kayaks-El_Calafate_Province_of_Santa_Cruz_Patagonia.html', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1GbrJYqk6YHYna_m-QoAK9NLmEGbDrDqG&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-20 01:55:15'),
(34, 'Excursion', 'Darwin Experience', 'vistas/img/excursiones/8000/504.jpg', '<p><font color=\"#000000\">Esta excursión en Kayak en la zona de El Calafate se lleva a cabo por el </font><font color=\"#3984c6\"><b>Río Santa Cruz </b></font><font color=\"#000000\">desde Charles Furh hasta la Estancia El Rincón,</font><b style=\"\"><font color=\"#3984c6\"> incluye almuerzo </font></b><font color=\"#000000\">en la Estancia y los traslados.</font></p><p><font color=\"#000000\">Todo el equipamiento está incluido, la</font><font color=\"#3984c6\"><b> travesía en Kayak</b></font><font color=\"#000000\"> dobles, tiene una duración de 80 minutos y una distancia de 15 KM.</font></p><div><br></div>', '<p><font color=\"#000000\">En este tour se recorre la estepa patagónica, aproximadamente a 50 km de Calafate se llega al valle del Rio Santa Cruz donde nos dispondremos a navegar en</font><b style=\"\"><font color=\"#3984c6\"> kayaks dobles por este Río tan emblemático de nuestra Patagonia  </font></b></p><p><font color=\"#000000\">Desde el famoso </font><font color=\"#3984c6\"><b>paraje Charles Furh,</b></font><font color=\"#000000\"> ubicado en la desembocadura del Lago Argentino, navegaremos durante 15 km hasta la Estancia El Rincón. </font><font color=\"#3984c6\"><b>En esta navegación conocerán parte del recorrido que Charles Darwin realizó en el año 1877 cuando llego al Lago que luego bautizo con el nombre de Lago Argentino.</b></font><font color=\"#000000\"> Una vez llegados a la estancia tomaremos un </font><font color=\"#3984c6\"><b>almuerzo en el casco de la estancia.</b></font></p><p><font color=\"#000000\">El río Santa Cruz es uno de los cursos hídricos más importantes de Argentina. Está ubica en la provincia de Santa Cruz. Tiene una longitud de 385 km, aunque con sus fuentes —el Rio la Leona y el lago Viedma— alcanza los 543 km. Algunos exploradores y estudiosos lo navegaron desde su desembocadura hasta el Lago Argentino.</font></p><p><font color=\"#000000\">Traslado desde y hasta su hotel</font></p><p><font color=\"#000000\">Almuerzo en estancia patagónica.</font></p><p><font color=\"#000000\">Kayaks dobles, remos, traje seco estanco Gore-Tex, botas, guantes y chaleco salvavidas.</font></p><p><font color=\"#000000\">aplicable a partir de 16 años.</font></p><p><font color=\"#000000\">Hasta los 18 años debe ir acompañado de un adulto</font></p><p><font color=\"#000000\">Salida 09.00 hs / Regreso 14.30 hs</font></p><div><br></div>', '8.300', '8.400', '12', '8.400', '$ 4200 ARS el acompañante que no navega. ', '9:00 am.  a   2:30 pm.', '5 horas y media', 'Edad minima 16 años', 'Traslado desde el hotel, almuerzo , equipo.', '', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g312851-d2352525-Reviews-Patagonia_Profunda-El_Calafate_Province_of_Santa_Cruz_Patagonia.html ', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1Pl2wBCC1pMHZ5MwPuNE8yCMXa6nT8YEp&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-22 22:20:01');
INSERT INTO `excursiones` (`id`, `category`, `titulo`, `banner`, `intro`, `descripcion`, `precio_bajo`, `precio_alto`, `reservada`, `precio_ninos`, `opcional`, `turnos`, `duracion`, `requisitos`, `incluye`, `no_incluye`, `rango_adultos`, `rango_ninos`, `trip_link`, `trip_detalle`, `recomendado`, `recorrido`, `fecha`) VALUES
(35, 'Excursion', 'Full Day Chaltén Lago del Desierto', 'vistas/img/excursiones/8000/571.jpg', '<p><font color=\"#3984c6\"><b>La excursión Full Day El Chalten Lago del Desierto </b></font><font color=\"#000000\">es sin duda una de las excursiones que no te debes perder es la visita de El Monte Fitz-Roy, es especial </font><font color=\"#3984c6\"><b>para los amantes de la naturaleza</b></font><font color=\"#000000\">, incluye una </font><font color=\"#3984c6\"><b>navegación por El Lago del Desierto y una caminata de una hora en el bosque</b></font><font color=\"#000000\"> camino al Glaciar Vespignani, en el transcurso de esta veremos hermosos paisajes.</font></p><p><br></p>', '<p><font color=\"#3984c6\"><b>Excursión de día completo</b></font><font color=\"#000000\"> se parte muy temprano desde El Calafate </font><span style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-family: \"Source Sans Pro\", -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\"; font-size: 16px; font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration: none; display: inline !important; float: none;\"> con algunas paradas en puntos panorámicos en la ruta, llegando a la</span> ciu<font color=\"#000000\">dad de El Chaltén y el Cañadón del Río Las Vueltas donde podremos tener vistas del Monte Fitz Roy y Cerro Torre, se navega por el Lago del Desierto y se realiza un trekking de 1 hora en el bosque hacia el Glaciar Vespignani.</font></p><p><font color=\"#000000\">Al llegar al  Chaltén, se cambia de vehículo, 37 km nos separan Lago Desierto. En el camino se harán paradas en puntos panorámicos que permiten disfrutar de vistas de los cerros Fitz Roy y Torre. El guía los esperará en Chaltén mientras visitan el Lago del Desierto y sus alrededores.</font></p><p><font color=\"#000000\">Al llegar al Lago del Desierto, se embarcarán para navegar durante 1 hora en este hermoso lago transparente rodeado de montañas y glaciares. Al llegar a la mitad del lago, desembarcarán para realizar el trekking de montaña que es autoguiado. Visitarán la reserva natural durante 2 horas y podrán elegir uno de los tres senderos con diferentes niveles de dificultad hacia el Glaciar Vespignani para hacer trekking. Después de una caminata de 1 hora  podrán comer y refugiarse en el domo ubicado en el bosque junto al lago.</font></p><p><font color=\"#000000\">Alrededor de las 3:00 p.m. comienza el regreso a El Chaltén, donde serán recibidos nuevamente por el guía, para luego dirigirse hacia El Calafate, a donde arribarán a las 8:00 p.m.</font></p><div><br></div>', '11.200', '11.500', '', '11.200', 'Vianda ', '6:50 am.  8:00 pm.', '12 horas ', 'Llevar: lentes para sol, protector solar, abrigo, guantes, calzado apropiado. Tener buena condición física., par de medias extras,  campera y mochila pequeña.\r\n\r\n', 'Traslado desde su hotel , guía en el recorrido, navegación Lago del Desierto y trekking por el bosque.', '', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g312850-d2534729-Reviews-Lago_del_Desierto-Province_of_Santa_Cruz_Patagonia.html', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1MrlxGIX5oAiaY6X1f8Ft3GhhLOTECl8G&hl=es\" width=\"100%\" height=\"450\"style=\"border:0;\"alowfullscreen=\"\"loading=\"lazy\"></iframe>', '2021-03-22 22:45:38'),
(36, 'Excursion', 'Estancia Cristina Upsala Discovery', 'vistas/img/excursiones/200/341.jpg', '<p><b style=\"\"><font color=\"#3984c6\">Estancia Cristina Discovery</font></b><font color=\"#000000\"> es una excursión que combina una</font><b style=\"\"><font color=\"#3984c6\"> navegación, la visita de la Estancia, una 4x4 el Glaciar Upsala y el museo.</font></b><font color=\"#000000\"> Excursión de todo el día donde podrás observar paisajes impresionantes. </font><br></p>', '<p><font color=\"#000000\">Al salir del puerto de Punta Bandera a las 9:00 se comienza a navegar por el brazo norte del lago argentino para llegar al límite permitido de navegación en el canal Upsala, y así tener una vista panorámica del frente del Glaciar homónimo.</font></p><p><font color=\"#000000\">Luego de desembarcar en Estancia Cristina, se le asignará a cada grupo un vehículo 4×4 con un guía-chofer especializado. Se comenzará a ascender por el cordón Feruglio, los 9,5 km que nos conducirán hasta donde dejaremos el vehículo. Una vez ahí, se dará comienzo a una caminata de unos veinte minutos sobre terreno de erosión glaciaria, para llegar al Mirador del Glaciar Upsala, donde tendremos un tiempo de permanencia para poder contemplar la vista del Lago Guillermo y del imponente frente Oriental del Glaciar Upsala y el Campo de Hielo Continental Patagónico Sur.</font></p><p><font color=\"#000000\">Retomamos la caminata para regresar en los vehículos 4×4 al casco de la estancia donde tendrán tiempo para almorzar (1hora aproximadamente).</font></p><p><font color=\"#000000\">Continuando con el recorrido de la estancia se visitará el Museo Costumbrista, antiguo galpón de esquila, donde se los introducirá a la historia de la familia Masters, pionera del lugar, su paso y vivencia por esa zona. También se realizará una caminata guiada hasta el Río Caterina, la noria, la Capilla y así recorrer el casco de la estancia.</font></p><p><font color=\"#000000\">Al salir del puerto de Punta Bandera a las 9:00 se comienza a navegar por el brazo norte del lago argentino para llegar al límite permitido de navegación en el canal Upsala, y así tener una vista panorámica del frente del Glaciar homónimo.</font></p><p><font color=\"#000000\">Luego de desembarcar en Estancia Cristina, se le asignará a cada grupo un vehículo 4×4 con un guía-chofer especializado. Se comenzará a ascender por el cordón Feruglio, los 9,5 km que nos conducirán hasta donde dejaremos el vehículo. Una vez ahí, se dará comienzo a una caminata de unos veinte minutos sobre terreno de erosión glaciaria, para llegar al Mirador del Glaciar Upsala, donde tendremos un tiempo de permanencia para poder contemplar la vista del Lago Guillermo y del imponente frente Oriental del Glaciar Upsala y el Campo de Hielo Continental Patagónico Sur.</font></p><p><font color=\"#000000\">Retomamos la caminata para regresar en los vehículos 4×4 al casco de la estancia donde tendrán tiempo para almorzar (1hora aproximadamente).</font></p><p><font color=\"#000000\">Continuando con el recorrido de la estancia se visitará el Museo Costumbrista, antiguo galpón de esquila, donde se los introducirá a la historia de la familia Masters, pionera del lugar, su paso y vivencia por esa zona. También se realizará una caminata guiada hasta el Río Caterina, la noria, la Capilla y así recorrer el casco de la estancia.</font></p><p><font color=\"#000000\">La navegación comienza en puerto Punta Bandera, localizado a 47kms de la ciudad de Calafate. La Estancia ofrece la posibilidad de contratar nuestro servicio de traslado que sale desde la ciudad de Calafate, pasando por los Hoteles, a partir de las 7:30am. También podrán llegar a Puerto directamente con sus propios vehículos o traslados (hora límite de presentación 8:45am.) </font></p><div><br></div>', '', '', '', '', '<p>Traslado desde su hotel.</p><p>Almuerzo en restaurant. </p><p>Vianda.</p>', '7:15 am.  a  8:00 pm.', '13 horas.', 'Llevar: lentes para sol, protector solar, abrigo, guantes, calzado apropiado.  \r\n\r\n', 'Servicio de guía durante todo el recorrido.', 'Entrada al Parque Nacional', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g312851-d313745-Reviews-Estancia_Cristina-El_Calafate_Province_of_Santa_Cruz_Patagonia.html ', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1rNEjzWs0NypDmyZhEsChblvEu8Lp1yw5&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-24 01:20:22'),
(37, 'Excursion', 'Estancia Cristina Upsala Trekking', 'vistas/img/excursiones/500/479.jpg', '<p><b style=\"\"><font color=\"#3984c6\">Estancia Cristina Trekking</font></b><font color=\"#000000\"> es una excursión que combina una n</font><font color=\"#3984c6\"><b>avegación, la visita de la Estancia, una 4x4, el Glaciar Upsala y un trekking por el Cañadón de los Fósiles</b></font><font color=\"#000000\">. Excursión de todo el día donde podrás observar paisajes impresionantes. </font><br></p>', '<p><font color=\"#000000\">Al salir del puerto Punta Bandera a las 9:00 se comienza a navegar por el Brazo Norte del Lago Argentino para llegar al límite permitido de navegación en el Canal Upsala, y así tener una vista panorámica del frente del Glaciar homónimo.</font></p><p><font color=\"#000000\">Luego de desembarcar en Estancia Cristina, se asignará al reducido número que realizará el trekking, un vehículo 4x4 con un guía especializado. Se comenzará a ascender por el cordón Refugio, los 9,5 km. Que nos conducirán hasta donde se dejara el vehículo, para que una vez ahí, dar comienzo una caminata para llegar al mirador del Glaciar Upsala con vistas del Lago Guillermo el imponente frente oriental del Glaciar Upsala el campo de Hielo continental Patagónico sur. Desde aquí comenzara el trekking de 14 kms para introducirse en el cañadón de los fósiles, zona donde se observa una gran concentración de fósiles de características únicas, vestigio de la última ingresion marina y que han quedado al descubierto por la acción glaciaria. El trekking es en constante descenso, durante este trayecto se hará una pausa para tomar la vianda opcional y se continuará caminando hasta llegar al valle de la estancia, posteriormente dirigirse a la playa de embarque.</font></p><p><font color=\"#000000\">La navegación comienza en puerto Punta Bandera, localizado a 47 kms de la ciudad de Calafate. La Estancia ofrece la posibilidad de contratar nuestro servicio de traslado que sale desde los Hoteles de Calafate a partir de las 7:00 am. o bien podrán llegar a Puerto directamente con sus propios vehículos o traslados (hora límite de presentación 8:45am.)</font></p><div><br></div>', '', '', '', '', '<p>Traslado desde el hotel al puerto. </p><p>$ 990 ARS <span style=\"font-size: 1rem;\">Vianda.</span></p>', '7:15 am.  a  8:00 pm.', '13 horas.', 'Ser mayor de 12 años.\r\nLlevar: lentes para sol, protector solar, abrigo, guantes, calzado apropiado.  \r\n', 'Servicio de guía.', 'Entrada al Parque Nacional  ni lunch box.', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g312851-d313745-Reviews-Estancia_Cristina-El_Calafate_Province_of_Santa_Cruz_Patagonia.html ', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1rNEjzWs0NypDmyZhEsChblvEu8Lp1yw5&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-24 01:43:58'),
(38, 'Excursion', 'Estancia Cristina Upsala Classic', 'vistas/img/excursiones/200/458.jpg', '<p><font color=\"#3984c6\"><b style=\"\">Estancia Cristina Classic</b> </font><font color=\"#000000\">es una excursión que combina una</font><font color=\"#3984c6\"><b> navegación, la visita de la Estancia con un trekking hasta el Rio Catrerina, navegación en la zona el Glaciar Upsala.</b></font><font color=\"#000000\"> Excursión de todo el día donde podrás observar paisajes impresionantes. Junto a la visita del Glaciar Moreno puede considerarse que te llevas las más impresionantes vistas de la zona.</font><br></p>', '<p><font color=\"#000000\">Al salir del puerto Punta Bandera a las 9:00 se comienza a navegar por el Brazo Norte del Lago Argentino para llegar al límite permitido de navegación en el Canal Upsala, y así tener una vista panorámica del frente del Glaciar homónimo.</font></p><p><font color=\"#000000\">Luego de desembarcar en Estancia Cristina, se asignará un guía para realizar una caminata de dificultad media por el valle de la estancia. Caminaremos por una zona de ecotono, zona semiárida cubierta por arbustos y gramíneas, para luego ascender de a poco al primer mirador, en el cual se apreciará el valle desde Lago Argentino hasta el Lago Pearson.</font></p><p><font color=\"#000000\">Continuaremos la caminata en constante ascenso rodeado de bosques de ñires hasta llegar a la cascada del río de los perros. Continuando con la visita de la estancia se visitará el Museo Costumbrista, antiguo galpón de esquila, donde se los introducirá a la historia de la familia Masters, pionera del lugar, su paso y vivencia por esa zona. También se realizará una caminata guiada hasta el Río Caterina, la noria, la Capilla y así recorrer el casco de la estancia.</font></p><p><font color=\"#000000\">El almuerzo ofrecido por Estancia Cristina es optativo y podrá contratarse preferentemente al momento de realizar la reserva. En caso que usted lleve su propio almuerzo, la estancia ofrece servicio de cafetería.</font></p><p><font color=\"#000000\">La navegación comienza en puerto Punta Bandera, localizado a 47kms de la ciudad de Calafate. La Estancia ofrece la posibilidad de contratar nuestro servicio de traslado que sale desde los Hoteles de Calafate a partir de las 7:00 am. o bien podrán llegar a Puerto directamente con sus propios vehículos o traslados (hora límite de presentación 8:45am.)</font></p><p><br></p>', '', '', '', '', '<p>Traslado de su hotel al puerto.\r\n</p><p>Almuerzo en restaurant.\r\n</p><p>$990 Viandas.</p>', '7.15 am.  a   8:00 pm.', '13 horas.', 'Llevar: lentes para sol, protector solar, abrigo, guantes, calzado apropiado.  \r\n', 'Servicio de guia durante el recorrido.', 'Entrada al Parque Nacional.', '', '', ' https://www.tripadvisor.com.ar/Attraction_Review-g312851-d313745-Reviews-Estancia_Cristina-El_Calafate_Province_of_Santa_Cruz_Patagonia.html', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1Scj58rHKhI8nlw26HPQPV7aJ9YJ3n370&hl=es\" width=\"100%\" height=\"480\"></iframe>  \r\n', '2021-03-24 02:01:37'),
(39, 'Excursion', 'Cabalgata con Rafting La Leona', 'vistas/img/excursiones/200/666.jpg', '<p><font color=\"#000000\">Excursión e que</font><font color=\"#3984c6\"><b> combina una cabalgata frente al lago Viedma, </b></font><font color=\"#000000\">un</font><font color=\"#3984c6\"><b> almuerzo en la Estancia la Estela y un rafting por el Río la Leona,</b></font><font color=\"#000000\"> Desde la estancia se puede visualizar el monte Fitz Roy Cerro Torre el Lago Viedma y la Cordillera de los Andes.</font><br></p>', '<p><font color=\"#000000\">En esta excursión se combina en un mismo día una cabalgata frente al Lago Viedma con almuerzo en la Estancia La Estela y rafting por el Río La Leona, mientras se maravilla con paisajes espectaculares. </font></p><p><font color=\"#000000\"><br></font></p><p><font color=\"#000000\">Se comienza con la recorrida por los hoteles en El Calafate y emprendemos el recorrido hacia la famosa Ruta 40 en dirección norte. A medio camino haremos una parada en el mirador del Lago Argentino donde se ofrecerá una charla sobre geología y glaciología para luego continuar el recorrido hasta llegar al mítico Parador La Leona. Allí se hará una breve visita al museo de este típico lugar de la Ruta 40 para luego llegar a nuestro destino: Estancia La Estela. </font></p><p><font color=\"#000000\"><br></font></p><p><font color=\"#000000\">Una vez arribados en esta estancia que, al estar ubicada de manera privilegiada frente al Lago Viedma, permite maravillarse con imponentes vistas del Cerro Fitz Roy, Cerro Torre, Glaciar Viedma y Cordillera de los Andes. Se realizará una caminata por el casco de la estancia preparándonos para una de las actividades principales de la excursión: la cabalgata. A media mañana se inicia la cabalgata de 1 hora y 30 minutos de duración total en donde se visitará el Refugio Yatén, ubicado en la punta del Lago Viedma y naciente del Río La Leona. Durante el recorrido se podrán apreciar el Monte Fitz Roy y el Cerro Torre como una postal patagónica. Además, se brindará una breve reseña de flora y fauna autóctona. </font></p><p><font color=\"#000000\"><br></font></p><p><font color=\"#000000\">De regreso en el casco de la Estancia La Estela, se servirá el almuerzo que incluye entrada (empanada de carne), plato principal (bife encebollado al disco con salsa a la mostaza, servido con papas y calabazas rústicas) y postre (Tarta tibia de manzana con crema, salsa de chocolate y frutos rojos). También se ofrece una opción vegetariana o apta para celíacos con pedido anticipado. Bebidas incluidas. </font></p><p><font color=\"#000000\"><br></font></p><p><font color=\"#000000\">Finalizado el almuerzo, y luego de una charla de seguridad en la marina de la estancia, inicia el rafting categoría I de 1 hora por el Río La Leona, realizando una breve parada intermedia en la primera Escuela Rural de la zona, la cual funcionó hasta la década del ’70 y que aún conserva parte de su infraestructura. El recorrido continúa en el kayak hasta finalmente desembarcar en el Parador La Leona. </font></p><p><font color=\"#000000\"><br></font></p><p><font color=\"#000000\">Para terminar el día, se brinda en el Parador La Leona con la bebida preferida de los gauchos: la caña, siempre acompañando por tortas fritas. Se regresa a El Calafate a las 16:00.</font></p><div><br></div>', '', '', '', '', 'Traslado desde su hotel a la estancia.', '8:00 am.  a  4:00 pm.', '8 horas aproximadas', 'Llevar: lentes para sol, protector solar, abrigo, guantes, calzado apropiado.  \r\n', 'Almuerzo en la estancia, cabalgata de 1 hora y media, y rafting de 1  hora.', '', '', '', 'https://www.tripadvisor.com.ar/Hotel_Review-g312851-d1999381-Reviews-Estancia_La_Estela-El_Calafate_Province_of_Santa_Cruz_Patagonia.html ', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1RWyV62IsZAk2xEX0rV9DPCf8p46WmOpG&hl=es\" width=\"100%\" height=\"480\"></iframe>\r\n', '2021-03-24 02:23:02'),
(40, 'Excursion', 'Full Day Chaltén Rafting', 'vistas/img/excursiones/40/195.jpg', '<p><b style=\"\"><font color=\"#3984c6\">Excursión para visitar la ciudad de El Chalten</font></b><font color=\"#000000\">, contempla un</font><font color=\"#3984c6\"><b> rafting de dos horas en el Río</b></font><font color=\"#000000\"> las vueltas atravesando divertidos rápidos teniendo como </font><font color=\"#3984c6\"><b>principal vista el Cerro Fitz Roy</b></font><font color=\"#000000\"> es una invitación a la aventura.</font><font color=\"#3984c6\"><b> Incluye un snack y el equipo necesario.</b></font><br></p>', '<p><font color=\"#000000\">Chaltén full day Rafting es una excursión en un entorno único de la Patagónico teniendo al Cerro Fitz Roy como atractivo principal.  </font></p><p><font color=\"#000000\"><br></font><span style=\"color: rgb(0, 0, 0); font-size: 1rem;\">En el caso de reservar la excursión con traslado desde El Calafate, los pasarán a buscar por su hotel a partir de las 7:00 a.m.</span><span style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-family: \" source=\"\" sans=\"\" pro\",=\"\" -apple-system,=\"\" blinkmacsystemfont,=\"\" \"segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" ui=\"\" symbol\";=\"\" font-size:=\"\" 16px;=\"\" font-style:=\"\" normal;=\"\" font-variant-caps:=\"\" font-weight:=\"\" letter-spacing:=\"\" orphans:=\"\" auto;=\"\" text-align:=\"\" left;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-size-adjust:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration:=\"\" display:=\"\" inline=\"\" !important;=\"\" float:=\"\" none;\"=\"\"><span class=\"Apple-converted-space\"> </span></span><font color=\"#000000\"><span style=\"caret-color: rgb(0, 0, 0);\">después de</span><span style=\"font-size: 1rem;\"> 220 K</span>m. se llegara<span style=\"font-size: 1rem;\"> a El Chaltén. Si reservan la excursión sin transfer desde El Calafate, deberán presentarse en la base de operaciones en el centro de Chaltén a las 10:00 a.m., se les proveerá el equipo de rafting y se trasladarán junto a los guías hasta la zona de entrada al río, donde se brindará una charla sobre técnica y seguridad. Después de ver movimientos de seguridad, se embarcarán para comenzar con el rafting.</span></font></p><p><font color=\"#000000\">La primera etapa de la actividad  de 4 km de aguas tranquilas. Es una zona ideal para practicar las técnicas de redadas de la segunda etapa </font><span style=\"color: rgb(0, 0, 0); font-size: 1rem;\">sobre la zona del cañadón, una sucesión de rápidos nos maravillaran, para continuar en una tercera etapa en aguas tranquilas.</span></p><p><font color=\"#000000\">Al terminar se ofrecerá un snack de cortesía. </font></p><p><font color=\"#000000\">La excursión con transfer  arribará al Calafate  a las 8:30 p.m. </font></p><p><font color=\"#000000\"><br></font></p><p><br></p>', '', '', '', '', '<p>Traslado desde su hotel a El Chalten.\r\n</p><p>$990 ARS Viandas.</p>', '7:00 am  a   8:00 pm.', '12horas', 'Edad minima 12 años hasta los 18 años acompañados por un mayor que ejerza la patria potestad.', 'Equipo de rafting.', '', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g316035-d9553118-Reviews-Rafting_El_Chalten-El_Chalten_Province_of_Santa_Cruz_Patagonia.html ', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1KxGAGYYNlxqN30E5Dsxpvq3RZHyCKY3M&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-24 02:40:58'),
(41, 'Excursion', 'Nativo Experience Lagos y Cavernas', 'vistas/img/excursiones/41/413.jpg', '<p><b style=\"\"><font color=\"#3984c6\">Nativos Experience</font></b><font color=\"#000000\"> </font><font color=\"#000000\">excursión en 4x4, se podrá </font><b style=\"\"><font color=\"#3984c6\">almorzar o cenar dentro de una cueva en un ambiente natural,</font></b><font color=\"#000000\"> una excursión recomendada para aquellos que tienen libre medio día en la ciudad.</font><br></p>', '<p><font color=\"#000000\">Actividad de mediodía en vehículos 4x4 por la costa del Lago Argentino dentro de la Reserva Natural Estancia 25 de Mayo.</font></p><p><font color=\"#000000\">Excursión enfoca en la historia de los primeros contactos de exploradores con los Tehuelches, la primera parada es en la Reserva Natural Estancia 25 de Mayo a orillas del </font><span style=\"color: rgb(0, 0, 0); font-size: 1rem;\">Lago Argentino. Estancia donde podremos observar la flora y fauna, y aprenderemos algo sobre glaciología y geología. Una estupenda vista desde los acantilados frente al lago la imponente vista de  la cordillera nos deleitaran la vista.</span></p><p><font color=\"#000000\">Se visitará la zona arqueológica donde se ubican las cuevas. Allí podrán apreciar arte rupestre. Es allí  dentro donde se almorzará o cenará para luego  regresar a su hotel. </font></p><div><br></div>', '4.200', '4.200', '34', '4.200', '', '<p>11:00 am.  a  2:00 pm.</p><p>6:00 am.  a   9:00 pm.</p>', '3 horas', 'Llevar: lentes para sol, protector solar, abrigo, guantes, calzado apropiado.  ', 'Traslado desde el hotel, entrada a la reserva y guía.', '', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g312851-d2352525-Reviews-Patagonia_Profunda-El_Calafate_Province_of_Santa_Cruz_Patagonia.html ', '', 1, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1pjXZVll7fNchRcxg6PoZOlCxhJu7rdE_&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-24 03:18:09'),
(44, 'Excursion', 'Patagonia Night Tour', 'vistas/img/excursiones/100/344.jpg', '<p><b style=\"\"><font color=\"#3984c6\">Excursión Patagonia Night Tour.</font></b><font color=\"#000000\"> Una excursión </font><font color=\"#3984c6\"><b>ideal para conocer la belleza de los cielos Patagónicos</b></font></p>', '<p><b style=\"\"><font color=\"#3984c6\">Patagonia Night es una excursión de astro turismo en El Calafate, que aprovecha los limpios cielos de Patagonia para volver a redescubrir los cielos.</font></b><font color=\"#000000\"> Junto a un astrónomo experto y telescopios profesionales se puede conocer todo sobre los astros. Gracias a que El Calafate y la Patagonia tiene uno de los cielos más limpios de Argentina, con Patagonia Night podrás redescubrir el cielo y sus astros en la virgen estepa patagónica junto a la Estancia Rio Mitre. </font><b style=\"\"><font color=\"#3984c6\">Acompañado de telescopios y un astrónomo experto con más de 10 años de experiencia, aprenderás la historia de la astronomía, cómo leer el cielo, y las interpretaciones que los Tehuelches le daban a este.</font></b><font color=\"#000000\"> Para antes de esta emocionante experiencia, podrás visitar el Museo Histórico Tehuelche y disfrutar de una rica cena en la Estancia Rio Mitre. Desde las 20:30hs, pasaremos a buscarte por el hotel, casa, o departamento donde te estés alojando para comenzar la excursión. El día anterior estaremos confirmando el horario de pick-up. Recorriendo la Ruta Provincial Nro. 11, iremos hasta la Estancia Rio Mitre. En el camino experimentarás la Patagonia en la penumbra completa. </font><font color=\"#3984c6\"><b>Arribo a Estancia Rio Mitre y visita al Museo Histórico Tehuelche.</b></font><font color=\"#000000\"> Al llegar, cerca de las 21:15hs, podrás visitar los alrededor de las Estancia Rio Mitre y el Museo Histórico Tehuelche, donde aprenderás la historia de este pueblo originario , sus costumbres, y objetos como quillangos, toldos, piedras talladas, puntas de flecha, boleadoras, y más. ¡Luego de la visita será hora de cenar!, Cena: Alrededor de las 22hs comenzará la cena en la Estancia Rio Mitre, donde podrás disfrutar de un bife de chorizo o una calabaza rellena si preferís la alternativa vegetariana/vegana. Todo acompañado de bebidas y guarnición. Observación del cielo y estrellas (Astro turismo). Cerca de las 23hs, habrá una pequeña proyección fílmica de 15 minutos para introducir a las personas a la astronomía y anticipar qué es lo que se disfrutará en unos minutos. ¡Luego será hora de ver el cielo! El astrónomo hará las primeras presentaciones y te guiará sobre cómo debes mirar el cielo, utilizar el telescopio, y aprender sobre la vía láctea, nebulosas, estrellas, constelaciones, mitología, ¡y más! ¡No te olvides de traer ropa abrigada! De nuestro lado otorgaremos ponchos a todos los participantes que ayudará a protegerte del viento patagónico. </font><br></p>', '', '', '14', '', '', '8:30 pm.   a  1.00 am..', '4.30 hs.', 'Ir bien abrigados', 'Traslado desde el hotel a la estancia.', '', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g312851-d21234094-Reviews-Patagonia_Night-El_Calafate_Province_of_Santa_Cruz_Patagonia.html', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1Dcf8ei9Jee0dyppjtk53M2GjKXvLxduL&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-24 23:19:46'),
(45, 'Excursion', 'Safari Experience Tour Fotográfico', 'vistas/img/excursiones/45/896.jpg', '<p><b style=\"\"><font color=\"#3984c6\">Safari experiencia es un Tour de medio día </font></b><font color=\"#000000\">comenzando en </font><font color=\"#3984c6\"><b>El Calafate</b></font><font color=\"#000000\">, el recorrido transcurre en la </font><font color=\"#3984c6\"><b>estancia del 25 de Mayo</b></font><font color=\"#000000\"> donde podremos observar guanacos, cóndores, zorros y otros animales. Se visitarán uno de los principales yacimientos de cangrejos, fósiles y ostras. Para terminar su recorrido en el puesto La Sección donde se almorzará o cenará.</font><br></p>', '<p><font color=\"#000000\">Esta es una interesante </font><font color=\"#3984c6\"><b>excursión en la Reserva Natural Estancia 25 de Mayo que combina traslados en vehículo 4×4, safari fotográfico </b></font><font color=\"#000000\">y la posibilidad de disfrutar agradables momentos en un auténtico puesto de estancia patagónica, para aprender un poco más del estilo de vida de los primeros pobladores de la región, de la gente de campo y las estancias de la Patagonia austral. Puede hacerse por la mañana, a partir de las 09 Hs. finalizando con un almuerzo, o por la tarde a partir de las 16 Hs. concluyendo con una cena. Luego de ingresar a la Reserva Natural “Estancia 25 de Mayo” realizamos una primera parada en un antiguo puesto de piedra, donde vivía la primera familia de la estancia, los Villalba. Se presenta una explicación sobre las estancias, los primeros pobladores, los inicios de El Calafate y de la Estancia 25 de Mayo. Continúa el recorrido con la visita a La Sección, lugar donde se dispone de tiempo suficiente para admirar manadas de guanacos para cuya observación se provee también binoculares. Luego la caminata hacia el sector donde se observan ostras fosilizadas de más de 23 millones de años de antigüedad, emplazadas en una pared constituida por arrecifes, testimonio de cuando ese desierto se halló cubierto por el mar. La última parada antes del almuerzo/cena es en el punto panorámico llamado Centinela, a 1500 m.s.n.m., para unas impactantes vistas panorámicas de interminables paredes de basalto, del Cerro Centinela y de los Baguales (cerros que marcan el límite Sur con Chile). Momento perfecto para apreciar el viento, la inmensidad y disfrutar la Patagonia con los cinco sentidos. Se emprende el regreso, para detener la marcha en el Puesto «La Sección». El almuerzo o cena de campo será servido en un auténtico puesto de estancia, enclavado en la inmensidad de la estepa patagónica. El almuerzo o cena en la casa de campo consta de un guiso de campo, acompañado de panes caseros, vinos locales y postre. Posteriormente, se regresa a El Calafate.</font><br></p>', '', '', '12', '', '', '<p>9:00 am.  a   2:00 pm.</p><p>4:00 pm.  a   9:00 pm.</p>', '5 hs.', 'Llevar: lentes para sol, protector solar, abrigo, guantes, calzado apropiado.  ', 'Traslado desde su Hotel, almuerzo o cena, binoculares y servicio de guías.', '', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g312851-d2352525-Reviews-Patagonia_Profunda-El_Calafate_Province_of_Santa_Cruz_Patagonia.html', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1yDTmMvJe-pqMjG2qGTSYVaPLuyIGF4Qg&hl=es\" width=\"100%\" height=\"100%\"></iframe>', '2021-03-24 23:39:21'),
(46, 'Excursion', 'Balcones de Calafate Land Rover', 'vistas/img/excursiones/46/674.jpg', '<p>Balcones de Calafate excursión de medio día, se recorre en 4x4 el Cerro Wuiliche, donde se podrán apreciar muy bonitas vistas de El calafate y el Lago Argentino la Cordillera de los Andes, se podrá avistar fauna típica de la zona, esta excursión incluye el almuerzo o cena.</p>', '<p>Se localiza a 15 Km del centro de El Calafate </p><p>Tres salidas diarias, la excursión parte desde los hoteles de El Calafate y completa un recorrido de 35 kilómetros sobre la línea de cerros situados detrás del pueblo. La huella nos adentra por paisajes que maravillan por su variada vegetación de altura. L<span style=\"font-size: 1rem;\">a primera parada es un mirador natural donde los pasajeros disfrutan de una vista panorámica de El Calafate y del cuerpo central del Lago Argentino. De fondo, el marco infaltable e imponente de la Cordillera de los Andes. Si el clima ayuda, es posible divisar los cerros Fitz Roy y Torre en El Chaltén y, con algo de suerte. Siguiendo hasta  el Laberinto de Piedras, podemos encontrar restos fósiles que nos permiten ser testigos hoy de ese pasado milenario. Un snack en la confitería Huyliche y desde allí iniciamos el descenso por la ladera norte del cerro hasta la Piedra de los Sombreros, curiosas concreciones de hierro que solo se encuentran en cuatro lugares del mundo. Luego de este viaje a otras eras de la historia del mundo, retornamos hacia El Calafate con la vista siempre del Lago Argentino.</span></p>', '4.500', '4.590', '18', '4.500', '', '10.00 am.  a   1:30 pm,\r\n2:30 am.  a   5:30 pm,\r\n6:00 pm.  a   9:00 pm,', '3 hs.', 'Llevar: lentes para sol, protector solar, abrigo, guantes, calzado apropiado.  ', 'Traslado desde su hotel, almuerzo en el primer turno, merienda en el segundo, cena el tercero', '', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g312851-d1967568-Reviews-Calafate_Extremo-El_Calafate_Province_of_Santa_Cruz_Patagonia.html ', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1N2V98jh979xVR-ySVWpvfSGDpRCXdUTu&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-25 00:07:55'),
(47, 'Excursion', 'Balcones del Calafate 4x4', 'vistas/img/excursiones/47/636.jpg', '<p><font color=\"#3984c6\"><b>Balcones de Calafate es una excursión de medio día</b></font><font color=\"#000000\">, se </font><font color=\"#3984c6\"><b>recorre en camioneta todo terreno el Cerro Wuiliche,</b></font><font color=\"#000000\"> donde se </font><font color=\"#3984c6\"><b>podrán apreciar muy bonitas vistas de El calafate y el Lago Argentino la Cordillera de los Andes</b></font><font color=\"#000000\">, se podrá avistar fauna típica de la zona, esta excursión</font><font color=\"#3984c6\"><b> incluye el almuerzo o merienda.</b></font></p><p><br></p>', '<p><font color=\"#3984c6\"><b>Balcones de El Calafate es una magnifica excursión de mediodía</b></font> id<font color=\"#000000\">eal para aprovechar una tarde libre</font><font color=\"#3984c6\"><b> visitaras el cerro Wuiliche ubicado detrás de la ciudad donde podrás apreciar excelentes vistas de El Calafate y del Lago Argentino y la Cordillera de los Andes.</b></font></p><p><font color=\"#000000\">La excursión te pasa a buscar por tu hotel, tiene un recorrido de aproximadamente 35 km por los cerros situados a espalda de la ciudad, podrás ahí apreciar la vegetación de altura.</font></p><p><font color=\"#000000\">En la primera parada tendrás una vista panorámica del Lago Argentino y una vista de El calafate ciudad, podrán si el tiempo lo permite ver el Cerro Fitz Roy en El Chalten, luego visitaras el laberinto de las piedras donde se pueden encontrar restos fósiles para continuar el descenso por la ladera norte del cerro, para llegar a la Piedra de los Sombreros, para retornar a la ciudad de El Calafate descendiendo observando la Cordillera y el majestuoso Lago Argentino.</font></p><div><br></div>', '4.200', '4.300', '10', '4.200', '', '<p>9:45 am.  a   1:30 pm.</p><p>2:45 pm.  a  6:00 pm.</p>', '3 horas', 'Llevar: lentes para sol, protector solar, abrigo, guantes, calzado apropiado.  ', 'Traslado desde el hotel, almuerzo en el primer turno y merienda en el segundo, guía. ', '', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g312851-d1967568-Reviews-Calafate_Extremo-El_Calafate_Province_of_Santa_Cruz_Patagonia.html ', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1N2V98jh979xVR-ySVWpvfSGDpRCXdUTu&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-25 00:25:26'),
(48, 'Excursion', 'Rivera del lago Argentino en Land Rover', 'vistas/img/excursiones/300/144.jpg', '<p><font color=\"#000000\">Excursión que se realiza en vehículos Land Rover  sobre el Cerro Frías que ubicado a 24 km de la ciudad de El Calafate camino hacia El Glaciar Moreno, desde aquí podrás apreciar vistas panorámicas únicas como las Torres del Paine, el Cerro Fitz-Roy, disfrutaras también la flora y la fauna de la región, incluye un snack te consta de un café o té con una porción de torta.</font><br></p>', '<p><font color=\"#000000\">El tour Rivera del Lago en camionetas Land Rover es una divertida aventura de viaje que te lleva a explorar de forma cómoda y segura, abordo de un vehículo especialmente acondicionado, los ascéticos paisajes naturales que guarda en su interior El Calafate. Disfruta de emocionantes actividades de montaña, mientras se preparan en el fuego, deliciosas viandas destinadas a deleitar tu paladar.</font></p><p><font color=\"#000000\">La excursión Rivera del Lago en camionetas Rover inicia su recorrido en El Calafate a bordo de camionetas Land Rover Defender, adaptadas especialmente para brindar la mayor seguridad y comodidad en este tipo de terrenos agrestes. Una vez los pasajeros han subido al vehículo, el recorrido se pondrá en marcha durante unos 5 km de ruta asfaltada hasta llegar a un camino de tierra, donde empieza la travesía por campos de estancias, en dirección a la costa del Lago Argentino. La idea del tour Rivera del Lago en Land Rover es recrear la travesía que realizaban los antiguos comerciantes de lana de El Calafate, quienes en su misión de transportar las mercancías y comercializarlas, se detenían en este punto de descanso, junto a la orilla del río, bajo la protección que brindan los arbustos, para reparar energías y seguir su camino. Al finalizar las viandas junto al fogón, se emprende el regreso por otro camino que sale a la ruta frente al Cerro Comisión, desde donde se recorrerán 10km más de ruta de asfalto antes de llegar hasta El Calafate.</font></p><p><font color=\"#000000\">Un recorrido Rivera del Lago en Land Rover es una experiencia única en El Calafate. No te pierdas la oportunidad de observar desde un punto privilegiado los hermosos picos helados de Argentina ¡Es una actividad que no vas a poder olvidar!</font></p><div><br></div>', '', '', '', '', '', '<p>10:00 am.  a  1:30 pm.</p><p>3:00 pm.  a    6:00 pm.</p>', '3 horas', 'Vestimenta abrigada, campera, crema, anteojos de sol, gorra o sombrero y zapatillas comidas para caminar.', 'Guía, traslado desde el hotel, almuerzo turno mañana, merienda campestre turno tarde', '', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g312851-d1547492-Reviews-Cerro_Frias-El_Calafate_Province_of_Santa_Cruz_Patagonia.html ', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=15gWsD1IqZDbbUjOwZEkpEyJormHd40h_&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-25 17:20:24'),
(49, 'Excursion', 'Cerro Frías Tirolesa', 'vistas/img/excursiones/49/889.jpg', '<p><font color=\"#3984c6\"><b>Excursión en El Calafate en una tirolesa que consta de cinco trayectos sobre el Cerro Frías</b></font><font color=\"#000000\">, es considerada unas de </font><font color=\"#3984c6\"><b>las tirolesas más largas de Sudamérica.</b></font><font color=\"#000000\"> Espectaculares vistas desde el Cerro Frías nos acompañaran, podremos ver el Lago Argentino en su inmensidad.  Excursión del mediodía que se puede disfrutar luego de visitar el Glaciar Moreno</font><br></p>', '<p><font color=\"#3984c6\"><b>El Cerro Frías, en la Villa Turística El Calafate. Situado en Estancia Alice, a 23 km de El Calafate</b></font><font color=\"#000000\">, Es una oportunidad para el avistaje de flora y fauna. La actividad comienza con un traslado desde los hoteles hasta el Cerro Frías. La Tirolesa es la actividad cuyo fin es desplazarse sobre dos cables sujetos entre puntos fijos, con equipo de seguridad poleas, mosquetones, cintas, casco y arnés. Luego de entregar los equipos, se da una breve charla instructiva y se parte hacia la plataforma de Embarque, ubicada a 540 metros en la Ladera Sur del CERRO FRIAS. En la plataforma se examina nuevamente que todo el equipo y los participantes se disponen a cumplir el objetivo de cruzar la primera etapa de los casi 2.500 metros de Cable, dispuestos en 5 vías. Durante el recorrido se podrán apreciar increíbles vistas panorámicas TORRES DEL PAINE, VALLE DEL CENTINELA, LAGO ROCA y BRAZO SUR del LAGO ARGENTINO. Una vez finalizada la actividad, se llega a la plataforma de Desembarque, desde donde se inicia la caminata de regreso al quincho para luego ser regresados a los hoteles respectivos.</font><br></p>', '', '', '', '', '<p>Almuerzo en el primer turno</p>', '<p>9:00 am.  a   2:00 pm.</p><p>3:00 pm.  a   7:00 pm.</p><p><br></p>', '4 horas', 'Llevar: lentes para sol, protector solar, abrigo, guantes, calzado apropiado.  \r\n', 'Traslado desde el Hotel, Guia en todo el recorrido, Snack', '', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g312851-d1547492-Reviews-Cerro_Frias-El_Calafate_Province_of_Santa_Cruz_Patagonia.html', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1LrqzwdzUVmqfX3vMIAzfNUYZ_NQzQuKD&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-25 18:07:13'),
(50, 'Excursion', 'Cerro Frías 4x4', 'vistas/img/excursiones/500/422.jpg', '<p><font color=\"#3984c6\"><b>Excursión que se realiza en vehículos Land Rover ,</b></font><font color=\"#000000\"> sobre el Cerro Frías que ubicado a 24 km de la ciudad de El Calafate camino hacia El Glaciar Moreno, desde aquí podrás apreciar vistas panorámicas únicas como las Torres del Paine, el Cerro Fitz-Roy, disfrutaras también la flora y la fauna de la región, incluye un snack te consta de un café o té con una porción de torta.</font><br></p>', '<p><font color=\"#3984c6\"><b>Cerro Frías 4 por 4 excursión de medio día de duración en El Calafate</b></font></p><p><font color=\"#000000\">Vistas espectaculares de la Cordillera de Lago Argentino, de la cordillera del Fitz Roy y las Torres del Paine, Cordón de los Cristales, Brazo Rico, Brazo Norte y cuerpo principal del Lago Argentino, Península de Magallanes y Península Avellaneda..</font></p><p><font color=\"#000000\">El Cerro Frías se encuentra a 23 Km de la ciudad de El Calafate, camino al Glaciar Perito Moreno </font></p><p><font color=\"#000000\">La excursión empieza cuando los pasan a buscar por su hotel en El Calafate. </font></p><p><font color=\"#000000\">En Land Rover se sube por la ladera del cerro, donde se pueden observar bosques de lengas </font></p><p><font color=\"#000000\">En el ascenso se pueden apreciar vistas del Valle del Río Centinela y las Torres del Paine, se desciende por la ladera de la montaña. Al llegar a la base de este se regresa al quincho del lugar donde podrán almorzar o cenar si lo desean.</font></p><p><font color=\"#000000\">Finalizado este paseo, se emprende el recorrido de regreso a la ciudad de El Calafate y a su hotel.</font></p><div><br></div><div><br></div><div><br></div>', '', '', '', '', '<p>Almuerzo o cena en el quincho</p>', '<p>9:00 am.  a  2.00 pm.</p><p>3:00 am.  a  7:00 pm.</p><p>6:00 pm.  a  9:30 pm.</p>', '4 horas', 'Llevar: lentes para sol, protector solar, campera, guantes, calzado apropiado, abrigo varias capas  ', 'Guía, traslado desde el hotel, y snack', '', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g312851-d1547492-Reviews-Cerro_Frias-El_Calafate_Province_of_Santa_Cruz_Patagonia.html', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1q5D53ZEbxoSUPqqGopRt67oA8iwLJ3wN&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-26 01:19:42'),
(51, 'Renta', 'Coche Económico', 'vistas/img/excursiones/51/631.jpg', '<p>Reservá tu auto al mejor precio garantizado.</p><p>Unidades últimos modelos.</p><p>De consumo bajo de combustible.</p><p>Retiros en El Aeropuerto o en la ciudad.</p>', '<p>Coches pequeños </p><p>Toyota Etios o Renault Kwid según disponibilidad al momento del retiro.</p><p>¿Quién mejor para alquilar tu auto en la Patagonia con alguien que es de la Patagonia? </p><p>Contamos con una flota de autos pensado para que puedas moverte cómodamente.</p><p><span style=\"font-size: 1rem;\">Información del vehículo</span><br></p><p>Franquicia de ARS 40.000 (bloqueo en la tarjeta de crédito hasta la finalización del contrato y verificación del vehículo.</p><p>Política de combustible: se entrega con tanque lleno y se devuelve con tanque lleno, en caso de que falte combustible se le cobra 100 pesos argentinos por litro.</p><p>•<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Plazas disponibles: 4</p><p>•<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Vehículos disponibles: 4 </p><p>•<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Aire acondicionado: Sí</p><p>•<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Transmisión: Manual</p><p>•<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Puertas: 5</p><p>•<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Capacidad de baúl: 290 litros</p><p>•<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>KM x litro: 6/7 litros x 100</p><p>El precio incluye</p><p>•<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Tanque lleno</p><p>•<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Lavado del auto</p><p>•<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>IVA</p><p>•<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Impuestos del aeropuerto</p><p>Adicionales</p><p>•<span class=\"Apple-tab-span\" style=\"white-space:pre\">	</span>Sillita de bebé</p><p><br></p>', '5.800', '', '37', '', '<p>Silla para bebe</p><p>Retira Aeropuerto </p><p>Retira Ciudad</p>', '', '', 'Mayor de edad y registro vigente\r\n', 'Seguro', '', '', '', '', '', 1, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1u2jsLjUXH79yd3OvPsmWTCig0_SWnsH4&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-26 20:00:57'),
(52, 'Buses', 'Bus El Calafate a Laguna Amarga', 'vistas/img/excursiones/52/474.jpg', '<p>Servicio de Bus semi cama desde El Calafate a El Chalten con cuatro horarios disponibles en la temporada alta y una frecuencia en la temporada invernal.<br></p>', '<p>Servicio de bus línea regular entre las localidades de El Calafate y El Chaltén.</p><p>El servicio de bus semi-cama desde El Calafate a El Chaltén es un servicio anual diario, saliendo y llegando desde las terminales de ómnibus. La duración del viaje de cada tramo es de 3 hs aproximadamente cada tramo.</p><p>Horarios de salida:</p><p>Tramo Calafate – Chaltén:</p><p>8.00 hs: todo el año, todos los días.</p><p>Salida desde la terminal de ómnibus El Calafate.</p><p>Tramo Chaltén – El Calafate: incluido, salida desde la terminal de el Chalten</p><p>18:00 hs: todos los días.</p><p>Salida desde la terminal de ómnibus El Chaltén. </p><p>Nota: Los servicios salen desde las terminales de El Calafate o desde El Chaltén no incluyen la tasa de uso de la terminal. El costo es por persona, no puede ser pre pagado, se abona al momento de tomar el servicio y en efectivo pesos. Presentación en la terminal 20 minutos previos al horario de partida.</p><p>IMPORTANTE:</p><p>EL REGRESO DE EL CHALTÉN A EL CALAFATE DEBE SER COMPLETADO EN EL FORMULARIO AL MOMENTO DE LA COMPRA, CON FECHA Y HORARIO DE SALIDA ELEGIDO. ES UN PASO OBLIGATORIO EN EL SERVICIO DE TICKET DE BUS DE IDA Y VUELTA A EL CHALTÉN.</p><div><br></div>', '8.600', '9.200', '97', '', '<p>Vianda $ 990 AR$</p>', '<p>6:00 am.</p>', '6 horas', 'Llevar documento para pasar frontera \r\nMayores de 18 años', 'Pick Up en el Hotel de El Calafate', 'Entrada al Parque Nacional', '', '', '', '', 1, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1f5Tfi5j70QE6XAFZIMpGx_3fdlVRFrz2&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-26 20:52:59'),
(53, 'Buses', 'Bus El Calafate Pudeto Torres del Paine', 'vistas/img/excursiones/53/181.jpg', '<p>Servicio de Bus disponible entre los meses de septiembre y abril desde El Calafate a Pudeto Parque Nacional Torres del Paine sin tener que pasar por la ciudad de Puerto Natales.<br></p>', '<p>Bus Torres del Paine Pudeto</p><p><span style=\"font-size: 1rem;\">El traslado a Torres del Paine Laguna nos permite llegar desde El Calafate a Laguna Amarga sin pasar primero por Puerto natales ahorrando tiempo y dinero. </span><br></p><p>Se parte desde la localidad argentina de El Calafate a partir de las 6.10 hs., desde el hotel donde esté alojado el pasajero, siempre y cuando se encuentre en un radio de 2 km del centro. Tener en cuenta que este es el horario en el cual se inician los Pick Up desde el centro, por ende, es un estimado. </p><p>Alrededor de las 10 de la mañana, se llegará a Frontera (Cerro Castillo); y una vez realizado los trámites aduaneros, se realizará una pausa en la localidad chilena de Cerro Castillo; allí podrán cambiar dinero para pagar la entrada al Parque, tomar un desayuno tradicional </p><p>A las 11, aproximadamente, nuestro bus retomará camino hacia el Parque; llegando al primer atractivo de nuestro recorrido a las 11.40 hs: el Lago Sarmiento. Allí se hará una breve parada para tomar las primeras fotografías y disfrutar del imponente paisaje. </p><p>La próxima parada de esta excursión será en la Portería Laguna Amarga, a las 12.30 hs aproximadamente finalizando allí se abonará el ingreso al Parque Nacional Torres del Paine. Desde este punto, nuestro bus tomará rumbo hacia el Lago Nordenskjold, al cual arribará 13.00 hs. Se podrá disfrutar de este bello espejo de agua; reflejando unos de los principales atractivos del Parque: los imponentes “Cuernos del Paine”. Alrededor de las 13.30 hs, se arribará a Pudeto</p><div><br></div>', '9.500', '10.200', '24', '', '<p>Vianda    990 AR$</p>', '<p>6:00 am.</p>', '7.30 horas', 'Mayor de 18 años', '', '', '', '', '', '', 1, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1-L_Jiboid1HbHAgwdGf5w-76vS1wrL6U&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-26 20:53:37');
INSERT INTO `excursiones` (`id`, `category`, `titulo`, `banner`, `intro`, `descripcion`, `precio_bajo`, `precio_alto`, `reservada`, `precio_ninos`, `opcional`, `turnos`, `duracion`, `requisitos`, `incluye`, `no_incluye`, `rango_adultos`, `rango_ninos`, `trip_link`, `trip_detalle`, `recomendado`, `recorrido`, `fecha`) VALUES
(54, 'Excursion', 'Cerro Frías Cabalgata', 'vistas/img/excursiones/54/302.jpg', '<p><b style=\"\"><font color=\"#3984c6\">Excursión camino al Glaciar Moreno en Cabalgata sobre el Cerro Frías</font></b><font color=\"#000000\"> donde podrás observar las Torres del Paine el Cerro Fitz-Roy el Brazo Rico del Lago Argentino, animales como guanacos, liebres, vacas, potros salvajes. Tiene una duración de 2 horas a caballo, al llegar la base del cerro pueden almorzar o cenar si lo desean.</font></p><div><br></div>', '<p><font color=\"#000000\">A 23 kilómetros de Calafate camino al glaciar Perito Moreno encontramos el cerro Frias. Cerro con guías especializados que nos llevaran a hacer una cabalgata.</font></p><p><font color=\"#000000\">Se cabalgar junto a un grupo, de las cuales muchas no tienen experiencia.</font></p><p><font color=\"#000000\">La excursión comienza pasándote a buscar por el Hotel en el que estas alojado, una vez en el cerro comenzara una cabalgata única llegando a distintos paradores donde podras observar distintos puntos panorámicos tales como las Torres del Paine, Cerro Fitz Roy, Cordón de los Cristales, Brazo Rico, Brazo Norte y cuerpo principal del Lago Argentino</font></p><p><font color=\"#000000\">Península de Magallanes y Península Avellaneda, después de esta increíble cabalgata nos volveremos hacia El Calafate acompañados de una vista espectacular del Lago Argentino.</font></p><div><br></div>', '', '', '21', '', '<p>Almuerzo o Cena en el Quincho </p>', '<p>9:00 am.  a  2:.00 pm.</p><p>3:00 pm.  a  7:00 pm.</p><p>6:00 pm.  a  9:30 pm.</p>', '4 horas', 'Llevar: lentes para sol, protector solar, campera, guantes, calzado apropiado, abrigo varias capas  ', 'Traslado desde su Hotel, Guía y Snack', '', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g312851-d1547492-Reviews-Cerro_Frias-El_Calafate_Province_of_Santa_Cruz_Patagonia.html ', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=11IySVdE_hRj-DZ3Ad5x3zIj-2D0PMIyH&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-26 20:54:21'),
(55, 'Excursion', 'Cerro Frías Trekking', 'vistas/img/excursiones/55/394.jpg', '<p><font color=\"#000000\">Excursión de Trekking por el Valle del Cerro Frías a pocos kilómetros de la ciudad de el calafate recorrido dos horas de duración donde podremos observar la flora y la fauna de Esta región patagónica vacas guanacos libres. Maravillarnos con los paisajes del valle del Río Centinela, las Torres del Paine y el Lago Argentino. </font><br></p>', '<p><font color=\"#000000\">El Trekking en Cerro Frías es una excursión de medio día en la zona de El Calafate podremos obsevar maravillosas vistas de la Cordillera de los Andes, Lago Argentino y Torres del Paine.</font></p><p><font color=\"#000000\">El Cerro Frías ubicado a 23 Km. de la ciudad de El Calafate, camino al Glaciar Perito Moreno, no formar parte de la Cordillera de los Andes</font></p><p><font color=\"#000000\">Península de Magallanes y Península Avellaneda.</font></p><p><font color=\"#000000\">La excursión comienza cuando los pasan a buscar por el hotel.</font></p><p><font color=\"#000000\">Después de 2 horas de trekking de baja dificultad por el valle del río en la estepa patagónica, se regresa al quincho donde tendrán tiempo libre en el quincho del lugar donde podrán almorzar o cenar si lo desean.</font></p><p><font color=\"#000000\">Finalizado este paseo, se emprende el recorrido de regreso a la ciudad de El Calafate y a su hotel.</font></p><div><br></div>', '', '', '28', '', '<p>Almuerzo en el Quincho</p><p>Vianda 990 AR$</p>', '<p>9:00 am.  a  2:00 pm.</p><p>3:00 pm.  a  7:00 pm.</p>', '4 horas', 'Llevar: lentes para sol, protector solar, campera, guantes, calzado apropiado, abrigo varias capas  ', 'Traslado desde su Hotel, Guía, Snack', '', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g312851-d1547492-Reviews-Cerro_Frias-El_Calafate_Province_of_Santa_Cruz_Patagonia.html', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1RAUOUMTFdGOcro0K8XI9JACKWZrtZCz3&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-26 20:54:54'),
(56, 'Buses', 'Bus El Calafate a Puerto Natales', 'vistas/img/excursiones/56/352.jpg', '<p>Bus a Natales</p><p>Servicio de Bus disponible entre los meses de septiembre y abril desde El Calafate a la ciudad de Puerto Natales.</p><div><br></div>', '<p>Bus Puerto Natales</p><p><br></p><p>El traslado en este caso a Puerto Natales nos permite llegar desde el hotel en El Calafate a la ciudad de Puerto Natales. </p><p>Se parte desde la localidad argentina de El Calafate a partir de las 6.10 a.m.  desde el hotel donde esté alojado el pasajero, siempre y cuando se encuentre en un radio de 2 km del centro. Tener en cuenta que este es el horario en el cual se inician los Pick Up desde el centro, por ende, es un estimado. </p><p>Alrededor de las 10 de la mañana, se llegará a Frontera (Cerro Castillo); y una vez realizado los trámites aduaneros, se realizará una pausa en la localidad chilena de Cerro Castillo donde después de unos veinte minutos de una parada técnica se continua por 1 hora más a la ciudad chilena de destino.</p><div><br></div>', '6.000', '', '39', '', '', '6:00  am.', '5 horas y media', 'Llevar pasaporte. ', '', '', '', '', '', '', 1, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1PRmK8Dwkh_jGa9pCUVpyrEtKrmgSZZOp&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-26 20:55:46'),
(59, 'Excursion', 'Full Day Chaltén Trekking Libre', 'vistas/img/excursiones/59/465.jpg', '<p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt;\"><font color=\"#000000\" face=\"Helvetica Neue\" size=\"3\"><span style=\"caret-color: rgb(0, 0, 0);\">La excursión Full Day El Chalten es sin duda una de las excursiones que no te debes perder es la visita auto guiada a la Capital Nacional del Trekking. La vista de El Monte Fitz-Roy es especial para los amantes de la naturaleza, puedes visitar lagunas en el medio de las montañas, ver glaciares colgantes y otras maravillas de la naturaleza.</span></font></p><p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt; font-size: medium; font-family: Calibri; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><span lang=\"ES\" style=\"font-family: \"Helvetica Neue\";\"><o:p> </o:p></span></p>', '', '4.400', '4.500', '55', '3.200', '<p>Vianda 990 AR$</p>', '<p>7:00 am.  a  8:00 pm.</p>', '11 horas aproximadas', 'Llevar: lentes para sol, protector solar, campera, guantes, calzado apropiado, abrigo varias capas  ', 'Traslado desde su Hotel, guía, Caminata por los senderos libre', '', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g316035-d552856-Reviews-Patagonia_Hikes-El_Chalten_Province_of_Santa_Cruz_Patagonia.html ', '', 1, '<iframe src=\"https://www.google.com/maps/d/embed?mid=19G-nNl2sJDihADfh2wWnKzObBRrO-gkb&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-26 20:58:36'),
(60, 'Excursion', 'Cabalgata corta Bahía Redonda', 'vistas/img/excursiones/60/563.jpg', '<p><font color=\"#3984c6\"><b>La cabalgata corta en la Bahía Redonda de El calafate se realiza en Punta Soberana</b></font><font color=\"#000000\"> aquí podrá avistar distintos tipos de aves como flamencos, cauquenes, y otras especies.</font></p><p><font color=\"#000000\">Tiene una duración de una hora 40 minutos incluye tortas fritas al regreso de la cabalgata.</font></p><p><font color=\"#000000\">Es una excursión de pocas horas y es alternativa después de visitar el Glaciar Moreno.</font></p><div><br></div>', '<p><font color=\"#000000\">Esta excursión es una cabalgata corta de 2 horas por la zona de Bahía Redonda y Punta Soberana, ubicadas a las afueras de la ciudad de El Calafate, donde se pueden observar aves patagónicas como flamencos, cisnes de cuello negro, gaviotas, garzas, entre otras. Es una actividad ideal para aquellos que busquen una aventura tranquila al aire libre y cerca de El Calafate pudiendo apreciar la Cordillera de los Andes, el Lago Argentino, Isla Solitaria y Bahía Redonda. Durante la cabalgata, se atraviesa el inconfundible paisaje de la estepa patagónica conformado por los típicos arbustos mustios y achaparrados tales como el coirón, la mata negra, neneo, mata gris, paramela, etc. Podrán disfrutar de una muy buena vista panorámica de El Calafate y el Lago Argentino desde los cerros circundantes mientras disfrutan de un paseo a caballo por la estepa patagónica. La excursión incluye traslado ida y vuelta a su hotel, servicio de mate y tortas fritas y 1 hora y 40 minutos a caballo, siendo la actividad más corta de cabalgata en la zona de El Calafate. Al tener varios horarios de salida diarios, es perfecta para aprovechar el día de llegada o partida de El Calafate. Esta excursión es un paseo al estar orientado a principiantes en la actividad. De querer otro ritmo de marcha, se sugiere la cabalgata en privado. Importante: El servicio de mate y tortas fritas se encuentra temporalmente suspendido por protocolo COVID-19.</font></p><div><br></div>', '3.400', '3.500', '11', '3.400', '', '<p>10:45 am.  a  1:00 pm.</p><p>4:45 pm.   a  7:00 pm.</p>', '2', 'Llevar: lentes para sol, protector solar, campera, guantes, calzado apropiado, abrigo varias capas  ', 'Traslado desde su Hotel, guía, y tortas fritas.', '', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g312851-d8445021-Reviews-Cabalgata_en_Patagonia-El_Calafate_Province_of_Santa_Cruz_Patagonia.html', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1VMB_e7b2Rkph8Bu94BGtGqWznZs9CPjd&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-26 20:59:44'),
(62, 'Excursion', 'Bosque Petrificado', 'vistas/img/excursiones/62/772.jpg', '<p>Excursión al Bosque Petrificado de la Leona a unos 100 km de El Calafate y otros tantos de El Chalten, nos permitirá apreciar durante una caminata de tres horas ver fósiles de dinosaurios y troncos petrificados.<br></p>', '<p><font color=\"#3984c6\"><b>Es una excursión de día entero en la zona de estepa.</b></font><font color=\"#000000\"> Salida a las 08:30 hs, regreso estimado a las 17:00 hs. Está orientada a todas las personas que gusten de las actividades al aire libre y a la aventura, dispuestas a descubrir lugares nuevos.</font></p><p><font color=\"#000000\">El tour incluye aproximadamente 3 horas de caminata discontinua por un </font></p><p><font color=\"#000000\">terreno donde el viento y el agua se encargaron de dejar descubierto lo que permaneció oculto por millones de años.</font></p><p><font color=\"#000000\">Se parte de Calafate hacia el Este y a los pocos kilómetros se torna al Norte por la ruta 40. Durante este trayecto se divisa el Lago Argentino, el río Santa Cruz, el río La Leona y una vista panorámica majestuosa de la Cordillera de los Andes incluyendo el cerro Fitz Roy.</font></p><p><font color=\"#000000\">Paramos aproximadamente 15 minutos en el Hotel La Leona (sitio histórico) y continuamos viaje siguiendo la margen sur del Lago Viedma hasta llegar al faldeo del Cerro Los Hornos (estancia Santa Teresita).</font></p><p><font color=\"#000000\">Nos asomamos por primera vez a la enorme depresión del terreno en donde están los troncos petrificados y comenzamos nuestra caminata de exploración entre los fósiles, la cual dura aproximadamente 3 horas, incluyendo el tiempo necesario para almorzar.</font></p><p><font color=\"#000000\">A lo largo de la caminata veremos gran cantidad de troncos petrificados que yacen en la superficie, algunos de un diámetro de 1,20 m, testimonio de antiguas épocas en donde el clima era muy diferente al actual y permitía la existencia de un bosque pleno. También han quedado al descubierto restos fósiles de distintos tipos de dinosaurios</font></p><p><font color=\"#000000\">Este predio está reparado del viento por el Cerro Los Hornos y además por tratarse de una depresión natural del terreno. Al estar en zona de estepa es muy seco y las condiciones climáticas en general son muy agradables.</font></p><p><font color=\"#000000\">Concluida nuestra caminata iniciamos el regreso a Calafate por el mismo camino con una nueva parada en el Hotel La Leona. Arribamos alrededor de las 17:00 horas.</font></p><div><br></div><p><br></p>', '', '', '3', '', '<p>2.200 AR$ traslado desde su Hotel y vianda</p>', '<p>9:00 am.  a  4:00 pm.</p>', '7 horas', 'Calzado apropiado zapatillas o botas de trekking, campera o abrigo gorro y crema solar.', 'Guía durante todo el recorrido.', '', '', '', 'https://www.tripadvisor.es/Attraction_Review-g312851-d1724350-Reviews-La_Leona_Petrified_Forest-El_Calafate_Province_of_Santa_Cruz_Patagonia.html ', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1TxmTUetVZjJAt5-elTuu9uIOTrCWSuDc&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-27 01:39:38'),
(63, 'Excursion', 'Cabalgata larga Lago Argentino', 'vistas/img/excursiones//890.jpg', '<p><font color=\"#3984c6\"><b>Excursión de cuatro horas de duración partiendo desde El Calafate visitando la costa del Lago Argentino</b></font><font color=\"#000000\"> Durante su recorrido disfrutarán de la fauna y la flora de la región, en el transcurso de la excursión se ofrecerá un pic-nic frente al lago</font>.</p><div><br></div>', '<p><font color=\"#000000\"><span style=\"caret-color: rgb(0, 0, 0);\">La Cabalgata Larga es una cabalgata bordeando la costa del Lago Argentino.</span></font></p><p><font color=\"#000000\"><span style=\"caret-color: rgb(0, 0, 0);\">Durante esta cabalgata se realiza en la Estepa Patagónica, donde podremos apreciar la fauna y la flora del lugar podrá tener frente a sus ojos una maravillosa vista de la Cordillera de los Andes. Comenzándote a buscar por el hotel donde este alojado te trasladarán hasta la caballeriza donde te estarán esperando los caballos para iniciar un paseo de 4 horas, en la excursión podrás observar arbustos y coirones frente a la costa del Lago Argentino más pudiendo observar la Garganta del Diablo, donde inicia el Brazo Norte del Lago Argentino. Se podrán ver aves que anidan en la zona. La excursión, viene acompañada de un picnic de fiambres, frutas, y bebidas frente a la costa del Lago. De regreso a la caballeriza podremos obtener una vista panorámica de El Calafate desde los cerros. Por El Covid el servicio de picnic está suspendido. </span></font></p><p><font color=\"#000000\"><span style=\"caret-color: rgb(0, 0, 0);\">Desde la caballeriza emprenderemos el regreso a los hoteles arribando a estos a las 16.00 horas.</span></font></p><p><br></p><div><br></div>', '', '', '16', '', '', '<p>11:00 a.m.  a  3:00 p.m</p>', '4 horas', 'Calzado apropiado zapatillas o botas de trekking, campera o abrigo gorro y crema solar.', 'Traslado desde su Hotel, guía, picnic', '', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g312851-d8445021-Reviews-Cabalgata_en_Patagonia-El_Calafate_Province_of_Santa_Cruz_Patagonia.html ', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1TxmTUetVZjJAt5-elTuu9uIOTrCWSuDc&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-27 01:41:31'),
(64, 'Excursion', 'Balcones de El Calafate Tirolesa', 'vistas/img/excursiones/64/292.jpg', '<p>Balcones del Calafate en el Cerro Wuyliche es una Excursión de mediodía con maravillosas vistas a el Lago Argentino, la Cordillera de los Andes y a la ciudad de El Calafate se podrá ver el Cerro Fitz Roy. Una experiencia inolvidable en Tirolesa te hará descender hasta en la Estancia Wuyliche donde podrán almorzar o tomar un té.<br></p>', '<p>Traslado desde el hotel El Calafate en 4X4 al cordón Huyliche, hasta punto panorámico de las Cordillera de los Andes, donde podrás observar la estepa patagónica y el Lago Argentino. Si está despejado, podremos apreciar El Cerro Fitz Roy, y el vuelo de lo Cóndores. En la cima haremos nuestro stop fotográfico, realizaremos un descenso de los vehículos para realizar una pequeña caminata hasta el filo de los Balcones. Una vez en la cima, dividiremos el grupo en 3 grupos mas chicos, en base a la opción de descenso elegida, para terminar en la base a almorzar o tomar el Te.&nbsp;&nbsp;<br></p>', '6.400', '6.500', '15', '6.400', '', '<p>10:00 am.  a  1:30 pm.</p><p>3:00 p.m.  a  6:30 p.m.</p>', '3 horas y media', 'Peso máximo 100 kg, edad mínima 12 años, condición física y de salud buena, no tener problemas de columna y cuello, Calzado apropiado zapatillas o botas de trekking, campera o abrigo gorro y crema solar.', 'Traslado, guía, seguro, equipo, almuerzo (primer turno), merienda (segundo turno)', '', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g312851-d1967568-Reviews-Calafate_Extremo-El_Calafate_Province_of_Santa_Cruz_Patagonia.html ', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=17Py3bzL-GDVNFmWwfl-mwKa4joavR92a&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-27 01:43:38'),
(65, 'Excursion', 'Full Day Chaltén Trekking Pro', 'vistas/img/excursiones/65/685.jpg', '<p>Se parte desde El Calafate parando en distintos puntos panorámicos, desde la Estancia el Pilar en El Chalten se realiza un trekking donde podremos ver el Glaciar Piedras Blancas, El Monte Fitz Roy, la Laguna Capri. El recorrido es de aproximadamente seis horas pudiendo observar hermosos paisajes. Incluye almuerzo.</p><p><br></p>', '<p>Chaltén Full Day: Trekking PRO</p><p><br></p><p>Trekking en la zona de Chaltén, que tiene una duración  de 6 horas por los senderos de <span style=\"font-size: 1rem;\">montaña junto al Río Blanco partiendo desde la  Estancia El Pilar hasta El Chaltén, pasando muy  </span>próximo<span style=\"font-size: 1rem;\"> a el Glaciar Piedras Blancas, Campamento Poincenot, Monte Fitz Roy y Laguna Capri. </span></p><p>Partiendo a las 6.50 desde El Calafate en el camino podremos Haremos distintas paradas en miradores y ver el Cerro Fitz Roy y Cerro Torre. </p><p>Es una excursión donde los participantes deben tener una muy buena condición física (se hará una evaluación física por el Guía antes de comenzar, (en caso del guía ver que no se está capacitado se tomará la decisión de reemplazar la excursión de trekking Pro por la Excursión FULL DAY CHALTEN CON ALMUERZO sin objeciones, devolviendo la diferencia de costo al pasajero). </p><p>R<span style=\"font-size: 1rem;\">ecorriendo en auto Valle del Río de las Vueltas llegaremos hasta Estancia El Pilar a unos 15 km de El Chaltén. En todo momento estarán acompañados por un guía de montaña. </span></p><p>Desde Estancia el Pilar se inicia el trekking guiado de 6 horas por los senderos de montaña junto al Río Blanco en dirección a El Chaltén, pudiendo divisar el Glaciar Piedras</p><p>Blancas, Campamento Poincenot y la Laguna Capri, el Cerro Fita Roy y el Cerro Torre. La excursión incluye almuerzo</p><p>Es indispensable tener la indumentaria apropiada para poder realizar el <span style=\"font-size: 1rem;\">trekking en la montaña.</span></p><p>A las 5:00 p.m. estaremos de regreso en la ciudad de El Chaltén para emprender el recorrido de vuelta a El Calafate, donde arribarán a las 8:00 p.m.</p><div><br></div>', '', '', '', '', '', '<p>6:50 am.  a  8:00 pm.</p>', '13 horas.', 'Tener buen estado Físico, calzado apropiado zapatillas o botas de trekking, campera o abrigo gorro y crema solar.', 'Traslado desde tu hotel, almuerzo, guía, trekking por el bosque desde estancia El Pilar hasta El Chaltén. ', '', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g316035-d552856-Reviews-Patagonia_Hikes-El_Chalten_Province_of_Santa_Cruz_Patagonia.html', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1Fq4-iIdwL6O-lW5Wme7wi7gqdXjAzC44&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-27 01:49:25'),
(66, 'Excursion', 'Trekking diario Lago Roca', 'vistas/img/excursiones/66/263.jpg', '<p><font color=\"#3984c6\"><b>Excursión dentro del Parque Nacional Los Glaciares ubicado a 70 km de El Calafate</b></font><font color=\"#000000\">, desde aquí se puede divisar Glaciar Moreno, podrás observar la flora y fauna, incluye un almuerzo en un lugar con espectaculares vistas.</font><br></p>', '<p><font color=\"#000000\">Se parte desde El Calafate a las 9:00 Am. Luego de una hora de viaje arribaremos a los corrales de la Estancia Lago Roca, desde donde partiremos e iniciaremos la primera hora</font></p><p><font color=\"#000000\">de caminata para más tarde llegar al principal Mirador de El Glaciar Perito Moreno. Allí, permaneceremos unos momentos a contemplar esta increíble y única maravilla, al igual</font></p><p><font color=\"#000000\">que la fauna y |ora de la zona, y los infinitos cielos patagónicos.</font></p><p><font color=\"#000000\">Luego, sigue nuestra caminata hacia el campamento Río Rico, (1 hora más de trekking) faldeando el cordón de los cristales, donde nos espera un típico almuerzo patagónico:</font></p><p><font color=\"#000000\">riquísimos bifes al disco con ajo, vino tinto, jugo o agua (si hay algún vegetariano les preparamos un menú especial que consiste en una calabaza rellena).</font></p><p><font color=\"#000000\">Después del almuerzo y un buen descanso, retomamos el trekking por 1 hora más hacia los corrales de la estancia, para tomar el transfer y regresar al El Calafate a las 17:00 hs.</font></p><p><font color=\"#000000\">La duración total del trekking es de 3 horas.</font></p><div><br></div>', '', '', '', '', '', '<p>8:30 am.  a  5:00 pm.</p>', '8.00 horas', 'Calzado apropiado zapatillas o botas de trekking, campera o abrigo gorro y crema solar.', 'Traslado desde y hacia su hotel. Guía durante el recorrido, bastones o raquetas de nieve y almuerzo (bifes al disco)', '', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g312851-d10179357-Reviews-Lago_Roca-El_Calafate_Province_of_Santa_Cruz_Patagonia.html ', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1Fq4-iIdwL6O-lW5Wme7wi7gqdXjAzC44&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-27 01:53:29'),
(67, 'Excursion', 'Cabalgata Lago Roca', 'vistas/img/excursiones/67/203.jpg', '<p>La Cabalgata Lago Roca es una excursión de todo el día dentro del Parque Nacional los Glaciares en la Estancia Lago Roca, ahí se prepararán los caballos para realizar una cabalgata hacia el mirador de El Glaciar Moreno, para dirigirse luego al campamento donde se almorzará.<br></p>', '<p style=\"margin: 0in 0in 15pt; text-align: justify;\"><font color=\"#3984c6\"><b>La cabalgata en Lago Roca es una excursión de todo el día,</b></font><font color=\"#000000\"> recogemos a los pasajeros a las 8.30 hs y nos dirigimos hacia la estancia Lago Roca por la ruta Provincial N 15 a unos 42 Km. de el Calafate.</font></p><p style=\"margin: 0in 0in 15pt; text-align: justify;\"><font color=\"#000000\">Saldremos de la zona esteparia para llegar a la zona intermedia (ecotono) en donde se encuentra el punto de partida en la estancia ,ensillados los caballos, montaremos para comenzar la travesía hacia la zona cordillerana, interpretando flora y fauna del lugar; Tendremos un recorrido de 1 hora hacia el mirador principal donde nos espera la panorámica del Glaciar Perito Moreno, el Lago Roca ,Cerro Moreno ,Brazo Sur ,Cerro Frías ,Península de Magallanes ,Vale del río Camiseta , la inmensidad del lugar y la particularidad de no encontrarnos con nadie.</font></p><p style=\"margin: 0in 0in 15pt; text-align: justify;\"><font color=\"#000000\">Desde el mirador tendremos una hora y media más de cabalgata faldeando el Cordón de Los Cristales, y así  llegar al campamento los Ñires, donde almorzarnos unos bifes al disco con cebolla y ajo; degustaremos un buen vino , jugo o agua.</font></p><p style=\"margin: 0in 0in 15pt; text-align: justify;\"><font color=\"#000000\">Estaremos en el campamento  aproximadamente unas 2 hs, entre el almuerzo y el descanso y tendremos 1 hora más de cabalgata hacia la estancia ,  regresando al pueblo alrededor de las 17 hs.</font></p><p style=\"margin: 0in 0in 15pt; text-align: justify;\"><font color=\"#000000\">La cabalgata incluye: traslado, almuerzo, bebidas, polainas, capa para la lluvia </font></p><div style=\"text-align: justify;\"><br></div>', '0', '0', '', '0', '', '<p>8:30 am.  a  5:00 pm.</p>', '8.30 horas', 'Calzado apropiado zapatillas o botas de trekking, campera o abrigo gorro y crema solar.', 'Traslado desde el hotel, guía, almuerzo capa de lluvia, y seguro.', '', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g312851-d2481812-Reviews-Cabalgata_del_Glaciar-El_Calafate_Province_of_Santa_Cruz_Patagonia.html ', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1bClLAbBnlFphzISZTkAP0U_wcV8WYyi1&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-27 01:57:15'),
(68, 'Excursion', 'Cabalgata Estancia Alice', 'vistas/img/excursiones//116.jpg', '<p><font color=\"#3984c6\"><b>Esta Cabalgata en la Estancia Alice ubicada 20 km de la ciudad de El Calafate camino al Glaciar Moreno frente al Lago Argentino</b></font><font color=\"#000000\"> tiene una duración de 45 minutos cabalgando hacia el Río Centinela la Laguna de los Pájaros y la costa del Lago, incluye show de acarreo de ovejas con perros y la visita a los corrales. </font><br></p>', '<div><font color=\"#000000\">Comenzamos con una recepción con mate, chocolate, té y productos caseros y tradicionales y en nuestro antiguo Galpón, construido en el año 1912. </font></div><div><font color=\"#000000\">Luego los acompañamos a conocer la Estancia y aprender sobre la historia, este lugar y las típicas actividades de la Patagonia: caminata guiada hasta el Lago Argentino, arreos de ovejas con perros Kelpies y caballos, demostraciones de esquila en el Galpón para aprender más sobre la producción lanera en esta zona, y otras típicas actividades rurales forman parte de nuestra propuesta.</font></div><div><font color=\"#000000\">Y para finalizar el día, unas ricas empanaditas caseras y el típico cordero patagónico, hecho en casa y al asador.</font></div><div><font color=\"#000000\">Los esperamos para vivir esta experiencia de Día de campo en la Patagonia y disfrutar la naturaleza y la inmensidad de esta estancia.</font></div><div><font color=\"#000000\">Horario aproximado de las actividades: de 17:00 a 21:30 hs.</font></div><div><br></div>', '', '', '', '', '', '<p>4:15 pm.  a  7:30 pm.</p>', '3.00 horas', 'Calzado apropiado zapatillas o botas de trekking, campera o abrigo gorro y crema solar.', 'Guia y Snack', '', '', '', 'https://www.tripadvisor.com.ar/Hotel_Review-g312851-d1049107-Reviews-El_Galpon_del_Glaciar-El_Calafate_Province_of_Santa_Cruz_Patagonia.html', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1sFz9U9XjREu8k8c_DNohnWFeGdZo1pls&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-27 02:02:25'),
(69, 'Excursion', 'Estancia 25 de Mayo', 'vistas/img/excursiones/69/947.jpg', '<p>En una estancia de 17.000 ha a pocos Km de El Calafate, la excusión comprende la vista del arreo de ovejas, esquila y visita de los corrales. Termina con una cena de cordero patagónico.<br></p>', '<p>Estancia 25 de mayo</p><p><br></p><p>Estancia 25 de Mayo cuenta con 17.000 hectáreas de campo, y su antiguo casco queda ubicado a pasos del centro de El Calafate, un lugar ideal donde poder descansar y disfrutar del paisaje al pie del Cerro Calafate, respirando el más puro aire patagónico. Una propuesta para descubrir el costado rural del destino, en una de sus grandes estancias pioneras. Tarde de campo con cena show. 18:00 hs. Recepción y bienvenida con mate, tortas fritas y café carretero. Arreo de ovejas con perros y Demostración de esquila. Visita al Antiguo Galpón de Esquila, corrales y baños de ovejas de la Estancia. Caminata por sendero Arroyo Calafate con interpretación de flora. Degustación de vinos en Mirador del Arroyo. Caminata por la huerta orgánica y viveros de la Estancia. Cena en el Restaurante “El Quincho”. Entrada: Empanadas criollas y escabeche de berenjenas. Principal: Parrilla de Cordero al asador y ensaladas de la huerta. Postre de la casa. Show Folklórico de artistas locales, recorrido por las danzas típicas del país. 22:30 hs. Fin de la visita.</p><p><br></p><p><br></p>', '', '', '22', '', '<p>Traslado desde el Hotel 490 ARS</p>', '<p>5:30 pm.  a  11.00 pm.</p>', '5.30 horas', '', 'Cena Show, caminata y demostración de esquila con acarreo de ovejas.', 'Bebidas', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g312851-d1937955-Reviews-Estancia_25_de_Mayo-El_Calafate_Province_of_Santa_Cruz_Patagonia.html', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1hEjlbcKhpXD3OJ2m8DVHFX6n02FUfjM7&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-27 02:15:04'),
(70, 'Excursion', 'Estancia Alice El Galpon', 'vistas/img/excursiones/70/523.jpg', '<p>Excursión que se lleva acabo a 20 km de El Calafate camino al Glaciar Moreno. Se disfruta el arreo de ovejas con perros, demostración de esquila y trekking en la laguna de los pájaros. Incluye una cena con cordero patagónico.</p><p><br></p>', '<p>Estancia Alice – El Galpón</p><p><br></p><p>Comenzamos con una recepción con mate, chocolate, té y productos caseros y tradicionales y en nuestro antiguo Galpón, construido en el año 1912. </p><p><span style=\"font-size: 1rem;\">Luego los acompañamos a conocer la Estancia y aprender sobre la historia, este lugar y las típicas actividades de la Patagonia. caminata guiada hasta el Lago Argentino, arreos de ovejas con perros Kelpies y caballos, demostraciones de esquila en el Galpón para aprender más sobre la producción lanera en esta zona, y otras típicas actividades rurales forman parte de nuestra propuesta.</span></p><p>Y para finalizar el día, unas ricas empanaditas caseras y el típico cordero patagónico, hecho en casa y al asador.</p><p>Te estarán esperando para vivir esta experiencia de Día de campo en la Patagonia y disfrutar la naturaleza y la inmensidad de esta estancia.</p><p>Horario aproximado de las actividades: de 17:00 a 21:30 hs.</p><p><br></p>', '', '', '', '', '<p>Traslado desde y hacia su Hotel</p><p><br></p>', '<p>4:30 pm.  a  10:00 pm.</p>', '4.30 horsa', '', 'Cena con cordero patogénico visita a la estancia, esquila y acarreo de ovejas con perros.', 'Bebidas', '', '', 'https://www.tripadvisor.com.ar/Hotel_Review-g312851-d1049107-Reviews-El_Galpon_del_Glaciar-El_Calafate_Province_of_Santa_Cruz_Patagonia.html ', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1XIivHND74lcuFJ4MUmBNhvb2lCH7xngv&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-27 02:17:42'),
(71, 'Excursion', 'Ríos de Hielo', 'vistas/img/excursiones/71/605.jpg', '<p>Navegación en la cual se visita El Glaciar Spegazzini, navegando entre Iceberg de distintos tamaños y colores que deleitarán nuestras vistas. La excursión comienza en el Puerto Banderas, si quieres contratar el servicio de traslado debes adicionarle el costo del mismo.<br></p>', '<p><font color=\"#000000\">Espectacular navegación al corazón de los hielos continentales. Parte desde el puerto privado de Punta Bandera, ubicado al 47 Km. de la ciudad a las 13:30 horas, siendo el horario de embarque a las 13:00 horas.</font></p><p><font color=\"#000000\">Una vez a bordo los pasajeros serán informados de las normas de seguridad y las condiciones de navegación.</font></p><p><font color=\"#000000\">La actividad se desarrolla en un moderno catamarán a través del Brazo Norte del Lago Argentino hasta llegar al canal Upsala, donde nos encontraremos con gran cantidad de témpanos, la embarcación navegara entre los mismos realizando paradas para disfrutar de esta maravillosa experiencia, siguiendo con la navegación el catamarán se aproximara al Glaciar Upsala para tener una vista panorámica del mismo, luego navegaremos el Canal Spegazzini, donde podremos observar el Glaciar Seco (colgante), hasta llegar al frente del Glaciar Spegazzini, el más alto del Parque Nacional, la vista es impresionante el glaciar llega a los 143 metros de altura, con posterioridad se emprende el regreso al puerto de partida. El recorrido puede ser modificado en función de la condición climática y de seguridad por decisión del capitán de la embarcación.</font></p><p><font color=\"#000000\">No incluye: Transporte al puerto ida y vuelta desde su alojamiento. (opcional) recuerde contratar el traslado si no cuenta con vehículo. O si lo desea puedes reservar el transfer al mismo </font></p><p><font color=\"#000000\">Día de salida: octubre: impares, noviembre y diciembre: pares, enero: impares, febrero y marzo: pares.</font></p><div><br></div>', '', '', '', '', '<p>Traslado terrestre desde su hotel.</p><p><br></p>', '<p>06.50 a.m.  a  03.30 p.m.</p>', '8.00 hoas', 'Calzado apropiado zapatillas o botas de trekking, campera o abrigo gorro y crema solar.', 'Servicio de guía, y navegación frente a los Glaciares Upsal y Spegazzini.', 'Entrada al Parque Nacional', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g312851-d9834872-Reviews-Rios_de_Hielo-El_Calafate_Province_of_Santa_Cruz_Patagonia.html', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1XXyh-cK_DLrixh-e7g_iMwzrX652TVkE&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-27 02:20:12'),
(72, 'Excursion', 'Full Day Chaltén Navegación Viedma', 'vistas/img/excursiones/72/735.jpg', '<p>Excursión que parte desde El Calafate visitando El Chaltén y disfrutando distintas vistas panorámicas, incluye un almuerzo en restaurant y La navegación frente al Glaciar Viedma, además se visita el Chorrillo del Salto una cascada natural a pocos kilómetros de la ciudad.</p><p><br></p>', '<p>Excursión relajada en la que se visita el centro de Chaltén y puntos de interés cercanos a la ciudad. Incluye almuerzo en restaurant y navegación hacia el Glaciar Viedma.</p><p>A las 7 de la mañana se comienza el recorrido por los hoteles para salir en dirección a la zona norte del Parque Nacional Los Glaciares (aún sin explorar) y la Capital Nacional de Trekking.</p><p>En nuestro recorrido haremos varias paradas: en la cabecera del Lago Argentino donde podremos observar el lago más grande de nuestro país y la Cordillera de los Andes.</p><p>Llegaremos al parador histórico la Leona donde podremos observar un pequeño museo y consumir algún refrigerio. Continuando haremos una parada en el mirador del Glaciar</p><p>Viedma para poder observarlo de cerca, así como también poder apreciar algunas estancias típicas de la zona y el imponente Cerro Fitz Roy y Cerro Torre.</p><p><br></p><p>Después de haber recorrido 220 kms Ingresaremos hacia el Chaltén por la ruta Nº 23, recorreremos el emblemático “pueblito de montaña” y continuaremos nuestro recorrido hacia el Chorrillo del Salto de más de 40 más de altura. En este lugar realizaremos una caminata por el bosque de unos 15 minutos y permaneceremos ahí por otros tantos. Regresaremos a almorzar en el restaurant del Pudú Lodge en la localidad de El Chaltén, el cual está incluido sin bebidas. Luego de almorzar, tendremos tiempo para recorrer Chaltén por una media hora y visitar las casas de artesanías locales. De ahí continuaremos hacia Bahía Túnel en donde embarcaremos para navegar el Lago Viedma, frente al Glaciar más grande del Parque Nacional. A las 17:30 hs. comenzaremos a regresar a El Calafate para llegar a las 20:30 hs. </p><p>La navegación en el Lago Viedma está sujeta a las condiciones climáticas del día por lo que, en caso de cancelación de este servicio por fuertes vientos, se cambiará por el Full Day Chaltén Trekking Libre con almuerzo en restaurant y se hará el reintegro de la navegación.</p><p><br></p>', '', '', '', '', '', '<p>6.50 a.m. a 8.30 p.m</p>', '13.30', 'Calzado apropiado zapatillas o botas de trekking, campera o abrigo gorro y crema solar.', 'Traslado desde su hotel, almuerzo en restaurante Rancho Grande, servicio de guía, y trekking por la ciudad', 'Bebidas', '', '', 'https://www.tripadvisor.com.ar/Attraction_Review-g316035-d552855-Reviews-Cerro_Fitz_Roy-El_Chalten_Province_of_Santa_Cruz_Patagonia.html', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1xRyscsOhvTLfN-EllkcHrboWwNV-dfLW&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-03-27 02:22:40'),
(75, '', 'Full Day Chaltén Invierno', 'vistas/img/excursiones//967.jpg', '<p><font color=\"#3984c6\"><b>Excursión solamente de invierno</b></font><font color=\"#000000\">, partiendo desde El Calafate temprano por la mañana incluye paradas en La Leona y en distintos puntos panorámicos siempre acompañado por un guía visitando el mirador del Glaciar Viedma (tan Importante como El glaciar Moreno) y el Centro de interpretación de Parques Nacionales incluye una caminata hasta el Chorrillo del Salto, el almuerzo está incluido en el restaurant Rancho Grande.</font><br></p>', '<p><font color=\"#3984c6\"><b>Excursión invernal de día completo en la que se visita la ciudad de El Chaltén partiendo desde El Calafate.</b></font><font color=\"#000000\"> Incluye paradas y caminatas tranquilas, vistas a miradores, comidas en restaurant y tiempo libre para recorrer el típico pueblo de montaña, siempre acompañados por un guía.</font></p><p><font color=\"#000000\">El recorrido por los hoteles en El Calafate comienza a las 8:00 am para luego dirigirse hacia la mítica Ruta 40. Esta ruta bordea el Lago Argentino, atraviesa el Río La Leona, y permite llegar, luego de 1 hora 15 minutos, al antiguo hotel de ruta Parador La Leona (casi un museo de la Ruta 40), donde podrán tomar unas ricas tortas caseras. Posteriormente, se continúa bordeando el Lago Viedma, teniendo la Cordillera de los Andes de fondo y, antes de llegar al Chaltén, se hará una parada en el mirador del Glaciar Viedma. Desde aquí se podrá apreciar una bellísima panorámica del Glaciar Viedma, la Cordillera de los Andes y los emblemáticos Cerro Fitz Roy y cerro Torre.</font></p><p><font color=\"#000000\">Tras 3 horas de viaje y 220 km se arriba a la villa de montaña de El Chaltén.</font></p><p><font color=\"#000000\">La primera actividad es visitar el Centro de Interpretación de Parques Nacionales. Posteriormente, se realizará una caminata guiada hacia el Mirador para luego dirigirse a </font></p><p><font color=\"#000000\">almorzar en un restaurant del centro de la ciudad. Finalizado el almuerzo, se visitará el Chorrillo del Salto famosa cascada ubicada a pocos minutos del pueblo, donde se realizará una caminata relajada por el bosque.</font></p><p><font color=\"#000000\">Para terminar, se regresa a El Chaltén, donde tendrá tiempo libre para recorrer por su cuenta durante 30 minutos el casco céntrico y luego emprender el regreso a su hotel del </font></p><p><font color=\"#000000\">Calafate, arribando a las 19:00.</font></p><div><br></div>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '2021-03-29 00:47:25'),
(76, 'Buses', 'Bus El Calafate a El Chaltén   Ida 8:00 am.', 'vistas/img/excursiones/76/798.jpg', '<p>Traslado El Calafate a El Chaltén buses de última generación.</p>', '<p>Salida desde la terminal de El Calafate rumbo a la ciudad de El Chalten con una parada intermedia en El Parador La Leona de 20 minutos.</p><p>Este servicio esta disponible todo el año.</p>', '2.400', '2.470', '43', '', '', '<p>8:00 am.  a  11:00 am.</p>', '3 horas', '', '', 'Tasa de terminal', '', '', '', '', 1, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1lcRzDsNpblahpF8QLB3wcozjdSLWLmCJ&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-04-06 05:52:15'),
(77, 'Buses', 'Bus El Calafate a El Chaltén Ida 1:00 pm.', 'vistas/img/excursiones/77/281.jpg', '<p>Buses de última generación.</p>', '<p>Servicio disponible entre noviembre y abril, saliendo desde la terminal de El Calafate con una parada intermedia en el Parador La Leona de 20 minutos.</p>', '2.400', '2.470', '26', '', '', '<p>1:00 pm.  a  4:00 pm.</p>', '3 horas', '', '', 'Tasa de terminal.', '', '', '', '', 1, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1lcRzDsNpblahpF8QLB3wcozjdSLWLmCJ&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-04-06 06:08:13'),
(78, 'Buses', 'Bus El Calafate a El Chaltén  Ida 6:00 pm.', 'vistas/img/excursiones/78/515.jpg', '<p>Traslado desde la terminal de El Calafate a El Chalten en buses de última generación.</p>', '<p>Salida desde la terminal de El Calafate con una parada intermedia de 20 minutos en el Parador La Leona.</p><p>Servicio entre los meses de noviembre y abril.</p>', '2.400', '2.470', '27', '', '', '<p>6:00 pm.  a  9:00 pm.</p>', '3 horas', '', '', 'Tasa de terminal', '', '', '', '', 1, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1lcRzDsNpblahpF8QLB3wcozjdSLWLmCJ&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-04-06 06:12:54'),
(79, 'Buses', 'Bus El Calafate a El Chaltén  Ida 9:00 pm. ', 'vistas/img/excursiones/79/424.jpg', '<p>Traslado en linea Regular desde la terminal de El Calafate en buses de última generación.</p>', '<p>Salida desde el Calafate durante los meses de diciembre a abril. parada en el Parador la Leona 20 minutos.</p>', '2.400', '2.470', '22', '', '', '<p>9:00 pm.  a  12.00 pm.</p>', '3 horas', '', '', 'Tasa de terminal.', '', '', '', '', 1, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1lcRzDsNpblahpF8QLB3wcozjdSLWLmCJ&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-04-06 06:44:07'),
(80, 'Buses', 'Bus El Chaltén a El Calafate Ida 8:00 am.', 'vistas/img/excursiones/80/896.jpg', '<p>Traslado en linea regular desde la ciudad de El Chaltén a El Calafate</p>', '<p>Linea regular entre los dos puntos, con una parada intermedia en parador La Leona, y la posibilidad de descenso en el Aeropuerto.</p>', '2.400', '2.470', '32', '', '', '<p>8:00 am.  a  11:15 am.</p>', '3 horas 30 minutos', '', 'Posibilidad de bajar en el Aeropuerto', 'Tasa de Terminal', '', '', '', '', 1, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1lcRzDsNpblahpF8QLB3wcozjdSLWLmCJ&hl=es\" width=\"640\" height=\"480\"></iframe>', '2021-04-06 07:23:46'),
(81, 'Buses', 'Bus El Chaltén a El Calafate Ida 1:00 pm.', 'vistas/img/excursiones/81/393.jpg', '', '', '2.400', '2.470', '28', '', '<p>Bajar Aeropuerto de El Calafate</p>', '<p>1:00 pm.  a  4:30 pm.</p>', '3:30 minutos', '', '', 'Tasa de Terminal', '', '', '', '', 1, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1lcRzDsNpblahpF8QLB3wcozjdSLWLmCJ&hl=es\" width=\"640\" height=\"480\"></iframe>', '2021-04-06 07:29:48'),
(82, 'Buses', 'Bus El Chalten a El Calafate Ida 6:00 pm.', 'vistas/img/excursiones/82/730.jpg', '', '', '2.400', '2.470', '43', '', '<p>Descenso Aeropuerto de El Calafate</p>', '<p>6:00 pm.  a  9:30 pm.</p>', '3:30 minutos', '', '', 'Tasa de Terminal', '', '', '', '', 1, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1lcRzDsNpblahpF8QLB3wcozjdSLWLmCJ&hl=es\" width=\"100%\" height=\"480\"></iframe>', '2021-04-06 07:35:02'),
(83, 'Buses', 'Bus El Calafate a Río Gallegos', 'vistas/img/excursiones/83/270.jpg', '', '', '2.000', '', '35', '', '', '', '4 horas', '', '', 'Tasa de terminal', '', '', '', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1256109FOXVeGyMsFEYjsCY7l74hJalfx&hl=es\" width=\"640\" height=\"480\"></iframe>', '2021-04-09 14:12:13'),
(84, 'Buses', 'Bus El Calafate a Ushuaia', 'vistas/img/excursiones/84/756.jpg', '', '', '7.000', '7.500', '0', '', '', '', '', '', '', 'Tasa de terminal', '', '', '', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1JVAgpHShVJCN5obw71l5m_i87dl3L17C&hl=es\" width=\"640\" height=\"480\"></iframe>', '2021-04-09 14:13:57'),
(85, 'Buses', 'Bus El Calafate a Punta Arenas', 'vistas/img/excursiones/85/381.jpg', '', '', '7.000', '7.500', '0', '', '', '', '12 horas', '', '', 'Tasa terminal', '', '', '', '', 0, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1LQwzUvDqB_PNfMMnxNnFrVdUJg5Cpxp2&hl=es\" width=\"640\" height=\"480\"></iframe>', '2021-04-09 14:15:39'),
(89, 'Buses', 'Bus El Chaltén a El Calafate 9:00 pm.', 'vistas/img/excursiones/89/577.jpg', '<p>Traslado desde la terminal de El Chalten a <span style=\"font-size: 1rem;\">El Calafate </span><span style=\"font-size: 1rem;\">en buses de última generación.</span></p>', '<p>Salida desde la terminal de El Chaltén rumbo a la ciudad de El Calafate con una parada intermedia en El Parador La Leona de 20 minutos.</p><div><br></div>', '2.400', '2.470', '', '', '', '', '', '', '', 'Tasa de terminal', '', '', '', '', 1, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1lcRzDsNpblahpF8QLB3wcozjdSLWLmCJ&hl=es\" width=\"640\" height=\"480\"></iframe>', '2021-05-16 20:48:30'),
(90, 'Buses', 'Bus El Calafate o El Chaltén a Los Antiguos o Perito Moreno', 'vistas/img/excursiones//504.jpg', '', '', '10.000', '12.000', '', '', '', '', '', '', '', 'Tasa de terminal', '', '', '', '', 1, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1kKVLj8cygdXp36_FrGLm8Zo7ApOGjUS-&hl=es\" width=\"640\" height=\"480\"></iframe>', '2021-05-16 21:19:52'),
(91, 'Buses', 'Bus El Calafate o El Chaltén a San Carlos de Bariloche', 'vistas/img/excursiones/12.000/127.jpg', '', '', '12.000', '13.000', '26', '', '', '', '', '', '', 'Tasa de terminal', '', '', '', '', 1, '<iframe src=\"https://www.google.com/maps/d/embed?mid=1nZdK-3Pbty29fiB__YkT0DT9WPbggoqd&hl=es\" width=\"640\" height=\"480\"></iframe>', '2021-05-16 21:25:24'),
(92, 'Buses', 'Traslado Hotel Aeropuerto', 'vistas/img/excursiones/800/409.jpg', '', '', '800', '1.000', '', '500', '', '', '40 minutos', '', '', '', '', 'De 0 a 8 Años', '', '', 1, '', '2021-05-16 21:40:03'),
(93, 'Buses', 'Traslado Aeropuerto Hotel', 'vistas/img/excursiones/800/856.jpg', '', '', '800', '1.000', '', '500', '', '', '', '', '', '', '', 'de 0 a 8 Años', '', '', 1, '', '2021-05-16 21:42:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frecuentes`
--

CREATE TABLE `frecuentes` (
  `id` int(11) NOT NULL,
  `pregunta` text NOT NULL,
  `respuesta` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `frecuentes`
--

INSERT INTO `frecuentes` (`id`, `pregunta`, `respuesta`, `fecha`) VALUES
(1, '¿Cómo puedo cancelar o modificar una reserva?', '<span style=\"font-size: 14px;\"><span style=\"font-size: 14px; background-color: rgb(255, 255, 255);\"><font face=\"Times New Roman\" style=\"\"><span style=\"color: rgb(0, 0, 0); font-family: Helvetica;\">Si se puede, cancelar o modificar la misma si la haces con una antelación de 72 horas de la </span><span style=\"font-family: Helvetica;\"><font color=\"#000000\">fecha de inicio de la excursión. Si deseas cancelar o modificar deberás ponerte en contacto vía mail a&nbsp;</font><b style=\"\"><font color=\"#6badde\">info@alwaysglaciers.com</font></b><font color=\"#000000\">&nbsp;.</font></span><br><span style=\"color: rgb(0, 0, 0); font-family: Helvetica;\">\r\nLa cancelación antes de los 3 días no tendrá cargos. La modificación antes de los 3 días del inicio del servicio estará sujeta a la disponibilidad del Servicio y sólo se procederá a modificar el servicio contratado previa autorización expresa por el Prestador. En el caso de cancelar o modificar dentro de los 3 días del inicio del servicio, no habrá devolución alguna del importe abonado, sin perjuicio de los acontecimientos que pudieran haber llevado a la cancelación. Incluido&nbsp;en este plazo eventos de fuerza mayor. En el caso de no-show no se tendrá derecho reclamar, aún en casos de fuerza mayor.</span></font></span></span><font face=\"Helvetica\"><span style=\"color: rgb(33, 37, 41); font-size: 14px;\"></span></font>', '2021-03-09 05:09:49'),
(6, '¿Puedo Reservar directamente en el El Calafate?', '<span style=\"color: rgb(33, 37, 41); font-size: 14px;\"><span style=\"font-size: 14px;\"><font face=\"Helvetica\">Si se puede, pero se recomienda reservar sus excursiones a través de nuestra web para asegurarse disponibilidad ya que los lugares pueden agotarse con anticipación sobre todo en temporada alta. Al reservar, se asegura de que las tarifas se congelen. Cuando llegue podrá también si no ha reservado por la web ponerse en contacto vía presencial en nuestras oficinas en la calle principal de la ciudad Av. del Libertador 924&nbsp;</font></span></span>', '2021-03-09 12:59:04'),
(7, '¿Es necesario tomar un servicio de traslado desde el hotel para las excursiones?', '<span style=\"color: rgb(33, 37, 41);\"><span style=\"font-size: 14px;\"><font face=\"Helvetica\">Casi todas las excursiones incluyen el servicio desde su hotel en el precio, mientras que otras lo ofrecen como un servicio opcional. Se recomienda agregar el servicio de transfer en excursiones que lo ofrecen de manera opcional. En la descripción de las excursiones se detalla si el traslado está incluido o no en el precio. De querer agregar el traslado desde su hotel en aquellas excursiones que no está incluido en la tarifa, podrá hacerlo en el proceso de la reserva.</font></span></span>', '2021-03-09 12:59:41'),
(9, '¿Existen descuentos?', '<font face=\"Helvetica\"><span style=\"font-size: 14px;\">Algunas excursiones ofrecen descuentos y todas si eres residente en Argentina y posees&nbsp;acá tu cuenta, mediante una transferencia bancaria. Los descuentos se describen en cada descripción de la excursión. Para acceder a descuentos se le solicitará que nos envié una foto de la documentación. La empresa prestadora volverá a solicitar esta documentación el día del tour y podrá negarse a prestar el servicio si los datos no concuerdan.&nbsp;</span></font>', '2021-03-09 13:00:53'),
(10, '¿Cuáles son los precios de las entradas a los parques Nacionales Los Glaciares y Parque Nacional Torres del Paine?', '<div class=\"form-group\" style=\"font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><font color=\"#000000\"></font></div><span style=\"font-size:14px;\"><font face=\"Helvetica\">Parque Nacional Los Glaciares: Argentinos AR$ 410 por persona; extranjeros AR$ 800 por persona; menores de12 AR$ 200 por persona, menores a 6 y jubilados Argentinos gratis.<br>\r\nEstudiantes con libreta AR$ 80. La entrada se abona el día de la excursión, sólo posible en efectivo y en pesos argentinos. Los descuentos a menores, jubilados y estudiantes se aplicarán sólo presentando la documentación que certifique su condición.&nbsp;<br>\r\nParque Nacional Torres del Paine en Chile es 25.000 pesos chilenos por persona Los menores de 12 años 5.000 pesos chilenos esta entrada sólo puede abonarse en efectivo y en pesos chilenos, en caso de no contar con $ chilenos puedes cambiar los mismos en la frontera Chilena.</font></span><div style=\"font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\"><span lang=\"ES-TRAD\" style=\"font-size: 10.5pt; font-family: Helvetica, sans-serif;\"><span style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><font color=\"#000000\"></font><font color=\"#8eaadb\">.</font></span></span></div>', '2021-03-09 13:01:26'),
(11, '¿Se pueden suspender por lluvia o mal tiempo Las Excursiones?', '<span style=\"color: rgb(33, 37, 41);\"><font face=\"Helvetica\"><span style=\"font-size:14px;\">Las excursiones, no se suspenden por lluvia. En el caso limite, y no muy probable por un temporal que impida la realización de la excursión, se ofrecerá la devolución del monto pagado, o un cambio de fecha.</span></font></span>', '2021-03-09 13:01:48'),
(12, '¿Argentinos o Extranjeros pueden pagar distintas tarifas?', '<span style=\"color: rgb(33, 37, 41);\"><font face=\"Helvetica\"><span style=\"font-size:14px;\">Sí hay diferencias entre las tarifas para argentinos y extranjeros. Los precios para argentinos se publican en pesos en el sitio web y los precios que se publican en dólares u otra moneda en la web son válidos para extranjeros. Podrá ver la tarifa según su nacionalidad cambiando la moneda en el sitio web en el pie de página y pagar por PayPal en dólares si es extranjero.&nbsp;</span></font></span><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">&nbsp;</span>', '2021-03-09 13:02:50'),
(13, '¿Puedo ahorrar dinero pagando las excursiones mediante transferencia bancaria?', '<div><span style=\"color: rgb(33, 37, 41); font-size: 1rem;\"><font face=\"Helvetica\"><span style=\"font-size:14px;\">Todas las excursiones te bonifican un 1,5% si tu medio de pago es por transferencia bancaria siempre que la transferencia bancaria sea desde el mismo país que la cuenta a depositar.</span></font></span><br></div>', '2021-03-09 13:03:23'),
(14, '¿Los precios expresados incluyen impuestos?', '<span style=\"color: rgb(33, 37, 41);\"><font face=\"Helvetica\"><span style=\"font-size:14px;\">Si los incluyen.</span></font></span>', '2021-03-09 13:03:43'),
(15, '¿Este es el mejor precio garantizado de la excursión?', '<p>Si lo es, es el mejor precio publicado ofrecido por el prestador del servicio, si no nuestro compromiso es devolverte la diferencia.</p>', '2021-03-29 07:16:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `id_excursion` text NOT NULL,
  `excursion` text NOT NULL,
  `imagen` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`id`, `id_excursion`, `excursion`, `imagen`, `fecha`) VALUES
(58, '7', '', '../../vistas/img/galeria/784.jpg', '2021-03-11 07:25:53'),
(78, '10', '', '../../vistas/img/galeria/377.jpg', '2021-03-11 17:54:00'),
(79, '10', '', '../../vistas/img/galeria/535.jpg', '2021-03-11 17:56:15'),
(82, '19', '', '../../vistas/img/galeria/404.jpg', '2021-03-11 18:15:09'),
(83, '19', '', '../../vistas/img/galeria/796.jpg', '2021-03-11 18:15:18'),
(84, '19', '', '../../vistas/img/galeria/869.jpg', '2021-03-11 18:15:26'),
(98, '1', '', '../../vistas/img/galeria/390.jpg', '2021-03-15 10:23:52'),
(101, '1', '', '../../vistas/img/galeria/939.jpg', '2021-03-15 10:27:12'),
(102, '1', '', '../../vistas/img/galeria/231.jpg', '2021-03-15 10:28:15'),
(103, '1', '', '../../vistas/img/galeria/897.jpg', '2021-03-15 10:31:59'),
(104, '2', '', '../../vistas/img/galeria/555.jpg', '2021-03-15 10:47:04'),
(105, '2', '', '../../vistas/img/galeria/240.jpg', '2021-03-15 10:49:00'),
(106, '2', '', '../../vistas/img/galeria/505.jpg', '2021-03-15 10:49:58'),
(107, '2', '', '../../vistas/img/galeria/780.jpg', '2021-03-15 10:50:53'),
(108, '2', '', '../../vistas/img/galeria/644.jpg', '2021-03-15 10:51:39'),
(109, '2', '', '../../vistas/img/galeria/110.jpg', '2021-03-15 10:52:26'),
(110, '2', '', '../../vistas/img/galeria/784.jpg', '2021-03-15 10:53:26'),
(111, '2', '', '../../vistas/img/galeria/862.jpg', '2021-03-15 10:54:20'),
(113, '3', '', '../../vistas/img/galeria/861.jpg', '2021-03-15 11:48:03'),
(114, '3', '', '../../vistas/img/galeria/422.jpg', '2021-03-15 11:48:07'),
(115, '3', '', '../../vistas/img/galeria/140.jpg', '2021-03-15 11:52:24'),
(116, '3', '', '../../vistas/img/galeria/108.jpg', '2021-03-15 11:52:39'),
(117, '3', '', '../../vistas/img/galeria/949.jpg', '2021-03-15 11:52:55'),
(119, '3', '', '../../vistas/img/galeria/787.jpg', '2021-03-15 11:59:43'),
(120, '3', '', '../../vistas/img/galeria/271.jpg', '2021-03-15 12:00:00'),
(121, '3', '', '../../vistas/img/galeria/389.jpg', '2021-03-15 12:03:38'),
(124, '5', '', '../../vistas/img/galeria/234.jpg', '2021-03-15 13:06:26'),
(125, '5', '', '../../vistas/img/galeria/832.jpg', '2021-03-15 13:06:42'),
(126, '5', '', '../../vistas/img/galeria/906.jpg', '2021-03-15 13:06:59'),
(127, '5', '', '../../vistas/img/galeria/977.jpg', '2021-03-15 13:07:14'),
(128, '5', '', '../../vistas/img/galeria/944.jpg', '2021-03-15 13:07:29'),
(129, '5', '', '../../vistas/img/galeria/861.jpg', '2021-03-15 13:07:32'),
(130, '5', '', '../../vistas/img/galeria/949.jpg', '2021-03-15 13:07:43'),
(131, '5', '', '../../vistas/img/galeria/650.jpg', '2021-03-15 13:07:46'),
(132, '8', '', '../../vistas/img/galeria/232.jpg', '2021-03-17 15:41:12'),
(133, '8', '', '../../vistas/img/galeria/490.jpg', '2021-03-17 15:41:20'),
(134, '8', '', '../../vistas/img/galeria/361.jpg', '2021-03-17 15:41:24'),
(135, '8', '', '../../vistas/img/galeria/502.jpg', '2021-03-17 15:41:29'),
(136, '8', '', '../../vistas/img/galeria/718.jpg', '2021-03-17 15:41:37'),
(137, '8', '', '../../vistas/img/galeria/599.jpg', '2021-03-17 15:41:39'),
(138, '8', '', '../../vistas/img/galeria/399.jpg', '2021-03-17 15:41:45'),
(139, '8', '', '../../vistas/img/galeria/943.jpg', '2021-03-17 15:41:46'),
(140, '10', '', '../../vistas/img/galeria/223.jpg', '2021-03-17 16:13:50'),
(141, '10', '', '../../vistas/img/galeria/357.jpg', '2021-03-17 16:13:59'),
(142, '10', '', '../../vistas/img/galeria/104.jpg', '2021-03-17 16:14:01'),
(143, '10', '', '../../vistas/img/galeria/781.jpg', '2021-03-17 16:14:07'),
(144, '10', '', '../../vistas/img/galeria/757.jpg', '2021-03-17 16:14:10'),
(145, '10', '', '../../vistas/img/galeria/208.jpg', '2021-03-17 16:14:19'),
(147, '18', '', '../../vistas/img/galeria/910.jpg', '2021-03-17 16:33:50'),
(148, '18', '', '../../vistas/img/galeria/543.jpg', '2021-03-17 16:33:53'),
(149, '18', '', '../../vistas/img/galeria/341.jpg', '2021-03-17 16:33:58'),
(150, '18', '', '../../vistas/img/galeria/621.jpg', '2021-03-17 16:34:06'),
(151, '18', '', '../../vistas/img/galeria/144.jpg', '2021-03-17 16:34:09'),
(152, '18', '', '../../vistas/img/galeria/499.jpg', '2021-03-17 16:34:15'),
(153, '18', '', '../../vistas/img/galeria/336.jpg', '2021-03-17 16:34:23'),
(154, '18', '', '../../vistas/img/galeria/399.jpg', '2021-03-17 16:34:23'),
(155, '18', '', '../../vistas/img/galeria/158.jpg', '2021-03-17 16:34:31'),
(156, '18', '', '../../vistas/img/galeria/469.jpg', '2021-03-17 16:34:32'),
(158, '18', '', '../../vistas/img/galeria/315.jpg', '2021-03-17 16:35:08'),
(159, '18', '', '../../vistas/img/galeria/317.jpg', '2021-03-17 16:35:16'),
(160, '20', '', '../../vistas/img/galeria/619.jpg', '2021-03-17 17:59:24'),
(161, '20', '', '../../vistas/img/galeria/452.jpg', '2021-03-17 17:59:35'),
(162, '20', '', '../../vistas/img/galeria/342.jpg', '2021-03-17 17:59:39'),
(163, '20', '', '../../vistas/img/galeria/775.jpg', '2021-03-17 18:01:22'),
(164, '20', '', '../../vistas/img/galeria/644.jpg', '2021-03-17 18:01:29'),
(165, '20', '', '../../vistas/img/galeria/465.jpg', '2021-03-17 18:01:41'),
(166, '20', '', '../../vistas/img/galeria/771.jpg', '2021-03-17 18:01:55'),
(167, '20', '', '../../vistas/img/galeria/430.jpg', '2021-03-17 18:02:03'),
(168, '20', '', '../../vistas/img/galeria/700.jpg', '2021-03-17 18:02:12'),
(169, '20', '', '../../vistas/img/galeria/483.jpg', '2021-03-17 18:02:20'),
(170, '20', '', '../../vistas/img/galeria/643.jpg', '2021-03-17 18:02:28'),
(171, '20', '', '../../vistas/img/galeria/407.jpg', '2021-03-17 18:02:44'),
(172, '23', '', '../../vistas/img/galeria/692.jpg', '2021-03-17 18:43:24'),
(173, '23', '', '../../vistas/img/galeria/806.jpg', '2021-03-17 18:43:35'),
(174, '23', '', '../../vistas/img/galeria/636.jpg', '2021-03-17 18:43:37'),
(176, '23', '', '../../vistas/img/galeria/674.jpg', '2021-03-17 18:44:11'),
(177, '23', '', '../../vistas/img/galeria/852.jpg', '2021-03-17 18:44:33'),
(178, '23', '', '../../vistas/img/galeria/835.jpg', '2021-03-17 18:44:45'),
(179, '23', '', '../../vistas/img/galeria/857.jpg', '2021-03-17 18:44:54'),
(180, '23', '', '../../vistas/img/galeria/721.jpg', '2021-03-17 18:44:58'),
(181, '23', '', '../../vistas/img/galeria/820.jpg', '2021-03-17 18:45:10'),
(182, '23', '', '../../vistas/img/galeria/883.jpg', '2021-03-17 18:45:24'),
(183, '23', '', '../../vistas/img/galeria/454.jpg', '2021-03-17 18:45:35'),
(184, '23', '', '../../vistas/img/galeria/806.jpg', '2021-03-17 18:45:42'),
(185, '4', '', '../../vistas/img/galeria/822.jpg', '2021-03-18 02:13:46'),
(186, '4', '', '../../vistas/img/galeria/114.jpg', '2021-03-18 02:13:49'),
(187, '4', '', '../../vistas/img/galeria/429.jpg', '2021-03-18 02:13:55'),
(188, '4', '', '../../vistas/img/galeria/937.jpg', '2021-03-18 02:14:02'),
(189, '4', '', '../../vistas/img/galeria/509.jpg', '2021-03-18 02:14:11'),
(190, '4', '', '../../vistas/img/galeria/170.jpg', '2021-03-18 02:14:18'),
(191, '4', '', '../../vistas/img/galeria/447.jpg', '2021-03-18 02:14:23'),
(192, '4', '', '../../vistas/img/galeria/298.jpg', '2021-03-18 02:14:33'),
(194, '4', '', '../../vistas/img/galeria/296.jpg', '2021-03-18 02:23:22'),
(195, '4', '', '../../vistas/img/galeria/528.jpg', '2021-03-18 02:23:29'),
(196, '4', '', '../../vistas/img/galeria/435.jpg', '2021-03-18 02:23:49'),
(197, '4', '', '../../vistas/img/galeria/434.jpg', '2021-03-18 02:24:07'),
(198, '25', '', '../../vistas/img/galeria/593.jpg', '2021-03-18 02:52:06'),
(199, '25', '', '../../vistas/img/galeria/182.jpg', '2021-03-18 02:52:14'),
(200, '25', '', '../../vistas/img/galeria/792.jpg', '2021-03-18 02:52:23'),
(201, '25', '', '../../vistas/img/galeria/230.jpg', '2021-03-18 02:52:27'),
(202, '25', '', '../../vistas/img/galeria/162.jpg', '2021-03-18 02:52:32'),
(203, '25', '', '../../vistas/img/galeria/394.jpg', '2021-03-18 02:52:39'),
(204, '25', '', '../../vistas/img/galeria/243.jpg', '2021-03-18 02:52:44'),
(205, '25', '', '../../vistas/img/galeria/593.jpg', '2021-03-18 02:52:49'),
(206, '25', '', '../../vistas/img/galeria/686.jpg', '2021-03-18 02:52:56'),
(207, '25', '', '../../vistas/img/galeria/888.jpg', '2021-03-18 02:53:00'),
(208, '25', '', '../../vistas/img/galeria/459.jpg', '2021-03-18 02:53:04'),
(209, '25', '', '../../vistas/img/galeria/656.jpg', '2021-03-18 02:53:08'),
(210, '26', '', '../../vistas/img/galeria/532.jpg', '2021-03-18 03:16:14'),
(211, '26', '', '../../vistas/img/galeria/681.jpg', '2021-03-18 03:16:17'),
(212, '26', '', '../../vistas/img/galeria/227.jpg', '2021-03-18 03:16:20'),
(213, '26', '', '../../vistas/img/galeria/534.jpg', '2021-03-18 03:16:23'),
(214, '26', '', '../../vistas/img/galeria/787.jpg', '2021-03-18 03:16:28'),
(215, '26', '', '../../vistas/img/galeria/887.jpg', '2021-03-18 03:16:34'),
(216, '26', '', '../../vistas/img/galeria/963.jpg', '2021-03-18 03:16:41'),
(217, '26', '', '../../vistas/img/galeria/660.jpg', '2021-03-18 03:16:44'),
(218, '26', '', '../../vistas/img/galeria/641.jpg', '2021-03-18 03:16:48'),
(219, '26', '', '../../vistas/img/galeria/488.jpg', '2021-03-18 03:16:52'),
(220, '26', '', '../../vistas/img/galeria/958.jpg', '2021-03-18 03:17:05'),
(221, '26', '', '../../vistas/img/galeria/344.jpg', '2021-03-18 03:17:10'),
(246, '27', '', '../../vistas/img/galeria/431.jpg', '2021-03-19 17:21:12'),
(247, '27', '', '../../vistas/img/galeria/548.jpg', '2021-03-19 17:21:23'),
(248, '27', '', '../../vistas/img/galeria/737.jpg', '2021-03-19 17:21:31'),
(249, '27', '', '../../vistas/img/galeria/582.jpg', '2021-03-19 17:21:33'),
(250, '27', '', '../../vistas/img/galeria/242.jpg', '2021-03-19 17:21:39'),
(251, '27', '', '../../vistas/img/galeria/548.jpg', '2021-03-19 17:21:42'),
(252, '27', '', '../../vistas/img/galeria/304.jpg', '2021-03-19 17:21:48'),
(253, '27', '', '../../vistas/img/galeria/242.jpg', '2021-03-19 17:21:51'),
(254, '27', '', '../../vistas/img/galeria/156.jpg', '2021-03-19 17:21:56'),
(255, '27', '', '../../vistas/img/galeria/270.jpg', '2021-03-19 17:21:59'),
(256, '27', '', '../../vistas/img/galeria/299.jpg', '2021-03-19 17:22:04'),
(257, '27', '', '../../vistas/img/galeria/737.jpg', '2021-03-19 17:22:07'),
(258, '28', '', '../../vistas/img/galeria/275.jpg', '2021-03-19 17:34:21'),
(259, '28', '', '../../vistas/img/galeria/511.jpg', '2021-03-19 17:34:30'),
(260, '28', '', '../../vistas/img/galeria/600.jpg', '2021-03-19 17:34:33'),
(261, '28', '', '../../vistas/img/galeria/157.jpg', '2021-03-19 17:34:38'),
(262, '28', '', '../../vistas/img/galeria/216.jpg', '2021-03-19 17:34:47'),
(263, '28', '', '../../vistas/img/galeria/546.jpg', '2021-03-19 17:34:49'),
(264, '28', '', '../../vistas/img/galeria/570.jpg', '2021-03-19 17:34:55'),
(265, '28', '', '../../vistas/img/galeria/126.jpg', '2021-03-19 17:34:58'),
(266, '28', '', '../../vistas/img/galeria/444.jpg', '2021-03-19 17:35:03'),
(267, '28', '', '../../vistas/img/galeria/202.jpg', '2021-03-19 17:35:07'),
(268, '28', '', '../../vistas/img/galeria/148.jpg', '2021-03-19 17:35:12'),
(270, '28', '', '../../vistas/img/galeria/694.jpg', '2021-03-19 17:35:20'),
(271, '29', '', '../../vistas/img/galeria/932.jpg', '2021-03-19 19:44:51'),
(272, '29', '', '../../vistas/img/galeria/412.jpg', '2021-03-19 19:45:02'),
(273, '29', '', '../../vistas/img/galeria/890.jpg', '2021-03-19 19:45:11'),
(274, '29', '', '../../vistas/img/galeria/395.jpg', '2021-03-19 19:45:19'),
(275, '29', '', '../../vistas/img/galeria/785.jpg', '2021-03-19 19:45:23'),
(276, '29', '', '../../vistas/img/galeria/861.jpg', '2021-03-19 19:45:29'),
(277, '29', '', '../../vistas/img/galeria/551.jpg', '2021-03-19 19:45:35'),
(278, '29', '', '../../vistas/img/galeria/926.jpg', '2021-03-19 19:45:44'),
(279, '29', '', '../../vistas/img/galeria/708.jpg', '2021-03-19 19:45:52'),
(280, '29', '', '../../vistas/img/galeria/320.jpg', '2021-03-19 19:45:53'),
(281, '29', '', '../../vistas/img/galeria/926.jpg', '2021-03-19 19:46:01'),
(282, '29', '', '../../vistas/img/galeria/192.jpg', '2021-03-19 19:46:04'),
(283, '30', '', '../../vistas/img/galeria/572.jpg', '2021-03-20 00:26:01'),
(284, '30', '', '../../vistas/img/galeria/341.jpg', '2021-03-20 00:26:21'),
(285, '30', '', '../../vistas/img/galeria/461.jpg', '2021-03-20 00:26:27'),
(286, '30', '', '../../vistas/img/galeria/657.jpg', '2021-03-20 00:26:31'),
(287, '30', '', '../../vistas/img/galeria/143.jpg', '2021-03-20 00:26:36'),
(288, '30', '', '../../vistas/img/galeria/490.jpg', '2021-03-20 00:26:41'),
(289, '30', '', '../../vistas/img/galeria/412.jpg', '2021-03-20 00:26:47'),
(290, '30', '', '../../vistas/img/galeria/488.jpg', '2021-03-20 00:26:51'),
(291, '30', '', '../../vistas/img/galeria/519.jpg', '2021-03-20 00:26:55'),
(292, '30', '', '../../vistas/img/galeria/528.jpg', '2021-03-20 00:27:01'),
(293, '30', '', '../../vistas/img/galeria/970.jpg', '2021-03-20 00:27:04'),
(295, '30', '', '../../vistas/img/galeria/225.jpg', '2021-03-20 00:30:52'),
(296, '31', '', '../../vistas/img/galeria/765.jpg', '2021-03-20 00:57:33'),
(297, '31', '', '../../vistas/img/galeria/623.jpg', '2021-03-20 00:57:41'),
(298, '31', '', '../../vistas/img/galeria/613.jpg', '2021-03-20 00:57:50'),
(299, '31', '', '../../vistas/img/galeria/146.jpg', '2021-03-20 00:57:53'),
(300, '31', '', '../../vistas/img/galeria/962.jpg', '2021-03-20 00:58:00'),
(301, '31', '', '../../vistas/img/galeria/251.jpg', '2021-03-20 00:58:09'),
(302, '31', '', '../../vistas/img/galeria/888.jpg', '2021-03-20 00:58:17'),
(303, '31', '', '../../vistas/img/galeria/811.jpg', '2021-03-20 00:58:21'),
(304, '31', '', '../../vistas/img/galeria/196.jpg', '2021-03-20 00:58:36'),
(305, '31', '', '../../vistas/img/galeria/983.jpg', '2021-03-20 00:58:39'),
(306, '31', '', '../../vistas/img/galeria/983.jpg', '2021-03-20 00:58:50'),
(307, '31', '', '../../vistas/img/galeria/332.jpg', '2021-03-20 00:58:58'),
(308, '32', '', '../../vistas/img/galeria/343.jpg', '2021-03-20 01:38:15'),
(309, '32', '', '../../vistas/img/galeria/793.jpg', '2021-03-20 01:38:23'),
(310, '32', '', '../../vistas/img/galeria/146.jpg', '2021-03-20 01:38:27'),
(311, '32', '', '../../vistas/img/galeria/783.jpg', '2021-03-20 01:38:32'),
(314, '32', '', '../../vistas/img/galeria/840.jpg', '2021-03-20 01:38:52'),
(315, '32', '', '../../vistas/img/galeria/916.jpg', '2021-03-20 01:38:58'),
(316, '32', '', '../../vistas/img/galeria/138.jpg', '2021-03-20 01:39:01'),
(317, '32', '', '../../vistas/img/galeria/338.jpg', '2021-03-20 01:39:07'),
(318, '32', '', '../../vistas/img/galeria/847.jpg', '2021-03-20 01:39:09'),
(319, '32', '', '../../vistas/img/galeria/890.jpg', '2021-03-20 01:39:15'),
(320, '32', '', '../../vistas/img/galeria/698.jpg', '2021-03-20 01:39:18'),
(321, '32', '', '../../vistas/img/galeria/320.jpg', '2021-03-20 01:39:23'),
(322, '32', '', '../../vistas/img/galeria/205.jpg', '2021-03-20 01:39:27'),
(323, '32', '', '../../vistas/img/galeria/620.jpg', '2021-03-20 01:39:33'),
(324, '32', '', '../../vistas/img/galeria/917.jpg', '2021-03-20 01:39:41'),
(325, '32', '', '../../vistas/img/galeria/795.jpg', '2021-03-20 01:39:42'),
(326, '32', '', '../../vistas/img/galeria/462.jpg', '2021-03-20 01:39:49'),
(327, '32', '', '../../vistas/img/galeria/503.jpg', '2021-03-20 01:40:41'),
(328, '32', '', '../../vistas/img/galeria/870.jpg', '2021-03-20 01:42:08'),
(330, '32', '', '../../vistas/img/galeria/625.jpg', '2021-03-20 01:44:36'),
(331, '33', '', '../../vistas/img/galeria/752.jpg', '2021-03-20 02:19:21'),
(333, '33', '', '../../vistas/img/galeria/713.jpg', '2021-03-20 02:19:41'),
(334, '33', '', '../../vistas/img/galeria/421.jpg', '2021-03-20 02:19:50'),
(335, '33', '', '../../vistas/img/galeria/502.jpg', '2021-03-20 02:19:59'),
(336, '33', '', '../../vistas/img/galeria/307.jpg', '2021-03-20 02:20:01'),
(337, '33', '', '../../vistas/img/galeria/899.jpg', '2021-03-20 02:20:07'),
(338, '33', '', '../../vistas/img/galeria/354.jpg', '2021-03-20 02:20:16'),
(339, '33', '', '../../vistas/img/galeria/532.jpg', '2021-03-20 02:20:29'),
(340, '1', '', '../../vistas/img/galeria/965.jpg', '2021-03-22 21:33:34'),
(343, '1', '', '../../vistas/img/galeria/729.jpg', '2021-03-22 21:33:49'),
(344, '1', '', '../../vistas/img/galeria/505.jpg', '2021-03-22 21:33:56'),
(345, '1', '', '../../vistas/img/galeria/694.jpg', '2021-03-22 21:34:03'),
(348, '34', '', '../../vistas/img/galeria/118.jpg', '2021-03-22 22:34:29'),
(349, '34', '', '../../vistas/img/galeria/720.jpg', '2021-03-22 22:34:41'),
(350, '34', '', '../../vistas/img/galeria/531.jpg', '2021-03-22 22:34:48'),
(351, '34', '', '../../vistas/img/galeria/277.jpg', '2021-03-22 22:34:55'),
(352, '34', '', '../../vistas/img/galeria/608.jpg', '2021-03-22 22:34:58'),
(353, '34', '', '../../vistas/img/galeria/977.jpg', '2021-03-22 22:35:02'),
(354, '34', '', '../../vistas/img/galeria/712.jpg', '2021-03-22 22:35:08'),
(355, '34', '', '../../vistas/img/galeria/316.jpg', '2021-03-22 22:35:12'),
(356, '34', '', '../../vistas/img/galeria/590.jpg', '2021-03-22 22:35:19'),
(357, '34', '', '../../vistas/img/galeria/102.jpg', '2021-03-22 22:35:26'),
(358, '34', '', '../../vistas/img/galeria/156.jpg', '2021-03-22 22:35:28'),
(359, '34', '', '../../vistas/img/galeria/943.jpg', '2021-03-22 22:35:32'),
(360, '35', '', '../../vistas/img/galeria/495.jpg', '2021-03-22 23:05:30'),
(361, '35', '', '../../vistas/img/galeria/408.jpg', '2021-03-22 23:05:38'),
(362, '35', '', '../../vistas/img/galeria/355.jpg', '2021-03-22 23:05:44'),
(363, '35', '', '../../vistas/img/galeria/975.jpg', '2021-03-22 23:05:51'),
(364, '35', '', '../../vistas/img/galeria/501.jpg', '2021-03-22 23:05:54'),
(365, '35', '', '../../vistas/img/galeria/980.jpg', '2021-03-22 23:05:59'),
(366, '35', '', '../../vistas/img/galeria/536.jpg', '2021-03-22 23:06:07'),
(367, '35', '', '../../vistas/img/galeria/794.jpg', '2021-03-22 23:06:15'),
(368, '35', '', '../../vistas/img/galeria/262.jpg', '2021-03-22 23:06:17'),
(369, '35', '', '../../vistas/img/galeria/911.jpg', '2021-03-22 23:06:21'),
(370, '35', '', '../../vistas/img/galeria/116.jpg', '2021-03-22 23:06:28'),
(371, '35', '', '../../vistas/img/galeria/947.jpg', '2021-03-22 23:06:37'),
(372, '36', '', '../../vistas/img/galeria/286.jpg', '2021-03-24 01:35:28'),
(373, '36', '', '../../vistas/img/galeria/311.jpg', '2021-03-24 01:35:32'),
(374, '36', '', '../../vistas/img/galeria/715.jpg', '2021-03-24 01:35:37'),
(375, '36', '', '../../vistas/img/galeria/730.jpg', '2021-03-24 01:35:42'),
(376, '36', '', '../../vistas/img/galeria/136.jpg', '2021-03-24 01:35:49'),
(377, '36', '', '../../vistas/img/galeria/820.jpg', '2021-03-24 01:35:53'),
(378, '36', '', '../../vistas/img/galeria/373.jpg', '2021-03-24 01:35:59'),
(379, '36', '', '../../vistas/img/galeria/226.jpg', '2021-03-24 01:36:03'),
(380, '36', '', '../../vistas/img/galeria/504.jpg', '2021-03-24 01:36:08'),
(381, '36', '', '../../vistas/img/galeria/917.jpg', '2021-03-24 01:36:14'),
(382, '36', '', '../../vistas/img/galeria/471.jpg', '2021-03-24 01:36:20'),
(383, '36', '', '../../vistas/img/galeria/724.jpg', '2021-03-24 01:37:25'),
(385, '37', '', '../../vistas/img/galeria/436.jpg', '2021-03-24 01:54:16'),
(386, '37', '', '../../vistas/img/galeria/452.jpg', '2021-03-24 01:54:20'),
(387, '37', '', '../../vistas/img/galeria/770.jpg', '2021-03-24 01:54:24'),
(388, '37', '', '../../vistas/img/galeria/879.jpg', '2021-03-24 01:54:33'),
(389, '37', '', '../../vistas/img/galeria/732.jpg', '2021-03-24 01:54:38'),
(390, '37', '', '../../vistas/img/galeria/710.jpg', '2021-03-24 01:54:43'),
(391, '37', '', '../../vistas/img/galeria/893.jpg', '2021-03-24 01:54:48'),
(392, '37', '', '../../vistas/img/galeria/863.jpg', '2021-03-24 01:54:56'),
(393, '37', '', '../../vistas/img/galeria/319.jpg', '2021-03-24 01:55:01'),
(394, '37', '', '../../vistas/img/galeria/693.jpg', '2021-03-24 01:55:05'),
(395, '37', '', '../../vistas/img/galeria/959.jpg', '2021-03-24 01:55:11'),
(396, '37', '', '../../vistas/img/galeria/881.jpg', '2021-03-24 01:55:16'),
(397, '38', '', '../../vistas/img/galeria/332.jpg', '2021-03-24 02:12:53'),
(398, '38', '', '../../vistas/img/galeria/487.jpg', '2021-03-24 02:12:58'),
(399, '38', '', '../../vistas/img/galeria/576.jpg', '2021-03-24 02:13:04'),
(400, '38', '', '../../vistas/img/galeria/190.jpg', '2021-03-24 02:13:16'),
(401, '38', '', '../../vistas/img/galeria/893.jpg', '2021-03-24 02:13:22'),
(402, '38', '', '../../vistas/img/galeria/148.jpg', '2021-03-24 02:13:27'),
(403, '38', '', '../../vistas/img/galeria/280.jpg', '2021-03-24 02:13:33'),
(404, '38', '', '../../vistas/img/galeria/621.jpg', '2021-03-24 02:13:40'),
(405, '38', '', '../../vistas/img/galeria/289.jpg', '2021-03-24 02:13:45'),
(406, '38', '', '../../vistas/img/galeria/662.jpg', '2021-03-24 02:13:50'),
(407, '38', '', '../../vistas/img/galeria/535.jpg', '2021-03-24 02:13:56'),
(408, '38', '', '../../vistas/img/galeria/385.jpg', '2021-03-24 02:14:00'),
(409, '39', '', '../../vistas/img/galeria/599.jpg', '2021-03-24 02:34:00'),
(410, '39', '', '../../vistas/img/galeria/461.jpg', '2021-03-24 02:34:06'),
(411, '39', '', '../../vistas/img/galeria/222.jpg', '2021-03-24 02:34:12'),
(412, '39', '', '../../vistas/img/galeria/184.jpg', '2021-03-24 02:34:17'),
(413, '39', '', '../../vistas/img/galeria/362.jpg', '2021-03-24 02:34:22'),
(414, '39', '', '../../vistas/img/galeria/997.jpg', '2021-03-24 02:34:28'),
(415, '39', '', '../../vistas/img/galeria/817.jpg', '2021-03-24 02:34:33'),
(416, '39', '', '../../vistas/img/galeria/608.jpg', '2021-03-24 02:34:39'),
(417, '39', '', '../../vistas/img/galeria/983.jpg', '2021-03-24 02:34:44'),
(418, '39', '', '../../vistas/img/galeria/825.jpg', '2021-03-24 02:34:49'),
(419, '39', '', '../../vistas/img/galeria/351.jpg', '2021-03-24 02:35:00'),
(420, '39', '', '../../vistas/img/galeria/623.jpg', '2021-03-24 02:35:04'),
(421, '40', '', '../../vistas/img/galeria/588.jpg', '2021-03-24 02:54:07'),
(422, '40', '', '../../vistas/img/galeria/359.jpg', '2021-03-24 02:54:13'),
(423, '40', '', '../../vistas/img/galeria/583.jpg', '2021-03-24 02:54:22'),
(424, '40', '', '../../vistas/img/galeria/436.jpg', '2021-03-24 02:54:26'),
(425, '40', '', '../../vistas/img/galeria/876.jpg', '2021-03-24 02:54:31'),
(426, '40', '', '../../vistas/img/galeria/777.jpg', '2021-03-24 02:54:37'),
(427, '40', '', '../../vistas/img/galeria/970.jpg', '2021-03-24 02:54:42'),
(428, '40', '', '../../vistas/img/galeria/531.jpg', '2021-03-24 02:54:48'),
(429, '40', '', '../../vistas/img/galeria/888.jpg', '2021-03-24 02:54:53'),
(430, '40', '', '../../vistas/img/galeria/189.jpg', '2021-03-24 02:54:59'),
(431, '40', '', '../../vistas/img/galeria/861.jpg', '2021-03-24 02:55:06'),
(432, '40', '', '../../vistas/img/galeria/684.jpg', '2021-03-24 02:55:10'),
(433, '41', '', '../../vistas/img/galeria/719.jpg', '2021-03-24 03:29:26'),
(434, '41', '', '../../vistas/img/galeria/103.jpg', '2021-03-24 03:29:29'),
(435, '41', '', '../../vistas/img/galeria/767.jpg', '2021-03-24 03:29:34'),
(436, '41', '', '../../vistas/img/galeria/149.jpg', '2021-03-24 03:29:38'),
(437, '41', '', '../../vistas/img/galeria/292.jpg', '2021-03-24 03:29:43'),
(438, '41', '', '../../vistas/img/galeria/842.jpg', '2021-03-24 03:29:54'),
(439, '41', '', '../../vistas/img/galeria/417.jpg', '2021-03-24 03:29:58'),
(440, '41', '', '../../vistas/img/galeria/193.jpg', '2021-03-24 03:30:03'),
(443, '44', '', '../../vistas/img/galeria/561.jpg', '2021-03-24 23:28:14'),
(444, '44', '', '../../vistas/img/galeria/843.jpg', '2021-03-24 23:28:18'),
(445, '44', '', '../../vistas/img/galeria/871.jpg', '2021-03-24 23:28:28'),
(446, '44', '', '../../vistas/img/galeria/300.jpg', '2021-03-24 23:28:34'),
(447, '44', '', '../../vistas/img/galeria/983.jpg', '2021-03-24 23:28:40'),
(448, '44', '', '../../vistas/img/galeria/585.jpg', '2021-03-24 23:28:48'),
(449, '44', '', '../../vistas/img/galeria/128.jpg', '2021-03-24 23:28:52'),
(450, '45', '', '../../vistas/img/galeria/887.jpg', '2021-03-24 23:57:20'),
(451, '45', '', '../../vistas/img/galeria/658.jpg', '2021-03-24 23:57:26'),
(453, '45', '', '../../vistas/img/galeria/960.jpg', '2021-03-24 23:57:39'),
(454, '45', '', '../../vistas/img/galeria/313.jpg', '2021-03-24 23:57:45'),
(455, '45', '', '../../vistas/img/galeria/690.jpg', '2021-03-24 23:57:55'),
(456, '45', '', '../../vistas/img/galeria/161.jpg', '2021-03-24 23:58:01'),
(457, '45', '', '../../vistas/img/galeria/270.jpg', '2021-03-24 23:58:12'),
(458, '45', '', '../../vistas/img/galeria/645.jpg', '2021-03-24 23:58:19'),
(459, '45', '', '../../vistas/img/galeria/703.jpg', '2021-03-24 23:58:25'),
(460, '45', '', '../../vistas/img/galeria/981.jpg', '2021-03-24 23:58:33'),
(461, '45', '', '../../vistas/img/galeria/410.jpg', '2021-03-24 23:58:39'),
(462, '45', '', '../../vistas/img/galeria/674.jpg', '2021-03-24 23:58:42'),
(463, '47', '', '../../vistas/img/galeria/752.jpg', '2021-03-25 00:43:20'),
(464, '47', '', '../../vistas/img/galeria/385.jpg', '2021-03-25 00:43:26'),
(466, '47', '', '../../vistas/img/galeria/982.jpg', '2021-03-25 00:43:38'),
(468, '47', '', '../../vistas/img/galeria/733.jpg', '2021-03-25 00:43:56'),
(470, '47', '', '../../vistas/img/galeria/179.jpg', '2021-03-25 00:44:08'),
(471, '47', '', '../../vistas/img/galeria/883.jpg', '2021-03-25 00:44:14'),
(472, '47', '', '../../vistas/img/galeria/629.jpg', '2021-03-25 00:44:21'),
(476, '47', '', '../../vistas/img/galeria/207.jpg', '2021-03-25 16:46:32'),
(477, '47', '', '../../vistas/img/galeria/423.jpg', '2021-03-25 16:46:40'),
(478, '47', '', '../../vistas/img/galeria/795.jpg', '2021-03-25 16:46:56'),
(479, '47', '', '../../vistas/img/galeria/689.jpg', '2021-03-25 16:47:03'),
(480, '47', '', '../../vistas/img/galeria/791.jpg', '2021-03-25 16:47:14'),
(481, '47', '', '../../vistas/img/galeria/494.jpg', '2021-03-25 16:47:21'),
(482, '46', '', '../../vistas/img/galeria/783.jpg', '2021-03-25 16:58:22'),
(484, '46', '', '../../vistas/img/galeria/642.jpg', '2021-03-25 16:58:46'),
(485, '46', '', '../../vistas/img/galeria/133.jpg', '2021-03-25 16:58:55'),
(486, '46', '', '../../vistas/img/galeria/587.jpg', '2021-03-25 16:59:01'),
(487, '46', '', '../../vistas/img/galeria/245.jpg', '2021-03-25 16:59:10'),
(488, '46', '', '../../vistas/img/galeria/290.jpg', '2021-03-25 16:59:16'),
(489, '46', '', '../../vistas/img/galeria/767.jpg', '2021-03-25 16:59:24'),
(490, '46', '', '../../vistas/img/galeria/655.jpg', '2021-03-25 16:59:28'),
(491, '46', '', '../../vistas/img/galeria/387.jpg', '2021-03-25 16:59:35'),
(492, '46', '', '../../vistas/img/galeria/165.jpg', '2021-03-25 16:59:45'),
(494, '48', '', '../../vistas/img/galeria/153.jpg', '2021-03-25 17:37:51'),
(495, '48', '', '../../vistas/img/galeria/610.jpg', '2021-03-25 17:37:57'),
(496, '48', '', '../../vistas/img/galeria/622.jpg', '2021-03-25 17:37:59'),
(497, '48', '', '../../vistas/img/galeria/313.jpg', '2021-03-25 17:38:03'),
(498, '48', '', '../../vistas/img/galeria/755.jpg', '2021-03-25 17:38:07'),
(499, '48', '', '../../vistas/img/galeria/269.jpg', '2021-03-25 17:38:18'),
(500, '48', '', '../../vistas/img/galeria/480.jpg', '2021-03-25 17:40:53'),
(501, '48', '', '../../vistas/img/galeria/889.jpg', '2021-03-25 17:41:04'),
(502, '48', '', '../../vistas/img/galeria/983.jpg', '2021-03-25 17:41:51'),
(503, '49', '', '../../vistas/img/galeria/970.jpg', '2021-03-25 18:17:56'),
(504, '49', '', '../../vistas/img/galeria/808.jpg', '2021-03-25 18:17:59'),
(505, '49', '', '../../vistas/img/galeria/635.jpg', '2021-03-25 18:18:03'),
(506, '49', '', '../../vistas/img/galeria/711.jpg', '2021-03-25 18:18:09'),
(507, '49', '', '../../vistas/img/galeria/769.jpg', '2021-03-25 18:18:11'),
(508, '49', '', '../../vistas/img/galeria/282.jpg', '2021-03-25 18:18:15'),
(509, '49', '', '../../vistas/img/galeria/251.jpg', '2021-03-25 18:18:19'),
(510, '49', '', '../../vistas/img/galeria/643.jpg', '2021-03-25 18:18:22'),
(511, '49', '', '../../vistas/img/galeria/977.jpg', '2021-03-25 18:18:26'),
(512, '49', '', '../../vistas/img/galeria/594.jpg', '2021-03-25 18:18:29'),
(513, '49', '', '../../vistas/img/galeria/166.jpg', '2021-03-25 18:18:34'),
(514, '49', '', '../../vistas/img/galeria/984.jpg', '2021-03-25 18:18:38'),
(528, '50', '', '../../vistas/img/galeria/506.jpg', '2021-03-27 00:18:15'),
(529, '50', '', '../../vistas/img/galeria/431.jpg', '2021-03-27 00:18:37'),
(530, '50', '', '../../vistas/img/galeria/271.jpg', '2021-03-27 00:18:48'),
(531, '50', '', '../../vistas/img/galeria/127.jpg', '2021-03-27 00:18:55'),
(532, '50', '', '../../vistas/img/galeria/455.jpg', '2021-03-27 00:19:03'),
(533, '50', '', '../../vistas/img/galeria/892.jpg', '2021-03-27 00:19:17'),
(534, '50', '', '../../vistas/img/galeria/713.jpg', '2021-03-27 00:19:33'),
(535, '50', '', '../../vistas/img/galeria/755.jpg', '2021-03-27 00:19:47'),
(536, '50', '', '../../vistas/img/galeria/214.jpg', '2021-03-27 00:20:05'),
(537, '50', '', '../../vistas/img/galeria/169.jpg', '2021-03-27 00:20:12'),
(538, '50', '', '../../vistas/img/galeria/854.jpg', '2021-03-27 00:20:26'),
(539, '50', '', '../../vistas/img/galeria/769.jpg', '2021-03-27 00:23:34'),
(540, '54', '', '../../vistas/img/galeria/376.jpg', '2021-03-27 00:47:25'),
(541, '54', '', '../../vistas/img/galeria/555.jpg', '2021-03-27 00:47:30'),
(542, '54', '', '../../vistas/img/galeria/334.jpg', '2021-03-27 00:47:38'),
(543, '54', '', '../../vistas/img/galeria/842.jpg', '2021-03-27 00:47:42'),
(544, '54', '', '../../vistas/img/galeria/972.jpg', '2021-03-27 00:47:46'),
(545, '54', '', '../../vistas/img/galeria/731.jpg', '2021-03-27 00:47:50'),
(546, '54', '', '../../vistas/img/galeria/427.jpg', '2021-03-27 00:47:54'),
(547, '54', '', '../../vistas/img/galeria/832.jpg', '2021-03-27 00:47:57'),
(548, '54', '', '../../vistas/img/galeria/284.jpg', '2021-03-27 00:48:01'),
(549, '54', '', '../../vistas/img/galeria/160.jpg', '2021-03-27 00:48:06'),
(550, '54', '', '../../vistas/img/galeria/887.jpg', '2021-03-27 00:48:09'),
(551, '54', '', '../../vistas/img/galeria/139.jpg', '2021-03-27 00:48:12'),
(552, '55', '', '../../vistas/img/galeria/699.jpg', '2021-03-27 01:01:27'),
(553, '55', '', '../../vistas/img/galeria/851.jpg', '2021-03-27 01:01:30'),
(554, '55', '', '../../vistas/img/galeria/711.jpg', '2021-03-27 01:01:34'),
(555, '55', '', '../../vistas/img/galeria/383.jpg', '2021-03-27 01:01:37'),
(556, '55', '', '../../vistas/img/galeria/802.jpg', '2021-03-27 01:01:43'),
(557, '55', '', '../../vistas/img/galeria/565.jpg', '2021-03-27 01:01:47'),
(558, '55', '', '../../vistas/img/galeria/983.jpg', '2021-03-27 01:01:52'),
(559, '55', '', '../../vistas/img/galeria/876.jpg', '2021-03-27 01:01:58'),
(560, '55', '', '../../vistas/img/galeria/386.jpg', '2021-03-27 01:02:32'),
(561, '55', '', '../../vistas/img/galeria/551.jpg', '2021-03-27 01:02:37'),
(562, '55', '', '../../vistas/img/galeria/791.jpg', '2021-03-27 01:03:07'),
(563, '55', '', '../../vistas/img/galeria/464.jpg', '2021-03-27 01:03:15'),
(564, '60', '', '../../vistas/img/galeria/971.jpg', '2021-03-27 01:28:40'),
(565, '60', '', '../../vistas/img/galeria/550.jpg', '2021-03-27 01:28:45'),
(566, '60', '', '../../vistas/img/galeria/635.jpg', '2021-03-27 01:28:49'),
(567, '60', '', '../../vistas/img/galeria/255.jpg', '2021-03-27 01:28:52'),
(568, '60', '', '../../vistas/img/galeria/734.jpg', '2021-03-27 01:28:56'),
(569, '60', '', '../../vistas/img/galeria/117.jpg', '2021-03-27 01:29:01'),
(570, '60', '', '../../vistas/img/galeria/310.jpg', '2021-03-27 01:29:06'),
(571, '60', '', '../../vistas/img/galeria/901.jpg', '2021-03-27 01:29:07'),
(572, '63', '', '../../vistas/img/galeria/178.jpg', '2021-03-27 01:49:58'),
(573, '63', '', '../../vistas/img/galeria/975.jpg', '2021-03-27 01:50:04'),
(574, '63', '', '../../vistas/img/galeria/722.jpg', '2021-03-27 01:50:16'),
(575, '63', '', '../../vistas/img/galeria/749.jpg', '2021-03-27 01:50:24'),
(576, '63', '', '../../vistas/img/galeria/104.jpg', '2021-03-27 01:50:27'),
(577, '63', '', '../../vistas/img/galeria/272.jpg', '2021-03-27 01:50:33'),
(578, '63', '', '../../vistas/img/galeria/332.jpg', '2021-03-27 01:50:38'),
(579, '63', '', '../../vistas/img/galeria/993.jpg', '2021-03-27 01:51:41'),
(580, '68', '', '../../vistas/img/galeria/866.jpg', '2021-03-27 02:13:04'),
(581, '68', '', '../../vistas/img/galeria/376.jpg', '2021-03-27 02:13:07'),
(582, '68', '', '../../vistas/img/galeria/433.jpg', '2021-03-27 02:13:10'),
(583, '68', '', '../../vistas/img/galeria/996.jpg', '2021-03-27 02:13:12'),
(584, '68', '', '../../vistas/img/galeria/564.jpg', '2021-03-27 02:13:16'),
(585, '68', '', '../../vistas/img/galeria/407.jpg', '2021-03-27 02:13:27'),
(586, '68', '', '../../vistas/img/galeria/581.jpg', '2021-03-27 02:13:34'),
(587, '68', '', '../../vistas/img/galeria/282.jpg', '2021-03-27 02:13:37'),
(588, '68', '', '../../vistas/img/galeria/101.jpg', '2021-03-27 02:13:41'),
(589, '68', '', '../../vistas/img/galeria/433.jpg', '2021-03-27 02:13:43'),
(590, '68', '', '../../vistas/img/galeria/394.jpg', '2021-03-27 02:13:47'),
(591, '68', '', '../../vistas/img/galeria/653.jpg', '2021-03-27 02:13:49'),
(592, '75', '', '../../vistas/img/galeria/143.jpg', '2021-03-29 00:58:44'),
(593, '75', '', '../../vistas/img/galeria/196.jpg', '2021-03-29 00:58:48'),
(595, '75', '', '../../vistas/img/galeria/776.jpg', '2021-03-29 00:58:54'),
(596, '75', '', '../../vistas/img/galeria/919.jpg', '2021-03-29 00:58:56'),
(597, '75', '', '../../vistas/img/galeria/922.jpg', '2021-03-29 00:59:00'),
(598, '75', '', '../../vistas/img/galeria/785.jpg', '2021-03-29 00:59:03'),
(599, '75', '', '../../vistas/img/galeria/159.jpg', '2021-03-29 00:59:06'),
(600, '75', '', '../../vistas/img/galeria/240.jpg', '2021-03-29 00:59:15'),
(601, '75', '', '../../vistas/img/galeria/541.jpg', '2021-03-29 00:59:20'),
(602, '75', '', '../../vistas/img/galeria/776.jpg', '2021-03-29 00:59:48'),
(603, '75', '', '../../vistas/img/galeria/765.jpg', '2021-03-29 00:59:56'),
(605, '75', '', '../../vistas/img/galeria/973.jpg', '2021-03-29 01:01:04'),
(606, '24', '', '../../vistas/img/galeria/909.jpg', '2021-03-29 01:16:13'),
(607, '24', '', '../../vistas/img/galeria/275.jpg', '2021-03-29 01:16:15'),
(608, '24', '', '../../vistas/img/galeria/654.jpg', '2021-03-29 01:17:06'),
(609, '24', '', '../../vistas/img/galeria/751.jpg', '2021-03-29 01:17:16'),
(610, '24', '', '../../vistas/img/galeria/211.jpg', '2021-03-29 01:17:22'),
(611, '24', '', '../../vistas/img/galeria/865.jpg', '2021-03-29 01:17:26'),
(612, '24', '', '../../vistas/img/galeria/124.jpg', '2021-03-29 01:17:31'),
(613, '24', '', '../../vistas/img/galeria/306.jpg', '2021-03-29 01:17:34'),
(614, '24', '', '../../vistas/img/galeria/367.jpg', '2021-03-29 01:17:37'),
(615, '24', '', '../../vistas/img/galeria/548.jpg', '2021-03-29 01:17:43'),
(616, '24', '', '../../vistas/img/galeria/140.jpg', '2021-03-29 01:17:47'),
(617, '24', '', '../../vistas/img/galeria/934.jpg', '2021-03-29 01:18:57'),
(618, '62', '', '../../vistas/img/galeria/744.jpg', '2021-03-29 01:45:41'),
(619, '62', '', '../../vistas/img/galeria/619.jpg', '2021-03-29 01:45:44'),
(620, '62', '', '../../vistas/img/galeria/719.jpg', '2021-03-29 01:45:47'),
(621, '62', '', '../../vistas/img/galeria/899.jpg', '2021-03-29 01:45:51'),
(622, '62', '', '../../vistas/img/galeria/397.jpg', '2021-03-29 01:45:56'),
(623, '62', '', '../../vistas/img/galeria/717.jpg', '2021-03-29 01:45:59'),
(624, '62', '', '../../vistas/img/galeria/431.jpg', '2021-03-29 01:46:04'),
(625, '62', '', '../../vistas/img/galeria/467.jpg', '2021-03-29 01:46:06'),
(626, '62', '', '../../vistas/img/galeria/481.jpg', '2021-03-29 01:46:08'),
(627, '62', '', '../../vistas/img/galeria/827.jpg', '2021-03-29 01:46:12'),
(628, '62', '', '../../vistas/img/galeria/488.jpg', '2021-03-29 01:46:15'),
(629, '62', '', '../../vistas/img/galeria/578.jpg', '2021-03-29 01:46:17'),
(630, '67', '', '../../vistas/img/galeria/689.jpg', '2021-03-29 02:07:00'),
(631, '67', '', '../../vistas/img/galeria/223.jpg', '2021-03-29 02:07:04'),
(632, '67', '', '../../vistas/img/galeria/968.jpg', '2021-03-29 02:07:07'),
(633, '67', '', '../../vistas/img/galeria/484.jpg', '2021-03-29 02:07:11'),
(634, '67', '', '../../vistas/img/galeria/245.jpg', '2021-03-29 02:07:18'),
(635, '67', '', '../../vistas/img/galeria/537.jpg', '2021-03-29 02:07:22'),
(636, '67', '', '../../vistas/img/galeria/656.jpg', '2021-03-29 02:07:25'),
(637, '67', '', '../../vistas/img/galeria/777.jpg', '2021-03-29 02:08:07'),
(638, '19', '', '../../vistas/img/galeria/158.jpg', '2021-03-29 02:41:45'),
(639, '19', '', '../../vistas/img/galeria/509.jpg', '2021-03-29 02:41:46'),
(640, '19', '', '../../vistas/img/galeria/439.jpg', '2021-03-29 02:41:48'),
(641, '19', '', '../../vistas/img/galeria/519.jpg', '2021-03-29 02:41:55'),
(642, '19', '', '../../vistas/img/galeria/573.jpg', '2021-03-29 02:42:09'),
(643, '19', '', '../../vistas/img/galeria/971.jpg', '2021-03-29 02:42:20'),
(644, '19', '', '../../vistas/img/galeria/154.jpg', '2021-03-29 02:42:23'),
(645, '19', '', '../../vistas/img/galeria/602.jpg', '2021-03-29 02:42:28'),
(646, '19', '', '../../vistas/img/galeria/642.jpg', '2021-03-29 02:42:31'),
(647, '19', '', '../../vistas/img/galeria/774.jpg', '2021-03-29 02:42:33'),
(648, '19', '', '../../vistas/img/galeria/989.jpg', '2021-03-29 02:42:37'),
(649, '19', '', '../../vistas/img/galeria/355.jpg', '2021-03-29 02:42:40'),
(650, '19', '', '../../vistas/img/galeria/254.jpg', '2021-03-29 02:42:44'),
(651, '71', '', '../../vistas/img/galeria/422.jpg', '2021-03-31 12:00:02'),
(652, '71', '', '../../vistas/img/galeria/572.jpg', '2021-03-31 12:00:22'),
(653, '71', '', '../../vistas/img/galeria/296.jpg', '2021-03-31 12:00:33'),
(654, '71', '', '../../vistas/img/galeria/917.jpg', '2021-03-31 12:00:38'),
(655, '71', '', '../../vistas/img/galeria/800.jpg', '2021-03-31 12:00:43'),
(656, '71', '', '../../vistas/img/galeria/657.jpg', '2021-03-31 12:00:48'),
(657, '71', '', '../../vistas/img/galeria/186.jpg', '2021-03-31 12:00:51'),
(658, '71', '', '../../vistas/img/galeria/319.jpg', '2021-03-31 12:00:59'),
(659, '71', '', '../../vistas/img/galeria/615.jpg', '2021-03-31 12:01:09'),
(660, '71', '', '../../vistas/img/galeria/435.jpg', '2021-03-31 12:01:10'),
(661, '71', '', '../../vistas/img/galeria/382.jpg', '2021-03-31 12:01:14'),
(662, '71', '', '../../vistas/img/galeria/413.jpg', '2021-03-31 12:01:18'),
(663, '59', '', '../../vistas/img/galeria/769.jpg', '2021-04-01 00:30:23'),
(664, '59', '', '../../vistas/img/galeria/988.jpg', '2021-04-01 00:30:26'),
(665, '59', '', '../../vistas/img/galeria/608.jpg', '2021-04-01 00:30:30'),
(668, '59', '', '../../vistas/img/galeria/467.jpg', '2021-04-01 00:30:44'),
(669, '59', '', '../../vistas/img/galeria/527.jpg', '2021-04-01 00:31:39'),
(672, '59', '', '../../vistas/img/galeria/273.jpg', '2021-04-01 00:32:41'),
(673, '59', '', '../../vistas/img/galeria/129.jpg', '2021-04-01 00:32:45'),
(674, '59', '', '../../vistas/img/galeria/497.jpg', '2021-04-01 00:33:00'),
(676, '9', '', '../../vistas/img/galeria/744.jpg', '2021-04-01 01:10:34'),
(677, '9', '', '../../vistas/img/galeria/636.jpg', '2021-04-01 01:10:48'),
(678, '9', '', '../../vistas/img/galeria/427.jpg', '2021-04-01 01:10:54'),
(679, '9', '', '../../vistas/img/galeria/692.jpg', '2021-04-01 01:10:58'),
(680, '9', '', '../../vistas/img/galeria/599.jpg', '2021-04-01 01:11:07'),
(681, '9', '', '../../vistas/img/galeria/807.jpg', '2021-04-01 01:11:15'),
(682, '9', '', '../../vistas/img/galeria/551.jpg', '2021-04-01 01:11:25'),
(684, '9', '', '../../vistas/img/galeria/973.jpg', '2021-04-01 01:12:32'),
(685, '56', '', '../../vistas/img/galeria/827.jpg', '2021-04-07 10:48:49'),
(686, '56', '', '../../vistas/img/galeria/565.jpg', '2021-04-07 10:49:01'),
(687, '56', '', '../../vistas/img/galeria/961.jpg', '2021-04-07 10:49:02'),
(688, '56', '', '../../vistas/img/galeria/314.jpg', '2021-04-07 10:49:14'),
(689, '56', '', '../../vistas/img/galeria/907.jpg', '2021-04-07 10:49:21'),
(690, '56', '', '../../vistas/img/galeria/482.jpg', '2021-04-07 10:49:31'),
(691, '64', '', '../../vistas/img/galeria/762.jpg', '2021-04-07 10:55:43'),
(692, '64', '', '../../vistas/img/galeria/937.jpg', '2021-04-07 10:55:47'),
(693, '64', '', '../../vistas/img/galeria/528.jpg', '2021-04-07 10:55:53'),
(694, '64', '', '../../vistas/img/galeria/852.jpg', '2021-04-07 10:55:57'),
(695, '64', '', '../../vistas/img/galeria/993.jpg', '2021-04-07 10:56:03'),
(696, '64', '', '../../vistas/img/galeria/398.jpg', '2021-04-07 10:56:07'),
(697, '64', '', '../../vistas/img/galeria/481.jpg', '2021-04-07 10:56:12'),
(698, '64', '', '../../vistas/img/galeria/774.jpg', '2021-04-07 10:56:20'),
(699, '64', '', '../../vistas/img/galeria/566.jpg', '2021-04-07 10:56:24'),
(700, '64', '', '../../vistas/img/galeria/833.jpg', '2021-04-07 10:56:31'),
(701, '64', '', '../../vistas/img/galeria/695.jpg', '2021-04-07 10:56:40'),
(702, '64', '', '../../vistas/img/galeria/453.jpg', '2021-04-07 10:57:07'),
(707, '51', '', '../../vistas/img/galeria/168.jpg', '2021-04-07 11:15:51'),
(708, '51', '', '../../vistas/img/galeria/481.jpg', '2021-04-07 11:15:56'),
(709, '51', '', '../../vistas/img/galeria/246.jpg', '2021-04-07 11:15:59'),
(710, '51', '', '../../vistas/img/galeria/508.jpg', '2021-04-07 11:16:03'),
(711, '53', '', '../../vistas/img/galeria/222.jpg', '2021-04-07 11:23:55'),
(712, '53', '', '../../vistas/img/galeria/496.jpg', '2021-04-07 11:24:04'),
(713, '53', '', '../../vistas/img/galeria/564.jpg', '2021-04-07 11:24:14'),
(714, '53', '', '../../vistas/img/galeria/580.jpg', '2021-04-07 11:24:18'),
(715, '53', '', '../../vistas/img/galeria/334.jpg', '2021-04-07 11:24:31'),
(716, '53', '', '../../vistas/img/galeria/921.jpg', '2021-04-07 11:24:33'),
(717, '53', '', '../../vistas/img/galeria/898.jpg', '2021-04-07 11:24:45'),
(718, '53', '', '../../vistas/img/galeria/200.jpg', '2021-04-07 11:25:58'),
(719, '52', '', '../../vistas/img/galeria/451.jpg', '2021-04-07 11:36:55'),
(720, '52', '', '../../vistas/img/galeria/847.jpg', '2021-04-07 11:36:58'),
(721, '52', '', '../../vistas/img/galeria/566.jpg', '2021-04-07 11:37:03'),
(722, '52', '', '../../vistas/img/galeria/307.jpg', '2021-04-07 11:37:11'),
(723, '52', '', '../../vistas/img/galeria/982.jpg', '2021-04-07 11:37:27'),
(724, '52', '', '../../vistas/img/galeria/857.jpg', '2021-04-07 11:37:31'),
(725, '52', '', '../../vistas/img/galeria/979.jpg', '2021-04-07 11:37:37'),
(726, '52', '', '../../vistas/img/galeria/230.jpg', '2021-04-07 11:37:41'),
(727, '65', '', '../../vistas/img/galeria/782.jpg', '2021-04-07 11:43:33'),
(728, '65', '', '../../vistas/img/galeria/271.jpg', '2021-04-07 11:43:37'),
(729, '65', '', '../../vistas/img/galeria/859.jpg', '2021-04-07 11:43:41'),
(730, '65', '', '../../vistas/img/galeria/254.jpg', '2021-04-07 11:43:55'),
(731, '65', '', '../../vistas/img/galeria/321.jpg', '2021-04-07 11:43:57'),
(732, '65', '', '../../vistas/img/galeria/122.jpg', '2021-04-07 11:44:04'),
(733, '69', '', '../../vistas/img/galeria/554.jpg', '2021-04-07 11:56:40'),
(734, '69', '', '../../vistas/img/galeria/865.jpg', '2021-04-07 11:56:44'),
(735, '69', '', '../../vistas/img/galeria/448.jpg', '2021-04-07 11:56:47'),
(736, '69', '', '../../vistas/img/galeria/837.jpg', '2021-04-07 11:56:52'),
(737, '69', '', '../../vistas/img/galeria/848.jpg', '2021-04-07 11:57:04'),
(738, '69', '', '../../vistas/img/galeria/827.jpg', '2021-04-07 11:57:07'),
(739, '69', '', '../../vistas/img/galeria/521.jpg', '2021-04-07 11:57:09'),
(740, '69', '', '../../vistas/img/galeria/378.jpg', '2021-04-07 11:57:14'),
(741, '69', '', '../../vistas/img/galeria/517.jpg', '2021-04-07 11:57:17'),
(742, '69', '', '../../vistas/img/galeria/893.jpg', '2021-04-07 11:57:21'),
(743, '69', '', '../../vistas/img/galeria/615.jpg', '2021-04-07 11:57:29'),
(744, '69', '', '../../vistas/img/galeria/704.jpg', '2021-04-07 11:57:54'),
(745, '57', '', '../../vistas/img/galeria/258.jpg', '2021-04-07 12:00:48'),
(746, '57', '', '../../vistas/img/galeria/364.jpg', '2021-04-07 12:00:54'),
(747, '57', '', '../../vistas/img/galeria/890.jpg', '2021-04-07 12:00:59'),
(748, '57', '', '../../vistas/img/galeria/816.jpg', '2021-04-07 12:01:07'),
(749, '70', '', '../../vistas/img/galeria/930.jpg', '2021-04-07 12:07:29'),
(750, '70', '', '../../vistas/img/galeria/851.jpg', '2021-04-07 12:07:38'),
(751, '70', '', '../../vistas/img/galeria/342.jpg', '2021-04-07 12:07:48'),
(752, '70', '', '../../vistas/img/galeria/124.jpg', '2021-04-07 12:07:51'),
(753, '70', '', '../../vistas/img/galeria/411.jpg', '2021-04-07 12:07:56'),
(754, '70', '', '../../vistas/img/galeria/269.jpg', '2021-04-07 12:08:00'),
(755, '70', '', '../../vistas/img/galeria/893.jpg', '2021-04-07 12:08:13'),
(756, '70', '', '../../vistas/img/galeria/534.jpg', '2021-04-07 12:08:21'),
(757, '70', '', '../../vistas/img/galeria/861.jpg', '2021-04-07 12:09:14'),
(758, '70', '', '../../vistas/img/galeria/295.jpg', '2021-04-07 12:10:41'),
(759, '70', '', '../../vistas/img/galeria/238.jpg', '2021-04-07 12:10:56'),
(760, '70', '', '../../vistas/img/galeria/702.jpg', '2021-04-07 12:11:53'),
(766, '72', '', '../../vistas/img/galeria/548.jpg', '2021-04-07 12:21:05'),
(767, '72', '', '../../vistas/img/galeria/582.jpg', '2021-04-07 12:21:13'),
(768, '72', '', '../../vistas/img/galeria/822.jpg', '2021-04-07 12:21:34'),
(769, '72', '', '../../vistas/img/galeria/297.jpg', '2021-04-07 12:21:41'),
(770, '72', '', '../../vistas/img/galeria/361.jpg', '2021-04-07 12:22:00'),
(771, '72', '', '../../vistas/img/galeria/571.jpg', '2021-04-07 12:22:34'),
(772, '72', '', '../../vistas/img/galeria/646.jpg', '2021-04-07 12:22:34'),
(773, '72', '', '../../vistas/img/galeria/455.jpg', '2021-04-07 12:22:37'),
(780, '85', '', '../../vistas/img/galeria/127.jpg', '2021-04-11 11:33:05'),
(784, '81', '', '../../vistas/img/galeria/420.jpg', '2021-04-14 07:13:33'),
(785, '84', '', '../../vistas/img/galeria/432.jpg', '2021-04-14 07:15:21'),
(786, '83', '', '../../vistas/img/galeria/295.jpg', '2021-04-14 07:15:47'),
(787, '82', '', '../../vistas/img/galeria/752.jpg', '2021-04-14 07:16:18'),
(788, '80', '', '../../vistas/img/galeria/384.jpg', '2021-04-14 07:16:57'),
(789, '79', '', '../../vistas/img/galeria/297.jpg', '2021-04-14 07:17:30'),
(790, '78', '', '../../vistas/img/galeria/180.jpg', '2021-04-14 07:17:49'),
(791, '77', '', '../../vistas/img/galeria/184.jpg', '2021-04-14 07:18:15'),
(792, '76', '', '../../vistas/img/galeria/128.jpg', '2021-04-14 07:18:48'),
(793, '6', '', '../../vistas/img/galeria/575.jpg', '2021-05-08 18:50:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `etiquetas` text NOT NULL,
  `logo` text NOT NULL,
  `logo_footer` text NOT NULL,
  `email` text NOT NULL,
  `telefono` text NOT NULL,
  `direccion` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `info`
--

INSERT INTO `info` (`id`, `titulo`, `descripcion`, `etiquetas`, `logo`, `logo_footer`, `email`, `telefono`, `direccion`, `fecha`) VALUES
(1, 'Always  Glaciers', 'Consulte las preguntas frecuentes, contáctenos por email o por teléfono, estamos aquí para ayudarlo y hacer su proceso de reserva más fácil.', 'excursiones, calafate, precio, contacto', 'vistas/img/alwaysglaciersazul.png', 'vistas/img/alwaysglaciersazul.png', 'info@alwaysglaciers.com', ' +54 290 - 249 3961 ', 'Av. del Libertador 924, El Calafate CP Z9405, Santa Cruz, Argentina                             ', '2021-02-27 21:13:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opcionales`
--

CREATE TABLE `opcionales` (
  `id_op` int(11) NOT NULL,
  `opcional` text NOT NULL,
  `precio` text NOT NULL,
  `detalle` text NOT NULL,
  `categoria` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `opcionales`
--

INSERT INTO `opcionales` (`id_op`, `opcional`, `precio`, `detalle`, `categoria`, `fecha`) VALUES
(1, 'Traslado Minitrekking desde El Calafate y visita a las Pasarelas del Glaciar ', '3.000', 'Incluye el traslado desde el hotel al Puerto bajo las Sombras, punto de comienzo de la excursión y el regreso posterior al hotel con la visita a las pasarelas.', 'traslado', '2021-04-15 20:59:49'),
(2, 'Almuerzo Rancho Grande El Chalten', '1.200', 'Almuerzo: Plato principal Lentejas o Locro o Matambre a la pizza con guarnición o Estofado de cordero o milanesa con guarnición o Suprema con guarnición o Canelones de verdura.   Postres: Flan o ensalada de frutas, o Duraznos en almíbar. Las guarniciones son: papas fritas o ensaladas o puré o arroz. NO INCLUYE BEBIDAS', 'almuerzo', '2021-04-15 20:59:49'),
(4, 'Safari Nautico', '1.800', 'Puedes incluir la navegación de 1 hora en la cara sur del Glaciar Moreno.', 'navegacion', '2021-04-15 21:00:19'),
(6, 'Moreno Spirit Cara Norte Glaciar Moreno', '2.000', 'Puedes incluir la navegación de una hora en la cara Norte del Glaciar Moreno', 'navegacion', '2021-04-30 09:39:28'),
(7, 'Almuerzo en el Glaciar Moreno', '3.000', 'No Incluye bebidas.', 'almuerzo', '2021-04-30 17:57:42'),
(11, 'Traslado Hotel a Puerto Banderas ', '2000', 'Traslado desde el Hotel a las excursiones Todo Glaciares o Ríos de Hielo.', 'traslado', '2021-05-02 23:42:16'),
(12, 'Traslado Hotel a Puerto y regreso al Hotel Glaciar Gourmet..', '2.000', 'Traslado desde el Hotel a las excursión Glaciar Gourmet, o Glaciar Gourmet mas moreno.', 'traslado', '2021-05-02 23:43:58'),
(13, 'Vianda Full Day Paine', '1.500', '1 Sandwich de pollo, 1 sandwich de jamon y queso, galletas dulces, cereal, caramelos, 1 barra de cereales, 2 gaseosas o agua mineral, cafe.', 'vianda', '2021-05-02 23:45:29'),
(14, 'Traslado al Glaciar Moreno Moreno Kayak, navegaciones cara sur y norte', '3.000', 'Incluir Traslado a Moreno Kayak, o navegación Safari Nautico, o Moreno Spirit con visita a las pasarelas', 'traslado', '2021-05-03 15:07:52'),
(15, 'Excursión Lago del Desierto.', '2.000', '', 'traslado', '2021-05-03 15:09:19'),
(16, 'Traslado hotel a Puerto (Estancia Cristina) y regreso al Hotel .', '3.000', 'Traslado desde el hotel al puerto banderas para la visita a la Estancia Cristina.', 'traslado', '2021-05-03 15:12:15'),
(17, 'Traslado Cabalgata y Rafting la Leona.', '2.800', 'Traslado al Parador La Leona desde el Hotel y posterior regreso Hotel.', 'traslado', '2021-05-03 15:28:00'),
(18, 'Traslado Bosque Petrificado a Parador La leona desde el Hotel y posterior regreso al hotel.', '2.800', 'Traslado ida y vuelta al hotel', 'traslado', '2021-05-03 15:30:34'),
(22, 'Entrada al Parque Nacional Los Glaciares Argentinos', '1.000', 'Entrada Parque $ 1.000\r\nGastos de gestion $ 150', 'entrada', '2021-05-07 18:41:42'),
(23, 'Traslado a Estancia Nibepo Aike', '4.000', 'Traslado regular del hotel a la estancia y posterior regreso.', 'traslado', '2021-05-07 18:49:01'),
(24, 'Entrada Parque Nacional Extranjeros', '1.150', 'Entrada Parque $ 1.000\r\nGastos de gestion $ 150', 'entrada', '2021-05-10 22:39:19'),
(26, 'Traslado Hotel a puerto Moreno Spirit y regreso al Hotel', '2.000', '', 'traslado', '2021-05-13 21:06:39'),
(27, 'Traslado Hotel a puerto Mayo Spirit y regreso al Hotel', '1.000', '', 'traslado', '2021-05-13 21:27:43'),
(28, 'Traslado Hotel a Glaciar Sur y regreso al Hotel', '1.000', '', 'traslado', '2021-05-13 21:31:59'),
(29, 'Traslado Cabalgata Estancia Alice', '1.400', 'Traslado de y hacia el Hotel', 'traslado', '2021-05-14 21:33:10'),
(30, 'Traslado Estancia 25 de Mayo', '1.160', 'Traslado Hotel Calafate a Estancia y regreso al Hotel', 'traslado', '2021-05-14 21:38:12'),
(31, 'Traslado Estancia Alice', '1.940', 'Traslado hotel Calafate a estancia Alice y regreso hotel', 'traslado', '2021-05-14 21:42:48'),
(32, 'Cena o almuerzo en El Calafate Hostel o en Rancho Grande El Chalten', '0', 'Descuento personal del 15 % en Restaurante del Calafate Hostel por haber comprado excursión a través de esta pagina. Solo debes presentar comprobante de compra de esta Excursión. Calafate Hostel Gobernador Moyano 1226.', 'almuerzo', '2021-05-14 21:51:25'),
(34, 'Silla de Bebe', '400', '', 'renta', '2021-05-26 11:48:34'),
(36, 'Vianda Gourmet', '1.000', 'Incluye 2 sandwiches de jamón y queso o pollo a las finas hierbas o atún, 1 fruta, caramelos, barra de cereal y agua mineral.\r\nOpción Vegetariana: 2 sandwiches de , tomate, lechuga y queso, 1 fruta, una barra de cereal, 1 agua mineral.', 'vianda', '2021-05-28 17:16:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otras`
--

CREATE TABLE `otras` (
  `id_o` int(11) NOT NULL,
  `id_subcategoriao` text NOT NULL,
  `id_excursiono` text NOT NULL,
  `fechao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `otras`
--

INSERT INTO `otras` (`id_o`, `id_subcategoriao`, `id_excursiono`, `fechao`) VALUES
(20, '4', '2', '2021-03-11 17:17:39'),
(21, '4', '3', '2021-03-11 17:17:57'),
(22, '4', '4', '2021-03-11 17:18:12'),
(23, '4', '5', '2021-03-11 17:18:28'),
(24, '4', '1', '2021-03-11 17:18:45'),
(31, '3', '29', '2021-03-19 19:43:03'),
(32, '3', '30', '2021-03-19 20:39:06'),
(33, '3', '31', '2021-03-20 00:42:55'),
(34, '3', '32', '2021-03-20 01:12:28'),
(35, '3', '33', '2021-03-20 01:55:58'),
(36, '3', '34', '2021-03-22 22:20:31'),
(37, '3', '35', '2021-03-22 22:46:36'),
(40, '3', '36', '2021-03-24 02:04:36'),
(41, '3', '37', '2021-03-24 02:04:48'),
(42, '3', '38', '2021-03-24 02:04:58'),
(43, '3', '39', '2021-03-24 02:23:19'),
(44, '3', '40', '2021-03-24 02:41:13'),
(50, '4', '23', '2021-03-24 03:03:22'),
(51, '4', '28', '2021-03-24 03:03:37'),
(52, '4', '35', '2021-03-24 03:03:54'),
(53, '5', '29', '2021-03-25 00:51:33'),
(54, '5', '33', '2021-03-25 00:52:13'),
(55, '5', '18', '2021-03-25 00:53:07'),
(57, '5', '10', '2021-03-25 00:54:48'),
(58, '5', '34', '2021-03-25 00:55:06'),
(59, '5', '39', '2021-03-29 02:11:33'),
(60, '6', '44', '2021-03-29 02:45:48'),
(61, '6', '31', '2021-03-29 02:46:08'),
(62, '6', '31', '2021-03-29 02:46:37'),
(63, '6', '36', '2021-03-29 02:47:00'),
(64, '6', '37', '2021-03-29 02:47:31'),
(65, '6', '39', '2021-03-29 02:47:55'),
(67, '6', '68', '2021-03-29 02:48:38'),
(68, '7', '24', '2021-03-29 02:51:29'),
(69, '7', '26', '2021-03-29 02:52:13'),
(70, '7', '33', '2021-03-29 02:54:32'),
(71, '7', '35', '2021-03-29 02:54:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otros`
--

CREATE TABLE `otros` (
  `id` int(11) NOT NULL,
  `descuento` text NOT NULL,
  `cbu` text NOT NULL,
  `alias` text NOT NULL,
  `cuit` text NOT NULL,
  `banco` text NOT NULL,
  `cuenta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `otros`
--

INSERT INTO `otros` (`id`, `descuento`, `cbu`, `alias`, `cuit`, `banco`, `cuenta`) VALUES
(1, '1.5', '0070180420000002345286', 'SITIO.MISA.ANANA', '30-70861006-9', 'Banco Galicia', 'CC$ 2345-2 180-8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos_tarjetas_rentas`
--

CREATE TABLE `pagos_tarjetas_rentas` (
  `id` int(11) NOT NULL,
  `renta` text NOT NULL,
  `total` text NOT NULL,
  `pasajeros` text NOT NULL,
  `metodo_pago` text NOT NULL,
  `numero_transaccion` text NOT NULL,
  `operacion` text NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_tarjetas`
--

CREATE TABLE `pago_tarjetas` (
  `id` int(11) NOT NULL,
  `excursion` text NOT NULL,
  `fecha_reserva` text NOT NULL,
  `turno` text NOT NULL,
  `adultos` text NOT NULL,
  `ninos` text NOT NULL,
  `bebes` text NOT NULL,
  `opcionales` text NOT NULL,
  `total` text NOT NULL,
  `pasajeros` text NOT NULL,
  `metodo_pago` text NOT NULL,
  `operacion` text NOT NULL,
  `numero_transaccion` text NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pago_tarjetas`
--

INSERT INTO `pago_tarjetas` (`id`, `excursion`, `fecha_reserva`, `turno`, `adultos`, `ninos`, `bebes`, `opcionales`, `total`, `pasajeros`, `metodo_pago`, `operacion`, `numero_transaccion`, `fecha`) VALUES
(15, 'Glaciar Perito Moreno Classic', '23-9-21', '6:50 am  a   6:15 pm', '2', '0', '0', 'Entrada al Parque Nacional Los Glaciares Argentinos', '8800', '[{\"nombre\":\"Gonzalo\",\"apellidos\":\"Vidal\",\"tel\":\"02966504821\",\"email\":\"gonzaa.vidal.18@gmail.com\",\"dni\":\"36105733\",\"edad\":\"43\",\"nacionalidad\":\"Argentina\"},{\"nombre\":\"Gonzalo\",\"apellidos\":\"Aguirre\",\"dni\":\"22.725.318\",\"edad\":\"43\",\"nacionalidad\":\"Argentina\"}]', 'Mercado Pago', '13458', '1241419024', '2021-09-21 19:48:08'),
(16, 'Glaciar Perito Moreno Classic', '23-9-21', '6:50 am  a   6:15 pm', '2', '0', '0', 'Entrada al Parque Nacional Los Glaciares Argentinos', '8800', '[{\"nombre\":\"Gonzalo\",\"apellidos\":\"Vidal\",\"tel\":\"02966504821\",\"email\":\"gonzaa.vidal.18@gmail.com\",\"dni\":\"36105733\",\"edad\":\"43\",\"nacionalidad\":\"Argentina\"},{\"nombre\":\"Gonzalo\",\"apellidos\":\"Aguirre\",\"dni\":\"22.725.318\",\"edad\":\"43\",\"nacionalidad\":\"Argentina\"}]', 'Mercado Pago', '18848', '1241419126', '2021-09-21 19:55:46'),
(17, 'Glaciar Perito Moreno Classic', '23-9-21', '6:50 am  a   6:15 pm', '2', '0', '0', 'Entrada al Parque Nacional Los Glaciares Argentinos', '8800', '[{\"nombre\":\"Gonzalo\",\"apellidos\":\"Vidal\",\"tel\":\"02966504821\",\"email\":\"gonzaa.vidal.18@gmail.com\",\"dni\":\"36105733\",\"edad\":\"43\",\"nacionalidad\":\"Argentina\"},{\"nombre\":\"Gonzalo\",\"apellidos\":\"Aguirre\",\"dni\":\"22.725.318\",\"edad\":\"43\",\"nacionalidad\":\"Argentina\"}]', 'Mercado Pago', '18242', '1241417607', '2021-09-21 19:58:14'),
(18, 'Glaciar Perito Moreno Classic', '23-9-21', '6:50 am  a   6:15 pm', '2', '0', '0', 'Entrada al Parque Nacional Los Glaciares Argentinos', '8800', '[{\"nombre\":\"Gonzalo\",\"apellidos\":\"Vidal\",\"tel\":\"02966504821\",\"email\":\"gonzaa.vidal.18@gmail.com\",\"dni\":\"36105733\",\"edad\":\"43\",\"nacionalidad\":\"Argentina\"},{\"nombre\":\"Gonzalo\",\"apellidos\":\"Aguirre\",\"dni\":\"22.725.318\",\"edad\":\"43\",\"nacionalidad\":\"Argentina\"}]', 'Mercado Pago', '15945', '1241419328', '2021-09-21 20:02:38'),
(19, 'Glaciar Perito Moreno Classic', '23-9-21', '6:50 am  a   6:15 pm', '2', '0', '0', 'Entrada al Parque Nacional Los Glaciares Argentinos', '8800', '[{\"nombre\":\"Gonzalo\",\"apellidos\":\"Vidal\",\"tel\":\"02966504821\",\"email\":\"gonzaa.vidal.18@gmail.com\",\"dni\":\"36105733\",\"edad\":\"43\",\"nacionalidad\":\"Argentina\"},{\"nombre\":\"Gonzalo\",\"apellidos\":\"Aguirre\",\"dni\":\"22.725.318\",\"edad\":\"43\",\"nacionalidad\":\"Argentina\"}]', 'Mercado Pago', '19301', '1241419477', '2021-09-21 20:09:21'),
(20, 'Glaciar Perito Moreno Classic', '23-9-21', '6:50 am  a   6:15 pm', '2', '0', '0', 'Entrada al Parque Nacional Los Glaciares Argentinos', '8800', '[{\"nombre\":\"Gonzalo\",\"apellidos\":\"Vidal\",\"tel\":\"02966504821\",\"email\":\"gonzaa.vidal.18@gmail.com\",\"dni\":\"36105733\",\"edad\":\"43\",\"nacionalidad\":\"Argentina\"},{\"nombre\":\"Gonzalo\",\"apellidos\":\"Aguirre\",\"dni\":\"22.725.318\",\"edad\":\"43\",\"nacionalidad\":\"Argentina\"}]', 'Mercado Pago', '19653', '1241419984', '2021-09-21 20:18:47'),
(21, 'Glaciar Perito Moreno Classic', '23-9-21', '6:50 am  a   6:15 pm', '2', '0', '0', 'Entrada al Parque Nacional Los Glaciares Argentinos', '8800', '[{\"nombre\":\"Gonzalo\",\"apellidos\":\"Vidal\",\"tel\":\"02966504821\",\"email\":\"gonzaa.vidal.18@gmail.com\",\"dni\":\"36105733\",\"edad\":\"43\",\"nacionalidad\":\"Argentina\"},{\"nombre\":\"Gonzalo\",\"apellidos\":\"Aguirre\",\"dni\":\"22.725.318\",\"edad\":\"43\",\"nacionalidad\":\"Argentina\"}]', 'Mercado Pago', '12245', '1241419686', '2021-09-21 20:22:55'),
(22, 'Glaciar Perito Moreno Classic', '23-9-21', '6:50 am  a   6:15 pm', '2', '0', '0', 'Entrada al Parque Nacional Los Glaciares Argentinos', '8800', '[{\"nombre\":\"Gonzalo\",\"apellidos\":\"Vidal\",\"tel\":\"02966504821\",\"email\":\"gonzaa.vidal.18@gmail.com\",\"dni\":\"36105733\",\"edad\":\"43\",\"nacionalidad\":\"Argentina\"},{\"nombre\":\"Gonzalo\",\"apellidos\":\"Aguirre\",\"dni\":\"22.725.318\",\"edad\":\"43\",\"nacionalidad\":\"Argentina\"}]', 'Mercado Pago', '13540', '1241424164', '2021-09-21 21:15:32'),
(24, 'Glaciar Perito Moreno Classic', '23-9-21', '6:50 am  a   6:15 pm', '2', '0', '0', 'Entrada al Parque Nacional Los Glaciares Argentinos', '8800', '[{\"nombre\":\"Gonzalo\",\"apellidos\":\"Vidal\",\"tel\":\"02966504821\",\"email\":\"gonzaa.vidal.18@gmail.com\",\"dni\":\"36105733\",\"edad\":\"43\",\"nacionalidad\":\"Argentina\"},{\"nombre\":\"Gonzalo\",\"apellidos\":\"Aguirre\",\"dni\":\"22.725.318\",\"edad\":\"43\",\"nacionalidad\":\"Argentina\"}]', 'Mercado Pago', '13953', '1241424442', '2021-09-21 21:28:41'),
(27, 'Glaciar Perito Moreno Classic', '23-9-21', '6:50 am  a   6:15 pm', '2', '0', '0', 'Entrada al Parque Nacional Los Glaciares Argentinos', '8800', '[{\"nombre\":\"Gonzalo\",\"apellidos\":\"Vidal\",\"tel\":\"02966504821\",\"email\":\"gonzaa.vidal.18@gmail.com\",\"dni\":\"36105733\",\"edad\":\"43\",\"nacionalidad\":\"Argentina\"},{\"nombre\":\"Gonzalo\",\"apellidos\":\"Aguirre\",\"dni\":\"22.725.318\",\"edad\":\"43\",\"nacionalidad\":\"Argentina\"}]', 'Mercado Pago', '13650', '1241424575', '2021-09-21 21:39:34'),
(28, 'Glaciar Perito Moreno Classic', '23-9-21', '6:50 am  a   6:15 pm', '2', '0', '0', 'Entrada al Parque Nacional Los Glaciares Argentinos', '8800', '[{\"nombre\":\"Gonzalo\",\"apellidos\":\"Vidal\",\"tel\":\"02966504821\",\"email\":\"gonzaa.vidal.18@gmail.com\",\"dni\":\"36105733\",\"edad\":\"43\",\"nacionalidad\":\"Argentina\"},{\"nombre\":\"Gonzalo\",\"apellidos\":\"Aguirre\",\"dni\":\"22.725.318\",\"edad\":\"43\",\"nacionalidad\":\"Argentina\"}]', 'Mercado Pago', '13267', '1241424739', '2021-09-21 21:49:35'),
(29, 'Glaciar Perito Moreno Classic', '23-9-21', '6:50 am  a   6:15 pm', '2', '0', '0', 'Entrada al Parque Nacional Los Glaciares Argentinos', '8800', '[{\"nombre\":\"Gonzalo\",\"apellidos\":\"Vidal\",\"tel\":\"02966504821\",\"email\":\"gonzaa.vidal.18@gmail.com\",\"dni\":\"36105733\",\"edad\":\"43\",\"nacionalidad\":\"Argentina\"},{\"nombre\":\"Gonzalo\",\"apellidos\":\"Aguirre\",\"dni\":\"22.725.318\",\"edad\":\"43\",\"nacionalidad\":\"Argentina\"}]', 'Mercado Pago', '16542', '1241424785', '2021-09-21 21:52:43'),
(30, 'Glaciar Perito Moreno Classic', '30-9-21', '6:50 am  a   6:15 pm', '2', '1', '0', 'Vianda Gourmet', '12400', '[{\"nombre\":\"Gonzalo\",\"apellidos\":\"Vidal\",\"tel\":\"02966504821\",\"email\":\"gonzaa.vidal.18@gmail.com\",\"dni\":\"22.725.318\",\"edad\":\"43\",\"nacionalidad\":\"Argnetins\"},{\"nombre\":\"Gonzalo\",\"apellidos\":\"Vidal\",\"dni\":\"22.725.318\",\"edad\":\"43\",\"nacionalidad\":\"Argentina\"},{\"nombre\":\"Alexis Urrego\",\"apellidos\":\"Aguirre\",\"dni\":\"22.725.318\",\"edad\":\"43\",\"nacionalidad\":\"Argentina\"}]', 'Mercado Pago', '12732', '1241426528', '2021-09-21 22:45:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_tarjetas_carrito`
--

CREATE TABLE `pago_tarjetas_carrito` (
  `id` int(11) NOT NULL,
  `excursiones` text NOT NULL,
  `total` text NOT NULL,
  `pasajeros` text NOT NULL,
  `metodo_pago` text NOT NULL,
  `numero_transaccion` text NOT NULL,
  `operacion` text NOT NULL,
  `fecha` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pago_tarjetas_carrito`
--

INSERT INTO `pago_tarjetas_carrito` (`id`, `excursiones`, `total`, `pasajeros`, `metodo_pago`, `numero_transaccion`, `operacion`, `fecha`) VALUES
(5, '[{\"excursion\":\"Glaciar Perito Moreno Classic                                               \",\"fecha\":\"17-3-22\",\"turno\":\"10:00hs\",\"pasajeros\":{\"adultos\":\"2\",\"ninos\":\"0\",\"bebes\":\"0\"},\"totaL\":\"12.800\",\"opcionales\":[\"Almuerzo en el Glaciar Moreno\"]}]', '12800', '[{\"nombre\":\"Gonzalo Rodrigo\",\"apellidos\":\"assdas\",\"tel\":\"+54 9 11 3944 162\",\"email\":\"gonza@gmail.com\",\"dni\":\"4234234\",\"edad\":\"1991-01-11\",\"nacionalidad\":\"Aesdsfsd\"}]', 'Mercado Pago', '1246629652', '14106', '2022-03-08 18:24:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recorridos`
--

CREATE TABLE `recorridos` (
  `id` int(11) NOT NULL,
  `id_excursion` text NOT NULL,
  `titulo` text NOT NULL,
  `horario` text NOT NULL,
  `icono` text NOT NULL,
  `recorrido` text NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `recorridos`
--

INSERT INTO `recorridos` (`id`, `id_excursion`, `titulo`, `horario`, `icono`, `recorrido`, `descripcion`, `fecha`) VALUES
(7, '1', 'Comenzando Pick-up en el Hotel ', '6.50 AM', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', '', '2021-03-22 13:27:09'),
(11, '1', 'Navegación Frente al Glaciar Moreno', '11.45', 'vistas/img/barco.png', 'vistas/img/linea_roja.png', 'Navegación de 1 Hora', '2021-03-22 13:37:37'),
(13, '1', 'Visita a las Pasarelas y los Balcones', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Caminata Libre 5 Horas frente al Glaciar Moreno', '2021-03-22 13:48:21'),
(14, '1', 'Retorno al Hotel', '16.45', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', '', '2021-03-22 13:50:55'),
(16, '2', 'Comienza Pick-Up en el Hotel', '6.50 AM', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', '', '2021-03-22 14:14:02'),
(17, '2', 'Embarque en Puerto', '11.00', 'vistas/img/barco.png', 'vistas/img/linea_azul.png', 'Navegación frente al Glaciar Moreno', '2021-03-22 14:18:10'),
(18, '2', 'Caminata Sobre el Glaciar Moreno', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Duración 1.40', '2021-03-22 14:19:59'),
(19, '2', 'Retorno al Puerto', '', 'vistas/img/barco.png', 'vistas/img/linea_azul.png', '', '2021-03-22 14:21:38'),
(21, '2', 'Visita a los Balcones y Pasarelas', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Duración 1 hora', '2021-03-22 14:24:49'),
(22, '2', 'Regreso al Hotel', '16.45', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', 'Duración 1.30', '2021-03-22 14:26:26'),
(24, '3', 'Comiendo Pick-Up Hotel', '6.50', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', '', '2021-03-22 14:35:16'),
(25, '3', 'Embarque en Puerto', '8.30', 'vistas/img/barco.png', 'vistas/img/linea_azul.png', '', '2021-03-22 14:39:22'),
(26, '3', 'Visita Glaciar Upsala', '', 'vistas/img/barco.png', 'vistas/img/linea_azul.png', '', '2021-03-22 14:40:24'),
(27, '3', 'Visita Glaciar Spegazzini', '', 'vistas/img/barco.png', 'vistas/img/linea_azul.png', '', '2021-03-22 14:41:03'),
(28, '3', 'Desembarco en Puerto Las Vacas', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', '', '2021-03-22 14:43:00'),
(29, '3', 'Visita al Glaciar Moreno', '', 'vistas/img/barco.png', 'vistas/img/linea_roja.png', '', '2021-03-22 14:45:41'),
(32, '4', 'Comienza Pick-Up en el Hotel', '6.50 AM', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', 'Distancia a Puerto Bajo las Sombras 40 Km.', '2021-03-22 14:56:23'),
(33, '4', 'Embarque en Puerto', '8.30 AM', 'vistas/img/barco.png', 'vistas/img/linea_azul.png', '', '2021-03-22 14:57:41'),
(34, '4', 'Visita Glaciar Upsala', '', 'vistas/img/barco.png', 'vistas/img/linea_azul.png', '', '2021-03-22 14:58:26'),
(35, '4', 'Visita Glaciar Spegazzini', '', 'vistas/img/barco.png', 'vistas/img/linea_azul.png', '', '2021-03-22 14:59:41'),
(36, '4', 'Desembarco n Spegazzini ', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Caminata por los senderos', '2021-03-22 15:02:45'),
(37, '4', 'Retorno al Puerto', '16.00', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', '', '2021-03-22 15:04:16'),
(38, '4', 'Retorno al Hotel', '17.00', 'sin-icono', 'finalizacion', '', '2021-03-22 15:05:11'),
(39, '5', 'Comienza Pick-Up en el Hotel', '6.50 AM', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Distancia al puerto 40 Km.', '2021-03-22 15:07:12'),
(40, '5', 'Embarque en Puerto', '8.30', 'vistas/img/barco.png', 'vistas/img/linea_azul.png', '', '2021-03-22 15:08:02'),
(42, '5', 'Visita Glaciar Upsala y Glaciar Spegazzini', '', 'vistas/img/barco.png', 'vistas/img/linea_azul.png', '', '2021-03-22 15:09:25'),
(43, '5', 'Desembarco en Puerto Las Vacas', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Pequeño Trekking', '2021-03-22 15:10:05'),
(44, '5', 'Visita al Glaciar Moreno y Desembarco', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Visita a las Pasarelas', '2021-03-22 15:11:18'),
(47, '5', 'Regreso a El Calafate', '18.45', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', '', '2021-03-22 15:14:25'),
(48, '5', 'Retorno al Hotel', '20.15', 'sin-icono', 'finalizacion', '', '2021-03-22 15:18:54'),
(51, '7', 'Comienza Pick-Up en el Hotel', '8.00 AM', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', '220 Km. Por la Estepa Patagonia', '2021-03-22 15:23:33'),
(52, '7', 'Visita al Centro de Interpretación', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Caminata al Mirador de los Condores', '2021-03-22 15:33:24'),
(53, '7', 'Visita al Chorrillo del Salto', '', 'vistas/img/cubiertos.png', 'vistas/img/linea_azul.png', 'Almuerzo en Restaurant Rancho Grande', '2021-03-22 15:38:23'),
(54, '7', 'Caminata libre pueblo de El Chalten', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Regreso a El Calafate', '2021-03-22 15:39:46'),
(55, '7', 'Regreso al Hotel', '19.00', 'sin-icono', 'finalizacion', '', '2021-03-22 15:43:31'),
(56, '10', 'Comienza Pick-Up en el Hotel', '6.00', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Distancia al parque 290 Km.', '2021-03-22 15:49:20'),
(57, '10', 'Laguna Amarga Torres del Paine', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Administración pago de la entrada al Parque', '2021-03-22 15:50:20'),
(58, '10', 'Mirador del Paine', '', 'vistas/img/binoculares.png', 'vistas/img/linea_azul.png', 'Vistas de Las Torres', '2021-03-22 15:53:04'),
(59, '10', 'Caminata Salto Grande', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', '1 hora de duración aprox.\r\nMini Snack', '2021-03-22 15:54:28'),
(60, '10', 'Retorno al Hotel', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', '', '2021-03-22 15:56:26'),
(61, '10', 'Arribo a El Calafate', '21.30', 'sin-icono', 'finalizacion', '', '2021-03-22 15:57:51'),
(63, '9', 'Bus El Calafate - El Chalten', '8.00 AM,  13.00, 18.00', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Distancia 220 Km.', '2021-03-22 16:52:03'),
(64, '9', 'Arribo  a El Chalten', '11.00, 16.00, 21.00', 'sin-icono', 'finalizacion', '', '2021-03-22 16:55:02'),
(65, '9', 'Bus El Chalten - El Calafate', '8.30 AM, 13.00, 18.00', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Duración viaje 3 horas', '2021-03-22 16:58:27'),
(66, '9', 'Arribo a El Calafate', '11.30, 16.00, 21.00', 'sin-icono', 'finalizacion', '', '2021-03-22 16:59:53'),
(67, '18', 'Comenzando Pick-up en el Hotel ', '6.45 AM', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Viaje 5 horas de duración', '2021-03-22 17:07:43'),
(68, '18', 'Ingreso al Parque Torres del Paine', '12.00', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Visita a puntos Panorámicos', '2021-03-22 17:10:32'),
(69, '18', 'Laguna Amarga  ', '', 'vistas/img/cubiertos.png', 'vistas/img/linea_azul.png', 'Picnic en la montaña', '2021-03-22 17:12:49'),
(70, '18', 'Miador de Los Cuernos del Paine', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'caminata de 1.30 hora', '2021-03-22 17:14:44'),
(71, '18', 'Visita al Salto Grande', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Regreso a El Calafate', '2021-03-22 17:16:40'),
(72, '18', 'Retorno al Hotel', '', 'sin-icono', 'finalizacion', '', '2021-03-22 17:17:15'),
(73, '19', 'Comenzando Pick-up en el Hotel ', '8.30 AM', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', '55 km a destino', '2021-03-22 17:21:39'),
(74, '19', 'Recepción en la Estancia', '10.00 ', 'vistas/img/ovejita.png', 'vistas/img/linea_azul.png', 'Arreo y Esquila de ovejas', '2021-03-22 17:23:18'),
(75, '19', 'Caminata por la Estancia', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Cabalgata 45 minutos', '2021-03-22 17:26:49'),
(76, '19', 'Almuerzo en la Estancia', '', 'vistas/img/cubiertos.png', 'vistas/img/linea_azul.png', 'Cordero Patagónico', '2021-03-22 17:29:44'),
(77, '19', 'Fin de la visita', '14.00', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', '', '2021-03-22 17:30:54'),
(78, '19', 'Retorno al Hotel', '15.30', 'sin-icono', 'finalizacion', '', '2021-03-22 17:31:44'),
(79, '23', 'Comienza Pick-Up en el Hotel', '7.00', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', '80 Km a recorrer', '2021-03-22 17:35:12'),
(80, '23', 'Visita alas Pasarelas y Balcones', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Duración 1 hora', '2021-03-22 17:36:35'),
(81, '23', 'Embarque en Puerto', '10.30', 'vistas/img/barco.png', 'vistas/img/linea_azul.png', 'Navegación frente al Glaciar Moreno', '2021-03-22 17:38:09'),
(82, '23', 'Caminata sobre el hielo', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Duración 4 horas', '2021-03-22 17:38:54'),
(85, '23', 'Retorno al Puerto', '', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', 'Regreso a El Calafate', '2021-03-22 17:41:48'),
(86, '23', 'Retorno al Hotel', '19.00', 'sin-icono', 'finalizacion', '', '2021-03-22 17:44:55'),
(87, '24', 'Comienza Pick-Up en el Hotel', '6.50 AM', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Distancia a recorrer 215 Km.', '2021-03-22 17:51:19'),
(88, '24', 'Embarque en Puerto', '11.00', 'vistas/img/barco.png', 'vistas/img/linea_azul.png', 'Navegación Frente al Glaciar Viedma', '2021-03-22 17:52:23'),
(89, '24', 'Caminata sobre el hielo', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Duración 3 horas', '2021-03-22 17:53:32'),
(90, '24', 'Picnic sobre el hielo', '', 'vistas/img/cubiertos.png', 'vistas/img/linea_azul.png', 'Vianda', '2021-03-22 17:54:44'),
(91, '24', 'Retorno al Puerto', '17.00', 'vistas/img/barco.png', 'vistas/img/linea_azul.png', '', '2021-03-22 17:56:25'),
(92, '24', 'Regreso a El Calafate', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', '', '2021-03-22 17:57:21'),
(93, '24', 'Retorno al Hotel', '19.30', 'sin-icono', 'finalizacion', '', '2021-03-22 17:57:59'),
(94, '26', 'Comienza Pick-Up en el Hotel', '6.50 AM', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', 'Recorrido 80 Km.\r\n', '2021-03-22 18:03:17'),
(95, '26', 'Vistas Panorámicas', '9.00', 'vistas/img/persona_caminando.png', 'vistas/img/linea_roja.png', 'Duración 2 horas', '2021-03-22 18:04:19'),
(96, '26', 'Navegación cara norte Glaciar moreno', '11.45 ', 'vistas/img/barco.png', 'vistas/img/linea_azul.png', 'Duración 1 Hora ', '2021-03-22 18:05:41'),
(97, '26', 'Visita a los Balcones y Pasarelas', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_roja.png', 'Caminata Libre de 4 horas', '2021-03-22 18:14:15'),
(98, '26', 'Regreso a El Calafate', '16.45', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', 'Duración 1.30 horas', '2021-03-22 18:15:37'),
(99, '26', 'Retorno al Hotel', '18.15', 'sin-icono', 'finalizacion', '', '2021-03-22 18:17:12'),
(100, '27', 'Comienza Pick-Up en el Hotel', '6.50 AM', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', 'recorrido 80 Km.', '2021-03-22 18:19:33'),
(101, '27', 'Embarque en Puerto', '11.45', 'vistas/img/barco.png', 'vistas/img/linea_azul.png', 'Duración 1 hora', '2021-03-22 18:20:25'),
(102, '27', 'Visita a las Pasarelas y los Balcones', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_roja.png', 'Duración 4 horas', '2021-03-22 18:25:06'),
(103, '27', 'Regreso a El Calafate', '16.45', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', 'duración 1.30 minutos', '2021-03-22 18:26:19'),
(104, '27', 'Retorno al Hotel', '18.15', 'sin-icono', 'finalizacion', '', '2021-03-22 18:27:11'),
(105, '29', 'comienza Pick-Up en el Hotel', '8.00 AM', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', '40 km de distancia', '2021-03-22 18:32:37'),
(106, '29', 'Embarque en Puerto', '9.10', 'vistas/img/barco.png', 'vistas/img/linea_azul.png', 'Navegación Lago Argentino', '2021-03-22 18:32:59'),
(107, '29', 'Vistas de los Cerros Negro y Mayo', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Trekking em Bahia Toro', '2021-03-22 18:36:01'),
(108, '29', 'visita a las Pasarelas y los Balcones Glaciar Moreno', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'caminata libre', '2021-03-22 18:38:02'),
(109, '29', 'Retorno al Puerto', '17.00', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', 'Regreso a El Calafate', '2021-03-22 18:41:50'),
(110, '29', 'Retorno al Hotel', '18.00', 'sin-icono', 'finalizacion', '', '2021-03-22 18:42:29'),
(111, '30', 'Comienza Pick-Up en el Hotel', '8.00 AM', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', 'Recorrida de 70 Km.', '2021-03-22 18:45:52'),
(112, '30', 'Recepción Estancia Nibepo Aike', '9.30', 'vistas/img/barco.png', 'vistas/img/linea_azul.png', 'Navegación Lago Argentino', '2021-03-22 18:47:29'),
(113, '30', 'Trekking al Lago Frias', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Trekking', '2021-03-22 18:49:53'),
(114, '30', 'Navegación Lago Frias', '', 'vistas/img/barco.png', 'vistas/img/linea_azul.png', 'Trekking hacia El glaciar Grande', '2021-03-22 18:53:28'),
(115, '30', 'Trekking hacia el Glaciar Grande', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Vista de los Glaciares', '2021-03-22 18:57:21'),
(116, '30', 'Regreso ala Estancia', '17.30', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', 'Regreso a El Calafate', '2021-03-22 18:59:32'),
(117, '30', 'Retorno al Hotel', '19.00', 'sin-icono', 'finalizacion', '', '2021-03-22 19:00:19'),
(118, '31', 'Comenzando Pick-up en el Hotel ', '9.00 AM', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Distancia hasta Nibepo Aike 70 Km', '2021-03-22 19:06:08'),
(119, '31', 'Recepción Estancia Nibepo Aike', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Esquila de ovejas y caminata', '2021-03-22 19:07:14'),
(120, '31', 'Almuerzo en la Estancia', '', 'vistas/img/barco.png', 'vistas/img/linea_azul.png', 'Navegación Lago Argentino', '2021-03-22 19:11:08'),
(121, '31', 'Caminata por El Bosque', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Mirador Glaciar Moreno', '2021-03-22 19:12:18'),
(122, '31', 'Visita a las Pasarelas y Balcones', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Retorno a El Calafate', '2021-03-22 19:13:39'),
(123, '31', 'Retorno al Hotel', '19.30 ', 'sin-icono', 'finalizacion', '', '2021-03-22 19:14:43'),
(124, '32', 'Comienza Pick-Up en el Hotel', '6.50 AM', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', '77 Km a El Glaciar Moreno', '2021-03-22 19:27:57'),
(125, '32', 'Visita al Glaciar Moreno', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_roja.png', 'Duración 2 horas', '2021-03-22 19:28:54'),
(126, '32', 'Presentación en el domo', '10.00', 'vistas/img/kayak.png', 'vistas/img/linea_azul.png', 'Duración Excursión en Kayak 1.30', '2021-03-22 19:31:49'),
(127, '32', 'Snack en Domo', '13.30', 'vistas/img/picnic.png', 'vistas/img/linea_roja.png', 'Visita 3 horas a las pasarelas', '2021-03-22 19:33:31'),
(128, '32', 'Regreso a El Calafate', '16.45', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', 'Duración 1.30', '2021-03-22 19:38:51'),
(129, '32', 'Retorno al Hotel', '18.15', 'sin-icono', 'finalizacion', '', '2021-03-22 19:40:11'),
(130, '33', 'Pick Up en el Hotel', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', '', '2021-03-22 19:42:25'),
(131, '33', 'Arribo al punto de embarque', '', 'vistas/img/kayak.png', 'vistas/img/linea_azul.png', 'Duración paseo en Kayak', '2021-03-22 19:43:38'),
(132, '33', 'Retorno al Hotel', '', 'sin-icono', 'finalizacion', '', '2021-03-22 19:44:16'),
(133, '34', 'Pick up en el Hotel', '9.00 AM', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', '40 Km a recorrer', '2021-03-23 06:21:34'),
(134, '34', 'Arribo a Charles Fuhr', '', 'vistas/img/kayak.png', 'vistas/img/linea_azul.png', 'Kayak 15 Km. por el río', '2021-03-23 06:24:55'),
(135, '34', 'Arribo Estancia El Rincón', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Almuerzo', '2021-03-23 06:26:41'),
(136, '34', 'Partida a El Calafate', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Recorrido en 4x4', '2021-03-23 06:27:54'),
(137, '34', 'Llegada al Hotel', '14.30', 'sin-icono', 'finalizacion', '', '2021-03-23 06:28:53'),
(138, '35', 'Comienza Pick-Up en el Hotel', '6.50 AM', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', '260 Km al Lago', '2021-03-23 06:32:19'),
(139, '35', 'Llegada al Lago del Desierto ', '', 'vistas/img/barco.png', 'vistas/img/linea_azul.png', 'Navegación ', '2021-03-23 06:34:31'),
(140, '35', 'Almuerzo en el Bosque', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Trekking Glaciar Vespignani ', '2021-03-23 06:36:28'),
(141, '35', 'Regreso a El Chalten', '15.00', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Salida para El Calafate', '2021-03-23 06:38:47'),
(142, '35', 'Retorno al Hotel', '20.00', 'sin-icono', 'finalizacion', '', '2021-03-23 06:39:49'),
(145, '1', 'Arribo a El Calafate', '18.15', 'sin-icono', 'finalizacion', '', '2021-03-23 16:39:11'),
(146, '2', 'Arribo a El Calafate', '18.15', 'sin-icono', 'finalizacion', '', '2021-03-23 16:42:10'),
(147, '3', 'Retorno al Hotel', '17.00', 'sin-icono', 'finalizacion', '', '2021-03-23 16:45:46'),
(148, '8', 'Comienza Pick-Up en el Hotel', '6.50 AM', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Distancia a recorrer 220', '2021-03-23 16:53:26'),
(149, '8', 'Visita al Centro de Interpretación', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Caminata Mirador de Los Condores', '2021-03-23 16:56:24'),
(150, '8', 'Visita al Chorrillo del Salto', '', 'vistas/img/cubiertos.png', 'vistas/img/linea_azul.png', 'Almuerzo Rancho Grande', '2021-03-23 16:57:59'),
(151, '8', 'Visita a la ciudad', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Regreso a El Calafate', '2021-03-23 16:59:04'),
(152, '8', 'Retorno al hotel', '20.00', 'sin-icono', 'finalizacion', '', '2021-03-23 16:59:47'),
(156, '28', 'Día 1: Recogida en el Hotel', '4.00 PM', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Distancia a Puerto 40 Km.\r\n\r\nComienza la Navegación ', '2021-03-23 22:41:32'),
(157, '28', 'Día 2: Desembarque en Puesto de las Vacas', '', 'vistas/img/barco.png', 'vistas/img/linea_azul.png', 'Caminata y posterior navegación al Glaciar Spegazzini y Glaciar Upsala, navegación al Seno Mayo pernocte.', '2021-03-23 22:46:02'),
(158, '28', 'Día 3: Vistas de los Glaciares Mayo y Negro', '', 'vistas/img/barco.png', 'vistas/img/linea_azul.png', ' Navegación al Glaciar Moreno', '2021-03-23 22:52:11'),
(159, '28', 'Regreso a Punta Banderas', '4.00 PM', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Desembarco y traslado a El Calafate', '2021-03-23 23:01:25'),
(160, '28', 'Regreso al Hotel', '5.00 PM', 'sin-icono', 'finalizacion', '', '2021-03-23 23:02:24'),
(166, '37', 'Pick Up en el Hotel', '07.15 a.m.', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', '40 Km hasta puerto Punta Banderas', '2021-03-24 03:24:53'),
(167, '37', 'Embarque en Puerto', '08.30 a.m.', 'vistas/img/barco.png', 'vistas/img/linea_azul.png', 'Navegación frente al Glaciar Upsala', '2021-03-24 03:25:35'),
(168, '37', 'Arribo Estancia Cristina', '', 'vistas/img/camioneta_4x4.png', 'vistas/img/linea_azul.png', 'Recorrido 4x4', '2021-03-24 03:29:40'),
(169, '37', 'Mirador Upsala', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Trekking Cañadón de los Fosiles', '2021-03-24 03:32:01'),
(170, '37', 'Retorno al Puerto', '', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', 'Regreso a El Calafate', '2021-03-24 03:33:33'),
(171, '37', 'Retorno al Hotel', '20.00 Hs.', 'sin-icono', 'finalizacion', '', '2021-03-24 03:34:45'),
(172, '36', 'pick Up en el Hotel', '07.15 a.m.', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', '40 km hasta Puerto Banderas', '2021-03-24 03:37:47'),
(173, '36', 'Embarque en Puerto', '08.30 a.m.', 'vistas/img/barco.png', 'vistas/img/linea_azul.png', 'Navegación frente al Glaciar Upsala', '2021-03-24 03:38:13'),
(174, '36', 'Arribo Estancia Cristina', '', 'vistas/img/camioneta_4x4.png', 'vistas/img/linea_azul.png', 'Recorrido 4x4', '2021-03-24 03:40:34'),
(175, '36', 'Visita al Mirador Upsala', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'visita al Museo', '2021-03-24 03:42:07'),
(176, '36', 'Retorno al Puerto', '19.00', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', 'Regreso a El Calafate', '2021-03-24 03:43:05'),
(177, '36', 'Retorno al Hotel', '20.00 Hs.', 'sin-icono', 'finalizacion', '', '2021-03-24 03:44:04'),
(178, '38', 'Pick Up en el Hotel', '07.15 a.m.', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', '40 km hasta el Puerto Bandera', '2021-03-24 03:47:21'),
(179, '38', 'Embarque en Puerto', '08.30 a.m.', 'vistas/img/barco.png', 'vistas/img/linea_azul.png', 'Navegación frente a el Glaciar Upsala', '2021-03-24 03:48:27'),
(180, '38', 'Arribo a la Estancia', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Visita por la estancia', '2021-03-24 03:49:42'),
(181, '38', 'Retorno al Puerto', '19.00 hs', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Retorno a El Calafate', '2021-03-24 03:51:15'),
(182, '38', 'Retorno al Hotel', '20.00 Hs.', 'sin-icono', 'finalizacion', '', '2021-03-24 03:52:03'),
(183, '39', 'pick Up en el Hotel', '08.00 a.m.', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', 'Recorrido 102 Km.', '2021-03-24 03:55:50'),
(184, '39', 'Arribo al Parador La leona', '9.30', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Visita al museo', '2021-03-24 03:57:10'),
(185, '39', 'Arribo Estancia La Estela', '', 'vistas/img/jinete.png', 'vistas/img/linea_azul.png', 'Cabalgata por la costa', '2021-03-24 03:58:30'),
(186, '39', 'Almuerzo en la Estancia', '', 'vistas/img/kayak.png', 'vistas/img/linea_azul.png', 'Rafting', '2021-03-24 03:59:57'),
(187, '39', 'Desembarque parador La Leona', '15.00', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', 'Regreso a El Calafate', '2021-03-24 04:01:25'),
(188, '39', 'Retorno al Hotel', '16.00', 'sin-icono', 'finalizacion', '', '2021-03-24 04:02:09'),
(189, '40', 'Pick Up en el Hotel', '6.50 AM', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', '220 Km. a El Chalten', '2021-03-24 04:05:46'),
(190, '40', 'Arribo a El Chalten', '11.00', 'sin-icono', 'vistas/img/linea_azul.png', '', '2021-03-24 04:08:47'),
(191, '40', 'Rafting', '', 'vistas/img/kayak.png', 'vistas/img/linea_azul.png', '2 Horas de duración', '2021-03-24 04:09:36'),
(192, '40', 'Regreso al campamento base', '', 'vistas/img/picnic.png', 'vistas/img/linea_azul.png', 'Snack', '2021-03-24 04:11:21'),
(193, '40', 'Partida desde El Chalten', '17.00', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Regreso a El Calafate', '2021-03-24 04:13:01'),
(194, '40', 'Retorno al Hotel', '20.00', 'sin-icono', 'finalizacion', '', '2021-03-24 04:13:47'),
(195, '41', 'Pick-up en el Hotel', '11.00', 'vistas/img/camioneta_4x4.png', 'vistas/img/linea_azul.png', 'Recorrido en 4x4', '2021-03-24 04:15:55'),
(196, '41', 'Mirador Panoramico', '', 'vistas/img/binoculares.png', 'vistas/img/linea_azul.png', 'Vistas del Lago Argentino', '2021-03-24 04:17:59'),
(197, '41', 'Pinturas rupestres milenarias', '', 'vistas/img/cueva_mano.png', 'vistas/img/linea_azul.png', 'Pinturas Tehuelches', '2021-03-24 04:20:02'),
(198, '41', 'Almuerzo en la cueva', '', 'vistas/img/cubiertos.png', 'vistas/img/linea_azul.png', 'Cazuela de cordero Patagonico', '2021-03-24 04:22:14'),
(199, '41', 'Retorno al Hotel', '14.00', 'sin-icono', 'finalizacion', '', '2021-03-24 04:22:49'),
(200, '44', 'Pick-up en el Hotel', '20.30 hs.', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', '45 Km a la Estancia', '2021-03-25 02:32:24'),
(201, '44', 'Bienvenida en la estancia', '', 'vistas/img/cubiertos.png', 'vistas/img/linea_azul.png', 'Cena', '2021-03-25 02:33:40'),
(202, '44', 'Visita al Museo Tehuelche', '', 'vistas/img/binoculares.png', 'vistas/img/linea_azul.png', 'Proyección y explicación', '2021-03-25 02:35:23'),
(203, '44', 'Avistase de estrellas', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Regreso a El Calafate', '2021-03-25 02:36:18'),
(204, '44', 'Retorno al Hotel', '01.00 a.m.', 'sin-icono', 'finalizacion', '', '2021-03-25 02:37:03'),
(205, '45', 'Pick-up en el Hotel', '', 'vistas/img/camioneta_4x4.png', 'vistas/img/linea_azul.png', '4x4 hasta la estancia', '2021-03-25 02:53:15'),
(206, '45', 'Ingreso a la reserva', '', 'vistas/img/binoculares.png', 'vistas/img/linea_azul.png', 'Avistase flora y fauna', '2021-03-25 02:54:33'),
(207, '45', 'Caminata', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Isla de los fóciles ', '2021-03-25 02:56:37'),
(208, '45', 'Visita puesto de la estancia', '', 'vistas/img/cubiertos.png', 'vistas/img/linea_azul.png', 'Almuerzo o cena', '2021-03-25 02:58:08'),
(209, '45', 'retorno al Hotel', '', 'sin-icono', 'finalizacion', '', '2021-03-25 02:58:35'),
(210, '46', 'Pick up en el Hotel', '', 'vistas/img/camioneta_4x4.png', 'vistas/img/linea_azul.png', '4x4 a la estancia', '2021-03-25 03:10:57'),
(211, '46', 'Arribo al Cerro', '', 'vistas/img/binoculares.png', 'vistas/img/linea_azul.png', 'Mirador panorámico  ', '2021-03-25 03:12:25'),
(212, '46', 'Caminata por el cerro', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Duración 20 minutos', '2021-03-25 03:13:31'),
(213, '46', 'Visita al refugio', '', 'vistas/img/cubiertos.png', 'vistas/img/linea_azul.png', 'Almuerzo, merienda o cena', '2021-03-25 03:15:04'),
(214, '46', 'Retorno al Hotel', '', 'sin-icono', 'finalizacion', '', '2021-03-25 03:15:24'),
(215, '47', 'Pick up en el Hotel', '', 'vistas/img/camioneta_4x4.png', 'vistas/img/linea_azul.png', '4x4 a la estancia', '2021-03-25 03:34:10'),
(216, '47', 'Arribo al cerro', '', 'vistas/img/binoculares.png', 'vistas/img/linea_azul.png', 'Mirador panoramico', '2021-03-25 03:35:12'),
(217, '47', 'Laberinto de piedras', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Visita Piedra de los Sombreros', '2021-03-25 03:36:58'),
(218, '47', 'Retorno al Hotel', '', 'sin-icono', 'finalizacion', '', '2021-03-25 03:37:33'),
(219, '48', 'Pick-up en el Hotel', '', 'vistas/img/camioneta_4x4.png', 'vistas/img/linea_azul.png', 'Travesía 4x4', '2021-03-26 00:23:35'),
(220, '48', 'Arribo al Lago Argentino', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Charla sobre flora y fauna', '2021-03-26 00:26:42'),
(221, '48', 'Mirador panoámicoamicoa', '', 'vistas/img/binoculares.png', 'vistas/img/linea_azul.png', 'Vistas del Lago y la Cordillera', '2021-03-26 00:28:19'),
(222, '48', 'Arribo al Domo', '', 'vistas/img/cubiertos.png', 'vistas/img/linea_azul.png', 'Almuerzo o merienda\r\n', '2021-03-26 00:29:42'),
(223, '48', 'Retorno al Hotel', '', 'sin-icono', 'finalizacion', '', '2021-03-26 00:30:05'),
(224, '49', 'Pick-up en el Hotel', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', '25 km. de distancia', '2021-03-26 00:45:17'),
(225, '49', 'arribo al Cerro Frías', '', 'vistas/img/tirolesa.png', 'vistas/img/linea_azul.png', '5 tramos de tirolesa', '2021-03-26 00:46:50'),
(226, '49', 'Retorno a la basa del cerro', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Regreso a El Calafate', '2021-03-26 00:48:55'),
(227, '49', 'Retorno al Hotel', '', 'sin-icono', 'finalizacion', '', '2021-03-26 00:49:41'),
(228, '50', 'Pick Up en el Hotel', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', '25 km. a el cerro', '2021-03-26 02:02:08'),
(229, '50', 'Arribo al Cerro Frías', '', 'vistas/img/camioneta_4x4.png', 'vistas/img/linea_azul.png', 'Recorrido por la cima del cerro', '2021-03-26 02:06:08'),
(230, '50', 'Retorno a la base del cerro', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Regreso a El Calafate', '2021-03-26 02:07:34'),
(231, '50', 'Retorno al Hotel', '', 'sin-icono', 'finalizacion', '', '2021-03-26 02:08:08'),
(237, '52', 'Pick Up en el Hotel', '6.00', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Distancia 270 km.', '2021-03-27 14:18:34'),
(238, '52', 'Paso Fronterizo Argentino-Chileno ', '9.30', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Trámites aduaneros, pueden demorar y con esto alterar el horario de arribo a Laguna Amarga', '2021-03-27 14:20:49'),
(239, '52', 'Parador El Ovejero ', '', 'vistas/img/casa.png', 'vistas/img/linea_azul.png', 'Posibilidad de cambio de divisas por pesos Chilenos para quien lo necesite', '2021-03-27 14:22:04'),
(240, '52', 'Arribo Laguna Amarga Portería', '12.00', 'sin-icono', 'finalizacion', '', '2021-03-27 14:27:35'),
(241, '53', 'Pick up hotel', '6.00', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Distancia 290 km', '2021-03-27 15:40:42'),
(242, '53', 'Paso fronterizo argentino-chileno', '09:30', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Trámites aduaneros, pueden demorar y con ésto alterar el horario de llegada a Pudeto.', '2021-03-27 15:44:18'),
(243, '53', 'Parador El Ovejero', '', 'vistas/img/casa.png', 'vistas/img/linea_azul.png', 'Posibilidad de cambiar divisas por pesos chilenos. Uso de sanitarios.', '2021-03-27 15:48:01'),
(244, '53', 'Arribo a Laguna Amarga', '12:00', 'vistas/img/casa.png', 'vistas/img/linea_azul.png', 'Pago de entrada al Parque Nacional.', '2021-03-27 15:49:23'),
(245, '53', 'Arribo a Pudeto', '13:45', 'sin-icono', 'finalizacion', '', '2021-03-27 15:50:50'),
(246, '54', 'Pick Up en el Hotel', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', '24 km. hasta el cerro', '2021-03-28 07:48:44'),
(247, '54', 'Arribo al Cerro Frías', '', 'vistas/img/jinete.png', 'vistas/img/linea_azul.png', 'Cabalgata de 1.30  minutos de duración.', '2021-03-28 07:50:22'),
(248, '54', 'Retorno a la Hosteria Eolo', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Regreso a El Calafate', '2021-03-28 07:51:29'),
(249, '54', 'Retorno al Hotel', '', 'sin-icono', 'finalizacion', '', '2021-03-28 07:51:58'),
(250, '55', 'Pick Up en el Hotel', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', '24 Km. a el cerro', '2021-03-28 07:54:57'),
(251, '55', 'Arrivo al Cerro Frías ', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', '2 horas de trekking por el Valle del Cerro Frías.', '2021-03-28 07:56:36'),
(252, '55', 'Retorno a la Hosteria Eolo', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Regreso a El Calafate', '2021-03-28 07:58:23'),
(253, '55', 'Retorno al Hotel', '', 'sin-icono', 'finalizacion', '', '2021-03-28 07:58:44'),
(254, '56', 'Pick Up en el Hotel', '05.50 horas', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Distancia a Puerto Natales 274 km.', '2021-03-28 08:04:57'),
(255, '56', 'Paso Fronterizo Argentino-Chileno ', '09.30 hs.', 'vistas/img/casa.png', 'vistas/img/linea_azul.png', 'Tramites aduaneros, depende de la duración de los mismos puede alterar la llegada a Puerto Natales', '2021-03-28 08:07:25'),
(256, '56', 'Arribo a Puerto Natales ', '12.00 hs.', 'sin-icono', 'finalizacion', '', '2021-03-28 08:09:13'),
(257, '57', 'Salida de la terminal de micros de El Calafate o El chalten', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Primer tramo, distancia a Perito Moreno 671 Km.', '2021-03-28 08:12:30'),
(258, '57', 'Arribo a Perito Moreno', '', 'vistas/img/casa.png', 'vistas/img/linea_azul.png', '', '2021-03-28 08:16:54'),
(259, '57', 'Salida desde Perito Moreno a Bariloche ', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Ultimo tramo 799 Km. ', '2021-03-28 08:20:49'),
(260, '57', 'Arribo a Bariloche', '', 'sin-icono', 'finalizacion', '', '2021-03-28 08:24:54'),
(261, '58', 'Salida de la terminal e El Calafate/El Chaltén', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Distancia a Perito Moreno 671 km.\r\nParadas de 20 minutos en el camino', '2021-03-28 08:29:32'),
(262, '58', 'Arribo a Perito Moeno', '', 'sin-icono', 'finalizacion', '', '2021-03-28 08:31:13'),
(263, '59', 'Pick Up en el Hotel', '6.50 a.m.', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', '220 km a El Chaltén ', '2021-03-28 08:46:04'),
(264, '59', 'Arribo a El Chalten', '11.00 a.m.', 'vistas/img/casa.png', 'vistas/img/linea_azul.png', 'Centro de Interpretación ', '2021-03-28 08:51:03'),
(265, '59', 'Trekking a eleccion desde El Chaltén', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Trekking autoguiado de 5 a 6 horas', '2021-03-28 08:52:58'),
(266, '59', 'Regreso a El Chalten', '4.50 p.m.', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Retorno a El Calafate ', '2021-03-28 08:54:58'),
(267, '59', 'Retorno al Hotel', '8.00 p.m.', 'sin-icono', 'finalizacion', '', '2021-03-28 08:55:42'),
(268, '60', 'Pick Up en el Hotel', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Distancia de El Calafate 4 KM', '2021-03-28 08:58:38'),
(269, '60', 'Llegada al Punto inicio de la Cabalgata', '', 'vistas/img/jinete.png', 'vistas/img/linea_azul.png', '1.40 minutos de Cabalgata', '2021-03-28 09:02:31'),
(270, '60', 'Retorno al punto de partida cabalgata', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Regreso a la ciudad', '2021-03-28 09:03:56'),
(271, '60', 'Retorno al Hotel', '', 'sin-icono', 'finalizacion', '', '2021-03-28 09:05:04'),
(272, '62', 'Pick Up en el Hotel', '9.00 AM', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', 'Distancia a La Leona 106 Km', '2021-03-28 09:11:11'),
(273, '62', 'Visita el parador La Leona', '10.15', 'vistas/img/casa.png', 'vistas/img/linea_azul.png', 'Arribo a la Estancia', '2021-03-28 09:13:11'),
(274, '62', 'Trekking Bosque Petrificado', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', '3 hoas de duración.', '2021-03-28 09:14:28'),
(275, '62', 'Regreso al Parador La Leona', '2.00 p.m.', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', 'Regreso a El Calafate', '2021-03-28 09:16:02'),
(276, '62', 'Retorno al Hotel', '', 'sin-icono', 'finalizacion', '', '2021-03-28 09:17:16'),
(277, '63', 'Pick Up en el Hotel', '11.00 a.m.', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', '4 km. ', '2021-03-28 09:20:07'),
(278, '63', 'Arribo a la caballeriza', '', 'vistas/img/jinete.png', 'vistas/img/linea_azul.png', '4 horas de cabalgata', '2021-03-28 09:21:30'),
(279, '63', 'Vistas Panorámicas', '', 'vistas/img/picnic.png', 'vistas/img/linea_azul.png', 'picnic junto al lago', '2021-03-28 09:22:56'),
(280, '63', 'Regreso a la Caballeriza', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Regreso a El Calafate', '2021-03-28 09:24:28'),
(281, '63', 'Retorno al Hotel', '4.00 p.m.', 'sin-icono', 'finalizacion', '', '2021-03-28 09:25:22'),
(282, '64', 'Pick Up en el Hotel', '', 'vistas/img/camioneta_4x4.png', 'vistas/img/linea_azul.png', 'Recorrido en 4x4', '2021-03-28 10:55:24'),
(283, '64', 'Arribo al cerro Wuiliche', '', 'vistas/img/binoculares.png', 'vistas/img/linea_azul.png', 'Vistas panorámicas desde el mirador.', '2021-03-28 10:58:48'),
(284, '64', 'Tirolesa', '', 'vistas/img/tirolesa.png', 'vistas/img/linea_azul.png', 'Descenso en tirolesa de casi 3 Km. ', '2021-03-28 10:59:52'),
(285, '64', 'Arribo a la Estancia Wuiliche', '', 'vistas/img/cubiertos.png', 'vistas/img/linea_azul.png', 'Almuerzo o merienda depende el turno', '2021-03-28 11:05:11'),
(286, '64', 'Retorno al Hotel', '', 'sin-icono', 'finalizacion', '', '2021-03-28 11:05:58'),
(287, '65', 'Pick Up en el Hotel', '06.50 a.m.', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Distancia a El Chaltén 220 Km.', '2021-03-28 11:09:22'),
(288, '65', 'Arribo a El Chaltén', '11.30 a.m', 'vistas/img/casa.png', 'vistas/img/linea_azul.png', 'Visita Centro Interpretación\r\n', '2021-03-28 13:11:30'),
(289, '65', 'Traslado a Estancia El Pilar', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Trekking de 6 horas Guiado', '2021-03-28 13:15:41'),
(290, '65', 'Regreso a El Chalten', '05.00 p.m.', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Regreso a E Calafate', '2021-03-28 13:16:39'),
(291, '65', 'Retorno a El Hotel', '08.00 p.m.', 'sin-icono', 'finalizacion', '', '2021-03-28 13:17:07'),
(292, '66', 'Pick Up en el Hotel', '09.00 ', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Distancia 50 Km.', '2021-03-28 13:21:11'),
(293, '66', 'Arribo Estancia Lago Roca', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Trekking al mirador del Glaciar Moreno', '2021-03-28 13:22:40'),
(294, '66', 'Campamento Río Rico', '', 'vistas/img/cubiertos.png', 'vistas/img/linea_azul.png', 'Almuerzo', '2021-03-28 13:24:20'),
(295, '66', 'Regreso a El Calafate', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', '', '2021-03-28 13:25:08'),
(296, '66', 'Retorno al Hotel', '17.00', 'sin-icono', 'finalizacion', '', '2021-03-28 13:25:54'),
(297, '67', 'Pick Up en el Hotel', '08.30', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Distancia 40 Km.', '2021-03-28 13:27:48'),
(298, '67', 'Arribo al Lago Roca', '', 'vistas/img/jinete.png', 'vistas/img/linea_azul.png', 'Cabalgata dentro de la Estancia Nibepo Aike', '2021-03-28 13:28:23'),
(299, '67', 'Mirador Glaciar Moreno', '', 'vistas/img/cubiertos.png', 'vistas/img/linea_azul.png', 'Almuerzo Bifes al disco', '2021-03-28 13:33:00'),
(300, '67', 'Retorno al Hotel', '17.00', 'sin-icono', 'finalizacion', '', '2021-03-28 13:33:55'),
(301, '68', 'Pick Up en el Hotel', '16.15', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', 'Recorrido 20 Km.', '2021-03-28 13:37:27'),
(302, '68', 'Recepción en la estanca', '17.00', 'vistas/img/ovejita.png', 'vistas/img/linea_azul.png', 'Arreo de ovejas', '2021-03-28 13:38:39'),
(303, '68', 'Visita a los corrales', '', 'vistas/img/jinete.png', 'vistas/img/linea_azul.png', 'Cabalgata de 45 minutos', '2021-03-28 13:40:52'),
(304, '68', 'Retorno a la Estancia', '18.45', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', 'Regreso a El Calafate', '2021-03-28 13:42:55'),
(305, '68', 'Retorno al Hotel', '19.30', 'sin-icono', 'finalizacion', '', '2021-03-28 13:43:29'),
(306, '69', 'Pick Up en el Hotel', '17.30', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', 'Distancia 3 Km.', '2021-03-28 13:47:42'),
(307, '69', 'Recepción en la estancia', '18.00', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Caminata por la estancia.\r\n ', '2021-03-28 13:49:01'),
(308, '69', 'Visita al galpon de esquila', '', 'vistas/img/ovejita.png', 'vistas/img/linea_azul.png', 'Demostración de arreo de ovejas con perros.', '2021-03-28 13:51:04'),
(309, '69', 'Cena show', '', 'vistas/img/cubiertos.png', 'vistas/img/linea_azul.png', 'Cordero Patagónico ', '2021-03-28 13:52:38'),
(310, '69', 'Fin de la visita ', '22.30', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', 'Regreso a el Calafate', '2021-03-28 13:53:22'),
(311, '69', 'Retorno al Hotel', '23.00', 'sin-icono', 'finalizacion', '', '2021-03-28 13:55:07'),
(312, '70', 'Pick Up en el Hotel', '16.30', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', 'Distancia 20 km.', '2021-03-28 13:58:34'),
(313, '70', 'Recepción en la Estancia', '17.00', 'vistas/img/ovejita.png', 'vistas/img/linea_azul.png', 'Demostración arreo de ovejas', '2021-03-28 13:59:53'),
(314, '70', 'Caminata por la Estancia', '', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Visita al galpon de Esquila', '2021-03-28 14:01:02'),
(315, '70', 'Cena en la estancia', '', 'vistas/img/cubiertos.png', 'vistas/img/linea_azul.png', 'Asado de cordero patagonico', '2021-03-28 14:02:18'),
(316, '70', 'Fin de la visita ', '22.30', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', 'Regreso a El Calafate', '2021-03-28 14:03:46'),
(317, '70', 'Retorno al Hotel', '23.00', 'sin-icono', 'finalizacion', '', '2021-03-28 14:04:24'),
(318, '71', 'Pick Up en el Hotel', '6.50 a.m.', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', 'Distancia al puerto 40 Km.', '2021-03-28 14:08:39'),
(319, '71', 'Embarque en Puerto', '8.30 a.m.', 'vistas/img/barco.png', 'vistas/img/linea_azul.png', 'Navegación Lago Argentino', '2021-03-28 14:10:29'),
(320, '71', 'Navegación frente Glaciar Upsala', '', 'vistas/img/glaciar.png', 'vistas/img/linea_azul.png', '', '2021-03-28 14:11:46'),
(321, '71', 'Navegación frente Glaciar Spegazzini ', '', 'vistas/img/glaciar.png', 'vistas/img/linea_azul.png', '', '2021-03-28 14:13:05'),
(322, '71', 'Regreso al puerto', '2.00 a.m.', 'vistas/img/bus.png', 'vistas/img/linea_roja.png', 'Regreso a El Calafate', '2021-03-28 14:14:37'),
(323, '71', 'Retorno al Hotel', '15.30', 'sin-icono', 'finalizacion', '', '2021-03-28 14:15:21'),
(324, '72', 'Pick Up en el Hotel', '6.50 a.m.', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Distancia 220 Km.\r\n', '2021-03-28 14:21:08'),
(325, '72', 'Arribo a El Chaltén', '11.00 a.m.', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Visita al Chorrillo del Salto', '2021-03-28 14:24:43'),
(326, '72', 'Rancho Grande', '', 'vistas/img/cubiertos.png', 'vistas/img/linea_azul.png', 'Almuerzo', '2021-03-28 14:26:27'),
(327, '72', 'Navegación Glaciar Viedma', '', 'vistas/img/barco.png', 'vistas/img/linea_azul.png', 'Duración 2 horas', '2021-03-28 14:28:09'),
(328, '72', 'Regreso desde El Chalten', '17.00', 'sin-icono', 'vistas/img/linea_azul.png', 'Regreso a El Calafate', '2021-03-28 14:29:24'),
(329, '72', 'Retorno al Hotel', '8.00 p.m.', 'sin-icono', 'finalizacion', '', '2021-03-28 14:30:10'),
(330, '76', 'Presentación en terminal', '7:45 am.', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Pago tasa de Terminal.', '2021-04-06 06:48:05'),
(331, '76', 'Salida desde El Calafate', '8:00 am.', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Parada Parador la Leona 9:10 am. 20 minutos', '2021-04-06 06:49:15'),
(332, '76', 'Arribo terminal El Chaltén ', '11:10 am. ', 'sin-icono', 'finalizacion', '', '2021-04-06 06:51:02'),
(333, '77', 'Presentación en terminal', '0:45 pm.', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Pago Tasa de Terminal', '2021-04-06 06:59:49'),
(334, '77', 'Partida a El Chalten', '1:00 pm.', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', '220 km parada intermedia Parador La Leona.', '2021-04-06 07:01:57'),
(335, '77', 'Arribo a terminal El Chalten', '4:10 pm.', 'sin-icono', 'finalizacion', '', '2021-04-06 07:03:30'),
(336, '78', 'Presentación en terminal', '5:45 pm.', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Pago Tasa de Terminal', '2021-04-06 07:07:19'),
(337, '78', 'Partida a El Chaltén', '6:00 pm.', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', '220 km con una parada intermedia Parador la Leona', '2021-04-06 07:09:23'),
(338, '78', 'Arribo terminal El Chaltén ', '9:15 pm.', 'sin-icono', 'finalizacion', '', '2021-04-06 07:10:32'),
(339, '79', 'Presentación en terminal', '8:45 pm.', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Pago Tasa de Terminal', '2021-04-06 07:12:27'),
(340, '79', 'Partida a El Chaltén', '9:00 pm.', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', '220 km parada intermedia parador La Leona', '2021-04-06 07:14:05'),
(341, '79', 'Arribo terminal El Chaltén ', '12.20', 'sin-icono', 'finalizacion', '', '2021-04-06 07:14:40'),
(342, '80', 'Presentación en terminal ', '7:45 am.', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Pago Tasa Terminal', '2021-04-06 07:47:44'),
(343, '80', 'Salida a El Calafate', '8:00 am.', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', '220 Km, parada Parador La Leona', '2021-04-06 07:50:00'),
(344, '80', 'Arribo Terminal El Calafate', '11:30', 'sin-icono', 'finalizacion', '', '2021-04-06 07:51:02'),
(345, '81', 'Presentación en terminal ', '0:45 pm.', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Pago Tasa Terminal', '2021-04-06 07:53:36'),
(346, '81', 'Salida a El Calafate', '1:00 pm.', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', '220 km., parada intermedia Parador La Leona', '2021-04-06 07:54:39'),
(347, '81', 'Arribo Terminal El Calafate', '4:30 pm.', 'sin-icono', 'finalizacion', '', '2021-04-06 07:55:31'),
(348, '82', 'Presentación en terminal ', '5:45 pm.', 'vistas/img/persona_caminando.png', 'vistas/img/linea_azul.png', 'Pago Tasa Terminal', '2021-04-06 07:57:43'),
(349, '82', 'Salida a El Calafate', '6:00 pm.', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', '220 km., Parada intermedia Parador La Leona', '2021-04-06 07:58:33'),
(350, '82', 'Arribo Terminal El Calafate', '9:30', 'sin-icono', 'finalizacion', '', '2021-04-06 07:59:11'),
(351, '83', 'Salida desde terminal de El Calafate', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', '4 horas de recorrido 320 km.', '2021-04-14 06:39:30'),
(352, '83', 'Arribo terminal de Rio Gallegos', '', 'sin-icono', 'finalizacion', '', '2021-04-14 06:40:20'),
(353, '84', 'Salida desde terminal de El Calafate', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Recorrido Total 880 km.', '2021-04-14 06:44:14'),
(354, '84', 'Combinación  terminal de Río Gallegos', '', 'vistas/img/casa.png', 'vistas/img/linea_azul.png', 'Tiempo de espera terminal Río Gallegos', '2021-04-14 06:47:22'),
(355, '84', 'Salida desde terminal de Río Gallegos', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Frontera Argentino Chilena, tramites aduaneros', '2021-04-14 06:49:22'),
(356, '84', 'Ferry cruce a la isla', '', 'vistas/img/barco.png', 'vistas/img/linea_azul.png', 'Frontera Chilena Argentina', '2021-04-14 06:51:50'),
(357, '84', 'Terminal de Río Grande', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Continuación a Ushuaia', '2021-04-14 06:53:02'),
(358, '84', 'Arribo Terminal de Ushuaia', '', 'sin-icono', 'finalizacion', '', '2021-04-14 06:54:21'),
(359, '85', 'Salida desde terminal de El Calafate', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', '490 km. a Punta Arenas', '2021-04-14 06:59:30'),
(361, '85', 'Aduana Argentino Chilena', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Tramites migratorios, 80 km. a Puerto Natales', '2021-04-14 07:05:17'),
(362, '85', 'Arribo terminal Puerto Natales', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', 'Combinación Punta Arenas', '2021-04-14 07:06:05'),
(363, '85', 'Arribo terminal Punta Arenas', '', 'sin-icono', 'finalizacion', '', '2021-04-14 08:02:00'),
(364, '87', 'Aeropuerto de El calafate', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', '18 km. a la ciudad ', '2021-04-19 21:34:32'),
(365, '87', 'Arribo al Hotel', '', 'sin-icono', 'finalizacion', '', '2021-04-19 21:35:22'),
(366, '88', 'Pick Up en el Hotel', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', '18 Km. hasta el Aeropuerto', '2021-04-19 21:37:56'),
(367, '88', 'Arribo al Aeropuerto', '', 'sin-icono', 'finalizacion', '', '2021-04-19 21:38:20'),
(368, '89', 'Terminal bus El Chaltén', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', '220 km a terminal de El Calafate.', '2021-05-16 21:46:52'),
(369, '89', 'Terminal de bus El Calafate', '', 'sin-icono', 'finalizacion', '', '2021-05-16 21:47:56'),
(370, '92', 'Hotel en El Calafate', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', '40 minutos al Aeropuerto.', '2021-05-16 21:49:58'),
(371, '92', 'Aeropuerto de El Calafate', '', 'sin-icono', 'finalizacion', '', '2021-05-16 21:50:27'),
(372, '93', 'Aeropuerto de El Calafate', '', 'vistas/img/bus.png', 'vistas/img/linea_azul.png', '40 minutos al Hotel', '2021-05-16 21:51:59'),
(373, '93', 'Hoel en el Calafate', '', 'sin-icono', 'finalizacion', '', '2021-05-16 21:52:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes`
--

CREATE TABLE `redes` (
  `id` int(11) NOT NULL,
  `red` text NOT NULL,
  `icono` text NOT NULL,
  `detalle` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `redes`
--

INSERT INTO `redes` (`id`, `red`, `icono`, `detalle`, `fecha`) VALUES
(1, 'Whatsapp', 'fa fa-whatsapp', 'https://wa.me/5491136874665?text=%C2%A1Hola!%20Quisiera%20informaci%C3%B3n%20respecto%20a%20sus%20excursiones', '2021-04-20 23:34:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacion`
--

CREATE TABLE `relacion` (
  `id_r` int(11) NOT NULL,
  `id_subcategoria` text NOT NULL,
  `id_excursion` text NOT NULL,
  `fecha_r` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `relacion`
--

INSERT INTO `relacion` (`id_r`, `id_subcategoria`, `id_excursion`, `fecha_r`) VALUES
(20, '10', '9', '2021-03-01 04:03:46'),
(21, '8', '6', '2021-03-01 04:04:53'),
(32, '7', '15', '2021-03-06 01:48:02'),
(41, '1', '2', '2021-03-11 17:04:39'),
(42, '3', '5', '2021-03-11 17:06:36'),
(43, '3', '3', '2021-03-11 17:06:45'),
(50, '7', '1', '2021-03-11 18:18:57'),
(51, '7', '10', '2021-03-11 18:19:15'),
(52, '7', '18', '2021-03-11 18:19:23'),
(53, '7', '8', '2021-03-11 18:19:37'),
(54, '2', '2', '2021-03-11 18:21:37'),
(55, '2', '3', '2021-03-11 18:22:06'),
(57, '11', '5', '2021-03-11 18:22:55'),
(59, '11', '3', '2021-03-11 18:24:18'),
(61, '11', '4', '2021-03-11 18:24:51'),
(62, '12', '9', '2021-03-11 18:33:43'),
(64, '13', '10', '2021-03-11 18:34:41'),
(65, '13', '18', '2021-03-11 18:34:52'),
(67, '15', '2', '2021-03-11 18:35:54'),
(68, '15', '3', '2021-03-11 18:36:14'),
(70, '15', '4', '2021-03-11 18:37:20'),
(71, '15', '5', '2021-03-11 18:37:31'),
(72, '16', '19', '2021-03-11 18:53:07'),
(73, '1', '20', '2021-03-17 17:58:14'),
(74, '1', '23', '2021-03-17 18:47:37'),
(75, '21', '6', '2021-03-17 20:17:54'),
(76, '1', '24', '2021-03-17 23:31:33'),
(77, '3', '25', '2021-03-18 02:53:32'),
(78, '3', '26', '2021-03-18 03:19:26'),
(79, '3', '27', '2021-03-19 10:54:30'),
(81, '3', '28', '2021-03-19 11:14:40'),
(86, '4', '29', '2021-03-24 02:56:54'),
(87, '4', '30', '2021-03-24 02:57:24'),
(88, '4', '31', '2021-03-24 02:57:37'),
(89, '4', '32', '2021-03-24 02:57:57'),
(90, '4', '33', '2021-03-24 02:58:15'),
(91, '4', '34', '2021-03-24 02:58:30'),
(92, '4', '35', '2021-03-24 02:58:48'),
(93, '4', '36', '2021-03-24 02:59:00'),
(94, '4', '37', '2021-03-24 02:59:16'),
(95, '4', '38', '2021-03-24 02:59:28'),
(96, '4', '39', '2021-03-24 02:59:43'),
(97, '4', '40', '2021-03-24 02:59:58'),
(98, '5', '24', '2021-03-24 03:07:47'),
(99, '5', '8', '2021-03-24 03:07:59'),
(100, '5', '41', '2021-03-24 03:18:41'),
(101, '5', '44', '2021-03-24 23:20:18'),
(102, '5', '45', '2021-03-24 23:39:52'),
(104, '5', '46', '2021-03-25 00:08:12'),
(105, '5', '47', '2021-03-25 00:25:41'),
(106, '5', '48', '2021-03-25 17:21:08'),
(107, '5', '49', '2021-03-25 18:07:30'),
(108, '5', '50', '2021-03-26 01:19:57'),
(109, '5', '54', '2021-03-27 00:37:57'),
(110, '5', '55', '2021-03-27 00:55:19'),
(111, '5', '61', '2021-03-27 01:16:32'),
(112, '5', '60', '2021-03-27 01:20:54'),
(113, '5', '63', '2021-03-27 01:41:51'),
(114, '5', '68', '2021-03-27 02:02:40'),
(115, '5', '75', '2021-03-29 00:47:55'),
(116, '6', '19', '2021-03-29 02:19:34'),
(117, '6', '69', '2021-03-29 02:44:13'),
(118, '6', '70', '2021-03-29 02:45:03'),
(119, '2', '5', '2021-03-29 02:56:12'),
(120, '2', '26', '2021-03-29 02:56:25'),
(121, '2', '27', '2021-03-29 02:56:39'),
(122, '2', '23', '2021-03-29 02:56:52'),
(123, '2', '23', '2021-03-29 02:57:11'),
(124, '2', '29', '2021-03-29 02:57:25'),
(125, '2', '31', '2021-03-29 02:57:39'),
(127, '2', '32', '2021-03-29 02:59:06'),
(128, '2', '28', '2021-03-29 02:59:17'),
(130, '11', '71', '2021-03-29 03:06:28'),
(131, '11', '36', '2021-03-29 03:07:50'),
(132, '11', '37', '2021-03-29 03:08:00'),
(133, '11', '38', '2021-03-29 03:08:26'),
(134, '11', '71', '2021-03-29 03:08:42'),
(135, '11', '28', '2021-03-29 03:09:05'),
(136, '5', '59', '2021-03-31 23:22:49'),
(137, '5', '62', '2021-03-31 23:23:32'),
(138, '5', '66', '2021-03-31 23:24:00'),
(139, '5', '67', '2021-03-31 23:24:28'),
(140, '12', '59', '2021-04-01 01:15:07'),
(141, '12', '8', '2021-04-01 01:15:29'),
(142, '12', '65', '2021-04-01 01:16:01'),
(143, '12', '35', '2021-04-01 01:16:24'),
(144, '12', '24', '2021-04-01 01:16:36'),
(145, '12', '40', '2021-04-01 01:17:18'),
(146, '12', '72', '2021-04-01 01:17:55'),
(147, '12', '7', '2021-04-01 01:18:04'),
(148, '13', '10', '2021-04-01 01:19:27'),
(149, '13', '18', '2021-04-01 01:19:37'),
(150, '13', '52', '2021-04-01 01:20:18'),
(151, '13', '53', '2021-04-01 01:20:32'),
(152, '14', '41', '2021-04-01 01:21:46'),
(153, '14', '44', '2021-04-01 01:22:06'),
(155, '14', '19', '2021-04-01 01:26:00'),
(156, '14', '46', '2021-04-01 01:26:31'),
(157, '14', '69', '2021-04-01 01:26:55'),
(158, '14', '60', '2021-04-01 01:27:18'),
(159, '14', '63', '2021-04-01 01:27:46'),
(161, '14', '47', '2021-04-01 01:29:34'),
(162, '14', '33', '2021-04-01 01:30:01'),
(163, '14', '34', '2021-04-01 01:30:18'),
(164, '14', '39', '2021-04-01 01:34:40'),
(165, '14', '62', '2021-04-01 01:34:52'),
(166, '14', '48', '2021-04-01 01:35:18'),
(167, '14', '49', '2021-04-01 01:35:36'),
(168, '14', '50', '2021-04-01 01:35:52'),
(169, '14', '54', '2021-04-01 01:36:08'),
(170, '14', '55', '2021-04-01 01:36:53'),
(171, '14', '70', '2021-04-01 01:37:16'),
(172, '14', '68', '2021-04-01 01:38:42'),
(173, '15', '1', '2021-04-01 01:39:27'),
(174, '15', '2', '2021-04-01 01:39:38'),
(175, '15', '3', '2021-04-01 01:39:58'),
(176, '15', '4', '2021-04-01 01:40:08'),
(177, '15', '5', '2021-04-01 01:40:23'),
(178, '15', '29', '2021-04-01 01:40:39'),
(179, '15', '30', '2021-04-01 01:41:59'),
(180, '15', '31', '2021-04-01 01:42:11'),
(181, '15', '71', '2021-04-01 01:42:25'),
(182, '15', '23', '2021-04-01 01:42:40'),
(183, '15', '36', '2021-04-01 01:42:55'),
(184, '15', '37', '2021-04-01 01:43:04'),
(185, '15', '38', '2021-04-01 01:43:25'),
(186, '15', '24', '2021-04-01 01:43:39'),
(187, '15', '72', '2021-04-01 01:43:59'),
(188, '14', '28', '2021-04-01 01:46:42'),
(189, '16', '30', '2021-04-01 01:47:15'),
(190, '16', '19', '2021-04-01 01:47:25'),
(191, '16', '31', '2021-04-01 01:47:35'),
(192, '16', '66', '2021-04-01 01:47:53'),
(193, '16', '67', '2021-04-01 01:48:19'),
(196, '17', '9', '2021-04-01 01:53:02'),
(197, '19', '53', '2021-04-01 01:54:01'),
(198, '20', '56', '2021-04-01 01:54:30'),
(199, '18', '57', '2021-04-01 01:54:40'),
(201, '21', '51', '2021-04-04 05:45:40'),
(202, '19', '52', '2021-04-04 06:18:55'),
(205, '17', '76', '2021-04-06 06:22:51'),
(206, '17', '77', '2021-04-06 06:24:22'),
(207, '17', '78', '2021-04-06 06:30:24'),
(208, '17', '79', '2021-04-06 06:45:34'),
(209, '17', '80', '2021-04-06 07:39:08'),
(210, '17', '81', '2021-04-06 07:39:22'),
(212, '17', '82', '2021-04-06 07:40:10'),
(213, '6', '38', '2021-04-07 11:41:11'),
(214, '34', '85', '2021-04-09 14:18:47'),
(215, '33', '84', '2021-04-09 14:19:16'),
(216, '32', '83', '2021-04-09 14:19:29'),
(217, '31', '57', '2021-04-09 18:38:34'),
(218, '35', '58', '2021-04-09 18:41:12'),
(219, '36', '87', '2021-04-19 21:44:03'),
(220, '36', '88', '2021-04-19 21:44:24'),
(221, '14', '64', '2021-05-14 21:28:37'),
(222, '17', '89', '2021-05-16 21:12:37'),
(223, '35', '90', '2021-05-16 21:22:33'),
(224, '36', '92', '2021-05-16 21:43:52'),
(225, '36', '93', '2021-05-16 21:44:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reopcional`
--

CREATE TABLE `reopcional` (
  `id_ro` int(11) NOT NULL,
  `id_excursion` text NOT NULL,
  `id_opcional` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reopcional`
--

INSERT INTO `reopcional` (`id_ro`, `id_excursion`, `id_opcional`, `fecha`) VALUES
(5, '1', '6', '2021-04-30 09:41:55'),
(7, '1', '3', '2021-04-30 09:45:11'),
(9, '1', '7', '2021-04-30 18:05:04'),
(11, '2', '3', '2021-05-01 23:57:20'),
(12, '2', '1', '2021-05-02 00:04:01'),
(15, '23', '1', '2021-05-03 16:03:56'),
(17, '23', '3', '2021-05-03 16:04:40'),
(18, '62', '18', '2021-05-03 16:08:59'),
(19, '39', '17', '2021-05-03 16:09:23'),
(20, '38', '16', '2021-05-03 16:10:16'),
(21, '36', '16', '2021-05-03 16:11:16'),
(22, '37', '16', '2021-05-03 16:11:35'),
(28, '24', '3', '2021-05-03 16:14:41'),
(29, '35', '3', '2021-05-03 16:15:29'),
(30, '72', '3', '2021-05-03 16:15:45'),
(31, '7', '3', '2021-05-03 16:16:21'),
(32, '7', '2', '2021-05-03 16:17:12'),
(33, '59', '3', '2021-05-03 16:17:55'),
(34, '59', '2', '2021-05-03 16:18:15'),
(42, '26', '14', '2021-05-03 21:12:38'),
(45, '3', '12', '2021-05-03 21:20:09'),
(46, '32', '14', '2021-05-03 21:21:21'),
(48, '71', '11', '2021-05-03 21:24:02'),
(50, '27', '14', '2021-05-03 21:25:13'),
(52, '4', '11', '2021-05-03 21:26:30'),
(53, '27', '3', '2021-05-04 18:24:15'),
(54, '71', '3', '2021-05-04 18:24:47'),
(55, '4', '3', '2021-05-04 18:25:50'),
(56, '3', '3', '2021-05-04 18:26:43'),
(57, '26', '3', '2021-05-04 18:27:07'),
(58, '5', '3', '2021-05-04 18:27:47'),
(60, '62', '3', '2021-05-04 18:29:37'),
(61, '72', '2', '2021-05-04 18:33:11'),
(63, '1', '22', '2021-05-07 18:43:48'),
(64, '19', '23', '2021-05-07 18:49:40'),
(65, '1', '4', '2021-05-10 11:20:37'),
(66, '46', '22', '2021-05-10 22:35:59'),
(67, '46', '24', '2021-05-10 22:39:35'),
(68, '2', '22', '2021-05-13 20:15:09'),
(69, '2', '24', '2021-05-13 20:15:47'),
(70, '1', '24', '2021-05-13 20:17:35'),
(71, '3', '22', '2021-05-13 20:19:07'),
(72, '3', '24', '2021-05-13 20:19:28'),
(73, '4', '22', '2021-05-13 20:23:32'),
(74, '46', '24', '2021-05-13 20:23:41'),
(75, '5', '22', '2021-05-13 20:26:42'),
(76, '46', '24', '2021-05-13 20:26:52'),
(77, '10', '13', '2021-05-13 20:34:37'),
(78, '23', '22', '2021-05-13 20:50:59'),
(79, '23', '24', '2021-05-13 20:51:16'),
(80, '26', '22', '2021-05-13 20:55:40'),
(81, '26', '24', '2021-05-13 20:56:03'),
(82, '27', '22', '2021-05-13 21:02:49'),
(83, '27', '24', '2021-05-13 21:03:03'),
(85, '29', '3', '2021-05-13 21:17:14'),
(86, '29', '22', '2021-05-13 21:18:45'),
(87, '29', '24', '2021-05-13 21:19:02'),
(88, '29', '27', '2021-05-13 21:28:12'),
(89, '30', '28', '2021-05-13 21:32:55'),
(90, '32', '14', '2021-05-13 21:39:54'),
(91, '32', '14', '2021-05-13 21:39:55'),
(92, '32', '22', '2021-05-13 21:40:43'),
(93, '46', '24', '2021-05-13 21:41:35'),
(94, '36', '22', '2021-05-14 20:07:46'),
(96, '36', '24', '2021-05-14 20:08:47'),
(97, '38', '22', '2021-05-14 20:12:58'),
(98, '38', '24', '2021-05-14 20:13:12'),
(99, '37', '22', '2021-05-14 20:13:24'),
(100, '37', '24', '2021-05-14 20:13:38'),
(103, '68', '29', '2021-05-14 21:33:49'),
(104, '69', '30', '2021-05-14 21:39:26'),
(105, '70', '31', '2021-05-14 21:43:30'),
(106, '71', '22', '2021-05-14 21:46:13'),
(107, '71', '24', '2021-05-14 21:46:40'),
(108, '51', '34', '2021-05-26 11:48:57'),
(109, '6', '34', '2021-05-26 11:49:07'),
(111, '23', '13', '2021-05-28 17:20:21'),
(112, '24', '36', '2021-05-28 17:21:13'),
(113, '35', '36', '2021-05-28 17:21:42'),
(114, '72', '36', '2021-05-28 17:22:11'),
(115, '59', '36', '2021-05-28 17:22:43'),
(116, '5', '36', '2021-05-28 17:23:34'),
(117, '1', '36', '2021-05-28 17:23:51'),
(118, '2', '36', '2021-05-28 17:24:16'),
(119, '71', '36', '2021-05-28 17:24:58'),
(120, '4', '36', '2021-05-28 17:25:26'),
(121, '76', '36', '2021-05-30 00:53:22'),
(122, '78', '36', '2021-05-30 00:53:42'),
(123, '79', '36', '2021-05-30 00:54:22'),
(124, '77', '36', '2021-05-30 00:54:58'),
(125, '9', '36', '2021-05-30 00:55:24'),
(126, '89', '36', '2021-05-30 00:56:09'),
(128, '81', '36', '2021-05-30 00:57:31'),
(129, '82', '36', '2021-05-30 00:57:49'),
(130, '80', '36', '2021-05-30 00:58:21'),
(131, '90', '36', '2021-05-30 00:58:59'),
(132, '91', '36', '2021-05-30 00:59:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategoria`
--

CREATE TABLE `subcategoria` (
  `id` int(11) NOT NULL,
  `categoria` text NOT NULL,
  `subcategoria` text NOT NULL,
  `position` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `subcategoria`
--

INSERT INTO `subcategoria` (`id`, `categoria`, `subcategoria`, `position`, `fecha`) VALUES
(1, 'excursiones', ' Sobre Hielo', 1, '2021-02-26 02:00:41'),
(2, 'lugares', 'Glaciar Perito Moreno', 1, '2021-02-26 03:26:24'),
(3, 'excursiones', 'Navegaciones', 2, '2021-02-26 05:04:02'),
(4, 'excursiones', 'Navegaciones y Aventuras', 3, '2021-02-26 05:04:02'),
(5, 'excursiones', 'Aventura', 4, '2021-02-26 05:05:40'),
(6, 'excursiones', 'Estancias', 5, '2021-02-26 05:05:40'),
(7, 'excursiones', 'En Bus', 6, '2021-02-26 05:06:31'),
(11, 'lugares', 'Glaciar Upsala', 3, '2021-02-26 05:28:02'),
(12, 'lugares', 'El Chalten', 4, '2021-02-26 05:28:02'),
(13, 'lugares', 'Torres del Paine', 5, '2021-02-26 05:32:42'),
(14, 'lugares', 'Zona de El Calafate', 6, '2021-02-26 05:32:42'),
(15, 'lugares', 'Todos los Glaciares', 2, '2021-02-26 05:35:25'),
(16, 'lugares', 'Lago Roca', 7, '2021-02-26 05:35:25'),
(17, 'buses', 'El chalten', 1, '2021-02-26 05:36:26'),
(19, 'buses', 'Torres del Paine', 2, '2021-02-26 05:37:41'),
(20, 'buses', 'Puerto Natales', 3, '2021-02-26 05:37:41'),
(21, 'renta', 'Rentas Car', 0, '2021-02-27 03:47:38'),
(31, 'buses', 'Bariloche', 6, '2021-04-07 08:33:06'),
(32, 'buses', 'Rio Gallegos', 5, '2021-04-07 08:34:18'),
(33, 'buses', 'Ushuaia', 8, '2021-04-07 08:34:40'),
(34, 'buses', 'Punta Arenas', 9, '2021-04-07 08:40:57'),
(35, 'buses', 'Los Antiguos/Perito Moreno', 7, '2021-04-09 18:40:36'),
(36, 'buses', 'Aeropuerto Hotel Aeropuerto', 4, '2021-04-19 21:40:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transferencia`
--

CREATE TABLE `transferencia` (
  `id` int(11) NOT NULL,
  `excursion` text NOT NULL,
  `nombre` text NOT NULL,
  `email` text NOT NULL,
  `telefono` text NOT NULL,
  `dni` text NOT NULL,
  `nacionalidad` text NOT NULL,
  `fecha` text NOT NULL,
  `turnos` text NOT NULL,
  `adultos` text NOT NULL,
  `ninos` text NOT NULL,
  `otros` text NOT NULL,
  `opcionales` text NOT NULL,
  `precio` text NOT NULL,
  `comprobante` text NOT NULL,
  `operacion` text NOT NULL,
  `fecha_r` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `transferencia`
--

INSERT INTO `transferencia` (`id`, `excursion`, `nombre`, `email`, `telefono`, `dni`, `nacionalidad`, `fecha`, `turnos`, `adultos`, `ninos`, `otros`, `opcionales`, `precio`, `comprobante`, `operacion`, `fecha_r`) VALUES
(11, 'Glaciar Perito Moreno Classic                                               ', 'Gonzalo Vidal', 'gonzaa.vidal.18@gmail.com', '02966504821', '36105733', 'Argentina', '14-8-21', '6:50 am  a   6:15 pm', '1', '', '-', '[{\"almuerzo1\":{\"titulo\":\"Almuerzo en el Glaciar Moreno\",\"precio\":3000},\"almuerzo2\":null,\"almuerzo3\":null,\"vianda1\":null,\"vianda2\":null,\"vianda3\":null,\"navegacion1\":null,\"navegacion2\":null,\"navegacion3\":null,\"entrada1\":null,\"entrada2\":null,\"entrada3\":null}]', '6.304', 'vistas/comprobantes/1628657113_Gonzalo Vidal_Critica del intervencionismo - Ludwig von Mises.epub', '04137', '2021-08-11 01:45:13'),
(12, 'Glaciar Perito Moreno Classic                                               ', 'emilce lauria', 'emilcelauria@hotmail.com', '541212', '43434343', 'argentina', '23-9-21', '6:50 am  a   6:15 pm', '1', '', '-', '[{\"almuerzo1\":null,\"almuerzo2\":null,\"almuerzo3\":null,\"vianda1\":null,\"vianda2\":null,\"vianda3\":null,\"navegacion1\":null,\"navegacion2\":null,\"navegacion3\":null,\"entrada1\":null,\"entrada2\":null,\"entrada3\":null}]', '3.349', 'vistas/comprobantes/1629137137_emilce lauria_alwaysglaciers-Recuperado-Recuperado.png', '02289', '2021-08-16 15:05:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

CREATE TABLE `turnos` (
  `id_t` int(11) NOT NULL,
  `id_excursion` int(11) NOT NULL,
  `horarios` text NOT NULL,
  `fecha_t` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `turnos`
--

INSERT INTO `turnos` (`id_t`, `id_excursion`, `horarios`, `fecha_t`) VALUES
(2, 2, '10 a 13hs', '2021-09-19 21:59:40'),
(4, 9, '8:00hs', '2021-12-05 03:08:46'),
(5, 1, '10:00hs', '2021-12-05 03:38:05'),
(6, 1, '12:00hs', '2022-02-23 01:39:55');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dias_reservados`
--
ALTER TABLE `dias_reservados`
  ADD PRIMARY KEY (`id_i`),
  ADD KEY `id_excursion` (`id_excursion`);

--
-- Indices de la tabla `divisas`
--
ALTER TABLE `divisas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `excursiones`
--
ALTER TABLE `excursiones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `frecuentes`
--
ALTER TABLE `frecuentes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `opcionales`
--
ALTER TABLE `opcionales`
  ADD PRIMARY KEY (`id_op`);

--
-- Indices de la tabla `otras`
--
ALTER TABLE `otras`
  ADD PRIMARY KEY (`id_o`);

--
-- Indices de la tabla `otros`
--
ALTER TABLE `otros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pagos_tarjetas_rentas`
--
ALTER TABLE `pagos_tarjetas_rentas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pago_tarjetas`
--
ALTER TABLE `pago_tarjetas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pago_tarjetas_carrito`
--
ALTER TABLE `pago_tarjetas_carrito`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `recorridos`
--
ALTER TABLE `recorridos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `redes`
--
ALTER TABLE `redes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `relacion`
--
ALTER TABLE `relacion`
  ADD PRIMARY KEY (`id_r`);

--
-- Indices de la tabla `reopcional`
--
ALTER TABLE `reopcional`
  ADD PRIMARY KEY (`id_ro`);

--
-- Indices de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `transferencia`
--
ALTER TABLE `transferencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `turnos`
--
ALTER TABLE `turnos`
  ADD PRIMARY KEY (`id_t`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `dias_reservados`
--
ALTER TABLE `dias_reservados`
  MODIFY `id_i` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `divisas`
--
ALTER TABLE `divisas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `excursiones`
--
ALTER TABLE `excursiones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT de la tabla `frecuentes`
--
ALTER TABLE `frecuentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=794;

--
-- AUTO_INCREMENT de la tabla `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `opcionales`
--
ALTER TABLE `opcionales`
  MODIFY `id_op` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `otras`
--
ALTER TABLE `otras`
  MODIFY `id_o` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de la tabla `otros`
--
ALTER TABLE `otros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pagos_tarjetas_rentas`
--
ALTER TABLE `pagos_tarjetas_rentas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pago_tarjetas`
--
ALTER TABLE `pago_tarjetas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `pago_tarjetas_carrito`
--
ALTER TABLE `pago_tarjetas_carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `recorridos`
--
ALTER TABLE `recorridos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=374;

--
-- AUTO_INCREMENT de la tabla `redes`
--
ALTER TABLE `redes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `relacion`
--
ALTER TABLE `relacion`
  MODIFY `id_r` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;

--
-- AUTO_INCREMENT de la tabla `reopcional`
--
ALTER TABLE `reopcional`
  MODIFY `id_ro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `transferencia`
--
ALTER TABLE `transferencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `turnos`
--
ALTER TABLE `turnos`
  MODIFY `id_t` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `dias_reservados`
--
ALTER TABLE `dias_reservados`
  ADD CONSTRAINT `dias_reservados_ibfk_1` FOREIGN KEY (`id_excursion`) REFERENCES `excursiones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
