
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
(4, 'Riya', 'Pathar', 'riya@123gmail.com', '9826547890', 'riya123', 'enable', '2021-03-09 06:5', '2021-03-09 06:5', 4);
