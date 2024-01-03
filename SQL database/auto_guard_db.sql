-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 04:44 PM
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
-- Database: `auto_guard_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accident_report`
--

CREATE TABLE `accident_report` (
  `Report_ID` int(10) NOT NULL,
  `Vehicle_No` varchar(12) DEFAULT NULL,
  `Package_ID` varchar(10) DEFAULT NULL,
  `Accident_Description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accident_report`
--

INSERT INTO `accident_report` (`Report_ID`, `Vehicle_No`, `Package_ID`, `Accident_Description`) VALUES
(1, 'ADS4596', 'P001', 'Vehicle most damdge');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Email` varchar(50) NOT NULL CHECK (`Email` like '%_@_%._%'),
  `Mobile` int(11) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Email`, `Mobile`, `Password`, `Name`) VALUES
('chamikadilshan1123@gmail.com', 703966227, 'Chamika2002%%', 'Chamika');

-- --------------------------------------------------------

--
-- Table structure for table `claim_history`
--

CREATE TABLE `claim_history` (
  `Report_ID` int(10) NOT NULL,
  `Email` varchar(50) DEFAULT NULL CHECK (`Email` like '%_@_%._%'),
  `Claim_Value` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `claim_history`
--

INSERT INTO `claim_history` (`Report_ID`, `Email`, `Claim_Value`) VALUES
(1, 'chamika@gmail.com', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Email` varchar(50) NOT NULL CHECK (`Email` like '%_@_%._%'),
  `Mobile` int(11) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `First_Name` varchar(20) DEFAULT NULL,
  `Last_name` varchar(20) DEFAULT NULL,
  `DoB` date DEFAULT NULL,
  `profile_pic` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Email`, `Mobile`, `Password`, `First_Name`, `Last_name`, `DoB`, `profile_pic`) VALUES
('chamika@gmail.com', 703966227, 'Chamika789@@', 'Chamika', 'Dilshan', '2002-12-03', NULL),
('dimuthu@gmail.com', 754632589, 'Dimuthu789@@', 'Dimuthu', 'Yasintha', '2001-06-12', NULL),
('ishani@gmail.com', 789632154, 'Ishani789@@', 'Ishani', 'Chamodya', '2001-06-03', NULL),
('sanduni@gmail.com', 752456258, 'Sanduni789@@', 'Sanduni', 'Samaraweera', '2001-06-06', NULL),
('vihanga@gmail.com', 752123658, 'Vihanga789@@', 'Vihanga', 'Liyanaarachchi', '2001-11-05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `owner_package`
--

CREATE TABLE `owner_package` (
  `Vehicle_No` varchar(12) NOT NULL,
  `Package_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `owner_package`
--

INSERT INTO `owner_package` (`Vehicle_No`, `Package_ID`) VALUES
('ADS4596', 'P001'),
('BGH452', 'P004'),
('DHJ5655', 'P004'),
('HDF585', 'P006'),
('HGSG4585', 'P002'),
('THK412', 'P005');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `Package_ID` varchar(10) NOT NULL,
  `Estimate_Value_Percentage` float DEFAULT NULL,
  `Package_Name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`Package_ID`, `Estimate_Value_Percentage`, `Package_Name`) VALUES
('P001', 2, 'Mortor Bike cover'),
('P002', 2, 'Three wheel cover'),
('P003', 2, 'Mortor Car cover'),
('P004', 2, 'Heavy vehicle cover'),
('P005', 2, 'Ladies Only cover'),
('P006', 2, 'Third-Party vehicle cover');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Receipt_ID` int(10) NOT NULL,
  `Package_ID` varchar(10) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL CHECK (`Email` like '%_@_%._%'),
  `Amount` float DEFAULT NULL,
  `P_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Receipt_ID`, `Package_ID`, `Email`, `Amount`, `P_date`) VALUES
(1, 'P001', 'chamika@gmail.com', 4000, '2023-06-11 18:05:37'),
(2, 'P001', 'chamika@gmail.com', 4000, '2023-06-11 19:40:04');

-- --------------------------------------------------------

--
-- Table structure for table `support_ticket`
--

CREATE TABLE `support_ticket` (
  `Ticket_ID` int(12) NOT NULL,
  `Email` varchar(50) DEFAULT NULL CHECK (`Email` like '%_@_%._%'),
  `Name` varchar(50) DEFAULT NULL,
  `Message` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `support_ticket`
--

INSERT INTO `support_ticket` (`Ticket_ID`, `Email`, `Name`, `Message`) VALUES
(1, 'vihanga@gmail.com', 'Vihanga', 'What is the actual validity time period of the insurance cover'),
(2, 'vihanga@gmail.com', 'Vihanga', 'What is the actual validity time'),
(3, 'chamika@gmail.com', 'chamika', 'How to get claim details');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `Vehicle_No` varchar(12) NOT NULL,
  `Chassis_No` varchar(25) DEFAULT NULL,
  `Engine_No` varchar(25) DEFAULT NULL,
  `Brand` varchar(25) DEFAULT NULL,
  `Model` varchar(25) DEFAULT NULL,
  `Fuel_Type` varchar(20) DEFAULT NULL,
  `Class` varchar(20) DEFAULT NULL,
  `Country` varchar(20) DEFAULT NULL,
  `V_Year` year(4) DEFAULT NULL,
  `Colour` varchar(10) DEFAULT NULL,
  `Engine_Capacity` int(11) DEFAULT NULL,
  `Cylinder_Capacity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`Vehicle_No`, `Chassis_No`, `Engine_No`, `Brand`, `Model`, `Fuel_Type`, `Class`, `Country`, `V_Year`, `Colour`, `Engine_Capacity`, `Cylinder_Capacity`) VALUES
('ADS4596', 'HGDJKS4582S', 'GDHSK5214', 'bajaj', 'platina', 'Petrol', 'A', 'india', 2013, 'black', 110, 110),
('BGH452', 'HFX56KFB45', 'BDG576MBG', 'Leyland', 'Viking', 'Diesel', 'C', 'India', 2020, 'yellow', 100, 6540),
('DHJ5655', 'RGF4251DDD', '524GJXG52', 'Leyland', 'Viking', 'Diesel', 'D', 'india', 2020, 'yellow', 100, 6540),
('HDF585', 'DFEW57542RD', 'DCSFDHYG', 'Toyota', 'Axio', 'Petrol', 'B1', 'india', 2017, 'blue', 200, 100),
('HGSG4585', 'JHXSBI7556SX', 'SHXJHS56896525', 'Bajaj', '4stroke', 'Petrol', 'B1', 'india', 2016, 'red', 100, 205),
('THK412', 'JGUS6868DCS689', 'HCDWE6568E3686C', 'Suzuki', 'Alto', 'Petrol', 'B', 'india', 2017, 'white', 800, 100);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_owner`
--

CREATE TABLE `vehicle_owner` (
  `Email` varchar(50) NOT NULL CHECK (`Email` like '%_@_%._%'),
  `Vehicle_No` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle_owner`
--

INSERT INTO `vehicle_owner` (`Email`, `Vehicle_No`) VALUES
('chamika@gmail.com', 'ADS4596'),
('vihanga@gmail.com', 'DHJ5655'),
('dimuthu@gmail.com', 'HDF585'),
('ishani@gmail.com', 'HGSG4585'),
('sanduni@gmail.com', 'THK412');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_value`
--

CREATE TABLE `vehicle_value` (
  `Vehicle_No` varchar(12) NOT NULL,
  `Estimate_Value` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle_value`
--

INSERT INTO `vehicle_value` (`Vehicle_No`, `Estimate_Value`) VALUES
('ADS4596', 200000),
('BGH452', 10000000),
('DHJ5655', 20000000),
('HDF585', 0),
('HGSG4585', 0),
('THK412', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accident_report`
--
ALTER TABLE `accident_report`
  ADD PRIMARY KEY (`Report_ID`),
  ADD KEY `Accident_Report_Vehicle_No_FK1` (`Vehicle_No`),
  ADD KEY `Accident_Report_Package_ID_FK2` (`Package_ID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `claim_history`
--
ALTER TABLE `claim_history`
  ADD PRIMARY KEY (`Report_ID`),
  ADD KEY `Claim_History_Email_FK2` (`Email`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `owner_package`
--
ALTER TABLE `owner_package`
  ADD PRIMARY KEY (`Vehicle_No`,`Package_ID`),
  ADD KEY `Owner_Package_Package_ID_FK2` (`Package_ID`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`Package_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Receipt_ID`),
  ADD KEY `Payment_Package_ID_FK1` (`Package_ID`),
  ADD KEY `Payment_Email_FK2` (`Email`);

--
-- Indexes for table `support_ticket`
--
ALTER TABLE `support_ticket`
  ADD PRIMARY KEY (`Ticket_ID`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`Vehicle_No`);

--
-- Indexes for table `vehicle_owner`
--
ALTER TABLE `vehicle_owner`
  ADD PRIMARY KEY (`Email`),
  ADD KEY `Vehicle_Owner_Vehicle_No_FK` (`Vehicle_No`);

--
-- Indexes for table `vehicle_value`
--
ALTER TABLE `vehicle_value`
  ADD PRIMARY KEY (`Vehicle_No`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accident_report`
--
ALTER TABLE `accident_report`
  ADD CONSTRAINT `Accident_Report_Package_ID_FK2` FOREIGN KEY (`Package_ID`) REFERENCES `package` (`Package_ID`),
  ADD CONSTRAINT `Accident_Report_Vehicle_No_FK1` FOREIGN KEY (`Vehicle_No`) REFERENCES `vehicle_value` (`Vehicle_No`);

--
-- Constraints for table `claim_history`
--
ALTER TABLE `claim_history`
  ADD CONSTRAINT `Claim_History_Email_FK2` FOREIGN KEY (`Email`) REFERENCES `vehicle_owner` (`Email`),
  ADD CONSTRAINT `Claim_History_Report_ID_FK1` FOREIGN KEY (`Report_ID`) REFERENCES `accident_report` (`Report_ID`);

--
-- Constraints for table `owner_package`
--
ALTER TABLE `owner_package`
  ADD CONSTRAINT `Owner_Package_Package_ID_FK2` FOREIGN KEY (`Package_ID`) REFERENCES `package` (`Package_ID`),
  ADD CONSTRAINT `Owner_Package_Vehicle_No_FK1` FOREIGN KEY (`Vehicle_No`) REFERENCES `vehicle` (`Vehicle_No`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `Payment_Email_FK2` FOREIGN KEY (`Email`) REFERENCES `vehicle_owner` (`Email`),
  ADD CONSTRAINT `Payment_Package_ID_FK1` FOREIGN KEY (`Package_ID`) REFERENCES `package` (`Package_ID`);

--
-- Constraints for table `vehicle_owner`
--
ALTER TABLE `vehicle_owner`
  ADD CONSTRAINT `Vehicle_Owner_Vehicle_No_FK` FOREIGN KEY (`Vehicle_No`) REFERENCES `vehicle` (`Vehicle_No`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
