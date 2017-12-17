-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2017 at 04:14 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lis161_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `bands`
--

CREATE TABLE `bands` (
  `id` int(11) NOT NULL,
  `band_name` varchar(255) NOT NULL,
  `year_established` year(4) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bands`
--

INSERT INTO `bands` (`id`, `band_name`, `year_established`, `description`) VALUES
(1, 'Siakol', 1994, 'Siakol is a Filipino band with 4 members. Members called themselves â€Siakolâ€, pertaining to a free, happy and sometimes naughty state of mind. They made their presence felt with their hard-hitting song and gained recognition from the listening'),
(38, 'Asin', 1976, 'Asin (sometimes spelled ASIN, in all capital letters) is a Pinoy folk rock band from the Philippines. They started as a trio in the late 1970s before becoming a quartet, and was originally known as the Salt of the Earth. \"ASIN\" means salt in Filipino lang'),
(39, 'The Jerks', 1979, 'The Jerks is a rock band from the Philippines, formed in 1979 and is perhaps the original alternative rock and blues band in the Philippines. The band has undergone a lot of member changes and notably a lot of the previous members of the band are now cert'),
(40, 'The Dawn', 1985, 'The Dawn is a Filipino rock band which first achieved commercial success during the late 1980s in the Philippines. The band broke up in 1995 with lead vocalist Jett Pangan forming another band, the Jett Pangan Group. The Dawn reunited in late 1999. The Da'),
(41, 'Yano', 1993, 'Yano is a Filipino folk/punk rock band formed in 1993. The band members were originally composed of Dong Abay on vocals and Eric Gancio on guitar. Onie Badiang later joined them to play bass. Nowie Favila was the usual drummer but declined to join the gro'),
(43, 'Eraserheads', 1989, 'Eraserheads (sometimes stylized as ERASÆŽRHEADS) is a Filipino rock band formed in 1989. Consisting of Ely Buendia, Marcus Adoro, Buddy Zabala, and Raimund Marasigan, the band became one of the most successful, most influential, critically acclaimed, and '),
(44, 'Wolfgang', 1992, 'Wolfgang is a Filipino rock band formed in January 1992 in Manila, Philippines. Wolfgang is notable for being the only Filipino rock band to release albums in Japan and the United States and for realizing Platinum record sales in their home country.'),
(45, 'Razorback', 1990, 'Razorback is a Filipino hard rock band formed in 1990. Originally known for being regulars at the now-defunct Kalye, a club in Makati, the band has performed at full-scale concerts and opened for Silverchair, Rage Against the Machine and Metallica.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bands`
--
ALTER TABLE `bands`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bands`
--
ALTER TABLE `bands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
