<?php

namespace App\Http\Controllers;

use App\Models\Areas;
use App\Models\Eventos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventosController extends Controller
{
    public function index()
    {
        $eventos = Eventos::all();

        return view('eventos.index', [
            'eventos' => $eventos
        ]);
    }

    public function create()
    {
        $areas = DB::table('areas')->get();

        return view('eventos.create', [
            'areas' => $areas
        ]);
    }

    public function store(Request $request)
    {
        $cadastroEvento = Eventos::insert([
            'name_event' => $request->input('name_event'),
            'locale_event' => $request->input('locale_event'),
            'responsible_vent' => $request->input('responsible_vent'),
            'event_data' => $request->input('event_data'),
            'event_time' => $request->input('event_time'),
            'area_id' => $request->input('area_id')
        ]);

        if ($cadastroEvento) {
            return redirect()->back()->with('success', 'Evento foi criado com sucesso!');
        } else {
            return redirect()->back()->with('warning', 'Não foi possível cadastrar o evento!');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $eventos = Eventos::find($id);

        if (!$eventos) {
            return redirect()->back()->with('warning', 'Não existe evento para a edição');
        }

        $areas = $eventos->areas; // Isso carregará o objeto da área relacionada ao evento.

        return view('eventos.edit', [
            'eventos' => $eventos,
            'areas' => $areas
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $putEvento = Eventos::where('id', $id)->update([
            'name_event' => $request->input('name_event'),
            'locale_event' => $request->input('locale_event'),
            'responsible_vent' => $request->input('responsible_vent'),
            'event_data' => $request->input('event_data'),
            'event_time' => $request->input('event_time')
        ]);

        if ($putEvento) {
            return redirect()->back()->with('success', 'Evento foi atualizado com sucesso!');
        } else {
            return redirect()->back()->with('warning', 'Não foi possível atualizar o evento');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
