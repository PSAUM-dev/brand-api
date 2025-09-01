-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 01 sep. 2025 à 21:51
-- Version du serveur : 8.3.0
-- Version de PHP : 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `brands_database`
--

-- --------------------------------------------------------

--
-- Structure de la table `brands`
--

DROP TABLE IF EXISTS `brands`;
CREATE TABLE IF NOT EXISTS `brands` (
  `brand_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(200) COLLATE utf8mb3_unicode_ci NOT NULL,
  `brand_image` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `rating` float UNSIGNED NOT NULL,
  `country_code` varchar(5) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Déchargement des données de la table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `brand_image`, `rating`, `country_code`) VALUES
(21, 'Mad casino', 'https://www.opnminded.com/content/cms-images/b154d6445b509e4019745aeffed55cb733ed3f6d-600x240.webp', 5, NULL),
(22, 'Robocat', 'https://www.opnminded.com/content/cms-images/72b7f3b9db10e4e8bf29c90d4c8ab981e9aa8456-600x240.webp', 5, NULL),
(23, 'Spinsy Casino', 'https://www.opnminded.com/content/cms-images/98d3a00c294c721c914fe61c0f7ef75dbb5da638-600x240.webp', 5, NULL),
(24, 'Talismania Casino', 'https://www.opnminded.com/content/cms-images/98d3a00c294c721c914fe61c0f7ef75dbb5da638-600x240.webp', 4.5, NULL),
(25, 'Legendplay Casino', 'https://www.opnminded.com/content/cms-images/fcd92746d6eb7fcf11aa856db6f9c4826e6ff2d6-600x240.webp', 5, NULL),
(26, 'Betalright Casino', 'https://www.opnminded.com/content/cms-images/a479babd7c86e4ec339f045db153a3248037ec0e-600x240.webp', 5, NULL),
(27, 'GrandZ Bet Casino', 'https://www.opnminded.com/content/cms-images/436bbfceef76c9aa33689ba108665157a0a093dd-600x240.webp', 5, NULL),
(28, 'Gransino Casino', 'https://www.opnminded.com/content/cms-images/e7139b6fab43defa27dd2da166e9918d0d257791-600x240.webp', 4.5, NULL),
(29, 'Brutal Casino', 'https://www.opnminded.com/content/cms-images/37dd40ae4b9a5931a1aa5353ea11e5dede1ac728-600x240.webp', 5, NULL),
(30, 'Kingmaker Casino', 'https://www.opnminded.com/content/cms-images/0fdf91013606b4b7c03bb2f40ba8ebaecd75123e-600x240.webp', 4.5, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
