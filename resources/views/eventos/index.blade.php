@extends('layout.header')

@section('content')

    <div class="container">
        <h1>Criação de Eventos</h1>
    </div>

    @include('components.messages')

    <form id="" action="{{ route('store.areas') }}" method="POST" autocomplete="off">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nome do Evento</label>
                        <input type="text" class="form-control" name="name_event" value="{{ old('name_event') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Local do Evento:</label>
                        <input type="text" class="form-control" name="locale_event" value="{{ old('locale_event') }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Resposável pelo Evento:</label>
                        <input type="text" class="form-control" name="responsible_vent"
                               value="{{ old('responsible_vent') }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Data do Evento:</label>
                        <input type="date" class="form-control" name="event_data"
                               value="{{ old('event_data') }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Hora do Evento:</label>
                        <input type="time" class="form-control" name="event_time"
                               value="{{ old('event_time') }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Selecione a Área:</label>
                        <select class="form-control" name="area_id" id="">
                            @foreach($areas as $area)
                                <option value="">Selecione...</option>
                                <option value="{{ $area->area_id }}">{{ $area->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-12 my-4">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input"
                                       name="streetopening" {{ (old('streetopening') == 'on' || old('streetopening') == true ? 'checked' : '' ) }}>
                                <label class="form-check-label">Abertura de rua</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input"
                                       name="sewage" {{ (old('sewage') == 'on' || old('sewage') == true ? 'checked' : '' ) }}>
                                <label class="form-check-label">Esgoto</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input"
                                       name="light" {{ (old('light') == 'on' || old('light') == true ? 'checked' : '' ) }}>
                                <label class="form-check-label">Luz / Energia</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input"
                                       name="water" {{ (old('water') == 'on' || old('water') == true ? 'checked' : '' ) }}>
                                <label class="form-check-label">Água</label>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-sm mt-5">Cadastrar Evento</button>
            </div>
        </div>
    </form>

@endsection
