-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2023 at 07:57 AM
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
-- Database: `railsheba`
--

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `id` int(100) NOT NULL,
  `train_name` varchar(100) NOT NULL,
  `off_day` varchar(100) NOT NULL,
  `from_des` varchar(100) NOT NULL,
  `from_time` varchar(100) NOT NULL,
  `to_des` varchar(100) NOT NULL,
  `to_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`id`, `train_name`, `off_day`, `from_des`, `from_time`, `to_des`, `to_time`) VALUES
(1, 'KALNI EXPRESS(774)', 'Fri', 'Dhaka', '12:00 pm', 'Sylhet', '6:30 pm'),
(2, 'UDAYAN EXPRESS (723)', 'Tue', 'Dhaka', '6:10 am', 'Sylhet', '11:40 am'),
(15, 'TANGAIL COMMUTER 1033', 'Sun', 'Dhaka', '12:40 PM', 'Tangail', '2:40 PM'),
(16, 'TANGAIL COMMUTER 1034', 'Tue', 'Dhaka', '12:40 PM', 'Tangail', '2:40 PM'),
(17, 'MAITREE EXPRESS 3107', 'Wed', 'Dhaka', '12:40 PM', 'Chattogram', '2:40 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `train`
--
ALTER TABLE `train`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
