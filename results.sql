-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2023 at 04:53 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vukeyboards`
--

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `orders` (
  `results_id` int(11) NOT NULL,
  `standard_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `core_id` int(11) NOT NULL,
  `result` varchar(1) NOT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `orders` (`results_id`, `standard_id`, `title`, `core_id`, `result`, `Date`) VALUES
(1, 91900, 'Inquiry', 170001, '', '2022-02-09'),
(2, 91909, 'Internal', 170001, '', '2022-02-09'),
(3, 91903, 'external', 170001, '', '2022-02-09'),
(4, 91909, 'External', 170001, '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `results`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`results_id`),
  ADD KEY `results_id` (`results_id`),
  ADD KEY `standardnum` (`standard_id`),
  ADD KEY `standard_id` (`standard_id`),
  ADD KEY `core_id` (`core_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `orders`
  MODIFY `results_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `results`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`standard_id`) REFERENCES `standards` (`standard_id`),
  ADD CONSTRAINT `results_ibfk_2` FOREIGN KEY (`core_id`) REFERENCES `core` (`core_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
