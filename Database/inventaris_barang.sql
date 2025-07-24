-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jul 2025 pada 03.59
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventaris_barang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `kondisi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `kategori`, `jumlah`, `kondisi`) VALUES
(1, 'Leptop Acer', 'Elektronik', 3, 'Baik'),
(3, 'Hp Iphone', 'Elektronik', 2, 'Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `total_barang` int(11) DEFAULT NULL,
  `barang_masuk` int(11) DEFAULT NULL,
  `barang_keluar` int(11) DEFAULT NULL,
  `total_peminjaman` int(11) DEFAULT NULL,
  `total_pengembalian` int(11) DEFAULT NULL,
  `status_verifikasi` varchar(50) DEFAULT NULL,
  `tanggal_verifikasi` date DEFAULT NULL,
  `diverifikasi_oleh` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id`, `total_barang`, `barang_masuk`, `barang_keluar`, `total_peminjaman`, `total_pengembalian`, `status_verifikasi`, `tanggal_verifikasi`, `diverifikasi_oleh`) VALUES
(1, 120, 45, 32, 12, 8, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_aktivitas`
--

CREATE TABLE `log_aktivitas` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `aktivitas` text DEFAULT NULL,
  `waktu` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `log_aktivitas`
--

INSERT INTO `log_aktivitas` (`id`, `username`, `role`, `aktivitas`, `waktu`) VALUES
(1, 'admin', 'admin', 'Login berhasil', '2025-07-23 17:27:25'),
(2, 'admin', 'admin', 'Menambahkan barang baru: Leptop Acer', '2025-07-23 17:28:22'),
(3, 'admin', 'admin', 'Menambahkan barang baru: Hp Iphone', '2025-07-23 17:28:44'),
(4, 'admin', 'admin', 'Menambahkan barang baru: Hp Iphone', '2025-07-23 17:29:16'),
(5, 'admin', 'admin', 'Logout', '2025-07-23 17:30:38'),
(6, 'admin', 'admin', 'Login berhasil', '2025-07-23 17:33:34'),
(7, 'admin', 'admin', 'Logout', '2025-07-23 17:34:15'),
(8, 'admin', 'admin', 'Login berhasil', '2025-07-23 17:45:56'),
(9, 'admin', 'admin', 'Logout', '2025-07-23 17:46:03'),
(10, 'admin', 'admin', 'Login berhasil', '2025-07-23 17:58:31'),
(11, 'admin', 'admin', 'Logout', '2025-07-23 17:59:20'),
(12, 'manajer', 'manajer', 'Login berhasil', '2025-07-23 18:05:35'),
(13, 'manajer', 'manajer', 'Logout', '2025-07-23 18:06:01'),
(14, 'admin', 'admin', 'Login berhasil', '2025-07-23 19:06:04'),
(15, 'admin', 'admin', 'Logout', '2025-07-23 19:24:14'),
(16, 'admin', 'admin', 'Login berhasil', '2025-07-23 19:24:17'),
(17, 'admin', 'admin', 'Logout', '2025-07-23 19:27:21'),
(18, 'manajer', 'manajer', 'Login berhasil', '2025-07-23 19:27:30'),
(19, 'manajer', 'manajer', 'Logout', '2025-07-23 19:27:43'),
(20, 'admin', 'admin', 'Login berhasil', '2025-07-23 19:27:48'),
(21, 'admin', 'admin', 'Logout', '2025-07-23 19:28:41'),
(22, 'admin', 'admin', 'Login berhasil', '2025-07-23 19:43:09'),
(23, 'admin', 'admin', 'Logout', '2025-07-23 19:43:16'),
(24, 'manajer', 'manajer', 'Login berhasil', '2025-07-23 20:02:46'),
(25, 'manajer', 'manajer', 'Logout', '2025-07-23 20:03:06'),
(26, 'manajer', 'manajer', 'Login berhasil', '2025-07-23 20:07:44'),
(27, 'manajer', 'manajer', 'Logout', '2025-07-23 20:08:01'),
(28, 'admin', 'admin', 'Login berhasil', '2025-07-23 20:08:39'),
(29, 'admin', 'admin', 'Logout', '2025-07-23 20:09:13'),
(30, 'admin', 'admin', 'Login berhasil', '2025-07-23 20:17:18'),
(31, 'admin', 'admin', 'Logout', '2025-07-23 20:17:23'),
(32, 'admin', 'admin', 'Login berhasil', '2025-07-23 21:13:26'),
(33, 'admin', 'admin', 'Logout', '2025-07-23 21:13:36'),
(34, 'manajer', 'manajer', 'Login berhasil', '2025-07-23 21:47:47'),
(35, 'manajer', 'manajer', 'Logout', '2025-07-23 21:48:45'),
(36, 'admin', 'admin', 'Login berhasil', '2025-07-23 21:49:00'),
(37, 'admin', 'admin', 'Logout', '2025-07-23 22:05:15'),
(38, 'admin', 'admin', 'Login berhasil', '2025-07-23 22:05:59'),
(39, 'admin', 'admin', 'Logout', '2025-07-23 22:06:04'),
(40, 'admin', 'admin', 'Login berhasil', '2025-07-23 22:12:21'),
(41, 'admin', 'admin', 'Logout', '2025-07-23 23:39:25'),
(42, 'admin', 'admin', 'Login berhasil', '2025-07-23 23:53:16'),
(43, 'admin', 'admin', 'Logout', '2025-07-23 23:53:24'),
(44, 'manajer', 'manajer', 'Login berhasil', '2025-07-24 00:00:27'),
(45, 'manajer', 'manajer', 'Logout', '2025-07-24 00:01:03'),
(46, 'admin', 'admin', 'Login berhasil', '2025-07-24 00:17:42'),
(47, 'admin', 'admin', 'Logout', '2025-07-24 00:17:47'),
(48, 'admin', 'admin', 'Login berhasil', '2025-07-24 00:29:54'),
(49, 'admin', 'admin', 'Logout', '2025-07-24 00:30:01'),
(50, 'admin', 'admin', 'Login berhasil', '2025-07-24 01:28:29'),
(51, 'admin', 'admin', 'Logout', '2025-07-24 01:28:35'),
(52, 'manajer', 'manajer', 'Login berhasil', '2025-07-24 01:29:02'),
(53, 'manajer', 'manajer', 'Logout', '2025-07-24 01:29:07'),
(54, 'admin', 'admin', 'Login berhasil', '2025-07-24 01:45:50'),
(55, 'admin', 'admin', 'Logout', '2025-07-24 01:45:58'),
(56, 'admin', 'admin', 'Login berhasil', '2025-07-24 02:09:26'),
(57, 'admin', 'admin', 'Logout', '2025-07-24 02:25:10'),
(58, 'manajer', 'manajer', 'Login berhasil', '2025-07-24 02:25:52'),
(59, 'manajer', 'manajer', 'Logout', '2025-07-24 02:26:07'),
(60, 'admin', 'admin', 'Login berhasil', '2025-07-24 02:28:31'),
(61, 'admin', 'admin', 'Logout', '2025-07-24 02:28:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `nama_peminjam` varchar(100) DEFAULT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `tanggal_pinjam` date DEFAULT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `nama_peminjam`, `nama_barang`, `tanggal_pinjam`, `tanggal_kembali`, `status`) VALUES
(1, 'Omhy Raint', 'Hp Iphone', '2025-07-23', '2025-07-29', 'Dipinjam'),
(2, 'Raina', 'Leptop Acer', '2025-07-22', '2025-07-30', 'Dipinjam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id` int(11) NOT NULL,
  `nama_peminjam` varchar(100) DEFAULT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `tanggal_pinjam` date DEFAULT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `kondisi_barang` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengembalian`
--

INSERT INTO `pengembalian` (`id`, `nama_peminjam`, `nama_barang`, `tanggal_pinjam`, `tanggal_kembali`, `kondisi_barang`) VALUES
(1, 'Omhy Raint', 'Hp Iphone', '2025-07-23', '2025-07-29', 'Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created_at`, `updated_at`) VALUES
(4, 'admin', '$2y$10$7Ypp3DxJ2Z7HSeNS/PLMFuJBc/XF3Ipp4yRmOtcu.oV3hjJquovkC', 'admin', '2025-07-23 17:44:24', '2025-07-23 17:44:24'),
(7, 'manajer', '$2y$10$4NC/MR3ArzZY4BZa1OFeEeU34svkFZceBRAPQRIQMJKp4AcC3YOZS', 'manajer', '2025-07-23 18:04:44', '2025-07-23 18:04:44');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `log_aktivitas`
--
ALTER TABLE `log_aktivitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `log_aktivitas`
--
ALTER TABLE `log_aktivitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
