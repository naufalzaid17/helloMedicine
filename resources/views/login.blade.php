@extends('templates/struct/layouts')

@section('container')

<div class="row justify-content-center" style="background-image: url('img/jumbotronKonsultasi.webp')" id="jumbotronLogin">
    <div class="col-lg-3">
        @if(session()->has('success'))
        <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert" id="myAlert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" id="myBtn"></button>
        </div>
        @endif

        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert" id="myAlert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-di smiss="alert" aria-label="Close" id="myBtn"></button>
        </div>
        @endif

        <main class="form-signin">
            <div class="nav-bar mt-5">
                <a href="/"><img src="{{url('img/group 30.png')}}" alt="logo"></a>
            </div>
            <h1 class="h1 fw-normal text-center">Silahkan Login</h1>
            <br>
            <form action="/login" method="post">
                @csrf
                <div class="form-floating mt-3">
                    <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="Email" autofocus required value="{{ old('email') }}">
                    <label for="email" style="color:black">Email Address</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mt-3">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="password" style="color:black">Password</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary mt-5" type="submit" style="background-color:#023E8A; border: none;">Login</button>
            </form>
            <small class="d-block text-center mt-3">Belum Punya Akun? <a href="/register">Registrasi</a></small>
        </main>
    </div>
</div>
@endsection