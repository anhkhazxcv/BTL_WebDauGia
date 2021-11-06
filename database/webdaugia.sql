-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 05, 2021 lúc 09:18 PM
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
  `sp_id` int(5) NOT NULL,
  `sp_type` varchar(50) NOT NULL,
  `sp_img` blob NOT NULL,
  `sp_name` varchar(30) NOT NULL,
  `sp_description` varchar(1000) NOT NULL,
  `sp_price` int(20) NOT NULL,
  `sp_startdate` date NOT NULL,
  `sp_enddate` date NOT NULL,
  `sp_status` varchar(50) NOT NULL DEFAULT 'Pending ',
  `sp_buyer` varchar(50) DEFAULT NULL,
  `uid` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`sp_id`, `sp_type`, `sp_img`, `sp_name`, `sp_description`, `sp_price`, `sp_startdate`, `sp_enddate`, `sp_status`, `sp_buyer`, `uid`) VALUES
(1002, 'đồ dùng', 0x68747470733a2f2f63656c6c70686f6e65732e636f6d2e766e2f73666f72756d2f77702d636f6e74656e742f75706c6f6164732f323031382f31312f332d382e706e67, 'đồ dùng', 'sản phẩm còn mới 100%', 3, '2021-11-05', '2021-11-21', 'Running', '', 'hasua'),
(1003, 'đồ dùng', 0x68747470733a2f2f63656c6c70686f6e65732e636f6d2e766e2f73666f72756d2f77702d636f6e74656e742f75706c6f6164732f323031382f31312f332d382e706e67, 'đồ dùng', 'sản phẩm còn mới 100%', 21123, '2021-11-07', '2021-11-28', 'Running', NULL, 'hasua');

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
  ADD PRIMARY KEY (`sp_id`),
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
  MODIFY `sp_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;

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
