<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    use HasFactory;

    protected $table = 'tamu';
    protected $primaryKey = 'id_tamu';

    protected $fillable = [
        'id_tamu', 'nama_tamu', 'no_hp_tamu', 'kartu_identitas', 'waktu_checkin', 'waktu_checkout', 'id_kamar', 'id_penyewa'
    ];


    public function kamar()
    {
        return $this->belongsTo(kamar::class);
    }
    public function penyewa()
    {
        return $this->belongsTo(penyewa::class);
    }
}


