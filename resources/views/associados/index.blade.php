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
            </tr>
        </table>
    </div>

@endsection

@extends('layout.footer')
