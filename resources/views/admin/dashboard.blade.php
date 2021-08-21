@extends('admin.base')
@section('title')
    Dashboard
@endsection
@section('content')

    <section style=" height: 100%; position: relative; overflow: hidden;">

       

            <video style="position: relative; margin-top:-250px" playsinline autoplay muted loop  id="bgvideo"
                width="100%">
                <source src="{{ asset('/static-image/dashboard.mp4') }}" type="video/mp4"  >
            </video>

            {{-- <img src="{{ asset('static-assets/foto-gedung-syariah.jpeg') }}" class="w-100 " /> --}}

    </section>
{{-- 
    <section>



        <div class="w-100" style="overflow: hidden; height: 800px;">


            <video style="position: relative;" playsinline autoplay muted loop poster="placeholder.jpg" id="bgvideo"
                width="100%" height="30%">
                <source src="{{ URL::asset('/static-image/dashboard.mp4') }}" type="video/mp4">
            </video>

        </div>


    </section> --}}


@endsection

@section('script')


@endsection
