<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hair Loss Expert System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="shortcut icon" href="/icon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href={{ asset('img/icon.png') }}>
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    <link rel="stylesheet" href={{ asset('js/main.js') }}>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="/" class="navbar-brand p-0">
            <h1 href="/" class="m-0">Hair Loss</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto py-0">
            <a href="/" class="nav-item nav-link">Home</a>
            <a href="/about-us" class="nav-item nav-link">About Us</a>
        </div>
        </div>
    </nav>
    <div class="container py-5 px-lg-5">
        <div style="visibility: visible;">
            <p class="section-title text-secondary justify-content-center"><span></span>Our Team<span></span></p>
            <h1 class="text-center mb-2">Hasil Persentase</h1>
        </div>

        <div class="skill mb-4">
            <div class="d-flex justify-content-between">
              <p class="mb-2">Kerontokan rambut</p>
              <p class="mb-2">{{ $presentaseKelK01.'%' }}</p>
            </div>
            <div class="progress">
              <div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: {{ $presentaseKelK01 }}%;"></div>
              </div>
        </div>

        <div class="skill mb-4">
            <div class="d-flex justify-content-between">
              <p class="mb-2">Ketombe (Dandruff)</p>
              <p class="mb-2">{{ $presentaseKelK02.'%' }}</p>
            </div>
            <div class="progress">
              <div class="progress-bar bg-secondary" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: {{ $presentaseKelK02 }}%;"></div>
              </div>
        </div>

        <div class="skill mb-4">
            <div class="d-flex justify-content-between">
              <p class="mb-2">Infeksi pada kulit kepala</p>
              <p class="mb-2">{{ $presentaseKelK03.'%' }}</p>
            </div>
            <div class="progress">
              <div class="progress-bar bg-third" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: {{ $presentaseKelK03 }}%;"></div>
              </div>
        </div>

        <div class="skill mb-4">
            <div class="d-flex justify-content-between">
              <p class="mb-2">Rambut kering</p>
              <p class="mb-2">{{ $presentaseKelK04.'%' }}</p>
            </div>
            <div class="progress">
              <div class="progress-bar bg-fourth" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: {{ $presentaseKelK04 }}%;"></div>
              </div>
        </div>

        <div class="skill mb-4">
            <div class="d-flex justify-content-between">
              <p class="mb-2">Kulit kepala berminyak</p>
              <p class="mb-2">{{ $presentaseKelK05.'%' }}</p>
            </div>
            <div class="progress">
              <div class="progress-bar bg-dark" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: {{ $presentaseKelK05 }}%;"></div>
              </div>
        </div>

        @forelse ($penyakitYangDiderita as $nama_penyakit)
        
            <h3 class="nama_penyakit">{{ $nama_penyakit }}</h3>

            @if ($nama_penyakit == "Kerontokan Rambut")
                <h5>Treament kerontokan rambut : </h5>
                
            @elseif($nama_penyakit == "Ketombe (Dandruff)")
                <h5>Treatment Ketombe (Dandruff) : </h5>

            @elseif($nama_penyakit == "Infeksi pada kulit kepala")
                <h5>Treatment Infeksi pada kulit kepala : </h5>

            @elseif($nama_penyakit == "Rambut kering")
                <h5>Treatment Rambut kering : </h5>

            @elseif($nama_penyakit == "Kulit kepala berminyak")
                <h5>Treatment Kulit kepala berminyak : </h5>

            @endif

        
        @empty
            <div class=""></div>
        @endforelse

        <div class="d-grid gap-2 col-2 mx-auto">
            <a type="button" class="btn btn-primary py-sm-2 px-sm-4 rounded-pill" href="/periksa" style="margin-top:30px; font-weight:bold;">Kembali</a>
        </div>
    </div>
    <div class="container-fluid bg-primary text-light footer" style="visibility: visible;">
      <div class="container">
        <div class="copyright">
          <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
              © <a class="border-bottom" href="#">Hair Loss Expert System</a>, All Right Reserved. 
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>