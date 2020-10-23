@extends ('master')
@section('konten')
        <!-- Blog Post -->
        <br></br>
        <form action="/cmslaravel/public/updatemen/{{$laki->id}}" method="post"> 
            {{csrf_field()}} 
            <input type="hidden" name="id" value="{{$laki->id}}"></br> 
            <div class="form-group"> 
                <label for="title">Name</label>                 
                <input type="text" class="form-control"required="required" name="title" value="{{$laki->title}}"></br> 
            </div> 
            <div class="form-group"> 
                <label for="image">Image</label>                 
                <input type="text" class="form-control" required="required" name="image" value="{{$laki->image}}"></br> 
            </div> 
            <div class="form-group"> 
                <label for="price">Price</label>                 
                <input type="text" class="form-control" required="required" name="price" value="{{$laki->price}}"></br> 
            </div>
            <div class="form-group"> 
                <label for="content">Description</label>                 
                <input type="text" class="form-control" required="required" name="content" value="{{$laki->content}}"></br> 
            </div>
            <div class="form-group"> 
                <label for="size">Size</label>                 
                <input type="text" class="form-control" required="required" name="size" value="{{$laki->size}}"></br> 
            </div>
            <div class="form-group"> 
                <label for="created_at">Date</label>                 
                <input type="text" class="form-control" required="required" name="created_at" value="{{$laki->created_at}}"></br> 
            </div> 
            <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button> 
        </form> 

@endsection
      
