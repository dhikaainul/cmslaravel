@extends ('master')
@section('konten')
        <!-- Blog Post -->
        <br></br>
        <form action="/cmslaravel/public/updatekids/{{$anak->id}}" method="post" enctype="multipart/form-data"> 
            {{csrf_field()}} 
            <input type="hidden" name="id" value="{{$anak->id}}"></br> 
            <div class="form-group"> 
                <label for="title">Name</label>                 
                <input type="text" class="form-control"required="required" name="title" value="{{$anak->title}}"></br> 
            </div> 
            <div class="form-group"> 
                <label for="image">Image</label>                 
                <input type="file" class="form-control" required="required" name="image" value="{{$anak->image}}"></br> 
                <img width="150px" src="{{asset('storage/'.$anak->image)}}">
            </div> 
            <div class="form-group"> 
                <label for="price">Price</label>                 
                <input type="text" class="form-control" required="required" name="price" value="{{$anak->price}}"></br> 
            </div>
            <div class="form-group"> 
                <label for="content">Description</label>                 
                <input type="text" class="form-control" required="required" name="content" value="{{$anak->content}}"></br> 
            </div>
            <div class="form-group"> 
                <label for="size">Size</label>                 
                <input type="text" class="form-control" required="required" name="size" value="{{$anak->size}}"></br> 
            </div>
            <div class="form-group"> 
                <label for="created_at">Date</label>                 
                <input type="text" class="form-control" required="required" name="created_at" value="{{$anak->created_at}}"></br> 
            </div> 
            <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button> 
        </form> 

@endsection
      
