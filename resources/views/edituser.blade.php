@extends ('master')
@section('konten')
        <!-- Blog Post -->
        <br></br>
        <form action="/cmslaravel/public/updateuser/{{$user->id}}" method="post" enctype="multipart/form-data"> 
            {{csrf_field()}} 
            <input type="hidden" name="id" value="{{$user->id}}"></br> 
            <div class="form-group"> 
                <label for="name">Name</label>                 
                <input type="text" class="form-control"required="required" name="name" value="{{$user->name}}"></br> 
            </div> 
            <div class="form-group"> 
                <label for="image">Image</label>                 
                <input type="file" class="form-control" required="required" name="image" value="{{$user->image}}"></br> 
                <img width="150px" src="{{asset('storage/'.$user->image)}}"> 
            </div> 
            <div class="form-group"> 
                <label for="email">Email</label>                 
                <input type="text" class="form-control" required="required" name="email" value="{{$user->email}}"></br> 
            </div> 
            <div class="form-group"> 
                <label for="password">Password</label>                 
                <input type="text" class="form-control" required="required" name="password" value="{{$user->password}}"></br> 
            </div>
            <div class="form-group"> 
                <label for="roles">Roles</label>                 
                <input type="text" class="form-control" required="required" name="roles" value="{{$user->roles}}"></br> 
            </div> 
            <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button> 
        </form> 

@endsection
      
