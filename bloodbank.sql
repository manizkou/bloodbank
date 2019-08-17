-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2019 at 02:17 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `Id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`Id`, `name`, `user`, `password`, `email`) VALUES
(1, 'bloodbankbtl', 'admin', 'bloodbankbtl', 'bloodbankbtl@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bloodgroup`
--

CREATE TABLE `tbl_bloodgroup` (
  `bid` int(11) NOT NULL,
  `bloodgroupname` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bloodgroup`
--

INSERT INTO `tbl_bloodgroup` (`bid`, `bloodgroupname`) VALUES
(1, 'A+'),
(2, 'A-'),
(3, 'B+'),
(4, 'B-'),
(5, 'O+'),
(6, 'O-'),
(7, 'AB+'),
(8, 'AB-'),
(9, 'A1+'),
(10, 'A1-'),
(11, 'A1B+'),
(12, 'A1B-'),
(13, 'A2+'),
(14, 'A2-'),
(15, 'A2B+'),
(16, 'A2B-');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donarreg`
--

CREATE TABLE `tbl_donarreg` (
  `donorid` int(11) NOT NULL,
  `blood_id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `bloodgroup` varchar(256) NOT NULL,
  `contact` bigint(100) NOT NULL,
  `landlinecontact` char(100) NOT NULL,
  `city` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `availability` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_donarreg`
--

INSERT INTO `tbl_donarreg` (`donorid`, `blood_id`, `name`, `bloodgroup`, `contact`, `landlinecontact`, `city`, `address`, `email`, `availability`, `image`) VALUES
(3, 0, 'Manish Rana', 'O+', 9847451077, '071540341', 'Butwal', 'Province 5 ,Lumbini\r\nRupandehi,Butwal', 'manizkou@gmail.com', 'Available', 'DSC_4075.jpg'),
(4, 0, 'Dhirendra Thapa', 'B+', 9817447999, '071540540', 'Butwal', 'Province 5 ,Lumbini\r\nRupandehi,Butwal', 'drainthapa@gmail.com', 'Available', 'IMG_5557.jpg'),
(5, 0, 'Monica Rai', 'B+', 9867397623, '071545626', 'Butwal', 'Province 5 ,Lumbini Rupandehi,Butwal', 'monicarai1323@gmail.com', 'Available', 'MONIKA DD.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_bloodgroup`
--
ALTER TABLE `tbl_bloodgroup`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `tbl_donarreg`
--
ALTER TABLE `tbl_donarreg`
  ADD PRIMARY KEY (`donorid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_bloodgroup`
--
ALTER TABLE `tbl_bloodgroup`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_donarreg`
--
ALTER TABLE `tbl_donarreg`
  MODIFY `donorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
