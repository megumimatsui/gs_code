-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2018 年 10 月 21 日 14:21
-- サーバのバージョン： 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_cl_table`
--

CREATE TABLE `gs_cl_table` (
  `id` int(12) NOT NULL,
  `company` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `depart` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `job` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `indate` date NOT NULL,
  `budget` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- テーブルのデータのダンプ `gs_cl_table`
--

INSERT INTO `gs_cl_table` (`id`, `company`, `depart`, `name`, `job`, `indate`, `budget`) VALUES
(39, '', '', '', '', '2018-10-12', 0),
(40, '', '', '', '', '2018-10-06', 0),
(41, '株式会社AAA', 'プランニング', '加藤', '', '0000-00-00', 300),
(42, '株式会社AAA', 'プランニング', '加藤', '', '0000-00-00', 300),
(43, '', '', '', '', '0000-00-00', 0),
(44, '株式会社AAA', 'プランニング', '加藤', '', '0000-00-00', 300);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_cl_table`
--
ALTER TABLE `gs_cl_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_cl_table`
--
ALTER TABLE `gs_cl_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
