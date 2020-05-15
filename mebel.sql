-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 15 2020 г., 22:23
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mebel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `type_category` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id_category`, `type_category`) VALUES
(1, 'Диваны и кресла'),
(2, 'Кровати и матрасы'),
(3, 'Шкафы и стеллажи'),
(4, 'Столы и стулья\r\n'),
(5, 'Тумбы и комоды\r\n'),
(6, 'Кухонная мебель'),
(7, 'Сад и дача\r\n'),
(8, 'asd'),
(9, 'asd'),
(10, 'кик'),
(11, 'asdasdas'),
(12, 'Кайф');

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `delivery_method` varchar(60) NOT NULL,
  `date_ delivery` date NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `title` varchar(70) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `manufacturer` varchar(70) NOT NULL,
  `date_manufacturing` date NOT NULL,
  `width` varchar(5) NOT NULL,
  `height` varchar(5) NOT NULL,
  `depth` varchar(5) NOT NULL,
  `color_title` varchar(60) NOT NULL,
  `color` varchar(30) NOT NULL,
  `material` varchar(60) NOT NULL,
  `image_product` text NOT NULL,
  `thumbnails` text NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `discount` int(11) NOT NULL DEFAULT 0,
  `leader` int(11) NOT NULL DEFAULT 0,
  `count_view` int(11) NOT NULL DEFAULT 0,
  `count` int(11) NOT NULL,
  `id_sub_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id_product`, `title`, `country`, `city`, `manufacturer`, `date_manufacturing`, `width`, `height`, `depth`, `color_title`, `color`, `material`, `image_product`, `thumbnails`, `description`, `price`, `discount`, `leader`, `count_view`, `count`, `id_sub_category`) VALUES
(15, 'Диван-кровать Торонто', 'Россия', 'Москва', 'МебельСтрой', '2020-05-06', '235', '90', '155', 'Серый', '#808080', 'Рогожка', 's:17:\"5ebdba4946ef0.jpg\";s:17:\"5ebdba49472d4.jpg\";s:17:\"5ebdba4947632.jpg\";s:17:\"5ebdba49479fb.jpg\";s:17:\"5ebdba4947d6b.jpg\";', 's:17:\"5ebdba49480e5.jpg\";s:17:\"5ebdba49484c1.jpg\";s:17:\"5ebdba4948773.jpg\";s:17:\"5ebdba4948aa2.jpg\";s:17:\"5ebdba4948dae.jpg\";', 'Максимально использовать площадь небольшой гостиной поможет современный угловой диван-кровать Торонто. Его основным преимуществом является наличие универсального угла, местоположение которого можно выбрать во время сборки. Производитель предусмотрел удобный ящик для хранения вещей или спальных принадлежностей. Надежный механизм типа дельфин позволяет легко трансформировать диван с габаритами 235х90х155 см в спальное место размером 143х204 см. Под приятной на ощупь обивкой из ткани рогожки располагаются качественные и долговечные наполнители: синтепон и пенополиуретан.', '22999', 34, 0, 0, 0, 1),
(16, 'Диван-кровать Оскар', 'Россия', 'Шахты', 'МебШАХТЫ', '2020-05-14', '245', '96', '112', 'Голубой', '#42aaff', 'Микровелюр', 's:17:\"5ebdc083a3abd.jpg\";s:17:\"5ebdc083a3e25.jpg\";s:17:\"5ebdc083a413d.jpg\";s:17:\"5ebdc083a46d8.jpg\";s:17:\"5ebdc083a4a3c.jpg\";', 's:17:\"5ebdc083a4e11.jpg\";s:17:\"5ebdc083a517a.jpg\";s:17:\"5ebdc083a5521.jpg\";s:17:\"5ebdc083a5866.jpg\";s:17:\"5ebdc083a5aed.jpg\";', 'Диван-кровать Оскар сочетает в себе все функции, необходимые для полноценного отдыха в дневное и ночное время. Особую пышность и мягкость его формам придают утяжки‑пике на подушках сиденья и боковинах. Все детали чехла из микровелюра подчеркнуты контрастным декоративным кантом.', '49999', 28, 0, 0, 0, 1),
(17, 'Кроват Милтон', 'Россия', 'Ростов', 'РостовСтройМебель', '2020-05-01', '172,5', '110 ', '221,5', 'Бежевый', '#f5f5dc', 'Техническая ткань', 's:17:\"5ebdcaeb3ae8a.jpg\";s:17:\"5ebdcaeb3b294.jpg\";s:17:\"5ebdcaeb3b67b.jpg\";s:17:\"5ebdcaeb3bb56.jpg\";s:17:\"5ebdcaeb3bf24.png\";', 's:17:\"5ebdcaeb3c2f4.jpg\";s:17:\"5ebdcaeb3c5af.jpg\";s:17:\"5ebdcaeb3c90e.jpg\";s:17:\"5ebdcaeb3cc88.jpg\";s:17:\"5ebdcaeb3cfb5.png\";', 'Кровать Милтон решит сразу две задачи: обустройства комфортного спального места и освобождения пространства комнаты от лишних вещей. Модель оснащена механизмом подъема рамы, облегчающим доступ к хранящимся в бельевом коробе постельным принадлежностям, запасным шторам или дорожным сумкам. Ортопедическое основание с гнутыми деревянными ламелями поддерживает матрас и обеспечивает хорошую вентиляцию. Высокая мягкая спинка позволяет занять удобную позу во время чтения перед сном. Царги полностью обтянуты шениллом, что снижает риск случайного ушиба.', '25999', 26, 0, 0, 0, 5),
(18, 'Стол Кварт MD 771', 'Россия', 'Москва', 'МебельСтрой', '2020-03-20', '90', '76,5', '46', 'Белый', '#ffffff', 'ЛДСП, стекло', 's:17:\"5ebdcc5ca3a9f.jpg\";s:17:\"5ebdcc5ca3ebf.jpg\";s:17:\"5ebdcc5ca42b4.jpg\";s:17:\"5ebdcc5ca45ea.jpg\";s:17:\"5ebdcc5ca494e.jpg\";', 's:17:\"5ebdcc5ca4c67.jpg\";s:17:\"5ebdcc5ca4f8a.jpg\";s:17:\"5ebdcc5ca5285.jpg\";s:17:\"5ebdcc5ca5593.jpg\";s:17:\"5ebdcc5ca58c3.jpg\";', 'Компактные размеры и лаконичный дизайн делают стол из коллекции Кварт идеальным вариантом для спальни и гостиной. Модель выполнена из надежной и долговечной древесно–стружечной плиты, отличающейся высоким качеством и износостойкостью. Столешница изделия покрыта стеклом, устойчивым к механическим повреждениям. Благодаря стильной комбинированной цветовой палитре и современному исполнению, изделие органично вписывается в любой интерьер. Эргономичная конструкция и небольшие габариты позволяют разместить этот предмет мебели на небольшой площади, значительно экономя свободное пространство. Стол практичен и функционален. В выдвижной полке поместятся необходимые для работы вещи и другие предметы.', '5999', 0, 0, 0, 0, 15);

-- --------------------------------------------------------

--
-- Структура таблицы `sub_category`
--

CREATE TABLE `sub_category` (
  `id_sub_category` int(11) NOT NULL,
  `name_category` varchar(100) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sub_category`
--

INSERT INTO `sub_category` (`id_sub_category`, `name_category`, `id_category`) VALUES
(1, 'Диваны-кровати', 1),
(2, 'Угловые кожаные диваны', 1),
(3, 'Угловые тканевые диваны', 1),
(4, 'Прямые кожаные диваны', 1),
(5, 'Двуспальные кровати', 2),
(6, 'Односпальные кровати', 2),
(7, 'Детские кровати', 2),
(8, 'Пружинные матрасы', 2),
(9, 'Шкафы-купе', 3),
(10, 'Шкафы распашные', 3),
(11, 'Угловые шкафы', 3),
(12, 'Стеллажи', 3),
(13, 'Кухонные столы', 4),
(14, 'Журнальные столы', 4),
(15, 'Компьютерные столы', 4),
(16, 'Туалетные столики', 4),
(17, 'Детские столы', 4),
(18, 'Комоды', 5),
(19, 'Тумбы для ТВ', 5),
(20, 'Тумбы для обуви', 5),
(21, 'Подкайф', 12),
(22, 'ыыыы', 12),
(23, 'ццццц', 12);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `fio` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(70) NOT NULL,
  `login` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `fio`, `address`, `phone`, `email`, `login`, `password`) VALUES
(2, 'Косяк Евгений Григорьевич', 'Ростовская область, г. Сальск, ул.Строителей 22 кв 1.', '89283390912', 'sweetheartseven@yandex.ru', 'Jenia', '937e7e29dd4e74b6bb8699f9054dd9c4'),
(3, 'Косяк Евгений Григорьевич', 'Ростовская область, г. Сальск, ул.Строителей 22 кв 1.', '89283390912', 'sweetheartseven@yandex.ru', 'Jenia', '937e7e29dd4e74b6bb8699f9054dd9c4'),
(4, 'Косяк Евгений Григорьевич', 'Ростовская область, г. Сальск, ул.Строителей 22 кв 1.', '89283390912', 'sweetheartseven@yandex.ru', 'Jenia', '937e7e29dd4e74b6bb8699f9054dd9c4'),
(5, 'asd', 'as', '123', 'asd@mail.ru', 'asd', 'www'),
(6, 'asd', 'as', '123', 'asd@mail.ru', 'asd', 'ddd'),
(7, 'asd', 'asd@mail.ru', '123', 'asd@mail.ru', '123', 'caf1a3dfb505ffed0d024130f58c5cfa'),
(8, 'asd', 'asd@mail.ru', '123', 'asd@mail.ru', '123', 'caf1a3dfb505ffed0d024130f58c5cfa'),
(9, 'asd', 'asd', '123', 'asd@mail.ru', 'asd', 'asd'),
(10, 'asd', 'asd', '123', 'asd@mail.ru', 'qwe', '76d80224611fc919a5d54f0ff9fba446'),
(11, 'www', 'www', '444', 'www@mail.ru', 'www', '4eae35f1b35977a00ebd8086c259d4c9'),
(12, 'Корсиков Олег Викторович', 'Ростовская область, г. Новочеркасск, ул. Энгельса, дом. 43', '89043392103', 'Korsik@mail.ru', 'kors', 'ee8c78f8b79a04f39e85b5f31b177d67');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_order` (`id_order`,`id_user`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_category` (`id_sub_category`);

--
-- Индексы таблицы `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id_sub_category`),
  ADD KEY `id_category` (`id_category`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id_sub_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Ограничения внешнего ключа таблицы `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_sub_category`) REFERENCES `sub_category` (`id_sub_category`);

--
-- Ограничения внешнего ключа таблицы `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
