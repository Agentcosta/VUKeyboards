-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2023 at 10:11 PM
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
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`) VALUES
(1, 'test', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa', 'test@test.com'),
(2, 'admin', 'admin', 'admin@gmail.com');

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
(2, 'George', 'Mak', 'george@mail.com', 'hi nice'),
(3, 'Markus', 'Chu', 'mkc.steam.cvb@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `core`
--

CREATE TABLE `core` (
  `core_id` int(11) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `ph` varchar(20) NOT NULL,
  `ad1` varchar(50) NOT NULL,
  `ad2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `core`
--

INSERT INTO `core` (`core_id`, `surname`, `firstname`, `ph`, `ad1`, `ad2`) VALUES
(170001, 'Olive', 'Grant', '0201234567', '62 Smith Road', 'Warkworth'),
(170002, 'Bounty', 'William', '0221234567', '23 Omaha Valley Rd', 'Warkworth');

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
(2, 'blueamurai.jpg', 'Blue Samurai Keyboard', 'Pre-built', 200, ''),
(3, 'Theory.jpg', 'The Theory Keyboard', 'Pre-built', 450, ''),
(4, 'MilkywayBlue.jpg', 'The Milkey Way', 'Pre-built', 80, ''),
(6, '75V2.jpg', '75V2 Custom Keyboard', 'Pre-built', 500, ''),
(7, 'bananasplitswitch.jpg', 'Banana Split Switches(factory lubed)', 'Switches', 200, ''),
(8, 'barboneblue.jpg', 'Barbone Blue Keyboard', 'Pre-built', 150, ''),
(9, 'Boardwhite.jpg', 'White keyboard frame+board', 'Frames', 240, ''),
(10, 'cherrymxred.jpg', 'Cherry MX switches (red)', 'Switches', 205, ''),
(11, 'cuskap.jpg', 'Jell Keycaps PBT (white)', 'Keycaps', 120, ''),
(12, 'DCXgreen.jpg', 'DCX Custom Keyboard (green)', 'Pre-built', 230, ''),
(13, 'duck.jpg', 'DuckY Custom Keyboard', 'Pre-built', 100, ''),
(14, 'everglideaqking.jpg', 'Everglide Aquaking Switches', 'Switches', 80, ''),
(15, 'GK980.jpg', 'GK980 Custom Keyboard', 'Pre Pre-built', 350, ''),
(16, 'gmk8008.jpg', 'GMK 8008 Keyboard', 'Pre Pre-built', 350, ''),
(17, 'gmkicebergcaps.jpg', 'GMK Icebergs Keycaps', 'Keycaps', 350, '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `accounts_id` int(11) NOT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `gallery_id`, `accounts_id`, `Date`) VALUES
(1, 91900, 170001, '2022-02-09'),
(2, 91909, 170001, '2022-02-09'),
(3, 91903, 170001, '2022-02-09'),
(4, 91909, 170001, NULL);

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

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
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

INSERT INTO `results` (`results_id`, `standard_id`, `title`, `core_id`, `result`, `Date`) VALUES
(1, 91900, 'Inquiry', 170001, '', '2022-02-09'),
(2, 91909, 'Internal', 170001, '', '2022-02-09'),
(3, 91903, 'external', 170001, '', '2022-02-09'),
(4, 91909, 'External', 170001, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slide show`
--

CREATE TABLE `slide show` (
  `id` int(100) NOT NULL,
  `imgname` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `standards`
--

CREATE TABLE `standards` (
  `standard_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `version` int(11) NOT NULL,
  `extra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `standards`
--

INSERT INTO `standards` (`standard_id`, `title`, `version`, `extra`) VALUES
(91900, 'Inquiry', 1, 1),
(91902, 'Create a Database', 1, 1),
(91903, 'Create A website', 1, 1),
(91909, 'Present a reflective analysis of developing a digital outcome', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core`
--
ALTER TABLE `core`
  ADD PRIMARY KEY (`core_id`),
  ADD KEY `core_id` (`core_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `results_id` (`order_id`),
  ADD KEY `standardnum` (`gallery_id`),
  ADD KEY `standard_id` (`gallery_id`),
  ADD KEY `core_id` (`accounts_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`results_id`),
  ADD KEY `results_id` (`results_id`),
  ADD KEY `standardnum` (`standard_id`),
  ADD KEY `standard_id` (`standard_id`),
  ADD KEY `core_id` (`core_id`);

--
-- Indexes for table `standards`
--
ALTER TABLE `standards`
  ADD PRIMARY KEY (`standard_id`),
  ADD KEY `standard_id` (`standard_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `core`
--
ALTER TABLE `core`
  MODIFY `core_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170003;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `results_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`standard_id`) REFERENCES `standards` (`standard_id`),
  ADD CONSTRAINT `results_ibfk_2` FOREIGN KEY (`core_id`) REFERENCES `core` (`core_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
