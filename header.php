<?php
session_start();
require_once('baglan.php');


$sorgu_bottom = $db->prepare('select * from ayarlar order by id desc limit 1');
$sorgu_bottom->execute();
$satir_bottom = $sorgu_bottom->fetch();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>Başlık</title>
</head>

<body>

    <!-- Navbar Section Start -->
    <section id="menu" class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Ana Sayfa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="hakkimda.php">Hakkımda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="portfolyo.php">Portfolyo</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                                        Hizmetlerim
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <?php
                                        $sorgu_altmenu = $db->prepare('select * from sayfalar where sayfaturu = "Alt Sayfa" order by baslik asc ');
                                        $sorgu_altmenu->execute();

                                        if ($sorgu_altmenu->rowCount()) {
                                            foreach ($sorgu_altmenu as $satir_altmenu) {
                                        ?>
                                                <a class="dropdown-item" href="samplepage.php?id=<?php echo $satir_altmenu['id']; ?>"><?php echo $satir_altmenu['baslik']; ?></a>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="blog.php">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="iletisim.php">İletişim</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Navbar Section End -->