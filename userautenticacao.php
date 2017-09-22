<?php
include ("partials/conexao.php");
?>
 <html>
<head>
<title>Autenticando usuario</title>
<script type="text/javascript">
		function loginsuccessfully(){

			setTimeout("window.location='minhaconta.php'",1000);
		}

		function loginfailed(){

			setTimeout("window.location='login.php'",1000);
		}

</script>


</head>
<body>
<?php

$email =$_POST['email'];
$senha =$_POST['senha'];
$sql=mysql_query("SELECT * FROM tb_cadastro WHERE email= '$email' and senha = '$senha'") or die(mysql_error());
$row = mysql_num_rows($sql);

if ($row > 0) {

	session_start();
	$_SESSION['email']= $_POST['email'];
	$_SESSION['senha']= $_POST['senha'];

	echo "<script> alert('Voce foi autenticado com sucesso! Aguarde um instante');</script>";

	echo "<script>loginsuccessfully()</script>";


} else {

 	echo "<script> alert('Nome de usuário ou senha incorretos! Aguarde um instante para tentar novamente');</script>";

	echo "<script>loginfailed()</script>";

}



?>
</body>
</html>
