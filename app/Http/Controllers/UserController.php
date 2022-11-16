<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public static $users = [
        ["id"=>1, "name"=>"luz", "document"=>"123456789 "],
        ["id"=>2, "name"=>"jose", "document"=>"123456789 "],
        ["id"=>3, "name"=>"ana", "document"=>"123456789 "],
        ["id"=>4, "name"=>"manuela", "document"=>"123456789 "]
    ];

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Usuarios";
        $viewData["subtitle"] =  "Lista de Pacientes";
        $viewData["users"] = UserController::$users;
        return view('user.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $user = UserController::$users[$id-1];
        $viewData["title"] = "Paciente ".$users["name"];
        $viewData["subtitle"] = "Informacion de ".$users["name"];
        $viewData["users"] = $users;
        return view('user.show')->with("viewData", $viewData);
    }


    public function create()
    {
        $viewData = []; //to be sent to the view
        $viewData["title"] = "Crear Paciente";
        
        return view('user.create')->with("viewData" ,$viewData);
    }

    public function save(Request $request)
    {
        $request->validate([
            "name" => "required",
            "typedoc" => "required",
            "document" => "required",
            "namedoc" => "required",
            "nameem" => "required",
            "numem" => "required"
        ]);
        dd($request->all());
        //here will be the code to call the model and save it to the database
    }

}