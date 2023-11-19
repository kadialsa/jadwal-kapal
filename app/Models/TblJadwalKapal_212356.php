<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblJadwalKapal_212356 extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    // public function scopeFilter($query, array $filters){
    //     $query->when($filters['search'] ?? false, function($query, $search){
    //         return $query->where('title', 'like', '%' . $search . '%')
    //                     ->orWhere('body','like','%' . $search. '%');
    //     });
    // }

    public function tbl_list_kapal_212356()
    {
        return $this->belongsTo(tbl_list_kapal_212356::class);
    }

    public function tblPesanTiket_212356()
    {
        return $this->hasMany(TblPesanTiket_212356::class);
    }
}
