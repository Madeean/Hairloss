<?php

namespace App\Http\Controllers;

use App\Models\kemungkinan;
use App\Models\penyakit;
use App\Models\rule;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Output\ConsoleOutput;

class PenyakitController extends Controller
{

// $data = penyakit::all();
        // $dataRule = [];
        // for($i=0; $i<count($userInput); $i++){
        //     $dataRule[$i] = rule::where('id_gejala', $userInput[$i])->get();
        // }
        // $dataRule1 = array_merge($dataRule[0]->toArray(), $dataRule[1]->toArray(), $dataRule[2]->toArray());
        // dd($dataRule1);

    public function cekDS(){
        include 'koneksi.php';
        $userInput = ["G001","G002","G003"];

        // QUERY BIKIN YG KYK GINI
        // gatal(P001,P002,P003)
        // kemerahan(P001,P002)
        // pusing(P001)
        $query = DB::table('rules as a')
            ->join('penyakits as b', 'a.id_penyakit', '=', 'b.kode_penyakit')
            ->whereIn('a.id_gejala', $userInput)
            ->groupBy('a.id_gejala')
            ->select([
                DB::raw('GROUP_CONCAT(b.kode_penyakit)'),
                DB::raw('AVG(a.cf)')
            ]);
        $evidence = $query->get();
        // END QUERY
       

        // QUERY GET SELURUH KODE PENYAKIT
        $fod = DB::table('penyakits')
        ->select(DB::raw('GROUP_CONCAT(kode_penyakit)'))
        ->first();
        // END QUERY
        dd($fod);

        

        return view('testds',compact('dataRule'));
    }

    // public function cekKemungkinan(Request $request){
        

    //     // dd(count($request->input('gejala')));
    //     if($request->input('gejala') == null || count($request->input('gejala')) == 1 ||count($request->input('gejala')) == 2){
    //         return redirect()->back()->with('alert','Pilih minimal 3 gejala');
    //         // dd('Pilih Gejala Minimal 3');
    //     }

            
    //     $services = $request->input('gejala');


    //     $banyakKemungkinanK01 = kemungkinan::where('code_kemungkinan', 'K01')->count();
    //     $banyakKemungkinanK02 = kemungkinan::where('code_kemungkinan', 'K02')->count();
    //     $banyakKemungkinanK03 = kemungkinan::where('code_kemungkinan', 'K03')->count();
    //     $banyakKemungkinanK04 = kemungkinan::where('code_kemungkinan', 'K04')->count();
    //     $banyakKemungkinanK05 = kemungkinan::where('code_kemungkinan', 'K05')->count();
    //     $hasil=[];

    //     $nampung=[];
    //     $services = $request->input('gejala');
        
    //     foreach($services as $service){
    //         $nampung  = kemungkinan::where('gejala_code', $service)->distinct()->get(['id','code_kemungkinan','nama_kemungkinan','gejala_code']);
    //         $hasil = array_merge($hasil, $nampung->toArray());
    //     }

    //     $kelompokK01=[];
    //     $kelompokK02=[];
    //     $kelompokK03=[];
    //     $kelompokK04=[];
    //     $kelompokK05=[];

    //     foreach($hasil as $data){
    //         if($data['code_kemungkinan'] == 'K01'){
    //             array_push($kelompokK01, $data);
    //         }elseif($data['code_kemungkinan'] == 'K02'){
    //             array_push($kelompokK02, $data);
    //         }elseif($data['code_kemungkinan'] == 'K03'){
    //             array_push($kelompokK03, $data);
    //         }elseif($data['code_kemungkinan'] == 'K04'){
    //             array_push($kelompokK04, $data);
    //         }elseif($data['code_kemungkinan'] == 'K05'){
    //             array_push($kelompokK05, $data);
    //         }

    //     }

    //     $penyakitYangDiderita = [];

    //     if(count($kelompokK01) == $banyakKemungkinanK01){
    //         array_push($penyakitYangDiderita, 'Kerontokan Rambut');
    //     }
    //     if(count($kelompokK02) == $banyakKemungkinanK02){
    //         array_push($penyakitYangDiderita, 'Ketombe (Dandruff)');
    //     }
    //     if(count($kelompokK03) == $banyakKemungkinanK03){
    //         array_push($penyakitYangDiderita, 'Infeksi pada kulit kepala');
    //     }
    //     if(count($kelompokK04) == $banyakKemungkinanK04){
    //         array_push($penyakitYangDiderita, 'Rambut kering');
    //     }
    //     if(count($kelompokK05) == $banyakKemungkinanK05){
    //         array_push($penyakitYangDiderita, 'Kulit kepala berminyak');
    //     }
            

    //     // dd($penyakitYangDiderita);
       
        
    //     $presentaseKelK01 = count($kelompokK01)/$banyakKemungkinanK01*100;
    //     $presentaseKelK02 = count($kelompokK02)/$banyakKemungkinanK02*100;
    //     $presentaseKelK03 = count($kelompokK03)/$banyakKemungkinanK03*100;
    //     $presentaseKelK04 = count($kelompokK04)/$banyakKemungkinanK04*100;
    //     $presentaseKelK05 = count($kelompokK05)/$banyakKemungkinanK05*100;
        

        
        
        
        

        
        

    //     // $collection = collect($hasil);
    //     // $unique = $collection->unique('nama_kemungkinan');
    //     // $hasilArray[] = $unique->toArray();
    //     // $kemungkinans = $hasilArray[0];

            
        
            
    //     return view('hasil', compact('penyakitYangDiderita','presentaseKelK01','presentaseKelK02','presentaseKelK03','presentaseKelK04','presentaseKelK05'))->with('presentase','');
    // }
}
