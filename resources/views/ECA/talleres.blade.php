@extends('layout.plantilla')

@section('title', 'talleres')
@section('contenido')

<style>
    /* Estilo para el fondo y el texto de los encabezados de las tablas */
    table thead tr {
        background-color: #1a1a3d; /* Azul oscuro */
        color: white;
    }
    
    /* Estilo para las celdas alternadas de las filas del cuerpo de la tabla */
    table tbody tr:nth-child(odd) {
        background-color: #f2f2f2; /* Gris claro para las filas alternadas */
    }
  
    table tbody tr:nth-child(even) {
        background-color: #e6e6ff; /* Azul claro para filas alternadas */
    }
  
    /* Estilo para los enlaces */
    a.nav-link {
        color: #1a1a3d;
        font-weight: bold;
    }
  
    a.nav-link:hover {
        color: #1a1a66;
        text-decoration: underline;
    }
  .bg-ligth th {
          text-align: center;
          font-weight: bold;
      }
  </style>
  
  
    <!-- taller section -->
  
    <section class="about_section layout_padding">
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
         
        <thead>
            <tr class="bg-ligth">
               
                <th>TALLER DE ACTUACION</th>
               
            </tr>
            <tr class="bg-ligth">
                <th>TALLER DE MAQUILLAJE</th>
                
            </tr>
            <tr class="bg-ligth">
                <th>TALLER DE VESTUARIO</th>
                
            </tr>
            <tr class="bg-ligth">
                <th>TALLER DE DIRECCION DE ARTE</th>
                
            </tr>
            <tr class="bg-ligth">
                <th>TALLER DE ESTETICA	</th>
               
            </tr>
  
            <tr class="bg-ligth" >
                <th>TALLER DE DIRECCION DE ACTORES	</th>
            
            </tr>
            <tr class="bg-ligth">
                <th>TALLER DE CONTINUIDAD	</th>
               
            </tr>
            <tr class="bg-ligth">
                <th>TALLER DE ILUMINACION</th>
                
            </tr>
            <tr class="bg-ligth">
                <th>TALLER INTERNACIONAL DE DOCUMENTAL	</th>
              
            </tr>
            <tr class="bg-ligth">
                <th>TALLER DE SEMIOTICA</th>
            
            </tr>
  
            <tr class="bg-ligth">
              <th>TALLER DE CASTING</th>
          
          </tr>
  
        </thead>
             
    </table>
  
  
  
  
    </section>
  
    <!-- end taller section -->
@endsection 