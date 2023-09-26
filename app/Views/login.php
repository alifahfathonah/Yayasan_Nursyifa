<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Login</title>
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

    <div class="container">
        <div class="container_left">
            <div class="logo">
                <img src="<?php echo base_url('assets/images/logo.png') ?>" alt="">
            </div>
            <div class="logo_tittle">
                <p class="text_user">Hallo Admin !</p>
                <p class="text_welcome">Selamat Datang Kembali</p>
            </div>
        </div>

        <div class="container_right">
            <div class="tittle_login">
                <p>Sign In</p>
            </div>
            <div class="sub_login">
                <p>Using your admin account</p>
            </div>

            <?php
            if (session()->getFlashdata('error')) : ?>
                <div class="alert aler-danger alert-dismissible fade show" role="alert">
                    <strong><?= session()->getFlashdata('error') ?></strong>
                </div>
            <?php endif; ?>

            <form class="form_login" action="<?= base_url('Login/login_user') ?>" method="post" role="form">
                <?= csrf_field() ?>
                <div class="username_login">
                    <label for="Username">Username</label>
                    <input class="Username" type="text" name="username">
                </div>
                <div class="password_login">
                    <label for="pw">Password</label>
                    <input class="pw" type="password" name="password">
                </div>
                <div class="button_login">
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>