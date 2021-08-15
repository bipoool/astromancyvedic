-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 15, 2021 at 04:37 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `AstromancyVedic`
--

-- --------------------------------------------------------

--
-- Table structure for table `Appointments`
--

CREATE TABLE `Appointments` (
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Number` bigint(15) DEFAULT NULL,
  `DateOfBooking` date NOT NULL DEFAULT current_timestamp(),
  `DateOfAppointment` date NOT NULL,
  `DateOfBirth` date NOT NULL,
  `TimeOfBirth` time NOT NULL,
  `BirthPlace` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Appointments`
--

INSERT INTO `Appointments` (`Name`, `Email`, `Number`, `DateOfBooking`, `DateOfAppointment`, `DateOfBirth`, `TimeOfBirth`, `BirthPlace`) VALUES
('vipul gupta', 'h@gasil.vom', 9818633496, '2021-08-15', '0011-11-11', '0011-11-11', '16:58:00', 'asdf'),
('vipul gupta', 'itsmevipulgupta.2011@gmail.com', 9818633496, '2021-07-03', '2021-07-25', '2021-07-15', '19:51:00', 'asdf'),
('vipul gupta', 'itsmevipulgupta@gmail.com', 9818633496, '2021-07-03', '2021-07-17', '2021-07-23', '19:56:00', 'delhi'),
('Parth', 'pathakparth068@gmail.com', 9899832450, '2021-07-03', '2021-07-22', '2021-07-23', '23:50:00', 'Noida');

-- --------------------------------------------------------

--
-- Table structure for table `Hospital`
--

CREATE TABLE `Hospital` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`Name`, `Email`, `Password`, `Age`) VALUES
('anjali gupta', 'anjali@gmail.com', 'anjaligupta', NULL),
('kajal gupta', 'kajal@gmail.com', 'kajalgupta', NULL),
('vipul gupta', 'vipul@gmail.com', 'vipul', NULL),
('vipul gupta', 'vipul@gmail.com', 'vipul', NULL),
('vipul gupta', 'vipul@gmail.com', 'vipul', NULL),
('Raman Bansal', 'raman@gmail.com', 'raman', 9),
('Raman Bansal', 'raman@gmail.com', 'raman', 9),
('vipul gupta', 'itsmevipulgupta.2011@gmail.com', '$2y$10$iogqx7fhA3XhIud.afQir.E4E/TJcO.U5C8E8CaKdRH2sojxlBuLG', NULL),
('VIPUL', 'vipul@gmail.com', 'vipul', 20),
('vipul gupta', 'itsmevipulgupta.2011@gmail.com', 'asdsadg', 56),
('vipulgupta', 'itsmevipulgupta.2011@gmail.com', 'asdsadg', 56),
('vipul gupta', 'itsmevipulgupta.2011@gmail.com', 'asdgggggggggggg', 56),
('vipul gupta', 'itsmevipulgupta.2011@gmail.com', 'asdgggggggggggg', 56),
('vipul gupta', 'itsmevipulgupta@gmail.com', 'sadg', 56),
('vipul gupta', 'itsmevipulgupta.2011@gmail.com', 'asdfsadfasfasdfasdfsdfsdf', 56),
('vipul gupta', 'itsmevipulgupta.2011@gmail.com', 'sadfgsadfasdf', 56),
('vipul gupta', 'itsmevipulgupta.2011@gmail.com', 'wsdgasdg', 56),
('vipul gupta', 'itsmevipulgupta.2011@gmail.com', 'hhhhhhhh', 56);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Appointments`
--
ALTER TABLE `Appointments`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `Hospital`
--
ALTER TABLE `Hospital`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Hospital`
--
ALTER TABLE `Hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
