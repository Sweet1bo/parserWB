-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 20 2022 г., 15:21
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `market`
--

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `product_ID` int NOT NULL,
  `basket` int NOT NULL,
  `cost` int NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `product_ID`, `basket`, `cost`, `description`, `img`) VALUES
(207, 14507705, 1, 2289, 'Бейсболка кепка мужская теплая зимняя подклад мех черная', 'https://basket-01.wb.ru/vol104/part10457/10457227/images/c516x688/1.jpg'),
(208, 10457226, 2, 2256, 'Шапка ушанка мужская бейсболка зимняя мех с ушками', 'https://basket-02.wb.ru/vol145/part14507/14507705/images/c516x688/1.jpg'),
(209, 14507725, 1, 2305, 'Кепка мужская бейсболка утепленная зимняя шерсть с ушками', 'https://basket-01.wb.ru/vol104/part10457/10457226/images/c516x688/1.jpg'),
(210, 14507720, 2, 2217, 'Кепка кепи мужская бейсболка утепленная зимняя шерсть ушки', 'https://basket-02.wb.ru/vol144/part14428/14428995/images/c516x688/1.jpg'),
(211, 10457227, 2, 2269, 'Шапка ушанка кепка кепи мужская бейсболка зимняя мех черная', 'https://basket-02.wb.ru/vol145/part14507/14507725/images/c516x688/1.jpg'),
(212, 14429002, 2, 2317, 'Кепка мужская бейсболка немка утепленная с ушками', 'https://basket-02.wb.ru/vol145/part14507/14507720/images/c516x688/1.jpg'),
(213, 14507717, 2, 2221, 'Кепи кепка мужская бейсболка утепленная зимняя кожаная ушки', 'https://basket-02.wb.ru/vol145/part14507/14507713/images/c516x688/1.jpg'),
(214, 14508638, 2, 2124, 'Кепка мужская бейсболка утепленная с ушками', 'https://basket-02.wb.ru/vol145/part14507/14507710/images/c516x688/1.jpg'),
(215, 14429021, 2, 4118, 'Фуражка кепи кепка осень весна утепленная демисезон', 'https://basket-02.wb.ru/vol145/part14507/14507717/images/c516x688/1.jpg'),
(216, 10457230, 2, 2156, 'Кепи кепка мужская бейсболка утепленная', 'https://basket-02.wb.ru/vol145/part14507/14507724/images/c516x688/1.jpg'),
(217, 14507712, 2, 2030, 'Кепка бейсболка мужская утепленная зимняя черная мех ушки', 'https://basket-02.wb.ru/vol145/part14508/14508638/images/c516x688/1.jpg'),
(218, 14429031, 2, 2013, 'Кепи кепка мужская бейсболка утепленная шерсть с ушками', 'https://basket-02.wb.ru/vol144/part14429/14429021/images/c516x688/1.jpg'),
(219, 10475074, 2, 2108, 'Бейсболка кепка теплая мужская утепленная с ушками', 'https://basket-02.wb.ru/vol144/part14429/14429002/images/c516x688/1.jpg'),
(220, 14428988, 2, 2317, 'Кепи кепка мужская бейсболка утепленная черная демисезон', 'https://basket-02.wb.ru/vol145/part14507/14507712/images/c516x688/1.jpg'),
(221, 14508151, 2, 2211, 'Кепка мужская бейсболка утепленная с ушками', 'https://basket-02.wb.ru/vol145/part14507/14507721/images/c516x688/1.jpg'),
(222, 14507719, 2, 2055, 'Кепи кепка мужская бейсболка утепленная мех зимняя с ушками', 'https://basket-02.wb.ru/vol144/part14428/14428975/images/c516x688/1.jpg'),
(223, 14507724, 2, 2363, 'Кепка мужская бейсболка утепленная зимняя шерсть ушки', 'https://basket-02.wb.ru/vol145/part14507/14507719/images/c516x688/1.jpg'),
(224, 14507710, 1, 1873, 'Кепи кепка мужская бейсболка утепленная зимняя мех черная', 'https://basket-01.wb.ru/vol104/part10475/10475077/images/c516x688/1.jpg'),
(225, 14507726, 1, 2098, 'Кепи кепка мужская бейсболка зимняя меховая теплая', 'https://basket-01.wb.ru/vol104/part10457/10457230/images/c516x688/1.jpg'),
(226, 10475076, 2, 2022, 'Кепка мужская бейсболка кожаная утепленная осенняя', 'https://basket-02.wb.ru/vol145/part14507/14507726/images/c516x688/1.jpg'),
(227, 39721459, 1, 1848, 'Кепи кепка мужская бейсболка утепленная с ушками шерсть', 'https://basket-01.wb.ru/vol104/part10475/10475076/images/c516x688/1.jpg'),
(228, 14429004, 1, 1817, 'Кепи кепка мужская бейсболка утепленная кожаная с ушками', 'https://basket-01.wb.ru/vol104/part10475/10475074/images/c516x688/1.jpg'),
(229, 10475077, 3, 2250, 'Бейсболка мужская кепка утепленная с ушками шерсть', 'https://basket-03.wb.ru/vol397/part39721/39721459/images/c516x688/1.jpg'),
(230, 12003937, 2, 1771, 'Картуз мужской кепи фуражка мужская', 'https://basket-02.wb.ru/vol145/part14508/14508151/images/c516x688/1.jpg'),
(231, 14428975, 2, 2091, 'Кепка мужская бейсболка утепленная зимняя шерсть', 'https://basket-02.wb.ru/vol144/part14429/14429031/images/c516x688/1.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=307;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
