@extends('layout.admin')

@section('content')
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <!--begin::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 1-->
                    <div class="small-box text-bg-primary">
                        <div class="inner">
                            <h3>11</h3>

                            <p>Total de serviços cadastrados</p>
                        </div>
                        <i class="small-box-icon bi bi-scissors"></i>
                        <a href="#"
                            class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            Mais informações <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                    <!--end::Small Box Widget 1-->
                </div>
                <!--end::Col-->

                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 3-->
                    <div class="small-box text-bg-warning">
                        <div class="inner">
                            <h3>44</h3>

                            <p>Serviço mais agendado</p>
                        </div>
                        <i class="small-box-icon bi bi-calendar-check"></i>
                        <a href="#"
                            class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                    <!--end::Small Box Widget 3-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-danger">
                        <div class="inner">
                            <h3>65</h3>

                            <p>Serviço que mais faturou</p>
                        </div>
                        <i class="small-box-icon bi bi-cash-coin"></i>
                        <a href="#"
                            class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>
                <!--end::Col-->

                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 4-->
                    <div class="small-box text-bg-danger">
                        <div class="inner">
                            <h3>4,5</h3>

                            <p>Avaliação média</p>
                        </div>
                        <i class="small-box-icon bi bi-star-fill"></i>
                        <a href="#"
                            class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                    <!--end::Small Box Widget 4-->
                </div>

                @if (session('success'))
                    <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index:9999;">
                        <div id="toastSuccess" class="toast toast-felsk border-0" role="alert">
                            <div class="toast-header toast-felsk-header">
                                <i class="bi bi-check-circle-fill me-2"></i>
                                <strong class="me-auto">Sucesso</strong>

                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast"></button>
                            </div>

                            <div class="toast-body toast-felsk-body">
                                {{ session('success') }}
                            </div>
                        </div>
                    </div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Gerenciamento de Categorias</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                                data-bs-target="#TesteModal">
                                <i class="bi bi-plus">Nova categoria</i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Descrição</th>
                                    <th>Status</th>
                                    <th style="width: 200px">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($categorias as $linha)
                                    <tr class="align-middle">
                                        <td>{{ $linha->nome_categoria }}</td>
                                        <td>{{ $linha->descricao_categoria }}</td>
                                        <td>
                                            @if ($linha->status_categoria === 'ATIVO')
                                                <span class="badge text-bg-success">ATIVO</span>
                                            @else
                                                <span class="badge text-bg-danger">INATIVO</span>
                                            @endif
                                        </td>
                                        <td>
                                            {{-- Puxando os icones da biblioteca bootstrap --}}
                                            {{-- EDITAR --}}
                                            <button type="submit" class="btn btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#modalEditarCategoria{{ $linha->id_categoria }}">
                                                <i class="bi bi-arrow-counterclockwise"></i>
                                            </button>

                                            {{-- DESATIVAR --}}
                                            @if ($linha->status_categoria === 'ATIVO')
                                                <form
                                                    action="{{ route('admin.categorias.desativar', $linha->id_categoria) }} "
                                                    method="post">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="bi bi-trash3-fill"></i>
                                                    </button>
                                                </form>
                                            @else
                                                <form action="{{ route('admin.categorias.ativar', $linha->id_categoria) }} "
                                                    method="post">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="bi bi-trash3-fill"></i>
                                                    </button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                    @include('admin.categorias.modal.editar', ['categoria' => $linha])
                                @empty
                                    <tr>
                                        <td>Nenhuma categoria cadastrada</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::App Content-->

        @include('admin.categorias.modal.criar')

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const toastEl = document.getElementById('toastSuccess');

                if (toastEl) {
                    const toast = new bootstrap.Toast(toastEl, {
                        delay: 2000,
                        autohide: true
                    });

                    toast.show();
                }
            });
        </script>
    @endsection
