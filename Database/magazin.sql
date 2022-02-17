-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: nov. 24, 2021 la 12:14 AM
-- Versiune server: 10.4.21-MariaDB
-- Versiune PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `magazin`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `clienti`
--

CREATE TABLE `clienti` (
  `client_id` int(11) NOT NULL,
  `client_username` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `client_pass` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `client_email` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `client_str` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `client_oras` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `client_tara` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `client_codpost` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `client_nrcard` int(100) NOT NULL,
  `client_tipcard` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `client_dataexp` datetime NOT NULL,
  `acceptareemail` int(3) NOT NULL,
  `client_nrinregRC` int(100) NOT NULL,
  `client_nume` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cod_fiscal` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `clienti`
--

INSERT INTO `clienti` (`client_id`, `client_username`, `client_pass`, `client_email`, `client_str`, `client_oras`, `client_tara`, `client_codpost`, `client_nrcard`, `client_tipcard`, `client_dataexp`, `acceptareemail`, `client_nrinregRC`, `client_nume`, `cod_fiscal`) VALUES
(1, 'Tudurean Adrian', 'aditud', 'aditud@gmail.com', 'Strada Nirajului 1', 'Cluj Napoca', 'România', '400597', 42315555, 'MASTERCARD', '2021-11-18 14:06:39', 0, 0, 'Tudurean Adrian', 0),
(2, 'pop marius', 'popm', 'popmarius@gmail.com', 'Strada Artarilor nr.14', 'Timisoara', 'Romania', '727470', 43675678, 'VISA', '2021-11-25 15:06:39', 9, 4, 'Pop Marius', 33333333),
(3, 'popescu claudiu', 'popc', 'popescu_claudiu@gmail.com', 'Strada Rozelor, numar 13', 'Arad', 'Romania', '666666', 45677890, 'VISA', '2021-11-27 15:17:48', 8, 9, 'Popescu Claudiu', 99),
(4, 'ion ion', 'ioni', 'ionion2@gmail.com', 'Strada Rex, numarul 2', 'Wisconsin', 'USA', '904657', 0, 'VISA', '2021-11-27 15:17:48', 6, 5, 'Ion Ion', 55558888),
(5, 'Matei Coca', 'Mateic', 'mateicoca23@yahoo.com', 'Strada Rnadunicii,numarul 57', 'Suceava', 'Romania', '678904', 899878, 'MASTERCARD', '2021-12-23 15:25:22', 5, 5, 'Matei Coca', 567890),
(7, 'anamaria', '$2y$10$2Jzplk.g2zqyRYljoj1JTOjD18RmE9vlPALF24M/NCxfRcnW9DTL.', 'anamaria@gmail.com', '', '', '', '', 0, '', '0000-00-00 00:00:00', 0, 0, '', 0),
(8, 'bbb', '$2y$10$LBW4yx/b5ggwUaP8L6fBt.ZBNdYwaF5ryGDqPcS6Pq2dAwjYgbkFm', 'abc@gmail.com', '', '', '', '', 0, '', '0000-00-00 00:00:00', 0, 0, '', 0),
(9, 'adriantud', '$2y$10$U4RBN94zk5xqERnMIwVzbOBlFs8RFPs6wslck6pv2cdGtuor4mD.K', 'tudurean@gmail.com', '', '', '', '', 0, '', '0000-00-00 00:00:00', 0, 0, '', 0),
(10, 'marian', '$2y$10$9akgzJtyA9lRc9H03odzgOBs9HbNDwtSBeiXGaHPJleBc/FVLcrn.', 'marian@gmail.com', '', '', '', '', 0, '', '0000-00-00 00:00:00', 0, 0, '', 0),
(11, 'abcdef', '$2y$10$OcfXOIxZk1nTu4uCh6kCNe4qQifCAg.mpuq8zzPPkQf.3ofUxuu36', 'abc@gmail.com', '', '', '', '', 0, '', '0000-00-00 00:00:00', 0, 0, '', 0),
(12, 'alex', '$2y$10$b2reEgJySiLUtMeNG.F2Aej9ljXGVnHxuvO0b3feZI3VrGWxiLAtq', 'laex@yahoo.com', '', '', '', '', 0, '', '0000-00-00 00:00:00', 0, 0, '', 0),
(13, 'marcel', '$2y$10$ixzW.qNtAG7vhI3KMeD1/eZLDG1BRZdwt8ahpeovR4sYC5hBRExX.', 'marceletare@gmail.com', '', '', '', '', 0, '', '0000-00-00 00:00:00', 0, 0, '', 0),
(14, 'Test', '$2y$10$0e5dahm2TbiSaSYcXb2/IeexsmX/wBEEMKJlJvrhK3S5GI0PqV.Ty', 'Test@yahoo.com', '', '', '', '', 0, '', '0000-00-00 00:00:00', 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `cos`
--

CREATE TABLE `cos` (
  `cos_id` int(11) NOT NULL,
  `clientID` int(11) NOT NULL,
  `produs_id` int(11) NOT NULL,
  `cantitate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `cos`
--

INSERT INTO `cos` (`cos_id`, `clientID`, `produs_id`, `cantitate`) VALUES
(77, 7, 4, 9),
(79, 9, 6, 7),
(80, 10, 5, 9),
(142, 1, 1, 7);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `ordin`
--

CREATE TABLE `ordin` (
  `ordin_id` int(11) NOT NULL,
  `ordin_prodID` int(11) NOT NULL,
  `ordin_cantit` int(11) NOT NULL,
  `ordin_client_id` int(11) NOT NULL,
  `ordin_dataintr` datetime NOT NULL,
  `ordin_stare` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ordin_shipdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `ordin`
--

INSERT INTO `ordin` (`ordin_id`, `ordin_prodID`, `ordin_cantit`, `ordin_client_id`, `ordin_dataintr`, `ordin_stare`, `ordin_shipdate`) VALUES
(1, 22, 34, 1, '2021-11-18 14:31:57', 'proaspat', '2021-11-27 15:31:58'),
(2, 33, 45, 2, '2022-01-21 15:31:58', 'vechi\r\n', '2022-01-13 15:31:58'),
(3, 99, 67, 3, '2022-01-12 15:33:11', 'vechi', '2021-11-20 15:33:11'),
(4, 99, 55, 4, '2021-12-22 15:33:11', 'proaspat', '2021-11-19 15:33:11'),
(5, 0, 0, 0, '2021-11-18 14:34:23', 'vechi', '2021-11-30 15:34:23');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `parola`
--

CREATE TABLE `parola` (
  `userid` int(11) NOT NULL,
  `pass` varchar(350) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `parola`
--

INSERT INTO `parola` (`userid`, `pass`) VALUES
(1, 'ccrr'),
(2, 'bbrr'),
(3, 'sdf234'),
(4, 'ncr345'),
(5, 'crs234');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `produse`
--

CREATE TABLE `produse` (
  `produs_id` int(11) NOT NULL,
  `produs_nume` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `produs_pret` decimal(13,2) NOT NULL,
  `produs_img` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `produs_categ` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `produs_descriere` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `produs_desccompl` varchar(1250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `produs_stare` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `produs_oferta` int(2) NOT NULL,
  `produs_noutati` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `produse`
--

INSERT INTO `produse` (`produs_id`, `produs_nume`, `produs_pret`, `produs_img`, `produs_categ`, `produs_descriere`, `produs_desccompl`, `produs_stare`, `produs_oferta`, `produs_noutati`) VALUES
(1, 'Rosii', '4.99', 'Rosii.jpg', 'Fructe', 'Rosii origine Spania.', '3333', 'Proaspat', 2, 3),
(2, 'Ciuperci', '10.00', 'Ciuperci.jpg', 'Legume', 'Ciuperci origine Polonia.', '1', 'Proapat', 1, 1),
(3, 'Portocale', '7.99', 'Portocale.jpg', 'Fructe', 'Portocale origine Turcia.', '78', 'Proaspat', 8, 5),
(4, 'Banane', '13.99', 'Banane.jpg', 'Fructe', 'Banane origine India.', '6', 'Proaspat', 2, 3),
(5, 'Cartofi', '2.50', 'Cartofi.jpg', 'Legume', 'Cartofi origine Romania.', '1234', 'Proaspat', 1, 2),
(6, 'Cirese', '25.99', 'Cirese.jpg', 'Fructe', 'Cirese origine Italia.', '1122', 'Proaspat', 1, 1),
(7, 'Morcovi', '6.99', 'Morcovi.jpg', 'Legume', 'Morcovi origine Romania.', '112233', 'Proaspat', 1, 2),
(8, 'Ceapa', '5.99', 'Ceapa.jpg', 'Legume', 'Ceapa origine Polonia.', '123', 'Proaspat', 2, 3),
(9, 'Mere', '7.50', 'Mere.jpg', 'Fructe', 'Mere origine Franta.', 'hhhh', '1', 1, 1);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `situatievizita`
--

CREATE TABLE `situatievizita` (
  `id` int(11) NOT NULL,
  `numepagviz` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `platforma` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `referrer` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date` datetime NOT NULL,
  `host` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `situatievizita`
--

INSERT INTO `situatievizita` (`id`, `numepagviz`, `platforma`, `referrer`, `time`, `date`, `host`) VALUES
(1, 'www.lacasa.ro', 'google', 'breadchef', '2021-11-18 14:11:22', '2021-11-18 15:08:07', 'mxhost'),
(5, 'www.lacasa.ro', 'google', 'breadchef', '2021-11-18 14:14:35', '2021-11-18 15:13:04', 'mshost');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `utilizatori`
--

CREATE TABLE `utilizatori` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `utilizatori`
--

INSERT INTO `utilizatori` (`id`, `username`, `password`, `email`) VALUES
(9, 'matei', '$2y$10$ZtoTlXvD4jQYfr466izyOObAeYOFWWKBGKC/eAsrpoy7o89QqON0q', 'mateisp@gmail.com'),
(10, 'anamaria1', '$2y$10$dGnrjjKYt6MgG5YV9Bjkmuesd75JZRYyrqBPJd/90vjIGuaKMv2wu', 'abcd@gmail.com'),
(11, 'marcel', '$2y$10$VXola1/F2FDaB4MSrmzeoe6/Z4CXMl8/5/hioxnDw1BNKr8WVWiie', 'marceletare@gmail.com'),
(12, 'Test', '$2y$10$2OxwbOV7jRmNBMYHlliJIu81I9aVb6wM.0jARZAfK16iWCxpl9Equ', 'test@yahoo.com');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexuri pentru tabele `cos`
--
ALTER TABLE `cos`
  ADD PRIMARY KEY (`cos_id`),
  ADD UNIQUE KEY `clientID` (`clientID`,`produs_id`),
  ADD KEY `produs_id` (`produs_id`);

--
-- Indexuri pentru tabele `ordin`
--
ALTER TABLE `ordin`
  ADD PRIMARY KEY (`ordin_id`);

--
-- Indexuri pentru tabele `parola`
--
ALTER TABLE `parola`
  ADD PRIMARY KEY (`userid`);

--
-- Indexuri pentru tabele `produse`
--
ALTER TABLE `produse`
  ADD PRIMARY KEY (`produs_id`);

--
-- Indexuri pentru tabele `situatievizita`
--
ALTER TABLE `situatievizita`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `utilizatori`
--
ALTER TABLE `utilizatori`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `clienti`
--
ALTER TABLE `clienti`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pentru tabele `cos`
--
ALTER TABLE `cos`
  MODIFY `cos_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT pentru tabele `ordin`
--
ALTER TABLE `ordin`
  MODIFY `ordin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pentru tabele `parola`
--
ALTER TABLE `parola`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pentru tabele `produse`
--
ALTER TABLE `produse`
  MODIFY `produs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pentru tabele `situatievizita`
--
ALTER TABLE `situatievizita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pentru tabele `utilizatori`
--
ALTER TABLE `utilizatori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constrângeri pentru tabele eliminate
--

--
-- Constrângeri pentru tabele `cos`
--
ALTER TABLE `cos`
  ADD CONSTRAINT `cos_ibfk_1` FOREIGN KEY (`clientID`) REFERENCES `clienti` (`client_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cos_ibfk_2` FOREIGN KEY (`produs_id`) REFERENCES `produse` (`produs_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
