-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2019 at 03:13 PM
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
(4, 14000, 1512020203, 1, 77, NULL, NULL),
(5, 14000, 1512020201, 1, 88, NULL, NULL),
(6, 14000, 1512020202, 1, 82, NULL, NULL);

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
(1, 14000, 90901, 'CSE-4041', 'SUMMER-2018', 1512020203, 22, 22, 33, 50, NULL, '2019-01-11 07:58:50'),
(2, 14000, 90901, 'CSE-4041', 'SUMMER-2018', 1512020201, 30, 30, 40, 60, NULL, '2019-01-11 07:59:17'),
(3, 14000, 90901, 'CSE-4041', 'SUMMER-2018', 1512020202, 21, 21, 40, 42, NULL, NULL);

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
(21, '2014_10_12_000000_create_users_table', 1),
(22, '2014_10_12_100000_create_password_resets_table', 1),
(23, '2018_11_09_183850_create_student_lists_table', 1),
(24, '2018_11_13_191303_create_project_lists_table', 1),
(25, '2018_11_17_061207_create_marking_systems_table', 1),
(26, '2018_11_17_123019_create_supervisor_students_table', 1),
(27, '2018_11_26_220525_create_reg_infos_table', 1),
(28, '2018_12_09_142144_create_final_marks_table', 1),
(29, '2018_12_28_154226_create_schedulings_table', 1),
(30, '2019_01_05_070611_create_project__uploads_table', 1);

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
(14029, 'Android2', 'dddddddddd', 'CSE-4041', 90902, 'SUMMER-2018', 1512020201, NULL, NULL, '2019-01-11 05:37:00', '2019-01-11 05:37:00'),
(14030, 'brycptd22', 'ddddddddddd', 'CSE-4041', 90901, 'SUMMER-2018', 1512020202, 1512020222, NULL, '2019-01-11 05:37:18', '2019-01-11 05:37:18'),
(14031, 'Android22', 'eeeeeeeeeeeee', 'CSE-4041', 90901, 'SUMMER-2018', 1512020219, 1512020216, 1512020217, '2019-01-11 05:37:36', '2019-01-11 05:37:36'),
(14032, 'brycptdss', 'ssssssssssssssss', 'CSE-4041', 90901, 'SUMMER-2018', 1512020220, 1512020221, NULL, '2019-01-11 05:50:16', '2019-01-11 05:50:16'),
(14033, 'brycptd3', 'DDDDDDDDDDD', 'CSE-4041', 90901, 'SUMMER-2018', 1512020214, 1512020215, 1512020213, '2019-01-11 05:52:30', '2019-01-11 05:52:30');

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

--
-- Dumping data for table `project__uploads`
--

INSERT INTO `project__uploads` (`id`, `name`, `std_id`, `project_title`, `project_type`, `framework`, `project_txt`, `project_img`, `created_at`, `updated_at`) VALUES
(1, 'Mou', 1512020203, 'Cynas', 'web', 'Laravel', 'This is testing period', 0x313534373138393936352e4a5047, '2019-01-11 00:59:25', '2019-01-11 00:59:25');

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
(1, 'CSE-4041', 'SUMMER-2018', '2019-01-08 15:58:45', '2019-01-08 15:58:45'),
(2, 'CSE-4042', 'FALL-2018', '2019-01-11 06:09:31', '2019-01-11 06:09:31'),
(3, 'CSE-4041', 'SUMMER-2018', '2019-01-11 06:12:00', '2019-01-11 06:12:00'),
(4, 'CSE-4044', 'SPRING-2018', '2019-01-11 06:12:13', '2019-01-11 06:12:13'),
(5, 'CSE-4041', 'SUMMER-2018', '2019-01-11 06:12:43', '2019-01-11 06:12:43');

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
(1, 'Final Year Project', 'SUMMER-2018', 'dddddddddddd', '09-01-2019', '11-01-2019', 'Third Year Project', 'SUMMER-2018', 'dddddddddd', '12-01-2019', '14-01-2019', '01-01-2019', '18-01-2019', 'Result', '19-01-2019', '2019-01-08 15:57:56', '2019-01-08 15:57:56');

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
(23, 1512020246, 'Sourav Roy', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(24, 1512020201, 'Debasish', 'SPRING-2018', NULL, NULL, NULL, NULL),
(25, 1512020202, 'Akash', 'FALL-2018', NULL, NULL, NULL, NULL),
(26, 1512020203, 'Proma', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(27, 1512020204, 'Sourav Roy', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(28, 1512020205, 'Debasish', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(29, 1512020206, 'Akash', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(30, 1512020210, 'Proma', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(31, 1512020211, 'Raju', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(32, 1512020212, 'Nikhil', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(33, 1512020213, 'Deba', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(34, 1512020214, 'Dulon', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(35, 1512020215, 'Sagar', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(36, 1512020216, 'Shuvo', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(37, 1512020217, 'Niaz', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(38, 1512020218, 'Riya', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(39, 1512020219, 'Rekha', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(40, 1512020220, 'Shanta', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(41, 1512020221, 'Maha', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(42, 1512020222, 'Maya', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(43, 1512020223, 'Azhar', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(44, 1512020224, 'XYZ', 'SUMMER-2018', NULL, NULL, NULL, NULL);

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
(1, 14000, 90901, 'sourav', '2019-01-08 16:01:37', '2019-01-08 16:01:37'),
(2, 14029, 90902, 'sourav', '2019-01-11 05:59:15', '2019-01-11 05:59:15'),
(6, 14030, 90901, 'sourav', '2019-01-11 06:09:16', '2019-01-11 06:09:16'),
(7, 14031, 90901, 'sourav', '2019-01-11 06:19:18', '2019-01-11 06:19:18'),
(8, 14032, 90901, 'sourav', '2019-01-11 06:19:18', '2019-01-11 06:19:18'),
(9, 14030, 90901, 'sourav', '2019-01-11 06:31:51', '2019-01-11 06:31:51'),
(10, 14031, 90901, 'sourav', '2019-01-11 06:31:51', '2019-01-11 06:31:51'),
(11, 14032, 90901, 'sourav', '2019-01-11 06:31:51', '2019-01-11 06:31:51'),
(12, 14030, 90901, 'sourav', '2019-01-11 06:35:01', '2019-01-11 06:35:01'),
(13, 14031, 90901, 'sourav', '2019-01-11 06:35:01', '2019-01-11 06:35:01'),
(14, 14032, 90901, 'sourav', '2019-01-11 06:35:01', '2019-01-11 06:35:01'),
(15, 14030, 90901, 'sourav', '2019-01-11 06:35:54', '2019-01-11 06:35:54'),
(16, 14031, 90901, 'sourav', '2019-01-11 06:35:54', '2019-01-11 06:35:54'),
(17, 14032, 90901, 'sourav', '2019-01-11 06:35:55', '2019-01-11 06:35:55'),
(18, 14030, 90901, 'sourav', '2019-01-11 06:40:05', '2019-01-11 06:40:05'),
(19, 14031, 90901, 'sourav', '2019-01-11 06:40:06', '2019-01-11 06:40:06'),
(20, 14032, 90901, 'sourav', '2019-01-11 06:40:06', '2019-01-11 06:40:06'),
(21, 14030, 90901, 'sourav', '2019-01-11 06:41:22', '2019-01-11 06:41:22'),
(22, 14031, 90901, 'sourav', '2019-01-11 06:41:22', '2019-01-11 06:41:22'),
(23, 14032, 90901, 'sourav', '2019-01-11 06:41:22', '2019-01-11 06:41:22');

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
(1, 90901, 'sourav', 1, 1, 1, 1, 1, 'sourav@gmail.com', 123456, '$2y$10$kZOL/EL4aavB8YznUW.A4uIqfbnRdKbV9STIGW4bYsw2KkeSzt822', 'iwN2jwnbj31JaXXrcl3Kdgm6XWWo68WjreanHhs6DPy6jEtieKGWtefawfsX', '2019-01-08 15:50:55', '2019-01-08 15:50:55'),
(2, 1512020201, 'Dulon', 0, 0, 1, 0, 0, 'd@gmail.com', 56541, '$2y$10$k26W9SWdUx48BSTQv4m/zu7rQ20pDbyyMsmEQXQ4ym.N8VrR8AWh.', 'iSflYHBiqhebIe0Wptx1bSpV9rJDKsGYZANI1BUF7aAY4JSguf6MNfE5QZmd', '2019-01-08 15:51:52', '2019-01-08 15:55:59'),
(3, 90903, 'proma', 1, 1, 0, 0, 1, 'p@gmail.com', 871286, '$2y$10$eILZMxyhi2dpxtlymjpt5uqB2NKL6v2NEdzUDT8CbRIIgMxqpFnLS', '4pk1Z3z1r1fAvqkLqhkN1lOf3vNfSX0Od8zGPkUnUlGbe292CFiTvksfyg0I', '2019-01-08 15:52:30', '2019-01-11 06:15:05'),
(4, 90902, 'Mou', 0, 1, 0, 0, 1, 'm@gmail.com', 6351417, '$2y$10$sBB9d1S5KHRKik5JU7J9aOrpQXv.ddDSlW4XHPv68.TdkJb490i.q', 'o4pCxtN2rWe7qO9YFHln4XMy9DbbMOPrreClNIqBS3BtIyviw8HySE8XAjUR', '2019-01-08 15:52:57', '2019-01-11 06:01:36'),
(5, 1512020204, 'raju', 1, 0, 1, 0, 0, 'r@gmail.com', 71618, '$2y$10$lnyMjMTqiAkoVmVAV.UbHu59RNIP7MCVFTaQ0QrL8pFYPKTwAAbWa', '8vknrmC2Wr6U8kRezZOfthGIECWePX7zbo4XRf33OqonexHMkK3QPEdN1cUj', '2019-01-08 15:53:27', '2019-01-11 06:17:31'),
(6, 1512020205, 'poly', 0, 1, 1, 0, 0, 'po@gmail.com', 817390, '$2y$10$tcU5Ql3wh2aWLMXH64/dJ.SLVJr.nFnUHE0xnfKpBzeg.FNGkoyH2', 'E4Vvj8VmZ3igDisN5faALTTP3wmfmbZhljkHWNKkeQVd8VemL0IpjY4cgXs5', '2019-01-08 15:54:12', '2019-01-11 06:13:01');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `marking_systems`
--
ALTER TABLE `marking_systems`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `project_lists`
--
ALTER TABLE `project_lists`
  MODIFY `project_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14034;

--
-- AUTO_INCREMENT for table `project__uploads`
--
ALTER TABLE `project__uploads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reg_infos`
--
ALTER TABLE `reg_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `schedulings`
--
ALTER TABLE `schedulings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_lists`
--
ALTER TABLE `student_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `supervisor_students`
--
ALTER TABLE `supervisor_students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
