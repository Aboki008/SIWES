-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2023 at 04:39 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siwes`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `id` int(11) NOT NULL,
  `study` varchar(191) NOT NULL,
  `department` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`id`, `study`, `department`) VALUES
(2, 'software', 'CS'),
(4, 'hardware', 'CS');

-- --------------------------------------------------------

--
-- Table structure for table `it_records`
--

CREATE TABLE `it_records` (
  `id` int(11) NOT NULL,
  `user` varchar(191) NOT NULL,
  `cat` varchar(191) NOT NULL,
  `activity` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `it_records`
--

INSERT INTO `it_records` (`id`, `user`, `cat`, `activity`, `image`, `created_at`) VALUES
(1, '000', 'maintenace', '', '', '2023-08-23 12:41:20'),
(2, '123', 'maintenace', 'ghdhgdh', 'pic', '2023-08-22 09:21:23'),
(6, '123', 'maintenace', 'ghsjdjdgh', 'pic', '2023-08-22 09:21:23'),
(7, '123', 'software', 'hdhdghdhj', 'pic', '2023-08-22 09:21:23'),
(8, '123', 'hardware', 'vbcnbcbmc', 'pic', '2023-08-22 09:21:23'),
(9, '000', 'software', 'jmhjdkbchc jhdjhd', '', '2023-08-22 10:01:57'),
(10, '000', 'hardware', 'kfusfdgjskfk', '', '2023-08-22 10:02:41'),
(11, '000', 'hardware', 'k,jfkjgvdbsxdhbns', '', '2023-08-22 10:02:41'),
(12, '000', 'maintenace', 'mncgbcbmvjvajsvcbksahc', '', '2023-08-22 10:03:52'),
(13, '000', 'maintenace', 'nvcns n sd', '', '2023-08-22 10:03:52'),
(14, '123', 'hardware', '', '', '2023-08-22 10:07:40'),
(15, '123', 'hardware', 'dkhjdfvjchjsycjs', '', '2023-08-22 10:07:40'),
(16, '123', 'networking', 'jgdghdjssvbsfshf', '', '2023-08-23 13:17:07'),
(17, '123', 'networking', 'lcjbcjdvcjvd', '', '2023-08-23 13:17:07'),
(18, '123', 'Hardware', 'fcghjvjhgjffj', 'pic', '2023-08-23 15:00:24'),
(19, '123', 'Hardware', 'nbdmd,m,mahaghvhnsjm', 'pic', '2023-08-23 15:12:40'),
(20, '123', 'Hardware', 'bnbcmnc,mzgzs', 'pic', '2023-08-23 15:13:42'),
(21, '123', 'Graphics', ',kfjlkjskgsvhtjds', 'pic', '2023-08-24 10:35:54');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `matno` varchar(191) NOT NULL,
  `firstname` varchar(191) NOT NULL,
  `surname` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `department` varchar(191) NOT NULL,
  `place_it` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `matno`, `firstname`, `surname`, `email`, `phone`, `department`, `place_it`) VALUES
(1, '123', 'abc', 'abc', '', '0987654321', 'cs', 'nhub'),
(2, '000', 'abc', 'abc', 'a', '09875432', 'cs', 'NSC'),
(3, '', '', '', '', '', '', ''),
(4, '5', 'q', 'q', '', '', 'CS', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `role` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'ola', 'ola', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `it_records`
--
ALTER TABLE `it_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `it_records`
--
ALTER TABLE `it_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
