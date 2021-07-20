-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2021 at 11:59 AM
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
-- Database: `tulassi_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `flockmaster`
--

CREATE TABLE `flockmaster` (
  `id` int(5) NOT NULL,
  `flock` varchar(20) NOT NULL,
  `date` date DEFAULT NULL,
  `age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flockmaster`
--

INSERT INTO `flockmaster` (`id`, `flock`, `date`, `age`) VALUES
(1, 'Flock-1', '2020-06-01', 1),
(2, 'Flock-2', '2020-06-01', 1),
(3, 'Flock-3', '0000-00-00', 0),
(4, 'Flock-4', '2020-10-01', 3),
(5, 'Flock-5', '2020-11-01', 4);

-- --------------------------------------------------------

--
-- Table structure for table `itemmaster`
--

CREATE TABLE `itemmaster` (
  `id` int(5) NOT NULL,
  `cat` varchar(20) NOT NULL,
  `item` varchar(20) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itemmaster`
--

INSERT INTO `itemmaster` (`id`, `cat`, `item`, `timestamp`) VALUES
(1, 'Feed', 'Feed1', '2021-07-19 16:18:39'),
(2, 'Feed', 'Feed2', '2021-07-19 16:18:39'),
(3, 'Feed', 'Feed3', '2021-07-19 16:18:39'),
(4, 'Eggs', 'Egg1', '2021-07-19 16:18:39'),
(5, 'Man', 'Egg2', '2021-07-20 09:41:32'),
(6, 'Eggs', 'Egg3', '2021-07-19 16:18:39');

-- --------------------------------------------------------

--
-- Table structure for table `tabledata`
--

CREATE TABLE `tabledata` (
  `id` int(5) NOT NULL,
  `flock` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `age` int(5) DEFAULT NULL,
  `mort` int(5) DEFAULT NULL,
  `culls` int(5) DEFAULT NULL,
  `bwt` int(5) DEFAULT NULL,
  `ewt` int(5) DEFAULT NULL,
  `water` int(5) DEFAULT NULL,
  `feed` varchar(20) DEFAULT NULL,
  `kgs` double NOT NULL,
  `bbe` int(5) DEFAULT NULL,
  `bde` int(5) DEFAULT NULL,
  `bje` int(5) DEFAULT NULL,
  `ble` int(5) DEFAULT NULL,
  `bme` int(5) DEFAULT NULL,
  `bse` int(5) DEFAULT NULL,
  `bxle` int(5) DEFAULT NULL,
  `lbe` int(5) DEFAULT NULL,
  `pwe` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabledata`
--

INSERT INTO `tabledata` (`id`, `flock`, `date`, `age`, `mort`, `culls`, `bwt`, `ewt`, `water`, `feed`, `kgs`, `bbe`, `bde`, `bje`, `ble`, `bme`, `bse`, `bxle`, `lbe`, `pwe`) VALUES
(1, '1', '2020-06-01', 1, 0, 0, 0, 0, 0, 'Feed', 5, 0, 0, 0, 0, 0, 0, NULL, 0, 0),
(2, '2', '2020-06-01', 1, 0, 0, 0, 0, 0, 'Feed', 45, 0, 0, 0, 0, 0, 0, NULL, 0, 0),
(3, '3', '2020-06-02', 2, 0, 0, 0, 0, 0, 'Feed', 75, 0, 0, 0, 0, 0, 0, NULL, 0, 0),
(4, '4', '2020-10-01', 3, 0, 0, 0, 0, 0, 'Eggs', 17, 0, 0, 0, 0, 0, 0, NULL, 0, 0),
(5, '5', '2020-11-01', 4, 0, 0, 0, 0, 0, 'Eggs', 23, 0, 0, 0, 0, 0, 0, NULL, 0, 0),
(6, '4', '2020-10-01', 3, 0, 0, 0, 0, 0, 'Eggs', 17, 0, 0, 0, 0, 0, 0, NULL, 0, 0),
(7, '1', '2020-06-01', 1, 0, 0, 0, 0, 0, 'Eggs', 4.67, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flockmaster`
--
ALTER TABLE `flockmaster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itemmaster`
--
ALTER TABLE `itemmaster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabledata`
--
ALTER TABLE `tabledata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flockmaster`
--
ALTER TABLE `flockmaster`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `itemmaster`
--
ALTER TABLE `itemmaster`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tabledata`
--
ALTER TABLE `tabledata`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
