-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2020 at 12:14 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `chat_data`
--

CREATE TABLE `chat_data` (
  `id` int(255) NOT NULL,
  `from_user` varchar(255) NOT NULL,
  `to_fri` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat_data`
--

INSERT INTO `chat_data` (`id`, `from_user`, `to_fri`, `msg`, `time`) VALUES
(1, 'surojitsamui007@gmail.com', 'bcaprogramup@gmail.com', 'hi I am babusona', '00'),
(2, 'bcaprogramup@gmail.com', 'surojitsamui007@gmail.com', 'hi i am raj', '00'),
(3, 'bcaprogramup@gmail.com', 'surojitsamui007@gmail.com', 'whatsapp', '00'),
(0, 'soumendolui077@gmail.com', 'surojitsamui007@gmail.com', 'dfghj', '00'),
(0, 'soumendolui077@gmail.com', 'surojitsamui007@gmail.com', 'ghj', '00'),
(0, 'soumendolui077@gmail.com', 'surojitsamui007@gmail.com', 'sdfgh', '00'),
(0, 'soumendolui077@gmail.com', 'surojitsamui007@gmail.com', 'fghj', '00'),
(0, 'soumendolui077@gmail.com', 'surojitsamui007@gmail.com', 'soumen', '00'),
(0, 'soumendolui077@gmail.com', 'surojitsamui007@gmail.com', 'soumen dolui\n', '00'),
(0, 'soumendolui077@gmail.com', 'surojitsamui007@gmail.com', 'ghjk', '00'),
(0, 'soumendolui077@gmail.com', 'surojitsamui007@gmail.com', 'soumen', '00'),
(0, 'soumendolui077@gmail.com', 'surojitsamui007@gmail.com', 'jhk\n', '00'),
(0, 'babu@gmail.com', 'babu@gmail.com', 'soumen', '00');

-- --------------------------------------------------------

--
-- Table structure for table `chat_with`
--

CREATE TABLE `chat_with` (
  `id` int(10) NOT NULL,
  `user` varchar(255) NOT NULL,
  `friend` varchar(255) NOT NULL,
  `friend_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat_with`
--

INSERT INTO `chat_with` (`id`, `user`, `friend`, `friend_name`, `status`) VALUES
(1, 'soumendolui077@gmail.com', 'surojitsamui007@gmail.com', 'babu sona', '1'),
(2, 'soumendolui077@gmail.com', 'babu@gmail.com', 'babu', '1'),
(3, 'soumendolui077@gmail.com', 'sona@gmail.com', 'sona', '1');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `friend_email` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `username`, `friend_email`, `status`) VALUES
(1, 'soumendolui077@gmail.com', 'surojitsamui007@gmail.com', '1'),
(2, 'soumendolui077@gmail.com', 'babu@gmail.com', '1'),
(3, 'soumendolui077@gmail.com', 'sona@gmail.com', '1'),
(4, 'babu@gmail.com', 'surojitsamui007@gmail.com', '1'),
(5, 'babu@gmail.com', 'sona@gmail.com', '1'),
(6, 'babu@gmail.com', 'soumendolui077@gmail.com', '1');

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
(2, 'soumendolui077@gmail.com', '123654', 'USER', '1', 'online', '00.00', '7/5/2020, 11:30:59 AM'),
(4, 'surojitsamui007@gmail.com', '1236541', 'USER', '1', 'offline', '00.00', '7/3/2020, 10:34:51 AM'),
(5, 'babu@gmail.com', '123654', 'user', '1', 'online', '00', ''),
(6, 'sona@gmail.com', '123654', 'user', '1', 'offline', '00', '‎03‎-‎07‎-‎2020‎ ‎2‎.‎19‎.‎08‎ ‎PM');

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
(4, 'babu sona', 'Screenshot (1).png', '8436993268', 'surojitsamui007@gmail.com', '1236541', 'code'),
(5, 'babu', 'wallpaperflare.com_wallpaper (3).jpg', '1236547890', 'babu@gmail.com', '123654', 'code'),
(6, 'sona', 'wallpaperflare.com_wallpaper (2).jpg', '5469871230', 'sona@gmail.com', '123654', 'code'),
(7, 'soumen', 'wallpaperflare.com_wallpaper (2).jpg', '1236547098', 'soumendolui077@gmail.com', '123654', 'hhj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_with`
--
ALTER TABLE `chat_with`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `chat_with`
--
ALTER TABLE `chat_with`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login_detais`
--
ALTER TABLE `login_detais`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_detalis`
--
ALTER TABLE `user_detalis`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
