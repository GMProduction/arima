@extends('pimpinan.base')
@section('title')
    Dashboard
@endsection
@section('content')

    <section>

        <div style="width: 100%; height: 500px;">

        
        <video  autoplay muted loop  loop id="myVideo" style=" width: 100%; margin-top: -200px; z-index: -100">
            <source src="{{ asset('/static-image/bgv.mp4') }}" style="  object-fit: cover;" type="video/mp4">
        </video>
    </div>
    </section>


@endsection

@section('script')


@endsection
