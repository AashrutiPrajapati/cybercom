
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
(9, 'Phone', '1235454', 'Samsung', 'enable', '2021-03-16 06:37:48'),
(10, 'Watch', '123548fghgf', 'Titan', 'enable', '2021-03-16 06:38:07');
