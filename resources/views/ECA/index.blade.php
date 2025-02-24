@extends('layout.plantilla')

@section('title', 'index')
@section('contenido')
<!-- slider section -->
    <section class=" slider_section position-relative">

      <div class="slider_bg-container">
        <div class="carousel-item active">
          <style>
            .zoom-image {
              
              height: 100vh; /* Altura completa de la pantalla */
              object-fit: contain; /* Mantiene la imagen completa sin recortar */
}

            </style>
          <img src="images/estudia1.jpg" alt="Imagen del slider" class="zoom-image">
        </div>
      </div>
      <div class="slider-container">

        <div class="detail-box">
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
          
          
        </div>
        <div class="img-box">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/slider-img.jpg" alt="">
              </div>
              <div class="carousel-item">
                <img src="images/slider-img1.jpg" alt="">
              </div>
              <div class="carousel-item">
                <img src="images/slider-img2.jpg" alt="">
              </div>
            </div>

          </div>

        </div>
      </div>
      

    </section>
    <!-- end slider section -->
@endsection 
