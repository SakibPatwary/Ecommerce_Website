-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2021 at 08:54 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xyz_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `cashiertable`
--

CREATE TABLE `cashiertable` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `nid` varchar(20) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `accountno` int(10) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cashiertable`
--

INSERT INTO `cashiertable` (`firstname`, `lastname`, `nid`, `dob`, `gender`, `accountno`, `phone`, `email`) VALUES
('Jahid', 'Khan', '12231211231212', '2021-08-04', 'male', 90006, '01728957987', 'jahid@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `customertable`
--

CREATE TABLE `customertable` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `nid` varchar(30) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `nnid` varchar(30) NOT NULL,
  `accountno` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customertable`
--

INSERT INTO `customertable` (`firstname`, `lastname`, `nid`, `dob`, `gender`, `email`, `phone`, `nnid`, `accountno`) VALUES
('Ruponty', 'Rupu', '2002987902', '20-02-2002', 'female', 'rupu@gmail.com', '01677756336', '121212121212', 1800001),
('Imrul', 'Afnan', '1999092540', '24-12-1999', 'male', 'afnan@gmail.com', '01677756334', '121212121212', 1800002),
('Sayma', 'Khanam', '1212121212', '24-12-1999', 'female', 'sayma@gmail.com', '1728675643', '1212121212', 1800003),
('Imrul', 'Afnan', '1212121212121212', '2021-08-11', 'male', 'imrul.afnan@gmail.com', '01677756221', '121212121212', 1800004),
('a', 'b', '121212121121', '2021-08-25', 'male', 'c@gmail.com', '01786756786', '12121211212', 1800005),
('Orin', 'Chowdhury', '12345678912', '2021-08-17', 'female', 'orin@gmail.com', '01685367289', '12347875367', 1800006),
('Hasibul ', 'Emon', '43435353355', '2021-08-03', 'male', 'hasib@gmal.com', '01987654563', '355342343242', 1800007),
('x', 'y', '12232131232123', '2021-08-24', 'female', 'x@gmail.com', '12212121212', '123231123123', 1800008);

-- --------------------------------------------------------

--
-- Table structure for table `managertable`
--

CREATE TABLE `managertable` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `nid` varchar(20) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `accountno` int(10) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `managertable`
--

INSERT INTO `managertable` (`firstname`, `lastname`, `nid`, `dob`, `gender`, `accountno`, `phone`, `email`) VALUES
('Iearul', 'Abid', '121212121212', '10-09-1995', 'male', 10001, '01677756330', 'abid@gmail.com'),
('Soumik Kumar', 'Chowdhury', '19021031075', '10-09-1998', 'male', 10002, '01677756337', 'soumik@gmail.com'),
('Harun Ar', 'Rasid', '121314151213', '2021-08-24', 'male', 10004, '01713954450', 'harun@gmail.com'),
('Imrul', 'Afnan', '121212121212', '2009-10-27', 'male', 10005, '01772676855', 'imrul@gmail.com'),
('Emon Khan', 'Hasan', '172537593262', '2021-08-03', 'male', 10006, '01644455533', 'emonhasan@gmail.com'),
('Emon ', 'Khan', '12312312312', '24-12-1999', 'male', 10007, '01987635434', 'emon@gmail.com'),
('Bilkis', 'Begum', '12121212111', '2021-09-08', 'female', 10008, '017726767554', 'bilkis@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `transitiontable`
--

CREATE TABLE `transitiontable` (
  `serial` int(20) NOT NULL,
  `sender` int(10) NOT NULL,
  `receiver` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transitiontable`
--

INSERT INTO `transitiontable` (`serial`, `sender`, `receiver`, `amount`, `date`) VALUES
(1, 1800001, 1800001, 800, '2021-08-04'),
(2, 1800001, 1800001, 100, '2021-08-04'),
(3, 1800001, 180001, 100, '2021-08-04'),
(4, 1800001, 180, 1, '2021-08-04'),
(5, 1800001, 11, 0, '2021-08-04'),
(6, 1800001, 1800001, 995, '2021-08-05'),
(7, 1800001, 1800002, 300, '2021-08-05'),
(8, 1800001, 1800002, 200, '2021-08-05'),
(9, 1800001, 1800002, 200, '2021-08-05'),
(10, 1800001, 1800002, 100, '2021-08-05'),
(11, 1800001, 1800002, 100, '2021-08-05'),
(12, 1800001, 1800002, 100, '2021-08-05'),
(13, 1800001, 1800002, 200, '2021-08-05'),
(14, 1800001, 1800002, 100, '2021-08-05'),
(15, 1800002, 1800001, 500, '2021-08-05'),
(16, 1800001, 1800002, 300, '2021-08-05'),
(17, 1800001, 1800002, 300, '2021-08-06'),
(18, 1800002, 1800001, 1800, '2021-08-06'),
(19, 0, 1800002, 9999233, '2021-08-07'),
(20, 1800001, 10001, 200, '2021-08-07'),
(21, 1800001, 10001, 100000, '2021-08-07'),
(22, 10001, 1800001, 100000, '2021-08-07'),
(23, 10001, 1800001, 100000000, '2021-08-07'),
(24, 10001, 1800001, 2147483647, '2021-08-07'),
(26, 1800002, 1800001, 300, '2021-08-11'),
(27, 90001, 1800002, 200, '2021-08-11'),
(28, 1800002, 90001, 200, '2021-08-11'),
(29, 1800002, 10001, 100, '2021-08-11'),
(30, 90002, 1800005, 5000, '2021-08-13'),
(31, 1800005, 1800002, 2000, '2021-08-13'),
(32, 1800005, 10004, 3000, '2021-08-13'),
(33, 1800002, 1800003, 10000, '2021-08-14'),
(34, 1800002, 1800006, 10000, '2021-08-14'),
(35, 90004, 1800003, 1200, '2021-08-14'),
(36, 1800006, 90004, 100, '2021-08-14'),
(37, 10004, 1800002, 1250, '2021-08-14'),
(38, 10004, 1800002, 1250, '2021-08-14'),
(39, 1800002, 10004, 1250, '2021-08-14'),
(40, 10004, 1800002, 1250, '2021-08-14'),
(41, 10004, 1800004, 10000, '2021-08-14'),
(42, 10004, 1800002, 10, '2021-08-14'),
(43, 1800006, 1800001, 4000, '2021-08-14');

-- --------------------------------------------------------

--
-- Table structure for table `userbalance`
--

CREATE TABLE `userbalance` (
  `accountno` int(11) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userbalance`
--

INSERT INTO `userbalance` (`accountno`, `balance`) VALUES
(1800001, 2147483647),
(1800002, 9982887),
(1800003, 12200),
(1800004, 10000),
(1800005, 0),
(1800006, 5900),
(1800007, 0),
(1800008, 0);

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`username`, `password`, `type`, `status`) VALUES
('abid@gmail.com', 'abid', 'manager', 'active'),
('admin', 'admin', 'admin', 'active'),
('afnan@gmail.com', '123456', 'customer', 'active'),
('bilkis@gmail.com', 'bilkis1', 'manager', 'deactive'),
('c@gmail.com', '123456', 'customer', 'active'),
('emon@gmail.com', 'asdfasdf', 'manager', 'active'),
('emonhasan@gmail.com', '12121212', 'manager', 'active'),
('harun@gmail.com', 'harun4', 'manager', 'active'),
('hasib@gmal.com', 'hasib1', 'customer', 'active'),
('imrul.afnan@gmail.com', 'asasqw', 'customer', 'active'),
('jahid@gmail.com', 'qwerty', 'cashier', 'active'),
('orin@gmail.com', 'orin12', 'customer', 'active'),
('rupu@gmail.com', 'qwqwqw', 'customer', 'active'),
('sayma@gmail.com', 'sayma1', 'customer', 'active'),
('soumik@gmail.com', 'asqwas', 'manager', 'active'),
('x@gmail.com', 'aaaaaa', 'customer', 'inactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cashiertable`
--
ALTER TABLE `cashiertable`
  ADD PRIMARY KEY (`accountno`);

--
-- Indexes for table `customertable`
--
ALTER TABLE `customertable`
  ADD PRIMARY KEY (`accountno`);

--
-- Indexes for table `managertable`
--
ALTER TABLE `managertable`
  ADD PRIMARY KEY (`accountno`);

--
-- Indexes for table `transitiontable`
--
ALTER TABLE `transitiontable`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `userbalance`
--
ALTER TABLE `userbalance`
  ADD PRIMARY KEY (`accountno`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cashiertable`
--
ALTER TABLE `cashiertable`
  MODIFY `accountno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90007;

--
-- AUTO_INCREMENT for table `customertable`
--
ALTER TABLE `customertable`
  MODIFY `accountno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1800009;

--
-- AUTO_INCREMENT for table `managertable`
--
ALTER TABLE `managertable`
  MODIFY `accountno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10009;

--
-- AUTO_INCREMENT for table `transitiontable`
--
ALTER TABLE `transitiontable`
  MODIFY `serial` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `userbalance`
--
ALTER TABLE `userbalance`
  MODIFY `accountno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1800009;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
