-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 03:59 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siperpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `buku_id` int(10) NOT NULL,
  `no_buku` bigint(19) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun_terbit` date NOT NULL,
  `jenis_buku` enum('Buku Pelajaran','Ensiklopedia','Novel','Majalah') NOT NULL,
  `jumlah_buku` int(10) NOT NULL,
  `status_buku` enum('Ada','Sedang Dipinjam','Hilang') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`buku_id`, `no_buku`, `judul_buku`, `pengarang`, `penerbit`, `tahun_terbit`, `jenis_buku`, `jumlah_buku`, `status_buku`) VALUES
(1, 12901, 'Teknologi Informasi dan Komunikasi', 'Doni Heriyawan', 'Yudhistira', '2019-07-12', 'Buku Pelajaran', 3, 'Ada'),
(2, 12902, 'Teknologi Informasi dan Komunikasi', 'Doni Heriyawan', 'Yudhistira', '2019-07-12', 'Buku Pelajaran', 3, 'Sedang Dipinjam'),
(4, 12903, 'Teknologi Informasi dan Komunikasi', 'Doni Heriyawan', 'Yudhistira', '2019-07-12', 'Buku Pelajaran', 3, 'Ada'),
(5, 24151, 'Fisika Kelas 8', 'Supriadi', 'Tiga Serangkai', '2019-12-19', 'Buku Pelajaran', 2, 'Sedang Dipinjam'),
(6, 24152, 'Fisika Kelas 8', 'Supriadi', 'Tiga Serangkai', '2019-12-19', 'Buku Pelajaran', 2, 'Sedang Dipinjam'),
(7, 23123, 'Pantang Menyerah', 'Ahmad Dhani', 'Zes Publishing', '2020-09-12', 'Novel', 1, 'Sedang Dipinjam'),
(9, 65327, 'Ensiklopedia Tanaman Herbal', 'Rini Sumartini', 'Edyy Publishing', '2019-09-09', 'Ensiklopedia', 1, 'Ada');

-- --------------------------------------------------------

--
-- Table structure for table `denda`
--

CREATE TABLE `denda` (
  `denda_id` int(10) NOT NULL,
  `nomor_induk_siswa` bigint(19) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `no_buku` bigint(19) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `lama_keterlambatan` varchar(10) NOT NULL,
  `jumlah_denda` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `denda`
--

INSERT INTO `denda` (`denda_id`, `nomor_induk_siswa`, `nama_siswa`, `kelas`, `no_buku`, `tanggal_peminjaman`, `tanggal_pengembalian`, `lama_keterlambatan`, `jumlah_denda`) VALUES
(1, 78412, 'Dini Julia Putri', '7A', 19042, '2021-11-16', '2021-11-30', '7 Hari', 14000),
(2, 95152, 'Siti Syakila', '8B', 98762, '2021-02-12', '2021-02-23', '4 Hari', 8000),
(5, 76415, 'Irgie Rachmat Fachrezi', '7A', 98621, '2021-02-12', '2021-02-22', '3 Hari', 6000);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman_buku`
--

CREATE TABLE `peminjaman_buku` (
  `pinjam_id` int(10) NOT NULL,
  `nomor_induk_siswa` bigint(19) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `no_buku` bigint(19) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun_terbit` date NOT NULL,
  `jenis_buku` enum('Buku Pelajaran','Ensiklopedia','Novel','Majalah') NOT NULL,
  `tanggal_peminjaman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman_buku`
--

INSERT INTO `peminjaman_buku` (`pinjam_id`, `nomor_induk_siswa`, `nama_siswa`, `kelas`, `no_buku`, `judul_buku`, `penerbit`, `tahun_terbit`, `jenis_buku`, `tanggal_peminjaman`) VALUES
(17, 76412, 'Muhammad Fauzi Fayyad', '8E', 99023, 'Matematika Kelas 8', 'Erlangga', '2018-04-07', 'Buku Pelajaran', '2021-07-19'),
(18, 76415, 'Irgie Rachmat Fachrezi', '7A', 98012, 'Ensiklopedia Mineral', 'Tiga Serangkai', '2017-06-07', 'Ensiklopedia', '2021-08-07'),
(19, 65434, 'Saniah Afiqoh', '9A', 88972, 'Earth - Edisi Inggris BUMI', 'Gramedia Pustaka Utama', '2020-12-07', 'Novel', '2021-08-19');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian_buku`
--

CREATE TABLE `pengembalian_buku` (
  `kembali_id` int(10) NOT NULL,
  `nomor_induk_siswa` bigint(19) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `no_buku` bigint(19) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun_terbit` date NOT NULL,
  `jenis_buku` enum('Buku Pelajaran','Ensiklopedia','Novel','Majalah') NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengembalian_buku`
--

INSERT INTO `pengembalian_buku` (`kembali_id`, `nomor_induk_siswa`, `nama_siswa`, `kelas`, `no_buku`, `judul_buku`, `penerbit`, `tahun_terbit`, `jenis_buku`, `tanggal_peminjaman`, `tanggal_pengembalian`) VALUES
(5, 89812, 'Bayu Setiawan', '8B', 71235, 'Ensiklopedia Hewan Laut', 'Gramedia Pustaka Utama', '2020-08-12', 'Ensiklopedia', '2021-10-07', '2021-10-14'),
(6, 87611, 'Fajar Kurniawan', '9C', 26152, '5 cm', 'Grasindo', '2005-05-07', 'Novel', '2020-12-19', '2020-12-26'),
(8, 76412, 'Muhammad Fauzi Fayyad', '8E', 78891, 'Negeri 5 Menara', 'Gramedia Pustaka Utama', '2009-06-01', 'Novel', '2021-04-12', '2021-04-19');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `siswa_id` int(10) NOT NULL,
  `nomor_induk_siswa` bigint(19) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `kelas` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`siswa_id`, `nomor_induk_siswa`, `nama_siswa`, `jenis_kelamin`, `kelas`) VALUES
(1, 76412, 'Muhammad Fauzi Fayyad', 'Laki-laki', '8E'),
(2, 76415, 'Irgie Rachmat Fachrezi', 'Laki-laki', '7A'),
(3, 76418, 'Yulia Heriyana Putri', 'Perempuan', '8A'),
(5, 76419, 'Tata Ayunita Pertiwi', 'Perempuan', '9B');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `role` enum('admin','petugas') NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp(),
  `photo` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `full_name`, `phone`, `role`, `last_login`, `photo`, `created_at`, `is_active`) VALUES
(1, 'admin', '$2y$10$kgRZPf7mXjkbBKBBOwkBI.tA8OaKyUvTOsZP7vFuqWrMCnQXC.Se.', 'adminperpus@gmail.com', 'Administrator', '08127658045', 'admin', '2021-12-10 14:51:37', 'Foto.jpg', '2021-11-13 13:27:55', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`buku_id`);

--
-- Indexes for table `denda`
--
ALTER TABLE `denda`
  ADD PRIMARY KEY (`denda_id`);

--
-- Indexes for table `peminjaman_buku`
--
ALTER TABLE `peminjaman_buku`
  ADD PRIMARY KEY (`pinjam_id`);

--
-- Indexes for table `pengembalian_buku`
--
ALTER TABLE `pengembalian_buku`
  ADD PRIMARY KEY (`kembali_id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`siswa_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `buku_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `denda`
--
ALTER TABLE `denda`
  MODIFY `denda_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `peminjaman_buku`
--
ALTER TABLE `peminjaman_buku`
  MODIFY `pinjam_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pengembalian_buku`
--
ALTER TABLE `pengembalian_buku`
  MODIFY `kembali_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `siswa_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
