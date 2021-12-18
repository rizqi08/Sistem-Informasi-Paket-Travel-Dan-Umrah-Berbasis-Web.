@extends('layouts.success')
@section('title', 'Checkout Sukses')

@section('content')
<main>
    <div class="section-success d-flex align-items-center">
        <div class="col text-center">
            <img src="{{ url ('frontend/images2/ic_mail.png')}}" alt="" >
            <h1>Alhamdulillah Selesai</h1>
            <p>Kami telah mengirimi Anda email untuk instruksi perjalanan  
                <br>
                Tolong dibaca dengan Baik</p>

            <a href="{{ route ('datapelanggans-create')}}" class="btn btn-page mt-3 px-5">
                Lengkapi Data
            </a>
        </div>
    </div>
</main>
@endsection