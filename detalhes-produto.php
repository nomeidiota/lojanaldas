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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title></title>

    <?php include ("partials/head.php"); ?>
    <script src='js/jquery-1.8.3.min.js'></script>
    <script src='js/jquery.elevatezoom.js'></script>



    <!-- FONTES -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src='jquery-1.8.3.min.js'></script>
	<script src='jquery.elevatezoom.js'></script>
  </head>
<body>

 <!-- carrinho menu-->
 <?php include("partials/header.php");?>
 <?php include("partials/conexao.php");

 $id = $_GET['cd_produto'];
 $sql = "SELECT * FROM vw_produtos WHERE cd_produto='$id'";
 $qr = mysql_query($sql);
 if (false === $qr) {
   echo mysql_error();
}

 $ln = mysql_fetch_assoc($qr);
 ?>
      <!-- breadcrumb -->
      <div class="container">
         <div class="row">
           <div class="loja-breadcrumb">
               <ol class="breadcrumb">
                   <li class="breadcrumb-item"><a href="#">Início</a></li>
                   <li class="breadcrumb-item active">Soft</li>
                   <li class="breadcrumb-item"><a href="#">Produtos</a></li>
               </ol>
           </div>
      </div>
      <!--./breadcrumb  -->

<div class="container">
<div class="col-xs-12">
    <div class="row">

      <form class="form6" action="carrinho.php?add=<?php echo $ln['cd_produto']?>" method="post">
       <div class="col-md-5">
          <div style="float: left; padding: 20px; margin: 0px 50px 0px 50px;">
          <img src="img/produtos/<?php echo $ln['imagem']; ?>" style="float: right; width: 100%;"/>
        </div>
      </div>
        <div class="col-md-6">
          <div class="nome_produto">
         <h3  style="text-transform: uppercase; text-align: left;"><?php echo $ln['nm_produto']; ?> </h3>
          <p style="text-transform:uppercase;"> <?php echo $ln['nm_categoria']; ?></p>
       </div>


<!-- Código produtos -->
      <div class="cod-produto">
      <p> </p>
      <div class="codreference"></div>

      </div>
      <div class="preco">
        <h3 class="price"><b> <?php $valor = $ln['vl_produto'];
        $valor = 'R$ '.number_format($valor, 2, ',', '.');
        echo $valor;
         ?></b></h3>
      </div>


        <!--COR E TAMANHO  -->
          <div class="tamanho-produto">
              <p> Tamanho </p>
            <select class="nm_tamanho">
          <option value="">Selecione</option>
          <option value="tam-p">PP</option>
          <option value="tam-p">P</option>
          <option value="tam-m">M</option>
          <option value="tam-g">G</option>
          <option value="tam-gg">GG</option>
        </select>
            <!-- <option value="tam"></option> -->
          </select>
            <div class="com"  style="padding-top: 25px;">
              <?php
                $cod = $ln['cd_produto'];
                $nome = $ln['nm_produto'];
                // $img = $ln['nm_cor'];
              ?>

            </form>
              <form class="" action="carrinho.php" method="get">
                <a class="btn btn-default btn-lg" href="carrinho.php?add=<?php echo $ln['cd_produto']?>"name="produto" role="button" value="">COMPRAR</a>
              </form>
            </div>
            </div>
          </div>
                      </div>
                        </div>

                      </div>

    <br>
<div class="container">
  <div class="row">

        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home"><font color="black">DESCRIÇÃO DO PRODUTO</font></a></li>
              <li><a data-toggle="tab" href="#menu1"><font color="black">ESPECIFICAÇÕES TÉCNICAS</font></a></li>
              <li><a data-toggle="tab" href="#menu2"><font color="black">MEDIDAS</font></a></li>

        </ul>

          <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
              <div class="color-font"></div>
              <p> <?php echo $ln['ds_produto']; ?></p>
            </div>
            <div id="menu1" class="tab-pane fade">
              <h3></h3>
              <p><?php echo $ln['ds_especificacoes']; ?> </p>
                  </div>

                    <div id="menu2" class="tab-pane fade">
                      <!-- RESPONSIVE TABLE -->
                      <style>
                      /* Table Base */

  table {
    max-width: 100%;
    background-color: transparent;
    border-collapse: collapse;
    border-spacing: 0;
    font-family: arial;
  }

  .table {
    border-bottom: #999999 solid 1px;
    width: 100%;
    margin-bottom: 20px;
  }

  .table th,
  .table td {
    border-right: #999999 solid 1px;
    font-size: 12px;
    padding: 8px;
    line-height: 20px;
    text-align: left;
    vertical-align: middle;
  }

  .table td:last-child {
     border-right: 0;
  }

  .table thead th {
    font-weight: normal;
    background-color: #005dab;
    color: #fff;
    font-size: 15px;
  }

  .table tbody > tr:nth-child(odd) > td,
  .table tbody > tr:nth-child(odd) > th {
    background-color: #f8f8f8;
  }


/* Small Sizes */
@media (max-width: 767px) {

  /* Responsive Table */
  .table-responsive {
    display: block;
    position: relative;
    width: 100%;
  }

  .table-responsive thead,
  .table-responsive tbody,
  .table-responsive th,
  .table-responsive td,
  .table-responsive tr {
    display: block;
  }
  .table-responsive td,
  .table-responsive th {
    height: 35px;
  }

  .table-responsive thead {
    float: left;
  }

  .table-responsive tbody {
    width: auto;
    position: relative;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    white-space: nowrap;
  }

  .table-responsive tbody tr {
    display: inline-block;
  }


  .table td:last-child {
     border-right: #999999 solid 1px;
  }


}</style>
                        <div><h3>TABELA DE MEDIDAS</h3></div>
                        <table class="table table-responsive" width="374" border="1" bordercolor="#0" cellspacing="0" cellpadding="3">
                      <tbody>
                        <tr align="center">
                            TABELA DE MEDIDAS
                         </tr>
                         <tr align="center">
                           <td>Tamanho </td>
                           <td> Comprimento </td>
                           <td> Peitoral</td>
                         </tr>
                         <tr align="center">
                           <td>GG </td>
                           <td> 22 </td>
                           <td> 22</td>
                         </tr>
                         <tr align="center">
                           <td>G </td>
                           <td> 27 </td>
                           <td> 27</td>
                         </tr>
                           <tr align="center">
                             <td>M </td>
                             <td> 29 </td>
                             <td> 32</td>
                           </tr>
                           <tr align="center">
                             <td>P </td>
                             <td> 30 </td>
                             <td> 30</td>
                           </tr>
                           <tr align="center">
                             <td>PP </td>
                             <td> 12 </td>
                             <td> 15</td>
                           </tr>
                      </tbody>
                    </table>
            </div>
        </div>
      </section>
      </div>
      </div>

<section class="pd-text" style="padding-top: 35px;">
 <div class="fonte-decker">
  <center><font color="#bb0000"><h3>RECOMENDADOS</h3></font></center>
  </div>
</section>
  </div>

  <div class="container">
  <div class="row">

                <?php include_once("partials/conexao.php");
                $result_produtos =
                "SELECT * FROM vw_produtos where nm_categoria = 'vestidos'
                order by cd_produto asc limit 4" or die(mysql_error());
                $resultado_produtos = mysql_query($result_produtos);
                if (false === $resultado_produtos) {
                  echo mysql_error();
              }
              ?>
            <!-- RECOMENDADOS -->
            <div class="row">
            <section class="pd-produtos" style="padding-top: 30px;">
              <?php while($ln = mysql_fetch_assoc($resultado_produtos)){ ?>
                      <div class="col-sm-5 col-md-3">
                        <a href="detalhes-produto.php?cd_produto=<?php echo $ln['cd_produto']; ?>">
                        <div class="thumbnail">
                          <img src="img/produtos/<?php echo $ln['imagem'];?> " width="220px" height="220px">
                            <div class="caption">
                                  <h3 class="text-rec">
                                     <?php echo $ln['nm_produto']; ?>
                                   </h3>
                                    <h3 class="text-rec-vl">
                              <?php
                               $valor = $ln['vl_produto'];
                                $valor = 'R$ '.number_format($valor, 2, ',', '.');
                                echo $valor;
                                ?>
                              </h3>
                              </a>
                            </div>
                          </div>
                    </div>
                      <?php } ?>
                    </div>

                  </section>

   <!-- /.container
        /.row  -->
        </div>
        </div>
 <!-- Footer -->

 <?php include("partials/footer.php");?>
 <script src="js/jquery.js"></script>
 <script src="js/jquery.mask.js"></script>
 <!-- Bootstrap Core JavaScript -->
 <script src="js/bootstrap.min.js"></script>
 <!--Alertify -->
 <script src="js/alertify.min.js"></script>
 <!-- Custom JavaScript -->
 <script src="js/app.js"></script>
 <!-- </footer> -->

</body>

</html>
