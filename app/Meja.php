<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meja extends Model
{
    protected $fillable =[
        'no_meja','tanggal','id_user','keterangan','status_order'
    ];
    protected $primaryKey ='id_order';
    protected $table ='order';
}
