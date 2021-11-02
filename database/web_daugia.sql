-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 02, 2021 lúc 01:28 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_daugia`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanlysp`
--

CREATE TABLE `quanlysp` (
  `sp_ma` int(5) NOT NULL,
  `sp_anh` blob NOT NULL,
  `sp_ten` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_mota` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_gia` int(20) NOT NULL,
  `sp_ngay` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quanlysp`
--

INSERT INTO `quanlysp` (`sp_ma`, `sp_anh`, `sp_ten`, `sp_mota`, `sp_gia`, `sp_ngay`) VALUES
(1, 0x333333, 'fdsdfs', 'âfafdf', 333333, '0000-00-00 00:00:00'),
(7, 0x333333, 'fdsdfs', 'thhhh', 3444, '2021-11-28 00:00:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `quanlysp`
--
ALTER TABLE `quanlysp`
  ADD PRIMARY KEY (`sp_ma`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
