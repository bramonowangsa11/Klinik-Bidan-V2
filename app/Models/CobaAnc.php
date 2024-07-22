<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CobaAnc extends Model
{
    use HasFactory;
    public function Suami(){
        return $this->belongsTo(Pasien::class,'id_suami');
    }
    public function Istri(){
        return $this->belongsTo(Pasien::class,'id_istri');
    }
    
    protected $fillable = [
        'tgl_pemeriksaan',
        'REG',
        'no_kk',
        'buku_kia',
        'pekerjaan_ibu',
        'pekerjaan_suami',        
        'pddk_ibu',
        'pddk_suami',
        'paritas',
        'parsing',
        'p4k',
        'HPPT',
        'HPL',
        'umur_kehamilan',
        'anamnesa',
        'TB',
        'LILA',
        'BB',
        'TFU',
        'tensi',
        'status_TT1_K1',
        'TM',
        'FE',
        'BAT_LAIN',
        'PRESENTASI',
        'DJJ',
        'KEPALA_THD_PAP',
        'TBJ',
        'HB','Protein_urine','GOLDAR','HBSAG',
        'IMS','HIV','HDK','ABORTUS','PERDARAHAN','INFEKSI','KPD','LAIN_LAIN',
        'KOMPLIKASI',
        'trisemester1',
        'trisemester2',
        'trisemester3',
        'FR',
        'RUJUK',
        'keterangan','id_suami','id_istri'
    ];
}
