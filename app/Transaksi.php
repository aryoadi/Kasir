<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable =[
        'id_transaksi','id_detail_order','id_order','id_user','tanggal','total_bayar'
    ];
    protected $primaryKey ='id_transaksi';
    protected $table ='transaksi';
}
