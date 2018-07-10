-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 10, 2018 at 02:12 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.1.11-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psbo`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` date NOT NULL,
  `foto_barang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`id`, `id_user`, `nama_barang`, `deskripsi`, `tempat`, `waktu`, `foto_barang`, `jenis`, `status`, `kategori`, `created_at`, `updated_at`) VALUES
(8, 23, 'z', 'l', 'POMI', '2018-07-04', '/tmp/phpuzUh9n', 'kehilangan', '1', 'Jam Tangan', '2018-07-09 15:41:48', '2018-07-09 15:41:48'),
(9, 23, 'asd', 'dd', 'POMI', '2018-07-05', '/tmp/phpyHsYkj', 'kehilangan', '1', 'Jam Tangan', '2018-07-09 15:42:44', '2018-07-09 15:42:44'),
(10, 24, 'dfdf', 'ff', 'POMI', '2018-07-05', NULL, 'kehilangan', '1', 'Jam Tangan', '2018-07-10 00:06:03', '2018-07-10 00:06:03'),
(11, 24, 'qwe', 'rr', 'POMI', '2018-07-13', NULL, 'kehilangan', '1', 'Jam Tangan', '2018-07-10 00:06:16', '2018-07-10 00:06:16'),
(12, 24, 'qwe', 'eee', 'POMI', '2018-07-06', '/tmp/phpUPAn2X', 'kehilangan', '1', 'Jam Tangan', '2018-07-10 00:06:41', '2018-07-10 00:06:41'),
(13, 24, 'dfff', 'ff', 'POMI', '2018-07-06', '/tmp/phpFQZ2ag', 'temuan', '1', 'Jam Tangan', '2018-07-10 00:11:48', '2018-07-10 00:11:48');

-- --------------------------------------------------------

--
-- Table structure for table `klaims`
--

CREATE TABLE `klaims` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `foto_barang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_06_27_034832_create_barangs_table', 1),
(4, '2018_06_27_093243_create_klaims_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone-number` bigint(255) DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone-number`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(20, 'asfasdf', 'asdf@asdf.com', NULL, NULL, '$2y$10$94QdfCWkmwsDuvKASh/kVeCgcEAOkph8LVCWpJTU/y1MbHIHJD0AK', 'o1dHqlZDkFk6TRX2tJt5D6woWFWuoxIsjBeAJKNda6GCyGUsAXVxJb3X9qok', '2018-07-09 02:00:56', '2018-07-09 02:00:56'),
(21, 'jijiji', 'jijiji@gijigjgij.com', 9920009, 'penggunga', '$2y$10$titLmQ06El3OyweDjkY6FeOICfsi9iwtiWPBJZ.NqL/LdQXOf32lC', 'Tj47yQ0qtRv9u4sxTi6efpdicnQ13eJ4EzXofAS82uJm8nVDkyPrFfIjBTae', '2018-07-09 02:06:49', '2018-07-09 02:06:49'),
(22, 'ganteng', 'gw@ganteng.com', 98989899, 'pengguna', '$2y$10$fyR1Rz0Tx6ew2Wo04PD10.L3BXJVnXebuS4.o2p6EV4ZCr/.AFpa2', NULL, '2018-07-09 02:16:29', '2018-07-09 02:16:29'),
(23, 'dfd', 'dfd@dd.com', 8787874, 'pengguna', '$2y$10$Oy0plPJ8Eh.HHQRyHcxUsOivKLzPw5QkSs3d85Qg2zFlfVFZXUdcS', 'wTJvdzxob6fh6RPIosI2RZppKIFmDNOR4XxTTSjvc7nannFe29av7XUYVRTK', '2018-07-09 15:41:31', '2018-07-09 15:41:31'),
(24, 'ganteng', 'ganteng@ganteng.com', 8738344, 'pengguna', '$2y$10$3iVrP4xzVjuB7U.6oY3fceKmgf72BPv9Px3Sb3LlFKEUS4mEo27cO', NULL, '2018-07-09 23:56:36', '2018-07-09 23:56:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klaims`
--
ALTER TABLE `klaims`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `klaims`
--
ALTER TABLE `klaims`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
