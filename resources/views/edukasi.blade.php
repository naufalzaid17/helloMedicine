@extends('templates/struct/layouts')

@section('container')
@include('templates/components/navbar')

<div class="container-fluid mb-5">
    <div class="row mt-5 mb-5">
        <div class="row">
            <h1 class="fw-bold">Artikel Edukasi</h1>
        </div>
        <div class="row">
            <div class="container mt-4 mb-4" id="contEdu">
                <div class="row row-cols-3 g-3" id="cardEdu">
                    @if($data!=null)
                        @for($i = 0; $i<3;$i++)
                        <a href="/artikel/{{ $data[$i]['title'] }}" class="text-decoration-none">
                            <div class="card bg-transparent p-2">
                                <img src="{{ asset('img/dummyPhoto.jpg') }}" class="rounded">
                                <h1 class="card-title">{{ $data[$i]["title"] }}</h1>
                                <p class="card-text">{{ $data[$i]["exert"] }}</p>
                            </div>
                        </a>
                        @endfor
                    @else
                    <h1 class="fw-bold">NO POST YET!</h1>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <a href="/artikel" class="btn btn-success btn-lg">Lihat Artikel</a>
                </div>
            </div>
        </div>
    </div>
</div>

@include('templates/components/footer')
@endsection