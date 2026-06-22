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
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <strong>Atenção!</strong> verifique os campos do formulário!
                    </div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Gerenciamento de Categorias</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                                data-bs-target="#TesteModal">
                                <i class="bi bi-plus">Novo produto</i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 40px">Imagem</th>
                                    <th>Nome</th>
                                    <th>Descrição</th>
                                    <th>Status</th>
                                    <th style="width: 200px">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($servicos as $linha)
                                    <tr class="align-middle">
                                        <td><img src="{{ asset('felsk/img/' . $linha->foto_servico) }}"
                                                alt="{{ $linha->nome_servico }}" class="img-thumbnail"
                                                style="max-width: 100px; max-height: 100px;"></td>
                                        <td>{{ $linha->nome_servico }}</td>
                                        <td>{{ $linha->descricao_servico }}</td>
                                        <td>
                                            @if ($linha->status_servico === 'ATIVO')
                                                <span class="badge text-bg-success">ATIVO</span>
                                            @else
                                                <span class="badge text-bg-danger">INATIVO</span>
                                            @endif
                                        </td>

                                        <td>
                                            {{-- Puxando os icones da biblioteca bootstrap --}}
                                            {{-- EDITAR --}}
                                            <button type="submit" class="btn btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#modalEditarProduto{{ $linha->id_servico }}">
                                                <i class="bi bi-arrow-counterclockwise"></i>
                                            </button>

                                            {{-- DESATIVAR --}}
                                            @if ($linha->status_servico === 'ATIVO')
                                                <form action="{{ route('admin.servicos.desativar', $linha->id_servico) }} "
                                                    method="post">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="bi bi-trash3-fill"></i>
                                                    </button>
                                                </form>
                                            @else
                                                <form action="{{ route('admin.servicos.ativar', $linha->id_servico) }} "
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

                                @empty
                                    <tr>
                                        <td>Nenhum produto cadastrada</td>
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
    @endsection
