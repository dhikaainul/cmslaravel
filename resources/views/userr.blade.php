@extends ('master')
@section('konten')
        <!-- Blog Post -->
          @foreach($userr as $barang)
            <div class="col mb-3">
              <div class="card h-80">        
                  <div class="card-body">
                  <img width="150px" src="{{asset('/'.$barang->image)}}">
                  <p class="card-text">
                    <hr>
                      <strong>Nama              :</strong> {{$barang->nama}}
                        <hr>
                          <strong>No HP         :</strong> {{$barang->no_hp}}
                          <hr>
                          <strong>Jenis Kelamin :</strong> {{$barang->jenis_kelamin}}
                        <hr>
                      <strong>Alamat            :</strong> {{$barang->alamat}}
                    <hr>
                    <a href="/cmslaravel/public/edituserr/{{ $barang->id }}" class="btn btn-primary btn-sm">Edit</a> 
                  </div>
            </div>
          </div>
        @endforeach
     @endsection
  </div>
</div>
