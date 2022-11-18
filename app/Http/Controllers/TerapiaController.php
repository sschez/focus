<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Terapia;

class TerapiaController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Terapias';
        $viewData['subtitle'] = 'Lista de Terapias';
        $viewData['terapias'] = Terapia::all();

        return view('terapia.index')->with('viewData', $viewData);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $viewData = [];
        $viewData['title'] = 'Terapias';
        $viewData['terapias'] = Terapia::where('name', 'LIKE', '%' . $search . '%')
            ->orWhere('document', 'LIKE', '%' . $search . '%')->get();
        $viewData['search'] = $search;
        return view('terapia.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $terapia = Terapia::findOrFail($id);
        $viewData['title'] = 'Terapia '.$terapia['name'];
        $viewData['subtitle'] = 'Informacion de '.$terapia['name'];
        $viewData['terapias'] = $terapia;

        return view('terapia.show')->with('viewData', $viewData);
    }

    public function create()
    {
        $viewData = []; //to be sent to the view
        $viewData['title'] = 'Crear Terapia';
        $viewData['terapias'] = Terapia::all();
        return view('terapia.create')->with('viewData', $viewData);
    }

    public function save(Request $request)
    {
        Terapia::validate($request);
        //dd($request->all());
        Terapia::create($request->only(["doctor","condicionMedica","numSesiones","ejercicio","user_id"]));

        return back();
    }
    public function destroy($id)
    {
        Terapia::destroy($id);
        return redirect()->route('terapia.index')
            ->with('¡Paciente Eliminado Correctamente!');
    }
}
