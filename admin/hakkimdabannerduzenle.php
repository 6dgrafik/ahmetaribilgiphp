<?php
require_once('header.php');

$id = $_GET['id'];
$hakkimdabannerduzenle = $db->prepare('select * from hakkimdabanner where id=?');
$hakkimdabannerduzenle->execute(array($id));
$satir_hakbannerduzenle = $hakkimdabannerduzenle->fetch();
?>


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
                    <img src="<?php echo $satir_hakbannerduzenle['foto']; ?>" class="w-50 mb-1">
                    <br>
                    <input type="file" name="foto" id="gorsel">
                </div>
                <div class="form-group">
                    <label for="baslik"><small>Başlık Düzenle</small></label>
                    <input type="text" name="baslik" id="baslik" class="form-control" value="<?php echo $satir_hakbannerduzenle['baslik']; ?>">
                </div>
                <div class="form-group">
                    <label><small>
                            Background Konum -
                            <?php
                            $konum = $satir_hakbannerduzenle['konum'];
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
                        </small></label>
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
                    <label><small>
                            Background Tekrar -
                            <?php
                            $tekrar = $satir_hakbannerduzenle['tekrar'];
                            switch ($tekrar) {
                                case 'background-repeat:no-repeat;':
                                    echo 'Tekrarlama';
                                    break;
                                case 'background-repeat:repeat;':
                                    echo 'Tekrarla';
                                    break;
                            }
                            ?>
                        </small></label>
                    <select name="tekrar" class="form-control">
                        <option value="">Seçiniz</option>
                        <option value="background-repeat:no-repeat;">Tekrarlama</option>
                        <option value="background-repeat:repeat;">Tekrarla</option>
                    </select>
                </div>
                <div class="form-group">
                    <label><small>
                            Backgroud Görsel Ölçüsü -
                            <?php

                            $size = $satir_hakbannerduzenle['size'];

                            switch ($size) {
                                case 'background-size:cover;':
                                    echo 'Kaplama';
                                    break;

                                case 'background-size:contain':
                                    echo 'Sıkıştır';
                                    break;
                            }
                            ?>
                        </small></label>
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
            $baslik = $_POST['baslik'];
            $konum = $_POST['konum'];
            $tekrar = $_POST['tekrar'];
            $size = $_POST['size'];

            if (move_uploaded_file($_FILES['foto']['tmp_name'], $yuklenecekfoto)) {
                $sorgu_hakbanduz = $db->prepare('update hakkimdabanner set foto =?, baslik=?, konum=?, tekrar=?, size=? where id=?');
                $sorgu_hakbanduz->execute(array($yuklenecekfoto, $baslik, $konum, $tekrar, $size, $id));
                if ($sorgu_hakbanduz->rowCount()) {
                    echo '<div class="alert alert-success">Kayıt Güncellendi</div><meta http-equiv="refresh" content="2; url=hakkimdabanner.php">';
                } else {
                    echo '<div class="alert alert-danger">Hata Oluştu</div>';
                }
            }
        }
        ?>
    </div>
</section>
<!-- Hakkımda Banner Section End -->
<?php require_once('footer.php'); ?>

