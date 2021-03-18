
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
