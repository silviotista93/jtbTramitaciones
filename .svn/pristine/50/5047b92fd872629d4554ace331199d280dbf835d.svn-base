# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.1.26-MariaDB)
# Database: jtb
# Generation Time: 2018-09-17 15:27:01 +0000
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
	(1,0,0,'Cancelado',NULL,NULL,1,'2018-09-14 23:47:41','2018-09-14 23:47:41'),
	(2,0,0,'Cancelado',NULL,NULL,2,'2018-09-15 00:03:07','2018-09-15 00:03:07'),
	(3,0,0,'Cancelado',NULL,NULL,3,'2018-09-15 00:04:50','2018-09-15 00:04:50'),
	(4,0,0,'Cancelado',NULL,NULL,4,'2018-09-15 00:27:05','2018-09-15 00:27:05'),
	(5,0,0,'Cancelado',NULL,NULL,5,'2018-09-15 08:51:17','2018-09-15 08:51:17'),
	(6,0,0,'Cancelado',NULL,NULL,6,'2018-09-15 08:51:33','2018-09-15 08:51:33'),
	(7,1000000,57650,'Debe',NULL,NULL,7,'2018-09-15 08:52:08','2018-09-15 08:52:08'),
	(8,0,0,'Cancelado',NULL,NULL,8,'2018-09-15 08:52:41','2018-09-15 08:52:41'),
	(9,0,0,'Cancelado',NULL,NULL,9,'2018-09-15 08:53:01','2018-09-15 08:53:01');

/*!40000 ALTER TABLE `abonos` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table agendas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `agendas`;

CREATE TABLE `agendas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `agendas` WRITE;
/*!40000 ALTER TABLE `agendas` DISABLE KEYS */;

INSERT INTO `agendas` (`id`, `nombre`, `telefono`, `telefono_2`, `email`, `direccion`, `descripcion`, `created_at`, `updated_at`)
VALUES
	(1,'Nidia Perez','(312) 312-3123',NULL,NULL,NULL,'Secretaria de JTB','2018-09-15 10:13:39','2018-09-15 10:13:39'),
	(2,'Hanner Licencias','(322) 312-3123',NULL,NULL,NULL,'Licencias Piendamo','2018-09-15 10:14:30','2018-09-15 10:14:30'),
	(3,'Andres Navia','(318) 234-5611','(312) 312-3412','andres@gmail.com','Calle 6 # 21-48','Escuelas de Conducción','2018-09-15 11:23:46','2018-09-15 11:23:46');

/*!40000 ALTER TABLE `agendas` ENABLE KEYS */;
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
	(1,'A2','PUBLICO','Primera Vez',750000,700000,2,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(2,'B1','PUBLICO','Primera Vez',1100000,900000,2,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(3,'C1','PUBLICO','Primera Vez',1150000,950000,2,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(4,'C2','PUBLICO','Primera Vez',1200000,1100000,2,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(5,'C3','PUBLICO','Primera Vez',1500000,1400000,2,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(6,'A2','PUBLICO','Refrendacion',200000,170000,2,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(7,'B1','PUBLICO','Refrendacion',210000,180000,2,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(8,'C1','PUBLICO','Refrendacion',220000,200000,2,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(9,'C2','PUBLICO','Refrendacion',230000,210000,2,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(10,'C3','PUBLICO','Refrendacion',230000,210000,2,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(11,'A2','PUBLICO','Recategorizar',300000,200000,2,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(12,'B1','PUBLICO','Recategorizar',250000,230000,2,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(13,'C1','PUBLICO','Recategorizar',280000,250000,2,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(14,'C2','PUBLICO','Recategorizar',290000,260000,2,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(15,'A2','TRAMITADOR','Primera Vez',0,0,2,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(16,'B1','TRAMITADOR','Primera Vez',0,0,2,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(17,'C1','TRAMITADOR','Primera Vez',0,0,2,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(18,'C2','TRAMITADOR','Primera Vez',0,0,2,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(19,'C3','TRAMITADOR','Primera Vez',0,0,2,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(20,'A2','TRAMITADOR','Refrendacion',0,0,2,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(21,'B1','TRAMITADOR','Refrendacion',0,0,2,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(22,'C1','TRAMITADOR','Refrendacion',0,0,2,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(23,'C2','TRAMITADOR','Refrendacion',0,0,2,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(24,'C3','TRAMITADOR','Refrendacion',0,0,2,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(25,'A2','TRAMITADOR','Recategorizar',0,0,2,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(26,'B1','TRAMITADOR','Recategorizar',0,0,2,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(27,'C1','TRAMITADOR','Recategorizar',0,0,2,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(28,'C2','TRAMITADOR','Recategorizar',0,0,2,'2018-09-11 10:19:01','2018-09-11 10:19:01');

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
	(634,'2014_10_12_000000_create_users_table',2),
	(635,'2014_10_12_100000_create_password_resets_table',2),
	(636,'2018_07_03_153506_create_permission_tables',2),
	(637,'2018_07_03_214850_create_seguros_table',2),
	(638,'2018_07_03_221355_create_tramites_table',2),
	(639,'2018_07_03_221430_create_tipo_vehiculos_table',2),
	(640,'2018_07_07_210205_create_resumen_tramites_table',2),
	(641,'2018_07_07_211523_create_resumen_tramite_seguro_table',2),
	(642,'2018_07_25_104416_create_tipo_documentos_table',2),
	(643,'2018_07_31_204557_create_abonos_table',2),
	(644,'2018_08_03_144940_resumen_tramite_abonos',2),
	(645,'2018_08_09_155526_create_licencias_table',2),
	(646,'2018_08_09_164451_create_resumen_licencia_table',2),
	(647,'2018_09_15_091914_create_agendas_table',3);

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
	(1,'App\\User',3),
	(3,'App\\User',2),
	(3,'App\\User',3),
	(4,'App\\User',1),
	(4,'App\\User',4),
	(4,'App\\User',5);

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
	(1,9,1,1,230000,NULL,NULL),
	(2,1,1,1,750000,NULL,NULL),
	(3,1,4,1,750000,NULL,NULL),
	(4,1,8,1,750000,NULL,NULL),
	(5,2,8,1,1100000,NULL,NULL),
	(6,1,9,1,750000,NULL,NULL);

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
	(1,'Efectivo',980000,2,1,1,2,'En tramite','Pendiente','Pendiente','Pendiente',NULL,'2018-09-14 23:47:41','2018-09-14 23:47:41'),
	(2,'TC-31231231',461850,NULL,4,1,1,'Entregado','Pendiente','Pendiente','Pendiente',NULL,'2018-09-15 00:03:07','2018-09-15 00:03:07'),
	(3,'Efectivo',300150,NULL,5,1,1,'Entregado','Pendiente','Pendiente','Pendiente',NULL,'2018-09-15 00:04:50','2018-09-15 00:04:50'),
	(4,'TC-1111111',750000,2,4,1,2,'En tramite','Pendiente','Pendiente','Pendiente',NULL,'2018-09-15 00:27:05','2018-09-15 00:27:05'),
	(5,'TC-312312312',595800,NULL,1,1,1,'Entregado','Pendiente','Pendiente','Pendiente',NULL,'2018-09-15 08:51:17','2018-09-15 08:51:17'),
	(6,'TC-0000000',371700,NULL,4,1,1,'Entregado','Pendiente','Pendiente','Pendiente',NULL,'2018-09-15 08:51:33','2018-09-15 08:51:33'),
	(7,'TC-123123',1057650,NULL,5,1,1,'Entregado','Pendiente','Pendiente','Pendiente',NULL,'2018-09-15 08:52:08','2018-09-15 08:52:08'),
	(8,'TC-12312312',1850000,3,4,1,2,'En tramite','Pendiente','Pendiente','Pendiente',NULL,'2018-09-15 08:52:41','2018-09-15 08:52:41'),
	(9,'Efectivo',750000,3,5,1,2,'En tramite','Pendiente','Pendiente','Pendiente',NULL,'2018-09-15 08:53:01','2018-09-15 08:53:01');

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
	(1,19,2,1,461850,NULL,NULL),
	(2,13,3,1,300150,NULL,NULL),
	(3,20,5,1,595800,NULL,NULL),
	(4,18,6,1,371700,NULL,NULL),
	(5,20,7,1,595800,NULL,NULL),
	(6,19,7,1,461850,NULL,NULL);

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
	(1,'Administrador','web','2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(2,'Secretari@','web','2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(3,'Tramitador','web','2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(4,'Cliente','web','2018-09-11 10:19:01','2018-09-11 10:19:01');

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
	(1,'Menos de 100 cc','',1,337650,1,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(2,'De 100 a 200 cc','',1,452850,1,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(3,'Mas de 200 cc','',1,510750,1,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(4,'Menos de 1500 cc','',2,531750,1,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(5,'De 1500 a 2500 cc','',2,634950,1,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(6,'Mas de 2500 cc','',2,744750,1,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(7,'Menor de 5 toneladas','',3,595800,1,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(8,'De 5 a 15 toneladas','',3,860250,1,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(9,'Mas de 15 toneladas','',3,23456,1,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(10,'Menor de 1500 cc','',4,670500,1,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(11,'De 1500 a 2500 cc','',4,845100,1,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(12,'Mas de 2500 cc','',4,1013100,1,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(13,'Menor de 1500 cc','',5,300150,1,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(14,'De 1500 a 2500 cc','',5,365400,1,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(15,'Mas de 2500 cc','',5,426750,1,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(16,'Menor de 2500 cc','',6,534900,1,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(17,'Igual o Mayor de 2500 cc','',6,715800,1,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(18,'Menor de 1500 cc','',7,371700,1,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(19,'De 1500 a 2500 cc','',7,461850,1,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(20,'Mas de 2500 cc','',7,595800,1,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(21,'Valor Unico','',8,889200,1,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(22,'Menor de 10 Pasajeros','',9,879450,1,'2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(23,'De 10 Pasajeros en adelante','',9,1275900,1,'2018-09-11 10:19:01','2018-09-11 10:19:01');

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
	(1,'Cédula Ciudadania','2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(2,'Tarjeta de Identidad','2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(3,'Cédula de Extranjeria','2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(4,'Pasaporte','2018-09-11 10:19:01','2018-09-11 10:19:01');

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
	(1,'Motos','2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(2,'Camperos y Camionetas','2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(3,'Carga o Mixto','2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(4,'Ofi Especiales Ambulancias Transporte Valores','2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(5,'Autos Familiares','2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(6,'Vehiculos con capacidad de 6 o mas personas','2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(7,'Autos de alquiler enseñanza funebres taxis microbuses','2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(8,'Buses y Busetas','2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(9,'Servicio publico intermunicipal','2018-09-11 10:19:01','2018-09-11 10:19:01');

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
	(1,'Seguro','2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(2,'Licencia','2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(3,'Matricula','2018-09-11 10:19:01','2018-09-11 10:19:01');

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
	(1,'1061759221',1,'Silvio Mauricio','Gutierrez Quiñones','silviotista93@gmail.com','$2y$10$C2FPTFS.pn8QK2r1DHo/K.4zB6hpKK8Is0z2GJiGvhH8Bu7Cd1EKW','318564382',NULL,'','activo',NULL,NULL,'lvvOaVcTylQNAUv3jxJFW0Std74Y7HKXjdlJ0mqd6afUQLrZ0EegehKrPqKG','2018-09-11 10:19:01','2018-09-11 10:19:01'),
	(2,NULL,NULL,'Ramulfo','Chamorro','ramulfo@gmail.com',NULL,'(312) 312-3131',NULL,NULL,'activo',NULL,NULL,NULL,'2018-09-14 22:13:22','2018-09-14 22:13:22'),
	(3,NULL,NULL,'Fernando','Puchana Dagua','fernando.28899@gmail.com','$2y$10$DGJkQjWzWYFTIogoYcMmY.VZAt8QBZ7s/g35jE9yWRvrSOQHog6ae','(300) 219-5160',NULL,'/adminlte/img/perfil.jpg','activo',NULL,NULL,NULL,'2018-09-14 23:49:09','2018-09-14 23:49:09'),
	(4,'123',1,'Jorge','Martinez','jorge@gmail.com',NULL,'(313) 123-1231',NULL,NULL,'activo',NULL,NULL,NULL,'2018-09-15 00:02:52','2018-09-15 00:02:52'),
	(5,'12345',2,'Daniela','Perez','dani@gmail.com',NULL,'(312) 312-3123',NULL,NULL,'activo',NULL,NULL,NULL,'2018-09-15 00:03:42','2018-09-15 00:03:42');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
