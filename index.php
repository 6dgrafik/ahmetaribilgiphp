<?php require_once('header.php'); ?>

<!-- Banner section start -->

<section id="anaBanner">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="display-4">Ana Başlık Gelecek</h1>
                <p>Kısa Açıklama Gelecek</p>
                <button class="btn btn-mor">Tanıtımı İzle</button>
            </div>
            <div class="col-md-6">
                story setten gif image gelecek
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


<?php require_once('footer.php'); ?>