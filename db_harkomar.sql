-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Des 2019 pada 18.59
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_harkomar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(1, '::1', 'aa', 1575959581),
(2, '::1', 'admin', 1575959699),
(3, '::1', 'admi@admin.com', 1575994773),
(4, '::1', 'asa@qs.ca', 1575995121),
(5, '::1', 'aass@asa.ca', 1575995143),
(6, '::1', 'asas@as.ca', 1575995417);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_arus`
--

CREATE TABLE `m_arus` (
  `id` int(11) NOT NULL,
  `nilai_lr` float NOT NULL,
  `nilai_ls` float NOT NULL,
  `nilai_lt` float NOT NULL,
  `hasil_pemeriksaan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_berita_acara`
--

CREATE TABLE `m_berita_acara` (
  `id` int(11) NOT NULL,
  `pelanggan_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nomor_ba` varchar(100) NOT NULL,
  `vendor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_hasil_pemeriksaan`
--

CREATE TABLE `m_hasil_pemeriksaan` (
  `id` int(11) NOT NULL,
  `pemeliharaan_id` int(11) NOT NULL,
  `check` enum('0','1') NOT NULL,
  `berita_acara_id` int(11) NOT NULL,
  `ttd_petugas` text DEFAULT NULL,
  `ttd_pelanggan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_kode_segel`
--

CREATE TABLE `m_kode_segel` (
  `id` int(11) NOT NULL,
  `boxapp_sebelum` float NOT NULL,
  `boxapp_sesudah` float NOT NULL,
  `kwh_sebelum` float NOT NULL,
  `kwh_sesudah` float NOT NULL,
  `pembatas_sebelum` float NOT NULL,
  `pembatas_sesudah` float NOT NULL,
  `hasil_pemeriksaan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_meter`
--

CREATE TABLE `m_meter` (
  `id` int(11) NOT NULL,
  `no_seri` varchar(45) NOT NULL,
  `tipe` varchar(45) NOT NULL,
  `merk` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_modem`
--

CREATE TABLE `m_modem` (
  `id` int(11) NOT NULL,
  `no_imei` varchar(45) NOT NULL,
  `tipe` varchar(45) NOT NULL,
  `merk` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_pelanggan`
--

CREATE TABLE `m_pelanggan` (
  `id` int(11) NOT NULL,
  `id_pel` varchar(45) NOT NULL,
  `site_id` int(11) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `tarif` varchar(45) NOT NULL,
  `daya` varchar(45) NOT NULL,
  `lat` float NOT NULL,
  `long` float NOT NULL,
  `status` enum('DEACTIVE','ACTIVE') NOT NULL,
  `meter_id` int(11) NOT NULL,
  `modem_id` int(11) NOT NULL,
  `sim_card_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_pemeliharaan`
--

CREATE TABLE `m_pemeliharaan` (
  `id` int(11) NOT NULL,
  `pemeliharaan` varchar(100) NOT NULL,
  `jenis_pemeliharaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_sim_card`
--

CREATE TABLE `m_sim_card` (
  `id` int(11) NOT NULL,
  `no_sim` varchar(45) NOT NULL,
  `brand` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_site`
--

CREATE TABLE `m_site` (
  `id` int(11) NOT NULL,
  `site_code` varchar(45) NOT NULL,
  `site_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_stand_meter`
--

CREATE TABLE `m_stand_meter` (
  `id` int(11) NOT NULL,
  `nilai_lwbp` float NOT NULL,
  `nilai_wbp` float NOT NULL,
  `nilai_kvarh` float NOT NULL,
  `hasil_pemeriksaan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_tegangan`
--

CREATE TABLE `m_tegangan` (
  `id` int(11) NOT NULL,
  `nilai_vr` float NOT NULL,
  `nilai_vs` float NOT NULL,
  `nilai_vt` float NOT NULL,
  `hasil_pemeriksaan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_tindaklanjut`
--

CREATE TABLE `m_tindaklanjut` (
  `id` int(11) NOT NULL,
  `pemeliharaan_id` int(11) NOT NULL,
  `check` enum('0','1') DEFAULT NULL,
  `berita_acara_id` int(11) NOT NULL,
  `meter_id` int(11) NOT NULL,
  `modem_id` int(11) NOT NULL,
  `sim_card_id` int(11) NOT NULL,
  `ttd_pelanggan` text DEFAULT NULL,
  `ttd_petugas` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_vendor`
--

CREATE TABLE `m_vendor` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `no_telp` varchar(50) DEFAULT NULL,
  `token` varchar(45) DEFAULT NULL,
  `work_order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_work_order`
--

CREATE TABLE `m_work_order` (
  `id` int(11) NOT NULL,
  `nomor` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `pelanggan_id` int(11) NOT NULL,
  `pemeliharaan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1575999288, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '::1', 'arifintajul4@gmail.com', '$2y$08$De/YPbd7WkgtwJzfFLYnwOUQnKCiap2D7vAC9QyZ0i25itJFbWul2', NULL, 'arifintajul4@gmail.com', NULL, 'yD.SAdEqFlDqFEtowe0z3e3b9a650d26fda743a6', 1575957607, NULL, 1575957582, NULL, 1, 'tajul', 'arifin', 'stt-pln', '085338939606');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_arus`
--
ALTER TABLE `m_arus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_m_arus_m_hasil_pemeriksaan1_idx` (`hasil_pemeriksaan_id`);

--
-- Indeks untuk tabel `m_berita_acara`
--
ALTER TABLE `m_berita_acara`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_m_hasil_pemeriksaan_m_pelanggan1_idx` (`pelanggan_id`),
  ADD KEY `fk_m_berita_acara_m_vendor1_idx` (`vendor_id`);

--
-- Indeks untuk tabel `m_hasil_pemeriksaan`
--
ALTER TABLE `m_hasil_pemeriksaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_m_hasil_pemeriksaan_m_pemeliharaan1_idx` (`pemeliharaan_id`),
  ADD KEY `fk_m_hasil_pemeriksaan_m_pemeliharaan2_idx` (`berita_acara_id`);

--
-- Indeks untuk tabel `m_kode_segel`
--
ALTER TABLE `m_kode_segel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_m_kode_segel_m_hasil_pemeriksaan1_idx` (`hasil_pemeriksaan_id`);

--
-- Indeks untuk tabel `m_meter`
--
ALTER TABLE `m_meter`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_modem`
--
ALTER TABLE `m_modem`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_pelanggan`
--
ALTER TABLE `m_pelanggan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_m_pelanggan_m_site_idx` (`site_id`),
  ADD KEY `fk_m_pelanggan_m_meter1_idx` (`meter_id`),
  ADD KEY `fk_m_pelanggan_m_modem1_idx` (`modem_id`),
  ADD KEY `fk_m_pelanggan_m_sim_card1_idx` (`sim_card_id`);

--
-- Indeks untuk tabel `m_pemeliharaan`
--
ALTER TABLE `m_pemeliharaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_sim_card`
--
ALTER TABLE `m_sim_card`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_site`
--
ALTER TABLE `m_site`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_stand_meter`
--
ALTER TABLE `m_stand_meter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_m_stand_meter_m_hasil_pemeriksaan1_idx` (`hasil_pemeriksaan_id`);

--
-- Indeks untuk tabel `m_tegangan`
--
ALTER TABLE `m_tegangan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_m_tegangan_m_hasil_pemeriksaan1_idx` (`hasil_pemeriksaan_id`);

--
-- Indeks untuk tabel `m_tindaklanjut`
--
ALTER TABLE `m_tindaklanjut`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_m_tindaklanjut_m_pemeliharaan1_idx` (`pemeliharaan_id`),
  ADD KEY `fk_m_tindaklanjut_m_berita_acara1_idx` (`berita_acara_id`),
  ADD KEY `fk_m_tindaklanjut_m_meter1_idx` (`meter_id`),
  ADD KEY `fk_m_tindaklanjut_m_modem1_idx` (`modem_id`),
  ADD KEY `fk_m_tindaklanjut_m_sim_card1_idx` (`sim_card_id`);

--
-- Indeks untuk tabel `m_vendor`
--
ALTER TABLE `m_vendor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_m_vendor_m_work_order1_idx` (`work_order_id`);

--
-- Indeks untuk tabel `m_work_order`
--
ALTER TABLE `m_work_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_m_work_order_m_pelanggan1_idx` (`pelanggan_id`),
  ADD KEY `fk_m_work_order_m_pemeliharaan1_idx` (`pemeliharaan_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `m_arus`
--
ALTER TABLE `m_arus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `m_berita_acara`
--
ALTER TABLE `m_berita_acara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `m_hasil_pemeriksaan`
--
ALTER TABLE `m_hasil_pemeriksaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `m_kode_segel`
--
ALTER TABLE `m_kode_segel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `m_meter`
--
ALTER TABLE `m_meter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `m_modem`
--
ALTER TABLE `m_modem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `m_pelanggan`
--
ALTER TABLE `m_pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `m_pemeliharaan`
--
ALTER TABLE `m_pemeliharaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `m_sim_card`
--
ALTER TABLE `m_sim_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `m_site`
--
ALTER TABLE `m_site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `m_stand_meter`
--
ALTER TABLE `m_stand_meter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `m_tegangan`
--
ALTER TABLE `m_tegangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `m_tindaklanjut`
--
ALTER TABLE `m_tindaklanjut`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `m_vendor`
--
ALTER TABLE `m_vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `m_work_order`
--
ALTER TABLE `m_work_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `m_arus`
--
ALTER TABLE `m_arus`
  ADD CONSTRAINT `fk_m_arus_m_hasil_pemeriksaan1` FOREIGN KEY (`hasil_pemeriksaan_id`) REFERENCES `m_berita_acara` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `m_berita_acara`
--
ALTER TABLE `m_berita_acara`
  ADD CONSTRAINT `fk_m_berita_acara_m_vendor1` FOREIGN KEY (`vendor_id`) REFERENCES `m_vendor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_m_hasil_pemeriksaan_m_pelanggan1` FOREIGN KEY (`pelanggan_id`) REFERENCES `m_pelanggan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `m_hasil_pemeriksaan`
--
ALTER TABLE `m_hasil_pemeriksaan`
  ADD CONSTRAINT `fk_m_hasil_pemeriksaan_m_pemeliharaan1` FOREIGN KEY (`pemeliharaan_id`) REFERENCES `m_pemeliharaan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_m_hasil_pemeriksaan_m_pemeliharaan2` FOREIGN KEY (`berita_acara_id`) REFERENCES `m_berita_acara` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `m_kode_segel`
--
ALTER TABLE `m_kode_segel`
  ADD CONSTRAINT `fk_m_kode_segel_m_hasil_pemeriksaan1` FOREIGN KEY (`hasil_pemeriksaan_id`) REFERENCES `m_berita_acara` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `m_pelanggan`
--
ALTER TABLE `m_pelanggan`
  ADD CONSTRAINT `fk_m_pelanggan_m_meter1` FOREIGN KEY (`meter_id`) REFERENCES `m_meter` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_m_pelanggan_m_modem1` FOREIGN KEY (`modem_id`) REFERENCES `m_modem` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_m_pelanggan_m_sim_card1` FOREIGN KEY (`sim_card_id`) REFERENCES `m_sim_card` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_m_pelanggan_m_site` FOREIGN KEY (`site_id`) REFERENCES `m_site` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `m_stand_meter`
--
ALTER TABLE `m_stand_meter`
  ADD CONSTRAINT `fk_m_stand_meter_m_hasil_pemeriksaan1` FOREIGN KEY (`hasil_pemeriksaan_id`) REFERENCES `m_berita_acara` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `m_tegangan`
--
ALTER TABLE `m_tegangan`
  ADD CONSTRAINT `fk_m_tegangan_m_hasil_pemeriksaan1` FOREIGN KEY (`hasil_pemeriksaan_id`) REFERENCES `m_berita_acara` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `m_tindaklanjut`
--
ALTER TABLE `m_tindaklanjut`
  ADD CONSTRAINT `fk_m_tindaklanjut_m_berita_acara1` FOREIGN KEY (`berita_acara_id`) REFERENCES `m_berita_acara` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_m_tindaklanjut_m_meter1` FOREIGN KEY (`meter_id`) REFERENCES `m_meter` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_m_tindaklanjut_m_modem1` FOREIGN KEY (`modem_id`) REFERENCES `m_modem` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_m_tindaklanjut_m_pemeliharaan1` FOREIGN KEY (`pemeliharaan_id`) REFERENCES `m_pemeliharaan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_m_tindaklanjut_m_sim_card1` FOREIGN KEY (`sim_card_id`) REFERENCES `m_sim_card` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `m_vendor`
--
ALTER TABLE `m_vendor`
  ADD CONSTRAINT `fk_m_vendor_m_work_order1` FOREIGN KEY (`work_order_id`) REFERENCES `m_work_order` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `m_work_order`
--
ALTER TABLE `m_work_order`
  ADD CONSTRAINT `fk_m_work_order_m_pelanggan1` FOREIGN KEY (`pelanggan_id`) REFERENCES `m_pelanggan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_m_work_order_m_pemeliharaan1` FOREIGN KEY (`pemeliharaan_id`) REFERENCES `m_pemeliharaan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
