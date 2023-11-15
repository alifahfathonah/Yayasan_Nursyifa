<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url('assets/images/logo.png'); ?>" type="image/x-icon">
    <title>Dashboard Upload</title>
</head>

<body>
    <div class="container_dashboard">
        <nav class="navbar navbar-dashboard navbar-expand-lg">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?= base_url('dashboard'); ?>">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?= base_url('upload'); ?>">Upload</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?php echo base_url('Login/logout') ?>">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="sidebar">
            <div class="profile">
                <img src="<?php echo base_url('assets/images/profile.png') ?>" alt="">
                <h2>Admin</h2>
            </div>

            <ul>
                <li class="tittle_nav">
                    <p>MENU</p>
                </li>
            </ul>

            <?php
            $active = [
                'upload' => 'active',
            ];
            ?>

            <ul>
                <li><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                <li><a class="<?= $active['upload'] ?>" href="<?= base_url('upload'); ?>">Upload</a></li>
                <li><a href="<?php echo base_url('Login/logout') ?>">Logout</a></li>
            </ul>
        </div>

        <?php foreach ($tampil as $k) : ?>
            <div class="content_dashboard_upload">
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong style="list-style: none;"><?= session()->getFlashdata('error'); ?></strong>
                    </div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><?= session()->getFlashdata('pesan'); ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <form action="<?php echo base_url('Content/' . $k['id'] . '/update_edit') ?>" method="post" enctype="multipart/form-data" class="form_upload">
                    <div class="upload_judul">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" id="" value="<?= $k['judul']; ?>">
                    </div>

                    <div class="upload_deskripsi">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" name="deskripsi" id="" value="<?= $k['deskripsi']; ?>">
                    </div>

                    <div class="upload_image">
                        <label for="gambar">Klik di sini dan silahkan upload gambar!
                            <input type="file" name="gambar" id="gambar" value="<?= $k['gambar']; ?>" require>
                        </label>
                    </div>
                    <div class="button_upload">
                        <button>Submit</button>
                    </div>
                </form>
            <?php endforeach; ?>

            </div>
    </div>

    <script src="<?php echo base_url('assets/js/script.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/script.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>