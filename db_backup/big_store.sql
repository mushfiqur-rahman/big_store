-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2019 at 05:03 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `big_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'OnePlus', 'taiwan phone', 1, '2019-01-18 06:52:57', '2019-01-20 21:21:43'),
(2, 'Iphone', 'Apple OS phone', 1, '2019-01-18 06:53:16', '2019-01-20 09:07:08'),
(3, 'BMW', 'automobiles brand', 1, '2019-01-21 12:18:44', '2019-01-21 12:18:44'),
(4, 'Audi', 'Elon mask brand', 1, '2019-01-21 12:18:57', '2019-01-21 12:18:57'),
(5, 'Lamborghini', 'stylish car', 1, '2019-01-21 12:19:14', '2019-01-21 12:19:14'),
(6, 'Nokia', 'Phone company', 1, '2019-01-21 12:19:42', '2019-01-21 12:19:42'),
(7, 'Huwai', 'china phone', 1, '2019-01-21 12:20:06', '2019-01-21 12:20:06'),
(8, 'SIRIN Labs', 'blockchain phone', 1, '2019-01-21 12:20:58', '2019-01-21 12:20:58'),
(9, 'Apple', 'usa brand', 1, '2019-01-21 12:21:23', '2019-01-21 12:21:23'),
(10, 'Acer', 'It\'s laptop brand', 1, '2019-01-21 12:21:44', '2019-01-21 12:21:44'),
(11, 'Asus', 'Computer accessories', 1, '2019-01-21 12:22:01', '2019-01-21 12:22:01'),
(12, 'Fighter', 'asdfasdghfnhj', 1, '2019-01-21 21:25:07', '2019-01-21 21:25:07'),
(13, 'Ray Ban', 'sunglass brand', 1, '2019-01-21 21:32:18', '2019-01-21 21:32:18'),
(14, 'gucci', 'one kind of cloth brand', 1, '2019-02-13 23:36:05', '2019-02-13 23:36:05');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Phone', 'various kinds of mobile phone', 1, '2019-01-18 06:52:09', '2019-02-13 23:35:07'),
(2, 'Computer', 'laptop PC tablet', 1, '2019-01-18 06:52:33', '2019-01-18 06:52:33'),
(3, 'Car', 'Audi BMW lamborghini', 1, '2019-01-21 12:18:11', '2019-01-21 12:18:11'),
(4, 'FIGHTER JET', 'biman plane', 1, '2019-01-21 12:22:54', '2019-01-21 21:24:29'),
(5, 'Flower', 'various kinds of ful', 1, '2019-01-21 12:23:27', '2019-01-21 12:23:27'),
(6, 'Glass', 'men & women', 1, '2019-01-21 12:24:07', '2019-01-21 12:24:07'),
(7, 'T-Shirt', 'cloth', 1, '2019-02-13 23:35:29', '2019-02-13 23:35:29');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email_address`, `password`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Mr.', 'Rasel', 'mushfiq.kdu@outlook.com', '$2y$10$.WxWqf/Mg8NbPaBdXApnp.HA2.ZeJXfo/TcVtjPe2XfqX6xqpAbQq', '01521454482', 'sdgfhg', '2019-02-27 23:17:24', '2019-02-27 23:17:24');

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
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_01_15_160553_create_categories_table', 1),
(9, '2019_01_17_032109_create_brands_table', 1),
(10, '2019_01_17_172539_create_products_table', 1),
(11, '2019_01_22_024934_create_products_table', 2),
(12, '2019_01_28_022125_create_customers_table', 3),
(13, '2019_01_28_091712_create_customers_table', 4),
(14, '2019_01_29_035450_create_shippings_table', 5),
(15, '2019_01_29_060910_create_orders_table', 6),
(16, '2019_01_29_061823_create_payments_table', 6),
(17, '2019_01_29_062045_create_order_details_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `order_total` double(10,2) NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `shipping_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(5, 1, 10, 500.00, 'Pending', '2019-03-04 20:35:20', '2019-03-04 20:35:20');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `created_at`, `updated_at`) VALUES
(1, 11, 10, 'Ray Ban', 50.00, 1, '2019-01-29 21:27:42', '2019-01-29 21:27:42'),
(2, 2, 10, 'Ray Ban', 50.00, 2, '2019-02-01 23:16:24', '2019-02-01 23:16:24'),
(3, 2, 11, 'Men T-shirt', 100.00, 5, '2019-02-13 23:40:50', '2019-02-13 23:40:50'),
(4, 3, 4, 'Lamborghini', 9876.00, 1, '2019-03-04 09:10:46', '2019-03-04 09:10:46'),
(5, 4, 4, 'Lamborghini', 9876.00, 1, '2019-03-04 09:12:34', '2019-03-04 09:12:34'),
(6, 5, 6, 'Chain phone', 500.00, 1, '2019-03-04 20:35:20', '2019-03-04 20:35:20'),
(7, 6, 3, 'Zen Book', 800000.00, 1, '2019-03-04 21:49:28', '2019-03-04 21:49:28');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `payment_type`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Cash', 'Pending', '2019-01-29 20:29:33', '2019-01-29 20:29:33'),
(2, 2, 'Cash', 'Pending', '2019-01-29 20:30:30', '2019-01-29 20:30:30'),
(3, 3, 'Cash', 'Pending', '2019-01-29 20:31:49', '2019-01-29 20:31:49'),
(4, 4, 'Cash', 'Pending', '2019-01-29 20:41:30', '2019-01-29 20:41:30'),
(5, 5, 'Cash', 'Pending', '2019-01-29 20:43:48', '2019-01-29 20:43:48'),
(6, 6, 'Cash', 'Pending', '2019-01-29 20:44:22', '2019-01-29 20:44:22'),
(7, 7, 'Cash', 'Pending', '2019-01-29 21:13:17', '2019-01-29 21:13:17'),
(8, 8, 'Cash', 'Pending', '2019-01-29 21:14:48', '2019-01-29 21:14:48'),
(9, 9, 'Cash', 'Pending', '2019-01-29 21:18:11', '2019-01-29 21:18:11'),
(10, 10, 'Cash', 'Pending', '2019-01-29 21:27:08', '2019-01-29 21:27:08'),
(11, 11, 'Cash', 'Pending', '2019-01-29 21:27:42', '2019-01-29 21:27:42'),
(12, 2, 'Cash', 'Pending', '2019-02-01 23:16:24', '2019-02-01 23:16:24'),
(13, 2, 'Cash', 'Pending', '2019-02-13 23:40:50', '2019-02-13 23:40:50'),
(14, 3, 'Cash', 'Pending', '2019-03-04 09:10:46', '2019-03-04 09:10:46'),
(15, 4, 'Cash', 'Pending', '2019-03-04 09:12:34', '2019-03-04 09:12:34'),
(16, 5, 'Cash', 'Pending', '2019-03-04 20:35:20', '2019-03-04 20:35:20'),
(17, 6, 'Cash', 'Pending', '2019-03-04 21:49:28', '2019-03-04 21:49:28');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `product_name`, `product_price`, `product_quantity`, `short_description`, `long_description`, `product_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 3, 3, 'BMW Car', 9865423.00, 522, 'originally an initialism for Bayerische Motoren Werke in German, or', '<p>BMW AG&nbsp; originally an initialism for Bayerische Motoren Werke in German, or Bavarian Motor Works in English) is a German multinational company which currently produces luxuryBMW AG (German:&nbsp; originally an initialism for Bayerische Motoren Werke in German, or Bavarian Motor Works in English) is a German multinational company which currently produces luxury</p>', 'product-image/BMW Car.jpg', 1, '2019-01-21 21:07:24', '2019-01-21 21:07:24'),
(2, 2, 10, 'Predator', 900000.00, 8500, 'EVERY STORY HAS ITS BEGINNING AND THERE’S MUCH MORE TO COME.\r\n\r\nBE A PART OF THE JOURNEY.', '<h3>EVERY STORY HAS ITS BEGINNING AND THERE&rsquo;S MUCH MORE TO COME.<br />\r\n<br />\r\nBE A PART OF THE JOURNEY.</h3>\r\n\r\n<h3>EVERY STORY HAS ITS BEGINNING AND THERE&rsquo;S MUCH MORE TO COME.<br />\r\n<br />\r\nBE A PART OF THE JOURNEY.</h3>\r\n\r\n<h3>EVERY STORY HAS ITS BEGINNING AND THERE&rsquo;S MUCH MORE TO COME.<br />\r\n<br />\r\nBE A PART OF THE JOURNEY.</h3>', 'product-image/Predator.jpg', 1, '2019-01-21 21:09:32', '2019-01-21 21:09:32'),
(3, 2, 11, 'Zen Book', 800000.00, 500, 'Super slim pc', '<p>You&rsquo;re ready to do amazing things in life. ASUS ZenBook laptops are ready to do them with you. Whether your thing takes portability, versatility, innovation, or all of the above, discover the ASUS ZenBook that&rsquo;s right for you.</p>\r\n\r\n<p>You&rsquo;re ready to do amazing things in life. ASUS ZenBook laptops are ready to do them with you. Whether your thing takes portability, versatility, innovation, or all of the above, discover the ASUS ZenBook that&rsquo;s right for you.</p>\r\n\r\n<p>&nbsp;</p>', 'product-image/Zen Book.jpg', 1, '2019-01-21 21:13:28', '2019-01-21 21:13:28'),
(4, 3, 5, 'Lamborghini', 9876.00, 100, 'the stylish car', '<p>the stylish carthe stylish carthe stylish carthe stylish carthe stylish carthe stylish carthe stylish carthe stylish carthe stylish carthe stylish carthe stylish carthe stylish carthe stylish carthe stylish carthe stylish carthe stylish carthe stylish carthe stylish carthe stylish carthe stylish carthe stylish carthe stylish carthe stylish carthe stylish carthe stylish carthe stylish carthe stylish carthe stylish car</p>', 'product-image/Lamborghini.jpg', 1, '2019-01-21 21:16:23', '2019-01-21 21:16:23'),
(5, 1, 6, 'Nokia 9', 6325.00, 20, 'nokia prem koro dekhaiye', '<p>klasdgflsdkfjghgfkfmdg slkdjglkdfsgmbv,.xmv</p>', 'product-image/Nokia 9.jpg', 1, '2019-01-21 21:18:17', '2019-01-21 21:18:17'),
(6, 1, 8, 'Chain phone', 500.00, -3, 'Escape from the sun and discover a chic collection of glare-beating designer shades by Prada, Ray-Ban, Oakley and more.', '<h2>Escape from the sun and discover a chic collection of glare-beating designer shades by Prada, Ray-Ban, Oakley and more.</h2>\r\n\r\n<h2>Escape from the sun and discover a chic collection of glare-beating designer shades by Prada, Ray-Ban, Oakley and more.</h2>\r\n\r\n<p>&nbsp;</p>', 'product-image/Chain phone.jpg', 1, '2019-01-21 21:20:48', '2019-01-21 21:20:48'),
(7, 6, 11, 'Disney Spring', 200.00, 500, 'Escape from the sun and discover a chic collection of glare-beating designer shades by Prada, Ray-Ban, Oakley and more.', '<h2>Escape from the sun and discover a chic collection of glare-beating designer shades by Prada, Ray-Ban, Oakley and more.</h2>\r\n\r\n<h2>Escape from the sun and discover a chic collection of glare-beating designer shades by Prada, Ray-Ban, Oakley and more.</h2>\r\n\r\n<p>&nbsp;</p>', 'product-image/Disney Spring.jpg', 1, '2019-01-21 21:21:38', '2019-01-21 21:21:38'),
(8, 4, 12, 'B 52', 987654.00, 2000, 'A fighter aircraft is a military aircraft designed primarily for air-to-air combat against other aircraft, as opposed to bombers and attack aircraft, whose main mission', '<p>A <em>fighter aircraft</em> is a military aircraft designed primarily for air-to-air combat against other aircraft, as opposed to bombers and attack aircraft, whose main mission A <em>fighter aircraft</em> is a military aircraft designed primarily for air-to-air combat against other aircraft, as opposed to bombers and attack aircraft, whose main mission A <em>fighter aircraft</em> is a military aircraft designed primarily for air-to-air combat against other aircraft, as opposed to bombers and attack aircraft, whose main mission</p>', 'product-image/B 52.jpg', 1, '2019-01-21 21:26:21', '2019-01-21 21:26:21'),
(9, 4, 12, 'Nighthawk', 2000.00, 30, 'A fighter aircraft is a military aircraft designed primarily for air-to-air combat against other aircraft, as opposed to bombers and attack aircraft, whose main mission', '<p>A <em>fighter aircraft</em> is a military aircraft designed primarily for air-to-air combat against other aircraft, as opposed to bombers and attack aircraft, whose main mission A <em>fighter aircraft</em> is a military aircraft designed primarily for air-to-air combat against other aircraft, as opposed to bombers and attack aircraft, whose main mission A <em>fighter aircraft</em> is a military aircraft designed primarily for air-to-air combat against other aircraft, as opposed to bombers and attack aircraft, whose main mission</p>', 'product-image/Nighthawk.jpg', 1, '2019-01-21 21:27:11', '2019-01-21 21:27:11'),
(10, 6, 13, 'Ray Ban', 50.00, 5, 'A fighter aircraft is a military aircraft designed primarily for air-to-air combat against other aircraft, as opposed to bombers and attack aircraft, whose main mission', '<p>A <em>fighter aircraft</em> is a military aircraft designed primarily for air-to-air combat against other aircraft, as opposed to bombers and attack aircraft, whose main mission A <em>fighter aircraft</em> is a military aircraft designed primarily for air-to-air combat against other aircraft, as opposed to bombers and attack aircraft, whose main mission</p>', 'product-image/Ray Ban.jpg', 1, '2019-01-21 21:33:09', '2019-01-21 21:33:09'),
(11, 7, 14, 'Men T-shirt', 100.00, 150, 'sadgfklsajj', '<p>sdggdhjjfgh</p>', 'product-image/Men T-shirt.jpg', 1, '2019-02-13 23:37:05', '2019-02-13 23:37:05');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `full_name`, `email_address`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(7, 'Mr. Rasel', 'mushfiq.kdu@outlook.com', '01521454482', 'sdgfhg', '2019-02-28 10:30:58', '2019-02-28 10:30:58'),
(8, 'Mr. Rasel', 'mushfiq.kdu@outlook.com', '01521454482', 'sdgfhg', '2019-03-04 07:17:37', '2019-03-04 07:17:37'),
(9, 'Mr. Rasel', 'mushfiq.kdu@outlook.com', '01521454482', 'sdgfhg', '2019-03-04 09:10:41', '2019-03-04 09:10:41'),
(10, 'Mr. Rasel', 'mushfiq.kdu@outlook.com', '01521454482', 'sdgfhg', '2019-03-04 20:35:14', '2019-03-04 20:35:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'mushfiq.kdu@gmail.com', NULL, '$2y$10$a65myrcrh7/0jEwPFWo/neC3MxymVg70gGJZbk1Gl6oJCyaRtmDK2', 'mvlWTwQ5e0eX4pkmeicSbJmxOxNXX8As9zoTYDb1qO69CRJxZQ465mT2Rnqp', '2019-01-18 06:38:31', '2019-01-18 06:38:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
