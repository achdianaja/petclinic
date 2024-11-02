-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2024 at 12:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petclinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors_230012`
--

CREATE TABLE `doctors_230012` (
  `doctor_id_230012` int(11) NOT NULL,
  `doctor_name_230012` varchar(60) NOT NULL,
  `doctor_gender_230012` varchar(10) NOT NULL,
  `doctor_address_230012` varchar(100) NOT NULL,
  `doctor_phone_230012` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors_230012`
--

INSERT INTO `doctors_230012` (`doctor_id_230012`, `doctor_name_230012`, `doctor_gender_230012`, `doctor_address_230012`, `doctor_phone_230012`) VALUES
(1, 'Hadi ff', 'Female', 'jalan kontol', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `medicals_230012`
--

CREATE TABLE `medicals_230012` (
  `mr_id_230012` int(11) NOT NULL,
  `mr_date_230012` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pet_id_230012` int(11) NOT NULL,
  `doctor_id_230012` int(11) NOT NULL,
  `symptom_230012` varchar(255) NOT NULL,
  `diagnose_230012` varchar(255) NOT NULL,
  `treatment_230012` varchar(255) NOT NULL,
  `cost_230012` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicals_230012`
--

INSERT INTO `medicals_230012` (`mr_id_230012`, `mr_date_230012`, `pet_id_230012`, `doctor_id_230012`, `symptom_230012`, `diagnose_230012`, `treatment_230012`, `cost_230012`) VALUES
(1, '2024-10-01 11:46:56', 1, 1, 'Sakit kanyut', 'Salep kanyut', 'di oles', 24000000);

-- --------------------------------------------------------

--
-- Table structure for table `pets_230012`
--

CREATE TABLE `pets_230012` (
  `pet_id_230012` int(11) NOT NULL,
  `pet_name_230012` varchar(30) NOT NULL,
  `pet_type_230012` varchar(30) NOT NULL,
  `pet_gender_230012` varchar(6) NOT NULL,
  `pet_age_230012` int(11) NOT NULL,
  `pet_owner_230012` varchar(50) NOT NULL,
  `pet_address_230012` varchar(100) NOT NULL,
  `pet_phone_230012` int(15) NOT NULL,
  `pet_photo_230012` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pets_230012`
--

INSERT INTO `pets_230012` (`pet_id_230012`, `pet_name_230012`, `pet_type_230012`, `pet_gender_230012`, `pet_age_230012`, `pet_owner_230012`, `pet_address_230012`, `pet_phone_230012`, `pet_photo_230012`) VALUES
(1, 'Agus Cih123', 'Dog', 'Male', 100, 'Gus', 'jalan sana sini', 99121323, 'default.png'),
(3, 'Agus Cihua hua', 'Kontol', 'Female', 123123, '12312', '3213123', 123123, 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `users_230012`
--

CREATE TABLE `users_230012` (
  `user_id_230012` int(11) NOT NULL,
  `username_230012` varchar(100) NOT NULL,
  `password_230012` varchar(255) NOT NULL,
  `user_type_230012` varchar(10) NOT NULL,
  `fullname_230012` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_230012`
--

INSERT INTO `users_230012` (`user_id_230012`, `username_230012`, `password_230012`, `user_type_230012`, `fullname_230012`) VALUES
(1, 'ganteng', '$2y$10$ROPZeoC5Umh61hx5MBH6duV/ZZIAvIjMq7imag36r9JWwllEyvylO', 'Manager', 'achdian rizki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors_230012`
--
ALTER TABLE `doctors_230012`
  ADD PRIMARY KEY (`doctor_id_230012`);

--
-- Indexes for table `medicals_230012`
--
ALTER TABLE `medicals_230012`
  ADD PRIMARY KEY (`mr_id_230012`),
  ADD KEY `pet_id_0012` (`pet_id_230012`,`doctor_id_230012`),
  ADD KEY `doctor_id_0012` (`doctor_id_230012`);

--
-- Indexes for table `pets_230012`
--
ALTER TABLE `pets_230012`
  ADD PRIMARY KEY (`pet_id_230012`);

--
-- Indexes for table `users_230012`
--
ALTER TABLE `users_230012`
  ADD PRIMARY KEY (`user_id_230012`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors_230012`
--
ALTER TABLE `doctors_230012`
  MODIFY `doctor_id_230012` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medicals_230012`
--
ALTER TABLE `medicals_230012`
  MODIFY `mr_id_230012` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pets_230012`
--
ALTER TABLE `pets_230012`
  MODIFY `pet_id_230012` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users_230012`
--
ALTER TABLE `users_230012`
  MODIFY `user_id_230012` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `medicals_230012`
--
ALTER TABLE `medicals_230012`
  ADD CONSTRAINT `medicals_230012_ibfk_1` FOREIGN KEY (`pet_id_230012`) REFERENCES `pets_230012` (`pet_id_230012`),
  ADD CONSTRAINT `medicals_230012_ibfk_2` FOREIGN KEY (`doctor_id_230012`) REFERENCES `doctors_230012` (`doctor_id_230012`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
