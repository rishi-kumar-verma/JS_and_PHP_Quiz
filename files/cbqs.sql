-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 01, 2023 at 03:43 AM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cbqs`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

DROP TABLE IF EXISTS `classes`;
CREATE TABLE IF NOT EXISTS `classes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `class` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `class`, `date`) VALUES
(28, 'UPTU', '2023-09-01 02:49:15');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

DROP TABLE IF EXISTS `exams`;
CREATE TABLE IF NOT EXISTS `exams` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tid` int NOT NULL,
  `name` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `class` varchar(30) NOT NULL,
  `ttime` varchar(10) NOT NULL,
  `ins` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `tid`, `name`, `subject`, `class`, `ttime`, `ins`) VALUES
(26, 4, 'Computer Class Exam', 'Computer', 'UPTU', '10', 'Please do it with cool mind!'),
(27, 0, 'Economy Class', 'Computer', 'UPTU', '10', 'testing 1'),
(28, 0, 'rishi test', 'Computer', 'UPTU', '10', 'testing');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `subject` varchar(30) NOT NULL,
  `marks` int NOT NULL,
  `question` varchar(200) NOT NULL,
  `opt1` varchar(50) NOT NULL,
  `opt2` varchar(50) NOT NULL,
  `opt3` varchar(50) NOT NULL,
  `opt4` varchar(50) NOT NULL,
  `ans` varchar(30) NOT NULL,
  `hint` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `subject`, `marks`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `ans`, `hint`) VALUES
(22, 'Computer', 1, 'What do you call a computer on a network that requests files from another computer?', ' A client', 'A host', 'A router', 'A web server', ' A client', 'Option A'),
(23, 'Computer', 1, 'Hardware devices that are not part of the main computer system and are often added later to the system.', ' Peripheral', 'Clip art', ' Highlight', 'Execute', ' Peripheral', 'Option 1');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

DROP TABLE IF EXISTS `results`;
CREATE TABLE IF NOT EXISTS `results` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tid` int NOT NULL,
  `tname` varchar(30) NOT NULL,
  `sid` varchar(30) NOT NULL,
  `marks` int NOT NULL,
  `class` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `per` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=382 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `tid`, `tname`, `sid`, `marks`, `class`, `subject`, `per`, `status`) VALUES
(379, 26, 'Computer Class Exam', 'student', 2, 'UPTU', 'Computer', '100', 'Pass'),
(380, 27, 'Economy Class', 'student', 2, 'UPTU', 'Computer', '100', 'Pass'),
(381, 28, 'rishi test', 'student', 2, 'UPTU', 'Computer', '100', 'Pass');

-- --------------------------------------------------------

--
-- Table structure for table `squestions`
--

DROP TABLE IF EXISTS `squestions`;
CREATE TABLE IF NOT EXISTS `squestions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `eid` int NOT NULL,
  `qid` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `squestions`
--

INSERT INTO `squestions` (`id`, `eid`, `qid`) VALUES
(44, 26, 22),
(45, 26, 23),
(46, 27, 22),
(47, 27, 23),
(48, 28, 22),
(49, 28, 23);

-- --------------------------------------------------------

--
-- Table structure for table `ssubject`
--

DROP TABLE IF EXISTS `ssubject`;
CREATE TABLE IF NOT EXISTS `ssubject` (
  `id` int NOT NULL AUTO_INCREMENT,
  `student` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `regno` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `regno`, `pass`, `course`) VALUES
(1, 'student', 'student', 'student', 'UPTU');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int NOT NULL AUTO_INCREMENT,
  `subject` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject`, `date`) VALUES
(10, 'Computer', '2023-09-01 02:49:28');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `regno` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `regno`, `pass`, `role`) VALUES
(3, 'admin', 'admin', 'admin', 'admin'),
(4, 'teacher', 'teacher', 'teacher', 'teacher');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
