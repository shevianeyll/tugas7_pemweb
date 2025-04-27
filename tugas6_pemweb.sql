-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2025 at 06:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas6_pemweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `tanggal_lahir`, `username`, `password`, `level`) VALUES
(1, 'Jung Jaehyun', '1997-02-14', 'jungjamal', '827ccb0eea8a706c4c34a16891f84e7b', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `merek` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto_produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi`, `kategori`, `merek`, `harga`, `foto_produk`) VALUES
(1, 'Skin Perfecto', 'A refreshing watery lotion combining 24-hour hydration1 with a gentle exfoliating action. Energize2 your skin with the unique Vitamin Blend Complex and AHA infused formula, to reveal an instant healthy glow. Your skin is softened, smoothed and moisturized: ready for the next steps in the Healthy Rosy Glow routine.', 'Lotion', 'Givenchy', 47, '3131skin perfecto serum.jpg'),
(2, 'Skin Vitamin Blend', 'This new refreshing serum acts as a true radiance energy booster. Discover a cocktail of vitamins and hyaluronic acid in a 94% natural-origin formula1. Your skin is instantly revitalized and moisturized, revealing a vibrant healthy glow.', 'Serum', 'Givenchy', 80, '7621skin perfecto.jpg'),
(3, 'Le Soin Noir', 'An intensely moisturizing face cream that works to reduce the visible signs of aging, while restoring the appearance of density and firmness to skin.  The regenerative properties of Vital Algae, the key ingredient in Le Soin Noir skincare, help to nourish the skin while also boosting it’s defenses. With continued use, wrinkles and fine lines are visibly reduced, and the skin’s texture appears more refined & revitalized.', 'Cream', 'Givenchy', 390, '1965le soin noir.png'),
(4, 'Le Soin Noir Lifting Serum', 'A lightweight face serum designed to visibly lift the skin for the appearance of a tighter, more sculpted facial contour.  The regenerative properties of Vital Algae help to nourish the face, while also boosting the skin’s defenses over time. With continued use, wrinkles and fine lines are visibly reduced, and the skin’s texture appears firm & more refined.', 'Serum', 'Givenchy', 420, '9165le soin noir lifting serum.png'),
(5, 'Rose Perfecto', 'For this season, Givenchy reveals its new Fall Collection directly inspired by the singular Givenchy couture universe. Rose Perfecto Lip Balm dresses into a high fashion limited-edition case, a full pink look made of attractive 4G. For this occasion, the beautifying lip care is reinterpreted into a new exclusive and luminous shade.', 'Lip Balm', 'Givenchy', 41, '9001rose perfecto.png'),
(6, 'Skin Ressource', 'A fresh micellar water to remove makeup and impurities while hydrating your skin. Cleanse, tone and comfort in one simple step with this watery solution, formulated with 93% natural ingredients1. Skin is free from impurities and traces of makeup to reveal its natural radiance.', 'Micelar Water', 'Givenchy', 35, '1405skin ressource.png'),
(7, 'Amarige', 'Feminine, soft, sublime: Amarige is the symbol of femininity, radiant and bursting with happiness. This Eau de Toilette reveals the pleasures of life and the simplicity of joyful moments with its sweet notes evocating the shores of the Mediterranean.', 'Eau De Toillete', 'Givenchy', 64, '7390amarige.png'),
(8, 'Boisee', 'The olfactory encounter begins with a spicy touch of black pepper and coriander. The richness of cocoa and the sophistication of iris are wrapped in a balmy woody accord, where sandalwood and patchouli are magnified for the warmest trail. Givenchy Gentleman, the ultimate in timeless elegance and refinement.', 'Eau De Parfum', 'Givenchy', 111, '6147boisee.png'),
(9, 'Ysatis', 'Ysatis Eau de Toilette, the scent of a woman fragrance with a thousand facets in a fascinating blend of Floral-Chypre notes. A dream-like vision of contemporary elegance — and the essence of infinite beauty.', 'Eau De Toillete', 'Givenchy', 113, '4640ysatis.png'),
(10, 'Irresistible', 'Harvested at first light of day in Isparta Mountains in Turkey, the rose Essential dances with blond wood in harmonious tension. Twinkling with juicy and crisp tones of pear and ambrette, it then pulsates with powdery iris. The blend comes together deliciously with a tactile caress of musk to create an invigorating fruity-woody floral that is boldly uplifting.', 'Eau De Parfum', 'Givenchy', 124, '7538irresistible.png'),
(11, 'Linterdit Holiday', 'Let an enchanting mountain escape uplift your holiday season. Indulge in a touch of transgression with a sultry Givenchy fragrance set including a LInterdit Eau de Parfum (80ml), travel spray, and a silky hydrating body lotion.', 'Gift Set', 'Givenchy', 127, '9420gift set.png'),
(12, 'Gentleman Holiday', 'Let a captivating mountain escape uplift your holiday season. Bring smoldering desire to each encounter with a sleek Givenchy fragrance set including a Gentleman Givenchy Eau de Parfum Boisée (100ml), shower gel, and travel spray.', 'Gift Set', 'Givenchy', 114, 'gentleman.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
