
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
(2, 'Skin/image/ph1.png', 'ph1.png', 0, 0, 1, 1, 39),
(3, 'Skin/image/phone.jpg', 'phone.jpg', 0, 1, 0, 0, 39),
(5, 'Skin/image/Camera.jpg', 'Camera.jpg', 0, 0, 0, 0, 38),
(6, 'Skin/image/Camera(Nikon).jpg', 'Camera(Nikon).jpg', 0, 0, 0, 0, 38),
(7, 'Skin/image/laptop.jpg', 'laptop.jpg', 0, 0, 0, 0, 36);
