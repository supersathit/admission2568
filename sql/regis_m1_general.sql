-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2025 at 01:01 PM
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
-- Table structure for table `regis_m1`
--

CREATE TABLE `regis_m1_general` (
  `code_id` varchar(13) NOT NULL COMMENT 'เลขบัตรประชาชน',
  `title` varchar(10) NOT NULL COMMENT 'คำนำหน้า',
  `name` varchar(50) NOT NULL COMMENT 'ชื่อ',
  `surname` varchar(70) NOT NULL COMMENT 'นามสกุล',
  `school_name` varchar(50) NOT NULL COMMENT 'โรงเรียน',
  `school_district` varchar(50) NOT NULL COMMENT 'อำเภอ',
  `school_province` varchar(50) NOT NULL COMMENT 'จังหวัด',
  `grade` varchar(5) NOT NULL COMMENT 'ผลการเรียน',
  `spacial` varchar(70) NOT NULL COMMENT 'ความสามารถพิเศษ',
  `bdate` date NOT NULL COMMENT 'วันเดือนปีเกิด',
  `station_bdate` varchar(30) NOT NULL COMMENT 'สถานที่เกิด',
  `blood` varchar(2) NOT NULL COMMENT 'หมู่เลือด',
  `home_id` varchar(10) NOT NULL COMMENT 'บ้านเลขที่',
  `home_group` varchar(9) NOT NULL COMMENT 'หมู่',
  `alley` varchar(20) NOT NULL COMMENT 'ซอย',
  `street` varchar(30) NOT NULL COMMENT 'ถนน',
  `sub_district` varchar(30) NOT NULL COMMENT 'ตำบล',
  `district` varchar(30) NOT NULL COMMENT 'อำเภอ',
  `province` varchar(30) NOT NULL COMMENT 'จังหวัด',
  `post_code` int(11) NOT NULL COMMENT 'รหัสไปรษณีย์',
  `tel` varchar(10) NOT NULL COMMENT 'เบอร์โทร',
  `father_name` varchar(30) NOT NULL COMMENT 'ชื่อบิดา',
  `father_surname` varchar(30) NOT NULL COMMENT 'นามสกุลบิดา',
  `father_occupation` varchar(70) NOT NULL COMMENT 'อาชีพบิดา',
  `father_tel` varchar(10) NOT NULL COMMENT 'เบอร์โทรบิดา',
  `mother_name` varchar(30) NOT NULL COMMENT 'ชื่อมารดา',
  `mother_surname` varchar(30) NOT NULL COMMENT 'นามสกุลมารดา',
  `mother_occupation` varchar(70) NOT NULL COMMENT 'อาชีพมารดา',
  `mother_tel` varchar(10) NOT NULL COMMENT 'เบอร์โทรมารดา',
  `class1` varchar(10) NOT NULL COMMENT 'อันดับ1',
  `class2` varchar(10) NOT NULL COMMENT 'อันดับ2',
  `class3` varchar(10) NOT NULL COMMENT 'อันดับ3',
  `date_regis` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `house_regis` varchar(30) NOT NULL,
  `grade_file1` varchar(30) NOT NULL,
  `grade_file2` varchar(30) DEFAULT NULL,
  `status` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'สถานะ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regis_m1`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regis_m1`
--
ALTER TABLE `regis_m1_general`
  ADD PRIMARY KEY (`code_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
