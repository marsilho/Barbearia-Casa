-- MySQL dump 10.13  Distrib 8.4.8, for Linux (x86_64)
--
-- Host: localhost    Database: felskbarber
-- ------------------------------------------------------
-- Server version	8.4.8

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('Kh9wcZc54KhTAdzKwRvRr5MmGMjrv2zfuBvY1Adp',NULL,'172.21.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36','eyJfdG9rZW4iOiJyUjJrM1pxQXZMcG55d0lLZmQzYm10V1NTTmZZMHpkZ0txYnJESnFYIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDgxXC9hZG1pblwvbG9naW4iLCJyb3V0ZSI6ImFkbWluLmxvZ2luIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfSwibG9naW5fYWRtaW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI6MX0=',1783086366);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_agendamentos`
--

DROP TABLE IF EXISTS `tbl_agendamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_agendamentos` (
  `id_agendamento` int NOT NULL AUTO_INCREMENT,
  `id_cliente` int NOT NULL,
  `data_agendamento` date NOT NULL,
  `hora_agendamento` time NOT NULL,
  `valor_agendamento` double(6,2) NOT NULL,
  `criado_em_agendamento` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `atualizado_em_agendamento` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_agendamento`),
  KEY `fk_agendamento_cliente` (`id_cliente`),
  CONSTRAINT `fk_agendamento_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_clientes` (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_agendamentos`
--

LOCK TABLES `tbl_agendamentos` WRITE;
/*!40000 ALTER TABLE `tbl_agendamentos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_agendamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_categorias`
--

DROP TABLE IF EXISTS `tbl_categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_categorias` (
  `id_categoria` int NOT NULL AUTO_INCREMENT,
  `nome_categoria` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `descricao_categoria` text COLLATE utf8mb4_general_ci NOT NULL,
  `status_categoria` varchar(20) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'ATIVO',
  `criado_em_categoria` datetime DEFAULT CURRENT_TIMESTAMP,
  `atualizado_em_categoria` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_categorias`
--

LOCK TABLES `tbl_categorias` WRITE;
/*!40000 ALTER TABLE `tbl_categorias` DISABLE KEYS */;
INSERT INTO `tbl_categorias` VALUES (1,'Barbas','Aparo e modelagem','ATIVO','2026-06-18 10:49:17','2026-06-26 12:05:32'),(2,'Cortes','Cortes personalizados','ATIVO','2026-06-18 10:49:17','2026-06-25 11:14:17'),(3,'Coloração capilar','Mudança e realce da cor','ATIVO','2026-06-18 10:49:17','2026-06-25 11:14:22'),(4,'Limpeza Facial ','Limpeza de pele','ATIVO','2026-06-18 10:49:17','2026-06-18 10:49:17'),(5,'Lavagem e Hidratação','Lavagem e hidratação dos cabelos','ATIVO','2026-06-18 10:49:17','2026-06-22 11:43:31'),(6,'Freestyle','Cortes variados de freestyle','ATIVO','2026-06-22 12:27:03','2026-06-25 11:13:43'),(7,'Barba','Corte','INATIVO','2026-07-02 12:07:31','2026-07-03 12:01:24'),(8,'Teste 1','TEste 11','ATIVO','2026-07-02 12:09:23','2026-07-02 12:09:23');
/*!40000 ALTER TABLE `tbl_categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_clientes`
--

DROP TABLE IF EXISTS `tbl_clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_clientes` (
  `id_cliente` int NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `data_nasc_cliente` datetime NOT NULL,
  `email_cliente` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `senha_cliente` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status_cliente` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `criado_em_cliente` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `atualizado_em_cliente` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_clientes`
--

LOCK TABLES `tbl_clientes` WRITE;
/*!40000 ALTER TABLE `tbl_clientes` DISABLE KEYS */;
INSERT INTO `tbl_clientes` VALUES (1,'Julia ramos','2008-01-21 00:00:00','juliarsouza@gmail.com','123456','ATIVO','2026-06-08 11:04:09','2026-06-08 11:04:09'),(2,'Emanuel Araujo','2012-06-10 00:00:00','emanuelaraujo@gmail.com','123456','ATIVO','2026-06-08 11:10:47','2026-06-08 11:10:47'),(3,'Eduarda Silva','2004-09-23 00:00:00','eduardasilva@gmail.com','123456','ATIVO','2026-06-08 11:12:17','2026-06-08 11:12:17'),(4,'Elaine Reis','2004-05-09 00:00:00','elainereis@gmail.com','123456','ATIVO','2026-06-08 11:14:27','2026-06-08 11:14:27'),(5,'Victor Alves','2007-08-13 00:00:00','victoralves@gmail.com','123456','ATIVO','2026-06-08 11:15:15','2026-06-08 11:15:15');
/*!40000 ALTER TABLE `tbl_clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_contatos`
--

DROP TABLE IF EXISTS `tbl_contatos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_contatos` (
  `id_contato` int NOT NULL AUTO_INCREMENT,
  `nome_contato` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `email_contato` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `telefone_contato` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `assunto_contato` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `mensagem_contato` text COLLATE utf8mb4_general_ci NOT NULL,
  `status_contato` varchar(10) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'RESPONDIDO',
  `criado_em_contato` datetime DEFAULT CURRENT_TIMESTAMP,
  `atualizado_em_contato` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_contato`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_contatos`
--

LOCK TABLES `tbl_contatos` WRITE;
/*!40000 ALTER TABLE `tbl_contatos` DISABLE KEYS */;
INSERT INTO `tbl_contatos` VALUES (1,'Júlia Ramos','liajuramos16@gmail.com','11972744547','agendamento','gostaria de realizar um agendamento','PENDENTE','2026-06-18 09:58:44','2026-06-18 11:40:02'),(2,'Marcio','marsilho11@gmail.com','11987649092','informações','qual o valor do corte classico?','RESPONDIDO','2026-06-18 10:00:32','2026-06-18 11:40:02'),(3,'luiz','luiz@gmail.com','11 999999999','Agendamento','hdhiufi','RESPONDIDO','2026-06-26 13:07:10','2026-06-26 13:07:10'),(4,'luiz','luiz@gmail.com','11 999999999','Informações','dghjfif','RESPONDIDO','2026-06-26 13:08:36','2026-06-26 13:08:36'),(5,'luiz','luiz@gmail.com','11 999999999','Informações','djhfkjfhskjhgkj','RESPONDIDO','2026-06-26 13:40:27','2026-06-26 13:40:27'),(6,'luiz','luiz@gmail.com','11 999999999','Informações','dgdfyhfdh','RESPONDIDO','2026-06-26 13:41:25','2026-06-26 13:41:25'),(7,'luiz','luiz@gmail.com','11 999999999','Agendamento','sfwrwrwrw','RESPONDIDO','2026-06-26 13:49:31','2026-06-26 13:49:31'),(8,'ana julia','anaju@gmail.com','11963527458','Dúvidas','tttttttttt','RESPONDIDO','2026-06-26 13:55:35','2026-06-26 13:55:35'),(9,'juju','juju@gmail.com','11987452145','Agendamento','gyiiiyyi','RESPONDIDO','2026-06-26 13:58:10','2026-06-26 13:58:10'),(10,'tramontina','tratra@gmail.com','11978545742','Agendamento','eredrde','RESPONDIDO','2026-06-26 14:01:46','2026-06-26 14:01:46'),(11,'ricardinho','carecafofo@gmail.com','11982463517','Agendamento','quero cortar o cabelo','RESPONDIDO','2026-06-26 14:02:48','2026-06-26 14:02:48'),(12,'luiz','luiz@gmail.com','11 999999999','Agendamento','gostaria de um horario amanha as 14h','RESPONDIDO','2026-06-30 12:06:56','2026-06-30 12:06:56'),(13,'ana julia','anaju@gmail.com','11 999999999','Dúvidas','há cortes femininos?','RESPONDIDO','2026-06-30 12:09:10','2026-06-30 12:09:10'),(14,'ana julia','alessandro.psilva@sp.senac.br','11988626603','Dúvidas','Teste de email','RESPONDIDO','2026-07-02 12:05:01','2026-07-02 12:05:01');
/*!40000 ALTER TABLE `tbl_contatos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_itens_agendamento`
--

DROP TABLE IF EXISTS `tbl_itens_agendamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_itens_agendamento` (
  `id_itens_agendamento` int NOT NULL AUTO_INCREMENT,
  `id_agendamento` int NOT NULL,
  `id_servico` int NOT NULL,
  `status_itens_agendamento` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `valor_total_itens_agendamento` double(6,2) NOT NULL,
  `atualizado_em_itens_agendamento` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_itens_agendamento`),
  KEY `fk_itens_agendamento` (`id_agendamento`),
  KEY `fk_itens_servico` (`id_servico`),
  CONSTRAINT `fk_itens_agendamento` FOREIGN KEY (`id_agendamento`) REFERENCES `tbl_agendamentos` (`id_agendamento`),
  CONSTRAINT `fk_itens_servico` FOREIGN KEY (`id_servico`) REFERENCES `tbl_servicos` (`id_servico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_itens_agendamento`
--

LOCK TABLES `tbl_itens_agendamento` WRITE;
/*!40000 ALTER TABLE `tbl_itens_agendamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_itens_agendamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_itens_venda`
--

DROP TABLE IF EXISTS `tbl_itens_venda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_itens_venda` (
  `id_item` int NOT NULL AUTO_INCREMENT,
  `id_venda` int NOT NULL,
  `id_produto` int NOT NULL,
  `qtde_item` int NOT NULL,
  `valor_item` double(6,2) NOT NULL,
  PRIMARY KEY (`id_item`),
  KEY `fk_itens_produto` (`id_produto`),
  KEY `fk_itens_venda_principal` (`id_venda`),
  CONSTRAINT `fk_itens_produto` FOREIGN KEY (`id_produto`) REFERENCES `tbl_produtos` (`id_produto`),
  CONSTRAINT `fk_itens_venda_principal` FOREIGN KEY (`id_venda`) REFERENCES `tbl_vendas` (`id_venda`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_itens_venda`
--

LOCK TABLES `tbl_itens_venda` WRITE;
/*!40000 ALTER TABLE `tbl_itens_venda` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_itens_venda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_marca_produtos`
--

DROP TABLE IF EXISTS `tbl_marca_produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_marca_produtos` (
  `id_marca_produto` int NOT NULL AUTO_INCREMENT,
  `nome_marca_produto` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `foto_marca_produto` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `status_marca_produto` varchar(20) COLLATE utf8mb4_general_ci DEFAULT 'ATIVO',
  `criado_em_marca_produto` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `atualizado_em_marca_produto` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_marca_produto`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_marca_produtos`
--

LOCK TABLES `tbl_marca_produtos` WRITE;
/*!40000 ALTER TABLE `tbl_marca_produtos` DISABLE KEYS */;
INSERT INTO `tbl_marca_produtos` VALUES (1,'Omega Hair','marca/omega-hair.png','ATIVO','2026-06-01 11:50:13','2026-06-03 10:54:40'),(2,'Patrono','marca/patrono.png','INATIVO','2026-06-03 10:52:27','2026-06-18 11:08:30');
/*!40000 ALTER TABLE `tbl_marca_produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_produtos`
--

DROP TABLE IF EXISTS `tbl_produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_produtos` (
  `id_produto` int NOT NULL AUTO_INCREMENT,
  `nome_produto` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `id_marca_produto` int NOT NULL,
  `valor_produto` double(6,2) NOT NULL,
  `descricao_produto` text COLLATE utf8mb4_general_ci NOT NULL,
  `data_validade_produto` datetime DEFAULT NULL,
  `foto_produto` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `qtde_produto` int NOT NULL,
  `status_produto` varchar(20) COLLATE utf8mb4_general_ci DEFAULT 'ATIVO',
  `data_movimentacao` datetime NOT NULL,
  `criado_em_produto` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `atualizado_em_produto` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_produto`),
  KEY `fk_marca_produtos` (`id_marca_produto`),
  CONSTRAINT `fk_marca_produtos` FOREIGN KEY (`id_marca_produto`) REFERENCES `tbl_marca_produtos` (`id_marca_produto`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_produtos`
--

LOCK TABLES `tbl_produtos` WRITE;
/*!40000 ALTER TABLE `tbl_produtos` DISABLE KEYS */;
INSERT INTO `tbl_produtos` VALUES (3,'Shampoo para cabelos cacheados',1,30.00,'Shampoo desenvolvido para limpeza suave dos fios, auxiliando na definição e ativação dos cachos, promovendo hidratação e brilho natural.','2028-03-01 00:00:00','felsk/img/produto/shampoo-cabelos-cacheados.png',10,'ATIVO','2026-06-01 11:54:37','2026-06-01 11:54:37','2026-06-18 11:34:51'),(4,'Condicionador para cabelos cacheados',1,27.60,'Condicionador hidratante que sela as cutículas, desembaraça instantaneamente e devolve a emoliência aos fios cacheados, garantindo brilho, maciez e controle do frizz.','2028-03-01 00:00:00','felsk/img/produto/condicionador-cabelos-cacheados.png',10,'ATIVO','2026-06-03 10:20:09','2026-06-03 10:20:09','2026-06-18 11:34:51'),(5,'Creme para Pentear colageno',1,35.00,'Creme finalizador desenvolvido para modelagem e alta definição dos cachos, garantindo ação antifrizz, leveza e movimento natural aos fios.','2028-03-01 00:00:00','felsk/img/produto/creme-pentear-colageno.png',15,'ATIVO','2026-06-03 10:27:52','2026-06-03 10:27:52','2026-06-18 11:34:51'),(6,'Óleo de Argan',1,23.80,'Óleo finalizador rico em nutrientes essenciais, desenvolvido para hidratar profundamente, proteger contra agressões térmicas e reduzir o frizz sem pesar nos fios.','2028-03-01 00:00:00','felsk/img/produto/oleo-de-argan.png',17,'INATIVO','2026-06-03 10:31:47','2026-06-03 10:31:47','2026-06-18 11:34:51'),(7,'Reparador de Pontas ceramidas',1,17.50,'Finalizador concentrado desenvolvido exclusivamente para a selagem imediata de pontas duplas e eliminação do frizz, garantindo toque sedoso e brilho espelhado instantâneo.','2028-03-01 00:00:00','felsk/img/produto/reparador-de-pontas-ceramidas.png',20,'ATIVO','2026-06-03 10:40:01','2026-06-03 10:40:01','2026-06-18 11:34:51'),(8,'Gelatina Capilar Super Definição',1,12.90,'Gelatina modeladora desenvolvida para fixação duradoura dos cachos, garantindo máxima definição.','2028-03-01 00:00:00','felsk/img/produto/gelatina-modeladora.png',12,'ATIVO','2026-06-03 10:50:27','2026-06-03 10:50:27','2026-06-18 11:34:51'),(9,'Cera Modeladora Matte',2,22.00,'Cera fixadora desenvolvida para estruturar e estilizar penteados masculinos, promovendo alta fixação com acabamento matte natural e sem brilho.','2028-03-01 00:00:00','felsk/img/produto/cera-fixadora.png',13,'ATIVO','2026-06-03 11:24:10','2026-06-03 11:24:10','2026-06-18 11:34:51'),(10,'Shampoo Matizador Perfect Blond',1,25.00,'Shampoo matizador desenvolvido para limpeza delicada e neutralização gradativa dos tons amarelados indesejados em cabelos loiros ou grisalhos.','2028-03-01 00:00:00','felsk/img/produto/shampoo-matizador.png',15,'ATIVO','2026-06-03 11:25:40','2026-06-03 11:25:40','2026-06-18 11:34:51'),(11,'Condicionador Matizador Perfect Blond',1,26.00,'Condicionador desamarelador desenvolvido para hidratar e selar os fios claros, combatendo a oxidação e devolvendo o brilho platinado.','2028-03-01 00:00:00','felsk/img/produto/condicionador-matizador.png',15,'ATIVO','2026-06-03 11:26:51','2026-06-03 11:26:51','2026-06-18 11:34:51'),(12,'Máscara Matizadora Perfect Blond',1,30.00,'Máscara de tratamento intensivo desenvolvida para reparar a fibra capilar danificada pela química e promover correção de cor com efeito platinado.','2028-03-01 00:00:00','felsk/img/produto/mascara-matizadora.png',9,'ATIVO','2026-06-03 11:28:04','2026-06-03 11:28:04','2026-06-18 11:34:51');
/*!40000 ALTER TABLE `tbl_produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_servicos`
--

DROP TABLE IF EXISTS `tbl_servicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_servicos` (
  `id_servico` int NOT NULL AUTO_INCREMENT,
  `nome_servico` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `id_categoria` int NOT NULL,
  `descricao_servico` text COLLATE utf8mb4_general_ci NOT NULL,
  `foto_servico` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status_servico` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `criado_em_servico` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `atualizado_em_servico` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_servico`),
  KEY `fk_categoria_servico` (`id_categoria`),
  CONSTRAINT `fk_categoria_servico` FOREIGN KEY (`id_categoria`) REFERENCES `tbl_categorias` (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_servicos`
--

LOCK TABLES `tbl_servicos` WRITE;
/*!40000 ALTER TABLE `tbl_servicos` DISABLE KEYS */;
INSERT INTO `tbl_servicos` VALUES (1,'Corte Classico',2,'Visual tradicional, limpo e bem alinhado.','servico/corte-classico.png','ATIVO','2026-06-08 11:33:50','2026-06-25 11:15:16'),(2,'Corte na Máquina (Buzz Cut)',2,'Prático, rápido e estiloso.','servico/corte-maquina.png','INATIVO','2026-06-08 11:40:50','2026-07-03 12:01:37'),(3,'Corte Infantil',2,'Para crianças até 10 anos.','servico/corte-infantil.png','ATIVO','2026-06-08 11:42:14','2026-06-25 11:15:16'),(4,'Aparo de barbas',1,'Barbas alinhadas, modeladas do jeito que você gosta.','servico/aparo-barba.png','INATIVO','2026-06-08 11:43:30','2026-07-03 12:01:31'),(5,'Coloração Capilar',3,'Tom uniforme e natural.','servico/coloracao-capilar.png','ATIVO','2026-06-08 11:45:08','2026-06-23 13:39:03'),(6,'Limpeza facial',4,'Tratamento facial com vapor e toalha quente.','servico/limpeza-facial.png','ATIVO','2026-06-08 11:46:32','2026-06-23 14:01:39'),(7,'Lavagem + Hidratação',5,'Shampoo, massagem e toalha quente.','servico/lavagem-hidratacao.png','ATIVO','2026-06-08 11:47:38','2026-06-23 13:38:11'),(8,'teste 01',1,'teste imagem','servicos/1782225433_Mídia (2).jpg','ATIVO','2026-06-23 14:37:13','2026-06-23 14:39:20'),(9,'teste 02',4,'testando mudança','servicos/1782225467_Mídia (6).jpg','ATIVO','2026-06-23 14:37:47','2026-06-24 11:11:03'),(10,'teste 03',1,'testanto','servicos/1782226385_Mídia (6).jpg','ATIVO','2026-06-23 14:53:05','2026-06-25 11:15:14'),(11,'teste 5555',1,'dalay po','servicos/1782226475_Mídia (2).jpg','ATIVO','2026-06-23 14:54:35','2026-07-03 12:01:35');
/*!40000 ALTER TABLE `tbl_servicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_usuarios`
--

DROP TABLE IF EXISTS `tbl_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_usuarios` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email_usuario` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `senha_usuario` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `perfil_usuario` varchar(13) COLLATE utf8mb4_general_ci NOT NULL,
  `status_usuario` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `criado_em_usuario` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `atualizado_em_usuario` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_usuarios`
--

LOCK TABLES `tbl_usuarios` WRITE;
/*!40000 ALTER TABLE `tbl_usuarios` DISABLE KEYS */;
INSERT INTO `tbl_usuarios` VALUES (1,'Felipe','felipe@felskbarber.com.br','$2y$12$NcPRfyAMr6nTthZcCx4C3.SJh9emFIjiXYaK5x4U3US2fcH3VA6wi','ADMIN','ATIVO','2026-06-30 11:13:00','2026-06-30 11:53:49');
/*!40000 ALTER TABLE `tbl_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_vendas`
--

DROP TABLE IF EXISTS `tbl_vendas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_vendas` (
  `id_venda` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int NOT NULL,
  `id_cliente` int NOT NULL,
  `data_venda` datetime NOT NULL,
  `valor_venda` double(6,2) NOT NULL,
  `status_venda` varchar(20) COLLATE utf8mb4_general_ci DEFAULT 'PAGO',
  `criado_em_venda` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `atualizado_em_venda` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_venda`),
  KEY `fk_clientes_vendas` (`id_cliente`),
  KEY `fk_usuarios_vendas` (`id_usuario`),
  CONSTRAINT `fk_clientes_vendas` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_clientes` (`id_cliente`),
  CONSTRAINT `fk_usuarios_vendas` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuarios` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_vendas`
--

LOCK TABLES `tbl_vendas` WRITE;
/*!40000 ALTER TABLE `tbl_vendas` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_vendas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-07-03 14:29:46
