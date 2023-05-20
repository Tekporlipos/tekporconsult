-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2020 at 12:31 PM
-- Server version: 5.6.37
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Tekporaca`
--

-- --------------------------------------------------------

--
-- Table structure for table `spelling_bee_s3_s`
--

CREATE TABLE IF NOT EXISTS `spelling_bee_s3_s` (
  `id` int(11) NOT NULL,
  `level_id` varchar(3) NOT NULL,
  `setoflevel` varchar(3) NOT NULL,
  `word` varchar(255) NOT NULL,
  `definition` varchar(5000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spelling_bee_s3_s`
--

INSERT INTO `spelling_bee_s3_s` (`id`, `level_id`, `setoflevel`, `word`, `definition`, `created_at`, `updated_at`) VALUES
(1, '1', '1', 'Right', 'Complying with justice, correctness or reason; correct, just, true.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(2, '1', '1', 'teeth', 'The ability to be enforced, or to be enforced to any useful effect.\r\nor plural of A hard, calcareous structure present in the mouth of many vertebrate animals, generally used for eating.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(3, '1', '1', 'aside', 'To or on one side so as to be out of the way.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(4, '1', '1', 'kind', 'A type, race or category; a group of entities that have common characteristics such that they may be grouped together.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(5, '1', '1', 'apart', 'In or into two or more parts.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(6, '1', '1', 'abort', 'An early termination of a mission, action, or procedure in relation to missiles or spacecraft; the craft making such a mission. or A miscarriage; an untimely birth;', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(7, '1', '1', 'calm', 'Peaceful, quiet, especially free from anger and anxiety.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(8, '1', '1', 'faith', 'A trust or confidence in the intentions or abilities of a person, object, or ideal from prior empirical evidence.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(9, '1', '1', 'lead', 'To guide or conduct with the hand, or by means of some physical contact connection.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(10, '1', '1', 'hard', 'Having a severe property; presenting difficulty.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(11, '1', '2', 'keen', 'Often with a prepositional phrase, or with to and an infinitive: showing a quick and ardent responsiveness or willingness; eager, enthusiastic, interested.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(12, '1', '2', 'soul', 'Spiritual part of a person believed to exist after death.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(13, '1', '2', 'sick', 'In poor health.\r\nTired of or annoyed by something.\r\nMentally unstable, disturbed.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(14, '1', '2', 'world', 'Human collective existence; existence in general.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(15, '1', '2', 'crate', 'A large open box or basket, used especially to transport fragile goods.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(16, '1', '2', 'wise', 'Showing good judgement or the benefit of experience.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(17, '1', '2', 'queen', 'The wife or widow of a king.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(18, '1', '2', 'rule', 'A regulation, law, guideline.\r\nor a straight line continuous mark, as made by a pen or the like, especially one lying across a paper as a guide for writing.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(19, '1', '2', 'rest', 'Relief from work or activity by sleeping; sleep.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(20, '1', '2', 'think', 'To communicate to oneself in one''s mind, to try to find a solution to a problem.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(21, '1', '3', 'rich', 'Wealthy: having a lot of money and possessions.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(22, '1', '3', 'renew', 'To make (something) new again; to restore to freshness or original condition.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(23, '1', '3', 'leak', 'A crack, crevice, fissure, or hole which admits water or other fluid, or lets it escape.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(24, '1', '3', 'bible', 'The Jewish holy book that was largely incorporated into the Christian ...', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(25, '1', '3', 'catch', 'The act of seizing or capturing.\r\nThe act of noticing, understanding or hearing.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(26, '1', '3', 'evil', 'Having harmful qualities; not good; worthless or deleterious.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(27, '1', '3', 'magic', 'The application of rituals or actions, especially those based on occult knowledge, to subdue or manipulate natural or supernatural beings and forces in order to have some benefit from them.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(28, '1', '3', 'charm', 'An object, act or words believed to have magic power (usually carries a positive connotation).', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(29, '1', '3', 'child', 'A person who has not yet reached adulthood, whether natural (puberty), cultural (initiation), or legal (majority)', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(30, '1', '3', 'flaw', 'A defect, fault, or imperfection, especially one that is hidden.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(31, '1', '4', 'lord', 'The master of the servants of a household; (historical) the master of a feudal manor.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(32, '1', '4', 'dream', 'Imaginary events seen in the mind while sleeping.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(33, '1', '4', 'tonic', 'A substance with medicinal properties intended to restore or invigorate.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(34, '1', '4', 'power', 'Ability to do or undergo something.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(35, '1', '4', 'money', 'A legally or socially binding conceptual contract of entitlement to wealth, void of intrinsic value, payable for all debts and taxes, and regulated in supply.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(36, '1', '4', 'hear', 'To perceive (a sound, or something producing a sound) with the ear, to recognize (something) in an auditory way.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(37, '1', '4', 'trade', 'Buying and selling of goods and services on a market.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(38, '1', '4', 'enjoy', 'To receive pleasure or satisfaction from something.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(39, '1', '4', 'story', 'A sequence of real or fictional events; or, an account of such a sequence. or chronology collection of pictures or short videos published by a user.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(40, '1', '4', 'cash', 'Money in the form of notes/bills and coins, as opposed to cheques/checks or electronic transactions.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(41, '1', '5', 'laugh', 'An expression of mirth particular to the human species; something that provokes mirth or scorn', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(42, '1', '5', 'night', 'The period of darkness beginning at the end of evening astronomical twilight when the sun is 18 degrees below the horizon, and ending at the beginning of morning astronomical twilight.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(43, '1', '5', 'weep', 'To cry; shed tears.\n\r\nTo lament; to complain.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(44, '1', '5', 'later', 'Afterward in time (used with than when comparing with another time).', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(45, '1', '5', 'speak', 'To communicate with one''s voice, to say words out loud.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(46, '1', '5', 'ready', 'Prepared for immediate action or use.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(47, '1', '5', 'town', 'A settlement; an area with residential districts, shops and amenities, and its own local government; especially one larger than a village and smaller than a city.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(48, '1', '5', 'house', 'A structure built or serving as an abode of human beings.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(49, '1', '5', 'share', 'A portion of something, especially a portion given or allotted to someone.', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(50, '1', '5', 'elder', 'comparative degree of old: older, greater than another in age or seniority.', '2020-10-09 00:00:00', '2020-09-10 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `spelling_bee_s3_s`
--
ALTER TABLE `spelling_bee_s3_s`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `word` (`word`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `spelling_bee_s3_s`
--
ALTER TABLE `spelling_bee_s3_s`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
