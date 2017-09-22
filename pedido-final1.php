
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
    <meta name="author" content="Julia Cristina">

    <title>Finalizar Pedido</title>

     <!-- Head include -->
     <?php include ("partials/head.php"); ?>
    <!-- FONTES -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

<style>

.navtab .nav-tabs {
    text-align: center;
    border: none;
    left: 120px;

}

.carrinhobg {
    padding-top: 30px;
    margin: auto 90px;
}
.wizard {
    margin: 20px auto;
    background: #fff;
}

    .wizard .navtab .nav-tabs {
        position: relative;
        margin: 40px auto;
        margin-bottom: 0;
        border-bottom-color: #e0e0e0;
    }

    .wizard > div.wizard-inner {
        position: relative;
    }

.connecting-line {
    height: 2px;
    background: #e0e0e0;
    position: absolute;
    width: 80%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 50%;
    z-index: 1;
}

.wizard .navtab .nav-tabs > li.active > a, .wizard .navtab .nav-tabs > li.active > a:hover, .wizard .navtab .nav-tabs > li.active > a:focus {
    color: #555555;
    cursor: default;
    border: 0;
    border-bottom-color: transparent;
}

span.round-tab {
    width: 70px;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    border-radius: 100px;
    background: #fff;
    border: 2px solid #e0e0e0;
    z-index: 2;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 25px;
}
span.round-tab i{
    color:#555555;
}
.wizard li.active span.round-tab {
    background: #fff;
    border: 2px solid #cc0000;

}
.wizard li.active span.round-tab i{
    color: #cc0000;
}

span.round-tab:hover {
    color: #333;
    border: 2px solid #333;
}

.wizard .navtab .nav-tabs > li {
    width: 20%;
}

.wizard li:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color:#cc0000;
    transition: 0.1s ease-in-out;
}

.wizard li.active:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 1;
    margin: 0 auto;
    bottom: 0px;
    border: 10px solid transparent;
    border-bottom-color: #cc0000;
}

.wizard .navtab .nav-tabs > li a {
    width: 70px;
    height: 70px;
    margin: 20px auto;
    border-radius: 100%;
    padding: 0;
}

    .wizard .navtab .nav-tabs > li a:hover {
        background: transparent;
    }

.wizard .tab-pane {
    position: relative;
    padding-top: 50px;
}

.wizard h3 {
    margin-top: 0;
}
@media( max-width : 1024px ) {
  .wizard .navtab .nav-tabs > li {
      width: 20%;
      right: 20px;
  }
.wizard .navtab .nav-tabs {
  margin: 21px 70px 20px 0px
}
.connecting-line{
  left: 35px;
}

}
@media( max-width : 585px ) {

    .wizard {
        width: 100%;
        height: auto !important;
    }

    span.round-tab {
        font-size: 16px;
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard .navtab.nav-tabs > li a {
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard li.active:after {
        content: " ";
        position: absolute;
        left: 35%;
    }
}
</style>

<script>

$(document).ready(function () {
    //Initialize tooltips
    $('.navtab .nav-tabs > li a[title]').tooltip();

    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);

        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .navtab .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .navtab .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}
</script>

</head>
<body>
<!-- carrinho menu-->
 <?php include("partials/header.php");?>



<div class="container">

  <div class="row">
  <h3><center>Finalize seu pedido</center></h3>
    <section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <div class="navtab">

                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-shopping-cart"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-envelope"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-usd"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>

              </div>
            </div>

            <form role="form">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                       <div class="container">
  <div class="row">
    <section class="carrinhobg">
    <table id="cart" class="table table-hover table-condensed">
                <thead>
                <tr>
                  <th style="width:50%">Produto</th>
                  <th style="width:10%">Preço</th>
                  <th style="width:8%">Quantidade</th>
                  <th style="width:22%" class="text-center">Subtotal</th>
                  <th style="width:10%"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td data-th="Produto">
                    <div class="row">
                      <div class="col-sm-2 hidden-xs">
                        <img src="img/produtos/produto2.jpg" alt="..." class="img-responsive"/>
                      </div>
                      <div class="col-sm-10">
                        <h4 class="nomargin">Produto 1</h4>
                        <p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
                      </div>
                    </div>
                  </td>
                  <td data-th="Preço">$1.99</td>
                  <td data-th="Quantidade">
                    <input type="number" class="form-control text-center" value="1">
                  </td>
                  <td data-th="Subtotal" class="text-center">R$95,00</td>
                  </td>
                </tr>
              </tbody>
              <tfoot>
                <tr class="visible-xs">
                  <td class="text-center"><strong>Total R$95,00</strong></td>

                </tr>
                <tr>
                  <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue comprando</a></td>
                  <td colspan="3" class="hidden-xs"></td>
                  <td class="hidden-xs text-center"><strong>Total R$95,00</strong></td>
                  </tr>

                </tfoot>
              </table>
                  <div class="comprar">
                    <a href="#" class="btn btn-default btn-md">Comprar</a>
                  </div>
                  <div class="comprar-1-clique">
                    <a href="#" class="btn btn-default btn-md" >Comprar com um clique</a>
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
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-primary next-step">Salvar e continuar</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
                       <div class="bg-form" style="margin: auto 90px;">


      <h3> Já é cadastrado? </h3>
      <form>
        <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control input-lg" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
        <input type="password" class="form-control input-lg" id="exampleInputPassword1" placeholder="Senha">
        <a href="/recoverypassword" id="ajuda_senha" tabindex="5">Esqueci minha senha </a>
      </div>
        <button type="submit" class="btn btn-default btn-lg" href="">Entrar</button>
<section class="pd">
                </section>

 <div class="registrate">
 <p>Ainda não tem sua conta? <a href="cadastro.php">Cadastre-se</a> </p>

      </div>

</form>
</div>

                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Anterior</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Salvar e continuar</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step3">

        <div class="bg"style=" margin: auto 90px;">
            <div class="row">
              <div class="col-md-7">
                <h3> Resumo do pedido </h3>
                <p class="qtproduto"> 1 produtos </p>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
                  Vizualizar produtos
                </button>
                <hr />
                <p> Total a pagar </p>
                <label class="col-md-3-offset-3" id="totalapagar">
                  R$95,00
                </label>
            </div>

              <div class="col-md-5">
                <h3>Endereço de entrega</h3>
                <section class="pd-endereco">

                    <div class="row">

                            <div class="endereco" style="">
                              <div class="col-md-6">
                         <p class="truncate ng-binding">Josefa Anunciação Pantaleao</p>
                         <p class="truncate ng-binding">AVENIDA Hermenegildo Pereira de Franca, 301  - B</p>
                         <p class="truncate ng-binding">11713-290 - Esmeralda</p>
                         <p class="truncate ng-binding">Praia Grande/SP</p>
                            </div>
                          </div>

              </div>
            </div>
        </div>
  </div>




<center>
  <div class="container">
  <h2>Formas de pagamento</h2>

<hr>
<div class="navtab2">

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#cartao">Cartão de crédito</a></li>
    <li><a data-toggle="tab" href="#boleto">Boleto</a></li>
    <li><a data-toggle="tab" href="#debito">Débito</a></li>
  </ul>
  </div>
<style>
.navtab2 .nav-tabs > li {
    float:none;
    display:inline-block;
    *display:inline; /* ie7 fix */
     zoom:1; /* hasLayout ie7 trigger */
}

.navtab2 .nav-tabs {
    text-align:center;
}
@media( max-width : 1024px ) {

  .navtab2 .nav-tabs > li {
      float:none;
      display:inline-block;
      *display:inline; /* ie7 fix */
       zoom:1; /* hasLayout ie7 trigger */
  }
  .navtab2 .nav-tabs {
      text-align:center;
  }
  .nav-tabs{
    position: inherit;
  }
}

</style>
  <div class="tab-content" style="margin: auto 35px;">
    <div id="cartao" class="tab-pane fade in active">
    <div class="container">
    <div class='row'>
        <div class='col-xs-4'></div>
        <div class='col-xs-4'>
          <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
          <form accept-charset="UTF-8" action="/" class="require-validation" id="payment-form" method="post">
            <div style="margin:0;padding:0;display:inline">
              <input name="utf8" type="hidden" value="✓" />
              <input name="_method" type="hidden" value="PUT" />
              <input name="authenticity" type="hidden" value="" />
            </div>
            <div class='form-row'>
              <div class='col-xs-12 form-group required'>
               <div class="row display-tr" >
                        <label class='control-label'><h4>Cartão:</h4></label>
                        <div class="display-td" >
                            <img class="img-responsive pull-center" src="http://i76.imgup.net/accepted_c22e0.png">
                        </div>
                    </div>

              </div>
            </div>
            <style>

            @media( max-width : 1024px ) {

            }

            </style>
            <div class='form-row'>
              <div class='col-xs-12 form-group card required'>
                <label class='control-label'>
                  <h4>Número do cartão</h4></label>
                <input autocomplete='off' class='form-control card-number' size='20' type='text'>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-xs-4 form-group cvc required'>
                <label class='col-mdcontrol-label'>
                  <h4>CVC</h4>
                </label>
                <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'><h4>Expiração</h4></label>
                <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <br><label class='control-label'></label>
                <input class='form-control card-expiry-year' placeholder='AAAA' size='4' type='text'>
              </div>
            </div>
            <br>
          <br>
          <br>
            <br>
            <div class='form-row'>
              <div class='col-md-12 form-group'>
                <button class='form-control btn btn-default submit-button' type='submit'>Comprar »</button>
              </div>
            </div>

          </form>
        </div>
    </div>
</div>
    </div>
    <div id="boleto" class="tab-pane fade">
     <br>
        <br>
        <div class='form-row'>
              <div class='col-md-6 form-group'>
          <img id="img"  src="img/impressor.png"><align text="left">
          <h4>Imprima o boleto e pague no banco</h4></align>
         <br>
          <p><img id="img" src="img/tel.png">
          <br><h4> ou pague pela internet utilizando o código de barras do boleto</h4></p>
         <br>
          <p><img id="img" src="img/calende.png">
          <h4>O prazo de válidade do boleto é de 3 dias úteis.</h4></p>

          </div></div>
     <br>
     <br>
      <center><h3>Total: R$ 94,00<h3>
    <button class='form-control btn btn-default submit-button' type='button'style="width: 200px; height: 35px">Pagar com boleto</button>
     </center>
    </div>
    <div id="debito" class="tab-pane fade">
      <div class="container">
 <br>
  <p>Escolha seu banco abaixo, e ao confirmar sua compra você será encaminhado para uma pagina do banco, onde deverá fazer o pagamento online</p>
          <div class='form-row'align="left">
              <div class='col-md-12 form-group'>
  <br><input id="fangspotted" name="fangspotted" type="radio"  data-toggle="collapse"data-target="#demo">
  <img src="img/itaú.png" width= 20px; height= 20px;></input>
  <align text="right">Itaú</align>
  </div></div>
  <div id="demo" class="collapse">
    <br>Clientes ITAU: A forma de pagamento escolhida é válida apenas para clientes do Itaú.
    Se você não possui senha para acesso ao Itaú Shopline,
     ou ainda não dispõe de limite para o Parcelamento, fale com seu gerente.

  </div><hr>

<div class='form-row'align="left">
              <div class='col-md-12 form-group'>
  <br><input id="fangspotted" name="fangspotted" type="radio"  data-toggle="collapse"data-target="#bradesco">
  <img src="img/bradesco.png" width= 20px; height= 20px;></input>
  <align text="right">Bradesco</align>
  </div></div>
  <div id="bradesco" class="collapse">
Clientes BRADESCO: A forma de pagamento escolhida é válida apenas para clientes do Bradesco.

  </div>
<hr>
<div class='form-row'align="left">
              <div class='col-md-12 form-group'>
  <br><input id="fangspotted" name="fangspotted" type="radio"  data-toggle="collapse"data-target="#brasil">
  <img src="img/brasil.jpg" width= 25px; height= 20px;></input>
  <align text="right">Banco do Brasil</align>
 </div></div>
  <div id="brasil" class="collapse">
Clientes BANCO DO BRASIL: A forma de pagamento escolhida é válida apenas para clientes do Banco do Brasil.
  </div>
  <hr>

  <div class='form-row'align="left">
              <div class='col-md-12 form-group'>
  <br><input id="fangspotted" name="fangspotted" type="radio"  data-toggle="collapse"data-target="#visa">
  <img src="img/visa.png" width= 20px; height= 20px;></input>
  <align text="right">Visa electron</align>
 </div></div>
  <div id="visa" class="collapse">
  Clientes VISA ELECTRON: A forma de pagamento escolhida é válida apenas para cartões emitidos pelos bancos:

Agillitas Soluções de Pagamentos Ltda. | Banco da Amazonia | Banco do Brasil | Banco Mercantil do Brasil S.A. | Banco do Nordeste do Brasil S.A. Banco Safra | Bic Bradesco | BRB - Banco de Brasília S.A. | HSBC | Santander | Sicredi

Ao Confirmar sua compra, você será encaminhado para o ambiente Verified by Visa, onde deverá fazer o pagamento online. Após a aprovação do pagamento junto ao banco, você será direcionado de volta à Americanas.com para liberar seu pedido, que seguirá para entrega conforme prazo informado.

*Atenção: Para compras acima de R$ 1999,00, favor entrar em contato com o banco emissor de seu cartão e solicitar liberação de limite.

  </div>
  <hr>

  <div class='form-row'align="left">
              <div class='col-md-12 form-group'>
  <br><input id="fangspotted" name="fangspotted" type="radio"  data-toggle="collapse"data-target="#santander">
  <img src="img/santander.png" width= 20px; height= 20px;></input>
  <align text="right">Santander</align>
 </div></div>
  <div id="santander" class="collapse">
Clientes SANTANDER: A forma de pagamento escolhida é exclusiva para clientes do Santander.


  </div>
 <br>
 <button class='form-control btn btn-default submit-button' type='button'style="width: 220px; height: 40px; padding-bottom: 45px;">Pagar com débito online</button>
 </div></div>



 </div>
    </div>
                      <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Anterior</button></li>
                            <li><button type="button" class="btn btn-default next-step">Pular</button></li>
                            <li><button type="button" class="btn btn-primary btn-info-full next-step">Salvar e continuar</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="complete">
                        <section style="margin: auto 90px; text-align: center;">
                        <h4 style="color: #cc0000; text-transform: uppercase;">Pronto!</h4>
                        <p>Seu pedido está confirmado, confira seu email para mais detalhes.</p>
                      </section>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </section>
   </div>
</div>



<!-- FOOOTER -->
<?php include("partials/footer.php");?>
<!-- </footer> -->


<!-- /.container -->

</body>

</html>
