-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2019 at 12:19 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_evaluation`
--

-- --------------------------------------------------------

--
-- Table structure for table `final_marks`
--

CREATE TABLE `final_marks` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_id` int(11) NOT NULL,
  `studentid` int(11) NOT NULL,
  `counter` int(11) NOT NULL,
  `final_mark` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `final_marks`
--

INSERT INTO `final_marks` (`id`, `project_id`, `studentid`, `counter`, `final_mark`, `created_at`, `updated_at`) VALUES
(9, 14000, 1512020201, 2, 88, NULL, NULL),
(10, 14001, 1512020204, 2, 89, NULL, NULL),
(11, 14002, 1512020210, 2, 51, NULL, NULL),
(12, 14002, 1512020211, 2, 50, NULL, NULL),
(13, 14003, 1512020206, 2, 55, NULL, NULL),
(14, 14004, 1512020202, 3, 82, NULL, NULL),
(15, 14004, 1512020203, 2, 93, NULL, NULL),
(16, 14004, 1512020205, 2, 88, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `marking_systems`
--

CREATE TABLE `marking_systems` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_id` int(11) NOT NULL,
  `personal_id` int(11) NOT NULL,
  `course_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` int(11) NOT NULL,
  `category_one` int(11) NOT NULL,
  `category_two` int(11) NOT NULL,
  `supervisor_marks` int(10) UNSIGNED DEFAULT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marking_systems`
--

INSERT INTO `marking_systems` (`id`, `project_id`, `personal_id`, `course_code`, `semester`, `student_id`, `category_one`, `category_two`, `supervisor_marks`, `total`, `created_at`, `updated_at`) VALUES
(1, 14000, 90901, 'CSE-4041', 'SUMMER-2018', 1512020201, 30, 25, 38, 55, NULL, NULL),
(2, 14001, 90901, 'CSE-4041', 'SUMMER-2018', 1512020204, 22, 25, 38, 47, NULL, NULL),
(3, 14002, 90901, 'CSE-4041', 'SUMMER-2018', 1512020210, 22, 25, NULL, 47, NULL, NULL),
(4, 14002, 90901, 'CSE-4041', 'SUMMER-2018', 1512020211, 30, 25, NULL, 55, NULL, NULL),
(5, 14003, 90901, 'CSE-4041', 'SUMMER-2018', 1512020206, 30, 25, NULL, 55, NULL, NULL),
(6, 14004, 90901, 'CSE-4041', 'SUMMER-2018', 1512020202, 22, 22, NULL, 44, NULL, NULL),
(7, 14004, 90901, 'CSE-4041', 'SUMMER-2018', 1512020203, 30, 25, NULL, 55, NULL, NULL),
(8, 14004, 90901, 'CSE-4041', 'SUMMER-2018', 1512020205, 22, 26, NULL, 48, NULL, NULL),
(9, 14004, 90901, 'CSE-4041', 'SUMMER-2018', 1512020202, 22, 25, NULL, 47, NULL, NULL),
(13, 14000, 1512020206, 'CSE-4041', 'SUMMER-2018', 1512020201, 22, 22, NULL, 44, NULL, NULL),
(14, 14001, 1512020206, 'CSE-4041', 'SUMMER-2018', 1512020204, 30, 25, NULL, 55, NULL, NULL),
(15, 14002, 1512020206, 'CSE-4041', 'SUMMER-2018', 1512020210, 30, 25, NULL, 55, NULL, NULL),
(16, 14002, 1512020206, 'CSE-4041', 'SUMMER-2018', 1512020211, 22, 22, NULL, 44, NULL, NULL),
(17, 14003, 1512020206, 'CSE-4041', 'SUMMER-2018', 1512020206, 30, 25, NULL, 55, NULL, NULL),
(18, 14004, 1512020206, 'CSE-4041', 'SUMMER-2018', 1512020202, 30, 25, 33, 55, NULL, NULL),
(19, 14004, 1512020206, 'CSE-4041', 'SUMMER-2018', 1512020203, 30, 25, 38, 55, NULL, NULL),
(20, 14004, 1512020206, 'CSE-4041', 'SUMMER-2018', 1512020205, 30, 22, 38, 52, NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_09_183850_create_student_lists_table', 1),
(4, '2018_11_13_191303_create_project_lists_table', 1),
(5, '2018_11_17_061207_create_marking_systems_table', 1),
(6, '2018_11_17_123019_create_supervisor_students_table', 1),
(7, '2018_11_26_220525_create_reg_infos_table', 1),
(8, '2018_12_09_142144_create_final_marks_table', 1),
(9, '2018_12_28_154226_create_schedulings_table', 1),
(10, '2019_01_05_070611_create_project__uploads_table', 1),
(11, '2019_01_18_113754_create_student__comments_table', 1);

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
-- Table structure for table `project_lists`
--

CREATE TABLE `project_lists` (
  `project_id` int(10) UNSIGNED NOT NULL,
  `project_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_id` int(11) NOT NULL DEFAULT '0',
  `semester` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `studentid_one` int(11) NOT NULL,
  `studentid_two` int(10) UNSIGNED DEFAULT NULL,
  `studentid_three` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_lists`
--

INSERT INTO `project_lists` (`project_id`, `project_name`, `description`, `course_code`, `personal_id`, `semester`, `studentid_one`, `studentid_two`, `studentid_three`, `created_at`, `updated_at`) VALUES
(14000, 'Cynas', 'DDDDDDDDDDDD', 'CSE-4041', 90901, 'SUMMER-2018', 1512020201, NULL, NULL, '2019-01-20 16:12:22', '2019-01-20 16:12:22'),
(14001, 'Android2', 'DDDDDDDD', 'CSE-4041', 90901, 'SUMMER-2018', 1512020204, NULL, NULL, '2019-01-20 16:12:36', '2019-01-20 16:12:36'),
(14002, 'brycptdq', 'FFFGGGGGGGGGGGG', 'CSE-4041', 1512020204, 'SUMMER-2018', 1512020210, 1512020211, NULL, '2019-01-20 16:13:21', '2019-01-20 16:13:21'),
(14003, 'Android44', 'GGGGGGGGGGGGGGG', 'CSE-4041', 1512020204, 'SUMMER-2018', 1512020206, NULL, NULL, '2019-01-20 16:14:29', '2019-01-20 16:14:29'),
(14004, 'WEBAPP', 'DDDDDDDDDDDDDDDD', 'CSE-4041', 1512020206, 'SUMMER-2018', 1512020202, 1512020203, 1512020205, '2019-01-20 16:15:30', '2019-01-20 16:15:30');

-- --------------------------------------------------------

--
-- Table structure for table `project__uploads`
--

CREATE TABLE `project__uploads` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_id` int(11) NOT NULL,
  `project_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `framework` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_txt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_img` blob NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reg_infos`
--

CREATE TABLE `reg_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reg_infos`
--

INSERT INTO `reg_infos` (`id`, `course_code`, `semester`, `created_at`, `updated_at`) VALUES
(1, 'CSE-4041', 'SUMMER-2018', '2019-01-20 16:10:26', '2019-01-20 16:10:26');

-- --------------------------------------------------------

--
-- Table structure for table `schedulings`
--

CREATE TABLE `schedulings` (
  `id` int(10) UNSIGNED NOT NULL,
  `final_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fi_semester` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fi_info` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fi_fr_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fi_to_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `third_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `th_semester` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `th_info` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `th_fr_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `th_to_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_fr_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_to_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `result` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rs_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedulings`
--

INSERT INTO `schedulings` (`id`, `final_year`, `fi_semester`, `fi_info`, `fi_fr_date`, `fi_to_date`, `third_year`, `th_semester`, `th_info`, `th_fr_date`, `th_to_date`, `reg_fr_date`, `reg_to_date`, `result`, `rs_date`, `created_at`, `updated_at`) VALUES
(1, 'Final Year Project', 'Semester', 'ddddddddddddd', '31-01-2019', '01-02-2019', 'Third Year Project', 'Semester', 'ddddddddddddddddddd', '31-01-2019', '02-02-2019', '20-01-2019', '31-01-2019', 'Result', '14-02-2019', '2019-01-20 15:54:32', '2019-01-20 16:09:56');

-- --------------------------------------------------------

--
-- Table structure for table `student_lists`
--

CREATE TABLE `student_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `studentid` int(11) NOT NULL,
  `studentname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_id` int(10) UNSIGNED DEFAULT NULL,
  `personal_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_lists`
--

INSERT INTO `student_lists` (`id`, `studentid`, `studentname`, `semester`, `project_id`, `personal_id`, `created_at`, `updated_at`) VALUES
(1, 1512020246, 'Sourav Roy', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(2, 1512020201, 'Debasish', 'SPRING-2018', NULL, NULL, NULL, NULL),
(3, 1512020202, 'Akash', 'FALL-2018', NULL, NULL, NULL, NULL),
(4, 1512020203, 'Proma', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(5, 1512020204, 'Sourav Roy', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(6, 1512020205, 'Debasish', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(7, 1512020206, 'Akash', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(8, 1512020210, 'Proma', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(9, 1512020211, 'Raju', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(10, 1512020212, 'Nikhil', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(11, 1512020213, 'Deba', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(12, 1512020214, 'Dulon', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(13, 1512020215, 'Sagar', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(14, 1512020216, 'Shuvo', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(15, 1512020217, 'Niaz', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(16, 1512020218, 'Riya', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(17, 1512020219, 'Rekha', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(18, 1512020220, 'Shanta', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(19, 1512020221, 'Maha', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(20, 1512020222, 'Maya', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(21, 1512020223, 'Azhar', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(22, 1512020224, 'XYZ', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(23, 1512020207, 'Niloy', 'SUMMER-2018', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student__comments`
--

CREATE TABLE `student__comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stdnt_id` int(11) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_img` blob NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supervisor_students`
--

CREATE TABLE `supervisor_students` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_id` int(11) NOT NULL,
  `personal_id` int(11) NOT NULL,
  `supervisor_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supervisor_students`
--

INSERT INTO `supervisor_students` (`id`, `project_id`, `personal_id`, `supervisor_name`, `created_at`, `updated_at`) VALUES
(1, 14000, 90901, 'Sourav', '2019-01-20 16:19:59', '2019-01-20 16:19:59'),
(2, 14001, 90901, 'Sourav', '2019-01-20 16:20:06', '2019-01-20 16:20:06'),
(3, 14002, 1512020204, 'Nikhil', '2019-01-20 16:20:14', '2019-01-20 16:20:14'),
(4, 14003, 1512020204, 'Nikhil', '2019-01-20 16:20:23', '2019-01-20 16:20:23'),
(5, 14004, 1512020206, 'proma', '2019-01-20 16:21:54', '2019-01-20 16:21:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `personal_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `faculty` tinyint(1) NOT NULL DEFAULT '0',
  `student` tinyint(1) NOT NULL DEFAULT '0',
  `normal_user` tinyint(1) NOT NULL DEFAULT '0',
  `supervisor` tinyint(1) NOT NULL DEFAULT '0',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `personal_id`, `name`, `admin`, `faculty`, `student`, `normal_user`, `supervisor`, `email`, `phone`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 90901, 'Sourav', 1, 1, 1, 1, 1, 'sourav@gmail.com', 123456, '$2y$10$mSPxJXXSlbLaVXH1uwnT4OqwxL0UGfczjLEyPuprwaWIt89tvrLe.', 'PH29lRLc9FJgzGmViYbMo5YCJ4AXaEjHxgSdvWK200qiGWCkJJjjT8gattr7', '2019-01-20 15:50:24', '2019-01-20 15:50:24'),
(2, 1512020201, 'Mou', 0, 0, 1, 0, 0, 'm@gmail.com', 56541, '$2y$10$y.j1n8c5eGux/4.FmXEYoeDNDvd8Z7UnBRwbev6esubw4KnSauC0q', 'Ctxf7hu9AxRFXVgb5bcrrpXzb7ppJSWGQhPhr4G5VHhhdR0ybSSJbsP3VjDe', '2019-01-20 16:16:37', '2019-01-20 16:18:52'),
(3, 1512020202, 'Subarna', 0, 0, 1, 0, 0, 'sa@gmail.com', 8173901, '$2y$10$biCvgYNEVi.V.BfbYXS3qeGG1LnxXGVg.3DSSRM6c2064InnInGc.', 'xvDhhSqentGPLkXHqcqVuW4moWUUnkg6AowKflqDvttDl4qvUF3ERErQYQaS', '2019-01-20 16:17:22', '2019-01-20 16:19:01'),
(4, 1512020203, 'raju', 0, 0, 1, 0, 0, 'ra@gmail.com', 565411, '$2y$10$jsuiYTeZcfSr1PY9uzAVp.TszwJg.vbZn35547avdWQNx2TgIhTii', 'TVs6isBGQeqWZNcl6QvKgRYOHEUWvWgnfvWOVrHdMvP6haaX0j1rAbCr4Tc7', '2019-01-20 16:17:44', '2019-01-20 16:19:09'),
(5, 1512020204, 'Nikhil', 0, 0, 1, 0, 1, 'n@gmail.com', 12345611, '$2y$10$8ZHZcGKJXHI.qNqltoNM5OoeGeqaMMOOX2cAz0aaeRTrYoeAMZpCa', 'rMIqc5WIqPbc873tJkoE3twJ1TJU8xciOYIaCnVuV1sb0Y5DUOvOFUZCcqUk', '2019-01-20 16:18:02', '2019-01-20 16:19:21'),
(6, 1512020206, 'proma', 0, 0, 1, 0, 1, 'p@gmail.com', 12345612, '$2y$10$KsybUFiGzLMtUcFjADVSa.D4CRpJmzhuDc.dAO/es3QrBqM3ilrWW', '3iJrO5Dh548SJVqX2NRIPcfXOqBcPN1ekI2yAYHM7CKkAHZynDTeR9GVAdTw', '2019-01-20 16:18:29', '2019-01-20 16:19:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `final_marks`
--
ALTER TABLE `final_marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marking_systems`
--
ALTER TABLE `marking_systems`
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
-- Indexes for table `project_lists`
--
ALTER TABLE `project_lists`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `project__uploads`
--
ALTER TABLE `project__uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg_infos`
--
ALTER TABLE `reg_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedulings`
--
ALTER TABLE `schedulings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_lists`
--
ALTER TABLE `student_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student__comments`
--
ALTER TABLE `student__comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisor_students`
--
ALTER TABLE `supervisor_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_personal_id_unique` (`personal_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `final_marks`
--
ALTER TABLE `final_marks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `marking_systems`
--
ALTER TABLE `marking_systems`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `project_lists`
--
ALTER TABLE `project_lists`
  MODIFY `project_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14005;

--
-- AUTO_INCREMENT for table `project__uploads`
--
ALTER TABLE `project__uploads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reg_infos`
--
ALTER TABLE `reg_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schedulings`
--
ALTER TABLE `schedulings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_lists`
--
ALTER TABLE `student_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `student__comments`
--
ALTER TABLE `student__comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supervisor_students`
--
ALTER TABLE `supervisor_students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
