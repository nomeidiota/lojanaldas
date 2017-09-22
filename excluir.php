<?php

$cd_produto = $_GET['cd_produto'];


include_once("partials/conexao.php");
$delete = mysql_query("DELETE FROM tb_produto WHERE cd_produto ='".$cd_produto."'")
          or die ("Erro ao realizar a exclusão : " . mysql_error());


echo "<script>
 alert('Excluido com sucesso!');
window.history.go(-2);
</script>";

?>
