@extends ('master')
@section('konten')
        <!-- Blog Post -->
        <br></br>
        
        <form action="/cmslaravel/public/createkids" method="post"> 
            @csrf 
            <div class="form-group"> 
                <label for="title">Name</label>                 
                <input type="text" class="form-control" required="required" name="title"></br> 
            </div> 
            <div class="form-group"> 
                <label for="image">Image</label>                 
                <input type="text" class="form-control" required="required" name="image"></br> 
            </div> 
            <div class="form-group"> 
                <label for="price">Price</label>                 
                <input type="text" class="form-control" required="required" name="price"></br> 
            </div>
            <div class="form-group"> 
                <label for="content">Description</label>                 
                <input type="text" class="form-control" required="required" name="content"></br> 
            </div> 
            <div class="form-group"> 
                <label for="size">Size</label>                 
                <input type="text" class="form-control" required="required" name="size"></br> 
            </div>
            <div class="form-group"> 
                <label for="created_at">Date</label>                 
                <input type="text" class="form-control" required="required" name="created_at"></br> 
            </div>  
            
            <button type="submit" name="add" class="btn btn-primary float-right">Submit Data</button>        
             </form> 
             <br></br>

@endsection
      
