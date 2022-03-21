<?php

require_once('baglan.php');

session_start();

$id = $_GET['id'];

$sorgu_katsil = $db -> prepare('delete from kategoriler where id=?');
$sorgu_katsil -> execute (array($id));

?>