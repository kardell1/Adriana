@extends('layout.plantilla')

@section('title', 'service')
@section('contenido')
<!-- service section -->

<section class="service_section layout_padding">
    <div class="container">
      <div class="d-flex flex-column align-items-end">
        <div class="custom_heading-container">
          
          <h2>Servicios</h2>
        </div>
        <p>
          Nuestra Escuela de Cine y Artes Visuales ofrece un enfoque educativo práctico y dinámico, centrado en dos pilares fundamentales: clases regulares y talleres especializados.
        </p>
      </div>
    </div>
    <div class="container">
      <div class="service_container layout_padding2">
        <a class="nav-link" href="materias_eca">
          <div class="box">
            <div class="img-box">
              <img src="images/s-4.png" alt="" class="img-1">
              <img src="images/s4-blue.png" alt="" class="img-2">
            </div>
            <div class="name">
              <h6>
                CLASES REGULARES
              </h6>
            </div>
          </div>
        </a>
        <a class="nav-link" href="talleres_eca">
          <div class="box">
            <div class="img-box">
              <img src="images/s-2.png" alt="" class="img-1">
              <img src="images/s2-blue.png" alt="" class="img-2">
            </div>
            <div class="name">
              <h6>
                TALLERES
              </h6>
            </div>
          </div>
        </a>
        <a class="nav-link" href="docentes_eca">
          <div class="box">
            <div class="img-box">
              <img src="images/s-3.png" alt="" class="img-1">
              <img src="images/s3-blue.png" alt="" class="img-2">
            </div>
            <div class="name">
              <h6>
                PLANTEL DOCENTE
              </h6>
            </div>
          </div>
        </a>
        
        
      </div>
    </div>
   
  </section>

  <!-- end service section -->
@endsection 