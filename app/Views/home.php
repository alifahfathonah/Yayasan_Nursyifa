<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Yayasan Nursyifa</title>
</head>

<body>
    <nav class="header">
        <div class="content_header">
            <div class="image_logo">
                <img src="<?php echo base_url('assets/images/logo.png') ?>" alt="">
            </div>
            <p>Yayasan Nur Assyifa - Samarinda - Kalimantan Timur</p>
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
                            <li><a class="dropdown-item" href="#struktur_organisasi">Struktur Organisasi</a></li>
                            <li><a class="dropdown-item" href="#visi_misi">Visi-Misi</a></li>
                            <li><a class="dropdown-item" href="#program_kerja">Program Kerja</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Gallery
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo base_url('/gallery') ?>">Foto Kegiatan</a>
                            </li>
                            <li><a class="dropdown-item" href="#">Sumbangsih</a></li>
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

    <div class="carousel_home" id="profile">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active bg-light" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class="bg-light"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo base_url('assets/images/Home.jpeg') ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-lg-flex flex-column align-items-center justify-content-center gap-xl-5 h-100">
                        <p style="font-size: 2vw; font-weight: bold; font-family: 'Poppins', sans-serif; width: 70%;" class="text-light">
                            Selamat Datang di Yayasan Nur Assyifa
                            membangun negeri
                            untuk
                            Indonesia</p>
                        <a>Tentang Kami <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url('assets/images/Home2.jpeg') ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-lg-flex flex-column align-items-center justify-content-center gap-xl-5 h-100">
                        <p style="font-size: 2vw; font-weight: bold; font-family: 'Poppins', sans-serif; width: 70%;" class="text-light">
                            Selamat Datang di Yayasan Nur Assyifa
                            membangun negeri
                            untuk
                            Indonesia</p>
                        <a>Tentang Kami <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark border-primary rounded" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark border-primary rounded" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="visi_misi">
        <div class="visi_nav">
            <i class="fas fa-eye"></i>
            <div class="visi_text">
                <h1>Visi</h1>
                <a href="<?php echo base_url('/about') ?>">Selengkapnya</a>
            </div>
        </div>
        <div class="misi_nav">
            <i class="fas fa-bullseye"></i>
            <div class="misi_text">
                <h1>Misi</h1>
                <a href="<?php echo base_url('/about') ?>">Selengkapnya</a>
            </div>
        </div>
    </div>

    <div class="struktur_organisasi" id="struktur_organisasi">
        <h1>Struktur Organisasi</h1>
        <div class="struktur">
            <img src="<?= base_url('assets/images/struktur_organisasi 1.png') ?>" alt="">
        </div>
    </div>

    <div class="gallery">
        <img src="<?= base_url('assets/images/bg.jpg') ?>" alt="">
        <div class="gallery_overlay">
            <h1 class="text_white">Gallery</h1>
        </div>
        <div class="gallery_section">
            <div class="gallery_photo">
                <?php foreach ($tampil as $k) : ?>
                    <div class="gallery_selection">
                        <img src="<?= base_url() . "/assets/images/" . $k['gambar']; ?>" alt="">
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="gallery_button">
                <a href="<?php echo base_url('/gallery') ?>">Selengkapnya</a>
            </div>
        </div>
    </div>

    <div class="youtube_content">
        <div class="youtube_frame">
            <iframe src="https://www.youtube.com/embed/72ECTLKS_pQ"></iframe>
        </div>
        <div class="youtube_frame">
            <iframe src="https://www.youtube.com/embed/72ECTLKS_pQ"></iframe>
        </div>
        <div class="youtube_frame">
            <iframe src="https://www.youtube.com/embed/72ECTLKS_pQ"></iframe>
        </div>
    </div>

    <div class="activity" id="activity">
        <div class="tittle_activity">
            <h1>Our Activity</h1>
        </div>
        <div class="slider-container">
            <div class="card-slider">
                <?php foreach ($tampil as $k) : ?>
                    <div class="card">
                        <a href="<?php echo base_url('Activity/' . $k['id'] . '/activity_content') ?>">
                            <div class="card_images">
                                <img src="<?= base_url() . "/assets/images/" . $k['gambar']; ?>" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?= $k['judul'] ?></h5>
                                <p class="card-text"><?= $k['deskripsi'] ?></p>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="button_slider">
            <button class="prev-button">Previous</button>
            <button class="next-button">Next</button>
        </div>
    </div>

    <div class="partnership">
        <div class="tittle_partnership">
            <h1>Bekerja sama dengan</h1>
        </div>
        <div class="image_partnership">
            <img src="<?= base_url('assets/images/image 2.png') ?>" alt="">
            <img src="<?= base_url('assets/images/image 3.png') ?>" alt="">
            <img src="<?= base_url('assets/images/image 4.png') ?>" alt="">
        </div>
    </div>

    <div class="joinqr" id="joinqr">
        <div class="tittle_join">
            <h1>Mari bergabung bersama kami</h1>
        </div>
        <div class="image_join">
            <img src="<?= base_url('assets/images/qr.png') ?>" alt="">
        </div>
        <a href="https://bit.ly/gabunganggotayayasannursyifa" target="_blank">bit.ly/gabunganggotayayasannursyifa
        </a>
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

        <div class="footer_copyright">
            <p>&copy; 2023 Yayasan Nur Assyifa. Hak Cipta Dilindungi.</p>
        </div>
    </footer>

    <!-- Tambahkan script JavaScript -->
    <script src="<?php echo base_url('assets/js/script.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>