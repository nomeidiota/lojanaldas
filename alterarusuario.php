<?PHP
include_once("partials/conexao.php");

$email = $_POST['email'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];


// $im_produto = $_POST['im_produto'];
//
// $id = "SELECT id_imagem from tb_produto where ";
// $sql_busca_img = mysql_query (
// 	"SELECT imagem from tb_imagem where id_imagem ='".$id."'");
//
// $reg = mysql_fetch_assoc($sql_busca_img) or die(mysql_error());
// $id = $reg['id_imagem'];
// echo "<script type=\"text/javascript\">
// alert(\"$reg["'id'"]\");
// </script>
// ";

$update = mysql_query("UPDATE tb_usuario SET email = '$email',
                                          senha = '$senha',
										  nome = '$nome',
										  sobrenome = '$sobrenome',
										  telefone = '$telefone',
										  celular = '$celular'
					   WHERE email ='$email'")
 		  or die ("Erro ao inserir dados: " . mysql_error());

// print "Dados atualizado com sucesso. <a href='listar-produtos.php'>Voltar</a>";

echo "<script>
 alert('Alterado com sucesso!');
window.history.go(-1);
</script>";

?>
