-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2018 at 12:18 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamunu`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(100) NOT NULL,
  `cus_phone` int(12) NOT NULL,
  `cus_nic` varchar(20) NOT NULL,
  `cus_address` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobapply`
--

CREATE TABLE `jobapply` (
  `worker_id` int(11) NOT NULL,
  `worker_name` varchar(100) NOT NULL,
  `worker_nic` varchar(50) NOT NULL,
  `worker_phone` int(11) NOT NULL,
  `worker_address` varchar(200) NOT NULL,
  `job_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobapply`
--

INSERT INTO `jobapply` (`worker_id`, `worker_name`, `worker_nic`, `worker_phone`, `worker_address`, `job_type`) VALUES
(2, 'Achintha Rajakaruna', '+94294783289', 9823759, 'pannipitiya', 'mason'),
(120, 'Ashan Lakshitha', '932490390', 7626328, '697-8, Jayamawatha', 'mason'),
(158, 'Kasun Banadara', '03293409', 2094809, '697-8, Jayamawatha', 'plumber'),
(239, 'Suchintha Rajakaruna', '343294790', 7432987, 'pannipitiya', 'mason'),
(486, 'Kamal Addaraarachchi', '948320948', 2850238, 'pannipitiya', 'Electrisian'),
(492, 'Suchintha Rajakaruna', '40643097', 98520398, 'pannipitiya', 'mason'),
(561, 'Suchintha Rajapakse', '294783289', 9823759, 'pannipitiya', 'mason'),
(950, 'asitha', '294783289', 9823759, 'pannipitiya', 'mason'),
(962, 'kamal', '7329847', 98409384, 'pannipitiya', 'mason');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `noti_id` int(11) NOT NULL,
  `notification` varchar(200) NOT NULL,
  `status` int(10) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`noti_id`, `notification`, `status`, `date`) VALUES
(1, 'You have recieved and new order', 0, '2014-08-12 11:14:54am'),
(2, 'You recieved an new order', 0, '2014-08-12 11:14:54am'),
(3, 'You recieved an new order', 0, '2014-08-12 11:14:54am');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `date` varchar(100) NOT NULL,
  `order_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `cus_name` varchar(100) NOT NULL,
  `cus_phone` int(11) NOT NULL,
  `cus_address` varchar(200) NOT NULL,
  `cus_email` varchar(100) NOT NULL,
  `payment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`date`, `order_id`, `service_id`, `cus_name`, `cus_phone`, `cus_address`, `cus_email`, `payment_id`) VALUES
('2014-08-12 11:14:54am', 1, 0, 'Mr.Asitha Indrajith', 766897230, '', 'asitha@gmail.com', 0),
('2014-08-12 11:14:54am', 26, 24, 'Mr. Kamal Nipun', 766897230, 'Kuruduwatta,colombo 07', 'asitha@gmail.com', 0),
('2014-08-12 11:14:54am', 28, 101, 'Mr. Kithsiri Mewan', 766897230, 'Pitipana', 'asitha@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `payment_amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `project_name` varchar(200) NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  `project_loc` varchar(100) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `project_status` varchar(100) NOT NULL,
  `project_cost` double NOT NULL,
  `worker_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `order_id`, `project_name`, `start_date`, `end_date`, `project_loc`, `customer_name`, `project_status`, `project_cost`, `worker_count`) VALUES
(4345, 16, 'Modern House 1 Project', '2018-09-17', 'Not Started', 'Pannipitiya', 'Mr.Asitha', 'not complete', 3450000, 30),
(4348, 17, 'Modern', '2018-09-17', 'Not Started', 'Seegiriya', 'Mr.Kavinda', 'started', 5600000, 22),
(4349, 28, 'Modern House 6 Project', '2018-08-17', '2018-09-17', 'Maharagama', 'Mr.Nagodawithna', 'completed', 45000000, 50);

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `resource_id` int(11) NOT NULL,
  `resource_type` varchar(100) NOT NULL,
  `resource_name` varchar(100) NOT NULL,
  `resource_owner` varchar(100) NOT NULL,
  `resource_count` int(11) NOT NULL,
  `available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`resource_id`, `resource_type`, `resource_name`, `resource_owner`, `resource_count`, `available`) VALUES
(2001, 'Building', 'Hammer', 'Abeysinghe', 57, 24),
(2002, 'Building', 'Drill', 'Kanchana Jayasinghe', 34, 12),
(2003, 'Building', 'Mason', 'Chamara', 102, 102),
(2004, 'Tile Layering', 'Tile Cutter', 'Managala Samarasinghe', 54, 54);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `service_type` varchar(100) NOT NULL,
  `service_image` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `service_type`, `service_image`, `price`) VALUES
(23, 'Modern House 1', 'house', '../../public/img/img-items/product-img/1.jpg', 'Rs.34,000,000'),
(24, 'Modern House 2', 'house', '../../public/img/img-items/product-img/2.jpg', 'Rs,45,000,000'),
(25, 'Modern House 3', 'house', '../../public/img/img-items/product-img/3.jpg', 'Rs.56,000,000'),
(26, 'Modern House 4', 'house', '../../public/img/img-items/product-img/4.jpg', 'Rs. 67,000,00'),
(27, 'Modern House 5', 'house', '../../public/img/img-items/product-img/6.jpg', 'Rs. 80,000,00'),
(101, 'Construction Repair', 'Repairing', '', 'Negotiable'),
(106, 'Office Modern 3', 'office', '../../public/img/img-items/product-img/999.png', 'Rs. 56,000'),
(402, 'Construction Painting', 'Painting', '../../public/img/img-items/product-img/999.png', 'Negotiable'),
(554, 'Constructions Building Drawings', 'Building Drawings', '../../public/img/img-items/product-img/999.png', 'Negotiable'),
(663, 'Floor Tile Layering', 'Tile Layering', '../../public/img/img-items/product-img/999.png', 'Rs. 25,000 Onwards'),
(765, 'Construction Wiring', 'Wiring', '../../public/img/img-items/product-img/999.png', 'Negotiable');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_password` varchar(300) NOT NULL,
  `user_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_password`, `user_type`) VALUES
(2141257, '1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `worker_id` int(11) NOT NULL,
  `worker_name` varchar(100) NOT NULL,
  `worker_phone` int(12) NOT NULL,
  `worker_type` varchar(100) DEFAULT NULL,
  `worker_address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`worker_id`, `worker_name`, `worker_phone`, `worker_type`, `worker_address`) VALUES
(45, 'Matara Sunil', 766897345, 'Mason', '234,Wellawatta'),
(46, 'Sunimal Rathnayaek', 1709217090, 'Electrisian', '256,Panipitiya'),
(47, 'Maheepala Herath', 39439099, 'Mason', 'wellawatta'),
(48, 'Maheepala Herath', 39439099, 'Mason', 'wellawatta'),
(49, 'Maheepala Herath', 39439099, 'Mason', 'wellawatta'),
(50, 'Kamal Nipuna', 23, 'Mason', 'Halawatha'),
(52, 'Nipun Dematnaha', 21082109, 'Electrisian', 'Yapahuwa'),
(53, 'Nimal Siripala', 9031489, 'Mason', 'Sedawatta'),
(54, 'Nimal Siripala', 9031489, 'Mason', 'Sedawatta'),
(55, 'Nimal Siripala', 9031489, 'Mason', 'Sedawatta'),
(56, 'Nimal Siripala', 9031489, 'Mason', 'Sedawatta'),
(58, 'Nimal Siripala', 9031489, 'Mason', 'Sedawatta'),
(561, 'Suchintha Rajapakse', 9823759, 'Mason', 'pannipitiya'),
(950, 'asitha', 9823759, 'Mason', 'pannipitiya'),
(951, 'Kasun Banadara', 2094809, 'plumber', ''),
(952, 'Suchintha Rajakaruna', 7432987, 'mason', ''),
(953, 'kamal', 98409384, 'mason', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `jobapply`
--
ALTER TABLE `jobapply`
  ADD PRIMARY KEY (`worker_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`noti_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`resource_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`worker_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jobapply`
--
ALTER TABLE `jobapply`
  MODIFY `worker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=963;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `noti_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4350;
--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `resource_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2005;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=766;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2141258;
--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `worker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=954;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
