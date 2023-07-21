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

        foreach ($associados as $associado) {
            return Contribuicao::insert([
                'maturity' => $request->input('maturity'),
                'payment_verification' => $request->input('payment_verification') == 'on' ? 1 : 0,
                'area_id' => $area,
                'associado_id' => $associado->id
            ]);
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
        $contribuicoes = Contribuicao::all();

        // Ajuste para obter as áreas de cada contribuição
        $areas = $contribuicoes->map(function ($contribuicao) {
            return $contribuicao->areas;
        });

        return view('contribuicao.index', [
            'contribuicoes' => $contribuicoes,
            'areas' => $areas,
        ]);
    }
}
