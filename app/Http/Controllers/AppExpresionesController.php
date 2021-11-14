<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class AppExpresionesController extends Controller
{
  public function index(){
    return view('exp_app.index');
  }

  public function store(Request $request){

    if ($request->dato==="Value1"){
      
        return back()->with("message","dato");
        
    }
    else{
        return back()->with("message_error", "¡Error elija una opcion valida!");
    }
   
  }
}
