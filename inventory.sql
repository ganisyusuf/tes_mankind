-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 06 Mar 2019 pada 05.08
-- Versi Server: 5.5.25a
-- Versi PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `inventory`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE IF NOT EXISTS `jenis` (
  `kode_jenis` varchar(50) NOT NULL,
  `nama_jenis` varchar(100) NOT NULL,
  PRIMARY KEY (`kode_jenis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`kode_jenis`, `nama_jenis`) VALUES
('R001', 'Rotan'),
('R002', 'Kayu'),
('R003', 'Bambu'),
('R004', 'Besi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `kode_produk` varchar(50) NOT NULL,
  `kode_jenis` varchar(50) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `stok` int(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `type_produk` varchar(100) NOT NULL,
  PRIMARY KEY (`kode_produk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`kode_produk`, `kode_jenis`, `nama_produk`, `stok`, `harga`, `type_produk`) VALUES
('DFGHJK', '', 'XFCVBN', 300, 10000, '2 cm'),
('P001', '', 'Kursi Kayu', 100, 1000000, '2 cm x 30 xm'),
('P002', '', 'Kursi Bambu', 355, 150000, '2 cm x 15 cm'),
('P003', '', 'Meja Besi', 400, 2500000, '50 cm x 50 cm'),
('P004', '', 'Kursi Rotan', 300, 2000000, '100 cm x 500 cm'),
('P010', '', 'Kursi ', 100, 80000, '2 cm x 30 xm'),
('P011', '', 'Kursi GOYANG', 100, 3000, '2 cm x 30 xm'),
('P014', 'R004', 'Meja Besi', 300, 10000, '2 cm  x 10 cm'),
('P015', 'R003', 'MEJA BAMBU', 400, 260000, '50 cm x 30 xm x 50cm'),
('P019', 'R001', 'MEJA ROTAN', 300, 3000000, '100 cm x 100 cm'),
('SRDFGHJK', '', 'CVGFN', 100, 3000000, '2 cm x 30 xm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id` varchar(20) NOT NULL,
  `id_user` int(20) NOT NULL,
  `kode_produk` varchar(30) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `qty` int(20) NOT NULL,
  `total_harga` int(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `stock_new` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_user`, `kode_produk`, `tanggal`, `qty`, `total_harga`, `status`, `stock_new`) VALUES
('100000000', 0, 'BWG10', '0000-00-00', 1000, 0, 0, 0),
('16669420536083', 0, 'P003', '29-11-2019', 200, 500000000, 0, 300),
('1666942053608761', 0, 'GNS', '0000-00-00', 200, 0, 0, 0),
('32423432', 0, 'P004', '03/19/2019', 200, 0, 1, 300),
('328624687648961', 0, 'KRY', '0000-00-00', 300, 0, 0, 0),
('3423432423', 0, 'P002', '0000-00-00', 50, 0, 1, 250),
('34324324', 0, 'P003', '0000-00-00', 200, 0, 1, 500),
('3434324242', 0, 'UCU[', '0000-00-00', 600, 0, 0, 0),
('43534534534', 0, 'P002', '0000-00-00', 50, 7500000, 0, 200),
('500000', 0, 'P001', '0000-00-00', 20, 0, 1, 0),
('7432423', 0, 'BWG10', '0000-00-00', 800, 0, 0, 0),
('9000044433', 0, 'P002', '03/04/2019', 80, 0, 1, 355),
('9090909009', 0, 'KRY', '0000-00-00', 700, 0, 0, 0),
('909898', 0, 'P001', '0000-00-00', 50, 50000000, 0, 90),
('989343w43w', 0, 'P004', '03/11/2019', 200, 400000000, 0, 100),
('99999', 0, 'P002', '0000-00-00', 5, 750000, 0, 275);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`) VALUES
(1, 'Ganis', 'Ganis123', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
