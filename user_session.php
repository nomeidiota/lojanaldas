<?php
    // session_start inicia a sessão
    session_start();
    include "partials/conn.php";
    // as variáveis login e senha recebem os dados digitados na página anterior
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // A variavel $select pega as varias $login e $senha, faz uma pesquisa na tabela de usuario
    $selectLogin = $pdo->prepare ("SELECT *
      FROM tb_usuario WHERE email= '$email' and senha = '$senha'");
    $selectLogin->execute();
    $query_num_rows = $selectLogin->rowCount();
    $resultLogin = $selectLogin->fetch(PDO::FETCH_ASSOC);

    // var_dump($resultLogin);
    // exit;

   // Definindo Session Login
    if( $query_num_rows != 0 ){

          $_SESSION['idUser'] = $resultLogin["cd_usuario"];
          $_SESSION['nome'] = $resultLogin["nome"];
          $_SESSION['sobrenome'] = $resultLogin["sobrenome"];
          $_SESSION['cd_end'] = $resultLogin["cd_end"];
          $_SESSION['sexo'] = $resultLogin["sexo"];
          $_SESSION['email'] = $resultLogin["email"];
          $_SESSION['telefone'] = $resultLogin["telefone"];
          $_SESSION['celular'] = $resultLogin["celular"];
          $_SESSION['senha'] = $senha;
          $_SESSION['carrinho'] = array();
          $_SESSION['cpf'] = $resultLogin["cpf"];

      //$_SESSION['administrador'] = $resultLogin["ic_administrador"];
        header('location:minhaconta.php');
    }
    else{
        session_destroy();
         echo "<script>
        alert('Email ou senha incorretos, tente novamente');
        window.history.go(-1);
        </script>";

    }
