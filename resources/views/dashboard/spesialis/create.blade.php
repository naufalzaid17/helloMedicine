@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create Post Spesialis</h1>
</div>

<div class="col-md-10">
    <form method="post" action="/dashAdmin/spesialis/create">
        @csrf
        <div class="mb-3">
            <label for="spesialis" class="form-label">Spesialis</label>
            <input type="text" name="spesialis" class="form-control @error('spesialis') is-invalid @enderror" id="spesialis" placeholder="Masukkan Judul Edukasi" value="{{ old('spesialis') }}">
            @error('spesialis')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
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
