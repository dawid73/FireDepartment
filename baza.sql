-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 09 Lut 2016, 23:32
-- Wersja serwera: 5.6.26
-- Wersja PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `osp`
--
CREATE DATABASE IF NOT EXISTS `galazkameb_baza` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `galazkameb_baza`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `akcja`
--

CREATE TABLE IF NOT EXISTS `akcja` (
  `id` int(11) NOT NULL,
  `nrakcji` varchar(45) DEFAULT NULL,
  `datawyjazdu` datetime DEFAULT NULL,
  `datapowrotu` datetime DEFAULT NULL,
  `opis` longtext,
  `rodzajeakcji_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `akcja`
--

INSERT INTO `akcja` (`id`, `nrakcji`, `datawyjazdu`, `datapowrotu`, `opis`, `rodzajeakcji_id`) VALUES
(2, '25', NULL, NULL, NULL, 1),
(3, '222', '2016-02-18 00:00:00', '2016-02-10 00:00:00', ' fdsfdsfdssfs ', 1),
(4, 'fdfss', '2016-02-03 00:00:00', '2016-02-04 00:00:00', '  fdsfsdfsdfsfws', 1),
(5, '2222', '2016-02-11 05:35:00', '2016-02-11 07:00:00', '   kkkkkkkkkkk ', 1),
(6, 'numer', '2016-02-02 09:15:00', '2016-02-06 05:30:00', 'Jakiś tam opis', 1),
(7, 'hhh', '2016-02-02 00:00:00', '2016-02-04 00:00:00', '                                                      ', 1),
(8, 'fdfsdfsdfs', '2016-02-03 00:00:00', '2016-02-04 00:00:00', '                                                      ', 1),
(9, '555', '2016-02-03 00:00:00', '2016-02-03 00:00:00', '                                                      ', 1),
(10, 'abc', '2016-02-08 00:00:00', '2016-02-08 00:00:00', '  ', 1),
(11, 'qwe', '2016-02-08 00:00:00', '2016-02-08 00:00:00', '  ', 1),
(12, '333', '2016-02-08 00:00:00', '2016-02-08 00:00:00', '  ', 1),
(13, '25/11', '2016-02-08 00:00:00', '2016-02-08 00:00:00', '  ', 1),
(14, '1211', '2016-02-10 00:00:00', '2016-02-13 00:00:00', '    ', 1),
(15, '4545', '2016-02-08 00:00:00', '2016-02-08 00:00:00', '    ', 1),
(16, '3436', '2016-02-08 00:00:00', '2016-02-08 00:00:00', '  ', 1),
(17, '56565656565656565', '2016-02-08 00:00:00', '2016-02-08 00:00:00', '    opis', 1),
(18, 'pol', '2016-02-25 00:00:00', '2016-02-04 00:00:00', '  ', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `akcja_samochody`
--

CREATE TABLE IF NOT EXISTS `akcja_samochody` (
  `id` int(11) NOT NULL,
  `akcja_id` int(11) NOT NULL,
  `samochody_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `akcja_sprzet`
--

CREATE TABLE IF NOT EXISTS `akcja_sprzet` (
  `id` int(11) NOT NULL,
  `akcja_id` int(11) NOT NULL,
  `sprzet_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `akcjeuczestnicy`
--

CREATE TABLE IF NOT EXISTS `akcjeuczestnicy` (
  `id` int(11) NOT NULL,
  `akcja_id` int(11) NOT NULL,
  `czlonkowie_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `akcjeuczestnicy`
--

INSERT INTO `akcjeuczestnicy` (`id`, `akcja_id`, `czlonkowie_id`) VALUES
(1, 2, 2),
(2, 3, 2),
(3, 4, 1),
(4, 4, 2),
(5, 4, 3),
(6, 5, 2),
(7, 5, 3),
(8, 10, 1),
(9, 10, 3),
(10, 10, 1),
(11, 10, 2),
(12, 10, 3),
(13, 10, 4),
(14, 10, 1),
(15, 10, 2),
(16, 17, 1),
(17, 17, 2),
(18, 17, 3),
(19, 17, 4),
(20, 18, 1),
(21, 18, 2),
(22, 18, 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `czlonkowie`
--

CREATE TABLE IF NOT EXISTS `czlonkowie` (
  `id` int(11) NOT NULL,
  `imie` varchar(45) DEFAULT NULL,
  `nazwisko` varchar(45) DEFAULT NULL,
  `ojciec` varchar(45) DEFAULT NULL,
  `pesel` int(11) DEFAULT NULL,
  `plec` int(1) DEFAULT NULL,
  `nrdowodu` varchar(45) DEFAULT NULL,
  `dataurodzenia` date DEFAULT NULL,
  `miejsceurodzienia` varchar(45) DEFAULT NULL,
  `ulica` varchar(45) DEFAULT NULL,
  `miejscowosc` varchar(45) DEFAULT NULL,
  `kodpocztowy` varchar(45) DEFAULT NULL,
  `nrtelefonu` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `czynny` int(11) DEFAULT NULL,
  `funkcja` int(1) DEFAULT NULL,
  `badaniedo` int(11) DEFAULT NULL,
  `bhpdo` int(11) DEFAULT NULL,
  `prawojazdyb` int(11) DEFAULT NULL,
  `prawojazdyc` int(11) DEFAULT NULL,
  `uprawniauprzywi` int(11) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  `haslo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `czlonkowie`
--

INSERT INTO `czlonkowie` (`id`, `imie`, `nazwisko`, `ojciec`, `pesel`, `plec`, `nrdowodu`, `dataurodzenia`, `miejsceurodzienia`, `ulica`, `miejscowosc`, `kodpocztowy`, `nrtelefonu`, `email`, `czynny`, `funkcja`, `badaniedo`, `bhpdo`, `prawojazdyb`, `prawojazdyc`, `uprawniauprzywi`, `login`, `haslo`) VALUES
(1, 'Dawid', 'Honkisz', 'Jan', 887897, 1, '45665465', '2011-02-24', 'Oświęcim', 'Suskiego 66', 'Włosienica', '45-788', '12321324', 'dawid@o2.pl', 1, 1, 2016, 2016, 1, 0, 0, 'daw', 'daw'),
(2, 'Jan', 'Kowaslki', 'Józef', 456, 2, '789', '1965-07-16', 'Kraków', 'Wydrzymały', 'Lublin', '89-00', '12321324', 'errr@p.pl', 1, 1, 2018, 2014, 1, 1, 0, 'jan', ''),
(3, 'fdsfsdf', 'sdfsdfsdfs', 'dfsdfs', 0, 1, 'sdfsdf', '2016-02-02', 'fsdfsd', 'fsdfs', 'sdfsdfs', 'sdfsd', 'sdfsdf', 'sdfsdf', 1, 1, 2016, 2016, 0, 0, NULL, 'fsdfsdf', 'fsdfsdfs'),
(4, 'Jan', 'Krzyrzanowski', 'Jan', 55555, 1, '2222', '2016-02-18', 'Oswiecim', 'Krakowska', 'Oświęcim', '32-600', '22222', 'g@gm.pl', 1, 1, 2016, 2016, 1, 1, 1, 'jan', 'jan');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `jednostkainfo`
--

CREATE TABLE IF NOT EXISTS `jednostkainfo` (
  `id` int(45) NOT NULL,
  `nazwa` varchar(45) DEFAULT NULL,
  `miejscowosc` varchar(45) DEFAULT NULL,
  `adres` mediumtext,
  `www` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `jednostkainfo`
--

INSERT INTO `jednostkainfo` (`id`, `nazwa`, `miejscowosc`, `adres`, `www`, `email`) VALUES
(0, 'Ochotnicza Straż Pożarna44', 'Stawy Monowskie', 'ul. Dogoda 13', 'www.stawy.osp.pl', 'stawy@osp.pl2');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `magazyn`
--

CREATE TABLE IF NOT EXISTS `magazyn` (
  `id` int(11) NOT NULL,
  `rodzaj` varchar(45) DEFAULT NULL,
  `marka` varchar(45) DEFAULT NULL,
  `typ` varchar(45) DEFAULT NULL,
  `nrinwentarzowy` varchar(45) DEFAULT NULL,
  `ilosc` int(11) DEFAULT NULL,
  `datawprowadzenia` int(11) DEFAULT NULL,
  `obecny` int(11) DEFAULT NULL,
  `dataprzydatnosci` int(11) DEFAULT NULL,
  `datawykreslenia` int(11) DEFAULT NULL,
  `powodwykreslenia` varchar(45) DEFAULT NULL,
  `info` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rodzajeakcji`
--

CREATE TABLE IF NOT EXISTS `rodzajeakcji` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `rodzajeakcji`
--

INSERT INTO `rodzajeakcji` (`id`, `nazwa`) VALUES
(1, 'Pożar');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `samochody`
--

CREATE TABLE IF NOT EXISTS `samochody` (
  `id` int(11) NOT NULL,
  `rejestracja` varchar(45) DEFAULT NULL,
  `producent` varchar(45) DEFAULT NULL,
  `marka` varchar(45) DEFAULT NULL,
  `typ` varchar(45) DEFAULT NULL,
  `dataprodukcji` date DEFAULT NULL,
  `vin` varchar(45) DEFAULT NULL,
  `paliwo` int(1) DEFAULT NULL,
  `dataprzegladu` date DEFAULT NULL,
  `dataubezpieczenia` date DEFAULT NULL,
  `nrpolisy` varchar(45) DEFAULT NULL,
  `uwagi` longtext
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sprzet`
--

CREATE TABLE IF NOT EXISTS `sprzet` (
  `id` int(11) NOT NULL,
  `rodzaj` varchar(45) DEFAULT NULL,
  `producent` varchar(45) DEFAULT NULL,
  `model` varchar(45) DEFAULT NULL,
  `dataprodukcji` date DEFAULT NULL,
  `rodzajpaliwa` int(1) DEFAULT NULL,
  `databadania` date DEFAULT NULL,
  `info` longtext
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `sprzet`
--

INSERT INTO `sprzet` (`id`, `rodzaj`, `producent`, `model`, `dataprodukcji`, `rodzajpaliwa`, `databadania`, `info`) VALUES
(1, '123', 'Test', 'Test Model', '0000-00-00', 1, '2016-09-09', 'opis');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `szkolenia`
--

CREATE TABLE IF NOT EXISTS `szkolenia` (
  `id` int(11) NOT NULL,
  `szkoleniainfo_id` int(11) NOT NULL,
  `czlonkowie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `szkoleniainfo`
--

CREATE TABLE IF NOT EXISTS `szkoleniainfo` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(45) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `miejsce` varchar(45) DEFAULT NULL,
  `info` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tankowania`
--

CREATE TABLE IF NOT EXISTS `tankowania` (
  `id` int(11) NOT NULL,
  `data` datetime DEFAULT NULL,
  `paliwo` int(1) DEFAULT NULL,
  `faktura` varchar(45) DEFAULT NULL,
  `sprzedawca` varchar(45) DEFAULT NULL,
  `litrow` double DEFAULT NULL,
  `wartosc` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tankowanie_info`
--

CREATE TABLE IF NOT EXISTS `tankowanie_info` (
  `id` int(11) NOT NULL,
  `samochody_id` int(11) DEFAULT NULL,
  `sprzet_id` int(11) DEFAULT NULL,
  `tankowania_id` int(11) NOT NULL,
  `stanlicznika` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `imie` varchar(45) DEFAULT NULL,
  `nazwisko` varchar(45) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  `haslo` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `uprawnienia` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id`, `imie`, `nazwisko`, `login`, `haslo`, `status`, `uprawnienia`) VALUES
(1, 'Test', 'Test', '123', '76d80224611fc919a5d54f0ff9fba446', 1, 1),
(2, 'Dawid', 'Honkisz', 'dh', '700f6fa0edb608ee5cc3cfa63f1c94cc', 1, 1),
(3, 'Adam', 'Nowak', 'no', '7fa3b767c460b54a2be4d49030b349c7', 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zarzad`
--

CREATE TABLE IF NOT EXISTS `zarzad` (
  `id` int(11) NOT NULL,
  `od` int(11) DEFAULT NULL,
  `do` int(11) DEFAULT NULL,
  `inni` mediumtext,
  `prezez_id` int(11) DEFAULT NULL,
  `naczelnik_id` int(11) DEFAULT NULL,
  `wiceprezes_id` int(11) DEFAULT NULL,
  `sekretarz_id` int(11) DEFAULT NULL,
  `skarbnik_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `akcja`
--
ALTER TABLE `akcja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_akcja_rodzajeakcji1_idx` (`rodzajeakcji_id`);

--
-- Indexes for table `akcja_samochody`
--
ALTER TABLE `akcja_samochody`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_akcja_samochody_akcja1_idx` (`akcja_id`),
  ADD KEY `fk_akcja_samochody_samochody1_idx` (`samochody_id`);

--
-- Indexes for table `akcja_sprzet`
--
ALTER TABLE `akcja_sprzet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_akcja_sprzet_akcja1_idx` (`akcja_id`),
  ADD KEY `fk_akcja_sprzet_sprzet1_idx` (`sprzet_id`);

--
-- Indexes for table `akcjeuczestnicy`
--
ALTER TABLE `akcjeuczestnicy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_akcjeuczestnicy_akcja_idx` (`akcja_id`),
  ADD KEY `fk_akcjeuczestnicy_czlonkowie1_idx` (`czlonkowie_id`);

--
-- Indexes for table `czlonkowie`
--
ALTER TABLE `czlonkowie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jednostkainfo`
--
ALTER TABLE `jednostkainfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `magazyn`
--
ALTER TABLE `magazyn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rodzajeakcji`
--
ALTER TABLE `rodzajeakcji`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `samochody`
--
ALTER TABLE `samochody`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sprzet`
--
ALTER TABLE `sprzet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `szkolenia`
--
ALTER TABLE `szkolenia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_szkolenia_szkoleniainfo1_idx` (`szkoleniainfo_id`),
  ADD KEY `fk_szkolenia_czlonkowie1_idx` (`czlonkowie_id`);

--
-- Indexes for table `szkoleniainfo`
--
ALTER TABLE `szkoleniainfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tankowania`
--
ALTER TABLE `tankowania`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tankowanie_info`
--
ALTER TABLE `tankowanie_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tankowanie_samochod_samochody1_idx` (`samochody_id`),
  ADD KEY `fk_tankowanie_samochod_tankowania1_idx` (`tankowania_id`),
  ADD KEY `fk_tankowanie_samochod_sprzet1_idx` (`sprzet_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zarzad`
--
ALTER TABLE `zarzad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_zarzad_czlonkowie1_idx` (`prezez_id`),
  ADD KEY `fk_zarzad_czlonkowie2_idx` (`naczelnik_id`),
  ADD KEY `fk_zarzad_czlonkowie3_idx` (`wiceprezes_id`),
  ADD KEY `fk_zarzad_czlonkowie4_idx` (`sekretarz_id`),
  ADD KEY `fk_zarzad_czlonkowie5_idx` (`skarbnik_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `akcja`
--
ALTER TABLE `akcja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT dla tabeli `akcja_samochody`
--
ALTER TABLE `akcja_samochody`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `akcja_sprzet`
--
ALTER TABLE `akcja_sprzet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `akcjeuczestnicy`
--
ALTER TABLE `akcjeuczestnicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT dla tabeli `czlonkowie`
--
ALTER TABLE `czlonkowie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT dla tabeli `jednostkainfo`
--
ALTER TABLE `jednostkainfo`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `magazyn`
--
ALTER TABLE `magazyn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `rodzajeakcji`
--
ALTER TABLE `rodzajeakcji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `samochody`
--
ALTER TABLE `samochody`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `sprzet`
--
ALTER TABLE `sprzet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT dla tabeli `szkolenia`
--
ALTER TABLE `szkolenia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `szkoleniainfo`
--
ALTER TABLE `szkoleniainfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `tankowania`
--
ALTER TABLE `tankowania`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `tankowanie_info`
--
ALTER TABLE `tankowanie_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `zarzad`
--
ALTER TABLE `zarzad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `akcja`
--
ALTER TABLE `akcja`
  ADD CONSTRAINT `fk_akcja_rodzajeakcji1` FOREIGN KEY (`rodzajeakcji_id`) REFERENCES `rodzajeakcji` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `akcja_samochody`
--
ALTER TABLE `akcja_samochody`
  ADD CONSTRAINT `fk_akcja_samochody_akcja1` FOREIGN KEY (`akcja_id`) REFERENCES `akcja` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_akcja_samochody_samochody1` FOREIGN KEY (`samochody_id`) REFERENCES `samochody` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `akcja_sprzet`
--
ALTER TABLE `akcja_sprzet`
  ADD CONSTRAINT `fk_akcja_sprzet_akcja1` FOREIGN KEY (`akcja_id`) REFERENCES `akcja` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_akcja_sprzet_sprzet1` FOREIGN KEY (`sprzet_id`) REFERENCES `sprzet` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `akcjeuczestnicy`
--
ALTER TABLE `akcjeuczestnicy`
  ADD CONSTRAINT `fk_akcjeuczestnicy_akcja` FOREIGN KEY (`akcja_id`) REFERENCES `akcja` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_akcjeuczestnicy_czlonkowie1` FOREIGN KEY (`czlonkowie_id`) REFERENCES `czlonkowie` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `szkolenia`
--
ALTER TABLE `szkolenia`
  ADD CONSTRAINT `fk_szkolenia_czlonkowie1` FOREIGN KEY (`czlonkowie_id`) REFERENCES `czlonkowie` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_szkolenia_szkoleniainfo1` FOREIGN KEY (`szkoleniainfo_id`) REFERENCES `szkoleniainfo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `tankowanie_info`
--
ALTER TABLE `tankowanie_info`
  ADD CONSTRAINT `fk_tankowanie_samochod_samochody1` FOREIGN KEY (`samochody_id`) REFERENCES `samochody` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tankowanie_samochod_sprzet1` FOREIGN KEY (`sprzet_id`) REFERENCES `sprzet` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tankowanie_samochod_tankowania1` FOREIGN KEY (`tankowania_id`) REFERENCES `tankowania` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `zarzad`
--
ALTER TABLE `zarzad`
  ADD CONSTRAINT `fk_zarzad_czlonkowie1` FOREIGN KEY (`prezez_id`) REFERENCES `czlonkowie` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_zarzad_czlonkowie2` FOREIGN KEY (`naczelnik_id`) REFERENCES `czlonkowie` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_zarzad_czlonkowie3` FOREIGN KEY (`wiceprezes_id`) REFERENCES `czlonkowie` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_zarzad_czlonkowie4` FOREIGN KEY (`sekretarz_id`) REFERENCES `czlonkowie` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_zarzad_czlonkowie5` FOREIGN KEY (`skarbnik_id`) REFERENCES `czlonkowie` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
