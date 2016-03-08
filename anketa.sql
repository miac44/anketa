-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 08, 2016 at 03:14 AM
-- Server version: 5.5.45
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `anketa`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambulances`
--

DROP TABLE IF EXISTS `ambulances`;
CREATE TABLE IF NOT EXISTS `ambulances` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `region_id` bigint(20) NOT NULL,
  `ident` varchar(50) NOT NULL,
  `name` varchar(250) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `ambulances`
--

INSERT INTO `ambulances` (`id`, `region_id`, `ident`, `name`) VALUES
(1, 1, 'kos_obl_klin_bol', 'Костромская областная клиническая больница'),
(2, 1, 'kos_obl_det_bol', 'Костромская областная детская больница'),
(3, 1, 'kos_obl_vet_voin', 'Костромской областной госпиталь для ветеранов войн'),
(4, 1, 'kos_onko', 'Костромской онкологический диспансер'),
(5, 1, 'kos_spec_vid_pomosh', 'Костромской центр специализированных видов медицинской помощи'),
(6, 1, 'okr_bol_kos_okr_1', 'Окружная больница Костромского округа №1'),
(7, 1, 'okr_bol_kos_okr_2', 'Окружная больница Костромского округа №2'),
(8, 1, 'gor_bol_kstr', 'Городская больница г. Костромы'),
(9, 1, 'gor_pol_vzr_4', 'Городская поликлиника взрослых №4 г. Костромы'),
(10, 1, 'kos_obl_stomat', 'Костромская областная стоматологическая поликлиника'),
(11, 1, 'stom_pol_1_kstrm', 'Стоматологическая поликлиника №1 г. Костромы'),
(12, 1, 'roddom', 'Родильный дом г. Костромы'),
(13, 1, 'centr_ohrn_semyi', 'Центр охраны здоровья семьи и репродукции Костромской области'),
(14, 1, 'centr_vosst_med', 'Центр восстановительной медицины и реабилитации для детей'),
(15, 25, 'shar_kaverin', 'Шарьинская окружная больница им. Каверина В.Ф.'),
(16, 11, 'mantur_ambulance', 'Мантуровская ОБ'),
(17, 24, 'chuhloma_ambulance', 'Чухломская ЦРБ'),
(18, 3, 'buy_ambulance', 'Буйская ГБ'),
(19, 3, 'gavril_ambulance', 'Гавриловская УБ'),
(20, 13, 'neya_ambulance', 'Нейская РБ'),
(21, 5, 'vlgr_ambulance', 'Волгореченская ГБ'),
(22, 4, 'galych_ambulance', 'Галичская ОБ'),
(23, 12, 'mezha_ambulance', 'Межевская РБ'),
(24, 8, 'kologriv_ambulance', 'Кологривская РБ'),
(25, 21, 'solig_ambulance', 'Солигалическая РБ'),
(26, 22, 'susan_ambulance', 'Сусанинская РБ'),
(27, 20, 'pistug_ambulance', 'Пыщугская РБ'),
(28, 6, 'vohm_ambulance', 'Вохомская РБ'),
(29, 23, 'sudisl_ambulance', 'Судиславская РБ'),
(30, 10, 'makar_ambulance', 'Макарьевская РБ'),
(31, 14, 'nereht_ambulance', 'Нерехтская ЦРБ'),
(32, 16, 'ostrov_ambulance', 'Островская РБ'),
(33, 17, 'pavin_ambulance', 'Павинская РБ'),
(34, 2, 'antrop_ambulance', 'Антроповская ЦРБ'),
(35, 14, 'stomat_nereht', 'Стоматологическая поликлиника г.Нерехты'),
(36, 15, 'bogov_ambulance', 'Боговаровская РБ'),
(37, 18, 'parfen_ambulance', 'Парфеньевская РБ'),
(38, 7, 'kadyi_ambulance', 'Кадыйская РБ'),
(39, 19, 'ponaz_ambulance', 'Поназыревская РБ'),
(40, 9, 'krasn_ambulance', 'Красносельская РБ');

-- --------------------------------------------------------

--
-- Table structure for table `anketa_first`
--

DROP TABLE IF EXISTS `anketa_first`;
CREATE TABLE IF NOT EXISTS `anketa_first` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(30) NOT NULL,
  `region` varchar(100) NOT NULL,
  `ambulance` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `year` varchar(10) NOT NULL,
  `gosp1` varchar(100) NOT NULL,
  `gosp1_1` varchar(100) NOT NULL,
  `gosp1_2` varchar(100) NOT NULL,
  `gosp1_3` varchar(100) NOT NULL,
  `gosp1_3_1` varchar(100) NOT NULL,
  `gosp1_4` varchar(100) NOT NULL,
  `gosp1_5` varchar(100) NOT NULL,
  `gosp2` varchar(100) NOT NULL,
  `gosp3` varchar(100) NOT NULL,
  `gosp3_1` varchar(100) NOT NULL,
  `gosp3_2` varchar(100) NOT NULL,
  `gosp3_2_1` varchar(100) NOT NULL,
  `gosp4` varchar(100) NOT NULL,
  `gosp4_1` varchar(100) NOT NULL,
  `gosp5` varchar(100) NOT NULL,
  `gosp5_1` varchar(100) NOT NULL,
  `gosp6` varchar(100) NOT NULL,
  `gosp6_1` varchar(100) NOT NULL,
  `gosp6_2` varchar(100) NOT NULL,
  `gosp6_3` varchar(100) NOT NULL,
  `gosp6_4` varchar(100) NOT NULL,
  `gosp6_5` varchar(100) NOT NULL,
  `gosp7` varchar(100) NOT NULL,
  `gosp7_1` varchar(100) NOT NULL,
  `gosp8` varchar(100) NOT NULL,
  `gosp8_1` varchar(100) NOT NULL,
  `gosp9` varchar(100) NOT NULL,
  `gosp10` varchar(100) NOT NULL,
  `gosp11` varchar(100) NOT NULL,
  `gosp12` varchar(100) NOT NULL,
  `gosp12_1` varchar(100) NOT NULL,
  `gosp13` varchar(100) NOT NULL,
  `gosp13_1` varchar(100) NOT NULL,
  `gosp13_2` varchar(100) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ankets`
--

DROP TABLE IF EXISTS `ankets`;
CREATE TABLE IF NOT EXISTS `ankets` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `action` varchar(255) NOT NULL,
  UNIQUE KEY `anketa_id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ankets`
--

INSERT INTO `ankets` (`id`, `title`, `text`, `action`) VALUES
(1, 'Первая анкета', 'Описание первой анкеты', 'first'),
(2, 'Вторая анкета', 'Описание второй анкеты', 'second');

-- --------------------------------------------------------

--
-- Table structure for table `elements`
--

DROP TABLE IF EXISTS `elements`;
CREATE TABLE IF NOT EXISTS `elements` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `anketa_id` bigint(20) NOT NULL DEFAULT '1',
  `type` varchar(50) NOT NULL DEFAULT 'radio',
  `title` varchar(1024) NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `parent_id` bigint(20) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `elements`
--

INSERT INTO `elements` (`id`, `anketa_id`, `type`, `title`, `required`, `parent_id`) VALUES
(1, 1, 'radio', '1. Госпитализация была:', 1, NULL),
(2, 1, 'radio', 'Срок ожидания плановой госпитализации с момента получения направления на плановую госпитализацию?', 0, 1),
(3, 1, 'radio', 'Вы были госпитализированы в назначенный срок?', 0, 1),
(4, 1, 'radio', 'Вы удовлетворены условиями пребывания в приемном отделении?', 0, 1),
(5, 1, 'checkbox', 'Что не удовлетворяет?', 0, 4),
(6, 1, 'radio', 'Сколько времени Вы ожидали в приемном отделении?', 0, 1),
(7, 1, 'radio', 'Вы удовлетворены отношением персонала во время пребывания в приемном отделении (доброжелательность, вежливость)?', 0, 1),
(8, 1, 'radio', '2. Вы были госпитализированы?', 1, NULL),
(9, 1, 'radio', '3. Имеете ли Вы установленную группу ограничения трудоспособности?', 1, NULL),
(10, 1, 'radio', 'Какую группу ограничения трудоспособности Вы имеете?', 0, 9),
(11, 1, 'radio', 'Медицинская организация оборудована для лиц с ограниченными возможностями?', 0, 9),
(12, 1, 'checkbox', 'Пожалуйста, укажите что именно отсутствует', 0, 11),
(13, 1, 'radio', '4. Перед госпитализаций Вы заходили на официальный сайт медицинской организации?', 1, NULL),
(14, 1, 'radio', 'Удовлетворены ли Вы качеством и полнотой информации о работе медицинской организации и порядке предоставления медицинских услуг, доступной на официальном сайте медицинской организации?', 0, 13),
(15, 1, 'radio', '5. При обращении в медицинскую организацию Вы обращались к информации, размещенной в помещениях медицинской организации (стенды, инфоматы и др.)?', 1, NULL),
(16, 1, 'radio', 'Удовлетворены ли Вы качеством и полнотой информации о работе медицинской организации и порядке предоставления медицинских услуг, доступной в помещениях медицинской организации?', 0, 15),
(17, 1, 'radio', '6. В каком режиме стационара Вы проходили лечение?', 1, NULL),
(18, 1, 'radio', 'Удовлетворены ли Вы питанием во время пребывания в медицинской организации?', 0, 17),
(19, 1, 'radio', 'Вы удовлетворены отношением персонала во время пребывания в отделении (доброжелательность, вежливость)?', 0, 17),
(20, 1, 'radio', 'Возникала ли у Вас во время пребывания в стационаре необходимость оплачивать назначенные лекарственные средства за свой счет?', 0, 17),
(21, 1, 'radio', 'Возникала ли у Вас во время пребывания в стационаре необходимость оплачивать назначенные диагностические исследования за свой счет?', 0, 17),
(22, 1, 'radio', 'Необходимость:', 0, 21),
(23, 1, 'radio', '7. Удовлетворены ли Вы компетентностью медицинских работников медицинской организации?', 1, NULL),
(24, 1, 'radio', 'Что именно Вас не удовлетворило?', 0, 23),
(25, 1, 'radio', '8. Удовлетворены ли Вы условиями пребывания в медицинской организации?', 1, NULL),
(26, 1, 'radio', 'Что не удовлетворяет?', 0, 25),
(27, 1, 'radio', '9. Удовлетворены ли Вы оказанными услугами в этой медицинской организации?', 1, NULL),
(28, 1, 'radio', '10. Удовлетворены ли Вы действиями персонала медицинской организации по уходу?', 1, NULL),
(29, 1, 'radio', '11. Рекомендовали бы Вы данную медицинскую организацию для получения медицинской помощи?', 1, NULL),
(30, 1, 'radio', '12. Оставляли ли Вы комментарий о качестве обслуживания в медицинской организации и о медицинских работниках этой организации в социальных сетях?', 1, NULL),
(31, 1, 'radio', 'Характеристика комментария', 0, 30),
(32, 1, 'radio', '13. Вы благодарили персонал медицинской организации за оказанные Вам медицинские услуги?', 1, NULL),
(33, 1, 'radio', 'Кто был инициатором благодарения?', 0, 32),
(34, 1, 'radio', 'Форма благодарения', 0, 32);

-- --------------------------------------------------------

--
-- Table structure for table `meanings`
--

DROP TABLE IF EXISTS `meanings`;
CREATE TABLE IF NOT EXISTS `meanings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `element_id` bigint(20) NOT NULL,
  `title` varchar(1024) NOT NULL,
  `action` varchar(20) NOT NULL,
  `default` tinyint(1) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=99 ;

--
-- Dumping data for table `meanings`
--

INSERT INTO `meanings` (`id`, `element_id`, `title`, `action`, `default`) VALUES
(1, 1, 'плановая', 'show', NULL),
(2, 1, 'экстренная', 'hide', NULL),
(5, 2, '30 календарных дней и более\r\n', '', NULL),
(6, 2, '29 календарных дней\r\n', '', NULL),
(7, 2, '28 календарных дней\r\n', '', NULL),
(8, 2, '27 календарных дней\r\n', '', NULL),
(9, 2, '15 календарных дней\r\n', '', NULL),
(10, 2, 'меньше 15 календарных дней', '', NULL),
(11, 3, 'Да', '', NULL),
(12, 3, 'Нет', '', NULL),
(13, 4, 'Да', 'hide', NULL),
(14, 4, 'Нет', 'show', NULL),
(15, 5, 'отсутствие свободных мест ожидания', '', NULL),
(16, 5, 'состояние гардероба', '', NULL),
(17, 5, 'состояние туалета', '', NULL),
(18, 5, 'отсутствие питьевой воды', '', NULL),
(19, 5, 'санитарные условия', '', NULL),
(20, 6, '90 мин и более', '', NULL),
(21, 6, 'до 90 мин', '', NULL),
(22, 6, 'до 60 мин', '', NULL),
(23, 6, 'до 45 мин', '', NULL),
(24, 6, 'до 30 мин', '', NULL),
(25, 7, 'Да', '', NULL),
(26, 7, 'Нет', '', NULL),
(27, 8, 'за счет ОМС, бюджет', '', NULL),
(28, 8, 'за счет ДМС', '', NULL),
(29, 8, 'на платной основе', '', NULL),
(30, 9, 'Да', 'show', NULL),
(31, 9, 'Нет', 'hide', NULL),
(32, 10, 'I группа', '', NULL),
(33, 10, 'II группа', '', NULL),
(34, 10, 'III группа', '', NULL),
(35, 10, 'ребенок-инвалид', '', NULL),
(36, 11, 'Да', 'hide', NULL),
(37, 11, 'Нет', 'show', NULL),
(38, 12, 'отсутствие выделенного места стоянки автотранспортных средств для инвалидов', '', NULL),
(39, 12, 'отсутствие пандусов, поручней', '', NULL),
(40, 12, 'отсутствие подъемных платформ (аппарелей)', '', NULL),
(41, 12, 'отсутствие адаптированных лифтов', '', NULL),
(42, 12, 'отсутствие сменных кресел-колясок', '', NULL),
(43, 12, 'отсутствие информационных бегущих строк, информационных стендов, голосовых сигналов', '', NULL),
(44, 12, 'отсутствие информации шрифтом Брайля', '', NULL),
(45, 12, 'отсутствие доступных санитарно-гигиенических помещений', '', NULL),
(46, 12, 'отсутствие сопровождающих работников', '', NULL),
(47, 13, 'Да', 'show', NULL),
(48, 13, 'Нет', 'hide', NULL),
(49, 14, 'Да', '', NULL),
(50, 14, 'Нет', '', NULL),
(51, 15, 'Да', 'show', NULL),
(52, 15, 'Нет', 'hide', NULL),
(53, 16, 'Да', '', NULL),
(54, 16, 'Нет', '', NULL),
(55, 17, 'дневного стационара', 'hide', NULL),
(56, 17, 'круглосуточного пребывания', 'show', NULL),
(57, 18, 'Да', '', NULL),
(58, 18, 'Нет', '', NULL),
(59, 19, 'Да', '', NULL),
(60, 19, 'Нет', '', NULL),
(61, 20, 'Да', '', NULL),
(62, 20, 'Нет', '', NULL),
(63, 21, 'Да', 'show', NULL),
(64, 21, 'Нет', 'hide', NULL),
(65, 22, 'для уточнения диагноза', '', NULL),
(66, 22, 'с целью сокращения срока лечения', '', NULL),
(67, 22, 'приобретение расходных материалов', '', NULL),
(68, 23, 'Да', 'hide', NULL),
(69, 23, 'Нет', 'show', NULL),
(70, 24, 'Вам не разъяснили информацию о состоянии здоровья', '', NULL),
(71, 24, 'Вам не дали рекомендации по диагностике, лечению и реабилитации', '', NULL),
(72, 24, 'Вам не дали выписку', '', NULL),
(73, 24, 'другое', '', NULL),
(74, 25, 'Да', 'hide', NULL),
(75, 25, 'Нет', 'show', NULL),
(76, 26, 'уборка помещений', '', NULL),
(77, 26, 'освещение, температурный режим', '', NULL),
(78, 26, 'медицинской организации требуется ремонт', '', NULL),
(79, 26, 'в медицинской организации старая мебель', '', NULL),
(80, 27, 'Да', '', NULL),
(81, 27, 'Нет', '', NULL),
(82, 28, 'Да', '', NULL),
(83, 28, 'Нет', '', NULL),
(84, 29, 'Да', '', NULL),
(85, 29, 'Нет', '', NULL),
(86, 30, 'Да', 'show', NULL),
(87, 30, 'Нет', 'hide', NULL),
(88, 31, 'положительный', '', NULL),
(89, 31, 'отрицательный', '', NULL),
(90, 32, 'Да', 'show', NULL),
(91, 32, 'Нет', 'hide', NULL),
(92, 33, 'я сам (а)', '', NULL),
(93, 33, 'персонал медицинской организации', '', NULL),
(94, 34, 'письменная благодарность', '', NULL),
(95, 34, 'цветы', '', NULL),
(96, 34, 'подарки', '', NULL),
(97, 34, 'услуги', '', NULL),
(98, 34, 'деньги', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

DROP TABLE IF EXISTS `regions`;
CREATE TABLE IF NOT EXISTS `regions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ident` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `ident`, `name`) VALUES
(1, 'kstr_region', 'Костромской район'),
(2, 'antrop_region', 'Антроповский район'),
(3, 'buy_region', 'Буйский район'),
(4, 'galich_region', 'Галичский район'),
(5, 'vlgr_region', 'Волгореченский район'),
(6, 'vohm_region', 'Вохомский район'),
(7, 'kadyi_region', 'Кадыйский район'),
(8, 'klgrv_region', 'Кологривский район'),
(9, 'krasn_region', 'Красносельский район'),
(10, 'makar_region', 'Макарьевский район'),
(11, 'mantur_region', 'Мантуровский район'),
(12, 'mezha_region', 'Межевской район'),
(13, 'neya_region', 'Нейский район'),
(14, 'nrht_region', 'Нерехтский район'),
(15, 'oktyabr_region', 'Октябрьский район'),
(16, 'osrov_region', 'Островский район'),
(17, 'pavin_region', 'Павинский район'),
(18, 'parvf_region', 'Парфеньевский район'),
(19, 'ponaz_region', 'Поназыревский район'),
(20, 'pistug_region', 'Пыщугский район'),
(21, 'soligal_region', 'Солигалический район'),
(22, 'susan_region', 'Сусанинский район'),
(23, 'sudisl_region', 'Судиславский район'),
(24, 'chuhl_region', 'Чухломский район'),
(25, 'shar_region', 'Шарьинский район');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
