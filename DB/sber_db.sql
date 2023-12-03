-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 13 2023 г., 20:49
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sber_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `info` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `price` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `image` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `items`
--

INSERT INTO `items` (`id`, `name`, `info`, `price`, `image`) VALUES
(1, 'Стандартная карта', 'Лучшая карта на каждый день. Особые условия при зачислении стипендии, зарплаты и пенсии.', 'Обслуживание от 0Р/месяц', 'Standart_card.png'),
(2, 'Тревел карта', 'Получайте \"Мили\" за покупки и оплачивайте ими до 90% стоимости путешествия.', 'Обслуживание 200р/месяц', 'Travel_card.png'),
(3, 'Молодежная карта', 'Для тех, кому от 14 до 21 года.\nПовышенные бонусы СберСпасибо за траты в молодёжных категориях.', 'Обслуживание от 0Р/месяц', 'Youth_card.png'),
(4, 'Премиум карта Аэрофлот', 'Копите мили за покупки, обменивайте на билеты.\nНачислим 2 мили за каждые потраченные 60Р.\nПодарим 1000 миль за открытие карты.', 'Обслуживание 12 000 ₽ в год', 'Premium_Aeroflot_card.png'),
(5, 'Кредитная карта', 'Решение за 2 минуты. Онлайн. Нужен только паспорт и телефон.', 'Обслуживание 0Р/месяц', 'Credit_card.png'),
(6, 'Карта для иностранцев', 'Такая же карта, как для граждан России. Подойдёт для дешевых переводов за рубеж и оплаты услуг.', 'Обслуживание 0Р/месяц', 'Foreigners_card.png');

-- --------------------------------------------------------

--
-- Структура таблицы `order_status`
--

CREATE TABLE `order_status` (
  `ID` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `order_status`
--

INSERT INTO `order_status` (`ID`, `status`) VALUES
(1, 'Отменен'),
(2, 'Оплачен');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `ID` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`ID`, `role`) VALUES
(1, 'administrator');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `login` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `surname` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `patronymic` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`ID`, `login`, `password`, `name`, `surname`, `patronymic`, `email`) VALUES
(8, 'admin', 'admin11', 'admin', 'admin1', 'admin2', 'admin@gmail.com'),
(12, '123', '123', '123', '123', '123', '123');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `order_status`
--
ALTER TABLE `order_status`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
