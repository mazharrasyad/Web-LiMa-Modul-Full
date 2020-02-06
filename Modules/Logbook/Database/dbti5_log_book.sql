-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2019 at 03:50 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbti5_log_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_project`
--

CREATE TABLE `log_project` (
  `id` int(10) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `hasil_log` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kendala` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sprint_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_project`
--

INSERT INTO `log_project` (`id`, `tanggal`, `hasil_log`, `kendala`, `sprint_id`, `created_at`, `updated_at`) VALUES
(16, '2019-10-20', 'hasil/wwDKXVD5JcOkms6QnIY3MQO6Lw0jxiqZMlD3jrX0.png', 'Ssad', 1, '2019-10-19 23:25:44', '2019-10-19 23:25:44'),
(17, '2019-10-21', 'hasil/urTxFA6Ulh2rToD8vhrYwo0WIfL9ZEp2Rc2nmWn2.png', 'kendala', 2, '2019-10-20 22:41:29', '2019-10-20 22:41:29'),
(18, '2019-10-22', 'hasil/vfzUZp0I3lKTx4d1bOhnane14H3J1ZPy45KM3YaF.png', 'Kendala', 1, '2019-10-22 02:22:06', '2019-10-22 02:22:06'),
(23, '2019-10-27', 'hasil/qrhR61nBG3KyFZ8xu2gMKOEleAROMrm5GrRAPhuy.png', 'Kendala Waktu', 1, '2019-10-26 20:05:55', '2019-10-26 20:05:55'),
(24, '2019-10-27', 'public/hasil/F4yNtnWZQjaFXNfH1BnNqGwXteOVukFaW5WaWVgq.png', 'Kendala Waktu', 1, '2019-10-26 20:33:29', '2019-10-26 20:33:29'),
(25, '2019-10-27', 'public/hasil/1EDK0J5yWkJkDJphKEecd2IlaLScAg216OgZylv7.png', 'Kendala Uang', 1, '2019-10-26 20:33:37', '2019-10-26 20:33:37'),
(26, '2019-10-29', 'public/hasil/ntSid1AgpMVEt8qK8YE96EoIOdJ0CfAHqeLJ8f5v.png', 'Uang', 2, '2019-10-28 18:50:27', '2019-10-28 18:50:27'),
(27, '2019-10-29', 'public/hasil/W73kdpqeX213lW6lfni1hhaW68r65aXxviXiSBYx.png', 'duit', 1, '2019-10-28 23:50:44', '2019-10-28 23:50:44'),
(28, '2019-10-29', 'public/hasil/WNhtaHOW3EJoQKgvT9I0W9wWZY7uOpP6Dk5ebcjN.png', 'uang 20000', 1, '2019-10-29 01:47:04', '2019-10-29 01:47:04'),
(29, '2019-11-05', 'public/hasil/4ofje1KITh06LYTg1NvMGdvvBsMg6mSnWXYN44Dg.png', 'oke', 2, '2019-11-04 20:45:36', '2019-11-04 20:45:36'),
(30, '2019-11-05', 'public/hasil/Te7oApbsUtZBWQ4v6JTgIe0s7s5WvhjVLxEjTHFT.png', 'Kurang Dana', 1, '2019-11-04 21:16:22', '2019-11-04 21:16:22'),
(31, '2019-11-24', 'public/hasil/1VGIa7OPcYxXTCxgJlCDlwmfOVjqKHXliC6OBRYh.txt', 'oke', 1, '2019-11-23 18:58:02', '2019-11-23 18:58:02'),
(32, '2019-11-26', 'public/hasil/ereD28XCyZXSz3FJhOQ7awAuRPRY1jTkxkmboDiU.pptx', 'Kendala Sprint', 2, '2019-11-25 18:19:05', '2019-11-25 18:19:05'),
(33, '2019-11-26', 'public/hasil/tfp38JS7mjzCR9rJRIvhxKsjX2m8h1z99G7y10GY.txt', 'Kendala Sprint', 1, '2019-11-25 18:40:41', '2019-11-25 18:40:41');

-- --------------------------------------------------------

--
-- Table structure for table `log_project_task`
--

CREATE TABLE `log_project_task` (
  `id` int(10) UNSIGNED NOT NULL,
  `log_project_id` int(10) UNSIGNED NOT NULL,
  `task_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_project_task`
--

INSERT INTO `log_project_task` (`id`, `log_project_id`, `task_id`, `created_at`, `updated_at`) VALUES
(1, 15, 1, '2019-10-19 23:24:44', '2019-10-19 23:24:44'),
(2, 15, 2, '2019-10-19 23:24:44', '2019-10-19 23:24:44'),
(3, 16, 1, '2019-10-19 23:25:44', '2019-10-19 23:25:44'),
(4, 16, 2, '2019-10-19 23:25:44', '2019-10-19 23:25:44'),
(5, 17, 3, '2019-10-20 22:41:29', '2019-10-20 22:41:29'),
(6, 17, 4, '2019-10-20 22:41:29', '2019-10-20 22:41:29'),
(7, 18, 1, '2019-10-22 02:22:06', '2019-10-22 02:22:06'),
(8, 23, 1, '2019-10-26 20:05:55', '2019-10-26 20:05:55'),
(9, 23, 2, '2019-10-26 20:05:55', '2019-10-26 20:05:55'),
(10, 24, 1, '2019-10-26 20:33:30', '2019-10-26 20:33:30'),
(11, 24, 2, '2019-10-26 20:33:30', '2019-10-26 20:33:30'),
(12, 25, 1, '2019-10-26 20:33:38', '2019-10-26 20:33:38'),
(13, 25, 2, '2019-10-26 20:33:38', '2019-10-26 20:33:38'),
(14, 26, 3, '2019-10-28 18:50:27', '2019-10-28 18:50:27'),
(15, 26, 4, '2019-10-28 18:50:27', '2019-10-28 18:50:27'),
(16, 27, 1, '2019-10-28 23:50:44', '2019-10-28 23:50:44'),
(17, 28, 2, '2019-10-29 01:47:04', '2019-10-29 01:47:04'),
(18, 29, 3, '2019-11-04 20:45:37', '2019-11-04 20:45:37'),
(19, 29, 4, '2019-11-04 20:45:37', '2019-11-04 20:45:37'),
(20, 30, 1, '2019-11-04 21:16:22', '2019-11-04 21:16:22'),
(21, 31, 1, '2019-11-23 18:58:02', '2019-11-23 18:58:02'),
(22, 32, 1, '2019-11-25 18:19:05', '2019-11-25 18:19:05'),
(23, 32, 2, '2019-11-25 18:19:05', '2019-11-25 18:19:05'),
(24, 33, 1, '2019-11-25 18:40:41', '2019-11-25 18:40:41'),
(25, 33, 2, '2019-11-25 18:40:41', '2019-11-25 18:40:41');

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
(1, '2019_10_10_000801_create_sprints_table', 1),
(2, '2019_10_10_000834_create_tasks_table', 1),
(3, '2019_10_10_000950_create_logprojects_table', 1),
(4, '2019_10_10_001020_create_poreviews_table', 1),
(5, '2019_10_10_001208_create_listtasks_table', 1),
(6, '2019_10_10_005008_change_listtask_to_list_task', 2),
(7, '2019_10_10_005256_change_logproject_to_log_project', 3),
(8, '2019_10_10_005400_change_poreviews_to_po_reviews', 4),
(9, '2019_10_10_123610_rename_tasks', 5),
(10, '2019_10_10_124020_rename_sprints', 6),
(11, '2019_10_10_124505_po_reviews', 7),
(12, '2019_10_10_124730_rename_log_projects', 8),
(13, '2019_10_10_152210_rename_list_task', 9),
(14, '2019_10_10_231133_rename_log_task', 10),
(15, '2019_10_10_231838_drop_table', 11),
(16, '2019_10_10_232200_create_logproject_task_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `po_review`
--

CREATE TABLE `po_review` (
  `id` int(10) UNSIGNED NOT NULL,
  `rekomendasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `validasi` tinyint(1) NOT NULL,
  `log_project_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `po_review`
--

INSERT INTO `po_review` (`id`, `rekomendasi`, `validasi`, `log_project_id`, `created_at`, `updated_at`) VALUES
(3, 'Satu', 1, 16, '2019-10-26 21:18:55', '2019-10-26 21:18:55'),
(4, 'Recommend for ya', 1, 17, '2019-10-26 21:24:40', '2019-10-26 21:24:40'),
(5, 'kamu payah', 1, 26, '2019-10-28 18:51:15', '2019-10-28 18:51:15'),
(6, 'bagus', 1, 27, '2019-10-28 23:51:30', '2019-10-28 23:51:30'),
(7, 'udh bagus', 0, 28, '2019-10-29 01:49:59', '2019-10-29 01:49:59'),
(8, 'bagus', 1, 30, '2019-11-04 21:24:06', '2019-11-04 21:24:06'),
(9, 'lanjutkan', 1, 31, '2019-11-23 19:18:55', '2019-11-23 19:18:55'),
(10, 'dua', 0, 16, '2019-11-23 19:19:31', '2019-11-23 19:19:31'),
(11, 'Recommend for ya', 1, 17, '2019-11-25 16:37:19', '2019-11-25 16:37:19');

-- --------------------------------------------------------

--
-- Table structure for table `sprint`
--

CREATE TABLE `sprint` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_sprint` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_sprint` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sprint`
--

INSERT INTO `sprint` (`id`, `nama_sprint`, `desc_sprint`, `tgl_mulai`, `tgl_selesai`, `created_at`, `updated_at`) VALUES
(1, 'Sprint 1', 'Membuat Page 1 jadi', '2019-10-10', '2019-10-12', NULL, NULL),
(2, 'Sprint 2', 'Membuat halaman 2 jadi', '2019-10-17', '2019-10-24', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(10) UNSIGNED NOT NULL,
  `sprint_id` int(10) UNSIGNED NOT NULL,
  `nama_task` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_task` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `sprint_id`, `nama_task`, `desc_task`, `tgl_mulai`, `tgl_selesai`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Membuat Databse sprint', 'Membuat database sprint sebaik mungkin', '2019-10-10', '2019-10-12', 0, NULL, NULL),
(2, 1, 'Membuat table tugas', 'Membuat tabel tugas dengan baik', '2019-10-10', '2019-10-17', 0, NULL, NULL),
(3, 2, 'Membuat frontEnd', 'Ini Front end website', '2019-10-10', '2019-10-17', 0, NULL, NULL),
(4, 2, 'Ini FrontEnd 2', 'Disini hasil front ENd babak 2 loh', '2019-10-10', '2019-10-17', 0, NULL, NULL),
(5, 2, 'Membuat frontEnd', 'Ini Front end website', '2019-10-10', '2019-10-17', 0, NULL, NULL),
(6, 2, 'Ini FrontEnd 2', 'Disini hasil front ENd babak 2 loh', '2019-10-10', '2019-10-17', 0, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_project`
--
ALTER TABLE `log_project`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sprint_id` (`sprint_id`);

--
-- Indexes for table `log_project_task`
--
ALTER TABLE `log_project_task`
  ADD PRIMARY KEY (`id`),
  ADD KEY `task_id` (`task_id`),
  ADD KEY `log_project_id` (`log_project_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `po_review`
--
ALTER TABLE `po_review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `log_project_id` (`log_project_id`);

--
-- Indexes for table `sprint`
--
ALTER TABLE `sprint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sprint_id` (`sprint_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_project`
--
ALTER TABLE `log_project`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `log_project_task`
--
ALTER TABLE `log_project_task`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `po_review`
--
ALTER TABLE `po_review`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sprint`
--
ALTER TABLE `sprint`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `log_project`
--
ALTER TABLE `log_project`
  ADD CONSTRAINT `log_project_ibfk_1` FOREIGN KEY (`sprint_id`) REFERENCES `sprint` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `log_project_task`
--
ALTER TABLE `log_project_task`
  ADD CONSTRAINT `log_project_task_ibfk_1` FOREIGN KEY (`log_project_id`) REFERENCES `log_project` (`id`),
  ADD CONSTRAINT `log_project_task_ibfk_2` FOREIGN KEY (`task_id`) REFERENCES `task` (`id`);

--
-- Constraints for table `po_review`
--
ALTER TABLE `po_review`
  ADD CONSTRAINT `po_review_ibfk_1` FOREIGN KEY (`log_project_id`) REFERENCES `log_project` (`id`);

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`sprint_id`) REFERENCES `sprint` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
