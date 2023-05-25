@extends('layouts.homelayouts')

@section('content')
<div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                <div class="max-w-md mx-auto">
                    <div class="flex items-center space-x-5">
                        <div class="h-14 w-14 bg-yellow-200 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono">i</div>
                        <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                        <h2 class="leading-relaxed">CONTACTO</h2>
                        <p class="text-sm text-gray-500 font-normal leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <form action="{{ route('contactUs.store') }}" method="POST">
                        @csrf
                        <div>
                            <label for="nombre" class="leading-loose">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                            <br>
                            @error('nombre')
                            <small style="color:red">{{$message}}</small>
                            @enderror
                        </div>

                        <div>
                            <label for="telefono" class="leading-loose">Teléfono:</label>
                            <input type="text" id="telefono" name="telefono" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                            <br>
                            @error('telefono')
                            <small style="color:red">{{$message}}</small>
                            @enderror
                        </div>

                        <div>
                            <label for="correo" class="leading-loose">Correo:</label>
                            <input type="email" id="correo" name="correo" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                            @error('correo')
                            <small style="color:red">{{$message}}</small>
                            @enderror
                        </div>

                        <div>
                            <label for="experiencia" class="leading-loose">¿Cuánto tiempo tienes de experiencia en área de calidad?</label>
                            <select id="experiencia" name="experiencia" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                <option value="">Selecciona una opción</option>
                                <option value="1">No tengo experiencia</option>
                                <option value="2">1 a 7 meses</option>
                                <option value="3">8 meses a 1 año y medio</option>
                                <option value="4">Más de 1 año y medio</option>
                            </select>
                            @error('experiencia')
                            <small style="color:red">{{$message}}</small>
                            @enderror
                        </div>

                        <div>
                            <label for="puestos" class="leading-loose">¿Qué puestos has tenido en áreas de calidad?</label>
                            <textarea id="puestos" name="puestos" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"></textarea>
                            @error('puestos')
                            <small style="color:red">{{$message}}</small>
                            @enderror
                        </div>

                        <div>
                            <label for="ingles" class="leading-loose">¿Qué nivel de inglés manejas?</label>
                            <select id="ingles" name="ingles" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                <option value="">Selecciona una opción</option>
                                <option value="1">Principiante</option>
                                <option value="2">Intermedio Bajo</option>
                                <option value="3">Intermedio Avanzado</option>
                                <option value="4">Avanzado</option>
                            </select>
                            @error('ingles')
                            <small style="color:red">{{$message}}</small>
                            @enderror
                        </div>

                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-4">Enviar</button>
                    </form>
                    @if (session('info'))
                        <script>
                            alert("{{ session('info') }}");
                        </script>
                    @endif
                </div>
            </div>
        </div>
</div>
@endsection
