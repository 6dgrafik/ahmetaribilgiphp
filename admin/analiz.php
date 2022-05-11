<?php require_once('header.php'); ?>

<!-- Analiz List Start -->
<section id="analiz" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Seo Analiz Talep Listesi</h2>
            </div>
        </div>
        <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Başvuru No</th>
                    <th>Web Sitesi</th>
                    <th>Email</th>
                    <th>Puan</th>
                    <th>Düzenle</th>
                </tr>
            </thead>
            <tbody>
<?php 

$sorgu_talep = $db -> prepare('select * from seoanaliz order by id desc');
$sorgu_talep -> execute();

if($sorgu_talep -> rowCount()){
    foreach($sorgu_talep as $satir_talep){
        ?>
            <tr>
                <td><?php echo $satir_talep['id']; ?></td>
                <td><?php echo $satir_talep['web']; ?></td>
                <td><?php echo $satir_talep['email']; ?></td>
                <td><?php echo $satir_talep['puan']; ?></td>
                <td><a href="puanla.php?id=<?php echo $satir_talep['id']; ?>"><button class="btn btn-warning">Değerlendir</button></a></td>
            </tr>
        <?php
    }
}
?>

           </tbody>
        </table>
        </div>
    </div>
</section>
<!-- Analiz List End -->

<?php require_once('footer.php'); ?>