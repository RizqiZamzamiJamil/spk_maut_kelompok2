-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 15 Des 2023 pada 03.42
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maut_kelompok2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `indeks_alternatif` varchar(3) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `indeks_alternatif`, `nama`) VALUES
(67, 'A1', 'Muhammad Iqbal'),
(68, 'A2', 'Lin Almeina Loebis'),
(69, 'A3', 'Jeperson Hutahaean'),
(70, 'A4', 'Afdhal Syafnur'),
(71, 'A5', 'Muhammad Ardiansyah Sembiring'),
(72, 'A6', 'Nasrun Marpaung'),
(73, 'A7', 'Maulana Dwi Sena'),
(74, 'A8', 'Suparmadi'),
(75, 'A9', 'Andri Nata'),
(76, 'A10', 'Akmal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `kode_kriteria` varchar(100) NOT NULL,
  `bobot` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `keterangan`, `kode_kriteria`, `bobot`) VALUES
(42, 'Penelitian', 'C1', 0.2),
(43, 'Pengabdian', 'C2', 0.18),
(44, 'Sinta', 'C3', 0.12),
(45, 'Scopus', 'C4', 0.12),
(46, 'Buku', 'C5', 0.14),
(47, 'HKI', 'C6', 0.13),
(48, 'Prototype', 'C7', 0.11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penilaian`
--

INSERT INTO `penilaian` (`id_penilaian`, `id_alternatif`, `id_kriteria`, `nilai`) VALUES
(333, 67, 42, 3.6),
(334, 67, 43, 1.8),
(335, 67, 44, 29.3),
(336, 67, 45, 0),
(337, 67, 46, 60),
(338, 67, 47, 20),
(339, 67, 48, 24),
(340, 68, 42, 3.4),
(341, 68, 43, 1),
(342, 68, 44, 26.3),
(343, 68, 45, 40),
(344, 68, 46, 0),
(345, 68, 47, 0),
(346, 68, 48, 0),
(347, 69, 42, 2.6),
(348, 69, 43, 2.1),
(349, 69, 44, 28.6),
(350, 69, 45, 0),
(351, 69, 46, 76),
(352, 69, 47, 15),
(353, 69, 48, 0),
(354, 70, 42, 2.1),
(355, 70, 43, 1.8),
(356, 70, 44, 20),
(357, 70, 45, 0),
(358, 70, 46, 24),
(359, 70, 47, 10),
(360, 70, 48, 37.3),
(361, 71, 42, 8.4),
(362, 71, 43, 0.8),
(363, 71, 44, 20.3),
(364, 71, 45, 0),
(365, 71, 46, 24),
(366, 71, 47, 5),
(367, 71, 48, 0),
(368, 72, 42, 2.2),
(369, 72, 43, 2.4),
(370, 72, 44, 25),
(371, 72, 45, 0),
(372, 72, 46, 4),
(373, 72, 47, 10),
(374, 72, 48, 24),
(375, 73, 42, 11.5),
(376, 73, 43, 0.4),
(377, 73, 44, 36),
(378, 73, 45, 0),
(379, 73, 46, 0),
(380, 73, 47, 0),
(381, 73, 48, 0),
(382, 74, 42, 15),
(383, 74, 43, 2.2),
(384, 74, 44, 26),
(385, 74, 48, 0),
(386, 74, 46, 4),
(387, 74, 47, 5),
(388, 74, 48, 0),
(389, 75, 42, 9.3),
(390, 75, 43, 2.2),
(391, 75, 44, 36),
(392, 75, 45, 0),
(393, 75, 46, 5.3),
(395, 75, 48, 4),
(396, 76, 42, 2.5),
(397, 76, 43, 2.2),
(398, 76, 44, 52),
(399, 76, 45, 0),
(400, 76, 46, 0),
(401, 76, 47, 0),
(402, 76, 48, 0),
(403, 74, 45, 0),
(404, 75, 47, 10);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `id_alternatif` (`id_alternatif`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=405;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  ADD CONSTRAINT `penilaian_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penilaian_ibfk_2` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
