@extends('layout.header')

@section('content')

    <div class="container">
        <h1>Edição do Evento: {{ $eventos->name_event }}</h1>
    </div>

    @include('components.messages')

    <form id="" action="{{ route('eventos.update', ['id' => $eventos->id] ) }}" method="POST" autocomplete="off">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nome do Evento</label>
                        <input type="text" class="form-control" name="name_event" value="{{ old('name_event') ?? $eventos->name_event }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Local do Evento:</label>
                        <input type="text" class="form-control" name="locale_event" value="{{ old('locale_event') ?? $eventos->locale_event }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Resposável pelo Evento:</label>
                        <input type="text" class="form-control" name="responsible_vent"
                               value="{{ old('responsible_vent') ?? $eventos->responsible_vent }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Data do Evento:</label>
                        <input type="date" class="form-control" name="event_data"
                               value="{{ old('event_data') ?? $eventos->event_data}}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Hora do Evento:</label>
                        <input type="time" class="form-control" name="event_time"
                               value="{{ old('event_time') ?? $eventos->event_time }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Selecione a Área:</label>
                        <select class="form-control" name="area_id" id="">
                            <option value="{{ $areas->id }}">{{ $areas->name }}</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-sm mt-5">Editar Evento</button>
            </div>
        </div>
    </form>

@endsection
