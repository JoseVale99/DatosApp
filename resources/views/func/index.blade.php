@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-primary">
                        <b>{{ __('Actividad de Tipos de datos y programación funcional') }}</b></div>
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
                        <b class="font-weight-bold text-success">Instrucciones:</b>
                        Investiga un ejemplo de una función que pueda resolver dos tipos de
                        ecuaciones que son de primer grado y de segundo grado; e implementala
                        en el lenguaje de tu preferencia.
                    </div>
                    <div class="card-body">


                        <div class="alert alert-primary rounded">
                            <h4 class="alert-heading">¿Cómo se utiliza la App?</h4>
                            A continuacion te muestro los ejemplos sencillos de realizar.

                            <div class="text-dark text-justify">
                                <h5 class="alert-heading font-weight-bold-800 text-center">Ecuacion de primer grado</h5>
                                Para ecuaciones de <strong>primer grado</strong>
                                se ingresa el <b>Coeficiente de X</b> y el <b>Término independiente</b>
                                <br><br>
                                <h5 class="alert-heading font-weight-bold-800">Veamos un ejemplo:</h5>
                                <br>
                                <h6 class="text-center"> <b>FORMA: AX + B = 0</b></h6><br>
                                Ecuación: <b>5x-20 = 0</b>
                                <br>Coeficiente de X: <b>5</b>
                                <br>Término independiente: <b>20</b>
                                <br> resultado: <b>4</b>
                                <h5 class="alert-heading font-weight-bold-800  text-center">Ecuacion de segundo grado</h5>
                                Para ecuaciones de <strong>segundo grado</strong>
                                se ingresa el <b class=" text-danger">coeficiente de la variable cuadrática</b>, <b
                                    class="text-primary">coeficiente de la variable lineal</b>
                                y el <b class=" text-secondary">coeficiente de la variable independiente</b>
                                <h5 class="alert-heading font-weight-bold-800">Veamos un ejemplo:</h5>
                                <br>
                                <h6 class="text-center"><b> FORMA: ax² + bx + c = 0</b></h6><br>
                                Ecuación: <b> x² -5x + 6 = 0</b>
                                coeficiente de la variable cuadrática: <b>1</b><br>
                                coeficiente de la variable lineal: <b>-5</b> <br>
                                coeficiente de la variable independiente <b>6</b>
                                <br>resultado: x1 = <b> 3.0</b> , x2 = <b>2.0 </b>
                            </div>




                        </div>

                        <div class="container">
                            <div class="row">
                              <div class="col mt-4">
                                <div class="card text-white bg-dark" style="max-width: 30rem;">
                                    <form action="{{ route('func.store') }}" method="POST">
                                        @csrf
        
                                        <div class="card-body">
                                            <h4 class="card-title text-center mt-4"> Ecuación de primer grado</h4>
                                            <h6 class="card-title text-center text-warning mt-4"> Forma: AX + B = 0</h6>
                                            <p class="card-text">Ingrese los datos a continuación:</p>
                                            <div class="container-responsive">
                                                <div class="row input-group input-group-sm">
                                                    <div class="col mt-2">Coeficiente de X: </div>
                                                    <div class="col">
                                                        <input type="number" name="x" value="{{ old('x') }}"
                                                            class="form-control mt-2" placeholder="ej. 5">
                                                    </div>
                                                    <div class="w-100"></div>
                                                    <div class="col">Término independiente: </div>
                                                    <div class="col">
                                                        <input type="number" name="y" value="{{ old('y') }}"
                                                            class="form-control mt-2" placeholder="ej. 20">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-auto mt-3 ">
                                                <button type="submit" class="btn btn-outline-warning btn-block">Calcular</button>
                                            </div>
                                            <br> <br>
                                            @if (session('message_error'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ session('message_error') }}
                                                </div>
                                            @endif
        
                                            <div class="container-responsive">
                                                @if (session('message'))
                                                    <div class="alert alert-success rounded" role="alert">
                                                        {{-- @if (str_contains(Session::get('message'), 'dato')) --}}
        
                                                        <h3 class="alert-heading text-center">¿Qué es una ecuación de primer grado?
                                                        </h3>
                                                        <h6 class="text-justify">
                                                            Una <b>ecuación</b> de primer grado o ecuación lineal es una igualdad
                                                            algebraica
                                                            cuya potencia es equivalente a uno, pudiendo contener una, dos o más
                                                            incógnitas.
                                                        </h6>
                                                        <h5 class="alert-heading">Solución</h5>
                                                        <h6 class="text-center font-weight-bold">Ecuación ingresada:
                                                            {{ Session::get('ecuacion') }}</h6>
                                                        <h6 class="font-weight-normal">
                                                            Resultado = <b>{{ Session::get('message') }}</b>
                                                        </h6>
        
                                                        <br>
                                                    </div>
                                                @endif
        
                                            </div>
                                        </div>
        
                                    </form>
                                </div>
        
                              </div>
                              <div class="col mt-4">
                                <div class="card text-white bg-dark" style="max-width: 30rem;">
                                    <form action="{{ route('func.data') }}" method="POST">
                                        @csrf
        
                                        <div class="card-body">
                                            <h4 class="card-title text-center mt-4"> Ecuación de segundo grado</h4>
                                            <h6 class="card-title text-center text-warning mt-4"> Forma:ax² + bx + c = 0</h6>
                                            <p class="card-text">Ingrese los datos a continuación:</p>
                                            <div class="container-responsive">
                                                <div class="row input-group input-group-sm">
                                                    <div class="col mt-2">Coeficiente de la variable cuadrática: </div>
                                                    <div class="col">
                                                        <input type="number" name="a" value="{{ old('a') }}"
                                                            class="form-control mt-2" placeholder="ej. 1">
                                                    </div>
                                                    <div class="w-100"></div>
                                                    <div class="col">Coeficiente de la variable lineal: </div>
                                                    <div class="col">
                                                        <input type="number" name="b" value="{{ old('b') }}"
                                                            class="form-control mt-2" placeholder="ej. -5">
                                                    </div>
                                                    <div class="w-100"></div>
                                                    <div class="col">Coeficiente de la variable independiente: </div>
                                                    <div class="col">
                                                        <input type="number" name="c" value="{{ old('c') }}"
                                                            class="form-control mt-2" placeholder="ej. 6">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-auto mt-3 ">
                                                <button type="submit" class="btn btn-outline-warning btn-block">Calcular</button>
                                            </div>
                                            <br> <br>
                                            @if (session('message_err'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ session('message_err') }}
                                                </div>
                                            @endif
        
                                            <div class="container-responsive">
                                                @if (session('message_success'))
                                                    <div class="alert alert-success rounded" role="alert">
                                                        {{-- @if (str_contains(Session::get('message'), 'dato')) --}}
        
                                                        <h3 class="alert-heading text-center">¿Qué es una ecuación de segundo grado?
                                                        </h3>
                                                        <h6 class="text-justify">
                                                            Una <b>ecuación</b> de segundo grado​​ o ecuación cuadrática de una variable es una ecuación
                                                             que tiene la expresión general: donde x es
                                                             la variable, y a, b y c constantes; a es el coeficiente cuadrático,
                                                              b el coeficiente lineal y c es el término independiente.
                                                        </h6>
                                                        <h5 class="alert-heading">Solución</h5>
                                                        <h6 class="text-center font-weight-bold">Ecuación ingresada:
                                                            {{ Session::get('solution') }}
                                                        </h6>
                                                        <h6 class="font-weight-normal">
                                                            Resultado:<br><b>{{ Session::get('message_success') }}</b>
                                                        </h6>
        
                                                        <br>
                                                    </div>
                                                @endif
        
                                            </div>
                                        </div>
        
                                    </form>
                                </div>
        
                              </div>
                            </div>
                            </div>

                        






                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
