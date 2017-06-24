-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 24, 2017 lúc 09:44 SA
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `learningci`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customerinfo`
--

CREATE TABLE `customerinfo` (
  `id` int(11) NOT NULL,
  `firstName` text COLLATE utf8_unicode_ci NOT NULL,
  `lastName` text COLLATE utf8_unicode_ci NOT NULL,
  `phoneNumber` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `question` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customerinfo`
--

INSERT INTO `customerinfo` (`id`, `firstName`, `lastName`, `phoneNumber`, `email`, `question`) VALUES
(2, 'Quang', 'Lam', '0963225057', 'lamquanguit@gmail.com', 'is this ok now ?'),
(10, 'Quang', 'Lâm', '0963225057', 'lamquanguit@gmail.com', 'all good'),
(24, 'Quang', 'Lâm', '0963225057', 'lamquanguit@gmail.com', 'Ok rồi anh.');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `customerinfo`
--
ALTER TABLE `customerinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `customerinfo`
--
ALTER TABLE `customerinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
