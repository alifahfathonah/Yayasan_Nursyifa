<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                        <form action="<?php echo base_url('Content/' . $k['id'] . '/delete_content') ?>" method="post" class="d-inline" onclick="return confirm('Apakah anda ingin menghapus data aduan ?');">
                            <? csrf_field(); ?>
                            <input type="hidden" value="Delete" name="_method">
                            <button type="submit" class="btn btn-danger btn-s">Delete</button>
                        </form>
                    </div>


                </div>
            <?php endforeach; ?>

            <div class="pagination">
                <?= $pager->links('tampil', 'daftar_pagination');
                ?>
            </div>
        </div>
    </div>

    <!-- Tambahkan script JavaScript -->
    <script src="<?php echo base_url('assets/js/script.js') ?>"></script>
</body>

</html>