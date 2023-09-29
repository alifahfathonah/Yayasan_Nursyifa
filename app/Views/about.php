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
            <p>Yayasan Nur Assyifa Samarinda</p>
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
        <!-- <div class="bg_about">
            <div class="overlay_bg"></div>
            <img src="<?= base_url('assets/images/logo.png') ?>" alt="">
        </div> -->
        <div class="tittle_content_about">
            <h1 class="tittle_about">Salam Sambutan</h1>
        </div>

        <div class="container_about">
            <div class="about_one">
                <p>Segala Puji bagi Allah Subhanahu wa ta’ala yang telah memberikan rahmat dan karunia-Nya kepada kami
                    untuk
                    mendirikan Yayasan Nur Assyifa Samarinda (Nasda) pada tanggal 4 April 2022. Yayasan Nasda melalui
                    Komunitas Dokter Berbagi merupakan sebuah yayasan yang bergerak di bidang keagamaan, sosial dan
                    kemanusiaan. Sebuah komunitas yang keanggotaannya terdiri dari dokter maupun non-dokter dengan
                    tujuan
                    sebagai wadah berbagi dan membantu masyarakat.</p>
                <img src="<?= base_url('assets/images/sambutan ketua.jpg') ?>" alt="">
            </div>
            <div class="about_two">
                <p>Memasuki tahun kedua didirikan, Yayasan Nur Assyifa Samarinda (Nasda) telah mendirikan TPQ Nurul
                    Qur’an
                    yang peresmiannya dilakukan pada tanggal 21 Desember 2022. Selain itu, Yayasan Nasda telah melakukan
                    beberapa kegiatan yang akan kami uraikan kemudian.</p>
                <p>Kami berharap semoga itikad baik kami diberikan kemudahan dalam melaksanakan kegiatan dan program
                    kerja
                    sehingga kami dapat menebar kebaikan sebanyak-banyaknya dan seluas-luasnya. Kamipun mengetuk hati
                    dan
                    mengajak seluruh kaum muslimin untuk ikut serta dalam menyukseskan program-program kami dengan turut
                    serta berdonasi atau berkontribusi.</p>
                <p>Semoga Allah memberikan taufiq dan hidayah-Nya kepada kita semua untuk saling tolong-menolong dalam
                    kebaikan. Semoga amal kita menjadi pemberat timbangan kebaikan di hari kiamat kelak. Amin.</p>
                <br>
                <br>
                <p><i>Ketua Yayasan Nur Assyifa Samarinda</i></p>
                <p style="font-weight: bold;">dr. Abdul Haris Nur, Sp.An-TI</p>
            </div>
        </div>
    </div>

    <div class="visi">
        <div class="tittle_visi">
            <h2>VISI DAN MISI YAYASAN NUR ASSYIFA SAMARINDA</h2>
        </div>

        <div class="container_visi" id="visi_misi">
            <div class="section_content">
                <img src="<?= base_url('assets/images/Ellipse 3.png') ?>" alt="">
            </div>
            <div class="content_visi">
                <h3>Visi</h3>
                <p>Menjadi wadah bagi masyarakat umum khususnya bagi dokter dan keluarganya untuk membantu masyarakat
                    terutama generasi muda yang hasan agar menjalankan kehidupannya sesuai tuntunan Al-Qur’an dan
                    As-Sunnah sehingga lebih kreatif dan inovatif dalam mewujudkan perubahan sosial, moral, dan akhlak.
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
                    <li>Membina dan mencerdaskan generasi bangsa melalui penyelenggaraan pendidikan formal dan non
                        formal dengan menanamkan ilmu keagamaan serta kepedulian terhadap sesama.</li>
                    <li>Membina masyarakat untuk peduli dan sadar akan kesehatan dan kebersihan diri serta lingkungan
                        melalui program-program sosial dan jejaring.
                    </li>
                    <li>ngembangan kegiatan yang meningkatkan IMTAQ dan IPTEK sesuai ajaran aqidah islam.</li>
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
                        <a href="https://instagram.com/yayasannurassyifa?igshid=MzRlODBiNWFlZA==">
                            <i class="fab fa-youtube"></i>
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