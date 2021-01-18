-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 03:28 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(8) NOT NULL,
  `role` varchar(7) NOT NULL,
  `profile` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `role`, `profile`) VALUES
(1, 'Aisyah Nasuha', 'aisyah@gmail.com', '12345', 'admin', 'nasuha.png');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `lecturername` varchar(40) NOT NULL,
  `lectureremail` varchar(25) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `groupclass` varchar(2) NOT NULL,
  `studentname` varchar(40) NOT NULL,
  `studentphone` varchar(12) NOT NULL,
  `studentemail` varchar(25) NOT NULL,
  `date` varchar(15) NOT NULL,
  `time` varchar(30) NOT NULL,
  `reason` varchar(200) NOT NULL,
  `platform` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `lecturername`, `lectureremail`, `subject`, `groupclass`, `studentname`, `studentphone`, `studentemail`, `date`, `time`, `reason`, `platform`, `status`) VALUES
(1, 'Fattah Bin Amin', 'fattah@gmail.com', 'MTD3063 (Database Driven Web Programming)', 'A', 'Siti Nurhaliza Binti Tajudin', '0193655666', 'siti@gmail.com', '2021-01-07', '12:30', 'Consultation', 'Google Meet', '1'),
(2, 'Siti Nordiana Binti Ali', 'diana@gmail.com', 'MME3022 (Integrated Entrepreneurship)', 'C', 'Muhammad Nadhir Bin Azhar', '0174325677', 'nadhir@gmail.com', '2021-01-07', '12:30', 'Consultation', 'Google Meet', '1'),
(4, 'Fattah Bin Amin', 'fattah@gmail.com', 'MTD3063 (Database Driven Web Programming)', 'C', 'Muhammad Nadhir Bin Azhar', '0174325677', 'nadhir@gmail.com', '2021-01-07', '12:30', 'COnsultation', 'Google Meet', '0');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(25) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `subject`, `message`) VALUES
(5, 'Siti Sarah', 'sarah@gmail.com', 'Cannot login', 'Help I cant login to my account');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(8) NOT NULL,
  `profile` varchar(25) NOT NULL,
  `subject1` varchar(60) NOT NULL,
  `subject2` varchar(60) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`id`, `name`, `email`, `password`, `profile`, `subject1`, `subject2`, `phone`, `role`) VALUES
(1, 'Fattah Bin Amin', 'fattah@gmail.com', '12345', 'fattahamin.jpg', 'MTD-3063 (Database Driven Web Programming)', 'MTS-3023 (Data Structure)', '0123456789', 'lecturer'),
(2, 'Siti Nordiana Binti Ali', 'diana@gmail.com', '12345', 'diana.jpg', 'MME3022 (Integrated Entrepreneurship)', 'MCU3033 (Robotic Technology)', '0123456992', 'lecturer');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `matric` varchar(12) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(8) NOT NULL,
  `profile` varchar(25) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `matric`, `email`, `password`, `profile`, `phone`, `role`) VALUES
(1, 'Nur Neelofa Binti Karim', 'D20181082111', 'neelofa@gmail.com', '12345', 'neelofa.jpg', '0143284884', 'student'),
(2, 'Muhammad Nadhir Bin Azhar', 'D20191083212', 'nadhir@gmail.com', '12345', 'nadhir.jpg', '0174325677', 'student'),
(3, 'Siti Nurhaliza Binti Tajudin', 'D20181084555', 'siti@gmail.com', '12345', 'siti.jpg', '0193655666', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
