<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php if(!isset($_SESSION))
    {
      session_start();
    }
    ?>
    <title>Dados cadastrais</title>

    <?php include ("partials/head.php"); ?>

    <!-- FONTES -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>
 <!-- carrinho menu-->
 <?php include("partials/header.php");?>


  <div class="container">
      <div class="row">
        <div class="col-md-3">

          <section class="pd-icon" style="padding-top: 35px; padding-left: 10px;">
         <div class="icon-usuario">
        <i class="glyphicon glyphicon-user"> </i>


          <strong class="user-name"><?php echo @$_SESSION['nome']?></strong>
           <br />
         <small style="padding-left:55px;">
           <a style="cursor: pointer; text-decoration: none; color: #000; font-size:14px;" id="sair-conta" href="logout.php"> Sair </a>
         </small>
       </div>
         </section>

         <section class="pd-menu-pedido">

           <div class="list-group">


             <!-- <a href="minhaconta.php" class="list-group-item">Minha Conta</a> -->
             <a href="minhaconta-pedidos.php" class="list-group-item"> Meus Pedidos</a>
             <a href="minhaconta-dadoscadastrais.php" class="list-group-item">Meus Dados Cadastrais</a>
             <a href="minhaconta-enderecos.php" class="list-group-item">Meus Endereços</a>

    </div>
     </div>
   </section>
   <div class="col-md-9">
   <div class="page-header">

     <h3>Meus dados cadastrais</h3>

   </div>
   <h5 class="col-md-9 titles">
     <b>Para alterar, faça a mudança e clique no botão.</b>
   </h5>

   <!--Formulário contato-->

    <div class="col-xs-12">
      <div class="form-mobile">
            <form action="alterarusuario.php" method="post" class="form-horizontal">
              <div class="col-md-4 col-md-offset-4">

         </div>

    <div class="form-group">
      <label for="email" class="col-sm-5 control-label">Email*</label>
      <div class="col-sm-6 col-md-6">
        <input type="text" class="form-control" name="email" id="email" maxlength="100" value="<?php echo $_SESSION['email'] ?>">
      </div>
    </div>


    <div class="form-group">
      <label for="inputCPassword3" class="col-sm-5 control-label">Senha*</label>
      <div class="col-sm-3">
        <input type="password" class="form-control" id="senha" name="senha" maxlength="50" value="<?php echo $_SESSION['senha']?>">
      </div>
    </div>

    <div class="form-group">
      <label for="inputCPassword3" class="col-sm-5 control-label">Confirmar senha*</label>
      <div class="col-sm-3">
        <input type="password" class="form-control" id="confsenha" name="confsenha" maxlength="50" value="<?php echo $_SESSION['senha']?>">
      </div>
    </div>

    <div class="form-group">
      <label for="name" class="col-sm-5 control-label">Nome *</label>
      <div class="col-sm-6">
        <input type="text" name="nome" class="form-control" id="nome" maxlength="90" value="<?php echo $_SESSION['nome'] ?> ">
      </div>
    </div>
    <?php
    $usuario = $_SESSION['idUser'];
    $sel = mysql_query("SELECT * from tb_usuario where cd_usuario = $usuario");
    $row = mysql_fetch_assoc($sel);
    ?>

    <div class="form-group">
      <label for="name" class="col-sm-5 control-label">Sobrenome*</label>
      <div class="col-sm-6">
        <input type="text" name="sobrenome" class="form-control" id="sobrenome" maxlength="90" value="<?php echo $row['sobrenome']; ?> ">
      </div>
    </div>




      <!-- telefone -->

   <div class="form-group">
      <label for="inputCPassword3" class="col-sm-5 control-label">Telefone*</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="telefone" name="telefone"
         maxlength="50" value="<?php echo $row['telefone'];?>">
      </div>
    </div>


      <!-- celular -->
   <div class="form-group">
      <label for="fone" class="col-sm-5 control-label">Telefone celular</label>
      <div class="col-sm-3">
        <input type="text" class="form-control phone_sp" id="celular" name="celular" value="<?php echo $row['celular']; ?>">
      </div>
      </div>


      <!-- <div class="col-sm-push-5 col-sm-7">
        <input type="checkbox"> Desejo receber emails promocionais
      </div> -->



     <!-- <header class="col-sm-push-2 col-sm-7">
      <h3 class="text-center"> Endereço de cadastro </h3>
     </header> -->

     <div class="col-md-6 col-md-offset-3">
      <div class="status-msg" id="status-msg">
      </div>

     </div>

      <div class="col-sm-push-5 col-sm-7">

      <div class="col-md-10 col-md-offset-7" style="padding-left: 35px;">

                  <input type="submit" value="Alterar" class="btn btn-default btn-md">

                  </div>


   </div>
   </form>
 </div>

 </div>



</div>
        <!-- .container .row -->

      </div>
    </div>
<section class="pd">
</section>
    <?php include("partials/footer.php");?>

            <!-- </footer> -->

    </body>

    </html>
