@extends ('master')
@section('konten')
<!DOCTYPE html>
<body>
          <!-- Blog Post -->
          <div class="card mb-">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="image/inspired.jpg" alt="First slide" width="100" height="500">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="image/men.jpg" alt="Second slide"  width="100" height="500">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="image/women.jpg" alt="Third slide" width="100" height="500">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="image/kids.jpg" alt="Third slide" width="100" height="500">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
          <div class="card-body">
            <p class="card-text">Inspired27 Official Shop adalah akun resmi dari Inspired27 di platform web. Inspired27 didirikan pada tahun 2003 untuk memberikan pelayanan dalam dunia Fashion di Indonesia.Komitmen Inspired27 adalah memberikan pelayanan di dunia Fashion dengan produk-produk berkualitas terbaik serta harga yang kompetitif & relatif terjangkau.Kualitas daripada produk 
             yang telah kami ciptakan sudah di akui secara luas khususnya wilayah Jawa Timur.</p>           
          </div>
          <div class="card-footer text-muted">
            Posted on Oktober 2, 2020 by
            <a href="#">Dhika Ainul</a>
          </div>
        </div>
        <br></br>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="image/88.jpeg" alt="88.jpeg"width="400" height="600">
          <div class="card-body">
          </div>
          <div class="card-footer text-muted">
            Posted on Oktober 2, 2020 by
            <a href="#">Dhika Ainul</a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="image/99.jpg" alt="99.jpg"width="400" height="700">
          <div class="card-body">
          </div>
          <div class="card-footer text-muted">
            Posted on Oktober 2, 2020 by
            <a href="#">Dhika Ainul</a>
          </div>
        </div>
        </body>
</html>
@endsection
