<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>produtos eletro domésticos</title>
</head>
<body>
    <style>
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: Helvetica;
}

/* Cabeçalho */
header {
    background-color: #3c0064;
    color: #fff;
    padding: 15px;
    border-bottom: 3px solid  grey;
}

/* Grid de Produtos*/
.container {
    background-color: #fff;
    min-height: 60vh;
    padding: 50px;
}

.products-container {
    max-width: 1200px;
    margin: 0 auto;
    
}

.card {
 width: 31%;
 display: inline-block;
 margin: 1% 1%;
 padding: 15px;
}

.product-image {
    height: 300px;
    width: 100%;
    margin-bottom: 10px;
    background-position: center;
    background-size: cover;
}

#img-1 {
    background-image: url('imagens/mouse.jpg');
}

#img-2 {
    background-image: url('imagens/mouse.jpg');
}

#img-3 {
    background-image: url('imagens/mouse.jpg');
}

#img-4 {
    background-image: url('imagens/mouse.jpg');
}

#img-5 {
    background-image: url('imagens/mouse.jpg');
}

#img-6 {
    background-image: url('imagens/mouse.jpg');
}

h3 {
    margin-bottom: 10px;
    color:#5f00a0;
    border-left: 5px solid #360064;
    padding-left: 7px;
    font-size: 24px;
}

.card p {
    margin-bottom: 10px;
}

.bold {
    font-weight: bold;
}

.btn {
    display: block;
    width: 100%;
    text-align: center;
    text-transform: uppercase;
    text-decoration: none;
    background-color: #360064;
    color: #fff;
    padding: 15px;
    border-radius: 5px;
    transition: 0.5s;
}

.btn:hover {
    background-color: #7700c8;
}

/* Footer */
footer {
    background-color: #ebecf0;
    color: white;
    border-top: 3px solid #474a51;
    text-align: center;
    padding: 80px;
}
</style>  
  <!-- Cabeçalho -->
  <header>
    <h1>TechBox</h1>
</header>
    <!-- Grid de Produtos -->
<main class="container">
    <section class="products-container">
<div class="card">
    <div class="product-image" id="img-1"></div>
    <h3>Sneaker 1</h3>
    <p>Este sneaker é muito bom pelo fato de...</p>
    <p>
        <span class="bold">R$129,99</span>
    </p>
    <a href="a" class="btn">Comprar</a>
</div>
<div class="card">
    <div class="product-image" id="img-2"></div>
    <h3>Sneaker 2</h3>
    <p>Este sneaker é muito bom pelo fato de...</p>
    <p>
        <span class="bold">R$129,99</span>
    </p>
    <a href="a" class="btn">Comprar</a>
</div>
<div class="card">
    <div class="product-image" id="img-3"></div>
    <h3>Sneaker 3</h3>
    <p>Este sneaker é muito bom pelo fato de...</p>
    <p>
        <span class="bold">R$129,99</span>
    </p>
    <a href="a" class="btn">Comprar</a>
</div>
<div class="card">
    <div class="product-image" id="img-4"></div>
    <h3>Sneaker 4</h3>
    <p>Este sneaker é muito bom pelo fato de...</p>
    <p>
        <span class="bold">R$129,99</span>
    </p>
    <a href="a" class="btn">Comprar</a>
</div>
<div class="card">
    <div class="product-image" id="img-5"></div>
    <h3>Sneaker 5</h3>
    <p>Este sneaker é muito bom pelo fato de...</p>
    <p>
        <span class="bold">R$129,99</span>
    </p>
    <a href="a" class="btn">Comprar</a>
</div>
<div class="card">
    <div class="product-image" id="img-6"></div>
    <h3>Sneaker 6</h3>
    <p>Este sneaker é muito bom pelo fato de...</p>
    <p>
        <span class="bold">R$129,99</span>
    </p>
    <a href="a" class="btn">Comprar</a>
</div>
    </section>
</main>
    <!-- Rodapé -->
    <footer>
        <p><span class="bold" style="color: black;">Galeria dos Sneakers 2022</span> 
        </p>
    </footer>  
</body>
</html>