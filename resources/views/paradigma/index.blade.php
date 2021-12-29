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
                            <li>Realizar una app o programa de manera individual, en el lenguaje de programación de tu
                                preferencia, en donde nos muestre el funcionamiento y desarrollo paso a paso de cada
                                paradigma y estilo de programación, puedes elegir 3 o 4 de ellos.
                            </li>
                            <li>Realizar prueba de escritorio, y grabarla mediante un vídeo corto de nos mas de 20 seg.
                            </li>
                            <li>
                                Una vez que se termine el programa o app, subir el archivo ejecutable. Así como el código en
                                bloc de notas. Al espacio que esta creado en google classroom para esta actividad.

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

                    <form action="{{ route('paradigma.store') }}" method="POST">
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
                                    <option value="Value1">programación Orientada a Objetos</option>
                                    <option value="Value2">Programación Funcional</option>
                                    <option value="Value3">Programación Lógica</option>
                                    <option value="Value4">Programación Declarativa</option>
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
                                    La <b>Programación Orientada a Objetos</b> se basa en
                                    el concepto de crear un modelo del problema de destino en
                                    sus programas. La programación orientada a objetos disminuye
                                    los errores y promociona la reutilización del código. Python es un lenguaje orientado a
                                    objetos.


                                    <h3 class="alert-heading">Características</h3>

                                    <h6>Los objetos definidos en Python tienen las características siguientes:</h6>
                                    <ul>
                                        <li><b>Identidad.</b> Cada objeto debe ser distinguido y ello debe poder demostrarse
                                            mediante pruebas. Las pruebas is e is not existen para este fin.</li>
                                        <li><b>Estado.</b> Cada objeto debe ser capaz de almacenar el estado. Para este fin,
                                            existen atributos, tales como variables de instancias y campos.</li>
                                        <li><b>Comportamiento.</b> Cada objeto debe ser capaz de manipular su estado. Para
                                            este fin existen métodos.
                                        </li>

                                    </ul>
                                    <br>
                                    <h4>Ejemplo en el lenguaje Python</h4>
                                    <h1 class="text-center">
                                        <img class="img-fluid" src="https://i.ibb.co/0yKC6Dm/example-py.png"
                                            width="400">
                                    </h1>

                                @elseif (str_contains(Session::get('message'),"valor2"))
                                    La <b>programación funcional </b> puede ayudarnos a crear software más robusto,
                                    mantenible
                                    y fácil de testear. Quizás hayas empezado a oír hablar de lenguajes de programación
                                    funcional como Scala, Haskell o Lisp, pero quizá no sepas todavía que Java en su versión
                                    8 permite usar la potencia de la programación funcional sin abandonar su orientación a
                                    objetos.

                                    <h3 class="alert-heading">Características</h3>

                                    <h6>Las características principales del paradigma funcional son:</h6>
                                    <ul>
                                        <li>Definiciones de funciones matemáticas puras, sin estado interno ni efectos
                                            laterales
                                        </li>

                                        <li>alores inmutables</li>
                                        <li>Uso profuso de la recursión en la definición de las funciones
                                        </li>
                                        <li>Uso de listas como estructuras de datos fundamentales</li>
                                        <li>Funciones como tipos de datos primitivos: expresiones lambda y funciones de
                                            orden superior</li>
                                    </ul>
                                    <br>
                                    <h4>Ejemplo en el lenguaje Haskell</h4>
                                    <h1 class="text-center">
                                        <img class="img-fluid" src="https://i.ibb.co/Y7FszzK/carbon.png"
                                            width="400">
                                    </h1>
                                    @elseif (str_contains(Session::get('message'),"valor3"))
                                 <b>programación lógica </b> Paradigma de programación
                                  basado en la lógica de primer orden. La programación 
                                  lógica estudia el uso de la lógica para el planteamiento
                                   de problemas y el control sobre las reglas de inferencia 
                                   para alcanzar la solución automática.



                                    <h3 class="alert-heading">Características</h3>

                                    <h6>Las características principales del paradigma lógico son:</h6>
                                    <ul>
                                   

                                       <li> Unificación de términos.</li>
                                       <li> Mecanismos de inferencia automática.</li>
                                       <li> Recursion como estructura de control básica.</li>
                                        <li>Visión lógica de la computación.</li>
                                    </ul>
                                    <br>
                                    <h4>Ejemplo en el lenguaje Porlog</h4>
                                    <p class="h6">Un programa Prolog se compone de un conjunto 
                                        de hechos (afirmaciones simples) y de reglas
                                         (que sirven para afirmar la veracidad de un hecho 
                                         en base a otros). El conjunto de hechos de un programa viene a ser el equivalente a contar con una base de datos, aunque en este contexto se habla de 'base de conocimientos'.</p>
                                    <h1 class="text-center">
                                        <img class="img-fluid" src="https://i.ibb.co/cypZn3G/carbon.png"
                                            width="400">
                                    </h1>
                                    @elseif (str_contains(Session::get('message'),"valor4"))
                                    
                                       <h3 class="alert-heading">Características</h3>
                                     <p>  En la <b>Programación Declarativa</b> se describe el resultado final deseado,
                                          en lugar de mostrar todos los pasos del trabajo, es decir, no se determina el <b>"cómo".</b></p>

                                      <p> Si al escribir un Programa describimos <b>“qué hay que hacer”</b>, estaremos programando en forma declarativa, es decir, describimos el problema que queremos solucionar, pero no las instrucciones necesarias para resolverlo.</p>
                                       <h6>Las características principales del paradigma lógico son:</h6>
                                       <ul>
                                      <li>No existe la asignación ni el
                                        cambio de estado en un programa. Las variables son identificadores de valores que no
                                        cambian en toda la evaluación (como constantes definidas con un DEFINE de C). Sólo
                                        existen valores y expresiones matemáticas que devuelven nuevos valores a partir de los
                                        declarados.</li>
                                       </ul>
                                       <br>
                                       <h4>Ejemplo en el lenguaje PHP</h4>
                                       
                                       <h1 class="text-center">
                                           <img class="img-fluid" src="https://i.ibb.co/ZWcCSPK/carbon.png"
                                               width="400">
                                       </h1>
                                @endif
                        @endif


                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
