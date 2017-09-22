<?php
session_start();
require 'partials/conexao.php';
require_once "pagseguro-php-sdk-master/vendor/autoload.php";
\PagSeguro\Library::initialize();
\PagSeguro\Library::cmsVersion()->setName("Nome")->setRelease("1.0.0");
\PagSeguro\Library::moduleVersion()->setName("Nome")->setRelease("1.0.0");

try {
	//cria a sessão do pagamento
    $sessionCode = \PagSeguro\Services\Session::create(
        \PagSeguro\Configuration\Configure::getAccountCredentials()
    );
//inicia a requisição de pagamento
$payment = new \PagSeguro\Domains\Requests\Payment();

// add pedido
$id_pedido = $_GET ['id'];

$sql_busca_pedido = mysql_query("SELECT id_pedido from tb_pedido where id_pedido = '$id_pedido'")
or die (mysql_error());

if (mysql_num_rows ($sql_busca_pedido) > '0') {
	foreach ($sql_busca_pedido as $read_pedido_view);
	$read_itens_pedido = mysql_query("SELECT tb_itens_pedido.itens_pedido_id_pedido,
		tb_itens_pedido.itens_pedido_cd_produto,
		tb_itens_pedido.itens_pedido_qtd,
        tb_itens_pedido.itens_pedido_vl_produto,
		tb_itens_pedido.itens_pedido_vl_total,
        tb_pedido.id_pedido,
        tb_produto.ds_produto
       FROM tb_itens_pedido
	    INNER JOIN tb_pedido
        INNER JOIN tb_produto ON tb_produto.cd_produto = tb_itens_pedido.itens_pedido_cd_produto
      WHERE itens_pedido_id_pedido = '$id_pedido'");
      $re = mysql_fetch_assoc($read_itens_pedido);

if (mysql_num_rows ($read_itens_pedido) > '0'){
	foreach ($re as $read_itens_pedido_view) {
    $count_prod ++;
		$payment->addItems()->withParameters(
    	$count_prod,
	    $read_itens_pedido_view['ds_produto'],
	    $read_itens_pedido_view['itens_pedido_qtd'],
	    $read_itens_pedido_view['itens_pedido_vl_total']
			);
		}
	}
}
//moeda
$payment->setCurrency("BRL");
//referencia para fazer o baixa automatica
$payment->setReference($id_pedido);
//retorno para após a finalização da venda
$payment->setRedirectUrl("http://www.naldasmodapet.com.br");
//informações do comprador
$payment->setSender()->setName('Inalda Rios');
$payment->setSender()->setEmail('sarahrhany122@gmail.com');
//informações do frete
$payment->setShipping()->setCost()->withParameters(00.00);
$payment->setShipping()->setType()->withParameters(\PagSeguro\Enum\Shipping\Type::SEDEX);
//url para notificação
$payment->addParameter()->withArray(['notificationURL', 'http://www.naldasmodapet.com.br/notification']);

  try {

      $result = $payment->register(
          \PagSeguro\Configuration\Configure::getAccountCredentials()
      );

      echo "<h2>Criando requisi&ccedil;&atilde;o de pagamento</h2>"
          . "<p>URL do pagamento: <strong>$result</strong></p>"
          . "<p><a title=\"URL do pagamento\" href=\"$result\" target=\_blank\">Ir para URL do pagamento.</a></p>";
  } catch (Exception $e) {
      die($e->getMessage());
  }

// echo "<strong>ID de sess&atilde;o criado: </strong>{$sessionCode->getResult()}";
} catch (Exception $e) {
    die($e->getMessage());
}

?>
