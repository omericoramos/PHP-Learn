-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 29 Nis 2020, 00:29:43
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `bookstore_test`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `books`
--

CREATE TABLE `books` (
  `id` int(12) NOT NULL,
  `name` varchar(500) NOT NULL,
  `author` varchar(500) NOT NULL,
  `cover` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `books`
--

INSERT INTO `books` (`id`, `name`, `author`, `cover`) VALUES
(1, 'Son Av', 'Jean Christophe Grange', '1.jpg'),
(2, 'Gelirken Ekmek Al', 'Şermin Yaşar', '2.jpg'),
(3, 'Çocuk Yetiştirme Kılavuzu', 'Selçuk R. Şirin', '3.jpg'),
(4, 'Beni Ödülle Cezalandırma', 'Dr. Özgür Bolat', '4.jpg');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `books`
--
ALTER TABLE `books`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;