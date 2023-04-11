@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create Post Edukasi</h1>
</div>

<div class="col-md-10">
    <form method="post" action="/dashAdmin/edukasiDash/create">
        @csrf
        <div class="mb-3">
            <label for="titleEdukasi" class="form-label">Judul Edukasi</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="titleEdukasi" placeholder="Masukkan Judul Edukasi" value="{{ old('title') }}">
            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Masukkan Foto Jika ada</label>
            <input class="form-control" name="photo" type="file" id="foto">
        </div>
        <div class="mb-3">
            <label for="exertEdukasi" class="form-label">Exert</label>
            <input type="text" name="exert" class="form-control @error('exert') is-invalid @enderror" id="exertEdukasi" placeholder="masukkan exert" value="{{ old('exert') }}">
            @error('exert')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            @error('body')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="body" type="hidden" name="body" value="{{ old('body') }}">
            <trix-editor input="body"></trix-editor>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Create Edukasi</button>
        </div>
    </form>
</div>

<script>

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })

</script>

@endsection
