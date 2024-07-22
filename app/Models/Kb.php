<?php

namespace App\Models;

use App\Models\Pasien;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kb extends Model
{
    use HasFactory;
    public function Suami(){
        return $this->belongsTo(Pasien::class,'id_suami');
    }
    public function Ibu(){
        return $this->belongsTo(Pasien::class,'id_ibu');
    }
    protected $fillable = [
        'tgl_kb',
        'jmlh_anak',
        'umur_anak_terkecil',
        'jaminan',
        'alki',
        'pasca_plasenta',
        'pasca_salin',
        'do',
        'gc_dari','metode_kb',
        'berat_badan','tinggi_badan','tensi',
        'lila','tgl_kembali','kegagalan','inform_consent',
        'keterangan','id_suami','id_ibu'
    ];
}
