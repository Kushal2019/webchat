-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2020 at 08:56 AM
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
  `fri_delete_val` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `fri_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat_data`
--

INSERT INTO `chat_data` (`id`, `from_user`, `to_fri`, `msg`, `time`, `date`, `delete_me`, `fri_delete_me`, `delete_me_val`, `fri_delete_val`, `status`, `fri_status`) VALUES
(1, 'sona@gmail.com', 'babu@gmail.com', 'jknjnj', ' 11:06:07 AM', '7/31/2020', 'sona@gmail.com', '0', 'you deleted this massage', '0', '0', '0'),
(2, 'sona@gmail.com', 'surojitsamui007@gmail.com', 'hj h j', ' 11:06:12 AM', '7/31/2020', '0', '0', '0', '0', '0', '0'),
(3, 'sona@gmail.com', 'babu@gmail.com', 'h hbj', ' 11:06:17 AM', '7/31/2020', '0', '0', '0', '0', '0', '0'),
(4, 'sona@gmail.com', 'babu@gmail.com', 'hb bhbhj', ' 11:06:21 AM', '7/31/2020', '0', '0', '0', '0', '0', '0'),
(5, 'sona@gmail.com', 'babu@gmail.com', 'b b ', ' 11:06:22 AM', '7/31/2020', '0', '0', '0', '0', '0', '0'),
(6, 'sona@gmail.com', 'surojitsamui007@gmail.com', 'b n b', ' 11:06:26 AM', '7/31/2020', '0', '0', '0', '0', '0', '0'),
(7, 'sona@gmail.com', 'babu@gmail.com', 'cvvcv', ' 11:09:30 AM', '7/31/2020', '0', '0', '0', '0', '0', '0'),
(8, 'surojitsamui007@gmail.com', 'sona@gmail.com', 'Hhhh', ', 11:09:46 am', '31/07/202', '0', '0', '0', '0', '0', '0'),
(9, 'sona@gmail.com', 'babu@gmail.com', 'dfvgfg', ' 11:09:55 AM', '7/31/2020', '0', '0', '0', '0', '0', '0'),
(10, 'sona@gmail.com', 'babu@gmail.com', 'cffhhcf', ' 11:10:07 AM', '7/31/2020', '0', '0', '0', '0', '0', '0'),
(11, 'surojitsamui007@gmail.com', 'sona@gmail.com', 'Gg', ', 11:10:23 am', '31/07/202', '0', '0', '0', '0', '0', '0'),
(12, 'surojitsamui007@gmail.com', 'sona@gmail.com', 'Gtyyy', ', 11:11:00 am', '31/07/202', '0', '0', '0', '0', '0', '0'),
(13, 'sona@gmail.com', 'babu@gmail.com', 'gfhfgh', ' 11:11:06 AM', '7/31/2020', '0', '0', '0', '0', '0', '0'),
(14, 'sona@gmail.com', 'surojitsamui007@gmail.com', 'vcbgh', ' 11:11:13 AM', '7/31/2020', '0', '0', '0', '0', '0', '0'),
(15, 'sona@gmail.com', 'soumendolui077@gmail.com', 'cfhfgh', ' 11:11:19 AM', '7/31/2020', '0', '0', '0', '0', '0', '0'),
(16, 'surojitsamui007@gmail.com', 'sona@gmail.com', 'Hhh', ', 11:11:23 am', '31/07/202', '0', '0', '0', '0', '0', '0'),
(17, 'sona@gmail.com', 'babu@gmail.com', 'cxvbcvb', ' 11:11:27 AM', '7/31/2020', '0', '0', '0', '0', '0', '0'),
(18, 'sona@gmail.com', 'soumendolui077@gmail.com', ' vnvn', ' 11:11:32 AM', '7/31/2020', '0', '0', '0', '0', '0', '0'),
(19, 'sona@gmail.com', 'soumendolui077@gmail.com', 'cvhcvh', ' 11:11:36 AM', '7/31/2020', '0', '0', '0', '0', '0', '0'),
(20, 'sona@gmail.com', 'babu@gmail.com', 'fg', ' 11:11:49 AM', '7/31/2020', '0', '0', '0', '0', '0', '0'),
(21, 'sona@gmail.com', 'babu@gmail.com', ',,;', ' 11:17:50 AM', '7/31/2020', 'sona@gmail.com', '0', 'you deleted this massage', '0', '1', '0'),
(22, 'sona@gmail.com', 'soumendolui077@gmail.com', 'cxvx', ' 11:19:55 AM', '7/31/2020', '0', '0', '0', '0', '0', '0'),
(23, 'sona@gmail.com', 'babu@gmail.com', 'zdfdz', ' 11:19:59 AM', '7/31/2020', 'sona@gmail.com', '0', 'you deleted this massage', '0', '1', '0'),
(24, 'surojitsamui007@gmail.com', 'sona@gmail.com', 'Bbsbs', ', 11:20:08 am', '31/07/202', '0', '0', '0', '0', '0', '0'),
(25, 'sona@gmail.com', 'babu@gmail.com', 'd nn dsm', '9:19:21 AM', '8/1/2020,', 'sona@gmail.com', '0', 'you deleted this massage', '0', '1', '0'),
(26, 'sona@gmail.com', 'babu@gmail.com', ',dsds,', '9:19:24 AM', '8/1/2020,', '0', '0', '0', '0', '0', '0'),
(27, 'sona@gmail.com', 'babu@gmail.com', ',d,', '9:19:26 AM', '8/1/2020,', '0', '0', '0', '0', '0', '0'),
(28, 'sona@gmail.com', 'babu@gmail.com', 'dld', '9:19:28 AM', '8/1/2020,', '0', '0', '0', '0', '0', '0'),
(29, 'sona@gmail.com', 'surojitsamui007@gmail.com', ',nk', '10:19:12 AM', '8/1/2020,', '0', '0', '0', '0', '0', '0'),
(30, 'sona@gmail.com', 'surojitsamui007@gmail.com', 'kjlk', '10:19:16 AM', '8/1/2020,', '0', '0', '0', '0', '0', '0'),
(31, 'sona@gmail.com', 'babu@gmail.com', 'm, m,', '10:19:54 AM', '8/1/2020,', '0', '0', '0', '0', '0', '0'),
(32, 'sona@gmail.com', 'surojitsamui007@gmail.com', 'nmnjm', '10:20:00 AM', '8/1/2020,', '0', '0', '0', '0', '0', '0'),
(33, 'sona@gmail.com', 'soumendolui077@gmail.com', 'mnnj', '10:20:05 AM', '8/1/2020,', '0', '0', '0', '0', '0', '0'),
(34, 'sona@gmail.com', 'babu@gmail.com', 'jkjk', '10:20:09 AM', '8/1/2020,', '0', '0', '0', '0', '0', '0'),
(35, 'sona@gmail.com', 'surojitsamui007@gmail.com', 'kjj', '10:20:18 AM', '8/1/2020,', '0', '0', '0', '0', '0', '0'),
(36, 'sona@gmail.com', 'babu@gmail.com', 'nmbb', '10:20:23 AM', '8/1/2020,', '0', '0', '0', '0', '0', '0'),
(37, 'sona@gmail.com', 'soumendolui077@gmail.com', 'm m,', '10:20:28 AM', '8/1/2020,', '0', '0', '0', '0', '0', '0');

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
(1, 'sona@gmail.com', 'babu@gmail.com', '1', '10:20:23 AM'),
(2, 'babu@gmail.com', 'sona@gmail.com', '1', '10:20:23 AM'),
(3, 'sona@gmail.com', 'surojitsamui007@gmail.com', '1', '10:20:18 AM'),
(4, 'surojitsamui007@gmail.com', 'sona@gmail.com', '1', '10:20:18 AM'),
(5, 'sona@gmail.com', 'soumendolui077@gmail.com', '1', '10:20:28 AM'),
(6, 'soumendolui077@gmail.com', 'sona@gmail.com', '1', '10:20:28 AM');

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
(1, 'babu@gmail.com', 'sona@gmail.com', '1'),
(2, 'babu@gmail.com', 'surojitsamui007@gmail.com', '1'),
(3, 'sona@gmail.com', 'babu@gmail.com', '1'),
(4, 'surojitsamui007@gmail.com', 'soumendolui077@gmail.com', '1'),
(5, 'surojitsamui007@gmail.com', 'sona@gmail.com', '1'),
(6, 'surojitsamui007@gmail.com', 'babu@gmail.com', '1'),
(7, 'sona@gmail.com', 'surojitsamui007@gmail.com', '1'),
(8, 'sona@gmail.com', 'soumendolui077@gmail.com', '1');

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
(4, 'surojitsamui007@gmail.com', '1236541', 'USER', '1', 'online', '00.00', '7/31/2020, 7:34:40 AM'),
(5, 'babu@gmail.com', '123654', 'user', '1', 'offline', '00', '7/31/2020, 7:34:19 AM'),
(6, 'sona@gmail.com', '123654', 'user', '1', 'offline', '00', '8/1/2020, 10:20:36 AM');

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
(4, 'babu sona', 'IMG_20200704_020016.jpg', '8436993268', 'surojitsamui007@gmail.com', '1236541', 'code'),
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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `chat_with`
--
ALTER TABLE `chat_with`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
