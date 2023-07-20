<?php

namespace App\Http\Controllers;

use App\Models\Areas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AreasController extends Controller
{
    // Retorno da página index
    public function index()
    {
        $areas = Areas::all();

        return view('areas.index', [
            'areas' => $areas
        ]);
    }

    // Retorno da página de criação
    public function create()
    {
        return view('areas.create');
    }

    // Criação de associados
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            Areas::create([
                'name' => $request->input('name'),
                'county' => $request->input('county'),
                'earthlyvalue' => $request->input('earthlyvalue'),
                'totalarea' => $request->input('totalarea'),
                'coordinator' => $request->input('coordinator'),
                'streetopening' => $request->input('streetopening'),
                'sewage' => $request->input('sewage'),
                'light' => $request->input('light'),
                'water' => $request->input('water')
            ]);
            DB::commit();
            return redirect()->back()->with('success', 'Área foi cadastrada com sucesso!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $areas = Areas::where('id', $id)->first();

        return view('areas.edit', [
            'areas' => $areas
        ]);
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            Areas::where('id', $id)->
            update([
                'name' => $request->input('name'),
                'county' => $request->input('county'),
                'earthlyvalue' => str_replace(',', '', str_replace('.', '', $request->input('earthlyvalue'))),
                'totalarea' => $request->input('totalarea'),
                'coordinator' => $request->input('coordinator'),
                'streetopening' => $request->boolean('streetopening'),
                'sewage' => $request->boolean('sewage'),
                'light' => $request->boolean('light'),
                'water' => $request->boolean('water')
            ]);
            DB::commit();
            return redirect()->back()->with('success', 'Área foi atualizada com sucesso!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }

    public function destroy($id)
    {

    }


}
