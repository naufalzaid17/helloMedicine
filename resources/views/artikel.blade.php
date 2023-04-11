@extends('templates/struct/layouts')

@section('container')
@include('templates/components/navbar')

<div class="container-fluid mb-5">

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="fw-bold">Artikel Terbaru</h1>
            </div>
        <hr>
        <div class="row">
            <div class="container mt-4 mb-4">
                <div class="row row-cols-4 g-3" id="cardArtikel">
                    @foreach($data as $dt)
                    <a href="/artikel/{{ $dt->title }}" class="text-decoration-none">
                        <div class="card bg-transparent p-2" style="height: 450px;">
                            <img src="{{ asset('img/dummyPhoto.jpg') }}" class="rounded">
                            <h1 class="card-title">{{ $dt['title'] }}</h1>
                            <p class="card-text">{{ $dt['exert'] }}</p>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
        </div>
    </div>

</div>

@include('templates/components/footer')
@endsection