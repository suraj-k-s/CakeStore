-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 09:00 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(3, 'jithin', 'jithin@admin', 'admin'),
(10, 'Deepz Cake House', 'deepzcakes@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `booking_id` int(11) NOT NULL,
  `booking_date` date NOT NULL DEFAULT current_timestamp(),
  `booking_status` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL,
  `booking_amount` int(11) NOT NULL DEFAULT 0,
  `booking_for_date` varchar(100) NOT NULL,
  `booking_address` varchar(500) NOT NULL,
  `booking_pin` int(11) NOT NULL,
  `booking_contact` varchar(110) NOT NULL,
  `delivery_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`booking_id`, `booking_date`, `booking_status`, `user_id`, `booking_amount`, `booking_for_date`, `booking_address`, `booking_pin`, `booking_contact`, `delivery_time`) VALUES
(47, '2022-11-20', 1, 15, 660, '2022-11-21', 'Parnayil House\r\nPulluvazhi', 683556, '9544217732', '14:00'),
(48, '2022-11-20', 2, 15, 660, '2022-11-24', 'lkmklkl', 856555, '9867855754', '12:30'),
(49, '2022-11-20', 2, 15, 1185, '2022-11-26', 'dddsds', 789456, '9874563210', '00:30'),
(50, '2022-11-20', 2, 15, 790, '2022-11-25', 'jbkjbkj', 682313, '9696569554', '12:39'),
(51, '2022-11-20', 2, 22, 800, '2022-11-23', 'cgbdg', 682313, '7894561230', '12:52'),
(52, '2022-11-20', 1, 22, 840, '2022-11-25', 'gbtdfnf', 683556, '7894561230', '12:57'),
(53, '2022-11-20', 1, 22, 900, '', '', 0, '', ''),
(54, '2022-11-20', 2, 22, 900, '2022-11-25', 'cxv xcbf', 682313, '7894561230', '12:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `cart_qty` int(11) NOT NULL DEFAULT 1,
  `booking_id` int(11) NOT NULL,
  `cart_status` int(11) NOT NULL DEFAULT 0,
  `cart_kg` varchar(100) NOT NULL DEFAULT '0.5',
  `cart_name` varchar(100) NOT NULL DEFAULT '',
  `prod_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `prod_id`, `cart_qty`, `booking_id`, `cart_status`, `cart_kg`, `cart_name`, `prod_photo`) VALUES
(120, 27, 1, 47, 1, '0.5', '', ''),
(121, 23, 1, 47, 1, '1', 'happy bda', 'Screenshot (67).png'),
(122, 23, 1, 48, 1, '1', 'klmlm', 'Screenshot (51).png'),
(123, 28, 1, 48, 1, '0.5', '', ''),
(124, 23, 1, 49, 1, '1.5', 'dsdd', ''),
(125, 28, 1, 49, 1, '0.5', '', ''),
(126, 23, 1, 50, 1, '1', '', ''),
(127, 27, 1, 50, 1, '0.5', '', ''),
(128, 26, 1, 51, 1, '1', '', ''),
(129, 26, 1, 52, 1, '1', '', ''),
(130, 27, 1, 52, 1, '0.5', '', ''),
(131, 27, 1, 53, 1, '0.5', '', ''),
(132, 28, 1, 53, 1, '0.5', '', ''),
(133, 26, 1, 53, 1, '1', '', ''),
(134, 26, 1, 54, 1, '1', 'fdrgrd', ''),
(135, 27, 1, 54, 1, '0.5', '', ''),
(136, 28, 1, 54, 1, '0.5', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_name`) VALUES
(4, 'Cakes'),
(8, 'Snacks');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint`
--

CREATE TABLE `tbl_complaint` (
  `comp_id` int(11) NOT NULL,
  `comp_date` date NOT NULL DEFAULT current_timestamp(),
  `comp_sub` varchar(100) NOT NULL,
  `comp_desc` varchar(500) NOT NULL,
  `comp_status` int(11) NOT NULL DEFAULT 0,
  `comp_reply` varchar(500) NOT NULL,
  `comp_replydate` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_complaint`
--

INSERT INTO `tbl_complaint` (`comp_id`, `comp_date`, `comp_sub`, `comp_desc`, `comp_status`, `comp_reply`, `comp_replydate`, `user_id`) VALUES
(15, '2022-11-07', 'Delivery Time Issue', 'Not delivered as per need', 1, 'Sorry for the inconvenience!!!\r\nWe will look forward to resolve the issue. ', '2022-11-07', 15),
(16, '2022-11-07', 'Package was not good', 'Package quality was not good.\r\nPlease improve your quality for package', 0, '', '0000-00-00', 23),
(17, '2022-11-07', 'Bad Taste', 'Item does not taste well', 1, 'Than podo', '2022-11-08', 22);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`district_id`, `district_name`) VALUES
(1, 'Idukki'),
(5, 'Kottayam'),
(11, ' Ernakulam');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback_date` date NOT NULL DEFAULT current_timestamp(),
  `feedback_details` varchar(200) NOT NULL,
  `user_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `feedback_date`, `feedback_details`, `user_id`) VALUES
(3, '2022-11-04', 'Good Quality Products...\r\nLoved it!!!\r\n', 23),
(4, '2022-11-05', 'Kollam...', 15),
(5, '2022-11-07', 'Cakes looks amazing!!!', 23);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_offer`
--

CREATE TABLE `tbl_offer` (
  `offer_id` int(11) NOT NULL,
  `offer_name` varchar(50) NOT NULL,
  `offer_frm_date` date NOT NULL,
  `offer_to_date` date NOT NULL,
  `offer_frm_time` varchar(50) NOT NULL,
  `offer_to_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_offer`
--

INSERT INTO `tbl_offer` (`offer_id`, `offer_name`, `offer_frm_date`, `offer_to_date`, `offer_frm_time`, `offer_to_time`) VALUES
(7, 'offer test', '2022-11-20', '2022-11-20', '12:45', '12:55'),
(8, 'test offer1', '2022-11-20', '2022-11-21', '12:00', '12:00'),
(9, 'test offer2', '2022-11-20', '2022-11-20', '12:58', '13:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_offer_product`
--

CREATE TABLE `tbl_offer_product` (
  `offer_prod_id` int(11) NOT NULL,
  `offer_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `offer_prod_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_offer_product`
--

INSERT INTO `tbl_offer_product` (`offer_prod_id`, `offer_id`, `prod_id`, `offer_prod_price`) VALUES
(1, 1, 5, 500),
(2, 1, 16, 200),
(5, 1, 22, 520),
(6, 6, 23, 600),
(7, 7, 26, 800);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `place_id` int(11) NOT NULL,
  `place_name` varchar(100) NOT NULL,
  `place_pincode` int(6) NOT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`place_id`, `place_name`, `place_pincode`, `district_id`) VALUES
(2, 'Muvatupuzha', 88888, 1),
(4, 'Valakom', 987888, 1),
(6, 'Piravom', 682312, 11),
(7, 'Mulanthuruthy', 682314, 11),
(8, 'Thripunithura', 682310, 11),
(9, 'Perumbavoor', 683556, 11),
(10, 'Peppathy', 682313, 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `prod_date` date NOT NULL DEFAULT current_timestamp(),
  `prod_img` varchar(300) NOT NULL,
  `prod_price` varchar(10) NOT NULL,
  `prod_desc` varchar(2000) NOT NULL,
  `subcat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`prod_id`, `prod_name`, `prod_date`, `prod_img`, `prod_price`, `prod_desc`, `subcat_id`) VALUES
(17, 'Red Velvet Truffle', '2022-10-09', 'images.jfif', '900', 'Red velvet cake tastes like very mild cocoa with a slightly tart edge.', 11),
(18, 'Purple Velvet Cake', '2022-10-09', 'purplevelvetangle581.jpg', '900', 'Purple Velvet Cake provides a subtle berry fruit flavour. Freeze-thaw stable', 11),
(19, 'Pink Velvet Cakes', '2022-10-09', '309_504401000.jpg', '900', 'The cream cheese frosting is the most forward flavor. Perhaps even more important than the taste is the texture: smooth, soft, tender and light with creamy icing', 11),
(20, 'Raffello Cake', '2022-10-09', 'cake-8.jpg', '1000', 'It consists of a spherical wafer which is filled with a white milk cream and white blanched almonds.', 13),
(21, 'Mighty Raspberry Cake', '2022-10-09', '0c8d50130cd2c47b86ae6b2eaaa9b85a.jpg', '1000', 'cake is moist, soft, and light– and has wonderful raspberry flavor from the raspberry puree mixed into the cake batter.', 13),
(22, 'Vannila Cake', '2022-10-09', '53d19b3d283a4d91cf4e5fd70026f5fa.jpg', '550', 'It actually just refers to the flavor of a vanilla custard ', 7),
(23, 'Blueberry Cake', '2022-10-09', '832db82d14cf3e5e133162ac8f45d6fb.jpg', '750', 'Its a soft tender cake that tastes of wild blueberries, filled with a blueberry compote and wrapped in a sweet, blueberry buttercream. No artificial coloring or dye here, these colors and flavor are all natural.', 7),
(24, 'Choclate Cake', '2022-10-09', 'Post-1.jpg', '550', 'Chocolate cake has a chocolatey hint of flavor from cocoa powder. Chocolate cake has a creamy and buttery taste to it.', 5),
(25, 'Oreo Cake', '2022-10-09', 'CK2063.jpg', '850', 'These Oreos are sweet -- sweeter than the original variety. The creme filling, flecked with rainbow sprinkles throughout, tastes like birthday cake batter and frosting', 5),
(26, 'Choclate Overload Cake', '2022-10-09', 'DSC_0908.jpg', '1000', 'Chocolate flavour are added to serve every taste and flavours are the centres of attraction of any cake.', 5),
(27, 'Doughnut', '2022-11-03', 'Doughnut.jpg', '40', 'Sweet Doughnut', 14),
(28, 'Brownie', '2022-11-03', 'brownies.jpg', '60', 'Choclate Flavored', 14);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shop`
--

CREATE TABLE `tbl_shop` (
  `shop_id` int(11) NOT NULL,
  `shop_name` varchar(50) NOT NULL,
  `shop_contact` bigint(20) NOT NULL,
  `shop_address` varchar(100) NOT NULL,
  `shop_photo` varchar(100) NOT NULL,
  `shop_proof` varchar(100) NOT NULL,
  `shop_password` varchar(50) NOT NULL,
  `shop_doj` date NOT NULL,
  `shop_vstatus` int(11) NOT NULL DEFAULT 0,
  `place_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcat`
--

CREATE TABLE `tbl_subcat` (
  `subcat_id` int(11) NOT NULL,
  `subcat_name` varchar(50) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_subcat`
--

INSERT INTO `tbl_subcat` (`subcat_id`, `subcat_name`, `cat_id`) VALUES
(5, 'Choclate Sponges', 4),
(7, 'Vanilla Sponges', 4),
(11, 'Velvet Cakes', 4),
(12, 'Italian Cakes', 0),
(13, 'Italian Cakes', 4),
(14, 'Sweet Snacks', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_gender` varchar(50) NOT NULL,
  `user_contact` bigint(10) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_photo` varchar(100) NOT NULL,
  `user_proof` varchar(100) NOT NULL,
  `district_id` int(15) NOT NULL,
  `place_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_gender`, `user_contact`, `user_email`, `user_password`, `user_photo`, `user_proof`, `district_id`, `place_id`) VALUES
(12, 'Jithin Thomas', 'Male', 9074520428, 'jithinthomasakm@gmail.com', 'jithin@user', 'DSC_5106.jpg', 'photo_2022-02-14_09-31-00.jpg', 1, 2),
(15, 'Tony Varghese', 'Male', 9544217732, 'tvarghesejohn@gmail.com', 'Tony1234', 'photo_2022-11-03_11-52-03.jpg', 'photo_2022-11-03_11-53-49.jpg', 11, 9),
(22, 'Varghese', 'Male', 2355584589, 'vargheseproy254@gmail.com', 'varghese', 'Screenshot (55).png', 'Screenshot (55).png', 11, 6),
(23, 'Abhishek', 'Male', 7994731367, 'abhishek.mukund12@gmail.com', 'Rpassword44', 'Screenshot (52).png', 'Screenshot (51).png', 11, 10),
(24, 'Merin Babu', 'Female', 9207677324, 'merinbabu526@gmail.com', 'Merin@123', 'Screenshot (55).png', 'Screenshot (58).png', 11, 6),
(27, 'Nikhila', 'Female', 9010112548, 'merinbabu322@gmail.com', 'Nikhila@123', '', '', 11, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tbl_offer`
--
ALTER TABLE `tbl_offer`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `tbl_offer_product`
--
ALTER TABLE `tbl_offer_product`
  ADD PRIMARY KEY (`offer_prod_id`);

--
-- Indexes for table `tbl_place`
--
ALTER TABLE `tbl_place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `tbl_shop`
--
ALTER TABLE `tbl_shop`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `tbl_subcat`
--
ALTER TABLE `tbl_subcat`
  ADD PRIMARY KEY (`subcat_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  MODIFY `comp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_offer`
--
ALTER TABLE `tbl_offer`
  MODIFY `offer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_offer_product`
--
ALTER TABLE `tbl_offer_product`
  MODIFY `offer_prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_place`
--
ALTER TABLE `tbl_place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_shop`
--
ALTER TABLE `tbl_shop`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_subcat`
--
ALTER TABLE `tbl_subcat`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
