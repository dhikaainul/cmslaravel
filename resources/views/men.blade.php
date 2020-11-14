@extends ('master')
@section('konten')
        <!-- Blog Post -->
<div class="row row-cols-1 row-cols-md-3">
@foreach($laki as $barang)
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

<!-- <div class="row">
@foreach($laki as $barang)
  <div class="col-md-3 box">
    <div class="card h-100">
      <img src="{{ $barang->image }}" class="card-img-top" alt="...">
        <div class="card-body">
        <p class="card-text">
        <strong>Harga :</strong> {{$barang->price}}
        <hr>
        <p class="card-text">SIZE : S M L XL </p>
        <br>
        <strong>Keterangan :</strong>
        <br>
        {{ $barang->content}}
        </p>
          <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
      </div>
    </div>
  </div>
@endforeach
</div>
<style type="text/css">
.box {
        margin: 10px;
}
</style> -->
<a href="/cmslaravel/public/komentarmen" class="btn btn-primary">Komentar</a>
<br></br>
      @endsection
      </div>
</div>
