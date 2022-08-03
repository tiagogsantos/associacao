@extends('layout.header')

@section('content')

    <div class="container">
        <h2>Visualização de Áreas - <strong>ATST</strong></h2>

        <div class="col-md-12">
            <a href="{{ route('create.areas') }}">
                <button class="btn btn-success btn-sm my-2 text-left">Cadastrar areas</button>
            </a>
        </div>

        <table class="table table-bordered text-center">
            <tr>
                <th>Nome</th>
                <th>Municipio</th>
                <th>Valor da Área</th>
                <th>Total de metragem área</th>
                <th>Coordenador da área</th>
                <th>Ações</th>
            </tr>

            @foreach($areas as $area)
                <tr>
                    <td>{{ $area->name }}</td>
                    <td>{{ $area->county }}</td>
                    <td>R$ {{ $area->earthlyvalue ?? number_format($area->earthlyvalu) }}</td>
                    <td>{{ $area->totalarea }}</td>
                    <td>{{ $area->coordinator }}</td>
                    <td>
                        <a><button class="btn btn-info btn-sm">Visualizar</button></a>
                        <a href="{{ route('edit.areas', $area->id) }}"><button class="btn btn-primary btn-sm">Editar</button></a>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>

@endsection

@extends('layout.footer')
