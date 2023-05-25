{{-- <form action="{{ route('contactUs.store') }}" method="POST">
        @csrf

        <div>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" >
        <br>
        @error('nombre')
            <small style="color:red">{{$message}}</small>
        @enderror
        </div>

        <div>
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" >
        <br>
        @error('telefono')
            <small style="color:red">{{$message}}</small>
        @enderror
        </div>

        <div>
        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" >
        @error('correo')
        <small style="color:red">{{$message}}</small>
    @enderror
        </div>

        <div>
        <label for="experiencia">¿Cuánto tiempo tienes de experiencia en área de calidad?</label>
        <select id="experiencia" name="experiencia" >
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
        <label for="puestos">¿Qué puestos has tenido en áreas de calidad?</label>
        <textarea id="puestos" name="puestos" ></textarea>
        @error('puestos')
            <small style="color:red">{{$message}}</small>
        @enderror
        </div>

        <div>
        <label for="ingles">¿Qué nivel de inglés manejas?</label>
        <select id="ingles" name="ingles" >
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

        <button type="submit">Enviar</button>
</form>

@if (session('info'))
    <script>
        alert("{{ session('info') }}");
    </script>
@endif
 --}}
