-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Nov 2023 pada 11.22
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nursyifa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `deskripsi` varchar(5000) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `content`
--

INSERT INTO `content` (`id`, `gambar`, `judul`, `deskripsi`, `create_at`, `update_at`) VALUES
(2, '2.JPG', 'Judul 21', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque corporis aliquam hic excepturi mollitia magnam adipisci deserunt eligendi quaerat voluptas. Quae numquam ducimus ut delectus, sequi porro nam nihil quisquam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque corporis aliquam hic excepturi mollitia magnam adipisci deserunt eligendi quaerat voluptas. Quae numquam ducimus ut delectus, sequi porro nam nihil quisquam! Eaque corporis aliquam hic excepturi mollitia magnam adipisci deserunt eligendi quaerat voluptas. Quae numquam ducimus ut delectus, sequi porro nam nihil quisquam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque corporis aliquam hic excepturi mollitia magnam adipisci deserunt eligendi quaerat voluptas. Quae numquam ducimus ut delectus, sequi porro nam nihil quisquam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaq', NULL, NULL),
(3, '3.JPG', 'Judul3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque corporis aliquam hic excepturi mollitia magnam adipisci deserunt eligendi quaerat voluptas. Quae numquam ducimus ut delectus, sequi porro nam nihil quisquam!', NULL, NULL),
(5, '6.JPG', 'Judul5', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque corporis aliquam hic excepturi mollitia magnam adipisci deserunt eligendi quaerat voluptas. Quae numquam ducimus ut delectus, sequi porro nam nihil quisquam!', NULL, NULL),
(13, '9.JPG', 'Himpunan Mahasiswa Teknik Informatika Universitas Ahmad Dahlan', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque corporis aliquam hic excepturi mollitia magnam adipisci deserunt eligendi quaerat voluptas. Quae numquam ducimus ut delectus, sequi porro nam nihil quisquam!', '2023-09-29 08:06:03', '2023-09-29 08:06:03'),
(14, '16.JPG', 'Perhimpunan Mahasiswa Informatika dan Komputer Nasional (PERMIKOMNAS) Yogyakarta', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque corporis aliquam hic excepturi mollitia magnam adipisci deserunt eligendi quaerat voluptas. Quae numquam ducimus ut delectus, sequi porro nam nihil quisquam!', '2023-09-29 08:06:22', '2023-09-29 08:06:22'),
(15, '8.JPG', 'Judul 3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque corporis aliquam hic excepturi mollitia magnam adipisci deserunt eligendi quaerat voluptas. Quae numquam ducimus ut delectus, sequi porro nam nihil quisquam!', '2023-09-29 08:06:44', '2023-09-29 08:06:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `email`, `username`, `password`, `role`) VALUES
(2, 'admin@gmail.com', 'admin', 'admin123', 1),
(3, 'admin2@gmail.com', 'admin2', '$2y$10$pgdbLwI0Fa6n1h.s9mYaz.LueUd6gupvgGLz4/kCnbIleVO4/oAQa', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
