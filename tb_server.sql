-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2019 at 07:18 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hd`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_server`
--

CREATE TABLE `tb_server` (
  `id` int(11) NOT NULL,
  `ilo` varchar(15) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `mac` varchar(55) NOT NULL,
  `host` varchar(100) NOT NULL,
  `app` varchar(255) NOT NULL,
  `kvm` int(5) NOT NULL,
  `rak` int(5) NOT NULL,
  `norak` int(5) NOT NULL,
  `sn` varchar(10) NOT NULL,
  `type` varchar(255) NOT NULL,
  `ram` int(5) NOT NULL,
  `proci` varchar(255) NOT NULL,
  `hdd` int(5) NOT NULL,
  `nic` varchar(55) NOT NULL,
  `os` varchar(55) NOT NULL,
  `domain` varchar(55) NOT NULL,
  `av` varchar(55) NOT NULL,
  `created` datetime NOT NULL,
  `edited` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_server`
--
ALTER TABLE `tb_server`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_server`
--
ALTER TABLE `tb_server`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;