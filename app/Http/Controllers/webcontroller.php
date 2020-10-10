<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Men;
use App\Women;
use App\Kids;
class webcontroller extends Controller
{
    public function home2(){
		return view('home2');
	} 
	public function men(){
		$men = Men::all();
		return view('men', ['men'=> $men]);
	}
    public function women(){
		$women = Women::all();
		return view('women', ['women'=> $women]);
    }
    public function kids(){
		$kids = Kids::all();
		return view('kids', ['kids'=> $kids]);
	}
	public function carabayar(){
        return view('carabayar');
    }
	public function career(){
		return view('career');

    $value = Cache::remember('mens', $second, function(){
			return DB::table('mens')->get();
		});
	$value = Cache::rememberForever('womens', $second, function(){
			return DB::table('womens')->get();
		});
	$value = Cache::remember('kids', $second, function(){
			return DB::table('kids')->get();
		});
	}
}