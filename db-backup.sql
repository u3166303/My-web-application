-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 26, 2019 at 04:22 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `yikai_a`
--

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(10) UNSIGNED NOT NULL,
  `make` varchar(30) NOT NULL,
  `model` varchar(50) NOT NULL,
  `color` varchar(30) DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `make`, `model`, `color`, `location`, `date`) VALUES
(2, '', 'wdcwverv', '', '', '2019-03-26 14:19:23'),
(3, '', '', '', 'ververv', '2019-03-26 14:19:24'),
(4, 'Benz', 'CLA 220', 'Red', 'Hongkong', '2019-03-26 14:27:30'),
(5, '1', '', '', '', '2019-03-26 14:27:34'),
(6, '', '', '', '2', '2019-03-26 14:27:36'),
(7, '', '2', '', '', '2019-03-26 14:27:39'),
(8, '', '', '', '3', '2019-03-26 14:27:40'),
(9, 'v df df', '', 'fbfdb', 'fvdf', '2019-03-26 14:31:32'),
(10, '', '', '', '', '2019-03-26 14:36:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
