-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 20 fév. 2020 à 15:23
-- Version du serveur :  8.0.18
-- Version de PHP :  7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `restauration`
--

-- --------------------------------------------------------

--
-- Structure de la table `customers`
--

CREATE TABLE `customers` (
  `Customer_ID` int(155) NOT NULL,
  `Customer_Details` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Clients';

--
-- Déchargement des données de la table `customers`
--

INSERT INTO `customers` (`Customer_ID`, `Customer_Details`) VALUES
(1, 'Client 1'),
(2, 'Client 2'),
(6, 'allo'),
(7, 'ss');

-- --------------------------------------------------------

--
-- Structure de la table `meals`
--

CREATE TABLE `meals` (
  `Meal_ID` int(155) NOT NULL,
  `Customer_ID` int(155) DEFAULT NULL,
  `Staff_ID` int(155) DEFAULT NULL,
  `Date_of_meal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Cost_of_meal` varchar(255) NOT NULL,
  `Other_Details` text NOT NULL,
  `Meal_Details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `meals`
--

INSERT INTO `meals` (`Meal_ID`, `Customer_ID`, `Staff_ID`, `Date_of_meal`, `Cost_of_meal`, `Other_Details`, `Meal_Details`) VALUES
(2, 1, 1, '2020-02-13 10:32:56', '25', 'Plat Principale', 'steak avec des légumes et boisson non alcoolisée inclu '),
(3, 2, 2, '2020-02-19 00:00:00', '7', 'Entrée', 'Frites'),
(11, NULL, NULL, '2020-02-20 09:08:29', '25', 'Plat Principale', 'Pizza '),
(12, NULL, NULL, '2020-02-20 09:09:43', '15', 'Plat Principale', 'Steak'),
(15, NULL, NULL, '2020-02-20 09:42:53', '25', 'Dessert', 'gateaux'),
(16, NULL, NULL, '2020-02-20 09:44:53', '12', 'Salade', 'césar'),
(17, NULL, NULL, '2020-02-20 09:45:22', '3', 'Entrée', 'allo');

-- --------------------------------------------------------

--
-- Structure de la table `meal_dishes`
--

CREATE TABLE `meal_dishes` (
  `Meal_ID` int(155) NOT NULL,
  `Menu_item_ID` int(155) NOT NULL,
  `Quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `menus`
--

CREATE TABLE `menus` (
  `Menu_ID` int(155) NOT NULL,
  `Menu_Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Available_Date_From` date NOT NULL,
  `Available_Date_To` date NOT NULL,
  `Other_Details` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `menu_items`
--

CREATE TABLE `menu_items` (
  `Menu_items_ID` int(155) NOT NULL,
  `Menu_ID` int(155) NOT NULL,
  `Menu_item_Name` varchar(155) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Other_Details` varchar(155) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ref_datff_roles`
--

CREATE TABLE `ref_datff_roles` (
  `Staff_Role_Code` int(155) NOT NULL,
  `Staff_Role_Descripton` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `staff`
--

CREATE TABLE `staff` (
  `Staff_ID` int(155) NOT NULL,
  `Staff_Role_Code` int(155) NOT NULL,
  `First_Name` varchar(40) NOT NULL,
  `Last_Name` varchar(40) NOT NULL,
  `Other_Detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- Index pour la table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`Meal_ID`),
  ADD KEY `Customer_ID` (`Customer_ID`),
  ADD KEY `Customer_ID_2` (`Customer_ID`);

--
-- Index pour la table `meal_dishes`
--
ALTER TABLE `meal_dishes`
  ADD KEY `Meal_ID` (`Meal_ID`);

--
-- Index pour la table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`Menu_ID`);

--
-- Index pour la table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`Menu_items_ID`);

--
-- Index pour la table `ref_datff_roles`
--
ALTER TABLE `ref_datff_roles`
  ADD PRIMARY KEY (`Staff_Role_Code`);

--
-- Index pour la table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Staff_ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `customers`
--
ALTER TABLE `customers`
  MODIFY `Customer_ID` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `meals`
--
ALTER TABLE `meals`
  MODIFY `Meal_ID` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `menus`
--
ALTER TABLE `menus`
  MODIFY `Menu_ID` int(155) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `Menu_items_ID` int(155) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ref_datff_roles`
--
ALTER TABLE `ref_datff_roles`
  MODIFY `Staff_Role_Code` int(155) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `staff`
--
ALTER TABLE `staff`
  MODIFY `Staff_ID` int(155) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `meals`
--
ALTER TABLE `meals`
  ADD CONSTRAINT `meals_ibfk_1` FOREIGN KEY (`Customer_ID`) REFERENCES `customers` (`Customer_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `meal_dishes`
--
ALTER TABLE `meal_dishes`
  ADD CONSTRAINT `meal_dishes_ibfk_1` FOREIGN KEY (`Meal_ID`) REFERENCES `meals` (`Meal_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
