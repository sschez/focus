<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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

    public function show($id)
    {
        $viewData = [];
        $user = User::findOrFail($id);
        $viewData['title'] = 'Paciente '.$user['name'];
        $viewData['subtitle'] = 'Informacion de '.$user['name'];
        $viewData['user'] = $user;

        return view('user.show')->with('viewData', $viewData);
    }

    public function create()
    {
        $viewData = []; //to be sent to the view
        $viewData['title'] = 'Crear Paciente';

        return view('user.create')->with('viewData', $viewData);
    }

    public function save(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'typedoc' => 'required',
            'document' => 'required',
            'nameem' => 'required',
            'numem' => 'required',
        ]);
        User::create($request->only(['name', 'typedoc', 'document', 'nameem', 'numem']));

        return back();
    }
}
