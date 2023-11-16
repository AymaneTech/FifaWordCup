-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2023 at 03:09 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `worldcup`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(255) DEFAULT NULL,
  `group_stadium` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`group_id`, `group_name`, `group_stadium`) VALUES
(1, 'Group A', 'Stadium A'),
(2, 'Group B', 'Stadium B'),
(3, 'Group C', 'Stadium C'),
(4, 'Group D', 'Stadium D'),
(5, 'Group E', 'Stadium E'),
(6, 'Group F', 'Stadium F'),
(7, 'Group G', 'Stadium G'),
(8, 'Group H', 'Stadium H');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `team_id` int(11) NOT NULL,
  `team_name` varchar(255) DEFAULT NULL,
  `team_capital` varchar(255) DEFAULT NULL,
  `team_continent` varchar(255) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `key_player` varchar(255) DEFAULT NULL,
  `flag_path` varchar(355) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`team_id`, `team_name`, `team_capital`, `team_continent`, `group_id`, `key_player`, `flag_path`) VALUES
(1, 'Egypt', 'Cairo', 'Africa', 1, '/images/egypt_player.jpg', './assets/images/flags/egypt.png'),
(2, 'Morocco', 'Rabat', 'Africa', 1, '/images/morocco_player.jpg', './assets/images/flags/morocco.png'),
(3, 'Algeria', 'Algiers', 'Africa', 2, '/images/algeria_player.jpg', './assets/images/flags/algeria.png'),
(4, 'Tunisia', 'Tunis', 'Africa', 2, '/images/tunisia_player.jpg', './assets/images/flags/tunisia.png'),
(5, 'Nigeria', 'Abuja', 'Africa', 3, '/images/nigeria_player.jpg', './assets/images/flags/nigeria.png'),
(6, 'Senegal', 'Dakar', 'Africa', 3, '/images/senegal_player.jpg', './assets/images/flags/senegal.png'),
(7, 'Ghana', 'Accra', 'Africa', 4, '/images/ghana_player.jpg', './assets/images/flags/ghana.png'),
(8, 'Cameroon', 'Yaoundé', 'Africa', 4, '/images/cameroon_player.jpg', './assets/images/flags/cameroon.png'),
(9, 'Saudi Arabia', 'Riyadh', 'Asia', 5, '/images/saudi_arabia_player.jpg', './assets/images/flags/saudi arabia.png'),
(10, 'UAE', 'Abu Dhabi', 'Asia', 5, '/images/uae_player.jpg', './assets/images/flags/uae.png'),
(11, 'Qatar', 'Doha', 'Asia', 6, '/images/qatar_player.jpg', './assets/images/flags/qatar.png'),
(12, 'Iraq', 'Baghdad', 'Asia', 6, '/images/iraq_player.jpg', './assets/images/flags/iraq.png'),
(13, 'Jordan', 'Amman', 'Asia', 7, '/images/jordan_player.jpg', './assets/images/flags/jordan.png'),
(14, 'brezil', 'Cairo', 'Africa', 7, '/images/egypt2_player.jpg', './assets/images/flags/brezil.png'),
(15, 'germany', 'berlin', 'europe', 8, '/images/algeria2_player.jpg', './assets/images/flags/germany.png'),
(16, 'mouritanie', 'mouritanie', 'europe', 8, '/images/morocco2_player.jpg', './assets/images/flags/mouritanie.png'),
(17, 'china', 'Brasília', 'asia', 1, '/images/brazil_player.jpg', './assets/images/flags/china.png'),
(18, 'Germany', 'Berlin', 'Europe', 2, '/images/germany_player.jpg', './assets/images/flags/germany.png'),
(19, 'Argentina', 'Buenos Aires', 'South America', 3, '/images/argentina_player.jpg', './assets/images/flags/argentina.png'),
(20, 'France', 'Paris', 'Europe', 4, '/images/france_player.jpg', './assets/images/flags/france.png'),
(21, 'Spain', 'Madrid', 'Europe', 5, '/images/spain_player.jpg', './assets/images/flags/spain.png'),
(22, 'Italy', 'Rome', 'Europe', 6, '/images/italy_player.jpg', './assets/images/flags/italy.png'),
(23, 'Japan', 'Tokyo', 'Asia', 7, '/images/japan_player.jpg', './assets/images/flags/japan.png'),
(24, 'Australia', 'Canberra', 'Australia', 8, '/images/australia_player.jpg', './assets/images/flags/australia.png'),
(25, 'colombia', 'Paris', 'Europe', 1, '/images/france2_player.jpg', './assets/images/flags/colombia.png'),
(26, 'Argentina', 'Buenos Aires', 'South America', 2, '/images/argentina2_player.jpg', './assets/images/flags/argentina.png'),
(27, 'Germany', 'Berlin', 'Europe', 3, '/images/germany2_player.jpg', './assets/images/flags/germany.png'),
(28, 'Brazil', 'Brasília', 'South America', 4, '/images/brazil2_player.jpg', './assets/images/flags/brazil.png'),
(29, 'Spain', 'Madrid', 'Europe', 5, '/images/spain2_player.jpg', './assets/images/flags/spain.png'),
(30, 'Italy', 'Rome', 'Europe', 6, '/images/italy2_player.jpg', './assets/images/flags/italy.png'),
(31, 'Japan', 'Tokyo', 'Asia', 7, '/images/japan2_player.jpg', './assets/images/flags/japan.png'),
(32, 'Australia', 'Canberra', 'Australia', 8, '/images/australia2_player.jpg', './assets/images/flags/australia.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`team_id`),
  ADD KEY `group_id` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
