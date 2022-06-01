-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2022 at 09:00 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `megatron`
--

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `item-id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` enum('banner','owl-carousel','grid') NOT NULL,
  `price` int(10) NOT NULL,
  `discount` int(10) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `model` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`item-id`, `name`, `type`, `price`, `discount`, `description`, `model`, `image`, `stock`) VALUES
(13, 'Front Loader', 'owl-carousel', 2300, 2500, 'remote control front loader model. 1000:1 size ', '(with remote)', 'Home/items/IMG-61f7e34e3c3bb8.45574839.jpg', 25),
(15, 'Paver', 'owl-carousel', 1600, 1800, 'paver model', 'CAT', 'Home/items/IMG-61f7e3d6d060b5.76141663.jpg', 12),
(16, 'Catapillar', 'owl-carousel', 900, 1200, '', 'Truck', 'Home/items/IMG-61f7e621b598e6.10520872.jpg', 19),
(17, 'Concreate', 'owl-carousel', 900, 1200, 'its', 'Mixer', 'Home/items/IMG-61f7e7370bd594.65754990.jpg', 22),
(18, 'Crane', 'owl-carousel', 1200, 3000, 'its good for play', 'chain', 'Home/items/IMG-61f7e83cb493b8.16016800.jpg', 30),
(19, 'Excavator', 'owl-carousel', 2300, 0, 'Yellow color ', 'Remote', 'Home/items/IMG-61f7e8e09046b2.90681689.jpg', 21),
(20, 'Motor Grader', 'owl-carousel', 900, 1200, '', '(CAT)', 'Home/items/IMG-61f7e952f1bab8.60963176.jpg', 30),
(21, 'Mobile Crane', 'owl-carousel', 900, 1200, '', 'scania', 'Home/items/IMG-61f7ea10befe40.76746914.jpg', 34),
(23, 'Tipper', 'owl-carousel', 900, 1200, '', 'CAT', 'Home/items/IMG-61f7ebe0da98e6.19662694.jpg', 20),
(24, 'Mobile Crane', 'owl-carousel', 1300, 1500, '', 'Tire', 'Home/items/IMG-61f7ecb42c7151.47138398.jpg', 22),
(26, 'Mobile Crane', 'owl-carousel', 1300, 0, '', 'Truck', 'Home/items/IMG-61f7ef66d65493.66761739.jpg', 21);

-- --------------------------------------------------------

--
-- Table structure for table `registeration`
--

CREATE TABLE `registeration` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registeration`
--

INSERT INTO `registeration` (`id`, `name`, `email`, `password`) VALUES
(30, 'admin', 'manager@gmail.com', '8GkR99OpB155SRHFLWHlFA=='),
(31, 'sharfa', 'sharfa@gmail.com', 'OaoW9B+CEoJU/ZMaM1y9Og=='),
(32, 'ahzam', 'fawmeeahzam123@gmail.com', 'Ig9gbhbirGOgFWwcwz9eTw=='),
(33, 'yusrie', 'yusrie@gmail.com', 'JxOUlNOo8nd8x39/6FACCA=='),
(34, 'akmal', 'hameedakmal14@gmail.com', 'mz10BqpujB2hxN9mVPzpAg==');

-- --------------------------------------------------------

--
-- Table structure for table `unauthrized_access`
--

CREATE TABLE `unauthrized_access` (
  `acc-id` int(20) NOT NULL,
  `acc-name` varchar(50) NOT NULL,
  `ent-pass` varchar(50) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `log` enum('TRUE','FALSE','REGISTER','VISIT') NOT NULL,
  `date-time` varchar(100) NOT NULL,
  `isp` varchar(50) DEFAULT NULL,
  `CountryName` varchar(50) DEFAULT NULL,
  `CountryCode` varchar(50) DEFAULT NULL,
  `RegionCode` varchar(50) DEFAULT NULL,
  `RegionName` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `ZIPCode` varchar(50) DEFAULT NULL,
  `Latitude` varchar(50) DEFAULT NULL,
  `Longitude` varchar(50) DEFAULT NULL,
  `TimeZone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unauthrized_access`
--

INSERT INTO `unauthrized_access` (`acc-id`, `acc-name`, `ent-pass`, `ip`, `log`, `date-time`, `isp`, `CountryName`, `CountryCode`, `RegionCode`, `RegionName`, `City`, `ZIPCode`, `Latitude`, `Longitude`, `TimeZone`) VALUES
(1, 'ahzam', 'thuds', '::1', 'TRUE', '', 'SLT-Mobitel', 'Sri Lanka', '+94', '1002', 'Nuwara Eliya', 'Nawalapitiya', '20600', '94.1231', '0.23423', 'Srilanka/Colombo'),
(2, 'user ', 'user-access', '::1', 'VISIT', 'Wednesday 2nd of February 2022 08:03:15 PM', 'SLT-Mobitel', 'Sri Lanka', '+94', '1002', 'Nuwara Eliya', 'Nawalapitiya', '20600', '94.1231', '0.23423', 'Srilanka/Colombo'),
(3, 'admin', '8GkR99OpB155SRHFLWHlFA==', '::1', 'TRUE', 'Wednesday 2nd of February 2022 08:03:25 PM', 'SLT-Mobitel', 'Sri Lanka', '+94', '1002', 'Nuwara Eliya', 'Nawalapitiya', '20600', '94.1231', '0.23423', 'Srilanka/Colombo'),
(4, 'user ', 'user-access', '::1', 'VISIT', 'Wednesday 2nd of February 2022 08:49:30 PM', 'SLT-Mobitel', 'Sri Lanka', '+94', '1002', 'Nuwara Eliya', 'Nawalapitiya', '20600', '94.1231', '0.23423', 'Srilanka/Colombo'),
(5, 'user ', 'user-access', '::1', 'VISIT', 'Wednesday 2nd of February 2022 08:58:26 PM', 'SLT-Mobitel', 'Sri Lanka', '+94', '1002', 'Nuwara Eliya', 'Nawalapitiya', '20600', '94.1231', '0.23423', 'Srilanka/Colombo'),
(6, 'user ', 'user-access', '::1', 'VISIT', 'Thursday 3rd of February 2022 05:28:57 AM', 'SLT-Mobitel', 'Sri Lanka', '+94', '1002', 'Nuwara Eliya', 'Nawalapitiya', '20600', '94.1231', '0.23423', 'Srilanka/Colombo'),
(7, 'user | user', 'user-access', '::1', 'VISIT', 'Friday 4th of February 2022 10:52:30 AM', '', '', '', '', '', '', '', '0', '0', ''),
(8, 'user | user', 'user-access', '::1', 'VISIT', 'Friday 4th of February 2022 11:20:42 AM', '', '', '', '', '', '', '', '0', '0', ''),
(9, 'user | user', 'user-access', '::1', 'VISIT', 'Tuesday 8th of February 2022 12:52:55 PM ', '', '', '', '', '', '', '', '', '', ''),
(10, 'user | user', 'user-access', '::1', 'VISIT', 'Tuesday 8th of February 2022 12:55:10 PM', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`item-id`),
  ADD UNIQUE KEY `image` (`image`);

--
-- Indexes for table `registeration`
--
ALTER TABLE `registeration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `unauthrized_access`
--
ALTER TABLE `unauthrized_access`
  ADD PRIMARY KEY (`acc-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `item-id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `registeration`
--
ALTER TABLE `registeration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `unauthrized_access`
--
ALTER TABLE `unauthrized_access`
  MODIFY `acc-id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
