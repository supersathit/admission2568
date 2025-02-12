-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 12, 2025 at 06:04 PM
-- Server version: 8.0.35
-- PHP Version: 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admisstion`
--

-- --------------------------------------------------------

--
-- Table structure for table `regis_m1`
--

CREATE TABLE `regis_m1` (
  `thai_id` varchar(13) COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `surname` varchar(70) COLLATE utf8mb4_general_ci NOT NULL,
  `school_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `school_distrit` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `school_province` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `grade` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `spacial` varchar(70) COLLATE utf8mb4_general_ci NOT NULL,
  `bdate` date NOT NULL,
  `station_bdate` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `blood` varchar(2) COLLATE utf8mb4_general_ci NOT NULL,
  `home_id` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `home_group` varchar(9) COLLATE utf8mb4_general_ci NOT NULL,
  `alley` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `street` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `sub_district` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `district` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `province` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `post_code` int NOT NULL,
  `tel` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `father_name` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `father_surname` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `father_occupation` varchar(70) COLLATE utf8mb4_general_ci NOT NULL,
  `father_tel` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `mother_name` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `mother_surname` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `mother_occupation` varchar(70) COLLATE utf8mb4_general_ci NOT NULL,
  `mother_tel` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `class1` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `class2` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `class3` varchar(10) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regis_m1`
--
ALTER TABLE `regis_m1`
  ADD PRIMARY KEY (`thai_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
