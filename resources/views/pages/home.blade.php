@extends('layouts.app')

@section('title')
    TANUR TOUR
@endsection

@section('content')
    <!-- header -->
    <header class="text-center">
        {{-- <h1>Pelayanan Amanah 
            <span class="text-yellow">Dan Professional</span>
            <br/>
            Hanya Dengan Sekali Klik
        </h1>
        <p class="mt-3">
            Kami Melayani Setulus Hati & Memberikan Yang Terbaik
        </p>
        <a href="#popular" class="btn btn-daftar px-4 mt-4">
            Daftar
        </a> --}}
    </header>

    <main>
        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Pilihan Paket</h2>
                    </div>
                </div>
                <div class="section-popular-travel row justify-content-center">
                    @foreach ($items as $item)
                        <!-- image popular1 -->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                             style="background-image: url('{{ $item->galeris->count()?
														 Storage::url($item->galeris->first()->image) : '' }}');"
												>
                            <div class="travel-country">{{ $item->title }}</div>
                            <div class="nama-travel">{{ $item->namapaket }}</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail', $item->slug) }}" class="btn btn-travel-details px-4">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>


        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>Testimoni</h2>
                        <p>Mereka memberikan momen 
                            <br>
                            pengalaman Terbaik</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    
                    <!-- testimoni user 1 -->
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images2/user_1.png" alt="user"
                                class="mb-4 rounded-circle">
                                <h3 class="mb-4">Siti</h3>
                                <p class="testimonial">
                                    “ Pelayanan di Tanur Muthmainnah 
                                    <br> 
                                    sangat professional dan
                                    <br> 
                                    dilayani dengan sangat baik “
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Perjalanan Haji Plus
                            </p>
                        </div>
                    </div>

                    <!-- testimoni user 2 -->
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images2/user_3.png" alt="user"
                                class="mb-4 rounded-circle">
                                <h3 class="mb-4">Kadir</h3>
                                <p class="testimonial">
                                    “ Tanur Muthmainnah
                                    <br>
                                    memiliki staff yang ramah
                                    <br>
                                    dan mampu menciptakan 
                                    <br>
                                    suasana kekeluargaan “
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                               Perjalanan Istanbul</p>
                        </div>
                    </div>

                    <!-- testimoni user 3 -->
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images2/user_2.png" alt="user"
                                class="mb-4 rounded-circle">
                                <h3 class="mb-4">Shayna</h3>
                                <p class="testimonial">
                                    “ Saya merasakan sendiri pelayanan umrah
                                    <br>
                                    di Tanur Muthmainnah sangat praktis dan mudah“
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Perjalanan Umrah
                            </p>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-bantuan px-4 mt-4 mx-1">
                            Bantuan
                        </a>
                        <a href="{{route('register')}}" class="btn btn-daftar px-4 mt-4 mx-1">
                            Daftar
                        </a>
                    </div>
                </div>
            </div>
        </section>
    
    </main>
@endsection