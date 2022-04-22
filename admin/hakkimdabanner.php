<?php require_once('header.php'); ?>


<!-- Hakkımda Banner Section Start -->
<section id="hakkimdaBanner" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Hakkımda Banner Ayarları</h2>
            </div>
        </div>
        <form enctype="multipart/form-data" method="post" class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="gorsel"><small>Banner Görsel Ekle</small></label><br>
                    <input type="file" name="foto" id="gorsel">
                </div>
                <div class="form-group">
                    <label for="baslik"><small>Başlık Ekleyin</small></label>
                    <input type="text" name="baslik" id="baslik" class="form-control">
                </div>
                <div class="form-group">
                    <label><small>Background Konum</small></label>
                    <select name="konum" class="form-control">
                        <option value="">Seçiniz</option>
                        <option value="background-position:center center;">Merkez</option>
                        <option value="background-position:top center;">Üst</option>
                        <option value="background-position:bottom center;">Alt</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label><small>Background Tekrar</small></label>
                    <select name="tekrar" class="form-control">
                        <option value="">Seçiniz</option>
                        <option value="background-repeat:no-repeat;">Tekrarlama</option>
                        <option value="background-repeat:repeat;">Tekrarla</option>
                    </select>
                </div>
                <div class="form-group">
                    <label><small>Backgroud Görsel Ölçüsü</small></label>
                    <select name="size" class="form-control">
                        <option value="">Seçiniz</option>
                        <option value="background-size:cover;">Kaplama</option>
                        <option value="background-size:contain;">Sıkıştır</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="Kaydet" class="btn btn-success w-100">
                </div>
            </div>
        </form>
        <?php
        if ($_POST) {
            $dizin = "../img/";
            $yuklenecekfoto = $dizin . $_FILES['foto']['name'];
            // veya $yuklenecekfoto = "../img".$_FILES['foto']['name'];

            if (move_uploaded_file($_FILES['foto']['tmp_name'], $yuklenecekfoto)) {
                $hakkimdabanner = $db->prepare('insert into hakkimdabanner(foto,baslik,konum,tekrar,size) values(?,?,?,?,?)');
                $hakkimdabanner->execute(array(
                    $yuklenecekfoto,
                    $_POST['baslik'], $_POST['konum'], $_POST['tekrar'], $_POST['size']
                ));

                if ($hakkimdabanner->rowCount()) {
                    echo '<div class="alert alert-success">Kayıt Başarılı</div><meta http-equiv="refresh" content="1; url=hakkimdabanner.php">';
                } else {
                    echo '<div class="alert alert-danger">Hata Oluştu</div>';
                }
            }
        }
        ?>
    </div>
</section>
<!-- Hakkımda Banner Section End -->

<!-- yayındaki Banner Section start -->
<section id="yayindakiBanner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Görsel</th>
                            <th>Başlık</th>
                            <th>Banner Konumu</th>
                            <th>Banner Tekrarı</th>
                            <th>Banner Ölçü</th>
                            <th>Düzenle</th>
                            <th>Sil</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $sorgu_hakkimdabanner = $db->prepare('select * from hakkimdabanner order by id desc limit 1');
                        $sorgu_hakkimdabanner->execute();

                        if ($sorgu_hakkimdabanner->rowCount()) {
                            foreach ($sorgu_hakkimdabanner as $satir_hakkimdabanner) {
                        ?>
                                <tr>
                                    <td><?php echo $satir_hakkimdabanner['id']; ?></td>
                                    <td><img src="<?php echo $satir_hakkimdabanner['foto']; ?>" class="w-75"></td>
                                    <td><?php echo $satir_hakkimdabanner['baslik']; ?></td>
                                    <td>
                                        <?php
                                        $konum = $satir_hakkimdabanner['konum'];
                                        switch ($konum) {
                                            case 'background-position:center center;':
                                                echo 'Merkez';
                                                break;
                                            case 'background-position:top center;':
                                                echo 'Üst';
                                                break;
                                            case 'background-position:bottom center;':
                                                echo 'Alt';
                                                break;
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                        $tekrar = $satir_hakkimdabanner['tekrar'];
                                        switch($tekrar){
                                            case 'background-repeat:no-repeat;':
                                                echo 'Tekrarlama';
                                                break;
                                            case 'background-repeat:repeat;':
                                                echo 'Tekrarla';
                                                break;
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                        $size = $satir_hakkimdabanner['size'];
                                        switch($size){
                                            case 'background-size:cover;':
                                                echo 'Kapla';
                                                break;
                                            case 'background-size:contain;':
                                                echo 'Sıkıştır';
                                                break;
                                        }
                                        ?>
                                    </td>
                                    <td>Düzenle</td>
                                    <td>Sil</td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- yayındaki Banner Section end -->

<?php require_once('footer.php'); ?>