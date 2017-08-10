-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2017 at 04:00 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elective`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `DEPT_ID` varchar(3) NOT NULL DEFAULT '',
  `DEPT_NAME` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`DEPT_ID`),
  UNIQUE KEY `DEPT_NAME` (`DEPT_NAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`DEPT_ID`, `DEPT_NAME`) VALUES
('CS', 'COMPUTER SCIENCE AND ENGINEERING'),
('EC ', 'ELECTRONICS AND COMMUNICATION'),
('IT', 'INFORMATION TECHNOLOGY');

-- --------------------------------------------------------

--
-- Table structure for table `reg_students`
--

CREATE TABLE IF NOT EXISTS `reg_students` (
  `SNO` int(2) NOT NULL AUTO_INCREMENT,
  `ENROLL_ID` int(11) NOT NULL,
  `Name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Department` varchar(50) NOT NULL,
  `F_Priority` varchar(7) NOT NULL,
  `S_Priority` varchar(7) NOT NULL,
  `T_Priority` varchar(7) NOT NULL,
  `CGPA` double NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ENROLL_ID`),
  UNIQUE KEY `SNO` (`SNO`),
  KEY `Department` (`Department`),
  KEY `F_Priority` (`F_Priority`,`S_Priority`,`T_Priority`),
  KEY `S_Priority` (`S_Priority`),
  KEY `T_Priority` (`T_Priority`),
  KEY `ENROLL_ID` (`ENROLL_ID`),
  KEY `ENROLL_ID_2` (`ENROLL_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=7 ;

--
-- Dumping data for table `reg_students`
--

INSERT INTO `reg_students` (`SNO`, `ENROLL_ID`, `Name`, `Department`, `F_Priority`, `S_Priority`, `T_Priority`, `CGPA`, `status`) VALUES
(3, 2096, 'PRITESH BHATE', 'INFORMATION TECHNOLOGY', 'ITU302', 'ITU301', 'CSU301', 7.91, 1),
(2, 3096, 'ADITYA KUKANKAR', 'ELECTRONICS AND COMMUNICATION', 'ECU301', 'CSU302', 'ECU301', 8.29, 1),
(1, 5026, 'Pratik Sahu', 'COMPUTER SCIENCE AND ENGINEERING', 'CSU301', 'CSU302', 'ECU302', 8.1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `ENROLL_ID` int(11) NOT NULL,
  `SUBJECT_ID` varchar(7) NOT NULL,
  KEY `ENROLL_ID` (`ENROLL_ID`,`SUBJECT_ID`),
  KEY `SUBJECT_ID` (`SUBJECT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`ENROLL_ID`, `SUBJECT_ID`) VALUES
(2096, 'ITU302'),
(3096, 'ECU301'),
(5026, 'CSU301');

-- --------------------------------------------------------

--
-- Table structure for table `sorted_students_1`
--

CREATE TABLE IF NOT EXISTS `sorted_students_1` (
  `SNO` int(2) NOT NULL DEFAULT '0',
  `ENROLL_ID` int(11) NOT NULL,
  `Name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Department` varchar(50) NOT NULL,
  `F_Priority` varchar(7) NOT NULL,
  `S_Priority` varchar(7) NOT NULL,
  `T_Priority` varchar(7) NOT NULL,
  `CGPA` double NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sorted_students_1`
--

INSERT INTO `sorted_students_1` (`SNO`, `ENROLL_ID`, `Name`, `Department`, `F_Priority`, `S_Priority`, `T_Priority`, `CGPA`, `status`) VALUES
(2, 3096, 'ADITYA KUKANKAR', 'ELECTRONICS AND COMMUNICATION', 'ECU301', 'CSU302', 'ECU301', 8.29, 0),
(1, 5026, 'Pratik Sahu', 'COMPUTER SCIENCE AND ENGINEERING', 'CSU301', 'CSU302', 'ECU302', 8.1, 0),
(3, 2096, 'PRITESH BHATE', 'INFORMATION TECHNOLOGY', 'ITU302', 'ITU301', 'CSU301', 7.91, 0);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `TEACHER_ID` varchar(3) NOT NULL DEFAULT '',
  `Teacher_Name` varchar(20) NOT NULL,
  `DEPT_ID` varchar(3) NOT NULL,
  `SUBJECT_ID` varchar(7) NOT NULL,
  PRIMARY KEY (`TEACHER_ID`),
  UNIQUE KEY `TEACHER_ID` (`TEACHER_ID`),
  KEY `DEPT_ID` (`DEPT_ID`,`SUBJECT_ID`),
  KEY `SUBJECT_ID` (`SUBJECT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`TEACHER_ID`, `Teacher_Name`, `DEPT_ID`, `SUBJECT_ID`) VALUES
('CS1', 'Kamalkant Marathe', 'CS', 'CSU301'),
('CS2', 'Jasmine Paul', 'CS', 'CSU302'),
('EC1', 'Manishi Singh', 'EC ', 'ECU301'),
('EC2', 'Aasawari Deodhar', 'EC ', 'ECU302'),
('IT1', 'Christopher Kundu', 'IT', 'ITU301'),
('IT2', 'Babush Baltiwala', 'IT', 'ITU302');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `SR_No` int(2) NOT NULL AUTO_INCREMENT,
  `SUBJECT_ID` varchar(7) NOT NULL DEFAULT '',
  `SUBJECT_NAME` varchar(50) NOT NULL,
  `DEPT_ID` varchar(3) NOT NULL,
  `SUBJECT_INTAKE` int(3) NOT NULL,
  PRIMARY KEY (`SUBJECT_ID`),
  UNIQUE KEY `SR_No` (`SR_No`),
  KEY `DEPT_ID` (`DEPT_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`SR_No`, `SUBJECT_ID`, `SUBJECT_NAME`, `DEPT_ID`, `SUBJECT_INTAKE`) VALUES
(1, 'CSU301', 'MOBILE TECHNOLOGY', 'CS', 3),
(2, 'CSU302', 'FOUNDATION OF BUSINESS INTELLIGENCE', 'CS', 4),
(3, 'ECU301', 'TELECOMMUNICATION ENGINEERING', 'EC ', 4),
(4, 'ECU302', 'INTRODUCTION TO INSTRUMENTAL SYSTEM', 'EC ', 5),
(5, 'ITU301', 'INTERNET TECHNOLOGIES', 'IT', 6),
(6, 'ITU302', 'INFORMATION SYSTEM', 'IT', 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reg_students`
--
ALTER TABLE `reg_students`
  ADD CONSTRAINT `FK_DEPTNAME` FOREIGN KEY (`Department`) REFERENCES `department` (`DEPT_NAME`),
  ADD CONSTRAINT `FK_SID` FOREIGN KEY (`F_Priority`) REFERENCES `subject` (`SUBJECT_ID`),
  ADD CONSTRAINT `FK_SID2` FOREIGN KEY (`S_Priority`) REFERENCES `subject` (`SUBJECT_ID`),
  ADD CONSTRAINT `FK_SID3` FOREIGN KEY (`T_Priority`) REFERENCES `subject` (`SUBJECT_ID`);

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `FK_ENROLL_ID` FOREIGN KEY (`ENROLL_ID`) REFERENCES `reg_students` (`ENROLL_ID`),
  ADD CONSTRAINT `FK_SUBJECT` FOREIGN KEY (`SUBJECT_ID`) REFERENCES `subject` (`SUBJECT_ID`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `fk_foreign_key_DEPT_ID` FOREIGN KEY (`DEPT_ID`) REFERENCES `department` (`DEPT_ID`),
  ADD CONSTRAINT `fk_foreign_key_SUBJECT_ID` FOREIGN KEY (`SUBJECT_ID`) REFERENCES `subject` (`SUBJECT_ID`);

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `fk_DEPT_ID` FOREIGN KEY (`DEPT_ID`) REFERENCES `department` (`DEPT_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
