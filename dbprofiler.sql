-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Okt 2023 pada 04.20
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbprofiler`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `a_personel`
--

CREATE TABLE `a_personel` (
  `acak` varchar(10) NOT NULL,
  `registered_on` date NOT NULL DEFAULT current_timestamp(),
  `nama_personel` varchar(100) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `jenis_personel` varchar(5) NOT NULL,
  `jenis_alat` varchar(5) NOT NULL,
  `klasifikasi` varchar(5) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `noreg` varchar(15) NOT NULL,
  `batas_waktu` date NOT NULL,
  `path_profile` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `a_personel`
--

INSERT INTO `a_personel` (`acak`, `registered_on`, `nama_personel`, `tempat`, `dob`, `jenis_personel`, `jenis_alat`, `klasifikasi`, `kelas`, `noreg`, `batas_waktu`, `path_profile`) VALUES
('651778c7ds', '2023-10-04', 'Joko Erwanto', 'Magelang', '2023-10-25', 'JP1', 'JA1', 'K2', 'C2', '21928193823', '2023-10-03', ''),
('651c49c7c5', '2023-10-04', 'Sigit', 'Wonogiri', '2023-10-18', 'JP1', 'JA2', 'K4', 'C2', '02138981', '2023-10-04', ''),
('651cbf1a07', '2023-10-04', 'asdas', 'asdasd', '2023-10-12', 'JP1', 'JA2', 'K2', 'C2', '12312312', '2023-10-05', 'uploads/asasas.jpg'),
('651cbfca65', '2023-10-04', 'RAUL', 'SPANYOL', '2023-10-19', 'JP1', 'JA2', 'K3', 'C2', '21312312', '2023-10-13', 'uploads/pro.jpeg'),
('651cc02bd7', '2023-10-04', 'ASDAS', 'ASDA', '2023-10-06', 'JP1', 'JA1', 'K1', 'C1', '123123666', '2023-10-20', 'uploads/WhatsApp-Image-2021-10-18-at-13.31.41.jpeg'),
('651cc0f145', '2023-10-04', 'asda', 'asda', '2023-10-18', 'JP1', 'JA1', 'K2', 'C2', '1232231', '2023-10-20', 'uploads/err.png'),
('651cc1b452', '2023-10-04', 'asda', 'asda', '2023-10-11', 'JP1', 'JA2', 'K2', 'C2', '12787887', '2023-10-06', 'uploads/WhatsApp-Image-2021-10-18-at-13.31.41.jpeg'),
('651cc3395c', '2023-10-04', 'JOKO ', 'MAGELANG', '2023-10-20', 'JP1', 'JA2', 'K3', 'C2', '123435435', '2023-10-19', 'uploads/651cc3395c4a8.png'),
('651cc42429', '2023-10-04', 'asdas', 'asdasdas', '2023-10-12', 'JP1', 'JA1', 'K1', 'C1', '1234544', '2023-10-06', 'uploads/651cc42429e71.JPG'),
('e7WKL69T05', '2023-10-03', 'asdas', 'asdasda', '2023-10-11', 'JP1', 'JA1', 'K1', 'C1', '1232333', '2023-10-26', 'uploads/e7WKL69T05.jpg'),
('RZm3yiFztg', '2023-10-04', 'asdasd', 'asdasd', '2023-10-19', 'JP1', 'JA2', 'K3', 'C3', '12312221', '2023-10-05', 'uploads/RZm3yiFztg.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `a_prefix`
--

CREATE TABLE `a_prefix` (
  `id` int(11) NOT NULL,
  `h_prefix` varchar(5) NOT NULL,
  `h_description` varchar(100) NOT NULL,
  `prefix_code` varchar(5) NOT NULL,
  `prefix_descriptions` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `a_prefix`
--

INSERT INTO `a_prefix` (`id`, `h_prefix`, `h_description`, `prefix_code`, `prefix_descriptions`, `status`) VALUES
(1, 'JP', 'JENIS PERSONEL', 'JP1', 'PETUGAS', 0),
(2, 'JP', 'JENIS PERSONEL', 'JP2', '-', 0),
(3, 'JA', 'JENIS ALAT', 'JA1', '-', 0),
(4, 'JA', 'JENIS ALAT', 'JA2', 'KERJA', 0),
(5, 'KL', 'KLASIFIKASI', 'K1', 'Petugas Peran Kebakaran (Kelas A)', 0),
(6, 'KL', 'KLASIFIKASI', 'K2', 'Petugas Peran Kebakaran (Kelas B)', 0),
(7, 'KL', 'KLASIFIKASI', 'K3', 'Petugas Peran Kebakaran (Kelas C)', 0),
(8, 'KL', 'KLASIFIKASI', 'K4', 'Petugas Peran Kebakaran (Kelas D)', 0),
(9, 'CL', 'CLASS', 'C1', 'Non Kelas', 0),
(10, 'CL', 'CLASS', 'C2', 'Kelas A', 0),
(11, 'CL', 'CLASS', 'C3', 'Kelas B', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `a_personel`
--
ALTER TABLE `a_personel`
  ADD PRIMARY KEY (`acak`);

--
-- Indeks untuk tabel `a_prefix`
--
ALTER TABLE `a_prefix`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `a_prefix`
--
ALTER TABLE `a_prefix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
