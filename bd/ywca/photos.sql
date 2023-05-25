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

-- Listage de la structure de table ywca. photos
CREATE TABLE IF NOT EXISTS `photos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `service_id` bigint unsigned NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `photos_service_id_foreign` (`service_id`),
  CONSTRAINT `photos_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table ywca.photos : ~31 rows (environ)
INSERT INTO `photos` (`id`, `service_id`, `description`, `link`, `priority`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Praesent metus tellus elementum eu', '/storage/2023/03/04/d67da4ab3269d9b2ea886de639b02bb0b4c4fb5e.png', 1, '2023-03-04 11:09:19', '2023-03-04 11:09:19'),
	(2, 1, 'Praesent metus tellus elementum eu', '/storage/2023/03/04/a046442a9af3243d1ed1199c72f13707c6fd9c1a.png', 1, '2023-03-04 11:09:48', '2023-03-04 11:09:48'),
	(3, 2, 'Praesent metus tellus elementum eu', '/storage/2023/03/04/ec3bdb9151001f74deb467b457419b4c4ce7af85.png', 1, '2023-03-04 11:10:36', '2023-03-04 11:10:36'),
	(4, 2, 'Praesent metus tellus elementum eu', '/storage/2023/03/04/4cf2a0d2e5029ea92da5149b9b156414f9ee717f.png', 1, '2023-03-04 11:11:07', '2023-03-04 11:11:07'),
	(5, 2, 'Fusce egestas elit eget', '/storage/2023/03/04/f3811119ed36ac2fc84677c36e6a6913ffde8853.png', 1, '2023-03-04 11:11:40', '2023-03-04 11:11:40'),
	(6, 2, 'Fusce egestas elit eget', '/storage/2023/03/04/8f5dfa9c60027fa7850acd30c46bf62e1ebb26cd.png', 1, '2023-03-04 11:12:13', '2023-03-04 11:12:13'),
	(7, 2, 'Fusce egestas elit eget', '/storage/2023/03/04/166c17506783cf5e6fdd9b77964921e2b076661b.png', 1, '2023-03-04 11:12:50', '2023-03-04 11:12:50'),
	(8, 2, 'Fusce egestas elit eget', '/storage/2023/03/04/bd6c9e9e484cfa3a997bd4c371a209892c5da32f.png', 1, '2023-03-04 11:13:26', '2023-03-04 11:13:26'),
	(10, 2, 'Praesent metus tellus elementum eu', '/storage/2023/03/04/0770fc8e296c0414ba6186f15d02236e4918d673.png', 1, '2023-03-04 11:25:51', '2023-03-04 11:25:51'),
	(11, 2, 'Fusce egestas elit eget', '/storage/2023/03/04/ab12bdbdd941a4151039f816ca95d875e5ce876a.png', 1, '2023-03-04 11:26:22', '2023-03-04 11:26:22'),
	(12, 2, 'Fusce egestas elit eget', '/storage/2023/03/04/3c12cc2134a10f6345cc2e1ec4ff7066c049163e.png', 1, '2023-03-04 11:26:51', '2023-03-04 11:26:51'),
	(13, 2, 'Praesent metus tellus elementum eu', '/storage/2023/03/04/4687a798655c875639ced0ec74a8de47098779b0.png', 1, '2023-03-04 11:27:18', '2023-03-04 11:27:18'),
	(14, 2, 'Fusce egestas elit eget', '/storage/2023/03/04/1b00ff091d6daa5ce9836284cd2eacab6d1e333b.png', 1, '2023-03-04 11:27:54', '2023-03-04 11:27:54'),
	(15, 2, 'Praesent metus tellus elementum eu', '/storage/2023/03/04/c84af79414d373734971e427872ad608374a0818.png', 1, '2023-03-04 11:28:24', '2023-03-04 11:28:24'),
	(16, 2, 'Fusce egestas elit eget', '/storage/2023/03/04/1402cd6d4f85f981f080a81c8e949a83c372108a.png', 1, '2023-03-04 11:28:51', '2023-03-04 11:28:51'),
	(17, 2, 'Praesent metus tellus elementum eu', '/storage/2023/03/04/c406f3500e76b2358456827b02134b5e8e8ac3d9.png', 1, '2023-03-04 11:29:30', '2023-03-04 11:29:30'),
	(18, 3, 'Praesent metus tellus elementum eu', '/storage/2023/03/04/03edab0421b55bdd5d3d7476a9c28591503c9205.png', 1, '2023-03-04 11:32:05', '2023-03-04 11:32:05'),
	(19, 3, 'Praesent metus tellus elementum eu', '/storage/2023/03/04/481976bc6535233fe7eddbff828b9cfe5c53cb09.png', 1, '2023-03-04 11:33:02', '2023-03-04 11:33:02'),
	(20, 4, 'Fusce egestas elit eget', '/storage/2023/03/04/8f0b52a23d7e3ea2849b525b231a161f1055737d.png', 1, '2023-03-04 11:33:45', '2023-03-04 11:33:45'),
	(22, 6, 'Praesent metus tellus elementum eu', '/storage/2023/03/04/035fd1c3c6d707db8955647a19d65f382cd403ae.png', 1, '2023-03-04 11:35:04', '2023-03-04 11:35:04'),
	(23, 6, 'Praesent metus tellus elementum eu', '/storage/2023/03/04/52403de43fe1a4565e59555a2a341c5aec7f1800.png', 1, '2023-03-04 11:35:59', '2023-03-04 11:35:59'),
	(24, 6, 'Fusce egestas elit eget', '/storage/2023/03/04/bfbaaa548fd8445d47e10a8771fe432cdd2016ed.png', 1, '2023-03-04 11:36:30', '2023-03-04 11:36:30'),
	(25, 6, 'Fusce egestas elit eget', '/storage/2023/03/04/7f323a74e7cdabf73f8bef06ae8e7e9df8a497e7.png', 1, '2023-03-04 11:37:00', '2023-03-04 11:37:00'),
	(26, 6, 'Fusce egestas elit eget', '/storage/2023/03/04/aa7111c199876a2037e1bb4b080fa1c109d619c0.png', 1, '2023-03-04 11:37:31', '2023-03-04 11:37:31'),
	(27, 6, 'Praesent metus tellus elementum eu', '/storage/2023/03/04/f244d7a360a0bbea41ce6e24f27c529e00d60569.png', 1, '2023-03-04 11:37:57', '2023-03-04 11:37:57'),
	(28, 6, 'Praesent metus tellus elementum eu', '/storage/2023/03/04/9bda94c21d7b27b4efd4914d8dd845c7bde0572a.png', 1, '2023-03-04 11:38:24', '2023-03-04 11:38:24'),
	(29, 6, 'Praesent metus tellus elementum eu', '/storage/2023/03/04/2eda48dc578d5af726f72187701d2af257272d55.png', 1, '2023-03-04 11:38:51', '2023-03-04 11:38:51'),
	(30, 6, 'Fusce egestas elit eget', '/storage/2023/03/04/00bf394c0c63ec45efa582622a964d0512c9416d.png', 1, '2023-03-04 11:39:20', '2023-03-04 11:39:20'),
	(31, 3, 'Fusce egestas elit eget', '/storage/2023/03/04/00e509c95a0c7a95c77231aa0368f8a63a26aafd.png', 1, '2023-03-04 11:41:37', '2023-03-04 11:41:37'),
	(32, 4, 'Praesent metus tellus elementum eu', '/storage/2023/03/04/968b426d8ad8fee5f2d4a4f43cd892790a79be5b.png', 1, '2023-03-04 11:45:55', '2023-03-04 11:45:55'),
	(33, 4, 'Fusce egestas elit eget', '/storage/2023/03/04/7c0612f35d1842e5d636533d2cf84d50082e21a0.png', 1, '2023-03-04 11:46:24', '2023-03-04 11:46:24');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
