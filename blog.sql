-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 27, 2020 at 05:14 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `pengguna_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `judul` varchar(35) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL,
  `diterbitkan` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `pengguna_id`, `kategori_id`, `judul`, `slug`, `gambar`, `deskripsi`, `tanggal`, `diterbitkan`) VALUES
(8, 1, 8, 'Second post on LifeBlog', 'Second-post-on-LifeBlog', 'Second-post-on-LifeBlog.png', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id aliquet elit. Vestibulum nec imperdiet augue, in ultrices sem. Aenean at fermentum lectus. Sed lacus neque, imperdiet auctor egestas sit amet, gravida sed massa. Vivamus risus dui, lobortis auctor malesuada ac, imperdiet non justo. Etiam rhoncus sapien eget leo rutrum vestibulum. Maecenas in ipsum eu arcu accumsan vestibulum ac eget massa. Nam suscipit quam tellus, a volutpat sem feugiat sit amet. Nulla at ante eu dolor euismod tristique.</p><p>Aenean eu ullamcorper quam, a ultricies odio. Duis feugiat orci nec fringilla faucibus. Suspendisse efficitur nisl ornare nibh bibendum, quis facilisis massa egestas. Quisque dignissim odio eu elit tincidunt, sed sodales orci cursus. Morbi gravida ipsum in risus placerat, non porttitor velit tincidunt. Cras hendrerit vitae risus quis tristique. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris vestibulum eros vel nunc efficitur, sit amet rhoncus ipsum rhoncus. Maecenas tincidunt mollis justo, vel dictum justo feugiat sit amet. Suspendisse felis massa, luctus sed mauris ut, auctor maximus turpis. Maecenas placerat, lorem varius iaculis malesuada, urna lorem viverra turpis, vel auctor turpis turpis vel lorem. Pellentesque tortor lorem, feugiat et dolor non, mollis semper nisi. Nam vulputate lectus ut aliquam tincidunt. Duis auctor id odio eget luctus.</p><p>Etiam efficitur elementum odio a euismod. Morbi eu turpis leo. Vivamus id condimentum est. Donec justo urna, euismod in orci vel, suscipit sagittis magna. Suspendisse felis dui, tincidunt quis fringilla at, imperdiet sed est. Quisque aliquet tincidunt risus. Mauris ligula mauris, placerat nec ante non, venenatis pellentesque dui.</p><p>Aliquam erat volutpat. Maecenas tellus mauris, dictum vitae imperdiet in, convallis a arcu. Etiam ultricies quis tellus vitae varius. Maecenas fringilla ornare lorem, ultrices commodo sapien condimentum id. Donec ut tincidunt purus. Integer rutrum nisl erat, maximus cursus dui ultricies quis. Donec et vestibulum mi. Suspendisse in viverra dolor, vitae feugiat mi. Nam venenatis malesuada finibus. Curabitur vel sem urna. Vestibulum in mattis justo. Vivamus et nunc turpis. Etiam in ante id orci pharetra euismod.</p>', '2020-12-27', 1),
(9, 1, 8, '5 Habits that can improve your life', '5-Habits-that-can-improve-your-life', '5-Habits-that-can-improve-your-life.png', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id aliquet elit. Vestibulum nec imperdiet augue, in ultrices sem. Aenean at fermentum lectus. Sed lacus neque, imperdiet auctor egestas sit amet, gravida sed massa. Vivamus risus dui, lobortis auctor malesuada ac, imperdiet non justo. Etiam rhoncus sapien eget leo rutrum vestibulum. Maecenas in ipsum eu arcu accumsan vestibulum ac eget massa. Nam suscipit quam tellus, a volutpat sem feugiat sit amet. Nulla at ante eu dolor euismod tristique.</p><p>Aenean eu ullamcorper quam, a ultricies odio. Duis feugiat orci nec fringilla faucibus. Suspendisse efficitur nisl ornare nibh bibendum, quis facilisis massa egestas. Quisque dignissim odio eu elit tincidunt, sed sodales orci cursus. Morbi gravida ipsum in risus placerat, non porttitor velit tincidunt. Cras hendrerit vitae risus quis tristique. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris vestibulum eros vel nunc efficitur, sit amet rhoncus ipsum rhoncus. Maecenas tincidunt mollis justo, vel dictum justo feugiat sit amet. Suspendisse felis massa, luctus sed mauris ut, auctor maximus turpis. Maecenas placerat, lorem varius iaculis malesuada, urna lorem viverra turpis, vel auctor turpis turpis vel lorem. Pellentesque tortor lorem, feugiat et dolor non, mollis semper nisi. Nam vulputate lectus ut aliquam tincidunt. Duis auctor id odio eget luctus.</p><p>Etiam efficitur elementum odio a euismod. Morbi eu turpis leo. Vivamus id condimentum est. Donec justo urna, euismod in orci vel, suscipit sagittis magna. Suspendisse felis dui, tincidunt quis fringilla at, imperdiet sed est. Quisque aliquet tincidunt risus. Mauris ligula mauris, placerat nec ante non, venenatis pellentesque dui.</p><p>Aliquam erat volutpat. Maecenas tellus mauris, dictum vitae imperdiet in, convallis a arcu. Etiam ultricies quis tellus vitae varius. Maecenas fringilla ornare lorem, ultrices commodo sapien condimentum id. Donec ut tincidunt purus. Integer rutrum nisl erat, maximus cursus dui ultricies quis. Donec et vestibulum mi. Suspendisse in viverra dolor, vitae feugiat mi. Nam venenatis malesuada finibus. Curabitur vel sem urna. Vestibulum in mattis justo. Vivamus et nunc turpis. Etiam in ante id orci pharetra euismod.</p>', '2020-12-27', 1),
(10, 1, 8, '5 Bahasa Pemrograman PHP', '5-Bahasa-Pemrograman-PHP', '5-Bahasa-Pemrograman-PHP.png', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id aliquet elit. Vestibulum nec imperdiet augue, in ultrices sem. Aenean at fermentum lectus. Sed lacus neque, imperdiet auctor egestas sit amet, gravida sed massa. Vivamus risus dui, lobortis auctor malesuada ac, imperdiet non justo. Etiam rhoncus sapien eget leo rutrum vestibulum. Maecenas in ipsum eu arcu accumsan vestibulum ac eget massa. Nam suscipit quam tellus, a volutpat sem feugiat sit amet. Nulla at ante eu dolor euismod tristique.</p><p>Aenean eu ullamcorper quam, a ultricies odio. Duis feugiat orci nec fringilla faucibus. Suspendisse efficitur nisl ornare nibh bibendum, quis facilisis massa egestas. Quisque dignissim odio eu elit tincidunt, sed sodales orci cursus. Morbi gravida ipsum in risus placerat, non porttitor velit tincidunt. Cras hendrerit vitae risus quis tristique. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris vestibulum eros vel nunc efficitur, sit amet rhoncus ipsum rhoncus. Maecenas tincidunt mollis justo, vel dictum justo feugiat sit amet. Suspendisse felis massa, luctus sed mauris ut, auctor maximus turpis. Maecenas placerat, lorem varius iaculis malesuada, urna lorem viverra turpis, vel auctor turpis turpis vel lorem. Pellentesque tortor lorem, feugiat et dolor non, mollis semper nisi. Nam vulputate lectus ut aliquam tincidunt. Duis auctor id odio eget luctus.</p><p>Etiam efficitur elementum odio a euismod. Morbi eu turpis leo. Vivamus id condimentum est. Donec justo urna, euismod in orci vel, suscipit sagittis magna. Suspendisse felis dui, tincidunt quis fringilla at, imperdiet sed est. Quisque aliquet tincidunt risus. Mauris ligula mauris, placerat nec ante non, venenatis pellentesque dui.</p><p>Aliquam erat volutpat. Maecenas tellus mauris, dictum vitae imperdiet in, convallis a arcu. Etiam ultricies quis tellus vitae varius. Maecenas fringilla ornare lorem, ultrices commodo sapien condimentum id. Donec ut tincidunt purus. Integer rutrum nisl erat, maximus cursus dui ultricies quis. Donec et vestibulum mi. Suspendisse in viverra dolor, vitae feugiat mi. Nam venenatis malesuada finibus. Curabitur vel sem urna. Vestibulum in mattis justo. Vivamus et nunc turpis. Etiam in ante id orci pharetra euismod.</p>', '2020-12-27', 1),
(12, 2, 10, 'Hello World', 'Hello-World', 'Hello-World.png', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id aliquet elit. Vestibulum nec imperdiet augue, in ultrices sem. Aenean at fermentum lectus. Sed lacus neque, imperdiet auctor egestas sit amet, gravida sed massa. Vivamus risus dui, lobortis auctor malesuada ac, imperdiet non justo. Etiam rhoncus sapien eget leo rutrum vestibulum. Maecenas in ipsum eu arcu accumsan vestibulum ac eget massa. Nam suscipit quam tellus, a volutpat sem feugiat sit amet. Nulla at ante eu dolor euismod tristique.</p><p>Aenean eu ullamcorper quam, a ultricies odio. Duis feugiat orci nec fringilla faucibus. Suspendisse efficitur nisl ornare nibh bibendum, quis facilisis massa egestas. Quisque dignissim odio eu elit tincidunt, sed sodales orci cursus. Morbi gravida ipsum in risus placerat, non porttitor velit tincidunt. Cras hendrerit vitae risus quis tristique. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris vestibulum eros vel nunc efficitur, sit amet rhoncus ipsum rhoncus. Maecenas tincidunt mollis justo, vel dictum justo feugiat sit amet. Suspendisse felis massa, luctus sed mauris ut, auctor maximus turpis. Maecenas placerat, lorem varius iaculis malesuada, urna lorem viverra turpis, vel auctor turpis turpis vel lorem. Pellentesque tortor lorem, feugiat et dolor non, mollis semper nisi. Nam vulputate lectus ut aliquam tincidunt. Duis auctor id odio eget luctus.</p><p>Etiam efficitur elementum odio a euismod. Morbi eu turpis leo. Vivamus id condimentum est. Donec justo urna, euismod in orci vel, suscipit sagittis magna. Suspendisse felis dui, tincidunt quis fringilla at, imperdiet sed est. Quisque aliquet tincidunt risus. Mauris ligula mauris, placerat nec ante non, venenatis pellentesque dui.</p><p>Aliquam erat volutpat. Maecenas tellus mauris, dictum vitae imperdiet in, convallis a arcu. Etiam ultricies quis tellus vitae varius. Maecenas fringilla ornare lorem, ultrices commodo sapien condimentum id. Donec ut tincidunt purus. Integer rutrum nisl erat, maximus cursus dui ultricies quis. Donec et vestibulum mi. Suspendisse in viverra dolor, vitae feugiat mi. Nam venenatis malesuada finibus. Curabitur vel sem urna. Vestibulum in mattis justo. Vivamus et nunc turpis. Etiam in ante id orci pharetra euismod.</p>', '2020-12-27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(8, 'Kehidupan'),
(10, 'Programming'),
(9, 'Teknologi');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('Admin','Author') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `email`, `password`, `role`) VALUES
(1, 'Dimas Aditya Mukhsinin', 'dimas@dimas.com', 'e10adc3949ba59abbe56e057f20f883e', 'Admin'),
(2, 'Kamsari', 'kamsari@kamsari.co', '202cb962ac59075b964b07152d234b70', 'Author'),
(4, 'test', 'kamsari@kamsari.com', 'e10adc3949ba59abbe56e057f20f883e', 'Author');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `kategori_id` (`kategori_id`),
  ADD KEY `pengguna_id` (`pengguna_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kategori` (`kategori`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `artikel_ibfk_2` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
