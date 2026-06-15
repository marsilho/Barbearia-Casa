<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="./index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img src="{{ asset('felsk/img/logo.png') }}" alt="FelskBarber Logo" class="brand-image opacity-75 shadow" />
            <!--end::Brand Image-->
        </a>
        <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->
    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation"
                aria-label="Main navigation" data-accordion="false" id="navigation">

                    {{-- GESTÃO DE AGENDAMENTOS --}}
                <li class="nav-header">GESTÃO DE AGENDAMENTOS</li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-shop"></i>
                        <p>
                            Agendamentos
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Marcados</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Realizados</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- GESTÃO DE CLIENTES --}}
                <li class="nav-header">GESTÃO DE CLIENTES</li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-shop"></i>
                        <p>
                            Clientes
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Clientes</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- GESTÃO DE USUARIOS --}}
                <li class="nav-header">GESTÃO DE USUARIOS</li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-shop"></i>
                        <p>
                            Usuarios
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Funcionarios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Gerentes</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- GESTÃO DE SERVIÇOS --}}
                <li class="nav-header">GESTÃO DE SERVIÇOS</li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-shop"></i>
                        <p>
                            Serviços
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Categoria</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route ('admin.servicos.index')}}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Serviços</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- GESTÃO DE USUARIOS --}}
                <li class="nav-header">GESTÃO DE ESTOQUE</li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-shop"></i>
                        <p>
                            Estoque
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Produtos</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
            <!--end::Sidebar Menu-->
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>
