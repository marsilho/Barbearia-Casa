<!-- Modal /// O id tem que ser o mesmo nome do data-bs-target que fica localizado nas configurações do button -->
<div class="modal fade" id="ModalServico" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Criar Novo Serviço</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form method="POST" action="{{ route('admin.servicos.store') }}" enctype="multipart/form-data">
                    @csrf {{-- Medida de segunrança /// cria um codigo de segurança(Token) // próprio código de segunraça do laravel --}}
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nome_servico" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome_servico" name="nome_servico"
                                aria-describedby="alerta-nome_servico" Required>
                            <div id="alerta-nome_servico" class="form-text">
                                Informe o nome do serviço
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="descricao_servico" class="form-label">Descrição</label>
                            <textarea class="form-control" id="descricao_servico" name="descricao_servico" rows="3"
                                aria-describedby="alerta-descricao" Required></textarea>
                            <div id="alerta-descricao" class="form-text">
                                Informe a descrição do serviço
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="id_categoria" class="form-label">Categoria</label>

                            <select class="form-select" id="id_categoria" name="id_categoria" required>
                                <option value="">Selecione uma categoria</option>

                                @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->id_categoria }}">
                                        {{ $categoria->nome_categoria }}
                                    </option>
                                @endforeach
                            </select>

                            <div class="form-text">
                                Informe a categoria do serviço
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="foto_servico" class="form-label">Imagem do Serviço</label>

                            <input type="file" class="form-control" id="foto_servico" name="foto_servico"
                                accept=".jpg,.jpeg,.png,.webp" required>

                            <div class="form-text">
                                Selecione uma imagem para o serviço.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="status_servico" class="form-label">Status</label>

                            <select class="form-select" aria-label="Selecione uma opção"
                                aria-describedby="alerta-ordem_servico" name="status_servico" required>

                                <option selected>Selecione uma opção</option>
                                <option value="ATIVO">ATIVO</option>
                                <option value="INATIVO">INATIVO</option>

                            </select>

                            <div id="alerta-ordem_servico" class="form-text">
                                Informe o status do serviço
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
