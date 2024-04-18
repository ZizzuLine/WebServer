-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 18. Apr 2024 um 19:10
-- Server-Version: 10.4.32-MariaDB
-- PHP-Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `zizzuline`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `autobus`
--

CREATE TABLE `autobus` (
  `id` int(11) NOT NULL,
  `rfid` varchar(255) DEFAULT NULL,
  `posizione_attuale` varchar(255) DEFAULT NULL,
  `posizione_iniziale` varchar(255) DEFAULT NULL,
  `posizione_finale` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `autobus`
--

INSERT INTO `autobus` (`id`, `rfid`, `posizione_attuale`, `posizione_iniziale`, `posizione_finale`) VALUES
(1, '', '', '', ''),
(2, 'ggg', 'ggaga', 'adad', 'agag');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `temperature`
--

CREATE TABLE `temperature` (
  `id` int(11) NOT NULL,
  `value` float NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `temperature`
--

INSERT INTO `temperature` (`id`, `value`, `timestamp`) VALUES
(1, 20.5, '2024-04-11 06:00:00'),
(2, 21.2, '2024-04-11 07:00:00'),
(3, 22, '2024-04-11 08:00:00'),
(4, 23.5, '2024-04-11 09:00:00'),
(5, 24.8, '2024-04-11 10:00:00'),
(6, 25.3, '2024-04-11 11:00:00'),
(7, 26.1, '2024-04-11 12:00:00'),
(8, 25.7, '2024-04-11 13:00:00'),
(9, 24.9, '2024-04-11 14:00:00'),
(10, 23.6, '2024-04-11 15:00:00');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `autobus`
--
ALTER TABLE `autobus`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `temperature`
--
ALTER TABLE `temperature`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `autobus`
--
ALTER TABLE `autobus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `temperature`
--
ALTER TABLE `temperature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
