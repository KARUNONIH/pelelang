<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link href="{{ asset('css/landing.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">


</head>
<body>
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

          <!-- <h1 class="logo me-auto"><a href="index.html">Pelelang</a></h1> -->
          <!-- Uncomment below if you prefer to use an image logo -->
          <a href="index.html" class="logo me-auto"><img src="{{ asset('image/pelelang.png') }}" alt="" class="img-fluid"></a>



        </div>
      </header><!-- End Header -->

      <section id="hero" class="d-flex align-items-center">

        <div class="container">
          <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
              <h1>Better Solutions For Your Business</h1>
              <h2>We are team of talented designers making websites with Bootstrap</h2>
              <div class="d-flex justify-content-center justify-content-lg-start">
                <a type="button" href="{{ route('login') }}" class="btn btn-dark text-uppercase font-weight-bold ">Join Now</a>
                <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
              </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
              <img src="{{ asset('image/bonsai-6114252_960_720-removebg-preview.png') }}" class="img-fluid animated" alt="">
            </div>
          </div>
        </div>

      </section><!-- End Hero -->
      <div id="preloader"></div>
      <script src="{{ asset('js/landing.js') }}"></script>

</body>
</html>
