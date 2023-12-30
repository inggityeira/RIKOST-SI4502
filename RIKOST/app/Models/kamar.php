<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
    use HasFactory;

    protected $table = 'kamar';

    protected $fillable = [
        'id_kamar', 'lantai_kamar', 'jenis_kamar', 'fasilitas_kamar', 'status_kamar'
    ];

    public function kamar()
    {
        return $this->belongsTo(kamar::class);
    }

    public function penyewa()
    {
        return $this->hasOne(penyewa::class);
    }
}
