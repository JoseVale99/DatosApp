<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HornController extends Controller
{
    public function index()
    {
        return view('horn.index');
    }

    public function store(Request $request)
    {

        switch (true) {

            case  $request->dato === "Value1":
                return back()->with('message', "valor1");
                break;
        }
    }
}
