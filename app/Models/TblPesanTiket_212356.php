<?php

namespace App\Models;

use App\Http\Controllers\JadwalKapalController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblPesanTiket_212356 extends Model
{

    protected $guarded = ["id"];
    use HasFactory;

    public function tblJadwalKapal_212356()
    {
        return $this->belongsTo(TblJadwalKapal_212356::class);
    }
}
