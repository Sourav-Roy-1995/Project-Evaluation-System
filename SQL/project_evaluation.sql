-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2018 at 02:54 PM
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
  `studentid` int(11) NOT NULL,
  `counter` int(11) NOT NULL,
  `final_mark` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `final_marks`
--

INSERT INTO `final_marks` (`id`, `studentid`, `counter`, `final_mark`, `created_at`, `updated_at`) VALUES
(1, 1512020201, 1, 40, NULL, NULL),
(2, 1512020221, 1, 69, NULL, NULL),
(3, 1512020246, 1, 42, NULL, NULL);

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
(1, 14001, 90901, 'CSE-4041', 'SUMMER-2018', 1512020201, 10, 10, 20, 20, NULL, NULL),
(2, 14001, 90901, 'CSE-4041', 'SUMMER-2018', 1512020221, 20, 30, 20, 49, NULL, NULL),
(3, 14000, 90901, 'CSE-4041', 'SUMMER-2018', 1512020246, 10, 12, 20, 22, NULL, NULL);

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
(279, '2014_10_12_000000_create_users_table', 1),
(280, '2014_10_12_100000_create_password_resets_table', 1),
(281, '2018_11_09_183850_create_student_lists_table', 1),
(282, '2018_11_13_191303_create_project_lists_table', 1),
(283, '2018_11_17_061207_create_marking_systems_table', 1),
(284, '2018_11_17_123019_create_supervisor_students_table', 1),
(285, '2018_11_26_220525_create_reg_infos_table', 1),
(286, '2018_12_09_142144_create_final_marks_table', 1),
(287, '2018_12_28_154226_create_schedulings_table', 1);

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
(14000, 'Project Evaluation', 'It is a long established fact that a reader will be distracted by th', 'CSE-4041', 90901, 'SUMMER-2018', 1512020246, NULL, NULL, '2018-12-29 07:49:07', '2018-12-29 07:49:07'),
(14001, 'Project Evaluation2', 'It is a long established fact that a reader will be distracted by th', 'CSE-4041', 90901, 'SUMMER-2018', 1512020201, 1512020221, NULL, '2018-12-29 07:49:31', '2018-12-29 07:49:31'),
(14002, 'Project Evaluation4', 'It is a long established fact that a reader will be distracted by th', 'CSE-4041', 0, 'SUMMER-2018', 1512020203, 1512020204, 1512020205, '2018-12-29 07:49:56', '2018-12-29 07:49:56');

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
(1, 'CSE-4041', 'SUMMER-2018', '2018-12-29 07:48:55', '2018-12-29 07:48:55');

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
  `result` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rs_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, 1512020201, 'Debasish', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(3, 1512020202, 'Akash', 'SUMMER-2018', NULL, NULL, NULL, NULL),
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
(22, 1512020224, 'XYZ', 'SUMMER-2018', NULL, NULL, NULL, NULL);

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
(1, 14000, 90901, 'Sourav', '2018-12-29 07:50:17', '2018-12-29 07:50:17'),
(2, 14001, 90901, 'Sourav', '2018-12-29 07:50:26', '2018-12-29 07:50:26');

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
(1, 90901, 'Sourav', 1, 1, 1, 1, 1, 'sourav@gmail.com', 1999999, '$2y$10$5aKas0GY1Sfyffa7VdRz5.jsfkwsGxR5Lrzo2T9oCZNUOUxE2BBLW', NULL, '2018-12-29 07:47:35', '2018-12-29 07:47:35');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `marking_systems`
--
ALTER TABLE `marking_systems`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=288;

--
-- AUTO_INCREMENT for table `project_lists`
--
ALTER TABLE `project_lists`
  MODIFY `project_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14003;

--
-- AUTO_INCREMENT for table `reg_infos`
--
ALTER TABLE `reg_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schedulings`
--
ALTER TABLE `schedulings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_lists`
--
ALTER TABLE `student_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `supervisor_students`
--
ALTER TABLE `supervisor_students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
