@extends('templates/struct/layouts')

@section('container')
@include('templates/components/navbar')

{{-- START JUMBTRON --}}
<div class="p-5 mb-4 bg-light" id="jumbotron" style="background-image: url('img/Jumbotron1.webp')">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="fw-bold" id="welkom">Selamat datang, </h1>
                        <p>Konsultasi dokter, mencari rumah sakit atau apotek terdekat, dan edukasi mengenai dunia
                            kesehatan, semua ada di Hello Medicine</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8" id="tombolCard">
                        <div class="row">
                            <div class="col-3 d-flex align-items-stretch align-items-center">
                                <a href="/konsultasi" style="text-decoration: none;color: black">
                                    <div class="card">
                                        <img src="img/tombolKonsultasi.webp"
                                            class="w-80 rounded-circle card-img-top mx-auto d-block" alt="konsultasi">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">Konsultasi</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3 d-flex align-items-stretch align-items-center">
                                <a href="/rsterdekat" style="text-decoration: none;color: black">
                                    <div class="card">
                                        <img src="img/tombolRumahSakit.webp"
                                            class="w-100 rounded-circle card-img-top mx-auto d-block" alt="konsultasi">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">Rumah Sakit Terdekat</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3 d-flex align-items-stretch align-items-center">
                                <a href="/apotekterdekat" style="text-decoration: none;color: black">
                                    <div class="card">
                                        <img src="img/tombolApotek.webp"
                                            class="w-75 rounded-circle card-img-top mx-auto d-block" alt="konsultasi">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">Apotek Terdekat</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3 d-flex align-items-stretch align-items-center">
                                <a href="/edukasi" style="text-decoration: none;color: black">
                                    <div class="card">
                                        <img src="img/tombolEdukasi.webp"
                                            class="w-80 rounded-circle card-img-top mx-auto d-block" alt="konsultasi">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">Edukasi</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center" id="">
                        <img src="{{ asset('/img/iconJumbotron.png') }}" class="img-thumbnail rounded-circle">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- END JUMBOTRONNNN --}}
<div class="container" id="contInf">
    <div class="row">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <h1 class="fw-bold" id="infTerkait">INFORMASI TERKAIT</h1>
                <hr style="height: 2px">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col" id="cardInf">
                <div class="row">
                    <div class="col-3 align-items-center">
                        <a href="/konsultasi" style="text-decoration: none; color:black">
                            <div class="card">
                                <img src="{{ asset('/img/konsultasi.jpg') }}" style="border-radius: 5px;">
                                <div class="card-body">
                                    <h5 class="card-title text-center fw-bold" style="color: #1D3557">Konsultasi</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 align-items-center">
                        <a href="/rsterdekat" style="text-decoration: none; color:black">
                            <div class="card">
                                <img src="{{ asset('/img/rumahsakit.jpg') }}" style="border-radius: 5px;">
                                <div class="card-body">
                                    <h5 class="card-title text-center fw-bold" style="color: #1D3557">Rumah Sakit</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 align-items-center">
                        <a href="/apotekterdekat" style="text-decoration: none; color:black">
                            <div class="card">
                                <img src="{{ asset('/img/Apotek2.jpg') }}" class="h-auto" style="border-radius: 5px;">
                                <div class="card-body">
                                    <h5 class="card-title text-center fw-bold" style="color: #1D3557">Apotek</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 align-items-center">
                        <a href="/edukasi" style="text-decoration: none; color:black">
                            <div class="card">
                                <img src="{{ asset('/img/edukasi.jpeg') }}" style="border-radius: 5px;">
                                <div class="card-body">
                                    <h5 class="card-title text-center fw-bold" style="color: #1D3557">Edukasi</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('templates/components/footer')
@endsection
