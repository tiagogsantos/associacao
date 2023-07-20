@extends('layout.header')

@section('content')

    @include('components.messages')

    <div class="container-fluid py-4">
        <h1>Criar novos Associados</h1>
        <form action="{{ route('store.associados') }}" method="POST">
           @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Nome:</label>
                        <input class="form-control" name="name" id="" value="{{ old('name') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">E-Mail:</label>
                        <input class="form-control" name="email" id="" value="{{ old('email') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Telefone:</label>
                        <input class="form-control phone" name="phone_number" id="" value="{{ old('phone_number') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">RG:</label>
                        <input class="form-control rg" name="rg" id="" value="{{ old('rg') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">CPF:</label>
                        <input class="form-control cpf" name="cpf" id="" value="{{ old('cpf') }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Data de Nascimento:</label>
                    <input class="form-control date" name="birthday" id="date" value="{{ old('birthday') }}">
                </div>

                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Empresa Atual:</label>
                        <input class="form-control" name="company" id="" value="{{ old('company') }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Estado Civil:</label>
                    <select class="form-control" name="marital_status" id="">
                        <option value="">Selecione...</option>
                        <option value="1" @if (old('marital_status') == "1")
                            {{ 'selected' }}
                            @endif >Solteiro (a)
                        </option>
                        <option value="2" @if (old('marital_status') == "2")
                            {{ 'selected' }}
                            @endif >Casado (a)
                        </option>
                        <option value="3" @if (old('marital_status') == "3")
                            {{ 'selected' }}
                            @endif >Divorciado (a)
                        </option>
                        <option value="4" @if (old('marital_status') == "4")
                            {{ 'selected' }}
                            @endif >Víuvo (a)
                        </option>
                    </select>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">CEP:</label>
                        <input class="form-control cep" name="cep" id="cep" value="{{ old('cep') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Rua / Logradouro:</label>
                        <input class="form-control" name="road" id="rua" value="{{ old('road') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Numero:</label>
                        <input type="number" class="form-control" name="number" id="numero" value="{{ old('number') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Cidade:</label>
                        <input class="form-control" name="city" id="cidade" value="{{ old('city') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Estado:</label>
                        <input class="form-control" name="state" id="uf" value="{{ old('state') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Pais:</label>
                        <input class="form-control" name="country" id="pais" value="{{ old('country') }}">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Area Contratada:</label>
                        <select class="form-control" name="area_id" id="">
                            <option value="">Sem área comprada</option>
                            @foreach($areas as $area)
                                <option value="{{ $area->id }}">{{ $area->name }}</option>
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
