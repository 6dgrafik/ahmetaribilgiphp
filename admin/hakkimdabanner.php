<?php require_once('header.php'); ?>


<!-- Hakkımda Banner Section Start -->
<section id="hakkimdaBanner" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Hakkımda Banner Ayarları</h2>
            </div>
        </div>
        <form enctype="multipart/form-data" method="post" class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="gorsel"><small>Banner Görsel Ekle</small></label><br>
                    <input type="file" name="foto" id="gorsel">
                </div>
                <div class="form-group">
                    <label for="baslik"><small>Başlık Ekleyin</small></label>
                    <input type="text" name="baslik" id="baslik" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
<div class="form-group">
    <label><small>Backgruond Konum</small></label>
    <select name="konum" class="form-control">
        <option value="">Seçiniz</option>
        <option value="background-position:center center;">Merkez</option>
        <option value="background-position:top center;">Üst</option>
        <option value="background-position:bottom center;">Alt</option>
    </select>

</div>
<div class="form-group">
    <label><small>Backgruond Tekrar</small></label>
    <select name="tekrar" class="form-control">
        <option value="">Seçiniz</option>
        <option value="background-repeat:no-repeat;">Tekrarlama</option>
        <option value="background-repeat:repeat;">Tekrarla</option>
    </select>
</div>
<div class="form-group">
    <label><small>Background Görsel Ölçüsü</small></label>
    <select name="size" class="form-control">
        <option value="">Seçiniz</option>
        <option value="background-size:cover;">Kaplama</option>
        <option value="background-size:containe;">Sıkıştır</option>
    </select>
</div>
<div class="form-group">
    <input type="submit" value="Kaydet" class="btn btn-success w-100">
</div>
            </div>
        </form>

    </div>
</section>
<!-- Hakkımda Banner Section End -->


<?php require_once('footer.php'); ?>