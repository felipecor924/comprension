-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2018 a las 08:03:22
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `comprension_lectora`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `codigo_persona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `administrador`:
--   `codigo_persona`
--       `persona` -> `codigo`
--

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`codigo_persona`) VALUES
(2345);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE IF NOT EXISTS `asignatura` (
  `codigo` int(11) NOT NULL,
  `codigo_programa` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `semestre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `asignatura`:
--   `codigo_programa`
--       `programa` -> `codigo`
--   `codigo_programa`
--       `programa` -> `codigo`
--

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`codigo`, `codigo_programa`, `nombre`, `semestre`) VALUES
(718, 115, 'TECNICAS GERENCIALES Y DE NEGOCIACION', 7),
(722, 115, 'BASES DE DATOS AVANZADAS', 7),
(835, 115, 'GERENCIA Y TECNOLOGIA', 8),
(914, 115, 'REDES INALAMBRICAS', 9),
(1011, 115, 'ADMINISTRACION DE SO DE RED', 10),
(1015, 115, 'DESARROLLO DE APLICACIONES MOVILES', 10),
(1016, 115, 'SEGURIDAD INFORMATICA', 10),
(1017, 115, 'ARQUITECTURA ORIENTADA A SERVICIOS', 10),
(1101, 118, 'CALCULO DIFERENCIAL', 1),
(5101, 115, 'CALCULO DIFERENCIAL', 1),
(5102, 115, 'MATEMATICAS DISCRETAS', 1),
(5104, 115, 'FUNDAMENTOS DE PROGRAMACION', 1),
(5105, 115, 'INTRODUCCION A LA INGENIERIA DE SISTEMAS', 1),
(5106, 115, 'COMUNICACION', 1),
(5108, 115, 'INTRODUCCION A LA VIDA UNIVERSITARIA', 1),
(5201, 115, 'CALCULO INTEGRAL', 2),
(5202, 115, 'ALGEBRA LINEAL', 2),
(5203, 115, 'FISICA MECANICA', 2),
(5204, 115, 'PROGRAMACION ORIENTADA A OBJETOS I', 2),
(5206, 115, 'COMUNICACION II', 2),
(5209, 115, 'SEMINARIO INTEGRADOR I', 2),
(5301, 115, 'CALCULO VECTORIAL', 3),
(5303, 115, 'FISICA ELECTROMAGNETICA', 3),
(5304, 115, 'ESTRUCTURA DE DATOS', 3),
(5305, 115, 'PROGRAMACION ORIENTADA A OBJETOS II', 3),
(5306, 115, 'SEMINARIO DE INVESTIGACION I', 3),
(5401, 115, 'ECUACIONES DIFERENCIALES', 4),
(5402, 115, 'PROBABILIDAD Y ESTADISTICA', 4),
(5403, 115, 'ONDAS Y PARTICULAS', 4),
(5404, 115, 'ANALISIS DE ALGORITMOS', 4),
(5405, 115, 'TEORIA DE LA COMPUTACION', 4),
(5501, 115, 'ANALISIS NUMERICO', 5),
(5502, 115, 'INVESTIGACION DE OPERACIONES', 5),
(5503, 115, 'ELECTRONICA', 5),
(5504, 115, 'ARQUITECTURA DE COMPUTADORES', 5),
(5505, 115, 'BASES DE DATOS', 5),
(5506, 115, 'SEMINARIO DE INVESTIGACION II', 5),
(5511, 115, 'PROBLEMAS SOCIALES Y DE FRONTERA', 5),
(5513, 115, 'PSICOLOGIA', 5),
(5515, 115, 'PSICOLOGIA INDUSTRIAL', 5),
(5516, 115, 'CATEDRA DE PAZ', 5),
(5522, 115, 'RELACIONES HUMANAS', 5),
(5604, 115, 'SISTEMAS OPERATIVOS', 6),
(5605, 115, 'BASES DE DATOS', 6),
(5606, 115, 'PROGRAMACION WEB', 6),
(5607, 115, 'CONSTITUCION Y CIVISMO', 6),
(5608, 115, 'PLANEACION ESTRATEGICA DE SISTEMAS DE INFORMACION', 6),
(5609, 115, 'SEMINARIO INTEGRADOR II', 6),
(5611, 115, 'PROYECCION SOCIAL EN ING DE SISTEMAS', 6),
(5704, 115, 'TEORIA GENERAL DE LAS COMUNICACIONES', 7),
(5705, 115, 'ANALISIS Y DISEÑO DE SISTEMAS', 7),
(5706, 115, 'SEMINARIO DE INVESTIGACION III', 7),
(5707, 115, 'ETICA PROFESIONAL', 7),
(5708, 115, 'ADMINISTRACION DE PROYECTOS INFORMATICOS', 7),
(5804, 115, 'REDES DE COMPUTADORES', 8),
(5805, 115, 'INGENIERIA DEL SOFTWARE', 8),
(5807, 115, 'ETICA PROFESIONAL', 8),
(5808, 115, 'FORMULACION Y EVALUACION DE PROYECTOS INFORMATICOS', 8),
(5809, 115, 'SEMINARIO INTEGRADOR III', 8),
(5905, 115, 'ARQUITECTURA DEL SOFTWARE', 9),
(5908, 115, 'GESTION DE TIC', 9),
(5909, 115, 'PRACTICA EN INGENIERIA DE SISTEMAS', 9),
(6001, 115, 'PROYECTO DE GRADO', 10),
(6701, 115, 'PATRONES DE DISEÑO’', 6),
(6702, 115, 'GESTION DE BASES DE DATOS', 6),
(7003, 115, 'INFORMATICA JURIDICA', 7),
(7004, 115, 'COMPUTACION EN LA NUBE', 7),
(7005, 115, 'MINERIA DE DATOS', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura_docente`
--

CREATE TABLE IF NOT EXISTS `asignatura_docente` (
  `codigo_docente` int(11) NOT NULL,
  `codigo_asignatura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `asignatura_docente`:
--   `codigo_asignatura`
--       `asignatura` -> `codigo`
--   `codigo_docente`
--       `docente` -> `codigo_persona`
--   `codigo_asignatura`
--       `asignatura` -> `codigo`
--   `codigo_docente`
--       `docente` -> `codigo_persona`
--

--
-- Volcado de datos para la tabla `asignatura_docente`
--

INSERT INTO `asignatura_docente` (`codigo_docente`, `codigo_asignatura`) VALUES
(1379, 1015),
(1379, 5104),
(1379, 5105),
(1379, 5108),
(1, 5203),
(1379, 5604),
(1780, 5805);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura_estudiante`
--

CREATE TABLE IF NOT EXISTS `asignatura_estudiante` (
  `codigo_programa` int(11) NOT NULL,
  `codigo_persona` int(11) NOT NULL,
  `codigo_asignatura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `asignatura_estudiante`:
--   `codigo_asignatura`
--       `asignatura` -> `codigo`
--   `codigo_persona`
--       `estudiante` -> `codigo_persona`
--   `codigo_programa`
--       `estudiante` -> `codigo_programa`
--   `codigo_asignatura`
--       `asignatura` -> `codigo`
--   `codigo_programa`
--       `estudiante` -> `codigo_programa`
--   `codigo_persona`
--       `estudiante` -> `codigo_persona`
--

--
-- Volcado de datos para la tabla `asignatura_estudiante`
--

INSERT INTO `asignatura_estudiante` (`codigo_programa`, `codigo_persona`, `codigo_asignatura`) VALUES
(115, 1151318, 1015),
(115, 1151318, 1101),
(115, 1151318, 5202),
(115, 1151318, 5203),
(115, 1151318, 5604);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
  `nombre` varchar(50) NOT NULL,
  `nombre_facultad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `departamento`:
--   `nombre_facultad`
--       `facultad` -> `nombre`
--   `nombre_facultad`
--       `facultad` -> `nombre`
--

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`nombre`, `nombre_facultad`) VALUES
('CIENCIAS AGRARIAS', 'CIENCIAS AGRARIAS Y DEL AMBIENTE'),
('CIENCIAS DEL MEDIO AMBIENTE', 'CIENCIAS AGRARIAS Y DEL AMBIENTE'),
('CIENCIAS PECUARIAS', 'CIENCIAS AGRARIAS Y DEL AMBIENTE'),
('BIOLOGIA', 'CIENCIAS BASICAS'),
('FISICA', 'CIENCIAS BASICAS'),
('MATEMATICAS Y ESTADISTICA', 'CIENCIAS BASICAS'),
('QUIMICA', 'CIENCIAS BASICAS'),
('ATENCION CLINICA Y REHABILITACION', 'CIENCIAS DE LA SALUD'),
('PROMOCION, PROTECCION Y GESTION EN SALUD', 'CIENCIAS DE LA SALUD'),
('CIENCIAS ADMINISTRATIVAS', 'CIENCIAS EMPRESARIALES'),
('CIENCIAS CONTABLES Y FINANCIERAS', 'CIENCIAS EMPRESARIALES'),
('ESTUDIOS INTERNACIONALES Y DE FRONTERA', 'CIENCIAS EMPRESARIALES'),
('ANDRAGOGIA COMUNICACIÓN Y MULTIMEDIA', 'EDUCACION, ARTES Y HUMANIDADES'),
('ARQUITECTURA DISEÑO Y URBANISMO', 'EDUCACION, ARTES Y HUMANIDADES'),
('HUMANIDADES, SOCIALES E IDIOMAS', 'EDUCACION, ARTES Y HUMANIDADES'),
('CONSTRUCCIONES CIVILES VÍAS Y TRANSPORTES', 'INGENIERIA'),
('DISEÑO MECANICO, MATERIAL Y PROCESOS', 'INGENIERIA'),
('ELECTRICIDAD Y ELECTRONICA', 'INGENIERIA'),
('GEOTECNIA', 'INGENIERIA'),
('HIDRAULICA', 'INGENIERIA'),
('SISTEMAS E INFORMATICA', 'INGENIERIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE IF NOT EXISTS `docente` (
  `nombre_departamento` varchar(50) NOT NULL,
  `codigo_persona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `docente`:
--   `codigo_persona`
--       `persona` -> `codigo`
--   `nombre_departamento`
--       `departamento` -> `nombre`
--   `nombre_departamento`
--       `departamento` -> `nombre`
--   `codigo_persona`
--       `persona` -> `codigo`
--

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`nombre_departamento`, `codigo_persona`) VALUES
('HUMANIDADES, SOCIALES E IDIOMAS', 1379),
('MATEMATICAS Y ESTADISTICA', 8670),
('SISTEMAS E INFORMATICA', 1),
('SISTEMAS E INFORMATICA', 1780);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE IF NOT EXISTS `estudiante` (
  `codigo_programa` int(11) NOT NULL,
  `codigo_persona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `estudiante`:
--   `codigo_persona`
--       `persona` -> `codigo`
--   `codigo_programa`
--       `programa` -> `codigo`
--   `codigo_persona`
--       `persona` -> `codigo`
--   `codigo_programa`
--       `programa` -> `codigo`
--

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`codigo_programa`, `codigo_persona`) VALUES
(100, 1008),
(115, 1081),
(115, 1318),
(136, 9361),
(115, 1151318);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultad`
--

CREATE TABLE IF NOT EXISTS `facultad` (
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `facultad`:
--

--
-- Volcado de datos para la tabla `facultad`
--

INSERT INTO `facultad` (`nombre`) VALUES
('CIENCIAS AGRARIAS Y DEL AMBIENTE'),
('CIENCIAS BASICAS'),
('CIENCIAS DE LA SALUD'),
('CIENCIAS EMPRESARIALES'),
('EDUCACION, ARTES Y HUMANIDADES'),
('INGENIERIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lectura`
--

CREATE TABLE IF NOT EXISTS `lectura` (
  `id` int(11) NOT NULL,
  `codigo_docente` int(11) NOT NULL,
  `codigo_asignatura` int(11) NOT NULL,
  `tipo_lectura` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(2000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `lectura`:
--   `codigo_asignatura`
--       `asignatura_docente` -> `codigo_asignatura`
--   `codigo_docente`
--       `asignatura_docente` -> `codigo_docente`
--   `tipo_lectura`
--       `tipo_lectura` -> `id`
--   `codigo_docente`
--       `asignatura_docente` -> `codigo_docente`
--   `codigo_asignatura`
--       `asignatura_docente` -> `codigo_asignatura`
--   `tipo_lectura`
--       `tipo_lectura` -> `id`
--

--
-- Volcado de datos para la tabla `lectura`
--

INSERT INTO `lectura` (`id`, `codigo_docente`, `codigo_asignatura`, `tipo_lectura`, `titulo`, `descripcion`) VALUES
(1, 1379, 1015, 1, 'Guía para realizar el estudio de mercado', 'Infoautónomos te ofrece una guía para que puedas realizar un estudio de mercado, a bajo coste y a la medida de los autónomos, microempresas y pymes.\r\n\r\nDescubre los pasos a ir dando y las técnicas lowcost que puedes utilizar para obtener información de tu competencia e identificar segmentos de mercado a los que dirigir tu negocio: recogida de información, observación, entrevistas y encuestas y análisis de la competencia. Y conoce el precio que puede tener una investigación o estudio de mercado.'),
(4, 1780, 5805, 1, 'INTRODUCCIÓN A LA INGENIERIA DEL SOFTWARE', 'Es el proceso de construir aplicaciones de tamaño o alcance prácticos, en las que predomina el esfuerzo del software y que satisfacen los requerimientos de funcionalidad y desempeño. La ingeniería de software, ofrece métodos y técnicas para desarrollar, mantener, producir y asegurar software de calidad.'),
(7, 1379, 5604, 2, 'SOCKETS', 'Los sockets son un sistema de comunicación entre procesos de diferentes máquinas de una red. Más exactamente, un socket es un punto de comunicación por el cual un proceso puede emitir o recibir información. Por lo tanto, los Streams son un servicio orientado a la conexión, donde los datos se transfieren sin encuadrarlos en registros o bloques, asegurándose de esta manera que los datos lleguen al destino en el orden de transmisión. Si se rompe la conexión entre los procesos, éstos serán informados de tal suceso para que tomen las medidas oportunas, por eso se dice que están libres de errores.'),
(9, 1, 5203, 1, 'manejando y atropellando', 'manejando y atropellando');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opcion`
--

CREATE TABLE IF NOT EXISTS `opcion` (
  `opcion` varchar(500) NOT NULL,
  `id_pregunta` int(11) NOT NULL,
  `respuesta` enum('FALSE','TRUE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `opcion`:
--   `id_pregunta`
--       `pregunta` -> `id`
--   `id_pregunta`
--       `pregunta` -> `id`
--

--
-- Volcado de datos para la tabla `opcion`
--

INSERT INTO `opcion` (`opcion`, `id_pregunta`, `respuesta`) VALUES
('A. Añadir, borrar', 14, 'FALSE'),
('A. Arquitectura del Software', 10, 'FALSE'),
('a. si', 15, 'TRUE'),
('A. Si la afirmación y la razón son VERDADERAS y la razón es una explicación CORRECTA', 11, 'FALSE'),
('A. Simple', 13, 'FALSE'),
('A. Una variable definida por una clase', 12, 'FALSE'),
('B. Doblemente Enlazada', 13, 'FALSE'),
('B. Ingeniería del Software', 10, 'TRUE'),
('B. Insertar al tope, retirar del tope', 14, 'FALSE'),
('B. Si la afirmación y la razón son VERDADERAS', 15, 'FALSE'),
('B. Si la afirmación y la razón son VERDADERAS y la razón no es una explicación CORRECTA', 11, 'FALSE'),
('B. Una estructura de datos fundamentales', 12, 'TRUE'),
('C. Circulares', 13, 'FALSE'),
('C. Inserción, indexado, eliminación, recorrido', 14, 'TRUE'),
('C. Si la afirmaciÃ³n es VERDADERA y la razÃ³n es u', 15, 'FALSE'),
('C. Si la afirmación es VERDADERA y la razón es una explicación falsa', 11, 'FALSE'),
('C. UML', 10, 'FALSE'),
('C. Una clase de Java', 12, 'FALSE'),
('D. Calidad del Software', 10, 'FALSE'),
('D. Si la afirmaciÃ³n es FALSA y la razÃ³n es una e', 15, 'FALSE'),
('D. Si la afirmación es FALSA y la razón es una explicación verdadera', 11, 'TRUE'),
('D. Un vector representado por medio de una clase', 12, 'FALSE'),
('D.Apilar y Desapilar', 14, 'FALSE'),
('D.Todas las anteriores', 13, 'TRUE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `tipo` int(2) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `persona`:
--   `tipo`
--       `tipo` -> `id`
--   `tipo`
--       `tipo` -> `id`
--

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`codigo`, `nombre`, `apellido`, `tipo`, `correo`, `telefono`, `password`) VALUES
(1, 'yeison', 'osorio', 1, 'yeison@ufps.edu.co', '99999', '12345'),
(1008, 'PAULA', 'ANDREA', 2, 'siulepilef92@gmail.com', '3104789261', '1008'),
(1081, 'paula andrea', 'rozo corredor', 2, 'paulaandrearc@ufps.edu.co', '3124402908', 'ed4b1925f6306d4ee0e6edf3d0391b5cd9dac3ca'),
(1318, 'luis felipe', 'cortes cordoba', 2, 'luisfelipecc@ufps.edu.co', '3104789261', '70cd4bf05c64eb35765337422d5abbf6043f14b1'),
(1379, 'jorman', 'martinez', 1, 'siulepilef92@gmail.com', '3104789261', '1379'),
(1780, 'luis', 'cortes', 1, 'siulepilef92@gmail.com', '3104789261', '1780'),
(2345, 'sebastian', 'martinez', 3, 'siulepilef92@gmail.com', '3104789261', '2345'),
(8670, 'karla', 'barrera', 1, 'siulepilef92@gmail.com', '3104789261', '8670'),
(9361, 'paola', 'corredor', 2, 'siulepilef92@gmail.com', '3104789261', '9361'),
(1151318, 'luis felipe', 'cordoba', 2, 'luisfelipe@gmail.com', '3104789260', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE IF NOT EXISTS `pregunta` (
  `id` int(11) NOT NULL,
  `codigo_docente` int(11) NOT NULL,
  `codigo_asignatura` int(11) NOT NULL,
  `id_lectura` int(11) NOT NULL,
  `desc_pregunta` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `pregunta`:
--   `codigo_asignatura`
--       `lectura` -> `codigo_asignatura`
--   `codigo_docente`
--       `lectura` -> `codigo_docente`
--   `id_lectura`
--       `lectura` -> `id`
--   `codigo_docente`
--       `lectura` -> `codigo_docente`
--   `codigo_asignatura`
--       `lectura` -> `codigo_asignatura`
--   `id_lectura`
--       `lectura` -> `id`
--

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`id`, `codigo_docente`, `codigo_asignatura`, `id_lectura`, `desc_pregunta`) VALUES
(10, 1379, 5604, 7, 'Una comunicación por sockets Stream es confiable PORQUE los sockets stream se implementan sobre la capa de transporte.'),
(11, 1379, 5604, 7, 'Cuál de las siguientes opciones es la respuesta correcta:'),
(12, 1379, 5604, 7, 'Una lista enlazada en la ciencia de la computación es:'),
(13, 1379, 5604, 7, 'Los tipos de listas enlazadas son:'),
(14, 1379, 5604, 7, 'Son los métodos fundamentales en los diferentes tipos de listas enlazadas:'),
(15, 1, 5203, 9, 'pregunta 1 '),
(16, 1, 5203, 9, 'pregunta 2'),
(17, 1, 5203, 9, 'pregunta 3'),
(18, 1, 5203, 9, 'pregunta 4'),
(19, 1, 5203, 9, 'pregunta 5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE IF NOT EXISTS `programa` (
  `codigo` int(11) NOT NULL,
  `nombre_facultad` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `programa`:
--   `nombre_facultad`
--       `facultad` -> `nombre`
--   `nombre_facultad`
--       `facultad` -> `nombre`
--

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`codigo`, `nombre_facultad`, `nombre`) VALUES
(100, 'CIENCIAS AGRARIAS Y DEL AMBIENTE', 'TECNOLOGIA AGROINDUSTRIAL'),
(101, 'CIENCIAS AGRARIAS Y DEL AMBIENTE', 'TECNICO PROFESIONAL EN PROCESAMIENTO DE ALIMENTOS'),
(102, 'INGENIERIA', 'TÉCNICO PROFESIONAL EN FABRICACIÓN INDUSTRIAL DE P'),
(109, 'INGENIERIA', 'INGENIERIA ELECTROMECANICA'),
(111, 'INGENIERIA', 'INGENIERIA CIVIL - DIURNA'),
(112, 'INGENIERIA', 'INGENIERIA MECANICA'),
(113, 'INGENIERIA', 'TECNOLOGIA EN GESTION Y DESARROLLO DE PRODUCTOS CE'),
(114, 'INGENIERIA', 'TECNOLOGIA EN GESTION DE PROCESOS DE MANUFACTURA'),
(115, 'INGENIERIA', 'INGENIERIA DE SISTEMAS'),
(116, 'INGENIERIA', 'INGENIERIA ELECTRONICA'),
(117, 'INGENIERIA', 'TÉCNICO PROFESIONAL EN PROCESOS DE MANUFACTURA DE '),
(118, 'INGENIERIA', 'INGENIERIA DE MINAS'),
(119, 'INGENIERIA', 'INGENIERIA INDUSTRIAL'),
(120, 'INGENIERIA', 'TÉCNICO PROFESIONAL EN PRODUCCIÓN DE CERÁMICA ARTE'),
(121, 'CIENCIAS EMPRESARIALES', 'ADMINISTRACION DE EMPRESAS - DIURNA'),
(122, 'CIENCIAS EMPRESARIALES', 'CONTADURIA PUBLICA - DIURNA'),
(123, 'CIENCIAS EMPRESARIALES', 'CONTADURIA PUBLICA - NOCTURNA'),
(125, 'CIENCIAS EMPRESARIALES', 'ADMINISTRACION DE EMPRESAS - NOCTURNA'),
(126, 'CIENCIAS EMPRESARIALES', 'COMERCIO INTERNACIONAL'),
(133, 'EDUCACION, ARTES Y HUMANIDADES', 'COMUNICACION SOCIAL'),
(134, 'EDUCACION, ARTES Y HUMANIDADES', 'TRABAJO SOCIAL - DIURNA'),
(135, 'EDUCACION, ARTES Y HUMANIDADES', 'DERECHO'),
(136, 'EDUCACION, ARTES Y HUMANIDADES', 'LICENCIATURA EN MATEMATICAS'),
(137, 'EDUCACION, ARTES Y HUMANIDADES', 'LICENCIATURA EN CIENCIAS NATURALES Y EDUCACION AMB'),
(148, 'CIENCIAS DE LA SALUD', 'TECNOLOGIA DE REGENCIA EN FARMACIA'),
(150, 'EDUCACION, ARTES Y HUMANIDADES', 'ARQUITECTURA'),
(161, 'CIENCIAS AGRARIAS Y DEL AMBIENTE', 'INGENIERIA BIOTECNOLOGICA'),
(162, 'CIENCIAS AGRARIAS Y DEL AMBIENTE', 'INGENIERIA ARGONOMICA'),
(163, 'CIENCIAS AGRARIAS Y DEL AMBIENTE', 'INGENIERIA PECUARIA'),
(164, 'CIENCIAS AGRARIAS Y DEL AMBIENTE', 'INGENIERIA AGROINDUSTRIAL'),
(165, 'CIENCIAS AGRARIAS Y DEL AMBIENTE', 'INGENIERIA AMBIENTAL'),
(180, 'CIENCIAS DE LA SALUD', 'ENFERMERIA'),
(181, 'CIENCIAS DE LA SALUD', 'SEGURIDAD Y SALUD EN EL TRABAJO'),
(192, 'INGENIERIA', 'TECNOLOGIA EN OBRAS CIVILES - PRESENCIAL'),
(195, 'CIENCIAS BASICAS', 'QUIMICA INDUSTRIAL'),
(198, 'INGENIERIA', 'TECNOLOGIA EN PROCESOS INDUSTRIALES'),
(211, 'INGENIERIA', 'INGENIERIA CIVIL(COHORTE ESPECIAL)'),
(234, 'EDUCACION, ARTES Y HUMANIDADES', 'TRABAJO SOCIAL - NOCTURNA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba`
--

CREATE TABLE IF NOT EXISTS `prueba` (
  `fecha` date NOT NULL,
  `codigo_asignatura` int(11) NOT NULL,
  `codigo_programa` int(11) NOT NULL,
  `codigo_persona` int(11) NOT NULL,
  `id_lectura` int(11) NOT NULL,
  `contador` int(11) DEFAULT NULL,
  `incorrectas` int(11) DEFAULT NULL,
  `correctas` int(11) DEFAULT NULL,
  `codigo_docente` int(11) NOT NULL,
  `codigo_asignatura_Lec` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `prueba`:
--   `codigo_asignatura`
--       `asignatura_estudiante` -> `codigo_asignatura`
--   `codigo_asignatura_Lec`
--       `lectura` -> `codigo_asignatura`
--   `codigo_docente`
--       `lectura` -> `codigo_docente`
--   `codigo_persona`
--       `asignatura_estudiante` -> `codigo_persona`
--   `codigo_programa`
--       `asignatura_estudiante` -> `codigo_programa`
--   `id_lectura`
--       `lectura` -> `id`
--   `codigo_programa`
--       `asignatura_estudiante` -> `codigo_programa`
--   `codigo_persona`
--       `asignatura_estudiante` -> `codigo_persona`
--   `codigo_asignatura`
--       `asignatura_estudiante` -> `codigo_asignatura`
--   `codigo_docente`
--       `lectura` -> `codigo_docente`
--   `codigo_asignatura_Lec`
--       `lectura` -> `codigo_asignatura`
--   `id_lectura`
--       `lectura` -> `id`
--

--
-- Volcado de datos para la tabla `prueba`
--

INSERT INTO `prueba` (`fecha`, `codigo_asignatura`, `codigo_programa`, `codigo_persona`, `id_lectura`, `contador`, `incorrectas`, `correctas`, `codigo_docente`, `codigo_asignatura_Lec`) VALUES
('2018-11-21', 1015, 115, 1151318, 1, 5, 3, 2, 1379, 1015),
('2018-12-13', 5604, 115, 1151318, 7, 5, 3, 2, 1379, 5604);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta_estudiante`
--

CREATE TABLE IF NOT EXISTS `respuesta_estudiante` (
  `fecha` date NOT NULL,
  `id_pregunta` int(11) NOT NULL,
  `opcion` varchar(500) NOT NULL,
  `codigo_programa` int(11) NOT NULL,
  `codigo_persona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `respuesta_estudiante`:
--   `codigo_persona`
--       `prueba` -> `codigo_persona`
--   `codigo_programa`
--       `prueba` -> `codigo_programa`
--   `fecha`
--       `prueba` -> `fecha`
--   `id_pregunta`
--       `pregunta` -> `id`
--   `opcion`
--       `opcion` -> `opcion`
--   `id_pregunta`
--       `pregunta` -> `id`
--   `opcion`
--       `opcion` -> `opcion`
--   `fecha`
--       `prueba` -> `fecha`
--   `codigo_programa`
--       `prueba` -> `codigo_programa`
--   `codigo_persona`
--       `prueba` -> `codigo_persona`
--

--
-- Volcado de datos para la tabla `respuesta_estudiante`
--

INSERT INTO `respuesta_estudiante` (`fecha`, `id_pregunta`, `opcion`, `codigo_programa`, `codigo_persona`) VALUES
('2018-12-13', 10, 'B. Ingeniería del Software', 115, 1151318),
('2018-12-13', 11, 'D. Si la afirmación es FALSA y la razón es una explicación verdadera', 115, 1151318),
('2018-12-13', 12, 'B. Una estructura de datos fundamentales', 115, 1151318),
('2018-12-13', 13, 'D.Todas las anteriores', 115, 1151318),
('2018-12-13', 14, 'C. Inserción, indexado, eliminación, recorrido', 115, 1151318);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE IF NOT EXISTS `tipo` (
  `id` int(2) NOT NULL,
  `descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `tipo`:
--

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id`, `descripcion`) VALUES
(1, 'DOCENTE'),
(2, 'ESTUDIANTE'),
(3, 'ADMINISTRADOR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_lectura`
--

CREATE TABLE IF NOT EXISTS `tipo_lectura` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `tipo_lectura`:
--

--
-- Volcado de datos para la tabla `tipo_lectura`
--

INSERT INTO `tipo_lectura` (`id`, `descripcion`) VALUES
(1, 'PARRAFOS CORTOS'),
(2, 'TEXTOS LARGOS');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`codigo_persona`);

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`codigo`), ADD KEY `FK_asignatura_programa` (`codigo_programa`);

--
-- Indices de la tabla `asignatura_docente`
--
ALTER TABLE `asignatura_docente`
  ADD PRIMARY KEY (`codigo_docente`,`codigo_asignatura`), ADD KEY `FK_asigDoc_asignatura` (`codigo_asignatura`);

--
-- Indices de la tabla `asignatura_estudiante`
--
ALTER TABLE `asignatura_estudiante`
  ADD PRIMARY KEY (`codigo_programa`,`codigo_persona`,`codigo_asignatura`), ADD KEY `FK_asigEst_asignatura` (`codigo_asignatura`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`nombre`), ADD KEY `FK_departamento_facultad` (`nombre_facultad`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`codigo_persona`), ADD KEY `FK_docente_departamento` (`nombre_departamento`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`codigo_programa`,`codigo_persona`), ADD KEY `FK_estudiante_persona` (`codigo_persona`);

--
-- Indices de la tabla `facultad`
--
ALTER TABLE `facultad`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `lectura`
--
ALTER TABLE `lectura`
  ADD PRIMARY KEY (`id`,`codigo_docente`,`codigo_asignatura`), ADD KEY `FK_lectura_asigDoc` (`codigo_docente`,`codigo_asignatura`), ADD KEY `FK_lectura_tipoLec` (`tipo_lectura`);

--
-- Indices de la tabla `opcion`
--
ALTER TABLE `opcion`
  ADD PRIMARY KEY (`opcion`), ADD KEY `FK_opcion_pregunta` (`id_pregunta`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`codigo`), ADD KEY `tipo` (`tipo`);

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`id`), ADD KEY `FK_pregunta_lectura` (`codigo_docente`,`codigo_asignatura`,`id_lectura`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`codigo`), ADD KEY `FK_programa_facultad` (`nombre_facultad`);

--
-- Indices de la tabla `prueba`
--
ALTER TABLE `prueba`
  ADD PRIMARY KEY (`fecha`,`codigo_programa`,`codigo_persona`), ADD KEY `FK_prueba_asigEst` (`codigo_programa`,`codigo_persona`,`codigo_asignatura`), ADD KEY `FK_prueba_lectura` (`codigo_docente`,`codigo_asignatura_Lec`,`id_lectura`);

--
-- Indices de la tabla `respuesta_estudiante`
--
ALTER TABLE `respuesta_estudiante`
  ADD PRIMARY KEY (`fecha`,`id_pregunta`,`opcion`,`codigo_programa`,`codigo_persona`), ADD KEY `FK_resEst_preg` (`id_pregunta`), ADD KEY `FK_respEst_prueba` (`fecha`,`codigo_programa`,`codigo_persona`), ADD KEY `FK_respEst_opcion` (`opcion`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_lectura`
--
ALTER TABLE `tipo_lectura`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `lectura`
--
ALTER TABLE `lectura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tipo_lectura`
--
ALTER TABLE `tipo_lectura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
ADD CONSTRAINT `FK_administrador_persona` FOREIGN KEY (`codigo_persona`) REFERENCES `persona` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `asignatura`
--
ALTER TABLE `asignatura`
ADD CONSTRAINT `FK_asignatura_programa` FOREIGN KEY (`codigo_programa`) REFERENCES `programa` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `asignatura_docente`
--
ALTER TABLE `asignatura_docente`
ADD CONSTRAINT `FK_asigDoc_asignatura` FOREIGN KEY (`codigo_asignatura`) REFERENCES `asignatura` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_asigDoc_docente` FOREIGN KEY (`codigo_docente`) REFERENCES `docente` (`codigo_persona`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `asignatura_estudiante`
--
ALTER TABLE `asignatura_estudiante`
ADD CONSTRAINT `FK_asigEst_asignatura` FOREIGN KEY (`codigo_asignatura`) REFERENCES `asignatura` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_asigEst_estudiante` FOREIGN KEY (`codigo_programa`, `codigo_persona`) REFERENCES `estudiante` (`codigo_programa`, `codigo_persona`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `departamento`
--
ALTER TABLE `departamento`
ADD CONSTRAINT `FK_departamento_facultad` FOREIGN KEY (`nombre_facultad`) REFERENCES `facultad` (`nombre`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `docente`
--
ALTER TABLE `docente`
ADD CONSTRAINT `FK_docente_departamento` FOREIGN KEY (`nombre_departamento`) REFERENCES `departamento` (`nombre`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_docente_persona` FOREIGN KEY (`codigo_persona`) REFERENCES `persona` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
ADD CONSTRAINT `FK_estudiante_persona` FOREIGN KEY (`codigo_persona`) REFERENCES `persona` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_estudiante_programa` FOREIGN KEY (`codigo_programa`) REFERENCES `programa` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `lectura`
--
ALTER TABLE `lectura`
ADD CONSTRAINT `FK_lectura_asigDoc` FOREIGN KEY (`codigo_docente`, `codigo_asignatura`) REFERENCES `asignatura_docente` (`codigo_docente`, `codigo_asignatura`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_lectura_tipoLec` FOREIGN KEY (`tipo_lectura`) REFERENCES `tipo_lectura` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `opcion`
--
ALTER TABLE `opcion`
ADD CONSTRAINT `FK_opcion_pregunta` FOREIGN KEY (`id_pregunta`) REFERENCES `pregunta` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
ADD CONSTRAINT `FK_persona_tipo` FOREIGN KEY (`tipo`) REFERENCES `tipo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pregunta`
--
ALTER TABLE `pregunta`
ADD CONSTRAINT `FK_pregunta_lectura` FOREIGN KEY (`codigo_docente`, `codigo_asignatura`, `id_lectura`) REFERENCES `lectura` (`codigo_docente`, `codigo_asignatura`, `id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `programa`
--
ALTER TABLE `programa`
ADD CONSTRAINT `FK_programa_facultad` FOREIGN KEY (`nombre_facultad`) REFERENCES `facultad` (`nombre`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `prueba`
--
ALTER TABLE `prueba`
ADD CONSTRAINT `FK_prueba_asigEst` FOREIGN KEY (`codigo_programa`, `codigo_persona`, `codigo_asignatura`) REFERENCES `asignatura_estudiante` (`codigo_programa`, `codigo_persona`, `codigo_asignatura`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_prueba_lectura` FOREIGN KEY (`codigo_docente`, `codigo_asignatura_Lec`, `id_lectura`) REFERENCES `lectura` (`codigo_docente`, `codigo_asignatura`, `id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `respuesta_estudiante`
--
ALTER TABLE `respuesta_estudiante`
ADD CONSTRAINT `FK_resEst_preg` FOREIGN KEY (`id_pregunta`) REFERENCES `pregunta` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_respEst_opcion` FOREIGN KEY (`opcion`) REFERENCES `opcion` (`opcion`),
ADD CONSTRAINT `FK_respEst_prueba` FOREIGN KEY (`fecha`, `codigo_programa`, `codigo_persona`) REFERENCES `prueba` (`fecha`, `codigo_programa`, `codigo_persona`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
