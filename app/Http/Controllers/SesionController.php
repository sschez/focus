<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Sesion;
use App\Models\Terapia;
use App\Models\User;

class SesionController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Sesion';
        $viewData['subtitle'] = 'Lista de Pacientes';
        $viewData['sesion'] = Sesion::all();
        
        return view('sesion.index')->with('viewData', $viewData);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $viewData = [];
        $viewData['title'] = 'Sesion';
        $viewData['sesion'] = Sesion::where('name', 'LIKE', '%' . $search . '%')
            ->orWhere('document', 'LIKE', '%' . $search . '%')->get();
        $viewData['search'] = $search;
        return view('sesion.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $sesion = Sesion::findOrFail($id);
        $viewData['title'] = 'Paciente '.$sesion['name'];
        $viewData['subtitle'] = 'Informacion de '.$sesion['name'];
        $viewData['sesiones'] = array();
       
        $sesiones = Sesion::where('terapia_id', $sesiones->getTerapia()->getId())->orderBy('id', 'asc')->get();
            foreach ($sesionList as $s) {
                array_push($viewData['sesiones'], $s->getNumSesion(),$s->getRepRealizadas());
            }

        return view('sesion.show')->with('viewData', $viewData);
    }

    public function create()
    {
        $viewData = []; //to be sent to the view
        $viewData['title'] = 'Crear Sesion';
        $viewData['users'] = User::all();

        return view('sesion.create')->with('viewData', $viewData);
    }

    public function save(Request $request)
    {
        Sesion::validate($request);
        //dd($request->all());
        Sesion::create($request->only(["dolor","caida","numSesion","terapia_id","series"]));

        return back();
    }
    public function destroy($id)
    {
        Sesion::destroy($id);
        return redirect()->route('sesion.index')
            ->with('¡Paciente Eliminado Correctamente!');
    }
}
