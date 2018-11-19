-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2018 at 04:30 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `slug`, `created_at`, `updated_at`) VALUES
(5, 'Novel', 'Second Category is novel', 'Novel', '2018-11-14 19:47:31', '2018-11-14 19:47:31'),
(6, 'Poetry', 'Third Category is poetry', 'Poetry', '2018-11-14 19:47:49', '2018-11-14 19:47:49'),
(7, 'Roman', 'Fourth Category is roman', 'Roman', '2018-11-14 19:48:08', '2018-11-14 19:48:08'),
(8, 'Legend', 'Legend novels not real', 'Legend', '2018-11-15 12:53:29', '2018-11-15 12:53:29'),
(9, 'Article', 'Simple Articles', 'Article', '2018-11-18 12:38:21', '2018-11-18 12:38:21');

-- --------------------------------------------------------

--
-- Table structure for table `category_posts`
--

CREATE TABLE `category_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_posts`
--

INSERT INTO `category_posts` (`id`, `category_id`, `post_id`, `created_at`, `updated_at`) VALUES
(20, 6, 21, '2018-11-18 12:36:20', '2018-11-18 12:36:20'),
(21, 8, 21, '2018-11-18 12:36:20', '2018-11-18 12:36:20'),
(23, 9, 20, '2018-11-18 12:38:42', '2018-11-18 12:38:42'),
(49, 5, 23, '2018-11-18 18:07:00', '2018-11-18 18:07:00'),
(56, 7, 22, '2018-11-18 18:34:09', '2018-11-18 18:34:09'),
(57, 9, 24, '2018-11-18 20:03:49', '2018-11-18 20:03:49'),
(83, 5, 41, '2018-11-18 21:43:51', '2018-11-18 21:43:51'),
(84, 7, 41, '2018-11-18 21:43:51', '2018-11-18 21:43:51'),
(89, 9, 28, '2018-11-18 21:45:54', '2018-11-18 21:45:54'),
(90, 7, 29, '2018-11-18 21:46:16', '2018-11-18 21:46:16'),
(91, 8, 39, '2018-11-18 21:46:55', '2018-11-18 21:46:55'),
(92, 9, 39, '2018-11-18 21:46:55', '2018-11-18 21:46:55'),
(93, 5, 42, '2018-11-18 21:48:18', '2018-11-18 21:48:18'),
(94, 9, 42, '2018-11-18 21:48:18', '2018-11-18 21:48:18'),
(95, 6, 40, '2018-11-18 21:48:59', '2018-11-18 21:48:59'),
(96, 8, 40, '2018-11-18 21:48:59', '2018-11-18 21:48:59');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2018_11_12_202533_create_catagories_table', 2),
(8, '2018_11_12_203211_create_posts_table', 2),
(9, '2018_11_12_204759_create_category_posts_table', 3),
(10, '2018_11_15_000116_add_category_column_posts_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$a2NJ1eNphCdWEPNMTkdHhOXIGy8ejr4Kduu2X0H6Q/.laRo2lXewC', '2018-11-17 18:11:26');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `photo`, `content`, `slug`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(20, 'Box is emotional sport', '1542316861.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. At eum illo minima natus! Accusamus architecto asperiores at autem dignissimos distinctio, est exercitationem illum impedit iste odio officia officiis perferendis, voluptate?', 'Box-is-emotional-sport', 1, '2018-11-15 17:21:01', '2018-11-18 20:58:50', '2018-11-18 20:58:50'),
(21, 'Brain Storm', '1542557799.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto dolorum enim eum eveniet exercitationem facilis fugit molestias optio quod, quos ratione rem reprehenderit similique vitae voluptatum! Eaque incidunt nam neque.lorem', 'Brain-Storm', 1, '2018-11-18 12:16:41', '2018-11-18 12:36:20', NULL),
(22, 'What is Lorem Ipsum', '1542559151.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'What-is-Lorem-Ipsum', 1, '2018-11-18 12:17:07', '2018-11-18 18:34:08', NULL),
(23, 'Why do we use it', '1542559329.jpg', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 'Why-do-we-use-it', 1, '2018-11-18 12:17:22', '2018-11-18 18:07:00', NULL),
(24, 'Doctors\' group slams move for mandatory doctor\'s note for minor illnesses?', '1542561127.jpg', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>', 'Doctors\'-group-slams-move-for-mandatory-doctor\'s-note-for-minor-illnesses?', 1, '2018-11-18 12:20:53', '2018-11-18 20:03:49', NULL),
(28, 'Neque porro quisquam est qui dolorem', '1542591952.jpg', '<p>Morbi lectus sem, ullamcorper sit amet ullamcorper non, ornare semper elit. Suspendisse nunc ex, vulputate in dictum vitae, maximus eu arcu. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras et maximus tellus, sit amet vestibulum sem. Sed mattis neque eget magna fermentum, et dignissim ipsum porttitor. Praesent dignissim ipsum a justo imperdiet, at luctus purus sollicitudin. Ut fermentum magna neque, at dignissim ex blandit quis. Vivamus justo magna, efficitur id ultricies a, tempus in augue. Cras commodo euismod sem, a malesuada magna congue non. Suspendisse tincidunt erat at turpis facilisis posuere nec vel enim. Nunc hendrerit pharetra turpis eu molestie. Suspendisse tincidunt felis ac ante mattis, quis semper turpis iaculis. Donec auctor efficitur urna at fringilla. Ut sodales molestie odio quis ullamcorper. Ut ullamcorper tortor consequat egestas sagittis. Quisque molestie auctor interdum.</p>', 'Neque-porro-quisquam-est-qui-dolorem', 5, '2018-11-18 13:06:20', '2018-11-18 21:45:53', NULL),
(29, 'Literary critics, historians, avid readers, and even casual readers will all have different opinions\"', '1542591975.jpg', '<p>Harper Lee, believed to be one of the most influential authors to have ever existed, famously published only a single novel (up until its controversial sequel was published in 2015 just before her death). Lee&rsquo;s To Kill a Mockingbird was published in 1960 and became an immediate classic of literature. The novel examines racism in the American South through the innocent wide eyes of a clever young girl named Jean Louise (&ldquo;Scout&rdquo;) Finch. Its iconic characters, most notably the sympathetic and just lawyer and father Atticus Finch, served as role models and changed perspectives in the United States at a time when tensions regarding race were high.</p>', 'Literary-critics,-historians,-avid-readers,-and-even-casual-readers-will-all-have-different-opinions\"', 5, '2018-11-18 13:10:00', '2018-11-18 21:46:15', NULL),
(39, 'Latin derived from Cicero\'s 1st-century BC', '1542592014.jpg', '<p>Until recently, the prevailing view assumed <em>lorem ipsum</em> was born as a nonsense text. &ldquo;It\'s not Latin, though it looks like it, and it actually says nothing,&rdquo; <em>Before &amp; After</em> magazine <a title=\"Straight Dope &ndash; What Does the Filler Text Lorem Ipsum Mean?\" href=\"https://www.straightdope.com/columns/read/2290/what-does-the-filler-text-lorem-ipsum-mean/\" target=\"_blank\" rel=\"noopener\">answered a curious reader</a>, &ldquo;Its &lsquo;words&rsquo; loosely approximate the frequency with which letters occur in English, which is why at a glance it looks pretty real.&rdquo;</p>', 'Latin-derived-from-Cicero\'s-1st-century-BC', 5, '2018-11-18 21:34:07', '2018-11-18 21:46:55', NULL),
(40, 'Some claim lorem ipsum threatens to promote design over content, while others defend', '1542591319.jpg', '<p class=\"f4 cl-white mv16\">So how did the classical Latin become so incoherent? According to McClintock, a 15th century typesetter likely scrambled part of Cicero\'s <em>De Finibus</em> in order to provide placeholder text to mockup various fonts for a type specimen book.</p>\r\n<p class=\"f4 cl-white mv16\">It\'s difficult to find examples of <em>lorem ipsum</em> in use before Letraset made it popular as a dummy text in the 1960s, although McClintock says he remembers coming across the <em>lorem ipsum</em> passage in a book of old metal type samples. So far he hasn\'t relocated where he once saw the passage, but the popularity of Cicero in the 15th century supports the theory that the filler text has been used for centuries.</p>', 'Some-claim-lorem-ipsum-threatens-to-promote-design-over-content,-while-others-defend', 5, '2018-11-18 21:35:19', '2018-11-18 21:48:59', NULL),
(41, 'Lorem ipsum was popularized in the 1960s', '1542591386.jpg', '<p class=\"f4 cl-white mv16\">Don\'t bother typing &ldquo;lorem ipsum&rdquo; into Google translate. If you already tried, you may have gotten <a title=\"Krebs on Security &ndash; Lorem Ipsum: Of Good &amp; Evil, Google &amp; China\" href=\"https://krebsonsecurity.com/2014/08/lorem-ipsum-of-good-evil-google-china/\" target=\"_blank\" rel=\"noopener\">anything from \"NATO\" to \"China\"</a>, depending on how you capitalized the letters. The bizarre translation was fodder for conspiracy theories, but Google has since updated its &ldquo;lorem ipsum&rdquo; translation to, boringly enough, &ldquo;lorem ipsum&rdquo;.</p>\r\n<p class=\"f4 cl-white mv16\">One brave soul did take a stab at translating the almost-not-quite-Latin. According to <a title=\"The Guardian &ndash;&nbsp;Lorem ipsum translated: it remains Greek to me\" href=\"https://www.theguardian.com/books/booksblog/2014/mar/21/lorem-ipsum-translated-latin-placeholder-text\" target=\"_blank\" rel=\"noopener\">The Guardian</a>, Jaspreet Singh Boparai undertook the challenge with the goal of making the text &ldquo;precisely as incoherent in English as it is in Latin - and to make it incoherent in the same way&rdquo;. As a result, &ldquo;the Greek \'eu\' in Latin became the French \'bien\' [...] and the \'-ing\' ending in \'lorem ipsum\' seemed best rendered by an \'-iendum\' in English.&rdquo;</p>', 'Lorem-ipsum-was-popularized-in-the-1960s', 5, '2018-11-18 21:36:26', '2018-11-18 21:43:51', NULL),
(42, 'Lorem ipsum was purposefully designed to have no meaning, but appear like real text', '1542591480.jpg', '<p class=\"f4 cl-white mv16\">The decade that brought us <em>Star Trek</em> and <em>Doctor Who</em> also resurrected Cicero&mdash;or at least what used to be Cicero&mdash;in an attempt to make the days before computerized design a little less painstaking.</p>\r\n<p class=\"f4 cl-white mv16\">The French lettering company <a title=\"Wikipedia &ndash; Letraset\" href=\"https://en.wikipedia.org/wiki/Letraset\" target=\"_blank\" rel=\"noopener\">Letraset</a> manufactured a set of dry-transfer sheets which included the <em>lorem ipsum</em> filler text in a variety of fonts, sizes, and layouts. These sheets of lettering could be rubbed on anywhere and were quickly adopted by graphic artists, printers, architects, and advertisers for their professional look and ease of use.</p>', 'Lorem-ipsum-was-purposefully-designed-to-have-no-meaning,-but-appear-like-real-text', 5, '2018-11-18 21:38:00', '2018-11-18 21:48:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` enum('admin','writer','user') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `level`) VALUES
(1, 'Admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$npgvBaBdsl6DGXruy9y5j.2y2qJ/V15VrDtKRQ.O492BREzEukZay', 'HqaWNMMa0FqinI93NcBePeOqbjwgCr77di2KbD0dc5bVJ1pM2fgxarKBTknD', '2018-11-12 16:17:40', '2018-11-12 16:17:40', 'admin'),
(5, 'user', 'user', 'user@gmail.com', NULL, '$2y$10$J69C/LmKJ6wBGkovywH73OWQ9blHjt1pTUIWR8hJ6nvI05aB2iO6q', 'd7DvPxmlAKG73P5wiTBQtdpiDonJlowb3ErskuMlWQdQZs0u5ALSUlcUEf45', '2018-11-16 19:32:22', '2018-11-18 23:27:11', 'writer'),
(7, 'user3', 'User3', 'user3@gmail.com', NULL, '$2y$10$IiV7wCjQ3yER8NH7xEOVV.jgxiScPog4TwsQ.mZD6ejPkXbBSMOci', 'DDOVpU15PUGwSh4zk6EPvpqY8YDrM78y1ioIa1fkZRov0TiPzXU58CEJnD2c', '2018-11-16 19:53:10', '2018-11-18 23:27:13', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_posts`
--
ALTER TABLE `category_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_posts_post_id_foreign` (`post_id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category_posts`
--
ALTER TABLE `category_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_posts`
--
ALTER TABLE `category_posts`
  ADD CONSTRAINT `category_posts_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
