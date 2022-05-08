<?php
session_start();

if (!isset($_SESSION['kadi'])) {
    die('Giriş Yetkiniz Yoktur.');
}

require_once('baglan.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="../css/style.css">

    <title>Başlık</title>

    <script src="//cdn.ckeditor.com/4.18.0/full/ckeditor.js"></script>

</head>

<body>


    <section id="adminContent">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 bg-dark text-white">
                    <h2>Arı Bilgi</h2>
                    <ul class="p-0">
                        <li><a href="dashboard.php">Başlangıç</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle p-0" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                Ana Sayfa
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-dark" href="anabanner.php">Banner Ayarları</a>
                                <a class="dropdown-item text-dark" href="pricing.php">Princing Ayarları</a>
                                <a class="dropdown-item text-dark" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle p-0" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                Hakkımda
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-dark" href="hakkimdabanner.php">Banner Ayarları</a>
                                <a class="dropdown-item text-dark" href="hakkimdaicerik.php">İçerik Ayarları</a>
                            </div>
                        </li>
                        <li><a href="sayfalar.php">Sayfalar</a></li>
                        <li><a href="yazilar.php">Yazılar</a></li>
                        <li><a href="yorumlar.php">Yorumlar</a></li>
                        <li><a href="kategori.php">Kategoriler</a></li>
                        <li><a href="mesajlar.php">Mesajlar</a></li>
                        <li><a href="ebulten.php">E-Bülten Üyeleri</a></li>
                        <li><a href="ayarlar.php">Ayarlar</a></li>
                        <li><a href="ctaekle.php">CTA Ayarları</a></li>
                        <li><a href="logout.php">Çıkış</a></li>
                    </ul>
                </div>
                <div class="col-md-10">