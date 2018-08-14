-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2018 at 09:40 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `title`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, '79336.png', 'banner', 'banner', 1, '2018-08-12 23:19:31', '2018-08-12 23:19:31'),
(2, '47874.png', 'banner1', 'banner1', 1, '2018-08-12 23:19:51', '2018-08-12 23:19:51'),
(3, '50569.png', 'banner2', 'banner2', 1, '2018-08-12 23:20:12', '2018-08-12 23:20:12');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `product_name`, `product_code`, `product_color`, `size`, `price`, `quantity`, `user_email`, `session_id`, `created_at`, `updated_at`) VALUES
(1, 4, 'Sony Xperia Z', 'SXPZ-P', 'Purple', 'Purple', 26629.00, 1, '', 'P9LAeGwTSCAFOKgCfmNC4zjSibO9WfibKJxXzIyg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `description`, `url`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 0, 'Mobile Phone', 'smartphones, iphone, feature phones', 'mobile', 1, NULL, '2018-08-12 23:37:18', '2018-08-12 23:37:18'),
(2, 0, 'Tablets', 'tablets, ipad, kindle', 'tablets', 1, NULL, '2018-08-12 23:54:53', '2018-08-12 23:54:53'),
(3, 0, 'TV', 'Full HD LED TV, HD Ready TV, Smart TV', 'tv', 1, NULL, '2018-08-12 23:56:06', '2018-08-12 23:56:06'),
(4, 0, 'Laptop', 'Notebook & Macbook, Macbooks', 'laptop', 1, NULL, '2018-08-12 23:57:43', '2018-08-12 23:57:43'),
(5, 0, 'Desktop', 'iMac, Monitor', 'desktop', 0, NULL, '2018-08-12 23:59:03', '2018-08-13 04:28:18'),
(6, 0, 'Audio & Video', 'DVD Player, Projector, MP3 Player', 'audio&video', 1, NULL, '2018-08-13 00:01:08', '2018-08-13 00:01:08'),
(7, 0, 'Camera', 'Security Cameras, DSLR, Digital Camera, Camera Bags, Dash Cameras', 'camera', 1, NULL, '2018-08-13 00:03:41', '2018-08-13 00:03:41'),
(8, 0, 'Large Appliances', 'Refrigerators, Washing Machine, Clothes Dryer.', 'largeAppliances', 1, NULL, '2018-08-13 00:05:25', '2018-08-13 00:05:25'),
(9, 1, 'Smartphones', 'You can now buy the smartphone that you have dreamt of on Tata CLiQ.', 'smartphones', 1, NULL, '2018-08-13 00:24:51', '2018-08-13 00:26:20'),
(10, 1, 'iPhone', 'Available at budget-friendly prices of iPhones offered by us.', 'iphone', 1, NULL, '2018-08-13 00:31:23', '2018-08-13 00:32:30'),
(11, 1, 'Feature Phones', 'The upside of online shopping at Tata CLiQ is that you\'ll save money.', 'featurePhones', 1, NULL, '2018-08-13 00:39:21', '2018-08-13 00:46:03'),
(12, 2, 'Tablets', 'Browse through our catalogue today to take your pick.', 'tablet', 1, NULL, '2018-08-13 00:54:11', '2018-08-13 00:54:11'),
(13, 2, 'iPad', 'Go ahead and explore our range to find the best iPad models online.', 'ipad', 1, NULL, '2018-08-13 01:02:01', '2018-08-13 01:02:01'),
(14, 3, 'Full HD LED TV', 'Full HD LED TV', 'hdtv', 1, NULL, '2018-08-13 01:12:46', '2018-08-13 01:12:46'),
(15, 3, 'Smart TV', 'Smart TV', 'smarttv', 1, NULL, '2018-08-13 01:14:50', '2018-08-13 04:28:04'),
(16, 4, 'Notebook & Macbook', 'Notebook & Macbook', 'laptop', 1, NULL, '2018-08-13 01:18:51', '2018-08-13 01:18:51'),
(17, 4, 'Macbooks', 'Macbooks', 'macbooks', 1, NULL, '2018-08-13 01:20:10', '2018-08-13 01:20:10'),
(18, 6, 'DVD Player', 'DVD Player', 'dvd', 1, NULL, '2018-08-13 04:22:00', '2018-08-13 04:22:00'),
(19, 6, 'MP3 Player', 'MP3 Player', 'mp3', 1, NULL, '2018-08-13 04:22:29', '2018-08-13 04:22:29'),
(20, 7, 'Security Cameras', 'Security Cameras', 'securitycameras', 1, NULL, '2018-08-13 04:23:46', '2018-08-13 04:23:46'),
(21, 7, 'DSLR', 'DSLR', 'dslr', 1, NULL, '2018-08-13 04:24:16', '2018-08-13 04:24:16'),
(22, 7, 'Digital Camera', 'Digital Camera', 'digitalcamera', 1, NULL, '2018-08-13 04:25:11', '2018-08-13 04:25:11'),
(23, 8, 'Refrigerators', 'Refrigerators', 'refrigerators', 1, NULL, '2018-08-13 04:25:53', '2018-08-13 04:25:53'),
(24, 8, 'Washing Machine', 'Washing Machine', 'washingmachine', 1, NULL, '2018-08-13 04:26:29', '2018-08-13 04:26:29');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(10) UNSIGNED NOT NULL,
  `coupon_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `amount_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiry_date` date NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_code`, `amount`, `amount_type`, `expiry_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'test10', 2, 'Percentage', '2018-08-18', 1, '2018-08-10 07:23:34', '2018-08-12 12:22:43'),
(2, 'test18', 3, 'Fixed', '2018-08-09', 1, '2018-08-10 08:24:43', '2018-08-10 12:22:58');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `customer_name`, `customer_email`, `password`, `mobile`, `created_at`, `updated_at`) VALUES
(1, 'Hapsha', 'hapsha@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01680050774', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_07_23_135604_create_categories_table', 1),
(2, '2018_07_24_184941_create_category_table', 2),
(3, '2018_07_26_072812_create_products_table', 3),
(4, '2018_08_01_200504_create_products_attributes_table', 4),
(5, '2018_08_08_174812_create_cart_table', 5),
(6, '2018_08_10_094123_create_coupons_table', 6),
(7, '2018_08_11_111036_create_coustomer_table', 7),
(8, '2018_08_11_145311_create_shipping_table', 8),
(9, '2018_08_11_182649_create_payment_table', 9),
(10, '2018_08_11_182817_create_order_table', 9),
(11, '2018_08_11_182903_create_order_details_table', 9),
(12, '2018_08_11_182825_create_order_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_status` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'pending', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(10) UNSIGNED NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 'handcash', 'pending', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `features` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_name`, `product_code`, `product_color`, `description`, `features`, `price`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 'Vivo V9 64 GB', 'V64', 'Gold', 'The Vivo V9 is powered by a Qualcomm Snapdragon 626 octa-core processor, and equipped 4GB RAM and 64GB ROM, delivering amazing performance for even the most intensive gaming and social media tasks. It also features the latest Android 8.1, which boosts battery life and operation speed, and improves security.', '1. 4GB RAM and 64GB ROM (Expandable up to 256GB)\r\n2.16MP +5MP Rear Camera and 24MP Front Camera\r\n3.15.51cm (6.3), 1080 x 2280 FHD+ Display\r\n4. 3260 mAh Li-ion Battery', 19500.00, '8649.jpg', 1, '2018-08-13 04:44:39', '2018-08-13 07:13:40'),
(2, 9, 'Oppo F7', 'OF7', 'Black', 'Oppo F7 is your gateway to beautiful selfies like new before. The 25MP AI beauty selfie camera captures the very essence of you by using AI Beauty and Sensor HDR technologies. It lets you take it all in with a 15.8cm FHD+ all-encompassing screen that stimulates your senses across all your everyday mobile phones experience. The performance is 80% higher than its predecessor .', '4GB RAM, 64 GB ROM (Expandable upto 256GB)15.8 cm (6.23-inch), 2280 x 1080 pixels25MP Front and 16MP Rear Camera3400 mAh battery', 19170.00, '43900.jpeg', 1, '2018-08-13 05:05:54', '2018-08-13 05:05:54'),
(3, 9, 'Sony Xperia', 'SGP7', 'White', 'Oppo F7 is your gateway to beautiful selfies like new before. The 25MP AI beauty selfie camera captures the very essence of you by using AI Beauty and Sensor HDR technologies. It lets you take it all in with a 15.8cm FHD+ all-encompassing screen that stimulates your senses across all your everyday mobile phones experience. The performance is 80% higher than its predecessor .', '4GB RAM, 64 GB ROM (Expandable upto 256GB)15.8 cm (6.23-inch), 2280 x 1080 pixels25MP Front and 16MP Rear Camera3400 mAh battery', 18900.00, '45038.jpg', 1, '2018-08-13 05:26:50', '2018-08-13 07:08:44'),
(4, 9, 'Sony Xperia Z', 'SXPZ', 'Purple', 'Oppo F7 is your gateway to beautiful selfies like new before. The 25MP AI beauty selfie camera captures the very essence of you by using AI Beauty and Sensor HDR technologies. It lets you take it all in with a 15.8cm FHD+ all-encompassing screen that stimulates your senses across all your everyday mobile phones experience. The performance is 80% higher than its predecessor .', '4GB RAM, 64 GB ROM (Expandable upto 256GB)15.8 cm (6.23-inch), 2280 x 1080 pixels25MP Front and 16MP Rear Camera3400 mAh battery', 26629.00, '14634.jpg', 1, '2018-08-13 05:33:05', '2018-08-13 05:33:05'),
(5, 10, 'Apple iPhone 6', 'APN6', 'Gold', 'The Apple iPhone 6 runs on iOS 10, giving you access to various interesting applications. This gold smartphone features a 4.7-inch retina HD touchscreen display that delivers crisp and clear visuals. Moreover, its 1.84 GHz 64-bit A8 chip enables a seamless operation.', 'The Apple iPhone 6 runs on iOS 10, giving you access to various interesting applications. This gold smartphone features a 4.7-inch retina HD touchscreen display that delivers crisp and clear visuals. Moreover, its 1.84 GHz 64-bit A8 chip enables a seamless operation.\r\n1GB RAM, 32GB ROM8MP Rear and 1.2MP Front Camera11.4 cm(4.7\"), 1334 x 750 pixels Display1810 mAh Battery (14hrs talktime on 3G)', 50000.00, '27564.jpeg', 1, '2018-08-13 07:19:28', '2018-08-13 07:19:40'),
(6, 10, 'Apple iPhone X', 'APPX64', 'Silver', 'The Apple iPhone X features an all?new 5.8?inch super retina display that delivers a crisp and clear visual output. The display employs new techniques and technology to precisely follow the curves of the design, all the way to the elegantly rounded corners. It runs on iOS 11 that takes care of all its functions. With the 64 GB built-in memory, this silver coloured phone lets you easily store all your multimedia files.', '64 GB Internal Memory14.73cm (5.8-inch) Super Retina HD display12 MP Rear and 7 MP Front CameraSplash, Water and Dust Resistant', 104176.00, '95398.jpeg', 1, '2018-08-13 07:25:01', '2018-08-13 07:25:01'),
(7, 11, 'I Kall K301', 'K301', 'Light Blue', 'Sleek and stylish, the I Kall K301 dual sim phone will be a worthy pick for those looking for a user-friendly handset. It boasts 1.8-inch display along with 800 mAh battery to offer you talk time uninterruptedly for a long time. The 0.3 MP rear camera allows you to capture anywhere you go. For storing files and folders, it comes with 32 MB RAM and 64 MB ROM. Provided the alphanumeric keypad allows you to type conveniently.', '64 MB ROM (Expandable upto 8 GB)0.3 MP Rear Camera4.57 cm (1.8 inch) QCIF Display800 mAh BatteryHandset, Battery, Charger, User Manual, Warranty Card', 5999.00, '15679.jpeg', 1, '2018-08-13 07:42:48', '2018-08-13 07:42:48'),
(8, 11, 'I Kall K29', 'K29', 'White', 'Bring home the I Kall K29 feature phone that is convenient and easy to use. Packed with 1800 mAh battery, it keeps the show running for long hours. This device vaunts a 1.8-inch display. For basic photography, this handset is equipped with 0.3 MP rear camera. Provided it comes with 32 MB RAM, 64MB ROM and an expandable memory up to 8 GB for storing files and folders. The alphanumeric keypad allows you to handle the set with ease.', '64 MB ROM (Expandable upto 8 GB)0.3 MP Rear Camera4.57 cm (1.8 inch) QCIF Display1800 mAh BatteryHandset, Battery, Charger, User Manual, Warranty Card', 6290.00, '18665.jpeg', 1, '2018-08-13 07:45:52', '2018-08-13 07:45:52'),
(9, 12, 'iBall Slide Brisk 4G2', 'B4G2', 'Blue', 'The iBall Slide Brisk 4G2 Tablet is a useful device driven by a robust 1 GHz quad-core processor. Its 16 GB memory takes care of multimedia storage needs with efficiency. Furthermore, this blue tablet features a convenient 7-inch display that provides a clear view of files, applications, and documents.', '3 GB RAM & 16 GB ROM (Expandable up to 32GB)7 inch, 1024 x 600 pixels, IPS HD Display5 MP Rear & 2 MP Front Camera3500 mAh Li-Polymer Battery', 20099.00, '6685.jpeg', 1, '2018-08-13 07:53:50', '2018-08-13 07:53:50'),
(10, 12, 'Swipe Razor 8 GB', 'SRGB8', 'Grey', 'To experience lightning fast connectivity, bring home the Swipe Razor 4G VoLTE smartphone. With a 7-inch display, you can watch videos and pictures with crystal clear clarity. Take perfect selfies with the 2 MP front-facing camera and the 5 MP rear camera that will let you capture flawless images even under low light conditions. It comes with 1 GB RAM and 8 GB ROM so that you can save all your files and folders with ease. Powered by 3000 mAh battery, this smartphone will keep you connected all day long.', '1 GB RAM and 8 GB ROM (Expandable upto 32 GB)17.8 cm (7 inch), 1024 x 600 WSVGA Display5 MP Rear and 2 MP Front Camera3000 mAh Battery', 50313.00, '33676.jpeg', 1, '2018-08-13 07:58:57', '2018-08-13 07:58:57'),
(11, 13, 'Apple iPad (6th Gen)', 'IPAP632', 'Silver', 'Set your imagination free with the Apple iPad MR7G2HN/A (6th Gen) 32 GB 9.7 Inch with Wi-Fi which is the ultimate balance of beauty and strength. Running on the IOS 11 Operating System and built with a M10 coprocessor, this ipad makes multitasking a breeze. The Augmented reality (AR) is a new technology that brings virtual objects into the real world. With a 1.2 MP front camera and 8 MP primary camera, this ipad lets you make quality video calls and click great selfies and photos.', 'Screen Size: 24.63 cm (9.7 inch)32 GB CapacityIOS 118 MP Primary Camera and 1.2 MP FaceTime HD Camera', 55899.00, '47651.jpeg', 1, '2018-08-13 08:19:18', '2018-08-13 09:15:27'),
(12, 13, 'Apple iPad (6th Gen)', 'APP326', 'Gold', 'Set your imagination free with the Apple iPad MRJN2HN/A (6th Gen) 32 GB 9.7 Inch with Wi-Fi which is the ultimate balance of beauty and strength. Running on the IOS 11 Operating System and built with a M10 coprocessor, this ipad makes multitasking a breeze. The Augmented reality (AR) is a new technology that brings virtual objects into the real world. With a 1.2 MP front camera and 8 MP primary camera, this ipad lets you make quality video calls and click great selfies and photos.', 'Screen Size: 24.63 cm (9.7 inch)32 GB CapacityIOS 118 MP Primary Camera and 1.2 MP FaceTime HD Camera', 55899.00, '96519.jpeg', 1, '2018-08-13 08:24:48', '2018-08-13 09:15:11'),
(13, 16, 'HP 15-bs164tu (8th Gen i5)', 'bs164', 'Black', 'Perfect for everyday computing, the HP 15-bs164tu laptop delivers a good performance. This laptop has an intuitive and user-friendly interface for a convenient operation. With 1 TB storage, it offers ample space to save all your files and folders in one place. You can play games, watch movies or work conveniently on this 15.6-inch laptop. Moreover, it comes with integrated graphics.', '8th Gen Intel Core i54 GB1 TB HDDDOS', 54700.00, '23696.jpeg', 1, '2018-08-13 08:31:52', '2018-08-13 09:14:47'),
(14, 16, 'Lenovo Ideapad (6th Gen i3)', 'L320E', 'Grey', 'The compact and slim body of this Lenovo Ideapad 320E 80XH01GKIN laptop encapsulates beastly performance. Integrated graphics, Intel Core i3-6006U processor and a massive RAM of 4GB and 1TB hard drive assures speedy performance. Its convenient 15.6-inch display that supports an impressive 1366x768 pixels resolution ensures an experience of a lifetime. Featuring Dolby Audio-optimized speakers, the laptop delivers crystal-clear audio with minimal distortion at any volume.', '6th Gen Intel Core i34 GB1 TB HDDDOS', 50600.00, '19627.jpeg', 1, '2018-08-13 09:19:49', '2018-08-13 09:27:14'),
(15, 16, 'Apple MacBook Air', 'MQD42HN', 'Silver', 'The all-new 2017 Apple MacBook Air lasts upto 12 hours between charges and offers an incredible 30 day standby time. Powered by fifth- generation Intel Core i5 processors, it features Intel HD Graphics 6000 processor and a 8GB onboard memory to enhance your work or play. The 13.3 inch screen with 1440x900 pixels per inch and a 480p FaceTime camera that makes your experience more intuitive, direct and fun.', '5th Gen Intel Core i58 GB256 GB SSDMacOS Sierra', 104999.00, '75113.jpeg', 1, '2018-08-13 09:40:20', '2018-08-13 09:40:20'),
(17, 17, 'Apple MacBook (7th Gen i5)', 'MPXW2', 'Gray', 'Get geared for exceptional performance with Apple MPXW2 MacBook comes with Touch Bar with integrated Touch ID sensor. It highlights a 13 inch-inch LED-illuminated wide screen having a determination of 2560x1600 pixels, 3.1 GHz dual-core Intel Core i5 processor, 8 GB LPDDR3 memory coupled with 512 GB storage to keep you hooked.', '7th Gen Intel Core i58 GB512 GB SSDMac OS Sierra', 149999.00, '40311.jpeg', 1, '2018-08-13 09:44:26', '2018-08-13 09:46:21'),
(18, 14, 'Samsung (43 inches)LED TV', '43K5002', 'Black', 'Enjoy image clarity and sonorous sound with the Samsung 43K5002 Full HD TV. This 43-inch LED TV features a great resolution for displaying sharp, clear and vibrant graphics. With its built-in speakers, experience high-quality sound for your favorite shows and movies.', 'Resolution: 1920 x 1080 PixelsUSB: 1, HDMI: 3Digital Broadcasting,, Analog TunerScreen Size: 109 cm (43 inches)', 88115.00, '30445.jpeg', 1, '2018-08-13 09:58:33', '2018-08-13 10:00:02'),
(19, 14, 'Intex (50 inches)LED TV', 'I5012', 'Black', 'Get home theatre like experience, dynamic sound and USB connectivity with the Intex 5012 124 cm (50\") Full HD LED TV. The Eye Safe-T Matrix technology takes care of your eyes and makes sure you enjoy every little details, safely. Moreover, the 2 HDMI ports ensures smooth viewing through various sources as well.', 'Resolution: 1920 x 1080 PixelsUSB: 2, HDMI: 2Eye Safe Matrix TechnologyScreen Size: 127 cm (50 inches)', 77199.00, '54015.jpeg', 1, '2018-08-13 10:07:45', '2018-08-13 10:07:45'),
(20, 15, 'Belco (32 inches) Smart TV', '32BHS', 'Black', 'Introduce the advance Belco 32BHS-512 Smart HD Ready LED TV to your home that features a sleek and impressive design. Enjoy your favorite movies or television shows with your family on this 32-inch wide-screen TV with built-in speakers. Moreover, the 2 USB ports ensures smooth viewing through various sources as well.', 'Resolution: 1366 x 786 PixelsUSB: 2, HDMI: 265 Watts Power ConsumptionScreen Size: 80 cm (32 inches)', 52489.00, '73129.jpeg', 1, '2018-08-13 10:11:56', '2018-08-13 10:11:56'),
(21, 15, 'Sony (32 inches) Smart TV ()', '32W672F', 'Black', 'Slim and stylish in design, this Sony KLV-32W672F 81.28 cm (32 inch) Smart Full HD LED TV gives a high quality, crystal clear viewing experience. Enjoy your favorite movies or television shows with your family on this 32 inch wide-screen TV with built-in speakers. Furthermore, the 2 HDMI allow for smooth HD viewing through various sources as well. It is equipped with a clear resolution enhancer feature that helps you enjoy a precise replica of fine texture and details.', 'Resolution: 1920 x 1080 PixelsUSB: 2, HDMI: 278 Watts Power ConsumptionScreen Size: 81.28 cm (32 inches)', 64345.00, '45727.jpeg', 1, '2018-08-13 10:29:51', '2018-08-13 10:29:51'),
(22, 18, 'LG Blu-ray DVD Player', 'BP250', 'Black', 'You can connect your pen drive to the LG BP250 DVD Disc Player and enjoy your favorite movies or TV series. It also features a plug-and-play USB port for added convenience. Moreover, its Full HD upscaling technology converts standard definition content to Full HD content.', 'LED Dot DisplayUSB & External HDD ConnectivityPowerful Playability', 17984.00, '63534.jpeg', 1, '2018-08-13 10:34:48', '2018-08-13 10:34:48'),
(23, 19, 'FiiO Portable Music Player', 'FX5321', 'Black', 'Take your music wherever you go with this FiiO X5 3rd Gen high resolution lossless portable music player. This device with 1 GB of RAM runs on a quad-core RK3188 processor and has an inbuilt storage of 32 GB that can be expanded up to 512 GB. This music player, supporting all DSD and PCM formats, is equipped with dual DACs that reproduce your music finely. Its dual oscillators improve clock accuracy by reducing jitter and ensure more stable operation. Moreover, it comes with dual headphone outputs that double your fun.', 'IPS TFT Display with 800 x 480 resolutionDual headphone outputsWi-Fi and Bluetooth with SD card connectivity for added functionality', 25218.00, '53629.jpeg', 1, '2018-08-13 10:37:58', '2018-08-13 11:08:07'),
(24, 19, 'Sony MP3 Walkman Player', 'A46HN', 'Black', 'Take your music everywhere wherever you go with this Sony NW-A46HN High-Resolution Walkman. It is equipped with the natural sound of DSD Playback. It also comes with a High-Resolution audio for uncompromised sound and Noise cancellation. The high quality 7.9cm (3.1\") screen is touch-sensitive, allowing you to access functions simply by touching the icon.', '32 GB Internal MemoryDisplay Resolution: 7.8 cm (3.1), WVGA (800 x 480 Pixels)Music Playback: Upto 45 HrsHandy Buttons For Quick Contro', 17789.00, '2575.jpeg', 1, '2018-08-13 11:06:17', '2018-08-13 11:06:17'),
(25, 20, 'Hikvision Dome Camera', '2CE5AC0T', 'White', 'Manufactured with utmost precision, this indoor dome camera from Hikvision will give an accomplishment to your security system. With 1.0 MP CMOS image sensor, this camera offers a clear view of videos and images. To captivate images in low light condition, it comes with an IR range up to 20 m. Besides, it also features DNR, smart IR and an analog HD output to connect with other external devices.', '1.0 Megapixel high-performance CMOSAnalog HD output, up to 720P resolutionDNR, Smart IRSwitchable TVI/AHD/CVI/CVBS', 10971.00, '28346.jpeg', 1, '2018-08-13 11:19:42', '2018-08-13 11:19:42'),
(26, 20, 'Hikvision ITM Dome Camera', '2CE5AF1T', 'White', 'Get your hands on this hi-tech dome camera from Hikvision to ensure complete safety of your precious belongings. With 3.0 MP high-performance CMOS image sensor and lens of varied range, this camera offers a great view of videos. This dome camera with an IR range of 20 m features OSD menu, DNR, smart IR and can be controlled over coaxial cable. This IP66 weatherproof camera effectively works in the extreme of climates without a flaw.', '3 Megapixel high-performance CMOSAnalog HD output, up to 3MP resolutionOSD menu, DNR, Smart IREXIR technology', 9715.00, '19649.jpeg', 1, '2018-08-13 11:22:32', '2018-08-13 11:22:32'),
(27, 21, 'Canon DSLR Camera', '1300D', 'Black', 'The Canon 1300D DSLR Camera with EF S18-55 IS II Lens is a great pick for photography aficionados who love capturing high-quality photographs and enhanced videos. It has a well-designed body that is unlikely to easily give away to wear and tear. It is equipped with an 18 MP sensor and DIGIC 4+ processor that deliver high-resolution movies and shots. It comes with an EF S18-55 IS II lens as well.', '18-megapixel APS-C size sensor9-point AF with 1 centre cross-type AF pointStandard ISO 100 - 6400 (expandable to 12800)Wi-Fi and NFC supported', 25490.00, '34138.jpeg', 1, '2018-08-13 11:26:08', '2018-08-13 11:26:08'),
(28, 21, 'Nikon( VR Lens) DSLR Camera', 'D7200', 'Black', 'Capture break taking images in your next vacation using the Nikon D7200 with (AF-S 18-105 mm VR Lens) DSLR Camera. Whether it is a panoramic shot, long zoom, or close-ups, this camera will let you click pictures in amazing clarity. This single-lens reflex digital camera has a CMOS sensor to ensure great image quality.', 'Superior low-noise ability at high ISOMirror-balance mechanismWide AF coverage and lensLow-light situations', 79950.00, '19336.jpeg', 1, '2018-08-13 11:52:50', '2018-08-13 11:52:50'),
(29, 22, 'Canon PowerShot Camera', 'SX540', 'Black', 'With its powerful 50 x optical zoom and its premium quality sensors and processor, the Canon SX540 HS Point and Shoot Camera is a must-have for those who love capturing a variety of quality shots in different conditions. The Intelligent IS image stabilization system further adds to your photography experience.', 'Wi-Fi Connected20.3MP 1/2.3\" CMOS Image SensorDIGIC 6 Image Processor50x Optical Zoom', 18399.00, '16656.jpeg', 1, '2018-08-13 11:58:38', '2018-08-13 11:58:38'),
(30, 22, 'SONY Cyber 18 MP Camera', 'WX220', 'Pink', 'Capture beautiful close-ups from a distance with its 10X optical zoom G Lens. With one-touch connection, Cyber-Shot DSC-WX220 in black Digital Camera lets you transfer your images to your Wi-Fi or NFC enabled smartphone.', 'Capture Great Shots Even In Dim-lit PlacesPower Zoom In A Compact BodyExtraordinarily Realistic DetailOne-touch Connectivity For Instant Share', 12972.00, '97765.jpeg', 1, '2018-08-13 12:03:31', '2018-08-13 12:31:31'),
(31, 23, 'LG  Inverter Refrigerator', 'D221ABGX', 'Blue', 'The LG GL-D221ABGX 215 L Direct Cool Single Door Refrigerator (Blue Glow) lets you store food and drinks under optimal temperature conditions. With a Inverter 4 star rating, this fridge ensures an energy efficient operation. It has a storage capacity of 215 liters that enables you to store your pots, beverage cans, and food platters with ease. Moreover, its Smart Inverter Compressor is designed to give unmatched performance, great savings and super silent operation.', '215 Litres CapacityInverter 4 Star RatingNo. of Doors: 1Color: Blue Glow', 70730.00, '92496.jpeg', 1, '2018-08-13 12:10:07', '2018-08-13 12:29:49'),
(32, 23, 'LG Inverter Refrigerator', 'D221APZX', 'Silver', 'Store food items and maintain their freshness in the LG GL-D221APZX 215 L Direct Cool Single Door Refrigerator (Shiny Steel). This Inverter 4 star rating energy-efficient fridge preserves food for a long time with its reliable cooling features. It has a storage capacity of 215 liters that enables you to store your pots, beverage cans, and food platters with ease. Furthermore, its Smart Inverter Compressor is designed to give unmatched performance, great savings and super silent operation.', '215 Litres CapacityInverter 4 Star RatingNo. of Doors: 1Color: Shiny Steel', 67493.00, '74719.jpeg', 1, '2018-08-13 12:18:05', '2018-08-13 12:29:25'),
(33, 24, 'LG Washing Machine', 'FH65W', 'White', 'Now get rid of the gruesome everyday laundry chores with the LG FHT1065SNW Front Loading Fully Automatic Washing Machine that presents a new approach to all the laundry chores. This sleek and stylish washing machine is sure to complement any space. Its ergonomic design enables you to easily load and unload clothes. Moreover, its Smart Diagnosis quickly troubleshoots almost any minor issue before it becomes a bigger problem.', '6.5 kg CapacityFully Automatic ControlFront Loading Machine14 Wash Programs', 28295.00, '6636.jpeg', 1, '2018-08-13 12:26:15', '2018-08-13 12:30:39');

-- --------------------------------------------------------

--
-- Table structure for table `products_attributes`
--

CREATE TABLE `products_attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_attributes`
--

INSERT INTO `products_attributes` (`id`, `product_id`, `sku`, `size`, `price`, `stock`, `created_at`, `updated_at`) VALUES
(1, 1, 'V64-G', 'Gold', 19500.00, 10, '2018-08-13 12:51:02', '2018-08-13 12:51:02'),
(2, 1, 'V64-W', 'White', 19500.00, 50, '2018-08-13 12:51:02', '2018-08-13 12:51:02'),
(3, 1, 'V64-S', 'Silver', 19500.00, 10, '2018-08-13 12:51:02', '2018-08-13 12:51:02'),
(4, 2, 'OF7-B', 'Black', 19170.00, 10, '2018-08-13 12:53:18', '2018-08-13 12:53:18'),
(5, 2, 'OF7-G', 'Grey', 19170.00, 50, '2018-08-13 12:53:18', '2018-08-13 12:53:18'),
(6, 3, 'SGP7-W', 'White', 18900.00, 50, '2018-08-13 12:54:27', '2018-08-13 12:54:27'),
(7, 3, 'SGP7-B', 'Black', 18900.00, 10, '2018-08-13 12:54:27', '2018-08-13 12:54:27'),
(8, 4, 'SXPZ-P', 'Purple', 26629.00, 50, '2018-08-13 12:55:59', '2018-08-13 13:39:33'),
(9, 4, 'SXPZ-B', 'Black', 26629.00, 0, '2018-08-13 12:55:59', '2018-08-13 13:39:33'),
(10, 5, 'APN6-G', 'Gold', 50000.00, 10, '2018-08-13 12:57:24', '2018-08-13 12:57:24'),
(11, 5, 'APN6-B', 'Black', 50000.00, 50, '2018-08-13 12:57:24', '2018-08-13 12:57:24'),
(12, 5, 'APN6-W', 'White', 50000.00, 10, '2018-08-13 12:57:24', '2018-08-13 12:57:24'),
(13, 6, 'APPX64-S', 'Silver', 104176.00, 10, '2018-08-13 12:58:30', '2018-08-13 12:58:30'),
(14, 6, 'APPX64-W', 'White', 104176.00, 50, '2018-08-13 12:58:30', '2018-08-13 12:58:30'),
(15, 7, 'K301-LB', 'Light Blue', 5999.00, 10, '2018-08-13 12:59:40', '2018-08-13 12:59:40'),
(16, 7, 'K301-Y', 'Yellow', 5999.00, 10, '2018-08-13 12:59:40', '2018-08-13 12:59:40'),
(17, 8, 'K29-W', 'White', 6290.00, 50, '2018-08-13 13:00:49', '2018-08-13 13:00:49'),
(18, 8, 'K29-B', 'Black', 6290.00, 10, '2018-08-13 13:00:49', '2018-08-13 13:00:49'),
(19, 9, 'B4G2-B', 'Blue', 20500.00, 10, '2018-08-13 13:03:15', '2018-08-13 13:03:15'),
(20, 9, 'B4G2-Bl', 'Black', 20099.00, 50, '2018-08-13 13:03:15', '2018-08-13 13:03:15'),
(21, 10, 'SRGB8-G', 'Grey', 50313.00, 50, '2018-08-13 13:04:28', '2018-08-13 13:04:28'),
(22, 10, 'SRGB8-B', 'Black', 50313.00, 10, '2018-08-13 13:04:29', '2018-08-13 13:04:29'),
(23, 11, 'IPAP632-S', 'Silver', 55899.00, 50, '2018-08-13 13:05:35', '2018-08-13 13:05:35'),
(24, 11, 'IPAP632-B', 'Black', 55899.00, 50, '2018-08-13 13:05:35', '2018-08-13 13:05:35'),
(25, 12, 'APP326-G', 'Gold', 55899.00, 10, '2018-08-13 13:07:09', '2018-08-13 13:07:09'),
(26, 12, 'APP326-W', 'White', 55900.00, 5, '2018-08-13 13:07:09', '2018-08-13 13:07:09'),
(27, 13, 'bs164-B', 'Black', 54700.00, 50, '2018-08-13 13:08:14', '2018-08-13 13:08:14'),
(28, 13, 'bs164-S', 'Silver', 54800.00, 10, '2018-08-13 13:08:14', '2018-08-13 13:08:14'),
(29, 14, 'L320E-G', 'Grey', 50600.00, 10, '2018-08-13 13:09:50', '2018-08-13 13:09:50'),
(30, 14, 'L320E-B', 'Black', 50400.00, 50, '2018-08-13 13:09:50', '2018-08-13 13:09:50'),
(31, 15, 'MQD42HN-S', 'Silver', 104999.00, 10, '2018-08-13 13:10:59', '2018-08-13 13:10:59'),
(32, 15, 'MQD42HN-G', 'Grey', 104900.00, 50, '2018-08-13 13:11:00', '2018-08-13 13:11:00'),
(33, 17, 'MPXW2-G', 'Gray', 149999.00, 50, '2018-08-13 13:11:56', '2018-08-13 13:11:56'),
(34, 17, 'MPXW2-B', 'Black', 149999.00, 50, '2018-08-13 13:11:56', '2018-08-13 13:11:56'),
(35, 18, '43K5002-B', 'Black', 88115.00, 50, '2018-08-13 13:12:58', '2018-08-13 13:12:58'),
(36, 18, '43K5002-S', 'Silver', 88500.00, 10, '2018-08-13 13:12:58', '2018-08-13 13:12:58'),
(37, 19, 'I5012-B', 'Black', 77199.00, 50, '2018-08-13 13:13:57', '2018-08-13 13:13:57'),
(38, 19, 'I5012-S', 'Silver', 77699.00, 10, '2018-08-13 13:13:57', '2018-08-13 13:13:57'),
(39, 20, '32BHS-B', 'Black', 52489.00, 50, '2018-08-13 13:14:47', '2018-08-13 13:14:47'),
(40, 20, '32BHS-W', 'White', 52489.00, 50, '2018-08-13 13:14:47', '2018-08-13 13:14:47'),
(41, 21, '32W672F-B', 'Black', 64345.00, 50, '2018-08-13 13:15:44', '2018-08-13 13:15:44'),
(42, 21, '32W672F-G', 'Gold', 64345.00, 50, '2018-08-13 13:15:45', '2018-08-13 13:15:45'),
(43, 22, 'BP250-B', 'Black', 17984.00, 50, '2018-08-13 13:16:46', '2018-08-13 13:16:46'),
(44, 22, 'BP250-W', 'White', 18000.00, 10, '2018-08-13 13:18:14', '2018-08-13 13:18:14'),
(45, 23, 'FX5321-B', 'Black', 25218.00, 50, '2018-08-13 13:19:13', '2018-08-13 13:19:13'),
(46, 23, 'FX5321-S', 'Silver', 25500.00, 10, '2018-08-13 13:19:13', '2018-08-13 13:19:13'),
(47, 24, 'A46HN-B', 'Black', 17789.00, 50, '2018-08-13 13:20:01', '2018-08-13 13:20:01'),
(48, 24, 'A46HN-G', 'Gold', 17789.00, 50, '2018-08-13 13:20:01', '2018-08-13 13:20:01'),
(49, 25, '2CE5AC0T-W', 'White', 10971.00, 50, '2018-08-13 13:20:48', '2018-08-13 13:20:48'),
(50, 25, '2CE5AC0T-B', 'Black', 10971.00, 50, '2018-08-13 13:20:48', '2018-08-13 13:20:48'),
(51, 26, '2CE5AF1T-W', 'White', 9715.00, 50, '2018-08-13 13:21:36', '2018-08-13 13:21:36'),
(52, 26, '2CE5AF1T-B', 'Black', 9715.00, 50, '2018-08-13 13:21:36', '2018-08-13 13:21:36'),
(53, 27, '1300D-B', 'Black', 25490.00, 50, '2018-08-13 13:22:38', '2018-08-13 13:22:38'),
(54, 27, '1300D-S', 'Silver', 25990.00, 10, '2018-08-13 13:22:38', '2018-08-13 13:22:38'),
(55, 28, 'D7200-B', 'Black', 79950.00, 50, '2018-08-13 13:23:42', '2018-08-13 13:23:42'),
(56, 28, 'D7200-S', 'Silver', 79950.00, 50, '2018-08-13 13:23:42', '2018-08-13 13:23:42'),
(57, 29, 'SX540-B', 'Black', 18399.00, 50, '2018-08-13 13:24:44', '2018-08-13 13:24:44'),
(58, 29, 'SX540-bl', 'Blue', 18600.00, 10, '2018-08-13 13:24:44', '2018-08-13 13:24:44'),
(59, 30, 'WX220-P', 'Pink', 12972.00, 10, '2018-08-13 13:25:53', '2018-08-13 13:25:53'),
(60, 30, 'WX220-B', 'Black', 12000.00, 50, '2018-08-13 13:25:53', '2018-08-13 13:25:53'),
(61, 31, 'D221ABGX-Bl', 'Blue', 70730.00, 50, '2018-08-13 13:26:50', '2018-08-13 13:26:50'),
(62, 31, 'D221ABGX-Sl', 'Silver', 70730.00, 50, '2018-08-13 13:26:50', '2018-08-13 13:26:50'),
(63, 32, 'D221APZX-Sl', 'Silver', 67493.00, 50, '2018-08-13 13:27:50', '2018-08-13 13:27:50'),
(64, 32, 'D221APZX-Bl', 'Blue', 67493.00, 50, '2018-08-13 13:27:50', '2018-08-13 13:27:50'),
(65, 33, 'FH65W-W', 'White', 28295.00, 50, '2018-08-13 13:28:47', '2018-08-13 13:28:47'),
(66, 33, 'FH65W-Sl', 'Silver', 28895.00, 50, '2018-08-13 13:28:47', '2018-08-13 13:28:47');

-- --------------------------------------------------------

--
-- Table structure for table `products_images`
--

CREATE TABLE `products_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_images`
--

INSERT INTO `products_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(5, 2, '14878.jpeg', '2018-08-13 05:12:29', '2018-08-13 05:12:29'),
(6, 2, '63297.jpeg', '2018-08-13 05:12:29', '2018-08-13 05:12:29'),
(7, 2, '66922.jpeg', '2018-08-13 05:12:30', '2018-08-13 05:12:30'),
(8, 2, '71996.jpeg', '2018-08-13 05:12:30', '2018-08-13 05:12:30'),
(12, 4, '59665.jpg', '2018-08-13 05:33:24', '2018-08-13 05:33:24'),
(13, 4, '66126.jpg', '2018-08-13 05:33:25', '2018-08-13 05:33:25'),
(14, 4, '49593.jpg', '2018-08-13 05:33:26', '2018-08-13 05:33:26'),
(15, 4, '43172.jpg', '2018-08-13 05:33:27', '2018-08-13 05:33:27'),
(20, 3, '38351.jpg', '2018-08-13 07:06:38', '2018-08-13 07:06:38'),
(21, 3, '4174.jpg', '2018-08-13 07:06:38', '2018-08-13 07:06:38'),
(22, 3, '12110.jpg', '2018-08-13 07:06:38', '2018-08-13 07:06:38'),
(23, 3, '26468.jpg', '2018-08-13 07:06:38', '2018-08-13 07:06:38'),
(24, 1, '75593.jpg', '2018-08-13 07:14:22', '2018-08-13 07:14:22'),
(25, 1, '18399.jpg', '2018-08-13 07:14:22', '2018-08-13 07:14:22'),
(26, 1, '46114.jpg', '2018-08-13 07:14:22', '2018-08-13 07:14:22'),
(27, 1, '48246.jpg', '2018-08-13 07:14:22', '2018-08-13 07:14:22'),
(28, 5, '1269.jpeg', '2018-08-13 07:20:27', '2018-08-13 07:20:27'),
(29, 5, '50840.jpeg', '2018-08-13 07:20:27', '2018-08-13 07:20:27'),
(30, 5, '64872.jpeg', '2018-08-13 07:20:27', '2018-08-13 07:20:27'),
(31, 5, '6189.jpeg', '2018-08-13 07:20:28', '2018-08-13 07:20:28'),
(32, 6, '58025.jpeg', '2018-08-13 07:25:43', '2018-08-13 07:25:43'),
(33, 6, '37382.jpeg', '2018-08-13 07:25:43', '2018-08-13 07:25:43'),
(34, 6, '23530.jpeg', '2018-08-13 07:25:44', '2018-08-13 07:25:44'),
(35, 7, '15956.jpeg', '2018-08-13 07:43:17', '2018-08-13 07:43:17'),
(36, 7, '991.jpeg', '2018-08-13 07:43:18', '2018-08-13 07:43:18'),
(37, 8, '48889.jpeg', '2018-08-13 07:46:08', '2018-08-13 07:46:08'),
(38, 8, '68008.jpeg', '2018-08-13 07:46:09', '2018-08-13 07:46:09'),
(39, 9, '22943.jpeg', '2018-08-13 07:54:18', '2018-08-13 07:54:18'),
(40, 9, '65624.jpeg', '2018-08-13 07:54:19', '2018-08-13 07:54:19'),
(41, 9, '55145.jpeg', '2018-08-13 07:54:20', '2018-08-13 07:54:20'),
(42, 9, '36969.jpeg', '2018-08-13 07:54:22', '2018-08-13 07:54:22'),
(43, 9, '97613.jpeg', '2018-08-13 07:59:24', '2018-08-13 07:59:24'),
(44, 9, '66360.jpeg', '2018-08-13 07:59:24', '2018-08-13 07:59:24'),
(45, 9, '77171.jpeg', '2018-08-13 07:59:25', '2018-08-13 07:59:25'),
(46, 9, '28808.jpeg', '2018-08-13 07:59:25', '2018-08-13 07:59:25'),
(47, 11, '27579.jpeg', '2018-08-13 08:20:31', '2018-08-13 08:20:31'),
(48, 11, '16472.jpeg', '2018-08-13 08:20:31', '2018-08-13 08:20:31'),
(49, 11, '32923.jpeg', '2018-08-13 08:20:31', '2018-08-13 08:20:31'),
(50, 12, '17432.jpeg', '2018-08-13 08:25:13', '2018-08-13 08:25:13'),
(51, 12, '37224.jpeg', '2018-08-13 08:25:14', '2018-08-13 08:25:14'),
(52, 12, '9689.jpeg', '2018-08-13 08:25:14', '2018-08-13 08:25:14'),
(53, 14, '36442.jpeg', '2018-08-13 09:20:09', '2018-08-13 09:20:09'),
(54, 14, '56111.jpeg', '2018-08-13 09:20:09', '2018-08-13 09:20:09'),
(55, 14, '52042.jpeg', '2018-08-13 09:20:10', '2018-08-13 09:20:10'),
(56, 14, '8846.jpeg', '2018-08-13 09:20:10', '2018-08-13 09:20:10'),
(57, 15, '60623.jpeg', '2018-08-13 09:41:01', '2018-08-13 09:41:01'),
(58, 15, '78008.jpeg', '2018-08-13 09:41:01', '2018-08-13 09:41:01'),
(59, 15, '41591.jpeg', '2018-08-13 09:41:02', '2018-08-13 09:41:02'),
(60, 15, '35589.jpeg', '2018-08-13 09:41:02', '2018-08-13 09:41:02'),
(61, 17, '53927.jpeg', '2018-08-13 09:53:09', '2018-08-13 09:53:09'),
(62, 17, '67261.jpeg', '2018-08-13 09:53:11', '2018-08-13 09:53:11'),
(63, 17, '88570.jpeg', '2018-08-13 09:53:13', '2018-08-13 09:53:13'),
(64, 17, '17345.jpeg', '2018-08-13 09:53:14', '2018-08-13 09:53:14'),
(65, 18, '80955.jpeg', '2018-08-13 10:00:34', '2018-08-13 10:00:34'),
(66, 18, '63831.jpeg', '2018-08-13 10:00:36', '2018-08-13 10:00:36'),
(67, 18, '97307.jpeg', '2018-08-13 10:00:38', '2018-08-13 10:00:38'),
(68, 18, '54974.jpeg', '2018-08-13 10:00:40', '2018-08-13 10:00:40'),
(69, 19, '93268.jpeg', '2018-08-13 10:08:11', '2018-08-13 10:08:11'),
(70, 19, '75245.jpeg', '2018-08-13 10:08:11', '2018-08-13 10:08:11'),
(71, 19, '58089.jpeg', '2018-08-13 10:08:12', '2018-08-13 10:08:12'),
(72, 20, '82889.jpeg', '2018-08-13 10:12:33', '2018-08-13 10:12:33'),
(73, 20, '97502.jpeg', '2018-08-13 10:12:33', '2018-08-13 10:12:33'),
(74, 20, '40487.jpeg', '2018-08-13 10:12:34', '2018-08-13 10:12:34'),
(75, 20, '65529.jpeg', '2018-08-13 10:12:34', '2018-08-13 10:12:34'),
(76, 21, '9028.jpeg', '2018-08-13 10:31:14', '2018-08-13 10:31:14'),
(77, 21, '11895.jpeg', '2018-08-13 10:31:14', '2018-08-13 10:31:14'),
(78, 21, '8667.jpeg', '2018-08-13 10:31:15', '2018-08-13 10:31:15'),
(79, 21, '90838.jpeg', '2018-08-13 10:31:15', '2018-08-13 10:31:15'),
(80, 22, '96345.jpeg', '2018-08-13 10:35:02', '2018-08-13 10:35:02'),
(81, 22, '44588.jpeg', '2018-08-13 10:35:03', '2018-08-13 10:35:03'),
(82, 23, '2717.jpeg', '2018-08-13 10:38:35', '2018-08-13 10:38:35'),
(83, 23, '70854.jpeg', '2018-08-13 10:38:36', '2018-08-13 10:38:36'),
(84, 23, '56344.jpeg', '2018-08-13 10:38:36', '2018-08-13 10:38:36'),
(85, 23, '71326.jpeg', '2018-08-13 10:38:37', '2018-08-13 10:38:37'),
(86, 24, '39348.jpeg', '2018-08-13 11:07:01', '2018-08-13 11:07:01'),
(87, 24, '92333.jpeg', '2018-08-13 11:07:01', '2018-08-13 11:07:01'),
(88, 24, '73948.jpeg', '2018-08-13 11:07:02', '2018-08-13 11:07:02'),
(89, 24, '17475.jpeg', '2018-08-13 11:07:02', '2018-08-13 11:07:02'),
(90, 25, '79595.jpeg', '2018-08-13 11:20:03', '2018-08-13 11:20:03'),
(91, 25, '38151.jpeg', '2018-08-13 11:20:04', '2018-08-13 11:20:04'),
(92, 26, '77287.jpeg', '2018-08-13 11:23:06', '2018-08-13 11:23:06'),
(93, 26, '99059.jpeg', '2018-08-13 11:23:06', '2018-08-13 11:23:06'),
(94, 27, '28359.jpeg', '2018-08-13 11:26:27', '2018-08-13 11:26:27'),
(95, 27, '80147.jpeg', '2018-08-13 11:26:28', '2018-08-13 11:26:28'),
(96, 27, '19646.jpeg', '2018-08-13 11:26:30', '2018-08-13 11:26:30'),
(97, 27, '11355.jpeg', '2018-08-13 11:26:32', '2018-08-13 11:26:32'),
(98, 28, '23540.jpeg', '2018-08-13 11:53:22', '2018-08-13 11:53:22'),
(99, 28, '58315.jpeg', '2018-08-13 11:53:23', '2018-08-13 11:53:23'),
(100, 28, '71658.jpeg', '2018-08-13 11:53:23', '2018-08-13 11:53:23'),
(101, 28, '41272.jpeg', '2018-08-13 11:53:23', '2018-08-13 11:53:23'),
(102, 29, '85912.jpeg', '2018-08-13 11:59:10', '2018-08-13 11:59:10'),
(103, 29, '59908.jpeg', '2018-08-13 11:59:10', '2018-08-13 11:59:10'),
(104, 29, '58575.jpeg', '2018-08-13 11:59:11', '2018-08-13 11:59:11'),
(105, 29, '81746.jpeg', '2018-08-13 11:59:13', '2018-08-13 11:59:13'),
(106, 30, '89563.jpeg', '2018-08-13 12:03:55', '2018-08-13 12:03:55'),
(107, 30, '98052.jpeg', '2018-08-13 12:03:57', '2018-08-13 12:03:57'),
(108, 30, '18976.jpeg', '2018-08-13 12:03:59', '2018-08-13 12:03:59'),
(109, 30, '57916.jpeg', '2018-08-13 12:04:01', '2018-08-13 12:04:01'),
(110, 31, '38970.jpeg', '2018-08-13 12:10:58', '2018-08-13 12:10:58'),
(111, 31, '78320.jpeg', '2018-08-13 12:10:59', '2018-08-13 12:10:59'),
(112, 31, '16312.jpeg', '2018-08-13 12:10:59', '2018-08-13 12:10:59'),
(113, 31, '38197.jpeg', '2018-08-13 12:11:00', '2018-08-13 12:11:00'),
(114, 32, '70973.jpeg', '2018-08-13 12:19:26', '2018-08-13 12:19:26'),
(115, 32, '16349.jpeg', '2018-08-13 12:19:27', '2018-08-13 12:19:27'),
(116, 32, '48937.jpeg', '2018-08-13 12:19:27', '2018-08-13 12:19:27'),
(117, 32, '90496.jpeg', '2018-08-13 12:19:28', '2018-08-13 12:19:28'),
(118, 33, '32093.jpeg', '2018-08-13 12:27:13', '2018-08-13 12:27:13'),
(119, 33, '75133.jpeg', '2018-08-13 12:27:13', '2018-08-13 12:27:13'),
(120, 33, '12259.jpeg', '2018-08-13 12:27:14', '2018-08-13 12:27:14'),
(121, 33, '60816.jpeg', '2018-08-13 12:27:14', '2018-08-13 12:27:14');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `id` int(10) UNSIGNED NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`id`, `shipping_email`, `shipping_first_name`, `shipping_last_name`, `shipping_address`, `shipping_mobile`, `shipping_city`, `created_at`, `updated_at`) VALUES
(1, 'sumi@gmail.com', 'Sumi', 'Hossain', 'Mirpur', '01680050778', 'Dhaka', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hapsha', 'hapsha@gmail.com', '$2y$10$EzYdHj0lVhHf94xCAMW5e.d/yeD7Niz3AkvHraPhV79z4iwt9MQvC', 1, 'BJuMPbNVfOeTP3AuJrOindSocQFQPqnTbyjxba5hnUi4LwaooTnSigoB9VnZ', '2018-07-23 05:51:33', '2018-07-23 05:51:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_attributes`
--
ALTER TABLE `products_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_images`
--
ALTER TABLE `products_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `products_attributes`
--
ALTER TABLE `products_attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `products_images`
--
ALTER TABLE `products_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
