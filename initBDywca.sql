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

-- Listage de la structure de table ywca. attachmentable
CREATE TABLE IF NOT EXISTS `attachmentable` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `attachmentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachmentable_id` int unsigned NOT NULL,
  `attachment_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `attachmentable_attachmentable_type_attachmentable_id_index` (`attachmentable_type`,`attachmentable_id`),
  KEY `attachmentable_attachment_id_foreign` (`attachment_id`),
  CONSTRAINT `attachmentable_attachment_id_foreign` FOREIGN KEY (`attachment_id`) REFERENCES `attachments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table ywca.attachmentable : ~0 rows (environ)

-- Listage de la structure de table ywca. attachments
CREATE TABLE IF NOT EXISTS `attachments` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extension` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint NOT NULL DEFAULT '0',
  `sort` int NOT NULL DEFAULT '0',
  `path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `alt` text COLLATE utf8mb4_unicode_ci,
  `hash` text COLLATE utf8mb4_unicode_ci,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'public',
  `user_id` bigint unsigned DEFAULT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table ywca.attachments : ~78 rows (environ)
INSERT INTO `attachments` (`id`, `name`, `original_name`, `mime`, `extension`, `size`, `sort`, `path`, `description`, `alt`, `hash`, `disk`, `user_id`, `group`, `created_at`, `updated_at`) VALUES
	(1, 'a1451909f5ba4964d7117f6650351a12b36bebef', 'blob', 'image/png', 'png', 293934, 0, '2023/02/23/', NULL, NULL, '44279e5fc50b870a01183babd657d500237342ac', 'public', 1, NULL, '2023-02-23 21:57:22', '2023-02-23 21:57:22'),
	(2, '12a93979adee4cfb156b14022194db07d1146fd9', 'blob', 'image/png', 'png', 316066, 0, '2023/02/23/', NULL, NULL, '30c562a8dc46ff5beb75880e27c5edcd86632958', 'public', 1, NULL, '2023-02-23 21:57:39', '2023-02-23 21:57:39'),
	(3, '886af1518285aa899c5b9fa2d9c604604021882b', 'blob', 'image/png', 'png', 14531, 0, '2023/02/23/', NULL, NULL, '343c70423af49bab75142afa35cee01b60b1c079', 'public', 1, NULL, '2023-02-23 22:01:55', '2023-02-23 22:01:55'),
	(4, '9c6951d80dbcb783eb4b9058cbb1f13535723143', 'blob', 'image/png', 'png', 313442, 0, '2023/02/23/', NULL, NULL, '23cd283069647d7d48f823a5c2d76a5d22f5be8e', 'public', 1, NULL, '2023-02-23 22:04:24', '2023-02-23 22:04:24'),
	(5, '3c91bc8f913e58c8c34212019c73cc28d63a36f6', 'blob', 'image/png', 'png', 316511, 0, '2023/02/23/', NULL, NULL, '6b18b5ac1ed3d4816b0efc681384a9c175e48dce', 'public', 1, NULL, '2023-02-23 22:04:56', '2023-02-23 22:04:56'),
	(6, '683e61df13e6932baa92e55443247b307465feaf', 'blob', 'image/png', 'png', 324071, 0, '2023/03/04/', NULL, NULL, 'dfb2386fbc7fcd80a6e58a26b1ada1d122070210', 'public', 1, NULL, '2023-03-04 09:22:27', '2023-03-04 09:22:27'),
	(7, 'ba5bab25fb5e1c0dc9cad5fe619ee8333312e958', 'blob', 'image/png', 'png', 324151, 0, '2023/03/04/', NULL, NULL, '21bd0aaf85c6d8949cd67c7e1fa7d380d02a21d7', 'public', 1, NULL, '2023-03-04 09:22:44', '2023-03-04 09:22:44'),
	(8, 'f9727f81ca3e19c24a739e4fbce034b639abf09c', '20220928_170014.jpg', 'image/jpeg', 'jpg', 2401651, 0, '2023/03/04/', NULL, NULL, '799ab092dc9aa41061dd734cec0a78a755fcb5fa', 'public', 1, NULL, '2023-03-04 09:57:09', '2023-03-04 09:57:09'),
	(9, '151021bfc171bcea1da999942deb149733da6162', 'blob', 'image/png', 'png', 320672, 0, '2023/03/04/', NULL, NULL, 'c064078a9671c1ab203b808bf9d942f0a03fd75d', 'public', 1, NULL, '2023-03-04 09:58:56', '2023-03-04 09:58:56'),
	(10, '2f71a6d0e2256540105b9dde3a39b5f4d8e9a1e7', 'blob', 'image/png', 'png', 331528, 0, '2023/03/04/', NULL, NULL, 'abd9346e7b23a1abede3da9ca70ee9227c2ff540', 'public', 1, NULL, '2023-03-04 09:59:36', '2023-03-04 09:59:36'),
	(11, '90fe5d3e6b70fb6bb0addbd5b8c92ef4260b64fe', 'blob', 'image/png', 'png', 306118, 0, '2023/03/04/', NULL, NULL, '04c97a264820acfebc4c0e12083b894a3c26c098', 'public', 1, NULL, '2023-03-04 10:04:24', '2023-03-04 10:04:24'),
	(12, '3c91bc8f913e58c8c34212019c73cc28d63a36f6', 'blob', 'image/png', 'png', 316511, 0, '2023/02/23/', NULL, NULL, '6b18b5ac1ed3d4816b0efc681384a9c175e48dce', 'public', 1, NULL, '2023-03-04 10:04:49', '2023-03-04 10:04:49'),
	(13, '3c91bc8f913e58c8c34212019c73cc28d63a36f6', 'blob', 'image/png', 'png', 316511, 0, '2023/02/23/', NULL, NULL, '6b18b5ac1ed3d4816b0efc681384a9c175e48dce', 'public', 1, NULL, '2023-03-04 10:05:10', '2023-03-04 10:05:10'),
	(14, 'edfcf22a8fc66bd315fda374e20fa9180deb0ab3', 'blob', 'image/png', 'png', 311869, 0, '2023/03/04/', NULL, NULL, '92440c41661ecd6b331c303fb892eb42c1f07354', 'public', 1, NULL, '2023-03-04 10:06:19', '2023-03-04 10:06:19'),
	(15, '896b8c3005f9fbc6392abf040b363b115f247822', 'blob', 'image/png', 'png', 333490, 0, '2023/03/04/', NULL, NULL, 'c12f3214e84a44b820ccfedd187d241a168b126c', 'public', 1, NULL, '2023-03-04 10:06:39', '2023-03-04 10:06:39'),
	(16, '3c91bc8f913e58c8c34212019c73cc28d63a36f6', 'blob', 'image/png', 'png', 316511, 0, '2023/02/23/', NULL, NULL, '6b18b5ac1ed3d4816b0efc681384a9c175e48dce', 'public', 1, NULL, '2023-03-04 10:07:10', '2023-03-04 10:07:10'),
	(17, 'b7fac5c12481f7195cf6aa4629dedde94d8a7e2b', 'blob', 'image/png', 'png', 322199, 0, '2023/03/04/', NULL, NULL, 'e5959cfc87470941958a5a00b6ff446ff2ee639e', 'public', 1, NULL, '2023-03-04 10:07:37', '2023-03-04 10:07:37'),
	(18, '2315100ba0df85733219a22276e62e18f6edc448', 'blob', 'image/png', 'png', 302585, 0, '2023/03/04/', NULL, NULL, '54fc0f103a7a3506241c393fab15cf24fec2958b', 'local', 1, NULL, '2023-03-04 10:08:59', '2023-03-04 10:08:59'),
	(19, '2315100ba0df85733219a22276e62e18f6edc448', 'blob', 'image/png', 'png', 302585, 0, '2023/03/04/', NULL, NULL, '54fc0f103a7a3506241c393fab15cf24fec2958b', 'local', 1, NULL, '2023-03-04 10:10:36', '2023-03-04 10:10:36'),
	(20, '594b10ced0a43fadf471639bdf250409883e5ebf', 'blob', 'image/png', 'png', 321104, 0, '2023/03/04/', NULL, NULL, '405cfd460a248304a43fe64345c373523f10a2fe', 'local', 1, NULL, '2023-03-04 10:10:49', '2023-03-04 10:10:49'),
	(21, '1487b6efa442e100803cc37f4b063503d0b59edb', 'blob', 'image/png', 'png', 302274, 0, '2023/03/04/', NULL, NULL, '3b944a065ff75c506523fc958ff63614d9f3b3b5', 'local', 1, NULL, '2023-03-04 10:11:17', '2023-03-04 10:11:17'),
	(22, '38e8ee96badcdd4ffbfa74da0b28a9575e790519', 'blob', 'image/png', 'png', 316511, 0, '2023/03/04/', NULL, NULL, '6b18b5ac1ed3d4816b0efc681384a9c175e48dce', 'local', 1, NULL, '2023-03-04 10:11:29', '2023-03-04 10:11:29'),
	(23, 'f7b9bd6ba98771b1a77e23e26e93f1dad5cff94e', 'blob', 'image/png', 'png', 318659, 0, '2023/03/04/', NULL, NULL, 'a32c98b5cddde4dc163ef1e3df3253f96fe868b6', 'local', 1, NULL, '2023-03-04 10:12:26', '2023-03-04 10:12:26'),
	(24, '2a422c47895e3ffdd8172dfe54ec79fc8f535e50', 'blob', 'image/png', 'png', 333314, 0, '2023/03/04/', NULL, NULL, 'd71f571d66e594bab996aa6b21eaca257a32ffaf', 'local', 1, NULL, '2023-03-04 10:12:44', '2023-03-04 10:12:44'),
	(25, '02be5ee3f6f87e20c6201b4c9cfb5fe5c88a67a8', '20220601_125936.jpg', 'image/jpeg', 'jpg', 2890373, 0, '2023/03/04/', NULL, NULL, '6a6115f9f00fab8c97baf892a3a5f96add3f7560', 'local', 1, NULL, '2023-03-04 10:14:17', '2023-03-04 10:14:17'),
	(26, '8158872d85435db5e3602dbad854cf625b646f83', 'IMG-20221019-WA0012.jpg', 'image/jpeg', 'jpg', 156330, 0, '2023/03/04/', NULL, NULL, 'd62254a26c94815dec515aa352d79bb0572b3134', 'local', 1, NULL, '2023-03-04 10:15:50', '2023-03-04 10:15:50'),
	(27, '4f8e44d8c2e8bd283118a7e19ed47eae795785a4', 'P9330842.JPG', 'image/jpeg', 'JPG', 8054784, 0, '2023/03/04/', NULL, NULL, 'a682b42f330dbcce711ae8107aa424c317ff4be8', 'local', 1, NULL, '2023-03-04 10:17:59', '2023-03-04 10:17:59'),
	(28, 'be830830bfbda5f8d4536e3f785189a6823259d1', 'IMG_20200929_113453_204.jpg', 'image/jpeg', 'jpg', 5594521, 0, '2023/03/04/', NULL, NULL, '587a8e05a25f6a6f35fb8057333f385e71dbc10a', 'local', 1, NULL, '2023-03-04 10:18:11', '2023-03-04 10:18:11'),
	(29, 'c27b6748288872a63c1a688be0a8035e56b9fe48', 'medical.webp', 'image/webp', 'webp', 11676, 0, '2023/03/04/', NULL, NULL, '08e058ee7f09b6f50d8a57ff36cf21b466d4dd15', 'local', 1, NULL, '2023-03-04 10:24:11', '2023-03-04 10:24:11'),
	(30, '46fa5ebef02343484d968e05d57dcdb40aaf8379', 'blob', 'image/png', 'png', 202056, 0, '2023/03/04/', NULL, NULL, '32b9bd9da734ac2f04629ae4c95849a4143358d1', 'local', 1, NULL, '2023-03-04 10:25:26', '2023-03-04 10:25:26'),
	(31, '1c8961d699cb39edceff5286fbabc4a740e4e1bd', 'blob', 'image/png', 'png', 230409, 0, '2023/03/04/', NULL, NULL, '1b1dc3675648bb030a922ab807273a48fb86faa6', 'local', 1, NULL, '2023-03-04 10:25:52', '2023-03-04 10:25:52'),
	(32, 'cc1684a1f606b7e4b6f453ec99b26ce872ad3a9e', 'blob', 'image/png', 'png', 208923, 0, '2023/03/04/', NULL, NULL, 'a1f511d0ce2b8e47fbd460ea2c6696a484ea4d9f', 'local', 1, NULL, '2023-03-04 10:29:56', '2023-03-04 10:29:56'),
	(33, '0f2d48f5d6b7643a72b3ce899c983be8d7ce48a9', 'blob', 'image/png', 'png', 230180, 0, '2023/03/04/', NULL, NULL, '8504576d4dfd89e30023f6100b7ae98df1be2040', 'local', 1, NULL, '2023-03-04 10:30:15', '2023-03-04 10:30:15'),
	(34, '41a5be3221c93f359bf02abd96960e009518b964', 'IMG-20211105-WA0009.jpg', 'image/jpeg', 'jpg', 288913, 0, '2023/03/04/', NULL, NULL, '8377620165b2fee4da6eeb3213910cef03c80327', 'local', 1, NULL, '2023-03-04 10:34:22', '2023-03-04 10:34:22'),
	(35, '936ddca5e27855543a1f239bef16fbbb8c045cd8', 'P9280216-1-scaled.webp', 'image/webp', 'webp', 25242, 0, '2023/03/04/', NULL, NULL, 'c98b5df0cddc38f3f18e69e60aea5277fba5caaf', 'local', 1, NULL, '2023-03-04 10:35:57', '2023-03-04 10:35:57'),
	(36, '66989e63ec3306cca5a6a67b62d7ddb129bab376', 'IMG-20221122-WA0008.jpg', 'image/jpeg', 'jpg', 81062, 0, '2023/03/04/', NULL, NULL, 'a937b0e7f08ea9c20a597eb09974c4efccb0f5de', 'local', 1, NULL, '2023-03-04 10:44:39', '2023-03-04 10:44:39'),
	(37, '936ddca5e27855543a1f239bef16fbbb8c045cd8', 'P9280216-1-scaled.webp', 'image/webp', 'webp', 25242, 0, '2023/03/04/', NULL, NULL, 'c98b5df0cddc38f3f18e69e60aea5277fba5caaf', 'local', 1, NULL, '2023-03-04 10:45:19', '2023-03-04 10:45:19'),
	(38, 'e2767b6c608d5ffedd87854f209b0d73559c1d24', 'blob', 'image/png', 'png', 232913, 0, '2023/03/04/', NULL, NULL, 'e4329263f30eed2064a10a0160dad9a159f439e1', 'local', 1, NULL, '2023-03-04 10:46:18', '2023-03-04 10:46:18'),
	(39, '48e75ae1be2328787f399859aeb697e88d8a4d8b', 'blob', 'image/png', 'png', 328243, 0, '2023/03/04/', NULL, NULL, '9e56d0be415e8a05bcd38230d133c283a0792b0b', 'local', 1, NULL, '2023-03-04 10:46:52', '2023-03-04 10:46:52'),
	(40, '8266ce97944fd675d71c8822c895a2bfda698dd6', 'blob', 'image/png', 'png', 257096, 0, '2023/03/04/', NULL, NULL, 'ef6c085cd6950a442deca6b9da9871f412ab634d', 'local', 1, NULL, '2023-03-04 11:05:21', '2023-03-04 11:05:21'),
	(41, '9f915887e455d4d1a23fa59684353342e26c4b2f', 'blob', 'image/png', 'png', 330457, 0, '2023/03/04/', NULL, NULL, '0e2a69fae05da7588bf0879d8f0b2b1e742a6d63', 'local', 1, NULL, '2023-03-04 11:05:40', '2023-03-04 11:05:40'),
	(42, '4436545e950004c4a0a02f4f880651ff43b67281', 'SensibilisationRosine-scaled.webp', 'image/webp', 'webp', 140176, 0, '2023/03/04/', NULL, NULL, '83a1b93a1e10cc9ca63841fc04d8a588d90a9bd1', 'local', 1, NULL, '2023-03-04 11:06:04', '2023-03-04 11:06:04'),
	(43, 'd67da4ab3269d9b2ea886de639b02bb0b4c4fb5e', 'blob', 'image/png', 'png', 186382, 0, '2023/03/04/', NULL, NULL, '1e048580614296f2d3d3899a6e0d8591afce28aa', 'local', 1, NULL, '2023-03-04 11:08:02', '2023-03-04 11:08:02'),
	(44, 'd67da4ab3269d9b2ea886de639b02bb0b4c4fb5e', 'blob', 'image/png', 'png', 186382, 0, '2023/03/04/', NULL, NULL, '1e048580614296f2d3d3899a6e0d8591afce28aa', 'local', 1, NULL, '2023-03-04 11:09:11', '2023-03-04 11:09:11'),
	(45, 'a046442a9af3243d1ed1199c72f13707c6fd9c1a', 'blob', 'image/png', 'png', 202308, 0, '2023/03/04/', NULL, NULL, 'a7e1116eb9ffdfe9e0762b3d736a632a8772188a', 'local', 1, NULL, '2023-03-04 11:09:41', '2023-03-04 11:09:41'),
	(46, 'ec3bdb9151001f74deb467b457419b4c4ce7af85', 'blob', 'image/png', 'png', 187372, 0, '2023/03/04/', NULL, NULL, '8f03d6335f5073c345555f1e1e1426b8d79789e3', 'local', 1, NULL, '2023-03-04 11:10:29', '2023-03-04 11:10:29'),
	(47, '4cf2a0d2e5029ea92da5149b9b156414f9ee717f', 'blob', 'image/png', 'png', 230854, 0, '2023/03/04/', NULL, NULL, '026e92bd2679231d243b057e1edd4c12dd813598', 'local', 1, NULL, '2023-03-04 11:11:01', '2023-03-04 11:11:01'),
	(48, 'f3811119ed36ac2fc84677c36e6a6913ffde8853', 'blob', 'image/png', 'png', 185052, 0, '2023/03/04/', NULL, NULL, 'e562f47e242159933e112bcdac9cf0ede281133f', 'local', 1, NULL, '2023-03-04 11:11:27', '2023-03-04 11:11:27'),
	(49, '8f5dfa9c60027fa7850acd30c46bf62e1ebb26cd', 'blob', 'image/png', 'png', 197564, 0, '2023/03/04/', NULL, NULL, 'd85a00d397365627cbf2c262f96a98fc8a577324', 'local', 1, NULL, '2023-03-04 11:12:06', '2023-03-04 11:12:06'),
	(50, '166c17506783cf5e6fdd9b77964921e2b076661b', 'blob', 'image/png', 'png', 197288, 0, '2023/03/04/', NULL, NULL, '9c3fb52f9303c6ec9cad095ad82bd4432a55a63e', 'local', 1, NULL, '2023-03-04 11:12:44', '2023-03-04 11:12:44'),
	(51, 'bd6c9e9e484cfa3a997bd4c371a209892c5da32f', 'blob', 'image/png', 'png', 155496, 0, '2023/03/04/', NULL, NULL, 'e9d0cf23b4af3e8b3fb6c4b7de66db572d42a234', 'local', 1, NULL, '2023-03-04 11:13:21', '2023-03-04 11:13:21'),
	(52, '38cad1df196bde17b3f1d2293378638fb9696f6d', 'blob', 'image/png', 'png', 199211, 0, '2023/03/04/', NULL, NULL, '175da912f442116e822bcea6fff712eb68050f3e', 'local', 1, NULL, '2023-03-04 11:13:56', '2023-03-04 11:13:56'),
	(53, '880dc5e7f80675007ac660f8710e52b94388a5f4', 'blob', 'image/png', 'png', 156279, 0, '2023/03/04/', NULL, NULL, '90ae743ef015cf14ec23fd19f3bac405c413337c', 'local', 1, NULL, '2023-03-04 11:24:57', '2023-03-04 11:24:57'),
	(54, '0770fc8e296c0414ba6186f15d02236e4918d673', 'blob', 'image/png', 'png', 193824, 0, '2023/03/04/', NULL, NULL, '7df97db9536e82d20c3cdd1bcf08c90e996b69a2', 'local', 1, NULL, '2023-03-04 11:25:45', '2023-03-04 11:25:45'),
	(55, 'ab12bdbdd941a4151039f816ca95d875e5ce876a', 'blob', 'image/png', 'png', 220935, 0, '2023/03/04/', NULL, NULL, 'e5b35a5992d1ff9251607f4d8b3c351256bd8235', 'local', 1, NULL, '2023-03-04 11:26:17', '2023-03-04 11:26:17'),
	(56, '3c12cc2134a10f6345cc2e1ec4ff7066c049163e', 'blob', 'image/png', 'png', 214524, 0, '2023/03/04/', NULL, NULL, '510bca78934cf88a3ca3970038e3b14e895b1441', 'local', 1, NULL, '2023-03-04 11:26:47', '2023-03-04 11:26:47'),
	(57, '4687a798655c875639ced0ec74a8de47098779b0', 'blob', 'image/png', 'png', 215193, 0, '2023/03/04/', NULL, NULL, '5155aebaedc26764061303ec9ee45493783c965a', 'local', 1, NULL, '2023-03-04 11:27:14', '2023-03-04 11:27:14'),
	(58, '1b00ff091d6daa5ce9836284cd2eacab6d1e333b', 'blob', 'image/png', 'png', 223219, 0, '2023/03/04/', NULL, NULL, '6da7f69e3ed671d49497a35b680f4e555d26445d', 'local', 1, NULL, '2023-03-04 11:27:52', '2023-03-04 11:27:52'),
	(59, 'c84af79414d373734971e427872ad608374a0818', 'blob', 'image/png', 'png', 222616, 0, '2023/03/04/', NULL, NULL, 'a53fffa6c2341c0755552bf1168a8c11fd96b99b', 'local', 1, NULL, '2023-03-04 11:28:20', '2023-03-04 11:28:20'),
	(60, '1402cd6d4f85f981f080a81c8e949a83c372108a', 'blob', 'image/png', 'png', 168695, 0, '2023/03/04/', NULL, NULL, '4d1093de3515b497bae6eeeba02236e22d76f43a', 'local', 1, NULL, '2023-03-04 11:28:46', '2023-03-04 11:28:46'),
	(61, 'c406f3500e76b2358456827b02134b5e8e8ac3d9', 'blob', 'image/png', 'png', 212936, 0, '2023/03/04/', NULL, NULL, '337a1ad7c5a61d930da476f5034855162e2bac4e', 'local', 1, NULL, '2023-03-04 11:29:14', '2023-03-04 11:29:14'),
	(62, '03edab0421b55bdd5d3d7476a9c28591503c9205', 'blob', 'image/png', 'png', 146726, 0, '2023/03/04/', NULL, NULL, 'acac03ffc9e708a14a2389a8112b77bfa05afc79', 'local', 1, NULL, '2023-03-04 11:31:59', '2023-03-04 11:31:59'),
	(63, '481976bc6535233fe7eddbff828b9cfe5c53cb09', 'blob', 'image/png', 'png', 158857, 0, '2023/03/04/', NULL, NULL, '23a942fe461d7606a11f06d77504693ea03b8dfc', 'local', 1, NULL, '2023-03-04 11:32:54', '2023-03-04 11:32:54'),
	(64, '8f0b52a23d7e3ea2849b525b231a161f1055737d', 'blob', 'image/png', 'png', 153983, 0, '2023/03/04/', NULL, NULL, '33e314d4b2e77b21ef155dc75748436668f8ce78', 'local', 1, NULL, '2023-03-04 11:33:34', '2023-03-04 11:33:34'),
	(65, '7c0612f35d1842e5d636533d2cf84d50082e21a0', 'blob', 'image/png', 'png', 144651, 0, '2023/03/04/', NULL, NULL, 'ab70c9ef00e4891107e1fad0b0650343bc9b2696', 'local', 1, NULL, '2023-03-04 11:34:22', '2023-03-04 11:34:22'),
	(66, '035fd1c3c6d707db8955647a19d65f382cd403ae', 'blob', 'image/png', 'png', 223636, 0, '2023/03/04/', NULL, NULL, 'afc393a55f0c45f2c9c7d519c0f1bb8334c97685', 'local', 1, NULL, '2023-03-04 11:34:59', '2023-03-04 11:34:59'),
	(67, '52403de43fe1a4565e59555a2a341c5aec7f1800', 'blob', 'image/png', 'png', 218312, 0, '2023/03/04/', NULL, NULL, '55e0a46628738f7a7ac3f80e613ff8ba3fcb6289', 'local', 1, NULL, '2023-03-04 11:35:48', '2023-03-04 11:35:48'),
	(68, 'bfbaaa548fd8445d47e10a8771fe432cdd2016ed', 'blob', 'image/png', 'png', 229979, 0, '2023/03/04/', NULL, NULL, 'f9084b12f0be949f9cc02620bca55d4be94b603f', 'local', 1, NULL, '2023-03-04 11:36:26', '2023-03-04 11:36:26'),
	(69, '7f323a74e7cdabf73f8bef06ae8e7e9df8a497e7', 'blob', 'image/png', 'png', 166635, 0, '2023/03/04/', NULL, NULL, 'abef683d82ded2a9a1f5ca66ff274be357e3df83', 'local', 1, NULL, '2023-03-04 11:36:56', '2023-03-04 11:36:56'),
	(70, 'aa7111c199876a2037e1bb4b080fa1c109d619c0', 'blob', 'image/png', 'png', 218736, 0, '2023/03/04/', NULL, NULL, '2cbb0023e695cdea43024b61411a97eaa34487c8', 'local', 1, NULL, '2023-03-04 11:37:21', '2023-03-04 11:37:21'),
	(71, 'f244d7a360a0bbea41ce6e24f27c529e00d60569', 'blob', 'image/png', 'png', 161429, 0, '2023/03/04/', NULL, NULL, 'de63d6dba59156474e579bbfda788d40d6877871', 'local', 1, NULL, '2023-03-04 11:37:52', '2023-03-04 11:37:52'),
	(72, '9bda94c21d7b27b4efd4914d8dd845c7bde0572a', 'blob', 'image/png', 'png', 196096, 0, '2023/03/04/', NULL, NULL, '818fc08c695aaeb63744d16db95c39990f7ef4e9', 'local', 1, NULL, '2023-03-04 11:38:19', '2023-03-04 11:38:19'),
	(73, '2eda48dc578d5af726f72187701d2af257272d55', 'blob', 'image/png', 'png', 233082, 0, '2023/03/04/', NULL, NULL, '990dbc9a12823848c7053085e541005502032c30', 'local', 1, NULL, '2023-03-04 11:38:45', '2023-03-04 11:38:45'),
	(74, '00bf394c0c63ec45efa582622a964d0512c9416d', 'blob', 'image/png', 'png', 216642, 0, '2023/03/04/', NULL, NULL, 'f3c4047344af3305fa5b54ab60f0718704e35a27', 'local', 1, NULL, '2023-03-04 11:39:16', '2023-03-04 11:39:16'),
	(75, '00e509c95a0c7a95c77231aa0368f8a63a26aafd', 'blob', 'image/png', 'png', 150414, 0, '2023/03/04/', NULL, NULL, '9172144a459c189ee92713d36a53bbf2c5f19668', 'local', 1, NULL, '2023-03-04 11:41:31', '2023-03-04 11:41:31'),
	(76, '968b426d8ad8fee5f2d4a4f43cd892790a79be5b', 'blob', 'image/png', 'png', 154171, 0, '2023/03/04/', NULL, NULL, 'b8c126ab3f032764647d90ff3fed473a7449891f', 'local', 1, NULL, '2023-03-04 11:45:50', '2023-03-04 11:45:50'),
	(77, '7c0612f35d1842e5d636533d2cf84d50082e21a0', 'blob', 'image/png', 'png', 144651, 0, '2023/03/04/', NULL, NULL, 'ab70c9ef00e4891107e1fad0b0650343bc9b2696', 'local', 1, NULL, '2023-03-04 11:46:15', '2023-03-04 11:46:15'),
	(82, '156fda1a8600eacf7ca3542c03221c36b8f75344', 'certificat devenir administrateur réseau.png', 'image/png', 'png', 250360, 0, '2023/03/14/', NULL, NULL, '532f5ba7a7d1a4c484027072e5ab486430c0da2a', 'local', 1, NULL, '2023-03-14 14:19:49', '2023-03-14 14:19:49'),
	(83, '156fda1a8600eacf7ca3542c03221c36b8f75344', 'certificat devenir administrateur réseau.png', 'image/png', 'png', 250360, 0, '2023/03/14/', NULL, NULL, '532f5ba7a7d1a4c484027072e5ab486430c0da2a', 'local', 1, NULL, '2023-03-14 14:27:20', '2023-03-14 14:27:20');

-- Listage de la structure de table ywca. categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table ywca.categories : ~0 rows (environ)

-- Listage de la structure de table ywca. cities
CREATE TABLE IF NOT EXISTS `cities` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `country_id` bigint unsigned NOT NULL,
  `state_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_code` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table ywca.cities : ~0 rows (environ)

-- Listage de la structure de table ywca. contacts
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table ywca.contacts : ~0 rows (environ)

-- Listage de la structure de table ywca. countries
CREATE TABLE IF NOT EXISTS `countries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `iso2` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `phone_code` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iso3` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subregion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table ywca.countries : ~0 rows (environ)

-- Listage de la structure de table ywca. currencies
CREATE TABLE IF NOT EXISTS `currencies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `country_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precision` tinyint NOT NULL DEFAULT '2',
  `symbol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `symbol_native` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `symbol_first` tinyint NOT NULL DEFAULT '1',
  `decimal_mark` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '.',
  `thousands_separator` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ',',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table ywca.currencies : ~0 rows (environ)

-- Listage de la structure de table ywca. dons
CREATE TABLE IF NOT EXISTS `dons` (
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monnaie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `montant` double(8,2) NOT NULL,
  `mode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table ywca.dons : ~0 rows (environ)
INSERT INTO `dons` (`titre`, `prenom`, `nom`, `email`, `telephone`, `pays`, `monnaie`, `montant`, `mode`, `created_at`, `updated_at`) VALUES
	('madame', 'Lycée MAMA LEONA', 'Institu KPAMA', 'jiluyela128@gmail.com', '+243821979060', 'Congo-Brazzaville', 'Franc congolais (FC)', 12000.00, 'Mobile Monney', '2023-04-12 04:11:50', '2023-04-12 04:11:50');

-- Listage de la structure de table ywca. failed_jobs
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

-- Listage des données de la table ywca.failed_jobs : ~0 rows (environ)

-- Listage de la structure de table ywca. languages
CREATE TABLE IF NOT EXISTS `languages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_native` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dir` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table ywca.languages : ~0 rows (environ)

-- Listage de la structure de table ywca. membres
CREATE TABLE IF NOT EXISTS `membres` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table ywca.membres : ~0 rows (environ)

-- Listage de la structure de table ywca. migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table ywca.migrations : ~0 rows (environ)
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

-- Listage de la structure de table ywca. notifications
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint unsigned NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table ywca.notifications : ~0 rows (environ)

-- Listage de la structure de table ywca. partners
CREATE TABLE IF NOT EXISTS `partners` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table ywca.partners : ~0 rows (environ)

-- Listage de la structure de table ywca. password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table ywca.password_resets : ~0 rows (environ)

-- Listage de la structure de table ywca. personal_access_tokens
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

-- Listage des données de la table ywca.personal_access_tokens : ~0 rows (environ)

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

-- Listage des données de la table ywca.photos : ~29 rows (environ)
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

-- Listage de la structure de table ywca. posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `category_id` bigint unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_user_id_foreign` (`user_id`),
  KEY `posts_category_id_foreign` (`category_id`),
  CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table ywca.posts : ~0 rows (environ)

-- Listage de la structure de table ywca. roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table ywca.roles : ~0 rows (environ)

-- Listage de la structure de table ywca. role_users
CREATE TABLE IF NOT EXISTS `role_users` (
  `user_id` bigint unsigned NOT NULL,
  `role_id` int unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_users_role_id_foreign` (`role_id`),
  CONSTRAINT `role_users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table ywca.role_users : ~0 rows (environ)

-- Listage de la structure de table ywca. services
CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table ywca.services : ~5 rows (environ)
INSERT INTO `services` (`id`, `name`, `description`, `image_one`, `image_two`, `video`, `created_at`, `updated_at`) VALUES
	(1, 'Psychothérapie', '<p><span style="background-color: rgba(255, 255, 255, 0.6); color: rgb(17, 17, 17);">Le rôle du service de psychothérapie est d’offrir un traitement par des moyens psychologiques. Ce traitement se fait par des entretiens réguliers avec un ou une psychothérapeute. </span></p><p><span style="background-color: rgba(255, 255, 255, 0.6); color: rgb(17, 17, 17);">Le but est d’aider les personnes à surmonter leurs difficultés émotionnelles et psychologiques en </span><strong style="background-color: rgba(255, 255, 255, 0.6); color: rgb(17, 17, 17);">leur offrant un espace sécurisé</strong><span style="background-color: rgba(255, 255, 255, 0.6); color: rgb(17, 17, 17);"> pour explorer leurs pensées et leurs sentiments.</span></p><p><br></p><p><span style="background-color: rgba(255, 255, 255, 0.6); color: rgb(17, 17, 17);">Nous procédons par :</span></p><ol><li><strong style="background-color: rgba(255, 255, 255, 0.6); color: rgb(17, 17, 17);">La thérapie individuelle;</strong></li><li><strong style="background-color: rgba(255, 255, 255, 0.6); color: rgb(17, 17, 17);">Le conselling;</strong></li><li><strong style="background-color: rgba(255, 255, 255, 0.6); color: rgb(17, 17, 17);">La thérapie de groupe.</strong></li></ol>', '/storage/2023/03/04/1487b6efa442e100803cc37f4b063503d0b59edb.png', '/storage/2023/03/04/38e8ee96badcdd4ffbfa74da0b28a9575e790519.png', 'http://127.0.0.1:8000/admin/crud/create/service-resources', '2023-02-23 22:05:10', '2023-03-04 10:11:33'),
	(2, 'Formation', '<p>Nous aidons les femmes à rester compétitifs dans un environnement en constante évolution en mettant à votre disposition des formations dans les domaines ci-après&nbsp;:</p><p class="pageShadowHasTransparentBackground"><br></p><h1 class="pageShadowHasTransparentBackground"><strong class="pageShadowHasTransparentBackground">Coupe et Couture;</strong></h1><p class="pageShadowHasTransparentBackground"><br></p><p class="pageShadowHasTransparentBackground"><img src="/storage/2023/03/04/02be5ee3f6f87e20c6201b4c9cfb5fe5c88a67a8.jpg" class="pageShadowHasTransparentBackground"></p><p class="pageShadowHasTransparentBackground"><br></p><h1 class="pageShadowHasTransparentBackground"><strong class="pageShadowHasTransparentBackground">Alphabétisation;</strong></h1><p class="pageShadowHasTransparentBackground"><br></p><p class="pageShadowHasTransparentBackground"><img src="/storage/2023/03/04/8158872d85435db5e3602dbad854cf625b646f83.jpg" class="pageShadowHasTransparentBackground"></p><p class="pageShadowHasTransparentBackground"><br></p><h1 class="pageShadowHasTransparentBackground">Restauration.</h1><p class="pageShadowHasTransparentBackground"><br></p><p class="pageShadowHasTransparentBackground"><img src="/storage/2023/03/04/be830830bfbda5f8d4536e3f785189a6823259d1.jpg"></p><p class="pageShadowHasTransparentBackground"><br></p>', '/storage/2023/03/04/f7b9bd6ba98771b1a77e23e26e93f1dad5cff94e.png', '/storage/2023/03/04/2a422c47895e3ffdd8172dfe54ec79fc8f535e50.png', 'http://127.0.0.1:8000/admin/crud/create/service-resources', '2023-03-04 09:59:50', '2023-03-04 10:20:02'),
	(3, 'Médical', '<p><span style="color: rgba(0, 0, 0, 0.8);" class="pageShadowHasTransparentBackground">Le volet Médical joue le rôle de la prise en charge et d’accompagnement médical des survivantes dans le projet PAPJMS.</span></p><p class="pageShadowHasTransparentBackground"><span class="pageShadowHasTransparentBackground" style="color: rgba(0, 0, 0, 0.8);">Il œuvre aussi en Synergie avec les volets sport et musicothérapie, psychothérapie et juridique.</span></p><p class="pageShadowHasTransparentBackground"><br></p>', '/storage/2023/03/04/46fa5ebef02343484d968e05d57dcdb40aaf8379.png', '/storage/2023/03/04/1c8961d699cb39edceff5286fbabc4a740e4e1bd.png', 'http://127.0.0.1:8000/admin/crud/create/service-resources', '2023-03-04 10:26:01', '2023-03-04 10:26:01'),
	(4, 'Juridique', '<p>En vue de lutter efficacement contre les violences sexuelles et celles basées sur le genre, la YWCA-DRC accopmpagne les survivantes de violences a travers l’accompagnement juridique et judicaire.</p><p>Le but de cet accompagnement est de réduire sensiblement l’augmentation des cas des violences sexuelles et basées sur le genre a Kinshasa.</p>', '/storage/2023/03/04/cc1684a1f606b7e4b6f453ec99b26ce872ad3a9e.png', '/storage/2023/03/04/0f2d48f5d6b7643a72b3ce899c983be8d7ce48a9.png', NULL, '2023-03-04 10:30:18', '2023-03-04 10:30:18'),
	(5, 'Sport, Art et Créativité', '<p class="ql-align-justify">Le volet accompagne les personnes traumatisées et stressées sur le plan physique et psychique d’une part et sensibilise les communautés sur les diverses thématiques notamment le tribalisme, les violences basées sur le genre, violences sexuelles en vue de contribuer a la cohésion sociale.</p><p class="ql-align-justify">Pour le bien-être des gens nous organisons comme activités:</p><ul><li><a href="http://www.ywca-drc.org/services/sport-art-et-creativite/sport/" rel="noopener noreferrer" target="_blank" style="color: rgb(102, 153, 0);">Sport</a></li><li><a href="http://www.ywca-drc.org/services/sport-art-et-creativite/musicotherapie/" rel="noopener noreferrer" target="_blank" style="color: rgb(102, 153, 0);">Musicothérapie</a></li><li><a href="http://www.ywca-drc.org/services/sport-art-et-creativite/theatre-forum/" rel="noopener noreferrer" target="_blank" style="color: rgb(102, 153, 0);">Théâtre Forum</a></li></ul><p><br></p><h1>Sport</h1><p>Le volet accompagne les personnes traumatisées et stressées sur le plan physique et psychique. Pour le bien-être des gens nous organisons comme activités:</p><p><img src="/storage/2023/03/04/66989e63ec3306cca5a6a67b62d7ddb129bab376.jpg"></p><p><br></p><h1>Musicothérapie</h1><p>Nous offrons la&nbsp;<strong>musicothérapie</strong>&nbsp;qui appartient à ce que l’on appelle l’art-thérapie. La musique et les sons sont employés sous toutes leurs formes comme moyen d’expression et de communication. Sa permettrait de rétablir, maintenir ou améliorer la santé psychique, physique ou émotionnelle d’un individu.</p><p><img src="/storage/2023/03/04/936ddca5e27855543a1f239bef16fbbb8c045cd8.webp"></p><p><br></p><h1>Théâtre Forum</h1><p>Nous travaillons avec un groupe de théâtre forum pour sensibiliser les gens au sein des communautés de Kinshasa.</p><p class="pageShadowHasTransparentBackground"><br></p><iframe class="ql-video" frameborder="0" allowfullscreen="true" src="https://www.youtube.com/embed/cHs07XWXkws"></iframe><p class="pageShadowHasTransparentBackground"><br></p>', '/storage/2023/03/04/e2767b6c608d5ffedd87854f209b0d73559c1d24.png', '/storage/2023/03/04/48e75ae1be2328787f399859aeb697e88d8a4d8b.png', 'http://127.0.0.1:8000/admin/crud/create/service-resources', '2023-03-04 10:47:01', '2023-03-04 10:51:52'),
	(6, 'Sensibilisation', '<p>Notre ensemble d’activités visant à tenir aux aguets les individus, les groupes et les communautés à des problèmes sociaux, environnementaux, de santé, de sécurité ou d’autres enjeux pertinents.</p><p class="pageShadowHasTransparentBackground"><img src="/storage/2023/03/04/4436545e950004c4a0a02f4f880651ff43b67281.webp"></p>', '/storage/2023/03/04/8266ce97944fd675d71c8822c895a2bfda698dd6.png', '/storage/2023/03/04/9f915887e455d4d1a23fa59684353342e26c4b2f.png', NULL, '2023-03-04 11:06:08', '2023-03-04 11:06:08');

-- Listage de la structure de table ywca. states
CREATE TABLE IF NOT EXISTS `states` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `country_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_code` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table ywca.states : ~0 rows (environ)

-- Listage de la structure de table ywca. teams
CREATE TABLE IF NOT EXISTS `teams` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `fonction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table ywca.teams : ~0 rows (environ)

-- Listage de la structure de table ywca. testmonies
CREATE TABLE IF NOT EXISTS `testmonies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table ywca.testmonies : ~0 rows (environ)
INSERT INTO `testmonies` (`id`, `name`, `comment`, `photo`, `created_at`, `updated_at`) VALUES
	(1, 'jonathan mupene', 'Phasellus leo dolorPraesent nec nisl a purusVestibulum ante ipsum primis in faucibus orci luct', 'http://127.0.0.1:8000/storage/2023/02/23/886af1518285aa899c5b9fa2d9c604604021882b.png', '2023-02-23 22:02:35', '2023-02-23 22:02:35');

-- Listage de la structure de table ywca. timezones
CREATE TABLE IF NOT EXISTS `timezones` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `country_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table ywca.timezones : ~0 rows (environ)

-- Listage de la structure de table ywca. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `permissions` json DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table ywca.users : ~0 rows (environ)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `permissions`) VALUES
	(1, 'admin', 'admin@admin.com', NULL, '$2y$10$F5ZtDBbyZngROKDCrq2Wm.suSaUgQ9P5psiM7votyhf52pQ/sEkQK', 'iqEI7ORYxMe1TZmbw2OfEulpjT3C8lJ4XErkNow2ZvVCT6umhUTxGKwRYxpx', '2023-02-23 13:21:41', '2023-02-23 13:21:41', '{"platform.index": true, "platform.systems.roles": true, "platform.systems.users": true, "platform.systems.attachment": true}');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
