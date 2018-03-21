-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 Mar 2018 pada 16.33
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fusiondb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_divisi`
--

CREATE TABLE `tb_divisi` (
  `id_div` int(11) NOT NULL,
  `nm_div` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_divisi`
--

INSERT INTO `tb_divisi` (`id_div`, `nm_div`) VALUES
(1, 'Keuangan'),
(2, 'Humas'),
(3, 'Web Programming'),
(4, 'Desktop Programming'),
(5, 'Mobile Programming'),
(6, 'Marketing'),
(7, 'System Analyst'),
(8, 'Divisi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jab` int(11) NOT NULL,
  `nm_jab` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jab`, `nm_jab`) VALUES
(1, 'Chief Executive Officer (CEO)'),
(2, 'Manager'),
(3, 'General Manager'),
(4, 'Sekretaris'),
(5, 'Administrasi'),
(6, 'Assistant Director'),
(7, 'Direktur Keuangan'),
(8, 'Direktur Personalia'),
(9, 'Manager Pemasaran'),
(10, 'Chief Operating Officer (COO)'),
(11, 'Owner');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id_kar` int(11) NOT NULL,
  `foto_kar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_kar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk_kar` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_div` int(11) NOT NULL,
  `id_jab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id_kar`, `foto_kar`, `nm_kar`, `jk_kar`, `id_div`, `id_jab`) VALUES
(1, 'BayuN4.png', 'Mochammad Bayu Nugraha', 'L', 3, 11),
(2, '61.png', 'Bardi', 'L', 1, 3),
(3, '4.ico', 'Ronaldo', 'L', 2, 4),
(4, '3.ico', 'Benzema', 'L', 2, 5),
(5, '3.ico', 'Morata', 'L', 2, 4),
(6, '3.ico', 'Coutinho', 'L', 4, 4),
(7, '2.png', 'Bardu', 'L', 5, 5),
(8, 'umam.jpg', 'Lord Umam', 'L', 3, 10),
(9, '28070660_2044624445760757_1647254590613840834_o2.jpg', 'Mayu', 'P', 6, 6),
(10, '28070660_2044624445760757_1647254590613840834_o1.jpg', 'Neru', 'P', 1, 4),
(11, 'user10.jpg', 'Roberto Bagio', 'L', 4, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id` int(11) NOT NULL,
  `id_privileges` int(11) NOT NULL,
  `nm_perusahaan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desk_perusahaan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sejarah` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_profil`
--

INSERT INTO `tb_profil` (`id`, `id_privileges`, `nm_perusahaan`, `desk_perusahaan`, `visi`, `misi`, `sejarah`, `alamat`, `telp`, `email`) VALUES
(1, 1, 'Fusion Technology', 'adalah sebuah agensi profesional yang memberikan layanan Jasa kebutuhan dalam bidang IT seperti website untuk keperluan korporasi/company profile, website toko online, web personal blog dan keperluan website lainnya. Jasa pembuatan website menghadirkan tampilan yang elegan serta responsive dan keren sehingga sangat cocok untuk merepresentasikan identitas perusahaan kalian. Website adalah suatu alat promosi penting bagi kalian yang ingin mengembangkan pasar dengan cara yang efektif dan menyeluruh.', 'Menjadi Perusahaan Penyedia Solusi Sistem Manufaktur Terpadu yang terkemuka dan terpercaya di Indonesia.', 'Menyediakan Solusi Sistem Manufaktur Terpadu untuk meningkatkan kinerja pelanggan.', 'Berdiri pada tahun 2007. Kami lahir dengan nama Fusion Technology. Perusahaan kami berjalan di bidang IT Development yang menyediakan beberapa layanan jasa dan infrastruktur untuk memenuhi keperluan IT Anda.', 'Modernbuilding suite V124, AB 01\r\nSomeplace 16425 Earth, Cina', '(62)899-873-7987', 'bnugraha00@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_proyek`
--

CREATE TABLE `tb_proyek` (
  `id_proy` int(11) NOT NULL,
  `nm_proy` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pim_proy` int(11) NOT NULL,
  `desk_proy` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_proy` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_proyek`
--

INSERT INTO `tb_proyek` (`id_proy`, `nm_proy`, `pim_proy`, `desk_proy`, `img_proy`, `tgl_mulai`, `tgl_selesai`) VALUES
(1, 'E-Perpus', 1, 'Aplikasi perpustakaan berbasis Web', 'e-perpus.png', '2016-05-08', '2016-08-04'),
(2, 'Fasis Siswa', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.', 'fasis.png', '2017-12-20', '2018-02-08'),
(3, 'Chatting', 8, 'Aplikasi Chatting\r\n\r\nDemo: https://chat.bayyu.net', 'chat1.png', '2016-07-13', '2016-08-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_terlibat`
--

CREATE TABLE `tb_terlibat` (
  `id_terlibat` int(11) NOT NULL,
  `id_kar` int(11) NOT NULL,
  `id_proy` int(11) NOT NULL,
  `posisi` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_terlibat`
--

INSERT INTO `tb_terlibat` (`id_terlibat`, `id_kar`, `id_proy`, `posisi`) VALUES
(1, 1, 1, 'Backend Developer'),
(2, 2, 1, 'Frontend Developer'),
(3, 2, 2, 'System Analyst'),
(4, 11, 1, 'Beta Tester'),
(5, 11, 3, 'Database Management'),
(6, 2, 3, 'Database Management'),
(7, 1, 3, 'Backend Developer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '0=user, 1=admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `level`) VALUES
(1, 'BayuN', '$2y$10$a0YXsXpPdD6EIgKwURnmbeigl6dtFB3gYH/YBrNdbXxJ8QfccfxW.', '1'),
(2, 'user1', '$2y$10$WN7uGmJqn4YIWx7wWmgMZeby9ZIRNOm38G7Ws310qh5rlTYKkYlQC', '0'),
(3, 'user2', '$2y$10$hAjeID4EqUYW66JcsAK40eSK6oZlb43c2U3FLKmWnd1GBpDG1rdAm', '0'),
(4, 'user3', '$2y$10$MrP4bDjoVojI2rh2.n6Gp.d5HN6NW4L/gZpstbLFhYEZuFu6Wt7WS', '0'),
(5, 'user4', '$2y$10$q1ZxjNS426qyGlT/pLxK4eWSvgVgPdqdVgka.VHYGupSumbpOuAkm', '0'),
(6, 'user5', '$2y$10$K3qlIi7fv30Zn3q2y2sKbO0H0Co4OAZkdczqX5x6DPVnbpKbp0WPa', '1'),
(7, 'user6', '$2y$10$zoA6rwBOfQiBGBjAtESaw.hVTb11Wx8tpBNeaZFqrCF7Js1EmXEom', '0'),
(8, 'user7', '$2y$10$dEna238gSYMoBhbaEWJnReX2S6SgIFP1UL8Bjra550TzGYeiVxDRO', '0'),
(9, 'user8', '$2y$10$z5HHgVKRlV5V4YRMfIuGhODoyIGjCCd8mMezFp5ANHjXUQWVLmZlu', '0'),
(10, 'user9', '$2y$10$59la0mLcTmeo40lapoJkpuuVmdrOxjEbVrsMJtpgWzmtUiFL6ES.O', '0'),
(11, 'user10', '$2y$10$2Vbv29PuPJWYlyrA4VBgOu9zVQAqhiYAR92Hc8ojeOwyxZnMg1JXC', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_divisi`
--
ALTER TABLE `tb_divisi`
  ADD PRIMARY KEY (`id_div`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_jab`);

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id_kar`);

--
-- Indexes for table `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_proyek`
--
ALTER TABLE `tb_proyek`
  ADD PRIMARY KEY (`id_proy`);

--
-- Indexes for table `tb_terlibat`
--
ALTER TABLE `tb_terlibat`
  ADD PRIMARY KEY (`id_terlibat`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_divisi`
--
ALTER TABLE `tb_divisi`
  MODIFY `id_div` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `id_jab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `id_kar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_proyek`
--
ALTER TABLE `tb_proyek`
  MODIFY `id_proy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_terlibat`
--
ALTER TABLE `tb_terlibat`
  MODIFY `id_terlibat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
