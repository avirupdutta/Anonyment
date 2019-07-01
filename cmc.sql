-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2019 at 07:53 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmc`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(3) NOT NULL,
  `all_comments` varchar(500) DEFAULT NULL,
  `user_id` int(3) NOT NULL,
  `curr_timestamp` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `all_comments`, `user_id`, `curr_timestamp`) VALUES
(1, 'hii', 3, '2019-06-30 08:24:09'),
(2, 'hello', 6, '2019-06-30 08:26:06'),
(3, 'hii 2', 3, '2019-06-30 08:26:22'),
(4, 'fererger', 6, '2019-06-30 14:02:49'),
(5, 'asfsafadf', 6, '2019-06-30 14:05:54'),
(6, 'very good teacher :)', 8, '2019-06-30 14:08:02'),
(7, 'Aaj ami jetei parbo na', 8, '2019-06-30 14:08:45'),
(8, 'how r u?', 3, '2019-07-01 11:05:12'),
(9, '1 ssadflkjbasdf', 3, '2019-07-01 11:05:32'),
(10, '2) lkkasdfsadf\r\n', 3, '2019-07-01 11:05:38'),
(11, '3) lksdnfsdf\r\n', 3, '2019-07-01 11:05:44'),
(12, 'hum tere baap hai!', 13, '2019-07-01 11:21:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `user_email` varchar(128) NOT NULL,
  `user_password` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_email`, `user_password`) VALUES
(3, 'avirupdutta10@gmail.com', '9876543210'),
(5, 'test@demo.com', '123456789'),
(6, 'test2@demo.com', '123456789'),
(7, 'test123@gmail.com', '123456789'),
(8, 'sangita@gmail.com', 'Sa123'),
(9, 'hello@gmail.com', '123123'),
(10, 'hello2@gmail.com', '123123'),
(11, 'hello3@gmail.com', '123123'),
(12, 'hello4@gmail.com', '123123'),
(13, 'tester1@test.com', '123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
