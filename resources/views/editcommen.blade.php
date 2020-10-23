@extends ('master')
@section('konten')
        <!-- Blog Post -->
        <br></br>
        
        <form action="/cmslaravel/public/updatecommen/{{$men->id}}" method="post"> 
            {{csrf_field()}} 
            <input type="hidden" name="id" value="{{$men->id}}"></br> 
            <div class="form-group"> 
                <label for="nama">Nama</label>                 
                <input type="text" class="form-control"required="required" name="nama" value="{{$men->nama}}"></br> 
            </div> 
            <div class="form-group"> 
                <label for="jenis_pakaian">Jenis Pakaian</label>                 
                <input type="text" class="form-control" required="required" name="jenis_pakaian" value="{{$men->jenis_pakaian}}"></br> 
            </div> 
            <div class="form-group"> 
                <label for="komentar">Komentar</label>                 
                <input type="text" class="form-control" required="required" name="komentar" value="{{$men->komentar}}"></br> 
            </div>
            <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button> 
        </form> 

@endsection
      
