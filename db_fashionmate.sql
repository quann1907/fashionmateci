-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2021 at 08:49 AM
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
(1, 'Shirts/Top', 1, 0, '2021-09-10', 1, 1, ''),
(2, 'Pants', 1, 0, '2021-09-10', 1, 1, ''),
(3, 'Sweater', 1, 0, '2021-09-10', 1, 1, ''),
(4, 'Coats & Jackets', 1, 0, '2021-09-10', 1, 1, ''),
(5, 'T-shirts', 2, 1, '2021-09-10', 1, 1, ''),
(6, 'Shirts', 2, 1, '2021-09-10', 1, 1, ''),
(7, 'Polo shirts', 2, 1, '2021-09-10', 1, 1, ''),
(8, 'Shorts', 2, 2, '2021-09-10', 1, 1, ''),
(9, 'Pants', 2, 2, '2021-09-10', 1, 1, ''),
(10, 'Jeans', 2, 2, '2021-09-10', 1, 1, ''),
(11, 'Hoodie', 2, 3, '2021-09-10', 1, 1, ''),
(12, 'Sweater', 2, 3, '2021-09-10', 1, 1, ''),
(13, 'Windbreaker', 2, 4, '2021-09-10', 1, 1, ''),
(14, 'Jackets', 2, 4, '2021-09-10', 1, 1, ''),
(15, 'Coats', 2, 4, '2021-09-10', 1, 1, '');

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
(1, 'Nguyễn Mai Trang', 'trangnm', '123456', 0, '0337891239', 'trangnm@gmail.com', 0, '2021-09-10', 1, '');

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

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `idCustomer`, `orderDate`, `money`, `estimateDeliveryDate`, `status`, `note`) VALUES
(1, 1, '2021-10-01', 12345, '2021-10-06', 1, '');

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

--
-- Dumping data for table `tbl_orderdetail`
--

INSERT INTO `tbl_orderdetail` (`id`, `idOrder`, `idProduct`, `quantity`, `note`) VALUES
(1, 1, 1, 1, '');

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
(1, 5, 'Basic Tee 2021', '', 'Trắng', '', 50, 149000, 0, '2021-09-10', 1, 1, '');

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
(1, 'Hùng Quân', 'quann1907', '123456', 1, 1, 'quann1907@gmail.com', '', '2021-09-10', 1, '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_infomation`
--
ALTER TABLE `tbl_infomation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_orderdetail`
--
ALTER TABLE `tbl_orderdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
