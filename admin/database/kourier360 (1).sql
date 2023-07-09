-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 11:14 PM
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
-- Database: `kourier360`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `branch_id` int(11) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `branch_city` varchar(100) NOT NULL,
  `branch_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`branch_id`, `branch_name`, `branch_city`, `branch_address`) VALUES
(1, 'KRK-1', 'Karachi', 'Sindh'),
(2, 'KRK-2', 'Lahore', 'Punjab'),
(3, 'KRF-3', 'Faisalabad', 'Punjab'),
(4, 'KRR-4', 'Rawalpindi', 'Punjab'),
(5, 'KRM-5', 'Multan', 'Punjab'),
(6, 'KRH-6', 'Hyderabad', 'Sindh'),
(7, 'KRG-7', 'Gujranwala', 'Punjab'),
(8, 'KRP-8', 'Peshawar', 'Nothwest Border Prov'),
(9, 'KRQ-9', 'Quetta', 'Baluchistan'),
(10, 'KRI-10', 'Islamabad', 'Islamabad'),
(11, 'KRS-11', 'Sargodha', 'Punjab'),
(12, 'KRS-12', 'Sialkot', 'Punjab'),
(13, 'KRB-13', 'Bahawalpur', 'Punjab'),
(14, 'KRS-14', 'Sukkur', 'Sindh'),
(15, 'KRJ-15', 'Jhang', 'Punjab'),
(16, 'KRS-16', 'Sheikhupura', 'Punjab'),
(17, 'KRL-17', 'Larkana', 'Sindh'),
(18, 'KRG-18', 'Gujrat', 'Punjab'),
(19, 'KRM-19', 'Mardan', 'Nothwest Border Prov'),
(20, 'KRK-20', 'Kasur', 'Punjab'),
(21, 'KRR-21', 'Rahim Yar Khan', 'Punjab'),
(22, 'KRS-22', 'Sahiwal', 'Punjab'),
(23, 'KRO-23', 'Okara', 'Punjab'),
(24, 'KRW-24', 'Wah', 'Punjab'),
(25, 'KRD-25', 'Dera Ghazi Khan', 'Punjab'),
(26, 'KRM-26', 'Mirpur Khas', 'Sind'),
(27, 'KRN-27', 'Nawabshah', 'Sind'),
(28, 'KRM-28', 'Mingora', 'Nothwest Border Prov'),
(29, 'KRC-29', 'Chiniot', 'Punjab'),
(30, 'KRK-30', 'Kamoke', 'Punjab'),
(31, 'KRM-31', 'Mandi Burewala', 'Punjab'),
(32, 'KRJ-32', 'Jhelum', 'Punjab'),
(33, 'KRS-33', 'Sadiqabad', 'Punjab'),
(34, 'KRJ-34', 'Jacobabad', 'Sind'),
(35, 'KRS-35', 'Shikarpur', 'Sind'),
(36, 'KRK-36', 'Khanewal', 'Punjab'),
(37, 'KRH-37', 'Hafizabad', 'Punjab'),
(38, 'KRK-38', 'Kohat', 'Nothwest Border Prov'),
(39, 'KRM-39', 'Muzaffargarh', 'Punjab'),
(40, 'KRK-40', 'Khanpur', 'Punjab'),
(41, 'KRG-41', 'Gojra', 'Punjab'),
(42, 'KRB-42', 'Bahawalnagar', 'Punjab'),
(43, 'KRM-43', 'Muridke', 'Punjab'),
(44, 'KRP-44', 'Pak Pattan', 'Punjab'),
(45, 'KRA-45', 'Abottabad', 'Nothwest Border Prov'),
(46, 'KRT-46', 'Tando Adam', 'Sind'),
(47, 'KRJ-47', 'Jaranwala', 'Punjab'),
(48, 'KRK-48', 'Khairpur', 'Sind'),
(49, 'KRC-49', 'Chishtian Mandi', 'Punjab'),
(50, 'KRD-50', 'Daska', 'Punjab'),
(111, 'KR-HOF', 'KHI', 'block 5, Sindh');

-- --------------------------------------------------------

--
-- Table structure for table `customer_login`
--

CREATE TABLE `customer_login` (
  `cust_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_login`
--

INSERT INTO `customer_login` (`cust_id`, `username`, `email`, `password`, `phone`) VALUES
(1, 'ali fahad', 'ali@gmail.com', 'ali123', 123456789),
(3, 'areeba khan', 'areeba@gmail.com', '12345', 2147483647),
(4, 'Muhammad Arsalan', 'arsalan22@gmail.com', '112233', 2147483647),
(5, 'erum', 'erum@gmal.com', '0987654', 2147483647),
(8, 'qirat', 'qirat@gmail.com', '2334567899', 2147483647),
(10, 'imran', 'imran@gmail.com', 'imran123', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `s_name` varchar(255) DEFAULT NULL,
  `s_email` varchar(255) DEFAULT NULL,
  `s_address` varchar(255) DEFAULT NULL,
  `s_phone` int(11) DEFAULT NULL,
  `s_city` int(11) DEFAULT NULL,
  `r_name` varchar(255) DEFAULT NULL,
  `r_email` varchar(255) DEFAULT NULL,
  `r_address` varchar(255) DEFAULT NULL,
  `r_phone` int(11) DEFAULT NULL,
  `r_city` varchar(255) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `courier_type` varchar(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `o_userid` int(11) DEFAULT NULL,
  `price_before_tax` int(11) NOT NULL,
  `tax_included` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `delivery_date` date DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `cust_id`, `s_name`, `s_email`, `s_address`, `s_phone`, `s_city`, `r_name`, `r_email`, `r_address`, `r_phone`, `r_city`, `weight`, `courier_type`, `order_date`, `o_userid`, `price_before_tax`, `tax_included`, `total_price`, `delivery_date`, `status`) VALUES
(11023461, 3, 'AREEBA KHAN', 'areeba@gmail.com', 'nazimabad', 45645773, 12, 'zoha', 'zoha@gmail.com', 'north nazimabad', 335467775, 'karachi', 15, 'Document', '2022-11-02 19:21:23', 1, 0, 0, 1000, '2022-11-18', 'In Process'),
(11023462, 3, 'AREEBA KHAN', 'areeba@gmail.com', 'nazimabad', 56633335, 12, 'zoha', 'aiman@gmail.com', 'north nazimabad', 5547656, 'karachi', 12, 'Document', '0000-00-00 00:00:00', NULL, 0, 0, 900, '2022-11-18', 'In Process'),
(11023463, 1, 'AREEBA KHAN', 'ali@gmail.com', 'nazimbad', 2147483647, 12, 'zoha', 'junaid@gmail.com', 'gulberg', 2147483647, 'karachi', 12, 'Other', '2022-11-11 18:17:33', NULL, 0, 0, 900, '2022-11-18', 'Delivered'),
(11023465, 1, 'AREEBA KHAN', 'areeba@gmail.com', 'DHA', 2147483647, 12, 'zoha', 'zoha@gmail.com', 'Clifton', 2147483647, 'karachi', 13, 'Other', '2022-11-11 18:58:12', NULL, 0, 0, 920, '2022-11-18', 'In Process'),
(11023467, 4, 'Muhammad Arsalan', 'arsalan22@gmail.com', 'PECHS', 2147483647, 1, 'maheen', 'maheen@gmail.com', 'Sikandarabad', 2147483647, 'lahore', 7, 'Other', '2022-11-11 19:28:02', NULL, 0, 0, 400, '2022-11-19', 'Canceled'),
(11023468, 8, 'qirat', 'qirat@gmail.com', 'block 5 ph colony', 2147483647, 11, 'MAHEEN RIZWAN', 'maheen@gmail.com', 'Clifton', 2147483647, 'karachi', 15, 'Other', '2022-11-13 20:58:55', NULL, 0, 0, 400, '2022-11-21', 'Shipped'),
(11023469, 10, 'imran', 'imran@gmail.com', 'agha road', 2147483647, 32, 'sana', 'sana@gmail.com', 'main road block 6 ', 2147483647, 'multan', 3, 'Document', '2022-11-13 21:59:59', NULL, 0, 0, 450, '2022-11-24', 'In Process');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `branch` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `username`, `phone`, `email`, `password`, `role`, `branch`) VALUES
(1, 'Ruwaiba', 'Jawaria', 'ruwaiba', 1234567890, 'ruwaiba02@gmail.com', '12345', 1, 111),
(3, 'Zoha', 'Baig', 'zoha', 1234567890, 'baigzoha02@gmail.com', 'zoha123', 1, 111),
(4, 'Muhammad', 'Bilal', 'bilal', 1234567890, 'wickybilal99@gmail.com', 'bilal123', 1, 111),
(5, 'Zunaira', 'Jawaid', 'zunaira', 2147483647, 'zunaira.0jawaid@gmail.com', '46552872', 0, 43),
(6, 'Muhammed', 'Arsalan', 'arsalan', 2147483647, 'muhammed.1arsalan@gmail.com', '96669728', 0, 17),
(7, 'Faraz', 'Rehman', 'faraz', 2147483647, 'faraz.2rehman@gmail.com', '1900718', 0, 22),
(8, 'Muhammed', 'Musraqeem', 'musraqeem', 2147483647, 'muhammed.0musraqeem@gmail.com', '45776405', 0, 15),
(9, 'Muhammed', 'Naveed', 'naveed', 2147483647, 'muhammed.1naveed@gmail.com', '73426134', 0, 50),
(10, 'Syed', 'Irfan', 'syed', 2147483647, 'syed.2irfan@gmail.com', '99217422', 0, 24),
(11, 'Abdul', 'Hanif', 'abdul', 2147483647, 'abdul.0hanif@gmail.com', '29978668', 0, 46),
(12, 'Shareeq', 'Ahmed', 'shareeq', 2147483647, 'shareeq.1ahmed@gmail.com', '61769518', 0, 30),
(13, 'Ishmal', 'Zubairi', 'ishmal', 2147483647, 'ishmal.2zubairi@gmail.com', '4660038', 0, 27),
(15, 'Shafqat', 'Ali', 'shafqat', 2147483647, 'shafqat.1ali@gmail.com', '25993977', 0, 16),
(16, 'Abdul', 'Wahab', 'abdul', 2147483647, 'abdul.2wahab@gmail.com', '55844596', 0, 50),
(18, 'Sehar ', 'khan', 'sehar ', 2147483647, 'sehar.1khan@gmail.com', '20857899', 0, 48),
(19, 'Rutaba', 'Qamal', 'rutaba', 2147483647, 'rutaba.2qamal@gmail.com', '1789494', 0, 45),
(20, 'Ayaz', 'Qazmi', 'ayaz', 2147483647, 'ayaz.0qazmi@gmail.com', '9124623', 0, 38),
(21, 'Ahmed', 'Khan', 'ahmed', 2147483647, 'ahmed.1khan@gmail.com', '6714709', 0, 29),
(22, 'Shiza', 'Kanwal', 'shiza', 2147483647, 'shiza.2kanwal@gmail.com', '25455836', 0, 30),
(23, 'Aisha', 'Irfan', 'aisha', 2147483647, 'aisha.0irfan@gmail.com', '79388696', 0, 4),
(24, 'Munavar', 'Jahan', 'munavar', 2147483647, 'munavar.1jahan@gmail.com', '23925029', 0, 13),
(25, 'Hassan', 'Alam', 'hassan', 2147483647, 'hassan.2alam@gmail.com', '55776696', 0, 15),
(26, 'Asad', 'Khan', 'asad', 2147483647, 'asad.0khan@gmail.com', '8250192', 0, 31),
(27, 'Shakeel', 'Shazad', 'shakeel', 2147483647, 'shakeel.1shazad@gmail.com', '23697553', 0, 38),
(28, 'Muhammed', 'Rehman', 'rehman', 2147483647, 'muhammed.2rehman@gmail.com', '37210987', 0, 6),
(29, 'Shahzaib', 'Khan', 'shahzaib', 2147483647, 'shahzaib.0khan@gmail.com', '15552821', 0, 23),
(30, 'Rafay', 'Khan', 'rafay', 2147483647, 'rafay.1khan@gmail.com', '71570766', 0, 43),
(31, 'Ali', 'Hussain', 'ali', 2147483647, 'ali.2hussain@gmail.com', '54901136', 0, 20),
(32, 'Muhammed', 'Ayan', 'ayan', 2147483647, 'muhammed.0ayan@gmail.com', '66533794', 0, 32),
(33, 'Wajiha', 'Kashif', 'wajiha', 2147483647, 'wajiha.1kashif@gmail.com', '6172714', 0, 16),
(35, 'Abdul', 'Kabeer', 'kabeer', 214748364, 'abdul.1kabeer@gmail.com', '3546655', 0, 10),
(36, 'Arif', 'Hussain', 'arif', 214748364, 'arif.0hussain@gmail.com', '55611401', 0, 30),
(37, 'Anabia', 'Navaid', 'Anab', 2147483647, 'anab123@gmail.com', '0123678', 0, 12),
(38, 'Aimon', 'Jawed', 'Aemy', 2147483647, 'aimonjawed1289@gmail.com', 'aimon123', 1, 111);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `customer_login`
--
ALTER TABLE `customer_login`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD UNIQUE KEY `o_userid` (`o_userid`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `s_city` (`s_city`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `branch` (`branch`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `customer_login`
--
ALTER TABLE `customer_login`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11023470;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer_login` (`cust_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`o_userid`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`s_city`) REFERENCES `branches` (`branch_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`branch`) REFERENCES `branches` (`branch_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
