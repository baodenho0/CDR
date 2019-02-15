-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2019 at 11:43 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cdr`
--

-- --------------------------------------------------------

--
-- Table structure for table `anh`
--

CREATE TABLE `anh` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_danhmuc` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bocuc`
--

CREATE TABLE `bocuc` (
  `id` int(10) UNSIGNED NOT NULL,
  `header` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `footer` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bocuc`
--

INSERT INTO `bocuc` (`id`, `header`, `footer`, `created_at`, `updated_at`) VALUES
(1, '1.jpg', '1', '2019-01-31 10:35:18', '2019-01-30 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cocautochuc`
--

CREATE TABLE `cocautochuc` (
  `id` int(10) UNSIGNED NOT NULL,
  `noidung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cocautochuc`
--

INSERT INTO `cocautochuc` (`id`, `noidung`, `created_at`, `updated_at`) VALUES
(1, '1', '2019-01-30 17:00:00', '2019-01-30 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cosovatchat`
--

CREATE TABLE `cosovatchat` (
  `id` int(10) UNSIGNED NOT NULL,
  `noidung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cosovatchat`
--

INSERT INTO `cosovatchat` (`id`, `noidung`, `created_at`, `updated_at`) VALUES
(1, '1', '2019-01-30 17:00:00', '2019-01-30 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc_anh`
--

CREATE TABLE `danhmuc_anh` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tenkhongdau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc_hoatdong`
--

CREATE TABLE `danhmuc_hoatdong` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tenkhongdau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc_hoatdong`
--

INSERT INTO `danhmuc_hoatdong` (`id`, `ten`, `tenkhongdau`, `created_at`, `updated_at`) VALUES
(1, 'Hoạt động tâm vận động', 'hoat-dong-tam-van-dong', '2019-01-31 11:25:45', '2019-01-31 11:25:45'),
(2, 'Hoạt động kỹ năng', 'hoat-dong-ky-nang', '2019-01-31 11:26:18', '2019-01-31 11:26:18'),
(3, 'Hoạt động ngoài trời', 'hoat-dong-ngoai-troi', '2019-01-31 11:26:29', '2019-01-31 11:26:29'),
(4, 'Trị liệu âm nhạc', 'tri-lieu-am-nhac', '2019-01-31 11:26:43', '2019-01-31 11:26:43'),
(5, 'Can thiệp cá nhân', 'can-thiep-ca-nhan', '2019-01-31 11:26:51', '2019-01-31 11:26:51');

-- --------------------------------------------------------

--
-- Table structure for table `daotao`
--

CREATE TABLE `daotao` (
  `id` int(10) UNSIGNED NOT NULL,
  `noidung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `daotao`
--

INSERT INTO `daotao` (`id`, `noidung`, `created_at`, `updated_at`) VALUES
(1, '1', '2019-01-30 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fb`
--

CREATE TABLE `fb` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fb`
--

INSERT INTO `fb` (`id`, `link`, `created_at`, `updated_at`) VALUES
(1, '1', '2019-01-30 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gioithieu`
--

CREATE TABLE `gioithieu` (
  `id` int(10) UNSIGNED NOT NULL,
  `noidung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gioithieu`
--

INSERT INTO `gioithieu` (`id`, `noidung`, `created_at`, `updated_at`) VALUES
(1, '1', '2019-01-30 17:00:00', '2019-01-30 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hoatdong`
--

CREATE TABLE `hoatdong` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tenkhongdau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `id_danhmuc` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoatdong`
--

INSERT INTO `hoatdong` (`id`, `ten`, `tenkhongdau`, `noidung`, `id_danhmuc`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '<p>1</p>', 1, '2019-01-31 11:27:21', '2019-01-31 11:27:21');

-- --------------------------------------------------------

--
-- Table structure for table `icon`
--

CREATE TABLE `icon` (
  `id` int(10) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `icon`
--

INSERT INTO `icon` (`id`, `icon`, `created_at`, `updated_at`) VALUES
(1, '1.jpg', '2019-01-30 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ketnoi`
--

CREATE TABLE `ketnoi` (
  `id` int(10) UNSIGNED NOT NULL,
  `fb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ketnoi`
--

INSERT INTO `ketnoi` (`id`, `fb`, `youtube`, `sdt`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '1', '2019-01-30 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(10) UNSIGNED NOT NULL,
  `noidung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`id`, `noidung`, `created_at`, `updated_at`) VALUES
(1, '1', '2019-01-30 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(22, '2014_10_12_000000_create_users_table', 1),
(23, '2014_10_12_100000_create_password_resets_table', 1),
(24, '2019_01_19_195244_create_bocuc', 1),
(25, '2019_01_19_195323_create_seo', 1),
(26, '2019_01_19_195341_create_ketnoi', 1),
(27, '2019_01_19_195357_create_gioithieu', 1),
(28, '2019_01_19_195419_create_nhiemvuchucnang', 1),
(29, '2019_01_19_195440_create_cocautochuc', 1),
(30, '2019_01_19_195459_create_noiquy', 1),
(31, '2019_01_19_195517_create_cosovatchat', 1),
(32, '2019_01_22_152725_create_lienhe', 1),
(33, '2019_01_22_173437_create_thongbao', 1),
(34, '2019_01_22_173447_create_tintuc', 1),
(35, '2019_01_24_221024_create_daotao', 1),
(36, '2019_01_25_124614_create_danhmuc_hoatdong', 1),
(37, '2019_01_25_125439_create_hoatdong', 1),
(38, '2019_01_26_173603_create_danhmuc_anh', 1),
(39, '2019_01_26_174001_create_anh', 1),
(40, '2019_01_27_150151_create_slide', 1),
(41, '2019_01_29_184750_create_fb', 1),
(42, '2019_01_31_110848_create_icon', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nhiemvuchucnang`
--

CREATE TABLE `nhiemvuchucnang` (
  `id` int(10) UNSIGNED NOT NULL,
  `noidung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhiemvuchucnang`
--

INSERT INTO `nhiemvuchucnang` (`id`, `noidung`, `created_at`, `updated_at`) VALUES
(1, '1', '2019-01-30 17:00:00', '2019-01-23 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `noiquy`
--

CREATE TABLE `noiquy` (
  `id` int(10) UNSIGNED NOT NULL,
  `noidung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `noiquy`
--

INSERT INTO `noiquy` (`id`, `noidung`, `created_at`, `updated_at`) VALUES
(1, '1', '2019-01-30 17:00:00', '2019-01-30 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` int(10) UNSIGNED NOT NULL,
  `mota` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tukhoa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `mota`, `tukhoa`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '2019-01-30 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `ten`, `anh`, `created_at`, `updated_at`) VALUES
(1, '1', '6vU8gmz949-1.jpg', '2019-01-31 11:32:47', '2019-01-31 11:32:47');

-- --------------------------------------------------------

--
-- Table structure for table `thongbao`
--

CREATE TABLE `thongbao` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tenkhongdau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thongbao`
--

INSERT INTO `thongbao` (`id`, `ten`, `tenkhongdau`, `noidung`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '<p>1</p>', '2019-01-31 11:31:11', '2019-01-31 11:31:11');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tenkhongdau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id`, `ten`, `tenkhongdau`, `noidung`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '1', '2019-01-30 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quyen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `quyen`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '1', NULL, '$2y$10$4pciNUUErJQRl3aF5Y6p8.6oYSiJyg4/frwFJVYXOZcPicppfJ8y2', 'ysngqEZIqKe6EdEN1kNopEUQCXNBUjkbG6xVcM3tCQ5wskK8S8P9DgGPKA3T', NULL, '2019-02-01 07:00:52'),
(2, 'admin1', '2', NULL, '$2y$10$fuSBg8F2G7HedhG4/AmLNeFMJAUwk5voIs4NvBEmKbJLvqiNRnL22', 'wfCXYPDvuI9hjnZVewtzOJi7PKXyKiLO4AhDFkvQTFpuQ2kxHyWvr4Nbii8m', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anh`
--
ALTER TABLE `anh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `anh_id_danhmuc_foreign` (`id_danhmuc`);

--
-- Indexes for table `bocuc`
--
ALTER TABLE `bocuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cocautochuc`
--
ALTER TABLE `cocautochuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cosovatchat`
--
ALTER TABLE `cosovatchat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmuc_anh`
--
ALTER TABLE `danhmuc_anh`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `danhmuc_anh_ten_unique` (`ten`);

--
-- Indexes for table `danhmuc_hoatdong`
--
ALTER TABLE `danhmuc_hoatdong`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `danhmuc_hoatdong_ten_unique` (`ten`);

--
-- Indexes for table `daotao`
--
ALTER TABLE `daotao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fb`
--
ALTER TABLE `fb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gioithieu`
--
ALTER TABLE `gioithieu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hoatdong`
--
ALTER TABLE `hoatdong`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hoatdong_ten_unique` (`ten`),
  ADD KEY `hoatdong_id_danhmuc_foreign` (`id_danhmuc`);

--
-- Indexes for table `icon`
--
ALTER TABLE `icon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ketnoi`
--
ALTER TABLE `ketnoi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhiemvuchucnang`
--
ALTER TABLE `nhiemvuchucnang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noiquy`
--
ALTER TABLE `noiquy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_name_index` (`name`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thongbao`
--
ALTER TABLE `thongbao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
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
-- AUTO_INCREMENT for table `anh`
--
ALTER TABLE `anh`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bocuc`
--
ALTER TABLE `bocuc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cocautochuc`
--
ALTER TABLE `cocautochuc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cosovatchat`
--
ALTER TABLE `cosovatchat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `danhmuc_anh`
--
ALTER TABLE `danhmuc_anh`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhmuc_hoatdong`
--
ALTER TABLE `danhmuc_hoatdong`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `daotao`
--
ALTER TABLE `daotao`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fb`
--
ALTER TABLE `fb`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gioithieu`
--
ALTER TABLE `gioithieu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hoatdong`
--
ALTER TABLE `hoatdong`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `icon`
--
ALTER TABLE `icon`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ketnoi`
--
ALTER TABLE `ketnoi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `nhiemvuchucnang`
--
ALTER TABLE `nhiemvuchucnang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `noiquy`
--
ALTER TABLE `noiquy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `thongbao`
--
ALTER TABLE `thongbao`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anh`
--
ALTER TABLE `anh`
  ADD CONSTRAINT `anh_id_danhmuc_foreign` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmuc_anh` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `hoatdong`
--
ALTER TABLE `hoatdong`
  ADD CONSTRAINT `hoatdong_id_danhmuc_foreign` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmuc_hoatdong` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
