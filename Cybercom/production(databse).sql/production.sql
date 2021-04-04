-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 04, 2021 at 08:08 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `production`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `name`, `password`, `status`, `createdDate`, `updatedDate`) VALUES
(3, 'Design Department', 'design12', 'enable', '2021-03-06 14:13:15', '2021-03-06 14:13:15'),
(8, 'zsxc ', 'kjhgfcvbn', 'enable', '2021-03-31 15:36:05', '2021-04-02 06:18:03');

-- --------------------------------------------------------

--
-- Table structure for table `attribute`
--

CREATE TABLE `attribute` (
  `attributeId` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `entityTypeId` enum('product','category') NOT NULL,
  `code` varchar(20) NOT NULL,
  `inputType` varchar(20) NOT NULL,
  `backendType` varchar(20) NOT NULL,
  `sortOrder` int(4) NOT NULL,
  `backendModel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attribute`
--

INSERT INTO `attribute` (`attributeId`, `name`, `entityTypeId`, `code`, `inputType`, `backendType`, `sortOrder`, `backendModel`) VALUES
(2, 'Color', 'product', 'Color', 'select', 'varchar', 1, ''),
(3, 'Brand', 'product', 'brand', 'select', 'varchar', 2, ''),
(4, 'Product Type', 'product', 'product type', 'text', 'varchar', 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `attribute_option`
--

CREATE TABLE `attribute_option` (
  `optionId` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `attributeId` int(11) NOT NULL,
  `sortOrder` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attribute_option`
--

INSERT INTO `attribute_option` (`optionId`, `name`, `attributeId`, `sortOrder`) VALUES
(1, 'red', 2, 1),
(2, 'white', 2, 2),
(5, 'brown', 2, 3),
(8, 'Brand1', 4, 1),
(9, 'Brand2', 4, 2),
(10, 'Samsung', 3, 1),
(11, 'Nokia', 3, 2),
(14, 'Black', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brandId` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL,
  `sortOrder` int(4) NOT NULL,
  `createdDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brandId`, `name`, `image`, `status`, `sortOrder`, `createdDate`) VALUES
(4, 'nbv', '', 'enable', 0, '2021-03-24 07:15:14');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartId` int(11) NOT NULL,
  `sessionId` varchar(50) NOT NULL,
  `customerId` int(11) NOT NULL,
  `total` int(20) NOT NULL,
  `discount` int(11) NOT NULL,
  `paymentId` int(11) NOT NULL,
  `shippingId` int(11) NOT NULL,
  `shippingAmount` int(10) NOT NULL,
  `createdDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartId`, `sessionId`, `customerId`, `total`, `discount`, `paymentId`, `shippingId`, `shippingAmount`, `createdDate`) VALUES
(2, 'sdp54o13es3ftjr6s3uj3i7n69', 0, 0, 0, 0, 0, 0, '2021-03-25 21:53:44'),
(3, '', 2, 0, 0, 0, 0, 0, '2021-04-01 10:28:20'),
(4, '', 1, 0, 0, 0, 0, 0, '2021-04-01 10:45:49'),
(5, '', 3, 0, 0, 0, 0, 0, '2021-04-01 11:38:13'),
(6, '', 4, 0, 0, 0, 0, 0, '2021-04-01 13:10:39'),
(7, '', 12, 0, 0, 0, 0, 0, '2021-04-04 11:44:17'),
(8, '', 13, 0, 0, 0, 0, 0, '2021-04-04 11:48:22');

-- --------------------------------------------------------

--
-- Table structure for table `cart_address`
--

CREATE TABLE `cart_address` (
  `cartAddressId` int(11) NOT NULL,
  `cartId` int(11) NOT NULL,
  `addressId` int(11) DEFAULT NULL,
  `addressType` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(10) NOT NULL,
  `state` varchar(10) NOT NULL,
  `country` varchar(10) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `sameAsBilling` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_address`
--

INSERT INTO `cart_address` (`cartAddressId`, `cartId`, `addressId`, `addressType`, `address`, `city`, `state`, `country`, `zipcode`, `sameAsBilling`) VALUES
(1, 6, NULL, 'billing', 'Manek Chok', 'Delhi', 'Gujarat', 'India', '388001', 0),
(2, 6, NULL, 'shipping', 'Manek Chok', 'Delhi', 'Gujarat', 'India', '388001', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart_item`
--

CREATE TABLE `cart_item` (
  `cartItemId` int(11) NOT NULL,
  `cartId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `quantity` int(10) NOT NULL,
  `basePrice` decimal(10,0) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `discount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_item`
--

INSERT INTO `cart_item` (`cartItemId`, `cartId`, `productId`, `quantity`, `basePrice`, `price`, `discount`) VALUES
(12, 4, 38, 1, '0', '500', 10),
(20, 3, 38, 1, '0', '500', 10),
(22, 5, 36, 4, '0', '60000', 20),
(24, 2, 39, 1, '0', '50000', 10),
(25, 6, 39, 1, '0', '50000', 10),
(26, 6, 36, 1, '0', '60000', 20),
(29, 4, 36, 1, '0', '60000', 20),
(30, 5, 48, 1, '0', '500', 0),
(32, 0, 36, 1, '0', '60000', 20),
(34, 8, 49, 1, '0', '500', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryId` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `parentId` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `pathId` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryId`, `name`, `parentId`, `status`, `description`, `pathId`) VALUES
(1, 'Badroom', 0, 'enable', '', '1'),
(8, 'Tables', 1, 'enable', '', '1=8'),
(9, 'Lamp', 8, 'enable', '', '1=8=9'),
(12, 'Small Bed ', 1, 'enable', '', '1=12'),
(13, 'Bed sheet', 12, 'enable', '', '1=12=13'),
(19, 'Clothes', 1, 'enable', 'Children Ware', '1=19'),
(43, 'Living room', 0, 'enable', '', '43'),
(44, 'Table', 43, 'enable', '', '43=44'),
(45, 'Pots', 44, 'enable', '', '43=44=45'),
(46, 'Sofa', 43, 'enable', '', '43=46'),
(47, 'Kichen', 0, 'enable', 'Healthy Food available', '47');

-- --------------------------------------------------------

--
-- Table structure for table `cms_page`
--

CREATE TABLE `cms_page` (
  `pageId` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `identifier` varchar(30) NOT NULL,
  `content` longtext NOT NULL,
  `status` varchar(10) NOT NULL,
  `createdDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cms_page`
--

INSERT INTO `cms_page` (`pageId`, `title`, `identifier`, `content`, `status`, `createdDate`) VALUES
(3, 'Html', 'Html5', '<p><span style=\"font-size:16px\"><span style=\"color:#e74c3c\"><strong>Header 1</strong></span></span></p>\r\n', 'enable', '2021-03-15 07:41:43'),
(4, 'Paragraph', 'p1', '<p><span style=\"color:#2980b9\"><u><em><strong>Aplication</strong></em></u></span></p>\r\n', 'enable', '2021-03-15 08:14:34');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerId` int(15) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `status` varchar(30) NOT NULL,
  `createdDate` varchar(15) NOT NULL,
  `updatedDate` varchar(15) NOT NULL,
  `groupId` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerId`, `firstName`, `lastName`, `email`, `mobile`, `password`, `status`, `createdDate`, `updatedDate`, `groupId`) VALUES
(1, 'Mirza', 'Fatema', 'mirza@gmail.com', '9874563210', 'mirza', 'enable', '2021-03-08 06:4', '2021-03-08 06:4', 1),
(2, 'Mily ', 'Jeckson', 'mily123@gmail.com', '2136547890', 'mily', 'enable', '2021-03-08 06:5', '2021-03-08 06:5', 1),
(3, 'Mike', 'Wotson', 'mike@gmail.com', '136547890', 'mike', 'enable', '2021-03-09 06:4', '2021-03-09 06:4', 1),
(4, 'Riya', 'Pathar', 'riya@123gmail.com', '9826547890', 'riya123', 'enable', '2021-03-09 06:5', '2021-03-09 06:5', 4),
(13, 'Nisha', 'Shah', 'nishi@12gmail.com', '9784563210', '', 'enable', '2021-04-04 08:1', '2021-04-04 08:1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_address`
--

CREATE TABLE `customer_address` (
  `addressId` int(20) NOT NULL,
  `customerId` int(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zipcode` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `addressType` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_address`
--

INSERT INTO `customer_address` (`addressId`, `customerId`, `address`, `city`, `state`, `zipcode`, `country`, `addressType`) VALUES
(1, 1, 'Sadan', 'Surat', 'Gujarat', '388001', 'India', 'Billing'),
(2, 1, 'Sadan', 'Surat', 'Gujarat', '388001', 'India', 'Shipping'),
(3, 2, 'abc', 'Anand', 'Gujarat', '388001', 'India', 'Billing'),
(4, 2, 'Niraniga', 'Surat', 'Gujarat', '388001', 'India', 'Shipping'),
(5, 3, 'Sadan', 'Surat', 'Gujarat', '388001', 'India', 'Billing'),
(6, 3, 'Manek Chok', 'Surat', 'Gujarat', '388001', 'India', 'Shipping'),
(7, 4, 'Manek Chok', 'Delhi', 'Gujarat', '388001', 'India', 'Billing'),
(8, 4, 'Mirapuri Nagari', 'Surat', 'Gujarat', '388001', 'India', 'Shipping'),
(9, 5, 'Sadan', 'Surat', 'Gujarat', '388001', 'India', 'Billing'),
(10, 5, 'Manek Chok', 'Delhi', 'Gujarat', '388001', 'India', 'Shipping'),
(11, 6, '', '', '', '', '', 'Billing'),
(12, 6, '', '', '', '', '', 'Shipping'),
(13, 7, 'abc', 'Anand', 'Gujarat', '388001', 'India', 'Billing'),
(14, 7, 'XYZ', 'Anand', 'Gujarat', '388001', 'India', 'Shipping'),
(15, 8, 'abc', 'Anand', 'Gujarat', '388001', 'India', 'Billing'),
(16, 8, '', '', '', '', '', 'Shipping'),
(17, 0, '', '', '', '', '', 'Billing'),
(18, 11, 'szxdcfgh', '', '', '', '', 'Billing'),
(19, 13, '', '', '', '', '', ''),
(20, 13, '', '', '', '', '', ''),
(21, 13, 'XYZ', 'Anand', 'Gujarat', '388001', 'India', 'billing'),
(22, 13, 'XYZ', 'Anand', 'Gujarat', '388001', 'India', 'billing'),
(23, 13, 'XYZ', 'Anand', 'Gujarat', '388001', 'India', 'billing'),
(24, 4, 'Manek Chok', 'Delhi', 'Gujarat', '388001', 'India', 'billing'),
(25, 4, 'Manek Chok', 'Delhi', 'Gujarat', '388001', 'India', 'billing'),
(26, 4, 'Mirapuri Nagari', 'Surat', 'Gujarat', '388001', 'India', 'shipping'),
(27, 4, 'Mirapuri Nagari', 'Surat', 'Gujarat', '388001', 'India', 'shipping'),
(28, 4, 'Manek Chok', 'Delhi', 'Gujarat', '388001', 'India', 'billing');

-- --------------------------------------------------------

--
-- Table structure for table `customer_group`
--

CREATE TABLE `customer_group` (
  `groupId` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL,
  `createdDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_group`
--

INSERT INTO `customer_group` (`groupId`, `name`, `status`, `createdDate`) VALUES
(1, 'Retail', 'enable', '2021-03-02 10:17:40'),
(4, 'Wholesale', 'enable', '2021-03-09 06:48:30'),
(5, 'Group3', 'enable', '2021-03-11 06:14:05'),
(6, 'Group4', 'enable', '2021-03-11 06:14:14'),
(12, 'Group5', 'enable', '2021-03-16 15:18:58');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentId` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `code` varchar(20) NOT NULL,
  `description` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentId`, `name`, `code`, `description`, `status`, `createdDate`) VALUES
(9, 'Phone', '1235454', 'Samsung', 'enable', '2021-03-16 06:37:48');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productId` int(15) NOT NULL,
  `sku` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` double NOT NULL,
  `discount` float NOT NULL,
  `quantity` int(30) NOT NULL,
  `description` varchar(40) NOT NULL,
  `status` varchar(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedDate` datetime NOT NULL,
  `Backend Type` varchar(20) DEFAULT NULL,
  `Color` varchar(20) DEFAULT NULL,
  `product type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productId`, `sku`, `name`, `price`, `discount`, `quantity`, `description`, `status`, `createdDate`, `updatedDate`, `Backend Type`, `Color`, `product type`) VALUES
(36, 'K5203SS', 'Laptop', 60000, 20, 1, 'HP', 'enable', '2021-02-18 14:33:00', '2021-03-16 13:49:44', NULL, NULL, NULL),
(38, 'K5203Y2', 'Camera', 500, 10, 2, 'For Photography', 'enable', '2021-02-18 21:15:00', '2021-02-19 19:33:00', NULL, NULL, NULL),
(39, 'K5203SE', 'Phone', 50000, 10, 3, 'Samsung', 'enable', '2021-02-18 21:21:00', '2021-02-19 19:35:00', NULL, NULL, NULL),
(40, 'K5203Y2', 'Pen', 100, 0, 10, 'Latest Model', 'enable', '2021-02-18 23:03:00', '2021-02-19 19:36:00', NULL, NULL, NULL),
(47, 'DS2531G', 'Shoes', 500, 0, 2, 'Bata', 'enable', '2021-02-22 05:35:51', '2021-02-22 05:35:51', NULL, NULL, NULL),
(48, 'KS2531H', 'Bag', 500, 0, 3, 'Sky', 'enable', '2021-02-22 13:48:51', '2021-03-15 06:27:34', NULL, NULL, NULL),
(49, 'KS2531G', 'Watch', 500, 0, 2, 'Fastack', 'enable', '2021-02-23 07:10:46', '2021-02-23 07:10:46', NULL, NULL, NULL),
(84, '', '', 0, 0, 0, '', 'enable', '2021-04-01 13:05:58', '2021-04-01 13:05:58', NULL, NULL, NULL),
(85, 'KS2531OG', '', 0, 0, 0, '', 'enable', '0000-00-00 00:00:00', '2021-04-01 13:06:21', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_group_price`
--

CREATE TABLE `product_group_price` (
  `entityId` int(15) NOT NULL,
  `productId` int(15) NOT NULL,
  `customerGroupId` int(15) NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_group_price`
--

INSERT INTO `product_group_price` (`entityId`, `productId`, `customerGroupId`, `price`) VALUES
(1, 36, 1, '80000'),
(2, 36, 4, '50000'),
(3, 36, 5, '40000'),
(4, 36, 6, '60000'),
(5, 39, 1, '70000'),
(6, 39, 4, '20000'),
(7, 39, 5, '50000'),
(8, 39, 6, '0'),
(9, 76, 1, '100'),
(10, 76, 4, '0'),
(11, 76, 5, '0'),
(12, 76, 6, '0'),
(13, 36, 12, '0'),
(14, 38, 1, '10000'),
(15, 38, 4, '700'),
(16, 38, 5, '5000'),
(17, 38, 6, '0'),
(18, 38, 12, '0');

-- --------------------------------------------------------

--
-- Table structure for table `product_media`
--

CREATE TABLE `product_media` (
  `mediaId` int(15) NOT NULL,
  `image` varchar(200) NOT NULL,
  `label` varchar(50) NOT NULL,
  `small` tinyint(4) NOT NULL DEFAULT 0,
  `thumb` tinyint(4) NOT NULL DEFAULT 0,
  `base` tinyint(4) NOT NULL DEFAULT 0,
  `gallery` tinyint(4) NOT NULL DEFAULT 0,
  `productId` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_media`
--

INSERT INTO `product_media` (`mediaId`, `image`, `label`, `small`, `thumb`, `base`, `gallery`, `productId`) VALUES
(1, 'Skin/image/laptop.jpg', 'laptop.jpg', 1, 0, 0, 0, 36),
(2, 'Skin/image/Laptop(hp).jpg', 'Laptop(hp).jpg', 0, 1, 0, 0, 36),
(3, 'Skin/image/Camera.jpg', 'Camera.jpg', 0, 0, 0, 1, 38),
(4, 'Skin/image/Camera(Nikon).jpg', 'Camera(Nikon).jpg', 0, 1, 0, 0, 38),
(5, 'Skin/image/ph1.png', 'ph1.png', 0, 0, 0, 0, 39);

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `shippingId` int(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `code` varchar(30) NOT NULL,
  `amount` int(20) NOT NULL,
  `description` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`shippingId`, `name`, `code`, `amount`, `description`, `status`, `createdDate`, `updatedDate`) VALUES
(9, 'Phone', '125479fg', 50000, 'Samsung', 'enable', '2021-03-16 06:28:22', '2021-03-16 06:28:41'),
(10, 'Watch', '12456wfc32', 7000, 'Titan', 'enable', '2021-03-16 06:30:55', '2021-03-16 06:30:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `attribute`
--
ALTER TABLE `attribute`
  ADD PRIMARY KEY (`attributeId`);

--
-- Indexes for table `attribute_option`
--
ALTER TABLE `attribute_option`
  ADD PRIMARY KEY (`optionId`),
  ADD KEY `attributeId` (`attributeId`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brandId`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartId`);

--
-- Indexes for table `cart_address`
--
ALTER TABLE `cart_address`
  ADD PRIMARY KEY (`cartAddressId`),
  ADD KEY `addressId` (`addressId`);

--
-- Indexes for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`cartItemId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`),
  ADD KEY `parentId` (`parentId`);

--
-- Indexes for table `cms_page`
--
ALTER TABLE `cms_page`
  ADD PRIMARY KEY (`pageId`),
  ADD UNIQUE KEY `identifier` (`identifier`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerId`),
  ADD KEY `groupId` (`groupId`);

--
-- Indexes for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD PRIMARY KEY (`addressId`);

--
-- Indexes for table `customer_group`
--
ALTER TABLE `customer_group`
  ADD PRIMARY KEY (`groupId`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `product_group_price`
--
ALTER TABLE `product_group_price`
  ADD PRIMARY KEY (`entityId`);

--
-- Indexes for table `product_media`
--
ALTER TABLE `product_media`
  ADD PRIMARY KEY (`mediaId`),
  ADD KEY `productId` (`productId`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shippingId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `attribute`
--
ALTER TABLE `attribute`
  MODIFY `attributeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `attribute_option`
--
ALTER TABLE `attribute_option`
  MODIFY `optionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cart_address`
--
ALTER TABLE `cart_address`
  MODIFY `cartAddressId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `cartItemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `cms_page`
--
ALTER TABLE `cms_page`
  MODIFY `pageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customer_address`
--
ALTER TABLE `customer_address`
  MODIFY `addressId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `customer_group`
--
ALTER TABLE `customer_group`
  MODIFY `groupId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentId` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `product_group_price`
--
ALTER TABLE `product_group_price`
  MODIFY `entityId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product_media`
--
ALTER TABLE `product_media`
  MODIFY `mediaId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shippingId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attribute_option`
--
ALTER TABLE `attribute_option`
  ADD CONSTRAINT `attribute_option_ibfk_1` FOREIGN KEY (`attributeId`) REFERENCES `attribute` (`attributeId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart_address`
--
ALTER TABLE `cart_address`
  ADD CONSTRAINT `cart_address_ibfk_1` FOREIGN KEY (`addressId`) REFERENCES `customer_address` (`addressId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`groupId`) REFERENCES `customer_group` (`groupId`);

--
-- Constraints for table `product_media`
--
ALTER TABLE `product_media`
  ADD CONSTRAINT `product_media_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `product` (`productId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
