<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DiagnoTruck</title>

  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">

  <link rel="icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
  <link rel="stylesheet" href="css/modal.css">

  <!--Leaftlet-->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

</head>

<body id="page-top">

  <!-- Navigation -->
  <a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav navegacion">
      <li class="sidebar-brand">
        <a class="js-scroll-trigger" href="#page-top">DiagnoTruck</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#page-top">Inicio</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#about">Sobre Nosotros</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#services">Servicios</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#novedades">Novedades</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#ubicacion">Ubicación</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#contacto">Contacto</a>
      </li>
    </ul>
  </nav>

  @if(session('estado'))

    <div class="notificacion-consulta">
        <p>{{session('estado')}}</p>
    </div>

  @endif

  <!-- Header -->
  <header class="contenedor-header masthead d-flex">
    <div class="container text-center my-auto">
        <img class="imagen-logo" src="{{asset('/img/logo1.png')}}" alt="imagen">
      <h1 class="mb-1 nombre-diagno">Diagno <span>Truck</span></h1>
      <h3 class="mb-5">
        <p class="slogan">Centro Electrónico para Diagnóstico de Pesados</p>
      </h3>
      <a class="btn btn-dark btn-xl js-scroll-trigger" href="#about">Sobre nosotros</a>
    </div>
    <div class="overlay"></div>
  </header>


    <!-- About -->
    <section class="content-section bg-light" id="about">
        <div class="container text-center">
          <div class="row contenedor-nosotros">
            <div class="col-lg-10 mx-auto">
              <h2 class="titulo-nosotros">Sobre nosotros</h2>
              <p class="lead mb-5">

                Somos Diagno Truck S.R.L., una empresa dedicada exclusivamente a la inyección electrónica de vehículos diesel, creada para lograr que los mismos, mantengan el excelente rendimiento para el que fueron creados.
                <br>
                <br>
                Contamos con 2 talleres, uno, situado sobre la colectora del Acc. Oeste mano a capital, a la altura del km 39 y el otro taller en Av colectora este panamericana 1860 ramal escobar km 47,5
                <br>
                <br>
                Nuestro personal, dispone de la más amplia gama de equipos de prueba y diagnóstico y se basa en una amplia experiencia acumulada durante años, como así también en el constante estudio de las nuevas tecnologías.
                <br>
                <br>
                Entre nuestros equipos, contamos con un banco a rodillos que nos permite medir la potencia a la rueda en todo el régimen del motor, e incluso simular un viaje con una carga determinada, sin necesidad de sacar el vehículo del taller, eliminando así el riesgo que esto conlleva.
                <br>
                <br>
                Como innovación al país, sumamos el centro de reprogramación, con la mayor tecnología y seguridad para nuestros camiones. Llevando el torque máximo a menos revoluciones de motor, logrando asi, mejores rendimientos y una disminución de consumo de combustible de entre 2 y 4 litros cada 100km.
                <br>
                <br>
                A lo mencionado, sumamos nuestro propio laboratorio diesel, que dispone de la más amplia gama de equipos de prueba y diagnostico para la reparación y calibración de sistemas de inyección diesel.
                <br>
                <br>
                Por todo esto, es que podemos brindar a nuestros clientes un servicio basado en los mas altos estándares de calidad y seguridad a la altura de las exigencias de la actualidad. Garantizando al 100% nuestros trabajos.
                <br>
                <br>
                <a class="btn btn-dark btn-xl js-scroll-trigger" href="#services">Nuestros Servicios</a>

            </div>
          </div>
        </div>
      </section>


  <div class="servicios" id="services">
        <div class="contenedor-servicios-secu">
          <h3 class="text-secondary mb-0 servicios-text">Servicios</h3> <br>
          <h2 class="servicios-text ofrecemos">¿Qué ofrecemos?</h2>
        </div>

        <div class="servicios-secu">

            <div class="item-serv">
                <span>
                <i class="fas fa-truck-moving"></i>
                </span>

                <h4>
                    <strong>Laboratorio</strong>
                </h4>

                <p>Ver mas</p>

            </div>

            <div class="item-serv">

                <span>
                    <i class="fas fa-truck-moving"></i>
                </span>

                <h4>
                    <strong>Urea</strong>
                </h4>

                <p>Ver mas</p>

            </div>


            <div class="item-serv">

                <span>
                    <i class="fas fa-truck-moving"></i>
                </span>

                <h4>
                    <strong>Motores</strong>
                </h4>

                <p>Ver mas</p>

            </div>


        </div>

        <div class="servicios-secu2">
            <div class="item-serv2">

                <span>
                    <i class="fas fa-truck-moving"></i>
                </span>

                <h4>
                    <strong>Banco a Rodillo</strong>
                </h4>
                <p>Ver mas</p>
            </div>

            <div class="item-serv2">

                <span>
                    <i class="fas fa-truck-moving"></i>
                </span>

                <h4>
                    <strong>Instalación</strong>
                </h4>
                <p>Ver mas</p>
            </div>
        </div>
  </div>






<!--Seccion creada por mati-->
  <section class="container" id="novedades">
    <h2 class="text-center titulo-noticia">Noticias</h2>

    <div class="contenedor-novedades">

        @if(count($noticias) <= 0)
            <p class="text-center">No hay noticias</p>

        @else

        @foreach($noticias as $noticia)
            <div class="card" style="width: 18rem;">
                <img src="/storage/imagenes/{{$noticia->imagen}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$noticia->titulo}}</h5>
                    <p class="card-text">{{$noticia->descripcion}}</p>
                </div>
            </div>


        @endforeach

        @endif



    </div>


  </section>


  <h2 class="text-center texto-ubicacion" id="ubicacion">Ubicación</h2>


  <div class="contenedor-ubicacion" id="mapa"></div>


  <!-- Call to Action -->
  <section class="contenedor-contacto content-section bg-primary text-white" id="contacto">
    <div class="contenedor container text-center">
      <h2 class="mb-4">Ponete en contacto con nosotros</h2>
      <form
      action="{{url('/consultaAdmin')}}"
      method="POST">

      @csrf

        <div class="form-group">
          <label for="email">Correo electronico</label>
          <input type="email"
          name="email" placeholder="e-mail"
          class="form-control @error('email') is-invalid @enderror"
          id="email"
          aria-describedby="emailHelp">

          @error('email')
          <span class="invalid-feedback d-block" role="alert">
              <strong>{{$message}}</strong>
          </span>
           @enderror

        </div>


        <div class="form-group">
            <label for="tel">Teléfono</label>
            <input name="tel" type="text" placeholder="teléfono" class="form-control @error('email') is-invalid @enderror" id="tel" aria-describedby="emailHelp">


          @error('tel')
          <span class="invalid-feedback d-block" role="alert">
              <strong>{{$message}}</strong>
          </span>
           @enderror

        </div>

          <div class="form-group">
            <label for="empresa">Empresa (opcional)</label>
            <input name="empresa" type="text" placeholder="empresa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

        <div class="form-group">
            <label for="consulta">Consulta</label>
            <textarea class="form-control @error('consulta') is-invalid @enderror" name="consulta" id="consulta" rows="3"></textarea>


            @error('consulta')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror

        </div>
        <button type="submit" class="btn btn-outline-warning boton-enviar mt-3">Enviar</button>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer class="contenedor-footer footer text-center">
    <div class="container">

      <ul class="list-inline mb-5">
        <li class="list-inline-item">
          <a target="blank" class="social-diagno rounded-circle text-white mr-3" href="https://www.facebook.com/DiagnoTruck">
            <i class="icon-social-facebook"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a target="blank" class="social-diagno rounded-circle text-white mr-3" href="https://www.instagram.com/diagnotruck/" >
            <i class="icon-social-instagram"></i>
          </a>
        </li>
      </ul>
      <p class="text-muted small mb-0">Copyright &copy; Diagno Truck 2020</p>
    </div>
  </footer>

  <!-- Scroll to Top Button-->
  <div class="icono-ws">
    <a target="blank" class="scroll-to-top rounded js-scroll-trigger" href="https://bit.ly/3mWbVxn">
      <i class="fab fa-whatsapp"></i>
    </a>
  </div>





  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/stylish-portfolio.min.js"></script>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<!---Leaftlet-->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

<script>

document.addEventListener('DOMContentLoaded', function() {

    var map = L.map('mapa').setView([-34.452502, -58.803978], 10);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([-34.6240133,-58.8234273]).addTo(map)
        .bindPopup('Diagno Truck Moreno')
        .openPopup();

    var escobar = L.marker([-34.3650043,-58.7827476]).addTo(map)
        .bindPopup('Diagno Truck Escobar')
        .openPopup();

})

/* -34.6240133,-58.8234273 */






</script>

</body>

</html>
