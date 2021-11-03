-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 03, 2021 lúc 03:59 PM
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
(3, 'minhnghia', '123456', '1234567899'),
(4, 'nhatminh', '123456', '0888081747');

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
(168, 'Muôn Kiếp Nhân Sinh - Many Times, Many Lives - Tập 2', 214000, 'Nguyễn Hoàng Anh', 'Lý giải vì sao tiêu cực phá hoại truyền thông và dân chủ.- Đề xuất giải pháp xây dựng một nền báo chí đa chiều, có khả năng truyền cảm hứng tích cực và mang lại nhiều lợi ích toàn cầu hơn.', 1, 'house-4.jpg', ''),
(169, 'Mẹ, thơm một cái', 90000, 'Cửu Bả Đao', '“Mẹ, thơm một cái”, là cuốn sách kể lại toàn bộ quá trình Cửu Bả Đao – một nhà văn trẻ nổi tiếng Trung Quốc khi ấy mới 28 tuổi và còn đang hoàn thành chương trình học – chăm sóc mẹ khi mẹ anh bị bệnh ung thư. Cửu Bả Đao được độc giả/ khán giả Việt Nam biết đến nhiều nhất qua bộ phim \"You Are The Apple In My Eyes\" do anh là tác giả sách kiêm đạo diễn', 1, 'methommotcai.jpg', ''),
(170, 'Cô vợ Hồ Ly ngốc nghếch', 100000, 'Kính Trung Ảnh', 'Hồ ly vốn dĩ được xây dựng hình ảnh từ bao lâu là một nhân vật ma mị, xinh đẹp vô đối và có thói quen sử dụng vẻ đẹp ấy quyến rũ các Bạch mã công tử lạc lối vào vườn yêu. Từ đó trở thành nạn nhân cho mục đích tu thân làm người, vốn vẫn là mục đích bao đời nay của gia tộc Hồ ly', 1, 'covoholy.jpg', ''),
(171, 'Dẫn Dắt Bản Thân, Đội Nhóm Và Tổ Chức Vươn Xa - The book of leadership', 150000, 'Anthony  Gell', 'Cuốn sách này dành cho những con người giàu khát vọng, mong muốn tạo ra sự khác biệt to lớn trong thế giới tuyệt vời mà chúng ta đang sống - những người muốn truyền cảm hứng và giúp đỡ mọi người xung quanh. Cho những người muốn sống một cuộc sống đam mê và đạt được những kết quả lớn lao trên chặng đường đi. Cho những người muốn tách khỏi đám đông và vươn đến đỉnh cao cuộc chơi. Cho những người đã chán ngấy những vị lãnh đạo yếu kém, chuyên quyền, vị kỉ hay đơn giản những lãnh đạo tầm thường, và ', 1, 'leadership.jpg', ''),
(172, 'Bách Khoa Tri Thức Thiếu Nhi', 220000, 'Phạm Hồng', 'Dựa vào đặc điểm đọc sách và nhu cầu tìm hiểu tri thức của trẻ, bộ sách đã kết hợp một cách hoàn hảo những bức tranh minh họa sinh động mà trẻ hiếu kỳ và cần biết lại với nhau, mang đầy đủ tính khoa học, tính tri thức và tính sinh động', 1, 'bachkhoatrithuc.jpeg', ''),
(173, 'Những Cuốn Sách Thay Đổi Lịch Sử', 390000, 'Nhà Xuất Bản Dân Trí', '\"Trong những trang sách này, chúng ta sẽ tìm thấy nhiều danh tác đã định hình thế giới ta đang sống. Chúng là tiếng nói của sự thông thái và mặc khải, của sự tiến bộ hay thậm chí là hết sức táo bạo, một số tác phẩm có tầm ảnh hưởng vô cùng đáng kinh ngạc, và nhiều tác phẩm vẫn còn truyền cảm hứng cho đến tận ngày nay. Một số tác phẩm đại diện cho những gì tốt nhất của loài người chúng ta, số khác thì không, nhưng tựu trung chúng đều nhắc ta nhớ rằng sách thật sự là người bạn sẽ không bao giờ rời', 1, 'sachthaydoilichsu.jpg', ''),
(175, 'Hình Ảnh Của Bạn Đáng Giá Triệu Đô', 96000, 'Nhà Xuất Bản Dân Trí', 'Cuốn sách chỉ ra những tố chất cơ bản làm nên thành công nhưng lại thường bị đại đa số chúng ta xem nhẹ. Đó là tố chất về các phương diện như: ăn mặc, lễ nghĩa, khí chất, giao tiếp… mà các nhà quản lý và nhân viên của mọi doanh nghiệp cần trang bị để phù hợp với xu hướng quốc tế hóa hiện nay', 1, 'hinhanhcuaban.jpeg', ''),
(176, 'Tri Thức Về Vạn Vật - Một Thế Giới Trực Quan Chưa Từng Thấy', 560000, 'Nhà Xuất Bản Dân Trí', 'Sử dụng các tác phẩm đồ họa máy tính ngoạn mục, Tri thức về vạn vật sẽ hé lộ những chi tiết kỳ diệu chưa từng thấy về vũ trụ, Trái đất, thiên nhiên, cơ thể người, khoa học và lịch sử. Trọn vẹn những sự thật kinh ngạc, dòng thời gian sinh động và hình ảnh ấn tượng, cuốn bách khoa thư gia đình đầy hấp dẫn này sẽ biến những chủ đề phức tạp nhất hóa dễ dàng chỉ trong nháy mắt', 1, 'trithucvevanvat.jpeg', ''),
(177, 'BTS - Ước Mơ Không Chờ Đợi Ai', 115000, 'Shifra Lushka', 'Cuộc sống không bao giờ là chắc chắn và ước mơ cũng sẽ không chờ đợi ai khi bạn không cố gắng hết mình để theo đuổi. BTS đã nỗ lực không ngừng nghỉ từ con số không để cuối cùng đạt được thứ mà họ chưa từng mường tượng ra trước đó', 0, 'bts.jpeg', ''),
(178, 'Luật Tâm Thức', 225000, 'Ngô Sa Thạch', '“Luật Tâm Thức - giải mã ma trận vũ trụ” sẽ giải đáp tất cả những khía cạnh mà có thể bạn không nhận thức được chúng tồn tại, và có thể khám phá những vùng đất mình chưa từng biết đến', 1, 'luattamthuc.jpg', ''),
(179, 'Đọc Nhiều Nhớ Được Bao Nhiêu?', 118000, 'Zion Kabasawa', 'Bạn có nhớ hồi nhỏ mình từng đọc truyện tranh không? Và giờ nếu ai đó hỏi lại bạn nội dung của một bộ truyện tranh nào đó, chắc chắn bạn có thể kể một lèo gần như từ A – Z. Nhưng nếu ai đó hỏi bạn nội dung của một cuốn sách nào đó bạn đã đọc chừng một năm thì gần như bạn chẳng nhớ gì hoặc quá lắm chỉ nhớ được vài ý chính. Giờ thì chắc bạn đang cười vì: “Ồ, đúng rồi, sao lại có thể như vậy được nhỉ?”', 1, 'hacknao.jpg', ''),
(180, 'Hoàng Lê Nhất Thống Chí', 75000, 'Ngô Gia Văn Phái', 'Đây là cuốn tiểu thuyết lịch sử ghi chép về sự thống nhất vương triều nhà Lê vào thời điểm Tây Sơn diệt trịnh, trả lại Bắc Hà cho vua Lê đến khi Nguyên Ánh đánh bại Tây Sơn, thống nhất cả nước', 1, 'hoanglenhattc.jpeg', ''),
(181, '30 Ngày Thay Đổi Bản Thân - Loại Bỏ 30 Thói Quen Xấu Đánh Cắp Thời Gian Của Bạn', 135000, 'Damon Zahariades', ' Cuốn sách hữu ích cung cấp phương pháp thực tế và tối ưu để loại bỏ 30 thói quen xấu đánh cắp thời gian của bạn với lộ trình rõ ràng, hướng tới cách làm việc năng suất, hiệu quả hơn. Bạn sẽ thấy ngạc nhiên đến thích thú về những gì sẽ được đọc ngay bây giờ', 1, '30ngaythaydoi.jpeg', ''),
(182, 'Từ Dụ thái hậu', 177000, 'Trần Thùy Mai', 'Từ Dụ thái hậu là một trường thiên tiểu thuyết gồm 69 chương, có thể xem là tiểu thuyết lịch sử dạng “cung đấu” hiếm hoi của văn học đương đại, viết về thời nhà Nguyễn, triều đại cuối cùng trong lịch sử phong kiến Việt Nam. Tác phẩm là cuốn tiểu thuyết tâm huyết của nữ nhà văn nổi tiếng xứ Huế Trần Thùy Mai, với văn phong thuần Việt và cốt truyện đậm chất điện ảnh, sinh động cuốn hút từ đầu đến cuối', 1, 'tuduthaihau.jpg', ''),
(183, 'Đà Lạt bên dưới sương mù', 172000, 'Nguyễn Vĩnh Nguyên', 'Một Đà Lạt thời vàng son trong đời sống văn hóa đã từng được Nguyễn Vĩnh Nguyên tái hiện qua cuốn du khảo Đà Lạt, một thời hương xa', 1, 'dalat.jpg', ''),
(184, 'Gần như là nhà', 110000, 'Nhà Xuất Bản Trẻ', 'Câu chuyện về danh tính của những người trẻ thế hệ Y - thế hệ bắt đầu bước ra thế giới, đã rất hứng khởi với những điều mới lạ rộng lớn nhưng rồi lại hoang mang về việc mình là ai, mình thuộc về đâu trong thế giới này', 1, 'gannhulanha.jpg', ''),
(185, 'Phố cổ Hà Nội - Ký họa và hồi ức', 285000, 'Nhà Xuất Bản Kim Đồng', 'Phố cổ Hà Nội - Kí hoạ và hồi ức tập hợp hơn 200 bức tranh kí hoạ bằng nhiều chất liệu và những bài viết tràn đầy cảm xúc về phố cổ Hà Nội trong dòng chảy thời gian, gắn với những nét đẹp văn hóa, lịch sử và quá trình đô thị hóa', 1, 'hanoi.jpeg', ''),
(186, 'Khó mà tìm được một người tốt', 158000, 'Flannery O’Connor', 'Được nhiều nhà phê bình coi là một trong những nhà văn viết truyện ngắn xuất sắc nhất thế kỷ 20 và đồng thời cũng được xếp vào hàng những nhà văn vĩ đại nhất mà nước Mỹ từng sản sinh ra, Flannery O’Connor (1925-1964) qua đời ở tuổi 39 cùng với một sự nghiệp văn chương ngắn ngủi nhưng lẫy lừng với tổng cộng 31 truyện ngắn, hai cuốn tiểu thuyết ngắn cùng một số tiểu luận', 1, 'khotimnguoitot.jpg', ''),
(187, 'Cuộc Đời Của Pi', 88000, 'Yann Martel', 'Cuộc đời của Pi mở đầu với lời chào ấn tượng của tác giả, Yan Martel và hành trình tưởng như bế tắc khi ông mò mẫm đi tìm một câu chuyện cho sự nghiệp của mình. Lời chào ngắn ngủi ấy giúp người đọc hình dung được hoàn cảnh ra đời của cuốn sách và chẳng cần thắc mắc gì nhiều đến bối cảnh của câu chuyện. Và như thế, một Ấn Độ từ những năm 60, 70 của thế kỷ trước sống dậy cùng Pi, cùng vườn thú Poddicherry và cùng những ngày thơ ấu rối rắm và kỳ lạ', 1, 'cuocdoicuapi.jpg', ''),
(188, '10 Phút Tĩnh Tâm - 71 Thói Quen Cân Bằng Cuộc Sống Hiện Đại', 108000, 'S.J. Scott, Barrie Davenport', 'Mỗi buổi sáng thức dậy, bạn uể oải nhấc mình ra khỏi giường. Bạn nhớ ra tất cả các việc phải làm trong ngày: một vài cuộc họp, một dự án đến hạn hoàn thành, cuộc hẹn gặp bác sĩ, đón con.  Chưa hết, còn cuộc tranh cãi nảy lửa của bạn với sếp hôm qua nữa. Tâm trí bạn cứ tua đi tua lại cuộc nói chuyện đấy vài lần, bạn vẫn còn cảm thấy tức giận mỗi khi nghĩ đến', 1, '10phuttinhtam.jpg', ''),
(189, 'Thép Đã Tôi Thế Đấy (Tái Bản 2020)', 95000, 'Nikolai A.Ostrovsky', 'Thép đã tôi thế đấy! Được đăng lần dầu trên tạp chi Molodaya Gvardiya vào năm 1932 và được xuất bản thành sách vào năm 1936. Không phải một tiểu thuyết bình thường, Thép đã tôi thế đấy! Chính là cuộc đời của tác giả Nikolai A.Ostrovsky. Bằng sự ca trường của người chiến sĩ cách mạng, dù cơ thể bị tàn phá, đâu đớn, Nikolai A.Ostrovsky vẫn sống trọn vẹn, cống hiến cho xã hội cuốn tiểu thuyết bất hủ Thép đã tôi thế đấy! và thành công trong xây dựng hình tượng nhân vật chính - người chiến sĩ hồng qu', 1, 'thep.jpg', ''),
(190, 'Dám Thất Bại - Những Nỗ Lực \"Không Thành Công\" Của Bạn Đáng Giá Bao Nhiêu?', 97000, 'Bobby Bones', 'Thất bại không phải điều gì đó tồi tệ. Thường ta sẽ không cố gắng bởi sợ thất bại, nhưng triết lý sống của tác giả là chiến thắng bằng cách thất bại.', 1, 'damthatbai.jpg', ''),
(191, 'Trí Tuệ Xúc Cảm Ứng Dụng Trong Công Việc', 155000, 'Daniel Goleman', 'Trí tuệ xúc cảm ứng dụng trong công việc là cuốn sách quản trị kinh doanh không thể bỏ qua cho bất cứ nhà lãnh đạo nào. Cuốn sách chỉ cho ta biết các vấn đề như: tự kiểm soát cảm xúc, tự kiểm soát hành động, khả năng tự nhận thức bản thân, sự đổi mới, khả năng thích nghi, hy vọng, kiên trì, khả năng lắng nghe, cảm thông, đồng cảm, khích lệ, nâng đỡ người khác, tạo sự ảnh hưởng và liên kết các mối quan hệ…', 0, 'trituecamxuc.jpg', ''),
(192, 'Planet Earth - Trái Đất của chúng ta', 135000, 'Minh Chi, Quỳnh Rùa', 'Em hãy MỞ cuốn sách này ra rồi LẬT những miếng ghép lên để tìm hiểu những kiến thức thú vị về Trái Đất - hành tinh xanh xinh đẹp của chúng ta nhé!', 0, 'planetearth.jpg', '');

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
-- Cấu trúc bảng cho bảng `tb_order`
--

CREATE TABLE `tb_order` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `order_user_name` varchar(50) NOT NULL,
  `order_user_location` varchar(100) NOT NULL,
  `order_user_phone` varchar(30) NOT NULL,
  `order_user_note` varchar(255) NOT NULL,
  `order_total` double NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tb_order`
--

INSERT INTO `tb_order` (`order_id`, `order_user_name`, `order_user_location`, `order_user_phone`, `order_user_note`, `order_total`, `user_id`) VALUES
(1, 'Gia Nam', 'Hà Nội', '0969193637', 'Người dễ bị tổn thương', 380000, 1),
(3, 'nammdev', 'Nghệ An', '0969193637', 'Hehee', 30000, 4),
(4, 'nammdev', 'Nghệ An', '0969193637', 'Hehee', 30000, 4),
(5, 'Minh Béo cực múp', 'Hà Nội', '0969193637', 'ABC', 816000, 5),
(12, 'nam', 'Hà Nội', '0969193637', 'Hàng dễ vỡ', 590000, 5),
(14, 'Nguyễn Gia Nam', 'Hà Nội', '0969193637', '123abc', 1070000, 5);

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
(1, 'n4m', '123456', 'n4m@gmail.com', '123456789'),
(2, 'namm123', '$2y$10$33r2mICq1wLbmPC3jZuaq.c3he3NtouKH4eOYgw3uVl2TTiBoLZ86', 'namm123@gmail.com', '0969193637'),
(3, 'nammm123', '$2y$10$OG/ejM05Zgj7klERaRMs1u/GT.0moKMa6B.00txFhTrH9kFedfBPK', 'nammm123@gmail.com', '0969193637'),
(4, '1951060877', '$2y$10$PJJ5KCRooiITBPwsvlFIDOLzDY9QPXcBsQeJUiE5SDeFtlGEBPcLS', '0969193637@gmail.com', '123456'),
(5, 'gianam', '123456', 'gianam@gmail.com', '0969193637'),
(6, 'root', '$2y$10$xa5NBhBqJYfeN/NxPj3BzuVdlJnzPDDrVqczrpOA2qjTc05FeQdhq', 'root@gmail.com', '0969193637'),
(7, 'namgia', '$2y$10$p9RPB058OYqlBhtEKN56uOURtr5iZLZzwNkfNgc/Kv.Z5U5XB2Au6', 'namgia@gmail.com', '0969193637');

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
-- Chỉ mục cho bảng `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `constrain` (`user_id`);

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
  MODIFY `admin_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tb_books`
--
ALTER TABLE `tb_books`
  MODIFY `book_id` int(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT cho bảng `tb_book_manager`
--
ALTER TABLE `tb_book_manager`
  MODIFY `manager_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tb_order`
--
ALTER TABLE `tb_order`
  ADD CONSTRAINT `constrain` FOREIGN KEY (`user_id`) REFERENCES `tb_users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
