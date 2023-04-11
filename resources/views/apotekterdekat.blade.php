@extends('templates/struct/layouts')

@section('container')
@include('templates/components/navbar')
<div class="row" id="apotek">
    <div class="col d-flex justify-content-center">
        <h1 class="fw-bold" id="apotekTerdekat">DAFTAR APOTEK TERDEKAT</h1>
    </div>
</div>
<div class="row">
    <div class="col d-flex justify-content-center">
        <h4 class="fw-bold" id="apotekTerdekat">Temukan Apotek Terdekat Anda</h4>
        <hr style="height: 2px">
    </div>
</div>

{{-- START JUMBTRON --}}
<div class="p-5 mb-4 bg-light" id="jumbotronApotek" style="background-image: url('img/Apotek3.jpg')">
    <div class="container-fluid">
        <div class="row">
        </div>
    </div>
</div>
{{-- END JUMBOTRONNNN
    TWEAK:
    - CEK ID
    - CEK HOVERABLE TAG A
    - CEK CSS SEBELUM BIKIN ATTRIBUT BARU
    --}}
<div class="container" id="apotekInf">
    <div class="row">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <h1 class="fw-bold" id="apotekTerdekat">JABODETABEK</h1>
            </div>
            <hr style="height: 2px">
        </div>
        <div class="row mt-5">
            <div class="col" id="apotekInf">
                <div class="row">
                    @foreach($data as $dt)
                    <div class="col-4 align-items-center" id="apotekInf">
                        <a href="#" style="text-decoration: none; color:black">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center fw-bold" style="color: #1D3557">{{ $dt['nama'] }}</h5>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                        </svg> 
                                        {{ $dt['alamat'] }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@include('templates/components/footer')
@endsection
