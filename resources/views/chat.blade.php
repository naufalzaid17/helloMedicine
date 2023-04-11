@extends('templates/struct/layouts')

@section('container')
@include('templates/components/navbar')

<div class="container">
    <div class="row">
        <h5 class="fw-bold">{{ $data->nama }}</h5>
    </div>
    <div class="row">
        <div class="container bg-light" style="min-height: 300px;max-height:500px;">
            <ul id="chatContainer" class="mt-2"> 

            </ul>
        </div>
    </div>
    <div class="row mb-5 mt-3">
        <input type="text" name="" id="chatBar" placeholder="Masukkan Pesan" class="form-control">
        <button hidden type="submit" onclick="addChat()">submit</button>
    </div>
</div>

@include('templates/components/footer')
@endsection