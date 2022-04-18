<?php

require_once('header.php');

$id=$_GET['id'];
$sorgu_hizmet = $db -> prepare('select * from sayfalar where id=?');
$sorgu_hizmet -> execute(array($id));
$satir_hizmet = $sorgu_hizmet -> fetch();

?>



<!-- Hizmetler banner section start -->

<section id="hizmetBanner" class="py-15" style="background-image:  url('<?php echo substr($satir_hizmet['foto'],3); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white"><?php echo $satir_hizmet['baslik']; ?></h1>
            </div>
        </div>
    </div>
</section>

<!-- Hizmetler banner section end -->

<!-- içerik Section start -->

<section id="hizmetContent" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <main>
                  <?php echo $satir_hizmet['icerik'];?>
                </main>
            </div>
            <?php require_once('sidebar.php');?>
        </div>
    </div>
</section>

<!-- içerik Section end -->

<?php require_once('footer.php'); ?>