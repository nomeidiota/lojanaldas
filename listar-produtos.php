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

    <title>Produtos</title>

<?php include ("partials/menu-adm.php"); ?>

<?php include_once("partials/conexao.php");
$result_produtos = "SELECT * FROM tb_produto";
$resultado_produtos = mysql_query($result_produtos);
if (false === $resultado_produtos) {
  echo mysql_error();
}

?>
<?php
//Verificar se está sendo passado na URL a página atual, senao é atribuido a pagina
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
//Contar o total de produtos
$total_produtos = mysql_num_rows($resultado_produtos);
//Seta a quantidade de produtos por pagina
$quantidade_pg = 8;
//calcular o número de pagina necessárias para apresentar os produtos
$num_pagina = ceil($total_produtos/$quantidade_pg);
//Calcular o inicio da visualizacao
$incio = ($quantidade_pg*$pagina)-$quantidade_pg;


//Selecionar os produtos a serem apresentado na página
$result_produtos = "SELECT * FROM tb_produto limit $incio, $quantidade_pg";
$resultado_produtos = mysql_query($result_produtos);
$total_produtos = mysql_num_rows($resultado_produtos);
?>
</head>
<body>

<div class="container">
  <div class="row">
    <div id="page-content-wrapper">
<div class="col-sm-12 col-md-12 well">
    <h3 class="">Listar Produtos</h3>
    </div>

<div class="col-md-4">
  <div class="row">
        <div class="input-group input-group-md">
            <input type="text" class="form-control" placeholder="Pesquisar por todos">
            <div class="input-group-btn">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>

            </div>
        </div>
      </div>
  </div>
      <div class="col-md-4 col-md-offset-4">
        <div class="row">
        <div class="input-group input-group-md">
            <input type="text" class="form-control" placeholder="Buscar produtos">
            <div class="input-group-btn">
                 <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            </div>
          </div>
</div>
</div>
<div class="row">
<div class="col-xs-12" style="width: 100%; padding-right: 0px;" >
  <table id="cart" class="table table-hover table-condensed">
        				<thead>
    						<tr>
    							<th style="width:100%">Produto</th>
    							<th style="width:120%">Quantidade</th>
    							<th style="width:5%">&nbsp;&nbsp;&nbsp;Preço&nbsp;&nbsp;&nbsp;&nbsp;</th>

    						</tr>
    					</thead>
                <div class="row">
                <?php while($rows_produtos = mysql_fetch_assoc($resultado_produtos)){ ?>
                <tbody>
    						<tr>
    							<td data-th="Produto">
                      <form action = "alterar.php" method="POST">
									    <div class="col-sm-10">
                        <div class="input-group input-group-lg">
    										<input type=""  class="form-control" aria-describedby="sizing-addon1" name="nm_produto" value ="<?php echo $rows_produtos['nm_produto']; ?>">
                      </div>
                    </div>
    							</td>
    							<td data-th="Quantidade" class="text-center">
                      <input type="number"  class="form-control text-center" name="vl_produto" value="<?php echo $rows_produtos['qt_produto']; ?>">
                  </td>
    							<td data-th="Preço">
    								<input type="text" class="form-control text-center" name="qt_produto"  value="<?php echo $rows_produtos['vl_produto']; ?>">
    							</td>
                  <td>
                  <a class="btn btn-default btn-sm"
                  href="detalhes-produto-admin.php?cd_produto=<?php echo $rows_produtos['cd_produto']; ?>">
                      <span class="glyphicon glyphicon-pencil"></span> Alterar </button>
                  </td>
                  <!-- <input class="btn btn-default btn-sm" type="Submit" value="Alterar" ></td> -->
                    </form>
    								<!-- espaço para texto -->
                  </tr>
                </tbody>
                    <?php } ?>
                  </div>
                    <tr>


                  <?php
                    //Verificar a pagina anterior e posterior
                    $pagina_anterior = $pagina - 1;
                    $pagina_posterior = $pagina + 1;
                  ?>
                  <!--PAGINACAO  -->
                      <div class="paginacao">
                        <div class="col-xs-12">
                          <nav aria-label="Page navigation">
                            <ul class="pagination">
                              <li>
                                <?php
                                if($pagina_anterior != 0){ ?>
                                  <a href="listar-produtos.php?pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                                <?php }else{ ?>
                                  <span aria-hidden="true">&laquo;</span>
                              <?php }  ?>
                              </li>
                              <?php
                              //Apresentar a paginacao
                              for($i = 1; $i < $num_pagina + 1; $i++){ ?>
                                <li><a href="listar-produtos.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                              <?php } ?>
                              <li>
                                <?php
                                if($pagina_posterior <= $num_pagina){ ?>
                                  <a href="listar-produtos.php?pagina=<?php echo $pagina_posterior; ?>" aria-label="Previous">
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
    							</td>
    						</tr>
                <td data-th="add"><a class="btn btn-default btn-md" href="cadastro-produtos.php" role="button">
                  + ADICIONAR MAIS PRODUTOS</a>
                  <!--PAGINACAO  -->
                      <div class="paginacao">
                        <div class="col-xs-12 col-xs-offset-11">
                          <nav aria-label="Page navigation">
                            <ul class="pagination">
                              <li>
                                <?php
                                if($pagina_anterior != 0){ ?>
                                  <a href="listar-produtos.php?pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                                <?php }else{ ?>
                                  <span aria-hidden="true">&laquo;</span>
                              <?php }  ?>
                              </li>
                              <?php
                              //Apresentar a paginacao
                              for($i = 1; $i < $num_pagina + 1; $i++){ ?>
                                <li><a href="listar-produtos.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                              <?php } ?>
                              <li>
                                <?php
                                if($pagina_posterior <= $num_pagina){ ?>
                                  <a href="listar-produtos.php?pagina=<?php echo $pagina_posterior; ?>" aria-label="Previous">
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
                </td>

            </table>




</div><!-- end col-12 -->
</div>
</div><!-- end container -->
</div>
</div><!-- end page-content-wrapper -->

  <!-- FOOOTER -->

  <!-- jQuery -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.mask.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  <!--Alertify -->
  <script src="js/alertify.min.js"></script>
  <!-- Custom JavaScript -->
  <script src="js/app.js"></script>
  <!-- AngularJS -->

</body>

  </html>
