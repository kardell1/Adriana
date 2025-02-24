@extends('layout.plantilla')

@section('title', 'docentes')
@section('contenido')

<!-- portfolio section -->
<section class="service_section">
    <div class="container">
      <div class="custom_heading-container">
        <h2>Docentes</h2>
      </div>
      <p>
        Conoce a los docentes de nuestra Escuela de Cine y Artes Visuales, expertos en diversas áreas del cine y el arte visual.
      </p>


      <!-- Fila para los contenidos de los docentes -->
      <div class="row">

        <table class="table table-striped m-6" id="table_id">
         
          @foreach ($docentes as $docente)
          <thead>
          <tr class="bg-ligth">
              <td style="text-align: center; vertical-align: middle;">{{ $docente->nombre }} {{ $docente->apaterno }} {{ $docente->amaterno }}</td>
             
              <td>
                  <a href="{{ route('docentes.show', ['apaterno' => $docente->apaterno, 'amaterno' => $docente->amaterno]) }}">
                      Perfil
                  </a>
              </td>
          </tr>
          @endforeach
      </table>
      
      
    </div>
  </section>
@endsection 