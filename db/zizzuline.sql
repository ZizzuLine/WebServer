-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 20. Apr 2024 um 09:03
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
-- Tabellenstruktur für Tabelle `humidity`
--

CREATE TABLE `humidity` (
  `id` int(11) NOT NULL,
  `value` float NOT NULL,
  `timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `humidity`
--

INSERT INTO `humidity` (`id`, `value`, `timestamp`) VALUES
(2, 2, '2024-04-20 08:59:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `temperature`
--

CREATE TABLE `temperature` (
  `id` int(11) NOT NULL,
  `value` float NOT NULL,
  `timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `temperature`
--

INSERT INTO `temperature` (`id`, `value`, `timestamp`) VALUES
(1, 2, '2024-04-20 08:58:41');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `autobus`
--
ALTER TABLE `autobus`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `humidity`
--
ALTER TABLE `humidity`
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
-- AUTO_INCREMENT für Tabelle `humidity`
--
ALTER TABLE `humidity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `temperature`
--
ALTER TABLE `temperature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
