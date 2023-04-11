@extends('templates/struct/layouts')

@section('container')
@include('templates/components/navbar')

<div class="container-fluid" style="min-height: 500px">
    <div class="row">
        <div class="col justify-content-center align-items-middle">
            <h4 class="fw-bold">Payment</h4>
        </div>
        <hr>
    </div>
    <div class="row mt-2">
        <div class="col-md-6">
            <div class="container">
                <h5>Total Pembayaran : Rp. {{ $data->tarif }}</h5>
                <hr>
                <h5 class="mt-1">Pilih Metode Pembayaran</h5>
                <button class="btn btn-outline-danger" type="button" id="bayarDigital" data-bs-toggle="collapse" data-bs-target="#digital" data-bs-parent="#digital" aria-expanded="true" aria-controls="digital" autofocus>Dompet Digital</button>
                <button class="btn btn-outline-danger" type="button" id="bayarDebit" data-bs-toggle="collapse" data-bs-target="#debit" data-bs-parent="#debit" aria-expanded="true" aria-controls="digital">Debit/Kredit</button>
            </div>
        </div>
        <div class="col-md-6" id="optBayar">
            <div class="container collapse show collapse-horizontal" id="digital">
                <div class="row" id="btnBayar">
                    <button class="btn btn-light fw-bold"><img src="{{ asset('/img/gopay.png') }}" class="w-50 h-80"> Gopay</button>
                    <button class="btn btn-light mt-2 fw-bold"><img src="{{ asset('/img/dana.png') }}" class="w-50 h-80"> Dana</button>
                    <button class="btn btn-light mt-2 fw-bold"><img src="{{ asset('/img/shopeePay.png') }}" class="w-50 h-80"> Shopee Pay</button>
                    <button class="btn btn-light mt-2 fw-bold"><img src="{{ asset('/img/linkAja.png') }}" class="w-50 h-80"> LinkAja</button>
                </div>
            </div>
            <div class="container collapse collapse-horizontal border" id="debit">
                <div class="row">
                    <h5>Bayar dengan kartu lain</h5>
                    <hr>
                    <input type="text" class="form-control" placeholder="Nomor Kartu">
                    <div class="row justify-content-between">
                        <div class="col mt-2 mb-2">
                            <input type="text" class="form-control" placeholder="Masa Berlaku">
                        </div>
                        <div class="col mt-2 mb-2">
                            <input type="text" class="form-control" placeholder="CVV">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="row mt-5">
            <div class="col d-flex justify-content-center">
                <a href="/konsultasi/chat/{{ $data->nama }}"  class="btn btn-primary">Bayar</a>
            </div>
        </div>
</div>

@include('templates/components/footer')
@endsection