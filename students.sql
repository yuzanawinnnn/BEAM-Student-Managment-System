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
  `Sib1name` text DEFAULT NULL,
  `Sib1gender` text DEFAULT NULL,
  `Sib1age` int(11) DEFAULT NULL,
  `Sib1occup` text DEFAULT NULL,
  `Sib1contact` text DEFAULT NULL,
  `Sib1remark` text DEFAULT NULL,
  `Sib1location` text DEFAULT NULL,
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
  `Insti1name` text DEFAULT NULL,
  `Insti1level` text DEFAULT NULL,
  `Insti1complete` text DEFAULT NULL,
  `Insti1Remark` text DEFAULT NULL,
  `Insti2name` text DEFAULT NULL,
  `Insti2level` text DEFAULT NULL,
  `Insti2complete` text DEFAULT NULL,
  `Insti2Remark` text DEFAULT NULL,
  `Insti3name` text DEFAULT NULL,
  `Insti3level` text DEFAULT NULL,
  `Insti3complete` text DEFAULT NULL,
  `Insti3Remark` text DEFAULT NULL,
  `Insti4name` text DEFAULT NULL,
  `Insti4level` text DEFAULT NULL,
  `Insti4complete` text DEFAULT NULL,
  `Insti4Remark` text DEFAULT NULL,
  `Insti5name` text DEFAULT NULL,
  `Insti5level` text DEFAULT NULL,
  `Insti5complete` text DEFAULT NULL,
  `Insti5Remark` text DEFAULT NULL,
  `Department` text NOT NULL,
  `SupportYear` text NOT NULL,
  `SupportType` text NOT NULL,
  `Supportfam` text NOT NULL,
  `Aspiration` text NOT NULL,
  `Thaiarrival` text NOT NULL,
  `Portarrival` text NOT NULL,
  `Travelperson` text NOT NULL,
  `Arrivaladdd` text NOT NULL,
  `Thainame` text NOT NULL,
  `Thainick` text NOT NULL,
  `ThaiDOB` datetime NOT NULL,
  `Thaioccup` text NOT NULL,
  `Thaiwork` text NOT NULL,
  `Thaipermit` text NOT NULL,
  `Nopermit` int(11) NOT NULL,
  `Socialcard` varchar(255) NOT NULL,
  `Thaireligion` text NOT NULL,
  `Thainational` text NOT NULL,
  `Thaiethnic` text NOT NULL,
  `Thaidad` text NOT NULL,
  `Thaimum` text NOT NULL,
  `Addincard` text NOT NULL,
  `ThaiCuradd` text NOT NULL,
  `MigCountry1` text NOT NULL,
  `MigProvince1` text DEFAULT NULL,
  `MigDistrict1` text DEFAULT NULL,
  `MigSubdistrict1` text DEFAULT NULL,
  `Migyear1` text DEFAULT NULL,
  `Migreason1` text DEFAULT NULL,
  `MigCountry2` text DEFAULT NULL,
  `MigProvince2` text DEFAULT NULL,
  `MigDistrict2` text DEFAULT NULL,
  `MigSubdistrict2` text DEFAULT NULL,
  `Migyear2` text DEFAULT NULL,
  `Migreason2` text DEFAULT NULL,
  `MigCountry3` text DEFAULT NULL,
  `MigProvince3` text DEFAULT NULL,
  `MigDistrict3` text DEFAULT NULL,
  `MigSubdistrict3` text DEFAULT NULL,
  `Migyear3` text DEFAULT NULL,
  `Migreason3` text DEFAULT NULL,
  `MigCountry4` text DEFAULT NULL,
  `MigProvince4` text DEFAULT NULL,
  `MigDistrict4` text DEFAULT NULL,
  `MigSubdistrict4` text DEFAULT NULL,
  `Migyear4` text DEFAULT NULL,
  `Migreason4` text DEFAULT NULL,
  `Occup1workplace` text DEFAULT NULL,
  `Occup1year` text DEFAULT NULL,
  `Occup1sub` text DEFAULT NULL,
  `Occup1dist` text DEFAULT NULL,
  `Occup1prov` text DEFAULT NULL,
  `Occup2workplace` text DEFAULT NULL,
  `Occup2year` text DEFAULT NULL,
  `Occup2sub` text DEFAULT NULL,
  `Occup2dist` text DEFAULT NULL,
  `Occup2prov` text DEFAULT NULL,
  `Occup3workplace` text DEFAULT NULL,
  `Occup3year` text DEFAULT NULL,
  `Occup3sub` text DEFAULT NULL,
  `Occup3dist` text DEFAULT NULL,
  `Occup3prov` text DEFAULT NULL,
  `Occup4workplace` text DEFAULT NULL,
  `Occup4year` text DEFAULT NULL,
  `Occup4sub` text DEFAULT NULL,
  `Occup4dist` text DEFAULT NULL,
  `Occup4prov` text DEFAULT NULL,
  `Occup5workplace` text DEFAULT NULL,
  `Occup5year` text DEFAULT NULL,
  `Occup5sub` text DEFAULT NULL,
  `Occup5dist`  text DEFAULT NULL,
  `Occup5prov` text DEFAULT NULL,
  `MSchool1name` text NOT NULL,
  `MSchool1level` text NOT NULL,
  `MSchool1year` int(11) NOT NULL,
  `MSchool1complete` text NOT NULL,
  `MSchool1place` text NOT NULL,
  `MSchool2name` text DEFAULT NULL,
  `MSchool2level` text DEFAULT NULL,
  `MSchool2year` int(11) DEFAULT NULL,
  `MSchool2complete` text DEFAULT NULL,
  `MSchool2place` text DEFAULT NULL,
  `MSchool3name` text DEFAULT NULL,
  `MSchool3level` text DEFAULT NULL,
  `MSchool3year` int(11) DEFAULT NULL,
  `MSchool3complete` text DEFAULT NULL,
  `MSchool3place` text DEFAULT NULL,
  `MSchool4name` text DEFAULT NULL,
  `MSchool4level` text DEFAULT NULL,
  `MSchool4year` int(11) DEFAULT NULL,
  `MSchool4complete` text DEFAULT NULL,
  `MSchool4place` text DEFAULT NULL,
  `MSchool5name` text DEFAULT NULL,
  `MSchool5level` text DEFAULT NULL,
  `MSchool5year` int(11) DEFAULT NULL,
  `MSchool5complete` text DEFAULT NULL,
  `MSchool5place` text DEFAULT NULL,
  `Topic1` text NOT NULL,
  `Topic1Org` text NOT NULL,
  `Topic1Place` text NOT NULL,
  `Topic1Year` text NOT NULL,
  `Topic1Cert` text NOT NULL,
  `Topic2` text DEFAULT NULL,
  `Topic2Org` text DEFAULT NULL,
  `Topic2Place` text DEFAULT NULL,
  `Topic2Year` text DEFAULT NULL,
  `Topic2Cert` text DEFAULT NULL,
  `Topic3` text DEFAULT NULL,
  `Topic3Org` text DEFAULT NULL,
  `Topic3Place` text DEFAULT NULL,
  `Topic3Year` text DEFAULT NULL,
  `Topic3Cert` text DEFAULT NULL,
  `Topic4` text DEFAULT NULL,
  `Topic4Org` text DEFAULT NULL,
  `Topic4Place` text DEFAULT NULL,
  `Topic4Year` text DEFAULT NULL,
  `Topic4Cert` text DEFAULT NULL,
  `Topic5` text DEFAULT NULL,
  `Topic5Org` text DEFAULT NULL,
  `Topic5Place` text DEFAULT NULL,
  `Topic5Year` text DEFAULT NULL,
  `Topic5Cert` text DEFAULT NULL,
  `Listening1` text NOT NULL,
  `Speaking1` text NOT NULL,
  `Reading1` text NOT NULL,
  `Writing1` text NOT NULL,
  `Listening2` text DEFAULT NULL,
  `Speaking2` text DEFAULT NULL,
  `Reading2` text DEFAULT NULL,
  `Writing2` text DEFAULT NULL,
  `Listening3` text DEFAULT NULL,
  `Speaking3` text DEFAULT NULL,
  `Reading3` text DEFAULT NULL,
  `Writing3` text DEFAULT NULL,
  `Listening4` text DEFAULT NULL,
  `Speaking4` text DEFAULT NULL,
  `Reading4` text DEFAULT NULL,
  `Writing4` text DEFAULT NULL,
  `Height` int(11) NOT NULL,
  `Weight` int(11) NOT NULL,
  `Chronic` text NOT NULL,
  `Drugallergy` text NOT NULL,
  `Foodallergy` text NOT NULL,
  `Dropedulvl` text NOT NULL,
  `Dropyear` int(11) NOT NULL,
  `Dropschool` text NOT NULL,
  `Dropreason` text NOT NULL,
  `Dropreaother` text NOT NULL,
  `Dropwork` text DEFAULT NULL,
  `Dropjobpos` text DEFAULT NULL,
  `Dropjobhr` text DEFAULT NULL,
  `Droplang` text DEFAULT NULL,
  `Dropjobloc` text DEFAULT NULL,
  `Dropjobsal` text DEFAULT NULL,
  `Marriage` text DEFAULT NULL,
  `Spousejob` text DEFAULT NULL,
  `Numchild` text DEFAULT NULL,
  `Childage` text DEFAULT NULL,
  `Marrijob` text DEFAULT NULL,
  `Dropother` text DEFAULT NULL,
  `studentpic` text DEFAULT NULL,
  `Gur1pic` text DEFAULT NULL,
  `Gur2pic` text DEFAULT NULL,
  `Residpic` text DEFAULT NULL,
  `Com1pic` text DEFAULT NULL,
  `Com2pic` text DEFAULT NULL,
    
  
  
    
   

    
    
  
    
  
  
   
  
  
  
    
    
  
  
  
    

    
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
