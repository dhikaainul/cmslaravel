@extends ('master')
@section('konten')
        <!-- Blog Post -->
        <h3>MANAGE USER</h3>
        <br>
        <table class="table table-bordered table-striped"> 
     <thead> 
         <tr> 
              <th>No</th>
              <th>Name</th>  
              <th>Image</th> 
              <th>Email</th> 
              <th>Roles</th> 
              <th>Action</th> 
         </tr> 
     </thead> 
     <tbody> 
         @foreach($user as $a) 
         <tr> 
              <td>{{$loop->iteration}}</td> 
              <td>{{$a->name}}</td>
              <td><img width="150px" src="{{asset('storage/'.$a->image)}}"></td>
              <td>{{$a->email}}</td>
              <td>{{$a->roles}}</td> 
              <td><a href="/cmslaravel/public/edituser/{{ $a->id }}" class="btn btn-primary btn-sm">Edit</a> 
                  <br></br>
                  <a href="/cmslaravel/public/deleteuser/{{ $a->id }}" class="btn btn-primary btn-sm">Hapus</a> 
         </tr> 
         @endforeach 
     </tbody> 
</table> 
<a href="/cmslaravel/public/addmanageuser" class="btn btn-primary">Tambah Data</a>
<a href="/cmslaravel/public/cetakuser_pdf" class="btn btn-primary float-right" target="_blank">Cetak PDF</a>
<br></br>
@endsection
      
