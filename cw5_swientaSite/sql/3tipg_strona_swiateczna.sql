-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 26 Sty 2022, 23:56
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
-- Baza danych: `3tipg_strona_swiateczna`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dzieci`
--

CREATE TABLE `dzieci` (
  `id` int(11) NOT NULL,
  `id_prezentu` int(11) NOT NULL,
  `Imie` varchar(50) NOT NULL,
  `Nazwisko` varchar(20) NOT NULL,
  `CzyGrzeczny` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `dzieci`
--

INSERT INTO `dzieci` (`id`, `id_prezentu`, `Imie`, `Nazwisko`, `CzyGrzeczny`) VALUES
(1, 2, 'Varus', 'Czarus', 1),
(2, 1, 'Szklanex', 'Davinci', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `prezenty`
--

CREATE TABLE `prezenty` (
  `id` int(11) NOT NULL,
  `Nazwa` varchar(50) NOT NULL,
  `Wielkość` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `prezenty`
--

INSERT INTO `prezenty` (`id`, `Nazwa`, `Wielkość`) VALUES
(1, 'rower', 3),
(2, 'Samochód', 9),
(3, 'Telefon', 2),
(4, 'Bransoetka', 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `dzieci`
--
ALTER TABLE `dzieci`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `prezenty`
--
ALTER TABLE `prezenty`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `dzieci`
--
ALTER TABLE `dzieci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `prezenty`
--
ALTER TABLE `prezenty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
