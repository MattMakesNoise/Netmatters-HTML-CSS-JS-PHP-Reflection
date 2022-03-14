-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 21, 2022 at 02:15 PM
-- Server version: 8.0.28
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matthewj_nm_reflection`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int NOT NULL,
  `enq_name` varchar(100) NOT NULL,
  `enq_email` varchar(100) NOT NULL,
  `enq_tel` varchar(20) NOT NULL,
  `enq_subject` varchar(120) NOT NULL,
  `enq_message` varchar(300) NOT NULL,
  `enq_marketing` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `enq_name`, `enq_email`, `enq_tel`, `enq_subject`, `enq_message`, `enq_marketing`) VALUES
(1, 'Matthew Jones', 'matt@wearezipline.com', '792988707', 'hhh', 'jhvhvj', 0),
(2, 'Matthew Jones', 'matt@wearezipline.com', '792988707', 'hhh', 'hjhj', 0),
(3, 'Malky Malkerson', 'malky@malkersons.com', '1159878787', 'Word up!', 'Hi hello hi hi yo!', 0),
(4, 'Matthew Jones', 'matt@wearezipline.com', '792988707', 'hhh', 'vvjk', 0),
(5, 'Matthew Jones', 'matt@monk.com', '0', 'testing checkbox', 'test', 1),
(6, 'testing checkbox', 'ma@mama.ma', '12344', 'Box should appear as 0', 'as not checked', 0),
(7, 'bob', 'bob@bob.com', '792988707', 'Box should ap', 'fd', 1),
(8, 'Kief', 'kief@beef.cook', '1234', '1232121', '111', 1),
(9, '', '', '0', '', '', 0),
(10, '', '', '0', '', '', 0),
(11, 'Matthew Jones', 'mattmakesnoise@gmail.com', '792988707', '456456', '456456', 1),
(12, '', '', '0', '', '', 0),
(13, '', '', '0', '', '', 0),
(14, '', '', '0', '', '', 0),
(15, 'Matthew Jones', 'matthew.jones@netmatters-scs.com', '2147483647', 'Check for validation', 'Take 12000000', 0),
(16, 'Matthew Jones', 'matthew.jones@netmatters-scs.com', '2147483647', 'Is the phone number coming through', 'Cortrectly? ', 0),
(17, 'Matthew Jones', 'matthew.jones@netmatters-scs.com', '2147483647', 'Fingers crossed this phone ', 'regex works', 0),
(18, 'Matthew Jones', 'matthew.jones@netmatters-scs.com', '2147483647', 'Please can this ', 'phone number regex work now!', 0),
(19, 'Matthew Jones', 'matthew.jones@netmatters-scs.com', '2147483647', 'Should display', 'success message', 0),
(20, 'Matthew Jones', 'matthew.jones@netmatters-scs.com', '2147483647', 'Testing success', 'message', 0),
(21, 'Matthew Jones', 'matthew.jones@netmatters-scs.com', '2147483647', 'This should display', 'A success message', 1),
(22, 'Matthew Jones', 'matthew.jones@netmatters-scs.com', '2147483647', 'Please show the ', 'success message!', 1),
(23, 'Matt', 'mattmakesnoise@gmail.com', '1234404204', 'Please display the', 'fricking success message!', 1),
(24, 'Matthew Jones', 'matthew.jones@netmatters-scs.com', '2147483647', 'Do you ', 'still work?>', 1),
(25, 'Matthew Jones', 'matthew.jones@netmatters-scs.com', '07929887075', 'Testing the live database', 'is working?!', 1),
(26, 'Matthew Jones', 'matthew.jones@netmatters-scs.com', '+447929887057', 'Testing the live database', 'to see if it works', 1),
(27, 'Matthew Jones', 'matthew.jones@netmatters-scs.com', '+447929887057', 'Testing the live database', 'yggygygyuhhuuhhu', 1),
(28, 'Matthew Jones', 'matthew.jones@netmatters-scs.com', '+447929887071', 'Testing the live database', 'and the return url', 0),
(29, 'Matthew Jones', 'mattmakesnoise@gmail.com', '+447929887057', 'Testing the live database', 'for success', 0),
(30, 'Matt Jones', 'mattmakesnoise@gmail.com', '+447929887057', 'Testing the live database', 'asdzxfcgvhbnjkml', 0),
(31, 'scott hellings', 'scotthellings@gmail.com', '07912145888', 'adasdas', '12311', 0),
(32, 'Matt Jones', 'mattmakesnoise@gmail.com', '+447929887057', 'Testing the live database', 'To check if it still workskksksksksksk', 1),
(33, 'fdsdf', 'sdfsfd@test.gg', '07556365988', 'sfdfd', 'sfdsfd', 0),
(34, 'Toma', 'gfgd@fdfgd.hg', '07556998565', 'gfgfg', 'fgfgfgfg', 0),
(35, 'fgdfgd', 'fgddfg@ffgf.com', '+447553685699', 'dfggfd', 'fdfgdfgd', 0),
(36, '455465', 'dfggdffgdfgd@dd.dd', '07556985699', 'fdfgfg', 'gffggf', 0),
(37, 'scott', 'scott.hellings@netmatters-scs.com', '07123123123', 'testt', 'testtt', 0),
(38, 'sdffsd', 'fsdfds@ff.gg', '07556325698', 'fsdfsdfsdfsd', 'sfdsfd', 0),
(39, 'scott hellings', 'scott.hellings@netmatters-scs.com', '+447123123123', 'testt', 'awrawrawr', 0),
(40, '1111', '1@1.com', '07123456789', '12345', '12345', 0),
(41, '1111', '1@1.com', '07123456789', '12345', '12345', 0),
(42, 'Matt Jones', 'mattmakesnoise@gmail.com', '+447929887057', 'Testing the live database', 'and stuffs before submit', 0);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int NOT NULL,
  `news_name` varchar(100) NOT NULL,
  `news_email` varchar(100) NOT NULL,
  `news_marketing` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `news_name`, `news_email`, `news_marketing`) VALUES
(1, 'bob', 'bob@bob.com', 1),
(2, 'Matthew Jones', 'bob@bob.com', 0),
(3, 'Matt Jones', 'matthew.jones@netmatters-scs.com', 1),
(4, 'Matthew Jones', 'mattmakesnoise@gmail.com', 1),
(5, 'Matt Jones', 'mattmakesnoise@gmail.com', 1),
(6, 'bob', 'bob@bob.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_cards`
--

CREATE TABLE `news_cards` (
  `id` int NOT NULL,
  `card_type` text NOT NULL,
  `category_link` text NOT NULL,
  `category` text NOT NULL,
  `top_img` text NOT NULL,
  `top_img_alt` text NOT NULL,
  `title_class` text NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `read_more_link` text NOT NULL,
  `bottom_img` text NOT NULL,
  `bottom_img_alt` text NOT NULL,
  `posted_by` text NOT NULL,
  `date_posted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `news_cards`
--

INSERT INTO `news_cards` (`id`, `card_type`, `category_link`, `category`, `top_img`, `top_img_alt`, `title_class`, `title`, `text`, `read_more_link`, `bottom_img`, `bottom_img_alt`, `posted_by`, `date_posted`) VALUES
(1, 'scion-card', '\"#\" class=\"scion\"', 'news', 'img/congratulations-to-lloyd-OGgS.jpg', 'New Scion Graduate', 'scion-title', 'Congratulations to Lloyd Cox for Graduating t...', 'We are pleased to announce that after a year spent on our Netmatters Scion Coalition Scheme (...', '\"#\" class=\"scion-btn news-btn\"', 'img/netmatters-ltd-VXAv.png', 'Netmatters', 'Netmatters Ltd', '2021-05-10'),
(2, 'notable-card', '\"#\" class=\"notable\"', 'news', 'img/april-2021-notables-0C1u.jpg', 'New Scion Graduate', 'notable-title', 'April 2021 Notables', 'Every month we celebrate the most notable of the employees here at Netmatters. Each department he...', '\"#\" class=\"notable-btn news-btn\"', 'img/netmatters-ltd-VXAv.png', 'Netmatters', 'Netmatters Ltd', '2021-05-06'),
(3, 'job-card', '\"#\" class=\"job\"', 'careers', 'img/web-developer-r6Y3.jpg', 'Web Developer', 'job-title', 'Web Developer', 'Salary Range £25,000 - £45,000 (DOE) + Bonus Hours 40 hours per week, Monday - Flexible Opt...', '\"#\" class=\"job-btn news-btn\"', 'img/simon-wright-7UFt.jpg', 'Simon Wright', 'Simon Wright', '2021-05-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_cards`
--
ALTER TABLE `news_cards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news_cards`
--
ALTER TABLE `news_cards`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
