-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2025 pada 11.26
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ducati_club`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `article1`
--

CREATE TABLE `article1` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `article1`
--

INSERT INTO `article1` (`id`, `title`, `content`, `image`, `link`, `created_at`) VALUES
(1, 'Ducati and Lamborghini: story of a partnership founded on design and performance', '', 'lamb.jpg', 'artikel1.php', '2025-04-15 08:03:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `article2`
--

CREATE TABLE `article2` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `article2`
--

INSERT INTO `article2` (`id`, `title`, `content`, `image`, `created_at`) VALUES
(1, 'We Ride As One!', NULL, 'cov.jpg', '2025-04-15 08:34:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `image`, `created_at`) VALUES
(1, 'Ducati and Lamborghini: Story of a Partnership founded on design and performance', '<p>The partnership between two undisputed symbols of Italian industry,&nbsp;<strong>Ducati and Lamborghini</strong>, has always been fertile ground for the creation of unique projects capable of quickening the pulse of motorbike enthusiasts and collectors all over the world, thanks to the shared racing DNA of the two manufacturers.&nbsp;</p>\r\n<p>With a history rich in successes, this collaboration now embarks on an&nbsp;<strong>exciting new chapter</strong>. The latest extraordinary expression of this synergy will be unveiled during the&nbsp;<strong>Milano Design Week, on April 9th</strong>.</p>\r\n<p>The previous collaborations between Ducati and Lamborghini have shown how the pursuit of shared values - such as the authenticity of &lsquo;Made in Italy&rsquo;, a vocation for sporting brilliance and pioneering design - can spawn truly original projects.</p>\r\n<p>The first example was the&nbsp;<strong>Ducati Diavel 1260 Lamborghini</strong>, inspired by the Lamborghini Si&aacute;n FKP 37 and presented on 25 November 2020 in a limited edition of 630 models. This was a motorbike that reinterpreted the stylistic hallmarks of one of the brand&rsquo;s most iconic cars.</p>\r\n<p>Developed based on the Ducati Diavel 1260 S, the Lamborghini version was transformed in terms of its most distinctive elements. The predilection for fine lightweight materials, a characteristic trait of the Sant&rsquo;Agata Bolognese-manufactured super sports cars, and shared by Ducati, was translated into wide use of carbon fiber for numerous components of the bike to further elevate its performance. The design of the Diavel 1260 Lamborghini was born from the creative synergy between the Ducati Centro Stile and the Lamborghini Centro Stile, combining the stylistic authenticity of both marques.&nbsp;</p>\r\n<p>The success of this first project laid solid foundations for an equally exciting second chapter: the&nbsp;<strong>Ducati Streetfighter V4 Lamborghini</strong>, inspired by the uncompromising power and extreme engineering of the Lamborghini Hurac&aacute;n STO.</p>\r\n<p>Presented at the San Marino and Rimini Riviera Grand Prix in September 2022, this model further strengthened the bond between the two brands, conveying the style and performance of a genuine Lamborghini super sports car to a motorcycle. This limited and numbered edition was also a remarkable success, with 630 units and an additional 63 exclusive units dedicated to Lamborghini customers in a clear acknowledgment of the authenticity and originality of the project.</p>\r\n<p>Now, excitement is growing around the third chapter of this amazing partnership. Ducati and Lamborghini are ready to celebrate their union, built on extreme performance, cutting-edge engineering and a shared performance DNA,&nbsp;<strong>during the prestigious Milano Design Week on 9 April</strong>.&nbsp;</p>', 'dl.webp', '2025-04-15 01:39:51'),
(2, 'Ducatisti Worldwide Gathering', '<p>The fourth edition of an event that has become a fixed appointment on the calendar, which every first Saturday of May sees enthusiasts from every corner of the planet parade along the most fascinating and evocative streets of their cities, transforming them into one big parade.&nbsp;</p>\r\n<p>Gatherings, panoramic tours, entertainment with music and many other experiences designed to give life to an unforgettable day and leave an indelible mark on streets all over the world.&nbsp;</p>\r\n<p>Ducati dealers are already working to build unique, tailor-made programs for each location, in the spirit of fun and sharing. At their side, as always, are the&nbsp;<strong>Ducati Official Clubs</strong>, whose enthusiasm helps make #WeRideAsOne even more special, in a year that also celebrates the 25th anniversary of the birth of their community.&nbsp;</p>\r\n<p>Let\'s ride as one!</p>', 'cov.jpg', '2025-04-15 01:39:51'),
(8, 'Ducati Riding Experience', '<div class=\"title \">Live your passion with Ducati</div>\r\n<div class=\"content\">\r\n<p>Professional instructors, unforgettable locations and the chance to ride your favourite Ducati.</p>\r\n<p>These are the elements that distinguish the&nbsp;<strong>Ducati Riding Experiences</strong>, a range of unique and exclusive track, road and off-road experiences.</p>\r\n<p>From the courses of the&nbsp;<strong>DRE Riding Academy</strong>&nbsp;to the dream itineraries of&nbsp;<strong>Travel Adventures</strong>&nbsp;and&nbsp;<strong>Dream Tour</strong>, the Ducati Riding Experiences are ideal both for those who want to perfect their riding skills while having fun, and for those who want to discover new roads on which to live their passion.</p>\r\n</div>', 'Ducati-Riding-Experience-Hero-1600x1000.webp', '2025-04-16 06:06:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `image`) VALUES
(1, 'JAYO tour', 'Ducati Official will held a short motorcycle tour in our new management.', 'tour.jpeg'),
(2, 'DOCI X Border', 'Join Us in the remarkable journey to the eastearn part of Indonesia and experiencing the ride cross border to Timor Leste', 'tour1.jpeg'),
(13, 'MaLiBo 5th Touring', 'DSI Malang-Bali-Lombok 5th Touring', 'tour3.jpg'),
(16, 'Jambi Tour', 'Ducati Official held a short motorcycle tour in Jambi, Indonesia', 'jibw-6th-touring-71355321f02095e_cover.jpg'),
(17, 'test', 'test', 'tour1.jpeg'),
(18, 'Internatinal Tour', 'Join Us in the remarkable journey to the eastearn part of Indonesia and experiencing the ride cross border to Timor Leste', 'tour3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `description`, `image`, `category`) VALUES
(1, 'JAYO Tour', 'Photo Of JAYO Tour, start in Jakarta', 'assets/img/portfolio/touring.jpeg', 'filter-app'),
(2, 'JAYO Tour', 'po', 'assets/img/portfolio/doc.jpg', ''),
(3, '3rd DSI Touring Jogja-Bali', 'Photo of DSI Touring Jogja-Bali', 'assets/img/portfolio/touring3.jpeg', 'filter-branding'),
(4, '5th DSI Touring & Gathering', '', 'assets/img/portfolio/touring4.jpg', 'filter-books'),
(5, 'MaLiBo 3rd Tour', '', 'assets/img/portfolio/touring5.jpg', 'filter-app'),
(6, 'DSI Gathering', '', 'assets/img/portfolio/touring6.jpg', 'filter-product'),
(20, 'P', 'Y', 'assets/img/portfolio/mondo.jpg', 'pajo'),
(25, 'po', 'test', 'assets/img/portfolio/doci.jpeg', 'test'),
(26, 'test', 'test', 'assets/img/portfolio/moto.jpg', NULL),
(27, 'test', 'Circuit Sepang', 'assets/img/portfolio/v1.jpg', NULL),
(28, 'test', 'Touring to Yogyakarta', 'assets/img/portfolio/v3.webp', ''),
(29, 'test', 'test', 'assets/img/portfolio/docc.jpeg', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` text NOT NULL,
  `sent_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `sent_at`) VALUES
(27, 'Taka', 'radityakun1@gmail.com', 'about dct', 'test', '2025-04-13 08:55:48'),
(28, 'Tuku', 'radityaregar@gmail.com', 'DC', 'Pulu pulu', '2025-04-13 08:56:33'),
(29, 'Taka', 'radityakun1@gmail.com', 'test', 'test', '2025-04-15 23:44:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `partners`
--

INSERT INTO `partners` (`id`, `name`, `image`, `created_at`) VALUES
(1, 'My Pertamina', 'assets/img/clients/icon.webp', '2025-04-12 01:24:20'),
(2, 'Pertamina Enduro', 'assets/img/clients/perta.png', '2025-04-12 01:24:20'),
(6, 'Belimo', 'assets/img/clients/client-2.png', '2025-04-15 09:54:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `shop_link` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`, `shop_link`, `created_at`) VALUES
(1, 'Ducati Panigale V4', '216 hp Power\r\n89.2 lb-ft Torque\r\n187 kg (412 lb) Wet weight no fuel (\"S\" version)', 'pv3.png', 'https://contact.ducati.com/ww/en/lgf/panigale-v4/light?_gl=1*16hz2pp*_ga*MTg4OTMyOTcwLjE3NDQyMDE4MjM.*_ga_8W811JZPVD*MTc0NDc2NjE2Ny4yNy4xLjE3NDQ3NjgzMzAuMC4wLjA.', '2025-04-16 01:52:39'),
(2, 'Multistrada V4 RS', '180 hp Power\r\n118 Nm Torque\r\n225 kg (496 lb) Wet weight no fuel', 'my25.png', 'https://contact.ducati.com/ww/en/lgf/panigale-v4/light?_gl=1*16hz2pp*_ga*MTg4OTMyOTcwLjE3NDQyMDE4MjM.*_ga_8W811JZPVD*MTc0NDc2NjE2Ny4yNy4xLjE3NDQ3NjgzMzAuMC4wLjA.', '2025-04-16 02:09:49'),
(3, 'Diavel V4', '168 hp Power\r\n93 lb-ft Torque\r\n223 kg (492 lb) Wet weight no fuel', 'Diavel.png', 'https://contact.ducati.com/ww/en/lgf/panigale-v4/light?_gl=1*16hz2pp*_ga*MTg4OTMyOTcwLjE3NDQyMDE4MjM.*_ga_8W811JZPVD*MTc0NDc2NjE2Ny4yNy4xLjE3NDQ3NjgzMzAuMC4wLjA.', '2025-04-16 02:36:27'),
(4, 'Futa All-Road', 'The first Ducati racing bicycle with pedal assistance, also available in', 'basikal.png', 'https://contact.ducati.com/ww/en/lgf/panigale-v4/light?_gl=1*16hz2pp*_ga*MTg4OTMyOTcwLjE3NDQyMDE4MjM.*_ga_8W811JZPVD*MTc0NDc2NjE2Ny4yNy4xLjE3NDQ3NjgzMzAuMC4wLjA.', '2025-04-16 02:38:23'),
(5, 'Desmo450 Max', '63,5 hp Power\r\n53,5 Nm Torque\r\n104,8 kg (231 lb) Wet weight no fue', 'desmo.png', 'https://contact.ducati.com/ww/en/lgf/panigale-v4/light?_gl=1*16hz2pp*_ga*MTg4OTMyOTcwLjE3NDQyMDE4MjM.*_ga_8W811JZPVD*MTc0NDc2NjE2Ny4yNy4xLjE3NDQ3NjgzMzAuMC4wLjA.', '2025-04-16 07:15:41'),
(6, 'XDiavel V4', '168 hp Power\r\n93 lb-ft Torque\r\n229 kg (505 lb) Wet weight no fue', 'Xdiavel.png', 'https://contact.ducati.com/ww/en/lgf/panigale-v4/light?_gl=1*16hz2pp*_ga*MTg4OTMyOTcwLjE3NDQyMDE4MjM.*_ga_8W811JZPVD*MTc0NDc2NjE2Ny4yNy4xLjE3NDQ3NjgzMzAuMC4wLjA.', '2025-04-16 07:16:25'),
(7, 'Multistrada V4 Rally', '170 hp Power\r\n12,3 kgm Torque\r\n238 kg (525 lb) Wet weight no fuel', 'my25.png', 'https://contact.ducati.com/ww/en/lgf/panigale-v4/light?_gl=1*16hz2pp*_ga*MTg4OTMyOTcwLjE3NDQyMDE4MjM.*_ga_8W811JZPVD*MTc0NDc2NjE2Ny4yNy4xLjE3NDQ3NjgzMzAuMC4wLjA.', '2025-04-16 07:23:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `team`
--

INSERT INTO `team` (`id`, `name`, `position`, `image`) VALUES
(1, 'Hakiki T', 'Community\'s President', 'assets/img/team/hakiki.jpeg'),
(2, 'Iwan Nurjadi', 'Community\'s Manager', 'assets/img/team/iwan.jpeg'),
(3, 'Heru Prakoso', 'CTO', 'assets/img/team/heru.jpeg'),
(8, 'Marc Marquez', 'MotoGP Racer', 'assets/img/team/marquex.jpg'),
(9, 'Francesco Bagnaia', 'MotoGP Racer', 'assets/img/team/bagnaia.jpg'),
(10, 'Enea Bastiani', 'ex Grisini Team Driver', 'assets/img/team/baastiani.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`) VALUES
(1, 'radwijupa', 'admin123', 'radityakun1@gmail.com', '2025-04-12 06:40:22');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `article1`
--
ALTER TABLE `article1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `article2`
--
ALTER TABLE `article2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `article1`
--
ALTER TABLE `article1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `article2`
--
ALTER TABLE `article2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
