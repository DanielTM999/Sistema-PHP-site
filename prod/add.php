<?php
    session_start();
    include './Actsql.php';

    $sql = new Actsql;

    $nome = $_POST['Nomecad'];
    $senha_inseg = $_POST['Senhacad'];

    if((!empty($nome) && !empty($senha_inseg)) && (isset($nome) && isset($senha_inseg))){
        $senha = password_hash($senha_inseg, PASSWORD_DEFAULT);
        $ress = $sql::incluir("usuarios", $nome, $senha, uniqid());
        if($ress == 0){
            $_SESSION['erro_cad'] = true;
            header('location: ../pages/cadastro.php');
            exit;
        }else{
            header('location: ../pages/login.php');
            exit;
        }
    }else{
        header('location: ../pages/cadastro.php');
        exit;
    }
?>