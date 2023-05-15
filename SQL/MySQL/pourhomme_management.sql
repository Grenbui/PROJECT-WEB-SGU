-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 05, 2023 at 03:25 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

-- SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
-- START TRANSACTION;
-- SET time_zone = "+00:00";

CREATE DATABASE POURHOMME_MANAGEMENT;
use POURHOMME_MANAGEMENT;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pourhomme_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` varchar(50) NOT NULL,
  `customerName` varchar(100) DEFAULT NULL,
  `customerEmail` varchar(100) DEFAULT NULL,
  `userNameAccount` varchar(100) DEFAULT NULL,
  `userPasswordAccount` varchar(100) DEFAULT NULL,
  `phoneNumber` varchar(11) DEFAULT NULL,
  `addressLine1` varchar(100) DEFAULT NULL,
  `addressLine2` varchar(100) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `customerStatus` bit(1) DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` varchar(50) NOT NULL,
  `orderDate` date DEFAULT NULL,
  `shippedDate` date DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `comments` varchar(300) DEFAULT NULL,
  `customerID` varchar(50) DEFAULT NULL,
  `subAddress` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `orderDetailID` varchar(50) NOT NULL,
  `orderID` varchar(50) DEFAULT NULL,
  `productID` varchar(50) NOT NULL,
  `quantityOrdered` int(11) NOT NULL,
  `priceEach` decimal(7,0) NOT NULL,
  `orderLineNumber` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `customerID` varchar(50) NOT NULL,
  `checkNumber` int(11) NOT NULL,
  `paymentDate` date DEFAULT NULL,
  `amount` decimal(9,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` varchar(50) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `productLineID` varchar(50) NOT NULL,
  `productVendor` varchar(50) NOT NULL,
  `productDescription` text NOT NULL,
  `quantityInStock` int(11) NOT NULL,
  `buyPrice` decimal(7,0) NOT NULL,
  `MSRP` decimal(7,0) DEFAULT NULL,
  `productMaterial` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `productName`, `productLineID`, `productVendor`, `productDescription`, `quantityInStock`, `buyPrice`, `MSRP`, `productMaterial`) VALUES
('P1', 'Johny Classique Chelsea', 'PL1', 'NSX A', '', 30, 3050000, 2000000, 'Da'),
('P10', 'Ronny Moca Suede (grey)', 'PL2', 'NSX A', '', 8, 1050000, 900000, 'Da lộn'),
('P11', 'Ronny Moca Suede (brown)', 'PL2', 'NSX A', '', 9, 3050000, 3000000, 'Da lộn'),
('P12', 'Flip-flop weaving (black)', 'PL3', 'NSX A', '', 10, 800000, 500000, ''),
('P13', 'Flip-flop weaving (blue)', 'PL3', 'NSX A', '', 2, 750000, 600000, ''),
('P14', 'Flip-flop weaving (brown)', 'PL3', 'NSX A', '', 4, 800000, 750000, ''),
('P15', 'Flip-flop weaving (grey)', 'PL3', 'NSX A', '', 20, 500000, 400000, ''),
('P16', 'Flip-flop weaving (red)', 'PL3', 'NSX A', '', 15, 950000, 700000, ''),
('P17', 'Lokky Taiga Belt 3.4cm Simple', 'PL4', 'NSX A', '', 15, 850000, 700000, 'Da'),
('P18', 'Lokky Taiga Belt 3.4cm(black)', 'PL4', 'NSX A', '', 15, 1200000, 950000, 'Da'),
('P19', 'Lokky Taiga Belt 3.4cm', 'PL4', 'NSX A', '', 8, 1450000, 1000000, 'Da'),
('P2', 'Johny Pointed Brogue Chelsea', 'PL1', 'NSX A', '', 4, 2050000, 1500000, 'Da'),
('P20', 'Nokky Classique Belt 3.4cm', 'PL4', 'NSX A', '', 9, 1500000, 1000000, 'Da'),
('P21', 'Nokky Croco Belt 2.8cm Simple', 'PL4', 'NSX A', '', 4, 1350000, 1250000, 'Da'),
('P22', 'Anchy Blanc Bi-Fold Simple', 'PL4', 'NSX A', '', 7, 4500000, 3000000, 'Da'),
('P23', 'Anchy Grained Bi-Fold Button', 'PL4', 'NSX A', '', 19, 499000, 350000, 'Da'),
('P24', 'Anchy Grained Bi-Fold Simple', 'PL4', 'NSX A', '', 25, 399500, 280000, 'Da'),
('P25', 'Grained Name Card Holder', 'PL4', 'NSX A', '', 10, 1200000, 1000000, 'Da'),
('P26', 'Metal Bi-folds', 'PL4', 'NSX A', '', 23, 450000, 300000, 'Da'),
('P3', 'Johny Pointed Chelsea', 'PL1', 'NSX A', '', 16, 1050000, 700000, 'Da'),
('P4', 'Johny Pointed Patent Chelsea', 'PL1', 'NSX A', '', 17, 2900000, 1800000, 'Da bóng'),
('P5', 'Johny Weaving Chelsea', 'PL1', 'NSX A', '', 3, 3050000, 2000000, 'Da'),
('P6', 'Ronny Moca Smooth (brown)', 'PL2', 'NSX A', '', 2, 4650000, 4000000, 'Da'),
('P7', 'Ronny Moca Smooth (black)', 'PL2', 'NSX A', '', 14, 4050000, 4000000, 'Da'),
('P8', 'Ronny Moca Suede (blue)', 'PL2', 'NSX A', '', 19, 3050000, 2900000, 'Da lộn'),
('P9', 'Ronny Moca Suede (red)', 'PL2', 'NSX A', '', 15, 3800000, 2800000, 'Da lộn');

-- --------------------------------------------------------

--
-- Table structure for table `product_color`
--

CREATE TABLE `product_color` (
  `productColorID` varchar(50) NOT NULL,
  `productID` varchar(50) DEFAULT NULL,
  `productColor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_color`
--

INSERT INTO `product_color` (`productColorID`, `productID`, `productColor`) VALUES
('PC1', 'P1', 'Đen'),
('PC10', 'P5', 'Nâu'),
('PC11', 'P6', 'Nâu'),
('PC12', 'P7', 'Đen'),
('PC13', 'P8', 'Xanh dương'),
('PC14', 'P9', 'Đỏ'),
('PC15', 'P10', 'Xám'),
('PC16', 'P11', 'Nâu'),
('PC17', 'P12', 'Đen'),
('PC18', 'P13', 'Xanh dương'),
('PC19', 'P14', 'Nâu'),
('PC2', 'P1', 'Nâu'),
('PC20', 'P15', 'Xám'),
('PC21', 'P16', 'Đỏ'),
('PC22', 'P17', 'Đen'),
('PC23', 'P17', 'Navy'),
('PC24', 'P18', 'Đen'),
('PC25', 'P18', 'Navy'),
('PC26', 'P19', 'Đen'),
('PC27', 'P19', 'Navy'),
('PC28', 'P20', 'Đen'),
('PC29', 'P20', 'Navy'),
('PC3', 'P2', 'Đen'),
('PC30', 'P21', 'Đen'),
('PC31', 'P21', 'Navy'),
('PC32', 'P22', 'Nâu'),
('PC33', 'P22', 'Xanh dương'),
('PC34', 'P22', 'Xám'),
('PC35', 'P23', 'Xám'),
('PC36', 'P24', 'Xanh lá'),
('PC37', 'P24', 'Cam'),
('PC38', 'P24', 'Be'),
('PC39', 'P24', 'Tím'),
('PC4', 'P2', 'Nâu'),
('PC40', 'P25', 'Đen'),
('PC41', 'P25', 'Trắng'),
('PC42', 'P25', 'Đỏ'),
('PC43', 'P25', 'Hồng'),
('PC44', 'P26', 'Đen'),
('PC45', 'P26', 'Xanh lá'),
('PC46', 'P26', 'Xanh dương'),
('PC5', 'P3', 'Đen'),
('PC6', 'P3', 'Nâu'),
('PC7', 'P4', 'Đen'),
('PC8', 'P4', 'Nâu'),
('PC9', 'P5', 'Đen');

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `productImageID` varchar(50) NOT NULL,
  `productID` varchar(50) DEFAULT NULL,
  `productImageURL` varchar(255) DEFAULT NULL,
  `isMainImage` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_line`
--

CREATE TABLE `product_line` (
  `productLineID` varchar(50) NOT NULL,
  `productLineName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_line`
--

INSERT INTO `product_line` (`productLineID`, `productLineName`) VALUES
('PL1', 'boots'),
('PL2', 'Mosscasins'),
('PL3', 'Flip-flop'),
('PL4', 'Belt'),
('PL5', 'Wallet');

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE `product_size` (
  `productSizeID` varchar(50) NOT NULL,
  `productID` varchar(50) DEFAULT NULL,
  `productSize` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `FK_ORDERS_customerID` (`customerID`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`orderDetailID`),
  ADD KEY `FK_ORDER_DETAIL_orderID` (`orderID`),
  ADD KEY `FK_ORDERDETAIL_productID` (`productID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`customerID`,`checkNumber`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `FK_PRODUCT_productLineID` (`productLineID`);

--
-- Indexes for table `product_color`
--
ALTER TABLE `product_color`
  ADD PRIMARY KEY (`productColorID`),
  ADD KEY `FK_PRODUCT_COLOR_productID` (`productID`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`productImageID`),
  ADD KEY `FK_PRODUCT_IMAGE_productID` (`productID`);

--
-- Indexes for table `product_line`
--
ALTER TABLE `product_line`
  ADD PRIMARY KEY (`productLineID`);

--
-- Indexes for table `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`productSizeID`),
  ADD KEY `FK_PRODUCT_SIZE_productID` (`productID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_ORDERS_customerID` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `FK_ORDERDETAIL_productID` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`),
  ADD CONSTRAINT `FK_ORDER_DETAIL_orderID` FOREIGN KEY (`orderID`) REFERENCES `orders` (`orderID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `FK_PAYMENT_customerID` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_PRODUCT_productLineID` FOREIGN KEY (`productLineID`) REFERENCES `product_line` (`productLineID`);

--
-- Constraints for table `product_color`
--
ALTER TABLE `product_color`
  ADD CONSTRAINT `FK_PRODUCT_COLOR_productID` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`);

--
-- Constraints for table `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `FK_PRODUCT_IMAGE_productID` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`);

--
-- Constraints for table `product_size`
--
ALTER TABLE `product_size`
  ADD CONSTRAINT `FK_PRODUCT_SIZE_productID` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
