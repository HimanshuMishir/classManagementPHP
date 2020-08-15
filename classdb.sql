-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 15, 2020 at 07:22 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `classdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `standards`
--

CREATE TABLE `standards` (
  `t_id` int(11) NOT NULL,
  `1` varchar(11) NOT NULL,
  `2` varchar(11) NOT NULL,
  `3` varchar(11) NOT NULL,
  `4` varchar(11) NOT NULL,
  `5` varchar(11) NOT NULL,
  `6` varchar(11) NOT NULL,
  `7` varchar(11) NOT NULL,
  `8` varchar(11) NOT NULL,
  `9` varchar(11) NOT NULL,
  `10` varchar(11) NOT NULL,
  `11` varchar(11) NOT NULL,
  `12` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `standards`
--

INSERT INTO `standards` (`t_id`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`) VALUES
(5, '', '', '', '', '', '', '', '', '', '10', '11', '12');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `std` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `name`, `gender`, `email`, `phone`, `std`) VALUES
(35, 'Laali', 'Female', 'laali@mail.com', '1231231231', '12'),
(36, 'Shivam Singh', 'Male', 'shiva@mail.com', '1213211231', '12'),
(37, 'Himanshu Mishra', 'Male', 'hm12378900@gmail.com', '9506005060', '12'),
(38, 'Ashutosh Tripathi', 'Male', 'ashu@mail.com', '1231241241', '1');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `t_id` int(11) NOT NULL,
  `std` varchar(50) NOT NULL,
  `Hindi` varchar(50) NOT NULL,
  `English` varchar(50) NOT NULL,
  `Marathi` varchar(50) NOT NULL,
  `Science` varchar(50) NOT NULL,
  `Math` varchar(50) NOT NULL,
  `Social_Studies` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`t_id`, `std`, `Hindi`, `English`, `Marathi`, `Science`, `Math`, `Social_Studies`) VALUES
(5, '12', '', '', '', 'Science', 'Math', '');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `t_id` int(3) NOT NULL,
  `t_name` varchar(100) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `experience` int(11) NOT NULL,
  `std` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`t_id`, `t_name`, `gender`, `email`, `phone`, `qualification`, `experience`, `std`, `sub`) VALUES
(4, 'Julie', 'Female', 'julie@1.1', 9026043020, 'B.Tech', 100, '1,2,3,4,5,6,7,8', 'Hindi,English,Marathi'),
(5, 'Himanshu mishra', 'Male', 'hm8216414@gmail.com', 9506005060, 'B.Tech', 10, '10,11,12', 'Math,Science'),
(7, 'Himanshu Mishra', 'Male', 'hm12378900@gmail.com', 9506005060, 'B.Tech', 3, '12', 'Science'),
(8, 'Jenny', 'Female', '12321@1.c', 9955995500, 'B.Sc', 12, '12', 'Math,Science');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `standards`
--
ALTER TABLE `standards`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `t_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
