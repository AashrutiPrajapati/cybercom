
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
