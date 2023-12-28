-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2023 at 05:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projecthb`
--

-- --------------------------------------------------------

--
-- Table structure for table `check_db`
--

CREATE TABLE `check_db` (
  `id` int(11) NOT NULL,
  `data` int(11) NOT NULL,
  `data1` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `check_db`
--

INSERT INTO `check_db` (`id`, `data`, `data1`) VALUES
(17, 0, 0),
(18, 10, 10),
(19, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `img_details`
--

CREATE TABLE `img_details` (
  `id` int(11) NOT NULL,
  `url` varchar(500) NOT NULL,
  `team_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `img_details`
--

INSERT INTO `img_details` (`id`, `url`, `team_name`) VALUES
(122, 'IMG-64e1e835cbc601.74012837.png', 'Freaks'),
(123, 'IMG-64e1e835cc7409.56040516.png', 'Fakers '),
(124, 'IMG-64e1ea28425fb7.44094774.png', 'Freaks'),
(125, 'IMG-64e1ea28434cd4.01374816.png', 'Fakers '),
(126, 'IMG-64e23e9b8e98f9.32467805.png', 'Fakers '),
(127, 'IMG-64e23e9b8f6bc1.13570475.png', 'Freaks '),
(128, 'IMG-64eaf8ee056162.25888887.png', 'FAKERS '),
(129, 'IMG-64eaf8ee060ff3.04740826.png', 'HUNKS '),
(130, 'IMG-64eafc47a1d4f4.91915522.png', 'FAKERS'),
(131, 'IMG-64eafc47a27623.52273550.png', 'HUNKS '),
(132, 'IMG-650c428359f8f9.34893778.png', 'FAKERS'),
(133, 'IMG-650c42835b0641.33484477.png', 'FREAKS'),
(134, 'IMG-650ce0d042ede1.48545343.png', 'FAKERS'),
(135, 'IMG-650ce0d04459c9.93472192.png', 'FREAKS'),
(136, 'IMG-650ceed8686ef2.07079105.png', 'FAKERS'),
(137, 'IMG-650ceed8695705.09697566.png', 'FREAKS'),
(138, 'IMG-650ceef9b259b6.15704464.png', 'FAKERS'),
(139, 'IMG-650ceef9b31727.63043288.png', 'FREAKS'),
(140, 'IMG-650cf1e1e0ef68.44233909.png', 'FAKERS'),
(141, 'IMG-650cf1e1e228e1.59565068.png', 'FREAKS'),
(142, 'IMG-650d23b97c5883.82617872.png', 'FREAKS'),
(143, 'IMG-650d23b97d3e24.90513436.png', 'FAKERS'),
(144, 'IMG-650d308bc15540.06064288.png', 'FAKERS'),
(145, 'IMG-650d308bc28613.02252196.png', 'FREAKS'),
(146, 'IMG-6527b225f32c34.64224791.png', 'FAKERS'),
(147, 'IMG-6527b22600fb80.02294962.png', 'HUNKS'),
(148, 'IMG-65390ee6493099.63977978.png', 'HUNKS '),
(149, 'IMG-65390ee64a4cf3.94956592.png', 'HUNKS'),
(150, 'IMG-653cd75c9d3535.59365382.png', 'HUNKS '),
(151, 'IMG-653cd75c9eb319.50828460.png', 'FREAKS'),
(152, 'IMG-653cdb69c9fa32.72349129.png', 'HUNKS '),
(153, 'IMG-653cdb69cbe228.38398318.png', 'FREAKS'),
(154, 'IMG-653d041f671e80.93652340.png', 'HUNKS '),
(155, 'IMG-653d041f688e12.06306329.png', 'FREAKS'),
(156, 'IMG-653ddf14b361b0.44041217.png', 'HUNKS '),
(157, 'IMG-653ddf14b73948.11187262.png', 'FREAKS'),
(158, 'IMG-6540d3e4d67169.78763645.png', 'HUNKS'),
(159, 'IMG-6540d3e4d7e4d5.86992155.png', 'FREAKS'),
(160, 'IMG-6541054521c8d3.62582482.png', 'FREAKS'),
(161, 'IMG-65410545236b44.22510181.png', 'FAKERS'),
(162, 'IMG-654513881d3da2.36151359.png', 'FREAKS'),
(163, 'IMG-654513881ed7c8.67066040.png', 'FAKERS'),
(164, 'IMG-654f46a904dc38.04510431.png', 'FAKERS'),
(165, 'IMG-654f46a9064426.38112456.png', 'FREAKS');

-- --------------------------------------------------------

--
-- Table structure for table `league_details`
--

CREATE TABLE `league_details` (
  `Id` int(100) NOT NULL,
  `league_name` varchar(500) NOT NULL,
  `league_img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `league_details`
--

INSERT INTO `league_details` (`Id`, `league_name`, `league_img`) VALUES
(44, 'HBCL', 'IMG-64c782f6f02be7.69366708.png'),
(45, 'HBCL', 'IMG-64c7830c5ce161.13399720.png'),
(46, 'HBCL', 'IMG-64c783b2a35b49.19173715.png'),
(47, 'HBCL', 'IMG-64c7850aa16b35.56469505.png'),
(48, 'HBCL', 'IMG-64e05e16ebeef5.13951941.png'),
(49, 'HBCL', 'IMG-64e060c681ac86.65660521.png'),
(50, 'HBCL', 'IMG-64e0641206f1c2.19525963.png'),
(51, 'HBCL', 'IMG-64e19e92ad7c75.36547605.png'),
(52, 'HBCL', 'IMG-64e1c4ad7309e7.10820424.png'),
(53, 'HBCL', 'IMG-64e1e835cae1d5.70921696.png'),
(54, 'HBCL', 'IMG-64e1ea28418cb6.80095573.png'),
(55, 'HBCL', 'IMG-64e23e9b8d68d2.45173744.png'),
(56, 'HBCL', 'IMG-64eaf8ee046575.59260291.png'),
(57, 'HBCL', 'IMG-64eafc47a13e81.90638937.png'),
(58, 'HBCL', 'IMG-650c42835899a8.39165994.png'),
(59, 'HBCL', 'IMG-650ce0d0413057.43587574.png'),
(60, 'HBCL', 'IMG-650ceed86749c5.36668224.png'),
(61, 'HBCL', 'IMG-650ceef9b18858.93829437.png'),
(62, 'HBCL', 'IMG-650cf1e1df5a04.10774908.png'),
(63, 'HBCL', 'IMG-650d23b97a6bd1.88129507.png'),
(64, 'HBCL', 'IMG-650d308bc032d2.25203703.png'),
(65, 'HBCL', 'IMG-6527b225f0a315.30627044.png'),
(66, 'HBCL', 'IMG-65390ee6480e83.89149714.png'),
(67, 'HBCL', 'IMG-653cd75c9b2a97.59576005.png'),
(68, 'HBCL', 'IMG-653cdb69c8b523.34262514.png'),
(69, 'HBCL', 'IMG-653d041f65a687.78321788.png'),
(70, 'HBCL', 'IMG-653ddf14afcf93.43627354.png'),
(71, 'HBCL', 'IMG-6540d3e4d4ec43.38665156.png'),
(72, 'HBCL', 'IMG-654105452085f1.76759310.png'),
(73, 'HBCL', 'IMG-654513881bcdf2.96652791.png'),
(74, 'HBCL', 'IMG-654f46a9036529.31427073.png');

-- --------------------------------------------------------

--
-- Table structure for table `match_details`
--

CREATE TABLE `match_details` (
  `match_id` int(11) NOT NULL,
  `team_1` varchar(11) NOT NULL,
  `team_2` varchar(11) NOT NULL,
  `league_name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `match_details`
--

INSERT INTO `match_details` (`match_id`, `team_1`, `team_2`, `league_name`) VALUES
(25, 'Freaks', 'Hunks ', 'HBCL'),
(26, 'FREAKS', 'FAKERS ', 'HBCL'),
(27, 'FREAKS', 'FAKERS ', 'HBCL'),
(28, 'FREAKS', 'FAKERS ', 'HBCL'),
(29, 'Freaks', 'Fakers ', 'HBCL'),
(30, 'Freaks', 'Fakers ', 'HBCL'),
(31, 'Freaks', 'Fakers ', 'HBCL'),
(32, 'Freaks', 'Fakers ', 'HBCL'),
(33, 'Fakers ', 'Freaks ', 'HBCL'),
(34, 'FAKERS ', 'HUNKS ', 'HBCL'),
(35, 'FAKERS', 'HUNKS ', 'HBCL'),
(36, 'FAKERS', 'FREAKS', 'HBCL'),
(37, 'FAKERS', 'FREAKS', 'HBCL'),
(38, 'FAKERS', 'FREAKS', 'HBCL'),
(39, 'FAKERS', 'FREAKS', 'HBCL'),
(40, 'FAKERS', 'FREAKS', 'HBCL'),
(41, 'FREAKS', 'FAKERS', 'HBCL'),
(42, 'FAKERS', 'FREAKS', 'HBCL'),
(43, 'FAKERS', 'HUNKS', 'HBCL'),
(44, 'HUNKS ', 'HUNKS', 'HBCL'),
(45, 'HUNKS ', 'FREAKS', 'HBCL'),
(46, 'HUNKS ', 'FREAKS', 'HBCL'),
(47, 'HUNKS ', 'FREAKS', 'HBCL'),
(48, 'HUNKS ', 'FREAKS', 'HBCL'),
(49, 'HUNKS', 'FREAKS', 'HBCL'),
(50, 'FREAKS', 'FAKERS', 'HBCL'),
(51, 'FREAKS', 'FAKERS', 'HBCL'),
(52, 'FAKERS', 'FREAKS', 'HBCL');

-- --------------------------------------------------------

--
-- Table structure for table `match_history`
--

CREATE TABLE `match_history` (
  `match_no` int(11) NOT NULL,
  `team1_name` text NOT NULL,
  `goals1` int(11) NOT NULL,
  `team2_name` varchar(500) NOT NULL,
  `goals2` int(11) NOT NULL,
  `attacks1` varchar(500) NOT NULL,
  `attacks2` varchar(500) NOT NULL,
  `possession1` int(11) NOT NULL,
  `possession2` int(11) NOT NULL,
  `field_throws1` varchar(500) NOT NULL,
  `field_throws2` varchar(500) NOT NULL,
  `turnover1` varchar(500) NOT NULL,
  `turnover2` varchar(500) NOT NULL,
  `penalties1` varchar(500) NOT NULL,
  `penalties2` varchar(500) NOT NULL,
  `gk1_t1_num` int(50) NOT NULL,
  `gk1_t1_name` text NOT NULL,
  `gk1_t1_saves` int(50) NOT NULL,
  `gk1_t1_attempts` int(11) NOT NULL,
  `gk2_t1_num` int(50) NOT NULL,
  `gk2_t1_name` text NOT NULL,
  `gk2_t1_saves` int(50) NOT NULL,
  `gk2_t1_attempts` int(50) NOT NULL,
  `gk3_t1_num` int(50) NOT NULL,
  `gk3_t1_name` text NOT NULL,
  `gk3_t1_saves` int(50) NOT NULL,
  `gk3_t1_attempts` int(50) NOT NULL,
  `p1_t1_num` int(11) NOT NULL,
  `p1_t1_name` varchar(50) NOT NULL,
  `p1_t1_pos` varchar(10) NOT NULL,
  `p1_t1_goals` int(50) NOT NULL,
  `p1_t1_attempts` int(50) NOT NULL,
  `p2_t1_num` int(11) NOT NULL,
  `p2_t1_name` text NOT NULL,
  `p2_t1_pos` text NOT NULL,
  `p2_t1_goals` int(50) NOT NULL,
  `p2_t1_attempts` int(50) NOT NULL,
  `p3_t1_num` int(11) NOT NULL,
  `p3_t1_name` varchar(50) NOT NULL,
  `p3_t1_pos` varchar(50) NOT NULL,
  `p3_t1_goals` int(50) NOT NULL,
  `p3_t1_attempts` int(50) NOT NULL,
  `p4_t1_num` int(11) NOT NULL,
  `p4_t1_name` varchar(50) NOT NULL,
  `p4_t1_pos` text NOT NULL,
  `p4_t1_goals` int(50) NOT NULL,
  `p4_t1_attempts` int(50) NOT NULL,
  `p5_t1_num` int(11) NOT NULL,
  `p5_t1_name` text NOT NULL,
  `p5_t1_pos` text NOT NULL,
  `p5_t1_goals` int(50) NOT NULL,
  `p5_t1_attempts` int(50) NOT NULL,
  `p6_t1_num` int(11) NOT NULL,
  `p6_t1_name` varchar(50) NOT NULL,
  `p6_t1_pos` text NOT NULL,
  `p6_t1_goals` int(50) NOT NULL,
  `p6_t1_attempts` int(50) NOT NULL,
  `p7_t1_num` int(11) NOT NULL,
  `p7_t1_name` varchar(50) NOT NULL,
  `p7_t1_pos` text NOT NULL,
  `p7_t1_goals` int(50) NOT NULL,
  `p7_t1_attempts` int(50) NOT NULL,
  `p8_t1_num` int(11) NOT NULL,
  `p8_t1_name` varchar(50) NOT NULL,
  `p8_t1_pos` text NOT NULL,
  `p8_t1_goals` int(50) NOT NULL,
  `p8_t1_attempts` int(50) NOT NULL,
  `p9_t1_num` int(11) NOT NULL,
  `p9_t1_name` varchar(50) NOT NULL,
  `p9_t1_pos` text NOT NULL,
  `p9_t1_goals` int(50) NOT NULL,
  `p9_t1_attempts` int(50) NOT NULL,
  `p10_t1_num` int(11) NOT NULL,
  `p10_t1_name` varchar(50) NOT NULL,
  `p10_t1_pos` text NOT NULL,
  `p10_t1_goals` int(50) NOT NULL,
  `p10_t1_attempts` int(50) NOT NULL,
  `p11_t1_num` int(11) NOT NULL,
  `p11_t1_name` varchar(50) NOT NULL,
  `p11_t1_pos` text NOT NULL,
  `p11_t1_goals` int(50) NOT NULL,
  `p11_t1_attempts` int(50) NOT NULL,
  `p12_t1_num` int(11) NOT NULL,
  `p12_t1_name` varchar(50) NOT NULL,
  `p12_t1_pos` text NOT NULL,
  `p12_t1_goals` int(50) NOT NULL,
  `p12_t1_attempts` int(50) NOT NULL,
  `gk1_t2_num` int(50) NOT NULL,
  `gk1_t2_name` varchar(50) NOT NULL,
  `gk1_t2_saves` int(50) NOT NULL,
  `gk1_t2_attempts` int(50) NOT NULL,
  `gk2_t2_num` int(11) NOT NULL,
  `gk2_t2_name` varchar(50) NOT NULL,
  `gk2_t2_saves` int(50) NOT NULL,
  `gk2_t2_attempts` int(50) NOT NULL,
  `gk3_t2_num` int(11) NOT NULL,
  `gk3_t2_name` varchar(50) NOT NULL,
  `gk3_t2_saves` int(50) NOT NULL,
  `gk3_t2_attempts` int(50) NOT NULL,
  `p1_t2_num` int(11) NOT NULL,
  `p1_t2_name` varchar(50) NOT NULL,
  `p1_t2_pos` varchar(50) NOT NULL,
  `p1_t2_goals` int(50) NOT NULL,
  `p1_t2_attempts` int(50) NOT NULL,
  `p2_t2_num` int(11) NOT NULL,
  `p2_t2_name` varchar(50) NOT NULL,
  `p2_t2_pos` varchar(50) NOT NULL,
  `p2_t2_goals` int(50) NOT NULL,
  `p2_t2_attempts` int(50) NOT NULL,
  `p3_t2_num` int(11) NOT NULL,
  `p3_t2_name` varchar(50) NOT NULL,
  `p3_t2_pos` int(11) NOT NULL,
  `p3_t2_goals` int(50) NOT NULL,
  `p3_t2_attempts` int(11) NOT NULL,
  `p4_t2_num` int(11) NOT NULL,
  `p4_t2_name` varchar(50) NOT NULL,
  `p4_t2_pos` varchar(100) NOT NULL,
  `p4_t2_goals` int(11) NOT NULL,
  `p4_t2_attempts` int(11) NOT NULL,
  `p5_t2_num` int(11) NOT NULL,
  `p5_t2_name` varchar(50) NOT NULL,
  `p5_t2_pos` varchar(50) NOT NULL,
  `p5_t2_goals` int(11) NOT NULL,
  `p5_t2_attempts` int(11) NOT NULL,
  `p6_t2_num` int(11) NOT NULL,
  `p6_t2_name` varchar(50) NOT NULL,
  `p6_t2_pos` varchar(11) NOT NULL,
  `p6_t2_goals` int(11) NOT NULL,
  `p6_t2_attempts` int(11) NOT NULL,
  `p7_t2_num` int(11) NOT NULL,
  `p7_t2_name` varchar(50) NOT NULL,
  `p7_t2_pos` varchar(50) NOT NULL,
  `p7_t2_goals` int(11) NOT NULL,
  `p7_t2_attempts` int(11) NOT NULL,
  `p8_t2_num` int(11) NOT NULL,
  `p8_t2_name` varchar(50) NOT NULL,
  `p8_t2_pos` varchar(50) NOT NULL,
  `p8_t2_goals` int(11) NOT NULL,
  `p8_t2_attempts` int(11) NOT NULL,
  `p9_t2_num` int(11) NOT NULL,
  `p9_t2_name` varchar(50) NOT NULL,
  `p9_t2_pos` varchar(10) NOT NULL,
  `p9_t2_goals` int(11) NOT NULL,
  `p9_t2_attempts` int(11) NOT NULL,
  `p10_t2_num` int(11) NOT NULL,
  `p10_t2_name` varchar(50) NOT NULL,
  `p10_t2_pos` varchar(10) NOT NULL,
  `p10_t2_goals` int(11) NOT NULL,
  `p10_t2_attempts` int(11) NOT NULL,
  `p11_t2_num` int(11) NOT NULL,
  `p11_t2_name` varchar(50) NOT NULL,
  `p11_t2_pos` text NOT NULL,
  `p11_t2_goals` int(11) NOT NULL,
  `p11_t2_attempts` int(11) NOT NULL,
  `p12_t2_num` int(11) NOT NULL,
  `p12_t2_name` varchar(50) NOT NULL,
  `p12_t2_pos` text NOT NULL,
  `p12_t2_goals` int(11) NOT NULL,
  `p12_t2_attempts` int(11) NOT NULL,
  `league_name` text NOT NULL,
  `host` text NOT NULL,
  `league_image` varchar(500) NOT NULL,
  `team1_img` varchar(500) NOT NULL,
  `team2_img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `match_history`
--

INSERT INTO `match_history` (`match_no`, `team1_name`, `goals1`, `team2_name`, `goals2`, `attacks1`, `attacks2`, `possession1`, `possession2`, `field_throws1`, `field_throws2`, `turnover1`, `turnover2`, `penalties1`, `penalties2`, `gk1_t1_num`, `gk1_t1_name`, `gk1_t1_saves`, `gk1_t1_attempts`, `gk2_t1_num`, `gk2_t1_name`, `gk2_t1_saves`, `gk2_t1_attempts`, `gk3_t1_num`, `gk3_t1_name`, `gk3_t1_saves`, `gk3_t1_attempts`, `p1_t1_num`, `p1_t1_name`, `p1_t1_pos`, `p1_t1_goals`, `p1_t1_attempts`, `p2_t1_num`, `p2_t1_name`, `p2_t1_pos`, `p2_t1_goals`, `p2_t1_attempts`, `p3_t1_num`, `p3_t1_name`, `p3_t1_pos`, `p3_t1_goals`, `p3_t1_attempts`, `p4_t1_num`, `p4_t1_name`, `p4_t1_pos`, `p4_t1_goals`, `p4_t1_attempts`, `p5_t1_num`, `p5_t1_name`, `p5_t1_pos`, `p5_t1_goals`, `p5_t1_attempts`, `p6_t1_num`, `p6_t1_name`, `p6_t1_pos`, `p6_t1_goals`, `p6_t1_attempts`, `p7_t1_num`, `p7_t1_name`, `p7_t1_pos`, `p7_t1_goals`, `p7_t1_attempts`, `p8_t1_num`, `p8_t1_name`, `p8_t1_pos`, `p8_t1_goals`, `p8_t1_attempts`, `p9_t1_num`, `p9_t1_name`, `p9_t1_pos`, `p9_t1_goals`, `p9_t1_attempts`, `p10_t1_num`, `p10_t1_name`, `p10_t1_pos`, `p10_t1_goals`, `p10_t1_attempts`, `p11_t1_num`, `p11_t1_name`, `p11_t1_pos`, `p11_t1_goals`, `p11_t1_attempts`, `p12_t1_num`, `p12_t1_name`, `p12_t1_pos`, `p12_t1_goals`, `p12_t1_attempts`, `gk1_t2_num`, `gk1_t2_name`, `gk1_t2_saves`, `gk1_t2_attempts`, `gk2_t2_num`, `gk2_t2_name`, `gk2_t2_saves`, `gk2_t2_attempts`, `gk3_t2_num`, `gk3_t2_name`, `gk3_t2_saves`, `gk3_t2_attempts`, `p1_t2_num`, `p1_t2_name`, `p1_t2_pos`, `p1_t2_goals`, `p1_t2_attempts`, `p2_t2_num`, `p2_t2_name`, `p2_t2_pos`, `p2_t2_goals`, `p2_t2_attempts`, `p3_t2_num`, `p3_t2_name`, `p3_t2_pos`, `p3_t2_goals`, `p3_t2_attempts`, `p4_t2_num`, `p4_t2_name`, `p4_t2_pos`, `p4_t2_goals`, `p4_t2_attempts`, `p5_t2_num`, `p5_t2_name`, `p5_t2_pos`, `p5_t2_goals`, `p5_t2_attempts`, `p6_t2_num`, `p6_t2_name`, `p6_t2_pos`, `p6_t2_goals`, `p6_t2_attempts`, `p7_t2_num`, `p7_t2_name`, `p7_t2_pos`, `p7_t2_goals`, `p7_t2_attempts`, `p8_t2_num`, `p8_t2_name`, `p8_t2_pos`, `p8_t2_goals`, `p8_t2_attempts`, `p9_t2_num`, `p9_t2_name`, `p9_t2_pos`, `p9_t2_goals`, `p9_t2_attempts`, `p10_t2_num`, `p10_t2_name`, `p10_t2_pos`, `p10_t2_goals`, `p10_t2_attempts`, `p11_t2_num`, `p11_t2_name`, `p11_t2_pos`, `p11_t2_goals`, `p11_t2_attempts`, `p12_t2_num`, `p12_t2_name`, `p12_t2_pos`, `p12_t2_goals`, `p12_t2_attempts`, `league_name`, `host`, `league_image`, `team1_img`, `team2_img`) VALUES
(33, 'FAKERS', 11, 'FREAKS', 13, '49.056603773585', '59.756097560976', 56, 44, '', '', '16', '13', '1.6', '1.3', 1, 'HARIAHARAN', 6, 10, 2, 'HARIHARAN', 5, 10, 3, 'HARIHARAN', 5, 12, 4, 'ROSHAN', 'PP', 5, 10, 5, 'SHADHANI', 'LB', 5, 9, 6, 'SASI', 'LB', 5, 7, 7, 'SAKTHI', 'RW', 4, 8, 8, 'SRIRAM', 'CB', 4, 10, 9, 'PHAVAN', 'RB', 5, 11, 10, 'GNANAVEL', 'RW', 3, 11, 11, 'AKASH', 'PP', 3, 9, 12, 'BAHAVATHY', 'LW', 4, 8, 13, 'HARIHARAN', 'LW', 4, 9, 14, 'PREM', 'LB', 5, 8, 15, 'KARTHICK ', 'RW', 5, 6, 1, 'PREM', 4, 7, 2, 'PREM', 4, 4, 3, 'PREM', 5, 7, 4, 'ROSHAN', 'PP', 5, 8, 5, 'SHADHANI', 'LB', 5, 6, 6, 'SASI', 0, 4, 6, 7, 'SAKTHI', 'RW', 5, 7, 8, 'KARTHICK', 'RW', 5, 8, 9, 'GNANAVEL', 'RW', 3, 8, 10, 'SRIRAM', 'CB', 4, 7, 11, 'PHAVAN', 'RB', 5, 6, 12, 'HARIHARAN', 'LW', 5, 7, 13, 'BAHAVATHY', 'LW', 2, 8, 14, 'PREM', 'RB', 3, 6, 15, 'AKASH', 'PP', 3, 5, 'HBCL', 'I.S.HARIHARAN', '', '', ''),
(26, 'FREAKS', 8, 'FAKERS', 15, '72.857142857143', '54.098360655738', 53, 47, '', '', '21', '6', '2.1', '0.6', 1, 'HARIAHARAN', 8, 10, 2, 'HARIHARAN', 8, 10, 3, 'HARIHARAN', 5, 9, 4, 'ROSHAN', 'PP', 4, 8, 5, 'SHADHANI', 'LB', 5, 10, 6, 'SASI', 'LB', 5, 5, 7, 'SAKTHI', 'RW', 5, 5, 8, 'SRIRAM', 'CB', 5, 5, 9, 'PHAVAN', 'RB', 4, 4, 10, 'GNANAVEL', 'RW', 3, 6, 11, 'AKASH', 'PP', 3, 5, 12, 'BAHAVATHY', 'LW', 3, 6, 13, 'HARIHARAN', 'LW', 6, 8, 14, 'PREM', 'LB', 5, 5, 15, 'KARTHICK ', 'RW', 3, 3, 1, 'PREM', 2, 2, 2, 'PREM', 2, 2, 3, 'PREM', 2, 2, 4, 'ROSHAN', 'PP', 2, 3, 5, 'SHADHANI', 'LB', 4, 6, 6, 'SASI', 0, 2, 4, 7, 'SAKTHI', 'RW', 2, 6, 8, 'KARTHICK', 'RW', 3, 4, 9, 'GNANAVEL', 'RW', 3, 5, 10, 'SRIRAM', 'CB', 3, 6, 11, 'PHAVAN', 'RB', 3, 5, 12, 'HARIHARAN', 'LW', 3, 5, 13, 'BAHAVATHY', 'LW', 3, 6, 14, 'PREM', 'RB', 2, 6, 15, 'AKASH', 'PP', 3, 5, 'HBCL', 'I.S.HARIHARAN', '', '', ''),
(44, 'HUNKS ', 31, 'HUNKS', 47, '37.80487804878', '62.666666666667', 52, 48, '', '', '12', '18', '1.2', '1.8', 1, 'HARIAHARAN', 4, 7, 2, 'HARIHARAN', 4, 9, 3, 'HARIHARAN', 4, 10, 4, 'ROSHAN', 'PP', 4, 11, 5, 'SHADHANI', 'LB', 4, 11, 6, 'SASI', 'LB', 2, 7, 7, 'SAKTHI', 'RW', 3, 8, 8, 'SRIRAM', 'CB', 4, 12, 9, 'PHAVAN', 'RB', 3, 8, 10, 'GNANAVEL', 'RW', 3, 4, 11, 'AKASH', 'PP', 2, 5, 12, 'BAHAVATHY', 'LW', 1, 3, 13, 'HARIHARAN', 'LW', 2, 6, 14, 'PREM', 'LB', 2, 5, 15, 'KARTHICK ', 'RW', 1, 2, 1, 'PREM', 6, 7, 2, 'PREM', 5, 8, 3, 'PREM', 7, 12, 4, 'ROSHAN', 'PP', 3, 5, 5, 'SHADHANI', 'LB', 3, 3, 6, 'SASI', 0, 4, 8, 7, 'SAKTHI', 'RW', 5, 8, 8, 'Hariharan', 'RW', 4, 7, 9, 'GNANAVEL', 'RW', 4, 6, 10, 'SRIRAM', 'CB', 4, 6, 11, 'PHAVAN', 'RB', 4, 6, 12, 'HARIHARAN', 'LW', 6, 8, 0, 'BAHAVATHY', 'LW', 3, 5, 14, 'PREM', 'RB', 2, 5, 15, 'AKASH', 'PP', 5, 8, 'HBCL', 'I.S.HARIHARAN', '', '', ''),
(45, 'HUNKS ', 3, 'FREAKS', 4, '25', '33.333333333333', 50, 50, '', '', '0', '0', '0', '0', 1, 'HARIAHARAN', 0, 1, 2, 'HARIHARAN', 0, 1, 3, 'HARIHARAN', 0, 1, 4, 'ROSHAN', 'PP', 1, 1, 5, 'SHADHANI', 'LB', 1, 1, 6, 'SASI', 'LB', 1, 1, 7, 'SAKTHI', 'RW', 0, 1, 8, 'SRIRAM', 'CB', 0, 1, 9, 'PHAVAN', 'RB', 0, 1, 10, 'GNANAVEL', 'RW', 0, 1, 11, 'AKASH', 'PP', 0, 1, 12, 'BAHAVATHY', 'LW', 0, 1, 13, 'HARIHARAN', 'LW', 0, 1, 14, 'PREM', 'LB', 0, 1, 15, 'KARTHICK ', 'RW', 0, 1, 1, 'PREM', 0, 1, 2, 'PREM', 0, 1, 3, 'PREM', 0, 1, 4, 'ROSHAN', 'PP', 1, 1, 5, 'SHADHANI', 'LB', 1, 1, 6, 'SASI', 0, 1, 1, 7, 'SAKTHI', 'RW', 1, 1, 8, 'Hariharan', 'RW', 0, 1, 9, 'GNANAVEL', 'RW', 0, 1, 10, 'SRIRAM', 'CB', 0, 1, 11, 'PHAVAN', 'RB', 0, 1, 12, 'HARIHARAN', 'LW', 0, 1, 12, 'BAHAVATHY', 'LW', 0, 1, 14, 'PREM', 'RB', 0, 1, 15, 'AKASH', 'PP', 0, 1, 'HBCL', 'I.S.HARIHARAN', '', 'IMG-653ddf14b361b0.44041217.png', 'IMG-653ddf14b73948.11187262.png'),
(45, 'HUNKS', 3, 'FREAKS', 3, '20', '20', 50, 50, '', '', '0', '0', '0', '0', 1, 'HARIAHARAN', 0, 1, 2, 'HARIHARAN', 0, 1, 3, 'HARIHARAN', 0, 1, 4, 'ROSHAN', 'PP', 1, 3, 5, 'SHADHANI', 'LB', 1, 2, 6, 'SASI', 'LB', 1, 1, 7, 'SAKTHI', 'RW', 0, 1, 8, 'SRIRAM', 'CB', 0, 1, 9, 'PHAVAN', 'RB', 0, 1, 10, 'GNANAVEL', 'RW', 0, 1, 11, 'AKASH', 'PP', 0, 1, 12, 'BAHAVATHY', 'LW', 0, 1, 13, 'HARIHARAN', 'LW', 0, 1, 14, 'PREM', 'LB', 0, 1, 15, 'KARTHICK ', 'RW', 0, 1, 1, 'PREM', 0, 1, 2, 'PREM', 0, 1, 3, 'PREM', 0, 1, 4, 'ROSHAN', 'PP', 1, 3, 5, 'SHADHANI', 'LB', 1, 2, 6, 'SASI', 0, 1, 1, 7, 'SAKTHI', 'RW', 0, 1, 8, 'KARTHICK', 'RW', 0, 1, 9, 'GNANAVEL', 'RW', 0, 1, 10, 'SRIRAM', 'CB', 0, 1, 11, 'PHAVAN', 'RB', 0, 1, 12, 'HARIHARAN', 'LW', 0, 1, 13, 'BAHAVATHY', 'LW', 0, 1, 14, 'PREM', 'RB', 0, 1, 15, 'AKASH', 'PP', 0, 1, 'HBCL', 'I.S.HARIHARAN', '', 'IMG-6540d3e4d67169.78763645.png', 'IMG-6540d3e4d7e4d5.86992155.png'),
(26, 'FREAKS', 5, 'FAKERS', 7, '15.151515151515', '26.923076923077', 56, 44, '', '', '0', '0', '0', '0', 1, 'HARIAHARAN', 0, 2, 2, 'HARIHARAN', 0, 3, 3, 'HARIHARAN', 0, 2, 4, 'ROSHAN', 'PP', 1, 3, 5, 'SHADHANI', 'LB', 1, 5, 6, 'SASI', 'LB', 1, 3, 7, 'SAKTHI', 'RW', 1, 3, 8, 'SRIRAM', 'CB', 1, 4, 9, 'PHAVAN', 'RB', 0, 4, 10, 'GNANAVEL', 'RW', 0, 2, 11, 'AKASH', 'PP', 0, 2, 12, 'BAHAVATHY', 'LW', 0, 2, 13, 'HARIHARAN', 'LW', 0, 2, 14, 'PREM', 'LB', 0, 2, 15, 'KARTHICK ', 'RW', 0, 1, 1, 'PREM', 0, 3, 2, 'PREM', 0, 2, 3, 'PREM', 0, 2, 4, 'ROSHAN', 'PP', 2, 4, 5, 'SHADHANI', 'LB', 2, 5, 6, 'SASI', 0, 3, 4, 7, 'SAKTHI', 'RW', 0, 4, 8, 'KARTHICK', 'RW', 0, 1, 9, 'GNANAVEL', 'RW', 0, 1, 10, 'SRIRAM', 'CB', 0, 1, 11, 'PHAVAN', 'RB', 0, 1, 12, 'HARIHARAN', 'LW', 0, 1, 13, 'BAHAVATHY', 'LW', 0, 1, 14, 'PREM', 'RB', 0, 2, 15, 'AKASH', 'PP', 0, 1, 'HBCL', 'I.S.HARIHARAN', '', 'IMG-6541054521c8d3.62582482.png', 'IMG-65410545236b44.22510181.png'),
(33, 'FAKERS', 3, 'FREAKS', 4, '25', '30.769230769231', 48, 52, '', '', '0', '0', '0', '0', 1, 'HARIAHARAN', 0, 1, 2, 'HARIHARAN', 0, 1, 3, 'HARIHARAN', 0, 1, 4, 'ROSHAN', 'PP', 0, 1, 5, 'SHADHANI', 'LB', 1, 1, 6, 'SASI', 'LB', 1, 1, 7, 'SAKTHI', 'RW', 1, 1, 8, 'SRIRAM', 'CB', 0, 1, 9, 'PHAVAN', 'RB', 0, 1, 10, 'GNANAVEL', 'RW', 0, 1, 11, 'AKASH', 'PP', 0, 1, 12, 'BAHAVATHY', 'LW', 0, 1, 13, 'HARIHARAN', 'LW', 0, 1, 14, 'PREM', 'LB', 0, 1, 15, 'KARTHICK ', 'RW', 0, 1, 1, 'PREM', 0, 1, 2, 'PREM', 0, 1, 3, 'PREM', 0, 1, 4, 'ROSHAN', 'PP', 0, 1, 5, 'SHADHANI', 'LB', 0, 1, 6, 'SASI', 0, 0, 1, 7, 'SAKTHI', 'RW', 0, 1, 8, 'KARTHICK', 'RW', 0, 1, 9, 'GNANAVEL', 'RW', 1, 1, 10, 'SARAVANAN', 'CB', 1, 2, 11, 'PHAVAN', 'RB', 1, 1, 12, 'HARIHARAN', 'LW', 1, 1, 13, 'BAHAVATHY', 'LW', 0, 1, 14, 'PREM', 'RB', 0, 1, 15, 'AKASH', 'PP', 0, 1, 'HBCL', 'I.S.HARIHARAN', '', 'IMG-654f46a904dc38.04510431.png', 'IMG-654f46a9064426.38112456.png');

-- --------------------------------------------------------

--
-- Table structure for table `player_details`
--

CREATE TABLE `player_details` (
  `id` int(11) NOT NULL,
  `Player_Name` varchar(500) NOT NULL,
  `Player_No` varchar(500) NOT NULL,
  `Player_pos` varchar(500) NOT NULL,
  `Match_id` varchar(500) NOT NULL,
  `team_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `player_details`
--

INSERT INTO `player_details` (`id`, `Player_Name`, `Player_No`, `Player_pos`, `Match_id`, `team_name`) VALUES
(923, 'HARIHARAN', '1', 'GK', '25', 'Freaks'),
(924, 'PREMKUMAR ', '2', 'GK', '25', 'Freaks'),
(925, 'NAGAARJUNA ', '3', 'GK', '25', 'Freaks'),
(926, 'HARIHARAN', '1', 'GK', '25', 'Freaks'),
(927, 'PREMKUMAR', '2', 'GK', '25', 'Freaks'),
(928, 'NAGARJUNA', '3', 'GK', '25', 'Freaks'),
(929, 'HARIHARAN', '1', 'PP', '25', 'Freaks'),
(930, 'HARIHARAN', '2', 'WB', '25', 'Freaks'),
(931, 'HARIHARAN', '3', 'RW', '25', 'Freaks'),
(932, 'HARIHARAN', '4', 'CB', '25', 'Freaks'),
(933, 'HARIHARAN', '5', 'CB', '25', 'Freaks'),
(934, 'HARIHARAN', '6', 'LW', '25', 'Freaks'),
(935, 'HARIHARAN', '7', 'LB', '25', 'Freaks'),
(936, 'HARIHARAN', '8', 'LW', '25', 'Freaks'),
(937, 'HARIHARAN', '9', 'LB', '25', 'Freaks'),
(938, 'HARIHARAN', '10', 'RW', '25', 'Freaks'),
(939, 'HARIHARAN', '11', 'CB', '25', 'Freaks'),
(940, 'HARIHARAN', '12', 'CB', '25', 'Freaks'),
(941, 'ROSHAN', '1', 'PP', '25', 'Hunks '),
(942, 'ROSHAN ', '2', 'PP', '25', 'Hunks '),
(943, 'ROSHAN ', '3', 'PP', '25', 'Hunks '),
(944, 'ROSHAN', '4', 'PP', '25', 'Hunks '),
(945, 'ROSHAN ', '5', 'PP', '25', 'Hunks '),
(946, 'ROSHAN', '6', 'PP', '25', 'Hunks '),
(947, 'ROSHAN', '7', 'PP', '25', 'Hunks '),
(948, 'ROSHAN', '8', 'PP', '25', 'Hunks '),
(949, 'ROSHAN', '9', 'PP', '25', 'Hunks '),
(950, 'ROSHAN', '10', 'PP', '25', 'Hunks '),
(951, 'ROSHAN', '11', 'PP', '25', 'Hunks '),
(952, 'ROSHAN', '12', 'PP', '25', 'Hunks '),
(953, 'HARIHARAN', '1', 'GK', '26', 'FREAKS'),
(954, 'PREMKUMAR', '2', 'GK', '26', 'FREAKS'),
(955, 'NAGARJUNA ', '3', 'GK', '26', 'FREAKS'),
(956, 'NITHIN ', '1', 'GK', '26', 'FREAKS'),
(957, 'PREMKUMAR', '2', 'GK', '26', 'FREAKS'),
(958, 'PREMKUMAR ', '3', 'GK', '26', 'FREAKS'),
(959, 'HARIHARAN', '1', 'PP', '26', 'FREAKS'),
(960, 'HARIHARAN', '2', 'WB', '26', 'FREAKS'),
(961, 'HARIHARAN', '3', 'RW', '26', 'FREAKS'),
(962, 'HARIHARAN', '4', 'CB', '26', 'FREAKS'),
(963, 'HARIHARAN', '5', 'CB', '26', 'FREAKS'),
(964, 'HARIHARAN', '6', 'LW', '26', 'FREAKS'),
(965, 'HARIHARAN', '7', 'LB', '26', 'FREAKS'),
(966, 'HARIHARAN', '8', 'LW', '26', 'FREAKS'),
(967, 'HARIHARAN', '9', 'LB', '26', 'FREAKS'),
(968, 'HARIHARAN', '10', 'RW', '26', 'FREAKS'),
(969, 'HARIHARAN', '11', 'CB', '26', 'FREAKS'),
(970, 'HARIHARAN', '12', 'CB', '26', 'FREAKS'),
(971, 'ROSHAN', '1', 'PP', '26', 'FAKERS '),
(972, 'ROSHAN ', '2', 'PP', '26', 'FAKERS '),
(973, 'ROSHAN ', '3', 'PP', '26', 'FAKERS '),
(974, 'ROSHAN', '4', 'PP', '26', 'FAKERS '),
(975, 'ROSHAN ', '5', 'PP', '26', 'FAKERS '),
(976, 'ROSHAN', '6', 'PP', '26', 'FAKERS '),
(977, 'ROSHAN', '7', 'PP', '26', 'FAKERS '),
(978, 'ROSHAN', '8', 'PP', '26', 'FAKERS '),
(979, 'ROSHAN', '9', 'PP', '26', 'FAKERS '),
(980, 'ROSHAN', '10', 'PP', '26', 'FAKERS '),
(981, 'ROSHAN', '11', 'PP', '26', 'FAKERS '),
(982, 'ROSHAN', '12', 'PP', '26', 'FAKERS '),
(983, 'HARIHARAN', '1', 'GK', '26', 'FREAKS'),
(984, 'PREMKUMAR', '2', 'GK', '26', 'FREAKS'),
(985, 'NAGARJUNA ', '3', 'GK', '26', 'FREAKS'),
(986, 'NITHIN ', '1', 'GK', '26', 'FREAKS'),
(987, 'PREMKUMAR', '2', 'GK', '26', 'FREAKS'),
(988, 'PREMKUMAR ', '3', 'GK', '26', 'FREAKS'),
(989, 'HARIHARAN', '1', 'PP', '26', 'FREAKS'),
(990, 'HARIHARAN', '2', 'WB', '26', 'FREAKS'),
(991, 'HARIHARAN', '3', 'RW', '26', 'FREAKS'),
(992, 'HARIHARAN', '4', 'CB', '26', 'FREAKS'),
(993, 'HARIHARAN', '5', 'CB', '26', 'FREAKS'),
(994, 'HARIHARAN', '6', 'LW', '26', 'FREAKS'),
(995, 'HARIHARAN', '7', 'LB', '26', 'FREAKS'),
(996, 'HARIHARAN', '8', 'LW', '26', 'FREAKS'),
(997, 'HARIHARAN', '9', 'LB', '26', 'FREAKS'),
(998, 'HARIHARAN', '10', 'RW', '26', 'FREAKS'),
(999, 'HARIHARAN', '11', 'CB', '26', 'FREAKS'),
(1000, 'HARIHARAN', '12', 'CB', '26', 'FREAKS'),
(1001, 'ROSHAN', '1', 'PP', '26', 'FAKERS '),
(1002, 'ROSHAN ', '2', 'PP', '26', 'FAKERS '),
(1003, 'ROSHAN ', '3', 'PP', '26', 'FAKERS '),
(1004, 'ROSHAN', '4', 'PP', '26', 'FAKERS '),
(1005, 'ROSHAN ', '5', 'PP', '26', 'FAKERS '),
(1006, 'ROSHAN', '6', 'PP', '26', 'FAKERS '),
(1007, 'ROSHAN', '7', 'PP', '26', 'FAKERS '),
(1008, 'ROSHAN', '8', 'PP', '26', 'FAKERS '),
(1009, 'ROSHAN', '9', 'PP', '26', 'FAKERS '),
(1010, 'ROSHAN', '10', 'PP', '26', 'FAKERS '),
(1011, 'ROSHAN', '11', 'PP', '26', 'FAKERS '),
(1012, 'ROSHAN', '12', 'PP', '26', 'FAKERS '),
(1013, 'HARIHARAN', '1', 'GK', '26', 'FREAKS'),
(1014, 'PREMKUMAR ', '2', 'GK', '26', 'FREAKS'),
(1015, 'NAGAARJUNA ', '3', 'GK', '26', 'FREAKS'),
(1016, 'NITHIN ', '1', 'GK', '26', 'FREAKS'),
(1017, 'PREMKUMAR', '2', 'GK', '26', 'FREAKS'),
(1018, 'PREMKUMAR ', '3', 'GK', '26', 'FREAKS'),
(1019, 'HARIHARAN', '1', 'PP', '26', 'FREAKS'),
(1020, 'HARIHARAN', '2', 'WB', '26', 'FREAKS'),
(1021, 'HARIHARAN', '3', 'RW', '26', 'FREAKS'),
(1022, 'HARIHARAN', '4', 'CB', '26', 'FREAKS'),
(1023, 'HARIHARAN', '5', 'CB', '26', 'FREAKS'),
(1024, 'HARIHARAN', '6', 'LW', '26', 'FREAKS'),
(1025, 'HARIHARAN', '7', 'LB', '26', 'FREAKS'),
(1026, 'HARIHARAN', '8', 'LW', '26', 'FREAKS'),
(1027, 'HARIHARAN', '9', 'LB', '26', 'FREAKS'),
(1028, 'HARIHARAN', '10', 'RW', '26', 'FREAKS'),
(1029, 'HARIHARAN', '11', 'CB', '26', 'FREAKS'),
(1030, 'HARIHARAN', '12', 'CB', '26', 'FREAKS'),
(1031, 'ROSHAN', '1', 'PP', '26', 'FAKERS '),
(1032, 'ROSHAN ', '2', 'PP', '26', 'FAKERS '),
(1033, 'ROSHAN ', '3', 'PP', '26', 'FAKERS '),
(1034, 'ROSHAN', '4', 'PP', '26', 'FAKERS '),
(1035, 'ROSHAN ', '5', 'PP', '26', 'FAKERS '),
(1036, 'ROSHAN', '6', 'PP', '26', 'FAKERS '),
(1037, 'ROSHAN', '7', 'PP', '26', 'FAKERS '),
(1038, 'ROSHAN', '8', 'PP', '26', 'FAKERS '),
(1039, 'ROSHAN', '9', 'PP', '26', 'FAKERS '),
(1040, 'ROSHAN', '10', 'PP', '26', 'FAKERS '),
(1041, 'ROSHAN', '11', 'PP', '26', 'FAKERS '),
(1042, 'ROSHAN', '12', 'PP', '26', 'FAKERS '),
(1043, 'HARIHARAN', '1', 'GK', '26', 'Freaks'),
(1044, 'PREMKUMAR ', '2', 'GK', '26', 'Freaks'),
(1045, 'NAGAARJUNA ', '3', 'GK', '26', 'Freaks'),
(1046, 'NITHIN ', '1', 'GK', '26', 'Freaks'),
(1047, 'PREMKUMAR', '2', 'GK', '26', 'Freaks'),
(1048, 'PREMKUMAR ', '3', 'GK', '26', 'Freaks'),
(1049, 'HARIHARAN', '1', 'PP', '26', 'Freaks'),
(1050, 'HARIHARAN', '2', 'WB', '26', 'Freaks'),
(1051, 'HARIHARAN', '3', 'RW', '26', 'Freaks'),
(1052, 'HARIHARAN', '4', 'CB', '26', 'Freaks'),
(1053, 'HARIHARAN', '5', 'CB', '26', 'Freaks'),
(1054, 'HARIHARAN', '6', 'LW', '26', 'Freaks'),
(1055, 'HARIHARAN', '7', 'LB', '26', 'Freaks'),
(1056, 'HARIHARAN', '8', 'LW', '26', 'Freaks'),
(1057, 'HARIHARAN', '9', 'LB', '26', 'Freaks'),
(1058, 'HARIHARAN', '10', 'RW', '26', 'Freaks'),
(1059, 'HARIHARAN', '11', 'CB', '26', 'Freaks'),
(1060, 'HARIHARAN', '12', 'CB', '26', 'Freaks'),
(1061, 'ROSHAN', '1', 'PP', '26', 'Fakers '),
(1062, 'ROSHAN ', '2', 'PP', '26', 'Fakers '),
(1063, 'ROSHAN ', '3', 'PP', '26', 'Fakers '),
(1064, 'ROSHAN', '4', 'PP', '26', 'Fakers '),
(1065, 'ROSHAN ', '5', 'PP', '26', 'Fakers '),
(1066, 'ROSHAN', '6', 'PP', '26', 'Fakers '),
(1067, 'ROSHAN', '7', 'PP', '26', 'Fakers '),
(1068, 'ROSHAN', '8', 'PP', '26', 'Fakers '),
(1069, 'ROSHAN', '9', 'PP', '26', 'Fakers '),
(1070, 'ROSHAN', '10', 'PP', '26', 'Fakers '),
(1071, 'ROSHAN', '11', 'PP', '26', 'Fakers '),
(1072, 'ROSHAN', '12', 'PP', '26', 'Fakers '),
(1073, 'HARIHARAN', '1', 'GK', '26', 'Freaks'),
(1074, 'PREMKUMAR ', '2', 'GK', '26', 'Freaks'),
(1075, 'NAGAARJUNA ', '3', 'GK', '26', 'Freaks'),
(1076, 'NITHIN ', '1', 'GK', '26', 'Freaks'),
(1077, 'PREMKUMAR', '2', 'GK', '26', 'Freaks'),
(1078, 'PREMKUMAR ', '3', 'GK', '26', 'Freaks'),
(1079, 'HARIHARAN', '1', 'PP', '26', 'Freaks'),
(1080, 'HARIHARAN', '2', 'WB', '26', 'Freaks'),
(1081, 'HARIHARAN', '3', 'RW', '26', 'Freaks'),
(1082, 'HARIHARAN', '4', 'CB', '26', 'Freaks'),
(1083, 'HARIHARAN', '5', 'CB', '26', 'Freaks'),
(1084, 'HARIHARAN', '6', 'LW', '26', 'Freaks'),
(1085, 'HARIHARAN', '7', 'LB', '26', 'Freaks'),
(1086, 'HARIHARAN', '8', 'LW', '26', 'Freaks'),
(1087, 'HARIHARAN', '9', 'LB', '26', 'Freaks'),
(1088, 'HARIHARAN', '10', 'RW', '26', 'Freaks'),
(1089, 'HARIHARAN', '11', 'CB', '26', 'Freaks'),
(1090, 'HARIHARAN', '12', 'CB', '26', 'Freaks'),
(1091, 'ROSHAN', '1', 'PP', '26', 'Fakers '),
(1092, 'ROSHAN ', '2', 'PP', '26', 'Fakers '),
(1093, 'ROSHAN ', '3', 'PP', '26', 'Fakers '),
(1094, 'ROSHAN', '4', 'PP', '26', 'Fakers '),
(1095, 'ROSHAN ', '5', 'PP', '26', 'Fakers '),
(1096, 'ROSHAN', '6', 'PP', '26', 'Fakers '),
(1097, 'ROSHAN', '7', 'PP', '26', 'Fakers '),
(1098, 'ROSHAN', '8', 'PP', '26', 'Fakers '),
(1099, 'ROSHAN', '9', 'PP', '26', 'Fakers '),
(1100, 'ROSHAN', '10', 'PP', '26', 'Fakers '),
(1101, 'ROSHAN', '11', 'PP', '26', 'Fakers '),
(1102, 'ROSHAN', '12', 'PP', '26', 'Fakers '),
(1103, 'HARIHARAN', '1', 'GK', '26', 'Freaks'),
(1104, 'PREMKUMAR ', '2', 'GK', '26', 'Freaks'),
(1105, 'NAGAARJUNA ', '3', 'GK', '26', 'Freaks'),
(1106, 'NITHIN ', '1', 'GK', '26', 'Freaks'),
(1107, 'PREMKUMAR', '2', 'GK', '26', 'Freaks'),
(1108, 'PREMKUMAR ', '3', 'GK', '26', 'Freaks'),
(1109, 'HARIHARAN', '1', 'PP', '26', 'Freaks'),
(1110, 'HARIHARAN', '2', 'WB', '26', 'Freaks'),
(1111, 'HARIHARAN', '3', 'RW', '26', 'Freaks'),
(1112, 'HARIHARAN', '4', 'CB', '26', 'Freaks'),
(1113, 'HARIHARAN', '5', 'CB', '26', 'Freaks'),
(1114, 'HARIHARAN', '6', 'LW', '26', 'Freaks'),
(1115, 'HARIHARAN', '7', 'LB', '26', 'Freaks'),
(1116, 'HARIHARAN', '8', 'LW', '26', 'Freaks'),
(1117, 'HARIHARAN', '9', 'LB', '26', 'Freaks'),
(1118, 'HARIHARAN', '10', 'RW', '26', 'Freaks'),
(1119, 'HARIHARAN', '11', 'CB', '26', 'Freaks'),
(1120, 'HARIHARAN', '12', 'CB', '26', 'Freaks'),
(1121, 'ROSHAN', '1', 'PP', '26', 'Fakers '),
(1122, 'ROSHAN ', '2', 'PP', '26', 'Fakers '),
(1123, 'ROSHAN ', '3', 'PP', '26', 'Fakers '),
(1124, 'ROSHAN', '4', 'PP', '26', 'Fakers '),
(1125, 'ROSHAN ', '5', 'PP', '26', 'Fakers '),
(1126, 'ROSHAN', '6', 'PP', '26', 'Fakers '),
(1127, 'ROSHAN', '7', 'PP', '26', 'Fakers '),
(1128, 'ROSHAN', '8', 'PP', '26', 'Fakers '),
(1129, 'ROSHAN', '9', 'PP', '26', 'Fakers '),
(1130, 'ROSHAN', '10', 'PP', '26', 'Fakers '),
(1131, 'ROSHAN', '11', 'PP', '26', 'Fakers '),
(1132, 'ROSHAN', '12', 'PP', '26', 'Fakers '),
(1133, 'HARIHARAN', '1', 'GK', '26', 'Freaks'),
(1134, 'PREMKUMAR ', '2', 'GK', '26', 'Freaks'),
(1135, 'NAGAARJUNA ', '3', 'GK', '26', 'Freaks'),
(1136, 'NITHIN ', '1', 'GK', '26', 'Freaks'),
(1137, 'PREMKUMAR', '2', 'GK', '26', 'Freaks'),
(1138, 'PREMKUMAR ', '3', 'GK', '26', 'Freaks'),
(1139, 'HARIHARAN', '1', 'PP', '26', 'Freaks'),
(1140, 'HARIHARAN', '2', 'WB', '26', 'Freaks'),
(1141, 'HARIHARAN', '3', 'RW', '26', 'Freaks'),
(1142, 'HARIHARAN', '4', 'CB', '26', 'Freaks'),
(1143, 'HARIHARAN', '5', 'CB', '26', 'Freaks'),
(1144, 'HARIHARAN', '6', 'LW', '26', 'Freaks'),
(1145, 'HARIHARAN', '7', 'LB', '26', 'Freaks'),
(1146, 'HARIHARAN', '8', 'LW', '26', 'Freaks'),
(1147, 'HARIHARAN', '9', 'LB', '26', 'Freaks'),
(1148, 'HARIHARAN', '10', 'RW', '26', 'Freaks'),
(1149, 'HARIHARAN', '11', 'CB', '26', 'Freaks'),
(1150, 'HARIHARAN', '12', 'CB', '26', 'Freaks'),
(1151, 'ROSHAN', '1', 'PP', '26', 'Fakers '),
(1152, 'ROSHAN ', '2', 'PP', '26', 'Fakers '),
(1153, 'ROSHAN ', '3', 'PP', '26', 'Fakers '),
(1154, 'ROSHAN', '4', 'PP', '26', 'Fakers '),
(1155, 'ROSHAN ', '5', 'PP', '26', 'Fakers '),
(1156, 'ROSHAN', '6', 'PP', '26', 'Fakers '),
(1157, 'ROSHAN', '7', 'PP', '26', 'Fakers '),
(1158, 'ROSHAN', '8', 'PP', '26', 'Fakers '),
(1159, 'ROSHAN', '9', 'PP', '26', 'Fakers '),
(1160, 'ROSHAN', '10', 'PP', '26', 'Fakers '),
(1161, 'ROSHAN', '11', 'PP', '26', 'Fakers '),
(1162, 'ROSHAN', '12', 'PP', '26', 'Fakers '),
(1163, 'HARIHARAN', '1', 'GK', '33', 'Fakers '),
(1164, 'PREMKUMAR ', '2', 'GK', '33', 'Fakers '),
(1165, 'NAGAARJUNA ', '3', 'GK', '33', 'Fakers '),
(1166, 'HARIHARAN', '1', 'GK', '33', 'Fakers '),
(1167, 'PREMKUMAR', '2', 'GK', '33', 'Fakers '),
(1168, 'PREMKUMAR ', '3', 'GK', '33', 'Fakers '),
(1169, 'HARIHARAN', '1', 'PP', '33', 'Fakers '),
(1170, 'HARIHARAN', '2', 'WB', '33', 'Fakers '),
(1171, 'HARIHARAN', '3', 'RW', '33', 'Fakers '),
(1172, 'HARIHARAN', '4', 'CB', '33', 'Fakers '),
(1173, 'HARIHARAN', '5', 'CB', '33', 'Fakers '),
(1174, 'HARIHARAN', '6', 'LW', '33', 'Fakers '),
(1175, 'HARIHARAN', '7', 'LB', '33', 'Fakers '),
(1176, 'HARIHARAN', '8', 'LW', '33', 'Fakers '),
(1177, 'HARIHARAN', '9', 'LB', '33', 'Fakers '),
(1178, 'HARIHARAN', '10', 'RW', '33', 'Fakers '),
(1179, 'HARIHARAN', '11', 'CB', '33', 'Fakers '),
(1180, 'HARIHARAN', '12', 'CB', '33', 'Fakers '),
(1181, 'ROSHAN', '1', 'PP', '33', 'Freaks '),
(1182, 'ROSHAN ', '2', 'PP', '33', 'Freaks '),
(1183, 'ROSHAN', '3', 'PP', '33', 'Freaks '),
(1184, 'ROSHAN', '4', 'PP', '33', 'Freaks '),
(1185, 'ROSHAN ', '5', 'PP', '33', 'Freaks '),
(1186, 'ROSHAN', '6', 'PP', '33', 'Freaks '),
(1187, 'ROSHAN', '7', 'PP', '33', 'Freaks '),
(1188, 'ROSHAN', '8', 'PP', '33', 'Freaks '),
(1189, 'ROSHAN', '9', 'PP', '33', 'Freaks '),
(1190, 'ROSHAN', '10', 'PP', '33', 'Freaks '),
(1191, 'ROSHAN', '11', 'PP', '33', 'Freaks '),
(1192, 'ROSHAN', '12', 'PP', '33', 'Freaks '),
(1193, 'HARIHARAN', '1', 'GK', '34', 'FAKERS '),
(1194, 'PREMKUMAR ', '2', 'GK', '34', 'FAKERS '),
(1195, 'NAGAARJUNA ', '3', 'GK', '34', 'FAKERS '),
(1196, 'HARIHARAN', '1', 'GK', '34', 'FAKERS '),
(1197, 'PREMKUMAR', '2', 'GK', '34', 'FAKERS '),
(1198, 'PREMKUMAR ', '3', 'GK', '34', 'FAKERS '),
(1199, 'HARIHARAN', '1', 'PP', '34', 'FAKERS '),
(1200, 'HARIHARAN', '2', 'WB', '34', 'FAKERS '),
(1201, 'HARIHARAN', '3', 'RW', '34', 'FAKERS '),
(1202, 'HARIHARAN', '4', 'CB', '34', 'FAKERS '),
(1203, 'HARIHARAN', '5', 'CB', '34', 'FAKERS '),
(1204, 'HARIHARAN', '6', 'LW', '34', 'FAKERS '),
(1205, 'HARIHARAN', '7', 'LB', '34', 'FAKERS '),
(1206, 'HARIHARAN', '8', 'LW', '34', 'FAKERS '),
(1207, 'HARIHARAN', '9', 'LB', '34', 'FAKERS '),
(1208, 'HARIHARAN', '10', 'RW', '34', 'FAKERS '),
(1209, 'HARIHARAN', '11', 'CB', '34', 'FAKERS '),
(1210, 'HARIHARAN', '12', 'CB', '34', 'FAKERS '),
(1211, 'ROSHAN', '1', 'PP', '34', 'HUNKS '),
(1212, 'ROSHAN ', '2', 'PP', '34', 'HUNKS '),
(1213, 'ROSHAN ', '3', 'PP', '34', 'HUNKS '),
(1214, 'ROSHAN', '4', 'PP', '34', 'HUNKS '),
(1215, 'ROSHAN ', '5', 'PP', '34', 'HUNKS '),
(1216, 'ROSHAN', '6', 'PP', '34', 'HUNKS '),
(1217, 'ROSHAN', '7', 'PP', '34', 'HUNKS '),
(1218, 'ROSHAN', '8', 'PP', '34', 'HUNKS '),
(1219, 'ROSHAN', '9', 'PP', '34', 'HUNKS '),
(1220, 'ROSHAN', '10', 'PP', '34', 'HUNKS '),
(1221, 'ROSHAN', '11', 'PP', '34', 'HUNKS '),
(1222, 'ROSHAN', '12', 'PP', '34', 'HUNKS '),
(1223, 'HARIHARAN', '1', 'GK', '34', 'FAKERS'),
(1224, 'PREMKUMAR ', '2', 'GK', '34', 'FAKERS'),
(1225, 'NAGAARJUNA ', '3', 'GK', '34', 'FAKERS'),
(1226, 'HARIHARAN', '1', 'GK', '34', 'FAKERS'),
(1227, 'PREMKUMAR', '2', 'GK', '34', 'FAKERS'),
(1228, 'PREMKUMAR ', '3', 'GK', '34', 'FAKERS'),
(1229, 'HARIHARAN', '1', 'PP', '34', 'FAKERS'),
(1230, 'HARIHARAN', '2', 'WB', '34', 'FAKERS'),
(1231, 'HARIHARAN', '3', 'RW', '34', 'FAKERS'),
(1232, 'HARIHARAN', '4', 'CB', '34', 'FAKERS'),
(1233, 'HARIHARAN', '5', 'CB', '34', 'FAKERS'),
(1234, 'HARIHARAN', '6', 'LW', '34', 'FAKERS'),
(1235, 'HARIHARAN', '7', 'LB', '34', 'FAKERS'),
(1236, 'HARIHARAN', '8', 'LW', '34', 'FAKERS'),
(1237, 'HARIHARAN', '9', 'LB', '34', 'FAKERS'),
(1238, 'HARIHARAN', '10', 'RW', '34', 'FAKERS'),
(1239, 'HARIHARAN', '11', 'CB', '34', 'FAKERS'),
(1240, 'HARIHARAN', '12', 'CB', '34', 'FAKERS'),
(1241, 'ROSHAN', '1', 'PP', '34', 'HUNKS '),
(1242, 'ROSHAN ', '2', 'PP', '34', 'HUNKS '),
(1243, 'ROSHAN ', '3', 'PP', '34', 'HUNKS '),
(1244, 'ROSHAN', '4', 'PP', '34', 'HUNKS '),
(1245, 'ROSHAN ', '5', 'PP', '34', 'HUNKS '),
(1246, 'ROSHAN', '6', 'PP', '34', 'HUNKS '),
(1247, 'ROSHAN', '7', 'PP', '34', 'HUNKS '),
(1248, 'ROSHAN', '8', 'PP', '34', 'HUNKS '),
(1249, 'ROSHAN', '9', 'PP', '34', 'HUNKS '),
(1250, 'ROSHAN', '10', 'PP', '34', 'HUNKS '),
(1251, 'ROSHAN', '11', 'pp', '34', 'HUNKS '),
(1252, 'ROSHAN', '12', 'PP', '34', 'HUNKS '),
(1253, 'HARIAHARAN', '1', 'GK', '33', 'FAKERS'),
(1254, 'HARIHARAN', '2', 'GK', '33', 'FAKERS'),
(1255, 'HARIHARAN', '3', 'GK', '33', 'FAKERS'),
(1256, 'PREM', '1', 'GK', '33', 'FAKERS'),
(1257, 'PREM', '2', 'GK', '33', 'FAKERS'),
(1258, 'PREM', '3', 'GK', '33', 'FAKERS'),
(1259, 'ROSHAN', '4', 'PP', '33', 'FAKERS'),
(1260, 'SHADHANI', '5', 'LB', '33', 'FAKERS'),
(1261, 'SASI', '6', 'LB', '33', 'FAKERS'),
(1262, 'SAKTHI', '7', 'RW', '33', 'FAKERS'),
(1263, 'SRIRAM', '8', 'CB', '33', 'FAKERS'),
(1264, 'PHAVAN', '9', 'RB', '33', 'FAKERS'),
(1265, 'GNANAVEL', '10', 'RW', '33', 'FAKERS'),
(1266, 'AKASH', '11', 'PP', '33', 'FAKERS'),
(1267, 'BAHAVATHY', '12', 'LW', '33', 'FAKERS'),
(1268, 'HARIHARAN', '13', 'LW', '33', 'FAKERS'),
(1269, 'PREM', '14', 'LB', '33', 'FAKERS'),
(1270, 'KARTHICK ', '15', 'RW', '33', 'FAKERS'),
(1271, 'ROSHAN', '4', 'PP', '33', 'FREAKS'),
(1272, 'SHADHANI', '5', 'LB', '33', 'FREAKS'),
(1273, 'SASI', '6', 'LB', '33', 'FREAKS'),
(1274, 'SAKTHI', '7', 'RW', '33', 'FREAKS'),
(1275, 'KARTHICK', '8', 'RW', '33', 'FREAKS'),
(1276, 'GNANAVEL', '9', 'RW', '33', 'FREAKS'),
(1277, 'SRIRAM', '10', 'CB', '33', 'FREAKS'),
(1278, 'PHAVAN', '11', 'RB', '33', 'FREAKS'),
(1279, 'HARIHARAN', '12', 'LW', '33', 'FREAKS'),
(1280, 'BAHAVATHY', '13', 'LW', '33', 'FREAKS'),
(1281, 'PREM', '14 ', 'RB', '33', 'FREAKS'),
(1282, 'AKASH', '15', 'PP', '33', 'FREAKS'),
(1283, 'HARIAHARAN', '1', 'GK', '33', 'FAKERS'),
(1284, 'HARIHARAN', '2', 'GK', '33', 'FAKERS'),
(1285, 'HARIHARAN', '3', 'GK', '33', 'FAKERS'),
(1286, 'PREM', '1', 'GK', '33', 'FAKERS'),
(1287, 'PREM', '2', 'GK', '33', 'FAKERS'),
(1288, 'PREM', '3', 'GK', '33', 'FAKERS'),
(1289, 'ROSHAN', '4', 'PP', '33', 'FAKERS'),
(1290, 'SHADHANI', '5', 'LB', '33', 'FAKERS'),
(1291, 'SASI', '6', 'LB', '33', 'FAKERS'),
(1292, 'SAKTHI', '7', 'RW', '33', 'FAKERS'),
(1293, 'SRIRAM', '8', 'CB', '33', 'FAKERS'),
(1294, 'PHAVAN', '9', 'RB', '33', 'FAKERS'),
(1295, 'GNANAVEL', '10', 'RW', '33', 'FAKERS'),
(1296, 'AKASH', '11', 'PP', '33', 'FAKERS'),
(1297, 'BAHAVATHY', '12', 'LW', '33', 'FAKERS'),
(1298, 'HARIHARAN', '13', 'LW', '33', 'FAKERS'),
(1299, 'PREM', '14', 'LB', '33', 'FAKERS'),
(1300, 'KARTHICK ', '15', 'RW', '33', 'FAKERS'),
(1301, 'ROSHAN', '4', 'PP', '33', 'FREAKS'),
(1302, 'SHADHANI', '5', 'LB', '33', 'FREAKS'),
(1303, 'SASI', '6', 'LB', '33', 'FREAKS'),
(1304, 'SAKTHI', '7', 'RW', '33', 'FREAKS'),
(1305, 'KARTHICK', '8', 'RW', '33', 'FREAKS'),
(1306, 'GNANAVEL', '9', 'RW', '33', 'FREAKS'),
(1307, 'SRIRAM', '10', 'CB', '33', 'FREAKS'),
(1308, 'PHAVAN', '11', 'RB', '33', 'FREAKS'),
(1309, 'HARIHARAN', '12', 'LW', '33', 'FREAKS'),
(1310, 'BAHAVATHY', '13', 'LW', '33', 'FREAKS'),
(1311, 'PREM', '14 ', 'RB', '33', 'FREAKS'),
(1312, 'AKASH', '15', 'PP', '33', 'FREAKS'),
(1313, 'HARIAHARAN', '1', 'GK', '33', 'FAKERS'),
(1314, 'HARIHARAN', '2', 'GK', '33', 'FAKERS'),
(1315, 'HARIHARAN', '3', 'GK', '33', 'FAKERS'),
(1316, 'PREM', '1', 'GK', '33', 'FAKERS'),
(1317, 'PREM', '2', 'GK', '33', 'FAKERS'),
(1318, 'PREM', '3', 'GK', '33', 'FAKERS'),
(1319, 'ROSHAN', '4', 'PP', '33', 'FAKERS'),
(1320, 'SHADHANI', '5', 'LB', '33', 'FAKERS'),
(1321, 'SASI', '6', 'LB', '33', 'FAKERS'),
(1322, 'SAKTHI', '7', 'RW', '33', 'FAKERS'),
(1323, 'SRIRAM', '8', 'CB', '33', 'FAKERS'),
(1324, 'PHAVAN', '9', 'RB', '33', 'FAKERS'),
(1325, 'GNANAVEL', '10', 'RW', '33', 'FAKERS'),
(1326, 'AKASH', '11', 'PP', '33', 'FAKERS'),
(1327, 'BAHAVATHY', '12', 'LW', '33', 'FAKERS'),
(1328, 'HARIHARAN', '13', 'LW', '33', 'FAKERS'),
(1329, 'PREM', '14', 'LB', '33', 'FAKERS'),
(1330, 'KARTHICK ', '15', 'RW', '33', 'FAKERS'),
(1331, 'ROSHAN', '4', 'PP', '33', 'FREAKS'),
(1332, 'SHADHANI', '5', 'LB', '33', 'FREAKS'),
(1333, 'SASI', '6', 'LB', '33', 'FREAKS'),
(1334, 'SAKTHI', '7', 'RW', '33', 'FREAKS'),
(1335, 'KARTHICK', '8', 'RW', '33', 'FREAKS'),
(1336, 'GNANAVEL', '9', 'RW', '33', 'FREAKS'),
(1337, 'SRIRAM', '10', 'CB', '33', 'FREAKS'),
(1338, 'PHAVAN', '11', 'RB', '33', 'FREAKS'),
(1339, 'HARIHARAN', '12', 'LW', '33', 'FREAKS'),
(1340, 'BAHAVATHY', '13', 'LW', '33', 'FREAKS'),
(1341, 'PREM', '14 ', 'RB', '33', 'FREAKS'),
(1342, 'AKASH', '15', 'PP', '33', 'FREAKS'),
(1343, 'HARIAHARAN', '1', 'GK', '33', 'FAKERS'),
(1344, 'HARIHARAN', '2', 'GK', '33', 'FAKERS'),
(1345, 'HARIHARAN', '3', 'GK', '33', 'FAKERS'),
(1346, 'PREM', '1', 'GK', '33', 'FAKERS'),
(1347, 'PREM', '2', 'GK', '33', 'FAKERS'),
(1348, 'PREM', '3', 'GK', '33', 'FAKERS'),
(1349, 'ROSHAN', '4', 'PP', '33', 'FAKERS'),
(1350, 'SHADHANI', '5', 'LB', '33', 'FAKERS'),
(1351, 'SASI', '6', 'LB', '33', 'FAKERS'),
(1352, 'SAKTHI', '7', 'RW', '33', 'FAKERS'),
(1353, 'SRIRAM', '8', 'CB', '33', 'FAKERS'),
(1354, 'PHAVAN', '9', 'RB', '33', 'FAKERS'),
(1355, 'GNANAVEL', '10', 'RW', '33', 'FAKERS'),
(1356, 'AKASH', '11', 'PP', '33', 'FAKERS'),
(1357, 'BAHAVATHY', '12', 'LW', '33', 'FAKERS'),
(1358, 'HARIHARAN', '13', 'LW', '33', 'FAKERS'),
(1359, 'PREM', '14', 'LB', '33', 'FAKERS'),
(1360, 'KARTHICK ', '15', 'RW', '33', 'FAKERS'),
(1361, 'ROSHAN', '4', 'PP', '33', 'FREAKS'),
(1362, 'SHADHANI', '5', 'LB', '33', 'FREAKS'),
(1363, 'SASI', '6', 'LB', '33', 'FREAKS'),
(1364, 'SAKTHI', '7', 'RW', '33', 'FREAKS'),
(1365, 'KARTHICK', '8', 'RW', '33', 'FREAKS'),
(1366, 'GNANAVEL', '9', 'RW', '33', 'FREAKS'),
(1367, 'SRIRAM', '10', 'CB', '33', 'FREAKS'),
(1368, 'PHAVAN', '11', 'RB', '33', 'FREAKS'),
(1369, 'HARIHARAN', '12', 'LW', '33', 'FREAKS'),
(1370, 'BAHAVATHY', '13', 'LW', '33', 'FREAKS'),
(1371, 'PREM', '14 ', 'RB', '33', 'FREAKS'),
(1372, 'AKASH', '15', 'PP', '33', 'FREAKS'),
(1373, 'HARIAHARAN', '1', 'GK', '33', 'FAKERS'),
(1374, 'HARIHARAN', '2', 'GK', '33', 'FAKERS'),
(1375, 'HARIHARAN', '3', 'GK', '33', 'FAKERS'),
(1376, 'PREM', '1', 'GK', '33', 'FAKERS'),
(1377, 'PREM', '2', 'GK', '33', 'FAKERS'),
(1378, 'PREM', '3', 'GK', '33', 'FAKERS'),
(1379, 'ROSHAN', '4', 'PP', '33', 'FAKERS'),
(1380, 'SHADHANI', '5', 'LB', '33', 'FAKERS'),
(1381, 'SASI', '6', 'LB', '33', 'FAKERS'),
(1382, 'SAKTHI', '7', 'RW', '33', 'FAKERS'),
(1383, 'SRIRAM', '8', 'CB', '33', 'FAKERS'),
(1384, 'PHAVAN', '9', 'RB', '33', 'FAKERS'),
(1385, 'GNANAVEL', '10', 'RW', '33', 'FAKERS'),
(1386, 'AKASH', '11', 'PP', '33', 'FAKERS'),
(1387, 'BAHAVATHY', '12', 'LW', '33', 'FAKERS'),
(1388, 'HARIHARAN', '13', 'LW', '33', 'FAKERS'),
(1389, 'PREM', '14', 'LB', '33', 'FAKERS'),
(1390, 'KARTHICK ', '15', 'RW', '33', 'FAKERS'),
(1391, 'ROSHAN', '4', 'PP', '33', 'FREAKS'),
(1392, 'SHADHANI', '5', 'LB', '33', 'FREAKS'),
(1393, 'SASI', '6', 'LB', '33', 'FREAKS'),
(1394, 'SAKTHI', '7', 'RW', '33', 'FREAKS'),
(1395, 'KARTHICK', '8', 'RW', '33', 'FREAKS'),
(1396, 'GNANAVEL', '9', 'RW', '33', 'FREAKS'),
(1397, 'SRIRAM', '10', 'CB', '33', 'FREAKS'),
(1398, 'PHAVAN', '11', 'RB', '33', 'FREAKS'),
(1399, 'HARIHARAN', '12', 'LW', '33', 'FREAKS'),
(1400, 'BAHAVATHY', '13', 'LW', '33', 'FREAKS'),
(1401, 'PREM', '14 ', 'RB', '33', 'FREAKS'),
(1402, 'AKASH', '15', 'PP', '33', 'FREAKS'),
(1403, 'HARIAHARAN', '1', 'GK', '26', 'FREAKS'),
(1404, 'HARIHARAN', '2', 'GK', '26', 'FREAKS'),
(1405, 'HARIHARAN', '3', 'GK', '26', 'FREAKS'),
(1406, 'PREM', '1', 'GK', '26', 'FREAKS'),
(1407, 'PREM', '2', 'GK', '26', 'FREAKS'),
(1408, 'PREM', '3', 'GK', '26', 'FREAKS'),
(1409, 'ROSHAN', '4', 'PP', '26', 'FREAKS'),
(1410, 'SHADHANI', '5', 'LB', '26', 'FREAKS'),
(1411, 'SASI', '6', 'LB', '26', 'FREAKS'),
(1412, 'SAKTHI', '7', 'RW', '26', 'FREAKS'),
(1413, 'SRIRAM', '8', 'CB', '26', 'FREAKS'),
(1414, 'PHAVAN', '9', 'RB', '26', 'FREAKS'),
(1415, 'GNANAVEL', '10', 'RW', '26', 'FREAKS'),
(1416, 'AKASH', '11', 'PP', '26', 'FREAKS'),
(1417, 'BAHAVATHY', '12', 'LW', '26', 'FREAKS'),
(1418, 'HARIHARAN', '13', 'LW', '26', 'FREAKS'),
(1419, 'PREM', '14', 'LB', '26', 'FREAKS'),
(1420, 'KARTHICK ', '15', 'RW', '26', 'FREAKS'),
(1421, 'ROSHAN', '4', 'PP', '26', 'FAKERS'),
(1422, 'SHADHANI', '5', 'LB', '26', 'FAKERS'),
(1423, 'SASI', '6', 'LB', '26', 'FAKERS'),
(1424, 'SAKTHI', '7', 'RW', '26', 'FAKERS'),
(1425, 'KARTHICK', '8', 'RW', '26', 'FAKERS'),
(1426, 'GNANAVEL', '9', 'RW', '26', 'FAKERS'),
(1427, 'SRIRAM', '10', 'CB', '26', 'FAKERS'),
(1428, 'PHAVAN', '11', 'RB', '26', 'FAKERS'),
(1429, 'HARIHARAN', '12', 'LW', '26', 'FAKERS'),
(1430, 'BAHAVATHY', '13', 'LW', '26', 'FAKERS'),
(1431, 'PREM', '14 ', 'RB', '26', 'FAKERS'),
(1432, 'AKASH', '15', 'PP', '26', 'FAKERS'),
(1433, 'HARIHARAN', '1', 'GK', '33', 'FAKERS'),
(1434, 'PREMKUMAR ', '2', 'GK', '33', 'FAKERS'),
(1435, 'NAGAARJUNA ', '3', 'GK', '33', 'FAKERS'),
(1436, 'HARIHARAN', '1', 'GK', '33', 'FAKERS'),
(1437, 'PREMKUMAR', '2', 'GK', '33', 'FAKERS'),
(1438, 'PREMKUMAR ', '3', 'GK', '33', 'FAKERS'),
(1439, 'HARIHARAN', '1', 'PP', '33', 'FAKERS'),
(1440, 'HARIHARAN', '2', 'WB', '33', 'FAKERS'),
(1441, 'HARIHARAN', '3', 'RW', '33', 'FAKERS'),
(1442, 'HARIHARAN', '4', 'CB', '33', 'FAKERS'),
(1443, 'HARIHARAN', '5', 'CB', '33', 'FAKERS'),
(1444, 'HARIHARAN', '6', 'LW', '33', 'FAKERS'),
(1445, 'HARIHARAN', '7', 'LB', '33', 'FAKERS'),
(1446, 'HARIHARAN', '8', 'LW', '33', 'FAKERS'),
(1447, 'HARIHARAN', '9', 'LB', '33', 'FAKERS'),
(1448, 'HARIHARAN', '10', 'RW', '33', 'FAKERS'),
(1449, 'HARIHARAN', '11', 'CB', '33', 'FAKERS'),
(1450, 'HARIHARAN', '12', 'CB', '33', 'FAKERS'),
(1451, 'ROSHAN', '1', 'PP', '33', 'FREAKS'),
(1452, 'ROSHAN ', '2', 'PP', '33', 'FREAKS'),
(1453, 'ROSHAN ', '3', 'PP', '33', 'FREAKS'),
(1454, 'ROSHAN', '4', 'PP', '33', 'FREAKS'),
(1455, 'ROSHAN ', '5', 'PP', '33', 'FREAKS'),
(1456, 'ROSHAN', '6', 'PP', '33', 'FREAKS'),
(1457, 'ROSHAN', '7', 'PP', '33', 'FREAKS'),
(1458, 'ROSHAN', '8', 'PP', '33', 'FREAKS'),
(1459, 'ROSHAN', '9', 'PP', '33', 'FREAKS'),
(1460, 'ROSHAN', '10', 'PP', '33', 'FREAKS'),
(1461, 'ROSHAN', '11', 'PP', '33', 'FREAKS'),
(1462, 'ROSHAN', '12', 'PP', '33', 'FREAKS'),
(1463, 'HARIAHARAN', '1', 'GK', '34', 'FAKERS'),
(1464, 'HARIHARAN', '2', 'GK', '34', 'FAKERS'),
(1465, 'HARIHARAN', '3', 'GK', '34', 'FAKERS'),
(1466, 'PREM', '1', 'GK', '34', 'FAKERS'),
(1467, 'PREM', '2', 'GK', '34', 'FAKERS'),
(1468, 'PREM', '3', 'GK', '34', 'FAKERS'),
(1469, 'ROSHAN', '4', 'PP', '34', 'FAKERS'),
(1470, 'SHADHANI', '5', 'LB', '34', 'FAKERS'),
(1471, 'SASI', '6', 'LB', '34', 'FAKERS'),
(1472, 'SAKTHI', '7', 'RW', '34', 'FAKERS'),
(1473, 'SRIRAM', '8', 'CB', '34', 'FAKERS'),
(1474, 'PHAVAN', '9', 'RB', '34', 'FAKERS'),
(1475, 'GNANAVEL', '10', 'RW', '34', 'FAKERS'),
(1476, 'AKASH', '11', 'PP', '34', 'FAKERS'),
(1477, 'BAHAVATHY', '12', 'LW', '34', 'FAKERS'),
(1478, 'HARIHARAN', '13', 'LW', '34', 'FAKERS'),
(1479, 'PREM', '14', 'LB', '34', 'FAKERS'),
(1480, 'KARTHICK ', '15', 'RW', '34', 'FAKERS'),
(1481, 'ROSHAN', '4', 'PP', '34', 'HUNKS'),
(1482, 'SHADHANI', '5', 'LB', '34', 'HUNKS'),
(1483, 'SASI', '6', 'LB', '34', 'HUNKS'),
(1484, 'SAKTHI', '7', 'RW', '34', 'HUNKS'),
(1485, 'Hariharan', '8', 'RW', '34', 'HUNKS'),
(1486, 'GNANAVEL', '9', 'RW', '34', 'HUNKS'),
(1487, 'SRIRAM', '10', 'CB', '34', 'HUNKS'),
(1488, 'PHAVAN', '11', 'RB', '34', 'HUNKS'),
(1489, 'HARIHARAN', '12', 'LW', '34', 'HUNKS'),
(1490, 'BAHAVATHY', '0', 'LW', '34', 'HUNKS'),
(1491, 'PREM', '14 ', 'RB', '34', 'HUNKS'),
(1492, 'AKASH', '15', 'PP', '34', 'HUNKS'),
(1493, 'HARIAHARAN', '1', 'GK', '44', 'HUNKS '),
(1494, 'HARIHARAN', '2', 'GK', '44', 'HUNKS '),
(1495, 'HARIHARAN', '3', 'GK', '44', 'HUNKS '),
(1496, 'PREM', '1', 'GK', '44', 'HUNKS '),
(1497, 'PREM', '2', 'GK', '44', 'HUNKS '),
(1498, 'PREM', '3', 'GK', '44', 'HUNKS '),
(1499, 'ROSHAN', '4', 'PP', '44', 'HUNKS '),
(1500, 'SHADHANI', '5', 'LB', '44', 'HUNKS '),
(1501, 'SASI', '6', 'LB', '44', 'HUNKS '),
(1502, 'SAKTHI', '7', 'RW', '44', 'HUNKS '),
(1503, 'SRIRAM', '8', 'CB', '44', 'HUNKS '),
(1504, 'PHAVAN', '9', 'RB', '44', 'HUNKS '),
(1505, 'GNANAVEL', '10', 'RW', '44', 'HUNKS '),
(1506, 'AKASH', '11', 'PP', '44', 'HUNKS '),
(1507, 'BAHAVATHY', '12', 'LW', '44', 'HUNKS '),
(1508, 'HARIHARAN', '13', 'LW', '44', 'HUNKS '),
(1509, 'PREM', '14', 'LB', '44', 'HUNKS '),
(1510, 'KARTHICK ', '15', 'RW', '44', 'HUNKS '),
(1511, 'ROSHAN', '4', 'PP', '44', 'HUNKS'),
(1512, 'SHADHANI', '5', 'LB', '44', 'HUNKS'),
(1513, 'SASI', '6', 'LB', '44', 'HUNKS'),
(1514, 'SAKTHI', '7', 'RW', '44', 'HUNKS'),
(1515, 'Hariharan', '8', 'RW', '44', 'HUNKS'),
(1516, 'GNANAVEL', '9', 'RW', '44', 'HUNKS'),
(1517, 'SRIRAM', '10', 'CB', '44', 'HUNKS'),
(1518, 'PHAVAN', '11', 'RB', '44', 'HUNKS'),
(1519, 'HARIHARAN', '12', 'LW', '44', 'HUNKS'),
(1520, 'BAHAVATHY', '0', 'LW', '44', 'HUNKS'),
(1521, 'PREM', '14 ', 'RB', '44', 'HUNKS'),
(1522, 'AKASH', '15', 'PP', '44', 'HUNKS'),
(1523, 'HARIAHARAN', '1', 'GK', '45', 'HUNKS '),
(1524, 'HARIHARAN', '2', 'GK', '45', 'HUNKS '),
(1525, 'HARIHARAN', '3', 'GK', '45', 'HUNKS '),
(1526, 'PREM', '1', 'GK', '45', 'HUNKS '),
(1527, 'PREM', '2', 'GK', '45', 'HUNKS '),
(1528, 'PREM', '3', 'GK', '45', 'HUNKS '),
(1529, 'ROSHAN', '4', 'PP', '45', 'HUNKS '),
(1530, 'SHADHANI', '5', 'LB', '45', 'HUNKS '),
(1531, 'SASI', '6', 'LB', '45', 'HUNKS '),
(1532, 'SAKTHI', '7', 'RW', '45', 'HUNKS '),
(1533, 'SRIRAM', '8', 'CB', '45', 'HUNKS '),
(1534, 'PHAVAN', '9', 'RB', '45', 'HUNKS '),
(1535, 'GNANAVEL', '10', 'RW', '45', 'HUNKS '),
(1536, 'AKASH', '11', 'PP', '45', 'HUNKS '),
(1537, 'BAHAVATHY', '12', 'LW', '45', 'HUNKS '),
(1538, 'HARIHARAN', '13', 'LW', '45', 'HUNKS '),
(1539, 'PREM', '14', 'LB', '45', 'HUNKS '),
(1540, 'KARTHICK ', '15', 'RW', '45', 'HUNKS '),
(1541, 'ROSHAN', '4', 'PP', '45', 'FREAKS'),
(1542, 'SHADHANI', '5', 'LB', '45', 'FREAKS'),
(1543, 'SASI', '6', 'LB', '45', 'FREAKS'),
(1544, 'SAKTHI', '7', 'RW', '45', 'FREAKS'),
(1545, 'Hariharan', '8', 'RW', '45', 'FREAKS'),
(1546, 'GNANAVEL', '9', 'RW', '45', 'FREAKS'),
(1547, 'SRIRAM', '10', 'CB', '45', 'FREAKS'),
(1548, 'PHAVAN', '11', 'RB', '45', 'FREAKS'),
(1549, 'HARIHARAN', '12', 'LW', '45', 'FREAKS'),
(1550, 'BAHAVATHY', '12', 'LW', '45', 'FREAKS'),
(1551, 'PREM', '14 ', 'RB', '45', 'FREAKS'),
(1552, 'AKASH', '15', 'PP', '45', 'FREAKS'),
(1553, 'HARIAHARAN', '1', 'GK', '45', 'HUNKS '),
(1554, 'HARIHARAN', '2', 'GK', '45', 'HUNKS '),
(1555, 'HARIHARAN', '3', 'GK', '45', 'HUNKS '),
(1556, 'PREM', '1', 'GK', '45', 'HUNKS '),
(1557, 'PREM', '2', 'GK', '45', 'HUNKS '),
(1558, 'PREM', '3', 'GK', '45', 'HUNKS '),
(1559, 'ROSHAN', '4', 'PP', '45', 'HUNKS '),
(1560, 'SHADHANI', '5', 'LB', '45', 'HUNKS '),
(1561, 'SASI', '6', 'LB', '45', 'HUNKS '),
(1562, 'SAKTHI', '7', 'RW', '45', 'HUNKS '),
(1563, 'SRIRAM', '8', 'CB', '45', 'HUNKS '),
(1564, 'PHAVAN', '9', 'RB', '45', 'HUNKS '),
(1565, 'GNANAVEL', '10', 'RW', '45', 'HUNKS '),
(1566, 'AKASH', '11', 'PP', '45', 'HUNKS '),
(1567, 'BAHAVATHY', '12', 'LW', '45', 'HUNKS '),
(1568, 'HARIHARAN', '13', 'LW', '45', 'HUNKS '),
(1569, 'PREM', '14', 'LB', '45', 'HUNKS '),
(1570, 'KARTHICK ', '15', 'RW', '45', 'HUNKS '),
(1571, 'ROSHAN', '4', 'PP', '45', 'FREAKS'),
(1572, 'SHADHANI', '5', 'LB', '45', 'FREAKS'),
(1573, 'SASI', '6', 'LB', '45', 'FREAKS'),
(1574, 'SAKTHI', '7', 'RW', '45', 'FREAKS'),
(1575, 'Hariharan', '8', 'RW', '45', 'FREAKS'),
(1576, 'GNANAVEL', '9', 'RW', '45', 'FREAKS'),
(1577, 'SRIRAM', '10', 'CB', '45', 'FREAKS'),
(1578, 'PHAVAN', '11', 'RB', '45', 'FREAKS'),
(1579, 'HARIHARAN', '12', 'LW', '45', 'FREAKS'),
(1580, 'BAHAVATHY', '12', 'LW', '45', 'FREAKS'),
(1581, 'PREM', '14 ', 'RB', '45', 'FREAKS'),
(1582, 'AKASH', '15', 'PP', '45', 'FREAKS'),
(1583, 'HARIAHARAN', '1', 'GK', '45', 'HUNKS '),
(1584, 'HARIHARAN', '2', 'GK', '45', 'HUNKS '),
(1585, 'HARIHARAN', '3', 'GK', '45', 'HUNKS '),
(1586, 'PREM', '1', 'GK', '45', 'HUNKS '),
(1587, 'PREM', '2', 'GK', '45', 'HUNKS '),
(1588, 'PREM', '3', 'GK', '45', 'HUNKS '),
(1589, 'ROSHAN', '4', 'PP', '45', 'HUNKS '),
(1590, 'SHADHANI', '5', 'LB', '45', 'HUNKS '),
(1591, 'SASI', '6', 'LB', '45', 'HUNKS '),
(1592, 'SAKTHI', '7', 'RW', '45', 'HUNKS '),
(1593, 'SRIRAM', '8', 'CB', '45', 'HUNKS '),
(1594, 'PHAVAN', '9', 'RB', '45', 'HUNKS '),
(1595, 'GNANAVEL', '10', 'RW', '45', 'HUNKS '),
(1596, 'AKASH', '11', 'PP', '45', 'HUNKS '),
(1597, 'BAHAVATHY', '12', 'LW', '45', 'HUNKS '),
(1598, 'HARIHARAN', '13', 'LW', '45', 'HUNKS '),
(1599, 'PREM', '14', 'LB', '45', 'HUNKS '),
(1600, 'KARTHICK ', '15', 'RW', '45', 'HUNKS '),
(1601, 'ROSHAN', '4', 'PP', '45', 'FREAKS'),
(1602, 'SHADHANI', '5', 'LB', '45', 'FREAKS'),
(1603, 'SASI', '6', 'LB', '45', 'FREAKS'),
(1604, 'SAKTHI', '7', 'RW', '45', 'FREAKS'),
(1605, 'Hariharan', '8', 'RW', '45', 'FREAKS'),
(1606, 'GNANAVEL', '9', 'RW', '45', 'FREAKS'),
(1607, 'SRIRAM', '10', 'CB', '45', 'FREAKS'),
(1608, 'PHAVAN', '11', 'RB', '45', 'FREAKS'),
(1609, 'HARIHARAN', '12', 'LW', '45', 'FREAKS'),
(1610, 'BAHAVATHY', '12', 'LW', '45', 'FREAKS'),
(1611, 'PREM', '14 ', 'RB', '45', 'FREAKS'),
(1612, 'AKASH', '15', 'PP', '45', 'FREAKS'),
(1613, 'HARIAHARAN', '1', 'GK', '45', 'HUNKS '),
(1614, 'HARIHARAN', '2', 'GK', '45', 'HUNKS '),
(1615, 'HARIHARAN', '3', 'GK', '45', 'HUNKS '),
(1616, 'PREM', '1', 'GK', '45', 'HUNKS '),
(1617, 'PREM', '2', 'GK', '45', 'HUNKS '),
(1618, 'PREM', '3', 'GK', '45', 'HUNKS '),
(1619, 'ROSHAN', '4', 'PP', '45', 'HUNKS '),
(1620, 'SHADHANI', '5', 'LB', '45', 'HUNKS '),
(1621, 'SASI', '6', 'LB', '45', 'HUNKS '),
(1622, 'SAKTHI', '7', 'RW', '45', 'HUNKS '),
(1623, 'SRIRAM', '8', 'CB', '45', 'HUNKS '),
(1624, 'PHAVAN', '9', 'RB', '45', 'HUNKS '),
(1625, 'GNANAVEL', '10', 'RW', '45', 'HUNKS '),
(1626, 'AKASH', '11', 'PP', '45', 'HUNKS '),
(1627, 'BAHAVATHY', '12', 'LW', '45', 'HUNKS '),
(1628, 'HARIHARAN', '13', 'LW', '45', 'HUNKS '),
(1629, 'PREM', '14', 'LB', '45', 'HUNKS '),
(1630, 'KARTHICK ', '15', 'RW', '45', 'HUNKS '),
(1631, 'ROSHAN', '4', 'PP', '45', 'FREAKS'),
(1632, 'SHADHANI', '5', 'LB', '45', 'FREAKS'),
(1633, 'SASI', '6', 'LB', '45', 'FREAKS'),
(1634, 'SAKTHI', '7', 'RW', '45', 'FREAKS'),
(1635, 'Hariharan', '8', 'RW', '45', 'FREAKS'),
(1636, 'GNANAVEL', '9', 'RW', '45', 'FREAKS'),
(1637, 'SRIRAM', '10', 'CB', '45', 'FREAKS'),
(1638, 'PHAVAN', '11', 'RB', '45', 'FREAKS'),
(1639, 'HARIHARAN', '12', 'LW', '45', 'FREAKS'),
(1640, 'BAHAVATHY', '12', 'LW', '45', 'FREAKS'),
(1641, 'PREM', '14 ', 'RB', '45', 'FREAKS'),
(1642, 'AKASH', '15', 'PP', '45', 'FREAKS'),
(1643, 'HARIAHARAN', '1', 'GK', '45', 'HUNKS'),
(1644, 'HARIHARAN', '2', 'GK', '45', 'HUNKS'),
(1645, 'HARIHARAN', '3', 'GK', '45', 'HUNKS'),
(1646, 'PREM', '1', 'GK', '45', 'HUNKS'),
(1647, 'PREM', '2', 'GK', '45', 'HUNKS'),
(1648, 'PREM', '3', 'GK', '45', 'HUNKS'),
(1649, 'ROSHAN', '4', 'PP', '45', 'HUNKS'),
(1650, 'SHADHANI', '5', 'LB', '45', 'HUNKS'),
(1651, 'SASI', '6', 'LB', '45', 'HUNKS'),
(1652, 'SAKTHI', '7', 'RW', '45', 'HUNKS'),
(1653, 'SRIRAM', '8', 'CB', '45', 'HUNKS'),
(1654, 'PHAVAN', '9', 'RB', '45', 'HUNKS'),
(1655, 'GNANAVEL', '10', 'RW', '45', 'HUNKS'),
(1656, 'AKASH', '11', 'PP', '45', 'HUNKS'),
(1657, 'BAHAVATHY', '12', 'LW', '45', 'HUNKS'),
(1658, 'HARIHARAN', '13', 'LW', '45', 'HUNKS'),
(1659, 'PREM', '14', 'LB', '45', 'HUNKS'),
(1660, 'KARTHICK ', '15', 'RW', '45', 'HUNKS'),
(1661, 'ROSHAN', '4', 'PP', '45', 'FREAKS'),
(1662, 'SHADHANI', '5', 'LB', '45', 'FREAKS'),
(1663, 'SASI', '6', 'LB', '45', 'FREAKS'),
(1664, 'SAKTHI', '7', 'RW', '45', 'FREAKS'),
(1665, 'KARTHICK', '8', 'RW', '45', 'FREAKS'),
(1666, 'GNANAVEL', '9', 'RW', '45', 'FREAKS'),
(1667, 'SRIRAM', '10', 'CB', '45', 'FREAKS'),
(1668, 'PHAVAN', '11', 'RB', '45', 'FREAKS'),
(1669, 'HARIHARAN', '12', 'LW', '45', 'FREAKS'),
(1670, 'BAHAVATHY', '13', 'LW', '45', 'FREAKS'),
(1671, 'PREM', '14 ', 'RB', '45', 'FREAKS'),
(1672, 'AKASH', '15', 'PP', '45', 'FREAKS'),
(1673, 'HARIAHARAN', '1', 'GK', '26', 'FREAKS'),
(1674, 'HARIHARAN', '2', 'GK', '26', 'FREAKS'),
(1675, 'HARIHARAN', '3', 'GK', '26', 'FREAKS'),
(1676, 'PREM', '1', 'GK', '26', 'FREAKS'),
(1677, 'PREM', '2', 'GK', '26', 'FREAKS'),
(1678, 'PREM', '3', 'GK', '26', 'FREAKS'),
(1679, 'ROSHAN', '4', 'PP', '26', 'FREAKS'),
(1680, 'SHADHANI', '5', 'LB', '26', 'FREAKS'),
(1681, 'SASI', '6', 'LB', '26', 'FREAKS'),
(1682, 'SAKTHI', '7', 'RW', '26', 'FREAKS'),
(1683, 'SRIRAM', '8', 'CB', '26', 'FREAKS'),
(1684, 'PHAVAN', '9', 'RB', '26', 'FREAKS'),
(1685, 'GNANAVEL', '10', 'RW', '26', 'FREAKS'),
(1686, 'AKASH', '11', 'PP', '26', 'FREAKS'),
(1687, 'BAHAVATHY', '12', 'LW', '26', 'FREAKS'),
(1688, 'HARIHARAN', '13', 'LW', '26', 'FREAKS'),
(1689, 'PREM', '14', 'LB', '26', 'FREAKS'),
(1690, 'KARTHICK ', '15', 'RW', '26', 'FREAKS'),
(1691, 'ROSHAN', '4', 'PP', '26', 'FAKERS'),
(1692, 'SHADHANI', '5', 'LB', '26', 'FAKERS'),
(1693, 'SASI', '6', 'LB', '26', 'FAKERS'),
(1694, 'SAKTHI', '7', 'RW', '26', 'FAKERS'),
(1695, 'KARTHICK', '8', 'RW', '26', 'FAKERS'),
(1696, 'GNANAVEL', '9', 'RW', '26', 'FAKERS'),
(1697, 'SRIRAM', '10', 'CB', '26', 'FAKERS'),
(1698, 'PHAVAN', '11', 'RB', '26', 'FAKERS'),
(1699, 'HARIHARAN', '12', 'LW', '26', 'FAKERS'),
(1700, 'BAHAVATHY', '13', 'LW', '26', 'FAKERS'),
(1701, 'PREM', '14 ', 'RB', '26', 'FAKERS'),
(1702, 'AKASH', '15', 'PP', '26', 'FAKERS'),
(1703, 'HARIAHARAN', '1', 'GK', '26', 'FREAKS'),
(1704, 'HARIHARAN', '2', 'GK', '26', 'FREAKS'),
(1705, 'HARIHARAN', '3', 'GK', '26', 'FREAKS'),
(1706, 'PREM', '1', 'GK', '26', 'FREAKS'),
(1707, 'PREM', '2', 'GK', '26', 'FREAKS'),
(1708, 'PREM', '3', 'GK', '26', 'FREAKS'),
(1709, 'ROSHAN', '4', 'PP', '26', 'FREAKS'),
(1710, 'SHADHANI', '5', 'LB', '26', 'FREAKS'),
(1711, 'SASI', '6', 'LB', '26', 'FREAKS'),
(1712, 'SAKTHI', '7', 'RW', '26', 'FREAKS'),
(1713, 'SRIRAM', '8', 'CB', '26', 'FREAKS'),
(1714, 'PHAVAN', '9', 'RB', '26', 'FREAKS'),
(1715, 'GNANAVEL', '10', 'RW', '26', 'FREAKS'),
(1716, 'AKASH', '11', 'PP', '26', 'FREAKS'),
(1717, 'BAHAVATHY', '12', 'LW', '26', 'FREAKS'),
(1718, 'HARIHARAN', '13', 'LW', '26', 'FREAKS'),
(1719, 'PREM', '14', 'LB', '26', 'FREAKS'),
(1720, 'KARTHICK ', '15', 'RW', '26', 'FREAKS'),
(1721, 'ROSHAN', '4', 'PP', '26', 'FAKERS'),
(1722, 'SHADHANI', '5', 'LB', '26', 'FAKERS'),
(1723, 'SASI', '6', 'LB', '26', 'FAKERS'),
(1724, 'SAKTHI', '7', 'RW', '26', 'FAKERS'),
(1725, 'KARTHICK', '8', 'RW', '26', 'FAKERS'),
(1726, 'GNANAVEL', '9', 'RW', '26', 'FAKERS'),
(1727, 'SRIRAM', '10', 'CB', '26', 'FAKERS'),
(1728, 'PHAVAN', '11', 'RB', '26', 'FAKERS'),
(1729, 'HARIHARAN', '12', 'LW', '26', 'FAKERS'),
(1730, 'BAHAVATHY', '13', 'LW', '26', 'FAKERS'),
(1731, 'PREM', '14 ', 'RB', '26', 'FAKERS'),
(1732, 'AKASH', '15', 'PP', '26', 'FAKERS'),
(1733, 'HARIAHARAN', '1', 'GK', '33', 'FAKERS'),
(1734, 'HARIHARAN', '2', 'GK', '33', 'FAKERS'),
(1735, 'HARIHARAN', '3', 'GK', '33', 'FAKERS'),
(1736, 'PREM', '1', 'GK', '33', 'FAKERS'),
(1737, 'PREM', '2', 'GK', '33', 'FAKERS'),
(1738, 'PREM', '3', 'GK', '33', 'FAKERS'),
(1739, 'ROSHAN', '4', 'PP', '33', 'FAKERS'),
(1740, 'SHADHANI', '5', 'LB', '33', 'FAKERS'),
(1741, 'SASI', '6', 'LB', '33', 'FAKERS'),
(1742, 'SAKTHI', '7', 'RW', '33', 'FAKERS'),
(1743, 'SRIRAM', '8', 'CB', '33', 'FAKERS'),
(1744, 'PHAVAN', '9', 'RB', '33', 'FAKERS'),
(1745, 'GNANAVEL', '10', 'RW', '33', 'FAKERS'),
(1746, 'AKASH', '11', 'PP', '33', 'FAKERS'),
(1747, 'BAHAVATHY', '12', 'LW', '33', 'FAKERS'),
(1748, 'HARIHARAN', '13', 'LW', '33', 'FAKERS'),
(1749, 'PREM', '14', 'LB', '33', 'FAKERS'),
(1750, 'KARTHICK ', '15', 'RW', '33', 'FAKERS'),
(1751, 'ROSHAN', '4', 'PP', '33', 'FREAKS'),
(1752, 'SHADHANI', '5', 'LB', '33', 'FREAKS'),
(1753, 'SASI', '6', 'LB', '33', 'FREAKS'),
(1754, 'SAKTHI', '7', 'RW', '33', 'FREAKS'),
(1755, 'KARTHICK', '8', 'RW', '33', 'FREAKS'),
(1756, 'GNANAVEL', '9', 'RW', '33', 'FREAKS'),
(1757, 'SARAVANAN', '10', 'CB', '33', 'FREAKS'),
(1758, 'PHAVAN', '11', 'RB', '33', 'FREAKS'),
(1759, 'HARIHARAN', '12', 'LW', '33', 'FREAKS'),
(1760, 'BAHAVATHY', '13', 'LW', '33', 'FREAKS'),
(1761, 'PREM', '14 ', 'RB', '33', 'FREAKS'),
(1762, 'AKASH', '15', 'PP', '33', 'FREAKS');

-- --------------------------------------------------------

--
-- Table structure for table `refree_details`
--

CREATE TABLE `refree_details` (
  `id` int(50) NOT NULL,
  `Match_no` varchar(50) NOT NULL,
  `Refree_name1` varchar(50) NOT NULL,
  `Refree_name2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `refree_details`
--

INSERT INTO `refree_details` (`id`, `Match_no`, `Refree_name1`, `Refree_name2`) VALUES
(15, '26', 'Sakthivel', 'Sasi'),
(16, '26', 'Sakthivel', 'Sasi'),
(17, '26', 'Sakthivel', 'Sasi'),
(18, '26', 'Sakthi', 'Sasi'),
(19, '26', 'Sakthi', 'Sasi'),
(20, '26', 'Sakthi', 'Sasi'),
(21, '26', 'Sakthi', 'Sasi'),
(22, '33', 'Sakthivel', 'Sasi'),
(23, '34', 'Sakthivel', 'Sasi'),
(24, '34', 'Sakthivel', 'Sasi'),
(25, '33', 'SASI', 'SAKTHI'),
(26, '33', 'SASI', 'SAKTHI'),
(27, '33', 'SASI', 'SAKTHI'),
(28, '33', 'SASI', 'SAKTHI'),
(29, '33', 'SASI', 'SAKTHI'),
(30, '26', 'SASI', 'SAKTHI'),
(31, '33', 'Sakthivel', 'Sasi'),
(32, '34', 'SASI', 'SAKTHI'),
(33, '44', 'SASI', 'SAKTHI'),
(34, '45', 'SASI', 'SAKTHI'),
(35, '45', 'SASI', 'SAKTHI'),
(36, '45', 'SASI', 'SAKTHI'),
(37, '45', 'SASI', 'SAKTHI'),
(38, '45', 'SASI', 'SAKTHI'),
(39, '26', 'SASI', 'SAKTHI'),
(40, '26', 'SASI', 'SAKTHI'),
(41, '33', 'SASI', 'SAKTHI');

-- --------------------------------------------------------

--
-- Table structure for table `stream_link`
--

CREATE TABLE `stream_link` (
  `id` int(11) NOT NULL,
  `match_no` int(11) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stream_link`
--

INSERT INTO `stream_link` (`id`, `match_no`, `link`) VALUES
(1, 33, 'https://www.youtube.com/embed/OBwFCwqLl3k?si=hA0uP46GlbZiJ5FC'),
(2, 33, 'https://www.youtube.com/embed/OBwFCwqLl3k?si=hA0uP46GlbZiJ5FC'),
(3, 26, 'https://www.youtube.com/embed/OBwFCwqLl3k?si=hA0uP46GlbZiJ5FC'),
(4, 33, 'https://www.youtube.com/embed/OBwFCwqLl3k?si=hA0uP46GlbZiJ5FC'),
(5, 34, 'https://www.youtube.com/embed/OBwFCwqLl3k?si=hA0uP46GlbZiJ5FC'),
(6, 44, 'https://www.youtube.com/embed/OBwFCwqLl3k?si=hA0uP46GlbZiJ5FC'),
(7, 45, 'https://www.youtube.com/embed/OBwFCwqLl3k?si=hA0uP46GlbZiJ5FC'),
(8, 45, 'https://www.youtube.com/embed/OBwFCwqLl3k?si=hA0uP46GlbZiJ5FC'),
(9, 45, 'https://www.youtube.com/embed/OBwFCwqLl3k?si=hA0uP46GlbZiJ5FC'),
(10, 45, 'https://www.youtube.com/embed/OBwFCwqLl3k?si=hA0uP46GlbZiJ5FC'),
(11, 45, 'https://www.youtube.com/embed/OBwFCwqLl3k?si=hA0uP46GlbZiJ5FC'),
(12, 26, 'om/embed/OBwFCwqLl3k?si=hA0uP46GlbZiJ5FC'),
(13, 26, 'om/embed/OBwFCwqLl3k?si=hA0uP46GlbZiJ5FC'),
(14, 33, 'https://www.youtube.com/embed/OBwFCwqLl3k?si=hA0uP46GlbZiJ5FC');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `id` int(11) NOT NULL,
  `league_name` varchar(50) NOT NULL,
  `refree1` varchar(50) NOT NULL,
  `refree2` varchar(50) NOT NULL,
  `league_img` varchar(500) NOT NULL,
  `host` varchar(50) NOT NULL,
  `lfrom` date NOT NULL,
  `lto` date NOT NULL,
  `ph` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`id`, `league_name`, `refree1`, `refree2`, `league_img`, `host`, `lfrom`, `lto`, `ph`, `email`) VALUES
(13, 'HBCL', 'SASI', 'SAKTHI', 'IMG-6542f39708a1c6.21177749.png', 'CEG', '2023-11-10', '2023-11-11', '9025917465', 'ishariharan2004@gmail.com'),
(14, 'PSG TECH TROPHY', 'HARI', 'SHADHANI', 'IMG-6542f3f4dc4242.47404829.png', 'PSG ', '2023-10-01', '2023-10-02', '9025917465', 'hariharanis.offl@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `type` text NOT NULL,
  `reset_token_hash` varchar(64) DEFAULT NULL,
  `reset_token_expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `name`, `email`, `password`, `type`, `reset_token_hash`, `reset_token_expires_at`) VALUES
(4, 'nithin', 'nithin@gmail.com', 'nithin007', 'user', NULL, NULL),
(5, 'I.S.HARIHARAN', 'ishariharan2004@gmail.com', 'hariharan', 'host', '34e4541e7df1cd9173942e9894a37eb53ac928c8960f48757953b85fdfeccd35', '2023-10-31 15:22:48'),
(6, 'shadhani', 'shadhani@gmail.com', 'shadhani', 'user', '174373c37b848d579f0ffec8015fc812979a3f059b0cd30519a0c87331342f8b', '2023-10-28 11:38:36'),
(7, 'mukil', 'mukil@gmail.com', 'mukil', 'user', NULL, NULL),
(9, 'jeevesh', 'jeevesh@gmail.com', 'jeevesh', 'user', NULL, NULL),
(10, 'saravanan', 'saravanan.1976@yahoo.co.in', 'saravanan', 'user', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `check_db`
--
ALTER TABLE `check_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `img_details`
--
ALTER TABLE `img_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `league_details`
--
ALTER TABLE `league_details`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `match_details`
--
ALTER TABLE `match_details`
  ADD PRIMARY KEY (`match_id`);

--
-- Indexes for table `player_details`
--
ALTER TABLE `player_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refree_details`
--
ALTER TABLE `refree_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stream_link`
--
ALTER TABLE `stream_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `check_db`
--
ALTER TABLE `check_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `img_details`
--
ALTER TABLE `img_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `league_details`
--
ALTER TABLE `league_details`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `match_details`
--
ALTER TABLE `match_details`
  MODIFY `match_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `player_details`
--
ALTER TABLE `player_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1763;

--
-- AUTO_INCREMENT for table `refree_details`
--
ALTER TABLE `refree_details`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `stream_link`
--
ALTER TABLE `stream_link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `updates`
--
ALTER TABLE `updates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
