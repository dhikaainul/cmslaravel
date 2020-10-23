<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laki extends Model
{
    protected $fillable = ['title','content','image','size','price','created_at'];
}
