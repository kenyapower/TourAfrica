-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Mar 28, 2022 at 03:00 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourafrica`
--

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `drivercode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phoneNumber` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `driverimage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `driverlicense` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `driverlevel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registeredby` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tos` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `drivercode`, `fname`, `sname`, `lname`, `phoneNumber`, `driverimage`, `driverlicense`, `driverlevel`, `registeredby`, `tos`, `created_at`, `updated_at`) VALUES
(1, 'jamoEAncb', 'jamo', 'wachira', 'gatambo', '254795573509', 'C:\\xampp\\tmp\\php2F18.tmp', 'EAncb.he.jpg', NULL, NULL, 'agreed', '2022-03-16 07:01:51', '2022-03-16 07:01:51'),
(2, 'jamom63KV', 'jamo', 'wachira', 'gatambo', '254795573567', 'm63KV.sugar.jpg', 'm63KV.he.jpg', 'Primary', NULL, 'agreed', '2022-03-16 07:59:52', '2022-03-16 07:59:52'),
(4, 'piusG69nD', 'pius', 'jeje', 'shaniah', '254721289195', 'G69nD.KIZARU.jpg', 'G69nD.license1.jpeg', 'Primary', NULL, 'agreed', '2022-03-16 09:51:07', '2022-03-16 09:51:07'),
(5, 'Baba6NPKd', 'Baba', 'kim', 'mikani', '254795573500', '6NPKd.Zoro.jpg', '6NPKd.license1.jpeg', 'Primary', NULL, 'agreed', '2022-03-16 10:07:51', '2022-03-16 10:07:51'),
(6, 'PapajJ48L', 'Papa', 'Jack', 'son', '254786653434', 'jJ48L.luffy2.jpg', 'jJ48L.license1.jpeg', 'Primary', NULL, 'agreed', '2022-03-19 07:44:22', '2022-03-19 07:44:22'),
(7, 'NicknjUki', 'Nick', 'wachira', 'Gaicugi', '254795578765', 'njUki.Zoro.jpg', 'njUki.license1.jpeg', 'Assistant', 'PapajJ48L', 'Agreed', '2022-03-19 10:02:32', '2022-03-19 10:02:32');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoiceNumber` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_fname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_lname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day_booked` int(255) DEFAULT NULL,
  `destination` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehicle_reg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehicle_make` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehicle_capacity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehicle_driver` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehicle_rate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amountpaid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoicestatus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `invoiceNumber`, `c_fname`, `c_lname`, `c_email`, `c_phone`, `c_location`, `day_booked`, `destination`, `vehicle_reg`, `vehicle_make`, `vehicle_capacity`, `vehicle_driver`, `vehicle_rate`, `amountpaid`, `invoicestatus`, `created_at`, `updated_at`) VALUES
(2, 'tjuZSq', 'vincent', 'Wachira', 'vincentn371@gmail.com', '0795573597', 'Ngara', 5, 'Castle', 'KCR 167w', 'NISSAN SUNNY', '4', NULL, '8', '40', 'Open & Valid', '2022-03-23 08:06:58', '2022-03-23 08:06:58'),
(3, '1Z1izm', 'vincent', 'Wachira', 'vincentn371@gmail.com', '254795573597', 'Ngara', 2, 'Castle', 'KCR 167w', 'NISSAN SUNNY', '4', 'jamoEAncb', '8', '16', 'Open & Valid', '2022-03-25 06:50:43', '2022-03-25 06:50:43'),
(4, 'FbnmZE', 'vincent', 'Wachira', 'vincentn371@gmail.com', '254795573597', 'Ngara', 4, 'Castle', 'KCR 167w', 'NISSAN SUNNY', '4', 'jamoEAncb', '8', '32', 'Open & Valid', '2022-03-25 07:01:46', '2022-03-25 07:01:46'),
(5, 'yLhuyr', 'vincent', 'Wachira', 'vincentn371@gmail.com', '+254795573597', 'Ngara', 3, 'Castle', 'KCR 167w', 'NISSAN SUNNY', '4', 'jamoEAncb', '8', '24', 'Open & Valid', '2022-03-25 07:03:40', '2022-03-25 07:03:40'),
(6, '2lRKcG', 'vincent', 'Wachira', 'vincentn371@gmail.com', '+254795573597', 'Ngara', 3, 'Castle', 'KCR 167w', 'NISSAN SUNNY', '4', 'jamoEAncb', '8', '24', 'Open & Valid', '2022-03-26 12:48:43', '2022-03-26 12:48:43'),
(7, 'exacSg', 'vincent', 'Wachira', 'vincentn371@gmail.com', '+254795573597', 'Ngara', 2, 'Castle', 'KCR 167w', 'NISSAN SUNNY', '4', 'jamoEAncb', '8', '16', 'Open & Valid', '2022-03-26 13:01:11', '2022-03-26 13:01:11'),
(8, '5nRw9I', 'vincent', 'Wachira', 'vincentn371@gmail.com', '+254795573597', 'Ngara', 3, 'Castle', 'KCR 167w', 'NISSAN SUNNY', '4', 'jamoEAncb', '8', '24', 'Open & Valid', '2022-03-26 13:04:48', '2022-03-26 13:04:48'),
(9, 'EgzpTh', 'vincent', 'Wachira', 'vincentn371@gmail.com', '+254795573597', 'Ngara', 2, 'Castle', 'KCR 167w', 'NISSAN SUNNY', '4', 'jamoEAncb', '8', '16', 'Open & Valid', '2022-03-26 13:10:30', '2022-03-26 13:10:30'),
(10, 'Mzm5Xj', 'vincent', 'Wachira', 'vincentn371@gmail.com', '+254795573597', 'Ngara', 1, 'Castle', 'KCR 167w', 'NISSAN SUNNY', '4', 'jamoEAncb', '8', '8', 'Open & Valid', '2022-03-26 13:36:28', '2022-03-26 13:36:28'),
(11, 'ExseRi', 'vincent', 'Wachira', 'vincentn371@gmail.com', '+254795573597', 'Ngara', 5, 'Castle', 'Knn 126Qm', 'Toyota Hilux', '6', 'PapajJ48L', '12', '60', 'Open & Valid', '2022-03-26 13:44:00', '2022-03-26 13:44:00'),
(12, 'UbvWTB', 'vincent', 'Wachira', 'vincentn371@gmail.com', '+254795573597', 'Ngara', 1, 'Castle', 'KCR 167w', 'NISSAN SUNNY', '4', 'jamoEAncb', '8', '8', 'Open & Valid', '2022-03-26 13:47:04', '2022-03-26 13:47:04'),
(13, '5xylyz', 'vincent', 'Wachira', 'vincentn371@gmail.com', '+254795573597', 'Ngara', 1, 'Castle', 'KCR 167w', 'NISSAN SUNNY', '4', 'jamoEAncb', '8', '8', 'Open & Valid', '2022-03-26 13:50:31', '2022-03-26 13:50:31'),
(14, 'da5nYC', 'vincent', 'Wachira', 'vincentn371@gmail.com', '+254795573597', 'Ngara', 1, 'Castle', 'KCR 167w', 'NISSAN SUNNY', '4', 'jamoEAncb', '8', '8', 'Open & Valid', '2022-03-26 13:52:59', '2022-03-26 13:52:59'),
(15, 'P0zK9c', 'vincent', 'Wachira', 'vincentn371@gmail.com', '+254795573597', 'Ngara', 1, 'Castle', 'KCR 167w', 'NISSAN SUNNY', '4', 'jamoEAncb', '8', '8', 'Open & Valid', '2022-03-26 14:23:21', '2022-03-26 14:23:21'),
(16, '5fRoVp', 'vincent', 'Wachira', 'vincentn371@gmail.com', '+254795573597', 'Ngara', 1, 'Castle', 'KCR 167w', 'NISSAN SUNNY', '4', 'jamoEAncb', '8', '8', 'Open & Valid', '2022-03-26 14:24:08', '2022-03-26 14:24:08'),
(17, 'xOnDWv', 'vincent', 'Wachira', 'vincentn371@gmail.com', '+254795573597', 'Ngara', 1, 'Castle', 'Knn 126Qm', 'Toyota Hilux', '6', 'PapajJ48L', '12', '12', 'Open & Valid', '2022-03-26 14:33:12', '2022-03-26 14:33:12'),
(18, 'sHVqR3', 'vincent', 'Wachira', 'vincentn371@gmail.com', '+254795573597', 'Ngara', 1, 'Castle', 'Knn 126Qm', 'Toyota Hilux', '6', 'PapajJ48L', '12', '12', 'Open & Valid', '2022-03-26 14:39:53', '2022-03-26 14:39:53'),
(19, 'OEJTQ0', 'kameme', 'Wachira', 'vincentn371@gmail.com', '+254987665544', 'Ngara', 1, 'Castle', 'KCR 167w', 'NISSAN SUNNY', '4', 'jamoEAncb', '8', '8', 'Open & Valid', '2022-03-26 14:58:49', '2022-03-26 14:58:49'),
(20, 'aQdHRH', 'vincent', 'Wachira', 'vincentn371@gmail.com', '+2547721289195', 'shamaKhokho', 1, 'Isinya', 'KCR 167w', 'NISSAN SUNNY', '4', 'jamoEAncb', '8', '8', 'Open & Valid', '2022-03-28 09:45:30', '2022-03-28 09:45:30'),
(21, 'wk4d53', 'Pius', 'Saitama', 'vincentn371@gmail.com', '+2547721289195', 'shamaKhokho', 3, 'Castle', 'KCR 167w', 'NISSAN SUNNY', '4', 'jamoEAncb', '8', '24', 'Open & Valid', '2022-03-28 09:48:55', '2022-03-28 09:48:55'),
(22, 'dCkS3R', 'pius', 'Shitanda', 'mtiti@gmail.com', '+254721289195', 'shamaKhokho', 2, 'siaya', 'KCR 167w', 'NISSAN SUNNY', '4', 'jamoEAncb', '8', '16', 'Open & Valid', '2022-03-28 09:58:11', '2022-03-28 09:58:11');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_03_13_155844_create_permission_role_table', 1),
(7, '2022_03_13_155954_create_permission_user_table', 1),
(8, '2022_03_13_160016_create_role_user_table', 1),
(9, '2022_03_13_160057_create_permissions_table', 1),
(10, '2022_03_13_160118_create_roles_table', 1),
(11, '2022_03_14_105038_create_drivers_table', 2),
(12, '2022_03_19_083715_create_vehicles_table', 3),
(13, '2022_03_19_083838_create_invoices_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2022-03-13 15:43:12', '2022-03-13 15:43:12'),
(2, 'users-read', 'Read Users', 'Read Users', '2022-03-13 15:43:12', '2022-03-13 15:43:12'),
(3, 'users-update', 'Update Users', 'Update Users', '2022-03-13 15:43:12', '2022-03-13 15:43:12'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2022-03-13 15:43:12', '2022-03-13 15:43:12'),
(5, 'payments-create', 'Create Payments', 'Create Payments', '2022-03-13 15:43:12', '2022-03-13 15:43:12'),
(6, 'payments-read', 'Read Payments', 'Read Payments', '2022-03-13 15:43:12', '2022-03-13 15:43:12'),
(7, 'payments-update', 'Update Payments', 'Update Payments', '2022-03-13 15:43:13', '2022-03-13 15:43:13'),
(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2022-03-13 15:43:13', '2022-03-13 15:43:13'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2022-03-13 15:43:13', '2022-03-13 15:43:13'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2022-03-13 15:43:13', '2022-03-13 15:43:13'),
(11, 'profile-delete', 'Delete Profile', 'Delete Profile', '2022-03-13 15:43:14', '2022-03-13 15:43:14'),
(12, 'module_1_name-create', 'Create Module_1_name', 'Create Module_1_name', '2022-03-13 15:43:14', '2022-03-13 15:43:14'),
(13, 'module_1_name-read', 'Read Module_1_name', 'Read Module_1_name', '2022-03-13 15:43:14', '2022-03-13 15:43:14'),
(14, 'module_1_name-update', 'Update Module_1_name', 'Update Module_1_name', '2022-03-13 15:43:14', '2022-03-13 15:43:14'),
(15, 'module_1_name-delete', 'Delete Module_1_name', 'Delete Module_1_name', '2022-03-13 15:43:15', '2022-03-13 15:43:15');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(9, 3),
(10, 1),
(10, 2),
(10, 3),
(11, 3),
(12, 4),
(13, 4),
(14, 4),
(15, 4);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'superadministrator', 'Superadministrator', 'Superadministrator', '2022-03-13 15:43:12', '2022-03-13 15:43:12'),
(2, 'administrator', 'Administrator', 'Administrator', '2022-03-13 15:43:13', '2022-03-13 15:43:13'),
(3, 'driver', 'Driver', 'Driver', '2022-03-13 15:43:14', '2022-03-13 15:43:14'),
(4, 'role_name', 'Role Name', 'Role Name', '2022-03-13 15:43:14', '2022-03-13 15:43:14');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\Models\\User'),
(2, 2, 'App\\Models\\User'),
(3, 3, 'App\\Models\\User'),
(4, 4, 'App\\Models\\User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usercode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userposition` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userstatus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'Inactive',
  `userlevel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usercode`, `name`, `email`, `email_verified_at`, `password`, `userposition`, `userstatus`, `userlevel`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Superadministrator', 'superadministrator@app.com', NULL, '$2y$10$JgdYG3TtWJ/m71bugpwl5ef4NVqJUcACPoFciKzgZ0ZZIR9L/QW5m', 'Superadministrator', 'Active', NULL, NULL, '2022-03-13 15:43:13', '2022-03-13 15:43:13'),
(2, NULL, 'Administrator', 'administrator@app.com', NULL, '$2y$10$bRWzP54nCKBRrEK4pQlmSuMHiec9VxNoA.PCpdOYlMeP37J63VPCa', NULL, 'Active', NULL, NULL, '2022-03-13 15:43:14', '2022-03-13 15:43:14'),
(3, NULL, 'Driver', 'driver@app.com', NULL, '$2y$10$Nkna5up8U13iK/jheeCYEu.QUIQEp67A1FXuzBtFUTXcXKHNssnmG', 'Driver', 'Active', NULL, NULL, '2022-03-13 15:43:14', '2022-03-13 15:43:14'),
(4, NULL, 'Role Name', 'role_name@app.com', NULL, '$2y$10$XlSMj8VsOGVwfiGiVRfrpuFcDe/NKioaYZYAiMWbLiSdozj8nzVK.', NULL, 'Inactive', NULL, NULL, '2022-03-13 15:43:15', '2022-03-13 15:43:15'),
(5, 'jamoEAncb', 'jamo', 'jamo@app.com', NULL, '$2y$10$iUG09qdpGEgDLbe1je6fXeOfbJXhaOuVpX9gyWrk1PGgJ0mP4ZJK6', 'Driver', 'Inactive', 'Primary', NULL, '2022-03-16 07:01:52', '2022-03-16 07:01:52'),
(6, 'jamom63KV', 'jamo', 'jamob@app.com', NULL, '$2y$10$DHmbsF8aFN/fifokkZuEJuOFOS6g2zCLzwNcjKtD4Q1omwzfkRrWO', 'Driver', 'Inactive', 'Primary', NULL, '2022-03-16 07:59:53', '2022-03-16 07:59:53'),
(8, 'piusG69nD', 'pius', 'pius@app.com', NULL, '$2y$10$vAhljA2MW6EZKNwgGimEYuYZNLY02iV5AUFhmY0g0LFJj20yDNj9q', 'Driver', 'Inactive', 'Primary', NULL, '2022-03-16 09:51:07', '2022-03-16 09:51:07'),
(9, 'Baba6NPKd', 'Baba', 'baba@app.com', NULL, '$2y$10$ECbnVj6YoksIktzWHctWZO3ohKvIxleefgN0j.txUDLoD4NbkCQwK', 'Driver', 'Inactive', 'Primary', NULL, '2022-03-16 10:07:51', '2022-03-16 10:07:51'),
(10, 'PapajJ48L', 'Papa', 'papa@app.com', NULL, '$2y$10$4VjNjC4ASyCBDON1kNDf3eUnmneuNHYat1Xz.5z8MSN2RWgRKCfPO', 'Driver', 'Inactive', 'Primary', NULL, '2022-03-19 07:44:22', '2022-03-19 07:44:22'),
(11, 'NicknjUki', 'Nick', 'nick@app.com', NULL, '$2y$10$ywlOIiytxN2sBfKUp/.hg.92a6dw0YMUl/WzKI5QtmTAXWAYjc7Cy', 'Driver', 'Inactive', 'Assistant', NULL, '2022-03-19 10:02:32', '2022-03-19 10:02:32');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `v_reg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_make` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_capacity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_charges` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_driver` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_owner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_bio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `v_reg`, `v_make`, `v_capacity`, `v_charges`, `v_driver`, `v_owner`, `v_status`, `v_image`, `v_bio`, `created_at`, `updated_at`) VALUES
(1, 'KCR 167w', 'NISSAN SUNNY', '4', '8', 'jamoEAncb', 'PapajJ48L', 'Available', 'PapajJ48L.van2.jpg', NULL, '2022-03-19 12:28:10', '2022-03-19 12:28:10'),
(2, 'Knn 126Qm', 'Toyota Hilux', '6', '12', 'PapajJ48L', 'PapajJ48L', 'Available', 'PapajJ48L.van6.jpg', NULL, '2022-03-22 07:43:20', '2022-03-22 07:43:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `drivers_drivercode_unique` (`drivercode`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `invoices_invoicenumber_unique` (`invoiceNumber`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_usercode_unique` (`usercode`),
  ADD UNIQUE KEY `usercode` (`usercode`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vehicles_v_reg_unique` (`v_reg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `permission_user`
--
ALTER TABLE `permission_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
