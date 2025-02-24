
        
        @extends('layout.plantilla')

        @section('title', 'talleres')
        @section('contenido')
        
        <!-- portfolio section -->
        <section class="about_section">
            <div class="container">
              <div class="custom_heading-container">
                <h2>Información del Taller</h2>
              </div>
             
              <h2> {{ $taller->nombre }}</h2>
              
              <!-- Fila para los contenidos de los docentes -->
              <div class="custom_heading-container" style="white-space: pre-line;">
        
                <p> {{ $taller->descripcion }}</p>

                  
        <div class="col-md-6">
            <div class="img-box">
                @if ($taller->foto)
                    <img src="{{ asset('uploads/' . $taller->foto) }}" alt="Foto de {{ $taller->nombre }}">
                @endif 
            </div>
              
            </div>
        </div> 
    </div>
          </section>
        @endsection     