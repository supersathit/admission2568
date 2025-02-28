-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2025 at 03:30 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `list_exam_m4`
--

CREATE TABLE `list_exam_m4` (
  `code_id` varchar(13) NOT NULL COMMENT 'เลขบัตรประชาชน',
  `num_test` int(2) NOT NULL COMMENT 'ลำดับที่นั่งสอบ',
  `room_test` int(2) NOT NULL COMMENT 'ลำดับห้องสอบ',
  `num_room` int(3) NOT NULL COMMENT 'เลขที่ห้องสอบ',
  `test_id` int(5) NOT NULL COMMENT 'เลขที่นั่งสอบ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `list_exam_m4`
--

INSERT INTO `list_exam_m4` (`code_id`, `num_test`, `room_test`, `num_room`, `test_id`) VALUES
('1104301222143', 10, 1, 131, 14010),
('1139400051775', 18, 1, 131, 14018),
('1219901220188', 16, 1, 131, 14016),
('1309903740021', 21, 1, 131, 14021),
('1409903799751', 22, 1, 131, 14022),
('1600102065309', 20, 1, 131, 14020),
('1600102070418', 19, 1, 131, 14019),
('1629900847612', 11, 1, 131, 14011),
('1629900883520', 14, 1, 131, 14014),
('1629900889790', 1, 1, 131, 14001),
('1629900891875', 4, 1, 131, 14004),
('1629900900882', 8, 1, 131, 14008),
('1629900901455', 5, 1, 131, 14005),
('1629900902893', 23, 1, 131, 14023),
('1629900905141', 17, 1, 131, 14017),
('1629900907861', 15, 1, 131, 14015),
('1629900908719', 9, 1, 131, 14009),
('1629900908824', 3, 1, 131, 14003),
('1629900909413', 7, 1, 131, 14007),
('1629900913224', 2, 1, 131, 14002),
('1659902528751', 12, 1, 131, 14012),
('1738500002664', 6, 1, 131, 14006),
('1909803446941', 13, 1, 131, 14013);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_exam_m4`
--
ALTER TABLE `list_exam_m4`
  ADD PRIMARY KEY (`code_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
