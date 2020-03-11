-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 11, 2020 at 07:19 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buet`
--

-- --------------------------------------------------------

--
-- Table structure for table `accidents`
--

CREATE TABLE `accidents` (
  `id` int(255) NOT NULL,
  `accident number` text COLLATE utf8mb4_general_ci NOT NULL,
  `information number` text COLLATE utf8mb4_general_ci NOT NULL,
  `thana` text COLLATE utf8mb4_general_ci NOT NULL,
  `zilla` text COLLATE utf8mb4_general_ci NOT NULL,
  `vehicle amount` text COLLATE utf8mb4_general_ci NOT NULL,
  `driver amount` text COLLATE utf8mb4_general_ci NOT NULL,
  `passenger amount` text COLLATE utf8mb4_general_ci NOT NULL,
  `walker amount` text COLLATE utf8mb4_general_ci NOT NULL,
  `accident level` text COLLATE utf8mb4_general_ci NOT NULL,
  `day of accident` text COLLATE utf8mb4_general_ci NOT NULL,
  `date of accident` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `month of accident` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `year of accident` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `time of accident` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `time of report` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `date of report` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `location type` text COLLATE utf8mb4_general_ci NOT NULL,
  `traffic system` text COLLATE utf8mb4_general_ci NOT NULL,
  `collision type` text COLLATE utf8mb4_general_ci NOT NULL,
  `movement direction` text COLLATE utf8mb4_general_ci NOT NULL,
  `road divider` text COLLATE utf8mb4_general_ci NOT NULL,
  `weather` text COLLATE utf8mb4_general_ci NOT NULL,
  `light` text COLLATE utf8mb4_general_ci NOT NULL,
  `geometric info` text COLLATE utf8mb4_general_ci NOT NULL,
  `surface condition` text COLLATE utf8mb4_general_ci NOT NULL,
  `road type` text COLLATE utf8mb4_general_ci NOT NULL,
  `road condition` text COLLATE utf8mb4_general_ci NOT NULL,
  `road class` text COLLATE utf8mb4_general_ci NOT NULL,
  `road characteristic` text COLLATE utf8mb4_general_ci NOT NULL,
  `area type` text COLLATE utf8mb4_general_ci NOT NULL,
  `xy map` text COLLATE utf8mb4_general_ci NOT NULL,
  `x axis` text COLLATE utf8mb4_general_ci NOT NULL,
  `y axis` text COLLATE utf8mb4_general_ci NOT NULL,
  `route` text COLLATE utf8mb4_general_ci NOT NULL,
  `kilometre` text COLLATE utf8mb4_general_ci NOT NULL,
  `hundred metre` text COLLATE utf8mb4_general_ci NOT NULL,
  `node map` text COLLATE utf8mb4_general_ci NOT NULL,
  `node one` text COLLATE utf8mb4_general_ci NOT NULL,
  `node two` text COLLATE utf8mb4_general_ci NOT NULL,
  `city name` text COLLATE utf8mb4_general_ci NOT NULL,
  `distance` text COLLATE utf8mb4_general_ci NOT NULL,
  `road name` text COLLATE utf8mb4_general_ci NOT NULL,
  `road place` text COLLATE utf8mb4_general_ci NOT NULL,
  `distancetwo` text COLLATE utf8mb4_general_ci NOT NULL,
  `roadorplace2` text COLLATE utf8mb4_general_ci NOT NULL,
  `distancethree` text COLLATE utf8mb4_general_ci NOT NULL,
  `roadnametwo` text COLLATE utf8mb4_general_ci NOT NULL,
  `distancefour` text COLLATE utf8mb4_general_ci NOT NULL,
  `accident summary` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `witnessone` text COLLATE utf8mb4_general_ci NOT NULL,
  `witnesstwo` text COLLATE utf8mb4_general_ci NOT NULL,
  `officer` text COLLATE utf8mb4_general_ci NOT NULL,
  `officer entry date` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `research officer` text COLLATE utf8mb4_general_ci NOT NULL,
  `research entry date` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `checking officer` text COLLATE utf8mb4_general_ci NOT NULL,
  `checking entry date` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `law` text COLLATE utf8mb4_general_ci NOT NULL,
  `case situation` text COLLATE utf8mb4_general_ci NOT NULL,
  `reason one` text COLLATE utf8mb4_general_ci NOT NULL,
  `reason two` text COLLATE utf8mb4_general_ci NOT NULL,
  `reason three` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accidents`
--

INSERT INTO `accidents` (`id`, `accident number`, `information number`, `thana`, `zilla`, `vehicle amount`, `driver amount`, `passenger amount`, `walker amount`, `accident level`, `day of accident`, `date of accident`, `month of accident`, `year of accident`, `time of accident`, `time of report`, `date of report`, `location type`, `traffic system`, `collision type`, `movement direction`, `road divider`, `weather`, `light`, `geometric info`, `surface condition`, `road type`, `road condition`, `road class`, `road characteristic`, `area type`, `xy map`, `x axis`, `y axis`, `route`, `kilometre`, `hundred metre`, `node map`, `node one`, `node two`, `city name`, `distance`, `road name`, `road place`, `distancetwo`, `roadorplace2`, `distancethree`, `roadnametwo`, `distancefour`, `accident summary`, `witnessone`, `witnesstwo`, `officer`, `officer entry date`, `research officer`, `research entry date`, `checking officer`, `checking entry date`, `law`, `case situation`, `reason one`, `reason two`, `reason three`) VALUES
(10, '1', '1', 'উত্তরা', 'উত্তরা', '2', '2', '2', '2', 'মৃত্যু ঘটিত দুর্ঘটনা', 'Sunday', '11', '11', '2020', '22:00:00', '10:10:00', '1970-01-01', 'চৌরাস্তা', 'রোড ডিভাইডার দ্বারা নিয়ন্ত্রিত', 'মুখোমুখি', 'একমুখী চলাচল', 'আছে', 'ভালো', 'ভোর/সন্ধ্যা', 'বাঁকানো', 'শুকনা', 'ইটের রাস্তা', 'এবড়ো-থেবড়ো (রাফ)', 'ফিডার রোড', 'সেতু', 'গ্রাম এলাকা', '20', '20', '66', '76', '34', '25', '35', '345', '345', 'উত্তরা', '13', 'উত্তরা', 'ডিয়াবারি', '২', 'হাউজবিল্ডিং', '4', 'Azampur', '5', '', '', '', '', '1970-01-01', '', '1970-01-01', '', '1970-01-01', '', '0', '৩.চালকের ক্লান্তি', '13', '15');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'sabbir', 'md.sabbir073@gmail.com', '67e4a0b2338a76fbb5bf7b85fced2e72');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accidents`
--
ALTER TABLE `accidents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accidents`
--
ALTER TABLE `accidents`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
