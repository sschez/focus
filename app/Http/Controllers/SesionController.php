<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Sesion;

class SesionController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Sesion';
        $viewData['subtitle'] = 'Lista de Pacientes';
        $viewData['sesions'] = Sesion::all();
        
        return view('sesion.index')->with('viewData', $viewData);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $viewData = [];
        $viewData['title'] = 'Sesion';
        $viewData['sesions'] = Sesion::where('name', 'LIKE', '%' . $search . '%')
            ->orWhere('document', 'LIKE', '%' . $search . '%')->get();
        $viewData['search'] = $search;
        return view('sesion.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $Sesion = Sesion::findOrFail($id);
        $viewData['title'] = 'Paciente '.$Sesion['name'];
        $viewData['subtitle'] = 'Informacion de '.$Sesion['name'];
        $viewData['Sesion'] = $Sesion;

        return view('sesion.show')->with('viewData', $viewData);
    }

    public function create()
    {
        $viewData = []; //to be sent to the view
        $viewData['title'] = 'Crear Paciente';

        return view('sesion.create')->with('viewData', $viewData);
    }

    public function save(Request $request)
    {
        Sesion::validate($request);
        //dd($request->all());
        Sesion::create($request->only(["name","document","typedoc","nameem","numem"]));

        return back();
    }
    public function destroy($id)
    {
        Sesion::destroy($id);
        return redirect()->route('sesion.index')
            ->with('¡Paciente Eliminado Correctamente!');
    }
}
