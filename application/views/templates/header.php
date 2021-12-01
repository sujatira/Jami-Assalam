<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">

    <!-- Ini google style font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@100;400&display=swap" rel="stylesheet">

    <!-- Ini CSS-ku -->
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">

    <!-- font-awesome -->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- fontku -->
    <style type="text/css">
        @font-face {
            font-family: spark;
            src: url('Spark.oft');
        }
    </style>
    <title><?= $judul ?></title>
</head>

<body style="background-color: ;">
    <nav class="navbar navbar-expand-lg navbar-light bg-ala">
        <div class="container">
            <a class="navbar-brand navnavan" href="<?= base_url('home') ?>">Jami Assalam</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav justify-content-end" id="navbarSupportedContent">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="<?= base_url('artikel') ?>">Artikel</a>
                    <a class="nav-link" href="<?= base_url('kajian') ?>">Kajian</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            About
                        </a>
                        <ul class="dropdown-menu bg-drop drop-font" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-star-and-crescent"></i> Masjid Jami Assalam</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-code"></i> Developer</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Menu
                        </a>
                        <ul class="dropdown-menu bg-drop drop-font" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?= base_url('User') ?>"><i class="fas fa-user"></i> Akun</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('Auth') ?>"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                        </ul>
                    </li>
                </div>
            </div>
        </div>
    </nav>
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-ala">
        <div class="container">
            <a class="navnavan" href="<?= base_url('home') ?>">Jami Assalam</a>
            <div class="collapse navbar-collapse">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="<?= base_url('artikel') ?>">Artikel</a>
                    <a class="nav-link" href="<?= base_url('kajian') ?>">Kajian</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            About
                        </a>
                        <ul class="dropdown-menu bg-drop drop-font" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-star-and-crescent"></i> Masjid Jami Assalam</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-code"></i> Developer</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Menu
                        </a>
                        <ul class="dropdown-menu bg-drop drop-font" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?= base_url('User') ?>"><i class="fas fa-user"></i> Akun</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('Auth') ?>"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                        </ul>
                    </li>
                </div>
            </div>
        </div>
    </nav> -->