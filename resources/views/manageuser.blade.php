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
              <th>Email</th> 
              <th>Created_at</th>
              <th>Updated_at</th>
              <th>Roles</th> 
              <th>Action</th> 
         </tr> 
     </thead> 
     <tbody> 
         @foreach($user as $a) 
         <tr> 
              <td>{{$a->id}}</td> 
              <td>{{$a->name}}</td>
              <td>{{$a->email}}</td>
              <td>{{$a->created_at}}</td>
              <td>{{$a->updated_at}}</td>
              <td>{{$a->roles}}</td> 
              <td><a href="/cmslaravel/public/edituser/{{ $a->id }}" class="btn btn-primary btn-sm">Edit</a> 
                  <br></br>
                  <a href="/cmslaravel/public/deleteuser/{{ $a->id }}" class="btn btn-primary btn-sm">Hapus</a> 
         </tr> 
         @endforeach 
     </tbody> 
</table> 
<br></br>
@endsection
      
