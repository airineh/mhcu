@extends('layouts.app')

@section('content')
<section class="section text-center" style="padding: 80px 0;">
    <h2>Pesan Berhasil Dikirim!</h2>
    <p>Terima kasih telah menghubungi kami. Kami akan segera membalas pesan Anda.</p>

    <a href="{{ url('/') }}" class="btn btn-primary mt-3">Kembali ke Beranda</a>
</section>
@endsection
