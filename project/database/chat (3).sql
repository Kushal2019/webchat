-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2020 at 09:00 AM
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
(1, 'babu@gmail.com', 'sona@gmail.com', 'nabsjkd', '12:48:39 PM', '9/7/2020,', 'babu@gmail.com', '0', 'you deleted this massage', '0', '0', '0'),
(2, 'babu@gmail.com', 'sona@gmail.com', 'jmbbjkSD', '12:48:53 PM', '9/7/2020,', '0', 'sona@gmail.com', '0', 'you deleted this massage', '0', '0'),
(3, 'babu@gmail.com', 'sona@gmail.com', 'akslhf', '12:49:04 PM', '9/7/2020,', 'babu@gmail.com', 'sona@gmail.com', 'you deleted this massage', 'you deleted this massage', '0', '0'),
(4, 'babu@gmail.com', 'sona@gmail.com', 'jkzhfdklzs', '12:49:16 PM', '9/7/2020,', 'babu@gmail.com', 'sona@gmail.com', 'you deleted this massage', 'you deleted this massage', '0', '0'),
(5, 'babu@gmail.com', 'sona@gmail.com', 'ZL:M;ldas', '12:52:23 PM', '9/7/2020,', 'babu@gmail.com', 'sona@gmail.com', 'you deleted this massage', 'you deleted this massage', '0', '0'),
(6, 'babu@gmail.com', 'sona@gmail.com', ',.dlAF', '12:52:49 PM', '9/7/2020,', 'babu@gmail.com', 'sona@gmail.com', 'you deleted this massage', 'you deleted this massage', '0', '0'),
(7, 'babu@gmail.com', 'sona@gmail.com', ',mzsbdjka', '6:11:00 PM', '9/7/2020,', 'babu@gmail.com', 'sona@gmail.com', 'you deleted this massage', 'you deleted this massage', '0', '0'),
(8, 'babu@gmail.com', 'sona@gmail.com', 'jku', '12:55:51 PM', '9/7/2020,', 'babu@gmail.com', 'sona@gmail.com', 'you deleted this massage', 'you deleted this massage', '0', '0'),
(9, 'babu@gmail.com', 'sona@gmail.com', 'z,.d.sf', '12:56:19 PM', '9/7/2020,', 'babu@gmail.com', 'sona@gmail.com', 'you deleted this massage', 'you deleted this massage', '0', '1'),
(10, 'sona@gmail.com', 'babu@gmail.com', 'skldhasod', '6:09:37 PM', '9/7/2020,', 'sona@gmail.com', 'babu@gmail.com', 'you deleted this massage', 'you deleted this massage', '0', '1'),
(11, 'sona@gmail.com', 'babu@gmail.com', 'am,NKdl', '6:10:25 PM', '9/7/2020,', 'sona@gmail.com', 'babu@gmail.com', 'you deleted this massage', 'you deleted this massage', '0', '0'),
(12, 'babu@gmail.com', 'sona@gmail.com', 'sznd;lznds', '6:11:42 PM', '9/7/2020,', 'babu@gmail.com', 'sona@gmail.com', 'you deleted this massage', 'you deleted this massage', '0', '0'),
(13, 'babu@gmail.com', 'surojitsamui007@gmail.com', '  ,C', '7:15:38 PM', '9/7/2020,', '0', '0', '0', '0', '0', '0'),
(14, 'babu@gmail.com', 'sona@gmail.com', 'vxv', '7:19:41 PM', '9/7/2020,', 'babu@gmail.com', '0', 'you deleted this massage', '0', '0', '0'),
(15, 'babu@gmail.com', 'sona@gmail.com', 'dfdxg', '7:06:44 PM', '9/7/2020,', 'babu@gmail.com', 'sona@gmail.com', 'you deleted this massage', 'you deleted this massage', '1', '0'),
(16, 'babu@gmail.com', 'sona@gmail.com', 'dssgg', '7:20:03 PM', '9/7/2020,', 'babu@gmail.com', 'sona@gmail.com', 'you deleted this massage', 'you deleted this massage', '1', '0'),
(17, 'babu@gmail.com', 'sona@gmail.com', 'xXxa', '7:06:00 PM', '9/8/2020,', 'babu@gmail.com', 'sona@gmail.com', 'you deleted this massage', 'you deleted this massage', '1', '0'),
(18, 'babu@gmail.com', 'sona@gmail.com', 'mbjk', '7:06:21 PM', '9/8/2020,', 'babu@gmail.com', 'sona@gmail.com', 'you deleted this massage', 'you deleted this massage', '1', '0'),
(19, 'babu@gmail.com', 'surojitsamui007@gmail.com', ' kjdfmkd', ' 1:37:09 AM', '9/10/2020', '0', '0', '0', '0', '0', '0');

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
(1, 'babu@gmail.com', 'surojitsamui007@gmail.com', '1', ' 1:37:09 AM'),
(2, 'surojitsamui007@gmail.com', 'babu@gmail.com', '1', ' 1:37:09 AM'),
(3, 'babu@gmail.com', 'sona@gmail.com', '1', '7:06:12 PM'),
(4, 'sona@gmail.com', 'babu@gmail.com', '1', '7:06:12 PM');

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
(2, 'babu@gmail.com', 'sona@gmail.com', '1');

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
(4, 'surojitsamui007@gmail.com', '1236541', 'USER', '1', 'online', '00.00', '7/30/2020, 10:15:08 AM'),
(5, 'babu@gmail.com', '12300000', 'user', '1', 'online', '00', '9/21/2020, 11:43:15 AM'),
(6, 'sona@gmail.com', '123654', 'user', '1', 'online', '00', '9/7/2020, 9:15:55 AM');

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
(5, 'babu', '1-2.jpg', '1236547895', 'babu@gmail.com', '12300000', 'code1'),
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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `chat_with`
--
ALTER TABLE `chat_with`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
