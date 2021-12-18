@extends('layouts.checkout')
@section('title','Checkout')

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
              <li class="breadcrumb-item">
                Detail
              </li>
              <li class="breadcrumb-item active">
                Checkout
              </li>
            </ol>
        	</nav>
     	 	</div>
  		</div>
      <div class="row">
        <div class="col-lg-8 pl-lg-8">
          <div class="card card-details">
						@if ($errors->any())
							<div class="alert alert-danger">
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif
            <h1>Siapa Yang Pergi?</h1>
            <p>				
							{{ $item->paket_travels->title }}, {{ $item->paket_travels->namapaket }}					
            </p>
            <div class="attendee">
              <table class="table table-responsive-sm text-center">
                <thead>
                  <tr>
                    <td>Profil</td>
                    <td>Nama</td>
                    <td>Kebangsaan</td>
                    <td>VISA</td>
                    <td>Passport</td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                	@forelse ($item->details as $detail)
										<tr>
											<td>
												<img src="https://ui-avatars.com/api/?name={{ $detail->username }}"
													height="60" class="rounded-circle" />
											</td>
											<td class="align-middle">
												{{ $detail->username }}
											</td>
											<td class="align-middle">
												{{ $detail->kebangsaan }}
											</td>
											<td class="align-middle">
												{{ $detail->is_visa ? '30 Days' : 'N/A' }}
											</td>
											<td class="align-middle">
												{{ \Carbon\Carbon::createFromDate($detail->doe_passport) >
													\Carbon\Carbon::now() ? 'Active' : 'Inactive' }}
											</td>
											<td class="align-middle">
												<a href="{{ route('checkout-remove', $detail->id) }}">
													<img src="{{ url('frontend/images2/ic_remove.png') }}" alt="">
												</a> 
											</td>
										</tr>
									@empty
										<tr>
											<td colspan="6" class="text-center">
												No Visitor
											</td>
										</tr>
									@endforelse
                </tbody>
              </table>
            </div>
            <div class="member mt-3">
              <h2>Tambah Anggota</h2>
                <form class="from-inline" method="POST" action="{{ route('checkout-create',
								$item->id) }}">
								@csrf
                  <label for="username" class="sr-only">Nama</label>
                  <input type="text" 
                  			 name="username" 
                  			 class="form-control mb-2 mr-sm-2" 
                  			 id="username" 
												 required
                  			 placeholder="Username"/>

                  <label for="kebangsaan" class="sr-only">Kebangsaan</label>
                  <input type="text" 
                  			 name="kebangsaan" 
                  			 class="form-control mb-2 mr-sm-2" 
                  			 id="kebangsaan" 
												 required
                  			 placeholder="Kebangsaan"/>

                  <label for="is_visa" class="sr-only">Visa</label>
                  <select name="is_visa" 
                  				id="is_visa" 
													required
                  				class="custom-select mb-2 mr-sm-2">
                    <option value="" selected>VISA</option>
                    <option value="1">30 Days</option>
                    <option value="0">N/A</option>
                  </select>

                  <label for="doe_passport" class="sr-only">DOE Passport</label>
                  <div class="input-group mb-2 mr-sm-2">
                    <input type="text" class="form-control datepicker"
													 name="doe_passport"
                      		 id="doe_passport" placeholder="DOE Passport">
                  </div> 

                  <button type="submit" class="btn btn-add-now mb-2 px-4">
                    Tambah
                  </button>
                </form>
                <h3 class="mt-2 mb-0">Note</h3>
                <p class="disclaimer mb-0">
                  Anda hanya dapat mengundang anggota yang telah terdaftar.
                </p>
                                
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card card-details card-right">
            <h2>Informasi Checkout</h2>
            <table class="trip-information">
            	<tr>
              	<th width="50%">Member</th>
              	<td width="50%" class="text-right">
                	{{ $item->details->count() }} orang
              	</td>
            	</tr>
              <tr>
                <th width="50%">VISA Tambahan</th>
                <td width="50%" class="text-right">
									Rp. {{ $item->tambah_visa }}
                </td>
              </tr>
              <tr>
                <th width="50%">Harga</th>
                <td width="50%" class="text-right">
									Rp. {{ $item->paket_travels->harga }} / orang
                </td>
              </tr>
              <tr>
                <th width="50%">Sub Total</th>
                <td width="50%" class="text-right">
									Rp. {{ $item->total_transaksi }}
                </td>
              </tr>
              <tr>
                <th width="50%">Total</th>
                <td width="50%" class="text-right text-total">
                  <span class="text-yellow">Rp. {{ $item->total_transaksi }}</span>
                </td>
              </tr>
          	</table>
            <hr>
            <h2>Instruksi Pembayaran</h2>
            <p class="payment-instruction">
							Anda akan diarahkan ke halaman lain untuk membayar menggunakan M-banking
						</p>
            <img src="{{ url ('frontend/images2/bni.png')}}" class="w-50">
            <br>
            <img src="{{ url ('frontend/images2/bri.png')}}" class="w-50">
            <br>
            <img src="{{ url ('frontend/images2/mandiri.png')}}" class="w-50">
      	</div>
        
        <div class="join-container">
        	<a href="{{ route('checkout-success', $item->id) }}" class="btn btn-block btn-join-now mt-3 py-2">
            Pembayaran
          </a>
        </div>
        
        <div class="text-center mt-3">
          <a href="{{ route('detail', $item->paket_travels->slug) }}" class="text-muted">
            Cancel Booking
          </a>
        </div>
      </div>
    </div>
    </div>
  </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url ('frontend/libraries/gijgo/css/gijgo.min.css') }}">
@endpush

@push('addon-script')
<script src="{{ url ('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.datepicker').datepicker({
								format: 'yyyy-mm-dd',
                uiLibrary: 'bootstrap4',
                icons: {
                    rightIcon: '<img src="{{ url('frontend/images2/ic_date.png') }}"/>'
                }
            });
        });
    </script>
@endpush