<!-- CABECALHO -->
<header class="topo">
    <div class="container">
        <h1 class="logo-text">Felsk Barber</h1>

        <nav>
            <ul class="Navegacao">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'ativo' : '' }}">Home</a></li>
                <li><a href="{{ route('sobre') }}" class="{{ request()->routeIs('sobre') ? 'ativo' : '' }}">Sobre</a></li>
                <li><a href="{{ route('servicos') }}" class="{{ request()->routeIs('servicos') ? 'ativo' : '' }}">Serviços</a></li>
                <li><a href="#" class="{{ request()->routeIs('produtos') ? 'ativo' : '' }}">Produtos</a></li>
                <li><a href="{{ route('contato') }}" class="{{ request()->routeIs('contato') ? 'ativo' : '' }}">Contato</a></li>
            </ul>
        </nav>

        <ul class="redes">
            <li>
                <a href="https://www.instagram.com/felskbarber/" target="_blank">
                    <img src="{{ asset('felsk/img/instaBlack.svg') }}" alt="Logo Instagram" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ asset('felsk/img/user.png') }}" alt="Perfil" class="icon-user" />
                </a>
            </li>
        </ul>
    </div>
</header>