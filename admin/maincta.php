<?php require_once('header.php'); ?>

<!-- Main Cta Section Start -->

<section id="mainCta" class="py-3">
    <div class="container">
        <div class="row">
            <h2>Ana Sayfa Cta Ayarları</h2>
        </div>
        <form method="post" class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="baslik" placeholder="Slogan Giriniz" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="kisayazi" placeholder="Kısa Açıklama Giriniz" class="form-control">
                </div>
                <div class="form-group">
                    <input type="color" name="background"> <small>Arkaplan Rengi Seçiniz</small>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="row">
                        <div class="col-3"><input type="number" name="font" class="form-control"></div>
                        <div class="col-9 my-auto"><small>Slogan Yazı Boyutu Girin</small></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-3"><input type="number" name="font2" class="form-control"></div>
                        <div class="col-9 my-auto"><small>Kısa Açıklama Yazı Boyutu Girin</small></div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" value="Kaydet" class="btn btn-success">
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Main Cta Section End -->

<?php

if ($_POST) {
    $baslik = $_POST['baslik'];
    $kisayazi = $_POST['kisayazi'];
    $background = $_POST['background'];
    $font = $_POST['font'];
    $font2 = $_POST['font2'];

    $sorgu_maincta = $db->prepare('insert into maincta(baslik,kisayazi,background,font,font2) values(?,?,?,?,?)');
    $sorgu_maincta->execute(array($baslik, $kisayazi, $background, $font, $font2));

    if ($sorgu_maincta->rowCount()) {
        echo '<section id="alert">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-success">
                        Kayıt Başarılı
                    </div>
                </div>
            </div>
        </div>
    </section>';
    } else {
        echo '<section id="alert">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-danger">
                        Hatalı Kayıt
                    </div>
                </div>
            </div>
        </div>
    </section>';
    }
}

?>


<!-- Main Cta List Start -->
<section id="cta">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Slogan</th>
                            <th>Kısa Açıklama</th>
                            <th>Background Renk</th>
                            <th>Slogan Font</th>
                            <th>Kısa Yazı Font</th>
                            <th>Düzenle</th>
                            <th>Sil</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $sorgu_ctalist = $db->prepare('select * from maincta order by id desc');
                        $sorgu_ctalist->execute();

                        if ($sorgu_ctalist->rowCount()) {
                            foreach ($sorgu_ctalist as $satir_ctalist) {
                                echo '<tr><td>' . $satir_ctalist['id'] . '</td><td>' . $satir_ctalist['baslik'] . '</td><td>' . $satir_ctalist['kisayazi'] . '</td><td style="background-color:' . $satir_ctalist['background'] . ';">' . $satir_ctalist['background'] . '</td><td>' . $satir_ctalist['font'] . '</td><td>' . $satir_ctalist['font2'] . '</td><td><a href="mainctaduzenle.php?id=' . $satir_ctalist['id'] . '"><button class="btn btn-warning">Düzenle</button></a></td><td><a href="mainctasil.php?id=' . $satir_ctalist['id'] . '"><button class="btn btn-danger">Sil</button></a></td></tr>';
                            }
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- Main Cta List End -->






<?php require_once('footer.php'); ?>