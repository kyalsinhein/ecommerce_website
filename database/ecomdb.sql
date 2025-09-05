-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Sep 05, 2025 at 06:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phoneno` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `address`, `phoneno`, `password`) VALUES
(0, 'admin1', 'admin123@gmail.com', 'Myanmar', '09776655839', '123');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(5) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phoneno` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `email`, `address`, `phoneno`, `password`) VALUES
(1, 'test_user', 'donovanroberts@gmail.com', 'Myanmar', '09776655839', '123');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(5) NOT NULL,
  `order_date` date DEFAULT NULL,
  `totalprice` int(11) DEFAULT NULL,
  `customer_id` int(5) DEFAULT NULL,
  `shipping_address` varchar(500) DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_date`, `totalprice`, `customer_id`, `shipping_address`, `status`) VALUES
(1, '2025-09-05', 236, 1, 'Myanmar', 'pending'),
(2, '2025-09-05', 118, 1, 'Myanmar', 'pending'),
(3, '2025-09-05', 118, 1, 'Myanmar', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` int(5) NOT NULL,
  `order_id` int(5) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `num_ordered` int(10) DEFAULT NULL,
  `quoted_price` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `product_id`, `num_ordered`, `quoted_price`) VALUES
(1, 1, 32, 2, 236),
(2, 2, 32, 1, 118),
(3, 3, 32, 1, 118);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(5) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` int(5) DEFAULT NULL,
  `quantity` int(5) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `brand` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `quantity`, `image`, `category`, `brand`) VALUES
(32, 'Adidas Backpack', 'Stay organized and stylish with the spacious adidas backpack. It features a roomy main compartment, multiple pockets, and showcases the iconic Trefoil logo. Made with eco-friendly Primegreen materials.', 118, 36, 'item9.jpg', 'backpack', 'Adidas'),
(63, 'Nike Heritage', 'Get the Nike Heritage Gym Sack—lightweight and practical. Ideal for storing and carrying gear for training, playing, and seizing the day. Contains 65% recycled polyester.', 20, 32, 'item10.jpg', 'backpack', 'Nike '),
(64, 'Gucci Backpack', 'The medium-sized backpack features a hiking pack inspired shape, GG Supreme canvas, and technical mesh details. Classic GG motif and Web stripe. Finished with Double G hardware.', 2500, 12, 'item11.jpg', 'backpack', 'Gucci'),
(65, 'LV Backpack', 'The Discovery Backpack, crafted from calf leather with an embossed Monogram pattern, offers style, comfort, and functionality. Multiple pockets ensure organization. Black hardware enhances the understated design.', 3500, 12, 'item12.jpg', 'backpack', 'Louis Vuitton'),
(66, 'Supreme Backpack ', 'The Discovery Backpack, crafted from calf leather with an embossed Monogram pattern, offers style, comfort, and functionality. Multiple pockets ensure organization. Black hardware enhances the understated design.', 309, 36, 'item13.jpg', 'backpack', 'Supreme'),
(67, 'OFF-WHITE Backpack', 'The material of this OFF-WHITE backpack is made with Polyester.', 620, 36, 'item14.jpg', 'backpack', 'OFF-WHITE'),
(68, 'MCM x BAPE Backpack', 'The MCM x BAPE Backpack Visetos Medium Cognac is a collaboration bag measuring 13cm x 30cm x 38cm, priced at $1,075.', 1301, 15, 'item15.jpg', 'backpack', 'MCM x BAPE collab'),
(69, 'Explorer Backpack', 'Please Note: This item comes with a dust bag, the box is not required.', 604, 12, 'item16.jpg', 'backpack', 'Balenciaga'),
(75, 'ASSC Tokyo 1997', 'The ASSC 1997 backpack is a stylish and functional accessory, featuring a sleek design and ample storage capacity for your everyday essentials.', 129, 36, 'item20.jpg', 'backpack', 'Anti Social Social Club'),
(76, 'Carhartt Wip Backpack', 'The Kickflip Backpack is made of recycled polyester-blend canvas, water-repellent. It has mesh and zipped side pockets, padded shoulder straps, back, buckles, elastic board straps for added functionality.', 90, 36, 'item21.jpg', 'backpack', 'Carhartt'),
(77, 'Nuxx Backpack', 'BACKPACK FEATURING A ZIPPERED EXTERIOR POCKET WITH SAINT LAURENT PARIS PRINTED LABEL, FEATURING A PADDED LAPTOP POCKET AND COMPLETE WITH ADJUSTABLE PADDED STRAPS.', 875, 36, 'item22.jpg', 'backpack', 'Saint Laurent'),
(78, 'Burberry Backpack', 'This Burberry nylon backpack features the luxury brand’s classic vintage check nylon pattern, two exterior zip pockets, and jacquard-woven Burberry lettering at the shoulder straps.', 600, 36, 'item23.jpg', 'backpack', 'Burberry'),
(79, 'Yeezy Season 5 Nylon Backpack', 'Introducing the Yeezy Season 5 Nylon Backpack in the elegant Truffle color. This brand new backpack comes with tags, showcasing its authenticity. Its style, known as KW5A1000 Truffle, exudes a sophisticated and modern vibe.', 283, 36, 'item24.jpg', 'backpack', 'Yeezy'),
(80, 'Supreme The North Face', 'Limited edition metallic silver Supreme x The North Face Borealis Backpack is eye-catching, durable, and functional with spacious compartments and laptop sleeve.', 334, 32, 'item25.jpg', 'backpack', 'SupremexThe North Face'),
(81, 'Big Student', 'Recycled materials. Padded laptop compartment. Water bottle pocket. Two main compartments. Ergonomic shoulder straps. Front utility pocket. Pleated and zippered stash pockets. Padded back panel. Web haul handle.', 81, 32, 'item26.jpg', 'backpack', 'JANSPORT'),
(82, 'Coach x BAPE Backpack', 'Coach x BAPE Backpack Navy, Style Number C4515.', 531, 20, 'item27.jpg', 'backpack', 'Coach x BAPE'),
(83, 'OFF-WHITE Slogan-Print Backpack', 'Please Note: Dust bag and box are not required or included for this product.', 400, 32, 'item28.jpg', 'backpack', 'OFF-WHITE'),
(84, 'Louis Vuitton x NBA Christopher MM Backpack', 'Please Note: This item comes with a dust bag, the box is not required.', 10042, 12, 'item29.jpg', 'backpack', 'Louis Vuitton x NBA Christopher'),
(86, 'Louis Vuitton x Supreme Christopher Backpack', 'Red Louis Vuitton x Supreme Christopher backpack: stylish, structured, durable Epi leather, adjustable straps, multiple pockets, iconic collaboration merging LV and Supreme.', 7982, 12, 'item31.jpg', 'backpack', 'Louis Vuitton x Supreme'),
(88, 'Amber 01(OG)', 'Explore 2023 Collection of Gentle Monster with the Musee 01(BL) sunglasses. The black frame, square silhouette, and light blue lenses with temple metal detail exude sophistication.', 289, 32, 'item17.jpg', 'sunglasses', 'Gentle Monster'),
(89, 'Musee 01(BL)', 'Gentle Monster Musee 01(BL) sunglasses: 2023 Collection. Black frame, square silhouette, light blue lenses, temple metal detail. Sophisticated and stylish. Discover it now.', 300, 32, 'item32.jpg', 'sunglasses', 'Gentle Monster'),
(90, 'AVIATOR CRAFT', 'Ray Ban Outdoorsman Craft sunglasses: Aviator-inspired with deer leather and handcrafted details. Unique features include leather brow bar, temple pads. Polarized lenses available, prescription-friendly. Ideal for outdoor enthusiasts.', 163, 32, 'item33.jpg', 'sunglasses', 'Ray Ban'),
(91, 'ROUND METAL', 'Ray-Ban Round Metal sunglasses: retro style worn by legends. Round crystal lenses, adjustable nose pads, thin metal temples. Legendary with Legend Gold lens logo.', 158, 32, 'item34.jpg', 'sunglasses', 'Ray Ban'),
(92, 'Persol PO9649S Aviator Sunglasses', 'Slimmer profile, same iconic pilot shape as 649. Embracing its cult classic status, this reinterpretation suits men and women with a lighter, thinner execution. Perfect for Persol lovers.', 129, 32, 'item35.jpg', 'sunglasses', 'Persol'),
(93, 'PO3272S', 'Thin and powerful shapes, subtle details and distinctive colors frame the defined personality of new full acetate frames with a linear and minimalist style.', 367, 36, 'item36.jpg', 'sunglasses', 'Persol');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
