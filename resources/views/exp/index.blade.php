@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('App sobre Expresiones') }}</div>
                    <div class="container mx-4 mt-3">
                        <div class="row text-dark">
                            <div class="col font-weight-bold">Estudiante:</div>
                            <div class="col">Zarate Carreño José Valentín</div>
                            <div class="w-100"></div>
                            <div class="col font-weight-bold">Asignatura:</div>
                            <div class="col">Programacion Lógica y Funcional</div>
                            <div class="w-100"></div>
                            <div class="col font-weight-bold">Grupo:</div>
                            <div class="col">ISB</div>
                        </div>
                    </div>


                    <div class=" text-justify mx-4 mt-2 ">
                        <div class="font-weight-bold text-success">Instrucciones:</div>
                        Desarrollar una aplicación o programa el cual dada una expresión me indique de que tipo es.
                        Considerando lo que vimos en la exposición del tema EXPRESIONES.
                    </div>
                    <div class="card-body">

                        {{-- @if (session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif --}}
                        <div class="alert alert-primary" role="alert">
                            <h4 class="alert-heading">¿Cómo se utiliza la App?</h4>
                            A continuacion te muestro los ejemplos sencillos de realizar.
                            <div class="container">
                                <div class="row text-dark">
                                    <div class="col font-weight-bold">Entrada</div>
                                    <div class="col font-weight-bold">Salida</div>
                                    <div class="w-100"></div>
                                    <div class="col"> 7>5 </div>
                                    <div class="col">Expresión relacional</div>
                                    <div class="w-100"></div>
                                    <div class="col">1 and 0</div>
                                    <div class="col">Expresión lógica</div>
                                    <div class="w-100"></div>
                                    <div class="col">JoseVale1999</div>
                                    <div class="col">Expresión alfanumerica</div>
                                    <div class="w-100"></div>
                                    <div class="col">numero = 4;</div>
                                    <div class="col">Expresión de asignación</div>
                                    <div class="w-100"></div>
                                    <div class="col">3+2</div>
                                    <div class="col">Expresión aritmética</div>

                                </div>
                            </div>



                        </div>

                        <form action="{{ route('exp.store') }}" method="POST">
                            @csrf
                            @if (session('message_error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('message_error') }}
                                </div>
                            @endif
                            <div class="row justify-content-center">
                                <label class="col-sm-2 col-form-label mt-3 font-weight-bold">Ingrese una expresión</label>
                                <div class="col-md-auto mt-3">
                                    <input type="text" name="dato" class="form-control"
                                        placeholder="Ingrese un dato p. Ej., 0 or 0">

                                </div>

                                <div class="col-md-auto mt-3 ">
                                    <button type="submit" class="btn btn-outline-dark btn-block">Verificar</button>
                                </div>




                            </div>
                            <br>
                            <br>
                            @if (session('message'))
                                <div class="alert alert-success rounded" role="alert">
                                    @if (str_contains(Session::get('message'), 'relacional'))
                                        <h5 class="font-weight-normal">La expresión
                                            <b>{{ str_replace('relacional', '', Session::get('message')) }}</b> corresponde a una
                                            <b>expresión relacional</b>. </h5>
                                        <br>
                                        <h3 class="alert-heading">¿Qué es una expresion relacional?</h3>
                                        <hr>
                                        <h6>Las expresiones relacionales comparan dos datos y entregan un valor de verdad:
                                            Verdadero o Falso.</h6>
                                        <br>
                                    @elseif (str_contains(Session::get('message'),"logica"))
                                        <h5 class="font-weight-normal">La expresión
                                            <b>{{ str_replace('logica', '', Session::get('message')) }}</b> corresponde a una
                                            <b>expresión lógica</b>. </h5>
                                        <br>
                                        <h3 class="alert-heading">¿Qué es una expresion lógica?</h3>
                                        <hr>
                                        <h6>Las Expresiones lógicas son aquellas que pueden tomar uno de dos valores, 
                                            <b>verdadero o falso.</b>  </h6>
                                        <br>
                                        @elseif (str_contains(Session::get('message'),"alfa"))
                                        <h5 class="font-weight-normal">La expresión
                                            <b>{{ str_replace('alfa', '', Session::get('message')) }}</b> corresponde a una
                                            <b>expresión alfanumérica</b>. </h5>
                                        <br>
                                        <h3 class="alert-heading">¿Qué es una expresion alfanumérica?</h3>
                                        <hr>
                                        <h6>Son expresiones que identifican letras del <b>alfabeto latino y de números arábigos</b>. 
                                              </h6>
                                        <br>
                                        @elseif (str_contains(Session::get('message'),"asignacion"))
                                        <h5 class="font-weight-normal">La expresión
                                            <b>{{ str_replace('asignacion', '', Session::get('message')) }}</b> corresponde a una
                                            <b>expresión asignación</b>. </h5>
                                        <br>
                                        <h3 class="alert-heading">¿Qué es una expresion asignación?</h3>
                                        <hr>
                                        <h6><b>Los Operadores de Asignación</b>, como su nombre lo indica, 
                                            se encargan de asignarle a una variable el resultado de una
                                             expresión matemática o el valor de otra variable. variable o 
                                             una expresión más compleja. de la izquierda de ésta forma la expresión 
                                             de asignación será del mismo tipo de datos.
                                              </h6>
                                        <br>
                                        @elseif (str_contains(Session::get('message'),"aritmetica"))
                                        <h5 class="font-weight-normal">La expresión
                                            <b>{{ str_replace('aritmetica', '', Session::get('message')) }}</b> corresponde a una
                                            <b>expresión aritmética</b>. </h5>
                                        <br>
                                        <h3 class="alert-heading">¿Qué es una expresion aritmética?</h3>
                                        <hr>
                                        <h6><b>Las expresiones aritméticas</b> realizan operaciones que implican suma, resta, multiplicación, división y módulo.
                                              </h6>
                                        <br>
                                    @else
                                    @if (str_contains(Session::get('message'),"nada"))
                                    <h5 class="font-weight-normal">Lo sentimos no encontramos coincidencias para la siguiente expresion:
                                        <b>{{ str_replace('nada', '', Session::get('message')) }}</b> verifique la <b>tabla de ejemplos</b>.</h5>
                                    <br>   
                                    @endif    

                                    @endif

                                </div>
                            @endif


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
