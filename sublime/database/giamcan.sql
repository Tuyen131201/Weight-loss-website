-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2022 at 02:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giamcan`
--

-- --------------------------------------------------------

--
-- Table structure for table `bmi`
--

CREATE TABLE `bmi` (
  `bmi_id` varchar(5) NOT NULL,
  `chiso` float DEFAULT NULL,
  `thetrang_id` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bmi`
--

INSERT INTO `bmi` (`bmi_id`, `chiso`, `thetrang_id`) VALUES
('12', 24.2439, '12'),
('BMI02', 22.6562, 'TTT02'),
('BMI03', 27.5862, 'TTT03'),
('BMI05', 25.3906, 'TTT05'),
('BMI08', 20.0692, 'TTT08'),
('BMI09', 27.5862, 'TTM09'),
('BMI10', 28.5375, 'TTM10');

-- --------------------------------------------------------

--
-- Table structure for table `calo`
--

CREATE TABLE `calo` (
  `calo_id` varchar(5) NOT NULL,
  `tong_calo_giam` int(11) DEFAULT NULL,
  `tong_calo_nap` int(11) DEFAULT NULL,
  `tong_calo_can_giam` int(11) DEFAULT NULL,
  `tong_calo_can_nap` int(11) DEFAULT NULL,
  `bmi_id` varchar(5) DEFAULT NULL,
  `thucdon_id` varchar(5) DEFAULT NULL,
  `bttd_id` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calo`
--

INSERT INTO `calo` (`calo_id`, `tong_calo_giam`, `tong_calo_nap`, `tong_calo_can_giam`, `tong_calo_can_nap`, `bmi_id`, `thucdon_id`, `bttd_id`) VALUES
('CLM03', NULL, NULL, 900, 1600, 'BMI08', NULL, NULL),
('CLM10', NULL, NULL, 1000, 1600, 'BMI10', NULL, NULL),
('CLT01', NULL, NULL, 900, 1600, '12', NULL, NULL),
('CLT02', NULL, NULL, 900, 1600, 'BMI02', NULL, NULL),
('CLT05', NULL, NULL, 1000, 1600, 'BMI05', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hoatdong`
--

CREATE TABLE `hoatdong` (
  `bttd_id` varchar(5) NOT NULL,
  `bttd_ten` varchar(50) NOT NULL,
  `bttd_calo` int(4) DEFAULT NULL,
  `tv_email` varchar(50) DEFAULT NULL,
  `thoigian_calo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoatdong`
--

INSERT INTO `hoatdong` (`bttd_id`, `bttd_ten`, `bttd_calo`, `tv_email`, `thoigian_calo`) VALUES
('1', 'Ngủ', 50, 'tuyen123@gmail.com', '30');

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE `thanhvien` (
  `tv_email` varchar(50) NOT NULL,
  `tv_password` varchar(30) NOT NULL,
  `tv_hoten` varchar(50) NOT NULL,
  `tv_sdt` varchar(10) NOT NULL,
  `tv_diachi` varchar(50) DEFAULT NULL,
  `user_type` varchar(30) NOT NULL,
  `thetrang_id` varchar(5) NOT NULL,
  `matv` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`tv_email`, `tv_password`, `tv_hoten`, `tv_sdt`, `tv_diachi`, `user_type`, `thetrang_id`, `matv`) VALUES
('bichtuyen@gmail.com', '123456', 'Bích Tuyền', '0936542123', 'Hậu Giang', 'user', '', ''),
('l@gmail.com', '123456', 'Nguyen Minh L', '0912345678', 'Hậu Giang', 'user', '', ''),
('m@gmail.com', '131201', 'Nguyen M', '0369258147', 'Cần Thơ', 'user', '', ''),
('p@gmail.com', '123456', 'Nguyễn P', '0132698451', 'Cần Thơ', 'user', '', ''),
('tam@gmail.com', '131201', 'Mai Khắc Tâm', '0963254123', 'Sóc Trăng', 'user', '', ''),
('Tran B', '123456', 'b1@gmail.com', '0912345678', 'An Giang', 'user', '', ''),
('tuyen123@gmail.com', '123456', 'Tuinen', '0963123456', 'Soc Trang', 'admin', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `thetrang`
--

CREATE TABLE `thetrang` (
  `thetrang_id` varchar(5) NOT NULL,
  `height` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `ngay` date DEFAULT NULL,
  `tv_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thetrang`
--

INSERT INTO `thetrang` (`thetrang_id`, `height`, `weight`, `ngay`, `tv_email`) VALUES
('12', 158, 59, '2022-11-23', 'tam@gmail.com'),
('TTM02', 145, 60, '2022-12-29', 'm@gmail.com'),
('TTM09', 145, 58, '2022-11-30', 'm@gmail.com'),
('TTM10', 145, 60, '2022-11-30', 'm@gmail.com'),
('TTT02', 160, 60, '2022-11-30', 'tam@gmail.com'),
('TTT03', 145, 58, '2022-11-29', 'tam@gmail.com'),
('TTT05', 160, 65, '2022-11-30', 'tam@gmail.com'),
('TTT08', 170, 58, '2022-11-30', 'm@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `thucdon`
--

CREATE TABLE `thucdon` (
  `thucdon_id` varchar(5) NOT NULL,
  `buoi` varchar(20) DEFAULT NULL,
  `tongcalo` int(11) NOT NULL,
  `thucpham_id` varchar(5) DEFAULT NULL,
  `tv_email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thucdon`
--

INSERT INTO `thucdon` (`thucdon_id`, `buoi`, `tongcalo`, `thucpham_id`, `tv_email`) VALUES
('S1', 'Sáng', 180, '2', NULL),
('S2', 'Sáng', 80, '1', NULL),
('S3', 'Sáng', 180, '3', 'tuyen123@gmail.com'),
('S4', 'Sáng', 120, '2', NULL),
('S5', 'Sáng', 200, '7', 'tuyen123@gmail.com'),
('T1', 'Tối', 90, '12', NULL),
('T2', 'Tối', 125, '11', NULL),
('T3', 'Tối', 150, '10', NULL),
('Tr1', 'Trưa', 450, '6 ', NULL),
('Tr2', 'Trưa', 300, '8', NULL),
('Tr3', 'Trưa', 200, '5', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `thucpham`
--

CREATE TABLE `thucpham` (
  `thucpham_id` varchar(5) NOT NULL,
  `thucpham_ten` varchar(50) NOT NULL,
  `thucpham_calo` int(4) DEFAULT NULL,
  `tv_email` varchar(50) DEFAULT NULL,
  `donvitinh` varchar(30) NOT NULL,
  `ngay` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thucpham`
--

INSERT INTO `thucpham` (`thucpham_id`, `thucpham_ten`, `thucpham_calo`, `tv_email`, `donvitinh`, `ngay`) VALUES
('1', 'Bánh mì gạo lứt', 70, 'tuyen123@gmail.com', '', NULL),
('10', 'Salas trộn trứng', 190, NULL, '100g', NULL),
('11', 'Salas trộn thịt xông khói', 200, NULL, '100g', NULL),
('12', 'Ổi', 90, NULL, '100g', NULL),
('2', 'Cháo yến mạch', 85, NULL, '1 tô', NULL),
('3', 'Nui', 60, 'tuyen123@gmail.com', '', NULL),
('4', 'Bánh mì thịt gà nướng ', 337, NULL, '1 cái', NULL),
('5', 'Trứng cuộn ức gả ', 375, NULL, '100g', NULL),
('6 ', 'Kimbap ức gà', 357, NULL, '100g', NULL),
('7', 'Mì ý ức gà', NULL, NULL, '100g', NULL),
('8', 'Đùi Gà KFC', 250, NULL, '1 miếng', NULL),
('9', 'Cơm nấm cá ngừ Mayo', 200, NULL, '190', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `tintuc_id` varchar(5) DEFAULT NULL,
  `tintuc_ten` varchar(50) DEFAULT NULL,
  `tintuc_noidung` varchar(200) DEFAULT NULL,
  `tv_email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bmi`
--
ALTER TABLE `bmi`
  ADD PRIMARY KEY (`bmi_id`),
  ADD KEY `fk_thetrang` (`thetrang_id`);

--
-- Indexes for table `calo`
--
ALTER TABLE `calo`
  ADD PRIMARY KEY (`calo_id`),
  ADD KEY `bmi_id` (`bmi_id`),
  ADD KEY `thucdon_id` (`thucdon_id`),
  ADD KEY `FK_cl` (`bttd_id`);

--
-- Indexes for table `hoatdong`
--
ALTER TABLE `hoatdong`
  ADD PRIMARY KEY (`bttd_id`),
  ADD KEY `tv_email` (`tv_email`);

--
-- Indexes for table `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`tv_email`);

--
-- Indexes for table `thetrang`
--
ALTER TABLE `thetrang`
  ADD PRIMARY KEY (`thetrang_id`),
  ADD KEY `tv_email` (`tv_email`);

--
-- Indexes for table `thucdon`
--
ALTER TABLE `thucdon`
  ADD PRIMARY KEY (`thucdon_id`),
  ADD KEY `thucpham_id` (`thucpham_id`),
  ADD KEY `tv_email` (`tv_email`);

--
-- Indexes for table `thucpham`
--
ALTER TABLE `thucpham`
  ADD PRIMARY KEY (`thucpham_id`),
  ADD KEY `tv_email` (`tv_email`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD KEY `tv_email` (`tv_email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bmi`
--
ALTER TABLE `bmi`
  ADD CONSTRAINT `fk_thetrang` FOREIGN KEY (`thetrang_id`) REFERENCES `thetrang` (`thetrang_id`);

--
-- Constraints for table `calo`
--
ALTER TABLE `calo`
  ADD CONSTRAINT `FK_cl` FOREIGN KEY (`bttd_id`) REFERENCES `hoatdong` (`bttd_id`),
  ADD CONSTRAINT `calo_ibfk_1` FOREIGN KEY (`bmi_id`) REFERENCES `bmi` (`bmi_id`),
  ADD CONSTRAINT `calo_ibfk_2` FOREIGN KEY (`thucdon_id`) REFERENCES `thucdon` (`thucdon_id`);

--
-- Constraints for table `hoatdong`
--
ALTER TABLE `hoatdong`
  ADD CONSTRAINT `hoatdong_ibfk_1` FOREIGN KEY (`tv_email`) REFERENCES `thanhvien` (`tv_email`);

--
-- Constraints for table `thetrang`
--
ALTER TABLE `thetrang`
  ADD CONSTRAINT `thetrang_ibfk_1` FOREIGN KEY (`tv_email`) REFERENCES `thanhvien` (`tv_email`);

--
-- Constraints for table `thucdon`
--
ALTER TABLE `thucdon`
  ADD CONSTRAINT `thucdon_ibfk_1` FOREIGN KEY (`thucpham_id`) REFERENCES `thucpham` (`thucpham_id`),
  ADD CONSTRAINT `thucdon_ibfk_2` FOREIGN KEY (`tv_email`) REFERENCES `thanhvien` (`tv_email`);

--
-- Constraints for table `thucpham`
--
ALTER TABLE `thucpham`
  ADD CONSTRAINT `thucpham_ibfk_1` FOREIGN KEY (`tv_email`) REFERENCES `thanhvien` (`tv_email`);

--
-- Constraints for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `tintuc_ibfk_1` FOREIGN KEY (`tv_email`) REFERENCES `thanhvien` (`tv_email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
