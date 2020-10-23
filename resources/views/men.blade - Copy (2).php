@extends ('master')
@section('konten')
        <!-- Blog Post -->
<br></br>
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-12 mb-4">
      @foreach($laki as $barang)
      <div class="col-mb-2">
         <div class="card">
            <img src="{{ $barang->image }}" class="card-img-top" alt="...">
           <div class="card-body">
             <h5 class="card-title">{{ $barang->title }}</h5>
              <p class="card-text">
              <strong>Harga :</strong> {{$barang->price}}
              <hr>
              <p class="card-text">SIZE : S M L XL </p>
              <br>
              <strong>Keterangan :</strong>
              <br>
              {{ $barang->content}}
              </p>
              <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Pesan</a>
           </div>
         </div>
      </div>
      @endforeach
      <br></br>
       <h3>ULASAN INSPRD27</h3>
        <table border='1'>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jenis Pakaian</th>
                <th>Komentar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($men as $p)
        <tr>
                <td>{{$p->nama}}</td>
                <td>{{$p->jenis_pakaian}}</td>
                <td>{{$p->komentar}}</td>
            </tr>
          @endforeach
        </tbody>
    </table>
    <br></br>
      @endsection
      </div>
</div>
