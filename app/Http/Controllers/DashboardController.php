<?php

namespace App\Http\Controllers;

use App\Models\Associados;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Retorno os dados da index
    public function index()
    {
        $associados = Associados::all();

        return view('index', [
            'associados' => $associados
        ]);
    }
}
