-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 31 Maj 2021, 13:09
-- Wersja serwera: 10.4.18-MariaDB
-- Wersja PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `2tipg_cw3`
--
CREATE DATABASE IF NOT EXISTS `2tipg_cw3` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `2tipg_cw3`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dateStart` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `course`
--

INSERT INTO `course` (`id`, `name`, `dateStart`) VALUES
(1, 'Matematyka', '2021-05-01'),
(2, 'Fizyka', '2021-05-31'),
(3, 'Matematyka', '2021-05-01'),
(4, 'Fizyka', '2021-05-31'),
(5, 'Programowanie Użytkowe', '2012-01-01'),
(6, 'Literatura obca', '2019-02-02');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `courseId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `student`
--

INSERT INTO `student` (`id`, `firstName`, `lastName`, `courseId`) VALUES
(1, 'Jan', 'Ban', 5),
(2, 'Jan', 'Gan', 2),
(3, 'Jan', 'Ban', 5),
(4, 'Jan', 'Gan', 2),
(5, 'Janina', 'Banina', 6),
(6, 'Jan', 'Tanan', 1),
(7, 'Obi', 'Wan', 2),
(8, 'Jan', 'Ban', 3),
(9, 'Ronlad', 'Regan', 4),
(10, 'Michał', 'Chan', 5),
(11, 'Rade', 'Banana', 6),
(12, 'Katarzyna', 'Dalal', 1),
(13, 'Mariusz', 'qwerty', 3);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_student_course` (`courseId`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `fk_student_course` FOREIGN KEY (`courseId`) REFERENCES `course` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
