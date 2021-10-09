-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2021 at 05:34 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fashionmate`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `parentID` int(11) NOT NULL,
  `dateCreate` date NOT NULL,
  `modifyBy` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `note` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`, `level`, `parentID`, `dateCreate`, `modifyBy`, `status`, `note`) VALUES
(1, 'Shirts/Top', 1, 0, '2019-05-20', 1, 1, ''),
(2, 'Pants', 1, 0, '2019-05-20', 1, 1, ''),
(3, 'Sweater', 1, 0, '2019-05-20', 1, 1, ''),
(4, 'Coats & Jackets', 1, 0, '2019-05-20', 1, 1, ''),
(5, 'T-shirts', 2, 1, '2019-05-20', 1, 1, ''),
(6, 'Shirts', 2, 1, '2019-05-20', 1, 1, ''),
(7, 'Polo shirts', 2, 1, '2019-05-20', 1, 1, ''),
(8, 'Shorts', 2, 2, '2019-05-20', 1, 1, ''),
(9, 'Pants', 2, 2, '2019-05-20', 1, 1, ''),
(10, 'Jeans', 2, 2, '2019-05-20', 1, 1, ''),
(11, 'Hoodie', 2, 3, '2019-05-20', 1, 1, ''),
(12, 'Sweater', 2, 3, '2019-05-20', 1, 1, ''),
(13, 'Windbreaker', 2, 4, '2019-05-20', 1, 1, ''),
(14, 'Jackets', 2, 4, '2019-05-20', 1, 1, ''),
(15, 'Coats', 2, 4, '2019-05-20', 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `point` int(11) NOT NULL,
  `dateCreate` date NOT NULL,
  `status` int(11) NOT NULL,
  `note` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `fullname`, `username`, `password`, `gender`, `phone`, `email`, `point`, `dateCreate`, `status`, `note`) VALUES
(1, 'Nguyễn Mai Trang', 'trangnm', '123456', 0, '0337891239', 'trangnm@gmail.com', 0, '2021-09-10', 1, ''),
(2, 'Nam Hải', 'vnhai328', '123456', 1, '0983823403', 'vnhai328@gmail.com', 0, '2021-09-10', 1, ''),
(3, 'Ngọc Kiên', 'ngongockien2709', '123456', 1, '0383497564', 'ngongockien2709@gmail.com', 0, '2021-08-10', 1, ''),
(4, 'Hoàng Long', 'longhoangnguyen20820', '123456', 1, '0839360001', 'longhoangnguyen20820@gmail.com', 0, '2021-08-10', 1, ''),
(5, 'Nguyễn Cường', 'cuongnc', '123456', 1, '0127001113', 'cuongnc@gmail.com', 15, '2017-02-17', 0, ''),
(6, 'Khánh Vân', 'vantk', '123456', 0, '0361005631', 'vantk@gmail.com', 35, '2021-06-12', 1, ''),
(7, 'Bảo Khôi', 'khoilb', '123456', 1, '0147511672', 'khoilb@gmail.com', 20, '2021-07-05', 1, ''),
(8, 'Thuỳ Dương', 'duongnt', '123456', 0, '0203383131', 'duongnt@gmail.com', 0, '2020-07-15', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_infomation`
--

CREATE TABLE `tbl_infomation` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `status` int(11) NOT NULL,
  `note` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_infomation`
--

INSERT INTO `tbl_infomation` (`id`, `type`, `content`, `status`, `note`) VALUES
(1, 'info_header', '[{\"address\":\"54 Triều Khúc, Thanh Xuân, HN\",\n\"email\":\"hungquan6311@gmail.com\",\n\"hotline\":\"+84 902251996\"\n}]', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `idCustomer` int(11) NOT NULL,
  `orderDate` date NOT NULL,
  `money` int(11) NOT NULL,
  `estimateDeliveryDate` date NOT NULL,
  `status` int(11) NOT NULL,
  `note` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orderdetail`
--

CREATE TABLE `tbl_orderdetail` (
  `id` int(11) NOT NULL,
  `idOrder` int(11) NOT NULL,
  `idProduct` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `note` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `idCategory` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `shortDesc` text NOT NULL,
  `color` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `dateCreate` date NOT NULL,
  `modifyBy` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `note` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `idCategory`, `name`, `shortDesc`, `color`, `image`, `quantity`, `price`, `sale`, `dateCreate`, `modifyBy`, `status`, `note`) VALUES
(1, 5, 'Basic Tee 2021', 'Áo phông cổ tròn fit trơn', '212529; F8F9FA', 'assets\\img\\product\\basic-tee-2021.jpg', 200, 249000, 0, '2020-10-09', 1, 1, ''),
(2, 5, 'Wine Tee', 'Graphic oversize tee', 'F7D6E0', '', 50, 350000, 0, '2020-10-05', 1, 1, ''),
(3, 5, 'Crew T-shirt', 'Basic oversize tee', '495057; 3A5A40', '', 120, 280000, 0, '2020-05-09', 1, 1, ''),
(4, 6, 'Sammi shirt', 'Áo sơ mi ngắn tay oversize cổ đức hoạ tiết', 'E76F51; F8F9FA', '', 78, 490000, 0, '2020-10-17', 1, 1, ''),
(5, 6, 'Mindy shirt', 'Áo sơ mi dài tay fit cổ tàu hoạ tiết', 'E9EDC9; 495057', '', 180, 420000, 0, '2020-11-20', 1, 1, ''),
(6, 6, 'Floral shirt 2021 v2', 'Áo sơ mi ngắn tay fit cổ đức hoạ tiết', '002855', '', 50, 349000, 0, '2020-08-20', 1, 1, ''),
(7, 6, 'Floral shirt', 'Áo sơ mi ngắn tay oversize cổ đức hoạ tiết', 'FFE66D; 002855', '', 80, 349000, 0, '2020-11-20', 1, 1, ''),
(8, 6, 'Kimi shirt', 'Áo sơ mi ngắn tay oversize cổ đức hoạ tiết', 'E9EDC9; 212529', '', 100, 490000, 0, '2020-05-20', 1, 1, ''),
(9, 6, 'Julian shirt', 'Áo sơ mi dài tay oversize cổ đức hoạ tiết', '774936; F8F9FA', '', 200, 450000, 0, '2020-09-12', 1, 1, ''),
(10, 6, 'Velvet shirt', 'Oversize shirt', '774936', '', 50, 450000, 0, '2020-10-01', 1, 1, ''),
(11, 6, 'Elevis shirt', 'Fit shirt', '3A5A40; 495057', '', 120, 390000, 0, '2020-09-11', 1, 1, ''),
(12, 7, 'Vicent tee', 'Áo phông polo oversize hoạ tiết', '3A5A40; 774936', '', 90, 290000, 0, '2020-07-23', 1, 1, ''),
(13, 7, 'Willa polo', 'Áo phông polo oversize trơn', '8ECAE6; 495057; 002855; 212529', '', 390, 389000, 0, '2020-12-02', 1, 1, ''),
(14, 7, 'Wendy polo', 'Áo phông polo oversize hoạ tiết', '212529; 8ECAE6; 495057; 002855', '', 390, 389000, 0, '2020-09-15', 1, 1, ''),
(15, 7, 'Daily polo', 'Áo phông polo oversize trơn', '002855; 8ECAE6', '', 120, 390000, 0, '2020-09-29', 1, 1, ''),
(16, 7, 'Fitteed polo', 'Basic polo', '495057; 8ECAE6; 002855', '', 150, 390000, 0, '2020-11-20', 1, 1, ''),
(17, 8, 'Wind short', 'Quần short cạp âu', '3A5A40; F8F9FA; E9EDC9', '', 180, 389000, 0, '2020-09-17', 1, 1, ''),
(18, 8, 'Poker short', 'Quần short cạp chun', '212529; 495057; F7D6E0', '', 180, 369000, 99000, '2020-09-23', 1, 1, ''),
(19, 8, 'Vicky short', 'Quần short cạp âu', '3A5A40; 495057; E9EDC9', '', 180, 369000, 99000, '2020-07-25', 1, 1, ''),
(20, 8, 'Lee short', 'Quần short cạp chun', '212529', '', 100, 349000, 148000, '2020-08-08', 1, 1, ''),
(21, 8, 'Linen short', 'Quần short cạp chun', '212529; 495057; E9EDC9', '', 200, 349000, 209000, '2020-11-10', 1, 1, ''),
(22, 8, 'Harvey short', 'Quần short cạp chun', '495057; E9EDC9; 212529; 774936; 3A5A40', '', 300, 349000, 149000, '2020-09-19', 1, 1, ''),
(23, 9, 'Comfort pant', 'Trousers', '774936; E9EDC9', '', 200, 450000, 149000, '2020-06-28', 1, 1, ''),
(24, 9, 'Otis pant', 'Quần dài cạp âu suông', 'E9EDC9; 212529', '', 240, 450000, 270000, '2020-05-20', 1, 1, ''),
(25, 9, 'Alvin pant', 'Quần dài cạp âu suông', '774936; 212529', '', 390, 450000, 270000, '2020-08-05', 1, 1, ''),
(26, 9, 'Oliver pant', 'Quần dài cạp âu suông', '212529; E9EDC9; 3A5A40', '', 450, 450000, 199000, '2020-05-20', 1, 1, ''),
(27, 9, 'Carter pant', 'Quần dài cạp âu baggy', '212529', '', 180, 450000, 270000, '2020-10-20', 1, 1, ''),
(28, 9, 'Baggy pant', 'Quần dài cạp chun baggy', '212529', '', 120, 400000, 280000, '2020-09-02', 1, 1, ''),
(29, 9, 'Ryder pant', 'Quần dài cạp chun suông', '212529', '', 100, 450000, 225000, '2020-03-23', 1, 1, ''),
(30, 9, 'Lincoln pant', 'Quần dài cạp âu suông', '495057; 212529; 774936', '', 300, 450000, 270000, '2020-02-19', 1, 1, ''),
(31, 9, 'Flex pant 2021', 'Quần dài cạp chun suông', '212529; E9EDC9', '', 160, 390000, 389000, '2020-11-03', 1, 1, ''),
(32, 9, 'Hunter pant', 'Quần dài cạp chun baggy', 'E9EDC9; 212529; 495057', '', 200, 450000, 360000, '2020-02-02', 1, 1, ''),
(33, 9, 'Gabi pant', 'Quần dài cạp âu suông', '212529; E9EDC9; 774936', '', 380, 450000, 315000, '2020-03-28', 1, 1, ''),
(34, 9, 'Kaija pant', 'Sweatpant', 'E9EDC9; 212529', '', 180, 450000, 270000, '2020-08-12', 1, 1, ''),
(35, 9, 'Soft pant', 'Sweatpant', '212529; 495057; 002855; 3A5A40', '', 2, 590000, 354000, '2020-09-01', 1, 0, ''),
(36, 10, 'Chenmegan', 'Cắt gấu', '212529', '', 200, 520000, 0, '2020-03-15', 1, 1, ''),
(37, 10, 'Chenmegan', 'Trơn', '212529', '', 200, 520000, 0, '2020-08-19', 1, 1, ''),
(38, 10, 'Chenmegan', 'Rách gối', '212529', '', 220, 520000, 0, '2020-06-20', 1, 1, ''),
(39, 11, 'Suedue Hoodie', 'Basic hoodie', '3A5A40; 495057; 212529; F7D6E0; 774936', '', 550, 490000, 343000, '2020-09-12', 1, 1, ''),
(40, 12, 'Soft sweater', 'Basic Sweater', '002855; 495057; 212529; 3A5A40', '', 8, 490000, 294000, '2020-08-10', 1, 0, ''),
(41, 3, 'Turtle neck sweater', 'Basic sweater', '3A5A40; FFD7BA; E9EDC9; DDBEA9; 212529', '', 500, 390000, 273000, '2020-04-09', 1, 1, ''),
(42, 12, 'Daily sweater 2020', 'Basic sweater', '3A5A40; E9EDC9; 212529; 8ECAE6', '', 230, 390000, 149000, '2020-07-15', 1, 1, ''),
(43, 12, 'Blake sweater', 'Basic sweater', 'E9EDC9; 774936; 212529', '', 190, 450000, 315000, '2020-06-29', 1, 1, ''),
(44, 12, 'Clever sweater', 'Look sweater', 'F7D6E0; 774936; 002855; 8ECAE6; 212529', '', 300, 390000, 312000, '2020-06-26', 1, 1, ''),
(45, 12, 'Max sweater', 'Basic sweater', '8F2D56; 774936; 8ECAE6; 495057; 3A5A40; 212529', '', 450, 350000, 245000, '2020-07-31', 1, 1, ''),
(46, 12, 'Brody sweater', 'Stripe sweater', 'E9EDC9; 774936; 495057', '', 130, 350000, 149000, '2020-04-13', 1, 1, ''),
(47, 13, 'Kaija jacket', 'Windbreaker', '212529; E9EDC9', '', 120, 550000, 330000, '2020-04-20', 1, 1, ''),
(48, 14, 'Bomber jacket 2020', 'Jacket oversize', '212529', '', 100, 750000, 525000, '2020-10-17', 1, 1, ''),
(49, 14, 'Enzo jacket', 'Jacket fit', '212529; 774936; E9EDC9', '', 150, 590000, 472000, '2020-05-24', 1, 1, ''),
(50, 14, 'Brooks jacket', 'Jacket fit', '774936; E9EDC9; 3A5A40; 212529', '', 100, 950000, 570000, '2020-07-09', 1, 1, ''),
(51, 14, 'Raincoat jacket', 'Jacket fit', '212529; 8ECAE6', '', 80, 890000, 534000, '2019-05-20', 1, 1, ''),
(52, 14, 'Casmere jacket', 'Jacket fit', '212529; E9EDC9', '', 120, 800000, 400000, '2019-05-20', 1, 1, ''),
(53, 14, 'Windy jacket', 'Jacket fit', '212529; 3A5A40; E9EDC9', '', 200, 750000, 600000, '2019-05-20', 1, 1, ''),
(54, 14, 'Cozy jacket', 'Jacket fit', 'E9EDC9; 495057', '', 150, 850000, 510000, '2019-05-20', 1, 1, ''),
(55, 14, 'Tyler jacket', 'Jacket oversize', '495057; 774936', '', 100, 690000, 483000, '2019-05-20', 1, 1, ''),
(56, 14, 'Coby jacket', 'Jacket oversize', '212529; E9EDC9', '', 145, 850000, 680000, '2019-05-20', 1, 1, ''),
(57, 15, 'Selby coat', 'Trench coat', '212529; 774936', '', 100, 1050000, 630000, '2019-05-20', 1, 1, ''),
(58, 15, 'Puffy jacket', 'Basic coat', 'F8F9FA; 212529; 774936', '', 180, 950000, 570000, '2019-05-20', 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction`
--

CREATE TABLE `tbl_transaction` (
  `id` int(11) NOT NULL,
  `idOrder` int(11) NOT NULL,
  `money` int(11) NOT NULL,
  `payments` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `note` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `gender` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `dateCreate` date NOT NULL,
  `status` int(11) NOT NULL,
  `note` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `fullname`, `username`, `password`, `role`, `gender`, `email`, `image`, `dateCreate`, `status`, `note`) VALUES
(1, 'Hùng Quân', 'hungquan6311', '123456', 1, 1, 'hungquan6311@gmail.com', '', '2021-09-10', 1, ''),
(2, 'Phương Anh', 'anhnp', '123456', 2, 0, 'anhnp@gmail.com', '', '2019-05-20', 1, ''),
(3, 'Thành Nam', 'namvt', '123456', 3, 1, 'namvt@gmail.com', '', '2019-05-20', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `constraint_category_user` (`modifyBy`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_infomation`
--
ALTER TABLE `tbl_infomation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `constraint_order_customer` (`idCustomer`);

--
-- Indexes for table `tbl_orderdetail`
--
ALTER TABLE `tbl_orderdetail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `constraint_orderdetail_product` (`idProduct`),
  ADD KEY `constraint_orderdetail_order` (`idOrder`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `constraint_product_user` (`modifyBy`),
  ADD KEY `constraint_product_category` (`idCategory`);

--
-- Indexes for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `constraint_transaction_order` (`idOrder`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_infomation`
--
ALTER TABLE `tbl_infomation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_orderdetail`
--
ALTER TABLE `tbl_orderdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD CONSTRAINT `constraint_category_user` FOREIGN KEY (`modifyBy`) REFERENCES `tbl_user` (`id`);

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `constraint_order_customer` FOREIGN KEY (`idCustomer`) REFERENCES `tbl_customer` (`id`);

--
-- Constraints for table `tbl_orderdetail`
--
ALTER TABLE `tbl_orderdetail`
  ADD CONSTRAINT `constraint_orderdetail_order` FOREIGN KEY (`idOrder`) REFERENCES `tbl_order` (`id`),
  ADD CONSTRAINT `constraint_orderdetail_product` FOREIGN KEY (`idProduct`) REFERENCES `tbl_product` (`id`);

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `constraint_product_category` FOREIGN KEY (`idCategory`) REFERENCES `tbl_category` (`id`),
  ADD CONSTRAINT `constraint_product_user` FOREIGN KEY (`modifyBy`) REFERENCES `tbl_user` (`id`);

--
-- Constraints for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD CONSTRAINT `constraint_transaction_order` FOREIGN KEY (`idOrder`) REFERENCES `tbl_order` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
