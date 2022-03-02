-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 07 Kwi 2021, 08:32
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `php_cw1`
--
CREATE DATABASE IF NOT EXISTS `php_cw1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci;
USE `php_cw1`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `LastName` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `contacts`
--

INSERT INTO `contacts` (`Id`, `FirstName`, `LastName`, `Email`) VALUES
(1, 'Tomasz', 'Bodasz', 'brotom@op.pl'),
(2, 'Roman', 'Polański', 'thot@gmail.com'),
(3, 'Teresa', 'Politańczykiewiczówna', 'qwerty@onet.pl'),
(4, 'Adam', 'Małysz', 'skoczek123@yahoo.com');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `contacts`
--
ALTER TABLE `contacts`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
