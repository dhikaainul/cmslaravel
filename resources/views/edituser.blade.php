@extends ('master')
@section('konten')
        <!-- Blog Post -->
        <br></br>
        <form action="/cmslaravel/public/updateuser/{{$user->id}}" method="post"> 
            {{csrf_field()}} 
            <input type="hidden" name="id" value="{{$user->id}}"></br> 
            <div class="form-group"> 
                <label for="name">Name</label>                 
                <input type="text" class="form-control"required="required" name="name" value="{{$user->name}}"></br> 
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
                <label for="created_at">Created_at</label>                 
                <input type="text" class="form-control" required="required" name="content" value="{{$user->created_at}}"></br> 
            </div>
            <div class="form-group"> 
                <label for="updated_at">Updated_at</label>                 
                <input type="text" class="form-control" required="required" name="size" value="{{$user->updated_at}}"></br> 
            </div>
            <div class="form-group"> 
                <label for="roles">Roles</label>                 
                <input type="text" class="form-control" required="required" name="roles" value="{{$user->roles}}"></br> 
            </div> 
            <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button> 
        </form> 

@endsection
      
