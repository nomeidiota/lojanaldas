<?php
 if(!isset($_SESSION)){
session_start();
}

 include ("partials/conexao.php");
 ?>
 <html>
<head>
<title>Autenticando </title>
 <script type="text/javascript">
 		function loginsuccessfully(){

 			setTimeout("window.location='pagamento.php'",1000);
 		}
    </script>
  </head>
  <?php

$id = ($_SESSION['produto']);
$preco = ($_SESSION['preco']);
$produto = ($_SESSION['total']);
$total = ($_SESSION['total']);
$qtd = ($_SESSION['qtd']);
$data = date('Y-m-d');
$data_hra = date('Y-m-d H:i:s');

$susuario = ($_SESSION['idUser']);
$usuario = mysql_query("SELECT cd_usuario from tb_usuario where cd_usuario = '$susuario'") or die(mysql_error());

if(count($_SESSION['carrinho']) > 0) {

  // tabela pedidos
  $sqli = mysql_query("INSERT into tb_pedido (
    cd_usuario, pedido_data, pedido_data_hora, valor, status) values
    ('$susuario','$data', '$data_hra', '$total','0')
    ") or die ("Erro na query: $sqli. ".mysql_error());

    $sql_busca_pedido = mysql_query("SELECT * from tb_pedido where cd_usuario = '$susuario'") or die (mysql_error());
    $r = mysql_fetch_assoc($sql_busca_pedido);
    $pedido = $r['id_pedido'];


  // if (mysql_num_rows($read > '0')){
  //   foreach ($read as $read_ultimo_pedido_view);
  // }

    foreach($_SESSION['carrinho'] as $id => $qtd){
          $insert_itens_pedidos = mysql_query("INSERT into tb_itens_pedido
            (itens_pedido_id_pedido, itens_pedido_cd_produto,
              itens_pedido_qtd, itens_pedido_vl_produto, itens_pedido_vl_total)
              values ('$pedido', '$id','$qtd','$preco','$total')")
              .mysql_error();
            }
    // $update = "UPDATE tb_pedido set "

  echo "<script> alert('Loading, please wait');</script>";

	echo "<script>loginsuccessfully()</script>";
}

else
{
  echo "ocorreu um erro".mysql_error();
}



?>
