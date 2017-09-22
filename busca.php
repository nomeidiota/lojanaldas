<?php

include ("partials/conexao.php");
?>
  <head>

    <title> resultado de pesquisa </title>
  </head>

    <body>
    <?php


    $consulta = $_GET['consulta'];
    $sql = mysql_query("SELECT * FROM tb_produto where nm_produto like '%".$consulta."%'");
    $row =   mysql_num_rows($sql);
    if ($row > 0){

        // coloca os valores da tabela de dentro do banco

        while ($linha = mysql_fetch_array($sql)){
          $nm_produto = $linha ['nm_produto'];
          $vl_produto = $linha ['vl_produto'];
          $ds_produto = $linha ['ds_produto'];
          $nm_cor = $linha ['nm_cor'];
          $nm_tamanho = $linha ['nm_tamanho'];

          //mostra as informacoes com o echo do que foi pesquisado de acordo com o banco

          echo "<strong> nome: </strong> " .@$nm_produto;
          echo "<br /> <br />";

          echo "<strong> valor: </strong> " .@$vl_produto;
          echo "<br /> <br />";

          echo "<strong> descricao: </strong> " .@$ds_produto;
          echo "<br /> <br />";

          echo "<strong> cor: </strong> " .@$nm_cor;
          echo "<br /> <br />";

          echo "<strong> tamanho: </strong> " .@$nm_tamanho;
          echo "<br /> <br /> <hr>";

        }
    } else {


      echo " nenhum produto com esse nome foi encontrado  ";

    }


?>
  <a href="index.php">Voltar</a>
    </body>

</html>
