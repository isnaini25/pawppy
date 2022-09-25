-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 21, 2022 at 05:31 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pawppy`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `id_penulis` int(11) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `teks` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `id_penulis`, `judul`, `teks`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 1, 'Tiga Penyakit Kucing Fatal Teratas', '<p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \" helvetica=\"\" neue\";\"=\"\">Selama bertahun-tahun sekarang, kami telah memiliki vaksin yang aman dan efektif untuk distemper, rabies, dan penyakit pernapasan yang biasa membunuh jutaan kucing setiap tahun. Karena sebagian besar klien kami memvaksinasi hewan peliharaan mereka, infeksi yang dulu sangat umum ini dapat dikendalikan. (Mereka masih umum pada kucing luar dan tidak divaksinasi.)<br></p><p class=\"p2\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \" helvetica=\"\" neue\";=\"\" min-height:=\"\" 14px;\"=\"\"><br></p><p class=\"p2\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \" helvetica=\"\" neue\";=\"\" min-height:=\"\" 14px;\"=\"\"><br></p><p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \" helvetica=\"\" neue\";\"=\"\">Ada tiga penyakit menular lain yang membunuh jutaan kucing per tahun dan banyak dari pasien kami yang berisiko. Penyakit ini dikenal dengan serangkaian inisial yang membingungkan - FeLV, FIV dan FIP. Sekitar 10% kucing di negara ini terinfeksi satu atau lebih virus ini. Setelah kucing Anda sakit dengan salah satu penyakit ini, ia akhirnya akan mati. Tidak ada pengobatan atau penyembuhan yang efektif. Apa yang akan menyelamatkan nyawa kucing</p><p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \" helvetica=\"\" neue\";\"=\"\">mencegah penyebaran infeksi ini melalui tes darah dan vaksinasi.</p><p class=\"p2\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \" helvetica=\"\" neue\";=\"\" min-height:=\"\" 14px;\"=\"\"><br></p><p class=\"p2\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \" helvetica=\"\" neue\";=\"\" min-height:=\"\" 14px;\"=\"\"><br></p><p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \" helvetica=\"\" neue\";\"=\"\">Ketiga infeksi ini dapat dibawa dan disebarkan untuk waktu yang lama oleh kucing yang menyimpan virus tanpa gejala penyakit yang jelas. Kucing yang tampak sangat sehat dapat terinfeksi namun tidak jatuh sakit selama berbulan-bulan atau bertahun-tahun. Namun, selama bulan atau tahun ini, mereka menular ke kucing lain.</p><p class=\"p2\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \" helvetica=\"\" neue\";=\"\" min-height:=\"\" 14px;\"=\"\"><br></p><p class=\"p2\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \" helvetica=\"\" neue\";=\"\" min-height:=\"\" 14px;\"=\"\"><br></p><ol class=\"ol1\" style=\"font-size: medium;\"><li class=\"li1\" style=\"margin: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \" helvetica=\"\" neue\";\"=\"\">Penyakit menular pembunuh kucing nomor satu di Amerika Serikat saat ini adalah Feline Leukemia Virus, atau FeLV. FeLV menghancurkan sistem kekebalan kucing sehingga ia menjadi mangsa anemia, kanker, atau penyakit menular yang tidak akan didapat kucing sehat. Tes darah sederhana adalah 99% akurat dalam mendiagnosis penyakit. Ini kurang akurat pada anak kucing atau kucing yang baru saja terkena penyakit ini. Kami secara rutin menguji semua kucing dan anak kucing baru yang masuk ke rumah. Kami merekomendasikan vaksinasi untuk penyakit ini untuk anak kucing dan kucing yang keluar rumah. Vaksin yang efektif telah tersedia selama bertahun-tahun. Jika kucing dewasa Anda menerima vaksin ini, vaksin ini harus dikuatkan setiap tahun.<br><br></li><li class=\"li1\" style=\"margin: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \" helvetica=\"\" neue\";\"=\"\">Virus berikutnya dalam daftar kami adalah Feline Immunodefficiency Virus, FIV, kerabat dari virus HIV yang menyebabkan AIDS pada manusia. Tes darah yang akan memberi tahu Anda apakah kucing Anda pembawa penyakit ini biasanya dilakukan bersamaan dengan pengujian FeLV. Semua kucing harus diuji untuk penyakit ini, karena hasil tes ini akan memengaruhi semua keputusan perawatan kesehatan Anda selama sisa hidup kucing Anda. Selain itu, vaksin tersedia untuk mencegah FIV. Ini membutuhkan 3 penguat awal secara berurutan, dan kemudian vaksinasi tahunan untuk mempertahankan kekebalan. Saat ini kami hanya merekomendasikan vaksin ini untuk kucing yang berisiko tinggi terinfeksi. Kucing yang divaksinasi dapat dites positif untuk FIV bahkan jika mereka tidak benar-benar memiliki penyakit ini.<br><br></li><li class=\"li1\" style=\"margin: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \" helvetica=\"\" neue\";\"=\"\">Penyakit kucing fatal lainnya adalah Feline Infectious Peritonitis, atau FIP. FIP adalah virus yang lebih keras daripada FeLV. Itu bisa bertahan di area lembab, seperti tanah di taman atau kotak pasir Anda, selama beberapa bulan. Anda dapat melacaknya ke rumah Anda dengan sepatu, tangan, atau pakaian Anda, tetapi sebagian besar kucing yang sehat cukup tahan terhadapnya. Sebagian besar kasus terjadi dalam kondisi ramai atau penuh tekanan seperti di tempat penampungan atau fasilitas penangkaran. Vaksin untuk FIP tersedia, namun saat ini dirasa belum efektif. Tidak seperti FeLV dan FIV, tes darah tidak terlalu akurat dan umumnya dilakukan hanya ketika kucing memiliki penyakit yang mungkin disebabkan oleh FIP.</li></ol><p class=\"p2\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \" helvetica=\"\" neue\";=\"\" min-height:=\"\" 14px;\"=\"\"><br></p><p class=\"p2\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \" helvetica=\"\" neue\";=\"\" min-height:=\"\" 14px;\"=\"\"><br></p><p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \" helvetica=\"\" neue\";\"=\"\">Aturan yang harus diingat untuk membantu mencegah penyebaran penyakit fatal ini:</p><p class=\"p2\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \" helvetica=\"\" neue\";=\"\" min-height:=\"\" 14px;\"=\"\"><br></p><ol class=\"ol1\" style=\"font-size: medium;\"><li class=\"li1\" style=\"margin: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \" helvetica=\"\" neue\";\"=\"\">Jauhkan kucing Anda di dalam ruangan. Semakin banyak waktu yang dia habiskan di luar, semakin banyak paparan penyakit menular.<br><br></li><li class=\"li1\" style=\"margin: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \" helvetica=\"\" neue\";\"=\"\">JANGAN PERNAH membawa kucing atau anak kucing baru ke dalam rumah dan membiarkannya berinteraksi dengan kucing dan anak kucing lain sampai Anda memilikinya, dan kucing penghuninya, diuji dan divaksinasi. Simpan pendatang baru di ruangan terpisah dengan mangkuk makanan dan air terpisah, dan kotak pasir, sampai dokter hewan memberi tahu Anda bahwa itu aman. Banyak kasus FeLV dan FIP yang kita lihat terjadi pada kucing dalam ruangan di rumah yang baru saja mengadopsi kucing atau anak kucing baru. Memisahkan pendatang baru juga mengurangi penyebaran parasit dan infeksi pernapasan. CUCI TANGAN SETELAH MENANGANI SALAH SATU PET JIKA TIDAK DIUJI DAN DIVAKSINASI. Juga cuci tangan Anda setelah mengelus kucing asing di luar rumah Anda.<br><br></li><li class=\"li1\" style=\"margin: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \" helvetica=\"\" neue\";\"=\"\">Ingat, 1 dari 10 kucing membawa salah satu virus ini, tampak sehat atau tidak. 1 dari 10 kucing itu mungkin ada di rumahmu sekarang. <br><br></li><li class=\"li1\" style=\"margin: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \" helvetica=\"\" neue\";\"=\"\">&nbsp;Jika hewan peliharaan Anda sakit dengan salah satu dari ketiga penyakit ini, ia akan mati. Kita mungkin bisa memperpanjang umur kucing tapi kita tidak bisa menyelamatkannya. Untuk umur panjang dan sehat, pastikan kucing Anda terlindungi!</li></ol><p style=\"margin: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal;\"><br></p><p style=\"margin: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal;\"><br></p><p style=\"margin: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal;\">Artikel Asal :&nbsp;<a href=\"https://www.bestfriendsvet.com/library/cats/the-top-three-fatal-feline-diseases/\" helvetica=\"\" neue\";=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);\"=\"\" style=\"background-color: rgb(255, 255, 255);\">https://www.bestfriendsvet.com/library/cats/the-top-three-fatal-feline-diseases/</a><span class=\"s1\" helvetica=\"\" neue\";\"=\"\">&nbsp;</span><br></p>', '1652110321_b8cf1f393b09325e9e23.jpg', '2022-05-09 22:32:01', '2022-05-09 22:45:38'),
(2, 1, 'Kehidupan Batin Kucing', '<p>Seperti yang diketahui siapa pun yang pernah menghabiskan waktu dengan kucing, sahabat kucing kita itu misterius—lebih dari anggota keluarga berbulu lainnya. Di sini John Bradshaw, penulis Cat Sense (Basic Books, 2013), mengajukan pilihan pertanyaan yang diajukan oleh editor Scientific American dan pengikut Twitter tentang banyak keanehan kucing. Bradshaw adalah rekan tamu di Fakultas Ilmu Kedokteran Hewan Universitas Bristol di Inggris, di mana ia mempelajari perilaku dan kesejahteraan kucing dan anjing, serta interaksi mereka dengan manusia.<br></p><p><br></p><p><b>Apakah kucing kurang dijinakkan daripada anjing? Apakah mereka menjadi lebih dijinakkan dari waktu ke waktu?</b></p><p>Kucing jauh lebih mirip dengan nenek moyang liar mereka daripada anjing dengan serigala, jadi anjing dalam pengertian itu lebih dijinakkan dari dua spesies. Saat mereka beradaptasi untuk hidup berdampingan dengan manusia, kucing menjadi lebih ramah satu sama lain dan lebih menerima orang, tetapi tidak ada bukti bahwa mereka telah berubah lebih dari itu selama beberapa ribu tahun terakhir.</p><p><b>Akankah kucing, yang membutuhkan daging, pada akhirnya berevolusi untuk memakan makanan yang lebih beragam seperti yang dilakukan anjing?</b></p><p>Kucing dan anjing termasuk dalam kelompok mamalia yang dikenal sebagai Karnivora, dan nenek moyang liar dari kedua spesies ini makan daging. Analisis DNA terbaru menunjukkan bahwa selama evolusi mereka, anjing telah memperoleh lebih banyak salinan dari apa yang disebut gen amilase, yang membuat enzim yang membantu memecah pati. Memiliki lebih banyak salinan gen ini memungkinkan anjing untuk makan makanan yang lebih omnivora. Sebaliknya, keluarga kucing, yang dikenal sebagai Felidae, kehilangan gen yang mengkode beberapa enzim kunci—termasuk yang memproduksi vitamin A, prostaglandin, dan asam amino taurin—pada awal evolusinya. Sementara anjing (dan manusia) dapat mensintesis zat ini dari prekursor nabati, kucing harus mendapatkannya dari daging. Untuk memperluas pola makan mereka, kucing harus mengembangkan sifat fisiologis yang memungkinkan mereka mensintesis ini dan nutrisi penting lainnya dari makanan nabati. Kapasitas ini belum muncul selama 10 juta tahun evolusi kucing, jadi sepertinya tidak mungkin muncul secara spontan pada kucing domestik kita.</p><p><b>Mengapa kucing mendengkur?</b><br></p><p>Kucing mendengkur karena mereka memiliki sesuatu untuk dikatakan, yang secara kasar diterjemahkan menjadi \"tolong diam dan perhatikan saya.\" Anak kucing mendengkur untuk membujuk ibu mereka agar terus menyusui mereka, dan kucing peliharaan mendengkur ketika mereka ingin dibelai. Getaran yang terpancar dari dengkuran tersebut tentunya memiliki efek menenangkan pada orang. Namun kucing yang sakit juga akan mendengkur sebagai teriakan minta tolong. Jadi mendengkur tidak selalu berarti \"Saya bahagia.\" Beberapa peneliti mengklaim bahwa getaran dari mendengkur dapat membantu menyembuhkan kerusakan tulang pada kucing yang terluka.</p><p><b>Bagaimana mereka mendengkur?</b></p><p>Dengkuran adalah vokalisasi yang tidak biasa, dibuat dengan menggetarkan pita suara bersama-sama daripada menggetarkannya dengan mendorong udara melewatinya, begitulah cara kucing—dan manusia—menghasilkan semua suara vokal mereka yang lain. Itu sebabnya kucing bisa mendengkur saat mereka menarik dan menghembuskan napas. Sebagian besar spesies kucing liar dapat mendengkur, termasuk cheetah. Pengecualian adalah kucing besar—singa, harimau, jaguar, dan macan tutul—yang kotak suaranya dimodifikasi agar bisa mengaum.</p><p><br></p><p>Artikel Asal :&nbsp;<a href=\"https://www.scientificamerican.com/article/the-inner-life-of-cats/\" target=\"_blank\">https://www.scientificamerican.com/article/the-inner-life-of-cats/</a>&nbsp;&nbsp;</p><div><br></div>', '1652110668_4e3b2e6bbea6635bc15d.jpg', '2022-05-09 22:37:48', '2022-05-09 22:45:16'),
(3, 1, 'Apakah Saya Bisa Tertular Penyakit Kucing Saya?', '<p>Meskipun sebagian besar penyakit menular kucing hanya menyerang kucing, beberapa penyakit ini dapat ditularkan dari kucing ke manusia. Penyakit yang dapat ditularkan dari hewan ke manusia disebut penyakit zoonosis. Meskipun tidak komprehensif, artikel ini menyoroti penyakit zoonosis paling umum yang mungkin dibawa oleh kucing dan tindakan pencegahan sederhana yang dapat Anda lakukan untuk mengurangi risiko tertular penyakit ini. Untuk informasi lebih lanjut tentang risiko spesifik, diagnosis, dan pengobatan penyakit zoonosis, hubungi dokter/profesional kesehatan Anda.<br></p><p><br></p><p><b>APA RESIKONYA?</b></p><p>Kemungkinan rata-rata orang tertular penyakit zoonosis dari kucing rendah, tetapi individu dengan sistem kekebalan yang belum matang atau lemah lebih rentan terhadap penyakit ini. Ini termasuk bayi, individu dengan sindrom imunodefisiensi (AIDS), orang tua, dan orang yang menjalani kemoterapi kanker atau menerima obat lain yang dapat menekan sistem kekebalan mereka.</p><p><b>PENYAKIT ZOONOTIK</b>&nbsp;</p><p>Infeksi Bakteri<br></p><p>Cat scratch disease (CSD) disebabkan oleh bakteri yang disebut Bartonella henselae, yang mungkin terbawa dalam air liur kucing yang terinfeksi dan di dalam tubuh kutu kucing. Sesuai dengan namanya, infeksi bakteri ini biasanya ditularkan dari kucing ke manusia melalui cakaran, meskipun dapat juga ditularkan melalui luka gigitan dan saat kucing menjilati luka terbuka seseorang. Di antara kucing, bakteri ini paling sering ditularkan melalui gigitan kutu kucing yang terinfeksi, dan juga dapat ditemukan di kotoran kutu ini, yang dapat menjadi sumber infeksi jika terkena luka terbuka pada kucing atau manusia. .</p><p><br></p><p>Orang dengan CSD biasanya mengalami pembengkakan dan mungkin lecet di tempat gigitan atau goresan. Kelenjar getah bening di daerah luka dapat membengkak dan menjadi nyeri, dan individu yang terkena mungkin mengalami demam, sakit kepala, nyeri otot dan persendian, kelelahan, dan nafsu makan yang buruk. Orang dewasa yang sehat umumnya pulih tanpa efek yang bertahan lama, tetapi mungkin perlu beberapa bulan agar penyakitnya hilang sepenuhnya. Orang dengan sistem kekebalan yang terganggu dapat menderita konsekuensi yang lebih parah, termasuk infeksi pada mata, otak, dan jantung. Kasus CSD yang parah mungkin memerlukan terapi antibiotik untuk diselesaikan.</p><p><br></p><p>Sekitar 40 persen kucing terinfeksi Bartonella henselae, tetapi sebagian besar tidak menunjukkan tanda-tanda penyakit. Antibiotik tidak andal menyembuhkan infeksi pada kucing ini dan saat ini tidak direkomendasikan. Bagi manusia, menghindari cakaran dan gigitan (misalnya, dengan tidak membiarkan anak-anak bermain kasar dengan kucing), mencuci tangan setelah bermain dengan kucing, mengendalikan kutu, dan memelihara kucing di dalam ruangan semuanya mengurangi risiko CSD. Karena sebagian besar kasus CSD terjadi akibat kontak dengan anak kucing di bawah usia satu tahun, orang dengan gangguan kekebalan harus menghindari kontak tersebut.</p><p><br></p><p>Pasteurella multocida adalah bakteri yang ditemukan di mulut antara 70 dan 90 persen kucing, dan telah ditemukan di antara 50 dan 80 persen gigitan kucing pada manusia yang menjadi cukup serius untuk mencari perhatian medis. Gigitan kucing yang terinfeksi organisme ini dapat menimbulkan rasa sakit, bengkak, dan kemerahan di lokasi luka dalam waktu 24 hingga 48 jam. Luka gigitan kucing yang terinfeksi Pasteurella berhasil diobati dengan terapi antibiotik di sebagian besar kasus, tetapi komplikasi yang lebih serius, seperti penyebaran bakteri melalui aliran darah dan infeksi katup jantung, dapat terjadi pada kasus yang jarang terjadi.</p><p><br></p><p>Keracunan Salmonella, juga disebut salmonellosis, disebabkan oleh sekelompok bakteri yang disebut Salmonella, dan dapat menyebabkan diare, demam, dan sakit perut mulai satu hingga tiga hari setelah infeksi. Orang biasanya tertular salmonellosis dengan makan makanan yang terkontaminasi, seperti ayam atau telur setengah matang, tetapi ada kemungkinan tertular penyakit dari kucing yang terinfeksi, yang dapat membawa bakteri Salmonella dan menyebarkannya di tinja mereka. Meskipun salmonellosis biasanya sembuh dengan sendirinya, beberapa individu memerlukan perhatian medis untuk mengatasi diare parah atau efek infeksi pada organ selain saluran pencernaan.</p><p><br></p><p>Salmonella lebih sering ditemukan pada kucing yang memakan daging mentah atau burung dan hewan liar, sehingga pemilik dapat mengurangi risiko salmonellosis pada diri mereka sendiri dan kucing mereka dengan memelihara kucing di dalam ruangan dan memberi mereka makan makanan yang dimasak atau diproses secara komersial. Mengenakan sarung tangan saat membersihkan kotak kotoran atau berkebun (jika kucing di luar rumah buang air besar di tanah) dan mencuci tangan dengan bersih setelah aktivitas ini juga dianjurkan.</p><p><br></p><p>Infeksi parasit</p><p>Kutu adalah parasit eksternal kucing yang paling umum, dan gigitannya dapat menyebabkan gatal dan peradangan pada manusia dan kucing. Kutu juga dapat menjadi vektor CSD dan penyakit zoonosis lainnya. Kucing yang terinfeksi kutu dapat terinfeksi cacing pita dari kutu yang tertelan saat perawatan. Meskipun tidak umum, orang juga dapat terinfeksi cacing pita dengan menelan kutu secara tidak sengaja.</p><p><br></p><p>Artikel Asal :&nbsp;<a href=\"https://www.vet.cornell.edu/departments-centers-and-institutes/cornell-feline-health-center/health-information/feline-health-topics/zoonotic-disease-what-can-i-catch-my-cat\" target=\"_blank\" style=\"background-color: rgb(255, 255, 255);\">https://www.vet.cornell.edu/departments-centers-and-institutes/cornell-feline-health-center/health-information/feline-health-topics/zoonotic-disease-what-can-i-catch-my-cat&nbsp;</a><br></p>', '1652110892_cc50e9ce7e4d1ee83375.jpg', '2022-05-09 22:41:32', '2022-05-09 22:45:06'),
(4, 1, 'Mengapa kucing saya membangunkan saya sepagi ini, dan apa yang bisa saya lakukan?', '<p>Anda memiliki pertemuan penting di pagi hari dan kucing Anda membangunkan Anda pada jam 4 pagi. Mengapa? Dan apa yang dapat Anda lakukan untuk menghentikan hal ini terjadi lagi?</p><p>Meskipun kucing berevolusi untuk aktivitas malam hari, selama domestikasi mereka telah beradaptasi dengan gaya hidup manusia.<br></p><p>Kucing domestik cenderung paling aktif di pagi dan sore hari, bukan di tengah malam. Mereka juga mengubah siklus aktivitas mereka agar sesuai dengan teman serumah manusia mereka.<br></p><p>Ini berarti jika Anda tidur di malam hari, kucing Anda juga harus beristirahat. Dan banyak orang tidur dengan kucing mereka. Dalam sebuah survei terhadap wanita di AS, sekitar 30% tidur dengan setidaknya satu kucing.<br></p><p>Jadi mengapa beberapa kucing ingin bermain di larut malam?<br></p><p>Alasan mengapa kucing membangunkan Anda sering kali membantu Anda memahami cara menghentikannya. Berikut adalah tiga alasan kucing Anda mungkin membangunkan Anda dan cara mengatasi masalah tersebut.</p><p><b>1. Mereka lapar</b></p><p>Ini adalah salah satu alasan paling umum. Sayangnya, salah satu hal pertama yang akan dilakukan orang yang mengantuk adalah memberi makan kucingnya. Ini menghargai perilaku tersebut dan membuat kucing lebih mungkin untuk mengulanginya.</p><p>Untuk mulai mengatasi masalah ini, pastikan kucing Anda cukup makan sepanjang hari. Anda dapat memberi mereka makan atau camilan yang memuaskan tepat sebelum Anda pergi tidur.</p><p><br></p><p>Jika Anda biasanya memberi makan kucing di pagi hari, Anda perlu memastikan bahwa kucing Anda tidak mengaitkan waktu bangun dengan waktu sarapan. Sisakan jarak antara saat Anda bangun dari tempat tidur dan saat Anda memberi makan kucing sarapan – usahakan setidaknya setengah jam.</p><p>Anda juga dapat melatih kucing untuk mengasosiasikan sesuatu yang lain dengan diberi makan, seperti mengatakan “waktu sarapan!”.</p><p><b>2. Mereka tidak memiliki rutinitas</b><br></p><p>Kucing menyukai prediktabilitas.</p><p>Menjaga rutinitas yang teratur bahkan telah dikaitkan dengan penurunan tingkat stres pada kucing.</p><p>Untuk mempertahankan rutinitas, pertahankan waktu makan, waktu bermain, dan perawatan diri pada waktu yang sama setiap hari.</p><p>Kosongkan kotoran dengan interval yang teratur dan dapat diprediksi (kotoran atau kotoran yang terganggu juga bisa menjadi alasan kucing membangunkan Anda). Cobalah untuk tidak memindahkan baki, mangkuk, atau tiang gores di sekitar kecuali diperlukan.</p><p>Jika sesuatu berubah di lingkungan mereka – Anda pergi berlibur, memindahkan perabotan, atau memiliki tamu atau hewan peliharaan baru di rumah – kucing Anda mungkin akan kembali ke panggilan bangun pagi. Ini khas untuk kucing.</p><p>Pertahankan rutinitas sekonsisten mungkin dan pada akhirnya kucing Anda akan terbiasa dengan normal baru.</p><p><b>3. Mereka tidak menghabiskan energi mereka sepanjang hari</b></p><p>Sudah menjadi rahasia umum bahwa kucing suka tidur, tetapi mereka juga suka bermain dan menggerakkan tubuh mereka seperti kita.</p><p>Penting untuk memberi kucing Anda akses ke berbagai mainan dan sumber daya di sekitar rumah untuk berinteraksi, terutama jika Anda tidak sering di rumah.<br></p><p>Tiang gores menawarkan kucing tempat untuk memanjat dan meregangkan tubuh. Bola, mainan lunak dan bermotor memberi mereka kesempatan untuk bermain dan berolahraga.</p><p>Saat Anda di rumah, libatkan kucing Anda dengan mainan interaktif (seperti tongkat kucing) atau mainkan permainan kejar-kejaran di sekitar rumah. Anda bahkan dapat mencoba mengarang permainan yang akan disukai kucing Anda.</p><p>Kucing mudah bosan. Pertahankan variasi dalam waktu bermain Anda. Dan jangan bermain dengan kucing Anda di jam sebelum Anda ingin tidur. Idealnya, sesi bermain sebelum Anda pergi keluar dan setelah Anda tiba di rumah akan membantu menjaga kucing Anda tetap tenang semalaman.</p><p><b>Tolong! Saya telah membuat perubahan ini dan kucing saya masih membangunkan saya!</b></p><p>Kucing Anda mungkin masih membangunkan Anda untuk beberapa waktu. Perilaku ini bahkan bisa menjadi lebih buruk dalam jangka pendek saat kucing Anda menyesuaikan diri. Kuncinya adalah mengabaikan perilaku kucing Anda di malam hari atau di pagi hari. Jangan bangun dan, jika bisa, jangan berinteraksi dengan kucing Anda saat mereka membangunkan Anda.</p><p>Jika Anda sudah mencoba segalanya dan kucing Anda masih membangunkan Anda, inilah saatnya untuk pergi menemui dokter hewan Anda. Mungkin ada alasan kesehatan yang menyebabkan perilaku tersebut.</p><p>Mudah-mudahan, Anda dan kucing Anda dapat mencapai kesepakatan tentang kapan waktu tidur dan waktu bangun. Sangat mungkin untuk mencintai kucing Anda dan tetap bisa tidur.</p>', '1652111438_d66c77bdc601e2145750.jpg', '2022-05-09 22:50:38', '2022-05-09 22:51:00'),
(5, 1, 'Apa yang perlu diketahui tentang memberi makan kucing Anda sesuai resep makanan ', '<p>Dengan begitu banyak makanan kucing yang berbeda di pasaran, mungkin sulit untuk memilih pilihan terbaik untuk teman kucing Anda. Untuk kucing dengan penyakit dan kondisi kronis, makanan resep adalah pilihan yang bagus untuk memberi kucing Anda makanan yang sesuai dengan kebutuhannya.</p><p>Diet ini dapat diresepkan oleh dokter hewan untuk berbagai kondisi, seperti penyakit ginjal kronis dan diabetes, dan kebutuhan medis lainnya, seperti penurunan berat badan dan perawatan gigi.</p><p>Sementara diet resep adalah alat penting untuk mengelola kebutuhan medis kucing, mereka hanya boleh diberi makan di bawah bimbingan dokter hewan, menurut Dr. Debra Zoran, seorang profesor di Texas A&M College of Veterinary Medicine & Biomedical Sciences.</p><p>\"Makanan resep harus diberi makan seperti obat dan hanya diberikan sebagaimana dimaksud,\" kata Zoran. “Makanan ini memiliki tujuan tertentu dan dimaksudkan untuk diberikan hanya kepada kucing dengan penyakit tertentu.”</p><p>Sementara beberapa orang mungkin berpikir bahwa memberi makan makanan resep kucing sehat yang dimaksudkan untuk kondisi tertentu akan membantu mencegah kondisi itu, itu tidak terjadi; pada kenyataannya, ini dapat menyebabkan efek samping negatif yang dapat menyebabkan masalah kesehatan yang serius.</p><p>Misalnya, resep diet untuk penyakit ginjal kronis (CKD) biasanya mengandung kurang dari setengah jumlah protein yang biasanya ada dalam makanan kucing karena kucing dengan CKD lebih sulit mengeluarkan produk limbah protein dari ginjal mereka. Memberi makan makanan ini untuk kucing tanpa CKD, bagaimanapun, tidak akan menyediakan protein yang cukup dan akan memiliki keseimbangan mineral yang berubah dibandingkan dengan apa yang dibutuhkan kucing yang sehat untuk diet yang lengkap dan seimbang.</p><p>“Kucing sehat yang diberi resep diet CKD akan mulai kehilangan massa ototnya karena tubuh mereka akan menggunakan ototnya sendiri untuk menggantikan apa yang hilang dari dietnya,” kata Zoran. “Mereka juga akan sering menambah berat badan karena penambahan lemak dan karbohidrat dalam makanan yang ada untuk menggantikan protein.”</p><p>Konsekuensi potensial membuatnya penting bagi pemilik dengan banyak kucing untuk memberi makan masing-masing secara terpisah jika hanya satu yang menjalani diet resep atau setidaknya berbicara dengan dokter hewan tentang situasi diet di rumah Anda.<br></p><p>Untungnya, Anda tidak perlu khawatir jika salah satu kucing sesekali menyusup ke makanan yang lain.<br></p><p>“Tidak masalah jika kucing sehat Anda makan beberapa makanan resep sesekali — sama seperti kucing dengan penyakit tertentu tidak akan buruk untuk makan beberapa makanan non-resep sesekali,” kata Zoran. “Pada akhirnya, banyak dari diet khusus tidak ditujukan untuk kucing dewasa yang normal dan sehat sebagai diet pemeliharaan.</p><p>\"Namun, itu tidak berlaku untuk semua resep diet,\" katanya. “Misalnya, resep diet untuk kucing dengan alergi atau masalah usus yang lengkap dan seimbang dan dapat diberikan kepada kucing normal yang sehat. Perbedaannya adalah bahwa makanannya mungkin memiliki sumber protein yang berbeda (daging rusa untuk kucing yang alergi daging sapi) atau campuran bahan yang lebih mudah dicerna (untuk kucing dengan masalah usus). Meskipun diet ini aman untuk diberikan kepada kucing mana pun, diet ini lebih mahal dan tidak perlu untuk kucing yang tidak memiliki masalah kesehatan.”</p><p>Jika dokter hewan menentukan bahwa kucing Anda akan mendapat manfaat dari makan makanan resep, Anda mungkin dapat membeli makanan langsung melalui klinik mereka. Jika tidak, dokter hewan dapat memberikan kartu resep yang dapat digunakan untuk membeli makanan di sebagian besar toko hewan peliharaan dan banyak pengecer online.<br></p><p>Apakah kucing Anda didiagnosis dengan penyakit tertentu atau hanya membutuhkan gaya hidup yang lebih sehat, makanan resep dapat menjadi tambahan yang bermanfaat untuk perawatan medis reguler mereka. Terkadang sesuatu yang sederhana seperti mengganti makanan bahkan bisa menjadi kunci untuk mendapatkan lebih banyak tahun dengan teman yang penuh kasih Anda.</p><p>Artikel asal : <a href=\"https://columbiabasinherald.com/news/2022/may/09/feline-nutrition-what-know-about-feeding-your-cat-/\" target=\"_blank\">https://columbiabasinherald.com/news/2022/may/09/feline-nutrition-what-know-about-feeding-your-cat-/</a> </p>', '1652191138_e3ced04fbbb004dd3a83.jpg', '2022-05-10 20:58:58', '2022-05-12 17:28:10'),
(6, 1, 'Bahaya Hairballs ', '<p>Segumpal besar bulu yang tertelan dapat menyumbat saluran usus kucing dan menimbulkan ancaman yang mematikan. Seringkali, kucing Anda yang rewel akan melakukan hal yang mengkhawatirkan dan agak menjijikkan. Dia akan bangun dari tidur siang yang tenang, bangkit dengan cakarnya, muntah-muntah dengan kejang selama satu atau dua saat, dan memuntahkan apa yang sekilas tampak seperti gumpalan lembap. Apa yang dikeluarkan hewan itu — di tengah lantai dapur Anda atau, lebih buruk lagi, di tengah permadani Persia Anda yang berharga — adalah <i>trichobezoar</i>, gumpalan bulu yang tidak tercerna yang biasa disebut sebagai <i><b>hairballs</b></i>.</p><p><br></p><p>Terlepas dari istilahnya, <b><i>hairball</i></b> yang keluar biasanya tidak bulat. Mereka sering ramping dan silindris, berbentuk lebih seperti cerutu atau sosis daripada bola. Menurut Richard Goldstein, DVM, seorang profesor kedokteran hewan kecil di Fakultas Kedokteran Hewan Universitas Cornell, bentuk memanjang&nbsp;<span style=\"font-weight: bolder;\"><i>hairball</i></span>&nbsp;yang dimuntahkan diberikan oleh tabung makanan sempit (kerongkongan) di mana ia berkembang atau melewatinya. perjalanan dari perut kucing ke dunia luar. Namun, dia mencatat,&nbsp;<span style=\"font-weight: bolder;\"><i>hairball</i></span>&nbsp;yang tidak keluar dan tertinggal di perut memang akan berbentuk bulat — “seperti spons atau kaus kaki yang digulung,” katanya.</p><p><br></p><p><i style=\"font-weight: bolder;\">Hairball&nbsp;</i>yang dimuntahkan ukurannya bervariasi; meskipun biasanya panjangnya sekitar satu inci, panjangnya bisa mencapai lima inci dan tebal satu inci. Warnanya terutama seperti bulu kucing, digelapkan oleh warna makanan hewan dan berbagai sekresi lambung, seperti empedu hijau. Materi yang dikeluarkan biasanya akan memiliki bau yang tidak menyenangkan tetapi dapat ditoleransi.</p><p><br></p><p><b>Potensi Bahaya</b></p><p><i style=\"font-weight: bolder;\">Hairball&nbsp;</i>t adalah produk sampingan yang tidak menyenangkan dari kebiasaan normal. Saat kucing Anda merawat dirinya sendiri, ia menelan banyak bulu yang lepas. Ini terjadi karena tonjolan kecil ke belakang (papil) yang membuat permukaan lidahnya kasar mendorong bulu ke tenggorokannya dan masuk ke perutnya. Sayangnya, Dr. Goldstein menjelaskan, komponen struktural utama bulu – zat protein yang keras dan tidak larut yang disebut keratin – tidak dapat dicerna. Sementara sebagian besar bulu yang tertelan akhirnya melewati saluran pencernaan hewan dan dikeluarkan utuh dalam tinja, beberapa di antaranya tetap berada di perut dan secara bertahap terakumulasi menjadi gumpalan lembab -<span style=\"font-weight: bolder;\"><i>hairball</i></span>.</p><p><br></p><p>Bukan hal yang aneh, kata Dr. Goldstein, bagi kucing untuk memuntahkan&nbsp;<span style=\"font-weight: bolder;\"><i>hairball</i></span>&nbsp;satu atau dua minggu sekali. Selain ketidaknyamanan bagi pemilik, ini tidak perlu dikhawatirkan. Namun, gumpalan bulu kusut dapat menimbulkan ancaman kesehatan yang serius jika tumbuh terlalu besar untuk melewati <i>sfingter</i> sempit yang mengarah baik dari kerongkongan ke perut atau dari perut ke saluran usus. Yang juga mengancam, katanya, adalah&nbsp;<span style=\"font-weight: bolder;\"><i>hairball</i></span>&nbsp;yang berhasil masuk ke usus kecil dan tersangkut erat di sana. “Ini jarang terjadi,” dia mencatat, “tetapi sangat serius ketika itu benar-benar terjadi. Tanpa intervensi bedah, itu bisa berakibat fatal.”</p><p><br></p><p>Artikel asal :&nbsp;https://www.vet.cornell.edu/departments-centers-and-institutes/cornell-feline-health-center/health-information/feline-health-topics/danger-hairballs&nbsp;</p>', '1652351765_490bfa20d4969cd80dcf.jpg', '2022-05-12 17:36:05', '2022-05-12 17:36:05');

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Site Administrator'),
(2, 'user', 'Regular User');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 1),
(1, 11),
(2, 2),
(2, 3),
(2, 5),
(2, 6),
(2, 7),
(2, 8),
(2, 9),
(2, 10),
(2, 12);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'nana@mail.com', 1, '2022-02-09 23:01:18', 1),
(2, '::1', 'nana@mail.com', 1, '2022-02-09 23:07:55', 1),
(3, '::1', 'nana@mail.com', 1, '2022-02-10 01:39:25', 1),
(4, '::1', 'hanaha@gmail.com', 2, '2022-02-10 01:55:11', 1),
(5, '::1', 'nana@mail.com', 1, '2022-02-10 01:56:18', 1),
(6, '::1', 'hanaha@gmail.com', 2, '2022-02-10 01:56:37', 1),
(7, '::1', 'nana@mail.com', 1, '2022-02-10 02:06:17', 1),
(8, '::1', 'hanaha@gmail.com', 2, '2022-02-10 02:09:16', 1),
(9, '::1', 'nana@mail.com', 1, '2022-02-10 02:09:36', 1),
(10, '::1', 'hanaha@gmail.com', 2, '2022-02-10 02:12:04', 1),
(11, '::1', 'nana@mail.com', 1, '2022-02-10 07:25:55', 1),
(12, '::1', 'hanaha@gmail.com', 2, '2022-02-10 07:26:12', 1),
(13, '::1', 'nana@mail.com', 1, '2022-02-11 09:31:08', 1),
(14, '::1', 'hanaha@gmail.com', 2, '2022-02-11 21:10:43', 1),
(15, '::1', 'hanaha@gmail.com', 2, '2022-02-15 21:59:05', 1),
(16, '::1', 'nana@mail.com', 1, '2022-02-15 22:25:53', 1),
(17, '::1', 'nana@mail.com', 1, '2022-02-16 06:02:35', 1),
(18, '::1', 'nana@mail.com', 1, '2022-02-16 08:39:10', 1),
(19, '::1', 'nana@mail.com', 1, '2022-02-16 21:59:55', 1),
(20, '::1', 'Yamazaki25', NULL, '2022-02-17 11:26:53', 0),
(21, '::1', 'yamazaki25', NULL, '2022-02-17 11:27:05', 0),
(22, '::1', 'hanaha@gmail.com', 2, '2022-02-17 11:27:13', 1),
(23, '::1', 'nana@mail.com', 1, '2022-02-17 16:24:18', 1),
(24, '::1', 'hanaha@gmail.com', 2, '2022-02-17 16:55:21', 1),
(25, '::1', 'hanaha@gmail.com', 2, '2022-02-17 17:10:53', 1),
(26, '::1', 'nana@mail.com', 1, '2022-02-17 17:15:24', 1),
(27, '::1', 'leeseona25', NULL, '2022-03-20 15:23:59', 0),
(28, '::1', 'isnaini25', NULL, '2022-03-20 15:24:05', 0),
(29, '::1', 'leeseona25', NULL, '2022-03-20 15:24:48', 0),
(30, '::1', 'leeseona25', NULL, '2022-03-20 15:24:59', 0),
(31, '::1', 'leeseona25', NULL, '2022-03-20 15:25:08', 0),
(32, '::1', 'nana@mail.com', 1, '2022-03-20 15:25:24', 1),
(33, '::1', 'hanaha@gmail.com', 2, '2022-03-20 15:27:10', 1),
(34, '::1', 'nana@mail.com', 1, '2022-03-20 21:13:51', 1),
(35, '::1', 'leeseona25', NULL, '2022-03-23 17:07:08', 0),
(36, '::1', 'nana@mail.com', 1, '2022-03-23 17:07:16', 1),
(37, '::1', 'yamazaki25', NULL, '2022-03-23 17:17:23', 0),
(38, '::1', 'yamazaki25', NULL, '2022-03-23 17:17:32', 0),
(39, '::1', 'yamazaki25', NULL, '2022-03-23 17:17:56', 0),
(40, '::1', 'yamazaki25', NULL, '2022-03-23 17:18:06', 0),
(41, '::1', 'yamazaki', NULL, '2022-03-23 17:18:18', 0),
(42, '::1', 'hanaha@gmail.com', 2, '2022-03-23 17:18:29', 1),
(43, '::1', 'nana@mail.com', 1, '2022-03-23 23:36:17', 1),
(44, '::1', 'hanaha@gmail.com', 2, '2022-03-29 11:17:22', 1),
(45, '::1', 'leeseona25', NULL, '2022-03-29 11:17:39', 0),
(46, '::1', 'leeseona25', NULL, '2022-03-29 11:17:45', 0),
(47, '::1', 'nana@mail.com', 1, '2022-03-29 11:17:52', 1),
(48, '::1', 'hanaha@gmail.com', 2, '2022-03-30 08:08:26', 1),
(49, '::1', 'leeseona25', NULL, '2022-03-30 08:08:41', 0),
(50, '::1', 'nana@mail.com', 1, '2022-03-30 08:08:48', 1),
(51, '::1', 'hanaha@gmail.com', 2, '2022-03-30 08:09:13', 1),
(52, '::1', 'hanaha@gmail.com', 2, '2022-03-30 19:20:38', 1),
(53, '::1', 'leeseona25', NULL, '2022-04-05 14:52:31', 0),
(54, '::1', 'leeseona25', NULL, '2022-04-05 14:56:16', 0),
(55, '::1', 'leeseona25', NULL, '2022-04-05 14:56:24', 0),
(56, '::1', 'nana@mail.com', 1, '2022-04-05 14:56:29', 1),
(57, '::1', 'leeseona25', NULL, '2022-04-13 13:10:19', 0),
(58, '::1', 'leeseona25', NULL, '2022-04-13 13:10:26', 0),
(59, '::1', 'leeseona25', NULL, '2022-04-13 13:10:33', 0),
(60, '::1', 'leeseona25', NULL, '2022-04-13 13:10:39', 0),
(61, '::1', 'leeseona25', NULL, '2022-04-13 13:10:47', 0),
(62, '::1', 'leeseona25', NULL, '2022-04-13 13:10:51', 0),
(63, '::1', 'leeseona25', NULL, '2022-04-13 13:11:02', 0),
(64, '::1', 'nana@mail.com', 1, '2022-04-13 13:11:12', 1),
(65, '::1', 'hanaha@gmail.com', 2, '2022-04-13 13:11:34', 1),
(66, '::1', 'leeseona25', NULL, '2022-04-15 13:40:31', 0),
(67, '::1', 'leeseona25', NULL, '2022-04-15 13:40:36', 0),
(68, '::1', 'nana@mail.com', 1, '2022-04-15 13:40:41', 1),
(69, '::1', 'hanaha@gmail.com', 2, '2022-04-15 14:00:08', 1),
(70, '::1', 'leeseona25', NULL, '2022-04-15 14:00:59', 0),
(71, '::1', 'nana@mail.com', 1, '2022-04-15 14:01:03', 1),
(72, '::1', 'hanaha@gmail.com', 2, '2022-04-15 14:02:30', 1),
(73, '::1', 'nana@mail.com', 1, '2022-04-15 14:21:06', 1),
(74, '::1', 'nana@mail.com', 1, '2022-04-15 20:40:57', 1),
(75, '::1', 'nana@mail.com', 1, '2022-04-15 20:42:56', 1),
(76, '::1', 'nana@mail.com', 1, '2022-04-19 23:13:54', 1),
(77, '::1', 'nana@mail.com', 1, '2022-04-20 15:55:12', 1),
(78, '::1', 'nana@mail.com', 1, '2022-04-20 19:28:43', 1),
(79, '::1', 'nana@mail.com', 1, '2022-04-21 23:25:22', 1),
(80, '::1', 'nana@mail.com', 1, '2022-04-22 22:39:49', 1),
(81, '::1', 'nana@mail.com', 1, '2022-04-23 11:18:00', 1),
(82, '::1', 'nana@mail.com', 1, '2022-04-24 09:19:27', 1),
(83, '::1', 'nana@mail.com', 1, '2022-04-24 13:08:12', 1),
(84, '::1', 'nana@mail.com', 1, '2022-04-24 13:20:16', 1),
(85, '::1', 'nana@mail.com', 1, '2022-04-24 19:14:04', 1),
(86, '::1', 'nana@mail.com', 1, '2022-04-24 19:42:26', 1),
(87, '::1', 'hanaha@gmail.com', 2, '2022-04-24 20:56:01', 1),
(88, '::1', 'nana@mail.com', 1, '2022-04-24 21:00:09', 1),
(89, '::1', 'nana@mail.com', 1, '2022-04-24 21:02:18', 1),
(90, '::1', 'yamzaki@gmail.com', 2, '2022-04-24 21:36:17', 1),
(91, '::1', 'leeseona25', NULL, '2022-04-25 10:03:32', 0),
(92, '::1', 'nana@mail.com', 1, '2022-04-25 10:03:37', 1),
(93, '::1', 'nana@mail.com', 1, '2022-04-25 10:20:09', 1),
(94, '::1', 'yamzaki@gmail.com', 2, '2022-04-27 14:18:35', 1),
(95, '::1', 'nana@mail.com', 1, '2022-04-27 21:35:33', 1),
(96, '::1', 'user123@mail.com', 3, '2022-04-27 23:15:49', 1),
(97, '::1', 'user123', NULL, '2022-04-27 23:18:57', 0),
(98, '::1', 'user123@mail.com', 3, '2022-04-27 23:19:03', 1),
(99, '::1', 'nana@mail.com', 1, '2022-04-27 23:19:49', 1),
(100, '::1', 'nana@mail.com', 1, '2022-04-27 23:24:12', 1),
(101, '::1', 'nana@mail.com', 1, '2022-04-28 06:16:08', 1),
(102, '::1', 'nana@mail.com', 1, '2022-04-28 07:01:26', 1),
(103, '::1', 'nana@mail.com', 1, '2022-04-28 07:28:45', 1),
(104, '::1', 'nana@mail.com', 1, '2022-04-28 08:57:07', 1),
(105, '::1', 'nana@mail.com', 1, '2022-05-08 07:12:02', 1),
(106, '::1', 'nana@mail.com', 1, '2022-05-08 23:07:01', 1),
(107, '::1', 'nana@mail.com', 1, '2022-05-09 22:07:14', 1),
(108, '::1', 'yamzaki@gmail.com', 2, '2022-05-09 22:44:02', 1),
(109, '::1', 'user123@mail.com', 3, '2022-05-09 23:10:30', 1),
(110, '::1', 'loidforger', NULL, '2022-05-09 23:19:29', 0),
(111, '::1', 'loidforger', NULL, '2022-05-09 23:19:34', 0),
(112, '::1', 'loidforger', NULL, '2022-05-09 23:19:40', 0),
(113, '::1', 'loidforger', NULL, '2022-05-09 23:19:50', 0),
(114, '::1', 'yamzaki@gmail.com', 2, '2022-05-09 23:20:21', 1),
(115, '::1', 'nana@mail.com', 1, '2022-05-09 23:22:37', 1),
(116, '::1', 'isnaini.25@students.amikom.ac.id', 1, '2022-05-10 20:52:29', 1),
(117, '::1', 'isnaini.25@students.amikom.ac.id', 1, '2022-05-12 09:30:32', 1),
(118, '::1', 'yamazaki', NULL, '2022-05-12 09:30:54', 0),
(119, '::1', 'yamzaki@gmail.com', 2, '2022-05-12 09:30:59', 1),
(120, '::1', 'isnaini.25@students.amikom.ac.id', 1, '2022-05-12 11:20:52', 1),
(121, '::1', 'isnaini.25@students.amikom.ac.id', 1, '2022-05-12 17:27:28', 1),
(122, '103.144.170.61', 'yamzaki@gmail.com', 2, '2022-05-12 20:24:39', 1),
(123, '103.144.170.61', 'yamzaki@gmail.com', 2, '2022-05-12 20:28:08', 1),
(124, '103.144.170.61', 'yamzaki@gmail.com', 2, '2022-05-12 20:28:12', 1),
(125, '103.144.170.61', 'loidforger@mail.com', 5, '2022-05-12 21:16:39', 1),
(126, '103.144.170.61', 'yamzaki@gmail.com', 2, '2022-05-13 09:08:43', 1),
(127, '103.144.170.63', 'yamzaki@gmail.com', 2, '2022-05-13 13:29:04', 1),
(128, '114.125.24.100', 'ramasafitri10@gmail.com', 6, '2022-05-13 20:20:05', 1),
(129, '103.144.170.63', 'nurrohmahtitis23@gmail.com', 7, '2022-05-14 16:24:51', 1),
(130, '114.10.10.104', 'pramudyaikap@gmail.com', 8, '2022-05-14 20:20:33', 1),
(131, '103.144.170.63', 'yamzaki@gmail.com', 2, '2022-05-16 14:33:50', 1),
(132, '103.144.170.63', 'isnaini.25@students.amikom.ac.id', 1, '2022-05-18 11:24:36', 1),
(133, '103.144.170.63', 'user123', NULL, '2022-05-18 11:43:16', 0),
(134, '103.144.170.63', 'user123@mail.com', 3, '2022-05-18 11:43:22', 1),
(135, '103.144.170.63', 'user123@mail.com', 3, '2022-05-18 13:44:57', 1),
(136, '103.144.170.63', 'user123@mail.com', 3, '2022-05-18 14:27:04', 1),
(137, '103.144.170.63', 'isnaini.25@students.amikom.ac.id', 1, '2022-05-18 20:05:16', 1),
(138, '103.144.170.63', 'isnaini.25@students.amikom.ac.id', 1, '2022-05-18 20:05:43', 1),
(139, '36.73.132.217', 'mailmiftahulhuda@gmail.com', 9, '2022-05-18 20:24:23', 1),
(140, '114.125.57.220', 'Haeleeylac@gmail.com', 10, '2022-05-18 21:34:01', 1),
(141, '103.144.170.63', 'isnaini.25@students.amikom.ac.id', 1, '2022-05-20 20:25:06', 1),
(142, '103.144.170.63', 'user123@mail.com', 3, '2022-05-21 19:39:44', 1),
(143, '103.144.170.25', 'isnaini.25@students.amikom.ac.id', 1, '2022-05-23 12:39:32', 1),
(144, '103.144.170.25', 'loidforger', NULL, '2022-05-23 12:43:28', 0),
(145, '103.144.170.25', 'loidforger@mail.com', 5, '2022-05-23 12:43:32', 1),
(146, '103.144.170.9', 'isnaini.25@students.amikom.ac.id', 1, '2022-05-26 21:22:31', 1),
(147, '103.144.170.37', 'yamazaki', NULL, '2022-05-27 12:29:40', 0),
(148, '103.144.170.37', 'yamzaki@gmail.com', 2, '2022-05-27 12:29:45', 1),
(149, '::1', 'isnainisolikhah@gmail.com', 11, '2022-06-25 21:09:36', 1),
(150, '::1', 'isnaini.25@students.amikom.ac.id', 1, '2022-06-25 21:11:48', 1),
(151, '::1', 'isnainisolikhah@gmail.com', 11, '2022-06-25 22:01:16', 1),
(152, '::1', 'user', NULL, '2022-06-28 10:59:53', 0),
(153, '::1', 'user123@mail.com', 3, '2022-06-28 11:00:49', 1),
(154, '127.0.0.1', 'user123', NULL, '2022-06-29 14:46:09', 0),
(155, '127.0.0.1', 'user123@mail.com', 3, '2022-06-29 14:46:14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `basis_pengetahuan`
--

CREATE TABLE `basis_pengetahuan` (
  `id_pengetahuan` int(11) NOT NULL,
  `id_penyakit` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL,
  `cf` float NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basis_pengetahuan`
--

INSERT INTO `basis_pengetahuan` (`id_pengetahuan`, `id_penyakit`, `id_gejala`, `cf`, `created_at`, `updated_at`) VALUES
(1, 1, 28, 0.6, '2022-04-28 07:03:51', '2022-05-18 11:20:28'),
(2, 1, 29, 0.6, '2022-04-28 07:03:51', '2022-05-18 11:20:28'),
(3, 1, 27, 0.6, '2022-04-28 07:03:51', '2022-05-18 11:20:28'),
(4, 2, 1, 0.6, '2022-04-28 07:43:33', '2022-05-18 11:13:33'),
(5, 2, 2, 0.4, '2022-04-28 07:43:33', '2022-05-18 11:13:33'),
(6, 4, 9, 0.4, '2022-04-28 07:45:31', '2022-05-18 11:18:19'),
(7, 4, 10, 0.8, '2022-04-28 07:45:31', '2022-05-18 11:18:19'),
(8, 4, 11, 1, '2022-04-28 07:45:31', '2022-05-18 11:18:19'),
(9, 4, 12, 0.4, '2022-04-28 07:45:31', '2022-05-18 11:18:19'),
(10, 4, 13, 0.8, '2022-04-28 07:45:31', '2022-05-18 11:18:19'),
(11, 4, 14, 0.4, '2022-04-28 07:45:31', '2022-05-18 11:18:19'),
(13, 4, 16, 0.6, '2022-04-28 07:45:31', '2022-05-18 11:18:19'),
(14, 3, 3, 1, '2022-04-28 07:46:41', '2022-05-20 21:02:53'),
(15, 3, 4, 1, '2022-04-28 07:46:41', '2022-05-20 21:02:53'),
(16, 3, 5, 0.6, '2022-04-28 07:46:41', '2022-05-20 21:02:53'),
(18, 3, 7, 0.6, '2022-04-28 07:46:41', '2022-05-20 21:02:53'),
(19, 3, 11, 0.6, '2022-04-28 07:46:41', '2022-05-20 21:02:53'),
(20, 6, 11, 0.6, '2022-04-28 07:47:45', '2022-05-20 21:02:36'),
(21, 6, 9, 0.6, '2022-04-28 07:47:45', '2022-05-20 21:02:36'),
(22, 6, 21, 0.6, '2022-04-28 07:47:45', '2022-05-20 21:02:36'),
(23, 6, 22, 0.6, '2022-04-28 07:47:45', '2022-05-20 21:02:36'),
(24, 6, 23, 1, '2022-04-28 07:47:45', '2022-05-20 21:02:36'),
(25, 7, 10, 0.4, '2022-04-28 07:48:55', '2022-05-26 22:14:28'),
(26, 7, 24, 0.4, '2022-04-28 07:48:55', '2022-05-26 22:14:28'),
(27, 7, 25, 0.6, '2022-04-28 07:48:55', '2022-05-26 22:14:28'),
(28, 7, 13, 0.4, '2022-04-28 07:48:55', '2022-05-26 22:14:28'),
(29, 7, 7, 0.4, '2022-04-28 07:48:55', '2022-05-26 22:14:28'),
(30, 7, 26, 0.6, '2022-04-28 07:48:55', '2022-05-26 22:14:28'),
(31, 5, 17, 0.6, '2022-04-28 07:56:14', '2022-05-18 11:18:44'),
(32, 5, 18, 0.6, '2022-04-28 07:56:14', '2022-05-18 11:18:44'),
(33, 5, 19, 0.8, '2022-04-28 07:56:14', '2022-05-18 11:18:44'),
(34, 5, 20, 0.8, '2022-04-28 07:56:14', '2022-05-18 11:18:44'),
(35, 3, 6, 0.4, '2022-05-18 11:17:12', '2022-05-20 21:02:53');

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis`
--

CREATE TABLE `diagnosis` (
  `id_diagnosis` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `penyakit` text NOT NULL,
  `gejala` text NOT NULL,
  `id_hasil` int(11) NOT NULL,
  `nilai` double NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diagnosis`
--

INSERT INTO `diagnosis` (`id_diagnosis`, `id_user`, `penyakit`, `gejala`, `id_hasil`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 2, '{\"3\":\"0.86\",\"7\":\"0.48\"}', '{\"id_gejala\":[\"5\",\"6\",\"7\"],\"nilai\":[\"0.6\",\"0.4\",\"0.8\"]}', 3, 0.86, '2022-05-12 20:29:42', '2022-05-12 20:29:42'),
(2, 6, '{\"3\":\"0.32\"}', '{\"id_gejala\":[\"3\"],\"nilai\":[\"0.4\"]}', 3, 0.32, '2022-05-13 20:26:09', '2022-05-13 20:26:09'),
(3, 7, '{\"4\":\"0.80\",\"5\":\"1.00\"}', '{\"id_gejala\":[\"16\",\"18\",\"19\"],\"nilai\":[\"1\",\"1\",\"1\"]}', 5, 1, '2022-05-14 16:29:36', '2022-05-14 16:29:36'),
(4, 8, '{\"4\":\"0.81\",\"6\":\"0.60\"}', '{\"id_gejala\":[\"9\",\"16\",\"21\"],\"nilai\":[\"0.8\",\"0.8\",\"0.4\"]}', 4, 0.81, '2022-05-14 20:26:03', '2022-05-14 20:26:03'),
(5, 2, '{\"2\":\"0.76\"}', '{\"id_gejala\":[\"1\",\"2\"],\"nilai\":[\"0.8\",\"0.4\"]}', 2, 0.76, '2022-05-16 14:42:06', '2022-05-16 14:42:06'),
(6, 0, '{\"4\":\"0.79\",\"7\":\"0.24\"}', '{\"id_gejala\":[\"12\",\"13\",\"14\"],\"nilai\":[\"0.8\",\"0.4\",\"0.8\"]}', 4, 0.79, '2022-05-17 10:31:28', '2022-05-17 10:31:28'),
(7, 0, '{\"1\":\"0.64\",\"4\":\"0.48\",\"3\":\"0.32\",\"6\":\"0.95\",\"7\":\"0.24\"}', '{\"id_gejala\":[\"7\",\"9\",\"21\",\"23\",\"27\"],\"nilai\":[\"0.4\",\"0.8\",\"0.8\",\"0.8\",\"0.8\"]}', 6, 0.95, '2022-05-17 10:36:30', '2022-05-17 10:36:30'),
(8, 3, '{\"4\":\"0.16\",\"3\":\"0.99\",\"6\":\"0.60\",\"7\":\"0.16\"}', '{\"id_gejala\":[\"3\",\"4\",\"5\",\"7\",\"8\",\"9\"],\"nilai\":[\"0.8\",\"0.8\",\"0.4\",\"0.4\",\"0.8\",\"0.4\"]}', 3, 0.99, '2022-05-18 13:45:37', '2022-05-18 13:45:37'),
(9, 3, '{\"4\":\"0.16\",\"3\":\"0.48\",\"6\":\"0.91\",\"7\":\"0.32\"}', '{\"id_gejala\":[\"7\",\"9\",\"21\",\"22\",\"23\"],\"nilai\":[\"0.8\",\"0.4\",\"0.4\",\"0.4\",\"0.8\"]}', 6, 0.91, '2022-05-18 13:53:01', '2022-05-18 13:53:01'),
(10, 3, '{\"4\":\"0.90\",\"6\":\"0.48\",\"7\":\"0.32\"}', '{\"id_gejala\":[\"9\",\"11\",\"12\",\"13\",\"14\"],\"nilai\":[\"0.8\",\"0.4\",\"0.4\",\"0.8\",\"0.4\"]}', 4, 0.9, '2022-05-18 14:01:13', '2022-05-18 14:01:13'),
(11, 3, '{\"2\":\"0.48\",\"4\":\"0.32\",\"3\":\"0.70\",\"6\":\"0.73\",\"7\":\"0.16\"}', '{\"id_gejala\":[\"1\",\"5\",\"7\",\"8\",\"9\"],\"nilai\":[\"0.8\",\"0.4\",\"0.4\",\"0.8\",\"0.8\"]}', 6, 0.73, '2022-05-18 14:04:08', '2022-05-18 14:04:08'),
(12, 3, '{\"2\":\"0.48\",\"4\":\"0.16\",\"3\":\"0.84\",\"6\":\"0.42\",\"7\":\"0.32\"}', '{\"id_gejala\":[\"1\",\"5\",\"7\",\"8\",\"9\"],\"nilai\":[\"0.8\",\"1\",\"0.8\",\"0.4\",\"0.4\"]}', 3, 0.84, '2022-05-18 14:07:35', '2022-05-18 14:07:35'),
(13, 3, '{\"4\":\"0.97\",\"6\":\"0.60\",\"7\":\"0.32\"}', '{\"id_gejala\":[\"9\",\"11\",\"12\",\"13\",\"16\"],\"nilai\":[\"1\",\"0.8\",\"0.4\",\"0.8\",\"0.4\"]}', 4, 0.97, '2022-05-18 14:09:41', '2022-05-18 14:09:41'),
(14, 3, '{\"3\":\"0.60\",\"7\":\"0.79\"}', '{\"id_gejala\":[\"7\",\"24\",\"25\"],\"nilai\":[\"1\",\"0.8\",\"0.8\"]}', 7, 0.79, '2022-05-18 14:18:11', '2022-05-18 14:18:11'),
(15, 3, '{\"1\":\"0.24\",\"3\":\"0.24\",\"7\":\"0.74\"}', '{\"id_gejala\":[\"7\",\"25\",\"26\",\"27\"],\"nilai\":[\"0.4\",\"1\",\"0.4\",\"0.4\"]}', 7, 0.74, '2022-05-18 14:18:59', '2022-05-18 14:18:59'),
(16, 3, '{\"5\":\"0.97\"}', '{\"id_gejala\":[\"17\",\"19\",\"20\"],\"nilai\":[\"1\",\"0.8\",\"1\"]}', 5, 0.97, '2022-05-18 14:19:47', '2022-05-18 14:19:47'),
(17, 3, '{\"4\":\"0.32\",\"6\":\"1.00\",\"7\":\"0.16\"}', '{\"id_gejala\":[\"13\",\"21\",\"23\"],\"nilai\":[\"0.4\",\"0.8\",\"1\"]}', 6, 1, '2022-05-18 14:20:32', '2022-05-18 14:20:32'),
(18, 3, '{\"4\":\"0.24\",\"5\":\"0.81\"}', '{\"id_gejala\":[\"16\",\"18\",\"19\"],\"nilai\":[\"0.4\",\"0.8\",\"0.8\"]}', 5, 0.81, '2022-05-18 14:21:07', '2022-05-18 14:21:07'),
(19, 9, '{\"4\":\"0.80\",\"7\":\"0.40\"}', '{\"id_gejala\":[\"13\"],\"nilai\":[\"1\"]}', 4, 0.8, '2022-05-18 20:29:06', '2022-05-18 20:29:06'),
(20, 9, '{\"4\":\"0.93\",\"7\":\"0.40\"}', '{\"id_gejala\":[\"12\",\"13\",\"14\"],\"nilai\":[\"1\",\"1\",\"1\"]}', 4, 0.93, '2022-05-18 20:29:51', '2022-05-18 20:29:51'),
(21, 10, '{\"4\":\"0.16\",\"3\":\"0.70\",\"6\":\"0.42\",\"7\":\"0.32\"}', '{\"id_gejala\":[\"5\",\"7\",\"8\",\"9\"],\"nilai\":[\"0.4\",\"0.8\",\"0.4\",\"0.4\"]}', 3, 0.7, '2022-05-18 21:40:53', '2022-05-18 21:40:53'),
(22, 3, '{\"2\":\"0.69\"}', '{\"id_gejala\":[\"1\",\"2\"],\"nilai\":[\"0.8\",\"1\"]}', 2, 0.69, '2022-05-21 20:35:01', '2022-05-21 20:35:01'),
(23, 0, '{\"2\":\"0.60\",\"4\":\"1.00\",\"3\":\"0.94\",\"6\":\"0.84\",\"7\":\"0.40\"}', '{\"id_gejala\":[\"1\",\"5\",\"7\",\"9\",\"11\"],\"nilai\":[\"1\",\"1\",\"1\",\"1\",\"1\"]}', 4, 1, '2022-05-23 12:38:28', '2022-05-23 12:38:28'),
(24, 5, '{\"4\":\"0.88\",\"3\":\"1.00\",\"6\":\"0.79\",\"7\":\"0.32\"}', '{\"id_gejala\":[\"3\",\"4\",\"5\",\"7\",\"9\",\"11\"],\"nilai\":[\"1\",\"1\",\"0.4\",\"0.8\",\"1\",\"0.8\"]}', 3, 1, '2022-05-23 12:44:33', '2022-05-23 12:44:33'),
(25, 5, '{\"4\":\"0.24\",\"5\":\"0.81\"}', '{\"id_gejala\":[\"16\",\"18\",\"19\"],\"nilai\":[\"0.4\",\"0.8\",\"0.8\"]}', 5, 0.81, '2022-05-23 12:47:46', '2022-05-23 12:47:46'),
(26, 5, '{\"4\":\"0.32\",\"3\":\"0.48\",\"6\":\"1.00\",\"7\":\"0.32\"}', '{\"id_gejala\":[\"7\",\"9\",\"21\",\"23\"],\"nilai\":[\"0.8\",\"0.8\",\"0.8\",\"1\"]}', 6, 1, '2022-05-23 12:49:15', '2022-05-23 12:49:15'),
(27, 5, '{\"4\":\"1.00\",\"3\":\"0.60\",\"6\":\"0.84\",\"7\":\"0.40\"}', '{\"id_gejala\":[\"9\",\"11\",\"12\",\"13\",\"14\"],\"nilai\":[\"1\",\"1\",\"0.4\",\"1\",\"0.8\"]}', 4, 1, '2022-05-23 12:50:44', '2022-05-23 12:50:44'),
(28, 5, '{\"2\":\"0.48\",\"4\":\"1.00\",\"3\":\"0.88\",\"6\":\"0.79\",\"7\":\"0.16\"}', '{\"id_gejala\":[\"1\",\"5\",\"7\",\"9\",\"11\"],\"nilai\":[\"0.8\",\"1\",\"0.4\",\"0.8\",\"1\"]}', 4, 1, '2022-05-23 12:52:58', '2022-05-23 12:52:58'),
(29, 5, '{\"4\":\"1.00\",\"3\":\"0.60\",\"6\":\"0.84\",\"7\":\"0.40\"}', '{\"id_gejala\":[\"9\",\"11\",\"12\",\"13\",\"16\"],\"nilai\":[\"1\",\"1\",\"0.8\",\"1\",\"0.8\"]}', 4, 1, '2022-05-23 13:06:08', '2022-05-23 13:06:08'),
(30, 5, '{\"3\":\"0.60\",\"7\":\"0.84\"}', '{\"id_gejala\":[\"7\",\"24\",\"25\"],\"nilai\":[\"1\",\"0.8\",\"1\"]}', 7, 0.84, '2022-05-23 13:06:33', '2022-05-23 13:06:33'),
(31, 5, '{\"1\":\"0.48\",\"3\":\"0.60\",\"7\":\"0.88\"}', '{\"id_gejala\":[\"7\",\"25\",\"26\",\"27\"],\"nilai\":[\"1\",\"1\",\"0.8\",\"0.8\"]}', 7, 0.88, '2022-05-23 13:07:07', '2022-05-23 13:07:07'),
(32, 5, '{\"5\":\"0.96\"}', '{\"id_gejala\":[\"17\",\"19\",\"20\"],\"nilai\":[\"0.8\",\"0.8\",\"1\"]}', 5, 0.96, '2022-05-23 13:07:37', '2022-05-23 13:07:37'),
(33, 5, '{\"4\":\"0.80\",\"6\":\"1.00\",\"7\":\"0.40\"}', '{\"id_gejala\":[\"13\",\"21\",\"23\"],\"nilai\":[\"1\",\"1\",\"1\"]}', 6, 1, '2022-05-23 13:08:05', '2022-05-23 13:08:05'),
(35, 11, '{\"4\":\"0.94\",\"3\":\"0.48\",\"6\":\"0.48\",\"7\":\"0.32\"}', '{\"id_gejala\":[\"10\",\"11\",\"12\"],\"nilai\":[\"0.8\",\"0.8\",\"0.4\"]}', 4, 0.94, '2022-06-25 21:10:14', '2022-06-25 21:10:14'),
(36, 0, '{\"2\":\"0.65\"}', '{\"id_gejala\":[\"1\",\"2\"],\"nilai\":[\"0.8\",\"0.8\"]}', 2, 0.65, '2022-06-25 21:21:55', '2022-06-25 21:21:55');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Kebotakan berbentuk lingkaran dengan “cincin” merah di pinggirnya', '2022-04-28 06:27:25', '2022-04-28 06:27:25'),
(2, 'Kulit menjadi kelam dan bernanah', '2022-04-28 06:27:25', '2022-04-28 06:27:25'),
(3, 'Bersin dan batuk', '2022-04-28 06:27:25', '2022-04-28 06:27:25'),
(4, 'Cairan dari mata dan hidung', '2022-04-28 06:27:25', '2022-04-28 06:27:25'),
(5, 'Mata lengket dan tertutup', '2022-04-28 06:27:25', '2022-04-28 06:27:25'),
(6, 'Kelopak mata ketiga terlihat', '2022-04-28 06:27:25', '2022-04-28 06:27:25'),
(7, 'Tidak nafsu makan', '2022-04-28 06:27:25', '2022-04-28 06:27:25'),
(9, 'Muntah', '2022-04-28 06:27:25', '2022-04-28 06:27:25'),
(10, 'Demam', '2022-04-28 06:27:25', '2022-04-28 06:27:25'),
(11, 'Lesu/Lemas', '2022-04-28 06:27:25', '2022-05-20 20:59:41'),
(12, 'Kembung', '2022-04-28 06:27:25', '2022-04-28 06:27:25'),
(13, 'Diare', '2022-04-28 06:27:25', '2022-04-28 06:27:25'),
(14, 'Mulut berbau busuk', '2022-04-28 06:27:25', '2022-04-28 06:27:25'),
(16, ' Kucing sering berada di tempat minum, namun tidak minum banyak', '2022-04-28 06:27:25', '2022-04-28 06:27:25'),
(17, 'Kucing kesakitan seperti menangis atau berteriak saat buang air kecil', '2022-04-28 06:27:25', '2022-04-28 06:27:25'),
(18, 'Sering menjilati bagian kelamin', '2022-04-28 06:27:25', '2022-04-28 06:27:25'),
(19, 'Air seni yang dikeluarkan sangat sedikit atau tidak ada', '2022-04-28 06:27:25', '2022-04-28 06:27:25'),
(20, 'Air seni bercampur darah', '2022-04-28 06:27:25', '2022-04-28 06:27:25'),
(21, 'Sering buang air besar', '2022-04-28 06:27:25', '2022-04-28 06:27:25'),
(22, 'Sering menjilati anus', '2022-04-28 06:27:25', '2022-04-28 06:27:25'),
(23, 'Terdapat cacing di dalam kotoran atau dubur kucing', '2022-04-28 06:27:25', '2022-04-28 06:27:25'),
(24, 'Sulit Bernapas', '2022-04-28 06:27:25', '2022-04-28 06:27:25'),
(25, 'Gusi pucat', '2022-04-28 06:27:25', '2022-04-28 06:27:25'),
(26, 'Pembesaran kelenjar getah bening', '2022-04-28 06:27:25', '2022-04-28 06:27:25'),
(27, 'Bulu rontok', '2022-04-28 06:27:25', '2022-04-28 06:27:25'),
(28, 'Kulit bersisik dan mengeras', '2022-04-28 06:27:25', '2022-04-28 06:27:25'),
(29, 'Kulit berkerak', '2022-04-28 06:27:25', '2022-04-28 06:27:25');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1644464242, 1);

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `saran` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `nama`, `deskripsi`, `saran`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Scabies', '<p>Kudis kucing, juga disebut kudis <i>notoedric</i>, disebabkan oleh tungau kucing <i>Notoedres cati</i>. <i>Notoedres cati mite</i> menyebabkan penyakit kulit pada kucing. Termasuk rasa gatal yang hebat yang menyebabkan koreng dan sisik mulai dari ujung telinga, menyebar ke wajah, dan akhirnya menutupi tubuh jika tidak diobati. Mirip dengan kudis <i>sarcoptic</i> pada anjing, <i>Notoedres cati</i> menghasilkan respons peradangan besar di kulit yang membuat kucing sangat gatal.</p><p>Tungau <i>Notoedres </i>menyebar dengan mudah melalui sentuhan dari kucing ke kucing dan juga dapat menyebar ke manusia, anjing, atau kelinci. Seperti tungau kudis <i>sarcoptic</i>, mereka tidak hidup lama dari inangnya dan penularan biasanya melalui kontak langsung dari inang yang terinfeksi.</p><p>\r\n\r\n</p>', '<ul><li>Pisahkan kucing yang terjangkit agar tidak menular.</li><li>Memberikan obat tetes Selamectin pada kucing.</li><li>Mengoleskan salep <i>scabies</i> .</li><li>Mengoleskan VCO atau minyak kelapa.</li><li>Injeksi Ivermectin oleh dokter hewan.</li></ul><div><br></div>', '1651104191_3c48a7ea92818caba0f5.jpeg', '2022-04-28 07:03:11', '2022-05-12 14:14:18'),
(2, 'Ringworm', '<div><i>Ringworm</i> / kurap adalah nama umum yang diberikan untuk infeksi jamur pada lapisan superfisial kulit, rambut, dan kuku. Infeksi kurap dapat terjadi pada manusia dan semua spesies hewan peliharaan. Nama&nbsp;<i>Ringworm</i>&nbsp;berasal dari penampilan klasik \'cincin\' yang bulat, merah, menonjol menandai batas peradangan pada orang atau hewan yang terinfeksi penyakit tersebut. Nama umum kurap agak menyesatkan, karena ini bukan infeksi yang disebabkan oleh cacing, dan area yang terinfeksi tidak selalu berbentuk cincin. Organisme yang menyebabkan infeksi kurap termasuk dalam kelompok jamur khusus yang dikenal sebagai <i>dermatofit</i>, sehingga nama medis untuk penyakit ini adalah <i>dermatofitosis</i>.</div><div><br></div><div>Beberapa spesies <i>dermatofita</i> bersifat spesifik spesies, artinya hanya akan menginfeksi satu spesies, sedangkan yang lain dapat menyebar antar spesies hewan yang berbeda atau dari hewan ke manusia. Pada kucing, satu spesies <i>dermatofit</i>, yang disebut <i>Microsporum canis</i>, bertanggung jawab atas hampir semua infeksi kurap. Spesies ini juga menular ke anjing dan manusia. Kadang-kadang infeksi kurap pada kucing dapat disebabkan oleh spesies seperti <i>Trichophyton mentagrophytes</i>. Spesies ini juga bersifat zoonosis, artinya juga dapat menginfeksi manusia.</div>', '<ul><li><font size=\"3\"><span style=\"font-size: 14px;\">Untuk mencegah jamur, keringkan kucing secara menyeluruh setelah mandi. Sering ganti air minum agar tidak menjadi tempat bakteri dan jamur.</span></font></li><li><font size=\"3\"><span style=\"font-size: 14px;\">Obat jamur yang umum digunakan adalah miconazole, dioleskan 2x sehari</span></font></li><li><font size=\"3\"><span style=\"font-size: 14px;\">Sampo anti jamur yang mengandung sulfur bisa berguna untuk mengobati dan mencegah</span></font></li><li><font size=\"3\"><span style=\"font-size: 14px;\">Hubungi dokter hewan jika infeksi sudah parah</span></font></li></ul><div><br></div><span style=\"font-size: medium;\"></span>', '1652330268_8ac3650723b6472ed5b3.jpeg', '2022-04-28 07:41:23', '2022-05-12 14:08:47'),
(3, 'Feline Upper Repiratory Infection', '<div>Infeksi saluran pernapasan atas kucing/<i>Feline Upper Repiratory Infection</i> (URI) adalah istilah umum untuk infeksi saluran pernapasan yang disebabkan oleh satu atau lebih virus atau bakteri. Sinonim untuk kondisi ini termasuk penyakit pernapasan menular kucing dan kompleks penyakit pernapasan atas kucing (URD). Infeksi dapat disebabkan oleh satu atau lebih agenvirus dan bakteri yang dapat menyebabkan penyakit pada kucing. Virus paling umum yang menyebabkan infeksi saluran pernapasan atas pada kucing adalah <i>feline herpesvirus tipe-1</i> (juga dikenal sebagai <i>feline viral rhinotracheitis</i> atau FVR) dan <i>feline calicivirus</i> (FCV), sedangkan bakteri yang paling umum yang menyebabkan infeksi saluran pernapasan atas pada kucing adalah <i>Bordetella bronchiseptica ( B. bronchiseptica) </i>dan <i>Chlamydophila felis (C. felis).</i></div><div><br></div><div><div>Virus dan bakteri yang menyebabkan URI pada kucing sangat menular. Kucing yang terinfeksi akan mengeluarkan partikel menular dalam air liur atau sekresi dari hidung atau mata. Kucing yang rentan dapat terinfeksi melalui kontak langsung dengan kucing lain yang terinfeksi atau oleh paparan lingkungan terhadap benda-benda yang telah terkontaminasi dengan sekresi infeksius, seperti mangkuk makanan dan air, kotak kotoran, mainan, dan tempat tidur. Sebagian besar kasus berhubungan dengan kontak langsung karena virus dan bakteri hanya bertahan hidup dalam waktu singkat di lingkungan dan mudah dihancurkan dengan desinfeksi yang tepat.</div><div><br></div><div>Diperkirakan FVR dapat bertahan kurang dari 18 jam di luar tubuh inang sedangkan FCV dapat bertahan hingga sepuluh hari. Larutan pemutih encer akan menghancurkan kedua virus tetapi <i>calicivirus</i> akan tahan terhadap pencucian dengan deterjen cucian bebas pemutih.</div><div><br></div><div>Beberapa dari penyakit ini dapat menyebabkan status pembawa pada kucing yang tampaknya telah pulih dari infeksi, dan pembawa betina dapat menularkan infeksi ke anak kucing mereka yang baru lahir.</div></div>', '<ul><li>Beri kucing minum cukup agar tidak dehidrasi. Bila kurang minum, dapat memberikan air menggunakan pipet.</li><li>Sakit mata dapat diberikan tetes obat mata atau salep</li><li>Pemberian antibiotik oleh dokter hewan </li></ul><div><br></div>', '1652330506_9115a7fe98f9723b05a5.jpeg', '2022-04-28 07:41:43', '2022-05-12 14:06:07'),
(4, 'Feline Panleukopenia/Feline Distemper', '<div><b><i>Feline panleukopenia</i></b> (FP) adalah penyakit virus kucing yang sangat menular yang disebabkan oleh <i>feline parvovirus</i>. Anak kucing paling parah terkena virus. Nama <i>feline distemper</i> dan <i>feline parvo</i> tidak boleh disamakan dengan <i>canine distemper</i> atau <i>canine parvo</i>—meskipun namanya mirip, namun disebabkan oleh virus yang berbeda. Virus tidak menginfeksi manusia.</div><div><br></div><div><i>Feline parvovirus </i>menginfeksi dan membunuh sel-sel yang tumbuh dan membelah dengan cepat, seperti sel-sel di sumsum tulang, usus, dan janin yang sedang berkembang.</div><div><br></div><div><b>Kucing mana yang rentan terhadap FP?</b></div><div>Karena virus FP ada di mana-mana di lingkungan, hampir semua anak kucing dan kucing terpapar virus di beberapa titik dalam hidup mereka. Sementara kucing dari segala usia dapat terinfeksi dengan <i>feline parvovirus</i> yang menyebabkan FP, anak kucing muda, kucing sakit, dan kucing yang tidak divaksinasi paling rentan. Hal ini paling sering terlihat pada kucing usia 3-5 bulan; kematian akibat FP lebih sering terjadi pada usia ini.</div><div>&nbsp;</div><div><b>Bagaimana kucing bisa terinfeksi?</b></div><div>Kucing dapat mengeluarkan virus melalui air seni, tinja, dan sekret hidungnya; infeksi terjadi ketika kucing yang rentan bersentuhan dengan sekresi ini, atau bahkan kutu dari kucing yang terinfeksi. Kucing yang terinfeksi cenderung mengeluarkan virus untuk waktu yang relatif singkat (1-2 hari), tetapi virus dapat bertahan hingga satu tahun di lingkungan, sehingga kucing dapat terinfeksi tanpa pernah bersentuhan langsung dengan yang terinfeksi. kucing. Tempat tidur, kandang, piring makanan, dan tangan atau pakaian orang yang menangani kucing yang terinfeksi dapat menjadi sarang virus dan menularkannya ke kucing lain. Oleh karena itu, sangat penting untuk mengisolasi kucing yang terinfeksi. Bahan apa pun yang digunakan pada atau untuk kucing yang terinfeksi tidak boleh digunakan atau dibiarkan bersentuhan dengan kucing lain, dan orang yang menangani kucing yang terinfeksi harus mempraktikkan kebersihan yang tepat untuk mencegah penyebaran infeksi.</div><div><br></div><div>Virus penyebab FP sulit dimusnahkan dan resisten terhadap banyak desinfektan. Idealnya, kucing yang tidak divaksinasi tidak boleh masuk ke area di mana kucing yang terinfeksi telah terinfeksi — bahkan jika area tersebut telah didesinfeksi.</div>', '<ul><li>Pisahkan kucing yang terjangkit agar tidak menular.</li><li>Beri kucing minum cukup agar tidak dehidrasi. Bila kurang minum, dapat memberikan air menggunakan pipet.</li><li>Virus ini dapat dicegah dengan vaksinasi.</li></ul><div><br></div>', '1652330460_08016c658f5a57acde41.jpg', '2022-04-28 07:42:06', '2022-05-12 14:01:22'),
(5, 'Feline Lower Urinary Tract Disease (FLUTD)', '<div>Penyakit saluran kemih bagian bawah kucing / <i>Feline Lower Urinary Tract Disease</i> (FLUTD) menggambarkan berbagai kondisi yang mempengaruhi kandung kemih dan uretra kucing. Kucing dengan FLUTD paling sering menunjukkan tanda-tanda kesulitan dan rasa sakit saat buang air kecil, peningkatan frekuensi buang air kecil, dan darah dalam urin. Kucing dengan FLUTD juga cenderung menjilat dirinya sendiri secara berlebihan dan mungkin buang air kecil di luar kotak pasir, seringkali di permukaan yang dingin dan halus seperti lantai keramik atau bak mandi.</div><div><br></div><div>Sementara FLUTD dapat terjadi pada usia berapa pun, biasanya terlihat pada kucing setengah baya, kelebihan berat badan yang sedikit berolahraga, menggunakan kotak pasir dalam ruangan, memiliki sedikit atau tanpa akses ke luar ruangan, atau makan makanan kering. Faktor-faktor seperti stres emosional atau lingkungan, rumah tangga dengan banyak kucing, dan perubahan mendadak dalam rutinitas sehari-hari juga dapat meningkatkan risiko kucing terkena FLUTD.</div>', '<span lang=\"EN-US\" style=\"font-size: 14px; font-family: Nunito;\">Segera bawa ke dokter hewan jika kucing kesulitan buang air kecil, agar segera diberikan penanganan seperti pemberian selang untuk mengeluarkan air seni dan operasi untuk mengeluarkan batu kemih.</span><span style=\"font-size: medium;\"></span>', '1652330425_003ebb8ebdb4edb73b01.png', '2022-04-28 07:42:30', '2022-05-12 13:58:14'),
(6, 'Cacingan', '<div>Cacing yang paling umum terdapat dalam kucing disebut cacing gelang dan cacing pita. Kebanyakan kucing yang terinfeksi tidak menunjukkan tanda-tanda cacingan; Namun, beban berat cacing dapat menyebabkan penurunan berat badan, muntah dan diare, iritasi di sekitar anus dan gagal tumbuh. Meskipun cacing terkadang dapat menyebabkan masalah bagi kucing itu sendiri, beberapa cacing juga dapat ditularkan ke manusia dan pada kesempatan yang jarang dapat menjadi penyebab penyakit serius pada manusia. Untuk alasan ini, perawatan kucing dan anak kucing secara teratur untuk mencegah atau menghilangkan cacing sangat penting.</div><div><b><br></b></div><div><b>Cacing Gelang</b></div><div><div>Cacing gelang usus adalah parasit usus yang paling umum pada kucing dan terjadi pada kucing dari segala usia di seluruh dunia. Dua cacing gelang umum kucing disebut, <i>Toxocara cati</i> dan <i>Toxascaris leonina</i>. Telur dari cacing ini dikeluarkan melalui feses dan dapat tetap hidup di lingkungan selama beberapa tahun. Telur-telur ini dapat menginfeksi kucing lain dengan dua cara. Pertama, kucing mungkin memakan (menelan) telur langsung dari lingkungan yang terkontaminasi. Kedua, jika hewan lain memakan telur (misalnya, tikus atau tikus), ini dapat bertindak sebagai \'inang perantara\' dan menularkan infeksi ke kucing jika memangsa (dan memakan) inang perantara yang terinfeksi.</div><div><br></div><div><div><b>Cacing Tambang</b></div><div>Cacing tambang adalah jenis cacing gelang usus kecil yang ditemukan di sebagian besar negara di seluruh dunia, tetapi lebih umum di beberapa negara daripada yang lain. Cacing ini dapat menyebabkan kerusakan pada lapisan usus tempat mereka menempel pada permukaan, dan ini dapat menyebabkan penurunan berat badan, pendarahan, dan anemia.</div><div><br></div><div>Kucing dapat terinfeksi dengan menelan (memakan) telur dari lingkungan, dari memakan inang perantara yang terinfeksi (seperti Toxocara cati di atas) atau oleh larva di lingkungan yang menggali melalui kulit kucing.</div><div><br></div><div><div><b>Cacing Pita</b></div><div>Cacing pita umumnya merupakan cacing pipih panjang yang terdiri dari banyak segmen. Segmen dewasa yang mengandung telur dilepaskan dari ujung cacing pita dan dikeluarkan melalui feses. Segmen ini sering menyerupai butiran beras dan kadang-kadang dapat terlihat pada rambut di sekitar anus kucing, di kotoran dan di tempat tidur kucing.<br></div><div><br></div><div>Untuk melengkapi siklus hidupnya, semua cacing pita membutuhkan inang perantara untuk terlebih dahulu memakan telur dari lingkungan, dan kemudian kucing akan terinfeksi dengan memakan inang perantara. Hewan yang bertindak sebagai perantara bervariasi tergantung pada spesies cacing pita. Cacing pita yang paling umum menginfeksi kucing di seluruh dunia adalah <i>Dipylidium caninum</i> dan <i>Taenia taeniaeformis</i>.</div></div></div></div>', 'Obat yang umum digunakan untuk mengatasi cacing gelang dan cacing tambang pada kucing dewasa adalah <b>pirantel palmoat</b> dan <b>milbemycin oxime</b>.', '1652330382_c24c9c2156f63efc7a7c.jpeg', '2022-04-28 07:42:46', '2022-05-12 13:52:00'),
(7, 'Feline Leukimia ', '<div><div><b><i>Feline leukemia virus</i></b> (FeLV) adalah salah satu penyakit menular yang paling umum pada kucing. Untungnya, prevalensi FeLV pada kucing telah menurun secara signifikan dalam 25 tahun terakhir sejak pengembangan vaksin yang efektif dan prosedur pengujian yang akurat.</div><div><br></div><div>Kucing yang terus-menerus terinfeksi FeLV berfungsi sebagai sumber infeksi bagi kucing lain. Virus ditumpahkan dalam air liur, sekresi hidung, urin, feses, dan susu kucing yang terinfeksi. Penularan virus dari kucing ke kucing dapat terjadi dari luka gigitan, selama perawatan bersama, dan (jarang) melalui penggunaan kotak pasir dan piring makan bersama. Penularan juga dapat terjadi dari induk kucing yang terinfeksi ke anak-anaknya, baik sebelum mereka lahir atau saat mereka menyusui. FeLV tidak bertahan lama di luar tubuh kucing – mungkin kurang dari beberapa jam dalam kondisi rumah tangga yang normal.</div><div><br></div><div>Kucing yang paling berisiko terinfeksi FeLV adalah kucing yang mungkin terpapar kucing yang terinfeksi, baik melalui kontak dekat yang lama atau melalui luka gigitan. Kucing tersebut termasuk kucing yang hidup dengan kucing yang terinfeksi atau dengan kucing dengan status infeksi yang tidak diketahui, kucing yang diizinkan keluar rumah tanpa pengawasan di mana mereka dapat digigit oleh kucing yang terinfeksi, dan anak kucing yang lahir dari ibu yang terinfeksi.</div><div><br></div><div>Anak kucing jauh lebih rentan terhadap infeksi FeLV daripada kucing dewasa, dan karena itu berada pada risiko infeksi terbesar jika terpapar. Namun, bahkan kucing dewasa yang sehat pun dapat terinfeksi jika cukup terpapar.</div></div>', '<ul><li>Pisahkan kucing yang terjangkit agar tidak menular.</li><li>Segera bawa kucing ke dokter hewan untuk pemeriksaan lebih lanjut.</li><li>Saat ini belum ditemukan pengobatan khusus untuk menyembuhkan penyakit ini.</li><li>Virus ini dapat dicegah dengan vaksinasi.</li></ul>', 'default.png', '2022-04-28 07:43:02', '2022-05-12 13:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'pict_user.jpg',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'isnaini.25@students.amikom.ac.id', 'admin', 'Isnaini Solikhah', '1650767933_6dc9cf47d9ec30af217e.png', '$2y$10$QoFZVA4t8WME90PpL5YmSOZNQCw7J7DMhNl1cUf0Dz3WtWF1gfni2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-02-09 23:01:00', '2022-04-24 19:42:09', NULL),
(2, 'yamzaki@gmail.com', 'yamazaki', 'Yamazaki Kento', '1650808772_6c6753b273c86561a5ca.jpg', '$2y$10$dP7j4Wz2HiOd4wjgiJRcPu16pwP3UQMBcF6KHYcPMKu1XGQbov9dO', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-02-10 01:55:02', '2022-04-24 20:59:58', NULL),
(3, 'user123@mail.com', 'user123', 'User ', '1652858690_125556903e9d20f2a133.jpg', '$2y$10$QzScRNlTjGDgK5O5FJvX2OztnYcZAG4bkxCMGLnRnzp2P3fq8ODk6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-04-27 23:14:16', '2022-05-18 14:24:50', NULL),
(5, 'loidforger@mail.com', 'Loidforger', 'Loid Forger', 'pict_user.jpg', '$2y$10$7pTh2w2l3s.hWjOdGE/NwuVUcYlKL4.Q//8tscJLMubJXpmbHf61K', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-05-12 21:16:25', '2022-05-12 21:19:24', NULL),
(6, 'ramasafitri10@gmail.com', 'Ramasafitri', 'Rama Safitri', '1652448158_e73b6b0b6c660e834e46.jpg', '$2y$10$qdVxHik7zXGE4ee.x5csw.57TZkDUkrMUdPNrvnpmZk.wuzNpraI6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-05-13 20:19:58', '2022-05-13 20:22:38', NULL),
(7, 'nurrohmahtitis23@gmail.com', 'maman', 'maman gemez', '1652520450_2d1efa306d94e2c348be.jpeg', '$2y$10$v5SHK/vfBgYcKpQAKjGhcubbNNz4rXYmt8rPneiMs1x3GbUQ0B8Ti', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-05-14 16:24:48', '2022-05-14 16:27:30', NULL),
(8, 'pramudyaikap@gmail.com', 'puput', 'Pramudya Ika Putri', '1652534605_df3a82bd2b65c65d636c.jpeg', '$2y$10$MtLxu9YYely5JjJxFG42geaJOFojzjm9YeHCUWQ8Uho.hw7Hwh/Jq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-05-14 20:20:21', '2022-05-14 20:23:25', NULL),
(9, 'mailmiftahulhuda@gmail.com', 'mifhuda', 'Miftahul Huda', 'pict_user.jpg', '$2y$10$PV0vac2fwQjL2X0Y47zICuTmpPAaficgxvFKnfS7IkTIjqp82y3Ru', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-05-18 20:24:09', '2022-05-18 20:26:59', NULL),
(10, 'Haeleeylac@gmail.com', 'Agnes Peby Thalia ', 'Agnes peby thalia haechan lee', '1652884685_d005b711001c294cae5e.jpg', '$2y$10$2i9OR0hBUq5s1bicgTxdt.a57QEF/N6ozCAMdeMt0N61Wm8MhvdRS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-05-18 21:33:20', '2022-05-18 21:38:05', NULL),
(11, 'isnainisolikhah@gmail.com', 'isnaini25', 'Isnaini Solikhah', '1656169392_93311f4c760316808b24.jpg', '$2y$10$71eDTInUehJSqAtTEnsKu.37BUoI43w1.v9Sl.FhxyE0eBW/qUJDa', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-06-25 21:09:27', '2022-06-25 22:03:12', NULL),
(12, 'user@gmail.com', 'user', NULL, 'pict_user.jpg', '$2y$10$5Scr330EpnGi33PH7V/aA.oCzCFjPYDPeDFqnn75kpEEkRF.NPV.S', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-06-28 11:00:31', '2022-06-28 11:00:31', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `basis_pengetahuan`
--
ALTER TABLE `basis_pengetahuan`
  ADD PRIMARY KEY (`id_pengetahuan`);

--
-- Indexes for table `diagnosis`
--
ALTER TABLE `diagnosis`
  ADD PRIMARY KEY (`id_diagnosis`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `basis_pengetahuan`
--
ALTER TABLE `basis_pengetahuan`
  MODIFY `id_pengetahuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `diagnosis`
--
ALTER TABLE `diagnosis`
  MODIFY `id_diagnosis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
