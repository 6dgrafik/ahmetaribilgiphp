<?php require_once('header.php'); ?>

<!-- Yazı ekle section start -->

<section id="yaziEkle" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Yazı Ekle</h3>
            </div>
        </div>
        <form method="post" class="form-row" enctype="multipart/form-data">
<div class="col-md-8">
    <div class="form-group">
        <input type="text" name="baslik" class="form-control" placeholder="Yazı Başlığını Giriniz">
    </div>
    <div class="form-group">
        <textarea name="icerik" rows="7" class="form-control" placeholder="Yazı İçeriğini Girin"></textarea>
    </div>
    <div class="form-group">
        <input type="text" name="meta" class="form-control" placeholder="Meta Açıklaması Girin(Max.160 Karakter)">
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <input type="file" name="foto">
    </div>
    <div class="form-group">
        <input type="text" name="fotoalt"  class="form-control" placeholder="Foto Alt Metni Girin">
    </div>
    <div class="form-group">
        <select name="kategori" class="form-control">
            <option value="">VT den çek</option>
        </select>
    </div>
    <div class="form-group">
        <label><small>Yayınlanma Tarihi</small></label>
        <input type="date" name="tarih" class="form-control">
    </div>
    <div class="form-group">
    <label><small>Yayın Durumu</small></label>    
    <select name="durum" class="form-control">
            <option value="">Seçiniz</option>
            <option value="Taslak">Taslak</option>
            <option value="Yayınlandı">Yayınlandı</option>
        </select>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success w-100">Kaydet</button>
    </div>
</div>
        </form>
    </div>
</section>

<!-- Yazı ekle section end -->

<?php require_once('footer.php'); ?>