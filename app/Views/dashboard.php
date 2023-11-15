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
    <title>Dashboard Admin</title>
</head>

<body>
    <div class="container_dashboard">
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
                'dashboard' => 'active',
            ];
            ?>

            <ul>
                <li><a class="<?= $active['dashboard'] ?>" href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                <li><a href="<?= base_url('upload'); ?>">Upload</a></li>
                <li><a href="<?php echo base_url('Login/logout') ?>">Logout</a></li>
            </ul>
        </div>

        <div class="content_dashboard">
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
            <div class="tittle_dashboard">
                <h1>Content</h1>
                <button onclick="window.location.href='<?= base_url('upload'); ?>'">Tambahkan Data</button>
            </div>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong><?= session()->getFlashdata('pesan'); ?></strong>
                </div>
            <?php endif; ?>
            <?php foreach ($tampil as $k) : ?>
                <hr>
                <div class="content_wrap">
                    <div class="content_image">
                        <img src="<?= base_url() . "/assets/images/" . $k['gambar']; ?>" alt="">
                    </div>

                    <div class="content_text">
                        <div class="content_tittle">
                            <h4>
                                <?= $k['judul']; ?>
                            </h4>
                        </div>
                        <div class="content_description">
                            <p>
                                <?= $k['deskripsi']; ?>
                            </p>
                        </div>
                    </div>

                    <div class="content_button">
                        <a href="<?php echo base_url('Content/' . $k['id'] . '/edit_content') ?>">
                            <button class="btn" style="color: black; background-color: #FAFF1EC4">Edit</button>
                        </a>
                        <form action="<?php echo base_url('Content/' . $k['id'] . '/delete_content') ?>" method="post" class="d-inline" onclick="return confirm('Apakah anda ingin menghapus data ?');">
                            <? csrf_field(); ?>
                            <input type="hidden" value="Delete" name="_method">
                            <button type="submit" class="btn btn-danger btn-s">Delete</button>
                        </form>
                    </div>
                </div>
                <hr>
            <?php endforeach; ?>

            <div class="pagination">
                <?= $pager->links('tampil', 'daftar_pagination');
                ?>
            </div>
        </div>
    </div>

    <!-- Tambahkan script JavaScript -->
    <script src="<?php echo base_url('assets/js/script.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/script.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>