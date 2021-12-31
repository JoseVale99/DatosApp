@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('App sobre tipos de datos') }}</div>
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
                        <ul>
                            <li>Realizar una app o programa de manera individual,
                                en el lenguaje de programación de tu preferencia,
                                en donde nos muestre paso a paso el proceso y desarrollo
                                de la resolución SLD.
                            </li>
                            <li>Realizar prueba de escritorio, y grabarla mediante un vídeo corto de nos mas de 20 segundos.
                            </li>
                            <li>
                                Una vez que se termine el programa o app, subir el archivo ejecutable.
                                Así como el código en bloc de notas.
                                Al espacio que esta creado en google classroom para esta actividad.

                            </li>
                        </ul>

                    </div>
                    <div class="card-body">

                        {{-- @if (session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif --}}
                        <div class="alert alert-primary" role="alert">
                            <h4 class="alert-heading">¿Cómo se utiliza la App?</h4>
                            A continuación te muestro los ejemplos sencillos de realizar.
                            Seleccione una opción para ver los resultados.
                        </div>



                    </div>

                    <form action="{{ route('horn.store') }}" method="POST">
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
                                    <option value="Value1"> resolución SLD</option>

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
                                @if (str_contains(Session::get('message'), 'valor1'))
                                    La semántica operacional estándar de los programas lógicos está dada
                                    por un procedimiento de refutación basado en la regla de resolución, llamado
                                    <b>resolución
                                        SLD</b>, definido originalmente por <b>Kowalski</b>. Resolución
                                    SLD significa “Linear resolution with Selection function for Definite clauses”.


                                    <h3 class="alert-heading">Resolución</h3>

                                    <h6>Los objetos definidos en Python tienen las características siguientes:</h6>
                                    <ul>
                                        <li>La estategia de resolución SLD es un caso particular de
                                            resolución lineal en la que, dado un programa P y un
                                            objetivo G, para probar la inconsistencia de
                                            P U {G} partimos del objetivo G, tomado como inicial, y se resuelve con alguna
                                            cláusula de P.</li>

                                        <li>
                                            Dado un objetivo G≡←A1 ^ ... ^ Aj ^ ... An y una cláusula
                                            C≡A←B1 ^ ... ^ Bm, entonces G' es un resolvente de G y C por
                                            resolución SLD, usando la regla de computación P si se cumple que:
                                        </li>
                                        <ol>
                                            <li>Aj=P(G) es el átomo de G seleccionado por P;</li>
                                            <li>θ=mgu(A,Aj)</li>
                                            <li> G'≡←θ(A1 ^ ... ^ Aj-1 ^ B1 ^ ... ^ Bm ^ Aj+1 ^ ... ^ An).</li>
                                        </ol>

                                    </ul>
                                    <br>
                                    <h4>Solución</h4>
                                    <div class="container">
                                        <div class="row">

                                            <div class="col">
                                                <label for="">Instrucciones, hechos</label>

                                            </div>

                                            <div class="col">
                                                <div class="row">
                                                    <label for="">Preguntas</label>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="col">
                                                <textarea class="form-control" name="" id="" cols="30"
                                                    rows="10">
mujer(maria)
mujer(ana)
hombre(luis)
hombre(pedro)
:-persona(X):-mujer(X)
:-persona(Y):-mujer(Y)
                                                </textarea>
                                            </div>

                                            <div class="col">
                                                <div class="row">
                                                    <textarea class="form-control" name="" id="" cols="30"
                                                        rows="10">? mujer(maria)</textarea>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col">
                                                <label for="">Resultado</label>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col">
                                               <textarea class="form-control" name="" id="" cols=""30" rows="10">
:- { hombres } Pepe::Maria -> false
:- { hombres } Luis::Maria -> false
:- { mujeres } Ana::Maria -> false
:- { mujeres } Maria::Maria -> true
true
                                               </textarea>
                                            </div>
                                        </div>

                                    </div>


                                @endif
                        @endif


                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
