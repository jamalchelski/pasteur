<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    protected $table = "gambars";
 
    protected $fillable = ['file','keterangan'];

}
