<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

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

        <div class="container">
            <section class="pd" style="padding-top: 50px;">
                </section>

        <div class="row">
          <section style="padding: 20px;"></section>
        <div class="col-md-6 col-md-offset-3">

        <div class="bg-form">


      <form action="autenticacao-adm.php" method="post">

        <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control input-lg" id="exampleInputEmail1" name="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
        <input type="password" class="form-control input-lg" id="exampleInputPassword1" name="senha" placeholder="Senha">
        <a href="/recoverypassword" id="ajuda_senha" tabindex="5">Perdeu a senha? </a>
      </div>
        <button type="submit" class="btn btn-default btn-lg" href="">Entrar</button>
<section class="pd">
                </section>


<a href="index.php">← Voltar para Nalda's Moda Pet </a>
      </div>

</form>


      </div>
      </div>
      </div>

        </div>


        <section class="pd">
        </section>
 <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>


 </body>
 </html>
