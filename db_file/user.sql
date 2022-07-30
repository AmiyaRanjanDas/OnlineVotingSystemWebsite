-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2022 at 09:13 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online-voting-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `AdharNo` varchar(12) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `verified` varchar(10) NOT NULL,
  `status` int(11) NOT NULL,
  `votes` int(11) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `mobile`, `AdharNo`, `password`, `address`, `photo`, `verified`, `status`, `votes`, `role`) VALUES
(4, 'Shahebaz Khan Shabbir Khan Pathan', 9511846837, '909090878967', '123', 'Andheri East, Near Govt. College, Mumbai', 'boy.png', '1', 1, 0, 1),
(5, 'Soehl Khan Salim Khan Pathan', 9511846838, '0', '123', 'Andheri East, Near Govt. College, Pune', 'Animal-Heroes-cartoon-icon-19.png', '1', 1, 2, 2),
(6, 'Shoaib Khan Shabbir Khan Pathan', 9511846839, '0', '123', 'Andheri East, Near Govt. College, Goa', 'plant.png', '1', 1, 3, 2),
(12, 'Surya Das', 9090890098, '908789546732', '12345', 'subashbose square', 'background2022.png', '1', 1, 0, 1),
(16, 'System Admin', 9090101090, '890987656767', 'admin123', 'Mumbai,Maharastra', 'office.webp', '1', 0, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
