
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
