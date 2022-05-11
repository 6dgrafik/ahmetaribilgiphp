<?php
require_once('header.php');

$id = $_GET['id'];
$sorgu_puan = $db->prepare('select * from seoanaliz where id=?');
$sorgu_puan->execute(array($id));
$satir_puan = $sorgu_puan->fetch();
?>

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
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $satir_puan['id']; ?></td>
                        <td><?php echo $satir_puan['web']; ?></td>
                        <td><?php echo $satir_puan['email']; ?></td>
                        <td>
                            <form method="post">
                                <div class="form-group">
                                    <input type="text" name="puan" value="<?php echo $satir_puan['puan']; ?>" class="form-control w-25">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Puanla</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!-- Analiz List End -->

<?php

if ($_POST) {
    $puan = $_POST['puan'];
    #$id = $satir_puan['id']; olarak da değer çekilebilir

    $sorgu_puanla = $db->prepare('update seoanaliz set puan=? where id=? ');
    $sorgu_puanla->execute(array($puan, $id));

    if ($sorgu_puanla->rowCount()) {
        echo '<meta http-equiv="refresh" content="0; url=analiz.php">';
    } else {
        echo '<meta http-equiv="refresh" content="0; url=analiz.php">';
    }
}

require_once('footer.php');

?>