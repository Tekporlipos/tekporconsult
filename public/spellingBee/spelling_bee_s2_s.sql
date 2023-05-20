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
-- Table structure for table `spelling_bee_s2_s`
--

CREATE TABLE IF NOT EXISTS `spelling_bee_s2_s` (
  `id` int(11) NOT NULL,
  `level_id` varchar(3) NOT NULL,
  `setoflevel` varchar(3) NOT NULL,
  `word` varchar(255) NOT NULL,
  `definition` varchar(5000) NOT NULL,
  `a1` varchar(255) NOT NULL,
  `a2` varchar(255) NOT NULL,
  `a3` varchar(255) NOT NULL,
  `a4` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spelling_bee_s2_s`
--

INSERT INTO `spelling_bee_s2_s` (`id`, `level_id`, `setoflevel`, `word`, `definition`, `a1`, `a2`, `a3`, `a4`, `created_at`, `updated_at`) VALUES
(1, '1', '1', 'rich', 'Wealthy: having a lot of money and possessions.', 'rech', 'reach', 'rich', 'reech', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(2, '1', '1', 'renew', 'To make (something) new again; to restore to freshness or original condition.', 'renow', 'reknew', 'renoon', 'renew', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(3, '1', '1', 'leak', 'A crack, crevice, fissure, or hole which admits water or other fluid, or lets it escape.', 'lack', 'leek', 'like', 'leak', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(4, '1', '1', 'bible', 'The Jewish holy book that was largely incorporated into the Christian ...', 'bible', 'beble', 'bubo', 'bobol', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(5, '1', '1', 'catch', 'The act of seizing or capturing.\r\nThe act of noticing, understanding or hearing.', 'cach', 'catch', 'crunch', 'carch', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(6, '1', '1', 'evil', 'Having harmful qualities; not good; worthless or deleterious.', 'harm', 'evil', 'kill', 'bad', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(7, '1', '1', 'magic', 'The application of rituals or actions, especially those based on occult knowledge, to subdue or manipulate natural or supernatural beings and forces in order to have some benefit from them.', 'mogic', 'margic', 'magec', 'magic', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(8, '1', '1', 'charm', 'An object, act or words believed to have magic power (usually carries a positive connotation).', 'cherm', 'cham', 'charm', 'chram', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(9, '1', '1', 'child', 'A person who has not yet reached adulthood, whether natural (puberty), cultural (initiation), or legal (majority)', 'chald', 'chad', 'child', 'chaild', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(10, '1', '1', 'flaw', 'A defect, fault, or imperfection, especially one that is hidden.', 'flow', 'flaw', 'flan', 'floor', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(11, '1', '2', 'Right', 'Complying with justice, correctness or reason; correct, just, true.', 'raght', 'reght', 'Right', 'rat', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(12, '1', '2', 'teeth', 'The ability to be enforced, or to be enforced to any useful effect.\r\nor plural of A hard, calcareous structure present in the mouth of many vertebrate animals, generally used for eating.', 'teth', 'teeht', 'teeth', 'teetth', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(13, '1', '2', 'aside', 'To or on one side so as to be out of the way.', 'asid', 'aside', 'eside', 'easide', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(14, '1', '2', 'kind', 'A type, race or category; a group of entities that have common characteristics such that they may be grouped together.', 'group', 'together', 'kind', 'race', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(15, '1', '2', 'apart', 'In or into two or more parts.', 'kind', 'kend', 'kand', 'knand', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(16, '1', '2', 'abort', 'An early termination of a mission, action, or procedure in relation to missiles or spacecraft; the craft making such a mission. or A miscarriage; an untimely birth;', 'abort', 'about', 'aburt', 'abourt', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(17, '1', '2', 'calm', 'Peaceful, quiet, especially free from anger and anxiety.', 'holy', 'calm', 'celm', 'came', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(18, '1', '2', 'faith', 'A trust or confidence in the intentions or abilities of a person, object, or ideal from prior empirical evidence.', 'fath', 'fate', 'faiht', 'faith', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(19, '1', '2', 'lead', 'To guide or conduct with the hand, or by means of some physical contact connection.', 'leed', 'lead', 'led', 'leade', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(20, '1', '2', 'hard', 'Having a severe property; presenting difficulty.', 'hard', 'heard', 'herd', 'had', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(21, '1', '3', 'laugh', 'An expression of mirth particular to the human species; something that provokes mirth or scorn', 'lagh', 'lauf', 'lauhg', 'laugh', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(22, '1', '3', 'night', 'The period of darkness beginning at the end of evening astronomical twilight when the sun is 18 degrees below the horizon, and ending at the beginning of morning astronomical twilight.', 'naght', 'naught', 'night', 'naight', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(23, '1', '3', 'weep', 'To cry; shed tears.\n\r\nTo lament; to complain.', 'weap', 'weep', 'weak', 'weed', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(24, '1', '3', 'later', 'Afterward in time (used with than when comparing with another time).', 'letter', 'leter', 'later', 'leta', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(25, '1', '3', 'speak', 'To communicate with one''s voice, to say words out loud.', 'peak', 'speke', 'speake', 'speak', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(26, '1', '3', 'ready', 'Prepared for immediate action or use.', 'readi', 'rady', 'ready', 'redy', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(27, '1', '3', 'town', 'A settlement; an area with residential districts, shops and amenities, and its own local government; especially one larger than a village and smaller than a city.', 'taw', 'tonw', 'town', 'twon', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(28, '1', '3', 'house', 'A structure built or serving as an abode of human beings.', 'hause', 'houce', 'hauce', 'house', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(29, '1', '3', 'share', 'A portion of something, especially a portion given or allotted to someone.', 'share', 'shere', 'sheare', 'shear', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(30, '1', '3', 'elder', 'comparative degree of old: older, greater than another in age or seniority.', 'elda', 'elder', 'ealder', 'eldor', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(31, '1', '4', 'keen', 'Often with a prepositional phrase, or with to and an infinitive: showing a quick and ardent responsiveness or willingness; eager, enthusiastic, interested.', 'king', 'ken', 'keen', 'kine', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(32, '1', '4', 'soul', 'Spiritual part of a person believed to exist after death.', 'saw', 'soul', 'saol', 'sole', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(33, '1', '4', 'sick', 'In poor health.\r\nTired of or annoyed by something.\r\nMentally unstable, disturbed.', 'seck', 'sick', 'sicke', 'seek', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(34, '1', '4', 'world', 'Human collective existence; existence in general.', 'wold', 'word', 'wurld', 'world', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(35, '1', '4', 'crate', 'A large open box or basket, used especially to transport fragile goods.', 'creat', 'crate', 'crete', 'crat', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(36, '1', '4', 'wise', 'Showing good judgement or the benefit of experience.', 'waise', 'wase', 'wice', 'wise', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(37, '1', '4', 'queen', 'The wife or widow of a king.', 'queen', 'qeen', 'qean', 'quenn', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(38, '1', '4', 'rule', 'A regulation, law, guideline.\r\nor a straight line continuous mark, as made by a pen or the like, especially one lying across a paper as a guide for writing.', 'rule', 'law', 'raw', 'ruwe', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(39, '1', '4', 'rest', 'Relief from work or activity by sleeping; sleep.', 'rest', 'rast', 'reest', 'wrest', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(40, '1', '4', 'think', 'To communicate to oneself in one''s mind, to try to find a solution to a problem.', 'think', 'thenk', 'thike', 'thank', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(41, '1', '5', 'lord', 'The master of the servants of a household; (historical) the master of a feudal manor.', 'lord', 'load', 'lurd', 'lorde', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(42, '1', '5', 'dream', 'Imaginary events seen in the mind while sleeping.', 'deam', 'drem', 'dream', 'dreame', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(43, '1', '5', 'tonic', 'A substance with medicinal properties intended to restore or invigorate.', 'tonec', 'tunic', 'tunec', 'tonic', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(44, '1', '5', 'power', 'Ability to do or undergo something.', 'power', 'pawer', 'pewer', 'pawa', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(45, '1', '5', 'money', 'A legally or socially binding conceptual contract of entitlement to wealth, void of intrinsic value, payable for all debts and taxes, and regulated in supply.', 'mone', 'muney', 'money', 'morny', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(46, '1', '5', 'hear', 'To perceive (a sound, or something producing a sound) with the ear, to recognize (something) in an auditory way.', 'hear', 'voice', 'music', 'song', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(47, '1', '5', 'trade', 'Buying and selling of goods and services on a market.', 'heer', 'heir', 'hair', 'hear', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(48, '1', '5', 'enjoy', 'To receive pleasure or satisfaction from something.', 'anjoy', 'andjoy', 'enjoy', 'njoy', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(49, '1', '5', 'story', 'A sequence of real or fictional events; or, an account of such a sequence. or chronology collection of pictures or short videos published by a user.', 'store', 'stury', 'story', 'sture', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(50, '1', '5', 'cash', 'Money in the form of notes/bills and coins, as opposed to cheques/checks or electronic transactions.', 'catch', 'cash', 'ceash', 'cesh', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(51, '2', '1', 'parent', 'One of the two persons from whom one is immediately biologically descended; a mother or father.', 'perent', 'parant', 'perant', 'parent', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(52, '2', '1', 'people', 'Used as plural of person; a body of human beings considered generally or collectively; a group of two or more persons.', 'peeple', 'peple', 'pepol', 'people', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(53, '2', '1', 'member', 'One who officially belongs to a group.', 'mimber', 'member', 'membor', 'mamber', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(54, '2', '1', 'forget', 'To lose remembrance of.\r\nTo unintentionally leave something behind.', 'forgit', 'foget', 'frget', 'forget', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(55, '2', '1', 'valley', 'An elongated depression between hills or mountains, often with a river flowing through it.', 'village', 'valley', 'vally', 'valle', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(56, '2', '1', 'excuse', 'To allow to leave, or release from any obligation.', 'xcuse', 'ecuse', 'xecuse', 'excuse', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(57, '2', '1', 'market', 'A gathering of people for the purchase and sale of merchandise at a set time, often periodic.', 'maket', 'market', 'mraket', 'markete', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(58, '2', '1', 'packet', 'Originally, a vessel employed by government to convey dispatches or mails.', 'paket', 'packet', 'parket', 'pakage', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(59, '2', '1', 'parcel', 'A package wrapped for shipment.\r\nA small amount of food that has been wrapped up, for example a pastry.', 'pencel', 'pancel', 'parcel', 'pancel', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(60, '2', '1', 'halter', 'A bitless headpiece of rope or straps, placed on the head of animals such as cattle or horses to lead or tie them.', 'halter', 'helter', 'hellter', 'hallter', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(61, '2', '2', 'throne', 'An impressive seat used by a monarch, often on a raised dais in a royal room and reserved for formal occasions.', 'throne', 'trone', 'thron', 'thrune', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(62, '2', '2', 'search', 'An attempt to find something.', 'seach', 'serch', 'sarch', 'search', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(63, '2', '2', 'return', 'To come or go back (to a place or person).', 'retane', 'return', 'retain', 'retarn', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(64, '2', '2', 'beside', 'Next to; at the side of.\n\r\nNot relevant to.', 'besid', 'besede', 'bside', 'beside', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(65, '2', '1', 'afraid', 'Impressed with fear or apprehension; in fear.', 'afraid', 'afaide', 'afrade', 'afraed', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(66, '2', '2', 'reward', 'Something of value given in return for an act.', 'rewade', 'reword', 'reward', 'rewand', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(67, '2', '2', 'fetish', 'Something which is believed to possess, contain, or cause spiritual or magical powers; an amulet or a talisman. ', 'fetesh', 'fetish', 'fitish', 'fitesh', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(68, '2', '2', 'single', 'Not accompanied by anything else; one in number.', 'single', 'sengle', 'singl', 'singlle', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(69, '2', '2', 'accept', 'To receive, especially with a consent, with favour, or with approval.', 'accepte', 'acept', 'accept', 'accipt', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(70, '2', '2', 'stage', 'A degree of advancement in a journey; one of several portions into which a road or course is marked off; the distance between two places of rest on a road.', 'stege', 'stge', 'steage', 'stage', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(71, '2', '3', 'priest', 'A religious clergyman (clergywoman, clergyperson) who is trained to perform services or sacrifices at a church or temple', 'priest', 'prist', 'preist', 'prest', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(72, '2', '3', 'Manner', 'Mode of action; way of performing or doing anything.', 'manna', 'maner', 'meaner', 'manner', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(73, '2', '3', 'retain', 'To keep in possession or use. \r\nTo hold back (a pupil) instead of allowing them to advance to the next class or year.', 'retane', 'return', 'retian', 'retain', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(74, '2', '3', 'sorrow', 'An instance or cause of unhappiness.', 'sorro', 'solow', 'sorow', 'sorrow', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(75, '2', '3', 'reason', 'That which causes something: an efficient cause, a proximate cause.', 'reson', 'reason', 'raeson', 'reasen', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(76, '2', '3', 'wealth', 'Riches; valuable material possessions.', 'weath', 'wealht', 'wealth', 'waelht', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(77, '2', '3', 'travel', 'To be on a journey, often for pleasure or business and with luggage; to go from one place to another.', 'travol', 'travel', 'travil', 'travail', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(78, '2', '3', 'animal', 'In scientific usage, a multicellular organism that is usually mobile, whose cells are not encased in a rigid cell wall and which derives energy solely from the consumption of other organisms.', 'animmal', 'animal', 'annimal', 'anemal', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(79, '2', '3', 'family', 'A group of people who are closely related to one another (by blood, marriage or adoption).', 'famely', 'famile', 'family', 'famele', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(80, '2', '3', 'advise', 'To give advice to, to offer an opinion to, as worthy or expedient to be followed.', 'advace', 'advaice', 'advies', 'advise', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(81, '2', '4', 'gender', 'Identification as a man, a woman or something else, and association with a (social) role or set of behavioral and cultural traits, clothing, etc; a category to which a person belongs on this basis.', 'genda', 'agender', 'gennder', 'gender', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(82, '2', '4', 'commit', 'To give in trust; to put into charge or keeping; to entrust; to consign; used with to or formerly unto. or to do (something bad)', 'comit', 'commit', 'commet', 'comet', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(83, '2', '4', 'bullet', 'A projectile, usually of metal, shot from a gun at high speed.', 'bullet', 'bulet', 'bolet', 'bollet', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(84, '2', '4', 'bundle', 'A group of objects held together by wrapping or tying for carrying.', 'bandle', 'bundle', 'bondle', 'bandel', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(85, '2', '4', 'result', 'A thing that is caused or produced by something else; a consequence or outcome.', 'resolt', 'resurt', 'resort', 'result', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(86, '2', '4', 'palace', 'Official residence of a head of state or other dignitary, especially in a monarchical or imperial governmental system.', 'palece', 'palice', 'paleace', 'palace', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(87, '2', '4', 'office', 'A position of responsibility.\r\nOfficial position, particularly high employment within government; tenure in such a position.', 'ofice', 'offise', 'offece', 'office', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(88, '2', '4', 'doctor', 'A physician; a member of the medical profession; one who is trained and licensed to heal the sick or injured.', 'ducter', 'ductor', 'docter', 'doctor', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(89, '2', '4', 'pastor', 'A shepherd; someone who tends to a flock of animals.\r\n Someone with spiritual authority over a group of people.', 'peaster', 'pasta', 'paster', 'pastor', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(90, '2', '4', 'police', 'A civil force granted the legal authority for law enforcement and maintaining public order. ', 'pelice', 'please', 'police', 'place', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(91, '2', '5', 'revoke', 'To cancel or invalidate by withdrawing or reversing.', 'revork', 'revoke', 'revurk', 'revok', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(92, '2', '5', 'mature', 'Fully developed; grown up in terms of physical appearance, behaviour or thinking; ripe.', 'marture', 'mature', 'matare', 'martare', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(93, '2', '5', 'divide', 'To split or separate (something) into two or more parts.', 'devide', 'divide', 'devid', 'divid', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(94, '2', '5', 'budget', 'The amount of money or resources earmarked for a particular institution, activity or time-frame.', 'baget', 'badget', 'budget', 'buget', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(95, '2', '5', 'alight', 'To get off or exit a vehicle or animal; to descend; to dismount.', 'alit', 'alight', 'aligth', 'alite', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(96, '2', '5', 'safely', 'In a safe manner; without risk; using caution above all else.', 'safly', 'sefely', 'sefley', 'safely', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(97, '2', '5', 'educate', 'To instruct or train.', 'edocate', 'educete', 'educate', 'edocete', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(98, '2', '5', 'retort', 'A sharp or witty reply, or one which turns an argument against its originator; a comeback.', 'retolt', 'retolte', 'retote', 'retort', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(99, '2', '5', 'planet', 'Each of the seven major bodies which move relative to the fixed stars in the night sky—the Moon, Mercury, Venus, the Sun, Mars, Jupiter and Saturn.', 'planet', 'planat', 'planent', 'plannet', '2020-10-09 00:00:00', '2020-09-10 00:00:00'),
(100, '2', '5', 'garden', 'An outdoor area containing one or more types of plants, usually plants grown for food or ornamental purposes.', 'garden', 'gaden', 'gadern', 'gardern', '2020-10-09 00:00:00', '2020-09-10 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `spelling_bee_s2_s`
--
ALTER TABLE `spelling_bee_s2_s`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `word` (`word`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `spelling_bee_s2_s`
--
ALTER TABLE `spelling_bee_s2_s`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=131;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
