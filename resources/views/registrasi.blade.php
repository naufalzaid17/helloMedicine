@extends('templates/struct/layouts')

@section('container')

<div class="row justify-content-center" style="background-image: url('img/jumbotronKonsultasi.webp')" id="jumbotronRegistrasi">
    <div class="col-lg-4">
        <main class="form-registration">
            <div class="nav-brand mt-5">
                <a href="/"><img src="{{url('img/group 30.png')}}" alt="logo"></a>
            </div>
            <h1 class="h1 fw-normal text-center">Registrasi</h1>
            <form action="/register" method="post">
                @csrf
                <div class="form-floating mt-3">
                    <input type="text" name="nama" class="form-control rounded-top @error('nama')is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('nama') }}">
                    <label for="name" style="color:black">Full Name</label>
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mt-3">
                    <input type="text" name="username" class="form-control @error('username')is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                    <label for="username" style="color:black">Username</label>
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mt-3">
                    <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="Email address" required value="{{ old('email') }}">
                    <label for="email" style="color:black">Email Address</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mt-3">
                    <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" id="password" placeholder="Password" required value="{{ old('password') }}">
                    <label for="password" style="color:black">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-5" type="submit" style="background-color:#023E8A; border: none;">Register</button>
            </form>
            <small class="d-block text-center mt-3">Sudah Registrasi? <a href="/login">Login</a></small>
        </main>
    </div>
</div>

@endsection