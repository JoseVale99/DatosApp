<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParadigmaController extends Controller
{
    //
    public function index()
    {
        return view('paradigma.index');
    }
    public function store(Request $request)
    {

        switch (true) {
            case $request->dato === "Value1":
                return back()->with("message", "valor1");
                break;

            case $request->dato === "Value2":
                return back()->with("message", "valor2");
                break;

            case $request->dato === "Value3":
                return back()->with("message", "valor3");
                break;
            case $request->dato === "Value4":
                return back()->with("message", "valor4");
                break;
            case "never":
                return back()->with("message_error", "¡Error elija una opcion valida!");
                break;
        }
    }
}
