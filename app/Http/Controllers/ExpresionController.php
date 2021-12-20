<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TRegx\CleanRegex\Pattern;

class ExpresionController extends Controller
{


    public function index()
    {

        return view('exp.index');
    }

    public function store(Request $request)
    {
        switch (true) {
            case is_null($request->dato):
                return back()->with('message_error', "¡Por favor ingrese un dato valido!");
                break;
            case Pattern::compose(["^([0-9 .]+([= > < !][=][0-9.]+)+)?$", "^([0-9 .]+([= > < !][=][0-9.]+([<>][0-9.]+))+)?$", "^([0-9 .]+([> <][0-9.]+)+)?$"])->testAny($request->dato):
                return back()->with('message', "relacional $request->dato");
                break;

            case pattern("^([0-1 ]+[and or not]+ [0-1])?$")->test($request->dato):
                return back()->with('message', "logica $request->dato");
                break;

            case pattern("^(([A-Z a-z 0-9])+)?$")->test($request->dato):
                return back()->with('message', "alfa $request->dato");
                break;
            case pattern("^(([A-Z a-z]+([=][0-9 . '' A-Z a-z]+);)+)?$")->test($request->dato):
                return back()->with('message', "asignacion $request->dato");
                break;
            case pattern("^([0-9 .]+([+*-|^%][0-9.])+)?$")->test($request->dato):
                return back()->with('message', "aritmetica $request->dato");
                break;
            case "nada":
                return back()->with('message', "nada $request->dato");
                break;
        }
    }
}
