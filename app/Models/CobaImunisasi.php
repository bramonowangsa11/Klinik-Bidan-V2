<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CobaImunisasi extends Model
{
    use HasFactory;
    public function Ortu(){
        return $this->belongsTo(Pasien::class,'id_ortu');
    }
    public function Anak(){
        return $this->belongsTo(Pasien::class,'id_anak');
    }
    protected $fillable = [
        'tgl_lahir',
        'alamat',
        'berat_badan',
        'panjang_badan',
        'HBO','BCG','PENTA','IPV','ROTA_VIRUS','PCV','tanggal',
        'MK','booster','kipi','vaksin','id_anak','id_ortu'
    ];
}
