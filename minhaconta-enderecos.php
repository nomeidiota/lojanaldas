<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Meus endereços</title>

    <?php include ("partials/head.php"); ?>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php include("partials/conexao.php");?>
    <?php if(!isset($_SESSION))
    {
      session_start();
    }
    ?>
</head>

<body>
  <?php include("partials/header.php");?>

   <div class="container">
       <div class="row">
         <div class="col-md-3">

           <section class="pd-icon" style="padding-top: 35px; padding-left: 10px;">
          <div class="icon-usuario">
         <i class="glyphicon glyphicon-user"> </i>


           <strong class="user-name"><?php echo $_SESSION['nome']?></strong>
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

            <h3>Meus endereços</h3>

        </div>


        <!-- Meus endereços -->

        <!-- endereco -->
      <div class="row">
        <section class="pd-endereco">
          <?php
          $susuario = $_SESSION['idUser'];
          $busca_usuario = "SELECT * FROM tb_usuario where cd_usuario = $susuario";
          $query = mysql_query($busca_usuario);
          $row = mysql_fetch_assoc($query);
          // echo ucwords(strtolower($row['nome'])); echo "&nbsp;";
          // echo ucwords(strtolower($row['sobrenome']));
          $cd_end = $row['cd_end'];

          ?>
        <div class="col-xs-12">
          <h4 class="endereco-principal"> Endereço Principal </h4>
          <div class="account card-adress col-xs-12">
            <div class="row">
                  <section class="pd-trash" style="padding-top:18px;">
                    <?php $busca = mysql_query("SELECT * FROM tb_endereco inner join tb_usuario u
                      on tb_endereco.cd_end = u.cd_end
                      where tb_endereco.cd_end = '$cd_end'") or die(mysql_error()) ;
                    $row = mysql_fetch_assoc($busca);
                    ?>
                  <div class="endereco">
                    <div class="col-lg-12 col-lg-offset-11" style="float:right;">
                      <a class="glyphicon glyphicon-trash" style="float:right;"></a>
                    </div>
                      <div class="col-xs-12">
                        <p class="truncate ng-binding">
                        <?php echo ucwords(strtolower($row['rua'])); echo "&nbsp;";
                       echo "n°: ";  echo $row['numerocasa']; ?></p>
                        <p class="truncate ng-binding"><?php echo "CEP: ";echo $row['cep']; ?>
                        <?php echo ucwords(strtolower($row['nm_cidade'])); echo "/";
                        echo ucwords(strtolower($row['sg_uf']));?> </p> <?php
                      echo ucwords(strtolower($row['nm_bairro']));?></p>
                       <p> <?php echo "Complemento: "; echo ucwords(strtolower($row['complemento'])); ?></p>
                       <p> <?php echo "Referencia: "; echo ucwords(strtolower($row['referencia'])); ?></p>

                    </div>

                  </div>
                </section>



              </div>

            </div>
          </div>

      </div>
      <!--outro endereco  -->
      <section class="pd-endereco">
      <div class="col-xs-12 text-center">


      </div>
    </section>
      </div>





      <!-- .container .row -->
    </div>
    </div>
                  <section class="pd">
                  </section>
              <!-- Footer -->

              <?php include("partials/footer.php");?>

              <!-- </footer> -->


          <!-- /.container -->



      </body>

      </html>
