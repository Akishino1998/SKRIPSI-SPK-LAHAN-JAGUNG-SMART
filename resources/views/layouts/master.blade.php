
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('Logo-Monogram Hanju.ico') }}" />
    <link rel="icon" type="image/png" href="{{ asset('Logo-Monogram Hanju.ico') }}" rel="stylesheet" />
    <title>Aplikasi SPK Lahan Jagung</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link id="pagestyle" href="{{ asset('assets/css/soft-ui-dashboard.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0-beta1/css/bootstrap.min.css">

</head>
<style>
    h1,h2,h3,h4,h5,h6,a,input,div,td,tr,th{
        font-family: 'PT Sans', sans-serif !important;
    }
    .btn-info{
        color: white !important;
    }
</style>
<body class="g-sidenav-show  bg-gray-100">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="#"  style="display: flex;">
                <img src="{{ asset('Logo-Monogram Hanju.png') }}" class="navbar-brand-img h-100 mt-1" alt="main_logo">
                <div style="display:inline-block;">
                    <span class="ms-1">Hi, {{ Auth::user()->name }}</span><br>
                    <span class="ms-1 font-weight-bold">Aplikasi SPK Lahan Jagung</span>
                </div>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ (request()->routeIs('dashboard')) ? 'active' : '' }}" href="{{ route('dashboard') }}">
                        <i class="fas fa-home  icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center"></i>
                        <span class="nav-link-text ms-1">Beranda</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->routeIs('master.kriterias.index')) ? 'active' : '' }}" href="{{ route('master.kriterias.index') }}">
                        <i class="fa-solid fa-table icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center"></i>
                        <span class="nav-link-text ms-1">Kriteria</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->routeIs('master.dataKriterias.index')) ? 'active' : '' }}" href="{{ route('master.dataKriterias.index') }}">
                        <i class="fa-solid fa-table icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center"></i>
                        <span class="nav-link-text ms-1">Detail Kriteria</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->routeIs('master.alternatifs.index')) ? 'active' : '' }}" href="{{ route('master.alternatifs.index') }}">
                        <i class="fa-solid fa-table icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center"></i>
                        <span class="nav-link-text ms-1">Alternatif</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->routeIs('master.hasil')) ? 'active' : '' }}" href="{{ route('master.hasil') }}">
                        <i class="fa-solid fa-table icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center"></i>
                        <span class="nav-link-text ms-1">Hasil</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#pagesExamples" class="nav-link collapsed" aria-controls="pagesExamples" role="button" aria-expanded="false">
                        <i class="fas fa-database icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2 "></i>
                        <span class="nav-link-text ms-1">Master </span>
                    </a>
                    <div class="collapse" id="pagesExamples" style="">
                        <ul class="nav ms-4 ps-3">
                            <li class="nav-item ">
                                <a class="nav-link " href="{{ route('master.refLokasis.index') }}">
                                    <span class="sidenav-mini-icon"> L </span>
                                    <span class="sidenav-normal"> Lokasi</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="{{ route('logout') }}" class="nav-link text-body font-weight-bold px-0"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">Logout</span></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid py-4">
            <div class="row">
                @yield('konten')
            </div>
        </div>
    </main>
    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script>$('.uang').mask('000.000.000.000', {reverse: true});</script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('assets/js/soft-ui-dashboard.min.js?v=1.0.3') }}"></script>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>