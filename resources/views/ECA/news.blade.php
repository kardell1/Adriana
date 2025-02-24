@extends('layout.plantilla')

@section('title', 'noticias')
@section('contenido')

 <!-- news section -->

<!-- news section -->
<section class="news_section layout_padding">
    <div class="container">
      <div class="d-flex flex-column align-items-end">
        <div class="custom_heading-container">
          
          <h2>NOTICIAS</h2>
        </div>
        <p>
          Mantente al día con las últimas novedades de nuestra Escuela de Cine y Artes Visuales. Aquí compartimos los logros, eventos, y noticias más destacadas de nuestra comunidad académica y artística.
        </p>
      </div>
      <div class="row">

        @if ($contenidos->isNotEmpty())
        @foreach ($contenidos as $contenido)
        <div class="col-md-4">
          <div class="box">
            <div class="img-box">
              <img src="{{ htmlspecialchars($contenido->archivo)}}">
            </div>
           
            <div class="detail-box">
              <h4>{{ htmlspecialchars($contenido->nombre) }}</h4>
              <p><strong>Descripción:</strong> {{ htmlspecialchars($contenido->descripcion)}}</p>
              <div>
                <a class="nav-link" href="  {{ htmlspecialchars($contenido->link)}}">Leer más</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        @else
            <!-- Mostramos un mensaje si no hay contenidos -->
            <p>No hay noticias disponibles actualmente.</p>
        @endif
    </div>
    <!-- Fin de la fila del portafolio -->
</div>
</section>
  <!-- end news section -->
@endsection 