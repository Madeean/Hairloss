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
          <a href="/" class="nav-item nav-link">Beranda</a>
          <a href="/about-us" class="nav-item nav-link">Tentang</a>
        </div>
      </div>
    </nav>
    <div class="container py-5 px-lg-5">
      <div style="visibility: visible; margin-top:25px">
        <h1 class="text-center mb-2">Gejala yang dialami</h1>
      </div>
      @if (session()->has('alert'))
      <div class="alert alert-danger" role="alert" style="text-align:center; font-weight:bold; color:red">
        {{ session('alert') }}
      </div>
      @endif
      <div class="col-12 mt-3 row">
        <form action="" method="POST">
          @csrf
          <div class="row">
            <div class="col-4 mt-2">
              <ul class="list-group">
                <li class="list-group-item card_checkbox">
                  <input class="form-check-input me-1" name="gejala[]" type="checkbox" value="B1" id="b01">
                  <label class="form-check-label stretched-link" for="b01">Adanya rasa gatal dan serpihan berwarna putih</label>
                </li>
              </ul>
            </div>
            <div class="col-4 mt-2">
              <ul class="list-group">
                <li class="list-group-item card_checkbox">
                  <input class="form-check-input me-1" name="gejala[]" type="checkbox" value="B2" id="b02">
                  <label class="form-check-label stretched-link" for="b02">Kulit kepala atau rambut yang berminyak</label>
                </li>
              </ul>
            </div>
            <div class="col-4 mt-2">
              <ul class="list-group">
                <li class="list-group-item card_checkbox">
                  <input class="form-check-input me-1" name="gejala[]" type="checkbox" value="B3" id="b03">
                  <label class="form-check-label stretched-link" for="b03">Stres psikologis</label>
                </li>
              </ul>
            </div>
            <div class="col-4 mt-2">
              <ul class="list-group">
                <li class="list-group-item card_checkbox">
                  <input class="form-check-input me-1" name="gejala[]" type="checkbox" value="B4" id="b04">
                  <label class="form-check-label stretched-link" for="b04">Banyak rambut yang terlepas ketika sedang keramas atau menyisir rambut</label>
                </li>
              </ul>
            </div>
            <div class="col-4 mt-2">
              <ul class="list-group">
                <li class="list-group-item card_checkbox">
                  <input class="form-check-input me-1" name="gejala[]" type="checkbox" value="B5" id="b05">
                  <label class="form-check-label stretched-link" for="b05">Kepadatan rambut berkurang, sehingga rambut terlihat semakin menipis</label>
                </li>
              </ul>
            </div>
            <div class="col-4 mt-2">
              <ul class="list-group">
                <li class="list-group-item card_checkbox">
                  <input class="form-check-input me-1" name="gejala[]" type="checkbox" value="B6" id="b06">
                  <label class="form-check-label stretched-link" for="b06">Rambut mudah patah ujungnya</label>
                </li>
              </ul>
            </div>
            <div class="col-4 mt-2">
              <ul class="list-group">
                <li class="list-group-item card_checkbox">
                  <input class="form-check-input me-1" name="gejala[]" type="checkbox" value="B7" id="b07">
                  <label class="form-check-label stretched-link" for="b07">Adanya kecenderungan mengalami kebotakan dalam garis keturunan</label>
                </li>
              </ul>
            </div>
            <div class="col-4 mt-2">
              <ul class="list-group">
                <li class="list-group-item card_checkbox">
                  <input class="form-check-input me-1" name="gejala[]" type="checkbox" value="B8" id="b08">
                  <label class="form-check-label stretched-link" for="b08">Pengelupasan pada kulit kepala</label>
                </li>
              </ul>
            </div>
            <div class="col-4 mt-2">
              <ul class="list-group">
                <li class="list-group-item card_checkbox">
                  <input class="form-check-input me-1" name="gejala[]" type="checkbox" value="B9" id="b09">
                  <label class="form-check-label stretched-link" for="b09">Adanya infeksi jamur di kulit kepala</label>
                </li>
              </ul>
            </div>
            <div class="col-4 mt-2">
              <ul class="list-group">
                <li class="list-group-item card_checkbox">
                  <input class="form-check-input me-1" name="gejala[]" type="checkbox" value="B10" id="b010">
                  <label class="form-check-label stretched-link" for="b010">Adanya radang pada kelenjar folikel rambut</label>
                </li>
              </ul>
            </div>
            <div class="col-4 mt-2">
              <ul class="list-group">
                <li class="list-group-item card_checkbox">
                  <input class="form-check-input me-1" name="gejala[]" type="checkbox" value="B11" id="b011">
                  <label class="form-check-label stretched-link" for="b011">Adanya benjolan kecil putih pada akar rambut disertai rasa nyeri dan rambut yang rontok di area yang terkena</label>
                </li>
              </ul>
            </div>
            <div class="col-4 mt-2">
              <ul class="list-group">
                <li class="list-group-item card_checkbox">
                  <input class="form-check-input me-1" name="gejala[]" type="checkbox" value="B12" id="b012">
                  <label class="form-check-label stretched-link" for="b012">Adanya kemerahan di kulit kepala yang berbentuk sirkular</label>
                </li>
              </ul>
            </div>
            <div class="col-4 mt-2">
              <ul class="list-group">
                <li class="list-group-item card_checkbox">
                  <input class="form-check-input me-1" name="gejala[]" type="checkbox" value="B13" id="b013">
                  <label class="form-check-label stretched-link" for="b013">Permukaan luar rambut sering terasa seperti panas</label>
                </li>
              </ul>
            </div>
            <div class="col-4 mt-2">
              <ul class="list-group">
                <li class="list-group-item card_checkbox">
                  <input class="form-check-input me-1" name="gejala[]" type="checkbox" value="B14" id="b014">
                  <label class="form-check-label stretched-link" for="b014">Rambut tampak bercabang</label>
                </li>
              </ul>
            </div>
            <div class="col-4 mt-2">
              <ul class="list-group">
                <li class="list-group-item card_checkbox">
                  <input class="form-check-input me-1" name="gejala[]" type="checkbox" value="B15" id="b015">
                  <label class="form-check-label stretched-link" for="b015">Rambut mudah kusut</label>
                </li>
              </ul>
            </div>
            <div class="col-4 mt-2">
              <ul class="list-group">
                <li class="list-group-item card_checkbox">
                  <input class="form-check-input me-1" name="gejala[]" type="checkbox" value="B16" id="b016">
                  <label class="form-check-label stretched-link" for="b016">Rambut terlihat kusam</label>
                </li>
              </ul>
            </div>
            <div class="col-4 mt-2">
              <ul class="list-group">
                <li class="list-group-item card_checkbox">
                  <input class="form-check-input me-1" name="gejala[]" type="checkbox" value="B17" id="b017">
                  <label class="form-check-label stretched-link" for="b017">Warna rambut terlihat kusam</label>
                </li>
              </ul>
            </div>
            <div class="col-4 mt-2">
              <ul class="list-group">
                <li class="list-group-item card_checkbox">
                  <input class="form-check-input me-1" name="gejala[]" type="checkbox" value="B18" id="b018">
                  <label class="form-check-label stretched-link" for="b018">Kulit kepala lengket dan berminyak</label>
                </li>
              </ul>
            </div>
            <div class="col-4 mt-2">
              <ul class="list-group">
                <li class="list-group-item card_checkbox">
                  <input class="form-check-input me-1" name="gejala[]" type="checkbox" value="B19" id="b019">
                  <label class="form-check-label stretched-link" for="b019">Pori-pori lebih besar dan mudah kotor</label>
                </li>
              </ul>
            </div>
            <div class="col-4 mt-2">
              <ul class="list-group">
                <li class="list-group-item card_checkbox">
                  <input class="form-check-input me-1" name="gejala[]" type="checkbox" value="B20" id="b020">
                  <label class="form-check-label stretched-link" for="b020">Rambut terlihat basah dan lengket</label>
                </li>
              </ul>
            </div>
            <div class="col-4 mt-2">
              <ul class="list-group">
                <li class="list-group-item card_checkbox">
                  <input class="form-check-input me-1 " name="gejala[]" type="checkbox" value="B21" id="b021">
                  <label class="form-check-label stretched-link position-absolute top-50 start-50 translate-middle" for="b021">Kulit kepala terasa perih</label>
                </li>
              </ul>
            </div>
          </div>

          <div class="d-grid gap-2 col-2 mx-auto">
            <button class="btn py-sm-2 px-sm-4 rounded-pill" type="submit" style="margin-top:30px; font-weight:bold;">Periksa</button>
          </div>
          <br>
        </form>   
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