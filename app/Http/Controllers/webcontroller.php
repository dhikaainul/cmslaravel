<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
use App\Men;
use App\Women;
use App\Kids;
use App\Laki;
use App\Perempuan;
use App\Anak;

class webcontroller extends Controller {
	//gate
	public function __construct(){ 
		//$this->middleware('auth'); 
		$this->middleware(function($request, $next){ 
		if(Gate::allows('user-display')) return $next($request);
	    abort(403, 'Anda tidak memiliki cukup hak akses'); 
		}); 
	}
	//menu
    public function home2(){
		return view('home2');
	} 
	public function men(){
		$laki= Laki::all();
		return view('men', ['laki'=>$laki]);
	}
    public function women(){
		$women = Women::all();
		$perempuan= Perempuan::all();
		return view('women', ['women'=> $women],['perempuan'=>$perempuan]);
    }
    public function kids(){
		$kids = Kids::all();
		$anak = Anak::all();
		return view('kids', ['kids'=> $kids],['anak'=>$anak]);
	}
	public function carabayar(){
        return view('carabayar');
	}
	public function career(){
		return view('career');
	}
	//tampil komenter
	public function komentarmen(){
		$men = Men::all();
		return view('komentarmen',['men'=> $men]);
	}
	public function komentarwomen(){ 
		$women= Women::all();
        return view('komentarwomen',['women'=>$women]);
	}
	public function komentarkids(){ 
		$kids= Kids::all();
        return view('komentarkids',['kids'=>$kids]);
	}
	//menu manage iki dihapus
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
    //tambah manage product dihapus
	public function addmanagemen(){ 
        return view('addmanagemen');
	}
	public function addmanagewomen(){ 
        return view('addmanagewomen');
	}
	public function addmanagekids(){ 
        return view('addmanagekids');
	}
	//tambah komentar
	public function addmanagecommen(){ 
        return view('addmanagecommen');
	}
	public function addmanagecomwomen(){ 
        return view('addmanagecomwomen');
	}
	public function addmanagecomkids(){ 
        return view('addmanagecomkids');
	}
	//proses tambah data produk dihapus
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
	//proses tambah data komentar
	public function createcommen(Request $request) { 
        Men::create([ 
			'nama' => $request->nama, 
			'jenis_pakaian' => $request->jenis_pakaian,
            'komentar' => $request->komentar
        ]); 
        return redirect('/komentarmen');      
	}
	public function createcomwomen(Request $request) { 
        Women::create([ 
			'nama' => $request->nama, 
			'jenis_pakaian' => $request->jenis_pakaian,
            'komentar' => $request->komentar
        ]); 
        return redirect('/komentarwomen');      
	}
	public function createcomkids(Request $request) { 
        Kids::create([ 
			'nama' => $request->nama, 
			'jenis_pakaian' => $request->jenis_pakaian,
            'komentar' => $request->komentar
        ]); 
        return redirect('/komentarkids');      
	}
	//Edit manage produk dihapus
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
	//Edit Komentar
	public function editcommen($id){ 
        $men = Men::find($id); 
        return view('editcommen',['men'=>$men]);     
	}
	public function editcomwomen($id){ 
        $women = Women::find($id); 
        return view('editcomwomen',['women'=>$women]);     
	}
	public function editcomkids($id){ 
        $kids = Kids::find($id); 
        return view('editcomkids',['kids'=>$kids]);     
	}
	//update produk manage dihapus
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
	//Update Komentar
	public function updatecommen($id, Request $request) 
    { 
        $men = Men::find($id); 
		$men->nama = $request->nama; 
		$men->jenis_pakaian = $request->jenis_pakaian;
        $men->komentar = $request->komentar;    
        $men->save(); 
		return redirect('/komentarmen');     
	}
	public function updatecomwomen($id, Request $request) 
    { 
        $women = Women::find($id); 
		$women->nama = $request->nama; 
		$women->jenis_pakaian = $request->jenis_pakaian;
        $women->komentar = $request->komentar;    
        $women->save(); 
		return redirect('/komentarwomen');     
	}
	public function updatecomkids($id, Request $request) 
    { 
        $kids = Kids::find($id); 
		$kids->nama = $request->nama; 
		$kids->jenis_pakaian = $request->jenis_pakaian;
        $kids->komentar = $request->komentar;    
        $kids->save(); 
		return redirect('/komentarkids');     
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
	//Delete KOmentar
	public function deletecommen($id){ 
        $men = Men::find($id); 
		$men->delete();         
		return redirect('/komentarmen');
	}
	public function deletecomwomen($id){ 
        $women = Women::find($id); 
		$women->delete();         
		return redirect('/komentarwomen');
	}
	public function deletecomkids($id){ 
        $kids = Kids::find($id); 
		$kids->delete();         
		return redirect('/komentarkids');
	
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