-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2018 at 12:44 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sembawa`
--
CREATE DATABASE IF NOT EXISTS `db_sembawa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_sembawa`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agenda`
--

CREATE TABLE `tbl_agenda` (
  `agenda_id` int(11) NOT NULL,
  `agenda_nama` varchar(200) DEFAULT NULL,
  `agenda_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `agenda_deskripsi` text,
  `agenda_mulai` date DEFAULT NULL,
  `agenda_selesai` date DEFAULT NULL,
  `agenda_tempat` varchar(90) DEFAULT NULL,
  `agenda_waktu` varchar(30) DEFAULT NULL,
  `agenda_keterangan` varchar(200) DEFAULT NULL,
  `agenda_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_agenda`
--

INSERT INTO `tbl_agenda` (`agenda_id`, `agenda_nama`, `agenda_tanggal`, `agenda_deskripsi`, `agenda_mulai`, `agenda_selesai`, `agenda_tempat`, `agenda_waktu`, `agenda_keterangan`, `agenda_author`) VALUES
(1, 'Penyembelihan Hewan Kurban Idul Adha 2017', '2017-01-22 06:18:01', 'Idul Adha yang biasa disebut lebaran haji atapun lebaran kurban sangat identik dengan penyembelihan hewan kurban. M-Sekolah tahun ini juga melakukan penyembelihan hewan kurban. Yang rencananya akan dihadiri oleh guru-guru, siswa dan pengurus OSIS.', '2017-01-22', '2017-01-22', 'M-Sekolah', '08.00 - 11.00 WIB', 'Dihadiri oleh guru-guru, siswa dan pengurus OSIS', 'M Fikri Setiadi'),
(2, 'Peluncuran Website Resmi M-Sekolah', '2017-01-22 06:26:33', 'Peluncuran website resmi  M-Sekolah, sebagai media informasi dan akademik online untuk pelayanan pendidikan yang lebih baik kepada siswa, orangtua, dan masyarakat pada umumnya semakin meningkat.', '2017-01-04', '2017-01-04', 'M-Sekolah', '07.30 - 12.00 WIB', '-', 'M Fikri Setiadi'),
(3, 'Penerimaan Raport Semester Ganjil Tahun Ajaran 2017-2018', '2017-01-22 06:29:49', 'Berakhirnya semester ganjil tahun pelajaran 2016-2017, ditandai dengan pembagian laporan hasil belajar.', '2017-02-17', '2017-02-17', 'M-Sekolah', '07.30 - 12.00 WIB', 'Untuk kelas XI dan XII, pembagian raport dimulai pukul 07.30 WIB. Sedangkan untuk kelas X pada pukul 09.00 WIB. Raport diambil oleh orang tua/wali murid masing-masing.', 'M Fikri Setiadi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_album`
--

CREATE TABLE `tbl_album` (
  `album_id` int(11) NOT NULL,
  `album_nama` varchar(50) DEFAULT NULL,
  `album_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `album_pengguna_id` int(11) DEFAULT NULL,
  `album_author` varchar(60) DEFAULT NULL,
  `album_count` int(11) DEFAULT '0',
  `album_cover` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_album`
--

INSERT INTO `tbl_album` (`album_id`, `album_nama`, `album_tanggal`, `album_pengguna_id`, `album_author`, `album_count`, `album_cover`) VALUES
(4, 'photo', '2017-01-24 01:31:13', 1, 'Administrator', 8, '463cc7af7e2f6907c0aea38df42bb31c.jpg'),
(5, 'Sapras Sekolah', '2018-03-27 01:02:20', 1, 'Administrator', 0, 'ceaed94393ca54103959f9c47d988988.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_files`
--

CREATE TABLE `tbl_files` (
  `file_id` int(11) NOT NULL,
  `file_judul` varchar(120) DEFAULT NULL,
  `file_deskripsi` text,
  `file_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `file_oleh` varchar(60) DEFAULT NULL,
  `file_download` int(11) DEFAULT '0',
  `file_data` varchar(120) DEFAULT NULL,
  `kategori_file_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_files`
--

INSERT INTO `tbl_files` (`file_id`, `file_judul`, `file_deskripsi`, `file_tanggal`, `file_oleh`, `file_download`, `file_data`, `kategori_file_id`) VALUES
(20, 'DIPA 2014', 'DIPA 2014', '2018-03-27 15:59:33', 'Admin', 0, 'DIPA_2014.pdf', 1),
(21, 'DIPA 2013', 'DIPA 2013', '2018-03-27 16:00:48', 'Admin', 0, 'DIPA_2013.pdf', 1),
(22, 'DIPA 2015', 'DIPA 2015', '2018-03-27 16:01:19', 'Admin', 0, 'DIPA_2015.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `galeri_id` int(11) NOT NULL,
  `galeri_judul` varchar(60) DEFAULT NULL,
  `galeri_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `galeri_gambar` varchar(40) DEFAULT NULL,
  `galeri_album_id` int(11) DEFAULT NULL,
  `galeri_pengguna_id` int(11) DEFAULT NULL,
  `galeri_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`galeri_id`, `galeri_judul`, `galeri_tanggal`, `galeri_gambar`, `galeri_album_id`, `galeri_pengguna_id`, `galeri_author`) VALUES
(12, 'Gedung Sekolah', '2017-01-24 01:31:42', 'f6ba0dd708d0bb7e3c4cc4bd847b9782.JPG', 4, 1, 'M Fikri Setiadi'),
(13, 'PKL ATP 2017', '2017-01-24 01:31:55', '59de54830b0d76f334e6b57eea705791.jpg', 4, 1, 'M Fikri Setiadi'),
(14, 'PKL ATP. 2017', '2017-01-24 01:32:24', '4221541a10af9df13ffd0a0bc36fc9e9 (1).jpg', 4, 1, 'M Fikri Setiadi'),
(15, 'PKL ATPH 2017', '2017-01-24 01:32:34', '777f0e6c8aa3fb6715aa89ff592ab8e7.jpg', 4, 1, 'M Fikri Setiadi'),
(16, 'PKL TPHP (1) 2017', '2017-01-24 01:32:44', '3c95fbd779b0e6b271137ea94ef9cea8.jpg', 4, 1, 'M Fikri Setiadi'),
(17, 'PKL @ PADI', '2017-01-24 01:33:08', '54ac28d964172d73db3f9cb0b7d2f281.jpg', 4, 1, 'M Fikri Setiadi'),
(18, 'PKL @ PTPN VII', '2017-01-24 01:33:24', '8ae0413e8fe0e664f868da3419fc46be.jpg', 4, 1, 'M Fikri Setiadi'),
(19, 'Agribisnis Pengolahan Hasil Pertanian', '2017-08-08 00:54:58', 'DSC_0038.JPG', 4, 1, 'M Fikri Setiadi'),
(20, 'Agribisnis Tanaman Pangan', '2018-03-25 16:03:10', 'DSC_0004.JPG', 4, 1, 'M Fikri Setiadi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `guru_id` int(11) NOT NULL,
  `guru_nama` varchar(60) DEFAULT NULL,
  `guru_gambar` varchar(60) DEFAULT NULL,
  `guru_tanggal` varchar(60) DEFAULT NULL,
  `guru_tempat` varchar(60) DEFAULT NULL,
  `guru_kelamin` varchar(11) DEFAULT NULL,
  `nik` varchar(60) DEFAULT NULL,
  `guru_jenis` varchar(60) DEFAULT NULL,
  `guru_mapel` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`guru_id`, `guru_nama`, `guru_gambar`, `guru_tanggal`, `guru_tempat`, `guru_kelamin`, `nik`, `guru_jenis`, `guru_mapel`) VALUES
(1, 'Anita Andri Yanti, Sp, MP', NULL, '2018-04-25', NULL, 'P', '19710108 199903 2 001', NULL, 'Bhs.Inggris'),
(2, 'Arie Ansyah, ST', NULL, '20 Mei 1977', NULL, 'L', '19770520 200812 1 002', NULL, 'Matematika');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inbox`
--

CREATE TABLE `tbl_inbox` (
  `inbox_id` int(11) NOT NULL,
  `inbox_nama` varchar(40) DEFAULT NULL,
  `inbox_email` varchar(60) DEFAULT NULL,
  `inbox_kontak` varchar(20) DEFAULT NULL,
  `inbox_pesan` text,
  `inbox_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `inbox_status` int(11) DEFAULT '1' COMMENT '1=Belum dilihat, 0=Telah dilihat'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inbox`
--

INSERT INTO `tbl_inbox` (`inbox_id`, `inbox_nama`, `inbox_email`, `inbox_kontak`, `inbox_pesan`, `inbox_tanggal`, `inbox_status`) VALUES
(1, 'M.Puji Lesmana', 'muhammadpuji63@gmail.com', '123131', 'dsadada', '2018-03-29 07:11:57', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(30) DEFAULT NULL,
  `kategori_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`kategori_id`, `kategori_nama`, `kategori_tanggal`) VALUES
(1, 'Jadwal', '2016-09-06 05:49:04'),
(2, 'Kampusku', '2016-09-06 05:50:01'),
(3, 'Kegiatan_Mingguan', '2016-09-06 05:59:39'),
(5, 'Kerja_Sama', '2016-09-06 06:19:26'),
(7, 'Pengumuman', '2018-03-21 01:23:31'),
(8, 'agenda', '2018-03-21 01:23:46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_files`
--

CREATE TABLE `tbl_kategori_files` (
  `kategori_f_id` int(11) NOT NULL,
  `kategori_nama` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori_files`
--

INSERT INTO `tbl_kategori_files` (`kategori_f_id`, `kategori_nama`) VALUES
(1, 'Informasi publik berkala'),
(2, 'Informasi publik setiap saat'),
(3, 'Sarana Prasarana'),
(4, 'TUK'),
(5, 'Gedung'),
(6, 'Laboratorium');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `kelas_id` int(11) NOT NULL,
  `kelas_nama` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`kelas_id`, `kelas_nama`) VALUES
(1, 'Kelas X.1'),
(2, 'Kelas X.2'),
(3, 'Kelas X.3'),
(4, 'Kelas X.4'),
(5, 'Kelas X.5'),
(6, 'Kelas X.6'),
(7, 'Kelas X.7'),
(8, 'Kelas X.8'),
(9, 'Kelas XI IPA.1'),
(10, 'Kelas XI IPA.2'),
(11, 'Kelas XI IPA.3'),
(12, 'Kelas XI IPA.4'),
(13, 'Kelas XI IPA.5'),
(14, 'Kelas XI IPA.6'),
(15, 'Kelas XI IPA.7'),
(16, 'Kelas XI IPS.1'),
(17, 'Kelas XI IPS.2'),
(18, 'Kelas XI IPS.3'),
(19, 'Kelas XI IPS.4'),
(20, 'Kelas XI IPS.5'),
(21, 'Kelas XI IPS.6'),
(22, 'Kelas XI IPS.7'),
(26, ''),
(27, ''),
(28, 'Kelas XI IPA.4'),
(29, 'Kelas XI IPA.5'),
(30, 'Kelas XI IPA.6'),
(31, 'Kelas XI IPA.7'),
(32, 'Kelas XI IPS.1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `komentar_id` int(11) NOT NULL,
  `komentar_nama` varchar(30) DEFAULT NULL,
  `komentar_email` varchar(50) DEFAULT NULL,
  `komentar_web` varchar(100) DEFAULT NULL,
  `komentar_isi` varchar(120) DEFAULT NULL,
  `komentar_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `komentar_status` int(2) DEFAULT '0',
  `komentar_tulisan_id` int(11) DEFAULT NULL,
  `komentar_parent` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`komentar_id`, `komentar_nama`, `komentar_email`, `komentar_web`, `komentar_isi`, `komentar_tanggal`, `komentar_status`, `komentar_tulisan_id`, `komentar_parent`) VALUES
(1, 'M Fikri Setiadi', 'setiadi@mfikri.com', 'mfikri.com', 'Ping!', '2017-07-19 01:33:07', 1, 20, 0),
(4, 'M Fikri Setiadi', 'setiadi@mfikri.com', 'mfikri.com', 'Nice Post :)', '2017-07-19 01:43:39', 1, 20, 0),
(5, 'M Fikri Setiadi', 'setiadi@mfikri.com', 'mfikri.com', '[removed]alert&amp;#40;No Found !&amp;#41;;[removed]', '2017-07-19 01:35:28', 0, 20, 2),
(6, 'Jokowi', 'joko@gmail.com', '', 'Ping !', '2017-07-19 02:48:24', 0, 20, 2),
(7, 'M Fikri Setiadi', NULL, NULL, 'Can I help you?', '2017-08-03 15:11:21', 1, 20, 1),
(8, 'M Fikri Setiadi', NULL, NULL, 'Thank you.', '2017-08-03 15:27:56', 1, 20, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_log_aktivitas`
--

CREATE TABLE `tbl_log_aktivitas` (
  `log_id` int(11) NOT NULL,
  `log_nama` text,
  `log_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `log_ip` varchar(20) DEFAULT NULL,
  `log_pengguna_id` int(11) DEFAULT NULL,
  `log_icon` blob,
  `log_jenis_icon` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_nama` varchar(50) DEFAULT NULL,
  `pengguna_moto` varchar(100) DEFAULT NULL,
  `pengguna_jenkel` varchar(2) DEFAULT NULL,
  `pengguna_username` varchar(30) DEFAULT NULL,
  `pengguna_password` varchar(35) DEFAULT NULL,
  `pengguna_tentang` text,
  `pengguna_email` varchar(50) DEFAULT NULL,
  `pengguna_nohp` varchar(20) DEFAULT NULL,
  `pengguna_facebook` varchar(35) DEFAULT NULL,
  `pengguna_twitter` varchar(35) DEFAULT NULL,
  `pengguna_linkdin` varchar(35) DEFAULT NULL,
  `pengguna_google_plus` varchar(35) DEFAULT NULL,
  `pengguna_status` int(2) DEFAULT '1',
  `pengguna_level` varchar(3) DEFAULT NULL,
  `pengguna_register` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pengguna_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_moto`, `pengguna_jenkel`, `pengguna_username`, `pengguna_password`, `pengguna_tentang`, `pengguna_email`, `pengguna_nohp`, `pengguna_facebook`, `pengguna_twitter`, `pengguna_linkdin`, `pengguna_google_plus`, `pengguna_status`, `pengguna_level`, `pengguna_register`, `pengguna_photo`) VALUES
(1, 'Administrator', 'Just do it', 'L', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '', 'fikrifiver97@gmail.com', '081277159401', 'facebook.com/m_fikri_setiadi', 'twitter.com/fiver_fiver', '', '', 1, '1', '2016-09-03 06:07:55', '74eec6ad37550cc12fe8fa83d46878af.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengunjung`
--

CREATE TABLE `tbl_pengunjung` (
  `pengunjung_id` int(11) NOT NULL,
  `pengunjung_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pengunjung_ip` varchar(40) DEFAULT NULL,
  `pengunjung_perangkat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengunjung`
--

INSERT INTO `tbl_pengunjung` (`pengunjung_id`, `pengunjung_tanggal`, `pengunjung_ip`, `pengunjung_perangkat`) VALUES
(953, '2018-03-26 10:32:11', '::1', 'Chrome'),
(954, '2018-03-26 23:24:14', '::1', 'Chrome'),
(955, '2018-03-28 01:40:38', '::1', 'Chrome'),
(956, '2018-03-29 01:48:11', '::1', 'Chrome'),
(957, '2018-03-29 01:48:11', '::1', 'Chrome');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio`
--

CREATE TABLE `tbl_portfolio` (
  `port_id` int(11) NOT NULL,
  `port_nama` varchar(70) DEFAULT NULL,
  `port_judul` varchar(200) DEFAULT NULL,
  `port_deskripsi` text,
  `tulisan_views` int(60) NOT NULL,
  `port_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `port_author` varchar(40) DEFAULT NULL,
  `port_image` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_portfolio`
--

INSERT INTO `tbl_portfolio` (`port_id`, `port_nama`, `port_judul`, `port_deskripsi`, `tulisan_views`, `port_tanggal`, `port_author`, `port_image`) VALUES
(8, 'Ir. Mattobi''i, MP', 'Sambutan Kepala Sekolah', '<p>Assalamualaikum Warahmatullahi Wabarakatuh</p>\r\n\r\n<p>Alhamdulillah, syukur kehadirat Tuhan Yang Maha Esa, dengan rahmat dan karunia-Nya akhirnya website sekolah ini telah selesai diperbaharui. Kami mengucapkan selamat datang di website  Sekolah Menengah Kejuruan Pertanian Pembangunan (SMK PP) Negeri Sembawa, Sumatera Selatan. Di era global  yang ditandai dengan makin pesatnya Teknologi Informasi, tidak dipungkiri bahwa keberadaan sebuah website untuk suatu  instansi menjadi sebuah keharusan. Website tersebut dapat digunakan sebagai  sarana informasi dan komunikasi pihak sekolah dengan siswa, alumni, dan stake holder secara luas.</p>\r\n\r\n<p>Selanjutnya, website sekolah ini harus dapat berfungsi sebagai media untuk mendukung proses pembelajaran di sekolah. Guru dapat menuliskan  materi  pembelajaran  sekaligus memberikan Tugas-Tugas Mandiri kepada peserta didik, sehingga akan menunjang kegiatan pembelajaran berbasis Teknologi Informasi. Selain itu juga website juga dapat menjadi sarana promosi sekolah yang cukup efektif. Kami menyadari sepenuhnya,  bahwa website sekolah kami masih terdapat banyak kekurangan, oleh karena itu kepada seluruh civitas akademika dan masyarakat umum dapat memberikan saran dan kritik yang membangun demi kemajuan website ini lebih lanjut.</p>\r\n\r\n<p>Mari kita bekerja dan berkarya untuk kemajuan SMK PP Negeri Sembawa yang Religius, Disiplin, dan Mandiri.</p>\r\n\r\n<p>Wassalamualaikum Warahmatullohi Wabarokatuh.</p>', 2, '2018-03-25 05:15:29', 'Puji', 'mattobi.jpg'),
(9, NULL, 'Profil', 'M-TECHNO\r\nToggle navigation\r\n0\r\nAdministrator\r\nMenu Utama\r\n Dashboard\r\n Post\r\n Add New\r\n Post Lists\r\n Kategori\r\n Portfolio\r\n Pengguna\r\n Gallery\r\n Komentar 2\r\n Inbox 0\r\n Sign Out\r\nPost \r\n Home Post Add New\r\nJudul\r\n\r\nJudul berita atau artikel\r\nPost\r\n\r\n<p><strong>S</strong>ekolah Menengah Kejuruan Pertanian Pembangunan (SMK PP) Negeri Sembawa Palembang adalah Unit Pelaksana Teknis Kementerian Pertanian di bawah koordinasi Pusat Pendidikan, Standardisasi dan Sertifikasi Profesi&nbsp;<strong>(Pusdikdarkasi)</strong>&nbsp;&nbsp;Pertanian, Badan Penyuluhan dan Pengembangan Sumberdaya Manusia Pertanian.</p>\r\n\r\n<p>SMK PP Negeri Sembawa didirikan sesuai dengan Peraturan Menteri Pertanian No.4/55 tanggal 25 April 1955&nbsp; tentang Peraturan Bagi Sekolah-Sekolah Pertanian Menengah Atas Negeri dengan nama Sekolah Pertanian Menengah Atas (SPMA) yang berlokasi di Desa Sembawa Kabupaten Banyuasin Provinsi Sumatera Selatan. Pada tahun 1975 sampai dengan 1983/1984 nama SPMA diubah menjadi Sekolah Pertanian Pembangunan. Sekolah Pertanian Menengah Atas (SPP-SPMA) Polivalen.</p>\r\n\r\n<p>Pada tahun 1985 sampai dengan 2009 SPP-SPMA berubah nama menjadi Sekolah Pertanian Pembangunan (SPP).&nbsp; Pada tahun 2010, sesuai dengan Peraturan Menteri Pertanian No.10 tahun 2009 maka nama SPP Negeri Sembawa berubah nama menjadi SMK SPP Negeri Sembawa. Tahun 2013 sampai sekarang, SMK SPP Negeri Sembawa berubah nama menjadi SMK PP Negeri Sembawa.</p>\r\n\r\n<p>Pada tahun 2009, SMK PP Negeri Sembawa Palembang memperoleh Sertifikat ISO 9001: 2008 yang diregistrasi oleh VEDCA-IQS untuk ruang lingkup Sistem Manajemen Mutu bagi Jasa Pedidikan dan Pelatihan Kejuruan</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Visi</strong></p>\r\n\r\n<p>Terwujudnya lulusan yang berakhlak mulia, cerdas, terampil, berjiwa&nbsp; wirausaha dan peduli lingkungan</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Misi</strong></p>\r\n\r\n<ul>\r\n	<li>Melaksanakan pembinaan IMTAQ dan pendidikan karakter</li>\r\n	<li>Mengembangkan profesionalisme pendidik dan tenaga kependidikan</li>\r\n	<li>Mengembangkan program pembelajaran untuk menghasilkan lulusan yang kompeten, berdaya saing dan berkarakter</li>\r\n	<li>Meningkatkan sarana dan prasarana pendidikan</li>\r\n	<li>Mengembangkan kerjasama dengan instansi terkait, masyarakat dan dunia usaha/dunia industri baik di dalam maupun luar negeri</li>\r\n	<li>Mengembangkan unit-unit usaha pertanian yang berwawasan lingkungan sebagai&nbsp;<em>teaching farm</em></li>\r\n	<li>Menjadikan sekolah sebagai pusat sumber belajar</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Struktur Organisasi</strong></p>\r\n\r\n<p><strong><img alt="" src="https://smkppnsembawa.sch.id/media_library/posts/page-image-1510455488412.png" style="height:416px; width:763px" /></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n', 5, '2018-03-25 08:02:01', 'puji', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post_rating`
--

CREATE TABLE `tbl_post_rating` (
  `rate_id` int(11) NOT NULL,
  `rate_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `rate_ip` varchar(40) DEFAULT NULL,
  `rate_point` int(11) DEFAULT NULL,
  `rate_tulisan_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post_rating`
--

INSERT INTO `tbl_post_rating` (`rate_id`, `rate_tanggal`, `rate_ip`, `rate_point`, `rate_tulisan_id`) VALUES
(2, '2017-08-07 05:58:14', '::1', 1, 30),
(4, '2017-08-07 05:59:03', '::1', 1, 29),
(5, '2017-08-07 06:23:40', '::1', 3, 31),
(6, '2017-08-07 06:26:14', '::1', 4, 28),
(7, '2017-08-08 01:15:56', '::1', 2, 27),
(8, '2017-08-25 18:20:57', '::1', 4, 26),
(9, '2018-03-24 06:01:56', '::1', 1, 32),
(10, '2018-03-28 02:26:37', '::1', 1, 47);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post_views`
--

CREATE TABLE `tbl_post_views` (
  `views_id` int(11) NOT NULL,
  `views_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `views_ip` varchar(40) DEFAULT NULL,
  `views_tulisan_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post_views`
--

INSERT INTO `tbl_post_views` (`views_id`, `views_tanggal`, `views_ip`, `views_tulisan_id`) VALUES
(1, '2017-08-07 07:28:38', '::1', 31),
(2, '2017-08-07 07:28:51', '::1', 30),
(3, '2017-08-07 13:08:57', '::1', 27),
(4, '2017-08-07 15:55:32', '::1', 28),
(5, '2017-08-07 16:02:55', '::1', 29),
(6, '2017-08-08 00:58:17', '::1', 26),
(7, '2017-08-08 01:13:58', '::1', 27),
(8, '2017-08-08 01:16:07', '::1', 30),
(9, '2017-08-09 13:04:36', '::1', 30),
(10, '2017-08-11 06:56:47', '::1', 31),
(11, '2017-08-11 08:42:41', '::1', 30),
(12, '2017-08-11 08:42:47', '::1', 27),
(13, '2017-08-11 08:42:54', '::1', 26),
(14, '2017-08-11 08:43:00', '::1', 28),
(15, '2017-08-11 08:43:07', '::1', 25),
(16, '2017-08-11 08:43:10', '::1', 29),
(17, '2017-08-24 16:39:13', '::1', 31),
(18, '2017-08-24 16:39:13', '::1', 0),
(19, '2017-08-24 16:39:13', '::1', 0),
(20, '2017-08-24 16:39:13', '::1', 0),
(21, '2017-08-24 17:00:21', '::1', 31),
(22, '2017-08-24 17:00:22', '::1', 0),
(23, '2017-08-25 13:49:50', '::1', 30),
(24, '2017-08-25 17:22:19', '::1', 30),
(25, '2017-08-25 17:22:20', '::1', 0),
(26, '2017-08-25 17:25:14', '::1', 27),
(27, '2017-08-25 17:27:37', '::1', 26),
(28, '2017-08-25 17:45:38', '::1', 25),
(29, '2017-08-25 17:54:57', '::1', 29),
(30, '2017-08-25 18:18:38', '::1', 31),
(31, '2017-08-25 18:19:02', '::1', 28),
(32, '2017-08-27 12:43:48', '::1', 30),
(33, '2017-08-27 12:43:49', '::1', 0),
(34, '2017-08-28 07:35:26', '::1', 31),
(35, '2017-08-29 03:13:08', '::1', 30),
(36, '2017-08-29 03:13:09', '::1', 0),
(37, '2017-08-29 03:13:16', '::1', 29),
(38, '2017-08-29 13:44:05', '::1', 31),
(39, '2017-09-01 13:52:01', '::1', 30),
(40, '2017-09-01 13:52:01', '::1', 0),
(41, '2017-09-01 14:00:27', '::1', 25),
(42, '2017-09-02 04:50:46', '::1', 31),
(43, '2017-09-02 04:50:46', '::1', 0),
(44, '2017-09-02 04:51:23', '::1', 28),
(45, '2017-10-08 00:25:57', '::1', 25),
(46, '2017-10-08 00:25:57', '::1', 0),
(47, '2017-10-16 03:19:53', '::1', 31),
(48, '2017-10-16 03:19:54', '::1', 0),
(49, '2017-10-16 03:20:18', '::1', 25),
(50, '2017-10-28 00:13:13', '::1', 30),
(51, '2017-10-28 00:13:14', '::1', 0),
(52, '2017-10-29 04:16:58', '::1', 30),
(53, '2017-10-29 04:16:59', '::1', 0),
(54, '2017-10-29 04:23:42', '::1', 31),
(55, '2018-03-21 09:36:16', '::1', 0),
(56, '2018-03-21 09:36:29', '::1', 31),
(57, '2018-03-21 10:03:36', '::1', 32),
(58, '2018-03-22 07:29:40', '::1', 32),
(59, '2018-03-22 07:30:24', '::1', 31),
(60, '2018-03-22 07:52:18', '::1', 0),
(61, '2018-03-23 03:21:16', '::1', 32),
(62, '2018-03-23 03:21:41', '::1', 31),
(63, '2018-03-24 03:36:23', '::1', 0),
(64, '2018-03-24 05:01:41', '::1', 32),
(65, '2018-03-24 07:15:36', '::1', 29),
(66, '2018-03-24 07:29:51', '::1', 31),
(67, '2018-03-25 06:07:57', '::1', 32),
(68, '2018-03-25 07:39:41', '::1', 0),
(70, '2018-03-25 07:50:41', '::1', 8),
(71, '2018-03-25 08:02:38', '::1', 9),
(72, '2018-03-25 15:48:09', '::1', 46),
(73, '2018-03-26 03:02:20', '::1', 9),
(74, '2018-03-26 23:57:50', '::1', 34),
(75, '2018-03-27 00:40:28', '::1', 9),
(76, '2018-03-27 01:19:45', '::1', 40),
(77, '2018-03-27 01:20:35', '::1', 39),
(78, '2018-03-27 01:20:40', '::1', 36),
(79, '2018-03-27 01:20:45', '::1', 38),
(80, '2018-03-27 01:20:57', '::1', 44),
(81, '2018-03-27 01:21:04', '::1', 0),
(82, '2018-03-27 01:21:05', '::1', 42),
(83, '2018-03-27 01:22:27', '::1', 43),
(84, '2018-03-27 01:23:40', '::1', 35),
(85, '2018-03-27 01:25:04', '::1', 47),
(86, '2018-03-27 01:25:51', '::1', 46),
(87, '2018-03-27 01:38:24', '::1', 29),
(88, '2018-03-28 02:20:32', '::1', 9),
(89, '2018-03-28 02:24:36', '::1', 47),
(90, '2018-03-29 01:57:14', '::1', 36),
(91, '2018-03-29 04:19:45', '::1', 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `siswa_id` int(11) NOT NULL,
  `siswa_nis` varchar(30) DEFAULT NULL,
  `siswa_nama` varchar(20) DEFAULT NULL,
  `siswa_jenkel` varchar(2) DEFAULT NULL,
  `siswa_kelas_id` int(11) DEFAULT NULL,
  `siswa_photo` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`siswa_id`, `siswa_nis`, `siswa_nama`, `siswa_jenkel`, `siswa_kelas_id`, `siswa_photo`) VALUES
(1, '9287482', 'Alvaro Sanchez', 'L', 8, '083d547659a2d4bb15c0322d15955da5.png'),
(2, '9287483', 'Ririn Cantika', 'P', 8, '74eec6ad37550cc12fe8fa83d46878af.jpg'),
(3, '123083', 'Ari Hidayat', 'L', 1, 'e371e67618ad53c99de380782c373023.png'),
(4, '123084', 'Irma Chaiyo', 'P', 1, '1e148b42c71562841ba3018fc97b748a.png'),
(5, '123085', 'Nadila Ginting', 'P', 1, '8125da21f903803b6992214967239ab3.png'),
(6, '123086', 'Anna Marina', 'P', 1, '33eaf3e3faf28a0fe31670c022f641f1.png'),
(7, '123089', 'Dhea Lubis', 'P', 1, '03e651410e969c3c26e8e0d35380470d.png'),
(8, '123087', 'Nadia Ginting', 'P', 1, 'd7823f8d98d376c085aa284a54d63264.png'),
(9, '123088', 'Mita Febrina', 'P', 1, 'eca0280a4a57c911ee68b8318d1e517f.png'),
(10, '123095', 'Elizabeth', 'P', 1, 'ec1232a08d650bc8c3197c9db95a7fc8.png'),
(11, '123090', 'Della Guswono', 'P', 1, '6c82fce13bb3eff1fd2e897b2c3cfeeb.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tulisan`
--

CREATE TABLE `tbl_tulisan` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(200) DEFAULT NULL,
  `tulisan_isi` text,
  `tulisan_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) DEFAULT '0',
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL DEFAULT '0',
  `tulisan_slug` varchar(250) DEFAULT NULL,
  `tulisan_rating` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tulisan`
--

INSERT INTO `tbl_tulisan` (`tulisan_id`, `tulisan_judul`, `tulisan_isi`, `tulisan_tanggal`, `tulisan_kategori_id`, `tulisan_kategori_nama`, `tulisan_views`, `tulisan_gambar`, `tulisan_pengguna_id`, `tulisan_author`, `tulisan_img_slider`, `tulisan_slug`, `tulisan_rating`) VALUES
(29, 'WannaCry Hero Dibebankan Dengan Menciptakan $ 7000 Malware Perbankan', '<p>Dalam sebuah peristiwa yang mengherankan, orang yang menghentikan penyebaran uang tebusan WannaCry awal tahun ini telah ditangkap dan dikenai tuduhan menciptakan malware perbankan yang dikenal dengan Kronos.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel. Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n', '2017-08-07 02:36:39', 2, 'Kampusku', 6, 'bf687360506b89dea045e2545f35ac4f.jpg', 1, 'Administrator', 0, 'wannacry-hero-dibebankan-dengan-menciptakan--7000-malware-perbankan.html', 1),
(30, 'Kebocoran iPhone 8 Baru Mengungkapkan Fitur yang Lebih Mengecewakan', '<p><em>Apple CEO Tim Cook delivers the opening keynote address the 2017 Apple</em></p>\r\n\r\n<p>Sudah lama sekali sejak Apple mampu menyimpan kejutan nyata dari beledu digital dan mengungkapkan &#39;satu hal&#39; yang sebenarnya selama sebuah keynote. Fase desain dan prototyping yang panjang, ditambah dengan rantai pasokan yang diperluas, telah menghasilkan garis manufaktur yang bocor.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel. Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n', '2017-08-07 02:46:11', 2, 'Kampusku', 11, '53243c24166c53ec24ac84b8f4c56940.jpg', 1, 'Administrator', 0, 'kebocoran-iphone-8-baru-mengungkapkan-fitur-yang-lebih-mengecewakan.html', 1),
(31, 'Facebook Meluas Melawan Berita Fake Dengan Artikel Otomatis', '<p>Setelah pemilihan Presiden, ketika Facebook FB -0.23% menghadapi pengawasan karena memungkinkan penyebaran berita politik palsu, jaringan sosial terus mengambil langkah baru untuk memberantas informasi palsu di seluruh aplikasinya.<br />\r\n<!--[if !supportLineBreakNewLine]--><br />\r\n<!--[endif]-->Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel. Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2017-08-07 02:51:02', 2, 'Kampusku', 14, '054646a61adf67fbc074f23415a96531.jpg', 1, 'Administrator', 0, 'facebook-meluas-melawan-berita-fake-dengan-artikel-otomatis.html', 3),
(32, 'SMK PP NEGERI SEMBAWA MERAIH PRESTASI DALAM LOMBA KOMPETENSI SISWA (LKS) BIDANG AGRONOMI TINGKAT PROVINSI SUMSEL TAHUN 2017', '<p>SMK PP Negeri Sembawa menjadi salah satu utusan kontingen/ peserta SMK dari Banyuasin dalam kegiatan  Lomba Kompetensi Siswa (LKS) SMK Tingkat Provinsi Sumatera Selatan Tahun 2017, yang dilaksanakan pada empat tempat yakni di Hotel Horison Ultima, SMKN 2 Palembang, SMK 6 Palembang, dan SMK Sumsel pada tanggal 17-20 Oktober 2017.\r\n\r\nLomba Kompetensi Siswa (LKS) bidang agronomi merupakan kegiatan pengujian ( pembuktian) kompetensi siswa SMK pada program Keahlian Agribisnis Pembenihan Tanaman yang menekankan pada aspek Produksi Benih dengan mengacu pada makna/definisi benih dalam UU No. 12, tahun 1992; tentang Sistem Budidaya Tanaman, dengan menerapkan metode assesmen praktik, dan presentasi dengan suasana arena lomba yang bersifat demonstratif atau dapat dilihat oleh khalayak masyarakat umum dan industry (entertainment).\r\n\r\nPada kegiatan LKS tahun ini diadakan dengan berbagai macam bidang perlombaan sesuai bidang kompetensi yang ada di SMK seluruh Sumatera Selatan. Kegiatan ini diikuti oleh 175 siswa dan guru pembimbing, serta 65 orang juri. SMK PP Negeri Sembawa ikut serta mewakili  pada bidang lomba Agronomi dengan tema “Produksi Benih Tanaman Pangan dan Hortikultura Bersertifikat Berbasis Entrepreneurship “\r\n\r\nSMK PP Negeri Sembawa diwakili oleh salah satu siswa kelas XII Agribisnis Tanaman Pangan dan Hortikultura Satu (ATPH 1) atas nama  Zulmy  Junia Widosari pada bidang agronomi mendapatkan Juara 2. Pencapaian ini dirasakan sudah maksimal mengingat singkatnya waktu yang digunakan untuk persiapan mengikuti lomba tersebut.\r\n\r\n Dengan adanya perlombaan seperti ini siswa SMK bisa meningkatkan kompetensi diri dan intropeksi kompetensi pada bidang kompetensi yang ada agar bisa ditingkatkan lagi dan menjadi pembelajaran serta pengalaman supaya bisa menghasilkan generasi muda yang mampu bersaing di dunia global.(humas)</p>', '2018-03-21 02:32:50', 1, 'Jadwal', 5, '5851dc6f6c1e891e20457a6f90800a76.jpg', 1, 'Administrator', 0, 'smk-pp-negeri-sembawa-meraih-prestasi-dalam-lomba-kompetensi-siswa-lks-bidang-agronomi-tingkat-provinsi-sumsel-tahun-2017.html', 1),
(33, 'SMK PP NEGERI SEMBAWA BAGIKAN RATUSAN PIALA PEKAN LOMBA', '<p>Kegiatan Pekan Lomba telah dilaksanakan dengan baik dari tanggal 6 s.d. 11 Februari 2017. Sabtu, 11 Februari 2017 dilaksanakan acara penutupan sekaligus pembagian piala, sertifikat penghargaan, dan uang pembinaan. Juara umum&nbsp; Pekan Lomba SMK-PP Negeri Sembawa Tahun 2017 tingkat SMP/MTs diperoleh SMP Negeri 1 Sembawa, sedangkan untuk tingkat SMA/SMK/MA diperoleh SMA PLUS Negeri 2 BA III.</p>\r\n\r\n<p>Dalam upacara penutupan, Kepala SMK PP Negeri Sembawa, Ir. Mattobi&rsquo;i, M.P. menyampaikan selamat kepada para pemenang dan menghimbau kepada seluruh peserta lomba agar&nbsp; terus meningkatkan prestasinya. Tak lupa disampaikan ucapan terima kasih kepada semua yang telah berpartisipasi pada kegiatan tersebut dan semoga pelaksanaan kegiatan berikutnya menjadi lebih baik lagi. Pada kesempatan itu juga disampaikan, siswa SMP sederajat yang mempunyai minat pada dunia pertanian dapat melanjutkan sekolah di SMK PP Negeri Sembawa.</p>\r\n\r\n<p>Adapun daftar pemenang pekan lomba di SMK PP Negeri Sembawa tahun 2017 adalah sebagai berikut :</p>\r\n\r\n<table border="1" cellpadding="0" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>No</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Jenis Lomba</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Pemenang</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Ket</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>1.</p>\r\n			</td>\r\n			<td>\r\n			<p>Sepak Bola</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>SMP</strong></p>\r\n\r\n			<p>Juara I (SMP N 1 Sembawa)<br />\r\n			Juara II (SMP N 2 Sembawa)<br />\r\n			Juara III (SMP N 1 Talang Kelapa)</p>\r\n\r\n			<p><strong>&nbsp;SMA</strong></p>\r\n\r\n			<p>Juara I (SMK N 1 BA III)<br />\r\n			Juara II (SMK-PP N Sembawa)<br />\r\n			Juara III (SMA N 1 BA III)<br />\r\n			Juara IV (SMA N 5 Palembang)</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>2.</p>\r\n			</td>\r\n			<td>\r\n			<p>Bola Voli</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>SMA (Putra)</strong></p>\r\n\r\n			<ol>\r\n				<li>SMA N 1 Sembawa</li>\r\n				<li>SMK B1 3 PLG</li>\r\n				<li>SMA N 1 Talang Kelapa</li>\r\n			</ol>\r\n\r\n			<p><strong>SMA (Putri)</strong></p>\r\n\r\n			<ol>\r\n				<li>SMA N 1 Talang Kelapa</li>\r\n				<li>MAN PABA</li>\r\n				<li>SMA N 3 BA III</li>\r\n			</ol>\r\n\r\n			<p><strong>SMP (Putra)</strong></p>\r\n\r\n			<ol>\r\n				<li>SMP N 1 Sembawa</li>\r\n				<li>SMP TBM 7 Mangga Raya Tanjung Lago</li>\r\n				<li>SMP N 2 BA III</li>\r\n			</ol>\r\n\r\n			<p><strong>SMP (Putri)</strong></p>\r\n\r\n			<ol>\r\n				<li>SMPN 1 Sembawa</li>\r\n				<li>MTs. MU</li>\r\n				<li>SMP N 1 Talang Kelapa</li>\r\n			</ol>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>3.</p>\r\n			</td>\r\n			<td>\r\n			<p>Futsal</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>SMP</strong></p>\r\n\r\n			<ol>\r\n				<li>SMP N 2 Sembawa</li>\r\n				<li>SMP N 1 Sembawa</li>\r\n				<li>SMPN 1 Talang Kelapa</li>\r\n				<li>SMPN 1 Talang Kelapa</li>\r\n			</ol>\r\n\r\n			<p><strong>SMA</strong></p>\r\n\r\n			<ol>\r\n				<li>SMA PLUS N2 BA III</li>\r\n				<li>SMK-PPN Sembawa</li>\r\n				<li>SMA N 2 Sembawa</li>\r\n				<li>SMA N 1 Talang Kelapa</li>\r\n			</ol>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>4.</p>\r\n			</td>\r\n			<td>\r\n			<p>Basket</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>SMP (Putra)</strong></p>\r\n\r\n			<ol>\r\n				<li>SMP&nbsp; 1 Banyuasin III</li>\r\n				<li>SMP&nbsp; 1 Banyuasin III</li>\r\n				<li>SMP 2 Sembawa</li>\r\n				<li>SMP 2 Sembawa</li>\r\n			</ol>\r\n\r\n			<p><strong>SMP (Putri)</strong></p>\r\n\r\n			<ol>\r\n				<li>SMP 1 Banyuasin III</li>\r\n				<li>SMP 2 Sembawa</li>\r\n				<li>SMP Sembawa</li>\r\n				<li>SMP 1 Banyuasin III</li>\r\n			</ol>\r\n\r\n			<p><strong>SMA (Putra)</strong></p>\r\n\r\n			<ol>\r\n				<li>SMA N 3 Banyuasin III</li>\r\n				<li>SMAN 2 Sembawa</li>\r\n				<li>MAN PABA</li>\r\n				<li>SMAN 1 Talang Kelapa</li>\r\n			</ol>\r\n\r\n			<p><strong>SMA (Putri)</strong></p>\r\n\r\n			<ol>\r\n				<li>Sman 3 Banyuasin III</li>\r\n				<li>MAN PABA</li>\r\n				<li>SMAN 1 Banyuasin III</li>\r\n				<li>SMK PPN Sembawa</li>\r\n			</ol>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>5.</p>\r\n			</td>\r\n			<td>\r\n			<p>Seni Tari</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>SENI TUNGGAL PUTRA</strong></p>\r\n\r\n			<ul>\r\n				<li>Adela Destrianti (SMP N 1 SEMBAWA)</li>\r\n				<li>Anggun R ( SMP 1 Tungkal Ilir )</li>\r\n			</ul>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>SENI TUNGGAL PUTRA</strong></p>\r\n\r\n			<ul>\r\n				<li>M. Fadli (SMP N1 Sembawa)</li>\r\n				<li>Ikmi (SMP N 1 Talang Kelapa)</li>\r\n			</ul>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>TARI DAERAH</strong></p>\r\n\r\n			<p>Juara Pertama : SMPN 1 BA III</p>\r\n\r\n			<p>Juara Kedua : SMP N II Sembawa</p>\r\n\r\n			<p>Juara Ketiga : SMA Muhamadiyah 06 Plg</p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>6.</p>\r\n			</td>\r\n			<td>\r\n			<p>Pencak Silat</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Finger Putra</strong></p>\r\n\r\n			<p><strong>Kelas A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</strong></p>\r\n\r\n			<ol>\r\n				<li>Zakaria (SMP 3 Talang Kelapa)</li>\r\n				<li>Ade Rizki (SMP PURI)</li>\r\n				<li>Hanip ( SMP N 1 PABA)</li>\r\n			</ol>\r\n\r\n			<p><strong>Kelas B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</strong></p>\r\n\r\n			<ol>\r\n				<li>M. Ilham (SMP 4 Talang Kelapa)</li>\r\n				<li>Iksan ( SMP PURI)</li>\r\n				<li>Bima (SMP 1 PABA)</li>\r\n			</ol>\r\n\r\n			<p><strong>Kelas C &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</strong></p>\r\n\r\n			<ol>\r\n				<li>Angga (SMP 1 PABA)</li>\r\n				<li>Ikmi (SMP 41 Talang Kelapa)</li>\r\n				<li>Agung (SMP Mandiri)</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>Finghter Putri</strong></p>\r\n\r\n			<p><strong>Kelas A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</strong></p>\r\n\r\n			<ol>\r\n				<li>Najwa (SMP N 41 Talang Kelapa)</li>\r\n				<li>Anggi Nadiya (SMP N 3 Talang Kelapa )</li>\r\n				<li>Adelia (SMP N 1 PABA)</li>\r\n			</ol>\r\n\r\n			<p><strong>Kelas B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</strong></p>\r\n\r\n			<ol>\r\n				<li>Hamiyah (MTs Daruhikmah)</li>\r\n				<li>Jean (SMP 41 Talang Kelapa)</li>\r\n				<li>Sonia (SMP 3 Talang Kelapa)</li>\r\n			</ol>\r\n\r\n			<p><strong>Kelas C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</strong></p>\r\n\r\n			<ol>\r\n				<li>Anggun (SMP Mandiri)</li>\r\n				<li>Fitria (SMP 3 Talang Kelapa)</li>\r\n				<li>Juliani (SMP 11 Palembang)</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>7.</p>\r\n			</td>\r\n			<td>\r\n			<p>English Competition</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>SPEECH</strong></p>\r\n\r\n			<p>&nbsp;Juara I&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Nurul Umita (SMP N 1 Sembawa)<br />\r\n			Juara II : M. Thomi Arjhan (SMP LTI IGM, Plg)<br />\r\n			Juara III : &nbsp;Naswa Salsabila (SMP N 1 Sembawa)</p>\r\n\r\n			<p><strong>STORY TELLING</strong></p>\r\n\r\n			<p>Juara I : Orin Riesha W (SMP IGM)<br />\r\n			Juara II : Atika (SMP N 1 Sembawa)<br />\r\n			Juara III : Tia Ashifa Maharani (SMP IGM)</p>\r\n\r\n			<p><strong>BE NUMBER ONE</strong></p>\r\n\r\n			<ol>\r\n				<li>M. Thomi Ashan (SMP LTI IGM, Plg)</li>\r\n				<li>Lathifa Hasna Ariqoh (SMP N2 Sembawa)</li>\r\n				<li>Feby Setia Ningsih (SMP N1 Sembawa)</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>8</p>\r\n			</td>\r\n			<td>\r\n			<p>Pengibaran Bendera</p>\r\n			</td>\r\n			<td>\r\n			<p>Juara I&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : SMK SUTA</p>\r\n\r\n			<p>Juara II&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : SMA PLUS N2 BA III</p>\r\n\r\n			<p>Juara III&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : SMA 1 T.K</p>\r\n\r\n			<p>Juara IV&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : SMA N 1 Sembawa</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>Komandan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : SMA PLUS N2 BA III<br />\r\n			Baki Terbaik&nbsp;&nbsp;&nbsp; : SMA N 1 BA III</p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>9</p>\r\n			</td>\r\n			<td>\r\n			<p>MTQ</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>SMP / MTs</strong></p>\r\n\r\n			<ol>\r\n				<li>Ahmad Nazar Fakri&nbsp; (MTS Darul Muttaqin)</li>\r\n				<li>Muhammad Sebastian (SMPN 1 Sembawa)</li>\r\n				<li>Ivan (SMP Muhammadiyah PABA)\\</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>SMA/SMK</strong></p>\r\n\r\n			<ol>\r\n				<li>Andre Brilian Hidayatullah (SMA PLUS N 2 BA III)</li>\r\n				<li>Rifatul Fadhilah (SMA PLUS N2 BA III)</li>\r\n				<li>Jodi Jordan (SMA N 1 Sembawa)</li>\r\n			</ol>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '2018-03-25 14:43:39', 1, 'Jadwal', 0, '41cf5dbf55ff62d38aa5461b0a42033e.jpg', 1, 'Administrator', 0, 'smk-pp-negeri-sembawa-bagikan-ratusan-piala pekan-lomba.html', 0),
(34, 'UJI KOMPETENSI KEAHLIAN SMK PP NEGERI SEMBAWA TAHUN 2017', '<p>Uji Kompetensi Kejuruan (UKK) adalah salah satu rangkaian kegiatan ujian yang harus dikuti oleh siswa SMK kelas XII sebagai salah satu syarat kelulusan. Pada tanggal 22 Februari 2017, diadakan UKK di SMK PP Negeri untuk 2 (dua) Paket Keahlian yaitu Agribisnis Tanaman Perkebunan (ATP) dan Agribisnis Tanaman Pangan dan Hortikultura (ATPH). Sebelumnya, dilaksanakan kegiatan coaching untuk ATPH tanggal 15 Februari 2017 dan ATP tanggal 16 Februari 2017. Pelaksanaan UKK di SMK PP Negeri Sembawa bekerjasama dengan Dunia Usaha Dunia Industri (DUDI) yang sesuai dengan kompetensi keahlian di sekolah. Untuk ATP bekerjasama dengan Balai Penelitian Sembawa dan ATPH bekerjasama dengan Balai Penelitian dan Pengembangan Provinsi Sumatera Selatan. Tujuan pelaksanaan UKK adalah 1) mengukur pencapaian kompetensi siswa SMK yang telah menyelesaikan proses pembelajaran sesuai kompetensi keahlian yang ditempuh; 2) Memfasilitasi siswa SMK yang akan menyelesaikan pendidikannya untuk mendapatkan sertifikat kompetensi; 3) Mengoptimalkan pelaksanaan sertifikasi kompetensi yang berorientasi pada capaian kompetensi lulusan SMK sesuai kerangka kualifikasi nasional dan 4) Memfasilitasi kerjasama SMK dengan dunia usaha/industri dalam rangka pelaksanaan Uji Kompetensi sesuai kebutuhan dunia usaha dan dunia industri (DUDI) Materi UKK untuk Paket Keahlian Agribisnis Tanaman Perkebunan (ATP) adalah penanaman tanaman perkebunan berupa tanaman karet, sedangkan untuk Agribisnis Tanaman Pangan Hortikultura (ATPH) tentang penanaman bawang merah mulai dari pengujian daya kecambah, persiapan lahan penanaman bawang merah serta penanaman umbi bawang merah.</p>\r\n', '2018-03-25 14:43:39', 1, 'Jadwal', 1, '72146eae6cbc18c5644b074342809e5f.jpg', 1, 'Administrator', 0, 'uji-kompetensi-keahlian-smk-pp-negeri-sembawa-tahun-2017.html', 0),
(35, 'Pengukuhan Lulusan SMK Pertanian Pembangunan Negeri Sembawa Tahun Pembelajaran 2016/2017', '<p>Selasa, 09 Mei 2017 diselenggarakan pengukuhan lulusan SMK Pertanian Pembangunan Negeri Sembawa. Acara tersebut dihadiri Wakil Bupati Banyuasin selaku PLT Bupati Banyuasin (bapak Ir. S. A. Supriono, MM), Kepala Pusat Pendidikan Pertanian yang diwakili Kepala Bidang Kelembagaan dan Ketenagaan (bapak Dr. Ir. Teddy Rahmat Mulyadi, MM), Anggota DPRD Kabupaten Banyuasin, Kepala Dinas dan Instansi Lingkup Pemerintahan Kabupaten Banyuasin, Kepala Dinas dan Instansi Lingkup Pemerintah Provinsi Sumatera Selatan, Bapak/Ibu Undangan baik dari Dunia usaha/Industri, Aparat pemerintah, Tokoh Masyarakat, Sejawat kami pengelola Satuan Pendidikan, dan keluarga besar SMK Pertanian Pembangunan Negeri Sembawa, Para Orang Tua serta lulusan &nbsp;SMK-PP Negeri Sembawa</p>\r\n\r\n<p>Pada kata sambutannya Kepala SMK Pertanian Pembangunan Negeri Sembawa Ir. Mattobi&rsquo;i,M.P. Para lulusan ini berasal dari dua program studi yaitu Program Studi Agribisnis&nbsp; Tanaman Pangan dan Hortikultura dan Program Studi Agribisnis Tanaman Perkebunan. Dari pengikut ujian sebanyak 152 orang yang terdiri dari 59 PS Agribisnis Tanaman Pangan dan Hortikultura dan 93 orang dari PS Agribisnis Tanaman Perkebunan, alhamdulillah 152 orang peserta ujian tersebut dinyatakan&nbsp;<strong>lulus semua.</strong>Selanjutnya kami laporkan bahwa para lulusan tersebut telah kami salurkan untuk bekerja diantaranya di PT Cipta Futura sebanyak 13 orang dan&nbsp; PT PNS 7 orang Untuk yang melanjutkan ke perguruan tinggi : ada 2 orang lulusan yang diterima di Unsri. Kepada bapak/ibu orang tua siswa yang hari ini mendampingi para lulusan, kami menyampaikan selamat atas keberhasilan putra putrinya, dan kami menyampaikan terima kasih atas kepercayaannya menitipkan putra putrinya sekolah di tempat ini. sedangkan dalam sambutannya Kepala Bidang Kelembagaan dan Ketenagaan, Pusdiktan Dr. Ir. Teddy Rahmat Mulyadi, M.M. menyampaikan bahwa Arah Pembangunan pertanian pada periode 2015 &ndash; 2019 adalah menciptakan pertanian Indonesia yang bermartabat, mandiri, maju, adil dan makmur.Guna mencapai arah pembangunan pertanian tersebut, KementerianPertanian telah menetapkan Rencana Strategis (Renstra) Kementerian Pertanian Periode 2015-2019. Dalam Renstra tersebut, telah ditetapkan Visi Pembangunan Pertanian 2015-2019 yaitu &ldquo;Terwujudnya Kedaulatan Pangan dan Kesejahteraan Petani&rdquo;.Konsekuensi logis dari hal tersebut adalah petani masa depan harus &nbsp;terdidik, terampil, tanggap, inovatif dan berdaya saing. Hal itu berarti kita harus menyiapkan SDM &nbsp;dari sekarang, diantaranya adalah&nbsp;<strong>adik-adik yang diwisuda pada hari ini&nbsp;</strong>dan mereka yangpada saat ini sedang mengikuti pendidikan di SMK-PP. Mereka memiliki peran yang strategis pada masa tersebut. Oleh karena itu, mereka perlu dibekali kemampuan yang dapat mengikuti perkembangan sosial ekonomi pertanian yang cepat berubah, Dalam kegiatan tersebut juga diberikan penghargaan kepada Lulusan Terbaik untuk program keahlian Tanaman Pangan dan Hortikultura (ATPH) dan Perkebunan (ATP). sebagai bentuk keterikatan sebagai keluarga besar, maka dibacakan Ikrar Alumni yang dipimpin oleh Sekretaris IKA SPP Sembawa (Ir. Karlisun, MM) dan diikuti oleh seluruh alumni</p>\r\n', '2018-03-25 14:47:51', 1, 'Jadwal', 1, '1edac9a49045554f8bb4dbce9a4a2cbc.jpg', 1, 'Administrator', 0, 'pengukuhan-lulusan-smk-pertanian-pembangunan-negeri-sembawa-tahun-pembelajaran-2016-2017.html', 0),
(36, 'Praktik Kerja Lapangan (PKL) SMK PP Negeri Sembawa 2017', '<p>SMK Pertanian Pembangunan Negeri (SMK-PPN) Sembawa melaksanakan PKL dari tanggal 23 Januari-1 April 2017. PKL di SMK merupakan bagian dari program pembelajaran yang harus diikuti setiap peserta didik. Sehubungan dengan hal itu,&nbsp;&nbsp; SMK-PPN Sembawa melaksanakan&nbsp; kegiatan PKL yang diikuti oleh seluruh peserta didik kelas XI. Kegiatan PKL ini bertujuan untuk memperdalam pengetahuan dan ketrampilan peserta didik dalam bidang keahlian/kompetensinya, melatih peserta didik dalam melaksanakan analisa usaha dan melatih kemampuan bersosialisasi di masyarakat.</p>\r\n\r\n<p>Pada proses penyelenggaraan PKL tahun ajaran 2016-2017, SMK-PPN Sembawa bekerja sama dengan 10 (sepuluh) Dunia Usaha/Industri sebagai tempat pelaksanaan kegiatan ini. Adapun Dunia Usaha/Industri yang terlibat dalam kegiatan ini antara lain;&nbsp;<strong>Balai Penelitian Sembawa</strong>&nbsp;untuk peserta didik paket keahlian Agribisnis Tanaman Perkebunan (ATP),&nbsp;<strong>PTPN 7 Unit Musi Landas</strong>&nbsp;untuk peserta didik paket keahlian ATP,&nbsp;<strong>PTPN 7 Unit Pagaralam&nbsp;</strong>&nbsp;untuk peserta didik paket keahlian ATP dan Teknologi Pengolahan Hasil Pertanian (TPHP) ,<strong>PTPN 7 Bekri Lampung</strong>&nbsp;untuk peserta didik paket keahlian ATP,&nbsp;<strong>PTPN 7 Unit Betung</strong>&nbsp;untuk peserta didik paket keahlian ATP dan TPHP,&nbsp;<strong>PT. WPG Musi Banyuasin&nbsp;</strong>untuk peserta didik jurusan TPHP. Sedangkan untuk &nbsp;peserta didik paket keahlian Agribisnis Ternak Unggas (ATU) dilaksanakan di&nbsp;<strong>BPTU-HPT Sembawa</strong>. Dunia Usaha untuk peserta didik paket keahlian Agribisnis Tanaman Pangan dan Hortikultura (ATPH) bekerja sama dengan BP3K yang ada di&nbsp;<strong>Desa Karang Jaya Kab. Rejang Lebong, Bengkulu &nbsp;(BP3K CURUP) dan Desa Sumber Harta , Kab. Musi Rawas (BP3K MUSI RAWAS).</strong></p>\r\n\r\n<p>Pada akhir kegiatan ini peserta didik diharuskan membuat laporan hasil kegiatan selama PKL. Selanjutnya, peserta didik menjalani uji kompetensi oleh pembimbing eksternal yang ada di lokasi PKL masing-masing. Setelah kembali ke sekolah peserta didik menjalani ujian lisan oleh pembimbing internal yang ada di SMK-PPN Sembawa sesuai jadwal yang telah ditetapkan. Tujuan dari ujian tersebut &nbsp;adalah untuk mengetahui dan mengukur tingkat pemahaman dan ketrampilan peserta didik terhadap substansi kompetensi yang didapatkan selama PKL.</p>\r\n', '2018-03-25 14:47:51', 1, 'Jadwal', 2, '5c3c9fa02711f58f0fcf3bacdfa77e44.jpg', 1, 'Administrator', 0, 'praktik-kerja-lapangan-pkl-smk-pp-negeri-sembawa-2017.html', 0),
(37, 'Kunjungan Edukasi SD Methodist 2 Palembang', '<p>Pada hari kamis tanggal 2 Maret 2017 sebanyak 39 siswa SD Methodist 2 Palembang beserta 8 guru melaksanakan kunjungan ke SMK PP Negeri Sembawa dalam rangka&nbsp;<em>field trip</em>&nbsp;(kunjungan lapangan) sebagai upaya untuk menambah wawasan anak anak Sekolah Dasar dalam bidang pertanian secara umum.</p>\r\n\r\n<p>Narasumber terdiri dari tenaga pendidik dan tenaga kependidikan SMK PP Negeri Sembawa yang berjumlah 14 orang. Dalam kegiatan&nbsp;<em>field trip</em>&nbsp;siswa menambah wawasan dalam bidang pertanian seperti tanaman sayuran, tanaman buah-buahan, tanaman hias dan tanaman perkebunan serta aneka ternak yang ada di SMK PP Negeri Sembawa.</p>\r\n\r\n<p>Kegiatan ini diharapkan dapat meningkatkan rasa peduli siswa terhadap lingkungan sejak dini serta dapat menambah wawasan siswa dalam bidang pertanian. (humas)</p>\r\n', '2018-03-25 15:12:45', 2, 'Kampusku', 0, 'b8205cfbfa0d8be6e31f778f45670803.jpg', 1, 'Administrator', 0, 'kunjungan-edukasi-sd-methodist-2-palembang.html', 0),
(38, 'Rekrutmen PT Pratama Nusantara Sakti di SMK PP Negeri Sembawa', '<p>Pada tanggal 4 April 2017, PT Pratama Nusantara Sakti melakukan rekrutmen karyawan di SMK PP Negeri Sembawa. PT. Pratama Nusantara Sakti (PT. PNS) merupakan perusahaan gabungan dari 3 group perusahaan besar yang ada di Indonesia, yaitu Djarum Group, Wings Group, dan Central Proteina Prima. Perusahaan ini bergerak di bidang perkebunan tebu yang berlokasi di OKI, Sumatera Selatan. Visi yang ingin dicapai dari Pratama Nusantara Sakti adalah untuk menjadikan perusahaan ini sebagai perusahaan gula dataran rendah dan atau rawa pertama dan terbesar di Indonesia yang menjadi prioritas untuk membantu pemerintah dalam mewujudkan swasembada gula. Kegiatan rekrutmen ini dilakukan untuk menjaring peserta didik terbaik kelas XII prodi Perkebunan dan Pertanian untuk dapat berkarir di PT PNS setelah lulus nantinya. Kegiatan ini diikuti oleh 45 siswa kelas XII dan alumni. Serangkaian kegiatan yang dilakukan antara lain presentasi profil perusahaan yang dilanjutkan dengan tes psikotes. Berikutnya, bagi peserta yang lolos tahapan tersebut masih harus mengikuti tes wawancara dan kesehatan.</p>\r\n', '2018-03-25 15:15:27', 2, 'Kampusku', 1, '7f9c39096ec8a047f36efe05bac15dbf.jpg', 1, 'Administrator', 0, 'rekrutmen-pt-pratama-nusantara-sakti-di-smk-pp-negeri-sembawa.html', 0),
(39, 'SMK PP NEGERI SEMBAWA MEWAKILI PROPINSI SUMATERA SELATAN PADA LOMBA KOMPETENSI SISWA (LKS) SMK TINGKAT NASIONAL TAHUN 2017 DI SOLO, JAWA TENGAH', '<p>SMK PP Negeri Sembawa menjadi salah satu utusan kontingen SMK dari Propinsi Sumatera Selatan dalam kegiatan Lomba Kompetensi Siswa (LKS) yang diadakan di Solo, Jawa Tengah pada tanggal 4 sampai dengan 20 Mei 2017. Pada Kegiatan LKS tahun ini di adakan sebanyak 53 bidang lomba sesuai bidang kompetensi yang ada di SMK seluruh Indonesia, dan di ikuti oleh &nbsp;1.114 siswa SMK dari seluruh provinsi di Indonesia. SMK PP Negeri Sembawa ikut serta mewakili pada bidang lomba Agronomi dengan tema &ldquo;Produksi Benih Tanaman Pangan dan Hortikultura Bersertifikat Berbasis&nbsp;<em>Entrepreneurship</em>&rdquo;.</p>\r\n\r\n<p>Lomba Kompetensi Siswa (LKS) bidang agronomi merupakan kegiatan pengujian (pembuktian) kompetensi siswa SMK pada Program Keahlian Agribisnis&nbsp; Pembenihan Tanaman yang menekankan pada aspek produksi benih dengan mengacu pada makna/definisi benih dalam UU No. 12 tahun 1992; tentang sistem budidaya tanaman, dengan menerapkan metode&nbsp;<em>assesmen</em>&nbsp;praktik dan presentasi dengan suasana arena lomba yang bersifat demonstrative/dapat dilihat oleh khalayak masyarakat umum dan industri, yang meliputi keterampilan dalam : perencanaan dan penentuan faktor resiko usaha tani, seleksi fisik benih,&nbsp;<em>rouging</em>&nbsp;dan vigor kecambah, pengendalian hama dan penyakit tanaman, polinasi, panen, pasca panen, pengemasan benih dan produk pertanian serta&nbsp; melakukan demontrasi&nbsp;<em>continuous imperovement.</em></p>\r\n\r\n<p>Tujuan dari kegiatan ini yaitu meningkatkan apresiasi, membuka wawasan, meningkatkan kemampuan dalam pemahaman kompetensi produksi benih tanaman pangan dan hortikultura bersertifikat dan secara tidak langsung bertujuan untuk mempromosikan keterampilan serta membangun jiwa&nbsp;<em>entrepreneurship</em>&nbsp;siswa SMK dalam hal produksi dan pengujian mutu pada dunia usaha dan industri serta masyarakat pada umumnya.</p>\r\n\r\n<p>Keikut sertaan SMK PP Negeri Sembawa di wakili oleh salah satu siswa kelas XII ATPH 2 yang bernama Uci Sapitri pada bidang lomba agronomi. Keberhasilan menuju lomba tingkat nasional ini adalah berkat keberhasilannya dalam menjuarai kegiatan LKS tingkat Propinsi Sumatera Selatan yang diadakan pada tanggal 2 sampai 5 Nopember 2016 di SMK Negeri Sumsel.&nbsp; Perjuangan SMK PP Sembawa yang diwakili oleh Uci Sapitri hanya memperoleh peringkat ke 6 dari 30 peserta lomba. Namun pencapaian ini&nbsp; dirasakan sudah maksimal mengingat singkatnya waktu yang digunakan untuk persiapan, karena kegiatan lomba ini hampir bersamaan dengan pelaksanaan Ujian Nasional kelas XII.(humas)</p>\r\n', '2018-03-25 15:19:42', 2, 'Kampusku', 1, '1898c69b0d89de4dd1aab6fdb6a19c40.jpg', 1, 'Administrator', 0, 'smk-pp-negeri-sembawa-mewakili-propinsi-sumatera-selatan-pada-lomba-kompetensi-siswa-lks-smk-tingkat-nasional-tahun-2017-di-solo-jawa-tengah.html', 0),
(40, 'SMK PP Negeri Sembawa Raih Adiwiyata tingkat Provinsi Tahun 2017', '<p>&nbsp;Pada hari selasa tanggal 15 Mei 2017 telah dilaksanakan verifikasi oleh Badan Lingkungan Hidup Provinsi Sumatera Selatan sebagai calon sekolah Adiwiyata tingkat propinsi tahun 2017 yang dihadiri oleh ibu Leni Kurniati, M.E dan Bapak Suryadi.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Akhirnya SMK PP Negeri Sembawa meraih Adiwiyata tingkat provinsi tahun 2017 yang diberikan kepada Kepala SMK PP Negeri Sembawa diwakili oleh Kasubag Tata Usaha SMK PP Negeri Sembawa pada tanggal 12 Juli 2017 di GOR Jakabaring Palembang.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Penilaian untuk Adiwiyata tehadap 33 capaian SMK PP Negeri Sembawa dari 4 komponen diantaranya 1) Kebijakan berwawasan lingkungan, 2) Pelaksanaan kurikulum berbasis lingkungan, 3) Kegiatan lingkungan berbasis partisifatif 4) Pengelolaan sarana pendukung ramah lingkungan. Diharapkan SMK PP Negeri Sembawa dapat meningkatkan prestasi untuk dapat meraih Adiwiyata tingkat Nasional ditahun yang akan datang, untuk itu kerja keras civitas akademika harus tetap ditingkatkan. (humas)</p>', '2018-03-25 15:19:42', 2, 'Kampusku', 1, '1dae462c23208dfbb7cbe4f343eef7fc.jpg', 1, 'Administrator', 0, 'smk-pp-negeri-sembawa-raih-adiwiyata-tingkat-provinsi-tahun-2017.html', 0),
(41, 'PERINGATAN TAHUN BARU ISLAM 1439 H', 'b68e0cc3baf700a74a6f481aeff5377b.jpg', '2018-03-25 15:29:59', 3, 'Kegiatan_Mingguan', 0, 'b68e0cc3baf700a74a6f481aeff5377b.jpg', 1, 'Administrator', 0, 'peringata-tahun-baru-islam-1439-h.html', 0),
(42, 'Sosialisasi Wawasan Kebangsaan dan Pencegahan Terorisme di SMK PP Negeri Sembawa', '<p>Pada hari Jum&rsquo;at 6 0ktober 2017 bertempat di aula SMK PP Negeri Sembawa dilaksanakan kegiatan Sosialisasi Wawasan Kebangsaan&nbsp; dan Pencegahan Terorisme oleh Yon Zikon /KJ yang diikuti oleh kurang lebih 400 siswa tingkat XI dan XII. Berkesempatan hadir Wakil Komandan Batalion Mayor CZI Sunandar Parius Sudarmono, pemateri Yon Zikon / KJ Lettu CZI Asep Kurnia (Pasi Intel). Kepala SMK PP Negeri&nbsp; Sembawa Ir. Mattobi&rsquo;i, MP mengatakan kegiatan ini merupakan program dari kementerian pertanian dimana UPT dibawah naungan Kementan dapat melakukan sosialisasi wawasan kebangsaan, pencegahan terorisme dan pengaruh radikalisme, harapannya dengan kegiatan ini dapat menambah rasa nasionalisme siswa SMK PP N Sembawa. Wakil Komandan Batalion Mayor CZI Sunandar Parius Sudarmano memberikan motivasi kepada siswa SMK PP Negeri Sembawa yang ingin berkarier di TNI agar mempersiapkan diri dengan latihan dan belajar yang rajin. Materi disampaikan oleh Lettu CZI Asep Kurnia kurang lebih selama dua jam mengenai pencegahan terorosme, wawasan kebangsaan dan anti radikalisme. Selain itu dijelaskan tentang toleransi sesama warga negara Indonesia dan pentingnya menjaga Kesatuan Negara Kesatuan Republik Indonesia tercinta ini. (Humas)</p>\r\n', '2018-03-25 15:33:44', 3, 'Kegiatan_Mingguan', 1, 'e6725f11e8eb0a6749b6bf11392731fb.jpg', 1, 'Administrator', 0, 'sosialisasi-wawasan-kebangsaan-dan-pencegahan-terorisme-di-smk-pp-negeri-sembawa.html', 0),
(43, 'CAPAIAN PRESTASI SMK PP NEGERI SEMBAWA DALAM ACARA DIES NATALIS FAKULTAS PERTANIAN UNIVERSITAS SRIWIJAYA', '<p>Keikutsertaan SMK PP N SEMBAWA dalam DIES NATALIS FAKULTAS PERTANIAN UNIVERSITAS SRIWIJAYA ini dilaksankan pada hari Rabu, 20 september 2017 di fakultas pertanian Universitas sriwijawa, Indralaya, Kabupaten Ogan Ilir , Sumatera Selatan. Kegiatan itu meliputi beberapa lomba yaitu:</p>\r\n\r\n<ol>\r\n	<li>Lomba cepat tepat</li>\r\n	<li>Lomba poster</li>\r\n	<li>Story telling bahasa inggris</li>\r\n	<li>Fotografi pertanian</li>\r\n</ol>\r\n\r\n<p>Tujuan dari diadakannya acara tersebut adalah untuk memperingati hari jadi unsri yang ke 54 dan juga bertujuan untuk mengembangkan minat dan bakat peserta didik dalam bidang pertanian melihat kebutuhan akan pangan di dunia semakin meningkat, maka dari itu UNIVERSITAS SRIWIJAYA juga ingin ikut berperan aktif dalam hal pemajuan sektor pertanian di Indonesia, mengingat bahwa Indonesia merupakan Negara agraris yang memiliki potensi yang jika dikembangkan dengan baik dapat menguntungkan Negara Indonesia dan Negara Indonesia sudah siap untuk bersaing dalam hal penyediaan pangan dunia.</p>\r\n\r\n<p>Adapun beberapa yang dapat ditorehkan siswa SMK PP NEGERI SEMBAWA adalah:</p>\r\n\r\n<ol>\r\n	<li>Juara I lomba cepat tepat atas nama AJI SUPRANOTO, M. RAVI AL QIFARY, SIYAM TRIYANI</li>\r\n	<li>Juara III lomba poster pertanian atas nama PIANTO RAMADHAN, ZULMY JUNIAWIDOSARI</li>\r\n	<li>Juara harapan I lomba cepat tepat atas nama AVIAD REZQIANO, RIYAN KUSUMA, ZERIKA REGINA</li>\r\n	<li>Juara harapan II lomba poster pertanian atas nama ARDIANSYAH, ASEP JUNAIDI</li>\r\n</ol>\r\n\r\n<p>Dari pencapaian siswa SMK PP N SEMBAWA tersebut sejumlah hadiah dan penghargaantelah diraih oleh siswa SMK PP N SEMBAWA yang menjadi pemenang dalam ajang lomba tersebut. Adapun hadiah tersebut adalah sebagai berikut :</p>\r\n\r\n<ul>\r\n	<li>Juara I lomba cepat tepat mendapatkan piala, piagam penghargaan,&nbsp; tabungan dari bank jabar Banten dan uang Pembina dari pihak UNIVERSITAS SRIWIJAYA sendiri.</li>\r\n	<li>Juara III lomba poster pertanian mendapatkan piala, piagam penghargaan, dan uang pembinaan.</li>\r\n	<li>Juara harapan I lomba cepat tepat mendapatkan piala, piagam penghargaan, dan uang pembinaan.</li>\r\n	<li>Juara harapan III lomba poster pertanian mendapatkan piala, piagam penghargaan, dan uang pembinaan.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Puncak acara DIES NATALIS FAKULTAS PERTANIAN UNIVERSITAS SRIWIJAYA diadakan di unsri bukit, Palembang, sumatera selatan. Acara tersebut dilaksanakan dengan sangat meriah dengan dihadirinya rektor unsri, dekan fakultas pertanian unsri, wakil dekan, dan juga perwakilan dari kementrian pertanian RI yang pada saat itu dihadiri oleh kepala dinas pertanian provinsi sumatera selatan. Acara ini berlangsung dengan bahagia karena pada saat itu juga hadir para alumni UNIVERSITAS SRIWIJAYA yang ikut memeriahkan acara tersebut dengan menyumbangkan hadiah yang dapat diperoleh semua orang yang hadir pada acara tersebut. Jumlah total hadiah yang diberikan mencapai lebih dari 100 unit hadiah dengan door prize kulkas, mesin cuci dan masih banyak yang lainya.</p>\r\n\r\n<p>semoga apa yang telah dicapai oleh para siswa dapat dipertahankan dan menjadi motivasi bagi siswa-siswi lainnya demi membentuk manusia pertanian yang kreatif, berjiwa wirausaha, dan mandiri supaya dapat mencapai Indonesia yang maju, mandiri, dan sejahtera.</p>\r\n', '2018-03-25 15:33:44', 3, 'Kegiatan_Mingguan', 1, 'c095234fc7aeece33dc87cf02801ea91.jpg', 1, 'Administrator', 0, 'capaian-prestasi-smk-pp-negeri-sembawa-dalam-acara-dies-natalis-fakultas-pertanian-universitas-sriwijaya.html', 0),
(44, 'STUDI BANDING PEGAWAI SMK PP NEGERI SEMBAWA KE POLITANI PAYAKUMBUH', '<p>Pada tanggal 20-24 September 2017, pegawai SMK PP Negeri Sembawa berkesempatan untuk mengunjungi Politeknik Pertanian Negeri Payakumbuh dalam rangka menambah wawasan dan pengetahuan untuk mewujudkan program-program prioritas yang sudah di canangkan oleh SMK PP Negeri Sembawa untuk kedepannya menjadi Politeknik Pertanian Pembangunan (Polbangtan).</p>\r\n\r\n<p>Untuk meningkatkan pengetahuan dan keterampilan Tenaga Kependidikan dalam pelayanan maka ada beberapa bidang yang dipelajari di POLITANI Payakumbuh seperti kegiatan Kepegawaian, akademik,&nbsp; kemahasiswaan, Perpustakaan, Praktik lapangan.</p>\r\n\r\n<p>Kegiatan seperti ini tentunya sangat bagus bagi perkembangan suatu kebutuhan yang diharapkan sebagaimana mestinya. Dalam kegiatan ini, Pegawai SMK PP Negeri Sembawa langsung disambut oleh Wakil Direktur I&nbsp; dan para beberapa civitas academica POLTANI Payakumbuh. Pengetahuan-pengetahuan postif dari POLITANI Payakumbuh dapat dicontoh kedepannya dalam Pembentukan POLBANGTAN Sembawa. (Humas)</p>\r\n', '2018-03-25 15:36:24', 3, 'Kegiatan_Mingguan', 1, '739189eee692ca0f53392070b1e4ca46.jpg', 1, 'Administrator', 0, 'studi-banding-pegawai-smk-pp-negeri-sembawa-ke-politani-payakumbuh.html', 0);
INSERT INTO `tbl_tulisan` (`tulisan_id`, `tulisan_judul`, `tulisan_isi`, `tulisan_tanggal`, `tulisan_kategori_id`, `tulisan_kategori_nama`, `tulisan_views`, `tulisan_gambar`, `tulisan_pengguna_id`, `tulisan_author`, `tulisan_img_slider`, `tulisan_slug`, `tulisan_rating`) VALUES
(45, 'Panen Jagung di Desa Banyu Urip Kerja sama Desa Mitra SMK PP Negeri Sembawa', '<p>SMK PP Negeri sembawa sebagai salah satu UPT Badan Penyuluhan Pengembangan Sumber Daya manusia Pertanian mendukung program kementerian pertanian &nbsp;dalam rangka ketahanan pangan dengan salah satu programnya adalah Pengembangan Desa Mitra sebagai upaya regenerasi petani. SMK PP Negeri Sembawa memiliki lima kelompok tani binaan dalam program Desa Mitra tahun 2017, salah satunya adalah Kelompok tani Sumber Jaya yang terletak di Desa Banyu Urip Kecamatan Tanjung Lago, Kabupaten Banyuasin.</p>\r\n\r\n<p>Salah satu kegiatan yang dilakukan di kelompok tani Sumber Jaya adalah&nbsp; budidaya tanaman jagung varietas BISI 18 yang dilaksanakan setelah panen padi. Hal ini dikarenakan Desa Banyu Urip adalah daerah pasang surut sehingga memungkinkan untuk melakukan budidaya tanaman jagung pada musim kemarau. Setiap anggota kelompok tani rata-rata memiliki luas lahan 2 hektar pada budidaya jagung ini, kegiatan budidaya ini sendiri dimulai pada bulan Juni 2017. Proses yang dilakukan &nbsp;pada budidaya jagung di kelompok tani Sumber Jaya dalah &nbsp;penyiapan lahan, penanaman benih jagung, pemupukan, pemeliharaan, pemberantasan hama dan penyakit tanaman, panen dan pasca panen.</p>\r\n\r\n<p>Sebagai Tindak lanjut kerjasama desa mitra pada tanggal 16 September 2017, dari pukul 08.00 WIB - 13.00 WIB dilaksanakan praktik siswa SMK PP Negeri Sembawa , sebanyak 59 siswa SMK PP Negeri Sembawa tingkat XI melaksanakan panen Jagung di Kelompok Tani Sumber Jaya, Hal ini bertujuan untuk menambah pengetahuan siswa SMK PP Negeri SMK PP Negeri Sembawa tentang budidaya tanaman jagung, membandingkan pengetahuan yang didapat di sekolah dan dunia nyata.</p>\r\n\r\n<p>Panen jagung di kelompok tani Sumber Jaya dilaksanakan dengan konvensional mesin pipil dan menggunakan teknologi corn combine harvester. Pada kesempatan ini, siswa SMK PP Negeri Sembawa melihat dan melaksanakan panen dengan kedua cara ini. Serta menganalisa usaha tani pada proses panen pada kelompok tani Sumber Jaya dengan perbandingan 1 : 1,4 untuk panen dengan konvensional mesin pipil berbanding dengan menggunakan alat corn combine harvester. Modernisasi pertanian berupa penggunaan alat-alat mesin pertanian di era sekarang ini sudah tidak terelakan lagi. Selain bertujuan untuk melakukan efisiensi didalam pembiayaan usaha tani, juga sebagai jawaban atas kelangkaan tenaga kerja pertanian. Penggunaan alat upaya menekan susut hasil (<em>losses</em>), mempertahankan kualitas hasil serta meningkatkan nilai tambah dan daya saing, yang pada akhirnya akan meningkatan pendapatan petani, sehingga bisa mengurangi angka kemiskinan</p>\r\n\r\n<p>Ketua Kelompok Tani Sumber jaya bapak Pariyem mengatakan, saat ini sudah banyak pemuda-pemuda di Desa Banyu Urip yang berminat di dunia pertanian, dunia pertanian sekarang bisa dikatakan dapat mensejahterakan serta dengan bantuan teknologi pertanian dapat mempermudah dan mengefiensikan waktu dan tenaga. Untuk pemasaran hasil panen jagung kelompok tani Sumber Jaya sudah bekerja sama dengan pemborong secara kolektif.</p>\r\n\r\n<p>Ketua Pelaksana kegiatan Pengembangan Desa Mitra Dr. Zulkipli, M.Si mengharapkan dengan kegiatan desa mitra ini dapat menjawab kegalauan menteri pertanian yang menyatakan bahwa sekarang ini banyak anak muda tidak mau jadi petani, dengan melihat bahwa petani bisa sejahtera dan sukses diharapkan banyak anak muda yang mau jadi petani.</p>\r\n', '2018-03-25 15:44:34', 5, 'Kerja_Sama', 0, 'aae2c84d5a66b9fd663fc3c5c93e3bc3.png', 1, 'Administrator', 0, 'panen-jagung-di-desa-banyu-uri-kerja-sama-desa-mitra-smk-pp-negeri-sembawa.html', 0),
(46, 'LOWONGAN KERJA PT PNS', NULL, '2018-03-25 15:44:34', 7, 'Pengumuman', 2, '385cc49d1ab13746a540aec8687fedaf (1).jpg', 1, 'Administrator', 0, 'lowongan-kerja-pt-pns.html', 0),
(47, 'RECRUITMENT PT SEBANGUN BUMI ANDALAS (SBA)', '<p>Informasi untuk alumni SMK-PPN SEMBAWA, bahwa PT SEBANGUN BUMI ANDALAS (SBA) yang bergerak di bidang Hutan Tanaman Industri akan melakukan perekrutan calon karyawan. sehubungan dengan hal itu, kami mengajak alumni khususnya pria untuk bergabung mengikuti pelaksanaan recruitment tersebut pada: Hari/Tanggal : Senin/21 Agustus 2017 Waktu : 09.00 wib s/d selesai Tempat : SMK- PP Negeri Sembawa Demikian informasi dari pihak humas. semoga dapat membantu para alumni yang sedang mencari pekerjaan. Terima kasih</p>\r\n', '2018-03-25 15:46:23', 7, 'Pengumuman', 2, 'c34ea18d1e8930b177b89bb7ab2ff870.png', 1, 'Administrator', 0, 'recruitment-pt-sebangun-bumi-andalas-sba.html', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE `tbl_video` (
  `video_id` int(11) NOT NULL,
  `video_tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `video_nama` varchar(200) DEFAULT NULL,
  `pengguna_id` int(11) DEFAULT NULL,
  `author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_video`
--

INSERT INTO `tbl_video` (`video_id`, `video_tanggal`, `video_nama`, `pengguna_id`, `author`) VALUES
(4, '2018-03-25 04:48:03', 'https://www.youtube.com/embed/ztiC2YwTqog', 1, 'puji'),
(5, '2018-03-25 04:48:03', 'https://www.youtube.com/embed/w_5pJtymY6I', 1, 'puji');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  ADD PRIMARY KEY (`agenda_id`);

--
-- Indexes for table `tbl_album`
--
ALTER TABLE `tbl_album`
  ADD PRIMARY KEY (`album_id`),
  ADD KEY `album_pengguna_id` (`album_pengguna_id`);

--
-- Indexes for table `tbl_files`
--
ALTER TABLE `tbl_files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`galeri_id`),
  ADD KEY `galeri_album_id` (`galeri_album_id`),
  ADD KEY `galeri_pengguna_id` (`galeri_pengguna_id`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`guru_id`);

--
-- Indexes for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  ADD PRIMARY KEY (`inbox_id`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `tbl_kategori_files`
--
ALTER TABLE `tbl_kategori_files`
  ADD PRIMARY KEY (`kategori_f_id`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`kelas_id`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`komentar_id`),
  ADD KEY `komentar_tulisan_id` (`komentar_tulisan_id`);

--
-- Indexes for table `tbl_log_aktivitas`
--
ALTER TABLE `tbl_log_aktivitas`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `log_pengguna_id` (`log_pengguna_id`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indexes for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  ADD PRIMARY KEY (`pengunjung_id`);

--
-- Indexes for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  ADD PRIMARY KEY (`port_id`);

--
-- Indexes for table `tbl_post_rating`
--
ALTER TABLE `tbl_post_rating`
  ADD PRIMARY KEY (`rate_id`);

--
-- Indexes for table `tbl_post_views`
--
ALTER TABLE `tbl_post_views`
  ADD PRIMARY KEY (`views_id`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`siswa_id`);

--
-- Indexes for table `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  ADD PRIMARY KEY (`tulisan_id`),
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`),
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`);

--
-- Indexes for table `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  MODIFY `agenda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_album`
--
ALTER TABLE `tbl_album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_files`
--
ALTER TABLE `tbl_files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `guru_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  MODIFY `inbox_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_kategori_files`
--
ALTER TABLE `tbl_kategori_files`
  MODIFY `kategori_f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `kelas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `komentar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_log_aktivitas`
--
ALTER TABLE `tbl_log_aktivitas`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  MODIFY `pengunjung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=958;
--
-- AUTO_INCREMENT for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  MODIFY `port_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_post_rating`
--
ALTER TABLE `tbl_post_rating`
  MODIFY `rate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_post_views`
--
ALTER TABLE `tbl_post_views`
  MODIFY `views_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `siswa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `tbl_video`
--
ALTER TABLE `tbl_video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
