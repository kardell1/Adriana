@extends('layout.plantilla')

@section('title', 'cursos')
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
  
  
    <!-- service section -->
  
    <section class="about_section layout_padding">
      <div class="container"> 
          <div class="custom_heading-container">
              
              <h2>
                CLASES REGULARES
              </h2>
            </div>
  
  
  
  
  
            <table class="table table-striped m-6" id="table_id">
         
              <thead>
                  <tr class="bg-ligth">
                      
                      <th>PRIMER AÑO</th>
                      <th></th>
                      <th></th>
                  </tr>
                  <tr>
                      <th>CODIGO</th>
                      <th>ASISNATURA</th>
                      <th>HORAS (SEMANA)</th>
                  </tr>
                  <tr>
                      <th>GUI-101</th>
                      <th>GUION I</th>
                      <th>4</th>
                  </tr>
                  <tr>
                      <th>REL-102	</th>
                      <th>REALIZACIÓN I</th>
                      <th>4</th>
                  </tr>
                  <tr>
                      <th>PRA-103	</th>
                      <th>PRODUCCIÓN AUDIOVISUAL I</th>
                      <th>4</th>
                  </tr>
  
                  <tr>
                      <th>FPC-104	</th>
                      <th>FOTOGRAFÍA PARA CINE I</th>
                      <th>4</th>
                  </tr>
                  <tr>
                      <th>SON-105	</th>
                      <th>SONIDO I</th>
                      <th>4</th>
                  </tr>
                  <tr>
                      <th>MON-106	</th>
                      <th>MONTAJE I</th>
                      <th>2</th>
                  </tr>
                  <tr>
                      <th>PRL-107	</th>
                      <th>PRACTICA DE LABORATORIO I</th>
                      <th>4</th>
                  </tr>
                  <tr>
                      <th>HIA-108	</th>
                      <th>HISTORIA DEL ARTE I</th>
                      <th>2</th>
                  </tr>
  
                  <tr>
                      <th>PEC-109	</th>
                      <th>PENSAMIENTO CRITICO I</th>
                      <th>2</th>
                  </tr>
              </thead>
                   
          </table>
  
  
  
  
  
  
  
  
  
  
          <table class="table table-striped m-6" id="table_id">
         
              <thead>
                  <tr class="bg-ligth">
                     
                      <th>SEGUNDO AÑO</th>
                      <th></th>
                      <th></th>
                      <th></th>
                  </tr>
                  <tr>
                      <th>CODIGO</th>
                      <th>ASISNATURA</th>
                      <th>HORAS (SEMANA)</th>
                      <th>PRERREQUISITO</th>
                  </tr>
                  <tr>
                      <th>GUI-201</th>
                      <th>GUION II</th>
                      <th>4</th>
                      <th>GUI-101</th>
                  </tr>
                  <tr>
                      <th>REL-202	</th>
                      <th>REALIZACIÓN II</th>
                      <th>4</th>
                      <th>REL-102	</th>
                  </tr>
                  <tr>
                      <th>PRA-203	</th>
                      <th>PRODUCCIÓN AUDIOVISUAL II</th>
                      <th>4</th>
                      <th>PRA-103	</th>
                  </tr>
  
                  <tr>
                      <th>FPC-204	</th>
                      <th>FOTOGRAFÍA PARA CINE II</th>
                      <th>4</th>
                      <th>FPC-104	</th>
                  </tr>
                  <tr>
                      <th>SON-205	</th>
                      <th>SONIDO II</th>
                      <th>4</th>
                      <th>SON-105	</th>
                  </tr>
                  <tr>
                      <th>MON-206	</th>
                      <th>MONTAJE II</th>
                      <th>2</th>
                      <th>MON-106	</th>
                  </tr>
                  <tr>
                      <th>PRC-207	</th>
                      <th>PRACTICA DE CAMPO</th>
                      <th>4</th>
                      <th>PRL-107	</th>
                  </tr>
                  <tr>
                      <th>HAC-208	</th>
                      <th>HISTORIA DEL ARTE Y CINE II</th>
                      <th>2</th>
                      <th>HIA-108	</th>
                  </tr>
  
                  <tr>
                      <th>CIS-209	</th>
                      <th>CINE Y SOCIEDAD</th>
                      <th>2</th>
                      <th>PEC-109	</th>
                  </tr>
              </thead>
                   
          </table>
  
  
  
  
  
          <table class="table table-striped m-6" id="table_id">
         
              <thead>
                  <tr class="bg-ligth">
                     
                      <th>TERCER AÑO</th>
                      <th></th>
                      <th></th>
                      <th></th>
                  </tr>
                  <tr>
                      <th>CODIGO</th>
                      <th>ASISNATURA</th>
                      <th>HORAS (SEMANA)</th>
                      <th>PRERREQUISITO</th>
                  </tr>
                  <tr>
                      <th>GUI-301</th>
                      <th>GUION III</th>
                      <th>4</th>
                      <th>GUI-201</th>
                  </tr>
                  <tr>
                      <th>REL-302	</th>
                      <th>REALIZACIÓN III</th>
                      <th>4</th>
                      <th>REL-202	</th>
                  </tr>
                  <tr>
                      <th>DIE-303	</th>
                      <th>DISTRIBUCION Y EXHIBICION</th>
                      <th>4</th>
                      <th>PRA-203	</th>
                  </tr>
  
                  <tr>
                      <th>FPC-304	</th>
                      <th>FOTOGRAFÍA PARA CINE III</th>
                      <th>4</th>
                      <th>FPC-204	</th>
                  </tr>
                  <tr>
                      <th>SON-305	</th>
                      <th>SONIDO III</th>
                      <th>4</th>
                      <th>SON-205	</th>
                  </tr>
                  <tr>
                      <th>MON-306	</th>
                      <th>MONTAJE III</th>
                      <th>2</th>
                      <th>MON-206	</th>
                  </tr>
                  <tr>
                      <th>NUL-207	</th>
                      <th>NUEVOS LENGUAJES</th>
                      <th>4</th>
                      <th>HIC-107	</th>
                  </tr>
                  <tr>
                      <th>PRG-308	</th>
                      <th>PRACTICAS GUIADAS</th>
                      <th>4</th>
                      <th>PRC-208	</th>
                  </tr>
  
              </thead>
                   
          </table>
  
         <!-- <div>
              <a class="nav-link" href="CURSOS1.html">
               PRIMER AÑO
              </a>
            </div>-->
      </div>
     
    </section>
  
    <!-- end service section -->
  
@endsection 