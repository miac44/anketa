-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.5.45 - MySQL Community Server (GPL)
-- ОС Сервера:                   Win32
-- HeidiSQL Версия:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры для таблица anketa.MZambulatoria
CREATE TABLE IF NOT EXISTS `MZambulatoria` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `count` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_01` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_02` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_03` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_04` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_05` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_06` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_07` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_08` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_09` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_10` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_11` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_12` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_13` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_14` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_15` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_16` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_17` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_18` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_19` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_20` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_21` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_22` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_23` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_24` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_25` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_26` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_27` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_28` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_29` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_30` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_31` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_32` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_33` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_34` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_35` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_36` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_37` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_38` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_39` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_40` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_41` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_42` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_43` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_44` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_45` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_46` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_47` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_48` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_49` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_50` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_51` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_52` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_53` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_54` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_55` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_56` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_57` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_58` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_59` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_60` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_61` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_62` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_63` int(11) NOT NULL DEFAULT '0',
  `mzambulatoria_64` int(11) NOT NULL DEFAULT '0',
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Экспортируемые данные не выделены.


-- Дамп структуры для таблица anketa.MZstacionar
CREATE TABLE IF NOT EXISTS `MZstacionar` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `count` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_01` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_02` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_03` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_04` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_05` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_06` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_07` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_08` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_09` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_10` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_11` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_12` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_13` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_14` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_15` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_16` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_17` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_18` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_19` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_20` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_21` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_22` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_23` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_24` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_25` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_26` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_27` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_28` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_29` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_30` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_31` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_32` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_33` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_34` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_35` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_36` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_37` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_38` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_39` int(11) NOT NULL DEFAULT '0',
  `mzstacionar_40` int(11) NOT NULL DEFAULT '0',
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Экспортируемые данные не выделены.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
