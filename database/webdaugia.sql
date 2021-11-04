-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 04, 2021 lúc 05:48 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webdaugia`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `cid` int(11) NOT NULL,
  `c_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`cid`, `c_name`) VALUES
(0, 'Mobiles'),
(1, 'Mobile Accessories'),
(2, 'Wearables'),
(3, 'Laptops'),
(4, 'Computer Accessories'),
(5, 'Cameras'),
(6, 'Tablets'),
(0, 'Mobiles'),
(1, 'Mobile Accessories'),
(2, 'Wearables'),
(3, 'Laptops'),
(4, 'Computer Accessories'),
(5, 'Cameras'),
(6, 'Tablets');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanlysp`
--

CREATE TABLE `quanlysp` (
  `sp_ma` int(5) NOT NULL,
  `sp_loai` varchar(50) NOT NULL,
  `sp_anh` blob NOT NULL,
  `sp_ten` varchar(30) NOT NULL,
  `sp_mota` varchar(1000) NOT NULL,
  `sp_gia` int(20) NOT NULL,
  `sp_ngaybd` date NOT NULL,
  `sp_ngaykt` date NOT NULL,
  `sp_trangthai` varchar(50) NOT NULL,
  `sp_nguoimua` varchar(50) NOT NULL,
  `uid` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `uid` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `pwd` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(60) NOT NULL,
  `admin` char(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`fname`, `lname`, `uid`, `pwd`, `email`, `mobile`, `dob`, `address`, `admin`) VALUES
('Nguyen Van', 'A', 'Abc', '654321', 'a@gmail.com', '0123456789', '0000-00-00', 'Nha', NULL),
('Nguyen Van', 'Kha', 'anhkhazxcv', '123456', 'anhkhazxcv@gmail.com', '0329994871', '0000-00-00', 'Tri Qua Bac Ninh', ''),
('Nguyen Hong', 'Ha', 'hasua', '123456', 'ha11882000@gmail.com', '0868342396', '0000-00-00', 'Hanoi', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `quanlysp`
--
ALTER TABLE `quanlysp`
  ADD PRIMARY KEY (`sp_ma`),
  ADD KEY `uid` (`uid`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `quanlysp`
--
ALTER TABLE `quanlysp`
  ADD CONSTRAINT `quanlysp_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
