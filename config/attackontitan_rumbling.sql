-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 01, 2023 at 04:19 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attackontitan_rumbling`
--

-- --------------------------------------------------------

--
-- Table structure for table `death`
--

CREATE TABLE `death` (
  `id` int NOT NULL,
  `userid` int DEFAULT NULL,
  `timelineid` int DEFAULT NULL,
  `cause` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `death`
--

INSERT INTO `death` (`id`, `userid`, `timelineid`, `cause`, `image`) VALUES
(1, 3, 1, 'KILLED BY MIKASA ACKERMAN', 'koslow_death.png'),
(2, 5, 1, 'BURNED BY FALCO’S TITAN TRANSFORMATION', 'colt_death.png'),
(3, 7, 1, 'EATEN BY FALCO’S TITAN & INHERITE HIS JAW TITAN POWER', 'porco_death.png'),
(4, 8, 1, 'DRUNK ZEKE’S WINE & TURN INTO MINDLESS TITAN', 'pixis_death.png'),
(5, 9, 1, 'DRUNK ZEKE’S WINE & TURN INTO MINDLESS TITAN', 'nile_death.png');

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE `timeline` (
  `id` int NOT NULL,
  `place` varchar(50) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `time` varchar(10) DEFAULT NULL,
  `undiscovered_death` int DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`id`, `place`, `details`, `time`, `undiscovered_death`, `image`) VALUES
(1, 'Mitras, Paradis', 'Mitras is the opulent capital city and center of power within Wall Sina, where nobles and aristocrats enjoy extravagant wealth detached from commoners struggling daily against the Titan threat outside.', 'Day 1', 83, 'mitras.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `nickname` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `fraction_ethnic` varchar(100) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nickname`, `password`, `name`, `fraction_ethnic`, `avatar`, `status`, `role`) VALUES
(1, 'peasure', 'admin123', 'Peasure', 'Berg News - Eldian', 'peasure.png', 'Alive', 'Admin'),
(2, 'eren', '123', 'Eren Yeager', 'Yeagerist - Eldian', 'eren.png', 'Alive', 'User'),
(3, 'koslow', '123', 'Koslow', 'Military - Marley', 'koslow.png', 'Dead', 'User'),
(4, 'mikasa', '123', 'Mikasa Ackerman', 'Alliance - Eldian', 'mikasa.png', 'Alive', 'User'),
(5, 'colt', '123', 'Colt Grice', 'Military - Marley', 'colt.png', 'Dead', 'User'),
(6, 'falco', '123', 'Falco Grice', 'Warrior - Marley', 'falco.png', 'Alive', 'User'),
(7, 'porco', '123', 'Porco Galliard', 'Warrior - Marley', 'porco.png', 'Dead', 'User'),
(8, 'pixis', '123', 'Pixis Dot', 'Military - Eldian', 'pixis.png', 'Dead', 'User'),
(9, 'nile', '123', 'Nile Dok', 'Military - Eldian', 'nile.png', 'Dead', 'User'),
(10, 'zeke', '123', 'Zeke Yeager', 'Anti Marleyan - Marley', 'zeke.png', 'Alive', 'User'),
(11, 'ramzi', '123', 'Ramzi', 'Civil - Marley', 'ramzi.png', 'Alive', 'User'),
(12, 'halil', '123', 'Halil', 'Civil - Marley', 'halil.png', 'Alive', 'User'),
(13, 'floch', '123', 'Floch Forster', 'Yeagerist - Eldian', 'floch.png', 'Alive', 'User'),
(14, 'samuel', '123', 'Samuel', 'Yeagerist - Eldian', 'samuel.png', 'Alive', 'User'),
(15, 'daz', '123', 'Daz', 'Yeagerist - Eldian', 'daz.png', 'Alive', 'User'),
(16, 'connie', '123', 'Connie Springer', 'Alliance - Eldian', 'connie.png', 'Alive', 'User'),
(17, 'magath', '123', 'Magath Theo', 'Military - Marley', 'magath.png', 'Alive', 'User'),
(18, 'shadis', '123', 'Shadis Keith', 'Military - Eldian', 'shadis.png', 'Alive', 'User'),
(19, 'hange', '123', 'Hange Zoe', 'Alliance - Eldian', 'hange.png', 'Alive', 'User'),
(20, 'levi', '123', 'Levi Ackerman', 'Alliance - Eldian', 'levi.png', 'Alive', 'User'),
(21, 'armin', '123', 'Armin Arlert', 'Alliance - Eldian', 'armin.png', 'Alive', 'User'),
(22, 'jean', '123', 'Jean Kirstean', 'Alliance - Eldian', 'jean.png', 'Alive', 'User'),
(23, 'kiyomi', '123', 'Kiyomi Azumabito', 'Civil - Eldian', 'kiyomi.png', 'Alive', 'User'),
(24, 'historia', '123', 'Historia Reiss', 'Civil - Eldian', 'historia.png', 'Alive', 'User'),
(25, 'hitch', '123', 'Hitch Dreyse', 'Yeagerist - Eldian', 'historia.png', 'Alive', 'User'),
(26, 'reiner', '123', 'Reiner Braun', 'Alliance - Marley', 'reiner.png', 'Alive', 'User'),
(27, 'annie', '123', 'Annie Leonhart', 'Alliance - Marley', 'annie.png', 'Alive', 'User'),
(28, 'pieck', '123', 'Pieck Finger', 'Alliance - Marley', 'pieck.png', 'Alive', 'User'),
(29, 'gabi', '123', 'Gabi Braun', 'Warrior - Marley', 'gabi.png', 'Alive', 'User'),
(30, 'karina', '123', 'Karina Braun', 'Civil - Marley', 'karina.png', 'Alive', 'User'),
(31, 'leonhart', '123', 'Leonhart', 'Civil - Marley', 'leonhart.png', 'Alive', 'User'),
(32, 'finger', '123', 'Finger', 'Civil - Marley', 'finger.png', 'Alive', 'User'),
(33, 'yelena', '123', 'Yelena', 'Alliance - Marley', 'yelena.png', 'Alive', 'User'),
(34, 'onyan', '123', 'Onyankopon', 'Alliance - Marley', 'onyan.png', 'Alive', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `death`
--
ALTER TABLE `death`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `timelineid` (`timelineid`);

--
-- Indexes for table `timeline`
--
ALTER TABLE `timeline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `death`
--
ALTER TABLE `death`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `death`
--
ALTER TABLE `death`
  ADD CONSTRAINT `death_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `death_ibfk_2` FOREIGN KEY (`timelineid`) REFERENCES `timeline` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
