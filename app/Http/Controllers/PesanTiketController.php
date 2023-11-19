<?php

namespace App\Http\Controllers;

use App\Models\TblJadwalKapal_212356;
use App\Models\TblPesanTiket_212356;
use Illuminate\Http\Request;

class PesanTiketController extends Controller
{
    public function index(TblJadwalKapal_212356 $jadwal_kapal){

        return view('pesan_tiket',[
            'active' => 'reservasi',
            'jadwal_kapal' => $jadwal_kapal
        ]);
    }

    public function store(Request $request){

        $validateData = $request->validate([
            'tbl_jadwal_kapal_212356_id' => 'required',
            'nama_pesan_212356' => 'required',
            'noHp_pesan_212356' => 'required',
            'email_pesan_212356' => 'required',
            'alamat_pesan_212356' => 'required',
        ]);

        TblPesanTiket_212356::create($validateData);

        return redirect('/pesan_tiket/'.$request->tbl_jadwal_kapal_212356_id.'');

    }

    public function show(TblJadwalKapal_212356 $jadwal_kapal)
    {
     
        return view('dashboard.jadwal_kapal.index',[
            'kapal' => $jadwal_kapal,
            'jadwal_kapals' => TblJadwalKapal_212356::where('tbl_list_kapal_212356_id', $jadwal_kapal->id)->get()
        ]);
    }

    public function download(TblPesanTiket_212356 $tiket){

        return "OK";
    }
}
