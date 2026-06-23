<!-- Modal /// O id tem que ser o mesmo nome do data-bs-target que fica localizado nas configurações do button -->
<div class="modal fade" id="modalEditarServico{{ $servico->id_servico }}" data-bs-backdrop="static"
    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Editar Serviço</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form method="POST" action="{{ route('admin.servicos.update', $servico->id_servico) }}">
                    @csrf {{-- Medida de segunrança /// cria um codigo de segurança(Token) // próprio código de segunraça do laravel --}}
                    @method('PUT')

                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nome_servico" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome_servico" name="nome_servico"
                                aria-describedby="alerta-nome_servico" Required
                                value="{{ $servico->nome_servico }}">
                            <div id="alerta-nome_servico" class="form-text">
                                Informe o nome da servico
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="descricao_servico" class="form-label">Descrição</label>
                            <textarea class="form-control" id="descricao_servico" name="descricao_servico" rows="3"
                                aria-describedby="alerta-descricao" Required>{{ $servico->descricao_servico }}</textarea>
                            <div id="alerta-descricao" class="form-text">
                                Informe a descrição da servico
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <label for="nome_servico" class="form-label">Status</label>
                                    <select class="form-select" aria-label="Selecione uma opção"
                                        aria-describedby="alerta-ordem_servico" name="status_servico" Required>
                                        <option selected>Selecione uma opção</option>
                                        <option value="ATIVO">ATIVO</option>
                                        <option value="INATIVO">INATIVO</option>
                                    </select>
                                    <div id="alerta-ordem_servico" class="form-text">
                                        Informe o status da servico
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer mb-3 btn-modal">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
