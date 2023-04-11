@extends('templates/struct/layouts')

@section('container')
@include('templates/components/navbar')

<div class="container-fluid" style="min-height: 500px">
    <div class="row justify-content-start">
        <div class="container">
            <div class="row">
                <div class="col align-self-center mt-2">
                    <h4 class="fw-bold">{{ $data }}</h4>
                </div>
            </div>
        </div>
        <hr>
    </div>
    <div class="row">
        <div class="container">
            <div class="row row-cols-md-2 g-3">
                @if($dokter->isNotEmpty())
                    @foreach($dokter as $dok)
                    <div class="col">
                        <div class="card">
                            <div class="row g-0">
                                <div class="col-md-4 justify-content-center align-self-center">
                                    <img src="{{ asset('/img/bedah.png') }}" class="w-50">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body p-2">
                                        <h5 class="fw-bold">{{ $dok->nama }}</h5>
                                        <p>{{ $data }}</p>
                                        <h5><i class="bi bi-cash"></i> Rp. {{ $dok->tarif }}</h5>
                                        <div class="row justify-content-end">
                                            <div class="col-md-4">
                                                <div class="row me-1">
                                                    <a href="/pembayaran/{{ $dok->nama }}" class="btn btn-danger">Chat</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                <div class="row mt-2">
                    <div class="col-md-8 justify-content-center align-self-center">
                        <h4 class="fw-bold">Yahhh, Gaada Dokter:(</h4>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>

</div>

@include('templates/components/footer')
@endsection