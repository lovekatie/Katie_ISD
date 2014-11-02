-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2014 at 10:37 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ks`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `A_name` varchar(10) NOT NULL,
  `A_pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_name`, `A_pass`) VALUES
('KATIE', '1018'),
('KATIE', '1018'),
('KATIE', '1018'),
('KATIE', '1018');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE IF NOT EXISTS `membership` (
`ID` int(1) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Address` varchar(150) DEFAULT NULL,
  `Email` varchar(25) NOT NULL,
  `PhoneNumber` varchar(8) NOT NULL,
  `Birth` date NOT NULL,
  `sex` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`ID`, `LastName`, `FirstName`, `username`, `password`, `Address`, `Email`, `PhoneNumber`, `Birth`, `sex`) VALUES
(1, 'Katie', 'Wong', 'katie', '1314', 'KTHKBABCCCCCC', 'katie154@hotmail.com', '91239123', '2014-10-13', 'Female'),
(2, 'DS', 'Siu', 'ds', '1314', 'hk', 'ds@gmail.com', '98764545', '2014-10-27', 'Female'),
(3, 'chan', 'sum', 'sumsum', '0330', 'hong kong kowloon', 'sum sum@hotmail.com', '32165498', '2014-03-31', 'Female'),
(4, 'white', 'bear', 'white bear', '1018', 'tokyo japan', 'whitebear@yahoo.com.hk', '12345678', '2014-10-18', 'Female'),
(5, 'hello', 'kitty', 'hellokitty', '1516', 'toyko japan', 'hellokitty@yahoo.com.hk', '51235123', '2014-08-21', 'Female'),
(6, 'dd', 'dd', 'dd', '1234', 'dd''s home', 'dd@gmail.com', '91232255', '2010-12-13', 'Male'),
(7, 'll', 'll', 'll', '9123', 'll''s home', 'll@mail.com', '45123123', '1990-10-10', 'Female'),
(8, 'oooooooooo', 'oooooooooo', 'oooo', '6848', 'ooooooo''s home', 'ooooo@mail.com', '65487797', '1990-10-10', 'Male'),
(9, 'qwqw', 'qwqw', 'qwqwqw', '1111', 'fkgjflkdf''s home', 'glhjglhjgkjg@gmail.com', '15878643', '1991-01-11', 'Male'),
(10, 'miffy', 'miffy', 'miffy', '1111', 'miffy12', 'miffy12@email.com', '91232233', '1992-11-11', 'Female'),
(11, 'kenny', 'kenny', 'kenny', '241014', 'kenny21231', 'kenny@email.com', '98765432', '2013-02-04', 'Male'),
(12, 'fanny', 'fanny', 'fanny', '102414', 'jfh', 'dtyfghtfhfghg@mail.com', '61232233', '2000-10-10', 'Female'),
(13, 'see see ', 'see see', 'see see', '19921018', 'kittydkfdlkfjdlkf', 'kitty@mail.com', '98987845', '1992-10-10', 'Female'),
(14, 'aa', 'aa', 'aaaaaa', 'aaaaaa', 'aa@gmail.com', 'aaaaaaaaaaa', '98987865', '1990-08-08', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`orderid` int(11) NOT NULL,
  `date` date NOT NULL,
  `username` varchar(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `date`, `username`) VALUES
(5, '2014-10-23', 'sumsum'),
(6, '2014-10-23', 'katie'),
(8, '2014-10-23', 'katie'),
(9, '2014-10-23', 'katie'),
(10, '2014-10-23', 'katie'),
(11, '2014-10-23', 'qwqwqw'),
(12, '2014-10-24', 'qwqwqw'),
(13, '2014-10-24', 'qwqwqw'),
(14, '2014-10-24', 'katie'),
(15, '2014-10-24', '21321'),
(16, '2014-10-24', 'katie'),
(17, '2014-10-24', 'miffy'),
(18, '2014-10-24', 'miffy'),
(19, '2014-10-24', 'miffy'),
(20, '2014-10-24', 'miffy'),
(21, '2014-10-24', 'miffy'),
(22, '2014-10-24', 'miffy'),
(23, '2014-10-24', 'miffy'),
(24, '2014-10-24', 'miffy'),
(31, '2014-10-24', 'ds'),
(32, '2014-10-24', 'kenny'),
(33, '2014-10-24', 'kenny'),
(34, '2014-10-24', 'katie'),
(35, '2014-10-24', 'fanny'),
(39, '2014-10-29', 'hellokitty'),
(40, '2014-10-29', 'hellokitty'),
(41, '2014-10-29', 'hellokitty'),
(42, '2014-10-29', 'hellokitty'),
(43, '2014-11-02', 'see see'),
(44, '2014-11-02', 'see see'),
(45, '2014-11-02', 'katie');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `orderid` int(11) NOT NULL,
  `P_No` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`orderid`, `P_No`, `quantity`, `price`) VALUES
(5, 5, 4, 250),
(8, 3, 2, 550),
(8, 5, 1, 250),
(9, 1, 1, 100),
(9, 5, 1, 250),
(10, 3, 2, 550),
(10, 5, 1, 250),
(11, 1, 1, 100),
(11, 3, 1, 550),
(12, 1, 1, 100),
(12, 3, 1, 550),
(35, 18, 3, 688),
(35, 10, 3, 252),
(34, 1, 2, 100),
(15, 5, 2, 250),
(35, 6, 3, 200),
(17, 5, 1, 250),
(17, 3, 1, 550),
(19, 3, 4, 550),
(20, 1, 1, 100),
(21, 1, 1, 100),
(23, 1, 2, 100),
(24, 5, 1, 250),
(24, 3, 2, 550),
(31, 3, 2, 550),
(32, 6, 1, 200),
(32, 16, 1, 180),
(33, 3, 1, 550),
(40, 6, 10, 200),
(40, 5, 4, 250),
(41, 18, 1, 688),
(41, 1, 1, 100),
(40, 17, 8, 140),
(40, 18, 4, 688),
(41, 17, 1, 140),
(41, 5, 1, 250),
(41, 3, 1, 550),
(41, 6, 1, 200),
(41, 16, 1, 180),
(41, 8, 1, 20),
(43, 3, 1, 550),
(43, 5, 1, 250),
(43, 6, 1, 200),
(43, 13, 1, 858),
(44, 13, 1, 858),
(45, 3, 1, 550),
(45, 6, 1, 200),
(45, 1, 1, 100);

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE IF NOT EXISTS `pet` (
`P_no` int(11) NOT NULL,
  `P_Name` varchar(50) NOT NULL,
  `Price` int(5) NOT NULL,
  `P_info` varchar(200) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `pet`
--

INSERT INTO `pet` (`P_no`, `P_Name`, `Price`, `P_info`, `image`) VALUES
(1, 'Dog food sweet', 100, 'eat everyday', 'SY1.jpg'),
(2, 'Cesar Xisha (Japan) cow cheese dish', 10, 'Cesar Xisha (Japan) cow cheese dish 100g', 'dogfood1.jpg'),
(3, 'Nutram Grain-Free Salmon & Trout AllLife Cat Food ', 550, 'Annamaet Feline Grain Free Formula''s top natural whole grain-free cat food 6kg', 'catfood1.jpg'),
(4, 'Nutram Grain-Free Salmon & Trout AllLife Cat Food ', 224, 'Nutram Grain-Free Salmon & Trout AllLife Cat Food 1.8kg', 'catfood2.jpg'),
(5, 'AvoDerm Triple Protein Meal Formula Dog Food ', 250, 'AvoDerm Triple Protein Meal Formula Dog Food avocado triple delicious selection of Dog Food 4.4lb', 'dogfood2.jpg'),
(6, 'bed (64 x 56 x 16cm)', 200, 'for dog or cat to use. So soft get a good sleep.', 'bed.jpg'),
(7, 'Sanwa Tsuna & Katsuo & Sake Cat Food (25g x 6)', 33, 'Sanwa Tsuna & Katsuo & Sake Cat Food (25g x 6)', 'catfood3.jpg'),
(8, 'Solid Gold Cat Can Food  6oz', 20, 'Solid Gold Cat Can Food  6oz', 'catfood4.jpg'),
(9, 'Techni-cal Cat Adult Dry Food 5kg', 300, 'Techni-cal Cat Adult Dry Food 5kg', 'catfood5.jpg'),
(10, 'Nature''s Logic Feline Duck & Salmon Cat Food 7.7lb', 252, 'Nature''s Logic Feline Duck & Salmon Cat Food 7.7lb', 'catfood6.jpg'),
(11, 'Whiskas Box Hairball Control Cat Food 1.3kg', 58, 'Whiskas Box Hairball Control Cat Food 1.3kg', 'catfood7.jpg'),
(12, 'Natural Balance 6lb', 208, 'Natural Balance 6lb', 'catfood9.jpg'),
(13, 'BlackHawk 20kg', 858, 'BlackHawk 20kg', 'dogfood3.jpg'),
(14, 'Tuscan Natural Harvest Dog Food 15lb', 455, 'Tuscan Natural Harvest Dog Food 15lb', 'dogfood4.jpg'),
(15, 'Zignature Zssential Dry Dog Food 4lb', 135, 'Zignature Zssential Dry Dog Food 4lb', 'dogfood5.jpg'),
(16, 'FirstMate Chicken with Blueberries for dogs  5lb', 180, 'FirstMate Chicken with Blueberries for dogs  5lb', 'dogfood6.jpg'),
(17, 'Nature''s Logic Canine Chicken Dog Dry Food 4.4lb', 140, 'Nature''s Logic Canine Chicken Dog Dry Food 4.4lb', 'dogfood7.jpg'),
(18, 'Earthborn Holistic Small Breed Dog Food 12kg', 688, 'Earthborn Holistic Small Breed Dog Food 12kg', 'dogfood8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
 ADD PRIMARY KEY (`P_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
MODIFY `ID` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `pet`
--
ALTER TABLE `pet`
MODIFY `P_no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
