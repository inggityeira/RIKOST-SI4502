<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayaran';
    protected $primary_key = 'id_pembayaran';
    protected $guarded = ['id_pembayaran'];
    public function penyewa()
    {
        return $this->belongsTo(Penyewa::class);
    }
}