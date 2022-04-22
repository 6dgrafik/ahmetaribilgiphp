<?php require_once('header.php'); 

$id=$_GET['id'];
$sorgu_hakbansil = $db-> prepare('delete from hakkimdabanner where id=?');
$sorgu_hakbansil -> execute(array($id));

if($sorgu_hakbansil -> rowCount()){
    echo '<div class="alert alert-success">Kayıt Silindi Lütfen Bekleyin</div><meta http-equiv="refresh" content="1; url=hakkimdabanner.php">';
}else{
    echo '<div class="alert alert-danger">Hata Oluştu</div><meta http-equiv="refresh" content="1; url=hakkimdabanner.php">';
}


 require_once('footer.php');
 
 
 ?>
 