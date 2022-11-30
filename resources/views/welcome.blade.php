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
          <a href="/" class="nav-item nav-link active">Beranda</a>
          <a href="/about-us" class="nav-item nav-link">Tentang</a>
        </div>
      </div>
    </nav>
    <br>
    <div class="container-xxl py-5">
      <div class="container py-5 px-lg-5">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6" style="visibility: visible;">
            <h1 class="mb-5">Hair Loss Expert System</h1>
            <p class="mb-4">
              Hal <b>normal untuk kehilangan rambut</b>. Kita bisa kehilangan <b>antara 50 dan 100 helai rambut sehari</b>, seringkali tanpa kita sadari.
              <br>
              Kerontokan rambut biasanya tidak perlu dikhawatirkan, tetapi <b>kadang-kadang bisa menjadi tanda kondisi medis</b>.
            </p>
            <div class="skill mb-4">
              <div class="d-flex justify-content-between">
                <p class="mb-2">Kerontokan Rambut</p>
                <p class="mb-2">85%</p>
              </div>
              <div class="progress">
                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
              </div>
            </div>
            <div class="skill mb-4">
              <div class="d-flex justify-content-between">
                <p class="mb-2">Ketombe <i>(Dandruff)</i></p>
                <p class="mb-2">10%</p>
              </div>
              <div class="progress">
                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 15%;"></div>
              </div>
            </div>
            <div class="skill mb-4">
              <div class="d-flex justify-content-between">
                <p class="mb-2">Rambut Kering</p>
                <p class="mb-2">5%</p>
              </div>
              <div class="progress">
                <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 5%;"></div>
                </div>
              </div>
              <a href="/periksa" class="btn py-sm-2 px-sm-4 rounded-pill" style="font-weight:bold; margin-top: 10px;">Mari Periksa!</a>
            </div>
            <div class="col-lg-6">
              <img class="img-fluid" src="img/pict.png" style="visibility: visible;">
            </div>
          </div>
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
