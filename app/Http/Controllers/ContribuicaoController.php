<?php

namespace App\Http\Controllers;

use App\Models\Areas;
use App\Models\Associados;
use App\Models\Contribuicao;
use App\Models\Eventos;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContribuicaoController extends Controller
{
    public function store(Request $request)
    {
        $area = $request->input('area_id');

        $associados = Associados::where('area_id', $area)->get();

        $dataVencimento = Carbon::parse($request->input('maturity'))->format('Y-m');

        foreach ($associados as $associado) {
            $cadastraContribuicao = Contribuicao::create([
                'maturity' => $dataVencimento,
                'payment_verification' => $request->input('payment_verification') == 'on' ? 1 : 0,
                'area_id' => $area,
                'associado_id' => $associado->id
            ]);

            if ($cadastraContribuicao) {
                return redirect()->back()->with('success', 'Contribuição foi cadastrada com sucesso!');
            } else {
                return redirect()->back()->with('warning', 'Não foi possível cadastrar a contribuição');
            }
        }
    }

    public function create()
    {
        $associados = Associados::all();

        return view('contribuicao.create', [
            'associados' => $associados
        ]);
    }

    public function index()
    {
        return view('contribuicao.index');
    }

}
