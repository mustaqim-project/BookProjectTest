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


-- Dumping database structure for book
CREATE DATABASE IF NOT EXISTS `book` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `book`;

-- Dumping structure for table book.bukus
CREATE TABLE IF NOT EXISTS `bukus` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` bigint unsigned NOT NULL,
  `penulis_id` bigint unsigned NOT NULL,
  `penerbit_id` bigint unsigned NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `tanggal_terbit` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bukus_kategori_id_foreign` (`kategori_id`),
  KEY `bukus_penulis_id_foreign` (`penulis_id`),
  KEY `bukus_penerbit_id_foreign` (`penerbit_id`),
  CONSTRAINT `bukus_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategoris` (`id`) ON DELETE CASCADE,
  CONSTRAINT `bukus_penerbit_id_foreign` FOREIGN KEY (`penerbit_id`) REFERENCES `penerbits` (`id`) ON DELETE CASCADE,
  CONSTRAINT `bukus_penulis_id_foreign` FOREIGN KEY (`penulis_id`) REFERENCES `penulis` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table book.bukus: ~10 rows (approximately)
DELETE FROM `bukus`;
INSERT INTO `bukus` (`id`, `gambar`, `judul`, `kategori_id`, `penulis_id`, `penerbit_id`, `deskripsi`, `tanggal_terbit`, `created_at`, `updated_at`) VALUES
	(1, '1720518353.png', 'Murder on the Orient Express', 1, 1, 1, '<p>Novel misteri tentang pembunuhan di kereta api.</p>', '1934-01-01', '2024-07-09 09:15:16', '2024-07-09 02:45:54'),
	(2, '1720518689.jpg', 'Harry Potter and the Philosopher\'s Stone', 1, 2, 2, '<p>Novel fantasi tentang penyihir muda.</p>', '1997-06-26', '2024-07-09 09:15:16', '2024-07-09 02:51:29'),
	(3, '1720518722.jpg', '1984', 3, 3, 3, '<p>Novel distopia tentang pengawasan totaliter.</p>', '1949-06-08', '2024-07-09 09:15:16', '2024-07-09 02:52:02'),
	(4, '1720518910.jpg', 'The Lord of the Rings', 1, 4, 4, '<p>Trilogi fantasi epik tentang pencarian cincin.</p>', '1954-07-29', '2024-07-09 09:15:16', '2024-07-09 02:55:10'),
	(5, '1720518963.jpg', 'Kafka on the Shore', 1, 5, 5, '<p>Novel surreal tentang perjalanan dua karakter.</p>', '2002-09-12', '2024-07-09 09:15:16', '2024-07-09 02:56:03'),
	(6, '1720519003.jpg', 'The Da Vinci Code', 1, 6, 6, '<p>Novel thriller tentang konspirasi di balik karya seni.</p>', '2003-03-18', '2024-07-09 09:15:16', '2024-07-09 02:56:43'),
	(7, '1720519097.jpg', 'Adventures of Huckleberry Finn', 1, 7, 7, '<p>Novel klasik tentang petualangan di sungai Mississippi.</p>', '1884-12-10', '2024-07-09 09:15:16', '2024-07-09 02:58:17'),
	(8, '1720519136.jpg', 'Pride and Prejudice', 1, 8, 8, '<p>Novel roman tentang cinta dan kesalahpahaman.</p>', '1813-01-28', '2024-07-09 09:15:16', '2024-07-09 02:58:56'),
	(9, '1720519172.jpg', 'The Old Man and the Sea', 1, 9, 9, '<p>Novel tentang perjuangan seorang nelayan tua.</p>', '1952-09-01', '2024-07-09 09:15:16', '2024-07-09 02:59:32'),
	(10, '1720519205.jpg', 'The Great Gatsby', 1, 10, 10, '<p>Novel tentang kegemerlapan dan kesepian di era Jazz.</p>', '1925-04-10', '2024-07-09 09:15:16', '2024-07-09 03:00:05');

-- Dumping structure for table book.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table book.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;

-- Dumping structure for table book.kategoris
CREATE TABLE IF NOT EXISTS `kategoris` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table book.kategoris: ~10 rows (approximately)
DELETE FROM `kategoris`;
INSERT INTO `kategoris` (`id`, `nama`, `created_at`, `updated_at`) VALUES
	(1, 'Fiksi', '2024-07-09 09:15:16', '2024-07-09 09:15:16'),
	(2, 'Non-Fiksi', '2024-07-09 09:15:16', '2024-07-09 09:15:16'),
	(3, 'Sejarah', '2024-07-09 09:15:16', '2024-07-09 09:15:16'),
	(4, 'Biografi', '2024-07-09 09:15:16', '2024-07-09 09:15:16'),
	(5, 'Sains', '2024-07-09 09:15:16', '2024-07-09 09:15:16'),
	(6, 'Teknologi', '2024-07-09 09:15:16', '2024-07-09 09:15:16'),
	(7, 'Kesehatan', '2024-07-09 09:15:16', '2024-07-09 09:15:16'),
	(8, 'Psikologi', '2024-07-09 09:15:16', '2024-07-09 09:15:16'),
	(9, 'Filsafat', '2024-07-09 09:15:16', '2024-07-09 09:15:16'),
	(10, 'Ekonomi', '2024-07-09 09:15:16', '2024-07-09 09:15:16');

-- Dumping structure for table book.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table book.migrations: ~0 rows (approximately)
DELETE FROM `migrations`;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2014_10_12_100000_create_password_resets_table', 1),
	(4, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(6, '2024_07_08_154358_test_table', 1),
	(7, '2024_07_09_072100_create_kategoris_table', 1),
	(8, '2024_07_09_072104_create_penulis_table', 1),
	(9, '2024_07_09_072108_create_penerbits_table', 1),
	(10, '2024_07_09_072113_create_bukus_table', 1);

-- Dumping structure for table book.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table book.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;

-- Dumping structure for table book.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table book.password_reset_tokens: ~0 rows (approximately)
DELETE FROM `password_reset_tokens`;

-- Dumping structure for table book.penerbits
CREATE TABLE IF NOT EXISTS `penerbits` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table book.penerbits: ~10 rows (approximately)
DELETE FROM `penerbits`;
INSERT INTO `penerbits` (`id`, `nama`, `alamat`, `created_at`, `updated_at`) VALUES
	(1, 'Gramedia', 'Jl. Palmerah Barat No.29, Jakarta', '2024-07-09 09:15:16', '2024-07-09 09:15:16'),
	(2, 'Erlangga', 'Jl. H. Baping Raya No.100, Jakarta', '2024-07-09 09:15:16', '2024-07-09 09:15:16'),
	(3, 'Mizan', 'Jl. Cinambo No.12, Bandung', '2024-07-09 09:15:16', '2024-07-09 09:15:16'),
	(4, 'Bentang Pustaka', 'Jl. Gejayan No.3, Yogyakarta', '2024-07-09 09:15:16', '2024-07-09 09:15:16'),
	(5, 'Republika', 'Jl. Warung Jati Barat No.9, Jakarta', '2024-07-09 09:15:16', '2024-07-09 09:15:16'),
	(6, 'Andi Publisher', 'Jl. Beo No.38, Yogyakarta', '2024-07-09 09:15:16', '2024-07-09 09:15:16'),
	(7, 'Pustaka Al-Kautsar', 'Jl. Tebet Timur Dalam No.42, Jakarta', '2024-07-09 09:15:16', '2024-07-09 09:15:16'),
	(8, 'Kanisius', 'Jl. Cik Di Tiro No.34, Yogyakarta', '2024-07-09 09:15:16', '2024-07-09 09:15:16'),
	(9, 'PT. Dunia Pustaka Jaya', 'Jl. Kramat Raya No.45, Jakarta', '2024-07-09 09:15:16', '2024-07-09 09:15:16'),
	(10, 'BIP', 'Jl. Gunung Sahari No.56, Jakarta', '2024-07-09 09:15:16', '2024-07-09 09:15:16');

-- Dumping structure for table book.penulis
CREATE TABLE IF NOT EXISTS `penulis` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biografi` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table book.penulis: ~10 rows (approximately)
DELETE FROM `penulis`;
INSERT INTO `penulis` (`id`, `nama`, `biografi`, `created_at`, `updated_at`) VALUES
	(1, 'Agatha Christie', 'Penulis novel misteri', '2024-07-09 09:15:16', '2024-07-09 09:15:16'),
	(2, 'J.K. Rowling', 'Penulis seri Harry Potter', '2024-07-09 09:15:16', '2024-07-09 09:15:16'),
	(3, 'George Orwell', 'Penulis novel distopia', '2024-07-09 09:15:16', '2024-07-09 09:15:16'),
	(4, 'J.R.R. Tolkien', 'Penulis trilogi Lord of the Rings', '2024-07-09 09:15:16', '2024-07-09 09:15:16'),
	(5, 'Haruki Murakami', 'Penulis novel Jepang kontemporer', '2024-07-09 09:15:16', '2024-07-09 09:15:16'),
	(6, 'Dan Brown', 'Penulis novel thriller', '2024-07-09 09:15:16', '2024-07-09 09:15:16'),
	(7, 'Mark Twain', 'Penulis klasik Amerika', '2024-07-09 09:15:16', '2024-07-09 09:15:16'),
	(8, 'Jane Austen', 'Penulis novel roman Inggris', '2024-07-09 09:15:16', '2024-07-09 09:15:16'),
	(9, 'Ernest Hemingway', 'Penulis novel dan cerita pendek', '2024-07-09 09:15:16', '2024-07-09 09:15:16'),
	(10, 'F. Scott Fitzgerald', 'Penulis The Great Gatsby', '2024-07-09 09:15:16', '2024-07-09 09:15:16');

-- Dumping structure for table book.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table book.personal_access_tokens: ~0 rows (approximately)
DELETE FROM `personal_access_tokens`;

-- Dumping structure for table book.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table book.users: ~0 rows (approximately)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'AGUNG MUSTAQIM', 'admin@gmail.com', NULL, '$2y$12$Uff2heOV8A4JXOLgv0H67uwLT7UrpZLeRe6Tx85tfihKqO4J7zUMa', NULL, '2024-07-09 02:33:39', '2024-07-09 02:33:39');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
