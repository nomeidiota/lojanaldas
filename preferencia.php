<?php
include ("partials/conexao.php");
$maior = $_POST['maior'];
$menor = $_POST['menor'];
$nome = $_POST['nome'];
$escolha = $_POST['escolha'];
switch ($escolha) {
  case '$maior':
  $sql = "SELECT * FROM vw_produtos ORDER BY `vl_produto` Asc" or die(mysql_error());
  $qr = mysql_query($sql);
  if (false === $qr) {
    echo mysql_error();
  }
    break;

  case '$menor':
  $sql = "SELECT * FROM vw_produtos ORDER BY `vl_produto` desc" or die(mysql_error());
  $qr = mysql_query($sql);
  if (false === $qr) {
    echo mysql_error();
  }
  break;


  case '$menor':
  $sql = "SELECT * FROM vw_produtos ORDER BY `nm_produto` asc" or die(mysql_error());
  $qr = mysql_query($sql);
  if (false === $qr) {
    echo mysql_error();
  }
  break;

  default:
  $sql = "SELECT * FROM vw_produtos" or die(mysql_error());
  $qr = mysql_query($sql);
  if (false === $qr) {
    echo mysql_error();
  }
    break;
}
?>
