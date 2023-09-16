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
                <p>Yayasan Nursyifa - Samarinda - Kalimantan Timur</p>
                <a href="<?php echo base_url('login') ?>">Login</a>
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
                            <li><a class="dropdown-item" href="#profile">Profile</a></li>
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

    <div class="carousel_home" id="profile">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active bg-dark" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class="bg-black"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" class="bg-black"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo base_url('assets/images/Anggota.jpeg') ?>" class="d-block w-100" alt="...">
                    <div class="image_overlay"></div>
                    <div class="carousel-caption d-lg-flex flex-column align-items-center justify-content-center gap-xl-5">
                        <img src="<?php echo base_url('assets/images/logo.png') ?>" alt="">
                        <p style="font-size: xx-large; font-weight: bold; font-family: 'Poppins', sans-serif;" class="text-dark w-90">
                            Selamat Datang di <span class="text-success">Yayasan Nursyifa</span>, membangun negeri untuk
                            Indonesia</p>
                        <p class="text-dark">KETUA Dr.H Abdul Hams N. Sp. AM. <br>PEMBINA Dr.Handy Wiradharm Sp.OG.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url('assets/images/Anggota.jpeg') ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-flex d-md-block">
                        <img src="<?= base_url('assets/images/logo.png') ?>" alt="">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url('assets/images/Anggota.jpeg') ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="visi">
        <div class="tittle_visi">
            <h2>VISI & MISI YAYASAN</h2>
        </div>

        <div class="container_visi" id="visi_misi">
            <div class="section_content">
                <img src="<?= base_url('assets/images/Ellipse 3.png') ?>" alt="">
            </div>
            <div class="content_visi">
                <h3>Visi</h3>
                <p>Menjadi Lembaga Dakwah dan Pendidikan Islam terkemuka dan modern dalam mencerahkan dan mencerdaskan
                    kehidupan
                    bangsa guna membentuk masyarakat Indonesia yang beriman, berilmu, beramal, dan bertaqwa menuju izzul
                    Islam wal
                    muslimin</p>
            </div>
        </div>

        <div class="container_misi">
            <div class="section_content">
                <img src="<?= base_url('assets/images/Ellipse 3.png') ?>" alt="">
            </div>
            <div class="content_misi">
                <h3>Misi</h3>
                <ul>
                    <li>Membina dan mengembangkan dakwah dan pendidikan Islam dalam arti yang seluar-luasnya dengan
                        semangat amar
                        makruf nahi munkar.</li>
                    <li>Mengawal dan membela aqidah Islamiyah berdasarkan Al-Qurân dan Sunnah Rasul.</li>
                    <li>Menegakan nilai-nilai kemanusiaan sesuai ajaran islam demi kesejahteraan umat dan bangsa lahir
                        dan batin.
                    </li>
                    <li>Meningkatkan kualitas SDM guna mewujudkan masyarakat yang beriman, berilmu, beramal, dan
                        bertaqwa melalui
                        pengembangan kegiatan yang meningkatkan IMTAQ dan IPTEK sesuai ajaran aqidah islam.</li>
                    <li>Mendorong terwujudnya persatuan dan kesatuan umat untuk kesejahteraan seluruh rakyat Indonesia.
                    </li>
                </ul>
            </div>
        </div>

        <div class="logo_section">
            <div class="image_overlay"></div>
            <img src="<?= base_url('assets/images/logo2.png') ?>" alt="">
        </div>
    </div>

    <div class="struktur_organisasi" id="struktur_organisasi">
        <h1>Struktur Organisasi</h1>
        <div class="struktur">
            <img src="<?= base_url('assets/images/struktur_organisasi 1.png') ?>" alt="">
        </div>
    </div>

    <div class="program_kerja" id="program_kerja">
        <div class="program_kerja_content">
            <h1>Program Kerja</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint eos culpa cupiditate aperiam soluta, qui
                dolore
                nesciunt eum iure assumenda, repellat, repudiandae possimus dolor vero tempora iusto molestias
                reprehenderit
                odio?</p>
            <a href="">Selengkapnya</a>
        </div>
        <div class="program_kerja_img">
            <img src="<?= base_url('assets/images/Desain tanpa judul.png') ?>" alt="">
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
                        <div class="card_images">
                            <img src="<?= base_url() . "/assets/images/" . $k['gambar']; ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $k['judul'] ?></h5>
                            <p class="card-text"><?= $k['deskripsi'] ?></p>
                        </div>
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
        <a href="https://bit.ly/gabunganggotayayasannursyifa" target="_blank">
            <button>bit.ly/gabunganggotayayasannursyifa</button>
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
    </footer>

    <!-- Tambahkan script JavaScript -->
    <script src="<?php echo base_url('assets/js/script.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>