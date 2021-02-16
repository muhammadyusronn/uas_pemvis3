-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 31 Jan 2021 pada 07.11
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_penggajian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bagian`
--

CREATE TABLE `bagian` (
  `bagian_id` int(11) NOT NULL,
  `bagian_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bagian`
--

INSERT INTO `bagian` (`bagian_id`, `bagian_nama`) VALUES
(1, 'Grader GD 14'),
(2, 'Excavator 41'),
(3, 'Bulldozaer BD 14'),
(4, 'Backhoe Loader BL 08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gaji`
--

CREATE TABLE `gaji` (
  `gaji_id` int(11) NOT NULL,
  `gaji_tanggal` date NOT NULL,
  `gaji_total` int(11) NOT NULL,
  `gaji_pegawai` int(11) DEFAULT NULL,
  `gaji_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `jabatan_id` int(11) NOT NULL,
  `jabatan_nama` varchar(100) NOT NULL,
  `jabatan_gaji` int(11) NOT NULL,
  `jabatan_bagian` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`jabatan_id`, `jabatan_nama`, `jabatan_gaji`, `jabatan_bagian`) VALUES
(2, 'Operator', 3147036, 2),
(6, 'Operator', 3147036, 1),
(7, 'Operator', 3147036, 4),
(8, 'Operator', 3147036, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `pegawai_id` int(11) NOT NULL,
  `pegawai_nip` varchar(20) NOT NULL,
  `pegawai_nama` varchar(200) NOT NULL,
  `pegawai_kontak` varchar(15) NOT NULL,
  `pegawai_rekening` varchar(50) NOT NULL,
  `pegawai_jabatan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `potongan`
--

CREATE TABLE `potongan` (
  `potongan_id` int(11) NOT NULL,
  `potongan_nama` varchar(100) NOT NULL,
  `potongan_keterangan` text NOT NULL,
  `potongan_jumlah` int(11) NOT NULL,
  `potongan_pegawai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(100) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_role` enum('admin','pimpinan') NOT NULL,
  `user_kontak` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_username`, `user_password`, `user_role`, `user_kontak`) VALUES
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '081288332922'),
(30, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '082186427595');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bagian`
--
ALTER TABLE `bagian`
  ADD PRIMARY KEY (`bagian_id`);

--
-- Indeks untuk tabel `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`gaji_id`),
  ADD KEY `gaji_pegawai` (`gaji_pegawai`),
  ADD KEY `gaji_user` (`gaji_user`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`jabatan_id`),
  ADD KEY `jabatan_bagian` (`jabatan_bagian`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`pegawai_id`),
  ADD KEY `pegawai_jabatan` (`pegawai_jabatan`);

--
-- Indeks untuk tabel `potongan`
--
ALTER TABLE `potongan`
  ADD PRIMARY KEY (`potongan_id`),
  ADD KEY `potongan_pegawai` (`potongan_pegawai`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bagian`
--
ALTER TABLE `bagian`
  MODIFY `bagian_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `gaji`
--
ALTER TABLE `gaji`
  MODIFY `gaji_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `jabatan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `pegawai_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `potongan`
--
ALTER TABLE `potongan`
  MODIFY `potongan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `gaji`
--
ALTER TABLE `gaji`
  ADD CONSTRAINT `gaji_ibfk_1` FOREIGN KEY (`gaji_pegawai`) REFERENCES `pegawai` (`pegawai_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `gaji_ibfk_2` FOREIGN KEY (`gaji_user`) REFERENCES `user` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD CONSTRAINT `jabatan_ibfk_1` FOREIGN KEY (`jabatan_bagian`) REFERENCES `bagian` (`bagian_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`pegawai_jabatan`) REFERENCES `jabatan` (`jabatan_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `potongan`
--
ALTER TABLE `potongan`
  ADD CONSTRAINT `potongan_ibfk_1` FOREIGN KEY (`potongan_pegawai`) REFERENCES `pegawai` (`pegawai_id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
