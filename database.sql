-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: sql209.epizy.com
-- Üretim Zamanı: 21 Haz 2022, 15:00:12
-- Sunucu sürümü: 10.3.27-MariaDB
-- PHP Sürümü: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `epiz_31693398_cmnhmyr`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `app`
--

CREATE TABLE `app` (
  `app_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `app_date` date NOT NULL,
  `app_time` int(11) NOT NULL,
  `app_service` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `app`
--

INSERT INTO `app` (`app_id`, `username`, `app_date`, `app_time`, `app_service`) VALUES
(34, 'MUKU', '2022-08-18', 13, 'MASSAGE'),
(33, 'MUKU', '2022-07-10', 10, 'face'),
(32, 'asu', '2022-07-08', 12, 'face'),
(31, 'asu', '2022-07-08', 11, 'face'),
(35, 'EBRU', '2022-07-09', 9, 'hair'),
(37, 'EBRU', '2022-07-08', 12, 'hair');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `names` varchar(25) NOT NULL,
  `surname` varchar(25) NOT NULL,
  `tell` varchar(25) NOT NULL,
  `adress` text NOT NULL,
  `username` varchar(25) NOT NULL,
  `passwords` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `customer`
--

INSERT INTO `customer` (`customer_id`, `names`, `surname`, `tell`, `adress`, `username`, `passwords`) VALUES
(65, 'HÃœMEYRA', 'Ã‡Ä°MEN', '876543', 'WESRDFTGYHJU', 'HUMEYRA', '12345'),
(74, 'SÃœMEYYE', 'Ã‡Ä°MEN', '23456', 'dbgctgrfs', 'sum', 'sum'),
(72, 'MÃœKERREM', 'YILMAZ', '87654', 'LKJHGFD', 'MUKU', 'MUKO'),
(60, 'ayÅŸe', 'Ã§imen', '34567', 'wasedfgh', 'ayse', 'ayse'),
(59, 'HÃœMEYRA', 'Ã‡Ä°MEN', '9876543', 'KJHGFDS', 'hÃ¼m', 'hÃ¼m'),
(57, 'zeynep', 'bulut', '2345', 'hgfdcvb', 'zey', '123'),
(71, 'asu', 'aktar', '987654', 'lkjhgfd', 'asu', 'asu123'),
(73, 'EBRU', 'Ã‡Ä°MEN', '876543', 'ASDFGHJ', 'EBRU', 'EBUS'),
(75, 'Mustafa Ã–zgÃ¼r', 'Cingiz', '+90225451544', 'Bursa', 'ayrikyapilar', '123456');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `app`
--
ALTER TABLE `app`
  ADD PRIMARY KEY (`app_id`),
  ADD KEY `username` (`username`);

--
-- Tablo için indeksler `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `app`
--
ALTER TABLE `app`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Tablo için AUTO_INCREMENT değeri `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
