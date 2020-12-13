-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2020 pada 15.33
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbaplikasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbkriteria`
--

CREATE TABLE `tbkriteria` (
  `id` int(11) NOT NULL,
  `spk_kriteria` varchar(255) NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `sifat_kriteria` enum('Benefit','Cost') NOT NULL,
  `bobot_kriteria` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbkriteria`
--

INSERT INTO `tbkriteria` (`id`, `spk_kriteria`, `nama_kriteria`, `sifat_kriteria`, `bobot_kriteria`) VALUES
(1, 'Seleksi ADM', 'Pendidikan', 'Benefit', 0.19),
(2, 'Seleksi ADM', 'Nilai / IPK', 'Benefit', 0.21),
(16, 'Seleksi ADM', 'Pengalaman Kerja', 'Benefit', 0.24),
(17, 'Seleksi ADM', 'Usia', 'Cost', 0.13),
(18, 'Seleksi ADM', 'Status Perkawinan', 'Cost', 0.12),
(19, 'Seleksi ADM', 'Alamat', 'Cost', 0.11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpelamar`
--

CREATE TABLE `tbpelamar` (
  `id` int(11) NOT NULL,
  `nik_pelamar` varchar(255) NOT NULL,
  `nama_pelamar` varchar(255) NOT NULL,
  `email_pelamar` varchar(255) NOT NULL,
  `cv_pelamar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbpelamar`
--

INSERT INTO `tbpelamar` (`id`, `nik_pelamar`, `nama_pelamar`, `email_pelamar`, `cv_pelamar`) VALUES
(1, '167115456815', 'Susanto', 'Susanto@gmail.com', ''),
(2, '167323423412', 'Joko ', 'Joko@gmail.com', 'God Mode (Dodge) - Gab.zip'),
(3, '213124124', 'dasda', 'sfdsa@gmail.com', '1607613867_65f403b3725190d6494b.zip'),
(4, '312312', 'sda', 'angganate@gmail.com', '1607665313_acd908eef77264709cef.zip'),
(5, '312321', 'dsfas', 'angganate@gmail.com', '1607665392_ed0e2191e4560b15110d.zip'),
(6, '3123123', 'safda', 'aa@gmail.com', '1607665417_62826b61b73fd7f7da61.zip'),
(7, '321312', 'testing', 'angganate@mhs.mdp.ac.id', '1607665926_c4d35006596d80909da8.zip'),
(8, '12312321', 'azxczczx', 'angganate@mhs.mdp.ac.id', '1607666548_bb0da4eba06e526db77e.zip'),
(9, '69', 'Joni', 'joni@gmail.com', '1607751129_01094200ff069f8c40c9.zip');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbsubkriteria`
--

CREATE TABLE `tbsubkriteria` (
  `id_subkriteria` int(11) NOT NULL,
  `nama_subkriteria` varchar(255) NOT NULL,
  `nilai_subkriteria` float NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbsubkriteria`
--

INSERT INTO `tbsubkriteria` (`id_subkriteria`, `nama_subkriteria`, `nilai_subkriteria`, `id`) VALUES
(1, 'Sangat Baik', 1, 1),
(2, 'Baik', 0.75, 1),
(3, 'Kurang Baik', 0.5, 1),
(4, 'Tidak Baik', 0.25, 1),
(5, 'Sangat Baik', 1, 2),
(6, 'Baik', 0.75, 2),
(7, 'Kurang Baik', 0.5, 2),
(8, 'Tidak Baik', 0.25, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbkriteria`
--
ALTER TABLE `tbkriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbpelamar`
--
ALTER TABLE `tbpelamar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbsubkriteria`
--
ALTER TABLE `tbsubkriteria`
  ADD PRIMARY KEY (`id_subkriteria`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbkriteria`
--
ALTER TABLE `tbkriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `tbpelamar`
--
ALTER TABLE `tbpelamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbsubkriteria`
--
ALTER TABLE `tbsubkriteria`
  MODIFY `id_subkriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbsubkriteria`
--
ALTER TABLE `tbsubkriteria`
  ADD CONSTRAINT `tbsubkriteria_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tbkriteria` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
