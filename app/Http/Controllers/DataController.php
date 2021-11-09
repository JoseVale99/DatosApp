<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \TRegx\SafeRegex\preg;

class DataController extends Controller
{
    //  Return the main view
    public function index()
    {
        return view('index');
    }


    public function store(Request $request)
    {

        // Type of operations

        // $var = str_replace("/","|",$request->dato);

        switch (true) {
            case is_null($request->dato):
                return back()->with('message_error', "¡Por favor ingrese un dato!");
                break;
            case preg_match("/^([0-9 .]+([+][0-9.]+))?$/", $request->dato);
                return back()->with('message', "La siguiente operación $request->dato corresponde a una suma");
                break;
            case preg_match("/^([0-9 .]+([-][0-9.]+))?$/", $request->dato):
                return back()->with('message', "La siguiente operación $request->dato corresponde a una resta");
                break;

            case preg_match("/^([0-9 .]+([*][0-9.]+))?$/", $request->dato):
                return back()->with('message', "La siguiente operación $request->dato corresponde a una multiplicación");
                break;
            case preg_match("/^([0-9 .]+([|][0-9.]+))?$/", $request->dato):
                return back()->with('message', "La siguiente operación $request->dato corresponde a una división");
                break;

            case preg_match("/^(0|[1-9][0-9]*)$/", $request->dato):
                return back()->with('message', "El dato $request->dato corresponde a un valor numerico de tipo entero (int)");
                break;
            case preg_match("/^[+-]?([0-9]+\.?[0-9]*|\.[0-9]+)$/", $request->dato):
                return back()->with('message', "El dato $request->dato corresponde a un valor numerico de tipo decimal (float)");
                break;
            case $request->dato == "true" || $request->dato == "false":
                return back()->with('message', "El dato $request->dato corresponde a un valor booleano de tipo (Boolean)");
                break;
            case is_string($request->dato):
                return back()->with('message', "El dato $request->dato corresponde a una cadena de tipo (String)");
                break;
        }





        return back();
    }
}
