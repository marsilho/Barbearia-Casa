<div class="modal fade" id="modalCriarAgendamento" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Novo Agendamento</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form id="formAgendamento">
                    <div class="mb-3">
                        <label class="form-label">Cliente</label>
                        <input type="text" class="form-control" id="cliente" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Serviço</label>
                        <input type="text" class="form-control" id="servico" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Data</label>
                        <input type="date" class="form-control" id="data" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Horário</label>
                        <input type="time" class="form-control" id="hora" required>
                    </div>

                    <div class="modal-footer btn-modal">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Agendar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
