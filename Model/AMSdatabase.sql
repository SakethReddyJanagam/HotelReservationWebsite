-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2023 at 01:43 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `AMSdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `checked`
--

CREATE TABLE `checked` (
  `id` int(30) NOT NULL,
  `ref_no` varchar(100) NOT NULL,
  `room_id` int(30) NOT NULL,
  `name` text NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL DEFAULT 'admin@gmail.com',
  `date_in` datetime NOT NULL,
  `date_out` datetime NOT NULL,
  `booked_cid` int(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = pending, 1=checked in , 2 = checked out',
  `address` varchar(40) DEFAULT NULL,
  `street` varchar(30) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(10) DEFAULT NULL,
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checked`
--

INSERT INTO `checked` (`id`, `ref_no`, `room_id`, `name`, `contact_no`, `Email`, `date_in`, `date_out`, `booked_cid`, `status`, `address`, `street`, `city`, `state`, `date_updated`) VALUES
(4, '0000\n', 1, 'John Smith', '+14526-5455-44', 'adam@gmail.com', '2020-09-19 11:48:09', '2020-09-22 11:48:09', 3, 2, '9642 Ortiz Valleys', 'Valleys', 'Rutherfordborough', 'Hawaii', '2023-03-07 17:04:11'),
(5, '3163390901\n', 1, 'user', '4545353', 'adam@gmail.com', '2023-03-08 07:05:00', '2023-03-09 07:05:00', 3, 1, '245 Cold Storage Rd', '245 Cold Storage Rd', 'Craig', 'Alaska', '2023-03-07 17:05:39'),
(22, '9895926509\n', 4, 'Robert', '2322323232', 'adam@gmail.com', '2023-03-04 15:22:00', '2023-03-06 15:22:00', 2, 1, '362 Ridgewood Dr', 'Ridgewood Dr', ' Soldotna', 'Alaska', '2023-03-07 17:06:34'),
(23, '6127352665\n', 3, 'user', '4545353', 'adam@gmail.com', '2023-03-06 10:34:00', '2023-03-09 10:34:00', 2, 1, '900 Lanark Dr', 'Lanark st', 'Wasilla', 'Alaska', '2023-03-07 17:07:16'),
(52, '3397776982\n', 9, 'aaa', '445455', 'example3@gmail.com', '2023-03-06 15:30:00', '2023-03-08 15:30:00', 3, 1, '3448 Ile De France ', '3448 Ile De France St #242', 'Fort Wainwright', 'Alaska', '2023-03-07 17:07:49'),
(54, '7895934338\n', 8, 'aaddaamm', '4545353', 'adam@gmail.com', '2023-03-08 06:23:00', '2023-03-09 06:23:00', 2, 1, '2417 Tongass Ave #111', 'Ave #111', 'Ketchikan', 'Alaska', '2023-03-07 17:08:21'),
(56, '7979926162\n', 0, 'sssss', '445453', 'adam@gmail.com', '2023-03-08 06:32:00', '2023-03-09 06:32:00', 2, 0, 'aaa', 'bbbb', 'ccc', 'ddd', '2023-03-07 15:50:19'),
(71, '3717307185\n', 0, 'mahi', '845712562', 'adam@gmail.com', '2023-03-08 13:17:00', '2023-03-09 13:17:00', 2, 0, 'no 6', '2 street', 'ny', 'ny', '2023-03-08 17:47:57'),
(73, '9115454515\n', 0, 'stark', '7845122356', 'stark@gmail.com', '2023-03-08 13:37:00', '2023-03-09 13:37:00', 2, 0, 'no 15', 'first cross', 'ny', 'ny', '2023-03-08 18:08:02');

-- --------------------------------------------------------

--
-- Table structure for table `client_users`
--

CREATE TABLE `client_users` (
  `userID` int(11) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `emailID` varchar(30) NOT NULL,
  `mobileNumber` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_users`
--

INSERT INTO `client_users` (`userID`, `firstName`, `lastName`, `emailID`, `mobileNumber`, `password`) VALUES
(14, 'adam', 'adam', 'adam@gmail.com', '45464', '1234'),
(15, 'Yam', 'prab', 'yam338@gmail.com', '45464', '123'),
(16, 'df', 'dd', 'example3@gmail.com', '45464', '123'),
(19, 'mitchel', 'stark', 'stark@gmail.com', '954652132', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(30) NOT NULL,
  `room` varchar(30) NOT NULL,
  `category_id` int(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = Available , 1= Unvailables'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room`, `category_id`, `status`) VALUES
(1, 'Room-1', 1, 1),
(3, 'Room-2', 2, 1),
(4, 'Room-3', 3, 1),
(7, 'Room-4', 4, 1),
(8, 'Room-5', 1, 1),
(9, 'Room-6', 2, 1),
(10, 'Room-7', 3, 1),
(11, 'Room-8', 4, 1),
(12, 'Room-9', 1, 0),
(13, 'Room-10', 2, 0),
(14, 'Room-11', 3, 0),
(15, 'Room-12', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `room_categories`
--

CREATE TABLE `room_categories` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `price` float NOT NULL,
  `cover_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_categories`
--

INSERT INTO `room_categories` (`id`, `name`, `price`, `cover_img`) VALUES
(2, 'Deluxe Room', 599, 'room3.jpg'),
(3, 'Single Room', 199, 'singlebed.webp'),
(4, 'Family Room', 399, 'room1.jpg'),
(6, 'Twin Bed Room', 299, 'rooomw.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(30) NOT NULL,
  `hotel_name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `cover_img` text NOT NULL,
  `about_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `hotel_name`, `email`, `contact`, `cover_img`, `about_content`) VALUES
(1, 'AMS Hotel', 'AMShotel@gmail.com', '+012 651 4758', '1600478940_hotel-coverZZ.jpg', '&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;/p&gt;&lt;span style=&quot;font-size:24px;color:rgb(0,255,0);text-align: center; background: transparent; position: relative;&quot;&gt;&lt;p style=&quot;text-align: center; background: transparent; position: relative; color: rgb(0, 255, 0); font-size: 24px;&quot;&gt;&lt;font color=&quot;#000000&quot; face=&quot;Open Sans, Arial, sans-serif&quot; style=&quot;text-align: center; background: transparent; position: relative; color: rgb(0, 255, 0); font-size: 24px;&quot;&gt;&lt;b style=&quot;text-align: center; background: transparent; position: relative; color: rgb(0, 255, 0); font-size: 24px;&quot;&gt;Welcome to Sahithi Saisree Hotel&lt;/b&gt;&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center; background: transparent; position: relative; color: rgb(0, 255, 0); font-size: 24px;&quot;&gt;&lt;font color=&quot;#000000&quot; face=&quot;Open Sans, Arial, sans-serif&quot; style=&quot;color: rgb(0, 255, 0); font-size: 24px;&quot;&gt;&lt;b style=&quot;color: rgb(0, 255, 0); font-size: 24px;&quot;&gt;All the rooms have en-suite facilities, with its own shower and toilet facilities making it a perfect place to stay. The beds have curtains and panels ensuring that your stay is private and comfortable.&lt;/b&gt;&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center; background: transparent; position: relative; color: rgb(0, 255, 0); font-size: 24px;&quot;&gt;&lt;font color=&quot;#000000&quot; face=&quot;Open Sans, Arial, sans-serif&quot; style=&quot;color: rgb(0, 255, 0); font-size: 24px;&quot;&gt;&lt;b style=&quot;color: rgb(0, 255, 0); font-size: 24px;&quot;&gt;Some hotels classify rooms by the number or size of the beds in the room. However, guests should note that hotels still have restrictions on how many guests are allowed per room.&lt;/b&gt;&lt;/font&gt;&lt;/p&gt;&lt;/span&gt;&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1=admin , 2 = staff'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `type`) VALUES
(1, 'Administrator', 'admin', 'admin123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checked`
--
ALTER TABLE `checked`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Email` (`Email`);

--
-- Indexes for table `client_users`
--
ALTER TABLE `client_users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `emailID` (`emailID`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checked`
--
ALTER TABLE `checked`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `client_users`
--
ALTER TABLE `client_users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checked`
--
ALTER TABLE `checked`
  ADD CONSTRAINT `Fk_emailid` FOREIGN KEY (`Email`) REFERENCES `client_users` (`emailID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
