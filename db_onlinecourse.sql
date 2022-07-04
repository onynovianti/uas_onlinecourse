-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2022 at 07:28 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_onlinecourse`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_top` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `is_top`, `created_at`, `updated_at`) VALUES
(1, 'Programming', 'Master your language with lessons, quizzes, and projects designed for real-life scenarios', 1, '2022-06-19 17:34:21', NULL),
(2, 'Networking', 'Learn the fundamentals of setting up an IT network from top-rated IT instructors', 1, '2022-06-19 17:34:21', NULL),
(3, 'Design', 'Learn design skills and concepts to advance your education and career', 1, '2022-06-19 17:34:21', NULL),
(4, 'Language', 'Learn a language as its used now. Immerse yourself in lessons that feature videos of native speakers, so you start speaking real life language, fast', 0, '2022-06-19 17:34:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` int(11) NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_topcourse` int(11) NOT NULL,
  `allow_enroll` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `instructor` int(11) NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `short_description`, `description`, `category`, `level`, `is_topcourse`, `allow_enroll`, `price`, `instructor`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Pemrograman Berorientasi Objek', 'Memahami Konsep OOP Class dan Objek enkapsulasi inheritance', 'Setelah mempelajari kursus ini siswa diharapkan mampu menerapkan npemikiran logis kritis inovatif bermutu dan terukur dalam melakukan pekerjaan yang spesidik di bidang keahliannya serta sesuai dengan standar kompetensi kerja bidang yang bersangkutan', 1, 'Intermediate', 1, 1, 130000, 53, '1234567890.webp', '2022-06-19 17:34:21', NULL),
(2, 'Pemrograman Web Lanjut', 'Memahami konsep Web Front End-Back End JQuery Bootstrap Angular REST CRUD', 'Setelah mempelajari kursus ini siswa diharapkan mampu menerapkan npemikiran logis kritis inovatif bermutu dan terukur dalam melakukan pekerjaan yang spesidik di bidang keahliannya serta sesuai dengan standar kompetensi kerja bidang yang bersangkutan', 1, 'Intermediate', 0, 0, 100000, 52, '1231234190.webp', '2022-06-19 17:34:21', NULL),
(3, 'Pemrograman Dasar', 'Memahami konsep Object Oriented Programming', 'Setelah mempelajari kursus ini siswa diharapkan mampu menerapkan pemikiran logis kritis inovatif bermutu dan terukur dalam melakukan pekerjaan yang spesidik di bidang keahliannya serta sesuai dengan standar kompetensi kerja bidang yang bersangkutan', 1, 'Beginner', 0, 1, 100000, 52, '1231234180.webp', '2022-06-19 17:34:21', NULL),
(4, 'Bahasa Perancis', 'Explore French through captivating topics and structured narrations', 'Learn the language and culture of France through online French classes', 4, 'Intermediate', 0, 1, 0, 56, 'gdsak12637.webp', '2022-06-19 17:34:21', NULL),
(5, 'Jaringan Komputer Dasar', 'Belajar Jaringan dasar', '<p>Pada pembelajaran kali ini akan dibahas mengenai topologi jaringan, LAN, MAN, WAN, cisco dan lain-lain</p>', 2, 'Beginner', 0, 0, 0, 65, 'iKKMdSfSgcdjV5t.webp', '2022-06-27 21:01:28', '2022-06-27 21:02:46');

-- --------------------------------------------------------

--
-- Table structure for table `course_user`
--

CREATE TABLE `course_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_user`
--

INSERT INTO `course_user` (`id`, `course_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 5, NULL, NULL),
(2, 2, 6, NULL, NULL),
(3, 1, 7, NULL, NULL),
(4, 3, 4, NULL, NULL),
(5, 1, 4, NULL, NULL),
(6, 2, 5, NULL, NULL),
(7, 4, 7, NULL, NULL),
(8, 4, 68, NULL, NULL),
(10, 1, 68, '2022-06-19 18:36:28', NULL),
(11, 1, 68, '2022-06-19 18:37:01', NULL),
(12, 3, 68, '2022-06-27 20:54:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `curricula`
--

CREATE TABLE `curricula` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pertemuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `curricula`
--

INSERT INTO `curricula` (`id`, `pertemuan`, `materi`, `jenis`, `course`, `created_at`, `updated_at`) VALUES
(1, 'Pertemuan 1', 'https://www.youtube.com/watch?v=hHizg9y2_vQ', 'Youtube Video', 1, NULL, NULL),
(2, 'Pertemuan 1', 'abcd1224.pdf', 'Document File', 1, NULL, NULL),
(3, 'Pertemuan 2', 'agsf1253.webp', 'Image', 1, NULL, NULL),
(4, 'Pertemuan 1', 'https://www.youtube.com/watch?v=668nUCeBHyY', 'Youtube Video', 2, NULL, NULL),
(5, 'Pertemuan 2', 'hsgd1627.mp4', 'Video File', 2, NULL, NULL),
(6, 'Pertemuan 1', 'ahdk8293.docx', 'Document File', 3, NULL, NULL),
(7, 'Meeting 1', 'https://www.youtube.com/watch?v=0iYsBnj2BUk', 'Youtube Video', 4, NULL, NULL),
(8, 'Meeting 2', 'dgskl172.webp', 'Image', 4, NULL, NULL),
(9, 'Pertemuan 1', 'kYqljYaeXx56LIc.docx', 'Document File', 5, '2022-06-27 21:02:14', '2022-06-27 21:02:14');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_05_042015_create_courses_table', 1),
(6, '2022_06_05_042910_create_curricula_table', 1),
(7, '2022_06_05_043133_create_categories_table', 1),
(8, '2022_06_05_043341_create_requirements_table', 1),
(9, '2022_06_05_043535_create_payments_table', 1),
(10, '2022_06_11_130355_create_outcomes_table', 1),
(11, '2022_06_16_092604_create_course_user_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `outcomes`
--

CREATE TABLE `outcomes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `outcomes`
--

INSERT INTO `outcomes` (`id`, `name`, `course`, `created_at`, `updated_at`) VALUES
(1, 'Memahami Konsep OOP', 1, NULL, NULL),
(2, 'Memahami Inheritance, Enkapsulasi, dan Polimorfisme', 1, NULL, NULL),
(3, 'Memahami GUI', 1, NULL, NULL),
(4, 'Memahami Konsep Web Front-Back End', 2, NULL, NULL),
(5, 'Memahami Penggunaan Laravel', 2, NULL, NULL),
(6, 'Memahami Tipe Data dan Variabel', 3, NULL, NULL),
(7, 'Mengenal Perulangan', 3, NULL, NULL),
(8, 'Learn french with sentences', 4, NULL, NULL),
(9, 'French Cognates', 4, NULL, NULL),
(12, 'Mengerti pembuatan topologi', 5, '2022-06-27 21:02:47', '2022-06-27 21:02:47'),
(13, 'Mengetahui software yang digunakan untuk melakukan percobaan mengenai jaringan komputer', 5, '2022-06-27 21:02:47', '2022-06-27 21:02:47');

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` int(11) NOT NULL,
  `course` int(11) NOT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user`, `course`, `document`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 1, '1234567890.jpg', 1, NULL, NULL),
(2, 6, 2, '2234567890.jpg', 1, NULL, NULL),
(3, 7, 1, '3234567890.jpg', 0, NULL, NULL),
(4, 4, 3, '4234567890.jpg', 0, NULL, NULL),
(5, 4, 1, '4234567890.jpg', 0, NULL, NULL),
(6, 5, 2, '5234567890.jpg', 0, NULL, NULL),
(7, 7, 4, '7234567890.jpg', 0, NULL, NULL),
(8, 68, 4, 'Free Course', 1, '2022-06-19 18:01:54', '2022-06-19 18:01:54'),
(9, 68, 1, 'E109xST0id1ijTx.png', 1, '2022-06-19 18:37:03', '2022-06-27 21:03:42'),
(10, 68, 3, 'Free Course', 1, '2022-06-27 20:54:34', '2022-06-27 20:54:34');

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
-- Table structure for table `requirements`
--

CREATE TABLE `requirements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requirements`
--

INSERT INTO `requirements` (`id`, `name`, `course`, `created_at`, `updated_at`) VALUES
(1, 'Pemrograman Dasar', 1, NULL, NULL),
(2, 'Algoritma dan Struktur Data', 1, NULL, NULL),
(3, 'Basis Data', 1, NULL, NULL),
(4, 'Pemrograman Dasar', 2, NULL, NULL),
(5, 'Desain dan Pemrograman Web', 2, NULL, NULL),
(6, 'Matematika Dasar', 3, NULL, NULL),
(7, 'English', 4, NULL, NULL),
(10, 'Ilmu Komputer', 5, '2022-06-27 21:02:46', '2022-06-27 21:02:46'),
(11, 'Pengkabelan UTP', 5, '2022-06-27 21:02:47', '2022-06-27 21:02:47');

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
  `is_admin` int(11) DEFAULT NULL,
  `is_active` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `is_active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Cakrabirawa Malik Ardianto M.Kom.', 'gunarto.raden@example.org', '2022-06-19 17:34:20', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 1, 1, 'QFdTBwsnav', NULL, NULL),
(2, 'Salsabila Puspasari', 'qastuti@example.net', '2022-06-19 17:34:21', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 1, 1, 'e7MUqRcRAP', NULL, NULL),
(3, 'Ghaliyati Azalea Widiastuti S.Sos', 'lamar.hasanah@example.com', '2022-06-19 17:34:21', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 1, 1, 'YUCAUyENXH', NULL, NULL),
(4, 'Caraka Wardaya Prasetya', 'lnuraini@example.net', '2022-06-19 17:34:22', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'fLcG5xLAK0', NULL, NULL),
(5, 'Lili Utami S.E.', 'wwinarno@example.com', '2022-06-19 17:34:22', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, '3wW4Vfo1tW', NULL, NULL),
(6, 'Adiarja Jail Gunawan S.H.', 'cbudiyanto@example.net', '2022-06-19 17:34:22', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, '1Nktt10f9t', NULL, NULL),
(7, 'Cici Wijayanti', 'talia.mahendra@example.com', '2022-06-19 17:34:22', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'Rk8hYOPcvo', NULL, NULL),
(8, 'Nova Citra Oktaviani', 'tamba.padmi@example.org', '2022-06-19 17:34:23', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'YWTQB94U4L', NULL, NULL),
(9, 'Adiarja Prakasa', 'xhassanah@example.org', '2022-06-19 17:34:23', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'BICStxmq7I', NULL, NULL),
(10, 'Mutia Susanti', 'murti18@example.net', '2022-06-19 17:34:23', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, '1mncugfLHh', NULL, NULL),
(11, 'Gangsa Mulyono Waskita S.Gz', 'rnapitupulu@example.org', '2022-06-19 17:34:23', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, '8XnBfdk4wS', NULL, NULL),
(12, 'Najwa Namaga', 'cahyanto.zulkarnain@example.net', '2022-06-19 17:34:24', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'zo53jJLvTV', NULL, NULL),
(13, 'Shakila Safitri', 'driyanti@example.org', '2022-06-19 17:34:24', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'oO2n8qls5A', NULL, NULL),
(14, 'Vanya Rika Nasyiah', 'simbolon.ella@example.com', '2022-06-19 17:34:24', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'Nx4iaUxJCd', NULL, NULL),
(15, 'Raden Hendri Hakim S.Ked', 'knarpati@example.net', '2022-06-19 17:34:24', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, '82sXUidPEY', NULL, NULL),
(16, 'Kiandra Pudjiastuti', 'anastasia.puspita@example.org', '2022-06-19 17:34:24', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'otXtrA0ycm', NULL, NULL),
(17, 'Samiah Handayani', 'santoso.ghaliyati@example.com', '2022-06-19 17:34:24', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'ReRiFa93zn', NULL, NULL),
(18, 'Lili Susanti M.Pd', 'simon62@example.com', '2022-06-19 17:34:25', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'LmAqiJj5un', NULL, NULL),
(19, 'Jarwadi Wadi Simanjuntak S.Pd', 'endah.andriani@example.com', '2022-06-19 17:34:25', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'bgu8vZa7hV', NULL, NULL),
(20, 'Diana Vera Purnawati', 'bhandayani@example.org', '2022-06-19 17:34:25', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'ZSArT5spBS', NULL, NULL),
(21, 'Jaswadi Kurniawan', 'eharyanto@example.net', '2022-06-19 17:34:26', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'IPJHuH53tM', NULL, NULL),
(22, 'Purwadi Marbun M.Farm', 'balamantri99@example.com', '2022-06-19 17:34:26', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'Vbgz9olw5w', NULL, NULL),
(23, 'Jasmin Agustina S.E.I', 'yuni61@example.net', '2022-06-19 17:34:26', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'syqNNZBPAw', NULL, NULL),
(24, 'Ella Safitri', 'dirja44@example.com', '2022-06-19 17:34:26', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'fwj4hev7NY', NULL, NULL),
(25, 'Dagel Mursinin Pratama', 'emong61@example.org', '2022-06-19 17:34:26', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'gckJW7Dqdl', NULL, NULL),
(26, 'Dinda Namaga', 'dimaz37@example.com', '2022-06-19 17:34:27', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'gN99yr2Xr5', NULL, NULL),
(27, 'Silvia Kuswandari', 'alambana.pudjiastuti@example.org', '2022-06-19 17:34:27', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'U7ovQsdRqe', NULL, NULL),
(28, 'Luhung Heryanto Gunarto S.Gz', 'jail00@example.org', '2022-06-19 17:34:27', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'ILwHoWEUbm', NULL, NULL),
(29, 'Ade Sudiati', 'lanang.rahimah@example.org', '2022-06-19 17:34:27', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'C3qqCmhSBm', NULL, NULL),
(30, 'Cahya Firgantoro S.Psi', 'calista.susanti@example.com', '2022-06-19 17:34:27', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'Vo4LxTh2MI', NULL, NULL),
(31, 'Violet Rahmi Hassanah M.M.', 'gunawan.harja@example.org', '2022-06-19 17:34:27', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'wGzZ0ik9ar', NULL, NULL),
(32, 'Yance Mardhiyah', 'siti.melani@example.net', '2022-06-19 17:34:28', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'rglm7UOgWl', NULL, NULL),
(33, 'Indra Kawaya Santoso M.TI.', 'betania.budiman@example.com', '2022-06-19 17:34:28', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'fuGveoBmRH', NULL, NULL),
(34, 'Nilam Rini Riyanti S.T.', 'bpalastri@example.org', '2022-06-19 17:34:28', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'VptxfX4EFw', NULL, NULL),
(35, 'Vanesa Farida', 'palastri.nyana@example.com', '2022-06-19 17:34:28', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, '91VtoMKJop', NULL, NULL),
(36, 'Cindy Laksita S.IP', 'ikhsan.waluyo@example.org', '2022-06-19 17:34:28', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'K7hGG1RRvF', NULL, NULL),
(37, 'Hilda Ajeng Suryatmi', 'hamima.budiman@example.net', '2022-06-19 17:34:28', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, '6Fu31jOfo7', NULL, NULL),
(38, 'Irsad Carub Hutagalung S.Farm', 'cornelia96@example.org', '2022-06-19 17:34:28', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'QXUovQcRdT', NULL, NULL),
(39, 'Fathonah Jasmin Wijayanti', 'baktiadi.mayasari@example.org', '2022-06-19 17:34:28', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'l3JNpRwkRH', NULL, NULL),
(40, 'Mutia Tami Astuti S.I.Kom', 'wijayanti.humaira@example.org', '2022-06-19 17:34:28', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'LjXBCOzQG1', NULL, NULL),
(41, 'Tania Pertiwi', 'eva55@example.com', '2022-06-19 17:34:29', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'hCEYZsPdGg', NULL, NULL),
(42, 'Asirwanda Nalar Sihombing S.Kom', 'yulianti.raina@example.net', '2022-06-19 17:34:29', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'idUYqiKZPd', NULL, NULL),
(43, 'Limar Maulana M.TI.', 'dmelani@example.com', '2022-06-19 17:34:29', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'hkcaM72RGo', NULL, NULL),
(44, 'Cinta Nasyiah S.Sos', 'nabila58@example.org', '2022-06-19 17:34:29', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, '2bhkkFYJXt', NULL, NULL),
(45, 'Dina Nasyidah M.TI.', 'artanto.rahmawati@example.com', '2022-06-19 17:34:29', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, '77izMU3EYK', NULL, NULL),
(46, 'Kezia Hassanah', 'vanya57@example.net', '2022-06-19 17:34:30', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'mFF1m7C9O1', NULL, NULL),
(47, 'Karya Habibi', 'kamidin.oktaviani@example.org', '2022-06-19 17:34:30', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'fg6Z2qP3AC', NULL, NULL),
(48, 'Darman Suwarno S.Psi', 'narpati.padmi@example.net', '2022-06-19 17:34:30', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'G65WB8k6qm', NULL, NULL),
(49, 'Usyi Kani Palastri M.Pd', 'qmandasari@example.net', '2022-06-19 17:34:30', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, '1iw0KSfFlP', NULL, NULL),
(50, 'Ayu Zulaika', 'siti69@example.com', '2022-06-19 17:34:30', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, '8XpclpcHmJ', NULL, NULL),
(51, 'Hasna Oktaviani', 'crahayu@example.org', '2022-06-19 17:34:30', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, '3wZU9SKlsW', NULL, NULL),
(52, 'Cakrabirawa Samosir M.Pd', 'cakrabirawa84@example.org', '2022-06-19 17:34:31', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 2, 1, 'FiiA7D0gBE', NULL, NULL),
(53, 'Kacung Saragih', 'cwasita@example.com', '2022-06-19 17:34:31', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 2, 1, 'MZnqPdzjkT', NULL, NULL),
(54, 'Asmianto Maryadi S.I.Kom', 'pradana.ana@example.com', '2022-06-19 17:34:31', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 2, 1, 'aRfV98qHs9', NULL, NULL),
(55, 'Kuncara Uwais S.Psi', 'rahimah.amelia@example.org', '2022-06-19 17:34:31', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 2, 1, 'frbyLa5BbQ', NULL, NULL),
(56, 'Laras Kuswandari M.Pd', 'jais.maryati@example.net', '2022-06-19 17:34:31', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 2, 1, 'Lodg3dyXPT', NULL, NULL),
(57, 'Bakti Pradipta', 'dadap.rajata@example.net', '2022-06-19 17:34:31', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 2, 1, 'dx9WUihfoz', NULL, NULL),
(58, 'Jarwi Irawan', 'habibi.kamidin@example.org', '2022-06-19 17:34:32', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 2, 1, 'j8aIGtZeOJ', NULL, NULL),
(59, 'Lukman Sihombing', 'nasim76@example.org', '2022-06-19 17:34:32', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 2, 1, 'h9B5asGfTc', NULL, NULL),
(60, 'Cawuk Jatmiko Permadi', 'fujiati.uchita@example.org', '2022-06-19 17:34:32', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 2, 1, '8WuMVijh8b', NULL, NULL),
(61, 'Hari Respati Samosir', 'sinaga.rini@example.com', '2022-06-19 17:34:32', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 2, 1, 'Y9otOikbpC', NULL, NULL),
(62, 'Kunthara Sidiq Simbolon', 'ardianto.laras@example.net', '2022-06-19 17:34:32', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 2, 1, 'XeqzUEHh7a', NULL, NULL),
(63, 'Jais Sirait', 'astuti.jane@example.org', '2022-06-19 17:34:33', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 2, 1, 'Z4POWfFPqN', NULL, NULL),
(64, 'Kajen Megantara', 'padmasari.melinda@example.com', '2022-06-19 17:34:33', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 2, 1, 'UbxQlulXq0', NULL, NULL),
(65, 'Safina Yunita Usamah M.M.', 'dinda82@example.org', '2022-06-19 17:34:33', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 2, 1, 'BFEt6ys68o', NULL, NULL),
(66, 'Hilda Iriana Utami', 'jriyanti@example.org', '2022-06-19 17:34:33', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 2, 1, 'MKuC5BJHsT', NULL, NULL),
(67, 'Administrator', 'admin@gmail.com', '2022-06-19 17:34:34', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 1, 1, 'cN6q0ZT1J5', NULL, NULL),
(68, 'Ony Novianti', 'onynovianti@gmail.com', '2022-06-19 17:34:34', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 1, 'XIwxh45wpx', NULL, NULL),
(69, 'Zeni Zamara', 'zenizamara@gmail.com', '2022-06-19 17:34:34', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 0, 'OcgQHcKg9a', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_user`
--
ALTER TABLE `course_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `curricula`
--
ALTER TABLE `curricula`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `outcomes`
--
ALTER TABLE `outcomes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `requirements`
--
ALTER TABLE `requirements`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course_user`
--
ALTER TABLE `course_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `curricula`
--
ALTER TABLE `curricula`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `outcomes`
--
ALTER TABLE `outcomes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requirements`
--
ALTER TABLE `requirements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
