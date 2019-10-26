<?php

include ("functions.php");
if(isset($_SESSION['logado']) && !isset($_GET['logout'])){
    header('Location: admin.php');
}else if(isset($_GET['logout'])){
    header('Location: index.php');
}

// if (isset($_POST['login'])) {
//     if ($_POST['email'] == "francesco.pugliesi@gmail.com" && $_POST['senha'] == 123456) {
//         // echo "Bem-vindo!";
//         header('Location: home.php'); //redirecionamento
//     }else {
//         echo "Cai fora!";
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<a href="formulario.php">Ainda não tem conta? Cadastra-se!</a>
<h1>Login</h1>
<form action="login.php" method="post">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="<?php echo isset($_COOKIE['email']) ? $_COOKIE['email'] : ''; ?>">
    <br><br>
    <label for="senha">Senha</label>
    <input type="password" name="senha" id="senha" value="<?php echo isset($_COOKIE['senha']) ? $_COOKIE['senha'] : ''; ?>">
    <br><br>
    <div class="form-group">
        <label for="">
            <input type="checkbox" name="manter_conectado" >Manter conectado
        </label>
    </div>
    <input type="submit" value="Entrar" name="login">
    </form>
    <?php
    if(isset($erro)){
        echo "<div class='alert alert-warning'> $erro </div>";
    }
    ?>
</body>
</html>