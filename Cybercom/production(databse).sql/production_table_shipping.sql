
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
