@extends('layout.plantilla')

@section('title', 'portafolio')
@section('contenido')
<!-- portfolio section -->
<section class="news_section layout_padding">
    <div class="container">

        <div class="custom_heading-container">
            <h2>Portafolio</h2>
        </div>
        <p>
            Bienvenido al portafolio de nuestra Escuela de Cine y Artes Visuales, un espacio donde la creatividad y la técnica se encuentran para formar a la próxima generación de artistas y cineastas.
        </p>

        <!-- Fila para los contenidos del portafolio -->
        <div class="row">
            @if ($contenidos->isNotEmpty())
            @foreach ($contenidos as $contenido)
            <div class="col-md-4">
                <div class="video-box">
                    <video controls poster="{{ htmlspecialchars($contenido->archivo) }}">
                        <source src="{{ htmlspecialchars($contenido->archivo) }}" type="video/mp4">
                        Tu navegador no soporta la etiqueta de video.
                    </video>
                </div>
                <div class="video-info">
                    <h4>{{ htmlspecialchars($contenido->nombre) }}</h4>
                    <p><strong>Descripción:</strong> {{ htmlspecialchars($contenido->descripcion) }}</p>
                </div>
            </div>
        @endforeach
            @else
                <!-- Mostramos un mensaje si no hay contenidos -->
                <p>No hay contenidos disponibles actualmente.</p>
            @endif
        </div>
        <!-- Fin de la fila del portafolio -->
    </div>
</section>
<!-- end portafolio section -->
@endsection
