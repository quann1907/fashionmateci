-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2021 at 07:16 AM
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
-- Table structure for table `tbl_color`
--

CREATE TABLE `tbl_color` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `note` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_color`
--

INSERT INTO `tbl_color` (`id`, `name`, `color`, `note`) VALUES
(1, 'White', '#F8F9FA', ''),
(2, 'Black', '#212529', ''),
(3, 'Pink', '#F7D6E0', ''),
(4, 'Grey', '#495057', ''),
(5, 'Green', '#3A5A40', ''),
(6, 'Orange', '#E76F51', ''),
(7, 'Beigi', '#E9EDC9', ''),
(8, 'Navi', '#002855', ''),
(9, 'Yellow', '#FFE66D', ''),
(10, 'Brown', '#774936', ''),
(11, 'Blue', '#8ECAE6', ''),
(12, 'Light Brown', '#FFD7BA', ''),
(13, 'Dark Brown', '#DDBEA9', ''),
(14, 'Purple', '#8F2D56', '');

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
(1, 'Mai Trang', 'trangnm', '123456', 0, '0337891239', 'trangnm@gmail.com', 0, '2018-09-10', 1, ''),
(2, 'Nam Hải', 'vnhai328', '123456', 1, '0983823403', 'vnhai328@gmail.com', 0, '2019-09-10', 1, ''),
(3, 'Ngọc Kiên', 'ngongockien2709', '123456', 1, '0383497564', 'ngongockien2709@gmail.com', 0, '2019-08-10', 1, ''),
(4, 'Hoàng Long', 'longhoangnguyen20820', '123456', 1, '0839360001', 'longhoangnguyen20820@gmail.com', 0, '2019-08-10', 1, ''),
(5, 'Nguyễn Cường', 'cuongnc', '123456', 1, '0127001113', 'cuongnc@gmail.com', 15, '2019-02-17', 0, ''),
(6, 'Khánh Vân', 'vantk', '123456', 0, '0361005631', 'vantk@gmail.com', 35, '2019-06-12', 1, ''),
(7, 'Bảo Khôi', 'khoilb', '123456', 1, '0147511672', 'khoilb@gmail.com', 20, '2019-07-05', 1, ''),
(8, 'Thuỳ Dương', 'duongnt', '123456', 0, '0203383131', 'duongnt@gmail.com', 0, '2019-07-15', 0, ''),
(9, 'Quỳnh Như', 'nhunq', '123456', 0, '0913468798', 'nhunq@gmail.com', 0, '2019-01-03', 1, ''),
(10, 'Đức Hiếu', 'hieutd', '123456', 1, '0398481242', 'hieutd@gmail.com', 0, '2018-10-19', 1, ''),
(11, 'Nguyễn Khoa', 'khoanv', '123456', 1, '0399103020', 'khoanv@gmail.com', 0, '2019-05-09', 1, ''),
(12, 'Duy Anh', 'anhtnd', '123456', 1, '0914221000', 'anhtnd@gmail.com', 0, '2019-04-20', 1, ''),
(13, 'Hoàng Dũng', 'dungph', '123456', 1, '0984390228', 'dungph@gmail.com', 0, '2018-08-03', 1, ''),
(14, 'Mẫn Tiên', 'tiennm', '123456', 0, '0375585423', 'tiennm@gmail.com', 0, '2019-10-12', 1, ''),
(15, 'Phạm Đạt', 'datpt', '123456', 1, '0375230012', 'datpt@gmail.com', 0, '2019-05-29', 1, '');

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
(1, 'info_header', '[{\"address\":\"39 Trần Quốc Toản, Hoàn Kiếm, Hà Nội\",\n\"email\":\"fashion.mate@gmail.com\",\n\"hotline\":\"+84 902251996\"\n}]', 1, ''),
(2, 'store', '[{\"address\":\"39 Trần Quốc Toản, Hoàn Kiếm, Hà Nội\"\n},\n{\"address\":\"67A Đội Cấn, Ba Đình, Hà Nội\"\n},\n{\"address\":\"Lầu 1, 108 Nguyễn Sỹ Sách, Tân Bình, Hồ Chí Minh\"\n},\n{\"address\":\"142-D6 Lê Lai, Quận 1, Hồ Chí Minh\"\n}]', 1, ''),
(3, 'recruitment', '[\n{\"image\":\"assets/img/recruitment1.jpg\",\n\"job\":\"onlines sale (part time)\"\n},\n{\"image\":\"assets/img/recruitment2.jpg\",\n\"job\":\"onlines sale (full time)\"\n},\n{\"image\":\"assets/img/recruitment3.jpg\",\n\"job\":\"onlines supervisor\"\n},\n{\"image\":\"assets/img/recruitment4.jpg\",\n\"job\":\"sale assistant (part time)\"\n},\n{\"image\":\"assets/img/recruitment5.jpg\",\n\"job\":\"sale assistant (full time)\"\n}\n]', 1, ''),
(4, 'aboutus', '[\n{\"title\":\"Tầm nhìn của chúng tôi\",\n\"content\":\"Chúng tôi bắt đầu với mục tiêu rõ ràng bằng việc tập trung vào đối tượng khách hàng thuộc tầng lớp giới trẻ, những người năng động, gắn bó với môi trường sống xung quanh, những người sống trong cộng đồng và luôn được gắn kết với nhau. Những người trẻ tuổi có phong cách ăn mặc giản dị, ghét định kiến và muốn thoải mái với bất cứ thứ gì họ mặc\"\n},\n{\"title\":\"Sản phẩm của chúng tôi\",\n\"content\":\"Để đáp ứng nhu cầu của khách hàng, chúng tôi nắm bắt những xu hướng thời trang mới nhất, pha trộn với những hình ảnh được nhìn thấy trên đường phố và làm lại chúng theo phong cách của Look để biến chúng thành những trang phục thoải mái và dễ mặc. Các sản phẩm của Fashion mate chú trọng vào 3 yếu tố: FRESH, CLEAN, COMPORT. Chúng tôi có 2 dòng sản phẩm riêng biệt. Dòng sản phẩm đầu tiên tập trung vào giới trẻ vị thành niên, với phong cách ăn mặc giản dị và dễ dàng với áo phông, quần nỉ, quần short, mũ cap... Dòng sản phẩm tiếp theo với những thiết kế đặc biệt cao cấp hơn cho những bạn trẻ đã đồng hành cùng thương hiệu từ khi còn trẻ, tìm đến Fashionmate với nhu cầu về những sản phẩm chất lượng cao, mang phong cách chiết trung, có thể mặc ban ngày hay buổi tối, đi làm, đi học hay đi chơi.\"\n},\n{\"title\":\"Định hướng của chúng tôi\",\n\"content\":\"Fashionmate luôn phát triển song hành với khách hàng của mình, bằng cách bắt kịp những xu hướng về công nghệ, những thay đổi trong cộng đồng/xã hội, và đổi mới trong âm nhạc và nghệ thuật. Điều này không chỉ thể hiện qua thiết kế sản phẩm mà còn được thấy qua những chiến dịch truyền thông hướng đến xây dựng một cộng đồng văn minh, hiện đại và nhân văn. Hi vọng các bạn có thể theo dõi và đồng hành cùng chúng tôi trên con đường đó.\"\n}\n]', 1, '');

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
(22, 12, '2021-03-01', 348000, '2021-03-08', 1, ''),
(23, 6, '2021-03-02', 630000, '2021-03-09', 1, ''),
(24, 6, '2021-03-10', 1360000, '2021-03-17', 1, ''),
(25, 13, '2021-03-12', 540000, '2021-03-19', 1, ''),
(26, 13, '2021-03-12', 686000, '2021-03-19', 1, ''),
(27, 9, '2021-03-15', 388000, '2021-03-22', 1, ''),
(28, 2, '2021-03-15', 793000, '2021-03-22', 1, ''),
(29, 2, '2021-03-16', 298000, '2021-03-23', 1, ''),
(30, 5, '2021-03-20', 199000, '2021-03-27', 1, ''),
(31, 5, '2021-03-20', 298000, '2021-03-27', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orderdetail`
--

CREATE TABLE `tbl_orderdetail` (
  `id` int(11) NOT NULL,
  `idOrder` int(11) NOT NULL,
  `idProductDetail` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `note` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_orderdetail`
--

INSERT INTO `tbl_orderdetail` (`id`, `idOrder`, `idProductDetail`, `quantity`, `note`) VALUES
(18, 22, 230, 1, ''),
(19, 22, 78, 1, ''),
(20, 23, 571, 1, ''),
(21, 24, 562, 2, ''),
(22, 25, 64, 2, ''),
(23, 26, 347, 2, ''),
(24, 27, 138, 2, ''),
(25, 28, 386, 1, ''),
(26, 28, 326, 1, ''),
(27, 29, 6, 2, ''),
(28, 30, 18, 1, ''),
(29, 31, 115, 2, '');

--
-- Triggers `tbl_orderdetail`
--
DELIMITER $$
CREATE TRIGGER `trg_order` AFTER INSERT ON `tbl_orderdetail` FOR EACH ROW BEGIN
update tbl_productdetail
set tbl_productdetail.quantity = tbl_productdetail.quantity - new.quantity
WHERE tbl_productdetail.id = new.idProductDetail;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `idCategory` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `shortDesc` text NOT NULL,
  `image` text NOT NULL,
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

INSERT INTO `tbl_product` (`id`, `idCategory`, `name`, `shortDesc`, `image`, `price`, `sale`, `dateCreate`, `modifyBy`, `status`, `note`) VALUES
(1, 5, 'Basic Tee 2021', 'Áo phông cổ tròn fit trơn', 'assets\\img\\product\\basic-tee-2021.jpg', 249000, 149000, '2020-10-09', 1, 1, ''),
(2, 5, 'Wine Tee', 'Graphic oversize tee', 'assets\\img\\product\\wine-tee.jpg', 350000, 0, '2020-10-05', 1, 0, ''),
(3, 5, 'Crew T-shirt', 'Basic oversize tee', 'assets\\img\\product\\crew-t-shirt.jpg', 280000, 199000, '2020-05-09', 1, 1, ''),
(4, 6, 'Sammi shirt', 'Áo sơ mi ngắn tay oversize cổ đức hoạ tiết', 'assets\\img\\product\\sammi-shirt.jpg', 490000, 245000, '2020-10-17', 1, 1, ''),
(5, 6, 'Mindy shirt', 'Áo sơ mi dài tay fit cổ tàu hoạ tiết', 'assets\\img\\product\\mindy-shirt.jpg', 420000, 252000, '2020-11-20', 1, 1, ''),
(6, 6, 'Floral shirt 2021 v2', 'Áo sơ mi ngắn tay fit cổ đức hoạ tiết', 'assets\\img\\product\\floral-shirt-2021-v2.jpg', 349000, 99000, '2020-08-20', 1, 1, ''),
(7, 6, 'Floral shirt', 'Áo sơ mi ngắn tay oversize cổ đức hoạ tiết', 'assets\\img\\product\\floral-shirt.jpg', 349000, 99000, '2020-11-20', 1, 1, ''),
(8, 6, 'Kimi shirt', 'Áo sơ mi ngắn tay oversize cổ đức hoạ tiết', 'assets\\img\\product\\kimi-shirt.jpg', 490000, 245000, '2020-05-20', 1, 1, ''),
(9, 6, 'Julian shirt', 'Áo sơ mi dài tay oversize cổ đức hoạ tiết', 'assets\\img\\product\\julian-shirt.jpg', 450000, 270000, '2020-09-12', 1, 1, ''),
(10, 6, 'Velvet shirt', 'Oversize shirt', 'assets\\img\\product\\velvet-shirt.jpg', 450000, 0, '2020-10-01', 1, 1, ''),
(11, 6, 'Elevis shirt', 'Fit shirt', 'assets\\img\\product\\elevis-shirt.jpg', 390000, 0, '2020-09-11', 1, 0, ''),
(12, 7, 'Vicent tee', 'Áo phông polo oversize hoạ tiết', 'assets\\img\\product\\vicent-tee.jpg', 290000, 149000, '2020-07-23', 1, 1, ''),
(13, 7, 'Willa polo', 'Áo phông polo oversize trơn', 'assets/img/product/willa-polo.jpg', 389000, 149000, '2020-12-02', 1, 1, ''),
(14, 7, 'Wendy polo', 'Áo phông polo oversize hoạ tiết', 'assets\\img\\product\\wendy-polo.jpg', 389000, 149000, '2020-09-15', 1, 1, ''),
(15, 7, 'Daily polo', 'Áo phông polo oversize trơn', 'assets\\img\\product\\daily-polo.jpg', 390000, 199000, '2020-09-29', 1, 1, ''),
(16, 7, 'Fitteed polo', 'Basic polo', 'assets\\img\\product\\fitteed-polo.jpg', 390000, 199000, '2020-11-20', 1, 1, ''),
(17, 8, 'Wind short', 'Quần short cạp âu', 'assets\\img\\product\\wind-short.jpg', 389000, 194000, '2020-09-17', 1, 1, ''),
(18, 8, 'Poker short', 'Quần short cạp chun', 'assets\\img\\product\\poker-short.jpg', 369000, 99000, '2020-09-23', 1, 1, ''),
(19, 8, 'Vicky short', 'Quần short cạp âu', 'assets\\img\\product\\vicky-short.jpg', 369000, 99000, '2020-07-25', 1, 1, ''),
(20, 8, 'Lee short', 'Quần short cạp chun', 'assets\\img\\product\\lee-short.jpg', 349000, 148000, '2020-08-08', 1, 0, ''),
(21, 8, 'Linen short', 'Quần short cạp chun', 'assets\\img\\product\\linen-short.jpg', 349000, 209000, '2020-11-10', 1, 1, ''),
(22, 8, 'Harvey short', 'Quần short cạp chun', 'assets\\img\\product\\harvey-short.jpg', 349000, 149000, '2020-09-19', 1, 1, ''),
(23, 9, 'Comfort pant', 'Trousers', 'assets\\img\\product\\comfort-pant.jpg', 450000, 149000, '2020-06-28', 1, 1, ''),
(24, 9, 'Otis pant', 'Quần dài cạp âu suông', 'assets\\img\\product\\otis-pant.jpg', 450000, 270000, '2020-05-20', 1, 1, ''),
(25, 9, 'Alvin pant', 'Quần dài cạp âu suông', 'assets\\img\\product\\alvin-pant.jpg', 450000, 270000, '2020-08-05', 1, 1, ''),
(26, 9, 'Oliver pant', 'Quần dài cạp âu suông', 'assets\\img\\product\\oliver-pant.jpg', 450000, 199000, '2020-05-20', 1, 1, ''),
(27, 9, 'Carter pant', 'Quần dài cạp âu baggy', 'assets\\img\\product\\carter-pant.jpg', 450000, 270000, '2020-10-20', 1, 1, ''),
(28, 9, 'Baggy pant', 'Quần dài cạp chun baggy', 'assets\\img\\product\\baggy-pant.jpg', 400000, 280000, '2020-09-02', 1, 1, ''),
(29, 9, 'Ryder pant', 'Quần dài cạp chun suông', 'assets\\img\\product\\ryder-pant.jpg', 450000, 225000, '2020-03-23', 1, 1, ''),
(30, 9, 'Lincoln pant', 'Quần dài cạp âu suông', 'assets\\img\\product\\lincoln-pant.jpg', 450000, 270000, '2020-02-19', 1, 1, ''),
(31, 9, 'Flex pant 2021', 'Quần dài cạp chun suông', 'assets\\img\\product\\flex-pant-2021.jpg', 390000, 249000, '2020-11-03', 1, 1, ''),
(32, 9, 'Hunter pant', 'Quần dài cạp chun baggy', 'assets\\img\\product\\hunter-pant.jpg', 450000, 360000, '2020-02-02', 1, 1, ''),
(33, 9, 'Gabi pant', 'Quần dài cạp âu suông', 'assets\\img\\product\\gabi-pant.jpg', 450000, 315000, '2020-03-28', 1, 1, ''),
(34, 9, 'Kaija pant', 'Sweatpant', 'assets\\img\\product\\kaija-pant.jpg', 450000, 270000, '2020-08-12', 1, 1, ''),
(35, 9, 'Soft pant', 'Sweatpant', 'assets\\img\\product\\soft-pant.jpg', 590000, 354000, '2020-09-01', 1, 0, ''),
(36, 10, 'Chenmegan', 'Cắt gấu', 'assets\\img\\product\\chenmegan1.jpg', 520000, 0, '2020-03-15', 1, 1, ''),
(37, 10, 'Chenmegan', 'Trơn', 'assets\\img\\product\\chenmegan2.jpg', 520000, 0, '2020-08-19', 1, 1, ''),
(38, 10, 'Chenmegan', 'Rách gối', 'assets\\img\\product\\chenmegan3.jpg', 520000, 0, '2020-06-20', 1, 1, ''),
(39, 11, 'Suedue Hoodie', 'Basic hoodie', 'assets\\img\\product\\suedue-hoodie.jpg', 490000, 343000, '2020-09-12', 1, 1, ''),
(40, 12, 'Soft sweater', 'Basic Sweater', 'assets\\img\\product\\soft-sweater.jpg', 490000, 294000, '2020-08-10', 1, 0, ''),
(41, 12, 'Turtle neck sweater', 'Basic sweater', 'assets\\img\\product\\turtle-neck-sweater.jpg', 390000, 273000, '2020-04-09', 1, 1, ''),
(42, 12, 'Daily sweater 2020', 'Basic sweater', 'assets\\img\\product\\daily-sweater-2020.jpg', 390000, 149000, '2020-07-15', 1, 1, ''),
(43, 12, 'Blake sweater', 'Basic sweater', 'assets\\img\\product\\blake-sweater.jpg', 450000, 315000, '2020-06-29', 1, 0, ''),
(44, 12, 'Clever sweater', 'Look sweater', 'assets\\img\\product\\clever-sweater.jpg', 390000, 312000, '2020-06-26', 1, 1, ''),
(45, 12, 'Max sweater', 'Basic sweater', 'assets\\img\\product\\max-sweater.jpg', 350000, 245000, '2020-07-31', 1, 1, ''),
(46, 12, 'Brody sweater', 'Stripe sweater', 'assets\\img\\product\\brody-sweater.jpg', 350000, 149000, '2020-04-13', 1, 1, ''),
(47, 13, 'Kaija jacket', 'Windbreaker', 'assets\\img\\product\\kaija-jacket.jpg', 550000, 330000, '2020-04-20', 1, 1, ''),
(48, 14, 'Bomber jacket 2020', 'Jacket oversize', 'assets\\img\\product\\bomber-jacket-2020.jpg', 750000, 525000, '2020-10-17', 1, 1, ''),
(49, 14, 'Enzo jacket', 'Jacket fit', 'assets\\img\\product\\enzo-jacket.jpg', 590000, 472000, '2020-05-24', 1, 1, ''),
(50, 14, 'Brooks jacket', 'Jacket fit', 'assets\\img\\product\\brooks-jacket.jpg', 950000, 570000, '2020-07-09', 1, 1, ''),
(51, 14, 'Raincoat jacket', 'Jacket fit', 'assets\\img\\product\\raincoat-jacket.jpg', 890000, 534000, '2019-05-20', 1, 1, ''),
(52, 14, 'Casmere jacket', 'Jacket fit', 'assets\\img\\product\\casmere-jacket.jpg', 800000, 400000, '2019-05-20', 1, 1, ''),
(53, 14, 'Windy jacket', 'Jacket fit', 'assets\\img\\product\\windy-jacket.jpg', 750000, 600000, '2019-05-20', 1, 1, ''),
(54, 14, 'Cozy jacket', 'Jacket fit', 'assets\\img\\product\\cozy-jacket.jpg', 850000, 510000, '2019-05-20', 1, 1, ''),
(55, 14, 'Tyler jacket', 'Jacket oversize', 'assets\\img\\product\\tyler-jacket.jpg', 690000, 483000, '2019-05-20', 1, 1, ''),
(56, 14, 'Coby jacket', 'Jacket oversize', 'assets\\img\\product\\coby-jacket.jpg', 850000, 680000, '2019-05-20', 1, 1, ''),
(57, 15, 'Selby coat', 'Trench coat', 'assets\\img\\product\\selby-coat.jpg', 1050000, 630000, '2019-05-20', 1, 1, ''),
(58, 15, 'Puffy jacket', 'Basic coat', 'assets/img/product/puffy-jacket.jpg', 950000, 570000, '2019-05-20', 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_productdetail`
--

CREATE TABLE `tbl_productdetail` (
  `id` int(11) NOT NULL,
  `idProduct` int(11) NOT NULL,
  `idColor` int(11) NOT NULL,
  `idSize` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `note` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_productdetail`
--

INSERT INTO `tbl_productdetail` (`id`, `idProduct`, `idColor`, `idSize`, `quantity`, `status`, `note`) VALUES
(1, 1, 2, 1, 99, 1, ''),
(2, 1, 2, 2, 100, 1, ''),
(3, 1, 2, 3, 100, 1, ''),
(4, 1, 2, 4, 100, 1, ''),
(5, 1, 1, 1, 80, 1, ''),
(6, 1, 1, 2, 73, 1, ''),
(7, 1, 1, 3, 80, 1, ''),
(8, 1, 1, 4, 55, 1, ''),
(9, 2, 3, 1, 80, 1, ''),
(10, 2, 3, 2, 100, 1, ''),
(11, 2, 3, 3, 85, 1, ''),
(12, 2, 3, 4, 70, 1, ''),
(13, 3, 4, 1, 100, 1, ''),
(14, 3, 4, 2, 110, 1, ''),
(15, 3, 4, 3, 90, 1, ''),
(16, 3, 4, 4, 88, 1, ''),
(17, 3, 5, 1, 84, 1, ''),
(18, 3, 5, 2, 99, 1, ''),
(19, 3, 5, 3, 92, 1, ''),
(20, 3, 5, 4, 80, 1, ''),
(21, 4, 6, 1, 75, 1, ''),
(22, 4, 6, 2, 89, 1, ''),
(23, 4, 6, 3, 90, 1, ''),
(24, 4, 6, 4, 67, 1, ''),
(25, 4, 1, 1, 90, 1, ''),
(26, 4, 1, 2, 120, 1, ''),
(27, 4, 1, 3, 100, 1, ''),
(28, 4, 1, 4, 90, 1, ''),
(29, 5, 7, 1, 90, 1, ''),
(30, 5, 7, 2, 110, 1, ''),
(31, 5, 7, 3, 100, 1, ''),
(32, 5, 7, 4, 95, 1, ''),
(33, 5, 4, 1, 86, 1, ''),
(34, 5, 4, 2, 120, 1, ''),
(35, 5, 4, 3, 90, 1, ''),
(36, 5, 4, 4, 68, 1, ''),
(37, 6, 8, 1, 100, 1, ''),
(38, 6, 8, 2, 120, 1, ''),
(39, 6, 8, 3, 120, 1, ''),
(40, 6, 8, 4, 100, 1, ''),
(41, 7, 9, 1, 68, 1, ''),
(42, 7, 9, 2, 75, 1, ''),
(43, 7, 9, 3, 70, 1, ''),
(44, 7, 9, 4, 68, 1, ''),
(45, 7, 8, 1, 80, 1, ''),
(46, 7, 8, 2, 98, 1, ''),
(47, 7, 8, 3, 95, 1, ''),
(48, 7, 8, 4, 86, 1, ''),
(49, 8, 7, 1, 85, 1, ''),
(50, 8, 7, 2, 100, 1, ''),
(51, 8, 7, 3, 100, 1, ''),
(52, 8, 7, 4, 90, 1, ''),
(53, 8, 2, 1, 100, 1, ''),
(54, 8, 2, 2, 120, 1, ''),
(55, 8, 2, 3, 125, 1, ''),
(56, 8, 2, 4, 100, 1, ''),
(57, 9, 10, 1, 90, 1, ''),
(58, 9, 10, 2, 100, 1, ''),
(59, 9, 10, 3, 100, 1, ''),
(60, 9, 10, 4, 90, 1, ''),
(61, 9, 1, 1, 100, 1, ''),
(62, 9, 1, 2, 120, 1, ''),
(63, 9, 1, 3, 130, 1, ''),
(64, 9, 1, 4, 113, 1, ''),
(65, 10, 10, 1, 90, 1, ''),
(66, 10, 10, 2, 96, 1, ''),
(67, 10, 10, 3, 95, 1, ''),
(68, 10, 10, 4, 80, 1, ''),
(69, 11, 5, 1, 112, 1, ''),
(70, 11, 5, 2, 135, 1, ''),
(71, 11, 5, 3, 120, 1, ''),
(72, 11, 5, 4, 100, 1, ''),
(73, 11, 4, 1, 100, 1, ''),
(74, 11, 4, 2, 130, 1, ''),
(75, 11, 4, 3, 132, 1, ''),
(76, 11, 4, 4, 110, 1, ''),
(77, 12, 5, 1, 100, 1, ''),
(78, 12, 5, 2, 119, 1, ''),
(79, 12, 5, 3, 122, 1, ''),
(80, 12, 5, 4, 90, 1, ''),
(81, 12, 10, 1, 90, 1, ''),
(82, 12, 10, 2, 110, 1, ''),
(83, 12, 10, 3, 106, 1, ''),
(84, 12, 10, 4, 86, 1, ''),
(85, 13, 11, 1, 88, 1, ''),
(86, 13, 11, 2, 100, 1, ''),
(87, 13, 11, 3, 110, 1, ''),
(88, 13, 11, 4, 90, 1, ''),
(89, 13, 4, 1, 90, 1, ''),
(90, 13, 4, 2, 100, 1, ''),
(91, 13, 4, 3, 100, 1, ''),
(92, 13, 4, 4, 90, 1, ''),
(93, 13, 8, 1, 88, 1, ''),
(94, 13, 8, 2, 110, 1, ''),
(95, 13, 8, 3, 122, 1, ''),
(96, 13, 8, 4, 90, 1, ''),
(97, 13, 2, 1, 110, 1, ''),
(98, 13, 2, 2, 145, 1, ''),
(99, 13, 2, 3, 139, 1, ''),
(100, 13, 2, 4, 110, 1, ''),
(101, 14, 2, 1, 110, 1, ''),
(102, 14, 2, 2, 122, 1, ''),
(103, 14, 2, 3, 120, 1, ''),
(104, 14, 2, 4, 100, 1, ''),
(105, 14, 11, 1, 100, 1, ''),
(106, 14, 11, 2, 112, 1, ''),
(107, 14, 11, 3, 110, 1, ''),
(108, 14, 11, 4, 92, 1, ''),
(109, 14, 4, 1, 100, 1, ''),
(110, 14, 4, 2, 90, 1, ''),
(111, 14, 4, 3, 100, 1, ''),
(112, 14, 4, 4, 88, 1, ''),
(113, 14, 8, 1, 100, 1, ''),
(114, 14, 8, 2, 115, 1, ''),
(115, 14, 8, 3, 113, 1, ''),
(116, 14, 8, 4, 90, 1, ''),
(117, 15, 8, 1, 100, 1, ''),
(118, 15, 8, 2, 110, 1, ''),
(119, 15, 8, 3, 110, 1, ''),
(120, 15, 8, 4, 90, 1, ''),
(121, 15, 11, 1, 100, 1, ''),
(122, 15, 11, 2, 120, 1, ''),
(123, 15, 11, 3, 110, 1, ''),
(124, 15, 11, 4, 90, 1, ''),
(125, 16, 4, 1, 92, 1, ''),
(126, 16, 4, 2, 122, 1, ''),
(127, 16, 4, 3, 100, 1, ''),
(128, 16, 4, 4, 100, 1, ''),
(129, 16, 11, 1, 90, 1, ''),
(130, 16, 11, 2, 110, 1, ''),
(131, 16, 11, 3, 88, 1, ''),
(132, 16, 11, 4, 68, 1, ''),
(133, 16, 8, 1, 93, 1, ''),
(134, 16, 8, 2, 108, 1, ''),
(135, 16, 8, 3, 105, 1, ''),
(136, 16, 8, 4, 106, 1, ''),
(137, 17, 5, 1, 110, 1, ''),
(138, 17, 5, 2, 143, 1, ''),
(139, 17, 5, 3, 152, 1, ''),
(140, 17, 5, 4, 114, 1, ''),
(141, 17, 1, 1, 120, 1, ''),
(142, 17, 1, 2, 160, 1, ''),
(143, 17, 1, 3, 160, 1, ''),
(144, 17, 1, 4, 100, 1, ''),
(145, 17, 7, 1, 100, 1, ''),
(146, 17, 7, 2, 108, 1, ''),
(147, 17, 7, 3, 105, 1, ''),
(148, 17, 7, 4, 70, 1, ''),
(149, 18, 2, 1, 90, 1, ''),
(150, 18, 2, 2, 92, 1, ''),
(151, 18, 2, 3, 96, 1, ''),
(152, 18, 2, 4, 100, 1, ''),
(153, 18, 4, 1, 100, 1, ''),
(154, 18, 4, 2, 100, 1, ''),
(155, 18, 4, 3, 90, 1, ''),
(156, 18, 4, 4, 78, 1, ''),
(157, 18, 3, 1, 50, 1, ''),
(158, 18, 3, 2, 65, 1, ''),
(159, 18, 3, 3, 75, 1, ''),
(160, 18, 3, 4, 50, 1, ''),
(161, 19, 5, 1, 100, 1, ''),
(162, 19, 5, 2, 110, 1, ''),
(163, 19, 5, 3, 112, 1, ''),
(164, 19, 5, 4, 100, 1, ''),
(165, 19, 4, 1, 100, 1, ''),
(166, 19, 4, 2, 108, 1, ''),
(167, 19, 4, 3, 104, 1, ''),
(168, 19, 4, 4, 90, 1, ''),
(169, 20, 2, 1, 110, 1, ''),
(170, 20, 2, 2, 120, 1, ''),
(171, 20, 2, 3, 120, 1, ''),
(172, 20, 2, 4, 100, 1, ''),
(173, 21, 2, 1, 110, 1, ''),
(174, 21, 2, 2, 125, 1, ''),
(175, 21, 2, 3, 125, 1, ''),
(176, 21, 2, 4, 114, 1, ''),
(177, 21, 4, 1, 110, 1, ''),
(178, 21, 4, 2, 120, 1, ''),
(179, 21, 4, 3, 122, 1, ''),
(180, 21, 4, 4, 109, 1, ''),
(181, 21, 7, 1, 100, 1, ''),
(182, 21, 7, 2, 117, 1, ''),
(183, 21, 7, 3, 102, 1, ''),
(184, 21, 7, 4, 90, 1, ''),
(185, 22, 4, 1, 100, 1, ''),
(186, 22, 4, 2, 100, 1, ''),
(187, 22, 4, 3, 108, 1, ''),
(188, 22, 4, 4, 88, 1, ''),
(189, 22, 7, 1, 70, 1, ''),
(190, 22, 7, 2, 90, 1, ''),
(191, 22, 7, 3, 90, 1, ''),
(192, 22, 7, 4, 69, 1, ''),
(193, 22, 2, 1, 100, 1, ''),
(194, 22, 2, 2, 106, 1, ''),
(195, 22, 2, 3, 109, 1, ''),
(196, 22, 2, 4, 91, 1, ''),
(197, 22, 10, 1, 70, 1, ''),
(198, 22, 10, 2, 90, 1, ''),
(199, 22, 10, 3, 79, 1, ''),
(200, 22, 10, 4, 70, 1, ''),
(201, 22, 5, 1, 70, 1, ''),
(202, 22, 5, 2, 80, 1, ''),
(203, 22, 5, 3, 80, 1, ''),
(204, 22, 5, 4, 60, 1, ''),
(205, 23, 10, 1, 150, 1, ''),
(206, 23, 10, 2, 170, 1, ''),
(207, 23, 10, 3, 167, 1, ''),
(208, 23, 10, 4, 160, 1, ''),
(209, 23, 7, 1, 140, 1, ''),
(210, 23, 7, 2, 160, 1, ''),
(211, 23, 7, 3, 160, 1, ''),
(212, 23, 7, 4, 134, 1, ''),
(213, 24, 7, 1, 154, 1, ''),
(214, 24, 7, 2, 160, 1, ''),
(215, 24, 7, 3, 160, 1, ''),
(216, 24, 7, 4, 130, 1, ''),
(217, 24, 2, 1, 150, 1, ''),
(218, 24, 2, 2, 179, 1, ''),
(219, 24, 2, 3, 187, 1, ''),
(220, 24, 2, 4, 150, 1, ''),
(221, 25, 10, 1, 130, 1, ''),
(222, 25, 10, 2, 140, 1, ''),
(223, 25, 10, 3, 130, 1, ''),
(224, 25, 10, 4, 110, 1, ''),
(225, 25, 2, 1, 140, 1, ''),
(226, 25, 2, 2, 170, 1, ''),
(227, 25, 2, 3, 165, 1, ''),
(228, 25, 2, 4, 130, 1, ''),
(229, 26, 2, 1, 140, 1, ''),
(230, 26, 2, 2, 167, 1, ''),
(231, 26, 2, 3, 170, 1, ''),
(232, 26, 2, 4, 130, 1, ''),
(233, 26, 7, 1, 120, 1, ''),
(234, 26, 7, 2, 150, 1, ''),
(235, 26, 7, 3, 155, 1, ''),
(236, 26, 7, 4, 130, 1, ''),
(237, 26, 5, 1, 110, 1, ''),
(238, 26, 5, 2, 140, 1, ''),
(239, 26, 5, 3, 140, 1, ''),
(240, 26, 5, 4, 118, 1, ''),
(241, 27, 2, 1, 140, 1, ''),
(242, 27, 2, 2, 168, 1, ''),
(243, 27, 2, 3, 150, 1, ''),
(244, 27, 2, 4, 120, 1, ''),
(245, 28, 2, 1, 120, 1, ''),
(246, 28, 2, 2, 140, 1, ''),
(247, 28, 2, 3, 136, 1, ''),
(248, 28, 2, 4, 120, 1, ''),
(249, 29, 2, 1, 120, 1, ''),
(250, 29, 2, 2, 160, 1, ''),
(251, 29, 2, 3, 160, 1, ''),
(252, 29, 2, 4, 130, 1, ''),
(253, 30, 4, 1, 110, 1, ''),
(254, 30, 4, 2, 120, 1, ''),
(255, 30, 4, 3, 120, 1, ''),
(256, 30, 4, 4, 100, 1, ''),
(257, 30, 2, 1, 110, 1, ''),
(258, 30, 2, 2, 138, 1, ''),
(259, 30, 2, 3, 130, 1, ''),
(260, 30, 2, 4, 115, 1, ''),
(261, 30, 10, 1, 100, 1, ''),
(262, 30, 10, 2, 125, 1, ''),
(263, 30, 10, 3, 120, 1, ''),
(264, 30, 10, 4, 110, 1, ''),
(265, 31, 2, 1, 120, 1, ''),
(266, 31, 2, 2, 145, 1, ''),
(267, 31, 2, 3, 143, 1, ''),
(268, 31, 2, 4, 120, 1, ''),
(269, 31, 7, 1, 110, 1, ''),
(270, 31, 7, 2, 125, 1, ''),
(271, 31, 7, 3, 130, 1, ''),
(272, 31, 7, 4, 114, 1, ''),
(273, 32, 7, 1, 113, 1, ''),
(274, 32, 7, 2, 130, 1, ''),
(275, 32, 7, 3, 128, 1, ''),
(276, 32, 7, 4, 117, 1, ''),
(277, 32, 2, 1, 125, 1, ''),
(278, 32, 2, 2, 150, 1, ''),
(279, 32, 2, 3, 155, 1, ''),
(280, 32, 2, 4, 120, 1, ''),
(281, 32, 4, 1, 125, 1, ''),
(282, 32, 4, 2, 150, 1, ''),
(283, 32, 4, 3, 147, 1, ''),
(284, 32, 4, 4, 118, 1, ''),
(285, 33, 2, 1, 140, 1, ''),
(286, 33, 2, 2, 168, 1, ''),
(287, 33, 2, 3, 165, 1, ''),
(288, 33, 2, 4, 139, 1, ''),
(289, 33, 7, 1, 115, 1, ''),
(290, 33, 7, 2, 130, 1, ''),
(291, 33, 7, 3, 145, 1, ''),
(292, 33, 7, 4, 116, 1, ''),
(293, 33, 10, 1, 110, 1, ''),
(294, 33, 10, 2, 120, 1, ''),
(295, 33, 10, 3, 120, 1, ''),
(296, 33, 10, 4, 108, 1, ''),
(297, 34, 7, 1, 114, 1, ''),
(298, 34, 7, 2, 125, 1, ''),
(299, 34, 7, 3, 130, 1, ''),
(300, 34, 7, 4, 114, 1, ''),
(301, 34, 2, 1, 130, 1, ''),
(302, 34, 2, 2, 180, 1, ''),
(303, 34, 2, 3, 170, 1, ''),
(304, 34, 2, 4, 140, 1, ''),
(305, 35, 2, 1, 120, 1, ''),
(306, 35, 2, 2, 140, 1, ''),
(307, 35, 2, 3, 150, 1, ''),
(308, 35, 2, 4, 120, 1, ''),
(309, 35, 4, 1, 113, 1, ''),
(310, 35, 4, 2, 125, 1, ''),
(311, 35, 4, 3, 122, 1, ''),
(312, 35, 4, 4, 110, 1, ''),
(313, 35, 8, 1, 100, 1, ''),
(314, 35, 8, 2, 120, 1, ''),
(315, 35, 8, 3, 118, 1, ''),
(316, 35, 8, 4, 100, 1, ''),
(317, 35, 5, 1, 110, 1, ''),
(318, 35, 5, 2, 127, 1, ''),
(319, 35, 5, 3, 120, 1, ''),
(320, 35, 5, 4, 100, 1, ''),
(321, 36, 2, 1, 160, 1, ''),
(322, 36, 2, 2, 200, 1, ''),
(323, 36, 2, 3, 200, 1, ''),
(324, 36, 2, 4, 165, 1, ''),
(325, 37, 2, 1, 150, 1, ''),
(326, 37, 2, 2, 177, 1, ''),
(327, 37, 2, 3, 190, 1, ''),
(328, 37, 2, 4, 160, 1, ''),
(329, 38, 2, 1, 140, 1, ''),
(330, 38, 2, 2, 190, 1, ''),
(331, 38, 2, 3, 186, 1, ''),
(332, 38, 2, 4, 160, 1, ''),
(333, 39, 5, 1, 139, 1, ''),
(334, 39, 5, 2, 153, 1, ''),
(335, 39, 5, 3, 140, 1, ''),
(336, 39, 5, 4, 120, 1, ''),
(337, 39, 4, 1, 120, 1, ''),
(338, 39, 4, 2, 180, 1, ''),
(339, 39, 4, 3, 200, 1, ''),
(340, 39, 4, 4, 160, 1, ''),
(341, 39, 2, 1, 120, 1, ''),
(342, 39, 2, 2, 200, 1, ''),
(343, 39, 2, 3, 190, 1, ''),
(344, 39, 2, 4, 160, 1, ''),
(345, 39, 3, 1, 100, 1, ''),
(346, 39, 3, 2, 140, 1, ''),
(347, 39, 3, 3, 135, 1, ''),
(348, 39, 3, 4, 110, 1, ''),
(349, 39, 10, 1, 140, 1, ''),
(350, 39, 10, 2, 160, 1, ''),
(351, 39, 10, 3, 160, 1, ''),
(352, 39, 10, 4, 130, 1, ''),
(353, 40, 8, 1, 25, 0, ''),
(354, 40, 8, 2, 30, 0, ''),
(355, 40, 8, 3, 20, 0, ''),
(356, 40, 8, 4, 18, 0, ''),
(357, 40, 4, 1, 14, 0, ''),
(358, 40, 4, 2, 17, 0, ''),
(359, 40, 4, 3, 20, 0, ''),
(360, 40, 4, 4, 22, 0, ''),
(361, 40, 2, 1, 30, 0, ''),
(362, 40, 2, 2, 40, 0, ''),
(363, 40, 2, 3, 35, 0, ''),
(364, 40, 2, 4, 25, 0, ''),
(365, 40, 5, 1, 14, 0, ''),
(366, 40, 5, 2, 22, 0, ''),
(367, 40, 5, 3, 23, 0, ''),
(368, 40, 5, 4, 30, 0, ''),
(369, 41, 5, 1, 100, 1, ''),
(370, 41, 5, 2, 116, 1, ''),
(371, 41, 5, 3, 120, 1, ''),
(372, 41, 5, 4, 130, 1, ''),
(373, 41, 12, 1, 100, 1, ''),
(374, 41, 12, 2, 105, 1, ''),
(375, 41, 12, 3, 105, 1, ''),
(376, 41, 12, 4, 98, 1, ''),
(377, 41, 7, 1, 90, 1, ''),
(378, 41, 7, 2, 103, 1, ''),
(379, 41, 7, 3, 108, 1, ''),
(380, 41, 7, 4, 100, 1, ''),
(381, 41, 13, 1, 90, 1, ''),
(382, 41, 13, 2, 125, 1, ''),
(383, 41, 13, 3, 120, 1, ''),
(384, 41, 13, 4, 104, 1, ''),
(385, 41, 2, 1, 120, 1, ''),
(386, 41, 2, 2, 129, 1, ''),
(387, 41, 2, 3, 128, 1, ''),
(388, 41, 2, 4, 121, 1, ''),
(389, 42, 5, 1, 100, 1, ''),
(390, 42, 5, 2, 107, 1, ''),
(391, 42, 5, 3, 117, 1, ''),
(392, 42, 5, 4, 102, 1, ''),
(393, 42, 7, 1, 109, 1, ''),
(394, 42, 7, 2, 110, 1, ''),
(395, 42, 7, 3, 111, 1, ''),
(396, 42, 7, 4, 106, 1, ''),
(397, 42, 2, 1, 100, 1, ''),
(398, 42, 2, 2, 123, 1, ''),
(399, 42, 2, 3, 130, 1, ''),
(400, 42, 2, 4, 117, 1, ''),
(401, 42, 11, 1, 90, 1, ''),
(402, 42, 11, 2, 96, 1, ''),
(403, 42, 11, 3, 90, 1, ''),
(404, 42, 11, 4, 68, 1, ''),
(405, 43, 7, 1, 80, 1, ''),
(406, 43, 7, 2, 88, 1, ''),
(407, 43, 7, 3, 90, 1, ''),
(408, 43, 7, 4, 65, 1, ''),
(409, 43, 10, 1, 80, 1, ''),
(410, 43, 10, 2, 70, 1, ''),
(411, 43, 10, 3, 78, 1, ''),
(412, 43, 10, 4, 50, 1, ''),
(413, 43, 2, 1, 100, 1, ''),
(414, 43, 2, 2, 120, 1, ''),
(415, 43, 2, 3, 122, 1, ''),
(416, 43, 2, 4, 97, 1, ''),
(417, 44, 3, 1, 70, 1, ''),
(418, 44, 3, 2, 88, 1, ''),
(419, 44, 3, 3, 85, 1, ''),
(420, 44, 3, 4, 58, 1, ''),
(421, 44, 10, 1, 80, 1, ''),
(422, 44, 10, 2, 100, 1, ''),
(423, 44, 10, 3, 99, 1, ''),
(424, 44, 10, 4, 83, 1, ''),
(425, 44, 8, 1, 86, 1, ''),
(426, 44, 8, 2, 102, 1, ''),
(427, 44, 8, 3, 106, 1, ''),
(428, 44, 8, 4, 82, 1, ''),
(429, 44, 11, 1, 80, 1, ''),
(430, 44, 11, 2, 100, 1, ''),
(431, 44, 11, 3, 105, 1, ''),
(432, 44, 11, 4, 88, 1, ''),
(433, 44, 2, 1, 105, 1, ''),
(434, 44, 2, 2, 123, 1, ''),
(435, 44, 2, 3, 134, 1, ''),
(436, 44, 2, 4, 101, 1, ''),
(437, 45, 14, 1, 50, 1, ''),
(438, 45, 14, 2, 66, 1, ''),
(439, 45, 14, 3, 70, 1, ''),
(440, 45, 14, 4, 48, 1, ''),
(441, 45, 10, 1, 60, 1, ''),
(442, 45, 10, 2, 70, 1, ''),
(443, 45, 10, 3, 72, 1, ''),
(444, 45, 10, 4, 56, 1, ''),
(445, 45, 11, 1, 68, 1, ''),
(446, 45, 11, 2, 78, 1, ''),
(447, 45, 11, 3, 80, 1, ''),
(448, 45, 11, 4, 67, 1, ''),
(449, 45, 4, 1, 70, 1, ''),
(450, 45, 4, 2, 80, 1, ''),
(451, 45, 4, 3, 83, 1, ''),
(452, 45, 4, 4, 60, 1, ''),
(453, 45, 5, 1, 56, 1, ''),
(454, 45, 5, 2, 64, 1, ''),
(455, 45, 5, 3, 55, 1, ''),
(456, 45, 5, 4, 34, 1, ''),
(457, 45, 2, 1, 72, 1, ''),
(458, 45, 2, 2, 105, 1, ''),
(459, 45, 2, 3, 120, 1, ''),
(460, 45, 2, 4, 88, 1, ''),
(461, 46, 7, 1, 77, 1, ''),
(462, 46, 7, 2, 80, 1, ''),
(463, 46, 7, 3, 80, 1, ''),
(464, 46, 7, 4, 58, 1, ''),
(465, 46, 10, 1, 70, 1, ''),
(466, 46, 10, 2, 70, 1, ''),
(467, 46, 10, 3, 56, 1, ''),
(468, 46, 10, 4, 45, 1, ''),
(469, 46, 4, 1, 56, 1, ''),
(470, 46, 4, 2, 87, 1, ''),
(471, 46, 4, 3, 80, 1, ''),
(472, 46, 4, 4, 59, 1, ''),
(473, 47, 2, 1, 120, 1, ''),
(474, 47, 2, 2, 150, 1, ''),
(475, 47, 2, 3, 168, 1, ''),
(476, 47, 2, 4, 130, 1, ''),
(477, 47, 7, 1, 110, 1, ''),
(478, 47, 7, 2, 150, 1, ''),
(479, 47, 7, 3, 145, 1, ''),
(480, 47, 7, 4, 132, 1, ''),
(481, 48, 2, 1, 140, 1, ''),
(482, 48, 2, 2, 188, 1, ''),
(483, 48, 2, 3, 200, 1, ''),
(484, 48, 2, 4, 160, 1, ''),
(485, 49, 2, 1, 145, 1, ''),
(486, 49, 2, 2, 187, 1, ''),
(487, 49, 2, 3, 210, 1, ''),
(488, 49, 2, 4, 156, 1, ''),
(489, 49, 10, 1, 140, 1, ''),
(490, 49, 10, 2, 160, 1, ''),
(491, 49, 10, 3, 162, 1, ''),
(492, 49, 10, 4, 132, 1, ''),
(493, 49, 7, 1, 110, 1, ''),
(494, 49, 7, 2, 140, 1, ''),
(495, 49, 7, 3, 150, 1, ''),
(496, 49, 7, 4, 124, 1, ''),
(497, 50, 10, 1, 104, 1, ''),
(498, 50, 10, 2, 128, 1, ''),
(499, 50, 10, 3, 135, 1, ''),
(500, 50, 10, 4, 121, 1, ''),
(501, 50, 7, 1, 120, 1, ''),
(502, 50, 7, 2, 136, 1, ''),
(503, 50, 7, 3, 147, 1, ''),
(504, 50, 7, 4, 119, 1, ''),
(505, 50, 5, 1, 100, 1, ''),
(506, 50, 5, 2, 124, 1, ''),
(507, 50, 5, 3, 139, 1, ''),
(508, 50, 5, 4, 110, 1, ''),
(509, 50, 2, 1, 165, 1, ''),
(510, 50, 2, 2, 210, 1, ''),
(511, 50, 2, 3, 235, 1, ''),
(512, 50, 2, 4, 170, 1, ''),
(513, 51, 2, 1, 140, 1, ''),
(514, 51, 2, 2, 180, 1, ''),
(515, 51, 2, 3, 172, 1, ''),
(516, 51, 2, 4, 135, 1, ''),
(517, 51, 11, 1, 100, 1, ''),
(518, 51, 11, 2, 133, 1, ''),
(519, 51, 11, 3, 128, 1, ''),
(520, 51, 11, 4, 105, 1, ''),
(521, 52, 2, 1, 90, 1, ''),
(522, 52, 2, 2, 130, 1, ''),
(523, 52, 2, 3, 132, 1, ''),
(524, 52, 2, 4, 111, 1, ''),
(525, 52, 7, 1, 95, 1, ''),
(526, 52, 7, 2, 114, 1, ''),
(527, 52, 7, 3, 118, 1, ''),
(528, 52, 7, 4, 100, 1, ''),
(529, 53, 2, 1, 150, 1, ''),
(530, 53, 2, 2, 168, 1, ''),
(531, 53, 2, 3, 187, 1, ''),
(532, 53, 2, 4, 167, 1, ''),
(533, 53, 5, 1, 110, 1, ''),
(534, 53, 5, 2, 125, 1, ''),
(535, 53, 5, 3, 155, 1, ''),
(536, 53, 5, 4, 112, 1, ''),
(537, 53, 7, 1, 110, 1, ''),
(538, 53, 7, 2, 129, 1, ''),
(539, 53, 7, 3, 139, 1, ''),
(540, 53, 7, 4, 120, 1, ''),
(541, 54, 7, 1, 120, 1, ''),
(542, 54, 7, 2, 137, 1, ''),
(543, 54, 7, 3, 138, 1, ''),
(544, 54, 7, 4, 129, 1, ''),
(545, 54, 4, 1, 118, 1, ''),
(546, 54, 4, 2, 130, 1, ''),
(547, 54, 4, 3, 134, 1, ''),
(548, 54, 4, 4, 117, 1, ''),
(549, 55, 4, 1, 132, 1, ''),
(550, 55, 4, 2, 127, 1, ''),
(551, 55, 4, 3, 138, 1, ''),
(552, 55, 4, 4, 120, 1, ''),
(553, 55, 10, 1, 130, 1, ''),
(554, 55, 10, 2, 140, 1, ''),
(555, 55, 10, 3, 145, 1, ''),
(556, 55, 10, 4, 122, 1, ''),
(557, 56, 2, 1, 128, 1, ''),
(558, 56, 2, 2, 144, 1, ''),
(559, 56, 2, 3, 150, 1, ''),
(560, 56, 2, 4, 126, 1, ''),
(561, 56, 7, 1, 150, 1, ''),
(562, 56, 7, 2, 176, 1, ''),
(563, 56, 7, 3, 190, 1, ''),
(564, 56, 7, 4, 167, 1, ''),
(565, 57, 2, 1, 100, 1, ''),
(566, 57, 2, 2, 120, 1, ''),
(567, 57, 2, 3, 131, 1, ''),
(568, 57, 2, 4, 107, 1, ''),
(569, 57, 10, 1, 97, 1, ''),
(570, 57, 10, 2, 110, 1, ''),
(571, 57, 10, 3, 112, 1, ''),
(572, 57, 10, 4, 95, 1, ''),
(573, 58, 1, 1, 119, 1, ''),
(574, 58, 1, 2, 134, 1, ''),
(575, 58, 1, 3, 128, 1, ''),
(576, 58, 1, 4, 106, 1, ''),
(577, 58, 2, 1, 129, 1, ''),
(578, 58, 2, 2, 146, 1, ''),
(579, 58, 2, 3, 160, 1, ''),
(580, 58, 2, 4, 118, 1, ''),
(581, 58, 10, 1, 100, 1, ''),
(582, 58, 10, 2, 123, 1, ''),
(583, 58, 10, 3, 116, 1, ''),
(584, 58, 10, 4, 93, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_size`
--

CREATE TABLE `tbl_size` (
  `id` int(11) NOT NULL,
  `size` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_size`
--

INSERT INTO `tbl_size` (`id`, `size`, `note`) VALUES
(1, 'S', ''),
(2, 'M', ''),
(3, 'L', ''),
(4, 'XL', '');

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
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `dateCreate` date NOT NULL,
  `status` int(11) NOT NULL,
  `note` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `fullname`, `username`, `password`, `role`, `gender`, `phone`, `email`, `image`, `dateCreate`, `status`, `note`) VALUES
(1, 'Hùng Quân', 'hungquan6311', '123456', 1, 1, '0902251996', 'hungquan6311@gmail.com', 'dist\\images\\user\\quan.jpg', '2015-05-03', 1, ''),
(2, 'Phương Anh', 'anhnp', '123456', 2, 0, '0339365789', 'anhnp@gmail.com', 'dist/images/user/anhnp.jpg', '2016-09-24', 1, ''),
(3, 'Thành Nam', 'namvt', '123456', 3, 1, '0352354529', 'namvt@gmail.com', 'dist/images/user/namvt.jpg', '2017-11-22', 1, ''),
(4, 'Nguyễn Dũng', 'dungnc', '123456', 3, 1, '0391202119', 'dungnc@gmail.com', 'dist/images/user/dungnc.png', '2016-08-17', 1, ''),
(5, 'Vũ Đăng', 'dangvt', '123456', 2, 1, '0391024322', 'dungnc@gmail.com', 'dist/images/user/dangvt.jpg', '2016-10-14', 1, ''),
(6, 'Minh Anh', 'anhpnm', '123456', 2, 0, '0392025310', 'anhpnm@gmail.com', 'dist/images/user/anhpnm.jpg', '2016-12-06', 1, ''),
(7, 'Đăng Khoa', 'khoatd', '123456', 3, 1, '0382140328', 'khoatd@gmail.com', 'dist/images/user/khoatd.jpg', '2016-09-28', 1, ''),
(8, 'Trung Anh', 'anhdt', '123456', 3, 1, '0391100923', 'anhdt@gmail.com', 'dist/images/user/anhdt.jpg', '2017-02-20', 0, ''),
(9, 'Phương Trâm', 'tramnp', '123456', 3, 0, '0388087657', 'tramnp@gmail.com', 'dist/images/user/tramnp.jpg', '2017-01-07', 1, ''),
(10, 'Hoàng Linh', 'linhht', '123456', 3, 0, '0372204110', 'linhht@gmail.com', 'dist/images/user/linhht.jpg', '2016-11-30', 1, ''),
(11, 'Duy Long', 'longnd', '123456', 3, 1, '0986182322', 'longnd@gmail.com', 'dist/images/user/longnd.jpg', '2017-01-27', 1, '');

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
-- Indexes for table `tbl_color`
--
ALTER TABLE `tbl_color`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `constraint_orderdetail_order` (`idOrder`),
  ADD KEY `constraint_orderdetail_productdetail` (`idProductDetail`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `constraint_product_user` (`modifyBy`),
  ADD KEY `constraint_product_category` (`idCategory`);

--
-- Indexes for table `tbl_productdetail`
--
ALTER TABLE `tbl_productdetail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `constraint_detailP_product` (`idProduct`),
  ADD KEY `constraint_detailP_color` (`idColor`),
  ADD KEY `constraint_detailP_size` (`idSize`);

--
-- Indexes for table `tbl_size`
--
ALTER TABLE `tbl_size`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_color`
--
ALTER TABLE `tbl_color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_infomation`
--
ALTER TABLE `tbl_infomation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_orderdetail`
--
ALTER TABLE `tbl_orderdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tbl_productdetail`
--
ALTER TABLE `tbl_productdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=585;

--
-- AUTO_INCREMENT for table `tbl_size`
--
ALTER TABLE `tbl_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  ADD CONSTRAINT `constraint_orderdetail_productdetail` FOREIGN KEY (`idProductDetail`) REFERENCES `tbl_productdetail` (`id`);

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `constraint_product_category` FOREIGN KEY (`idCategory`) REFERENCES `tbl_category` (`id`),
  ADD CONSTRAINT `constraint_product_user` FOREIGN KEY (`modifyBy`) REFERENCES `tbl_user` (`id`);

--
-- Constraints for table `tbl_productdetail`
--
ALTER TABLE `tbl_productdetail`
  ADD CONSTRAINT `constraint_detailP_color` FOREIGN KEY (`idColor`) REFERENCES `tbl_color` (`id`),
  ADD CONSTRAINT `constraint_detailP_product` FOREIGN KEY (`idProduct`) REFERENCES `tbl_product` (`id`),
  ADD CONSTRAINT `constraint_detailP_size` FOREIGN KEY (`idSize`) REFERENCES `tbl_size` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
