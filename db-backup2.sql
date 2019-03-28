-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 26, 2019 at 04:25 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(2, '222222', '$2y$10$c2Q239BJ.2caqT5Wbve3jOI0xzZPl2UnpuqKLAK..aadpD/zIGBQ2', '2019-03-24 23:50:31'),
(3, '9', '$2y$10$EGbI4NGHfWgIsQ4NcbdHH.tuTMO5ejBR1WJW48WY5VId56maONHN6', '2019-03-25 00:04:25'),
(4, 'ben', '$2y$10$sg4wo7286FFXv/QJcEITn.HnmafB12Hvs0QGS.TpZBH88V7Myh0ke', '2019-03-25 16:10:46'),
(5, 'ben2', '$2y$10$nQSnKUmmAcH4erYjsBRJvuzi6Txc.CxglgkDIh24dySMz32vO5x4S', '2019-03-25 16:13:34'),
(6, 'Y', '$2y$10$0Y4tnz2NOc.5aWQdHy2Lt.VzNhNYGHx4UZN4EY88.8H5iHfzTwptq', '2019-03-25 16:54:44'),
(7, '123', '$2y$10$jHGRF2PkB0uEJu0EzZD5RuD8eglCSv814d.gcZt5Yf6dkQF/68sIK', '2019-03-25 16:56:34'),
(8, 'Yikai', '$2y$10$qZXklwvoq8.RHEnlzhmPwehgl/SvyAk2SU3QTyzR4dt5QVM2J5uYy', '2019-03-26 01:50:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
