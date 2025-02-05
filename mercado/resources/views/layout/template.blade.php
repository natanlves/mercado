<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="{{ asset('js/template.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('css/template.css') }}">
        <title>Mercado</title>
    </head>
    <body>
        <header> 
            <nav class="navbar">
                <div class="logo">Mercado</div>
                <ul id="nav-links">
                    <li><a href="">Home</a></li>
                    <li><a href="">Mercado</a></li>
                    <li><a href="">Celulares</a></li>
                    <li><a href="">Eletrodomesticos</a></li>
                </ul>
                <div class="menu-toggle" onclick="toggleMenu()">☰</div>
            </nav>
        </header>
       
        
        <!--conteudo-->
        <main>
    <div class="products-container">
        <div class="product-card">
            <img src="{{ asset('images/produto1.webp') }}" alt="Produto 1">
            <h3>Geladeira Consul CRB39AB Frost Free 342L 220V1</h3>
            <p>Descrição do Produto 1</p>
            <button class="add-to-cart">Adicionar ao Carrinho</button>
        </div>
        <div class="product-card">
            <img src="{{ asset('images/produto2.webp') }}" alt="Produto 2">
            <h3>Geladeira/Refrigerador Electrolux Tf56s Top Freezer Frost Free 474L Platinum</h3>
            <p>Descrição do Produto 2</p>
            <button class="add-to-cart">Adicionar ao Carrinho</button>
        </div>
        <div class="product-card">
            <img src="{{ asset('images/produto3.jpg') }}" alt="Produto 3">
            <h3>Geladeira Brastemp Frost Free French Door</h3>
            <p>Descrição do Produto 3</p>
            <button class="add-to-cart">Adicionar ao Carrinho</button>
        </div>
    </div>
</main>


    </body>
</html>