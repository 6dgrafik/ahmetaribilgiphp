<?php 
require_once('header.php'); 

$id = $_GET['id'];
$sorgu_ctasil = $db -> prepare('delete from maincta where id=?');
$sorgu_ctasil -> execute(array($id));

if($sorgu_ctasil -> rowCount()){
    echo '<div class="alert alert-success">Kayıt Silindi</div><meta http-equiv="refresh" content="2; url=maincta.php">';
} else {
    echo '<div class="alert alert-danger">Hata Oluştu</div><meta http-equiv="refresh" content="2; url=maincta.php">';
}

require_once('footer.php');
?>