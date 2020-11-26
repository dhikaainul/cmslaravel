@extends ('master')
@section('konten')
        <!-- Blog Post -->
        <br></br>
        
        <form action="/cmslaravel/public/updatewomen/{{$perempuan->id}}" method="post" enctype="multipart/form-data"> 
            {{csrf_field()}} 
            <input type="hidden" name="id" value="{{$perempuan->id}}"></br> 
            <div class="form-group"> 
                <label for="title">Name</label>                 
                <input type="text" class="form-control"required="required" name="title" value="{{$perempuan->title}}"></br> 
            </div> 
            <div class="form-group"> 
                <label for="image">Image</label>                 
                <input type="file" class="form-control" required="required" name="image" value="{{$perempuan->image}}"></br> 
                <img width="150px" src="{{asset('storage/'.$perempuan->image)}}">
            </div> 
            <div class="form-group"> 
                <label for="price">Price</label>                 
                <input type="text" class="form-control" required="required" name="price" value="{{$perempuan->price}}"></br> 
            </div>
            <div class="form-group"> 
                <label for="content">Description</label>                 
                <input type="text" class="form-control" required="required" name="content" value="{{$perempuan->content}}"></br> 
            </div>
            <div class="form-group"> 
                <label for="size">Size</label>                 
                <input type="text" class="form-control" required="required" name="size" value="{{$perempuan->size}}"></br> 
            </div>
            <div class="form-group"> 
                <label for="created_at">Date</label>                 
                <input type="text" class="form-control" required="required" name="created_at" value="{{$perempuan->created_at}}"></br> 
            </div> 
            <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button> 
        </form> 

@endsection
      
