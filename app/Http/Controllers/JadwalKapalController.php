<?php

namespace App\Http\Controllers;

use App\Models\TblJadwalKapal_212356;
use App\Models\Tbl_list_kapal_212356;
use Illuminate\Http\Request;

class JadwalKapalController extends Controller
{

    public function index()
    {
        return view('dashboard.jadwal_kapal.index',[
            'jadwal_kapals' => TblJadwalKapal_212356::orderBy('tanggal_berangkat_212356','asc')->get(),
            
        ]);
    }


    public function create(Request $request)
    {
        return $request;
        // return view('dashboard.jadwal_kapal.create',[
        //     'id_kapal' => $jadwal_kapal->id,
        // ]);
    }
    public function add_jadwal(Tbl_list_kapal_212356 $kapal){

        return view('dashboard.jadwal_kapal.create',[
            'id_kapal' => $kapal->id
        ]);
    }

    public function store(Request $request)
    {
        
        $validateData = $request->validate([
            'tbl_list_kapal_212356_id' => 'required',
            'pelabuhan_asal_212356' => 'required',
            'tanggal_berangkat_212356' => 'required',
            'jam_berangkat_212356' => 'required',
            'pelabuhan_tujuan_212356' => 'required',
            'tanggal_tiba_212356' => 'required',
            'jam_tiba_212356' => 'required',
            'harga_tiket_212356' => 'required'
        ]);

        TblJadwalKapal_212356::create($validateData);

        // return \Redirect::Route::get('/dashboard/jadwal_kapals//add_jadwal', [JadwalKapalController::class,'add_jadwal']);
        return redirect('/dashboard/jadwal_kapals/'.$request->tbl_list_kapal_212356_id.'');
    }

  
    public function show(Tbl_list_kapal_212356 $jadwal_kapal)
    {
        //return $jadwal_kapal;
        return view('dashboard.jadwal_kapal.index',[
            'kapal' => $jadwal_kapal,
            'jadwal_kapals' => TblJadwalKapal_212356::where('tbl_list_kapal_212356_id', $jadwal_kapal->id)->get()
        ]);
    }


    public function edit(TblJadwalKapal_212356 $jadwal_kapal)
    {
        return view('dashboard.jadwal_kapal.edit',[
            'jadwal_kapal' => $jadwal_kapal
        ]);
    }

  
    public function update(Request $request, TblJadwalKapal_212356 $jadwal_kapal)
    {
        $rules = [
            'tbl_list_kapal_212356_id' => 'required',
            'pelabuhan_asal_212356' => 'required',
            'tanggal_berangkat_212356' => 'required',
            'jam_berangkat_212356' => 'required',
            'pelabuhan_tujuan_212356' => 'required',
            'tanggal_tiba_212356' => 'required',
            'jam_tiba_212356' => 'required',
            'harga_tiket_212356' => 'required'
       ];
          
       $validateData = $request->validate($rules);

    
       TblJadwalKapal_212356::where('id', $jadwal_kapal->id)
            ->update($validateData);

       return redirect('/dashboard/jadwal_kapals/'. $jadwal_kapal->tbl_list_kapal_212356_id.'')->with('success','Data testimoni telah diubah');
    }

   
    public function destroy(TblJadwalKapal_212356 $jadwal_kapal)
    {
        TblJadwalKapal_212356::destroy($jadwal_kapal->id);
        //TblJadwalKapal_212356::destroy($list_kapal->id);
        return redirect('/dashboard/jadwal_kapals/'. $jadwal_kapal->tbl_list_kapal_212356_id.'')->with('success','Data testimoni telah diubah');

    }
}
