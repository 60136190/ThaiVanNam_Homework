-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 26, 2021 lúc 04:34 PM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlnv`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loainv`
--

CREATE TABLE `loainv` (
  `MALOAINV` varchar(10) NOT NULL,
  `TENLOAINV` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loainv`
--

INSERT INTO `loainv` (`MALOAINV`, `TENLOAINV`) VALUES
('NVL01', 'Kỹ thuật'),
('NVL02', 'Quản Lý'),
('NVL03', 'Sale'),
('NVL04', 'Trưởng Phòng'),
('NVL05', 'Thư ký'),
('NVL09', 'Phos toong');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MANV` varchar(10) NOT NULL,
  `HO` varchar(20) NOT NULL,
  `TEN` varchar(20) NOT NULL,
  `NGAYSINH` date NOT NULL,
  `GIOITINH` varchar(5) NOT NULL,
  `DIACHI` varchar(50) NOT NULL,
  `ANH` varchar(50) NOT NULL,
  `MALOAINV` varchar(10) NOT NULL,
  `MAPHONG` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`MANV`, `HO`, `TEN`, `NGAYSINH`, `GIOITINH`, `DIACHI`, `ANH`, `MALOAINV`, `MAPHONG`) VALUES
('NV001', 'Thái Văn', 'dad', '2021-10-14', 'Nam', 'Nha Trang', 'im2.jpg', 'NVL01', 'PB01'),
('NV002', 'Nguyễn Kim', 'Bình', '2021-10-15', 'Nữ', 'Cam Lâm', 'im6.jpg', 'NVL01', 'PB01'),
('NV003', 'Võ Lương Sỹ', 'Huy', '2000-12-09', 'Nam', 'Vạn Giã', 'im13.jpg', 'NVL01', 'PB01'),
('NV004', 'Ho Dai', 'Phuong', '2000-05-05', 'Nam', 'Nha Trang', 'im10.jpg', 'NVL01', 'PB01'),
('NV005', 'Võ Lương Sỹ', 'Wing', '2021-10-08', 'Nam', 'Nha Trang', 'thuky.jpg', 'NVL01', 'PB03'),
('NV006', 'Nguyễn Tường', 'Vy', '2021-10-01', 'Nữ', 'Nha Trang', 'im11.jpg', 'NVL02', 'PB03'),
('NV665', 'Phạm Hoài', 'Huy', '2021-10-12', 'Nữ', 'Cam Lâm', 'im6.jpg', 'NVL01', 'PB01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongban`
--

CREATE TABLE `phongban` (
  `MAPHONG` varchar(10) NOT NULL,
  `TENPHONG` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `phongban`
--

INSERT INTO `phongban` (`MAPHONG`, `TENPHONG`) VALUES
('PB01', 'Điều hành'),
('PB02', 'Tài chính'),
('PB03', 'Phó giám đốc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'thainam', '123456'),
(2, 'linhka', '123456'),
(16, 'thainam', 'aaaa'),
(17, 'aa', 'aaaa');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `loainv`
--
ALTER TABLE `loainv`
  ADD PRIMARY KEY (`MALOAINV`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MANV`),
  ADD KEY `MALOAINV` (`MALOAINV`),
  ADD KEY `MAPHONG` (`MAPHONG`);

--
-- Chỉ mục cho bảng `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`MAPHONG`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`MALOAINV`) REFERENCES `loainv` (`MALOAINV`),
  ADD CONSTRAINT `nhanvien_ibfk_2` FOREIGN KEY (`MAPHONG`) REFERENCES `phongban` (`MAPHONG`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
