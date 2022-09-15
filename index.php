<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-XfhC/Sid4FIGSXYebcOtcSCRFkd/zZzAMVipf0bNWucloRvcKK2/dpVWodQbQ1Ek" crossorigin="anonymous">
  <style>
    a:link,
    a:visited {
      text-decoration: none;
      color: #fff
    }

    a:hover {
      text-decoration: underline;
      color: #dba5ff
    }

    a:active {
      text-decoration: none
    }

    body {
      background-color: #eee;
      background-size: 100% 150%;
      background-repeat: no-repeat;
    }

    #principal {
      padding-top: 50px;
    }

    #esquerda {
      border-style: inset;
      border-color: black (194, 142, 0);
      text-align: left;
      border-radius: 35px;
      margin-right: 90px;
      background-color: #5f00a0;
      color: black;
      width: 280px;
    }

    #meio {
      background-color: #222021;
      border-radius: 20px;
      border-style: inset;
      border-width: 3px;
      border-color: black;
    }

    #direita {
      background-color: blue;

    }

    #center {
      text-align: center;
      display: inline;
    }

    #pesquisar {
      width: 250px;
      margin-left: auto;
      margin-right: auto;
    }

    #padding {
      padding: 50px;
    }

    #ladinho {
      padding-left: 15px;
    }

    #carousel {
      border-radius: 2px;
      height: 350px;
      width: 400px;
    }

    #produto {
      padding-right: 200px;
      padding: 80px;
      width: 400px;
    }

    #link {
      color: white;
      text-align: right;
    }
  </style>

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <h2> GOinfo</h2>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>



    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php" tabindex="-1" aria-disabled="true">Página Inicial</a>
        </li>
        <a class="nav-link" href="login.php">Login</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="cadastroUsuario.php" tabindex="-1" aria-disabled="true">Cadastre-se</a>
      </ul>
    </div>
  </nav>
  <div id="principal" class="container-fluid">
    <div id="padding" class="row">
      <div id="esquerda" class="col-2">
        <br>
        <form id="pesquisar" class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
          <button class="btn btn-outline-dark" type="submit">Buscar</button>
        </form>
        <br>
        <a id="ladinho" href="prodEletro.php"> Eletrodomesticos</a><br>
        <a id="ladinho" href="prodLeds.php">Leds</a><br>
        <a id="ladinho" href="prodGPU.php">Placa de vídeo</a><br>
        <a id="ladinho" href="prodCPU.php">Processador</a><br>
        <a id="ladinho" href="prodCell.php">Smartphones</a><br>
        <a id="ladinho" href="prodNotebooks.php">Notebooks</a><br>
        <a id="ladinho" href="prodMonitores.php">Monitor</a><br>
        <a id="ladinho" href="prodMouse.php">Mouse</a><br>
        <a id="ladinho" href="prodMousepad.php">Mousepad</a><br>
      </div>
      <div id="meio" class="col-8">
        <div id="center">
   
          <br>
          <br>
          <div id="produtos" class="container">
            <div class="row">
              <div class="col-1">
              </div>
              <div class="col-1">
                <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-item">
                      <img id="carousel" src="imagens/compras3.jpg" class="d-block w-100" height="100px">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-2">
                <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-item active">
                      <img id="carousel" src="imagens/promoção2.gif" class="d-block w-100" height="100px">
                    </div>
                    <div class="carousel-item">
                      <img id="carousel" src="imagens/compras2.jpg" class="d-block w-100" height="100px">
                    </div>
                    <div class="carousel-item">
                      <img id="carousel" src="imagens/compras3.jpg" class="d-block w-100" height="100px">
                    </div>
                  </div>
                </div>
              </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
</body>

</html>