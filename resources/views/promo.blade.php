@extends('templates/struct/layouts')

@section('container')
    <div class="container mt-3" style="background-color:#EDE6DB;">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <h4 class="display-4">Hello Medicine Promos</h4>
            </div>
        </div>
        <div class="row mt-3">
            @foreach($value as $v)
            <div class="col">
                <div class="card mb-3" style="max-width:1240px;">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $v["title"] }}</h5>
                                <p class="card-text">{{ $v["desc"] }}</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
