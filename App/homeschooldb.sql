-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Erstellungszeit: 23. Feb 2021 um 14:59
-- Server-Version: 5.7.31
-- PHP-Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `homeschooldb`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `assignment`
--

DROP TABLE IF EXISTS `assignment`;
CREATE TABLE IF NOT EXISTS `assignment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `category` enum('Math','Reading','Writing','Art') NOT NULL,
  `image` text,
  `link` text,
  PRIMARY KEY (`id`),
  KEY `c1` (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `assignment`
--

INSERT INTO `assignment` (`id`, `course_id`, `title`, `description`, `category`, `image`, `link`) VALUES
(1, 1, 'Arithmetics 1', 'Practice Addition and Subtraction with these cool exercises!', 'Math', 'assets/img/assignment/arithmetics1.jpg', 'http://localhost/arithmetics1.php'),
(2, 2, 'Wordly Wise 2000 Chapter 1', 'Learn a selection of new vocabulary words from the first chapter of Wordly Wise', 'Reading', NULL, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `course`
--

INSERT INTO `course` (`id`, `name`) VALUES
(1, 'Mathematics 1'),
(2, 'Reading for Beginners');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `exercise`
--

DROP TABLE IF EXISTS `exercise`;
CREATE TABLE IF NOT EXISTS `exercise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `assignment_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `submitted` tinyint(1) NOT NULL DEFAULT '0',
  `due_date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `exercise assignment id constraint` (`assignment_id`),
  KEY `exercise student id constraint` (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `exercise`
--

INSERT INTO `exercise` (`id`, `assignment_id`, `student_id`, `submitted`, `due_date`) VALUES
(2, 1, 2, 0, '2021-03-12'),
(3, 2, 1, 0, '2021-03-10'),
(5, 1, 1, 0, '2021-02-26'),
(6, 1, 1, 0, '2021-03-20');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` enum('admin','teacher','student','') NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`id`, `role`, `username`, `password`, `first_name`, `last_name`) VALUES
(1, 'student', 'sanay12', 'Sanay12123', 'Sanay', 'Royer'),
(2, 'student', 'aardvark', '321', 'Mark', 'Rogers');

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `assignment`
--
ALTER TABLE `assignment`
  ADD CONSTRAINT `c1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
