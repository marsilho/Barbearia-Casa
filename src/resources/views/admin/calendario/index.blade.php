@extends('layout.admin')

@section('content')
    <div class="app-content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Calendário de Agendamentos</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#modalCriarAgendamento">
                            + Novo Agendamento
                        </button>
                    </div>
                </div>

                <div class="card-body calendario-body">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.calendario.modal.criar')
    @include('admin.calendario.modal.editar')
@endsection


{{-- Script Calendario --}}
@section('scripts')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.18/index.global.min.css">

    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.18/index.global.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.18/locales-all.global.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            let calendarEl = document.getElementById('calendar');
            let eventoSelecionado = null;

            let calendar = new FullCalendar.Calendar(calendarEl, {
                locale: 'pt-br',
                initialView: 'dayGridMonth',
                height: '80vh',

                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
                },

                buttonText: {
                    today: 'Hoje',
                    month: 'Mês',
                    week: 'Semana',
                    day: 'Dia',
                    list: 'Lista'
                },

                dateClick: function(info) {
                    document.getElementById('data').value = info.dateStr;

                    new bootstrap.Modal(document.getElementById('modalCriarAgendamento')).show();
                },

                eventClick: function(info) {
                    eventoSelecionado = info.event;

                    document.getElementById('editCliente').value = info.event.extendedProps.cliente;
                    document.getElementById('editServico').value = info.event.extendedProps.servico;
                    document.getElementById('editData').value = info.event.startStr.substring(0, 10);
                    document.getElementById('editHora').value = info.event.startStr.substring(11, 16);

                    new bootstrap.Modal(document.getElementById('modalEditarAgendamento')).show();
                },

                events: []
            });

            calendar.render();

            document.getElementById('formAgendamento').addEventListener('submit', function(e) {
                e.preventDefault();

                let cliente = document.getElementById('cliente').value;
                let servico = document.getElementById('servico').value;
                let data = document.getElementById('data').value;
                let hora = document.getElementById('hora').value;

                calendar.addEvent({
                    id: String(Date.now()),
                    title: hora + ' ' + servico + ' - ' + cliente,
                    start: data + 'T' + hora,
                    extendedProps: {
                        cliente: cliente,
                        servico: servico
                    }
                });

                this.reset();

                bootstrap.Modal.getInstance(document.getElementById('modalCriarAgendamento')).hide();
            });

            document.getElementById('formEditarAgendamento').addEventListener('submit', function(e) {
                e.preventDefault();

                if (eventoSelecionado) {
                    let cliente = document.getElementById('editCliente').value;
                    let servico = document.getElementById('editServico').value;
                    let data = document.getElementById('editData').value;
                    let hora = document.getElementById('editHora').value;

                    eventoSelecionado.setProp('title', hora + ' ' + servico + ' - ' + cliente);
                    eventoSelecionado.setStart(data + 'T' + hora);
                    eventoSelecionado.setExtendedProp('cliente', cliente);
                    eventoSelecionado.setExtendedProp('servico', servico);
                }

                bootstrap.Modal.getInstance(document.getElementById('modalEditarAgendamento')).hide();
            });

            document.getElementById('btnExcluirAgendamento').addEventListener('click', function() {
                if (eventoSelecionado) {
                    eventoSelecionado.remove();
                }

                bootstrap.Modal.getInstance(document.getElementById('modalEditarAgendamento')).hide();
            });

        });
    </script>
@endsection
