-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2017 at 06:11 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `instaanswer`
--

-- --------------------------------------------------------

--
-- Table structure for table `ans_tbl`
--

CREATE TABLE `ans_tbl` (
  `ans_id` int(11) NOT NULL,
  `ans_disc` varchar(500) NOT NULL,
  `ans_img` varchar(300) DEFAULT NULL,
  `fk_que_id` int(11) NOT NULL,
  `fk_email_id` varchar(100) NOT NULL,
  `ans_date` date NOT NULL,
  `ans_like` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `que_tbl`
--

CREATE TABLE `que_tbl` (
  `que_id` int(11) NOT NULL,
  `que_title` varchar(100) NOT NULL,
  `que_disc` varchar(300) NOT NULL,
  `que_img` varchar(300) DEFAULT NULL,
  `fk_email_id` varchar(50) NOT NULL,
  `fk_sub_id` int(11) NOT NULL,
  `que_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject_tbl`
--

CREATE TABLE `subject_tbl` (
  `sub _id` int(11) NOT NULL,
  `sub_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_tbl`
--

INSERT INTO `subject_tbl` (`sub _id`, `sub_name`) VALUES
(1, ' C'),
(2, 'C++'),
(3, 'Java'),
(4, 'PHP'),
(5, 'VB.Net'),
(6, 'Angular'),
(7, 'Ionic'),
(8, 'Python');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `email_id` varchar(100) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `user_pass` varchar(10) NOT NULL,
  `user_address` varchar(100) DEFAULT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `profile_pic` varchar(200) DEFAULT NULL,
  `verify` varchar(7) NOT NULL,
  `token` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ans_tbl`
--
ALTER TABLE `ans_tbl`
  ADD PRIMARY KEY (`ans_id`);

--
-- Indexes for table `que_tbl`
--
ALTER TABLE `que_tbl`
  ADD PRIMARY KEY (`que_id`);

--
-- Indexes for table `subject_tbl`
--
ALTER TABLE `subject_tbl`
  ADD PRIMARY KEY (`sub _id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ans_tbl`
--
ALTER TABLE `ans_tbl`
  MODIFY `ans_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `que_tbl`
--
ALTER TABLE `que_tbl`
  MODIFY `que_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subject_tbl`
--
ALTER TABLE `subject_tbl`
  MODIFY `sub _id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
