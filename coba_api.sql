-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for coba_api
-- CREATE DATABASE IF NOT EXISTS `coba_api` /*!40100 DEFAULT CHARACTER SET latin1 */;
-- USE `coba_api`;

-- Dumping structure for table coba_api.tb_produk
CREATE TABLE IF NOT EXISTS `tb_produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` text,
  `nama` varchar(50) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table coba_api.tb_produk: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_produk` DISABLE KEYS */;
REPLACE INTO `tb_produk` (`id`, `gambar`, `nama`, `harga`) VALUES
	(1, 'https://www.asus.com/WebsitesBanner/ID/banners/ys4ubldb7yzkvvhc/ys4ubldb7yzkvvhc-5_0_desktop_5_1X.jpg?webp', 'ASUS VivoBook 14X Oled', 13099000),
	(2, 'https://www.asus.com/WebsitesBanner/ID/banners/ys4ubldb7yzkvvhc/ys4ubldb7yzkvvhc-4_0_desktop_4_1X.jpg?webp', 'ASUS VivoBook 14X', 9599000),
	(3, 'https://dlcdnwebimgs.asus.com/gain/056EB3AC-800D-403C-8AB0-755ED570AAEE/w185/fwebp', 'ASUS ROG Strix Scar 17 SE (2022)', 65999000);
/*!40000 ALTER TABLE `tb_produk` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
