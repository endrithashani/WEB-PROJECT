-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 12:40 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registerdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `emri` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mesazh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `emri`, `email`, `mesazh`) VALUES
(1, 'endrit', 'endrithashani@gmail.com', 'hadshashdohdoeidhqdqiod1'),
(2, 'endrit', 'endrithashani@gmail.com', 'hdsbfhwbfhwbibweibfiwbewbfi'),
(3, 'endrit', 'endrithashani@gmail.com', 'jadhaodhaodhoqd');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `image`) VALUES
(1, 'Gjatë 24 orëve të fundit në Kosovë është regjistruar një viktimë nga COVID-19 dhe 21 raste të reja me coronavirus, pas testimit të 1,893 mostrave.', 'Ministria e Shëndetësisë ka njoftuar se në bazë të dhënave të Institutit Kombëtar të Shëndetësisë Publike në 24 orët e fundit, 16 persona janë shëruar, derisa 445 persona janë ende aktivë me COVID-19.', 'covid.jpg'),
(2, 'Agresioni rus në Ukrainë mund ta rris krizën klimatike – si do të ndikojë kontaminimi në mjedis?', 'Ushtria ruse kishte marrë nën kontroll centralin më të madh të energjisë dhe pushtoi ambientet pas bombardimeve intensive që mund të kishin rrezikuar stabilitetin e gjashtë reaktorëve bërthamorë në termocentralin Zaporizhzhia.  Vetëm pak ditë më parë, lufta për kontrollin e Çernobilit rezultoi në rritjen e niveleve të rrezatimit rreth zonës së vjetër bërthamore në periferi të kryeqytetit ukrainas, Kiev..Sjellja e pamatur e presidentit rus, Vladimir Putin ka ngjallur frikë mbi kontaminimin – madj', 'agresioni.jpg'),
(3, 'Kampioni i botës, Usyk ka treguar se rusët kanë qëlluar në shtëpinë e tij dhe i kanë tërhequr zvarrë fqinjët', 'Boksieri, i cili fillimisht iu bashkua ushtrisë dhe në ndërkohë është larguar nga Ukraina dhe po përgatitet t’i mbrojtur titujt, ka folur për realitetin e tmerrshëm që po ndodh në atdheun e tij..“E di se kanë qëlluar në shtëpinë tonë, thyen portën dhe tërhoqën zvarrë disa nga fqinjët tanë. Por, nuk e di si është tani. Ne nuk mund të kontaktojmë me askënd. Është e tmerrshme kur të tutë duhet të ikin në bodrum pas çdo zhurme”, ka thënë Usyk për Profiboxing.', 'kampioni.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `emri` varchar(255) NOT NULL,
  `mbiemri` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `password2` varchar(255) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `emri`, `mbiemri`, `email`, `password`, `password2`, `type`) VALUES
(1, 'endrit', 'hashani', 'endrithashani@gmail.com', 'endriti2001', 'endriti2001', 1),
(8, 'Endrit', 'Hashani', 'ehashani242@gmail.com', 'diti2001', 'diti2001', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
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
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
