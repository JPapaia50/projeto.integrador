<?php
$pdo = new PDO('mysql:host=localhost;dbname=bd', 'root', '');

if (isset($_POST['acao'])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if (isset($_POST['cbkadministrador'])) {
        $administrador = true;
    } else {
        $administrador = false;
    }
    if (isset($_POST['cbkativo'])) {
        $ativo = true;
    } else {
        $ativo = false;
    }
    $sql = $pdo->prepare("INSERT INTO login (codigo, nome, email, senha)
                            values (null,?,?,?);
                        ");
    if ($sql->execute(array($nome, $email, $senha))) {
        echo 'Cadastrado seu fudido do caralho gordo';
    } else {
        echo 'erro ao cadastrar';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap');

body {
    margin: 0;
    font-family: 'Noto Sans', sans-serif;
}

body * {
    box-sizing: border-box;
}

.main-login {
    width: 100vw;
    height: 100vh;
    background-color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
}

.left-login {
    width: 50vw;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.left-login > h1 {
    font-size: 2,5vw;
    color: #4907A6;
}

.left-login-image {
    width: 30vw;
}

.right-login {
    width: 50vw;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;  
}

.card-login {
    width: 60%;
    display: flex;
    justify-content: center;
    align-items: center; 
    flex-direction: column;
    padding: 30px 35px;
    background: black;
    border-radius: 20px;
    box-shadow: 0px 10px 40px #00000056; 
}

.card-login > h1 {
    color: white;
    font-weight: 800;
    margin: 0%;
}

.textfield {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    margin: 10px 0px;
}

.textfield > input {
    width: 100%;
    border: none;
    border-radius: 10px;
    padding: 15px;
    background: #514869;
    color: #f0ffffde;
    font-size: 12pt;
    box-shadow: 0px 10px 40px #00000056;
    outline: none;
    box-sizing: border-box;
}

.textfield > label {
    color: #f0ffffde;
    margin-bottom: 10px;
}

.textfield > input::placeholder {
    color: #f0ffff94;
}

.btn-login {
    width: 100%;
    padding: 16px 0px;
    margin: 25px;
    border: none;
    border-radius: 8px;
    outline: none;
    text-transform: uppercase;
    font-weight: 800;
    letter-spacing: 3px;
    color: #ffffff;
    background: #4907A6;
    cursor: pointer;
}

@media only screen and (max-width: 950px) {
    .card-login {
        width: 85%;
    }
}

@media only screen and (max-width: 600px) {
    main.login {
        flex-direction: column;
    }
    .left-login > h1 {
        display: none;
    }
    
.left-login {
    width: 100%;
    height: auto;
}

.right-login {
    width: 100%;
    height: auto;
}

.left-login-image{
    width: 50vh;
}

.card-login {
    width: 90%;
}
}
    </style>
</head>
<body>
    <form action="" method="POST">
    <div class="form-group">
    <div class="main-login">
        <div class="left-login">
            <h1>Faça Seu Cadastro<br>E fique por dentro das novidades</h1>
            <img src="imagens/tech2.png" class="left-login-image" alt="Logo TechBox">
        </div>
            <div class="right-login">                
           <div class="card-login">
            <h1>Enviar</h1>
            <div class="textfield">
                <label for="usuario">Nome</label>
                <input type="nome" name="nome" class="form-control" id="exampleInputName" aria-describedby="emailHelp" required placeholder="Nome">
            </div>
            <div class="textfield">
                <label for="usuario">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputName" aria-describedby="emailHelp" required placeholder="Email">
            </div>
            <div class="textfield">
                <label for="senha">Senha</label>
                <input type="password" name="senha" class="form-control" id="exampleInputPassword" aria-describedby="senhaHelp" name="senha" required placeholder="Senha">
            </div>
            <a href="login.php"><button class="btn-login" name="acao">Login</button></a>
            </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>