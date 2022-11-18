<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Terapia;

class TherapyController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Terapias';
        $viewData['subtitle'] = 'Lista de Terapias';
        $viewData['therapys'] = Terapia::all();

        return view('therapy.index')->with('viewData', $viewData);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $viewData = [];
        $viewData['title'] = 'Terapias';
        $viewData['therapys'] = Terapia::where('name', 'LIKE', '%' . $search . '%')
            ->orWhere('document', 'LIKE', '%' . $search . '%')->get();
        $viewData['search'] = $search;
        return view('therapy.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $therapy = Terapia::findOrFail($id);
        $viewData['title'] = 'Terapia '.$therapy['name'];
        $viewData['subtitle'] = 'Informacion de '.$therapy['name'];
        $viewData['therapys'] = $therapy;

        return view('therapy.show')->with('viewData', $viewData);
    }

    public function create()
    {
        $viewData = []; //to be sent to the view
        $viewData['title'] = 'Crear Terapia';

        return view('therapy.create')->with('viewData', $viewData);
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
        return back();
    }
}
