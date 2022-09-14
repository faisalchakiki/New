-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Sep 2022 pada 11.31
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wazwez_app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_users`
--

CREATE TABLE `detail_users` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `full_name` varchar(100) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile_number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_users`
--

INSERT INTO `detail_users` (`id`, `user_id`, `full_name`, `address`, `gender`, `email`, `mobile_number`) VALUES
(1, 1, 'Faisal Chakiki', 'Tegal', 'male', 'faisalchakiki012018@gmail.com', '085742385602'),
(2, 2, 'Siti Aisyah', 'Jakarta', 'female', 'aisyah@gmail.com', '085723132302');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subtasks`
--

CREATE TABLE `subtasks` (
  `id` int(11) NOT NULL,
  `id_tugas` int(11) NOT NULL,
  `nama_subtask` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `subtasks`
--

INSERT INTO `subtasks` (`id`, `id_tugas`, `nama_subtask`) VALUES
(2, 1, 'Create Dashbord with HTML CSS'),
(3, 1, 'Satukan dengan Javascript'),
(4, 2, 'Low-Fidelity design'),
(5, 2, 'High-Fidelity design'),
(6, 2, 'Design Guidelines'),
(7, 2, 'Design Review');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_tugas` varchar(100) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `deadline` date NOT NULL,
  `finished` enum('yes','no') DEFAULT 'no',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tasks`
--

INSERT INTO `tasks` (`id`, `user_id`, `nama_tugas`, `deskripsi`, `deadline`, `finished`, `created_at`) VALUES
(1, 1, 'Create Wazwez App', 'Minicamp', '0000-00-00', 'no', '2022-09-09 09:37:38'),
(2, 1, 'Product Design', 'Tugas untuk design team', '2022-08-20', 'no', '2022-09-09 09:37:46'),
(3, 1, 'Development', ' ', '2022-08-15', 'no', '2022-09-09 09:37:53'),
(22, 1, 'Flowchart', 'Membuat algoritma dengan Flowchart', '2022-09-28', 'no', '2022-09-14 04:06:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `avatar`) VALUES
(1, 'user-01', 'xxxxxxx', 'asset/user-icon.jpg'),
(2, 'user-02', 'xxxxxxx', 'asset/user-icon1.png\r\n');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_users`
--
ALTER TABLE `detail_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `subtasks`
--
ALTER TABLE `subtasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_subtasks_tasks` (`id_tugas`);

--
-- Indeks untuk tabel `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tasks_users` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_users`
--
ALTER TABLE `detail_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `subtasks`
--
ALTER TABLE `subtasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_users`
--
ALTER TABLE `detail_users`
  ADD CONSTRAINT `fk_details_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `subtasks`
--
ALTER TABLE `subtasks`
  ADD CONSTRAINT `fk_subtasks_tasks` FOREIGN KEY (`id_tugas`) REFERENCES `tasks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `fk_tasks_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
