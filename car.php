<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Carrinho</title>

    <?php include ("partials/head.php"); ?>

    <!-- FONTES -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

</head>
<?php include("partials/conexao.php");?>

<?php session_start();
$produto = $_GET['id'];
$inserir = $_GET['inserir'];
$qt = "1";

  //captura o ultimo id da tabela pedido
  $sql = "SELECT cd_pedido from tb_pedido order by cd_pedido desc";

  $rs = mysql_query($sql);
  $reg = mysql_fetch_array($rs);
  $id_ped = $reg["cd_pedido"];
  // $status = $reg["status"];

  //insere um registro na tabela de pedidos com o numero do pedido
  if ($_SESSION['num_ped'] == '' and $inserir == "S"){
  // incrementa 1 ao ultimo id
  $id_ped = $id_ped + 1;
  // prepara o numero do pedido (id do pedido, hora e primeiro digito do minuto)
  $num_ped = $id_ped . "." . date("H") . substr(date("i"), 0,1);
  $_SESSION['num_ped'] = $num_ped;
  $_SESSION['id_ped'] = $id_ped;

  // numero do boleto = numero do pedido sem separador de milhar
  $_SESSION['num_boleto'] = $id_ped . date("H") . substr(date("i"),0,1);

  $sqli = "INSERT into tb_pedido (cd_pedido, status)
  values ('$num_ped','Em andamento')";
  mysql_query($sqli);
  $_SESSION['status'] = 'Em andamento';
}

  //excluir itens do carrinho
  $excluir = $_GET['excluir'];
  $id = $_GET['cd_produto'];
  if ($excluir = "S"){
    $sqld = "DELETE from tb_pedido where cd_produto = '$produto'";
    mysql_query($sqld);
  }

  //captura dados do produto selecionado

  $sql = "SELECT * from tb_produto
  where cd_produto = '$produto' ";
  $rs = mysql_query($sql);
  $reg = mysql_fetch_array($rs);
  $codigo = $reg["cd_produto"];
  $nome = $reg["nm_produto"];
  $preco = $reg["vl_produto"];
  $qtd = $reg["qt_produto"];

  $num_ped = $_SESSION['num_ped'];

  //Verifica se o item já se encontra no carrinho

  $sqld = "SELECT cd_produto from tb_pedido where cd_pedido = '$produto'
  AND cd_pedido = '$num_ped'";
  $rsd = mysql_query($sqld);
  // se nenhum registro for encontrado, $item_duplicado será igual a 0,
  // caso contrário será igual a 1
  $item_duplicado = mysql_num_rows($rsd);

  //Adiciona o produto à tabela de itens somente se item_duplicado for
  // igual a 0

  if ($item_duplicado == 0 and $inserir == "S"){
    $sqli = "INSERT into tb_pedido (cd_pedido, cd_produto, nm_produto,
    qt_produto, vl_produto) values '$num_ped', '$codigo', '$nome',
    '$qtd', '$preco'";
    mysql_query($sqli);

    }

    // Atualiza itens do carrinho de acordo comos valores digitados no
    //campo "quantidade" de cada item

    for ($contador =1; $contador <= $_SESSION['total_itens']; $contador++){
      $b[$contador] = $_POST['txt'.$contador];
      $c[$contador] = $_POST['id'.$contador];
      $sqla = "UPDATE cd_pedido set qt_produto = '$b[$contador]'
      where cd_pedido  = '$c[$contador]'";
      mysql_query($sqla);

      }

      //captura os itens adc ao carrinho para serem exibidos na página
      $sql = "SELECT * from tb_pedido where cd_pedido = '$num_ped'
      order by cd_produto";
      $rs = mysql_query($sql);
      $total_itens = mysql_num_rows($rs);
      $_SESSION['total_itens'] = $total_itens;

  ?>
<body>
  <script language="javascript">
  function valida_form(){
    <?php for ($contador = 1; $contador <= $_SESSION['total_itens'];
      $contador++) {?>
        if (document.cesta.txt<?php print $contador; ?>.value <1){
          alert("O campo quantidade não pode ser menor que 1.");
          return false;
        }
        if (document.cesta.txt<?php print $contador; ?>.value >10){
          alert("O campo quantidade não pode ser mais de 10 itens.");
          document.cesta.txt<?php print $contador; ?>.focus();
          return false;
        }
        <?php }?>
        return true;
      }
   </script>

 <!-- carrinho menu-->
 <?php include("partials/header.php");?>

<div class="container">
  <div class="row">
    <section class="carrinhobg">
      <form action="carrinho.php" method="post" onsubmit="return valida_form(this);">
        <table id="cart" class="table table-hover table-condensed">
        				<thead>
    						<tr>
    							<th style="width:50%">Produto</th>
    							<th style="width:10%">Preço</th>
    							<th style="width:8%">Quantidade</th>
    							<th style="width:22%" class="text-center">Subtotal</th>
    							<th style="width:10%">Retirar da cesta</th>
    						</tr>
    					</thead>
    					<tbody>
                <?php
                $sub = 0;
                $n = 0;
                while ($reg = mysql_fetch_array($rs)){
                  $n= $n + 1;
                  $id = $reg["cd_pedido"];
                  $codigo = $reg["cd_produto"];
                  $nome = $reg["nm_produto"];
                  $qtd = $reg["qt_produto"];
                  $preco_unitario = $reg["vl_produto"];
                  $preco_total = $preco_unitario * $qtd;
                  $sub = $sub * $preco_total;
?>
<?php }
?>
    						<tr>
    							<td data-th="Produto">
    								<div class="row">
                      <?php
                      $sql2 = "SELECT imagem FROM vw_produtos where cd_produto = '$codigo'";
                      $qrq = mysql_query($sql2) or die(mysql_error());
                      $lnq = mysql_fetch_assoc($qrq);?>
    									<div class="col-sm-2 hidden-xs"><img src="img/produtos/<?php echo $lnq['imagem']?>" alt="..." class="img-responsive"/></div>
    									<div class="col-sm-10">
    										<h4 class="nomargin"></h4>
    										<p><?php
                          if($_SESSION['num_ped'] == ""){?>
                          <p>Não há produto no carrinho</p>
                          <?php }else{?>
                           <p class="prod"><?php $nome;?> </p>
                        <?php }?></p>
    									</div>
    								</div>
    							</td>
    							<td data-th="Preço"><?php echo $preco_unitario;?></td>
    							<td data-th="Quantidade">
    								<input type="number" class="form-control text-center" value="1" name="quantidade">
    							</td>

    							<td data-th="Subtotal" class="text-center"><?php
                   echo 'R$ '.$sub.''?></td>
    							</td>
                  <?php
                  $sql3 = "SELECT cd_produto FROM vw_produtos where cd_produto = '$codigo'";
                  $qr = mysql_query($sql3) or die(mysql_error());
                  $ln = mysql_fetch_assoc($qr);?>
                  <td data-th="excluir" class="text-center">
                    <a href="carrinho.php?id=<?php echo $ln['cd_produto']?>" onclick="javascript: location.href='excluir'">Excluir</td>
                </td>
    						</tr>
    					</tbody>
    					<tfoot>
    						<tr class="visible-xs">
    							<td class="text-center"></td>
    						</tr>
    						<tr>
    							<td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue comprando</a></td>
    							<td colspan="3" class="hidden-xs"></td>
    							<td class="hidden-xs text-center"><strong>
                    <?php $preco_total = number_format($preco_total, 2, ',', '.');
                        echo 'Total:
                        R$ '.$preco_total.'
                      ';
                        ?>
                      </strong>
                    </td>
                  </tr>

                  <input type="hidden" name="id <?php print $n;?>" value="<?php print $id; ?>">
                  <input type="hidden" name="cod <?php print $n;?>" value="<?php print $codigo; ?>">
              </tfoot>
              </table>
            </form>
                  <div class="comprar">
                    <a href="#" class="btn btn-default btn-lg" onclick="javascript: location.href='pedido-final.php'">Comprar</a>
                  </div>
                  <div class="att">
                    <a href="#" class="btn btn-default btn-lg" >Atualizar carrinho</a>
                  </div>
            <hr />
            <div class="table">
                            <thead>
                            <tr>
                            <th style="width:50%"><b>CALCULAR FRETE</b></th>
                            </tr>
                            </thead>
                                 <div id="custom-search-inputii">
                                                  <div class="input-group col-md-12">
                                                      <input type="text" class="search-query form-control" placeholder="Digite um cep válido" />
                                                      <span class="input-group-btn">
                                                          <button class="btn btn-default btn-md" type="button">
                                                              Calcular
                                                          </button>
                                                      </span>
                                                  </div>
                                              </div>
                                            </div>
                                        </section>
 <!--/.CONTAINER .ROW -->
                 </div>
                 </div>
         <!-- Footer -->
         <?php mysql_free_result($rs);
         mysql_free_result($rsd);
         mysql_close($link);?>
         <?php include("partials/footer.php");?>
         <!-- </footer> -->
     <!-- /.container -->
</body>
</html>
