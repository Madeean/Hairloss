<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hair Loss Expert System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .card_checkbox{
            height: 150px !important;
            font-size: 1.3vw;
        }
    </style>
  </head>
  <body>
    <div class="container">
        @forelse ($penyakitYangDiderita as $nama_penyakit)
        
            <h1>{{ $nama_penyakit }}</h1>

            @if ($nama_penyakit == "Kerontokan Rambut")
                <h1>Treament kerontokan rambut : </h1>
                
            @elseif($nama_penyakit == "Ketombe (Dandruff)")
                <h1>Treatment Ketombe (Dandruff) : </h1>

            @elseif($nama_penyakit == "Infeksi pada kulit kepala")
                <h1>Treatment Infeksi pada kulit kepala : </h1>

            @elseif($nama_penyakit == "Rambut kering")
                <h1>Treatment Rambut kering : </h1>

            @elseif($nama_penyakit == "Kulit kepala berminyak")
                <h1>Treatment Kulit kepala berminyak : </h1>

            @endif

        
        @empty
            <div class=""></div>
        @endforelse

        <div><h1>{{'Kemungkinan Kerontokan rambut : '. $presentaseKelK01 .'%' }}</h1></div>
        <div><h1>{{'Kemungkinan mengalami Ketombe (Danduff) : '. $presentaseKelK02 .'%'}}</h1></div>
        <div><h1>{{'Kemungkinan mengalami Infeksi pada kulit kepala : '. $presentaseKelK03 .'%'}}</h1></div>
        <div><h1>{{'Kemungkinan mengalami Rambut kering : '. $presentaseKelK04 .'%'}}</h1></div>
        <div><h1>{{'Kemungkinan mengalami Kulit kepala berminyak : '. $presentaseKelK05 .'%'}}</h1></div>

        <a type="button" class="btn btn-primary"  href="/">Back</a>
    </div>
    <script>
      </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
