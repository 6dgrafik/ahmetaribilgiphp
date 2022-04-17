<?php require_once('header.php'); ?>

<?php
$sorgu_banner = $db->prepare('select * from ayarlar order by id desc limit 1');
$sorgu_banner->execute();
$satir_banner = $sorgu_banner->fetch();
?>

<!-- Banner Section Start -->
<section id="blogBanner" class="py-15" style="background-image: url('<?php echo substr($satir_banner['blogbanner'], 3); ?>') ;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <small><a href="index.php">Ana Sayfa</a> / Blog</small>
                <h1 class="display-4 text-white">Blog</h1>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Search Section Start -->
<section id="search" class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="" method="post" class="form-row">
                    <div class="col-10">
                        <div class="form-group">
                            <input type="search" name="arama" placeholder="Blog Yazısı Ara" class="form-control">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <button type="submit" class="btn btn-mor w-100">Ara</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Search Section End -->

<!-- Blog list Section Start -->
<section id="blogList" class="py-5">
    <div class="container">
        <div class="row">
            <?php
            $sorgu_bloglist = $db->prepare('select * from yazilar order by id desc');
            $sorgu_bloglist->execute();

            if ($sorgu_bloglist->rowCount()) {
                foreach ($sorgu_bloglist as $satir_bloglist) {
            ?>
                    <div class="col-md-4 mt-4">
                        <div class="card shadow">
                            <a href="sample.php?id=<?php echo $satir_bloglist['id']; ?> ">
                                <img src="<?php echo substr($satir_bloglist['foto'], 3); ?>" alt="<?php echo $satir_bloglist['fotoalt']; ?>" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <a href="sample.php?id=<?php echo $satir_bloglist['id']; ?>" class="text-dark text-decoration-none">
                                    <h2 style="font-size:1.2rem;"><?php echo $satir_bloglist['baslik']; ?></h2>
                                </a>
                                <small>Yayınlanma Tarihi: <?php echo $satir_bloglist['tarih']; ?> </small>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</section>
<!-- Blog list Section End -->


<?php require_once('footer.php'); ?>