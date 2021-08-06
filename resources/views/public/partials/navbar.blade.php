<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid container">
      <a class="navbar-brand" href="{{ route('homepage') }}">Desa Poncokusumo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('profile') }}">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('infografis') }}">Infografis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('berita') }}">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active nav-potensi" href="{{ route('potensi_desa') }}">Potensi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active nav-layanan" href="{{ route('layanan') }}">Layanan</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
