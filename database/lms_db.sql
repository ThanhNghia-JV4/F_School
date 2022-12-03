-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2022 at 06:46 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `admin_email` varchar(255) COLLATE utf8_bin NOT NULL,
  `admin_pass` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(1, 'admin', 'admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` text COLLATE utf8_bin NOT NULL,
  `course_desc` text COLLATE utf8_bin NOT NULL,
  `course_author` varchar(255) COLLATE utf8_bin NOT NULL,
  `course_img` text COLLATE utf8_bin NOT NULL,
  `course_duration` text COLLATE utf8_bin NOT NULL,
  `course_price` int(11) NOT NULL,
  `course_original_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_desc`, `course_author`, `course_img`, `course_duration`, `course_price`, `course_original_price`) VALUES
(32, 'ANGULAR', 'Angular là một khung ứng ...', 'Bảo Trân', '../image/courseimg/an.png', '21', 1230000, 1000000),
(34, 'Vue', 'Vue là ...', 'Hoàng Dung', '../image/courseimg/vuejs (1).png', '10 days', 459000, 1000000000),
(35, 'NodeJS', 'NodeJS là ...', 'Thanh Nghĩa', '../image/courseimg/node.png', '9 days', 999999, 1000000),
(36, 'PHP ', 'PHP là ...', 'Thanh Nghĩa', '../image/courseimg/php.png', '21 days', 6900000, 7000000),
(37, 'C++', 'Lập Trình C++', 'Thanh Nghĩa', '../image/courseimg/c++.png', '21', 190000, 1000000),
(38, 'Guitar', 'Guitar', 'Bảo Trân', '../image/courseimg/guitar.jpg', '20 days', 0, 1000000),
(39, 'JAVA', 'Lập trình JAVA', 'Thanh Nghĩa', '../image/courseimg/java.png', '6 days', 100000, 1000000),
(40, 'SECURITY+', 'security+ ...', 'Thanh Nghĩa', '../image/courseimg/sec.jpg', '100 days', 90000000, 100000000),
(41, 'PYTHON', 'PYTHON là ...', 'Hoàng Dung', '../image/courseimg/python.jpeg', '32', 1000000, 123123123);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `f_content` text COLLATE utf8_bin NOT NULL,
  `stu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `f_content`, `stu_id`) VALUES
(3, 'Good web !', 41);

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `lesson_id` int(11) NOT NULL,
  `lesson_name` text COLLATE utf8_bin NOT NULL,
  `lesson_desc` text COLLATE utf8_bin NOT NULL,
  `lesson_link` text COLLATE utf8_bin NOT NULL,
  `course_id` int(11) NOT NULL,
  `course_name` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`lesson_id`, `lesson_name`, `lesson_desc`, `lesson_link`, `course_id`, `course_name`) VALUES
(7, 'Giới Thiệu', 'Tổng quan về C++', '../lessonvid/First C++ Program _ Introduction To C++ _ Basics Of C++.mp4', 37, 'C++'),
(8, 'Giới Thiệu python', 'mở đầu về python', '../lessonvid/Bài 1_ Giới thiệu về Python.mp4', 41, 'PYTHON');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `stu_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `course_id`, `stu_email`) VALUES
(1, 33, 'han22@gmail.com'),
(2, 34, 'han22@gmail.com'),
(4, 37, 'han22@gmail.com'),
(5, 37, 'han22@gmail.com'),
(7, 38, 'tran123@gmail.com'),
(8, 38, 'tran123@gmail.com'),
(9, 38, 'tran123@gmail.com'),
(10, 32, 'tran123@gmail.com'),
(11, 32, 'tran123@gmail.com'),
(12, 32, 'tran123@gmail.com'),
(13, 32, 'tran123@gmail.com'),
(14, 32, 'tran123@gmail.com'),
(15, 32, 'tran123@gmail.com'),
(16, 32, 'tran123@gmail.com'),
(17, 32, 'tran123@gmail.com'),
(18, 32, 'tran123@gmail.com'),
(19, 32, 'tran123@gmail.com'),
(20, 32, 'tran123@gmail.com'),
(21, 34, 'tran123@gmail.com'),
(22, 34, 'tran123@gmail.com'),
(23, 34, 'tran123@gmail.com'),
(24, 34, 'tran123@gmail.com'),
(25, 34, 'tran123@gmail.com'),
(26, 32, 'tran123@gmail.com'),
(27, 32, 'tran123@gmail.com'),
(28, 32, 'tran123@gmail.com'),
(29, 32, 'tran123@gmail.com'),
(30, 32, 'tran123@gmail.com'),
(31, 32, 'tam@gmail.com'),
(32, 32, 'tam@gmail.com'),
(33, 41, 'tam@gmail.com'),
(34, 41, 'tam@gmail.com'),
(35, 41, 'nghia22724@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stu_id` int(11) NOT NULL,
  `stu_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `stu_email` varchar(255) COLLATE utf8_bin NOT NULL,
  `stu_pass` varchar(255) COLLATE utf8_bin NOT NULL,
  `stu_occ` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `stu_img` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_id`, `stu_name`, `stu_email`, `stu_pass`, `stu_occ`, `stu_img`) VALUES
(40, '   Han', 'han22@gmail.com', '123', '  123', '../image/stu/python.jpeg'),
(43, ' Thanh Nghia', 'nghia123.vn12@gmail.com', '1', ' ', '../image/stu/Han.PNG'),
(44, 'Hoàng Dung ', 'dung@gmail.com', '123', 'Sinh Viên', NULL),
(45, ' Thanh Nghĩa', 'nghia22724@gmail.com', '123', ' Sinh Viên', '../image/stu/ebcb9c510063d93d8072.jpg'),
(46, 'Bảo Trân', 'tran123@gmail.com', '13', 'Học sinh', NULL),
(47, 'Trung Tam', 'tam@gmail.com', '1', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`lesson_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
