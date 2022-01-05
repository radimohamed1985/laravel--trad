-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2022 at 02:36 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trading`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `invoice_serial` int(11) NOT NULL,
  `dept` decimal(8,2) NOT NULL,
  `credit` decimal(8,2) NOT NULL,
  `balance` decimal(8,2) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `client_id`, `invoice_serial`, `dept`, `credit`, `balance`, `date`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '220.00', '0.00', '220.00', '2021-12-23', '2021-12-23 13:09:42', '2021-12-23 13:09:42'),
(4, 1, 2, '110.00', '0.00', '330.00', '2021-12-23', '2021-12-23 13:14:47', '2021-12-23 13:14:47'),
(5, 1, 0, '0.00', '100.00', '230.00', '2021-12-25', '2021-12-25 11:45:21', '2021-12-25 11:45:21'),
(6, 1, 0, '0.00', '30.00', '200.00', '2021-12-25', '2021-12-25 11:53:37', '2021-12-25 11:53:37'),
(7, 1, 0, '0.00', '50.00', '150.00', '2021-12-25', '2021-12-25 11:55:04', '2021-12-25 11:55:04'),
(8, 1, 0, '0.00', '50.00', '100.00', '2021-12-25', '2021-12-25 11:57:54', '2021-12-25 11:57:54'),
(9, 1, 3, '220.00', '0.00', '320.00', '2021-12-25', '2021-12-25 11:58:47', '2021-12-25 11:58:47'),
(10, 1, 0, '0.00', '100.00', '220.00', '2021-12-25', '2021-12-25 11:59:18', '2021-12-25 11:59:18'),
(11, 1, 0, '0.00', '50.00', '170.00', '2021-12-25', '2021-12-25 11:59:54', '2021-12-25 11:59:54'),
(12, 1, 4, '220.00', '0.00', '610.00', '2021-12-25', '2021-12-25 12:11:00', '2021-12-25 12:12:17'),
(13, 1, 0, '0.00', '110.00', '500.00', '2021-12-26', '2021-12-26 12:26:36', '2021-12-26 12:26:36'),
(14, 1, 0, '0.00', '100.00', '400.00', '2021-12-26', '2021-12-26 12:27:55', '2021-12-26 12:27:55'),
(15, 2, 5, '1100.00', '0.00', '1100.00', '2021-12-26', '2021-12-26 14:26:57', '2021-12-26 14:26:57'),
(16, 1, 6, '110.00', '0.00', '510.00', '2021-12-27', '2021-12-27 13:59:08', '2021-12-27 13:59:08'),
(17, 1, 7, '550.00', '0.00', '1060.00', '2021-12-28', '2021-12-28 10:59:10', '2021-12-28 10:59:10'),
(18, 1, 0, '0.00', '500.00', '560.00', '2021-12-28', '2021-12-28 11:00:23', '2021-12-28 11:00:23'),
(19, 3, 8, '220.00', '0.00', '220.00', '2022-01-02', '2022-01-02 11:02:14', '2022-01-02 11:02:14'),
(20, 3, 0, '0.00', '100.00', '120.00', '2022-01-02', '2022-01-02 11:04:54', '2022-01-02 11:04:54'),
(21, 3, 0, '0.00', '30.00', '90.00', '2022-01-02', '2022-01-02 11:17:00', '2022-01-02 11:17:00'),
(22, 4, 9, '290.00', '0.00', '290.00', '2022-01-02', '2022-01-02 19:59:39', '2022-01-02 19:59:39'),
(23, 4, 0, '0.00', '100.00', '190.00', '2022-01-02', '2022-01-02 20:00:24', '2022-01-02 20:00:24');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `client_name`, `created_at`, `updated_at`) VALUES
(1, 'ناصر الهدايا', '2021-12-22 12:50:12', '2021-12-22 12:50:12'),
(2, 'عباد الرحمن', '2021-12-22 12:50:17', '2021-12-22 12:50:17'),
(3, 'قهوة بلدي', '2022-01-02 11:01:38', '2022-01-02 11:01:38'),
(4, 'ابراهيم للتجارة', '2022-01-02 19:58:39', '2022-01-02 19:58:39');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `in_serial` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `in_total` decimal(8,2) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `in_serial`, `client_id`, `in_total`, `date`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '220.00', '2021-12-23', '2021-12-23 13:09:42', '2021-12-23 13:09:42'),
(4, 2, 1, '110.00', '2021-12-23', '2021-12-23 13:14:47', '2021-12-23 13:14:47'),
(5, 3, 1, '220.00', '2021-12-25', '2021-12-25 11:58:47', '2021-12-25 11:58:47'),
(6, 4, 1, '220.00', '2021-12-25', '2021-12-25 12:11:00', '2021-12-25 12:12:17'),
(7, 5, 2, '1100.00', '2021-12-26', '2021-12-26 14:26:57', '2021-12-26 14:26:57'),
(8, 6, 1, '110.00', '2021-12-27', '2021-12-27 13:59:08', '2021-12-27 13:59:08'),
(9, 7, 1, '550.00', '2021-12-28', '2021-12-28 10:59:10', '2021-12-28 10:59:10'),
(10, 8, 3, '220.00', '2022-01-02', '2022-01-02 11:02:14', '2022-01-02 11:02:14'),
(11, 9, 4, '290.00', '2022-01-02', '2022-01-02 19:59:39', '2022-01-02 19:59:39');

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
(34, '2014_10_12_000000_create_users_table', 1),
(35, '2014_10_12_100000_create_password_resets_table', 1),
(36, '2019_08_19_000000_create_failed_jobs_table', 1),
(37, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(38, '2021_12_13_114356_create_products_table', 1),
(39, '2021_12_13_114522_create_clients_table', 1),
(40, '2021_12_13_114606_create_sales_table', 1),
(41, '2021_12_13_114647_create_invoices_table', 1),
(42, '2021_12_13_114720_create_accounts_table', 1),
(43, '2021_12_21_122559_create_suppliers_table', 1),
(44, '2021_12_25_142959_create_tregeries_table', 2),
(45, '2021_12_26_125246_create_supplier_account_table', 3),
(46, '2021_12_27_155321_add_total_cost_to_sales_table', 4);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost_price` decimal(8,2) NOT NULL,
  `sale_price` decimal(8,2) NOT NULL,
  `pro_qty` int(11) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `cost_price`, `sale_price`, `pro_qty`, `total`, `date`, `created_at`, `updated_at`) VALUES
(1, 'سكر', '200.00', '220.00', 75, '2200.00', '2021-12-22', '2021-12-22 12:45:54', '2022-01-02 11:21:53'),
(3, 'بيبسي', '105.00', '110.00', 127, '1100.00', '2021-12-22', '2021-12-22 12:46:59', '2022-01-02 19:59:18'),
(4, 'لبن جهينة', '175.00', '180.00', 59, '5400.00', '2021-12-22', '2021-12-22 12:47:17', '2022-01-02 19:59:29');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `sale_serial` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `sale_cost` decimal(8,2) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `sale_qty` int(11) NOT NULL,
  `sale_total` decimal(8,2) NOT NULL,
  `total_cost` decimal(10,0) NOT NULL,
  `sale_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `sale_serial`, `product_id`, `client_id`, `sale_cost`, `price`, `sale_qty`, `sale_total`, `total_cost`, `sale_date`, `created_at`, `updated_at`) VALUES
(7, 1, 1, 1, '200.00', '220.00', 1, '220.00', '200', '2021-12-23', '2021-12-23 13:09:37', '2021-12-23 13:09:37'),
(10, 2, 3, 1, '106.00', '110.00', 1, '110.00', '106', '2021-12-23', '2021-12-23 13:14:42', '2021-12-23 13:14:42'),
(11, 3, 3, 1, '106.00', '110.00', 2, '220.00', '212', '2021-12-25', '2021-12-25 11:58:40', '2021-12-25 11:58:40'),
(12, 4, 1, 1, '200.00', '220.00', 1, '220.00', '200', '2021-12-25', '2021-12-25 12:09:29', '2021-12-25 12:09:29'),
(13, 5, 3, 2, '105.00', '110.00', 10, '1100.00', '1050', '2021-12-26', '2021-12-26 14:26:51', '2021-12-26 14:26:51'),
(14, 6, 3, 1, '105.00', '110.00', 1, '110.00', '105', '2021-12-27', '2021-12-27 13:59:01', '2021-12-27 13:59:01'),
(15, 7, 1, 1, '200.00', '220.00', 1, '220.00', '200', '2021-12-28', '2021-12-28 10:58:19', '2021-12-28 10:58:19'),
(16, 7, 3, 1, '105.00', '110.00', 3, '330.00', '315', '2021-12-28', '2021-12-28 10:58:34', '2021-12-28 10:58:34'),
(17, 8, 1, 3, '200.00', '220.00', 1, '220.00', '200', '2022-01-02', '2022-01-02 11:02:06', '2022-01-02 11:02:06'),
(18, 9, 3, 4, '105.00', '110.00', 1, '110.00', '105', '2022-01-02', '2022-01-02 19:59:19', '2022-01-02 19:59:19'),
(19, 9, 4, 4, '175.00', '180.00', 1, '180.00', '175', '2022-01-02', '2022-01-02 19:59:29', '2022-01-02 19:59:29');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `supplier_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `supplier_name`, `created_at`, `updated_at`) VALUES
(1, 'السلامة', NULL, NULL),
(2, 'الشيخ اشرف', NULL, NULL),
(3, 'الحج كامل الصافى', '2022-01-02 12:57:01', '2022-01-02 12:57:01'),
(4, 'العسال للتوريدات', '2022-01-02 13:02:47', '2022-01-02 13:02:47');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_account`
--

CREATE TABLE `supplier_account` (
  `id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `dept` decimal(8,2) NOT NULL,
  `credit` decimal(8,2) NOT NULL,
  `balance` decimal(8,2) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supplier_account`
--

INSERT INTO `supplier_account` (`id`, `supplier_id`, `dept`, `credit`, `balance`, `date`, `created_at`, `updated_at`) VALUES
(6, 1, '2200.00', '2200.00', '500.00', '2021-12-26', '2021-12-26 12:07:29', '2021-12-26 12:07:29'),
(7, 1, '0.00', '1100.00', '1600.00', '2021-12-26', '2021-12-26 12:09:02', '2021-12-26 12:09:02'),
(8, 1, '600.00', '0.00', '1000.00', '2021-12-26', '2021-12-26 12:11:16', '2021-12-26 12:11:16'),
(9, 1, '1700.00', '1700.00', '1000.00', '2021-12-26', '2021-12-26 12:16:35', '2021-12-26 12:16:35'),
(10, 1, '0.00', '1060.00', '2060.00', '2021-12-26', '2021-12-26 12:17:23', '2021-12-26 12:17:23'),
(11, 1, '560.00', '0.00', '1500.00', '2021-12-26', '2021-12-26 12:17:56', '2021-12-26 12:17:56'),
(12, 1, '0.00', '6864.00', '8364.00', '2021-12-26', '2021-12-26 14:26:18', '2021-12-26 14:26:18'),
(13, 1, '0.00', '5400.00', '13764.00', '2021-12-27', '2021-12-27 14:03:56', '2021-12-27 14:03:56'),
(14, 1, '2000.00', '2000.00', '13764.00', '2022-01-02', '2022-01-02 11:21:53', '2022-01-02 11:21:53'),
(15, 1, '500.00', '0.00', '13264.00', '2022-01-02', '2022-01-02 12:07:25', '2022-01-02 12:07:25'),
(16, 1, '0.00', '1050.00', '14314.00', '2022-01-02', '2022-01-02 12:13:28', '2022-01-02 12:13:28'),
(17, 1, '314.00', '0.00', '14000.00', '2022-01-03', '2022-01-02 20:02:20', '2022-01-02 20:02:20');

-- --------------------------------------------------------

--
-- Table structure for table `tregeries`
--

CREATE TABLE `tregeries` (
  `id` int(11) NOT NULL,
  `dept` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tregeries`
--

INSERT INTO `tregeries` (`id`, `dept`, `credit`, `balance`, `date`, `created_at`, `updated_at`) VALUES
(1, 10000, 0, 10000, '2021-12-26', '2021-12-26 12:06:41', '2021-12-26 12:06:41'),
(2, 0, 2200, 7800, '2021-12-26', '2021-12-26 12:07:29', '2021-12-26 12:07:29'),
(3, 0, 600, 7200, '2021-12-26', '2021-12-26 12:11:16', '2021-12-26 12:11:16'),
(4, 0, 1700, 5500, '2021-12-26', '2021-12-26 12:16:35', '2021-12-26 12:16:35'),
(5, 0, 560, 4940, '2021-12-26', '2021-12-26 12:17:56', '2021-12-26 12:17:56'),
(6, 110, 0, 5050, '2021-12-26', '2021-12-26 12:26:36', '2021-12-26 12:26:36'),
(7, 100, 0, 5150, '2021-12-26', '2021-12-26 12:27:55', '2021-12-26 12:27:55'),
(8, 500, 0, 5650, '2021-12-28', '2021-12-28 11:00:23', '2021-12-28 11:00:23'),
(9, 100, 0, 5750, '2022-01-02', '2022-01-02 11:04:54', '2022-01-02 11:04:54'),
(10, 0, 100, 5650, '2022-01-02', '2022-01-02 11:06:19', '2022-01-02 11:06:19'),
(11, 30, 0, 5680, '2022-01-02', '2022-01-02 11:17:00', '2022-01-02 11:17:00'),
(12, 500, 0, 6180, '2022-01-02', '2022-01-02 11:17:50', '2022-01-02 11:17:50'),
(13, 1000, 0, 7180, '2022-01-02', '2022-01-02 11:19:43', '2022-01-02 11:19:43'),
(14, 0, 500, 6680, '2022-01-02', '2022-01-02 11:19:58', '2022-01-02 11:19:58'),
(15, 0, 2000, 4680, '2022-01-02', '2022-01-02 11:21:53', '2022-01-02 11:21:53'),
(16, 0, 500, 4180, '2022-01-02', '2022-01-02 12:07:26', '2022-01-02 12:07:26'),
(17, 100, 0, 4280, '2022-01-02', '2022-01-02 20:00:24', '2022-01-02 20:00:24'),
(18, 0, 314, 3966, '2022-01-03', '2022-01-02 20:02:20', '2022-01-02 20:02:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 'mohamed ahmed radi', 'radimohamed1985@gmail.com', NULL, '$2y$10$.9nFlu4ZayrVoqCNxknRjeof89oWxX5W9OI8h5KduLYb2cjpAFXWa', NULL, '2021-12-22 12:45:18', '2021-12-22 12:45:18'),
(2, 'eslam', 'eslam@yahoo.com', NULL, '$2y$10$dUfveDMeqqd1BFI3FaH7WunVwtabycDSlHnjjxzH.kxDFMzJYz9n2', NULL, '2022-01-02 12:37:27', '2022-01-02 12:37:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_product_name_unique` (`product_name`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sales_product_id_foreign` (`product_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier_account`
--
ALTER TABLE `supplier_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tregeries`
--
ALTER TABLE `tregeries`
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
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supplier_account`
--
ALTER TABLE `supplier_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tregeries`
--
ALTER TABLE `tregeries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
