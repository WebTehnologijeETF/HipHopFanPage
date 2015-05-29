-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Host: 127.11.87.130:3306
-- Generation Time: May 28, 2015 at 11:25 PM
-- Server version: 5.5.41
-- PHP Version: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hiphoppage`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `novost_id` int(11) NOT NULL,
  `autor` varchar(20) COLLATE utf8_slovenian_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_slovenian_ci NOT NULL,
  `tekst` text COLLATE utf8_slovenian_ci NOT NULL,
  `vrijeme` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `novost_id` (`novost_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=58 ;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `novost_id`, `autor`, `email`, `tekst`, `vrijeme`) VALUES
(3, 5, 'Autor1', '', 'komentar komentar komentar komentar komentar komentar komentar komentar komentar komentar komentar komentar', '2015-05-27 00:24:29'),
(7, 2, 'Anonymous', '', 'neki tekst neki tekst neki tekst neki tekst neki tekst neki tekst ', '2015-05-27 00:25:32'),
(8, 2, 'Nisam s Klixa', '', 'ujeujeujeujeujeeuje ujeujeujeujeujeeuje ujeujeujeujeujeeuje ujeujeujeujeujeeuje ujeujeujeujeujeeuje ', '2015-05-27 00:26:12'),
(15, 4, 'jeste', 'jeste@com', 'ovo je komentar ovo je komentar ovo je komentar ovo je komentar ovo je komentar ovo je komentar ', '2015-05-28 23:14:28'),
(18, 4, 'došo', '', '#komentariso', '2015-05-27 19:12:25'),
(34, 4, 'samo', '', 'samo da nešto vidim', '2015-05-27 19:10:40'),
(35, 5, 'Lejla', 'lejla.a36@gmail.com', '#aaaajmooooooo', '2015-05-27 21:11:42'),
(36, 6, 'Hipster', 'hipster@indierock.com', 'Sluašo sam ove prije nego što su bili popularni', '2015-05-27 21:12:49'),
(38, 6, 'Brbiša', 'lud@za.tobom', 'Slušao*', '2015-05-27 21:38:52'),
(40, 6, 'Lepi', 'iza_oblaka@bih.net.ba', 'E ti čija si noćas čija', '2015-05-27 21:52:28'),
(43, 2, 'Jesam s klixa', '', 'Klix maaaaaajka', '2015-05-27 22:00:36'),
(46, 5, 'DosoNako', '', 'Ne bih reko da su ti ovi datumi ok, trebala bi timestamp_current uzet il tako nesto', '2015-05-27 22:04:12'),
(47, 5, 'DosoNako', '', 'Uranili tipa dva sata', '2015-05-27 22:04:36'),
(48, 5, 'DosoNako', '', 'A i svakako trebaju bit sortirani drugacije', '2015-05-27 22:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `novosti`
--

CREATE TABLE IF NOT EXISTS `novosti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naslov` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `autor` varchar(20) COLLATE utf8_slovenian_ci NOT NULL,
  `vrijeme` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tekst` text COLLATE utf8_slovenian_ci NOT NULL,
  `detaljnije` text COLLATE utf8_slovenian_ci NOT NULL,
  `slika` text COLLATE utf8_slovenian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `novosti`
--

INSERT INTO `novosti` (`id`, `naslov`, `autor`, `vrijeme`, `tekst`, `detaljnije`, `slika`) VALUES
(1, 'The Miseducation Of Lauryn Hill', 'YESHA CALLAHAN', '2015-05-01 01:42:16', 'Each year the Library of Congress selects 25 recordings to add to their archive. \r\nThis year Lauryn Hill’s record-breaking album, The Miseducation of Lauryn Hill, will be included in the 25. According to the press release, requirements for inclusion into the archive include recordings that are “culturally, historically, or aesthetically significant” and are at least 10 years old.', 'Each year the Library of Congress selects 25 recordings to add to their archive. \r\nThis year Lauryn Hill’s record-breaking album, The Miseducation of Lauryn Hill, will be included in the 25. According to the press release, requirements for inclusion into the archive include recordings that are “culturally, historically, or aesthetically significant” and are at least 10 years old.\r\nThe Library of Congress gave a lengthy explanation as to why it chose Hill’s debut album:\r\n\r\nLauryn Hill’s debut solo record, following the breakup of the Fugees, is a work of honesty in which Hill explores her feelings on topics that included the deep wonder of pregnancy, the pitfalls of modern relationships and the experience of the sacred. The album effortlessly fuses soul, rhythm and blues, rap and reggae. Hill’s vocal range, smooth clear highs and vibrato are stunning. The rapping is rhythmically compelling while always retaining, and frequently exploiting, the natural cadences of conversational speech. Standout guest performances include Carlos Santana’s soulful acoustic guitar solo on “Zion,” and duets with Mary J. Blige and D’Angelo on “I Used to Love Him” and “Nothing Even Matters,” respectively.', 'slike/LaurynHill.jpg'),
(2, 'Eternal E: Eazy E, 20 Years Later', 'JEFF WEISS', '2015-05-25 01:27:04', 'It was 20 years ago this week that Eazy E cruised to that great safehouse in the sky. I’ll never forget first hearing the news that he had AIDS and was dying in Cedars-Sinai. The radio station, 92.3 The Beat, kept public vigil. Dre and Cube and Bone Thugs reportedly filed\r\nin to pay last respects to the legend. The hospital was only about a mile from where I had Little League practice and ', 'It was 20 years ago this week that Eazy E cruised to that great safehouse in the sky. I’ll never forget first hearing the news that he had AIDS and was dying in Cedars-Sinai. The radio station, 92.3 The Beat, kept public vigil. Dre and Cube and Bone Thugs reportedly filed\r\nin to pay last respects to the legend. The hospital was only about a mile from where I had Little League practice and a group of us debated wandering over before quickly realizing that we weren’t exactly wanted. So we got Slurpees and silently mourned the man who directly swayed our generation towards  the charms of gangsta rap, Raiders jackets, and Kings hats.\r\n\r\nYou’ll probably read only a couple memorials to Eric Wright. He doesn’t receive the same reverence as 2Pac, Biggie, Dilla or Pun. It’s obviously because he was closer to a creative entrepreneur than a pure artist, but his shock value style and proto-trolling bears closer resemblance to the YouTube era than it does the charmingly antiquated “please listen to my demo” 90s. There’s no doubt that Eazy intuitively understood the future more than almost any of his peers.', 'slike/EazyE.jpg'),
(4, 'Frenkie i Sarajevska filharmonija', 'FMJam', '2015-05-25 23:21:02', 'U rasprodanom Narodnom pozorištu u Sarajevu, Frenkie je sinoć \r\nnastupio sa Sarajevskom filharmonijom gdje je kao gost koncerta\r\nizveo pjesmu “Noćna smjena”. Ovo je ujedno bio prvi put da se u BiH \r\nostvari fuzija domaćeg hip hop-a i klasične muzike. “Nevjerovatan osjećaj, ovo je nešto novo za mene i imao sam ogromnu tremu i veliki strah” – izjavio je Frenkie nakon koncerta koji je završen gromoglasnim aplauzom.', '', 'slike/frenkie.jpg'),
(5, 'Survival Of The Fittest (ESPN Remix)', 'PATRICK LYONS', '2015-05-26 23:10:24', 'A few days back, we reported that Mobb Deep would be remixing their 1995 cut "Survival Of The Fittest" to serve as the intro to ESPNz''s "NBA Countdown" during the Western Conference Playoffs. Today, it''s arrived.\r\nLargely a vocal rework, the only true "remixing" done here is adding some high-octane keyboards to the mix, with the original''s low-key menacing piano shuffle otherwise staying intact.', 'A few days back, we reported that Mobb Deep would be remixing their 1995 cut "Survival Of The Fittest" to serve as the intro to ESPNz''s "NBA Countdown" during the Western Conference Playoffs. Today, it''s arrived.Largely a vocal rework, the only true "remixing" done here is adding some high-octane keyboards to the mix, with the original''s low-key menacing piano shuffle otherwise staying intact. This time, Havoc and Prodigy aren''t rapping about getting you rocked steady by the mac one-double, instead opting for sports-related bars like "put the ball in my hands and I''ma make sure my team advance."""Yo dun! Listen to our joints!" Muchita and Johnson plead repeatedly while playing hooky from the High School of Art and Design, just a few blocks away. Early ''90s Jam Master Jay disciples, the Afros, were among the myriad of somebodies coming and going from the hip-hop cornerstone building, weary of what a young P-Wee and K-Wee were selling. The duo, who had just met each other days earlier, had built a reputation as a couple of wild kids with a knack for rhyming."You feeling this? Or would you rather they have left the OG track alone?', 'slike/mobb.jpg'),
(6, 'One Time 4 For Your Mind', 'NAS', '2015-05-25 23:28:22', 'I wreck shit so much, the microphone''ll need a paint job\r\nMy brain is incarcerated\r\nLive at any jam, I couldn''t count all the parks I raided\r\nI hold a Mac-11, and attack a reverend\r\nI contact 11 L''s and max in heaven.\r\nI wreck shit so much, the microphone''ll need a paint job\r\nMy brain is incarcerated\r\nLive at any jam, I couldn''t count all the parks I raided\r\n', '', 'slike/nas.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`novost_id`) REFERENCES `novosti` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
