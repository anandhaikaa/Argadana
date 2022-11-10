-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16 Feb 2022 pada 22.42
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `argadana_petshop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(15) NOT NULL,
  `nama_admin` varchar(100) DEFAULT NULL,
  `email_admin` varchar(100) DEFAULT NULL,
  `password_admin` varchar(100) DEFAULT NULL,
  `status_kerja` enum('Aktif','Tidak Aktif') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email_admin`, `password_admin`, `status_kerja`) VALUES
('adm001', 'anandha', 'natangalathe@gmail.com', 'anandha', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(15) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
('KAT001', 'Makanan Hewan'),
('KAT002', 'Snack Hewan'),
('KAT003', 'Mainan Hewan'),
('KAT004', 'Aksesoris dan Perlengkapan Hewan'),
('KAT005', 'Grooming (Perawatan Hewan)'),
('KAT006', 'Boarding (Penitipan Hewan)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `macam_kategori`
--

CREATE TABLE `macam_kategori` (
  `kode_barang_atau_layanan` varchar(15) NOT NULL,
  `nama_barang_atau_layanan` varchar(100) DEFAULT NULL,
  `id_kategori` varchar(15) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `harga` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `macam_kategori`
--

INSERT INTO `macam_kategori` (`kode_barang_atau_layanan`, `nama_barang_atau_layanan`, `id_kategori`, `keterangan`, `gambar`, `harga`) VALUES
('PRD001', 'Profelin Salmon 20kg - Makanan Kucing premium ', 'KAT001', NULL, '250786812_2925037f-e2be-4f07-8ead-5659c1676d6b_512_512_1588103429156_resized1024.jpg', 480000),
('PRD002', 'Makanan Kucing Me-O / Meo Chiken 1.2kg ', 'KAT001', NULL, 'aa0dc5ad13d2242140d5df998f6babb3_1587034951046._resized1024.jpg', 70000),
('PRD003', 'Pedigree Adult Beef & Vege 500gr - Makanan Anjing Kering ', 'KAT001', NULL, '9212280_3d614cf4-0a75-4309-8738-1f17e12cb7be_600_600_1586894941425_resized1024.jpg', 25000),
('PRD004', 'ALPO ADULT Chicken Liver Vegetable 1.5kg ', 'KAT001', NULL, '21618260_8deedf57-a311-4cb4-931b-c5dcd851c3f5_1000_1000_1586964157152_resized1024.jpg', 60000),
('PRD005', 'Whiskas - Makanan Basah untuk Kucing - 400gr ', 'KAT001', NULL, 'Screenshot_14.jpg', 19500),
('PRD006', 'Meo Kaleng 400gr Me-O Sardine ', 'KAT001', NULL, 'Screenshot_15.jpg', 19000),
('PRD007', 'Happy Dog Supreme Lamb 200gr - Makanan Basah Anjing Super Premium ', 'KAT001', NULL, '9212280_24ccfc10-c775-4424-aad6-4ce1e277b610_512_512_1586720431482._resized1024.jpg', 40000),
('PRD008', 'Pedigree Kaleng 1,15 kg - Makanan Basah Anjing', 'KAT001', NULL, '9212280_751d754d-a694-4d0b-9d2a-78f2073d3979_700_700_1587444345431._resized1024.jpg', 55000),
('PRD009', 'Smart Heart Rabbit Food 1kg - Makanan Kelinci ', 'KAT001', NULL, '0f87371e0bf73a8bdc301f363d6fe33a_1587017565815._resized1024.jpg', 35000),
('PRD010', 'Vitakraft Menu Vital for Rabbit 1 kg', 'KAT001', NULL, '9212280_7844d2b1-6d7c-4444-92ee-13ce6eb14727_700_700_1586981064504_resized1024.jpg', 75000),
('PRD011', 'Alice Hams & Fruit 1 kg - Makanan Hamster ', 'KAT001', NULL, '9212280_1e612517-175b-42a3-9f28-5c141eabb518_800_800_1589933973339_resized1024.jpg', 138000),
('PRD012', 'Alice Fluffy Doll Hair Beauty for Hams 450 gr- Makanan Hamster', 'KAT001', NULL, '9212280_3c8a026a-f078-49a5-966c-6ac8caf65ebe_653_600_1589934167710_resized1024.jpg', 105000),
('PRD013', 'Vitakraft Menu for Hamster 1 Kg. Makanan premium Hamster', 'KAT001', NULL, '9212280_103a9f2d-366b-45e0-95c5-09d40b81c492_700_700_1586980885235._resized1024.jpg', 75000),
('PRD014', 'Purina Dentalife Dog Treats 24 Chew - Snack Anjing', 'KAT002', NULL, '9212280_0737b52f-fc03-4fca-b78b-7d6a110d4a44_1200_1200_1586976325770._resized1024.jpg', 65000),
('PRD015', 'Pedigree Treats Jerky 80gr - Snack Anjing ', 'KAT002', NULL, '9212280_1341b8e9-27a8-4348-8c6c-4439eeab9c9f_479_479_1586947055648._resized1024.jpg', 20000),
('PRD016', 'Weles Mini Bone 270 gr - Snack Anjing ', 'KAT002', NULL, '9212280_df3912cc-d8f5-44a5-bc09-18dce8882c74_1000_981_1588110123950_resized1024.jpg', 48000),
('PRD017', 'Vitakraft Cat Stick - COD & Tuna - Snack Kucing ', 'KAT002', NULL, '24171406_91d3ee47-5584-4663-9231-b1eba28176dd_700_700_1586979757612._resized1024.jpg', 24500),
('PRD018', 'Purina Dentalife Cat Treats 51gr - Snack Kucing ', 'KAT002', NULL, '24171406_e4931935-25c2-4b4f-b0d5-dd916838dbaa_300_300_1586976465393._resized1024.jpg', 27000),
('PRD019', 'Vitakraft Cat Stick - Turkey & Lamb Meat - Snack Kucing ', 'KAT002', NULL, '32938590_6a71075e-04f6-44d2-bae5-72126b64373e_700_700_1586980134440_resized1024.jpg', 24500),
('PRD020', 'TEMPTATIONS™ Snack Kucing Rasa Tempting Tuna 85g\r\n', 'KAT002', NULL, '35131164_22c306b0-b381-4ac5-ac09-533bb4236377_1200_1200_1586881669054._resized1024.jpg', 30000),
('PRD021', 'Vitakraft snack Kucing Cat Liquid Beef 90 Gr 23521 ', 'KAT002', NULL, '36347650_2dcca55a-91e8-4f51-9eed-21866f7517ea_400_400_1586977558901_resized1024.jpg', 53000),
('PRD022', 'Milky Melody Cheese 70gr. Cream Susu makanan kucing', 'KAT002', NULL, '43570592_f559c593-c160-43fa-a542-7b3821de7fe9_1400_1400_1586976789311._resized1024.jpg', 45000),
('PRD023', 'Briter Bunny - 1kg ', 'KAT002', NULL, '788d7bb87614d7b61c69d6c810684a9e_1587661476428._resized1024.jpg', 35000),
('PRD024', 'Dried Fishes xtra bite - snack hamster 100 gr ', 'KAT002', NULL, '9212280_6e439168-6d54-4432-8f66-770e67fdb289_300_300_1589670355564_resized1024.jpg', 50000),
('PRD025', 'Jolly Dried Shrimps 60gr - snack hamster ', 'KAT002', NULL, '9212280_8daa1796-bfc0-4eb5-ba30-4033f55a4675_700_700_1590011625330._resized1024.jpg', 45000),
('PRD026', 'chewing pellet seafood - snack hamster ', 'KAT002', NULL, '9212280_9914275e-283b-4c33-8fd4-45db76ddd78b_300_300_1587846791165_resized1024.jpg', 40000),
('PRD027', 'Laser LED animasi tikus untuk mainan interaktif kucing cat toys ', 'KAT003', NULL, '0_1f022b60-abd7-4b13-9395-70d440a578f7_1001_1001_1587877558291_resized1024.jpg', 45000),
('PRD028', 'Hartz Chew \'n Clean - Teething Ring - Mainan Anjing Pembersih Gigi ', 'KAT003', NULL, '9212280_3babd67d-795f-4db0-8005-0bbb36299f12_600_600_1587931414497._resized1024.jpg', 185000),
('PRD029', 'Pet Toy 2 Layer Rubber Ball - Mainan Gigitan Anjing (Toy 600) ', 'KAT003', NULL, '9212280_567f130d-0a94-4e63-9726-795e5fa28eeb_1040_1040_1587391603553._resized1024.jpg', 35000),
('PRD030', 'Cat It Play Circuit Ball with Catnip Massager - Mainan Kucing ', 'KAT003', NULL, '9212280_31182939-48eb-4492-b076-92003c8de73d_570_708_1587391977906_resized1024.jpg', 275000),
('PRD031', 'Jogging Ball Hamster - Mainan Bola Hamster', 'KAT003', NULL, 'Screenshot_9.jpg', 25000),
('PRD032', 'See Saw Hamster HM7 - Lorong Hamster ', 'KAT003', NULL, 'Screenshot_12.jpg', 45000),
('PRD033', 'Markotops Bentonite Cat Litter 25 liter - Pasir Kucing', 'KAT004', NULL, '9212280_48413140-9e33-4cd0-9703-dcc033f51f3b_1000_1333_1588101567741_resized1024.jpg', 120000),
('PRD034', 'Pasir Wangi Kucing - Best in Show 12 L - bentonite + serokan ', 'KAT004', NULL, '9212280_a6cb5c6e-4a25-4b1b-95e1-b0538087f4c6_800_800_1587391425213_resized1024.jpg', 82000),
('PRD035', 'Small Animal Bathing Sand 500gr - Pasir Hamster ', 'KAT004', NULL, '9212280_83280015-4981-4cec-9109-5065586f01a2_350_350_1587391356094_resized1024.jpg', 13000),
('PRD036', 'Rabbit Food & Hay Feeder MP56 - tempat makan kelinci ', 'KAT004', NULL, '9212280_3eb82018-d58a-4b22-b33a-37ac1a6bb6ab_700_700_1589324774797._resized1024.jpg', 95000),
('PRD037', 'Moderna Eco Bowl 2450ml - Tempat makan minum hewan', 'KAT004', NULL, '9212280_c1765975-ddc1-4256-82bc-1ae0cb1e9869_477_410_1589668809929_resized1024.jpg', 70000),
('PRD038', 'MP88 Pet Dispenser Tempat Makan Anjing Kucing ', 'KAT004', NULL, '9212280_7c101287-ddca-4169-a195-847c2571fbcc_700_700_1588811825843._resized1024.jpg', 60000),
('PRD039', 'JMS PBT #15 280ml - Botol Minum Hewan', 'KAT004', NULL, '9212280_bd0c6859-a98a-4db9-987a-d7dc5e501cea_1280_1280_1587975478884._resized1024.jpg', 45000),
('PRD040', 'Necklace Yumiko - Kalung Kucing', 'KAT004', NULL, '505519918_8d6318b7-e2d7-4e47-b014-54b5cef78d78_2048_2048_1587104264671_resized1024.jpg', 37000),
('PRD041', 'Pet Con Spoon ( M ) - Collar Pelindung Hewan ', 'KAT004', NULL, '9212280_24bfa2af-7102-41f7-ba4b-f53f36038199_442_328_1587105830868._resized1024.jpg', 55000),
('PRD042', 'Kalung Kucing Anjing Inisial ', 'KAT004', NULL, '9212280_4e859f8e-a9f8-47ed-b6f3-f1a7e4517a4e_1280_1280_1590537933212._resized1024.jpg', 30000),
('PRD043', 'Tali Tuntun Harness Kucing Anjing Leash LS 30 motif army', 'KAT004', NULL, '9212280_b932faa6-aaed-4bd1-aa3e-ba1728dab062_1166_1166_1588717967271._resized1024.jpg', 45000),
('PRD044', 'Moderna Trendy Runner Friends Forever - Pet Carrier Hewan', 'KAT004', NULL, '9212280_e4f98ded-14e1-4fd4-9e34-de507721e1db_541_417_1587123171531_resized1024.jpg', 265000),
('PRD045', 'Savic Zephos 1 (Metal White Toasted Almond) - Pet Carrier Hewan ', 'KAT004', NULL, '9212280_5e61aa15-f187-4b6d-8473-054051cbabb4_1024_1024_1587122158971._resized1024.jpg', 315000),
('PRD046', 'Raid All Mobby Pet Traveling Bag Pet cargo kucing anjing - Tas Hewan ', 'KAT004', NULL, '9212280_77bfa65f-03c2-4f68-b233-930fb16c7b3c_1587124567392_resized1024.jpg', 220000),
('PRD047', 'Cat Litter Box (JMS #18 + Scoop) - Bak Pasir Kucing + Sekop', 'KAT004', NULL, 'e1cfcde087e06dade9b5efa65ce019f9_1587645144325._resized1024.jpg', 65000),
('PRD048', 'Pet Toilet 11 (PT11) - Toilet Anjing ', 'KAT004', NULL, '9212280_097b0908-5587-4c1c-8863-94a876bde6d1_1273_1280_1587126592860_resized1024.jpg', 132000),
('PRD049', 'Puppy Potty Pad - Toilet Anjing', 'KAT004', NULL, '9212280_5ea1cc19-bda1-4ec2-874f-9a27d3aa00fb_800_800_1587206172509_resized1024.jpg', 190000),
('PRD050', 'Memphis Cat Litter Tray s - Bak Pasir Kucing', 'KAT004', NULL, '9212280_a30582a9-3530-4c55-a1a3-52d5ff0f6d3f_1280_853_1587196860491_resized1024.jpg', 87500),
('PRD051', 'Kandang L Pintu Atas K-205 ( 61cmX43cmX53cm ) - Kandang Kucing ', 'KAT004', NULL, '9212280_df616152-55eb-42b4-9b20-767a70c08f64_500_500_1587367898283._resized1024.jpg', 260000),
('PRD052', 'Habitrail Cristal - Kandang Hamster ', 'KAT004', NULL, '9212280_13659020-8f33-4d73-bd7b-55298140c877_1530_1530_1587928571736_resized1024.jpg', 425000),
('PRD053', 'Smart Fence Isi 12 pcs - Kandang Pagar Anjing', 'KAT004', NULL, '9212280_95b3ca01-43c3-404e-973b-858c44031388_1000_1000_1587374816121_resized1024.jpg', 549000),
('PRD054', 'Hamster Cage HM125 - Kandang Hamster ', 'KAT004', NULL, '7f8b0d1eb4b5d79ce47ff2b5ecd4f1d6_1596795988335._resized1024.jpg', 130000),
('SVR001', 'Grooming Biasa (Kucing di atas 3 bulan)', 'KAT005', NULL, 'istockphoto-1127298132-612x612.jpg', 40000),
('SVR002', 'Grooming Jamur+Kutu (Kucing di atas 3 bulan)', 'KAT005', NULL, 'istockphoto-1127298132-612x612.jpg', 45000),
('SVR003', 'Grooming Jamur Kutu Kondisioner (Kucing di atas 3 bulan)', 'KAT005', NULL, 'istockphoto-1127298132-612x612.jpg', 50000),
('SVR004', 'Grooming Gimbal Ringan (Kucing di atas usia 3 bulan)', 'KAT005', NULL, 'istockphoto-1127298132-612x612.jpg', 50000),
('SVR005', 'Grooming Gimbal Parah (Kucing di atas 3 bulan)', 'KAT005', NULL, 'istockphoto-1127298132-612x612.jpg', 60000),
('SVR006', 'Extra Full Clean (Kucing di atas 3 bulan)', 'KAT005', NULL, 'istockphoto-1127298132-612x612.jpg', 60000),
('SVR007', 'Grooming biasa (Kucing di bawah 3 bulan)', 'KAT005', NULL, 'istockphoto-1127298132-612x612.jpg', 30000),
('SVR008', 'Grooming Jamur + Kutu (Kucing di bawah 3 bulan)', 'KAT005', NULL, 'istockphoto-1127298132-612x612.jpg', 35000),
('SVR009', 'Grooming Jamur Kutu Kondisioner (Kucing di bawah 3 bulan)', 'KAT005', NULL, 'istockphoto-1127298132-612x612.jpg', 40000),
('SVR010', 'Grooming Gimbal Ringan (Kucing di bawah 3 bulan)', 'KAT005', NULL, 'istockphoto-1127298132-612x612.jpg', 40000),
('SVR011', 'Grooming Gimbal Parah (Kucing di bawah 3 bulan)', 'KAT005', NULL, 'istockphoto-1127298132-612x612.jpg', 50000),
('SVR012', 'Extra Full Clean (Kucing di bawah 3 bulan)', 'KAT005', NULL, 'istockphoto-1127298132-612x612.jpg', 50000),
('SVR013', 'Grooming Biasa (Anjing di atas 3 bulan)', 'KAT005', NULL, 'istockphoto-1127298132-612x612.jpg', 80000),
('SVR014', 'Grooming Jamur + Kutu (Anjing di atas 3 bulan)', 'KAT005', NULL, 'istockphoto-1127298132-612x612.jpg', 85000),
('SVR015', 'Grooming Jamur Kutu Kondisioner (Anjing di atas 3 bulan)', 'KAT005', NULL, 'istockphoto-1127298132-612x612.jpg', 90000),
('SVR016', 'Grooming Gimbal Ringan (Anjing di atas 3 bulan)', 'KAT005', NULL, 'istockphoto-1127298132-612x612.jpg', 95000),
('SVR017', 'Grooming Gimbal Parah (Anjing di atas 3 bulan)', 'KAT005', NULL, 'istockphoto-1127298132-612x612.jpg', 120000),
('SVR018', 'Extra Full Clean (Anjing di atas 3 bulan)', 'KAT005', NULL, 'istockphoto-1127298132-612x612.jpg', 150000),
('SVR019', 'Grooming Biasa (Anjing di bawah 3 bulan)', 'KAT005', NULL, 'istockphoto-1127298132-612x612.jpg', 60000),
('SVR020', 'Grooming Jamur + Kutu (Anjing di bawah 3 bulan)', 'KAT005', NULL, 'istockphoto-1127298132-612x612.jpg', 65000),
('SVR021', 'Grooming Jamur Kutu Kondisioner (Anjing di bawah 3 bulan)', 'KAT005', NULL, 'istockphoto-1127298132-612x612.jpg', 70000),
('SVR022', 'Grooming Gimbal Ringan (Anjing di bawah 3 bulan', 'KAT005', NULL, 'istockphoto-1127298132-612x612.jpg', 75000),
('SVR023', 'Grooming Gimbal Parah (Anjing di bawah 3 bulan)', 'KAT005', NULL, 'istockphoto-1127298132-612x612.jpg', 100000),
('SVR024', 'Extra Full Clean (Anjing di bawah 3 bulan)', 'KAT005', NULL, 'istockphoto-1127298132-612x612.jpg', 130000),
('SVR025', 'Penitipan - Kandang Keramik Small (Kucing di atas 3 bulan)', 'KAT006', NULL, 'street-pet-hotel-icon-outline-style-vector-33281680.jpg', 15000),
('SVR026', 'Penitipan - Kandang Keramik Big (Kucing di atas 3 bulan)', 'KAT006', NULL, 'street-pet-hotel-icon-outline-style-vector-33281680.jpg', 20000),
('SVR027', 'Penitipan - Kandang Keramik Small (Kucing di bawah 3 bulan)', 'KAT006', NULL, 'street-pet-hotel-icon-outline-style-vector-33281680.jpg', 10000),
('SVR028', 'Penitipan - Kandang Keramik Big (Kucing di bawah 3 bulan)', 'KAT006', NULL, 'street-pet-hotel-icon-outline-style-vector-33281680.jpg', 15000),
('SVR029', 'Penitipan - Bawa Makan Sendiri (Anjing di atas 3 bulan)', 'KAT006', NULL, 'street-pet-hotel-icon-outline-style-vector-33281680.jpg', 20000),
('SVR030', 'Penitipan - Tidak Bawa Makan Sendiri (Anjing di atas 3 bulan)', 'KAT006', NULL, 'street-pet-hotel-icon-outline-style-vector-33281680.jpg', 25000),
('SVR031', 'Penitipan - Bawa Makan Sendiri (Anjing di  bawah 3 bulan)', 'KAT006', NULL, 'street-pet-hotel-icon-outline-style-vector-33281680.jpg', 15000),
('SVR032', 'Penitipan - Tidak Bawa Makan Sendiri (Anjing di bawah 3 bulan)', 'KAT006', NULL, 'street-pet-hotel-icon-outline-style-vector-33281680.jpg', 20000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` varchar(15) NOT NULL,
  `email_pelanggan` varchar(100) DEFAULT NULL,
  `password_pelanggan` varchar(50) DEFAULT NULL,
  `nama_pelanggan` varchar(100) DEFAULT NULL,
  `telepon` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `email_pelanggan`, `password_pelanggan`, `nama_pelanggan`, `telepon`) VALUES
('pl001', 'andiniputri@gmail.com', 'andini', 'Andini Putri', '082546719032'),
('pl002', 'shaffaniabigail@gmail.com', 'shaffa', 'Shaffania Abigail', '081013478920');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pimpinan`
--

CREATE TABLE `pimpinan` (
  `id_pimpinan` varchar(15) NOT NULL,
  `nama_pimpinan` varchar(100) DEFAULT NULL,
  `email_pimpinan` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pimpinan`
--

INSERT INTO `pimpinan` (`id_pimpinan`, `nama_pimpinan`, `email_pimpinan`, `password`) VALUES
('pm0001', 'Argadana', 'iwakpeyek1213@gmail.com', 'argadana');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `kode_transaksi` varchar(15) NOT NULL,
  `id_pelanggan` varchar(15) DEFAULT NULL,
  `tanggal_transaksi` date DEFAULT NULL,
  `waktu_input_transaksi` time DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `total_bayar` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`kode_transaksi`, `id_pelanggan`, `tanggal_transaksi`, `waktu_input_transaksi`, `status`, `total_bayar`) VALUES
('TRA000001', 'pl001', '2020-06-05', '13:15:06', 'Kadaluwarsa', 425000),
('TRA000002', 'pl002', '2020-06-10', '10:07:38', 'Selesai', 90000),
('TRA000003', 'pl002', '2020-07-01', '15:10:59', 'Selesai', 120000),
('TRA000004', 'pl001', '2020-07-16', '14:22:09', 'Kadaluwarsa', 40000),
('TRA000005', 'PL000002', '2022-02-16', '11:17:00', 'Pending', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `id` int(11) NOT NULL,
  `kode_transaksi` varchar(15) DEFAULT NULL,
  `kode_barang_atau_layanan` varchar(15) DEFAULT NULL,
  `tanggal_pemesanan` date DEFAULT NULL,
  `hari_pemesanan` varchar(15) DEFAULT NULL,
  `waktu_pemesanan` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi_detail`
--

INSERT INTO `transaksi_detail` (`id`, `kode_transaksi`, `kode_barang_atau_layanan`, `tanggal_pemesanan`, `hari_pemesanan`, `waktu_pemesanan`) VALUES
(3, 'TRA000001', 'SVR003', '2022-02-16', 'Rabu', '10:00:00'),
(4, 'TRA000002', 'SVR015', '2020-06-10', 'Rabu', '10:00:00'),
(5, 'TRA000002', 'SVR017', '2020-07-01', 'Rabu', '15:00:00'),
(6, 'TRA000002', 'SVR001', '2020-07-16', 'Kamis', '11:00:00'),
(7, 'TRA000003', 'PRD100', '2020-08-05', 'Rabu', '14:00:00'),
(8, 'TRA000005', 'PRD001', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `macam_kategori`
--
ALTER TABLE `macam_kategori`
  ADD PRIMARY KEY (`kode_barang_atau_layanan`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pimpinan`
--
ALTER TABLE `pimpinan`
  ADD PRIMARY KEY (`id_pimpinan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kode_transaksi`);

--
-- Indexes for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
