-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2017 at 07:01 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wooden-hanger`
--

-- --------------------------------------------------------

--
-- Table structure for table `guest_customers`
--

CREATE TABLE `guest_customers` (
  `guest_id` int(11) NOT NULL,
  `guest_firstname` varchar(255) NOT NULL,
  `guest_lastname` varchar(255) NOT NULL,
  `guest_number` int(24) NOT NULL,
  `guest_email` varchar(24) NOT NULL,
  `guest_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest_customers`
--

INSERT INTO `guest_customers` (`guest_id`, `guest_firstname`, `guest_lastname`, `guest_number`, `guest_email`, `guest_address`) VALUES
(1, '', '', 0, '', 'Quezon City'),
(2, '', '', 0, '', 'naga city'),
(3, '', '', 0, '', 'Legazpi City'),
(4, '', '', 0, '', 'Naga City'),
(5, 'swaggy', 'swaggy', 1234567, 'swaggy', 'quezon city'),
(6, 'mark', 'dollano', 123456789, 'ajsodjaksdj', 'quezon city'),
(7, 'markmark', 'dollano', 123456789, 'asdjhajshd', 'quezon city'),
(8, 'hahahaha', 'hahahaha', 123456789, 'jahsdjsad', 'quezon city'),
(9, 'hasjdhjahsd', 'jhajshdjahs', 123456789, 'jahsjdhajshd', 'quezon city'),
(10, 'jhjashd', 'ajkhdakjhs', 123456789, 'jashdjkahd', 'quezon city'),
(11, 'ajsdhkjadhskjahs', 'asjhdaksjhdasd', 12456789, 'ajsdhjkahds', 'quezon city'),
(12, 'mark', 'dollano', 1231321, 'jashdkjahdas', 'quezon city'),
(13, 'jhjkhsdkf', 'ajksdhkajshda', 12312312, 'akjhdkajsa', 'asjkdhaskjdh'),
(14, '', '', 0, '', ''),
(15, 'mark', 'askdlasd', 123454566, 'aslkdlaskd', 'quezon city'),
(16, 'mark', 'dollano', 1234564789, 'asldklasd', 'naga city'),
(17, 'ppppppppppp', 'pppppppppppppp', 12345789, 'pppppppppppppp', 'quezon city'),
(18, 'dora', 'dora', 123456798, 'dora', 'quezon city'),
(19, 'ppppppppppppppppppppppppppppppppppppp', 'ppppppppppppppppppppppppppppppppppppp', 123456789, 'asdapsodaosd', 'quezon city'),
(20, 'ppppppppppppppppppppppppppppppppppppp', 'ppppppppppppppppppppppppppppppppppppp', 123456789, 'asdapsodaosd', 'quezon city'),
(21, 'hasdhasdkjhasd', 'askjhdkajhdskjadhs', 123456789, 'asjhdakjshdaksjh', 'quezon city'),
(22, 'hasdhasdkjhasd', 'askjhdkajhdskjadhs', 123456789, 'asjhdakjshdaksjh', 'quezon city'),
(23, 'hagshdasdghj', 'ashgdjghasd', 123123123, 'ahsgdashgd', 'quezon city'),
(24, '12', '12', 12, '12', '12'),
(25, '123', '123', 1231231231, '123', '123'),
(26, '123', '123', 123123123, '123', '123'),
(27, '123', '132', 123456789, '123', '123'),
(28, 'pj', 'pj', 0, 'pj', 'pj'),
(29, 'pj', 'pj', 0, 'pj', 'pj'),
(30, 'asdf', 'asdf', 0, 'asdf', 'asdf'),
(31, '', '', 0, '', ''),
(32, '', '', 0, '', ''),
(33, '', '', 0, '', ''),
(34, '', '', 0, '', ''),
(35, 'qweqwe', 'qweqwe', 123123, '123213', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_description` varchar(255) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_image_1` varchar(255) NOT NULL,
  `item_image_2` varchar(255) NOT NULL,
  `item_image_3` varchar(255) NOT NULL,
  `item_image_4` varchar(255) NOT NULL,
  `item_image_5` varchar(255) NOT NULL,
  `item_price` int(20) NOT NULL,
  `item_category` varchar(255) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_brand` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_description`, `item_image`, `item_image_1`, `item_image_2`, `item_image_3`, `item_image_4`, `item_image_5`, `item_price`, `item_category`, `item_quantity`, `item_brand`) VALUES
(24, 'HERSCHEL CAMO ', 'HERSCHEL CAMO', 'item_images/herschel_black.png', '', '', '', '', '', 3500, 'Bags', 5, 'Herschel'),
(31, 'MICHAEL KORS WATCH', 'WATCH', 'item_images/michaelkors_watch2.png', '', '', '', '', '', 3500, 'Watches', 5, 'Michael Kors'),
(32, 'HERSCHEL LUCITE', 'LOREM IPSUM DOLOR AMET', 'item_images/herschel_lucite.jpg', '', '', '', '', '', 3500, 'Bags', 5, 'Herschel'),
(33, 'HERSCHEL CROSSHATCH', 'CROSSHATCH', 'item_images/herschel_crosshatch.jpg', '', '', '', '', '', 3000, 'Bags', 5, 'Herschel'),
(34, 'GSHOCK 1', 'LOREM IPSUM', 'item_images/gshock2.png', '', '', '', '', '', 3800, 'Watches', 5, 'G-SHOCK');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `guest_id` int(11) DEFAULT NULL,
  `order_date` date NOT NULL,
  `required_date` date DEFAULT NULL,
  `shipped_date` date DEFAULT NULL,
  `order_status` varchar(255) DEFAULT NULL,
  `shipping_address` varchar(255) NOT NULL,
  `grand_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `guest_id`, `order_date`, `required_date`, `shipped_date`, `order_status`, `shipping_address`, `grand_total`) VALUES
(21, NULL, NULL, '0000-00-00', NULL, NULL, NULL, 'asdfasdf', 0),
(22, NULL, NULL, '0000-00-00', NULL, NULL, NULL, 'Mandaluyong City', 0),
(23, NULL, NULL, '0000-00-00', NULL, NULL, NULL, 'Quezon City', 0),
(24, NULL, NULL, '0000-00-00', NULL, NULL, NULL, 'Mandaluyong City', 10500),
(25, NULL, NULL, '0000-00-00', NULL, NULL, NULL, 'Mandaluyong City', 10500),
(26, NULL, NULL, '2017-07-10', NULL, NULL, NULL, 'Quezon City', 3500),
(27, NULL, NULL, '2017-07-10', NULL, NULL, NULL, 'Quezon City', 3500),
(28, NULL, NULL, '2017-07-13', NULL, NULL, NULL, 'Metro Manila', 7000),
(29, NULL, NULL, '2017-07-13', NULL, NULL, NULL, 'Metro Manila', 7000),
(30, NULL, NULL, '2017-07-13', NULL, NULL, NULL, 'Metro Manila', 17500),
(31, NULL, NULL, '2017-07-13', NULL, NULL, NULL, 'Metro Manila', 17500),
(32, NULL, NULL, '0000-00-00', NULL, NULL, NULL, 'quezon city', 7000),
(33, NULL, NULL, '2017-07-10', NULL, NULL, NULL, 'Quezon City', 10500),
(34, NULL, NULL, '2017-12-25', NULL, NULL, NULL, 'naga city', 17500),
(35, NULL, NULL, '2017-07-10', NULL, NULL, NULL, 'Legazpi City', 7000),
(36, NULL, NULL, '2017-12-25', NULL, NULL, NULL, 'Naga City', 14000),
(37, NULL, NULL, '2017-10-05', NULL, NULL, NULL, 'quezon city', 18000),
(38, NULL, NULL, '2017-10-05', NULL, NULL, NULL, 'quezon city', 15000),
(39, NULL, NULL, '0000-00-00', NULL, NULL, NULL, 'quezon city', 13000),
(40, NULL, NULL, '2017-10-05', NULL, NULL, NULL, 'quezon city', 10500),
(41, NULL, NULL, '0000-00-00', NULL, NULL, NULL, 'quezon city', 16500),
(42, NULL, NULL, '2017-10-05', NULL, NULL, NULL, 'quezon city', 3000),
(43, NULL, NULL, '2017-12-25', NULL, NULL, NULL, 'quezon city', 6000),
(44, NULL, NULL, '2017-12-24', NULL, NULL, NULL, 'quezon city', 10500),
(45, NULL, NULL, '0000-00-00', NULL, NULL, NULL, 'asjkdhaskjdh', 7000),
(46, NULL, NULL, '0000-00-00', NULL, NULL, NULL, '', 14000),
(47, NULL, NULL, '2017-12-25', NULL, NULL, NULL, 'quezon city', 16000),
(48, NULL, NULL, '0000-00-00', NULL, NULL, NULL, 'naga city', 24000),
(49, NULL, NULL, '2017-12-25', NULL, NULL, NULL, 'quezon city', 56000),
(50, NULL, NULL, '2017-12-25', NULL, NULL, NULL, 'quezon city', 6000),
(51, NULL, NULL, '2017-12-25', NULL, NULL, NULL, 'quezon city', 16500),
(52, NULL, NULL, '2017-12-25', NULL, NULL, NULL, 'quezon city', 16500),
(53, NULL, NULL, '2017-12-25', NULL, NULL, NULL, 'quezon city', 16500),
(54, NULL, NULL, '2017-12-25', NULL, NULL, NULL, 'quezon city', 16500),
(55, NULL, NULL, '2017-12-25', NULL, NULL, NULL, 'quezon city', 16500),
(56, NULL, NULL, '2017-12-25', NULL, NULL, NULL, '12', 16500),
(57, NULL, NULL, '2017-12-25', NULL, NULL, NULL, '123', 7000),
(58, NULL, NULL, '2017-12-25', NULL, NULL, NULL, '123', 17500),
(59, NULL, NULL, '2017-12-25', NULL, NULL, NULL, '123', 21000),
(60, NULL, NULL, '0000-00-00', NULL, NULL, NULL, 'pj', 21000),
(61, NULL, NULL, '0000-00-00', NULL, NULL, NULL, 'pj', 21000),
(62, NULL, NULL, '0000-00-00', NULL, NULL, NULL, 'asdf', 21000),
(63, NULL, NULL, '0000-00-00', NULL, NULL, NULL, '', 20500),
(64, NULL, NULL, '0000-00-00', NULL, NULL, NULL, '', 20500),
(65, NULL, NULL, '0000-00-00', NULL, NULL, NULL, '', 20500),
(66, NULL, NULL, '0000-00-00', NULL, NULL, NULL, '', 31500),
(67, NULL, NULL, '0000-00-00', NULL, NULL, NULL, '', 28000),
(68, NULL, NULL, '0000-00-00', NULL, NULL, NULL, '', 7000),
(69, NULL, NULL, '0000-00-00', NULL, NULL, NULL, '', 7000),
(70, NULL, NULL, '0000-00-00', NULL, NULL, NULL, '', 7000),
(71, NULL, NULL, '0000-00-00', NULL, NULL, NULL, '', 42000),
(72, NULL, NULL, '0000-00-00', NULL, NULL, NULL, '', 24500),
(73, NULL, NULL, '0000-00-00', NULL, NULL, NULL, '', 7000),
(74, NULL, NULL, '0000-00-00', NULL, NULL, NULL, '', 7000),
(75, NULL, NULL, '0000-00-00', NULL, NULL, NULL, '', 14000),
(76, NULL, NULL, '0000-00-00', NULL, NULL, NULL, '', 7000),
(77, NULL, NULL, '2017-12-25', NULL, NULL, NULL, 'asdasd', 7000),
(78, NULL, NULL, '0000-00-00', NULL, NULL, NULL, '', 17500),
(79, NULL, NULL, '0000-00-00', NULL, NULL, NULL, '', 7000),
(80, NULL, NULL, '0000-00-00', NULL, NULL, NULL, '', 7000),
(81, NULL, NULL, '0000-00-00', NULL, NULL, NULL, '', 0),
(82, NULL, NULL, '0000-00-00', NULL, NULL, NULL, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_details_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `order_quantity` int(11) NOT NULL,
  `item_price` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_details_id`, `order_id`, `item_id`, `order_quantity`, `item_price`, `sub_total`) VALUES
(24, 66, 31, 2, 2500, 5000),
(27, 67, 31, 3, 2500, 7500),
(30, 70, 24, 2, 3500, 7000),
(32, 71, 24, 6, 3500, 21000),
(34, 72, 24, 2, 3500, 7000),
(35, 72, 31, 2, 3500, 7000),
(36, 73, 31, 2, 3500, 7000),
(37, 74, 31, 2, 3500, 7000),
(40, 77, 31, 2, 3500, 7000),
(42, 78, 31, 2, 3500, 7000),
(43, 78, 32, 2, 3500, 7000),
(45, 80, 31, 2, 3500, 7000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(24) NOT NULL,
  `user_username` varchar(24) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_number` int(24) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_role` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_firstname`, `user_lastname`, `user_email`, `user_username`, `user_password`, `user_number`, `user_address`, `user_role`) VALUES
(23, 'admin', 'admin', 'admin', 'admin', 'e5e9fa1ba31ecd1ae84f75caaa474f3a663f05f4', 0, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guest_customers`
--
ALTER TABLE `guest_customers`
  ADD PRIMARY KEY (`guest_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `guest_id` (`guest_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_details_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `order_details_ibfk_2` (`item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guest_customers`
--
ALTER TABLE `guest_customers`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`guest_id`) REFERENCES `guest_customers` (`guest_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
