@extends ('master')
@section('konten')
        <!-- Blog Post -->
        <div class="row row-cols-1 row-cols-md-3">
          @foreach($perempuan as $barang)
            <div class="col mb-4">
              <div class="card h-100">
              <img src="{{asset('storage/'.$barang->image)}}" class="card-img-top" alt="...">
                  <div class="card-body">
                  <p class="card-text">
                  <strong>{{$barang->title}}</strong>
                  <br>
                  <strong>Harga :</strong> {{$barang->price}}
                  <hr>
                  <p class="card-text">SIZE : S M L XL </p>
                  <strong>Keterangan :</strong>
                  {{ $barang->content}}
                  </p>
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                    <br></br>
                   <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Pesan</a>
                </div>
              </div>
            </div>
            @endforeach
            </div>
          <br>
        <a href="/cmslaravel/public/komentarwomen" class="btn btn-primary">Komentar</a>
        <br></br>
        @endsection