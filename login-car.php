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
<meta name="author" content="Julia Cristina, andresa rios, pamela santos, wesley garcia e sarah paiva">
<title>Finalizar Pedido</title>
<!-- Head include -->
<?php include ("partials/head.php");
?> <!-- FONTES -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

</head>
<body>
  <?php
    if(count(@$_SESSION['idUser']) == 0)
    {
      ?>
<?php include("partials/header.php");?>
<div class="container">

  <div class="row">
<!-- LOGIN -->
<h3 class="text-center"> Entre para confirmar sua compra </h3>
<form action="user-car.php?cod=<?php echo $id;?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control input-lg" id="" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" name="senha">Senha</label>
    <input type="password" class="form-control input-lg" name="senha" id="" placeholder="Senha">
    <a href="/recoverypassword" id="ajuda_senha" tabindex="5">Esqueci minha senha </a>
  </div>

  <section class="pd">
  </section>
  <div class="registrate">
    <p>Ainda não tem sua conta? <a href="cadastro.php">Cadastre-se</a> </p>
  </div>

<?php
//
// $num_ped = ($_SESSION['carrinho'][$id]);
// $susuario = (@$_SESSION['idUser']);
// $usuario = "SELECT cd_usuario from tb_usuario where cd_usuario = '$susuario'";
//   if(@$_GET['pa']) {
//
//     $sqli = mysql_query("INSERT into tb_pedido (cd_pedido, cd_produto,
//       cd_usuario, qt_produto, vl_total) values ('$num_ped', '$id','$usuario','$qtd', '$total')
//       ");
//
//   }

 ?>
<ul class="list-inline pull-right">
  <li><a type="button" class="btn btn-default prev-step" href="carrinho.php">Anterior</a></li>
  <li><button type="submit" class="btn btn-default next-step" href="">Entrar</button></li>
</ul>
</form>
<?php } else {
  header('location: pedido-final.php');
} ?>


<!-- /.container -->
</div>
</div>
<!-- FOOOTER -->
<?php include("partials/footer.php");?>
<!-- </footer> -->
</body>

</html>
