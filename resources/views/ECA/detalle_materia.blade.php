@extends('layout.plantilla')

@section('title', 'materias')
@section('contenido')

<section class="about_section">
    <div class="container">
      <div class="custom_heading-container">
        <h2>Información de la Materia</h2>
    </div>
    
    <h2>{{ $materia->nombre }}</h2>

    <div class="custom_heading-container" style="white-space: pre-line;">
        <p>{{ $materia->descripcion }}</p>
   

    <div class="col-md-6">
        <div class="img-box">
            @if ($materia->foto)
                <img src="{{ asset('uploads/' . $materia->foto) }}" alt="Foto de {{ $materia->nombre }}">
            @endif 
        </div>
      
    </div>
</div> 
</div>
  </section>
@endsection

 