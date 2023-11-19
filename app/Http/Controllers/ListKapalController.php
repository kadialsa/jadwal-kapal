<?php

namespace App\Http\Controllers;

use App\Models\Tbl_list_kapal_212356;
use App\Models\TblJadwalKapal_212356;
use Illuminate\Http\Request;

class ListKapalController extends Controller
{
    
    public function index()
    {
        return view('dashboard.list_kapal.index',[
            'list_kapals' => Tbl_list_kapal_212356::orderBy('list_nama_212356','asc')->get()
        ]);
    }

    
    public function create()
    {
        return view('dashboard.list_kapal.create');
    }

    
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'list_nama_212356' => 'required'
        ]);

        Tbl_list_kapal_212356::create($validateData);
        return redirect('/dashboard/list_kapals');
    }

 
    public function show(Tbl_list_kapal_212356 $jadwal_kapal)
    {
        
        return view('dashboard.jadwal_kapal.jadwal_kapal',[
            'kapals' => $jadwal_kapal,
        ]);
    
    }
  
    public function edit(Tbl_list_kapal_212356 $list_kapal)
    {
        
        return view('dashboard.list_kapal.edit',[
            'list_kapal' => $list_kapal
        ]);
    }

  
    public function update(Request $request, Tbl_list_kapal_212356 $list_kapal)
    {
  
        $rules = [
            'list_nama_212356' => 'required|max:255',    
       ];
          
       $validateData = $request->validate($rules);

    
       Tbl_list_kapal_212356::where('id', $list_kapal->id)
            ->update($validateData);

       return redirect('/dashboard/list_kapals')->with('success','Data testimoni telah diubah');
    }

   
    public function destroy(Tbl_list_kapal_212356 $list_kapal)
    {

        

        Tbl_list_kapal_212356::destroy($list_kapal->id);
      

        return redirect('/dashboard/list_kapals')->with('success','Data penelitian telah dihapus');
    }
}
