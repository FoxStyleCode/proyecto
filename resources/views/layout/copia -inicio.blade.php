<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--Bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link href="{{asset('css/stilos.css')}}" rel="stylesheet">
  <link href="{{asset('css/bootstrap.min.js')}}" rel="stylesheet">
  <script src="https://kit.fontawesome.com/7309319a36.js" crossorigin="anonymous"></script>
  <title>El Centro de Vida</title>
</head>

<body>

<!--inicio de la cabecera de la pagina-->
<div class="cabecera-paginas">

  </div>

  <div id="ir_arriba_boton" class="ocultar">
  <i class="fas fa-chevron-up"></i>
  </div>

  <img src="../../imagenes/centro.jpg" class="img-fluid" alt="Responsive image">
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger sticky-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item active">
          <a class="nav-link alert-link" href="#"> <i class="fas fa-home"></i> Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link alert-link " href="#"> <i class="fas fa-heart"></i> Lo que somos <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle alert-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Lo que hacemos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item alert-link " href="#">Proyectos</a>
            <a class="dropdown-item alert-link " href="#">Lo que logramos</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item alert-link " href="#">Something else here</a>
          </div>

        <li class="nav-item active">
          <a class="nav-link alert-link " href="#"> <i class="far fa-calendar-alt"></i> Calendario <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link alert-link " href="#"> <i class="fas fa-phone-alt"></i> Contactos <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link alert-link " href="#"> <i class="fas fa-hands-helping"></i> Voluntarios <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link alert-link " href="#"> <i class="fas fa-hand-holding-usd"></i> Donaciones <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>
 </div>
<!--fin de la cabecera de la pagina-->

  <!--social bar-->
  <div class="icon-bar">
    @yield("social-bar")
    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
    <a href="#" class="google"><i class="fa fa-google"></i></a>
    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
    <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
  </div>
  <!--fin social bar-->

  <div class="container-fluid bg-light"></div>
  <div class="container-fluid bg-light"></div>
  <div class="container-fluid bg-light"></div>
  <div class="container-fluid bg-light"></div>
  <div class="container-fluid bg-light"></div>
  <div class="container-fluid bg-light"></div>

  <!--inicio del contenido de la pagina-->
  <div class="info-pagina"> 

  </div>
  <!--fin del contenido de la pagina-->


  <!--inicio del footer-->
  <div class="foot-der">
  @yield("foot-de")
  <footer class="footer-area footer--light">
    <div class="footer-big">
      <!-- start .container -->
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-12">
            <div class="footer-widget">
              <div class="widget-about">
                <img src="../../imagenes/centro.jpg" alt="" class="img-fluid">
                <p>Что если тут написать другой текст на русском языке, для проверки шрифта Rubik )</p>
                <ul class="contact-details">
                  <li>
                    <span class="icon-earphones"></span> Call Us:
                    <a href="tel:344-755-111">344-755-111</a>
                  </li>
                  <li>
                    <span class="icon-envelope-open"></span>
                    <a href="mailto:support@aazztech.com">support@aazztech.com</a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Ends: .footer-widget -->
          </div>
          <!-- end /.col-md-4 -->
          <div class="col-md-3 col-sm-4">
            <div class="footer-widget">
              <div class="footer-menu footer-menu--1">
                <h4 class="footer-widget-title">Categorias Populares</h4>
                <ul>
                  <li>
                    <a href="#">Wordpress</a>
                  </li>
                  <li>
                    <a href="#">Plugins</a>
                  </li>
                  <li>
                    <a href="#">Joomla Template</a>
                  </li>
                  <li>
                    <a href="#">Admin Template</a>
                  </li>
                  <li>
                    <a href="#">HTML Template</a>
                  </li>
                </ul>
              </div>
              <!-- end /.footer-menu -->
            </div>
            <!-- Ends: .footer-widget -->
          </div>
          <!-- end /.col-md-3 -->

          <div class="col-md-3 col-sm-4">
            <div class="footer-widget">
              <div class="footer-menu">
                <h4 class="footer-widget-title">Nuestra Corporación</h4>
                <ul>
                  <li>
                    <a href="#">About Us</a>
                  </li>
                  <li>
                    <a href="#">How It Works</a>
                  </li>
                  <li>
                    <a href="#">Affiliates</a>
                  </li>
                  <li>
                    <a href="#">Testimonials</a>
                  </li>
                  <li>
                    <a href="#">Contact Us</a>
                  </li>
                  <li>
                    <a href="#">Plan &amp; Pricing</a>
                  </li>
                  <li>
                    <a href="#">Blog</a>
                  </li>
                </ul>
              </div>
              <!-- end /.footer-menu -->
            </div>
            <!-- Ends: .footer-widget -->
          </div>
          <!-- end /.col-lg-3 -->

          <div class="col-md-3 col-sm-4">
            <div class="footer-widget">
              <div class="footer-menu no-padding">
                <h4 class="footer-widget-title">Ayuda</h4>
                <ul>
                  <li>
                    <a href="#">Support Forum</a>
                  </li>
                  <li>
                    <a href="#">Terms &amp; Conditions</a>
                  </li>
                  <li>
                    <a href="#">Support Policy</a>
                  </li>
                  <li>
                    <a href="#">Refund Policy</a>
                  </li>
                  <li>
                    <a href="#">FAQs</a>
                  </li>
                  <li>
                    <a href="#">Buyers Faq</a>
                  </li>
                  <li>
                    <a href="#">Sellers Faq</a>
                  </li>
                </ul>
              </div>
              <!-- end /.footer-menu -->
            </div>
            <!-- Ends: .footer-widget -->
          </div>
          <!-- Ends: .col-lg-3 -->

        </div>
        <!-- end /.row -->
      </div>
      <!-- end /.container -->
    </div>
    <!-- end /.footer-big -->

    <div class="mini-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright-text">
              <p>© 2020
                <a href="#">El Centro de Vida</a>. Todos los derechos reservados.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  </div>
  <!--fin del footer-->

  <script src="{{asset('js/script.js')}}"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.min.js'"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>