-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : dim. 19 juin 2022 à 20:39
-- Version du serveur :  5.7.34
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `DoodayServer`
--

-- --------------------------------------------------------

--
-- Structure de la table `doodays`
--

CREATE TABLE `doodays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `doodays`
--

INSERT INTO `doodays` (`id`, `name`, `created_at`, `updated_at`, `user_id`) VALUES
(36, 'testpostman0', '2022-06-09 19:40:14', '2022-06-09 19:40:14', 1),
(37, 'testpostman1', '2022-06-09 19:40:57', '2022-06-09 19:40:57', 1),
(38, 'testpostman2', '2022-06-09 19:42:44', '2022-06-09 19:42:44', 2),
(39, 'testsite', '2022-06-10 18:47:29', '2022-06-10 18:47:29', 1),
(40, 'bowling', '2022-06-11 19:15:51', '2022-06-11 19:15:51', 1),
(41, 'elias', '2022-06-13 08:47:21', '2022-06-13 08:47:21', 1),
(42, 'anissa', '2022-06-13 09:46:26', '2022-06-13 09:46:26', 1),
(43, 'romain', '2022-06-13 13:43:50', '2022-06-13 13:43:50', 1),
(44, 'azdad', '2022-06-14 05:48:19', '2022-06-14 05:48:19', 1),
(45, 'azertyuiopoiuytreza', '2022-06-14 05:50:24', '2022-06-14 05:50:24', 1),
(46, 'aaa', '2022-06-14 05:52:31', '2022-06-14 05:52:31', 1),
(47, 'bbb', '2022-06-14 05:54:55', '2022-06-14 05:54:55', 1),
(48, 'bbb', '2022-06-14 05:54:57', '2022-06-14 05:54:57', 1),
(49, 'bbb', '2022-06-14 05:54:58', '2022-06-14 05:54:58', 1),
(50, 'bbb', '2022-06-14 05:54:58', '2022-06-14 05:54:58', 1),
(51, 'bbb', '2022-06-14 05:54:59', '2022-06-14 05:54:59', 1),
(52, 'bbb', '2022-06-14 05:54:59', '2022-06-14 05:54:59', 1),
(53, 'bbb', '2022-06-14 05:55:44', '2022-06-14 05:55:44', 1),
(54, 'ccc', '2022-06-14 05:56:29', '2022-06-14 05:56:29', 1),
(55, 'cdgbccsrthdzer grr', '2022-06-14 06:58:10', '2022-06-14 06:58:10', 1),
(56, 'XZJE', '2022-06-14 08:13:26', '2022-06-14 08:13:26', 1),
(57, 'COI,REZOI,O', '2022-06-14 08:19:25', '2022-06-14 08:19:25', 1),
(58, 'dcfdcvfdxcvfdxcvfdcvfdc vf', '2022-06-14 09:18:59', '2022-06-14 09:18:59', 1),
(59, 'VLPOFV', '2022-06-14 11:00:35', '2022-06-14 11:00:35', 1),
(60, 'CPOROZ', '2022-06-14 13:22:08', '2022-06-14 13:22:08', 1),
(61, 'test', '2022-06-14 13:24:13', '2022-06-14 13:24:13', 1),
(62, 'sdfuiop^', '2022-06-14 13:43:30', '2022-06-14 13:43:30', 1),
(63, 'paul', '2022-06-14 13:48:02', '2022-06-14 13:48:02', 1),
(64, 'ertyuiokjhv', '2022-06-14 18:20:13', '2022-06-14 18:20:13', 1),
(65, 'titre1', '2022-06-19 18:08:56', '2022-06-19 18:08:56', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `doodays`
--
ALTER TABLE `doodays`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doodays_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `doodays`
--
ALTER TABLE `doodays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `doodays`
--
ALTER TABLE `doodays`
  ADD CONSTRAINT `doodays_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
