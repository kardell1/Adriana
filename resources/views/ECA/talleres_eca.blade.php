@extends('layout.plantilla')

@section('title', 'talleres')
@section('contenido')


  
  
    <!-- taller section -->
  
    <section class="service_section layout_padding">
      <div class="container">
        <div class="d-flex flex-column align-items-end">
          <div class="custom_heading-container">
            
            <h2>
              TALLERES EXTRACURRICULARES
  
  
              
            </h2>
  
          </div>
        
        </div>
      </div>
      
  
  
      <table class="table table-striped m-6" id="table_id">
        
        @foreach($talleres as $taller)
        <thead>
            <tr class="bg-ligth">
                <td style="text-align: center; vertical-align: middle;">
                    <a href="{{ route('talleres.show', $taller->id_taller) }}">
                        {{ $taller->nombre }}
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
    
  
  
  
    </section>
  
    <!-- end taller section -->
@endsection 