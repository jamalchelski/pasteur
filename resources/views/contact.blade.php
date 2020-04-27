@extends('components.master')
@section('title', 'Kontak Kami')

@section('content')
<style>
    .my-jumbotron{
        background-color: #7ca8ca;
    }
    .title {
        font-family:monospace;
        color: aliceblue
    }
    .flexbox {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    .maincontainer {
        height:auto;
    max-height:200%;
    overflow:auto;
    margin-bottom: 100px; 
    }
    .maincard{
        width: 15rem;
        margin: 20px;
    }

</style>

<div class="container shadow-lg p-3 bg-white rounded mt-5 text-center mt-5 maincontainer" >
    <div class="jumbotron jumbotron-fluid bg-success my-jumbotron">
        <div class="container">
            <h1 class="display-4 title">KONTAK KAMI</h1>
            <div class="row">
                <div class="col-12 text-center mt-5">
                    <img src="{{asset('image/logo-gateway-3@2x.png')}}" height="270" width="340" class="card-img">
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        @foreach ($contacts as $cont)
            <div class="card maincard" >
                <div class="card-body">
                <h5 class="" class="card-title">{{ $cont->contact }}</h5>
                    <a href="#" class="btn btn-primary">{{ $cont->data }}</a>
                </div>
            </div>
        @endforeach 
    </div>
    <br>
</div>

@endsection