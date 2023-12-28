<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laundry extends Model
{
    use HasFactory;

    protected $table = 'laundry';

    protected $fillable = [
        'jenis_laundry', 'id_penyewa', 'berat_laundry', 'tagihan_laundry', 'tgl_pemesanan', 'tgl_selesai', 'status_laundry', 'id_pegawai'
    ];

    public function pegawai(){
        return $this->belongsTo(pegawai::class);
    }

    public function penyewa(){
        return $this->belongsTo(penyewa::class);
    }
}
