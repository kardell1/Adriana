@extends('layout.app')

{{-- Customize layout sections --}}

@section('subtitle', 'TALLERES')
@section('content_header_title', 'Administrar')
@section('content_header_subtitle', 'Talleres')

{{-- Content body: main page content --}}

@section('content_body')
    <p>En esta seccion agrega nuevos talleres de la Escuela de cine y Artes Visuales .</p>
    <style>
        
    
        .form-container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
    
        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
        }
    
        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    
        button {
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 15px;
        }
    
        button:hover {
            background: #0056b3;
        }
    </style>
       
       
        {{route('taller.store')}} {{--Para ver donde apunta la ruta--}}
        <form action="{{route('taller.store')}}" method="POST"enctype="multipart/form-data">{{--Creacion del 
        formulario, con la Ruta y su respectivo método POST--}}
        @csrf {{-- Token del formulario --}}
        
            
        <label>carrera (1):</label>
        <input type="text" name="id_carrera" value="1" readonly>
    
        <label>CI Docente:</label>
<select name="ci_docente" required>
    <option value="">Seleccione un docente</option>
    @foreach($docentes as $docente)
        <option value="{{ $docente->ci_docente }}">{{ $docente->nombre }}</option>
    @endforeach
</select>

        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <label>Descripción:</label>
        <input type="text" name="descripcion" required>
        <label>Foto:</label>
        
    
        <input type="file" name="foto" accept="image/*,video/*" required>
        
    
     
    <button type="submit">Guardar</button>
            </form>

            


@stop

{{-- Push extra CSS --}}

@push('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endpush

{{-- Push extra scripts --}}

@push('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@endpush