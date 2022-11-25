<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Terapia;
use App\Models\Sesion;

class UserController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Usuarios';
        $viewData['subtitle'] = 'Lista de Pacientes';
        $viewData['users'] = User::all();
        
        return view('user.index')->with('viewData', $viewData);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $viewData = [];
        $viewData['title'] = 'Usuarios';
        $viewData['users'] = User::where('name', 'LIKE', '%' . $search . '%')
            ->orWhere('document', 'LIKE', '%' . $search . '%')->get();
        $viewData['search'] = $search;
        return view('user.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $user = User::findOrFail($id);
        $viewData['title'] = 'Paciente '.$user['name'];
        $viewData['subtitle'] = 'Informacion de '.$user['name'];
        $viewData['user'] = $user;
        $viewData['plotLabels'] = array();
        $viewData['plotValues'] = array();
        try {
            $sesiones = $user->getTerapia()->getNumSesiones();
            for ($i = 0; $i < $sesiones; $i++) {
                array_push($viewData['plotLabels'], "Sesión " . ($i + 1));
            }
    
            $sesionList = Sesion::where('terapia_id', $user->getTerapia()->getId())->orderBy('created_at')->get();
            foreach ($sesionList as $s) {
                array_push($viewData['plotValues'], $s->getExtensionMax());
            }
        } catch (Exception $err) {
            $viewData['plotLabels'] = array();
            $viewData['plotValues'] = array();
        } finally {
            return view('user.show')->with('viewData', $viewData);
        }
    }

    public function create()
    {
        $viewData = []; //to be sent to the view
        $viewData['title'] = 'Crear Paciente';

        return view('user.create')->with('viewData', $viewData);
    }

    public function save(Request $request)
    {
        User::validate($request);
        //dd($request->all());
        User::create($request->only(["name","document","typedoc","nameem","numem"]));

        return back();
    }
    public function destroy($id)
    {
        Terapia::destroy($id);
        User::destroy($id);
        return redirect()->route('user.index')
            ->with('¡Paciente Eliminado Correctamente!');
    }
}
