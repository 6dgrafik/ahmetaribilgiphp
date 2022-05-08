<?php require_once('header.php'); ?>

<!-- ücretlendirme Ekle Section Start -->
<section id="ucret" class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-3">
                <h2>Hizmet ve Ücret Bilgisi Ekle</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <form method="post">
                    <div class="card">
                        <h3 class="text-center">Paket 1</h3>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" name="baslik1" class="form-control" placeholder="Paket Başlığı Girin">
                            </div>
                            <div class="form-group">
                                <input type="text" name="fiyat1" placeholder="Fiyat Bilgisi Girin" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="ozellik1a" placeholder="Paket İçeriği Girin" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="ozellik1b" placeholder="Paket İçeriği Girin" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="ozellik1c" placeholder="Paket İçeriği Girin" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="ozellik1d" placeholder="Paket İçeriği Girin" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="ozellik1e" placeholder="Paket İçeriği Girin" class="form-control">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-dark w-100" name="box1">Kaydet</button>
                        </div>
                    </div>
                </form>

                <?php
                if (isset($_POST['box1'])) {
                    $sorgu_box1 = $db->prepare('insert into paket1(baslik1,fiyat1,ozellik1a,ozellik1b,ozellik1c,ozellik1d,ozellik1e) values(?,?,?,?,?,?,?)');
                    $sorgu_box1->execute(array($_POST['baslik1'], $_POST['fiyat1'], $_POST['ozellik1a'], $_POST['ozellik1b'], $_POST['ozellik1c'], $_POST['ozellik1d'], $_POST['ozellik1e']));

                    if ($sorgu_box1->rowCount()) {
                        echo '<div class="alert alert-success">Kayıt Başarılı</div>';
                    } else {
                        echo '<div class="alert alert-danger">Hata Oluştu</div>';
                    }
                }
                ?>

            </div>
            <div class="col-md-4">
                <form method="post">
                    <div class="card">
                        <h3 class="text-center">Paket 2</h3>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" name="baslik2" class="form-control" placeholder="Paket Başlığı Girin">
                            </div>
                            <div class="form-group">
                                <input type="text" name="fiyat2" placeholder="Fiyat Bilgisi Girin" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="ozellik2a" placeholder="Paket İçeriği Girin" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="ozellik2b" placeholder="Paket İçeriği Girin" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="ozellik2c" placeholder="Paket İçeriği Girin" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="ozellik2d" placeholder="Paket İçeriği Girin" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="ozellik2e" placeholder="Paket İçeriği Girin" class="form-control">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-dark w-100" name="box2">Kaydet</button>
                        </div>
                    </div>
                </form>
                <?php
                if (isset($_POST['box2'])) {
                    $sorgu_box1 = $db->prepare('insert into paket2(baslik2,fiyat2,ozellik2a,ozellik2b,ozellik2c,ozellik2d,ozellik2e) values(?,?,?,?,?,?,?)');
                    $sorgu_box1->execute(array($_POST['baslik2'], $_POST['fiyat2'], $_POST['ozellik2a'], $_POST['ozellik2b'], $_POST['ozellik2c'], $_POST['ozellik2d'], $_POST['ozellik2e']));

                    if ($sorgu_box1->rowCount()) {
                        echo '<div class="alert alert-success">Kayıt Başarılı</div>';
                    } else {
                        echo '<div class="alert alert-danger">Hata Oluştu</div>';
                    }
                }
                ?>
            </div>
            <div class="col-md-4">
                <form method="post">
                    <div class="card">
                        <h3 class="text-center">Paket 3</h3>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" name="baslik3" class="form-control" placeholder="Paket Başlığı Girin">
                            </div>
                            <div class="form-group">
                                <input type="text" name="fiyat3" placeholder="Fiyat Bilgisi Girin" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="ozellik3a" placeholder="Paket İçeriği Girin" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="ozellik3b" placeholder="Paket İçeriği Girin" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="ozellik3c" placeholder="Paket İçeriği Girin" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="ozellik3d" placeholder="Paket İçeriği Girin" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="ozellik3e" placeholder="Paket İçeriği Girin" class="form-control">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-dark w-100" name="box3">Kaydet</button>
                        </div>
                    </div>
                </form>
                <?php
                if (isset($_POST['box3'])) {
                    $sorgu_box1 = $db->prepare('insert into paket3(baslik3,fiyat3,ozellik3a,ozellik3b,ozellik3c,ozellik3d,ozellik3e) values(?,?,?,?,?,?,?)');
                    $sorgu_box1->execute(array($_POST['baslik3'], $_POST['fiyat3'], $_POST['ozellik3a'], $_POST['ozellik3b'], $_POST['ozellik3c'], $_POST['ozellik3d'], $_POST['ozellik3e']));

                    if ($sorgu_box1->rowCount()) {
                        echo '<div class="alert alert-success">Kayıt Başarılı</div>';
                    } else {
                        echo '<div class="alert alert-danger">Hata Oluştu</div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>
<!-- ücretlendirme Ekle Section End -->

<?php require_once('footer.php'); ?>