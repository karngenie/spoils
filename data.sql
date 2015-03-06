-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 06 Mars 2015 à 16:46
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `spoilsdata`
--

--
-- Contenu de la table `c_editions`
--

INSERT INTO `c_editions` (`id`, `name`, `rank`, `isVisible`) VALUES
(1, 'Open Beta', 1, 1),
(2, 'First Edition', 2, 1),
(3, 'First Edition Part 2', 3, 1),
(4, 'Seed: Children of the Lingamorph', 4, 1),
(5, 'Seed 2: Gloamspike''s Revenge', 5, 1),
(6, 'Seed 3: Fall of Marmothoa', 6, 1),
(7, 'Second Edition', 7, 1),
(8, 'Shade of the Devoured Emperor', 8, 1),
(9, 'Promo', 9, 1);

--
-- Contenu de la table `c_rarities`
--

INSERT INTO `c_rarities` (`id`, `name`, `rank`, `isVisible`) VALUES
(1, 'Common', 1, 1),
(2, 'Uncommon', 2, 1),
(3, 'Rare', 3, 1),
(4, 'Fixed', 4, 1),
(5, 'Promo', 5, 1);

--
-- Contenu de la table `c_trades`
--

INSERT INTO `c_trades` (`id`, `name`, `rank`, `isVisible`) VALUES
(1, 'Arcanist', 1, 1),
(2, 'Banker', 2, 1),
(3, 'Gearsmith', 3, 1),
(4, 'Rogue', 4, 1),
(5, 'Universal', 5, 1),
(6, 'Warlord', 6, 1);

--
-- Contenu de la table `c_types`
--

INSERT INTO `c_types` (`id`, `name`, `rank`, `isVisible`) VALUES
(1, 'Character', 1, 1),
(2, 'Faction', 2, 1),
(3, 'Item', 3, 1),
(4, 'Location', 4, 1),
(5, 'Ressource', 5, 1),
(6, 'Tactic', 6, 1);
