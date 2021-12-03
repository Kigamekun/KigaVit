-- phpMyAdmin SQL Dump
-- version 4.9.7deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 07, 2021 at 07:02 PM
-- Server version: 8.0.26-0ubuntu0.21.04.3
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kigavit`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookmarks`
--

CREATE TABLE `bookmarks` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `template_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `slug`, `description`, `thumb`, `created_at`, `updated_at`) VALUES
(1, 'Birthday Party', 'birthday_party', 'just birthday', NULL, '2021-08-07 00:25:24', '2021-08-07 00:25:24');

-- --------------------------------------------------------

--
-- Table structure for table `client_template`
--

CREATE TABLE `client_template` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `template_id` bigint UNSIGNED NOT NULL,
  `paid` int DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `music` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_template`
--

INSERT INTO `client_template` (`id`, `user_id`, `template_id`, `paid`, `Date`, `music`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL, NULL, '2021-08-07 00:35:00', '2021-08-07 00:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `css_data`
--

CREATE TABLE `css_data` (
  `id` bigint UNSIGNED NOT NULL,
  `template_id` bigint UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `css_data`
--

INSERT INTO `css_data` (`id`, `template_id`, `type`, `file`, `created_at`, `updated_at`) VALUES
(1, 1, 'url', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', '2021-08-07 00:31:03', '2021-08-07 00:31:03'),
(2, 2, 'url', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', '2021-08-07 00:32:33', '2021-08-07 00:32:33');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `js_data`
--

CREATE TABLE `js_data` (
  `id` bigint UNSIGNED NOT NULL,
  `template_id` bigint UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `js_data`
--

INSERT INTO `js_data` (`id`, `template_id`, `type`, `file`, `created_at`, `updated_at`) VALUES
(1, 1, 'url', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', '2021-08-07 00:31:03', '2021-08-07 00:31:03'),
(2, 2, 'url', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', '2021-08-07 00:32:33', '2021-08-07 00:32:33');

-- --------------------------------------------------------

--
-- Table structure for table `like_template`
--

CREATE TABLE `like_template` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `template_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `like_template`
--

INSERT INTO `like_template` (`id`, `user_id`, `template_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2021-08-07 00:46:01', '2021-08-07 00:46:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_05_24_113543_create_sessions_table', 1),
(7, '2021_08_07_053642_create_template_table', 1),
(8, '2021_08_07_054141_create_sub_template_table', 1),
(9, '2021_08_07_054350_create_js_data_table', 1),
(10, '2021_08_07_054359_create_css_data_table', 1),
(11, '2021_08_07_054841_create_client_template_table', 1),
(12, '2021_08_07_055112_create_sub_template_client_table', 1),
(13, '2021_08_07_055424_create_bookmarks_table', 1),
(14, '2021_08_07_055557_create_category_table', 1),
(15, '2021_08_07_055715_create_like_template_table', 1),
(16, '2021_08_07_055744_create_rsvp_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rsvp`
--

CREATE TABLE `rsvp` (
  `id` bigint UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `respon` bigint UNSIGNED NOT NULL,
  `attend` int NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rsvp`
--

INSERT INTO `rsvp` (`id`, `type`, `name`, `count`, `message`, `respon`, `attend`, `date`, `created_at`, `updated_at`) VALUES
(1, 'public', 'Kiga', 2, 'just attend', 1, 1, '2021-08-07', '2021-08-07 00:41:23', '2021-08-07 00:41:23');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('aHbD1qxG97faVhK2PSEacdrzFlP61NUkWcvapBkf', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:90.0) Gecko/20100101 Firefox/90.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieGFXVUJKcHpjSFFqa1dMQzE4SlRVQWY1MVpsNURQS3kyUzE3blRvbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1628330879),
('eNbZE8Zqyiwt9bdwli9uBbDGuP8IPPayDRRucJxs', 1, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 7.0; Custom Build/NBD92Y) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.186 Mobile Safari/537.36 OPT/2.9', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiaGxQdWZ1SVlrQm81OXNhdE1MRXhIUWxldGVCdk13alhYaXZCUkFGTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMC4wLjMuMjo4MDAwL3Jlc3BvbmRlbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRzdzMvVUtJS2V3N1RJb3JyV1gydGh1MUhUMFIvcDJZZDhaVTViM3dCYXN1QXBnU2FUL29UeSI7fQ==', 1628331097),
('F0tpTUHpn2hOWfR27G0FLBrPjfFmZMGzvE6DKaqK', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:90.0) Gecko/20100101 Firefox/90.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiOFo0WTlyalBNdkFXUGtCVmVXVHNGVHk5cW5zdEhNeWg5bDZjN1R0QiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9teV90ZW1wbGF0ZSI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRzdzMvVUtJS2V3N1RJb3JyV1gydGh1MUhUMFIvcDJZZDhaVTViM3dCYXN1QXBnU2FUL29UeSI7fQ==', 1628336862),
('lFWwo9fGvhir2lwBAZE0hAEIupKKzLkxngPl5YYN', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:90.0) Gecko/20100101 Firefox/90.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoib3ZUT21jdzdDTzUzdGNMYzJLank0MEliUW9Zc1FxY3pLNmFpeFJYNiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0MDoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3RlbXBsYXRlX2RldGFpbHMvMiI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQwOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvdGVtcGxhdGVfZGV0YWlscy8yIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1628330877),
('SdAIn8lFowfCN1RHhHbm5CbhIFyc6DsZuqUYU2Tn', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWXFwWEZya0RmTUxpZFNhVnBHa2hQWnZkVG9rZW1qQmdTTHVUMlZ5bSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTAxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvaW52aXRhdGlvbj94PSUyNDJ5JTI0MTIlMjQyT2tQSU9lMDNqU0NTdERUYktZOEN1MEpVY3UuM3lvZmdiSG9JdmxjNnF0Sm5xY1B1Z1lQeSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1628322084);

-- --------------------------------------------------------

--
-- Table structure for table `sub_template`
--

CREATE TABLE `sub_template` (
  `id` bigint UNSIGNED NOT NULL,
  `template_id` bigint UNSIGNED NOT NULL,
  `sort_section` int NOT NULL,
  `section_code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_template`
--

INSERT INTO `sub_template` (`id`, `template_id`, `sort_section`, `section_code`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '', '2021-08-07 00:31:03', '2021-08-07 00:31:03'),
(2, 1, 2, '', '2021-08-07 00:31:03', '2021-08-07 00:31:03'),
(3, 2, 1, '<section>         <br>         <br>         <!-- here you create a template and create new section for new page -->        <div class=\"container\">                          <center>                                  <div class=\"card bg-dark text-white\">   <img src=\"https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fmyanimeshelf.com%2Fupload%2Fdynamic%2F2013-12%2F08%2F372.jpg&f=1&nofb=1\" class=\"card-img\" alt=\"...\">   <div class=\"card-img-overlay\">     <h5 class=\"card-title\">Renge Miyauchi</h5>     <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>     <p class=\"card-text\">Last updated 3 mins ago</p>   </div> </div>             </center>         </div>      </section>', '2021-08-07 00:32:33', '2021-08-07 00:32:33'),
(4, 2, 2, '<section>         <br> <div class=\"container\">     <div class=\"row\" data-masonry=\"{&quot;percentPosition&quot;: true }\" style=\"position: relative; height: 690px;\">     <div class=\"col-sm-6 col-lg-4 mb-4\" style=\"position: absolute; left: 0%; top: 0px;\">       <div class=\"card\">         <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"200\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Image cap\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#868e96\"></rect><text x=\"50%\" y=\"50%\" fill=\"#dee2e6\" dy=\".3em\">Image cap</text></svg>          <div class=\"card-body\">           <h5 class=\"card-title\">Card title that wraps to a new line</h5>           <p class=\"card-text\">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>         </div>       </div>     </div>     <div class=\"col-sm-6 col-lg-4 mb-4\" style=\"position: absolute; left: 33.3333%; top: 0px;\">       <div class=\"card p-3\">         <figure class=\"p-3 mb-0\">           <blockquote class=\"blockquote\">             <p>A well-known quote, contained in a blockquote element.</p>           </blockquote>           <figcaption class=\"blockquote-footer mb-0 text-muted\">             Someone famous in <cite title=\"Source Title\">Source Title</cite>           </figcaption>         </figure>       </div>     </div>     <div class=\"col-sm-6 col-lg-4 mb-4\" style=\"position: absolute; left: 66.6667%; top: 0px;\">       <div class=\"card\">         <img src=\"https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fvignette1.wikia.nocookie.net%2Frezero%2Fimages%2F7%2F71%2FBeatrice_Anime.png%2Frevision%2Flatest%3Fcb%3D20160424195807&f=1&nofb=1\">         <div class=\"card-body\">           <h5 class=\"card-title\">Card title</h5>           <p class=\"card-text\">This card has supporting text below as a natural lead-in to additional content.</p>           <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>         </div>       </div>     </div>     <div class=\"col-sm-6 col-lg-4 mb-4\" style=\"position: absolute; left: 33.3333%; top: 171px;\">       <div class=\"card bg-primary text-white text-center p-3\">         <figure class=\"mb-0\">           <blockquote class=\"blockquote\">             <p>A well-known quote, contained in a blockquote element.</p>           </blockquote>           <figcaption class=\"blockquote-footer mb-0 text-white\">             Someone famous in <cite title=\"Source Title\">Source Title</cite>           </figcaption>         </figure>       </div>     </div>     <div class=\"col-sm-6 col-lg-4 mb-4\" style=\"position: absolute; left: 33.3333%; top: 310px;\">       <div class=\"card text-center\">         <div class=\"card-body\">           <h5 class=\"card-title\">Card title</h5>           <p class=\"card-text\">This card has a regular title and short paragraph of text below it.</p>           <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>         </div>       </div>     </div>     <div class=\"col-sm-6 col-lg-4 mb-4\" style=\"position: absolute; left: 0%; top: 362px;\">       <div class=\"card\">        <img src=\"http://127.0.0.1:8000/media/1628321553_rem.jpeg\">       </div>     </div>     <div class=\"col-sm-6 col-lg-4 mb-4\" style=\"position: absolute; left: 66.6667%; top: 378px;\">       <div class=\"card p-3 text-end\">         <figure class=\"mb-0\">           <blockquote class=\"blockquote\">             <p>A well-known quote, contained in a blockquote element.</p>           </blockquote>           <figcaption class=\"blockquote-footer mb-0 text-muted\">             Someone famous in <cite title=\"Source Title\">Source Title</cite>           </figcaption>         </figure>       </div>     </div>     <div class=\"col-sm-6 col-lg-4 mb-4\" style=\"position: absolute; left: 33.3333%; top: 488px;\">       <div class=\"card\">         <div class=\"card-body\">           <h5 class=\"card-title\">Card title</h5>           <p class=\"card-text\">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>           <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>         </div>       </div>     </div>   </div> </div>      </section>', '2021-08-07 00:32:33', '2021-08-07 00:32:33');

-- --------------------------------------------------------

--
-- Table structure for table `sub_template_client`
--

CREATE TABLE `sub_template_client` (
  `id` bigint UNSIGNED NOT NULL,
  `resource_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `section_code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_template_client`
--

INSERT INTO `sub_template_client` (`id`, `resource_id`, `user_id`, `section_code`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '<section style=\"background: rgba(0, 0, 0, 0) url(&quot;https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.stack.imgur.com%2Fs0hYZ.png&amp;f=1&amp;nofb=1&quot;) no-repeat scroll center center / cover; width: 100%; height: 100vh;\">         <br>         <br>         <!-- here you create a template and create new section for new page -->        <div class=\"container\">                          <center>                                  <div class=\"card bg-dark text-white\">   <img src=\"https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fmyanimeshelf.com%2Fupload%2Fdynamic%2F2013-12%2F08%2F372.jpg&amp;f=1&amp;nofb=1\" class=\"card-img\" alt=\"...\">   <h2>HEADER GOES HERE</h2><div class=\"card-img-overlay\">     <h5 class=\"card-title\">Renge Miyauchi</h5>     <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>     <p class=\"card-text\">Last updated 3 mins ago</p>   </div> </div>             </center>         </div><h1 style=\"font-size: 21px; color: rgb(250, 99, 99); font-weight: bold;\">Renge Miyauchi</h1>      </section>', '2021-08-07 00:35:00', '2021-08-07 00:37:44'),
(2, 2, 1, '<section style=\"background: rgb(85, 153, 218) none repeat scroll 0% 0%;\">         <br> <div class=\"container\">     <div class=\"row\" data-masonry=\"{&quot;percentPosition&quot;: true }\" style=\"position: relative; height: 690px;\">     <div class=\"col-sm-6 col-lg-4 mb-4\" style=\"position: absolute; left: 0%; top: 0px;\">       <div class=\"card\">         <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"200\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Image cap\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#868e96\"></rect><text x=\"50%\" y=\"50%\" fill=\"#dee2e6\" dy=\".3em\">Image cap</text></svg>          <div class=\"card-body\">           <h5 class=\"card-title\">Card title that wraps to a new line</h5>           <p class=\"card-text\">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>         </div>       </div>     </div>     <div class=\"col-sm-6 col-lg-4 mb-4\" style=\"position: absolute; left: 33.3333%; top: 0px;\">       <div class=\"card p-3\">         <figure class=\"p-3 mb-0\">           <blockquote class=\"blockquote\">             <p>A well-known quote, contained in a blockquote element.</p>           </blockquote>           <figcaption class=\"blockquote-footer mb-0 text-muted\">             Someone famous in <cite title=\"Source Title\">Source Title</cite>           </figcaption>         </figure>       </div>     </div>     <div class=\"col-sm-6 col-lg-4 mb-4\" style=\"position: absolute; left: 66.6667%; top: 0px;\">       <div class=\"card\">         <img src=\"https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fvignette1.wikia.nocookie.net%2Frezero%2Fimages%2F7%2F71%2FBeatrice_Anime.png%2Frevision%2Flatest%3Fcb%3D20160424195807&amp;f=1&amp;nofb=1\">         <div class=\"card-body\">           <h5 class=\"card-title\">Card title</h5>           <p class=\"card-text\">This card has supporting text below as a natural lead-in to additional content.</p>           <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>         </div>       </div>     </div>     <div class=\"col-sm-6 col-lg-4 mb-4\" style=\"position: absolute; left: 33.3333%; top: 171px;\">       <div class=\"card bg-primary text-white text-center p-3\">         <figure class=\"mb-0\">           <blockquote class=\"blockquote\">             <p>A well-known quote, contained in a blockquote element.</p>           </blockquote>           <figcaption class=\"blockquote-footer mb-0 text-white\">             Someone famous in <cite title=\"Source Title\">Source Title</cite>           </figcaption>         </figure>       </div>     </div>     <div class=\"col-sm-6 col-lg-4 mb-4\" style=\"position: absolute; left: 33.3333%; top: 310px;\">       <div class=\"card text-center\">         <div class=\"card-body\">           <h5 class=\"card-title\">Card title</h5>           <p class=\"card-text\">This card has a regular title and short paragraph of text below it.</p>           <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>         </div>       </div>     </div>     <div class=\"col-sm-6 col-lg-4 mb-4\" style=\"position: absolute; left: 0%; top: 362px;\">       <div class=\"card\">        <img src=\"http://127.0.0.1:8000/media/1628321553_rem.jpeg\">       </div>     </div>     <div class=\"col-sm-6 col-lg-4 mb-4\" style=\"position: absolute; left: 66.6667%; top: 378px;\">       <div class=\"card p-3 text-end\">         <figure class=\"mb-0\">           <blockquote class=\"blockquote\">             <p>A well-known quote, contained in a blockquote element.</p>           </blockquote>           <figcaption class=\"blockquote-footer mb-0 text-muted\">             Someone famous in <cite title=\"Source Title\">Source Title</cite>           </figcaption>         </figure>       </div>     </div>     <div class=\"col-sm-6 col-lg-4 mb-4\" style=\"position: absolute; left: 33.3333%; top: 488px;\">       <div class=\"card\">         <div class=\"card-body\">           <h5 class=\"card-title\">Card title</h5>           <p class=\"card-text\">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>           <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>         </div>       </div>     </div>   </div> </div>      </section>', '2021-08-07 00:35:00', '2021-08-07 00:38:56'),
(6, 2, 1, '<section></section>', '2021-08-07 04:47:41', '2021-08-07 04:47:41');

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `premium` int NOT NULL,
  `thumb` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `rate` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`id`, `title`, `author`, `description`, `category`, `premium`, `thumb`, `rate`, `created_at`, `updated_at`) VALUES
(1, 'Renge', 'kiga', 'just renge party', 'birthday_party', 0, NULL, NULL, '2021-08-07 00:31:03', '2021-08-07 00:31:03'),
(2, 'Renge 2', 'kiga', 'just temp', 'birthday_party', 0, NULL, 1, '2021-08-07 00:32:33', '2021-08-07 00:46:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 1, 'admin@gmail.com', NULL, '$2y$10$sw3/UKIKew7TIorrWX2thu1HT0R/p2Yd8ZU5b3wBasuApgSaT/oTy', NULL, NULL, NULL, NULL, NULL, '2021-08-07 00:07:50', '2021-08-07 00:07:50'),
(2, 'Kiga', 0, 'kiga@gmail.com', NULL, '$2y$10$RO3Kz1lXG7b2lCyVHp5c3enG7XiV4GEzDwmEJLdwfwa6gVyrGoYdm', NULL, NULL, NULL, NULL, NULL, '2021-08-07 00:52:44', '2021-08-07 00:55:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookmarks`
--
ALTER TABLE `bookmarks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookmarks_user_id_foreign` (`user_id`),
  ADD KEY `bookmarks_template_id_foreign` (`template_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_template`
--
ALTER TABLE `client_template`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_template_user_id_foreign` (`user_id`),
  ADD KEY `client_template_template_id_foreign` (`template_id`);

--
-- Indexes for table `css_data`
--
ALTER TABLE `css_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `css_data_template_id_foreign` (`template_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `js_data`
--
ALTER TABLE `js_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `js_data_template_id_foreign` (`template_id`);

--
-- Indexes for table `like_template`
--
ALTER TABLE `like_template`
  ADD PRIMARY KEY (`id`),
  ADD KEY `like_template_user_id_foreign` (`user_id`),
  ADD KEY `like_template_template_id_foreign` (`template_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rsvp`
--
ALTER TABLE `rsvp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sub_template`
--
ALTER TABLE `sub_template`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_template_template_id_foreign` (`template_id`);

--
-- Indexes for table `sub_template_client`
--
ALTER TABLE `sub_template_client`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_template_client_resource_id_foreign` (`resource_id`),
  ADD KEY `sub_template_client_user_id_foreign` (`user_id`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookmarks`
--
ALTER TABLE `bookmarks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client_template`
--
ALTER TABLE `client_template`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `css_data`
--
ALTER TABLE `css_data`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `js_data`
--
ALTER TABLE `js_data`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `like_template`
--
ALTER TABLE `like_template`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rsvp`
--
ALTER TABLE `rsvp`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_template`
--
ALTER TABLE `sub_template`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_template_client`
--
ALTER TABLE `sub_template_client`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookmarks`
--
ALTER TABLE `bookmarks`
  ADD CONSTRAINT `bookmarks_template_id_foreign` FOREIGN KEY (`template_id`) REFERENCES `template` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookmarks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `client_template`
--
ALTER TABLE `client_template`
  ADD CONSTRAINT `client_template_template_id_foreign` FOREIGN KEY (`template_id`) REFERENCES `template` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `client_template_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `css_data`
--
ALTER TABLE `css_data`
  ADD CONSTRAINT `css_data_template_id_foreign` FOREIGN KEY (`template_id`) REFERENCES `template` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `js_data`
--
ALTER TABLE `js_data`
  ADD CONSTRAINT `js_data_template_id_foreign` FOREIGN KEY (`template_id`) REFERENCES `template` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `like_template`
--
ALTER TABLE `like_template`
  ADD CONSTRAINT `like_template_template_id_foreign` FOREIGN KEY (`template_id`) REFERENCES `template` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `like_template_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_template`
--
ALTER TABLE `sub_template`
  ADD CONSTRAINT `sub_template_template_id_foreign` FOREIGN KEY (`template_id`) REFERENCES `template` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_template_client`
--
ALTER TABLE `sub_template_client`
  ADD CONSTRAINT `sub_template_client_resource_id_foreign` FOREIGN KEY (`resource_id`) REFERENCES `template` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sub_template_client_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
