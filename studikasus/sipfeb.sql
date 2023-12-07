-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2023 at 02:08 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipfeb`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `no_hp` int NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `no_hp`, `alamat`) VALUES
(1, 'isna', 22345, 'semadar');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int NOT NULL,
  `id_user` int NOT NULL,
  `id_produk` int NOT NULL,
  `tanggal_pesanan` date NOT NULL,
  `jumlah_barang` int NOT NULL,
  `total_harga` int NOT NULL,
  `status_produk` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status_pembayaran` varchar(100) NOT NULL,
  `custom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_user`, `id_produk`, `tanggal_pesanan`, `jumlah_barang`, `total_harga`, `status_produk`, `status_pembayaran`, `custom`) VALUES
(891222970, 722220101, 16, '2023-11-29', 2, 6000000, 'belum dikirim', 'belum lunas', 'tanpa ada ukiran ukiran'),
(1415598689, 1431580348, 16, '2023-11-30', 2, 6000000, 'belum dikirim', 'belum lunas', 'berwarna putih dan hitam '),
(1502600971, 1075958018, 21, '2023-12-05', 111, 135753, 'belum dikirim', 'belum lunas', 'berwarna putih dan hitam ');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `harga` int NOT NULL,
  `foto` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `jenis`, `harga`, `foto`) VALUES
(13, 'kasur', 'busa', 1500, 'kasur.jpg'),
(16, 'kursi', 'kayu jati', 30000, 'kursi kayu.jpg'),
(17, 'paket ', 'jenis', 2500, 'paket1.jpg\r\n'),
(21, 'almari', 'kayu', 1223, 'almari.jpg\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `alamat`, `password`, `level`) VALUES
(1, 'nur indah', 'indah', 'kebonbaru', '12334', 'pemilik'),
(2, 'ari', 'ariii', 'cilacap', '11133', 'pegawai'),
(3, 'isna', 'idma', 'semadar', '22321', 'pelanggan\r\n'),
(5, 'Isna Dewi Malika Arum', 'aku', 'cilacap', '111', 'pelanggan'),
(16, 'rose', 'rose', 'clp', '12345', 'pelanggan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1938265500;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
