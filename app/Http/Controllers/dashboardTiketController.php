<?php

namespace App\Http\Controllers;

use App\Models\TblJadwalKapal_212356;
use App\Models\TblPesanTiket_212356;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;

class dashboardTiketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TblJadwalKapal_212356 $tiket)
    {
        return view('dashboard.tiket.index',[
            'kapal' => $tiket,
            'tikets' => TblPesanTiket_212356::where('tbl_jadwal_kapal_212356_id', $tiket->id)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TblPesanTiket_212356 $tblPesanTiket_212356)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TblPesanTiket_212356 $tblPesanTiket_212356)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TblPesanTiket_212356 $tblPesanTiket_212356)
    {
        //
    }

    public function download(TblPesanTiket_212356 $tiket){


        //return response()->download('storage/' . $inovasi->dokumen);
        $pdf = Pdf::loadView('dashboard.tiket.cetak_tiket', ['tiket'=> $tiket]);

        // return $pdf->download('Tiket'. Carbon::now()->timestamp . '.pdf'); 
        return $pdf->download('Tiket'. Carbon::now()->timestamp . '.pdf'); 

        return redirect('/inovasis/'. $tiket->id);
    }
}
