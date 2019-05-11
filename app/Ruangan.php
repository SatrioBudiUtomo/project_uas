<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    //
    public $table = 'table_ruangan';
    protected $fillable = [
        'nama_ruangan', 'kapasitas'
    ];
    public $timestamps = false;
}
