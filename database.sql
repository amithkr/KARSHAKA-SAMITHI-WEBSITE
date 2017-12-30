-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2017 at 08:23 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vegitables`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_ID` int(10) NOT NULL,
  `cus_Name` varchar(30) NOT NULL,
  `cus_Address` varchar(100) NOT NULL,
  `cus_Phone` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_ID`, `cus_Name`, `cus_Address`, `cus_Phone`) VALUES
(1, 'Mohammed Illyas', 'sankeerthanam', '9961198351'),
(2, 'Mohammed Illyas', 'Mullam Kunnath Valappil House', '9961198351'),
(3, 'Mohammed Illyas', 'Mullam Kunnath Valappil House', '9961198351'),
(4, 'Mohammed Illyas', 'Sankeerthanam', '9961198351'),
(5, '', '', ''),
(6, '', '', ''),
(7, '', '', ''),
(8, '', '', ''),
(9, 'Danish', 'Sankeerthanam', '9746635529');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sal_ID` int(10) NOT NULL,
  `sal_cus_ID` int(10) NOT NULL,
  `sal_prm_ID` int(10) NOT NULL,
  `sal_prd_Prize` varchar(10) NOT NULL,
  `Status` varchar(1) DEFAULT NULL,
  `sal_Quantity` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sal_ID`, `sal_cus_ID`, `sal_prm_ID`, `sal_prd_Prize`, `Status`, `sal_Quantity`) VALUES
(1, 3, 48, '12', 'Y', ''),
(2, 4, 44, '234', 'Y', ''),
(3, 5, 44, '1170', 'Y', ''),
(4, 6, 55, '23', 'Y', ''),
(5, 7, 55, '23', 'Y', ''),
(6, 8, 55, '23', 'Y', ''),
(7, 9, 55, '92', 'Y', '4');

-- --------------------------------------------------------

--
-- Table structure for table `tb_farmer`
--

CREATE TABLE `tb_farmer` (
  `frm_ID` int(10) NOT NULL,
  `frm_Name` varchar(20) NOT NULL,
  `frm_Address` varchar(50) NOT NULL,
  `frm_Aadhaar` varchar(10) NOT NULL,
  `frm_DOB` varchar(10) NOT NULL,
  `frm_Phone` varchar(20) NOT NULL,
  `frm_Landacres` int(10) NOT NULL,
  `frm_Landstatus` varchar(1) NOT NULL,
  `status` varchar(1) NOT NULL,
  `frm_Username` varchar(30) NOT NULL,
  `frm_Password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_farmer`
--

INSERT INTO `tb_farmer` (`frm_ID`, `frm_Name`, `frm_Address`, `frm_Aadhaar`, `frm_DOB`, `frm_Phone`, `frm_Landacres`, `frm_Landstatus`, `status`, `frm_Username`, `frm_Password`) VALUES
(1, 'sf', 'asd', 'as', 'asd', 'asd', 1, 'W', 'W', 'wef', 'wef'),
(2, 'hfdh', 'ytedty', '1', 'ytr', '78965468945', 1, 't', 'r', 'wef', 'wef');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pdtdetail`
--

CREATE TABLE `tb_pdtdetail` (
  `prd_ID` int(10) NOT NULL,
  `prd_prm_ID` int(10) NOT NULL,
  `prd_Qty` int(10) NOT NULL,
  `prd_Prize` int(10) NOT NULL,
  `prd_Unit` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pdtdetail`
--

INSERT INTO `tb_pdtdetail` (`prd_ID`, `prd_prm_ID`, `prd_Qty`, `prd_Prize`, `prd_Unit`) VALUES
(1, 37, 1, 1, 'ad'),
(2, 37, 1, 1, 'ad'),
(3, 37, 1, 1, 'ad'),
(4, 38, 12, 4, 'ad'),
(5, 38, 5, 4, 'ad'),
(6, 38, 7, 4, 'ad'),
(7, 39, 12, 433, 'ad'),
(8, 39, 5, 433, 'ad'),
(9, 39, 7, 433, 'ad'),
(10, 40, 12, 433, 'ad'),
(11, 40, 5, 6, 'ad'),
(12, 40, 7, 76, 'ad'),
(13, 41, 1, 2, 'kg'),
(14, 41, 3, 4, 'kg'),
(15, 41, 5, 5, 'kg'),
(16, 42, 1, 2, 'kg'),
(17, 42, 4, 4, 'kg'),
(18, 42, 4, 4, 'kg'),
(19, 43, 300, 900, 'ml'),
(20, 43, 400, 1300, 'ml'),
(21, 43, 500, 1600, 'ml'),
(22, 44, 300, 234, 'ml'),
(23, 44, 400, 1300, 'ml'),
(24, 44, 500, 1600, 'ml'),
(25, 45, 300, 234, 'ml'),
(26, 45, 400, 1300, 'ml'),
(27, 45, 500, 1600, 'ml'),
(28, 46, 300, 234, 'ml'),
(29, 46, 400, 1300, 'ml'),
(30, 46, 500, 1600, 'ml'),
(31, 47, 4, 3, '1'),
(32, 47, 5, 4, '1'),
(33, 47, 6, 3, '1'),
(34, 48, 4, 3, '1'),
(35, 48, 5, 4, '1'),
(36, 48, 6, 3, '1'),
(37, 49, 44567, 3, '1345678'),
(38, 49, 5, 4, '1345678'),
(39, 49, 6, 3, '1345678'),
(40, 52, 1, 20, 'kg'),
(41, 52, 2, 40, 'kg'),
(42, 52, 3, 58, 'kg'),
(43, 55, 1, 23, 'kg'),
(44, 55, 2, 40, 'kg'),
(45, 55, 3, 59, 'kg'),
(46, 56, 213, 213, 'kg'),
(47, 56, 213, 21, 'kg'),
(48, 56, 213, 213, 'kg'),
(49, 57, 4, 45, 'Kg'),
(50, 57, 1, 54, 'Kg'),
(51, 57, 58, 554, 'Kg'),
(52, 58, 3, 654, 'kg'),
(53, 58, 34, 3443, 'kg'),
(54, 58, 34, 234, 'kg'),
(55, 59, 3, 654, 'kg'),
(56, 59, 34, 3443, 'kg'),
(57, 59, 34, 234, 'kg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pdtmaster`
--

CREATE TABLE `tb_pdtmaster` (
  `prm_ID` int(10) NOT NULL,
  `prm_Name` varchar(20) NOT NULL,
  `prm_Path` varchar(200) NOT NULL,
  `prm_frm_ID` int(10) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pdtmaster`
--

INSERT INTO `tb_pdtmaster` (`prm_ID`, `prm_Name`, `prm_Path`, `prm_frm_ID`, `status`) VALUES
(59, 'sadasd', 'images/2.jpg', 1, 'Y'),
(58, 'sadasd', 'images/2.jpg', 1, 'Y'),
(57, 'kjhjgfd', 'images/3.jpg', 1, 'y'),
(56, 'Ginger', 'images/whatyouget_263_150.jpg', 1, 'Y'),
(55, 'Onion', 'images/whatyouget_263_150.jpg', 1, 'Y'),
(54, '', 'http://localhost:8080/web//images/.jpg', 1, ''),
(53, '', 'http://localhost:8080/web//images/.jpg', 1, ''),
(52, 'Ginger', 'images/whatyouget_263_150.jpg', 1, 'Y'),
(51, '', 'http://localhost:8080/web//images/.jpg', 1, ''),
(50, '', 'http://localhost:8080/web//images/.jpg', 1, ''),
(49, 'tgjhkl', 'images/about.jpg', 1, 'y'),
(48, 'tgjhkl', 'images/about.jpg', 1, 'y'),
(47, 'tgjhkl', 'images/about.jpg', 1, 'y'),
(46, 'Ginger', 'images/about.jpg', 1, 'Y'),
(45, 'Ginger', 'images/about.jpg', 1, 'Y'),
(44, 'Ginger', 'images/about.jpg', 1, 'Y'),
(43, 'Sanjay', 'images/images/about.jpg', 1, 'Y'),
(42, 'Fruit', 'http://localhost:8080/web/images/about.jpg', 1, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_ID` int(10) NOT NULL,
  `user_Name` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `frm_ID` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_ID`, `user_Name`, `Password`, `frm_ID`) VALUES
(2, 'Administrator', '123456', 0),
(8, 'wef', 'wef', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_ID`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sal_ID`);

--
-- Indexes for table `tb_farmer`
--
ALTER TABLE `tb_farmer`
  ADD PRIMARY KEY (`frm_ID`);

--
-- Indexes for table `tb_pdtdetail`
--
ALTER TABLE `tb_pdtdetail`
  ADD PRIMARY KEY (`prd_ID`);

--
-- Indexes for table `tb_pdtmaster`
--
ALTER TABLE `tb_pdtmaster`
  ADD PRIMARY KEY (`prm_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sal_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_farmer`
--
ALTER TABLE `tb_farmer`
  MODIFY `frm_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_pdtdetail`
--
ALTER TABLE `tb_pdtdetail`
  MODIFY `prd_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `tb_pdtmaster`
--
ALTER TABLE `tb_pdtmaster`
  MODIFY `prm_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
