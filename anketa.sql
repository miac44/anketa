-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 08, 2016 at 06:45 PM
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
-- Table structure for table `anketa_ambulatoria`
--

DROP TABLE IF EXISTS `anketa_ambulatoria`;
CREATE TABLE IF NOT EXISTS `anketa_ambulatoria` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(30) NOT NULL,
  `region` varchar(100) NOT NULL,
  `ambulance` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `year` varchar(10) NOT NULL,
  `row35` varchar(512) NOT NULL DEFAULT '',
  `row36` varchar(512) NOT NULL DEFAULT '',
  `row37` varchar(512) NOT NULL DEFAULT '',
  `row38` varchar(512) NOT NULL DEFAULT '',
  `row39` varchar(512) NOT NULL DEFAULT '',
  `row40` varchar(512) NOT NULL DEFAULT '',
  `row41` varchar(512) NOT NULL DEFAULT '',
  `row42` varchar(512) NOT NULL DEFAULT '',
  `row43` varchar(512) NOT NULL DEFAULT '',
  `row44` varchar(512) NOT NULL DEFAULT '',
  `row45` varchar(512) NOT NULL DEFAULT '',
  `row46` varchar(512) NOT NULL DEFAULT '',
  `row47` varchar(512) NOT NULL DEFAULT '',
  `row48` varchar(512) NOT NULL DEFAULT '',
  `row49` varchar(512) NOT NULL DEFAULT '',
  `row50` varchar(512) NOT NULL DEFAULT '',
  `row51` varchar(512) NOT NULL DEFAULT '',
  `row52` varchar(512) NOT NULL DEFAULT '',
  `row53` varchar(512) NOT NULL DEFAULT '',
  `row54` varchar(512) NOT NULL DEFAULT '',
  `row55` varchar(512) NOT NULL DEFAULT '',
  `row56` varchar(512) NOT NULL DEFAULT '',
  `row57` varchar(512) NOT NULL DEFAULT '',
  `row58` varchar(512) NOT NULL DEFAULT '',
  `row59` varchar(512) NOT NULL DEFAULT '',
  `row60` varchar(512) NOT NULL DEFAULT '',
  `row61` varchar(512) NOT NULL DEFAULT '',
  `row62` varchar(512) NOT NULL DEFAULT '',
  `row63` varchar(512) NOT NULL DEFAULT '',
  `row64` varchar(512) NOT NULL DEFAULT '',
  `row65` varchar(512) NOT NULL DEFAULT '',
  `row66` varchar(512) NOT NULL DEFAULT '',
  `row67` varchar(512) NOT NULL DEFAULT '',
  `row68` varchar(512) NOT NULL DEFAULT '',
  `row69` varchar(100) NOT NULL,
  `row70` varchar(100) NOT NULL,
  `row71` varchar(100) NOT NULL,
  `row72` varchar(100) NOT NULL,
  `row73` varchar(100) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `anketa_ambulatoria`
--

INSERT INTO `anketa_ambulatoria` (`id`, `ip`, `region`, `ambulance`, `month`, `year`, `row35`, `row36`, `row37`, `row38`, `row39`, `row40`, `row41`, `row42`, `row43`, `row44`, `row45`, `row46`, `row47`, `row48`, `row49`, `row50`, `row51`, `row52`, `row53`, `row54`, `row55`, `row56`, `row57`, `row58`, `row59`, `row60`, `row61`, `row62`, `row63`, `row64`, `row65`, `row66`, `row67`, `row68`, `row69`, `row70`, `row71`, `row72`, `row73`) VALUES
(1, '127.0.0.1', 'Волгореченский район', 'Волгореченская ГБ', 'Январь', '2016', 'к врачу-терапевту участковому', 'Да', 'Да', '', 'на прием', '8 часов', '', '', '', '', 'Нет', '', 'не было талонов', 'Нет', 'Нет', '', 'Да', 'Нет', 'Да', '', 'Да', 'I группа', 'Нет', 'отсутствие выделенного места стоянки автотранспортных средств для инвалидов, отсутствие пандусов, по', 'не назначалось', 'Да', 'не назначалось', 'Да', 'Да', 'Да', 'за счет ДМС', 'Нет', 'раз в квартал', 'раз в квартал', 'Да', 'положительный', 'Нет', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `anketa_stacionar`
--

DROP TABLE IF EXISTS `anketa_stacionar`;
CREATE TABLE IF NOT EXISTS `anketa_stacionar` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(30) NOT NULL,
  `region` varchar(100) NOT NULL,
  `ambulance` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `year` varchar(10) NOT NULL,
  `row1` varchar(512) NOT NULL DEFAULT '',
  `row2` varchar(512) NOT NULL DEFAULT '',
  `row3` varchar(512) NOT NULL DEFAULT '',
  `row4` varchar(512) NOT NULL DEFAULT '',
  `row5` varchar(512) NOT NULL DEFAULT '',
  `row6` varchar(512) NOT NULL DEFAULT '',
  `row7` varchar(512) NOT NULL DEFAULT '',
  `row8` varchar(512) NOT NULL DEFAULT '',
  `row9` varchar(512) NOT NULL DEFAULT '',
  `row10` varchar(512) NOT NULL DEFAULT '',
  `row11` varchar(512) NOT NULL DEFAULT '',
  `row12` varchar(512) NOT NULL DEFAULT '',
  `row13` varchar(512) NOT NULL DEFAULT '',
  `row14` varchar(512) NOT NULL DEFAULT '',
  `row15` varchar(512) NOT NULL DEFAULT '',
  `row16` varchar(512) NOT NULL DEFAULT '',
  `row17` varchar(512) NOT NULL DEFAULT '',
  `row18` varchar(512) NOT NULL DEFAULT '',
  `row19` varchar(512) NOT NULL DEFAULT '',
  `row20` varchar(512) NOT NULL DEFAULT '',
  `row21` varchar(512) NOT NULL DEFAULT '',
  `row22` varchar(512) NOT NULL DEFAULT '',
  `row23` varchar(512) NOT NULL DEFAULT '',
  `row24` varchar(512) NOT NULL DEFAULT '',
  `row25` varchar(512) NOT NULL DEFAULT '',
  `row26` varchar(512) NOT NULL DEFAULT '',
  `row27` varchar(512) NOT NULL DEFAULT '',
  `row28` varchar(512) NOT NULL DEFAULT '',
  `row29` varchar(512) NOT NULL DEFAULT '',
  `row30` varchar(512) NOT NULL DEFAULT '',
  `row31` varchar(512) NOT NULL DEFAULT '',
  `row32` varchar(512) NOT NULL DEFAULT '',
  `row33` varchar(512) NOT NULL DEFAULT '',
  `row34` varchar(512) NOT NULL DEFAULT '',
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `anketa_stacionar`
--

INSERT INTO `anketa_stacionar` (`id`, `ip`, `region`, `ambulance`, `month`, `year`, `row1`, `row2`, `row3`, `row4`, `row5`, `row6`, `row7`, `row8`, `row9`, `row10`, `row11`, `row12`, `row13`, `row14`, `row15`, `row16`, `row17`, `row18`, `row19`, `row20`, `row21`, `row22`, `row23`, `row24`, `row25`, `row26`, `row27`, `row28`, `row29`, `row30`, `row31`, `row32`, `row33`, `row34`) VALUES
(1, '127.0.0.1', 'Буйский район', 'Буйская ГБ', 'Январь', '2016', 'плановая', '', '', 'Нет', 'отсутствие свободных мест ожидания, состояние гардероба', '', '', 'за счет ОМС, бюджет', 'Нет', '', '', '', 'Нет', '', 'Нет', '', 'дневного стационара', '', '', '', '', '', 'Да', '', 'Да', '', 'Да', 'Да', 'Нет', 'Нет', '', 'Нет', '', ''),
(2, '127.0.0.1', 'Буйский район', 'Буйская ГБ', 'Январь', '2016', 'плановая', '', '', 'Нет', 'отсутствие свободных мест ожидания, состояние гардероба', '', '', 'за счет ОМС, бюджет', 'Нет', '', '', '', 'Нет', '', 'Нет', '', 'дневного стационара', '', '', '', '', '', 'Да', '', 'Да', '', 'Да', 'Да', 'Нет', 'Нет', '', 'Нет', '', ''),
(3, '127.0.0.1', 'Буйский район', 'Буйская ГБ', 'Январь', '2016', 'плановая', '', '', 'Нет', 'отсутствие свободных мест ожидания, состояние гардероба', '', '', 'за счет ОМС, бюджет', 'Нет', '', '', '', 'Нет', '', 'Нет', '', 'дневного стационара', '', '', '', '', '', 'Да', '', 'Да', '', 'Да', 'Да', 'Нет', 'Нет', '', 'Нет', '', ''),
(4, '127.0.0.1', 'Буйский район', 'Буйская ГБ', 'Январь', '2016', 'плановая', '', '', 'Нет', 'отсутствие свободных мест ожидания, состояние гардероба', '', '', 'за счет ОМС, бюджет', 'Нет', '', '', '', 'Нет', '', 'Нет', '', 'дневного стационара', '', '', '', '', '', 'Да', '', 'Да', '', 'Да', 'Да', 'Нет', 'Нет', '', 'Нет', '', ''),
(5, '127.0.0.1', 'Буйский район', 'Буйская ГБ', 'Январь', '2016', 'плановая', '', '', 'Нет', 'отсутствие свободных мест ожидания, состояние гардероба', '', '', 'за счет ОМС, бюджет', 'Нет', '', '', '', 'Нет', '', 'Нет', '', 'дневного стационара', '', '', '', '', '', 'Да', '', 'Да', '', 'Да', 'Да', 'Нет', 'Нет', '', 'Нет', '', '');

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
(1, 'АНКЕТА\r\nдля оценки качества оказания услуг медицинскими организациями\r\nв стационарных условиях', 'АНКЕТА\r\nдля оценки качества оказания услуг медицинскими организациями\r\nв стационарных условиях', 'stacionar'),
(2, 'АНКЕТА\r\nдля оценки качества оказания услуг медицинскими организациями\r\nв амбулаторных условиях', 'АНКЕТА\r\nдля оценки качества оказания услуг медицинскими организациями\r\nв амбулаторных условиях', 'ambulatoria');

-- --------------------------------------------------------

--
-- Table structure for table `elements`
--

DROP TABLE IF EXISTS `elements`;
CREATE TABLE IF NOT EXISTS `elements` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `anketa_id` bigint(20) NOT NULL DEFAULT '2',
  `type` varchar(50) NOT NULL DEFAULT 'radio',
  `title` varchar(1024) NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `ident` varchar(100) DEFAULT NULL COMMENT 'Группа блоков для сворачивания разворачивания',
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `elements`
--

INSERT INTO `elements` (`id`, `anketa_id`, `type`, `title`, `required`, `ident`) VALUES
(1, 1, 'radio', '1. Госпитализация была:', 1, NULL),
(2, 1, 'radio', 'Срок ожидания плановой госпитализации с момента получения направления на плановую госпитализацию?', 0, 'group_1'),
(3, 1, 'radio', 'Вы были госпитализированы в назначенный срок?', 0, 'group_1'),
(4, 1, 'radio', 'Вы удовлетворены условиями пребывания в приемном отделении?', 0, 'group_1'),
(5, 1, 'checkbox', 'Что не удовлетворяет?', 0, 'group_4'),
(6, 1, 'radio', 'Сколько времени Вы ожидали в приемном отделении?', 0, 'group_1'),
(7, 1, 'radio', 'Вы удовлетворены отношением персонала во время пребывания в приемном отделении (доброжелательность, вежливость)?', 0, 'group_1'),
(8, 1, 'radio', '2. Вы были госпитализированы?', 1, NULL),
(9, 1, 'radio', '3. Имеете ли Вы установленную группу ограничения трудоспособности?', 1, NULL),
(10, 1, 'radio', 'Какую группу ограничения трудоспособности Вы имеете?', 0, 'group_9'),
(11, 1, 'radio', 'Медицинская организация оборудована для лиц с ограниченными возможностями?', 0, 'group_9'),
(12, 1, 'checkbox', 'Пожалуйста, укажите что именно отсутствует', 0, 'group_11'),
(13, 1, 'radio', '4. Перед госпитализаций Вы заходили на официальный сайт медицинской организации?', 1, NULL),
(14, 1, 'radio', 'Удовлетворены ли Вы качеством и полнотой информации о работе медицинской организации и порядке предоставления медицинских услуг, доступной на официальном сайте медицинской организации?', 0, 'group_13'),
(15, 1, 'radio', '5. При обращении в медицинскую организацию Вы обращались к информации, размещенной в помещениях медицинской организации (стенды, инфоматы и др.)?', 1, NULL),
(16, 1, 'radio', 'Удовлетворены ли Вы качеством и полнотой информации о работе медицинской организации и порядке предоставления медицинских услуг, доступной в помещениях медицинской организации?', 0, 'group_15'),
(17, 1, 'radio', '6. В каком режиме стационара Вы проходили лечение?', 1, NULL),
(18, 1, 'radio', 'Удовлетворены ли Вы питанием во время пребывания в медицинской организации?', 0, 'group_17'),
(19, 1, 'radio', 'Вы удовлетворены отношением персонала во время пребывания в отделении (доброжелательность, вежливость)?', 0, 'group_17'),
(20, 1, 'radio', 'Возникала ли у Вас во время пребывания в стационаре необходимость оплачивать назначенные лекарственные средства за свой счет?', 0, 'group_17'),
(21, 1, 'radio', 'Возникала ли у Вас во время пребывания в стационаре необходимость оплачивать назначенные диагностические исследования за свой счет?', 0, 'group_17'),
(22, 1, 'radio', 'Необходимость:', 0, 'group_21'),
(23, 1, 'radio', '7. Удовлетворены ли Вы компетентностью медицинских работников медицинской организации?', 1, NULL),
(24, 1, 'radio', 'Что именно Вас не удовлетворило?', 0, 'group_23'),
(25, 1, 'radio', '8. Удовлетворены ли Вы условиями пребывания в медицинской организации?', 1, NULL),
(26, 1, 'radio', 'Что не удовлетворяет?', 0, 'group_25'),
(27, 1, 'radio', '9. Удовлетворены ли Вы оказанными услугами в этой медицинской организации?', 1, NULL),
(28, 1, 'radio', '10. Удовлетворены ли Вы действиями персонала медицинской организации по уходу?', 1, NULL),
(29, 1, 'radio', '11. Рекомендовали бы Вы данную медицинскую организацию для получения медицинской помощи?', 1, NULL),
(30, 1, 'radio', '12. Оставляли ли Вы комментарий о качестве обслуживания в медицинской организации и о медицинских работниках этой организации в социальных сетях?', 1, NULL),
(31, 1, 'radio', 'Характеристика комментария', 0, 'group_30'),
(32, 1, 'radio', '13. Вы благодарили персонал медицинской организации за оказанные Вам медицинские услуги?', 1, NULL),
(33, 1, 'radio', 'Кто был инициатором благодарения?', 0, 'group_32'),
(34, 1, 'radio', 'Форма благодарения', 0, 'group_32'),
(35, 2, 'radio', '1. Вы обратились в медицинскую организацию?', 1, NULL),
(36, 2, 'radio', '2. Вы удовлетворены обслуживанием (доброжелательность, вежливость) у участкового терапевта (педиатра, врача общей практики (семейного врача)?', 0, 'group_35_1'),
(37, 2, 'radio', '3. Удовлетворены ли Вы компетентностью участкового терапевта (педиатра, врача общей практики (семейного врача)?', 0, 'group_35_1'),
(38, 2, 'radio', 'Что именно Вас не удовлетворило?', 0, 'group_37'),
(39, 2, 'radio', '4. Форма обращения', 0, 'group_35_1'),
(40, 2, 'radio', '5. Время ожидания приема у врача, к которому Вы записались, с момента записи на прием?', 0, 'group_35_1'),
(41, 2, 'radio', '2. Вы удовлетворены обслуживанием (доброжелательность, вежливость) у врачей- специалистов (лор, хирург, невролог, офтальмолог, стоматолог, другие)?', 0, 'group_35_2'),
(42, 2, 'radio', '3. Удовлетворены ли Вы компетентностью врачей-специалистов (лор, хирург, невролог, офтальмолог, стоматолог, другие)?', 0, 'group_35_2'),
(43, 2, 'radio', 'Что именно Вас не удовлетворило?', 0, 'group_42'),
(44, 2, 'radio', '5. Срок ожидания приема у врача, к которому Вы записались, с момента записи на прием?', 0, 'group_35_2'),
(45, 2, 'radio', '6. При первом обращении в медицинскую\nорганизацию Вы сразу записались на прием к врачу (получили талон с указанием времени приема и ФИО врача)?', 1, NULL),
(46, 2, 'radio', 'Вы записались на прием к врачу (вызвали врача на дом)?', 0, 'group_45_1'),
(47, 2, 'radio', 'По какой причине', 0, 'group_45_2'),
(48, 2, 'radio', '7. Врач Вас принял во время, установленное по записи?', 1, NULL),
(49, 2, 'radio', '8. При обращении в медицинскую организацию Вы обращались к информации, размещенной в помещениях медицинской организации (стенды, инфоматы и др.)?', 1, NULL),
(50, 2, 'radio', 'Удовлетворены ли Вы качеством и полнотой информации о работе медицинской организации и порядке предоставления медицинских услуг, доступной в помещениях медицинской организации?', 0, 'group_49'),
(51, 2, 'radio', '9. Перед обращением в медицинскую\r\nорганизацию Вы заходили на официальный\r\nсайт медицинской организации?', 1, NULL),
(52, 2, 'radio', 'Удовлетворены ли Вы качеством и полнотой информации о работе медицинской организации и порядке предоставления медицинских услуг, доступной на официальном сайте медицинской организации?', 0, 'group_51'),
(53, 2, 'radio', '10. Вы удовлетворены условиями пребывания в медицинской организации?', 1, NULL),
(54, 2, 'checkbox', 'Что не удовлетворяет?', 0, 'group_53'),
(55, 2, 'radio', '11. Имеете ли Вы установленную группу ограничения трудоспособности?', 1, NULL),
(56, 2, 'radio', 'Какую группу ограничения трудоспособности Вы имеете?', 0, 'group_55'),
(57, 2, 'radio', 'Медицинская организация оборудована для лиц с ограниченными возможностями?', 0, 'group_55'),
(58, 2, 'checkbox', 'Пожалуйста, укажите что именно отсутствует', 0, 'group_57'),
(59, 2, 'radio', '12. Вы ожидали проведения диагностического исследования (инструментального, лабораторного) с момента получения направления на диагностическое исследование?', 1, NULL),
(60, 2, 'radio', 'Диагностическое исследование выполнено во время, установленное по записи?', 0, NULL),
(61, 2, 'radio', '13. Вы ожидали проведения диагностического исследования (компьютерная томография, магнитно-резонансная томография, ангиография) с момента получения направления на диагностическое исследование?', 1, NULL),
(62, 2, 'radio', 'Диагностическое исследование выполнено во время, установленное по записи?', 0, NULL),
(63, 2, 'radio', '14. Вы удовлетворены оказанными услугами в этой медицинской организации?', 1, NULL),
(64, 2, 'radio', '15. Рекомендовали бы Вы данную медицинскую организацию для получения медицинской помощи?', 1, NULL),
(65, 2, 'radio', '16. Ваше обслуживание в медицинской организации?', 1, NULL),
(66, 2, 'radio', '17. Вы знаете своего участкового терапевта (педиатра, врача общей практики (семейного врача) (ФИО, график работы, № кабинета и др.)?', 1, NULL),
(67, 2, 'radio', '18. Как часто Вы обращаетесь к участковому терапевту (педиатру, врачу общей практики (семейному врачу)?', 1, NULL),
(68, 2, 'radio', '19. Как часто Вы обращаетесь к врачам- специалистам (лор, хирург, невролог, офтальмолог, стоматолог, другие)?', 1, NULL),
(69, 2, 'radio', '20. Оставляли ли Вы комментарий о качестве обслуживания в медицинской организации и о медицинских работниках этой организации в социальных сетях?', 1, NULL),
(70, 2, 'radio', 'Характеристика комментария', 0, 'group_69'),
(71, 2, 'radio', '21. Вы благодарили персонал медицинской организации за оказанные Вам медицинские услуги?', 1, NULL),
(72, 2, 'radio', 'Кто был инициатором благодарения?', 0, 'group_71'),
(73, 2, 'radio', 'Форма благодарения', 0, 'group_71');

-- --------------------------------------------------------

--
-- Table structure for table `meanings`
--

DROP TABLE IF EXISTS `meanings`;
CREATE TABLE IF NOT EXISTS `meanings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `element_id` bigint(20) NOT NULL,
  `title` varchar(1024) NOT NULL,
  `default` tinyint(1) DEFAULT NULL,
  `show_element_ident` varchar(100) DEFAULT NULL,
  `hide_element_ident` varchar(100) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=231 ;

--
-- Dumping data for table `meanings`
--

INSERT INTO `meanings` (`id`, `element_id`, `title`, `default`, `show_element_ident`, `hide_element_ident`) VALUES
(1, 1, 'плановая', NULL, 'group_1', NULL),
(2, 1, 'экстренная', NULL, NULL, 'group_1'),
(5, 2, '30 календарных дней и более\r\n', NULL, NULL, NULL),
(6, 2, '29 календарных дней\r\n', NULL, NULL, NULL),
(7, 2, '28 календарных дней\r\n', NULL, NULL, NULL),
(8, 2, '27 календарных дней\r\n', NULL, NULL, NULL),
(9, 2, '15 календарных дней\r\n', NULL, NULL, NULL),
(10, 2, 'меньше 15 календарных дней', NULL, NULL, NULL),
(11, 3, 'Да', NULL, NULL, NULL),
(12, 3, 'Нет', NULL, NULL, NULL),
(13, 4, 'Да', NULL, NULL, 'group_4'),
(14, 4, 'Нет', NULL, 'group_4', NULL),
(15, 5, 'отсутствие свободных мест ожидания', NULL, NULL, NULL),
(16, 5, 'состояние гардероба', NULL, NULL, NULL),
(17, 5, 'состояние туалета', NULL, NULL, NULL),
(18, 5, 'отсутствие питьевой воды', NULL, NULL, NULL),
(19, 5, 'санитарные условия', NULL, NULL, NULL),
(20, 6, '90 мин и более', NULL, NULL, NULL),
(21, 6, 'до 90 мин', NULL, NULL, NULL),
(22, 6, 'до 60 мин', NULL, NULL, NULL),
(23, 6, 'до 45 мин', NULL, NULL, NULL),
(24, 6, 'до 30 мин', NULL, NULL, NULL),
(25, 7, 'Да', NULL, NULL, NULL),
(26, 7, 'Нет', NULL, NULL, NULL),
(27, 8, 'за счет ОМС, бюджет', NULL, NULL, NULL),
(28, 8, 'за счет ДМС', NULL, NULL, NULL),
(29, 8, 'на платной основе', NULL, NULL, NULL),
(30, 9, 'Да', NULL, 'group_9', NULL),
(31, 9, 'Нет', NULL, NULL, 'group_9'),
(32, 10, 'I группа', NULL, NULL, NULL),
(33, 10, 'II группа', NULL, NULL, NULL),
(34, 10, 'III группа', NULL, NULL, NULL),
(35, 10, 'ребенок-инвалид', NULL, NULL, NULL),
(36, 11, 'Да', NULL, NULL, 'group_11'),
(37, 11, 'Нет', NULL, 'group_11', NULL),
(38, 12, 'отсутствие выделенного места стоянки автотранспортных средств для инвалидов', NULL, NULL, NULL),
(39, 12, 'отсутствие пандусов, поручней', NULL, NULL, NULL),
(40, 12, 'отсутствие подъемных платформ (аппарелей)', NULL, NULL, NULL),
(41, 12, 'отсутствие адаптированных лифтов', NULL, NULL, NULL),
(42, 12, 'отсутствие сменных кресел-колясок', NULL, NULL, NULL),
(43, 12, 'отсутствие информационных бегущих строк, информационных стендов, голосовых сигналов', NULL, NULL, NULL),
(44, 12, 'отсутствие информации шрифтом Брайля', NULL, NULL, NULL),
(45, 12, 'отсутствие доступных санитарно-гигиенических помещений', NULL, NULL, NULL),
(46, 12, 'отсутствие сопровождающих работников', NULL, NULL, NULL),
(47, 13, 'Да', NULL, 'group_13', NULL),
(48, 13, 'Нет', NULL, NULL, 'group_13'),
(49, 14, 'Да', NULL, NULL, NULL),
(50, 14, 'Нет', NULL, NULL, NULL),
(51, 15, 'Да', NULL, 'group_15', NULL),
(52, 15, 'Нет', NULL, NULL, 'group_15'),
(53, 16, 'Да', NULL, NULL, NULL),
(54, 16, 'Нет', NULL, NULL, NULL),
(55, 17, 'дневного стационара', NULL, NULL, 'group_17'),
(56, 17, 'круглосуточного пребывания', NULL, 'group_17', NULL),
(57, 18, 'Да', NULL, NULL, NULL),
(58, 18, 'Нет', NULL, NULL, NULL),
(59, 19, 'Да', NULL, NULL, NULL),
(60, 19, 'Нет', NULL, NULL, NULL),
(61, 20, 'Да', NULL, NULL, NULL),
(62, 20, 'Нет', NULL, NULL, NULL),
(63, 21, 'Да', NULL, 'group_21', NULL),
(64, 21, 'Нет', NULL, NULL, 'group_21'),
(65, 22, 'для уточнения диагноза', NULL, NULL, NULL),
(66, 22, 'с целью сокращения срока лечения', NULL, NULL, NULL),
(67, 22, 'приобретение расходных материалов', NULL, NULL, NULL),
(68, 23, 'Да', NULL, NULL, 'group_23'),
(69, 23, 'Нет', NULL, 'group_23', NULL),
(70, 24, 'Вам не разъяснили информацию о состоянии здоровья', NULL, NULL, NULL),
(71, 24, 'Вам не дали рекомендации по диагностике, лечению и реабилитации', NULL, NULL, NULL),
(72, 24, 'Вам не дали выписку', NULL, NULL, NULL),
(73, 24, 'другое', NULL, NULL, NULL),
(74, 25, 'Да', NULL, NULL, 'group_25'),
(75, 25, 'Нет', NULL, 'group_25', NULL),
(76, 26, 'уборка помещений', NULL, NULL, NULL),
(77, 26, 'освещение, температурный режим', NULL, NULL, NULL),
(78, 26, 'медицинской организации требуется ремонт', NULL, NULL, NULL),
(79, 26, 'в медицинской организации старая мебель', NULL, NULL, NULL),
(80, 27, 'Да', NULL, NULL, NULL),
(81, 27, 'Нет', NULL, NULL, NULL),
(82, 28, 'Да', NULL, NULL, NULL),
(83, 28, 'Нет', NULL, NULL, NULL),
(84, 29, 'Да', NULL, NULL, NULL),
(85, 29, 'Нет', NULL, NULL, NULL),
(86, 30, 'Да', NULL, 'group_30', NULL),
(87, 30, 'Нет', NULL, NULL, 'group_30'),
(88, 31, 'положительный', NULL, NULL, NULL),
(89, 31, 'отрицательный', NULL, NULL, NULL),
(90, 32, 'Да', NULL, 'group_32', NULL),
(91, 32, 'Нет', NULL, NULL, 'group_32'),
(92, 33, 'я сам (а)', NULL, NULL, NULL),
(93, 33, 'персонал медицинской организации', NULL, NULL, NULL),
(94, 34, 'письменная благодарность', NULL, NULL, NULL),
(95, 34, 'цветы', NULL, NULL, NULL),
(96, 34, 'подарки', NULL, NULL, NULL),
(97, 34, 'услуги', NULL, NULL, NULL),
(98, 34, 'деньги', NULL, NULL, NULL),
(99, 35, 'к врачу-терапевту участковому', NULL, 'group_35_1', 'group_35_2'),
(100, 35, 'к врачу-педиатру участковому', NULL, 'group_35_1', 'group_35_2'),
(101, 35, 'к врачу общей практики (семейному врачу)', NULL, 'group_35_1', 'group_35_2'),
(102, 35, 'к врачу-специалисту (лор, хирург, невролог, офтальмолог, стоматолог, другие)', NULL, 'group_35_2', 'group_35_1'),
(103, 35, 'другое (диспансеризация, профосмотр, справка, рецепт и т.д.)', NULL, 'group_35_2', 'group_35_1'),
(104, 36, 'Да', NULL, NULL, NULL),
(105, 36, 'Нет', NULL, NULL, NULL),
(106, 37, 'Да', NULL, NULL, 'group_37'),
(107, 37, 'Нет', NULL, 'group_37', NULL),
(108, 38, 'Вам не разъяснили информацию о состоянии\r\nздоровья', NULL, NULL, NULL),
(109, 38, 'Вам не дали рекомендации по диагностике,\r\nлечению и реабилитации', NULL, NULL, NULL),
(110, 38, 'Вам не дали выписку', NULL, NULL, NULL),
(111, 38, 'Вам не выписали рецепт', NULL, NULL, NULL),
(112, 38, 'Другое', NULL, NULL, NULL),
(113, 39, 'на прием', NULL, NULL, NULL),
(114, 39, 'вызов на дом', NULL, NULL, NULL),
(115, 40, '24 часа и более', NULL, NULL, NULL),
(116, 40, '12 часов', NULL, NULL, NULL),
(117, 40, '8 часов', NULL, NULL, NULL),
(118, 40, '6 часов', NULL, NULL, NULL),
(119, 40, '3 часа', NULL, NULL, NULL),
(120, 40, 'менее 1 часа', NULL, NULL, NULL),
(121, 41, 'Да', NULL, NULL, NULL),
(122, 41, 'Нет', NULL, NULL, NULL),
(123, 42, 'Да', NULL, NULL, 'group_42'),
(124, 42, 'Нет', NULL, 'group_42', NULL),
(125, 43, 'Вам не разъяснили информацию о состоянии\r\nздоровья', NULL, NULL, NULL),
(126, 43, 'Вам не дали рекомендации по диагностике,\r\nлечению и реабилитации', NULL, NULL, NULL),
(127, 43, 'Вам не дали выписку', NULL, NULL, NULL),
(128, 43, 'Вам не выписали рецепт', NULL, NULL, NULL),
(129, 43, 'Другое', NULL, NULL, NULL),
(130, 44, '14 календарных дней и более', NULL, NULL, NULL),
(131, 44, '13 календарных дней', NULL, NULL, NULL),
(132, 44, '12 календарных дней', NULL, NULL, NULL),
(133, 44, '10 календарных дней', NULL, NULL, NULL),
(134, 44, '7 календарных дней', NULL, NULL, NULL),
(135, 44, 'менее 7 календарных дней', NULL, NULL, NULL),
(136, 45, 'Да', NULL, 'group_45_1', 'group_45_2'),
(137, 45, 'Нет', NULL, 'group_45_2', 'group_45_1'),
(138, 46, 'по телефону', NULL, NULL, NULL),
(139, 46, 'с использованием сети Интернет', NULL, NULL, NULL),
(140, 46, 'в регистратуре лично', NULL, NULL, NULL),
(141, 46, 'лечащим врачом на приеме при посещении', NULL, NULL, NULL),
(142, 47, 'не дозвонился', NULL, NULL, NULL),
(143, 47, 'не было талонов', NULL, NULL, NULL),
(144, 47, 'не было технической возможности записаться\r\nв электронном виде', NULL, NULL, NULL),
(145, 47, 'другое\r\n', NULL, NULL, NULL),
(146, 48, 'Да', NULL, NULL, NULL),
(147, 48, 'Нет', NULL, NULL, NULL),
(148, 49, 'Да', NULL, 'group_49', NULL),
(149, 49, 'Нет', NULL, NULL, 'group_49'),
(150, 50, 'Да', NULL, NULL, NULL),
(151, 50, 'Нет', NULL, NULL, NULL),
(152, 51, 'Да', NULL, 'group_51', NULL),
(153, 51, 'Нет', NULL, NULL, 'group_51'),
(154, 52, 'Да', NULL, NULL, NULL),
(155, 52, 'Нет', NULL, NULL, NULL),
(156, 53, 'Да', NULL, NULL, 'group_53'),
(157, 53, 'Нет', NULL, 'group_53', NULL),
(158, 54, 'отсутствие свободных мест ожидания', NULL, NULL, NULL),
(159, 54, 'состояние гардероба', NULL, NULL, NULL),
(160, 54, 'состояние туалета', NULL, NULL, NULL),
(161, 54, 'отсутствие питьевой воды', NULL, NULL, NULL),
(162, 54, 'санитарные условия', NULL, NULL, NULL),
(163, 54, 'отсутствие мест для детских колясок', NULL, NULL, NULL),
(164, 55, 'Да', NULL, 'group_55', NULL),
(165, 55, 'Нет', NULL, NULL, 'group_55'),
(166, 56, 'I группа', NULL, NULL, NULL),
(167, 56, 'II группа', NULL, NULL, NULL),
(168, 56, 'III группа', NULL, NULL, NULL),
(169, 56, 'ребенок-инвалид', NULL, NULL, NULL),
(170, 57, 'Да', NULL, NULL, 'group_57'),
(171, 57, 'Нет', NULL, 'group_57', NULL),
(172, 58, 'отсутствие выделенного места стоянки автотранспортных средств для инвалидов', NULL, NULL, NULL),
(173, 58, 'отсутствие пандусов, поручней', NULL, NULL, NULL),
(174, 58, 'отсутствие подъемных платформ (аппарелей)', NULL, NULL, NULL),
(175, 58, 'отсутствие адаптированных лифтов', NULL, NULL, NULL),
(176, 58, 'отсутствие сменных кресел-колясок', NULL, NULL, NULL),
(177, 58, 'отсутствие информационных бегущих строк,информационных стендов, голосовых сигналов', NULL, NULL, NULL),
(178, 58, 'отсутствие информации шрифтом Брайля', NULL, NULL, NULL),
(179, 58, 'отсутствие доступных санитарно-\r\nгигиенических помещений', NULL, NULL, NULL),
(180, 58, 'отсутствие сопровождающих работников', NULL, NULL, NULL),
(181, 59, 'не назначалось', NULL, NULL, NULL),
(182, 59, '14 календарных дней и более', NULL, NULL, NULL),
(183, 59, '13 календарных дней', NULL, NULL, NULL),
(184, 59, '12 календарных дней', NULL, NULL, NULL),
(185, 59, '10 календарных дней', NULL, NULL, NULL),
(186, 59, '7 календарных дней', NULL, NULL, NULL),
(187, 59, 'менее 7 календарных дней', NULL, NULL, NULL),
(188, 60, 'Да', NULL, NULL, NULL),
(189, 60, 'Нет', NULL, NULL, NULL),
(190, 61, 'не назначалось', NULL, NULL, NULL),
(191, 61, '30 календарных дней и более', NULL, NULL, NULL),
(192, 61, '29 календарных дней', NULL, NULL, NULL),
(193, 61, '28 календарных дней', NULL, NULL, NULL),
(194, 61, '27 календарных дней', NULL, NULL, NULL),
(195, 61, '15 календарных дней', NULL, NULL, NULL),
(196, 61, 'менее 15 календарных дней', NULL, NULL, NULL),
(197, 62, 'Да', NULL, NULL, NULL),
(198, 62, 'Нет', NULL, NULL, NULL),
(199, 63, 'Да', NULL, NULL, NULL),
(200, 63, 'Нет', NULL, NULL, NULL),
(201, 64, 'Да', NULL, NULL, NULL),
(202, 64, 'Нет', NULL, NULL, NULL),
(203, 65, 'за счет ОМС, бюджет', NULL, NULL, NULL),
(204, 65, 'за счет ДМС', NULL, NULL, NULL),
(205, 65, 'на платной основе', NULL, NULL, NULL),
(206, 66, 'Да', NULL, NULL, NULL),
(207, 66, 'Нет', NULL, NULL, NULL),
(208, 67, 'раз в месяц', NULL, NULL, NULL),
(209, 67, 'раз в квартал', NULL, NULL, NULL),
(210, 67, 'раз в полугодие', NULL, NULL, NULL),
(211, 67, 'раз в год', NULL, NULL, NULL),
(212, 67, 'не обращаюсь', NULL, NULL, NULL),
(213, 68, 'раз в месяц', NULL, NULL, NULL),
(214, 68, 'раз в квартал', NULL, NULL, NULL),
(215, 68, 'раз в полугодие', NULL, NULL, NULL),
(216, 68, 'раз в год', NULL, NULL, NULL),
(217, 68, 'не обращаюсь', NULL, NULL, NULL),
(218, 69, 'Да', NULL, 'group_69', NULL),
(219, 69, 'Нет', NULL, NULL, 'group_69'),
(220, 70, 'положительный', NULL, NULL, NULL),
(221, 70, 'отрицательный', NULL, NULL, NULL),
(222, 71, 'Да', NULL, 'group_71', NULL),
(223, 71, 'Нет', NULL, NULL, 'group_71'),
(224, 72, 'я сам (а)', NULL, NULL, NULL),
(225, 72, 'персонал медицинской организации', NULL, NULL, NULL),
(226, 73, 'письменная благодарность (в журнале, на\r\nсайте)', NULL, NULL, NULL),
(227, 73, 'цветы', NULL, NULL, NULL),
(228, 73, 'подарки', NULL, NULL, NULL),
(229, 73, 'услуги', NULL, NULL, NULL),
(230, 73, 'деньги', NULL, NULL, NULL);

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
