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
<title>Confirmar</title>
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
    <h3><center>Finalize seu pedido</center></h3>
    <h4><center>Confirmar carrinho</center></h4>
    <form role="form">
        <div class="container">
          <div class="row">
            <section class="carrinhobg">
              <form action="carrinho.php" method="get" onsubmit="">
                <div class="txt-heading">Carrinho
                  <a id="btnEmpty"
                  href="carrinho.php?empty"/>Esvaziar carrinho</a>
                </form>
                <form action="carrinho.php" method="post">
                </div>
                <table id="cart" class="table table-hover table-condensed">
                  <?php
                  if(count(@$_SESSION['carrinho']) == 0){ ?>
                    <?php echo '<h4 class="nomargin"> Não há produto no carrinho </h4>'; ?>
                    <?php }
                    else {
                      $total = 0;
                      foreach($_SESSION['carrinho'] as $id => $qtd){
                        $sql   = "SELECT *  FROM vw_produtos WHERE cd_produto= '$id'";
                        $qr    = mysql_query($sql) or die(mysql_error());
                        $ln    = mysql_fetch_assoc($qr);
                        $nome  = $ln['nm_produto'];
                        $preco = number_format($ln['vl_produto'], 2, ',', '.');
                        $sub   = number_format($ln['vl_produto'] * $qtd, 2, ',', '.');

                        $total += $ln['vl_produto'] * $qtd;
                        $_SESSION['total'] = $total;
                        $_SESSION['qtd'] = $qtd;
                        $_SESSION['preco'] = $preco;
                        $_SESSION['produto'] = $id;

                              ?>
                        <thead>
                          <tbody>
                            <tr>
                              <th style="width:50%">Produto</th>
                              <th style="width:10%">Preço</th>
                              <th style="width:8%">Quantidade</th>
                              <th style="width:22%" class="text-center">Subtotal</th>
                              <th style="width:10%">Retirar da cesta</th>
                            </tr>
                          </thead>
                          <tr>
                            <td data-th="Produto">
                              <div class="row">
                                <div class="col-sm-2 hidden-xs">
                                  <img src="img/produtos/<?php echo $ln['imagem']?>" alt="..." class="img-responsive"/></div>
                                  <div class="col-sm-10">
                                    <h4 class="nomargin"><?php echo $ln['nm_produto']?></h4>
                                    <p class=""> <?php echo $ln['ds_produto']?>
                                    </p>
                                  </div>
                                </td>
                                <td data-th="Preço"> <?php echo $ln['vl_produto']?>  </td>
                                <form action="carrinho.php?up" method="get">
                                  <td data-th="Quantidade">
                                    <input type="number" class="form-control text-center" name="prod<?php echo '['.$id.']'?>" value="<?php echo $qtd?>"/>
                                  </form>
                                </td>
                                <td data-th="Subtotal" class="text-center"> <?php echo 'R$' .$sub; ?> </td>
                                </form>
                                <?php //$id = $_GET['add']; ?>
                                <form class="carrinho.php" method="get">
                                  <td data-th="excluir" class="text-center">
                                    <a href="carrinho.php?del=<?php echo $id; ?>"/> Excluir </td>
                                    </tr>
                                  </form>
                                </div>
                              </tbody>
                              <tfoot>
                                <?php } ?>
                                <tr>
                                  <td>
                                    <a href="produtos.php" class="btn btn-warning">
                                      <i class="fa fa-angle-left"></i> Continue comprando</a></td>
                                      <td colspan="3" class="hidden-xs"></td>
                                      <td class="hidden-xs text-center" ><strong>
                                        <?php echo 'Total: '.'R$' .$total; ?>
                                      </strong>
                                    </td>
                                    <?php  } ?>
                                  </tr>
                                </tbody>
                              </tfoot>
                            </table>
                            <hr />
                          </section>
<!--/.CONTAINER .ROW -->
</div>
</div>
<form action="car-ins.php" method="post">
<ul class="list-inline pull-right">
<li>
  <li><a type="button" class="btn btn-default prev-step" href="carrinho.php">Anterior</a></li>
  <input type="hidden" name="cd_usuario" value="<?php $susuario;?>">
  <input type="hidden" name="cd_produto" value="<?php  $id;?>">
  <input type="hidden" name="qtd" value="<?php $qtd;?>">
  <input type="hidden" name="total" value="<?php $total;?>">
  <input type="submit" value="Confirmar" class="btn btn-default" ></a></li>

</ul>
</form>
</div>
</form>
</section>
<!-- /.container -->
</div>
</div>
<!-- FOOOTER -->
<?php include("partials/footer.php");?>
<!-- </footer> -->
</body>

</html>
