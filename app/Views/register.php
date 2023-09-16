<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <header>
        <p class="text_header">Yayasan - Samarinda - Kalimantan Timur</p>
    </header>

    <div class="container">
        <div class="container_left">
            <div class="logo">
                <img src="logo.png" alt="">
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
            if(session()->getFlashdata('error')) : ?>
            <div class="alert aler-danger alert-dismissible fade show" role="alert">
                <strong><?= session()->getFlashdata('error') ?></strong>
            </div>
            <?php endif; ?>

            <form class="form_login" action="<?= base_url('Login/register_user')?>" method="POST" role="form">
                <?= csrf_field() ?>
                <div class="username_login">
                    <label for="Username">Username</label>
                    <input class="Username" type="text" name="username">
                </div>
                <div class="username_login">
                    <label for="Username">Email</label>
                    <input class="Username" type="text" name="email">
                </div>
                <div class="username_login">
                    <label for="Username">Password Konfirmasi</label>
                    <input class="Username" type="text" name="confirm_password">
                </div>
                <div class="password_login">
                    <label for="pw">Password</label>
                    <input class="pw" type="password" name="password">
                </div>
                <select name="role" class="form-control form-control-xl" id="roleSelect">
                    <option value="1"></option>
                </select>
                <script>
                var roleSelect = document.getElementById("roleSelect");

                roleSelect.style.display = "none";
                </script>
                <div class="button_login">
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>