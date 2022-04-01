<?php require_once('header.php'); 



$id = $_GET['id'];
$sorgu_sayfasil = $db -> prepare ('delete from sayfalar where id = ? ');
$sorgu_sayfasil -> execute(array($id));

if($sorgu_sayfasil-> rowCount()){
    echo '<div class="alert alert-success">Sayfa Silindi</div>
    <meta http-equiv="refresh" content="1; url=sayfalar.php">';
}else {
    echo '<div class="alert alert-danger">Hata Oluştu</div>
    <meta http-equiv="refresh" content="1; url=sayfalar.php">';
}

?>



<?php require_once('footer.php'); ?>