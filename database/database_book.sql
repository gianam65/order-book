-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 31, 2021 lúc 12:52 PM
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
  `book_image` varchar(255) NOT NULL,
  `book_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tb_books`
--

INSERT INTO `tb_books` (`book_id`, `book_name`, `book_price`, `book_author`, `book_desc`, `book_status`, `book_image`, `book_type`) VALUES
(156, 'nam', 214000, 'Nguyễn Hoàng Anh', 'Nổi tiếng sau một đêm với biệt danh “hotgirl bóng bàn”, Trần Minh Phương Thảo đã trở thành cái tên không còn xa lạ với giới trẻ Việt. Cô gái nổi lên nhờ ngoại hình xinh xắn cùng thành tích thi đấu siêu', 0, 'slide5.jpg', ''),
(157, 'nam', 50000, 'Trần Minh Phương Thảo', 'CUỐN SÁCH ĐẦU TAY CỦA CỰU THÀNH VIÊN NHÓM NHẠC HUYỀN THOẠI SNSD (GIRLS’ GENERATION). PHÁT HÀNH ĐÚNG VÀO NGÀY 30/9/2020, TRÒN 6 NĂM SAU SỰ KIỆN JESSICA JUNG RỜI KHỎI NHÓM NHẠC.', 0, 'slide2.jpg', ''),
(158, 'Range - Hiểu Sâu, Biết Rộng Kiểu Gì Cũng Thắng', 214000, 'Nguyễn Hoàng Anh', 'Lý giải vì sao tiêu cực phá hoại truyền thông và dân chủ.- Đề xuất giải pháp xây dựng một nền báo chí đa chiều, có khả năng truyền cảm hứng tích cực và mang lại nhiều lợi ích toàn cầu hơn.', 1, 'slide3.jpg', ''),
(159, 'Trong Khi Chờ Đợi Godot', 300000, 'Samuel Beckett', 'Trong khi chờ đợi Godot: đó là vấn nạn siêu hình của loài người khi nhận ra sự chờ đợi là vĩnh viễn và bất định, được khắc họa bằng một vẻ mộc mạc đích thực, đầy chất thơ”.', 0, 'no-book-show.png', ''),
(160, 'Kẻ Dọn Rác (Series Bác Sĩ Pháp Y Tần Minh) (Tái Bản 2020)', 214000, 'Tần Minh', 'Một sát thủ bí ẩn âm thầm xuất hiện trong thành phố, hắn lặng lẽ hành quyết những người lang thang, những kẻ tâm thần. Sau khi gây án, hắn hoàn toàn không để lại dấu vết nào ngoại trừ chữ “Kẻ dọn rác”', 0, 'slide4.jpg', ''),
(161, 'Chinh Phục Cơn Hoảng Loạn', 86000, ' Mã Thanh Danh', 'Khủng hoảng COVID là một đòn đánh mạnh vào tất cả các mặt của toàn cầu. Thay đổi để thích nghi là câu chuyện tất yếu sẽ xảy đến hậu COVID.', 0, 'stevejobs.jpg', ''),
(162, 'Dấu Chân Trên Cát (Tái Bản 2021)', 118000, 'Nguyên Phong', '“Dấu chân trên cát” là tác phẩm được dịch giả Nguyên Phong phóng tác kể về xã hội Ai Cập thế kỷ thứ XIV trước CN, qua lời kể của nhân vật chính -  Sinuhe.', 1, 'sushi.jpeg', ''),
(163, 'Vốn Đổi Mới - Innovation Capital', 225000, 'Kim Diệu', 'Các chuyên gia đổi mới Jeff Dyer, Nathan Furr và Curtis Lefrandt tiết lộ thành phần quan trọng – vốn đổi mới – giải thích lý do tại sao ý tưởng của bạn giành được các nguồn lực và sự hỗ trợ', 1, '365554_p93496mimage220128.jpg', ''),
(164, 'Boglehead Hướng Dẫn Cách Đầu Tư: Các Mẹo Đầu Tư Dành Cho Người Mới Bắt Đầu', 86000, 'Ngô Thế Vinh', 'Để giải quyết phần lớn thách thức trong cuộc sống, chúng ta thường được khuyên nên nắm rõ các nguyên tắc sau:- Nếu không biết làm gì đó, hãy thuê chuyên gia- Tiền nào của nấy', 1, 'img1.jpg', ''),
(165, 'Tăng Trưởng Thông Minh - Growth IQ Xem trích đoạn Tăng Trưởng Thông Minh - Growth IQ', 50000, 'Hoàng Linh', 'Nổi tiếng sau một đêm với biệt danh “hotgirl bóng bàn”, Trần Minh Phương Thảo đã trở thành cái tên không còn xa lạ với giới trẻ Việt. Cô gái nổi lên nhờ ngoại hình xinh xắn cùng thành tích thi đấu siêu', 1, 'img2.jpg', ''),
(166, 'Những Kẻ Cầu Toàn Đã Thay Đổi Thế Giới Như Thế Nào', 118000, 'NXB Trẻ', 'Tác giả sách bán chạy nhất của New York đã lần theo quá trình phát triển của công nghệ từ Thời đại công nghiệp đến Thời đại kỹ thuật số để khám phá yếu tố duy nhất quan trọng đối với sự tiến bộ', 1, 'img3.jpg', ''),
(167, 'Lì Quá Để Nói Quài', 214000, 'Anh Cầm Fact', 'Anh Cầm Fact là fanpage đại diện bởi một anh chàng khó ở, sẵn sàng nói hộ tiếng lòng của mọi người về những vấn đề khó đỡ trong cuộc sống. Dù mới ra đời đầu năm 2020,', 1, '366428_p93859mz2457193695989fd0bbcba7812d5fdebaf10dec13a8b29.jpg', ''),
(168, 'Muôn Kiếp Nhân Sinh - Many Times, Many Lives - Tập 2', 214000, 'Nguyễn Hoàng Anh', 'Lý giải vì sao tiêu cực phá hoại truyền thông và dân chủ.- Đề xuất giải pháp xây dựng một nền báo chí đa chiều, có khả năng truyền cảm hứng tích cực và mang lại nhiều lợi ích toàn cầu hơn.', 1, 'house-4.jpg', '');

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
  MODIFY `book_id` int(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT cho bảng `tb_book_manager`
--
ALTER TABLE `tb_book_manager`
  MODIFY `manager_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
