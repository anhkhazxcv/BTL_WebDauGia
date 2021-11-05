-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 05, 2021 lúc 02:04 AM
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
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `pd_id` int(11) NOT NULL,
  `pd_type` varchar(50) NOT NULL,
  `pd_description` varchar(1000) NOT NULL,
  `pd_price` int(20) NOT NULL,
  `pd_startdate` date DEFAULT NULL,
  `pd_enddate` date DEFAULT NULL,
  `pd_status` varchar(50) DEFAULT NULL,
  `uid` varchar(25) NOT NULL,
  `pd_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`pd_id`, `pd_type`, `pd_description`, `pd_price`, `pd_startdate`, `pd_enddate`, `pd_status`, `uid`, `pd_name`) VALUES
(1, 'adf', 'dsfdasgdfg', 166, '0000-00-00', '0000-00-00', 'new', 'hasua', ''),
(2, 'adf', 'dsfdasgdfg', 166, '0000-00-00', '0000-00-00', 'new', 'hasua', ''),
(3, 'adf', 'dsfdasgdfg', 166, '0000-00-00', '0000-00-00', 'new', 'hasua', ''),
(4, 'đồ dùng', 'đồ chơi đẹp', 1233, '0000-00-00', '0000-00-00', 'mới', 'hasua', ''),
(5, 'product', 'This is the new toys for children', 100, '2021-11-03', '2021-11-03', 'new', 'hasua', ''),
(7, 'đồ dùng', 'đồ chơi đẹp', 1233, '0000-00-00', '0000-00-00', 'mới', 'hasua', 'new1'),
(11, 'dfgh', 'đồ chơi đẹp', 123, '0000-00-00', '0000-00-00', 'mới', 'hasua', 'đồ chơi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `uid` varchar(25) NOT NULL,
  `pwd` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `admin` char(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`fname`, `lname`, `uid`, `pwd`, `email`, `mobile`, `dob`, `address`, `admin`) VALUES
('Nguyễn', 'Hà', '0868342396', '123456', 'admin@a', '', '0000-00-00', ' ', ''),
('Nguyen Van', 'A', 'Abc', '654321', 'a@gmail.com', '0123456789', '0000-00-00', 'Nha', NULL),
('Nguyen Van', 'Kha', 'anhkhazxcv', '123456', 'anhkhazxcv@gmail.com', '0329994871', '0000-00-00', 'Tri Qua Bac Ninh', ''),
('Nguyen Hong', 'Ha', 'hasua', '123456', 'ha11882000@gmail.com', '0868342396', '0000-00-00', 'Hanoi', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pd_id`),
  ADD KEY `uid` (`uid`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `pd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
