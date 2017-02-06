-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 25 2017 г., 10:50
-- Версия сервера: 5.5.50
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `user_job`
--

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`userid`, `username`) VALUES
(1, 'Александр'),
(2, 'Елена'),
(3, 'Андрей'),
(4, 'Владимир'),
(5, 'Татьяна'),
(6, 'Алексей'),
(7, 'Ольга'),
(8, 'Дмитрий'),
(9, 'Наталья'),
(10, 'Ирина'),
(11, 'Альбина'),
(12, 'Николай'),
(13, 'Евгений'),
(14, 'Иван'),
(15, 'Светлана'),
(16, 'Екатерина'),
(17, 'Юлия'),
(18, 'Мария'),
(19, 'Михаил'),
(20, 'Юрий'),
(21, 'Игорь'),
(22, 'Виктор'),
(23, 'Анастасия'),
(24, 'Олег'),
(25, 'Марина'),
(26, 'Людмила'),
(27, 'Павел'),
(28, 'Максим'),
(29, 'Василий');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
