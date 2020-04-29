<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable =[
        'nama_masakan','harga','status_masakan'

    ];
    protected $primaryKey ='id_masakan';
    protected $table ='masakan';
}
