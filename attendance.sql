-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2016 at 06:09 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `attendance`
--
CREATE DATABASE IF NOT EXISTS `attendance` DEFAULT CHARACTER SET swe7 COLLATE swe7_swedish_ci;
USE `attendance`;

-- --------------------------------------------------------

--
-- Table structure for table `aclass10`
--

CREATE TABLE IF NOT EXISTS `aclass10` (
  `id` int(6) unsigned NOT NULL,
  `RollNo` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `attendance` varchar(30) NOT NULL,
  `day` varchar(5) DEFAULT NULL,
  `month` varchar(5) DEFAULT NULL,
  `year` varchar(5) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=swe7;

-- --------------------------------------------------------

--
-- Table structure for table `aclass12`
--

CREATE TABLE IF NOT EXISTS `aclass12` (
  `id` int(6) unsigned NOT NULL,
  `RollNo` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `attendance` varchar(30) NOT NULL,
  `day` varchar(5) DEFAULT NULL,
  `month` varchar(5) DEFAULT NULL,
  `year` varchar(5) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=swe7;

-- --------------------------------------------------------

--
-- Table structure for table `class10`
--

CREATE TABLE IF NOT EXISTS `class10` (
  `id` int(6) unsigned NOT NULL,
  `RollNo` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=swe7;

-- --------------------------------------------------------

--
-- Table structure for table `class12`
--

CREATE TABLE IF NOT EXISTS `class12` (
  `id` int(6) unsigned NOT NULL,
  `RollNo` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=swe7;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=swe7;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(6) unsigned NOT NULL,
  `text` varchar(1500) NOT NULL,
  `attendance` varchar(30) DEFAULT NULL,
  `day` varchar(2) DEFAULT NULL,
  `month` varchar(15) DEFAULT NULL,
  `year` varchar(5) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=swe7;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aclass10`
--
ALTER TABLE `aclass10`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aclass12`
--
ALTER TABLE `aclass12`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class10`
--
ALTER TABLE `class10`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class12`
--
ALTER TABLE `class12`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aclass10`
--
ALTER TABLE `aclass10`
  MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `aclass12`
--
ALTER TABLE `aclass12`
  MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `class10`
--
ALTER TABLE `class10`
  MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `class12`
--
ALTER TABLE `class12`
  MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
