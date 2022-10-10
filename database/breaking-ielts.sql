-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: breaking_ielts
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `attribute_values`
--

DROP TABLE IF EXISTS `attribute_values`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attribute_values` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `attribute_id` bigint(20) unsigned NOT NULL,
  `int_value` bigint(20) DEFAULT 0,
  `decimal_value` decimal(12,2) DEFAULT 0.00,
  `varchar_value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `advance_value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attribute_values`
--

LOCK TABLES `attribute_values` WRITE;
/*!40000 ALTER TABLE `attribute_values` DISABLE KEYS */;
/*!40000 ALTER TABLE `attribute_values` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attributes`
--

DROP TABLE IF EXISTS `attributes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attributes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `category_map` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `input_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'default',
  `value_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'varchar',
  `advance_value_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'default',
  `show_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'dropdown',
  `value_unit` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_required` int(11) DEFAULT 0,
  `is_query` int(11) DEFAULT 0,
  `is_order_option` int(11) DEFAULT 0,
  `is_variant` int(11) DEFAULT 0,
  `has_price` int(11) DEFAULT 0,
  `price_type` int(11) DEFAULT 0,
  `is_unique` int(11) DEFAULT 0,
  `use_list` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attributes`
--

LOCK TABLES `attributes` WRITE;
/*!40000 ALTER TABLE `attributes` DISABLE KEYS */;
/*!40000 ALTER TABLE `attributes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_logs`
--

DROP TABLE IF EXISTS `auth_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auth_logs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `status` int(10) unsigned NOT NULL DEFAULT 0,
  `log_fail_count` int(10) unsigned NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_logs`
--

LOCK TABLES `auth_logs` WRITE;
/*!40000 ALTER TABLE `auth_logs` DISABLE KEYS */;
INSERT INTO `auth_logs` VALUES (1,1,1,0,'2022-08-07 08:14:57','2022-08-07 08:14:57'),(2,1,1,0,'2022-08-07 17:06:35','2022-08-07 17:06:35'),(3,1,1,0,'2022-08-08 02:26:44','2022-08-08 02:26:44'),(4,1,1,0,'2022-08-08 08:49:50','2022-08-08 08:49:50'),(5,1,1,0,'2022-08-08 13:38:54','2022-08-08 13:38:54'),(6,1,1,0,'2022-08-08 15:12:34','2022-08-08 15:12:34'),(7,1,1,0,'2022-08-09 03:32:45','2022-08-09 03:32:45'),(8,1,1,0,'2022-08-09 08:03:23','2022-08-09 08:03:23'),(9,1,1,0,'2022-08-10 08:50:51','2022-08-10 08:50:51'),(10,1,1,0,'2022-08-14 08:44:52','2022-08-14 08:44:52'),(11,1,1,0,'2022-08-14 14:59:37','2022-08-14 14:59:37'),(12,1,1,0,'2022-08-14 18:45:16','2022-08-14 18:45:16'),(13,1,1,0,'2022-08-15 03:23:43','2022-08-15 03:23:43'),(14,1,1,0,'2022-08-15 09:33:34','2022-08-15 09:33:34');
/*!40000 ALTER TABLE `auth_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart_items`
--

DROP TABLE IF EXISTS `cart_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cart_id` bigint(20) unsigned NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `attr_values` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(10) unsigned NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart_items`
--

LOCK TABLES `cart_items` WRITE;
/*!40000 ALTER TABLE `cart_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT 0,
  `customer_id` bigint(20) unsigned DEFAULT 0,
  `secret_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_total` decimal(14,2) NOT NULL DEFAULT 0.00,
  `total_money` decimal(14,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carts`
--

LOCK TABLES `carts` WRITE;
/*!40000 ALTER TABLE `carts` DISABLE KEYS */;
/*!40000 ALTER TABLE `carts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `dynamic_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `parent_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'post',
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trashed_status` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,3,0,'demo','post','demo',NULL,NULL,NULL,0,NULL,'2022-08-09 04:00:34','2022-08-09 04:00:34');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_refs`
--

DROP TABLE IF EXISTS `category_refs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_refs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `ref_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `ref` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_refs`
--

LOCK TABLES `category_refs` WRITE;
/*!40000 ALTER TABLE `category_refs` DISABLE KEYS */;
INSERT INTO `category_refs` VALUES (1,1,3,'post','2022-08-09 04:03:41','2022-08-09 04:03:41'),(2,1,4,'post','2022-08-09 04:04:47','2022-08-09 04:04:47'),(3,1,7,'post','2022-08-09 09:07:28','2022-08-09 09:07:28');
/*!40000 ALTER TABLE `category_refs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` bigint(20) unsigned DEFAULT 0,
  `ref` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'post',
  `ref_id` bigint(20) unsigned DEFAULT 0,
  `author_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_id` bigint(20) unsigned DEFAULT 0,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved` tinyint(1) DEFAULT 0,
  `approved_id` bigint(20) unsigned DEFAULT 0,
  `privacy` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,0,'post',5,'doanln16','doanln16@gmail.com',NULL,NULL,1,'15',1,0,'published','2022-08-14 19:40:08','2022-08-14 19:40:08');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `components`
--

DROP TABLE IF EXISTS `components`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `components` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'custom',
  `ref` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_id` bigint(20) unsigned DEFAULT 0,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inputs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`data`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `components`
--

LOCK TABLES `components` WRITE;
/*!40000 ALTER TABLE `components` DISABLE KEYS */;
INSERT INTO `components` VALUES (1,'blade','theme',1,'Home: Banner Style 1: Area','home.hero-banners.style-1','{\"title\":{\"type\":\"textarea\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (t\\u00f9y ch\\u1ecdn)<br><small>D\\u00f9ng C\\u1eb7p ** \\u0111\\u1ec3 in \\u0111\\u1eadm<\\/small>\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\\nXu\\u1ed1ng d\\u00f2ng b\\u00ecnh th\\u01b0\\u1eddng\",\"class\":\"auto-height display-input-text\"},\"description\":{\"type\":\"textarea\",\"label\":\"M\\u00f4 t\\u1ea3 \",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"url\":{\"type\":\"text\",\"label\":\"\\u0110\\u01b0\\u1eddng d\\u1eabn\",\"placeholder\":\"v\\u00ed d\\u1ee5: https:\\/\\/google.com.vn\"},\"button_text\":{\"type\":\"text\",\"label\":\"N\\u00fat b\\u1ea5n\",\"value\":\"Xem Chi ti\\u1ebft\"},\"instrunctor_image\":{\"type\":\"media\",\"label\":\"\\u1ea2nh h\\u1ecdc vi\\u00ean ho\\u1eb7c gi\\u1ea3ng vi\\u00ean\"},\"instrunctor_title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 m\\u1ee5c gi\\u1eddi thi\\u1ec7u gi\\u1ea3ng vi\\u00ean\",\"placeholder\":\"V\\u00ed d\\u1ee5: Gi\\u1ea3ng vi\\u00ean\",\"value\":\"Gi\\u1ea3ng vi\\u00ean\"},\"instrunctor_list_image\":{\"type\":\"media\",\"label\":\"\\u1ea2nh DS gi\\u1ea3ng vi\\u00ean\"},\"instrunctor_number\":{\"type\":\"number\",\"label\":\"S\\u1ed1 gi\\u1ea3ng vi\\u00ean\",\"placeholder\":\"V\\u00ed d\\u1ee5 250\",\"min\":0,\"step\":1}}','[]','2022-08-07 11:17:27','2022-08-07 11:17:27'),(2,'blade','theme',1,'Footer: Widgets: About','footer.widgets.about','{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (T\\u00f9y ch\\u1ecdn)\"},\"image\":{\"type\":\"media\",\"label\":\"\\u1ea2nh logo\",\"@filetype\":\"png,jpg,jpeg,gif,bmp\",\"placeholder\":\"Ch\\u1ecdn \\u1ea3nh\"},\"slogan\":{\"type\":\"textarea\",\"label\":\"Slogan\"},\"menu_id\":{\"type\":\"crazyselect\",\"label\":\"Menu Li\\u00ean H\\u1ec7\",\"call\":\"get_menu_options\"},\"class\":{\"type\":\"text\",\"label\":\"ClassName (T\\u00f9y ch\\u1ecdn)\",\"placeholder\":\"ClassName (T\\u00f9y ch\\u1ecdn)\"},\"col_xs\":{\"type\":\"radio\",\"label\":\"Smartphone Column size (&lt; 576px)\",\"data\":{\"1\":\"xs-1\",\"2\":\"xs-2\",\"3\":\"xs-3\",\"4\":\"xs-4\",\"5\":\"xs-5\",\"6\":\"lg-6\",\"12\":\"xs-12\"},\"default\":12},\"col_sm\":{\"type\":\"radio\",\"label\":\"Smal Screen Column size (576px - 767px)\",\"data\":{\"1\":\"sm-1\",\"2\":\"sm-2\",\"3\":\"sm-3\",\"4\":\"sm-4\",\"5\":\"sm-5\",\"6\":\"sm-6\",\"12\":\"sm-12\"},\"default\":6},\"col_md\":{\"type\":\"radio\",\"label\":\"Medium Screen Column size (768px - 991px)\",\"data\":{\"1\":\"md-1\",\"2\":\"md-2\",\"3\":\"md-3\",\"4\":\"md-4\",\"5\":\"md-5\",\"6\":\"md-6\",\"12\":\"md-12\"},\"default\":6},\"col_lg\":{\"type\":\"radio\",\"label\":\"Large Screen Column size (992px - 1199px)\",\"data\":{\"1\":\"lg-1\",\"2\":\"lg-2\",\"3\":\"lg-3\",\"4\":\"lg-4\",\"5\":\"lg-5\",\"6\":\"lg-6\",\"12\":\"lg-12\"},\"default\":3},\"col_xl\":{\"type\":\"radio\",\"label\":\"Extra Large Screen Column size (&gt; 1200px)\",\"data\":{\"1\":\"xl-1\",\"2\":\"xl-2\",\"3\":\"xl-3\",\"4\":\"xl-4\",\"5\":\"xl-5\",\"6\":\"xl-6\",\"12\":\"xl-12\"},\"default\":3}}','[]','2022-08-08 13:39:06','2022-08-08 13:39:06'),(3,'blade','theme',1,'Footer: Widgets: Contacts','footer.widgets.contacts','{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (T\\u00f9y ch\\u1ecdn)\"},\"description\":{\"type\":\"textarea\",\"label\":\"M\\u00f4 t\\u1ea3\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"menu_id\":{\"type\":\"crazyselect\",\"label\":\"Menu\",\"call\":\"get_menu_options\"},\"class\":{\"type\":\"text\",\"label\":\"ClassName (T\\u00f9y ch\\u1ecdn)\",\"placeholder\":\"ClassName (T\\u00f9y ch\\u1ecdn)\"},\"col_xs\":{\"type\":\"radio\",\"label\":\"Smartphone Column size (&lt; 576px)\",\"data\":{\"1\":\"xs-1\",\"2\":\"xs-2\",\"3\":\"xs-3\",\"4\":\"xs-4\",\"5\":\"xs-5\",\"6\":\"lg-6\",\"12\":\"xs-12\"},\"default\":12},\"col_sm\":{\"type\":\"radio\",\"label\":\"Smal Screen Column size (576px - 767px)\",\"data\":{\"1\":\"sm-1\",\"2\":\"sm-2\",\"3\":\"sm-3\",\"4\":\"sm-4\",\"5\":\"sm-5\",\"6\":\"sm-6\",\"12\":\"sm-12\"},\"default\":6},\"col_md\":{\"type\":\"radio\",\"label\":\"Medium Screen Column size (768px - 991px)\",\"data\":{\"1\":\"md-1\",\"2\":\"md-2\",\"3\":\"md-3\",\"4\":\"md-4\",\"5\":\"md-5\",\"6\":\"md-6\",\"12\":\"md-12\"},\"default\":6},\"col_lg\":{\"type\":\"radio\",\"label\":\"Large Screen Column size (992px - 1199px)\",\"data\":{\"1\":\"lg-1\",\"2\":\"lg-2\",\"3\":\"lg-3\",\"4\":\"lg-4\",\"5\":\"lg-5\",\"6\":\"lg-6\",\"12\":\"lg-12\"},\"default\":3},\"col_xl\":{\"type\":\"radio\",\"label\":\"Extra Large Screen Column size (&gt; 1200px)\",\"data\":{\"1\":\"xl-1\",\"2\":\"xl-2\",\"3\":\"xl-3\",\"4\":\"xl-4\",\"5\":\"xl-5\",\"6\":\"xl-6\",\"12\":\"xl-12\"},\"default\":3}}','[]','2022-08-08 13:39:06','2022-08-08 13:39:06'),(4,'blade','theme',1,'Footer: Widgets: Links','footer.widgets.menu','{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (T\\u00f9y ch\\u1ecdn)\"},\"menu_id\":{\"type\":\"crazyselect\",\"label\":\"Menu\",\"call\":\"get_menu_options\"},\"class\":{\"type\":\"text\",\"label\":\"ClassName (T\\u00f9y ch\\u1ecdn)\",\"placeholder\":\"ClassName (T\\u00f9y ch\\u1ecdn)\"},\"col_xs\":{\"type\":\"radio\",\"label\":\"Smartphone Column size (&lt; 576px)\",\"data\":{\"1\":\"xs-1\",\"2\":\"xs-2\",\"3\":\"xs-3\",\"4\":\"xs-4\",\"5\":\"xs-5\",\"6\":\"lg-6\",\"12\":\"xs-12\"},\"default\":12},\"col_sm\":{\"type\":\"radio\",\"label\":\"Smal Screen Column size (576px - 767px)\",\"data\":{\"1\":\"sm-1\",\"2\":\"sm-2\",\"3\":\"sm-3\",\"4\":\"sm-4\",\"5\":\"sm-5\",\"6\":\"sm-6\",\"12\":\"sm-12\"},\"default\":6},\"col_md\":{\"type\":\"radio\",\"label\":\"Medium Screen Column size (768px - 991px)\",\"data\":{\"1\":\"md-1\",\"2\":\"md-2\",\"3\":\"md-3\",\"4\":\"md-4\",\"5\":\"md-5\",\"6\":\"md-6\",\"12\":\"md-12\"},\"default\":6},\"col_lg\":{\"type\":\"radio\",\"label\":\"Large Screen Column size (992px - 1199px)\",\"data\":{\"1\":\"lg-1\",\"2\":\"lg-2\",\"3\":\"lg-3\",\"4\":\"lg-4\",\"5\":\"lg-5\",\"6\":\"lg-6\",\"12\":\"lg-12\"},\"default\":3},\"col_xl\":{\"type\":\"radio\",\"label\":\"Extra Large Screen Column size (&gt; 1200px)\",\"data\":{\"1\":\"xl-1\",\"2\":\"xl-2\",\"3\":\"xl-3\",\"4\":\"xl-4\",\"5\":\"xl-5\",\"6\":\"xl-6\",\"12\":\"xl-12\"},\"default\":3}}','[]','2022-08-08 13:39:06','2022-08-08 13:39:06'),(5,'blade','theme',1,'Settings: Page: Thiết lập trang ','settings.page-settings','{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 Thi\\u1ebft l\\u1eadp \"},\"page_id\":{\"type\":\"crazyselect\",\"label\":\"Trang\",\"call\":\"get_page_options\",\"@label-type\":\"value\"},\"show_breadcrumb\":{\"type\":\"switch\",\"label\":\"Breadcrumb\",\"value_type\":\"boolean\",\"check_label\":\"Hi\\u1ec3n th\\u1ecb breadcrumb\"},\"list_style\":{\"type\":\"radio\",\"label\":\"Style Danh s\\u00e1ch\",\"data\":{\"style-1\":\"Style 1\",\"style-2\":\"Style 2\"},\"default\":\"style-1\"},\"list_layout\":{\"type\":\"radio\",\"label\":\"Layout Danh s\\u00e1ch\",\"data\":{\"sidebar\":\"sidebar\",\"fullwidth\":\"fullwidth\"},\"default\":\"sidebar\"},\"list_type\":{\"type\":\"radio\",\"label\":\"Ki\\u1ec3u Danh s\\u00e1ch\",\"data\":{\"standard\":\"Standard\",\"list\":\"Danh s\\u00e1ch\",\"grid\":\"L\\u01b0\\u1edbi (grid)\"},\"default\":\"grid\"},\"detail_style\":{\"type\":\"radio\",\"label\":\"Style chi ti\\u1ebft\",\"data\":{\"1\":\"Style 1\",\"2\":\"Style 2\"},\"default\":\"1\"}}','{\"show_breadcrumb\":true,\"list_style\":\"1\",\"list_type\":\"grid\"}','2022-08-09 03:33:18','2022-08-14 20:06:36'),(6,'blade','theme',1,'Settings: Post: Thiết lập mục đăng bài','settings.post-settings','{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 Thi\\u1ebft l\\u1eadp (T\\u00f9y ch\\u1ecdn)\"},\"dynamic_id\":{\"type\":\"crazyselect\",\"label\":\"M\\u1ee5c \\u0111\\u0103ng b\\u00e0i\",\"call\":\"get_dynamic_options\",\"params\":[[],\"Ch\\u1ecdn m\\u1ed9t\"],\"@change\":\"Crazy.posts.changeDynamicID\",\"required\":true},\"category_id\":{\"type\":\"crazyselect\",\"label\":\"Danh m\\u1ee5c\",\"call\":\"get_post_category_options\",\"params\":[{\"dynamic_id\":\"#dynamic_id\"},true]},\"show_breadcrumb\":{\"type\":\"switch\",\"label\":\"Breadcrumb\",\"value_type\":\"boolean\",\"check_label\":\"Hi\\u1ec3n th\\u1ecb breadcrumb\"},\"list_style\":{\"type\":\"radio\",\"label\":\"Style Danh s\\u00e1ch\",\"data\":{\"style-1\":\"Style 1\",\"style-2\":\"Style 2\",\"course-one\":\"Kh\\u00f3a H\\u1ecdc - 1\",\"course-two\":\"Kh\\u00f3a H\\u1ecdc - 2\",\"course-five\":\"Kh\\u00f3a H\\u1ecdc - 5\"},\"default\":\"style-1\"},\"list_layout\":{\"type\":\"radio\",\"label\":\"Layout Danh s\\u00e1ch\",\"data\":{\"sidebar\":\"sidebar\",\"fullwidth\":\"fullwidth\"},\"default\":\"sidebar\"},\"list_type\":{\"type\":\"radio\",\"label\":\"Ki\\u1ec3u Danh s\\u00e1ch\",\"data\":{\"standard\":\"Standard\",\"list\":\"Danh s\\u00e1ch\",\"grid\":\"L\\u01b0\\u1edbi (grid)\"},\"default\":\"grid\"},\"detail_style\":{\"type\":\"radio\",\"label\":\"Style chi ti\\u1ebft\",\"data\":{\"1\":\"Style 1\",\"2\":\"Style 2\"},\"default\":\"1\"},\"detail_layout\":{\"type\":\"radio\",\"label\":\"Layout Chi ti\\u1ebft\",\"data\":{\"sidebar\":\"sidebar\",\"fullwidth\":\"fullwidth\"},\"default\":\"sidebar\"}}','[]','2022-08-09 03:33:19','2022-08-14 19:26:49'),(7,'blade','theme',1,'Sidebar: Posts: Danh mục','sidebars.posts.categories','{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (T\\u00f9y ch\\u1ecdn)\"},\"get_by_dynamic_active\":{\"type\":\"switch\",\"label\":\"\\u01afu ti\\u00ean m\\u1ee5c \\u0111ang xem\",\"value_type\":\"boolean\"},\"dynamic_id\":{\"type\":\"crazyselect\",\"label\":\"M\\u1ee5c (t\\u00f9y ch\\u1ecdn)\",\"template\":\"crazyselect\",\"call\":\"get_dynamic_options\",\"params\":[[],\"Ch\\u1ecdn m\\u1ed9t\"],\"@change\":\"App.components.changeDynamicID\",\"data-ref\":\"parent_id\"},\"parent_id\":{\"type\":\"crazyselect\",\"label\":\"Danh m\\u1ee5c Cha\",\"template\":\"crazyselect\",\"call\":\"get_post_category_options\",\"params\":[{\"dynamic_id\":\"#dynamic_id\"},true],\"@label-type\":\"value\"},\"sorttype\":{\"type\":\"select\",\"label\":\"ki\\u1ec3u s\\u1eafp x\\u1ebfp\",\"call\":\"get_post_category_sortby_options\"},\"cate_number\":{\"type\":\"number\",\"label\":\"S\\u1ed1 l\\u01b0\\u1ee3ng danh m\\u1ee5c\",\"min\":1,\"step\":1,\"valudate\":\"number|min:1\",\"default\":10}}','[]','2022-08-14 08:55:51','2022-08-14 08:55:51'),(8,'blade','theme',1,'Sidebar: Posts: Banner Text','sidebars.posts.banner-text','{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (T\\u00f9y ch\\u1ecdn)<br><small>(D\\u00f9ng c\\u1eb7p d\\u1ea5u ** \\u0111\\u1ec3 in \\u0111\\u1eadm<\\/small>)\"},\"description\":{\"type\":\"textarea\",\"label\":\"M\\u00f4 t\\u1ea3\"},\"url\":{\"type\":\"text\",\"label\":\"D\\u01b0\\u1eddng d\\u1eabn\",\"placeholder\":\"https:\\/\\/\"},\"button_text\":{\"type\":\"text\",\"label\":\"Text n\\u00fat b\\u1ea5m\",\"placeholder\":\"V\\u00ed d\\u1ee5: B\\u1eaft \\u0111\\u1ea7u\"}}','[]','2022-08-14 09:56:32','2022-08-14 10:54:32'),(9,'blade','theme',1,'Sidebar: Posts: Menu','sidebars.posts.menu','{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (T\\u00f9y ch\\u1ecdn)\"},\"menu_id\":{\"type\":\"crazyselect\",\"label\":\"Menu\",\"call\":\"get_menu_options\"},\"level\":{\"type\":\"radio\",\"label\":\"S\\u1ed1 c\\u1ea5p\",\"data\":{\"1\":\"1\",\"2\":\"2\",\"3\":\"3\",\"4\":\"4\"},\"default\":1}}','[]','2022-08-14 09:56:32','2022-08-14 09:56:32'),(10,'blade','theme',1,'Sidebar: Posts: Recent Posts','sidebars.posts.recent','{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (T\\u00f9y ch\\u1ecdn)\",\"default\":\"Tin m\\u1edbi nh\\u1ea5t\"},\"dynamic_id\":{\"type\":\"crazyselect\",\"label\":\"M\\u1ee5c (t\\u00f9y ch\\u1ecdn)\",\"template\":\"crazyselect\",\"call\":\"get_dynamic_options\",\"params\":[[],\"Ch\\u1ecdn m\\u1ed9t\"],\"@change\":\"Crazy.posts.changeDynamicID\",\"required\":\"true\"},\"category_id\":{\"type\":\"crazyselect\",\"label\":\"Danh m\\u1ee5c\",\"template\":\"crazyselect\",\"call\":\"get_post_category_options\",\"params\":[{\"dynamic_id\":\"#dynamic_id\"},true],\"@label-type\":\"value\"},\"content_type\":{\"type\":\"radio\",\"label\":\"Lo\\u1ea1i n\\u1ed9i dung\",\"call\":\"get_content_type_options\",\"params\":[\"T\\u1ea5t c\\u1ea3\"]},\"sorttype\":{\"type\":\"select\",\"label\":\"ki\\u1ec3u s\\u1eafp x\\u1ebfp\",\"call\":\"get_post_sortby_options\"},\"post_number\":{\"type\":\"number\",\"label\":\"S\\u1ed1 tin b\\u00e0i\",\"min\":1,\"step\":1,\"default\":10}}','[]','2022-08-14 09:56:32','2022-08-14 09:56:32'),(11,'blade','theme',1,'Sidebar: Posts: Box Tìm kiếm','sidebars.posts.search','{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (T\\u00f9y ch\\u1ecdn)\"},\"placeholder\":{\"type\":\"text\",\"label\":\"Placeholder\"}}','[]','2022-08-14 09:56:32','2022-08-14 09:56:32'),(12,'blade','theme',1,'Sidebar: Thẻ bài viết (tags)','sidebars.posts.tags','{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1\"},\"sorttype\":{\"type\":\"select\",\"label\":\"ki\\u1ec3u s\\u1eafp x\\u1ebfp\",\"call\":\"get_tag_sortby_options\"},\"tag_number\":{\"type\":\"number\",\"label\":\"S\\u1ed1 tin b\\u00e0i\",\"min\":1,\"step\":1,\"default\":10}}','[]','2022-08-14 09:56:32','2022-08-14 09:56:32'),(13,'blade','theme',1,'Posts Detail: CTA Banner Text','banners.cta','{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (T\\u00f9y ch\\u1ecdn)<br><small>(D\\u00f9ng c\\u1eb7p d\\u1ea5u ** \\u0111\\u1ec3 in \\u0111\\u1eadm<\\/small>)\"},\"description\":{\"type\":\"textarea\",\"label\":\"M\\u00f4 t\\u1ea3\"},\"url\":{\"type\":\"text\",\"label\":\"D\\u01b0\\u1eddng d\\u1eabn\",\"placeholder\":\"https:\\/\\/\"},\"button_text\":{\"type\":\"text\",\"label\":\"Text n\\u00fat b\\u1ea5m\",\"placeholder\":\"V\\u00ed d\\u1ee5: B\\u1eaft \\u0111\\u1ea7u\"}}','[]','2022-08-14 19:26:49','2022-08-14 19:26:49'),(14,'blade','theme',1,'Home: A&S: About','home.about-slogan.about','{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (t\\u00f9y ch\\u1ecdn)\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"description\":{\"type\":\"textarea\",\"label\":\"M\\u00f4 t\\u1ea3 <br><small>D\\u00f9ng C\\u1eb7p ** \\u0111\\u1ec3 in \\u0111\\u1eadm<\\/small>\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\\nXu\\u1ed1ng d\\u00f2ng b\\u00ecnh th\\u01b0\\u1eddng\",\"class\":\"auto-height display-input-text\"},\"slogan_title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (t\\u00f9y ch\\u1ecdn)\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"}}','[]','2022-08-15 03:24:13','2022-08-15 03:26:49'),(15,'blade','theme',1,'Home: A&S: Slogan','home.about-slogan.slogan','{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (t\\u00f9y ch\\u1ecdn)\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"icon\":{\"type\":\"media\",\"label\":\"icon\",\"placeholder\":\"Ch\\u1ecdn \\u1ea3nh\"},\"description\":{\"type\":\"textarea\",\"label\":\"M\\u00f4 t\\u1ea3\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\\nXu\\u1ed1ng d\\u00f2ng b\\u00ecnh th\\u01b0\\u1eddng\",\"class\":\"auto-height display-input-text\"}}','[]','2022-08-15 03:24:13','2022-08-15 03:26:49'),(16,'blade','theme',1,'Home: About & Video','home.about-video','{\"sub_title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 nh\\u1ecf (t\\u00f9y ch\\u1ecdn)\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (t\\u00f9y ch\\u1ecdn)<br \\/><small>D\\u00f9ng C\\u1eb7p ** \\u0111\\u1ec3 in \\u0111\\u1eadm<\\/small>\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"description\":{\"type\":\"textarea\",\"label\":\"M\\u00f4 t\\u1ea3 <br><small>D\\u00f9ng C\\u1eb7p ** \\u0111\\u1ec3 in \\u0111\\u1eadm<\\/small>\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\\nXu\\u1ed1ng d\\u00f2ng b\\u00ecnh th\\u01b0\\u1eddng\",\"class\":\"auto-height display-input-text\"},\"features\":{\"type\":\"textarea\",\"label\":\"Danh s\\u00e1ch Features<br><small>()<\\/small>\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\\nM\\u1ed7i d\\u00f2ng m\\u1ed9t c\\u00e2u\",\"class\":\"auto-height display-input-text\"},\"image\":{\"type\":\"media\",\"label\":\"\\u1ea2nh b\\u00ean tr\\u00e1i<br><small>K\\u00edch th\\u01b0\\u1edbc 370 x 420<\\/small>\"},\"video_url\":{\"type\":\"text\",\"label\":\"\\u0110\\u01b0\\u1eddng d\\u1eabn video<br>(Youtube, Vimeo)\",\"placeholder\":\"https:\\/\\/www.youtube.com\\/watch?v=Gds4_76H\"},\"video_thumbnail\":{\"type\":\"media\",\"label\":\"\\u1ea2nh b\\u00ean tr\\u00e1i<br><small>K\\u00edch th\\u01b0\\u1edbc 370 x 420<\\/small>\"},\"award_icon\":{\"type\":\"iconpicker\",\"label\":\"Icon m\\u1ee5c Award\",\"default\":\"icon-21\"},\"award_number\":{\"type\":\"number\",\"label\":\"S\\u1ed1 award<br><small>(S\\u1ed1 gi\\u1ea3ng vi\\u00ean , S\\u1ed1 kh\\u00f3a h\\u1ecdc, S\\u1ed1 h\\u1ecdc vi\\u00ean, ho\\u1eb7c con s\\u1ed1 n\\u00e0o \\u0111\\u00f3)<\\/small>\",\"min\":0,\"step\":1,\"default\":10,\"placeholder\":\"Con s\\u1ed1 th\\u00fa v\\u1ecb\"},\"award_label\":{\"type\":\"text\",\"label\":\"Nh\\u00e3n cho m\\u1ee5c award\",\"placeholder\":\"v\\u00ed d\\u1ee5: Kh\\u00f3a h\\u1ecdc\"}}','[]','2022-08-15 09:47:05','2022-08-15 09:54:59'),(17,'blade','theme',1,'Home: About Course - Area','home.about-course.area','{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (t\\u00f9y ch\\u1ecdn)<br \\/><small>D\\u00f9ng C\\u1eb7p ** \\u0111\\u1ec3 in \\u0111\\u1eadm<\\/small>\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"description\":{\"type\":\"textarea\",\"label\":\"M\\u00f4 t\\u1ea3 <br><small>D\\u00f9ng C\\u1eb7p ** \\u0111\\u1ec3 in \\u0111\\u1eadm<\\/small>\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\\nXu\\u1ed1ng d\\u00f2ng b\\u00ecnh th\\u01b0\\u1eddng\",\"class\":\"auto-height display-input-text\"}}','[]','2022-08-15 15:11:40','2022-08-15 15:11:40'),(18,'blade','theme',1,'Home: About Course - Item','home.about-course.item','{\"title\":{\"type\":\"text\",\"label\":\"T\\u00ean Kh\\u00f3a h\\u1ecdc\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"icon\":{\"type\":\"iconpicker\",\"label\":\"Icon\",\"default\":\"icon-45\"},\"style\":{\"type\":\"crazyselect\",\"label\":\"Style\",\"data\":{\"primary\":\"Primary\",\"secondary\":\"Secondary\",\"tertiary\":\"Tertiary\",\"extra02\":\"Extra02\",\"extra03\":\"Extra03\",\"extra04\":\"Extra04\",\"extra05\":\"Extra05\",\"extra08\":\"Extra08\"},\"default\":\"primary\"},\"syllabus\":{\"type\":\"textarea\",\"label\":\"Gi\\u00e1o tr\\u00ecnh \",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\\nXu\\u1ed1ng d\\u00f2ng b\\u00ecnh th\\u01b0\\u1eddng\",\"class\":\"auto-height display-input-text\"},\"outpoint\":{\"type\":\"text\",\"label\":\"\\u0110\\u1ea7u ra\",\"placeholder\":\"v\\u00ed d\\u1ee5 7.0\",\"default\":\"7.5\"},\"duetime\":{\"type\":\"number\",\"label\":\"Th\\u1eddi gian kh\\u00f3a h\\u1ecdc (th\\u00e1ng)\"}}','[]','2022-08-15 15:11:40','2022-08-15 15:11:40'),(19,'blade','theme',1,'Home: Danh sách Khóa học','home.courses','{\"sub_title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 nh\\u1ecf\",\"placeholder\":\"\"},\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (t\\u00f9y ch\\u1ecdn)<br \\/><small>D\\u00f9ng C\\u1eb7p ** \\u0111\\u1ec3 in \\u0111\\u1eadm<\\/small>\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"description\":{\"type\":\"textarea\",\"label\":\"M\\u00f4 t\\u1ea3 ng\\u1eafn (T\\u00f9y ch\\u1ecdn)\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"dynamic_id\":{\"type\":\"crazyselect\",\"label\":\"M\\u1ee5c (t\\u00f9y ch\\u1ecdn)\",\"template\":\"crazyselect\",\"call\":\"get_dynamic_options\",\"params\":[[],\"Ch\\u1ecdn m\\u1ed9t\"],\"@change\":\"Crazy.posts.changeDynamicID\",\"required\":\"true\"},\"category_id\":{\"type\":\"crazyselect\",\"label\":\"Danh m\\u1ee5c (t\\u00f9y ch\\u1ecdn)\",\"template\":\"crazyselect\",\"call\":\"get_post_category_options\",\"params\":[{\"dynamic_id\":\"#dynamic_id\"},true],\"@label-type\":\"value\"},\"group_by_category\":{\"type\":\"switch\",\"label\":\"Nh\\u00f3m theo danh m\\u1ee5c\",\"value_type\":\"boolean\"},\"sorttype\":{\"type\":\"select\",\"label\":\"ki\\u1ec3u s\\u1eafp x\\u1ebfp\",\"call\":\"get_post_sortby_options\"},\"post_number\":{\"type\":\"number\",\"label\":\"S\\u1ed1 tin b\\u00e0i\",\"min\":1,\"step\":1,\"default\":4},\"link\":{\"type\":\"text\",\"label\":\"Li\\u00ean k\\u1ebft (t\\u00f9y ch\\u1ecdn)\",\"placeholder\":\"Nh\\u1eadp li\\u00ean k\\u1ebft. (Kh\\u00f4ng b\\u1eaft bu\\u1ed9c)\"}}','[]','2022-08-15 16:55:07','2022-08-16 10:07:17'),(20,'blade','theme',1,'Home: Danh sách Video','home.video-list','{\"sub_title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 nh\\u1ecf\",\"placeholder\":\"\"},\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (t\\u00f9y ch\\u1ecdn)<br \\/><small>D\\u00f9ng C\\u1eb7p ** \\u0111\\u1ec3 in \\u0111\\u1eadm<\\/small>\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"description\":{\"type\":\"textarea\",\"label\":\"M\\u00f4 t\\u1ea3 ng\\u1eafn (T\\u00f9y ch\\u1ecdn)\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"dynamic_id\":{\"type\":\"crazyselect\",\"label\":\"M\\u1ee5c (t\\u00f9y ch\\u1ecdn)\",\"template\":\"crazyselect\",\"call\":\"get_dynamic_options\",\"params\":[{\"post_type\":\"video_embed\"},\"Ch\\u1ecdn m\\u1ed9t\"],\"@change\":\"Crazy.posts.changeDynamicID\",\"required\":\"true\"},\"category_id\":{\"type\":\"crazyselect\",\"label\":\"Danh m\\u1ee5c (t\\u00f9y ch\\u1ecdn)\",\"template\":\"crazyselect\",\"call\":\"get_post_category_options\",\"params\":[{\"dynamic_id\":\"#dynamic_id\"},true],\"@label-type\":\"value\"},\"sorttype\":{\"type\":\"select\",\"label\":\"ki\\u1ec3u s\\u1eafp x\\u1ebfp\",\"call\":\"get_post_sortby_options\"},\"post_number\":{\"type\":\"number\",\"label\":\"S\\u1ed1 tin b\\u00e0i\",\"min\":1,\"step\":1,\"default\":5},\"link\":{\"type\":\"text\",\"label\":\"Li\\u00ean k\\u1ebft (t\\u00f9y ch\\u1ecdn)\",\"placeholder\":\"Nh\\u1eadp li\\u00ean k\\u1ebft. (Kh\\u00f4ng b\\u1eaft bu\\u1ed9c)\"}}','[]','2022-08-16 10:07:17','2022-08-16 10:32:01'),(21,'blade','theme',1,'Home: Danh sách Giảng viên','home.team.area','{\"sub_title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 nh\\u1ecf\",\"placeholder\":\"\"},\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (t\\u00f9y ch\\u1ecdn)<br \\/><small>D\\u00f9ng C\\u1eb7p ** \\u0111\\u1ec3 in \\u0111\\u1eadm<\\/small>\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"}}','[]','2022-08-16 11:38:40','2022-08-16 11:38:40'),(22,'blade','theme',1,'Home: Thông tin giảng viên','home.team.item','{\"title\":{\"type\":\"text\",\"label\":\"H\\u1ecd v\\u00e0 t\\u00ean\",\"placeholder\":\"V\\u00ed d\\u1ee5 Nguy\\u1ec5n V\\u0103n A\"},\"avatar\":{\"type\":\"media\",\"label\":\"H\\u00ecnh \\u0110\\u1ea1i di\\u1ec7n\",\"placeholder\":\"\"},\"job\":{\"type\":\"text\",\"label\":\"C\\u00f4ng vi\\u1ec7c\",\"placeholder\":\"V\\u00ed d\\u1ee5 Gi\\u1ea3ng vi\\u00ean\"},\"link\":{\"type\":\"text\",\"label\":\"Li\\u00ean k\\u1ebft (t\\u00f9y ch\\u1ecdn)\",\"placeholder\":\"Nh\\u1eadp li\\u00ean k\\u1ebft. (Kh\\u00f4ng b\\u1eaft bu\\u1ed9c)\"},\"facebook\":{\"type\":\"text\",\"label\":\"Li\\u00ean k\\u1ebft facebook\",\"placeholder\":\"https:\\/\\/www.facebook.com\\/UserName\"},\"twitter\":{\"type\":\"text\",\"label\":\"Li\\u00ean k\\u1ebft twitter\",\"placeholder\":\"https:\\/\\/twitter.com\\/UserName\"},\"linkedin\":{\"type\":\"text\",\"label\":\"Li\\u00ean k\\u1ebft linkedin\",\"placeholder\":\"https:\\/\\/linkedin.com\\/\"}}','[]','2022-08-16 11:38:41','2022-08-16 11:39:52'),(23,'blade','theme',1,'Home: Các con số thống kê (Item)','home.counterup','{\"number\":{\"type\":\"number\",\"label\":\"S\\u1ed1\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\",\"min\":0,\"step\":0.1},\"unit\":{\"type\":\"text\",\"label\":\"\\u0110\\u01a1n v\\u1ecb t\\u00ednh\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"title\":{\"type\":\"text\",\"label\":\"Nh\\u00e3n\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"style\":{\"type\":\"crazyselect\",\"label\":\"Style\",\"data\":{\"primary\":\"Primary\",\"secondary\":\"Secondary\",\"tertiary\":\"Tertiary\",\"extra01\":\"Extra01\",\"extra02\":\"Extra02\",\"extra03\":\"Extra03\",\"extra04\":\"Extra04\",\"extra05\":\"Extra05\",\"extra06\":\"Extra06\",\"extra07\":\"Extra07\",\"extra08\":\"Extra08\"},\"default\":\"primary\"}}','[]','2022-08-16 12:03:17','2022-08-16 12:03:17'),(24,'blade','theme',1,'Home: Các con số thống kê (Area)','home.counterup.area','{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (t\\u00f9y ch\\u1ecdn)\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"}}','[]','2022-08-16 12:03:17','2022-08-16 12:03:17'),(25,'blade','theme',1,'Home: Thông tin giảng viên','home.counterup.item','{\"title\":{\"type\":\"text\",\"label\":\"H\\u1ecd v\\u00e0 t\\u00ean\",\"placeholder\":\"V\\u00ed d\\u1ee5 Nguy\\u1ec5n V\\u0103n A\"},\"avatar\":{\"type\":\"media\",\"label\":\"H\\u00ecnh \\u0110\\u1ea1i di\\u1ec7n\",\"placeholder\":\"\"},\"job\":{\"type\":\"text\",\"label\":\"C\\u00f4ng vi\\u1ec7c\",\"placeholder\":\"V\\u00ed d\\u1ee5 Gi\\u1ea3ng vi\\u00ean\"},\"link\":{\"type\":\"text\",\"label\":\"Li\\u00ean k\\u1ebft (t\\u00f9y ch\\u1ecdn)\",\"placeholder\":\"Nh\\u1eadp li\\u00ean k\\u1ebft. (Kh\\u00f4ng b\\u1eaft bu\\u1ed9c)\"},\"facebook\":{\"type\":\"text\",\"label\":\"Li\\u00ean k\\u1ebft facebook\",\"placeholder\":\"https:\\/\\/www.facebook.com\\/UserName\"},\"twitter\":{\"type\":\"text\",\"label\":\"Li\\u00ean k\\u1ebft twitter\",\"placeholder\":\"https:\\/\\/twitter.com\\/UserName\"},\"linkedin\":{\"type\":\"text\",\"label\":\"Li\\u00ean k\\u1ebft linkedin\",\"placeholder\":\"https:\\/\\/linkedin.com\\/\"}}','[]','2022-08-16 12:03:18','2022-08-16 12:03:18'),(26,'blade','theme',1,'Home: FAQ\'s Area','home.faqs.area','{\"sub_title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 nh\\u1ecf\",\"placeholder\":\"\"},\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (t\\u00f9y ch\\u1ecdn)<br \\/><small>D\\u00f9ng C\\u1eb7p ** \\u0111\\u1ec3 in \\u0111\\u1eadm<\\/small>\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"}}','[]','2022-08-16 12:19:02','2022-08-16 12:21:37'),(27,'blade','theme',1,'Home: FAQ\'s Item','home.faqs.item','{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 \",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"content\":{\"type\":\"textarea\",\"label\":\"M\\u00f4 t\\u1ea3 <br><small>D\\u00f9ng C\\u1eb7p ** \\u0111\\u1ec3 in \\u0111\\u1eadm<\\/small>\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\\nXu\\u1ed1ng d\\u00f2ng b\\u00ecnh th\\u01b0\\u1eddng\",\"class\":\"auto-height display-input-text\"}}','[]','2022-08-16 12:19:03','2022-08-16 12:19:49'),(28,'blade','theme',1,'Home: Thông tin liên hệ','home.contact-area','{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (t\\u00f9y ch\\u1ecdn)\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"email\":{\"type\":\"text\",\"label\":\"Email\",\"placeholder\":\"Nh\\u1eadp email\"},\"hotline\":{\"type\":\"text\",\"label\":\"Hotline\",\"placeholder\":\"Nh\\u1eadp S\\u0110T\"}}','[]','2022-08-16 13:52:03','2022-08-16 13:52:03'),(29,'blade','theme',1,'Home: Đối tác & Khách hàng','home.partners.area','{\"sub_title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 nh\\u1ecf\",\"placeholder\":\"\"},\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (t\\u00f9y ch\\u1ecdn)<br \\/><small>D\\u00f9ng C\\u1eb7p ** \\u0111\\u1ec3 in \\u0111\\u1eadm<\\/small>\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"description\":{\"type\":\"textarea\",\"label\":\"M\\u00f4 t\\u1ea3 <br><small>D\\u00f9ng C\\u1eb7p ** \\u0111\\u1ec3 in \\u0111\\u1eadm<\\/small>\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\\nXu\\u1ed1ng d\\u00f2ng b\\u00ecnh th\\u01b0\\u1eddng\",\"class\":\"auto-height display-input-text\"}}','[]','2022-08-16 13:52:03','2022-08-16 13:52:03'),(30,'blade','theme',1,'Home: Đối tác & Khách hàng - Item','home.partners.item','{\"title\":{\"type\":\"text\",\"label\":\"T\\u00ean Kh\\u00f3a h\\u1ecdc\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"logo\":{\"type\":\"media\",\"label\":\"Logo\"},\"link\":{\"type\":\"text\",\"label\":\"Link\",\"placeholder\":\"http:\\/\\/\"}}','[]','2022-08-16 13:52:03','2022-08-16 13:52:03'),(31,'blade','theme',1,'Home: Mục tin tức','home.posts','{\"sub_title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 nh\\u1ecf\",\"placeholder\":\"\"},\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (t\\u00f9y ch\\u1ecdn)<br \\/><small>D\\u00f9ng C\\u1eb7p ** \\u0111\\u1ec3 in \\u0111\\u1eadm<\\/small>\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"description\":{\"type\":\"textarea\",\"label\":\"M\\u00f4 t\\u1ea3 ng\\u1eafn (T\\u00f9y ch\\u1ecdn)\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"dynamic_id\":{\"type\":\"crazyselect\",\"label\":\"M\\u1ee5c (t\\u00f9y ch\\u1ecdn)\",\"template\":\"crazyselect\",\"call\":\"get_dynamic_options\",\"params\":[[],\"Ch\\u1ecdn m\\u1ed9t\"],\"@change\":\"Crazy.posts.changeDynamicID\",\"required\":\"true\"},\"category_id\":{\"type\":\"crazyselect\",\"label\":\"Danh m\\u1ee5c (t\\u00f9y ch\\u1ecdn)\",\"template\":\"crazyselect\",\"call\":\"get_post_category_options\",\"params\":[{\"dynamic_id\":\"#dynamic_id\"},true],\"@label-type\":\"value\"},\"sorttype\":{\"type\":\"select\",\"label\":\"ki\\u1ec3u s\\u1eafp x\\u1ebfp\",\"call\":\"get_post_sortby_options\"},\"post_number\":{\"type\":\"number\",\"label\":\"S\\u1ed1 tin b\\u00e0i\",\"min\":1,\"step\":1,\"default\":3},\"link\":{\"type\":\"text\",\"label\":\"Li\\u00ean k\\u1ebft (t\\u00f9y ch\\u1ecdn)\",\"placeholder\":\"Nh\\u1eadp li\\u00ean k\\u1ebft. (Kh\\u00f4ng b\\u1eaft bu\\u1ed9c)\"}}','[]','2022-08-16 13:58:16','2022-08-16 13:58:16');
/*!40000 ALTER TABLE `components` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_replies`
--

DROP TABLE IF EXISTS `contact_replies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_replies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `contact_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_replies`
--

LOCK TABLES `contact_replies` WRITE;
/*!40000 ALTER TABLE `contact_replies` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_replies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
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
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT 0,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region_id` bigint(20) unsigned DEFAULT 0,
  `district_id` bigint(20) unsigned DEFAULT 0,
  `ward_id` bigint(20) unsigned DEFAULT 0,
  `balance` decimal(14,2) NOT NULL DEFAULT 0.00,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trashed_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `districts`
--

DROP TABLE IF EXISTS `districts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `districts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `region_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `code` int(11) DEFAULT 0,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path_with_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `districts`
--

LOCK TABLES `districts` WRITE;
/*!40000 ALTER TABLE `districts` DISABLE KEYS */;
/*!40000 ALTER TABLE `districts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dynamics`
--

DROP TABLE IF EXISTS `dynamics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dynamics` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'article',
  `use_category` tinyint(1) NOT NULL DEFAULT 0,
  `use_gallery` tinyint(1) NOT NULL DEFAULT 0,
  `trashed_status` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dynamics`
--

LOCK TABLES `dynamics` WRITE;
/*!40000 ALTER TABLE `dynamics` DISABLE KEYS */;
INSERT INTO `dynamics` VALUES (1,'Khóa học','khoa-hoc',NULL,NULL,NULL,NULL,'article',0,0,0,NULL,'2022-08-09 03:39:15','2022-08-10 09:07:03'),(2,'Video','video',NULL,NULL,NULL,NULL,'video_embed',0,0,0,NULL,'2022-08-09 03:39:51','2022-08-09 03:39:51'),(3,'Tin tức','tin-tuc',NULL,NULL,NULL,NULL,'article',1,0,0,NULL,'2022-08-09 03:46:35','2022-08-09 03:46:35');
/*!40000 ALTER TABLE `dynamics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_tokens`
--

DROP TABLE IF EXISTS `email_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'confirm',
  `ref` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_id` bigint(20) unsigned DEFAULT 0,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expired_at` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_tokens`
--

LOCK TABLES `email_tokens` WRITE;
/*!40000 ALTER TABLE `email_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `email_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
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
-- Table structure for table `file_refs`
--

DROP TABLE IF EXISTS `file_refs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `file_refs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `file_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `ref_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `ref` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `file_refs`
--

LOCK TABLES `file_refs` WRITE;
/*!40000 ALTER TABLE `file_refs` DISABLE KEYS */;
/*!40000 ALTER TABLE `file_refs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `files` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `upload_by` bigint(20) unsigned NOT NULL DEFAULT 0,
  `sid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `privacy` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `ref` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `folder_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `date_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_filename` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filetype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` double(10,2) DEFAULT 0.00,
  `extension` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `files`
--

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;
INSERT INTO `files` VALUES (1,1,'ae03479337691830b3142d916416b8df','public','gallery',0,0,'2022/08/08','home-01-62f07dd4c03c0.jpg','home-01.jpg','image','image/jpeg',39.05,'jpg',NULL,NULL,'2022-08-08 03:07:00','2022-08-08 03:07:00'),(2,1,'5d9ab12cdaa0d68ee7b4312e7c47d0e4','public','gallery',0,0,'2022/08/08','logo ngang_ONG-62f1124ae6ef1.png','logo ngang_ONG.png','image','image/png',17.60,'png',NULL,NULL,'2022-08-08 13:40:27','2022-08-08 13:40:27'),(3,1,'640ba812978d98f3f8733e2811616277','public','gallery',0,0,'2022/08/08','footer logo ngang_ONG-62f11251bcb97.png','footer logo ngang_ONG.png','image','image/png',18.18,'png',NULL,NULL,'2022-08-08 13:40:33','2022-08-08 13:40:33'),(4,1,'4d2ec4c55b94ee8cfcaaccaa183e83f9','public','gallery',0,0,'2022/08/15','about-01-62fa16e9a2224.jpg','about-01.jpg','image','image/jpeg',45.29,'jpg',NULL,NULL,'2022-08-15 09:50:33','2022-08-15 09:50:33');
/*!40000 ALTER TABLE `files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `html_areas`
--

DROP TABLE IF EXISTS `html_areas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `html_areas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'system',
  `ref_id` bigint(20) unsigned DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `html_areas`
--

LOCK TABLES `html_areas` WRITE;
/*!40000 ALTER TABLE `html_areas` DISABLE KEYS */;
INSERT INTO `html_areas` VALUES (1,'Head (css Hoặc js)','head','default',0,'2022-08-07 04:26:31','2022-08-07 04:26:31'),(2,'Top (js: GA, FB,...)','top','default',0,'2022-08-07 04:26:31','2022-08-07 04:26:31'),(3,'Header','header','default',0,'2022-08-07 04:26:31','2022-08-07 04:26:31'),(4,'Đầu nội dung','article_top','default',0,'2022-08-07 04:26:31','2022-08-07 04:26:31'),(5,'Main','main','default',0,'2022-08-07 04:26:31','2022-08-07 04:26:31'),(6,'Cuối nội dung','article_bottom','default',0,'2022-08-07 04:26:31','2022-08-07 04:26:31'),(7,'Sidebar','sidebar','default',0,'2022-08-07 04:26:31','2022-08-07 04:26:31'),(8,'Đầu sidebar','sidebar_top','default',0,'2022-08-07 04:26:31','2022-08-07 04:26:31'),(9,'Cuối sidebar','sidebar_bottom','default',0,'2022-08-07 04:26:31','2022-08-07 04:26:31'),(10,'Footer','footer','default',0,'2022-08-07 04:26:31','2022-08-07 04:26:31'),(11,'Bottom (js)','bottom','default',0,'2022-08-07 04:26:31','2022-08-07 04:26:31'),(12,'Tùy chỉnh (custom)','custom','default',0,'2022-08-07 04:26:31','2022-08-07 04:26:31'),(13,'Nội dung footer','footer_widgets','theme',1,'2022-08-07 09:34:27','2022-08-07 09:34:27'),(14,'Post Sidebar','sidebar_posts','theme',1,'2022-08-07 09:34:27','2022-08-07 09:34:27'),(15,'Page Sidebar','sidebar_pages','theme',1,'2022-08-07 09:34:27','2022-08-07 09:34:27'),(16,'Post Settings','post_settings','theme',1,'2022-08-07 09:34:27','2022-08-07 09:34:27'),(17,'page Settings','page_settings','theme',1,'2022-08-07 09:34:27','2022-08-07 09:34:27'),(18,'Trang chủ','home_area','theme',1,'2022-08-07 09:34:27','2022-08-07 09:34:27'),(19,'Plugins','plugins','theme',1,'2022-08-07 09:34:27','2022-08-07 09:34:27'),(20,'Course Sidebar','sidebar_courses','theme',1,'2022-08-14 09:56:44','2022-08-14 09:56:44'),(21,'Cuối trang chi tiết','post_detail_footer','theme',1,'2022-08-14 19:27:00','2022-08-14 19:27:00');
/*!40000 ALTER TABLE `html_areas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `html_components`
--

DROP TABLE IF EXISTS `html_components`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `html_components` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `component_id` bigint(20) unsigned DEFAULT 0,
  `area_id` bigint(20) DEFAULT 0,
  `parent_id` bigint(20) DEFAULT 0,
  `priority` int(10) unsigned NOT NULL DEFAULT 0,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`data`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `html_components`
--

LOCK TABLES `html_components` WRITE;
/*!40000 ALTER TABLE `html_components` DISABLE KEYS */;
INSERT INTO `html_components` VALUES (1,2,13,0,0,'{\"title\":null,\"image\":\"3\",\"slogan\":\"Ch\\u00fang t\\u00f4i lu\\u00f4ng mang \\u0111\\u1ebfn nh\\u1eefng s\\u1ea3n ph\\u1ea9m t\\u1ed1t nh\\u1ea5t, nh\\u1eefng tr\\u1ea3i nghi\\u1ec7m t\\u1ed1t nh\\u1ea5t t\\u1edbi kh\\u00e1ch h\\u00e0ng c\\u1ee7a m\\u00ecnh\",\"menu_id\":\"1\",\"class\":null,\"col_xs\":\"12\",\"col_sm\":\"6\",\"col_md\":\"6\",\"col_lg\":\"3\",\"col_xl\":\"3\"}','2022-08-08 13:41:16','2022-08-15 03:30:40'),(2,4,13,0,1,'{\"title\":\"Li\\u00ean k\\u1ebft\",\"menu_id\":\"3\",\"class\":null,\"col_xs\":\"12\",\"col_sm\":\"6\",\"col_md\":\"6\",\"col_lg\":\"3\",\"col_xl\":\"3\"}','2022-08-08 13:53:15','2022-08-15 03:30:40'),(3,4,13,0,2,'{\"title\":\"D\\u1ecbch v\\u1ee5\",\"menu_id\":\"4\",\"class\":null,\"col_xs\":\"12\",\"col_sm\":\"6\",\"col_md\":\"6\",\"col_lg\":\"3\",\"col_xl\":\"2\"}','2022-08-08 13:53:30','2022-08-15 03:30:40'),(4,3,13,0,3,'{\"title\":\"Li\\u00ean h\\u1ec7\",\"description\":\"lorem\",\"menu_id\":\"5\",\"class\":null,\"col_xs\":\"12\",\"col_sm\":\"6\",\"col_md\":\"6\",\"col_lg\":\"3\",\"col_xl\":\"4\"}','2022-08-08 13:54:14','2022-08-15 03:30:40'),(5,1,18,0,0,'{\"title\":\"*Great Tutors*. Right Results!\",\"description\":\"Over 130,000 IELTS Test Takers Already Joined Us!\",\"url\":\"#\",\"button_text\":\"Xem Chi ti\\u1ebft\",\"instrunctor_image\":null,\"instrunctor_title\":\"Gi\\u1ea3ng vi\\u00ean\",\"instrunctor_list_image\":null,\"instrunctor_number\":\"30\"}','2022-08-08 15:33:27','2022-08-15 03:30:41'),(6,6,16,0,0,'{\"title\":null,\"dynamic_id\":\"1\",\"category_id\":\"0\",\"show_breadcrumb\":true,\"list_style\":\"course-five\",\"list_layout\":\"fullwidth\",\"list_type\":\"grid\",\"detail_style\":\"1\"}','2022-08-09 11:49:02','2022-08-15 03:30:41'),(7,11,14,0,0,'{\"title\":\"T\\u00ecm ki\\u1ebfm\",\"placeholder\":\"T\\u00ecm ki\\u1ebfm...\"}','2022-08-14 09:57:41','2022-08-15 03:30:40'),(8,7,14,0,1,'{\"title\":\"Danh m\\u1ee5c\",\"get_by_dynamic_active\":true,\"dynamic_id\":null,\"parent_id\":\"0\",\"sorttype\":\"1\",\"cate_number\":\"10\"}','2022-08-14 09:58:09','2022-08-15 03:30:40'),(9,10,14,0,2,'{\"title\":\"Tin m\\u1edbi nh\\u1ea5t\",\"dynamic_id\":\"3\",\"category_id\":\"0\",\"content_type\":null,\"sorttype\":\"1\",\"post_number\":\"5\"}','2022-08-14 09:58:59','2022-08-15 03:30:40'),(10,8,14,0,3,'{\"title\":\"Welcome to *Breaking Ielts*\",\"description\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nisl tincidunt eget nullam non\",\"url\":\"https:\\/\\/goo.gl\",\"button_text\":\"B\\u1eaft \\u0111\\u1ea7u\"}','2022-08-14 10:02:12','2022-08-15 03:30:40'),(11,12,14,0,4,'{\"title\":null,\"sorttype\":\"1\",\"tag_number\":\"10\"}','2022-08-14 10:02:24','2022-08-15 03:30:41'),(12,7,20,0,0,'{\"title\":null,\"get_by_dynamic_active\":true,\"dynamic_id\":\"1\",\"parent_id\":\"0\",\"sorttype\":\"1\",\"cate_number\":\"10\"}','2022-08-14 10:50:40','2022-08-15 03:30:41'),(13,8,20,0,1,'{\"title\":\"H\\u1ecdc Ti\\u1ebfng Anh c\\u00f9ng *Breaking Ielts*\",\"description\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\",\"url\":null,\"button_text\":\"B\\u1eaft \\u0111\\u1ea7u\"}','2022-08-14 10:52:27','2022-08-15 03:30:41'),(14,6,16,0,1,'{\"title\":\"Thi\\u1ebft l\\u1eadp Trang Video\",\"dynamic_id\":\"2\",\"category_id\":\"0\",\"show_breadcrumb\":true,\"list_style\":\"style-1\",\"list_layout\":\"sidebar\",\"list_type\":\"grid\",\"detail_style\":\"1\"}','2022-08-14 10:58:39','2022-08-15 03:30:41'),(15,14,18,0,1,'{\"title\":\"Detailed Information on IELTS\",\"description\":\"IELTS is a universally accepted English language proficiency test that evaluates a candidate\'s English language skills. This test is mainly designed for non-native English speakers who wish to migrate, study, or work in dominant English-speaking countries.\\r\\nIELTS tests an aspirant\'s English skills in all four modules, namely, Listening, Reading, Writing, and Speaking, on a nine-band scale.\",\"slogan_title\":\"Know about the IELTS Exam Preparation\"}','2022-08-15 03:29:19','2022-08-15 03:30:41'),(16,15,18,15,0,'{\"title\":\"IELTS Exam Types\",\"icon\":null,\"description\":\"<strong>IELTS Exam is conducted in two types:<\\/strong> <br> IELTS Academic and IELTS General.<br class=\\\"d-none d-md-block\\\"> Know more about the details here.\"}','2022-08-15 03:30:38','2022-08-15 03:30:41'),(17,15,18,15,1,'{\"title\":\"IELTS Test Formats\",\"icon\":null,\"description\":\"Find out the details of each module, <br class=\\\"d-none d-md-block\\\">exam time frame, types of questions, and<br class=\\\"d-none d-md-block\\\">much more. All that you need to know!\"}','2022-08-15 03:31:40','2022-08-15 03:31:45'),(18,15,18,15,2,'{\"title\":\"Exam Delivery Method\",\"icon\":null,\"description\":\"Thanks to technology, now there is <br class=\\\"d-none d-md-block\\\"><a href=\\\"\\/paper-based-exam\\\">Paper-Based IELTS  <\\/a> and <a href=\\\"\\/computer-based-exam\\\">Computer-Delivered IELTS<\\/a>.<br class=\\\"d-none d-md-block\\\"> Check out how they both are different.\"}','2022-08-15 03:33:08','2022-08-15 03:33:13'),(19,16,18,0,2,'{\"sub_title\":\"Gi\\u1edbi  thi\\u1ec7u\",\"title\":\"H\\u1ecdc IELTS t\\u1eeb con s\\u1ed1 0 *Breaking Ielts*\",\"description\":\"Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod ex tempor incididunt labore dolore magna aliquaenim minim veniam quis nostrud exercitation ullamco laboris.\",\"features\":\"Slogan 1: Lorem ipsum dolor sit amet consectetur\\r\\nSlogan 2: Lorem ipsum dolor sit amet consectetur\\r\\nSlogan 3: Lorem ipsum dolor sit amet consectetur\\r\\nSlogan 4: Lorem ipsum dolor sit amet consectetur\",\"image\":\"4\",\"video_url\":\"https:\\/\\/www.youtube.com\\/watch?v=u9cggZHjwS4\",\"video_thumbnail\":null,\"award_icon\":\"icon-21\",\"award_number\":\"1500\",\"award_label\":\"H\\u1ecdc vi\\u00ean\"}','2022-08-15 09:52:20','2022-08-15 15:30:19'),(20,17,18,0,3,'{\"title\":\"L\\u1ed9 tr\\u00ecnh *Breaking Ielts*\",\"description\":\"Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod tempor incididunt.\"}','2022-08-15 15:13:30','2022-08-15 15:30:19'),(21,18,18,20,0,'{\"title\":\"Pre - Ielts\",\"icon\":\"icon-45\",\"style\":\"primary\",\"syllabus\":\"Foundation\",\"outpoint\":\"NO\",\"duetime\":\"6\"}','2022-08-15 15:30:14','2022-08-15 15:30:19'),(22,18,18,20,1,'{\"title\":\"Background Ielts\",\"icon\":\"icon-64\",\"style\":\"primary\",\"syllabus\":\"Background Ielts 1 - 6\",\"outpoint\":\"3.0 - 4.5\",\"duetime\":\"6\"}','2022-08-15 15:36:06','2022-08-15 15:42:08'),(23,18,18,20,2,'{\"title\":\"Breaking Ielts\",\"icon\":\"icon-21\",\"style\":\"primary\",\"syllabus\":\"Breaking Ielts 1 - 6\",\"outpoint\":\"5.0 - 7.0\",\"duetime\":\"6\"}','2022-08-15 15:37:32','2022-08-15 15:42:19'),(24,19,18,0,4,'{\"sub_title\":\"C\\u00c1C KH\\u00d3A H\\u1eccC\",\"title\":\"H\\u00e3y b\\u1eaft \\u0111\\u1ea7u c\\u00f9ng *Breaking IELTS*\",\"description\":null,\"dynamic_id\":\"1\",\"category_id\":\"0\",\"group_by_category\":false,\"sorttype\":\"1\",\"post_number\":\"4\",\"link\":null}','2022-08-15 16:56:37','2022-08-16 11:43:05'),(25,20,18,0,5,'{\"sub_title\":\"Video\",\"title\":\"Th\\u1eed th\\u00e1ch c\\u00f9ng *Breaking Ielts*\",\"description\":null,\"dynamic_id\":\"2\",\"category_id\":\"0\",\"sorttype\":\"1\",\"post_number\":\"4\",\"link\":null}','2022-08-16 10:10:22','2022-08-16 11:43:05'),(26,21,18,0,6,'{\"sub_title\":\"Gi\\u1ea3ng vi\\u00ean\",\"title\":\"C\\u00e1c gi\\u1ea3ng vi\\u00ean c\\u1ee7a Breaking Ielts\"}','2022-08-16 11:41:11','2022-08-16 11:43:05'),(27,22,18,26,0,'{\"title\":\"Sam Wilson\",\"avatar\":null,\"job\":null,\"link\":\"\\/\",\"facebook\":\"https:\\/\\/www.facebook.com\\/LeNgocDoan\",\"twitter\":\"https:\\/\\/twitter.com\\/NgocDoanLe\",\"linkedin\":\"https:\\/\\/www.facebook.com\\/LeNgocDoan\"}','2022-08-16 11:43:02','2022-08-16 11:43:06'),(28,22,18,26,1,'{\"title\":\"Steve Roger\",\"avatar\":null,\"job\":null,\"link\":\"chinh-sach-bao-hanh.html\",\"facebook\":\"https:\\/\\/www.facebook.com\\/LeNgocDoan\",\"twitter\":\"https:\\/\\/twitter.com\\/NgocDoanLe\",\"linkedin\":\"https:\\/\\/www.facebook.com\\/LeNgocDoan\"}','2022-08-16 11:43:46','2022-08-16 11:43:49'),(29,22,18,26,2,'{\"title\":\"Agatha Brain\",\"avatar\":null,\"job\":null,\"link\":\"chinh-sach-bao-hanh.html\",\"facebook\":\"https:\\/\\/www.facebook.com\\/LeNgocDoan\",\"twitter\":\"https:\\/\\/twitter.com\\/NgocDoanLe\",\"linkedin\":\"https:\\/\\/www.facebook.com\\/LeNgocDoan\"}','2022-08-16 11:44:25','2022-08-16 11:44:28'),(30,22,18,26,3,'{\"title\":\"Scalet Jonhanson\",\"avatar\":null,\"job\":null,\"link\":\"\\/\",\"facebook\":\"https:\\/\\/www.facebook.com\\/LeNgocDoan\",\"twitter\":\"https:\\/\\/twitter.com\\/NgocDoanLe\",\"linkedin\":\"https:\\/\\/www.facebook.com\\/LeNgocDoan\"}','2022-08-16 11:45:04','2022-08-16 11:45:07'),(31,24,18,0,7,'{\"title\":\"C\\u00e1c con s\\u1ed1\"}','2022-08-16 12:04:22','2022-08-16 12:05:20'),(32,23,18,31,0,'{\"number\":\"50\",\"unit\":null,\"title\":\"Gi\\u1ea3ng vi\\u00ean\",\"style\":\"primary\"}','2022-08-16 12:05:18','2022-08-16 12:05:20'),(33,23,18,31,1,'{\"number\":\"1.5\",\"unit\":\"K\",\"title\":\"h\\u1ecdc vi\\u00ean\",\"style\":\"primary\"}','2022-08-16 12:05:53','2022-08-16 12:05:56'),(34,23,18,31,2,'{\"number\":\"15\",\"unit\":null,\"title\":\"Kh\\u00f3a h\\u1ecdc\",\"style\":\"tertiary\"}','2022-08-16 12:06:27','2022-08-16 12:06:31'),(35,23,18,31,3,'{\"number\":\"7.5\",\"unit\":null,\"title\":\"\\u0110\\u1ea7u ra\",\"style\":\"extra02\"}','2022-08-16 12:06:57','2022-08-16 12:07:01'),(36,27,18,37,0,'{\"title\":\"How can I contact a school directly?\",\"content\":\"Lorem ipsum dolor sit amet consectur adipiscing elit sed eius mod ex tempor incididunt labore dolore magna aliquaenim ad minim eniam.\"}','2022-08-16 12:21:02','2022-08-16 12:22:27'),(37,26,18,0,8,'{\"sub_title\":null,\"title\":\"Over 10 Years in Distant Skill Development\"}','2022-08-16 12:22:21','2022-08-16 12:22:25'),(38,27,18,37,1,'{\"title\":\"How do I find a school where I want to study?\",\"content\":\"Lorem ipsum dolor sit amet consectur adipiscing elit sed eius mod ex tempor incididunt labore dolore magna aliquaenim ad minim eniam.\"}','2022-08-16 12:26:34','2022-08-16 12:26:39'),(39,27,18,37,2,'{\"title\":\"Where should I study abroad?\",\"content\":\"Lorem ipsum dolor sit amet consectur adipiscing elit sed eius mod ex tempor incididunt labore dolore magna aliquaenim ad minim eniam.\"}','2022-08-16 12:27:43','2022-08-16 12:27:48'),(40,29,18,0,40,'{\"sub_title\":null,\"title\":\"\\u0110\\u1ed1i t\\u00e1c c\\u1ee7a BreakingIELTS\",\"description\":\"Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod tempor incididunt.\"}','2022-08-16 13:53:08','2022-08-16 13:53:08'),(41,31,18,0,41,'{\"sub_title\":null,\"title\":\"Tin t\\u1ee9c BreakingIELTS\",\"description\":null,\"dynamic_id\":\"3\",\"category_id\":\"0\",\"sorttype\":\"1\",\"post_number\":\"3\",\"link\":null}','2022-08-16 13:59:03','2022-08-16 13:59:03');
/*!40000 ALTER TABLE `html_components` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `html_embeds`
--

DROP TABLE IF EXISTS `html_embeds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `html_embeds` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `area_id` bigint(20) unsigned NOT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int(10) unsigned NOT NULL DEFAULT 0,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `html_embeds`
--

LOCK TABLES `html_embeds` WRITE;
/*!40000 ALTER TABLE `html_embeds` DISABLE KEYS */;
/*!40000 ALTER TABLE `html_embeds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` bigint(20) unsigned NOT NULL,
  `parent_id` bigint(20) unsigned DEFAULT 0,
  `priority` int(10) unsigned NOT NULL DEFAULT 0,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'default',
  `ref` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_id` bigint(20) unsigned DEFAULT 0,
  `sub_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'default',
  `props` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`props`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_items`
--

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` VALUES (1,1,0,0,'route',NULL,0,'default','{\"icon\":null,\"class\":null,\"link_class\":null,\"active_key\":null,\"text\":\"Trang ch\\u1ee7\",\"route\":\"home\",\"target\":\"none\",\"show_submenu\":\"show\"}','2022-08-08 09:13:04','2022-08-08 09:13:04'),(2,1,0,0,'route',NULL,0,'default','{\"icon\":null,\"class\":null,\"link_class\":null,\"active_key\":null,\"text\":\"Li\\u00ean h\\u1ec7\",\"route\":\"client.contacts.form\",\"target\":\"none\",\"show_submenu\":\"show\"}','2022-08-08 09:13:26','2022-08-08 09:13:26'),(3,2,0,1,'url',NULL,0,'default','{\"class\":null,\"link_class\":null,\"active_key\":null,\"text\":\"Phone: 0945786960\",\"url\":\"tel:0945786960\",\"target\":\"none\",\"show_submenu\":\"show\",\"icon\":\"icon-29\"}','2022-08-08 09:15:50','2022-08-08 09:20:16'),(4,2,0,2,'url',NULL,0,'default','{\"class\":null,\"link_class\":null,\"active_key\":null,\"text\":\"Email: Doanln16@gmail.com\",\"url\":\"mailto:doanln16@gmail.com\",\"target\":\"none\",\"show_submenu\":\"show\",\"icon\":\"icon-envelope\"}','2022-08-08 09:17:00','2022-08-08 09:20:16'),(5,2,8,1,'url',NULL,0,'default','{\"class\":null,\"link_class\":null,\"active_key\":null,\"text\":null,\"url\":\"https:\\/\\/fb.me\\/LeNgocDoan\",\"target\":\"none\",\"show_submenu\":\"show\",\"icon\":\"icon-facebook\"}','2022-08-08 09:19:14','2022-08-08 09:20:16'),(6,2,8,2,'url',NULL,0,'default','{\"class\":null,\"link_class\":null,\"active_key\":null,\"text\":null,\"url\":\"mailto:doanln16@gmail.com\",\"target\":\"none\",\"show_submenu\":\"show\",\"icon\":\"icon-instagram\"}','2022-08-08 09:19:32','2022-08-08 09:20:21'),(7,2,8,3,'url',NULL,0,'default','{\"class\":null,\"link_class\":null,\"active_key\":null,\"text\":null,\"url\":\"mailto:doanln16@gmail.com\",\"target\":\"none\",\"show_submenu\":\"show\",\"icon\":\"icon-youtube\"}','2022-08-08 09:19:47','2022-08-08 09:20:23'),(8,2,0,3,'url',NULL,0,'default','{\"icon\":null,\"class\":null,\"link_class\":null,\"active_key\":null,\"text\":\"Social\",\"url\":\"#\",\"target\":\"none\",\"show_submenu\":\"show\"}','2022-08-08 09:20:11','2022-08-08 09:20:23'),(9,3,0,0,'url',NULL,0,'default','{\"icon\":null,\"class\":null,\"link_class\":null,\"active_key\":null,\"text\":\"Trang ch\\u1ee7\",\"url\":\"#\",\"target\":\"none\",\"show_submenu\":\"show\"}','2022-08-08 13:41:45','2022-08-08 13:41:45'),(10,3,0,0,'route',NULL,0,'default','{\"icon\":null,\"class\":null,\"link_class\":null,\"active_key\":null,\"text\":\"Li\\u00ean h\\u1ec7\",\"route\":\"client.contacts.form\",\"target\":\"none\",\"show_submenu\":\"show\"}','2022-08-08 13:42:08','2022-08-08 13:42:08'),(11,3,0,0,'route',NULL,0,'default','{\"icon\":null,\"class\":null,\"link_class\":null,\"active_key\":null,\"text\":\"S\\u1ea3n ph\\u1ea9m\",\"route\":\"client.account\",\"target\":\"none\",\"show_submenu\":\"show\"}','2022-08-08 13:43:26','2022-08-08 13:43:26'),(12,4,0,0,'route',NULL,0,'default','{\"icon\":null,\"class\":null,\"link_class\":null,\"active_key\":null,\"text\":\"Trang ch\\u1ee7\",\"route\":\"home\",\"target\":\"none\",\"show_submenu\":\"show\"}','2022-08-08 13:49:21','2022-08-08 13:49:21'),(13,4,0,0,'url',NULL,0,'default','{\"icon\":null,\"class\":null,\"link_class\":null,\"active_key\":null,\"text\":\"Link 2\",\"url\":\"#\",\"target\":\"none\",\"show_submenu\":\"show\"}','2022-08-08 13:49:39','2022-08-08 13:49:39'),(14,4,0,0,'url',NULL,0,'default','{\"icon\":null,\"class\":null,\"link_class\":null,\"active_key\":null,\"text\":\"Link 3\",\"url\":\"#\",\"target\":\"none\",\"show_submenu\":\"show\"}','2022-08-08 13:49:51','2022-08-08 13:49:51'),(15,5,0,0,'url',NULL,0,'default','{\"class\":null,\"link_class\":null,\"active_key\":null,\"text\":null,\"url\":\"https:\\/\\/www.facebook.com\",\"target\":\"none\",\"show_submenu\":\"show\",\"icon\":\"icon-facebook\"}','2022-08-08 13:51:15','2022-08-08 13:51:15'),(16,5,0,0,'url',NULL,0,'default','{\"class\":null,\"link_class\":null,\"active_key\":null,\"text\":null,\"url\":\"http:\\/\\/news.vcc.vn\\/\",\"target\":\"none\",\"show_submenu\":\"show\",\"icon\":\"icon-instagram\"}','2022-08-08 13:51:49','2022-08-08 13:51:49'),(17,5,0,0,'url',NULL,0,'default','{\"class\":null,\"link_class\":null,\"active_key\":null,\"text\":null,\"url\":\"https:\\/\\/youtube.com\\/c\\/DoanLe\",\"target\":\"none\",\"show_submenu\":\"show\",\"icon\":\"icon-youtube\"}','2022-08-08 13:52:39','2022-08-08 13:52:39'),(18,1,0,0,'dynamic','dynamic',1,'default','{\"icon\":null,\"class\":null,\"link_class\":null,\"active_key\":null,\"dynamic_id\":\"1\",\"target\":\"none\",\"show_submenu\":\"show\",\"text\":\"Kh\\u00f3a h\\u1ecdc\"}','2022-08-09 04:14:41','2022-08-09 04:14:41'),(19,1,0,0,'dynamic','dynamic',2,'default','{\"icon\":null,\"class\":null,\"link_class\":null,\"active_key\":null,\"dynamic_id\":\"2\",\"target\":\"none\",\"show_submenu\":\"show\",\"text\":\"Video\"}','2022-08-09 04:14:45','2022-08-09 04:14:45'),(20,1,0,0,'dynamic','dynamic',3,'default','{\"icon\":null,\"class\":null,\"link_class\":null,\"active_key\":null,\"dynamic_id\":\"3\",\"target\":\"none\",\"show_submenu\":\"show\",\"text\":\"Tin t\\u1ee9c\"}','2022-08-09 04:14:50','2022-08-09 04:14:50'),(21,1,0,0,'page','page',8,'default','{\"icon\":null,\"class\":null,\"link_class\":null,\"active_key\":null,\"page_id\":\"8\",\"target\":\"none\",\"show_submenu\":\"show\",\"text\":\"abs\"}','2022-08-14 19:54:15','2022-08-14 19:54:15');
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'Menu',
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'default',
  `ref_id` bigint(20) DEFAULT 0,
  `priority` int(10) unsigned NOT NULL DEFAULT 0,
  `is_main` tinyint(1) DEFAULT 0,
  `positions` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `depth` int(10) unsigned DEFAULT 4,
  `trashed_status` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'Menu Chính','menu-chinh','default',0,1,0,' primary,',3,0,NULL,'2022-08-07 11:17:54','2022-08-07 11:17:54'),(2,'Top Right','top-right','default',0,2,0,NULL,2,0,NULL,'2022-08-08 09:14:59','2022-08-08 09:14:59'),(3,'Footer Link 1','footer-link-1','default',0,3,0,NULL,1,0,NULL,'2022-08-08 13:41:35','2022-08-08 13:41:35'),(4,'Footer Link 2','footer-link-2','default',0,4,0,NULL,1,0,NULL,'2022-08-08 13:47:43','2022-08-08 13:47:43'),(5,'Social Menu','social-menu','default',0,5,0,NULL,1,0,NULL,'2022-08-08 13:50:23','2022-08-08 13:50:23');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `metadatas`
--

DROP TABLE IF EXISTS `metadatas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `metadatas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ref` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'data',
  `ref_id` bigint(20) unsigned DEFAULT 0,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'name',
  `value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `metadatas`
--

LOCK TABLES `metadatas` WRITE;
/*!40000 ALTER TABLE `metadatas` DISABLE KEYS */;
INSERT INTO `metadatas` VALUES (1,'theme',1,'components','{\"banners.cta\":{\"name\":\"Posts Detail: CTA Banner Text\",\"inputs\":{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (T\\u00f9y ch\\u1ecdn)<br><small>(D\\u00f9ng c\\u1eb7p d\\u1ea5u ** \\u0111\\u1ec3 in \\u0111\\u1eadm<\\/small>)\"},\"description\":{\"type\":\"textarea\",\"label\":\"M\\u00f4 t\\u1ea3\"},\"url\":{\"type\":\"text\",\"label\":\"D\\u01b0\\u1eddng d\\u1eabn\",\"placeholder\":\"https:\\/\\/\"},\"button_text\":{\"type\":\"text\",\"label\":\"Text n\\u00fat b\\u1ea5m\",\"placeholder\":\"V\\u00ed d\\u1ee5: B\\u1eaft \\u0111\\u1ea7u\"}},\"path\":\"banners.cta\"},\"footer.widgets.about\":{\"name\":\"Footer: Widgets: About\",\"inputs\":{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (T\\u00f9y ch\\u1ecdn)\"},\"image\":{\"type\":\"media\",\"label\":\"\\u1ea2nh logo\",\"@filetype\":\"png,jpg,jpeg,gif,bmp\",\"placeholder\":\"Ch\\u1ecdn \\u1ea3nh\"},\"slogan\":{\"type\":\"textarea\",\"label\":\"Slogan\"},\"menu_id\":{\"type\":\"crazyselect\",\"label\":\"Menu Li\\u00ean H\\u1ec7\",\"call\":\"get_menu_options\"},\"class\":{\"type\":\"text\",\"label\":\"ClassName (T\\u00f9y ch\\u1ecdn)\",\"placeholder\":\"ClassName (T\\u00f9y ch\\u1ecdn)\"},\"col_xs\":{\"type\":\"radio\",\"label\":\"Smartphone Column size (&lt; 576px)\",\"data\":{\"1\":\"xs-1\",\"2\":\"xs-2\",\"3\":\"xs-3\",\"4\":\"xs-4\",\"5\":\"xs-5\",\"6\":\"lg-6\",\"12\":\"xs-12\"},\"default\":12},\"col_sm\":{\"type\":\"radio\",\"label\":\"Smal Screen Column size (576px - 767px)\",\"data\":{\"1\":\"sm-1\",\"2\":\"sm-2\",\"3\":\"sm-3\",\"4\":\"sm-4\",\"5\":\"sm-5\",\"6\":\"sm-6\",\"12\":\"sm-12\"},\"default\":6},\"col_md\":{\"type\":\"radio\",\"label\":\"Medium Screen Column size (768px - 991px)\",\"data\":{\"1\":\"md-1\",\"2\":\"md-2\",\"3\":\"md-3\",\"4\":\"md-4\",\"5\":\"md-5\",\"6\":\"md-6\",\"12\":\"md-12\"},\"default\":6},\"col_lg\":{\"type\":\"radio\",\"label\":\"Large Screen Column size (992px - 1199px)\",\"data\":{\"1\":\"lg-1\",\"2\":\"lg-2\",\"3\":\"lg-3\",\"4\":\"lg-4\",\"5\":\"lg-5\",\"6\":\"lg-6\",\"12\":\"lg-12\"},\"default\":3},\"col_xl\":{\"type\":\"radio\",\"label\":\"Extra Large Screen Column size (&gt; 1200px)\",\"data\":{\"1\":\"xl-1\",\"2\":\"xl-2\",\"3\":\"xl-3\",\"4\":\"xl-4\",\"5\":\"xl-5\",\"6\":\"xl-6\",\"12\":\"xl-12\"},\"default\":3}},\"path\":\"footer.widgets.about\"},\"footer.widgets.contacts\":{\"name\":\"Footer: Widgets: Contacts\",\"inputs\":{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (T\\u00f9y ch\\u1ecdn)\"},\"description\":{\"type\":\"textarea\",\"label\":\"M\\u00f4 t\\u1ea3\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"menu_id\":{\"type\":\"crazyselect\",\"label\":\"Menu\",\"call\":\"get_menu_options\"},\"class\":{\"type\":\"text\",\"label\":\"ClassName (T\\u00f9y ch\\u1ecdn)\",\"placeholder\":\"ClassName (T\\u00f9y ch\\u1ecdn)\"},\"col_xs\":{\"type\":\"radio\",\"label\":\"Smartphone Column size (&lt; 576px)\",\"data\":{\"1\":\"xs-1\",\"2\":\"xs-2\",\"3\":\"xs-3\",\"4\":\"xs-4\",\"5\":\"xs-5\",\"6\":\"lg-6\",\"12\":\"xs-12\"},\"default\":12},\"col_sm\":{\"type\":\"radio\",\"label\":\"Smal Screen Column size (576px - 767px)\",\"data\":{\"1\":\"sm-1\",\"2\":\"sm-2\",\"3\":\"sm-3\",\"4\":\"sm-4\",\"5\":\"sm-5\",\"6\":\"sm-6\",\"12\":\"sm-12\"},\"default\":6},\"col_md\":{\"type\":\"radio\",\"label\":\"Medium Screen Column size (768px - 991px)\",\"data\":{\"1\":\"md-1\",\"2\":\"md-2\",\"3\":\"md-3\",\"4\":\"md-4\",\"5\":\"md-5\",\"6\":\"md-6\",\"12\":\"md-12\"},\"default\":6},\"col_lg\":{\"type\":\"radio\",\"label\":\"Large Screen Column size (992px - 1199px)\",\"data\":{\"1\":\"lg-1\",\"2\":\"lg-2\",\"3\":\"lg-3\",\"4\":\"lg-4\",\"5\":\"lg-5\",\"6\":\"lg-6\",\"12\":\"lg-12\"},\"default\":3},\"col_xl\":{\"type\":\"radio\",\"label\":\"Extra Large Screen Column size (&gt; 1200px)\",\"data\":{\"1\":\"xl-1\",\"2\":\"xl-2\",\"3\":\"xl-3\",\"4\":\"xl-4\",\"5\":\"xl-5\",\"6\":\"xl-6\",\"12\":\"xl-12\"},\"default\":3}},\"path\":\"footer.widgets.contacts\"},\"footer.widgets.menu\":{\"name\":\"Footer: Widgets: Links\",\"inputs\":{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (T\\u00f9y ch\\u1ecdn)\"},\"menu_id\":{\"type\":\"crazyselect\",\"label\":\"Menu\",\"call\":\"get_menu_options\"},\"class\":{\"type\":\"text\",\"label\":\"ClassName (T\\u00f9y ch\\u1ecdn)\",\"placeholder\":\"ClassName (T\\u00f9y ch\\u1ecdn)\"},\"col_xs\":{\"type\":\"radio\",\"label\":\"Smartphone Column size (&lt; 576px)\",\"data\":{\"1\":\"xs-1\",\"2\":\"xs-2\",\"3\":\"xs-3\",\"4\":\"xs-4\",\"5\":\"xs-5\",\"6\":\"lg-6\",\"12\":\"xs-12\"},\"default\":12},\"col_sm\":{\"type\":\"radio\",\"label\":\"Smal Screen Column size (576px - 767px)\",\"data\":{\"1\":\"sm-1\",\"2\":\"sm-2\",\"3\":\"sm-3\",\"4\":\"sm-4\",\"5\":\"sm-5\",\"6\":\"sm-6\",\"12\":\"sm-12\"},\"default\":6},\"col_md\":{\"type\":\"radio\",\"label\":\"Medium Screen Column size (768px - 991px)\",\"data\":{\"1\":\"md-1\",\"2\":\"md-2\",\"3\":\"md-3\",\"4\":\"md-4\",\"5\":\"md-5\",\"6\":\"md-6\",\"12\":\"md-12\"},\"default\":6},\"col_lg\":{\"type\":\"radio\",\"label\":\"Large Screen Column size (992px - 1199px)\",\"data\":{\"1\":\"lg-1\",\"2\":\"lg-2\",\"3\":\"lg-3\",\"4\":\"lg-4\",\"5\":\"lg-5\",\"6\":\"lg-6\",\"12\":\"lg-12\"},\"default\":3},\"col_xl\":{\"type\":\"radio\",\"label\":\"Extra Large Screen Column size (&gt; 1200px)\",\"data\":{\"1\":\"xl-1\",\"2\":\"xl-2\",\"3\":\"xl-3\",\"4\":\"xl-4\",\"5\":\"xl-5\",\"6\":\"xl-6\",\"12\":\"xl-12\"},\"default\":3}},\"path\":\"footer.widgets.menu\"},\"home.about-course.area\":{\"name\":\"Home: About Course - Area\",\"inputs\":{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (t\\u00f9y ch\\u1ecdn)<br \\/><small>D\\u00f9ng C\\u1eb7p ** \\u0111\\u1ec3 in \\u0111\\u1eadm<\\/small>\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"description\":{\"type\":\"textarea\",\"label\":\"M\\u00f4 t\\u1ea3 <br><small>D\\u00f9ng C\\u1eb7p ** \\u0111\\u1ec3 in \\u0111\\u1eadm<\\/small>\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\\nXu\\u1ed1ng d\\u00f2ng b\\u00ecnh th\\u01b0\\u1eddng\",\"class\":\"auto-height display-input-text\"}},\"path\":\"home.about-course.area\"},\"home.about-course.item\":{\"name\":\"Home: About Course - Item\",\"inputs\":{\"title\":{\"type\":\"text\",\"label\":\"T\\u00ean Kh\\u00f3a h\\u1ecdc\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"icon\":{\"type\":\"iconpicker\",\"label\":\"Icon\",\"default\":\"icon-45\"},\"style\":{\"type\":\"crazyselect\",\"label\":\"Style\",\"data\":{\"primary\":\"Primary\",\"secondary\":\"Secondary\",\"tertiary\":\"Tertiary\",\"extra02\":\"Extra02\",\"extra03\":\"Extra03\",\"extra04\":\"Extra04\",\"extra05\":\"Extra05\",\"extra08\":\"Extra08\"},\"default\":\"primary\"},\"syllabus\":{\"type\":\"textarea\",\"label\":\"Gi\\u00e1o tr\\u00ecnh \",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\\nXu\\u1ed1ng d\\u00f2ng b\\u00ecnh th\\u01b0\\u1eddng\",\"class\":\"auto-height display-input-text\"},\"outpoint\":{\"type\":\"text\",\"label\":\"\\u0110\\u1ea7u ra\",\"placeholder\":\"v\\u00ed d\\u1ee5 7.0\",\"default\":\"7.5\"},\"duetime\":{\"type\":\"number\",\"label\":\"Th\\u1eddi gian kh\\u00f3a h\\u1ecdc (th\\u00e1ng)\"}},\"path\":\"home.about-course.item\"},\"home.about-slogan.about\":{\"name\":\"Home: A&S: About\",\"inputs\":{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (t\\u00f9y ch\\u1ecdn)\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"description\":{\"type\":\"textarea\",\"label\":\"M\\u00f4 t\\u1ea3 <br><small>D\\u00f9ng C\\u1eb7p ** \\u0111\\u1ec3 in \\u0111\\u1eadm<\\/small>\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\\nXu\\u1ed1ng d\\u00f2ng b\\u00ecnh th\\u01b0\\u1eddng\",\"class\":\"auto-height display-input-text\"},\"slogan_title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (t\\u00f9y ch\\u1ecdn)\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"}},\"path\":\"home.about-slogan.about\"},\"home.about-slogan.slogan\":{\"name\":\"Home: A&S: Slogan\",\"inputs\":{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (t\\u00f9y ch\\u1ecdn)\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"icon\":{\"type\":\"media\",\"label\":\"icon\",\"placeholder\":\"Ch\\u1ecdn \\u1ea3nh\"},\"description\":{\"type\":\"textarea\",\"label\":\"M\\u00f4 t\\u1ea3\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\\nXu\\u1ed1ng d\\u00f2ng b\\u00ecnh th\\u01b0\\u1eddng\",\"class\":\"auto-height display-input-text\"}},\"path\":\"home.about-slogan.slogan\"},\"home.about-video\":{\"name\":\"Home: About & Video\",\"inputs\":{\"sub_title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 nh\\u1ecf (t\\u00f9y ch\\u1ecdn)\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (t\\u00f9y ch\\u1ecdn)<br \\/><small>D\\u00f9ng C\\u1eb7p ** \\u0111\\u1ec3 in \\u0111\\u1eadm<\\/small>\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"description\":{\"type\":\"textarea\",\"label\":\"M\\u00f4 t\\u1ea3 <br><small>D\\u00f9ng C\\u1eb7p ** \\u0111\\u1ec3 in \\u0111\\u1eadm<\\/small>\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\\nXu\\u1ed1ng d\\u00f2ng b\\u00ecnh th\\u01b0\\u1eddng\",\"class\":\"auto-height display-input-text\"},\"features\":{\"type\":\"textarea\",\"label\":\"Danh s\\u00e1ch Features<br><small>()<\\/small>\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\\nM\\u1ed7i d\\u00f2ng m\\u1ed9t c\\u00e2u\",\"class\":\"auto-height display-input-text\"},\"image\":{\"type\":\"media\",\"label\":\"\\u1ea2nh b\\u00ean tr\\u00e1i<br><small>K\\u00edch th\\u01b0\\u1edbc 370 x 420<\\/small>\"},\"video_url\":{\"type\":\"text\",\"label\":\"\\u0110\\u01b0\\u1eddng d\\u1eabn video<br>(Youtube, Vimeo)\",\"placeholder\":\"https:\\/\\/www.youtube.com\\/watch?v=Gds4_76H\"},\"video_thumbnail\":{\"type\":\"media\",\"label\":\"\\u1ea2nh b\\u00ean tr\\u00e1i<br><small>K\\u00edch th\\u01b0\\u1edbc 370 x 420<\\/small>\"},\"award_icon\":{\"type\":\"iconpicker\",\"label\":\"Icon m\\u1ee5c Award\",\"default\":\"icon-21\"},\"award_number\":{\"type\":\"number\",\"label\":\"S\\u1ed1 award<br><small>(S\\u1ed1 gi\\u1ea3ng vi\\u00ean , S\\u1ed1 kh\\u00f3a h\\u1ecdc, S\\u1ed1 h\\u1ecdc vi\\u00ean, ho\\u1eb7c con s\\u1ed1 n\\u00e0o \\u0111\\u00f3)<\\/small>\",\"min\":0,\"step\":1,\"default\":10,\"placeholder\":\"Con s\\u1ed1 th\\u00fa v\\u1ecb\"},\"award_label\":{\"type\":\"text\",\"label\":\"Nh\\u00e3n cho m\\u1ee5c award\",\"placeholder\":\"v\\u00ed d\\u1ee5: Kh\\u00f3a h\\u1ecdc\"}},\"path\":\"home.about-video\"},\"home.contact-area\":{\"name\":\"Home: Th\\u00f4ng tin li\\u00ean h\\u1ec7\",\"inputs\":{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (t\\u00f9y ch\\u1ecdn)\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"email\":{\"type\":\"text\",\"label\":\"Email\",\"placeholder\":\"Nh\\u1eadp email\"},\"hotline\":{\"type\":\"text\",\"label\":\"Hotline\",\"placeholder\":\"Nh\\u1eadp S\\u0110T\"}},\"path\":\"home.contact-area\"},\"home.counterup\":{\"name\":\"Home: C\\u00e1c con s\\u1ed1 th\\u1ed1ng k\\u00ea (Item)\",\"inputs\":{\"number\":{\"type\":\"number\",\"label\":\"S\\u1ed1\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\",\"min\":0,\"step\":0.1},\"unit\":{\"type\":\"text\",\"label\":\"\\u0110\\u01a1n v\\u1ecb t\\u00ednh\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"title\":{\"type\":\"text\",\"label\":\"Nh\\u00e3n\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"style\":{\"type\":\"crazyselect\",\"label\":\"Style\",\"data\":{\"primary\":\"Primary\",\"secondary\":\"Secondary\",\"tertiary\":\"Tertiary\",\"extra01\":\"Extra01\",\"extra02\":\"Extra02\",\"extra03\":\"Extra03\",\"extra04\":\"Extra04\",\"extra05\":\"Extra05\",\"extra06\":\"Extra06\",\"extra07\":\"Extra07\",\"extra08\":\"Extra08\"},\"default\":\"primary\"}},\"path\":\"home.counterup\"},\"home.counterup.area\":{\"name\":\"Home: C\\u00e1c con s\\u1ed1 th\\u1ed1ng k\\u00ea (Area)\",\"inputs\":{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (t\\u00f9y ch\\u1ecdn)\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"}},\"path\":\"home.counterup.area\"},\"home.counterup.item\":{\"name\":\"Home: Th\\u00f4ng tin gi\\u1ea3ng vi\\u00ean\",\"inputs\":{\"title\":{\"type\":\"text\",\"label\":\"H\\u1ecd v\\u00e0 t\\u00ean\",\"placeholder\":\"V\\u00ed d\\u1ee5 Nguy\\u1ec5n V\\u0103n A\"},\"avatar\":{\"type\":\"media\",\"label\":\"H\\u00ecnh \\u0110\\u1ea1i di\\u1ec7n\",\"placeholder\":\"\"},\"job\":{\"type\":\"text\",\"label\":\"C\\u00f4ng vi\\u1ec7c\",\"placeholder\":\"V\\u00ed d\\u1ee5 Gi\\u1ea3ng vi\\u00ean\"},\"link\":{\"type\":\"text\",\"label\":\"Li\\u00ean k\\u1ebft (t\\u00f9y ch\\u1ecdn)\",\"placeholder\":\"Nh\\u1eadp li\\u00ean k\\u1ebft. (Kh\\u00f4ng b\\u1eaft bu\\u1ed9c)\"},\"facebook\":{\"type\":\"text\",\"label\":\"Li\\u00ean k\\u1ebft facebook\",\"placeholder\":\"https:\\/\\/www.facebook.com\\/UserName\"},\"twitter\":{\"type\":\"text\",\"label\":\"Li\\u00ean k\\u1ebft twitter\",\"placeholder\":\"https:\\/\\/twitter.com\\/UserName\"},\"linkedin\":{\"type\":\"text\",\"label\":\"Li\\u00ean k\\u1ebft linkedin\",\"placeholder\":\"https:\\/\\/linkedin.com\\/\"}},\"path\":\"home.counterup.item\"},\"home.courses\":{\"name\":\"Home: Danh s\\u00e1ch Kh\\u00f3a h\\u1ecdc\",\"inputs\":{\"sub_title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 nh\\u1ecf\",\"placeholder\":\"\"},\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (t\\u00f9y ch\\u1ecdn)<br \\/><small>D\\u00f9ng C\\u1eb7p ** \\u0111\\u1ec3 in \\u0111\\u1eadm<\\/small>\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"description\":{\"type\":\"textarea\",\"label\":\"M\\u00f4 t\\u1ea3 ng\\u1eafn (T\\u00f9y ch\\u1ecdn)\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"dynamic_id\":{\"type\":\"crazyselect\",\"label\":\"M\\u1ee5c (t\\u00f9y ch\\u1ecdn)\",\"template\":\"crazyselect\",\"call\":\"get_dynamic_options\",\"params\":[[],\"Ch\\u1ecdn m\\u1ed9t\"],\"@change\":\"Crazy.posts.changeDynamicID\",\"required\":\"true\"},\"category_id\":{\"type\":\"crazyselect\",\"label\":\"Danh m\\u1ee5c (t\\u00f9y ch\\u1ecdn)\",\"template\":\"crazyselect\",\"call\":\"get_post_category_options\",\"params\":[{\"dynamic_id\":\"#dynamic_id\"},true],\"@label-type\":\"value\"},\"group_by_category\":{\"type\":\"switch\",\"label\":\"Nh\\u00f3m theo danh m\\u1ee5c\",\"value_type\":\"boolean\"},\"sorttype\":{\"type\":\"select\",\"label\":\"ki\\u1ec3u s\\u1eafp x\\u1ebfp\",\"call\":\"get_post_sortby_options\"},\"post_number\":{\"type\":\"number\",\"label\":\"S\\u1ed1 tin b\\u00e0i\",\"min\":1,\"step\":1,\"default\":4},\"link\":{\"type\":\"text\",\"label\":\"Li\\u00ean k\\u1ebft (t\\u00f9y ch\\u1ecdn)\",\"placeholder\":\"Nh\\u1eadp li\\u00ean k\\u1ebft. (Kh\\u00f4ng b\\u1eaft bu\\u1ed9c)\"}},\"path\":\"home.courses\"},\"home.faqs.area\":{\"name\":\"Home: FAQ\'s Area\",\"inputs\":{\"sub_title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 nh\\u1ecf\",\"placeholder\":\"\"},\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (t\\u00f9y ch\\u1ecdn)<br \\/><small>D\\u00f9ng C\\u1eb7p ** \\u0111\\u1ec3 in \\u0111\\u1eadm<\\/small>\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"}},\"path\":\"home.faqs.area\"},\"home.faqs.item\":{\"name\":\"Home: FAQ\'s Item\",\"inputs\":{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 \",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"content\":{\"type\":\"textarea\",\"label\":\"M\\u00f4 t\\u1ea3 <br><small>D\\u00f9ng C\\u1eb7p ** \\u0111\\u1ec3 in \\u0111\\u1eadm<\\/small>\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\\nXu\\u1ed1ng d\\u00f2ng b\\u00ecnh th\\u01b0\\u1eddng\",\"class\":\"auto-height display-input-text\"}},\"path\":\"home.faqs.item\"},\"home.hero-banners.style-1\":{\"name\":\"Home: Banner Style 1: Area\",\"inputs\":{\"title\":{\"type\":\"textarea\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (t\\u00f9y ch\\u1ecdn)<br><small>D\\u00f9ng C\\u1eb7p ** \\u0111\\u1ec3 in \\u0111\\u1eadm<\\/small>\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\\nXu\\u1ed1ng d\\u00f2ng b\\u00ecnh th\\u01b0\\u1eddng\",\"class\":\"auto-height display-input-text\"},\"description\":{\"type\":\"textarea\",\"label\":\"M\\u00f4 t\\u1ea3 \",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"url\":{\"type\":\"text\",\"label\":\"\\u0110\\u01b0\\u1eddng d\\u1eabn\",\"placeholder\":\"v\\u00ed d\\u1ee5: https:\\/\\/google.com.vn\"},\"button_text\":{\"type\":\"text\",\"label\":\"N\\u00fat b\\u1ea5n\",\"value\":\"Xem Chi ti\\u1ebft\"},\"instrunctor_image\":{\"type\":\"media\",\"label\":\"\\u1ea2nh h\\u1ecdc vi\\u00ean ho\\u1eb7c gi\\u1ea3ng vi\\u00ean\"},\"instrunctor_title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 m\\u1ee5c gi\\u1eddi thi\\u1ec7u gi\\u1ea3ng vi\\u00ean\",\"placeholder\":\"V\\u00ed d\\u1ee5: Gi\\u1ea3ng vi\\u00ean\",\"value\":\"Gi\\u1ea3ng vi\\u00ean\"},\"instrunctor_list_image\":{\"type\":\"media\",\"label\":\"\\u1ea2nh DS gi\\u1ea3ng vi\\u00ean\"},\"instrunctor_number\":{\"type\":\"number\",\"label\":\"S\\u1ed1 gi\\u1ea3ng vi\\u00ean\",\"placeholder\":\"V\\u00ed d\\u1ee5 250\",\"min\":0,\"step\":1}},\"path\":\"home.hero-banners.style-1\"},\"home.partners.area\":{\"name\":\"Home: \\u0110\\u1ed1i t\\u00e1c & Kh\\u00e1ch h\\u00e0ng\",\"inputs\":{\"sub_title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 nh\\u1ecf\",\"placeholder\":\"\"},\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (t\\u00f9y ch\\u1ecdn)<br \\/><small>D\\u00f9ng C\\u1eb7p ** \\u0111\\u1ec3 in \\u0111\\u1eadm<\\/small>\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"description\":{\"type\":\"textarea\",\"label\":\"M\\u00f4 t\\u1ea3 <br><small>D\\u00f9ng C\\u1eb7p ** \\u0111\\u1ec3 in \\u0111\\u1eadm<\\/small>\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\\nXu\\u1ed1ng d\\u00f2ng b\\u00ecnh th\\u01b0\\u1eddng\",\"class\":\"auto-height display-input-text\"}},\"path\":\"home.partners.area\"},\"home.partners.item\":{\"name\":\"Home: \\u0110\\u1ed1i t\\u00e1c & Kh\\u00e1ch h\\u00e0ng - Item\",\"inputs\":{\"title\":{\"type\":\"text\",\"label\":\"T\\u00ean Kh\\u00f3a h\\u1ecdc\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"logo\":{\"type\":\"media\",\"label\":\"Logo\"},\"link\":{\"type\":\"text\",\"label\":\"Link\",\"placeholder\":\"http:\\/\\/\"}},\"path\":\"home.partners.item\"},\"home.posts\":{\"name\":\"Home: M\\u1ee5c tin t\\u1ee9c\",\"inputs\":{\"sub_title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 nh\\u1ecf\",\"placeholder\":\"\"},\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (t\\u00f9y ch\\u1ecdn)<br \\/><small>D\\u00f9ng C\\u1eb7p ** \\u0111\\u1ec3 in \\u0111\\u1eadm<\\/small>\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"description\":{\"type\":\"textarea\",\"label\":\"M\\u00f4 t\\u1ea3 ng\\u1eafn (T\\u00f9y ch\\u1ecdn)\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"dynamic_id\":{\"type\":\"crazyselect\",\"label\":\"M\\u1ee5c (t\\u00f9y ch\\u1ecdn)\",\"template\":\"crazyselect\",\"call\":\"get_dynamic_options\",\"params\":[[],\"Ch\\u1ecdn m\\u1ed9t\"],\"@change\":\"Crazy.posts.changeDynamicID\",\"required\":\"true\"},\"category_id\":{\"type\":\"crazyselect\",\"label\":\"Danh m\\u1ee5c (t\\u00f9y ch\\u1ecdn)\",\"template\":\"crazyselect\",\"call\":\"get_post_category_options\",\"params\":[{\"dynamic_id\":\"#dynamic_id\"},true],\"@label-type\":\"value\"},\"sorttype\":{\"type\":\"select\",\"label\":\"ki\\u1ec3u s\\u1eafp x\\u1ebfp\",\"call\":\"get_post_sortby_options\"},\"post_number\":{\"type\":\"number\",\"label\":\"S\\u1ed1 tin b\\u00e0i\",\"min\":1,\"step\":1,\"default\":3},\"link\":{\"type\":\"text\",\"label\":\"Li\\u00ean k\\u1ebft (t\\u00f9y ch\\u1ecdn)\",\"placeholder\":\"Nh\\u1eadp li\\u00ean k\\u1ebft. (Kh\\u00f4ng b\\u1eaft bu\\u1ed9c)\"}},\"path\":\"home.posts\"},\"home.team.area\":{\"name\":\"Home: Danh s\\u00e1ch Gi\\u1ea3ng vi\\u00ean\",\"inputs\":{\"sub_title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 nh\\u1ecf\",\"placeholder\":\"\"},\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (t\\u00f9y ch\\u1ecdn)<br \\/><small>D\\u00f9ng C\\u1eb7p ** \\u0111\\u1ec3 in \\u0111\\u1eadm<\\/small>\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"}},\"path\":\"home.team.area\"},\"home.team.item\":{\"name\":\"Home: Th\\u00f4ng tin gi\\u1ea3ng vi\\u00ean\",\"inputs\":{\"title\":{\"type\":\"text\",\"label\":\"H\\u1ecd v\\u00e0 t\\u00ean\",\"placeholder\":\"V\\u00ed d\\u1ee5 Nguy\\u1ec5n V\\u0103n A\"},\"avatar\":{\"type\":\"media\",\"label\":\"H\\u00ecnh \\u0110\\u1ea1i di\\u1ec7n\",\"placeholder\":\"\"},\"job\":{\"type\":\"text\",\"label\":\"C\\u00f4ng vi\\u1ec7c\",\"placeholder\":\"V\\u00ed d\\u1ee5 Gi\\u1ea3ng vi\\u00ean\"},\"link\":{\"type\":\"text\",\"label\":\"Li\\u00ean k\\u1ebft (t\\u00f9y ch\\u1ecdn)\",\"placeholder\":\"Nh\\u1eadp li\\u00ean k\\u1ebft. (Kh\\u00f4ng b\\u1eaft bu\\u1ed9c)\"},\"facebook\":{\"type\":\"text\",\"label\":\"Li\\u00ean k\\u1ebft facebook\",\"placeholder\":\"https:\\/\\/www.facebook.com\\/UserName\"},\"twitter\":{\"type\":\"text\",\"label\":\"Li\\u00ean k\\u1ebft twitter\",\"placeholder\":\"https:\\/\\/twitter.com\\/UserName\"},\"linkedin\":{\"type\":\"text\",\"label\":\"Li\\u00ean k\\u1ebft linkedin\",\"placeholder\":\"https:\\/\\/linkedin.com\\/\"}},\"path\":\"home.team.item\"},\"home.video-list\":{\"name\":\"Home: Danh s\\u00e1ch Video\",\"inputs\":{\"sub_title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 nh\\u1ecf\",\"placeholder\":\"\"},\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (t\\u00f9y ch\\u1ecdn)<br \\/><small>D\\u00f9ng C\\u1eb7p ** \\u0111\\u1ec3 in \\u0111\\u1eadm<\\/small>\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"description\":{\"type\":\"textarea\",\"label\":\"M\\u00f4 t\\u1ea3 ng\\u1eafn (T\\u00f9y ch\\u1ecdn)\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"dynamic_id\":{\"type\":\"crazyselect\",\"label\":\"M\\u1ee5c (t\\u00f9y ch\\u1ecdn)\",\"template\":\"crazyselect\",\"call\":\"get_dynamic_options\",\"params\":[{\"post_type\":\"video_embed\"},\"Ch\\u1ecdn m\\u1ed9t\"],\"@change\":\"Crazy.posts.changeDynamicID\",\"required\":\"true\"},\"category_id\":{\"type\":\"crazyselect\",\"label\":\"Danh m\\u1ee5c (t\\u00f9y ch\\u1ecdn)\",\"template\":\"crazyselect\",\"call\":\"get_post_category_options\",\"params\":[{\"dynamic_id\":\"#dynamic_id\"},true],\"@label-type\":\"value\"},\"sorttype\":{\"type\":\"select\",\"label\":\"ki\\u1ec3u s\\u1eafp x\\u1ebfp\",\"call\":\"get_post_sortby_options\"},\"post_number\":{\"type\":\"number\",\"label\":\"S\\u1ed1 tin b\\u00e0i\",\"min\":1,\"step\":1,\"default\":5},\"link\":{\"type\":\"text\",\"label\":\"Li\\u00ean k\\u1ebft (t\\u00f9y ch\\u1ecdn)\",\"placeholder\":\"Nh\\u1eadp li\\u00ean k\\u1ebft. (Kh\\u00f4ng b\\u1eaft bu\\u1ed9c)\"}},\"path\":\"home.video-list\"},\"settings.page-settings\":{\"name\":\"Settings: Page: Thi\\u1ebft l\\u1eadp trang \",\"inputs\":{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 Thi\\u1ebft l\\u1eadp \"},\"page_id\":{\"type\":\"crazyselect\",\"label\":\"Trang\",\"call\":\"get_page_options\",\"@label-type\":\"value\"},\"show_breadcrumb\":{\"type\":\"switch\",\"label\":\"Breadcrumb\",\"value_type\":\"boolean\",\"check_label\":\"Hi\\u1ec3n th\\u1ecb breadcrumb\"},\"list_style\":{\"type\":\"radio\",\"label\":\"Style Danh s\\u00e1ch\",\"data\":{\"style-1\":\"Style 1\",\"style-2\":\"Style 2\"},\"default\":\"style-1\"},\"list_layout\":{\"type\":\"radio\",\"label\":\"Layout Danh s\\u00e1ch\",\"data\":{\"sidebar\":\"sidebar\",\"fullwidth\":\"fullwidth\"},\"default\":\"sidebar\"},\"list_type\":{\"type\":\"radio\",\"label\":\"Ki\\u1ec3u Danh s\\u00e1ch\",\"data\":{\"standard\":\"Standard\",\"list\":\"Danh s\\u00e1ch\",\"grid\":\"L\\u01b0\\u1edbi (grid)\"},\"default\":\"grid\"},\"detail_style\":{\"type\":\"radio\",\"label\":\"Style chi ti\\u1ebft\",\"data\":{\"1\":\"Style 1\",\"2\":\"Style 2\"},\"default\":\"1\"}},\"data\":{\"show_breadcrumb\":true,\"list_style\":\"1\",\"list_type\":\"grid\"},\"path\":\"settings.page-settings\"},\"settings.post-settings\":{\"name\":\"Settings: Post: Thi\\u1ebft l\\u1eadp m\\u1ee5c \\u0111\\u0103ng b\\u00e0i\",\"inputs\":{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 Thi\\u1ebft l\\u1eadp (T\\u00f9y ch\\u1ecdn)\"},\"dynamic_id\":{\"type\":\"crazyselect\",\"label\":\"M\\u1ee5c \\u0111\\u0103ng b\\u00e0i\",\"call\":\"get_dynamic_options\",\"params\":[[],\"Ch\\u1ecdn m\\u1ed9t\"],\"@change\":\"Crazy.posts.changeDynamicID\",\"required\":true},\"category_id\":{\"type\":\"crazyselect\",\"label\":\"Danh m\\u1ee5c\",\"call\":\"get_post_category_options\",\"params\":[{\"dynamic_id\":\"#dynamic_id\"},true]},\"show_breadcrumb\":{\"type\":\"switch\",\"label\":\"Breadcrumb\",\"value_type\":\"boolean\",\"check_label\":\"Hi\\u1ec3n th\\u1ecb breadcrumb\"},\"list_style\":{\"type\":\"radio\",\"label\":\"Style Danh s\\u00e1ch\",\"data\":{\"style-1\":\"Style 1\",\"style-2\":\"Style 2\",\"course-one\":\"Kh\\u00f3a H\\u1ecdc - 1\",\"course-two\":\"Kh\\u00f3a H\\u1ecdc - 2\",\"course-five\":\"Kh\\u00f3a H\\u1ecdc - 5\"},\"default\":\"style-1\"},\"list_layout\":{\"type\":\"radio\",\"label\":\"Layout Danh s\\u00e1ch\",\"data\":{\"sidebar\":\"sidebar\",\"fullwidth\":\"fullwidth\"},\"default\":\"sidebar\"},\"list_type\":{\"type\":\"radio\",\"label\":\"Ki\\u1ec3u Danh s\\u00e1ch\",\"data\":{\"standard\":\"Standard\",\"list\":\"Danh s\\u00e1ch\",\"grid\":\"L\\u01b0\\u1edbi (grid)\"},\"default\":\"grid\"},\"detail_style\":{\"type\":\"radio\",\"label\":\"Style chi ti\\u1ebft\",\"data\":{\"1\":\"Style 1\",\"2\":\"Style 2\"},\"default\":\"1\"},\"detail_layout\":{\"type\":\"radio\",\"label\":\"Layout Chi ti\\u1ebft\",\"data\":{\"sidebar\":\"sidebar\",\"fullwidth\":\"fullwidth\"},\"default\":\"sidebar\"}},\"path\":\"settings.post-settings\"},\"sidebars.posts.banner-text\":{\"name\":\"Sidebar: Posts: Banner Text\",\"inputs\":{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (T\\u00f9y ch\\u1ecdn)<br><small>(D\\u00f9ng c\\u1eb7p d\\u1ea5u ** \\u0111\\u1ec3 in \\u0111\\u1eadm<\\/small>)\"},\"description\":{\"type\":\"textarea\",\"label\":\"M\\u00f4 t\\u1ea3\"},\"url\":{\"type\":\"text\",\"label\":\"D\\u01b0\\u1eddng d\\u1eabn\",\"placeholder\":\"https:\\/\\/\"},\"button_text\":{\"type\":\"text\",\"label\":\"Text n\\u00fat b\\u1ea5m\",\"placeholder\":\"V\\u00ed d\\u1ee5: B\\u1eaft \\u0111\\u1ea7u\"}},\"path\":\"sidebars.posts.banner-text\"},\"sidebars.posts.categories\":{\"name\":\"Sidebar: Posts: Danh m\\u1ee5c\",\"inputs\":{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (T\\u00f9y ch\\u1ecdn)\"},\"get_by_dynamic_active\":{\"type\":\"switch\",\"label\":\"\\u01afu ti\\u00ean m\\u1ee5c \\u0111ang xem\",\"value_type\":\"boolean\"},\"dynamic_id\":{\"type\":\"crazyselect\",\"label\":\"M\\u1ee5c (t\\u00f9y ch\\u1ecdn)\",\"template\":\"crazyselect\",\"call\":\"get_dynamic_options\",\"params\":[[],\"Ch\\u1ecdn m\\u1ed9t\"],\"@change\":\"App.components.changeDynamicID\",\"data-ref\":\"parent_id\"},\"parent_id\":{\"type\":\"crazyselect\",\"label\":\"Danh m\\u1ee5c Cha\",\"template\":\"crazyselect\",\"call\":\"get_post_category_options\",\"params\":[{\"dynamic_id\":\"#dynamic_id\"},true],\"@label-type\":\"value\"},\"sorttype\":{\"type\":\"select\",\"label\":\"ki\\u1ec3u s\\u1eafp x\\u1ebfp\",\"call\":\"get_post_category_sortby_options\"},\"cate_number\":{\"type\":\"number\",\"label\":\"S\\u1ed1 l\\u01b0\\u1ee3ng danh m\\u1ee5c\",\"min\":1,\"step\":1,\"valudate\":\"number|min:1\",\"default\":10}},\"path\":\"sidebars.posts.categories\"},\"sidebars.posts.menu\":{\"name\":\"Sidebar: Posts: Menu\",\"inputs\":{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (T\\u00f9y ch\\u1ecdn)\"},\"menu_id\":{\"type\":\"crazyselect\",\"label\":\"Menu\",\"call\":\"get_menu_options\"},\"level\":{\"type\":\"radio\",\"label\":\"S\\u1ed1 c\\u1ea5p\",\"data\":{\"1\":\"1\",\"2\":\"2\",\"3\":\"3\",\"4\":\"4\"},\"default\":1}},\"path\":\"sidebars.posts.menu\"},\"sidebars.posts.recent\":{\"name\":\"Sidebar: Posts: Recent Posts\",\"inputs\":{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (T\\u00f9y ch\\u1ecdn)\",\"default\":\"Tin m\\u1edbi nh\\u1ea5t\"},\"dynamic_id\":{\"type\":\"crazyselect\",\"label\":\"M\\u1ee5c (t\\u00f9y ch\\u1ecdn)\",\"template\":\"crazyselect\",\"call\":\"get_dynamic_options\",\"params\":[[],\"Ch\\u1ecdn m\\u1ed9t\"],\"@change\":\"Crazy.posts.changeDynamicID\",\"required\":\"true\"},\"category_id\":{\"type\":\"crazyselect\",\"label\":\"Danh m\\u1ee5c\",\"template\":\"crazyselect\",\"call\":\"get_post_category_options\",\"params\":[{\"dynamic_id\":\"#dynamic_id\"},true],\"@label-type\":\"value\"},\"content_type\":{\"type\":\"radio\",\"label\":\"Lo\\u1ea1i n\\u1ed9i dung\",\"call\":\"get_content_type_options\",\"params\":[\"T\\u1ea5t c\\u1ea3\"]},\"sorttype\":{\"type\":\"select\",\"label\":\"ki\\u1ec3u s\\u1eafp x\\u1ebfp\",\"call\":\"get_post_sortby_options\"},\"post_number\":{\"type\":\"number\",\"label\":\"S\\u1ed1 tin b\\u00e0i\",\"min\":1,\"step\":1,\"default\":10}},\"path\":\"sidebars.posts.recent\"},\"sidebars.posts.search\":{\"name\":\"Sidebar: Posts: Box T\\u00ecm ki\\u1ebfm\",\"inputs\":{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (T\\u00f9y ch\\u1ecdn)\"},\"placeholder\":{\"type\":\"text\",\"label\":\"Placeholder\"}},\"path\":\"sidebars.posts.search\"},\"sidebars.posts.tags\":{\"name\":\"Sidebar: Th\\u1ebb b\\u00e0i vi\\u1ebft (tags)\",\"inputs\":{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1\"},\"sorttype\":{\"type\":\"select\",\"label\":\"ki\\u1ec3u s\\u1eafp x\\u1ebfp\",\"call\":\"get_tag_sortby_options\"},\"tag_number\":{\"type\":\"number\",\"label\":\"S\\u1ed1 tin b\\u00e0i\",\"min\":1,\"step\":1,\"default\":10}},\"path\":\"sidebars.posts.tags\"}}','2022-08-07 09:31:11','2022-08-16 13:58:17'),(2,'theme',1,'options','{\"title\":\"Breaking Ielts\",\"groups\":{\"general\":{\"label\":\"Chung\",\"inputs\":{\"show_preloader\":{\"type\":\"switch\",\"label\":\"Preloader\",\"value_type\":\"boolean\",\"check_label\":\"Hi\\u1ec3n th\\u1ecb Preloader\",\"value\":true},\"theme_primary_color\":{\"type\":\"coloris\",\"label\":\"M\\u00e0u ch\\u1ee7 \\u0111\\u1ea1o\",\"value\":\"#AD213A\"},\"plugins\":{\"type\":\"area\",\"label\":\"Plugins\",\"value\":\"plugins\",\"@area\":\"plugins\",\"@title-by\":\"title\"}}},\"header\":{\"label\":\"Header\",\"inputs\":{\"show_topbar\":{\"type\":\"switch\",\"label\":\"Hi\\u1ec3n th\\u1ecb topbar\",\"value_type\":\"boolean\",\"check_label\":\"Show\",\"value\":true},\"topbar_notify_html\":{\"type\":\"ckeditor\",\"label\":\"Text th\\u00f4ng b\\u00e1o \\/ Ch\\u00e0o m\\u1eebng\",\"class\":\"text-editor\"},\"topbar_right_menu_id\":{\"type\":\"crazyselect\",\"label\":\"Top Right Menu\",\"call\":\"get_menu_options\"},\"logo\":{\"type\":\"media\",\"label\":\"Logo (T\\u00f9y ch\\u1ecdn)\",\"@filetype\":\"png,jpg,jpeg,gif,bmp\"},\"category_menu_text\":{\"type\":\"text\",\"label\":\"Menu Text\",\"placeholder\":\"V\\u00ed d\\u1ee5: Danh m\\u1ee5c\"},\"category_menu_id\":{\"type\":\"crazyselect\",\"label\":\"Menu Danh m\\u1ee5c\",\"call\":\"get_menu_options\"},\"show_search_form\":{\"type\":\"switch\",\"label\":\"Hi\\u1ec3n th\\u1ecb Form T\\u00ecm ki\\u1ebfm\",\"value_type\":\"boolean\",\"check_label\":\"Show\",\"value\":true},\"show_extra_button\":{\"type\":\"switch\",\"label\":\"Hi\\u1ec3n th\\u1ecb n\\u00fat m\\u1edf r\\u1ed9ng\",\"value_type\":\"boolean\",\"check_label\":\"Show\"},\"extra_button_url\":{\"type\":\"text\",\"label\":\"Url <br> <small>(li\\u00ean k\\u1ebft cho n\\u00fat m\\u1edf r\\u1ed9ng)<\\/small>\",\"placeholder\":\"http:\\/\\/\"},\"extra_button_text\":{\"type\":\"text\",\"label\":\"Text <br> <small>(li\\u00ean k\\u1ebft cho n\\u00fat m\\u1edf r\\u1ed9ng)<\\/small>\",\"placeholder\":\"V\\u00ed d\\u1ee5 \\u0111\\u0103ng k\\u00fd\"},\"extra_button_icon\":{\"type\":\"iconpicker\",\"label\":\"Icon <br> <small>(icon cho n\\u00fat m\\u1edf r\\u1ed9ng)<\\/small>\",\"placeholder\":\"V\\u00ed d\\u1ee5 icon-4\"}}},\"footer\":{\"label\":\"Footer\",\"inputs\":{\"widgets\":{\"type\":\"area\",\"label\":\"N\\u1ed9i dung footer\",\"value\":\"footer_slogans\",\"area\":\"footer_widgets\",\"@title-by\":\"title\"},\"copyright\":{\"type\":\"textarea\",\"label\":\"N\\u00f4i dung m\\u1ee5c copyright\",\"className\":\"auto-height\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3\"}}},\"sidebar\":{\"label\":\"Sidebar\",\"inputs\":{\"sidebar_posts\":{\"type\":\"area\",\"label\":\"Post sidebar\",\"value\":\"sidebar_posts\",\"area\":\"sidebar_posts\",\"@title-by\":\"title\"},\"sidebar_pages\":{\"type\":\"area\",\"label\":\"Page sidebar\",\"value\":\"sidebar_pages\",\"area\":\"sidebar_pages\",\"@title-by\":\"title\"},\"sidebar_courses\":{\"type\":\"area\",\"label\":\"Course sidebar\",\"value\":\"sidebar_courses\",\"area\":\"sidebar_courses\",\"@title-by\":\"title\"}}},\"home\":{\"label\":\"Trang ch\\u1ee7\",\"inputs\":{\"title\":{\"type\":\"text\",\"label\":\"Ti\\u00eau \\u0111\\u1ec1 (T\\u00f9y ch\\u1ecdn)\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"description\":{\"type\":\"textarea\",\"label\":\"M\\u00f4 t\\u1ea3 (T\\u00f9y ch\\u1ecdn(\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"},\"thumbnail\":{\"type\":\"media\",\"label\":\"Thumbnail (T\\u00f9y ch\\u1ecdn)\",\"@filetype\":\"png,jpg,jpeg,gif,bmp\"},\"content_area\":{\"type\":\"area\",\"label\":\"N\\u1ed9i dung Trang ch\\u1ee7\",\"value\":\"home_area\",\"@area\":\"home_area\",\"@title-by\":\"title\"}}},\"posts\":{\"label\":\"B\\u00e0i vi\\u1ebft\",\"inputs\":{\"show_breadcrumb\":{\"type\":\"switch\",\"label\":\"Breadcrumb\",\"value_type\":\"boolean\",\"check_label\":\"Hi\\u1ec3n th\\u1ecb breadcrumb\"},\"list_style\":{\"type\":\"radio\",\"label\":\"Style Danh s\\u00e1ch\",\"data\":{\"style-1\":\"Style 1\",\"style-2\":\"Style 2\",\"course-one\":\"Kh\\u00f3a H\\u1ecdc - 1\",\"course-two\":\"Kh\\u00f3a H\\u1ecdc - 2\",\"course-five\":\"Kh\\u00f3a H\\u1ecdc - 5\"},\"default\":\"style-1\"},\"list_layout\":{\"type\":\"radio\",\"label\":\"Layout Danh s\\u00e1ch\",\"data\":{\"sidebar\":\"sidebar\",\"fullwidth\":\"fullwidth\"},\"default\":\"sidebar\"},\"list_type\":{\"type\":\"radio\",\"label\":\"Ki\\u1ec3u Danh s\\u00e1ch\",\"data\":{\"standard\":\"Standard\",\"list\":\"Danh s\\u00e1ch\",\"grid\":\"L\\u01b0\\u1edbi (grid)\"},\"default\":\"grid\"},\"detail_style\":{\"type\":\"radio\",\"label\":\"Style chi ti\\u1ebft\",\"data\":{\"1\":\"Style 1\",\"2\":\"Style 2\"},\"default\":\"1\"},\"detail_layout\":{\"type\":\"radio\",\"label\":\"Layout Chi ti\\u1ebft\",\"data\":{\"sidebar\":\"sidebar\",\"fullwidth\":\"fullwidth\"},\"default\":\"sidebar\"},\"detail_footer_area\":{\"type\":\"area\",\"label\":\"N\\u1ed9i dung m\\u1edf r\\u1ed9ng\",\"value\":\"post_detail_footer\",\"area\":\"post_detail_footer\",\"@title-by\":\"title\"},\"post_settings\":{\"type\":\"area\",\"label\":\"M\\u1ee5c \\u0111\\u01b0\\u1ee3c thi\\u1ebft l\\u1eadp\",\"value\":\"post_settings\",\"@area\":\"post_settings\",\"@title-by\":\"title\"}},\"config\":{\"name\":\"Thi\\u1ebft l\\u1eadp m\\u1ee5c \\u0111\\u0103ng b\\u00e0i\",\"layout_type\":\"single\",\"form_groups\":{\"general\":{\"title\":\"Thi\\u1ebft l\\u1eadp chung\",\"inputs\":[\"show_breadcrumb\"]},\"list\":{\"title\":\"Thi\\u1ebft l\\u1eadp danh s\\u00e1ch\",\"inputs\":[\"list_style\",\"list_layout\",\"list_type\"]},\"detail\":{\"title\":\"Thi\\u1ebft l\\u1eadp Trang chi ti\\u1ebft \",\"inputs\":[\"detail_style\",\"detail_layout\",\"detail_footer_area\"]},\"post_settings\":{\"title\":\"Thi\\u1ebft l\\u1eadp cho t\\u1eebng m\\u1ee5c\",\"className\":\"mt-3 pt-2 border-top\",\"inputs\":[\"post_settings\"]}}},\"data\":{\"list_layout\":\"sidebar\",\"list_type\":\"grid\"}},\"pages\":{\"label\":\"Trang\",\"inputs\":{\"show_breadcrumb\":{\"type\":\"switch\",\"label\":\"Breadcrumb\",\"value_type\":\"boolean\",\"check_label\":\"Hi\\u1ec3n th\\u1ecb breadcrumb\"},\"list_style\":{\"type\":\"radio\",\"label\":\"Style Danh s\\u00e1ch\",\"data\":{\"style-1\":\"Style 1\",\"style-2\":\"Style 2\"},\"default\":\"1\"},\"list_layout\":{\"type\":\"radio\",\"label\":\"Layout Danh s\\u00e1ch\",\"data\":{\"sidebar\":\"sidebar\",\"fullwidth\":\"fullwidth\"},\"default\":\"sidebar\"},\"list_type\":{\"type\":\"radio\",\"label\":\"Ki\\u1ec3u Danh s\\u00e1ch\",\"data\":{\"standard\":\"Standard\",\"list\":\"Danh s\\u00e1ch\",\"grid\":\"L\\u01b0\\u1edbi (grid)\"},\"default\":\"grid\"},\"detail_style\":{\"type\":\"radio\",\"label\":\"Style chi ti\\u1ebft\",\"data\":{\"1\":\"Style 1\",\"2\":\"Style 2\"},\"default\":\"1\"},\"page_settings\":{\"type\":\"area\",\"label\":\"M\\u1ee5c \\u0111\\u01b0\\u1ee3c thi\\u1ebft l\\u1eadp\",\"value\":\"page_settings\",\"@area\":\"page_settings\",\"@title-by\":\"title\"}},\"config\":{\"name\":\"Thi\\u1ebft l\\u1eadp m\\u1ee5c \\u0111\\u0103ng b\\u00e0i\",\"layout_type\":\"single\",\"form_groups\":{\"general\":{\"title\":\"Thi\\u1ebft l\\u1eadp chung\",\"inputs\":[\"show_breadcrumb\"]},\"list\":{\"title\":\"Thi\\u1ebft l\\u1eadp danh s\\u00e1ch\",\"inputs\":[\"list_style\",\"list_layout\",\"list_type\"]},\"detail\":{\"title\":\"Thi\\u1ebft l\\u1eadp Trang chi ti\\u1ebft \",\"inputs\":[\"detail_style\",\"detail_use_feature_image\"]},\"page\":{\"title\":\"Thi\\u1ebft l\\u1eadp Trang c\\u1ee5 th\\u1ec3 \",\"inputs\":[\"page_settings\"]}}},\"data\":{\"show_breadcrumb\":true,\"list_layout\":\"sidebar\",\"list_type\":\"grid\"}}}}','2022-08-07 09:31:11','2022-08-14 20:06:36'),(3,'theme',1,'areas','{\"footer_widgets\":\"N\\u1ed9i dung footer\",\"sidebar_posts\":\"Post Sidebar\",\"sidebar_pages\":\"Page Sidebar\",\"sidebar_courses\":\"Course Sidebar\",\"post_settings\":\"Post Settings\",\"page_settings\":\"page Settings\",\"home_area\":\"Trang ch\\u1ee7\",\"plugins\":\"Plugins\",\"post_detail_footer\":\"Cu\\u1ed1i trang chi ti\\u1ebft\"}','2022-08-07 09:31:11','2022-08-14 19:26:49'),(4,'theme',1,'layout','[]','2022-08-07 09:31:11','2022-08-07 09:31:11'),(5,'theme',1,'menus','[]','2022-08-07 09:31:11','2022-08-07 09:31:11'),(6,'theme',1,'package','{\"metadata\":{\"name\":\"Breaking Ielts\",\"version\":1,\"description\":\"\",\"author\":\"\",\"link\":\"http:\\/\\/vcc.vn\"},\"assets\":{\"styles\":[],\"scripts\":[]},\"icons\":{\"icomoon\":{\"title\":\"IcoMoon\",\"style\":[\"@assets\\/css\\/vendor\\/icomoon.css\"],\"key\":\"fi\",\"list\":[{\"prefix\":\"icon-\",\"items\":[\"add\",\"remove\",\"east\",\"west\",\"envelope\",\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\",\"14\",\"15\",\"16\",\"17\",\"18\",\"19\",\"20\",\"21\",\"22\",\"23\",\"24\",\"25\",\"26\",\"27\",\"28\",\"29\",\"30\",\"31\",\"32\",\"33\",\"34\",\"35\",\"36\",\"37\",\"38\",\"39\",\"40\",\"41\",\"42\",\"43\",\"44\",\"45\",\"46\",\"47\",\"48\",\"49\",\"50\",\"51\",\"52\",\"53\",\"54\",\"55\",\"56\",\"57\",\"58\",\"59\",\"60\",\"61\",\"62\",\"63\",\"64\",\"65\",\"66\",\"67\",\"68\",\"69\",\"70\",\"71\",\"72\",\"73\",\"74\",\"75\",\"76\",\"77\",\"78\",\"79\",\"80\",\"81\",\"82\",\"83\",\"84\",\"85\",\"86\",\"87\",\"88\",\"89\",\"phone\",\"minus\",\"share2\",\"facebook\",\"instagram\",\"twitter\",\"youtube\",\"linkedin2\",\"pinterest\"]}]}}}','2022-08-07 09:31:11','2022-08-07 11:19:23'),(7,'theme',2,'components','[]','2022-08-07 09:34:06','2022-08-07 09:34:06'),(8,'theme',2,'options','[]','2022-08-07 09:34:06','2022-08-07 09:34:06'),(9,'theme',2,'areas','[]','2022-08-07 09:34:06','2022-08-07 09:34:06'),(10,'theme',2,'layout','[]','2022-08-07 09:34:06','2022-08-07 09:34:06'),(11,'theme',2,'menus','[]','2022-08-07 09:34:06','2022-08-07 09:34:06'),(12,'theme',2,'package','[]','2022-08-07 09:34:06','2022-08-07 09:34:06'),(13,'dynamic',1,'default_fields','[\"title\",\"slug\",\"description\",\"content_type\",\"content\",\"featured_image\",\"meta_title\",\"meta_description\",\"keywords\",\"tags\",\"privacy\",\"seo\"]','2022-08-09 03:39:15','2022-08-09 03:39:15'),(14,'dynamic',1,'advance_props','[{\"name\":\"month\",\"type\":\"number\",\"label\":\"Th\\u1eddi gian\",\"validate\":\"numeric|min:0.5\",\"prop_list\":[{\"key\":\"min\",\"value\":\"0.1\"},{\"key\":\"step\",\"value\":\"0.1\"},{\"key\":\"default\",\"value\":\"1\"}]},{\"name\":\"user_level\",\"type\":\"text\",\"label\":\"Level c\\u1ee7a h\\u1ecdc vi\\u00ean\",\"validate\":\"max:150\",\"prop_list\":[{\"key\":\"default\",\"value\":\"Cho ng\\u01b0\\u1eddi m\\u1edbi b\\u1eaft \\u0111\\u1ea7u\"}]},{\"name\":\"rating_avg\",\"type\":\"number\",\"label\":\"\\u0110i\\u1ec3m \\u0111\\u00e1nh gi\\u00e1 (0 - 5)\",\"validate\":\"numeric|min:0|max:5\",\"prop_list\":[{\"key\":\"step\",\"value\":\"0.1\"},{\"key\":\"min\",\"value\":\"0\"},{\"key\":\"max\",\"value\":\"5\"},{\"key\":\"default\",\"value\":\"5\"}]},{\"name\":\"rating_count\",\"type\":\"number\",\"label\":\"T\\u1ed5ng s\\u1ed1 \\u0111\\u00e1nh gi\\u00e1\",\"validate\":\"numeric|min:0\",\"prop_list\":[{\"key\":\"min\",\"value\":\"0\"},{\"key\":\"step\",\"value\":\"1\"},{\"key\":\"default\",\"value\":\"0\"}]},{\"name\":\"course_price\",\"type\":\"number\",\"label\":\"Gi\\u00e1 kh\\u00eda h\\u1ecdc\",\"validate\":\"numeric|min:0\",\"prop_list\":[{\"key\":\"min\",\"value\":\"0\"},{\"key\":\"step\",\"value\":\"0\"},{\"key\":\"defaut\",\"value\":\"0\"}]},{\"name\":\"lesson_count\",\"type\":\"number\",\"label\":\"S\\u1ed1 ti\\u1ebft h\\u1ecdc\",\"validate\":\"numeric|min:0\",\"prop_list\":[{\"key\":\"min\",\"value\":\"0\"},{\"key\":\"step\",\"value\":\"0\"},{\"key\":\"default\",\"value\":\"0\"}]},{\"name\":\"student_count\",\"type\":\"number\",\"label\":\"S\\u1ed1 h\\u1ecdc vi\\u00ean\",\"validate\":\"numeric|min:0|max:100\",\"prop_list\":[{\"key\":\"min\",\"value\":\"0\"},{\"key\":\"step\",\"value\":\"1\"},{\"key\":\"default\",\"value\":\"0\"}]},{\"name\":\"course_level\",\"type\":\"text\",\"label\":\"Level kh\\u00f3a h\\u1ecdc\",\"validate\":null},{\"name\":\"featurelist\",\"type\":\"textarea\",\"label\":\"\\u0110i\\u1ec3m n\\u1ed5i b\\u1eadt\",\"validate\":null,\"prop_list\":[{\"key\":\"placeholder\",\"value\":\"Nh\\u1eadp nhanh d\\u00e1ch c\\u00e1c \\u0111i\\u1ec3m n\\u1ed5i b\\u1eadt \\r\\nM\\u1ed7i d\\u00f2ng m\\u1ed9t \\u0111\\u1eb7c \\u0111i\\u1ec3m\"}]}]','2022-08-09 03:39:15','2022-08-10 09:07:03'),(15,'dynamic',1,'custom_slug','0','2022-08-09 03:39:15','2022-08-10 09:07:03'),(16,'dynamic',1,'prop_inputs','{\"month\":{\"name\":\"month\",\"type\":\"number\",\"label\":\"Th\\u1eddi gian\",\"validate\":\"numeric|min:0.5\",\"min\":\"0.1\",\"step\":\"0.1\",\"default\":\"1\"},\"user_level\":{\"name\":\"user_level\",\"type\":\"text\",\"label\":\"Level c\\u1ee7a h\\u1ecdc vi\\u00ean\",\"validate\":\"max:150\",\"default\":\"Cho ng\\u01b0\\u1eddi m\\u1edbi b\\u1eaft \\u0111\\u1ea7u\"},\"rating_avg\":{\"name\":\"rating_avg\",\"type\":\"number\",\"label\":\"\\u0110i\\u1ec3m \\u0111\\u00e1nh gi\\u00e1 (0 - 5)\",\"validate\":\"numeric|min:0|max:5\",\"step\":\"0.1\",\"min\":\"0\",\"max\":\"5\",\"default\":\"5\"},\"rating_count\":{\"name\":\"rating_count\",\"type\":\"number\",\"label\":\"T\\u1ed5ng s\\u1ed1 \\u0111\\u00e1nh gi\\u00e1\",\"validate\":\"numeric|min:0\",\"min\":\"0\",\"step\":\"1\",\"default\":\"0\"},\"course_price\":{\"name\":\"course_price\",\"type\":\"number\",\"label\":\"Gi\\u00e1 kh\\u00eda h\\u1ecdc\",\"validate\":\"numeric|min:0\",\"min\":\"0\",\"step\":\"0\",\"defaut\":\"0\"},\"lesson_count\":{\"name\":\"lesson_count\",\"type\":\"number\",\"label\":\"S\\u1ed1 ti\\u1ebft h\\u1ecdc\",\"validate\":\"numeric|min:0\",\"min\":\"0\",\"step\":\"0\",\"default\":\"0\"},\"student_count\":{\"name\":\"student_count\",\"type\":\"number\",\"label\":\"S\\u1ed1 h\\u1ecdc vi\\u00ean\",\"validate\":\"numeric|min:0|max:100\",\"min\":\"0\",\"step\":\"1\",\"default\":\"0\"},\"course_level\":{\"name\":\"course_level\",\"type\":\"text\",\"label\":\"Level kh\\u00f3a h\\u1ecdc\",\"validate\":null},\"featurelist\":{\"name\":\"featurelist\",\"type\":\"textarea\",\"label\":\"\\u0110i\\u1ec3m n\\u1ed5i b\\u1eadt\",\"validate\":null,\"placeholder\":\"Nh\\u1eadp nhanh d\\u00e1ch c\\u00e1c \\u0111i\\u1ec3m n\\u1ed5i b\\u1eadt \\r\\nM\\u1ed7i d\\u00f2ng m\\u1ed9t \\u0111\\u1eb7c \\u0111i\\u1ec3m\"}}','2022-08-09 03:39:15','2022-08-10 09:07:04'),(17,'dynamic',1,'form_config','{\"name\":\"Th\\u00f4ng tin Kh\\u00f3a h\\u1ecdc\",\"layout_type\":\"column\",\"form_groups\":[{\"title\":\"Th\\u00f4ng tin c\\u01a1 b\\u1ea3n\",\"class\":\"col-12 col-lg-7\",\"inputs\":[\"title\",\"slug\",\"description\"]},{\"title\":\"\\u1ea2nh v\\u00e0 ri\\u00eang t\\u01b0\",\"class\":\"col-12 col-lg-5\",\"inputs\":[\"featured_image\"]},{\"title\":\"Th\\u00f4ng tin kh\\u00f3a h\\u1ecdc\",\"class\":\"col-md-6\",\"inputs\":[\"month\",\"course_level\",\"featurelist\",\"lesson_count\",\"course_price\"]},{\"title\":null,\"class\":\"col-md-6\",\"inputs\":[\"student_count\",\"user_level\",\"rating_avg\",\"rating_count\"]},{\"title\":\"Th\\u00f4ng tin chi ti\\u1ebft\",\"class\":\"col-12\",\"inputs\":[\"content\",\"content_type\"]},{\"title\":\"Th\\u00f4ng tin SEO\",\"class\":\"col-lg-6\",\"inputs\":[\"seo\"]},{\"title\":null,\"class\":\"col-lg-6\",\"inputs\":[\"privacy\",\"tags\"]}]}','2022-08-09 03:39:15','2022-08-10 09:04:55'),(18,'dynamic',2,'default_fields','[\"title\",\"slug\",\"description\",\"content_type\",\"content\",\"video_url\",\"featured_image\",\"meta_title\",\"meta_description\",\"keywords\",\"tags\",\"privacy\",\"seo\"]','2022-08-09 03:39:52','2022-08-09 03:39:52'),(19,'dynamic',2,'advance_props','[]','2022-08-09 03:39:52','2022-08-09 03:39:52'),(20,'dynamic',2,'custom_slug','0','2022-08-09 03:39:52','2022-08-09 03:39:52'),(21,'dynamic',2,'prop_inputs','[]','2022-08-09 03:39:52','2022-08-09 03:39:52'),(22,'dynamic',2,'form_config','{\"name\":\"Th\\u00f4ng tin Video\",\"layout_type\":\"column\",\"form_groups\":[{\"title\":\"Th\\u00f4ng tin c\\u01a1 b\\u1ea3n\",\"class\":\"col-12 col-lg-7\",\"inputs\":[\"title\",\"slug\",\"category_id\",\"description\"]},{\"title\":\"\\u1ea2nh v\\u00e0 ri\\u00eang t\\u01b0\",\"class\":\"col-12 col-lg-5\",\"inputs\":[\"featured_image\"]},{\"title\":\"Th\\u00f4ng tin chi ti\\u1ebft\",\"class\":\"col-12\",\"inputs\":[\"content\",\"content_type\",\"video_url\",\"gallery\",\"source\"]},{\"title\":\"Th\\u00f4ng tin SEO\",\"class\":\"col-12 col-lg-6\",\"inputs\":[\"seo\"]},{\"title\":\"\",\"class\":\"col-12 col-lg-6\",\"inputs\":[\"tags\",\"privacy\"]}]}','2022-08-09 03:39:52','2022-08-09 03:39:52'),(23,'dynamic',3,'default_fields','[\"title\",\"slug\",\"description\",\"content_type\",\"content\",\"featured_image\",\"meta_title\",\"meta_description\",\"keywords\",\"tags\",\"privacy\",\"seo\"]','2022-08-09 03:46:35','2022-08-09 03:46:35'),(24,'dynamic',3,'advance_props','[]','2022-08-09 03:46:35','2022-08-09 03:46:35'),(25,'dynamic',3,'custom_slug','0','2022-08-09 03:46:35','2022-08-09 03:46:35'),(26,'dynamic',3,'prop_inputs','[]','2022-08-09 03:46:35','2022-08-09 03:46:35'),(27,'dynamic',3,'form_config','{\"name\":\"Th\\u00f4ng tin Tin t\\u1ee9c\",\"layout_type\":\"column\",\"form_groups\":[{\"title\":\"Th\\u00f4ng tin c\\u01a1 b\\u1ea3n\",\"class\":\"col-12 col-lg-7\",\"inputs\":[\"title\",\"slug\",\"category_id\",\"description\"]},{\"title\":\"\\u1ea2nh v\\u00e0 ri\\u00eang t\\u01b0\",\"class\":\"col-12 col-lg-5\",\"inputs\":[\"featured_image\"]},{\"title\":\"Th\\u00f4ng tin chi ti\\u1ebft\",\"class\":\"col-12\",\"inputs\":[\"content\",\"content_type\",\"video_url\",\"gallery\",\"source\"]},{\"title\":\"Th\\u00f4ng tin SEO\",\"class\":\"col-12 col-lg-6\",\"inputs\":[\"seo\"]},{\"title\":\"\",\"class\":\"col-12 col-lg-6\",\"inputs\":[\"tags\",\"privacy\"]}]}','2022-08-09 03:46:35','2022-08-09 03:46:35'),(28,'post',1,'custom_slug',NULL,'2022-08-09 03:48:57','2022-08-09 03:48:57'),(29,'post',1,'focus_keyword',NULL,'2022-08-09 03:48:57','2022-08-09 03:48:57'),(30,'post',1,'meta_title',NULL,'2022-08-09 03:48:57','2022-08-09 03:48:57'),(31,'post',1,'meta_description',NULL,'2022-08-09 03:48:57','2022-08-09 03:48:57'),(32,'post',1,'featured_image_keep_original',NULL,'2022-08-09 03:48:57','2022-08-09 03:48:57'),(33,'post',1,'og_image_width','276','2022-08-09 03:48:57','2022-08-09 13:40:47'),(34,'post',1,'og_image_height','276','2022-08-09 03:48:57','2022-08-09 03:48:57'),(35,'post',2,'custom_slug',NULL,'2022-08-09 03:49:31','2022-08-09 03:49:31'),(36,'post',2,'focus_keyword',NULL,'2022-08-09 03:49:31','2022-08-09 03:49:31'),(37,'post',2,'meta_title',NULL,'2022-08-09 03:49:31','2022-08-09 03:49:31'),(38,'post',2,'meta_description',NULL,'2022-08-09 03:49:31','2022-08-09 03:49:31'),(39,'post',2,'featured_image_keep_original',NULL,'2022-08-09 03:49:31','2022-08-09 03:49:31'),(40,'post',2,'og_image_width','276','2022-08-09 03:49:31','2022-08-09 13:39:29'),(41,'post',2,'og_image_height','276','2022-08-09 03:49:31','2022-08-09 03:49:31'),(42,'post',3,'custom_slug',NULL,'2022-08-09 04:03:41','2022-08-09 04:03:41'),(43,'post',3,'focus_keyword',NULL,'2022-08-09 04:03:41','2022-08-09 04:03:41'),(44,'post',3,'meta_title',NULL,'2022-08-09 04:03:41','2022-08-09 04:03:41'),(45,'post',3,'meta_description',NULL,'2022-08-09 04:03:41','2022-08-09 04:03:41'),(46,'post',3,'featured_image_keep_original',NULL,'2022-08-09 04:03:42','2022-08-09 04:03:42'),(47,'post',3,'og_image_width','414','2022-08-09 04:03:42','2022-08-09 04:03:42'),(48,'post',3,'og_image_height','276','2022-08-09 04:03:42','2022-08-09 04:03:42'),(49,'post',4,'custom_slug',NULL,'2022-08-09 04:04:47','2022-08-09 04:04:47'),(50,'post',4,'focus_keyword',NULL,'2022-08-09 04:04:47','2022-08-09 04:04:47'),(51,'post',4,'meta_title',NULL,'2022-08-09 04:04:48','2022-08-09 04:04:48'),(52,'post',4,'meta_description',NULL,'2022-08-09 04:04:48','2022-08-09 04:04:48'),(53,'post',4,'featured_image_keep_original',NULL,'2022-08-09 04:04:48','2022-08-09 04:04:48'),(54,'post',4,'og_image_width','414','2022-08-09 04:04:48','2022-08-09 04:04:48'),(55,'post',4,'og_image_height','276','2022-08-09 04:04:48','2022-08-09 04:04:48'),(56,'post',5,'custom_slug',NULL,'2022-08-09 04:07:21','2022-08-09 04:07:21'),(57,'post',5,'focus_keyword',NULL,'2022-08-09 04:07:21','2022-08-09 04:07:21'),(58,'post',5,'meta_title',NULL,'2022-08-09 04:07:21','2022-08-09 04:07:21'),(59,'post',5,'meta_description',NULL,'2022-08-09 04:07:21','2022-08-09 04:07:21'),(60,'post',5,'featured_image_keep_original',NULL,'2022-08-09 04:07:22','2022-08-09 04:07:22'),(61,'post',5,'video_url','https://www.youtube.com/watch?v=BAf7r9r29iQ','2022-08-09 04:07:22','2022-08-09 04:07:22'),(62,'post',5,'og_image_width','600','2022-08-09 04:07:22','2022-08-09 04:07:22'),(63,'post',5,'og_image_height','315','2022-08-09 04:07:22','2022-08-09 04:07:22'),(64,'post',6,'custom_slug',NULL,'2022-08-09 04:14:11','2022-08-09 04:14:11'),(65,'post',6,'focus_keyword',NULL,'2022-08-09 04:14:11','2022-08-09 04:14:11'),(66,'post',6,'meta_title',NULL,'2022-08-09 04:14:11','2022-08-09 04:14:11'),(67,'post',6,'meta_description',NULL,'2022-08-09 04:14:11','2022-08-09 04:14:11'),(68,'post',6,'featured_image_keep_original',NULL,'2022-08-09 04:14:11','2022-08-09 04:14:11'),(69,'post',6,'video_url','https://www.youtube.com/watch?v=OZowHEjWn0E','2022-08-09 04:14:11','2022-08-09 04:14:11'),(70,'post',6,'og_image_width','600','2022-08-09 04:14:11','2022-08-09 04:14:11'),(71,'post',6,'og_image_height','315','2022-08-09 04:14:12','2022-08-09 04:14:12'),(72,'post',7,'custom_slug',NULL,'2022-08-09 09:07:28','2022-08-09 09:07:28'),(73,'post',7,'focus_keyword',NULL,'2022-08-09 09:07:28','2022-08-09 09:07:28'),(74,'post',7,'meta_title',NULL,'2022-08-09 09:07:28','2022-08-09 09:07:28'),(75,'post',7,'meta_description',NULL,'2022-08-09 09:07:28','2022-08-09 09:07:28'),(76,'post',7,'featured_image_keep_original',NULL,'2022-08-09 09:07:28','2022-08-09 09:07:28'),(77,'post',7,'og_image_width','414','2022-08-09 09:07:28','2022-08-09 09:07:28'),(78,'post',7,'og_image_height','276','2022-08-09 09:07:28','2022-08-09 09:07:28'),(79,'post',2,'month','1','2022-08-09 13:39:29','2022-08-09 13:39:29'),(80,'post',2,'user_level','Cho người mới bắt đầu','2022-08-09 13:39:29','2022-08-09 13:39:29'),(81,'post',2,'rating_avg','5','2022-08-09 13:39:29','2022-08-09 13:39:29'),(82,'post',2,'rating_count','100','2022-08-09 13:39:29','2022-08-09 13:39:37'),(83,'post',2,'course_price','1250','2022-08-09 13:39:29','2022-08-09 13:39:29'),(84,'post',2,'lesson_count','0','2022-08-09 13:39:29','2022-08-09 13:39:29'),(85,'post',2,'student_count','0','2022-08-09 13:39:29','2022-08-09 13:39:29'),(86,'post',2,'course_level',NULL,'2022-08-09 13:39:29','2022-08-09 13:39:29'),(87,'post',1,'month','1','2022-08-09 13:40:47','2022-08-09 13:40:47'),(88,'post',1,'user_level','Cho người mới bắt đầu','2022-08-09 13:40:47','2022-08-09 13:40:47'),(89,'post',1,'rating_avg','5','2022-08-09 13:40:47','2022-08-09 13:40:47'),(90,'post',1,'rating_count','100','2022-08-09 13:40:47','2022-08-09 13:40:47'),(91,'post',1,'course_price','102201','2022-08-09 13:40:47','2022-08-09 13:40:47'),(92,'post',1,'lesson_count','40','2022-08-09 13:40:47','2022-08-09 13:40:47'),(93,'post',1,'student_count','0','2022-08-09 13:40:47','2022-08-09 13:40:47'),(94,'post',1,'course_level','Gì đó','2022-08-09 13:40:47','2022-08-09 13:40:47'),(95,'page',8,'custom_slug',NULL,'2022-08-14 19:53:56','2022-08-14 19:53:56'),(96,'page',8,'focus_keyword',NULL,'2022-08-14 19:53:56','2022-08-14 19:53:56'),(97,'page',8,'meta_title',NULL,'2022-08-14 19:53:56','2022-08-14 19:53:56'),(98,'page',8,'meta_description',NULL,'2022-08-14 19:53:56','2022-08-14 19:53:56'),(99,'page',8,'featured_image_keep_original',NULL,'2022-08-14 19:53:56','2022-08-14 19:53:56'),(100,'page',8,'og_image_width','400','2022-08-14 19:53:56','2022-08-14 19:53:56'),(101,'page',8,'og_image_height','300','2022-08-14 19:53:56','2022-08-14 19:53:56'),(102,'page',9,'custom_slug',NULL,'2022-08-14 20:10:10','2022-08-14 20:10:10'),(103,'page',9,'focus_keyword',NULL,'2022-08-14 20:10:10','2022-08-14 20:10:10'),(104,'page',9,'meta_title',NULL,'2022-08-14 20:10:10','2022-08-14 20:10:10'),(105,'page',9,'meta_description',NULL,'2022-08-14 20:10:10','2022-08-14 20:10:10'),(106,'page',9,'featured_image_keep_original',NULL,'2022-08-14 20:10:10','2022-08-14 20:10:10'),(107,'page',9,'og_image_width','400','2022-08-14 20:10:10','2022-08-14 20:10:10'),(108,'page',9,'og_image_height','300','2022-08-14 20:10:10','2022-08-14 20:10:10'),(109,'post',10,'custom_slug',NULL,'2022-08-16 10:23:53','2022-08-16 10:23:53'),(110,'post',10,'focus_keyword',NULL,'2022-08-16 10:23:53','2022-08-16 10:23:53'),(111,'post',10,'meta_title',NULL,'2022-08-16 10:23:53','2022-08-16 10:23:53'),(112,'post',10,'meta_description',NULL,'2022-08-16 10:23:53','2022-08-16 10:23:53'),(113,'post',10,'featured_image_keep_original',NULL,'2022-08-16 10:23:53','2022-08-16 10:23:53'),(114,'post',10,'video_url','https://www.youtube.com/watch?v=OZowHEjWn0E','2022-08-16 10:23:53','2022-08-16 10:23:53'),(115,'post',10,'og_image_width','600','2022-08-16 10:23:53','2022-08-16 10:23:53'),(116,'post',10,'og_image_height','315','2022-08-16 10:23:53','2022-08-16 10:23:53');
/*!40000 ALTER TABLE `metadatas` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=141 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (70,'2014_10_12_000000_create_users_table',1),(71,'2014_10_12_100000_create_password_resets_table',1),(72,'2016_06_01_000001_create_oauth_auth_codes_table',1),(73,'2016_06_01_000002_create_oauth_access_tokens_table',1),(74,'2016_06_01_000003_create_oauth_refresh_tokens_table',1),(75,'2016_06_01_000004_create_oauth_clients_table',1),(76,'2016_06_01_000005_create_oauth_personal_access_clients_table',1),(77,'2019_08_19_000000_create_failed_jobs_table',1),(78,'2019_12_14_000001_create_personal_access_tokens_table',1),(79,'2022_04_01_120427_create_email_tokens_table',1),(80,'2022_04_01_194124_create_permission_modules_table',1),(81,'2022_04_01_194221_create_permission_roles_table',1),(82,'2022_04_01_194332_create_permission_module_roles_table',1),(83,'2022_04_01_194506_create_permission_user_roles_table',1),(84,'2022_04_01_200959_create_notices_table',1),(85,'2022_04_01_201111_create_user_notices_table',1),(86,'2022_04_03_043107_create_metadatas_table',1),(87,'2022_04_03_085016_create_options_table',1),(88,'2022_04_03_085134_create_option_groups_table',1),(89,'2022_04_03_085243_create_option_datas_table',1),(90,'2022_04_04_035759_create_themes_table',1),(91,'2022_04_04_064225_create_menus_table',1),(92,'2022_04_04_064244_create_menu_items_table',1),(93,'2022_04_04_064315_create_html_areas_table',1),(94,'2022_04_04_064328_create_html_embeds_table',1),(95,'2022_04_04_064353_create_components_table',1),(96,'2022_04_04_064402_create_html_components_table',1),(97,'2022_04_07_112704_create_dynamics_table',1),(98,'2022_04_07_120807_create_categories_table',1),(99,'2022_04_07_124337_create_posts_table',1),(100,'2022_04_07_130901_create_comments_table',1),(101,'2022_04_07_133114_create_files_table',1),(102,'2022_04_07_133548_create_file_refs_table',1),(103,'2022_04_08_201518_create_regions_table',1),(104,'2022_04_08_201617_create_districts_table',1),(105,'2022_04_08_201731_create_wards_table',1),(106,'2022_04_09_123432_create_sliders_table',1),(107,'2022_04_09_123825_create_slider_items_table',1),(108,'2022_04_09_202228_create_auth_logs_table',1),(109,'2022_04_10_061030_create_tags_table',1),(110,'2022_04_10_061121_create_tag_refs_table',1),(111,'2022_04_10_200821_create_contacts_table',1),(112,'2022_04_10_200950_create_contact_replies_table',1),(113,'2022_04_10_202843_create_subscribes_table',1),(114,'2022_04_18_125031_create_post_views_table',1),(115,'2022_05_25_175136_create_product_attributes_table',1),(116,'2022_05_25_192959_create_attributes_table',1),(117,'2022_05_25_194148_create_attribute_values_table',1),(118,'2022_05_25_195550_create_products_table',1),(119,'2022_05_25_200434_create_product_refs_table',1),(120,'2022_05_25_201135_create_warehouses_table',1),(121,'2022_05_25_201548_create_product_reviews_table',1),(122,'2022_05_26_201850_create_promos_table',1),(123,'2022_05_26_202226_create_user_discounts_table',1),(124,'2022_05_27_055748_create_orders_table',1),(125,'2022_05_27_104910_create_order_items_table',1),(126,'2022_05_27_115821_create_payment_methods_table',1),(127,'2022_05_27_123025_create_transactions_table',1),(128,'2022_05_27_130813_create_order_address_table',1),(129,'2022_05_27_131343_create_customers_table',1),(130,'2022_05_27_131825_create_order_feedbacks_table',1),(131,'2022_06_06_120039_create_permission_module_group_actions_table',1),(132,'2022_06_10_201405_create_product_collections_table',1),(133,'2022_06_11_043935_create_category_refs_table',1),(134,'2022_06_13_200105_create_product_labels_table',1),(135,'2022_06_13_200528_create_product_label_refs_table',1),(136,'2022_06_28_122619_create_carts_table',1),(137,'2022_06_28_122626_create_cart_items_table',1),(138,'2022_08_06_201024_create_slug_containers_table',1),(139,'2022_08_16_123450_create_teams_table',2),(140,'2022_08_16_123601_create_team_members_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notices`
--

DROP TABLE IF EXISTS `notices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notices` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint(20) unsigned DEFAULT 0,
  `to_id` bigint(20) DEFAULT 0,
  `to_group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'personal',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'Bạn có thông báo mới',
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_id` bigint(20) unsigned DEFAULT 0,
  `seen` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notices`
--

LOCK TABLES `notices` WRITE;
/*!40000 ALTER TABLE `notices` DISABLE KEYS */;
/*!40000 ALTER TABLE `notices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_access_tokens`
--

DROP TABLE IF EXISTS `oauth_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_access_tokens`
--

LOCK TABLES `oauth_access_tokens` WRITE;
/*!40000 ALTER TABLE `oauth_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_auth_codes`
--

DROP TABLE IF EXISTS `oauth_auth_codes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_auth_codes`
--

LOCK TABLES `oauth_auth_codes` WRITE;
/*!40000 ALTER TABLE `oauth_auth_codes` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_auth_codes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_clients`
--

DROP TABLE IF EXISTS `oauth_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_clients`
--

LOCK TABLES `oauth_clients` WRITE;
/*!40000 ALTER TABLE `oauth_clients` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_personal_access_clients`
--

DROP TABLE IF EXISTS `oauth_personal_access_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_personal_access_clients`
--

LOCK TABLES `oauth_personal_access_clients` WRITE;
/*!40000 ALTER TABLE `oauth_personal_access_clients` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_personal_access_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_refresh_tokens`
--

DROP TABLE IF EXISTS `oauth_refresh_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_refresh_tokens`
--

LOCK TABLES `oauth_refresh_tokens` WRITE;
/*!40000 ALTER TABLE `oauth_refresh_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_refresh_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `option_datas`
--

DROP TABLE IF EXISTS `option_datas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `option_datas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'option_name',
  `label` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Option Name',
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'text',
  `value_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'text',
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int(10) unsigned DEFAULT 12,
  `props` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`props`)),
  `can_delete` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=147 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `option_datas`
--

LOCK TABLES `option_datas` WRITE;
/*!40000 ALTER TABLE `option_datas` DISABLE KEYS */;
INSERT INTO `option_datas` VALUES (1,1,'cache_data_time','Thời gian lưu cache của Dữ liệu từ DB','number','number',NULL,1,'[]',0,'2022-08-07 04:26:24','2022-08-07 04:26:24'),(2,1,'cache_view_time','Thời gian lưu cache của view','number','number',NULL,2,'[]',0,'2022-08-07 04:26:24','2022-08-07 04:26:24'),(3,1,'send_mail_notification','Gửi mail thông báo','checkbox','boolean',NULL,3,'{\"template\":\"switch\"}',0,'2022-08-07 04:26:24','2022-08-07 04:26:24'),(4,1,'mail_notification','Email nhận thông báo (ngăn cách bằng dấu phẩy (,))','maillist','text',NULL,4,'[]',0,'2022-08-07 04:26:24','2022-08-07 04:26:24'),(5,2,'mail_driver','Mail Drive','text','text','smtp',1,'{\"placeholder\":\"V\\u00ed d\\u1ee5: smtp\"}',0,'2022-08-07 04:26:24','2022-08-07 04:26:24'),(6,2,'mail_host','Mail host','text','text','smtp.gmail.com',2,'{\"placeholder\":\"V\\u00ed d\\u1ee5: smtp.gmail.com\"}',0,'2022-08-07 04:26:24','2022-08-07 04:26:24'),(7,2,'mail_post','Mail Port','number','text','587',3,'{\"placeholder\":\"V\\u00ed d\\u1ee5: 587\"}',0,'2022-08-07 04:26:24','2022-08-07 04:26:24'),(8,2,'mail_encryption','Chuẩn mã hóa','text','text','tls',4,'{\"placeholder\":\"V\\u00ed d\\u1ee5: tls\"}',0,'2022-08-07 04:26:24','2022-08-07 04:26:24'),(9,2,'mail_username','Tài khoản đăng nhập mail','text','text',NULL,5,'{\"placeholder\":\"V\\u00ed d\\u1ee5: example@domain.com\"}',0,'2022-08-07 04:26:24','2022-08-07 04:26:24'),(10,2,'mail_password','Mật khẩu','password','text',NULL,6,'{\"placeholder\":\"Nh\\u1eadp m\\u1eadt kh\\u1ea9u \\u0111\\u0103ng nh\\u1eadp email\"}',0,'2022-08-07 04:26:24','2022-08-07 04:26:24'),(11,2,'mail_from_address','Email gửi đi (fake)','text','text','example@domain.com',7,'{\"placeholder\":\"V\\u00ed d\\u1ee5: example@domain.com\"}',0,'2022-08-07 04:26:24','2022-08-07 04:26:24'),(12,2,'mail_from_name','Tên người gửi','text','text',NULL,8,'{\"placeholder\":\"V\\u00ed d\\u1ee5: Nguy\\u1ec5n V\\u0103n A ho\\u1eb7c t\\u00ean c\\u00f4ng ty\"}',0,'2022-08-07 04:26:24','2022-08-07 04:26:24'),(13,3,'site_name','Tên trang web','text','text','Tên website',1,'[]',0,'2022-08-07 04:26:24','2022-08-07 04:26:24'),(14,3,'slogan','Khẩu hiệu','text','text','Nghĩ lớn - Làm lớn',2,'[]',0,'2022-08-07 04:26:24','2022-08-07 04:26:24'),(15,3,'title','Tiêu đề trang','text','text','Tên website',3,'[]',0,'2022-08-07 04:26:25','2022-08-07 04:26:25'),(16,3,'logo','Logo','media','text','',4,'[]',0,'2022-08-07 04:26:25','2022-08-07 04:26:25'),(17,3,'mobile_logo','Mobile Logo','media','text','',5,'{\"@type\":\"image\"}',0,'2022-08-07 04:26:25','2022-08-07 04:26:25'),(18,3,'footer_logo','Footer Logo','media','text','',6,'[]',0,'2022-08-07 04:26:25','2022-08-07 04:26:25'),(19,3,'web_image','Hình ảnh đại diện cho web','media','text','',7,'[]',0,'2022-08-07 04:26:25','2022-08-07 04:26:25'),(20,3,'favicon','Biệu tượng cho trang web','media','text','',8,'[]',0,'2022-08-07 04:26:25','2022-08-07 04:26:25'),(21,3,'admin_page_logo','Logo Trang Admin','media','text','',9,'[]',0,'2022-08-07 04:26:25','2022-08-07 04:26:25'),(22,3,'admin_login_logo','Logo Trang đăng nhập admin','media','text','',10,'[]',0,'2022-08-07 04:26:25','2022-08-07 04:26:25'),(23,3,'meta_title','Tiêu đề seo','text','text','Tên website',11,'[]',0,'2022-08-07 04:26:25','2022-08-07 04:26:25'),(24,3,'meta_description','Mô tả website','textarea','text','Đôi nét về website của bạn',12,'[]',0,'2022-08-07 04:26:25','2022-08-07 04:26:25'),(25,3,'keywords','Từ khóa','text','text','ten trang web',13,'[]',0,'2022-08-07 04:26:25','2022-08-07 04:26:25'),(26,3,'email','Địa chỉ email','email','text','',14,'[]',0,'2022-08-07 04:26:25','2022-08-07 04:26:25'),(27,3,'phone_number','Số điện thoại','tel','text','',15,'[]',0,'2022-08-07 04:26:25','2022-08-07 04:26:25'),(28,3,'address','Địa chỉ','text','text','',16,'[]',0,'2022-08-07 04:26:25','2022-08-07 04:26:25'),(29,4,'post_show_list_type','Ưu tiên hiển thị trong các mục bài viết','radio','text','post',1,'{\"data\":{\"post\":\"T\\u1ea5t c\\u1ea3 tin b\\u00e0i\",\"category\":\"Danh m\\u1ee5c ho\\u1eb7c danh m\\u1ee5c con\"}}',0,'2022-08-07 04:26:25','2022-08-07 04:26:25'),(30,4,'post_per_page','Số lượng bài viết hiển thị trên một trang','number','number','12',2,'{\"min\":1}',0,'2022-08-07 04:26:26','2022-08-07 04:26:26'),(31,4,'page_per_page','Số lượng trang con hiển thị trên một trang','number','number','12',3,'{\"min\":1}',0,'2022-08-07 04:26:26','2022-08-07 04:26:26'),(32,4,'product_per_page','Số lượng sản phẩm hiển thị trên một trang','number','number','10',4,'{\"min\":1}',0,'2022-08-07 04:26:26','2022-08-07 04:26:26'),(33,4,'project_per_page','Số lượng dự án hiển thị trên một trang','number','number','10',5,'{\"min\":1}',0,'2022-08-07 04:26:26','2022-08-07 04:26:26'),(34,4,'result_per_page','Số lượng kết quả tìm kiếm hiển thị trên một trang','number','number','10',6,'{\"min\":1}',0,'2022-08-07 04:26:26','2022-08-07 04:26:26'),(35,5,'general_title','Tiêu đề chung','text','text',NULL,1,'{\"placeholder\":\"Nh\\u1eadp ti\\u00eau \\u0111\\u1ec1 m\\u1eb7c \\u0111\\u1ecbnh chung cho t\\u1ea5t c\\u00e3 b\\u00e0i vi\\u1ebft, trang, d\\u1ef1 \\u00e1n, s\\u1ea3n ph\\u1ea9m\"}',0,'2022-08-07 04:26:26','2022-08-07 04:26:26'),(36,5,'general_description','Mô tả chung','textarea','text',NULL,2,'{\"placeholder\":\"Nh\\u1eadp m\\u00f4 t\\u1ea3 m\\u1eb7c \\u0111\\u1ecbnh chung cho t\\u1ea5t c\\u00e3 b\\u00e0i vi\\u1ebft, trang, d\\u1ef1 \\u00e1n, s\\u1ea3n ph\\u1ea9m\"}',0,'2022-08-07 04:26:26','2022-08-07 04:26:26'),(37,5,'general_keywords','Từ khóa chung','text','text',NULL,3,'{\"placeholder\":\"Nh\\u1eadp t\\u1eeb kh\\u00f3a m\\u1eb7c \\u0111\\u1ecbnh chung cho t\\u1ea5t c\\u00e3 b\\u00e0i vi\\u1ebft, trang, d\\u1ef1 \\u00e1n, s\\u1ea3n ph\\u1ea9m\"}',0,'2022-08-07 04:26:26','2022-08-07 04:26:26'),(38,5,'post_title','Tiêu đề Bài viết','text','text',NULL,4,'{\"placeholder\":\"Nh\\u1eadp ti\\u00eau \\u0111\\u1ec1 m\\u1eb7c \\u0111\\u1ecbnh cho B\\u00e0i vi\\u1ebft\"}',0,'2022-08-07 04:26:26','2022-08-07 04:26:26'),(39,5,'post_description','Mô tả Bài viết','textarea','text',NULL,5,'{\"placeholder\":\"Nh\\u1eadp m\\u00f4 t\\u1ea3 m\\u1eb7c \\u0111\\u1ecbnh cho B\\u00e0i vi\\u1ebft\"}',0,'2022-08-07 04:26:26','2022-08-07 04:26:26'),(40,5,'post_keywords','Từ khóa Bài viết','text','text',NULL,6,'{\"placeholder\":\"Nh\\u1eadp t\\u1eeb kh\\u00f3a m\\u1eb7c \\u0111\\u1ecbnh cho B\\u00e0i vi\\u1ebft\"}',0,'2022-08-07 04:26:26','2022-08-07 04:26:26'),(41,5,'product_title','Tiêu đề / tên sản phẩm','text','text',NULL,7,'{\"placeholder\":\"Nh\\u1eadp ti\\u00eau \\u0111\\u1ec1 m\\u1eb7c \\u0111\\u1ecbnh cho s\\u1ea3n ph\\u1ea9m\"}',0,'2022-08-07 04:26:26','2022-08-07 04:26:26'),(42,5,'product_description','Mô tả sản phẩm','textarea','text',NULL,8,'{\"placeholder\":\"Nh\\u1eadp m\\u00f4 t\\u1ea3 m\\u1eb7c \\u0111\\u1ecbnh cho s\\u1ea3n ph\\u1ea9m\"}',0,'2022-08-07 04:26:26','2022-08-07 04:26:26'),(43,5,'product_keywords','Từ khóa sản phẩm','text','text',NULL,9,'{\"placeholder\":\"Nh\\u1eadp t\\u1eeb kh\\u00f3a m\\u1eb7c \\u0111\\u1ecbnh cho s\\u1ea3n ph\\u1ea9m\"}',0,'2022-08-07 04:26:26','2022-08-07 04:26:26'),(44,5,'project_title','Tiêu đề / tên dự án','text','text',NULL,10,'{\"placeholder\":\"Nh\\u1eadp ti\\u00eau \\u0111\\u1ec1 m\\u1eb7c \\u0111\\u1ecbnh cho d\\u1ef1 \\u00e1n\"}',0,'2022-08-07 04:26:26','2022-08-07 04:26:26'),(45,5,'project_description','Mô tả dự án','textarea','text',NULL,11,'{\"placeholder\":\"Nh\\u1eadp m\\u00f4 t\\u1ea3 m\\u1eb7c \\u0111\\u1ecbnh cho d\\u1ef1 \\u00e1n\"}',0,'2022-08-07 04:26:26','2022-08-07 04:26:26'),(46,5,'project_keywords','Từ khóa dự án','text','text',NULL,12,'{\"placeholder\":\"Nh\\u1eadp t\\u1eeb kh\\u00f3a m\\u1eb7c \\u0111\\u1ecbnh cho d\\u1ef1 \\u00e1n\"}',0,'2022-08-07 04:26:26','2022-08-07 04:26:26'),(47,5,'page_title','Tiêu đề trang','text','text',NULL,13,'{\"placeholder\":\"Nh\\u1eadp ti\\u00eau \\u0111\\u1ec1 m\\u1eb7c \\u0111\\u1ecbnh cho trang\"}',0,'2022-08-07 04:26:26','2022-08-07 04:26:26'),(48,5,'page_description','Mô tả trang','textarea','text',NULL,14,'{\"placeholder\":\"Nh\\u1eadp m\\u00f4 t\\u1ea3 m\\u1eb7c \\u0111\\u1ecbnh cho trang\"}',0,'2022-08-07 04:26:26','2022-08-07 04:26:26'),(49,5,'page_keywords','Từ khóa trang','text','text',NULL,15,'{\"placeholder\":\"Nh\\u1eadp t\\u1eeb kh\\u00f3a m\\u1eb7c \\u0111\\u1ecbnh cho trang\"}',0,'2022-08-07 04:26:27','2022-08-07 04:26:27'),(50,6,'show_mode','Ưu tiên hiển thị','radio','text','posts',1,'{\"data\":{\"posts\":\"T\\u1ea5t c\\u1ea3 tin b\\u00e0i\",\"categories\":\"Danh m\\u1ee5c ho\\u1eb7c danh m\\u1ee5c con\"}}',0,'2022-08-07 04:26:27','2022-08-07 04:26:27'),(51,6,'per_page','Số bài viết hiển thị trên một trang','number','number','12',2,'{\"min\":1}',0,'2022-08-07 04:26:27','2022-08-07 04:26:27'),(52,6,'comment_approve_request','Duyệt bình luận','checkbox','boolean',NULL,3,'{\"template\":\"switch\"}',0,'2022-08-07 04:26:27','2022-08-07 04:26:27'),(53,7,'sorttype','kiểu sắp xếp SP','crazyselect','text',NULL,1,'{\"call\":\"get_product_sortby_options\"}',0,'2022-08-07 04:26:27','2022-08-07 04:26:27'),(54,7,'per_page','Số sản phẩm hiển thị trên một trang','number','number','12',2,'{\"min\":1}',0,'2022-08-07 04:26:27','2022-08-07 04:26:27'),(55,7,'comment_approve_request','Duyệt bình luận','checkbox','boolean',NULL,3,'{\"template\":\"switch\"}',0,'2022-08-07 04:26:27','2022-08-07 04:26:27'),(56,7,'review_approve_request','Duyệt Đánh giá','checkbox','boolean',NULL,4,'{\"template\":\"switch\"}',0,'2022-08-07 04:26:27','2022-08-07 04:26:27'),(57,7,'category_url_type','Kiểu url danh mục','radio','text','unique',5,'{\"data\":{\"unique\":\"Danh m\\u1ee5c \\u0111\\u01a1n duy nh\\u1ea5t\",\"level\":\"Cha \\/ con\"}}',0,'2022-08-07 04:26:27','2022-08-07 04:26:27'),(58,8,'show_mode','Ưu tiên hiển thị','radio','text','posts',1,'{\"data\":{\"projects\":\"T\\u1ea5t c\\u1ea3 d\\u1ef1 \\u00e1n\",\"categories\":\"Danh m\\u1ee5c ho\\u1eb7c danh m\\u1ee5c con\"}}',0,'2022-08-07 04:26:27','2022-08-07 04:26:27'),(59,8,'per_page','Số Dự án hiển thị trên một trang','number','number','12',2,'{\"min\":1}',0,'2022-08-07 04:26:27','2022-08-07 04:26:27'),(60,8,'comment_approve_request','Duyệt bình luận','checkbox','boolean',NULL,3,'{\"template\":\"switch\"}',0,'2022-08-07 04:26:27','2022-08-07 04:26:27'),(61,9,'allow_place_order','Allow Place Order','switch','boolean','1',3,'{\"check_label\":\"Cho ph\\u00e9p \\u0111\\u1eb7t h\\u00e0ng\"}',0,'2022-08-07 04:26:27','2022-08-07 04:26:27'),(62,9,'confirm_order','Xác nhận đơn hàng<br>(Khi thanh toán bằng tiền mặt)','switch','boolean','1',2,'{\"check_label\":\"C\\u00f3\"}',0,'2022-08-07 04:26:27','2022-08-07 04:26:27'),(63,9,'decimals','Số ký tự thập phân','number','number','2',4,'{\"min\":0,\"max\":10,\"step\":1}',0,'2022-08-07 04:26:27','2022-08-07 04:26:27'),(64,9,'decimal_poiter','Ký tự ngăn cách phẩn thập phân','select','text',',',5,'{\"data\":{\",\":\"\\u0110\\u1ea5u ph\\u1ea9y (.)\",\".\":\"\\u0110\\u1ea5u ch\\u1ea5m (.)\"}}',0,'2022-08-07 04:26:28','2022-08-07 04:26:28'),(65,9,'thousands_sep','Ký tự ngăn cách hàng nghìn','select','text','.',6,'{\"data\":{\".\":\"\\u0110\\u1ea5u ch\\u1ea5m (.)\",\",\":\"\\u0110\\u1ea5u ph\\u1ea9y (.)\"}}',0,'2022-08-07 04:26:28','2022-08-07 04:26:28'),(66,9,'currency_type','Loại tiền tệ','text','text','Đ',7,'[]',0,'2022-08-07 04:26:28','2022-08-07 04:26:28'),(67,9,'currency_position','Vị trí đơn vị tiền','select','text','right',8,'{\"data\":{\"left\":\"Tr\\u00e1i\",\"right\":\"Ph\\u1ea3i\"}}',0,'2022-08-07 04:26:28','2022-08-07 04:26:28'),(68,10,'facebook','Facebook JS SDK','textarea','text','  <div id=\"fb-root\"></div>\n            <script>(function(d, s, id) {\n              var js, fjs = d.getElementsByTagName(s)[0];\n              if (d.getElementById(id)) return;\n              js = d.createElement(s); js.id = id;\n              js.src = \"https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0\";\n              fjs.parentNode.insertBefore(js, fjs);\n            }(document, \'script\', \'facebook-jssdk\'));</script>',1,'{\"placeholder\":\"M\\u00e3 SDK t\\u1eeb \\u1ee9ng d\\u1ee5ng c\\u1ee7a b\\u1ea1n\",\"className\":\"auto-height\"}',0,'2022-08-07 04:26:28','2022-08-07 04:26:28'),(69,10,'twitter','Twitter JS SDK','textarea','text','<script>window.twttr = (function(d, s, id) {\n                var js, fjs = d.getElementsByTagName(s)[0],\n                  t = window.twttr || {};\n                if (d.getElementById(id)) return t;\n                js = d.createElement(s);\n                js.id = id;\n                js.src = \"https://platform.twitter.com/widgets.js\";\n                fjs.parentNode.insertBefore(js, fjs);\n              \n                t._e = [];\n                t.ready = function(f) {\n                  t._e.push(f);\n                };\n              \n                return t;\n              }(document, \"script\", \"twitter-wjs\"));</script>',2,'{\"placeholder\":\"M\\u00e3 SDK t\\u1eeb \\u1ee9ng d\\u1ee5ng c\\u1ee7a b\\u1ea1n\",\"className\":\"auto-height\"}',0,'2022-08-07 04:26:28','2022-08-07 04:26:28'),(70,11,'apple_touch_icon_57x57','Apple touch icon 57x57','file','text',NULL,1,'[]',0,'2022-08-07 04:26:28','2022-08-07 04:26:28'),(71,11,'apple_touch_icon_60x60','Apple touch icon 60x60','file','text',NULL,2,'[]',0,'2022-08-07 04:26:28','2022-08-07 04:26:28'),(72,11,'apple_touch_icon_72x72','Apple touch icon 72x72','file','text',NULL,3,'[]',0,'2022-08-07 04:26:28','2022-08-07 04:26:28'),(73,11,'apple_touch_icon_76x76','Apple touch icon 76x76','file','text',NULL,4,'[]',0,'2022-08-07 04:26:28','2022-08-07 04:26:28'),(74,11,'apple_touch_icon_114x114','Apple touch icon 114x114','file','text',NULL,5,'[]',0,'2022-08-07 04:26:28','2022-08-07 04:26:28'),(75,11,'apple_touch_icon_120x120','Apple touch icon 120x120','file','text',NULL,6,'[]',0,'2022-08-07 04:26:28','2022-08-07 04:26:28'),(76,11,'apple_touch_icon_144x144','Apple touch icon 144x144','file','text',NULL,7,'[]',0,'2022-08-07 04:26:28','2022-08-07 04:26:28'),(77,11,'apple_touch_icon_152x152','Apple touch icon 152x152','file','text',NULL,8,'[]',0,'2022-08-07 04:26:28','2022-08-07 04:26:28'),(78,11,'favicon','Biệu tượng cho trang web','file','text','',9,'[]',0,'2022-08-07 04:26:28','2022-08-07 04:26:28'),(79,11,'favicon_16x16','Biệu tượng 16x16','file','text','',10,'[]',0,'2022-08-07 04:26:28','2022-08-07 04:26:28'),(80,11,'favicon_32x32','Biệu tượng 32x32','file','text','',11,'[]',0,'2022-08-07 04:26:28','2022-08-07 04:26:28'),(81,11,'favicon_96x96','Biệu tượng 96x96','file','text','',12,'[]',0,'2022-08-07 04:26:29','2022-08-07 04:26:29'),(82,11,'favicon_128x128','Biệu tượng 128x128','file','text','',13,'[]',0,'2022-08-07 04:26:29','2022-08-07 04:26:29'),(83,11,'favicon_196x196','Biệu tượng 196x196','file','text','',14,'[]',0,'2022-08-07 04:26:29','2022-08-07 04:26:29'),(84,11,'mstile_144x144','MS Tile 144x144','file','text','',15,'[]',0,'2022-08-07 04:26:29','2022-08-07 04:26:29'),(85,11,'mstile_70x70','MS Tile 70x70','file','text','',16,'[]',0,'2022-08-07 04:26:29','2022-08-07 04:26:29'),(86,11,'mstile_150x150','MS Tile 150x150','file','text','',17,'[]',0,'2022-08-07 04:26:29','2022-08-07 04:26:29'),(87,11,'mstile_310x150','MS Tile 310x150','file','text','',18,'[]',0,'2022-08-07 04:26:29','2022-08-07 04:26:29'),(88,11,'mstile_310x310','MS Tile 310x310','file','text','',19,'[]',0,'2022-08-07 04:26:29','2022-08-07 04:26:29'),(89,12,'active','Kích hoạt PWA','switch','boolean',NULL,1,'[]',0,'2022-08-07 04:26:29','2022-08-07 04:26:29'),(90,12,'short_name','Short Name<br><small>(Tên ngắn ngọn 1 - 3 từ)</small>','text','text',NULL,2,'{\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\",\"default\":\"My App\"}',0,'2022-08-07 04:26:29','2022-08-07 04:26:29'),(91,12,'name','Name<br><small>(Tên Đẩy dủ)</small>','text','text',NULL,3,'{\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\",\"default\":\"My Web App Full Name\"}',0,'2022-08-07 04:26:29','2022-08-07 04:26:29'),(92,12,'description','Mô tả ngắn','textarea','text',NULL,4,'{\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\",\"default\":\"\"}',0,'2022-08-07 04:26:29','2022-08-07 04:26:29'),(93,12,'start_url','Đường dẫn nguồn','text','text',NULL,5,'{\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\",\"default\":\"\\/?source=pwa\"}',0,'2022-08-07 04:26:29','2022-08-07 04:26:29'),(94,12,'scope','Phạm vi truy cập','text','text',NULL,6,'{\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\",\"default\":\"\\/\"}',0,'2022-08-07 04:26:29','2022-08-07 04:26:29'),(95,12,'display','Hiển thị','crazyselect','text',NULL,7,'{\"data\":{\"standalone\":\"Stand Alone\",\"fullscreen\":\"Full-Screen\",\"minimal-ui\":\"Minimal-UI\",\"browser\":\"Browser\"},\"default\":\"standalone\"}',0,'2022-08-07 04:26:29','2022-08-07 04:26:29'),(96,12,'background_color','Màu nền','colorpicker','text',NULL,8,'{\"default\":\"#3367D6\"}',0,'2022-08-07 04:26:29','2022-08-07 04:26:29'),(97,12,'theme_color','Màu chủ đạo','colorpicker','text',NULL,9,'{\"default\":\"#3367D6\"}',0,'2022-08-07 04:26:29','2022-08-07 04:26:29'),(98,12,'icon_192_png','Biệu tượng 192x192 (png)','media','text',NULL,10,'{\"@type\":\"image\"}',0,'2022-08-07 04:26:29','2022-08-07 04:26:29'),(99,12,'icon_512_png','Biệu tượng 512x512 (png)','media','text',NULL,11,'{\"@type\":\"image\"}',0,'2022-08-07 04:26:29','2022-08-07 04:26:29'),(100,12,'icon_512_svg','Biệu tượng 512x512 (svg)','media','text',NULL,12,'{\"@type\":\"image\"}',0,'2022-08-07 04:26:29','2022-08-07 04:26:29'),(101,13,'https_redirect','Chuyển hướng https','switch','boolean',NULL,1,'[]',0,'2022-08-07 04:26:30','2022-08-07 04:26:30'),(102,18,'web_type','Thời gian lưu cache của Dữ liệu từ DB','crazyselect','text','default',1,'{\"call\":\"get_web_type_options\",\"default\":\"default\"}',0,'2022-08-07 04:26:30','2022-08-07 04:27:19'),(103,18,'theme_id','Thời gian lưu cache của Dữ liệu từ DB','crazyselect','number','1',2,'{\"call\":\"get_theme_options\"}',0,'2022-08-07 04:26:30','2022-08-16 13:58:24'),(104,18,'installed_themes','Danh sách các giao diện đã thiết lập','checklist','text','[1,2]',3,'[]',0,'2022-08-07 04:26:30','2022-08-07 09:34:23'),(105,18,'domain','domain','text','text',NULL,4,'{\"text\":\"T\\u00ean mi\\u1ec1n\",\"placeholder\":\"V\\u00ed d\\u1ee5: domain.com.vn\"}',0,'2022-08-07 04:26:30','2022-08-07 04:26:30'),(106,18,'alias_domain','alias_domain','text','text',NULL,5,'{\"text\":\"T\\u00ean mi\\u1ec1n Alias\",\"placeholder\":\"V\\u00ed d\\u1ee5: domain.com.vn\"}',0,'2022-08-07 04:26:30','2022-08-07 04:26:30'),(107,18,'ssl','ssl','switch','text','0',6,'{\"text\":\"SSL\",\"check_label\":\"K\\u00edch ho\\u1ea1t SSL\"}',0,'2022-08-07 04:26:31','2022-08-07 04:27:19'),(108,19,'show_preloader','Preloader','switch','boolean','1',1,'{\"check_label\":\"Hi\\u1ec3n th\\u1ecb Preloader\"}',0,'2022-08-07 09:34:26','2022-08-07 09:34:57'),(109,19,'theme_primary_color','Màu chủ đạo','coloris','text','#2a9d8f',2,'[]',0,'2022-08-07 09:34:27','2022-08-07 09:34:58'),(110,19,'plugins','Plugins','area','text','plugins',3,'{\"@area\":\"plugins\",\"@title-by\":\"title\"}',0,'2022-08-07 09:34:27','2022-08-07 09:34:27'),(111,21,'widgets','Nội dung footer','area','text','footer_slogans',1,'{\"area\":\"footer_widgets\",\"@title-by\":\"title\"}',0,'2022-08-07 09:34:27','2022-08-07 09:34:27'),(113,21,'copyright','Nôi dung mục copyright','textarea','text',NULL,2,'{\"className\":\"auto-height\",\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3\"}',0,'2022-08-07 09:34:27','2022-08-07 11:19:23'),(114,23,'title','Tiêu đề (Tùy chọn)','text','text',NULL,1,'{\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"}',0,'2022-08-07 09:34:27','2022-08-07 09:34:27'),(115,23,'description','Mô tả (Tùy chọn(','textarea','text',NULL,2,'{\"placeholder\":\"Vi\\u1ebft g\\u00ec \\u0111\\u00f3...\"}',0,'2022-08-07 09:34:27','2022-08-07 09:34:27'),(116,23,'thumbnail','Thumbnail (Tùy chọn)','media','text',NULL,3,'{\"@filetype\":\"png,jpg,jpeg,gif,bmp\"}',0,'2022-08-07 09:34:27','2022-08-07 09:34:27'),(117,23,'content_area','Nội dung Trang chủ','area','text','home_area',4,'{\"@area\":\"home_area\",\"@title-by\":\"title\"}',0,'2022-08-07 09:34:27','2022-08-07 09:34:27'),(118,21,'logos','Logo đối tác','area','text','footer_logos',2,'{\"area\":\"footer_logos\",\"@title-by\":\"title\"}',0,'2022-08-07 11:17:26','2022-08-07 11:17:26'),(119,20,'show_topbar','Hiển thị topbar','switch','boolean','1',1,'{\"check_label\":\"Show\"}',0,'2022-08-07 17:07:06','2022-08-08 15:15:35'),(120,20,'topbar_notify_html','Text thông báo / Chào mừng','ckeditor','text','<p>Đăng ký ngay để được <a href=\"/\">giảm giá 50%</a></p>',2,'{\"class\":\"text-editor\"}',0,'2022-08-07 17:07:06','2022-08-08 09:02:10'),(121,20,'topbar_right_menu_id','Top Right Menu','crazyselect','text','2',3,'{\"call\":\"get_menu_options\"}',0,'2022-08-07 17:07:06','2022-08-08 09:41:35'),(122,20,'logo','Logo (Tùy chọn)','media','text','2',4,'{\"@filetype\":\"png,jpg,jpeg,gif,bmp\"}',0,'2022-08-07 17:07:06','2022-08-08 15:15:35'),(123,20,'category_menu_text','Menu Text','text','text',NULL,5,'{\"placeholder\":\"V\\u00ed d\\u1ee5: Danh m\\u1ee5c\"}',0,'2022-08-07 17:07:06','2022-08-07 17:07:06'),(124,20,'category_menu_id','Menu Danh mục','crazyselect','text','1',6,'{\"call\":\"get_menu_options\"}',0,'2022-08-07 17:07:06','2022-08-08 09:41:35'),(125,20,'show_search_form','Hiển thị Form Tìm kiếm','switch','boolean','1',7,'{\"check_label\":\"Show\"}',0,'2022-08-07 17:07:06','2022-08-08 15:15:35'),(126,20,'show_extra_button','Hiển thị nút mở rộng','switch','boolean','1',8,'{\"check_label\":\"Show\"}',0,'2022-08-07 17:07:06','2022-08-08 15:15:35'),(127,20,'extra_button_url','Url <br> <small>(liên kết cho nút mở rộng)</small>','text','text','/',9,'{\"placeholder\":\"http:\\/\\/\"}',0,'2022-08-07 17:07:06','2022-08-08 09:02:10'),(128,20,'extra_button_text','Text <br> <small>(liên kết cho nút mở rộng)</small>','text','text','Đăng ký',10,'{\"placeholder\":\"V\\u00ed d\\u1ee5 \\u0111\\u0103ng k\\u00fd\"}',0,'2022-08-07 17:07:06','2022-08-08 09:02:10'),(129,20,'extra_button_icon','Icon <br> <small>(icon cho nút mở rộng)</small>','iconpicker','text',NULL,11,'{\"placeholder\":\"V\\u00ed d\\u1ee5 icon-4\"}',0,'2022-08-07 17:07:07','2022-08-07 17:07:07'),(130,24,'show_breadcrumb','Breadcrumb','switch','boolean','1',1,'{\"check_label\":\"Hi\\u1ec3n th\\u1ecb breadcrumb\"}',0,'2022-08-09 03:33:46','2022-08-14 12:09:22'),(131,24,'list_style','Style Danh sách','radio','text','style-2',2,'{\"data\":{\"style-1\":\"Style 1\",\"style-2\":\"Style 2\",\"course-one\":\"Kh\\u00f3a H\\u1ecdc - 1\",\"course-two\":\"Kh\\u00f3a H\\u1ecdc - 2\",\"course-five\":\"Kh\\u00f3a H\\u1ecdc - 5\"},\"default\":\"style-1\"}',0,'2022-08-09 03:33:46','2022-08-14 09:49:37'),(132,24,'list_layout','Layout Danh sách','radio','text','sidebar',3,'{\"data\":{\"sidebar\":\"sidebar\",\"fullwidth\":\"fullwidth\"},\"default\":\"sidebar\"}',0,'2022-08-09 03:33:46','2022-08-14 08:45:36'),(133,24,'list_type','Kiểu Danh sách','radio','text','grid',4,'{\"data\":{\"standard\":\"Standard\",\"list\":\"Danh s\\u00e1ch\",\"grid\":\"L\\u01b0\\u1edbi (grid)\"},\"default\":\"grid\"}',0,'2022-08-09 03:33:46','2022-08-14 08:56:01'),(134,24,'detail_style','Style chi tiết','radio','text','1',5,'{\"data\":{\"1\":\"Style 1\",\"2\":\"Style 2\"},\"default\":\"1\"}',0,'2022-08-09 03:33:46','2022-08-09 13:37:03'),(135,24,'post_settings','Mục được thiết lập','area','text','post_settings',8,'{\"@area\":\"post_settings\",\"@title-by\":\"title\"}',0,'2022-08-09 03:33:46','2022-08-14 19:27:00'),(136,25,'show_breadcrumb','Breadcrumb','switch','boolean','1',1,'{\"check_label\":\"Hi\\u1ec3n th\\u1ecb breadcrumb\"}',0,'2022-08-09 03:33:46','2022-08-14 20:08:20'),(137,25,'list_style','Style Danh sách','radio','text','style-1',2,'{\"data\":{\"style-1\":\"Style 1\",\"style-2\":\"Style 2\"},\"default\":\"1\"}',0,'2022-08-09 03:33:46','2022-08-14 20:08:20'),(138,25,'list_layout','Layout Danh sách','radio','text','sidebar',3,'{\"data\":{\"sidebar\":\"sidebar\",\"fullwidth\":\"fullwidth\"},\"default\":\"sidebar\"}',0,'2022-08-09 03:33:46','2022-08-09 03:37:02'),(139,25,'list_type','Kiểu Danh sách','radio','text','list',4,'{\"data\":{\"standard\":\"Standard\",\"list\":\"Danh s\\u00e1ch\",\"grid\":\"L\\u01b0\\u1edbi (grid)\"},\"default\":\"grid\"}',0,'2022-08-09 03:33:46','2022-08-14 20:08:20'),(140,25,'detail_style','Style chi tiết','radio','text','1',5,'{\"data\":{\"1\":\"Style 1\",\"2\":\"Style 2\"},\"default\":\"1\"}',0,'2022-08-09 03:33:46','2022-08-09 03:37:02'),(141,25,'page_settings','Mục được thiết lập','area','text','page_settings',6,'{\"@area\":\"page_settings\",\"@title-by\":\"title\"}',0,'2022-08-09 03:33:46','2022-08-09 03:33:46'),(142,22,'sidebar_posts','Post sidebar','area','text','sidebar_posts',1,'{\"area\":\"sidebar_posts\",\"@title-by\":\"title\"}',0,'2022-08-14 09:56:44','2022-08-14 09:56:44'),(143,22,'sidebar_pages','Page sidebar','area','text','sidebar_pages',2,'{\"area\":\"sidebar_pages\",\"@title-by\":\"title\"}',0,'2022-08-14 09:56:44','2022-08-14 09:56:44'),(144,22,'sidebar_courses','Course sidebar','area','text','sidebar_courses',3,'{\"area\":\"sidebar_courses\",\"@title-by\":\"title\"}',0,'2022-08-14 09:56:44','2022-08-14 09:56:44'),(145,24,'detail_layout','Layout Chi tiết','radio','text',NULL,6,'{\"data\":{\"sidebar\":\"sidebar\",\"fullwidth\":\"fullwidth\"},\"default\":\"sidebar\"}',0,'2022-08-14 19:27:00','2022-08-14 19:27:00'),(146,24,'detail_footer_area','Nội dung mở rộng','area','text','post_detail_footer',7,'{\"area\":\"post_detail_footer\",\"@title-by\":\"title\"}',0,'2022-08-14 19:27:00','2022-08-14 19:27:00');
/*!40000 ALTER TABLE `option_datas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `option_groups`
--

DROP TABLE IF EXISTS `option_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `option_groups` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `option_id` bigint(20) unsigned NOT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'settings',
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'settings',
  `config` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `option_groups`
--

LOCK TABLES `option_groups` WRITE;
/*!40000 ALTER TABLE `option_groups` DISABLE KEYS */;
INSERT INTO `option_groups` VALUES (1,1,'Cài đặt hệ thống','system',NULL,'2022-08-07 04:26:24','2022-08-07 04:26:24'),(2,1,'Thiết lập Email','mailer',NULL,'2022-08-07 04:26:24','2022-08-07 04:26:24'),(3,1,'Thông tin website','siteinfo',NULL,'2022-08-07 04:26:24','2022-08-07 04:26:24'),(4,1,'Thiết lập hiển thị','display',NULL,'2022-08-07 04:26:25','2022-08-07 04:26:25'),(5,1,'Thông số mặc định','default',NULL,'2022-08-07 04:26:26','2022-08-07 04:26:26'),(6,1,'Thiết lập tin bài','posts',NULL,'2022-08-07 04:26:27','2022-08-07 04:26:27'),(7,1,'Thiết lập trang Sản phẩm','products',NULL,'2022-08-07 04:26:27','2022-08-07 04:26:27'),(8,1,'Thiết lập trang Dự án','projects',NULL,'2022-08-07 04:26:27','2022-08-07 04:26:27'),(9,1,'Thiết lập cửa hàng','ecommerce',NULL,'2022-08-07 04:26:27','2022-08-07 04:26:27'),(10,1,'Javascript SDK','jssdk',NULL,'2022-08-07 04:26:28','2022-08-07 04:26:28'),(11,1,'Biểu tượng Website','favicons',NULL,'2022-08-07 04:26:28','2022-08-07 04:26:28'),(12,1,'Thiết lập PWA','pwa',NULL,'2022-08-07 04:26:29','2022-08-07 04:26:29'),(13,2,'Đường dẫn chung','general',NULL,'2022-08-07 04:26:30','2022-08-07 04:26:30'),(14,2,'Tin Bài','posts',NULL,'2022-08-07 04:26:30','2022-08-07 04:26:30'),(15,2,'Trang Tĩnh','pages',NULL,'2022-08-07 04:26:30','2022-08-07 04:26:30'),(16,2,'Cửa hàng','shop',NULL,'2022-08-07 04:26:30','2022-08-07 04:26:30'),(17,2,'Dự án','project',NULL,'2022-08-07 04:26:30','2022-08-07 04:26:30'),(18,3,'Cấu hình web','config',NULL,'2022-08-07 04:26:30','2022-08-07 04:26:30'),(19,4,'Chung','general','[]','2022-08-07 09:34:26','2022-08-07 09:34:26'),(20,4,'Header','header','[]','2022-08-07 09:34:27','2022-08-07 09:34:27'),(21,4,'Footer','footer','[]','2022-08-07 09:34:27','2022-08-07 09:34:27'),(22,4,'Sidebar','sidebar','[]','2022-08-07 09:34:27','2022-08-07 09:34:27'),(23,4,'Trang chủ','home','[]','2022-08-07 09:34:27','2022-08-07 09:34:27'),(24,4,'Bài viết','posts','{\"name\":\"Thi\\u1ebft l\\u1eadp m\\u1ee5c \\u0111\\u0103ng b\\u00e0i\",\"layout_type\":\"single\",\"form_groups\":{\"general\":{\"title\":\"Thi\\u1ebft l\\u1eadp chung\",\"inputs\":[\"show_breadcrumb\"]},\"list\":{\"title\":\"Thi\\u1ebft l\\u1eadp danh s\\u00e1ch\",\"inputs\":[\"list_style\",\"list_layout\",\"list_type\"]},\"detail\":{\"title\":\"Thi\\u1ebft l\\u1eadp Trang chi ti\\u1ebft \",\"inputs\":[\"detail_style\",\"detail_layout\",\"detail_footer_area\"]},\"post_settings\":{\"title\":\"Thi\\u1ebft l\\u1eadp cho t\\u1eebng m\\u1ee5c\",\"className\":\"mt-3 pt-2 border-top\",\"inputs\":[\"post_settings\"]}}}','2022-08-09 03:33:46','2022-08-14 19:27:00'),(25,4,'Trang','pages','{\"name\":\"Thi\\u1ebft l\\u1eadp m\\u1ee5c \\u0111\\u0103ng b\\u00e0i\",\"layout_type\":\"single\",\"form_groups\":{\"general\":{\"title\":\"Thi\\u1ebft l\\u1eadp chung\",\"inputs\":[\"show_breadcrumb\"]},\"list\":{\"title\":\"Thi\\u1ebft l\\u1eadp danh s\\u00e1ch\",\"inputs\":[\"list_style\",\"list_layout\",\"list_type\"]},\"detail\":{\"title\":\"Thi\\u1ebft l\\u1eadp Trang chi ti\\u1ebft \",\"inputs\":[\"detail_style\",\"detail_use_feature_image\"]},\"page\":{\"title\":\"Thi\\u1ebft l\\u1eadp Trang c\\u1ee5 th\\u1ec3 \",\"inputs\":[\"page_settings\"]}}}','2022-08-09 03:33:46','2022-08-09 03:36:44');
/*!40000 ALTER TABLE `option_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `options`
--

DROP TABLE IF EXISTS `options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `options` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'Options',
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'option',
  `ref` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'base',
  `ref_id` bigint(20) unsigned DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `options`
--

LOCK TABLES `options` WRITE;
/*!40000 ALTER TABLE `options` DISABLE KEYS */;
INSERT INTO `options` VALUES (1,'Thiết lập','settings',NULL,0,'2022-08-07 04:26:24','2022-08-07 04:26:24'),(2,'Thiết lập URL','urlsettings',NULL,0,'2022-08-07 04:26:30','2022-08-07 04:26:30'),(3,'Web','web',NULL,0,'2022-08-07 04:26:30','2022-08-07 04:26:30'),(4,'Breaking Ielts','breaking-ielts','theme',1,'2022-08-07 09:34:26','2022-08-07 09:34:26');
/*!40000 ALTER TABLE `options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_address`
--

DROP TABLE IF EXISTS `order_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_address` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'billing',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region_id` bigint(20) unsigned DEFAULT 0,
  `district_id` bigint(20) unsigned DEFAULT 0,
  `ward_id` bigint(20) unsigned DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_address`
--

LOCK TABLES `order_address` WRITE;
/*!40000 ALTER TABLE `order_address` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_feedbacks`
--

DROP TABLE IF EXISTS `order_feedbacks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_feedbacks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) unsigned NOT NULL,
  `customer_id` bigint(20) unsigned DEFAULT 0,
  `user_id` bigint(20) unsigned DEFAULT 0,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'feedback',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solved` int(11) NOT NULL DEFAULT 0,
  `solved_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_feedbacks`
--

LOCK TABLES `order_feedbacks` WRITE;
/*!40000 ALTER TABLE `order_feedbacks` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_feedbacks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) unsigned NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `attr_values` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(10) unsigned NOT NULL DEFAULT 1,
  `list_price` decimal(12,2) unsigned DEFAULT 0.00,
  `final_price` decimal(12,2) unsigned DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_items`
--

LOCK TABLES `order_items` WRITE;
/*!40000 ALTER TABLE `order_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT 0,
  `customer_id` bigint(20) unsigned DEFAULT 0,
  `promo_id` bigint(20) unsigned DEFAULT NULL,
  `secret_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'order',
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_to_different_address` tinyint(1) NOT NULL DEFAULT 0,
  `payment_method_id` bigint(20) NOT NULL DEFAULT 0,
  `shipping_fee` decimal(10,2) NOT NULL DEFAULT 0.00,
  `tax` decimal(14,2) NOT NULL DEFAULT 0.00,
  `coupon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promo_type` int(10) unsigned DEFAULT 0,
  `sub_total` decimal(14,2) NOT NULL DEFAULT 0.00,
  `promo_total` decimal(14,2) NOT NULL DEFAULT 0.00,
  `total_money` decimal(14,2) NOT NULL DEFAULT 0.00,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `payment_status` int(11) NOT NULL DEFAULT 0,
  `delivery_status` int(11) NOT NULL DEFAULT 0,
  `trashed_status` int(11) NOT NULL DEFAULT 0,
  `completed_at` datetime DEFAULT NULL,
  `ordered_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
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
-- Table structure for table `payment_methods`
--

DROP TABLE IF EXISTS `payment_methods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment_methods` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guide` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `config` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `trashed_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_methods`
--

LOCK TABLES `payment_methods` WRITE;
/*!40000 ALTER TABLE `payment_methods` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment_methods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_module_group_actions`
--

DROP TABLE IF EXISTS `permission_module_group_actions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_module_group_actions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` bigint(20) unsigned DEFAULT 0,
  `action_id` bigint(20) unsigned DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_module_group_actions`
--

LOCK TABLES `permission_module_group_actions` WRITE;
/*!40000 ALTER TABLE `permission_module_group_actions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_module_group_actions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_module_roles`
--

DROP TABLE IF EXISTS `permission_module_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_module_roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `module_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_module_roles`
--

LOCK TABLES `permission_module_roles` WRITE;
/*!40000 ALTER TABLE `permission_module_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_module_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_modules`
--

DROP TABLE IF EXISTS `permission_modules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_modules` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'default',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prefix` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(10) unsigned DEFAULT 0,
  `ref` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_modules`
--

LOCK TABLES `permission_modules` WRITE;
/*!40000 ALTER TABLE `permission_modules` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_modules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_roles`
--

DROP TABLE IF EXISTS `permission_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL DEFAULT 1,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `handle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'redirect',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_roles`
--

LOCK TABLES `permission_roles` WRITE;
/*!40000 ALTER TABLE `permission_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_user_roles`
--

DROP TABLE IF EXISTS `permission_user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_user_roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_user_roles`
--

LOCK TABLES `permission_user_roles` WRITE;
/*!40000 ALTER TABLE `permission_user_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_views`
--

DROP TABLE IF EXISTS `post_views`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_views` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `view_date` date DEFAULT NULL,
  `view_total` int(10) unsigned NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_views`
--

LOCK TABLES `post_views` WRITE;
/*!40000 ALTER TABLE `post_views` DISABLE KEYS */;
/*!40000 ALTER TABLE `post_views` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `dynamic_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `parent_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `category_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `category_map` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'post',
  `content_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'text',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `privacy` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `trashed_status` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,1,1,0,0,NULL,'post','text','Khóa học','khoa-hoc',NULL,NULL,'<h3>HISTORY, PURPOSE AND USAGE</h3>\r\n<p><em>Lorem ipsum</em>, or&nbsp;<em>lipsum</em>&nbsp;as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s&nbsp;<em>De Finibus Bonorum et Malorum</em>&nbsp;for use in a type specimen book. It usually begins with:</p>\r\n<blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&rdquo;</blockquote>\r\n<p>The purpose of&nbsp;<em>lorem ipsum</em>&nbsp;is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn\'t distract from the layout. A practice not without&nbsp;<a title=\"Controversy in the Design World\" href=\"https://loremipsum.io/#controversy\">controversy</a>, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.</p>\r\n<p>The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it\'s seen all around the web; on templates, websites, and stock designs. Use our&nbsp;<a title=\"Lorem Ipsum Generator\" href=\"https://loremipsum.io/#generator\">generator</a>&nbsp;to get your own, or read on for the authoritative history of&nbsp;<em>lorem ipsum</em>.</p>',NULL,0,'public',0,NULL,'2022-08-09 03:48:57','2022-08-09 03:48:57'),(2,1,1,0,0,NULL,'post','text','khóa học 2','khoa-hoc-2',NULL,NULL,'<h3>HISTORY, PURPOSE AND USAGE</h3>\r\n<p><em>Lorem ipsum</em>, or&nbsp;<em>lipsum</em>&nbsp;as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s&nbsp;<em>De Finibus Bonorum et Malorum</em>&nbsp;for use in a type specimen book. It usually begins with:</p>\r\n<blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&rdquo;</blockquote>\r\n<p>The purpose of&nbsp;<em>lorem ipsum</em>&nbsp;is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn\'t distract from the layout. A practice not without&nbsp;<a title=\"Controversy in the Design World\" href=\"https://loremipsum.io/#controversy\">controversy</a>, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.</p>\r\n<p>The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it\'s seen all around the web; on templates, websites, and stock designs. Use our&nbsp;<a title=\"Lorem Ipsum Generator\" href=\"https://loremipsum.io/#generator\">generator</a>&nbsp;to get your own, or read on for the authoritative history of&nbsp;<em>lorem ipsum</em>.</p>',NULL,0,'public',0,NULL,'2022-08-09 03:49:31','2022-08-09 03:49:31'),(3,1,3,0,1,' 1,','post','text','Test','test',NULL,NULL,'<h3>HISTORY, PURPOSE AND USAGE</h3>\r\n<p><em>Lorem ipsum</em>, or&nbsp;<em>lipsum</em>&nbsp;as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s&nbsp;<em>De Finibus Bonorum et Malorum</em>&nbsp;for use in a type specimen book. It usually begins with:</p>\r\n<blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&rdquo;</blockquote>\r\n<p>The purpose of&nbsp;<em>lorem ipsum</em>&nbsp;is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn\'t distract from the layout. A practice not without&nbsp;<a title=\"Controversy in the Design World\" href=\"https://loremipsum.io/#controversy\">controversy</a>, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.</p>\r\n<p>The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it\'s seen all around the web; on templates, websites, and stock designs. Use our&nbsp;<a title=\"Lorem Ipsum Generator\" href=\"https://loremipsum.io/#generator\">generator</a>&nbsp;to get your own, or read on for the authoritative history of&nbsp;<em>lorem ipsum</em>.</p>\r\n<p><iframe title=\"YouTube video player\" src=\"https://www.youtube.com/embed/Ho1f3s5g8v8\" width=\"560\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></p>',NULL,0,'public',0,NULL,'2022-08-09 04:03:41','2022-08-09 04:03:41'),(4,1,3,0,1,' 1,','post','text','Test 2','test-2',NULL,NULL,'<h3>HISTORY, PURPOSE AND USAGE</h3>\r\n<p><em>Lorem ipsum</em>, or&nbsp;<em>lipsum</em>&nbsp;as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s&nbsp;<em>De Finibus Bonorum et Malorum</em>&nbsp;for use in a type specimen book. It usually begins with:</p>\r\n<blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&rdquo;</blockquote>\r\n<p>The purpose of&nbsp;<em>lorem ipsum</em>&nbsp;is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn\'t distract from the layout. A practice not without&nbsp;<a title=\"Controversy in the Design World\" href=\"https://loremipsum.io/#controversy\">controversy</a>, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.</p>\r\n<p>The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it\'s seen all around the web; on templates, websites, and stock designs. Use our&nbsp;<a title=\"Lorem Ipsum Generator\" href=\"https://loremipsum.io/#generator\">generator</a>&nbsp;to get your own, or read on for the authoritative history of&nbsp;<em>lorem ipsum</em>.</p>',NULL,0,'public',0,NULL,'2022-08-09 04:04:47','2022-08-09 04:04:47'),(5,1,2,0,0,NULL,'post','video_embed','test','test',NULL,NULL,'<h3>HISTORY, PURPOSE AND USAGE</h3>\r\n<p><em>Lorem ipsum</em>, or&nbsp;<em>lipsum</em>&nbsp;as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s&nbsp;<em>De Finibus Bonorum et Malorum</em>&nbsp;for use in a type specimen book. It usually begins with:</p>\r\n<blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&rdquo;</blockquote>\r\n<p>The purpose of&nbsp;<em>lorem ipsum</em>&nbsp;is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn\'t distract from the layout. A practice not without&nbsp;<a title=\"Controversy in the Design World\" href=\"https://loremipsum.io/#controversy\">controversy</a>, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.</p>\r\n<p>The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it\'s seen all around the web; on templates, websites, and stock designs. Use our&nbsp;<a title=\"Lorem Ipsum Generator\" href=\"https://loremipsum.io/#generator\">generator</a>&nbsp;to get your own, or read on for the authoritative history of&nbsp;<em>lorem ipsum</em>.</p>','1b00bb3d401f637468e21a71ae148433.jpg',0,'public',0,NULL,'2022-08-09 04:07:21','2022-08-09 04:07:21'),(6,1,2,0,0,NULL,'post','video_embed','demo','demo',NULL,NULL,'<p>HISTORY, PURPOSE AND USAGE<br />Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book. It usually begins with:</p>\r\n<p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&rdquo;<br />The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn\'t distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.</p>\r\n<p>The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it\'s seen all around the web; on templates, websites, and stock designs. Use our generator to get your own, or read on for the authoritative history of lorem ipsum.</p>','3a349bdce9ae058465d12ac242a2ab87.jpg',0,'public',0,NULL,'2022-08-09 04:14:11','2022-08-09 04:14:11'),(7,1,3,0,1,' 1,','post','text','test s','test-s',NULL,NULL,'<p>HISTORY, PURPOSE AND USAGE Lorem ipsum, or&nbsp;lipsum&nbsp;as it is sometimes known, is dummy text used in...</p>\r\n<p>&nbsp;</p>',NULL,0,'public',0,NULL,'2022-08-09 09:07:27','2022-08-09 09:07:27'),(8,1,0,0,0,NULL,'page','text','abs','abs',NULL,NULL,'<div>\r\n<div>&nbsp;</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=\"tags-group\"&gt;</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;ul class=\"tags\"&gt;</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/ul&gt;</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;</div>\r\n</div>',NULL,0,'public',0,NULL,'2022-08-14 19:53:56','2022-08-14 19:53:56'),(9,1,0,8,0,NULL,'page','text','15252','15252',NULL,NULL,'<p>00000</p>',NULL,0,'public',0,NULL,'2022-08-14 20:10:10','2022-08-14 20:10:10'),(10,1,2,0,0,NULL,'post','video_embed','demo 25','demo-25',NULL,NULL,'<p><br />Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book. It usually begins with:</p>\r\n<p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&rdquo;<br />The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn\'t distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.</p>\r\n<p>The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it\'s seen all around the web; on templates, websites, and stock designs. Use our generator to get your own, or read on for the authoritative history of lorem ipsum.</p>','4431cee7693ee3dd1be6b522b7215609.jpg',0,'public',0,NULL,'2022-08-16 10:23:53','2022-08-16 10:23:53');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_attributes`
--

DROP TABLE IF EXISTS `product_attributes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_attributes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) unsigned NOT NULL,
  `attribute_value_id` bigint(20) unsigned NOT NULL,
  `advance_value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(12,2) unsigned DEFAULT 0.00,
  `is_default` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_attributes`
--

LOCK TABLES `product_attributes` WRITE;
/*!40000 ALTER TABLE `product_attributes` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_attributes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_collections`
--

DROP TABLE IF EXISTS `product_collections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_collections` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) unsigned DEFAULT 0,
  `sorttype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'id-DESC',
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_collections`
--

LOCK TABLES `product_collections` WRITE;
/*!40000 ALTER TABLE `product_collections` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_collections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_label_refs`
--

DROP TABLE IF EXISTS `product_label_refs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_label_refs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `label_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `ref` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'product',
  `ref_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_label_refs`
--

LOCK TABLES `product_label_refs` WRITE;
/*!40000 ALTER TABLE `product_label_refs` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_label_refs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_labels`
--

DROP TABLE IF EXISTS `product_labels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_labels` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_labels`
--

LOCK TABLES `product_labels` WRITE;
/*!40000 ALTER TABLE `product_labels` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_labels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_refs`
--

DROP TABLE IF EXISTS `product_refs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_refs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) unsigned NOT NULL,
  `ref` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'link',
  `ref_id` bigint(20) unsigned DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_refs`
--

LOCK TABLES `product_refs` WRITE;
/*!40000 ALTER TABLE `product_refs` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_refs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_reviews`
--

DROP TABLE IF EXISTS `product_reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_reviews` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) unsigned NOT NULL,
  `customer_id` bigint(20) unsigned DEFAULT 0,
  `rating` int(10) unsigned NOT NULL DEFAULT 0,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved` int(10) unsigned NOT NULL DEFAULT 0,
  `approved_id` bigint(20) unsigned DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_reviews`
--

LOCK TABLES `product_reviews` WRITE;
/*!40000 ALTER TABLE `product_reviews` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'standard',
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_status` int(11) NOT NULL DEFAULT 1,
  `list_price` decimal(12,2) unsigned DEFAULT 0.00,
  `sale_price` decimal(12,2) unsigned DEFAULT 0.00,
  `on_sale` int(10) unsigned DEFAULT 0,
  `views` int(11) NOT NULL DEFAULT 0,
  `privacy` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'public',
  `category_map` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `trashed_status` int(11) NOT NULL DEFAULT 0,
  `shop_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `created_by` bigint(20) unsigned NOT NULL DEFAULT 0,
  `available_in_store` int(10) unsigned DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promos`
--

DROP TABLE IF EXISTS `promos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scope` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'product',
  `type` int(10) unsigned DEFAULT 0,
  `down_price` decimal(12,2) DEFAULT 0.00,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity_per_user` int(10) unsigned DEFAULT 0,
  `limited_total` int(10) unsigned NOT NULL DEFAULT 0,
  `usage_total` int(10) unsigned NOT NULL DEFAULT 0,
  `started_at` datetime DEFAULT NULL,
  `finished_at` datetime DEFAULT NULL,
  `schedule` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `type_schedule` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value_schedule` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_activated` int(10) unsigned DEFAULT 0,
  `trashed_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promos`
--

LOCK TABLES `promos` WRITE;
/*!40000 ALTER TABLE `promos` DISABLE KEYS */;
/*!40000 ALTER TABLE `promos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regions`
--

DROP TABLE IF EXISTS `regions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `regions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` int(11) DEFAULT 0,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regions`
--

LOCK TABLES `regions` WRITE;
/*!40000 ALTER TABLE `regions` DISABLE KEYS */;
/*!40000 ALTER TABLE `regions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slider_items`
--

DROP TABLE IF EXISTS `slider_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slider_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `slider_id` bigint(20) unsigned DEFAULT 0,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int(10) unsigned NOT NULL DEFAULT 0,
  `props` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`props`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slider_items`
--

LOCK TABLES `slider_items` WRITE;
/*!40000 ALTER TABLE `slider_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `slider_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sliders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'Slider',
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'slider',
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int(10) unsigned NOT NULL DEFAULT 0,
  `crop` tinyint(1) DEFAULT 0,
  `width` int(10) unsigned NOT NULL DEFAULT 0,
  `height` int(10) unsigned NOT NULL DEFAULT 0,
  `status` tinyint(1) DEFAULT 0,
  `trashed_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sliders`
--

LOCK TABLES `sliders` WRITE;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slug_containers`
--

DROP TABLE IF EXISTS `slug_containers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slug_containers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `obref` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `obref_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slug_containers`
--

LOCK TABLES `slug_containers` WRITE;
/*!40000 ALTER TABLE `slug_containers` DISABLE KEYS */;
/*!40000 ALTER TABLE `slug_containers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscribes`
--

DROP TABLE IF EXISTS `subscribes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subscribes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscribes`
--

LOCK TABLES `subscribes` WRITE;
/*!40000 ALTER TABLE `subscribes` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscribes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tag_refs`
--

DROP TABLE IF EXISTS `tag_refs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tag_refs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tag_id` bigint(20) unsigned NOT NULL,
  `ref` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'post',
  `ref_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tag_refs`
--

LOCK TABLES `tag_refs` WRITE;
/*!40000 ALTER TABLE `tag_refs` DISABLE KEYS */;
/*!40000 ALTER TABLE `tag_refs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_lower` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'undefined',
  `tagged_count` int(10) unsigned DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team_members`
--

DROP TABLE IF EXISTS `team_members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team_members` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `team_id` bigint(20) unsigned NOT NULL,
  `member_id` bigint(20) unsigned NOT NULL,
  `is_leader` int(10) unsigned DEFAULT 0,
  `job` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team_members`
--

LOCK TABLES `team_members` WRITE;
/*!40000 ALTER TABLE `team_members` DISABLE KEYS */;
/*!40000 ALTER TABLE `team_members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teams` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teams`
--

LOCK TABLES `teams` WRITE;
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `themes`
--

DROP TABLE IF EXISTS `themes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `themes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` bigint(20) unsigned DEFAULT 0,
  `secret_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'GomeeTheme',
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'multi-page',
  `mobile_version` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'responsive',
  `web_types` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `version` double(5,2) DEFAULT 1.00,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `privacy` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'protected',
  `zip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `available` int(11) NOT NULL DEFAULT 0,
  `trashed_status` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `themes`
--

LOCK TABLES `themes` WRITE;
/*!40000 ALTER TABLE `themes` DISABLE KEYS */;
INSERT INTO `themes` VALUES (1,0,'62ef752547a1e','Breaking Ielts','breaking-ielts','multi-page','responsive','default, ecommerce, news',1.00,NULL,'public','breaking-ielts.zip','home-01-62ef752547647.png',1,0,NULL,'2022-08-07 08:17:41','2022-08-07 08:17:43'),(2,0,'62ef870212af7','Test','test','multi-page','responsive',NULL,1.00,NULL,'public','test.zip','home-03-62ef870212715.png',1,0,NULL,'2022-08-07 09:33:54','2022-08-07 09:34:05');
/*!40000 ALTER TABLE `themes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transactions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ref` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'transfer',
  `customer_id` bigint(20) unsigned DEFAULT 0,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(12,2) unsigned NOT NULL DEFAULT 0.00,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `trashed_status` int(11) NOT NULL DEFAULT 0,
  `created_id` bigint(20) unsigned DEFAULT 0,
  `approved_id` bigint(20) unsigned DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactions`
--

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_discounts`
--

DROP TABLE IF EXISTS `user_discounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_discounts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `discount_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `is_linited` int(10) unsigned NOT NULL DEFAULT 0,
  `total` int(10) unsigned NOT NULL DEFAULT 0,
  `usage` int(10) unsigned NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_discounts`
--

LOCK TABLES `user_discounts` WRITE;
/*!40000 ALTER TABLE `user_discounts` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_discounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_notices`
--

DROP TABLE IF EXISTS `user_notices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_notices` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT 0,
  `notice_id` bigint(20) unsigned DEFAULT 0,
  `seen` int(11) NOT NULL DEFAULT 0,
  `seen_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_notices_user_id_foreign` (`user_id`),
  KEY `user_notices_notice_id_foreign` (`notice_id`),
  CONSTRAINT `user_notices_notice_id_foreign` FOREIGN KEY (`notice_id`) REFERENCES `notices` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_notices_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_notices`
--

LOCK TABLES `user_notices` WRITE;
/*!40000 ALTER TABLE `user_notices` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_notices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `secret_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'male',
  `birthday` date DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'user',
  `google2fa_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` int(10) unsigned DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trashed_status` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'vcc59ff885608','doanln16',NULL,NULL,'male',NULL,NULL,'doanln16@gmail.com','doanln16',NULL,'$2y$10$vPzKWLYSIl1H.4bAcJjfAO/2pUORq6tSyBGCLoKAOLy/BgvL5ZwtS',NULL,'admin',NULL,0,1,'6NExy3EOfyFCOWh9tn0UiJ0yB1Q0eOw3V8yIoxqKGjqAO6VN2IUcaXqM5IDY',0,NULL,'2022-08-07 04:26:24','2022-08-07 04:26:24');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wards`
--

DROP TABLE IF EXISTS `wards`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wards` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `district_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wards`
--

LOCK TABLES `wards` WRITE;
/*!40000 ALTER TABLE `wards` DISABLE KEYS */;
/*!40000 ALTER TABLE `wards` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `warehouses`
--

DROP TABLE IF EXISTS `warehouses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `warehouses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) unsigned NOT NULL,
  `staff_id` bigint(20) unsigned NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'import',
  `total` int(11) NOT NULL DEFAULT 0,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `warehouses`
--

LOCK TABLES `warehouses` WRITE;
/*!40000 ALTER TABLE `warehouses` DISABLE KEYS */;
/*!40000 ALTER TABLE `warehouses` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-08-16 21:12:10
