-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2023 at 06:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salon_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointment_Id` int(11) NOT NULL,
  `customer_Id` int(11) DEFAULT NULL,
  `service_Id` int(11) DEFAULT NULL,
  `staff_Id` int(11) DEFAULT NULL,
  `appointment_Date` date DEFAULT NULL,
  `appointment_Time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `services` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `client` varchar(50) NOT NULL,
  `payment` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `services`, `date`, `time`, `client`, `payment`) VALUES
(1, 'Manicure', '2023-09-24', '09:10:00', 'Maria Anders', 100.00),
(2, 'Bridal Makeup', '2023-11-24', '08:00:00', 'Aya Perez', 999.99),
(3, 'Hair Coloring', '2023-12-10', '02:00:00', 'Roland Mendek', 150.00),
(4, 'Massages', '2023-09-27', '08:00:00', 'Helen Bennett', 300.00),
(5, 'Eyelash Extensions', '2023-11-27', '09:00:00', 'Maria Anders', 100.00);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_Id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_Id` int(11) NOT NULL,
  `service_Name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_Id`, `service_Name`, `description`, `price`) VALUES
(1, 'Hair', 'Haircut, Styling, Hair Coloring, Highlights/Lowlights, Hair Extension Hair Traetment', 50.00),
(2, 'Nail', 'Manicure, Pedicure, Nail Art, Gel Nails', 100.00),
(3, 'Spa and Body Treatments', 'Massages (e.g., Swedish, Deep Tissue, Hot Stone), Body Wraps, Body Scrubs', 1000.00),
(4, 'Skincare', 'Facials, Skin Cleansing, Chemical Peels, Microdermabrasion, Laser Hair Removal, Waxing', 500.00),
(5, 'Makeup Services', 'Bridal Makeup, Special Occasion Makeup,Everyday Makeup Application,Makeup Consultation', 15000.00),
(6, 'Other Services', 'Eyebrow Shaping, Eyelash Extensions, Beard Trimming/Shaping (for men), Scalp Treatments, Ear Piercing', 100.00);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_ID` int(11) NOT NULL,
  `user_Name` varchar(50) NOT NULL,
  `user_Type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_ID`, `user_Name`, `user_Type`) VALUES
(1, 'owner', 'Admin'),
(2, 'may', 'staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointment_Id`),
  ADD KEY `customer_Id` (`customer_Id`),
  ADD KEY `service_Id` (`service_Id`),
  ADD KEY `staff_Id` (`staff_Id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_Id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_Id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointment_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`customer_Id`) REFERENCES `customers` (`customer_Id`),
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`service_Id`) REFERENCES `services` (`service_Id`),
  ADD CONSTRAINT `appointments_ibfk_3` FOREIGN KEY (`staff_Id`) REFERENCES `staff` (`staff_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
