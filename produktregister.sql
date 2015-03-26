-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 26 mars 2015 kl 13:28
-- Serverversion: 5.6.20
-- PHP-version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `ttm_db`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `produktregister`
--

CREATE TABLE IF NOT EXISTS `produktregister` (
`id` int(11) NOT NULL,
  `namn` varchar(20) NOT NULL,
  `storlek` varchar(20) NOT NULL,
  `kön` varchar(20) NOT NULL,
  `pris` int(11) NOT NULL,
  `beskrivning` varchar(150) NOT NULL,
  `färg` varchar(10) NOT NULL,
  `taggar` varchar(250) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumpning av Data i tabell `produktregister`
--

INSERT INTO `produktregister` (`id`, `namn`, `storlek`, `kön`, `pris`, `beskrivning`, `färg`, `taggar`) VALUES
(1, 'smocka', 'xs', 'herr', 123, 'df<sf', 'sdf', ''),
(2, 'asd', 's', 'herr', 123, 'sdf', 'sadf', 'hej');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `produktregister`
--
ALTER TABLE `produktregister`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `produktregister`
--
ALTER TABLE `produktregister`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
