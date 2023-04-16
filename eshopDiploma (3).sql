-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 16 2023 г., 03:34
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
-- База данных: `eshopDiploma`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `code`, `name`, `description`, `picture`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'soft_toys', 'Мягкие игрушки', 'Наши мягкие игрушки NICI для радости, игр и веселья.  Выберите себе плюшевого друга из большого ассортимента мягких игрушек нашего магазина. Будь то единорог, лама или альпака - ваш новый друг будет сопровождать вас повсюду.', NULL, NULL, NULL, NULL),
(2, 'keychains', 'Брелки', 'Найдите своего личного компаньона среди многочисленных брелков NICI. Может быть, как хранителя связки ключей, как украшение для вашей сумке или как маленький талисман.', NULL, NULL, NULL, NULL),
(3, 'magnici', 'Магниты MagNICI', 'Ваша любимая игрушка NICI в качестве маленького магнитного животного-компаньона MagNICI и талисмана на удачу. Благодаря небольшим магнитам внутри плюшевые игрушки держатся на металлических предметах.', NULL, NULL, NULL, NULL),
(4, 'cushions', 'Подушки', 'Декоративные плюшевые подушки NICI создадут в вашем доме домашнюю приятную атмосферу, способствующую расслаблению и умиротворению. Симпатичные персонажи NICI наполнят ваши любимые комнаты легкостью и радостью жизни.', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `collections`
--

CREATE TABLE `collections` (
  `id` bigint UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `collections`
--

INSERT INTO `collections` (`id`, `code`, `name`, `title_description`, `description`, `picture`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'jolly_maeh', 'Овечки Jolly Mäh', 'NICI Jolly Mäh - овечки, которые должны вам понравиться!', 'Самый безошибочно узнаваемый персонаж -- овечки Jolly Mäh на рынке в 2003 года. Красочный мир овечек доставляет удовольствие и занимает прочное место в сердцах детей и взрослых благодаря своему дерзкому и забавному дизайну.', 'Products\\jolly_maeh\\jolly_maeh_collection_image.jpg', NULL, NULL, NULL),
(2, 'unicorn_theodor', 'Единорог Theodor и его друзья', 'Мир единорога NICI Theodor и его друзей полон чудес и волшебства.', 'Откройте для себя красочный мир Theodor с пушистыми мягкими игрушками и подарочными предметами в виде единорогов, и позвольте себе быть очарованными!', 'Products\\unicorn_theodor\\unicon_theodor_collection_image.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_24_000028_create_categories_table', 2),
(8, '2023_01_24_011425_create_collections_table', 3),
(9, '2023_01_24_013025_add_text_title_column_to_collections_table', 3),
(10, '2023_01_24_164707_create_products_table', 4),
(11, '2023_03_07_210501_add_column_for_data_to_users_table', 5),
(12, '2023_03_07_215012_create_subscriptions_table', 6),
(13, '2023_04_09_004019_add_column_for_is_new_to_products_table', 7),
(14, '2023_04_10_190823_rename_column_height_to_products_table', 8),
(15, '2023_04_10_191405_add_columns_details_to_products_table', 9),
(16, '2023_04_11_203004_create_product_images_table', 10),
(17, '2023_04_15_225453_add_column_for_preview_to_product_images_table', 11);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `article` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `product_info` text COLLATE utf8mb4_unicode_ci,
  `price` int UNSIGNED NOT NULL DEFAULT '0',
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `collection_id` bigint UNSIGNED DEFAULT NULL,
  `size` int UNSIGNED NOT NULL DEFAULT '0',
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` tinyint UNSIGNED DEFAULT '0',
  `is_new` tinyint(1) NOT NULL DEFAULT '0',
  `height` int UNSIGNED NOT NULL DEFAULT '0',
  `width` int UNSIGNED NOT NULL DEFAULT '0',
  `depth` int UNSIGNED NOT NULL DEFAULT '0',
  `material` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `material_filling` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `care_recommend` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `article`, `title`, `description`, `product_info`, `price`, `category_id`, `collection_id`, `size`, `picture`, `discount`, `is_new`, `height`, `width`, `depth`, `material`, `material_filling`, `age_from`, `care_recommend`, `deleted_at`, `created_at`, `updated_at`) VALUES
(7, 'NICI48531-25', 'Мягкая игрушка Овечка Jolly Frances', 'Забавные овечки Jolly Mäh являются одними из фаворитов в семействе продуктов NICI. Исследователи мира, маленькие сладкоежки, законодатели моды и очень развеселые ребята резвятся на Jolly полянке. Оттуда они готовы с радостью отправиться в ваш дом. Вглядитесь: вы обязательно найдете здесь идеальную овечку!', 'Персонажи Jolly Mäh формируют имидж NICI как никто другой. Овечка Jolly Frances — одна из них. Милая овечка в розовом платье с большим сердцем. Она одна из самых милых членов семьи Jolly.', 2499, 1, 1, 25, 'Products\\jolly_maeh\\NICI48531-25\\48531_01_200_200.jpg', 0, 0, 25, 15, 16, 'плюш/полиэстер', 'полиэфирное волокно (полиэстер)', 'от 12 месяцев', 'можно стирать на деликатном режиме при температуре 30 градусов', NULL, NULL, NULL),
(8, 'NICI48533-25', 'Мягкая игрушка Овечка Jolly Rosa', 'Забавные овечки Jolly Mäh являются одними из фаворитов в семействе продуктов NICI. Исследователи мира, маленькие сладкоежки, законодатели моды и очень развеселые ребята резвятся на Jolly полянке. Оттуда они готовы с радостью отправиться в ваш дом. Вглядитесь: вы обязательно найдете здесь идеальную овечку!', 'Персонажи Jolly Mäh формируют имидж NICI как никто другой. Овечка Jolly Rosa — одна из них.  С розовым цветком за ушком, руками в карманах она самый любопытный и заводной член семьи Jolly.', 2499, 1, 1, 25, 'Products\\jolly_maeh\\NICI48533-25\\48533_01_HA_Frei_200x200.jpg', 0, 0, 25, 12, 18, 'плюш/полиэстер', 'полиэфирное волокно (полиэстер)', 'от 12 месяцев', 'можно стирать на деликатном режиме при температуре 30 градусов', NULL, NULL, NULL),
(9, 'NICI48534-25', 'Мягкая игрушка Овечка Jolly Lucy', 'Забавные овечки Jolly Mäh являются одними из фаворитов в семействе продуктов NICI. Исследователи мира, маленькие сладкоежки, законодатели моды и очень развеселые ребята резвятся на Jolly полянке. Оттуда они готовы с радостью отправиться в ваш дом. Вглядитесь: вы обязательно найдете здесь идеальную овечку!', 'Персонажи Jolly Mäh формируют имидж NICI как никто другой. Овечка Jolly Lucy — одна из них.  С розовыми заколками и носочками, контрастирующими с темно-серым мехом, она выделяется повсюду и поэтому является одним из самых запоминающихся членов семьи Jolly.', 2499, 1, 1, 25, 'Products\\jolly_maeh\\NICI48534-25\\48534_01_HA_Frei_200x200.jpg', 0, 0, 25, 16, 17, 'плюш/полиэстер', 'полиэфирное волокно (полиэстер)', 'от 12 месяцев', 'можно стирать на деликатном режиме при температуре 30 градусов', NULL, NULL, NULL),
(10, 'NICI48530-25', 'Мягкая игрушка Овечка Jolly Leroy', 'Забавные овечки Jolly Mäh являются одними из фаворитов в семействе продуктов NICI. Исследователи мира, маленькие сладкоежки, законодатели моды и очень развеселые ребята резвятся на Jolly полянке. Оттуда они готовы с радостью отправиться в ваш дом. Вглядитесь: вы обязательно найдете здесь идеальную овечку!', 'Персонажи Jolly Mäh формируют имидж NICI как никто другой. Барашек Jolly Leroy — один из них.  С его бунтарской синей прядью в волосах и идеально подходящими стильными туфлями он самый модный и молодежный член семьи Jolly.', 2499, 1, 1, 25, 'Products\\jolly_maeh\\NICI48530-25\\48530_01_HA_Frei_200x200.jpg', 0, 0, 25, 15, 17, 'плюш/полиэстер', 'полиэфирное волокно (полиэстер)', 'от 12 месяцев', 'можно стирать на деликатном режиме при температуре 30 градусов', NULL, NULL, NULL),
(11, 'NICI48532-25', 'Мягкая игрушка Волк Jolly Hugo', 'Забавные овечки Jolly Mäh являются одними из фаворитов в семействе продуктов NICI. Исследователи мира, маленькие сладкоежки, законодатели моды и очень развеселые ребята резвятся на Jolly полянке. Оттуда они готовы с радостью отправиться в ваш дом. Вглядитесь: вы обязательно найдете здесь идеальную овечку!', 'Персонажи Jolly Mäh формируют имидж NICI как никто другой. Волк Jolly Hugo — один из них.  Как «волк в овечьей шкуре» он вызывает настоящий ажиотаж. Он, безусловно, один из самых ярких членов семьи Jolly.', 2499, 1, 1, 25, 'Products\\jolly_maeh\\NICI48532-25\\48532_01_HA_Frei_200x200.jpg', 0, 0, 25, 19, 20, 'плюш/полиэстер', ' полиэфирное волокно (полиэстер)', 'от 12 месяцев', 'можно стирать на деликатном режиме при температуре 30 градусов', NULL, NULL, NULL),
(12, 'NICI47633-22', 'Мягкая игрушка Единорог Pink Diamond', 'Красочный мир единорогов от NICI с единорогом Theodor и его друзьями полон волшебства и магии. Интересные мягкие игрушки и подарочные товары, такие как подушки и брелоки, просто создадут вам хорошее настроение. Идеальная коллекция для тех, кто любит единорогов.', 'Pink Diamond привносит сияние в волшебный мир единорогов Theodor от NICI и переносит поклонников единорогов всех возрастов в царство магии. Розовый единорог Pink Diamond из переливающегося плюша с белой гривой и хвостом выглядит очень очаровательно. Блестящий розовый рог на лбу и благородная бриллиантовая вышивка на спине подчеркивают восхитительный вид игрушки. Благодаря мягкому пушистому плюшевому материалу стоячий единорог Pink Diamond идеально подходит для объятий, мечтаний и любви.', 1999, 1, 2, 22, 'Products\\unicorn_theodor\\NICI47633-22\\47634_01_HA_Frei_200x200.jpg', 0, 0, 22, 10, 25, 'плюш/полиэстер', 'полиэфирное волокно (полиэстер)', 'от 0 месяцев', 'рекомендуется ручная стирка', NULL, NULL, NULL),
(13, 'NICI47634-32', 'Мягкая игрушка Единорог Pink Diamond', 'Красочный мир единорогов от NICI с единорогом Theodor и его друзьями полон волшебства и магии. Интересные мягкие игрушки и подарочные товары, такие как подушки и брелоки, просто создадут вам хорошее настроение. Идеальная коллекция для тех, кто любит единорогов.', 'Pink Diamond привносит сияние в волшебный мир единорогов Theodor от NICI и переносит поклонников единорогов всех возрастов в царство магии. Розовый единорог Pink Diamond из переливающегося плюша с белой гривой и хвостом выглядит очень очаровательно. Блестящий розовый рог на лбу и благородная бриллиантовая вышивка на спине подчеркивают восхитительный вид игрушки. Благодаря мягкому пушистому плюшевому материалу стоячий единорог Pink Diamond идеально подходит для объятий, мечтаний и любви.', 2799, 1, 2, 32, 'Products\\unicorn_theodor\\NICI47634-32\\47634_01_HA_Frei_200x200.jpg', 0, 0, 32, 15, 34, 'плюш/полиэстер', 'полиэфирное волокно (полиэстер)', 'от 0 месяцев', 'рекомендуется ручная стирка', NULL, NULL, NULL),
(14, 'NICI47630-10', 'Брелок Единорог Pink Diamond', 'Красочный мир единорогов от NICI с единорогом Theodor и его друзьями полон волшебства и магии. Интересные мягкие игрушки и подарочные товары, такие как подушки и брелоки, просто создадут вам хорошее настроение. Идеальная коллекция для тех, кто любит единорогов.', 'Pink Diamond привносит сияние в очаровательный мир единорогов Theodor и его друзей от NICI. Единорог в виде брелка для ключей размером 10 см, сделанный из очень мягкого плюшевого материала NICI, сопровождает поклонников единорогов всех возрастов . Розовый единорог Pink Diamond из блестящего плюша с белой гривой и хвостом выглядит очень очаровательно. Блестящий розовый рог на лбу и благородная бриллиантовая вышивка на боку действительно привлекают внимание. Брелок имеет прочное металлическое кольцо для ключей, идеально подходящее для связки ключей или украшения рюкзака, ранца или сумочки.', 799, 2, 2, 10, 'Products\\unicorn_theodor\\NICI47630-10\\47630_01_HA_Frei_200x200.jpg', 0, 0, 10, 4, 9, 'плюш/полиэстер', 'полиэфирное волокно (полиэстер)', 'от 3 лет', 'рекомендуется ручная стирка', NULL, NULL, NULL),
(15, 'NICI47631-12', 'Магнит Единорог Pink Diamond', 'Красочный мир единорогов от NICI с единорогом Theodor и его друзьями полон волшебства и магии. Интересные мягкие игрушки и подарочные товары, такие как подушки и брелоки, просто создадут вам хорошее настроение. Идеальная коллекция для тех, кто любит единорогов.', 'Pink Diamond придает блеск волшебному миру единорогов Theodor и его друзья от NICI. С помощью четырех невидимых магнитов в маленьких ножках единорог прилипает ко всем металлическим предметам и поверхностям, таким как двери холодильника, обогреватели, дверные рамы и многое другое. Поклонникам единорогов всех возрастов понравится MagNICI высотой 12 см, сделанный из очень мягкого плюшевого материала NICI. Розовый единорог Pink Diamond из блестящего плюша с белой гривой и хвостом выглядит очень очаровательно. Блестящий розовый рог на лбу и благородная бриллиантовая вышивка на боку действительно привлекают внимание. Идеальный подарок для каждого.', 799, 3, 2, 12, 'Products\\unicorn_theodor\\NICI47631-12\\47631_01_HA_Frei_200x200.jpg', 0, 0, 5, 12, 8, 'плюш/полиэстер', 'полиэфирное волокно (полиэстер)', 'от 3 лет', 'рекомендуется ручная стирка', NULL, NULL, NULL),
(16, 'NICI47636-30', 'Подушка Единорог Pink Diamond', 'Красочный мир единорогов от NICI с единорогом Theodor и его друзьями полон волшебства и магии. Интересные мягкие игрушки и подарочные товары, такие как подушки и брелоки, просто создадут вам хорошее настроение. Идеальная коллекция для тех, кто любит единорогов.', 'Pink Diamond привносит сияние в волшебный мир единорогов Theodor и его друзей от NICI и переносит поклонников единорогов всех возрастов в царство магии. Pink Diamond в виде мягкой игрушечной подушки 2-в-1 — мягкая игрушка и подушка в одном — очень милая, а также очень практичная. Форму розовой леди-единорога из блестящего плюша с белой гривой и хвостом, блестящим розовым рогом на лбу и элегантной ромбовидной вышивкой на боку можно изменить с помощью небольшой застежки-липучки на нижней стороне. Если подушка закрыта на липучку, Pink Diamond стоит перед вами на четырех ножках. Если открыть застежку-липучку, прямоугольная (40 х 30 см) мягкая плюшевая подушечка создается как по волшебству. Идеально подходит для игр, объятий, мечтаний и любви.', 2799, 4, 2, 30, 'Products\\unicorn_theodor\\NICI47636-30\\47636_01_HA_Frei_200x200.jpg', 0, 0, 20, 40, 30, 'плюш/полиэстер', 'полиэфирное волокно (полиэстер)', 'от 12 месяцев', 'рекомендуется ручная стирка', NULL, NULL, NULL),
(17, 'NICI47652-32', 'Мягкая игрушка Единорог Diamond Dust', 'Красочный мир единорогов от NICI с единорогом Theodor и его друзьями полон волшебства и магии. Интересные мягкие игрушки и подарочные товары, такие как подушки и брелоки, просто создадут вам хорошее настроение. Идеальная коллекция для тех, кто любит единорогов.', 'Pink Diamond привносит сияние в волшебный мир единорогов Theodor от NICI и переносит поклонников единорогов всех возрастов в царство магии. Черно-серый единорог Diamond Dust из блестящего плюша с розовой гривой и хвостом выглядит очень очаровательно с блестящим рогом на лбу и благородной бриллиантовой вышивкой на спине. Благодаря мягкому плюшевому материалу стоячий единорог Diamond Dust идеально подходит для объятий, мечтаний и любви.', 2799, 1, 2, 32, 'Products\\unicorn_theodor\\NICI47652-32\\47652_01_HA_Frei_200x200.jpg', 10, 0, 32, 15, 34, 'плюш/полиэстер', 'полиэфирное волокно (полиэстер)', 'от 0 месяцев', 'рекомендуется ручная стирка', NULL, NULL, NULL),
(18, 'NICI47653-45', 'Мягкая игрушка Единорог Diamond Dust', 'Красочный мир единорогов от NICI с единорогом Theodor и его друзьями полон волшебства и магии. Интересные мягкие игрушки и подарочные товары, такие как подушки и брелоки, просто создадут вам хорошее настроение. Идеальная коллекция для тех, кто любит единорогов.', 'Pink Diamond привносит сияние в волшебный мир единорогов Theodor от NICI и переносит поклонников единорогов всех возрастов в царство магии. Черно-серый единорог Diamond Dust из блестящего плюша с розовой гривой и хвостом выглядит очень очаровательно с блестящим рогом на лбу и благородной бриллиантовой вышивкой на спине. Благодаря мягкому плюшевому материалу стоячий единорог Diamond Dust идеально подходит для объятий, мечтаний и любви.', 4499, 1, 2, 45, 'Products\\unicorn_theodor\\NICI47653-45\\47653_01_HA_Frei_200x200.jpg', 0, 0, 45, 21, 41, 'плюш/полиэстер', 'полиэфирное волокно (полиэстер)', 'от 0 месяцев', 'рекомендуется ручная стирка', NULL, NULL, NULL),
(19, 'NICI47648-10', 'Брелок Единорог Diamond Dust', 'Красочный мир единорогов от NICI с единорогом Theodor и его друзьями полон волшебства и магии. Интересные мягкие игрушки и подарочные товары, такие как подушки и брелоки, просто создадут вам хорошее настроение. Идеальная коллекция для тех, кто любит единорогов.', 'Diamond Dust привносит сияние в очаровательный мир единорогов Theodor и его друзей от NICI. Единорог в виде брелка для ключей размером 10 см, сделанный из очень мягкого плюшевого материала NICI, сопровождает поклонников единорогов всех возрастов . Черно-серый единорог Diamond Dust из блестящего плюша с розовой гривой и хвостом выглядит очень очаровательно с блестящим рогом на лбу и благородной бриллиантовой вышивкой на боку и привлекает внимание. Брелок имеет прочное металлическое кольцо для ключей, идеально подходящее для связки ключей или украшения рюкзака, ранца или сумочки.', 799, 2, 2, 10, 'Products\\unicorn_theodor\\NICI47648-10\\47648_01_HA_Frei_200x200.jpg', 0, 0, 10, 4, 9, 'плюш/полиэстер', 'полиэфирное волокно (полиэстер)', 'от 3 лет', 'рекомендуется ручная стирка', NULL, NULL, NULL),
(20, 'NICI47649-12', 'Магнит Единорог Diamond Dust', 'Красочный мир единорогов от NICI с единорогом Theodor и его друзьями полон волшебства и магии. Интересные мягкие игрушки и подарочные товары, такие как подушки и брелоки, просто создадут вам хорошее настроение. Идеальная коллекция для тех, кто любит единорогов.', 'Diamond Dust придает блеск волшебному миру единорогов Theodor и его друзей от NICI. С помощью четырех невидимых магнитов в маленьких ножках единорог прилипает ко всем металлическим предметам и поверхностям, таким как двери холодильника, обогреватели, дверные рамы и многое другое. Поклонникам единорогов всех возрастов понравится MagNICI высотой 12 см, сделанный из очень мягкого плюшевого материала NICI. Черно-серый единорог Diamond Dust из блестящего плюша с розовой гривой и хвостом выглядит очень очаровательно. Блестящий розовый рог на лбу и благородная бриллиантовая вышивка на боку действительно привлекают внимание. Идеальный подарок для каждого.', 799, 3, 2, 12, 'Products\\unicorn_theodor\\NICI47649-12\\47649_01_HA_Frei_200x200.jpg', 0, 0, 5, 8, 12, 'плюш/полиэстер', 'полиэфирное волокно (полиэстер)', 'от 3 лет', 'рекомендуется ручная стирка', NULL, NULL, NULL),
(21, 'NICI47654-30', 'Подушка Единорог Diamond Dust', 'Красочный мир единорогов от NICI с единорогом Theodor и его друзьями полон волшебства и магии. Интересные мягкие игрушки и подарочные товары, такие как подушки и брелоки, просто создадут вам хорошее настроение. Идеальная коллекция для тех, кто любит единорогов.', 'Diamond Dust привносит сияние в волшебный мир единорогов Theodor и его друзей от NICI и переносит поклонников единорогов всех возрастов в царство магии. Diamond Dust в виде мягкой игрушечной подушки 2-в-1 — мягкая игрушка и подушка в одном — очень милая, а также очень практичная. Форму черно-серого единорога из блестящего плюша с розовой гривой и хвостом, блестящим рогом на лбу и элегантной ромбовидной вышивкой на боку можно изменить с помощью маленькой застежки-липучки на нижней стороне. Если подушка закрыта на липучку, Diamond Dust стоит перед вами на четырех ножках. Если открыть застежку-липучку, прямоугольная (40 х 30 см) мягкая плюшевая подушечка создается как по волшебству. Идеально подходит для игр, объятий, мечтаний и любви.', 2799, 4, 2, 30, 'Products\\unicorn_theodor\\NICI47654-30\\47654_01_HA_Frei_200x200.jpg', 0, 0, 20, 40, 30, 'плюш/полиэстер', 'полиэфирное волокно (полиэстер)', 'от 12 месяцев', 'рекомендуется ручная стирка', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preview_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int UNSIGNED DEFAULT '0',
  `type` enum('large','small') COLLATE utf8mb4_unicode_ci NOT NULL,
  `counter` int UNSIGNED DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `path`, `preview_path`, `parent_id`, `type`, `counter`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 7, 'Products\\jolly_maeh\\NICI48531-25\\48531_01_HA_600x600.jpg', 'Products\\jolly_maeh\\NICI48531-25\\48531_01_200_200.jpg', 0, 'large', 1, NULL, NULL, NULL),
(2, 7, 'Products\\jolly_maeh\\NICI48531-25\\48531_01_200_200.jpg', NULL, 1, 'small', 1, NULL, NULL, NULL),
(3, 7, 'Products\\jolly_maeh\\NICI48531-25\\48531_02_ZA_600x600.jpg', 'Products\\jolly_maeh\\NICI48531-25\\48531_02_200x200.jpg', 0, 'large', 2, NULL, NULL, NULL),
(4, 7, 'Products\\jolly_maeh\\NICI48531-25\\48531_02_200x200.jpg', NULL, 3, 'small', 2, NULL, NULL, NULL),
(5, 7, 'Products\\jolly_maeh\\NICI48531-25\\48531_03_ZA_600x600.jpg', 'Products\\jolly_maeh\\NICI48531-25\\48531_03_200x200.jpg', 0, 'large', 3, NULL, NULL, NULL),
(6, 7, 'Products\\jolly_maeh\\NICI48531-25\\48531_03_200x200.jpg', NULL, 5, 'small', 3, NULL, NULL, NULL),
(7, 7, 'Products\\jolly_maeh\\NICI48531-25\\48531_04_ZA_600x600.jpg', 'Products\\jolly_maeh\\NICI48531-25\\48531_04_200x200.jpg', 0, 'large', 4, NULL, NULL, NULL),
(8, 7, 'Products\\jolly_maeh\\NICI48531-25\\48531_04_200x200.jpg', NULL, 7, 'small', 4, NULL, NULL, NULL),
(9, 7, 'Products\\jolly_maeh\\NICI48531-25\\48531_14_Milieu_600x600.jpg', 'Products\\jolly_maeh\\NICI48531-25\\48531_14_200x200.jpg', 0, 'large', 5, NULL, NULL, NULL),
(10, 7, 'Products\\jolly_maeh\\NICI48531-25\\48531_14_200x200.jpg', NULL, 9, 'small', 5, NULL, NULL, NULL),
(11, 8, 'Products\\jolly_maeh\\NICI48533-25\\48533_01_HA_Frei_600x600.jpg', 'Products\\jolly_maeh\\NICI48533-25\\48533_01_HA_Frei_200x200.jpg', 0, 'large', 1, NULL, NULL, NULL),
(12, 8, 'Products\\jolly_maeh\\NICI48533-25\\48533_01_HA_Frei_200x200.jpg', NULL, 11, 'small', 1, NULL, NULL, NULL),
(13, 8, 'Products\\jolly_maeh\\NICI48533-25\\48533_02_ZA_Frei_600x600.jpg', 'Products\\jolly_maeh\\NICI48533-25\\48533_02_ZA_Frei_200x200.jpg', 0, 'large', 2, NULL, NULL, NULL),
(14, 8, 'Products\\jolly_maeh\\NICI48533-25\\48533_02_ZA_Frei_200x200.jpg', NULL, 13, 'small', 2, NULL, NULL, NULL),
(15, 8, 'Products\\jolly_maeh\\NICI48533-25\\48533_03_ZA_Frei_600x600.jpg', 'Products\\jolly_maeh\\NICI48533-25\\48533_03_ZA_Frei_200x200.jpg', 0, 'large', 3, NULL, NULL, NULL),
(16, 8, 'Products\\jolly_maeh\\NICI48533-25\\48533_03_ZA_Frei_200x200.jpg', NULL, 15, 'small', 3, NULL, NULL, NULL),
(17, 8, 'Products\\jolly_maeh\\NICI48533-25\\48533_04_ZA_Frei_600x600.jpg', 'Products\\jolly_maeh\\NICI48533-25\\48533_04_ZA_Frei_200x200.jpg', 0, 'large', 4, NULL, NULL, NULL),
(18, 8, 'Products\\jolly_maeh\\NICI48533-25\\48533_04_ZA_Frei_200x200.jpg', NULL, 17, 'small', 4, NULL, NULL, NULL),
(19, 8, 'Products\\jolly_maeh\\NICI48533-25\\48533_10_48532_48530_48531_48534_Milieu_600x600.jpg', 'Products\\jolly_maeh\\NICI48533-25\\48533_10_48532_48530_48531_48534_Milieu_200x200.jpg', 0, 'large', 5, NULL, NULL, NULL),
(20, 8, 'Products\\jolly_maeh\\NICI48533-25\\48533_10_48532_48530_48531_48534_Milieu_200x200.jpg', NULL, 19, 'small', 5, NULL, NULL, NULL),
(21, 8, 'Products\\jolly_maeh\\NICI48533-25\\48533_11_48532_48530_48531_48534_Milieu_600x600.jpg', 'Products\\jolly_maeh\\NICI48533-25\\48533_11_48532_48530_48531_48534_Milieu_200x200.jpg', 0, 'large', 6, NULL, NULL, NULL),
(22, 8, 'Products\\jolly_maeh\\NICI48533-25\\48533_11_48532_48530_48531_48534_Milieu_200x200.jpg', NULL, 21, 'small', 6, NULL, NULL, NULL),
(23, 8, 'Products\\jolly_maeh\\NICI48533-25\\48533_12_48532_48530_48531_48534_Milieu_600x600.jpg', 'Products\\jolly_maeh\\NICI48533-25\\48533_12_48532_48530_48531_48534_Milieu_200x200.jpg', 0, 'large', 7, NULL, NULL, NULL),
(24, 8, 'Products\\jolly_maeh\\NICI48533-25\\48533_12_48532_48530_48531_48534_Milieu_200x200.jpg', NULL, 23, 'small', 7, NULL, NULL, NULL),
(25, 8, 'Products\\jolly_maeh\\NICI48533-25\\48533_13_Milieu_600x600.jpg', 'Products\\jolly_maeh\\NICI48533-25\\48533_13_Milieu_200x200.jpg', 0, 'large', 8, NULL, NULL, NULL),
(26, 8, 'Products\\jolly_maeh\\NICI48533-25\\48533_13_Milieu_200x200.jpg', NULL, 25, 'small', 8, NULL, NULL, NULL),
(27, 9, 'Products\\jolly_maeh\\NICI48534-25\\48534_01_HA_Frei_600x600.jpg', 'Products\\jolly_maeh\\NICI48534-25\\48534_01_HA_Frei_200x200.jpg', 0, 'large', 1, NULL, NULL, NULL),
(28, 9, 'Products\\jolly_maeh\\NICI48534-25\\48534_01_HA_Frei_200x200.jpg', NULL, 27, 'small', 1, NULL, NULL, NULL),
(29, 9, 'Products\\jolly_maeh\\NICI48534-25\\48534_02_ZA_Frei_600x600.jpg', 'Products\\jolly_maeh\\NICI48534-25\\48534_02_ZA_Frei_200x200.jpg', 0, 'large', 2, NULL, NULL, NULL),
(30, 9, 'Products\\jolly_maeh\\NICI48534-25\\48534_02_ZA_Frei_200x200.jpg', NULL, 29, 'small', 2, NULL, NULL, NULL),
(31, 9, 'Products\\jolly_maeh\\NICI48534-25\\48534_03_ZA_Frei_600x600.jpg', 'Products\\jolly_maeh\\NICI48534-25\\48534_03_ZA_Frei_200x200.jpg', 0, 'large', 3, NULL, NULL, NULL),
(32, 9, 'Products\\jolly_maeh\\NICI48534-25\\48534_03_ZA_Frei_200x200.jpg', NULL, 31, 'small', 3, NULL, NULL, NULL),
(33, 9, 'Products\\jolly_maeh\\NICI48534-25\\48534_04_ZA_Frei_600x600.jpg', 'Products\\jolly_maeh\\NICI48534-25\\48534_04_ZA_Frei_200x200.jpg', 0, 'large', 4, NULL, NULL, NULL),
(34, 9, 'Products\\jolly_maeh\\NICI48534-25\\48534_04_ZA_Frei_200x200.jpg', NULL, 33, 'small', 4, NULL, NULL, NULL),
(35, 9, 'Products\\jolly_maeh\\NICI48534-25\\48534_16_Milieu_600x600.jpg', 'Products\\jolly_maeh\\NICI48534-25\\48534_16_Milieu_200x200.jpg', 0, 'large', 5, NULL, NULL, NULL),
(36, 9, 'Products\\jolly_maeh\\NICI48534-25\\48534_16_Milieu_200x200.jpg', NULL, 35, 'small', 5, NULL, NULL, NULL),
(37, 10, 'Products\\jolly_maeh\\NICI48530-25\\48530_01_HA_Frei_600x600.jpg', 'Products\\jolly_maeh\\NICI48530-25\\48530_01_HA_Frei_200x200.jpg', 0, 'large', 1, NULL, NULL, NULL),
(38, 10, 'Products\\jolly_maeh\\NICI48530-25\\48530_01_HA_Frei_200x200.jpg', NULL, 37, 'small', 1, NULL, NULL, NULL),
(39, 10, 'Products\\jolly_maeh\\NICI48530-25\\48530_02_ZA_Frei_600x600.jpg', 'Products\\jolly_maeh\\NICI48530-25\\48530_02_ZA_Frei_200x200.jpg', 0, 'large', 2, NULL, NULL, NULL),
(40, 10, 'Products\\jolly_maeh\\NICI48530-25\\48530_02_ZA_Frei_200x200.jpg', NULL, 39, 'small', 2, NULL, NULL, NULL),
(41, 10, 'Products\\jolly_maeh\\NICI48530-25\\48530_03_ZA_Frei_600x600.jpg', 'Products\\jolly_maeh\\NICI48530-25\\48530_03_ZA_Frei_200x200.jpg', 0, 'large', 3, NULL, NULL, NULL),
(42, 10, 'Products\\jolly_maeh\\NICI48530-25\\48530_03_ZA_Frei_200x200.jpg', NULL, 41, 'small', 3, NULL, NULL, NULL),
(43, 10, 'Products\\jolly_maeh\\NICI48530-25\\48530_04_ZA_Frei_600x600.jpg', 'Products\\jolly_maeh\\NICI48530-25\\48530_04_ZA_Frei_200x200.jpg', 0, 'large', 4, NULL, NULL, NULL),
(44, 10, 'Products\\jolly_maeh\\NICI48530-25\\48530_04_ZA_Frei_200x200.jpg', NULL, 43, 'small', 4, NULL, NULL, NULL),
(45, 10, 'Products\\jolly_maeh\\NICI48530-25\\48530_15_Milieu_600x600.jpg', 'Products\\jolly_maeh\\NICI48530-25\\48530_15_Milieu_200x200.jpg', 0, 'large', 5, NULL, NULL, NULL),
(46, 10, 'Products\\jolly_maeh\\NICI48530-25\\48530_15_Milieu_200x200.jpg', NULL, 45, 'small', 5, NULL, NULL, NULL),
(47, 11, 'Products\\jolly_maeh\\NICI48532-25\\48532_01_HA_Frei_600x600.jpg', 'Products\\jolly_maeh\\NICI48532-25\\48532_01_HA_Frei_200x200.jpg', 0, 'large', 1, NULL, NULL, NULL),
(48, 11, 'Products\\jolly_maeh\\NICI48532-25\\48532_01_HA_Frei_200x200.jpg', NULL, 47, 'small', 1, NULL, NULL, NULL),
(49, 11, 'Products\\jolly_maeh\\NICI48532-25\\48532_02_ZA_Frei_600x600.jpg', 'Products\\jolly_maeh\\NICI48532-25\\48532_02_ZA_Frei_200x200.jpg', 0, 'large', 2, NULL, NULL, NULL),
(50, 11, 'Products\\jolly_maeh\\NICI48532-25\\48532_02_ZA_Frei_200x200.jpg', NULL, 49, 'small', 2, NULL, NULL, NULL),
(51, 11, 'Products\\jolly_maeh\\NICI48532-25\\48532_03_ZA_Frei_600x600.jpg', 'Products\\jolly_maeh\\NICI48532-25\\48532_03_ZA_Frei_200x200.jpg', 0, 'large', 3, NULL, NULL, NULL),
(52, 11, 'Products\\jolly_maeh\\NICI48532-25\\48532_03_ZA_Frei_200x200.jpg', NULL, 51, 'small', 3, NULL, NULL, NULL),
(53, 11, 'Products\\jolly_maeh\\NICI48532-25\\48532_04_ZA_Frei_600x600.jpg', 'Products\\jolly_maeh\\NICI48532-25\\48532_04_ZA_Frei_200x200.jpg', 0, 'large', 4, NULL, NULL, NULL),
(54, 11, 'Products\\jolly_maeh\\NICI48532-25\\48532_04_ZA_Frei_200x200.jpg', NULL, 53, 'small', 4, NULL, NULL, NULL),
(55, 11, 'Products\\jolly_maeh\\NICI48532-25\\48532_05_ZA_Frei_600x600.jpg', 'Products\\jolly_maeh\\NICI48532-25\\48532_05_ZA_Frei_200x200.jpg', 0, 'large', 5, NULL, NULL, NULL),
(56, 11, 'Products\\jolly_maeh\\NICI48532-25\\48532_05_ZA_Frei_200x200.jpg', NULL, 55, 'small', 5, NULL, NULL, NULL),
(57, 11, 'Products\\jolly_maeh\\NICI48532-25\\48532_17_Milieu_600x600.jpg', 'Products\\jolly_maeh\\NICI48532-25\\48532_17_Milieu_200x200.jpg', 0, 'large', 6, NULL, NULL, NULL),
(58, 11, 'Products\\jolly_maeh\\NICI48532-25\\48532_17_Milieu_200x200.jpg', NULL, 57, 'small', 6, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_subscribe` tinyint(1) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_code_unique` (`code`);

--
-- Индексы таблицы `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `collections_code_unique` (`code`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_article_unique` (`article`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_collection_id_foreign` (`collection_id`);

--
-- Индексы таблицы `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Индексы таблицы `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscriptions_email_unique` (`email`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `collections`
--
ALTER TABLE `collections`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT для таблицы `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `products_collection_id_foreign` FOREIGN KEY (`collection_id`) REFERENCES `collections` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
