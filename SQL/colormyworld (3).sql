-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2023 at 10:54 AM
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
-- Database: `colormyworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `architect`
--

CREATE TABLE `architect` (
  `aid` int(50) NOT NULL,
  `loginid` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `idproof` varchar(1000) NOT NULL,
  `file` varchar(1000) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `architect`
--

INSERT INTO `architect` (`aid`, `loginid`, `name`, `age`, `gender`, `phonenumber`, `email`, `idproof`, `file`, `status`) VALUES
(1, 27, 'Varun Thomas', 33, 'Male', '8765654543', 'varun@gmail.com', 'idd3.jpg', 'waiter.jpg', '1'),
(2, 64, 'Annu Kurian', 35, 'Female', '9878767654', 'annu@gmail.com', 'idd3.jpg', 'waitergirl2.jpg', '1'),
(3, 65, 'Shon Vargees', 29, 'Male', '9878765456', 'shon@gmail.com', 'idcard1.jpg', 'waiter1.jpg', '1'),
(5, 67, 'Manav Mithra', 22, 'Male', '9067892514', 'manav2@gmail.com', '21.jpg', '20.jpg', '0'),
(7, 70, 'Charan', 31, 'Male', '9098898090', 'charan@gmail.com', 'add-img-02.jpg', 'img-1.jpg', '0'),
(8, 73, 'Atani', 42, 'Male', '9078567840', 'athani@gmail.com', 'int.jpg', 'avt-img.jpg', '0');

-- --------------------------------------------------------

--
-- Table structure for table `booking_tbl`
--

CREATE TABLE `booking_tbl` (
  `id` int(10) NOT NULL,
  `loginid` int(10) NOT NULL,
  `days` int(50) NOT NULL,
  `seid` int(10) NOT NULL,
  `price` int(25) NOT NULL,
  `totalprice` int(50) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_tbl`
--

INSERT INTO `booking_tbl` (`id`, `loginid`, `days`, `seid`, `price`, `totalprice`, `status`) VALUES
(5, 8, 5, 5, 250, 1250, 1),
(6, 8, 4, 4, 100, 400, 1),
(9, 35, 3, 5, 250, 750, 1),
(10, 35, 2, 3, 120, 240, 1),
(11, 23, 2, 4, 100, 200, 1),
(12, 23, 1, 5, 250, 250, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(50) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`, `description`, `status`) VALUES
(1, 'Paints', 'Wall Paints', 'active'),
(2, 'Roller Frame', 'Baretool', 'active'),
(3, 'Paint Brush', 'Brush for painting', 'active'),
(4, 'Paint Tray', 'A palatte', 'active'),
(5, 'Paint Brush Cleaner', 'Cleaning and storage of paint', 'active'),
(6, 'Roller cover', 'Secure for roller', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `headcook`
--

CREATE TABLE `headcook` (
  `headcookid` int(20) NOT NULL,
  `loginid` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `file1` varchar(500) NOT NULL,
  `experiencedyears` int(10) NOT NULL,
  `idproof` varchar(500) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `headcook`
--

INSERT INTO `headcook` (`headcookid`, `loginid`, `name`, `age`, `gender`, `phonenumber`, `email`, `file1`, `experiencedyears`, `idproof`, `status`) VALUES
(7, 22, 'Edwin', 34, 'Male', '8989876567', 'edwin@gmail.com', 'h2.jpg', 13, 'idd3.jpg', 1),
(20, 63, 'Dev', 34, 'Male', '9090876567', 'dev@gmail.com', 'stuff-img-04.jpg', 6, 'idd2.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginid` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type1` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginid`, `username`, `password`, `type1`, `status`) VALUES
(2, 'admin', 'Admin@123', 'admin', '1'),
(8, 'devnadh@gmail.com', 'Devnadh@123', 'user', '1'),
(22, 'Edwin', 'edwin@123', 'headcook', '1'),
(23, 'irin@gmail.com', 'Irin@123', 'user', '1'),
(26, 'lakshmi@gmail.com', 'Lachu@11', 'user', '1'),
(27, 'Varun', 'Varun@123', 'architect', '1'),
(30, 'marry@gmail.com', 'Marry@123', 'user', '1'),
(31, 'soni@gmail.com', 'Soni@123', 'user', '1'),
(35, 'manju@gmail.com', 'Manju@123', 'user', '1'),
(44, 'karthikacbabu11@gmail.com', 'Karthu@123', 'headcook', '1'),
(63, 'dev@gmail.com', 'dev@123', 'headcook', '1'),
(64, 'Annu', 'Annu@123', 'architect', '1'),
(65, 'Shon', 'Shon@123', 'architect', '1'),
(66, 'Ruby', 'Ruby@123', 'architect', '0'),
(67, 'Manav', 'Manav2@gmail.com', 'architect', '0'),
(68, 'milan@gmail.com', 'Milan@12', 'user', '1'),
(69, 'Arav', 'Arav@gmail.com', 'architect', '1'),
(70, 'Charan', 'charan@gmail.com', 'architect', '0'),
(71, 'paul3@gmail.com', 'Paul@3', 'user', '1'),
(72, 'anjupaul@gmail.com', 'Anju@13', 'user', '1'),
(73, 'Athani', 'athani@12', 'architect', '0'),
(74, 'manya5@gmail.com', 'Manya@12', 'user', '1');

-- --------------------------------------------------------

--
-- Table structure for table `order_tbl`
--

CREATE TABLE `order_tbl` (
  `id` int(50) NOT NULL,
  `login_id` int(50) NOT NULL,
  `aid` int(5) NOT NULL,
  `cartid` int(10) NOT NULL,
  `price` int(100) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_tbl`
--

INSERT INTO `order_tbl` (`id`, `login_id`, `aid`, `cartid`, `price`, `status`) VALUES
(124, 31, 1, 107, 600, 'Delivered'),
(126, 31, 2, 109, 1200, 'Assigned'),
(127, 35, 0, 110, 750, 'placed'),
(128, 23, 0, 113, 100, 'placed'),
(129, 23, 0, 113, 100, 'placed'),
(130, 23, 0, 113, 100, 'placed'),
(131, 23, 0, 11, 200, 'placed'),
(132, 23, 0, 12, 250, 'placed'),
(133, 23, 0, 12, 250, 'placed'),
(134, 23, 0, 12, 250, 'placed'),
(135, 23, 0, 12, 250, 'placed'),
(136, 23, 0, 12, 250, 'placed'),
(137, 23, 0, 12, 250, 'placed'),
(138, 23, 0, 12, 250, 'placed'),
(139, 23, 0, 12, 250, 'placed'),
(140, 23, 0, 12, 250, 'placed'),
(141, 23, 0, 12, 250, 'placed'),
(142, 23, 0, 114, 500, 'placed'),
(143, 23, 0, 12, 250, 'placed'),
(144, 23, 0, 12, 250, 'placed'),
(145, 23, 0, 12, 250, 'placed'),
(146, 23, 0, 12, 250, 'placed'),
(147, 23, 0, 12, 250, 'placed'),
(148, 23, 0, 12, 250, 'placed'),
(149, 23, 0, 12, 250, 'placed'),
(150, 23, 0, 12, 250, 'placed'),
(151, 23, 0, 12, 250, 'placed'),
(152, 23, 0, 12, 250, 'placed'),
(153, 23, 0, 114, 500, 'placed'),
(154, 23, 0, 126, 1350, 'unpaid'),
(155, 23, 0, 127, 500, 'unpaid'),
(156, 23, 0, 128, 300, 'unpaid'),
(157, 23, 0, 129, 1000, 'unpaid'),
(158, 23, 0, 130, 450, 'unpaid'),
(159, 23, 0, 131, 600, 'unpaid'),
(160, 23, 0, 133, 300, 'unpaid'),
(161, 23, 0, 134, 450, 'unpaid'),
(162, 23, 0, 134, 450, 'unpaid'),
(163, 23, 0, 135, 290, 'unpaid'),
(164, 23, 0, 137, 1350, 'unpaid'),
(165, 23, 0, 138, 300, 'unpaid'),
(166, 23, 0, 139, 500, 'unpaid'),
(167, 23, 0, 140, 350, 'unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `packageid` int(10) NOT NULL,
  `stime` varchar(10) NOT NULL,
  `etime` varchar(10) NOT NULL,
  `place` varchar(30) NOT NULL,
  `package` varchar(100) NOT NULL,
  `rate` int(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`packageid`, `stime`, `etime`, `place`, `package`, `rate`, `status`) VALUES
(2, '8.00AM', '5.00PM', 'Kottatyam', 'Interior Painting, Exterior Painting', 28750, 'active'),
(3, '8.30AM', '6.00PM', 'Trivandrum', 'Exterior Painting, Interior Painting, Commerical Painting', 30000, 'active'),
(4, '8:00AM', '4;30PM', 'Ernakulam', 'Exterior Painting, interior Painting, Commerical Painting, Wood Coatings', 45890, 'active'),
(6, '08:03', '19:04', 'Idukki', 'Exterior Painting', 3000, 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `category` varchar(100) NOT NULL,
  `quantity` int(50) NOT NULL,
  `file` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `name`, `Description`, `category`, `quantity`, `file`, `price`, `status`) VALUES
(9, 'Exterior Paint(3L)', 'Wheather Coat', '1', 159, 'image-1-ex.png', '450', 'active'),
(10, 'Paint Roller Frame(1)', 'Micro Fiber Paint Roller', '2', 53, 'roller1.jpg', '300', 'active'),
(11, 'Paint Brush cleaner(1)', 'Acrylic Brush Cleaner', '5', 180, 'cleaner.jpg', '350', 'active'),
(12, 'Wood and Metal Paint(5L)', 'Best Multi-Use Paint', '1', 77, 'berger.jpg', '300', 'active'),
(14, 'Interior Paint(5L)', 'Silk Glamour High Sheen Easy Clean', '1', 181, 'img-2-int.png', '500', 'active'),
(15, 'Exterior Paint(2L)', 'Warmasta Glow', '1', 108, 'berger1.jpg', '290', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(15) NOT NULL,
  `loginid` int(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `estatus` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `loginid`, `fname`, `lname`, `email`, `phone`, `estatus`) VALUES
(5, 8, 'Devnadh', 'Krishna', 'devnadh@gmail.com', '9898989878', 0),
(6, 23, 'Irin', 'Thomas', 'irin@gmail.com', '9800900987', 0),
(8, 26, 'Lakshmi', 'Priya', 'lakshmi@gmail.com', '9809876522', 0),
(10, 30, 'Marry', 'Kurian', 'marry@gmail.com', '8765764542', 0),
(11, 31, 'Sony', 'Thomas', 'soni@gmail.com', '9878777789', 0),
(15, 35, 'Manju', 'Thomas', 'manju@gmail.com', '8767654543', 0),
(16, 68, 'Milan', 'Kurian', 'milan@gmail.com', '9878605467', 0),
(17, 72, 'Anju', 'Paul', 'anjupaul@gmail.com', '9678654530', 0),
(18, 74, 'Manya', 'Madhu', 'manya5@gmail.com', '9890786755', 0);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `seid` int(50) NOT NULL,
  `sname` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` int(50) NOT NULL,
  `stime` varchar(100) NOT NULL,
  `etime` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`seid`, `sname`, `description`, `price`, `stime`, `etime`, `image`, `status`) VALUES
(3, 'Exterior Painting Service', 'Applies paints, sealers, and solvents to exterior and interior building surfaces such as plaster, sheetrock, concrete, and wood. Performs building exterior and interior caulking, finish repair, mud and tape, and texturing tasks.', 500, '8:30AM', '4:30PM', 'ex.jpg', 'active'),
(4, 'Interior Painting service', 'Usually, your painting contractor will include the types of paint they suggest using, labor cost and supplies, a rough estimate in time frame, and other painting techniques specific to your needs.', 600, '8:00AM', '5:00PM', 'int.jpg', 'active'),
(20, 'Commerical Painting Service', 'A commercial painter has more experience working with business clients rather than residential. They typically work for a contractor and are responsible for painting larger areas on buildings and working with a variety of surfaces and materials.', 800, '09:00AM', '6:00PM', 'com.png', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` int(50) NOT NULL,
  `loginid` int(50) NOT NULL,
  `pid` int(50) NOT NULL,
  `quantity` int(100) NOT NULL,
  `price` varchar(500) NOT NULL,
  `totalprice` varchar(500) NOT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`id`, `loginid`, `pid`, `quantity`, `price`, `totalprice`, `status`) VALUES
(109, 31, 10, 4, '300', '1200', 2),
(110, 35, 11, 3, '250', '750', 2),
(113, 23, 14, 1, '100', '100', 2),
(114, 23, 11, 2, '250', '500', 2),
(126, 23, 9, 3, '450', '1350', 2),
(127, 23, 14, 1, '500', '500', 2),
(128, 23, 12, 1, '300', '300', 2),
(129, 23, 14, 2, '500', '1000', 2),
(130, 23, 9, 1, '450', '450', 2),
(131, 23, 10, 2, '300', '600', 2),
(133, 23, 12, 1, '300', '300', 2),
(134, 23, 9, 1, '450', '450', 2),
(135, 23, 15, 1, '290', '290', 2),
(137, 23, 9, 3, '450', '1350', 2),
(138, 23, 12, 1, '300', '300', 2),
(139, 23, 14, 1, '500', '500', 2),
(140, 23, 11, 1, '350', '350', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id` int(11) NOT NULL,
  `login` int(11) NOT NULL,
  `order_id` int(5) NOT NULL,
  `amount` int(5) NOT NULL,
  `pay_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`id`, `login`, `order_id`, `amount`, `pay_status`) VALUES
(1, 0, 96, 300, 'Paid'),
(2, 23, 115, 300, 'Paid'),
(3, 23, 116, 300, 'Paid'),
(4, 23, 118, 100, 'Paid'),
(5, 31, 119, 300, 'Paid'),
(6, 31, 126, 1200, 'Paid'),
(7, 35, 127, 750, 'Paid'),
(8, 23, 128, 1350, 'Paid'),
(9, 23, 129, 290, 'Paid'),
(10, 23, 130, 1350, 'Paid'),
(11, 23, 142, 300, 'Paid'),
(12, 23, 153, 350, 'Paid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `architect`
--
ALTER TABLE `architect`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `loginid` (`loginid`);

--
-- Indexes for table `booking_tbl`
--
ALTER TABLE `booking_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `headcook`
--
ALTER TABLE `headcook`
  ADD PRIMARY KEY (`headcookid`),
  ADD KEY `headcook_ibfk_1` (`loginid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `order_tbl`
--
ALTER TABLE `order_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`packageid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loginid` (`loginid`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`seid`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `architect`
--
ALTER TABLE `architect`
  MODIFY `aid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `booking_tbl`
--
ALTER TABLE `booking_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `headcook`
--
ALTER TABLE `headcook`
  MODIFY `headcookid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `order_tbl`
--
ALTER TABLE `order_tbl`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `packageid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `seid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `architect`
--
ALTER TABLE `architect`
  ADD CONSTRAINT `architect_ibfk_1` FOREIGN KEY (`loginid`) REFERENCES `login` (`loginid`);

--
-- Constraints for table `headcook`
--
ALTER TABLE `headcook`
  ADD CONSTRAINT `headcook_ibfk_1` FOREIGN KEY (`loginid`) REFERENCES `login` (`loginid`);

--
-- Constraints for table `register`
--
ALTER TABLE `register`
  ADD CONSTRAINT `loginid` FOREIGN KEY (`loginid`) REFERENCES `login` (`loginid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
