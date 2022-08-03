@extends('layout.header')

@section('content')

    <div class="conteudoShow">
        <h1>Visualização de Associados - <strong>ATST</strong></h1>

        <div class="col-md-12">
            <a href="{{ route('criar.associados') }}">
                <button class="btn btn-success btn-sm my-2 text-left">Cadastrar associados</button>
            </a>
        </div>

        <table class="table table-bordered text-center">
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Estado Civil</th>
                <th>Área Comprada</th>
                <th>Ações</th>
            </tr>

            @foreach($associados as $associado)
                <tr>
                    <td>{{ $associado->name }}</td>
                    <td>{{ $associado->email }}</td>
                    <td>{{ $associado->phone }}</td>
                    <td>{{ $associado->cpf }}</td>
                    <td>- - -</td>
                    <td>
                        <a href="{{ route('show.associados', $associado->id) }}">
                            <button class="btn btn-info btn-sm">Visualizar</button>
                        </a>
                        <a href="{{ route('edit.associados', $associado->id) }}">
                            <button class="btn btn-primary btn-sm">Editar</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection

@extends('layout.footer')
