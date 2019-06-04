-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 04 2019 г., 05:08
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `volodya_10`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tweet`
--

CREATE TABLE `tweet` (
  `logo` varchar(355) NOT NULL,
  `title` varchar(355) NOT NULL,
  `text` varchar(355) NOT NULL,
  `img` varchar(355) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tweet`
--

INSERT INTO `tweet` (`logo`, `title`, `text`, `img`, `id`) VALUES
('images/post2.png', 'Обычный твит', ' Ghoul', 'images/habr.jpg', 111),
('images/post2.png', 'Обычный твит', '222244444', 'images/habr.jpg', 112),
('images/post2.png', 'Обычный твит', 'ffff', 'images/habr.jpg', 113),
('images/post2.png', 'Обычный твит', 'wadwa', 'images/habr.jpg', 114),
('images/post2.png', 'Обычный твит', 'awdwaderrfr', 'images/habr.jpg', 115),
('images/post2.png', 'Обычный твит', 'gtyh', 'images/habr.jpg', 116),
('images/post2.png', 'Обычный твит', 'cvbnm,', 'images/habr.jpg', 117),
('images/post2.png', 'Обычный твит', 'LOREM!!!!!', 'images/habr.jpg', 118),
('images/post2.png', 'Обычный твит', '', 'images/habr.jpg', 119),
('images/post2.png', 'Обычный твит', 'ssssssssss', 'images/habr.jpg', 120),
('images/post2.png', 'Обычный твит', 'tssssssssss', 'images/habr.jpg', 121),
('images/post2.png', 'Обычный твит', 'ssss', 'images/habr.jpg', 122),
('images/post2.png', 'Обычный твит', 'lop', 'images/habr.jpg', 123);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tweet`
--
ALTER TABLE `tweet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tweet`
--
ALTER TABLE `tweet`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
