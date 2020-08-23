-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2020 at 12:57 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notice_board`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `about_image`, `about_description`, `created_at`, `updated_at`) VALUES
(1, 'about_image/dept_image5f1c8469926467.902144594fDFo0uDrv.jpg', 'Mawlana Bhashani Science and Technology University has been named after one of the renowned political leaders and philosophers of Bangladesh - Mawlana Abdul Hamid Khan Bhashani. Today\'s MBSTU is the outcome of the dream which had been dreamt by him long ago. Mawlana Bhashani had the desire to establish a university that would build its students as independent, honest and hard working citizens. He had proposed the name of this university \"Islamic University\". Unfortunately his concerns of Islamic University had remained just a dream throughout his lifetime. Long after this spiritual leader`s death, a university named \"Islamic University\" did establish but this university was established in the district of Kustia instead of Tangail. After waiting a long period of time the Prime Minister of The Peoples Republic of Bangladesh \"Sheikh Hasina\" founded the foundation-stone of MBSTU at Santosh, Tangail in 1999.\r\n\r\nOn 21st November of 2002 Prof. Dr. Md. Yousuf Sharif Ahmed Khan had been appointed as the first Vice Chancellor of the university and finally MBSTU started running officially with only two departments - Computer Science and Engineering & Information And Communication Technology under the first Faculty of the University which is the faculty of Computer Science & Engineering. MBSTU had started its first academic activities with a total of 83 students and 5 teachers of the CSE faculty on 25/10/2003. After about eight months of academic duration of the university, MBSTU had been added with two new departments - Environmental Science & Resource Management and Criminology & Police Science under the second faculty of the University which is the faculty of Life Science. In course of time new departments have been added under both the CSE and the LS faculties of MBSTU. These newly added departments are - Textile Engineering, Biotechnology & Genetic Engineering, Food Technology & Nutritional Science. At present the university holds a total of near about 2000 of students in it and MBSTU is making its way towards the success and glory.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `academic_notices`
--

CREATE TABLE `academic_notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `academic_session_id` bigint(20) NOT NULL,
  `department_id` bigint(20) NOT NULL,
  `course_name_id` bigint(20) NOT NULL,
  `faculty_id` bigint(20) NOT NULL,
  `notice_type_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `notice_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `notice_date` datetime NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `academic_notices`
--

INSERT INTO `academic_notices` (`id`, `title`, `title_slug`, `description`, `academic_session_id`, `department_id`, `course_name_id`, `faculty_id`, `notice_type_id`, `user_id`, `notice_image`, `status`, `notice_date`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(5, 'Lab final exam date for session 2018-19', 'lab-final-exam-date-for-session-2018-19', 'Lab final exam date for session 2018-19', 2, 2, 1, 1, 1, 3, 'notice_image/notice_image5f183d348539a0.34739010V6Ch8tt2vV.pdf', 1, '2020-07-22 00:00:00', '2020-07-22 00:00:00', '2020-08-08 00:00:00', '2020-07-22 07:20:52', '2020-07-30 07:38:14'),
(6, 'IEB visiting team', 'ieb-visiting-team', 'IEB visiting team', 2, 4, 2, 2, 1, 1, 'notice_image/notice_image5f183d9c8f0200.507460390HoBMs1DR5.pdf', 1, '2020-07-24 00:00:00', '2020-07-25 00:00:00', '2020-07-25 00:00:00', '2020-07-22 07:22:36', '2020-07-22 08:35:52'),
(7, 'Notice for session 2015-16 (CSE-5000)', 'notice-for-session-2015-16-cse-5000', 'Notice for session 2015-16 (CSE-5000)', 1, 3, 1, 1, 1, 1, 'notice_image/notice_image5f183defac5158.15043094yNaieb9Hqf.pdf', 1, '2020-07-23 00:00:00', '2020-07-23 00:00:00', '2020-08-01 00:00:00', '2020-07-22 07:23:59', '2020-07-25 15:19:06'),
(8, 'Notice for session 2015-16 (CSE-5000)', 'notice-for-session-2015-16-cse-5000', 'Notice for session 2015-16 (CSE-5000)', 1, 3, 1, 1, 1, 1, 'notice_image/notice_image5f183e02bd2c88.26919014a9XjlvLWa7.pdf', 1, '2020-07-23 00:00:00', '2020-07-23 00:00:00', '2020-08-01 00:00:00', '2020-07-22 07:24:18', '2020-07-25 15:19:04'),
(9, 'Notice for session 2015-16 (CSE-5000)', 'notice-for-session-2015-16-cse-5000', 'Notice for session 2015-16 (CSE-5000)', 1, 2, 1, 2, 1, 1, 'notice_image/notice_image5f183e28107429.06610784KFlo3fKXVO.pdf', 1, '2020-07-22 00:00:00', '2020-07-22 00:00:00', '2020-08-07 00:00:00', '2020-07-22 07:24:56', '2020-07-22 08:35:51'),
(10, 'Programming Contentest Junior Level 2020', 'programming-contentest-junior-level-2020', 'Programming Contentest Junior Level 2020', 1, 1, 1, 1, 1, 1, 'notice_image/notice_image5f184f151f2124.64640357bcD2rZC4LY.pdf', 1, '2020-07-24 00:00:00', '2020-07-25 00:00:00', '2020-07-25 00:00:00', '2020-07-22 08:37:09', '2020-07-22 08:37:23'),
(11, 'Textile Event Summary', 'textile-event-summary', 'Programming Contentest Junior Level 2020', 1, 3, 1, 1, 2, 1, 'notice_image/notice_image5f1cab89ecbe06.16143587wSJHkLTF40.jpg', 1, '2020-07-24 00:00:00', '2020-07-25 00:00:00', '2020-07-25 00:00:00', '2020-07-22 08:38:28', '2020-07-25 16:00:41'),
(12, '1st Year Addmission Test 2020', '1st-year-addmission-test-2020', '1st Year Addmission Test', 1, 1, 1, 1, 3, 1, 'notice_image/notice_image5f18510e2e64f6.72645186T2xde6PLhS.pdf', 1, '2020-07-27 00:00:00', '2020-07-23 00:00:00', '2020-07-23 00:00:00', '2020-07-22 08:45:34', '2020-07-22 10:35:54'),
(13, 'B.Sc Engineering Course Admission Test 2020', 'bsc-engineering-course-admission-test-2020', 'B.Sc Engineering Course Admission Test 2020B.Sc Engineering Course Admission Test 2020', 3, 4, 2, 2, 3, 1, 'notice_image/notice_image5f18517f33d024.07641878niDRAi5Zc2.pdf', 1, '2020-07-23 00:00:00', '2020-07-24 00:00:00', '2020-07-31 00:00:00', '2020-07-22 08:47:27', '2020-07-22 10:35:56'),
(14, 'the challenges of day to day life anywhere.', 'the-challenges-of-day-to-day-life-anywhere', 'the challenges of day to day life anywhere.', 3, 3, 1, 1, 2, 1, 'notice_image/notice_image5f1cb97043e6c9.01265587ZZRxblBtrp.jpg', 1, '2020-07-14 00:00:00', '2020-07-29 00:00:00', '2020-07-23 00:00:00', '2020-07-25 14:10:50', '2020-07-25 17:00:00'),
(15, '1st MBSTU CSE Carnival\'17', '1st-mbstu-cse-carnival17', 'the challenges of day to day life anywhere.', 3, 3, 1, 1, 4, 1, 'notice_image/notice_image5f1cb91873ac56.96509918pajfd2tySZ.jpg', 1, '2020-07-14 00:00:00', '2020-07-29 00:00:00', '2020-07-23 00:00:00', '2020-07-25 14:11:37', '2020-07-25 16:58:32'),
(16, 'programming contnent.', 'programming-contnent', 'the challenges of day to day life anywhere.', 3, 3, 1, 1, 4, 1, 'notice_image/notice_image5f1cb8f8efc302.96075365kxiKOPYefx.jpg', 1, '2020-07-14 00:00:00', '2020-07-29 00:00:00', '2020-07-23 00:00:00', '2020-07-25 14:12:14', '2020-07-25 16:58:00'),
(17, 'Study tour for 2019-2020 sessions', 'the-challenges-of-day-to-day-life-anywhere', 'the challenges of day to day life anywhere.', 3, 3, 1, 1, 2, 1, 'notice_image/notice_image5f1cab620943d9.50271027vntGUShodT.jpg', 1, '2020-07-14 00:00:00', '2020-07-29 00:00:00', '2020-07-23 00:00:00', '2020-07-25 14:13:59', '2020-07-25 16:00:02'),
(18, 'the challenges of day to day life anywhere.', 'the-challenges-of-day-to-day-life-anywhere', 'the challenges of day to day life anywhere.the challenges of day to day life anywhere.the challenges of day to day life anywhere.the challenges of day to day life anywhere.the challenges of day to day life anywhere.', 1, 3, 1, 1, 1, 1, 'notice_image/notice_image5f1c92c274e1b2.04226846KcARCkfZOT.pdf', 1, '2020-07-26 00:00:00', '2020-07-26 00:00:00', '2020-07-30 00:00:00', '2020-07-25 14:14:58', '2020-07-25 15:18:48'),
(19, 'Online Programming Contest ', 'the-challenges-of-day-to-day-life-anywhere', 'the challenges of day to day life anywhere.the challenges of day to day life anywhere.the challenges of day to day life anywhere.the challenges of day to day life anywhere.the challenges of day to day life anywhere.', 1, 3, 1, 1, 2, 1, 'notice_image/notice_image5f1cab41a6b510.31162916Ktn2FJ8BEY.jpg', 1, '2020-07-26 00:00:00', '2020-07-26 00:00:00', '2020-07-30 00:00:00', '2020-07-25 14:24:17', '2020-07-25 15:59:29'),
(20, 'Food seminar', 'the-challenges-of-day-to-day-life-anywhere', 'the challenges of day to day life anywhere.the challenges of day to day life anywhere.the challenges of day to day life anywhere.the challenges of day to day life anywhere.the challenges of day to day life anywhere.', 1, 2, 1, 1, 1, 1, 'notice_image/notice_image5f1c955a5ec872.57280485fjapT8PrGT.pdf', 1, '2020-07-26 00:00:00', '2020-07-26 00:00:00', '2020-07-30 00:00:00', '2020-07-25 14:26:02', '2020-07-25 15:18:43'),
(21, 'Baisakhi mela ', 'the-challenges-of-day-to-day-life-anywhere', 'the challenges of day to day life anywhere.the challenges of day to day life anywhere.the challenges of day to day life anywhere.the challenges of day to day life anywhere.the challenges of day to day life anywhere.the challenges of day to day life anywhere.', 1, 1, 1, 1, 3, 1, 'notice_image/notice_image5f1c9dbe000bd4.09544372s792ozpWGd.pdf', 1, '2020-07-26 00:00:00', '2020-07-26 00:00:00', '2020-07-26 00:00:00', '2020-07-25 15:01:50', '2020-07-25 15:18:41'),
(22, 'photography training', 'photography-training', 'the challenges of day to day life anywhere.the challenges of day to day life anywhere.the challenges of day to day life anywhere.the challenges of day to day life anywhere.the challenges of day to day life anywhere.the challenges of day to day life anywhere.', 1, 1, 1, 1, 2, 1, 'notice_image/notice_image5f3dc34024c0e6.25068724BMbd2kXq55.png', 1, '2020-07-26 00:00:00', '2020-07-26 00:00:00', '2020-07-26 00:00:00', '2020-07-25 15:04:03', '2020-08-19 18:26:40'),
(23, 'the challenges of day to day life anywhere.', 'the-challenges-of-day-to-day-life-anywhere', 'the challenges of day to day life anywhere.', 1, 1, 1, 1, 2, 1, 'notice_image/notice_image5f3dc35941e406.71055801Tkm0SM9Dgt.jpg', 1, '2020-07-26 00:00:00', '2020-07-26 00:00:00', '2020-07-26 00:00:00', '2020-07-25 15:09:30', '2020-08-19 18:27:05'),
(24, 'the challenges of day to day life anywhere.', 'the-challenges-of-day-to-day-life-anywhere', 'the challenges of day to day life anywhere.the challenges of day to day life anywhere.the challenges of day to day life anywhere.the challenges of day to day life anywhere.the challenges of day to day life anywhere.the challenges of day to day life anywhere.the challenges of day to day life anywhere.the challenges of day to day life anywhere.the challenges of day to day life anywhere.', 1, 1, 1, 1, 1, 3, 'notice_image/notice_image5f3dc37030a894.33075055EvSDfrMoq8.jpg', 1, '2020-07-30 00:00:00', '2020-07-22 00:00:00', '2020-07-23 00:00:00', '2020-07-30 07:21:28', '2020-08-19 18:27:28');

-- --------------------------------------------------------

--
-- Table structure for table `academic_sessions`
--

CREATE TABLE `academic_sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `academic_session` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `academic_sessions`
--

INSERT INTO `academic_sessions` (`id`, `academic_session`, `created_at`, `updated_at`) VALUES
(1, '2013-2014', NULL, NULL),
(2, '2014-2015', NULL, NULL),
(3, '2015-2016', NULL, NULL),
(4, '2016-2017', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_names`
--

CREATE TABLE `course_names` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_names`
--

INSERT INTO `course_names` (`id`, `course_name`, `created_at`, `updated_at`) VALUES
(1, 'B.Sc Engineering', NULL, NULL),
(2, 'B.sc Honour', NULL, NULL),
(3, 'BBA', NULL, NULL),
(4, 'BSS', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `faculty_id`, `name`, `dept_full_name`, `description`, `dept_image`, `created_at`, `updated_at`) VALUES
(1, 1, 'CSE', 'Computer Science and Engineering', 'Department of Computer Science & Engineering is one of the first two Departments of this University. The historical background of this Department is firmly related to the historical background of this university. In 25th October, 2003 this Department started its academic activities with a mission to produce highly qualified graduates in the field of computer technology, so that they can be- good researchers which will empower the science and technology sector of our country, good engineers to compete in the international market and good IT professionals to make this country as “Digital Bangladesh”.  The Department offers four year BSc. (Engg.) Program in Computer Science & Engineering designed with modern and advance course curriculum. At the same time the department is offering MSc (Engg.)/ MEngg. Program in CSE from 2012-13 session with advance topics related to the Computer Science as well as IT field. So that students graduating from this department have a balance of theory and practical skills to prepare', 'dept_image/dept_image5f1c830aee3a65.31886891ZZskdcC8D8.jpg', '2020-07-25 13:07:55', '2020-07-25 13:07:55'),
(2, 1, 'ICT', 'Information and Communication Technology', 'Information and Communication Technologyis one of the first two Departments of this University. The historical background of this Department is firmly related to the historical background of this university. In 25th October, 2003 this Department started its academic activities with a mission to produce highly qualified graduates in the field of computer technology, so that they can be- good researchers which will empower the science and technology sector of our country, good engineers to compete in the international market and good IT professionals to make this country as “Digital Bangladesh”.  The Department offers four year BSc. (Engg.) Program in Computer Science & Engineering designed with modern and advance course curriculum. At the same time the department is offering MSc (Engg.)/ MEngg. Program in CSE from 2012-13 session with advance topics related to the Computer Science as well as IT field. So that students graduating from this department have a balance of theory and practical skills to prepare', 'dept_image/dept_image5f1c83d4ab2128.20856200qifnWC7A7e.jpg', '2020-07-25 13:11:16', '2020-07-25 13:11:16'),
(3, 1, 'TE', 'Textile Engineering', 'Textile Engineering is one of the first two Departments of this University. The historical background of this Department is firmly related to the historical background of this university. In 25th October, 2003 this Department started its academic activities with a mission to produce highly qualified graduates in the field of computer technology, so that they can be- good researchers which will empower the science and technology sector of our country, good engineers to compete in the international market and good IT professionals to make this country as “Digital Bangladesh”.  The Department offers four year BSc. (Engg.) Program in Computer Science & Engineering designed with modern and advance course curriculum. At the same time the department is offering MSc (Engg.)/ MEngg. Program in CSE from 2012-13 session with advance topics related to the Computer Science as well as IT field. So that students graduating from this department have a balance of theory and practical skills to prepare', 'dept_image/dept_image5f1c84279cb498.69457399r3bvaZ04lb.jpg', '2020-07-25 13:12:39', '2020-07-25 13:12:39'),
(4, 2, 'ESRM', 'environmental Science and Resource Management', 'environmental Science and Resource Managementis one of the first two Departments of this University. The historical background of this Department is firmly related to the historical background of this university. In 25th October, 2003 this Department started its academic activities with a mission to produce highly qualified graduates in the field of computer technology, so that they can be- good researchers which will empower the science and technology sector of our country, good engineers to compete in the international market and good IT professionals to make this country as “Digital Bangladesh”.  The Department offers four year BSc. (Engg.) Program in Computer Science & Engineering designed with modern and advance course curriculum. At the same time the department is offering MSc (Engg.)/ MEngg. Program in CSE from 2012-13 session with advance topics related to the Computer Science as well as IT field. So that students graduating from this department have a balance of theory and practical skills to prepare', 'dept_image/dept_image5f1c8469926467.902144594fDFo0uDrv.jpg', '2020-07-25 13:13:45', '2020-07-25 13:13:45'),
(5, 2, 'CPS', 'Department Of Criminology And Police Science', 'Department of Criminology and Police Science (CPS) was introduced in Mawlana Bhashani Science and Technology University under the faculty of Life Science on 13 December 2003 with the approval of University Grant Commission (UGC). First Vice-chancellor of Mawlana Bhashani Science and Technology University (MBSTU) and the founding Chairman of the department, Late Professor Dr. Yusuf Sharif Ahmed Khan completed the admission process and the class was started of the first batch students from 1st June 2004 in 2003-04 session. The department started its journey with only 37 students of the first batch. It is one of the most updated and unique disciplines in context of Bangladesh as well as the sub-continent. The department is aimed to study crime, criminal behavior, criminal justice system and police investigation methods and techniques in a scientific manner. Major courses being studied at the Bachelor of Science (Honors) program include: Fundamentals of Criminology, Principles of Sociology, Police Studies, Security Practice and Management, Theories of Crime, Criminal Investigation: Methods and Techniques, Victimology, Forensic Science, Domestic and International Terrorism, Narcotics and Substance Abuse, Research Methods in Criminology and Criminal Justice, Police Information and Technology, Police Management and Administration, Police and Human Rights, Criminal Law and Procedure, Penal Code, Evidence Act, Crime Mapping etc. The course also includes Research Monograph, Thesis and Internship Project which are supervised by distinguished teachers from both inside and outside of the University collaborated with several government and private organizations. The seminar library of the department consists of around 700 books from both home and abroad publishers. More over the department also enriched with a forensic laboratory which is still under development includes fingerprint kit, footprint kit, close circuit television camera, digital camera etc. The academic curriculum is mainly based on criminological research and fieldwork which is taught by 07 full-time faculties and several adjunct faculties from different professional areas like Police personnel, lawyers, doctors, CID experts, detective experts etc. along with 11 officials. The medium of instruction is English. The department has already starts Masters in Science program in 2008-09 session. Currently the department of CPS consists of 350 students in 7 batches.  Aim and Objective of the Department  The department aims to take part in combating crime and eradicating disorder and chaos from the society. It also intends to study crime, criminal behavior, criminal justice system and police investigation methods and techniques in a scientific manner using social research method and forensic science. One of the major objectives is to produce skilled manpower to prevent and detect crime.  Future Plan of the Department  The department of CPS has future plan to introduce some courses like Professional Masters in Criminology and Police Science, Post Graduate Diploma (PGD) in Criminology and Police Science and Certificate Course thus the professional personnel like Police Officers, Detectives, Lawyers, Journalists and relevant experts can enhance their expertise and professionalism.', 'dept_image/dept_image5f3dca4fe2edd1.06678314QbyDlFSBUP.jpg', '2020-08-19 18:56:47', '2020-08-19 18:56:47'),
(6, 2, 'FTNS', 'Food Technology and Nutritional Science', 'Food Technology and Nutritional Science (FTNS) is an international discipline as technology based and food industry is a global business where Nutrition is the prime concern. Graduates in this discipline can travel the world and enjoy opportunities provided by national, trans-national and global food companies, as well as work in small to medium food enterprises and in different types of agro-processing industries. They can also play the role of national and international health and nutrition policies, panning and preventive and social active in the communities. Graduates from this department of MBSTU will be able to work in many parts of the world and well qualified by international standard which is our motto.  To meet the growing need of skilled personnel and face the challenges of global competition, knowledge about food process engineering like food chemistry, biochemistry, food microbiology, chemical engineering, food machinery and to study the nature and characteristics of foods as well as the nutritional aspects like community nutrition, public health nutrition, applied nutrition in various areas is very much essential. Food technology is the application of such knowledge to process, preserve, and package and distribution safe foods to consumers. The food industry is the largest sector of manufacturing industry in our countries, and its study enables graduates to enjoy a varied and fascinating career involved in areas such as quality and safety assurance, product and process development, regulatory affairs, research, manufacture and packaging, sales and marketing.  From this point of view this department started its journey from 02 November 2004 after approval of UGC, Bangladesh and academic activities started at 2005-2006 session with only 3 teachers and 50 students. But at present a group of 8 energetic, dynamic and talented teachers is created and now total number of students is about 250 with 9 official stuffs. It is also added that, there are many food scientist and highly qualified and skilled person come to teach our students.', 'dept_image/dept_image5f3dcaaf8e4ee5.51242292VMM9vSu03o.jpg', '2020-08-19 18:58:23', '2020-08-19 18:58:23'),
(7, 2, 'BGE', 'Biotechnology and Genetic Engineering', 'Welcome to the Department of Biotechnology and Genetic Engineering (BGE) at the faculty of Life Science, established in 2006. Over the years, it has grown to be most successful departments in the University with a wide range of research interest and a commitment to excellent teaching at all levels.  Our aim is to produce the academic, researcher, industrial and entrepreneurial leaders of tomorrow, together with the industrial processes and bioscientific advances they will employ. Our strategy is to work at the interfaces between Biology and Technology. The mission of this Department is to excel in providing quality higher education and internationally leading research in the field of Genetics and Biotechnology keeping in view the challenge of the twenty first century.  The department currently offers four-year Bachelor of Science (B.Sc.) in Biotechnology and Genetic Engineering. We also offer Master of Science (MS) by research. Now-a days, the undergraduate program attracts the best students of Bangladesh as it provides an excellent foundation for future professional and graduate education.', 'dept_image/dept_image5f3dcb5a394dc3.12413901wnibfxyU4e.jpg', '2020-08-19 19:01:14', '2020-08-19 19:01:14'),
(8, 2, 'PHARMACY', 'PHARMACY', 'The Department of Pharmacy at  Mawlana Bhashani Science and Technology University was established in 2013 and the academic program started in 3rd  May, 2014. The curriculum is designed to produce skilled and efficient professionals to manage pharmaceutical industries, hospital pharmacy, community pharmacy service and other government bodies related to health service .  Currently, the Department of Pharmacy , MBSTU is offering 200 credit courses in five years at undergraduate level which are instructed by Eleven (11) faculties . We have more than 200 students...', 'dept_image/dept_image5f3dcbc4714b08.35306808kWSrOiDT3H.jpg', '2020-08-19 19:03:00', '2020-08-19 19:03:00'),
(9, 2, 'BMB', 'Biochemistry and Molecular Biology', 'The department of Biochemistry and Molecular Biology (BMB) was founded with a noble goal: to develop for competitive professionals with excellent leadership, communication and teamwork skills who can contribute to an exceptional talent pool in nationally and also internationally. The department was established in 2013 and starts its journey with the worthy leadership of its founder Chairman Professor Dr. Md. Alauddin  and academic activities began from the session 2013-2014. The honorable Vice-Chancellor Professor Dr. Md. Alauddin inaugurated BMB department through an orientation program on 3rd May 2014 with newly admitted students.  Department of BMB offers Bachelor of Science (Honors) degree program for a period of 04 academic years (8 semesters). Total number of credits is 160 including 31 credits for laboratory course. The courses are designed thorough revision of leading national and foreign universities so that students can earn a broad background  about BMB. The course curriculum will help students in planning carriers i', 'dept_image/dept_image5f3dcbfcac1514.32826319fjZlNycrzw.jpg', '2020-08-19 19:03:56', '2020-08-19 19:03:56'),
(10, 3, 'BBA', 'Business Administration', 'Managers of the twenty-first century must be strategic thinkers and leaders with integrity so that they can inspire commitment in others. They must have the ability to manage changes and face challenges in a globally competitive world. In the future, business environment may be more uncertain and decision-making may become  much more complex with a diversity of opportunities and threats. There is a significant shortage of innovative and pro-active managers in Bangladesh. The Department of Business Administration of UODA is committed to educating and training carefully selected young men and women who can meet the demand for managerial excellence both in quality and quantity.   The Bachelor of Business Administration (BBA) Program aims at training the boys and girls for this act and providing clear understanding of the functioning of business from theoretical, practical, and managerial perspectives. The BBA degree is offered with a choice of majors in Finance, Accounting, Marketing, Management, HRM and MIS.  The university has initiated an active learning process that facilitates the business executives to gradually develop their conceptual, interpersonal and problem-solving skills. Within two years of intensive work for achieving theoretical knowledge and subsequently applying this in solving real world problems within the classroom, the students are fully equipped to work efficiently in different business situations.', 'dept_image/dept_image5f3dccbc67a2e4.008698498YEAtklpK7.jpg', '2020-08-19 19:07:08', '2020-08-19 19:07:08'),
(11, 4, 'Chemistry', 'Chemistry', 'The biology section which was a part of the Chemistry Department comprising both Botany and Zoology was made an independent Department in 1939. It was also shifted to a new building in the area. Subsequently, both the Botany and the Zoology sections were established as separate Departments in 1954. The Soil Science section was separated from the Chemistry Department in 1949 and raised to the status of an independent Department. Later, the Biochemistry Department also became independent of the Chemistry Department in the year 1957. In course of the next few years the Biochemistry Department also gave rise to the Department of Pharmacy as a new Department in 1963 and the Institute of Nutrition and Food Science in 1969. Later, the Department of Applied Chemistry was made independent of the Chemistry Department in 1972. Thus, over the years the expansion and rapid developments of the various branches of chemical sciences gave rise to the different disciplines of knowledge concomitant with the multifarious applications warranting the creation of separate Departments for the purpose of teaching and research on their own footing.', 'dept_image/dept_image5f3dcd37da6811.59438622lkWbzq7qcd.jpg', '2020-08-19 19:09:11', '2020-08-19 19:09:11'),
(12, 4, 'Physics', 'Physics', 'The biology section which was a part of the Chemistry Department comprising both Botany and Zoology was made an independent Department in 1939. It was also shifted to a new building in the area. Subsequently, both the Botany and the Zoology sections were established as separate Departments in 1954. The Soil Science section was separated from the Chemistry Department in 1949 and raised to the status of an independent Department. Later, the Biochemistry Department also became independent of the Chemistry Department in the year 1957. In course of the next few years the Biochemistry Department also gave rise to the Department of Pharmacy as a new Department in 1963 and the Institute of Nutrition and Food Science in 1969. Later, the Department of Applied Chemistry was made independent of the Chemistry Department in 1972. Thus, over the years the expansion and rapid developments of the various branches of chemical sciences gave rise to the different disciplines of knowledge concomitant with the multifarious applications warranting the creation of separate Departments for the purpose of teaching and research on their own footing.', 'dept_image/dept_image5f3dcd6de0ad82.129870052ILA3a6ka7.jpg', '2020-08-19 19:10:05', '2020-08-19 19:10:05'),
(13, 5, 'Economics', 'Economics', 'To create high-quality economics and development professionals in the domain of development, financial sector and research both at home and abroad the Department of Economics at the MawlanaBhashani Science and Technology University wended its way from the academic session 2012-13 under the faculty of Social Sciences with 53 students. The aim of the department is to advance economic discourse at the national and international level and to provide a lovesome broad-based education with a focus on professional development for students, in order to furnish them with the knowledge and skills necessary for leading the country in its quest for development.  Our strong commitment to our students is the principal characteristic that distinguishes our international, young and enthusiastic department. The Department is committe.', 'dept_image/dept_image5f3dcdcd6160b7.48792588VsqAoDfLAz.jpg', '2020-08-19 19:11:41', '2020-08-19 19:11:41');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Engineering', NULL, NULL),
(2, ' Life Science', NULL, NULL),
(3, ' Business Studies', NULL, NULL),
(4, 'Science', NULL, NULL),
(5, 'Social Science', NULL, NULL);

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
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2020_07_18_230057_create_sessions_table', 2),
(10, '2020_07_18_231716_create_departments_table', 3),
(11, '2020_07_18_231935_create_course_names_table', 4),
(12, '2020_07_19_070511_create_acamedic_notices_table', 5),
(13, '2020_07_19_073508_create_academic_sessions_table', 6),
(14, '2020_07_19_073936_create_academic_notices_table', 7),
(15, '2020_07_19_082014_create_faculties_table', 8),
(16, '2020_07_19_101536_create_users_table', 9),
(17, '2020_07_19_103545_create_academic_notices_table', 10),
(18, '2020_07_19_173055_create_academic_notices_table', 11),
(19, '2020_07_21_170606_create_notice_types_table', 12),
(20, '2020_07_21_182734_create_roles_table', 13),
(21, '2020_07_25_195523_create_abouts_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `notice_types`
--

CREATE TABLE `notice_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `notice_type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notice_types`
--

INSERT INTO `notice_types` (`id`, `notice_type_name`, `created_at`, `updated_at`) VALUES
(1, 'Academic Notice', NULL, NULL),
(2, 'Event Notice', NULL, NULL),
(3, 'Admission Notice', NULL, NULL),
(4, 'News', NULL, NULL);

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Student', NULL, NULL),
(3, 'Teacher', NULL, NULL),
(4, 'Office Stuff', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) NOT NULL DEFAULT 2,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faculty_id` bigint(20) NOT NULL,
  `academic_session_id` bigint(20) DEFAULT NULL,
  `course_name_id` bigint(20) NOT NULL,
  `department_id` bigint(20) NOT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified` tinyint(4) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `email_verified_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `role_id`, `telephone`, `faculty_id`, `academic_session_id`, `course_name_id`, `department_id`, `profile_image`, `email_verified`, `email_verified_at`, `email_verified_token`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'imama', 'imama@gmail.com', '$2y$10$gZz2gws/hf308URgblJ.h.PBIOuH.JdlInjStCZzL1lYvafEe3R9G', 2, '1212121212121', 1, 1, 1, 1, 'profile_images/profile_image5f3dbe1c06c3a9.73218018Iq8YFlMIOI.jpg', 1, '2020-07-20 14:22:39', 'yM4VESDNQj17rzXH9wuCLUZyxhhkqApA08uJ2QUpILcNsmOQNUug7SKOSe94', 0, NULL, '2020-07-20 14:22:39', '2020-08-19 18:04:44'),
(3, 'asa', 'asa@gmail.com', '$2y$10$tM.2LEc4xNXp/8AIYT4RbeLDLh1OmLejYVe7SGcL34R6v0rCYMCNW', 3, '1234567678676', 1, 2, 1, 3, 'profile_images/profile_image5f3dbde6618e76.68643277P7BrsJ9vdC.jpg', 1, '2020-07-21 12:46:25', '', 0, NULL, '2020-07-21 12:45:51', '2020-08-19 18:03:50'),
(4, 'charles dazel', 'admin@gmail.com', '$2y$10$1S.QW/cosC/Altydu2sEbutSDMAjGrd04aQeLDAImF54HSNJKhZxe', 1, '01743100626', 1, 1, 1, 1, 'profile_images/profile_image5f3dc38023c6c3.28075640q5BptnbdBc.jpg', 1, '2020-07-22 04:40:55', '', 0, NULL, '2020-07-22 04:40:06', '2020-08-19 18:27:44'),
(5, 'raihan', 'raihan@gmail.com', '$2y$10$bZeK7v5q6SKFzJZ.WBXYjOvMOu.BDXjLNc4YY/0WrHw2xQEQBB/.q', 2, '01756234625', 1, 2, 1, 1, 'profile_images/profile_image5f3dc430eca358.22202188u2To6lcJoL.jpg', 1, '2020-08-18 15:37:23', '', 0, NULL, '2020-08-18 15:35:36', '2020-08-19 18:30:40'),
(6, 'shamim ahmed', 'shamim@gmail.com', '$2y$10$.OcU4nVa4LcDeVOrRoFL/OFlJU/Bg0fA08WMPo/PN2N/SzLWr4dre', 3, '01756234634', 1, NULL, 1, 1, 'profile_images/profile_image5f3d98e97b35b8.85178939OvqFY7Tcnb.jpg', 1, '2020-08-19 15:26:31', '', 1, NULL, '2020-08-19 15:26:01', '2020-08-19 15:26:31'),
(7, 'shorif ahmed', 'shorif@gmail.com', '$2y$10$1xz6XLCbYGNrGm0SWNQeFe2KZM.Q3qbJ1t2G9zJQpdnaF8CKtKKl.', 4, '01756234655', 2, NULL, 2, 3, 'profile_images/profile_image5f3d99d1d99693.58427017yBYmggIHNN.jpg', 1, '2020-08-19 15:30:04', '', 1, NULL, '2020-08-19 15:29:53', '2020-08-19 15:30:04'),
(8, 'forhad', 'forhad@gmail.com', '$2y$10$VEb3v7ZV9nj2nDDEBLrDOOr0Iw.6a27/9Qq0k74Dg.DbXO5V.a77K', 2, '017562346523', 1, 2, 1, 3, 'profile_images/profile_image5f3daa558e9879.75339453Yd2T5jgvM3.jpg', 1, '2020-08-19 16:41:21', '', 1, NULL, '2020-08-19 16:40:21', '2020-08-19 16:41:21'),
(9, 'shmima', 'shmima@gmail.com', '$2y$10$/f2LlBK0RJh4kMsYu4o2A.dFYiaA/7auWnjlU8.YMaa.xwoCnV2gu', 2, '01927832732', 2, 2, 2, 4, 'profile_images/profile_image5f3daac3b77423.683811064x40tGaXQf.jpg', 1, '2020-08-19 16:42:21', '', 1, NULL, '2020-08-19 16:42:11', '2020-08-19 16:42:21'),
(10, 'jaivier', 'jaivier@gmail.com', '$2y$10$iRckzqLDvxTwtcbgX8Nl0.NQST.ZSlAoYwpKn0HN6iWHbVtAtVKiK', 2, '01927832734', 1, 1, 1, 1, 'profile_images/profile_image5f3dae458c65a8.67882111QlZsgSWQCF.jpg', 1, '2020-08-19 16:57:21', '', 1, NULL, '2020-08-19 16:57:09', '2020-08-19 16:57:21'),
(11, 'sunny', 'sunny@gmail.com', '$2y$10$6H1udBcXqffh6Jb46EgMkuTldpPPogX5S/oePCIaAt6y7CVc2MITK', 2, '01927832754', 1, 1, 1, 1, 'profile_images/profile_image5f3dc44b7b18e9.32394629NjPXNam5zV.jpg', 1, '2020-08-19 16:58:25', '', 0, NULL, '2020-08-19 16:58:14', '2020-08-19 18:31:07'),
(12, 'sefaly', 'sefaly@gmail.com', '$2y$10$7lQ77h2OjWcSr/6bGA.M8eaMfuW274BvFjYKMFyehW3.YfMtyMPMm', 2, '01927832565', 1, 3, 1, 1, 'profile_images/profile_image5f3dc418800cf1.08322081yQYKIX5Ah4.jpg', 1, '2020-08-19 16:59:50', '', 0, NULL, '2020-08-19 16:59:39', '2020-08-19 18:30:16'),
(13, 'forid', 'forid@gmail.com', '$2y$10$cnDsGCgG9LgRYzP5zay8Au0cwtMwqiDv5mblsr6QO96ldiTVSjnTe', 2, '017562343412', 2, 4, 2, 4, 'profile_images/profile_image5f3daf392268a2.813904251HTOoVwN8Z.jpg', 1, '2020-08-19 17:01:47', '', 1, NULL, '2020-08-19 17:01:13', '2020-08-19 17:01:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `academic_notices`
--
ALTER TABLE `academic_notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `academic_sessions`
--
ALTER TABLE `academic_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_names`
--
ALTER TABLE `course_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice_types`
--
ALTER TABLE `notice_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_telephone_unique` (`telephone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `academic_notices`
--
ALTER TABLE `academic_notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `academic_sessions`
--
ALTER TABLE `academic_sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course_names`
--
ALTER TABLE `course_names`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `notice_types`
--
ALTER TABLE `notice_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
