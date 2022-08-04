<?php

namespace App\Http\Controllers;

use App\Models\Areas;
use App\Models\Associados;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   /* protected $repository, $areasCompradas;

    public function __construct(Associados $assoc, Areas $areasCompradas)
    {
        $this->repository = $assoc;
        $this->areasCompradas = $areasCompradas;
    } */

    // Retorno os dados da index
    public function index()
    {
        $associados = Associados::all();
        $areas = Areas::all();
        $areasCompradas = $associados->whereNotNull('area_id');

        return view('index', [
            'associados' => $associados,
            'areas' => $areas,
            'areasCompradas' => $areasCompradas
        ]);
    }
}
