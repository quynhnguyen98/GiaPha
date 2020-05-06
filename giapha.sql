-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th5 06, 2020 lúc 07:25 PM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `giapha`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dongho`
--

CREATE TABLE `dongho` (
  `dongho_id` int(11) NOT NULL,
  `hoten` varchar(250) NOT NULL,
  `tieusu` text NOT NULL,
  `hinhanh` varchar(250) NOT NULL,
  `nguoithan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `dongho`
--

INSERT INTO `dongho` (`dongho_id`, `hoten`, `tieusu`, `hinhanh`, `nguoithan_id`) VALUES
(1, 'USA', 'zxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxc', 'person_1.jpg', 0),
(2, 'Canada', 'zxcvzxcvzxczxcvzxcvzxc zxcvzxcvzxczxcvzxcvzxc zxcvzxcvzxczxcvzxcvzxczxcvzxcvzxc zxcvzxcvzxc', 'person_2.jpg', 0),
(3, 'Australia', 'zxcvzxcvzxczxcvzxcvzxc zxcvzxcvzxczxcvzxcvzxc zxcvzxcvzxczxcvzxcvzxczxcvzxcvzxc zxcvzxcvzxc', '', 0),
(4, 'New York', 'zxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxc', 'person_3.jpg', 1),
(5, 'Alabama', 'zxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxc', 'person_4.jpg', 1),
(6, 'California', 'zxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxc', 'person_5.jpg', 1),
(7, 'Ontario', 'zxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxc', 'person_6.jpg', 2),
(8, 'British Columbia', 'zxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxc', 'person_7.jpg', 2),
(9, 'New South Wales', 'zxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxc', 'person_8.jpg', 3),
(10, 'Queensland', 'zxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxc', 'person_8.jpg', 3),
(11, 'New York city', 'zxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxc', 'person_7.jpg', 4),
(12, 'Buffalo', 'zxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxc', '', 4),
(13, 'Albany', 'zxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxc', '', 4),
(14, 'Birmingham', 'zxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxc', '', 5),
(15, 'Montgomery', 'zxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxc', '', 5),
(16, 'Huntsville', 'zxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxc', '', 5),
(17, 'Los Angeles', 'zxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxc', '', 6),
(18, 'San Francisco', 'zxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxc', '', 6),
(19, 'San Diego', 'zxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxc', '', 6),
(20, 'Toronto', 'zxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxc', '', 7),
(21, 'Ottawa', 'zxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxc', '', 7),
(22, 'Vancouver', 'zxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxc', '', 8),
(23, 'Victoria', 'zxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxc', '', 8),
(24, 'Sydney', 'zxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxc', '', 9),
(25, 'Newcastle', 'zxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxczxcvzxcvzxczxcvzxcvzxc\r\nzxcvzxcvzxc', '', 9),
(26, 'City of Brisbane', '', '', 10),
(27, 'Gold Coast', '', '', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `events`
--

INSERT INTO `events` (`id`, `title`, `start_event`, `end_event`) VALUES
(1, 'hvjvjh', '2020-05-05 00:00:00', '2020-05-06 00:00:00'),
(2, 'gvjg', '2020-05-02 00:00:00', '2020-05-03 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanh`
--

CREATE TABLE `hinhanh` (
  `hinhanh_id` int(11) NOT NULL,
  `hinhanh` varchar(250) NOT NULL,
  `tensukien` varchar(250) NOT NULL,
  `ngaythang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hinhanh`
--

INSERT INTO `hinhanh` (`hinhanh_id`, `hinhanh`, `tensukien`, `ngaythang`) VALUES
(1, 'do1.jpg', 'Dỗ tổ Hùng Vương 10/3', '2020-03-10'),
(2, 'do2.jpg', 'Dỗ tổ Anh A ', '2020-03-06'),
(3, 'do3.jpg', 'Dỗ tổ Hùng Vương 10/3', '2020-03-10'),
(4, 'do4.jpg', 'Dỗ tổ Anh A ', '2020-03-06'),
(5, 'do5.jpg', 'B', '2020-02-10'),
(6, 'do6.jpg', 'Dỗ tổ Anh C ', '2020-01-06'),
(7, 'do7.jpg', 'D', '2020-03-07'),
(8, 'do8.jpg', 'Dỗ tổ Anh E ', '2020-03-08'),
(9, 'do9.jpg', 'F', '2020-03-09'),
(10, 'do10.jpg', 'Dỗ tổ Anh G ', '2020-03-11'),
(11, 'do11.jpg', 'h', '2020-03-12'),
(12, 'do12.jpg', 'I ', '2020-03-13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sukien`
--

CREATE TABLE `sukien` (
  `sukien_id` int(11) NOT NULL,
  `noidung_sukien` text NOT NULL,
  `ngaydo` date NOT NULL,
  `hinhanh` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sukien`
--

INSERT INTO `sukien` (`sukien_id`, `noidung_sukien`, `ngaydo`, `hinhanh`) VALUES
(1, 'zxcvzxcvzxcvzxcvzxcvzxcvzxc\r\nvzxcvzxcvzxcvzxcvzxcvzxcvz\r\nzxcvzxcvzxcvzxcvzxcvzxcvzxc\r\nvzxcvzxcvzxcvzxcvzxcvzxcvz', '2020-05-01', 'do1.jpg'),
(2, 'zxcvzxcvzxcvzxcvzxcvzxcvzxc\r\nvzxcvzxcvzxcvzxcvzxcvzxcvz\r\nzxcvzxcvzxcvzxcvzxcvzxcvzxc\r\nvzxcvzxcvzxcvzxcvzxcvzxcvz', '2019-05-01', 'do2.jpg'),
(3, 'zxcvzxcvzxcvzxcvzxcvzxcvzxc\r\nvzxcvzxcvzxcvzxcvzxcvzxcvz\r\nzxcvzxcvzxcvzxcvzxcvzxcvzxc\r\nvzxcvzxcvzxcvzxcvzxcvzxcvz', '2018-05-01', 'do3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `tintuc_id` int(11) NOT NULL,
  `tieude` varchar(250) NOT NULL,
  `noidung` text NOT NULL,
  `ngaythang` date NOT NULL,
  `hinhanh` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`tintuc_id`, `tieude`, `noidung`, `ngaythang`, `hinhanh`) VALUES
(1, 'Tieu de 1', 'zvxcvzxcvzxcvzxcvzxc\r\nvzxcvzxcvzxcvzxcvzxc\r\nvzxcvzxcvzxcvzxcvzxcv\r\nzxcvzxcvzxcvzxcvzxcv\r\nzxcvzxcvzxcvzxcvzxc\r\nvzxcvzxcvzxcvzxcvz', '2020-05-14', '1.jpg'),
(2, 'Tieu de 2', 'zvxcvzxcvzxcvzxcvzxc\r\nvzxcvzxcvzxcvzxcvzxc\r\nvzxcvzxcvzxcvzxcvzxcv\r\nzxcvzxcvzxcvzxcvzxcv\r\nzxcvzxcvzxcvzxcvzxc\r\nvzxcvzxcvzxcvzxcvz', '2020-05-02', '2.jpg'),
(3, 'Tieu de 3', 'zvxcvzxcvzxcvzxcvzxc\r\nvzxcvzxcvzxcvzxcvzxc\r\nvzxcvzxcvzxcvzxcvzxcv\r\nzxcvzxcvzxcvzxcvzxcv\r\nzxcvzxcvzxcvzxcvzxc\r\nvzxcvzxcvzxcvzxcvz', '2020-05-03', '3.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dongho`
--
ALTER TABLE `dongho`
  ADD PRIMARY KEY (`dongho_id`);

--
-- Chỉ mục cho bảng `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`hinhanh_id`);

--
-- Chỉ mục cho bảng `sukien`
--
ALTER TABLE `sukien`
  ADD PRIMARY KEY (`sukien_id`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`tintuc_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dongho`
--
ALTER TABLE `dongho`
  MODIFY `dongho_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `hinhanh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `sukien`
--
ALTER TABLE `sukien`
  MODIFY `sukien_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `tintuc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
