-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Апр 27 2022 г., 18:18
-- Версия сервера: 5.7.30-log-cll-lve
-- Версия PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `novastud_io`
--

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo_dark` text COLLATE utf8mb4_unicode_ci,
  `logo_color` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`id`, `logo_dark`, `logo_color`, `created_at`, `updated_at`) VALUES
(9, '/img_clients/xY5RLhIYuc.svg', '/img_clients/5Nlicnorbi.svg', '2022-03-01 19:41:08', '2022-03-01 19:41:28'),
(6, '/img_clients/E3GXJFnNuB.svg', '/img_clients/ixW7cYvb9J.svg', '2022-03-01 19:40:06', '2022-03-01 19:40:06'),
(5, '/img_clients/ezLVcIViqt.svg', '/img_clients/3OUolRfzVt.svg', '2022-03-01 19:39:50', '2022-03-01 19:40:32'),
(4, '/img_clients/J10fK6gLQq.svg', '/img_clients/eItZq2Pxuf.svg', '2022-03-01 19:39:14', '2022-03-01 19:39:39'),
(8, '/img_clients/AYbNrVTKWv.svg', '/img_clients/griHmqvRSz.svg', '2022-03-01 19:40:58', '2022-03-01 19:40:58'),
(10, '/img_clients/fDUQnaHJIe.svg', '/img_clients/8pnOw9z3Wl.svg', '2022-03-01 19:41:37', '2022-03-01 19:41:37'),
(11, '/img_clients/9xeSzdEND0.svg', '/img_clients/dcxkFO84vq.svg', '2022-03-01 19:41:47', '2022-03-01 19:41:47'),
(12, '/img_clients/9OWdxLB09D.svg', '/img_clients/PWQHAoLQOu.svg', '2022-03-01 19:41:56', '2022-03-01 19:41:56'),
(13, '/img_clients/ILVwnZbdBi.svg', '/img_clients/YqDiw7PO2M.svg', '2022-03-01 19:42:06', '2022-03-01 19:42:06'),
(14, '/img_clients/G0KevIFzNU.svg', '/img_clients/jx8FBTvDbf.svg', '2022-03-01 19:42:15', '2022-03-01 19:42:15'),
(15, '/img_clients/cw6dKpMuNu.svg', '/img_clients/QT53fBZ8op.svg', '2022-03-01 19:42:25', '2022-03-01 19:42:25'),
(16, '/img_clients/OF8vVC5dh4.svg', '/img_clients/TpkJbxSBnr.svg', '2022-03-01 19:42:35', '2022-03-01 19:42:35'),
(17, '/img_clients/XBKwoBV26B.svg', '/img_clients/pFRek9GD6c.svg', '2022-03-01 19:42:44', '2022-03-01 19:42:44'),
(18, '/img_clients/ebh0CwPNqo.svg', '/img_clients/yCkUSMOV8g.svg', '2022-03-01 19:42:52', '2022-03-01 19:42:52'),
(19, '/img_clients/MXC7ZcynAb.svg', '/img_clients/W3Dtm30NhC.svg', '2022-03-01 19:43:04', '2022-03-01 19:43:04'),
(20, '/img_clients/4lkrig6Ri4.svg', '/img_clients/pnVCrN0g4q.svg', '2022-03-01 19:43:14', '2022-03-01 19:43:14');

-- --------------------------------------------------------

--
-- Структура таблицы `counts`
--

CREATE TABLE `counts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip` int(11) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_company` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `view` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `name_company`, `phone`, `comment`, `view`, `created_at`, `updated_at`) VALUES
(107, 'Alisher', 'Novastudio', '+998 99 999 99 99', NULL, 0, '2022-04-27 07:22:19', '2022-04-27 07:22:19'),
(106, 'Равшанов Самариддин', 'Novas', '+998 12 346 5_ __', NULL, 0, '2022-04-25 06:05:13', '2022-04-25 06:05:13'),
(105, 'Равшанов Самариддин', 'Novas', '+998 12 346 5_ __', NULL, 0, '2022-04-25 06:03:52', '2022-04-25 06:03:52'),
(104, 'Равшанов Самариддин', 'Novas', '+998 12 346 5_ __', NULL, 0, '2022-04-25 06:02:45', '2022-04-25 06:02:45'),
(102, 'Равшанов Самариддин', 'Novas', '+998 12 346 5_ __', NULL, 0, '2022-04-25 06:02:21', '2022-04-25 06:02:21'),
(103, 'Равшанов Самариддин', 'Novas', '+998 12 346 5_ __', NULL, 0, '2022-04-25 06:02:26', '2022-04-25 06:02:26'),
(101, 'Равшанов Самариддин', 'Novas', '+998 12 346 5_ __', NULL, 0, '2022-04-25 05:59:02', '2022-04-25 05:59:02'),
(100, 'Равшанов Самариддин', 'Novas', '+998 12 346 5_ __', NULL, 0, '2022-04-25 05:57:46', '2022-04-25 05:57:46'),
(99, 'Равшанов Самариддин', 'Novas', '+998 12 346 5_ __', NULL, 0, '2022-04-25 05:51:18', '2022-04-25 05:51:18'),
(98, 'Равшанов Самариддин', 'Novas', '+998 12 346 5_ __', NULL, 0, '2022-04-25 05:45:18', '2022-04-25 05:45:18'),
(97, 'Sam', 'Novas', '+998 12 346 5_ __', NULL, 0, '2022-04-25 05:42:21', '2022-04-25 05:42:21'),
(96, 'asd', 'Novas', '+998 12 346 5_ __', NULL, 0, '2022-04-25 05:41:08', '2022-04-25 05:41:08'),
(84, 'Самир', 'Novas', '+998 91 309 03 18', NULL, 0, '2022-04-22 06:15:43', '2022-04-22 06:15:43'),
(85, 'Самир', 'Novas', '+998 91 309 03 18', NULL, 0, '2022-04-22 06:16:34', '2022-04-22 06:16:34'),
(86, 'Rustam123', '000000', '+998 00 000 00 00', NULL, 0, '2022-04-24 18:38:40', '2022-04-24 18:38:40'),
(87, 'test', '132', '+998 31 231 23 12', NULL, 0, '2022-04-25 05:09:18', '2022-04-25 05:09:18'),
(88, 'Sam', 'Novas', '+998 12 346 5_ __', NULL, 0, '2022-04-25 05:27:28', '2022-04-25 05:27:28'),
(89, 'Sam', 'Novas', '+998 12 346 5_ __', NULL, 0, '2022-04-25 05:28:23', '2022-04-25 05:28:23'),
(90, 'Sam', 'Novas', '+998 12 346 5_ __', NULL, 0, '2022-04-25 05:30:13', '2022-04-25 05:30:13'),
(91, 'Sam', 'Novas', '+998 12 346 5_ __', NULL, 0, '2022-04-25 05:32:34', '2022-04-25 05:32:34'),
(92, 'Sam', 'Novas', '+998 12 346 5_ __', NULL, 0, '2022-04-25 05:33:31', '2022-04-25 05:33:31'),
(93, 'S', 'Novas', '+998 12 346 5_ __', NULL, 0, '2022-04-25 05:34:05', '2022-04-25 05:34:05'),
(94, 'Sam', 'Novas', '+998 12 346 5_ __', NULL, 0, '2022-04-25 05:36:42', '2022-04-25 05:36:42'),
(95, 'Sam', 'Novas', '+998 13 245 67 89', NULL, 0, '2022-04-25 05:38:32', '2022-04-25 05:38:32');

-- --------------------------------------------------------

--
-- Структура таблицы `langs`
--

CREATE TABLE `langs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prefix` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `langs`
--

INSERT INTO `langs` (`id`, `prefix`, `created_at`, `updated_at`) VALUES
(1, 'ru', NULL, NULL),
(2, 'uz', NULL, NULL),
(3, 'en', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_05_21_100000_create_teams_table', 1),
(7, '2020_05_21_200000_create_team_user_table', 1),
(8, '2020_05_21_300000_create_team_invitations_table', 1),
(9, '2022_02_25_050537_create_sessions_table', 1),
(10, '2022_02_27_105248_create_hellos_table', 1),
(11, '2022_02_28_053554_create_projects_table', 2),
(12, '2022_02_28_083551_create_project_categories_table', 3),
(13, '2022_02_28_084001_create_langs_table', 4),
(14, '2022_03_01_095539_create_project_bind_categories_table', 5),
(17, '2022_03_02_044710_create_clients_table', 7),
(16, '2022_03_02_045137_create_reviews_table', 6),
(18, '2022_03_03_024138_create_feedback_table', 8),
(19, '2022_03_04_042919_create_words_table', 9),
(20, '2022_03_06_234900_create_counts_table', 10),
(21, '2022_04_22_132612_create_seos_table', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` int(11) DEFAULT NULL,
  `header_ru` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_uz` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_en` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_ru` text COLLATE utf8mb4_unicode_ci,
  `description_uz` text COLLATE utf8mb4_unicode_ci,
  `description_en` text COLLATE utf8mb4_unicode_ci,
  `link` text COLLATE utf8mb4_unicode_ci,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `logo` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`id`, `number`, `header_ru`, `header_uz`, `header_en`, `description_ru`, `description_uz`, `description_en`, `link`, `photo`, `logo`, `created_at`, `updated_at`) VALUES
(9, 3, 'Bizning uylar', 'Bizning uylar', 'Bizning uylar', 'Один из ведущих девелоперов Узбекистана', 'Oʻzbekistondagi yetakchi developerlardan biri', 'One of the leading developers in Uzbekistan', 'https://bizninguylar.uz/', '/img_project/Yq9Wcwm387.webp', '/img_project/YwunLUsy0G.svg', '2022-03-01 13:18:43', '2022-04-05 08:30:55'),
(17, 21, 'Grand Capital Group', 'Grand Capital Group', 'Grand Capital Group', 'Динамично развивающаяся девелоперская компания', 'Dinamik rivojlanayotgan kompaniya', 'Dynamically developing development company', 'https://www.gcgroup.uz/', '/img_project/IRdQkgnOvQ.webp', NULL, '2022-03-09 04:43:28', '2022-04-05 08:52:40'),
(43, 1, 'Dream City', 'Dream City', 'Dream City', 'Один из ведущих девелоперов Узбекистана', 'Oʻzbekistondagi yetakchi quruvchi kompaniyalardan biri', 'One of the leading developers in Uzbekistan', 'https://dreamcity.uz/', '/img_project/FVsirKDXvN.webp', NULL, '2022-03-10 02:06:55', '2022-04-05 08:26:27'),
(12, 2, 'Stroy Mart', 'Stroy Mart', 'Stroy Mart', 'Крупнейший торговый центр в Средней Азии', 'Markaziy Osiyodagi eng yirik savdo markazi', 'The largest shopping center in Central Asiaa', 'http://stroy-mart.uz/', '/img_project/kZ6E1SyCVq.webp', '/img_project/xpR4XOnAxm.svg', '2022-03-01 13:21:17', '2022-04-05 08:28:16'),
(13, 4, 'Zarafshan City', 'Zarafshan City', 'Zarafshan City', 'Новостройки премиального уровня', 'Premium darajadagi yangi binolar', 'Premium level new buildings', 'https://zarafshangoldengroup.uz/', '/img_project/rtj9oqrbbm.webp', '/img_project/duClHCP58f.svg', '2022-03-01 13:24:37', '2022-04-05 08:31:26'),
(14, 5, 'Diamond Castle', 'Diamond Castle', 'Diamond Castle', 'Девелоперская компания', 'Developer kompaniyasi', 'Development company', 'http://diamondcastle.uz/', '/img_project/9Cc8B5NUFM.webp', '/img_project/GVKIHnooIs.svg', '2022-03-01 13:25:11', '2022-04-05 08:32:22'),
(23, 9, 'Gippokamp', 'Gippokamp', 'Gippokamp', 'Многопрофильная медицинская платформа', 'Ko\'p tarmoqli tibbiyot platformasi', 'Multidisciplinary medical platform', 'https://gippokamp.uz', '/img_project/b0yQtq9D7D.webp', NULL, '2022-03-09 06:03:57', '2022-04-05 08:38:05'),
(16, 6, 'Seoul Mun', 'Seoul Mun', 'Seoul Mun', 'Современный торгово-досуговый центр', 'Zamonaviy savdo va dam olish markazi', 'Modern shopping and leisure center', 'https://seoulmun.uz/server.php', '/img_project/UJPdmbcn8O.webp', NULL, '2022-03-09 04:41:51', '2022-04-05 08:33:13'),
(18, 7, 'Alfraganus', 'Alfraganus', 'Alfraganus', 'Первый торговый квартал под открытым небом', 'Birinchi ochiq osmon tagidagi savdo hududi', 'The first open-air shopping quarter', 'http://alfraganus.com/', '/img_project/KIiZIgifZP.webp', NULL, '2022-03-09 04:45:40', '2022-04-05 08:36:00'),
(19, 8, 'Hovlingiz', 'Hovlingiz', 'Hovlingiz', 'Закрытый коттеджный комплекс', 'Yopiq kottej majmuasi', 'Closed cottage complex', 'http://hovlingiz.uz/', '/img_project/fcXMU69W8w.webp', NULL, '2022-03-09 05:48:35', '2022-04-05 08:36:26'),
(20, 11, 'Pelikan Post', 'Pelikan Post', 'Pelikan Post', 'Доставка товаров из Турции в Узбекистан', 'Turkiyadan O\'zbekistonga tovarlar yetkazib berish', 'Delivery of goods from Turkey to Uzbekistan', 'https://pelikanpost.com/', '/img_project/ksJsFLrM0c.webp', NULL, '2022-03-09 05:59:08', '2022-04-05 08:39:47'),
(21, 12, 'Uti Cargo', 'Uti Cargo', 'Uti Cargo', 'Доставка товаров из Китая в Узбекистан под ключ', 'Xitoydan O\'zbekistonga tovarlarni kalit taslim asosida yetkazib berish', 'Delivery of goods from China to Uzbekistan on a turnkey basis', 'https://uticargo.uz/', '/img_project/jXoRR8au4v.webp', NULL, '2022-03-09 05:59:45', '2022-04-05 08:40:43'),
(22, 13, 'Ребята Букварята', 'Ребята Букварята', 'Ребята Букварята', 'Самый душевный частный детский садик в Ташкенте', 'Toshkentdagi eng ko`ngil ochar xususiy bolalar bog\'chasi', 'The most soulful private kindergarten in Tashkent', 'http://bukvaryata.uz/', '/img_project/nScFDm0PV1.webp', NULL, '2022-03-09 06:00:57', '2022-04-05 08:43:07'),
(24, 14, 'Karton Osiyo', 'Karton Osiyo', 'Karton Osiyo', 'Производитель качественной упаковки из гофрокартона', 'Sifatli gofrokarton qadoqlash ishlab chiqaruvchisi', 'Producer of quality corrugated cardboard packaging', 'http://upack.uz/welcome', '/img_project/GtWR8YopND.webp', NULL, '2022-03-09 06:05:01', '2022-04-05 08:44:03'),
(25, 15, 'Cells', 'Cells', 'Cells', 'Производитель 3D-панельных ограждений', '3D paneli asosida to`siqlar ishlab chiqaruvchi korxona', '3D Panel Fencing Manufacturer', 'http://cells.uz/', '/img_project/le2R1KiB2H.webp', NULL, '2022-03-09 06:05:24', '2022-04-05 08:45:55'),
(26, 16, 'Albatros Health Care', 'Albatros Health Care', 'Albatros Health Care', 'Официальный дистрибьютор компании Snibe Diagnostic', 'Snibe Diagnostic kompaniyasining rasmiy distribyutori', 'Official distributor of Snibe Diagnostic', 'http://albatros.uz/', '/img_project/UChRO07hNV.webp', NULL, '2022-03-09 06:05:55', '2022-04-05 08:46:28'),
(27, 17, 'Uzbegimotlari', 'Uzbegimotlari', 'Uzbegimotlari', 'Разведение лошадей Ахалтекинской породы', 'Axalteka zotli naslchilik otlari', 'Breeding horses of the Akhal-Teke breed', 'https://uzbegimotlari.uz/', '/img_project/Y46SSOPQdN.webp', NULL, '2022-03-09 06:06:19', '2022-04-05 08:47:03'),
(28, 18, 'Chamber', 'Chamber', 'Chamber', 'Торгово - промышленная палата Узбекистана', 'O‘zbekiston Savdo-sanoat palatasi', 'Chamber of Commerce and Industry of Uzbekistan', 'https://chamber.uz/uz/index', '/img_project/O0dzephpUg.webp', NULL, '2022-03-09 06:08:50', '2022-04-05 08:50:25'),
(29, 19, 'Maknoon Group', 'Maknoon Group', 'Maknoon Group', 'Студия архитектуры, дизайна и строительства', 'Arxitektura, dizayn va qurilish studiyasi', 'Architecture, design and construction studio', 'https://maknoongroup.com/', '/img_project/2PMUoKVls6.webp', NULL, '2022-03-09 06:10:53', '2022-04-05 08:51:19'),
(30, 20, 'Uzkabel', 'Uzkabel', 'Uzkabel', 'Производитель кабельно-проводниковой продукции', 'Kabel va sim mahsulotlari ishlab chiqaruvchisi', 'Manufacturer of cable and wire products', 'http://uzkabel.uz/', '/img_project/ySH2F3l9eJ.webp', NULL, '2022-03-09 06:11:30', '2022-04-05 08:52:03'),
(32, NULL, 'Торгово - промышленная палата Узбекистана', 'Торгово - промышленная палата Узбекистана', 'Торгово - промышленная палата Узбекистана', 'Разработка брендбука', 'Разработка брендбука', 'Разработка брендбука', NULL, '/img_project/LqzZagHFyI.webp', NULL, '2022-03-09 06:32:28', '2022-03-09 06:32:28'),
(33, NULL, 'Ucard', 'Ucard', 'Ucard', 'Разработка брендбука', 'Разработка брендбука', 'Разработка брендбука', NULL, '/img_project/mIdpKEf5w7.webp', NULL, '2022-03-09 06:41:20', '2022-03-09 06:41:20'),
(34, NULL, 'Silk Road', 'Silk Road', 'Silk Road', 'Разработка брендбука', 'Разработка брендбука', 'Разработка брендбука', NULL, '/img_project/R9oxMOURet.webp', NULL, '2022-03-09 06:42:41', '2022-03-09 06:42:41'),
(35, NULL, 'Bento', 'Bento', 'Bento', 'Разработка брендбука', 'Разработка брендбука', 'Разработка брендбука', NULL, '/img_project/qfobZVYram.webp', NULL, '2022-03-09 06:43:09', '2022-03-09 06:43:09'),
(36, NULL, 'Unex', 'Unex', 'Unex', 'Разработка брендбука', 'Разработка брендбука', 'Разработка брендбука', NULL, '/img_project/MEPH2PfNqp.webp', NULL, '2022-03-09 06:44:06', '2022-03-09 06:44:06'),
(37, NULL, 'Karton Osiyo', 'Karton Osiyo', 'Karton Osiyo', 'Разработка брендбука', 'Разработка брендбука', 'Разработка брендбука', NULL, '/img_project/dx1ouYm1oS.webp', NULL, '2022-03-09 06:44:36', '2022-03-09 06:44:36'),
(42, 22, 'Deya', 'Deya', 'Deya', 'Кондитерская корпорация', 'Qandolat korporatsiyasi', 'Confectionery Corporation', 'https://deya.uz/', '/img_project/ffW9sU61yl.webp', NULL, '2022-03-10 02:05:43', '2022-04-05 08:53:10');

-- --------------------------------------------------------

--
-- Структура таблицы `project_bind_categories`
--

CREATE TABLE `project_bind_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `project_bind_categories`
--

INSERT INTO `project_bind_categories` (`id`, `category_id`, `project_id`, `created_at`, `updated_at`) VALUES
(144, 1, 9, '2022-04-05 08:30:55', '2022-04-05 08:30:55'),
(143, 1, 12, '2022-04-05 08:28:16', '2022-04-05 08:28:16'),
(163, 1, 17, '2022-04-05 08:52:40', '2022-04-05 08:52:40'),
(61, 1, 8, '2022-03-09 06:02:28', '2022-03-09 06:02:28'),
(145, 1, 13, '2022-04-05 08:31:26', '2022-04-05 08:31:26'),
(146, 1, 14, '2022-04-05 08:32:22', '2022-04-05 08:32:22'),
(147, 1, 16, '2022-04-05 08:33:13', '2022-04-05 08:33:13'),
(164, 1, 42, '2022-04-05 08:53:10', '2022-04-05 08:53:10'),
(148, 1, 18, '2022-04-05 08:36:00', '2022-04-05 08:36:00'),
(149, 1, 19, '2022-04-05 08:36:26', '2022-04-05 08:36:26'),
(151, 1, 20, '2022-04-05 08:39:47', '2022-04-05 08:39:47'),
(152, 1, 21, '2022-04-05 08:40:43', '2022-04-05 08:40:43'),
(153, 1, 22, '2022-04-05 08:43:07', '2022-04-05 08:43:07'),
(150, 1, 23, '2022-04-05 08:38:05', '2022-04-05 08:38:05'),
(154, 1, 24, '2022-04-05 08:44:03', '2022-04-05 08:44:03'),
(155, 1, 25, '2022-04-05 08:45:55', '2022-04-05 08:45:55'),
(156, 1, 26, '2022-04-05 08:46:28', '2022-04-05 08:46:28'),
(157, 1, 27, '2022-04-05 08:47:03', '2022-04-05 08:47:03'),
(160, 1, 28, '2022-04-05 08:50:25', '2022-04-05 08:50:25'),
(161, 1, 29, '2022-04-05 08:51:19', '2022-04-05 08:51:19'),
(162, 1, 30, '2022-04-05 08:52:03', '2022-04-05 08:52:03'),
(141, 1, 43, '2022-04-05 08:26:27', '2022-04-05 08:26:27'),
(75, 6, 32, '2022-03-09 06:32:28', '2022-03-09 06:32:28'),
(77, 6, 33, '2022-03-09 06:41:41', '2022-03-09 06:41:41'),
(78, 6, 34, '2022-03-09 06:42:41', '2022-03-09 06:42:41'),
(79, 6, 35, '2022-03-09 06:43:09', '2022-03-09 06:43:09'),
(80, 6, 36, '2022-03-09 06:44:06', '2022-03-09 06:44:06'),
(81, 6, 37, '2022-03-09 06:44:36', '2022-03-09 06:44:36');

-- --------------------------------------------------------

--
-- Структура таблицы `project_categories`
--

CREATE TABLE `project_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ru` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_uz` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `project_categories`
--

INSERT INTO `project_categories` (`id`, `name_ru`, `name_uz`, `name_en`, `created_at`, `updated_at`) VALUES
(1, 'Сайты', 'Web saytlar', 'Websites', '2022-02-27 22:38:55', '2022-04-05 08:00:35'),
(3, 'Боты', 'Botlar', 'Bots', '2022-02-27 22:44:37', '2022-04-05 08:00:35'),
(4, 'Маркетинг', 'Marketing', 'Marketing', '2022-02-27 22:57:10', '2022-04-05 08:00:50'),
(5, 'Продвижение', 'Yurg\'azish', 'Promotion', '2022-02-27 23:54:28', '2022-04-05 08:03:14'),
(6, 'Брендинг', 'Brending', 'Брендинг', '2022-02-27 23:57:46', '2022-04-05 08:01:20');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `review` text COLLATE utf8mb4_unicode_ci,
  `file` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `about`, `review`, `file`, `created_at`, `updated_at`) VALUES
(2, 'Андрей Рябов', 'Директор департамента маркетинга ООО «Комбайновый завод «Ростсельмаш»', 'Благодарим коллектив NOVAS за плодотворную и результативную работу над новым сайтом компании Ростсельмаш Благодарим коллектив NOVAS за плодотворную и результативную работу над новым сайтом компании Ростсельмаш', '/img_review/rOKZy5mXhv.jpg', '2022-03-01 22:18:11', '2022-03-01 22:36:18');

-- --------------------------------------------------------

--
-- Структура таблицы `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `keywords` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `seos`
--

INSERT INTO `seos` (`id`, `link`, `title`, `description`, `keywords`, `created_at`, `updated_at`) VALUES
(1, ' ', 'Создание и разработка сайтов — NOVASTUDIOasd', 'NOVASTUDIO ➯ создатели лучших сайтов в Узбекистане с WOW эффектом ⭐ Находим инсайты и «хотелки» потребителей ⭐ Создаем уникальную ценность вашего бизнеса в глазах клиента', 'novastudio, novas, нова студия, лучшая веб студия, веб студия, вэб студия, разработка, разработка сайтов, создание сайтов, разработка сайтов в ташкенте, разработка сайтов в узбекистане, website development, website development tashkent, website development uzbekistan, веб студия, promo site, промо сайт, landing, landing page, лендинг, интернет магазин, internet magazin, internet do\'kon, веб дизайн, web design, web dizayn, смм, smm, social media marketing, seo, seo оптимизация сайта, продвижение сайта в гугл, продвижение сайта, разработка мобильных приложений, разработка мобильных приложений в ташкенте, mobil ilova yaratish, mobil ilova, veb sayt yaratish, web sayt yaratish, web sayt, veb sayt', '2022-04-22 08:34:55', '2022-04-22 08:57:31'),
(2, 'projects', 'Создание и разработка сайтов — NOVASTUDIO', 'NOVASTUDIO | Наши проекты', 'novastudio, novas, нова студия, лучшая веб студия, веб студия, вэб студия, разработка, разработка сайтов, создание сайтов, разработка сайтов в ташкенте, разработка сайтов в узбекистане, website development, website development tashkent, website development uzbekistan, веб студия, promo site, промо сайт, landing, landing page, лендинг, интернет магазин, internet magazin, internet do\'kon, веб дизайн, web design, web dizayn, смм, smm, social media marketing, seo, seo оптимизация сайта, продвижение сайта в гугл, продвижение сайта, разработка мобильных приложений, разработка мобильных приложений в ташкенте, mobil ilova yaratish, mobil ilova, veb sayt yaratish, web sayt yaratish, web sayt, veb sayt', '2022-04-22 08:55:04', '2022-04-26 05:38:31'),
(3, 'agency', 'Создание и разработка сайтов — NOVASTUDIO', 'NOVASTUDIO | О нас', 'novastudio, novas, нова студия, лучшая веб студия, веб студия, вэб студия, разработка, разработка сайтов, создание сайтов, разработка сайтов в ташкенте, разработка сайтов в узбекистане, website development, website development tashkent, website development uzbekistan, веб студия, promo site, промо сайт, landing, landing page, лендинг, интернет магазин, internet magazin, internet do\'kon, веб дизайн, web design, web dizayn, смм, smm, social media marketing, seo, seo оптимизация сайта, продвижение сайта в гугл, продвижение сайта, разработка мобильных приложений, разработка мобильных приложений в ташкенте, mobil ilova yaratish, mobil ilova, veb sayt yaratish, web sayt yaratish, web sayt, veb sayt', '2022-04-22 08:55:57', '2022-04-26 05:38:42'),
(4, 'services', 'Создание и разработка сайтов — NOVASTUDIO', 'NOVASTUDIO | Наши услуги', 'novastudio, novas, нова студия, лучшая веб студия, веб студия, вэб студия, разработка, разработка сайтов, создание сайтов, разработка сайтов в ташкенте, разработка сайтов в узбекистане, website development, website development tashkent, website development uzbekistan, веб студия, promo site, промо сайт, landing, landing page, лендинг, интернет магазин, internet magazin, internet do\'kon, веб дизайн, web design, web dizayn, смм, smm, social media marketing, seo, seo оптимизация сайта, продвижение сайта в гугл, продвижение сайта, разработка мобильных приложений, разработка мобильных приложений в ташкенте, mobil ilova yaratish, mobil ilova, veb sayt yaratish, web sayt yaratish, web sayt, veb sayt', '2022-04-22 08:56:38', '2022-04-26 05:38:11'),
(5, 'contacts', 'Создание и разработка сайтов — NOVASTUDIO', 'NOVASTUDIO | Наши контакты', 'novastudio, novas, нова студия, лучшая веб студия, веб студия, вэб студия, разработка, разработка сайтов, создание сайтов, разработка сайтов в ташкенте, разработка сайтов в узбекистане, website development, website development tashkent, website development uzbekistan, веб студия, promo site, промо сайт, landing, landing page, лендинг, интернет магазин, internet magazin, internet do\'kon, веб дизайн, web design, web dizayn, смм, smm, social media marketing, seo, seo оптимизация сайта, продвижение сайта в гугл, продвижение сайта, разработка мобильных приложений, разработка мобильных приложений в ташкенте, mobil ilova yaratish, mobil ilova, veb sayt yaratish, web sayt yaratish, web sayt, veb sayt', '2022-04-22 08:56:52', '2022-04-26 05:38:59');

-- --------------------------------------------------------

--
-- Структура таблицы `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('09BL3fL2LVuXcbS9W6IHkw8FFIrg7M5wHwnWS6Tw', NULL, '45.9.231.175', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVXdHWEdJRUlyWmNORmZhYWRDTUNaeFlkSWxmd0FBTHVzVzRIYUlwcCI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM0OiJodHRwczovL3d3dy5ub3Zhc3R1ZGlvLnV6L3NlcnZpY2VzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651063986),
('yJvBCwZVgHKW2mNsiIGtwKqPACJtyNetZJjzjlOT', NULL, '195.158.30.132', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiakZibTRZUkJZV2ttcEhZRUFaNnJqRUZja2s3anNvc3ZQRFNXQmMzMSI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1651062904),
('QVA4cI4FXgvLguLIjBs2WPq09LVE6unVLFffzTfL', NULL, '192.142.171.129', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36 Edg/94.0.992.47', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYjZNTVN6bGppZ2FZOUpwaHNRYmdzb3Y1ck4zdnRBMTgwWXFzQmFwYyI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwczovL3d3dy5ub3Zhc3R1ZGlvLnV6Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651062050),
('nrnumhuciqrkSHrhQZ1IGs11Epcys09wE2eNCfEd', NULL, '213.230.78.205', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/534.24 (KHTML, like Gecko) Chrome/89.0.4389.116 Safari/534.24 XiaoMi/MiuiBrowser/13.3.1-gn', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibm1TT1VSazdyZzZsSlhscThoZEgycVdJRTY4ZkdURFFrYXNCTEFaYiI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM0OiJodHRwczovL3d3dy5ub3Zhc3R1ZGlvLnV6L3NlcnZpY2VzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651060544),
('ZSPz61NjCdUwlNLeswzV1m2ujrPLEOvhSGgD9Vo0', NULL, '157.55.39.205', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiOFNycWJrTHk1bFFDMzlpWk9UaFVwVnI5Q09WSE4wdmlzdnlqb1VJcSI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwczovL3d3dy5ub3Zhc3R1ZGlvLnV6Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651059065),
('FnXkEmBzHpgtVhmOpPtDDQwmDYrmAmLsCCmgF4s4', NULL, '195.158.30.132', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.141 YaBrowser/22.3.2.644 Yowser/2.5 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibkc0REpHU0k3T0NkNFczTXhGdWUxcVlrNG4ydUttQ25JS1dxckxxMSI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwczovL3d3dy5ub3Zhc3R1ZGlvLnV6Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651059315),
('aFziXVxPP0wpmu0r2SA4EGmJXFeqc5WWtoZ0eY3D', NULL, '37.146.190.61', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36 Edg/90.0.818.49', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRlNRNjNXMWIyUDJlQ29CTjZuMERDYWpYQ1RzTlRlemxER080MmhtNCI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM0OiJodHRwczovL3d3dy5ub3Zhc3R1ZGlvLnV6L2NvbnRhY3RzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651053103),
('y87tpfd002poHnfGx1tx2NJpjecKdsO7U9h1iq5v', NULL, '195.158.30.132', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.141 YaBrowser/22.3.2.644 Yowser/2.5 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiM2Z3MjVhRnRuM0Zia25iUnVjRllsQk1kWUxuYzJVUG91bDVCZ1FFcCI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwczovL3d3dy5ub3Zhc3R1ZGlvLnV6Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651053939),
('vg3vG4dI8SeXIXLnMk7Phrr3oCf24vuChd4Zjkye', NULL, '195.158.30.132', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.41 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSnlQWDZFRDVPSWdzQTFZbWJDem9qSG1WY2xIdVdQMEdzS2RqZ0JCTCI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwczovL3d3dy5ub3Zhc3R1ZGlvLnV6Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651052669),
('30RJbusrzCJZtyyVR6x0icGGNM7E9xk4O8mJpmnH', NULL, '87.237.237.237', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNGpIT0lGRG56RWNaT2VkR2NlNEU5Tk9nMkhmczZZQ3M4R1dYNFhDNSI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwczovL3d3dy5ub3Zhc3R1ZGlvLnV6Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651051894),
('Cxk8xvZWj0kCXebtG0LLRzRIs4xcUEZiWiUTB5ab', NULL, '46.148.234.229', 'Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNFB2SmpuMUFsTWVFOW02WDZhdU9lZHN5TGlVY1hzbGZSUlR0MVRlTCI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwczovL3d3dy5ub3Zhc3R1ZGlvLnV6Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651052060),
('peOFioqUF67X10o6xNnFhpH8NOKFQyEaao2UPCjv', NULL, '146.120.18.104', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:99.0) Gecko/20100101 Firefox/99.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoid01ZdFpmVXludWkzUU1rOVl5MUR5bUI5ckhTVzlwMHdwd1NBczRPNCI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwczovL3d3dy5ub3Zhc3R1ZGlvLnV6Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651046121),
('9Eqtp1ycDyJasyuwZfWlrf1CntKf2RmhVtzywOPf', NULL, '109.252.15.18', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.72 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiajdiR2s4U3NjWTlLTWNaWEg1RGRrRExmQlhTUTBaeDNnVW55OGI5YSI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM0OiJodHRwczovL3d3dy5ub3Zhc3R1ZGlvLnV6L2NvbnRhY3RzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651045536),
('9qrY6s6jlOiaWVMQLcsg8LHvUTJMznz6w1cEQ6oK', NULL, '42.236.10.125', 'Mozilla/5.0 (Linux; U; Android 8.0.0; zh-cn; Mi Note 2 Build/OPR1.170623.032) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/10.1.1', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRDl2bXdhRDRRM3ZyTFA1dko3UU9Nb3B5M2dCYzlNMHQ1aGtuR1N4NyI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwczovL3d3dy5ub3Zhc3R1ZGlvLnV6Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651045223),
('zJYRGJH61i399kPqr8xSAk5L4XC2ko0O14Yp0H9O', NULL, '5.255.253.106', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiR3JqZ3FBZTVHRFVCME5Oc0FrVTNuOUMzcVVFc2pNMTRXRXh2Y2JmQyI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM0OiJodHRwczovL3d3dy5ub3Zhc3R1ZGlvLnV6L3Byb2plY3RzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651041065),
('TwlrFBZMd2wPY9qPsEoi5TWJerTakj3V65x5aFlz', NULL, '217.30.163.211', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUUZycmxySUtNYUl5Nnp2RGRyOEQ0SjJqQUttS0F2eEZvQWhFUDFmbCI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM0OiJodHRwczovL3d3dy5ub3Zhc3R1ZGlvLnV6L3NlcnZpY2VzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651041027),
('ujpJd2XyCbclryRCSW4A46K4s9UN23E1RcLrIR2u', NULL, '5.255.253.179', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiY21VQXVLZTBMdnowUjRUSElEZEJKZFdZcmxkaUtoNHduZjVyamQ2byI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwczovL3d3dy5ub3Zhc3R1ZGlvLnV6Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651039720),
('39WOfhLRUnn99t436YIEs5fEN5olkqxUy2AyJT6X', NULL, '91.196.77.137', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.141 YaBrowser/22.3.2.644 Yowser/2.5 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSjZuejNjc2tGYTZ2WlR2UWtIZjZIMDEzdWtxV2dWMnA2NEN3Qmh0dCI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM0OiJodHRwczovL3d3dy5ub3Zhc3R1ZGlvLnV6L3Byb2plY3RzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651039818),
('EIN6kmuqaE4amwAP9NatfwYR1hxYRRWr4odUuCvb', NULL, '1.169.104.226', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVkZSNzNpZnNPWmhwUWFEM3h5SURGelVrS3ZQT09BQ0R2N0xNUmlHaiI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM0OiJodHRwczovL3d3dy5ub3Zhc3R1ZGlvLnV6L2NvbnRhY3RzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651039259),
('hBQknyKOqBENuOyhsgdQ3tvZgQHeEWNbeshjU0oL', NULL, '131.220.6.152', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRjFyaVRUQTk2cGNkeFBHa0NNZ1pvWlpnQjZ0VkhiR0loTHBFajVxbSI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwczovL3d3dy5ub3Zhc3R1ZGlvLnV6Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651037723),
('EnvCKYqX9x9fOHvgaJs0TKkWIou62DSr9eVcwBos', NULL, '87.250.224.72', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.268', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiU004OWUwVEVReVFmUUc0cDdRZXBPY1V3Slp3VkxUTFdJeDNMQkpFQiI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwczovL3d3dy5ub3Zhc3R1ZGlvLnV6Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651036942),
('gFcLh7MUc2mlfcw9euhhVat8yDq0eGw5KbOwhpEI', NULL, '123.138.35.22', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTkgwR2lNVlBIVUIyU3EwNFdPeDFFMW1yMUJ5Y0hja0RmZ05mOHZ6ZyI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwczovL3d3dy5ub3Zhc3R1ZGlvLnV6Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651033469),
('TTct1jEUcsu8zPOTL6ZjLqptUh6k6rfGFN7VqGdp', NULL, '66.249.83.101', 'Mozilla/5.0 (Linux; Android 4.2.1; en-us; Nexus 5 Build/JOP40D) AppleWebKit/535.19 (KHTML, like Gecko; googleweblight) Chrome/38.0.1025.166 Mobile Safari/535.19', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieXp4N3JxUkd4NlIxRncxdWZQRm03Rm9NZ1IydXBCd0xYQVdhQzZzeCI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1651032472),
('tCbM8NEvnke51LNKq7bqXEcuFFjZ96vRXejJMCT3', NULL, '66.249.83.98', 'Mozilla/5.0 (Linux; Android 4.2.1; en-us; Nexus 5 Build/JOP40D) AppleWebKit/535.19 (KHTML, like Gecko; googleweblight) Chrome/38.0.1025.166 Mobile Safari/535.19', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZG5hTVV4QXZZd0tHZ2puTkR1WEo2QU5QRnF2TWxJa25WZHQ2d1BQaCI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1651032472),
('9ImGe2Zk3Dp1IaZTab4YJPMHSDeoONeMwvDEJQex', NULL, '66.249.83.126', 'Mozilla/5.0 (Linux; Android 4.2.1; en-us; Nexus 5 Build/JOP40D) AppleWebKit/535.19 (KHTML, like Gecko; googleweblight) Chrome/38.0.1025.166 Mobile Safari/535.19', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieVM3VDh2N2pqYXdweXRidVJoclVzSm1GNXFraG80R1hwNDJYR0ljdCI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwczovL3d3dy5ub3Zhc3R1ZGlvLnV6Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651032466),
('EYpWSWD5Tt0FNvy4GiixEPe1lgdOKwez3EaEgx3L', NULL, '66.249.83.101', 'Mozilla/5.0 (Linux; Android 4.2.1; en-us; Nexus 5 Build/JOP40D) AppleWebKit/535.19 (KHTML, like Gecko; googleweblight) Chrome/38.0.1025.166 Mobile Safari/535.19', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWjl3Z0M4REkzSGRlcElQVmtzTWZVTTFzcHFPMTdmZ2t2NVVFc1dSNSI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwczovL3d3dy5ub3Zhc3R1ZGlvLnV6Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651032466),
('Vb1JZsYzxhmjIvTwP3Sil3LPVoZkwTWKKb5EfNRH', NULL, '66.249.83.126', 'Mozilla/5.0 (Linux; Android 4.2.1; en-us; Nexus 5 Build/JOP40D) AppleWebKit/535.19 (KHTML, like Gecko; googleweblight) Chrome/38.0.1025.166 Mobile Safari/535.19', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRzA4MXB6ZDI1WGhrdXJQNkFEaVNrbzBRMEhta3BVaXNWZzROc2J5TyI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwczovL3d3dy5ub3Zhc3R1ZGlvLnV6Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651032465),
('T8jtnnQJ4cSxxyfzDxfwduiYYUxg9ly0Dt8oA7I9', NULL, '66.249.83.98', 'Mozilla/5.0 (Linux; Android 4.2.1; en-us; Nexus 5 Build/JOP40D) AppleWebKit/535.19 (KHTML, like Gecko; googleweblight) Chrome/38.0.1025.166 Mobile Safari/535.19', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidWhsUll6UEdQZ2cxenhQa2N4M25XRm5NWkt1U2tPZnI1bDVqNUU5diI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwczovL3d3dy5ub3Zhc3R1ZGlvLnV6Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651032465),
('WwEMayOZbbNwVLy9oKPPG7gbe03kq010fcnnA8si', NULL, '54.36.149.94', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZmdnMXZUeDIzdkdTSzZVeHkzREZFa3VrVGVFMUEzOXB4bkN5THNHViI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwczovL3d3dy5ub3Zhc3R1ZGlvLnV6Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651028810),
('SzG6M29Cwq5gaVOtCYftAKvQrUtoQRi9pIdvKGyD', NULL, '142.44.245.88', 'Mozilla/5.0 (compatible; YaK/1.0; http://linkfluence.com/; bot@linkfluence.com)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQ2pkWnhsdW5pbFozd0NyT3hhb2k3VG5YaGNzNGtzTWFmTXo5V2czOCI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwczovL3d3dy5ub3Zhc3R1ZGlvLnV6Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651031540),
('WJq2cIc9FcB3RRvW9mXClg6Sjtl9sMDmO5QeXFz2', NULL, '124.126.78.193', 'Mozilla/5.0 (Linux; U; Android 9; zh-cn; RMX1901 Build/QKQ1.190918.001) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/70.0.3538.80 Mobile Safari/537.36 HeyTapBrowser/40.7.22.1', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoic1VaazZtYUpCZ0hrbWN1dlZJa1JIUHN6cnFwcTl0WFp4THJYSjBPbSI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwczovL3d3dy5ub3Zhc3R1ZGlvLnV6Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651032102),
('JNpTF0pQZMSsLPY1LvDbWn6RKUJ8tjrQ0aMxjaRU', NULL, '188.113.214.4', 'Mozilla/5.0 (Linux; Android 8.1.0; SM-J260F Build/M1AJB) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Mobile Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVEttTGZvQnVCclRyQWJpOWpraFZZUXNpTnpWRkJGUmpLS2c4YmJJbyI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI1OiJodHRwczovL3d3dy5ub3Zhc3R1ZGlvLnV6Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651032465);

-- --------------------------------------------------------

--
-- Структура таблицы `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
(1, 2, 'Alex\'s Team', 1, '2022-03-09 02:51:26', '2022-03-09 02:51:26');

-- --------------------------------------------------------

--
-- Структура таблицы `team_invitations`
--

CREATE TABLE `team_invitations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `photo`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Sam', '/img_user/rGx40KsxgA.jpg', 'ravshanovsamir@gmail.com', NULL, '$2y$10$9JbtKsjphE4iyvamh/pjheZpsi3sBXI0HVdY0q1N1vFHJnjGMVX0u', NULL, NULL, NULL, NULL, NULL, '2022-02-27 17:05:45', '2022-02-27 17:05:54'),
(2, 'Alex', '/img_user/3hpC6RroXZ.png', 'sasha7_95-2011@mail.ru', NULL, '$2y$10$dxLgfXzMpFAHyWCLr9mJ5.Zlj0EZknUYnUNpwptbWrdKesVOukYxy', NULL, NULL, NULL, NULL, NULL, '2022-03-09 02:51:26', '2022-04-05 02:57:39');

-- --------------------------------------------------------

--
-- Структура таблицы `words`
--

CREATE TABLE `words` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` text COLLATE utf8mb4_unicode_ci,
  `ru` text COLLATE utf8mb4_unicode_ci,
  `uz` text COLLATE utf8mb4_unicode_ci,
  `en` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `words`
--

INSERT INTO `words` (`id`, `key`, `ru`, `uz`, `en`, `created_at`, `updated_at`) VALUES
(2, 'проекты', 'проекты', 'loyihalar', 'projects', '2022-03-03 18:22:25', '2022-04-05 07:54:47'),
(6, 'Технологии', 'Технологии', 'Texnologiya', 'Technology', '2022-03-03 18:39:21', '2022-04-05 07:54:47'),
(7, 'дизайн', 'дизайн', 'dizayn', 'design', '2022-03-03 18:56:40', '2022-04-05 07:54:06'),
(8, 'Создаем функциональные веб-сайты и сервисы', 'Создаем функциональные веб-сайты и сервисы', 'Biz o\'sish, daromad topish yoki tejash imkonini beruvchi', 'We create functional websites and services', '2022-03-03 18:56:54', '2022-04-05 07:53:01'),
(9, 'с фокусом на wow-дизайн, которые позволяют расти', 'с фокусом на wow-дизайн, которые позволяют расти', 'WOW dizaynga e\'tibor qaratgan holda', 'with a focus on wow design that allow', '2022-03-03 18:57:05', '2022-04-05 07:53:01'),
(10, 'зарабатывать или экономить', 'зарабатывать или экономить', 'funktsional web-saytlar  yaratamiz', 'you to grow, earn or save', '2022-03-03 18:57:14', '2022-04-05 07:53:01'),
(11, 'Обсудить проект', 'Обсудить проект', 'Loyihani gaplashish', 'Discuss the project', '2022-03-03 18:57:21', '2022-04-05 07:06:47'),
(12, 'Об агенстве', 'Об агенстве', 'Agentlik haqida', 'About agency', '2022-03-03 18:58:17', '2022-04-05 07:06:47'),
(13, 'Направления', 'Направления', 'Yo\'nalishlar', 'Directions', '2022-03-03 18:58:25', '2022-04-05 07:06:01'),
(14, 'Разработка сайтов', 'Разработка сайтов', 'Web-sayt yaratish', 'Website development', '2022-03-03 18:58:34', '2022-04-05 07:05:30'),
(15, 'Мобильные приложения', 'Мобильные приложения', 'Mobil ilovalar', 'Mobile applications', '2022-03-03 18:58:41', '2022-04-05 07:04:19'),
(16, 'Разработка ботов', 'Разработка ботов', 'Botlar yaratish', 'Bots development', '2022-03-03 18:58:47', '2022-04-05 07:04:19'),
(17, 'UX / UI дизайн', 'UX / UI дизайн', 'UX / UI dizayn', 'UX / UI design', '2022-03-03 18:58:54', '2022-04-05 07:02:35'),
(18, 'SEO / контент-маркетинг', 'SEO / контент-маркетинг', 'SEO / Kontent marketing', 'SEO / Content Marketing', '2022-03-03 18:59:01', '2022-04-05 07:02:11'),
(19, 'Брендинг', 'Брендинг', 'Brending', 'Branding', '2022-03-03 18:59:48', '2022-04-05 07:01:02'),
(20, 'Аналитика', 'Аналитика', 'Analitika', 'Analytics', '2022-03-03 18:59:52', '2022-04-05 07:00:35'),
(21, 'Поддержка и развитие', 'Поддержка и развитие', 'Qo\'llab-quvvatlash va rivojlantirish', 'Support and development', '2022-03-03 19:00:00', '2022-04-05 07:00:34'),
(22, 'Заказать услугу', 'Заказать услугу', 'Buyurtma berish', 'Order service', '2022-03-03 19:00:10', '2022-04-05 06:59:46'),
(23, 'Перейти на сайт', 'Перейти на сайт', 'Saytga o\'tish', 'Go to website', '2022-03-03 19:00:20', '2022-04-05 06:59:15'),
(24, 'Все работы', 'Все работы', 'Barcha loyihalar', 'All projects', '2022-03-03 19:00:40', '2022-04-05 06:57:47'),
(25, 'Нам доверяют', 'Нам доверяют', 'Bizga ishonishadi', 'We are trusted', '2022-03-03 19:00:46', '2022-04-05 06:57:47'),
(26, 'Все клиенты', 'Все клиенты', 'Barcha mijozlar', 'All clients', '2022-03-03 19:00:53', '2022-04-05 06:56:56'),
(27, 'Разработка сайтов в сфере недвижимости', 'Разработка сайтов в сфере недвижимости', 'Ko\'chmas mulk veb-saytini ishlab chiqish', 'Real estate website development', '2022-03-03 19:01:46', '2022-04-05 06:56:56'),
(28, 'Реализовали более 17 проектов для жилых комплексов и застройщиков', 'Реализовали более 17 проектов для жилых комплексов и застройщиков', 'Turar-joy majmualari va quruvchilar uchun 17 dan ortiq loyihalar amalga oshirildi', 'Implemented more than 17 projects for residential complexes and developers', '2022-03-03 19:02:00', '2022-04-05 06:55:56'),
(29, 'Последние работы', 'Последние работы', 'Oxirgi loyihalar', 'Last projects', '2022-03-03 19:03:04', '2022-04-05 06:54:51'),
(30, 'Главная', 'Главная', 'Bosh sahifa', 'Home', '2022-03-03 19:15:47', '2022-04-05 06:54:50'),
(31, 'Агентство', 'Агентство', 'Agentlik', 'Agency', '2022-03-03 19:15:52', '2022-04-05 06:53:39'),
(32, 'Проекты', 'Проекты', 'Loyihalar', 'Projects', '2022-03-03 19:16:34', '2022-04-05 06:53:14'),
(33, 'Услуги', 'Услуги', 'Xizmatlar', 'Services', '2022-03-03 19:16:45', '2022-04-05 06:52:51'),
(34, 'Контакты', 'Контакты', 'Aloqa', 'Contacts', '2022-03-03 19:16:51', '2022-04-05 06:52:11'),
(35, 'Адрес', 'Адрес', 'Manzil', 'Adress', '2022-03-03 19:19:31', '2022-04-05 06:49:53'),
(36, 'Г. Ташкент, Юнусабадский р-н, ул. Ахмад Дониша 26А', 'Г. Ташкент, Юнусабадский р-н, ул. Ахмад Дониша 26А', 'Toshkent shahri, Yunusobod tumani, Ahmad Donish ko\'ch. 26A', 'Tashkent city, Yunusabad district, Ahmad Donish str. 26A', '2022-03-03 19:19:44', '2022-04-05 06:45:08'),
(37, 'Расскажите о', 'Расскажите о', 'Loyihangiz haqida bizga', 'Tell us about', '2022-03-03 19:19:55', '2022-04-05 06:47:57'),
(38, 'вашем проекте', 'вашем проекте', 'aytib bering', 'your project', '2022-03-03 19:20:02', '2022-04-05 06:48:37'),
(39, 'Рассказать', 'Рассказать', 'Aytib berish', 'Tell us', '2022-03-03 19:22:24', '2022-04-05 06:48:26'),
(40, 'digital-агентство', 'digital-агентство', 'digital-agentlik', 'digital agency', '2022-03-03 19:22:43', '2022-04-05 06:43:31'),
(41, 'агентство', 'агентство', 'agentlik', 'agency', '2022-03-03 19:25:26', '2022-04-05 06:41:52'),
(42, 'проектов реализовано', 'проектов реализовано', 'amalga oshirilgan loyihalar', 'projects implemented', '2022-03-03 19:27:33', '2022-04-05 06:41:52'),
(43, 'лет на рынке', 'лет на рынке', 'yil IT bozorda', 'years on the market', '2022-03-03 19:27:42', '2022-04-05 06:40:46'),
(44, 'сотрудников в штате', 'сотрудников в штате', 'hodimlar jamoada', 'employees in the state', '2022-03-03 19:27:49', '2022-04-05 06:39:37'),
(45, 'Стран мира сотрудничают с нами', 'Стран мира сотрудничают с нами', 'Dunyo davlatlari biz bilan hamkorlik qiladi', 'Countries of the world cooperate with us', '2022-03-03 19:28:00', '2022-04-05 05:21:55'),
(46, 'Клиентов остаются с нами навсегда', 'Клиентов остаются с нами навсегда', 'Mijozlar biz bilan abadiy qoladilar', 'Clients stay with us forever', '2022-03-03 19:28:08', '2022-04-05 05:20:57'),
(47, 'Области экспертизы', 'Области экспертизы', 'Mutaxassislik sohalari', 'Areas of expertise', '2022-03-03 19:34:04', '2022-04-05 05:20:56'),
(48, 'Промышленность', 'Промышленность', 'Sanoat', 'Industry', '2022-03-03 19:34:10', '2022-04-05 05:19:45'),
(49, 'E-commerce', 'E-commerce', 'E-commerce', 'E-commerce', '2022-03-03 19:34:17', '2022-03-03 19:34:17'),
(50, 'Образование', 'Образование', 'Ta\'lim', 'Education', '2022-03-03 19:34:24', '2022-04-05 05:17:59'),
(51, 'IT и телеком', 'IT и телеком', 'IT va telekommunikatsiya', 'IT and telecom', '2022-03-03 19:34:31', '2022-04-05 05:17:34'),
(52, 'Транспорт и логистика', 'Транспорт и логистика', 'Transport va logistika', 'Transport and logistic', '2022-03-03 19:34:39', '2022-04-05 05:17:34'),
(53, 'Медиа', 'Медиа', 'Media', 'Media', '2022-03-03 19:34:44', '2022-04-05 05:16:34'),
(54, 'Финансы', 'Финансы', 'Moliya', 'Finance', '2022-03-03 19:34:50', '2022-04-05 05:16:34'),
(55, 'Retail', 'Розничная торговля', 'Chakana savdo', 'Retail', '2022-03-03 19:34:55', '2022-04-05 05:15:28'),
(56, 'Мы — команда дизайнеров и инженеров. Делаем дизайн и разработку современ­ных цифровых решений на основе аналитики, метрик и пользовательского опыта.', 'Мы — команда дизайнеров и инженеров. Делаем дизайн и разработку современ­ных цифровых решений на основе аналитики, метрик и пользовательского опыта.', 'Biz dizaynerlar va muhandislar jamoasimiz. Biz tahlillar, o\'lchovlar va foydalanuvchi tajribasiga asoslangan zamonaviy raqamli yechimlarni ishlab chiqamiz va ishlab chiqamiz.', 'We are a team of designers and engineers. We design and develop modern digital solutions based on analytics, metrics and user experience.', '2022-03-03 19:35:41', '2022-04-05 05:14:36'),
(57, 'Мы создаем и улучшаем присутствие компаний в сети интернет. Повышаем их инвестиционную привлека­тельность и помогаем быть лидерами в своей отрасли.', 'Мы создаем и улучшаем присутствие компаний в сети интернет. Повышаем их инвестиционную привлека­тельность и помогаем быть лидерами в своей отрасли.', 'Biz Internetda kompaniyalarning mavjudligini yaratamiz va yaxshilaymiz. Biz ularning investitsion jozibadorligini oshiramiz va o‘z sohasida yetakchi bo‘lishlariga yordam beramiz.', 'We create and improve the presence of companies on the Internet. We increase their investment attractiveness and help them to be leaders in their industry.', '2022-03-03 19:35:49', '2022-04-05 05:14:36'),
(58, 'Презентация', 'Презентация', 'Taqdimot', 'Presentation', '2022-03-03 19:35:54', '2022-04-05 05:13:05'),
(59, 'Команда', 'Команда', 'Jamoa', 'Team', '2022-03-03 19:35:59', '2022-04-05 05:13:05'),
(60, 'Нам интересно долгосрочное сотрудничество.', 'Нам интересно долгосрочное сотрудничество.', 'Biz uzoq muddatli hamkorlikdan manfaatdormiz.', 'We are interested in long-term cooperation.', '2022-03-03 19:36:07', '2022-04-05 05:12:21'),
(61, 'С ключевыми клиентами мы работаем годами.', 'С ключевыми клиентами мы работаем годами.', 'Asosiy mijozlar bilan biz yillar davomida ishlab kelamiz.', 'We have been working with key clients for years.', '2022-03-03 19:36:16', '2022-04-05 05:11:36'),
(62, 'Партнерское отношение', 'Партнерское отношение', 'Hamkorlik', 'Partnership', '2022-03-03 19:36:26', '2022-04-05 05:11:36'),
(63, 'Мы работаем с клиентом одной командой, у нас общие цели.', 'Мы работаем с клиентом одной командой, у нас общие цели.', 'Biz mijoz bilan bitta jamoa sifatida ishlaymiz, umumiy maqsadlarimiz bor.', 'We work with the client as one team, we have common goals.', '2022-03-03 19:36:34', '2022-04-05 05:09:36'),
(64, 'Сервисный дизайн', 'Сервисный дизайн', 'Servis dizayn', 'Service design', '2022-03-03 19:36:41', '2022-04-05 06:35:28'),
(65, 'Мы создаем удобные и привлека­тельные решения, которые позволяют расти, зарабатывать или экономить.', 'Мы создаем удобные и привлека­тельные решения, которые позволяют расти, зарабатывать или экономить.', 'Biz sizga o\'sish, pul ishlash yoki tejash imkonini beruvchi qulay va jozibali echimlarni yaratamiz.', 'We create convenient and attractive solutions that allow you to grow, earn or save.', '2022-03-03 19:36:53', '2022-04-05 05:08:39'),
(66, 'Глубокая аналитика', 'Глубокая аналитика', 'Chuqur tahlil', 'Deep Analytics', '2022-03-03 19:37:00', '2022-04-05 05:06:39'),
(67, 'Вы получаете конкретное и обосно­ванное решение бизнес-задач.', 'Вы получаете конкретное и обосно­ванное решение бизнес-задач.', 'Siz biznes muammolaringizga aniq va oqilona yechim olasiz.', 'You get a specific and reasonable solution to business problems.', '2022-03-03 19:37:06', '2022-04-05 05:06:09'),
(68, 'Работа по SCRUM', 'Работа по SCRUM', 'SCRUM bo\'yichia ishlash', 'SCRUM work', '2022-03-03 19:37:13', '2022-04-05 05:03:13'),
(69, 'Гибкие методологии гарантируют прозрачность всего процесса разработки.', 'Гибкие методологии гарантируют прозрачность всего процесса разработки.', 'Agile metodologiyalari butun rivojlanish jarayonida shaffoflikni kafolatlaydi.', 'Agile methodologies guarantee transparency throughout the development process.', '2022-03-03 19:37:21', '2022-04-05 05:02:39'),
(70, 'Гарантия сроков', 'Гарантия сроков', 'Vaqt kafolati', 'Time guarantee', '2022-03-03 19:37:28', '2022-04-05 05:01:57'),
(71, 'Мы делим проект на итерации, прописываем KPI и добавляем заказчика в свою Jira.', 'Мы делим проект на итерации, прописываем KPI и добавляем заказчика в свою Jira.', 'Biz loyihani iteratsiyalarga ajratamiz, KPI larni yozamiz va mijozlarni Jira-ga qo\'shib qo\'yamiz.', 'We divide the project into iterations, write down KPIs and add the customer to our Jira.', '2022-03-03 19:37:37', '2022-04-05 05:01:00'),
(72, 'Мы любим наших клиентов, поэтому умеем слышать, погружаться в бизнес, становясь частью их команды.', 'Мы любим наших клиентов, поэтому умеем слышать, погружаться в бизнес, становясь частью их команды.', 'Biz o’z mijozlarimizni yaxshi ko\'ramiz, shuning uchun biz ularni qanday eshitishni, biznesga kirishishni va ularning jamoasining bir qismi bo\'lib ishlashni bilamiz.', 'We love our clients, so we know how to hear, immerse ourselves in business, becoming part of their team.', '2022-03-03 19:38:06', '2022-04-05 04:59:51'),
(73, 'Отзывы', 'Отзывы', 'Sharhlar', 'Reviews', '2022-03-03 19:40:39', '2022-04-05 04:54:59'),
(74, 'Показать еще', 'Показать еще', 'Ko\'proq ko\'rsatish', 'Show more', '2022-03-03 19:40:55', '2022-04-05 04:54:32'),
(75, 'Клиенты', 'Клиенты', 'Mijozlar', 'Clients', '2022-03-03 19:41:27', '2022-04-05 04:54:32'),
(76, 'Открыть pdf', 'Открыть PDF', 'PDF ni ochish', 'Open PDF', '2022-03-03 19:41:49', '2022-04-05 04:53:40'),
(77, 'Читать полностью', 'Читать полностью', 'To\'liq o\'qish', 'Read completely', '2022-03-03 19:42:05', '2022-04-05 04:53:40'),
(78, 'Cоциальные сети', 'Cоциальные сети', 'Ijtimoiy tarmoqlar', 'Social networks', '2022-03-03 20:19:21', '2022-04-05 04:44:42'),
(79, 'услуги', 'услуги', 'xizmatlar', 'services', '2022-03-03 20:22:24', '2022-04-05 07:56:46'),
(80, 'контакты', 'контакты', 'aloqa', 'contacts', '2022-03-03 20:22:29', '2022-04-05 07:57:04'),
(81, 'Закрыть', 'Закрыть', 'Yopish', 'Close', '2022-03-03 20:22:54', '2022-04-05 04:43:54'),
(82, 'Расскажите о вашем проекте', 'Расскажите о вашем проекте', 'Loyihangiz haqida bizga xabar bering', 'Tell us about your project', '2022-03-03 20:23:01', '2022-04-05 04:43:20'),
(83, 'Ваше имя', 'Ваше имя', 'Ismingiz', 'Your name', '2022-03-03 20:23:08', '2022-04-05 04:43:20'),
(84, 'Введите название компании', 'Введите название компании', 'Kompaniya nomini kiriting', 'Enter company name', '2022-03-03 20:23:46', '2022-04-05 04:41:08'),
(85, 'Введите ваше имя', 'Введите ваше имя', 'Ismingiz', 'Enter your name', '2022-03-03 20:24:05', '2022-04-05 04:42:19'),
(86, 'Ваш телефон', 'Ваш телефон', 'Telefoningiz', 'Phone number', '2022-03-03 20:24:18', '2022-04-05 04:39:44'),
(87, 'Отправить', 'Отправить', 'Yuborish', 'Send', '2022-03-03 20:24:27', '2022-04-05 04:38:40'),
(88, 'Cпасибо за заявку!', 'Cпасибо за заявку!', 'Murojaat uchun rahmat!', 'Thanks for the application!', '2022-03-03 20:24:37', '2022-04-05 04:38:40'),
(89, 'Наш менеджер свяжется с вами в ближайшее время', 'Наш менеджер свяжется с вами в ближайшее время', 'Menejerimiz tez orada siz bilan bog\'lanadi', 'Our manager will contact you soon', '2022-03-03 20:24:49', '2022-04-05 04:36:15'),
(90, 'Компания', 'Компания', 'Kompaniya', 'Company', '2022-03-03 20:25:29', '2022-04-05 04:36:14'),
(91, 'Написать в телеграмм', 'Написать в телеграмм', 'Telegramga yozing', 'Write to telegram', '2022-03-03 20:37:36', '2022-04-05 04:35:35'),
(92, 'Сайты и сервисы', 'Сайты и сервисы', 'Saytlar va servislar', 'Sites and services', '2022-03-03 20:52:04', '2022-04-05 04:35:08'),
(93, 'Направления', 'Направления', 'Yo\'nalishlar', 'Directions', '2022-03-03 20:52:11', '2022-04-05 04:34:02'),
(94, 'Корпоративные сайты', 'Корпоративные сайты', 'Korporativ veb-saytlar', 'Corporate websites', '2022-03-03 20:52:17', '2022-04-05 04:34:01'),
(95, 'Каталоги и витрины', 'Каталоги и витрины', 'Kataloglar va vitrinalar', 'Catalogs and showcases', '2022-03-03 20:52:26', '2022-04-05 04:33:12'),
(96, 'Сервисы', 'Сервисы', 'Servislar', 'Services', '2022-03-03 20:52:32', '2022-04-05 04:33:11'),
(97, 'Интернет-магазины', 'Интернет-магазины', 'Internet do\'konlar', 'Ecommerce', '2022-03-03 20:52:40', '2022-04-05 04:32:20'),
(98, 'Порталы', 'Порталы', 'Portallar', 'Portals', '2022-03-03 20:52:45', '2022-04-05 04:31:38'),
(99, 'Промо сайты', 'Промо сайты', 'Promo saytlar', 'Promo sites', '2022-03-03 20:53:30', '2022-04-05 04:31:38'),
(100, 'Системы сайтов', 'Системы сайтов', 'Sayt tizimlari', 'Site system', '2022-03-03 20:53:39', '2022-04-05 04:30:39'),
(101, 'Non-code', 'Non-code', 'Non-code', 'Non-code', '2022-03-03 20:53:46', '2022-03-03 20:53:46'),
(102, 'Консультация', 'Консультация', 'Maslahat', 'Consultation', '2022-03-03 20:53:51', '2022-04-05 04:28:24'),
(103, 'Полный комплекс сервисов для цифровой трансформации бизнеса.', 'Полный комплекс сервисов для цифровой трансформации бизнеса.', 'Raqamli biznesni o\'zgartirish bo\'yicha xizmatlarning to\'liq to\'plami.', 'Full set of services for digital transformation of business.', '2022-03-03 20:54:01', '2022-04-05 04:29:13'),
(104, 'Дизайн', 'Дизайн', 'Dizayn', 'Design', '2022-03-03 20:54:09', '2022-04-05 04:26:33'),
(105, 'Сервисный дизайн на основе аналитики, метрик и пользовательского опыта — продуктовый подход для создания привлекательных и эффективных решений.', 'Сервисный дизайн на основе аналитики, метрик и пользовательского опыта — продуктовый подход для создания привлекательных и эффективных решений.', 'Tahlil, ko\'rsatkichlar va foydalanuvchi tajribasiga asoslangan xizmat dizayni jozibali va samarali yechimlarni yaratish uchun mahsulot yondashuvidir.', 'Service design based on analytics, metrics and user experience is a product approach for creating attractive and effective solutions.', '2022-03-03 20:54:17', '2022-04-05 04:25:22'),
(106, 'Дизайн интерфейсов UX/UI', 'Дизайн интерфейсов UX/UI', 'UX/UI interfeys dizayni', 'UX/UI interface design', '2022-03-03 20:54:38', '2022-04-05 04:24:16'),
(107, 'Дизайн-системы', 'Дизайн-системы', 'Dizayn tizimlari', 'Design systems', '2022-03-03 20:54:46', '2022-04-05 04:23:32'),
(108, '3D-визуализация', '3D-визуализация', '3D-vizualizatsiya', '3D-visualization', '2022-03-03 20:54:55', '2022-04-05 03:40:03'),
(109, 'Key Visual', 'Key Visual', 'Vizual kalit', 'Key Visual', '2022-03-03 20:55:03', '2022-04-05 03:37:30'),
(110, 'Графический дизайн', 'Графический дизайн', 'Grafik dizayn', 'Graphic design', '2022-03-03 20:55:12', '2022-04-05 03:37:30'),
(111, 'SEO-продвижение', 'SEO-продвижение', 'SEO targ\'iboti', 'SEO promotion', '2022-03-03 20:55:26', '2022-04-05 04:26:13'),
(112, 'Увеличиваем органический трафик на сайте и снижаем затраты на привлечение клиентов.', 'Увеличиваем органический трафик на сайте и снижаем затраты на привлечение клиентов.', 'Biz saytdagi organik trafikni oshiramiz va mijozlarni jalb qilish xarajatlarini kamaytiramiz.', 'We increase organic traffic on the site and reduce the cost of attracting customers.', '2022-03-03 20:55:38', '2022-04-05 03:34:27'),
(113, 'Аналитика', 'Аналитика', 'Analitika', 'Analytics', '2022-03-03 20:56:19', '2022-04-05 03:34:27'),
(114, 'Изучаем бизнес клиента и его конкурентов, подбираем инструменты и способы продвижения.', 'Изучаем бизнес клиента и его конкурентов, подбираем инструменты и способы продвижения.', 'Biz mijozning biznesini va uning raqobatchilarini o\'rganamiz, reklama vositalari va usullarini tanlaymiz.', 'We study the client\'s business and its competitors, select tools and methods of promotion.', '2022-03-03 20:56:37', '2022-04-05 03:33:17'),
(115, 'Обеспечиваем работу сайта 24/7 и несем ответственность за его развитие.', 'Обеспечиваем работу сайта 24/7 и несем ответственность за его развитие.', 'Biz saytning 24/7 ishlashini ta\'minlaymiz va uning rivojlanishi uchun javobgarmiz.', 'We ensure the operation of the site 24/7 and are responsible for its development.', '2022-03-03 20:57:32', '2022-04-05 03:33:17'),
(116, 'Техническая поддержка', 'Техническая поддержка', 'Texnik qo\'llab-quvvatlash', 'Technical support', '2022-03-03 20:58:24', '2022-04-05 03:31:42'),
(117, 'Дизайн-поддержка', 'Дизайн-поддержка', 'Dizayn-yordam', 'Design-support', '2022-03-03 20:58:36', '2022-04-05 03:31:41'),
(118, 'Контент-поддержка', 'Контент-поддержка', 'Kontent-yordam', 'Content-support', '2022-03-03 20:58:42', '2022-04-05 03:30:16'),
(119, 'Схемы работы', 'Схемы работы', 'Ish sxemalari', 'Schemes of work', '2022-03-03 20:59:00', '2022-04-05 03:29:42'),
(120, 'Fix Price', 'Fix Price', 'Fix Price', 'Fix Price', '2022-03-03 20:59:11', '2022-03-03 20:59:11'),
(121, 'Для задач с предсказуемыми сроком и бюджетом.', 'Для задач с предсказуемыми сроком и бюджетом.', 'Bashorat qilinadigan vaqt va byudjetga ega bo\'lgan vazifalar uchun.', 'For tasks with a predictable deadline and budget.', '2022-03-03 20:59:20', '2022-04-05 03:27:32'),
(122, 'Time & materials', 'Time & materials', 'Time & materials', 'Time & materials', '2022-03-03 20:59:28', '2022-03-03 20:59:28'),
(123, 'Для длинных и сложных проектов с гибким планированием.', 'Для длинных и сложных проектов с гибким планированием.', 'Moslashuvchan rejalashtirish bilan uzoq va murakkab loyihalar uchun.', 'For long and complex projects with flexible planning.', '2022-03-03 20:59:38', '2022-04-05 03:26:19'),
(124, 'Retention', 'Retention', 'Retention', 'Retention', '2022-03-03 20:59:45', '2022-03-03 20:59:45'),
(125, 'Выделенная команда на определенный срок по зафиксированной цене.', 'Выделенная команда на определенный срок по зафиксированной цене.', 'Belgilangan narxda ma\'lum bir vaqt uchun ajratilgan jamoa.', 'A dedicated team for a certain period at a fixed price.', '2022-03-03 20:59:52', '2022-04-05 03:24:30'),
(126, 'Исследования', 'Исследования', 'Исследования', 'Research', '2022-03-03 21:08:49', '2022-04-05 03:40:40'),
(127, 'UX-аналитика', 'UX-аналитика', 'UX-tahlil', 'UX analytics', '2022-03-03 21:09:20', '2022-04-05 03:23:10'),
(128, 'Веб-аналитика', 'Веб-аналитика', 'Veb-tahlil', 'Web-analytics', '2022-03-03 21:09:28', '2022-04-05 03:20:29'),
(129, 'Готовые решения', 'Готовые решения', 'Tayyor yechimlar', 'Ready-made solutions', '2022-03-07 07:06:36', '2022-04-05 03:19:40'),
(130, 'SEO на этапе разработки сайта', 'SEO на этапе разработки сайта', 'Sayt ishlab chiqish bosqichida SEO', 'SEO at the site development stage', '2022-03-09 06:19:57', '2022-04-05 03:19:07'),
(131, 'SEO-поддержка', 'SEO-поддержка', 'SEO-yordam', 'SEO support', '2022-03-09 06:20:26', '2022-04-05 03:16:52');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `counts`
--
ALTER TABLE `counts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `langs`
--
ALTER TABLE `langs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `project_bind_categories`
--
ALTER TABLE `project_bind_categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `project_categories`
--
ALTER TABLE `project_categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Индексы таблицы `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Индексы таблицы `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_invitations_team_id_email_unique` (`team_id`,`email`);

--
-- Индексы таблицы `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `counts`
--
ALTER TABLE `counts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT для таблицы `langs`
--
ALTER TABLE `langs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT для таблицы `project_bind_categories`
--
ALTER TABLE `project_bind_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT для таблицы `project_categories`
--
ALTER TABLE `project_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `team_invitations`
--
ALTER TABLE `team_invitations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `words`
--
ALTER TABLE `words`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
