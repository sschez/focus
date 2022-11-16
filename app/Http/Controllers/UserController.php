<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function create()
    {
        $viewData = []; //to be sent to the view
        $viewData["title"] = "Crear Paciente";

        return view('user.create')->with("viewData",$viewData);
    }

    public function save(Request $request)
    {
        $request->validate([
            "name" => "required",
            "doc" => "required"
        ]);
        dd($request->all());
        //here will be the code to call the model and save it to the database
    }

}