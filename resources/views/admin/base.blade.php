<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard | Toko Akrilik</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>admin</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bona+Nova:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/myStyle.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('datepicker-dist/css/bootstrap-datepicker.min.css') }}" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <!-- custom css -->

    <script src="{{ asset('js/swal.js') }}"></script>

</head>

<body>
    <!-- Side-Nav -->
    <div class="side-navbar active-nav d-flex justify-content-between  flex-wrap flex-column" id="sidebar">
        <ul class="nav flex-column text-white w-100 h-100">
            <a href="#" class="nav-link h3 text-white my-2">
                UD.SANUSI
            </a>


            @if (auth()->user()->role == 'admin')
                <a href="/admin">
                    <li href="#" class="nav-link t-white">
                        <i class="bx bxs-dashboard"></i>
                        <span class="mx-2">Dashboard</span>
                    </li>
                </a>

                <a href="/admin/barang">
                    <li href="#" class="nav-link t-white">
                        <i class="bx bxs-cube"></i>
                        <span class="mx-2">Master barang</span>
                    </li>
                </a>
            @endif

            @if (auth()->user()->role == 'pimpinan')
                <a href="/admin/barangmasuk">
                    <li href="#" class="nav-link t-white">
                        <i class='bx bx-archive-in'></i>
                        <span class="mx-2">Data Barang Masuk</span>
                    </li>

                </a>
            @endif
            
            @if (auth()->user()->role == 'admin')
                <a href="/admin/penjualan">
                    <li href="#" class="nav-link t-white">
                        <i class='bx bx-archive-out'></i>
                        <span class="mx-2">Data Penjualan</span>
                    </li>

                </a>
            @endif
            <a href="/admin/laporan">
                <li href="#" class="nav-link t-white">
                    <i class='bx bxs-report'></i>
                    <span class="mx-2">Laporan</span>
                </li>

            </a>

            {{-- <a href="/admin/admin">
                <li href="#" class="nav-link t-white">
                    <i class="bx bxs-group"></i>
                    <span class="mx-2">Data Admin</span>
                </li>

            </a> --}}

            <a href="/logout" class="mt-auto">
                <li href="#" class="nav-link t-white">
                    <i class="bx bx-link-external"></i>
                    <span class="mx-2">Logout</span>
                </li>

            </a>
        </ul>


    </div>

    <!-- Main Wrapper -->
    <div class="p-1 my-container active-cont ">
        <!-- Top Nav -->
        <nav class="navbar top-navbar navbar-light b-white px-5 " style="z-index: 10">
            <a class="btn border-0" id="menu-btn"><i class="bx bx-menu"></i></a>
            <a>@yield('title')</a>
        </nav>
        <!--End Top Nav -->
        <div class="content-wrapper bg-light p-2" style="height: 100vh;">
            @yield('content')
        </div>
    </div>


    <script src="{{ asset('bootstrap/js/jquery.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/myStyle.js') }}"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>
    <script src="{{ asset('datepicker-dist/js/bootstrap-datepicker.min.js') }}"></script>
    @yield('script')
</body>

</html>
