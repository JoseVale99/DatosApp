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
                        Realiza un programa o aplicación para que de acuerdo al tipo de software que vayas a desarrollar,
                         te sugiera el tipo de expresiones que usarias para su buen funcionamiento.
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
                                    Seleccione el dato de entrada en este caso es mi aplicación referente
                                    a mi proyecto final.
                                </div>
                            </div>



                        </div>

                        <form action="{{ route('exp_app.store') }}" method="POST">
                            @csrf
                            @if (session('message_error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('message_error') }}
                                </div>
                            @endif
                            <div class="row justify-content-center">
                                <label class="col-sm-2 col-form-label mt-3 font-weight-bold">Seleccione aquí.</label>
                                <div class="col-md-auto mt-3">
                                   <select name="dato" class="form-control">
                                    <option>SELECCIONE UNA OPCIÓN</option>
                                    <option value="Value1">Sistema web para la entrada y salida de productos en la empresa “Máxima Seguridad” ubicada en el estado de Oaxaca.</option>
                                   </select>

                                </div>

                                <div class="col-md-auto mt-3 ">
                                    <button type="submit" class="btn btn-outline-dark btn-block">Verificar</button>
                                </div>




                            </div>
                            <br>
                            <br>
                            @if (session('message'))
                                <div class="alert alert-success rounded" role="alert">
                                    @if (str_contains(Session::get('message'), 'dato'))
                                        
                                    <h3 class="alert-heading">¿Qué expresiones puedo utilizar para este software?</h3>
                                    Para el desarrollo de sistemas de inventarios puedes utilizar las siguientes 
                                    expresiones, a continuación te muestro algunos ejemplos:
                                    <ul class=" text-align-justify">
                                        <li><b>Expresiones logicas:</b> Para el manejo de valores booleanos, con estas expresiones puedes hacer
                                        comparaciones booleanas.</li>
                                        <li><b>Expresiones relacional:</b> Para comparar si el stock de un producto es igual o mayor a 0.</li>
                                        <b>Expresiones de asignación:</b> Para programar, todos los lenguajes que soportan el paradigma orientado a objetos
                                        soportan este tipo de expresiones.</li>
                                        <li><b>Expresiones aritméticas:</b> Para realizar sumas de productos o cualquier operación aritmética
                                        que desees aplicar en el desarrollo de sistemas de inventarios.</li>

                                    </ul>
                                    
                                        <br>
                                   

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
