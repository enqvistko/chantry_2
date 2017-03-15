-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 07, 2017 at 04:07 PM
-- Server version: 5.6.28
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: db_chantry
--

-- --------------------------------------------------------

--
-- Table structure for table tbl_gal
--

CREATE TABLE tbl_gal (
  gal_id smallint(5) UNSIGNED NOT NULL,
  gal_name varchar(100) NOT NULL,
  gal_thumb varchar(100) NOT NULL,
  gal_img varchar(100) NOT NULL,
  gal_desc varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table tbl_gal
--

INSERT INTO tbl_gal (gal_id, gal_name, gal_thumb, gal_img, gal_desc) VALUES
(1, 'egg', 'thumb_egg.jpg', 'gal_egg.jpg', 'Chantry Island birds. Photo by Nancy Calder'),
(2, 'lighthouse', 'thumb_lighthouse.jpg', 'gal_lighthouse.jpg', 'Chantry Island Lighthouse. Photos by Vicki Tomori'),
(3, 'bird', 'thumb_bird.jpg', 'gal_bird.jpg', 'Chantry Island birds. Photo by Nancy Calder'),
(4, 'lightkeepers', 'thumb_lightkeepers.jpg', 'gal_lightkeepers.jpg', 'Inside Light Keeper\'s. Photo by James Swartz'),
(5, 'lightkeepers2', 'thumb_lightkeepers2.jpg', 'gal_lightkeepers2.jpg', 'Inside Light Keeper\'s. Photo by James Swartz'),
(6, 'island', 'thumb_island.jpg', 'gal_island.jpg', 'Chantry Island Lighthouse and Light Keeper\'s cottage. Photo by Karen Smith'),
(7, 'island4', 'thumb_island4.jpg', 'gal_island4.jpg', 'Chantry Island Lighthouse. Photo by Carol Walberg'),
(8, 'island2', 'thumb_island2.jpg', 'gal_island2.jpg', 'The New Tour Boat. Photo by James Swartz'),
(9, 'flower', 'thumb_flower.jpg', 'gal_flower.jpg', 'Chantry Island Garden. Photo by Vicki Tomori'),
(10, 'cottage_1', 'thumb_cottage_1.jpg', 'gal_cottage_1.jpg', 'Inside Light Keeper\'s cottage. Photo by Vicki Tomori'),
(11, 'base', 'thumb_base.jpg', 'gal_base.jpg', 'Inside the Chantry Tour Base. Photo by unknown'),
(12, 'island3', 'thumb_island3.jpg', 'gal_island3.jpg', 'Aerial view of Chantry Island and the Saugeen River mouth in Southhampton, Ontario. Photo by Karen Smith.'),
(13, 'boat', 'thumb_boat.jpg', 'gal_boat.jpg', 'Chantry Island Tour Peerless II Boat. Photo by Carol Walberg.'),
(14, 'Sunset', 'thumb_sunset.jpg', 'gal_sunset.jpg', 'Chantry Island Sunset. Photo by Terry Thomas');

-- --------------------------------------------------------

--
-- Table structure for table tbl_schedule
--

CREATE TABLE tbl_schedule (
  schedule_id smallint(5) UNSIGNED NOT NULL,
  schedule_month varchar(50) NOT NULL,
  schedule_date varchar(50) NOT NULL,
  schedule_rates varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table tbl_gal
--
ALTER TABLE tbl_gal
  ADD PRIMARY KEY (gal_id);

--
-- Indexes for table tbl_schedule
--
ALTER TABLE tbl_schedule
  ADD PRIMARY KEY (schedule_id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table tbl_gal
--
ALTER TABLE tbl_gal
  MODIFY gal_id smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table tbl_schedule
--
ALTER TABLE tbl_schedule
  MODIFY schedule_id smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
