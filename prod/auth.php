<?php
    session_start();
    include './Actsql.php';

    $sql = new Actsql;
    $nome = $_POST['Nome'];
    $senha = $_POST['Senha'];
    
   if((!empty($nome) && !empty($senha)) && (isset($nome) && isset( $senha))){
        if($sql::auth("usuarios", $nome, $senha)){
            $_SESSION['logado'] = true;
            header('location: ../pages/main_page.php');
            exit; 
        }else{
            $_SESSION['erro_auth'] = true;
            header('location: ../pages/login.php');
            exit;  
        }
   }else{
        $_SESSION['erro_log'] = true;
        header('location: ../pages/login.php');
        exit;
   }
?>