-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2021 at 02:40 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nihongo`
--

-- --------------------------------------------------------

--
-- Table structure for table `bun`
--

CREATE TABLE `bun` (
  `ID` int(11) NOT NULL,
  `ID_Kata` int(11) NOT NULL,
  `Kalimat` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bun`
--

INSERT INTO `bun` (`ID`, `ID_Kata`, `Kalimat`) VALUES
(1, 1, '私の　かぞくは　6人（ろくにん)　です。'),
(2, 2, '会社で　はたらいています。\r\nくるまの　かいしゃで　はたらいています。'),
(3, 3, 'あきが　すきです、もみじが　きれい　ですから。'),
(4, 4, 'なつが　すきです、はなびたいかいの　まつりは　おもしろいですから。'),
(5, 14, '私の　まちは　おおきくて、あかるいくて、ジャカルタ　というまちです。');

-- --------------------------------------------------------

--
-- Table structure for table `indeks`
--

CREATE TABLE `indeks` (
  `ID_Kata` int(11) NOT NULL,
  `ID_Koleksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `indeks`
--

INSERT INTO `indeks` (`ID_Kata`, `ID_Koleksi`) VALUES
(1, 1),
(2, 1),
(3, 2),
(4, 2),
(14, 3);

-- --------------------------------------------------------

--
-- Table structure for table `kanji`
--

CREATE TABLE `kanji` (
  `ID` int(11) NOT NULL,
  `ID_Koleksi` int(11) NOT NULL,
  `ID_Kata` int(11) NOT NULL,
  `Tulisan` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kanji`
--

INSERT INTO `kanji` (`ID`, `ID_Koleksi`, `ID_Kata`, `Tulisan`) VALUES
(1, 1, 1, '家族'),
(2, 1, 2, '働きます'),
(3, 2, 3, '秋'),
(4, 2, 4, '夏');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `ID_Kata` int(11) NOT NULL,
  `Kategori_Kata` enum('Verba','Adjektiva-NA','Adjektiva-I','Nomina') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`ID_Kata`, `Kategori_Kata`) VALUES
(1, 'Nomina'),
(2, 'Verba'),
(3, 'Nomina'),
(4, 'Nomina'),
(14, 'Nomina');

-- --------------------------------------------------------

--
-- Table structure for table `koleksi`
--

CREATE TABLE `koleksi` (
  `ID` int(11) NOT NULL,
  `Nama` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Bab` int(11) NOT NULL,
  `Buku` enum('A1','A2-1','A2-2','lainnya') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `koleksi`
--

INSERT INTO `koleksi` (`ID`, `Nama`, `Bab`, `Buku`) VALUES
(1, 'Perkenalan diri', 1, 'A2-1'),
(2, 'Cuaca dan iklim', 2, 'A2-1'),
(3, 'Kota Saya', 3, 'A2-1'),
(29, 'Berpergian', 4, 'A2-1'),
(30, 'Bahasa Asing & Budaya Asing', 5, 'A2-1'),
(31, 'Makan Diluar', 6, 'A2-1');

-- --------------------------------------------------------

--
-- Table structure for table `moji`
--

CREATE TABLE `moji` (
  `ID` int(11) NOT NULL,
  `Kata` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `moji`
--

INSERT INTO `moji` (`ID`, `Kata`) VALUES
(1, 'Kazoku'),
(2, 'Hatarakimasu'),
(3, 'Aki'),
(4, 'Natsu'),
(14, 'Machi'),
(15, 'Okuremasu');

-- --------------------------------------------------------

--
-- Table structure for table `pola_kalimat`
--

CREATE TABLE `pola_kalimat` (
  `ID_Kalimat` int(11) NOT NULL,
  `Pola` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pola_kalimat`
--

INSERT INTO `pola_kalimat` (`ID_Kalimat`, `Pola`) VALUES
(1, 'Nは　～人です'),
(2, 'ｖ－ています'),
(3, 'Nが　すきです'),
(4, 'Nが　すきです'),
(5, 'Nーという　～です');

-- --------------------------------------------------------

--
-- Table structure for table `translate_bun`
--

CREATE TABLE `translate_bun` (
  `ID_Kalimat` int(11) NOT NULL,
  `Arti_Kalimat` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `translate_bun`
--

INSERT INTO `translate_bun` (`ID_Kalimat`, `Arti_Kalimat`) VALUES
(1, 'Keluarga saya berisi 6 orang'),
(2, 'Status saya sekarang pekerja kantoran. Saya bekerja untuk perusahaan mobil.'),
(3, 'Saya suka musim gugur karena momiji nya indah.'),
(4, 'Saya suka musim panas karena festival kembang api nya menarik.'),
(5, 'Kota saya besar, dan lampu-lampu kotanya terang, namanya Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `translate_moji`
--

CREATE TABLE `translate_moji` (
  `ID_Kata` int(11) NOT NULL,
  `Arti_Kata` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `translate_moji`
--

INSERT INTO `translate_moji` (`ID_Kata`, `Arti_Kata`) VALUES
(1, 'Keluarga'),
(2, 'Bekerja'),
(3, 'Musim kemarau'),
(4, 'Musim panas'),
(14, 'Kota (Kotamadya)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bun`
--
ALTER TABLE `bun`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Kata` (`ID_Kata`);

--
-- Indexes for table `indeks`
--
ALTER TABLE `indeks`
  ADD KEY `ID_Kata` (`ID_Kata`),
  ADD KEY `ID_Koleksi` (`ID_Koleksi`);

--
-- Indexes for table `kanji`
--
ALTER TABLE `kanji`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Koleksi` (`ID_Koleksi`),
  ADD KEY `ID_Kata` (`ID_Kata`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`ID_Kata`);

--
-- Indexes for table `koleksi`
--
ALTER TABLE `koleksi`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Nama` (`Nama`);

--
-- Indexes for table `moji`
--
ALTER TABLE `moji`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pola_kalimat`
--
ALTER TABLE `pola_kalimat`
  ADD PRIMARY KEY (`ID_Kalimat`);

--
-- Indexes for table `translate_bun`
--
ALTER TABLE `translate_bun`
  ADD PRIMARY KEY (`ID_Kalimat`);

--
-- Indexes for table `translate_moji`
--
ALTER TABLE `translate_moji`
  ADD PRIMARY KEY (`ID_Kata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bun`
--
ALTER TABLE `bun`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kanji`
--
ALTER TABLE `kanji`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `koleksi`
--
ALTER TABLE `koleksi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `moji`
--
ALTER TABLE `moji`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bun`
--
ALTER TABLE `bun`
  ADD CONSTRAINT `bun_ibfk_1` FOREIGN KEY (`ID_Kata`) REFERENCES `moji` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `indeks`
--
ALTER TABLE `indeks`
  ADD CONSTRAINT `indeks_ibfk_1` FOREIGN KEY (`ID_Kata`) REFERENCES `moji` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `indeks_ibfk_2` FOREIGN KEY (`ID_Koleksi`) REFERENCES `koleksi` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `kanji`
--
ALTER TABLE `kanji`
  ADD CONSTRAINT `kanji_ibfk_1` FOREIGN KEY (`ID_Koleksi`) REFERENCES `koleksi` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `kanji_ibfk_2` FOREIGN KEY (`ID_Kata`) REFERENCES `moji` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `kategori`
--
ALTER TABLE `kategori`
  ADD CONSTRAINT `kategori_ibfk_1` FOREIGN KEY (`ID_Kata`) REFERENCES `moji` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `pola_kalimat`
--
ALTER TABLE `pola_kalimat`
  ADD CONSTRAINT `pola_kalimat_ibfk_1` FOREIGN KEY (`ID_Kalimat`) REFERENCES `bun` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `translate_bun`
--
ALTER TABLE `translate_bun`
  ADD CONSTRAINT `translate_bun_ibfk_1` FOREIGN KEY (`ID_Kalimat`) REFERENCES `bun` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `translate_moji`
--
ALTER TABLE `translate_moji`
  ADD CONSTRAINT `translate_moji_ibfk_1` FOREIGN KEY (`ID_Kata`) REFERENCES `moji` (`ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
