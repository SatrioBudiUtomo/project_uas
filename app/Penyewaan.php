<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penyewaan extends Model
{
    public $table = 'table_penyewaan';
    protected $fillable = [
        'nama_ruangan', 'nama_mahasiswa', 'nim', 'tgl_sewa', 'tgl_selesai'
    ];
    public $timestamps = false; 
}
