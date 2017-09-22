<?php
    // session_start inicia a sessão
    session_start();
    include "partials/conn.php";
    // as variáveis login e senha recebem os dados digitados na página anterior
    $email = $_POST['email'];
    $senha = $_POST['senha'];



    // A variavel $select pega as varias $login e $senha, faz uma pesquisa na tabela de usuario
    $selectLogin = $pdo->prepare ("SELECT  *
                                   FROM adm_log
                                   WHERE email = '".$email."'
                                   AND senha = '".$senha."'");
    $selectLogin->execute();
    $query_num_rows = $selectLogin->rowCount();
    $resultLogin = $selectLogin->fetch(PDO::FETCH_ASSOC);

    // var_dump($resultLogin);
    // exit;

   // Definindo Session Login
    if( $query_num_rows != 0 ){
        $_SESSION['user_id'] = $resultLogin["user_id"];
        $_SESSION['adm'] = $resultLogin["adm"];
        $_SESSION['email'] = $resultLogin["email"];
        $_SESSION['senha'] = $senha;

      //$_SESSION['administrador'] = $resultLogin["ic_administrador"];
        header('location:pagina-inicial.php');
    }
    else{
        session_destroy();
         echo "<script>
        alert('Email ou senha incorretos, tente novamente');
        window.history.go(-1);
        </script>";

    }
