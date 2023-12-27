<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class layoutkebersihan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'judul',
        'foto',
        'harga',
        'deskripsi',
    ];
}
