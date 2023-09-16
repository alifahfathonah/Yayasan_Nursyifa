<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
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

        <div class="content_dashboard">
            <div class="tittle_dashboard">
                <h1>Content</h1>
                <button onclick="window.location.href='<?= base_url('upload'); ?>'">Tambahkan Data</button>
            </div>
            <?php foreach ($tampil as $k) : ?>
            <div class="content_wrap">
                <div class="content_image">
                    <img src="<?= base_url() . "/assets/images/" . $k['gambar'];?>" alt="">
                </div>

                <div class="content_text">
                    <div class="content_tittle">
                        <h1>
                            <?= $k['judul']; ?>
                        </h1>
                    </div>
                    <div class="content_description">
                        <p>
                            <?= $k['deskripsi']; ?>
                        </p>
                    </div>
                </div>

                <div class="content_button">
                    <a href="<?php echo base_url('Content/' . $k['id'] . '/edit_content') ?>">Edit</a>
                    <form action="<?php echo base_url('Content/' . $k['id'] . '/delete_content') ?>" method="post"
                        class="d-inline" onclick="return confirm('Apakah anda ingin menghapus data aduan ?');">
                        <? csrf_field(); ?>
                        <input type="hidden" value="Delete" name="_method">
                        <button type="submit" class="btn btn-danger btn-s">delete</button>
                    </form>
                </div>
            </div>
            <?php endforeach; ?>

            <div class="pagination">
                <a href="#">&laquo;</a>
                <span><b>1</b></span>
                <span><b>2</b></span>
                <span><b>3</b></span>
                <span><b>4</b></span>
                <span><b>5</b></span>
                <span><b>6</b></span>
                <a href="#">&raquo;</a>
            </div>
        </div>



    </div>

</body>

</html>