-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2018 at 06:16 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crimedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `criminals`
--

CREATE TABLE `criminals` (
  `id` int(10) UNSIGNED NOT NULL,
  `criminals_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `criminals_age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `criminals_dob` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `criminals_gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `criminals_nid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `criminals_crime` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `criminals_blood` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `criminals_status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `criminals_regno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `criminals_regdate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `criminals`
--

INSERT INTO `criminals` (`id`, `criminals_name`, `criminals_age`, `criminals_dob`, `criminals_gender`, `criminals_nid`, `criminals_crime`, `criminals_blood`, `criminals_status`, `criminals_regno`, `criminals_regdate`, `created_at`, `updated_at`) VALUES
(1, 'Kamruzzaman Shoibal', '25', '25-12-1994', 'male', '1994asdqweasdffgd', 'Thievery', 'B+', 'Released', '3465', '1-1-1990', '2018-12-05 03:28:09', '2018-12-05 03:28:09');

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
(9, '2018_11_29_172924_create_news_table', 2),
(10, '2018_11_29_173137_create_mostwanted_table', 2),
(11, '2018_11_29_173214_create_criminals_table', 2),
(12, '2018_11_29_173246_create_whatweinvestigate_table', 2),
(13, '2018_11_29_173327_create_submitatip_table', 2),
(14, '2018_11_29_173403_create_services_table', 2),
(15, '2018_12_02_132849_create_newss_table', 3),
(16, '2018_12_02_132945_create_mostwanteds_table', 3),
(17, '2018_12_02_133049_create_criminalss_table', 3),
(18, '2018_12_02_133128_create_whatweinvestigates_table', 3),
(19, '2018_12_02_133157_create_submitatips_table', 3),
(20, '2018_12_02_133224_create_servicess_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `mostwanteds`
--

CREATE TABLE `mostwanteds` (
  `id` int(10) UNSIGNED NOT NULL,
  `mostwanted_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mostwanted_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mostwanted_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mostwanteds`
--

INSERT INTO `mostwanteds` (`id`, `mostwanted_title`, `mostwanted_name`, `mostwanted_image`, `created_at`, `updated_at`) VALUES
(4, 'Kidnappings & Missing Persons', 'MARK HIMEBAUGH', 'http://127.0.0.1/crimedata/public/uploads/mini.jpg', '2018-12-05 05:21:26', '2018-12-05 05:21:26');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `news_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_title`, `news_body`, `news_image`, `created_at`, `updated_at`) VALUES
(2, 'We are turning tide against violent crime in London, says Met chief', 'The Metropolitan police commissioner, Cressida Dick, has said her force has turned the tide against rising violent crime in London.\r\n\r\nShe claimed there had been large reductions in the stabbings of young people aged under 25 compared with last year and said that in order to cement the improvements, officers who had been moved across from traffic duty to tackle violent crime would not be going back.\r\n\r\n\r\nMet police push ahead with armed patrols despite backlash\r\n Read more\r\nDick told LBC radio on Tuesday: “I think we are beginning to see the tide turning in that we are putting more officers on the streets, we’re doing more stop and search, we’re seizing more knives, we’re seizing more firearms, we’re seizing more offensive weapons, we’re arresting more people for knife and gun crime.\r\n\r\n“And we’re beginning to see, after three years of knife crime increasing, gun crime increasing, they’re now not just levelling off but beginning to come down.”\r\n\r\n“I think that is through greater enforcement, fantastic work by my officers. That will begin to suppress and turn the tide.”', 'http://127.0.0.1/crimedata/public/uploads/3113.jpg', '2018-12-04 14:14:33', '2018-12-04 14:14:33'),
(3, 'DC officer says department is massaging the numbers when it comes to violent crime', 'In the District, the past three years have seen an ebb and flow of violence – with homicides skyrocketing in 2015, only to see a two-year dip, followed by another spike this year.\r\n\r\nBut a close look at DC police crime stats reveals that crimes like robberies and shootings continue to shrink in number.\r\n\r\nOne veteran DC police officer is blowing the whistle on what he calls years of corruption and crime reclassification by the department.\r\n\r\nphoto\r\n\"If it\'s a burglary and someone enters the home, but nothing was taken they\'ll have us re-classify it as Unlawful Entry which brings the crime down from a felony to a misdemeanor,” said the officer, who talked to FOX 5 on the condition of anonymity.Felonies are reported to the FBI – the Uniform Crime Report compiles the statistics, providing a national barometer of violent crime for the record.\r\n\r\n“What they do is, if the victim doesn\'t want to give up any information then they change it to ‘Injured Person to Hospital’,” the officer said.\r\n\r\nHe noted that the reclassification turns the shooting into an incident, not a crime.\r\n\r\nA search of DC police reports for a 19-month period up to April of 2018 showed that D.C. police had taken nearly 3,000 reports for ‘Injured Person to Hospital’.\r\n\r\nOf those reports, 61 were for gunshot wounds, and only 11 of those were self-inflicted.\r\n\r\nBut the classification infers that no crime had been committed.\r\n\r\nYet in some cases, there are shell casings that cover the street and, in others, victims telling police they’ve been shot by someone else. But because the shooting is now listed as an incident instead of a crime, many times, the officer says, the investigation ends there.\r\n\r\nThe officer says he has been on scenes where he’s been told to reclassify such incidents.\r\n\r\n“Yes, I\'ve been on the scene I know what it is, they say no we\'re going to make it this. And you know we\'re looking at each other like wow and we’re like ‘okay’,” he said. “There\'s no need to get discipline over that so we just go ahead and re-classify.”', 'http://127.0.0.1/crimedata/public/uploads/Still1203_00041_1543897662002_6481687_ver1.0_640_360.jpg', '2018-12-04 14:15:40', '2018-12-04 14:15:40');

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
-- Table structure for table `servicess`
--

CREATE TABLE `servicess` (
  `id` int(10) UNSIGNED NOT NULL,
  `services_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `services_body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `services_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `submitatips`
--

CREATE TABLE `submitatips` (
  `id` int(10) UNSIGNED NOT NULL,
  `submitatip_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submitatip_body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `submitatips`
--

INSERT INTO `submitatips` (`id`, `submitatip_title`, `submitatip_body`, `created_at`, `updated_at`) VALUES
(8, 'Crime Committed at Dhanmondi', 'Private car hits a pedestrian and runs away. \r\nCar Model: Toyota \r\nNumber: dhaka metro-5468714', '2018-12-05 02:36:54', '2018-12-05 02:36:54'),
(9, 'Kill threat', 'I was walking by the sideway at mirpur and heard a guy telling another guy that he is going to kill him. \r\nLocation: mirpur \r\nIt was night time so couldnt see the guys face properly', '2018-12-05 02:41:39', '2018-12-05 02:41:39'),
(10, 'hahahahaah', 'sdfsadfadfasdf', '2018-12-05 04:36:12', '2018-12-05 04:36:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'quazi', 'nafis.ahmedd@gmail.com', '$2y$10$Kk7pV.jZ2xcB/OfvEdNz3OW2TKMcD.JsAx0tvM4/wLxv1L3s9eM/e', 'nuprt3mt1Ua1fc9Fg11ScI1UOcHWncUiD5NTJ8BdrS73VMKBtoC2MhHEiUn8', '2018-11-23 09:29:30', '2018-11-23 09:29:30');

-- --------------------------------------------------------

--
-- Table structure for table `whatweinvestigates`
--

CREATE TABLE `whatweinvestigates` (
  `id` int(10) UNSIGNED NOT NULL,
  `whatweinvestigate_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatweinvestigate_body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatweinvestigate_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `criminals`
--
ALTER TABLE `criminals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mostwanteds`
--
ALTER TABLE `mostwanteds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `servicess`
--
ALTER TABLE `servicess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submitatips`
--
ALTER TABLE `submitatips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `whatweinvestigates`
--
ALTER TABLE `whatweinvestigates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `criminals`
--
ALTER TABLE `criminals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `mostwanteds`
--
ALTER TABLE `mostwanteds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `servicess`
--
ALTER TABLE `servicess`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `submitatips`
--
ALTER TABLE `submitatips`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `whatweinvestigates`
--
ALTER TABLE `whatweinvestigates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
