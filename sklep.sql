-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 25 Mar 2020, 15:55
-- Wersja serwera: 10.4.6-MariaDB
-- Wersja PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `sklep`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `id_klienta` int(11) NOT NULL,
  `imie` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `telefon` int(11) NOT NULL,
  `adres` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `id_użytkownika` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`id_klienta`, `imie`, `nazwisko`, `telefon`, `adres`, `id_użytkownika`) VALUES
(1, 'Ewa', 'Kowalska', 123456789, 'Białystok 20', 1),
(2, 'Jan', 'Lewandowski', 321654987, 'Suwałki 15', 3),
(3, 'Urszula', 'Trojanowska', 987654321, 'Hajnówka 2', 4),
(4, 'Karol', 'Dąbrowski', 654789132, 'Łomża 99', 5);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownicy`
--

CREATE TABLE `pracownicy` (
  `id_pracownika` int(11) NOT NULL,
  `imie` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `zarobki` int(11) NOT NULL,
  `id_użytkownika` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `pracownicy`
--

INSERT INTO `pracownicy` (`id_pracownika`, `imie`, `nazwisko`, `zarobki`, `id_użytkownika`) VALUES
(1, 'Adam', 'Nowak', 2500, 2),
(2, 'Paweł', 'Kowalczyk', 2500, 6),
(3, 'Izabela', 'Szewc', 2500, 7);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkty`
--

CREATE TABLE `produkty` (
  `id_produktu` int(11) NOT NULL,
  `nazwa` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `cena` varchar(10) COLLATE utf8_polish_ci NOT NULL,
  `ilość_w_magazynie` int(11) NOT NULL,
  `gwarancja` varchar(10) COLLATE utf8_polish_ci NOT NULL,
  `sekcja` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `dział` varchar(50) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `produkty`
--

INSERT INTO `produkty` (`id_produktu`, `nazwa`, `cena`, `ilość_w_magazynie`, `gwarancja`, `sekcja`, `dział`) VALUES
(1, 'Łyżwy hokejowe', '350 zł', 20, '2 lata', 'Łyżwy', 'Sporty zimowe'),
(2, 'Łyżwy figurowe', '275 zł', 30, '2 lata', 'Łyżwy', 'Sporty zimowe'),
(3, 'Łyżwy panczeny', '200 zł', 13, '2 lata', 'Łyżwy', 'Sporty zimowe'),
(4, 'Narty białe', '80 zł', 40, '1 rok', 'Narty', 'Sporty zimowe'),
(5, 'Narty pomarańczowe', '80 zł', 33, '1 rok', 'Narty', 'Sporty zimowe'),
(6, 'Narty czarne', '80 zł', 23, '1 rok', 'Narty', 'Sporty zimowe'),
(7, 'Kask hokejowy', '300 zł', 9, '1 rok', 'Hokej', 'Sporty zimowe'),
(8, 'Kij hokejowy', '50 zł', 46, '1 rok', 'Hokej', 'Sporty zimowe'),
(9, 'Rękawice do hokeja', '70 zł', 25, '1 rok', 'Hokej', 'Sporty zimowe'),
(10, 'Rękawice mma', '90 zł', 31, '1 rok', 'Rękawice', 'Sporty walki'),
(11, 'Rękawice bokserskie', '80 zł', 21, '1 rok', 'Rękawice', 'Sporty walki'),
(12, 'Rękawice kickboxing', '80 zł', 10, '1 rok', 'Rękawice', 'Sporty walki'),
(13, 'Ochraniacze na piszczele', '120 zł', 24, '1 rok', 'Ochraniacze', 'Sporty walki'),
(14, 'Ochraniacze na głowę', '100 zł', 15, '1 rok', 'Ochraniacze', 'Sporty walki'),
(15, 'Ochraniacze na zęby', '30 zł', 38, '2 lata', 'Ochraniacze', 'Sporty walki'),
(16, 'Koszulka czarna', '60 zł', 45, 'Brak', 'Koszulki treningowe', 'Sporty walki'),
(17, 'Koszulka biała', '65 zł', 34, 'Brak', 'Koszulki treningowe', 'Sporty walki'),
(18, 'Koszulka biała2', '70 zł', 50, 'Brak', 'Koszulki treningowe', 'Sporty walki'),
(19, 'Piłka nożna', '70 zł', 120, 'Brak', 'Piłki', 'Sporty letnie'),
(20, 'Piłka rugby', '50 zł', 30, 'Brak', 'Piłki', 'Sporty letnie'),
(21, 'Piłka koszykówka', '60 zł', 50, 'Brak', 'Piłki', 'Sporty letnie'),
(22, 'Buty korki', '250 zł', 70, '1 rok', 'Buty', 'Sporty letnie'),
(23, 'Buty halowe', '100 zł', 56, '1 rok', 'Buty', 'Sporty letnie'),
(24, 'Buty do rugby', '90 zł', 15, '1 rok', 'Buty', 'Sporty letnie'),
(25, 'Okulary', '30 zł', 20, '2 lata', 'Pływanie', 'Sporty letnie'),
(26, 'Czepek', '15 zł', 52, '2 miesiące', 'Pływanie', 'Sporty letnie'),
(27, 'Kąpielówki', '40 zł', 34, 'Brak', 'Pływanie', 'Sporty letnie'),
(28, 'Plecak sportowy duży', '100 zł', 30, '3 lata', 'Plecaki', 'Sporty letnie'),
(29, 'Plecak turystyczny', '300 zł', 20, '2 lata', 'Plecaki', 'Sporty letnie'),
(30, 'Plecak sportowy mały', '80 zł', 15, '3 lata', 'Plecaki', 'Sporty letnie'),
(31, 'Dessert', '70 zł', 25, 'Brak', 'Białko', 'Suplementy'),
(32, 'KFD 80', '50 zł', 43, 'Brak', 'Białko', 'Suplementy'),
(33, 'KFD 90', '50 zł', 51, 'Brak', 'Białko', 'Suplementy'),
(34, 'CFM', '6 zł', 150, 'Brak', 'Batony', 'Suplementy'),
(35, 'Carb Control', '5 zł', 200, 'Brak', 'Batony', 'Suplementy'),
(36, 'Matrix', '7 zł', 178, 'Brak', 'Batony', 'Suplementy'),
(37, 'Master drink', '12 zł', 63, 'Brak', 'Napoje', 'Suplementy'),
(38, 'Multipower', '10 zł', 52, 'Brak', 'Napoje', 'Suplementy'),
(39, 'Optimum', '15 zł', 147, 'Brak', 'Napoje', 'Suplementy'),
(40, 'Bluza1', '150 zł', 80, 'Brak', 'Bluzy', 'Odzież męska'),
(41, 'Bluza2', '125 zł', 72, 'Brak', 'Bluzy', 'Odzież męska'),
(42, 'Bluza3', '100 zł', 30, 'Brak', 'Bluzy', 'Odzież męska'),
(43, 'Spodnie1', '150 zł', 63, 'Brak', 'Spodnie', 'Odzież męska'),
(44, 'Spodnie2', '100 zł', 58, 'Brak', 'Spodnie', 'Odzież męska'),
(45, 'Spodnie3', '80 zł', 25, 'Brak', 'Spodnie', 'Odzież męska'),
(46, 'Buty1', '250 zł', 64, 'Brak', 'Buty', 'Odzież męska'),
(47, 'Buty2', '80 zł', 51, 'Brak', 'Buty', 'Odzież męska'),
(48, 'Buty3', '100 zł', 40, 'Brak', 'Buty', 'Odzież męska'),
(49, 'Czapka1', '80 zł', 9, 'Brak', 'Czapki', 'Odzież męska'),
(50, 'Czapka2', '60 zł', 29, 'Brak', 'Czapki', 'Odzież męska'),
(51, 'Czapka3', '70 zł', 15, 'Brak', 'Czapki', 'Odzież męska'),
(52, 'Bluza4', '90 zł', 61, 'Brak', 'Bluzy', 'Odzież damska'),
(53, 'Bluza5', '120 zł', 37, 'Brak', 'Bluzy', 'Odzież damska'),
(54, 'Bluza6', '80 zł', 78, 'Brak', 'Bluzy', 'Odzież damska'),
(55, 'Spodnie4', '130 zł', 44, 'Brak', 'Spodnie', 'Odzież damska'),
(56, 'Spodnie5', '150 zł', 81, 'Brak', 'Spodnie', 'Odzież damska'),
(57, 'Spodnie6', '40 zł', 120, 'Brak', 'Spodnie', 'Odzież damska'),
(58, 'Buty4', '300 zł', 21, 'Brak', 'Buty', 'Odzież damska'),
(59, 'Buty5', '250 zł', 36, 'Brak', 'Buty', 'Odzież damska'),
(60, 'Buty6', '200 zł', 54, 'Brak', 'Buty', 'Odzież damska'),
(61, 'Czapka4', '65 zł', 23, 'Brak', 'Czapki', 'Odzież damska'),
(62, 'Czapka5', '45 zł', 13, 'Brak', 'Czapki', 'Odzież damska'),
(63, 'Czapka6', '60 zł', 24, 'Brak', 'Czapki', 'Odzież damska');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `użytkownicy`
--

CREATE TABLE `użytkownicy` (
  `id_użytkownika` int(11) NOT NULL,
  `nazwa` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `hasło` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `rola` varchar(50) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `użytkownicy`
--

INSERT INTO `użytkownicy` (`id_użytkownika`, `nazwa`, `hasło`, `rola`) VALUES
(1, 'Ewa', '81fe8bfe87576c3ecb22426f8e57847382917acf', 'klient'),
(2, 'Adam', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'pracownik'),
(3, 'Jan', 'af977ebb8a0482016d6615c14f4bac95ca6ab76f', 'klient'),
(4, 'Urszula', '83787f060a59493aefdcd4b2369990e7303e186e', 'klient'),
(5, 'Karol', '66b27417d37e024c46526c2f6d358a754fc552f3', 'klient'),
(6, 'Paweł', 'af3351e8f1a83796ddd46283f8739b8fc6380fa8', 'pracownik'),
(7, 'Izabela', '5ee5acb4201f978a36e77b5aa57312cffbf8e96b', 'pracownik');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamówienia`
--

CREATE TABLE `zamówienia` (
  `id_zamówienia` int(11) NOT NULL,
  `produkt` int(11) NOT NULL,
  `data_zamówienia` date NOT NULL,
  `klient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `zamówienia`
--

INSERT INTO `zamówienia` (`id_zamówienia`, `produkt`, `data_zamówienia`, `klient`) VALUES
(1, 53, '2020-03-24', 1),
(2, 3, '2020-03-20', 4),
(3, 60, '2020-03-22', 3),
(4, 51, '2020-03-14', 2);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`id_klienta`),
  ADD KEY `pracownicy_id_użytkownika_fk_2` (`id_użytkownika`);

--
-- Indeksy dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  ADD PRIMARY KEY (`id_pracownika`),
  ADD KEY `pracownicy_id_użytkownika_fk_1` (`id_użytkownika`);

--
-- Indeksy dla tabeli `produkty`
--
ALTER TABLE `produkty`
  ADD PRIMARY KEY (`id_produktu`);

--
-- Indeksy dla tabeli `użytkownicy`
--
ALTER TABLE `użytkownicy`
  ADD PRIMARY KEY (`id_użytkownika`);

--
-- Indeksy dla tabeli `zamówienia`
--
ALTER TABLE `zamówienia`
  ADD PRIMARY KEY (`id_zamówienia`),
  ADD KEY `klient` (`klient`),
  ADD KEY `produkt` (`produkt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `klienci`
--
ALTER TABLE `klienci`
  MODIFY `id_klienta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  MODIFY `id_pracownika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `produkty`
--
ALTER TABLE `produkty`
  MODIFY `id_produktu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT dla tabeli `użytkownicy`
--
ALTER TABLE `użytkownicy`
  MODIFY `id_użytkownika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `zamówienia`
--
ALTER TABLE `zamówienia`
  MODIFY `id_zamówienia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD CONSTRAINT `pracownicy_id_użytkownika_fk_2` FOREIGN KEY (`id_użytkownika`) REFERENCES `użytkownicy` (`id_użytkownika`);

--
-- Ograniczenia dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  ADD CONSTRAINT `pracownicy_id_użytkownika_fk_1` FOREIGN KEY (`id_użytkownika`) REFERENCES `użytkownicy` (`id_użytkownika`);

--
-- Ograniczenia dla tabeli `zamówienia`
--
ALTER TABLE `zamówienia`
  ADD CONSTRAINT `zamówienia_ibfk_1` FOREIGN KEY (`klient`) REFERENCES `klienci` (`id_klienta`),
  ADD CONSTRAINT `zamówienia_ibfk_2` FOREIGN KEY (`produkt`) REFERENCES `produkty` (`id_produktu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
