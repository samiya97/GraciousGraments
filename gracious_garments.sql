-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2017 at 07:14 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gracious garments`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'junaid', 'junaidnasir07@gmail.com', 'great features'),
(2, 'junaid', 'junaidnasir@gmail.com', 'awesome!! :)'),
(3, 'samiya', 'samiyatirmazi@gmail.com', 'helloooooooooo');

-- --------------------------------------------------------

--
-- Table structure for table `men_collection`
--

CREATE TABLE `men_collection` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `color` text NOT NULL,
  `fabric` text NOT NULL,
  `design` text NOT NULL,
  `spec_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `men_collection`
--

INSERT INTO `men_collection` (`id`, `image`, `color`, `fabric`, `design`, `spec_id`) VALUES
(1, '1.jpg', 'white base and gray lines.', 'High quality fabric of our brand. we will assure you about the quality of fabric.', 'Most demanding coat , best for wedding wear.', 'm1'),
(2, '2.jpg', 'Grey and black', 'High quality fabric of our brand. we will assure you about the quality of fabric', 'The whole coat pent suit with the grey base and have black lines on upper side r have carlour buttons too.', 'm2'),
(3, '3.jpg', 'Black and Grey', 'High quality fabric of our brand. we will assure you about the quality of fabric', 'The black T-shirt and grey zip upper  with the black and grey Jeans.', 'm3'),
(4, '4.jpg', 'White , Black , Matellic grey and Light grey ', 'High quality fabric of our brand. we will assure you about the quality of fabric', 'White T-Shirt and a zip-upper with the lining carlour and sleeves. and have 2 pockests or sleeves in contras.', 'm4'),
(5, '5.jpg', 'off-white, Pink and Golden ', 'High quality fabric of our brand. we will assure you about the quality of fabric', 'The complete shadi wear , Off-white kurta shalwar with the pink west coat have Golden work on it.', 'm5'),
(6, '6.jpg', 'white , Black , Grey and blue', 'High quality fabric of our brand. we will assure you about the quality of fabric', 'The White Formal shirt with the Black sweater or have a Grey Coat on it that makes it too cool with the blue jeans.', 'm6'),
(7, '7.jpg', 'White , Grey and Black', 'High quality fabric of our brand. we will assure you about the quality of fabric', 'White T-shirt with the Grey coat and a leather jacket, and the black jeans. A complete winter collection.', 'm7'),
(8, '8.jpg', 'Blue, Black , White and Brown', 'High quality fabric of our brand. we will assure you about the quality of fabric.', 'The Coat pent suit. White formal shirt with the Brown tie and a Blue coat pent have Black check boxes on them.', 'm8'),
(9, '9.jpg', 'Silver-Grey to Black , and Black', 'High quality fabric of our brand. we will assure you about the quality of fabric', 'Silver-grey kurta Shalwar with the Black lines and Buttons from top to Bottom.', 'm9'),
(10, '10.jpg', 'Sky Blue', 'High quality fabric of our brand. we will assure you about the quality of fabric', 'Beautiful cotton Kurta Shalwar with the white buttons.', 'm10');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `imageid` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`id`, `email`, `imageid`) VALUES
(153, 'maheenkhalid@yahoo.com', '2'),
(154, 'maheenkhalid@yahoo.com', '6'),
(155, 'maheenkhalid@yahoo.com', '7'),
(187, 'junaidnasir07@gmail.com', '1'),
(188, 'junaidnasir07@gmail.com', 'w1'),
(189, 'junaidnasir07@gmail.com', 'w1'),
(190, 'naina@gmail.com', '1'),
(191, 'naina@gmail.com', 'w5'),
(192, 'naina@gmail.com', 'w5'),
(193, 'naina@gmail.com', 'w4'),
(194, 'naina@gmail.com', '6'),
(195, 'junaidnasir07@gmail.com', '2'),
(196, 'junaidnasir07@gmail.com', '5'),
(197, 'naina@gmail.com', 'w11'),
(198, 'naina@gmail.com', '7'),
(199, 'naina@gmail.com', '3'),
(200, 'junaidnasir07@gmail.com', 'w7'),
(201, 'junaidnasir07@gmail.com', 'w3'),
(202, 'junaidnasir07@gmail.com', '9'),
(203, 'junaidnasir07@gmail.com', 'w18'),
(183, 'junaidnasir07@gmail.com', 'w2'),
(184, 'junaidnasir07@gmail.com', 'w1'),
(185, 'junaidnasir07@gmail.com', 'w3'),
(186, 'junaidnasir07@gmail.com', 'w3'),
(204, 'samiyatirmazi@gmail.com', 'w10'),
(205, 'samiyatirmazi@gmail.com', '6'),
(206, 'samiyatirmazi@gmail.com', '9'),
(207, 'samiyatirmazi@gmail.com', '7'),
(208, 'samiyatirmazi@gmail.com', 'w16'),
(209, 'samiyatirmazi@gmail.com', 'w15'),
(210, '', 'w16'),
(211, '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `favourites` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `favourites`) VALUES
(1, 'junaid', 'junaidnasir07@gmail.com', 'qwerty', '{\"0\":\"1\",\"1\":\"w1\",\"3\":\"2\",\"4\":\"5\",\"5\":\"w7\",\"6\":\"w3\",\"7\":\"9\",\"8\":\"w18\",\"9\":\"w2\"}'),
(7, 'junaid', 'junaidnasir@gmail.com', 'ja.a', '[\"5\",\"6\",\"10\"]'),
(8, 'junaid', 'naina@gmail.com', '123.cd', '{\"0\":\"1\",\"1\":\"w5\",\"3\":\"w4\",\"4\":\"6\",\"5\":\"w11\",\"6\":\"7\",\"7\":\"3\"}'),
(9, 'osaid', 'osaid@gmail.com', '123.c', '0'),
(11, 'maheen', 'maheenkhalid@yahoo.com', '111', '[\"2\",\"6\",\"7\"]'),
(12, 'junaid', 'junaidnasir@outlook.com', '111', '0'),
(13, 'samiya', 'samiyatirmazi@gmail.com', 'sam', '[\"w10\",\"6\",\"9\",\"7\",\"w16\",\"w15\"]');

-- --------------------------------------------------------

--
-- Table structure for table `women_collection`
--

CREATE TABLE `women_collection` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `color` text NOT NULL,
  `fabric` text NOT NULL,
  `design` text NOT NULL,
  `spec_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `women_collection`
--

INSERT INTO `women_collection` (`id`, `image`, `color`, `fabric`, `design`, `spec_id`) VALUES
(1, '1.jpg', 'Off-white black and Golden', 'High quality fabric of our Design that will satisfy you.. ', 'The traditional Frok have an off-white base with the black lace have a glamours touch of Golden that makes it a complete marriage stuff. ', 'w1'),
(2, '2.jpg', 'White', 'Use of jarjet and lilan.. We assure you about the quality of fabric', 'The white Jarjet Frog with a lock neck and a very light embriodery have Red stones that give it a more charm..', 'w2'),
(3, '3.jpg', 'White ', 'High quality fabric of our Design that will satisfy you..', 'Dress base on 2 parts. 1st is a whole mexy and has a net upper in a coat shape.', 'w3'),
(4, '4.jpg', 'Black and Green', 'Silk and Jarjet', 'Beautiful Kali froq have a front open with net sleeves.', 'w4'),
(5, '5.jpg', 'Pink and White ', 'High quality fabric of our Design that will satisfy you.. ', 'Long Kurta and shalwar with the Sherwani carlour have a net embroided dupatta.', 'w5'),
(6, '6.jpg', 'Grey , Pink and Golden', 'High quality fabric of our Design that will satisfy you..', 'Short embroided kurti and a net emboided Dupatta.', 'w6'),
(7, '7.jpg', 'Blue and off-white', 'High quality fabric of our Design that will satisfy you..', 'Simple Long Printed Kurti with an off-white tights.', 'w7'),
(8, '8.jpg', 'Golden and Pink', 'lawn kurta shalwar and jarjet dupatta.', 'the beautifully embroided Kurta Shalwar\r\nhave a jarjet embroided dupatta.', 'w8'),
(9, '9.jpg', 'Light sea-green & White', 'High quality fabric of our Design that will satisfy you..', ' A front open Shirt with a heavy embroided coat and capri trouser.', 'w9'),
(10, '10.jpg', 'White and Pink', 'High quality fabric of our Design that will satisfy you..', 'An embroided sharara, The complete marriage material.', 'w10'),
(11, '11.jpg', ' Off-white', 'High quality fabric of our Design that will satisfy you.. ', 'The stylish front open layered froq with an embroided neck and churi daar pajama.', 'w11'),
(12, '12.jpg', 'Peach and Golden', 'High quality fabric of our Design that will satisfy you..', 'The complete bridal Sharara that will make you more beautiful.The combination of peach and Golden is all time favourite.', 'w12'),
(13, '13.jpg', 'Black, Golden and Green', 'High quality fabric of our Design that will satisfy you..', 'Long sleevless black froq with a light Golden embriodery and a green printed floor.', 'w13'),
(14, '14.jpg', 'Purple and White', 'High quality fabric of our Design that will satisfy you..', 'Short embroided Shirt in a Poncha style. with the white embroided trouser. A Perfect engagement wear ', 'w14'),
(15, '15.jpg', 'Navy blue and silver ', 'High quality fabric of our Design that will satisfy you..', 'The valvet Top with a valvet upper in a poncha style and have a Silver Pent Trouser that makes it more attractive and charming.', 'w15'),
(16, '16.jpg', 'Black , Pink and White', 'High quality fabric of our Design that will satisfy you.. ', 'The Beautiful Long Black Kali Froq , have an embroided neck with a white printed base and have a very light touch of pink that make it so glamorous and simple.', 'w16'),
(17, '17.jpg', 'Blue,Navy blue and Green', 'High quality fabric of our Design that will satisfy you..', 'A simple Long shirt with a very Long front open upper have an embroided boundries and sleeves.', 'w17'),
(18, '18.jpg', 'Peach and pink', 'High quality fabric of our Design that will satisfy you..', 'A short froq of skirt shape have beautifully embroided floral sleeves and a pair of Gharara pants.', 'w18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `men_collection`
--
ALTER TABLE `men_collection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`email`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `women_collection`
--
ALTER TABLE `women_collection`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `men_collection`
--
ALTER TABLE `men_collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `women_collection`
--
ALTER TABLE `women_collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
