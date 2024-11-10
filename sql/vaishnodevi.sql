-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2024 at 03:59 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaishnodevi`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_page`
--

CREATE TABLE `about_page` (
  `id` int(255) NOT NULL,
  `about_title` varchar(999) NOT NULL,
  `about_keyword` varchar(999) NOT NULL,
  `about_description` varchar(999) NOT NULL,
  `about_author` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_page`
--

INSERT INTO `about_page` (`id`, `about_title`, `about_keyword`, `about_description`, `about_author`) VALUES
(1, 'About || Vaishnodevi Brass Industries', 'abc', 'abc', 'Dev Davda');

-- --------------------------------------------------------

--
-- Table structure for table `brochure`
--

CREATE TABLE `brochure` (
  `id` int(255) NOT NULL,
  `brochure` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brochure`
--

INSERT INTO `brochure` (`id`, `brochure`) VALUES
(1, 'Screenshot 2024-07-02 195902.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(5) NOT NULL,
  `uid` int(5) NOT NULL,
  `pid` int(5) NOT NULL,
  `image` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `uid`, `pid`, `image`, `name`, `price`, `qty`) VALUES
(22, 1, 29, 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Bush', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(255) NOT NULL,
  `category_name` varchar(999) NOT NULL,
  `sub_category` varchar(999) NOT NULL,
  `category_image` varchar(999) NOT NULL,
  `description` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `sub_category`, `category_image`, `description`) VALUES
(39, 'Brass_Plumbing_Parts', 'Yes', 'uploads/header.png', 'Brass Plumbing Parts'),
(45, 'Brass Bush', 'Yes', 'assets/category/destination1/Brass Bush_result (1).png', 'Brass Bush'),
(46, 'Brass Fastners', 'Yes', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Fastners'),
(47, 'Brass Inserts', 'Yes', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Inserts'),
(49, 'Brass Electrical Fitting', 'Yes', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Electrical Fitting'),
(50, 'Brass Anchor', 'Yes', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Anchor'),
(51, 'Brass Flare Nut', 'Yes', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Flare Nut'),
(52, 'Brass Hose Brab', 'Yes', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Hose Brab');

-- --------------------------------------------------------

--
-- Table structure for table `checkout_details`
--

CREATE TABLE `checkout_details` (
  `id` int(255) NOT NULL,
  `name` varchar(999) NOT NULL,
  `email` varchar(999) NOT NULL,
  `mob` varchar(999) NOT NULL,
  `address` text NOT NULL,
  `country` varchar(999) NOT NULL,
  `state` varchar(999) NOT NULL,
  `city` varchar(999) NOT NULL,
  `zip` int(11) NOT NULL,
  `payment_method` varchar(999) NOT NULL,
  `total_with_tax` decimal(10,2) NOT NULL,
  `Date / Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout_details`
--

INSERT INTO `checkout_details` (`id`, `name`, `email`, `mob`, `address`, `country`, `state`, `city`, `zip`, `payment_method`, `total_with_tax`, `Date / Time`) VALUES
(1, 'sk', 'kkkkc@gmail.com', '1111112345', 'abc', 'India', 'Gujarat', 'Vaodara', 361001, 'Cash On Delivery', 6400.00, '2024-10-13 11:26:34'),
(2, 'sk', 'kkkkc@gmail.com', '1111112345', 'abc', 'India', 'Gujarat', 'Ahmedabad', 361001, 'Cash On Delivery', 0.00, '2024-10-13 11:27:20');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_page`
--

CREATE TABLE `contact_us_page` (
  `id` int(255) NOT NULL,
  `contact_us_title` varchar(999) NOT NULL,
  `contact_us_keyword` varchar(999) NOT NULL,
  `contact_us_description` varchar(999) NOT NULL,
  `contact_us_author` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us_page`
--

INSERT INTO `contact_us_page` (`id`, `contact_us_title`, `contact_us_keyword`, `contact_us_description`, `contact_us_author`) VALUES
(1, 'Contact Us || Vaishnodevi Brass Industries', 'abc', 'abc', 'Dev Davda');

-- --------------------------------------------------------

--
-- Table structure for table `favicon`
--

CREATE TABLE `favicon` (
  `id` int(255) NOT NULL,
  `favicon` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favicon`
--

INSERT INTO `favicon` (`id`, `favicon`) VALUES
(1, 'product.png');

-- --------------------------------------------------------

--
-- Table structure for table `home_page`
--

CREATE TABLE `home_page` (
  `id` int(255) NOT NULL,
  `home_title` varchar(999) NOT NULL,
  `home_keyword` varchar(999) NOT NULL,
  `home_description` varchar(999) NOT NULL,
  `home_author` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_page`
--

INSERT INTO `home_page` (`id`, `home_title`, `home_keyword`, `home_description`, `home_author`) VALUES
(1, 'Home || Vaishnodevi Brass Industries', 'abc', 'sdlk', 'Dev Davda');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry_page`
--

CREATE TABLE `inquiry_page` (
  `id` int(255) NOT NULL,
  `inquiry_title` varchar(999) NOT NULL,
  `inquiry_keyword` varchar(999) NOT NULL,
  `inquiry_description` varchar(999) NOT NULL,
  `inquiry_author` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiry_page`
--

INSERT INTO `inquiry_page` (`id`, `inquiry_title`, `inquiry_keyword`, `inquiry_description`, `inquiry_author`) VALUES
(1, 'Inquiry || Vaishnodevi Brass Industries', 'abc', 'abc', 'Dev Davda');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `product_name` varchar(999) NOT NULL,
  `category_name` varchar(999) NOT NULL,
  `price` varchar(999) NOT NULL,
  `product_image` varchar(999) NOT NULL,
  `description` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `category_name`, `price`, `product_image`, `description`) VALUES
(6, 'Brass Sanitary Parts 1', '39', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Sanitary Parts 1'),
(13, 'Brass Sanitary Parts 2', '39', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_2-transformed.png', 'Brass Sanitary Parts 2'),
(17, 'Brass Sanitary Parts 3', '39', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Sanitary Parts 3'),
(18, 'Brass Extension Nipple', '39', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Extension Nipple'),
(20, 'Brass Ceramic Spindle 1', '39', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Ceramic Spindle 1'),
(21, 'Brass Ceramic Spindle 2', '39', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Ceramic Spindle 2'),
(22, 'Brass Ceramic Spindle 3', '39', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Ceramic Spindle 3'),
(23, 'Brass Ceramic Spindle 4', '39', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Ceramic Spindle 4'),
(24, 'Brass Plumbing Parts 1', '39', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Plumbing Parts 1'),
(25, 'Brass Plumbing Parts 2', '39', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Plumbing Parts 2'),
(26, 'Brass Plumbing Parts 3', '39', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Plumbing Parts 3'),
(27, 'Brass Plumbing Parts 4', '39', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Plumbing Parts 4'),
(28, 'Brass Plumbing Parts 5', '39', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Plumbing Parts 5'),
(29, 'Brass Bush', '45', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Bush'),
(30, 'Industrial Brass Bush', '45', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Industrial Brass Bush'),
(31, 'Brass Bush 1', '45', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Bush 1'),
(32, 'Brass Fastners', '46', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Fastners'),
(33, 'Brass Washer', '46', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Washer'),
(34, 'Brass Bolt Nuts Washer', '46', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Bolt Nuts Washer'),
(36, 'Nut & Screw', '46', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Nut & Screw'),
(37, 'Brass Inserts 1', '47', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Inserts 1'),
(38, 'Brass Inserts 2', '47', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Inserts 2'),
(39, 'Brass Inserts 3', '47', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Inserts 3'),
(40, 'Brass Inserts 4', '47', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Inserts 4'),
(41, 'Brass Inserts 5', '47', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Inserts 5'),
(42, 'Brass Left Right Knurling Inserts', '47', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Left Right Knurling Inserts'),
(43, 'Brass Electrical Fitting 1', '49', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Electrical Fitting 1'),
(44, 'Brass Electrical Fitting 2', '49', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Electrical Fitting 2'),
(45, 'Brass Electrical Fitting 3', '49', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Electrical Fitting 3'),
(46, 'Brass Electrical Fitting 4', '49', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Electrical Fitting 4'),
(47, 'Brass Electrical Fitting 5', '49', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Electrical Fitting 5'),
(48, 'Brass Terminal Bar', '49', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Terminal Bar'),
(49, 'Brass Terminal Block', '49', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Terminal Block'),
(50, 'Brass Anchor 1', '50', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Anchor 1'),
(51, 'Brass Anchor 2', '50', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Anchor 2'),
(52, 'Brass Anchor 3', '50', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Anchor 3'),
(53, 'Brass Anchor 4', '50', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Anchor 4'),
(54, 'Flare Nut 1', '51', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Flare Nut 1'),
(55, 'Flare Nut 2', '51', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Flare Nut 2'),
(56, 'Flare Nut 3', '51', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Flare Nut 3'),
(57, 'Flare Nut 4', '51', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Flare Nut 4'),
(58, 'Flare Nut 5', '51', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Flare Nut 5'),
(59, 'Brass Hose Brab 1', '52', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Hose Brab 1'),
(60, 'Brass Hose Brab 2', '52', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Hose Brab 2'),
(61, 'Brass Hose Brab 3', '52', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Hose Brab 3'),
(62, 'Brass Hose Brab 4', '52', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Hose Brab 4'),
(63, 'Brass Hose Brab 5', '52', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Hose Brab 5'),
(64, 'Brass Hose Brab 6', '52', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Hose Brab 6'),
(65, 'Brass Hose Brab 7', '52', '1000', 'assets/category/destination1/Brass_Sanitary_Parts_1-transformed.png', 'Brass Hose Brab 7');

-- --------------------------------------------------------

--
-- Table structure for table `product_page`
--

CREATE TABLE `product_page` (
  `id` int(255) NOT NULL,
  `product_title` varchar(999) NOT NULL,
  `product_keyword` varchar(999) NOT NULL,
  `product_description` varchar(999) NOT NULL,
  `product_author` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_page`
--

INSERT INTO `product_page` (`id`, `product_title`, `product_keyword`, `product_description`, `product_author`) VALUES
(1, 'Product || Vaishnodevi Brass Industries', 'abc', 'abc', 'Dev Davda');

-- --------------------------------------------------------

--
-- Table structure for table `quality_page`
--

CREATE TABLE `quality_page` (
  `id` int(255) NOT NULL,
  `quality_title` varchar(999) NOT NULL,
  `quality_keyword` varchar(999) NOT NULL,
  `quality_description` varchar(999) NOT NULL,
  `quality_author` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quality_page`
--

INSERT INTO `quality_page` (`id`, `quality_title`, `quality_keyword`, `quality_description`, `quality_author`) VALUES
(1, 'Quality || Vaishnodevi Brass Industries', 'abc', 'abc', 'Dev Davda');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` int(255) NOT NULL,
  `facebook` varchar(999) NOT NULL,
  `instagram` varchar(999) NOT NULL,
  `twitter` varchar(999) NOT NULL,
  `linkedin` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `facebook`, `instagram`, `twitter`, `linkedin`) VALUES
(1, 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://x.com/', 'https://in.linkedin.com/');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(255) NOT NULL,
  `sub_category_name` varchar(999) NOT NULL,
  `category_name` varchar(999) NOT NULL,
  `sub_category_image` varchar(999) NOT NULL,
  `sub_cat_description` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(999) NOT NULL,
  `email_id` varchar(999) NOT NULL,
  `password` varchar(999) NOT NULL,
  `role` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email_id`, `password`, `role`) VALUES
(6, 'Mastermind', 'sk@gmail.com', 'dev', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_page`
--
ALTER TABLE `about_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brochure`
--
ALTER TABLE `brochure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_USER_ID` (`uid`),
  ADD KEY `FK_PRODUCT_ID` (`pid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout_details`
--
ALTER TABLE `checkout_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us_page`
--
ALTER TABLE `contact_us_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favicon`
--
ALTER TABLE `favicon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_page`
--
ALTER TABLE `home_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry_page`
--
ALTER TABLE `inquiry_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_page`
--
ALTER TABLE `product_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quality_page`
--
ALTER TABLE `quality_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_page`
--
ALTER TABLE `about_page`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brochure`
--
ALTER TABLE `brochure`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `checkout_details`
--
ALTER TABLE `checkout_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us_page`
--
ALTER TABLE `contact_us_page`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `favicon`
--
ALTER TABLE `favicon`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_page`
--
ALTER TABLE `home_page`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inquiry_page`
--
ALTER TABLE `inquiry_page`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `product_page`
--
ALTER TABLE `product_page`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quality_page`
--
ALTER TABLE `quality_page`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
