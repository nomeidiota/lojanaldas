
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alterar produto</title>

<?php include ("partials/menu-adm.php"); ?>

<?php include_once("partials/conexao.php");
  $id_produto = $_GET['cd_produto'];
    $result_produtos = "SELECT * FROM vw_produtos WHERE cd_produto='$id_produto'";
      $resultado_produtos = mysql_query($result_produtos);
        if (false === $resultado_produtos) {
          echo mysql_error();
}

$rows_produtos = mysql_fetch_assoc($resultado_produtos);

?>

</head>
<body>
<style>
{
  width:300px;
  height: 170px;
  overflow:auto;
  }
  </style>


<div class="container">
  <div class="row">
    <div id="page-content-wrapper">
      <div class="col-sm-12 col-md-12 well">
        <h3 class=""> Alterar ou excluir produto</h3>
       </div>

    <div class="row">
    <div class="col-xs-12" style="">
    <table id="cart" class="table table-hover table-condensed">
        <tbody>
          <tr>
              <div class="row">
              <div class="esq" style="padding-left:45px;">
    					<td data-th="Produto">
    				 <img id="zoom_05" src="img/produtos/<?php echo $rows_produtos['imagem']; ?>" style="float: right; width: 340px; height: 300px;"/>

                <style>
                .fileUpload {
                  position: relative;
                  overflow: hidden;
                  margin: 10px;
              }
              .fileUpload input.upload {
                  position: absolute;
                  top: 0;
                  right: 0;
                  margin: 0;
                  padding: 0;
                  font-size: 20px;
                  cursor: pointer;
                  opacity: 0;
                  filter: alpha(opacity=0);
                  color: #333;

              }
                </style>
                <div class="fileUpload btn btn-default">
                <i class="fa fa-folder-open fa-lg"></i>&nbsp;&nbsp;Alterar Imagem </label>
                <form action="alterar.php" method="post">
                <input class="upload" name="im_produto" type="file">
              </form>
                </td>
              </div>
              <br />
              <tfoot>
                 <tr>
                   <th style="width:90%">Nome</th>
                   <th style="width:120%">Quantidade</th>
                   <th style="width:5%">&nbsp;&nbsp;&nbsp;Preço&nbsp;&nbsp;&nbsp;&nbsp;</th>
                   <th style="width:120%">Código</th>
                   <th style="width:20%"></th>


                 </tr>
                <form action="alterar.php" method="post">
                <td data-th="Quantidade" class="text-center">
               <input type="text"  class="form-control text-center" name="nm_produto" value="<?php echo $rows_produtos['nm_produto']; ?>">
               </td>
               <td data-th="Preço">
                 <input type="number" class="form-control text-center" name="qt_produto"  value="<?php echo $rows_produtos['qt_produto']; ?>">
               </td>

               <td data-th="Nome">
                 <input type="text" class="form-control text-center" name="vl_produto"  value="<?php echo $rows_produtos['vl_produto']; ?>">
               </td>
               <td data-th="Codigo">
                <input type="text" class="form-control text-center" name="cd_produto"  value="<?php echo $rows_produtos['cd_produto']; ?>">
               </td>

               </td>
               </div>
               </div>
                </tbody>
                 </tfoot>

               </table>

                <div class="col-md-10 col-md-offset-7" style="padding-left: 35px;">
                <input type="submit" value="Alterar" class="btn btn-default btn-md">
                <form action="excluir.php" method="get">
                  <a class="btn btn-default btn-md"
                   href='excluir.php?cd_produto=<?php echo $rows_produtos['cd_produto']; ?>' onclick="return confirm('Deseja mesmo excluir este produto?');">
                 Excluir</a>
                </form>
                <input type="button" value="Cancelar" class="btn btn-default btn-md" onclick="javascript: location.href='listar-produtos.php'">
                  </div>

                 </form>
               </div>
             </div>
           </div>
         </div>
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
