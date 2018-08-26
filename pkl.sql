-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2018 at 11:16 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkl`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id_album` int(11) NOT NULL,
  `nama_album` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id_album`, `nama_album`) VALUES
(1, 'Public-Course'),
(2, 'In-House-Training');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi_artikel` text NOT NULL,
  `foto` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `isi_artikel`, `foto`, `tanggal`, `id_kategori`) VALUES
(1, 'SNI ISO 37001 SISTEM MANAJEMEN ANTI SUAP', '<p>Menurut Kamus Besar Bahasa Indonesia, penyuapan berarti proses, cara, perbuatan menyuap atau menyuapkan. Dalam kamus hukum Black\'s Law Dictionary, penyuapan diartikan sebagai tindakan menawarkan, memberikan, menerima, atau meminta nilai dari suatu barang untuk mempengaruhi tindakan pegawai lembaga atau sejenisnya yang bertanggung jawab atas kebijakan umum atau peraturan hukum.</p><p>Sehingga bisa diartikan bahwa penyuapan adalah tindakan memberikan atau meminta uang, barang, atau bentuk lain dari pemberi suap kepada penerima suap dengan maksud agar penerima suap memberikan kemudahan berupa tindakan atau kebijakan dalam wewenang penerima suap sesuai dengan kepentingan pemberi suap.</p><p>Suap dapat membuat orang yang berhak kehilangan haknya, dan orang yang tidak berhak mendapatkannya. Suap adalah sesuatu yang sangat merusak tatanan masyarakat. Apabila jika suap telah menjadi kebiasaan atau tradisi, maka bisa menghancurkan sebuah negara. Yang menjadi korbannya ialah rakyat dan juga generasi penerus bangsa dengan kondisi negara yang carut marut. Suap seperti penyakit yang secara diam-diam menggerus keadilan dan kemanusiaan. Menurut Undang-undang nomor 20 tahun 2001 pemberantasan tindak pidana korupsi, disebutkan dalam pasal 5, 6, dan 7 bahwa pemberi suap dapat diberi hukuman penjara mulai dari 1 hingga 15 tahun tergantung pada jabatan oknum penerima suap. Dan menurut pasal 12 bahwa penerima suap dapat dihukum paling singkat 4-20 tahun penjara.</p><p>Mengingat besarnya kerusakan yang bisa ditimbulkan oleh kegiatan suap terhadap tatanan masyarakat dan negara, maka Presiden Joko Widodo mengeluarkan Inpres No 10 tahun 2016 tentang Aksi Pencegahan dan Pemberantasan Korupsi. Menindaklanjuti Inpres tersebut, Badan Standardisasi Nasional (BSN) mengadopsi secara identik standar ISO 37001: 2016 menjadi SNI ISO 37001:2016 Sistem Manajemen Anti-Suap. SNI ISO 37001:2016 dapat digunakan untuk menanamkan budaya anti-suap dalam sebuah organisasi/institusi negara maupun swasta. Standar ini mendeteksi potensi penyuapan, sehingga organisas/institusii bisa melakukan pencegahan sejak dini.</p><p>SNI ISO 37001:2016 membahas hal-hal sebagai berikut:</p><ol><li>penyuapan di sektor publik, swasta, dan nirlaba;</li><li>penyuapan oleh organisasi;</li><li>penyuapan oleh personil organisasi yang bertindak atas nama organisasi dan atau keuntungan organisasi;</li><li>penyuapan oleh rekan bisnis organisasi yang bertindak atas nama organisasi atau keuntungan organisasi;</li><li>penyuapan kepada organisasi;</li><li>penyuapan kepada personil organisasi dalam kaitan dengan kegiatan organisasi;</li><li>penyuapan kepada rekan bisnis organisasi dalam kaitan dengan kegiatan organisasi;</li><li>penyuapan langsung dan tidak langsung (misalnya suap yang ditawarkan atau diterima melalui atau oleh pihak ketiga).</li></ol><p>SNI ISO 37001:2016 membantu organisasi mengendalikan praktek penyuapan denagn menyediakan sejumlah langkah penting diantaranya penetapan kebijakan anti-penyuapan, penunjukan petugas yang berkewenangan untuk mengawasi kepatuhan terhadap praktik anti-penyuapan, pembinaan dan pelatihan anggota organisasi, penerapan manajemen resiko pada proyek dan kegiatan organisasi, pengendalian finansial dan komersial, dan pelembagaan laporan prosedur investigasi. Dalam penerapan manajemen anti-suap, kepemimpinan dan masukan dari manajemen puncak adalah kewajiban. Manajemen puncak dianjurkan aktif mencari dan mempertimbangkan rekomendasi berbagai inisiatif anti-penyuapan yang mempromosikan atau mempublikasikan praktik anti-penyuapan.</p><p>Untuk memastikan pemenuhan persyaratan pengakuan internasional tersebut, pada hari ini, bertepatan dengan peringatan Hari Akreditasi Dunia, Badan Standardisasi Nasional dan Komite Akreditasi Naisonal (KAN) meluncurkan skema akreditasi lembaga sertifikasi sistem manajemen anti penyuapan untuk memastikan bahwa lembaga sertifikasi di Indonesia yang memberikan layanan sertifikasi sistem manajemen anti penyuapan berdasarkan ISO 37001: 2016 telah memenuhi persyaratan ISO/IEC 17021-1: 2015 dan ISO/IEC TS 17021-9. Dengan adanya skema ini, lembaga sertifikasi sistem menajemen anti penyuapan diharapkan akan segera terakreditasi KAN untuk memberikan sertifikasi kepada organsiasi yang akan menerapkan SNI ISO 37001.</p><p>?</p>', 'artikel.jpg', '2018-08-01 12:48:18', 1),
(2, ' BSN Dorong Pelaku UKM Untuk Menstandarisasikan Pr', '<p><strong>INDUSTRY.co.id</strong>&nbsp;- Jakarta - Diberlakukannya peraturan oleh Kementerian Perindustrian Tentang Pemberlakuan Standar Nasional Indonesia (SNI) secara wajib, maka Badan Standarisasi Nasional (BSN) memberlakukan mainan anak-anak yang berusia 14 tahun ke bawah harus wajib SNI.&nbsp;</p><p>Hal ini tentunya untuk mempermudah para pelaku industri atau para pelaku Usaha Kecil Menengah (UKM) yang bergerak dalam bidang pembuatan mainan dianjurkan untuk segera menstandrasisasikan produknya.&nbsp;</p><p>\"Dari BSN, kita perlakukan para UKM untuk SNI. Jadi, pelaku usaha tersebut kita dorong. Kita ubah Arahnya. Dari pihak pemerintah jangan disubsidi tapi kita dorong dan komplen agar tetap terjaga mutunya. Sehingga kalau mau sertifikasi itu dibantu dengan pengujiannya, dan ini semuanya gratis,\" kata Wahyu Purbowasito selaku Kepala Pusat Sistem Penerapan Standar BSN, di Gedung 1</p><p>&nbsp;</p><p>Wahyu mengungkapkan, biasanya pembinaan terhadap para UKM dilakukan dalam waktu dua h', 'arrtikel2.jpg', '2018-07-27 13:22:46', 2),
(3, 'Ingin Menerapkan Sistem Manajemen Mutu, Badilag Pe', '<p>Meski rapat kerja merupakan rutinitas yang diselenggarakan Ditjen Badilag tiap awal tahun, raker yang berlangsung di Bandung (25-29/1/2016) kali ini terasa berbeda.</p><p>Biasanya, Badilag menggunakan forum raker untuk mengevaluasi kinerja tahun sebelumnya sekaligus membahas rencana kinerja ke depan.</p><p>Kali ini, raker difokuskan pada pengenalan ISO 9001:2015 yang dikaitkan dengan pelaksanaan reformasi birokrasi. Karena itu, Badilag mengusung tema “Dengan rapat kerja, kita efektifkan pelaksanaan reformasi birokrasi di lingkungan Ditjen Badilag”.</p><p>“Kita setting berbeda dari tahun lalu. Kita tidak akan membahas berbagai persoalan program kerja yang lalu maupun yang akan datang. Itu kita bahas di kantor, di eselon dua masing-masing, sesuai anggaran masing-masing,” ujar Sekretaris Ditjen Badilag H. Tukiran, S.H., M.H. ketika memberi sambutan, sebelum membuka kegiatan ini.</p><p>Tujuan yang hendak dicapai Badilag ialah terwujudnya pelayanan prima, baik untuk pihak internal maupun', 'arrtikel4.jpg', '2018-07-27 13:23:54', 3);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `foto` text NOT NULL,
  `nama_banner` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `foto`, `nama_banner`) VALUES
(3, 'IMG-20160812-WA0003.jpg', 'banner'),
(5, 'IMG-20160817-WA0003.jpg', 'banner1'),
(6, 'IMG_20161012_100641.jpg', 'banner2');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nama_client` varchar(30) NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id_client`, `nama_client`, `logo`) VALUES
(1, 'cirebon', '579352-15CTfd15156017651.png'),
(2, 'kominfo', '579352-15CTfd1515601765.png'),
(3, 'kabupaten', 'android.png'),
(4, 'agung', '579352-15CTfd15156017653.png'),
(5, 'pendidikan', 'dj.png'),
(8, 'kabupaten', '579352-15CTfd15156017654.png');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `nama_foto` varchar(30) NOT NULL,
  `foto` text NOT NULL,
  `id_album` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `nama_foto`, `foto`, `id_album`) VALUES
(4, 'Hutan', 'hutan.jpg', 2),
(5, 'traning', '3.jpg', 2),
(6, 'nama', '2.jpg', 1),
(7, 'bersama', 'album1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'berita'),
(2, 'informasi'),
(3, 'Teknologi'),
(4, 'kategori');

-- --------------------------------------------------------

--
-- Table structure for table `keterangan_service`
--

CREATE TABLE `keterangan_service` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keterangan_service`
--

INSERT INTO `keterangan_service` (`id`, `judul`, `keterangan`, `foto`) VALUES
(8, '1. Sistem Manajemen Industri (SMI)', '<p>Divisi SMI memiliki layanan jasa konsultansi untuk pengembangan system manajemen industri:</p><p>1.1. Jasa Perencanaan dan Pengendalian Produksi</p><p>1.2.&nbsp; Jasa Pengembangan Sistem Manajemen Industri</p><p>1.2.1.Jasa Konsultansi Sistem Manajemen Mutu</p><p>1.2.2.Jasa Konsultansi Sistem Manajemen Keamanan &nbsp; Pangan</p><p>1.2.3.Jasa Konsultansi Sistem Manajemen K3</p>', 'IMG-20161012-WA0008.jpg'),
(9, '2. Konsultan Lingkungan (SML)', '<p>2.1. Jasa Konsultansi Sistem Manajemen Lingkungan</p><p>2.2. Jasa Konsultansi Amdal</p>', ''),
(10, '3. Konsultan Teknologi Informatika (TIK) ', '<p>3.1. Disain Sistem Informasi</p><p>3.2.&nbsp; Disain Sistem Manajemen Keamanan Informasi</p><p>3.3.&nbsp; Pemeliharaan Sistem dan Jaringan</p>', ''),
(11, '4. Konsultan Pengembangan Sumberdaya Manusia', '<p>4.1. &nbsp;&nbsp;Jasa Konsultansi</p><p>4.1.1. Pengembangan Sumberdaya Manusia</p><p>4.1.2. Pengembangan Penilaian Kinerja</p><p>4.2.&nbsp;&nbsp; Pelatihan</p>', '');

-- --------------------------------------------------------

--
-- Table structure for table `misi`
--

CREATE TABLE `misi` (
  `id` int(11) NOT NULL,
  `visi` varchar(200) NOT NULL,
  `misi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `misi`
--

INSERT INTO `misi` (`id`, `visi`, `misi`) VALUES
(1, 'Visi\r\nVisi PT FOCUS CITRA ALTERNA adalah menjadi MITRA ALTERNATIF AHLI  bagi berbagai ide konsultansi manajemen\r\n', 'MISI\r\nPT FOCUS CITRA ALTERNA adalah memperluas pengembangan jenis layanan konsultansi manajemen spesifik dengan layanan paripurna melalui dukungan sumberdayamanusia yang memiliki pengetahun mendalam di bidangnya.');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftar` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_telpon` varchar(13) NOT NULL,
  `gelar` varchar(10) NOT NULL,
  `nama_pt` varchar(50) NOT NULL,
  `id_sertifikat` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftar`, `nama`, `alamat`, `no_telpon`, `gelar`, `nama_pt`, `id_sertifikat`, `tanggal`) VALUES
(6, 'andi hoerudin', 'bogor', '-00383883', 'dokter', 'pt indo trans', 3, '2018-08-06 16:01:20'),
(7, 'andi ', 'bogor', '089638889862', 'tes', 'nama', 4, '2018-08-16 06:59:46');

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id_pengaturan` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `isi` varchar(500) NOT NULL,
  `icon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaturan`
--

INSERT INTO `pengaturan` (`id_pengaturan`, `judul`, `isi`, `icon`) VALUES
(1, 'Pengalaman', '<p><strong>Bidang Kehutanan dan Industri Kehutanan</strong></p><ol><li>Penyusunan RKPH</li><li>Penunjukkan sebagai Lembaga Penilai Independen (LPI) mampu untuk penilaian kinerja industri kehutanan oleh Departemen &nbsp; &nbsp; &nbsp; &nbsp; Kehutanan Ri 2004</li><li>Penyelenggaraan event seminar Standar CE Marking untuk produk kayu pasar Eropa</li><li>Konsultansi pengolahan data citra landsat untuk penyusunan wila</li></ol>', 'icon-globe'),
(2, 'Pengalaman', '<p><strong>Bidang Pangan dan Pertanian</strong></p><ol><li>Konsultansi persiapan sertifikasi HACCP/ISO 22000 untuk 27 (duapuluh tujuh) industri pangan, atas rekomendasi LSSHACCP LT?IPB</li><li>Konsultansi persiapan sertifikasi HACCP/ISO 22000 untuk 3 (tiga) industri pangan, untuk sertifikasi oleh LSSHACCP SGS Internasional</li><li>Konsultansi persiapan sertifikasi HACCP untuk 1 (satu) industri pangan, untuk sertifikasi oleh LSSHACCP Mbrio</li></ol>', 'icon-dashboard'),
(3, 'Pengalaman', '<p><strong>Bidang Pangan dan Pertanian</strong></p><ol><li>Konsultansi persiapan sertifikasi HACCP/ISO 22000 untuk .Konsultansi persiapan sertifikasi HACCP/ISO 22000 untuk 27 (duapuluh tujuh) industri pangan, atas rekomendasi LSSHACCP LT?IPB</li><li>Konsultansi persiapan sertifikasi HACCP/ISO 22000 untuk 3 (tiga) industri pangan, untuk sertifikasi oleh LSSHACCP SGS Internasional</li><li>Konsultansi persiapan sertifikasi HACCP untuk 1 (satu) industri pangan, untuk sertifikasi oleh LSSHACCP Mbrio<', 'icon-trophy');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `isi_pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sertifikat`
--

CREATE TABLE `sertifikat` (
  `id_sertifikat` int(11) NOT NULL,
  `nama_sertifikat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sertifikat`
--

INSERT INTO `sertifikat` (`id_sertifikat`, `nama_sertifikat`) VALUES
(2, 'survei_masyarakat'),
(3, 'Gmp_bahaya_kimia'),
(4, 'HACCP');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id_service` int(11) NOT NULL,
  `nama_service` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id_service`, `nama_service`) VALUES
(1, 'Sistem Manajemen Industri (SMI)'),
(2, 'Konsultan Lingkungan (SML) '),
(3, 'Konsultan Teknologi Informatika (TIK) '),
(4, 'Konsultan Pengembangan Sumberdaya Manusia');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `bagian` varchar(30) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `nama`, `bagian`, `foto`) VALUES
(1, 'hoerudin', 'programmer', '2.jpg'),
(3, 'andi', 'keuangan', '1.jpg'),
(4, 'andi hoerudin', 'managament', '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `id_tentang` int(11) NOT NULL,
  `sejarah` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`id_tentang`, `sejarah`) VALUES
(1, '<p>Didirikan pada Februari&nbsp; 2010 di Bogor, sebagai pengembangan divisi dari PT FOCUS CIPTAUSAHA SWADAYA oleh sejumlah professional konsultan yang memiliki pengalaman panjang di bidang jasa konsultansi dan sertifikasi di Indonesia.</p><p>&nbsp;</p><p>Berstatus PMDN dan bergerak di bidang Jasa Konsultansi Manajemen Industri, Manajemen Lingkungan, Sistem Informasi dan Penilaian kinerja. PT FOCUS CITRA ALTERNA melalui FOCUS Group telah berpengalaman sebagai konsultansi Sistem Manajemen berbasis ISO sejak tahun 2003 sampai saat ini. Selain itu juga berpengalaman personalnya menangani system manajemen industri dimulai sejak 1994.</p><p>&nbsp;</p><p>FOCUS Group memfasilitasi pengembangan usaha yang dilakukan oleh personal yang terlibat di dalam pendiriannya dalam bentuk BUSINESS INCUBATOR. Salah satu bentuk pengembangan BUSINESS INCUBATOR adalah pendirian perusahaan PT EQUALITY INDONESIA yang bergerak di bidang sertifikasi pada tahun 2004 dan PT FOCUS CITRA ALTERNA Tahun 2010</p>');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id_moni` int(11) NOT NULL,
  `isi_testi` varchar(100) NOT NULL,
  `nama` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id_moni`, `isi_testi`, `nama`) VALUES
(1, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga men', 'andi hoerudin'),
(2, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga men', 'jundi'),
(3, 'Lorem ipsum dolor si amet, si amet terbuat dari pull && bearr karna dia menarik dan beruang juga men', 'Badrun'),
(4, '<p><i>Lorem ipsum dolor si amet, si amet terbuat dari pull &amp;&amp; bearr karna dia menarik dan be', 'andi ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'andihoerudin', '22512e58749ffead12e90dbd59eddf24', 'hoerudin');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_artikel`
-- (See below for the actual view)
--
CREATE TABLE `v_artikel` (
`id_artikel` int(11)
,`isi_artikel` text
,`foto` text
,`judul` varchar(100)
,`id_kategori` int(11)
,`nama_kategori` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `v_artikel`
--
DROP TABLE IF EXISTS `v_artikel`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_artikel`  AS  select `a`.`id_artikel` AS `id_artikel`,`a`.`isi_artikel` AS `isi_artikel`,`a`.`foto` AS `foto`,`a`.`judul` AS `judul`,`k`.`id_kategori` AS `id_kategori`,`k`.`nama_kategori` AS `nama_kategori` from (`artikel` `a` join `kategori` `k`) where (`a`.`id_kategori` = `k`.`id_kategori`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_album`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_album` (`id_album`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `keterangan_service`
--
ALTER TABLE `keterangan_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `misi`
--
ALTER TABLE `misi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftar`),
  ADD KEY `id_sertifikat` (`id_sertifikat`);

--
-- Indexes for table `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id_pengaturan`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD PRIMARY KEY (`id_sertifikat`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id_tentang`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_moni`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id_album` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `keterangan_service`
--
ALTER TABLE `keterangan_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `misi`
--
ALTER TABLE `misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id_pengaturan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sertifikat`
--
ALTER TABLE `sertifikat`
  MODIFY `id_sertifikat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id_tentang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_moni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`id_album`) REFERENCES `album` (`id_album`);

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `pendaftaran_ibfk_1` FOREIGN KEY (`id_sertifikat`) REFERENCES `sertifikat` (`id_sertifikat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
