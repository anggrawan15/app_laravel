<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
    //
    protected $table = 'tbl_kamar';
    protected $fillable = ['no_kamar','nama','fasilitas','harga'];

}
