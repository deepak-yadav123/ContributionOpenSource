-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2022 at 12:19 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `room_khata`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_renter`
--

CREATE TABLE `add_renter` (
  `id` int(10) NOT NULL,
  `full_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `joining_date` date NOT NULL,
  `address` varchar(1000) NOT NULL,
  `adhar_card` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_renter`
--

INSERT INTO `add_renter` (`id`, `full_name`, `mobile_no`, `joining_date`, `address`, `adhar_card`) VALUES
(52, 'Chandan', '4865795478', '2022-05-03', 'test', 'Adhar_Card_383.exe'),
(53, 'Suman', '8974562155', '2022-05-03', '', 'Adhar_Card_523.pdf'),
(57, 'Tushar', '8945624785', '2022-04-05', 'Aurangabad', 'Adhar_Card_518.jpg'),
(59, 'Deepak', '7040185594', '2022-06-04', 'Ranjangaon Gandhinagr galli no 2 ', 'Adhar_Card_700.png'),
(67, 'Bind', '', '0000-00-00', ' C ', 'Adhar_Card_232.png');

-- --------------------------------------------------------

--
-- Table structure for table `baki_money`
--

CREATE TABLE `baki_money` (
  `id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `baki_paisa` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baki_money`
--

INSERT INTO `baki_money` (`id`, `full_name`, `baki_paisa`) VALUES
(1, 'Select', ''),
(5, 'Chandan', '500rs light bill ke baki hai dedo jaldi'),
(12, 'Suman', '500 rs baaki'),
(15, 'Deepak', '500 rs is remaining '),
(16, 'Select', 'half rent is paid 1000rs');

-- --------------------------------------------------------

--
-- Table structure for table `light_bill`
--

CREATE TABLE `light_bill` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `curr_reading` varchar(10) NOT NULL,
  `prev_reading` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `light_bill`
--

INSERT INTO `light_bill` (`id`, `full_name`, `curr_reading`, `prev_reading`) VALUES
(55, 'Suman', '500', '400'),
(56, 'Chandan', '500', '100'),
(57, 'Select', '', ''),
(58, 'Select', '', ''),
(59, 'Chandan', '50', '45'),
(60, 'Select', '', ''),
(61, 'Chandan', '50', '40'),
(62, 'Chandan', '50', '40'),
(63, 'Chandan', '50', '40'),
(64, 'Chandan', '50', '40'),
(65, 'Chandan', '50', '40'),
(66, 'Chandan', '50', '40'),
(67, 'Select', '50', '40'),
(68, 'Chandan', '50', '40'),
(69, 'Select', '', ''),
(70, 'Bind', '50', '40'),
(71, 'Suman', '10', '40'),
(72, 'Deepak', '58', '10'),
(73, 'Select', '', ''),
(74, 'Suman', '10', '8'),
(75, 'Select', '50', '40'),
(76, 'Deepak', '50', '12'),
(77, 'Suman', '10', '8'),
(78, 'Deepak', '50', '48'),
(79, 'Chandan', '50', '48'),
(80, 'Rahul', '50', '47'),
(81, 'Tushar', '50', '48'),
(82, 'sharad', '50', '45'),
(83, 'Suman', '48', '38'),
(84, 'Suman', '48', '38'),
(85, 'Umesh Yadav', '50', '40'),
(86, 'Suman', '50', '40');

-- --------------------------------------------------------

--
-- Table structure for table `pay_light_bill`
--

CREATE TABLE `pay_light_bill` (
  `id` int(10) NOT NULL,
  `full_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `amount` varchar(10) CHARACTER SET utf8 NOT NULL,
  `date_from_month` date NOT NULL,
  `date_to_month` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pay_light_bill`
--

INSERT INTO `pay_light_bill` (`id`, `full_name`, `amount`, `date_from_month`, `date_to_month`) VALUES
(69, 'Bind', '50', '2022-05-03', '2022-05-12'),
(70, 'Deepak', '50', '2022-05-04', '2022-05-11'),
(71, 'Deepak', '50', '2022-05-04', '2022-05-05'),
(72, 'Suman', '41', '2022-05-03', '2022-05-07'),
(73, 'Bind', '45', '2022-05-04', '2022-05-13'),
(74, 'Umesh Yadav', '51', '2022-05-10', '2022-05-04'),
(75, 'Suman', '50', '2022-05-03', '2022-06-03'),
(76, 'Suman', '18', '2022-05-03', '2022-05-04'),
(77, 'Deepak', '18', '2022-05-03', '2022-06-03'),
(78, 'Rahul', '27', '2022-05-03', '2022-06-03'),
(79, 'Tushar', '18', '2022-05-10', '2022-06-10'),
(80, 'sharad', '45', '2022-05-27', '2022-06-27'),
(81, 'Deepak', '18', '2022-06-04', '2022-07-04');

-- --------------------------------------------------------

--
-- Table structure for table `pay_rent`
--

CREATE TABLE `pay_rent` (
  `id` int(10) NOT NULL,
  `select_name` varchar(100) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `date_current` date NOT NULL,
  `date_from_month` date NOT NULL,
  `date_to_month` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pay_rent`
--

INSERT INTO `pay_rent` (`id`, `select_name`, `amount`, `date_current`, `date_from_month`, `date_to_month`) VALUES
(17, 'Bind', '2000', '2022-05-04', '2022-05-13', '2022-06-13'),
(20, 'Suman', '5000', '2022-05-04', '2022-01-19', '2022-02-19'),
(30, 'Suman', '5000', '2022-05-02', '2022-05-04', '2022-05-06'),
(39, 'Deepak', '4500', '2022-05-05', '2022-05-13', '2022-05-13'),
(41, 'Chandan', '1500', '2022-05-04', '2022-05-05', '2022-05-14'),
(42, 'Chandan', '1500', '2022-05-04', '2022-05-05', '2022-05-14'),
(43, 'Bind', '80', '2022-05-03', '2022-05-26', '2022-05-31'),
(44, 'Bind', '80', '2022-05-03', '2022-05-26', '2022-05-31'),
(45, 'Deepak', '590', '2022-05-10', '2022-05-14', '2022-05-06'),
(46, 'Suman', '500', '2022-05-14', '2022-06-07', '2022-07-07'),
(47, 'Deepak', '1500', '2022-05-17', '2022-06-11', '2022-07-11'),
(48, 'Rahul', '1500', '2022-04-13', '2022-05-03', '2022-06-03'),
(49, 'Tushar', '1800', '2022-04-22', '2022-05-05', '2022-06-05'),
(50, 'sharad', '1500', '2022-05-21', '2022-05-01', '2022-05-31'),
(52, 'Deepak', '2000', '2022-06-04', '2022-06-04', '2022-07-04'),
(53, 'Bind', '500', '0000-00-00', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `room_dues`
--

CREATE TABLE `room_dues` (
  `due_id` int(11) NOT NULL,
  `due_user` varchar(255) NOT NULL,
  `due_ele_unit` int(11) NOT NULL,
  `due_ele_bill` int(11) NOT NULL,
  `due_rent` int(11) NOT NULL,
  `due_from` date NOT NULL,
  `due_till` date NOT NULL,
  `due_pending` int(11) NOT NULL,
  `due_notice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_dues`
--

INSERT INTO `room_dues` (`due_id`, `due_user`, `due_ele_unit`, `due_ele_bill`, `due_rent`, `due_from`, `due_till`, `due_pending`, `due_notice`) VALUES
(1, 'adenwalla.juned@gmail.com', 500, 1350, 4000, '2022-05-01', '2022-06-01', 5350, 'Please Pay at Earliest to Avoid any Penalty'),
(3, 'deepak@gmail.com', 500, 1350, 4000, '2022-05-01', '2022-06-01', 5350, 'Please Pay at Earliest to Avoid any Penalty');

-- --------------------------------------------------------

--
-- Table structure for table `room_user`
--

CREATE TABLE `room_user` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_user`
--

INSERT INTO `room_user` (`user_id`, `user_email`, `user_name`, `user_password`) VALUES
(2, 'adenwalla.juned@gmail.com', 'Juned Adenwalla', '098f6bcd4621d373cade4e832627b4f6'),
(3, 'deepak@gmail.com', 'Deppak', '098f6bcd4621d373cade4e832627b4f6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_renter`
--
ALTER TABLE `add_renter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `baki_money`
--
ALTER TABLE `baki_money`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `light_bill`
--
ALTER TABLE `light_bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pay_light_bill`
--
ALTER TABLE `pay_light_bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pay_rent`
--
ALTER TABLE `pay_rent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_dues`
--
ALTER TABLE `room_dues`
  ADD PRIMARY KEY (`due_id`);

--
-- Indexes for table `room_user`
--
ALTER TABLE `room_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_renter`
--
ALTER TABLE `add_renter`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `baki_money`
--
ALTER TABLE `baki_money`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `light_bill`
--
ALTER TABLE `light_bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `pay_light_bill`
--
ALTER TABLE `pay_light_bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `pay_rent`
--
ALTER TABLE `pay_rent`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `room_dues`
--
ALTER TABLE `room_dues`
  MODIFY `due_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `room_user`
--
ALTER TABLE `room_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
