-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2025 at 08:59 PM
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
-- Database: `wmsu_administrationdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_deans`
--

CREATE TABLE `academic_deans` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `honorifics_id` int(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `academic_deans`
--

INSERT INTO `academic_deans` (`id`, `name`, `title`, `honorifics_id`, `created_at`, `updated_at`) VALUES
(1, 'Abdel-Azeem A. Moammad Siddique', 'Dean, College of Asian & Islamic Studies', 4, '2025-03-24 11:55:10', '2025-04-16 07:55:59'),
(2, 'Mohammad Khasim I. Abdulmajid', 'Dean, College of Medicine', 1, '2025-03-24 11:55:38', '2025-03-24 11:55:38'),
(3, 'Hashim N. Alawi', 'OIC – Dean, College of Nursing', 2, '2025-03-24 11:56:01', '2025-04-16 07:40:18'),
(4, 'Ulmen Riff L. Circulado', 'Dean, College of Engineering', 3, '2025-03-24 11:56:20', '2025-04-16 07:40:36'),
(5, 'Mark L. Flores', 'Dean, College of Computing Studies', 3, '2025-03-24 11:56:54', '2025-04-16 07:40:52'),
(6, 'Byron B. Go Silk', 'Dean, External Studies Unit', 1, '2025-03-24 11:57:53', '2025-03-24 11:57:53'),
(7, 'Mario Ritchie O. Hibionada', 'Dean, College of Criminology', 1, '2025-03-24 11:58:20', '2025-03-24 11:58:20'),
(8, 'Almudi G. Lukman', 'Dean, College of Forestry & Environmental Studies', 1, '2025-03-24 11:58:36', '2025-04-16 07:56:07'),
(9, 'Irma Mari Madelle-Rivero', 'Dean, College of Law', 11, '2025-03-24 11:59:01', '2025-04-16 07:45:01'),
(10, 'Mohammad Nur S. Paspasan', 'Acting Dean, College of Science and Mathematics', 1, '2025-03-24 11:59:24', '2025-03-24 11:59:24'),
(11, 'Roel F. Marcial', 'Dean, College of Liberal Arts', 2, '2025-03-24 11:59:42', '2025-04-16 07:44:36'),
(12, 'Ricardo A. Somblingo', 'Dean, College of Teacher Education', 1, '2025-03-24 12:00:12', '2025-03-24 12:00:12'),
(13, 'Elderico P. Tabal', 'Dean, College of Agriculture', 1, '2025-03-24 12:00:31', '2025-03-24 12:00:31'),
(14, 'Jocelyn T. Gaas', 'Dean, College of Social Work & Community Development', 1, '2025-03-24 12:00:54', '2025-04-16 07:49:41'),
(15, 'Ma. Blancaflor R. Jimeno', 'Dean, CSSPE', 1, '2025-03-24 12:01:44', '2025-03-24 12:01:44'),
(16, 'Maria Socorro Yvonne H. Ramos', 'Coordinating Dean, Graduate School', 1, '2025-03-24 12:02:11', '2025-04-16 07:41:51'),
(17, 'Ruby Alita A. Sahi', 'OIC – Dean, College of Architecture', 5, '2025-03-24 12:02:40', '2025-04-16 07:41:40'),
(18, 'Lucia M. Santos', 'Dean, College of Home Economics', 1, '2025-03-24 12:03:09', '2025-03-24 12:03:09'),
(19, 'Sarah S. Taupan', 'OIC- Dean, CPADS on concurrent Director, Quality Assurance Center Office / Chair of the ISA', 1, '2025-03-24 12:03:32', '2025-03-24 12:03:32');

-- --------------------------------------------------------

--
-- Table structure for table `assistant_directors`
--

CREATE TABLE `assistant_directors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `honorifics_id` int(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assistant_directors`
--

INSERT INTO `assistant_directors` (`id`, `name`, `title`, `honorifics_id`, `created_at`, `updated_at`) VALUES
(1, 'Richard C. Dagalea', 'Asst. Director, Public Affairs Office', 1, '2025-03-24 19:06:18', '2025-03-24 19:06:18'),
(2, 'Swidin S. Husin', 'Associate Director of the Research Development and Evaluation Center', 2, '2025-03-24 19:06:36', '2025-03-24 19:06:36'),
(3, 'Joel C. Macasinag', 'Asst. Manager, University PRESS(UPRESS)', 2, '2025-03-24 19:06:56', '2025-04-16 14:39:14'),
(4, 'Reynaldo R. Macaso', 'Asst. Director of the Scholarship Office', 2, '2025-03-24 19:07:14', '2025-03-24 19:07:14'),
(5, 'Keynard L. Ponce', 'Asst. to the Director of Center for Continuing Education (CCE)', 3, '2025-03-24 19:07:45', '2025-03-24 19:07:45'),
(6, 'Vinchall A. Siason', 'Asst. Director of the Quality Assurance Office', 2, '2025-03-24 19:08:13', '2025-03-24 19:08:13'),
(7, 'Salimar B. Tahil', 'Asst. Director of the Management Information System and Technology Office', 3, '2025-03-24 19:08:44', '2025-03-24 19:08:44'),
(8, 'Rochard T. Tarroza', 'Asst. Director, Student Affairs Office', 1, '2025-03-24 19:09:45', '2025-03-24 19:09:45'),
(9, 'Sophia L. Bensali', 'Asst. to the Director of Center for Science Teaching and Training', 4, '2025-03-24 19:10:12', '2025-03-24 19:10:12'),
(10, 'Melodina V. Francisco', 'Asst. Director, Alumni Relations Office', 6, '2025-03-24 19:10:29', '2025-03-24 19:10:29'),
(11, 'Mely Jane D. Jacinto', 'Asst. Director, Quality Management Systems Office', 1, '2025-03-24 19:10:58', '2025-03-24 19:10:58'),
(12, 'Dulce Amor P. Matondo', 'Assistant to the VPRESEL', 1, '2025-03-24 19:11:15', '2025-03-24 19:11:15'),
(13, 'Aenn Bernielee C. Limbaga', 'Asst. Director, Special Program and Projects Office (SPPO)', 5, '2025-03-24 19:11:32', '2025-03-24 19:11:32');

-- --------------------------------------------------------

--
-- Table structure for table `associate_deans`
--

CREATE TABLE `associate_deans` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `honorifics_id` int(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `associate_deans`
--

INSERT INTO `associate_deans` (`id`, `name`, `title`, `honorifics_id`, `created_at`, `updated_at`) VALUES
(2, 'Roel P. Borja', 'College of Liberal Arts', 2, '2025-03-24 20:06:36', '2025-04-16 15:57:01'),
(3, 'Darwin V. Mendoza', 'College of Home Economics', 4, '2025-03-24 20:06:57', '2025-04-16 15:57:09'),
(4, 'Ricardo Danilo E. Corteza', 'College of Sports Science and Physical Education', 2, '2025-03-24 20:07:11', '2025-04-16 15:57:16'),
(5, 'Kent Adnil C. Lao', 'College of Teacher Education', 2, '2025-03-24 20:07:35', '2025-04-16 15:57:26'),
(6, 'Nurmia L. Ticao', 'College of Asian and Islamic Studies', 2, '2025-03-24 20:07:49', '2025-04-16 15:57:37'),
(7, 'Czarina Adelene J. Aquino', 'College of Engineering', 3, '2025-03-24 20:08:06', '2025-04-16 15:57:48'),
(8, 'Edwin I. Arip', 'College of Computing Studies', 2, '2025-03-24 20:08:30', '2025-04-16 15:58:04'),
(9, 'Bernard Q. Suriaga', 'College of Public Administration and Development Studies', 2, '2025-03-24 20:09:00', '2025-04-16 15:58:15'),
(10, 'Sophia L. Bensali', 'College of Science and Mathematics concurrent OIC-Director RSTC', 4, '2025-03-24 20:10:05', '2025-04-16 15:58:29'),
(11, 'Grace N. Floriano', 'College of Nursing', 1, '2025-03-24 20:11:07', '2025-03-24 20:11:07'),
(13, 'Jannet R. Francisco', 'College of Social Work and Community Development', 2, '2025-03-24 20:14:35', '2025-04-16 15:58:46'),
(14, 'Gladess A. Pagal', 'College of Agriculture', 2, '2025-03-24 20:14:52', '2025-04-16 15:59:00'),
(15, 'Ruzzel L. Nazario', 'WMSU External Studies Unit (ESU)', 4, '2025-03-24 20:15:08', '2025-04-16 15:59:06'),
(16, 'Maryam-Lizbeth L. Sahijuan', 'College of Medicine', 2, '2025-03-24 20:15:24', '2025-04-16 15:59:12');

-- --------------------------------------------------------

--
-- Table structure for table `board_of_regents`
--

CREATE TABLE `board_of_regents` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title_id` int(100) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `rank` int(11) NOT NULL,
  `honorifics_id` int(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `board_of_regents`
--

INSERT INTO `board_of_regents` (`id`, `name`, `title_id`, `image`, `rank`, `honorifics_id`, `created_at`, `updated_at`) VALUES
(4, 'ALAN PETER S. CAYETANO', 1, 'cayetano.jpg', 3, 8, '2025-03-23 18:24:46', '2025-04-24 08:39:57'),
(5, 'Represented by:', 2, 'macasaet-1.jpg', 4, 8, '2025-03-23 18:26:40', '2025-03-23 18:26:40'),
(6, 'MARK O. GO', 3, 'mark-ogo.jpg', 5, 8, '2025-03-23 18:27:16', '2025-03-23 18:27:16'),
(7, 'Represented by:', 4, 'yanga.jpg', 6, 8, '2025-03-23 18:27:49', '2025-03-23 18:27:49'),
(8, 'MARIA FELICIDAD R. GUERRERO', 5, 'guerrero.jpg', 7, 8, '2025-03-23 18:29:20', '2025-03-23 18:29:20'),
(9, 'MARTIN A. WEE', 6, 'martin-wee.jpg', 8, 8, '2025-03-23 18:29:49', '2025-03-23 18:29:49'),
(10, 'INOCENTE P. LOCSON', 7, 'LOCSON.jpg', 9, 8, '2025-03-23 18:30:07', '2025-03-23 18:30:07'),
(11, 'JOSE L. LOBREGAT', 8, 'lobregat.jpg', 10, 8, '2025-03-23 18:30:36', '2025-03-23 18:30:36'),
(12, 'FLORENCIO M. LIONG, JR', 9, 'mundoc_blank.jpg', 11, 8, '2025-03-23 18:31:18', '2025-03-23 18:31:18'),
(13, 'ADRIAN P. SEMORLAN', 10, 'semorlan.jpg', 12, 8, '2025-03-23 18:32:00', '2025-03-23 18:32:00'),
(14, 'AHMAD G. MUNDOC', 11, 'florencioblank.jpg', 13, 8, '2025-03-23 18:32:23', '2025-03-23 18:32:23'),
(15, 'AL-GHANI D. MOHAMMAD', 12, 'MOHAMMAD.jpg', 14, 13, '2025-03-23 18:32:46', '2025-03-23 18:32:46');

-- --------------------------------------------------------

--
-- Table structure for table `campus_administrators`
--

CREATE TABLE `campus_administrators` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `honorifics_id` int(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `campus_administrators`
--

INSERT INTO `campus_administrators` (`id`, `name`, `title`, `honorifics_id`, `created_at`, `updated_at`) VALUES
(1, 'Mary Jocelyn V. Battung', 'Campus Administrator, Pagadian', 1, '2025-03-24 19:00:32', '2025-04-16 14:27:35'),
(2, 'Maria Celeste B. Dela Cruz', 'Campus Administrator, Malangas', 6, '2025-03-24 19:00:50', '2025-03-24 19:00:50'),
(3, 'Felwin Lovely R. Natividad', 'Campus Administrator, Ipil', 4, '2025-03-24 19:01:08', '2025-03-24 19:01:08');

-- --------------------------------------------------------

--
-- Table structure for table `chairpersons`
--

CREATE TABLE `chairpersons` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `honorifics_id` int(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chairpersons`
--

INSERT INTO `chairpersons` (`id`, `name`, `title`, `honorifics_id`, `created_at`, `updated_at`) VALUES
(2, 'Ferdinand S. Guardo', 'Chief Information Officer (CIO) of the University RE DICT', 2, '2025-03-24 19:21:00', '2025-04-16 14:49:44'),
(3, 'Fredelino M. San Juan', 'Chair Bids and Award Committee', 1, '2025-03-24 19:21:28', '2025-03-24 19:21:28'),
(4, 'Ricardo B. Gonzales', 'Chair of the Tech. Inspection Committee', 2, '2025-03-24 19:21:55', '2025-03-24 19:21:55'),
(5, 'Ruperto D. Mendoza, Jr.', 'Chair, University Review and Evaluation Committee', 1, '2025-03-24 19:22:18', '2025-03-24 19:22:18'),
(6, 'Analyn D. Saavedra', 'Chair, Research Ethics Oversight Committee (REOC)', 4, '2025-03-24 19:22:39', '2025-03-24 19:22:39');

-- --------------------------------------------------------

--
-- Table structure for table `coordinators`
--

CREATE TABLE `coordinators` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `honorifics_id` int(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coordinators`
--

INSERT INTO `coordinators` (`id`, `name`, `title`, `honorifics_id`, `created_at`, `updated_at`) VALUES
(1, 'Julito B. Bande', 'Campus Coordinator, Alicia', 4, '2025-03-24 19:32:21', '2025-04-16 15:12:57'),
(2, 'Noel A. Comeros', 'Campus Coordinator, Curuan', 2, '2025-03-24 19:32:49', '2025-03-24 19:32:49'),
(3, 'Hernan N. Rosaldo II', 'Coordinator, Library and Archive', 3, '2025-03-24 19:33:19', '2025-03-24 19:33:19'),
(4, 'Ariel M. Macailing', 'Campus Coordinator, Imelda', 4, '2025-03-24 19:33:38', '2025-03-24 19:33:38'),
(5, 'Pacamalan, Leo Myco', 'Campus Coordinator, Siay', 4, '2025-03-24 19:33:58', '2025-03-24 19:33:58'),
(6, 'Eryle Edvin E. Protacio', 'Coordinator, Local Studies', 2, '2025-03-24 19:36:42', '2025-03-24 19:36:42'),
(7, 'Noel V. Pugosa', 'Campus Coordinator, Molave', 2, '2025-03-24 19:38:34', '2025-03-24 19:38:34'),
(8, 'Hernan N. Rosaldo II', 'Coordinator, BIDANI', 3, '2025-03-24 19:39:01', '2025-03-24 19:39:01'),
(9, 'Jiellzon Jaime T. Villarama', 'Coordinator, University Museum', 1, '2025-03-24 19:39:21', '2025-03-24 19:39:21'),
(10, 'Carmela J. Go Silk', 'OIC – Campus Coordinator Diplahan', 1, '2025-03-24 19:39:43', '2025-03-24 19:39:43'),
(11, 'Lolita R. Lacao-Lacao', 'OIC – Campus Coordinator Olutanga', 2, '2025-03-24 19:39:59', '2025-03-24 19:39:59'),
(12, 'Divine Grace M. Marumas', 'Coordinator Instructional Support & Materials Production (ISMP)', 2, '2025-03-24 19:40:20', '2025-03-24 19:40:20'),
(13, 'Michelle S. Paderan', 'OIC – Campus Coordinator of Mabuhay', 4, '2025-03-24 19:40:37', '2025-03-24 19:40:37'),
(14, 'Arlyn O. Rebuza', 'Campus Coordinator College of Agriculture', 4, '2025-03-24 19:40:56', '2025-03-24 19:40:56'),
(15, 'Nosca Bonna Ar D. Taasin', 'OIC – Campus Coordinator of Tungawan', 4, '2025-03-24 19:41:13', '2025-03-24 19:41:13');

-- --------------------------------------------------------

--
-- Table structure for table `designation_bor`
--

CREATE TABLE `designation_bor` (
  `id` int(11) NOT NULL,
  `designation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `designation_bor`
--

INSERT INTO `designation_bor` (`id`, `designation`) VALUES
(1, 'CHAIRMAN, SENATE COMMITTEE ON HIGHER TECHNICAL AND VOCATIONAL EDUCATIONS, MEMBER – WMSU-BOR'),
(2, 'ROLANDO L. MACASAET'),
(3, 'CHAIRMAN, HOUSE COMMITTEE ON HIGHER AND TECHNICAL EDUCATION, MEMBER – WMSU-BOR'),
(4, 'EMMYLOU B. YANGA'),
(5, 'OFFICER-IN-CHARGE REGIONAL DIRECTOR NEDA IX WMSU BOARD OF REGENTS'),
(6, 'REGIONAL DIRECTOR, DOST IX MEMBER, WMSU-BOR'),
(7, 'PRIVATE SECTOR REPRESENTATIVE MEMBER, WMSU-BOR'),
(8, 'PRIVATE SECTOR REPRESENTATIVE MEMBER, WMSU-BOR'),
(9, 'PRESIDENT, WMSU UNITED GENERAL ALUMNI ASSOCIATION, INC. MEMBER, WMSU-BOR'),
(10, 'PRESIDENT, WMSU FACULTY UNION ASSOCIATION, INC MEMBER, WMSU-BOR'),
(11, 'PRESIDENT, UNIVERSITY STUDENT COUNCIL MEMBER, WMSU-BOR'),
(12, 'UNIVERSITY AND BOARD SECRETARY');

-- --------------------------------------------------------

--
-- Table structure for table `designation_opstaff`
--

CREATE TABLE `designation_opstaff` (
  `id` int(11) NOT NULL,
  `designation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `designation_opstaff`
--

INSERT INTO `designation_opstaff` (`id`, `designation`) VALUES
(3, 'ds');

-- --------------------------------------------------------

--
-- Table structure for table `designation_vp`
--

CREATE TABLE `designation_vp` (
  `id` int(11) NOT NULL,
  `designation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `designation_vp`
--

INSERT INTO `designation_vp` (`id`, `designation`) VALUES
(1, 'Vice President for Academic Affairs'),
(2, 'Vice President for Research Extension Services & External Linkages'),
(3, 'Vice President for Administration and Finance'),
(4, 'Vice President for Resource Generation in concurrent capacity as Agribusiness Department Chair'),
(5, 'Vice President for Student Affairs and Services in concurrent capacity as Director of Special Progra');

-- --------------------------------------------------------

--
-- Table structure for table `directors`
--

CREATE TABLE `directors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `honorifics_id` int(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `directors`
--

INSERT INTO `directors` (`id`, `name`, `title`, `honorifics_id`, `created_at`, `updated_at`) VALUES
(2, 'Leonilo B. Abella', 'Director, WESMAARRDEC Consortium', 1, '2025-03-24 18:44:54', '2025-04-16 08:25:53'),
(3, 'Reynante E. Autida', 'Director, Research Development &amp;amp; Eval. Center', 1, '2025-03-24 18:45:20', '2025-04-16 08:26:08'),
(4, 'Joselito R. Custodio', 'OIC – Director, Office of the Center for Continuing Education', 2, '2025-03-24 18:45:43', '2025-04-28 18:56:25'),
(5, 'Mark L. Flores', 'Director, Data Protection and IT Security Officer', 3, '2025-03-24 18:46:09', '2025-03-24 18:46:09'),
(6, 'Ferdinand S. Guardo', 'Director, Management Information Systems & Technology Office', 3, '2025-03-24 18:46:38', '2025-03-24 18:46:38'),
(7, 'Al-Rashid T. Jama', 'Director, University Disaster Risk Reduction Management Office', 4, '2025-03-24 18:47:02', '2025-03-24 18:47:02'),
(8, 'Norman Lloyd B. Manginsay', 'OIC – Director of University Sports Development Office', 4, '2025-03-24 18:47:27', '2025-03-24 18:47:27'),
(9, 'Evelyn N. Angeles', 'Director, Office of the Student Affairs', 3, '2025-03-24 18:47:49', '2025-03-24 18:47:49'),
(10, 'Mario R. Obra, Jr.', 'Director, Quality Management Office, International Relations Office & External Linkages', 1, '2025-03-24 18:48:19', '2025-03-24 18:48:19'),
(11, 'Hernan N. Rosaldo II', 'OIC-Director, Department of Extension Services and Community Development', 3, '2025-03-24 18:51:24', '2025-03-24 18:51:24'),
(12, 'Joseph Andrew L. Sahial', 'Director, Physical Plant concurrent capacity as the University Architect', 5, '2025-03-24 18:51:50', '2025-03-24 18:51:50'),
(13, 'Roberto M. Sala', 'Director of WMSU – Affiliated Renewable Energy Center (AREC)', 1, '2025-03-24 18:52:15', '2025-03-24 18:52:15'),
(14, 'Bernard Q. Suriaga', 'Director, University Center for Local Governance', 2, '2025-03-24 18:52:45', '2025-03-24 18:52:45'),
(15, 'Rosalie T. Arcillas', 'Director, Finance', 6, '2025-03-24 18:53:00', '2025-03-24 18:53:00'),
(16, 'Fuvie R. Bayot', 'Director, Distance Education', 1, '2025-03-24 18:53:15', '2025-03-24 18:53:15'),
(17, 'Fini Joy P. Buenafe', 'Director, Guidance & Counseling Center', 1, '2025-03-24 18:53:33', '2025-03-24 18:53:33'),
(18, 'Mary Grace M. Buñol', 'OIC – Director for Testing and Evaluation Center (TEC)', 4, '2025-03-24 18:53:52', '2025-03-24 18:53:52'),
(19, 'Nerlyne C. Concepcion', 'Director, WMSU Career and Job Placement Center', 2, '2025-03-24 18:54:28', '2025-03-24 18:54:28'),
(20, 'Ludivina B. Dekit', 'Director, Peace & Human Security Institute', 4, '2025-03-24 18:54:47', '2025-03-24 18:54:47'),
(21, 'Marilou C. Elago', 'Director, Office of the Univ. Biosafety and Biosecurity Committee', 1, '2025-03-24 18:55:03', '2025-03-24 18:55:03'),
(22, 'Vicenta T. Escobar', 'Director for Admissions Office', 1, '2025-03-24 18:55:30', '2025-03-24 18:55:30'),
(23, 'Mariam Z. Julkarnain', 'Director, Gender Research & Resource Center', 1, '2025-03-24 18:55:59', '2025-03-24 18:55:59'),
(24, 'Ma. Nora D. Lai', 'Director, Alumni Relations Office', 1, '2025-03-24 18:56:20', '2025-03-24 18:56:20'),
(25, 'Melanie F. Lear', 'Director, Centro de Estudio Mindanao, concurrent capacity as Community Outreach and Development Advo', 1, '2025-03-24 18:56:39', '2025-03-24 18:56:39'),
(26, 'Glory Jean G. Leonin', 'Director, Scholarship Office', 2, '2025-03-24 18:57:47', '2025-03-24 18:57:47'),
(27, 'Maria Dolores J. Macrohon', 'Director, Office of Auxiliary Services', 2, '2025-03-24 18:58:15', '2025-03-24 18:58:15'),
(28, 'Almira E. Nochefranca', 'Director, Office of the Culture and the Arts', 1, '2025-03-24 18:58:36', '2025-03-24 18:58:36'),
(29, 'Aubrey F. Reyes', 'Director, Sentro ng Wika at Kultura', 1, '2025-03-24 18:58:58', '2025-03-24 18:58:58'),
(30, 'Ma. Teresita J. Rodriguez', 'Director for Administration', 7, '2025-03-24 18:59:16', '2025-03-24 18:59:16'),
(31, 'Girlie C. Tangalin', 'Director National Service Training Program Office', 6, '2025-03-24 18:59:37', '2025-03-24 18:59:37'),
(32, 'Lea E. Usman', 'Director, Public Affairs Office in concurrent capacity as Director of the Language Development Resou', 1, '2025-03-24 19:00:04', '2025-03-24 19:00:04');

-- --------------------------------------------------------

--
-- Table structure for table `external_studies_unit`
--

CREATE TABLE `external_studies_unit` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `honorifics_id` int(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `external_studies_unit`
--

INSERT INTO `external_studies_unit` (`id`, `name`, `title`, `honorifics_id`, `created_at`, `updated_at`) VALUES
(1, 'Nicasio F. Gonzales', 'OIC- Campus Administrator, WMSU Curuan Campus', 13, '2025-03-24 20:15:49', '2025-04-16 16:00:14'),
(2, 'Ariel Macailing', 'OIC-Campus Coordinator, WMSU Imelda', 1, '2025-03-24 20:16:10', '2025-03-24 20:16:10'),
(3, 'Myco Leo B. Pacamalan', 'OIC-Campus Coordinator, WMSU Siay', 10, '2025-03-24 20:16:39', '2025-04-16 16:00:27'),
(4, 'Reymond G. Paragas', 'OIC-Campus Coordinator, WMSU Naga', 10, '2025-03-24 20:17:00', '2025-04-16 16:00:32'),
(5, 'Noel V. Pugosa', 'OIC-Campus Coordinator, WMSU Molave', 10, '2025-03-24 20:17:21', '2025-04-16 16:00:41'),
(6, 'Nerio P. Sacro', 'OIC-Campus Coordinator, WMSU Aurora', 10, '2025-03-24 20:17:35', '2025-04-16 16:00:46'),
(7, 'Carmela Go Silk', 'OIC-Campus Coordinator, WMSU Diplahan', 1, '2025-03-24 20:17:48', '2025-03-24 20:17:48'),
(8, 'Lolita R. Lacao-Lacao', 'OIC-Campus Coordinator, WMSU Olutanga', 6, '2025-03-24 20:18:02', '2025-04-16 16:00:57'),
(9, 'Erjorie Laguna', 'OIC-Campus Coordinator, WMSU Malangas', 4, '2025-03-24 20:18:16', '2025-04-16 16:01:06'),
(10, 'Felwyn Lovely R. Natividad', 'OIC-Campus Coordinator, WMSU Ipil', 6, '2025-03-24 20:18:31', '2025-04-16 16:01:57'),
(11, 'Michelle S. Paderan', 'OIC-Campus Coordinator, WMSU Mabuhay', 6, '2025-03-24 20:18:43', '2025-04-16 16:01:49'),
(12, 'Criselda D. Ricohermoso', 'OIC-Campus Coordinator, WMSU Pagadian', 6, '2025-03-24 20:18:58', '2025-04-16 16:01:36'),
(13, 'Nosca Bonna Ar D. Taasin', 'OIC-Campus Coordinator, WMSU Tungawan', 6, '2025-03-24 20:19:14', '2025-04-16 16:01:28'),
(14, 'Abigail Villamor', 'OIC-Campus Coordinator, WMSU Alicia', 6, '2025-03-24 20:19:29', '2025-04-16 16:01:20');

-- --------------------------------------------------------

--
-- Table structure for table `graduate_school_head`
--

CREATE TABLE `graduate_school_head` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `honorifics_id` int(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `graduate_school_head`
--

INSERT INTO `graduate_school_head` (`id`, `name`, `title`, `honorifics_id`, `created_at`, `updated_at`) VALUES
(1, 'Leo A. Hermosilla', 'CSSPE', 4, '2025-03-24 19:25:33', '2025-04-16 15:09:10'),
(3, 'Arnel R. Madrazo', 'Chair, Graduate School, College of Teacher Education on concurrent Coordinator of the Research for Utilization, Publication and Information', 1, '2025-03-24 19:26:53', '2025-03-24 19:26:53'),
(4, 'Rochelleo E. Mariano', 'College of Science & Mathematics', 1, '2025-03-24 19:29:10', '2025-03-24 19:29:10'),
(5, 'Nurwin Adam O. Muhammad', 'College of Engineering', 3, '2025-03-24 19:29:36', '2025-03-24 19:29:36'),
(6, 'Johana J. Abdula', 'College of Criminal Justice Education', 1, '2025-03-24 19:29:56', '2025-03-24 19:29:56'),
(7, 'Rubelle Marshah H. Alavar', 'College of Nursing', 1, '2025-03-24 19:30:25', '2025-03-24 19:30:25'),
(8, 'Marites A. Barrios', 'College of Home Economics', 2, '2025-03-24 19:30:49', '2025-03-24 19:30:49'),
(9, 'Wylen L. Lipanglipang', 'CSWCD', 2, '2025-03-24 19:31:07', '2025-03-24 19:31:07'),
(10, 'Fadzralyn A. Karanain', 'Chair of the Graduate School, College of Liberal Arts', 1, '2025-03-24 19:31:25', '2025-03-24 19:31:25'),
(11, 'Emerissa Jane L. Tendero', 'Chair of Graduate, College of Public Administration and Development Studies', 4, '2025-03-24 19:31:47', '2025-03-24 19:31:47');

-- --------------------------------------------------------

--
-- Table structure for table `honorifics`
--

CREATE TABLE `honorifics` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `short` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `honorifics`
--

INSERT INTO `honorifics` (`id`, `name`, `short`) VALUES
(1, 'Doctor', 'Dr.'),
(2, 'Associate Professor', 'Asso. Prof.'),
(3, 'Engineer', 'Engr.'),
(4, 'Assistant Professor', 'Asst. Prof.'),
(5, 'Architect', 'Arch.'),
(6, 'Miss', 'Ms.'),
(7, 'Mistress', 'Mrs.'),
(8, 'Honorable', 'HON.'),
(10, 'Mister', 'Mr.'),
(11, 'Attorney', 'Atty.'),
(13, 'Professor', 'Prof.');

-- --------------------------------------------------------

--
-- Table structure for table `ils_principals`
--

CREATE TABLE `ils_principals` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `honorifics_id` int(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ils_principals`
--

INSERT INTO `ils_principals` (`id`, `name`, `title`, `honorifics_id`, `created_at`, `updated_at`) VALUES
(1, 'Riah Barcelona', 'Principal. ILS -High School', 1, '2025-03-24 19:01:36', '2025-04-16 14:33:57'),
(2, 'Anna Louisa R. Perez', 'Principal, ILS- Elementary', 1, '2025-03-24 19:01:59', '2025-03-24 19:01:59');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `honorifics_id` int(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `name`, `title`, `honorifics_id`, `created_at`, `updated_at`) VALUES
(1, 'Russel J. Ingkoh', 'Marketing Service Manager', 1, '2025-03-24 19:23:01', '2025-03-24 19:23:01'),
(2, 'Antonio Angelo J. Limbaga', 'MITHI', 3, '2025-03-24 19:23:20', '2025-03-24 19:23:20'),
(3, 'Joel C. Macasinag', 'Manager University PRESS', 2, '2025-03-24 19:24:12', '2025-03-24 19:24:12'),
(4, 'Angelito B. Noynay', 'Manager of the Garment Shop', 10, '2025-03-24 19:24:34', '2025-04-16 14:55:41'),
(5, 'Maria Luisa Pilar C. Elago', 'Manager of the Innovation and Technology Support Office (ITSO)', 8, '2025-03-24 19:24:53', '2025-03-24 19:24:53');

-- --------------------------------------------------------

--
-- Table structure for table `opstaff`
--

CREATE TABLE `opstaff` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `page_link` varchar(255) DEFAULT NULL,
  `honorifics_id` int(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `opstaff`
--

INSERT INTO `opstaff` (`id`, `name`, `title`, `page_link`, `honorifics_id`, `created_at`, `updated_at`) VALUES
(3, 'Berhana I. Flores', '', 'chief-of-staff', 1, '2025-03-24 18:41:54', '2025-04-28 18:55:37'),
(4, 'Darlyn P. Flores', 'Special Assistant to the President', 'special-assistant-to-president', 2, '2025-03-24 18:42:32', '2025-03-24 18:42:32'),
(5, 'Aldrin S. Valerio', 'Executive Assistant to the Office of the President', 'executive-assistant-to-president', 4, '2025-03-24 18:43:12', '2025-03-24 18:43:12'),
(6, 'Shamir R. Kassim', 'University Curriculum Chair/Executive Assistant for Special Academic Affairs Concerns', 'university-curriculum-chair', 1, '2025-03-24 18:44:00', '2025-03-24 18:44:00');

-- --------------------------------------------------------

--
-- Table structure for table `organizational_chart`
--

CREATE TABLE `organizational_chart` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organizational_chart`
--

INSERT INTO `organizational_chart` (`id`, `image`, `description`) VALUES
(2, 'Screenshot 2025-02-08 012300.png', 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `other_services`
--

CREATE TABLE `other_services` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `honorifics_id` int(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `other_services`
--

INSERT INTO `other_services` (`id`, `name`, `title`, `honorifics_id`, `created_at`, `updated_at`) VALUES
(1, 'Eric Roland R. Natividad', 'Moderator, University Theatre Guild', 2, '2025-03-24 19:53:14', '2025-04-16 15:36:05'),
(2, 'Anthony B. Barandino', 'Moderator, Visual Arts', 10, '2025-03-24 19:53:35', '2025-04-16 15:36:25'),
(3, 'Nathaniel G. Saavedra', 'Moderator, Jambangan Dance Troupe', 10, '2025-03-24 19:53:52', '2025-04-16 15:36:41'),
(4, 'Joseph Andrew L. Sahial', 'University Project Management Officer', 5, '2025-03-24 19:54:07', '2025-04-16 15:38:27'),
(5, 'Jeremiah D. Calisang', 'Moderator, WMSU Grand Chorale', 1, '2025-03-24 19:54:23', '2025-03-24 19:54:23'),
(6, 'Ruzzel L. Nazario', 'Moderator, Literary Arts', 4, '2025-03-24 19:54:44', '2025-04-16 15:38:50');

-- --------------------------------------------------------

--
-- Table structure for table `page_description`
--

CREATE TABLE `page_description` (
  `id` int(11) NOT NULL,
  `page` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page_description`
--

INSERT INTO `page_description` (`id`, `page`, `description`) VALUES
(2, 'ADMINISTRATIVE OFFICIALS', 'wada');

-- --------------------------------------------------------

--
-- Table structure for table `president`
--

CREATE TABLE `president` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `title_bor` varchar(100) NOT NULL,
  `page_link` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `rank` int(100) NOT NULL,
  `honorifics_id` int(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `president`
--

INSERT INTO `president` (`id`, `name`, `title`, `title_bor`, `page_link`, `image`, `rank`, `honorifics_id`, `created_at`, `updated_at`) VALUES
(5, 'MA. CARLA A. OCHOTORENA', 'University President', 'University President', 'uwas', 'carla-ochotorena.jpg', 1, 8, '2025-04-07 12:37:11', '2025-04-27 06:51:27');

-- --------------------------------------------------------

--
-- Table structure for table `president_suboffices`
--

CREATE TABLE `president_suboffices` (
  `id` int(11) NOT NULL,
  `office` varchar(100) NOT NULL,
  `office_head` varchar(100) NOT NULL,
  `honorifics_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `president_suboffices`
--

INSERT INTO `president_suboffices` (`id`, `office`, `office_head`, `honorifics_id`) VALUES
(2, 'awda', 'ada', 13);

-- --------------------------------------------------------

--
-- Table structure for table `section_chiefs`
--

CREATE TABLE `section_chiefs` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `honorifics_id` int(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section_chiefs`
--

INSERT INTO `section_chiefs` (`id`, `name`, `title`, `honorifics_id`, `created_at`, `updated_at`) VALUES
(1, 'Eric H. Alfaro', 'University Registrar', 10, '2025-03-24 19:44:21', '2025-04-16 15:15:46'),
(2, 'John Paul S. Alvarez', 'Supervising Administrative Officer (Finance)', 10, '2025-03-24 19:44:36', '2025-04-16 15:19:19'),
(3, 'Benhur A. Asid', 'University Librarian', 1, '2025-03-24 19:44:53', '2025-03-24 19:44:53'),
(4, 'Erlando G. Coros', 'Chief Security Services', 10, '2025-03-24 19:45:08', '2025-04-16 15:19:45'),
(5, 'Edgar A. Demayo', 'Engineer III', 3, '2025-03-24 19:45:27', '2025-03-24 19:45:27'),
(6, 'Ricardo B. Gonzales', 'University Electrical Engineer on concurrent Chairman of the Inspection Committee', 3, '2025-03-24 19:45:48', '2025-03-24 19:45:48'),
(7, 'Alen M. Marcelino', 'Head, Motorpool', 10, '2025-03-24 19:46:41', '2025-04-16 15:20:14'),
(8, 'Alfredo D. Montero', 'Supply Officer III', 10, '2025-03-24 19:47:04', '2025-04-16 15:23:03'),
(9, 'Ariel R. Perez', 'Labor General Foreman', 10, '2025-03-24 19:47:22', '2025-04-16 15:23:19'),
(10, 'Joerland- Jansen R. Reyes', 'Property Management Office', 10, '2025-03-24 19:47:53', '2025-04-16 15:23:46'),
(11, 'Roberto Rivero III', 'Attorney IV', 11, '2025-03-24 19:48:07', '2025-04-16 15:23:59'),
(12, 'Oscar S. Sicat', 'Supervising Administrative Officer', 1, '2025-03-24 19:48:24', '2025-03-24 19:48:24'),
(13, 'Suzette G. Ducanes', 'Budget Officer', 6, '2025-03-24 19:48:45', '2025-04-16 15:22:10'),
(14, 'Felicitas Asuncion C. Elago', 'Medical Officer III', 1, '2025-03-24 19:49:04', '2025-03-24 19:49:04'),
(15, 'Ma. Teresita J. Rodriguez', 'OIC-Human Resource Management Officer III on concurrent capacity Director for Administration', 6, '2025-03-24 19:49:24', '2025-04-16 15:27:59'),
(16, 'Erlinda C. Macaso', 'Records Officer III', 10, '2025-03-24 19:49:49', '2025-04-16 15:20:49'),
(17, 'Venus Lyn C. Martin', 'Internal Auditor III', 6, '2025-03-24 19:50:05', '2025-04-16 15:24:33'),
(18, 'Lallaine Anne. L. Mariano', 'Cashier III', 6, '2025-03-24 19:50:51', '2025-04-16 15:28:21'),
(19, 'Abigail Irene B. Marquez', 'Information Officer III', 6, '2025-03-24 19:51:13', '2025-04-16 15:28:42'),
(20, 'Cristianne Dawn R. Sicat', 'OIC – Accountant II', 2, '2025-03-24 19:51:32', '2025-03-24 19:51:32'),
(21, 'Darea Jonnah B. Soliterio', 'APA, President', 2, '2025-03-24 19:51:50', '2025-03-24 19:51:50'),
(22, 'Carolina E. Tejero', 'General Services', 7, '2025-03-24 19:52:05', '2025-04-16 15:29:08'),
(23, 'Debra Ann M. Ponce', 'University Planning Officer III', 6, '2025-03-24 19:52:42', '2025-04-16 15:29:33');

-- --------------------------------------------------------

--
-- Table structure for table `technical_assistants`
--

CREATE TABLE `technical_assistants` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `honorifics_id` int(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `technical_assistants`
--

INSERT INTO `technical_assistants` (`id`, `name`, `title`, `honorifics_id`, `created_at`, `updated_at`) VALUES
(1, 'Edwin I. Arip', 'Tech. Associate (BS Com Sci)', 10, '2025-03-24 19:12:18', '2025-04-16 14:45:01'),
(2, 'Ahmedzam S. Nasaluddin', 'Tech. Associate Under the Office of the President, for the infrastructure Project concurrent capacity', 2, '2025-03-24 19:12:46', '2025-03-24 19:12:46'),
(3, 'Victor Ryan H. Tangalin', 'Technical Associate, Center for Hands of Goodwill', 10, '2025-03-24 19:13:05', '2025-04-16 14:45:36'),
(4, 'Ryan B. Cabangcala', 'Technical Associate to the Vice President for Research Extension Services and External Linkages', 2, '2025-03-24 19:13:27', '2025-03-24 19:13:27'),
(5, 'Shamir R. Kassim', 'Executive Assistant for Special Academic concerns at the Office of the President', 1, '2025-03-24 19:14:09', '2025-03-24 19:14:09'),
(8, 'Marlon C. Grande', 'Technical Associate for the Community Outreach and Development Advocacy Program (CODAP) in concurrent capacity as the Extension Coordinator of the College of Engineering', 2, '2025-03-24 19:18:15', '2025-03-24 19:18:15'),
(9, 'Johana J. Abdula', 'Tech. Asso. for the External Studies Unit – BS Crim. Program', 1, '2025-03-24 19:19:20', '2025-03-24 19:19:20'),
(10, 'Abigail F. Antonio', 'Technical Associate to the Vice President for Academic Affairs', 4, '2025-03-24 19:19:36', '2025-03-24 19:19:36'),
(11, 'Mercendes A. Bejerano', 'Tech. Asst. to the Vice-President for Academic Affairs', 4, '2025-03-24 19:19:54', '2025-03-24 19:19:54'),
(12, 'Bernadeth A. Encarnacion', 'Tech. Asso. for the External Studies Unit – BS Crim. Program', 6, '2025-03-24 19:20:12', '2025-03-24 19:20:12'),
(13, 'Melanie A. Turco', 'Technical Associate to the Vice President for Administration and Finance', 1, '2025-03-24 19:20:29', '2025-03-24 19:20:29');

-- --------------------------------------------------------

--
-- Table structure for table `university_board_secretary`
--

CREATE TABLE `university_board_secretary` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `honorifics_id` int(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `university_board_secretary`
--

INSERT INTO `university_board_secretary` (`id`, `name`, `title`, `honorifics_id`, `created_at`, `updated_at`) VALUES
(5, 'Al-Ghani D. Mohammad', 'Univ. and Board Secretary', 2, '2025-03-24 18:44:36', '2025-04-16 14:23:21');

-- --------------------------------------------------------

--
-- Table structure for table `vice_presidents`
--

CREATE TABLE `vice_presidents` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title_id` int(100) NOT NULL,
  `page_link` varchar(255) DEFAULT NULL,
  `honorifics_id` int(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vice_presidents`
--

INSERT INTO `vice_presidents` (`id`, `name`, `title_id`, `page_link`, `honorifics_id`, `created_at`, `updated_at`) VALUES
(3, 'Nursia M. Barjose', 1, 'ovp-for-academic-affair', 1, '2025-03-24 10:37:03', '2025-04-16 06:07:08'),
(4, 'Joel G. Fernando', 2, 'ovp-for-research-and-extension', 1, '2025-03-24 10:38:20', '2025-04-16 00:39:50'),
(5, 'Joselito D. Madroñal', 3, 'ovp-for-administrative-and-finance', 1, '2025-03-24 10:39:07', '2025-04-16 00:39:57'),
(6, 'Teresita A. Narvaez', 4, 'ovp-for-resource-generation', 1, '2025-03-24 10:39:58', '2025-04-16 00:40:03'),
(7, 'Fredelino M. San Juan', 5, 'ovp-for-student-affairs-and-services', 1, '2025-03-24 10:40:52', '2025-04-16 00:40:12');

-- --------------------------------------------------------

--
-- Table structure for table `vice_president_suboffices`
--

CREATE TABLE `vice_president_suboffices` (
  `id` int(11) NOT NULL,
  `office` varchar(100) NOT NULL,
  `office_head` varchar(100) NOT NULL,
  `office_of_vp_in` varchar(100) NOT NULL,
  `honorifics_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vice_president_suboffices`
--

INSERT INTO `vice_president_suboffices` (`id`, `office`, `office_head`, `office_of_vp_in`, `honorifics_id`) VALUES
(2, 'awda', 'adad', 'adwawd', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_deans`
--
ALTER TABLE `academic_deans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_honorifics_academicdeans` (`honorifics_id`);

--
-- Indexes for table `assistant_directors`
--
ALTER TABLE `assistant_directors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_honorifics_assistantdirectors` (`honorifics_id`);

--
-- Indexes for table `associate_deans`
--
ALTER TABLE `associate_deans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_honorifics_associatedeans` (`honorifics_id`);

--
-- Indexes for table `board_of_regents`
--
ALTER TABLE `board_of_regents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rank` (`rank`),
  ADD KEY `fk_honorifics` (`honorifics_id`),
  ADD KEY `fk_designation_bor` (`title_id`);

--
-- Indexes for table `campus_administrators`
--
ALTER TABLE `campus_administrators`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_honorifics_campusadmin` (`honorifics_id`);

--
-- Indexes for table `chairpersons`
--
ALTER TABLE `chairpersons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_honorifics_chairpersons` (`honorifics_id`);

--
-- Indexes for table `coordinators`
--
ALTER TABLE `coordinators`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_honorifics_coordinators` (`honorifics_id`);

--
-- Indexes for table `designation_bor`
--
ALTER TABLE `designation_bor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designation_opstaff`
--
ALTER TABLE `designation_opstaff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designation_vp`
--
ALTER TABLE `designation_vp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `directors`
--
ALTER TABLE `directors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `external_studies_unit`
--
ALTER TABLE `external_studies_unit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_honorifics_externalstudies` (`honorifics_id`);

--
-- Indexes for table `graduate_school_head`
--
ALTER TABLE `graduate_school_head`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_honorifics_graduateschoolhead` (`honorifics_id`);

--
-- Indexes for table `honorifics`
--
ALTER TABLE `honorifics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ils_principals`
--
ALTER TABLE `ils_principals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_honorifics_ilsprincipals` (`honorifics_id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_honorifics_managers` (`honorifics_id`);

--
-- Indexes for table `opstaff`
--
ALTER TABLE `opstaff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_honorifics_opstaff` (`honorifics_id`);

--
-- Indexes for table `organizational_chart`
--
ALTER TABLE `organizational_chart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_services`
--
ALTER TABLE `other_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_honorifics_otherservices` (`honorifics_id`);

--
-- Indexes for table `page_description`
--
ALTER TABLE `page_description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `president`
--
ALTER TABLE `president`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rank` (`rank`),
  ADD KEY `fkkk_honorifics` (`honorifics_id`);

--
-- Indexes for table `president_suboffices`
--
ALTER TABLE `president_suboffices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_honorifics_pres_suboffices` (`honorifics_id`);

--
-- Indexes for table `section_chiefs`
--
ALTER TABLE `section_chiefs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_honorifics_sectionchief` (`honorifics_id`);

--
-- Indexes for table `technical_assistants`
--
ALTER TABLE `technical_assistants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_honorifics_technicalassistant` (`honorifics_id`);

--
-- Indexes for table `university_board_secretary`
--
ALTER TABLE `university_board_secretary`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_honorifics_ubs` (`honorifics_id`);

--
-- Indexes for table `vice_presidents`
--
ALTER TABLE `vice_presidents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkkkk_honorifics` (`honorifics_id`),
  ADD KEY `fk_designation_vp` (`title_id`);

--
-- Indexes for table `vice_president_suboffices`
--
ALTER TABLE `vice_president_suboffices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_honorifics_vice_pres_suboffices` (`honorifics_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_deans`
--
ALTER TABLE `academic_deans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `assistant_directors`
--
ALTER TABLE `assistant_directors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `associate_deans`
--
ALTER TABLE `associate_deans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `board_of_regents`
--
ALTER TABLE `board_of_regents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `campus_administrators`
--
ALTER TABLE `campus_administrators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chairpersons`
--
ALTER TABLE `chairpersons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `coordinators`
--
ALTER TABLE `coordinators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `designation_bor`
--
ALTER TABLE `designation_bor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `designation_opstaff`
--
ALTER TABLE `designation_opstaff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `designation_vp`
--
ALTER TABLE `designation_vp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `directors`
--
ALTER TABLE `directors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `external_studies_unit`
--
ALTER TABLE `external_studies_unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `graduate_school_head`
--
ALTER TABLE `graduate_school_head`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `honorifics`
--
ALTER TABLE `honorifics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ils_principals`
--
ALTER TABLE `ils_principals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `opstaff`
--
ALTER TABLE `opstaff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `organizational_chart`
--
ALTER TABLE `organizational_chart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `other_services`
--
ALTER TABLE `other_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `page_description`
--
ALTER TABLE `page_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `president`
--
ALTER TABLE `president`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `president_suboffices`
--
ALTER TABLE `president_suboffices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `section_chiefs`
--
ALTER TABLE `section_chiefs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `technical_assistants`
--
ALTER TABLE `technical_assistants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `university_board_secretary`
--
ALTER TABLE `university_board_secretary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vice_presidents`
--
ALTER TABLE `vice_presidents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vice_president_suboffices`
--
ALTER TABLE `vice_president_suboffices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `academic_deans`
--
ALTER TABLE `academic_deans`
  ADD CONSTRAINT `fk_honorifics_academicdeans` FOREIGN KEY (`honorifics_id`) REFERENCES `honorifics` (`id`);

--
-- Constraints for table `assistant_directors`
--
ALTER TABLE `assistant_directors`
  ADD CONSTRAINT `fk_honorifics_assistantdirectors` FOREIGN KEY (`honorifics_id`) REFERENCES `honorifics` (`id`);

--
-- Constraints for table `associate_deans`
--
ALTER TABLE `associate_deans`
  ADD CONSTRAINT `fk_honorifics_associatedeans` FOREIGN KEY (`honorifics_id`) REFERENCES `honorifics` (`id`);

--
-- Constraints for table `board_of_regents`
--
ALTER TABLE `board_of_regents`
  ADD CONSTRAINT `fk_designation_bor` FOREIGN KEY (`title_id`) REFERENCES `designation_bor` (`id`),
  ADD CONSTRAINT `fk_honorifics` FOREIGN KEY (`honorifics_id`) REFERENCES `honorifics` (`id`);

--
-- Constraints for table `campus_administrators`
--
ALTER TABLE `campus_administrators`
  ADD CONSTRAINT `fk_honorifics_campusadmin` FOREIGN KEY (`honorifics_id`) REFERENCES `honorifics` (`id`);

--
-- Constraints for table `chairpersons`
--
ALTER TABLE `chairpersons`
  ADD CONSTRAINT `fk_honorifics_chairpersons` FOREIGN KEY (`honorifics_id`) REFERENCES `honorifics` (`id`);

--
-- Constraints for table `coordinators`
--
ALTER TABLE `coordinators`
  ADD CONSTRAINT `fk_honorifics_coordinators` FOREIGN KEY (`honorifics_id`) REFERENCES `honorifics` (`id`);

--
-- Constraints for table `external_studies_unit`
--
ALTER TABLE `external_studies_unit`
  ADD CONSTRAINT `fk_honorifics_externalstudies` FOREIGN KEY (`honorifics_id`) REFERENCES `honorifics` (`id`);

--
-- Constraints for table `graduate_school_head`
--
ALTER TABLE `graduate_school_head`
  ADD CONSTRAINT `fk_honorifics_graduateschoolhead` FOREIGN KEY (`honorifics_id`) REFERENCES `honorifics` (`id`);

--
-- Constraints for table `ils_principals`
--
ALTER TABLE `ils_principals`
  ADD CONSTRAINT `fk_honorifics_ilsprincipals` FOREIGN KEY (`honorifics_id`) REFERENCES `honorifics` (`id`);

--
-- Constraints for table `managers`
--
ALTER TABLE `managers`
  ADD CONSTRAINT `fk_honorifics_managers` FOREIGN KEY (`honorifics_id`) REFERENCES `honorifics` (`id`);

--
-- Constraints for table `opstaff`
--
ALTER TABLE `opstaff`
  ADD CONSTRAINT `fk_honorifics_opstaff` FOREIGN KEY (`honorifics_id`) REFERENCES `honorifics` (`id`);

--
-- Constraints for table `other_services`
--
ALTER TABLE `other_services`
  ADD CONSTRAINT `fk_honorifics_otherservices` FOREIGN KEY (`honorifics_id`) REFERENCES `honorifics` (`id`);

--
-- Constraints for table `president`
--
ALTER TABLE `president`
  ADD CONSTRAINT `fkkk_honorifics` FOREIGN KEY (`honorifics_id`) REFERENCES `honorifics` (`id`);

--
-- Constraints for table `president_suboffices`
--
ALTER TABLE `president_suboffices`
  ADD CONSTRAINT `fk_honorifics_pres_suboffices` FOREIGN KEY (`honorifics_id`) REFERENCES `honorifics` (`id`);

--
-- Constraints for table `section_chiefs`
--
ALTER TABLE `section_chiefs`
  ADD CONSTRAINT `fk_honorifics_sectionchief` FOREIGN KEY (`honorifics_id`) REFERENCES `honorifics` (`id`);

--
-- Constraints for table `technical_assistants`
--
ALTER TABLE `technical_assistants`
  ADD CONSTRAINT `fk_honorifics_technicalassistant` FOREIGN KEY (`honorifics_id`) REFERENCES `honorifics` (`id`);

--
-- Constraints for table `university_board_secretary`
--
ALTER TABLE `university_board_secretary`
  ADD CONSTRAINT `fk_honorifics_ubs` FOREIGN KEY (`honorifics_id`) REFERENCES `honorifics` (`id`);

--
-- Constraints for table `vice_presidents`
--
ALTER TABLE `vice_presidents`
  ADD CONSTRAINT `fk_designation_vp` FOREIGN KEY (`title_id`) REFERENCES `designation_vp` (`id`),
  ADD CONSTRAINT `fkkkk_honorifics` FOREIGN KEY (`honorifics_id`) REFERENCES `honorifics` (`id`);

--
-- Constraints for table `vice_president_suboffices`
--
ALTER TABLE `vice_president_suboffices`
  ADD CONSTRAINT `fk_honorifics_vice_pres_suboffices` FOREIGN KEY (`honorifics_id`) REFERENCES `honorifics` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
