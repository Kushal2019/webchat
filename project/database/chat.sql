-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2020 at 05:55 PM
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
-- Table structure for table `chat_data`
--

CREATE TABLE `chat_data` (
  `id` int(255) NOT NULL,
  `from_user` varchar(255) NOT NULL,
  `to_fri` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `delete_me` varchar(255) NOT NULL,
  `fri_delete_me` varchar(255) NOT NULL,
  `delete_me_val` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `fri_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat_data`
--

INSERT INTO `chat_data` (`id`, `from_user`, `to_fri`, `msg`, `time`, `date`, `delete_me`, `fri_delete_me`, `delete_me_val`, `status`, `fri_status`) VALUES
(1, 'sona@gmail.com', 'babu@gmail.com', 'hkhsdf', ' 3:37:16 PM', '7/21/2020', '0', '0', '0', '0', ''),
(2, 'babu@gmail.com', 'sona@gmail.com', 'jkhdakf', ' 3:38:22 PM', '7/21/2020', 'babu@gmail.com', '0', 'you deleted this massage', '0', ''),
(3, 'sona@gmail.com', 'babu@gmail.com', ',madnakd', ' 4:05:00 PM', '7/21/2020', '0', 'babu@gmail.com', 'you deleted this massage', '0', '1'),
(4, 'babu@gmail.com', 'sona@gmail.com', 'znmadnj', ' 4:05:22 PM', '7/21/2020', 'babu@gmail.com', '0', 'you deleted this massage', '1', '1'),
(5, 'sona@gmail.com', 'babu@gmail.com', 'mdmba', ' 4:06:02 PM', '7/21/2020', '0', 'babu@gmail.com', 'you deleted this massage', '0', '1'),
(6, 'babu@gmail.com', 'sona@gmail.com', 'bn ajhBD', ' 4:06:05 PM', '7/21/2020', 'babu@gmail.com', '0', 'you deleted this massage', '1', '1'),
(7, 'babu@gmail.com', 'sona@gmail.com', 'nbXHJc', ' 4:06:07 PM', '7/21/2020', 'babu@gmail.com', '0', 'you deleted this massage', '1', '0'),
(8, 'sona@gmail.com', 'babu@gmail.com', 'jhj', ' 9:12:11 PM', '7/22/2020', 'sona@gmail.com', '0', 'you deleted this massage', '0', '1'),
(9, 'babu@gmail.com', 'sona@gmail.com', 'hvjbhjb', ' 9:13:06 PM', '7/22/2020', 'babu@gmail.com', '0', 'you deleted this massage', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `chat_with`
--

CREATE TABLE `chat_with` (
  `id` int(10) NOT NULL,
  `user` varchar(255) NOT NULL,
  `friend` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat_with`
--

INSERT INTO `chat_with` (`id`, `user`, `friend`, `status`, `time`) VALUES
(1, 'babu@gmail.com', 'sona@gmail.com', '1', ' 9:13:06 PM'),
(2, 'sona@gmail.com', 'babu@gmail.com', '1', ' 9:13:06 PM'),
(3, 'babu@gmail.com', 'surojitsamui007@gmail.com', '1', ' 1:16:34 PM'),
(4, 'surojitsamui007@gmail.com', 'babu@gmail.com', '1', ' 1:16:34 PM');

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
(1, 'babu@gmail.com', 'surojitsamui007@gmail.com', '1'),
(2, 'babu@gmail.com', 'sona@gmail.com', '1'),
(3, 'surojitsamui007@gmail.com', 'babu@gmail.com', '1'),
(4, 'surojitsamui007@gmail.com', 'sona@gmail.com', '1');

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
(2, 'soumendolui077@gmail.com', '123654', 'USER', '1', 'offline', '00.00', '7/5/2020, 4:01:17 PM'),
(4, 'surojitsamui007@gmail.com', '1236541', 'USER', '1', 'offline', '00.00', '7/20/2020, 1:05:01 PM'),
(5, 'babu@gmail.com', '123654', 'user', '1', 'online', '00', '7/21/2020, 4:07:29 PM'),
(6, 'sona@gmail.com', '123654', 'user', '1', 'online', '00', '7/21/2020, 4:07:12 PM');

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
(4, 'babu sona', 'IMG-20200703-WA0004.jpg', '8436993268', 'surojitsamui007@gmail.com', '1236541', 'code'),
(5, 'babu', 'wallpaperflare.com_wallpaper (3).jpg', '1236547890', 'babu@gmail.com', '123654', 'code'),
(6, 'sona', 'wallpaperflare.com_wallpaper (2).jpg', '5469871230', 'sona@gmail.com', '123654', 'code'),
(7, 'soumen', 'wallpaperflare.com_wallpaper (2).jpg', '1236547098', 'soumendolui077@gmail.com', '123654', 'hhj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_data`
--
ALTER TABLE `chat_data`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `chat_data`
--
ALTER TABLE `chat_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `chat_with`
--
ALTER TABLE `chat_with`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
