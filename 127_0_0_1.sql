-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2023 at 03:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vysoxnyu_college`
--
CREATE DATABASE IF NOT EXISTS `vysoxnyu_college` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `vysoxnyu_college`;

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `sno` int(200) NOT NULL,
  `name` varchar(600) NOT NULL,
  `email` varchar(500) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `image` varchar(800) NOT NULL,
  `pass` varchar(500) NOT NULL,
  `textarea` varchar(700) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`sno`, `name`, `email`, `mobile`, `image`, `pass`, `textarea`, `gender`, `city`, `date`) VALUES
(1, 'Dummy', 'admin@gmail.com', '8278698501', '2023-04-24-18-12flag-bahrain-visa-application-form-260nw-1899208528.webp', '123', 'hello', 'Female', 'Jaipur', '2023-04-24 18:12'),
(3, 'Harshit', 'harshit@gmail.com', '8278698501', 'BHARTIYA_CODERS-LOGO.jpg', '123', 'hello Sir  ', 'Male', 'Masuri', '2023-04-24 18:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
