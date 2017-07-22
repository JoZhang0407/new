-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2016 at 04:42 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `loginid` text NOT NULL COMMENT 'admin',
  `pass1` int(11) NOT NULL COMMENT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`loginid`, `pass1`) VALUES
('jo', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand`) VALUES
(0, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `first`
--

CREATE TABLE `first` (
  `ID` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `first`
--

INSERT INTO `first` (`ID`, `Name`, `Phone`, `Address`, `Email`) VALUES
(1, 'AAA', 545454, '1234567', 'aa@pp.com'),
(13, 'user1', 0, 'queen st', '348335804@QQ.COM');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginid` varchar(20) NOT NULL,
  `pass1` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `OrderForm`
--

CREATE TABLE `OrderForm` (
  `Tires` int(3) NOT NULL,
  `Oil` int(3) NOT NULL,
  `Sparkplugs` int(3) NOT NULL,
  `Shippingaddress` text NOT NULL,
  `total` int(11) NOT NULL,
  `totaltax` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `OrderForm`
--

INSERT INTO `OrderForm` (`Tires`, `Oil`, `Sparkplugs`, `Shippingaddress`, `total`, `totaltax`) VALUES
(2, 2, 2, '290 queen street auckland', 50, 75),
(2, 2, 2, '290 queen street auckland', 50, 75),
(2, 2, 100, '290 queen street auckland', 1030, 1545),
(2, 2, 100, '290 queen street auckland', 1030, 1545),
(0, 2, 100, '290 queen street auckland', 1010, 1515),
(0, 0, 100, '290 queen street auckland', 1000, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `brand_id` int(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `brand_id`, `product`, `price`) VALUES
(0, 0, 'Spring Water', 2),
(0, 0, 'ref', 20);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` int(10) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `phone`, `email`, `address`) VALUES
(0, 'admin', 1234, 2433398, '1111@qq.com', '290 queen street auckland'),
(0, 'admin', 1234, 2433398, '1111@qq.com', '290 queen street auckland'),
(0, 'admin', 1234, 2433398, '1111@qq.com', '290 queen street auckland'),
(0, 'admin', 1234, 2433398, '1111@qq.com', '290 queen street auckland'),
(0, 'admin', 1234, 2433398, '1111@qq.com', '290 queen street auckland'),
(0, 'admin', 1234, 2433398, '1111@qq.com', '290 queen street auckland'),
(0, 'admin', 1234, 2433398, '1111@qq.com', '290 queen street auckland'),
(0, 'admin', 1234, 2433398, '1111@qq.com', '290 queen street auckland');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `first`
--
ALTER TABLE `first`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `first`
--
ALTER TABLE `first`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
