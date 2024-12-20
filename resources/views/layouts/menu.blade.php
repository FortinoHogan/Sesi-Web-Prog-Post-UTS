<div class="row">
    <div class="col-12">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a href="" class="navbar-brand">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ route('mahasiswa.index') }}" class="nav-link active"
                                aria-current="page">Mahasiswa</a></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Features</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('set-locale', 'en') }}" class="btn btn-primary">English</a>
                            <a href="{{ route('set-locale', 'id') }}" class="btn btn-primary">Indonesia</a>
                        </li>
                        <li class="nav-item">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="btn btn-danger">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
