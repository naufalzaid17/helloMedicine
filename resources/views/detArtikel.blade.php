@extends('templates/struct/layouts')

@section('container')
@include('templates/components/navbar')

<div class="container-fluid mb-5" style="min-height: 500px">
    <div class="row">
        <div class="col">
            <p id="tLinkArtikel" class="mt-2"><span><a href="/edukasi">Beranda/</a><a href="/artikel">Artikel/</a>{{ $data['title'] }}</span></p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="container">
            <h1 class="fw-bold d-flex justify-content-center ">{{ $data['title'] }}</h1>
            {!! $data->body !!}
        </div>
    </div>
</div>

@include('templates/components/footer')
@endsection