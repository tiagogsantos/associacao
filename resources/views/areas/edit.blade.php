@extends('layout.header')

@section('content')

    <div class="container">
        <h1>Edição da Área - {{ $areas->name }}</h1>
    </div>

    @include('components.messages')

    <form id="" action="{{ route('update.areas', $areas->id) }}" method="POST" autocomplete="off">
        @method('PUT')
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nome da área</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') ?? $areas->name }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Municipio</label>
                        <input type="text" class="form-control" name="county"
                               value="{{ old('county') ?? $areas->county }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Total do Valor da Área</label>
                        <input type="text" class="form-control" name="earthlyvalue"
                               value="{{ $areas->earthlyvalue }}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Total de Metragem da Área</label>
                        <input type="text" class="form-control" name="totalarea"
                               value="{{ old('totalarea') ?? $areas->totalarea }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Coordenador</label>
                        <input type="text" class="form-control" name="coordinator"
                               value="{{ old('coordinator') ?? $areas->coordinator }}">
                    </div>
                </div>
                <div class="col-md-12 my-4">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input"
                                       name="streetopening" {{ (old('streetopening') == 'on' || old('streetopening') == true ? 'checked' : ($areas->streetopening == true ? 'checked' : '')) }}>
                                <label class="form-check-label">Abertura de rua</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input"
                                       name="sewage" {{ (old('sewage') == 'on' || old('sewage') == true ? 'checked' : ($areas->sewage == true ? 'checked' : '')) }}>
                                <label class="form-check-label">Esgoto</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input"
                                       name="light" {{ (old('light') == 'on' || old('light') == true ? 'checked' : ($areas->light == true ? 'checked' : '')) }}>
                                <label class="form-check-label">Luz / Energia</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input"
                                       name="water" {{ (old('water') == 'on' || old('water') == true ? 'checked' : ($areas->water == true ? 'checked' : '')) }}>
                                <label class="form-check-label">Água</label>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-sm mt-5">Editar área</button>
            </div>
        </div>
    </form>

@endsection

@extends('layout.footer')
