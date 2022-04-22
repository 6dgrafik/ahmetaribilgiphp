<?php
require_once('header.php');

$id = $_GET['id'];
$sorgu_makale = $db->prepare('select * from yazilar where id=?');
$sorgu_makale->execute(array($id));
$satir_makale = $sorgu_makale->fetch();
$baslik = $satir_makale['baslik'];
?>



<!-- Bread Crumb Section Start -->
<section id="bread" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="index.php">Ana Sayfa</a> / <a href="blog.php">Blog</a> / <?php echo $satir_makale['baslik']; ?>
            </div>
        </div>
    </div>
</section>
<!-- Bread Crumb Section End -->

<!-- İçerik Section Start -->
<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <img src="<?php echo substr($satir_makale['foto'], 3); ?>" alt="<?php echo $satir_makale['fotoalt']; ?>" class="w-100 mb-3">
                <h1><?php echo $satir_makale['baslik']; ?></h1>
                <small>Yayınlanma Tarihi: <?php echo $satir_makale['tarih']; ?> - Kategori: <a href="kategoripage.php?kategori=<?php echo $satir_makale['kategori']; ?>"><?php echo $satir_makale['kategori']; ?></a> </small> <br>

                <?php echo $satir_makale['icerik']; ?>
                <hr>

                <h5>Yorumlar</h5>
                <?php
                $sorgu_yorumlar = $db->prepare('select * from yorumlar where durum = "onaylandı" order by id desc');
                $sorgu_yorumlar->execute();

                if ($sorgu_yorumlar->rowCount()) {
                    foreach ($sorgu_yorumlar as $satir_yorumlar) {
                        if ($satir_yorumlar['baslik'] == $satir_makale['baslik']) {
                ?>
                            <strong><?php echo $satir_yorumlar['adiniz'] . ' ' . $satir_yorumlar['soyadiniz']; ?></strong> - <small><?php echo$satir_yorumlar['tarih']; ?></small><br>
                            <p><?php echo $satir_yorumlar['yorum']; ?></p>
                            <hr>
                <?php
                        }
                    }
                }
               ?>
                <h5 class="mt-5">Yorum Yapın</h5>
                <form method="post" class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="adiniz" placeholder="Adınız" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="soyadiniz" placeholder="Soyadınız" class="form-control">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="E-Posta Adresiniz" class="form-control">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <textarea name="yorum" placeholder="Yorumuz" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-mor w-25">Gönder</button>
                        </div>
                    </div>
                </form>
                <?php

                if ($_POST) {
                    $adiniz = $_POST['adiniz'];
                    $soyadiniz = $_POST['soyadiniz'];
                    $email = $_POST['email'];
                    $yorum = $_POST['yorum'];
                    $durum = "onaylanmadı";
                    $tarih = date('d.m.Y');

                    $sorgu_yorumkaydet = $db->prepare('insert into yorumlar(adiniz,soyadiniz,email,yorum,baslik,durum,tarih) values(?,?,?,?,?,?,?)');
                    $sorgu_yorumkaydet->execute(array($adiniz, $soyadiniz, $email, $yorum, $baslik, $durum, $tarih));

                    if ($sorgu_yorumkaydet->rowCount()) {
                        echo '<div class="alert alert-success">Yorumunuz Admin Onayına Gönderildi</div>';
                    } else {
                        echo '<div class="alert alert-danger">Hata Oluştu. Lütfen Tekrar Deneyin</div>';
                    }
                }

                ?>
            </div>
            <?php require_once('sidebar.php'); ?>
        </div>
    </div>
</section>
<!-- İçerik Section End -->

<?php require_once('footer.php'); ?>