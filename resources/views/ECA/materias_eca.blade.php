@extends('layout.plantilla')

@section('title', 'materias')
@section('contenido')


  
  
    <!-- taller section -->
  
    <section class="service_section layout_padding">
      <div class="container">
          <div class="custom_heading-container">
            
            <h2>
              CARRERA REALIZACIÓN  DE CINEMATOGRAFÍA Y ARTES AUDIOVISUALES

            </h2>
  
          </div>
        
        </div>
      
      
  
  
      <table class="table table-striped m-6">
        <thead>
            <tr class="">
                <td colspan="3">PRIMER AÑO</td>
            </tr>
            <tr>
                <th>CODIGO</th>
                <th>ASIGNATURA</th>
                <th>HORAS (SEMANA)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($materias_curso1 as $materia)
                <tr>
                    <td style="color: white;" >{{ $materia->cod_materia }}</td>
                    <td >
                        <a href="{{ route('materias.show', $materia->cod_materia) }}">
                            {{ $materia->nombre }}
                        </a>
                        
                    </td>
                    <td style="color: white;">{{ $materia->horas }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <table class="table table-striped m-6">
        <thead>
            <tr class="">
                <td colspan="3">SEGUNDO AÑO</td>
            </tr>
            <tr>
                <th>CODIGO</th>
                <th>ASIGNATURA</th>
                <th>HORAS (SEMANA)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($materias_curso2 as $materia)
                <tr>
                    <td style="color: white;" >{{ $materia->cod_materia }}</td>
                    <td >
                        <a href="{{ route('materias.show', $materia->cod_materia) }}">
                            {{ $materia->nombre }}
                        </a>
                    </td>
                    <td style="color: white;">{{ $materia->horas }}</td>
                
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <table class="table table-striped m-6">
        <thead>
            <tr class="">
                <td colspan="3">TERCER AÑO</td>
            </tr>
            <tr>
                <th>CODIGO</th>
                <th>ASIGNATURA</th>
                <th>HORAS (SEMANA)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($materias_curso3 as $materia)
                <tr>
                    <td style="color: white;" >{{ $materia->cod_materia }}</td>
                    <td >
                    <a href="{{ route('materias.show', $materia->cod_materia) }}">
                            {{ $materia->nombre }}
                        </a>
                    </td>
                    <td style="color: white;">{{ $materia->horas }}</td>
                
                </tr>
            @endforeach
        </tbody>
    </table>
    
    
  
  
  
    </section>
  
    <!-- end taller section -->
@endsection 