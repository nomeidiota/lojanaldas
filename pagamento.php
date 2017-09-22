<?php if(!isset($_SESSION)){
session_start();
}?>
<?php include ("partials/conexao.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Julia Cristina, Sarah Paiva, Andresa Rios, Pamela Santos, Wesley Garcia">
<title>Pagamento</title>
<!-- Head include -->
<?php include ("partials/head.php"); ?>
<!-- FONTES -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

</head>
<body>
<!-- carrinho menu-->
<?php include("partials/header.php");
?>

  <div class="container">
    <div class="row">

      <section class="pd-endereco"></section>
      <?php
      // tb_pedido
      //buscar pedido
      $seusuario = $_SESSION['idUser'];
      $sql_busca_pedido = mysql_query("SELECT * from tb_pedido where cd_usuario = '$seusuario'") or die (mysql_error());
      $r = mysql_fetch_assoc($sql_busca_pedido);
      $pedido = $r['id_pedido'];
      // echo $pedido;
      $sql = mysql_query("SELECT * FROM tb_itens_pedido
       where itens_pedido_id_pedido = '$pedido'") or die (mysql_error());
       $ln = mysql_fetch_assoc($sql);
       ?>
    <div class="bg"style=" margin: auto 90px;">
      <div class="row">
        <div class="col-md-7">
          <?php //                $busca = mysql_query("SELECT * FROM tb_endereco inner join tb_usuario u
                            //on tb_endereco.cd_end = u.cd_end
                            //where tb_endereco.cd_end = '$cd_end'") or die(mysql_error()) ;
                          //$row = mysql_fetch_assoc($busca);
?>
          <h3> Resumo do pedido </h3>
          <p class="nm_produto"> <?php
          if ($r['status'] == '0'){

            echo "Status do Pedido: "; echo "&nbsp;"; echo "Processando";
            echo "<br>";
            echo "<br>";
          }

          // $codigo = $ln['itens_pedido_cd_produto'];
          // $select = "SELECT * FROM tb_produto where cd_produto = '$codigo'";
          $select = mysql_query("SELECT * FROM tb_itens_pedido inner join tb_produto p on
          tb_itens_pedido.itens_pedido_cd_produto = p.cd_produto
           where itens_pedido_id_pedido = '$pedido'") or die(mysql_error());

          while ($linha = mysql_fetch_assoc($select)){

          echo "<b>".$linha['nm_produto']; echo"</b>"; echo "<br>";
          echo "R$".$linha['vl_produto'];echo "<br>";
          echo "<b> Quantidade: </b>&nbsp;".$linha['qt_produto'];
          echo "<br>";
          echo "<br>";


        }?></p>
          <a type="button" href="minhaconta-pedidos.php" class="btn btn-default">
            Ir a meus pedidos
          </a> -
          <hr />
          <p> Total a pagar </p>
          <label class="col-md-3-offset-3" id="totalapagar">
            <?php  echo 'R$ '.$ln['itens_pedido_vl_total'];
            ?>
          </label>
        </div>
        <div class="col-md-5">
          <h3>Endereço de entrega</h3>
          <section class="pd-endereco"></section>
            <div class="row">
              <div class="endereco" style="">
                <?php
                // $_SESSION['idUser'];
                 ?>
                <div class="col-md-6">
                  <p class="truncate ng-binding"><?php
                  $susuario = $_SESSION['idUser'];
                  $busca_usuario = "SELECT * FROM tb_usuario where cd_usuario = $susuario";
                  $query = mysql_query($busca_usuario);
                  $row = mysql_fetch_assoc($query);
                  echo ucwords(strtolower($row['nome'])); echo "&nbsp;";
                  echo ucwords(strtolower($row['sobrenome']));
                  $cd_end = $row['cd_end'];

                  ?>
                </p>
                <?php
                //"SELECT Users.Username, books.* FROM Users
                  //INNER JOIN UserLinkBooks lb
                    // ON Users.Username = lb.Username
                    //INNER JOIN Books
                    //ON lb.bkTitle = books.Title
                    //WHERE Users.Username = '" . $currentUsr ."'";

                $busca = mysql_query("SELECT * FROM tb_endereco inner join tb_usuario u
                  on tb_endereco.cd_end = u.cd_end
                  where tb_endereco.cd_end = '$cd_end'") or die(mysql_error()) ;
                $row = mysql_fetch_assoc($busca);

                ?>
                  <p class="truncate ng-binding">
                  <?php echo ucwords(strtolower($row['rua'])); echo "&nbsp;";
                 echo "<br>"; echo "n°: ";  echo $row['numerocasa']; ?></p>
                  <p class="truncate ng-binding"><?php echo "CEP: ";echo $row['cep']; ?></p>
                  <p class="truncate ng-binding"><?php echo ucwords(strtolower($row['nm_cidade'])); echo "/";
                  echo ucwords(strtolower($row['sg_uf'])); echo "&nbsp;"; ?></p> <p> <?php
                 echo "&nbsp;"; echo ucwords(strtolower($row['nm_bairro']));?></p>
                 <p> <?php echo "Complemento: "; echo ucwords(strtolower($row['complemento'])); ?></p>
                 <p> <?php echo "Referencia: "; echo ucwords(strtolower($row['referencia'])); ?></p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<hr>
      <center>
        <div class="container">
          <h2>Pagamento</h2>
          <hr>

                <a style="color: #000; font-size: 18px; text-decoration: none;"
                href="pagar.php?id=<?php echo $pedido;?>" target="_blank"> <img src="img/pagseguro.gif"> </a>
              </div>
              <br>
              <br>

            </div>
          </div>
        </center>
            <!-- /.container -->
            </div>
            </div>
            <!-- FOOOTER -->
            <?php include("partials/footer.php");?>
            <!-- </footer> -->
            </body>

            </html>
