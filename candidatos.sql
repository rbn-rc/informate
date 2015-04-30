-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-04-2015 a las 02:15:28
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `candidatos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gobernador`
--

CREATE TABLE IF NOT EXISTS `gobernador` (
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `partido` text COLLATE utf8_bin NOT NULL,
  `datos` text COLLATE utf8_bin,
  `experiencia` text COLLATE utf8_bin,
  `propuesta` text COLLATE utf8_bin,
  `votos` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `gobernador`
--

INSERT INTO `gobernador` (`nombre`, `partido`, `datos`, `experiencia`, `propuesta`, `votos`) VALUES
('Francisco Domínguez  Servién', 'Partido Acción Nacional (PAN)', 'Nace el 11 de Agosto de 1966 (48 años) en la ciudad de Querétaro, México. Tiene una formación como médico veterinario Zootecnista otorgada por la Universidad Autónoma de Querétaro (UAQ) y una especialización en producción animal por la Universidad Nacional Autónoma de México (UNAM). ', 'Presidente municipal de Querétaro (2009-2012), Secretario General de la ANAC. Asociación Nacional de Alcaldes (2009 – 2011),  Catedrático de la materia de producción de cerdos I y II en la UAQ (1992-2002), Catedrático de la materia de producción de cerdos en el ITESM Campus Querétaro (1999-2002). ', 'Propuesta de Seguridad. Se aplicarán 25 acciones que se desprenden de siete líneas estratégicas para recuperar la paz y tranquilidad de las familias queretanas.\r\n1.    Respeto a la atención a las víctimas.\r\n2.    Justicia oral eficiente y sin pretextos.\r\n3.    Prevención para combatir el delito.\r\n4.    Policías y ministerios públicos confiables.\r\n5.    Rescatar del olvido los Centros Penitenciarios.\r\n6.    Colaboración efectiva para el combate a la delincuencia organizada.\r\n7.    Alineamiento en Querétaro al Sistema Nacional Anticorrupción.\r\n', 0),
('Roberto Loyola Vera', 'Coalición Querétaro no une (PRI-PVEM-PANAL-PT)', 'Nace el 13 de Agosto de 1967 en la ciudad de Querétaro México.  Es egresado de la Licenciatura en Derecho por la Universidad Autónoma de Querétaro y realizó un posgrado en Administración y Gerencia Pública en España.  ', 'Fue presidente municipal de Querétaro en el 2012. Se ha desempeñado en cargos públicos como Secretario Particular del Oficial Mayor del Estado de Querétaro (1991-1994); Secretario Particular Adjunto del Gobernador como parte del Gabinete Estatal (1994-1997); y Secretario de Gobernación en la actual administración del Gobernador José Calzada Rovirosa (2011-2012).', 'Presenta una propuesta de movilidad  con el fin de mejorar atención en transporte público, mejores vialidades para automovilistas, ampliación de plazas para el peatón, más ciclo pistas y mejorar la red de carreteras.\r\nEn el rubro de usuarios del transporte, se destacó mejorar la atención de los choferes con los usuarios, mantener tarifas preferenciales, mejorar las condiciones laborales de los choferes e incorporar nuevos camiones. En el aspecto de los automovilistas, el candidato habló de mejores vialidades, reducir el tráfico con la promoción del transporte escolar y soluciones vehiculares por colonia. En aspectos que denominó “para el peatón”, Loyola Vera refirió que se continuará con la ampliación de banquetas y sistema de plazas como en la capital, además de más ciclo pistas que estén interconectadas, además de un sistema de bicis públicas. En cuanto a infraestructura y ampliación de red carretera a los municipios, el candidato informó que zonas como San Joaquín y Pinal de Amoles pudieran conectarse, así como mejores vialidades para San Juan del Río y Tequisquiapan. Finalmente, en el rubro de educación vial, fueron enunciados los proyectos de un carril exclusivo para transporte público, multiplicar el programa “Uno a Uno” y promover un reglamento de cultura vial.\r\n', 0),
('Adolfo Camacho Esquivel', 'Partido de la Revolución Democrática (PRD)', NULL, NULL, NULL, 0),
('Salvador López Ávila ', 'Movimiento Ciudadano', NULL, NULL, 'Una de sus propuestas de campaña es disminuir en un 20 por ciento el sueldo de los funcionarios de primer nivel de Querétaro, a fin de generar un ahorro de 40 millones de pesos, e invertir ese recurso en el sector educativo. Asimismo, López Ávila agrego que otras de sus propuestas son: hacer un grupo antisecuestro que atienda llamada y reaccione al instante. Además se comprometió a hacer pública se declaración patrimonial.', 0),
('Celia Maya García', 'Movimiento de Regeneración Nacional (MORENA)', 'Nace en la ciudad de Querétaro, Querétaro. Es Licenciada en Derecho y Contabilidad por la UAQ. Cuenta con un Doctorado en Derecho también por la misma universidad. Además La  Dr. Celia tiene dos maestrías la primera en Derecho fiscal y la segunda en Impuestos, ambos otorgados por la Universidad Autónoma de Querétaro.', 'Fue profesora de cátedra en la UAQ, se ha desempeñado como agente del Ministerio Público de la Procuraduría General de Justicia del Estado, fungió como asesora jurídica en las áreas civil y penal del sector empresarial. En el 2003 fue candidata a la gubernatura del Estado de Querétaro por el PRD. ', 'Salud: Romper la división social que deja a miles de personas fuera de la atención básica, todos los queretanos sin distinción de clase ya no van a ser rechazados por los sistemas de atención en materia de salud.\r\nVivienda: Realizaremos un programa de vivienda, donde el gobierno sea el principal actor, el déficit de vivienda que tenemos lo combatiremos con la inversión pública, que ponga al alcance de las familias un hogar.\r\nTransporte: Implementar transporte que ya no use gasolina o diesel, iniciaríamos las obras del metro, tenemos ubicado el lugar y sustituiríamos gran parte del transporte para que la gente pueda desplazarse de un lugar a otro con más tranquilidad y eso nos permitirá elevar la calidad de vida.\r\nEmpleo: Un salario, no tasable en dinero sino con base en el precio de la canasta básica, eliminar las juntas de conciliación para convertirlas en verdaderos tribunales para que atienda con oportunidad y sin politización los conflictos laborales; más oportunidad a los universitarios, dentro de las grandes empresas; programa de apoyo para la pequeña y mediana empresa, que son las que generan más empleos.\r\nCampo: Instituiremos un fondo para garantizar a los pequeños productores un precio para sus productos.\r\nInundaciones: Hablar con los constructores para que hagan en sus fraccionamientos galerías de filtración; tendremos un programas de desazolve de canales, presas y bordos.\r\n', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipal`
--

CREATE TABLE IF NOT EXISTS `municipal` (
  `nombre` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `partido` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `datos` text CHARACTER SET utf8 COLLATE utf8_bin,
  `experiencia` text CHARACTER SET utf8 COLLATE utf8_bin,
  `propuesta` text CHARACTER SET utf8 COLLATE utf8_bin,
  `votos` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `municipal`
--

INSERT INTO `municipal` (`nombre`, `partido`, `datos`, `experiencia`, `propuesta`, `votos`) VALUES
('Marcos Aguilar Vega', 'Partido Acción Nacional (PAN)', 'Nacido el 5 de julio de 1972, en la ciudad de Querétaro. Es Licenciado en Derecho por la Universidad Autónoma de Querétaro y tiene una maestría en Derecho Constitucional por la misma, Además de ser un Investigador de la Universidad de California en Santa Bárbara, CA.', 'De 2009 a 2012 fue diputado local en la LVI Legislatura del Congreso de Querétaro. Ahí presidió las comisiones de Movilidad Sustentable; y tránsito, Vialidad y Autotransporte Público. Al interior del Partido Acción Nacional,  ha sido consejero estatal en Querétaro e Integrante del CDE del partido en la misma entidad. De 2009 a 2012 fue coordinador de transparencia y rendición de cuentas para la presentación de la plataforma política electoral.', 'Entre sus propuestas pretende presentar un plan de movilidad en la capital. Un plan para afrontar el narcomenudeo que afecta a los barrios, colonias y universidades en Querétaro. Un instituto que garantice que cualquier persona pueda recibir capacitación, formación gratuita desde el gobierno municipal para establecer un negocio, que pueda este instituto promover la generación de incubadoras comerciales o incubadoras familiares de negocios, que podamos traer recursos del gobierno federal, y esos recursos sean invertidos en estos nuevos emprendedores', 0),
('Manuel Pozo Cabrera', 'Coalición (PRI-PANL-PVEM)', NULL, NULL, NULL, 0),
('Gonzalo Bárcenas Rey', 'Partido de la Revolución democrática (PRD)', 'Nace el 11 de mayo de 1985 en la ciudad de Querétaro. Egresado de la Autónoma de Querétaro de la Licenciatura en Ciencia Políticas y Administración Pública, con Maestría en Ciencia Sociales y especialidad en Estudios Socio territoriales. ', 'Logra ganar la Secretaría de las juventudes de Izquierda del PRD en Querétaro, donde genera importantes debates políticos. ', 'Sostiene que es urgente generar los espacios y las actividades educativas, recreativas y culturales, para inhibir el delito, para que delinquir no sea una opción. La propuesta que presenta a la ciudadanía es la de un gobernante sensible ante las necesidades sociales. “Sociedad y gobierno son el binomio perfecto para solventar juntos cualquier problema o situación que se presente” sostuvo el candidato.', 0),
('Marco Antonio Carril', 'Partido del Trabajo (PT)', NULL, 'Profesor investigador de tiempo completo de la Facultad de Psicología, Universidad Autónoma de Querétaro, México. Profesor titular de las materias de Historia y Sociedad I; Historia y Sociedad II; Cultura y Sociedad en México; Métodos en Psicología I. Coordinador de la Unidad Multidisciplinaria de Estudios Sobre el Trabajo, UAQ', NULL, 0),
('Cristina Berenice Ga', 'Movimiento Ciudadano. ', NULL, NULL, 'Una de las principales propuestas de su partido es tener un municipio austero, que se conseguiría mediante la disminución de sueldos en trabajadores que van desde directores hacía arriba, esto con el objetivo de disminuir deudas y mantener finanzas sanas. En el tema pluvial sugirió la necesidad de revisar todos los drenes y brindar los servicios necesarios para que no pasen cosas como en Peñuelas, en donde un fenómeno meteorológico rebasó cualquier obra. En lo referente a las declaraciones patrimoniales, advirtió que se está utilizando más como un instrumento de descalificaciones entre partidos, que un verdadero ejercicio de transparencia y señaló que desde su trinchera no tiene conflictos de interés de ningún tipo.', 0),
('Gustavo César Jesús ', 'Partido Encuentro Social. ', 'Nace el 29 de noviembre de 1965. Tiene una Licenciatura en Derecho por la UVM y una maestría en Derecho Constitucional y Amparo. ', 'Fue coordinador general del colegio de Abogados Litigantes de Querétaro. Secretario Ejecutivo Nacional de la Federación Nacional de Abogados y es miembro de la Unión Social de Empresarios Mexicanos.', NULL, 0),
('Carlos Octavio Roble', 'Partido Humanista.', NULL, NULL, NULL, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
