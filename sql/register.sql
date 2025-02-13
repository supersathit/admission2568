-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2024 at 09:33 AM
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
-- Database: `prem1`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `code_id` varchar(13) NOT NULL COMMENT 'เลขบัตรประชาขน',
  `name_title` varchar(10) NOT NULL COMMENT 'คำนำหน้า',
  `name` varchar(50) NOT NULL COMMENT 'ชื่อ',
  `surname` varchar(50) NOT NULL COMMENT 'นามสกุล',
  `bdate` date NOT NULL COMMENT 'วันเดือนปีเกิด',
  `nationality` varchar(10) NOT NULL COMMENT 'สัญชาติ',
  `religion` varchar(15) NOT NULL COMMENT 'ศาสนา',
  `school` varchar(50) NOT NULL COMMENT 'โรงเรียน',
  `sub-district` varchar(30) NOT NULL COMMENT 'ตำบล',
  `district` varchar(30) NOT NULL COMMENT 'อำเภอ',
  `province` varchar(30) NOT NULL COMMENT 'จังหวัด',
  `p_code` varchar(5) NOT NULL COMMENT 'ไปรษณีย์',
  `s_tel` varchar(10) NOT NULL COMMENT 'เบอร์โรงเรียน',
  `tel` varchar(10) NOT NULL COMMENT 'เบอร์นักเรียน',
  `grade` float NOT NULL COMMENT 'เกรด',
  `slip` varchar(20) DEFAULT NULL COMMENT 'สลิปโอนเงิน',
  `time_st` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_slip` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `code_id`, `name_title`, `name`, `surname`, `bdate`, `nationality`, `religion`, `school`, `sub-district`, `district`, `province`, `p_code`, `s_tel`, `tel`, `grade`, `slip`, `time_st`, `update_slip`) VALUES
(00001, '1231231231231', 'เด็กชาย', 'สมควร', 'สองสาย', '2024-12-01', 'ไทย', 'พุทธ', 'แนวหน้า', 'ในเมือง', 'เมือง', 'กำแพงเพชร', '62000', '0812345678', '0912345678', 3.9, '1231231231231.png', '2024-12-05 21:38:46', '2024-12-12 08:27:31'),
(00002, '1234567891203', 'เด็กชาย', 'สมพร', '', '2024-11-11', 'ไทย', 'พุทธ', 'วังเวง', 'ในเมือง', 'เมือง', 'กำแพงเพชร', '62000', '0841342345', '0943843845', 3.98, NULL, '2024-12-09 06:11:09', '2024-12-12 07:28:47'),
(00003, '4862748657856', 'เด็กหญิง', 'พรประภา', 'อรดี', '2024-01-08', 'ไทย', 'พุทธ', 'วังเวง', 'ในเมือง', 'เมือง', 'กำแพงเพชร', '62000', '0645138453', '0153138453', 3.23, NULL, '2024-12-09 06:14:21', '2024-12-12 07:28:47'),
(00004, '9652384536843', 'เด็กหญิง', 'สมฤดี', 'ศรีสาม', '2024-01-25', 'ไทย', 'พุทธ', 'วังเวง', 'ในเมือง', 'เมือง', 'กำแพงเพชร', '62000', '0254694168', '0841312351', 2.1, NULL, '2024-12-09 06:19:13', '2024-12-12 07:28:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
