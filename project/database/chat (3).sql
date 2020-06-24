-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2020 at 09:14 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_detais`
--

CREATE TABLE `login_detais` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `activelog` varchar(255) NOT NULL,
  `fristtime` varchar(255) NOT NULL,
  `lasttime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_detais`
--

INSERT INTO `login_detais` (`id`, `username`, `password`, `type`, `status`, `activelog`, `fristtime`, `lasttime`) VALUES
(1, 'surojitsamui007@gmail.com', '733d7be2196ff70efaf6913fc8bdcabf', 'USER', '1', 'offline', '00.00', '00.00');

-- --------------------------------------------------------

--
-- Table structure for table `user_detalis`
--

CREATE TABLE `user_detalis` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_pic` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_detalis`
--

INSERT INTO `user_detalis` (`id`, `name`, `user_pic`, `mobile`, `email`, `password`, `profession`) VALUES
(1, 'Sonababu', 'upload/user_pic/userprofile.jpg', '8436993268', 'surojitsamui007@gmail.com', '733d7be2196ff70efaf6913fc8bdcabf', 'code');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_detais`
--
ALTER TABLE `login_detais`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_detalis`
--
ALTER TABLE `user_detalis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_detais`
--
ALTER TABLE `login_detais`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_detalis`
--
ALTER TABLE `user_detalis`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
