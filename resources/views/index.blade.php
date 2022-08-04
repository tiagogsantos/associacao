@extends('layout.header')

@section('content')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div
                            class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">weekend</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">Total de <br/> Áreas</p>
                            <h4 class="mb-0">2.200</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div
                            class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">person</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">Total de <br/>Associados</p>
                            <h4 class="mb-0">{{ $associados->count() }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div
                            class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">person</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">Associados com <br/>Áreas compradas</p>
                            <h4 class="mb-0">{{ $areasCompradas->count() }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div
                            class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">weekend</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">Total de <br>Aéreas compradas</p>
                            <h4 class="mb-0">{{ $areas->count() }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
        </div>
        <div class="row mb-4">
            <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-lg-6 col-7">
                                <h6>Lista de Associados Geral</h6>
                            </div>

                            <div class="col-lg-6 col-md-4">
                                <a href="{{ route('criar.associados') }}">
                                    <button class="btn btn-success btn-sm float-xl-end">Cadastrar Associados</button>
                                </a>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0 text-center">
                                    <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nome do Associado (a)
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Telefone / WhatsApp
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            E-Mail
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Área Comprada
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Ações
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($associados as $associado)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{ asset('img/small-logos/logo-xd.svg') }}"
                                                             class="avatar avatar-sm me-3" alt="xd">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <span
                                                            class="text-xs font-weight-bold">{{ $associado->name }}</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="text-xs font-weight-bold"> {{ $associado->phone }} </span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="text-xs font-weight-bold"> {{ $associado->email }} </span>
                                            </td>
                                            <td class="align-middle">
                                                <span class="text-xs font-weight-bold"> {{ $associado->area_id }} ª Área </span>
                                            </td>
                                            <td>
                                                <a href="{{ route('show.associados', $associado->id) }}">
                                                    <button class="btn btn-primary btn-sm">Visualizar</button>
                                                </a>
                                                <a href="{{ route('edit.associados', [$associado->id, $associado->area_id]) }}">
                                                    <button class="btn btn-info btn-sm">Editar</button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    @include('layout.footer')

@endsection
