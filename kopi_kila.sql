-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2023 at 05:26 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kopi_kila`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_booking`
--

CREATE TABLE `tb_booking` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nomor_hp` varchar(20) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `waktu` varchar(6) NOT NULL,
  `jumlah_orang` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_booking`
--

INSERT INTO `tb_booking` (`id`, `nama`, `username`, `email`, `nomor_hp`, `tanggal`, `waktu`, `jumlah_orang`, `pesan`, `status`) VALUES
(8, 'Bayu Satrio', 'bayu123', 'bayu123@gmail.com', '085156903721', '2023-07-08', '18:00', '14', 'Saya memesan tempat untuk acara arisan dengan jumlah tamu sebanyak 14 orang.', 'batal');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `nomor_hp` varchar(20) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal_pesan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_contact`
--

INSERT INTO `tb_contact` (`id`, `nama`, `email`, `nomor_hp`, `pesan`, `tanggal_pesan`) VALUES
(3, 'Ghifari', 'gifari@gmail.com', '089677058511', 'Apakah disini saya bisa memesan makanan dan minuman untuk keperluan acara arisan ?', '2023-06-08 13:16:36');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id_invoice` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nomor_hp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `jasa` varchar(15) NOT NULL,
  `metode_bayar` varchar(15) NOT NULL,
  `tanggal_pesan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id_invoice`, `nama`, `username`, `email`, `nomor_hp`, `alamat`, `jasa`, `metode_bayar`, `tanggal_pesan`) VALUES
(19, 'Riki Fahreza', 'riki123', 'riki123@gmail.com', '089677058511', 'Jl. Merbabu, DF 1 NO 3', 'Kila Express', 'Tunai', '2023-06-08 20:05:42'),
(20, 'Farel Fahreza', 'farel321', 'farel@gmail.com', '089677053521', 'JL. Pangrango, blok df 1 no 1. Jatimekar', 'Kila Express', 'Tunai', '2023-06-08 20:09:53'),
(21, 'Arvin Rizki', 'arvin321', 'arvin@gmail.com', '08128363169', 'JL. Semeru Raya, DF 1 No 4', 'Kila Express', 'Tunai', '2023-06-08 20:11:37'),
(22, 'Bayu Satrio', 'bayu123', 'bayu123@gmail.com', '089677058511', 'JL. Pondok Indah Permai DF 2 No 55', 'Kila Express', 'Tunai', '2023-06-11 13:17:32'),
(23, 'User', 'user', 'user123@gmail.com', '0812483565', 'JL. jatiasih nomor 5', 'Kila Express', 'Tunai', '2023-07-17 20:53:51'),
(24, 'Riki Fahreza', 'riki123', 'riki123@gmail.com', '089677058511', 'Jl. Merbabu, DF 1 NO 3', 'Kila Express', 'Tunai', '2023-06-27 13:00:17'),
(25, 'Riki Fahreza', 'riki123', 'riki123@gmail.com', '089677058511', 'Jl. Merbabu, DF 1 NO 3', 'Kila Express', 'Tunai', '2023-06-28 14:05:54'),
(26, 'Riki Fahreza', 'riki123', 'riki123@gmail.com', '089677058511', 'Jl. Merbabu, DF 1 NO 3', 'Kila Express', 'Tunai', '2023-07-03 20:49:52');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(150) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(11) NOT NULL,
  `ongkir` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_produk`, `nama_produk`, `jumlah`, `harga`, `ongkir`) VALUES
(1, 1, 21, 'Makanan Mantab', 1, 10000, ''),
(2, 1, 22, 'Minuman Mantab', 1, 10000, ''),
(3, 2, 21, 'Makanan Mantab', 1, 10000, ''),
(4, 3, 21, 'Makanan Mantab', 1, 10000, ''),
(5, 4, 21, 'Makanan Mantab', 1, 10000, ''),
(6, 5, 21, 'Makanan Mantab', 1, 10000, ''),
(7, 6, 7, 'es kopi susu coklat kila', 1, 12000, ''),
(8, 6, 14, 'Kue cookies', 1, 15000, ''),
(9, 7, 1, 'Mie goreng bakso geprek', 1, 10000, ''),
(10, 8, 5, 'nasi bakso geprek', 1, 15000, ''),
(11, 9, 5, 'nasi bakso geprek', 1, 15000, ''),
(12, 10, 3, 'mie gorang ayam geprek', 1, 15000, ''),
(13, 11, 6, 'es kopi areng kila', 2, 8000, ''),
(14, 11, 5, 'nasi bakso geprek', 2, 15000, ''),
(15, 12, 1, 'Mie goreng bakso geprek', 1, 10000, ''),
(16, 12, 2, 'ayam goreng tanpa nasi', 1, 15000, ''),
(17, 13, 37, 'green tea latte botolan 250ml', 2, 20000, ''),
(18, 14, 11, 'Dimsun', 1, 15000, ''),
(19, 14, 10, 'kopi hitam usa', 1, 12000, ''),
(20, 15, 1, 'Mie goreng bakso geprek', 1, 10000, ''),
(21, 16, 1, 'Mie goreng bakso geprek', 1, 10000, ''),
(22, 17, 26, 'mie goreng ayam geprek', 1, 23000, ''),
(23, 17, 15, 'pisang goreng', 1, 8000, ''),
(24, 17, 2, 'ayam goreng', 1, 15000, ''),
(25, 17, 5, 'nasi bakso geprek', 1, 15000, ''),
(26, 17, 37, 'green tea latte botolan 250ml', 1, 20000, ''),
(27, 18, 1, 'Mie goreng bakso geprek', 1, 10000, ''),
(28, 19, 1, 'Mie goreng bakso geprek', 1, 10000, ''),
(29, 19, 2, 'ayam goreng', 2, 15000, ''),
(30, 19, 37, 'green tea latte botolan 250ml', 2, 20000, ''),
(31, 20, 1, 'Mie goreng bakso geprek', 1, 10000, ''),
(32, 20, 11, 'Dimsun', 1, 15000, ''),
(33, 20, 8, 'es kopi susu kila', 1, 15000, ''),
(34, 21, 1, 'Mie goreng bakso geprek', 1, 10000, ''),
(35, 22, 2, 'ayam goreng', 1, 15000, ''),
(36, 22, 7, 'es kopi susu coklat kila', 1, 12000, ''),
(37, 23, 1, 'Mie goreng bakso geprek', 1, 10000, ''),
(38, 24, 1, 'Mie goreng bakso geprek', 1, 10000, ''),
(39, 25, 25, 'mie goreng spesial', 1, 15000, ''),
(40, 26, 2, 'ayam goreng', 1, 15000, ''),
(41, 26, 6, 'es kopi areng kila', 1, 8000, '');

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_produk SET stok = stok-NEW.jumlah
    WHERE id_produk = NEW.id_produk;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(150) NOT NULL,
  `keterangan` text NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `kategori2` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nama_produk`, `keterangan`, `kategori`, `kategori2`, `harga`, `stok`, `gambar`) VALUES
(1, 'Mie goreng bakso geprek', '               ', 'Makanan', 'Biasa', 10000, 141, 'mie-goren-bakso-geprek1.jpg'),
(2, 'ayam goreng', 'Tidak ada nasi dalam pembelian ini ', 'Makanan', 'Biasa', 15000, 144, 'ayam-geprek-tanpa-nasi.jpg'),
(5, 'nasi bakso geprek', '   ', 'Makanan', 'Biasa', 15000, 149, 'nasi-bakso-geprek.jpg'),
(6, 'es kopi areng kila', ' ', 'Minuman', 'Populer', 8000, 149, 'es-kopi-areng-kila.jpg'),
(7, 'es kopi susu coklat kila', '', 'Minuman', 'Biasa', 12000, 149, 'es-kopi-susu-coklat-kila.jpg'),
(8, 'es kopi susu kila', ' ', 'Minuman', 'Populer', 15000, 149, 'es-kopi-susu-kila.jpg'),
(9, 'es kopi susu kila light', '', 'Minuman', 'Populer', 12000, 150, 'es-kopi-susu-kila-light.jpg'),
(10, 'kopi hitam usa', '', 'Minuman', 'Biasa', 12000, 149, 'kopi-hitam-usa.jpg'),
(11, 'Dimsun', '    ', 'Cemilan', 'Populer', 15000, 148, 'dimsum.jpg'),
(12, 'Kebab mini', '', 'Cemilan', 'Biasa', 15000, 50, 'kebab-mini.jpg'),
(13, 'Kentang goreng mayo', '', 'Cemilan', 'Pilih Kategori', 15000, 150, 'kentang-goreng-mayo.jpg'),
(14, 'Kue cookies', '', 'Cemilan', 'Biasa', 15000, 150, 'kukis.jpg'),
(15, 'pisang goreng', '', 'Cemilan', 'Biasa', 8000, 149, 'pisang-goreng.jpg'),
(17, 'kopi susu kila panas', '', 'Minuman', 'Pilih Kategori', 15000, 150, 'kopi-susu-kila-panas.jpg'),
(18, 'kopi cokelat kila panas', '', 'Minuman', 'Biasa', 15000, 150, 'kopi-susu-kila-panas1.jpg'),
(19, 'kopi susu kila light panas', '', 'Minuman', 'Biasa', 15000, 150, 'kopi-susu-kila-light-panas.jpg'),
(20, 'kopi cokelat kila light panas', '', 'Minuman', 'Biasa', 15000, 150, 'kopi-cokelat-kila-light-panas.jpg'),
(21, 'kopi areng kila panas', '', 'Minuman', 'Biasa', 15000, 150, 'kopi-areng-kila-panas.jpg'),
(22, 'mie rebus telur susu', '  ', 'Makanan', 'Biasa', 15000, 150, 'mie-rebus-telur-susu.jpg'),
(23, 'bakso geprek', ' ', 'Makanan', 'Biasa', 18000, 150, 'bakso-geprek.jpg'),
(24, 'pizza mie', ' ', 'Makanan', 'Populer', 15000, 150, 'pizza-mie.jpg'),
(25, 'mie goreng spesial', '', 'Makanan', 'Biasa', 15000, 149, 'mie-goreng-spesial.jpg'),
(26, 'mie goreng ayam geprek', ' ', 'Makanan', 'Populer', 23000, 149, 'mie-goreng-ayam-geprek.jpg'),
(28, 'es green tea', ' ', 'Minuman', 'Biasa', 18000, 150, 'es-green-tea.jpg'),
(29, 'es cokelat susu', ' ', 'Minuman', 'Biasa', 18000, 150, 'es-cokelat-susu.jpg'),
(32, 'es moka jeli', ' ', 'Minuman', 'Biasa', 18000, 150, 'es-moka-jeli.jpg'),
(33, 'es yakult lemon', '', 'Minuman', 'Biasa', 18000, 150, 'es-yakult-lemon.jpg'),
(34, 'kopi susu kila botolan 250ml', ' ', 'Minuman', 'Biasa', 20000, 150, 'kopi-susu-kila-botolan-250ml.jpg'),
(35, 'kopi cokelat kila botolan 250ml', ' ', 'Minuman', 'Biasa', 20000, 150, 'kopi-cokelat-kila-botolan-250ml.jpg'),
(37, 'green tea latte botolan 250ml', '   ', 'Minuman', 'Biasa', 20000, 145, 'green-tea-latte-botolan-250ml.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_testimoni`
--

CREATE TABLE `tb_testimoni` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(150) NOT NULL,
  `jenis_pekerjaan` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_testimoni`
--

INSERT INTO `tb_testimoni` (`id_pelanggan`, `nama_pelanggan`, `jenis_pekerjaan`, `keterangan`, `gambar`) VALUES
(7, 'Lionel Messi', 'Pemain Sepak Bola', 'Saya benar-benar terkesan dengan kecepatan pengiriman produk dari perusahaan ini. Pesanan saya tiba tepat waktu dan dalam kondisi yang baik', 'lionel-messi.jpg'),
(8, 'Alex Bhizer', 'Pelajar', 'Enak bener kopinya berasa santuy bradeerr. Lain kali kesini lagi yaa    ', 'katak-bhizer.jpg'),
(9, 'Arabella', 'Mahasiswa', 'Suasananya asri banget, menunya ramah di kantong pelajar dan tempatnya keren pokoknya instagramable bgt. ', 'Arabella.jpg'),
(10, 'Arvin Rizki', 'Mahasiswa', 'Menu bervariasi dan enak enak, lingkungan asri dan pemandangan hijau sangat oke.', 'Arvin_Rizki.jpg'),
(11, 'Dea Afrizal', 'Youtuber Programmer', 'Banyak spot foto, tempat nyaman, ada wifi dan adem banyak pepohonan, makanan enak dan harga terjangkau. ', 'Dea_afrizal.jpg'),
(12, 'Andina', 'Mahasiswa', 'Pengiriman dari restoran ini sangat mudah dan praktis. Saya bisa memesan minuman favorit saya melalui aplikasi. Pengirimannya juga tepat waktu dan tanpa masalah ', 'Andina1.jpg'),
(13, 'Chaesa', 'Karyawan', 'Saya sangat terkesan dengan kualitas pengiriman dari restoran ini. Makanannya tetap segar dan hangat meskipun sudah diberikan pada pengemudi pengiriman. Saya pasti akan memesan lagi dari restoran ini di masa depan ', 'Chaesa1.jpg'),
(14, 'Dwayne Jhonson', 'Aktor', ' Kopi hitam enak banget bro      ', 'dwayne_jhonson.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `nomor_hp` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `email`, `username`, `alamat`, `nomor_hp`, `password`, `role_id`) VALUES
(1, 'admin', '', 'admin', 'jl. semeru raya', '089677058522', '1234', 1),
(7, 'Riki Fahreza', 'riki123@gmail.com', 'riki123', 'Jl. Merbabu, DF 1 NO 3', '089677058511', '123', 2),
(8, 'Arvin Rizki', 'arvin@gmail.com', 'arvin321', 'JL. Semeru Raya, DF 1 No 4', '08128363169', '123', 2),
(9, 'Farel Fahreza', 'farel@gmail.com', 'farel321', 'JL. Pangrango, blok df 1 no 1. Jatimekar', '089677053521', '123', 2),
(10, 'Bayu Satrio', 'bayu123@gmail.com', 'bayu123', 'JL. Pondok Indah Permai DF 2 No 55', '089677058511', '12345', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id_invoice`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_testimoni`
--
ALTER TABLE `tb_testimoni`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_booking`
--
ALTER TABLE `tb_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id_invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tb_testimoni`
--
ALTER TABLE `tb_testimoni`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
