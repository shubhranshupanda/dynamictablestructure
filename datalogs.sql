-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2021 at 07:19 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datalogs`
--

-- --------------------------------------------------------

--
-- Table structure for table `trackhistory`
--

CREATE TABLE `trackhistory` (
  `th_id` int(11) NOT NULL,
  `th_userIP` varchar(20) NOT NULL,
  `th_keyword` varchar(30) NOT NULL,
  `th_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trackhistory`
--

INSERT INTO `trackhistory` (`th_id`, `th_userIP`, `th_keyword`, `th_timestamp`) VALUES
(1, '::1', 'book', '2021-07-17 17:11:15'),
(2, '::1', 'oppertunity', '2021-07-17 17:11:23'),
(3, '::1', 'success', '2021-07-17 17:11:29'),
(4, '::1', 'book', '2021-07-17 17:12:10'),
(5, '::1', 'success', '2021-07-17 17:12:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trackhistory`
--
ALTER TABLE `trackhistory`
  ADD PRIMARY KEY (`th_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trackhistory`
--
ALTER TABLE `trackhistory`
  MODIFY `th_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
