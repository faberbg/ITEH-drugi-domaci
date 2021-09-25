-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2021 at 03:16 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `domacilar`
--

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
-- Table structure for table `firmes`
--

CREATE TABLE `firmes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `naziv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pozicija` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grad_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `firmes`
--

INSERT INTO `firmes` (`id`, `naziv`, `opis`, `pozicija`, `grad_id`) VALUES
(1, 'StuntCoders', 'Pozicionirali smo se u e-commerce svetu 2010. godine. Sa više od 8 godina iskustva u razvoju e-commerce rešenja, apsolutno razumemo svaki segment procesa njegove izgradnje.', 'PHP Developer', 1),
(2, 'TeleSign', 'TeleSign povezuje i štiti iskustva korisnika na internetu pomoću sofisticiranih rešenja digitalnog identiteta i programabilnih komunikacija.', 'Data Scientist', 1),
(3, '3LATERAL', '3Lateral develops innovative technologies that enable digitization of human appearance and motion at an unprecedented level of realism. 3Lateral has been recognized as a pioneer in the gaming industry.', 'Engine Programmer', 2),
(4, 'Ascendik', 'Ascendik is a world-leading health & fitness mobile software development company based in Niš, Serbia. Our goal is to help not only our users, but also our employees in creating healthy habits.', 'Android Developer', 3);

-- --------------------------------------------------------

--
-- Table structure for table `grads`
--

CREATE TABLE `grads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imegrada` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grads`
--

INSERT INTO `grads` (`id`, `imegrada`) VALUES
(1, 'Beograd'),
(2, 'Novi Sad'),
(3, 'Nis');

-- --------------------------------------------------------

--
-- Table structure for table `kandidats`
--

CREATE TABLE `kandidats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prezime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firma_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kandidats`
--

INSERT INTO `kandidats` (`id`, `ime`, `prezime`, `email`, `firma_id`) VALUES
(1, 'David', 'Edelinski', 'david@elab.rs', 1),
(2, 'Marko', 'Petrovic', 'marko@elab.rs', 2),
(3, 'Petar', 'Petrovic', 'petar@elab.rs', 3),
(4, 'test', 'test', 'test@elab.rs', 1);

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
(48, '2021_09_09_033323_izmena_spoljnih', 1),
(49, '2014_10_12_000000_create_users_table', 2),
(50, '2014_10_12_100000_create_password_resets_table', 2),
(51, '2019_08_19_000000_create_failed_jobs_table', 2),
(52, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(53, '2021_09_09_010344_create_firme_table', 2),
(54, '2021_09_09_021818_create_grad_table', 2),
(55, '2021_09_09_023221_create_kandidat_table', 2),
(56, '2021_09_09_033324_izmena_spoljnih', 2);

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
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `firmes`
--
ALTER TABLE `firmes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `firmes_grad_id_foreign` (`grad_id`);

--
-- Indexes for table `grads`
--
ALTER TABLE `grads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kandidats`
--
ALTER TABLE `kandidats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kandidats_firma_id_foreign` (`firma_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `firmes`
--
ALTER TABLE `firmes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `grads`
--
ALTER TABLE `grads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kandidats`
--
ALTER TABLE `kandidats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `firmes`
--
ALTER TABLE `firmes`
  ADD CONSTRAINT `firmes_grad_id_foreign` FOREIGN KEY (`grad_id`) REFERENCES `grads` (`id`);

--
-- Constraints for table `kandidats`
--
ALTER TABLE `kandidats`
  ADD CONSTRAINT `kandidats_firma_id_foreign` FOREIGN KEY (`firma_id`) REFERENCES `firmes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
