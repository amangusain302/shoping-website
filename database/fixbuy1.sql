-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2022 at 08:29 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fixbuy`
--

-- --------------------------------------------------------

--
-- Table structure for table `bike_post`
--

CREATE TABLE `bike_post` (
  `pdt_id` int(10) NOT NULL,
  `user_id` int(23) NOT NULL,
  `seller_name` varchar(40) NOT NULL,
  `seller_phone` varchar(20) NOT NULL,
  `main_category` varchar(20) NOT NULL,
  `sub_category` varchar(20) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `model` varchar(20) NOT NULL,
  `year` int(5) NOT NULL,
  `km_driven` int(10) NOT NULL,
  `no_of_owner` varchar(10) NOT NULL,
  `ad_title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `set_price` int(10) NOT NULL,
  `pdt_image` varchar(40) NOT NULL,
  `pdt_image2` varchar(40) NOT NULL,
  `pdt_image3` varchar(40) NOT NULL,
  `pdt_image4` varchar(40) NOT NULL,
  `location` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `post_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bike_post`
--

INSERT INTO `bike_post` (`pdt_id`, `user_id`, `seller_name`, `seller_phone`, `main_category`, `sub_category`, `brand`, `model`, `year`, `km_driven`, `no_of_owner`, `ad_title`, `description`, `set_price`, `pdt_image`, `pdt_image2`, `pdt_image3`, `pdt_image4`, `location`, `status`, `post_date`) VALUES
(2, 29, 'test4', '2147483647', 'bikes', 'bikes', 'honda', 'VFR 1200 F', 2013, 70000, '1st', 'Honda VFR 1200 F', 'Honda VFR 1200 F \r\ngood in condition \r\nall service done\r\ntyers in good condition', 29999, 'b5.jpg', 'b5-1645702989.jpg', 'b5-1645702989.jpg', 'b5-1645702989.jpg', '2001155', 'approve', '2022-02-24'),
(3, 29, 'test4', '73649282', 'bikes', 'bikes', 'tvs', 'Star city plus', 2013, 50000, '1st', 'TVS star city plus', 'TVS star city plus \r\ngood condition \r\n', 20000, 'b2.jpg', 'b2-1645703215.jpg', 'b2-1645703215.jpg', 'b2-1645703215.jpg', '2001149', 'approve', '2022-02-24'),
(4, 29, 'test4', '454566353', 'bikes', 'bikes', 'yamaha', 'Crux', 2015, 48000, '1st', 'Yamaha Crux', 'Yamaha Crux black\r\ngood condition\r\ntyer is on service', 30000, 'b3-1645703449.jpg', 'b3-1645703450.jpg', 'b3-1645703450.jpg', 'b3-1645703450.jpg', '2001152', 'rejected', '2022-02-24'),
(5, 38, 'test5', '2147483647', 'bikes', 'bikes', 'hero-motorcycle', 'CD Deluxe', 2014, 60000, '1st', 'Hero CD Deluxe', 'Hero CD Deluxe black \r\ngood condition \r\n', 25000, 'b4-1645703695.jpg', 'b4-1645703695.jpg', 'b4-1645703695.jpg', 'b4-1645703695.jpg', '2001165', 'approve', '2022-02-24'),
(6, 115, 'aman', '2147483647', 'bikes', 'bikes', 'honda', 'dream yuga', 2016, 50000, '1st', 'honda dream yuga ', 'alright condition \r\noriginal tyers\r\none time service done\r\n2 year warranty \r\n', 30000, 'b5-1646286519.jpg', 'b5-1646286519.jpg', 'b4-1646286519.jpg', 'b4-1646286519.jpg', 'Delhi', 'approve', '2022-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `car_post`
--

CREATE TABLE `car_post` (
  `pdt_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `seller_name` varchar(30) NOT NULL,
  `seller_phone` varchar(15) NOT NULL,
  `main_category` varchar(20) NOT NULL,
  `sub_category` varchar(20) NOT NULL,
  `brand` varchar(40) NOT NULL,
  `model` varchar(40) NOT NULL,
  `variant` varchar(50) NOT NULL,
  `year` year(4) NOT NULL,
  `fuel` varchar(40) NOT NULL,
  `transmission` varchar(40) NOT NULL,
  `km_driven` int(15) NOT NULL,
  `no_of_owner` varchar(30) NOT NULL,
  `ad_title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `set_price` varchar(15) NOT NULL,
  `pdt_image` varchar(40) NOT NULL,
  `pdt_image2` varchar(40) NOT NULL,
  `pdt_image3` varchar(40) NOT NULL,
  `pdt_image4` varchar(40) NOT NULL,
  `location` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `post_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_post`
--

INSERT INTO `car_post` (`pdt_id`, `user_id`, `seller_name`, `seller_phone`, `main_category`, `sub_category`, `brand`, `model`, `variant`, `year`, `fuel`, `transmission`, `km_driven`, `no_of_owner`, `ad_title`, `description`, `set_price`, `pdt_image`, `pdt_image2`, `pdt_image3`, `pdt_image4`, `location`, `status`, `post_date`) VALUES
(17, 8, 'nadeem', '8826873623', 'cars', 'car', 'tata', 'indigo CS', 'CS LX TDI', 2015, 'petrol', 'manual', 40000, '1st', 'tata indigo CS CS LX TDI petrol', 'tata indigo CS CS LX TDI petrol \r\ngood in condition \r\npetrol\r\n2015', '200000', 'car1.jpeg', 'car1.jpg', 'car3.jpg', 'car4.jpg', '2007599', 'reject', '2022-02-24'),
(18, 8, 'nadeem', '893939923', 'cars', 'car', 'bajaj1', 'RE60', 'Qute CNG', 2012, 'CNG', 'manual', 50000, '1st', 'bajaj RE60 Qute CNG CNG manual', 'bajaj RE60 Qute CNG CNG manual\r\ngood condition\r\ntyer changed\r\ntime to time service', '500000', 'car1-1645686104.jpg', 'car3-1645686104.jpg', 'car6.jpg', 'car4-1645686104.jpg', '2001157', 'approve', '2022-02-24'),
(19, 11, 'test1', '837283832', 'cars', 'car', 'hyundai', 'Creta', '1.4 CRDi S Plus ', 2014, 'diesel', 'manual', 70000, '1st', 'Hyundai Creta 1.4 CRDi S Plus  diesel manual', 'Hyundai Creta 1.4 CRDi S Plus  diesel manual \r\ngood condition\r\nserviced gear box\r\nall service done\r\ntyer in good conditon', '200000', 'car6-1645687247.jpg', 'car1-1645687247.jpg', 'car2.jpg', 'car3-1645687247.jpg', '2001150', 'rejected', '2022-02-24'),
(20, 11, 'test1', '6477474847', 'cars', 'car', 'mahindra', 'Bolero power plus', 'SLX', 2011, 'petrol', 'manual', 100000, '1st', 'Mahindra Bolero power plus SLX petrol manual', 'Mahindra Bolero power plus SLX petrol manual\r\ngood condition ', '200000', 'car2-1645689791.jpg', 'car4-1645689791.jpg', 'car3-1645689791.jpg', 'car5.jpg', '2001148', 'approve', '2022-02-24'),
(21, 50, 'test6', '8483848347', 'cars', 'car', 'toyota', 'Etios Cross', '1.2 GX Edition', 2016, 'diesel', 'automatic', 30000, '1st', 'Toyota Etios Cross 1.2 GX Edition diesel automatic', 'Toyota Etios Cross 1.2 GX Edition diesel automatic\r\ngood condition\r\none service is left', '600000', 'car1-1645690320.jpg', 'car3-1645690320.jpg', 'car5-1645690320.jpg', 'car4-1645690320.jpg', '2001154', 'approve', '2022-02-24'),
(22, 8, 'nadeem', '9494939399', 'cars', 'cars', 'maruti-suzuki', 'Swift ZXI plus', 'AGS Dual tone ', 2019, 'petrol', 'mannual', 15000, '1st', 'maruti suzuki swift ZXI Plus AGS Dual tone ', 'good in condition\r\n5 seater\r\n22km/L\r\nHatchback\r\n268L\r\n37L petrol tank\r\ntyers in good condition', '555000', 'maruti.jpg', 'maruti-1646545978.jpg', 'maruti-1646545978.jpg', 'maruti-1646545978.jpg', 'Punjab', 'approve', '2022-03-06');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `covo_id` int(20) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `covo_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`covo_id`, `first_name`, `last_name`, `email`, `mobile_no`, `message`, `covo_time`) VALUES
(1, 'aman', 'Gusain', 'aman@fixebuy.com', '2147483647', 'hello sir, here i am aman gusain i have so many issue in your site.', '2022-02-24 18:21:29'),
(6, 'hitesh', 'chaudary', 'hitesh@fixbuy.com', '2147483647', '                \r\n            testing on , testing on', '2022-03-07 17:16:43'),
(8, 'garv', 'me', 'garvmehta@gmail.com', '2147483647', 'hello, this side garv mehta \r\n            ', '2022-03-12 12:01:21');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `user_id` int(11) NOT NULL,
  `req_id` int(11) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `location` varchar(100) NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `Date/Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`user_id`, `req_id`, `first_name`, `last_name`, `email`, `phone`, `location`, `pincode`, `Date/Time`) VALUES
(22, 1, 'test', '2', 'test2@gmail.com', '9383848384', 'vinod nagar, delhi', '110092', '2022-03-11 11:57:28'),
(24, 2, 'aman', 'Gusain', 'test3@fixebuy.com', '973287322', 'Lodhi colony, Delhi', '110002', '2022-03-11 13:00:24'),
(8, 3, 'nadeem', 'choudhary', 'nadeem@gmail.com', '239293209', 'Krishna nagar', '110051', '2022-03-11 13:34:41'),
(8, 4, 'nadeem', 'choudhary', 'nadeem@gmail.com', '93929939', 'krishna ', '', '2022-03-11 13:40:08');

-- --------------------------------------------------------

--
-- Table structure for table `mobile_post`
--

CREATE TABLE `mobile_post` (
  `pdt_id` int(10) NOT NULL,
  `user_id` int(23) NOT NULL,
  `seller_name` varchar(40) NOT NULL,
  `seller_phone` varchar(20) NOT NULL,
  `main_category` varchar(20) NOT NULL,
  `sub_category` varchar(20) NOT NULL,
  `brand` varchar(40) NOT NULL,
  `model` varchar(40) NOT NULL,
  `year` int(5) NOT NULL,
  `ad_title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `set_price` int(10) NOT NULL,
  `pdt_image` varchar(40) NOT NULL,
  `pdt_image2` varchar(40) NOT NULL,
  `pdt_image3` varchar(40) NOT NULL,
  `pdt_image4` varchar(40) NOT NULL,
  `location` varchar(40) NOT NULL,
  `status` varchar(10) NOT NULL,
  `post_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobile_post`
--

INSERT INTO `mobile_post` (`pdt_id`, `user_id`, `seller_name`, `seller_phone`, `main_category`, `sub_category`, `brand`, `model`, `year`, `ad_title`, `description`, `set_price`, `pdt_image`, `pdt_image2`, `pdt_image3`, `pdt_image4`, `location`, `status`, `post_date`) VALUES
(2, 24, 'test3', '847377280', 'mobiles', 'mobiles', 'realme', 'narzo', 2020, 'Realme Narzo blue 4/128 ', 'Realme Narzo blue \r\n4 gb ram \r\n128 gb rom\r\nocta core processor\r\nlight in weight\r\n', 8000, '1-1645700072.jpg', '1.jpg', '1-1645700072.jpg', '1-1645700072.jpg', '2001149', 'approve', '2022-02-24'),
(4, 24, 'test3', '2147483647', 'mobiles', 'mobiles', 'oppo-phone', 'A74 5G', 2021, 'oppo A74 5G blue 3/64', 'oppo A74 5G blue \r\n3 ram \r\n64 rom\r\nblue in colour\r\n1 year warentty over', 10000, '5-1645699871.jpg', '5-1645699871.jpg', '5-1645699871.jpg', '5-1645699871.jpg', '2001169', 'approve', '2022-02-24'),
(5, 29, 'test4', '2147483647', 'mobiles', 'mobiles', 'vivo-phone', 'Y21', 2020, 'vivo Y21 4/64', 'vivo Y21 4/64\r\n4 gb ram\r\n64 gb rom\r\ngood in condition', 7000, '6.jpg', '6.jpg', '6.jpg', '6.jpg', '2001149', 'approve', '2022-02-24'),
(6, 29, 'test4', '2147483647', 'mobiles', 'mobiles', 'oppo-phone', 'note 7s', 2019, 'mi note 7s black 4 gb/128gb dual', 'mi note 7s black 4 gb/128gb dual', 8000, '2.jpg', '2-1645700387.jpg', '2-1645700387.jpg', '2-1645700387.jpg', '2001148', 'approve', '2022-02-24'),
(7, 50, 'test6', '2147483647', 'mobiles', 'mobiles', 'vivo', 'A7', 2020, 'vivo A7', 'ADDITIONAL VEHICLE INFORMATION: Color: White', 15000, '1.jpg', '3.jpg', '4.jpeg', '6.jpg', 'GAUTAM BUDH', 'approve', '2022-02-24'),
(12, 29, 'test4', '2147483647', 'mobiles', 'mobiles', 'iphone', '12 max pro', 2021, 'iphone 12 max pro black 4/128', 'iphone 12 max pro black colour\r\n4 gb ram \r\n128 gb Rom', 60000, '4.jpeg', '4-1645700610.jpeg', '4-1645700610.jpeg', '4-1645700610.jpeg', '2001152', 'approve', '2022-02-24'),
(13, 29, 'test4', '868685656', 'mobiles', 'mobiles', 'one-plus', '7T Plus', 2020, 'one plus 7T plus', 'one plus 7T plus\r\n8 gb ram \r\n128 gb rom\r\nblue', 30000, '3.jpg', '4.jpeg', '3-1645700929.jpg', '3-1645700929.jpg', '2001155', 'approve', '2022-02-24'),
(14, 8, 'nadeem', '834348934', 'mobiles', 'mobiles', 'mi-phone', '11i 5G', 2021, 'Xiaomi 11i 5G (Camo Green, 128 GB)  (6 GB RAM)', '\r\n6 GB RAM | 128 GB ROM | Expandable Upto 1 TB\r\n16.94 cm (6.67 inch) Full HD+ AMOLED Display\r\n108MP Rear Camera | 16MP Front Camera\r\n5160 mAh Li-Polymer Battery\r\nMediatek Dimensity 920 Processor', 20000, 'mi_front.jpeg', 'mi_back.jpeg', 'mi_left.jpeg', 'mi_side.jpeg', '2001152', 'reject', '2022-02-28');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `user_id` int(10) NOT NULL,
  `req_id` int(11) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `varient` varchar(30) NOT NULL,
  `insurance` varchar(70) NOT NULL,
  `location` varchar(60) NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `category` varchar(30) NOT NULL,
  `Date/Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`user_id`, `req_id`, `first_name`, `last_name`, `email`, `phone`, `brand`, `varient`, `insurance`, `location`, `pincode`, `category`, `Date/Time`) VALUES
(24, 1, 'aman', 'Gusain', 'test3@fixebuy.com', '973287322', ' tata', 'm20 beast', '5year 20000', 'Lodhi colony, Delhi', '110002', 'car', '2022-03-12 16:05:38'),
(8, 2, 'aman', 'gusain', 'amangusain302@gmail.com', '8383996381', ' toyota', 'innova crysta', '5 years 20000 rupee', 'NOIDA,U.P', '110092', 'bike', '2022-03-12 16:05:38');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `user_email` varchar(40) DEFAULT NULL,
  `password` varchar(40) NOT NULL,
  `role` int(5) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `adhaar_no` varchar(50) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'free',
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `user_email`, `password`, `role`, `phone`, `date_of_birth`, `address`, `adhaar_no`, `user_image`, `status`, `date_time`) VALUES
(4, 'garv1', 'garv@gmail.com', '8af5512aeeb8fe625f858b59b645aa07', 0, '342243525', '1998-08-01', 'noida sector 64 , UP', '234123442', 'garv.jpg', 'free', '2022-02-08 13:48:01'),
(6, 'aman2', 'john@example.com', 'fcea920f7412b5da7be0cf42b8c93759', 0, '345252444', '2000-03-17', 'Gaziabad, UP', '234134141', 'aman.jpg', 'free', '2022-02-08 14:08:55'),
(8, 'nadeem', 'nadeem@gmail.com', 'bd5a22248abda4831053b5c57a8ba41f', 0, '45634563', '2000-03-21', 'Nirman vihar, Delhi', '324124314', '', 'active', '2022-02-08 14:12:38'),
(11, 'test1', 'test1@fixebuy.com', '5a105e8b9d40e1329780d62ea2265d8a', 0, '423455244', '1998-08-27', 'Noida sector-62, UP', '425243242', 'test1.jpg', 'active', '2022-02-16 13:24:24'),
(22, 'test2', 'test2@fixebuy.com', 'ad0234829205b9033196ba818f7a872b', 0, '23424232', '2012-03-14', 'Noida sector-5, UP', '23423424', 'test2.jpg', 'active', '2022-02-19 17:14:58'),
(24, 'test3', 'test3@fixebuy.com', '8ad8757baa8564dc136c1e07507f4a98', 0, '973287322', '2001-07-07', 'sector 85 , Gurugram, haryana', '923982382', 'test3.jpg', 'active', '2022-02-19 18:04:23'),
(29, 'test4', 'test4@fixbuy.com', '86985e105f79b95d6bc918fb45ec7727', 0, '0', NULL, '', '0', '', 'free', '2022-02-19 18:25:07'),
(38, 'test5', 'test5@fixbuy.com', 'e3d704f3542b44a621ebed70dc0efe13', 0, '0', NULL, '', '0', '', 'free', '2022-02-20 19:27:54'),
(50, 'test6', 'test6@fixbuy.com', '4cfad7076129962ee70c36839a1e3e15', 0, '0', NULL, '', '0', '', 'free', '2022-02-20 22:46:33'),
(51, 'test7', 'test7@fixebuy.com', 'b04083e53e242626595e2b8ea327e525', 0, '3232344', '2000-06-23', 'Mandawali, Delhi', '23234234', 'waldemar-brandt-s3EjzLRA4Yw-unsplash-1646824135.jpg', 'free', '2022-02-28 11:05:04'),
(63, 'test8', 'test8@fixebuy.com', '5e40d09fa0529781afd1254a42913847', 0, '0', NULL, '', '0', '', 'active', '2022-02-28 11:35:47'),
(101, 'test9', 'test9@fixebuy.com', '739969b53246b2c727850dbb3490ede6', 0, '2147483647', '1998-11-19', '', '2147483647', 'test2-1646824280.jpg', 'free', '2022-02-28 15:14:51'),
(103, 'admin', 'admin@fixbuy.com', '21232f297a57a5a743894a0e4a801fc3', 1, '0', NULL, '', '0', '', 'free', '2022-03-01 17:48:05'),
(113, 'admin2', 'admin2@fixbuy.com', 'c84258e9c39059a89ab77d846ddab909', 1, '0', NULL, '', '0', '', 'free', '2022-03-02 12:44:57'),
(114, 'admin3', 'admin3@fixbuy.com', '32cacb2f994f6b42183a1300d9a3e8d6', 1, '0', NULL, '', '0', '', 'free', '2022-03-02 12:47:43'),
(115, 'aman', 'aman@fixbuy.com', 'ccda1683d8c97f8f2dff2ea7d649b42c', 0, '0', NULL, '', '0', '', 'free', '2022-03-03 11:14:27'),
(118, 'sahil', 'sahil@fixbuy.com', '1006f0ae5a7ece19828a67ac62288e05', 0, '2147483647', '1997-11-19', 'pusph vihar , delhi', '2147483647', 'test2-1646824280-1647024499-1647024529-1647024601.jpg', 'free', '2022-03-06 11:27:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bike_post`
--
ALTER TABLE `bike_post`
  ADD PRIMARY KEY (`pdt_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `car_post`
--
ALTER TABLE `car_post`
  ADD PRIMARY KEY (`pdt_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`covo_id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`req_id`),
  ADD KEY `user_id_link` (`user_id`);

--
-- Indexes for table `mobile_post`
--
ALTER TABLE `mobile_post`
  ADD PRIMARY KEY (`pdt_id`),
  ADD KEY `user_id_mobile` (`user_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`req_id`),
  ADD KEY `service_user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_id_2` (`user_id`,`password`),
  ADD UNIQUE KEY `user_id` (`user_id`,`user_email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `password` (`password`);
ALTER TABLE `user` ADD FULLTEXT KEY `password_2` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bike_post`
--
ALTER TABLE `bike_post`
  MODIFY `pdt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `car_post`
--
ALTER TABLE `car_post`
  MODIFY `pdt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `covo_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mobile_post`
--
ALTER TABLE `mobile_post`
  MODIFY `pdt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bike_post`
--
ALTER TABLE `bike_post`
  ADD CONSTRAINT `user_id_bike` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `car_post`
--
ALTER TABLE `car_post`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `membership`
--
ALTER TABLE `membership`
  ADD CONSTRAINT `user_id_link` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mobile_post`
--
ALTER TABLE `mobile_post`
  ADD CONSTRAINT `user_id_mobile` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
