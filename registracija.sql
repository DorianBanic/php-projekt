-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2024 at 02:32 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registracija`
--

-- --------------------------------------------------------

--
-- Table structure for table `države`
--

CREATE TABLE `države` (
  `idDržave` int(11) NOT NULL,
  `Kratica` varchar(2) NOT NULL,
  `imeDržave` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `države`
--

INSERT INTO `države` (`idDržave`, `Kratica`, `imeDržave`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CK', 'Cook Islands'),
(51, 'CR', 'Costa Rica'),
(52, 'HR', 'Croatia (Hrvatska)'),
(53, 'CU', 'Cuba'),
(54, 'CY', 'Cyprus'),
(55, 'CZ', 'Czech Republic'),
(56, 'DK', 'Denmark'),
(57, 'DJ', 'Djibouti'),
(58, 'DM', 'Dominica'),
(59, 'DO', 'Dominican Republic'),
(60, 'TP', 'East Timor'),
(61, 'EC', 'Ecuador'),
(62, 'EG', 'Egypt'),
(63, 'SV', 'El Salvador'),
(64, 'GQ', 'Equatorial Guinea'),
(65, 'ER', 'Eritrea'),
(66, 'EE', 'Estonia'),
(67, 'ET', 'Ethiopia'),
(68, 'FK', 'Falkland Islands (Malvinas)'),
(69, 'FO', 'Faroe Islands'),
(70, 'FJ', 'Fiji'),
(71, 'FI', 'Finland'),
(72, 'FR', 'France'),
(73, 'FX', 'France, Metropolitan'),
(74, 'GF', 'French Guiana'),
(75, 'PF', 'French Polynesia'),
(76, 'TF', 'French Southern Territories'),
(77, 'GA', 'Gabon'),
(78, 'GM', 'Gambia'),
(79, 'GE', 'Georgia'),
(80, 'DE', 'Germany'),
(81, 'GH', 'Ghana'),
(82, 'GI', 'Gibraltar'),
(83, 'GK', 'Guernsey'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'IM', 'Isle of Man'),
(101, 'ID', 'Indonesia'),
(102, 'IR', 'Iran (Islamic Republic of)'),
(103, 'IQ', 'Iraq'),
(104, 'IE', 'Ireland'),
(105, 'IL', 'Israel'),
(106, 'IT', 'Italy'),
(107, 'CI', 'Ivory Coast'),
(108, 'JE', 'Jersey'),
(109, 'JM', 'Jamaica'),
(110, 'JP', 'Japan'),
(111, 'JO', 'Jordan'),
(112, 'KZ', 'Kazakhstan'),
(113, 'KE', 'Kenya'),
(114, 'KI', 'Kiribati'),
(115, 'KP', 'Korea, Democratic People\'s Republic of'),
(116, 'KR', 'Korea, Republic of'),
(117, 'XK', 'Kosovo'),
(118, 'KW', 'Kuwait'),
(119, 'KG', 'Kyrgyzstan'),
(120, 'LA', 'Lao People\'s Democratic Republic'),
(121, 'LV', 'Latvia'),
(122, 'LB', 'Lebanon'),
(123, 'LS', 'Lesotho'),
(124, 'LR', 'Liberia'),
(125, 'LY', 'Libyan Arab Jamahiriya'),
(126, 'LI', 'Liechtenstein'),
(127, 'LT', 'Lithuania'),
(128, 'LU', 'Luxembourg'),
(129, 'MO', 'Macau'),
(130, 'MK', 'Macedonia'),
(131, 'MG', 'Madagascar'),
(132, 'MW', 'Malawi'),
(133, 'MY', 'Malaysia'),
(134, 'MV', 'Maldives'),
(135, 'ML', 'Mali'),
(136, 'MT', 'Malta'),
(137, 'MH', 'Marshall Islands'),
(138, 'MQ', 'Martinique'),
(139, 'MR', 'Mauritania'),
(140, 'MU', 'Mauritius'),
(141, 'TY', 'Mayotte'),
(142, 'MX', 'Mexico'),
(143, 'FM', 'Micronesia, Federated States of'),
(144, 'MD', 'Moldova, Republic of'),
(145, 'MC', 'Monaco'),
(146, 'MN', 'Mongolia'),
(147, 'ME', 'Montenegro'),
(148, 'MS', 'Montserrat'),
(149, 'MA', 'Morocco'),
(150, 'MZ', 'Mozambique'),
(151, 'MM', 'Myanmar'),
(152, 'NA', 'Namibia'),
(153, 'NR', 'Nauru'),
(154, 'NP', 'Nepal'),
(155, 'NL', 'Netherlands'),
(156, 'AN', 'Netherlands Antilles'),
(157, 'NC', 'New Caledonia'),
(158, 'NZ', 'New Zealand'),
(159, 'NI', 'Nicaragua'),
(160, 'NE', 'Niger'),
(161, 'NG', 'Nigeria'),
(162, 'NU', 'Niue'),
(163, 'NF', 'Norfolk Island'),
(164, 'MP', 'Northern Mariana Islands'),
(165, 'NO', 'Norway'),
(166, 'OM', 'Oman'),
(167, 'PK', 'Pakistan'),
(168, 'PW', 'Palau'),
(169, 'PS', 'Palestine'),
(170, 'PA', 'Panama'),
(171, 'PG', 'Papua New Guinea'),
(172, 'PY', 'Paraguay'),
(173, 'PE', 'Peru'),
(174, 'PH', 'Philippines'),
(175, 'PN', 'Pitcairn'),
(176, 'PL', 'Poland'),
(177, 'PT', 'Portugal'),
(178, 'PR', 'Puerto Rico'),
(179, 'QA', 'Qatar'),
(180, 'RE', 'Reunion'),
(181, 'RO', 'Romania'),
(182, 'RU', 'Russian Federation'),
(183, 'RW', 'Rwanda'),
(184, 'KN', 'Saint Kitts and Nevis'),
(185, 'LC', 'Saint Lucia'),
(186, 'VC', 'Saint Vincent and the Grenadines'),
(187, 'WS', 'Samoa'),
(188, 'SM', 'San Marino'),
(189, 'ST', 'Sao Tome and Principe'),
(190, 'SA', 'Saudi Arabia'),
(191, 'SN', 'Senegal'),
(192, 'RS', 'Serbia'),
(193, 'SC', 'Seychelles'),
(194, 'SL', 'Sierra Leone'),
(195, 'SG', 'Singapore'),
(196, 'SK', 'Slovakia'),
(197, 'SI', 'Slovenia'),
(198, 'SB', 'Solomon Islands'),
(199, 'SO', 'Somalia'),
(200, 'ZA', 'South Africa'),
(201, 'GS', 'South Georgia South Sandwich Islands'),
(202, 'ES', 'Spain'),
(203, 'LK', 'Sri Lanka'),
(204, 'SH', 'St. Helena'),
(205, 'PM', 'St. Pierre and Miquelon'),
(206, 'SD', 'Sudan'),
(207, 'SR', 'Suriname'),
(208, 'SJ', 'Svalbard and Jan Mayen Islands'),
(209, 'SZ', 'Swaziland'),
(210, 'SE', 'Sweden'),
(211, 'CH', 'Switzerland'),
(212, 'SY', 'Syrian Arab Republic'),
(213, 'TW', 'Taiwan'),
(214, 'TJ', 'Tajikistan'),
(215, 'TZ', 'Tanzania, United Republic of'),
(216, 'TH', 'Thailand'),
(217, 'TG', 'Togo'),
(218, 'TK', 'Tokelau'),
(219, 'TO', 'Tonga'),
(220, 'TT', 'Trinidad and Tobago'),
(221, 'TN', 'Tunisia'),
(222, 'TR', 'Turkey'),
(223, 'TM', 'Turkmenistan'),
(224, 'TC', 'Turks and Caicos Islands'),
(225, 'TV', 'Tuvalu'),
(226, 'UG', 'Uganda'),
(227, 'UA', 'Ukraine'),
(228, 'AE', 'United Arab Emirates'),
(229, 'GB', 'United Kingdom'),
(230, 'US', 'United States'),
(231, 'UM', 'United States minor outlying islands'),
(232, 'UY', 'Uruguay'),
(233, 'UZ', 'Uzbekistan'),
(234, 'VU', 'Vanuatu'),
(235, 'VA', 'Vatican City State'),
(236, 'VE', 'Venezuela'),
(237, 'VN', 'Vietnam'),
(238, 'VG', 'Virgin Islands (British)'),
(239, 'VI', 'Virgin Islands (U.S.)'),
(240, 'WF', 'Wallis and Futuna Islands'),
(241, 'EH', 'Western Sahara'),
(242, 'YE', 'Yemen'),
(243, 'ZR', 'Zaire'),
(244, 'ZM', 'Zambia'),
(245, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `idKorisnika` int(11) NOT NULL,
  `Ime` varchar(50) NOT NULL,
  `Prezime` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Država` char(2) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `datumRođenja` date NOT NULL,
  `Lozinka` varchar(255) NOT NULL,
  `Rola` enum('user','editor','admin') NOT NULL DEFAULT 'user',
  `Status` enum('inactive','active') NOT NULL DEFAULT 'inactive',
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`idKorisnika`, `Ime`, `Prezime`, `Email`, `Država`, `Username`, `datumRođenja`, `Lozinka`, `Rola`, `Status`, `createdAt`) VALUES
(10, 'Dorian', 'Banić', 'dorian.banic@gmail.com', '6', 'dbanić', '2024-11-28', '$2y$10$0ODgS1P9/0avfEDc9gDsO.NnETbULb43tLC2CMWgy7jqtWvMOksf6', 'admin', 'active', '2024-12-03 18:22:23'),
(11, 'Mislav', 'Oršić', 'mislav@gmail.com', '10', 'moršić', '2024-11-27', '$2y$10$IneuJ0uPRtyHdI545LLvG.fIwpZQs2Fp6sWBayDldBKBCIjpeoLNq', 'editor', 'active', '2024-12-03 18:24:02');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `shortContent` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('pending','approved','archived') DEFAULT 'pending',
  `author_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `subtitle`, `content`, `shortContent`, `created_at`, `status`, `author_id`) VALUES
(15, 'fdsfdfd', 'dsfsdfsfd', 'sdfsdfsdfsdf', 'sdfsdfsfd', '2024-11-25 03:23:48', 'approved', NULL),
(16, 'Bjelica: Baturina i Sučić će otići, ali nakon njih će doći mlađi', 'Bjelica je dao intervju za Španjolsku Marcu', 'DINAMOV trener Nenad Bjelica rekao je u razgovoru za španjolsku postaju Radio Marca da hrvatski prvak želi zadržati Martina Baturinu i Petra Sučića do ljeta te im priprema nove ugovore, ali da će njihov ostanak ovisiti o mogućim ponudama iz inozemstva.\r\n\r\nBaturini je cijena 20 milijuna eura, a Sučiću tri milijuna, podatak je specijalizirane stranice Transfermarkt. Obojica imaju ugovore do ljeta 2028.\r\n\r\n\"Kada će otići? Hoće li to biti sada u siječnju ili srpnju, vidjet ćemo. Mi imamo pripremljene ugovore, kako bismo produžili suradnju s njima uz bolje uvjete, kako bi se osjećali dobro ovdje u Dinamu. Dođu li ponude velikih klubova, bit će proučene, a klub će odlučiti hoće li otići ili ne\", izjavio je trener.\r\n\r\nMediji posljednjih dana nagađaju o interesima raznih klubova, međutim niti jedan klub nije potvrdio da ih želi. Bjelica također nije naveo ime klubova koji bi mogli poslati ponudu. Upitan o omladinskoj školi Dinama, rekao je da se \"rezultati već vide\".\r\n\r\n\"Svake godine izlaze igrači iz podmlatka. Sada su izašli Petar Sučić i Martin Baturina koji su trenutačno najistaknutiji. Igraju u prvoj postavi reprezentacije Hrvatske, a također igraju jako dobro u Dinamu. Nakon njih će doći drugi mladi igrači koje pripremamo kada odu Baturina i Sučić jer ovaj klub preživljava od transfera u Europu\", rekao je trener.', 'DINAMOV trener Nenad Bjelica rekao je u razgovoru za španjolsku postaju Radio Marca da hrvatski prvak želi zadržati Martina Baturinu i Petra Sučića do ljeta te im priprema nove ugovore, ali da će njihov ostanak ovisiti o mogućim ponudama iz inozemstva.', '2024-11-29 22:18:43', 'approved', NULL),
(17, 'Treba li se Oršić vratiti u Dinamo?', 'Mislav Oršić je otpisan u Trabzonsporu', 'HRVATSKI reprezentativac Mislav Oršić (31) izbačen je iz prve momčadi Trabzonspora. Stefano Denswil, Enis Bardhi i Umut Bozok također više nisu dio prve momčadi turskog prvoligaša, a u klubu smatraju da navedeni igrači moraju popraviti formu ako se misle vratiti u prvi tim.\r\n\r\nVrlo je izvjesno da će Oršić već ove zime napustiti turski klub. Hrvatski ofenzivac ima osam nastupa ove sezone i 343 odigrane minute, a turski mediji već neko vrijeme pišu kako ga se klub planira riješiti. Kao jedna od najzanimljivijih opcija za Oršića nameće se Dinamo, klub njegovog života, što je u više navrata potvrdio.\r\n\r\nModri bi se mogli aktivirati u prijelaznom roku oko ovog posla, tim više što su Oršić i trener Nenad Bjelica u prvom zajedničkom mandatu imali sjajnu suradnju. Uostalom, upravo je Bjelica doveo Oršića u Trabzonspor pretprošlog ljeta.\r\n\r\nNajbolje dane proveo je igrajući za Dinamo, s kojim je osvojio pet naslova prvaka Hrvatske te zabio 91 gol u 216 nastupa. Igrao je s Dinamom Ligu prvaka i Europa ligu, što mu je i donijelo poziv u reprezentaciju u rujnu 2019. godine.\r\n\r\nOršić prema Transfermarktu vrijedi 2.2 milijuna eura, a ugovor s turskim klubom traje mu do idućeg ljeta. To značajno olakšava Dinamov put prema Oršiću jer bi ga Turci mogli pustiti ispod cijene.', 'HRVATSKI reprezentativac Mislav Oršić (31) izbačen je iz prve momčadi Trabzonspora. Stefano Denswil, Enis Bardhi i Umut Bozok također više nisu dio prve momčadi turskog prvoligaša, a u klubu smatraju da navedeni igrači moraju popraviti formu ako se misle vratiti u prvi tim.', '2024-11-29 22:20:22', 'approved', NULL),
(18, 'Novi udarac za Dalića. Petković otpao za Škotsku i Portugal', 'Bruno Petković se ozlijedio', 'BRUNO PETKOVIĆ će ipak propustiti ključne utakmice Hrvatske u Ligi nacija zbog ozljede mišića, potvrdio je Hrvatski nogometni savez na svojim stranicama. Napadač Dinama već neko vrijeme vuče ozljedu i neće biti na raspolaganju Zlatku Daliću za zadnje dvije utakmice u skupini, protiv Škotske u Glasgowu (petak) i Portugala u Splitu (ponedjeljak).\r\n\r\nTo je epilog sapunice koja je nedavno dospjela u javnost. Daliću se nije svidjelo to što je Dinamo komunicirao da je Petković u problemima s ozljedom, a ipak je ušao u zadnjem kolu protiv Gorice. Aktualni prvak Hrvatske je bio razočaran takvim Dalićevim istupom.\r\n\r\n\"Jedna od dobrih stvari u reprezentaciji je što igrači dolaze s poštovanjem. Nekad nisu najspremniji. To je bilo kod Brune protiv Turske. To cijenim, Bruno je igrao protiv Škotske i Poljske. Nije spreman i poštedjeli smo ga. Požalio se na ozljedu, rekao je da će doći i u kontaktu s liječničkom službom donijet ćemo odluku.\r\n\r\nOzlijeđen je i ne trenira, ne znam zašto igra ako je ozlijeđen i ne trenira. To mi smeta. Zajec me zvao i rekao sam mu što i svakom drugom predsjedniku kluba. Mora doći, a ja ću donijeti najbolju odluku za njega i reprezentaciju\", poručio je Dalić.\r\n\r\nNije se ta izjava svidjela Dinamu, koji smatra da je učinio sve u svojoj moći da Petkovića zaliječi i sačuva u prethodnom razdoblju, u kojem 30-godišnji napadač ima problema s upalom, što mu je radilo problem i prošle sezone.', 'BRUNO PETKOVIĆ će ipak propustiti ključne utakmice Hrvatske u Ligi nacija zbog ozljede mišića, potvrdio je Hrvatski nogometni savez na svojim stranicama. Napadač Dinama već neko vrijeme vuče ozljedu i neće biti na raspolaganju Zlatku Daliću za zadnje dvije utakmice u skupini, protiv Škotske u Glasgowu (petak) i Portugala u Splitu (ponedjeljak).', '2024-11-29 22:21:55', 'approved', NULL),
(19, 'Baturina sucu za vrijeme utakmice: Jesi li ti normalan?', 'Martin Baturina je poludio', 'DINAMO je remizirao kod Gorice 2:2 u 13. kolu SuperSport HNL-a. Golove za Goricu postigli su Marko Kolar i Krešimir Krizmanić, a za Dinamo bivši igrač Gorice Dario Špikić i Nathanaël Mbuku.\r\n\r\nDinamovci su bili nervozni na terenu, a to se vidjelo na Martinu Baturini u 65. minuti utakmice..\r\n\r\nBorio se s dvojicom igrača Gorice, nakon čega je ostao bez lopte. Smatrao je da mu suci trebaju vratiti loptu, no posjed je pripao domaćinu.\r\n\r\nBaturina je potom došao do linijskog suca i pitao ga: \"Što je ovo? Jesi li ti normalan? Jesi li ti normalan?\"\r\n\r\nDinamo trenutno zaostaje tri boda za Hajdukom, koji danas igra na Poljudu protiv Istre 1961. Rijeka je druga s jednakim brojem bodova kao Dinamo, ali s utakmicom manje. Rijeka u nedjelju dočekuje Osijek.', 'DINAMO je remizirao kod Gorice 2:2 u 13. kolu SuperSport HNL-a. Golove za Goricu postigli su Marko Kolar i Krešimir Krizmanić, a za Dinamo bivši igrač Gorice Dario Špikić i Nathanaël Mbuku. Dinamovci su bili nervozni na terenu, a to se vidjelo na Martinu Baturini u 65. minuti utakmice.', '2024-11-29 22:22:44', 'approved', NULL),
(21, 'sdaad', 'asdasdad', 'asdasdasd', 'asdasdasd', '2024-12-03 18:25:31', 'archived', 11);

-- --------------------------------------------------------

--
-- Table structure for table `news_images`
--

CREATE TABLE `news_images` (
  `id` int(11) NOT NULL,
  `news_id` int(11) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news_images`
--

INSERT INTO `news_images` (`id`, `news_id`, `image_path`) VALUES
(2, 15, 'uploads/6743edc40c4f4_Marko Pjaca.jpg'),
(3, 16, 'uploads/674a3dc375d65_Nenad Bjelica.jpg'),
(4, 17, 'uploads/674a3e2608e68_Mislav Oršić.jpg'),
(5, 18, 'uploads/674a3e83f3aa8_Bruno Petković.jpg'),
(6, 19, 'uploads/674a3eb40e5cb_Martin Baturina.jpg'),
(7, 21, 'uploads/674f4d1b35799_Bruno Petković.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `države`
--
ALTER TABLE `države`
  ADD PRIMARY KEY (`idDržave`);

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`idKorisnika`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `news_images`
--
ALTER TABLE `news_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `države`
--
ALTER TABLE `države`
  MODIFY `idDržave` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `idKorisnika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `news_images`
--
ALTER TABLE `news_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `korisnici` (`idKorisnika`) ON DELETE SET NULL;

--
-- Constraints for table `news_images`
--
ALTER TABLE `news_images`
  ADD CONSTRAINT `news_images_ibfk_1` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
