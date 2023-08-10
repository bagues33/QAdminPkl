-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 26, 2023 at 12:06 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qadminpkl`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `log_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `causer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `subject_id`, `causer_type`, `causer_id`, `properties`, `created_at`, `updated_at`) VALUES
(15, 'user', 'You have updated user', 'App\\Models\\User', 3, 'App\\Models\\User', 3, '{\"old\": [], \"attributes\": []}', '2023-06-04 01:04:01', '2023-06-04 01:04:01'),
(16, 'user', 'You have updated user', 'App\\Models\\User', 3, 'App\\Models\\User', 3, '{\"old\": [], \"attributes\": []}', '2023-06-04 05:49:41', '2023-06-04 05:49:41'),
(17, 'user', 'You have updated user', 'App\\Models\\User', 3, 'App\\Models\\User', 3, '{\"old\": [], \"attributes\": []}', '2023-06-04 10:31:16', '2023-06-04 10:31:16'),
(18, 'user', 'You have updated user', 'App\\Models\\User', 1, 'App\\Models\\User', 1, '{\"old\": [], \"attributes\": []}', '2023-06-04 10:48:03', '2023-06-04 10:48:03'),
(19, 'user', 'You have deleted user', 'App\\Models\\User', 4, 'App\\Models\\User', 5, '{\"attributes\": {\"name\": \"bagus2\", \"email\": \"bagus2@gmail.com\"}}', '2023-06-09 21:42:27', '2023-06-09 21:42:27'),
(20, 'user', 'You have deleted user', 'App\\Models\\User', 2, 'App\\Models\\User', 5, '{\"attributes\": {\"name\": \"tofan2\", \"email\": \"tofan2@gmail.com\"}}', '2023-06-09 21:42:41', '2023-06-09 21:42:41'),
(21, 'user', 'You have created user', 'App\\Models\\User', 7, 'App\\Models\\User', 5, '{\"attributes\": {\"name\": \"Anggit Dwi Arifin\", \"email\": \"anggit@gmail.com\"}}', '2023-06-09 21:51:09', '2023-06-09 21:51:09'),
(22, 'user', 'You have created user', 'App\\Models\\User', 8, 'App\\Models\\User', 5, '{\"attributes\": {\"name\": \"Rony Tri Efendi\", \"email\": \"rony@gmail.com\"}}', '2023-06-09 21:52:16', '2023-06-09 21:52:16'),
(23, 'user', 'You have created user', 'App\\Models\\User', 9, 'App\\Models\\User', 5, '{\"attributes\": {\"name\": \"Zidan Septian Perdana\", \"email\": \"zidan@gmail.com\"}}', '2023-06-09 21:53:28', '2023-06-09 21:53:28'),
(24, 'user', 'You have created user', 'App\\Models\\User', 10, 'App\\Models\\User', 5, '{\"attributes\": {\"name\": \"Ari Anjani\", \"email\": \"ari@gmail.com\"}}', '2023-06-09 23:29:23', '2023-06-09 23:29:23');

-- --------------------------------------------------------

--
-- Table structure for table `anggotas`
--

CREATE TABLE `anggotas` (
  `id_anggota` bigint(20) UNSIGNED NOT NULL,
  `id_tim` bigint(20) UNSIGNED NOT NULL,
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anggotas`
--

INSERT INTO `anggotas` (`id_anggota`, `id_tim`, `id_users`, `id_user`, `created_at`, `updated_at`) VALUES
(4, 4, 8, 7, NULL, NULL),
(5, 4, 9, 7, NULL, NULL),
(6, 5, 1, 7, NULL, NULL),
(7, 5, 6, 7, NULL, NULL),
(9, 6, 8, 7, NULL, NULL),
(10, 6, 10, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(1, 'default', '{\"uuid\":\"e0e84278-acc8-41e8-b16c-8fcace314946\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:5;}s:9:\\\"relations\\\";a:1:{i:0;s:5:\\\"roles\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"1c0f7691-f543-4702-8e43-d1a1d4508280\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684643372, 1684643372),
(2, 'default', '{\"uuid\":\"5ea500c6-7608-416c-8b3e-4b62d8b20180\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:5;}s:9:\\\"relations\\\";a:1:{i:0;s:5:\\\"roles\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"25b5bc78-9e41-4a94-ab6c-80b96bcb69e8\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684643373, 1684643373),
(3, 'default', '{\"uuid\":\"b6fbcb85-10cd-4bed-9343-85fb4b293305\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:5;}s:9:\\\"relations\\\";a:1:{i:0;s:5:\\\"roles\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"a3e6342a-a1f7-4f7b-8ab9-158c25208c44\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684643393, 1684643393),
(4, 'default', '{\"uuid\":\"44f37373-5218-4a55-b287-30f4b59617dd\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:5;}s:9:\\\"relations\\\";a:1:{i:0;s:5:\\\"roles\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"9d0c47ef-466d-42c5-aed0-31a7cd244c44\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684643394, 1684643394),
(5, 'default', '{\"uuid\":\"7b8c5b55-6c7b-40e8-b898-af43677ba95b\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:5;}s:9:\\\"relations\\\";a:1:{i:0;s:5:\\\"roles\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"7b3e7f4a-ad1a-4e86-a782-d0a392ce4232\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684644324, 1684644324),
(6, 'default', '{\"uuid\":\"04abe522-2cc1-44d1-b51e-8e085d7950ed\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:5;}s:9:\\\"relations\\\";a:1:{i:0;s:5:\\\"roles\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"ba77cf46-189d-4159-81e4-fb7d8d628fcf\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684644324, 1684644324),
(7, 'default', '{\"uuid\":\"0eee1037-a1b4-412b-9448-70defb38754b\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:1;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"e9e2e297-fcd9-4ae5-9b26-1cabd1b4a3d8\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651391, 1684651391),
(8, 'default', '{\"uuid\":\"e605f55b-e445-47fa-b76b-81257715bbc2\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:2;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"c5481487-b02c-4172-a065-80aa91ee9edf\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651391, 1684651391),
(9, 'default', '{\"uuid\":\"3fb41b97-dbfe-4054-b3a5-8078ad28b644\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:3;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"ab065fe8-f053-4655-97da-4e8d1b4d6082\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651391, 1684651391),
(10, 'default', '{\"uuid\":\"76d69985-96b2-4d62-a717-a123d8d02562\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:4;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"24e485cd-b384-4df9-aa2f-96fd1f2544cd\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651391, 1684651391),
(11, 'default', '{\"uuid\":\"b491980f-9374-4b14-9134-4b354a6abde3\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:5;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"8d394d67-cf21-4112-9237-4ca9bccb8ed5\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651391, 1684651391),
(12, 'default', '{\"uuid\":\"91f03922-07bf-47b8-b1a6-c7d164bcd1a3\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:6;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"551a3114-c93f-4f67-b299-fd7acc1d30ae\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651391, 1684651391),
(13, 'default', '{\"uuid\":\"b3ac95ef-153b-4c2c-96d9-b61de3566575\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:1;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"5c3063c5-3d58-4fbf-ad8c-917b39c9ca9b\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651392, 1684651392),
(14, 'default', '{\"uuid\":\"08c3c1ab-0e30-41db-b737-988ee1ab82b4\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:2;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"c8708d71-ab87-47a8-b4d8-a2ccc46df473\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651392, 1684651392),
(15, 'default', '{\"uuid\":\"914f789b-5ea4-4e9e-9484-4b860bac8f34\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:3;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"a133729b-b9c7-4992-b450-6cb94e5b15a2\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651392, 1684651392),
(16, 'default', '{\"uuid\":\"a5dad1fe-bc21-4431-8708-62027f37c861\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:4;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"4e66bc89-1dfe-4045-99d0-df60cd51faf1\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651392, 1684651392),
(17, 'default', '{\"uuid\":\"ada0154b-bd99-4b31-b164-45d7a0e7ff10\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:5;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"af0ab4bd-059c-471e-bc32-6c6abc2d20a9\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651392, 1684651392),
(18, 'default', '{\"uuid\":\"525a5d09-fcde-4523-b4ff-f95a7d112630\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:6;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"819b6306-8103-4c38-a879-5bb30deb29cc\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651393, 1684651393),
(19, 'default', '{\"uuid\":\"729f0652-e3a2-4d25-a594-4862605d71f2\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:1;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"56ab4aba-1a66-460e-b78c-b0d271643dac\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651394, 1684651394),
(20, 'default', '{\"uuid\":\"dceac2d2-9486-48ac-afaf-b0d5161f0a7c\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:2;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"f719d224-f34e-43ea-a3cd-8a6f668e925f\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651394, 1684651394),
(21, 'default', '{\"uuid\":\"e11260d6-ef8c-4e4a-9e85-86db7267abc4\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:3;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"30ba9505-6cc9-4165-9266-01aa7e4351b6\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651394, 1684651394),
(22, 'default', '{\"uuid\":\"0c9d954e-c909-411a-a4b5-706832ba2d70\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:4;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"2b6accce-3039-4ae1-8b8d-dbb9f2dc0030\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651394, 1684651394),
(23, 'default', '{\"uuid\":\"70061d1d-fe60-4839-a113-d0233696619f\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:5;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"509fbb55-e1fb-4725-a9e4-ef9c0e21450f\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651394, 1684651394),
(24, 'default', '{\"uuid\":\"f01b384d-7bb5-4e03-80cb-a4ab0fc27cc0\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:6;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"ec20b810-459c-4dcb-ae3f-28ad20dffb96\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651394, 1684651394),
(25, 'default', '{\"uuid\":\"f2aecd3e-f214-48fb-9a59-5ba1ea0513e9\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:1;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"41d98ed1-bcee-41d6-aabd-daf5067c58f6\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651395, 1684651395),
(26, 'default', '{\"uuid\":\"571c8a9e-4586-4ade-b113-e370dbfbb824\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:2;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"4bb2d09e-3cf5-430d-bf64-e95719d5de26\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651395, 1684651395),
(27, 'default', '{\"uuid\":\"74adeb16-f230-42d5-b3bc-6fd66ffe8a4a\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:3;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"5802abd7-b352-4064-a59d-f3fdd1f8f49b\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651395, 1684651395),
(28, 'default', '{\"uuid\":\"0ef9d91b-3c1d-4706-96be-0195503a8b1c\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:4;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"538bacfa-1421-4e0d-a8f2-e75cf483a6ff\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651395, 1684651395),
(29, 'default', '{\"uuid\":\"8a054dbe-7501-46eb-bf4a-f4e3e5bfd3c5\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:5;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"cd32552d-0420-4864-8d24-30d66f2d3363\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651395, 1684651395),
(30, 'default', '{\"uuid\":\"8e302071-8212-495d-9f2e-7a36a4d09a78\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:6;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"3bd672aa-4628-4883-b5a1-137ac2549745\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651395, 1684651395);
INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(31, 'default', '{\"uuid\":\"dafdca68-9a24-4040-89a9-e5e20e24eaae\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:1;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"fb094315-5e5e-41fb-a863-849a5c25e5ba\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651401, 1684651401),
(32, 'default', '{\"uuid\":\"da3f35ae-8a50-48c9-8bb0-0c37f6029788\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:2;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"2dcccc94-bfba-4b5f-971a-82c7ace2ce2a\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651401, 1684651401),
(33, 'default', '{\"uuid\":\"f94778fe-2f60-412e-ab18-261ecca927ef\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:3;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"c1e961f6-18d7-414d-9d28-36c976576493\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651401, 1684651401),
(34, 'default', '{\"uuid\":\"77c77075-d7b5-4424-a5b9-68fcb68ac0fc\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:4;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"e4427776-5f21-41c6-935f-25d6c104d6d4\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651401, 1684651401),
(35, 'default', '{\"uuid\":\"bd4fd497-a8ce-4ac1-970f-4e68586a605f\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:5;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"24c1da05-d34c-402e-afeb-a007cd60cb33\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651401, 1684651401),
(36, 'default', '{\"uuid\":\"8750d3e9-6f15-47d2-8b93-6d5c8c942c95\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:6;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"a1d27275-7a58-437b-806c-410ed042d825\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651401, 1684651401),
(37, 'default', '{\"uuid\":\"3898c585-6171-461f-8365-d94d0c41396c\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:1;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"41893fbc-b662-4609-8f91-965da3561173\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651402, 1684651402),
(38, 'default', '{\"uuid\":\"e3651f8b-39bf-419b-ac71-fea92e6cacb6\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:2;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"f6fbd956-9b6b-4a22-b5c0-8e4350deee49\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651402, 1684651402),
(39, 'default', '{\"uuid\":\"7be4cb2a-ef43-40e8-9c6a-5a503cfc980a\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:3;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"6649bafd-d52d-484e-8f4f-c5f7884029ec\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651402, 1684651402),
(40, 'default', '{\"uuid\":\"4d2c90e8-dc39-49fd-a123-9aff66ce75f9\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:4;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"3b40be0a-4b07-4fad-bfd2-3e00d0dbf39e\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651402, 1684651402),
(41, 'default', '{\"uuid\":\"b597c7e0-c1ea-4c20-bb72-625f9443604a\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:5;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"ef2d69d0-00af-41b3-846e-f39844459681\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651402, 1684651402),
(42, 'default', '{\"uuid\":\"d1b2e1d0-4ba0-4edb-90ee-51532ccb712f\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:6;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"f4c4e20f-a475-4ea0-be4f-a46bb9282ec9\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651402, 1684651402),
(43, 'default', '{\"uuid\":\"85576325-44f9-4a5a-bba1-0bf07e015b13\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:1;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"5db9b302-2f28-4fd9-8dd1-e2e60e8c57df\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651439, 1684651439),
(44, 'default', '{\"uuid\":\"19b63b61-598f-4828-a049-7a35c4d5c1e9\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:2;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"61be4d9f-68c8-4e52-8eaf-85fe931beff7\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651439, 1684651439),
(45, 'default', '{\"uuid\":\"c2a60f11-8c6c-4a6e-8ed1-6fabcc663e41\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:3;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"efb533e3-db50-4046-b5ed-d7a21c1d1c15\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651439, 1684651439),
(46, 'default', '{\"uuid\":\"5ae3d59a-1158-4314-8673-5298378be6ee\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:4;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"6409e483-820d-427c-985f-a56161d06775\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651439, 1684651439),
(47, 'default', '{\"uuid\":\"cea86829-929e-4028-b916-8e51bb564bcb\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:5;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"e490f3c5-6217-433f-9d0f-1f1732eb36dd\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651439, 1684651439),
(48, 'default', '{\"uuid\":\"a24af71c-bd64-4cfa-87e0-f5e79c33c388\",\"displayName\":\"App\\\\Notifications\\\\WelcomeNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:6;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:37:\\\"App\\\\Notifications\\\\WelcomeNotification\\\":12:{s:4:\\\"post\\\";a:2:{s:5:\\\"title\\\";s:10:\\\"post title\\\";s:4:\\\"slug\\\";s:9:\\\"post slug\\\";}s:2:\\\"id\\\";s:36:\\\"1af4d180-ca58-4367-86ff-ad596315dfe7\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1684651439, 1684651439);

-- --------------------------------------------------------

--
-- Table structure for table `kliens`
--

CREATE TABLE `kliens` (
  `id_klien` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telpon` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kliens`
--

INSERT INTO `kliens` (`id_klien`, `nama`, `no_telpon`, `alamat`, `email`, `photo`, `website`, `deskripsi`, `id_user`, `created_at`, `updated_at`) VALUES
(14, 'Badan Pengelola Dana Perkebunan Kelapa Sawit (BPDPKS)', '(021) 39832091', 'Imam bonjol Jkt, RT.8/RW.4, Menteng, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10310', 'info@bpdp.or.id', 'uTCimr5GRJU4JifGglm1nh3qJfTN4WIlJHDiMiPj.jpg', 'https://www.bpdp.or.id/', 'Badan Pengelola Dana Perkebunan Kelapa Sawit (BPDPKS) merupakan unit organisasi noneselon di bidang pengelolaan Dana Perkebunan Kelapa Sawit yang berada di bawah dan bertanggung jawab kepada Menteri Keuangan.', 5, '2023-06-09 21:17:22', '2023-06-09 21:17:22'),
(15, 'Badan Penanggulangan Bencana Daerah Kabupaten Seruyan', '(0538) 2024988', 'JHQ7+47F, Persil Raya, Kec. Seruyan Hilir, Kabupaten Seruyan, Kalimantan Tengah 74213', 'info@pemkabseruyan.go.id', 'QIJFhnNyiEPstiOPqJ1aunNWnOUy1oNabBSvSECM.jpg', 'pemkabseruyan.com', 'Badan Penanggulangan Bencana Daerah yang selanjutnya disingkat BPBD adalah Perangkat. Daerah yang melakukan fungsi penyelenggaraan bencana di Kabupaten Seruyan;.', 5, '2023-06-09 21:39:14', '2023-06-09 21:39:14'),
(16, 'Dinas Perhubungan Provinsi DKI Jakarta', '(021) 3501349', 'Jalan Taman Jati Baru No.1, Kelurahan Cideng, Kecamatan Gambir, Jakarta Pusat 10150', 'info@dihubjakarta.go.id', 'lwLbSC5HhLRIKEWq0KkxrqqX5qfQgtf2DrGXirGr.png', 'https://dishub.jakarta.go.id/', 'Mewujudkan Jakarta Baru melalui penyediaan layanan transportasi yang handal, modern, dan berdaya saing internasional, dengan angkutan publik sebagai layanan utama', 5, '2023-06-09 22:02:17', '2023-06-09 22:02:17'),
(17, 'Badan Pusat Statistik', '(62-21) 3841195', 'Jl. Dr. Sutomo 6-8 Jakarta 10710 Indonesia', 'bpshq@bps.go.id', 'N9bZrxKyDAP5BG8BIOSgfcgr0JVfxn8So99VeZBz.svg', 'https://www.bps.go.id/', 'Badan Pusat Statistik adalah Lembaga Pemerintah Nonkementerian yang bertanggung jawab langsung kepada Presiden. Sebelumnya, BPS merupakan Biro Pusat Statistik, yang dibentuk berdasarkan UU Nomor 6 Tahun 1960 tentang Sensus dan UU Nomor 7 Tahun 1960 tentang Statistik', 5, '2023-06-09 23:25:24', '2023-06-09 23:25:24'),
(18, 'Dinas Penanggulangan Kebakaran Dan Penyelamatan Provinsi DKI Jakarta', '(021) 6344579', 'Jl. Kyai Haji Zainul Arifin No.71, RT.10/RW.10, Duri Pulo, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta', 'humasjakfrie@gmail.com', 'lx792aPnatc5Jjv1pPVIkLzxdSNaekJ1J15jshyb.png', 'https://data.jakarta.go.id/', 'Dinas Penanggulangan Kebakaran dan Penyelamatan. DPKP mempunyai tugas melaksanakan pencegahan dan penanggulangan kebakaran dan penyelamatan.', 5, '2023-06-09 23:32:10', '2023-06-09 23:32:10'),
(19, 'Badan Pertanahan Nasional', '021 7264112', 'Jalan Raden Patah I No. 1 Kebayoran Baru Jakarta Selatan', 'timdatin.djtr@atrbpn.go.id', 'B2N00lynx13FBhy3HMV5XOOFtSWP2A83XXy6xVCx.png', 'https://tataruang.atrbpn.go.id', 'Kementerian Agraria dan Tata Ruang / Badan Pertanahan Nasional adalah lembaga pemerintah nonkementerian di Indonesia yang mempunyai tugas melaksanakan tugas pemerintahan di bidang Pertanahan sesuai dengan ketentuan peraturan perundang-undangan. BPN dahulu dikenal dengan sebutan Kantor Agraria', 5, '2023-06-09 23:37:54', '2023-06-09 23:37:54'),
(20, 'Dinas Komunikasi Dan Informatika Provinsi Daerah Istimewa Yogyakarta', '(0274) 373444', 'Jl. Brigjen Katamso Komplek THR Yogyakarta Indonesia', 'diskominfo@jogjaprov.go.id', 'APMxNBzetiiRwNcLWpoizSmaCKaeEljaUxZgCirg.jpg', 'https://diskominfo.jogjaprov.go.id', 'Dinas Komunikasi dan Informatika mempunyai tugas membantu Gubernur melaksanakan urusan pemerintahan bidang komunikasi dan informatika dan urusan pemerintahan bidang persandian.', 5, '2023-06-09 23:45:11', '2023-06-09 23:45:11'),
(21, 'Dinas Komunikasi Informatika Dan Statistik  Kota Magelang', '(0293) 360990', 'Jl. Jend. Sarwo Edhie Wibowo No.2, Tenjosari, Banyurojo, Kec. Mertoyudan, Kabupaten Magelang, Jawa Tengah', 'info@diskominsta.go.id', 'KIwSC95c1teolgNK11qlDwYVTCR5A6a62REmZW8W.png', 'http://diskominsta.magelangkota.go.id/', 'DISKOMINSTA sendiri terdiri dari tiga bidang yaitu Bidang Teknologi Informatika (TI), Bidang Komunikasi dan Informasi Publik (KIP), dan Bidang Statistik dan Persandian (SP). di samping ke-tiga bidang tersebut terdapat jajaran ke-sekretariat-an.', 5, '2023-06-10 00:06:49', '2023-06-10 00:06:49'),
(22, 'Dinas Penanam Modal Dan Pelayanan Terpadu Satu Pintu Kota Palembang', '(0711) 5620952', 'Jl. Gubernur. H. Achmad Bastari, 15 Ulu, Jakabaring, Palembang 30267, Sumatera Selatan, Indonesia.', 'dpmptsp@palembang.go.id', '12dQvVXVw5fc3C0qElrHzGBBNiYBbzV2lO6mxMu1.png', 'https://dpmptsp.palembang.go.id', 'Tugas DPMPTSP melaksanakan sebagian Urusan Pemerintah Daerah Kota dalam Bidang Pelayanan Perizinan dan Non Perizinan secara Terpadu serta Penanaman Modal prinsip koordinasi, integrasi, singkronisasi, simplikasi, keamanan dan kepastian.', 5, '2023-06-10 01:20:40', '2023-06-10 01:20:40');

-- --------------------------------------------------------

--
-- Table structure for table `komentars`
--

CREATE TABLE `komentars` (
  `id_komentar` bigint(20) UNSIGNED NOT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_task` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komentars`
--

INSERT INTO `komentars` (`id_komentar`, `isi`, `id_task`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'tes komentar dari anggit', 14, 7, '2023-06-10 04:11:40', '2023-06-10 04:11:40'),
(2, 'tes komentar dari rony sadas', 14, 8, '2023-06-10 04:12:20', '2023-06-10 04:13:11'),
(5, 'tes ombak', 14, 7, '2023-06-10 04:41:38', '2023-06-10 04:41:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_08_24_000000_create_settings_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2021_04_23_030446_create_permission_tables', 1),
(6, '2021_04_28_072156_create_activity_log_table', 1),
(7, '2022_10_20_080109_create_kliens_table', 1),
(8, '2022_10_20_080325_create_projects_table', 1),
(9, '2022_10_20_090830_create_tims_table', 1),
(10, '2022_10_20_092011_create_anggotas_table', 1),
(11, '2022_10_21_054922_create_tasks_table', 1),
(12, '2022_10_21_062229_create_komentars_table', 1),
(13, '2023_05_15_162030_create_jobs_table', 1),
(14, '2023_05_15_165119_create_notifications_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 5),
(1, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 7),
(1, 'App\\Models\\User', 8),
(1, 'App\\Models\\User', 9),
(2, 'App\\Models\\User', 10);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('041d6610-a8b3-4d1f-b585-55390b492734', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 7, '{\"data\":\"Task dengan nama Modul Data Dasar dan deadline 2019-09-10 telah ditambahkan!\"}', NULL, '2023-06-10 02:33:57', '2023-06-10 02:33:57'),
('06a97e2c-123f-4760-bc4a-6de9690dca9a', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 10, '{\"data\":\"Anda ditambahkan pada tim Front End Developer!\"}', NULL, '2023-06-10 03:53:28', '2023-06-10 03:53:28'),
('06f0fc91-3ad4-41c0-81ad-80950088e9c1', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Project dengan nama Pembuatan Aplikasi Pencegahan dan Penanggulangan Karhutla telah ditambahkan!\"}', NULL, '2023-06-09 21:42:11', '2023-06-09 21:42:11'),
('0704f991-6404-4673-972b-1451213e2f5b', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 3, '{\"data\":\"Tim dengan nama Front End Developer telah ditambahkan!\"}', '2023-05-21 04:56:03', '2023-05-21 03:49:12', '2023-05-21 04:56:03'),
('088cc7ab-2951-41cd-9a9f-358114a1dfba', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 4, '{\"data\":\"Task dengan nama buat form telah ditambahkan!\"}', NULL, '2023-05-21 04:57:15', '2023-05-21 04:57:15'),
('08ed148f-d0b3-4197-9601-e5e5b9047e8b', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\" Your deposit of rony was successful\"}', '2023-05-21 00:37:21', '2023-05-21 00:30:34', '2023-05-21 00:37:21'),
('0902bea0-14f4-4600-b582-8ba13ef24905', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 8, '{\"data\":\"Ada komentar baru pada task Modul Notulen\"}', NULL, '2023-06-10 04:47:51', '2023-06-10 04:47:51'),
('0c63c273-3e1c-4a09-94c8-a5d90191beb6', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 9, '{\"data\":\"Task dengan nama Modul Data Dasar dan deadline 2019-09-10 telah di approved!\"}', NULL, '2023-06-10 03:03:15', '2023-06-10 03:03:15'),
('0e4975e0-c217-4c24-9b3c-acd4798d4377', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 3, '{\"data\":\"Project dengan nama Pembangunaan Sistem Informasi Sarana dan Prasarana Perkebunan telah ditambahkan!\"}', NULL, '2023-06-09 21:33:50', '2023-06-09 21:33:50'),
('0eeb2b9e-b438-4beb-8ce9-76b0fcd95a82', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Klien dengan nama Front End Developer telah ditambahkan!\"}', '2023-06-04 03:06:24', '2023-06-04 02:11:30', '2023-06-04 03:06:24'),
('0f606f29-99f9-40fe-9157-684b9ff7ef1e', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 1, '{\"data\":\"Anda ditambahkan pada tim Front End Developer!\"}', NULL, '2023-06-05 05:26:09', '2023-06-05 05:26:09'),
('1122ea9d-287c-4d47-a895-d5edaef6f111', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Klien dengan nama rony telah ditambahkan!\"}', '2023-06-04 03:06:24', '2023-06-04 02:10:20', '2023-06-04 03:06:24'),
('16752273-6aa9-42f6-98c7-3adfb6be763c', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 7, '{\"data\":\"Project dengan nama Pengembangan Aplikasi Perkantoran (E-Office) telah ditambahkan!\"}', NULL, '2023-06-09 23:39:38', '2023-06-09 23:39:38'),
('172647e9-8e51-4f5c-8170-6733daf1061f', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 4, '{\"data\":\"Task dengan nama buat form telah ditambahkan!\"}', NULL, '2023-05-21 05:01:23', '2023-05-21 05:01:23'),
('187e7485-a378-46bf-8522-1ad9682a556e', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 7, '{\"data\":\"Task dengan nama Laporan Sistem dan deadline 2019-09-23 telah ditambahkan!\"}', NULL, '2023-06-10 03:51:01', '2023-06-10 03:51:01'),
('19efcb52-973c-4288-bf58-b886f0911877', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 3, '{\"data\":\"Project dengan nama Pengembangan IDMC telah diupdate!\"}', NULL, '2023-06-10 03:07:47', '2023-06-10 03:07:47'),
('1a85c135-b9fa-4de2-b6c2-2905419552dd', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\" Your deposit of post title was successful\"}', '2023-05-21 00:21:59', '2023-05-21 00:08:53', '2023-05-21 00:21:59'),
('1d5e8236-aa74-42ff-b119-1ad3ebbb62ea', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 1, '{\"data\":\"Task dengan nama sds telah ditambahkan!\"}', NULL, '2023-06-05 05:29:10', '2023-06-05 05:29:10'),
('1eb31038-d6db-41db-b983-0c1a6bf8238b', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Project dengan nama Pengembangan IDMC telah diupdate!\"}', NULL, '2023-06-10 03:07:05', '2023-06-10 03:07:05'),
('2473a941-958d-4c49-919d-ef48511af250', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Klien dengan nama Badan Pengelola Dana Perkebunan Kelapa Sawit (BPDPKS) telah ditambahkan!\"}', NULL, '2023-06-09 21:17:23', '2023-06-09 21:17:23'),
('26282ff8-2d9d-4b92-91bf-ba18571593f2', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\" Your deposit of dkfjkdfjkd was successful\"}', '2023-05-21 00:21:59', '2023-05-20 23:52:23', '2023-05-21 00:21:59'),
('27576f59-2bd7-4ca7-9e93-7e8fff39763a', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 7, '{\"data\":\"Ada komentar baru pada task Modul Notulen\"}', NULL, '2023-06-10 04:47:36', '2023-06-10 04:47:36'),
('27bd4a11-46b6-483e-a41b-d5db5cbab49e', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 7, '{\"data\":\"Task dengan nama Modul Disposisi dan deadline 2019-09-18 telah ditambahkan!\"}', NULL, '2023-06-10 04:04:32', '2023-06-10 04:04:32'),
('27dc89c2-3224-4ee9-a9a6-f87040a97509', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\" Your deposit of post title was successful\"}', '2023-05-21 00:21:59', '2023-05-21 00:01:49', '2023-05-21 00:21:59'),
('29e98b0c-6673-4bd1-98b1-223fc009b5e0', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\" Your deposit of dkfjkdfjkd was successful\"}', '2023-05-21 00:21:59', '2023-05-20 23:52:57', '2023-05-21 00:21:59'),
('2a524ddc-bdd9-44df-b0b6-2c1184255313', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Klien dengan nama Dinas Komunikasi Informatika Dan Statistik  Kota Magelang telah ditambahkan!\"}', NULL, '2023-06-10 00:06:49', '2023-06-10 00:06:49'),
('2b338943-6c7e-43e9-89a0-4c0225c7e2b4', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 3, '{\"data\":\"Task dengan nama Membuat landing page telah ditambahkan!\"}', '2023-06-04 10:51:37', '2023-06-03 20:31:31', '2023-06-04 10:51:37'),
('2bf07851-36df-4cda-866b-5854bfe4f64a', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 3, '{\"data\":\"Tim dengan nama Front End Developer telah ditambahkan!\"}', NULL, '2023-06-05 05:18:43', '2023-06-05 05:18:43'),
('2d6bff92-f7b2-4bf0-8de7-d88ec31cc510', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 7, '{\"data\":\"Task dengan nama Manajemen Aset dan deadline 2019-09-18 telah ditambahkan!\"}', NULL, '2023-06-10 01:40:08', '2023-06-10 01:40:08'),
('2e0e0e42-17fd-4855-9c10-a7150c745131', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\" Your deposit of post title was successful\"}', '2023-05-21 00:21:59', '2023-05-21 00:08:54', '2023-05-21 00:21:59'),
('30b46e6d-06f2-49c9-86bb-3b31ab1a8d86', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 3, '{\"data\":\"Task dengan nama sds dan 2023-06-30telah ditambahkan!\"}', NULL, '2023-06-05 05:31:19', '2023-06-05 05:31:19'),
('331cdadf-6557-454d-8edc-45b0647db230', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 7, '{\"data\":\"Tim dengan nama Front End Developer telah ditambahkan!\"}', NULL, '2023-06-10 03:52:38', '2023-06-10 03:52:38'),
('3619831b-da58-45c7-a31b-77a0ee4570ef', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Klien dengan nama rony telah ditambahkan!\"}', '2023-06-05 04:39:25', '2023-06-05 02:16:26', '2023-06-05 04:39:25'),
('376b88db-9dbe-4ddd-afbb-c43db9a5126b', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 1, '{\"data\":\"Anda telah ditambahkan sebagai pm\"}', NULL, '2023-06-05 05:12:12', '2023-06-05 05:12:12'),
('37989d9f-c078-4cb8-aa49-c32f9d8e3f77', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Klien dengan nama Dinas Komunikasi Dan Informatika Provinsi Daerah Istimewa Yogyakarta telah ditambahkan!\"}', NULL, '2023-06-09 23:45:11', '2023-06-09 23:45:11'),
('37b15628-cb3b-48a8-ab9d-674ccceb9fe2', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 3, '{\"data\":\"Task dengan nama buat form telah ditambahkan!\"}', '2023-05-21 04:56:03', '2023-05-21 03:53:21', '2023-05-21 04:56:03'),
('3912a432-d2c5-4f26-8b7c-5ff1673aa2f5', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Project dengan nama Sistem tahanan telah ditambahkan!\"}', '2023-06-09 21:12:38', '2023-06-05 05:02:26', '2023-06-09 21:12:38'),
('3a459d93-03cb-4511-b81b-9df685da2a37', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 1, '{\"data\":\"Anda telah ditambahkan sebagai anggota\"}', NULL, '2023-06-05 05:12:54', '2023-06-05 05:12:54'),
('3b819188-67e2-45b9-a9a3-2c01020693da', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Project dengan nama Sistem tahanan telah ditambahkan!\"}', '2023-06-05 01:40:18', '2023-06-04 18:26:09', '2023-06-05 01:40:18'),
('3d846c9a-dfe4-4959-8a84-5632a8b8c4a8', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 3, '{\"data\":\"Project dengan nama Pembuatan Apikasi DPMPTSP Kota Palembang telah diupdate!\"}', NULL, '2023-06-10 03:23:00', '2023-06-10 03:23:00'),
('42c390bb-1839-421a-9799-6e9bfba75a69', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Project dengan nama buat form telah ditambahkan!\"}', '2023-06-05 04:39:24', '2023-06-05 02:16:51', '2023-06-05 04:39:24'),
('468e8096-8e6c-4b1a-bb29-18f83788b11f', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 10, '{\"data\":\"Project dengan nama Pembangunan Sistem Informasi Dinas Penanggulangan Kebakaran Dan Penyelamatan telah ditambahkan!\"}', NULL, '2023-06-09 23:34:22', '2023-06-09 23:34:22'),
('486c34fb-8581-4111-b874-b27136233f16', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 3, '{\"data\":\"Project dengan nama Pembangunaan Sistem Informasi Sarana dan Prasarana Perkebunan telah diupdate!\"}', NULL, '2023-06-09 21:39:39', '2023-06-09 21:39:39'),
('4abe2eb0-604e-4ea3-b299-17ee08df8330', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Project dengan nama Pembuatan Sistem Data base Perlengkapan Jalan telah ditambahkan!\"}', NULL, '2023-06-09 22:03:50', '2023-06-09 22:03:50'),
('4b27158d-736b-48d2-8d20-f55d6c1006b5', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 3, '{\"data\":\"Task dengan nama buat form telah ditambahkan!\"}', '2023-06-04 10:51:37', '2023-05-21 05:01:23', '2023-06-04 10:51:37'),
('4c14836a-1301-477b-b110-7ef3a246cdd1', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Project dengan nama Pembuatan Apikasi DPMPTSP Kota Palembang telah diupdate!\"}', NULL, '2023-06-10 03:06:14', '2023-06-10 03:06:14'),
('4d76fd08-cccc-4190-a951-1d1298027ff7', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 8, '{\"data\":\"Ada komentar baru pada task Modul Notulen\"}', NULL, '2023-06-10 04:44:57', '2023-06-10 04:44:57'),
('4e0f74fa-202c-402c-ae72-2a3b6b6a1e61', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Klien dengan nama Dinas Penanam Modal Dan Pelayanan Terpadu Satu Pintu Kota Palembang telah ditambahkan!\"}', NULL, '2023-06-10 01:20:40', '2023-06-10 01:20:40'),
('4fbdf33f-a631-4d23-a796-eba0e432515e', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\" Your deposit of post title was successful\"}', '2023-05-21 00:30:06', '2023-05-21 00:23:40', '2023-05-21 00:30:06'),
('501cd8f9-3711-4f24-9f14-82a1bb7f48da', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 8, '{\"data\":\"Anda ditambahkan pada tim Front End Developer!\"}', NULL, '2023-06-10 03:53:12', '2023-06-10 03:53:12'),
('528a1d8c-c662-4736-8459-48e2ab74c6d2', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Project dengan nama Pembuatan Apikasi DPMPTSP Kota Palembang telah diupdate!\"}', NULL, '2023-06-10 03:11:29', '2023-06-10 03:11:29'),
('5348a65a-a508-4fa7-a11e-8c622a484192', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 3, '{\"data\":\"Project dengan nama Jasa Konsultan Geospatial System telah ditambahkan!\"}', NULL, '2023-06-09 23:28:01', '2023-06-09 23:28:01'),
('55b5ad0c-6c31-4334-962c-346afb8f92f0', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 9, '{\"data\":\"Task dengan nama Laporan Sistem dan deadline 2019-09-23 telah ditambahkan!\"}', NULL, '2023-06-10 03:51:01', '2023-06-10 03:51:01'),
('59216ed2-c37d-4c3a-8a9f-15c034ff1047', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 7, '{\"data\":\"Task dengan nama Manajemen Volume Ruas Jalan dan deadline 2019-09-16 telah ditambahkan!\"}', NULL, '2023-06-10 01:42:44', '2023-06-10 01:42:44'),
('5a6c5f3a-d82e-4b76-8797-5189de1d7143', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 1, '{\"data\":\"Task dengan nama sdfdsfsdf dan deadline 2023-06-29 telah ditambahkan!\"}', NULL, '2023-06-05 05:33:01', '2023-06-05 05:33:01'),
('5ba94a0f-e47f-40c7-b337-7ce8626fb6f6', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 3, '{\"data\":\"Project dengan nama Pembuatan Apikasi DPMPTSP Kota Palembang telah diupdate!\"}', NULL, '2023-06-10 03:11:19', '2023-06-10 03:11:19'),
('5da21b9d-9b9c-47b8-82f7-2d830b903ab6', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 3, '{\"data\":\"Project dengan nama Sistem tahanan telah diupdate!\"}', NULL, '2023-06-05 05:07:01', '2023-06-05 05:07:01'),
('5db46760-1280-4450-84e1-6758c6a2d889', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Project dengan nama Pengadaan Aplikasi Modul Command Center telah ditambahkan!\"}', NULL, '2023-06-10 01:16:19', '2023-06-10 01:16:19'),
('5e0608e3-f346-4be4-9cb0-4f849b79d5ef', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 3, '{\"data\":\"Task dengan nama sds telah ditambahkan!\"}', NULL, '2023-06-05 05:29:10', '2023-06-05 05:29:10'),
('5e097c91-6c1c-418f-8e0c-4b0f18797f79', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 7, '{\"data\":\"Tim dengan nama Front End Developer telah ditambahkan!\"}', NULL, '2023-06-10 01:32:34', '2023-06-10 01:32:34'),
('6072d47d-3cd7-471a-9779-5a1e6378e57e', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Klien dengan nama Sistem tahanan telah ditambahkan!\"}', '2023-06-04 03:06:24', '2023-06-04 02:12:09', '2023-06-04 03:06:24'),
('61d332cf-0297-4393-afc9-36029ff6419c', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\" Your deposit of post title was successful\"}', '2023-05-21 00:30:06', '2023-05-21 00:23:46', '2023-05-21 00:30:06'),
('62fd241a-5845-4df3-920d-f217afae5c09', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 7, '{\"data\":\"Task dengan nama Modul Notulen dan deadline 2019-09-18 telah ditambahkan!\"}', NULL, '2023-06-10 04:10:54', '2023-06-10 04:10:54'),
('6397aeab-a6e3-4799-97d1-496ebdcbae81', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 9, '{\"data\":\"Task dengan nama Manajemen Volume Ruas Jalan dan deadline 2019-09-25 telah ditambahkan!\"}', NULL, '2023-06-10 03:46:30', '2023-06-10 03:46:30'),
('65c51928-791e-4227-b7da-7ff85975eca6', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 9, '{\"data\":\"Task dengan nama Modul Data Dasar dan deadline 2019-09-10 telah di approved!\"}', NULL, '2023-06-10 03:03:05', '2023-06-10 03:03:05'),
('6677b5dd-16d5-45d4-9c1c-9ba864de9488', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 3, '{\"data\":\"Project dengan nama Pembuatan Aplikasi Pencegahan dan Penanggulangan Karhutla telah ditambahkan!\"}', NULL, '2023-06-09 21:42:11', '2023-06-09 21:42:11'),
('6a0783a0-6a88-4a6b-bfac-20ee1d7250df', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Klien dengan nama ronytelah dibuat\"}', '2023-05-21 02:03:11', '2023-05-21 00:38:20', '2023-05-21 02:03:11'),
('6bedc8f8-5b2d-4ebb-9e22-95eaaa7957c3', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 3, '{\"data\":\"Task dengan nama buat form telah ditambahkan!\"}', '2023-06-04 10:51:37', '2023-05-21 05:25:08', '2023-06-04 10:51:37'),
('6d3a87a4-8145-4a90-92e4-5a238eebe071', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 8, '{\"data\":\"Task dengan nama Modul Disposisi dan deadline 2019-09-18 telah ditambahkan!\"}', NULL, '2023-06-10 04:04:32', '2023-06-10 04:04:32'),
('6efcd2a8-5b3f-43b9-80d4-a24ea4f8759a', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 3, '{\"data\":\"Project dengan nama Sistem tahanan telah ditambahkan!\"}', NULL, '2023-06-05 05:02:26', '2023-06-05 05:02:26'),
('6f4deaf5-9a9d-4cdf-b814-1822d51f2751', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 7, '{\"data\":\"Project dengan nama Pengadaan Aplikasi Modul Command Center telah ditambahkan!\"}', NULL, '2023-06-10 01:16:19', '2023-06-10 01:16:19'),
('6fd7613d-4bd0-44c0-aa89-d77dd730fc04', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\" Your deposit of post title was successful\"}', '2023-05-21 00:21:59', '2023-05-21 00:01:50', '2023-05-21 00:21:59'),
('7161f989-f12f-4514-9065-bfa59bd4990c', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Klien dengan nama Anggot telah ditambahkan!\"}', '2023-06-04 03:06:24', '2023-06-04 02:10:51', '2023-06-04 03:06:24'),
('72e549e8-e892-48f7-ae7c-594af8a1f57c', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 3, '{\"data\":\"Project dengan nama Pembuatan Apikasi DPMPTSP Kota Palembang telah diupdate!\"}', NULL, '2023-06-10 03:06:14', '2023-06-10 03:06:14'),
('734b4967-28c1-49b5-9815-9df17786fe26', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 8, '{\"data\":\"Task dengan nama Modul Agenda dan deadline 2019-09-07 telah ditambahkan!\"}', NULL, '2023-06-10 04:09:08', '2023-06-10 04:09:08'),
('73a85f2e-32d6-48c7-a506-4d9910b34c83', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Project dengan nama Pembuatan Apikasi DPMPTSP Kota Palembang telah diupdate!\"}', NULL, '2023-06-10 03:11:19', '2023-06-10 03:11:19'),
('7671279f-8d7e-4e92-a9c5-3f68d8a334a6', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 3, '{\"data\":\"Task dengan nama buat form telah ditambahkan!\"}', '2023-05-21 05:00:23', '2023-05-21 04:57:15', '2023-05-21 05:00:23'),
('77c7512c-22c6-407d-89d7-91f79190f838', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Klien dengan nama rony telah ditambahkan!\"}', '2023-06-04 03:06:24', '2023-06-04 02:10:05', '2023-06-04 03:06:24'),
('7af4141a-c650-4b3b-8c77-194ce535e1a2', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 3, '{\"data\":\"Project dengan nama Pembuatan Apikasi DPMPTSP Kota Palembang telah diupdate!\"}', NULL, '2023-06-10 03:05:55', '2023-06-10 03:05:55'),
('7fb3ef19-6172-43c7-b106-a987c026eb5f', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 3, '{\"data\":\"Project dengan nama Jasa Konsultan Geospatial System telah ditambahkan!\"}', NULL, '2023-06-09 23:28:01', '2023-06-09 23:28:01'),
('8229eac4-f3ba-4363-8b93-ef1130013355', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Klien dengan nama rony telah ditambahkan!\"}', '2023-06-09 21:12:38', '2023-06-05 04:47:43', '2023-06-09 21:12:38'),
('846467fe-0647-4a49-9e06-8ace48e7ef83', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 9, '{\"data\":\"Task dengan nama Modul Data Dasar dan deadline 2019-09-10 telah di approved!\"}', NULL, '2023-06-10 02:44:50', '2023-06-10 02:44:50'),
('85d02474-d277-47bd-b906-466797d4503b', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 8, '{\"data\":\"Task dengan nama Modul Dokumen dan deadline 2019-09-12 telah ditambahkan!\"}', NULL, '2023-06-10 04:08:21', '2023-06-10 04:08:21'),
('8651d32c-be4c-4d19-ba72-4c4b214fc984', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 2, '{\"data\":\"Anda ditambahkan pada tim Front End Developer!\"}', NULL, '2023-06-03 20:30:43', '2023-06-03 20:30:43'),
('875b689e-6ec6-44a1-9069-171a510fb4e5', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Project dengan nama Sistem tahanan telah diupdate!\"}', '2023-06-09 21:12:38', '2023-06-05 05:07:01', '2023-06-09 21:12:38'),
('8772a5e0-c54a-47f8-a0e2-c37927bff1d2', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Project dengan nama Sistem tahanan telah ditambahkan!\"}', '2023-06-09 21:12:38', '2023-06-05 05:01:36', '2023-06-09 21:12:38'),
('88b23fda-f4e8-4a62-a246-d1158e8a8c5a', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\" Your deposit of post title was successful\"}', '2023-05-21 00:30:06', '2023-05-21 00:23:39', '2023-05-21 00:30:06'),
('88fb4f30-8aa2-4e83-afe9-00677f17671f', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\" Your deposit of dkfjkdfjkd was successful\"}', '2023-05-21 00:21:59', '2023-05-20 23:52:24', '2023-05-21 00:21:59'),
('89822ef8-4109-423a-83b8-14a92422e73a', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Project dengan nama Jasa Konsultan Geospatial System telah ditambahkan!\"}', NULL, '2023-06-09 23:28:01', '2023-06-09 23:28:01'),
('8ba9de8b-a09c-43e3-a5d6-bdf700d1382f', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Project dengan nama Sistem tahanan telah ditambahkan!\"}', '2023-06-03 04:44:02', '2023-05-21 19:47:56', '2023-06-03 04:44:02'),
('8bd31400-0536-4736-a0e0-3bfa6f2df809', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 10, '{\"data\":\"Project dengan nama Pengembangan IDMC telah ditambahkan!\"}', NULL, '2023-06-09 23:46:46', '2023-06-09 23:46:46'),
('8c863dc3-eab3-45ad-a689-643f4ed1077c', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 7, '{\"data\":\"Project dengan nama Pembuatan Sistem Data base Perlengkapan Jalan telah ditambahkan!\"}', NULL, '2023-06-09 22:03:50', '2023-06-09 22:03:50'),
('8cbdab27-6f40-44d9-9712-cf710358c6a2', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 9, '{\"data\":\"Task dengan nama Manajemen Volume Ruas Jalan dan deadline 2019-09-16 telah di approved!\"}', NULL, '2023-06-10 03:46:40', '2023-06-10 03:46:40'),
('9051bb5f-138a-43f2-ad5b-8c91538d2113', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 7, '{\"data\":\"Task dengan nama Modul Data Dasar dan deadline 2019-09-10 perlu di review!\"}', NULL, '2023-06-10 02:34:55', '2023-06-10 02:34:55'),
('9254b3c9-b39a-4b63-9984-5fb11b82a8c8', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\" Your deposit of dkfjkdfjkd was successful\"}', '2023-05-21 00:21:59', '2023-05-20 23:52:57', '2023-05-21 00:21:59'),
('949aedb1-e4b0-45ec-acaa-b1a29ebac7a7', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 3, '{\"data\":\"Project dengan nama Pengembangan IDMC telah diupdate!\"}', NULL, '2023-06-10 03:07:05', '2023-06-10 03:07:05'),
('96b84f88-b41a-4943-95d6-233ad7e3c45b', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 8, '{\"data\":\"Task dengan nama Modul Notulen dan deadline 2019-09-18 telah ditambahkan!\"}', NULL, '2023-06-10 04:10:54', '2023-06-10 04:10:54'),
('9811e175-5624-4bdf-90d0-e55461109be8', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 1, '{\"data\":\"Task dengan nama buat form telah ditambahkan!\"}', '2023-05-21 05:26:12', '2023-05-21 05:25:08', '2023-05-21 05:26:12'),
('98b62737-ca9b-49c5-8a28-45fba58afb28', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 6, '{\"data\":\"Anda ditambahkan pada tim Front End Developer!\"}', NULL, '2023-06-10 01:33:16', '2023-06-10 01:33:16'),
('996ee540-709f-4bbd-a267-113e1a1ee751', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Klien dengan nama Zidan Perdana XL telah ditambahkan!\"}', '2023-06-04 03:06:24', '2023-06-04 02:11:47', '2023-06-04 03:06:24'),
('99aea9ad-489b-4687-82f3-d75d9ea78403', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 7, '{\"data\":\"Project dengan nama Pembuatan Apikasi DPMPTSP Kota Palembang telah ditambahkan!\"}', NULL, '2023-06-10 01:22:59', '2023-06-10 01:22:59'),
('9a2875b3-db60-40e7-86e6-0bf5b33c9a67', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Klien dengan nama sdsfdsfdsf telah ditambahkan!\"}', '2023-06-04 03:06:24', '2023-06-04 02:12:21', '2023-06-04 03:06:24'),
('9a7b1a06-5111-424c-a14a-2d64c538bd67', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 7, '{\"data\":\"Task dengan nama Modul Data Dasar dan deadline 2019-09-10 telah ditambahkan!\"}', NULL, '2023-06-10 01:38:18', '2023-06-10 01:38:18'),
('9ab31345-e7b9-4c0c-a985-0f1649eba268', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 8, '{\"data\":\"Ada komentar baru pada task Modul Notulen\"}', NULL, '2023-06-10 04:46:31', '2023-06-10 04:46:31'),
('9e1b01b6-2514-43d8-b4a6-93f8532dbed5', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\" Your deposit of post title was successful\"}', '2023-05-21 00:30:06', '2023-05-21 00:23:51', '2023-05-21 00:30:06'),
('9fe2921e-9bc9-456b-83af-17e3a0fb1140', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\" Your deposit of post title was successful\"}', '2023-05-21 00:30:06', '2023-05-21 00:23:46', '2023-05-21 00:30:06'),
('a3360ea6-00e8-447d-8730-69a7d5ffc00c', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Project dengan nama Jasa Konsultan Geospatial System telah ditambahkan!\"}', NULL, '2023-06-09 23:28:01', '2023-06-09 23:28:01'),
('a86db07a-2294-4dd8-a9c4-5d0752b44cb9', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 7, '{\"data\":\"Task dengan nama Modul Surat Masuk dan deadline 2019-09-14 telah ditambahkan!\"}', NULL, '2023-06-10 03:57:45', '2023-06-10 03:57:45'),
('aa330790-642f-4118-a823-acd74f0368c4', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Project dengan nama Pembangunaan Sistem Informasi Sarana dan Prasarana Perkebunan telah diupdate!\"}', NULL, '2023-06-09 21:39:39', '2023-06-09 21:39:39'),
('ada5036d-5bae-4d62-969e-f5c843c6e34f', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 9, '{\"data\":\"Task dengan nama Modul Data Dasar dan deadline 2019-09-10 telah ditambahkan!\"}', NULL, '2023-06-10 01:38:18', '2023-06-10 01:38:18'),
('add65d32-f00f-4265-8db2-a0d4ac5323ed', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 1, '{\"data\":\"Anda ditambahkan pada tim Front End Developer!\"}', NULL, '2023-06-10 01:33:15', '2023-06-10 01:33:15'),
('b2b1eb88-8b62-48d0-9e58-b33903925f48', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Project dengan nama Sistem tahanan telah ditambahkan!\"}', '2023-05-21 02:03:11', '2023-05-21 02:03:02', '2023-05-21 02:03:11'),
('b5545fda-398e-4c4a-90be-d0aa6c242e5d', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 3, '{\"data\":\"Project dengan nama Pembuatan Apikasi DPMPTSP Kota Palembang telah diupdate!\"}', NULL, '2023-06-10 03:11:29', '2023-06-10 03:11:29'),
('b80140d9-12b9-40a4-a709-b6a1ce424394', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 7, '{\"data\":\"Task dengan nama Manajemen Volume Ruas Jalan dan deadline 2019-09-25 telah ditambahkan!\"}', NULL, '2023-06-10 03:46:30', '2023-06-10 03:46:30'),
('b9182ca6-07a4-4747-88c1-798f66092900', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 8, '{\"data\":\"Anda ditambahkan pada tim Front End Developer!\"}', NULL, '2023-06-10 03:53:28', '2023-06-10 03:53:28'),
('b9b9e3ae-e4e1-4b7b-b874-d3587a1b98b0', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Project dengan nama Pembangunaan Sistem Informasi Sarana dan Prasarana Perkebunan telah ditambahkan!\"}', NULL, '2023-06-09 21:33:50', '2023-06-09 21:33:50'),
('b9ecd97b-e64e-4a6a-a4e5-8e9974ebf06e', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 8, '{\"data\":\"Task dengan nama Manajemen Aset dan deadline 2019-09-18 telah ditambahkan!\"}', NULL, '2023-06-10 01:40:08', '2023-06-10 01:40:08'),
('be02e9c4-5f92-4cf9-a051-37728b7c2b01', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Project dengan nama Pengembangan IDMC telah diupdate!\"}', NULL, '2023-06-10 03:07:47', '2023-06-10 03:07:47'),
('c08d9494-2443-4f27-836d-ae71ae2fb488', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 1, '{\"data\":\"Task dengan nama sds dan 2023-06-30telah ditambahkan!\"}', NULL, '2023-06-05 05:31:19', '2023-06-05 05:31:19'),
('c19c5801-87ce-4d4e-a604-1d8647f2bc3e', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 9, '{\"data\":\"Task dengan nama Manajemen Asset dan deadline 2019-09-14 telah ditambahkan!\"}', NULL, '2023-06-10 03:49:37', '2023-06-10 03:49:37'),
('c4b941bf-13cb-4e6a-bf68-2cb984ac90c7', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Project dengan nama Pembuatan Apikasi DPMPTSP Kota Palembang telah diupdate!\"}', NULL, '2023-06-10 03:05:55', '2023-06-10 03:05:55'),
('c57a3de4-bc34-44dc-95e9-a1d70959e8e5', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 1, '{\"data\":\"Anda ditambahkan pada tim Front End Developer!\"}', '2023-06-04 05:52:14', '2023-06-03 20:30:43', '2023-06-04 05:52:14'),
('c62e7918-a0d6-4b65-98a2-b59380e39cbc', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Klien dengan nama Badan Pertanahan Nasional telah ditambahkan!\"}', NULL, '2023-06-09 23:37:54', '2023-06-09 23:37:54'),
('c6ff720d-b5ab-479a-9490-8bbc1f3a76b7', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 3, '{\"data\":\"Tim dengan nama Back End Developer telah ditambahkan!\"}', '2023-06-04 10:51:37', '2023-06-03 19:30:25', '2023-06-04 10:51:37'),
('c8892816-3f4f-45d4-a319-c74316b87c43', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Project dengan nama Pengembangan Aplikasi Perkantoran (E-Office) telah ditambahkan!\"}', NULL, '2023-06-09 23:39:38', '2023-06-09 23:39:38'),
('ce0fbd5c-ee7a-40af-8b55-14e2d8776677', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 3, '{\"data\":\"Task dengan nama sdfdsfsdf dan deadline 2023-06-29 telah ditambahkan!\"}', NULL, '2023-06-05 05:33:01', '2023-06-05 05:33:01'),
('ce27ac6e-1ee2-4e20-9f9e-728b7c37f251', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Klien dengan nama Dinas Perhubungan Provinsi DKI Jakarta telah ditambahkan!\"}', NULL, '2023-06-09 22:02:17', '2023-06-09 22:02:17'),
('cf48151d-eb61-4e63-8524-a91c10a4b154', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 8, '{\"data\":\"Anda ditambahkan pada tim Back End Developer!\"}', NULL, '2023-06-10 01:31:52', '2023-06-10 01:31:52'),
('cfa7b4c6-24aa-47aa-b5dd-df937fce2706', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 3, '{\"data\":\"Tim dengan nama Front End Developer telah ditambahkan!\"}', '2023-06-04 10:51:37', '2023-06-03 19:22:03', '2023-06-04 10:51:37'),
('cfaf8d0a-cf18-4832-8a81-1d66d10862d9', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Project dengan nama Pembuatan Apikasi DPMPTSP Kota Palembang telah ditambahkan!\"}', NULL, '2023-06-10 01:22:59', '2023-06-10 01:22:59'),
('d2d2b3a5-3bae-42cb-928e-c437201bc728', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 1, '{\"data\":\"Tim dengan nama Front End Developer telah ditambahkan!\"}', '2023-06-04 05:52:14', '2023-05-21 05:39:36', '2023-06-04 05:52:14'),
('d4814633-3bb6-4a48-86f6-18c5af790849', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 9, '{\"data\":\"Task dengan nama Manajemen Volume Ruas Jalan dan deadline 2019-09-16 telah ditambahkan!\"}', NULL, '2023-06-10 01:42:44', '2023-06-10 01:42:44'),
('d6d24761-f943-44b7-ba00-6ea88004e7f6', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Klien dengan nama dsfdsf telah ditambahkan!\"}', '2023-06-04 03:06:24', '2023-06-04 02:10:35', '2023-06-04 03:06:24'),
('d81fe3e7-5052-44b8-a950-a4ba2c4a6d47', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\" Your deposit of dkfjkdfjkd was successful\"}', '2023-05-21 00:21:59', '2023-05-20 23:52:28', '2023-05-21 00:21:59'),
('da8b0fc3-dbdd-4483-84f0-1567d7f584e4', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\" Your deposit of post title was successful\"}', '2023-05-21 00:30:06', '2023-05-21 00:23:52', '2023-05-21 00:30:06'),
('dc351de7-dcd6-4159-8e95-91b837bb5abc', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Project dengan nama Pembuatan Apikasi DPMPTSP Kota Palembang telah diupdate!\"}', NULL, '2023-06-10 03:23:00', '2023-06-10 03:23:00'),
('e4142563-a279-41e3-a478-339bddf845a0', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 7, '{\"data\":\"Tim dengan nama Back End Developer telah ditambahkan!\"}', NULL, '2023-06-10 01:31:21', '2023-06-10 01:31:21'),
('e572b00d-f8f4-45d6-b2c2-0dc643e4eff1', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 7, '{\"data\":\"Task dengan nama Modul Dokumen dan deadline 2019-09-12 telah ditambahkan!\"}', NULL, '2023-06-10 04:08:21', '2023-06-10 04:08:21'),
('e6136440-4de4-45b1-ace9-12145d8abdde', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Project dengan nama Sistem tahanan telah ditambahkan!\"}', '2023-06-09 21:12:38', '2023-06-05 04:48:29', '2023-06-09 21:12:38'),
('e7c982c7-d05e-40c4-bc4d-af32581b1ce2', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 7, '{\"data\":\"Task dengan nama Modul Agenda dan deadline 2019-09-07 telah ditambahkan!\"}', NULL, '2023-06-10 04:09:08', '2023-06-10 04:09:08'),
('e8701f2a-d538-46ce-901c-c7e055bcd385', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Klien dengan nama Dinas Penanggulangan Kebakaran Dan Penyelamatan Provinsi DKI Jakarta telah ditambahkan!\"}', NULL, '2023-06-09 23:32:10', '2023-06-09 23:32:10'),
('e948e933-6ae8-4fca-813a-7b79c75e7b83', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 7, '{\"data\":\"Task dengan nama Manajemen Asset dan deadline 2019-09-14 telah ditambahkan!\"}', NULL, '2023-06-10 03:49:37', '2023-06-10 03:49:37'),
('ebbd5944-78ca-4cc3-a7b9-43e4882e83cd', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 1, '{\"data\":\"Task dengan nama Membuat landing page telah ditambahkan!\"}', '2023-06-04 05:52:14', '2023-06-03 20:31:31', '2023-06-04 05:52:14'),
('efd1b921-128b-43b3-acd2-103527fee411', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 9, '{\"data\":\"Task dengan nama Manajemen Volume Ruas Jalan dan deadline 2019-09-16 telah di approved!\"}', NULL, '2023-06-10 02:24:00', '2023-06-10 02:24:00'),
('f15d2ee3-c31c-4c59-a470-a81381f68443', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\" Your deposit of dkfjkdfjkd was successful\"}', '2023-05-21 00:21:59', '2023-05-20 23:52:26', '2023-05-21 00:21:59'),
('f1653592-84a7-429c-9a31-b1b374445c7a', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Project dengan nama Pembangunan Sistem Informasi Dinas Penanggulangan Kebakaran Dan Penyelamatan telah ditambahkan!\"}', NULL, '2023-06-09 23:34:22', '2023-06-09 23:34:22'),
('f41719a7-7575-479c-984c-c1fe58d07c2a', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Klien dengan nama Front End Developer telah ditambahkan!\"}', '2023-06-04 03:06:24', '2023-06-04 02:11:08', '2023-06-04 03:06:24'),
('f4d5d3fa-3aa2-434b-a676-1f0199f3714e', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 9, '{\"data\":\"Anda ditambahkan pada tim Back End Developer!\"}', NULL, '2023-06-10 01:31:52', '2023-06-10 01:31:52'),
('f7282017-1976-45e1-bded-770a20abdd1f', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 8, '{\"data\":\"Task dengan nama Modul Surat Masuk dan deadline 2019-09-14 telah ditambahkan!\"}', NULL, '2023-06-10 03:57:45', '2023-06-10 03:57:45'),
('f8f212bb-d9bc-4676-9635-aee46fb3b03f', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Klien dengan nama Badan Penanggulangan Bencana Daerah Kabupaten Seruyan telah ditambahkan!\"}', NULL, '2023-06-09 21:39:14', '2023-06-09 21:39:14'),
('fa0db49b-7e78-4962-b2d3-659c409f4890', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 2, '{\"data\":\"Tim dengan nama Front End Developer telah ditambahkan!\"}', NULL, '2023-05-21 05:39:37', '2023-05-21 05:39:37'),
('fb1f83d1-1a86-4ff0-b66d-f109ef0675d8', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Project dengan nama Pengembangan IDMC telah ditambahkan!\"}', NULL, '2023-06-09 23:46:46', '2023-06-09 23:46:46'),
('fbc2d20b-b032-4bfa-9d9b-67eb1ab073ef', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 8, '{\"data\":\"Ada komentar baru pada task Modul Notulen\"}', NULL, '2023-06-10 04:45:30', '2023-06-10 04:45:30'),
('fceee3d6-2a6d-4038-bf29-51a8de891976', 'App\\Notifications\\WelcomeNotification', 'App\\Models\\User', 5, '{\"data\":\"Klien dengan nama Badan Pusat Statistik telah ditambahkan!\"}', NULL, '2023-06-09 23:25:24', '2023-06-09 23:25:24');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2023-05-20 21:23:19', '2023-05-20 21:23:19'),
(2, 'role-create', 'web', '2023-05-20 21:23:19', '2023-05-20 21:23:19'),
(3, 'role-edit', 'web', '2023-05-20 21:23:19', '2023-05-20 21:23:19'),
(4, 'role-delete', 'web', '2023-05-20 21:23:19', '2023-05-20 21:23:19'),
(5, 'member-list', 'web', '2023-05-20 21:23:19', '2023-05-20 21:23:19'),
(6, 'member-create', 'web', '2023-05-20 21:23:19', '2023-05-20 21:23:19'),
(7, 'member-edit', 'web', '2023-05-20 21:23:19', '2023-05-20 21:23:19'),
(8, 'member-delete', 'web', '2023-05-20 21:23:19', '2023-05-20 21:23:19'),
(9, 'setting-list', 'web', '2023-05-20 21:23:19', '2023-05-20 21:23:19'),
(10, 'setting-edit', 'web', '2023-05-20 21:23:19', '2023-05-20 21:23:19'),
(11, 'klien', 'web', '2023-05-20 21:23:19', '2023-05-20 21:23:19'),
(12, 'project', 'web', '2023-05-20 21:23:19', '2023-05-20 21:23:19'),
(13, 'tim', 'web', '2023-05-20 21:23:19', '2023-05-20 21:23:19'),
(14, 'task-pm', 'web', '2023-05-20 21:23:19', '2023-05-20 21:23:19'),
(15, 'task-anggota', 'web', '2023-05-20 21:23:19', '2023-05-20 21:23:19'),
(16, 'komentar', 'web', '2023-05-20 21:23:19', '2023-05-20 21:23:19');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id_project` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `deadline` date NOT NULL,
  `budget` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_klien` bigint(20) UNSIGNED NOT NULL,
  `pm` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id_project`, `nama`, `deskripsi`, `tgl_mulai`, `tgl_selesai`, `deadline`, `budget`, `status`, `id_klien`, `pm`, `id_user`, `created_at`, `updated_at`) VALUES
(10, 'Pembangunaan Sistem Informasi Sarana dan Prasarana Perkebunan', 'Sistem yang dibangun akan berguna agar semua pemangku kepentingan di sarana prasarana kelapa sawit bisa saling terhubung, mempercepat proses, meningkatkan efisiensi, dan meningkatkan produktifitas. Sistem informasi Sarana dan Prasarana terdiri dari 3 aplikasi utama yaitu :\r\na.	Manajemen Proposal\r\nb.	Manajemen Katalog Sarana Prasarana\r\nc.	Manajemen Laporan, Monitoring Data dan Proses', '2020-09-16', NULL, '2020-12-14', '500000000', 'Not Started', 14, 3, 5, '2023-06-09 21:33:50', '2023-06-09 21:33:50'),
(11, 'Pembuatan Aplikasi Pencegahan dan Penanggulangan Karhutla', 'Fitur/Modul\r\n\r\nFUNGSI PENCEGAHAN\r\n-	Sistem Peringkat Bahaya Kebakaran (SPBK) sebagai dasar kegiatan patroli dan penyuluhan;\r\n-	Peta Tingkat   Rawan   Kebakaran   Hutan dan  Lahan, sebagai dasar kegiatan perencanaan.\r\nFUNGSI PEMADAMAN\r\n-	Database Sumberdaya Pemadaman beserta Peta Sebaran Lokasi/Capaian Wilayah, yang meliputi ketersediaan Sarana-prasarana (sumber air/sungai, alat transportasi, dan peralatan pemadaman).\r\nFUNGSI PENANGANAN PASCA KEJADIAN\r\n-	Tindakan Penegakan Hukum, menampilkan informasi terkait dengan bukti (presentasi) kejadian kebakaran hutan dan lahan dalam proses hukum yang sedang berjalan;', '2020-08-19', NULL, '2020-12-16', '600000000', 'Not Started', 14, 3, 5, '2023-06-09 21:42:11', '2023-06-09 21:42:11'),
(12, 'Pembuatan Sistem Data base Perlengkapan Jalan', 'Pembuatan Sistem Data base Perlengkapan Jalan dimaksudkan untuk menunjang kegiatan perencanaan manajemen dan rekayasa lalu lintas, dalam hal identifikasi masalah lalu lintas yaitu inventaris prasarana lalu lintas dan perlengkapan jalan dan potensi kecelakaan dan kemacetan lalu lintas.', '2019-08-26', NULL, '2019-12-13', '300000000', 'In Progress', 16, 7, 5, '2023-06-09 22:03:50', '2023-06-09 22:03:50'),
(13, 'Jasa Konsultan Geospatial System', 'a)	Geospatial Processing (QGIS Plugin)\r\n-	Handling Error Geometry\r\n-	Lokasi error (gap/overlap) format : geojson dan shapefile  \r\n-	Download dan upload file (format geojson dan shapefile ) ke Working Database\r\n-	API support ke Working Database\r\n\r\nb)	Geospatial Management \r\n-	Manajemen Peta Landmark (foto, identitas, approval)\r\n-	Manajemen Peta WA (Upload Image)\r\n-	Manajemen Peta WS (Upload Image)\r\n-	Manajemen Peta WB (Upload Image)\r\n-	Manajemen Peta Wolkerstat\r\n-	Manajemen Peta Landmark dan Wilkerstat (geojson, shapefile)\r\n-	API Geospasial \r\n-	Manajemen Quality Control file geojson atau shapefile wilkerstat (Propinsi, Pusat)\r\n-	Histori Action Pengguna', '2019-09-09', NULL, '2019-12-29', '600000000', 'In Progress', 17, 3, 5, '2023-06-09 23:28:01', '2023-06-09 23:28:01'),
(14, 'Jasa Konsultan Geospatial System', 'a)	Geospatial Processing (QGIS Plugin)\r\n-	Handling Error Geometry\r\n-	Lokasi error (gap/overlap) format : geojson dan shapefile  \r\n-	Download dan upload file (format geojson dan shapefile ) ke Working Database\r\n-	API support ke Working Database\r\n\r\nb)	Geospatial Management \r\n-	Manajemen Peta Landmark (foto, identitas, approval)\r\n-	Manajemen Peta WA (Upload Image)\r\n-	Manajemen Peta WS (Upload Image)\r\n-	Manajemen Peta WB (Upload Image)\r\n-	Manajemen Peta Wolkerstat\r\n-	Manajemen Peta Landmark dan Wilkerstat (geojson, shapefile)\r\n-	API Geospasial \r\n-	Manajemen Quality Control file geojson atau shapefile wilkerstat (Propinsi, Pusat)\r\n-	Histori Action Pengguna', '2019-09-09', NULL, '2019-12-29', '600000000', 'In Progress', 17, 3, 5, '2023-06-09 23:28:01', '2023-06-09 23:28:01'),
(15, 'Pembangunan Sistem Informasi Dinas Penanggulangan Kebakaran Dan Penyelamatan', 'Sistem Informasi Permohonan Layananan, \r\n-	Pelaksanaan Edukasi\r\n-	Pelaksanaan Sosialisasi\r\n-	Pelaksanaan Uji Mutu\r\n-	Notifikasi\r\n\r\nSistem Informasi Pemeriksaan Gedung\r\n-	Gedung\r\n-	Permohonan PTSP\r\n-	Permohonan Gedung\r\n-	Pemeriksaan Gedung Terprogram\r\n-	Hasil Pemeriksaan', '2019-08-12', NULL, '2019-12-12', '400000000', 'Not Started', 18, 10, 5, '2023-06-09 23:34:22', '2023-06-09 23:34:22'),
(16, 'Pengembangan Aplikasi Perkantoran (E-Office)', 'Pembangunan Aplikasi e-Office secara modular dengan komponen modul sebagai berikut :\r\n	Modul Surat Masuk untuk pengelolaan surat masuk dari lembaga luar dan surat antar unit kerja di lingkungan ATR/BPN yang sesuai aturan tata naskah;\r\n	Modul Disposisi untuk pengelolaan disposisi dari tingkat pimpinan hingga ke staf fungsional.\r\n	Modul Dokumen untuk mengelola seluruh lampiran surat yang terintegrasi dengan Microsoft Sharepoint;', '2019-09-06', NULL, '2019-12-04', '300000000', 'In Progress', 19, 7, 5, '2023-06-09 23:39:38', '2023-06-09 23:39:38'),
(17, 'Pengembangan IDMC', 'Mengembangkan aplikasi IDMC (Integrated Development Management Center) dengan menambahkan fitur dashboard kepegawaian, yang berisikan laporan  dan  data  analytic  kepegawaian,  sehingga  dapat  data kepegawaian dapat tersaji dengan lebih cepat dan akurat.', '2018-11-12', NULL, '2018-12-26', '150000000', 'Not Started', 20, 10, 5, '2023-06-09 23:46:46', '2023-06-09 23:46:46'),
(18, 'Pengadaan Aplikasi Modul Command Center', 'Sistem Informasi Dashboard sebagai pusat data terpadu di lingkungan Pemerintah Kota Magelang sehingga tercipta koordinasi, integrasi dan sinkronisasi data, sebagai dasar pengambilan keputusan serta informasi dalam perencanaan, pelaksanaan dan pengendalian kegiatan pembangunan yang bermanfaat bagi masyarakat.', '2018-10-01', NULL, '2018-12-29', '250000000', 'Not Started', 21, 7, 5, '2023-06-10 01:16:19', '2023-06-10 01:16:19'),
(19, 'Pembuatan Apikasi DPMPTSP Kota Palembang', 'Pembangunan Sistem Aplikasi Layanan Perizinan Kota Palembang yang memiliki standarisasi struktur data pada database sehingga operasi data bisa dilakukan dengan cepat dan tepat.', '2018-10-28', NULL, '2018-12-29', '300000000', 'In Progress', 22, 7, 5, '2023-06-10 01:22:59', '2023-06-10 03:22:59');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'anggota', 'web', '2023-05-20 21:23:19', '2023-05-20 21:23:19'),
(2, 'pm', 'web', '2023-05-20 21:23:20', '2023-05-20 21:23:20'),
(3, 'Admin', 'web', '2023-05-20 21:23:21', '2023-05-20 21:23:21');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(15, 1),
(16, 1),
(13, 2),
(14, 2),
(16, 2),
(1, 3),
(2, 3),
(3, 3),
(4, 3),
(5, 3),
(6, 3),
(7, 3),
(8, 3),
(9, 3),
(10, 3),
(11, 3),
(12, 3);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`) VALUES
(1, 'logo', 'uploads/picsi.jpeg'),
(2, 'site_name', NULL),
(3, 'keyword', NULL),
(4, 'description', NULL),
(5, 'url', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id_task` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prioritas` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_anggota` bigint(20) UNSIGNED NOT NULL,
  `deadline` date NOT NULL,
  `approved` char(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id_task` bigint(20) DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submit_task` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id_task`, `nama`, `deskripsi`, `type`, `prioritas`, `id_anggota`, `deadline`, `approved`, `parent_id_task`, `status`, `submit_task`, `created_at`, `updated_at`) VALUES
(4, 'Modul Data Dasar', 'Membuat CRUD\r\nModul Data Dasar\r\n-	Data User\r\n-	Data Ruas Jalan Asset\r\n-	Data Ruas Jalan TC\r\n-	Data Ruas Jalan CTMC\r\n-	Data Ruas Jalan DRK\r\n-	Data Arah\r\n-	Data Jenis Kendaraan\r\n-	Data Jenis Kelengkapan\r\n-	Data Fasilitas dan Perlengkapan\r\n-	Data Master Asset\r\n-	Data Kondisi Jalan', 'Hard', 'High', 5, '2019-09-10', '1', 4, 'done', 'sudah selesai ....', '2023-06-10 01:38:17', '2023-06-10 03:03:15'),
(6, 'Manajemen Volume Ruas Jalan', 'Membuat CRUD\r\nManajemen Volume Ruas Jalan\r\n-	Data volume ruas jalan mencakup: foto ruas jalan, volume ruas jalan per jenis kendaraan dan dikelompokan berdasarkan waktu yang di tentukan\r\n-	Data disajikan dengan bentuk grafik\r\n-	Data volume ruas jalan dapat ditambah melalui website maupun aplikasi mobile', 'Medium', 'Low', 5, '2019-09-16', '1', 6, 'done', 'sudah selesai', '2023-06-10 01:42:44', '2023-06-10 03:46:40'),
(7, 'Manajemen Daerah Rawan Kecelakaan', 'Membuat CRUD\r\nManajemen Daerah Rawan Kecelakaan	\r\n- Data daerah rawan kecelakaan mencakup: foto sketsa penampang jalan, data geometri jalan, data survey lapangan\r\n-	Data geometri jalan dan data survey lapangan dapat di tambah melalui aplikasi mobile\r\n-	Data ruas jalan daerah rawan kecelakaan dapat di tambah melalui website', 'Medium', 'Normal', 5, '2019-09-25', '0', NULL, 'inprogress', NULL, '2023-06-10 03:46:30', '2023-06-10 03:48:14'),
(8, 'Manajemen Asset', 'Membuat CRUD\r\nManajemen Asset\r\n-	Data Asset yang mencakup: foto asset, lokasi asset, dan kondisi asset\r\n-	Data Asset dapat ditambah melalui website maupun aplikasi mobile', 'Medium', 'Normal', 5, '2019-09-14', NULL, NULL, 'inprogress', NULL, '2023-06-10 03:49:37', '2023-06-10 03:49:37'),
(9, 'Laporan Sistem', '-	Rekap Asset berdasarkan Jenis Asset\r\n-	Rekap Asset berdasarkan Kondisi\r\n-	Rekap Asset berdasarkan Status\r\n-	Rekap Data Volume Ruas Jalan berisi grafik per kendaraan per 15 menit\r\n-	Rekap Data Volume Ruas Jalan berbentuk table berisi Volume Ruas Jalan per kendaraan per 15 menit', 'Medium', 'Normal', 5, '2019-09-23', NULL, NULL, 'notstarted', NULL, '2023-06-10 03:51:01', '2023-06-10 03:51:01'),
(10, 'Modul Surat Masuk', 'Membuat UI \r\nModul Surat Masuk untuk pengelolaan surat masuk dari lembaga luar dan surat antar unit kerja di lingkungan ATR/BPN yang sesuai aturan tata naskah;', 'Hard', 'High', 4, '2019-09-14', NULL, NULL, 'inprogress', NULL, '2023-06-10 03:57:45', '2023-06-10 03:57:45'),
(11, 'Modul Disposisi', 'Membuat UI \r\nModul Disposisi untuk pengelolaan disposisi dari tingkat pimpinan hingga ke staf fungsional.', 'Hard', 'High', 4, '2019-09-18', NULL, NULL, 'inprogress', NULL, '2023-06-10 04:04:32', '2023-06-10 04:04:32'),
(12, 'Modul Dokumen', 'Modul Dokumen untuk mengelola seluruh lampiran surat yang terintegrasi dengan Microsoft Sharepoint;', 'Medium', 'Normal', 4, '2019-09-12', NULL, NULL, 'notstarted', NULL, '2023-06-10 04:08:21', '2023-06-10 04:08:21'),
(13, 'Modul Agenda', 'Modul Agenda untuk pengelolaan agenda pegawai yang terintegrasi dengan Microsoft Outlook', 'Medium', 'High', 4, '2019-09-07', NULL, NULL, 'inprogress', NULL, '2023-06-10 04:09:08', '2023-06-10 04:09:08'),
(14, 'Modul Notulen', 'Modul Notulen untuk pengelolaan notulensi rapat yang terintegrasi dengan jadwal rapat di Modul Agenda.', 'Medium', 'High', 4, '2019-09-18', NULL, NULL, 'inprogress', NULL, '2023-06-10 04:10:54', '2023-06-10 04:10:54');

-- --------------------------------------------------------

--
-- Table structure for table `tims`
--

CREATE TABLE `tims` (
  `id_tim` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_project` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tims`
--

INSERT INTO `tims` (`id_tim`, `nama`, `deskripsi`, `id_project`, `id_user`, `created_at`, `updated_at`) VALUES
(4, 'Back End Developer', 'Tim Back End bertugas untuk membuat API', 12, 7, '2023-06-10 01:31:21', '2023-06-10 01:31:21'),
(5, 'Front End Developer', 'Tim Front End bertugas untuk membuat tampilan pada website', 12, 7, '2023-06-10 01:32:34', '2023-06-10 01:32:34'),
(6, 'Front End Developer', 'TIm Front End bertugas membuat tampilan yang responsive dan user friendly', 16, 7, '2023-06-10 03:52:38', '2023-06-10 03:52:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `avatar`, `no_hp`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'tofan', 'tofan@gmail.com', '2023-05-20 21:23:20', '$2y$10$pNeFtCN8veOcb2J/OWmbm.N.dsd8S06DrESFkO4.qfDB3MIlT7e02', NULL, '081225027507', 'X2t0Dj8QG5l1o01YBSVqSgwGuAfj5z7Td5sw72gxTGXqUmqMeJSuSNhYkzkx', '2023-05-20 21:23:20', '2023-05-20 21:23:20'),
(3, 'bagus', 'bagus@gmail.com', '2023-05-20 21:23:21', '$2y$10$cjndkCVPRG4tyVROwfwFvOcbjJZTcq5ideoDggZxpmr7K/w/jFm2y', NULL, '081225027507', 'UfIhqzC4egokO6ixZvWAVwenedbaZlUGCdRnB0NH0Zs4WJrBWtbLIqVfeOqW', '2023-05-20 21:23:21', '2023-05-20 21:23:21'),
(5, 'FikriDev', 'admin@gmail.com', NULL, '$2y$10$Chhdv0tvO4YeoIHBROnGP.LfUQFfbbCRiu5OpCzmk0zZ39ZvC5rjW', NULL, '081225027507', NULL, '2023-05-20 21:23:21', '2023-05-20 21:23:21'),
(6, 'Tofan Bagus Apriyanto', 'anjayy@gmail.com', NULL, '$2y$10$TiJnswtM7WFxOOqljAbqUe30/89xP2hCyLKLhLrx/o/Ln81hUZRCW', NULL, '081225027507', NULL, '2023-05-20 22:35:04', '2023-05-20 22:44:24'),
(7, 'Anggit Dwi Arifin', 'anggit@gmail.com', NULL, '$2y$10$xnwhB9Qt6OVLBmV/8OLG0.vOQIwo6Lz7MvkM28foqlg6T4g5DgfeW', NULL, '089650888927', NULL, '2023-06-09 21:51:08', '2023-06-09 21:51:08'),
(8, 'Rony Tri Efendi', 'rony@gmail.com', NULL, '$2y$10$reqxd54SnD2ZkGyfRJ6wludDEZz5jk5FRKxlIEiheezldn0fpfTnC', NULL, '088220135776', NULL, '2023-06-09 21:52:16', '2023-06-09 21:52:16'),
(9, 'Zidan Septian Perdana', 'zidan@gmail.com', NULL, '$2y$10$t/3UPZ1nLJKEqqx5BWmHe.1BLBJVfjryoKYBAL/eYGeaRXnE2MUV2', NULL, '085876927725', NULL, '2023-06-09 21:53:28', '2023-06-09 21:53:28'),
(10, 'Ari Anjani', 'ari@gmail.com', NULL, '$2y$10$efnluQIcRxPQRFDbOW3VZ.85vybQx1U2lb2h5K5rXnVp1VBixVwgy', NULL, '081532764372', NULL, '2023-06-09 23:29:23', '2023-06-09 23:29:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject_type`,`subject_id`),
  ADD KEY `causer` (`causer_type`,`causer_id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indexes for table `anggotas`
--
ALTER TABLE `anggotas`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `anggotas_id_tim_foreign` (`id_tim`),
  ADD KEY `anggotas_id_users_foreign` (`id_users`),
  ADD KEY `anggotas_id_user_foreign` (`id_user`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `kliens`
--
ALTER TABLE `kliens`
  ADD PRIMARY KEY (`id_klien`),
  ADD KEY `kliens_id_user_foreign` (`id_user`);

--
-- Indexes for table `komentars`
--
ALTER TABLE `komentars`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `komentars_id_task_foreign` (`id_task`),
  ADD KEY `komentars_id_user_foreign` (`id_user`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id_project`),
  ADD KEY `projects_id_klien_foreign` (`id_klien`),
  ADD KEY `projects_pm_foreign` (`pm`),
  ADD KEY `projects_id_user_foreign` (`id_user`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settings_key_index` (`key`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id_task`),
  ADD KEY `tasks_id_anggota_foreign` (`id_anggota`);

--
-- Indexes for table `tims`
--
ALTER TABLE `tims`
  ADD PRIMARY KEY (`id_tim`),
  ADD KEY `tims_id_project_foreign` (`id_project`),
  ADD KEY `tims_id_user_foreign` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `anggotas`
--
ALTER TABLE `anggotas`
  MODIFY `id_anggota` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `kliens`
--
ALTER TABLE `kliens`
  MODIFY `id_klien` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `komentars`
--
ALTER TABLE `komentars`
  MODIFY `id_komentar` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id_project` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id_task` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tims`
--
ALTER TABLE `tims`
  MODIFY `id_tim` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggotas`
--
ALTER TABLE `anggotas`
  ADD CONSTRAINT `anggotas_id_tim_foreign` FOREIGN KEY (`id_tim`) REFERENCES `tims` (`id_tim`) ON DELETE CASCADE,
  ADD CONSTRAINT `anggotas_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `anggotas_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kliens`
--
ALTER TABLE `kliens`
  ADD CONSTRAINT `kliens_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `komentars`
--
ALTER TABLE `komentars`
  ADD CONSTRAINT `komentars_id_task_foreign` FOREIGN KEY (`id_task`) REFERENCES `tasks` (`id_task`) ON DELETE CASCADE,
  ADD CONSTRAINT `komentars_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_id_klien_foreign` FOREIGN KEY (`id_klien`) REFERENCES `kliens` (`id_klien`) ON DELETE CASCADE,
  ADD CONSTRAINT `projects_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `projects_pm_foreign` FOREIGN KEY (`pm`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_id_anggota_foreign` FOREIGN KEY (`id_anggota`) REFERENCES `anggotas` (`id_anggota`) ON DELETE CASCADE;

--
-- Constraints for table `tims`
--
ALTER TABLE `tims`
  ADD CONSTRAINT `tims_id_project_foreign` FOREIGN KEY (`id_project`) REFERENCES `projects` (`id_project`) ON DELETE CASCADE,
  ADD CONSTRAINT `tims_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
