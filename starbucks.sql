-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 29 May 2019, 21:43:37
-- Sunucu sürümü: 5.7.24
-- PHP Sürümü: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `starbucks`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `starbucks_kds`
--

DROP TABLE IF EXISTS `starbucks_kds`;
CREATE TABLE IF NOT EXISTS `starbucks_kds` (
  `sube_id` int(11) NOT NULL,
  `ilce` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `gelir_tutari` int(11) NOT NULL,
  `maliyet_tutari` int(11) NOT NULL,
  `calisan_isim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `pass` int(11) NOT NULL,
  PRIMARY KEY (`sube_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPRESSED;

--
-- Tablo döküm verisi `starbucks_kds`
--

INSERT INTO `starbucks_kds` (`sube_id`, `ilce`, `gelir_tutari`, `maliyet_tutari`, `calisan_isim`, `email`, `pass`) VALUES
(0, 'bayrampasa', 270000, 50000, 'Mehmet YILMAZ', 'Mehmet.yilmaz@gmail.com', 1234),
(1, 'Kadikoy', 500000, 50000, 'Emel AKYUZ', 'emel.akyuz@gmail.com', 123456),
(2, 'Uskudar', 450000, 50000, 'Kadir KAPLAN', 'kadir.kaplan@gmail.com', 54856),
(3, 'Eminonu', 170000, 40000, 'Rasim EKREM', 'rasim.ekrem@gmail.com', 3444544),
(4, 'Tophane', 155500, 35000, 'Osman CAGLAR', 'osman.caglar@gmail.com', 655554),
(5, 'Beyoglu', 340000, 51000, 'Kemal YASLI', 'kemal.yasli@gmail.com', 45876),
(6, 'Kadir_Has_Uni', 170000, 45000, 'Yildiz TILKI', 'yildiz.tilki@gmail.com', 25654),
(7, 'Beyoglu_findikli', 255000, 47000, 'Esma YILDIRAN', 'esma.yildiran@gmail.com', 566878),
(8, 'taksim_historia', 260000, 48000, 'Asli ENVER', 'asli.enver@gmail.com', 66696),
(9, 'Istiklal_18', 370000, 52000, 'Rasim GULTEKIN', 'rasim.gultekin@gmail.com', 66598),
(10, 'taksim_meydan', 580000, 59000, 'Tugba DURMUS', 'tugba.durmus@gmail.com', 669587),
(11, 'Taksim3', 250000, 60000, 'Erdem YILMAZ', 'erdem.yilmaz@gmail.com', 22546),
(12, 'taksim_harbiye', 380000, 61000, 'Irem ABDAL', 'irem.abdal@gmail.com', 66505),
(13, 'bebek', 650000, 85000, 'Tolunay SAHIN', 'tolunay.sahin@gmail.com', 122245),
(14, 'levent', 580000, 62000, 'Levent YUKSEL', 'levent.yuksel@gmail.com', 12455),
(15, 'Kanyon', 510000, 65000, 'Zeynep CEYLAN', 'zeynep.gmail@gmail.com', 6400369);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
