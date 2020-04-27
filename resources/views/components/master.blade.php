<!doctype html>
<html lang="id">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1587968328/pasteur/logo_rq1ecj.ico" />
    <script type="text/javascript">
      function generateBarCode()
      {
          var nric = $('#text').val();
          var url = 'https://api.qrserver.com/v1/create-qr-code/?data=' + nric + '&amp;size=50x50';
          $('#barcode').attr('src', url);
      }
    </script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <title>@yield('title')</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-transparent ">
      <div class="container">
        <button class="navbar-toggler fixed-top mt-2 ml-2" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav col-6 offset-2 justify-content-between">
            <a class="nav-item nav-link text-white font-weight-bold" href="{{'/'}}">Home</a>
            <a class="nav-item nav-link text-white font-weight-bold " href="{{'/contact'}}">Kontak</a>
          </div>
        </div>
      <a class="navbar-brand mx-auto" href="{{'/'}}" >
          <img id="img-logo" src="{{asset('image/logo.png')}}" height="110" width="100">
        </a>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav col-6 offset-4 justify-content-between">
              <a class="nav-item nav-link text-white font-weight-bold" href="{{'/product'}}">Apartment</a>
              <a class="nav-item nav-link text-white font-weight-bold " href="{{'/price'}}">Residence</a>
            </div>
          </div>
      </div>
    </nav>
    <div class="container mt-5">
      @yield('content')
    </div>


    {{-- Footers --}}
    <div class="footer">
      <div class="container">
        <div class="row justify-content-between pt-3">
          <div class="col-12 text-center">
            <div class="row mt-2 text-white text-small h6">
                <div class="col"></div>
                <div class="col-12">
                    
                        {{-- <div class="d-flex justify-content-center mt-2">
                            <a href="{{'https://telegram.me/adrajayapayment_bot'}}" class=" bg-white rounded-circle">
                                <i class="fa fa-telegram fa-2x" aria-hidden="true"></i>
                            </a>
                            <a href="{{'https://www.facebook.com/adrajaya.rel0ad/'}}" class="mr-4 ml-4 bg-white rounded">
                                <i class="fa fa-facebook-square fa-2x " aria-hidden="true"></i>
                            </a>
                            <a href="{{'https://www.facebook.com/adrajaya.rel0ad/'}}" class=" bg-white rounded">
                                <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                            </a>
                            <a href="{{'https://www.facebook.com/adrajaya.rel0ad/'}}" class="mr-4 ml-4 bg-white rounded-circle">
                                <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i>
                            </a>
                        </div> --}}
                        <div class="col">
                          <p class="text-white">Lokasi & Marketing Gallery <br> Jl. Gunung Batu 203, Pasteur <br>Bandung - Jawa Barat</p>
                          <div class="pt-2 ">
                            <img id="img-logo" src="{{asset('image/gmaps.png')}}" height="50" width="50">
                                <p class="text-white mt-1">https://g.page/gatewaypasteur?share</p>
                          </div>
                        </div><br>
                        <p class="text-white text-small mt-3 " >© Copyright CV. Adrajaya Digital Teknologi Indonesia 2020.</p>                                                                                                                                                                                 
                </div>
                <div class="col"></div>
            </div>
        </div>
          <div class="col">lokasi Peta</div>
        </div>
      </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>