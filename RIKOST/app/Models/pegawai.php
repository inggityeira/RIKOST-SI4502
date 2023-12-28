<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;

    protected $table = "pegawai";

    protected $fillable = [
        'nama_pegawai', 'jabatan_pegawai', 'kontak_pegawai', 'alamat_pegawai', 'norek_pegawai', 'status_pegawai'
    ];

    public function laundry(){
        return $this->hasMany(laundry::class);
    }
}