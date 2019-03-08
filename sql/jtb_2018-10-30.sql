# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.1.26-MariaDB)
# Database: jtb
# Generation Time: 2018-10-30 14:22:25 +0000
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

LOCK TABLES `abonos` WRITE;
/*!40000 ALTER TABLE `abonos` DISABLE KEYS */;

INSERT INTO `abonos` (`id`, `valor_abono`, `saldo`, `estado`, `metodo_pago`, `nota`, `resumen_tramite_id`, `created_at`, `updated_at`)
VALUES
	(1,0,0,'Cancelado',NULL,NULL,1,'2018-10-23 10:34:10','2018-10-23 10:34:10'),
	(2,0,0,'Cancelado',NULL,NULL,2,'2018-10-23 10:35:04','2018-10-23 10:35:04'),
	(3,0,0,'Cancelado',NULL,NULL,3,'2018-10-23 16:12:37','2018-10-23 16:12:37'),
	(4,0,0,'Cancelado',NULL,NULL,4,'2018-10-23 17:05:32','2018-10-23 17:05:32'),
	(5,500000,175300,'Debe',NULL,'Este es un abono para Jose',5,'2018-10-23 17:09:37','2018-10-23 17:09:37'),
	(6,0,0,'Cancelado',NULL,NULL,6,'2018-10-23 17:16:05','2018-10-23 17:16:05'),
	(7,50000,125300,'Debe','TC','Hola como esstas',5,'2018-10-26 21:47:50','2018-10-26 21:47:50'),
	(8,80000,45300,'Debe','efectivo',NULL,5,'2018-10-26 21:49:20','2018-10-26 21:49:20'),
	(9,0,0,'Cancelado',NULL,NULL,7,'2018-10-26 21:50:12','2018-10-26 21:50:12'),
	(10,0,0,'Cancelado',NULL,NULL,8,'2018-10-26 22:35:00','2018-10-26 22:35:00'),
	(11,0,0,'Cancelado',NULL,NULL,10,'2018-10-27 16:15:35','2018-10-27 16:15:35'),
	(12,600000,150000,'Debe',NULL,NULL,11,'2018-10-27 16:17:56','2018-10-27 16:17:56'),
	(13,500000,1280000,'Debe',NULL,NULL,12,'2018-10-29 15:09:45','2018-10-29 15:09:45'),
	(14,100000,50000,'Debe','TC-123121212',NULL,11,'2018-10-29 15:14:36','2018-10-29 15:14:36'),
	(15,20000,30000,'Debe','TD-12212312',NULL,11,'2018-10-29 15:15:02','2018-10-29 15:15:02'),
	(16,20000,10000,'Debe','Efectivo',NULL,11,'2018-10-29 15:15:15','2018-10-29 15:15:15'),
	(17,5000,5000,'Debe','TD-123109010212','Esta persona ya casi termina su deuda con nosotros',11,'2018-10-29 16:06:26','2018-10-29 16:06:26'),
	(18,30000,15300,'Debe','TC-1221312',NULL,5,'2018-10-29 16:34:37','2018-10-29 16:34:37'),
	(19,1000,14300,'Debe','efectivo-','como estas espero que estes muy bien',5,'2018-10-29 16:39:42','2018-10-29 16:39:42'),
	(20,0,0,'Cancelado',NULL,NULL,13,'2018-10-29 17:15:54','2018-10-29 17:15:54'),
	(21,5000,0,'Cancelado','Efectivo',NULL,11,'2018-10-30 08:47:35','2018-10-30 08:47:35');

/*!40000 ALTER TABLE `abonos` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table agendas
# ------------------------------------------------------------

LOCK TABLES `agendas` WRITE;
/*!40000 ALTER TABLE `agendas` DISABLE KEYS */;

INSERT INTO `agendas` (`id`, `nombre`, `telefono`, `telefono_2`, `email`, `direccion`, `descripcion`, `created_at`, `updated_at`)
VALUES
	(1,'Cristian Andres Salazar','(312) 312-2313',NULL,'cristianprogrammer@gmail.com','Detras de catay','El es el desarrollador del sistema','2018-10-26 23:25:20','2018-10-26 23:25:20');

/*!40000 ALTER TABLE `agendas` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table escuelas
# ------------------------------------------------------------

LOCK TABLES `escuelas` WRITE;
/*!40000 ALTER TABLE `escuelas` DISABLE KEYS */;

INSERT INTO `escuelas` (`id`, `valor`, `created_at`, `updated_at`)
VALUES
	(1,50000,'2018-10-23 10:24:58','2018-10-30 09:06:20');

/*!40000 ALTER TABLE `escuelas` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table licencias
# ------------------------------------------------------------

LOCK TABLES `licencias` WRITE;
/*!40000 ALTER TABLE `licencias` DISABLE KEYS */;

INSERT INTO `licencias` (`id`, `categoria`, `tipo_precio`, `tipo_licencia`, `precio`, `descuento`, `id_tipo_tramite`, `created_at`, `updated_at`)
VALUES
	(1,'A2','PUBLICO','Primera Vez',750000,700000,2,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(2,'B1','PUBLICO','Primera Vez',1100000,900000,2,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(3,'C1','PUBLICO','Primera Vez',1150000,950000,2,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(4,'C2','PUBLICO','Primera Vez',1200000,1100000,2,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(5,'C3','PUBLICO','Primera Vez',1500000,1400000,2,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(6,'A2','PUBLICO','Refrendacion',200000,170000,2,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(7,'B1','PUBLICO','Refrendacion',210000,180000,2,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(8,'C1','PUBLICO','Refrendacion',220000,200000,2,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(9,'C2','PUBLICO','Refrendacion',230000,210000,2,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(10,'C3','PUBLICO','Refrendacion',230000,210000,2,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(11,'A2','PUBLICO','Recategorizar',300000,200000,2,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(12,'B1','PUBLICO','Recategorizar',250000,230000,2,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(13,'C1','PUBLICO','Recategorizar',280000,250000,2,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(14,'C2','PUBLICO','Recategorizar',290000,260000,2,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(15,'A2','TRAMITADOR','Primera Vez',0,0,2,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(16,'B1','TRAMITADOR','Primera Vez',0,0,2,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(17,'C1','TRAMITADOR','Primera Vez',0,0,2,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(18,'C2','TRAMITADOR','Primera Vez',0,0,2,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(19,'C3','TRAMITADOR','Primera Vez',0,0,2,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(20,'A2','TRAMITADOR','Refrendacion',0,0,2,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(21,'B1','TRAMITADOR','Refrendacion',0,0,2,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(22,'C1','TRAMITADOR','Refrendacion',0,0,2,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(23,'C2','TRAMITADOR','Refrendacion',0,0,2,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(24,'C3','TRAMITADOR','Refrendacion',0,0,2,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(25,'A2','TRAMITADOR','Recategorizar',0,0,2,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(26,'B1','TRAMITADOR','Recategorizar',0,0,2,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(27,'C1','TRAMITADOR','Recategorizar',0,0,2,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(28,'C2','TRAMITADOR','Recategorizar',0,0,2,'2018-10-23 10:24:58','2018-10-23 10:24:58');

/*!40000 ALTER TABLE `licencias` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table medicos
# ------------------------------------------------------------

LOCK TABLES `medicos` WRITE;
/*!40000 ALTER TABLE `medicos` DISABLE KEYS */;

INSERT INTO `medicos` (`id`, `valor`, `created_at`, `updated_at`)
VALUES
	(1,70000,'2018-10-23 10:24:58','2018-10-23 10:24:58');

/*!40000 ALTER TABLE `medicos` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(17,'2018_09_29_101316_create_escuela_table',1),
	(70,'2014_10_12_000000_create_users_table',2),
	(71,'2014_10_12_100000_create_password_resets_table',2),
	(72,'2018_07_03_214850_create_seguros_table',2),
	(73,'2018_07_03_221355_create_tramites_table',2),
	(74,'2018_07_03_221430_create_tipo_vehiculos_table',2),
	(75,'2018_07_07_210205_create_resumen_tramites_table',2),
	(76,'2018_07_07_211523_create_resumen_tramite_seguro_table',2),
	(77,'2018_07_25_104416_create_tipo_documentos_table',2),
	(78,'2018_07_31_204557_create_abonos_table',2),
	(79,'2018_08_03_144940_resumen_tramite_abonos',2),
	(80,'2018_08_09_155526_create_licencias_table',2),
	(81,'2018_08_09_164451_create_resumen_licencia_table',2),
	(82,'2018_08_24_132942_create_permission_tables',2),
	(83,'2018_09_15_091914_create_agendas_table',2),
	(84,'2018_09_21_150339_create_medicos_table',2),
	(85,'2018_09_28_154456_add_id_vendedor_to_users_table',2),
	(86,'2018_09_29_104709_create_escuelas_table',2);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table model_has_permissions
# ------------------------------------------------------------



# Dump of table model_has_roles
# ------------------------------------------------------------

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`)
VALUES
	(1,'App\\User',1),
	(1,'App\\User',2),
	(2,'App\\User',4),
	(2,'App\\User',5),
	(2,'App\\User',6),
	(2,'App\\User',7),
	(2,'App\\User',9),
	(2,'App\\User',10),
	(2,'App\\User',15),
	(2,'App\\User',18),
	(2,'App\\User',19),
	(2,'App\\User',25),
	(2,'App\\User',26),
	(2,'App\\User',28),
	(3,'App\\User',1),
	(3,'App\\User',2),
	(3,'App\\User',13),
	(3,'App\\User',14),
	(4,'App\\User',1),
	(4,'App\\User',3),
	(4,'App\\User',13);

/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------



# Dump of table permissions
# ------------------------------------------------------------



# Dump of table resumen_licencia
# ------------------------------------------------------------

LOCK TABLES `resumen_licencia` WRITE;
/*!40000 ALTER TABLE `resumen_licencia` DISABLE KEYS */;

INSERT INTO `resumen_licencia` (`id`, `id_licencia`, `id_resumen_tramite`, `validar_curso`, `cantidad`, `precio_venta`, `created_at`, `updated_at`)
VALUES
	(1,1,1,NULL,1,750000,NULL,NULL),
	(2,1,2,NULL,1,750000,NULL,NULL),
	(3,2,3,NULL,1,1100000,NULL,NULL),
	(4,11,3,NULL,1,300000,NULL,NULL),
	(5,11,7,NULL,1,300000,NULL,NULL),
	(6,1,8,NULL,1,750000,NULL,NULL),
	(7,1,10,NULL,1,750000,NULL,NULL),
	(8,1,11,NULL,1,750000,NULL,NULL),
	(9,1,12,NULL,1,750000,NULL,NULL),
	(10,2,12,NULL,1,1100000,NULL,NULL),
	(11,1,13,NULL,1,750000,NULL,NULL);

/*!40000 ALTER TABLE `resumen_licencia` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table resumen_tramites
# ------------------------------------------------------------

LOCK TABLES `resumen_tramites` WRITE;
/*!40000 ALTER TABLE `resumen_tramites` DISABLE KEYS */;

INSERT INTO `resumen_tramites` (`id`, `metodo_pago`, `total`, `idTramitador`, `idUsuario`, `idVendedor`, `id_tipoTramite`, `descuento`, `estado`, `examen_medico`, `escuela_conduccion`, `derechos_transito`, `nota`, `created_at`, `updated_at`)
VALUES
	(1,'Efectivo',750000,NULL,3,1,2,0,'En tramite','Pendiente','Pendiente','Pendiente',NULL,'2018-10-23 10:34:10','2018-10-23 10:34:10'),
	(2,'Efectivo',650000,NULL,3,1,2,1,'En tramite','Pendiente','Pendiente','Pendiente',NULL,'2018-10-23 10:35:04','2018-10-23 10:35:04'),
	(3,'Efectivo',1330000,14,3,1,2,0,'En tramite','Pendiente','Pendiente','Pendiente',NULL,'2018-10-23 16:12:37','2018-10-23 16:12:37'),
	(4,'Efectivo',337650,NULL,3,1,1,0,'Entregado','Pendiente','Pendiente','Pendiente',NULL,'2018-10-23 17:05:32','2018-10-23 17:05:32'),
	(5,'Efectivo',675300,NULL,3,1,1,0,'Entregado','Pendiente','Pendiente','Pendiente',NULL,'2018-10-23 17:09:37','2018-10-23 17:09:37'),
	(6,'Efectivo',337650,NULL,3,1,1,0,'Entregado','Pendiente','Pendiente','Pendiente',NULL,'2018-10-23 17:16:05','2018-10-23 17:16:05'),
	(7,'TD-123123123',300000,NULL,3,1,2,0,'En tramite','Pendiente','Pendiente','Pendiente',NULL,'2018-10-26 21:50:12','2018-10-26 21:50:12'),
	(8,'TC-78',750000,14,3,1,2,0,'En tramite','Pendiente','Pendiente','Pendiente',NULL,'2018-10-26 22:35:00','2018-10-26 22:35:00'),
	(10,'Efectivo',750000,NULL,3,1,2,0,'En tramite','Pendiente','Pendiente','Pendiente',NULL,'2018-10-27 16:15:35','2018-10-27 16:15:35'),
	(11,'Efectivo',700000,NULL,3,1,2,1,'En tramite','Pendiente','Pendiente','Pendiente',NULL,'2018-10-27 16:17:56','2018-10-27 16:17:56'),
	(12,'Efectivo',1780000,NULL,3,1,2,0,'En tramite','Pendiente','Pendiente','Pendiente',NULL,'2018-10-29 15:09:45','2018-10-29 15:09:45'),
	(13,'Efectivo',750000,13,3,1,2,0,'En tramite','Pendiente','Pendiente','Pendiente',NULL,'2018-10-29 17:15:54','2018-10-29 17:15:54');

/*!40000 ALTER TABLE `resumen_tramites` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table resumenTramite_abonos
# ------------------------------------------------------------



# Dump of table resumenTramite_seguro
# ------------------------------------------------------------

LOCK TABLES `resumenTramite_seguro` WRITE;
/*!40000 ALTER TABLE `resumenTramite_seguro` DISABLE KEYS */;

INSERT INTO `resumenTramite_seguro` (`id`, `id_seguro`, `id_resumen_tramite`, `cantidad`, `precio_cantidad`, `created_at`, `updated_at`)
VALUES
	(1,1,4,1,337650,NULL,NULL),
	(2,1,5,2,675300,NULL,NULL),
	(3,1,6,1,337650,NULL,NULL);

/*!40000 ALTER TABLE `resumenTramite_seguro` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table role_has_permissions
# ------------------------------------------------------------



# Dump of table roles
# ------------------------------------------------------------

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`)
VALUES
	(1,'Administrador','web','2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(2,'Secretari@','web','2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(3,'Tramitador','web','2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(4,'Cliente','web','2018-10-23 10:24:58','2018-10-23 10:24:58');

/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table seguros
# ------------------------------------------------------------

LOCK TABLES `seguros` WRITE;
/*!40000 ALTER TABLE `seguros` DISABLE KEYS */;

INSERT INTO `seguros` (`id`, `cilindraje`, `modelo`, `idTipoVehiculo`, `precio`, `idTipoTramite`, `created_at`, `updated_at`)
VALUES
	(1,'Menos de 100 cc','',1,337650,1,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(2,'De 100 a 200 cc','',1,452850,1,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(3,'Mas de 200 cc','',1,510750,1,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(4,'Menos de 1500 cc','',2,531750,1,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(5,'De 1500 a 2500 cc','',2,634950,1,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(6,'Mas de 2500 cc','',2,744750,1,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(7,'Menor de 5 toneladas','',3,595800,1,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(8,'De 5 a 15 toneladas','',3,860250,1,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(9,'Mas de 15 toneladas','',3,23456,1,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(10,'Menor de 1500 cc','',4,670500,1,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(11,'De 1500 a 2500 cc','',4,845100,1,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(12,'Mas de 2500 cc','',4,1013100,1,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(13,'Menor de 1500 cc','',5,300150,1,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(14,'De 1500 a 2500 cc','',5,365400,1,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(15,'Mas de 2500 cc','',5,426750,1,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(16,'Menor de 2500 cc','',6,534900,1,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(17,'Igual o Mayor de 2500 cc','',6,715800,1,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(18,'Menor de 1500 cc','',7,371700,1,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(19,'De 1500 a 2500 cc','',7,461850,1,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(20,'Mas de 2500 cc','',7,595800,1,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(21,'Valor Unico','',8,889200,1,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(22,'Menor de 10 Pasajeros','',9,879450,1,'2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(23,'De 10 Pasajeros en adelante','',9,1275900,1,'2018-10-23 10:24:58','2018-10-23 10:24:58');

/*!40000 ALTER TABLE `seguros` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tipo_documentos
# ------------------------------------------------------------

LOCK TABLES `tipo_documentos` WRITE;
/*!40000 ALTER TABLE `tipo_documentos` DISABLE KEYS */;

INSERT INTO `tipo_documentos` (`id`, `documento`, `created_at`, `updated_at`)
VALUES
	(1,'Cédula Ciudadania','2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(2,'Tarjeta de Identidad','2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(3,'Cédula de Extranjeria','2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(4,'Pasaporte','2018-10-23 10:24:58','2018-10-23 10:24:58');

/*!40000 ALTER TABLE `tipo_documentos` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tipo_vehiculos
# ------------------------------------------------------------

LOCK TABLES `tipo_vehiculos` WRITE;
/*!40000 ALTER TABLE `tipo_vehiculos` DISABLE KEYS */;

INSERT INTO `tipo_vehiculos` (`id`, `nombre`, `created_at`, `updated_at`)
VALUES
	(1,'Motos','2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(2,'Camperos y Camionetas','2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(3,'Carga o Mixto','2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(4,'Ofi Especiales Ambulancias Transporte Valores','2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(5,'Autos Familiares','2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(6,'Vehiculos con capacidad de 6 o mas personas','2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(7,'Autos de alquiler enseñanza funebres taxis microbuses','2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(8,'Buses y Busetas','2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(9,'Servicio publico intermunicipal','2018-10-23 10:24:58','2018-10-23 10:24:58');

/*!40000 ALTER TABLE `tipo_vehiculos` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tramites
# ------------------------------------------------------------

LOCK TABLES `tramites` WRITE;
/*!40000 ALTER TABLE `tramites` DISABLE KEYS */;

INSERT INTO `tramites` (`id`, `nombre`, `created_at`, `updated_at`)
VALUES
	(1,'Seguro','2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(2,'Licencia','2018-10-23 10:24:58','2018-10-23 10:24:58'),
	(3,'Matricula','2018-10-23 10:24:58','2018-10-23 10:24:58');

/*!40000 ALTER TABLE `tramites` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `identificacion`, `id_tipoIdentificacion`, `name`, `apellidos`, `email`, `password`, `id_vendedor`, `telefono`, `telefono_2`, `foto`, `estado`, `genero`, `fecha_nacimiento`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'1061759221',1,'SILVIO MAURICIO','GUTIERREZ QUIñONES','silviotista93@gmail.com','$2y$10$SLvCnWDf/RUVh6sDsYl9Tum0mQGRrKjBnx/GJxa03YbYY9ip1mrGy',1,'(318) 564-382_',NULL,'','activo',NULL,NULL,'LivMjoxmiK13bCI7SQDsDR3ngWPfrA9urJmXGS4SphdBzex79EH0cwXp6ZOh','2018-10-23 10:24:58','2018-10-29 11:19:00'),
	(2,'100101010',1,'Fernando','Puchana Dagua','fernando.2889@gmail.com','$2y$10$YBX9297/DY4.YzZYNGH9U.oMEsnLnLt.LB1LgoyR6ShlQvfIxcHGu',1,'3002195160',NULL,'','activo',NULL,NULL,NULL,'2018-10-23 10:24:58','2018-10-29 09:57:57'),
	(3,'123',1,'Jose','Martinez','jose@gmail.com',NULL,1,'(312) 312-3123','(321) 231-2123',NULL,'activo',NULL,NULL,NULL,'2018-10-23 10:28:28','2018-10-26 22:45:31'),
	(4,NULL,NULL,'catalina','alvarez','vjn15860@awsoo.com','$2y$10$mSQAq5mj66HaqrZqsa/4be34CAI5kmrsx3G2TW./N2JegZlEIro2K',NULL,'(312) 312-3123',NULL,'/adminlte/img/perfil.jpg','activo',NULL,NULL,NULL,'2018-10-23 11:46:58','2018-10-23 11:46:58'),
	(5,NULL,NULL,'CATALINA','ALVAREZ','cata@gmail.com','$2y$10$19.ov8IhKpoNUxcKXcIXwOYmLuahf2QC9pF6NCtVP8eYbjCbWvK/m',NULL,'(312) 312-3123',NULL,'/adminlte/img/perfil.jpg','activo',NULL,NULL,NULL,'2018-10-23 11:56:43','2018-10-26 22:42:41'),
	(6,NULL,NULL,'pedro','gonzalez','pedro@gmail.com',NULL,NULL,'(312) 312-313_',NULL,'/adminlte/img/perfil.jpg','activo',NULL,NULL,NULL,'2018-10-23 12:05:54','2018-10-23 12:05:54'),
	(7,NULL,NULL,'prueba','dos','cyu74932@nbzmr.com',NULL,NULL,'(312) 312-3123',NULL,'/adminlte/img/perfil.jpg','activo',NULL,NULL,NULL,'2018-10-23 12:06:26','2018-10-23 12:06:26'),
	(9,NULL,NULL,'mauro','guti','smgutierrez@unimayor.edu.co','$2y$10$Cytv376omRZoPCkD8hBMZOlF0VjUruq2L.tZEV7G8xJ1uLKVKayaC',NULL,'(312) 312-3133',NULL,'/adminlte/img/perfil.jpg','activo',NULL,NULL,NULL,'2018-10-23 12:10:19','2018-10-23 12:10:19'),
	(10,NULL,NULL,'MAURICIO TIBERIO','GUTIERREZ QUINONES','smgutie@gmail.com','$2y$10$WXP3347kQd/Wt1aVpDYxO.S4dPoc8REvnxXKKr1nVI2tnw5Rdteu.',NULL,'(312) 123-1231','(318) 795-1410','/adminlte/img/perfil.jpg','activo',NULL,NULL,NULL,'2018-10-23 12:12:35','2018-10-23 16:41:03'),
	(13,NULL,NULL,'DIEGO','MONTOYA','diego@gmail.com',NULL,1,'(312) 312-3133','(312) 312-3121',NULL,'activo',NULL,NULL,NULL,'2018-10-23 16:08:20','2018-10-29 11:50:35'),
	(14,NULL,NULL,'RAMULFO','CHAMORRO','ramulfo@gmail.com',NULL,NULL,'(312) 312-3121',NULL,NULL,'activo',NULL,NULL,NULL,'2018-10-23 16:12:05','2018-10-27 16:11:34'),
	(15,NULL,NULL,'DARIO','RESTREPO','ocv39071@ebbob.com','$2y$10$QDytIGSSFpqb8JNROzLFHeeeWGPdKwzj2MFQuW.TjXc7nVn/42Kx6',NULL,'(312) 312-2131',NULL,'/adminlte/img/perfil.jpg','activo',NULL,NULL,NULL,'2018-10-29 17:29:07','2018-10-29 17:29:07'),
	(19,NULL,NULL,'QUETAL','COMO ESTAS','quetal@gmail.com',NULL,NULL,'(312) 312-3123',NULL,'/adminlte/img/perfil.jpg','activo',NULL,NULL,NULL,'2018-10-29 17:51:38','2018-10-29 17:51:38'),
	(20,NULL,NULL,'JOSE','PEREZ','josepe@gmail.com','$2y$10$E.YOBKZpJlpf.j0yEQPHc.AwqFSGJAHajMP4o2Rae26G0L62PKYb6',NULL,'(312) 312-313_',NULL,'/adminlte/img/perfil.jpg','activo',NULL,NULL,NULL,'2018-10-29 18:15:58','2018-10-29 18:15:58'),
	(23,NULL,NULL,'JOJOJ','JOJOJO','jojojoj@gmail.com','$2y$10$yhUZXPrK9tv0dCXgqCiP1u/AjyLOvqQ6pawrwES/puwZGrplbUcmK',NULL,'(311) 213-2131',NULL,'/adminlte/img/perfil.jpg','activo',NULL,NULL,NULL,'2018-10-29 18:18:23','2018-10-29 18:18:23'),
	(24,NULL,NULL,'PEPEPEP','PEPEPEPE','pepepep@gmail.com','$2y$10$nrKIflDf9P4GdPNpch9kEeYK2cKLfr8J0WY7NT01XgVz70ERw6cM2',NULL,'(113) 123-231_',NULL,'/adminlte/img/perfil.jpg','activo',NULL,NULL,NULL,'2018-10-29 18:21:27','2018-10-29 18:21:27'),
	(26,NULL,NULL,'TOOT','TOTOOT','tootnto@gmail.com',NULL,NULL,'(331) 231-1332',NULL,'/adminlte/img/perfil.jpg','activo',NULL,NULL,NULL,'2018-10-29 18:28:54','2018-10-29 18:28:54'),
	(28,NULL,NULL,'SILVIO','GUTIERREZ','smgutierrez122@misena.edu.co','$2y$10$Ce3dL7JiHdjB0H7ZBxt1fu9ZycRiSy2wbUjSwHaIuaNBrxEQuQpHO',NULL,'(312) 312-3123',NULL,'/adminlte/img/perfil.jpg','activo',NULL,NULL,'rICDz5sHN3TmcQN2FmFk5MFGijXniovmQuu6m3eHFjKTAUeblsjHgbXJXYQP','2018-10-29 22:53:51','2018-10-29 22:56:11');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
