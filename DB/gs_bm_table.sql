-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2018 年 7 月 18 日 02:13
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE IF NOT EXISTS `gs_bm_table` (
`id` int(12) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci,
  `sex` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `age` text COLLATE utf8_unicode_ci NOT NULL,
  `area` text COLLATE utf8_unicode_ci,
  `indate` datetime NOT NULL,
  `age_check` int(12) NOT NULL,
  `date_check` int(12) NOT NULL,
  `place_check` int(12) NOT NULL,
  `comment_check` int(12) NOT NULL,
  `calc_check` int(12) NOT NULL,
  `memory_check` int(12) NOT NULL,
  `repeat_check` int(12) NOT NULL,
  `correct_check` int(12) NOT NULL,
  `fluent_check` int(12) NOT NULL,
  `total_score` int(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `name`, `email`, `sex`, `age`, `area`, `indate`, `age_check`, `date_check`, `place_check`, `comment_check`, `calc_check`, `memory_check`, `repeat_check`, `correct_check`, `fluent_check`, `total_score`) VALUES
(1, 'ジーズ太郎', '', '男性', '70代', '', '2018-05-30 22:16:37', 1, 3, 1, 2, 1, 1, 2, 3, 2, 16),
(2, 'ジーズ次郎', '', '男性', '70代', '', '2018-05-30 22:54:43', 1, 4, 2, 2, 1, 1, 3, 4, 3, 21),
(3, 'ジーズ三郎', '', '男性', '70代', '', '2018-05-30 22:56:33', 1, 4, 2, 3, 2, 2, 3, 4, 3, 24),
(4, 'ジーズ四郎', '', '男性', '60代', '', '2018-05-30 22:57:25', 1, 4, 2, 3, 2, 2, 5, 4, 4, 27),
(5, 'ジーズ五郎', '', '男性', '60代', '', '2018-05-30 22:58:00', 1, 4, 2, 3, 2, 2, 6, 4, 4, 28),
(6, 'ジーズ花子', '', '女性', '80代', '', '2018-05-30 23:15:30', 1, 1, 1, 1, 1, 1, 0, 2, 0, 8),
(7, 'ジーズ花', '', '女性', '70代', '', '2018-05-30 23:28:56', 1, 3, 2, 2, 1, 2, 3, 3, 3, 20),
(10, 'name', '', '男性', '40代', '', '2018-06-02 15:08:15', 0, 1, 1, 2, 1, 1, 2, 3, 3, 14),
(11, 'test', '', '男性', '80代', '', '2018-06-30 18:09:43', 1, 3, 0, 2, 1, 1, 3, 3, 3, 17),
(12, 'test', NULL, '男性', '70代', '東京都', '2018-07-18 02:05:13', 1, 1, 0, 0, 0, 0, 3, 0, 0, 5),
(13, 'test', NULL, '男性', '70代', '東京都', '2018-07-18 02:07:39', 1, 1, 0, 0, 0, 0, 3, 0, 0, 5),
(14, 'test', NULL, '男性', '70代', '東京都', '2018-07-18 02:08:10', 1, 1, 0, 0, 0, 0, 3, 0, 0, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
