-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 09 2024 г., 04:33
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Den`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id` int NOT NULL,
  `name` varchar(535) NOT NULL,
  `cena` varchar(535) NOT NULL,
  `Fuel type` varchar(535) NOT NULL,
  `Transmission` varchar(535) NOT NULL,
  `Configuration` varchar(535) NOT NULL,
  `Power` varchar(535) NOT NULL,
  `Year` varchar(535) NOT NULL,
  `Mileage` varchar(535) NOT NULL,
  `description` varchar(535) NOT NULL,
  `img1` varchar(535) NOT NULL,
  `img2` varchar(535) NOT NULL,
  `img3` varchar(535) NOT NULL,
  `img4` varchar(535) NOT NULL,
  `img5` varchar(535) NOT NULL,
  `img6` varchar(535) NOT NULL,
  `img7` varchar(535) NOT NULL,
  `city` varchar(535) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `link` varchar(535) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `img8` varchar(535) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `cena`, `Fuel type`, `Transmission`, `Configuration`, `Power`, `Year`, `Mileage`, `description`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `city`, `link`, `img8`) VALUES
(1, 'Audi Q5 (FY)', '5 216 309 ₽', 'Дизель', 'АКПП', '40 TDI Quattro', '415 л.с', '2022', '42 222 км', 'Панорама, камера 360°, проекция на лобовое стекло, аудиосистема HI-FI,Пневмоподвеска,Пакетом, Professional, Интерфейс беспроводной зарядки,потолок Anthracite,Спортивный пакет М', 'assets/papa/Rectangle 9.png', 'photo/x6/Rectangle 64.png', 'photo/x6/Rectangle 63.png', 'photo/x6/Rectangle 65.png', 'photo/x6/Rectangle 62.png', 'photo/x6/Rectangle 82.png', 'photo/x6/Rectangle 81.png', 'Санкт-петербург', 'Cars/bmv g70.php', 'photo/x6/Rectangle 71.png'),
(2, 'BMW X5 (F15)', '4 446 457 ₽', 'Дизель', 'АКПП', 'xDrive 30d', '', '2018', '', '', 'assets/papa/Rectangle 8.png', 'photo/x6/Rectangle 64.png', '', '', '', '', '', 'Нижний-Новгород', 'Cars/bmv g06.php', ''),
(3, 'Audi Q5 (FY)', '5 216 309 ₽', 'Дизель', 'АКПП', '40 TDI Quattro', '', '2022', '', '', 'assets/papa/Rectangle 9.png', '', '', '', '', '', '', 'Санкт-петербург', 'Cars/bmv x3.php', ''),
(4, 'BMW X5 (F15)', '4 446 457 ₽', 'Дизель', 'АКПП', 'xDrive 30d', '', '2018', '', '', 'assets/papa/Rectangle 8.png', '', '', '', '', '', '', 'Нижний-Новгород', 'Cars/toyota Lc.php', '');

-- --------------------------------------------------------

--
-- Структура таблицы `rega`
--

CREATE TABLE `rega` (
  `id` int NOT NULL,
  `name` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `phone` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `email` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `rega`
--

INSERT INTO `rega` (`id`, `name`, `phone`, `email`) VALUES
(43, 'Денис ', '+745345656756', 'wqeq@qwe'),
(44, '4534', '345345', '534534534@mail.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `Vopros`
--

CREATE TABLE `Vopros` (
  `id` int NOT NULL,
  `name` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `phone` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `Vopros`
--

INSERT INTO `Vopros` (`id`, `name`, `phone`) VALUES
(11, 'Денис', '89036712365'),
(12, '1', '1'),
(13, '1', '1'),
(14, '2', '3'),
(15, '1', '1'),
(16, '1', '1'),
(17, '1', '1'),
(18, '1', '1'),
(19, '1', '1'),
(20, '1', '1'),
(21, '1', '1'),
(22, '1', '1'),
(23, '1', '1'),
(24, '1', '1'),
(25, '1', '1'),
(26, '1', '1'),
(27, '1', '1'),
(28, '1', '1'),
(29, '1', '1'),
(30, '1', '1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rega`
--
ALTER TABLE `rega`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Vopros`
--
ALTER TABLE `Vopros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `rega`
--
ALTER TABLE `rega`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT для таблицы `Vopros`
--
ALTER TABLE `Vopros`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
