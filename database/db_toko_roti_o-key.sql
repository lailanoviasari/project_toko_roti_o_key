-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Nov 2023 pada 07.25
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
-- Database: `db_toko_roti_o-key`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Breads'),
(2, 'Doughnats'),
(3, 'Pudding'),
(4, 'Cakes'),
(5, 'Roll Cakes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `make_product`
--

CREATE TABLE `make_product` (
  `make_product_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `patissier_id` int(11) NOT NULL,
  `make_date` datetime NOT NULL,
  `exp_date` datetime NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `make_product`
--

INSERT INTO `make_product` (`make_product_id`, `product_id`, `patissier_id`, `make_date`, `exp_date`, `quantity`) VALUES
(1, 3, 1, '2023-11-11 13:19:31', '2023-11-25 13:19:31', 25),
(2, 3, 3, '2023-11-11 13:21:12', '2023-11-25 13:21:12', 25),
(3, 2, 3, '2023-11-11 13:21:12', '2023-11-25 13:21:12', 20),
(4, 1, 3, '2023-11-11 13:22:55', '2023-11-25 13:22:55', 25),
(5, 1, 1, '2023-11-11 13:22:55', '2023-11-25 13:22:55', 25),
(6, 5, 1, '2023-11-11 13:23:43', '2023-11-25 13:23:43', 20),
(7, 4, 1, '2023-11-11 13:23:43', '2023-11-25 13:23:43', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `patissier`
--

CREATE TABLE `patissier` (
  `patissier_id` int(11) NOT NULL,
  `nama_patissier` text NOT NULL,
  `gender_patissier` enum('male','female') NOT NULL,
  `telpon_patissier` varchar(12) NOT NULL,
  `email_patissier` varchar(50) NOT NULL,
  `alamat_patissier` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `patissier`
--

INSERT INTO `patissier` (`patissier_id`, `nama_patissier`, `gender_patissier`, `telpon_patissier`, `email_patissier`, `alamat_patissier`) VALUES
(1, 'Asril', 'male', '085678654345', 'asril12@gmail.com', 'Jln. Kartini No. 34. Bandung'),
(2, 'Rina', 'female', '087567234517', '23rain@gmail.com', 'Jln. Cendrawasih Timur, No. 01. Denpasar'),
(3, 'Erika', 'female', '089757581527', 'rikaa11@gmail.com', 'Jln. Kuta Baru Utara, No. 34. Depok'),
(4, 'Hendra', 'male', '085678909876', 'hendrahendra@gmail.com', 'Jln. Campursari, RT 05 RW 03. Sukolilo, Surabaya'),
(5, 'Tedi', 'male', '085389762388', 'tedibear@gmail.com', 'Jln. Roro Jonggrang, Solo'),
(6, 'Faza', 'male', '089767654567', 'iniFaza@gmail.com', 'Jln. Sulawesi Utara. Jakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `description` text NOT NULL,
  `product_image` varbinary(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `price`, `stock`, `description`, `product_image`, `category_id`) VALUES
(1, 'Roti Bulat Nanas', 2700, 50, 'Roti bulat dengan selai nanas adalah sajian lezat yang menggabungkan kelembutan roti dengan kelezatan rasa nanas yang manis dan segar. Roti ini biasanya memiliki bentuk bulat yang lembut dan kenyal, memberikan pengalaman mengunyah yang memuaskan.\r\n\r\nBagian luar roti mungkin memiliki lapisan yang renyah dan berwarna keemasan, memberikan kontrast dengan kelembutan bagian dalamnya. Aroma harum roti yang dipanggang dapat menciptakan sensasi yang menggoda sejak pertama kali Anda melihatnya.\r\n\r\nSaat Anda memotong roti bulat ini, mungkin terungkap lapisan nanas yang kaya dan lembut di dalamnya. Selai nanas ini biasanya dibuat dari nanas segar yang diolah dengan cara yang tepat untuk mempertahankan kelembutan dan rasa alami buahnya. Tekstur lembut nanas dan rasa manis yang alami dapat membuat roti ini menjadi pilihan yang sempurna untuk santapan ringan atau camilan di berbagai kesempatan.\r\n\r\nSelain itu, kombinasi antara roti yang lembut dan selai nanas yang segar menciptakan harmoni rasa yang memanjakan lidah. Roti bulat dengan selai nanas dapat dinikmati dengan cara yang beragam, baik itu dioleskan mentah atau dipanggang lebih lanjut untuk mendapatkan sentuhan hangat yang lebih intens.\r\n\r\nSecara keseluruhan, roti bulat dengan selai nanas adalah pilihan yang menarik bagi pecinta rasa manis dan segar, memberikan pengalaman kuliner yang memuaskan dengan setiap gigitannya.', '', 1),
(2, 'Roti Bulat Stroberi', 2700, 20, 'Roti bulat dengan selai stroberi adalah sajian lezat yang menggabungkan kelembutan roti dengan kelezatan rasa stroberi yang manis dan segar. Roti ini biasanya memiliki bentuk bulat yang lembut dan kenyal, memberikan pengalaman mengunyah yang memuaskan.\r\n\r\nBagian luar roti mungkin memiliki lapisan yang renyah dan berwarna keemasan, memberikan kontrast dengan kelembutan bagian dalamnya. Aroma harum roti yang dipanggang dapat menciptakan sensasi yang menggoda sejak pertama kali Anda melihatnya.\r\n\r\nSaat Anda memotong roti bulat ini, mungkin terungkap lapisan stroberi yang kaya dan lembut di dalamnya. Selai stroberi ini dibuat dari stroberi segar yang diolah dengan cara yang tepat untuk mempertahankan kelembutan dan rasa alami buahnya. Tekstur lembut stroberi dan rasa manis yang alami dapat membuat roti ini menjadi pilihan yang sempurna untuk santapan ringan atau camilan di berbagai kesempatan.\r\n\r\nSelain itu, kombinasi antara roti yang lembut dan selai stroberi yang segar menciptakan harmoni rasa yang memanjakan lidah. Roti bulat dengan selai stroberi dapat dinikmati dengan cara yang beragam, baik itu dioleskan mentah atau dipanggang lebih lanjut untuk mendapatkan sentuhan hangat yang lebih intens.\r\n\r\nSecara keseluruhan, roti bulat dengan selai stroberi adalah pilihan yang menarik bagi pecinta rasa manis dan segar, memberikan pengalaman kuliner yang memuaskan dengan setiap gigitannya.', '', 1),
(3, 'Roti Bulat Cokelat', 2700, 50, 'Roti bulat dengan selai cokelat adalah sajian lezat yang menggabungkan kelembutan roti dengan kelezatan rasa cokelat yang manis dan memikat. Roti ini biasanya memiliki bentuk bulat yang lembut dan kenyal, memberikan pengalaman mengunyah yang memuaskan.\r\n\r\nBagian luar roti mungkin memiliki lapisan yang renyah dan berwarna keemasan, menciptakan kontrast dengan kelembutan bagian dalamnya. Aroma harum roti yang dipanggang dapat menciptakan sensasi yang menggoda sejak pertama kali Anda melihatnya.\r\n\r\nSaat Anda memotong roti bulat ini, mungkin terungkap lapisan selai cokelat yang kaya dan lembut di dalamnya. Selai cokelat ini dibuat dari cokelat berkualitas tinggi yang dilelehkan dengan hati-hati untuk menciptakan tekstur yang lembut dan rasa yang mendalam. Rasa manis dan gurih dari selai cokelat dapat membuat roti ini menjadi pilihan yang sempurna untuk santapan ringan atau camilan di berbagai kesempatan.\r\n\r\nSelain itu, kombinasi antara roti yang lembut dan selai cokelat yang melimpah menciptakan harmoni rasa yang memanjakan lidah. Roti bulat dengan selai cokelat dapat dinikmati dengan cara yang beragam, baik itu dioleskan mentah atau dipanggang lebih lanjut untuk mendapatkan sentuhan hangat yang lebih intens.\r\n\r\nSecara keseluruhan, roti bulat dengan selai cokelat adalah pilihan yang menggugah selera bagi pecinta cokelat, memberikan pengalaman kuliner yang memuaskan dengan setiap gigitannya.', '', 1),
(4, 'Roti Kotak Cokelat-Vanila', 4000, 20, 'Roti kotak cokelat-vanila adalah karya seni kuliner yang memukau dengan penampilan kecilnya yang menggoda. Dengan tekstur lembutnya dan aroma panggang yang memikat, roti ini menggabungkan kelezatan rasa cokelat dan vanila dalam setiap gigitannya. Permukaannya yang berwarna keemasan menambah daya tarik visual, sementara rasa manis dan gurihnya memanjakan lidah. Cocok untuk dinikmati sebagai camilan siang atau sarapan yang memuaskan, roti ini menjadi pilihan yang tak terelakkan bagi pencinta kombinasi rasa yang sempurna. Nikmati momen istimewa dengan setiap potongan roti kotak cokelat-vanila yang menghadirkan pengalaman kuliner yang tak terlupakan.', '', 1),
(5, 'Roti Kotak Cokelat-Stroberi', 4000, 20, 'Roti kotak cokelat-stroberi adalah masterpiece kuliner dengan kelembutan dan aroma panggang yang memikat. Setiap gigitan menyatukan harmoni rasa cokelat yang kaya dan kelezatan stroberi yang segar. Permukaannya yang keemasan menciptakan daya tarik visual, dan rasa manis serta segarnya menciptakan pengalaman kuliner yang tak terlupakan. Roti ini cocok sebagai camilan siang atau sarapan yang memuaskan. Nikmati setiap potongan roti kotak cokelat-stroberi untuk memanjakan lidah dan menyelami pengalaman kuliner yang penuh kelezatan.', '', 1),
(6, 'Donat Coklat Meses', 3000, 0, 'Donat coklat meses adalah karya seni kuliner yang menawan dengan kelezatan setiap gigitannya. Bentuk bulatnya yang lembut memberikan pengalaman rasa yang memuaskan bagi pencinta kue. Lapisan coklat yang mengkilap melapisi permukaannya, menciptakan daya tarik visual yang tak tertahankan. Meski berkilau, donat ini mempertahankan kelembutan dalam setiap suapan, membebankan lidah dengan rasa coklat yang memuaskan. Meses coklat yang melimpah di atasnya menambah kelezatan dengan rasa manis dan gurih yang menyatu sempurna. Donat ini menjadi pilihan sempurna untuk mengakhiri hidangan dengan manis atau sebagai teman secangkir kopi.', '', 2),
(7, 'Donat Coklat Kacang', 3200, 0, 'Donat coklat kacang adalah sajian menggoda yang memadukan kelembutan donat dengan kelezatan rasa coklat dan kacang. Bentuk bundar dan lembutnya menciptakan pengalaman mengunyah yang memuaskan setiap gigitan. Lapisan coklat yang melimpah dan mengkilap memperkaya cita rasa dengan kegurihan manis dan pahit yang menyatu sempurna. Kacang yang diserbukannya menambah dimensi rasa dengan rasa gurih dan renyah yang menarik. Donat ini adalah paduan sempurna antara kenikmatan coklat dan kacang yang membuatnya cocok sebagai camilan istimewa atau teman setia di kala bersantai. Nikmati kelezatan donat coklat kacang yang memanjakan lidah dengan sensasi rasa yang tak terlupakan.', '', 2),
(10, 'Black Forest', 140000, 0, 'Kue Black Forest adalah masterpiece kulinernya yang memikat dengan kekayaan dan kelembutan setiap potongannya. Lapisan kue coklat yang lembut dipadu dengan selai ceri dan krim segar, menciptakan harmoni rasa yang memanjakan lidah. Di antara setiap lapisannya, terdapat potongan ceri yang memberikan kelezatan segar dan manis. Permukaan kue yang dihiasi dengan cokelat parut dan remahan ceri menambah sentuhan estetis yang memikat. Setiap suapan menghadirkan pengalaman rasa penuh, dari rasa coklat yang intens hingga ke segarnya buah ceri. Kue Black Forest adalah pencapaian tinggi dalam dunia kue, cocok untuk merayakan momen istimewa atau dinikmati sebagai pencuci mulut yang mewah.', '', 4),
(11, 'Strawberry Fruit Cake', 140000, 0, 'Kue Strawberry Fruit Cake adalah karya seni kuliner yang memikat dengan kombinasi manis dan segar. Lapisan kue yang lembut dan empuk dihiasi dengan potongan stroberi segar, menciptakan pemandangan yang menggugah selera. Rasa manis alami stroberi menyatu dengan kelezatan kue, memberikan pengalaman menyegarkan setiap gigitan. Keindahan visualnya dipertegas oleh hiasan buah segar yang melimpah, menambahkan dimensi rasa dan estetika. Kue ini adalah pilihan sempurna untuk merayakan musim buah-buahan segar atau sebagai hidangan manis di acara khusus. Nikmati setiap potongan kue Strawberry Fruit Cake yang menghadirkan kelezatan alami buah-buahan.', '', 4),
(12, 'Roll Cokelat', 21000, 0, 'Roll cokelat adalah masterpiece manis yang memikat dengan kelembutan gulungan dan kelezatan rasa cokelat yang melimpah. Lapisan tepung yang lembut dan empuk membungkus isi cokelat yang menggoda, menciptakan paduan rasa yang memuaskan. Aroma harum cokelat yang menyebar begitu gulungan pertama diiris menambah daya tariknya. Permukaan roll yang dihiasi dengan taburan cokelat atau gula bubuk menambah sentuhan estetika yang memikat mata. Setiap gigitan menghadirkan kombinasi tekstur yang sempurna dan kelezatan cokelat yang membuatnya menjadi camilan yang tak dapat diabaikan. Roll cokelat cocok dinikmati di waktu santai atau sebagai teman secangkir kopi.', '', 5),
(13, 'Roll Keju', 21000, 0, 'Roll keju adalah sajian lezat yang memikat dengan kelembutan gulungan dan kelezatan rasa keju yang melimpah. Lapisan tepung yang lembut dan empuk membungkus isi keju yang lezat, menciptakan kombinasi rasa yang memuaskan. Aroma harum keju yang menyebar begitu gulungan pertama diiris menambah daya tariknya. Permukaan roll yang dihiasi dengan taburan keju parut atau remah keju memberikan sentuhan estetika yang menggoda. Setiap gigitan menghadirkan harmoni antara kelembutan tekstur dan cita rasa keju yang kaya. Roll keju adalah pilihan sempurna sebagai camilan istimewa atau hidangan pembuka yang memikat selera.', '', 5),
(14, 'Coffee Latte Pudding', 15000, 0, 'Coffee Latte Pudding adalah kelezatan yang menggoda dengan sentuhan kopi yang memukau. Lapisan pudding yang lembut dan kenyal menyatu dengan cita rasa kopi latte yang kaya dan mendalam. Aroma kopi yang harum menyelimuti setiap suapan, menciptakan pengalaman yang memikat bagi pecinta kopi. Permukaan pudding yang halus dan cairan kopi yang membalutnya menambah dimensi kelezatan. Potongan pudding yang lembut meresap dengan rasa manis dan pahit yang seimbang, memberikan pengalaman penikmat kopi yang tak terlupakan. Coffee Latte Pudding cocok sebagai hidangan penutup mewah atau sebagai teman bersantai sambil menikmati secangkir kopi.', '', 3),
(15, 'Mixed Fruit Milky Pudding', 15000, 0, 'Mixed Fruit Milky Pudding adalah kelezatan yang memikat dengan paduan manis dan segar dari berbagai buah-buahan. Lapisan pudding yang lembut dan kenyal dipadu dengan kelembutan rasa susu, menciptakan kombinasi cita rasa yang memuaskan. Potongan buah-buahan segar yang tersebar di dalam pudding menambahkan kelezatan dan kesegaran. Aroma manis dan segar buah-buahan menyatu dengan kelembutan tekstur pudding, menciptakan pengalaman nikmat yang memanjakan lidah. Permukaan pudding yang halus dan penyajiannya yang indah dengan hiasan buah-buahan menciptakan tampilan yang mengundang selera. Mixed Fruit Milky Pudding adalah pilihan sempurna untuk pencinta hidangan penutup berkelas yang menggabungkan kelezatan buah dan kelembutan pudding susu.', '', 3),
(16, 'Black Forest Pudding', 15000, 0, 'Black Forest Pudding adalah sajian penutup yang memukau dengan sentuhan khas dari kue Black Forest. Lapisan pudding yang lembut dan kenyal memadukan kelezatan rasa cokelat dengan aroma ceri yang segar. Potongan ceri dan remahan kue cokelat Black Forest yang terdistribusi di dalam pudding menambah dimensi rasa yang luar biasa. Aroma harum cokelat dan ceri menyatu dengan kelembutan tekstur pudding, menciptakan pengalaman yang memanjakan lidah. Permukaan pudding yang halus dan hiasan ceri memberikan tampilan yang mengundang selera. Black Forest Pudding adalah pilihan eksklusif untuk mereka yang menginginkan penyatuan cita rasa istimewa dari kue Black Forest dalam bentuk pudding yang lezat.', '', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeks untuk tabel `make_product`
--
ALTER TABLE `make_product`
  ADD PRIMARY KEY (`make_product_id`),
  ADD KEY `make_product` (`product_id`),
  ADD KEY `patissier_make` (`patissier_id`);

--
-- Indeks untuk tabel `patissier`
--
ALTER TABLE `patissier`
  ADD PRIMARY KEY (`patissier_id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_category` (`category_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `make_product`
--
ALTER TABLE `make_product`
  MODIFY `make_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `patissier`
--
ALTER TABLE `patissier`
  MODIFY `patissier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `make_product`
--
ALTER TABLE `make_product`
  ADD CONSTRAINT `make_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `patissier_make` FOREIGN KEY (`patissier_id`) REFERENCES `patissier` (`patissier_id`);

--
-- Ketidakleluasaan untuk tabel `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
