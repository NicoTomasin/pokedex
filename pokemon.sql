-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-09-2022 a las 20:05:19
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pokemon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pokemones`
--

CREATE TABLE `pokemones` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pokemones`
--

INSERT INTO `pokemones` (`id`, `numero`, `tipo`, `nombre`, `descripcion`, `imagen`) VALUES
(1, 1, 'fuego', 'ho-oh', 'Vuela continuamente por los cielos con sus magníficas alas de siete colores.', 'ho-oh.jpg'),
(2, 3, 'dragon', 'dragonite', 'Dicen que este POKÉMON vuela continuamente por la inmensidad del mar, y que rescata a los ahogados', 'dragonite.jpg'),
(3, 2, 'agua', 'lugia', 'Dicen que es el guardián de los mares. Hay rumores de que fue visto en una noche de tormenta.', 'lugia.jpg'),
(4, 4, 'fuego', 'charmander', 'La llama de su cola indica su fuerza vital. Si está débil, la llama arderá más tenue.', 'charmander.jpg'),
(5, 5, 'planta', 'bulbasaur', 'Cuando es joven, crece con los nutrientes que almacena en las semillas de su espalda.', 'bulbasaur.jpg'),
(6, 6, 'planta', 'chikorita', 'Le encanta disfrutar del sol. Usa la hoja que tiene en la cabeza para localizar sitios cálidos.', 'chikorita.jpg'),
(7, 7, 'agua', 'totodile', 'Esta increíble criatura le clava las fauces a todo lo que se mueve. Hay que evitar darle la espalda.', 'totodile.jpg'),
(8, 8, 'fuego', 'cyndaquil', 'Es tímido, y siempre se enrosca como una pelota. Si es atacado, enciende su lomo para protegerse.', 'cyndaquil.jpg'),
(9, 9, 'agua', 'squirtle', 'Su caparazón es blando al nacer.Pero pronto se endurecerá y será capaz de resistir cualquier amenaza', 'squirtle.jpg'),
(10, 10, 'electrico', 'pikachu', 'Mantiene su cola en alto para vigilar. Si das un tirón a su cola, querrá morderte', 'pikachu.jpg'),
(11, 11, 'psiquico', 'mew', 'Dicen que sólo se aparece a los puros de corazón, y a quienes desean verlo con todas sus fuerzas.', 'mew.jpg'),
(12, 12, 'psiquico', 'mewtwo', 'Fue creado por un científico tras años de horribles experimentos de ingeniería genética', 'mewtwo.jpg'),
(13, 13, 'hielo', 'articuno', 'Un legendario pájaro Pokémon. Congela el agua que encuentra en el aire para generar nieve', 'articuno.jpg'),
(14, 14, 'fuego', 'moltres', 'Este Pokémon legendario esparce ascuas con cada aleteo. Es una visión digna de ver', 'moltres.jpg'),
(15, 15, 'electrico', 'zapdos', 'Este legendario pájaro Pokémon sólo aparece cuando el cielo se torna oscuro y caen rayos', 'zapdos.jpg'),
(16, 16, 'agua', 'suicune', 'Este Pokémon divino recorre el mundo, siempre en busca de un embalse de agua pura', 'suicune.jpg'),
(17, 17, 'electrico', 'raikou', 'Este duro Pokémon almacena energía en su cuerpo. Después, cuando se desplaza por tierra, la suelta.', 'raikou.jpg'),
(18, 18, 'fuego', 'entei', 'Un Pokémon que corre por la tierra. Dicen que siempre nace uno cuando aparece un nuevo volcán.', 'entei.jpg'),
(19, 19, 'tierra', 'tyranitar', 'En una de sus poderosas garras tiene el poder de hacer temblar la tierra y las montañas.', 'tyranitar.jpg'),
(20, 20, 'planta', 'celebi', 'Conocido como el guardián del bosque, Celebi aparece allá donde existan hermosos bosques', 'celebi.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', 'admin'),
(2, 'axelabalos@hotmail.com', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pokemones`
--
ALTER TABLE `pokemones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pokemones`
--
ALTER TABLE `pokemones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
