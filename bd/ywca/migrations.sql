-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
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

-- Listage de la structure de table ywca. migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table ywca.migrations : ~25 rows (environ)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2015_04_12_000000_create_orchid_users_table', 1),
	(4, '2015_10_19_214424_create_orchid_roles_table', 1),
	(5, '2015_10_19_214425_create_orchid_role_users_table', 1),
	(6, '2016_08_07_125128_create_orchid_attachmentstable_table', 1),
	(7, '2017_09_17_125801_create_notifications_table', 1),
	(8, '2019_08_19_000000_create_failed_jobs_table', 1),
	(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(10, '2020_07_07_055656_create_countries_table', 1),
	(11, '2020_07_07_055725_create_cities_table', 1),
	(12, '2020_07_07_055746_create_timezones_table', 1),
	(13, '2021_10_19_071730_create_states_table', 1),
	(14, '2021_10_23_082414_create_currencies_table', 1),
	(15, '2022_01_22_034939_create_languages_table', 1),
	(16, '2022_11_26_123010_create_services_table', 1),
	(17, '2022_11_26_123145_create_categories_table', 1),
	(18, '2022_11_26_123236_create_photos_table', 1),
	(19, '2022_11_26_123252_create_posts_table', 1),
	(20, '2022_12_21_134923_create_contacts_table', 1),
	(21, '2022_12_21_134939_create_dons_table', 1),
	(22, '2022_12_21_150351_create_membres_table', 1),
	(23, '2023_01_05_002541_create_teams_table', 1),
	(24, '2023_01_05_002601_create_testmonies_table', 1),
	(25, '2023_01_05_002620_create_partners_table', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
