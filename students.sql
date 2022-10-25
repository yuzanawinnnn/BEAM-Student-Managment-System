-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 24, 2022 at 07:55 AM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `stureg` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Surname` text NOT NULL,
  `BloodGp` text NOT NULL,
  `Dob` datetime NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` text NOT NULL,
  `Religion` text NOT NULL,
  `Nationality` text NOT NULL,
  `Ethnicity` text NOT NULL,
  `Status` text NOT NULL,
  `Occupation` text NOT NULL,
  `Contact` text NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Linefb` varchar(255) NOT NULL,   
  `Photo` varchar(255) DEFAULT NULL,
  `Dadname` text NOT NULL,
  `Dadage` int(11) NOT NULL,
  `Dadstatus` text NOT NULL,
  `Dadreligion` text NOT NULL,
  `Dadnation` text NOT NULL,
  `Dadethnic` text NOT NULL,
  `DadOccup` text NOT NULL,
  `Dadincome` int(11) NOT NULL,
  `Momname` text NOT NULL,
  `Momage` int(11) NOT NULL,
  `Momstatus` text NOT NULL,
  `Momreligion` text NOT NULL,
  `Momnation` text NOT NULL,
  `Momethnic` text NOT NULL,
  `MomOccup` text NOT NULL,
  `Momincome` int(11) NOT NULL,
  `Gurname` text NOT NULL,
  `Gurage` int(11) NOT NULL,
  `Gurstatus` text NOT NULL,
  `Gurreligion` text NOT NULL,
  `Gurnation` text NOT NULL,
  `Gurethnic` text NOT NULL,
  `GurOccup` text NOT NULL,
  `Gurincome` int NOT NULL,
  `Relation` text NOT NULL,
  `RelOther` text NOT NULL,
  `OrgAdd` varchar(255) NOT NULL, 
  `CurAdd` varchar(255) NOT NULL,
  `Place` varchar(255) NOT NULL,
  `Date` datetime NOT NULL,
  `Collector` text NOT NULL,
  `Birthname` text NOT NULL,
  `Birthnick` text NOT NULL,
  `BirthDOB` datetime NOT NULL,
  `Birthreligion` text NOT NULL,
  `Birthnation` text NOT NULL,
  `Birthethnic` text NOT NULL,
  `Birthsib` text NOT NULL,
  `Birthadd` text NOT NULL,
  `Idname` text NOT NULL,
  `Idnick` text NOT NULL,
  `IdDOB` datetime NOT NULL,
  `Idreligion` text NOT NULL,
  `Idnation` text NOT NULL,
  `Idethnic` text NOT NULL,
  `Idsib` text NOT NULL,
  `Idadd` text NOT NULL,
  `BRelation` text NOT NULL,
  `BRelOther` text NOT NULL,
  `BGurname` text NOT NULL,
  `BGurage` int(11) NOT NULL,
  `BGurstatus` text NOT NULL,
  `BGurreligion` text NOT NULL,
  `BGurnation` text NOT NULL,
  `BGurethnic` text NOT NULL,
  `BGurOccup` text NOT NULL,
  `BGurincome` int NOT NULL,
  `BGuradd` varchar(255) NOT NULL,
  `BGurtemp` text NOT NULL,
  `Sib1name` text NOT NULL,
  `Sib1gender` text NOT NULL,
  `Sib1age` int(11) NOT NULL,
  `Sib1occup` text NOT NULL,
  `Sib1contact` text NOT NULL,
  `Sib1remark` text NOT NULL,
  `Sib1location` text NOT NULL,
  `Sib2name` text DEFAULT NULL,
  `Sib2gender` text DEFAULT NULL,
  `Sib2age` int(11) DEFAULT NULL,
  `Sib2occup` text DEFAULT NULL,
  `Sib2contact` text DEFAULT NULL,
  `Sib2remark` text DEFAULT NULL,
  `Sib2location` text DEFAULT NULL,
  `Sib3name` text DEFAULT NULL,
  `Sib3gender` text DEFAULT NULL,
  `Sib3age` int(11) DEFAULT NULL,
  `Sib3occup` text DEFAULT NULL,
  `Sib3contact` text DEFAULT NULL,
  `Sib3remark` text DEFAULT NULL,
  `Sib3location` text DEFAULT NULL,
  `Sib4name` text DEFAULT NULL,
  `Sib4gender` text DEFAULT NULL,
  `Sib4age` int(11) DEFAULT NULL,
  `Sib4occup` text DEFAULT NULL,
  `Sib4contact` text DEFAULT NULL,
  `Sib4remark` text DEFAULT NULL,
  `Sib4location` text DEFAULT NULL,
  `Sib5name` text DEFAULT NULL,
  `Sib5gender` text DEFAULT NULL,
  `Sib5age` int(11) DEFAULT NULL,
  `Sib5occup` text DEFAULT NULL,
  `Sib5contact` text DEFAULT NULL,
  `Sib5remark` text DEFAULT NULL,
  `Sib5location` text DEFAULT NULL,
  `Instiname` text NOT NULL,
  `Instilevel` text NOT NULL,
    
  
  
  
    

    
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--



--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `stureg`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `stureg`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
