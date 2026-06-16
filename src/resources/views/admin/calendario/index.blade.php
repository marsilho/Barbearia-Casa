@extends('layout.admin')

@section('content')
    <div class="app-content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Calendário de Agendamentos</h3>
                </div>

                <div class="card-body">
                    <div id="calendar"></div>
                </div>
            </div>

        </div>
    </div>
@endsection


{{-- Script Calendario --}}
@section('scripts')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.18/index.global.min.css">

    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.18/index.global.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.18/locales-all.global.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            let calendarEl = document.getElementById('calendar');

            let calendar = new FullCalendar.Calendar(calendarEl, {
                locale: 'pt-br',
                initialView: 'dayGridMonth',
                height: 700,

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

                events: [{
                        title: 'Corte Masculino - João',
                        start: '2026-06-16T09:00:00'
                    },
                    {
                        title: 'Barba - Carlos',
                        start: '2026-06-17T10:30:00'
                    },
                    {
                        title: 'Corte + Barba - Pedro',
                        start: '2026-06-19T14:00:00'
                    }
                ]
            });

            calendar.render();

        });
    </script>
@endsection
