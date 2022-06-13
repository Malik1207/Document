<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{request()->is('views/guru') ? 'active' : ''}}" aria-current="page" href="{{ route('guru') }}">Halaman Guru</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{request()->is('views/siswa') ? 'active' : ''}}" href="{{ route('siswa') }}">Halaman Siswa</a>
          </li>
        </ul>
        <span class="navbar-text">
          Navbar text with an inline element
        </span>
      </div>
    </div>
</nav>
