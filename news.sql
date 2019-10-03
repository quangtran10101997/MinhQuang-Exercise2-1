-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 03, 2019 lúc 11:50 AM
-- Phiên bản máy phục vụ: 10.3.15-MariaDB
-- Phiên bản PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `exercise2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `image`, `created_at`) VALUES
(5, 'U22 Việt Nam 3 SAO chấn thương, HLV Park Hang Seo âu lo ngày sinh nhật  ', 'Bước vào buổi tập, HLV Park Hang Seo đã nhận được những lời chúc mừng sinh nhật đầy ý nghĩa của các học trò. Ngay sau đó, nhà cầm quân Hàn Quốc đã trực tiếp xem chấn thương của Trọng Đại, Thanh Hậu và Hoàng Đức.', 'anh1.jpg', '2019-10-03 07:13:22'),
(6, 'Văn Hậu đá trọn 90 phút ở Hà Lan \"gây sốt\" mạng xã hội, fan chia vui', 'Nhìn chung, màn trình diễn của Văn Hậu khá ấn tượng, anh có những tình huống tranh chấp dũng mãnh, thậm chí tự tin đi bóng và dứt điểm về phía cầu môn đội bạn. Kết quả, Heerenveen hòa Heracles Almelo 1-1.', 'anh2.jpg', '2019-09-30 17:00:00'),
(7, 'Arsenal hòa may mắn MU vào top 4, vẫn bị chỉ trích vì 2 dớp buồn', 'Scott McTominay mở tỷ số cho \"Quỷ đỏ\" với cú sút phạt đẹp mắt ở phút 45. Nhưng đến phút 58 thì Pierre-Emerick Aubameyang đã trừng phạt sai lầm của hậu vệ trẻ Axel Tuanzebe để giúp đoàn quân của HLV Unai Emery tránh khỏi thất bại khi làm khách tại Old Traf', 'anh3.jpg', '2019-09-30 17:00:00'),
(10, 'Ronaldo số 1 hành tinh bất ngờ loan tin giải nghệ, hé lộ động lực mỗi ngày', 'Phải mất nhiều năm làm việc chăm chỉ, cống hiến và đam mê, tôi mới có được những gì đang sở hữu trong thế giới bóng đá. Tôi là 1 người thích cạnh tranh. Tôi không thích trở thành số 2 hay số 3 và luôn muốn mình phải là số 1.', 'anh6.jpg', '2019-10-01 17:00:00'),
(22, 'Tottenham đại khủng hoảng, MU ôm mộng chiêu mộ Harry Kane 200 triệu bảng ', 'Thua Bayern Munich 2-7 ngay trên sân nhà, Tottenham thực sự rơi vào vòng xoáy của một cuộc đại khủng hoảng. Trước đó, nhà á quân Champions League trải qua hàng loạt kết quả đáng thất vọng. Ở Ngoại hạng Anh, Totenham đang xếp thứ 6, kém đội đầu bảng Liverp', 'ST-1570071506.jpg', '2019-10-03 09:49:25');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
