@extends('layout.header')

@section('content')

    @include('components.messages')

    <div class="container-fluid py-4">
        <h1>Criar Pagamentos</h1>
        <form action="{{ route('contribuicao.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Data de pagamento:</label>
                        <input type="date" class="form-control" name="maturity" id="" value="{{ old('maturity') }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input"
                               name="payment_verification" {{ (old('payment_verification') == 'on' || old('payment_verification') == true ? 'checked' : '' ) }}>
                        <label class="form-check-label">Pagamento Efetuado?</label>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Associado:</label>
                        <select class="form-control" name="area_id" id="">
                            <option value="">Sem área comprada</option>
                            @foreach($associados as $associado)
                                <option value="{{ $associado->id }}">{{ $associado->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

            </div>
            <button type="submit" class="btn btn-success btn-sm my-2">Cadastrar associados</button>
        </form>
    </div>

@endsection

@extends('layout.footer')
