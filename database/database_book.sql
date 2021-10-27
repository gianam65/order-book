-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 27, 2021 lúc 04:22 PM
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
-- Cơ sở dữ liệu: `database_book`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) UNSIGNED NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL,
  `admin_phone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_name`, `admin_pass`, `admin_phone`) VALUES
(1, 'gianam', '123456', '0969193637'),
(2, 'nhatminh', '123456', '0123456789'),
(3, 'minhnghia', '123456', '1234567899');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_books`
--

CREATE TABLE `tb_books` (
  `book_id` int(30) UNSIGNED NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `book_price` double NOT NULL,
  `book_author` varchar(100) NOT NULL,
  `book_desc` varchar(500) NOT NULL,
  `book_status` tinyint(1) NOT NULL,
  `book_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tb_books`
--

INSERT INTO `tb_books` (`book_id`, `book_name`, `book_price`, `book_author`, `book_desc`, `book_status`, `book_image`) VALUES
(1, 'Tin Tức Kiến Tạo - Constructive News', 90000, 'Ulrik Haagerup', 'Lý giải vì sao tiêu cực phá hoại truyền thông và dân chủ.- Đề xuất giải pháp xây dựng một nền báo ch', 1, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_book_manager`
--

CREATE TABLE `tb_book_manager` (
  `manager_id` int(11) UNSIGNED NOT NULL,
  `manager_name` varchar(100) NOT NULL,
  `manager_pass` varchar(100) NOT NULL,
  `manager_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tb_book_manager`
--

INSERT INTO `tb_book_manager` (`manager_id`, `manager_name`, `manager_pass`, `manager_email`) VALUES
(1, 'n4m', '123456', 'n4m@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_users`
--

CREATE TABLE `tb_users` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_phone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tb_users`
--

INSERT INTO `tb_users` (`user_id`, `user_name`, `user_pass`, `user_email`, `user_phone`) VALUES
(1, 'nammmdev', '123456', 'nammmdev@gmail.com', '1234567899');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tb_books`
--
ALTER TABLE `tb_books`
  ADD PRIMARY KEY (`book_id`);

--
-- Chỉ mục cho bảng `tb_book_manager`
--
ALTER TABLE `tb_book_manager`
  ADD PRIMARY KEY (`manager_id`);

--
-- Chỉ mục cho bảng `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tb_books`
--
ALTER TABLE `tb_books`
  MODIFY `book_id` int(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tb_book_manager`
--
ALTER TABLE `tb_book_manager`
  MODIFY `manager_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
