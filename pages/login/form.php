<?php
    setcookie('usuario', 'nyc', time() + 3600);
    var_dump($_COOKIE);
    //Conexão
    require_once 'db_connect.php';
    //Conexão

    $erros = array();

    //Cadastrar
    if(isset($_POST['cadastrar'])):
        $nome = mysqli_escape_string($connect, $_POST['nome']);
        $email = mysqli_escape_string($connect, $_POST['email']);
        $senha = mysqli_escape_string($connect, $_POST['senha']);

        $sql = "SELECT email FROM usuarios WHERE email = '$email'";
        $resultado = mysqli_query($connect, $sql);

        if (mysqli_num_rows($resultado) > 0):
            $erros[] = "<p>Usuário já exisente</p>";
        else:
            $sql = "INSERT INTO usuarios(nome,email,senha) VALUES('$nome', '$email', '$senha')";
            $res = mysqli_query($connect, $sql);
        endif;
    endif;

    //Enviar
    if(isset($_POST['entrar'])):
        $email = mysqli_escape_string($connect, $_POST['email']);
        $senha = mysqli_escape_string($connect, $_POST['senha']);

        if(empty($email) or empty($senha)):
            $erros[] = '<p class="erro">O campo login/senha precisa ser preenchido</p>';
        else:
            $sql = "SELECT email FROM usuarios WHERE email = '$email'";
            $resultado = mysqli_query($connect, $sql);

            if(mysqli_num_rows($resultado) > 0):
                 $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
                 $resultado = mysqli_query($connect, $sql);

                 if(mysqli_num_rows($resultado) == 1):
                    $dados = mysqli_fetch_array($resultado);
                    $_SESSION['logado'] = true;
                    $_SESSION['id_usuario'] = $dados['id'];
                    header('Location: ../index.php?$e=');
                 else:
                    $erros[] = '<p class="erro">Usuário ou senha não confere</p>';
                 endif;
            else:
                $erros[] = '<p class="erro">Usuário inesxstente</p>';
            endif;
        endif;

    endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../style/login.css">

    <title>Login</title>
</head>
<body>
    <form method="post">
    <?php
    if(!empty($erros)):
        foreach($erros as $erro):
            echo $erro;
        endforeach;
    endif;
    ?>

        <fieldset class="cadastro">
            <p>Nome</p>
            <input name="nome" type="text" placeholder="Nome">
            <p>Email</p>
            <input name="email" type="Email" placeholder="Email">
            <p>Senha</p>
            <input name="senha" type="password" placeholder="Senha">

            <div class="b">
                <button name="entrar">Entrar</button>
                <button name="cadastrar">Cadastrar</button>
            </div>

        </fieldset>
    </form>
</body>
</html>