<?php
require_once('header.php');

$id = $_GET['id'];
$sorgu_hizmet = $db->prepare('select * from sayfalar where id=?');
$sorgu_hizmet->execute(array($id));
$satir_hizmet = $sorgu_hizmet->fetch();
?>

<!-- Hizmetler banner Section start-->
<section id="hizmetBanner" class="py-15" style="background-image: url('<?php echo substr($satir_hizmet['foto'], 3); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white"><?php echo $satir_hizmet['baslik']; ?></h1>
            </div>
        </div>
    </div>
</section>
<!-- Hizmetler banner Section End-->

<!-- İçerik Section Start -->
<section id="hizmetContent" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <main>
                    <div><?php echo $satir_hizmet['icerik']; ?></div>
                    <div>
                        <div class="row">
                            <?php

                            $sayfa = $satir_hizmet['baslik'];

                            if ($sayfa == "Web Tasarım Hizmeti") {
                                $kat = "Web Tasarım";
                            } else if ($sayfa == "Grafik Tasarım Hizmeti") {
                                $kat = "Grafik Tasarım";
                            } else {
                                $kat = "Seo";
                            }

                            $sorgu_portfolyo = $db->prepare("select * from portfolyo where kategori='$kat' order by id desc");
                            $sorgu_portfolyo->execute();

                            if ($sorgu_portfolyo->rowCount()) {
                                foreach ($sorgu_portfolyo as $satir_portfolyo) {
                            ?>
                                    <div class="col-md-4 mt-4">
                                        <div class="card" style="cursor:pointer;">
                                            <div class="card-body">
                                                <!-- Button trigger modal -->
                                                <img src="<?php echo substr($satir_portfolyo['foto'], 3); ?>" alt="<?php echo $satir_portfolyo['fotoalt']; ?>" data-toggle="modal" data-target="#portfolyo<?php echo $satir_portfolyo['id']; ?>" class="img-fluid">
                                                <div class="text-center mt-2">
                                                    <small><?php echo $satir_portfolyo['projeadi']; ?></small>
                                                </div>

                                                <!-- Modal -->
                                                <div class="modal fade" id="portfolyo<?php echo $satir_portfolyo['id']; ?>" tabindex="-1" aria-labelledby="portfolyo<?php echo $satir_portfolyo['id']; ?>" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="portfolyo<?php echo $satir_portfolyo['id']; ?>"><?php echo $satir_portfolyo['projeadi']; ?></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <img src="<?php echo substr($satir_portfolyo['foto'], 3); ?>" alt="<?php echo $satir_portfolyo['fotoalt']; ?>" class="w-100">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        Proje Adı: <?php echo $satir_portfolyo['projeadi']; ?> <br>
                                                                        Proje Türü: <?php echo $satir_portfolyo['projeturu']; ?>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        Teknoloji: <?php echo $satir_portfolyo['teknoloji']; ?> <br>
                                                                        Tema: <?php echo $satir_portfolyo['tema']; ?>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        Konu: <?php echo $satir_portfolyo['konu']; ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </main>
            </div>
            <?php require_once('sidebar.php'); ?>
        </div>
    </div>
</section>
<!-- İçerik Section End -->

<?php require_once('footer.php'); ?>