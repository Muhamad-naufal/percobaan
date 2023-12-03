-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Des 2023 pada 21.25
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_nama_admin` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_nama_admin`, `nama_lengkap`, `username`, `password`) VALUES
(2, 'Fauzan', 'fauzan', 'fauzan123'),
(39, 'Maieka Sari', 'Mai', 'Maikea');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daerah`
--

CREATE TABLE `daerah` (
  `id_nama_daerah` int(11) NOT NULL,
  `nama_daerah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `daerah`
--

INSERT INTO `daerah` (`id_nama_daerah`, `nama_daerah`) VALUES
(1, 'Tasikmalaya'),
(3, 'Sukabumi'),
(7, 'Bandung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_nama_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_nama_kategori`, `nama_kategori`) VALUES
(2, 'Pegunungan'),
(3, 'Pantai'),
(4, 'Kota'),
(5, 'Sejarah'),
(9, 'Danau');

-- --------------------------------------------------------

--
-- Struktur dari tabel `review`
--

CREATE TABLE `review` (
  `id_nama_review` int(11) NOT NULL,
  `id_travel` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `review` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `traveling`
--

CREATE TABLE `traveling` (
  `id` int(11) NOT NULL,
  `nama_tempat` varchar(255) NOT NULL,
  `gambar` text NOT NULL,
  `deskripsi` text NOT NULL,
  `price` int(20) NOT NULL,
  `fasilitas` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_daerah` int(11) NOT NULL,
  `lokasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `traveling`
--

INSERT INTO `traveling` (`id`, `nama_tempat`, `gambar`, `deskripsi`, `price`, `fasilitas`, `id_kategori`, `id_daerah`, `lokasi`) VALUES
(5, 'Gunung Galunggung', 'images/Gunung-Galunggung.jpg', '<p>Bagi warga Tasik, gunung dengan tinggi mencapai 2240 mdpl ini memiliki daya tarik tersendiri. Letusannya yang dahsyat selama 9 bulan pada tahun 1982 berdampak besar pada perubahan Kota Tasikmalaya tidak terkecuali urusan pariwisata. Gunung Galunggung menjadi salah satu destinasi favorit wisatawan baik dari Tasik maupun luar kota berkat keindahan alamnya. Aksesnya pun mudah seperti Gunung Telomoyo, sebab Anda bisa mendaki hingga ke kawah gunung dengan bantuan anak tangga.</p>\r\n<p>Terdapat dua jalur yang bisa Anda pilih yakni tangga kuning dan tangga biru yang masing-masing punya jumlah berbeda. Tangga kuning memiliki jumlah sekitar 620 anak tangga sedangkan tangga biru kurang lebih 510 anak tangga. Dari atas kawah, Anda bisa menikmati pemandangan danau sulfur berwarna hijau yang cukup luas. Selain itu, panorama Kota Tasikmalaya pun dapat terlihat jelas dari ketinggian. Di kawasan wana wisata seluas 120 hektar ini pula Anda dapat menikmati aktivitas seru lain. Misalnya seperti mengunjungi Curug Agung Galunggung, camping, atau berendam air panas di Pemandian Cipanas Galunggung. Tiket masuknya pun tidak mahal, berkisar antara Rp15.000,00 hingga Rp25.000,00 tergantung aktivitas yang Anda inginkan. Biaya ini bisa lebih murah jika Anda menggunakan layanan dari tempat sewa bus pariwisata terdekat. Lokasi menuju kawasan wisata Gunung Galunggung ini sendiri terletak di Jl. Ke Cipanas No.30, Linggajati, Sukaratu, Tasikmalaya. Jam operasionalnya berlangsung mulai pukul 06.00 WIB hingga 16.00 WIB.</p>', 25000, '<p>Sewa Bus Pariwisata</p>\r\n<p>Tempat duduk</p>\r\n<p>Masjid</p>\r\n<p>warung makan</p>\r\n<p>&nbsp;</p>', 2, 1, 'Linggawangi, Leuwisari, Tasikmalaya Regency, West Java'),
(7, 'DUSUN BAMBU', 'images/sewa-perahu-di-dusun-bambu.jpg', '<p><strong>Dusun Bambu Lembang</strong>&nbsp;merupakan sarana rekreasi bagi keluarga di tengah pemandangan yang indah dan asri. Memiliki lokasi seluas 15 hektar, tempat ini menjadi area ekowisata yang memadukan keselarasan budaya tradisional Sunda dalam satu wilayah.</p>\r\n<p>Tujuan berdirinya Dusun Bambu Lembang ialah guna menjadi sebuah taman wisata sekaligus sarana edukasi mengenai budaya tradisional pada kehidupan modern bagi pengunjung. Oleh karena itu, lokasi ini sering menjadi pilihan keluarga untuk berlibur, terutama dari luar Kota Bandung.</p>\r\n<p>Tak hanya berupa taman rekreasi saja, di Dusun Bambu Lembang juga tersedia penginapan dengan suasana yang romantis. Pengunjung yang hendak bermalam bersama keluarga, dapat menyewa Villa dengan beberapa pilihan tipe yang tersedia.</p>\r\n<p>Lokasi ini juga memiliki fasilitas yang lengkap yaitu terdapatnya pusat perbelanjaan dan toko oleh-oleh. Selain itu, ada pula wahana menarik yang tersedia untuk segala usia seperti Tegal Pangulinan.</p>\r\n<p>Dusun Bambu Lembang Bandung memang tempat wisata yang tepat karena menyediakan beragam kegiatan menarik. Mulai dari aktivitas bermain hingga kegiatan wisata kuliner.</p>\r\n<p>Namun, untuk dapat menikmati seluruh kegiatan di sini, tak akan cukup jika hanya satu hari saja. Apalagi jika membawa serta anak-anak menikmati berbagai wahana&nbsp; menarik sarat edukasi seperti pada arena Bamboo Playground.</p>', 20000, '<p>Dusun Bambu Lembang menyediakan fasilitas restoran yang menyuguhkan pemandangan indah dan nyaman bagi pengunjung. Selain itu juga terdapat taman dengan bunga-bunga cantik yang tertata dengan rapi untuk dinikmati bersama keluarga.</p>\r\n<p>Lokasi wisata ini juga menyediakan&nbsp;<em>shuttle</em>&nbsp;gratis untuk mengitari wilayah Dusun Bambu Bandung yang berangkat setiap 5 menit sekali. Tersedia juga sejenis Pujasera yang bernama Pasar Khatulistiwa yang menyediakan aneka makanan, minuman, souvenir, bahkan sayur-sayuran.</p>\r\n<p>Bagi orang tua yang ingin menghibur anak-anaknya, maka dapat mencoba fasilitas Bamboo Playground. Aktivitas yang bisa dilakukan di sini yaitu melukis kaus, menyusuri danau dengan perahu, dan segala kegiatan lainnya yang terdapat di beberapa&nbsp;<em>booth</em>.</p>\r\n<p><em>Playground</em> ini juga menyediakan wahana menyerupai labirin yang dapat ditelusuri oleh anak-anak. Selain itu juga terdapat penginapan dengan berbagai tipe yang tersedia di Dusun Bambu Lembang bagi keluarga.</p>', 9, 1, 'Jl. Kolonel Masturi No.KM. 11, Kertawangi, Kec. Cisarua, Kabupaten Bandung Barat, Jawa Barat 40551'),
(8, 'Pantai Santolo', 'images/wisata-pantai-dekat-bandung-1.jpg', '<p>Pantai Santolo terletak di Desa Pameungpuek, Kecamatan Cikelet, Kabupaten Garut, Jawa Barat. Kawasan Pantai Santolo merupakan destinasi wisata popuper di Garut dan cukup dikenal di Kota Bandung. Sehingga, banyak wisatawan nusantara maupun mancanegara yang datang ke pantai berpasir putih ini untuk menghabiskan waktu liburan bersama keluarga maupun teman.</p>\r\n<p><strong>Daya Tarik Pantai Santolo </strong></p>\r\n<p>Pantai Santolo terletak pada ketinggian 0-200 meter di atas permukaan laut. Air pantai berwarna biru dengan hembusan angin sedang sehingga sangat nyaman dan menyejukkan. Pantai Santolo juga merupakan tempat berkumpulnya para nelayan tradisional serta dermaga kapal ikan yang terdapat di Pameungpeuk. Kawasan pantai memiliki pemandangan yang memukau, yaitu di sebelah kanan berupa pepohonan hijau yang menutupi kaki Gunung Papandayan.<br><br></p>\r\n<p>Banyak aktifitas yang dapat dilakukan di pantai ini. Tersedia perahu sewaan untuk pengunjung yang ingin mengelilingi pantai sambil menikmati ombak laut selatan. Bagi yang senang memancing, Pantai Santolo merupakan salah satu spot memancig. Pantai Santolo merupakan pantai yang menarik, berjalan kaki mengelilingi pantai maupun menikmati pemandangan sekitar menjadi salah satu aktivitas yang dapat dilakukan di pantai ini. Terlebih, pantai memiliki banyak biota laut. Baca juga: Pantai Widarapayung di Cilacap: Daya Tarik, Harga Tiket, dan Rute Beberapa tempat dapat menjadi spot foto yang indah, seperti daerah dekat Pulau Santolo kecil, sepanjang bibir pantai, maupun jembatan tua Pulau Santolo. Pengunjung juga dapat menikmati hidangan laut segar dengan penyajian yang sederhana.</p>', 12000, '<p>Pantai Santolo sudah terkenal di kalangan wisatawan, sudah sepatutnya jika fasilitas yang ada di pantai ini sangat lengkap. Berikut fasilitas yang tersedia di Pantai Santolo.</p>\r\n<ol>\r\n<li>Parkir yang luas</li>\r\n<li>Toilet umum</li>\r\n<li>Musholla</li>\r\n<li>Restoran</li>\r\n<li>Penginapan</li>\r\n</ol>', 3, 7, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2024812.7040177546!2d107.15617767465581!3d-7.606252711702682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6616140366a15d%3A0xb2758ff514ffcd!2sSantolo%20Beach!5e0!3m2!1sen!2sid!4v1701089955937!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_nama_user` int(11) NOT NULL,
  `nama_lengkap_user` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_nama_user`, `nama_lengkap_user`, `username`, `password`) VALUES
(1, 'Muhammad Fauzan Ansyori', 'Fauzan', '123'),
(2317, 'nopal', 'naufali', 'opal123'),
(2318, 'hore', 'hore', 'hore2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_nama_admin`);

--
-- Indeks untuk tabel `daerah`
--
ALTER TABLE `daerah`
  ADD PRIMARY KEY (`id_nama_daerah`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_nama_kategori`);

--
-- Indeks untuk tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_nama_review`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_travel` (`id_travel`);

--
-- Indeks untuk tabel `traveling`
--
ALTER TABLE `traveling`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_daerah` (`id_daerah`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_nama_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_nama_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `daerah`
--
ALTER TABLE `daerah`
  MODIFY `id_nama_daerah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_nama_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `review`
--
ALTER TABLE `review`
  MODIFY `id_nama_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `traveling`
--
ALTER TABLE `traveling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_nama_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2319;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_nama_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`id_travel`) REFERENCES `traveling` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `traveling`
--
ALTER TABLE `traveling`
  ADD CONSTRAINT `traveling_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_nama_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `traveling_ibfk_6` FOREIGN KEY (`id_daerah`) REFERENCES `daerah` (`id_nama_daerah`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
