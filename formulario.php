<?php

if (isset($_GET['cadastro'])) {
    echo "<pre>";
    var_dump($_GET);
    echo "</pre>";

    if ($_GET['nome'] == "") {
        echo "Preencha o campo nome!";
    }else if ($_GET['email'] == "") {
        echo "Preencha o campo email!";
    }else if ($_GET['nascimento'] == "") {
        echo "Preencha o campo data de nascimento!";
    }elseif ($_GET['senha'] == "") {
        echo "Preencha o campo senha!";
    }elseif ($_GET['senha'] != $_GET['confirmar-senha']) {
        echo "Senhas estão diferentes!";
    }else{
        echo "Cadastro realizado com sucesso.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>
<a href="login.php">Já tenho uma conta</a>
<h1>Cadastro de usuário</h1>
<form action="formulario.php" method="get">
<label for="nome">Nome</label>
<input type="text" name="nome" id="nome" value="<?php echo isset($_GET['nome']) ? $_GET['nome'] : ''; ?>">
<br><br>
<label for="email">Email</label>
<input type="email" name="email" id="email" value="<?php echo isset($_GET['email']) ? $_GET['email'] : ''; ?>">
<br><br>
<label for="nascimento">Data de nascimento</label>
<input type="date" name="nascimento" id="nascimento" value="<?php echo isset($_GET['nascimento']) ? $_GET['nascimento'] : ''; ?>">
<br><br>
<label for="senha">Senha</label>
<input type="password" name="senha" id="senha">
<br><br>
<label for="confirmar-senha">Confirmar senha</label>
<input type="password" name="confirmar-senha" id="confirmar-senha">
<br><br>
<input type="submit" name="cadastro" value="Enviar">
</form>
    
</body>
</html>