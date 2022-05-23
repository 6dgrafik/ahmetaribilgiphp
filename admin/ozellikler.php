<?php require_once('header.php'); ?>

<!-- özellik Ekle Start -->
<section id="ozellik" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Ana Sayfa Özellik Ekle</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form method="post">
                    <div class="form-group">
                        <select name="ikon" class="form-control">
                            <option value="">İkon Seçiniz</option>
                            <option value='<i class="bi bi-apple"></i>'>Apple Icon</option>
                            <option value='<i class="bi bi-badge-wc-fill"></i>'>WC Icon</option>
                            <option value='<i class="bi bi-balloon-heart-fill"></i>'>Baloon Heart Icon</option>
                            <option value='<i class="bi bi-bootstrap-fill"></i>'>Bootstrap ıcon</option>
                            <option value='<i class="bi bi-behance"></i>'>Behance Icon</option>
                            <option value='<i class="bi bi-bell-fill"></i>'>Bell Icon</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" name="ozbaslik" placeholder="Özelik Adı Girin" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="ozaciklama" placeholder="Özellik Kısa Açıklaması Girin" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success w-100" name="ozekle">Kaydet</button>
                    </div>
                </form>
                <?php
                if (isset($_POST['ozekle'])) {
                    $ikon = $_POST['ikon'];
                    $ozbaslik = $_POST['ozbaslik'];
                    $ozaciklama = $_POST['ozaciklama'];

                    $sorgu_ozekle = $db->prepare('insert into ozellikler(ikon,ozbaslik,ozaciklama) values(?,?,?)');
                    $sorgu_ozekle->execute(array($ikon, $ozbaslik, $ozaciklama));

                    if ($sorgu_ozekle->rowCount()) {
                        echo '<div class="alert alert-success text-center">Kayıt Başarılı</div><meta http-equiv="refresh" content="2; url=ozellikler.php">';
                    } else {
                        echo '<div class="alert alert-danger text-center">Hata Oluştu</div><meta http-equiv="refresh" content="2; url=ozellikler.php">';
                    }
                }
                ?>
            </div>
            <div class="col-md-6">
                <form method="post">
                    <div class="form-group">
                        <input type="text" name="baslik" placeholder="Alan Başlığı Girin" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="altbaslik" placeholder="Kısa Açıklama Giriniz" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <input type="color" name="renk" class="form-control">
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn btn-success w-100" name="baslikekle">Kaydet</button>
                            </div>
                        </div>
                    </div>
                </form>
                <?php

                if (isset($_POST['baslikekle'])) {
                    $sorgu_ozekle2 = $db->prepare('insert into ozellikler2(baslik,altbaslik,renk) values(?,?,?)');
                    $sorgu_ozekle2->execute(array($_POST['baslik'], $_POST['altbaslik'], $_POST['renk']));

                    if($sorgu_ozekle2 -> rowCount()){
                        echo '<div class="alert alert-success text-center">Kayıt Başarılı</div><meta http-equiv="refresh" content="2; url=ozellikler.php">';
                    } else{
                        echo '<div class="alert alert-danger text-center">Hata Oluştu</div><meta http-equiv="refresh" content="2; url=ozellikler.php">';
                    }
                }

                ?>
            </div>
        </div>
    </div>
</section>
<!-- özellik Ekle End -->

<?php require_once('footer.php'); ?>