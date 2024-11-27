-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 21, 2024 at 02:23 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoint`
--
CREATE DATABASE IF NOT EXISTS `miniproject`;

USE `miniproject`;



--
-- Dumping data for table `appoint`
--


INSERT INTO `appoint` (`pname`, `email`, `dname`, `date`, `time`) VALUES
('nandhANA', 'nandhusuba17@gmail.com', 'keerthana', '0000-00-00', '01:32:00.0000');

-- --------------------------------------------------------

--
-- Table structure for table `remainde`
--


CREATE TABLE IF NOT EXISTS `remainde` (
  `dname` text NOT NULL,
  `ddate` date NOT NULL,
  `dtime` time(5) NOT NULL
);

--
-- Dumping data for table `remainde`
--

INSERT INTO `remainde` (`dname`, `ddate`, `dtime`) VALUES
('keerthana', '2024-03-23', '16:36:00.00000');

-- --------------------------------------------------------

--
-- Table structure for table `sigin`
--

CREATE TABLE IF NOT EXISTS `sigin` (
  `email` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL
) ;

-- --------------------------------------------------------

--
-- Table structure for table `sigup`
--

DROP TABLE IF EXISTS `sigup`;
CREATE TABLE IF NOT EXISTS `sigup` (
  `name` text NOT NULL,
  `email` varchar(15) NOT NULL,
  `conum` int NOT NULL,
  `age` int NOT NULL,
  `gender` text NOT NULL,
  `password` varchar(10) NOT NULL
) ;

--
-- Dumping data for table `sigup`
--

INSERT INTO `sigup` (`name`, `email`, `conum`, `age`, `gender`, `password`) VALUES
('G.NANDHANA', 'nandhusuba17@gm', 2147483647, 20, 'female ', '098765432'),
('dhanya', 'dhanya@gmail.co', 123452343, 19, 'female', 'dfcvgnjik'),
('selva', 'selva123@gmail.', 234587654, 20, 'female', 'zxcvbnm'),
('subha', 'subha@gmail.com', 1234567894, 20, 'female', 'zxcvb'),
('subha', 'subha@gmail.com', 1234567894, 20, 'female', 'suba1712'),
('G.NANDHANA', 'nandhusuba17@gm', 2147483647, 20, 'female', 'sxcfgb'),
('G.NANDHANA', 'nandhusuba17@gm', 2147483647, 20, 'female', 'fgvfdg'),
('G.NANDHANA', 'nandhusuba17@gm', 2147483647, 20, 'female', 'sxcfgb');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
