
        
        @extends('layout.plantilla')

        @section('title', 'docentes')
        @section('contenido')
        
        <!-- portfolio section -->
        <section class="about_section">
            <div class="container">
              <div class="custom_heading-container">
                <h2>Información del Docente</h2>
              </div>
             
              <h2> {{ $docente->nombre }} {{ $docente->apaterno }} {{ $docente->amaterno }}</h2>
              
              <!-- Fila para los contenidos de los docentes -->
              <div class="custom_heading-container" style="white-space: pre-line;">
        
                <p> {{ $docente->descripcion }}</p>

                     
        <div class="col-md-6">
            <div class="img-box">
                @if ($docente->foto)
                    <img src="{{ asset('uploads/' . $docente->foto) }}" alt="Foto de {{ $docente->nombre }}">
                @endif 
            </div>
              
            </div>
        </div> 
    </div>
          </section>
        @endsection     