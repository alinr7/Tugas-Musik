-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Mar 2022 pada 00.47
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_musik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_28_024133_create_tb_music', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_music`
--

CREATE TABLE `tb_music` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_musisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_musik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `musik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lirik_musik` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_music`
--

INSERT INTO `tb_music` (`id`, `nama_musisi`, `judul_musik`, `musik`, `lirik_musik`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Iwan Fals', 'Bongkar', 'musik/Iwan Fals - Bongkar (1989).mp3', 'Kalau cinta sudah dibuang\r\nJangan harap keadilan akan datang\r\nKesedihan hanya tontonan\r\nBagi mereka yang diperkuda jabatan\r\nWo o ya o ya o ya bongkar\r\nWo o ya o ya o ya bongkar\r\nSabar, sabar, sabar dan tunggu\r\nItu jawaban yang kami terima\r\nTernyata kita harus ke jalan\r\nRobohkan setan yang berdiri mengangkang\r\nWo o ya o ya o ya bongkar\r\nWo o ya o ya o ya bongkar\r\nWo o ya o ya o ya bongkar\r\nWo o ya o ya o ya bongkar\r\nPenindasan serta kesewenang-wenangan\r\nBanyak lagi, teramat banyak untuk disebutkan\r\nHoi hentikan, hentikan jangan diteruskan\r\nKami muak dengan ketidakpastian dan keserakahan\r\nDi jalanan kami sandarkan cita-cita\r\nSebab di rumah tak ada lagi yang bisa dipercaya\r\nOrang tua pandanglah kami sebagai manusia\r\nKami bertanya tolong kau jawab dengan cinta\r\nO-o-oh!\r\nWo o ya o ya o ya bongkar\r\nWo o ya o ya o ya bongkar\r\nWo o ya o ya o ya bongkar\r\nWo o ya o ya o ya bongkar\r\nPenindasan serta kesewenang-wenangan\r\nBanyak lagi, teramat banyak untuk disebutkan\r\nHoi hentikan, hentikan jangan diteruskan\r\nKami muak dengan ketidakpastian dan keserakahan\r\nWo o ya o ya o ya bongkar\r\nWo o ya o ya o ya bongkar\r\nWo o ya o ya o ya bongkar\r\nWo o ya o ya o ya bongkar\r\nDi jalanan kami sandarkan cita-cita\r\nSebab di rumah tak ada lagi yang bisa dipercaya\r\nOrang tua pandanglah kami sebagai manusia\r\nKami bertanya tolong kau jawab dengan cinta\r\nWo o ya o ya o ya bongkar\r\nWo o ya o ya o ya bongkar\r\nWo o ya o ya o ya bongkar\r\nWo o ya o ya o ya bongkar', 'image/4226358 (1).jpg', '2022-03-30 13:48:21', '2022-03-30 13:48:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `category`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ujang', 'admin', 'ujang@example.com', NULL, '$2y$10$NNqiHxiOs3OuUwtEGgA4YOmKsnaGA5.vqaL0AjWxOWEfiv/XHQrhG', NULL, '2022-03-30 14:32:44', '2022-03-30 14:32:44'),
(2, 'Ali', 'user', 'm.alinurrohman18@gmail.com', NULL, '$2y$10$31GO8FS4ia7zG/Br63tT.eHx4pa9JYlRhL5kJ/BtD.3oMjhuaSPLe', NULL, '2022-03-30 14:55:25', '2022-03-30 14:55:25');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `tb_music`
--
ALTER TABLE `tb_music`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_music`
--
ALTER TABLE `tb_music`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
