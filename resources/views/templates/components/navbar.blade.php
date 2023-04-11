<nav class="navbar navbar-expand-lg navbar-dark">
    <a href="#" class="navbar-brand"><img src="{{ asset('img/group 30.png') }}" height="50"></a>
    <div class="container-fluid">
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item mr-2">
                    <a class="nav-link"  href="/">Home</a>
                </li>
                <li class="nav-item mr-2">
                    <a class="nav-link" href="/rsterdekat">Rumah Sakit terdekat</a>
                </li>
                <li class="nav-item mr-2">
                    <a class="nav-link" href="/apotekterdekat">Apotik terdekat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/konsultasi">Konsultasi</a>
                </li>
                @auth
                <li class="nav-item">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
