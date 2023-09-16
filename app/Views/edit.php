<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Upload</title>
</head>

<body>
    <div class="container_dashboard">
        <div class="sidebar">
            <div class="profile">
                <img src="profile.png" alt="">
                <h2>Admin</h2>
            </div>

            <ul>
                <li class="tittle_nav">
                    <p>MENU</p>
                </li>
            </ul>
            <ul>
                <li><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                <li><a href="<?= base_url('upload'); ?>">Upload</a></li>
                <li><a href="<?php echo base_url('Login/logout') ?>">Logout</a></li>
            </ul>
        </div>
        <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-danger" role="alert">
                <h4>Periksa Entrian Form</h4>
                </hr />
                <?php echo session()->getFlashdata('error'); ?>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?= session()->getFlashdata('pesan'); ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <?php foreach ($tampil as $k) : ?>
            <div class="content_dashboard_upload">
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
</body>

</html>