
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
  `updatedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productId`, `sku`, `name`, `price`, `discount`, `quantity`, `description`, `status`, `createdDate`, `updatedDate`) VALUES
(36, 'K5203SS', 'Laptop', 60000, 20, 1, 'HP', 'enable', '2021-02-18 14:33:00', '2021-03-16 13:49:44'),
(38, 'K5203Y2', 'Camera', 500, 10, 2, 'For Photography', 'enable', '2021-02-18 21:15:00', '2021-02-19 19:33:00'),
(39, 'K5203SE', 'Phone', 50000, 10, 3, 'Samsung', 'enable', '2021-02-18 21:21:00', '2021-02-19 19:35:00'),
(40, 'K5203Y2', 'Pen', 100, 0, 10, 'Latest Model', 'enable', '2021-02-18 23:03:00', '2021-02-19 19:36:00'),
(47, 'DS2531G', 'Shoes', 500, 0, 2, 'Bata', 'enable', '2021-02-22 05:35:51', '2021-02-22 05:35:51'),
(48, 'KS2531H', 'Bag', 500, 0, 3, 'Sky', 'enable', '2021-02-22 13:48:51', '2021-03-15 06:27:34'),
(49, 'KS2531G', 'Watch', 500, 0, 2, 'Fastack', 'enable', '2021-02-23 07:10:46', '2021-02-23 07:10:46'),
(70, 'KS2531G', 'Dress', 1000, 10, 1, 'Westen', 'enable', '2021-03-09 09:08:23', '2021-03-09 09:08:23'),
(74, 'KS25325', 'T-shirt', 1000, 10, 2, 'S-size', 'enable', '2021-03-15 06:26:41', '2021-03-15 06:27:22');
