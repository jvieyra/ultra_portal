-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 13-01-2019 a las 18:36:35
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ultra_portal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `buildings`
--

CREATE TABLE `buildings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `days`
--

CREATE TABLE `days` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `days`
--

INSERT INTO `days` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Lunes', '2019-01-09 10:31:27', '2019-01-09 10:31:27'),
(2, 'Martes', '2019-01-09 10:31:27', '2019-01-09 10:31:27'),
(3, 'Miercoles', '2019-01-09 10:31:27', '2019-01-09 10:31:27'),
(4, 'Jueves', '2019-01-09 10:31:27', '2019-01-09 10:31:27'),
(5, 'Viernes', '2019-01-09 10:31:27', '2019-01-09 10:31:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `day_subject`
--

CREATE TABLE `day_subject` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `day_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `day_subject`
--

INSERT INTO `day_subject` (`id`, `subject_id`, `day_id`, `created_at`, `updated_at`) VALUES
(1, 1, 5, '2019-01-07 12:16:16', '2019-01-07 12:16:16'),
(2, 2, 5, '2019-01-07 12:16:16', '2019-01-07 12:16:16'),
(3, 5, 5, '2019-01-07 12:16:16', '2019-01-07 12:16:16'),
(4, 6, 5, '2019-01-07 12:16:16', '2019-01-07 12:16:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `departments`
--

INSERT INTO `departments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, ' Root Department', '2019-01-09 10:31:26', '2019-01-09 10:31:26'),
(2, 'No asignable', '2019-01-09 10:31:26', '2019-01-09 10:31:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `department_section`
--

CREATE TABLE `department_section` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `section_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `department_section`
--

INSERT INTO `department_section` (`id`, `department_id`, `section_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `specific_position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `employees`
--

INSERT INTO `employees` (`id`, `user_id`, `specific_position`, `created_at`, `updated_at`) VALUES
(1, 1, 'Techonology', '2019-01-09 10:31:26', '2019-01-09 10:31:26'),
(2, 3, 'Docente', '2019-01-09 10:31:27', '2019-01-09 10:31:27'),
(3, 4, 'Docente', '2019-01-09 10:31:27', '2019-01-09 10:31:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2013_11_27_210400_create_sections_table', 1),
(2, '2014_09_04_210309_create_departments_table', 1),
(3, '2014_09_04_222418_create_department_section_table', 1),
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2018_11_26_195711_create_status_table', 1),
(7, '2018_11_26_225049_create_employees_table', 1),
(8, '2018_11_27_030045_create_roles_table', 1),
(9, '2018_12_03_153323_create_students_table', 1),
(10, '2018_12_04_192155_create_role_user_table', 1),
(11, '2018_12_04_194813_create_places_table', 1),
(12, '2018_12_04_194908_create_buildings_table', 1),
(13, '2018_12_04_194958_create_place_building_table', 1),
(14, '2018_12_04_200504_create_user_status_table', 1),
(15, '2018_12_04_201038_create_tags_table', 1),
(16, '2018_12_04_201146_create_years_table', 1),
(17, '2018_12_04_201147_create_categories_table', 1),
(18, '2018_12_04_201148_create_tickets_table', 1),
(19, '2018_12_04_201149_create_ticket_user_table', 1),
(20, '2018_12_04_201302_create_ticket_tag_table', 1),
(21, '2018_12_04_201602_create_ticket_category_table', 1),
(22, '2019_01_07_174219_create_rooms_table', 1),
(23, '2019_01_07_175900_create_workshops_table', 1),
(24, '2019_01_07_180115_create_days_table', 1),
(25, '2019_01_07_182147_create_subjects_table', 1),
(26, '2019_01_08_145830_table_workshop_enrollment', 1),
(27, '2019_01_08_153703_table_plans', 1),
(28, '2019_01_08_154141_table_plan_subject', 1),
(29, '2019_01_08_154321_table_plan_student', 1),
(30, '2019_01_10_184312_create_day_subject_table', 2),
(31, '2019_01_13_060943_create_workshops_temp_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `places`
--

CREATE TABLE `places` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `place_building`
--

CREATE TABLE `place_building` (
  `id` int(10) UNSIGNED NOT NULL,
  `place_id` int(10) UNSIGNED NOT NULL,
  `building_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plans`
--

CREATE TABLE `plans` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `plans`
--

INSERT INTO `plans` (`id`, `name`, `alias`, `created_at`, `updated_at`) VALUES
(1, 'Elementary 3A', 'E3A', '2019-01-09 10:31:54', '2019-01-09 10:31:54'),
(2, 'Elementary 3B', 'E3B', '2019-01-09 10:31:54', '2019-01-09 10:31:54'),
(3, 'Elmentary 5A', 'E5A', '2019-01-09 10:31:54', '2019-01-09 10:31:54'),
(4, 'Elmentary 5B', 'E5B', '2019-01-09 10:31:54', '2019-01-09 10:31:54'),
(5, 'Middle School 9B', 'MS9B', '2019-01-09 10:31:54', '2019-01-09 10:31:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_student`
--

CREATE TABLE `plan_student` (
  `id` int(10) UNSIGNED NOT NULL,
  `plan_id` int(10) UNSIGNED NOT NULL,
  `matricula` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `plan_student`
--

INSERT INTO `plan_student` (`id`, `plan_id`, `matricula`, `created_at`, `updated_at`) VALUES
(1, 1, '19-9991-1', '2019-01-07 12:16:16', '2019-01-07 12:16:16'),
(2, 3, '13-0001-1', '2019-01-07 12:16:16', '2019-01-07 12:16:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_subject`
--

CREATE TABLE `plan_subject` (
  `id` int(10) UNSIGNED NOT NULL,
  `plan_id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `quota` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `plan_subject`
--

INSERT INTO `plan_subject` (`id`, `plan_id`, `subject_id`, `quota`) VALUES
(1, 1, 1, 1),
(2, 3, 3, 1),
(3, 1, 2, 1),
(4, 1, 5, 2),
(5, 1, 6, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'root', 'Root', 'Administrador completo del sitio', '2019-01-09 10:31:26', '2019-01-09 10:31:26'),
(2, 'docente', 'Docente', 'Usuario de tipo Docente', '2019-01-09 10:31:27', '2019-01-09 10:31:27'),
(3, 'estandar', 'Estandar', 'Panel de vistas', '2019-01-09 10:31:27', '2019-01-09 10:31:27'),
(4, 'admin', 'Administrador', 'Administrador para usuarios', '2019-01-09 10:31:27', '2019-01-09 10:31:27'),
(5, 'alumno', 'Alumno', 'Usuario de tipo alumno', '2019-01-09 10:31:27', '2019-01-09 10:31:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`) VALUES
(1, 1, 1),
(2, 2, 3),
(3, 4, 3),
(4, 4, 2),
(5, 5, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rooms`
--

CREATE TABLE `rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sections`
--

CREATE TABLE `sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sections`
--

INSERT INTO `sections` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Root Section', '2019-01-09 10:31:26', '2019-01-09 10:31:26'),
(2, 'Elementary', '2019-01-09 10:31:26', '2019-01-09 10:31:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE `status` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `homeroom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matricula` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `students`
--

INSERT INTO `students` (`id`, `user_id`, `homeroom`, `matricula`, `code`, `group`, `grade`, `created_at`, `updated_at`) VALUES
(2, 5, '5A', '13-0001-1', '13-0001-1', 'A', '5', '2019-01-09 10:31:27', '2019-01-09 10:31:27'),
(1, 2, '3A', '19-9991-1', '19-9991-1', 'A', '3', '2019-01-09 10:31:27', '2019-01-09 10:31:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `workshop_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `year_id` int(10) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `subjects`
--

INSERT INTO `subjects` (`id`, `user_id`, `workshop_id`, `name`, `start_time`, `end_time`, `year_id`, `category`, `gender`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'Elementary 2º y 3º', '11:40:00', '12:40:00', 2, '0000', 'A', '2019-01-09 21:03:36', '2019-01-09 21:03:36'),
(2, 4, 2, 'Elementary 2º y 3º', '11:40:00', '12:40:00', 2, '0000', 'A', '2019-01-09 21:03:36', '2019-01-09 21:03:36'),
(3, 4, 2, 'Elementary 4º y 5º', '12:20:00', '13:20:00', 2, '0000', 'A', '2019-01-09 21:03:36', '2019-01-09 21:03:36'),
(4, 3, 3, 'Middle School 6º a 9º', '13:45:00', '14:45:00', 2, '0000', 'A', '2019-01-09 21:03:36', '2019-01-09 21:03:36'),
(5, 3, 7, 'Elementary 2º y 3º\r\n', '11:40:00', '12:40:00', 2, '0000', 'A', '2019-01-07 12:16:16', '2019-01-07 12:16:16'),
(6, 4, 9, 'Elementary 2º y 3º', '11:40:00', '12:40:00', 2, '0000', 'A', '2019-01-07 12:16:16', '2019-01-07 12:16:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tickets`
--

CREATE TABLE `tickets` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `send_datetime` datetime NOT NULL,
  `end_datetime` datetime NOT NULL,
  `avg_datetime` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `civil_protection` int(11) NOT NULL,
  `bind_ticket` int(10) UNSIGNED NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `solution` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticket_category`
--

CREATE TABLE `ticket_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `ticket_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticket_tag`
--

CREATE TABLE `ticket_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `ticket_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticket_user`
--

CREATE TABLE `ticket_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `ticket_id` int(10) UNSIGNED NOT NULL,
  `send_user_id` int(10) UNSIGNED NOT NULL,
  `receive_user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date NOT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `last_name`, `second_last_name`, `birthday`, `nationality`, `gender`, `password`, `department_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pablo', 'vieyrapez@gmail.com', 'Vieyra', 'Lopez', '2019-01-09', 'Mexicano', 'M', '$2y$10$6z6rWqTskqZ.tz.C0LgQdOB.nMUhPYPxeMaRVKQEMw7QKjdP0jgWS', 1, NULL, '2019-01-09 10:31:26', '2019-01-09 10:31:26'),
(2, 'John', 'student@student.itjvallereal.edu.mx', 'Bonachon', NULL, '2019-01-09', 'Mexicano', 'M', '$2y$10$wrY8RTPHjINXSQ6Ue34S4.p2g7Ap2H8A/iJjDCcvDPzZx/MWIWJoS', 1, '1owBpy7gjhAeeNpZVXkCLg6QyzDHhPDK5tInH0TGdThr26TsFTe46KZ9gVGU', '2019-01-09 10:31:26', '2019-01-09 10:31:26'),
(3, 'Jules', 'jules@gmail.com', 'Winnfield', NULL, '1988-08-03', 'Mexicano', 'M', '$2y$10$AiT01Xf6IHPYPmmFA.1qLO/Do9f7wAFUjMFni5HnHRS9Puqkoz8jW', 2, NULL, '2019-01-09 10:31:27', '2019-01-09 10:31:27'),
(4, 'Johnette', 'johnette@gmail.com', 'Napolitano', NULL, '1990-05-25', 'Mexicano', 'F', '$2y$10$cwZMIVljRWTuA6jYbKUPSeoJZ4Keb437cZMwJyXg1SHZLSO.JUIIi', 2, NULL, '2019-01-09 10:31:27', '2019-01-09 10:31:27'),
(5, 'Mia', 'mwallace@student.itjvallereal.edu.mx', 'Wallace', NULL, '2010-01-22', 'Mexicano', 'F', '$2y$10$/bJgM7ZnMnBveFGb7eA2sufepkFbTI7pTgDqW4YQvvQjKIY3zczAO', 2, 'sIgyhSVndKQDz9lPeRcfFhQbFrQdVWmSsVd59wp4OmVV8s2tucdi7e29LXLY', '2019-01-09 10:31:27', '2019-01-09 10:31:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_status`
--

CREATE TABLE `user_status` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `workshops`
--

CREATE TABLE `workshops` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `workshops`
--

INSERT INTO `workshops` (`id`, `name`, `description`, `picture`, `created_at`, `updated_at`) VALUES
(1, 'Tenis', 'Taller Deporte Tenis', 'tenis.jpg', '2019-01-09 10:45:13', '2019-01-09 10:45:13'),
(2, 'Flamenco', 'Taller cultural de Flamenco', 'flamenco.jpg', '2019-01-09 10:45:13', '2019-01-09 10:45:13'),
(3, 'Futbol', 'Taller deportivo de futbol', 'futbol.jpg', '2019-01-09 10:45:13', '2019-01-09 10:45:13'),
(4, 'Clase de Dibujo', 'Taller clase de dibujo', 'dibujo.jpg', '2019-01-07 12:16:16', '2019-01-07 12:16:16'),
(5, 'Tocho Bandera', 'Taller de Tocho Bandera', 'tocho.jpg', '2019-01-07 12:16:16', '2019-01-07 12:16:16'),
(6, 'Karate', 'Taller de Karate', 'karate.jpg', '2019-01-07 12:16:16', '2019-01-07 12:16:16'),
(7, 'Ajedrez', 'Taller de Ajedrez', 'ajedrez.jpg', '2019-01-07 12:16:16', '2019-01-07 12:16:16'),
(8, 'Hip-hop', 'Taller de Hip-hop', 'hiphop.jpg', '2019-01-07 12:16:16', '2019-01-07 12:16:16'),
(9, 'Jazz', 'Taller de jazz', 'jazz.jpg', '2019-01-07 12:16:16', '2019-01-07 12:16:16'),
(10, 'Robotica', 'Taller de Robotica', 'robotica.jpg', '2019-01-07 12:16:16', '2019-01-07 12:16:16'),
(11, 'Atletismo', 'Taller de Atletismo', 'atletismo.jpg', '2019-01-07 12:16:16', '2019-01-07 12:16:16'),
(12, 'Defensa Personal', 'Taller de defensa personal', 'defensa.jpg', '2019-01-07 12:16:16', '2019-01-07 12:16:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `workshops_temp`
--

CREATE TABLE `workshops_temp` (
  `id` int(10) UNSIGNED NOT NULL,
  `matricula` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `attempts` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `workshop_enrollment`
--

CREATE TABLE `workshop_enrollment` (
  `id` int(10) UNSIGNED NOT NULL,
  `matricula` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `year_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `years`
--

CREATE TABLE `years` (
  `id` int(10) UNSIGNED NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_year` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `years`
--

INSERT INTO `years` (`id`, `year`, `current_year`, `created_at`, `updated_at`) VALUES
(1, '2017-2018', 0, '2019-01-09 10:52:25', '2019-01-09 10:52:25'),
(2, '2018-2019', 1, '2019-01-09 10:52:25', '2019-01-09 10:52:25');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `buildings`
--
ALTER TABLE `buildings`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `day_subject`
--
ALTER TABLE `day_subject`
  ADD PRIMARY KEY (`id`),
  ADD KEY `day_subject_subject_id_foreign` (`subject_id`),
  ADD KEY `day_subject_day_id_foreign` (`day_id`);

--
-- Indices de la tabla `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `department_section`
--
ALTER TABLE `department_section`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_section_department_id_foreign` (`department_id`),
  ADD KEY `department_section_section_id_foreign` (`section_id`);

--
-- Indices de la tabla `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `place_building`
--
ALTER TABLE `place_building`
  ADD PRIMARY KEY (`id`),
  ADD KEY `place_building_place_id_foreign` (`place_id`),
  ADD KEY `place_building_building_id_foreign` (`building_id`);

--
-- Indices de la tabla `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `plan_student`
--
ALTER TABLE `plan_student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plan_student_plan_id_foreign` (`plan_id`),
  ADD KEY `plan_student_matricula_foreign` (`matricula`);

--
-- Indices de la tabla `plan_subject`
--
ALTER TABLE `plan_subject`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plan_subject_plan_id_foreign` (`plan_id`),
  ADD KEY `plan_subject_subject_id_foreign` (`subject_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`matricula`),
  ADD KEY `students_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subjects_user_id_foreign` (`user_id`),
  ADD KEY `subjects_workshop_id_foreign` (`workshop_id`),
  ADD KEY `subjects_year_id_foreign` (`year_id`);

--
-- Indices de la tabla `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tickets_status_id_foreign` (`status_id`),
  ADD KEY `tickets_year_id_foreign` (`year_id`);

--
-- Indices de la tabla `ticket_category`
--
ALTER TABLE `ticket_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticket_category_ticket_id_foreign` (`ticket_id`),
  ADD KEY `ticket_category_category_id_foreign` (`category_id`);

--
-- Indices de la tabla `ticket_tag`
--
ALTER TABLE `ticket_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticket_tag_ticket_id_foreign` (`ticket_id`),
  ADD KEY `ticket_tag_tag_id_foreign` (`tag_id`);

--
-- Indices de la tabla `ticket_user`
--
ALTER TABLE `ticket_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticket_user_ticket_id_foreign` (`ticket_id`),
  ADD KEY `ticket_user_send_user_id_foreign` (`send_user_id`),
  ADD KEY `ticket_user_receive_user_id_foreign` (`receive_user_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_department_id_foreign` (`department_id`);

--
-- Indices de la tabla `user_status`
--
ALTER TABLE `user_status`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_status_user_id_foreign` (`user_id`),
  ADD KEY `user_status_status_id_foreign` (`status_id`);

--
-- Indices de la tabla `workshops`
--
ALTER TABLE `workshops`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `workshops_temp`
--
ALTER TABLE `workshops_temp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `workshops_temp_matricula_foreign` (`matricula`),
  ADD KEY `workshops_temp_subject_id_foreign` (`subject_id`);

--
-- Indices de la tabla `workshop_enrollment`
--
ALTER TABLE `workshop_enrollment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `workshop_enrollment_matricula_foreign` (`matricula`),
  ADD KEY `workshop_enrollment_subject_id_foreign` (`subject_id`),
  ADD KEY `workshop_enrollment_year_id_foreign` (`year_id`);

--
-- Indices de la tabla `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `buildings`
--
ALTER TABLE `buildings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `days`
--
ALTER TABLE `days`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `day_subject`
--
ALTER TABLE `day_subject`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `department_section`
--
ALTER TABLE `department_section`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `places`
--
ALTER TABLE `places`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `place_building`
--
ALTER TABLE `place_building`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `plan_student`
--
ALTER TABLE `plan_student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `plan_subject`
--
ALTER TABLE `plan_subject`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `status`
--
ALTER TABLE `status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ticket_category`
--
ALTER TABLE `ticket_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ticket_tag`
--
ALTER TABLE `ticket_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ticket_user`
--
ALTER TABLE `ticket_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `user_status`
--
ALTER TABLE `user_status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `workshops`
--
ALTER TABLE `workshops`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `workshops_temp`
--
ALTER TABLE `workshops_temp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `workshop_enrollment`
--
ALTER TABLE `workshop_enrollment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `years`
--
ALTER TABLE `years`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `day_subject`
--
ALTER TABLE `day_subject`
  ADD CONSTRAINT `day_subject_day_id_foreign` FOREIGN KEY (`day_id`) REFERENCES `days` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `day_subject_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `department_section`
--
ALTER TABLE `department_section`
  ADD CONSTRAINT `department_section_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `department_section_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `place_building`
--
ALTER TABLE `place_building`
  ADD CONSTRAINT `place_building_building_id_foreign` FOREIGN KEY (`building_id`) REFERENCES `buildings` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `place_building_place_id_foreign` FOREIGN KEY (`place_id`) REFERENCES `places` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `plan_student`
--
ALTER TABLE `plan_student`
  ADD CONSTRAINT `plan_student_matricula_foreign` FOREIGN KEY (`matricula`) REFERENCES `students` (`matricula`) ON DELETE CASCADE,
  ADD CONSTRAINT `plan_student_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `plans` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `plan_subject`
--
ALTER TABLE `plan_subject`
  ADD CONSTRAINT `plan_subject_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `plans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `plan_subject_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subjects_workshop_id_foreign` FOREIGN KEY (`workshop_id`) REFERENCES `workshops` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subjects_year_id_foreign` FOREIGN KEY (`year_id`) REFERENCES `years` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tickets_year_id_foreign` FOREIGN KEY (`year_id`) REFERENCES `years` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `ticket_category`
--
ALTER TABLE `ticket_category`
  ADD CONSTRAINT `ticket_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ticket_category_ticket_id_foreign` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `ticket_tag`
--
ALTER TABLE `ticket_tag`
  ADD CONSTRAINT `ticket_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ticket_tag_ticket_id_foreign` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `ticket_user`
--
ALTER TABLE `ticket_user`
  ADD CONSTRAINT `ticket_user_receive_user_id_foreign` FOREIGN KEY (`receive_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ticket_user_send_user_id_foreign` FOREIGN KEY (`send_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ticket_user_ticket_id_foreign` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `user_status`
--
ALTER TABLE `user_status`
  ADD CONSTRAINT `user_status_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_status_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `workshops_temp`
--
ALTER TABLE `workshops_temp`
  ADD CONSTRAINT `workshops_temp_matricula_foreign` FOREIGN KEY (`matricula`) REFERENCES `students` (`matricula`) ON DELETE CASCADE,
  ADD CONSTRAINT `workshops_temp_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `workshop_enrollment`
--
ALTER TABLE `workshop_enrollment`
  ADD CONSTRAINT `workshop_enrollment_matricula_foreign` FOREIGN KEY (`matricula`) REFERENCES `students` (`matricula`) ON DELETE CASCADE,
  ADD CONSTRAINT `workshop_enrollment_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `workshop_enrollment_year_id_foreign` FOREIGN KEY (`year_id`) REFERENCES `years` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
