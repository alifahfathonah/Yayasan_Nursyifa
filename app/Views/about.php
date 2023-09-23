<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Yayasan Nursyifa</title>
</head>

<body>
    <nav>
        <div class="header">
            <div class="content_header">
                <p>Yayasan Nur Assyifa - Samarinda - Kalimantan Timur</p>
                <a href="<?php echo base_url('login') ?>">Admin</a>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/') ?>">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo base_url('/about') ?>">Profile</a></li>
                            <li><a class="dropdown-item" href="#struktur_organisasi">Struktur Organisasi</a></li>
                            <li><a class="dropdown-item" href="#visi_misi">Visi-Misi</a></li>
                            <li><a class="dropdown-item" href="#program_kerja">Program Kerja</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Gallery
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#activity">Foto Kegiatan</a></li>
                            <li><a class="dropdown-item" href="#">Sumbangsih</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Keanggotaan
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#joinqr">Cara Berpartisipasi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container_about">
        <h1 class="tittle_content_about">Salam Sambutan</h1>
        <br>
        <div class="about_one">
            <p>Segala Puji bagi Allah Subhanahu wa ta’ala yang telah memberikan rahmat dan karunia-Nya kepada kami untuk
                mendirikan Yayasan Nur Assyifa Samarinda (Nasda) pada tanggal 4 April 2022. Yayasan Nasda melalui
                Komunitas Dokter Berbagi merupakan sebuah yayasan yang bergerak di bidang keagamaan, sosial dan
                kemanusiaan. Sebuah komunitas yang keanggotaannya terdiri dari dokter maupun non-dokter dengan tujuan
                sebagai wadah berbagi dan membantu masyarakat.</p>
            <img src="<?= base_url('assets/images/sambutan ketua.jpg') ?>" alt="">
        </div>
        <div class="about_two">
            <p>Memasuki tahun kedua didirikan, Yayasan Nur Assyifa Samarinda (Nasda) telah mendirikan TPQ Nurul Qur’an
                yang peresmiannya dilakukan pada tanggal 21 Desember 2022. Selain itu, Yayasan Nasda telah melakukan
                beberapa kegiatan yang akan kami uraikan kemudian.</p>
            <p>Kami berharap semoga itikad baik kami diberikan kemudahan dalam melaksanakan kegiatan dan program kerja
                sehingga kami dapat menebar kebaikan sebanyak-banyaknya dan seluas-luasnya. Kamipun mengetuk hati dan
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
            <div class="image_overlay"></div>
            <img src="<?= base_url('assets/images/logo2.png') ?>" alt="">
        </div>
    </div>

    <footer id="footer">
        <div class="left">
            <img src="<?= base_url('assets/images/logo.png') ?>" alt="">
            <ul>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione quaerat quasi itaque fugit
                    similique animi
                    pariatur! Cumque temporibus in, magni, vero aperiam voluptatibus expedita error eaque autem,
                    veritatis
                    assumenda consequuntur?</li>
                <li>
                    <div class="socmed_icon">
                        <a href="https://www.instagram.com/">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.facebook.com/">
                            <i class="fab fa-facebook"></i>
                        </a> <!-- Ikon Facebook -->
                        <a href="https://www.linkedin.com/">
                            <i class="fab fa-linkedin"></i>
                        </a> <!-- Ikon LinkedIn -->
                        <a href="https://www.instagram.com/">
                            <i class="fab fa-instagram"></i>
                        </a><!-- Ikon Instagram -->
                    </div>
                </li>
            </ul>
        </div>
        <div class="middle">

            <ul>
                <h5>About Us</h5>
                <li><a href="">Profil</a></li>
                <li><a href="">Struktur Organisasi</a></li>
                <li><a href="">Visi Misi</a></li>
                <li><a href="">Program Kerja</a></li>
            </ul>
        </div>
        <div class="right">
            <ul>
                <h5>Keanggotaan</h5>
                <li><a href="">Mari bergabung dengan kami.</a></li>
                <br>
                <li><a href="">0877-3152-3378</a></li>
            </ul>
        </div>
    </footer>

    <!-- Tambahkan script JavaScript -->
    <script src="<?php echo base_url('assets/js/script.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>