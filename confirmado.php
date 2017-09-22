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
<meta name="author" content="Julia Cristina">
<title>Finalizar Pedido</title>
<!-- Head include -->
<?php include ("partials/head.php"); ?>
<!-- FONTES -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

</head>
<body>
<!-- carrinho menu-->
<?php include("partials/header.php");?>
<div class="container">
  <div class="row">

            <section style="margin: auto 90px; text-align: center;">
              <h4 style="color: #cc0000; text-transform: uppercase;">Pronto!</h4>
              <p>Seu pedido está confirmado, confira seu email para mais detalhes.</p>
            </section>

          <div class="clearfix"></div>
          !-- /.container -->
          </div>
          </div>
          <!-- FOOOTER -->
          <?php include("partials/footer.php");?>
          <!-- </footer> -->
          </body>

          </html>
