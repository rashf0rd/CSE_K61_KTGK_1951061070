-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2021 lúc 08:50 AM
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
-- Cơ sở dữ liệu: `patient`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `patient`
--

CREATE TABLE `patient` (
  `patientid` varchar(10) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `dateofbirth` datetime NOT NULL,
  `gender` int(1) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(500) NOT NULL,
  `height` float NOT NULL,
  `weight` float NOT NULL,
  `blood_type` varchar(2) NOT NULL,
  `created_on` date NOT NULL,
  `modified_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `patient`
--

INSERT INTO `patient` (`patientid`, `lastname`, `firstname`, `dateofbirth`, `gender`, `mobile`, `email`, `height`, `weight`, `blood_type`, `created_on`, `modified_on`) VALUES
('001', 'josé', 'mourinho', '1963-01-26 08:19:35', 1, 995123456, 'mou@gmail.com', 169, 65, 'O', '2013-06-15', '2013-06-22'),
('0594', 'macus', 'rashford', '1997-10-31 00:24:55', 1, 1515482144, 'rashMU@gmail.com', 180, 70, 'O', '2021-07-31', '2021-09-30'),
('1545', 'Hoàng Thị', 'Loan', '1995-02-06 08:27:22', 0, 169869158, 'L0an@gmail.com', 158, 42, 'A', '2019-12-26', '2019-10-27'),
('5454', 'Nguyễn Thị', 'Tú Anh', '2002-02-16 08:31:45', 0, 769220128, 'TuAnh@gmail.com', 157, 44, 'B', '2011-05-12', '2021-10-21');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patientid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
