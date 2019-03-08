# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.1.26-MariaDB)
# Database: jtb
# Generation Time: 2018-09-01 03:25:06 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table abonos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `abonos`;

CREATE TABLE `abonos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `valor_abono` double NOT NULL,
  `saldo` double NOT NULL,
  `estado` enum('Cancelado','Debe') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Cancelado',
  `metodo_pago` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nota` longtext COLLATE utf8mb4_unicode_ci,
  `resumen_tramite_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `abonos` WRITE;
/*!40000 ALTER TABLE `abonos` DISABLE KEYS */;

INSERT INTO `abonos` (`id`, `valor_abono`, `saldo`, `estado`, `metodo_pago`, `nota`, `resumen_tramite_id`, `created_at`, `updated_at`)
VALUES
	(1,0,0,'Cancelado',NULL,NULL,2,'2018-08-19 23:06:37','2018-08-19 23:06:37'),
	(2,0,0,'Debe',NULL,NULL,3,'2018-08-19 23:08:01','2018-08-19 23:08:01'),
	(3,100000,326750,'Debe',NULL,NULL,6,'2018-08-19 23:31:11','2018-08-19 23:31:11'),
	(4,0,0,'Cancelado',NULL,NULL,7,'2018-08-23 09:18:22','2018-08-23 09:18:22'),
	(5,0,0,'Cancelado',NULL,NULL,8,'2018-08-23 09:20:00','2018-08-23 09:20:00'),
	(6,0,0,'Cancelado',NULL,NULL,9,'2018-08-23 11:03:30','2018-08-23 11:03:30'),
	(7,400000,530000,'Debe',NULL,NULL,10,'2018-08-23 11:55:44','2018-08-23 11:55:44'),
	(8,530000,0,'Cancelado','TC',NULL,10,'2018-08-24 14:58:00','2018-08-24 14:58:00'),
	(9,100000,100000,'Debe',NULL,NULL,11,'2018-08-24 22:51:22','2018-08-24 22:51:22'),
	(10,50000,50000,'Debe','TD','como vamos',11,'2018-08-24 23:26:41','2018-08-24 23:26:41'),
	(11,0,0,'Cancelado',NULL,NULL,12,'2018-08-24 23:44:51','2018-08-24 23:44:51'),
	(12,0,37688,'Debe','efectivo',NULL,11,'2018-08-25 09:25:52','2018-08-25 09:25:52'),
	(13,0,37688,'Debe','TC',NULL,11,'2018-08-25 09:27:45','2018-08-25 09:27:45'),
	(14,4122,33566,'Debe','TC',NULL,11,'2018-08-25 09:35:14','2018-08-25 09:35:14'),
	(15,4122,29444,'Debe','Efectivo',NULL,11,'2018-08-25 09:37:56','2018-08-25 09:37:56'),
	(16,4122,25322,'Debe','TC',NULL,11,'2018-08-25 09:44:02','2018-08-25 09:44:02'),
	(17,3122,323628,'Debe','efectivo',NULL,6,'2018-08-25 09:51:17','2018-08-25 09:51:17'),
	(18,100000,223628,'Debe','TC',NULL,6,'2018-08-25 09:53:17','2018-08-25 09:53:17'),
	(19,0,0,'Cancelado',NULL,NULL,14,'2018-08-25 12:08:40','2018-08-25 12:08:40'),
	(20,0,0,'Cancelado',NULL,NULL,15,'2018-08-25 12:17:34','2018-08-25 12:17:34'),
	(21,500000,410000,'Debe',NULL,'Feo',16,'2018-08-26 19:12:58','2018-08-26 19:12:58'),
	(22,100000,310000,'Debe','TC',NULL,16,'2018-08-26 19:15:18','2018-08-26 19:15:18'),
	(23,500000,1400000,'Debe',NULL,'Fernando luchana solo abona 500 por que es familiar',17,'2018-08-26 19:30:19','2018-08-26 19:30:19'),
	(24,1400000,0,'Cancelado','TC',NULL,17,'2018-08-26 19:35:35','2018-08-26 19:35:35'),
	(25,0,0,'Cancelado',NULL,NULL,18,'2018-08-26 19:43:46','2018-08-26 19:43:46');

/*!40000 ALTER TABLE `abonos` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table licencias
# ------------------------------------------------------------

DROP TABLE IF EXISTS `licencias`;

CREATE TABLE `licencias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `categoria` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_precio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_licencia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` double NOT NULL,
  `descuento` double NOT NULL,
  `id_tipo_tramite` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `licencias` WRITE;
/*!40000 ALTER TABLE `licencias` DISABLE KEYS */;

INSERT INTO `licencias` (`id`, `categoria`, `tipo_precio`, `tipo_licencia`, `precio`, `descuento`, `id_tipo_tramite`, `created_at`, `updated_at`)
VALUES
	(1,'A2','PUBLICO','Primera Vez',800000,700000,2,NULL,NULL),
	(2,'B1','PUBLICO','Primera Vez',1100000,900000,2,NULL,NULL),
	(3,'C1','PUBLICO','Primvera Vez',1150000,950000,2,NULL,NULL),
	(4,'C2','PUBLICO','Primera Vez',1200000,1100000,2,NULL,NULL),
	(5,'C3','PUBLICO','Primera Vez',1500000,1200000,2,NULL,NULL),
	(6,'A2','PUBLICO','Refrendacion',200000,170000,2,NULL,NULL),
	(7,'B1','PUBLICO','Refrendacion',210000,180000,2,NULL,NULL),
	(8,'C1','PUBLICO','Refrendacion',220000,200000,2,NULL,NULL),
	(9,'C2','PUBLICO','Refrendacion',230000,210000,2,NULL,NULL),
	(10,'C3','PUBLICO','Refrendacion',230000,210000,2,NULL,NULL),
	(11,'A2','PUBLICO','Recategorizar',200000,150000,2,NULL,NULL),
	(12,'B1','PUBLICO','Recategorizar',250000,230000,2,NULL,NULL),
	(13,'C1','PUBLICO','Recategorizar',280000,250000,2,NULL,NULL),
	(14,'C2','PUBLICO','Recategorizar',290000,260000,2,NULL,NULL),
	(15,'A2','TRAMITADOR','Primera Vez',700000,0,2,NULL,NULL),
	(16,'B1','TRAMITADOR','Primera Vez',900000,0,2,NULL,NULL),
	(17,'C1','TRAMITADOR','Primera Vez',1000000,0,2,NULL,NULL),
	(18,'C2','TRAMITADOR','Primera Vez',1050000,0,2,NULL,NULL),
	(19,'C3','TRAMITADOR','Primera Vez',1200000,0,2,NULL,NULL);

/*!40000 ALTER TABLE `licencias` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(478,'2018_08_09_160827_create_tipo_licencias_table',1),
	(595,'2014_10_12_000000_create_users_table',2),
	(596,'2014_10_12_100000_create_password_resets_table',2),
	(597,'2018_07_03_153506_create_permission_tables',2),
	(598,'2018_07_03_214850_create_seguros_table',2),
	(599,'2018_07_03_221355_create_tramites_table',2),
	(600,'2018_07_03_221430_create_tipo_vehiculos_table',2),
	(601,'2018_07_07_210205_create_resumen_tramites_table',2),
	(602,'2018_07_07_211523_create_resumen_tramite_seguro_table',2),
	(603,'2018_07_25_104416_create_tipo_documentos_table',2),
	(604,'2018_07_31_204557_create_abonos_table',2),
	(605,'2018_08_03_144940_resumen_tramite_abonos',2),
	(606,'2018_08_09_155526_create_licencias_table',2),
	(607,'2018_08_09_164451_create_resumen_licencia_table',2);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table model_has_permissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `model_has_permissions`;

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_type_model_id_index` (`model_type`,`model_id`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table model_has_roles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `model_has_roles`;

CREATE TABLE `model_has_roles` (
  `role_id` int(10) unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_type_model_id_index` (`model_type`,`model_id`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`)
VALUES
	(1,'App\\User',1),
	(1,'App\\User',11),
	(1,'App\\User',15),
	(1,'App\\User',16),
	(1,'App\\User',18),
	(2,'App\\User',22),
	(3,'App\\User',6),
	(3,'App\\User',7),
	(4,'App\\User',8),
	(4,'App\\User',9);

/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;

INSERT INTO `password_resets` (`email`, `token`, `created_at`)
VALUES
	('silviotista933@gmail.com','$2y$10$WsBvo.rXKHFNOjlI18Rr8uPZBWX3czJRAsmvt4LzG5GHFJjV0JR7K','2018-08-31 10:25:07');

/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table permissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table resumen_licencia
# ------------------------------------------------------------

DROP TABLE IF EXISTS `resumen_licencia`;

CREATE TABLE `resumen_licencia` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_licencia` int(10) unsigned NOT NULL,
  `id_resumen_tramite` int(10) unsigned NOT NULL,
  `cantidad` int(10) unsigned NOT NULL,
  `precio_venta` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `resumen_licencia` WRITE;
/*!40000 ALTER TABLE `resumen_licencia` DISABLE KEYS */;

INSERT INTO `resumen_licencia` (`id`, `id_licencia`, `id_resumen_tramite`, `cantidad`, `precio_venta`, `created_at`, `updated_at`)
VALUES
	(1,1,9,1,800000,NULL,NULL),
	(2,2,9,1,1100000,NULL,NULL),
	(3,1,10,1,700000,NULL,NULL),
	(4,9,10,1,230000,NULL,NULL),
	(5,11,11,1,200000,NULL,NULL),
	(6,6,14,1,200000,NULL,NULL),
	(7,2,14,1,1100000,NULL,NULL),
	(8,2,15,1,1100000,NULL,NULL),
	(9,1,16,1,700000,NULL,NULL),
	(10,9,16,1,210000,NULL,NULL),
	(11,1,17,1,800000,NULL,NULL),
	(12,2,17,1,1100000,NULL,NULL);

/*!40000 ALTER TABLE `resumen_licencia` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table resumen_tramites
# ------------------------------------------------------------

DROP TABLE IF EXISTS `resumen_tramites`;

CREATE TABLE `resumen_tramites` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `metodo_pago` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` double NOT NULL,
  `idTramitador` int(10) unsigned DEFAULT NULL,
  `idUsuario` int(10) unsigned NOT NULL,
  `idVendedor` int(10) unsigned NOT NULL,
  `id_tipoTramite` int(10) unsigned NOT NULL,
  `estado` enum('Recibido','En tramite','Entregado') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Recibido',
  `examen_medico` enum('Realizado','Pendiente') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pendiente',
  `escuela_conduccion` enum('Realizado','Pendiente') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pendiente',
  `derechos_transito` enum('Realizado','Pendiente') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pendiente',
  `nota` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `resumen_tramites` WRITE;
/*!40000 ALTER TABLE `resumen_tramites` DISABLE KEYS */;

INSERT INTO `resumen_tramites` (`id`, `metodo_pago`, `total`, `idTramitador`, `idUsuario`, `idVendedor`, `id_tipoTramite`, `estado`, `examen_medico`, `escuela_conduccion`, `derechos_transito`, `nota`, `created_at`, `updated_at`)
VALUES
	(2,'TC',665550,NULL,1,1,1,'Entregado','Pendiente','Pendiente','Pendiente',NULL,'2018-08-19 23:06:37','2018-08-19 23:06:37'),
	(3,'TC',365400,NULL,1,1,1,'Entregado','Pendiente','Pendiente','Pendiente',NULL,'2018-08-19 23:08:01','2018-08-19 23:08:01'),
	(6,'TC',426750,NULL,1,1,1,'Entregado','Pendiente','Pendiente','Pendiente',NULL,'2018-08-19 23:31:11','2018-08-19 23:31:11'),
	(7,'TC',800000,NULL,1,1,2,'En tramite','Realizado','Pendiente','Pendiente',NULL,'2018-08-23 09:18:22','2018-08-25 18:50:44'),
	(8,'TC',200000,NULL,1,1,2,'En tramite','Pendiente','Pendiente','Pendiente',NULL,'2018-08-23 09:20:00','2018-08-23 09:20:00'),
	(9,'TC',1900000,NULL,1,1,2,'En tramite','Realizado','Realizado','',NULL,'2018-08-23 11:03:30','2018-08-25 11:08:11'),
	(10,'TD',930000,NULL,1,1,2,'Entregado','Realizado','Realizado','Realizado',NULL,'2018-08-23 11:55:44','2018-08-24 17:42:13'),
	(11,'TC',200000,NULL,1,1,2,'En tramite','Realizado','Realizado','Pendiente',NULL,'2018-08-24 22:51:22','2018-08-24 23:55:41'),
	(12,'TC',1866450,NULL,1,1,1,'Entregado','Pendiente','Pendiente','Pendiente',NULL,'2018-08-24 23:44:51','2018-08-24 23:44:51'),
	(14,'TC',1300000,3,1,1,2,'En tramite','Pendiente','Pendiente','Pendiente',NULL,'2018-08-25 12:08:40','2018-08-25 12:08:40'),
	(15,'efectivo',1100000,4,1,1,2,'En tramite','Pendiente','Pendiente','Pendiente',NULL,'2018-08-25 12:17:34','2018-08-25 12:17:34'),
	(16,'TC',910000,7,1,1,2,'Entregado','Realizado','Realizado','Realizado',NULL,'2018-08-26 19:12:58','2018-08-26 19:14:04'),
	(17,'efectivo',1900000,6,9,1,2,'Entregado','Realizado','Realizado','Realizado',NULL,'2018-08-26 19:30:19','2018-08-26 19:38:27'),
	(18,'TC',337650,NULL,1,1,1,'Entregado','Pendiente','Pendiente','Pendiente',NULL,'2018-08-26 19:43:46','2018-08-26 19:43:46');

/*!40000 ALTER TABLE `resumen_tramites` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table resumenTramite_abonos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `resumenTramite_abonos`;

CREATE TABLE `resumenTramite_abonos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_abono` int(10) unsigned NOT NULL,
  `id_resumen_tramite` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table resumenTramite_seguro
# ------------------------------------------------------------

DROP TABLE IF EXISTS `resumenTramite_seguro`;

CREATE TABLE `resumenTramite_seguro` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_seguro` int(10) unsigned NOT NULL,
  `id_resumen_tramite` int(10) unsigned NOT NULL,
  `cantidad` int(10) unsigned NOT NULL,
  `precio_cantidad` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `resumenTramite_seguro` WRITE;
/*!40000 ALTER TABLE `resumenTramite_seguro` DISABLE KEYS */;

INSERT INTO `resumenTramite_seguro` (`id`, `id_seguro`, `id_resumen_tramite`, `cantidad`, `precio_cantidad`, `created_at`, `updated_at`)
VALUES
	(1,13,2,1,300150,NULL,NULL),
	(2,14,2,1,365400,NULL,NULL),
	(3,14,3,1,365400,NULL,NULL),
	(8,15,6,1,426750,NULL,NULL),
	(9,1,12,3,1012950,NULL,NULL),
	(10,15,12,2,853500,NULL,NULL),
	(11,1,18,1,337650,NULL,NULL);

/*!40000 ALTER TABLE `resumenTramite_seguro` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table role_has_permissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `role_has_permissions`;

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table roles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`)
VALUES
	(1,'Administrador','web','2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(2,'Secretari@','web','2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(3,'Tramitador','web','2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(4,'Cliente','web','2018-08-19 18:58:53','2018-08-19 18:58:53');

/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table seguros
# ------------------------------------------------------------

DROP TABLE IF EXISTS `seguros`;

CREATE TABLE `seguros` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cilindraje` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idTipoVehiculo` int(10) unsigned NOT NULL,
  `precio` double NOT NULL,
  `idTipoTramite` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `seguros` WRITE;
/*!40000 ALTER TABLE `seguros` DISABLE KEYS */;

INSERT INTO `seguros` (`id`, `cilindraje`, `modelo`, `idTipoVehiculo`, `precio`, `idTipoTramite`, `created_at`, `updated_at`)
VALUES
	(1,'Menos de 100 cc','',1,8965,1,'2018-08-19 18:58:53','2018-08-26 19:45:47'),
	(2,'De 100 a 200 cc','',1,452850,1,'2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(3,'Mas de 200 cc','',1,510750,1,'2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(4,'Menos de 1500 cc','',2,531750,1,'2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(5,'De 1500 a 2500 cc','',2,634950,1,'2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(6,'Mas de 2500 cc','',2,744750,1,'2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(7,'Menor de 5 toneladas','',3,595800,1,'2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(8,'De 5 a 15 toneladas','',3,860250,1,'2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(9,'Mas de 15 toneladas','',3,23456,1,'2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(10,'Menor de 1500 cc','',4,670500,1,'2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(11,'De 1500 a 2500 cc','',4,845100,1,'2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(12,'Mas de 2500 cc','',4,1013100,1,'2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(13,'Menor de 1500 cc','',5,300150,1,'2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(14,'De 1500 a 2500 cc','',5,365400,1,'2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(15,'Mas de 2500 cc','',5,426750,1,'2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(16,'Menor de 2500 cc','',6,534900,1,'2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(17,'Igual o Mayor de 2500 cc','',6,715800,1,'2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(18,'Menor de 1500 cc','',7,371700,1,'2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(19,'De 1500 a 2500 cc','',7,461850,1,'2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(20,'Mas de 2500 cc','',7,595800,1,'2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(21,'Valor Unico','',8,889200,1,'2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(22,'Menor de 10 Pasajeros','',9,879450,1,'2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(23,'De 10 Pasajeros en adelante','',9,1275900,1,'2018-08-19 18:58:53','2018-08-19 18:58:53');

/*!40000 ALTER TABLE `seguros` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tipo_documentos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tipo_documentos`;

CREATE TABLE `tipo_documentos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `documento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `tipo_documentos` WRITE;
/*!40000 ALTER TABLE `tipo_documentos` DISABLE KEYS */;

INSERT INTO `tipo_documentos` (`id`, `documento`, `created_at`, `updated_at`)
VALUES
	(1,'Cédula Ciudadania','2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(2,'Tarjeta de Identidad','2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(3,'Cédula de Extranjeria','2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(4,'Pasaporte','2018-08-19 18:58:53','2018-08-19 18:58:53');

/*!40000 ALTER TABLE `tipo_documentos` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tipo_vehiculos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tipo_vehiculos`;

CREATE TABLE `tipo_vehiculos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `tipo_vehiculos` WRITE;
/*!40000 ALTER TABLE `tipo_vehiculos` DISABLE KEYS */;

INSERT INTO `tipo_vehiculos` (`id`, `nombre`, `created_at`, `updated_at`)
VALUES
	(1,'Motos','2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(2,'Camperos y Camionetas','2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(3,'Carga o Mixto','2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(4,'Ofi Especiales Ambulancias Transporte Valores','2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(5,'Autos Familiares','2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(6,'Vehiculos con capacidad de 6 o mas personas','2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(7,'Autos de alquiler enseñanza funebres taxis microbuses','2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(8,'Buses y Busetas','2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(9,'Servicio publico intermunicipal','2018-08-19 18:58:53','2018-08-19 18:58:53');

/*!40000 ALTER TABLE `tipo_vehiculos` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tramites
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tramites`;

CREATE TABLE `tramites` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `tramites` WRITE;
/*!40000 ALTER TABLE `tramites` DISABLE KEYS */;

INSERT INTO `tramites` (`id`, `nombre`, `created_at`, `updated_at`)
VALUES
	(1,'Seguro','2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(2,'Licencia','2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(3,'Matricula','2018-08-19 18:58:53','2018-08-19 18:58:53');

/*!40000 ALTER TABLE `tramites` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `identificacion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_tipoIdentificacion` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` enum('activo','inactivo') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'activo',
  `genero` enum('masculino','femenino') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_nacimiento` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_identificacion_unique` (`identificacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `identificacion`, `id_tipoIdentificacion`, `name`, `apellidos`, `email`, `password`, `telefono`, `telefono_2`, `foto`, `estado`, `genero`, `fecha_nacimiento`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'1061759221',1,'Silvio Mauricio','Gutierrez Quiñones','silviotista933@gmail.com','$2y$10$01CBzJDciTVtGJz.MZ5LBuIQqyvCIg3ccfekQ3WFPDQrkqeW6C9GK','318564382',NULL,'','activo',NULL,NULL,'i0EDXPfvBp6Plfk6ImdhK1ZUdahNcEwyZpJuXfuuBK85MYayemSf3SHNMrbP','2018-08-19 18:58:53','2018-08-19 18:58:53'),
	(6,NULL,NULL,'Silvio','Puchana','fernando.2889@hotmail.com',NULL,'(310) 219-5160',NULL,NULL,'activo',NULL,NULL,NULL,'2018-08-25 14:42:10','2018-08-25 14:42:10'),
	(8,'123',3,'Jose','Martinez','jose@gmail.com',NULL,'(331) 231-1223',NULL,NULL,'activo',NULL,NULL,NULL,'2018-08-25 15:02:14','2018-08-25 15:02:14'),
	(9,'76326410',1,'Jhon','Bolaños Ortega','john@gmail.com',NULL,'(312) 231-2312',NULL,NULL,'activo',NULL,NULL,NULL,'2018-08-26 19:22:34','2018-08-26 19:22:34'),
	(11,NULL,NULL,'mao','guti','mao@gmail.com','$2y$10$4rmDgsQDJbTnmMb8zs.wteULzTMCV.rLwN.l15pVH/.Sr2RI473oe','(312) 312-3123',NULL,'/adminlte/img/perfil.jpg','activo',NULL,NULL,NULL,'2018-08-30 23:14:30','2018-08-30 23:14:30'),
	(15,NULL,NULL,'Daniel Felipe','Martinez','daniel@gmail.com','$2y$10$1YeGxveQiDeYbqrjut7mxOdLwXR4b3tKtBFKJveih6r.iUwD37bxe','(313) 123-1231',NULL,'/adminlte/img/perfil.jpg','activo',NULL,NULL,NULL,'2018-08-31 09:24:00','2018-08-31 09:24:00'),
	(22,NULL,NULL,'Silvio','Gutierrez Quiñones','silviotista93@gmail.com','$2y$10$2MzrHTO0f7GZRmE5Br0s3uilvQcvpIosCXvs5rqar7GfiY.1Yo.IO','(313) 133-3331',NULL,'/adminlte/img/perfil.jpg','activo',NULL,NULL,'NBYVHgdhz0RvKonzzOAhZoJBr9SLz4ZFQp7oawig3n6QaUPBeaplPtGliVcZ','2018-08-31 12:17:35','2018-08-31 12:30:31');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
