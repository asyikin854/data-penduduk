-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2024 at 07:51 AM
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
-- Database: `data_penduduk_kt`
--

-- --------------------------------------------------------

--
-- Table structure for table `maklumat_pasangan`
--

CREATE TABLE `maklumat_pasangan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `maklumat_pemohon_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `ic` varchar(255) NOT NULL,
  `jantina` enum('Lelaki','Wanita') NOT NULL,
  `tarikh_lahir` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `mental` enum('Waras','Tidak waras') NOT NULL,
  `islam` enum('Baik','Kurang Baik') NOT NULL,
  `fizikal` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `poskod` varchar(255) NOT NULL,
  `bandar` varchar(255) NOT NULL DEFAULT 'Kota Tinggi',
  `nombor_rumah` varchar(255) DEFAULT NULL,
  `nombor_bimbit` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maklumat_pasangan`
--

INSERT INTO `maklumat_pasangan` (`id`, `maklumat_pemohon_id`, `nama`, `ic`, `jantina`, `tarikh_lahir`, `status`, `mental`, `islam`, `fizikal`, `alamat`, `poskod`, `bandar`, `nombor_rumah`, `nombor_bimbit`, `created_at`, `updated_at`) VALUES
(10, 12, 'HAJJAH BIN ZAITON', '013625587112', 'Wanita', '2024-01-31', 'Kahwin', 'Waras', 'Baik', 'Sihat', 'lot 133, Jalan Mengkudu, Felda Sungai Mas', '81900', 'Kota Tinggi', NULL, '01334649484', '2024-02-10 10:37:14', '2024-02-10 10:37:14'),
(11, 13, 'ZAINAB BINTI ABDULLAH', '881542784113', 'Wanita', '2024-03-05', 'Kahwin', 'Waras', 'Baik', 'Sakit', 'lot 173, Jalan Mengkudu, Felda Sungai Mas', '81900', 'Kota Tinggi', NULL, '01364649494', '2024-02-10 21:14:29', '2024-02-10 21:14:29');

-- --------------------------------------------------------

--
-- Table structure for table `maklumat_pemohon`
--

CREATE TABLE `maklumat_pemohon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `ic` varchar(255) NOT NULL,
  `jantina` enum('Lelaki','Wanita') NOT NULL,
  `tarikh_lahir` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `mental` enum('Waras','Tidak waras') NOT NULL,
  `islam` enum('Baik','Kurang Baik') NOT NULL,
  `fizikal` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `poskod` varchar(255) NOT NULL,
  `bandar` varchar(255) NOT NULL DEFAULT 'Kota Tinggi',
  `nombor_rumah` varchar(255) DEFAULT NULL,
  `nombor_bimbit` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maklumat_pemohon`
--

INSERT INTO `maklumat_pemohon` (`id`, `nama`, `ic`, `jantina`, `tarikh_lahir`, `status`, `mental`, `islam`, `fizikal`, `alamat`, `poskod`, `bandar`, `nombor_rumah`, `nombor_bimbit`, `created_at`, `updated_at`) VALUES
(12, 'ARIFFIN BIN MAHMOUD', '021201012232', 'Lelaki', '2023-11-29', 'Kahwin', 'Waras', 'Baik', 'Sihat', 'lot 133, Jalan Mengkudu, Felda Sungai Mas', '81900', 'Kota Tinggi', NULL, '0123364668', '2024-02-10 10:36:52', '2024-02-10 10:36:52'),
(13, 'OTHMAN BIN WAHAB', '750212100122', 'Lelaki', '2024-01-29', 'Kahwin', 'Waras', 'Baik', 'Sihat', 'lot 173, Jalan Mengkudu, Felda Sungai Mas', '81900', 'Kota Tinggi', NULL, '01212456851', '2024-02-10 21:13:16', '2024-02-10 21:13:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_05_155247_create_table_maklumat_pemohon', 2),
(7, '2024_02_06_033007_create_maklumat_pemohon', 3),
(8, '2024_02_06_134752_create_pendapatan', 4),
(10, '2024_02_06_145920_create_perbelanjaan', 6),
(12, '2024_02_06_152026_create_waris', 7),
(13, '2024_02_06_145634_create_maklumat_pasangan', 8),
(14, '2024_02_07_025610_add_column_to_waris', 9),
(15, '2024_02_09_140502_add_foreign_key_cascade_to_tables', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pendapatan`
--

CREATE TABLE `pendapatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `maklumat_pemohon_id` bigint(20) UNSIGNED NOT NULL,
  `jawatan` varchar(255) NOT NULL,
  `gaji` decimal(10,2) NOT NULL,
  `majikan` varchar(255) NOT NULL,
  `jawatan_psgn` varchar(255) DEFAULT 'Tiada Maklumat',
  `gaji_psgn` decimal(10,2) DEFAULT 0.00,
  `majikan_psgn` varchar(255) DEFAULT 'Tiada Maklumat',
  `sumbangan_anak` decimal(10,2) DEFAULT 0.00,
  `sumbangan_saudara` decimal(10,2) DEFAULT 0.00,
  `sampingan` decimal(10,2) DEFAULT 0.00,
  `sumbangan_agensi` decimal(10,2) DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendapatan`
--

INSERT INTO `pendapatan` (`id`, `maklumat_pemohon_id`, `jawatan`, `gaji`, `majikan`, `jawatan_psgn`, `gaji_psgn`, `majikan_psgn`, `sumbangan_anak`, `sumbangan_saudara`, `sampingan`, `sumbangan_agensi`, `created_at`, `updated_at`) VALUES
(12, 12, 'Peneroka Felda', 3000.00, 'Felda', 'TIdak Bekerja', 0.00, 'tiada', 0.00, 0.00, 0.00, 0.00, '2024-02-10 10:37:47', '2024-02-10 10:37:47'),
(13, 13, 'Peniaga', 2500.00, 'Sendiri', 'Kerani', 1500.00, 'ABC sdn.bhd', 200.00, 0.00, 100.00, 0.00, '2024-02-10 21:15:52', '2024-02-10 21:15:52');

-- --------------------------------------------------------

--
-- Table structure for table `perbelanjaan`
--

CREATE TABLE `perbelanjaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `maklumat_pemohon_id` bigint(20) UNSIGNED NOT NULL,
  `makan` decimal(10,2) NOT NULL DEFAULT 0.00,
  `perubatan` decimal(10,2) NOT NULL DEFAULT 0.00,
  `bil` decimal(10,2) NOT NULL DEFAULT 0.00,
  `pengangkutan` decimal(10,2) NOT NULL DEFAULT 0.00,
  `sewa_rumah` decimal(10,2) NOT NULL DEFAULT 0.00,
  `persekolahan` decimal(10,2) NOT NULL DEFAULT 0.00,
  `lain` decimal(10,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perbelanjaan`
--

INSERT INTO `perbelanjaan` (`id`, `maklumat_pemohon_id`, `makan`, `perubatan`, `bil`, `pengangkutan`, `sewa_rumah`, `persekolahan`, `lain`, `created_at`, `updated_at`) VALUES
(3, 12, 300.00, 0.00, 200.00, 200.00, 0.00, 150.00, 200.00, '2024-02-10 10:38:17', '2024-02-10 10:38:17'),
(4, 13, 500.00, 250.00, 200.00, 200.00, 0.00, 300.00, 0.00, '2024-02-10 21:16:18', '2024-02-10 21:16:18');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin1', 'dpkt@gmail.com', NULL, '$2y$12$3JVP6qyk.nOtfQc3WCbYzuXde2y7gQ4el/1ucoAMqwiHpE4tCE22a', NULL, '2024-02-05 06:17:16', '2024-02-05 06:17:16');

-- --------------------------------------------------------

--
-- Table structure for table `waris`
--

CREATE TABLE `waris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `maklumat_pemohon_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `ic` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `hubungan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `kerja` varchar(255) NOT NULL,
  `fizikal` varchar(255) NOT NULL,
  `mental` enum('Waras','Tidak Waras') NOT NULL,
  `pendapatan` decimal(10,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `waris`
--

INSERT INTO `waris` (`id`, `maklumat_pemohon_id`, `nama`, `ic`, `umur`, `hubungan`, `status`, `kerja`, `fizikal`, `mental`, `pendapatan`, `created_at`, `updated_at`) VALUES
(8, 12, 'ARIF AIMAN BIN ARIFFIN', '012345678901', '15', 'Anak', 'Sekolah', 'SMK', 'Sihat', 'Waras', 0.00, '2024-02-10 10:39:12', '2024-02-10 10:39:12'),
(9, 12, 'HAZIK BIN ARIFFIN', '032165498778', '20', 'Anak', 'Bekerja', 'Sendiri', 'Sihat', 'Waras', 2000.00, '2024-02-10 10:40:07', '2024-02-10 10:40:07'),
(10, 13, 'FAIZ BIN OTHMAN', '053214698712', '17', 'Anak', 'Sekolah', 'SMK', 'Sihat', 'Waras', 150.00, '2024-02-10 21:17:36', '2024-02-10 21:17:36'),
(11, 13, 'SHUKRI BIN OTHMAN', '013264598799', '23', 'Anak', 'Bekerja', 'Peniaga', 'Sihat', 'Waras', 1500.00, '2024-02-10 21:18:38', '2024-02-10 21:18:38'),
(12, 13, 'MUHD ADAM BIN RAZAK', '053698741232', '15', 'Anak Tiri', 'Sekolah', 'SMK', 'Sihat', 'Waras', 150.00, '2024-02-10 21:20:46', '2024-02-10 21:20:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `maklumat_pasangan`
--
ALTER TABLE `maklumat_pasangan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `maklumat_pasangan_maklumat_pemohon_id_foreign` (`maklumat_pemohon_id`);

--
-- Indexes for table `maklumat_pemohon`
--
ALTER TABLE `maklumat_pemohon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pendapatan`
--
ALTER TABLE `pendapatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pendapatan_maklumat_pemohon_id_foreign` (`maklumat_pemohon_id`);

--
-- Indexes for table `perbelanjaan`
--
ALTER TABLE `perbelanjaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perbelanjaan_maklumat_pemohon_id_foreign` (`maklumat_pemohon_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`Username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `waris`
--
ALTER TABLE `waris`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `waris_ic_unique` (`ic`),
  ADD KEY `waris_maklumat_pemohon_id_foreign` (`maklumat_pemohon_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `maklumat_pasangan`
--
ALTER TABLE `maklumat_pasangan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `maklumat_pemohon`
--
ALTER TABLE `maklumat_pemohon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pendapatan`
--
ALTER TABLE `pendapatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `perbelanjaan`
--
ALTER TABLE `perbelanjaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `waris`
--
ALTER TABLE `waris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `maklumat_pasangan`
--
ALTER TABLE `maklumat_pasangan`
  ADD CONSTRAINT `maklumat_pasangan_maklumat_pemohon_id_foreign` FOREIGN KEY (`maklumat_pemohon_id`) REFERENCES `maklumat_pemohon` (`id`);

--
-- Constraints for table `pendapatan`
--
ALTER TABLE `pendapatan`
  ADD CONSTRAINT `pendapatan_maklumat_pemohon_id_foreign` FOREIGN KEY (`maklumat_pemohon_id`) REFERENCES `maklumat_pemohon` (`id`);

--
-- Constraints for table `perbelanjaan`
--
ALTER TABLE `perbelanjaan`
  ADD CONSTRAINT `perbelanjaan_maklumat_pemohon_id_foreign` FOREIGN KEY (`maklumat_pemohon_id`) REFERENCES `maklumat_pemohon` (`id`);

--
-- Constraints for table `waris`
--
ALTER TABLE `waris`
  ADD CONSTRAINT `waris_maklumat_pemohon_id_foreign` FOREIGN KEY (`maklumat_pemohon_id`) REFERENCES `maklumat_pemohon` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
