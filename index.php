<?php 
require_once('header.php');

$sorgu_anabanner = $db -> prepare('select * from anabanner order by id desc limit 1');
$sorgu_anabanner -> execute();
$satir_anabanner = $sorgu_anabanner -> fetch();

?>

<!-- Banner section start -->

<section id="anaBanner" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 my-auto">
                <h1 class="display-4"><?php echo $satir_anabanner['baslik']; ?></h1>
                <?php  echo $satir_anabanner['aciklama']; ?>
                
                <!-- Button trigger modal -->
<button type="button" class="btn btn-mor" data-toggle="modal" data-target="#exampleModal">
 <span style="font-size: 20px;"> Tanıtımı izle</span> <i class="bi bi-play-circle-fill" style="font-size: 20px;"></i>
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
        <!-- <video src="img/ronaldiho.mp4" controls></video> -->
      </div>
      
    </div>
  </div>
</div>
            </div>
            <div class="col-md-6 text-center">
               <img src="<?php echo substr($satir_anabanner['foto'],3) ; ?>" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Banner section end -->
<!-- hizmet section start -->

<section id="anaHizmetler">
    <div class="container">
        <div class="row">
            <!--  foreach ile tekrarlanacak -->
            <div class="col-md-4">
                <div class="card">
                    foto gelecek
                    <h2>Başlık Gelecek</h2>
                    <p>kısa açıklama (p etiketlerini kaldır)</p>
                    <a href="#"><button class="btn btn-mor">Devamını Oku</button></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- hizmet section end -->

<!-- hakkımda section start -->

<section id="anaHakkimda">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Hakkımda</h3>
                <h2>Alt Başlık 2</h2>
                <p>kısa açıklama (p etiketlerini kaldır)</p>
                <a href="hakkimda.php"><button class="btn btn-mor">Devamını Oku</button></a></a>
            </div>
            <div class="col-md-6">
                Sabit Bir foto gelecek
            </div>
        </div>
    </div>
</section>

<!-- hakkımda section end -->

<!-- özelllikler section start  -->

<section id="anaOzellikler">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Özelliklerimiz</h3>
                <h2>Alt Başlık</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                ikon gelecek <br>
                başlık gelecek <br>
                kısa açıklama gelecek <br>
            </div>
        </div>
    </div>
</section>

<!-- özelllikler section end  -->

<!-- seo başvuru start -->

<section id="anaBasvuru">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Ücretsiz Seo Analizi</h2>

            </div>
        </div>
        <form method="post" class="form-row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" name="web" placeholder="Web Site Adresinizi Girin" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="email" name="email" placeholder="E-Posta Adresinizi Girin" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-mor">Gönder</button>
            </div>

        </form>
    </div>
</section>

<!-- seo başvuru end -->

<!-- Hizmet İçerikleri section start -->

<section id="princing">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Hizmet İçerikleri</h3>
                <h2>Hizmetlerimizin Ayrıntıları</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center bg-transparent">
                        <h4>Temel Paket</h4>
                        <span style="font-size:40px;">4500 TL</span>
                        <p>Aylık</p>
                    </div>
                    <div class="card-body text-center">
                        <ul>
                            <li>Hizmet içeriği 1</li>
                            <li>Hizmet içeriği 2</li>
                            <li>Hizmet içeriği 3</li>
                            <li>Hizmet içeriği 4</li>
                            <li>Hizmet içeriği 5</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="iletisim.php" class="btn btn-mor w-100">Teklif Alın</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Hizmet İçerikleri section wnd -->

<!-- hizmet tanıtım section start -->

<section id="hizmetTanitim" class="bg-mor">
    <div class="container">,
        <div class="row">
            <div class="col-md-6">
                <h2>Hizmet Tanıtım Başlığı</h2>
                <p>Kısa Açıklama Gelecek</p>
            </div>
            <div class="col-md-6"></div>
        </div>
    </div>
</section>

<!-- hizmet tanıtım section end -->

<!-- Güncel blog section start -->

<div id="blogOzet">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h4>Blog Yazıları</h4>
                <h3>En Güncel Blog Yazıları</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="" class="text-decoration-none">
                    <div class="card shadow">
                        <!-- foto gelecek -->
                        <img src="" alt="" class="card-img-top">
                        <h3>Blog Başlık Gelecek</h3>
                        <small>Yayınlanma Tarihi: aaa</small>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">

        </div>
    </div>
</div>

<!-- Güncel blog section end -->


<?php require_once('footer.php'); ?>