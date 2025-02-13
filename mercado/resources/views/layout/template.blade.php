<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="{{ asset('js/template.js') }}"></script>
        <script src="{{ asset('js/banner.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('css/template.css') }}">
        <link rel="stylesheet" href="{{ asset('css/banner.css') }}">
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
                    <li><a href="/e">Eletrodomesticos</a></li>
                </ul>
                <div class="menu-toggle" onclick="toggleMenu()">☰</div>
<div id="menu">
    <ul>
        @if(Auth::check())
            <li>Olá, {{ Auth::user()->name }}</li>
            <li>
                <a href="{{ route('logout') }}" 
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                   Sair
                </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @else
            <li><a href="{{ route('login') }}">Entrar</a></li>
        @endif
    </ul>
</div>

            </nav>
        </header>
       
        
        <!--conteudo-->
        <main>
            @yield('content')
        </main>

        <footer class="footer">
            
        <div class="footer-container">
            <div class="footer-logo">
                Mercado X
            </div>
            <ul class="footer-links">
                <li><a href="#">Fale Conosco</a></li>
                <li><a href="#">Política de Privacidade</a></li>
                <li><a href="#">Termos de Uso</a></li>
            </ul>
            <div class="footer-social">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                </div>
        </div>
            <p class="footer-copy">&copy; {{ date('Y') }} Mercado X - Todos os direitos reservados.</p>
        </footer>

        <!-- Adicionar Font Awesome para ícones sociais -->
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    </body>
</html>