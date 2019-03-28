-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 25, 2019 at 05:26 AM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ben_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(10) UNSIGNED NOT NULL,
  `artistname` varchar(30) NOT NULL,
  `worktitle` varchar(50) NOT NULL,
  `workdate` varchar(30) DEFAULT NULL,
  `worktype` varchar(30) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `artistname`, `worktitle`, `workdate`, `worktype`, `date`) VALUES
(3, '133333', '2', '3', '4', '2019-03-24 12:02:14'),
(4, 'bgfbgfbn', 'fnfhnfh', 'nhnhnhn', 'hnhn', '2019-03-24 12:43:34'),
(5, 'bgfbgfbn', 'fnfhnfh', 'nhnhnhn', 'hnhn', '2019-03-24 12:53:46'),
(6, 'dsvsdv', 'sdvsdvds', 'vdsvds', 'vdsvdsvd', '2019-03-24 12:53:55'),
(8, 'test', 'test', 'test', 'test', '2019-03-25 05:12:02');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
