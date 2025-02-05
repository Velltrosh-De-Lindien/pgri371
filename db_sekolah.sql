-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jan 2025 pada 14.26
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
-- Database: `db_pgri371`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekskul`
--

CREATE TABLE `ekskul` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ekskul`
--

INSERT INTO `ekskul` (`id`, `nama`, `keterangan`, `gambar`, `created_at`, `updated_at`) VALUES
(14, 'Pramuka', 'Pramuka adalah kegiatan ekstrakurikuler yang membentuk karakter, kemandirian, dan kepemimpinan melalui aktivitas kepramukaan dan kerja tim.', 'ekskul1735802016.jpg', '2025-01-02 07:13:36', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `foto`, `keterangan`, `created_at`, `updated_at`) VALUES
(9, 'galeri1735802088.jpg', 'PERJUSA SMP PGRI 371 X SMP NURUL IKHLAS', '2025-01-02 07:14:19', '2025-01-02 14:14:48'),
(10, 'galeri1735802185.jpg', 'Hari Guru Nasional 2024', '2025-01-02 07:16:25', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `keterangan`, `gambar`, `created_at`, `updated_at`, `created_by`) VALUES
(8, 'Pengumuman Kegiatan Belajar Mengajar', '<p>Kepada seluruh siswa, orang tua/wali murid, serta seluruh civitas sekolah, kami informasikan bahwa kegiatan belajar mengajar di sekolah akan kembali aktif pada:</p>\r\n<p>📅 <strong>Hari/Tanggal:</strong> Senin, 6 Januari 2025<br>⏰ <strong>Jam:</strong> Sesuai dengan jadwal yang telah ditentukan</p>\r\n<p>Kami mengharapkan kehadiran seluruh siswa tepat waktu dan dalam kondisi siap untuk memulai pembelajaran. Mohon untuk memastikan semua perlengkapan sekolah, termasuk seragam, alat tulis, dan buku pelajaran, sudah dipersiapkan dengan baik.</p>\r\n<p>Kami juga mengingatkan siswa untuk tetap menjaga semangat belajar, mematuhi tata tertib sekolah, dan menerapkan protokol kesehatan (jika diperlukan).</p>\r\n<p>Demikian informasi ini kami sampaikan. Atas perhatian dan kerja sama yang baik, kami ucapkan terima kasih.</p>\r\n<p><strong>Kepala Sekolah</strong></p>', 'informasi1735803209.png', '2025-01-02 07:33:29', NULL, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `logo` varchar(50) NOT NULL,
  `favicon` varchar(50) NOT NULL,
  `tentang_sekolah` text NOT NULL,
  `foto_sekolah` varchar(50) NOT NULL,
  `google_maps` text NOT NULL,
  `nama_kepsek` varchar(50) NOT NULL,
  `foto_kepsek` varchar(50) NOT NULL,
  `sambutan_kepsek` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengaturan`
--

INSERT INTO `pengaturan` (`id`, `nama`, `email`, `telepon`, `alamat`, `logo`, `favicon`, `tentang_sekolah`, `foto_sekolah`, `google_maps`, `nama_kepsek`, `foto_kepsek`, `sambutan_kepsek`, `created_at`, `updated_at`) VALUES
(1, 'SMP PGRI 371 ', 'info.smppgri371@gmail.com', '081282039661', 'Jl. Puskesmas No.6, Pondok Aren, Kec. Pondok Aren, Kota Tangerang Selatan, Banten 15224', 'logo1733702432.png', 'favicon1733702495.png', '<p>SMP PGRI 371 Pondok Aren adalah institusi pendidikan yang berdedikasi untuk mencetak generasi muda yang berkarakter, berilmu, dan siap menghadapi tantangan masa depan.</p>\r\n<p>&nbsp;</p>\r\n<p>Visi SMP PGRI 371 Pondok Aren</p>\r\n<p>&nbsp;</p>\r\n<p><strong>\"Menjadikan manusia yang berakhlak mulia, berilmu, dan berwawasan lingkungan, serta dapat melanjutkan ke jenjang pendidikan yang lebih tinggi,\"</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Misi SMP PGRI 371 Pondok Aren:</p>\r\n<p>&nbsp;</p>\r\n<p><strong>1. Menanamkan keyakinan terhadap Tuhan Yang Maha Esa dalam kehidupan sehari-hari</strong></p>\r\n<p><strong>2. Meningkatkan kedisiplinan, tanggung jawab, dan motivasi belajar siswa</strong></p>\r\n<p><strong>3. Menanamkan nilai-nilai kejujuran, kebaikan, dan kepedulian sosial kepada seluruh warga sekolah</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Dengan moto:</p>\r\n<p>&nbsp;</p>\r\n<p><strong>\"Unggul dalam prestasi, terpuji dalam bertindak,\"</strong></p>\r\n<p>&nbsp;</p>\r\n<p>SMP PGRI 371 Pondok Aren berkomitmen untuk mendidik siswa agar tidak hanya berprestasi dalam bidang akademik dan non-akademik tetapi juga memiliki sikap yang terpuji dalam kehidupan sehari-hari.</p>\r\n<p>Mari bergabung dan jadilah bagian dari komunitas pendidikan yang inspiratif di SMP PGRI 371 Pondok Aren!</p>', 'sekolah1735805205.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0066516585607!2d106.71516667316806!3d-6.262852961310347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fbde4fad8e85%3A0x3b42dbae77127176!2sSMP%20PGRI%20371%20Pondok%20Aren!5e0!3m2!1sid!2sid!4v1735806337786!5m2!1sid!2s', 'Sukardi, S.Pd.I., MM', 'kepsek1735805490.jpg', '<p>Assalamu&rsquo;alaikum warahmatullahi wabarakatuh,<br>Salam sejahtera bagi kita semua,</p>\r\n<p>Puji syukur kita panjatkan ke hadirat Allah SWT atas segala limpahan rahmat dan karunia-Nya, sehingga kita dapat terus bersama dalam mengembangkan pendidikan di SMP PGRI 371 Pondok Aren.</p>\r\n<p>Sebagai kepala sekolah, saya merasa bangga dan terhormat dapat memimpin institusi yang memiliki visi besar:</p>\r\n<p>&nbsp;</p>\r\n<p><strong>\"Menjadikan manusia yang berakhlak mulia, berilmu, dan berwawasan lingkungan, serta dapat melanjutkan ke jenjang pendidikan yang lebih tinggi.\"</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Kami berkomitmen untuk menciptakan lingkungan belajar yang kondusif, nyaman, dan inspiratif. Selain berfokus pada prestasi akademik, kami juga mendorong pengembangan karakter siswa melalui pendidikan nilai, kegiatan ekstrakurikuler, dan pendekatan berbasis keterampilan hidup.</p>\r\n<p>&nbsp;</p>\r\n<p>Dengan moto:</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;<strong>\"Unggul dalam prestasi, terpuji dalam bertindak,\"</strong></p>\r\n<p>&nbsp;</p>\r\n<p>kami berharap dapat mencetak generasi yang tidak hanya cerdas secara intelektual, tetapi juga mulia dalam perilaku.</p>\r\n<p>Saya mengucapkan terima kasih kepada seluruh pendidik, tenaga kependidikan, siswa, dan orang tua yang telah mendukung keberhasilan sekolah ini. Mari bersama-sama melangkah maju, menciptakan masa depan yang cerah untuk anak-anak kita.</p>\r\n<p>Demikian sambutan ini saya sampaikan. Semoga SMP PGRI 371 Pondok Aren terus menjadi sekolah yang membanggakan dan berkontribusi nyata bagi bangsa dan negara.</p>\r\n<p>Wassalamu&rsquo;alaikum warahmatullahi wabarakatuh.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Kepala Sekolah</strong><br><em>Sukardi, S.Pd.I., MM</em></p>', '2021-08-14 15:24:49', '2025-01-02 15:34:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('Super Admin','Admin') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `username`, `password`, `level`, `created_at`, `updated_at`) VALUES
(11, 'Super Admin PGRI 371', 'Super_Admin', 'e10adc3949ba59abbe56e057f20f883e', 'Super Admin', '2025-01-02 06:59:19', NULL),
(12, 'Admin SMP PGRI 371', 'Admin', 'fcea920f7412b5da7be0cf42b8c93759', 'Admin', '2025-01-02 06:59:35', '2025-01-02 15:37:20');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ekskul`
--
ALTER TABLE `ekskul`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ekskul`
--
ALTER TABLE `ekskul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
