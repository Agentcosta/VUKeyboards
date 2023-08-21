-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2023 at 02:01 AM
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
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `fname`, `lname`, `email`, `comment`) VALUES
(1, 'mark', 'Vu', 'mark@mail.com', 'hi good website'),
(2, 'George', 'Mak', 'george@mail.com', 'hi nice');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `imgname` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `describtion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `imgname`, `title`, `category`, `price`, `describtion`) VALUES
(1, 'i12_q2-knob-full-navy_800x.jpg', 'Basic Blue Custom Keyboard', 'Pre-built ', 100, ''),
(2, 'blueamurai.jpg', 'Blue Samurai Keyboard', 'Pre-built', 0, ''),
(3, 'Theory.jpg', 'The Theory Keyboard', 'Pre-built', 0, ''),
(4, 'MilkywayBlue.jpg', 'The Milkey Way', 'Pre-built', 0, ''),
(6, '75V2.jpg', '75V2 Custom Keyboard', 'Pre-built', 0, ''),
(7, 'bananasplitswitch.jpg', 'Banana Split Switches(factory lubed)', 'Switches', 0, ''),
(8, 'barboneblue.jpg', 'Barbone Blue Keyboard', 'Pre-built', 0, ''),
(9, 'Boardwhite.jpg', 'White keyboard frame+board', 'Frames', 0, ''),
(10, 'cherrymxred.jpg', 'Cherry MX switches (red)', 'Switches', 0, ''),
(11, 'cuskap.jpg', 'Jell Keycaps PBT (white)', 'Keycaps', 0, ''),
(12, 'DCXgreen.jpg', 'DCX Custom Keyboard (green)', 'Pre-built', 0, ''),
(13, 'duck.jpg', 'DuckY Custom Keyboard', 'Pre-built', 0, ''),
(14, 'everglideaqking.jpg', 'Everglide Aquaking Switches', 'Switches', 0, ''),
(15, 'GK980.jpg', 'GK980 Custom Keyboard', 'Pre Pre-built', 0, ''),
(16, 'gmk8008.jpg', 'GMK 8008 Keyboard', 'Pre Pre-built', 0, ''),
(17, 'gmkicebergcaps.jpg', 'GMK Icebergs Keycaps', 'Keycaps', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `text1` text NOT NULL,
  `image1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
