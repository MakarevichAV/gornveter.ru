-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: 10.0.0.94:3306
-- Время создания: Апр 12 2021 г., 07:37
-- Версия сервера: 10.3.28-MariaDB-log
-- Версия PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gornveter`
--

-- --------------------------------------------------------

--
-- Структура таблицы `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `ico` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `brand`
--

INSERT INTO `brand` (`id`, `ico`) VALUES
(2, 'dantex'),
(3, 'fujitsu'),
(5, 'haier'),
(6, 'hitachi'),
(7, 'jax'),
(8, 'lessar'),
(9, 'lg'),
(10, 'panasonic'),
(11, 'samsung'),
(12, 'toshiba');

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `tel1` varchar(30) NOT NULL,
  `tel2` varchar(30) NOT NULL,
  `mail` varchar(120) NOT NULL,
  `addr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`id`, `company_name`, `tel1`, `tel2`, `mail`, `addr`) VALUES
(1, 'Горный ветерок', '89128878469', '89526453255', 'mail@mail.ru', 'г.Краснодар');

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'default',
  `date` date NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `photo`, `date`, `text`) VALUES
(2, 'Григорий', 'default', '0000-00-00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n'),
(3, 'Оксана', 'default', '0000-00-00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(4, 'Александр', 'default', '0000-00-00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Структура таблицы `main_text_card`
--

CREATE TABLE `main_text_card` (
  `id` int(11) NOT NULL,
  `ico` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `main_text_card`
--

INSERT INTO `main_text_card` (`id`, `ico`, `name`, `text`, `active`) VALUES
(1, '', 'РЕМОНТ НА ДОМУ', 'Неисправность устраняется у вас дома, без транспортировки кондиционера в мастерскую.', 1),
(2, '', 'ОПЕРАТИВНО', 'Мастер выезжает к Вам сразу после звонка, или в удобное для Вас время.', 1),
(3, '', 'ЗАПЧАСТИ В НАЛИЧИИ', 'Большие складские запасы запчастей для всех популярных моделей сплит-систем.', 1),
(4, '', 'ГАРАНТИЯ КАЧЕСТВА', 'После завершения ремонта Вы получаете гарантийный сертификат на выполненные работы', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `price_list`
--

CREATE TABLE `price_list` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `category_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `price_list`
--

INSERT INTO `price_list` (`id`, `name`, `price`, `category_ID`) VALUES
(1, 'Монтаж 7-9 модели (20 - 25 м²)', '4000 ₽', 1),
(2, 'Монтаж 10-14 модели (30 - 35 м²)', '4500 ₽', 1),
(3, 'Монтаж 15-20 модели (45 - 50 м²)', '5000 ₽', 1),
(4, 'Монтаж 21-24 модели (60 - 70 м²)', '6000 ₽', 1),
(5, 'Штроба (кирпич, пеноблок)', '800 ₽ / метр', 2),
(6, 'Штроба (монолит, бетон)\r\n', '1000 ₽ / метр', 2),
(7, 'Техническое отверстие', '500 ₽ / метр', 2),
(8, 'Метр коммуникаций под 7-9 модель', '1000 ₽ / метр', 2),
(9, 'Метр коммуникаций под 12-18 модель', '1400 ₽ / метр', 2),
(10, 'Метр коммуникаций под 24 модель', '1800 ₽ / метр', 2),
(11, '7-9 модель', '3000 ₽', 3),
(12, '12-18 модель', '3500 ₽', 3),
(13, '24 модель', '3800 ₽', 3),
(14, 'Комплекс работ', 'от 2000 ₽', 4),
(15, 'Заправка фреоном R22 и R410a', 'от 500 ₽', 4),
(16, 'Ремонт без учета запчастей', 'от 500 ₽ до 1500 ₽', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(20) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `photo`) VALUES
(5, 'test', '5000', 'ico30201134'),
(8, 'qwe', '123', 'ico04134224'),
(9, '', '0', 'ico04134625'),
(10, '333', '333', 'ico08193341');

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `active` tinyint(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active` tinyint(4) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `social`
--

INSERT INTO `social` (`id`, `name`, `active`, `link`) VALUES
(1, 'vk', 0, 'https://vk.com'),
(2, 'insta', 1, 'https://instagram.com'),
(3, 'telega', 1, 'https://telegram.org'),
(4, 'watsapp', 1, 'https://whatsapp.com'),
(5, 'viber', 1, 'https://viber.com/ru/');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `user_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `passwd`, `user_key`) VALUES
(1, 'gornveteradmin2021', 'd3fb5b1b58a71c78d923595bf543c27c', 'f0e5a7b7028ced3e3efce13b3e4f3050');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `main_text_card`
--
ALTER TABLE `main_text_card`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `price_list`
--
ALTER TABLE `price_list`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `main_text_card`
--
ALTER TABLE `main_text_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `price_list`
--
ALTER TABLE `price_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
