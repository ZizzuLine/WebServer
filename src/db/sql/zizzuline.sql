
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `autobus` (
  `id` int NOT NULL,
  `rfid` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `posizione_attuale` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `posizione_iniziale` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `posizione_finale` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `autobus` (`id`, `rfid`, `posizione_attuale`, `posizione_iniziale`, `posizione_finale`) VALUES
(1, '', '', '', ''),
(2, 'ggg', 'ggaga', 'adad', 'agag');



CREATE TABLE `contenuto` (
  `id` int NOT NULL,
  `opzione` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `contenuto` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `contenuto` (`id`, `opzione`, `contenuto`) VALUES
(1, 'default', 'lorem ipsus'),
(2, 'bus-1', 'Contenuto per l\'opzione Bus-1. Questo è un esempio di testo per il bus-1.'),
(3, 'bus-2', 'Contenuto per l\'opzione Bus-2. Questo è un esempio di testo per il bus-2.');



CREATE TABLE `fuel` (
  `id` int NOT NULL,
  `value` float NOT NULL,
  `timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `fuel` (`id`, `value`, `timestamp`) VALUES
(1, 3, '2024-04-20 09:31:03'),
(2, 9, '2024-04-20 15:36:09'),
(3, 70, '2024-04-22 17:21:27'),
(4, 22, '2024-04-22 17:23:35');

-- --------------------------------------------------------


CREATE TABLE `humidity` (
  `id` int NOT NULL,
  `value` float NOT NULL,
  `timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `humidity` (`id`, `value`, `timestamp`) VALUES
(1, 3, '2024-04-20 09:31:03'),
(2, 9, '2024-04-20 15:36:09'),
(3, 33, '2024-04-22 17:21:59'),
(4, 5, '2024-04-22 17:22:37');



CREATE TABLE `speed` (
  `id` int NOT NULL,
  `value` float NOT NULL,
  `timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `speed` (`id`, `value`, `timestamp`) VALUES
(1, 3, '2024-04-20 09:31:03'),
(2, 9, '2024-04-20 15:36:09'),
(3, 222, '2024-04-22 17:21:27'),
(4, 4, '2024-04-22 17:23:01');



CREATE TABLE `temperature` (
  `id` int NOT NULL,
  `value` float NOT NULL,
  `timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `temperature` (`id`, `value`, `timestamp`) VALUES
(1, 7, '2024-04-20 09:29:51'),
(2, 9, '2024-04-20 09:30:12'),
(3, 75, '2024-04-20 09:31:35'),
(4, 2, '2024-04-20 15:36:09'),
(5, 9, '2024-04-22 15:56:35'),
(6, 0, '2024-04-22 17:04:17'),
(7, 24, '2024-04-22 17:21:40'),
(8, 2, '2024-04-23 08:01:05'),
(9, 0, '2024-04-23 14:05:03'),
(10, 9, '2024-04-24 11:48:00');



CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` text COLLATE utf8mb4_general_ci NOT NULL,
  `passwdhash` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `users` (`id`, `username`, `passwdhash`) VALUES
(1, 'admin', 'b133a0c0e9bee3be20163d2ad31d6248db292aa6dcb1ee087a2aa50e0fc75ae2');



ALTER TABLE `autobus`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `contenuto`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `fuel`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `humidity`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `speed`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `temperature`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `autobus`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `contenuto`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;


ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
