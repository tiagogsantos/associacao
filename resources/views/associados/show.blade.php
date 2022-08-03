@extends('layout.header')

@section('content')
    <div class="container-fluid py-4">
        <h2>Associado - {{ $associados->name }}</h2>
        <form action="" method="">
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Nome:</label>
                        <input class="form-control" name="name" id="" value="{{ $associados->name }}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">E-Mail:</label>
                        <input class="form-control" name="email" id="" value="{{ $associados->email }}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Telefone:</label>
                        <input class="form-control phone" name="phone" id="" value="{{ $associados->phone }}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">RG:</label>
                        <input class="form-control rg" name="rg" id="" value="{{ $associados->rg }}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">CPF:</label>
                        <input class="form-control cpf" name="cpf" id="" value="{{ $associados->cpf }}" readonly>
                    </div>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Data de Nascimento:</label>
                    <input class="form-control date" name="birthday" id="date" value="{{ $associados->birthday }}"
                           readonly>
                </div>

                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Empresa Atual:</label>
                        <input class="form-control" name="company" id="" value="{{ $associados->company }}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Estado Civil:</label>
                    <select class="form-control" name="marital_status" id="">
                        <option value="">Selecione...</option>
                        <option value="1" {{ $associados->marital_status === '1' ? 'selected' : '' }}>Solteiro (a)
                        </option>
                        <option value="2" {{ $associados->marital_status === '2' ? 'selected' : '' }}>Casado (a)
                        </option>
                        <option value="3" {{ $associados->marital_status === '3' ? 'selected' : '' }}>Divorciado (a)
                        </option>
                        <option value="4" {{ $associados->marital_status === '4' ? 'selected' : '' }}>Víuvo (a)
                        </option>
                    </select>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">CEP:</label>
                        <input class="form-control" name="cep" id="cep" value="{{ $associados->cep }}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Rua / Logradouro:</label>
                        <input class="form-control" name="road" id="rua" value="{{ $associados->road }}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Numero:</label>
                        <input type="number" class="form-control" name="number" id="numero"
                               value="{{ $associados->number }}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Cidade:</label>
                        <input class="form-control" name="city" id="cidade" value="{{ $associados->city }}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Estado:</label>
                        <input class="form-control" name="state" id="uf" value="{{ $associados->state }}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Pais:</label>
                        <input class="form-control" name="country" id="pais" value="{{ $associados->country }}"
                               readonly>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@extends('layout.footer')
