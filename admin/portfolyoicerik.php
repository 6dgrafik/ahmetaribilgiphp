<?php require_once('header.php'); ?>

<!-- Proje Ekle Start -->
<section id="projeekle" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Proje Ekle</h2>
            </div>
            <div class="col-12">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <small>Proje Görseli Ekle</small> <input type="file" name="foto">
                    </div>
                    <div class="form-group">
                        <input type="text" name="fotoalt" placeholder="Görsel Alt Metni Girin" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="projeadi" placeholder="Proje adını giriniz" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="projeturu" placeholder="Proje Türünü Giriniz" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="teknoloji" placeholder="Projede Kullanılan Teknikleri Girin" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="tema" placeholder="Tema Bilgisini Girin" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="konu" placeholder="Proje Konusunu Girin" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="kategori" placeholder="Proje Kategorisi Girin" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success w-100">Kaydet</button>
                    </div>
                </form>
                <?php

                if ($_POST) {
                    $foto = $_FILES['foto']['name'];
                    $yuklencekfoto = '../img/' . $foto;
                    $fotoalt = $_POST['fotoalt'];
                    $projeadi = $_POST['projeadi'];
                    $projeturu = $_POST['projeturu'];
                    $teknoloji = $_POST['teknoloji'];
                    $tema = $_POST['tema'];
                    $konu = $_POST['konu'];
                    $kategori = $_POST['kategori'];

                    if (move_uploaded_file($_FILES['foto']['tmp_name'], $yuklencekfoto)) {
                        $sorgu_portfolyo = $db->prepare('insert into portfolyo(foto,fotoalt,projeadi,projeturu,teknoloji,tema,konu,kategori) values(?,?,?,?,?,?,?,?)');
                        $sorgu_portfolyo->execute(array($yuklencekfoto, $fotoalt, $projeadi, $projeturu, $teknoloji, $tema, $konu, $kategori));

                        if ($sorgu_portfolyo->rowCount()) {
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
<!-- Proje Ekle End -->

<?php require_once('footer.php'); ?>