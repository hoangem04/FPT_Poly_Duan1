-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 12, 2023 lúc 05:29 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `luxury_man`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `bill_name` varchar(250) NOT NULL,
  `bill_address` varchar(250) NOT NULL,
  `bill_email` varchar(200) NOT NULL,
  `bill_tel` varchar(50) NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL,
  `ngaydathang` date NOT NULL,
  `total` int(10) NOT NULL,
  `bill_status` enum('1','2','3','4','5') NOT NULL COMMENT '1 Chưa xác nhận, 2 Đã xác nhận,3 Đang giao,4 giao thành công, 5 Hủy\r\n',
  `receive_name` varchar(250) NOT NULL,
  `receive_address` int(250) NOT NULL,
  `receive_tel` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `bill_name`, `bill_address`, `bill_email`, `bill_tel`, `bill_pttt`, `ngaydathang`, `total`, `bill_status`, `receive_name`, `receive_address`, `receive_tel`) VALUES
(1, 1, 'Admin', 'Hà Nội', 'admin@fpt.edu.vn', '0369232838', 1, '2023-12-06', 820000, '3', '', 0, 0),
(31, 10, 'nam', 'Hà Nội', 'nam@gmail.com', '0332165465', 1, '2023-12-05', 250000, '4', '', 0, 0),
(63, 1, 'admin', 'Hà Nội', 'admin@fpt.edu.vn', '0369232839', 2, '2023-12-12', 198000, '4', '', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(8, 'Sản phẩm rất đẹp chất vải rất mát. Rất thích nha cả nhà. Lần sau lại ủng hộ shop tiếp!!', 1, 17, '2023-11-29'),
(9, 'Sản phẩm rất tốt', 1, 29, '2023-11-30'),
(10, 'Sản phẩm tốt giá thành lại rẻ đáng mua', 1, 29, '2023-12-02'),
(13, 'Sản phẩm rất tốt', 1, 11, '2023-12-05'),
(14, 'quần rất đẹp nha!', 1, 28, '2023-12-12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `img` varchar(250) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(10) NOT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(1, 1, 12, '1700802430_aophong-2.jpg', 'Áo cộc tay nam phối họa tiết trắng xanh', 190000, 1, 190000, 1),
(65, 10, 13, '1700802449_aophong-1.jpg', 'Áo cộc nam', 250000, 1, 250000, 31),
(95, 1, 33, '1701356228_quantay_0.jpg', 'Quần tây sang trọng 2024', 198000, 1, 198000, 63);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(1, 'Áo Phông'),
(2, 'Quần tây');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `question`
--

CREATE TABLE `question` (
  `id_ques` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `contennt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `question`
--

INSERT INTO `question` (`id_ques`, `name`, `email`, `phone`, `contennt`) VALUES
(33, 'manhtuantvvt', 'namthph38365@fpt.edu.vn', '0904923483', '213213'),
(34, 'Ngô Văn Hoàng', 'hoangitph33879@gmail.com', '0369232838', 'sfdsdfsdf');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL DEFAULT 0.00,
  `img` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(11, 'Áo cộc nam', 250000.00, '1700802407_aophong-3.jpg', 'Áo cộc tay nam phù hợp cho mọi lứa tuổi', 12, 1),
(12, 'Áo cộc tay nam phối họa tiết trắng xanh', 190000.00, '1700802430_aophong-2.jpg', 'Áo cộc tay nam phù hợp cho mọi lứa tuổi', 13, 1),
(13, 'Áo cộc nam', 250000.00, '1700802449_aophong-1.jpg', 'Áo phông hot nhất 2024', 10, 1),
(14, 'áo cộc tay nam', 250000.00, '1700802472_aophong-0.jpg', 'Áo phông quốc dân nam 2024', 5, 1),
(17, 'Áo cộc nam', 250000.00, '1700841887_dm-pro1.jpg', 'Áo phông hot nhất 2024', 12, 1),
(18, 'Áo cộc nam', 250000.00, '1700841901_dm-pro2.jpg', 'Áo phông hot nhất 2024', 12, 1),
(19, 'Áo cộc nam', 250000.00, '1700841918_dm-pro4.jpg', 'Áo phông hot nhất 2024', 13, 1),
(20, 'Áo cộc nam', 250000.00, '1700841932_dm-pro3.jpg', 'Áo phông hot nhất 2024', 10, 1),
(21, 'Áo đôi nam nữ', 190000.00, '1700841953_dm-pro5.jpg', 'Áo sơ mi quốc dân hotrend 2024', 12, 1),
(22, 'Áo đôi nam nữ', 190000.00, '1700841973_dm-pro6.jpg', 'Áo sơ mi quốc dân hotrend 2024', 13, 1),
(24, 'áo cộc tay nam', 250000.00, '1700842017_dm-pro7.jpg', 'Áo phông hot nhất 2024', 10, 1),
(25, 'áo cộc tay nam', 250000.00, '1700842032_dm-pro8.jpg', 'Áo cộc tay nam phù hợp cho mọi lứa tuổi', 12, 1),
(26, 'áo cộc tay nam', 190000.00, '1700842048_dm-pro9.jpg', 'Áo cộc tay nam phù hợp cho mọi lứa tuổi', 102, 1),
(27, 'Áo cộc nam', 190000.00, '1700897551_dm-pro7.jpg', 'Áo phông hot nhất 2024', 12, 1),
(28, 'Quần tây lịch lãm', 150000.00, '1701329782_quantay_1.jpg', 'Quần tây lịch lãm thanh lịch', 10, 2),
(29, 'Quần tây 2023', 145000.00, '1701329843_quantay_2.jpg', 'Quần tây lịch lãm thanh lịch 2023', 12, 2),
(30, 'Quần tây thanh lịch 2023', 150000.00, '1701329897_quantay_4.jpg', 'Quần tây lịch lãm thanh lịch, sang trọng 2023', 10, 2),
(31, 'Quần tây sang trọng', 290000.00, '1701329977_quantay_7.jpg', 'Quần tây lịch lãm thanh lịch sang trọng 2023', 13, 2),
(32, 'Quần tây sang trọng quý phái nam', 250000.00, '1701356136_quantay_5.jpg', 'Quần tây lịch lãm thanh lịch thể hiện sự lịch lãm của người thành công', 12, 2),
(33, 'Quần tây sang trọng 2024', 198000.00, '1701356228_quantay_0.jpg', 'Quần tây lịch lãm thanh lịch, sang trọng 2023', 10, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`id`, `name`) VALUES
(1, 'S'),
(2, 'M'),
(3, 'L'),
(4, 'XL'),
(5, 'XXL');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, 'admin', '123', 'admin@fpt.edu.vn', 'Hà Nội', '0369232839', 2),
(4, 'accounthoang', '123', 'hoang@gmail.com', 'Hà Nội', '0369232838', 1),
(7, 'namninh', '123', 'nmdtatoo@gmail.com', 'Tôn Đức Thắng', '5675677', 2),
(9, 'nam1', '123', 'namthph38365@fpt.edu.vn', 'Hà nội', '56756775', 1),
(10, 'nam', '123', 'nam@gmail.com', 'Hà Nội', '0332165465', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthai`
--

CREATE TABLE `trangthai` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `trangthai`
--

INSERT INTO `trangthai` (`id`, `name`) VALUES
(1, 'Chờ xác nhận'),
(2, 'Đã xác nhận'),
(3, 'Đang giao hàng'),
(4, 'Hủy');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idpro` (`idpro`),
  ADD KEY `iduser` (`iduser`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idbill` (`idbill`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idpro` (`idpro`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id_ques`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddm` (`iddm`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `question`
--
ALTER TABLE `question`
  MODIFY `id_ques` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`idbill`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`),
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
