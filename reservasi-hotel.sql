-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2022 at 08:00 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservasi-hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `country` varchar(100) NOT NULL,
  `arrival_date` varchar(100) NOT NULL,
  `departure_date` varchar(100) NOT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `facility` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `card_number` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `nama`, `email`, `phone`, `country`, `arrival_date`, `departure_date`, `adults`, `children`, `facility`, `location`, `payment_type`, `card_number`, `amount`, `comments`) VALUES
(1, 'Bayu Akbar Saputro', 'bputra22@gmail.com', '081287750868', 'Indonesia', '16/08/2022', '18/08/2022', 3, 0, 'Single Room', 'Hotel Avanzel', 'Dana', '123123123123', 100000000, ''),
(3, 'Bayu Akbar Saputro', 'rumahcoding@gmail.com', '081287750868', 'Armenia', '01/09/2022', '06/09/2022', 3, 0, 'Double Room', 'Hotel Avanzel', 'Debit Card', '123123123123', 10000000, ''),
(4, 'Bayu Akbar Saputro', 'bputra22@gmail.com', '081287750868', 'Aruba', '08/09/2022', '30/08/2022', 2, 2, 'Swiming Pool', 'Hotel Ciputra', 'Master Card', '123123123123123123123', 100000000, ''),
(5, 'Bayu Akbar Saputro', 'rumahcoding@gmail.com', '', 'Algeria', '08/09/2022', '05/09/2022', 3, 3, 'Deluxe Room', '', '', '', 0, ''),
(6, 'Bayu Akbar Saputro', 'bputra22@gmail.com', '081287750868', 'Australia', '09/09/2022', '17/08/2022', 4, 1, 'Ballroom', 'Hotel Avanzel', 'Debit Card', '123123123123123123123', 100000000, ''),
(7, 'Bayu Akbar Saputro', 'rumahcoding@gmail.com', '', '', '', '', 0, 3, '', '', '', '', 0, ''),
(8, '', '', '', '', '', '', 0, 0, '', '', '', '', 0, ''),
(9, '', '', '', '', '', '', 0, 0, '', '', '', '', 0, ''),
(10, '', '', '', '', '', '', 0, 0, '', '', '', '', 0, ''),
(11, '', '', '', '', '', '', 0, 0, '', '', '', '', 0, ''),
(12, 'Bayu Akbar Saputro', 'rumahcoding@gmail.com', '', '', '25/08/2022', '', 0, 0, '', '', '', '', 0, ''),
(13, 'Rumah Coding', 'rumahcoding@gmail.id', '', '', '', '', 0, 0, '', '', '', '', 0, ''),
(14, '', '', '', '', '', '', 0, 0, '', '', '', '', 0, ''),
(15, '', '', '', '', '', '', 0, 0, '', '', '', '', 0, ''),
(16, '', '', '', '', '', '', 0, 0, '', '', '', '', 0, ''),
(17, '', '', '', '', '', '', 0, 0, '', '', '', '', 0, ''),
(18, '', '', '', '', '', '', 0, 0, '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'oke', 'admin@gmail.com', 'password'),
(11, 'loram', 'loram@ipsum.com', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
