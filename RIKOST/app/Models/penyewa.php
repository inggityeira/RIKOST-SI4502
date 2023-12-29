<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyewa extends Model
{
    use HasFactory;

    protected $table = "penyewa";

    protected $fillable = [
        'nama_penyewa', 'kontak_penyewa', 'NIK_penyewa', 'nama_ortu', 'kontak_ortu', 'waktu_sewa', 'id_kamar', 'fasilitas_umum'
    ];

    public function laundry()
    {
        return $this->hasMany(laundry::class);
    }

    public function tamu()
    {
        return $this->hasMany(tamu::class);
    }
}
