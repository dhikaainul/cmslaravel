@extends ('master')
@section('konten')
        <!-- Blog Post -->
        <br></br>
        <form action="/cmslaravel/public/updateuserr/{{$userr->id}}" method="post" enctype="multipart/form-data"> 
            {{csrf_field()}} 
            <input type="hidden" name="id" value="{{$userr->id}}"></br> 
            <div class="form-group"> 
                <label for="name">Nama</label>                 
                <input type="text" class="form-control"required="required" name="name" value="{{$userr->name}}"></br> 
            </div> 
            <div class="form-group"> 
                <label for="image">Image</label>                 
                <input type="file" class="form-control" required="required" name="image" value="{{$userr->image}}"></br> 
                <img width="150px" src="{{asset('storage/'.$userr->image)}}"> 
            </div> 
            <div class="form-group"> 
                <label for="no_hp">No HP</label>                 
                <input type="text" class="form-control" required="required" name="no_hp" value="{{$userr->no_hp}}"></br> 
            </div>
            <div class="form-group"> 
                <label for="jenis_kelamin">Jenis Kelamin</label>                 
                <input type="text" class="form-control" required="required" name="jenis_kelamin" value="{{$userr->jenis_kelamin}}"></br> 
            </div>
            <div class="form-group"> 
                <label for="tanggal_lahir">Tanggal Lahir</label>                 
                <input type="text" class="form-control" required="required" name="tanggal_lahir" value="{{$userr->tanggal_lahir}}"></br> 
            </div>
            <div class="form-group"> 
                <label for="alamat">Alamat</label>                 
                <input type="text" class="form-control" required="required" name="alamat" value="{{$userr->alamat}}"></br> 
            </div> 
            <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button> 
        </form> 
        
@endsection
      
