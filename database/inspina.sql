-- MySQL dump 10.16  Distrib 10.2.9-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: inspina
-- ------------------------------------------------------
-- Server version	10.2.9-MariaDB-10.2.9+maria~jessie

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `account_channel`
--

DROP TABLE IF EXISTS `account_channel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `account_channel` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account_id` int(10) unsigned NOT NULL,
  `channel_id` int(10) unsigned NOT NULL,
  `account` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refresh_token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `account_channel_account_id_foreign` (`account_id`),
  KEY `account_channel_channel_id_foreign` (`channel_id`),
  CONSTRAINT `account_channel_account_id_foreign` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `account_channel_channel_id_foreign` FOREIGN KEY (`channel_id`) REFERENCES `channels` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `account_channel`
--

LOCK TABLES `account_channel` WRITE;
/*!40000 ALTER TABLE `account_channel` DISABLE KEYS */;
/*!40000 ALTER TABLE `account_channel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accounts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `answer_to` int(10) unsigned NOT NULL,
  `replaced_by` int(10) unsigned NOT NULL,
  `privacy_id` int(10) unsigned NOT NULL,
  `origin_source_id` int(10) unsigned NOT NULL,
  `industry_id` int(10) unsigned NOT NULL,
  `code` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('ACTIVO','INACTIVO') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVO',
  `privacy` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leave_company` tinyint(1) NOT NULL,
  `business_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fantasy_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuit` int(10) unsigned NOT NULL,
  `gross_income` decimal(20,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `internal_number` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `accounts_answer_to_foreign` (`answer_to`),
  KEY `accounts_replaced_by_foreign` (`replaced_by`),
  KEY `accounts_privacy_id_foreign` (`privacy_id`),
  KEY `accounts_origin_source_id_foreign` (`origin_source_id`),
  KEY `accounts_industry_id_foreign` (`industry_id`),
  CONSTRAINT `accounts_answer_to_foreign` FOREIGN KEY (`answer_to`) REFERENCES `accounts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `accounts_industry_id_foreign` FOREIGN KEY (`industry_id`) REFERENCES `industries` (`id`) ON DELETE CASCADE,
  CONSTRAINT `accounts_origin_source_id_foreign` FOREIGN KEY (`origin_source_id`) REFERENCES `origin_sources` (`id`) ON DELETE CASCADE,
  CONSTRAINT `accounts_privacy_id_foreign` FOREIGN KEY (`privacy_id`) REFERENCES `privacies` (`id`) ON DELETE CASCADE,
  CONSTRAINT `accounts_replaced_by_foreign` FOREIGN KEY (`replaced_by`) REFERENCES `accounts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accounts`
--

LOCK TABLES `accounts` WRITE;
/*!40000 ALTER TABLE `accounts` DISABLE KEYS */;
/*!40000 ALTER TABLE `accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `channel_contact`
--

DROP TABLE IF EXISTS `channel_contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `channel_contact` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contact_id` int(10) unsigned NOT NULL,
  `channel_id` int(10) unsigned NOT NULL,
  `account` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refresh_token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `channel_contact_contact_id_foreign` (`contact_id`),
  KEY `channel_contact_channel_id_foreign` (`channel_id`),
  CONSTRAINT `channel_contact_channel_id_foreign` FOREIGN KEY (`channel_id`) REFERENCES `channels` (`id`) ON DELETE CASCADE,
  CONSTRAINT `channel_contact_contact_id_foreign` FOREIGN KEY (`contact_id`) REFERENCES `contacts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `channel_contact`
--

LOCK TABLES `channel_contact` WRITE;
/*!40000 ALTER TABLE `channel_contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `channel_contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `channels`
--

DROP TABLE IF EXISTS `channels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `channels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `channels`
--

LOCK TABLES `channels` WRITE;
/*!40000 ALTER TABLE `channels` DISABLE KEYS */;
INSERT INTO `channels` VALUES (1,'Sitio web','01','2018-08-03 10:44:57','2018-08-03 10:44:57'),(2,'Facebook','02','2018-08-03 10:44:57','2018-08-03 10:44:57'),(3,'Twitter','03','2018-08-03 10:44:57','2018-08-03 10:44:57'),(4,'Linkedin','04','2018-08-03 10:44:57','2018-08-03 10:44:57'),(5,'Instagram','05','2018-08-03 10:44:57','2018-08-03 10:44:57'),(6,'Pinterest','06','2018-08-03 10:44:58','2018-08-03 10:44:58'),(7,'Youtube','07','2018-08-03 10:44:58','2018-08-03 10:44:58');
/*!40000 ALTER TABLE `channels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `province_id` int(10) unsigned NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cities_province_id_foreign` (`province_id`),
  CONSTRAINT `cities_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cities`
--

LOCK TABLES `cities` WRITE;
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_contact_preference`
--

DROP TABLE IF EXISTS `contact_contact_preference`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_contact_preference` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contact_id` int(10) unsigned NOT NULL,
  `contact_preference_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contact_contact_preference_contact_id_foreign` (`contact_id`),
  KEY `contact_contact_preference_contact_preference_id_foreign` (`contact_preference_id`),
  CONSTRAINT `contact_contact_preference_contact_id_foreign` FOREIGN KEY (`contact_id`) REFERENCES `contacts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `contact_contact_preference_contact_preference_id_foreign` FOREIGN KEY (`contact_preference_id`) REFERENCES `contact_preferences` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_contact_preference`
--

LOCK TABLES `contact_contact_preference` WRITE;
/*!40000 ALTER TABLE `contact_contact_preference` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_contact_preference` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_interest`
--

DROP TABLE IF EXISTS `contact_interest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_interest` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contact_id` int(10) unsigned NOT NULL,
  `interest_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contact_interest_contact_id_foreign` (`contact_id`),
  KEY `contact_interest_interest_id_foreign` (`interest_id`),
  CONSTRAINT `contact_interest_contact_id_foreign` FOREIGN KEY (`contact_id`) REFERENCES `contacts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `contact_interest_interest_id_foreign` FOREIGN KEY (`interest_id`) REFERENCES `interests` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_interest`
--

LOCK TABLES `contact_interest` WRITE;
/*!40000 ALTER TABLE `contact_interest` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_interest` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_permission`
--

DROP TABLE IF EXISTS `contact_permission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_permission` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `action` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_id` int(10) unsigned NOT NULL,
  `permission_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contact_permission_contact_id_foreign` (`contact_id`),
  KEY `contact_permission_permission_id_foreign` (`permission_id`),
  CONSTRAINT `contact_permission_contact_id_foreign` FOREIGN KEY (`contact_id`) REFERENCES `contacts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `contact_permission_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_permission`
--

LOCK TABLES `contact_permission` WRITE;
/*!40000 ALTER TABLE `contact_permission` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_permission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_preferences`
--

DROP TABLE IF EXISTS `contact_preferences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_preferences` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_preferences`
--

LOCK TABLES `contact_preferences` WRITE;
/*!40000 ALTER TABLE `contact_preferences` DISABLE KEYS */;
INSERT INTO `contact_preferences` VALUES (1,'Email laboral','01','2018-08-03 10:45:01','2018-08-03 10:45:01'),(2,'Email personal','02','2018-08-03 10:45:01','2018-08-03 10:45:01'),(3,'Facebook','03','2018-08-03 10:45:02','2018-08-03 10:45:02'),(4,'LinkedIn','04','2018-08-03 10:45:02','2018-08-03 10:45:02'),(5,'Teléfono laboral','05','2018-08-03 10:45:02','2018-08-03 10:45:02'),(6,'Teléfono Móvil','06','2018-08-03 10:45:02','2018-08-03 10:45:02'),(7,'Teléfono Personal','07','2018-08-03 10:45:02','2018-08-03 10:45:02'),(8,'Twitter','08','2018-08-03 10:45:02','2018-08-03 10:45:02'),(9,'Whatsapp','09','2018-08-03 10:45:02','2018-08-03 10:45:02');
/*!40000 ALTER TABLE `contact_preferences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `language_id` int(10) unsigned NOT NULL,
  `origin_source_id` int(10) unsigned NOT NULL,
  `code` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('ACTIVO','INACTIVO') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVO',
  `type_contact` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `dni` int(10) unsigned NOT NULL,
  `cuit` int(10) unsigned NOT NULL,
  `imagen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_default` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_work` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_personal` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_movil` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_fixed` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_work` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_internal_work` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contacts_user_id_foreign` (`user_id`),
  KEY `contacts_language_id_foreign` (`language_id`),
  KEY `contacts_origin_source_id_foreign` (`origin_source_id`),
  CONSTRAINT `contacts_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE,
  CONSTRAINT `contacts_origin_source_id_foreign` FOREIGN KEY (`origin_source_id`) REFERENCES `origin_sources` (`id`) ON DELETE CASCADE,
  CONSTRAINT `contacts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (2,'Argentina','01');
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `delivery_addresses`
--

DROP TABLE IF EXISTS `delivery_addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `delivery_addresses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contact_id` int(10) unsigned NOT NULL,
  `location_id` int(10) unsigned NOT NULL,
  `province_id` int(10) unsigned NOT NULL,
  `country_id` int(10) unsigned NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localitie` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `floor` int(11) DEFAULT NULL,
  `department` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `delivery_addresses_contact_id_foreign` (`contact_id`),
  KEY `delivery_addresses_location_id_foreign` (`location_id`),
  KEY `delivery_addresses_province_id_foreign` (`province_id`),
  KEY `delivery_addresses_country_id_foreign` (`country_id`),
  CONSTRAINT `delivery_addresses_contact_id_foreign` FOREIGN KEY (`contact_id`) REFERENCES `contacts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `delivery_addresses_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE,
  CONSTRAINT `delivery_addresses_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `localities` (`id`) ON DELETE CASCADE,
  CONSTRAINT `delivery_addresses_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `delivery_addresses`
--

LOCK TABLES `delivery_addresses` WRITE;
/*!40000 ALTER TABLE `delivery_addresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `delivery_addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `document_group`
--

DROP TABLE IF EXISTS `document_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `document_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(10) unsigned NOT NULL,
  `document_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `document_group_group_id_foreign` (`group_id`),
  KEY `document_group_document_id_foreign` (`document_id`),
  CONSTRAINT `document_group_document_id_foreign` FOREIGN KEY (`document_id`) REFERENCES `documents` (`id`) ON DELETE CASCADE,
  CONSTRAINT `document_group_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `document_group`
--

LOCK TABLES `document_group` WRITE;
/*!40000 ALTER TABLE `document_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `document_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents`
--

LOCK TABLES `documents` WRITE;
/*!40000 ALTER TABLE `documents` DISABLE KEYS */;
/*!40000 ALTER TABLE `documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ecommerces`
--

DROP TABLE IF EXISTS `ecommerces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ecommerces` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('ACTIVO','INACTIVO') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVO',
  `price` decimal(20,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ecommerces`
--

LOCK TABLES `ecommerces` WRITE;
/*!40000 ALTER TABLE `ecommerces` DISABLE KEYS */;
/*!40000 ALTER TABLE `ecommerces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_by` int(10) unsigned NOT NULL,
  `privacy_id` int(10) unsigned NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('ACTIVO','INACTIVO') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVO',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `groups_privacy_id_foreign` (`privacy_id`),
  KEY `groups_created_by_foreign` (`created_by`),
  CONSTRAINT `groups_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `groups_privacy_id_foreign` FOREIGN KEY (`privacy_id`) REFERENCES `privacies` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (2,1,1,'kaka','00000001','ACTIVO','wdwd','2018-08-03 10:55:40','2018-08-03 10:55:40'),(3,1,2,'Aawdwd','00000002','ACTIVO','wdwdwd','2018-08-03 11:13:47','2018-08-03 11:13:47');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `industries`
--

DROP TABLE IF EXISTS `industries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `industries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `industries`
--

LOCK TABLES `industries` WRITE;
/*!40000 ALTER TABLE `industries` DISABLE KEYS */;
INSERT INTO `industries` VALUES (1,'Agro','01','2018-08-03 10:44:58','2018-08-03 10:44:58'),(2,'Automotriz','02','2018-08-03 10:44:58','2018-08-03 10:44:58'),(3,'Banco','03','2018-08-03 10:44:58','2018-08-03 10:44:58'),(4,'Camara Empresarial','04','2018-08-03 10:44:58','2018-08-03 10:44:58'),(5,'Comercio','05','2018-08-03 10:44:58','2018-08-03 10:44:58'),(6,'Comunicacion','06','2018-08-03 10:44:58','2018-08-03 10:44:58'),(7,'Construccion','07','2018-08-03 10:44:58','2018-08-03 10:44:58'),(8,'Consultoria','08','2018-08-03 10:44:58','2018-08-03 10:44:58'),(9,'Consumo Masivo','09','2018-08-03 10:44:58','2018-08-03 10:44:58'),(10,'Diseño','10','2018-08-03 10:44:58','2018-08-03 10:44:58'),(11,'Economia','11','2018-08-03 10:44:58','2018-08-03 10:44:58'),(12,'Educación','12','2018-08-03 10:44:58','2018-08-03 10:44:58'),(13,'Energía','13','2018-08-03 10:44:58','2018-08-03 10:44:58'),(14,'Estado','14','2018-08-03 10:44:58','2018-08-03 10:44:58'),(15,'Finanzas','15','2018-08-03 10:44:58','2018-08-03 10:44:58'),(16,'Fundación','16','2018-08-03 10:44:58','2018-08-03 10:44:58'),(17,'Gastronomía','17','2018-08-03 10:44:58','2018-08-03 10:44:58'),(18,'Hotelería','18','2018-08-03 10:44:58','2018-08-03 10:44:58'),(19,'IT','19','2018-08-03 10:44:58','2018-08-03 10:44:58'),(20,'Laboratorio','20','2018-08-03 10:44:58','2018-08-03 10:44:58'),(21,'Limpieza','21','2018-08-03 10:44:59','2018-08-03 10:44:59'),(22,'Marketing','22','2018-08-03 10:44:59','2018-08-03 10:44:59'),(23,'Medicina','23','2018-08-03 10:44:59','2018-08-03 10:44:59'),(24,'Minería','24','2018-08-03 10:44:59','2018-08-03 10:44:59'),(25,'ONG','25','2018-08-03 10:44:59','2018-08-03 10:44:59'),(26,'Publicidad','26','2018-08-03 10:44:59','2018-08-03 10:44:59'),(27,'Retail','27','2018-08-03 10:44:59','2018-08-03 10:44:59'),(28,'Servicios','28','2018-08-03 10:44:59','2018-08-03 10:44:59'),(29,'Telecomunicaciones','29','2018-08-03 10:44:59','2018-08-03 10:44:59'),(30,'Textil','30','2018-08-03 10:44:59','2018-08-03 10:44:59'),(31,'Transporte','31','2018-08-03 10:44:59','2018-08-03 10:44:59'),(32,'Turismo','32','2018-08-03 10:44:59','2018-08-03 10:44:59'),(33,'Ventas','33','2018-08-03 10:44:59','2018-08-03 10:44:59');
/*!40000 ALTER TABLE `industries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `interests`
--

DROP TABLE IF EXISTS `interests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `interests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `interests`
--

LOCK TABLES `interests` WRITE;
/*!40000 ALTER TABLE `interests` DISABLE KEYS */;
INSERT INTO `interests` VALUES (1,'Arte','01'),(2,'Comunicación','02'),(3,'Cursos','03'),(4,'Deportes','04'),(5,'Espectáculos','05'),(6,'Eventos','06'),(7,'Finanzas','07'),(8,'Gastronomía','08'),(9,'Libros','09'),(10,'Marketing','10'),(11,'Música','11'),(12,'Noticias','12'),(13,'Ofertas','13'),(14,'Películas','14'),(15,'Política','15'),(16,'Salud','16'),(17,'Tecnología','17'),(18,'Tendencias','18'),(19,'Transmisiones en vivo','19'),(20,'TV','20'),(21,'Viajes','21'),(22,'Videojuegos','22'),(23,'Webinars','23');
/*!40000 ALTER TABLE `interests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invoices`
--

DROP TABLE IF EXISTS `invoices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `invoices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `number` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuit` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoices`
--

LOCK TABLES `invoices` WRITE;
/*!40000 ALTER TABLE `invoices` DISABLE KEYS */;
/*!40000 ALTER TABLE `invoices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `languages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `languages`
--

LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` VALUES (1,'Alemán','01'),(2,'Español','02'),(3,'Francés','03'),(4,'Inglés','04'),(5,'Italiano','05'),(6,'Portugués','06');
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `localities`
--

DROP TABLE IF EXISTS `localities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `localities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `city_id` int(10) unsigned NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_alt` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `abb_code` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `localities_city_id_foreign` (`city_id`),
  CONSTRAINT `localities_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `localities`
--

LOCK TABLES `localities` WRITE;
/*!40000 ALTER TABLE `localities` DISABLE KEYS */;
/*!40000 ALTER TABLE `localities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(10) unsigned NOT NULL,
  `member_id` int(10) unsigned NOT NULL,
  `member_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `members_member_id_member_type_index` (`member_id`,`member_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_07_02_135558_create_countries_table',1),(4,'2018_07_02_143841_create_provinces_table',1),(5,'2018_07_02_144015_create_cities_table',1),(6,'2018_07_02_145804_create_localities_table',1),(7,'2018_07_02_150318_create_languages_table',1),(8,'2018_07_02_150820_create_origin_sources_table',1),(9,'2018_07_02_151004_create_interests_table',1),(10,'2018_07_02_151348_create_channels_table',1),(11,'2018_07_02_151557_create_contact_preferences_table',1),(12,'2018_07_02_151719_create_permissions_table',1),(13,'2018_07_02_151859_create_contacts_table',1),(14,'2018_07_02_154456_create_contact_interest_table',1),(15,'2018_07_02_155316_create_channel_contact_table',1),(16,'2018_07_02_155705_create_contact_contact_preference_table',1),(17,'2018_07_02_155924_create_contact_permission_table',1),(18,'2018_07_02_160131_create_personal_addresses_table',1),(19,'2018_07_02_161828_create_delivery_addresses_table',1),(20,'2018_07_02_162228_create_records_table',1),(21,'2018_07_02_163616_create_projects_table',1),(22,'2018_07_02_164142_create_properties_table',1),(23,'2018_07_02_164326_create_ecommerces_table',1),(24,'2018_07_02_164524_create_tasks_table',1),(25,'2018_07_03_132522_create_privacies_table',1),(26,'2018_07_03_132701_create_industries_table',1),(27,'2018_07_03_135800_create_tax_addresses_table',1),(28,'2018_07_03_140516_create_invoices_table',1),(29,'2018_07_03_140728_create_documents_table',1),(30,'2018_07_03_152602_create_accounts_table',1),(31,'2018_07_03_153237_create_groups_table',1),(32,'2018_07_03_153407_create_work_address_table',1),(33,'2018_07_03_153806_create_opportunities_table',1),(34,'2018_07_03_154218_create_account_channel_table',1),(35,'2018_07_03_154509_create_document_group_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `opportunities`
--

DROP TABLE IF EXISTS `opportunities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `opportunities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `privacy_id` int(10) unsigned NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('ACTIVO','INACTIVO') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVO',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(20,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `opportunities_privacy_id_foreign` (`privacy_id`),
  CONSTRAINT `opportunities_privacy_id_foreign` FOREIGN KEY (`privacy_id`) REFERENCES `privacies` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `opportunities`
--

LOCK TABLES `opportunities` WRITE;
/*!40000 ALTER TABLE `opportunities` DISABLE KEYS */;
/*!40000 ALTER TABLE `opportunities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `origin_sources`
--

DROP TABLE IF EXISTS `origin_sources`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `origin_sources` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `origin_sources`
--

LOCK TABLES `origin_sources` WRITE;
/*!40000 ALTER TABLE `origin_sources` DISABLE KEYS */;
INSERT INTO `origin_sources` VALUES (1,'Contacto','01'),(2,'Ecommerce','02'),(3,'Medios','03'),(4,'Redes sociales','04'),(5,'Web','05');
/*!40000 ALTER TABLE `origin_sources` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `module` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'Administrador','01','2018-08-03 10:45:02','2018-08-03 10:45:02'),(2,'Analista','02','2018-08-03 10:45:02','2018-08-03 10:45:02'),(3,'Editor','03','2018-08-03 10:45:02','2018-08-03 10:45:02'),(4,'Invitado','04','2018-08-03 10:45:03','2018-08-03 10:45:03'),(5,'Soporte','05','2018-08-03 10:45:03','2018-08-03 10:45:03');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_addresses`
--

DROP TABLE IF EXISTS `personal_addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_addresses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contact_id` int(10) unsigned NOT NULL,
  `location_id` int(10) unsigned NOT NULL,
  `province_id` int(10) unsigned NOT NULL,
  `country_id` int(10) unsigned NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localitie` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `floor` int(11) DEFAULT NULL,
  `department` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `personal_addresses_contact_id_foreign` (`contact_id`),
  KEY `personal_addresses_location_id_foreign` (`location_id`),
  KEY `personal_addresses_province_id_foreign` (`province_id`),
  KEY `personal_addresses_country_id_foreign` (`country_id`),
  CONSTRAINT `personal_addresses_contact_id_foreign` FOREIGN KEY (`contact_id`) REFERENCES `contacts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `personal_addresses_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE,
  CONSTRAINT `personal_addresses_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `localities` (`id`) ON DELETE CASCADE,
  CONSTRAINT `personal_addresses_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_addresses`
--

LOCK TABLES `personal_addresses` WRITE;
/*!40000 ALTER TABLE `personal_addresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `privacies`
--

DROP TABLE IF EXISTS `privacies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `privacies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `privacies`
--

LOCK TABLES `privacies` WRITE;
/*!40000 ALTER TABLE `privacies` DISABLE KEYS */;
INSERT INTO `privacies` VALUES (1,'privado','01','2018-08-03 10:44:59','2018-08-03 10:44:59'),(2,'publico','02','2018-08-03 10:44:59','2018-08-03 10:44:59'),(3,'restringido','03','2018-08-03 10:44:59','2018-08-03 10:44:59');
/*!40000 ALTER TABLE `privacies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('ACTIVO','INACTIVO') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVO',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `properties` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `origin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `properties`
--

LOCK TABLES `properties` WRITE;
/*!40000 ALTER TABLE `properties` DISABLE KEYS */;
/*!40000 ALTER TABLE `properties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `provinces`
--

DROP TABLE IF EXISTS `provinces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `provinces` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country_id` int(10) unsigned NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `provinces_country_id_foreign` (`country_id`),
  CONSTRAINT `provinces_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provinces`
--

LOCK TABLES `provinces` WRITE;
/*!40000 ALTER TABLE `provinces` DISABLE KEYS */;
INSERT INTO `provinces` VALUES (25,2,'Buenos Aires','AR-B'),(26,2,'Catamarca','AR-K'),(27,2,'Chaco','AR-H'),(28,2,'Chubut','AR-U'),(29,2,'Ciudad Autónoma de Buenos Aires','AR-C'),(30,2,'Córdoba','AR-X'),(31,2,'Corrientes','AR-W'),(32,2,'Entre Ríos','AR-E'),(33,2,'Formosa','AR-P'),(34,2,'Jujuy','AR-Y'),(35,2,'La Pampa','AR-L'),(36,2,'La Rioja','AR-F'),(37,2,'Mendoza','AR-M'),(38,2,'Misiones','AR-N'),(39,2,'Neuquén','AR-Q'),(40,2,'Río Negro','AR-R'),(41,2,'Salta','AR-A'),(42,2,'San Juan','AR-J'),(43,2,'San Luis','AR-D'),(44,2,'Santa Cruz','AR-Z'),(45,2,'Santa Fe','AR-S'),(46,2,'Santiago del Estero','AR-G'),(47,2,'Tierra del Fuego','AR-V'),(48,2,'Tucumán','AR-T');
/*!40000 ALTER TABLE `provinces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `records`
--

DROP TABLE IF EXISTS `records`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `records` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_by` int(10) unsigned NOT NULL,
  `modified_by` int(10) unsigned NOT NULL,
  `model_id` int(10) unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `records_model_id_model_type_index` (`model_id`,`model_type`),
  KEY `records_created_by_foreign` (`created_by`),
  KEY `records_modified_by_foreign` (`modified_by`),
  CONSTRAINT `records_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `contacts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `records_modified_by_foreign` FOREIGN KEY (`modified_by`) REFERENCES `contacts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `records`
--

LOCK TABLES `records` WRITE;
/*!40000 ALTER TABLE `records` DISABLE KEYS */;
/*!40000 ALTER TABLE `records` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tasks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('ACTIVO','INACTIVO') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVO',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tasks`
--

LOCK TABLES `tasks` WRITE;
/*!40000 ALTER TABLE `tasks` DISABLE KEYS */;
/*!40000 ALTER TABLE `tasks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tax_addresses`
--

DROP TABLE IF EXISTS `tax_addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tax_addresses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contact_id` int(10) unsigned NOT NULL,
  `location_id` int(10) unsigned NOT NULL,
  `province_id` int(10) unsigned NOT NULL,
  `country_id` int(10) unsigned NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localitie` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(10) unsigned NOT NULL,
  `floor` int(10) unsigned DEFAULT NULL,
  `department` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tax_addresses_contact_id_foreign` (`contact_id`),
  KEY `tax_addresses_location_id_foreign` (`location_id`),
  KEY `tax_addresses_province_id_foreign` (`province_id`),
  KEY `tax_addresses_country_id_foreign` (`country_id`),
  CONSTRAINT `tax_addresses_contact_id_foreign` FOREIGN KEY (`contact_id`) REFERENCES `contacts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `tax_addresses_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE,
  CONSTRAINT `tax_addresses_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `localities` (`id`) ON DELETE CASCADE,
  CONSTRAINT `tax_addresses_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tax_addresses`
--

LOCK TABLES `tax_addresses` WRITE;
/*!40000 ALTER TABLE `tax_addresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `tax_addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@admin.com','$2y$10$0wX0XG9OER4NNdQ3M3SHsenikq8loHwxsFdqnL8ruItREaAs4Kk.u',NULL,'2018-08-03 10:22:01','2018-08-03 10:22:01');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `work_address`
--

DROP TABLE IF EXISTS `work_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `work_address` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account_id` int(10) unsigned NOT NULL,
  `location_id` int(10) unsigned NOT NULL,
  `province_id` int(10) unsigned NOT NULL,
  `country_id` int(10) unsigned NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localitie` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `floor` int(11) DEFAULT NULL,
  `department` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `work_address_account_id_foreign` (`account_id`),
  KEY `work_address_location_id_foreign` (`location_id`),
  KEY `work_address_province_id_foreign` (`province_id`),
  KEY `work_address_country_id_foreign` (`country_id`),
  CONSTRAINT `work_address_account_id_foreign` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `work_address_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE,
  CONSTRAINT `work_address_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `localities` (`id`) ON DELETE CASCADE,
  CONSTRAINT `work_address_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `work_address`
--

LOCK TABLES `work_address` WRITE;
/*!40000 ALTER TABLE `work_address` DISABLE KEYS */;
/*!40000 ALTER TABLE `work_address` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-03 11:53:27
