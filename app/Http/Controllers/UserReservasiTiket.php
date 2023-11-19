<?php

namespace App\Http\Controllers;

use App\Models\Tbl_list_kapal_212356;
use App\Models\TblJadwalKapal_212356;
use Illuminate\Http\Request;

class UserReservasiTiket extends Controller
{
    
    public function index(Request $request){

       // dd(request('pilihan'));
        $jadwal_kapal = TblJadwalKapal_212356::orderBy('tanggal_berangkat_212356','asc');
        $kapals = Tbl_list_kapal_212356::orderBy('list_nama_212356','asc');
        
        $search = 'Jadwal Kapal dalam Waktu Dekat';

        if(request('search') == 'a'){
           

            $jadwal_kapal = TblJadwalKapal_212356::orderBy('tanggal_berangkat_212356','asc');
            $kapals = Tbl_list_kapal_212356::orderBy('list_nama_212356','asc');
            $search = 'Jadwal Kapal dalam Waktu Dekat';

            
        }else{
            $jadwal_kapal->where('tbl_list_kapal_212356_id', request('search'))->orderBy('tanggal_berangkat_212356','asc');
            $search = $kapals->where('id',request('search'))->get('list_nama_212356');
           
            $kapals = Tbl_list_kapal_212356::latest();
            foreach($search as $s){
                $search = "Jadwal Kapal ". $s->list_nama_212356;
            }
        }
            
        
        return view('reservasi',[
            'active' => 'reservasi',
            'kapals' => $kapals->get(),
            'jadwal_kapals' => $jadwal_kapal->get(),
            'search' => $search
        ]
        );
    }

  
}
