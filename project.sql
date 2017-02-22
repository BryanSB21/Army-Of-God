-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 22 Feb 2017 pada 09.24
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` char(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`, `level`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id_news` int(11) NOT NULL AUTO_INCREMENT,
  `Judul` varchar(60) NOT NULL,
  `Isi` longtext NOT NULL,
  `Tanggal` date NOT NULL,
  PRIMARY KEY (`id_news`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_news`, `Judul`, `Isi`, `Tanggal`) VALUES
(4, 'STMIK Kharisma Makassar', '<div><img src="/armyofgod/assets/img/images/logo_color.gif" width="243" height="229"></div>\r\n<div> </div>\r\n<div><strong>STMIK KHARISMA MAKASSAR</strong></div>\r\n<p xss=removed>Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document. To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar. Click Insert and then choose the elements you want from the different galleries. Themes and styles also help keep your document coordinated. When you click Design and choose a new Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your headings change to match the new theme. Save time in Word with new buttons that show up where you need them.</p>\r\n<p xss=removed>To change the way a picture fits in your document, click it and a button for layout options appears next to it. When you work on a table, click where you want to add a row or a column, and then click the plus sign. Reading is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text you want. If you need to stop reading before you reach the end, Word remembers where you left off - even on another device. Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document. To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar.</p>\r\n<p xss=removed>Click Insert and then choose the elements you want from the different galleries. Themes and styles also help keep your document coordinated. When you click Design and choose a new Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your headings change to match the new theme. Save time in Word with new buttons that show up where you need them. To change the way a picture fits in your document, click it and a button for layout options appears next to it. When you work on a table, click where you want to add a row or a column, and then click the plus sign. Reading is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text you want. If you need to stop reading before you reach the end, Word remember00:23:15s where you left off - even on another device.</p>\r\n<p xss=removed> </p>', '2017-02-21'),
(7, 'The Story of Baby Jesus', '<p><img src="../../assets/img/images/jesus-christ-pics-2116.jpg" width="321" height="232"></p>\r\n<p>A long time ago, in the town of Nazareth, lived a young woman named Mary.  Mary did her chores, was kind to others, and loved God very much.  She was engaged to be married to Joseph, who was a carpenter.</p>\r\n<p>One day, while Mary was at home cleaning her room, an angel suddenly appeared.  Before Mary could say anything the angel told Mary that she was favored by God, and that God was with her.</p>\r\n<p>Mary was surprised.  She was trying not to be afraid, but she had never seen an angel before.  After all, Mary was just a regular lady like you or I.  Why was this angel visiting her?  What did the angel want?</p>\r\n<p>The angel quickly tried to reassure Mary. "Do not be afraid!" the angel said.  "God has found favor with you.  You will have a baby boy, and are to give him the name Jesus."</p>\r\n<p>Mary was confused; she was not yet married to Joseph, so how could she have a baby?  The angel thought that this might concern Mary so he said, "The Holy Spirit will perform a miracle, and because of this your baby will be called the Son of God."</p>\r\n<p>To Mary''s surprise, the angel had more exciting news: "Even your cousin Elizabeth is going to have a son in her old age.  Many thought that she couldn''t have children, but she is already pregnant. Nothing is impossible with God."</p>\r\n<p>Mary couldn''t believe what she was hearing; she didn''t know what to say.  She realized that she was trembling, and knelt down.  When she was finally able to speak she said, "I am the Lord''s servant, and I hope everything you have said will come true."</p>\r\n<p>Then the angel disappeared, and Mary was left alone.</p>\r\n<p>Soon after, Joseph found out that Mary was going to have a baby.  Joseph was confused and upset by this, but an angel came to him in a dream and said, "Joseph do not be afraid to take Mary as your wife.  The child Mary is going to have is God''s son, and you are to give him the name Jesus."</p>\r\n<p>When Joseph woke up he remembered what the angel had said.  He knew that everything was okay, and he wasn''t upset anymore.</p>\r\n<p>In those days, the government decided that they should count everyone that lived in that area of the world.  So Joseph had to take Mary to his town of Bethlehem to register.</p>\r\n<p>It took Mary and Joseph a long time to get to Bethlehem.  They didn''t have cars back then, so it probably took them a lot longer to get there.  This was very tiring for Mary because she was soon going to have a baby.</p>\r\n<p>When they reached the town, all the hotels were full and there was nowhere that they could stay.  Finally, someone felt bad for them and offered them a place to stay.</p>\r\n<p>The Bible doesn''t say for sure where they stayed but most people think that they stayed in a small barn where animals were kept.  In any case, doesn''t it seem strange that Jesus, the King of the Jews wasn''t born in a fancy palace or even a hospital?</p>\r\n<p>Mary and Joseph were thankful that they at least had a place to lie down.  It was warm, and there was plenty of straw to lay on.</p>\r\n<p>That night an exciting, wonderful thing happened: Mary and Joseph had a baby!  But this wasn''t just any baby, he was Baby Jesus!  The creator of the whole world, the King of Kings, and the one who would save the world.</p>\r\n<p>The little baby boy fell asleep in Mary''s arms. She wrapped him in cloths and laid him in a manger on some clean straw.</p>\r\n<p>Mary and Joseph soon fell asleep; they were so glad to have this special baby join their family.</p>', '2017-02-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `haritanggal` date NOT NULL,
  `acara` varchar(50) NOT NULL,
  `tampat` varchar(50) NOT NULL,
  `pelayan` varchar(50) NOT NULL,
  `jam` varchar(20) NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `haritanggal`, `acara`, `tampat`, `pelayan`, `jam`) VALUES
(1, '2017-02-28', 'Ibadah Rutin', 'Ruang 205 STMIK Kharisma Makassar', 'Pdt. Bill', '13.00 - 14.00'),
(2, '2017-03-03', 'Ibadah bersama Armed', 'Aula Stmik Kharisma Makassar', 'Pdt.A', '12.00 - 13.00'),
(3, '2017-02-21', 'Ibadah Rutin', 'Aula Stmik Kharisma Makassar', 'Pdt.C', '11.00 - 12.00'),
(4, '2017-02-05', 'Ibadah Rutin', 'ruang 107', 'Pdt. Bill', '13.00 - 14.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `namalengkap` varchar(60) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` char(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nim` (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `namalengkap`, `nim`, `email`, `phone`, `password`) VALUES
(1487464587, 'Bryan_212', 'Bryan Samuel Bangonan', '51014006', 'bbangonan21@gmail.com', '089518110580', '$2y$10$u5CxhLN3QORjY0/lxpKswu92kXYocgXn2gugaL/l1kDlgXFln9/Mi'),
(1487734221, 'jihannovianti_15', 'Jihan Novianti Putri', '51014013', 'jihannovianti_15@kharisma.ac.id', '082393531524', '$2y$10$XBAq5T8t6KQJyMk1bd0ahe9FtbPVzmyy4MNd1PUEiX4eUm/Ccx0PW');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
