-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2023 at 09:23 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_credentials`
--

CREATE TABLE `admin_credentials` (
  `id` int(6) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_credentials`
--

INSERT INTO `admin_credentials` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_credentials`
--

CREATE TABLE `user_credentials` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `psw` varchar(50) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_credentials`
--

INSERT INTO `user_credentials` (`id`, `firstname`, `lastname`, `email`, `psw`, `reg_date`) VALUES
(1, 'shahed', 'kishly', 'shahed312004@gmail.com', 'S', '2023-04-13 18:12:31'),
(2, 'shahed', 'kishly', 'shahed312004@gmail.com', 'S', '2023-04-16 14:00:21'),
(3, 'shahed', 'kishly', 'shahed312004@gmail.com', 'SDDDD', '2023-04-16 18:13:37');

-- --------------------------------------------------------

--
-- Table structure for table `user_cv`
--

CREATE TABLE `user_cv` (
  `id` int(6) NOT NULL,
  `image` longblob NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `phone_number` int(8) NOT NULL,
  `address` varchar(50) NOT NULL,
  `P_Code` int(10) NOT NULL,
  `City_input` varchar(50) NOT NULL,
  `DateOB` date NOT NULL,
  `PlaceOB` varchar(50) NOT NULL,
  `License` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `civil_status` varchar(50) NOT NULL,
  `linkin` varchar(250) NOT NULL,
  `website` varchar(250) NOT NULL,
  `education` varchar(50) NOT NULL,
  `school` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `Edu_start` varchar(50) NOT NULL,
  `Edu_end` varchar(50) NOT NULL,
  `Description` varchar(1500) NOT NULL,
  `position` varchar(50) NOT NULL,
  `employer` varchar(50) NOT NULL,
  `emp_city` varchar(50) NOT NULL,
  `emp_start` varchar(50) NOT NULL,
  `emp_end` varchar(50) NOT NULL,
  `emp_Description` varchar(50) NOT NULL,
  `skill1` varchar(50) NOT NULL,
  `skill1_range` int(200) NOT NULL,
  `skill2` varchar(50) NOT NULL,
  `skill2_range` int(200) NOT NULL,
  `skill3` varchar(50) NOT NULL,
  `skill3_range` int(200) NOT NULL,
  `lang1` varchar(50) NOT NULL,
  `lang1_range` int(200) NOT NULL,
  `lang2` varchar(50) NOT NULL,
  `lang2_range` int(200) NOT NULL,
  `lang3` varchar(50) NOT NULL,
  `lang3_range` int(200) NOT NULL,
  `hobby1` varchar(50) NOT NULL,
  `hobby2` varchar(50) NOT NULL,
  `hobby3` varchar(50) NOT NULL,
  `Profile_Description` varchar(500) NOT NULL,
  `Internships_position` varchar(50) NOT NULL,
  `Internships_employer` varchar(50) NOT NULL,
  `Internships_city` varchar(50) NOT NULL,
  `Internships_Edu_start` varchar(50) NOT NULL,
  `Internships_Edu_end` varchar(50) NOT NULL,
  `Internships_Description` varchar(500) NOT NULL,
  `extra_position` varchar(50) NOT NULL,
  `extra_employer` varchar(50) NOT NULL,
  `extra_city` varchar(50) NOT NULL,
  `extra_Edu_start` varchar(50) NOT NULL,
  `extra_Edu_end` varchar(50) NOT NULL,
  `extra_Description` varchar(500) NOT NULL,
  `AchvDescription` varchar(500) NOT NULL,
  `Certificate_position` varchar(50) NOT NULL,
  `Certificate_end` varchar(50) NOT NULL,
  `Certificate_Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_cv`
--

INSERT INTO `user_cv` (`id`, `image`, `First_Name`, `Last_Name`, `Email`, `phone_number`, `address`, `P_Code`, `City_input`, `DateOB`, `PlaceOB`, `License`, `gender`, `nationality`, `civil_status`, `linkin`, `website`, `education`, `school`, `city`, `Edu_start`, `Edu_end`, `Description`, `position`, `employer`, `emp_city`, `emp_start`, `emp_end`, `emp_Description`, `skill1`, `skill1_range`, `skill2`, `skill2_range`, `skill3`, `skill3_range`, `lang1`, `lang1_range`, `lang2`, `lang2_range`, `lang3`, `lang3_range`, `hobby1`, `hobby2`, `hobby3`, `Profile_Description`, `Internships_position`, `Internships_employer`, `Internships_city`, `Internships_Edu_start`, `Internships_Edu_end`, `Internships_Description`, `extra_position`, `extra_employer`, `extra_city`, `extra_Edu_start`, `extra_Edu_end`, `extra_Description`, `AchvDescription`, `Certificate_position`, `Certificate_end`, `Certificate_Description`) VALUES
(225, '', 'shahed', 'kishly', 'shahed312004@gmail.com', 78905441, 'beirut', 0, 'lebanon', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', 1, '', 1, '', 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `user_cv` (`id`, `image`, `First_Name`, `Last_Name`, `Email`, `phone_number`, `address`, `P_Code`, `City_input`, `DateOB`, `PlaceOB`, `License`, `gender`, `nationality`, `civil_status`, `linkin`, `website`, `education`, `school`, `city`, `Edu_start`, `Edu_end`, `Description`, `position`, `employer`, `emp_city`, `emp_start`, `emp_end`, `emp_Description`, `skill1`, `skill1_range`, `skill2`, `skill2_range`, `skill3`, `skill3_range`, `lang1`, `lang1_range`, `lang2`, `lang2_range`, `lang3`, `lang3_range`, `hobby1`, `hobby2`, `hobby3`, `Profile_Description`, `Internships_position`, `Internships_employer`, `Internships_city`, `Internships_Edu_start`, `Internships_Edu_end`, `Internships_Description`, `extra_position`, `extra_employer`, `extra_city`, `extra_Edu_start`, `extra_Edu_end`, `extra_Description`, `AchvDescription`, `Certificate_position`, `Certificate_end`, `Certificate_Description`) VALUES
INSERT INTO `user_cv` (`id`, `image`, `First_Name`, `Last_Name`, `Email`, `phone_number`, `address`, `P_Code`, `City_input`, `DateOB`, `PlaceOB`, `License`, `gender`, `nationality`, `civil_status`, `linkin`, `website`, `education`, `school`, `city`, `Edu_start`, `Edu_end`, `Description`, `position`, `employer`, `emp_city`, `emp_start`, `emp_end`, `emp_Description`, `skill1`, `skill1_range`, `skill2`, `skill2_range`, `skill3`, `skill3_range`, `lang1`, `lang1_range`, `lang2`, `lang2_range`, `lang3`, `lang3_range`, `hobby1`, `hobby2`, `hobby3`, `Profile_Description`, `Internships_position`, `Internships_employer`, `Internships_city`, `Internships_Edu_start`, `Internships_Edu_end`, `Internships_Description`, `extra_position`, `extra_employer`, `extra_city`, `extra_Edu_start`, `extra_Edu_end`, `extra_Description`, `AchvDescription`, `Certificate_position`, `Certificate_end`, `Certificate_Description`) VALUES
INSERT INTO `user_cv` (`id`, `image`, `First_Name`, `Last_Name`, `Email`, `phone_number`, `address`, `P_Code`, `City_input`, `DateOB`, `PlaceOB`, `License`, `gender`, `nationality`, `civil_status`, `linkin`, `website`, `education`, `school`, `city`, `Edu_start`, `Edu_end`, `Description`, `position`, `employer`, `emp_city`, `emp_start`, `emp_end`, `emp_Description`, `skill1`, `skill1_range`, `skill2`, `skill2_range`, `skill3`, `skill3_range`, `lang1`, `lang1_range`, `lang2`, `lang2_range`, `lang3`, `lang3_range`, `hobby1`, `hobby2`, `hobby3`, `Profile_Description`, `Internships_position`, `Internships_employer`, `Internships_city`, `Internships_Edu_start`, `Internships_Edu_end`, `Internships_Description`, `extra_position`, `extra_employer`, `extra_city`, `extra_Edu_start`, `extra_Edu_end`, `extra_Description`, `AchvDescription`, `Certificate_position`, `Certificate_end`, `Certificate_Description`) VALUES
(228, '', '', '', '', 0, '', 0, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', 1, '', 1, '', 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `user_cv` (`id`, `image`, `First_Name`, `Last_Name`, `Email`, `phone_number`, `address`, `P_Code`, `City_input`, `DateOB`, `PlaceOB`, `License`, `gender`, `nationality`, `civil_status`, `linkin`, `website`, `education`, `school`, `city`, `Edu_start`, `Edu_end`, `Description`, `position`, `employer`, `emp_city`, `emp_start`, `emp_end`, `emp_Description`, `skill1`, `skill1_range`, `skill2`, `skill2_range`, `skill3`, `skill3_range`, `lang1`, `lang1_range`, `lang2`, `lang2_range`, `lang3`, `lang3_range`, `hobby1`, `hobby2`, `hobby3`, `Profile_Description`, `Internships_position`, `Internships_employer`, `Internships_city`, `Internships_Edu_start`, `Internships_Edu_end`, `Internships_Description`, `extra_position`, `extra_employer`, `extra_city`, `extra_Edu_start`, `extra_Edu_end`, `extra_Description`, `AchvDescription`, `Certificate_position`, `Certificate_end`, `Certificate_Description`) VALUES
INSERT INTO `user_cv` (`id`, `image`, `First_Name`, `Last_Name`, `Email`, `phone_number`, `address`, `P_Code`, `City_input`, `DateOB`, `PlaceOB`, `License`, `gender`, `nationality`, `civil_status`, `linkin`, `website`, `education`, `school`, `city`, `Edu_start`, `Edu_end`, `Description`, `position`, `employer`, `emp_city`, `emp_start`, `emp_end`, `emp_Description`, `skill1`, `skill1_range`, `skill2`, `skill2_range`, `skill3`, `skill3_range`, `lang1`, `lang1_range`, `lang2`, `lang2_range`, `lang3`, `lang3_range`, `hobby1`, `hobby2`, `hobby3`, `Profile_Description`, `Internships_position`, `Internships_employer`, `Internships_city`, `Internships_Edu_start`, `Internships_Edu_end`, `Internships_Description`, `extra_position`, `extra_employer`, `extra_city`, `extra_Edu_start`, `extra_Edu_end`, `extra_Description`, `AchvDescription`, `Certificate_position`, `Certificate_end`, `Certificate_Description`) VALUES
(230, '', '', '', '', 0, '', 0, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '', 1, '', 1, '', 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_credentials`
--
ALTER TABLE `admin_credentials`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_email` (`email`);

--
-- Indexes for table `user_credentials`
--
ALTER TABLE `user_credentials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_cv`
--
ALTER TABLE `user_cv`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_credentials`
--
ALTER TABLE `user_credentials`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_cv`
--
ALTER TABLE `user_cv`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;