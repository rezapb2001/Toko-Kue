-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2021 at 09:50 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_roti`
--

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(3) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `alamat` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama`, `username`, `password`, `no_tlp`, `alamat`) VALUES
(1, 'Reza Pramudya B', 'bagas123', 'bagas123', '0987654321963', 'Bantul, Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(3) NOT NULL,
  `gambar` varchar(581) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `harga` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `gambar`, `nama_produk`, `deskripsi`, `kategori`, `harga`) VALUES
(19, '9112-1 roti sisir milk bread_ori coklat keju_5000.png', 'Roti SisirMilk Bread', 'Roti lembut terbuat dari susu yang sangat bergizi', 'Bread', 5000),
(20, '5931-2 triple chocolate bread_4500.png', 'Triple Chocolate', 'Tiga cita rasa coklat dalam sebuah roti', 'Bread', 4500),
(21, '7347-3 pisang coklat_3500.png', 'Pisang Coklat', 'Roti lembut dengan perpaduan rasa pisang dan coklat', 'Bread', 3500),
(22, '5927-4 edam permesan kastengel per toples_100000.png', 'Edam Permesan Kastengel', 'Rasa keju yang kuat dalam setiap gigitan', 'Pastry', 100000),
(23, '5660-5 nastar premium per toples_85000.png', 'Nastar Premium ', 'Nastar dengan selai nanas yang nikmat', 'Pastry', 85000),
(24, '4014-6 konde pandan_3500.png', 'Konde Pandan', 'Rasa dan aroma pandan yang mengguah selera', 'Bread', 3500),
(25, '7389-7 cinnamon roll_3500.png', 'Cinnamon Roll', 'Rasa Cinnamon yang sangat nikmat', 'Bread', 3500),
(26, '7487-8 selai nanas_3000.png', 'Selai Nanas', 'Selai nanar yang memenuhi setiap sisi roti', 'Bread', 3000),
(27, '2677-9 chicken burn_3500.png', 'Chicken Burn', 'Cita rasa ayam bakas yang nikmat', 'Bread', 3500),
(28, '3413-10 chicken mayo_3500.png', 'Chicken Mayo', 'Kenikmatan aya dengan saos mayonais', 'Bread', 3500),
(29, '3247-11 choco dot_3500.png', 'Choco Dot', 'Rasa Coklat yang selalu membawa kebahagiaan', 'Bread', 3500),
(30, '1581-12 birthday cake_20_195000.png', 'Birthday Cake 20cm', 'Kue ulangtahun untuk keluarga besar', 'Cake', 195000),
(31, '5047-13 birthday cake_18_160000.png', 'Birthday Cake 18cm', 'Teman Pesta ulang tahun dengan keluarga', 'Cake', 160000),
(32, '8060-14 birthday cake_16_135000.png', 'Birthday Cake 16cm', 'Pesta dengan teman akan terasa menyenangkan', 'Cake', 135000),
(33, '4891-15 cupcake isi 4 3d topper_225000.png', 'Cup Cake 3D Topping isi 4', 'Topping yang lucu cukup untuk semua', 'Cup Cake', 225000),
(34, '9701-16 cupcake karakter_15000.png', 'Cup Cake Karakter', 'Karakter yang lucu pada setiap cup cake', 'Cup Cake', 15000),
(35, '6283-17 soes ragout ayam_4000.png', 'Soes Ragout Ayam', 'Kenikmatan Ragout Ayam  dalam setiap gigitan', 'Snack', 4000),
(36, '4541-18 roti sosis_big_6000.png', 'Roti Sosis Big', 'Lebih puas dengan lbih besar', 'Bread', 6000),
(37, '517-19 aneka tumpeng_180000.png', 'Tumpeng dan Lauk', 'Kenikmatan tumpeng dengan cita rasa yang nikmat', 'Package', 180000),
(38, '9109-20 oisang coklat_big_6500.png', 'Pisang Coklat Big', 'Lebih nikmat dengan pisang dan coklat yang lebih', 'Bread', 6500),
(39, '7507-21 roti isi ayam_big_6500.png', 'Roti Isi Ayam Big', 'Isi ayam yang lebih banyak', 'Bread', 6500),
(40, '685-22 zuppa soup_15000.png', 'zuppa soup', 'Kenikmatan zuppa soup yang hangat', 'Snack', 15000),
(41, '1471-23 aneka menu lunchbox_25000.png', 'Aneka Lunchbox', 'Berbagai lauk dan rasa yang pas untuk acar anda', 'Package', 25000),
(42, '9729-24 pastel isi ragout daging dan telur rebus_3500.png', 'Pastel Ragout danging dan Telur', 'Cita rasa patel dengan ragout daging dan telur rebus yang sangat enak', 'Snack', 3500),
(43, '3412-25 buttermilk red velvet cake_85000.png', 'Buttermilk Red Velvet', 'Kelembutan susu dan redvelvet yang sangat pas', 'Cake', 85000),
(44, '3908-26 pie buah mini tartlet_4500.png', 'Pie Buah Mini Tartlet', 'Kesegaran buah dalam sebuah pie', 'Snack', 4500),
(45, '5358-27 lumpia telur puyuh_3500.png', 'Lumpia Telur Puyuh ', 'Kelezatan Lumpia dengan isian telur puyuh', 'Snack', 3500),
(46, '3115-28 mexican bun_4500.png', 'Mexican Bun', 'Tekstur roti Mexican yang ikmat', 'Bread', 4500),
(47, '8514-29 caterpillar bread(sosis bernardi)_6500.png', 'Caterpillar Bread', 'Kenikmatan sosis bernardi dalam sebuah roti', 'Bread', 6500),
(48, '4372-30 mini pizza_6500.png', 'Mini Pizza', 'Kenikmatan pizza dengan ukuran yang pas', 'Snack', 6500),
(49, '1292-31 creamy soes vla_3500.png', 'Creamy Soes Vla', 'Kelembutan dan rasa yang manis dari vla ', 'Snack', 3500),
(50, '3512-32 brownies panggang triple coklat_85000.png', 'Brownies Panggang Triple Coklat', 'Rasa dan kenikmatan 3 coklat dalam sebuah brownies', 'Brownies', 85000),
(51, '1091-33 brownies panggang duo peanuts_85000.png', 'Brownies Panggang Duo Peanuts', 'Kenikmatan kacang mete dan almon', 'Brownies', 85000),
(52, '6611-34 aneka snack box_10000.png', 'Snack Box', 'Menemani acara dengan kenikmatan', 'Package', 10000),
(53, '5562-35 selai strawberry_3500.png', 'Selai Strawberry', 'Kenkmatan roti dan selai di setiap gigitan', 'Bread', 3500),
(54, '8814-36 roti sobek_30000.png', 'Roti Sobek', 'Kelembutan pada setiap gigitan', 'Bread', 30000),
(55, '5576-37 garlic cheese bread_6500.png', 'Garlic Cheese Bread', 'Kelezatan dari aroma yang nikmat', 'Bread', 6500),
(56, '5666-38 choco bomb_3500.png', 'Choco Bomb', 'Coklat pada setiap gigitan dan bagian roti', 'Bread', 3500),
(57, '9607-39 keju lembut_3500.png', 'Keju Lembut', 'Kenikmatan dari kelembutan keju dan roti', 'Bread', 3500),
(58, '7131-40 ampyang coklat_30000.png', 'Ampyang Coklat ', 'Cita rasa coklat dengan olahan tradisional', 'Traditional Snack', 30000),
(59, '8871-41 roti tawar_15000.png', 'Roti Tawar', 'Teman sarapan anda yang nikmat', 'Bread', 15000),
(60, '1169-42 tuna mayo_4500.png', 'Tuna Mayo', 'Kenikmatan dan kelezatan tuna dengan perpaduan saor mayonais', 'Bread', 4500),
(61, '348-43 pudding roti panggang_45000.png', 'Puding Roti Panggang', 'Untuk teman sarapan yang pas', 'Bread', 45000),
(62, '7346-44 prol tape spesial_70000.png', 'Prol Tape Spesial', 'Kenikmatan dari tape dalam sebuah prol tape', 'Traditional Snack', 70000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
