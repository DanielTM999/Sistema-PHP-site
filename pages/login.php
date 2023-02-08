<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="err">
        <?php 
            if(isset($_SESSION['erro_log'])){
                if($_SESSION['erro_log']){
                    echo "preencha os campos";
                }
            }
            if(isset($_SESSION['erro_auth'])){
                if($_SESSION['erro_auth']){
                    echo "Usuario/Senha Incoretos";
                }
            }
            unset($_SESSION['erro_auth']);
            unset($_SESSION['erro_log']);
        ?> 
    </div>
    <div class="form-cadastro">
        <form action="../prod/auth.php" method="post">
            <input type="text" name="Nome" id="Nome" placeholder="NOME">
            <input type="password" name="Senha" id="Senha" placeholder="SENHA">
            <button id="bnt" type="submit">LOGIN</button>
        </form>
    </div>
</body>

</html>