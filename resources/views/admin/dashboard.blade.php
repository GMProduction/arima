@extends('admin.base')
@section('title')
    Dashboard
@endsection
@section('content')

    <section>

        <div style="position: relative; width: 100%">


            <video autoplay muted loop id="myVideo" style=" width: 500px;  z-index: -100; margin-left: calc(50% - 250px)">
                <source src="{{ asset('/static-image/bgv.mp4') }}" style="  object-fit: cover;" type="video/mp4">
            </video>
        </div>
    </section>

    <footer class="container-fluid footerstyle">
        <div class="footer-up">
            <div class="row row-cols-lg-4">
                <div class="col">
                    <p class="title-footer">
                        Tentang Kami
                    </p>

                    <div class="content-footer">
                        <table>
                           
                            <td>
                                <p>UD. SANUSI melayani: Alat-alat pertukangan dan bahan bangunan
                                </p>

                            </td>

                        </table>
                    </div>


                </div>
                <div class="col">
                    <p class="title-footer">
                        Alamat
                    </p>

                    <div class="content-footer">
                        <table>
                           
                            <td>
                                <p>Jl. Agroboga No.1, Ledok, Kec. Argomulyo, Kota. Salatiga, Jawa Tengah 50732
                                </p>

                            </td>

                        </table>
                    </div>


                </div>

                <div class="col">
                    <p class="title-footer">
                        Kontak
                    </p>

                    <div class="content-footer">
                        <table>
                           
                            <td>
                                <p>Telp: +62 853-2664-5555
                                </p>

                            </td>

                        </table>
                    </div>


                </div>

                <div class="col">
                    <p class="title-footer">
                        Jam Buka :
                    </p>

                    <div class="content-footer">
                        <table>
                           
                            <td>
                                <p>Senin : 08.00-16.00</p>
                                <p>Selasa : 08.00-16.00</p>
                                <p>Rabu : 08.00-16.00</p>
                                <p>Kamis : 08.00-16.00</p>
                                <p>Jumat : 08.00-16.00</p>
                                <p>Sabtu : 08.00-16.00</p>
                                <p>Minggu : 08.00-16.00</p>

                            </td>

                        </table>
                    </div>


                </div>
            </div>
        </div>
        {{-- <div style="height: 50px; background-color: #1caa5c" class="d-flex justify-content-center align-items-center">
        <p class="mb-0 "> Copy Right 2020</p>
    </div> --}}

    </footer>


@endsection

@section('script')


@endsection
