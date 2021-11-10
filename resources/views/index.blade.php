@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('App sobre tipos de datos') }}</div>
                    <p class="text-dark font-weight-bold">Estudiante: Zarate Carreño José Valentín</p>
                    <p class="text-dark font-weight-bold"> Asignatura: Programacion Lógica y Funcional.</p>
                    <p class="text-dark font-weight-bold">Grupo: ISB</p>

                    <div class=" text-justify mx-4 mt-2 ">
                        <div class="font-weight-bold text-success">Instrucciones:</div> Desarrollar una app la cual me
                        permita saber el tipo de dato que introduzco, y el tipo de operaciones
                        que puedo desarrollar con el o para que lo puedo usar, y me muestre un ejemplo de como se usa.

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
                                    <div class="col font-weight-bold">Datos de entrada</div>
                                    <div class="col font-weight-bold">Salida</div>
                                    <div class="w-100"></div>
                                    <div class="col">5+2</div>
                                    <div class="col">operación suma</div>
                                    <div class="w-100"></div>
                                    <div class="col">5|2</div>
                                    <div class="col">operación: resta</div>
                                    <div class="w-100"></div>
                                    <div class="col">5*2</div>
                                    <div class="col">operación: multiplicación</div>
                                    <div class="w-100"></div>
                                    <div class="col">5</div>
                                    <div class="col">número: entero (int)</div>
                                    <div class="w-100"></div>
                                    <div class="col">3.5</div>
                                    <div class="col">número: decimal (float)</div>
                                    <div class="w-100"></div>
                                    <div class="col">¡Hola Mundo!</div>
                                    <div class="col">cadena (string)</div>
                                    <div class="w-100"></div>
                                    <div class="col">true</div>
                                    <div class="col">Valor booleano (boolean)</div>
                                    <div class="w-100"></div>
                                    <div class="col">false</div>
                                    <div class="col">Valor booleano (boolean)</div>

                                </div>
                            </div>



                        </div>

                        <form action="{{ route('data.store') }}" method="POST">
                            @csrf
                            @if (session('message_error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('message_error') }}
                                </div>
                            @endif
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label font-weight-bold">Datos de
                                    entrada</label>
                                <div class="col-sm-10">
                                    <input type="text" name="dato" class="form-control"
                                        placeholder="Ingrese un dato por ej. 3+2">
                                </div>
                            </div>
                            @if (session('message'))
                                <div class="alert alert-dark  font-weight-bold" role="alert">
                                    {{ session('message') }}
                                </div>
                            @endif


                            <div class="form-group row justify-content-center mt-3">
                                <button type="submit" class="btn btn-outline-dark btn-lg">Verificar</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
