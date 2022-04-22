<?php
require_once('header.php');
$sorgu_banner = $db->prepare('select * from hakkimdabanner order by id desc limit 1');
$sorgu_banner->execute();
$satir_banner = $sorgu_banner->fetch();
?>

<!-- hakkımda Banner Section Start -->
<section id="hakkimda" style="background-image:url('<?php echo substr($satir_banner['foto'], 3); ?>'); <?php echo $satir_banner['size']; ?> <?php echo $satir_banner['tekrar'];  ?> <?php echo $satir_banner['konum']; ?>" class="py-15">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-white">
                <h1 class="display-4"><?php echo $satir_banner['baslik']; ?></h1>
            </div>
        </div>
    </div>
</section>
<!-- hakkımda Banner Section End -->

<!-- içerik Section Start -->
<section id="icerik">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="" alt="">
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-12">
                        <h2>Alt Başlık 2 Gelecek</h2>
                        <p>
                            Adminde ckeditörle metin alanı gelecek p'yi silmeyi unutma
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h2>Alt Başlık 3</h2>
                        <p>
                            Progress Barlar Eklenecek
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- içerik Section end -->

<!-- Cta Section Start -->
<?php require_once('cta.php'); ?>
<!-- Cta Section End -->


<?php require_once('footer.php'); ?>