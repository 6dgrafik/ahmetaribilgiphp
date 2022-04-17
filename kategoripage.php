<?php
require_once('header.php');
$kategori = $_GET['kategori'];
$kat_list = $db->prepare('select * from yazilar where kategori = ? order by id desc');
$kat_list->execute(array($kategori));
?>

<!-- Kategori Banner Section Start -->
<section id="katBanner" class="py-15 bg-mor">
    <div class="container">
        <div class="col-12 text-center text-white">
            <h1 class="display-4">Kategori: <?php echo $kategori; ?></h1>
        </div>
    </div>
</section>
<!-- Kategori Banner Section End -->

<!-- Kategori Blog Yazıları Start -->
<section id="katBlogyazi" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php
                if ($kat_list->rowCount()) {
                    foreach ($kat_list as $satir_katlist) {
                ?>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <img src="<?php echo substr($satir_katlist['foto'],3); ?>" alt="<?php echo $satir_katlist['fotoalt']; ?>" class="img-fluid">
                            </div>
                            <div class="col-md-8">
                                <h2 style="font-size:22px;"><?php echo $satir_katlist['baslik']; ?></h2>
                                <?php echo substr($satir_katlist['icerik'],0,250); ?>... <br>
                                <a href="sample.php?id=<?php echo $satir_katlist['id']; ?>" class="mor text-decoration-none">Devamını Oku ></a>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
            <?php require_once('sidebar.php'); ?>
        </div>
    </div>
</section>
<!-- Kategori Blog Yazıları End -->

<?php require_once('footer.php'); ?>