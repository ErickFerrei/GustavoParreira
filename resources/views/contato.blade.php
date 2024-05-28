<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gustavo Parreira | Contato</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ URL::asset('build/images/favicon.png') }}" rel="icon">
  <link href="{{ URL::asset('build/images/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ URL::asset('build/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('build/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('build/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('build/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ URL::asset('build/css/style.css')}}" rel="stylesheet">


</head>

<body>

  

  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top" >
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="{{ route('site-index') }}"><img src="{{ asset('images/logoVetor.svg') }}" alt=""  style="width:100px; "></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link " href="{{ route('site-index') }}">Início</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{ route('site-properte') }}">Propriedades</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{ route('site-sobre') }}">Sobre</a>
          </li>

        
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('site-contato') }}">Contato</a>
          </li>
        </ul>
      </div>

     

    </div>
  </nav><!-- End Header/Navbar -->

  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Contate-nos</h1>
              <span class="color-text-a">Descubra as melhores oportunidades imobiliárias sob medida para você. Entre em contato conosco hoje e transforme seus sonhos em realidade!</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.php">Início</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Contato
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Contact Single ======= -->
    <section class="contact">
      <div class="container">
        <div class="row">
          
          <div class="col-sm-12 section-t8">
            <div class="row">
              <div class="col-md-7">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="Seu Nome" required>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="Seu Email" required>
                      </div>
                    </div>
                    <div class="col-md-12 mb-3">
                      <div class="form-group">
                        <input type="text" name="subject" class="form-control form-control-lg form-control-a" placeholder="Assunto" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea name="message" class="form-control" name="message" cols="45" rows="8" placeholder="Mensagem" required></textarea>
                      </div>
                    </div>
                    <div class="col-md-12 my-3">
                      <div class="mb-3">
                        <div class="loading">Carregando</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Sua mensagem foi enviada. Obrigado!</div>
                      </div>
                    </div>

                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn btn-a">Enviar Email</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-5 section-md-t3">
                
                <div class="icon-box section-b2">
                  <div class="icon-box-icon">
                    <span class="bi bi-geo-alt"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                      <h4 class="icon-title">Localização</h4>
                    </div>
                    <div class="icon-box-content">
                      <p class="mb-1">
                        Rua Joaquim Nabuco, 161, Farol
                        <br> Sala 207. Maceió-AL.
                      </p>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>

          <div class="col-sm-12 mt-5">
            <div class="contact-map box">
              <div id="map" class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3933.349815211628!2d-35.7316877!3d-9.6511212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x701458f8ee6b71d%3A0xf49e4b541069e37f!2sR.%20Joaquim%20Nabuco%2C%20161%20-%20Farol%2C%20Macei%C3%B3%20-%20AL%2C%2057051-410!5e0!3m2!1spt-PT!2sbr!4v1709045132472!5m2!1spt-PT!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Contact Single-->

  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <section class="section-footer">
    <div class="container">
      <div class="row d-flex justify-content-between">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Gustavo Parreira</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                Investimento seguro, sonhos realizados e lares construídos. Transforme espaços em histórias de vida.
              </p>
            </div>
            
          </div>
        </div>
        
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Contato</h3>
            </div>
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Telefone: </span> +55 (82) 99900-3006
                </li>
                <li class="color-a">
                  <span class="color-text-a">Email: </span> gustavoparreira.mcz@gmail.com
                </li>
                <li class="color-a">
                  <span class="color-text-a">CNPJ: </span> 41.524.377/0001-27 
                </li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-linkedin" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">DSA SOFTWARE / IMPULSO DEV</span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
            Designed by <a href="https://dsasoftweb.com.br/" target="_blank">DSA SOFTWARE</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ URL::asset('build/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ URL::asset('build/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ URL::asset('build/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ URL::asset('build/js/main.js')}}"></script>

</body>

</html>