<?php if(!isset($_SESSION))
{
  session_start();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <title>Contato</title>

    <?php include ("partials/head.php"); ?>

    <!-- FONTES -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

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

            <div class="caixa" style="padding: 40px;">
                <div class="col-md-6">
                  <label>Para dúvidas e encomendas, nos envie um email.</label>
                  <br>
                  <br>


                  <form action="enviaemail.php" method="POST">
                            <div class="row">
                            <div class="col-md-12">
                                <label>Nome</label>
                                <input type="text" class="form-control" name="nome">
                            </div>
                            <div class="col-md-12">
                                <label>Endereco de email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                             <div class="col-md-12">
                                <label>Assunto</label>
                                <input type="text" class="form-control" name="assunto">
                            </div>
                            <br>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Mensagem</label>
                                <textarea class="form-control" rows="6" name="mensagem"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- social media -->
                <div class="container">
                  <h2 class="intro-text text-center">
                      <strong>Redes Sociais </strong>
                  </h2>
          <div class="text-center center-block">
              <br />
                  <a href="https://www.facebook.com/naldasmodapet/" target="_blank"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
  	            <a href="https://www.instagram.com/naldaspet/" target="_blank"><i id="social-tw" class="fa fa-instagram fa-3x social"></i></a>
  	            <a href="https://plus.google.com/u/0/107224932886655059433" target="_blank"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
              </div>
              <br />
              <div class="text-center">
              <strong>Telefone</strong>
              <p> (13) 3487863</p>
              <strong>Email</strong>
              <p> lojasnaldasmodapet@gmail.com</p>
  	            <!-- <a href="lojasnaldasmodapet@gmail.com" target="_blank"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a> -->
              </div>
  </div>
  <style>
  .social:hover {
     -webkit-transform: scale(1.1);
     -moz-transform: scale(1.1);
     -o-transform: scale(1.1);
 }
 .social {
     -webkit-transform: scale(0.8);
     /* Browser Variations: */

     -moz-transform: scale(0.8);
     -o-transform: scale(0.8);
     -webkit-transition-duration: 0.5s;
     -moz-transition-duration: 0.5s;
     -o-transition-duration: 0.5s;
 }

/*
    Multicoloured Hover Variations
*/

 #social-fb:hover {
     color: #3B5998;
 }
 #social-tw:hover {
     color: #bb0000;
 }
 #social-gp:hover {
     color: #d34836;
 }
 #social-em:hover {
     color: #f39c12;
 }
 </style>        <!-- .redes -->
            </div>
            <!-- container row -->
        </div>
      </div>
    </div>
      <!-- .container .row   -->
   <!-- Footer -->

        <?php include("partials/footer.php");?>

        <!-- </footer> -->


    <!-- /.container -->

 </body>
</html>
