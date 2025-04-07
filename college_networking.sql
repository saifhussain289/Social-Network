-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 02, 2019 at 04:06 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `college_networking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin12345');

-- --------------------------------------------------------

--
-- Table structure for table `enter_marks`
--

CREATE TABLE IF NOT EXISTS `enter_marks` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(100) NOT NULL,
  `stream` varchar(100) NOT NULL,
  `sem` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `marks` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `enter_marks`
--

INSERT INTO `enter_marks` (`id`, `student_id`, `stream`, `sem`, `subject`, `marks`) VALUES
(1, '0', '$stream', '$sem', '$subject', '$marks'),
(2, '', '', '', 'machnical', '75'),
(3, '101', 'IT', 'SemI', 'V SAT ADMIT CARD', '75'),
(4, '', 'IT', 'SemI', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `exam_date`
--

CREATE TABLE IF NOT EXISTS `exam_date` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stream` varchar(100) NOT NULL,
  `sem` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `exam_date`
--

INSERT INTO `exam_date` (`id`, `stream`, `sem`, `date`) VALUES
(1, 'computer_science', 'SemII', '2019-02-13');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `faculty_id` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `address` varchar(256) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `faculty_id`, `image`, `name`, `last_name`, `department`, `designation`, `email`, `mobile`, `address`, `password`) VALUES
(4, 12440, 'result-2019.jpg', 'sabnam', 'khatoon', 'computer science', 'Placement', 'careertodayindia1@gmail.com', '180030026167', 'Docket No. 1, Suman Sudha Building, Above Idea Outlet, Amchy Colony, NDA Pashan Road, Bavdhan,', '12345'),
(3, 1021, 'matr2.png', 'Sartaj', 'hussain', 'MCA', 'Examination', 'vpapatna2@gmail.com', '08448446676', '216, 2nd floor,Grand Plaza, Fraser Road', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `hod_login`
--

CREATE TABLE IF NOT EXISTS `hod_login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hod_login`
--

INSERT INTO `hod_login` (`id`, `username`, `password`) VALUES
(1, 'hod', 'hod123');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `notification` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `notification`) VALUES
(8, 'AFAFASFASF');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `post` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `date_time` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `post`, `image`, `username`, `status`, `date_time`) VALUES
(6, 'Only twio day left for submit the project. please hurry up sir ji....', '12.jpeg', 'manoj kumar', 0, '2019-01-30'),
(11, 'hi hussain what you doing', '4564.jpg', 'sanjar', 0, '2019-01-30'),
(21, 'hi hussain what r y doing', 'photo.jpg', 'hussain', 0, '2019-01-30'),
(20, 'hjh', '4564.jpg', 'hussain', 0, '2019-01-30'),
(22, '', '', 'hussain', 0, '2019-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `post_selection`
--

CREATE TABLE IF NOT EXISTS `post_selection` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `condidate` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `post_selection`
--

INSERT INTO `post_selection` (`id`, `c_name`, `designation`, `condidate`) VALUES
(1, '$c_name', '$designation', '$condidate	'),
(2, 'infosis', 'developer', '5	');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(100) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `ssc` varchar(100) NOT NULL,
  `hsc` varchar(100) NOT NULL,
  `graduation` varchar(100) NOT NULL,
  `h_back` varchar(100) NOT NULL,
  `c_back` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `f_name`, `m_name`, `l_name`, `dob`, `email`, `image`, `address`, `department`, `ssc`, `hsc`, `graduation`, `h_back`, `c_back`, `mobile`, `username`, `password`) VALUES
(4, 'MD', 'Today', 'India', '2019-01-19', 'careertodayindia1@gmail.com', 'matrimony.png', 'Docket No. 1, Suman Sudha Building, Above Idea Outlet, Amchy Colony, NDA Pashan Road, Bavdhan,', 'computer science', '70%', '61%', '55%', 'faculty', 'faculty', '180030026167', 'hussain', '12345'),
(3, 'MD', 'SANJAR ', 'hussain', '2019-01-23', 'vpapatna2@gmail.com', 'matrimony.png', '216, 2nd floor,Grand Plaza, Fraser Road, Dak Bunglow, Patna-1', 'computer science', '70%', '61%', '55%', 'faculty', 'Placement officer', '08448446676', 'student', '12345'),
(5, 'MD', 'sanjar', 'hussain', '2019-01-09', 'vpapatna2@gmail.com', 'photo.jpg', '216, 2nd floor,Grand Plaza, Fraser Road\r\n, Dak Bunglow, Patna-1', 'computer science', '70%', '61%', '55%', 'Placement officer', 'Placement officer', '9955722782', 'sanjar', 'hussain123'),
(6, 'Manoj ', 'kumar', 'singh', '2019-01-18', 'vpapatna2@gmail.com', '12.jpeg', '216, 2nd floor,Grand Plaza, Fraser Road\r\n, Dak Bunglow, Patna-1', 'IT', '70%', '61%', '55%', 'Placement officer', 'Placement officer', '8448446676', 'Manoj kumar', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `staff_post`
--

CREATE TABLE IF NOT EXISTS `staff_post` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `post` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `date_time` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `staff_post`
--

INSERT INTO `staff_post` (`id`, `post`, `image`, `username`, `date_time`) VALUES
(23, 'fdgdgdf', '6.png', 'Sartaj', '2019-02-02'),
(24, 'asdadsa', '5.png', 'Sartaj', '2019-02-02'),
(25, 'hi sir what are doing...', '6.png', 'sabnam', '2019-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE IF NOT EXISTS `time_table` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `stream` varchar(100) NOT NULL,
  `sem` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`id`, `stream`, `sem`, `image`) VALUES
(1, 'IT', 'SemI', ''),
(2, 'IT', 'SemI', ''),
(3, 'IT', 'SemI', ''),
(4, '$stream', '$sem', '$image'),
(5, 'IT', 'SemII', ''),
(6, 'IT', 'SemI', ''),
(7, 'IT', 'SemI', '5.png'),
(8, 'IT', 'SemI', '6.png'),
(9, 'IT', 'SemI', '6.png'),
(10, 'IT', 'SemI', '6.png'),
(11, 'IT', 'SemI', '6.png'),
(12, 'IT', 'SemI', ''),
(13, 'IT', 'SemI', ''),
(14, 'IT', 'SemI', ''),
(15, 'IT', 'SemI', '');
