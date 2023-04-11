@extends('templates/struct/layouts')

@section('container')
@include('templates/components/navbar')

<div class="p-4 bg-light" id="jumbotronKonsultasi" style="background-image: url('img/jumbotronKonsultasi.webp')">
    <div class="container-fluid">
        <div class="row">
            <div class="row">
                <div class="col d-flex justify-content-start">
                    <h1 class="fw-bold" id="welkomKonsultasi">Cari Dokter</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <form action="/">
                        <div class="input-group input-group-lg">
                            <span class="input-group-text" id="icKonSearch">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </span>
                            <input type="text" class="form-control bi bi-search" name="cariDokter" id="cariDokter"
                                placeholder="Cari Dokter Untuk Melakukan Konsultasi">
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="container mt-5 d-block" id="konsCard">
                    <div class="row row-cols-6 g-3 mt-2" id="rowCard">
                        <div class="col">
                            <a href="/konsultasi/Dokter Umum">
                                <div class="card bg-transparent w-50">
                                    <img src="{{ asset('img/umum.png') }}" class="rounded-circle">
                                    <h5 class="card-title text-center">Umum</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="/konsultasi/Spesialis Anak">
                                <div class="card bg-transparent w-50">
                                    <img src="{{ asset('img/anak.png') }}" class="rounded-circle">
                                    <h5 class="card-title text-center">Spesialis Anak</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="/konsultasi/Spesialis Kulit">
                                <div class="card bg-transparent w-50">
                                    <img src="{{ asset('img/kulit.png') }}" class="rounded-circle">
                                    <h5 class="card-title text-center">Spesialis Kulit</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="/konsultasi/THT">
                                <div class="card bg-transparent w-50">
                                    <img src="{{ asset('img/tht.png') }}" class="rounded-circle">
                                    <h5 class="card-title text-center">THT</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="/konsultasi/Dokter Gigi">
                                <div class="card bg-transparent w-50">
                                    <img src="{{ asset('img/gigi.png') }}" class="rounded-circle">
                                    <h5 class="card-title text-center">Dokter Gigi</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="/konsultasi/Spesialis Kandungan">
                                <div class="card bg-transparent w-50">
                                    <img src="{{ asset('img/kandungan.png') }}" class="rounded-circle">
                                    <h5 class="card-title text-center" style="font-size: 17px">Spesialis Kandungan</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="/konsultasi/Spesialis Saraf">
                                <div class="card bg-transparent w-50">
                                    <img src="{{ asset('img/saraf.png') }}" class="rounded-circle">
                                    <h5 class="card-title text-center">Spesialis Saraf</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="/konsultasi/Spesialis Jantung">
                                <div class="card bg-transparent w-50">
                                    <img src="{{ asset('img/jantung.png') }}" class="rounded-circle">
                                    <h5 class="card-title text-center">Spesialis Jantung</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="/konsultasi/Spesialis Mata">
                                <div class="card bg-transparent w-50">
                                    <img src="{{ asset('img/mata.png') }}" class="rounded-circle">
                                    <h5 class="card-title text-center">Spesialis Mata</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="/konsultasi/Psikologi Klinis">
                                <div class="card bg-transparent w-50">
                                    <img src="{{ asset('img/psiko.png') }}" class="rounded-circle">
                                    <h5 class="card-title text-center">Psikologi Klinis</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="/konsultasi/Spesialis Bedah">
                                <div class="card bg-transparent w-50">
                                    <img src="{{ asset('img/bedah.png') }}" class="rounded-circle">
                                    <h5 class="card-title text-center">Spesialis Bedah</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="/konsultasi/Spesialis Lainnya">
                                <div class="card bg-transparent w-50">
                                    <img src="{{ asset('img/lainnya.png') }}" class="rounded-circle">
                                    <h5 class="card-title text-center">Spesialis Lainnya</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('templates/components/footer')
@endsection
