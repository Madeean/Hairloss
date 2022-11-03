<?php

namespace App\Http\Controllers;

use App\Models\kemungkinan;
use Illuminate\Http\Request;

class KemungkinanController extends Controller
{
    public function cekKemungkinan(Request $request){
        $hasil=[];

        $nampung=[];
        $services = $request->input('gejala');
        
        foreach($services as $service){
            $nampung  = kemungkinan::where('gejala_code', $service)->distinct()->get('nama_kemungkinan');
            $hasil = array_merge($hasil, $nampung->toArray());
        }
        // for($i = 0; $i < count($services); $i++){
        //     $nampung[$i]  = kemungkinan::where('gejala_code', $services[$i])->distinct()->get('nama_kemungkinan')->toArray();
            
        // }
        // for($j = 0; $j < count($nampung); $j++){
        //     for($k = 0; $k < count($nampung[$j]); $k++){
        //         $hasil .= " ". $nampung[$j][$k]['nama_kemungkinan'];
        //     }
        // }


        // for($i = 0; $i < count($services); $i++){
        //     $nampung  = kemungkinan::where('gejala_code', $services[$i])->distinct()->get('code_kemungkinan');
            
        // }
        
        

        // dd($hasil);
        $collection = collect($hasil);
        $unique = $collection->unique('nama_kemungkinan');
        $hasilArray[] = $unique->toArray();
        $kemungkinans = $hasilArray[0];
        // dd($kemungkinans);
        return view('welcome', compact('kemungkinans'));
    }
}
