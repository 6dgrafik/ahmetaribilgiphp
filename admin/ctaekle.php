<?php require_once('header.php'); ?>

<!-- CTA ekle section start -->

<section id="ctaekle" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Cta Ayarları</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label><small>Cta Bacground Görsel Ekle</small></label>
                        <input type="file" name="foto" id="">
                    </div>
                    <div class="form-group">
                        <label><small>Slogan Ekle</small></label>
                        <input type="text" name="slogan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label><small>Tel No Ekle</small></label>
                        <input type="tel" name="tel" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success w-100">Kaydet</button>   
                    </div>

                </form>
                <?php  

                if($_POST){
                    $dizin = "../img/";
                    $yuklenecekfoto =$dizin.$_FILES['foto']['name'];
                    $slogan = $_POST['slogan'];
                    $tel = $_POST['tel'];

                    if(move_uploaded_file($_FILES['foto']['tmp_name'],$yuklenecekfoto)){
                        $sorgu_cta = $db -> prepare('insert into cta(foto,slogan,tel) values(?,?,?)');
                        $sorgu_cta -> execute(array($yuklenecekfoto,$slogan,$tel));

                        if($sorgu_cta -> rowCount()){
                            echo '<div class ="alert alert-success">Kayıt Başarılı</div>';
                        }else{
                            echo '<div class ="alert alert-danger">Hata Oluştu</div>';
                        }
                    }
                }
                
                 ?>
            </div>
        </div>
    </div>
</section>

<!-- CTA ekle section end -->

<?php require_once('footer.php'); ?>