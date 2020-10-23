@extends ('master')
@section('konten')
        <!-- Blog Post -->
        @foreach($laki as $a)
        <br></br>
        <div class="card mb-4">
          <img class="card-img-top"src="{{$a->image}}" alt="Card image cap"width="100" height="500">
          <div class="card-body">
            <h2 class="card-title" href="laki/{{$a->id}}">{{$a->title}}</h2>
            <p class="card-text">SIZE : S M L XL </p>
            <p class="card-text" href="laki/{{$a->id}}">{{$a->price}}</a>
            <p class="card-text" href="laki/{{$a->id}}">{{$a->content}}</a>
          </div>
          <div class="card-footer text-muted">
            Posted on Oktober 3, 2020 by
            <a href="#">Dhika Ainul</a>
          </div>
        </div>
        @endforeach
        <br></br>
        <h3>ULASAN INSPRD27</h3>
        <br>
        <table class="table table-bordered table-striped"> 
     <thead> 
         <tr> 
              <th>Nama</th>  
              <th>Jenis Pakaian</th> 
              <th>Komentar</th>    
              <th>Action</th>
         </tr> 
     </thead> 
     <tbody> 
         @foreach($men as $a) 
         <tr> 
              <td>{{$a->nama}}</td> 
              <td>{{$a->jenis_pakaian}}</td>
              <td>{{$a->komentar}}</td>
              <td><a href="/cmslaravel/public/editmen/{{ $a->id }}" class="btn btn-primary btn-sm">Edit</a> 
                  <br></br>
                  <a href="/cmslaravel/public/deletemen/{{ $a->id }}" class="btn btn-primary btn-sm">Hapus</a> 
         </tr> 
         @endforeach 
     </tbody> 
</table> 
<a href="/cmslaravel/public/addmanagemen" class="btn btn-primary">Tambah Data</a>
<br></br>
      @endsection
      
