@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/medium-editor/5.23.3/css/medium-editor.min.css" integrity="sha512-zYqhQjtcNMt8/h4RJallhYRev/et7+k/HDyry20li5fWSJYSExP9O07Ung28MUuXDneIFg0f2/U3HJZWsTNAiw==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/basic.min.css" integrity="sha512-MeagJSJBgWB9n+Sggsr/vKMRFJWs+OUphiDV7TJiYu+TNQD9RtVJaPDYP8hA/PAjwRnkdvU+NsTncYTKlltgiw==" crossorigin="anonymous" />
@endsection

@section('navegacion')
    @include('ui.adminnav')
@endsection

@section('content')
    <h1 class="mt-10 text-2xl text-center">Editar Vacante {{ $vacante->titulo }}</h1>

    <form action="{{ route('vacantes.update', ['vacante' => $vacante->id]) }}" method="POST" class="mx-auto max-w-lg my-10">
        @csrf
        @method('PUT')
        <div class="mb-5">
            <label for="titulo" class="block text-gray-700 text-sm mb-2">Título Vacante:</label>

            <input type="text" id="titulo" name="titulo" class="p-3 bg-gray-100 form-input rounded w-full" placeholder="Titulo de la vacante" value="{{ $vacante->titulo }}">

            @error('titulo')
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
                    <strong class="font-bold">Error!</strong>
                    <span class="block">{{ $message }}</span>    
                </div> 
            @enderror
        </div>

        <div class="mb-5">
            <label for="categoria" class="block text-gray-700 text-sm mb-2">Categoría:</label>

            <select name="categoria" id="categoria" class="w-full block appearance-none border border-gray-200 text-gray-700 rounded p-3 bg-gray-100 focus:outline-none focus:bg-white focus:border-gray-500">
                <option disabled selected>-- Seleccionar --</option>

                @foreach ($categorias as $categoria)
                <option {{ $vacante->categoria_id == $categoria->id ? 'selected' : '' }} value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                @endforeach
            </select>

            @error('categoria')
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
                    <strong class="font-bold">Error!</strong>
                    <span class="block">{{ $message }}</span>    
                </div> 
            @enderror
        </div>

        <div class="mb-5">
            <label for="experiencia" class="block text-gray-700 text-sm mb-2">Experiencia:</label>

            <select name="experiencia" id="experiencia" class="w-full block appearance-none border border-gray-200 text-gray-700 rounded p-3 bg-gray-100 focus:outline-none focus:bg-white focus:border-gray-500">
                <option disabled selected>-- Seleccionar --</option>

                @foreach ($experiencias as $experiencia)
                <option {{ $vacante->experiencia_id == $experiencia->id ? 'selected' : '' }} value="{{ $experiencia->id }}">{{ $experiencia->nombre }}</option>
                @endforeach
            </select>

            @error('experiencia')
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
                    <strong class="font-bold">Error!</strong>
                    <span class="block">{{ $message }}</span>    
                </div> 
            @enderror
        </div>

        <div class="mb-5">
            <label for="ubicacion" class="block text-gray-700 text-sm mb-2">Ubicación:</label>

            <select name="ubicacion" id="ubicacion" class="w-full block appearance-none border border-gray-200 text-gray-700 rounded p-3 bg-gray-100 focus:outline-none focus:bg-white focus:border-gray-500">
                <option disabled selected>-- Seleccionar --</option>

                @foreach ($ubicaciones as $ubicacion)
                <option {{ $vacante->ubicacion_id == $ubicacion->id ? 'selected' : '' }}  value="{{ $ubicacion->id }}">{{ $ubicacion->nombre }}</option>
                @endforeach
            </select>

            @error('ubicacion')
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
                    <strong class="font-bold">Error!</strong>
                    <span class="block">{{ $message }}</span>    
                </div> 
            @enderror
        </div>

        <div class="mb-5">
            <label for="salario" class="block text-gray-700 text-sm mb-2">Salario:</label>

            <select name="salario" id="salario" class="w-full block appearance-none border border-gray-200 text-gray-700 rounded p-3 bg-gray-100 focus:outline-none focus:bg-white focus:border-gray-500">
                <option disabled selected>-- Seleccionar --</option>

                @foreach ($salarios as $salario)
                <option {{ $vacante->salario_id == $salario->id ? 'selected' : '' }}  value="{{ $salario->id }}">{{ $salario->nombre }}</option>
                @endforeach
            </select>

            @error('salario')
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
                    <strong class="font-bold">Error!</strong>
                    <span class="block">{{ $message }}</span>    
                </div> 
            @enderror
        </div>

        <div class="mb-5">
            <label for="descripcion" class="block text-gray-700 text-sm mb-2">Descripción del Puesto:</label>

            <div class="editable p-3 bg-gray-100 form-input w-full rounded text-gray-700"></div>

            <input type="hidden" name="descripcion" id="descripcion" value="{{ $vacante->descripcion }}">

            @error('descripcion')
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
                    <strong class="font-bold">Error!</strong>
                    <span class="block">{{ $message }}</span>    
                </div> 
            @enderror
        </div>

        <div class="mb-5">
            <label for="imagen" class="block text-gray-700 text-sm mb-2">Imagen vacante:</label>

            <div id="dropzoneDevJobs" class="dropzone p-3 bg-gray-100 form-input w-full rounded text-gray-700"></div>

            <input type="hidden" name="imagen" id="imagen" value="{{ $vacante->imagen }}">

            @error('imagen')
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
                    <strong class="font-bold">Error!</strong>
                    <span class="block">{{ $message }}</span>    
                </div> 
            @enderror

            <p id="error"></p>
        </div>

        <div class="mb-5">
            <label for="skills" class="block text-gray-700 text-sm mb-5">Habilidades y conocimientos: <span class="text-xs">(Elige al menos 3)</span> </label>

            @php
                $skills = ['HTML5', 'CSS3', 'CSSGrid', 'Flexbox', 'JavaScript', 'jQuery', 'Node', 'Angular', 'VueJS', 'ReactJS', 'React Hooks', 'Redux', 'Apollo', 'GraphQL', 'TypeScript', 'PHP', 'Laravel', 'Symfony', 'Python', 'Django', 'ORM', 'Sequelize', 'Mongoose', 'SQL', 'MVC', 'SASS', 'WordPress', 'Express', 'Deno', 'React Native', 'Flutter', 'MobX', 'C#', 'Ruby on Rails']
            @endphp

            <lista-skills :skills="{{ json_encode($skills) }}" :oldskills="{{ json_encode( $vacante->skills ) }}"></lista-skills>

            @error('skills')
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
                    <strong class="font-bold">Error!</strong>
                    <span class="block">{{ $message }}</span>    
                </div> 
            @enderror
        </div>

        <button type="submit" class="bg-green-500 w-full hover:bg-green-600 text-gray-100 font-bold p-3 focus:outline focus:shadow-outline uppercase">Publicar vacante</button>
    </form>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/medium-editor/5.23.3/js/medium-editor.min.js" integrity="sha512-5D/0tAVbq1D3ZAzbxOnvpLt7Jl/n8m/YGASscHTNYsBvTcJnrYNiDIJm6We0RPJCpFJWowOPNz9ZJx7Ei+yFiA==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js" integrity="sha512-9WciDs0XP20sojTJ9E7mChDXy6pcO0qHpwbEJID1YVavz2H6QBz5eLoDD8lseZOb2yGT8xDNIV7HIe1ZbuiDWg==" crossorigin="anonymous"></script>
<script>

    Dropzone.autoDiscover = false;
    document.addEventListener('DOMContentLoaded', () => {
        const editor = new MediumEditor('.editable', {
            toolbar : {
                buttons: ['bold', 'italic', 'underline', 'quote', 'anchor', 'justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull', 'orderedlist', 'unorderedlist', 'h2', 'h3'],
                static: true,
                sticky: true
            },
            placeholder : {
                text: 'Información de la vacante...'
            }
        });

        //Agrega al input hidden lo que el usuario escribe con medium editor
        editor.subscribe('editableInput', function(eventObj, editable) {
            const contenido = editor.getContent();
            document.querySelector('#descripcion').value = contenido;
        });

        //LLena el editor con el contenido del input hidden
        editor.setContent( document.querySelector('#descripcion').value );


        //Dropzone
        const dropzoneDevJobs = new Dropzone('#dropzoneDevJobs', {
            url: "/vacantes/imagen",
            dictDefaultMessage: 'Sube aquí tu archivo',
            acceptedFiles: ".png,.jpg,.jpeg,.gif,.bmp",
            addRemoveLinks: true,
            dictRemoveFile: 'Borrar Archivo',
            maxFiles: 1,
            headers: {
                'X-CSRF-TOKEN' : document.querySelector('meta[name=csrf-token]').content
            },
            init: function() {
                if(document.querySelector('#imagen').value.trim()) {
                    let imagenPublicada = {};
                    imagenPublicada.size = 1234;
                    imagenPublicada.name = document.querySelector('#imagen').value;

                    this.options.addedfile.call(this, imagenPublicada);
                    this.options.addedfile.thumbnail(this, imagenPublicada, `/storage/vacantes/{$imagenPublicada.name}`);

                    imagenPublicada.previewElement.classList.add('dz-sucess');
                    imagenPublicada.previewElement.classList.add('dz-complete');
                }
            },
            success: function(file, response) {     
                document.querySelector('#error').textContent = '';
                document.querySelector('#imagen').value = response.img_status;
                file.nombreServidor = response.img_status;
            },
            maxfilesexceeded: function(file, response) {
                file.previewElement.parentNode.removeChild(file.previewElement);
                if( this.files[1] != null ) {
                    this.removeFile(this.files[0]);
                    this.addFile(file);
                }
            },
            removedFile: function(file, response) {
                params = {
                    imagen: file.nombreServidor ?? document.querySelector('#imagen').value
                }

                axios.post('/vacantes/imagen-borrar', params)
                    .then(respuesta => console.log(respuesta))
            } 
        });
    })
</script>
@endsection