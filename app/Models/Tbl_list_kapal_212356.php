<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_list_kapal_212356 extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function tblJadwalKapal_212356()
    {
        return $this->hasMany(TblJadwalKapal_212356::class);
    }
}
