@extends ('master')
@section('konten')
        <!-- Blog Post -->
        <br></br>
        
        <form action="/cmslaravel/public/createcommen" method="post"> 
            @csrf 
            <div class="form-group"> 
                <label for="nama">Nama</label>                 
                <input type="text" class="form-control" required="required" name="nama"></br> 
            </div> 
            <div class="form-group"> 
                <label for="jenis_pakaian">Jenis Pakaian</label>                 
                <input type="text" class="form-control" required="required" name="jenis_pakaian"></br> 
            </div> 
            <div class="form-group"> 
                <label for="komentar">Komentar</label>                 
                <input type="text" class="form-control" required="required" name="komentar"></br> 
            </div>
            <button type="submit" name="add" class="btn btn-primary float-right">Submit Data</button>        
             </form> 
             <br></br>

@endsection
      
