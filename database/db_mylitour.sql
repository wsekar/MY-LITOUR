-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_mylitour
CREATE DATABASE IF NOT EXISTS `db_mylitour` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_mylitour`;

-- Dumping structure for table db_mylitour.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int NOT NULL AUTO_INCREMENT,
  `kode_admin` varchar(10) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `foto_admin` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_mylitour.admin: ~1 rows (approximately)
INSERT INTO `admin` (`id_admin`, `kode_admin`, `nama_admin`, `foto_admin`, `username`, `password`) VALUES
	(1, 'ADM01', 'Dinas Perpustakaan dan Kearsipan', '488d7af2b3a9197d827ef2c350abb62d.png', 'dispusip', 'dispusip');

-- Dumping structure for table db_mylitour.kategori
CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int NOT NULL AUTO_INCREMENT,
  `jenis_kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_mylitour.kategori: ~3 rows (approximately)
INSERT INTO `kategori` (`id_kategori`, `jenis_kategori`) VALUES
	(1, 'Kearifan Lokal'),
	(2, 'Caruban Literasi Hub'),
	(3, 'Naskah Kuno');

-- Dumping structure for table db_mylitour.kritik_saran
CREATE TABLE IF NOT EXISTS `kritik_saran` (
  `id_kritik_saran` int NOT NULL AUTO_INCREMENT,
  `nama_pengunjung` varchar(100) NOT NULL,
  `email_pengunjung` varchar(50) NOT NULL,
  `kritik_saran` text NOT NULL,
  PRIMARY KEY (`id_kritik_saran`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_mylitour.kritik_saran: ~1 rows (approximately)
INSERT INTO `kritik_saran` (`id_kritik_saran`, `nama_pengunjung`, `email_pengunjung`, `kritik_saran`) VALUES
	(1, 'tantri', 'tantri@mail.com', 'bagus');

-- Dumping structure for table db_mylitour.potensi
CREATE TABLE IF NOT EXISTS `potensi` (
  `id_potensi` int NOT NULL AUTO_INCREMENT,
  `id_kategori` int NOT NULL,
  `id_wilayah` int NOT NULL,
  `nama_potensi` varchar(100) NOT NULL,
  `slug` varchar(1024) NOT NULL,
  `informasi` varchar(10000) NOT NULL,
  `video_youtube` varchar(1500) DEFAULT NULL,
  `tanggal_update` date NOT NULL,
  `foto_potensi` varchar(100) NOT NULL,
  `referensi` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`id_potensi`),
  KEY `id_wilayah` (`id_wilayah`),
  KEY `id_kategori` (`id_kategori`),
  CONSTRAINT `potensi_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `potensi_ibfk_2` FOREIGN KEY (`id_wilayah`) REFERENCES `wilayah` (`id_wilayah`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_mylitour.potensi: ~7 rows (approximately)
INSERT INTO `potensi` (`id_potensi`, `id_kategori`, `id_wilayah`, `nama_potensi`, `slug`, `informasi`, `video_youtube`, `tanggal_update`, `foto_potensi`, `referensi`) VALUES
	(1, 1, 10, 'Masjid Quba Madiun', 'masjid-quba-madiun', '<p>Masjid Quba Madiun terletak di Kecamatan Mejayan, Kabupaten Madiun.</p>', 'https://youtu.be/LzdfNwhTLWc?si=BRkV9KezqRcR2UrM', '2022-10-19', 'ef116b4375dd9254bc37395e34828fb1.jpg', ''),
	(2, 1, 12, 'Waduk Widas', 'waduk-widas', '<p>Waduk Widas terletak di Kecamatan Saradan, Kabupaten Madiun..</p>', 'https://youtu.be/QZa5WljYPWQ', '2022-10-19', 'ca8204b6c8de2fbeb26a173a5880a96c.jpg', ''),
	(3, 3, 10, 'Kakawin Gajah Mada', 'kakawin-gajah-mada', '<p>Kakawin Gajah Mada : sebuah karya sastra kakawin abad ke-20 : suntingan naskah serta telaah struktur, tokoh dan hubungan antarteks / Partini Sardjono-Pradotokusumo. Dalam khasanah kesusaatraan Jawa (Kuna), jenis sastra kakawin adalah salah satu jenis sastra yang tertua yang berbentuk puisi. Yerhatian pada kakawin ini belum memadai jika dibandingkan dengan basil karya sastranya yang ditulis dalam bentuk ini. Yang diterbitkan secara kritis atau diterjemahkan dalam bahasa Indonesia sangat sedikit dan dalam bahasa a sing (terbatas pada bahasa Belanda dan Inggris) belum banyak.</p>', 'https://youtu.be/AjwhrC_VOqg?si=MKKKXHv3WAW7WBOj', '2022-10-20', 'ed7c0899cc86ce7f23d7d47d2d2e0486.jpg', 'https://khastara.perpusnas.go.id/landing/detail/1046351'),
	(4, 1, 15, 'Monumen Kresek Madiun', 'monumen-kresek-madiun', '<p>Monumen Kresek</p>', 'https://youtu.be/b0bL__h5m3U', '2022-10-21', '2f05e09741507090eda44ba4f85524b7.jpg', ''),
	(5, 2, 10, 'Pengembangan Literasi Berbasis Inklusi Sosial – Pelatihan Merajut', 'pengembangan-literasi-berbasis-inklusi-sosial--pelatihan-merajut', '<p>Pelatihan Merajut</p>', 'https://youtu.be/TQoHBbEQfLk', '2022-10-23', 'a4a4f6808957085b73bca0afb7599ef9.jpg', ''),
	(6, 3, 10, 'Serat Ramayana Koleksi Museum Mpu Tantular', 'serat-ramayana-koleksi-museum-mpu-tantular', '<p>Naskah Serat Rama merupakan koleksi Museum Negeri Mpu Tantular Sidoarjo dengan kode naskah 07.248 M. Naskah Serat Rama hanya memuat satu teks, yaitu cerita Rama, namun cerita tidak dimulai dari masa kecil Rama, melainkan langsung pada peperangan antara Rama, Laksmana, dan pasukan kera melawan Rahwana, Indrajit, dan pasukan raksasa. Naskah Serat Rama ditulis dalam aksara dan bahasa Jawa.</p>', 'https://youtu.be/SNWJ4ujZFUc', '2022-10-23', '0c7203e7be16f1140667be6fb8ae2204.jpg', 'https://khastara.perpusnas.go.id/landing/detail/1539724'),
	(7, 2, 10, 'Pelatihan Blender 3D', 'pelatihan-blender-3d', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. <strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', 'https://youtu.be/TQoHBbEQfLk', '2022-10-24', 'd129271e61fb41d46494fda5b98c92ea.jpg', '');

-- Dumping structure for table db_mylitour.statistik_pengunjung
CREATE TABLE IF NOT EXISTS `statistik_pengunjung` (
  `tanggal` date NOT NULL,
  `ipAddress` text NOT NULL,
  `jumlah` int NOT NULL,
  PRIMARY KEY (`tanggal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_mylitour.statistik_pengunjung: ~14 rows (approximately)
INSERT INTO `statistik_pengunjung` (`tanggal`, `ipAddress`, `jumlah`) VALUES
	('2022-10-30', '{"ip_address":["::1","::1"]}', 2),
	('2022-10-31', '{"ip_address":["::1","::1","::1","::1","::1","::1","::1","::1","::1"]}', 9),
	('2022-11-01', '{"ip_address":["::1","::1","::1","::1","::1","::1","::1","::1","::1","::1"]}', 10),
	('2022-11-02', '{"ip_address":["::1","::1","::1"]}', 3),
	('2022-11-04', '{"ip_address":["::1"]}', 1),
	('2022-11-05', '{"ip_address":["::1","::1","::1","::1","::1"]}', 5),
	('2022-11-06', '{"ip_address":["::1"]}', 1),
	('2022-11-07', '{"ip_address":["::1","::1","::1","::1","::1"]}', 5),
	('2022-11-08', '{"ip_address":["::1","::1","127.0.0.1","::1"]}', 4),
	('2022-11-10', '{"ip_address":["::1"]}', 1),
	('2022-11-11', '{"ip_address":["::1","::1","::1"]}', 3),
	('2023-10-08', '{"ip_address":["::1","::1"]}', 2),
	('2023-10-19', '{"ip_address":["::1"]}', 1),
	('2023-11-02', '{"ip_address":["::1"]}', 1);

-- Dumping structure for table db_mylitour.wilayah
CREATE TABLE IF NOT EXISTS `wilayah` (
  `id_wilayah` int NOT NULL AUTO_INCREMENT,
  `nama_wilayah` varchar(50) NOT NULL,
  PRIMARY KEY (`id_wilayah`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_mylitour.wilayah: ~15 rows (approximately)
INSERT INTO `wilayah` (`id_wilayah`, `nama_wilayah`) VALUES
	(1, 'Balerejo'),
	(2, 'Dagangan'),
	(3, 'Dolopo'),
	(4, 'Geger'),
	(5, 'Gemarang'),
	(6, 'Jiwan'),
	(7, 'Kare'),
	(8, 'Kebonsari'),
	(9, 'Madiun'),
	(10, 'Mejayan'),
	(11, 'Pilangkenceng'),
	(12, 'Saradan'),
	(13, 'Sawahan'),
	(14, 'Wonoasri'),
	(15, 'Wungu');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
