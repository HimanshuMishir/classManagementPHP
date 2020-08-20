-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 20, 2020 at 04:53 AM
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
  `s1` varchar(2) NOT NULL,
  `s2` varchar(2) NOT NULL,
  `s3` varchar(2) NOT NULL,
  `s4` varchar(2) NOT NULL,
  `s5` varchar(2) NOT NULL,
  `s6` varchar(2) NOT NULL,
  `s7` varchar(2) NOT NULL,
  `s8` varchar(2) NOT NULL,
  `s9` varchar(2) NOT NULL,
  `s10` varchar(2) NOT NULL,
  `s11` varchar(2) NOT NULL,
  `s12` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `standards`
--

INSERT INTO `standards` (`t_id`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `s9`, `s10`, `s11`, `s12`) VALUES
(11, '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'),
(12, '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'),
(21, '', '', '3', '4', '5', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `s_id` int(11) NOT NULL,
  `roll` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `std` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`s_id`, `roll`, `name`, `gender`, `email`, `phone`, `std`) VALUES
(1, 1, 'Aarav Mishra', 'Male', 'aarav@mail.com', 0, '1'),
(4, 2, 'A B', 'Male', '12321@1.c', 9955995500, '12'),
(6, 22, 'Mohit', 'Male', 'moh@mail.com', 9898983749, '8'),
(7, 10, 'Shreya', 'Female', 'sh@mail.com', 8398398494, '10'),
(8, 9, 'Manavi MIshra', 'Female', 'manavi@mail.com', 8282832984, '12'),
(9, 7, 'Anmol Singh', 'Male', 'anmol@mail.com', 7898372383, '3'),
(10, 4, 'Annanya Pandey', 'Female', 'anni@mail.com', 8487293829, '11');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `t_id` int(11) DEFAULT NULL,
  `s_id` int(11) DEFAULT NULL,
  `sub1` varchar(20) NOT NULL,
  `sub2` varchar(20) NOT NULL,
  `sub3` varchar(20) NOT NULL,
  `sub4` varchar(20) NOT NULL,
  `sub5` varchar(20) NOT NULL,
  `sub6` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`t_id`, `s_id`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`) VALUES
(11, NULL, 'Hindi', 'English', 'Marathi', 'Math', 'Science', 'Social Studies'),
(NULL, 1, 'Hindi', 'English', 'Marathi', 'Math', 'Science', 'Social Studies'),
(12, NULL, 'Hindi', 'English', 'Marathi', 'Math', 'Science', 'Social Studies'),
(21, NULL, '', '', 'Marathi', 'Math', '', ''),
(NULL, 6, 'Hindi', 'English', '', 'Math', 'Science', ''),
(NULL, 4, '', '', '', '', 'Science', 'Social Studies'),
(NULL, 7, 'Hindi', 'English', 'Marathi', 'Math', '', ''),
(NULL, 8, 'Hindi', 'English', 'Marathi', 'Math', 'Science', ''),
(NULL, 10, 'Hindi', 'English', '', 'Math', 'Science', 'Social Studies'),
(NULL, 9, '', '', 'Marathi', 'Math', 'Science', '');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `experience` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`t_id`, `t_name`, `gender`, `email`, `phone`, `qualification`, `experience`) VALUES
(5, 'Rajesh Kumar', 'Male', 'rajesh@mail.com', 9323231212, 'B.Tech', 8),
(11, 'Neha Singh', 'Female', 'neha@mail.com', 1213211231, 'B.com', 5),
(12, 'Ashutosh', 'Male', 'ashu@mail.com', 9323231212, 'B.com', 5),
(21, 'Akhand', 'Male', 'shiva@mail.com', 8373283231, 'B.A.', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `standards`
--
ALTER TABLE `standards`
  ADD UNIQUE KEY `t_id` (`t_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD UNIQUE KEY `t_id` (`t_id`),
  ADD UNIQUE KEY `s_id` (`s_id`);

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
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `standards`
--
ALTER TABLE `standards`
  ADD CONSTRAINT `standards_ibfk_1` FOREIGN KEY (`t_id`) REFERENCES `teachers` (`t_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_ibfk_1` FOREIGN KEY (`t_id`) REFERENCES `teachers` (`t_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subjects_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `students` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
