-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 25, 2024 at 06:39 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwl_pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_09_11_063235_create_m_level_table', 1),
(6, '2024_09_11_071102_create_m_kategori_table', 2),
(7, '2024_09_11_071634_create_m_supplier_table', 2),
(8, '2024_09_11_072505_create_m_user_table', 3),
(9, '2024_09_11_073711_create_m_barang_table', 4),
(10, '2024_09_11_074642_create_t_penjualan_table', 4),
(11, '2024_09_11_075321_create_t_stok_table', 4),
(12, '2024_09_11_075748_create_t_penjualan_detail_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `m_barang`
--

CREATE TABLE `m_barang` (
  `barang_id` bigint UNSIGNED NOT NULL,
  `kategori_id` bigint UNSIGNED NOT NULL,
  `barang_kode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barang_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_beli` int NOT NULL,
  `harga_jual` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_barang`
--

INSERT INTO `m_barang` (`barang_id`, `kategori_id`, `barang_kode`, `barang_nama`, `harga_beli`, `harga_jual`, `created_at`, `updated_at`) VALUES
(1, 1, 'B001', 'Laptop Lenovo', 7000000, 8500000, NULL, NULL),
(2, 1, 'B002', 'TV Samsung 40\"', 4000000, 5000000, NULL, NULL),
(3, 1, 'B003', 'Kulkas LG', 2500000, 3000000, NULL, NULL),
(4, 2, 'B004', 'Kemeja Pria', 150000, 200000, NULL, NULL),
(5, 2, 'B005', 'Celana Jeans Wanita', 250000, 350000, NULL, NULL),
(6, 2, 'B006', 'Jaket Hoodie', 180000, 250000, NULL, NULL),
(7, 3, 'B007', 'Mie Instan Goreng', 2000, 3000, NULL, NULL),
(8, 3, 'B008', 'Minuman Bersoda 500ml', 5000, 7000, NULL, NULL),
(9, 3, 'B009', 'Biskuit Coklat', 15000, 20000, NULL, NULL),
(10, 4, 'B010', 'Mesin Cuci Panasonic', 3500000, 4200000, NULL, NULL),
(11, 4, 'B011', 'Setrika Philips', 300000, 400000, NULL, NULL),
(12, 4, 'B012', 'Vacuum Cleaner Samsung', 700000, 850000, NULL, NULL),
(13, 5, 'B013', 'Buku Tulis A4', 5000, 7000, NULL, NULL),
(14, 5, 'B014', 'Pulpen Biru', 2000, 3000, NULL, NULL),
(15, 5, 'B015', 'Penghapus Pensil', 1000, 1500, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_kategori`
--

CREATE TABLE `m_kategori` (
  `kategori_id` bigint UNSIGNED NOT NULL,
  `kategori_kode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_kategori`
--

INSERT INTO `m_kategori` (`kategori_id`, `kategori_kode`, `kategori_nama`, `created_at`, `updated_at`) VALUES
(1, 'K001', 'Elektronik', NULL, NULL),
(2, 'K002', 'Pakaian', NULL, NULL),
(3, 'K003', 'Makanan & Minuman', NULL, NULL),
(4, 'K004', 'Peralatan Rumah', NULL, NULL),
(5, 'K005', 'Buku & Alat Tulis', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_level`
--

CREATE TABLE `m_level` (
  `level_id` bigint UNSIGNED NOT NULL,
  `level_kode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_level`
--

INSERT INTO `m_level` (`level_id`, `level_kode`, `level_nama`, `created_at`, `updated_at`) VALUES
(1, 'ADM', 'Administrator', NULL, NULL),
(2, 'MNG', 'Manager', NULL, NULL),
(3, 'STF', 'Staff/Kasir', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_supplier`
--

CREATE TABLE `m_supplier` (
  `supplier_id` bigint UNSIGNED NOT NULL,
  `supplier_kode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_supplier`
--

INSERT INTO `m_supplier` (`supplier_id`, `supplier_kode`, `supplier_nama`, `supplier_alamat`, `created_at`, `updated_at`) VALUES
(1, 'S001', 'PT. Elektronik Jaya', 'Jl. Merdeka No. 123, Jakarta', NULL, NULL),
(2, 'S002', 'UD. Pakaian Sejahtera', 'Jl. Sudirman No. 45, Bandung', NULL, NULL),
(3, 'S003', 'CV. Makanan Nusantara', 'Jl. Diponegoro No. 67, Surabaya', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_user`
--

CREATE TABLE `m_user` (
  `user_id` bigint UNSIGNED NOT NULL,
  `level_id` bigint UNSIGNED NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_user`
--

INSERT INTO `m_user` (`user_id`, `level_id`, `username`, `nama`, `password`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'Administrator', '$2y$12$L/a6jAAFbmdXl2e5jo6q9emH9MDYPo2203xnwQLpjPmTvbbDVqvji', NULL, NULL),
(2, 2, 'manager', 'Manager', '$2y$12$TH4y/F9n48KHTDaVv.sVGeur2DWmhKGj42gBqs1Cym7a35PS8G/TG', NULL, NULL),
(3, 3, 'staff', 'Staff/Kasir', '$2y$12$dBoSD3.eJY7bjzlxq0Io.u6VxNH0LDi79gk2ctLEtkIlne9TxsO8O', NULL, NULL),
(6, 3, 'customer-1', 'Pelanggan Pertama', '$2y$12$sNVC7vPtwJTC6Ma3G3rALuvH2sHWBOr6z28k5RVgPfRd2OjANfIM6', NULL, '2024-09-13 22:01:16'),
(12, 2, 'manager_dua', 'Manager 2', '$2y$12$h7QxXfxu1uu/jMUgJvBz8e9GFaK70L6dRGDw5e0YW2oijfiElVyxC', '2024-09-18 07:39:23', '2024-09-18 07:39:23'),
(14, 2, 'manager22', 'Manager Dua Dua', '$2y$12$ENJED4FN6zlYaKh70865xehsAVuldp89PZ7yFjimO/SBWdw.Keh9i', '2024-09-18 08:40:43', '2024-09-18 08:40:43'),
(15, 2, 'manager33', 'Manager Tiga Tiga', '$2y$12$Yv22lqBWyj1guZWH91nEAuUdbQeT4Ax/C7LYjd82yyUsnudPXi/Oi', '2024-09-18 08:44:07', '2024-09-18 08:44:07'),
(16, 2, 'manager56', 'Manager55', '$2y$12$vSksHOt8iqwRcxcGOn1afuw79C1eSwyZbJUReLZ5W3E7rDIfg4Zn6', '2024-09-18 08:50:25', '2024-09-18 08:50:25'),
(17, 2, 'manager12', 'Manager11', '$2y$12$GeCkrruYrzW2P2JZrRqkrehIYX3lGLoycMpJO.jO2brjbos/ApVpO', '2024-09-18 08:56:10', '2024-09-18 08:56:10');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_penjualan`
--

CREATE TABLE `t_penjualan` (
  `penjualan_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `pembeli` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penjualan_kode` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penjualan_tanggal` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_penjualan`
--

INSERT INTO `t_penjualan` (`penjualan_id`, `user_id`, `pembeli`, `penjualan_kode`, `penjualan_tanggal`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ali Akbar', 'P001', '2024-09-05 00:00:00', NULL, NULL),
(2, 1, 'Siti Aminah', 'P002', '2024-09-06 00:00:00', NULL, NULL),
(3, 2, 'Ahmad Faisal', 'P003', '2024-09-06 00:00:00', NULL, NULL),
(4, 2, 'Dewi Kartika', 'P004', '2024-09-07 00:00:00', NULL, NULL),
(5, 1, 'Budi Santoso', 'P005', '2024-09-07 00:00:00', NULL, NULL),
(6, 3, 'Aisyah Rahman', 'P006', '2024-09-08 00:00:00', NULL, NULL),
(7, 2, 'Fajar Pratama', 'P007', '2024-09-08 00:00:00', NULL, NULL),
(8, 1, 'Nurul Hidayati', 'P008', '2024-09-09 00:00:00', NULL, NULL),
(9, 3, 'Hasan Basri', 'P009', '2024-09-09 00:00:00', NULL, NULL),
(10, 3, 'Indah Wulandari', 'P010', '2024-09-10 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_penjualan_detail`
--

CREATE TABLE `t_penjualan_detail` (
  `detail_id` bigint UNSIGNED NOT NULL,
  `penjualan_id` bigint UNSIGNED NOT NULL,
  `barang_id` bigint UNSIGNED NOT NULL,
  `harga` int NOT NULL,
  `jumlah` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_penjualan_detail`
--

INSERT INTO `t_penjualan_detail` (`detail_id`, `penjualan_id`, `barang_id`, `harga`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 8500000, 1, NULL, NULL),
(2, 1, 2, 5000000, 2, NULL, NULL),
(3, 1, 3, 3000000, 1, NULL, NULL),
(4, 2, 4, 200000, 3, NULL, NULL),
(5, 2, 5, 350000, 2, NULL, NULL),
(6, 2, 6, 250000, 1, NULL, NULL),
(7, 3, 7, 3000, 10, NULL, NULL),
(8, 3, 8, 7000, 5, NULL, NULL),
(9, 3, 9, 20000, 4, NULL, NULL),
(10, 4, 10, 4200000, 1, NULL, NULL),
(11, 4, 11, 400000, 1, NULL, NULL),
(12, 4, 12, 850000, 2, NULL, NULL),
(13, 5, 13, 7000, 10, NULL, NULL),
(14, 5, 14, 3000, 15, NULL, NULL),
(15, 5, 15, 1500, 20, NULL, NULL),
(16, 6, 1, 8500000, 1, NULL, NULL),
(17, 6, 2, 5000000, 1, NULL, NULL),
(18, 6, 3, 3000000, 1, NULL, NULL),
(19, 7, 4, 200000, 3, NULL, NULL),
(20, 7, 5, 350000, 1, NULL, NULL),
(21, 7, 6, 250000, 2, NULL, NULL),
(22, 8, 7, 3000, 10, NULL, NULL),
(23, 8, 8, 7000, 5, NULL, NULL),
(24, 8, 9, 20000, 2, NULL, NULL),
(25, 9, 10, 4200000, 1, NULL, NULL),
(26, 9, 11, 400000, 1, NULL, NULL),
(27, 9, 12, 850000, 1, NULL, NULL),
(28, 10, 13, 7000, 20, NULL, NULL),
(29, 10, 14, 3000, 30, NULL, NULL),
(30, 10, 15, 1500, 25, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_stok`
--

CREATE TABLE `t_stok` (
  `stok_id` bigint UNSIGNED NOT NULL,
  `supplier_id` bigint UNSIGNED NOT NULL,
  `barang_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `stok_tanggal` datetime NOT NULL,
  `stok_jumlah` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_stok`
--

INSERT INTO `t_stok` (`stok_id`, `supplier_id`, `barang_id`, `user_id`, `stok_tanggal`, `stok_jumlah`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2024-09-01 00:00:00', 50, NULL, NULL),
(2, 1, 2, 1, '2024-09-01 00:00:00', 30, NULL, NULL),
(3, 1, 3, 1, '2024-09-01 00:00:00', 20, NULL, NULL),
(4, 1, 4, 1, '2024-09-01 00:00:00', 40, NULL, NULL),
(5, 1, 5, 1, '2024-09-01 00:00:00', 25, NULL, NULL),
(6, 2, 6, 1, '2024-09-02 00:00:00', 60, NULL, NULL),
(7, 2, 7, 1, '2024-09-02 00:00:00', 80, NULL, NULL),
(8, 2, 8, 1, '2024-09-02 00:00:00', 55, NULL, NULL),
(9, 2, 9, 1, '2024-09-02 00:00:00', 45, NULL, NULL),
(10, 2, 10, 1, '2024-09-02 00:00:00', 65, NULL, NULL),
(11, 3, 11, 1, '2024-09-03 00:00:00', 100, NULL, NULL),
(12, 3, 12, 1, '2024-09-03 00:00:00', 90, NULL, NULL),
(13, 3, 13, 1, '2024-09-03 00:00:00', 85, NULL, NULL),
(14, 3, 14, 1, '2024-09-03 00:00:00', 70, NULL, NULL),
(15, 3, 15, 1, '2024-09-03 00:00:00', 95, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_barang`
--
ALTER TABLE `m_barang`
  ADD PRIMARY KEY (`barang_id`),
  ADD UNIQUE KEY `m_barang_barang_kode_unique` (`barang_kode`),
  ADD KEY `m_barang_kategori_id_index` (`kategori_id`);

--
-- Indexes for table `m_kategori`
--
ALTER TABLE `m_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `m_level`
--
ALTER TABLE `m_level`
  ADD PRIMARY KEY (`level_id`),
  ADD UNIQUE KEY `m_level_level_kode_unique` (`level_kode`);

--
-- Indexes for table `m_supplier`
--
ALTER TABLE `m_supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `m_user`
--
ALTER TABLE `m_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `m_user_username_unique` (`username`),
  ADD KEY `m_user_level_id_index` (`level_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `t_penjualan`
--
ALTER TABLE `t_penjualan`
  ADD PRIMARY KEY (`penjualan_id`),
  ADD KEY `t_penjualan_user_id_index` (`user_id`);

--
-- Indexes for table `t_penjualan_detail`
--
ALTER TABLE `t_penjualan_detail`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `t_penjualan_detail_penjualan_id_foreign` (`penjualan_id`),
  ADD KEY `t_penjualan_detail_barang_id_foreign` (`barang_id`);

--
-- Indexes for table `t_stok`
--
ALTER TABLE `t_stok`
  ADD PRIMARY KEY (`stok_id`),
  ADD KEY `t_stok_supplier_id_index` (`supplier_id`),
  ADD KEY `t_stok_barang_id_index` (`barang_id`),
  ADD KEY `t_stok_user_id_index` (`user_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `m_barang`
--
ALTER TABLE `m_barang`
  MODIFY `barang_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `m_kategori`
--
ALTER TABLE `m_kategori`
  MODIFY `kategori_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `m_level`
--
ALTER TABLE `m_level`
  MODIFY `level_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `m_supplier`
--
ALTER TABLE `m_supplier`
  MODIFY `supplier_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `m_user`
--
ALTER TABLE `m_user`
  MODIFY `user_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_penjualan`
--
ALTER TABLE `t_penjualan`
  MODIFY `penjualan_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `t_penjualan_detail`
--
ALTER TABLE `t_penjualan_detail`
  MODIFY `detail_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `t_stok`
--
ALTER TABLE `t_stok`
  MODIFY `stok_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `m_barang`
--
ALTER TABLE `m_barang`
  ADD CONSTRAINT `m_barang_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `m_kategori` (`kategori_id`);

--
-- Constraints for table `m_user`
--
ALTER TABLE `m_user`
  ADD CONSTRAINT `m_user_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `m_level` (`level_id`);

--
-- Constraints for table `t_penjualan`
--
ALTER TABLE `t_penjualan`
  ADD CONSTRAINT `t_penjualan_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `m_user` (`user_id`);

--
-- Constraints for table `t_penjualan_detail`
--
ALTER TABLE `t_penjualan_detail`
  ADD CONSTRAINT `t_penjualan_detail_barang_id_foreign` FOREIGN KEY (`barang_id`) REFERENCES `m_barang` (`barang_id`),
  ADD CONSTRAINT `t_penjualan_detail_penjualan_id_foreign` FOREIGN KEY (`penjualan_id`) REFERENCES `t_penjualan` (`penjualan_id`);

--
-- Constraints for table `t_stok`
--
ALTER TABLE `t_stok`
  ADD CONSTRAINT `t_stok_barang_id_foreign` FOREIGN KEY (`barang_id`) REFERENCES `m_barang` (`barang_id`),
  ADD CONSTRAINT `t_stok_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `m_supplier` (`supplier_id`),
  ADD CONSTRAINT `t_stok_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `m_user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
