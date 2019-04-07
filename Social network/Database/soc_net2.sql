-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2019 at 05:51 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soc_net2`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `postid` varchar(20) NOT NULL,
  `userid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `postid`, `userid`) VALUES
(1, 'this is comment', '112', '38'),
(2, 'Yosh, this is so awesomeee!!', '111', '55'),
(3, 'So kuuuul!!', '111', '40'),
(4, 'loelelalsldasdawd', '118', '40'),
(5, 'fafafafafafafafafafaf', '118', '40'),
(6, 'so funny sheriff chan', '119', '38'),
(7, 'wow dis post so kawaiiii', '122', '38'),
(8, 'how dat workingggg', '122', '38'),
(9, 'sdasd', '119', '38'),
(10, 'awxcawwacacw', '118', '38'),
(11, 'dwadsdaw', '119', '38'),
(12, 'This is comment', '124', '38'),
(13, 'hello', '124', '38'),
(14, 'commenting again', '124', '38'),
(15, 'sword so cool omggg', '125', '38'),
(16, 'the fayaaaaaaa', '125', '38'),
(17, 'buuuuuuuuurns', '125', '38'),
(18, 'Vesna ne smara', '116', '38'),
(19, 'hi', '122', '38'),
(20, 'this is commenting comment', '128', '38'),
(21, 'so silly croc lel', '129', '38'),
(22, 'wtf is dis', '129', '38'),
(23, 'spaming comments', '124', '38'),
(24, 'spamming comments whole day and night', '124', '38'),
(25, 'rly spamming comments', '124', '38'),
(26, 'as long as I spam it increases lel', '124', '38'),
(27, 'fvdxvfdxvfxv', '130', '37'),
(28, 'vxdvdxv', '130', '37'),
(29, 'vdxvxvdxvdxv', '130', '37'),
(30, 'fdsfsdfsdfdsfdsf', '132', '37'),
(31, 'dwadawdawdaw', '136', '62'),
(32, 'dsdasdasd', '137', '62'),
(33, 'dwdawdwadwad', '137', '62'),
(34, 'eeeeeeeeeee', '138', '62'),
(35, 'lep mach', '142', '64');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `body` varchar(250) NOT NULL,
  `date` varchar(20) NOT NULL,
  `userId` int(11) NOT NULL,
  `privateStatus` varchar(100) NOT NULL,
  `image` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `body`, `date`, `userId`, `privateStatus`, `image`) VALUES
(1, 'Danas je lepo vreme!', '07.03.2019.', 1, 'public', ''),
(2, 'Danas ucimo phpmyadmin', '07.03.2019.', 1, 'public', ''),
(3, 'Lepo smo raspolozeni!', '03.03.2019.', 4, 'public', ''),
(4, 'Boli me glava!', '04.03.2019.', 2, 'public', ''),
(5, 'Od danas je Aleksa moj najbolji drugar!', '07.03.2019.', 5, 'public', ''),
(6, '', '01-01-2019', 1, 'public', ''),
(7, 'Vesna', '01-01-2019', 1, 'public', ''),
(8, 'pada kisa', '01-01-2019', 1, 'public', ''),
(9, 'pada kisa', '01-01-2019', 1, 'public', ''),
(10, 'dosadno mi je', '01-01-2019', 1, 'private', ''),
(12, 'dosadno mi je', '01-01-2019', 1, 'public', ''),
(13, 'Danas je oblacno', '07.03.2019.', 4, 'private', ''),
(14, 'Danas je oblacno', '07.03.2019.', 4, 'public', ''),
(15, 'aaaaaaa', '01-01-2019', 1, 'private', ''),
(16, 'bbbbb', '01-01-2019', 1, 'public', ''),
(17, 'bbbbb', '01-01-2019', 1, 'public', ''),
(18, 'bbbbb', '01-01-2019', 1, 'public', ''),
(19, 'bbbbb', '01-01-2019', 1, 'public', ''),
(20, 'bbbbb', '01-01-2019', 1, 'public', ''),
(21, 'bbbbb', '01-01-2019', 1, 'public', ''),
(22, 'bbbbb', '01-01-2019', 1, 'public', ''),
(24, 'sssss', '01-01-2019', 1, 'public', ''),
(25, 'sssss', '01-01-2019', 1, 'public', ''),
(26, 'sssss', '01-01-2019', 1, 'public', ''),
(27, 'sssss', '01-01-2019', 1, 'public', ''),
(28, 'Milica', '01-01-2019', 34, 'public', ''),
(29, 'Vazi', '01-01-2019', 34, 'private', ''),
(30, 'Vazi', '01-01-2019', 34, 'private', ''),
(31, 'Vazi', '01-01-2019', 34, 'private', ''),
(32, 'Vazi', '01-01-2019', 34, 'private', ''),
(33, 'dosadno mi je', '01-01-2019', 34, 'public', ''),
(34, 'ovo je privatna poruka', '01-01-2019', 34, 'private', ''),
(35, 'aaaa', '19/03/2019 10:04:09', 1, 'private', ''),
(36, 'kako ste?', '19/03/2019 11:12:23', 35, 'public', ''),
(37, 'odlicno', '19/03/2019 11:12:36', 35, 'private', ''),
(39, 'hapbapbslasdadwadsdasd', '20/03/2019 10:00:19', 39, 'public', ''),
(40, 'KONNICHIWA!!!!', '20/03/2019 10:00:25', 39, 'private', ''),
(48, 'konj inda haus', '23/03/2019 18:11:09', 40, 'public', ''),
(83, 'geeeeeeeeeeee', '01/04/2019 14:57:18', 41, 'public', ''),
(96, '', '01/04/2019 16:15:02', 41, 'public', '5ca21ce62a9586.87901685.jpg'),
(113, 'So cool', '03/04/2019 18:13:17', 55, 'public', ''),
(114, '', '03/04/2019 18:13:27', 55, 'public', '5ca4dba7b221d9.19606021.jpg'),
(115, '', '03/04/2019 19:10:03', 55, 'public', '5ca4e8ebef8ac7.64766646.png'),
(116, '', '03/04/2019 19:11:57', 55, 'public', '5ca4e95d645c73.49355111.png'),
(117, 'KONNICHIWA!!!!', '03/04/2019 19:13:10', 55, 'private', ''),
(118, 'post without img', '03/04/2019 19:17:39', 40, 'public', ''),
(119, 'My forge', '03/04/2019 20:29:11', 40, 'public', '5ca4fb7727aa26.92249904.jpg'),
(122, 'editing', '03/04/2019 23:40:31', 38, 'public', '5ca5284f4c3f46.19707602.jpg'),
(124, '', '04/04/2019 12:40:29', 38, 'public', '5ca5df1db5faa0.26027189.jpg'),
(128, 'hellooooo', '04/04/2019 22:20:47', 38, 'public', ''),
(129, 'rlyacroc', '04/04/2019 22:23:44', 38, 'public', '5ca667d03234a0.24822786.jpg'),
(131, 'dsadsadsad', '05/04/2019 11:31:02', 37, 'public', ''),
(132, 'fdsfdsfesfdsfdsf', '05/04/2019 11:39:11', 37, 'public', '5ca7223fc598f0.66098863.png'),
(133, 'sadsadsad', '05/04/2019 13:03:53', 60, 'public', '5ca736190f8b98.37283011.png'),
(134, 'ffufifiyfi', '05/04/2019 13:06:36', 60, 'public', '5ca736bc068f48.56792149.jpg'),
(135, 'dfsdfdsfsdfs', '05/04/2019 13:21:28', 61, 'public', ''),
(136, 'dawdawdwadawda', '05/04/2019 13:25:55', 62, 'public', '5ca73b43ebbe34.59870575.jpg'),
(137, '', '05/04/2019 14:01:47', 62, 'public', '5ca743ab314fc0.91477907.jpg'),
(138, '', '05/04/2019 14:02:00', 62, 'public', '5ca743b847cd04.81229441.png'),
(139, 'Razumljivo', '05/04/2019 14:02:16', 62, 'public', ''),
(140, 'hrllo', '05/04/2019 14:30:19', 64, 'public', ''),
(141, 'krokodil', '05/04/2019 14:30:28', 64, 'public', '5ca74a6422c9b2.63118195.jpg'),
(142, '', '07/04/2019 12:46:03', 40, 'public', '5ca9d4eb741ce4.37959692.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `lastname`, `email`, `username`, `img`, `password`) VALUES
(1, 'Aleksa', 'Ivkovic', 'Ivkovic', 'kaktus', 'default.jpg', '$2y$10$W/VoHBv3Q/Krx3ivM/4UGexJ9WHtuxQ0K.7GC0fuUJlEQMsARSdXy'),
(2, 'Aleksa', 'Ivkovic', 'Ivkovic', 'kaktus', 'default.jpg', '$2y$10$3K5KZocvY2Sx/DnD6iUiV.8ZUbsS.he0CLETyDkpsTMl1hF6.tNIy'),
(4, 'Aleksa', 'Ivkovic', 'Ivkovic', 'kaktus', 'default.jpg', '$2y$10$0fvht.Zl8AJpZLWVIBkvtOcR3O4YQ6BhtI1fBAIogPl7Z.aWh5UCG'),
(5, 'Aleksa', 'Ivkovic', 'Ivkovic', 'kaktus', 'default.jpg', '$2y$10$cETm8JUVtfSdoGy6vWyybux1abZ2PPM.vOjkd7hDXrRh1urHY3a3e'),
(34, 'Milica', 'Milica', 'Milica', 'Milica', 'default.jpg', '$2y$10$6.LF2omPw/VMdmBp4t2/I.QcooNZkj7vAJG2YH6heyv4NoNp0kquW'),
(35, 'Tamara', 'Tamara', 'Tamara', 'Tamara', 'default.jpg', '$2y$10$.brNdwjmFKRPaI2vMRTxd.mqUYPHeNrlkNimGW/wHnSju6pArCP0S'),
(36, 'Sandra', 'Sandra', 'Sandra', 'Sandra', 'default.jpg', '$2y$10$0gc0gSNuTluAe8oVkXX1A.i9iFSzJLdGNleoLg05lzkwYQK1imk7C'),
(37, 'Mika', 'Zika', 'Aleksa', 'Pera', 'default.jpg', '$2y$10$VZ6/jDG14XrFDGNdoXXUHOVIIri8O6fbRnvf/sVBdrgSojTW7iyiy'),
(38, 'Gigablast', 'Pwner', 'Might', 'Yagiroz', 'default.jpg', '$2y$10$GsJawSeLsznuFca5nIBuHOKTwCPO9oN5DKhcYvmHmOy154adZVRlm'),
(39, 'Yagiro', 'Might', 'Might', 'Yagiro', 'default.jpg', '$2y$10$huBdZaaEyD4/zJFBvmkEYOaZSmm3qRmRW8BCzk0KVVehe1qHfiiVC'),
(40, 'sherif', 'konjovic', 'konjovic', 'konjina', 'default.jpg', '$2y$10$up2ejDjJzDsWLbGkZfM08uIeCR.ZKMh13nFJ2AvalJOtFVQ0UY9qK'),
(41, 'Pera', 'Seric', 'Seric', 'serivoje', 'default.jpg', '$2y$10$Yz5FildfugGvOqIocVdz6eIueztIa4CJSjJQoCxShsV2e2KDFKkDq'),
(42, 'pera', 'peric', 'peric', 'peromir', 'default.jpg', '$2y$10$eQ6nTCIfRO.OR/mB4ry5ee1JMTxKD8CdhHoZY7rDqXEJGJIIbF5Ka'),
(43, 'Reigen', 'Arataka', 'Arataka', 'psyhic', 'default.jpg', '$2y$10$eZqu3yR4jd3JOrdenjQ2duhuV5rwkd26ZzJOBGEp0PgkpDuT4ZPke'),
(44, 'Son', 'Goku', 'Goku', 'goku123', 'default.jpg', '$2y$10$YHHxU0Apsq0/2U9.qd/11.Is8JfMbLyjQDoO5vnqzX5aPyaQcWP72'),
(45, 'Uraraka', 'ochacho', 'ochacho', 'uravity', 'default.jpg', '$2y$10$8TujBZxwUSHmIe7ZiBz73O4iN8FrkUuAYROp3XJ7guoosHApqJW4S'),
(46, 'Kaizoku', 'Kagarasu', 'Kagarasu', 'getsugatensho', 'default.jpg', '$2y$10$MqJ1MVYQlxSbawRAdWm72.FzqIbUKpWRhLOU7HdqPMFq2S/soe6Iu'),
(47, 'maryoku', 'makadaku', 'makadaku', 'makadaka', 'default.jpg', '$2y$10$neM1K8j0S87AYQRXU4cT2e4.1tfEMN.efbpl.ENL6PoQo0IxJz9he'),
(48, 'goku', 'soku', 'soku', 'gorku', 'default.jpg', '$2y$10$OXYh86MA9e0KFOUKZz67KOgEmtbfN51wqII4Ll.7LSJtsyMwFegXC'),
(49, 'asss', 'assssss', 'assssss', 'ass123', 'default.jpg', '$2y$10$ymHkNztpv5bsjfzeMd99P.HJoSDbpJEZnUE4kmbvEKdEtmauovgTO'),
(50, 'hellspawn', 'hellspawn', 'hellspawn', 'hellspawner', 'default.jpg', '$2y$10$5rJ53toUccSFXdGvvJujEO8k7eJwFpPAytY2ySc2iAtdm.cQCRSWW'),
(51, 'Megatron', 'Autobot', 'Autobot', 'Megatron123', 'default.jpg', '$2y$10$EawD5w5OfSv1DWe6lV2yR.Au3ktWidvXlaQLywHPQWOUaX5miNUkS'),
(52, 'Alex', 'Crane', 'Crane', 'saitama', 'default.jpg', '$2y$10$aIUjXkl5Maqss58L2Kay6urBh/O0i4XuBDD/cpW4TqglYtPrdS4GS'),
(53, 'makakak', 'fakakak', 'fakakak', 'fakfakfak', 'default.jpg', '$2y$10$TyPxXPO7L9Pqc9MwomMHNOgLswAIKoHJ7pnrB5Jtr6yQF3GrahO8m'),
(54, 'Myth', 'Buster', 'Buster', 'baster123', 'default.jpg', '$2y$10$7isIYAKuOKA/TOX2zQ/8Luy./3MPoU1dYK.1giVVwWjOwbGN3RjXa'),
(55, 'Edward', 'Elric', 'Elric', 'Fullmetal', 'default.jpg', '$2y$10$k7XCtduhfzusOfJ6a/u1WO0RlbjXreDOsJ9xAwzoRbis5zqWmOt0a'),
(56, 'helhelhel', 'hehieiheih', 'hehieiheih', 'heh123', 'default.jpg', '$2y$10$E.wHlNSJCrhp5KoucE8F6OtRVv9K9byjRLWi5jbTWW45l2Kx2OaTm'),
(57, 'bobiru', 'boban', 'boban', 'gokuku', 'default.jpg', '$2y$10$m2m/6IxXEn0Sz215oPVX0.iTuTR9WtE9.UZ26t6kxfykYcBbPweve'),
(58, 'scawcawc', 'awcwacawc', 'awcwacawc', 'gagaga', 'default.jpg', '$2y$10$kV6E8FnLG00jqim8FfTaDOR8EqxeyPpQLfxPfNbYlZWxEx/0NVEyW'),
(59, 'Ime', 'Prezime', 'Mihail', 'Bili', 'default.jpg', '$2y$10$rCpvwe6XPffiNxg6pR3h0.PYm1nHsrwL91OQLuy/RPnr51ve3CB2u'),
(60, 'novi', 'korisnik', 'korisnik', 'Kuki', 'default.jpg', '$2y$10$HfmO2Qo6VkxuspuXvN/r1eAnuyxPNRlUIYCI55H9iwbXo4p6N68we'),
(61, 'najnoviji', 'korisnik2', 'korisnik2', 'korchina', 'default.jpg', '$2y$10$umdvaMt4TiYmO5n1beMUc.fXYvid8fvQYV9SgCumtngdIo/1ykBdW'),
(62, 'Kek', 'zek', 'zik', 'Fefe', 'default.jpg', '$2y$10$BU/awcMpvgJPNKQ45T49j.HwqJiMrlEXi3woyEidASOYKoThL8pGq'),
(63, '', '', '', '', 'default.jpg', ''),
(64, 'Pera', 'Peric', 'Peric', 'pera123', 'default.jpg', '$2y$10$wdHIaYo.sOHqT8uEgKDiae2dr/oPpgveYC5pJWyaWVWWUZvAGTp1W'),
(65, 'Konj', 'Svinja', 'Svinja', 'Megamen', '', '$2y$10$5IbSFKXimeQypZEg9ycfXOTL1rUd/ZDsPvB9yENmM.fwyGmNbqJDG'),
(66, 'Lich', 'King', 'King', 'Lich123', 'default.jpg', '$2y$10$CSW61og1fMCvNhtlFk6GPeOJylz/eo54CJrjS53uDt6chNshido0m');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `jedan_korisnik_vise_postova` FOREIGN KEY (`userId`) REFERENCES `users` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
