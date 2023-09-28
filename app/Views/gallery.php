<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" href="<?= base_url('assets/images/logo.png'); ?>" type="image/x-icon">
    <title>Yayasan Nursyifa</title>
</head>

<body>
    <div id="imageModal" class="modal">
        <span class="close" onclick="closeImageModal()">&times;</span>
        <img id="modalImage" src="" alt="Gambar">
    </div>

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
                            <li><a class="dropdown-item" href="<?php echo base_url('/') ?>#activity">Foto Kegiatan</a>
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

    <div class="about_content">
        <div class="bg_about">
            <div class="overlay_bg"></div>
            <img src="<?= base_url('assets/images/bg.jpg') ?>" alt="">
        </div>
        <div class="tittle_content_about">
            <h1 class="tittle_about">Gallery</h1>
        </div>

        <div class="container_gallery">

            <?php foreach ($images as $image) : ?>
                <div class="mb-2 gallery_content">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal<?= $image['id'] ?>">
                        <img src="<?= base_url() . "/assets/images/" . $image['gambar']; ?>" alt="Gambar" class="img-thumbnail img-fluid">
                    </a>
                </div>
            <?php endforeach ?>


            <!-- Modal for Each Image -->
            <?php foreach ($images as $image) : ?>
                <div class="modal fade" id="imageModal<?= $image['id'] ?>" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="<?= base_url() . "/assets/images/" . $image['gambar']; ?>" alt="Gambar" class="img-fluid">
                            </div>
                            <div class="modal-footer">
                                <h5 class="modal-title" id="imageModalLabel"><?= $image['deskripsi'] ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
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
                <li><a href="">Program Kerja</a></li>
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