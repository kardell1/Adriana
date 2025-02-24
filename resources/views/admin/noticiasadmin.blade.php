@extends('layout.app')

{{-- Customize layout sections --}}

@section('subtitle', 'NOTICIAS')
@section('content_header_title', 'Administrar')
@section('content_header_subtitle', 'Noticias de la ECA')

{{-- Content body: main page content --}}

@section('content_body')
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
    <p>En esta seccion sube las nuevas noticias de la Escuela de Cine y Artes Visulales.</p>
   
    {{route('contenido.store')}} {{--Para ver donde apunta la ruta--}}
    <form action="{{route('contenido.store')}}" method="POST"enctype="multipart/form-data">{{--Creacion del 
    formulario, con la Ruta y su respectivo método POST--}}
    @csrf {{-- Token del formulario --}}
    
        
    <label>Código del contenido (1):</label>
    <input type="text" name="cod_contenido" value="1" readonly>

    <label>Nombre:</label>
    <input type="text" name="nombre" required>

    <label>Archivo:</label>
    

<input type="file" name="archivo" accept="image/*,video/*" required>

    <label>Descripción:</label>
    <input type="text" name="descripcion" required>

    <label>Link:</label>
    <input type="text" name="link">

    

 
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