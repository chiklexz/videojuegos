-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2017 a las 23:36:05
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `videojuegos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ps4`
--

CREATE TABLE `ps4` (
  `ID` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Compania` varchar(50) NOT NULL,
  `Genero` varchar(50) NOT NULL,
  `Link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ps4`
--

INSERT INTO `ps4` (`ID`, `Nombre`, `Compania`, `Genero`, `Link`) VALUES
('01001', 'CRASH BANDICOOT N-SANE TRILOGY', 'ACTIVISION', 'ACCION', 'http://localhost/videojuegos/CRASH.php'),
('001002', 'THE LAST OF US REMASTERED', 'SONY', 'ACCION', 'LAST.php'),
('01003', 'MORTAL KOMBAT XL', 'WARNER BROS GAMES', 'PELEAS ', 'MORTAL.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wiiu`
--

CREATE TABLE `wiiu` (
  `ID` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Compania` varchar(50) NOT NULL,
  `Genero` varchar(50) NOT NULL,
  `Link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `wiiu`
--

INSERT INTO `wiiu` (`ID`, `Nombre`, `Compania`, `Genero`, `Link`) VALUES
('03001', 'SUPER SMASH BROS WIIU', 'NINTENDO', 'PELEAS', 'SMASH.php'),
('03002', 'THE LEGEND OF ZELDA BREATH OF THE WILD', 'NINTENDO', 'AVENTURA', 'ZELDAWILD.php'),
('03003', 'SUPER MARIO 3D WORLD', 'NINTENDO', 'AVENTURA', 'MARIO3D.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `xboxone`
--

CREATE TABLE `xboxone` (
  `ID` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Compania` varchar(50) NOT NULL,
  `Genero` varchar(50) NOT NULL,
  `Link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `xboxone`
--

INSERT INTO `xboxone` (`ID`, `Nombre`, `Compania`, `Genero`, `Link`) VALUES
('02001', 'SOUTH PARK THE FRACTURED BUT WHOLE', 'UBISOFT', 'ROL/ESTRATEGIA/DESTREZA', 'SOUTHONE.php'),
('02002', 'MINECRAFT', 'MICROSOFT', 'AVENTURA', 'MINECRAFT.php'),
('02003', 'FIFA SOCCER 18', 'EA', 'DEPORTES', 'FIFA18ONE.php');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
