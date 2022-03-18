-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: localhost
-- Čas generovania: Pi 18.Mar 2022, 14:53
-- Verzia serveru: 10.4.21-MariaDB
-- Verzia PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `BE15_CR10_Vladimir_BigLibrary`
--
CREATE DATABASE IF NOT EXISTS `BE15_CR10_Vladimir_BigLibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `BE15_CR10_Vladimir_BigLibrary`;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `ISBN` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `author_first_name` varchar(255) NOT NULL,
  `author_last_name` varchar(255) NOT NULL,
  `publisher_name` varchar(255) NOT NULL,
  `publisher_address` varchar(255) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `publish_date` date NOT NULL,
  `picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `products`
--

INSERT INTO `products` (`id`, `ISBN`, `type`, `short_description`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `availability`, `publish_date`, `picture`) VALUES
(3, 1122, 'book', 'very good book', 'Dodo ', 'Momo', 'Rokfort', 'London Main Street 1', 'Yes', '2022-03-01', 'book1.jpeg'),
(4, 2222, 'book', 'very very good', 'Coco', 'Loco', 'Blackcrow', 'Wien Hauptplatz 1', 'Yes', '2022-03-02', 'book2.webp'),
(5, 3322, 'book', 'interesting story', 'Lono', 'Karo', 'Blackcrow', 'Wien Hauptplatz 1', 'Yes', '2022-03-03', 'book3.webp'),
(6, 4422, 'book', 'bestseller', 'Laro', 'Kett', 'Blackcrow', 'Wien Hauptplatz 1', 'Yes', '2022-03-03', 'book4.jpeg'),
(7, 1133, 'cd', 'good music', 'Lassen', 'Klassen', 'NW.Label', 'New York Main Street 1', 'Yes', '2022-03-11', 'cd1.webp'),
(8, 2233, 'cd', 'relax music', 'Anton', 'Koffer', 'Blackcrow', 'Wien Hauptplatz 1', 'Yes', '2022-03-15', 'cd2.jpeg'),
(9, 3333, 'cd', 'family music', 'Lessro', 'Claudio', 'Kear', 'Bratislava Hlavna Ulica 1', 'Yes', '2022-03-16', 'cd3.webp'),
(10, 1144, 'DVD', 'symphony', 'Johann', 'Strauss', 'Philharmoniker', 'Salzburg Hauptgasse 1', 'Yes', '2022-03-07', 'dvd1.png'),
(11, 2244, 'DVD', 'dance music', 'Tieto', 'Teto', 'Ultramusic', 'Paris Rue 1', 'Yes', '2022-03-15', 'dvd2.png'),
(12, 3344, 'DVD', 'live symphony', 'Karos', 'Maros', 'Zizkov', 'Praha Zizkov 1', 'Yes', '2022-03-30', '62348ea29e2dc.webp');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
