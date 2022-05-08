<?php require_once('header.php'); ?>

<!-- Ana Banner Section Start -->
<section id="anaBanner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Ana Sayfa Banner Ekle</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="post" class="form-row" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="baslik"><small>Başlık Ekleyin</small></label>
                            <input type="text" name="baslik" id="baslik" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="aciklama" rows="7" class="form-control" placeholder="Kısa Açıklama Girin(Max. 300 Karakter)"></textarea>
                            <script>
                                CKEDITOR.replace('aciklama');
                            </script>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="foto"><small>Banner Görsel Ekle</small></label><br>
                            <input type="file" name="foto" id="foto">
                        </div>
                        <div class="form-group">
                            <label for="link"><small>Video Link Ekle</small></label>
                            <input type="text" name="link" id="link" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success w-100">Kaydet</button>
                        </div>
                    </div>
                </form>
                <?php
                if ($_POST) {

                    $dizin = "../img/";
                    $yuklenecekfoto = $dizin . $_FILES['foto']['name'];
                    $baslik = $_POST['baslik'];
                    $aciklama = $_POST['aciklama'];
                    $link = $_POST['link'];

                    if (move_uploaded_file($_FILES['foto']['tmp_name'], $yuklenecekfoto)) {
                        $sorgu_anabanner = $db->prepare('insert into anabanner(baslik,aciklama,foto,link) values(?,?,?,?)');
                        $sorgu_anabanner -> execute(array($baslik,$aciklama,$yuklenecekfoto,$link));

                        if($sorgu_anabanner -> rowCount()){
                            echo '<div class="alert alert-success">Kayıt Başarılı</div>';
                        } else {
                            echo '<div class="alert alert-danger">Hata Oluştu</div>';
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>
<!-- Ana Banner Section End -->

<?php require_once('footer.php'); ?>