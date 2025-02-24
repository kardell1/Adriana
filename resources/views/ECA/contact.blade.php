@extends('layout.plantilla')

@section('title', 'contacto')
@section('contenido')
<!-- contact section -->
<section class="about_section">
  <div class="container">
    <div class="custom_heading-container">
      <h2>Inscribete</h2>
    </div>
    <div class="custom_heading-container">
  {{--Para ver donde apunta la ruta--}}

<form action="{{route('inscripcion.store')}}" method="POST"enctype="multipart/form-data">{{--Creacion del 
  formulario, con la Ruta y su respectivo método POST--}}
  @csrf {{-- Token del formulario --}}
  
      
  <label>CI Alumno:</label>
  <input type="text" name="ci_alumno" required>
  <label>Apellido Paterno:</label>
  <input type="text" name="apaterno" required>
  <label>Apellido Materno:</label>
  <input type="text" name="amaterno" required>
  <label>Nombre:</label>
  <input type="text" name="nombre" required>
  
  <label>Celular:</label>
  <input type="text" name="celular" required>
  <label>Correo:</label>
  <input type="text" name="correo" required>
  <input type="hidden" name="id_carrera" value="1">
  
  <label>Taller o Carrera:</label>
  <select name="tipo" id="tipo" onchange="mostrarOpciones()" required>
    <option value="">Seleccione una opción</option>
    <option value="taller">Taller</option>
    <option value="curso">Año Academico</option>
</select>

<div id="opciones_curso" style="display: none;">
<label for="curso">Pago del Curso Regular</label>
<select name="id_curso" id="curso">
    <option value="">Seleccione un año academico</option>
    @foreach($cursos as $curso)
        <option value="{{ $curso->id_curso }}">{{ $curso->nombre }}</option>
    @endforeach
</select>
</div>

<div id="opciones_taller" style="display: none;">
<label for="taller">Pago de un taller </label>
<select name="id_taller" id="taller">
    <option value="">Seleccione un taller</option>
    @foreach($talleres as $taller)
        <option value="{{ $taller->id_taller }}">{{ $taller->nombre }}</option>
    @endforeach
</select>
</div>
<label>Comprobante:</label>    
<input type="file" name="comprobante" accept="image/*" required>
<label>Monto:</label>
<input type="text" name="id_comprobante" required>
<button type="submit">Guardar</button>
</form>


<script>
  function mostrarOpciones() {
      var tipo = document.getElementById("tipo").value;
      var opcionesCurso = document.getElementById("opciones_curso");
      var opcionesTaller = document.getElementById("opciones_taller");
  
      // Mostrar opciones según la selección
      opcionesCurso.style.display = (tipo === "curso") ? "block" : "none";
      opcionesTaller.style.display = (tipo === "taller") ? "block" : "none";
  
      // Validar que se seleccionó la opción correcta antes de enviar
      validarEnvioFormulario();
  }
  
  // Validar que la opción seleccionada tenga un valor válido antes de enviar el formulario
  function validarEnvioFormulario() {
      var tipo = document.getElementById("tipo").value;
      var cursoSeleccionado = document.getElementById("curso").value;
      var tallerSeleccionado = document.getElementById("taller").value;
  
      var formularioValido = true;
  
      // Si se eligió "curso", asegúrate de que se haya seleccionado un curso
      if (tipo === "curso" && !cursoSeleccionado) {
          formularioValido = false;
      }
  
      // Si se eligió "taller", asegúrate de que se haya seleccionado un taller
      if (tipo === "taller" && !tallerSeleccionado) {
          formularioValido = false;
      }
  
      // Habilitar o deshabilitar el botón de enviar según la validación
      document.querySelector("button[type='submit']").disabled = !formularioValido;
  }
  </script>


      <div class="col-md-6">
        <div class="img-box">
          <img src="images/qr-taller.png" alt="">
        </div>
          
        </div>
    </div> 
    </div>
  </section>
  <div class="contact_items">

    <a class="nav-link" href=" https://l.facebook.com/l.php?u=https%3A%2F%2Fapi.whatsapp.com%2Fsend%3Fphone%3D59168901402%26text%3DEnlace%253A%250Ahttps%253A%252F%252Ffb.me%252F2w2ITCU8f%250A%250AVi%2520esto%2520en%2520Facebook...%26context%3DARCcJaVprO4vjZzmgdYiPu7X2_qxK8DDs_ZzyZuumeHgkLaByMmbRPRv0vHXclY0lfLpzwP1Vhx0f0uBRDtXcsI5UNk7ohfXoq_TSZ1uL3qGaObdrcaG92VQvdEMwsaevjyMhZIBthvLFfOMeUFCfa-Jgw%26source%26app%3Dfacebook%26fbclid%3DIwZXh0bgNhZW0CMTAAAR1ZOPdh2WZmszguJgS0aNONjlSRiDoRpkzeIrYAriNj_j6xU1g8jSF0LCM_aem_fRsZWfN8SzJtKeKzL5iX6g&h=AT1W58Y2rBgLYBvvwmpWpWXElnjevwLrQUGUCW6eZiVOTmpEMG9j25ps40BxrM-WUu3ES0m2528IpM9hPkAbw5K_U7aTP1hP7GP0snVaOB9UWR1oU2_dG5QNwGYR49nkxC8SsQ&__tn__=-UK-R&c[0]=AT0uGiIElJbYsKIkkHA_uQ7yBn8MNEiqt_ywos93RoOjS59jiX6U92SOLDJ6f1Lg82mkVs2o0t4wDxRf854YTBC2qNf4YYdsRmntbECdKiEDyukrSjw6zwlv0TlMhuQCXULZklDu1jYaznMpPhMoz7AYer40HLBc30mpUXOHpXY5-KGn_9KOJbFsjRK6g-Vnv0M6xfieTgcVlu45WTFgEtZUU5E">
      <div class="item ">
        <div class="img-box box-2">
          <img src="" alt="">
        </div>
        <div class="detail-box">
          <p>
            +591 68901402
          </p>
        </div>
      </div>
    </a>
    <a class="nav-link" href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCKHRLcfMnXQxVhgQJCfnczmGwwrtsWpWbwnJcnwxXDXTXQZlhWQcCRmHwFwnvJFvwxmbCnq">
      <div class="item ">
        <div class="img-box">
          <img src="images/mail.png" alt="">
        </div>
        <div class="detail-box">
          <p>
            escuela.eca2014@gmail.com
          </p>
        </div>
      </div>
    </a>
    <a class="nav-link" href="https://maps.app.goo.gl/rLEqFsirEaf53agj8">
      <div class="item ">
        <div class="img-box box-1">
          <img src="" alt="">
        </div>
        <div class="detail-box">
          <p>
            Av. Ecuador 2658 zona Sopocachi (La Paz-Bolivia), Ciudad La Paz, Bolivia
            </p>
        </div>
      </div>
    </a>
  </div>
</div>
</section>
<!-- end contact section -->
@endsection 