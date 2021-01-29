<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="scss/style.css">
  <title>Tugas Framework</title>
</head>

<body>
  <header>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand p-0" href="#"><img class="w-50 p-0" src="img/transcibubur.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav kiri mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/tiket">Ticket</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Facilities</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">News</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Help</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/login">Log In</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link btn btn-warning text-white">Register</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>

  <main>
    <section class="slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/studio.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/map.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/banner.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <section class="what mb-5">
        <div class="container">
          <div class="row my-5">
            <div class="col text-center">
              <h1>What's on Trans Studio Bandung</h1>
            </div>
          </div>
          <div class="row">
            <div class="col kiri mb-5">
              <div class="card p-4">
                <div class="text text-white">
                  <h3>Liburan Seru Aman</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus laudantium dicta exercitationem ea,
                    eaque officiis facere aspernatur sit beatae molestiae?</p>
                </div>
              </div>
            </div>
            <div class="col kanan">
              <div class="row">
                <div class="col">
                  <div class="card d-flex flex-row">
                    <div class="bd-highlight">
                      <img src="img/pekan.jpg" alt="">
                    </div>
                    <div class="bd-highlight ml-3 my-auto">
                      <a class="mx-auto my-auto" href="">
                        <p>Libur Akhir Pekan Makin Seru Dengan Promo...</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-5">
                <div class="col">
                  <div class="card d-flex flex-row">
                    <div class="bd-highlight ml-3 my-auto">
                      <a class="mx-auto my-auto" href="">
                        <p>Staycation di kawasan terpadu Trans...</p>
                      </a>
                    </div>
                    <div class="bd-highlight my-auto">
                      <img src="img/staycation.jpg" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="map">
        <div class="row">
          <div class="col text-white  p-4" style="background-position: center;
                background: url(img/transbandung-map.png);
                background-repeat: no-repeat;
                background-size: cover;
                height: 600px;">
            <h1 class="text-center">Arena & Facilities</h1>
            <div class="container">
              <div class="row">
                <div class="col">
                  <img src="img/transcibubur.png" style="width: 12%" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  </main>

  <section class="home-fasilitas p-0">
    <div class="container">
      <h3>Facilities</h3>
      <div class="row">
        <div class="col col-12 col-md-4">
          <ul>
            <li><img src="img/informasi.png" alt="">Information Center</li>
            <li><img src="img/restroom.png" alt="">Restroom</li>
            <li><img src="img/icon-atm.png" alt="">ATM Gallery</li>
          </ul>
        </div>
        <div class="col col-12 col-md-4">
          <ul>
            <li><img src="img/mesjid.png" alt="">Prayer Room</li>
       <li><img src="img/hall.png" alt="">Group Hall</li>
       <li><img src="img/disa.png" alt="">Disabled Restroom</li>
          </ul>
        </div>
        <div class="col col-12 col-md-4">
          <ul>
            <li><img src="img/clinic.png" alt="">clinic</li>
       <li><img src="img/nurse.png" alt="">Nursing Room</li>
          </ul>
        </div>
      </div>
  
      
  
    </div>
  </section>

  <footer>
    <div class="container p-5">
      <div class="row">
        <div class="col col-12 col-md-2">
          <img style="width: 150px;" src="img/transcibubur.png" alt="">
        </div>
        <div class="col col-12 col-md-7">
          <div class="row ml-4">
            <div class="col" style="padding-left: 0;">
              <a href="">Home</a>
            </div>
            <div class="col" style="padding-left: 0;">
              <a href="">Home</a>
            </div>
            <div class="col" style="padding-left: 0;">
              <a href="">Home</a>
            </div>
            <div class="col" style="padding-left: 0;">
              <a href="">Home</a>
            </div>
            <div class="col" style="padding-left: 0;">
              <a href="">Home</a>
            </div>
            <div class="col" style="padding-left: 0;">
              <a href="">Home</a>
            </div>
            <div class="col" style="padding-left: 0;">
              <a href="">Home</a>
            </div>
          </div>
          <div class="row ml-4">
            <p class="kata2">©2021 - Trans Studio Bandung. A Trans Corp Company</p>
          </div>
        </div>
        <div class="col col-12 col-md-3">
          <div class="row">
            <div class="col">
              <p class="text-center">Connect With Us</p>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="d-flex text-center mx-auto">
                  <a class="mx-auto" aria-current="page" href="#"><img style="width: 50px;" class="" src="img/sm_ig.png" alt=""></a>
                  <a class="mx-auto" aria-current="page" href="#"><img style="width: 50px;" class="" src="img/sm_fb.png" alt=""></a>
                  <a class="mx-auto" aria-current="page" href="#"><img style="width: 50px;" class="" src="img/sm_tw.png" alt=""></a>
                
              </div>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>

  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>