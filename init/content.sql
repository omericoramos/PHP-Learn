-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 29 Nis 2020, 04:22:02
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
(19, 'Bir Çöküşün Öyküsü', 'Stefan Zweig', 'bic.jpg'),
(20, 'Ay Işığı Sokağı', 'Stefan Zweig', 'AYISIGI.jpg'),
(21, 'Korku', 'Stefan Zweig', 'KORKU.jpg'),
(22, 'Zacharius Usta', 'Jules Verne', 'zachar.jpg'),
(23, 'Muhteşem Gatsby', 'Francis Scott Fitzgerald', 'MUHTESEM.jpg'),
(24, 'Martı', 'Anton Pavloviç Çehov', 'marti.jpg'),
(25, 'Köpek Kalbi', 'Mihail Bulgakov', 'kopek.jpg'),
(26, 'Hayatım – Bir Taşralının Hikâyesi', 'Anton Pavloviç Çehov', 'hayatim.jpg'),
(27, 'Usta ve Margarita', ' Mihail Bulgakov', 'ustave.jpg'),
(28, 'Ölümcül Yumurtalar', 'Mihail Bulgakov', 'OLUMCUL.jpg'),
(29, 'Yıldız Gezgini', 'Jack London', 'YILDIZ-GEZGINI.jpg'),
(30, 'Ateş Yakmak', 'Jack London', 'ates.jpg');

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
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;