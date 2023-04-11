@extends('templates/struct/layouts')

@section('container')

<div class="container-fluid" style="background-image: url('img/jumbotronKonsultasi.webp')" id="jumbotronGetStarted">
    <div class="row justify-content-center">
        <div class="col">
                <div class="nav-bar mt-5">
                    <img src="{{url('img/group 30.png')}}" class="d-block mx-auto">
                </div>
                <div class="row d-block mx-auto">
                    <h1 class="fw-bold text-nowrap text-center">Solusi kesehatan terlengkap, Hello Medicine!</h1>
                </div>
                <img src="{{url('img/4799082.png')}}" id="photoGet" class="d-block mx-auto">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <a href="/login">
                            <button class="w-100 btn btn-lg btn-primary mt-5" type="submit" style="background-color:#023E8A; border: none;" id="button"><b>Get Started 
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg></b>
                            </button>
                        </a>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection