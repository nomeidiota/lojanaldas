<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Produtos</title>

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
 <?php include_once("partials/conexao.php");
   $consulta = $_GET['consulta'];
 $sql = "SELECT * FROM vw_produtos where nm_produto like '%".$consulta."%'" or die(mysql_error());
 $qr = mysql_query($sql);
 if (false === $qr) {
   echo mysql_error();
}
 $total_produtos = mysql_num_rows($qr);
?>
 <?php
 //Verificar se está sendo passado na URL a página atual, senao é atribuido a pagina
 $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
 //Contar o total de produtos
 $sql2 = "SELECT * FROM vw_produtos";
 $qr1 = mysql_query($sql2);
 $total_produtos1 = mysql_num_rows($qr1);
 //Seta a quantidade de produtos por pagina
 $quantidade_pg = 6;
 //calcular o número de pagina necessárias para apresentar os produtos
 $num_pagina = ceil($total_produtos1/$quantidade_pg);
 //Calcular o inicio da visualizacao
 $incio = ($quantidade_pg*$pagina)-$quantidade_pg;


 //Selecionar os cursos a serem apresentado na página
 $sql1 = "SELECT * FROM vw_produtos limit $incio, $quantidade_pg";
 $qr1 = mysql_query($sql1);
 $total_produtos1 = mysql_num_rows($qr1);
 ?>

<body>
    <!-- carrinho menu-->
 <?php include("partials/header.php");?>


    <!-- ::::: END. HEADER INCLUDE ..:::::::: -->

    <section class="page-header">
    <div class="container">
      <div class="row">
    <div class="col-lg-12">
        <div class="loja-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Library</a></li>
            <li class="breadcrumb-item active"><a href="#">Data</a></li>
          </ol>
        </div>
        <div class="resultado">
          <h1 class="resultado"> Resultados encontrados </h1>
        </div>
      </div>
    </section>
</div>
</div>
    <div class="container">
      <div class="row">
    <section class="bg-produtos">
        <div class="row">

             <div class="col-md-3">
               <div class="categorias well">
               <div class="title-categ">
                <a href="roupas/" title="Roupas">
                    <p class="lead">Roupas</p>
                </a>
              </div>
                <div class="list-group">
                    <a href="#" class="list-group-item">Camisetas</a>
                    <a href="#" class="list-group-item"> Vestidos</a>
                    <a href="#" class="list-group-item">Moletom</a>

              </div>
              <div class="title-categ">

                <a href="coleiras/" title="Coleiras">
                    <p class="lead">Coleiras</p>
                </a>
              </div>
                <div class="list-group">
                    <a href="#" class="list-group-item">Identificação</a>
                    <a href="#" class="list-group-item"> Coleiras</a>
                    <a href="#" class="list-group-item">Laços</a>
                </div>
        </div>
        <!-- <div class="preco well" style="padding: 35px;"> -->
          <!-- <div class="row">
          <div class="title-categ">
            <p class="lead"> Valor </p>
          </div>
              <label class=""> A partir de </label>
              <input type="text" name="preco" class="" aria-describedby="sizing-addon3">
            </div> -->

          <!-- <div class="row">

              <label class="" style="padding-right: 47px;"> Até </label>
              <input type="text" name="preco" class="" aria-describedby="sizing-addon3">
              <input type="button"  class="btn btn-default" value="Enviar">
        </div> -->
          <!-- </div> -->
          <div class="tamanho well" style="padding: 35px;">
            <div class="row">
            <div class="title-categ">
              <p class="lead">Tamanho </p>
              <button class="btn btn-default" role="group" aria-label="...">PP</button>
              <button class="btn btn-default" role="group" aria-label="...">P</button>
              <button class="btn btn-default" role="group" aria-label="...">M</button>
              <button class="btn btn-default" role="group" aria-label="...">G</button>
              <button class="btn btn-default" role="group" aria-label="...">GG</button>

            </div>
          </div>
        </div>

      </div>
        <!-- end.col-md-3-->

        <div class="col-md-9">
          <div class="row carousel-holder">

              <div class="col-md-12">
                  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">
                          <div class="item active">
                              <img class="slide-image" src="img/se.jpg" alt="">
                          </div>
                          <div class="item">
                              <img class="slide-image" src="img/de.jpg" alt="">
                          </div>
                          <div class="item">
                              <img class="slide-image" src="img/es.jpg" alt="">
                          </div>
                      </div>

                  </div>
              </div>

          </div>
              <!-- PAGINACAO -->
              <div class="col-xs-12">
                <?php
                //Verificar a pagina anterior e posterior
                $pagina_anterior = $pagina - 1;
                $pagina_posterior = $pagina + 1;
                ?>

              <div class="paginacao">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                      <li>
                        <?php
                        if($pagina_anterior != 0){ ?>
                          <a href="pesquisar.php?consulta=<?php echo $consulta;?>&pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                        <?php }else{ ?>
                          <span aria-hidden="true">&laquo;</span>
                      <?php }  ?>
                      </li>
                      <?php
                      //Apresentar a paginacao
                      for($i = 1; $i < $num_pagina + 1; $i++){ ?>
                        <li><a href="pesquisar.php?consulta=<?php echo $consulta;?>&pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                      <?php } ?>
                      <li>
                        <?php
                        if($pagina_posterior <= $num_pagina){ ?>
                          <a href="pesquisar.php?consulta=<?php echo $consulta;?>&pagina=<?php echo $pagina_posterior; ?>" aria-label="Previous">
                            <span aria-hidden="true">&raquo;</span>
                          </a>
                        <?php }else{ ?>
                          <span aria-hidden="true">&raquo;</span>
                      <?php }  ?>
                      </li>
                    </ul>
                  </nav>

              </div>
                <!-- ORDENAR POR -->
                  <section style="padding-top: 11px;"></section>
                  <select class="ordenar-por">

                    <option value="Relevancia"> Relevância </option>
                    <option value="menor-preco"> Menor preço </option>
                    <option value="maior-preco"> Maior preço </option>
                    <option value="A-Z"> A-Z </option>
                    <option value="Z-A"> Z-A </option>
                    <option value="melhor-desconto"> Melhor desconto </option>
                  </select>

                </div>


              <?php

              if ($total_produtos > 0){ ?>
                <div class="row">
                  <?php while ($linha = mysql_fetch_array($qr)){ ?>
                        <div class="thumb">
                            <div class="col-sm-4 col-lg-4 col-md-4">
                              <a href="detalhes-produto.php?cd_produto=<?php echo $linha['cd_produto']; ?>">
                              <div class="thumbnail">
                                <img src="img/produtos/<?php echo $linha['imagem'];?> " width="220px" height="220px">
                                <div class="overlay">
                                </div>
                                <h3 class="text">
                                  <?php echo $linha['nm_produto']; ?>
                                  </h3>
                                  <h3 class="texta">
                                    <?php
                                      $valor = $linha['vl_produto'];
                                      $valor = 'R$ '.number_format($valor, 2, ',', '.');
                                      echo $valor;
                                    ?>
                                  </h3>
                                </a>
                              </div>
                              <div class="placeholder">
                                <span class="car-parc"></span>
                                </div>
                        </div>
                        </a>
                        </div>
                          <?php } ?>
                          <?php } else {
                             echo "Nenhum resultado encontrado";
                           }?>
                        </div>

                    <?php
                      //Verificar a pagina anterior e posterior
                      $pagina_anterior = $pagina - 1;
                      $pagina_posterior = $pagina + 1;
                    ?>
                    <div class="paginacao">
                      <div class="col-xs-12">
                        <nav aria-label="Page navigation">
                          <ul class="pagination">
                            <li>
                              <?php
                              if($pagina_anterior != 0){ ?>
                                <a href="pesquisar.php?consulta=<?php echo $consulta;?>&pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous">
                                  <span aria-hidden="true">&laquo;</span>
                              </a>
                              <?php }else{ ?>
                                <span aria-hidden="true">&laquo;</span>
                            <?php }  ?>
                            </li>
                            <?php
                            //Apresentar a paginacao
                            for($i = 1; $i < $num_pagina + 1; $i++){ ?>
                              <li><a href="pesquisar.php?consulta=<?php echo $consulta;?>&pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                            <?php } ?>
                            <li>
                              <?php
                              if($pagina_posterior <= $num_pagina){ ?>
                                <a href="pesquisar.php?consulta=<?php echo $consulta;?>&pagina=<?php echo $pagina_posterior; ?>" aria-label="Previous">
                                  <span aria-hidden="true">&raquo;</span>
                                </a>
                              <?php }else{ ?>
                                <span aria-hidden="true">&raquo;</span>
                            <?php }  ?>
                            </li>
                          </ul>
                        </nav>
                      </div>
                    </div>

                </div><!-- end.row produtos-->
                </div>
                </div><!-- end.row-->
</div><!-- end.container-->
<!-- FOOOTER -->
<?php include("partials/footer.php");?>
</body>

</html>
