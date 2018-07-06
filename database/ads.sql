-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2018 at 08:40 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ads`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ad_zone`
--

CREATE TABLE `ad_zone` (
  `id` int(230) NOT NULL,
  `wname` varchar(300) NOT NULL,
  `ad_name` varchar(300) NOT NULL,
  `ad_url` varchar(300) NOT NULL,
  `ad_type` varchar(400) NOT NULL,
  `ad_desc` varchar(10000) NOT NULL,
  `ad_tag` varchar(10000) NOT NULL,
  `ad_rating` varchar(300) NOT NULL,
  `ad_ron` varchar(200) NOT NULL,
  `ad_appear` varchar(10000) NOT NULL,
  `ad_approve` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ad_zone`
--

INSERT INTO `ad_zone` (`id`, `wname`, `ad_name`, `ad_url`, `ad_type`, `ad_desc`, `ad_tag`, `ad_rating`, `ad_ron`, `ad_appear`, `ad_approve`) VALUES
(1, 'Hs.com', 'dfgfg', 'e0ba592a57a8a6046677449342b011eb', 'Photo-Text Ad', 'dfgdfg', 'dfgdf', 'General&Teen', 'Yes', 'dfgfd', 'Explicitly Approve All Ads'),
(2, 'Hs.com', 'fdgdfg', 'e0ba592a57a8a6046677449342b011eb', 'Photo-Text Ad', 'dfgdf', 'dfgdfg', 'General', 'No', 'dfgdf', 'Offer long-term discounts'),
(3, 'Hs.com', 'dfgdf', '6ff81213f4309e6d2fcf1f6350f79c5b', 'Banner Ad', 'dgfdfg', 'dfgdfg', 'General&Teen', 'Yes', 'dfgfdgdf', 'Explicitly Approve All Ads'),
(4, 'Hs.com', 'fdgfd', '328d6fde080b9845fb7fa3a612bea12f', 'Banner Ad', 'dfgdfg', 'dfgdfg', 'General&Teen', 'No', 'dfgfdgdfg', 'Offer long-term discounts'),
(6, 'b.com', 'dsad', 'asdasd', 'Photo-Text Ad', 'asdasd', 'asdas', 'General', 'Yes', 'asdas', 'Explicitly Approve All Ads'),
(7, 'br.com', 'sdfsdf', 'dsdsfsd', 'Text Ad', 'sdfsdfsdfsd', 'sdfsdfds', 'General&Teen', 'No', 'asdsasasaasddsasa', 'Offer long-term discounts'),
(9, 't.com', 'ere', 'werwer', 'Photo-Text Ad', 'werwer', 'werwer', 'General&Teen', 'Yes', 'werwerewrwe', 'Explicitly Approve All Ads');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'sfsf', 'sdfsd@xd', '6ff81213f4309e6d2fcf1f6350f79c5b', 'gdfgdfg'),
(2, 'sdfsdfsd', 'sdfsd@dgdfg', '1806e9702af8a1470d1695f377959810', 'gdfgdfgdf'),
(3, 'fghfh', 'fghgf@dffhfg', '56924aabe3bf29c033af72db6dd1aa63', 'fghgfhfghfghfg');

-- --------------------------------------------------------

--
-- Table structure for table `post_ads`
--

CREATE TABLE `post_ads` (
  `ad_id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price_title` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `ad_image` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_ads`
--

INSERT INTO `post_ads` (`ad_id`, `title`, `category`, `price_title`, `fname`, `lname`, `contact_no`, `address`, `country`, `state`, `city`, `ad_image`) VALUES
(2, 'fdfdsfsd', 'none', 'abc', 'sddsf', 'sdfsdf', 'sdfsd', 'sfsdfsdf', 'none', 'none', 'none', 'logo2.png');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `postcode` varchar(40) NOT NULL,
  `tax_classification` varchar(30) NOT NULL,
  `ssn` varchar(50) NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  `cheque_payable_to` varchar(400) NOT NULL,
  `paypal_email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`, `mobile_no`, `company_name`, `address`, `city`, `state`, `country`, `postcode`, `tax_classification`, `ssn`, `payment_type`, `cheque_payable_to`, `paypal_email`) VALUES
(3, 'binal', 'B@Gmail.Com', '92eb5ffee6ae2fec3ad71c777531578f', '999999999', 'dgfdgdfgdfg', 'b-608', 'ahmedabad', 'gujarat', 'india', '998876', 'LLC', 'abcd', 'cheque', 'binal', 'b@gmail.com'),
(4, 'dfdfd', '34534@sddfg', '853aafe126729ea181641256b5ced3a4', '43534534543', 'dfgdfgdf', 'dffdgdf', 'gdfgdf', 'gdfgdfg', 'dfgdfg', 'dfgdfg', 'Corporation', 'dfgdfgdf', 'Paypal', 'dgdfgdfg', 'dfgdfgdf');

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `w_id` int(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `w_name` varchar(1000) NOT NULL,
  `w_url` varchar(1000) NOT NULL,
  `w_desc` varchar(3000) NOT NULL,
  `w_category` varchar(1000) NOT NULL,
  `w_language` varchar(1000) NOT NULL,
  `w_content` varchar(2000) NOT NULL,
  `updated_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`w_id`, `email`, `w_name`, `w_url`, `w_desc`, `w_category`, `w_language`, `w_content`, `updated_time`) VALUES
(3, 'B@Gmail.Com', 'hs.com', 'www.hs.com', '86a41b92e118f94a434f13a743fe0acd', 'Entertainment', 'English', 'My site has adult content', '00:00:00'),
(4, 'B@Gmail.Com', 'br.com', 'b.com', '8c71fb3f7593543f2ad180d31148a7cf', 'Business,Entertainment', 'Gujarati', 'My site has adult content', '00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad_zone`
--
ALTER TABLE `ad_zone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_ads`
--
ALTER TABLE `post_ads`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`w_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ad_zone`
--
ALTER TABLE `ad_zone`
  MODIFY `id` int(230) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post_ads`
--
ALTER TABLE `post_ads`
  MODIFY `ad_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `website`
--
ALTER TABLE `website`
  MODIFY `w_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
