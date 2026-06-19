<!-- Modal /// O id tem que ser o mesmo nome do data-bs-target que fica localizado nas configurações do button -->
<div class="modal fade" id="modalEditarCategoria{{ $categoria->id_categoria }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Editar categoria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form method="POST" action="{{ route('admin.categoria.update', $categoria->id_categoria) }}">
                    @csrf {{-- Medida de segunrança /// cria um codigo de segurança(Token) // próprio código de segunraça do laravel --}}
                    @method('PUT')

                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nome_categoria" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome_categoria" name="nome_categoria"
                                aria-describedby="alerta-nome_categoria" Required value="{{ $categoria->nome_categoria }}">
                            <div id="alerta-nome_categoria" class="form-text">
                                Informe o nome da categoria
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="descricao_categoria" class="form-label">Descrição</label>
                            <textarea class="form-control" id="descricao_categoria" name="descricao_categoria" rows="3"
                                aria-describedby="alerta-descricao" Required>{{$categoria->descricao_categoria}}</textarea>
                            <div id="alerta-descricao" class="form-text">
                                Informe a descrição da categoria
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <label for="ordem_categoria" class="form-label">Ordem</label>
                                    <input type="number" class="form-control" id="ordem_categoria"
                                        name="ordem_categoria" aria-describedby="alerta-ordem_categoria" Required value="{{$categoria->ordem_categoria}}">
                                    <div id="alerta-ordem_categoria" class="form-text">
                                        Informe a ordem da categoria
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="nome_categoria" class="form-label">Status</label>
                                    <select class="form-select" aria-label="Selecione uma opção"
                                        aria-describedby="alerta-ordem_categoria" name="status_categoria" Required>
                                        <option selected>Selecione uma opção</option>
                                        <option value="ATIVO">ATIVO</option>
                                        <option value="INATIVO">INATIVO</option>
                                    </select>
                                    <div id="alerta-ordem_categoria" class="form-text">
                                        Informe o status da categoria
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
