-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- ����: localhost
-- ����� ��������: ��� 07 2016 �., 15:29
-- ������ �������: 5.5.47-0ubuntu0.14.04.1
-- ������ PHP: 5.6.18-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- ���� ������: `anketa`
--

-- --------------------------------------------------------

--
-- ��������� ������� `ambulances`
--

CREATE TABLE IF NOT EXISTS `ambulances` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `region_id` bigint(20) NOT NULL,
  `ident` varchar(50) NOT NULL,
  `name` varchar(250) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- ���� ������ ������� `ambulances`
--

INSERT INTO `ambulances` (`id`, `region_id`, `ident`, `name`) VALUES
(1, 1, 'kos_obl_klin_bol', '����������� ��������� ����������� ��������'),
(2, 1, 'kos_obl_det_bol', '����������� ��������� ������� ��������'),
(3, 1, 'kos_obl_vet_voin', '����������� ��������� ��������� ��� ��������� ����'),
(4, 1, 'kos_onko', '����������� �������������� ���������'),
(5, 1, 'kos_spec_vid_pomosh', '����������� ����� ������������������ ����� ����������� ������'),
(6, 1, 'okr_bol_kos_okr_1', '�������� �������� ������������ ������ �1'),
(7, 1, 'okr_bol_kos_okr_2', '�������� �������� ������������ ������ �2'),
(8, 1, 'gor_bol_kstr', '��������� �������� �. ��������'),
(9, 1, 'gor_pol_vzr_4', '��������� ����������� �������� �4 �. ��������'),
(10, 1, 'kos_obl_stomat', '����������� ��������� ����������������� �����������'),
(11, 1, 'stom_pol_1_kstrm', '����������������� ����������� �1 �. ��������'),
(12, 1, 'roddom', '��������� ��� �. ��������'),
(13, 1, 'centr_ohrn_semyi', '����� ������ �������� ����� � ����������� ����������� �������'),
(14, 1, 'centr_vosst_med', '����� ����������������� �������� � ������������ ��� �����'),
(15, 25, 'shar_kaverin', '���������� �������� �������� ��. �������� �.�.'),
(16, 11, 'mantur_ambulance', '������������ ��'),
(17, 24, 'chuhloma_ambulance', '���������� ���'),
(18, 3, 'buy_ambulance', '������� ��'),
(19, 3, 'gavril_ambulance', '������������ ��'),
(20, 13, 'neya_ambulance', '������� ��'),
(21, 5, 'vlgr_ambulance', '�������������� ��'),
(22, 4, 'galych_ambulance', '��������� ��'),
(23, 12, 'mezha_ambulance', '��������� ��'),
(24, 8, 'kologriv_ambulance', '������������ ��'),
(25, 21, 'solig_ambulance', '�������������� ��'),
(26, 22, 'susan_ambulance', '����������� ��'),
(27, 20, 'pistug_ambulance', '��������� ��'),
(28, 6, 'vohm_ambulance', '��������� ��'),
(29, 23, 'sudisl_ambulance', '������������ ��'),
(30, 10, 'makar_ambulance', '������������ ��'),
(31, 14, 'nereht_ambulance', '���������� ���'),
(32, 16, 'ostrov_ambulance', '���������� ��'),
(33, 17, 'pavin_ambulance', '��������� ��'),
(34, 2, 'antrop_ambulance', '������������ ���'),
(35, 14, 'stomat_nereht', '����������������� ����������� �.�������'),
(36, 15, 'bogov_ambulance', '������������� ��'),
(37, 18, 'parfen_ambulance', '������������� ��'),
(38, 7, 'kadyi_ambulance', '��������� ��'),
(39, 19, 'ponaz_ambulance', '������������� ��'),
(40, 9, 'krasn_ambulance', '�������������� ��');

-- --------------------------------------------------------

--
-- ��������� ������� `ankets`
--

CREATE TABLE IF NOT EXISTS `ankets` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `action` varchar(255) NOT NULL,
  UNIQUE KEY `anketa_id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- ���� ������ ������� `ankets`
--

INSERT INTO `ankets` (`id`, `title`, `text`, `action`) VALUES
(1, '������ ������', '�������� ������ ������', 'first'),
(2, '������ ������', '�������� ������ ������', 'second');

-- --------------------------------------------------------

--
-- ��������� ������� `regions`
--

CREATE TABLE IF NOT EXISTS `regions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ident` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- ���� ������ ������� `regions`
--

INSERT INTO `regions` (`id`, `ident`, `name`) VALUES
(1, 'kstr_region', '����������� �����'),
(2, 'antrop_region', '������������ �����'),
(3, 'buy_region', '������� �����'),
(4, 'galich_region', '��������� �����'),
(5, 'vlgr_region', '�������������� �����'),
(6, 'vohm_region', '��������� �����'),
(7, 'kadyi_region', '��������� �����'),
(8, 'klgrv_region', '������������ �����'),
(9, 'krasn_region', '�������������� �����'),
(10, 'makar_region', '������������ �����'),
(11, 'mantur_region', '������������ �����'),
(12, 'mezha_region', '��������� �����'),
(13, 'neya_region', '������� �����'),
(14, 'nrht_region', '���������� �����'),
(15, 'oktyabr_region', '����������� �����'),
(16, 'osrov_region', '���������� �����'),
(17, 'pavin_region', '��������� �����'),
(18, 'parvf_region', '������������� �����'),
(19, 'ponaz_region', '������������� �����'),
(20, 'pistug_region', '��������� �����'),
(21, 'soligal_region', '�������������� �����'),
(22, 'susan_region', '����������� �����'),
(23, 'sudisl_region', '������������ �����'),
(24, 'chuhl_region', '���������� �����'),
(25, 'shar_region', '���������� �����');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
