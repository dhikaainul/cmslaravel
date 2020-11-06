<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Home - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-home.css" rel="stylesheet">
  <link href="{{asset('css/app.css')}}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">INSPIRED27 STORE</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
          <li class="nav-item {{ Route::is('home2') ? 'active' : '' }}"> 
            @can('user-display') 
            <a class="nav-link" href="{{ route('home2') }}">HOME</a> 
            @endcan 
          </li> 
          <li class="nav-item {{ Route::is('men') ? 'active' : '' }}"> 
            @can('user-display') 
            <a class="nav-link" href="{{ route('men') }}">MEN</a> 
            @endcan 
          </li> 
          <li class="nav-item {{ Route::is('women') ? 'active' : '' }}"> 
            @can('user-display') 
            <a class="nav-link" href="{{ route('women') }}">WOMEN</a> 
            @endcan 
          </li> 
          <li class="nav-item {{ Route::is('kids') ? 'active' : '' }}"> 
            @can('user-display') 
            <a class="nav-link" href="{{ route('kids') }}">KIDS</a> 
            @endcan 
          </li> 
          <li class="nav-item {{ Route::is('carabayar') ? 'active' : '' }}"> 
            @can('user-display') 
            <a class="nav-link" href="{{ route('carabayar') }}">HOW TO BUY</a> 
            @endcan 
          </li> 
          <li class="nav-item {{ Route::is('career') ? 'active' : '' }}"> 
            @can('user-display') 
            <a class="nav-link" href="{{ route('career') }}">CAREER</a> 
            @endcan 
          </li> 
          <li class="nav-item {{ Route::is('manage') ? 'active' : '' }}"> 
            @can('manage-lakis') 
            <a class="nav-link" href="{{ route('manage') }}">MANAGE</a> 
            @endcan 
          </li> 
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              <img class="User"  src="image/profil.jpg" width="15" height="20">
                  {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/cmslaravel/public/men" class="icon"><span
                   class="glyphicon glyphicon-user"></span>User Profile
                    <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                            </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                  </div>
                    </li>
                    </ul>
                </div>
            </div>
          </nav>
   
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-9">
      <br>
        <!--<img src ="image/inspired27.png" alt="inspired27.png" width="140" height="60">-->

        <!-- Blog Post -->

        @yield('konten')

        <!-- Pagination -->
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-3">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li class="nav-item {{ Route::is('home2') ? 'active' : '' }}"> 
                    @can('user-display') 
                    <a class="nav-link" href="{{ route('home2') }}">HOME</a> 
                    @endcan 
                  </li> 
                  <li class="nav-item {{ Route::is('men') ? 'active' : '' }}"> 
                    @can('user-display') 
                    <a class="nav-link" href="{{ route('men') }}">MEN</a> 
                    @endcan 
                  </li> 
                  <li class="nav-item {{ Route::is('women') ? 'active' : '' }}"> 
                    @can('user-display') 
                    <a class="nav-link" href="{{ route('women') }}">WOMEN</a> 
                    @endcan 
                  </li> 
                  <li class="nav-item {{ Route::is('manage') ? 'active' : '' }}"> 
                     @can('manage-lakis') 
                     <a class="nav-link" href="{{ route('manage') }}">MANAGE</a> 
                     @endcan 
                     </li> 
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                <li class="nav-item {{ Route::is('kids') ? 'active' : '' }}"> 
                  @can('user-display') 
                  <a class="nav-link" href="{{ route('kids') }}">KIDS</a> 
                  @endcan 
                </li> 
                <li class="nav-item {{ Route::is('carabayar') ? 'active' : '' }}"> 
                  @can('user-display') 
                  <a class="nav-link" href="{{ route('carabayar') }}">HOW TO BUY</a> 
                  @endcan 
                </li> 
                <li class="nav-item {{ Route::is('career') ? 'active' : '' }}"> 
                  @can('user-display') 
                  <a class="nav-link" href="{{ route('career') }}">CAREER</a> 
                  @endcan 
                </li> 
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">ALAMAT</h5>
          <div class="card-body">
          Jl. Soekarno - Hatta No.D-511, Mojolangu, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
