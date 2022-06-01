-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 10.4.24-MariaDB - mariadb.org binary distribution
-- OS Server:                    Win64
-- HeidiSQL Versi:               11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- membuang struktur untuk table wise.dekorasi
CREATE TABLE IF NOT EXISTS `dekorasi` (
  `id_dekorasi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dekorasi` varchar(256) NOT NULL,
  `deskripsi` varchar(256) NOT NULL,
  `harga_dekorasi` int(11) NOT NULL,
  `foto` varchar(256) NOT NULL,
  PRIMARY KEY (`id_dekorasi`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel wise.dekorasi: ~3 rows (lebih kurang)
/*!40000 ALTER TABLE `dekorasi` DISABLE KEYS */;
INSERT INTO `dekorasi` (`id_dekorasi`, `nama_dekorasi`, `deskripsi`, `harga_dekorasi`, `foto`) VALUES
	(1, 'Islamic', 'pemesanan sudah termasuk tenda biasa, tenda standar, tenda plafond, tenda flat, tenda semi dekor, tenda full dekor.', 10000000, 'islamic_dekor_f.jpg'),
	(2, 'Adat', 'pemesanan sudah termasuk tenda biasa, tenda standar, tenda plafond, tenda flat, tenda semi dekor, tenda full dekor.', 8000000, 'adat_dekor_f.jpg'),
	(3, 'Minimalis', 'pemesanan sudah termasuk tenda biasa, tenda standar, tenda plafond, tenda flat, tenda semi dekor, tenda full dekor.', 6000000, 'minimalis_f.jpg');
/*!40000 ALTER TABLE `dekorasi` ENABLE KEYS */;

-- membuang struktur untuk table wise.dokumentasi
CREATE TABLE IF NOT EXISTS `dokumentasi` (
  `id_dokumentasi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dokumentasi` varchar(128) NOT NULL,
  `deskripsi` varchar(256) NOT NULL,
  `harga_dokumentasi` int(11) NOT NULL,
  `foto` varchar(128) NOT NULL,
  PRIMARY KEY (`id_dokumentasi`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel wise.dokumentasi: ~3 rows (lebih kurang)
/*!40000 ALTER TABLE `dokumentasi` DISABLE KEYS */;
INSERT INTO `dokumentasi` (`id_dokumentasi`, `nama_dokumentasi`, `deskripsi`, `harga_dokumentasi`, `foto`) VALUES
	(1, 'Paket Colorado', '2 Foto Prewedding Pembesaran 20Rp (50 x 70 cm) 16 Buah Foto Prewedding Ukuran 4R + Frame 2 Album Magazine Style 8Rp (20×30) 1 Kl', 10000000, 'pexels-kaique-rocha-243757.jpg'),
	(2, 'Paket Aurora', '1 Album Magazine Style 8Rp (20×30) 1 Box Album Costum 1 DVD Video Dokumentasi Acara 1 Film Cinematic Wedding 1 Pembesaran 16Rp Termasuk Frame Soft Copy Foto ', 5000000, 'pexels-kaique-rocha-243757.jpg'),
	(3, 'Paket Bora Bora', '2 Foto Prewedding Pembesaran 20Rp (50 x 70 cm) 10 Buah Foto Prewedding Ukuran 4R + Frame 2 Album Magazine Style 8Rp (20×30) 1 Klip Prewedding 60 Detik 1 Box Album Costum 1 DVD Video Dokumentasi Acara 1 Film Cinematic Wedding', 7000000, 'pexels-kaique-rocha-243757.jpg');
/*!40000 ALTER TABLE `dokumentasi` ENABLE KEYS */;

-- membuang struktur untuk table wise.gedung
CREATE TABLE IF NOT EXISTS `gedung` (
  `id_gedung` int(11) NOT NULL AUTO_INCREMENT,
  `nama_gedung` varchar(128) NOT NULL,
  `deskripsi` varchar(256) NOT NULL,
  `harga_gedung` int(11) NOT NULL,
  `foto` varchar(128) NOT NULL,
  PRIMARY KEY (`id_gedung`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel wise.gedung: ~3 rows (lebih kurang)
/*!40000 ALTER TABLE `gedung` DISABLE KEYS */;
INSERT INTO `gedung` (`id_gedung`, `nama_gedung`, `deskripsi`, `harga_gedung`, `foto`) VALUES
	(1, 'Hotel Primaya', 'Pemesanan sudah termasuk kursi lipat, kursi chitose, kursi susun, kursi futura, kursi lipat cover, kursi susun kover, kursi cover pita, kursi belajar, kursi VIP, meja, stage, panggung, riging, partisi, flooring, karpet, permadani, kipas angin.', 20000000, 'Gedung_1.jpg'),
	(2, 'Hotel Lagonan', 'Pemesanan sudah termasuk kursi lipat, kursi chitose, kursi susun, kursi futura, kursi lipat cover, kursi susun kover, kursi cover pita, kursi belajar, kursi VIP, meja, stage, panggung, riging, partisi, flooring, karpet, permadani, kipas angin.', 25000000, 'Gedung_2.jpg'),
	(3, 'Villa GreenHouse', 'Pemesanan sudah termasuk kursi lipat, kursi chitose, kursi susun, kursi futura, kursi lipat cover, kursi susun kover, kursi cover pita, kursi belajar, kursi VIP, meja, stage, panggung, riging, partisi, flooring, karpet, permadani, kipas angin.', 28000000, 'Gedung_3.jpg');
/*!40000 ALTER TABLE `gedung` ENABLE KEYS */;

-- membuang struktur untuk table wise.katering
CREATE TABLE IF NOT EXISTS `katering` (
  `id_katering` int(11) NOT NULL AUTO_INCREMENT,
  `nama_katering` varchar(265) NOT NULL,
  `deskripsi` varchar(265) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga_katering` int(11) NOT NULL,
  `foto` varchar(128) NOT NULL,
  PRIMARY KEY (`id_katering`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel wise.katering: ~3 rows (lebih kurang)
/*!40000 ALTER TABLE `katering` DISABLE KEYS */;
INSERT INTO `katering` (`id_katering`, `nama_katering`, `deskripsi`, `jumlah`, `harga_katering`, `foto`) VALUES
	(1, 'Paket 1000 Pax', 'alat catering  Nasi Putih Nasi Goreng Sop Kimlo Ikan Saos Nanas Ayam Bumbu Bali Karedok/Capcay Krupuk Puding Vla Aneka Buah GRATIS Air Mineral', 1000, 40000000, 'katering.jpg'),
	(2, 'Paket 600 Pax', 'alat catering  Nasi Putih Nasi Goreng Sop Kimlo Ikan Saos Nanas Ayam Bumbu Bali Karedok/Capcay Krupuk Puding Vla Aneka Buah GRATIS Air Mineral', 600, 24000000, 'katering.jpg'),
	(3, 'Paket 300 Pax', 'alat catering  Nasi Putih Nasi Goreng Sop Kimlo Ikan Saos Nanas Ayam Bumbu Bali Karedok/Capcay Krupuk Puding Vla Aneka Buah GRATIS Air Mineral', 300, 12000000, 'katering.jpg');
/*!40000 ALTER TABLE `katering` ENABLE KEYS */;

-- membuang struktur untuk table wise.konfirmasi
CREATE TABLE IF NOT EXISTS `konfirmasi` (
  `id_konfirmasi` int(11) NOT NULL AUTO_INCREMENT,
  `id_pemesanan` varchar(20) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `no_rek` varchar(30) NOT NULL,
  `bank` varchar(20) NOT NULL,
  `atas_nama` varchar(30) NOT NULL,
  `foto` varchar(128) NOT NULL,
  PRIMARY KEY (`id_konfirmasi`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel wise.konfirmasi: ~1 rows (lebih kurang)
/*!40000 ALTER TABLE `konfirmasi` DISABLE KEYS */;
INSERT INTO `konfirmasi` (`id_konfirmasi`, `id_pemesanan`, `id_pelanggan`, `no_rek`, `bank`, `atas_nama`, `foto`) VALUES
	(11, '2022-06-10', 13, '12313', 'frima', 'Anwar Ramdhani', 'Screenshot_2022-04-20_0736141.jpeg');
/*!40000 ALTER TABLE `konfirmasi` ENABLE KEYS */;

-- membuang struktur untuk table wise.link
CREATE TABLE IF NOT EXISTS `link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(128) NOT NULL,
  `link` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel wise.link: ~5 rows (lebih kurang)
/*!40000 ALTER TABLE `link` DISABLE KEYS */;
INSERT INTO `link` (`id`, `judul`, `link`, `url`, `image`) VALUES
	(1, 'Wise Wedding - Wedding Organizer', 'Home', 'home', 'Main.svg'),
	(2, 'Portofolio - Wise Wedding', 'Portofolio', 'home/porto', 'Main-2.svg'),
	(3, 'Pelayanan - Wise Wedding', 'Pelayanan', 'home/pelayanan', 'Main-3.svg'),
	(4, 'Kontak - Wise Wedding', 'Kontak', 'home/kontak', 'Main-4.svg'),
	(5, 'Login - Wise Wedding', 'Login', 'home/login', '');
/*!40000 ALTER TABLE `link` ENABLE KEYS */;

-- membuang struktur untuk table wise.link_admin
CREATE TABLE IF NOT EXISTS `link_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel wise.link_admin: ~9 rows (lebih kurang)
/*!40000 ALTER TABLE `link_admin` DISABLE KEYS */;
INSERT INTO `link_admin` (`id`, `link`, `url`, `icon`) VALUES
	(1, 'Dashboard', 'admin/admin/dashboard', 'bx bxs-dashboard'),
	(2, 'Pelanggan', 'admin/admin/pelanggan', 'bx bx-user'),
	(3, 'Pemesanan', 'admin/admin/pemesanan', 'bx bxs-receipt'),
	(4, 'Pembayaran', 'admin/admin/pembayaran', 'bx bx-transfer'),
	(5, 'Gedung', 'admin/admin/gedung', 'bx bx-buildings'),
	(6, 'Rias', 'admin/admin/rias', 'bx bxs-diamond'),
	(7, 'Dokumentasi', 'admin/admin/dokumentasi', 'bx bxs-camera'),
	(8, 'Dekorasi', 'admin/admin/dekorasi', 'bx bx-diamond'),
	(9, 'Katering', 'admin/admin/katering', 'bx bxs-bowl-rice');
/*!40000 ALTER TABLE `link_admin` ENABLE KEYS */;

-- membuang struktur untuk table wise.link_dashboard
CREATE TABLE IF NOT EXISTS `link_dashboard` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(128) NOT NULL,
  `link` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel wise.link_dashboard: ~2 rows (lebih kurang)
/*!40000 ALTER TABLE `link_dashboard` DISABLE KEYS */;
INSERT INTO `link_dashboard` (`id`, `judul`, `link`, `url`) VALUES
	(1, 'Dashboard - Wise Wedding', 'Dashboard', 'dashboard'),
	(2, 'Konfirmasi Pembayaran', 'Konfirmasi Pembayaran', 'konfirmasi');
/*!40000 ALTER TABLE `link_dashboard` ENABLE KEYS */;

-- membuang struktur untuk table wise.pelanggan
CREATE TABLE IF NOT EXISTS `pelanggan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(265) NOT NULL,
  `no_telpon` varchar(20) NOT NULL,
  `role_id` int(11) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `request` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel wise.pelanggan: ~1 rows (lebih kurang)
/*!40000 ALTER TABLE `pelanggan` DISABLE KEYS */;
INSERT INTO `pelanggan` (`id`, `nama`, `email`, `password`, `no_telpon`, `role_id`, `alamat`, `request`) VALUES
	(7, 'Anwar Ramdhani', 'admin@gmail.com', '1011', '082217762', 99, 'Pangandaran', 'no Req'),
	(13, 'test unit', 'sukajadi@gmail.com', '6024', '0182972', 1, 'sukajadi', 'no reqqqqwueas'),
	(14, 'test', 'test@gmail.com', '5220', '019802625252', 1, 'coloraddo', 'adgagisdas');
/*!40000 ALTER TABLE `pelanggan` ENABLE KEYS */;

-- membuang struktur untuk table wise.pemesanan
CREATE TABLE IF NOT EXISTS `pemesanan` (
  `id_pemesanan` date NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tgl_booking` varchar(128) NOT NULL,
  `status` varchar(267) NOT NULL,
  PRIMARY KEY (`id_pemesanan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel wise.pemesanan: ~1 rows (lebih kurang)
/*!40000 ALTER TABLE `pemesanan` DISABLE KEYS */;
INSERT INTO `pemesanan` (`id_pemesanan`, `id_pelanggan`, `tgl_booking`, `status`) VALUES
	('2022-05-18', 14, '2022-05-18', 'pending'),
	('2022-06-10', 13, '2022-06-10', 'pending');
/*!40000 ALTER TABLE `pemesanan` ENABLE KEYS */;

-- membuang struktur untuk table wise.pemesanan_dekorasi
CREATE TABLE IF NOT EXISTS `pemesanan_dekorasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pemesanan` varchar(20) NOT NULL,
  `id_dekorasi` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel wise.pemesanan_dekorasi: ~7 rows (lebih kurang)
/*!40000 ALTER TABLE `pemesanan_dekorasi` DISABLE KEYS */;
INSERT INTO `pemesanan_dekorasi` (`id`, `id_pemesanan`, `id_dekorasi`) VALUES
	(6, '2022-05-31', 2),
	(7, '2022-06-02', 2),
	(8, '2022-06-10', 3),
	(9, '2022-06-10', 3),
	(10, '2022-06-09', 1),
	(11, '2022-06-03', 2),
	(12, '2022-07-09', 1),
	(13, '2022-06-10', 3),
	(14, '2022-05-18', 2);
/*!40000 ALTER TABLE `pemesanan_dekorasi` ENABLE KEYS */;

-- membuang struktur untuk table wise.pemesanan_dokumentasi
CREATE TABLE IF NOT EXISTS `pemesanan_dokumentasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pemesanan` varchar(20) NOT NULL,
  `id_dokumentasi` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel wise.pemesanan_dokumentasi: ~7 rows (lebih kurang)
/*!40000 ALTER TABLE `pemesanan_dokumentasi` DISABLE KEYS */;
INSERT INTO `pemesanan_dokumentasi` (`id`, `id_pemesanan`, `id_dokumentasi`) VALUES
	(6, '2022-05-31', 1),
	(7, '2022-06-02', 2),
	(8, '2022-06-10', 2),
	(9, '2022-06-10', 2),
	(10, '2022-06-09', 1),
	(11, '2022-06-03', 2),
	(12, '2022-07-09', 1),
	(13, '2022-06-10', 1),
	(14, '2022-05-18', 2);
/*!40000 ALTER TABLE `pemesanan_dokumentasi` ENABLE KEYS */;

-- membuang struktur untuk table wise.pemesanan_gedung
CREATE TABLE IF NOT EXISTS `pemesanan_gedung` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pemesanan` varchar(20) NOT NULL,
  `id_gedung` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel wise.pemesanan_gedung: ~7 rows (lebih kurang)
/*!40000 ALTER TABLE `pemesanan_gedung` DISABLE KEYS */;
INSERT INTO `pemesanan_gedung` (`id`, `id_pemesanan`, `id_gedung`) VALUES
	(6, '2022-05-31', 2),
	(7, '2022-06-02', 1),
	(8, '2022-06-10', 1),
	(9, '2022-06-10', 1),
	(10, '2022-06-09', 2),
	(11, '2022-06-03', 1),
	(12, '2022-07-09', 1),
	(13, '2022-06-10', 2),
	(14, '2022-05-18', 1);
/*!40000 ALTER TABLE `pemesanan_gedung` ENABLE KEYS */;

-- membuang struktur untuk table wise.pemesanan_katering
CREATE TABLE IF NOT EXISTS `pemesanan_katering` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pemesanan` varchar(20) NOT NULL,
  `id_katering` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel wise.pemesanan_katering: ~7 rows (lebih kurang)
/*!40000 ALTER TABLE `pemesanan_katering` DISABLE KEYS */;
INSERT INTO `pemesanan_katering` (`id`, `id_pemesanan`, `id_katering`) VALUES
	(6, '2022-05-31', 1),
	(7, '2022-06-02', 1),
	(8, '2022-06-10', 3),
	(9, '2022-06-10', 3),
	(10, '2022-06-09', 3),
	(11, '2022-06-03', 1),
	(12, '2022-07-09', 1),
	(13, '2022-06-10', 1),
	(14, '2022-05-18', 1);
/*!40000 ALTER TABLE `pemesanan_katering` ENABLE KEYS */;

-- membuang struktur untuk table wise.pemesanan_rias
CREATE TABLE IF NOT EXISTS `pemesanan_rias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pemesanan` varchar(20) NOT NULL,
  `id_rias` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel wise.pemesanan_rias: ~7 rows (lebih kurang)
/*!40000 ALTER TABLE `pemesanan_rias` DISABLE KEYS */;
INSERT INTO `pemesanan_rias` (`id`, `id_pemesanan`, `id_rias`) VALUES
	(15, '2022-05-31', 1),
	(16, '2022-06-02', 1),
	(17, '2022-06-10', 2),
	(18, '2022-06-10', 2),
	(19, '2022-06-09', 2),
	(20, '2022-06-03', 1),
	(21, '2022-07-09', 1),
	(22, '2022-06-10', 2),
	(23, '2022-05-18', 1);
/*!40000 ALTER TABLE `pemesanan_rias` ENABLE KEYS */;

-- membuang struktur untuk table wise.rias
CREATE TABLE IF NOT EXISTS `rias` (
  `id_rias` int(11) NOT NULL AUTO_INCREMENT,
  `nama_rias` varchar(128) NOT NULL,
  `deskripsi` varchar(256) NOT NULL,
  `harga_rias` int(11) NOT NULL,
  `foto` varchar(258) NOT NULL,
  PRIMARY KEY (`id_rias`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel wise.rias: ~3 rows (lebih kurang)
/*!40000 ALTER TABLE `rias` DISABLE KEYS */;
INSERT INTO `rias` (`id_rias`, `nama_rias`, `deskripsi`, `harga_rias`, `foto`) VALUES
	(1, 'Tradisional', 'Rias pengantin adat identik dengan sanggul, kebaya, dan paes ageng pada mempelai wanita, dan pada mempelai pria bertahtakan blangkon dan disematkan keris di pinggang.', 4000000, 'rias_tra.jpg'),
	(2, 'Exotic', 'Agar wajahmu tidak tampak pucat saat mengenakan warna-warna netral, kamu bisa menambahkan sedikit efek glitter dengan menggunakan strobing atau highlighter di beberapa spot seperti pada tulang pipi, bagian atas bibir maupun di area hidung.', 3500000, 'rias_exco_f.jpg'),
	(3, 'Simply Beauty', 'riasan yang sederhana dan tidak terlalu mencolok tetapi juga tidak terlalu natural, kamu bisa mencoba inspirasi makeup ala wanita Korea di atas. Dengan kombinasi warna pink dan mauve, kamu akan terlihat lebih manis.', 2500000, 'rias_sb_f.jpg');
/*!40000 ALTER TABLE `rias` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
