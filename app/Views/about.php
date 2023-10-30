<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" href="<?= base_url('assets/images/logo.png'); ?>" type="image/x-icon">
    <title>Yayasan Nur Assyifa</title>
</head>

<body>
    <nav class="header">
        <div class="content_header">
            <div class="image_logo">
                <img src="<?php echo base_url('assets/images/logo.png') ?>" alt="">
            </div>
            <div class="text_logo">
                <img src="<?php echo base_url('assets/images/text.png') ?>" alt="">
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo base_url('/') ?>">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo base_url('/about') ?>">Profile</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('/') ?>#struktur_organisasi">Struktur
                                    Organisasi</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('/about') ?>#visi_misi">Visi-Misi</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Gallery
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo base_url('/gallery') ?>">Foto Kegiatan</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Keanggotaan
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo base_url('/') ?>#joinqr">Cara
                                    Berpartisipasi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#footer">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="about_content">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active bg-dark" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2" class="bg-dark"></button>
            </div>
            <div class="carousel-inner h-100">
                <div class="carousel-item active">
                    <div class="carousel-text">
                        <div class="tittle_content_about">
                            <h1 class="tittle_about">Sambutan Pendiri Yayasan</h1>
                        </div>
                        <div class="container_about">
                            <div class="about_one">
                                <p>Puji syukur kami panjatkan kehadirat Allah SWT karena atas izin-Nya Yayasan Nur
                                    Assyifa Samarinda
                                    (Nasda) dapat terbentuk dan memberikan kontribusi bagi umat Muslim khususnya dan
                                    masyarakat luas
                                    pada umumnya.</p>
                                <p>Sholawat dan salam tercurahkan kepada junjungan kita Nabi Muhammad SAW beserta
                                    keluarga, sahabat, dan
                                    pengikutnya hingga akhir zaman.</p>
                                <p>Ucapan terima kasih yang sebesar-besarnya kami sampaikan kepada berbagai pihak yang
                                    telah membantu
                                    berdiri dan berjalannya Yayasan Nur Assyifa Samarinda hingga saat ini, baik kepada
                                    para donatur dari
                                    Komunitas Dokter Berbagi maupun kepada donatur di luar komunitas yang tidak dapat
                                    kami sebutkan satu
                                    persatu.</p>
                                <img src="<?= base_url('assets/images/sambutan pendiri.jpeg') ?>" alt="">
                            </div>

                            <div class="about_two">
                                <p>Yayasan Nasda sebagai Yayasan yang bergerak di bidang sosial, kemanusiaan, dan
                                    keagamaan
                                    berkontribusi didalam pelaksanaan, diantaranya pemeriksaan kesehatan gratis,
                                    khitanan massal,
                                    pendirian TPQ Nurul Qur’an, pemberian bantuan kepada korban kebakaran, dan berbagai
                                    kegiatan lainnya
                                    yang dapat dilihat selengkapnya melalui halaman website ini.</p>
                                <p>Dalam pelaksanaan kegiatan-kegiatan tersebut Yayasan Nasda juga telah bekerja sama
                                    dengan berbagai
                                    pihak ysng terkait di bidang kesehatan dan keagamaan baik lembaga pemerintahan
                                    maupun organisasi
                                    profesi. Terkait dengan hal tersebut diatas , kedepannya InsyaAllah Yayasan akan
                                    selalu berkomitmen
                                    untuk melakukan evaluasi dan perbaikan dalam melaksanakan program kerja dan kegiatan
                                    yayasan.</p>
                                <p>Guna pengembangan Yayasan Nasda , kami juga membuka kesempatan bagi pihak pihsk yang
                                    ingin
                                    berkontribusi dalam kegiatan amal, membantu masyarakat dalam bidang kesehatan serta
                                    keagamaan
                                    melalui keanggotaan Komunitas Dokter Berbagi.</p>
                                <p>Akhir kata semoga Allah SWT memberikan rahmat dan ridhoNya agar Yayasan Nasda ini
                                    dapat tetap berdiri
                                    dan berkembang serta diberi kekuatan dan perlindungan agar dapat membantu sesama,
                                    Yang mana
                                    keberadaan Yayasan Nasda ini dapat diwariskan kepada generasi muda yang berakhlak
                                    sesuai tuntunan
                                    Al-Qur’an dan As-sunnah dan dapat dilanjutkan serta dikembangkan keberadaanya.</p>
                                <p>Aamiin Ya Rabbal Alamin.</p>
                                <br>
                                <p><i>Pendiri Yayasan Nur Assyifa Samarinda</i></p>
                                <p style="font-weight: bold;">Dr. dr. Arie Ibrahim, Sp.BS.K Subsp Ped</p>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-text">
                        <div class="tittle_content_about">
                            <h1 class="tittle_about">Sambutan Ketua Yayasan</h1>
                        </div>
                        <div class="container_about">
                            <div class="about_one">
                                <p>Segala Puji bagi Allah SWT yang telah memberikan rahmat dan karunia-Nya kepada kami
                                    dengan berdirinya Yayasan Nur Assyifa Samarinda (Nasda) pada tanggal 4 April 2022.
                                    Yayasan Nasda melalui Komunitas Dokter Berbagi merupakan sebuah Yayasan yang
                                    bergerak di bidang Sosial, Kemanusiaan dan Keagamaan.</p>
                                <img src="<?= base_url('assets/images/sambutan ketua.jpg') ?>" alt="">
                            </div>

                            <div class="about_two">
                                <p>Memasuki tahun kedua didirikan, Yayasan Nur Assyifa Samarinda (Nasda) telah berhasil
                                    mendirikan TPQ Nurul Qur’an yang peresmiannya dilakukan pada tanggal 21 Desember
                                    2022. Selain itu, Yayasan Nasda telah melakukan beberapa kegiatan yang akan kami
                                    uraikan kemudian. Kegiatan-kegiatan ini kami laksanakan melalui Komunitas Dokter
                                    Berbagi, komunitas yang keanggotaannya terdiri dari dokter maupun non dokter dengan
                                    tujuan sebagai wadah berbagi dan membantu masyarakat.</p>
                                <p>Kami berharap semoga itikad baik kami diberikan kemudahan dalam melaksanakan kegiatan
                                    dan program kerja sehingga kami bisa menebar kebaikan sebanyak-banyaknya dan
                                    seluas-luasnya. Kamipun mengetuk hati dan mengajak seluruh kaum muslimin untuk ikut
                                    serta dalam menyukseskan program-program kami dengan turut serta berdonasi atau
                                    berkontribusi karena tanpa bantuan kaum muslimin, tentu kami tidaklah sanggup
                                    menjalankan semua program ini.</p>
                                <p>Semoga Allah memberikan taufiq dan hidayah-Nya kepada kita semua untuk saling
                                    tolong-menolong dalam kebaikan. Semoga amal kita menjadi pemberat timbangan kebaikan
                                    di hari kiamat kelak. Amin.</p>
                                <p>Ketua Yayasan Nur Assyifa Samarinda</p>
                                <br>
                                <p style="font-weight: bold;">dr. Abdul Haris Nur, Sp. An</p>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="visi">
            <div class="tittle_visi" style="margin-top: 5vw;">
                <h2>VISI DAN MISI YAYASAN NUR ASSYIFA SAMARINDA</h2>
            </div>

            <div class="container_visi" id="visi_misi">
                <div class="section_content">
                    <img src="<?= base_url('assets/images/Ellipse 3.png') ?>" alt="">
                </div>
                <div class="content_visi">
                    <h3>Visi</h3>
                    <p>Menjadi wadah bagi masyarakat umum khususnya bagi dokter dan keluarganya untuk membantu
                        masyarakat
                        terutama generasi muda yang hasan agar menjalankan kehidupannya sesuai tuntunan Al-Qur’an dan
                        As-Sunnah sehingga lebih kreatif dan inovatif dalam mewujudkan perubahan sosial, moral, dan
                        akhlak.
                    </p>
                </div>
            </div>

            <div class="container_misi">
                <div class="section_content">
                    <img src="<?= base_url('assets/images/Ellipse 3.png') ?>" alt="">
                </div>
                <div class="content_misi">
                    <h3>Misi</h3>
                    <ul>
                        <li>Membina dan mencerdaskan generasi bangsa melalui penyelenggaraan pendidikan formal dan
                            non
                            formal dengan menanamkan ilmu keagamaan serta kepedulian terhadap sesama.</li>
                        <li>Membina masyarakat untuk peduli dan sadar akan kesehatan dan kebersihan diri serta
                            lingkungan
                            melalui program-program sosial dan jejaring.
                        </li>
                        <li>Memberdayakan potensi yang dimiliki pengurus untuk meningkatkan kesadaran dan kepedulian
                            masyarakat terhadap pendidikan dan kesehatan generasi muda yang <i>hasan</i>.</li>
                    </ul>
                </div>
            </div>

            <div class="logo_section">
                <img src="<?= base_url('assets/images/logo2.png') ?>" alt="">
            </div>
        </div>

        <footer id="footer">
            <div class="left">
                <img src="<?= base_url('assets/images/logo.png') ?>" alt="">
                <ul>
                    <li>Selamat datang di website resmi <br> Yayasan Nur Assyifa - Samarinda - Kalimantan timur</li>
                    <li>
                        <div class="socmed_icon">
                            <a href="https://instagram.com/yayasannurassyifa?igshid=MzRlODBiNWFlZA==">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.facebook.com/profile.php?id=100078731239022">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="middle">
                <ul>
                    <h5 class="text_white">About Us</h5>
                    <li><a href="">Profil</a></li>
                    <li><a href="">Struktur Organisasi</a></li>
                    <li><a href="">Visi Misi</a></li>
                    <li><a href="">Kegiatan Nasda</a></li>
                </ul>
            </div>
            <div class="right">
                <ul>
                    <h5 class="text_white">Keanggotaan</h5>
                    <li><a href="https://api.whatsapp.com/send?phone=08115813345">Mari bergabung dengan kami.</a></li>
                    <br>
                    <li><a href="https://api.whatsapp.com/send?phone=08115813345"><i class="fas fa-phone"></i>
                            (+62) 811 - 5813 - 345</a></li>
                </ul>
            </div>

            <div class="footer_copyright">
                <p>&copy; 2023 Yayasan Nur Assyifa.</p>
            </div>
        </footer>

        <!-- Tambahkan script JavaScript -->
        <script src="<?php echo base_url('assets/js/script.js') ?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>

</html>