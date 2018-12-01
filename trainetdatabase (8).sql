-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2018 at 05:39 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trainetdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` text NOT NULL,
  `level` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 3);

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `id_discount` int(11) NOT NULL,
  `sport` varchar(32) NOT NULL,
  `code` varchar(32) NOT NULL,
  `valid_from` date NOT NULL,
  `valid_until` date NOT NULL,
  `discount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`id_discount`, `sport`, `code`, `valid_from`, `valid_until`, `discount`) VALUES
(1, 'Fitness', 'AKUSUKAMAKANBESI', '2017-11-01', '2017-12-30', 20),
(2, 'Yoga', 'SUKABERKERINGAT', '2017-11-01', '2017-12-30', 40),
(3, 'Aerobic', 'LONCATSEHAT', '2017-12-01', '2017-12-30', 50);

-- --------------------------------------------------------

--
-- Table structure for table `instruktur`
--

CREATE TABLE `instruktur` (
  `id_instruktur` int(11) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` text NOT NULL,
  `level` int(11) NOT NULL DEFAULT '1',
  `email` varchar(32) NOT NULL,
  `gender` varchar(32) NOT NULL,
  `handphone` varchar(32) NOT NULL,
  `address` text NOT NULL,
  `photo` text NOT NULL,
  `status` varchar(32) NOT NULL,
  `validation` int(11) NOT NULL,
  `sport` varchar(32) NOT NULL,
  `achievement` text NOT NULL,
  `cost` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instruktur`
--

INSERT INTO `instruktur` (`id_instruktur`, `firstname`, `lastname`, `username`, `password`, `level`, `email`, `gender`, `handphone`, `address`, `photo`, `status`, `validation`, `sport`, `achievement`, `cost`) VALUES
(1, 'John', 'PantauGatau', 'johnkasper', '12345678', 1, 'johnkasper@gmail.com  ', 'Laki-Laki', '089675432123', 'Jl. Ikan Paus 10, Kota Malang', 'file_', '1', 1, 'Fitness', '', 40000),
(2, 'Halim', 'Izhar', 'halimbengak', '123', 1, 'bengak@gmail.com', 'Laki-laki', '082274766970', 'Desa Badar Indah ', '', '1', 1, 'Fitness', '', 60000),
(3, 'Aulia', 'Rifki', 'arif', '123', 1, 'arif@gmail.com', 'Laki-laki', '085876234312', 'Jln Pahlawan No. 3', '', '1', 1, 'Fitness', '', 60000),
(4, 'Rifki', 'Wahyudi', 'rifa', '123', 1, 'rifa@gmail.com', 'Laki-laki', '098765432112', 'Jln Pegagasan Timur No 25', '', '1', 1, 'Fitness', '', 50000),
(5, 'Heri', 'Juanda', 'herjun', '123', 1, 'herjun@gmail.com', 'Laki-laki', '082534712343', 'Jln Permata Indah No. 34', '', '1', 1, 'Swimming', '', 100000),
(6, 'Ulul', 'Azmi', 'ulul', '123', 1, 'ulul@gmail.com', 'Laki-laki', '082687242342', 'Jln Soekarno Hatta No.400', '', '1', 1, 'Yoga', '', 120000),
(7, 'Nisaul', 'Kamila', 'lala', '123', 1, 'lala@gmail.com', 'Perempuan', '081375323751', 'Jln Andalas No. 2', '', '1', 1, 'Aerobic', '', 80000),
(8, 'Administrator', '', '', '', 1, '', '', '', '', '', '', 1, '', '', 0),
(11, 'Teguh', 'Tulus', 'tulus', '123', 1, 'teukubarca@yahoo.com', 'Laki-Laki', '082365355209', 'Pulo Ara', 'file_4.jpg', '', 0, 'Yoga', '', 90000),
(12, 'Pavel', 'Bernad', 'pavel123', '12345678', 1, 'pavel123@yaya.com', 'Laki-laki', '0867543545657', 'Jl. Aja terus, Malang', 'file_', '', 1, 'Fitness', '', 70000),
(13, 'tes', 'tes2', 'tes3', '123', 1, 'tes@gmail.com', 'Laki-laki', '082365355209', 'Bireuen', 'file_1.png', '', 0, 'Yoga', '', 900000);

-- --------------------------------------------------------

--
-- Table structure for table `login_multi`
--

CREATE TABLE `login_multi` (
  `username` varchar(32) NOT NULL,
  `password` text NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_multi`
--

INSERT INTO `login_multi` (`username`, `password`, `level`) VALUES
('admin', 'admin', 3),
('anas', '123', 2),
('arif', '123', 1),
('aulia', '123', 2),
('dimasharya', '12345678', 2),
('djo', '123', 2),
('djons', '123', 2),
('gerrad', '12345678', 2),
('herjun', '123', 1),
('johnkasper', '12345678', 1),
('loudy', '12345678', 2),
('malmal', '12345678', 2),
('maul', '123', 2),
('nazar', '123', 2),
('pavel123', '12345678', 1),
('solihun', '12345678', 2),
('tes3', '123', 1),
('tulus', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(32) NOT NULL,
  `gender` varchar(32) NOT NULL,
  `address` text NOT NULL,
  `level` int(11) NOT NULL DEFAULT '2',
  `handphone` varchar(32) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `firstname`, `lastname`, `username`, `password`, `email`, `gender`, `address`, `level`, `handphone`, `photo`) VALUES
(100, 'Dimas', 'Harya', 'dimasharya', '12345678', 'dimasharya@gmail.com', 'male', 'Jl. Wiroto 3, Kota Malang', 2, '08675436382', 'file_'),
(101, 'Administrator', '', '', '', '', '', '', 2, '', ''),
(108, 'Maulana', 'Alfadjri', 'maul', '123', 'munirah150594@gmail.com', 'Laki-Laki', 'Dusun Firdaus, Komplek Mdrasah Ulumul Quran Langsa', 2, '085328538790', ''),
(109, 'Muhammad', 'Nazaruddin', 'nazar', '123', 'nazar@gmail.com', 'Laki-Laki', 'Desa Kampung Baru', 2, '082365355209', 'file_1.png'),
(114, 'Djohansyah', 'Putra', 'djo', '123', 'djohans33@gmail.com', 'Laki-Laki', 'Jln Bendungan Jati Gede No 3', 2, '082365355209', 'file_.png'),
(115, 'Muhammad', 'Anas', 'anas', '123', 'anas@gmail.com', 'Laki-Laki', 'Pulo Ara', 2, '082365355209', 'file_2.jpg'),
(116, 'Aulia', 'Rahman', 'aulia', '123', 'alim_izhar@yahoo.com', 'Laki-Laki', 'Jakarta', 2, '082365355209', 'file_.png'),
(117, 'Gerard', 'Muller', 'gerrad', '12345678', 'ajsdgjasb@jdkkm.com', 'Laki-laki', 'Jl. Kurang panjang 73, Malang', 2, '0873732465', 'file_'),
(118, 'Aku', 'usbus', 'loudy', '12345678', 'gdgv@hsbd.com', 'Laki-laki', 'Malang', 2, '085643734821', 'file_'),
(119, 'Soleh', 'Solihun', 'solihun', '12345678', 'solihun@hahaha.com', 'Laki-laki', 'Jl. Kumis Kucing 150', 2, '08647584548', 'file_.png'),
(120, 'Malinda', 'Putri', 'malmal', '12345678', 'malin@gmail.com', 'Perempuan', 'Jl. Solo - Yogya KM 12', 2, '0812365487687', 'file_2.png');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id_message` int(11) NOT NULL,
  `id_from` int(11) NOT NULL,
  `id_to` int(11) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  `time` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id_message`, `id_from`, `id_to`, `message`, `date`, `time`) VALUES
(1, 100, 1, 'Aku suka kamu', '2017-11-28', '21:43'),
(3, 100, 1, 'Bang John ganteng bangettt', '2017-12-08', '09:13'),
(4, 1, 100, 'Okee mas ditunggu yaa', '2017-12-08', '09:21'),
(5, 118, 1, 'Pak john ganteng', '2017-12-14', '05:14'),
(6, 1, 118, 'makasihhh', '2017-12-14', '05:18'),
(7, 1, 120, 'Hehehehehe', '2017-12-19', '04:07');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id_notification` int(11) NOT NULL,
  `id_from` int(11) NOT NULL,
  `id_to` int(11) NOT NULL,
  `notification` text NOT NULL,
  `date` date NOT NULL,
  `time` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id_notification`, `id_from`, `id_to`, `notification`, `date`, `time`) VALUES
(2, 100, 1, ' Dimas Harya has canceled order on 28-11-2017 22:55', '2017-11-28', '22:55'),
(3, 100, 3, 'Dimas Harya has order on 29-11-2017 02:28', '2017-11-29', '02:28'),
(5, 100, 1, 'Dimas Harya has canceled order on 06 12 2017 04:05', '2017-12-06', '04:05'),
(6, 0, 1, 'Your account has been validate by Administrator on 06 12 2017 07:44', '2017-12-06', '07:44'),
(12, 1, 100, 'Your order has been canceled by John Kaspersky on 07 12 2017 09:35', '2017-12-07', '09:35'),
(13, 0, 12, 'Your account has been validate by Administrator on 14 12 2017 05:41', '2017-12-14', '05:41'),
(14, 119, 1, 'Soleh Solihun has ordered on 2017-12-16 20:30', '2017-12-15', '01:49'),
(15, 119, 1, 'Soleh Solihun has canceled order on 15 12 2017 02:56', '2017-12-15', '02:56'),
(16, 119, 1, 'Soleh Solihun has canceled order on 15 12 2017 02:56', '2017-12-15', '02:56'),
(17, 118, 11, 'Aku usbus has ordered on 2017-12-15 05:00', '2017-12-15', '03:41'),
(18, 11, 118, 'Your order has been canceled by Teguh Tulus on 15 12 2017 03:44', '2017-12-15', '03:44'),
(19, 120, 1, 'Malinda Putri has ordered on 2017-12-21 20:00', '2017-12-19', '04:02'),
(20, 1, 120, 'Your order has been canceled by John PantauGatau on 19 12 2017 04:04', '2017-12-19', '04:04'),
(21, 120, 1, 'Malinda Putri has ordered on 2017-12-20 18:00', '2017-12-19', '04:06'),
(22, 1, 120, 'Your order has been accepted by John PantauGatau on 19 12 2017 04:07', '2017-12-19', '04:07');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `id_instruktur` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `date_order` date NOT NULL,
  `time_order` varchar(32) NOT NULL,
  `meeting_point` text NOT NULL,
  `duration` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `paid` int(11) NOT NULL DEFAULT '0',
  `discount` int(11) NOT NULL DEFAULT '0',
  `bill` double NOT NULL DEFAULT '0',
  `review` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_order`, `id_instruktur`, `id_member`, `date_order`, `time_order`, `meeting_point`, `duration`, `status`, `paid`, `discount`, `bill`, `review`) VALUES
(1, 1, 100, '2017-11-30', '15.00', 'GOR PERTAMINA UB', 3, 2, 1, 1, 96000, 1),
(2, 1, 100, '2017-12-22', '20:00', 'sdghfasd', 2, 3, 0, 0, 0, 0),
(3, 1, 100, '2017-12-14', '19:00', 'GOR KEN AROK', 3, 2, 0, 1, 96000, 0),
(4, 1, 100, '2017-12-11', '18:30', 'Universitas Brawijaya', 4, 1, 0, 0, 0, 0),
(5, 11, 100, '2017-12-12', '20:30', 'UIN Maulana Malik Ibrahim', 4, 0, 0, 0, 0, 0),
(6, 1, 118, '2017-12-15', '18:00', 'UB', 3, 2, 1, 1, 96000, 0),
(9, 11, 118, '2017-12-15', '05:00', 'UB', 1, 3, 0, 0, 0, 0),
(10, 1, 120, '2017-12-21', '20:00', 'Solo Square', 2, 3, 0, 0, 0, 0),
(11, 1, 120, '2017-12-20', '18:00', 'Paragon', 3, 2, 0, 0, 120000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_review` int(11) NOT NULL,
  `id_instruktur` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `review` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id_review`, `id_instruktur`, `id_member`, `review`, `date`) VALUES
(1, 1, 100, 'Pelayanan yang cukup bagus. Tolong lain kali jangan telat ya mas hehe', '2017-12-08'),
(3, 1, 100, 'Pak John the best pokoknya', '2017-12-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id_discount`);

--
-- Indexes for table `instruktur`
--
ALTER TABLE `instruktur`
  ADD PRIMARY KEY (`id_instruktur`);

--
-- Indexes for table `login_multi`
--
ALTER TABLE `login_multi`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id_notification`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_instruktur` (`id_instruktur`),
  ADD KEY `id_member` (`id_member`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `id_instruktur` (`id_instruktur`),
  ADD KEY `id_member` (`id_member`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `id_discount` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `instruktur`
--
ALTER TABLE `instruktur`
  MODIFY `id_instruktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id_notification` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_instruktur`) REFERENCES `instruktur` (`id_instruktur`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`id_instruktur`) REFERENCES `instruktur` (`id_instruktur`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
