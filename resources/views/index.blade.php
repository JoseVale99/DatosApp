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
                                    <div class="w-100"></div>
                                    <div class="col">#</div>
                                    <div class="col">Char</div>

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
                            <div class="row justify-content-center">
                                <label class="col-sm-2 col-form-label mt-3 font-weight-bold">Datos de
                                    entrada</label>
                                <div class="col-md-auto mt-3">
                                    <input type="text" name="dato" class="form-control"
                                        placeholder="Ingrese un dato p. Ej., 1.234">
                                        
                                    </div>

                                    <div class="col-md-auto mt-3 ">
                                        <button type="submit" class="btn btn-outline-dark btn-block">Verificar</button>
                                    </div>
                                    
                                       
                                    
                                
                            </div>
                            <br>
                            <br>
                            @if (session('message'))  
                            <div class="alert alert-success rounded" role="alert">
                            @if (str_contains(Session::get('message'),"int"))
                                       <h5 class="font-weight-bold">El dato {{str_replace("int","",Session::get('message'))}} corresponde a un valor numerico de tipo entero (int) </h5>   
                                       <br>
                                       <h3 class="alert-heading">¿Qué podemos hacer con este tipo de dato?</h3>
                                        <hr>
                                        <h6>Se puede realizar las siguientes operaciones, por mencionar algunas:</h6>
                                        <ul>
                                            <li>Suma</li>
                                            <li>Resta</li>
                                            <li>Multiplicación</li>
                                            <li>División</li>
                                            <li>Potencia</li>
                                            <li>Raiz cuadrada</li>
                                        </ul>
                                        <br>
                                        <h4>Ejemplo en el lenguaje Python</h4>
                                        <h1 class="text-center">
                                            <img class="img-fluid" src="https://i.ibb.co/Tt02SMP/example-py.png" width="400">
                                        </h1>
                                    @elseif(str_contains(Session::get('message'),"float"))
                                    <h5 class="font-weight-bold">El dato {{str_replace("float","",Session::get('message'))}} corresponde a un valor numerico de tipo decimal (float) </h5>   
                                    <br>
                                    <h3 class="alert-heading">¿Qué podemos hacer con este tipo de dato?</h3>
                                     <hr>
                                     <h6>Se puede realizar las siguientes operaciones, por mencionar algunas:</h6>
                                     <ul>
                                         <li>Suma</li>
                                         <li>Resta</li>
                                         <li>Multiplicación</li>
                                         <li>División</li>
                                         <li>Potencia</li>
                                         <li>Raiz cuadrada</li>
                                     </ul>
                                     <br>
                                     <h4>Ejemplo en el lenguaje Python</h4>
                                     <h4 class="text-center"><img class="img-fluid" src="https://i.ibb.co/NSvmYV2/example-py.png" width="400"></h4>
                                  
                                     @elseif(str_contains(Session::get('message'),"boolean"))
                                     <h5 class="font-weight-bold">El dato {{str_replace("boolean","",Session::get('message'))}} corresponde a un valor de tipo booleano (boolean) </h5>   
                                     <br>
                                     <h6>Un valor booleano representa un valor de verdad; es decir, TRUE o FALSE. Una expresión booleana o predicado puede producir un valor de desconocido (unknown), que está representado por el valor nulo.</h6>
                                     <br>
                                     <h3 class="alert-heading">¿Qué podemos hacer con este tipo de dato?</h3>
                                      <hr>
                                      <h6>Se puede realizar las siguientes operaciones, por mencionar algunas:</h6>
                                      <ul>
                                          <li>Expresiones booleanas</li>
                                          <li>Comparar cadenas</li>
                                          <li>Comparar numeros</li>
                                          
                                      </ul>
                                      <br>
                                      <h4>Ejemplo en el lenguaje Python</h4>
                                      <h4 class="text-center"><img class="img-fluid" src="https://i.ibb.co/bsdFH76/example-py.png" width="400"></h4>
                                     
                          
                            </div>
                            @elseif(str_contains(Session::get('message'),"float"))
                            <h5 class="font-weight-bold">El dato {{str_replace("float","",Session::get('message'))}} corresponde a un valor numerico de tipo decimal (float) </h5>   
                            <br>
                            <h3 class="alert-heading">¿Qué podemos hacer con este tipo de dato?</h3>
                             <hr>
                             <h6>Se puede realizar las siguientes operaciones, por mencionar algunas:</h6>
                             <ul>
                                 <li>Suma</li>
                                 <li>Resta</li>
                                 <li>Multiplicación</li>
                                 <li>División</li>
                                 <li>Potencia</li>
                                 <li>Raiz cuadrada</li>
                             </ul>
                             <br>
                             <h4>Ejemplo en el lenguaje Python</h4>
                             <h4 class="text-center"><img class="img-fluid" src="https://i.ibb.co/NSvmYV2/example-py.png" width="400"></h4>
                          
                             @elseif(str_contains(Session::get('message'),"char"))
                             <h5 class="font-weight-bold">El dato {{str_replace("char","",Session::get('message'))}} corresponde a un valor de tipo char (Char) </h5>   
                             <br>
                             <h6> El tipo char se utiliza para representar caracteres individuales. Por tanto, el tipo char requiere sólo un byte de memoria. Cada tipo char tiene una interpretación como entero equivalente, de esta forma un char es una clase especial de entero pequeño. En la mayoría de los compiladores el entero tipo char puede tomar valores entre 0 y 255. También se puede utilizar datos unsigned char (con valores de 0 a 255) o datos signed char (con valores de -128 a 127).
                            </h6>
                             <br>
                             <h3 class="alert-heading">¿Qué podemos hacer con este tipo de dato?</h3>
                              <hr>
                              <h6>Se puede realizar las siguientes operaciones, por mencionar algunas:</h6>
                              <ul>
                                  <li>Declarar en una variable un sólo carácter</li>
                                  
                              </ul>
                              <br>
                              <h4>Ejemplo en el lenguaje Java</h4>
                              <h4 class="text-center"><img class="img-fluid" src="https://i.ibb.co/C2rGNdR/example-py.png" width="400"></h4>

                               @elseif(str_contains(Session::get('message'),"float"))
                            <h5 class="font-weight-bold">El dato {{str_replace("float","",Session::get('message'))}} corresponde a un valor numerico de tipo decimal (float) </h5>   
                            <br>
                            <h3 class="alert-heading">¿Qué podemos hacer con este tipo de dato?</h3>
                             <hr>
                             <h6>Se puede realizar las siguientes operaciones, por mencionar algunas:</h6>
                             <ul>
                                 <li>Suma</li>
                                 <li>Resta</li>
                                 <li>Multiplicación</li>
                                 <li>División</li>
                                 <li>Potencia</li>
                                 <li>Raiz cuadrada</li>
                             </ul>
                             <br>
                             <h4>Ejemplo en el lenguaje Python</h4>
                             <h4 class="text-center"><img class="img-fluid" src="https://i.ibb.co/NSvmYV2/example-py.png" width="400"></h4>
                          
                             @elseif(str_contains(Session::get('message'),"char"))
                             <h5 class="font-weight-bold">El dato {{str_replace("char","",Session::get('message'))}} corresponde a un valor de tipo char (Char) </h5>   
                             <br>
                             <h6> El tipo char se utiliza para representar caracteres individuales. Por tanto, el tipo char requiere sólo un byte de memoria. Cada tipo char tiene una interpretación como entero equivalente, de esta forma un char es una clase especial de entero pequeño. En la mayoría de los compiladores el entero tipo char puede tomar valores entre 0 y 255. También se puede utilizar datos unsigned char (con valores de 0 a 255) o datos signed char (con valores de -128 a 127).
                            </h6>
                             <br>
                             <h3 class="alert-heading">¿Qué podemos hacer con este tipo de dato?</h3>
                              <hr>
                              <h6>Se puede realizar las siguientes operaciones, por mencionar algunas:</h6>
                              <ul>
                                  <li>Declarar en una variable un sólo carácter</li>
                                  
                              </ul>
                              <br>
                              <h4>Ejemplo en el lenguaje Java</h4>
                              <h4 class="text-center"><img class="img-fluid" src="https://i.ibb.co/C2rGNdR/example-py.png" width="400"></h4>

                              @else
                             <h5 class="font-weight-bold">El dato {{str_replace("str","",Session::get('message'))}} corresponde a un valor de tipo cadena (string) </h5>   
                             <br>
                             <h6> Contiene secuencias de puntos de código de 16 bits (2 bytes) sin signo que oscilan entre 0 y 65535. Cada punto de código, o código de caracteres, representa un único carácter Unicode. Una cadena puede contener entre 0 y aproximadamente dos mil millones (2 ^ 31) caracteres Unicode.
                            </h6>
                             <br>
                             <h3 class="alert-heading">¿Qué podemos hacer con este tipo de dato?</h3>
                              <hr>
                              <h6>Se puede realizar las siguientes operaciones, por mencionar algunas:</h6>
                              <ul>
                                  <li>representar y manipular una secuencia de caracteres.</li>
                                  
                              </ul>
                              <br>
                              <h4>Ejemplo en el lenguaje Python</h4>
                              <h4 class="text-center"><img class="img-fluid" src="https://i.ibb.co/pf5ZCVt/example-py.png" width="400"></h4>
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
