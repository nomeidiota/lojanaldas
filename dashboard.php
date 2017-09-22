 <!doctype html>
<html class="no-js" lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-language" content="pt-br">
    <title>Admin Festa na Vila</title>
    <!-- TAGS -->
    <meta name="author" content="Veronica Ribeiro">
    <meta name="description" content="O Espaço Lúdico chegou para proporcionar as crianças uma maneira diferente de comemorar.">
    <meta name="keywords" content="kids, buffet, buffet infantil, ar livre, brincadeira, brincadeiras, festa, festa na vila">
    <meta name="robots" content="index,follow">

    <!-- FONT -->
    <link href='https://fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <!-- CSS  -->
    <link rel="stylesheet" href="http://festanavila.com/site/css/foundation.css">
    <link rel="stylesheet" href="http://festanavila.com/site/css/slick.css">
    <link rel="stylesheet" href="http://festanavila.com/site/css/slick-theme.css">
    <link rel="stylesheet" href="http://festanavila.com/site/css/font-awesome.css">
    <link rel="stylesheet" href="http://festanavila.com/site/css/animate.min.css">
    <link rel="stylesheet" href="http://festanavila.com/site/css/app.css">

  </head>

  <body>
  <section class="padding-80">
    <div class="container">
      <div class="row">
        <div class="medium-12 large-3  columns">
        <?php include("pastials/menu-admin.php");?>
        </div>
        <div class="medium-12 large-8 columns">
          <div class="callout callout-default">
          <h3 class="title">Criar novo album</h3>
            <form>
              <div class="row">
                <div class="medium-4 columns">
                  <label>Nome do album
                    <input type="text" placeholder="Nome do album">
                  </label>
                </div>
                <div class="medium-4 columns">
                  <label>Foto de capa
                    <input type="text" placeholder="Foto de capa">
                  </label>
                </div>
                <div class="medium-4 columns">
                  <label class="margin-top-23">
                    <input type="submit" value="Criar Album" id="newalbum" name="newalbum" class="button expanded">
                  </label>
                </div>
              </div>
            </form>
          </div>
          <div class="callout callout-default">
          <h3 class="title">Adiconar novas fotos</h3>
             <form>
              <div class="row">
                <div class="medium-4 columns">
                <label>Selecione o album
                  <select>
                    <option value="01">Festa na vila</option>
                    <option value="02">album 2</option>
                    <option value="04"> o espaço</option>
                  </select>
                </label>
                </div>
                <div class="medium-4 columns">
                  <label for="exampleFileUpload" class="button expanded margin-top-23"> Escolher fotos</label>
                  <input type="file" id="exampleFileUpload" class="show-for-sr">
                </div>
                <div class="medium-4 columns">
                  <label class="margin-top-23">
                    <input type="submit" value="Criar Album" id="newphotos" name="newphotos" class="button expanded">
                  </label>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>  
  </section>

  
  
   <?php
  // $login_cookie = $_COOKIE['color'];
  // echo $login_cookie;
    // if(isset($login_cookie)){
    //   echo"Bem-Vindo, $login_cookie <br>";
    //   echo"Essas informações <font color='red'>PODEM</font> ser acessadas por você";
    // }else{
    //   echo"Bem-Vindo, convidado <br>";
    //   echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
    //   echo"<br><a href='login.html'>Faça Login</a> Para ler o conteúdo";
    // }
?>

<!-- JS -->
    <script src="http://festanavila.com/site/js/vendor/jquery.js"></script>
    <script src="http://festanavila.com/site/js/vendor/what-input.js"></script>
    <script src="http://festanavila.com/site/js/vendor/foundation.js"></script>
    <script src="http://festanavila.com/site/js/slick.min.js"></script>
    <script src="http://festanavila.com/site/js/wow.min.js"></script>
    <script src="http://festanavila.com/site/js/alertify.min.js"></script>
    <script src="http://festanavila.com/site/js/app.js"></script>
</body>
</html>
