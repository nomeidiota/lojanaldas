

<?php include ("partials/menu-adm.php"); ?>


<div id="page-content-wrapper">
<div class="col-sm-12 col-md-12 well">
    <h3 class="">Listar Clientes</h3>
    </div>


<div class="container">
<br>

<div class="col-md-7">
	<div class="row">

        <div class="input-group input-group-lg">
            <input type="text" class="form-control" placeholder="Nome">
            <div class="input-group-btn">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="#">Nome</a></li>
                    <li><a href="#">E-mail</a></li>

                </ul>
            </div>
        </div>

	</div>


</div>

<div class="col-md-5">


        <div class="input-group input-group-lg">
            <input type="text" class="form-control" placeholder="Buscar produtos">
            <div class="input-group-btn">
                 <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            </div>


	</div>

</div>

<br>
<br>


<div class="row">
<br>
    <section class="carrinhobg">
    <table id="cart" class="table table-hover table-condensed">
        				<thead>
    						<tr>
    							<th style="width:10%">Nome</th>
    							<th style="width:10%">E-mail</th>
    							<th style="width:50%">Status</th>

    							<th style="width:10%"></th>
    						</tr>
    					</thead>
    					<tbody>
    						<tr>
    							<td data-th="Nome">
    								<div class="row">
    									<div class="col-sm-2 hidden-xs"></div>
    									<div class="col-sm-10">
    										Nenhum resultado encontrado
    									</div>
    								</div>
    							</td>
    							<td data-th="email"><!-- espaço para texto --></td>
    							<td data-th="Status">
    								<!-- espaço para texto -->
    							</td>
    							<td data-th="Su" class="text-center"><!-- espaço para texto --></td>
    							</td>
    						</tr>
    					</tbody>

              </table>

            <hr />


                                          </section>

 <!--/.CONTAINER .ROW -->
                 </div>


</div><!-- end col-12 -->




</div><!-- end container -->

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
