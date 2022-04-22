<?php require_once('header.php'); ?>

<!-- hakkımda section start -->

<section id="hakkimdaIcerik" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
               <h2>Hakkımda İçerik Alanı</h2> 
            </div>
            <div class="col-12">
                <form  method="post"  enctype="multipart/form-data">
                    <div class="form-group">
                        <label><small>Yan Görsel Ekle</small></label>
                        <input type="file" name="foto">
                    </div>
                    <div class="form-group">
                        <label><small>Alt Başlık Ekle</small></label>
                        <input type="text" name="altbaslik" class="form-control">
                    </div>
                    <div class="form-group">
                    <textarea name="icerik"></textarea>
                        <script>
                            CKEDITOR.replace('icerik');
                        </script>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success w-100">Kaydet</button>
                    </div>
                </form>
                <?php 
                
                if($_POST){
                    $yuklenecekfoto = "../img".$_FILES['foto']['name'];
                    $altbaslik = $_POST['altbaslik'];
                    $icerik = $_POST['icerik'];

                    if(move_uploaded_file($_FILES['foto']['tmp_name'],$yuklenecekfoto)){
                        $sorgu_hakkimdaicerik = $db -> prepare('insert into hakkimdaicerik(foto,altbaslik,icerik) values (?,?,?)') ;

                        $sorgu_hakkimdaicerik -> execute(array($yuklenecekfoto,$altbaslik,$icerik));
                        if($sorgu_hakkimdaicerik -> rowCount()){
                            echo '<div class="alert alert-success">İçerik Eklendi</div>';
                        }else{
                            echo '<div class="alert alert-danger">Hata Oluştu</div>';
                        }

                    }
                }
                
                ?>
            </div>
        </div>
    </div>
</section>

<!-- hakkımda section end -->
<?php require_once('footer.php'); ?>