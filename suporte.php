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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

        .left-login>h1 {
            font-size: 2, 5vw;
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

        .card-login>h1 {
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

        .textfield>input {
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

        .textfield>label {
            color: #f0ffffde;
            margin-bottom: 10px;
        }

        .textfield>input::placeholder {
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

            .left-login>h1 {
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

            .left-login-image {
                width: 40vh;
                
            }

            .card-login {
                width: 90%;
            }
            .botão_enviar{
                color: #4907A6;
            }
        }
    </style>
</head>

<body>
    <form action="" method="POST">
        <div class="form-group">
            <div class="main-login">
                <div class="left-login">
                    <h1>Entre em contato<br>com o nosso suporte especializado</h1>
                    <div class="left-login-image" alt="forms techbox">
                        <br>
                        <br>
                        <br>
                        <center>
                        <form>
                            <fieldset disabled>
                                <legend><b>Envie seu problema</b></legend>
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">o que está de errado?</label>
                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="disabledSelect" class="form-label">Problemas que são comuns</label>
                                    <select id="disabledSelect" class="form-select">
                                        <option>wifi está debilitado</option>
                                        <option>problema de rede no servidor</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck">
                                        <label class="form-check-label" for="disabledFieldsetCheck">
                                            Este formulário te ajudou?
                                        </label>
                                    </div>
                                </div>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button id="botão_suporte_enviar" class="botão_enviar" type="button">Enviar</button>
                                    <button id="botão_suporte_cancelar" class="botão_cancelar" type="button">Cancelar</button>
                                </div>
                            </fieldset>
                        </form>
                        </center>
                    </div>
                </div>
                <div class="right-login">
                    <div style="width: 450px;" class="card-login">

                        <img style="height: 500px;" width="400px" src="imagens/qrcode.suporte.png"></img>
    </form>
    </div>
    </div>
    </div>
    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>