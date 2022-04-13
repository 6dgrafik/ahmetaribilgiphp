<?php require_once('header.php'); ?>

<!-- Yorum Section Start -->
<section id="yorumlar">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Gelen Yorumlar</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>İsim</th>
                            <th>Email</th>
                            <th>Yorum</th>
                            <th>Başlık</th>
                            <th>Durum</th>
                            <th>Onayla</th>
                            <th>Sil</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        $sorgu_yorumlar = $db->prepare('select * from yorumlar order by id desc');
                        $sorgu_yorumlar->execute();

                        if ($sorgu_yorumlar->rowCount()) {
                            foreach ($sorgu_yorumlar as $satir_yorumlar) {
                        ?>
                                <tr>
                                    <td><?php echo $satir_yorumlar['adiniz'].' '.$satir_yorumlar['soyadiniz']; ?></td>
                                    <td><?php echo $satir_yorumlar['email']; ?></td>
                                    <td><?php echo $satir_yorumlar['yorum']; ?></td>
                                    <td><?php echo $satir_yorumlar['baslik']; ?></td>
                                    <td><?php echo $satir_yorumlar['durum']; ?></td>
                                    <td><a href="yorumonayla.php"><button class="btn btn-info">Onayla</button></a></td>
                                    <td><a href="yorumsil.php?id=<?php echo $satir_yorumlar['id']; ?>"><button class="btn btn-danger">Sil</button></a></td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- Yorum Section End -->

<?php require_once('footer.php'); ?>