-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 27. Nov 2021 um 15:45
-- Server-Version: 10.4.21-MariaDB
-- PHP-Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `fswd14_cr12_kluiber_mount_everest`
--
CREATE DATABASE IF NOT EXISTS `fswd14_cr12_kluiber_mount_everest` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `fswd14_cr12_kluiber_mount_everest`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `picture` varchar(500) NOT NULL,
  `locationName` varchar(100) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `description` varchar(500) NOT NULL,
  `longitude` varchar(500) NOT NULL,
  `latitude` varchar(500) NOT NULL,
  `homepage` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `location`
--

INSERT INTO `location` (`id`, `picture`, `locationName`, `price`, `description`, `longitude`, `latitude`, `homepage`) VALUES
(12, '61a2400f199cf.jpg', 'Brasilien', '136', 'Brasilien is beatiful', '-14.341897638390178', '-39.0076853816417', 'http://www.txairesorts.com/?lang=en'),
(13, '61a23f200ef82.jpeg', 'Kroatien', '108', 'It is beatiful and hot', '45.12495571474724', '14.793468637283903', 'https://www.jadran-crikvenica.hr/hotel-lisanj-novi-vinodolski'),
(14, '61a14e6035a7e.jpg', 'Italy', '145', 'Family is action', '45.44312380473268', '10.726398840212822', 'https://www.gardaland.it/de/unsere-hotels/unsere-themenhotels/gardaland-hotel/'),
(15, '61a14ed749d26.jpg', 'Paris, Disneyland', '1200', 'Disneyland is cool', '48.87094902623914', '2.7797262038144366', 'https://www.disneylandparis.com/de-at/hotels/disneyland-hotel/?hotel=DNYH');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
