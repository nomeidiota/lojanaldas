

<?php include ("partials/menu-adm.php"); ?>
<div id="page-content-wrapper-1">
<div class="container">

	<div class="row">
    <div class="col-lg-12">
    <div class="col-sm-12 col-md-12 well">
    <h3 class="">Cadastrar produtos</h3>
    <div class="col-sm-6">

    </div>
  </div>
				<form class="form-cadastro-produto" method="POST" action="cadastrar-produtos.php" enctype="multipart/form-data">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Nome do produto</label name="nm_produto">
								<input type="text" placeholder="Nome do produto.." class="form-control" name="nm_produto">
							</div>

            <div class="col-sm-6 form-group">
              <label>Quantidade</label>
              <input type="text" placeholder="Quantidade de itens.." class="form-control" name="qt_produto">
            </div>
            </div>
						<div class="row" name="tamanho">
							<div class="col-sm-4 form-group">
								<label>Preço</label>
								<input type="text" placeholder="Preço do produto.." class="form-control" name="vl_produto">
							</div>
							<div class="col-sm-4 form-group">

							</div>
							<div class="col-sm-4 form-group">
								<label>Tamanho</label>
								<input type="text" placeholder="Tamanho do produto.." class="form-control" name="nm_tamanho">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Descricão do produto</label>
								<textarea placeholder="Descrição do produto.." rows="3" class="form-control" name="ds_produto"></textarea>
							</div>
							<div class="col-sm-6 form-group">
								<label>Especificações técnicas</label>
								<textarea placeholder="Composição e material do produto.." rows="3" class="form-control" name="ds_especificacoes"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Inserir na categoria</label>
								<select class="nm_categoria" name="nm_categoria" id="nm_categoria">
									<option value="">Selecione</option>
									<option value="casual">Vestidos</option>
									<option value="fantasia">Camisetas</option>
									<option value="inverno">Lacinhos</option>
									<option value="verao">Coleiras</option>
									<option value="lacinhos">Moletom</option>

								</select>
							</div>
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
								<div class="col-md-3 col-md-offset-2 form-group">
								<div class="fileUpload btn btn-default">
								<i class="fa fa-folder-open fa-lg"></i>&nbsp;&nbsp;Inserir Imagem </label>
								<input name="im_produto" class="upload" type="file">
							</div>
								</div>
				</div>
				</div>
				<button type="submit" class="btn btn-lg btn-info" value="cadastrar" style="background-color: #cc0000;">Cadastrar</button>
					</div>

				</form>
				</div>
	</div>
	</div>

</div>
</div>
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
