<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAssociadosRequest;
use App\Models\Associados;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class AssociadosController extends Controller
{
    // Retorna a página index dos associados
    public function index()
    {
        $associados = Associados::all();

        return view('associados.index', [
            'associados' => $associados
        ]);
    }

    // Retorna a página de criação dos associados
    public function create()
    {
        return view('associados.create');
    }

    // Criação de novos associados
    public function store(StoreAssociadosRequest $request)
    {
        $email = $request->input('email');
        $cpf = $request->input('cpf');

        $consultEmail = Associados::where('email', $email)->count();
        $consultCpf = Associados::where('cpf', $cpf)->count();

        if ($consultEmail > 0) {
            return redirect()->back()->with('warning', 'Atenção, já existe cadastro com este e-mail!');
        } elseif ($consultCpf > 0) {
            return redirect()->back()->with('warning', 'Atenção, já existe esse CPF com a mesma data de aniversário
            cadastrado em nossa base');
        } else {
            DB::beginTransaction();
            try {
                Associados::insert([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'phone' => $request->input('phone'),
                    'birthday' => $request->input('birthday'),
                    'company' => $request->input('company'),
                    'cpf' => str_replace('.', '', str_replace('-', '', $request->input('cpf'))),
                    'rg' => str_replace('.', '', str_replace('-', '', $request->input('rg'))),
                    'marital_status' => $request->input('marital_status'),
                    'cep' => $request->input('cep'),
                    'number' => $request->input('number'),
                    'city' => $request->input('city'),
                    'state' => $request->input('state'),
                    'country' => $request->input('country'),
                    'road' => $request->input('road')
                ]);

                DB::commit();
                return redirect()->back()->with('success', 'Associado foi cadastrado com sucesso!');
            } catch (\Exception $e) {
                DB::rollBack();
                Log::error($e);
                return redirect()->back()->withErrors($e->getMessage())->withInput();
            }
        }
    }

    // Visualização dos associados
    public function show($id)
    {
        $associados = Associados::where('id', $id)->first();

        return view('associados.show', [
            "associados" => $associados
        ]);
    }

    // Metodo para a ediçãpo
    public function edit($id)
    {
        $associados = Associados::where('id', $id)->first();

        if (empty($associados)) {
            return view('associados.edit')->with('warning', 'Não foi possível buscar o Associado desejado!');
        }

        return view('associados.edit', [
            'associados' => $associados
        ]);
    }

    public function update(StoreAssociadosRequest $request, $id)
    {
        DB::beginTransaction();
        try {
            Associados::where('id', $id)
                ->update([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'phone' => $request->input('phone'),
                    'birthday' => $request->input('birthday'),
                    'company' => $request->input('company'),
                    'cpf' => str_replace('.', '', str_replace('-', '', $request->input('cpf'))),
                    'rg' => str_replace('.', '', str_replace('-', '', $request->input('rg'))),
                    'marital_status' => $request->input('marital_status'),
                    'cep' => $request->input('cep'),
                    'number' => $request->input('number'),
                    'city' => $request->input('city'),
                    'state' => $request->input('state'),
                    'country' => $request->input('country'),
                    'road' => $request->input('road')
                ]);

            DB::commit();
            return redirect()->back()->with('success', 'Atualização foi realizada com sucesso!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }
}
