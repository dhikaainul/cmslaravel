@extends ('master')
@section('konten')
        <!-- Blog Post -->
        <br></br>
        <div class="card mb-4">
          <img class="card-img-top" src="image/bajukids.jpg" alt="Card image cap"width="300" height="800">
          <div class="card-body">
            <h2 class="card-title">INSPRD – KD HELMUT #2 – WHIS 1.4  Rp. 80.000</h2>
            <p class="card-text">SIZE : S M L XL </p>
            <p>T-Shirt Bambo 30s
            <p>Bahan kain dari serat bambu sangat mudah terurai (degredable) dan dingin saat dipakai.</P>
          </div>
          <div class="card-footer text-muted">
            Posted on Oktober 3, 2020 by
            <a href="#">Dhika Ainul</a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="image/kemejakids.jpg" alt="Card image cap"width="300" height="800">
          <div class="card-body">
            <h2 class="card-title">INSPRD – KD SHASKHA – WHIS 1.3  Rp. 120.000</h2>
            <p class="card-text">SIZE : S M L XL 
            <p>Bahan yang tidak mudah kusut</p>
          </div>
          <div class="card-footer text-muted">
            Posted on Oktober 3, 2020 by
            <a href="#">Dhika Ainul</a>
          </div>
        </div>
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
            @foreach($kids as $k)
        <tr>
                <td>{{$k->nama}}</td>
                <td>{{$k->jenis_pakaian}}</td>
                <td>{{$k->komentar}}</td>
            </tr>
          @endforeach
        </tbody>
    </table>
@endsection