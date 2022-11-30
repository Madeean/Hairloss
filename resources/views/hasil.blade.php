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
        <h1 class="text-center mb-2">Hasil Persentase</h1>
      </div>

        <?php
        function formatAmount(string|float|int $value, int $decimals = 2): string
        {
          if (floatval(intval($value)) === floatval($value)) {
            // The number is an integer. Remove all the decimals
            return (string)intval($value);
          }
      
          return number_format($value, $decimals);
        }
        ?>

        <div class="skill mb-4">
            <div class="d-flex justify-content-between">
              <p class="mb-2">Kerontokan rambut</p>
              <p class="mb-2">{{ formatAmount($presentaseKelK01).'%' }}</p>
            </div>
            <div class="progress">
              <div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: {{ $presentaseKelK01 }}%;"></div>
              </div>
        </div>

        <div class="skill mb-4">
            <div class="d-flex justify-content-between">
              <p class="mb-2">Ketombe (Dandruff)</p>
              <p class="mb-2">{{ formatAmount($presentaseKelK02).'%' }}</p>
            </div>
            <div class="progress">
              <div class="progress-bar bg-secondary" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: {{ $presentaseKelK02 }}%;"></div>
              </div>
        </div>

        <div class="skill mb-4">
            <div class="d-flex justify-content-between">
              <p class="mb-2">Infeksi pada kulit kepala</p>
              <p class="mb-2">{{ formatAmount($presentaseKelK03).'%' }}</p>
            </div>
            <div class="progress">
              <div class="progress-bar bg-third" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: {{ $presentaseKelK03 }}%;"></div>
              </div>
        </div>

        <div class="skill mb-4">
            <div class="d-flex justify-content-between">
              <p class="mb-2">Rambut kering</p>
              <p class="mb-2">{{ formatAmount($presentaseKelK04).'%' }}</p>
            </div>
            <div class="progress">
              <div class="progress-bar bg-fourth" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: {{ $presentaseKelK04 }}%;"></div>
              </div>
        </div>

        <div class="skill mb-4">
            <div class="d-flex justify-content-between">
              <p class="mb-2">Kulit kepala berminyak</p>
              <p class="mb-2">{{  formatAmount($presentaseKelK05).'%' }}</p>
            </div>
            <div class="progress">
              <div class="progress-bar bg-dark" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: {{ $presentaseKelK05 }}%;"></div>
              </div>
        </div>
        @forelse ($penyakitYangDiderita as $nama_penyakit)
        
        <h3 class="nama_penyakit">{{ $nama_penyakit }}</h3>

        @if ($nama_penyakit == "Kerontokan Rambut")
          <h6 style= "text-align: justify;">Rambut rontok bisa terjadi pada siapa saja, baik pria maupun wanita. 
            Kondisi ini bisa disebabkan oleh berbagai hal, mulai dari faktor genetik hingga penyakit tertentu, seperti kurang gizi atau malnutrisi, 
            <i>alopecia areata</i>, infeksi jamur di kulit kepala, dan masalah tiroid atau gangguan hormon yang lain.
            </br>Selain itu, rambut rontok juga bisa terjadi karena kesalahan dalam merawat dan menata rambut hingga efek samping obat-obatan tertentu, 
            seperti kemoterapi dan pil KB. Karena rambut rontok bisa disebabkan oleh berbagai hal, perawatan rambut rontok pun perlu disesuaikan dengan penyebabnya. 
            Cara merawat rambut rontok ini bisa dilakukan secara alami maupun dengan menggunakan obat-obatan. 
            Berikut adalah <i>treatment</i> yang bisa Anda lakukan :</br></br>
            <b>Konsumsi Makanan Bergizi</b></br> 
            Kekurangan nutrisi bisa menjadi penyebab rambut rapuh dan mudah rontok. Agar tumbuh kuat, indah, dan tidak mudah rontok, 
            rambut memerlukan berbagai nutrisi, seperti protein, zat besi, <i>zinc</i>, asam folat, vitamin A, vitamin D, vitamin E, biotin, 
            dan antioksidan.</br>Nutrisi-nutrisi tersebut bisa diperoleh dengan mengonsumsi makanan tertentu, seperti telur, ikan berlemak, 
            daging, makanan laut, bayam, alpukat, kacang-kacangan, biji-bijian, dan kacang kedelai.</br>Selain itu, Anda juga bisa mengonsumsi 
            suplemen sesuai rekomendasi dokter jika nutrisi dari makanan dirasa kurang.
            </br></br><b>Menata Rambut Dengan Benar</b></br>
            Cara menata rambut yang tidak tepat juga bisa menyebabkan rambut mudah rusak, patah, dan rontok. Misalnya, mengikat rambut terlalu kencang, 
            menggunakan pengering rambut (<i>hair dryer</i>) yang terlalu panas, mencatok rambut, atau menggunakan bahan kimia untuk meluruskan (<i>hair rebonding</i>), 
            mengeriting, atau mewarnai rambut. Untuk mencegah rambut rontok semakin parah, disarankan untuk menghindari produk penataan rambut yang 
            menggunakan suhu panas dan bahan kimia. Jika perlu, cobalah gunakan produk perawatan rambut, seperti sampo, kondisioner, dan serum rambut, 
            khusus untuk rambut rontok.
            </br></br><b>Mengelola Stress Diri</b></br>
            Sering stres merupakan salah satu faktor risiko terjadinya rambut rontok. Saat Anda mengalami stres berat, hormon-hormon 
            di dalam tubuh akan mengalami perubahan. Perubahan hormon inilah yang memicu kerontokan rambut. Oleh karena itu, Anda disarankan untuk mengelola 
            stres agar rambut Anda tidak semakin rontok.            
            </br></br><b>Sumber Referensi :</b>
            <p><a href="https://www.alodokter.com/rambut-rontok#:~:text=Penyebab%20Rambut%20Rontok&text=Rambut%20rontok%20yang%20terjadi%20secara,oleh%20faktor%20genetik%20atau%20keturunan." target="_blank">Rambut Rontok - Alodokter</a></p>
          </h6>
            
        @elseif($nama_penyakit == "Ketombe (Dandruff)")
          <h6 style= "text-align: justify;">Ketombe adalah serpihan kulit kepala yang berwarna putih atau kuning. 
                Serpihan ini mudah terlihat di kepala dan sering berjatuhan ke bahu. Meski tidak menular dan sangat jarang menjadi 
                penyakit serius, ketombe di kepala dapat menurunkan rasa percaya diri penderitanya. Ketombe atau <i>dandruff</i> merupakan 
                kondisi yang sangat umum terjadi. Menurut penelitian, 50% orang dewasa di seluruh dunia pernah memiliki ketombe 
                di kepala dalam jangka panjang (kronis). Berikut adalah cara cara yang bisa Anda lakukan : 
                </br></br><b>Keramas Secara Teratur</b></br>
                Normalnya keramas dilakukan dalam 2 hari sekali, keramas dapat membantu dalam mengurangki angka ketombe di rambut kita, 
                khususnya menggunakan sampo yang mengandung zat-zat <i>anti-dandruff</i>.
                </br></br><b>Menggunakan Nutrisi Rambut</b></br>
                Zat-zat seperti <i>zinc</i> karbonat, natrium klorida, dan <i>zinc pyrithione</i> yang mampu menghilangkan ketombe.
                </br></br><b>Sumber Referensi :</b>
                <p><a href="</br></br><>https://www.alodokter.com/ketombe#:~:text=Ketombe%20atau%20dandruff%20merupakan%20kondisi,kulit%20kepala%20bayi%20menjadi%20bersisik." target="_blank">Ketombe - Alodokter</a></p>          
          </h6>

        @elseif($nama_penyakit == "Infeksi pada kulit kepala")
          <h6 style= "text-align: justify;">Infeksi pada kulit kepala(<i>Tinea capitis</i>) akibat infeksi jamur di kulit kepala dan batang rambut. 
                Gejala yang muncul dapat berupa kulit kepala gatal, bersisik, pitak, hingga peradangan dan kebotakan yang meluas. 
                (<i>Tinea capitis</i>) atau kurap kulit kepala dapat dialami oleh semua orang. Namun, penyakit ini lebih banyak terjadi pada 
                anak laki-laki usia 3–7 tahun. (<i>Tinea capitis</i>) juga disebut sebagai dermatofitosis kulit kepala.</br>
                Pengobatan <i>tinea capitis</i> bertujuan untuk memberantas jamur dermatofit yang menginfeksi kulit kepala. Dokter dapat memberikan obat antijamur dalam 
                bentuk sampo, oral (minum), atau krim.</br>Pengobatan menggunakan sampo antijamur bisa dengan sampo yang mengandung <i>selenium sulphide povidone-iodine</i>
                atau <i>ketoconazole</i>. Sampo tersebut digunakan dua kali dalam seminggu, selama 1 bulan. Selanjutnya, pasien disarankan untuk kembali menemui dokter.</br>
                Jika hasil pemeriksaan menunjukkan jamur masih ada, pemakaian sampo perlu dikombinasikan dengan antijamur oral, seperti <i>griseofulvin</i>, <i>terbinafine</i>,  
                <i>itraconazole</i>, dan <i>fluconazole</i>. Perlu diketahui, meski cukup efektif, penggunaan <i>griseofulvin</i> dan <i>terbinafine hydrochloride</i> berpotensi menimbulkan efek samping.
                </br></br><b>Sumber Referensi :</b> 
                <p><a href="https://www.alodokter.com/tinea-capitis#:~:text=Tinea%20capitis%20adalah%20penyakit%20akibat,peradangan%20dan%20kebotakan%20yang%20meluas." target="_blank">Tinea Capitis - Alodokter</a></p>
          </h6>

        @elseif($nama_penyakit == "Rambut kering")
          <h6 style= "text-align: justify;">Rambut kering bisa terjadi bila kulit kepala tidak memproduksi cukup minyak untuk melembapkan rambut atau bila lapisan pelindung 
                rambut (kutikula) mengalami kerusakan. Dengan menghindari beragam penyebabnya dan melakukan perawatan rambut yang benar, rambut kering bisa diatasi.</br> Masalah 
                rambut kering umumnya ditandai dengan keluhan berupa rambut terlihat rusak, kusam, tidak berkilau, mudah kusut atau sulit diatur, dan mudah patah sehingga sering kali 
                terlihat seperti rambut rontok saat disisir. Berikut adalah cara untuk merawat rambut yang kering : </br></br><b>Hindari Mencuci Rambut Terlalu Sering</b></br>Untuk memperbaiki 
                rambut kering, Anda disarankan untuk mencuci rambut cukup 2 hari sekali atau setiap kali rambut terasa berminyak dan lepek. Saat mencuci rambut, gunakan sampo dan kondisioner 
                dengan kandungan <i>dimethicone</i>, <i>zinc pyrithione</i>, dan <i>guar hydroxypropyltrimonium chloride</i>.</br></br><b>Pakai Masker Rambut</b></br>Untuk menutrisi rambut dan kulit kepala, Anda bisa 
                gunakan masker rambut dengan bahan-bahan alami, seperti minyak amla, minyak zaitun, lidah buaya, atau minyak kelapa. Bahan-bahan ini bisa membuat rambut menjadi lebih lembut dan 
                melembapkan rambut yang kering.</br></br><b>Jangan Sering Terpapar Panas</b></br>Hindari terlalu sering melakukan penataan rambut yang menggunakan suhu panas, misalnya dengan pengering, 
                pengeriting, atau pelurus rambut.Saat mandi, sebaiknya hindari juga pemakaian air panas yang terlalu sering. Setelah keramas, Anda cukup mengeringkan rambut dengan handuk secara 
                pelan dan lembut, agar kelembapan rambut tetap terjaga.
                </br></br><b>Sumber Referensi :</b>
                <p><a href="https://www.alodokter.com/trik-melakukan-perawatan-rambut-kering#:~:text=Seseorang%20bisa%20mengalami%20rambut%20kering,mengandung%20klorin%20atau%20di%20laut." target="_blank">Rambut Kering, Ini Penyebab dan Cara Merawatnya - Alodokter</a></p>
              </h6>

        @elseif($nama_penyakit == "Kulit kepala berminyak")
          <h6 style= "text-align: justify;">>Normalnya memang kulit kepala mengandung minyak alami (sebum) yang diproduksi oleh kelenjar minyak (<i>sebaceous glands</i>). Namun terkadang kelenjar ini bekerja 
                terlalu keras hingga menghasilkan lebih banyak minyak dan mengakibatkan kulit kepala menjadi berminyak, rambut pun terlihat kusam, lepek, lemas, tidak bernyawa, dan sulit untuk ditata. 
                Berikut adalah cara untuk mengobati kulit kepala yang berminyak : </br></br>
                <ul>
                  <li>Mencuci rambut atau keramas 2-3 hari sekali</li>
                  <li>Keramaslah dengan air hangat, tapi gunakan air dingin pada bilasan terakhir untuk menutup kutikula dan membuat rambut berkilau.</li>
                  <li>Gunakan sampo khusus untuk rambut berminyak untuk menghilangkan minyak berlebih tanpa membuat rambut menjadi kering.</li>
                  <li>Rendam rambut dalam campuran seperempat cangkir cuka dan satu baskom kecil air. Lalu bilas dengan air hangat.</li>
                </ul>
                </br></br><b>Sumber Referensi :</b>
                <p><a href="https://www.alodokter.com/komunitas/topic/rambut-lepek-dan-berminyak" target="_blank">Solusi atas Rambut Berminyak - Alodokter</a></p>
          </h6>

        @endif
    
    @empty
    <?php
            $aray = array("KerontokkanRambut" => $presentaseKelK01, "Ketombe" => $presentaseKelK02, "InfeksiKulitkepala" => $presentaseKelK03, "RambutKering" => $presentaseKelK04, "KulitMinyak"=> $presentaseKelK05);
            $maxx = max($aray);
            $cek1 = 0;
            $cek2 = 0;
            $cek3 = 0;
            $cek4 = 0;
            $cek5 = 0;
            foreach($aray as $tertinggi){
              if($presentaseKelK01 == $maxx && $cek1 == 0){
                ?><h3>Kemungkinan Penyakit : Kerontokkan Rambut</h3>
                <h6 style= "text-align: justify;">Rambut rontok bisa terjadi pada siapa saja, baik pria maupun wanita. 
                Kondisi ini bisa disebabkan oleh berbagai hal, mulai dari faktor genetik hingga penyakit tertentu, seperti kurang gizi atau malnutrisi, 
                <i>alopecia areata</i>, infeksi jamur di kulit kepala, dan masalah tiroid atau gangguan hormon yang lain.
                </br>Selain itu, rambut rontok juga bisa terjadi karena kesalahan dalam merawat dan menata rambut hingga efek samping obat-obatan tertentu, 
                seperti kemoterapi dan pil KB. Karena rambut rontok bisa disebabkan oleh berbagai hal, perawatan rambut rontok pun perlu disesuaikan dengan penyebabnya. 
                Cara merawat rambut rontok ini bisa dilakukan secara alami maupun dengan menggunakan obat-obatan. 
                Berikut adalah <i>treatment</i> yang bisa Anda lakukan :</br></br>
                <b>Konsumsi Makanan Bergizi</b></br> 
                Kekurangan nutrisi bisa menjadi penyebab rambut rapuh dan mudah rontok. Agar tumbuh kuat, indah, dan tidak mudah rontok, 
                rambut memerlukan berbagai nutrisi, seperti protein, zat besi, <i>zinc</i>, asam folat, vitamin A, vitamin D, vitamin E, biotin, 
                dan antioksidan.</br>Nutrisi-nutrisi tersebut bisa diperoleh dengan mengonsumsi makanan tertentu, seperti telur, ikan berlemak, 
                daging, makanan laut, bayam, alpukat, kacang-kacangan, biji-bijian, dan kacang kedelai.</br>Selain itu, Anda juga bisa mengonsumsi 
                suplemen sesuai rekomendasi dokter jika nutrisi dari makanan dirasa kurang.
                </br></br><b>Menata Rambut Dengan Benar</b></br>
                Cara menata rambut yang tidak tepat juga bisa menyebabkan rambut mudah rusak, patah, dan rontok. Misalnya, mengikat rambut terlalu kencang, 
                menggunakan pengering rambut (<i>hair dryer</i>) yang terlalu panas, mencatok rambut, atau menggunakan bahan kimia untuk meluruskan (<i>hair rebonding</i>), 
                mengeriting, atau mewarnai rambut. Untuk mencegah rambut rontok semakin parah, disarankan untuk menghindari produk penataan rambut yang 
                menggunakan suhu panas dan bahan kimia. Jika perlu, cobalah gunakan produk perawatan rambut, seperti sampo, kondisioner, dan serum rambut, 
                khusus untuk rambut rontok.
                </br></br><b>Mengelola Stress Diri</b></br>
                Sering stres merupakan salah satu faktor risiko terjadinya rambut rontok. Saat Anda mengalami stres berat, hormon-hormon 
                di dalam tubuh akan mengalami perubahan. Perubahan hormon inilah yang memicu kerontokan rambut. Oleh karena itu, Anda disarankan untuk mengelola 
                stres agar rambut Anda tidak semakin rontok.
                </br></br><b>Sumber Referensi :</b>
                </br></br><p><a href="https://www.alodokter.com/rambut-rontok#:~:text=Penyebab%20Rambut%20Rontok&text=Rambut%20rontok%20yang%20terjadi%20secara,oleh%20faktor%20genetik%20atau%20keturunan." target="_blank">Rambut Rontok - Alodokter</a></p>
                </h6>                

                <?php $cek1 = 1;
                
              }
              else if($presentaseKelK02 == $maxx && $cek2 == 0){
                ?><h3>Kemungkinan Penyakit : Ketombe (Dandruff)</h3>
                <h6 style= "text-align: justify;">Ketombe adalah serpihan kulit kepala yang berwarna putih atau kuning. 
                Serpihan ini mudah terlihat di kepala dan sering berjatuhan ke bahu. Meski tidak menular dan sangat jarang menjadi 
                penyakit serius, ketombe di kepala dapat menurunkan rasa percaya diri penderitanya. Ketombe atau <i>dandruff</i> merupakan 
                kondisi yang sangat umum terjadi. Menurut penelitian, 50% orang dewasa di seluruh dunia pernah memiliki ketombe 
                di kepala dalam jangka panjang (kronis). Berikut adalah cara cara yang bisa Anda lakukan : 
                </br></br><b>Keramas Secara Teratur</b></br>
                Normalnya keramas dilakukan dalam 2 hari sekali, keramas dapat membantu dalam mengurangki angka ketombe di rambut kita, 
                khususnya menggunakan shampoo yang mengandung zat-zat <i>anti-dandruff</i>.
                </br></br><b>Menggunakan Nutrisi Rambut</b></br>
                Zat-zat seperti <i>zinc</i> karbonat, natrium klorida, dan <i>zinc pyrithione</i> yang mampu menghilangkan ketombe.
                </br></br><b>Sumber Referensi :</b>
                <p><a href="https://www.alodokter.com/ketombe#:~:text=Ketombe%20atau%20dandruff%20merupakan%20kondisi,kulit%20kepala%20bayi%20menjadi%20bersisik" target="_blank">Ketombe - Alodokter</a></p>
                
                </h6>
                <?php
                $cek2 = 1;
                
              }
              else if($presentaseKelK03 == $maxx && $cek3 == 0){
                ?><h3>Kemungkinan Penyakit : Infeksi Pada Kulit Kepala</h3>
                <h6 style= "text-align: justify;">Infeksi pada kulit kepala(<i>Tinea capitis</i>) akibat infeksi jamur di kulit kepala dan batang rambut. 
                Gejala yang muncul dapat berupa kulit kepala gatal, bersisik, pitak, hingga peradangan dan kebotakan yang meluas. 
                (<i>Tinea capitis</i>) atau kurap kulit kepala dapat dialami oleh semua orang. Namun, penyakit ini lebih banyak terjadi pada 
                anak laki-laki usia 3–7 tahun. (<i>Tinea capitis</i>) juga disebut sebagai dermatofitosis kulit kepala.</br>
                Pengobatan <i>tinea capitis</i> bertujuan untuk memberantas jamur dermatofit yang menginfeksi kulit kepala. Dokter dapat memberikan obat antijamur dalam 
                bentuk sampo, oral (minum), atau krim.</br>Pengobatan menggunakan sampo antijamur bisa dengan sampo yang mengandung <i>selenium sulphide povidone-iodine</i>
                atau <i>ketoconazole</i>. Sampo tersebut digunakan dua kali dalam seminggu, selama 1 bulan. Selanjutnya, pasien disarankan untuk kembali menemui dokter.</br>
                Jika hasil pemeriksaan menunjukkan jamur masih ada, pemakaian sampo perlu dikombinasikan dengan antijamur oral, seperti <i>griseofulvin</i>, <i>terbinafine</i>,  
                <i>itraconazole</i>, dan <i>fluconazole</i>. Perlu diketahui, meski cukup efektif, penggunaan <i>griseofulvin</i> dan <i>terbinafine hydrochloride</i> berpotensi menimbulkan efek samping.
                </br></br><b>Sumber Referensi :</b>
                <p><a href="https://www.alodokter.com/tinea-capitis#:~:text=Tinea%20capitis%20adalah%20penyakit%20akibat,peradangan%20dan%20kebotakan%20yang%20meluas." target="_blank">Tinea Capitis - Alodokter</a></p>
        
                </h6>
                <?php
                $cek3 = 1;
                
              }
              else if($presentaseKelK04 == $maxx && $cek4 == 0){
                ?><h3>Kemungkinan Penyakit : Rambut Kering</h3>
                <h6 style= "text-align: justify;">Rambut kering bisa terjadi bila kulit kepala tidak memproduksi cukup minyak untuk melembapkan rambut atau bila lapisan pelindung 
                rambut (kutikula) mengalami kerusakan. Dengan menghindari beragam penyebabnya dan melakukan perawatan rambut yang benar, rambut kering bisa diatasi.</br> Masalah 
                rambut kering umumnya ditandai dengan keluhan berupa rambut terlihat rusak, kusam, tidak berkilau, mudah kusut atau sulit diatur, dan mudah patah sehingga sering kali 
                terlihat seperti rambut rontok saat disisir. Berikut adalah cara untuk merawat rambut yang kering : </br></br><b>Hindari Mencuci Rambut Terlalu Sering</b></br>Untuk memperbaiki 
                rambut kering, Anda disarankan untuk mencuci rambut cukup 2 hari sekali atau setiap kali rambut terasa berminyak dan lepek. Saat mencuci rambut, gunakan sampo dan kondisioner 
                dengan kandungan <i>dimethicone</i>, <i>zinc pyrithione</i>, dan <i>guar hydroxypropyltrimonium chloride</i>.</br></br><b>Pakai Masker Rambut</b></br>Untuk menutrisi rambut dan kulit kepala, Anda bisa 
                gunakan masker rambut dengan bahan-bahan alami, seperti minyak amla, minyak zaitun, lidah buaya, atau minyak kelapa. Bahan-bahan ini bisa membuat rambut menjadi lebih lembut dan 
                melembapkan rambut yang kering.</br></br><b>Jangan Sering Terpapar Panas</b></br>Hindari terlalu sering melakukan penataan rambut yang menggunakan suhu panas, misalnya dengan pengering, 
                pengeriting, atau pelurus rambut.Saat mandi, sebaiknya hindari juga pemakaian air panas yang terlalu sering. Setelah keramas, Anda cukup mengeringkan rambut dengan handuk secara 
                pelan dan lembut, agar kelembapan rambut tetap terjaga.
                </br></br><b>Sumber Referensi :</b>
                <p><a href="https://www.alodokter.com/trik-melakukan-perawatan-rambut-kering#:~:text=Seseorang%20bisa%20mengalami%20rambut%20kering,mengandung%20klorin%20atau%20di%20laut." target="_blank">Rambut Kering, Ini Penyebab dan Cara Merawatnya - Alodokter</a></p>
          
                </h6>
                <?php
                $cek4 = 1;
                
              }
              else if($presentaseKelK05 == $maxx && $cek5 == 0){
                ?><h3>Kemungkinan Penyakit : Kulit Kepala Berminyak</h3>
                <h6 style= "text-align: justify;">Normalnya memang kulit kepala mengandung minyak alami (sebum) yang diproduksi oleh kelenjar minyak (<i>sebaceous glands</i>). Namun terkadang kelenjar ini bekerja 
                terlalu keras hingga menghasilkan lebih banyak minyak dan mengakibatkan kulit kepala menjadi berminyak, rambut pun terlihat kusam, lepek, lemas, tidak bernyawa, dan sulit untuk ditata. 
                Berikut adalah cara untuk mengobati kulit kepala yang berminyak : </br></br>
                <ul>
                  <li>Mencuci rambut atau keramas 2-3 hari sekali</li>
                  <li>Keramaslah dengan air hangat, tapi gunakan air dingin pada bilasan terakhir untuk menutup kutikula dan membuat rambut berkilau.</li>
                  <li>Gunakan sampo khusus untuk rambut berminyak untuk menghilangkan minyak berlebih tanpa membuat rambut menjadi kering.</li>
                  <li>Rendam rambut dalam campuran seperempat cangkir cuka dan satu baskom kecil air. Lalu bilas dengan air hangat.</li>
                </ul>
                </br></br><b>Sumber Referensi :</b>
                <p><a href="https://www.alodokter.com/komunitas/topic/rambut-lepek-dan-berminyak" target="_blank">Solusi atas Rambut Berminyak - Alodokter</a></p>
                </h6>
                <?php
                $cek5 = 1;
                
              }
            }
            ?>
            @endforelse
            
        
           

        <div class="d-grid gap-2 col-2 mx-auto">
            <a type="button" class="btn py-sm-2 px-sm-4 rounded-pill" href="/periksa" style="margin-top:30px; font-weight:bold;">Kembali</a>
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
