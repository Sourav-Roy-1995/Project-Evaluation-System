-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2019 at 10:12 PM
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
(49, 14007, 1512020201, 5, 93, NULL, NULL),
(50, 14007, 1512020202, 5, 89, NULL, NULL),
(51, 14007, 1512020203, 5, 92, NULL, NULL),
(52, 14008, 1512020204, 4, 86, NULL, NULL),
(53, 14008, 1512020205, 4, 90, NULL, NULL),
(54, 14008, 1512020206, 4, 91, NULL, NULL),
(55, 14009, 1512020207, 3, 85, NULL, NULL),
(56, 14009, 1512020208, 3, 85, NULL, NULL),
(57, 14009, 1512020210, 3, 90, NULL, NULL),
(58, 14010, 1512020211, 4, 87, NULL, NULL),
(59, 14010, 1512020212, 4, 82, NULL, NULL),
(60, 14010, 1512020213, 4, 92, NULL, NULL),
(61, 14011, 1512020214, 2, 42, NULL, NULL),
(62, 14011, 1512020215, 2, 48, NULL, NULL),
(63, 14013, 1512020218, 3, 44, NULL, NULL),
(64, 14013, 1512020219, 3, 45, NULL, NULL),
(65, 14012, 1512020217, 2, 53, NULL, NULL),
(66, 14014, 1512020246, 6, 94, '2019-01-28 18:00:00', '2019-01-28 18:00:00');

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
(28, 14007, 5051, 'CSE-4041', 'SUMMER-2018', 1512020201, 30, 30, 40, 60, NULL, NULL),
(29, 14007, 5051, 'CSE-4041', 'SUMMER-2018', 1512020202, 30, 30, 40, 60, NULL, NULL),
(30, 14007, 5051, 'CSE-4041', 'SUMMER-2018', 1512020203, 30, 30, 40, 60, NULL, NULL),
(31, 14008, 5051, 'CSE-4041', 'SUMMER-2018', 1512020204, 22, 26, NULL, 48, NULL, NULL),
(32, 14008, 5051, 'CSE-4041', 'SUMMER-2018', 1512020205, 25, 26, NULL, 50, NULL, NULL),
(33, 14008, 5051, 'CSE-4041', 'SUMMER-2018', 1512020206, 22, 25, NULL, 47, NULL, NULL),
(34, 14009, 5051, 'CSE-4041', 'SUMMER-2018', 1512020207, 27, 24, NULL, 51, NULL, NULL),
(35, 14009, 5051, 'CSE-4041', 'SUMMER-2018', 1512020208, 29, 15, NULL, 44, NULL, NULL),
(36, 14009, 5051, 'CSE-4041', 'SUMMER-2018', 1512020210, 30, 30, NULL, 60, NULL, NULL),
(37, 14010, 5051, 'CSE-4041', 'SUMMER-2018', 1512020211, 22, 26, NULL, 48, NULL, NULL),
(38, 14010, 5051, 'CSE-4041', 'SUMMER-2018', 1512020212, 27, 12, NULL, 39, NULL, NULL),
(39, 14010, 5051, 'CSE-4041', 'SUMMER-2018', 1512020213, 30, 25, NULL, 55, NULL, NULL),
(40, 14011, 5051, 'CSE-4041', 'SUMMER-2018', 1512020214, 19, 21, NULL, 40, NULL, NULL),
(41, 14011, 5051, 'CSE-4041', 'SUMMER-2018', 1512020215, 22, 22, NULL, 44, NULL, NULL),
(42, 14013, 5051, 'CSE-4041', 'SUMMER-2018', 1512020218, 22, 22, NULL, 44, NULL, NULL),
(43, 14013, 5051, 'CSE-4041', 'SUMMER-2018', 1512020219, 17, 19, NULL, 36, NULL, NULL),
(44, 14012, 5051, 'CSE-4041', 'SUMMER-2018', 1512020217, 30, 23, NULL, 53, NULL, NULL),
(57, 14007, 5052, 'CSE-4041', 'SUMMER-2018', 1512020201, 30, 25, NULL, 55, NULL, NULL),
(58, 14007, 5052, 'CSE-4041', 'SUMMER-2018', 1512020202, 23, 25, NULL, 48, NULL, NULL),
(59, 14007, 5052, 'CSE-4041', 'SUMMER-2018', 1512020203, 23, 24, NULL, 47, NULL, NULL),
(60, 14008, 5052, 'CSE-4041', 'SUMMER-2018', 1512020204, 22, 25, NULL, 47, NULL, NULL),
(61, 14008, 5052, 'CSE-4041', 'SUMMER-2018', 1512020205, 30, 28, NULL, 58, NULL, NULL),
(62, 14008, 5052, 'CSE-4041', 'SUMMER-2018', 1512020206, 25, 26, NULL, 51, NULL, NULL),
(63, 14009, 5052, 'CSE-4041', 'SUMMER-2018', 1512020207, 22, 22, 38, 44, NULL, NULL),
(64, 14009, 5052, 'CSE-4041', 'SUMMER-2018', 1512020208, 26, 27, 38, 53, NULL, NULL),
(65, 14009, 5052, 'CSE-4041', 'SUMMER-2018', 1512020210, 25, 26, 38, 51, NULL, NULL),
(66, 14010, 5052, 'CSE-4041', 'SUMMER-2018', 1512020211, 22, 22, NULL, 44, NULL, NULL),
(67, 14010, 5052, 'CSE-4041', 'SUMMER-2018', 1512020212, 26, 28, NULL, 54, NULL, NULL),
(68, 14010, 5052, 'CSE-4041', 'SUMMER-2018', 1512020213, 25, 26, NULL, 51, NULL, NULL),
(69, 14011, 5052, 'CSE-4041', 'SUMMER-2018', 1512020214, 22, 22, NULL, 44, NULL, NULL),
(70, 14011, 5052, 'CSE-4041', 'SUMMER-2018', 1512020215, 22, 30, NULL, 52, NULL, NULL),
(71, 14007, 5053, 'CSE-4041', 'SUMMER-2018', 1512020201, 25, 24, NULL, 49, NULL, NULL),
(72, 14007, 5053, 'CSE-4041', 'SUMMER-2018', 1512020202, 24, 23, NULL, 47, NULL, NULL),
(73, 14007, 5053, 'CSE-4041', 'SUMMER-2018', 1512020203, 24, 30, NULL, 54, NULL, NULL),
(74, 14008, 5053, 'CSE-4041', 'SUMMER-2018', 1512020204, 22, 22, 38, 44, NULL, NULL),
(75, 14008, 5053, 'CSE-4041', 'SUMMER-2018', 1512020205, 23, 25, 38, 48, NULL, NULL),
(76, 14008, 5053, 'CSE-4041', 'SUMMER-2018', 1512020206, 22, 30, 40, 52, NULL, NULL),
(77, 14013, 5053, 'CSE-4041', 'SUMMER-2018', 1512020218, 22, 22, NULL, 44, NULL, NULL),
(78, 14013, 5053, 'CSE-4041', 'SUMMER-2018', 1512020219, 25, 29, NULL, 54, NULL, NULL),
(79, 14012, 5053, 'CSE-4041', 'SUMMER-2018', 1512020217, 22, 30, NULL, 52, NULL, NULL),
(80, 14007, 5054, 'CSE-4041', 'SUMMER-2018', 1512020201, 27, 25, NULL, 52, NULL, NULL),
(81, 14007, 5054, 'CSE-4041', 'SUMMER-2018', 1512020202, 23, 25, NULL, 48, NULL, NULL),
(82, 14007, 5054, 'CSE-4041', 'SUMMER-2018', 1512020203, 23, 27, NULL, 50, NULL, NULL),
(83, 14008, 5054, 'CSE-4041', 'SUMMER-2018', 1512020204, 26, 25, NULL, 51, NULL, NULL),
(84, 14008, 5054, 'CSE-4041', 'SUMMER-2018', 1512020205, 27, 25, NULL, 52, NULL, NULL),
(85, 14008, 5054, 'CSE-4041', 'SUMMER-2018', 1512020206, 30, 24, NULL, 54, NULL, NULL),
(86, 14009, 5054, 'CSE-4041', 'SUMMER-2018', 1512020207, 22, 22, NULL, 44, NULL, NULL),
(87, 14009, 5054, 'CSE-4041', 'SUMMER-2018', 1512020208, 22, 22, NULL, 44, NULL, NULL),
(88, 14009, 5054, 'CSE-4041', 'SUMMER-2018', 1512020210, 22, 22, NULL, 44, NULL, NULL),
(89, 14010, 5054, 'CSE-4041', 'SUMMER-2018', 1512020211, 30, 22, 40, 52, NULL, NULL),
(90, 14010, 5054, 'CSE-4041', 'SUMMER-2018', 1512020212, 30, 25, 33, 55, NULL, NULL),
(91, 14010, 5054, 'CSE-4041', 'SUMMER-2018', 1512020213, 30, 22, 38, 52, NULL, NULL),
(92, 14010, 5054, 'CSE-4041', 'SUMMER-2018', 1512020211, 22, 22, 38, 44, NULL, NULL),
(93, 14010, 5054, 'CSE-4041', 'SUMMER-2018', 1512020212, 22, 25, 40, 47, NULL, NULL),
(94, 14010, 5054, 'CSE-4041', 'SUMMER-2018', 1512020213, 30, 25, 38, 55, NULL, NULL),
(95, 14013, 5054, 'CSE-4041', 'SUMMER-2018', 1512020218, 22, 22, NULL, 44, NULL, NULL),
(96, 14013, 5054, 'CSE-4041', 'SUMMER-2018', 1512020219, 22, 22, NULL, 44, NULL, NULL),
(97, 14007, 5057, 'CSE-4041', 'SUMMER-2018', 1512020201, 23, 23, NULL, 45, NULL, NULL),
(98, 14007, 5057, 'CSE-4041', 'SUMMER-2018', 1512020202, 23, 19, NULL, 42, NULL, NULL),
(99, 14007, 5057, 'CSE-4041', 'SUMMER-2018', 1512020203, 21, 26, NULL, 46, NULL, NULL),
(100, 14014, 5057, 'CSE-4041', 'SUMMER-2018', 1512020246, 22, 28, NULL, 50, NULL, NULL),
(101, 14014, 5051, 'CSE-4041', 'SUMMER-2018', 1512020246, 30, 30, 40, 60, NULL, NULL),
(102, 14014, 5052, 'CSE-4041', 'SUMMER-2018', 1512020246, 28, 30, NULL, 58, NULL, NULL),
(103, 14014, 5053, 'CSE-4041', 'SUMMER-2018', 1512020246, 30, 26, NULL, 56, NULL, NULL),
(104, 14014, 5054, 'CSE-4041', 'SUMMER-2018', 1512020246, 22, 30, NULL, 52, NULL, NULL),
(105, 14014, 5055, 'CSE-4041', 'SUMMER-2018', 1512020246, 22, 25, NULL, 47, NULL, NULL);

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
(14007, 'Online Election System', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly.', 'CSE-4041', 5051, 'SUMMER-2018', 1512020201, 1512020202, 1512020203, '2019-01-28 11:55:06', '2019-01-28 11:55:06'),
(14008, 'The Mystic Manor', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly', 'CSE-4041', 5053, 'SUMMER-2018', 1512020204, 1512020205, 1512020206, '2019-01-28 11:57:41', '2019-01-28 11:57:41'),
(14009, 'Learning Aid', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly', 'CSE-4041', 5052, 'SUMMER-2018', 1512020207, 1512020208, 1512020210, '2019-01-28 11:59:54', '2019-01-28 11:59:54'),
(14010, 'Invoice Management System', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly', 'CSE-4041', 5054, 'SUMMER-2018', 1512020211, 1512020212, 1512020213, '2019-01-28 12:02:48', '2019-01-28 12:02:48'),
(14011, 'LU Castle', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly.', 'CSE-4041', 5054, 'SUMMER-2018', 1512020214, 1512020215, NULL, '2019-01-28 12:05:09', '2019-01-28 12:05:09'),
(14012, 'Magic-IT-Support', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly.', 'CSE-4041', 5055, 'SUMMER-2018', 1512020217, NULL, NULL, '2019-01-28 12:07:03', '2019-01-28 12:07:03'),
(14013, 'Cricket School', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly', 'CSE-4041', 5055, 'SUMMER-2018', 1512020218, 1512020219, NULL, '2019-01-28 12:09:10', '2019-01-28 12:09:10'),
(14014, 'Project Evalusation System', 'This application will provide us an easy way to manage our projects. It will establish a good collaboration between students and supervisor', 'CSE-4041', 5051, 'SUMMER-2018', 1512020246, NULL, NULL, '2019-01-28 13:57:47', '2019-01-28 13:57:47');

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
(3, 'Debasish', 1512020201, 'Cricket School', 'web', 'Laravel', 't is a long established fact that a reader will be distracted by the .', 0x313534383730343536332e6a7067, '2019-01-28 13:42:43', '2019-01-28 13:42:43'),
(4, 'Sourav', 1512020246, 'Project Evaluation System', 'web', 'Laravel', 'This application will provide us an easy way to manage our projects.', 0x313534383730353639372e4a5047, '2019-01-28 14:01:37', '2019-01-28 14:01:37'),
(5, 'Modhurima Choudhury', 1512020216, 'College Social Networking', 'web', 'Laravel', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout', 0x313534383730353934302e6a7067, '2019-01-28 14:05:40', '2019-01-28 14:05:40'),
(6, 'Akash', 1512020202, 'Weather Forecast', 'web', 'Node Js', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout', 0x313534383730373135382e6a706567, '2019-01-28 14:25:58', '2019-01-28 14:25:58'),
(7, 'Abdul mumin', 1512020215, 'LU Messenger', 'web', 'Django', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout', 0x313534383730373830322e6a7067, '2019-01-28 14:36:42', '2019-01-28 14:36:42'),
(8, 'Md.Mamun Miah', 1512020214, '3D Shooting Game', 'android', 'Flask', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout', 0x313534383730383439312e6a7067, '2019-01-28 14:48:11', '2019-01-28 14:48:11'),
(9, 'Moha Rafiqul Islam', 1512020212, 'Bikers Dream Zone', 'web', 'Django', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout', 0x313534383730383735362e6a7067, '2019-01-28 14:52:36', '2019-01-28 14:52:36'),
(10, 'Shah Newaz Shawn', 1512020213, 'Road Axis', 'web', 'Laravel', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout', 0x313534383730393137392e6a7067, '2019-01-28 14:59:39', '2019-01-28 14:59:39');

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
(5, 'CSE-4041', 'SUMMER-2018', '2019-01-28 11:28:03', '2019-01-28 11:28:03');

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
(5, 'Final Year Project', 'SUMMER-2018', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,', '01-02-2019', '04-02-2019', 'Third Year Project', 'SUMMER-2018', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,', '05-02-2019', '09-02-2019', '27-01-2019', '31-01-2019', 'Result', '14-02-2019', '2019-01-28 11:23:57', '2019-01-28 11:48:40');

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
(47, 1512020246, 'Sourav Roy', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(48, 1512020201, 'Debasish', 'SPRING-2018', NULL, NULL, NULL, NULL),
(49, 1512020202, 'Akash', 'FALL-2018', NULL, NULL, NULL, NULL),
(50, 1512020203, 'Proma', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(51, 1512020204, ' Nayan Das', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(52, 1512020205, ' Md. Abrar Foysal Ovi ', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(53, 1512020206, 'Aniqa Maimuna ', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(54, 1512020210, 'Md Mahmudul Hasan ', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(55, 1512020211, ' Md Ikbal Husen Chowdhury ', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(56, 1512020212, 'Moha Rafiqul Islam ', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(57, 1512020213, ' Shah Newaz Shawn ', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(58, 1512020214, 'Md.Mamun Miah ', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(59, 1512020215, 'Abdul mumin ', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(60, 1512020216, ' Modhurima Choudhury ', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(61, 1512020217, ' Kamanashish Datta ', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(62, 1512020218, 'Md. Samsul Alam ', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(63, 1512020219, ' Rakhi Mazumder ', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(64, 1512020220, 'MD Imran Hossain', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(65, 1512020221, 'Hasan Ahmed ', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(66, 1512020222, ' Md. Abdur Rahman Masud ', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(67, 1512020223, ' Md. Tahtihal Anhar ', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(68, 1512020224, 'Fahadul Haque Zami ', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(69, 1512020207, ' Adnan Ahmed ', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(70, 1512020208, 'Sagar', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(71, 1512020225, 'Humayun Rahi', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(72, 1512020226, ' Akash Roy Dip ', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(73, 1512020227, ' Shakwat Hussain Murad ', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(74, 1512020228, ' Mizanur Rahman Khan ', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(75, 1512020229, ' Foysol Ahmed ', 'SUMMER-2018', NULL, NULL, NULL, NULL),
(76, 1512020230, ' Azharul Islam ', 'SUMMER-2018', NULL, NULL, NULL, NULL);

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

--
-- Dumping data for table `student__comments`
--

INSERT INTO `student__comments` (`id`, `name`, `stdnt_id`, `status`, `comment`, `personal_img`, `created_at`, `updated_at`) VALUES
(3, 'Debasish', 1512020201, 'Current Student', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 0x313534383730343435312e6a7067, '2019-01-28 13:40:51', '2019-01-28 13:40:51'),
(4, 'Sourav', 1512020246, 'Current Student', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 0x313534383730353537342e6a7067, '2019-01-28 13:59:34', '2019-01-28 13:59:34'),
(6, 'Modhurima Choudhury', 1512020216, 'Current Student', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout', 0x313534383730363130392e6a7067, '2019-01-28 14:08:29', '2019-01-28 14:08:29'),
(7, 'Akash', 1512020202, 'Current Student', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout', 0x313534383730373139322e6a7067, '2019-01-28 14:26:32', '2019-01-28 14:26:32'),
(8, 'Abdul mumin', 1512020215, 'Current Student', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout', 0x313534383730373638312e6a7067, '2019-01-28 14:34:41', '2019-01-28 14:34:41'),
(9, 'Md.Mamun Miah', 1512020214, 'Current Student', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout', 0x313534383730383533392e6a7067, '2019-01-28 14:48:59', '2019-01-28 14:48:59'),
(10, 'Shah Newaz Shawn', 1512020213, 'Final Year Student', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout', 0x313534383730393130372e6a7067, '2019-01-28 14:58:27', '2019-01-28 14:58:27');

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
(9, 14007, 5051, 'Rumel M.S. Rahman Pir', '2019-01-28 12:12:42', '2019-01-28 12:12:42'),
(10, 14008, 5053, 'Iffat Jahan Choudhury', '2019-01-28 12:12:56', '2019-01-28 12:12:56'),
(11, 14009, 5052, 'Md Saiful Ambia Chowdhury', '2019-01-28 12:13:09', '2019-01-28 12:13:09'),
(12, 14010, 5054, 'Md Saiful Ambia Chowdhury', '2019-01-28 12:13:24', '2019-01-28 12:13:24'),
(13, 14011, 5054, 'Selina Sharmin Mone', '2019-01-28 12:14:50', '2019-01-28 12:14:50'),
(14, 14012, 5055, 'Md. Asaduzzaman Khan', '2019-01-28 12:15:09', '2019-01-28 12:15:09'),
(15, 14013, 5055, 'Minhazul Haque Riad', '2019-01-28 12:15:22', '2019-01-28 12:15:22'),
(16, 14014, 5051, 'Rumel M.S. Rahman Pir', '2019-01-28 14:13:41', '2019-01-28 14:13:41');

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
(1, 5051, 'Rumel M.S. Rahman Pir ', 0, 1, 0, 0, 1, 'rumelpir@gmail.com', 1758228736, '$2y$10$mSPxJXXSlbLaVXH1uwnT4OqwxL0UGfczjLEyPuprwaWIt89tvrLe.', '5k2AmJwVOK3o8EECQw8weos0lM5zfFTuatG7Zg6cqmxs85eaLdLVvihmJhWd', '2019-01-20 15:50:24', '2019-01-20 15:50:24'),
(7, 1512020201, 'Debasish', 0, 0, 1, 0, 0, 'deba@gmail.com', 1982619, '$2y$10$utes7sZ9e1AKlqL0geaHlu0DmOloVRpI9i6KyB57HVFoELDx1C5xa', '6Ysd7kvYgAZ7qWngEAuM8bRL5ZrTafBfvF6L6ixbLHkHuCtm1quED2T7leCO', '2019-01-28 10:07:27', '2019-01-28 11:24:14'),
(8, 1512020202, 'Akash', 0, 0, 1, 0, 0, 'akash@mail.com', 1938191, '$2y$10$NdloG7OmB0/5at5le44cvu6sFPJFjgfmEa34KKH6g12pcEtylzSgi', 'bZ73Ri9zDXkb0z7fpsGxz1DajFU15UWHAG5NkxksEDzakkN8GAI5gzVOZI7x', '2019-01-28 10:08:12', '2019-01-28 10:08:12'),
(9, 1512020203, 'Proma', 0, 0, 1, 0, 0, 'proma@gmail.com', 192181738, '$2y$10$qFqrBSwtJo71JJLf5VwlY.Q5rd.5y7SFrnOZQt/.3aIOiExKje8zW', 'CBD7ba1CPLG3sCqBxbO96up3saM0NZUqJSOyFja2YtXT6vb0a9bUfw9lM7Nh', '2019-01-28 10:08:53', '2019-01-28 10:08:53'),
(10, 1512020204, 'Nayan Das', 0, 0, 1, 0, 0, 'nayan@gmail.com', 137191931, '$2y$10$AjXsdsFq69OQ7EzNfQFfCeVBUNoifbawslXir3RjKxMm15GpV6.2W', 'jIQaRzhUSTSVr9tWRgNSLzkqiH9V2nj3JMre9GulDMpfAhKbgABOvdgr76Qv', '2019-01-28 10:09:29', '2019-01-28 10:09:29'),
(11, 1512020205, 'Md. Abrar Foysal Ovi', 0, 0, 1, 0, 0, 'avi@gmail.com', 182719192, '$2y$10$AlqAM1cQ87DnpSn8VhkNSeve5EZlgtB613CFiqwqCLzOgsJ2zEweG', 'JgNLnNIPltRA7W1PiTQeamFHg2D7KUaLtuGUqOSqCvJ1Vl3WJY4EHkQ6PMqB', '2019-01-28 10:10:05', '2019-01-28 10:10:05'),
(12, 1512020206, 'Aniqa Maimuna', 0, 0, 1, 0, 0, 'aniqa@mail.com', 18271718, '$2y$10$y8Zw74OT4OIhTf4N6WbXCejDbqey2r/aCkZQD6vshtmj5I77U6Y7a', 'd2fp0aAG6efZvT6WrS1JkGijpOiaCi1MJgeKvAPCqJnHI6kzw0TcxDWFUyND', '2019-01-28 10:10:38', '2019-01-28 10:10:38'),
(13, 1512020210, 'Md Mahmudul Hasan', 0, 0, 1, 0, 0, 'Mahmudul@mail.com', 172618189, '$2y$10$JUFTpPE37oJ9YxjAU4qJZeK0H2v1cooxOdFPiOcqhzIqUfFbFs/Yy', 'WK7ntqfoH3nS0ZN6FtmwTCfg9YCN73EZfKX6vfxA4sCw7TmFPYZXxJqkuSom', '2019-01-28 10:11:13', '2019-01-28 10:11:13'),
(14, 1512020211, 'Md Ikbal Husen Chowdhury', 0, 0, 1, 0, 0, 'Ikbal@mail.com', 16736181, '$2y$10$VuZwMjao34LVG.QL87vXQ.g13jCaVXJ.qFexcT9LxBUHmPYvTEYS.', 'XgQwW4cNQxJhmz3FW6asMSWnVJQgyP3OEPFN5pp9dVUV5H32IwQIdUq5elPh', '2019-01-28 10:11:50', '2019-01-28 10:11:50'),
(15, 1512020212, 'Moha Rafiqul Islam', 0, 0, 1, 0, 0, 'Moha@gmail.com', 19281918, '$2y$10$ZLJcVopTR1GxT4hIKESxf.ixRzNh2snItk41sZcvsr3qatWq1KUj6', 'LDww9syZAuJCCTEjp5SI6ImT7mwOxIsytzMctRg6S3ABp98ZFNhyX4sH1MG4', '2019-01-28 10:12:33', '2019-01-28 10:12:33'),
(16, 1512020213, 'Shah Newaz Shawn', 0, 0, 1, 0, 0, 'Shah@mail.com', 19218271, '$2y$10$LQ.0Kd0XTaBu8pfRCpdC6u.m.4oc/X9ctVQ2H5XU9JnGU.BPI..8i', 'N8BZ9QilnS2Mhu7hModLnvx31dvAzbetE8HC3xlsDzhNAAJN2iXiymAc5itO', '2019-01-28 10:13:17', '2019-01-28 10:13:17'),
(17, 1512020214, 'Md.Mamun Miah', 0, 0, 1, 0, 0, 'Mamun@mail.com', 19319139, '$2y$10$giZye5bYnqHSg8e9xLFR0eAr9IxG58YsmPQSL2yvqJkT7emoqlnKm', 'RcSHqLIWGMXfR45aQYbC66cON7qFnF1h5PkBVL1TeQv6tax3w6ac6mERLmyC', '2019-01-28 10:14:24', '2019-01-28 10:14:24'),
(18, 1512020215, 'Abdul mumin', 0, 0, 1, 0, 0, 'mumin@mail.com', 19281919, '$2y$10$fX75UUCqvocigzBaCDUk6eg0B/vR.qhCTJCp7.wYgF8sHGway30dC', 'w3aOWC5GpWSxaijCywBoiTr3qwE3Ic1nd8yUlXQct1PLq1DfYA8uNyFrUVK2', '2019-01-28 10:17:36', '2019-01-28 10:17:36'),
(19, 1512020216, 'Modhurima Choudhury', 0, 0, 1, 0, 0, 'Modhurima@mail.com', 1765432, '$2y$10$ilHR/iJdsV1WPRJe6n5cDOwl8otWJeimb6r7rPsMxqkfofQ2Dx9qe', 'VO3UR30KFag7LTR8lFSHR6Ho4YE9OxxeuaXmWvy9T5cgmap2Ec88mzqr5mbS', '2019-01-28 10:18:18', '2019-01-28 10:18:18'),
(20, 1512020217, 'Kamanashish Datta', 0, 0, 1, 0, 0, 'Kamanashish@mail.com', 19272616, '$2y$10$Dgk96wpdk5rlTIQXG42OTOxrnk1frjup7UPxD1Rsv5dUKTBGZLYu2', '0eAhNAPVXSncvQBL78x1ZRli7ovfDIBWsYgh99kDgduyn6HWA8yowGHdnLmM', '2019-01-28 10:19:04', '2019-01-28 10:19:04'),
(21, 1512020218, 'Md. Samsul Alam', 0, 0, 1, 0, 0, 'Samsul@mail.com', 1829171, '$2y$10$DBtknIo68Vu.53DtR45QYO5W6ZNSzF3lN871KevjWRdRIEOkCffze', 'Qw9JeJQMOBKtXXPieXOo9bumsDaGFDjQGYxBPlurAQiNAyahWZgMsUPd8dPl', '2019-01-28 10:19:37', '2019-01-28 10:19:37'),
(22, 1512020219, 'Rakhi Mazumder', 0, 0, 1, 0, 0, 'Rakhi@mail.com', 172617189, '$2y$10$S3j3VuNlKWYCGokaYNavPODE92yza2AhNJqnBIJrrt3hPV.sy6ELi', 'E7eoR8Z43c6cDy4b04nNG55K5iH6XlPPCrkkJ1LKB7UpAmVbuElFpgqANMbq', '2019-01-28 10:21:09', '2019-01-28 10:21:09'),
(23, 1512020220, 'MD Imran Hossain', 0, 0, 0, 0, 0, 'Imran@mail.com', 1927178189, '$2y$10$OPjDul1AnltNXkTEIL11xOLphInlSSn1p1ZWSks6cullvBZMumSTW', 'P831VY96E2X1dDrXDStU3iIQ2ucHD3JB53cXRHYkIqkKopiPMpYS2bE4ZZmT', '2019-01-28 10:21:38', '2019-01-28 10:21:38'),
(24, 1512020221, 'Hasan Ahmed', 0, 0, 0, 0, 0, 'Hasan@mail.com', 19281718, '$2y$10$nDvhgxRnpZIsJu3uiH4jjeeRBYuDCn2NhZ5mlcSlyKyI3lirCPx9.', 'GS0bw6HsX06BfwhfFwUnRhMfHcVAsEnG5l4uOb4MLMA1JgBcH4SCLXRjFJMe', '2019-01-28 10:22:31', '2019-01-28 10:22:31'),
(25, 1512020222, 'Md. Abdur Rahman Masud', 0, 0, 0, 0, 0, 'Abdur@mail.com', 19281819, '$2y$10$u8n2od0Sr2Ih3PgfbYIXSell0ZzGw8O.JLXpsPvDb8S/6GogDnIrS', 'vXIuO9eK7b8qV5LLHkadHs9FKaFAVqLvbvZ8jFkpcuAkMKgvMn8ALTB45SUL', '2019-01-28 10:23:15', '2019-01-28 10:23:15'),
(26, 1512020223, 'Md. Tahtihal Anhar', 0, 0, 0, 0, 0, 'Anhar@mail.com', 192191928, '$2y$10$p2PimIvadcCUC789byQ4herGumT.PPDDY8tRu2bhDXTVvFose8D6C', 'sVUwRo5X5Ld8JObyup3vQ6xgRVTpNfSBaWVqSy50aDV1wy1R9jfslUggQIvh', '2019-01-28 10:23:48', '2019-01-28 10:23:48'),
(27, 1512020224, 'Fahadul Haque Zami', 0, 0, 0, 0, 0, 'Zami@mail.com', 1987421987, '$2y$10$GlzEDfKk0fDtG/s9lioxAuZWv7JmTTwXX5ol0HqdsyRp1AgROSihi', '0z0QEMAFbmh6D2qwuwp9ODkTVOThsxXXIlBGRsXJg5K9HuUUYd5OPrQXBoMr', '2019-01-28 10:32:44', '2019-01-28 10:32:44'),
(28, 1512020207, 'Adnan Ahmed', 0, 0, 1, 0, 0, 'Adnan@mail.com', 1432678, '$2y$10$Z2yMpGPu3S1nNIe3hzoU.u1UEIcx69xUrbRlozdIf7V1wrcIMhDya', 'LuF3r30nO8COXmFypcuxKWvpedhaLR51H7PkX83cMdP6AjGVFIJAKWFVtbji', '2019-01-28 10:33:44', '2019-01-28 10:33:44'),
(29, 1512020208, 'Sagar', 0, 0, 1, 0, 0, 'Sagar@mail.com', 98124678, '$2y$10$D00JUAIsFmfkfcXIceOIVuABfys1L90M7cxvZO7jL94U2G0xNaCz.', 'eFzV8ftjNtmNSsqnpfV8F2MGdhgbWGY5YIJW3Drkm7baCllyHo64aHS8j3rV', '2019-01-28 10:36:01', '2019-01-28 10:36:01'),
(30, 1512020225, 'Humayun Rahi', 0, 0, 0, 0, 0, 'Rahi@mail.com', 198754156, '$2y$10$n5fJEKXrdcK/9wjeb/8CGuisLAqgKFs8laqvHWYaQ3Zm8IwTiM3tq', 'jya1ISE2gPiZLD9iFnfOYk1vKpMTlr643Gwwcd7K5zPXkxSBcN5D7lGDdEYn', '2019-01-28 10:36:47', '2019-01-28 10:36:47'),
(31, 1512020226, 'Akash Roy Dip', 0, 0, 0, 0, 0, 'AkashRoy@mail.com', 154327, '$2y$10$dfYAobE2XpMGcEiEn7j6XOHlcpdzARXwJAsdUrYo2Dim3ZmQCCuC.', 'EbJ4kMeQtO7cR0gwT5FVEKclxXG8bq8EzcDGMMVSFQIEIs1j1SlRxG2Lbi8f', '2019-01-28 10:38:00', '2019-01-28 10:38:00'),
(32, 1512020227, 'Shakwat Hussain Murad', 0, 0, 0, 0, 0, 'Shakwat@mail.com', 43213679, '$2y$10$n6AfzBWn0WUWa84KdjHKg.c6XHGVVCdzRSDHPbv7QG1ee.2RY3hgi', 'FtXPXho7kifzhrFvZOimCMmpnuDQ8l8sVPyzDyykFkG57AcHDfC9H4ctmb0X', '2019-01-28 10:38:48', '2019-01-28 10:38:48'),
(33, 1512020228, 'Mizanur Rahman Khan', 0, 0, 0, 0, 0, 'Mizanur@mail.com', 198654324, '$2y$10$5Ff7aTTiB0AQGjzMR8GzZeZ8vQ4bxDYPSXzgjohlxytfKEigWLDlO', 'u4yiUaPKLIgbc51yEXNG18KYMsn0W5c8yZSh2JhqpTtlPBxa7WJerICHGYKw', '2019-01-28 10:39:34', '2019-01-28 10:39:34'),
(34, 1512020229, 'Foysol Ahmed', 0, 0, 0, 0, 0, 'Foysol@mail.com', 16543221, '$2y$10$iWMGR7YOFjLTWVFuic/jqO7l9GeOaDYSnJfcFlaNzkP7sxOByDyMO', 'gbenUiQB8h7iC1Q3TCLhCDMEOH7MLXAFvliClGyaMoy1Aw10d8w778JKHKO4', '2019-01-28 10:40:29', '2019-01-28 10:40:29'),
(35, 1512020230, 'Azharul Islam', 0, 0, 0, 0, 0, 'Azharul@mail.com', 18654324, '$2y$10$KCqBbZ/F8mkNb2x0B62QtuXYXf8evcXFr0QOmYjm6bcAhW5.nX7cu', 'Tx26sL6fTaDmT12tKvALGQIIHHIdd83meYToMeP01XND2ODRCbZqiyDtptdE', '2019-01-28 10:41:22', '2019-01-28 10:41:22'),
(36, 5053, 'Iffat Jahan Choudhury', 0, 0, 0, 0, 1, 'iffat.lu@gmail.com', 1723344455, '$2y$10$M.4l01gV/KMzFOvJ0sqC0.VdI/He7IOf69Mu4RjyWD.a/TMzNwHD.', '1UHd52ApQorh18TWWxlWlPFzFvXSooiUDDXXbYPrvK1MOQO4lK55SZqmmYBl', '2019-01-28 10:43:26', '2019-01-28 10:43:26'),
(37, 5052, 'Md Saiful Ambia Chowdhury', 0, 0, 0, 0, 1, 'sas2505@lus.ac.bd', 1718377269, '$2y$10$b58iitdR0t/Y4noW5effJOloQegMndaWw8SOuhkSMMdesfGz9Hhu2', 'UQ2Jm4GZwYRLnx5lHme30EeTlfIN2p7XXGntmBXMZCGeJvJZJtnmKP4rCkuE', '2019-01-28 10:53:48', '2019-01-28 10:53:48'),
(38, 5054, 'Selina Sharmin Mone', 0, 0, 0, 0, 1, 'selinasharmin_bd@yahoo.com', 1719191660, '$2y$10$LPWJe2jsSplTPzlcg5Q44.DW417wC2CgA2dbPovk8P8dQxrDBLd9i', 'h3AHi3JjjbsQESBATB8AoODX3HHrbObLUFhqNvn3Q3MxkpXU3COvwMXGBsps', '2019-01-28 10:55:19', '2019-01-28 10:55:19'),
(39, 5055, 'Minhazul Haque Riad', 0, 0, 0, 0, 1, 'minhazulriad@yahoo.com', 1678174660, '$2y$10$RVshwcI9n.Qb/c97Qk2Ne..0nd41iD4lr36OCdhYqjsea6CorVqmK', 'yhaV7zpmzQxQ0kH4I6YM9KEyYiUqinh87TvTKKNtZIAmMgLiPW4fiShgaDps', '2019-01-28 11:04:55', '2019-01-28 11:04:55'),
(40, 5057, 'Md. Asaduzzaman Khan', 1, 1, 1, 0, 1, 'head_cse@lus.ac.bd', 1711003233, '$2y$10$rKBUTovpPObP1RG3ZfDL0OFMiAA64tNU5YXO3ONHT0AsZvp5wRC3.', 'NuGq4PYqullKhbG9F8jQEyd1c2HowLGbANtZRUPvVwTSwesDJLxipG6pDuYT', '2019-01-28 11:10:51', '2019-01-28 11:10:51'),
(41, 5058, 'Alak Kanti Sarma', 0, 0, 0, 0, 0, 'sarma.cse47@lus.ac.bd', 1713806862, '$2y$10$LgiAP5ihVq8oWBST4klnSu.Xf5HyJSh35Gt92Ssp59xo3RtDGWYTa', 'v6QjkFEd011bdvJbQXAQBMujzVX6YIKel6sUdVCMnaA906938apjZyiqmIXH', '2019-01-28 11:12:19', '2019-01-28 11:12:19'),
(42, 1512020246, 'Sourav', 0, 0, 1, 0, 0, 'sourav@gmail.com', 19282517, '$2y$10$epHun2J40oXq.mYQIdE/8u6WmsRCiedSCXNtyjasC.F21Q2FVqv4y', 'vbdlTwG8sOw4xR63ofkH9JPNVe2kdVNC89ajjAxUvAM4Ku2QBJVlpPPujFaj', '2019-01-28 13:54:08', '2019-01-28 13:55:59');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `marking_systems`
--
ALTER TABLE `marking_systems`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `project_lists`
--
ALTER TABLE `project_lists`
  MODIFY `project_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14015;

--
-- AUTO_INCREMENT for table `project__uploads`
--
ALTER TABLE `project__uploads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reg_infos`
--
ALTER TABLE `reg_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `schedulings`
--
ALTER TABLE `schedulings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_lists`
--
ALTER TABLE `student_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `student__comments`
--
ALTER TABLE `student__comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `supervisor_students`
--
ALTER TABLE `supervisor_students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
