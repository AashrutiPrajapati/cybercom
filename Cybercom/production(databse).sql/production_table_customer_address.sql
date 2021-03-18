
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
(14, 7, 'XYZ', 'Anand', 'Gujarat', '388001', 'India', 'Shipping');
