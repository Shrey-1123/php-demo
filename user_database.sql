-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2020 at 11:01 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trainingproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` char(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `city` char(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`, `contact`, `city`, `address`) VALUES
('Alisha Kumari', 'Alisha@gmail.com', 'Alisha@123', '7122323235', 'Palwal', 'C/o Rajkumar Jaggi Singh Krishna Colony, Ward No.4 Palwal'),
('Anku Kumar', 'Anku@gmail.com', 'Anku@123', '7122323232', 'Nagpur', '125 plot Gayatri Nagar ,Pratap Nagar near hotel Gayatri Inn hotel ,Nagpur Maharashtra 440022'),
('Shrey Kumar', 'Shrey393@gmail.com', 'Shrey@123', '8059767734', 'Kolkata', 'First floor,BL 282 Salt lake Sector 2'),
('Soma Ghosh', 'Soma@gmail.com', 'Soma@123', '7122323230', 'Nagpur', '125 plot Gayatri Nagar ,Pratap Nagar near hotel Gayatri Inn hotel ,Nagpur Maharashtra 440022');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `contact` (`contact`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
