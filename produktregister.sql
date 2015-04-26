-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 26 apr 2015 kl 14:08
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumpning av Data i tabell `produktregister`
--

INSERT INTO `produktregister` (`id`, `namn`, `storlek`, `kön`, `pris`, `beskrivning`, `färg`, `taggar`) VALUES
(6, 'Hatt', 'XS', 'dam', 59, 'En fruktansvärt liten hatt för damer.', 'Svart', 'hatt dam svart'),
(7, 'Keps', 'M', 'dam', 199, 'Ful keps för damer.', 'Brun', 'keps hatt dam brun'),
(8, 'Mössa', 'XL', 'dam', 7000, 'Fruktansvärt stor mössa.', 'Lila', 'lila mössa hatt dam'),
(9, 'Jeans', 'L', 'dam', 1227, 'Jeans', 'Blå', 'jeans blå byxor dam'),
(10, 'Hoodie', 'XL', 'dam', 259, 'En hoodie, den är bra.', 'grön', 'grön hoodie tröja dam'),
(11, 'Jacka', 'M', 'dam', 888, 'En vanlig jacka.', 'grå', 'grå jacka jackor dam'),
(12, 'Jacka2', 'L', 'dam', 666, 'En riktigt läskig jacka.', 'röd', 'röd jacka dam jackor'),
(13, 'Byxor', 'XS', 'dam', 22, 'Billiga byxor, de e nice.', 'orange', 'orange byxor dam'),
(14, 'Andra byxor', 'L', 'dam', 10000, 'Svindyra byxor ahey.', 'brun', 'brun byxor dam dyrt'),
(15, 'Ny Jacka', 'xs', 'dam', 20000, 'Svindyr helt ny jacka, du har råd, jag lovar.', 'orange', 'orange jacka jackor svindyr'),
(16, 'En sko', '48', 'dam', 999, 'Ja, det är bara en sko.', 'blå', 'blå sko skor käbbel'),
(17, 'Ett par skor', '34', 'dam', 1998, 'Nu är det faktiskt ett par.', 'blå', 'blå skor dam'),
(18, 'Boots of Travel', '40', 'dam', 2450, 'Du kan resa med dessa, hoho haha!', 'röd', 'röd skor sko boots of travel'),
(19, 'Värdelös talisman', 'XXL', 'dam', 480, 'Helt och hållet värdelös.', 'Lila', 'lila accessoar accessoarer talisman'),
(20, 'Vålnadsbindel', 'L', 'dam', 525, 'En vålnads bindel.', 'grön', 'grön accessoar accessoarer vålnadsbindel bindel'),
(21, 'Halsband', 'L', 'dam', 6565, 'Skitfult skitdyrt halsband.', 'guld', 'guld halsband accessoar accessoarer'),
(22, 'T-Shirt', 'XXXXL', 'herr', 500, 'Otroligt stor t-shirt för rejäla grabbar.', 'blå', 'blå tröja tröjor t-shirt tjockis'),
(23, 't-shirt', 'xxxs', 'herr', 500, 'Fruktansvärt liten tröja för mindre grabbar.', 'lila', 'lila tröja tröjor tunnis t-shirt'),
(24, 'Jacka2', 'L', 'herr', 2222, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'blå', 'blå jacka jackor herr'),
(25, 'Jacka3', 'L', 'herr', 12345, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'grå', 'grå jacka jackor herr'),
(26, 'jacka', 'xs', 'herr', 123, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'vit', 'vit jacka jackor herr'),
(27, 'Chinos', 'L', 'herr', 6540, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'svart', 'svart byxor herr'),
(28, 'Jeans', 'XL', 'herr', 456789, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'blå', 'blå jeans byxor herr'),
(29, 'byxor', 'M', 'herr', 1000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'svart', 'svart byxor herr'),
(30, 'converse', '42', 'herr', 321, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'bruna', 'ska converse herr bruna skor'),
(31, 'lacoste', '43', 'herr', 444, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'vit', 'vit herr lacoste sko skor'),
(32, 'stövlar', '39', 'herr', 111, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'blå', 'blå herr stövlar sko skor'),
(33, 'keps med tryck', 'M', 'herr', 129, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'svart', 'svart keps herr tryck hatt'),
(34, 'mössa', 'S', 'herr', 99, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'vit', 'vit mössa herr hatt'),
(35, 'studentmössa', 'XS', 'herr', 1999, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'vit', 'studentmössa vit herr hatt'),
(36, 'nyckelring', 'S', 'herr', 49, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'silver', 'accessoar silver nyckelring herr'),
(37, 'örhänge', 'M', 'herr', 122, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'guld', 'guld accessoar herr örhänge'),
(38, 'solglasögon', 'XL', 'herr', 133, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'svart', 'svart accessoar solglasögon herr'),
(39, 'Barnjacka', 'XS', 'barn', 500, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'gul', 'gul barn jacka barnjacka'),
(40, 'regnjacka', 'M', 'barn', 499, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'blå', 'blå barn jacka regnjacka'),
(41, 'Vinterjacka', 'L', 'barn', 456, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'vit', 'vit jacka barn vinterjacka'),
(42, 'Chinos', 'XS', 'barn', 513, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'beige', 'beige barn byxor Chinos'),
(43, 'Jeans', 'S', 'barn', 453, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'blå', 'blå byxor barn Jeans'),
(44, 'Mjukisbyxor', 'M', 'barn', 756, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'svart', 'svart byxor barn mjukisbyxor'),
(45, 't-shirt', 'S', 'barn', 987, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'vit', 'vit tröja barn t-shirt'),
(46, 'långärmad tröja', 'M', 'barn', 534, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'lila', 'lila barn tröja långärmad'),
(47, 'munktröja', 'XXXXXXXL', 'barn', 978, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'grå', 'grå barn munkjacka tröja'),
(48, 'fotbollsko', '12', 'barn', 362, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'svart', 'svart sko barn skor fotbollsko'),
(49, 'högklackat', '99', 'barn', 92, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'rosa', 'rosa sko skor barn högklackat'),
(50, 'vanlig sko', '32', 'barn', 345, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'turkos', 'turkos barn sko skor vanlig'),
(51, 'liten keps', 'S', 'barn', 123, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'grön', 'grön hatt barn liten keps'),
(52, 'mössa', 'M', 'barn', 987, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'svart', 'svart barn mössa hatt'),
(53, 'basker', 'XS', 'barn', 376, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'grön', 'grön hatt barn basker'),
(54, 'halskedja', 'S', 'barn', 234, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'silver', 'silver barn accessoar halskedja'),
(55, 'ring', 'M', 'barn', 9877, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'guld', 'guld barn accessoar ring'),
(56, 'solglasögon', 'XXXS', 'barn', 123, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'brun', 'brun barn accessoar solglasögon');

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
