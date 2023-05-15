-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql206.epizy.com
-- Generation Time: May 14, 2023 at 11:49 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_33845263_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adminname` varchar(25) NOT NULL,
  `adminpassword` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminname`, `adminpassword`) VALUES
(1, 'sharmakunal', 'password'),
(2, 'qwerty', 'hehehehe');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `dates` date NOT NULL,
  `propertyId` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `email`, `phone`, `dates`, `propertyId`) VALUES
(34, 'kunukun', 'kun2@gmail.com', '1239874657', '2023-04-21', 74),
(35, 'raja', 'jones@gmail.com', '1230984756', '2023-04-21', 68),
(36, 'Rushender', 'rushenderreddy08@gmail.com', '5142973513', '2023-04-22', 68),
(37, 'soumya', 'soumyajohn@loyalistcollege.com', '6479043045', '2023-04-20', 81);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(700) NOT NULL,
  `images` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `images`, `address`) VALUES
(55, 'soumya john', 'app1.jpg app2.jpg app3.jpg app4.jpg', '11001 Lacordaire, Montreal North, QC, Canada, H1G 6B7'),
(56, 'fiji', 'apt4.jpg aptt.jpg app4.jpg app3.jpg', '2225 Eglinton Ave. E, Scarborough, ON'),
(57, 'jojo', 'bailey-anselme-Bkp3gLygyeA-unsplash.jpg avi-werde-hHz4yrvxwlA-unsplash.jpg florian-schmidinger-b_79nOqf95I-unsplash.jpg digital-marketing-agency-ntwrk-g39p1kDjvSY-unsplash.jpg', '24 glen echo road'),
(58, 'haha', '7770fc5a-370a-433e-bb25-1a6e07b3079e.jpeg IMG_0087.jpeg IMG_9993.jpeg IMG_9601.jpeg', '53 garuddwar'),
(59, 'Jackson Micheal', 'avi-werde-hHz4yrvxwlA-unsplash.jpg digital-marketing-agency-ntwrk-g39p1kDjvSY-unsplash.jpg jason-dent-w3eFhqXjkZE-unsplash.jpg etienne-beauregard-riverin-B0aCvAVSX8E-unsplash.jpg', '777 Madza Drive'),
(60, 'karamjit', 'home1.jpg home2.jpg  ', '10 wildsky road'),
(61, 'efrg', 'fa431c37-7f55-4795-884c-3daa9cc78a20.jpeg IMG_0972.jpeg IMG_1007.jpeg 97d1c5de-a1af-4467-9104-b2d5521d98a8.jpeg', '23 frfr'),
(62, '', '   ', '123vrgvr'),
(63, 'akhil', 'nathan-anderson-XxyzpjYNY8k-unsplash.jpg chastity-cortijo-R-w5Q-4Mqm0-unsplash.jpg jason-briscoe-GliaHAJ3_5A-unsplash.jpg spacejoy-GQQyH0yNqLk-unsplash.jpg', '343 Elson Street'),
(64, 'akhil', 'sidekix-media--Vfa35ueUCo-unsplash.jpg nguyen-dang-hoang-nhu-0LT2YlQLJc0-unsplash.jpg raquel-navalon-alvarez-TWj0qbJn4zI-unsplash.jpg christian-mackie-cc0Gg3BegjE-unsplash.jpg', '25 New Delhi Drive'),
(65, 'jojo', '52410117-57e8-4ec3-b1ec-248ef1e81f79.jpeg   ', '12 frgfr f'),
(66, 'Leanna', 'p1.jpg p2.jpg p3.jpg p4.jpg', '#TH-1 -UNIT 23 BLK 7-2 TOWNHOUSE-1 ST King, Ontario L0G1T0'),
(67, 'sdgsdg', '   ', '12 hebfef'),
(68, 'rushender', '   ', '4000 victoria Park ave'),
(69, 'john', 'p1.jpg p2.jpg p3.jpg p6.jpg', '24 Glen echo court'),
(70, 'Teamc8', 'condo.jpeg condo.jpeg condo.jpeg condo.jpeg', '725 King St W Unit 411'),
(71, ' Soumya John', 'apat.webp   ', '4000n vic park ave'),
(72, 'Rushender Reddy', '   ', '92 hart avenue');

-- --------------------------------------------------------

--
-- Table structure for table `Properties`
--

CREATE TABLE `Properties` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `type` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `pimage` varchar(500) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Properties`
--

INSERT INTO `Properties` (`id`, `title`, `type`, `description`, `Price`, `address`, `pimage`, `contact`, `name`, `status`) VALUES
(68, '2 bedroom house', 'Apartment', '2 bed, 4 set bathroom, sunroom and kitchen, full furnished', '1000000', '24 glen echo road', 'holland_countryside_houses.jpg', '234098675', 'jojo', 'booked'),
(74, '2 BHK Town House', 'House', 'This is a 2-BHK town house with a beautiful lake view behind the house and this also consists of a walk in basement ', '2000000', '343 Elson Street', 'terrah-holly-pmhdkgRCbtE-unsplash.jpg', '6471234567', 'akhil', 'booked'),
(75, '1 Bedroom Condo', 'Condo', 'Beautiful condo on25th floor with great view in pleasant community. ', '1500000', '25 New Delhi Drive', 'agustin-lara-iKVqC5rvv9s-unsplash.jpg', '12345467890', 'akhil', 'NBooked'),
(79, '2 bedrooms', 'House', 'dsfkjsdfsdbcxmbxmz\r\nbdshgcvsdhc', '50000', '10 wildsky', '', '5124563214', 'karam', 'NBooked'),
(80, 'Condo', 'Condo', 'Welcome To This Bright And Well Maintained 1 Bedroom + Den Unit In The Heart Of The City! Ideal For First Time Home Buyer/Ivestor. Large Window. Open Concept . Parking Included. Excellent Location, Steps To Stanley Park, Entertainment District. Two Pools (Outdoor And Indoor), Outdoor Bbqs, Cinema Rooms, Hot Tub, Weight Lifting Room, Yoga Room, Games Room, Party Room, Rec Room,And So Much More!', '$588,000', '725 King St W Unit 411', 'condo.jpeg', '4358974567', 'Teamc8', 'NBooked'),
(81, 'apartment', 'House', 'This bachelor pad in the heart of Liberty Village comes with a spacious balcony and steel appliances. It has access to an indoor pool, hot tub, and other amenities.', '$1,098,000', '4000n vic park ave', 'apat.webp', '4358974567', ' Soumya John', 'booked');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `firstName` varchar(25) NOT NULL,
  `lastName` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstName`, `lastName`, `email`, `password`) VALUES
(1, 'kunalsharma', 'Kunal', 'Sharma', 'Sharma.kunal.ks12345@gmail.com', 'qeqeqe'),
(2, 'kunalks', 'Kunal', 'Ks', 'Kunal12345@gmail.com', 'kunalks12'),
(3, 'rushender', 'Rushender', 'Banda', 'Rushenderreddy08@gmail.com', '123456789'),
(4, 'soumya', 'Sou', 'Joh', 'Soumyajohn@loyalistcollege.com', 'Soumya123'),
(5, 'karam', 'Karamjit', 'Kaur', 'Karamjitkaur@loyalistcollege.com', 'php123'),
(6, 'jeet123', 'Karamjit', 'Gill', 'Karam123@gmail.com', '12345'),
(7, 'daman12', 'Damanpreet', 'Kaur', 'Daman@gmail.com', 'daman12'),
(8, 'akhil', 'Akhil', 'Akhil', 'Akhil@gmail.com', 'akhil@1997'),
(9, 'Leannagrace', 'Leanna', 'Fiji', 'Leanna@gmail.com', 'Soumyajohn@1234'),
(10, 'daman', 'Damanpreet', 'Kaur', 'Daman123@gmail.com', 'daman123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Properties`
--
ALTER TABLE `Properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `Properties`
--
ALTER TABLE `Properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
