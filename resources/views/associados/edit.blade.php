@extends('layout.header')

@section('content')

    @include('components.messages')

    <div class="container-fluid py-4">
        <h1>Editar o associado - {{ $associados->name }}</h1>
        <form action="{{ route('update.associados', [$associados->id]) }}" method="POST" autocomplete="off">
            {{ csrf_field() }}
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="">
                        <label class="form-label">Nome:</label>
                        <input class="form-control" name="name" id="" value="{{ $associados->name }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">E-Mail:</label>
                        <input class="form-control" name="email" id="" value="{{ $associados->email }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Telefone:</label>
                        <input class="form-control" name="phone" id="" value="{{ $associados->phone }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">RG:</label>
                        <input class="form-control" name="rg" id="" value="{{ $associados->rg }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">CPF:</label>
                        <input class="form-control" name="cpf" id="" value="{{ $associados->cpf }}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Data de Nascimento:</label>
                    <input class="form-control date" name="birthday" id="date" value="{{ $associados->birthday }}">
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Empresa Atual:</label>
                        <input class="form-control" name="company" id="" value="{{ $associados->company }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Estado Civil:</label>
                    <select class="form-control" name="marital_status" id="">
                        <option value="">Selecione...</option>
                        <option value="1" {{ $associados->marital_status === '1' ? 'selected' : '' }}>Solteiro (a)</option>
                        <option value="2" {{ $associados->marital_status === '2' ? 'selected' : '' }}>Casado (a)</option>
                        <option value="3" {{ $associados->marital_status === '3' ? 'selected' : '' }}>Divorciado (a)</option>
                        <option value="4" {{ $associados->marital_status === '4' ? 'selected' : '' }}>Víuvo (a)</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">CEP:</label>
                        <input class="form-control" name="cep" id="cep" value="{{ $associados->cep }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Rua / Logradouro:</label>
                        <input class="form-control" name="road" id="rua" value="{{ $associados->road }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Numero:</label>
                        <input class="form-control" name="number" id="numero" value="{{ $associados->number }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Cidade:</label>
                        <input class="form-control" name="city" id="cidade" value="{{ $associados->city }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Estado:</label>
                        <input class="form-control" name="state" id="uf" value="{{ $associados->state }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Pais:</label>
                        <input class="form-control" name="country" id="pais" value="{{ $associados->country }}">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Area Contratada:</label>
                        <select class="form-control" name="area_id" id="">
                            <option value="">Sem área comprada</option>
                            @foreach($areasVinculadas as $area)
                                <option value="{{ $area->id }}" {{ $area->id == $associados->area_id ? 'selected' : '' }}>{{ $area->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

            </div>
            <button type="submit" class="btn btn-success btn-sm my-2">Atualizar Associado</button>
        </form>
    </div>

@endsection

@extends('layout.footer')
