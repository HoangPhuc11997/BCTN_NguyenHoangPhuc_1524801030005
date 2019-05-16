-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 16, 2019 lúc 10:30 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `gameshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`) VALUES
(6, 'admin', '202cb962ac59075b964b07152d234b70', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `name` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `home` int(11) DEFAULT '0',
  `sort_order` tinyint(4) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `home`, `sort_order`) VALUES
(24, 'Hành động', 1, 0),
(25, 'Nhập vai', 0, 0),
(27, 'Chiến thuật', 1, 0),
(28, 'Đối kháng', 0, 0),
(30, 'Kinh dị', 0, 0),
(32, 'Fantasy', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `transaction_id` int(255) NOT NULL,
  `id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT '0',
  `price` decimal(15,0) NOT NULL DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`transaction_id`, `id`, `product_id`, `qty`, `price`, `created`, `status`) VALUES
(36, 6, 18, 2, '220000', '2019-05-05 01:35:06', NULL),
(36, 7, 25, 1, '215000', '2019-05-05 01:35:06', NULL),
(37, 8, 25, 1, '215000', '2019-05-05 01:38:47', NULL),
(38, 9, 19, 1, '20000', '2019-05-13 03:14:24', NULL),
(39, 10, 19, 1, '20000', '2019-05-13 03:17:46', NULL),
(40, 11, 27, 1, '160000', '2019-05-16 07:33:02', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `catalog_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(15,0) NOT NULL DEFAULT '0',
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0',
  `discount` int(11) DEFAULT NULL,
  `image_link` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `image_list` text COLLATE utf8_unicode_ci,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `view` int(11) DEFAULT '0',
  `pay` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `catalog_id`, `name`, `price`, `content`, `quantity`, `discount`, `image_link`, `image_list`, `created`, `view`, `pay`) VALUES
(21, 32, 'Final Fantasy XIII : Lightning return', '200000', 'Final Fantasy XIII : Lightning return', 40, NULL, 'ffxiii3.jpg', NULL, '2019-04-19 08:16:59', 0, 0),
(18, 24, 'Midle Earth : Shadow of war', '220000', 'Middle-earth: Shadow of War is an open world action role-playing video game developed by Monolith Productions and published by Warner Bros. Interactive Entertainment. It is the sequel to 2014\'s Middle-earth: Shadow of Mordor, and was released worldwide for Microsoft Windows, PlayStation 4, and Xbox One on October 10, 2017.', 18, NULL, 'sow.jpg', NULL, '2019-04-19 05:41:01', 0, 1),
(19, 32, 'Final Fantasy XIII', '20000', 'Final Fantasy XIII', 98, NULL, 'ffxiii.jpg', NULL, '2019-04-19 05:46:21', 0, 2),
(20, 32, 'Final Fantasy XV', '1000000', 'Final Fantasy XV', 19, NULL, 'ffxv.jpg', NULL, '2019-04-19 07:29:44', 0, 0),
(23, 24, 'Midle Earth : Shadow of war', '1000000', 'Midle Earth : Shadow of war', 20, NULL, 'sow.jpg', NULL, '2019-04-24 02:59:51', 0, 0),
(27, 30, 'Final Fantasy VIII', '160000', 'Final Fantasy VIII', 40, NULL, 'ff8.jpg', NULL, '2019-05-16 07:29:54', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transaction`
--

CREATE TABLE `transaction` (
  `id` bigint(20) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `amount` decimal(15,0) NOT NULL DEFAULT '0',
  `payment` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_info` text COLLATE utf8_bin,
  `message` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `transaction`
--

INSERT INTO `transaction` (`id`, `status`, `user_id`, `amount`, `payment`, `payment_info`, `message`, `created`) VALUES
(40, 0, 25, '176000', NULL, NULL, '', '2019-05-16 07:33:02'),
(39, 1, 20, '22000', NULL, NULL, '', '2019-05-13 03:17:46'),
(38, 1, 20, '22000', NULL, NULL, '', '2019-05-13 03:14:24'),
(37, 1, 20, '236500', NULL, NULL, '', '2019-05-05 01:38:47'),
(36, 1, 20, '720500', NULL, NULL, '', '2019-05-05 01:35:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `address`, `password`, `created`) VALUES
(24, 'phúc', 'hoangphuc@gmail.com', '01246565227', 'Thuận An', 'e10adc3949ba59abbe56e057f20f883e', '2019-04-27 06:37:53'),
(20, 'Phúc', 'phuc@gmail.com', '0123456789', 'Thuận An', '202cb962ac59075b964b07152d234b70', '2019-04-27 06:19:28'),
(25, 'Phúc', 'phuc1@gmail.com', '012345678', 'Thuận An', 'e10adc3949ba59abbe56e057f20f883e', '2019-05-16 07:31:55');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `product` ADD FULLTEXT KEY `name` (`name`);

--
-- Chỉ mục cho bảng `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
