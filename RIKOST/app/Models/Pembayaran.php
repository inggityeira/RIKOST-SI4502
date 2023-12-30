<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\penyewa;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = "pembayaran";

    protected $fillable = [
        'id_pembayaran', 'id_penyewa', 'tgl_pembayaran', 'termin_pembayaran', 'nominal_pembayaran', 'aspek_pembayaran', 'metode_pembayaran', 'status_pembayaran'
    ];
    
    public function penyewa()
    {
        return $this->belongsTo(penyewa::class, 'id_penyewa', 'id_penyewa');
}
    
}
