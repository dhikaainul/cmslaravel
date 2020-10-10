@extends ('master')
@section('konten')
        <!-- Blog Post -->
        <br></br>
        <div class="card mb-4">
          <img class="card-img-top" src="image/bajuprmpn.jpg" alt="Card image cap"width="300" height="800">
          <div class="card-body">
            <h2 class="card-title">I QUEEN – QUIRLY  Rp. 144.000</h2>
            <p class="card-text">SIZE : S M L XL </p>
            <p>Terbuat dari bahan cotton combed yang mempunyai permukaan yang halus dan lembut, bahan ini adem dan sangat nyaman saat di gunakan dan pastinya sangat efektif menyerap keringat.</P>
          </div>
          <div class="card-footer text-muted">
            Posted on Oktober 3, 2020 by
            <a href="#">Dhika Ainul</a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="image/jaketprmpn.jpg" alt="Card image cap"width="300" height="800">
          <div class="card-body">
            <h2 class="card-title">I QUEEN – CROMBY  Rp. 264.000</h2>
            <p class="card-text">SIZE : S M L XL 
            <p>Bahan baby terry sangat lembut, halus dan ringan ketika dipakai.</p>
          </div>
          <div class="card-footer text-muted">
            Posted on Oktober 3, 2020 by
            <a href="#">Dhika Ainul</a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="image/backpageprmpn.jpg" alt="Card image cap"width="300" height="800">
          <div class="card-body">
            <h2 class="card-title">I QUEEN – ELIZAJANE   Rp. 112.000</h2>
            <p class="card-text">SIZE : S M L XL 
            <p>Terbuat dari bahan taslan waterproof memiliki keunggulan yaitu ringan dan tahan sobek (kuat).</p>
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
            @foreach($women as $w)
        <tr>
                <td>{{$w->nama}}</td>
                <td>{{$w->jenis_pakaian}}</td>
                <td>{{$w->komentar}}</td>
            </tr>
          @endforeach
        </tbody>
    </table>
        @endsection