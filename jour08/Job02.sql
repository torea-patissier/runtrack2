-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 10 nov. 2020 à 09:44
-- Version du serveur :  5.7.30
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Jour08`
--

-- --------------------------------------------------------

--
-- Structure de la table `Etage`
--

CREATE TABLE `Etage` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `numéro` int(11) NOT NULL,
  `superficie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Etage`
--

INSERT INTO `Etage` (`id`, `nom`, `numéro`, `superficie`) VALUES
(1, 'RDC', 0, 500),
(2, 'R+1', 1, 500);

-- --------------------------------------------------------

--
-- Structure de la table `Etudiants`
--

CREATE TABLE `Etudiants` (
  `ID` int(11) NOT NULL,
  `prénom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `naissance` date NOT NULL,
  `sexe` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Etudiants`
--

INSERT INTO `Etudiants` (`ID`, `prénom`, `nom`, `naissance`, `sexe`, `email`) VALUES
(1, 'Cyril', 'Zimmermann', '1989-01-02', 'Homme', 'cyril@laplateforme.io'),
(2, 'Jessica', 'Soriano', '1995-09-08', 'Femme', 'jessica@laplateforme.io'),
(3, 'Cyril', 'Zimmermann', '1989-01-02', 'Homme', 'cyril@laplateforme.io'),
(4, 'Jessica', 'Soriano', '1995-09-08', 'Femme', 'jessica@laplateforme.io'),
(5, 'Roxan', 'Roumégas', '2016-09-08', 'Homme', 'roxan@laplateforme.io'),
(6, 'Pascal', 'Assens', '1999-12-31', 'Homme', 'pascal@laplateforme.io'),
(7, 'Terry', 'Cristinelli', '2005-02-01', 'Homme', 'terry@laplateforme.io'),
(8, 'Ruben', 'Habib', '1993-05-26', 'Homme', 'ruben.habib@laplateforme.io'),
(9, 'Toto', 'Dupont', '2019-11-07', 'Homme', 'toto@laplateforme.io');

-- --------------------------------------------------------

--
-- Structure de la table `salles`
--

CREATE TABLE `salles` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `id_étage` int(11) NOT NULL,
  `capacite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `salles`
--

INSERT INTO `salles` (`id`, `nom`, `id_étage`, `capacite`) VALUES
(1, 'Lounge', 1, 100),
(2, 'Studio son', 1, 5),
(3, 'Broadcasting', 2, 50),
(4, 'Bocal Peda', 2, 4),
(5, 'Coworking', 2, 80),
(6, 'Studio Vidéo', 2, 5);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Etage`
--
ALTER TABLE `Etage`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Etudiants`
--
ALTER TABLE `Etudiants`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `salles`
--
ALTER TABLE `salles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Etage`
--
ALTER TABLE `Etage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `Etudiants`
--
ALTER TABLE `Etudiants`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `salles`
--
ALTER TABLE `salles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
