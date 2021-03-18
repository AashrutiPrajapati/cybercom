
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
(46, 'Sofa', 43, 'enable', '', '43=46');
