<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userr extends Model
{
    protected $fillable = ['nama','image','no_hp','jenis_kelamin','tanggal_lahir','alamat'];
}
