<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;

use App\Laki;
use App\Perempuan;
use App\Anak;
use App\User;

class ManageController extends Controller
{
    //menu manage
	public function manage(){ 
		$laki= Laki::all();
        return view('manage',['laki'=>$laki]);
	}
	public function manage2(){ 
		$anak= Anak::all();
        return view('manage2',['anak'=>$anak]);
	}
	public function manage3(){ 
		$perempuan= Perempuan::all();
        return view('manage3',['perempuan'=>$perempuan]);
	}
	//menu manage user
	public function manageuser(){ 
		$user= User::all();
        return view('manageuser',['user'=>$user]);
	}
    //tambah manage product
	public function addmanagemen(){ 
        return view('addmanagemen');
	}
	public function addmanagewomen(){ 
        return view('addmanagewomen');
	}
	public function addmanagekids(){ 
        return view('addmanagekids');
	}
    //proses tambah data produk
	public function createmen(Request $request) { 
        Laki::create([ 
			'title' => $request->title, 
			'image' => $request->image,
            'content' => $request->content, 
			'price' => $request->price,
			'size' => $request->size,
			'created_at'=>$request->created_at
        ]); 
        return redirect('/manage');      
	}
	public function createwomen(Request $request) { 
        Perempuan::create([ 
            'title' => $request->title, 
			'image' => $request->image,
            'content' => $request->content, 
			'price' => $request->price,
			'size' => $request->size,
			'created_at'=>$request->created_at
        ]); 
		return redirect('/manage3');
	}
	public function createkids(Request $request) { 
        Anak::create([ 
			'title' => $request->title, 
			'image' => $request->image,
            'content' => $request->content, 
			'price' => $request->price,
			'size' => $request->size,
			'created_at'=>$request->created_at
        ]); 
        return redirect('/manage2');      
    }
    //Edit manage produk 
	public function editmen($id){ 
        $laki = Laki::find($id); 
        return view('editmen',['laki'=>$laki]);     
	}
	public function editwomen($id){ 
        $perempuan = Perempuan::find($id); 
        return view('editwomen',['perempuan'=>$perempuan]);     
	}
	public function editkids($id){ 
        $anak = Anak::find($id); 
        return view('editkids',['anak'=>$anak]);     
    }
    //update produk manage
	public function updatemen($id, Request $request) 
    { 
        $laki = Laki::find($id); 
		$laki->title = $request->title; 
		$laki->image = $request->image;
        $laki->content = $request->content; 
		$laki->price = $request->price;
		$laki->size = $request->size;
		$laki->created_at = $request->created_at;    
        $laki->save(); 
		return redirect('/manage');     
	}
	public function updatewomen($id, Request $request) 
    { 
        $perempuan = Perempuan::find($id); 
		$perempuan->title = $request->title; 
		$perempuan->image = $request->image;
        $perempuan->content = $request->content; 
		$perempuan->price = $request->price;
		$perempuan->size = $request->size;
		$perempuan->created_at = $request->created_at;    
        $perempuan->save(); 
		return redirect('/manage3');     
	}
	public function updatekids($id, Request $request) 
    { 
        $anak = Anak::find($id); 
		$anak->title = $request->title; 
		$anak->image = $request->image;
        $anak->content = $request->content; 
		$anak->price = $request->price;
		$anak->size = $request->size;
		$anak->created_at = $request->created_at;    
        $anak->save(); 
		return redirect('/manage2');     
    }
    //Delete Produk manage
	public function deletemen($id){ 
        $laki = Laki::find($id); 
		$laki->delete();         
		return redirect('/manage');
	}
	public function deletewomen($id){ 
        $perempuan = Perempuan::find($id); 
		$perempuan->delete();         
		return redirect('/manage3');
	}
	public function deletekids($id){ 
        $anak = Anak::find($id); 
		$anak->delete();         
		return redirect('/manage2'); 
	}
	//edit manage user
	public function edituser($id){ 
        $user = User::find($id); 
        return view('edituser',['user'=>$user]);     
	}
	//update manage user
	public function updateuser($id, Request $request) 
    { 
        $user = User::find($id); 
		$user->name = $request->name; 
		$user->email = $request->email;
        $user->password = $request->password; 
		$user->created_at = $request->created_at;
		$user->updated_at = $request->updated_at;
		$user->roles = $request->roles;    
        $user->save(); 
		return redirect('/manageuser');     
	}
	//delete manage user
	public function deleteuser($id){ 
        $user = User::find($id); 
		$user->delete();         
		return redirect('/manageuser'); 
	}
}
