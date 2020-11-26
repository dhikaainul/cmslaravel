<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userr;

class UserController extends Controller
{
    public function userr(){ 
		$userr= Userr::all();
        return view('Userr',['userr'=>$userr]);
    }
    public function edituserr($id){ 
        $userr = Userr::find($id); 
        return view('edituserr',['userr'=>$userr]);     
    }
    public function updateuserr($id, Request $request) 
    { 
        $userr = Userr::find($id); 
		$userr->nama = $request->title; 
		if($userr->image && file_exists(storage_path('app/public/' . $userr->image))){ 
		\Storage::delete('public/'.$userr->image);    } 
		$image_name = $request->file('image')->store('images', 'public');
		$userr->image = $image_name;
        $userr->no_hp = $request->no_hp; 
		$userr->jenis_kelamin = $request->jenis_kelamin;
		$userr->tanggal_lahir = $request->tanggal_lahir;
		$userr->alamat = $request->alamat;    
        $userr->save(); 
		return redirect('/userr');     
    }
}
