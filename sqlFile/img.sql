-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 25 2022 г., 19:56
-- Версия сервера: 10.3.16-MariaDB
-- Версия PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gb_lesson`
--

-- --------------------------------------------------------

--
-- Структура таблицы `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `path` varchar(100) NOT NULL,
  `size` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `popul` int(11) NOT NULL,
  `ins` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `img`
--

INSERT INTO `img` (`id`, `path`, `size`, `height`, `width`, `name`, `popul`, `ins`) VALUES
(10, '../les4/img', 792127, 1080, 1920, '1.jpg', 1, 1),
(11, '../les4/img', 216329, 750, 1126, '2.jpg', 5, 1),
(12, '../les4/img', 3473897, 1800, 2880, '3.jpg', 4, 1),
(13, '../les4/img', 914474, 1200, 1600, '4.jpg', 3, 1),
(14, '../les4/img', 357643, 850, 1280, '5.jpg', 1, 1),
(15, '../les4/img', 13784430, 3333, 5000, '6.jpg', 1, 1),
(16, '../les4/img', 792127, 1080, 1920, '7.jpg', 3, 1),
(17, '../les4/img', 216329, 750, 1126, '8.jpg', 0, 1),
(18, '../les4/img', 3473897, 1800, 2880, '9.jpg', 0, 1),
(19, '../les4/img', 914474, 1200, 1600, '10.jpg', 0, 1),
(20, '../les4/img', 357643, 850, 1280, '11.jpg', 0, 1),
(21, '../les4/img', 13784430, 3333, 5000, '12.jpg', 1, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
