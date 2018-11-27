-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 26, 2018 at 04:31 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tedx`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `uid` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`uid`, `title`, `description`, `author`, `publish_date`, `url`, `image`) VALUES
(2, 'Sieve of Erastothenes', 'Greetings everyone in this tutorial I will write about sieve of Eratosthenes. It is a very useful algorithm to find all primes which are less th', 'Anurag Phadnis', '2017-09-13', 'https://anuragphadnis.blogspot.com/2017/09/sieve-of-eratosthenes-anurag-phadnis.html', '64038.jpg'),
(3, 'The Next Wave: A night of talks from TED and Zebra', 'The Fourth Industrial Revolution is bringing a tsunami of change that will dramatically affect how we interact with and adapt to technology. The ways we choose to ride this wave will determine the shape of our future. Will we use this as an opportunity to solve our most pressing issues, or allow it to become a ', 'Brian Greene', '2018-11-05', 'https://blog.ted.com/the-next-wave-a-night-of-talks-from-ted-and-zebra/', '900344.png'),
(4, 'Lorem', 'Ipsum', 'DOlor ', '2018-11-13', 'hufdu', '592732.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uname` varchar(30) NOT NULL,
  `pass` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uname`, `pass`) VALUES
('admin', 'f86ee8a10bdb8f3a1aaca76bc46d2e70');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `uid` int(11) NOT NULL,
  `code` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`uid`, `code`) VALUES
(2, '<div style=\"max-width:854px\"><div style=\"position:relative;height:0;padding-bottom:56.25%\"><iframe src=\"https://embed.ted.com/talks/julia_dhar_how_to_disagree_productively_and_find_common_ground\" width=\"854\" height=\"480\" style=\"position:absolute;left:0;top:0;width:100%;height:100%\" frameborder=\"0\" scrolling=\"no\" allowfullscreen></iframe></div></div>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
