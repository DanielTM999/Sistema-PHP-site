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
            if(isset($_SESSION['erro_cad'])){
                if($_SESSION['erro_cad']){
                    echo "usuario ja cadastrado";
                }
            }

            unset($_SESSION['erro_cad']);
        ?> 
    </div>
    <div class="form-cadastro">
        <form action="../prod/add.php" method="post">
            <input type="text" name="Nomecad" id="Nomecad" placeholder="NOME">
            <input type="password" name="Senhacad" id="Senhacad" placeholder="SENHA">
            <input type="password" name="repSenhacad" id="repSenhacad" placeholder="REPITA A SENHA">
            <button id="bnt" type="submit">Cadastrar</button>
        </form>
    </div>
</body>
<script src="./script.js"></script>
</html>