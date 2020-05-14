@extends('components.master')
@section('title', 'GateWay Pasteur Bandung')
@section('content')
    <div class="jumbotron text-center bg-transparent">
        <div class="container">
            <h1 class="d4">GATEWAY PASTEUR <br>BANDUNG</h1>
            <p class="lead"> Merupakan sebuah hunian modern berupa Apartment dengan konsep <br> <strong>One Stop Living</strong> yang memiliki design, kualitas bangunan, lokasi, dan fasilitas yang terbaik. <br> Selain itu juga memiliki nilai investasi yang sangat menguntungkan.</p>
            <div class="container mt-4">
                <span><a class="btn btn-success btn-lg mb-3" href="{{'/registration'}}" role="button">Registrasi</a></span>
            <span><a class="btn btn-secondary btn-lg mb-3" href="{{'/contact'}}" role="button">Contact us</a></span>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container text-center">
        <h3 class="d4 mb-5">Gallery</h3>
        <div id="bnrH" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#bnrH" data-slide-to="0" class="active"></li>
                <li data-target="#bnrH" data-slide-to="1"></li>
                <li data-target="#bnrH" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" >
                @foreach ($gambar as $gbr => $slider )
                    <div class="carousel-item {{$gbr == 0 ? 'active' : '' }}">
                        <img src="{{asset('data_file/'. $slider->file) }}" class="d-block w-100">
                    </div>
                @endforeach 
            </div>
            <a class="carousel-control-prev" href="#bnrH" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">back</span>
            </a>
            <a class="carousel-control-next" href="#bnrH" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
    </div>
    <section id="video-yt" class="mt-5">
        <div class="container  ">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 justify-content-between bgcr pb-4 pt-4 mb-2 img-thumbnail">
                <div class="col img-hover-zoom ">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="643" height="480" src="https://www.youtube.com/embed/bRrlvAezZjk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col img-hover-zoom ">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="853" height="480" src="https://www.youtube.com/embed/9yGS3C7qXdI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col img-hover-zoom ">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="853" height="480" src="https://www.youtube.com/embed/oPInZ7WUXek" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="tipe">
        <div class=" mt-5">
            <div class="row justify-content-between">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="card mb-3 bacg" style="max-width: 540px;">
                            <div class="row no-gutters p-1  ">
                                <div class="col-md-4">
                                    <img src="{{asset('image/pasteur.png')}}" class="card-img" height="250" width="80">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Gateway Pasteur</h5>
                                    <p class="card-text ">Gateway Pasteur adalah sebuah kawasan Residential dan Commercial terbesar dan terlengkap di Bandung yang terletak dekat dengan Pintu Tol, Bandara International Husein Sastranegara, Universitas-universitas dan Mall-mall ternama di Bandung. Gateway Pasteur memiliki 4 gedung Apartment yang terdiri lebih dari 2500 unit Apartment dan Komersial.</p>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 bacg" style="max-width: 540px;">
                            <div class="row no-gutters bacg">
                                <div class="col-md-4">
                                    <img src="{{asset('image/onix.png')}}" class="card-img" height="220" width="80">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Apa ONYX Itu ?</h5>
                                    <p class="card-text">Onyx adalah sebuah bangunan yang terletak tepat di bagian tengah kawasan Gateway Pasteur, yang terdiri dari:
                                        • 8 Lantai Bangunan
                                        • Luas Bangunan ± 7.600 m 2
                                        • Terdiri dari:
                                        • Conference Area
                                        • Main Lobby dan Satelite Lobby
                                        • ± 150 kamar</p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 justify-content-between bgcr pb-4 mb-2 img-thumbnail">
                        <div class="col img-hover-zoom ">
                            <img src="{{asset('image/image2.jpg')}}" class="mt-4 ml-3 rounded" height="140px" width="220px" >
                        </div>
                        <div class="col img-hover-zoom">
                            <img src="{{asset('image/image3.jpg')}}" class="mt-4 ml-3 rounded" height="140px" width="220px" >
                        </div>
                        <div class="col img-hover-zoom">
                            <img src="{{asset('image/image4.jpg')}}" class="mt-4 ml-3 rounded" height="140px" width="220px" >
                        </div>
                        <div class="col img-hover-zoom">
                            <img src="{{asset('image/image5.jpg')}}" class="mt-4 ml-3 rounded" height="140px" width="220px" >
                        </div>
                    </div>
                </div>

                <div class="card mb-3 bgcontent text-light mt-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{asset('image/image.png')}}" class="mt-4 ml-3 rounded" height="150px" width="150px" >
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">TYPE APA SAJA YANG DISEDIAKAN ?</h5>
                            <p class="card-text">Gateway Pasteur menyediakan beberapa jenis Type Apartemen yang dapat Anda Miliki : Type Studio – Luas : 24M2 Type 1 Bed – Luas : 31M2 Type 2 Bed – Luas : 47M2 Type 3 Bed</p>
                        </div>
                        </div>
                    </div>
                    </div>
                <div class="card mb-3 bgcontent text-light mt-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{asset('image/image6.jpg')}}" class="mt-4 ml-3 rounded" height="150px" width="150px" >
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">FASILITAS YANG TARSEDIA</h5>
                            <p class="card-text">Fasilitas dan Kemewahan Hotel Bintang 5 (★★★★★) The dome Of Light Lagoon Pool Family Pool Floating Deck Community Garden Sky Garden Sky Terrace 24 hour CCTV & Security Dll</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="weare">
        <div class="container ">
            <div class="row justify-content-between">
                <div class="card mb-3 bgcontent text-light" style="max-width: 540px;">
                    <div class="row no-gutters">
                            <img src="{{asset('image/sertificate.jpg')}}" class="mt-4 ml-3 rounded" height="150px" width="150px" >
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">SERTIFIKAT UNTUK PEMILIK</h5>
                                <p class="card-text">Status kepemilikan Apartemen Gateway Pasteur adalah Strata Title</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 bgcontent text-light" style="max-width: 540px;">
                    <div class="row no-gutters">
                            <img src="{{asset('image/bg2.png')}}" class="mt-4 ml-3 rounded" height="150px" width="150px" >
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">VIEW YANG AKAN ANDA DAPATKAN</h5>
                                <p class="card-text">Arah Barat : View pegunungan arah Kota Cimahi View Utara : View Kearah Utara adalah melihat pemandangan Pegunungan Lembang, dan Tol Pasteur Ke Arah Timur : Pegunungan Manglangyang Ke arah Selatan : View Kota Bandung</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact-us mb-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-4 bacg text-center pt-5 mr-2 rounded" height>
                    <div class="container">
                        <img src="{{asset('image/cs.jpg')}}" class="rounded-circle" height="150px" width="150px" >
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">HERY HAWARY</h5>
                        <a class="card-text" href="#">HP. 0823 2175 5647</a><br>
                        <a class="card-text" href="#">Email heryhawary@gmail.com</a><br>
                        <a class="card-text" href="#">Jln. Gunung Batu. No. 203 RT. 06/07 <br> Kel. Sukaraja Kec. Cicendo <br> Bandung 40175</a><br><br>
                        <a class="card-text" href="#">TELP. 022-6027520</a><br>
                        <a class="card-text" href="#">Fax. 022-6027590</a>
                    </div>
                </div>
                <div class=" col bacg text-center pt-4 rounded">
                    <img id="img-logo" src="{{asset('image/logo-gateway-3@2x.png')}}" height="110" width="115"  >
                    <div id="map-container-google-1 " class="z-depth-1-half map-container pt-2 " >
                        <iframe class="border border-secondary" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7921.999977889201!2d107.57426921170791!3d-6.890603185278134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e5d2d2e2be9b%3A0xe3becec157f9669f!2sApartemen%20Gateway%20Pasteur!5e0!3m2!1sid!2sid!4v1586357332266!5m2!1sid!2sid" width="600" height="500" frameborder="0" style="border:0; margin-top:20px" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <p>Jl. Gunung Batu No.203, Sukaraja, Kec. Cicendo, Kota Bandung, Jawa Barat 40175</p>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>

{{-- next update --}}
@endsection