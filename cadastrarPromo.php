<?php
$pdo = new PDO('mysql:host=localhost;dbname=bd', 'root', '');

if (isset($_POST['acao'])) {

    $imagem = $_POST['imagem'];
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];

    $sql = $pdo->prepare("INSERT INTO cadastrarpromocao (imagem, titulo, descricao)
                            values (?,?,?);
                        ");
    if ($sql->execute(array($imagem, $titulo, $descricao))) {
        echo 'Cadastrado';
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
            <div class="right-login">                
           <div class="card-login">
            <h1>Cadastrar Promoção</h1>
            <div class="textfield">
                <label for="usuario">Imagem</label>
                <input type="text" name="imagem" class="form-control" id="exampleInputName" aria-describedby="emailHelp" required placeholder="URL da Imagem">
            </div>
            <div class="textfield">
                <label for="usuario">Título</label>
                <input type="text" name="titulo" class="form-control" id="exampleInputName" aria-describedby="emailHelp" required placeholder="Digite um Título">
            </div>
            <div class="textfield">
                <label for="senha">Descrição</label>
                <input type="text" name="descricao" class="form-control" id="exampleInputPassword" aria-describedby="senhaHelp" name="descricao" required placeholder="Senha">
            </div>
            <a href="login.php"><button class="btn-login" name="acao">Cadastrar</button></a>
            </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>