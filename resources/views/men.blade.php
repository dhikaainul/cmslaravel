@extends ('master')
@section('konten')
        <!-- Blog Post -->
        <br></br>
        <div class="card mb-4">
          <img class="card-img-top" src="image/bajulaki2.jpg" alt="Card image cap"width="300" height="800">
          <div class="card-body">
            <h2 class="card-title">INSPRD-HERMIONE  Rp. 120.000</h2>
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
          <img class="card-img-top" src="image/sweaterlaki.jpg" alt="Card image cap"width="300" height="800">
          <div class="card-body">
            <h2 class="card-title">INSPRD – SHASHIKO BLACK  Rp. 192.000</h2>
            <p class="card-text">SIZE : S M L XL 
            <p>Baby Terry | Plastisol | Woven Label
            <p>Bahan baby terry sangat lembut, halus dan ringan ketika dipakai.</p>
          </div>
          <div class="card-footer text-muted">
            Posted on Oktober 3, 2020 by
            <a href="#">Dhika Ainul</a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="image/backpagelaki.jpg" alt="Card image cap"width="300" height="800">
          <div class="card-body">
            <h2 class="card-title">INSPRD – ALISTER  Rp. 192.000</h2>
            <p class="card-text">SIZE : S M L XL 
            <p>Ketika menggunakan bagpack untuk pergi sekolah ataupun pergi liburan, kamu akan terlihat lebih muda dibandingkan</p>
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
            @foreach($men as $p)
        <tr>
                <td>{{$p->nama}}</td>
                <td>{{$p->jenis_pakaian}}</td>
                <td>{{$p->komentar}}</td>
            </tr>
          @endforeach
        </tbody>
    </table>

      @endsection
      
