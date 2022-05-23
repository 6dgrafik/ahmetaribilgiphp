<?php
require_once('header.php');

$sorgu_anabanner = $db->prepare('select * from anabanner order by id desc limit 1');
$sorgu_anabanner->execute();
$satir_anabanner = $sorgu_anabanner->fetch();
?>

<!-- Banner Section Start -->
<section id="anaBanner" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 my-auto">
                <h1 class="display-4"><?php echo $satir_anabanner['baslik']; ?></h1>
                <?php echo $satir_anabanner['aciklama']; ?>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-mor" data-toggle="modal" data-target="#exampleModal">
                    <span style="font-size:20px;">Tanıtımı İzle</span> <i class="bi bi-play-circle-fill" style="font-size:20px;"></i>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tanıtım Videosu</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php echo $satir_anabanner['link']; ?>
                                <!-- <video src="img/eminem.mp4" controls width="100%"></video> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <img src="<?php echo substr($satir_anabanner['foto'], 3); ?>" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->


<!-- Hizmet Section Start -->
<section id="anaHizmetler" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Hizmetler</h2>
            </div>
        </div>
        <div class="row">
            <?php
            $sorgu_hizmetler = $db->prepare('select * from sayfalar where sayfaturu = "Alt Sayfa" order by baslik desc');
            $sorgu_hizmetler->execute();

            if ($sorgu_hizmetler->rowCount()) {
                foreach ($sorgu_hizmetler as $satir_hizmetler) {
            ?>
                    <div class="col-md-4">
                        <div class="card text-center">
                            <img src="<?php echo substr($satir_hizmetler['foto'], 3); ?>" class="img-fluid">
                            <h2 style="font-size:24px;" class="mt-3"><?php echo $satir_hizmetler['baslik']; ?></h2>
                            <?php echo substr($satir_hizmetler['icerik'], 0, 150); ?>
                            <br><a href="samplepage.php?id=<?php echo $satir_hizmetler['id']; ?>"><button class="btn btn-mor mt-4">Devamını Oku</button></a>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</section>
<!-- Hizmet Section End -->

<!-- Hakkımda Section Start -->
<?php

$sorgu_hakkimda = $db->prepare('select * from sayfalar where baslik="Hakkımda"');
$sorgu_hakkimda->execute();
$satir_hakkimda = $sorgu_hakkimda->fetch();
?>
<section id="anaHakkimda" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3><?php echo $satir_hakkimda['baslik']; ?></h3>
                <?php echo substr($satir_hakkimda['icerik'], 0, 800); ?>
                <br><a href="hakkimda.php"><button class="btn btn-mor mt-4">Devamını Oku</button></a>
            </div>
            <div class="col-md-6 text-center my-auto">
                <img src="img/hakkimda.png" alt="Hakkımda" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- Hakkımda Section End -->

<!-- özellikler Section start -->
<?php
$sorgu_ozellikbilgi = $db->prepare('select * from ozellikler2 order by id desc');
$sorgu_ozellikbilgi->execute();
$satir_ozellikbilgi = $sorgu_ozellikbilgi->fetch();
?>
<div id="anaOzellikler" class="py-5" style="background-color:<?php echo $satir_ozellikbilgi['renk']; ?>;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3><?php echo $satir_ozellikbilgi['baslik']; ?></h3>
                <p><?php echo $satir_ozellikbilgi['altbaslik']; ?></p>
            </div>
        </div>
        <hr style="width:5%; border:2px solid #6c55f9;">
        <div class="row">           
            <?php

            $sorgu_ozellik = $db->prepare('select * from ozellikler order by ozbaslik asc');
            $sorgu_ozellik->execute();

            if ($sorgu_ozellik->rowCount()) {
                foreach ($sorgu_ozellik as $satir_ozellik) {
            ?>
                    <div class="col-md-4 mt-5 text-center">
                        <div class="ikonStil text-center mx-auto"><?php echo $satir_ozellik['ikon']; ?></div>
                        <?php echo $satir_ozellik['ozbaslik']; ?><br>
                        <?php echo $satir_ozellik['ozaciklama']; ?>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<!-- özellikler Section end -->

<!-- Seo başvuru Section Start -->
<section id="anaSeobasvuru" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-white">
                <h2>Ücretsiz Seo Analizi</h2>
            </div>
        </div>
        <div class="col-7 mx-auto">
            <form method="post" class="form-row">
                <div class="col-md-5">
                    <div class="form-group">
                        <input type="text" name="web" placeholder="Web Site Adresinizi Girin" class="form-control">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <input type="email" name="email" placeholder="E-Posta Adresinizi Girin" class="form-control">
                    </div>
                </div>
                <div class="col-md-2">
                    <button type="submit" name="analiz" class="btn btn-warning w-100">Gönder</button>
                </div>
            </form>
            <?php

            if (isset($_POST['analiz'])) {
                $web = $_POST['web'];
                $email = $_POST['email'];
                $puan = "-";

                $sorgu_analiz = $db->prepare('insert into seoanaliz(web,email,puan) values(?,?,?)');
                $sorgu_analiz->execute(array($web, $email, $puan));

                if ($sorgu_analiz->rowCount()) {
                    echo '<div class="text-white text-center">' . $web . ' adresi için ücretsiz Seo Analizi talebiniz alınmıştır.</div>';
                } else {
                    echo 'Hata Oluştu. Lütfen Tekrar Deneyin.';
                }
            }
            ?>
        </div>
    </div>
</section>
<!-- Seo başvuru Section End -->

<!-- Hizmet İçerikleri Section Start -->
<section id="princing" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3>Hizmet İçerikleri</h3>
                <h2>Hizmetlerimizin Ayrıntıları</h2>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <div class="card shadow">
                    <?php
                    $sorgu_paket1 = $db->prepare('select * from paket1 order by id desc limit 1');
                    $sorgu_paket1->execute();
                    $satir_paket1 = $sorgu_paket1->fetch();
                    ?>
                    <div class="card-header text-center bg-transparent">
                        <h4><?php echo $satir_paket1['baslik1']; ?></h4>
                        <span style="font-size:40px;"><?php echo $satir_paket1['fiyat1']; ?>TL</span>
                        <p>Aylık</p>
                    </div>
                    <div class="card-body text-center">
                        <ul>
                            <li><?php echo $satir_paket1['ozellik1a']; ?></li>
                            <li><?php echo $satir_paket1['ozellik1b']; ?></li>
                            <li><?php echo $satir_paket1['ozellik1c']; ?></li>
                            <li><?php echo $satir_paket1['ozellik1d']; ?></li>
                            <li><?php echo $satir_paket1['ozellik1e']; ?></li>
                        </ul>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="iletisim.php" class="btn btn-warning w-100">Teklif Alın</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                    <?php
                    $sorgu_paket2 = $db->prepare('select * from paket2 order by id desc limit 1');
                    $sorgu_paket2->execute();
                    $satir_paket2 = $sorgu_paket2->fetch();
                    ?>
                    <div class="card-header text-center bg-transparent">
                        <h4><?php echo $satir_paket2['baslik2']; ?></h4>
                        <span style="font-size:40px;"><?php echo $satir_paket2['fiyat2']; ?>TL</span>
                        <p>Aylık</p>
                    </div>
                    <div class="card-body text-center">
                        <ul>
                            <li><?php echo $satir_paket2['ozellik2a']; ?></li>
                            <li><?php echo $satir_paket2['ozellik2b']; ?></li>
                            <li><?php echo $satir_paket2['ozellik2c']; ?></li>
                            <li><?php echo $satir_paket2['ozellik2d']; ?></li>
                            <li><?php echo $satir_paket2['ozellik2e']; ?></li>
                        </ul>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="iletisim.php" class="btn btn-warning w-100">Teklif Alın</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                    <?php
                    $sorgu_paket3 = $db->prepare('select * from paket3 order by id desc limit 1');
                    $sorgu_paket3->execute();
                    $satir_paket3 = $sorgu_paket3->fetch();
                    ?>
                    <div class="card-header text-center bg-transparent">
                        <h4><?php echo $satir_paket3['baslik3']; ?></h4>
                        <span style="font-size:40px;"><?php echo $satir_paket3['fiyat3']; ?>TL</span>
                        <p>Aylık</p>
                    </div>
                    <div class="card-body text-center">
                        <ul>
                            <li><?php echo $satir_paket3['ozellik3a']; ?></li>
                            <li><?php echo $satir_paket3['ozellik3b']; ?></li>
                            <li><?php echo $satir_paket3['ozellik3c']; ?></li>
                            <li><?php echo $satir_paket3['ozellik3d']; ?></li>
                            <li><?php echo $satir_paket3['ozellik3e']; ?></li>
                        </ul>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="iletisim.php" class="btn btn-warning w-100">Teklif Alın</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hizmet İçerikleri Section End -->

<!-- Hizmet Tanıtım Section Start -->
<?php
$sorgu_ctamain = $db->prepare('select * from maincta order by id desc limit 1');
$sorgu_ctamain->execute();
$satir_ctamain = $sorgu_ctamain->fetch();
?>

<section id="hizmetTanitim" style="background-color:<?php echo $satir_ctamain['background']; ?> ;" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-white">
                <h2 style="font-size:<?php echo $satir_ctamain['font']; ?>px;"><?php echo $satir_ctamain['baslik']; ?></h2>
                <p style="font-size:<?php echo $satir_ctamain['font2']; ?>px;"><?php echo $satir_ctamain['kisayazi']; ?></p>
            </div>
            <div class="col-md-6 my-auto text-center">
                <a href="tel:+9055555555555"><button class="btn btn-warning">Hemen Arayın</button></a>
            </div>
        </div>
    </div>
</section>
<!-- Hizmet Tanıtım Section End -->

<!-- Güncel Blog Section Start -->
<section id="blogOzet" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h4>Blog Yazıları</h4>
                <h3>En Güncel Blog Yazılarım</h3>
            </div>
        </div>
        <div class="row my-4">
            <?php

            $sorgu_blog = $db->prepare('select * from yazilar order by id desc limit 3');
            $sorgu_blog->execute();

            if ($sorgu_blog->rowCount()) {
                foreach ($sorgu_blog as $satir_blog) {
            ?>
                    <div class="col-md-4">
                        <a href="sample.php?id=<?php echo $satir_blog['id']; ?>" class="text-decoration-none text-dark">
                            <div class="card shadow">
                                <!-- Foto Gelecek -->
                                <img src="<?php echo substr($satir_blog['foto'], 3); ?>" alt="<?php echo $satir_blog['fotoalt']; ?>" class="card-img-top mb-3">
                                <div class="card-body">
                                    <h3 style="font-size: 20px;"><?php echo $satir_blog['baslik']; ?></h3>
                                    <small class="mb-3">Yayınlanma Tarihi: <?php echo $satir_blog['tarih']; ?></small>
                                </div>
                            </div>
                        </a>
                    </div>
            <?php
                }
            }
            ?>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="blog.php" class="btn btn-mor">Tümünü Okuyun</a>
            </div>
        </div>
    </div>
</section>
<!-- Güncel Blog Section End -->

<?php require_once('footer.php'); ?>