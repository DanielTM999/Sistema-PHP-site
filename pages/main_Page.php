<?php
    session_start();
    
    if(!isset($_SESSION['logado']) || !$_SESSION['logado']){
        header('location: ./login.php');
        exit;  
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>pagina principal</h1>
    <form action="" method="post">
        <button>sair</button>
    </form>
</body>
</html>

<?php
    unset($_SESSION['logado']);
?>