<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable =[
        'id_detail_order','id_order','id_masakan','keterangan','status_detail_order'
    ];
    protected $primaryKey ='id_detail_order';
    protected $table ='detail_order';
}
