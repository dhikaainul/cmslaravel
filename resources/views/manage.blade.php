@extends ('master')
@section('konten')
        <!-- Blog Post -->
        <h3>MEN'S CLOTHING SETTINGS</h3>
        <br>
        <table class="table table-bordered table-striped"> 
     <thead> 
         <tr> 
              <th>No</th>
              <th>Name</th>  
              <th>Image</th> 
              <th>Price</th>
              <th>Deskription</th>
              <th>Date</th>
              <th>Action</th> 
              
         </tr> 
     </thead> 
     <tbody> 
         @foreach($laki as $a) 
         <tr> 
              <td>{{$loop->iteration}}</td> 
              <td>{{$a->title}}</td>
              <td><img class="card-img-top"src="{{asset('storage/'.$a->image)}}"></td>
              <td>{{$a->price}}</td>
              <td>{{$a->content}}</td>
              <td>{{$a->created_at}}</td> 
              <td><a href="/cmslaravel/public/editmen/{{ $a->id }}" class="btn btn-primary btn-sm">Edit</a> 
                  <br></br>
                  <a href="/cmslaravel/public/deletemen/{{ $a->id }}" class="btn btn-primary btn-sm">Hapus</a> 
         </tr> 
         @endforeach 
     </tbody> 
</table> 
<a href="/cmslaravel/public/addmanagemen" class="btn btn-primary float-left">Tambah Data</a>
<a href="/cmslaravel/public/cetak_pdf" class="btn btn-primary float-right" target="_blank">Cetak PDF</a> 
<br></br>
<!-- Pagination -->
<ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="/cmslaravel/public/manage">1</a></li>
    <li class="page-item"><a class="page-link" href="/cmslaravel/public/manage3">2</a></li>
    <li class="page-item"><a class="page-link" href="/cmslaravel/public/manage2">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
@endsection
      
