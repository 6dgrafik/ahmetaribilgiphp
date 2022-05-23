<?php
// $sorgu_bottom = $db->prepare('select * from ayarlar order by id desc limit 1');
// $sorgu_bottom->execute();
// $satir_bottom = $sorgu_bottom->fetch();
?>

<!-- footer Section start -->
<section id="footer" class="pt-5 pb-1 text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="<?php echo substr($satir_bottom['logo'],3); ?>" alt="Arı Bilişim Logo"> <br>
                <small><?php echo $satir_bottom['tanitim']; ?></small> <br>
                <a href="<?php echo $satir_bottom['facebook']; ?>" target="_blank"><i class="bi bi-facebook" style="font-size:24px;" ></i></a>
                <a href="<?php echo $satir_bottom['instagram']; ?>" target="_blank"><i class="bi bi-instagram" style="font-size:24px;" ></i></a>
                <a href="<?php echo $satir_bottom['twitter']; ?>" target="_blank"><i class="bi bi-twitter" style="font-size:24px;" ></i></a>
                <a href="<?php echo $satir_bottom['whatsapp']; ?>" target="_blank"><i class="bi bi-whatsapp" style="font-size:24px;" ></i></a>
            </div>
            <div class="col-md-3">
                <h5>Hızlı Menü</h5>
                Menü Elemanları Gelecek
            </div>
            <div class="col-md-3">
                <h5>İletişim</h5>
                <?php echo $satir_bottom['adres']; ?> <br> 
                <a href="tel:+9<?php echo $satir_bottom['telefon']; ?>"><?php echo $satir_bottom['telefon']; ?></a> <br> 
                <a href="mailto:<?php echo $satir_bottom['email']; ?>"><?php echo $satir_bottom['email']; ?></a>
            </div>
            <div class="col-md-3">
                <h5>E-Bülten Üyelik</h5>
                <small>Güncel Blog Yazıları ve Yeni Teknolojiler Hakkında Bilgi Almak için Lütfen Üye Olun.</small>
                <form method="post" class="mt-2">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="E-Posta Adresiniz">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Gönder" class="btn btn-success w-100">
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?php
                echo $satir_bottom['copy'] . ' ' . date('Y');
                ?>
            </div>
            <div class="col-md-6 text-right">
                Web Sitesi <a href="#">Kapa Web Tasarım</a> tarafından hazırlanmıştır.
            </div>
        </div>
    </div>
</section>
<!-- footer Section end -->



<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>