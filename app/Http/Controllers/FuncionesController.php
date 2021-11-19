<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class FuncionesController extends Controller
{
    public function index()
    {

        return view('func.index');
    }

    public function store(Request $request)
    {

        // Ec. de primer grado
        $resultado = 0;
        $ecuacion = "";
        switch (true) {
            case is_null($request->x) || is_null($request->y):
                return back()->with('message_error', "¡Ingrese datos por favor!");
                break;
            case "ecuacion1":
                if ($request->x != 0) {
                    if ($request->x > 0 && $request->y > 0) {
                        $ecuacion = $request->x . "x  + " . $request->y . " = 0";
                    } elseif ($request->x > 0 && $request->y < 0) {
                        $ecuacion = $request->x . "x " . $request->y . " = 0";
                    } elseif ($request->x < 0 && $request->y > 0) {
                        $ecuacion = "-" . $request->x . "x  + " . $request->y . " = 0";
                    } else {
                        $ecuacion = $request->x . "x " . $request->y . " = 0";
                    }


                    $resultado = (-1 * $request->y) / $request->x;
                    return back()->with('message', "$resultado ")
                        ->with('ecuacion', "$ecuacion");
                } else {
                    return back()->with('message_error', "Lo sentimos ☹️ ¡No es posible hacer esta ecuacion!");
                }
                break;
        }
    }
    public function getdata(Request $request)
    {
        $discriminante=0;$x_1=0;$x_2=0;$raiz=0; 
                $ec="";
        switch (true) {
            case is_null($request->a) || is_null($request->b) ||is_null( $request->c):
                return back()->with('message_err', "¡Ingrese datos por favor!");
                break;
            case "ecuacion2":
                //  calculamos el discriminante
                
                    $discriminante =$request->b * $request->b - 4 * $request->a * $request->c;
                if ($discriminante<0) {
                    return back()->with('message_err', "Lo sentimos ☹️ ¡La ecuación no tiene soluciones reales!");
                }
                else {

                        if ($request->a>0 && $request->b>0 && $request->c>0){
                            $ec=$request->a."x² "."+ ".$request->b."x + ".$request->c." = 0";
                        }
                        elseif ($request->a<0 && $request->b>0 && $request->c>0){
                            $ec=$request->a."x² "."+ ".$request->b."x + ".$request->c." = 0";
                        }
                        elseif ($request->a>0 && $request->b>0 && $request->c<0){
                            $ec=$request->a."x² "."+ ".$request->b."x  ".$request->c." = 0";
                        }
                        elseif ($request->a<0 && $request->b<0 && $request->c>0){
                            $ec=$request->a."x² "." ".$request->b."x + ".$request->c." = 0";
                        }elseif ($request->a>0 && $request->b<0 && $request->c>0){
                                $ec=$request->a."x² "."  ".$request->b."x + ".$request->c." = 0";
                        }else{
                            $ec=$request->a."x² "." ".$request->b."x ".$request->c." = 0";  
                        }

                    $raiz = sqrt($discriminante);      // calculamos la raíz
                    $x_1 = number_format((-$request->b + $raiz) / (2 * $request->a),2, '.', '');     // calculamos una primera solución
                    if($discriminante != 0){
                       
                          $x_2 =number_format((-$request->b - $raiz) / (2 *$request->a),2, '.', ''); // calculamos la segunda solución 
                        return back()->with('message_success', "Las solución para x1 = $x_1 y para x2 = $x_2")
                        ->with("solution","$ec");// mostramos las dos soluciones
                    }         // comprobamos si hay otra solución
                    else{
                        return back()->with('message_success', "La única solución es x = $x_1")
                        ->with("solution","$ec");// mostramos // mostramos la única solución
                } 
                break;
        }
    }
}
}