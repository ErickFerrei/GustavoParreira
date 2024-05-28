<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gustavo Parreira | Propriedades</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ URL::asset('build/images/favicon.png') }}" rel="icon">
  <link href="{{ URL::asset('build/images/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ URL::asset('build/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('build/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('build/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('build/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ URL::asset('build/css/style.css') }}" rel="stylesheet">


</head>

<body>



  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
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
            <a class="nav-link active" href="{{ route('site-properte') }}">Propriedades</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{ route('site-sobre') }}">Sobre</a>
          </li>


          <li class="nav-item">
            <a class="nav-link " href="{{ route('site-contato') }}">Contato</a>
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
              <h1 class="title-single">Nossas incríveis propriedades</h1>
              <span class="color-text-a">Grandes Negócios</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Início</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Propriedades
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Grid ======= -->
    <section class="property-grid grid">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            {{-- <div class="grid-option">
              <form class="{{ route('propriedade-search') }}" method="GET">
                <select class="custom-select">
                  <option selected>Todos</option>
                  <option value="1">Propriedades Novas</option>
                  <option value="2">Propriedades Usadas</option>
                  <option value="3">Propriedades Antigas</option>
                </select>
              </form>
            </div> --}}
          </div>
          @foreach($propriedades as $item)
          <div class="col-md-4">

                <div class="card-box-a card-shadow rounded">
                <div class="img-box-a">
                    @php
                    $imageUrls = json_decode($item->images);
                    $firstImageUrl = isset($imageUrls[0]) ? $imageUrls[0] : null;
                    @endphp
                    @if ($firstImageUrl)
                    <img src="{{ $firstImageUrl }}" alt="Imagem" style="width: 450px" class="img-a img-fluid">
                    @endif
                </div>
                <div class="card-overlay">
                    <div class="card-overlay-a-content">
                    <div class="card-header-a">
                        <h2 class="card-title-a">
                        <a href="#">{{$item->titulo}}

                        </h2>
                    </div>
                    <div class="card-body-a">
                        <div class="price-box d-flex">
                        {{-- <span class="price-a">rent | $ 12.000</span> --}}
                        </div>
                        <a href="{{ route('site-propriedade-detalhe' , ['id'=>$item->id]) }}" class="link-a">Clique aqui para ver
                        <span class="bi bi-chevron-right"></span>
                        </a>
                    </div>
                    <div class="card-footer-a">
                        <ul class="card-info d-flex justify-content-around">
                        <li>
                            <h4 class="card-info-title">Area</h4>
                            <span>{{$item->area}}m
                            <sup>2</sup>
                            </span>
                        </li>
                        <li>
                            <h4 class="card-info-title">Quartos</h4>
                            <span>{{$item->quarto}}</span>
                        </li>
                        <li>
                            <h4 class="card-info-title">Garagens</h4>
                            <span>{{$item->garagem}}</span>
                        </li>
                        </ul>
                    </div>
                    </div>
                </div>
                </div>

          </div>
          @endforeach

        </div>

      </div>
    </section><!-- End Property Grid Single-->

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
  <script src="{{ URL::asset('build/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ URL::asset('build/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ URL::asset('build/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ URL::asset('build/js/main.js') }}"></script>

</body>

</html>
