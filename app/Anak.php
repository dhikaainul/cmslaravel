<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    protected $fillable = ['title','content','image','size','price','created_at'];
}
