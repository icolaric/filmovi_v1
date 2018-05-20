-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2018 at 07:33 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collection`
--

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `ID` int(11) NOT NULL,
  `GENRE` varchar(100) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`ID`, `GENRE`) VALUES
(1, 'SF'),
(2, 'drama'),
(3, 'triler'),
(4, 'komedija'),
(5, 'akcija'),
(6, 'romantika'),
(7, 'horor');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `ID` int(11) NOT NULL,
  `TITLE` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `GENRE_ID` int(11) NOT NULL,
  `YEAR` varchar(4) COLLATE utf8_croatian_ci NOT NULL,
  `DURATION` varchar(10) COLLATE utf8_croatian_ci NOT NULL,
  `IMAGE` varchar(100) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`ID`, `TITLE`, `GENRE_ID`, `YEAR`, `DURATION`, `IMAGE`) VALUES
(5, 'Antitrust', 1, '2010', '141', 'antitrust_2001.jpg'),
(6, 'Hackers', 5, '1996', '99', 'hackers_1995.jpg'),
(7, 'Firewall', 1, '2006', '105', 'firewall_2006.jpg'),
(12, 'War Games', 1, '1983', '114', 'war_games_1983.jpg'),
(13, 'Armagedon', 1, '1998', '120', 'armagedon_1998.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `movies_info_ibfk_1` (`GENRE_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_ibfk_1` FOREIGN KEY (`GENRE_ID`) REFERENCES `genre` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
