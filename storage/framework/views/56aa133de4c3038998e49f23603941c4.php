<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gustavo Parreira | Detalhe</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo e(URL::asset('build/images/favicon.png')); ?>" rel="icon">
  <link href="<?php echo e(URL::asset('build/images/apple-touch-icon.png')); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo e(URL::asset('build/vendor/animate.css/animate.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(URL::asset('build/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(URL::asset('build/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(URL::asset('build/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo e(URL::asset('build/css/style.css')); ?>" rel="stylesheet">
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
      <a class="navbar-brand text-brand" href="<?php echo e(route('site-index')); ?>"><img src="<?php echo e(asset('images/logoVetor.svg')); ?>" alt=""  style="width:100px; "></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('site-index')); ?>">Início</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="<?php echo e(route('site-properte')); ?>">Propriedades</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="<?php echo e(route('site-sobre')); ?>">Sobre</a>
          </li>


          <li class="nav-item">
            <a class="nav-link " href="<?php echo e(route('site-contato')); ?>">Contato</a>
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
              <h1 class="title-single"><?php echo e($propriedade->titulo); ?></h1>
              <span class="color-text-a"><?php echo e($endereco->cidade); ?>/<?php echo e($endereco->estado); ?> - <?php echo e($endereco->bairro); ?></span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="<?php echo e(route('site-index')); ?>">Inicio</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="<?php echo e(route('site-properte')); ?>">Propriedades</a>
                </li>

              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Single ======= -->
    <section class="property-single nav-arrow-b">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div id="property-single-carousel" class="swiper">
              <div class="swiper-wrapper">
                <?php $__currentLoopData = $imagens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imagem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="carousel-item-b swiper-slide">
                        <img src="<?php echo e($imagem); ?>" alt="Imagem da Propriedade" class="w-100">
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            </div>
            <div class="property-single-carousel-pagination carousel-pagination"></div>
            <p class="text-muted mt-2">Araste pro lado < > </p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">

            <div class="row justify-content-between">
              <div class="col-md-5 col-lg-4">

                <div class="property-summary">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="title-box-d section-t4">
                        <h3 class="title-d">Especificações</h3>
                      </div>
                    </div>
                  </div>
                  <div class="summary-list">
                    <ul class="list">
                      <!-- <li class="d-flex justify-content-between">
                        <strong>Property ID:</strong>
                        <span>1134</span>
                      </li> -->
                      <li class="d-flex justify-content-between">
                        <strong>Localização:</strong>
                        <span><?php echo e($endereco->cidade); ?>/<?php echo e($endereco->estado); ?> - <?php echo e($endereco->bairro); ?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Tipo:</strong>
                        <span><?php echo e($propriedade->tipo); ?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Status:</strong>
                        <span><?php echo e($propriedade->status); ?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Area:</strong>
                        <span><?php echo e($propriedade->area); ?>m
                          <sup>2</sup>
                        </span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Quartos:</strong>
                        <span><?php echo e($propriedade->quarto); ?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Banheiros:</strong>
                        <span><?php echo e($propriedade->banheiro); ?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Garagem:</strong>
                        <span><?php echo e($propriedade->garagem); ?></span>
                      </li>
                    </ul>
                  </div>
                </div>


                <div class="property-price d-flex justify-content-center foo">
                  <div class="card-header-c d-flex">

                    <div class="card-title-c align-self-center mt-5">
                      <a href="#" class="price-b">Falar Com especialista</a>
                    </div>
                  </div>
                </div>


              </div>
              <div class="col-md-7 col-lg-7 section-md-t3 mt-5">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d">Descrição</h3>
                    </div>
                  </div>
                </div>
                <div class="property-description">
                  <p class="description color-text-a">
                    <?php echo wordwrap($propriedade->descricao, 60, "<br />\n", true); ?>
                  </p>
                </div>


              </div>
            </div>
          </div>


        </div>
      </div>
    </section><!-- End Property Single-->

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
  <script src="<?php echo e(URL::asset('build/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(URL::asset('build/vendor/swiper/swiper-bundle.min.js')); ?>"></script>
  <script src="<?php echo e(URL::asset('build/vendor/php-email-form/validate.js')); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo e(URL::asset('build/js/main.js')); ?>"></script>

</body>

</html>
<?php /**PATH C:\laragon\www\TEMPLETE\resources\views/propriedade-detalhe.blade.php ENDPATH**/ ?>