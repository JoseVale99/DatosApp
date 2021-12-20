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
            case pattern("^(0|[-1-9][0-9]*)$")->test($request->dato):
               
                return back()->with('message',"int $request->dato");
                break;
            case pattern("^([-0-9]+[.]([0-9]+))?$")->test($request->dato):
                return back()->with('message', "float $request->dato");
                break;
            case $request->dato == "true" || $request->dato == "false":
                return back()->with('message', "boolean $request->dato");
                break;
            case pattern("^([a-z A-Z @ # ~ € & · $ ( )  % = ? { } - + * |])$")->test($request->dato):
                return back()->with('message', "char $request->dato");
                break;
            case is_string($request->dato):
                return back()->with('message', "str $request->dato");
                break;
        }

        return back();
    }
}
