@extends('layout.header')

@section('content')

    <div class="container">
        <h2>Visualização de Eventos - <strong>ATST</strong></h2>

        <div class="col-md-12">
            <a href="{{ route('eventos.create') }}">
                <button class="btn btn-success btn-sm my-2 text-left">Cadastrar eventos</button>
            </a>
        </div>

        <table class="table table-bordered text-center">
            <tr>
                <th>Nome</th>
                <th>Local Evento</th>
                <th>Responsável</th>
                <th>Data Evento</th>
                <th>Hora do Evento</th>
                <th>Ações</th>
            </tr>

            @foreach($eventos as $evento)
                <tr>
                    <td>{{ $evento->name_event }}</td>
                    <td>{{ $evento->locale_event }}</td>
                    <td>{{ $evento->responsible_event }}</td>
                    <td>{{ $evento->event_data }}</td>
                    <td>{{ $evento->event_time }}</td>
                    <td>
                        <a><button class="btn btn-info btn-sm">Visualizar</button></a>
                        <a href="{{ route('eventos.edit', $evento->id) }}"><button class="btn btn-primary btn-sm">Editar</button></a>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>

@endsection

@extends('layout.footer')
