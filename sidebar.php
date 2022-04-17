<!-- Siderbar Section Start -->
<div class="col-md-3">
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-body">
                    <form method="get">
                        <div class="form-group">
                            <input type="search" name="arama" placeholder="Blog Ara" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Arama Yap" class="btn btn-mor w-100">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="mor">Kategoriler</h3>
                    <?php
                    $sorgu_katlist = $db->prepare('select * from kategoriler order by kategori asc');
                    $sorgu_katlist->execute();

                    if ($sorgu_katlist->rowCount()) {
                        foreach ($sorgu_katlist as $satir_katlist) {
                    ?>
                            <a href="kategoripage.php?kategori=<?php echo $satir_katlist['kategori']; ?>" class="text-dark text-decoration-none"><?php echo $satir_katlist['kategori']; ?></a><br>
                    <?php
                        }
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="mor">Son Yazılar</h3>
                    <?php

                    $sorgu_yazilar = $db->prepare('select * from yazilar order by id desc limit 5');
                    $sorgu_yazilar->execute();

                    if ($sorgu_yazilar->rowCount()) {
                        foreach ($sorgu_yazilar as $satir_yazilar) {
                    ?>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <a href="sample.php?id=<?php echo $satir_yazilar['id']; ?>">
                                        <img src="<?php echo substr($satir_yazilar['foto'], 3); ?>" alt="<?php echo $satir_yazilar['fotoalt']; ?>" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-6 smallYazi">
                                    <small><?php echo substr($satir_yazilar['icerik'], 0, 30); ?></small>
                                </div>
                            </div>
                            <hr>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3 sosmed">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="mor">Bizi Takip Edin</h3>
                    <?php
                    $sorgu_sosmed = $db->prepare('select * from ayarlar');
                    $sorgu_sosmed->execute();
                    $satir_sosmed = $sorgu_sosmed->fetch();
                    if ($sorgu_sosmed->rowCount()) {
                    ?>
                        <a href="<?php echo $satir_sosmed['facebook']; ?>" target="_blank"><i class="bi bi-facebook"></i></a> 
                        <a href="<?php echo $satir_sosmed['instagram']; ?>" target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="<?php echo $satir_sosmed['twitter']; ?>" target="_blank"><i class="bi bi-twitter"></i></a>
                        <a href="<?php echo $satir_sosmed['whatsapp']; ?>" target="_blank"><i class="bi bi-whatsapp"></i></a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Siderbar Section End -->