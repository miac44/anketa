-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Мар 07 2016 г., 15:29
-- Версия сервера: 5.5.47-0ubuntu0.14.04.1
-- Версия PHP: 5.6.18-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `anketa`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ambulances`
--

CREATE TABLE IF NOT EXISTS `ambulances` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `region_id` bigint(20) NOT NULL,
  `ident` varchar(50) NOT NULL,
  `name` varchar(250) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Дамп данных таблицы `ambulances`
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
-- Структура таблицы `ankets`
--

CREATE TABLE IF NOT EXISTS `ankets` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `action` varchar(255) NOT NULL,
  UNIQUE KEY `anketa_id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `ankets`
--

INSERT INTO `ankets` (`id`, `title`, `text`, `action`) VALUES
(1, 'Первая анкета', 'Описание первой анкеты', 'first'),
(2, 'Вторая анкета', 'Описание второй анкеты', 'second');

-- --------------------------------------------------------

--
-- Структура таблицы `regions`
--

CREATE TABLE IF NOT EXISTS `regions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ident` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Дамп данных таблицы `regions`
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
