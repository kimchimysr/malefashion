-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2022 at 04:31 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_malefashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblpro_details`
--

CREATE TABLE `tblpro_details` (
  `pro_detail_id` int(20) NOT NULL,
  `pro_id` int(20) NOT NULL,
  `cate` varchar(20) NOT NULL,
  `colour` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price_in` varchar(20) NOT NULL,
  `qty` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblpro_details`
--

INSERT INTO `tblpro_details` (`pro_detail_id`, `pro_id`, `cate`, `colour`, `country`, `description`, `price_in`, `qty`) VALUES
(13, 28, 'Shoes', 'Black', 'USA', 'For Hogan, every practice session had a purpose. He reportedly spent years breaking down each phase of the golf swing and testing new methods for each segment. The result was near perfection. He devel', '8', 20),
(14, 29, 'Clothing', 'Brown', 'SG', 'His precision made him more like a surgeon than a golfer. During the 1953 Masters, for example, Hogan hit the flagstick on back-to-back holes. A few days later, he broke the tournament scoring record.', '12', 30),
(15, 30, 'Bags', 'Brown', 'USA', 'Hogan methodically broke the game of golf down into chunks and figured out how he could master each section. For example, he was one of the first golfers to assign specific yardages to each golf club.', '10', 15),
(16, 31, 'Shoes', 'Black', 'USA', 'For example, when you first learned to tie your shoes you had to think carefully about each step of the process. Today, after many repetitions, your brain can perform this sequence automatically. The ', '10', 20),
(17, 32, 'Bags', 'White', 'USA', 'He began by finding a publication written by some of the best authors of his day. Then, Franklin went through each article line by line and wrote down the meaning of every sentence.', '7', 10),
(18, 33, 'Clothing', 'Green', 'Japan', 'Deliberate practice always follows the same pattern: break the overall process down into parts, identify your weaknesses, test new strategies for each section, and then integrate your learning into th', '14', 20),
(19, 34, 'Clothing', 'Black', 'USA', 'Interestingly, Carlsen learned the game by playing computer chess, which allowed him to play multiple games at once. Not only did this strategy allow him to learn chunks much faster than someone playi', '7', 40),
(20, 35, 'Accessories', 'Grey', 'CHINA', 'Perhaps the greatest difference between deliberate practice and simple repetition is this: feedback. Anyone who has mastered the art of deliberate practice—whether they are an athlete like Ben Hogan o', '6', 50),
(21, 37, 'Clothing', 'Black', 'USA', 'GREAT sweater! Perfect for fall weather, fabric is soft, fits true to size, hasn’t shrunk, and is very comfy! Good buy for sure.', '13', 20);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `pro_id` int(20) NOT NULL,
  `pro_code` varchar(20) NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`pro_id`, `pro_code`, `pro_name`, `img`, `size`, `price`) VALUES
(28, 'SKU1001', 'Linodes Patent Easy Strap Tap Shoe', 'product-3.jpg', 'L', '18.00'),
(29, 'SKU1101', 'Piqué Biker Jacket', 'product-2.jpg', 'L', '22.00'),
(30, 'SKU1401', 'Multi-pocket Chest Bag', 'product-7.jpg', 'M', '25.00'),
(31, 'SKU1002', 'Native Shoes', 'product-1.jpg', 'L', '27.00'),
(32, 'SKU1402', 'Diagonal Textured Cap', 'product-11.jpg', 'M', '19.00'),
(33, 'SKU1003', 'T-shirt Contrast Pocket', 'product-12.jpg', 'XL', '25.00'),
(34, 'SKU1005', 'T-shirt Contrast Pocket', 'product-9.jpg', 'M', '15.00'),
(35, 'SKU1501', 'Basic Flowing Scarf', 'product-6.jpg', 'L', '9.00'),
(37, 'SKU1205', 'Vineyard Vine Men', 'product-8.jpg', 'L', '20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblpro_details`
--
ALTER TABLE `tblpro_details`
  ADD PRIMARY KEY (`pro_detail_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblpro_details`
--
ALTER TABLE `tblpro_details`
  MODIFY `pro_detail_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `pro_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
