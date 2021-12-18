@extends('layouts.app')
@section('title','Detail Travel')

@section('content')
<main>
  <section class="section-details-header"></section>
    <section class="section-details-content">
      <div class="container">
        <div class="row">
          <div class="col p-0">
            <nav>
              <ol class="breadcrumb">
              	<li class="breadcrumb-item">
                	Paket Travel
              	</li>
              	<li class="breadcrumb-item active">
                	Details
              	</li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 pl-lg-8">
            <div class="card card-details">
              <h1>{{ $item->title }}</h1>
              <p>
                  {{ $item->namapaket }}
              </p>
              @if ($item->galeris->count())
                <div class="galeris">
                  <div class="xzoom-container">
                    <img 
                      src="{{ Storage::url($item->galeris->first()->image )}}" 
                      class="xzoom" 
                      id="xzoom-default"
                      xoriginal="{{ Storage::url($item->galeris->first()->image )}}">
                  </div>
                  <div class="xzoom-thumbs">
                    @foreach ($item->galeris as $galeris)
                    	<a href="{{ Storage::url($galeris->image)}}">
                        <img 
                            src="{{ Storage::url($galeris->image)}}" 
                            class="xzoom-galeris"
                            width="128" 
                            xpreview="{{ Storage::url($galeris->image)}}"
                        />
                    	</a>
                    @endforeach
                  </div>
                </div>
              @endif
              <h2>Tentang Wisata</h2>
              <p>
                {!! $item->deskripsi !!}
              </p>

              <div class="features row">
                <div class="col-md-4">
                  <img src="{{ url ('frontend/images2/ic_hotel.png')}}" alt="" class="features-image">
                    <div class="description">
                      <h3>Hotel</h3>
                      <p>{{ $item->hotel}}</p>
                    </div>
                </div>

                <div class="col-md-4 border-left">
                  <img src="{{ url ('frontend/images2/ic_maskapai.png')}}" alt=""class="features-image">
                    <div class="description">
                      <h3>Maskapai</h3>
                      <p>{{ $item->maskapai}}</p>
                  	</div>
                </div>
                                
                <div class="col-md-4 border-left">
                  <img src="{{ url ('frontend/images2/ic_paket.png')}}" alt="" class="features-image">
                    <div class="description">
                      <h3>Jenis Paket</h3>
                      <p>{{ $item->jenispaket}}</p>
                    </div>
                </div>
              </div>
                        
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-details card-right">
                  <h2>Informasi Paket</h2>
                  <hr>
                  <table class="trip-information">
                    <tr>
                      <th width="50%">Tanggal</th>
                        <td width="50%" class="text-right">
													{{ \Carbon\Carbon::create($item->tgl_berangkat)->format('F n, Y') }}
                        </td>
                    </tr>
                    <tr>
                        <th width="50%">Program Hari</th>
                        <td width="50%" class="text-right">
													{{ $item->programhari }}
                        </td>
                    </tr>
                    <tr>
                      <th width="50%">Bandara</th>
                      <td width="50%" class="text-right">
												{{ $item->bandara }}
                      </td>
                    </tr>
                    <tr>
                      <th width="50%">Pilihan Kamar</th>
                      <td width="50%" class="text-right">
												{{ $item->kamar }}
                      </td>
                    </tr>
                    <tr>
                      <th width="50%">Type</th>
                      <td width="50%" class="text-right">
												{{ $item->type }}
                      </td>
                    </tr>
                    <tr>
                        <th width="50%">Harga</th>
                        <td width="50%" class="text-right">
													Rp. {{ $item->harga }} /pax
                        </td>
                    </tr>
                	</table>
            </div>
            <div class="join-container">
              @auth
								<form action="{{ route('checkout_proses', $item->id)}}" method="POST">
									@csrf
									<button class="btn btn-block btn-join-now mt-3 py-2" type="submit">
										Daftar Sekarang
									</button>
								</form>
							@endauth
							@guest
								<a href="{{ route('login') }}" class="btn btn-block btn-join-now mt-3 py-2">
									Login atau Registrasi 
								</a>
							@endguest
            </div>
          </div>
        </div>
      </div>
    </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url ('frontend/libraries/xzoom/xzoom.css') }}">
@endpush

@push('addon-script')
<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.xzoom, .xzoom-galeris').xzoom({
            zoomwidth: 500,
            tittle: false,
            tint: '#333',
            Xoffset: 15
        });
    });
</script>
@endpush