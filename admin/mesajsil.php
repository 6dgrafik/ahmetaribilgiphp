<?php 
require_once('header.php');

$id = $_GET['id'];
$sorgu_mesajsil = $db -> prepare ('delete from mesajlar where id = ? ');
$sorgu_mesajsil -> execute(array($id));

if($sorgu_mesajsil -> rowCount()){
    echo '<div class="alert alert-success">Mesaj Silindi</div>
    <meta http-equiv="refresh" content="1; url=mesajlar.php">';
}else {
    echo '<div class="alert alert-danger">Hata Oluştu</div>
    <meta http-equiv="refresh" content="1; url=mesajlar.php">';
}

 require_once('footer.php'); ?>
