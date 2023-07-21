@extends('layout.header')

@section('content')

    <div class="container">
        <h2>Visualização de Eventos - <strong>ATST</strong></h2>

        <div class="col-md-12">
            <a href="{{ route('contribuicao.create') }}">
                <button class="btn btn-success btn-sm my-2 text-left">Cadastrar contribuicao</button>
            </a>
        </div>

        <table class="table table-bordered text-center">
            <tr>
                <th>Data de Pagamento</th>
                <th>Pagamento</th>
                <th>Area</th>
                <th>Nome do Associado</th>
            </tr>
            @foreach($contribuicoes as $contribuicao)
                <tr>
                    <td>{{ date('d-m-Y', strtotime($contribuicao->maturity)) }}</td>
                    <td>
                        @if($contribuicao->payment_verification == 1)
                            <span class="badge badge-pill badge-success">Pago</span>
                        @else
                            <span class="badge badge-pill badge-danger">Pendente</span>
                        @endif
                    </td>
                    <td>@foreach($areas as $area)
                            {{ $area->name }}
                        @endforeach
                    </td>
                    <td>{{ $contribuicao->associado_id }}</td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
