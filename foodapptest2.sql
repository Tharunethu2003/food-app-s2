-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2025 at 09:25 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodapptest2`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1738567428),
('a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1738567428;', 1738567428);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `meal_kit_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `quantity` decimal(8,2) DEFAULT NULL,
  `recipe_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meal_kits`
--

CREATE TABLE `meal_kits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `ingredients` text DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `tags` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meal_kits`
--

INSERT INTO `meal_kits` (`id`, `name`, `description`, `price`, `picture`, `ingredients`, `category`, `tags`, `created_at`, `updated_at`) VALUES
(1, 'Caprese Salad', 'A refreshing Italian salad with tomatoes, mozzarella, basil, and balsamic dressing.', 120.00, NULL, 'Tomatoes, Mozzarella, Basil, Balsamic Dressing', 'Vegetarian', 'Salad, Italian, Healthy', '2025-02-01 20:43:12', '2025-02-01 20:43:12'),
(2, 'Chocolate Lava Cake', 'A decadent molten chocolate cake with a rich, gooey center.', 850.00, NULL, 'Chocolate, Butter, Sugar, Eggs, Flour', 'Non-Veg', 'Dessert, Chocolate, Cake', '2025-02-01 20:43:12', '2025-02-01 20:43:12'),
(3, 'Chicken Alfredo Pizza', 'A creamy chicken Alfredo sauce topped with mozzarella on a pizza crust.', 2000.00, NULL, 'Chicken, Alfredo Sauce, Mozzarella, Pizza Dough', 'Non-Veg', 'Pizza, Chicken, Creamy', '2025-02-01 20:43:13', '2025-02-01 20:43:13'),
(4, 'Quinoa Salad with Chickpeas and Avocado', 'A nutritious salad made with quinoa, chickpeas, and avocado.', 150.00, NULL, 'Quinoa, Chickpeas, Avocado, Lemon, Olive Oil', 'Vegetarian', 'Salad, Quinoa, Healthy', '2025-02-01 20:43:13', '2025-02-01 20:43:13'),
(5, 'Spaghetti Carbonara', 'A classic Italian pasta dish with eggs, cheese, pancetta, and pepper.', 1800.00, NULL, 'Spaghetti, Eggs, Cheese, Pancetta, Pepper', 'Non-Veg', 'Pasta, Italian, Cheese', '2025-02-01 20:43:13', '2025-02-01 20:43:13'),
(6, 'Caprese Salad', 'A refreshing Italian salad with tomatoes, mozzarella, basil, and balsamic dressing.', 120.00, NULL, 'Tomatoes, Mozzarella, Basil, Balsamic Dressing', 'Vegetarian', 'Salad, Italian, Healthy', '2025-02-01 20:48:06', '2025-02-01 20:48:06'),
(7, 'Chocolate Lava Cake', 'A decadent molten chocolate cake with a rich, gooey center.', 850.00, NULL, 'Chocolate, Butter, Sugar, Eggs, Flour', 'Non-Veg', 'Dessert, Chocolate, Cake', '2025-02-01 20:48:06', '2025-02-01 20:48:06'),
(8, 'Chicken Alfredo Pizza', 'A creamy chicken Alfredo sauce topped with mozzarella on a pizza crust.', 2000.00, NULL, 'Chicken, Alfredo Sauce, Mozzarella, Pizza Dough', 'Non-Veg', 'Pizza, Chicken, Creamy', '2025-02-01 20:48:06', '2025-02-01 20:48:06'),
(9, 'Quinoa Salad with Chickpeas and Avocado', 'A nutritious salad made with quinoa, chickpeas, and avocado.', 150.00, NULL, 'Quinoa, Chickpeas, Avocado, Lemon, Olive Oil', 'Vegetarian', 'Salad, Quinoa, Healthy', '2025-02-01 20:48:07', '2025-02-01 20:48:07'),
(10, 'Spaghetti Carbonara', 'A classic Italian pasta dish with eggs, cheese, pancetta, and pepper.', 1800.00, NULL, 'Spaghetti, Eggs, Cheese, Pancetta, Pepper', 'Non-Veg', 'Pasta, Italian, Cheese', '2025-02-01 20:48:07', '2025-02-01 20:48:07'),
(11, 'Caprese Salad', 'A refreshing Italian salad with tomatoes, mozzarella, basil, and balsamic dressing.', 120.00, NULL, 'Tomatoes, Mozzarella, Basil, Balsamic Dressing', 'Vegetarian', 'Salad, Italian, Healthy', '2025-02-01 21:15:19', '2025-02-01 21:15:19'),
(12, 'Chocolate Lava Cake', 'A decadent molten chocolate cake with a rich, gooey center.', 850.00, NULL, 'Chocolate, Butter, Sugar, Eggs, Flour', 'Non-Veg', 'Dessert, Chocolate, Cake', '2025-02-01 21:15:19', '2025-02-01 21:15:19'),
(13, 'Chicken Alfredo Pizza', 'A creamy chicken Alfredo sauce topped with mozzarella on a pizza crust.', 2000.00, NULL, 'Chicken, Alfredo Sauce, Mozzarella, Pizza Dough', 'Non-Veg', 'Pizza, Chicken, Creamy', '2025-02-01 21:15:19', '2025-02-01 21:15:19'),
(14, 'Quinoa Salad with Chickpeas and Avocado', 'A nutritious salad made with quinoa, chickpeas, and avocado.', 150.00, NULL, 'Quinoa, Chickpeas, Avocado, Lemon, Olive Oil', 'Vegetarian', 'Salad, Quinoa, Healthy', '2025-02-01 21:15:19', '2025-02-01 21:15:19'),
(15, 'Spaghetti Carbonara', 'A classic Italian pasta dish with eggs, cheese, pancetta, and pepper.', 1800.00, NULL, 'Spaghetti, Eggs, Cheese, Pancetta, Pepper', 'Non-Veg', 'Pasta, Italian, Cheese', '2025-02-01 21:15:20', '2025-02-01 21:15:20');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_12_08_163519_add_two_factor_columns_to_users_table', 1),
(5, '2024_12_08_163557_create_personal_access_tokens_table', 1),
(6, '2024_12_08_164647_create_meal_kits_table', 1),
(7, '2024_12_08_164807_create_orders_table', 1),
(8, '2024_12_08_164847_create_carts_table', 1),
(9, '2024_12_08_211553_add_is_admin_to_users_table', 1),
(10, '2024_12_08_231651_create_order_items_table', 1),
(11, '2025_01_22_112955_add_role_to_users_table', 1),
(12, '2025_02_01_133953_add_deleted_at_to_users_table', 1),
(13, '2025_02_02_024853_create_recipes_table', 2),
(15, '2025_02_02_065136_add_prep_time_to_recipes_table', 3),
(16, '2025_02_02_085454_create_ingredients_table', 4),
(17, '2025_02_02_090608_remove_ingredients_from_recipes', 5),
(18, '2025_02_02_090709_add_ingredients_to_recipes', 6),
(19, '2025_02_02_090733_add_instructions_to_recipes', 6),
(20, '2025_02_02_125010_add_items_to_orders_table', 7),
(21, '2025_02_02_202115_create_reviews_table', 8),
(22, '2025_02_02_220413_create_posts_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total_amount` decimal(8,2) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `items` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`items`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total_amount`, `status`, `created_at`, `updated_at`, `items`) VALUES
(1, 4, 4150.00, 'paid', '2025-02-02 07:12:00', '2025-02-02 07:12:00', NULL),
(2, 4, 1000.00, 'paid', '2025-02-02 07:17:27', '2025-02-02 07:17:27', NULL),
(3, 4, 1000.00, 'paid', '2025-02-02 07:18:43', '2025-02-02 07:18:43', NULL),
(4, 4, 1000.00, 'paid', '2025-02-02 07:22:34', '2025-02-02 07:22:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `meal_kit_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 5, 'API Token', '3d384329ffd0ec87cda58a97a26a9fc202c1048f82b7c8c84dda173056ca0f4c', '[\"*\"]', NULL, NULL, '2025-02-02 14:25:06', '2025-02-02 14:25:06'),
(2, 'App\\Models\\User', 5, 'API Token', '733699771244825e44bd1994bac891a06be16222405f718fece78a4effd3a71e', '[\"*\"]', NULL, NULL, '2025-02-02 14:26:08', '2025-02-02 14:26:08'),
(3, 'App\\Models\\User', 4, 'API Token', '1f5e63f7432a5d3bb070266bd2733995005f046649c57ed4c8893885ec537bf3', '[\"*\"]', '2025-02-03 01:41:04', NULL, '2025-02-03 01:38:14', '2025-02-03 01:41:04'),
(4, 'App\\Models\\User', 4, 'API Token', '56152db1a89a81bbcb8f46a9beac32eb4e79a1de70812aed3431c3b093e1d64f', '[\"*\"]', NULL, NULL, '2025-02-03 01:41:54', '2025-02-03 01:41:54'),
(5, 'App\\Models\\User', 4, 'API Token', 'ec7bb2d71822a29e8e050d75aa92f3142e1789814da59f88c842213100c82600', '[\"*\"]', NULL, NULL, '2025-02-03 02:24:14', '2025-02-03 02:24:14');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 4, 'the pizza was great', 'images/QXujrxJyHIP9VYohwPYp1NECFTNboBxf2UrCgJDY.jpg', '2025-02-02 16:38:40', '2025-02-02 16:38:40'),
(2, 4, 'The veggie burgers were a hit at my friends birthday party', 'images/upOSRPxdk26lcwXNuNocdtthdO8u7Fq83ldqd2e9.jpg', '2025-02-02 16:54:09', '2025-02-02 16:54:09'),
(3, 4, 'great dish', 'images/ycACXzXMrWjVtIdGIbsR3OdkqzYODp231n6lXOty.jpg', '2025-02-03 01:30:37', '2025-02-03 01:30:37');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `tags` text DEFAULT NULL,
  `prep_time` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ingredients` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`ingredients`)),
  `instructions` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `name`, `description`, `price`, `picture`, `category`, `tags`, `prep_time`, `created_at`, `updated_at`, `ingredients`, `instructions`) VALUES
(33, 'Caprese Salad', 'A refreshing Italian salad with tomatoes, mozzarella, basil, and balsamic dressing.', 120.00, 'storage/images/caprese-salad.jpg', 'Vegetarian', 'Salad, Italian, Healthy', 15, '2025-02-02 03:52:07', '2025-02-02 03:52:07', '[\"Tomatoes\",\"Mozzarella\",\"Basil\",\"Balsamic Dressing\"]', '1. Slice the tomatoes and mozzarella. \n                                2. Arrange them on a plate. \n                                3. Add basil leaves on top.\n                                4. Drizzle with balsamic dressing.'),
(34, 'Chocolate Lava Cake', 'A decadent molten chocolate cake with a rich, gooey center.', 850.00, 'storage/images/chocolate-lava-cake.jpg', 'Non-Veg', 'Dessert, Chocolate, Cake', 15, '2025-02-02 03:52:07', '2025-02-02 03:52:07', '[\"Chocolate\",\"Butter\",\"Sugar\",\"Eggs\",\"Flour\"]', '1. Melt the chocolate and butter together. \n                                2. Mix in sugar and eggs. \n                                3. Pour batter into ramekins. \n                                4. Bake until edges are firm, but center is soft.'),
(35, 'Chicken Alfredo Pizza', 'A creamy chicken Alfredo sauce topped with mozzarella on a pizza crust.', 2000.00, 'storage/images/chicken-alfredo-pizza.jpg', 'Non-Veg', 'Pizza, Chicken, Creamy', 15, '2025-02-02 03:52:08', '2025-02-02 03:52:08', '[\"Chicken\",\"Alfredo Sauce\",\"Mozzarella\",\"Pizza Dough\"]', '1. Preheat the oven to 400°F (200°C). \n                                2. Roll out pizza dough and spread Alfredo sauce. \n                                3. Add cooked chicken and mozzarella on top. \n                                4. Bake until crust is golden and cheese is melted.'),
(36, 'Quinoa Salad with Chickpeas and Avocado', 'A nutritious salad made with quinoa, chickpeas, and avocado.', 150.00, 'storage/images/quinoa-salad.jpg', 'Vegetarian', 'Salad, Quinoa, Healthy', 15, '2025-02-02 03:52:08', '2025-02-02 03:52:08', '[\"Quinoa\",\"Chickpeas\",\"Avocado\",\"Lemon\",\"Olive Oil\"]', '1. Cook the quinoa according to package instructions. \n                                2. Combine chickpeas, diced avocado, and cooked quinoa. \n                                3. Drizzle with lemon juice and olive oil. \n                                4. Toss to combine.'),
(37, 'Spaghetti Carbonara', 'A classic Italian pasta dish with eggs, cheese, pancetta, and pepper.', 1800.00, 'storage/images/spaghetti-carbonara.jpg', 'Non-Veg', 'Pasta, Italian, Cheese', 15, '2025-02-02 03:52:08', '2025-02-02 03:52:08', '[\"Spaghetti\",\"Eggs\",\"Cheese\",\"Pancetta\",\"Pepper\"]', '1. Cook spaghetti according to package directions. \n                                2. Fry pancetta until crispy. \n                                3. Mix eggs and cheese together. \n                                4. Toss pasta with pancetta and egg mixture. Add pepper to taste.'),
(38, 'Grilled Veggie Burger', 'A plant-based burger made with grilled vegetables and served with lettuce and tomato.', 250.00, 'storage/images/grilled-veggie-burger.jpg', 'Vegetarian', 'Burger, Veggie, Healthy', 15, '2025-02-02 03:52:08', '2025-02-02 03:52:08', '[\"Vegetables\",\"Burger Bun\",\"Lettuce\",\"Tomato\",\"Mayonnaise\"]', '1. Grill the vegetables until tender. \n                                2. Toast the burger buns. \n                                3. Assemble the burger with lettuce, tomato, grilled vegetables, and mayonnaise. \n                                4. Serve immediately.'),
(39, 'Beef Wellington', 'A classic English dish made with beef fillet coated with mushrooms and wrapped in puff pastry.', 4000.00, 'storage/images/beef-wellington.jpg', 'Non-Veg', 'Beef, Pastry, Classic', 15, '2025-02-02 03:52:08', '2025-02-02 03:52:08', '[\"Beef\",\"Mushrooms\",\"Puff Pastry\",\"Dijon Mustard\",\"Egg Wash\"]', '1. Sear the beef fillet and coat with Dijon mustard. \n                                2. Prepare a mushroom duxelles. \n                                3. Wrap the beef in the mushroom mixture and puff pastry. \n                                4. Bake until golden brown and serve.'),
(40, 'Vegetable Stir Fry', 'A colorful mix of stir-fried vegetables in a savory sauce.', 180.00, 'storage/images/vegetable-stir-fry.jpg', 'Vegetarian', 'Stir Fry, Vegetables, Asian', 15, '2025-02-02 03:52:08', '2025-02-02 03:52:08', '[\"Broccoli\",\"Carrot\",\"Bell Peppers\",\"Soy Sauce\",\"Garlic\"]', '1. Stir-fry the vegetables in a hot pan. \n                                2. Add garlic and soy sauce. \n                                3. Continue to cook until vegetables are tender. \n                                4. Serve immediately.'),
(41, 'Shrimp Scampi', 'Shrimp cooked in a garlic butter sauce with pasta.', 1200.00, 'storage/images/shrimp-scampi.jpg', 'Non-Veg', 'Seafood, Pasta, Garlic', 15, '2025-02-02 03:52:08', '2025-02-02 03:52:08', '[\"Shrimp\",\"Garlic\",\"Butter\",\"Pasta\",\"Parsley\"]', '1. Cook pasta according to package instructions. \n                                2. Sauté garlic and shrimp in butter. \n                                3. Toss cooked pasta with shrimp mixture and garnish with parsley. \n                                4. Serve immediately.'),
(42, 'Mushroom Risotto', 'A creamy Italian rice dish made with mushrooms and Parmesan cheese.', 950.00, 'storage/images/mushroom-risotto.jpg', 'Vegetarian', 'Italian, Rice, Mushrooms', 15, '2025-02-02 03:52:08', '2025-02-02 03:52:08', '[\"Rice\",\"Mushrooms\",\"Parmesan\",\"Broth\",\"Butter\"]', '1. Sauté mushrooms in butter until soft. \n                                2. Add rice and stir to coat. \n                                3. Gradually add broth while stirring constantly. \n                                4. Once rice is tender, stir in Parmesan and serve.');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `recipe_id` bigint(20) UNSIGNED NOT NULL,
  `review` text NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `recipe_id`, `review`, `rating`, `created_at`, `updated_at`) VALUES
(1, 1, 33, 'This was an amazing dish!', 5, '2025-02-02 15:01:43', '2025-02-02 15:01:43'),
(2, 4, 38, 'The best!', 5, '2025-02-02 15:05:35', '2025-02-02 15:05:35');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3dM2WGuBnL44826CIn4Wv2pO8eosn9EzxZnQejDj', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36 Edg/132.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiQUJQY1NPdmlEalBqdURSYkt6bndycEdDZlgwZXRkUnpDMGd1NzVKciI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NDtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozNDoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2xhbmRpbmctcGFnZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NDoiY2FydCI7YToyOntpOjM1O2E6NDp7czo0OiJuYW1lIjtzOjIxOiJDaGlja2VuIEFsZnJlZG8gUGl6emEiO3M6NToicHJpY2UiO3M6NzoiMjAwMC4wMCI7czo4OiJxdWFudGl0eSI7aToxO3M6NToiaW1hZ2UiO3M6NDA6InN0b3JhZ2UvaW1hZ2VzL2NoaWNrZW4tYWxmcmVkby1waXp6YS5qcGciO31pOjM0O2E6NDp7czo0OiJuYW1lIjtzOjE5OiJDaG9jb2xhdGUgTGF2YSBDYWtlIjtzOjU6InByaWNlIjtzOjY6Ijg1MC4wMCI7czo4OiJxdWFudGl0eSI7aToxO3M6NToiaW1hZ2UiO3M6Mzg6InN0b3JhZ2UvaW1hZ2VzL2Nob2NvbGF0ZS1sYXZhLWNha2UuanBnIjt9fX0=', 1738570207),
('II25dCaWgWGMM14VdvWsWUrB7LXjMQm4nssdy0hb', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiQzNrUmZqQk9yZmZ0aFhzS0VXNlIySm82YnVGYUlaUjhGaDJWTlRocSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQyOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYWRtaW4vYW5hbHl0aWNzLXBhZ2UiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkM0hPdDVrWU1HdGVXM3BuMEJaRFJldXVYRXJsRXN6V3E4NVdJcTc5NGtUa21xdnV3OVNaVXUiO30=', 1738567389);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `is_admin`, `role`, `deleted_at`) VALUES
(1, 'Test User', 'test@example.com', '2025-02-01 20:42:58', '$2y$12$Aihzlx2tUTWJURhr9NLcdesMu0bdUp43QIVx5h.dtHna.1B5D/IrW', NULL, NULL, NULL, '8U7N6mrwct', NULL, NULL, '2025-02-01 20:42:59', '2025-02-01 20:42:59', 0, 'user', NULL),
(2, 'Admin', 'admin@example.com', NULL, '$2y$12$3HOt5kYMGteW3pn0BZDReuuXErlEszWq85WIq794kTkmqvuw9SZUu', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-01 20:43:20', '2025-02-01 20:43:20', 0, 'admin', NULL),
(3, 'tharunethu', 'tharunethudesilva183@gmail.com', NULL, '$2y$12$jWemkg7XzbCwGdUw/lTQfekPtwtb9y12yFE8Pop09l.3AM9A1uMMi', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-01 20:45:04', '2025-02-01 20:45:04', 0, 'user', NULL),
(4, 'kiki', 'kiki@gmail.com', NULL, '$2y$12$33Qb0hYbKbWcsGhlQPCncu5MJddRI9XduHMFdRbu1csezLoQ1tXEm', NULL, NULL, NULL, 'LtnsqpRrPHocIwLzVKiGPJbe6I84hdQ8QgwxZCQTrUHRZdKKn5vzul9kb8E7', NULL, NULL, '2025-02-02 04:45:26', '2025-02-02 04:45:26', 0, 'user', NULL),
(5, 'John Doe', 'johndoe@example.com', NULL, '$2y$12$m1Li6rtjBx.mTyn8B4jexOpZWR38EI2Cw5atouvB.uUiAzd0qx.TK', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-02 14:25:06', '2025-02-02 14:25:06', 0, 'user', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_meal_kit_id_foreign` (`meal_kit_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ingredients_recipe_id_foreign` (`recipe_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meal_kits`
--
ALTER TABLE `meal_kits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_meal_kit_id_foreign` (`meal_kit_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_recipe_id_foreign` (`recipe_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meal_kits`
--
ALTER TABLE `meal_kits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_meal_kit_id_foreign` FOREIGN KEY (`meal_kit_id`) REFERENCES `meal_kits` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD CONSTRAINT `ingredients_recipe_id_foreign` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_meal_kit_id_foreign` FOREIGN KEY (`meal_kit_id`) REFERENCES `meal_kits` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_recipe_id_foreign` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
