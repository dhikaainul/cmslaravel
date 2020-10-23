@extends ('master')
@section('konten')
        <!-- Blog Post -->
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
              <td><a href="/cmslaravel/public/editcommen/{{ $a->id }}" class="btn btn-primary btn-sm">Edit</a> 
                  <br></br>
                  <a href="/cmslaravel/public/deletecommen/{{ $a->id }}" class="btn btn-primary btn-sm">Hapus</a> 
         </tr> 
         @endforeach 
     </tbody> 
    </table> 
    <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="/cmslaravel/public/men">&larr; Previously</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="/cmslaravel/public/addmanagecommen">Tambah Data &rarr;</a>
          </li>
        </ul>
    <br></br>
@endsection
      
